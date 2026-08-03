<?php

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($date = NULL)
    {
        // Default to today's date if none provided
        if ($date === NULL) {
            $date = date('Y-m-d');
        }

        $file_path = APPPATH . 'logs/log-' . $date . '.php';

        if (file_exists($file_path)) {
            // Read and clean the file for the browser
            $log_content = file_get_contents($file_path);
            echo "<pre>" . htmlspecialchars($log_content) . "</pre>";
        } else {
            echo "No log file found for date: " . htmlspecialchars($date);
        }
    }

    public function testEmail()
    {
        $this->load->library('phpmailer_lib'); // Load the email library
        $mail = $this->phpmailer_lib->load();
        //echo "send email";exit;
        try {
            // SMTP configuration

            $mail->isSMTP();
            $mail->Host       = 'smtp.mailtrap.io'; //smtp.mailtrap.io
            $mail->SMTPAuth   = true;
            $mail->Username   = '9e8a80479e8583';        // 9e8a80479e8583
            $mail->Password   = '124ec8feb380d9';           // 124ec8feb380d9
            $mail->SMTPSecure = 'tls'; //tls
            $mail->Port       = 587; //587

            // Sender and recipient
            $mail->setFrom('development.experiment@gmail.com', 'Sushanta');
            $mail->addAddress('sushantakumar.patra@cozentus.com', 'Sushanta Patra');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Test Email from CodeIgniter';
            $mail->Body    = '<h3>This is a test email sent via PHPMailer + CodeIgniter</h3>';
            $mail->AltBody = 'This is a plain-text version of the email.';

            // Send email
            if ($mail->send()) {
                echo 'Email has been sent successfully!';
            } else {
                echo 'Email sending failed!';
            }
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }
    public function testEmail2()
    {
        // Load the email library
        $this->load->library('email');

        $config = [
            'protocol'    => 'smtp',
            'smtp_host'   => 'smtp.office365.com',
            'smtp_port'   => 587, // Use port 25 for unauthenticated relay
            'smtp_user'   => 'no-reply@cozentus.com',
            'smtp_pass'   => 'Cozweb2025*#000',
            'smtp_crypto' => 'tls',
            'mailtype'    => 'html',
            'charset'     => 'utf-8',
            'newline'     => "\r\n",
            'crlf'        => "\r\n",
            'wordwrap'    => true,
            'validate'    => true,
        ];
        $this->email->initialize($config);
        $this->email->from('no-reply@cozentus.com', 'Support Tool');
        $this->email->to('development.experiment@gmail.com');
        $this->email->subject('Test Email from Cozentus SMTP');
        $this->email->message('<h3>This is a test email sent via SMTP relay.</h3>');
        if ($this->email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo 'Failed to send email.<br>';
            echo $this->email->print_debugger(['headers']);
        }
    }
    public function testEmail3()
    {
        $mail = new PHPMailer();
        $headers = '';
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port     = 587;
        $mail->Username = "aamir@techmatrick.com";
        $mail->Password = "cHIEd6JrgNCZVbW0";
        $mail->Host     = "smtp-relay.brevo.com";
        $mail->Mailer   = "smtp";
        $mail->SetFrom("no-reply@cozentus.com", "Cozentus");
        $mail->addReplyTo("supplychain@cozentus.com", "Cozentus");
        //$mail->AddAddress("aamir.s.khan.as@gmail.com");
        $mail->AddAddress($email);
        //$mail->AddAddress("supplychain@cozentus.com");
        $mail->Subject = $sub;
        $mail->WordWrap   = 40;
        $mail->MsgHTML($msg);
        $mail->IsHTML(true);
        if (!$mail->Send()) {
            return true;
        }
    }
}
