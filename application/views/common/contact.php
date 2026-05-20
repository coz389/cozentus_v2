<section class="contact-us-sec sec light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="sec-head">
                        <h2>
                            Get in <span>touch</span>
                        </h2>
                    </div>
                    <form  data-form="insertcontact" <?=!empty($download)?"data-download='".base_url('uploads/pdf/').$download."' data-file-name='".$download."'":''?> class="contact-form mt-40 form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        First Name
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="fname" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Last Name
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="lname" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Work Email Address
                                    </label>
                                    <div class="inp-group">
                                        <input type="email" name="email" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Contact Number
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="phone" id="phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Organisation Name
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="organisation"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                       Designation
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="employees" />
                                    </div>
                                </div>
                            </div>
			    <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the Cozentus Privacy Policy (<a href="<?=base_url('privacy-statement')?>">Privacy Statement</a>)</label>
                                        <input type="checkbox" name="privacy_policy" class="form-check-input" id="exampleCheck1">
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <div class="btn-flex mt-40">
                                    <button class="main-btn" id="sbt-btn">
                                        <span>Schedule a Meeting</span>
                                    </button>
                                   <!--  <button class="main-btn phone-btn with-icon tr-btn">
                                        <img src="assets/images/phone.svg" alt="">
                                        <span>Get a Call back</span>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 offset-lg-1 col-12">
                    <div class="con-img">
                        <img src="<?=base_url()?>assets/images/globe.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>