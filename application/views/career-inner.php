<header class="inner-main-header style-2">
    <img src="<?=base_url('assets/images/career-inner-banner.jpg')?>" alt="">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 col-md-12">
                <div class="banner-content">
                    <h2><?=$title?></h2>
                    <ul class="bread-c">
                        <li>
                            <a href="<?=base_url()?>">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><?=$title?></a>
                        </li>
                    </ul>
                    <a href="#apply" class="main-btn mt-30">
                        <span>Apply Now</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="sec">
    <div class="container">
        <div class="row flex-lg-row-reverse">
            <div class="col-lg-6 offset-lg-1 col-12 mb-5 mb-md-0">
            <?=html_entity_decode($content)?>
            </div>
            <div class="col-lg-5 col-12">
                <div class="sec-head mb-20">
                    <h2>
                        Apply <span>Now</span>
                    </h2>
                </div>
                <form id="career_form_apply" class="contact-form mt-40 form" data-form="insertcareer">
                <input type="hidden" name="position" value="<?=$title?>">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    First Name
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="fname" required/>
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
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                     Email Address
                                </label>
                                <div class="inp-group">
                                    <input type="email" name="email" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
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
                                    Resume
                                </label>
                                <div class="inp-group">
                                    <input type="file" id="resume" name="resume" required/>
                                        <div class="cross resume-cross res-input" style="display: none;background: var(--text);border-radius: 100px;width: 25px;height: 25px;justify-content: center;color: white;cursor: pointer !important;top: 27%;right: 10px;position: absolute;">
                                            X
                                        </div>
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
                        <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                        <div class="col-12">
                            <div class="btn-flex mt-40">
                                
                                <button class="main-btn phone-btn with-icon tr-btn" type="submit">
                                    <img src="<?=base_url('assets/images/phone.svg')?>" alt="">
                                    <span>Submit your application</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>