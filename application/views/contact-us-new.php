 <div id="smooth-content">
 	<!-- Start Contact Us 
        ============================================= -->
 	<div class="contact-style-one-area overflow-hidden default-padding">
 		<div class="container">
 			<div class="contact-style-one-items" style="background-image: url(assets/img/shape/map.png);">
 				<div class="row align-center">
 					<div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-50">

 						<div class="contact-style-one-info">
 							<h2 class="split-text title">For assistance, please contact our support team.</h2>
 							<ul>
 								<li class="wow fadeInUp">
 									<div class="icon">
 										<i class="fas fa-phone-alt"></i>
 									</div>
 									<div class="content">
 										<h4>Hotline</h4>
 										<a href="">+4733378901</a>
 									</div>
 								</li>
 								<li class="wow fadeInUp" data-wow-delay="300ms">
 									<div class="icon">
 										<i class="fas fa-map-marker-alt"></i>
 									</div>
 									<div class="info">
 										<h4>Our Location</h4>
 										<p>
 											128 Kuaram old Road, parkvenue, Greater London, NW18JR Puran, United Kingdom
 										</p>
 									</div>
 								</li>
 								<li class="wow fadeInUp" data-wow-delay="500ms">
 									<div class="icon">
 										<i class="fas fa-envelope-open-text"></i>
 									</div>
 									<div class="info">
 										<h4>Official Email</h4>
 										<a href="mailto:info@agrul.com.com">info@agrul.com</a>
 									</div>
 								</li>
 							</ul>
 						</div>
 					</div>

 					<div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
 						<div class="contact-form-card" style="background-images: url(assets/img/shape/3.png);">
 							<h4 class="sub-title">Free Consultation</h4>
 							<p>
 								Fill out the form to get a personalized price quote and package solution from our global team of experts.
 							</p>
 							<form data-form="insertcontact" data-aos="fade-right" data-aos-duration="1000"
 								class="contact-form mt-40 form">

 								<div class="row mb-3">
 									<div class="col-lg-6 col-12">
 										<label for="fname" class="form-label">First Name</label>
 										<input type="text" name="fname" class="form-control" id="fname">
 									</div>
 									<div class="col-lg-6 col-12">
 										<label for="lname" class="form-label">Last Name</label>
 										<input type="text" name="lname" class="form-control" id="lname">
 									</div>
 								</div>
 								<div class="row mb-3">
 									<div class="col-lg-6 col-12">
 										<label for="email" class="label-text">
 											Work Email Address
 										</label>
 										<input type="email" name="email" class="form-control" id="email" />
 									</div>
 									<div class="col-lg-6 col-12">
 										<label for="phone" class="form-label">Contact Number</label>
 										<input type="text" name="phone" class="form-control" id="phone">
 									</div>
 								</div>
 								<div class="row mb-3">
 									<div class="col-lg-6 col-12">
 										<label for="organisation" class="form-label">Organisation Name</label>
 										<input type="text" name="organisation" class="form-control" id="organisation">
 									</div>
 									<div class="col-lg-6 col-12">
 										<label for="employees" class="form-label">Designation</label>
 										<input type="text" name="employees" class="form-control" id="employees">
 									</div>
 								</div>
 								<div class="row mb-3">
 									<div class="col-lg-12 col-12">
 										<label for="employees" class="form-label">Services Interested In</label>
 										<select name="service" id="" class="form-control">
 											<option value="">Select Service</option>
 											<?php if (!empty($pservcont))
													foreach ($pservcont as $ser) {
														echo "<option value='" . $ser['name'] . "'>" . $ser['name'] . "</option>";
													} ?>
 										</select>
 									</div>
 								</div>
 								<div class="row mb-3">
 									<div class="col-lg-12 col-12">
 										<div class="form-check">
 											<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 											<label class="form-check-label" for="flexCheckDefault">
 												&nbsp;&nbsp;I agree to the
 												Cozentus Privacy Policy (<a
 													href="<?= base_url('privacy-statement') ?>">Privacy
 													Statement</a>)
 											</label>
 										</div>
 									</div>
 								</div>
 								<div class="row mb-3">
 									<div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
 									<div class="col-12 mt-3">
 										<button class="btn btn-style-one" id="submit sbt-btn">
 											Get in Touch <i class="fas fa-arrow-right"></i>
 										</button>
 									</div>
 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- End Contact -->

 	<!-- Start Map 
        ============================================= -->
 	<div class="maps-area default-padding-bottom overflow-hidden">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="google-maps">
 						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48388.929990966964!2d-74.00332!3d40.711233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1653598669477!5m2!1sen!2sus"></iframe>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- End Map -->
 </div>