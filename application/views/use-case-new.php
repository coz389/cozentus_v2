<style>
    .inner-main-header.style-2 .banner-content.blog-detail {
        margin-top: -75px;
        margin-bottom: -2em;
    }

    .inner-main-header .banner-content h1 {
        font-size: 34px;
        font-weight: 600;
        color: white;
        text-align: left;
    }
</style>
<header class="inner-main-header style-2">
    <img src="<?= base_url('uploads/images/') . $image ?>" alt="<?= $alt_text ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="banner-content blog-detail text-center d-block aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    <!-- <h1><?= $title ?></h1> -->
                    <h1>Case Study</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="pt-3 pb-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                <!-- ========================= -->
                <!-- TOP: Date + Share -->
                <!-- ========================= -->
                <div style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                    flex-wrap:wrap;
                    gap:15px;
                    margin-bottom:20px;
                ">

                    <!-- Date -->
                    <div style="font-size:14px; color:#666;">
                        Updated Date: <?= date('d F Y', strtotime($posted)) ?>
                    </div>

                    <!-- Share -->
                    <ul style="display:flex; gap:12px; padding-left:0; margin:0;">
                        <li style="list-style:none;">
                            <a href="javascript:void(0)" onclick="link_click()">
                                <img src="<?= base_url('assets/images/linkedin.svg') ?>">
                            </a>
                        </li>
                        <li style="list-style:none;">
                            <a href="javascript:void(0)" onclick="fbs_click()">
                                <img src="<?= base_url('assets/images/facebook.svg') ?>">
                            </a>
                        </li>
                        <li style="list-style:none;">
                            <a href="javascript:void(0)" onclick="twi_click()">
                                <img src="<?= base_url('assets/images/x.png') ?>">
                            </a>
                        </li>

                    </ul>

                </div>

                <div class="sec-head aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="para mt-3"> <?= html_entity_decode($top_left_heading) ?></h2>
                    <p class="para mt-3"> <?= html_entity_decode($short_description_left) ?></p>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="blue_bg" style="">
                    <h3> <?php html_entity_decode($top_right_heading) ?></h3>
                    <p> <?php html_entity_decode($short_description_right) ?></p>
                </div>
            </div> -->
        </div>
    </div>
</section>


<!-- Case Studies New Section Start -->
<style>
    p.para {
        font-size: 18px !important;
        color: var(--text);
        line-height: 140%;
    }

    .at-a-glance-sec {
        background: #05103a;
        padding: 0px 0 70px;
    }

    /* Banner image block */
    .glance-banner-img {
        width: 100%;
        max-height: 420px;
        object-fit: cover;
        object-position: center top;
        display: block;
    }

    /* Section heading */
    .at-a-glance-sec .glance-title {
        font-size: 2.4rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 40px;
        letter-spacing: -0.5px;
    }

    /* Left column meta cards */
    .glance-meta-card {
        margin-bottom: 0;
        /*border-top: 1px solid rgba(255, 255, 255, 0.1);*/
        padding: 15px 0;
    }

    .glance-meta-card:first-child {
        border-top: none;
        padding-top: 0;
    }

    .glance-meta-card .glance-label {
        font-size: 21px;
        font-weight: 600;
        color: #5b9cf6;
        text-transform: capitalize;
        letter-spacing: 0.3px;
        margin-bottom: 7px;
    }

    .glance-meta-card .glance-value {
        font-size: 1rem;
        color: #c8d3f0;
        line-height: 1.65;
        margin: 0;
    }

    /* Right column – Success Highlights */
    .glance-highlights-col {
        padding-left: 40px;
    }

    .glance-highlights-col .glance-label {
        font-size: 21px;
        font-weight: 600;
        color: #5b9cf6;
        letter-spacing: 0.3px;
        margin-bottom: 16px;
        display: block;
    }

    .glance-highlights-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .glance-highlights-col ul li {
        color: #c8d3f0;
        font-size: 1rem;
        line-height: 1.65;
        padding: 6px 0 6px 20px;
        position: relative;
    }

    .glance-highlights-col ul li::before {
        content: '•';
        position: absolute;
        left: 0;
        top: 6px;
        color: #c8d3f0;
    }

    .glance-highlights-col p {
        color: #c8d3f0;
        font-size: 1rem;
        line-height: 1.65;
    }

    .wh-img img {
        height: 350px;
        object-fit: fill;
    }

    /* Responsive */
    @media (min-width: 1300px) {}

    @media (max-width: 991px) {
        .glance-highlights-col {
            padding-left: 0;
            margin-top: 36px;
        }

        .at-a-glance-sec .glance-title {
            font-size: 2rem;
        }

        .glance-banner-img {
            max-height: 320px;
        }
    }

    @media (max-width: 575px) {
        .at-a-glance-sec {
            padding: 36px 0 48px;
        }

        .at-a-glance-sec .glance-title {
            font-size: 1.7rem;
        }

        .glance-banner-img {
            max-height: 220px;
        }

        .glance-highlights-col {
            padding: 0 20px;
        }

        .goals .counter-container {
            text-align: left;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }
    }
</style>
<?php if (!empty($section_5_heading)) { ?>
    <section class="at-a-glance-sec  sec goals" id="at-a-glance">
        <!-- Full-width banner image -->
        <?php if (!empty($section_5_image)) : ?>
            <img
                src="<?= base_url('uploads/images/') . $section_5_image ?>"
                alt="<?= !empty($section_5_image) ? $section_5_image : 'Use Case Banner' ?>"
                class="glance-banner-img">
        <?php endif; ?>

        <!-- Content area -->
        <div class="container">
            <!-- Heading -->
            <div class="row justify-content-center  mt-5">
                <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="glance-title"><?= $section_5_heading ?></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row">
                        <!-- ── LEFT COLUMN ──────────────────────────── -->
                        <div class="col-lg-7 col-md- col-12" data-aos="fade-up" data-aos-duration="1000">
                            <?php if (!empty($section_5_left))
                                foreach ($section_5_left as $sec5l) {
                            ?>
                                <div class="glance-meta-card">
                                    <p class="glance-label"><?= $sec5l['heading'] ?></p>
                                    <p class="glance-value">
                                        <?= html_entity_decode($sec5l['description']) ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>

                        <!-- ── RIGHT COLUMN ──────── -->
                        <div class="col-lg-5 col-md-5 col-12 glance-highlights-col"
                            data-aos="fade-up" data-aos-duration="1200">
                            <?php if (!empty($section_5_right))
                                foreach ($section_5_right as $sec5r) {
                            ?>
                                <span class="glance-label"><?= $sec5r['heading'] ?></span>
                                <p class="right_content">
                                    <?= html_entity_decode($sec5r['description']) ?>
                                </p>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<?php } ?>
<!-- Case Studies New Section End -->
<?php if (!empty($section_2_heading)) { ?>
    <section class="wh-sec pt-0">
        <div class="" style="background: #F9F8F6;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row pb-5 pt-5">
                            <div class="col-lg-5">
                                <div class="wh-img text-center d-block" data-aos="fade-right" data-aos-duration="1000">
                                    <img class="w-100" src="<?= base_url('uploads/images/') . $section_2_image ?>" alt="Our Focus">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="sec-head" data-aos="fade-left" data-aos-duration="1000">
                                    <h2><?= $section_2_heading ?></h2>
                                </div>
                                <p class="para" data-aos="fade-up" data-aos-duration="1000">
                                    <?= html_entity_decode($section_2_json) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php if (!empty($section_3_heading)) { ?>
    <section class="wh-sec pt-0">
        <div class="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row pb-5 pt-5">
                            <div class="col-lg-7">
                                <div class="sec-head" data-aos="fade-left" data-aos-duration="1000">
                                    <h2><?= $section_3_heading ?></h2>
                                </div>
                                <p class="para" data-aos="fade-up" data-aos-duration="1000">
                                    <?= html_entity_decode($section_3_json) ?>
                                </p>
                            </div>
                            <div class="col-lg-5">
                                <div class="wh-img text-center d-block" data-aos="fade-right" data-aos-duration="1000">
                                    <img class="w-100" src="<?= base_url('uploads/images/') . $section_3_image ?>" alt="Our Approach">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php if (!empty($section_4_heading)) { ?>
    <section class="wh-sec pt-0">
        <div class="" style="background: #F9F8F6;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row pb-5 pt-5">
                            <div class="col-lg-5">
                                <div class="wh-img text-center d-block" data-aos="fade-right" data-aos-duration="1000">
                                    <img class="w-100" src="<?= base_url('uploads/images/') . $section_4_image ?>" alt="Our Focus">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="sec-head" data-aos="fade-left" data-aos-duration="1000">
                                    <h2><?= $section_4_heading ?></h2>
                                </div>
                                <p class="para" data-aos="fade-up" data-aos-duration="1000">
                                    <?= html_entity_decode($section_4_json) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="wh-sec pt-0">
    <div class="" style="background: #F9F8F6;">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-lg-10 col-12">
                    <div class="sec-head">
                        <a href="#footer" class="main-btn mt-20">
                            <span>Download PDF Below</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="solution-sec sec pt-5 pb-5 looking-for" style="background: #eeeeee;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
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
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
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
        </div>
    </div>
</section>