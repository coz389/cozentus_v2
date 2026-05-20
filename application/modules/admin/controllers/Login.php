<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . "libraries/phpmailer/PHPMailer.php");
require_once(APPPATH . "libraries/phpmailer/Exception.php");
require_once(APPPATH . "libraries/phpmailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Login extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->helper('mailhelper');
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function reset_password()
	{
		$this->load->view('login');
	}

	function auth()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		//$this->session->sess_destroy('loginAttempt');

		if (empty($username) && empty($password)) {
			$res['status'] = false;
			$res['msg'] = '<p class="alert alert-warning">Check Required Fields!</p>';
			echo json_encode($res);
			exit;
		}
		//echo json_encode($_POST); exit;
		if ($this->session->userdata('loginAttempt') >= 3) {
			$res['status'] = false;
			$res['msg'] = '<p class="alert alert-danger">Ops! Your Account is Locked!</p>';
			echo json_encode($res);
			exit;
		}
		$user = $this->admin_model->check_admin_exists($username, $password);
		//echo json_encode($user);exit;
		if ($user) {
			//$role = $this->admin_model->checkAdminRole($username);
			$user_data = $this->admin_model->get_login_user_data($username);
			if (isset($user_data) && $user_data['id'] == 2) {
				$redirect = base_url('admin/contactslist');
			} else {
				$redirect = base_url('admin/blogslist');
			}
			$this->session->set_userdata('AdminLogin', 'TRUE');

			$this->session->set_userdata('ADMIN', $username);
			$this->session->set_userdata('USER_DATA', $user_data);
			$res['status'] = true;
			$res['redirect'] = $redirect;
			$res['msg'] = '<p class="alert alert-success">Login Success</p>';
		} else {
			$attempt = $this->session->userdata('loginAttempt');
			$attempt++;
			$this->session->set_userdata('loginAttempt', $attempt);
			$res['msg'] = '<p class="alert alert-danger">Invalid Login</p>';
		}
		echo json_encode($res);
		exit;
	}
	/*
	function resetpassword($secret = false)
	{
		if ($secret) {
			$qry = $this->db->get_where('admin_master', ['link' => $secret, 'link_expired' => 0]);
			if ($qry->num_rows() > 0) {
				$row = $qry->row_array();
				$this->db->update('admin_master', ['link_expired' => 1], ['id' => $row['id']]);
				$this->session->set_userdata('AdminLogin', 'TRUE');

				$this->session->set_userdata('ADMIN', $row['username']);
				redirect(base_url('admin'));
			}
		}
		redirect(base_url());
		exit;
	}
	*/
	public function forgotpassword()
	{
		// If already logged in, redirect away
		if ($this->session->userdata('admin_logged_in')) {
			redirect('admin/dashboard');
		}

		// Handle AJAX POST submission
		if ($this->input->method() === 'post') {
			$this->_process_forgot_password();
			return;
			// $res['status'] = true;
			//$res['msg'] = '<p class="alert alert-success">If that email is registered, you will receive a reset link shortly.</p>';
			// $res['redirect'] = base_url('admin/login');
			// echo json_encode($res);
			// exit;
		}
		// Render the view
		$this->load->view('login');
	}
	private function _process_forgot_password()
	{
		$res = ['status' => false, 'msg' => ''];

		// ── Rate-limit: max 3 attempts per session ──────────────
		$attempts = (int) $this->session->userdata('fp_attempt');
		if ($attempts >= 3) {
			$res['msg'] = '<p class="alert alert-danger">Too many attempts. Please try again later.</p>';
			echo json_encode($res);
			return;
		}

		// ── Validate email input ────────────────────────────────
		$email = trim($this->input->post('email'));

		if (empty($email)) {
			$res['msg'] = '<p class="alert alert-warning">Email address is required.</p>';
			echo json_encode($res);
			return;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$res['msg'] = '<p class="alert alert-warning">Please enter a valid email address.</p>';
			echo json_encode($res);
			return;
		}

		// ── Check user exists ───────────────────────────────────
		$user = $this->admin_model->check_admin_email_exists($email);

		if (!$user) {
			// Increment attempt counter even on "not found"
			// (prevents user enumeration timing attack — always same response)
			$this->session->set_userdata('fp_attempt', $attempts + 1);

			// Return a GENERIC success message regardless (security best practice:
			// do not reveal whether the email exists in the system)
			$res['status'] = true;
			$res['msg']    = '<p class="alert alert-success">If that email is registered, you will receive a reset link shortly.</p>';
			echo json_encode($res);
			return;
		}

		// ── Generate a secure, unique token ────────────────────
		$token   = $this->_generate_secure_token();
		$expires = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token valid for 1 hour

		// ── Persist token to DB ─────────────────────────────────
		$saved = $this->admin_model->save_reset_token($user['id'], $token, $expires);

		if (!$saved) {
			$res['msg'] = '<p class="alert alert-danger">Something went wrong. Please try again.</p>';
			echo json_encode($res);
			return;
		}

		// ── Build reset link ────────────────────────────────────
		$reset_link = base_url('admin/login/resetpassword/' . $token);

		// ── Send email ──────────────────────────────────────────
		$subject = 'Password Reset Request';
		$body    = $this->_build_reset_email_body($user, $reset_link);
		$sent = sendEmailOAuth($user['recovery_email'], $subject, $body);
		// If you use CI's email library instead:
		// $sent = $this->_send_email($user['recovery_email'], $subject, $body);
		// ── Reset attempt counter on success ────────────────────
		$this->session->unset_userdata('fp_attempt');

		$res['status'] = true;
		$res['msg']    = '<p class="alert alert-success">If that email is registered, you will receive a reset link shortly.</p>';
		$res['redirect'] = base_url('admin/login');
		echo json_encode($res);
	}
	public function resetpassword($token = null)
	{
		// Guard: token must be present
		if (empty($token)) {
			show_404();
		}

		// Sanitise token (alphanumeric only)
		$token = preg_replace('/[^a-zA-Z0-9]/', '', $token);

		// Look up token in DB (must exist + not expired + not already used)
		$user = $this->admin_model->get_user_by_reset_token($token);

		if (!$user) {
			$this->session->set_flashdata('error', 'This reset link is invalid or has expired.');
			redirect('admin/login/forgotpassword');
		}

		// ── Handle form submission ──────────────────────────────
		if ($this->input->method() === 'post') {
			$this->_process_reset_password($user, $token);
			return;
		}

		// ── Render reset form ───────────────────────────────────
		$data['token'] = $token;
		$this->load->view('reset-password', $data);
	}
	private function _process_reset_password($user, $token)
	{
		$res = ['status' => false, 'msg' => ''];

		$password         = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');

		// ── Validate ────────────────────────────────────────────
		if (empty($password) || empty($confirm_password)) {
			$res['msg'] = '<p class="alert alert-warning">Both password fields are required.</p>';
			echo json_encode($res);
			return;
		}

		if (strlen($password) < 8) {
			$res['msg'] = '<p class="alert alert-warning">Password must be at least 8 characters.</p>';
			echo json_encode($res);
			return;
		}

		if (!preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
			$res['msg'] = '<p class="alert alert-warning">Password must contain at least one uppercase letter and one number.</p>';
			echo json_encode($res);
			return;
		}

		if ($password !== $confirm_password) {
			$res['msg'] = '<p class="alert alert-warning">Passwords do not match.</p>';
			echo json_encode($res);
			return;
		}

		// ── Hash and update password ────────────────────────────
		$hashed = password_hash($password, PASSWORD_BCRYPT);
		$updated = $this->admin_model->update_admin_password($user['id'], $hashed);

		if (!$updated) {
			$res['msg'] = '<p class="alert alert-danger">Failed to update password. Please try again.</p>';
			echo json_encode($res);
			return;
		}

		// ── Invalidate token ────────────────────────────────────
		$this->admin_model->mark_token_used($user['id']);

		// ── Clear any login lockout sessions ────────────────────
		$this->session->unset_userdata('loginAttempt');
		$this->session->unset_userdata('fp_attempt');

		$res['status']   = true;
		$res['msg']      = '<p class="alert alert-success">Password updated successfully! Redirecting to login...</p>';
		$res['redirect'] = base_url('admin/login');
		echo json_encode($res);
	}

	/**
	 * Generate a cryptographically secure URL-safe token.
	 */
	private function _generate_secure_token()
	{
		return bin2hex(random_bytes(32)); // 64-char hex string
	}

	/**
	 * Build a plain-text + simple HTML email body for the reset link.
	 */
	private function _build_reset_email_body($user, $reset_link)
	{
		$name    = isset($user['name']) ? htmlspecialchars($user['name']) : 'Admin';
		$expires = '1 hour';

		return "
        <p>Hi,</p>
        <p>We received a request to reset your password.</p>
        <p>Click the link below to set a new password. This link is valid for <strong>{$expires}</strong>.</p>
        <p><a href=\"{$reset_link}\">{$reset_link}</a></p>
        <p>If you did not request this, please ignore this email. Your password will remain unchanged.</p>
        <hr>
        <small>For security, never share this link with anyone.</small>
    ";
	}










	/*
	function forgotpassword()
	{
        $username=$this->input->post('email');
		 
		if(empty($username)){
			$res['status']=false;
			$res['msg']='<p class="alert alert-warning">Email Required !</p>';
			echo json_encode($res);
			exit;
		}
		//echo json_encode($_POST); exit;
		if ($this->session->userdata('loginAttempt') >= 3) {
			$res['status'] = false;
			$res['msg'] = '<p class="alert alert-danger">Ops! Your Account is Locked!</p>';
			echo json_encode($res);
			exit;
		}
		$user = $this->admin_model->check_admin_email_exists($username);
        //echo json_encode($user);exit;
	 	if($user) {
			$msg = "<h2>This is a test email using OAuth 2.0 authentication.</h2>";
			$link = $this->generateRandomString();
			$this->db->update('admin_master',['link'=>$link,'link_expired'=>0],['id'=>$user['id']]);

			$msg =base_url('admin/login/resetpassword/').$link;
			// $this->sendemail($user['recovery_email'], 'Check admin login link', $msg);
			$message = sendEmailOAuth($user['recovery_email'], 'Check admin login link', $msg);
			$res['status'] = true;
			$res['msg'] = '<p class="alert alert-success">Login Success</p>';
		}
		else{
		    $attempt = $this->session->userdata('loginAttempt');
		    $attempt++;
		    $this->session->set_userdata('loginAttempt',$attempt);
			$res['msg']='<p class="alert alert-danger">User not found!</p>';
		}
		echo json_encode($res);
		exit;
    }*/
	function generateRandomString($length = 16)
	{
		return substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
	}
	function sendemail($email, $sub, $msg)
	{
		$mail = new PHPMailer();
		$headers = '';
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = $this->admin_model->getsettings('smtp_secure');
		$mail->Port     = $this->admin_model->getsettings('smtp_port');
		$mail->Username = $this->admin_model->getsettings('smtp_username');
		$mail->Password = $this->admin_model->getsettings('smtp_password');
		$mail->Host     = $this->admin_model->getsettings('smtp_host');
		$mail->Mailer   = "smtp";
		$mail->SetFrom($this->admin_model->getsettings('smtp_setfrom_email'), $this->admin_model->getsettings('smtp_setfrom_name'));
		$mail->AddAddress($email);
		$mail->Subject = $sub;
		$mail->WordWrap   = 40;
		$mail->MsgHTML($msg);
		$mail->IsHTML(true);
		if (!$mail->Send()) {
			return true;
		}
		return true;
	}
}
