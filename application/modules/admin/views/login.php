<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cozentus</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/iconfonts/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.addons.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/assets/css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url() ?>backend/assets/images/cropped-favicon-180x180.png" />


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth">
				<div class="row w-100">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left p-5">
							<div class="brand-logo">
								<img src="<?= base_url('assets/images/logo-black.png') ?>" style="" alt="logo">
							</div>
							<div class="login-form">
								<h4>Admin Login</h4>
								<h6 class="font-weight-light">Sign in to continue.</h6>
								<div id="response-msg"></div>
								<?php if ($this->session->flashdata('error')): ?>
									<div class="alert alert-danger">
										<?= $this->session->flashdata('error') ?>
									</div>
								<?php endif; ?>

								<form class="pt-3 mb-3" method="post" id="login-form">
									<div class="form-group">
										<input type="email" class="form-control form-control-lg" name="email" id="email1" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-lg" name="password" id="password1" placeholder="Password">
									</div>
									<div class="mt-3">
										<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
									</div>


								</form>
								<a href="javascript:void(0)" class="forgot-password p-3">Forgot Password</a>

							</div>

							<div class="forgot-email mt-5 d-none">
								<h4>Password Reset</h4>
								<h6 class="font-weight-light">Enter Email to continue.</h6>
								<form method="post" id="forgot-password" class="pt-3 mb-3">
									<div class="form-group">
										<input type="email" class="form-control form-control-lg" name="email" id="email1" placeholder="Email">
									</div>
									<div class="mt-3">
										<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Reset Password</button>
									</div>
								</form>
								<a href="javascript:void(0)" class="forgot-password p-3 mt-5">Back to Login</a>

							</div>
							<div id="error-msg" class="mt-3 text-center"></div>

						</div>

					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- inject:js -->
	<script src="<?= base_url() ?>backend/assets/js/off-canvas.js"></script>
	<script src="<?= base_url() ?>backend/assets/js/hoverable-collapse.js"></script>
	<script src="<?= base_url() ?>backend/assets/js/misc.js"></script>
	<script src="<?= base_url() ?>backend/assets/js/settings.js"></script>
	<script src="<?= base_url() ?>backend/assets/js/todolist.js"></script>
	<!-- endinject -->

	<script>
		$(".forgot-password").click(function() {
			if ($('.forgot-email').hasClass('d-none')) {
				$(".forgot-email").removeClass('d-none');
				$(".login-form").addClass('d-none');
			} else {
				$(".forgot-email").addClass('d-none');
				$(".login-form").removeClass('d-none');
			}
		});
		$('#login-form').submit(function(e) {
			e.preventDefault();
			var data = $('#login-form').serialize();
			$.ajax({
				method: 'post',
				url: '<?= base_url() ?>admin/login/auth',
				type: "POST",
				data: data,
				dataType: 'json',
				beforeSend: function() {
					$('.auth-form-btn').addClass('loading');
				},
				complete: function() {
					$('.auth-form-btn').removeClass('loading');
				},
				success: function(res) {
					if (res.status == true) {
						location.href = res.redirect;
					}
					$('#error-msg').html(res.msg);
				},
			})
		})
		$('#forgot-password').submit(function(e) {
			e.preventDefault();
			var data = $('#forgot-password').serialize();
			$.ajax({
				method: 'post',
				url: '<?= base_url() ?>admin/login/forgotpassword',
				type: "POST",
				data: data,
				dataType: 'json',
				beforeSend: function() {
					$('.auth-form-btn').addClass('loading');
				},
				complete: function() {
					$('.auth-form-btn').removeClass('loading');
				},
				success: function(res) {
					// if (res.status) {
					// 	location.href = res.redirect;
					// }
					$('#error-msg').html(res.msg);
				},
			})
		})
	</script>
</body>

</html>