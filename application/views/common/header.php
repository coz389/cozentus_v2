<!DOCTYPE html>
<html lang="en">

<head>
	<!-- ========== Meta Tags ========== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Robok - AI Agency & Technology HTML Template">

	<!-- ========== Page Title ========== -->
	<title>Robok - AI Agency & Technology HTML Template</title>

	<!-- ========== Favicon Icon ========== -->
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

	<!-- ========== Start Stylesheet ========== -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/validthemes-icon.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/swiper-bundle.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/animate.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/validnavs.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/helper.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/unit-test.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<!-- ========== End Stylesheet ========== -->

	<!-- ========== Custom Stylesheet ========== -->
	<link href="<?= base_url('assets/custom/custom.css') ?>" rel="stylesheet">
	<link rel="preconnect" href="https://static.hsappstatic.net" crossorigin>
	<link rel="prefetch" href="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js" as="script">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="smooth-scroll-yes">

	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

	<!-- Start Preloader 
    ============================================= -->
	<!-- <div id="preloader">
		<div class="robok-loader-inner">
			<div class="robok-loader">
				<span class="robok-loader-item"></span>
				<span class="robok-loader-item"></span>
				<span class="robok-loader-item"></span>
				<span class="robok-loader-item"></span>
				<span class="robok-loader-item"></span>
				<span class="robok-loader-item"></span>
				<span class="robok-loader-item"></span>
				<span class="robok-loader-item"></span>
			</div>
		</div>
	</div> -->

	<div id="preloader" class="preloader">
		<div class="animation-preloader">
			<div class="spinner"></div>
			<div class="txt-loading">
				<span data-text-preloader="C" class="letters-loading">C</span>
				<span data-text-preloader="O" class="letters-loading">O</span>
				<span data-text-preloader="Z" class="letters-loading">Z</span>
				<span data-text-preloader="E" class="letters-loading">E</span>
				<span data-text-preloader="N" class="letters-loading">N</span>
				<span data-text-preloader="T" class="letters-loading">T</span>
				<span data-text-preloader="U" class="letters-loading">U</span>
				<span data-text-preloader="S" class="letters-loading">S</span>
			</div>
			<p class="text-center">Loading</p>
		</div>
		<div class="loader">
			<div class="row">
				<div class="col-3 loader-section section-left">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader-section section-left">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader-section section-right">
					<div class="bg"></div>
				</div>
				<div class="col-3 loader-section section-right">
					<div class="bg"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- preloader end -->


	<!-- Header 
    ============================================= -->
	<header>
		<!-- Start Navigation -->
		<nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs <?= ($this->uri->segment(1) == "") ? 'white' : '' ?> navbar-fixed no-background">

			<div class="container-full d-flex justify-content-between align-items-center">
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.html">
						<?php if ($this->uri->segment(1) == "") { ?>
							<img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo">
						<?php } else { ?>
							<img src="assets/img/logo.png" class="logo logo-display" alt="Logo">
						<?php } ?>
						<!-- <img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo"> -->
						<img src="assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
					</a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">

					<img src="assets/img/logo.png" alt="Logo">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-times"></i>
					</button>

					<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
						<li><a href="<?= base_url('') ?>">Home</a></li>
						<li><a href="<?= base_url('about') ?>">About</a></li>
						<li class="dropdown">
							<a href="project.html" class="dropdown-toggle" data-toggle="dropdown">Industries</a>
							<ul class="dropdown-menu">
								<li><a href="project.html">Logistics</a></li>
								<li><a href="project-two.html">Retail</a></li>
								<li><a href="project-details.html">Manufacturing</a></li>
							</ul>
						</li>
						<li class="dropdown megamenu-fw megamenu-style-two column-three">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
							<ul class="dropdown-menu megamenu-content" role="menu">
								<li>
									<div class="col-menu-wrap">
										<div class="menu-cal-items">
											<div class="col-menu">
												<!-- <h4>Homepage Dark</h4> -->
												<ul class="menu-col">
													<li><a href="index.html">Custom Software Development</a></li>
													<li><a href="ai-solution-dark.html">Data Engineering</a></li>
													<li><a href="ai-solution-dark.html">BI and Visualisation</a></li>
												</ul>
											</div>
											<div class="col-menu">
												<!-- <h4>Homepage Light</h4> -->
												<ul class="menu-col">
													<li><a href="ai-agency.html">Data Science, Advance Analytics, AI ML</a></li>
													<li><a href="ai-solution.html">Enterprise Integrations</a></li>
													<li><a href="ai-solution.html">Cloud and DevOps</a></li>
												</ul>
											</div>
											<div class="col-menu">
												<!-- <h4>Homepage Light</h4> -->
												<ul class="menu-col">
													<li><a href="ai-agency.html">Managed Services</a></li>
													<li><a href="ai-solution.html">Hyperautomation</a></li>
													<li><a href="ai-solution.html">ViDA Peppol Integrations</a></li>
												</ul>
											</div>
										</div>
										<div class="megamenu-banner">
											<div class="thumb">
												<img src="assets/img/thumb/6.jpg" alt="Image Not Found">
												<a href="https://www.youtube.com/watch?v=iyARCQ7Ohd4" class="popup-youtube video-button"><i class="fas fa-play"></i></a>
											</div>
											<!-- <h4>Intro Video</h4> -->
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown megamenu-fw megamenu-style-two column-two">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Domain Capabilities</a>
							<ul class="dropdown-menu megamenu-content" role="menu">
								<li>
									<div class="col-menu-wrap">
										<div class="menu-cal-items">
											<div class="col-menu">
												<h4>Homepage Dark</h4>
												<ul class="menu-col">
													<li><a href="index.html">Home Ai Agency</a></li>
													<li><a href="ai-solution-dark.html">Home Ai Solution</a></li>
												</ul>
											</div>
											<div class="col-menu">
												<h4>Homepage Light</h4>
												<ul class="menu-col">
													<li><a href="ai-agency.html">Home Ai Agency</a></li>
													<li><a href="ai-solution.html">Home Ai Solution</a></li>
												</ul>
											</div>
										</div>
										<div class="megamenu-banner">
											<div class="thumb">
												<img src="assets/img/thumb/6.jpg" alt="Image Not Found">
												<a href="https://www.youtube.com/watch?v=iyARCQ7Ohd4" class="popup-youtube video-button"><i class="fas fa-play"></i></a>
											</div>
											<h4>Intro Video</h4>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown megamenu-fw megamenu-style-two column-two">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
							<ul class="dropdown-menu megamenu-content" role="menu">
								<li>
									<div class="col-menu-wrap">
										<div class="menu-cal-items">
											<div class="col-menu">
												<h4>Homepage Dark</h4>
												<ul class="menu-col">
													<li><a href="index.html">Home Ai Agency</a></li>
													<li><a href="ai-solution-dark.html">Home Ai Solution</a></li>
												</ul>
											</div>
											<div class="col-menu">
												<h4>Homepage Light</h4>
												<ul class="menu-col">
													<li><a href="ai-agency.html">Home Ai Agency</a></li>
													<li><a href="ai-solution.html">Home Ai Solution</a></li>
												</ul>
											</div>
										</div>
										<div class="megamenu-banner">
											<div class="thumb">
												<img src="assets/img/thumb/6.jpg" alt="Image Not Found">
												<a href="https://www.youtube.com/watch?v=iyARCQ7Ohd4" class="popup-youtube video-button"><i class="fas fa-play"></i></a>
											</div>
											<h4>Intro Video</h4>
										</div>
									</div>
								</li>
							</ul>
						</li>

						<!-- <li><a href="contact-us.html">Contact</a></li> -->
					</ul>
				</div><!-- /.navbar-collapse -->

				<div class="attr-right">
					<!-- Start Atribute Navigation -->
					<div class="attr-nav">
						<ul>
							<!-- <li class="side-menu">
								<a href="#">
									<span class="bar-1"></span>
									<span class="bar-2"></span>
									<span class="bar-3"></span>
								</a>
							</li> -->
							<li class="button">
								<a class="btn btn-style-one btn-border-light" href="#" id="openMeetingModalHeader">Book a Meeting
									<i class="fas fa-arrow-right"></i>
								</a>
							</li>
							<li class="button">
								<a class="btn btn-style-one btn-border-light" href="<?= base_url('contact') ?>">Get In Touch
									<i class="fas fa-arrow-right"></i></a>
							</li>
						</ul>
					</div>
					<!-- End Atribute Navigation -->


				</div>
				<!-- Main Nav -->

				<!-- Start Side Menu -->
				<div class="side">
					<a href="#" class="close-side"><i class="fas fa-times"></i></a>
					<div class="widget">
						<div class="logo">
							<img src="assets/img/logo-light-solid.png" alt="Logo">
						</div>
						<p>
							Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means.
						</p>
					</div>
					<div class="widget address">
						<div>
							<ul>
								<li>
									<div class="content">
										<p>Address</p>
										<strong>California, TX 70240</strong>
									</div>
								</li>
								<li>
									<div class="content">
										<p>Email</p>
										<strong>support@validtheme.com</strong>
									</div>
								</li>
								<li>
									<div class="content">
										<p>Contact</p>
										<strong>+44-20-7328-4499</strong>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="widget newsletter">
						<h4>Get Subscribed!</h4>
						<form action="#">
							<div class="input-group stylish-input-group">
								<input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
								<span class="input-group-addon">
									<button type="submit">
										<i class="fas fa-long-arrow-right"></i>
									</button>
								</span>
							</div>
						</form>
					</div>
					<div class="widget social">
						<ul class="link">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>

				</div>
				<!-- End Side Menu -->

			</div>

			<!-- Overlay screen for menu -->
			<div class="overlay-screen"></div>
			<!-- End Overlay screen for menu -->

		</nav>
		<!-- End Navigation -->
	</header>
	<!-- End Header -->