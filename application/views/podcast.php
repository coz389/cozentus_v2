<header class="inner-main-header style-2">
    <img src="<?=base_url('uploads/images/').$image?>" alt="<?=$alt_text?>">
     <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="banner-content blog-detail">
                    <h1><?=$title?></h1>
                    <!--<ul class="bread-c">-->
                    <!--    <li>-->
                    <!--        <a href="<?=base_url()?>">Home</a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="javascript:void(0)"><?=$title?></a>-->
                    <!--    </li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div></header>
<section class="blog-content-sec sec">


<div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <?=html_entity_decode($content)?>
                
            </div>
            <div class="col-lg-6 col-12 ml-3">
                <div class="" style="background: #2d75ff; padding: 20px;">
                    <!-- <img src="<?=base_url('uploads/images/').$thumbnail?>" alt="<?=$thumbnal_alt?>"> -->
                    <?=html_entity_decode($video)?>
                    <div class="links mt30 mb30">
                       
                        <ul>
                        <?php if($apple_pod || $google_pod || $spotify_pod || $sound_pod) { ?>
                            <li class="text-white">Listen on</li>
                            <?php } ?>
                            <?php if($apple_pod || $google_pod || $spotify_pod || $sound_pod) { ?>
                            <li><a title="Apple" class="" href="<?=urldecode($apple_pod)?>" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-apple"></i></a>
                            </li>
                            <?php } ?>
                            <?php if( $google_pod) { ?>
                            <li><a title="Google" class="" href="<?=urldecode($google_pod)?>" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-google"></i></a>
                            </li>
                            <?php } ?>
                            <?php if($spotify_pod) { ?>
                            <li><a title="Spotify" class="" href="<?=urldecode($spotify_pod)?>" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-spotify"></i></a>
                            </li>
                            <?php } ?>
                            <?php if($sound_pod) { ?>
                            <li><a title="SoundCloud" class="" href="<?=urldecode($sound_pod) ?>" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-soundcloud"></i></a>
                            </li>
                            <?php } ?>
                            <!--<li><a target="_blank" class="white-color" href="#" title="Read transcript">Read transcript</a></li>-->
                        </ul>
                       
                    </div>
                    <div class="cspeak-pro">
                    <?php if(!empty($speaker_name)) { ?>

                        <span class="text-white"><strong><?=urldecode($speaker_name) ?></strong></span>
                        <span class="mb10 text-white">Speaker</span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</div>
 
</section>

<section class="contact-us-sec sec light-bg pt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="sec-head">
                        <h2>
                            <?=$type == 3?"Download":"Get <span>In Touch</span>" ?>
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
                            <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                            <div class="col-12">
                                <div class="btn-flex mt-40">
                                    <button class="main-btn" id="sbt-btn">
                                        <span><?=$type == 3?"Download Pdf":"Submit" ?></span>
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
