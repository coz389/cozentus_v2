<header class="inner-main-header style-2">
    <img src="<?= base_url('uploads/images/') . $image ?>" alt="<?= $alt_text ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="banner-content blog-detail text-center d-block aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h1><?= $title ?></h1>
                    <!--<ul class="bread-c">-->
                    <!--    <li>-->
                    <!--        <a href="<?= base_url() ?>">Home</a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="javascript:void(0)"><?= $title ?></a>-->
                    <!--    </li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div>
</header>
<?php
//echo $this->session->userdata('interest');
if ($this->session->userdata('interest') != 'Use Case') { ?>
    <script>
        $(document).ready(function() {
            $('#fullPageModal').modal('show');
        });
    </script>
<?php } else { ?>
    <script>
        $('#fullPageModal').modal('hide');
    </script>
<?php } ?>
<!--<div class="modal fade" id="fullPageModal" tabindex="-1" role="dialog" aria-labelledby="fullPageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="sec-head mb-0 w-100 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Request Use Case </h1>
                </div>
            </div>
            <div class="modal-body">   
                <div class="container">
                    <div class="row align-items-center">                 
                        <div class="col-lg-10 col-12 mx-auto">
                            <form data-form="insertWebinarcontact" class="contact-form mt-40 webinar">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="" class="label-text">
                                                Name *
                                            </label>
                                            <div class="inp-group">
                                                <input type="text" name="fname" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="" class="label-text">
                                                Work Email Address *
                                            </label>
                                            <div class="inp-group">
                                                <input type="email" name="email" />
                                            </div>
                                        </div>
                                        <input type="hidden" name="service" value="Use Case"/>

                                    </div>
                                    
                                  
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the Cozentus Privacy Policy (<a href="<?= base_url('privacy-statement') ?>">Privacy Statement</a>)</label>
                                                <input type="checkbox" name="privacy_policy" class="form-check-input" id="exampleCheck1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                                    <div class="col-12">
                                        <div class="btn-flex mt-40">
                                            <button class="main-btn" id="sbt-btn">
                                                <span><?= $type == 3 ? "Submit" : "Submit" ?></span>
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
<!-- <div class="col-lg-6">
                            <img class="w-100 mt-4" src="https://www.cozentus.com/uploads/images/ds.webp" alt="">
                        </div> -->
</div>
</div>
</div>
<div class="modal-footer">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
</div>
</div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4"></div>
        <!--<div class="col-lg-4">   
        <div class="sd-card use-case mt-4">
                
                    <h4>Share this Case Study</h4>
                    <ul class="soc-list">
                        <li>
                            <a href="javascript:void(0)" onclick="link_click()">
                                <img src="<?= base_url('assets/images/linkedin.svg') ?>" alt="linkedin">
                            </a>
                        </li>
                        <li>
                           <a href="javascript:void(0)" onclick="fbs_click()">
                                <img src="<?= base_url('assets/images/facebook.svg') ?>" alt="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="twi_click()">
                                <img src="<?= base_url('assets/images/twitter.svg') ?>" alt="twitter">
                            </a>
                        </li>
                    </ul>
                </div></div>-->
    </div>

</div>

<section class="pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="sec-head aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <h2> <?= html_entity_decode($top_left_heading) ?></h2>
                    <p class="para mt-3"> <?= html_entity_decode($short_description_left) ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="blue_bg" style="">
                    <h3> <?= html_entity_decode($top_right_heading) ?></h3>
                    <p> <?= html_entity_decode($short_description_right) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($section_2)) { ?>
    <section class="counter-sec pt-5 sec mb-5 goals" style="background: #eeeeee;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $toolbenefits_heading ?></h2>
                    </div>
                    <div class="counter-container mt-40">
                        <?php

                        if (!empty($section_2))
                            foreach ($section_2 as $buis) {

                        ?>
                            <div class="counter-card style-2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                                <img src="<?= base_url('uploads/images/') . $buis['image'] ?>" class="img-full"
                                    alt="<?= $buis['alt_text'] ?>">

                                <h4><?= $buis['heading'] ?></h4>
                                <p> <?= $buis['description'] ?></p>
                            </div>

                        <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php  } ?>

<?php if (!empty($section_3))

// echo '<pre>';
// print_r($section_3);
// exit;
{ ?>
    <section class="solution-sec sec pt-0">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="sec-head center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <h2><?= $section_3_heading ?></h2>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">

                <?php if (!empty($section_3))
                    foreach ($section_3 as $sec3) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 position-relative">
                        <div class="card border-primary mb-3" style="height: 16rem;">
                            <?php if (!empty($sec3['heading'])) { ?>
                                <div class="card-header"><?= $sec3['heading'] ?></div>
                            <?php } ?>
                            <div class="card-body">
                                <p class="card-text"><?= $sec3['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php  } ?>
<?php if (!empty($section_4)) { ?>
    <section
        class="solution-sec why-choose mb-5 mt-0 pt-5 pb-5 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
        id="why-choose-us" style="background: #eeeeee;">
        <div class="container goals">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $section_4_heading ?></h2>
                    </div>
                </div>
            </div>
            <div class="counter-container mt-5">
                <?php if (!empty($section_4))
                    foreach ($section_4 as $sec4) {

                ?>
                    <div class="counter-card">
                        <div class="why-choose-sec">
                            <img src="<?= base_url('uploads/images/') . $sec4['image'] ?>" class="img-full"
                                alt="<?= $sec4['alt_text'] ?>">
                            <h3><?= $sec4['heading'] ?></h3>
                            <p> <?= $sec4['description'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </section>
<?php } ?>

<section class="blog-content-sec sec pt-4">
    <div class="container">
        <div class="row">
            <div class="sec-head aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                <?php if (!empty($botttom_heading)) { ?>
                    <h2 class="mb-3"><?= html_entity_decode($botttom_heading) ?></h2>
                <?php } ?>
                <?php if (!empty($content)) { ?>
                    <?= html_entity_decode($content) ?>
                <?php } ?>
            </div>
            <div class="hellotest <?= $type == 2 ? "col-lg-12" : "col-lg-12" ?> col-12 ">
                <?php if ($type == 2) { ?>
                    <!-- <div class="date-wrap">
                    <div class="dt">
                        <img src="<?= base_url('assets/images/cal-icon.svg') ?>" alt="">
                        <span><?= date('d-M-Y', strtotime($posted)) ?></span>
                    </div>
                    <span>to</span>
                    <div class="dt">
                        <img src="<?= base_url('assets/images/cal-icon.svg') ?>" alt="">
                        <span><?= date('d-M-Y', strtotime($end_date)) ?></span>
                    </div>
                </div> -->
                <?php } ?>

                <!--    <?php if ($type == 3) { ?>
                    <div class="cs-hide-wrap">
                        <a href="javascript:void(0)" class="main-btn center">
                            <span>Download</span>
                        </a>
                    </div>
                <?php } ?> -->
            </div>
            <?php if ($type == 1) { ?>
                <div class="col-lg-4 offset-lg-1 col-12">
                    <div class="sd-card">
                        <div class="auth">
                            <div class="img">
                                <img src="<?= base_url('uploads/images/') . $aimage ?>" alt="<?= $aalt_text ?>">
                            </div>
                            <div class="det">
                                <h3>AUTHOR</h3>
                                <h4><?= $author ?></h4>
                                <p>
                                    - <?= $authortitle ?>
                                </p>
                            </div>
                        </div>
                        <h4>SUBJECT TAGS</h4>
                        <ul class="tags">
                            <?php $tags = explode(",", $tags);
                            if (!empty($tags))
                                foreach ($tags as $tg) {
                                    echo "<li>$tg</li>";
                                } ?>
                        </ul>
                        <h4>SHARE THIS BLOG</h4>
                        <ul class="soc-list">
                            <li>
                                <a href="javascript:void(0)" onclick="link_click()">
                                    <img src="<?= base_url('assets/images/linkedin.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="fbs_click()">
                                    <img src="<?= base_url('assets/images/facebook.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="twi_click()">
                                    <img src="<?= base_url('assets/images/twitter.svg') ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



<section class="solution-sec sec pt-5 pb-5 looking-for" style="background: #eeeeee;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="sec-head center">
                    <h2 data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">
                        Looking for <span>Something Else?</span></h2>
                    <p>Write or talk to us.</p>
                    <a href="https://infisuite.in/dev/cozweb/contact" class="main-btn mt-20">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-us-sec sec light-bg pt-5" id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head">
                    <h2>
                        <?= $type == 3 ? "Download" : "Get <span>In Touch</span>" ?>
                    </h2>
                </div>
                <form data-form="insertcontact"
                    <?= !empty($download) ? "data-download='" . base_url('uploads/pdf/') . $download . "' data-file-name='" . $download . "'" : '' ?>
                    class="contact-form mt-40 form">
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
                                    <input type="text" name="organisation" />
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
                                    <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the
                                        Cozentus Privacy Policy (<a href="<?= base_url('privacy-statement') ?>">Privacy
                                            Statement</a>)</label>
                                    <input type="checkbox" name="privacy_policy" class="form-check-input"
                                        id="exampleCheck1">
                                </div>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                        <input type="hidden" name="path" value="<?= $this->uri->uri_string() ?>">
                        <input type="hidden" name="type" value="<?= $type ?>">
                        <div class="col-12">
                            <div class="btn-flex mt-40">
                                <button class="main-btn" id="sbt-btn">
                                    <span><?= $type == 3 ? "Download Pdf" : "Submit" ?></span>
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
                    <img src="<?= base_url() ?>assets/images/globe.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>