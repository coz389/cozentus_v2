<?php
if (!empty($pserv['inner_banner_image'])) { ?>
    <header class="inner-main-header style-2">
        <picture>
            <source media="(max-width: 600px)"
                srcset="<?= base_url('uploads/images/') . $pserv['inner_banner_mimage'] ?>" />
            <img src="<?= base_url('uploads/images/') . $pserv['inner_banner_image'] ?>"
                alt="<?= $pserv['alt_text_banner'] ?>" />
        </picture>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12  mx-auto">
                    <div class="banner-content text-center d-block blog-detail" data-aos="fade-up" data-aos-duration="1000">
                        <h1 data-aos="fade-up" data-aos-duration="1000"><?= $pserv['inner_banner_heading'] ?></h1>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="para" data-aos="fade-up"
                            data-aos-duration="1000"><?= $pserv['inner_banner_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php } ?>
<?php
if (!empty($pserv['advantage_heading'])) { ?>
    <section class="abt-sec sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="abt-con">
                        <div class="sec-head">
                            <h2 data-aos="fade-up" data-aos-duration="1000">
                                <?= $pserv['advantage_heading'] ?>
                            </h2>
                        </div>
                        <p class="para" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <?= $pserv['advantage_short_description'] ?>
                        </p>
                        <a href="<?= urldecode($pserv['ctalink']) ?>" class="main-btn mb-5" data-aos="fade-up"
                            data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos->
                            <span> <?= $pserv['ctabtn'] ?></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-12">
                    <?php if (!empty($pserv['advantage_video'])) { ?>

                        <div class="vid-wrapper youtube-video-place" data-url="<?= urldecode($pserv['advantage_video']) ?>">

                        </div>
                    <?php } else { ?>
                        <div class="abt-img" data-aos="fade-left" data-aos-duration="1000">
                            <img src="<?= base_url('uploads/images/') . $pserv['advantage_image'] ?>"
                                alt="<?= $pserv['advantage_alt_text'] ?>" style="border-radius: 12px;">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- Counter Section start -->
<?php if (!empty($pserv['believe_json'] && !empty($pserv['believe_heading']))) { ?>
    <section class="solution-sec our-significant" style=" background: #F9F8F6;" id="our-achievements">
        <div class=" container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5">

                    <!-- Heading -->
                    <div class="sec-head center ps-2"
                        data-aos="fade-down" data-aos-duration="1000">
                        <h2 style="text-align: center;"><?= $pserv['believe_heading'] ?></h2>
                    </div>

                    <!-- Counters Row -->
                    <div class=" row mt-5" id="counters-section">
                        <!-- Counter 1 -->
                        <?php
                        $believeArr = json_decode($pserv['believe_json'], true);
                        if (!empty($believeArr)) {
                            foreach ($believeArr as $belp) {
                        ?>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                                    <div class="counter-card"
                                        data-aos="fade-up" data-aos-duration="1000">
                                        <?php
                                        $val1   = html_entity_decode($belp['key']); //21+
                                        preg_match('/^(\d+)\s*([^\d]*)$/', trim($val1), $m);
                                        $number1  = trim($m[1] ?? '0');    // "20"
                                        $symbol1  = trim($m[2] ?? '');     // "+"
                                        $label1 = $belp['value'];
                                        ?>
                                        <div class="counter-number">
                                            <?php if (empty($m)) { ?>
                                                <span class="counter-suffix"><?= html_entity_decode($belp['key']) ?> </span>
                                                <span class="counter-suffix"></span>
                                            <?php } else { ?>
                                                <span class="counter-value" data-target="<?= $number1 ?>"></span>
                                                <span class="counter-suffix"><?= $symbol1 ?></span>
                                            <?php } ?>

                                        </div>
                                        <div class="counter-label"><?= html_entity_decode($label1) ?></div>
                                    </div>
                                </div>
                        <?php  }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Counter Section End -->


<?php
if (!empty($pserv['about_heading'])) { ?>
    <section class="abt-sec sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5  col-12">
                    <div class="abt-img" data-aos="fade-left" data-aos-duration="1000">
                        <img src="<?= base_url('uploads/images/') . $pserv['about_image'] ?>"
                            alt="<?= $pserv['about_alt_text'] ?>" style="border-radius: 12px;">
                    </div>
                </div>

                <div class="col-lg-6 col-12 offset-lg-1">
                    <div class="abt-con">
                        <div class="sec-head">
                            <h2 data-aos="fade-up" data-aos-duration="1000">
                                <?= $pserv['about_heading'] ?>
                            </h2>
                        </div>
                        <p class="para" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <?= $pserv['about_short_description_left'] ?>
                        </p>
                        <p class="para" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <?= $pserv['about_short_description_right'] ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="info-sec sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12">
                    <div class="sec-head center">
                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            <?= $pserv['about_heading'] ?> 123
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-30">
                <div class="col-lg-5 col-12 ">
                    <p class="para" data-aos="fade-right" data-aos-duration="1000">
                        <?= $pserv['about_short_description_left'] ?> </p>
                </div>
                <div class="col-lg-5 col-12">
                    <p class="para" data-aos="fade-left" data-aos-duration="1000">
                        <?= $pserv['about_short_description_right'] ?> </p>
                </div>
                <div class="col-lg-9 col-12 mt-50 mb-40 text-center">
                    <img data-aos="fade-up" data-aos-duration="1000" class="w-100"
                        src="<?= base_url('uploads/images/') . $pserv['about_image'] ?>"
                        alt="<?= $pserv['about_alt_text'] ?>">
                </div>
            </div>
        </div>
    </section> -->
<?php } ?>


<?php if ($homewhycoz) { ?>
    <section class="solution-sec why-choose mb-5 mt-0 pt-5 pb-5" id="" style="background: #eeeeee;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $pserv['why_heading'] ?> </h2>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <?php
                $count = 0;
                foreach ($homewhycoz as $wc) {
                    $count++;
                ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="why-choose-sec">
                            <?php if (!empty($wc['image'])) { ?>
                                <img src="<?= base_url('uploads/images/') . $wc['image'] ?>" alt="$wc['alt_text']">
                            <?php } ?>
                            <h4><?= html_entity_decode($wc['title']) ?></h4>
                            <p><?= html_entity_decode($wc['short_description']) ?></p>

                            <?php if (!empty($wc['ctalink'])) { ?>
                                <a href="<?= urldecode($wc['ctalink']) ?>" class="read-more">
                                    <span>Read More</span>
                                    <img src="assets/images/ar-bl-right.svg" alt="read more">
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php if ($pserv['industries_heading']) {  ?>
    <section class="solution-sec sec pb-0 mb-5" id="" style="">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 industries-section">
                    <div class="sec-head industries aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $pserv['industries_heading'] ?> </h2>
                        <p><?= $pserv['industries_short_description_left'] ?></p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <?php if (is_array($industryImg)) { ?>
                        <img class="w-100" src="<?= base_url('uploads/images/') . $industryImg['image'] ?>"
                            alt="<?= $industryImg['alt_text'] ?>">
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php if (!empty($innerservices)) { ?>
    <section class="solution-sec sec pt-0">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-12">
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <h2><?= $pserv['cardsecop_heading'] ?></h2>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="swiper services-swiper mt-50" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <?php foreach ($innerservices as $ins) { ?>
                                <div class="swiper-slide">
                                    <a href="<?= base_url('solutions/') . $pserv['slug'] . '/' . $ins['slug'] ?>"
                                        class="vtr-card-wrapper style-2">
                                        <img src="<?= base_url('uploads/images/') . $ins['image'] ?>"
                                            alt="<?= $ins['alt_text'] ?>">
                                        <div class="con">
                                            <h3><?= $ins['card_heading'] ?></h3>
                                            <p class="para white">
                                                <?= $ins['card_description'] ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="dt-nav-area">
                        <button class="dt-prev">
                            <img src="<?= base_url('assets/images/prev.svg') ?>" alt="">
                        </button>
                        <button class="dt-next">
                            <img src="<?= base_url('assets/images/next.svg') ?>" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else if (!empty($pserv['cardsecop'])) { ?>
    <section class="solution-sec sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                            <h2><?= $pserv['cardsecop_heading'] ?></h2>
                        </div>
                    </div>
                    <div class="swiper solution-swiper11 mt-50" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <?php foreach ($pserv['cardsecop'] as $ins) { ?>
                                <div class="swiper-slide">
                                    <div class="card new-card" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?= base_url('uploads/images/') . $ins['image'] ?>"
                                            class="card-img-top"
                                            alt="<?= $ins['alt_text'] ?? $ins['heading'] ?>">
                                        <div class="card-body">
                                            <h3 class="card-title"><?= $ins['heading'] ?></h3>
                                            <p class="card-text card-text-clamp"><?= $ins['description'] ?></p>
                                        </div>
                                        <!-- <a href="<?= base_url(urldecode($ins['link'])) ?>" class="btn btn-primary" style="width: 120px; margin: 0px 20px 13px 15px;">Read More</a> -->
                                    </div>

                                </div>
                            <?php } ?>
                        </div>
                        <div class=" swiper-pagination">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php include_once 'common/casestudies.php'; ?>

<?php if (!empty($pserv['mbanners'])) { ?>
    <section class="sec light-bg dash-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="dash-slider swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($pserv['mbanners'] as $mb) { ?>

                                <div class="swiper-slide">
                                    <div class="dash-row">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-12">
                                                <div class="dash-img" data-aos="fade-right" data-aos-duration="1000">
                                                    <img src="<?= base_url('uploads/images/') . $mb['image'] ?>"
                                                        class="img-full" alt="<?= $mb['alt_text'] ?>" style="border-radius: 12px;" />
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-12 offset-lg-1" data-aos="fade-left" data-aos-duration="1000">
                                                <div class="sec-head">
                                                    <h2>
                                                        <?= $mb['heading'] ?>
                                                    </h2>
                                                </div>
                                                <ul class="point-list">
                                                    <?php
                                                    $mbdesc = explode(":", $mb['description']);
                                                    foreach ($mbdesc as $desc) {
                                                        echo "<li>" . $desc . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                                <a href="<?= urldecode($mb['ctalink']) ?>" class="main-btn mt-20">
                                                    <span><?= $mb['ctabtn'] ?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="dt-nav-area">
                        <button class="ds-prev">
                            <img src="<?= base_url('assets/images/prev.svg') ?>" alt="">
                        </button>
                        <button class="ds-next">
                            <img src="<?= base_url('assets/images/next.svg') ?>" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>


<?php include_once 'common/blogs.php'; ?>

<!-- New Section start -->
<?php if (!empty($pserv['toolbenefits_json'])) { ?>
    <section style=" padding: 30px 0;" id="why-choose-us">
        <div class="container new-container-fluid">
            <div class="row g-0">
                <!-- ── LEFT SIDE — Tab List ── -->
                <div class="col-lg-6 col-12">
                    <div class="sec-head">
                        <h2 style="margin-bottom: 20px;" data-aos="fade-up" data-aos-duration="1000">
                            <?= $pserv['toolbenefits_heading'] ?>
                        </h2>
                    </div>
                    <!-- Tab List -->
                    <div class="coz-tab-list">
                        <?php $count = 0;
                        foreach ($pserv['toolbenefits_json'] as $buis) { ?>
                            <div class="coz-tab-item coz-tab-item1 <?= $count == 0 ? 'active' : '' ?>" data-tab="<?= $count ?>"
                                style="color: #000;" data-aos="fade-up" data-aos-duration="1000">
                                <?= html_entity_decode($buis['tab']) ?>
                            </div>
                        <?php $count++;
                        } ?>
                    </div>
                </div>
                <!-- ── RIGHT SIDE — Content Panel ── -->
                <div class="col-lg-6 col-12" style="position:relative; min-height:350px;">
                    <!-- Tab Panel 0 -->
                    <?php $count = 0;
                    foreach ($pserv['toolbenefits_json'] as $buis) { ?>
                        <div class="coz-tab-panel <?= $count == 0 ? 'active' : '' ?>" data-panel="<?= $count ?>">
                            <div class="panel-image1" height="300px" data-aos="fade-left" data-aos-duration="1000">
                                <img src="<?= base_url('uploads/images/') . $buis['image'] ?>" alt="<?php echo $buis['alt_text'] ?>">
                            </div>
                            <div class="panel-content">
                                <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <?= html_entity_decode($buis['heading']) ?>
                                </h3>
                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <?= html_entity_decode($buis['description']) ?>
                                </p>
                                <!-- <a href="#" class="panel-learn-more">
                                    Learn More
                                    <span class="panel-arrow">&#8594;</span>
                                </a> -->
                                <?php /*if (!empty($buis['ctalink'])) { ?>
                                    <a href="<?= urldecode($buis['ctalink']) ?>" class="panel-learn-more">
                                        <span>Read More</span>
                                        <span class="panel-arrow">&#8594;</span>
                                    </a>
                                <?php }*/ ?>
                            </div>
                        </div>
                    <?php $count++;
                    } ?>
                </div>
                <!-- end right side -->
            </div>
        </div>
    </section>
<?php } ?>
<!-- New Section start -->

<?php if (!empty($pserv['heading_faq'])) { ?>
    <section class="faq-sec sec" style="background: #eeeeee;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $pserv['heading_faq'] ?></h2>
                    </div>
                    <div class="accordion a-cc" id="accordionExample">
                        <?php $faqArr = json_decode($pserv['card_json_faq'], true);
                        $count = 0;

                        foreach ($faqArr as $fq) {
                        ?>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000" style="background: #eeeeee;">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $count ?>" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <?= $fq['heading'] ?>
                                    </button>
                                </h2>
                                <div id="collapse<?= $count ?>" class="accordion-collapse collapse "
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?= $fq['description'] ?></div>
                                </div>
                            </div>
                        <?php $count++;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="solution-sec sec pt-5 pb-5 looking-for" style="background: azure;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-12">
                <div class="sec-head center">
                    <h2 data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">
                        Looking for <span>Something Else?</span></h2>
                    <p>Write or talk to us.</p>
                    <a href="<?= base_url('contact') ?>" class="main-btn mt-20">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us-sec sec pt-5" id="con-sec">
    <img src="<?= base_url('assets/images/gr-spot.svg') ?>" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                        Get <span>In Touch</span>
                    </h2>
                </div>
                <form data-form="insertcontact" class="contact-form mt-40 form" data-aos="fade-right"
                    data-aos-duration="1000">
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
                        <input type="hidden" name="service" value="<?= $pserv['card_heading'] ?>">
                        <input type="hidden" name="parent_id" value="<?= $pserv['pserv'] ?>">
                        <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                        <div class="col-12">
                            <div class="btn-flex mt-40">
                                <button class="main-btn">
                                    <span>Schedule a Meeting</span>
                                </button>
                                <!--<button class="main-btn phone-btn with-icon tr-btn">-->
                                <!--    <img src="<?= base_url('assets/images/phone.svg') ?>" alt="">-->
                                <!--    <span>Get a Call back</span>-->
                                <!--</button>-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="con-img" data-aos="fade-left" data-aos-duration="1000">
                    <img src="<?= base_url('assets/images/globe.svg') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($pserv['main_cta_btn'])) { ?>

    <div class="modal modal-xl" id="costsaving-enquiry-modal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl height_costsaving">
            <div class="modal-content">
                <div class="modal-body modal_cost_saving">
                    <div class="sec-head modal_cost pt-3 pb-0" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="cost_heading">Calculate Cost Saving </h4>
                        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form id="cost_saving_form">
                        <div class="row" style="padding: 3px 20px 0px 20px;">
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label class="costsaving-text">
                                        Organization Name<span class="cost_formrequired">*</span>
                                    </label>
                                    <div class="inp-group">
                                        <input class="custom_input_text" type="text" name="organization" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label class="costsaving-text">
                                        Email ID<span class="cost_formrequired">*</span>
                                    </label>
                                    <div class="inp-group">
                                        <input class="custom_input_text" type="text" name="email" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label class="costsaving-text">
                                        Avg. Labour Cost per Hour (in USD)<span class="cost_formrequired">*</span>
                                    </label>
                                    <div class="inp-group">
                                        <input class="custom_input_text" type="text" name="avg_processing_cost_per_hour"
                                            value="<?php echo $average_cost->config_value ?>" readonly />
                                        <p class="error-messages"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label class="costsaving-text">
                                        Document Mistakes per Year (in %)<span class="cost_formrequired">*</span>
                                    </label>
                                    <div class="inp-group">
                                        <input class="custom_input_text" type="text"
                                            name="document_mistake_percent_per_year" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label class="costsaving-text">
                                        Avg. Cost per Mistake (in USD)<span class="cost_formrequired">*</span>
                                    </label>
                                    <div class="inp-group">
                                        <input class="custom_input_text" type="text" name="avg_cost_per_mistake" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="form-group">
                                    <label class="costsaving-text">
                                        Mistakes Reduction After Automation (in %)<span class="cost_formrequired">*</span>
                                    </label>
                                    <div class="inp-group">
                                        <input class="custom_input_text" type="text" name="mistakes_reduction"
                                            value="<?php echo $mistakes_reduction->config_value ?>" readonly required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CostCardAdd">
                            <div class="card cost_card">
                                <span class="position_cost">
                                    <button type="button" class="btn btn-outline-primary btnAddNew" title="Add"><i
                                            class="fa fa-plus" aria-hidden="true"></i></button>
                                </span>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 mt-2">
                                            <label class="costsaving-text">Process Name<span
                                                    class="cost_formrequired">*</span></label>
                                            <input type="text" name="process_name[]" class="form-control custom_input_text"
                                                required>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <label class="costsaving-text">Document Name<span
                                                    class="cost_formrequired">*</span></label>
                                            <input type="text" name="document_name[]" class="form-control custom_input_text"
                                                required>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <label class="costsaving-text">Total no. of documents per year<span
                                                    class="cost_formrequired">*</span></label>
                                            <input type="text" name="total_documents_per_year[]"
                                                class="form-control custom_input_text" required>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <label class="costsaving-text">Data Capture Process<span
                                                    class="cost_formrequired">*</span></label>
                                            <select name="document_captured_processing[]"
                                                class="form-select dcmt-cpture custom_input_text costsaving-text" required>
                                                <option value="">--Select--</option>
                                                <option value="Manual/ excel based processing without any software">Manual/
                                                    excel based processing without any software</option>
                                                <option value="Semi-automatic: Automatic for some and manual for others">
                                                    Semi-automatic: Automatic for some and manual for others</option>
                                                <option value="Automatic processing without manual intevention">Automatic
                                                    processing without manual intevention</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <label class="costsaving-text">% of Documents Manually Captured<span
                                                    class="cost_formrequired">*</span></label>
                                            <input type="text" name="document_manually_capturing_percentage[]"
                                                class="form-control custom_input_text" readonly required>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <label class="costsaving-text">Avg. efforts in minutes per document for data
                                                capture<span class="cost_formrequired">*</span></label>
                                            <input type="text" name="avg_minutes_per_document_data_capture[]"
                                                class="form-control custom_input_text" required>
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <label class="costsaving-text">Post Data Capture Process<span
                                                    class="cost_formrequired">*</span><br></label>
                                            <select name="after_capturing_data[]"
                                                class="form-select dcmt-manually-cpture custom_input_text costsaving-text"
                                                required>
                                                <option value="">--Select--</option>
                                                <option value="Manual/ excel based processing without any software">Manual/
                                                    excel based processing without any software</option>
                                                <option
                                                    value="Semi-automatic processing: Combination of automatic and manual">
                                                    Semi-automatic: Automatic for some and manual for others</option>
                                                <option value="Automatic processing without manual intevention">Automatic
                                                    processing without manual intevention</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <label class="costsaving-text">% of Document manually processed after data
                                                capture<span class="cost_formrequired">*</span></label>
                                            <input type="text" name="document_processed_after_capturing_percentage[]"
                                                class="form-control custom_input_text" readonly required>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <label class="costsaving-text">Avg. efforts in minutes per document for
                                                processing<span class="cost_formrequired">*</span></label>
                                            <input type="text" name="avg_minutes_per_document_processing[]"
                                                class="form-control custom_input_text" required>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <label class="costsaving-text">Systems Accuracy of automatic reading and
                                                processing in %<span class="cost_formrequired">*</span></label>
                                            <input type="text" name="accuracy_of_automatic_reading[]"
                                                class="form-control custom_input_text" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 btnCalculate">
                            <div class="btn-flex justify-content-end mt-2 me-2 py-1">
                                <button type="submit" id="button" title="Calculate">
                                    <span>View Result</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal modal-xl" id="costsaving_calculationshow" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title cost_heading" id="exampleModalLabel">Calculate Cost Saving </h5>
                </div>
                <div id="costsaving_show">
                    <!-- data -->
                </div>
            </div>
        </div>
    </div>
    <!-- edit modal -->
    <div class="modal modal-xl" id="costsaving-edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl height_costsaving">
            <div class="modal-content">
                <div class="modal-body modal_cost_saving" id="edit-Modal">
                    <!-- data -->
                </div>
            </div>
        </div>
    </div>
    <!-- end edit modal -->
<?php } ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $('#costsaving-enquiry-modal').on('hidden.bs.modal', function() {
            $('#cost_saving_form').trigger('reset');
            $('.CostCardAdd .cost_card:not(:first)').remove();
            j = 0;
            $('.CostCardAdd .cost_card:last').find('.btnAddNew').removeClass('d-none');
            $("#cost_saving_form").validate().resetForm();
        });
        $('#costsaving-edit-modal').on('hidden.bs.modal', function() {
            $('#cost_savingupdate_form').trigger('reset');
            $('.CostCardAdd .cost_card:not(:first)').remove();
            j = 0;
            $('.CostCardAdd .cost_card:last').find('.btnAddNew').removeClass('d-none');
            $("#cost_savingupdate_form").validate().resetForm();
        });
    });
    $(document).ready(function() {
        $(".business-tab").first().trigger("click");
        $(".benefits-tab").first().trigger("click");
    })
    //Modal Details
    $(document).on('click', 'button.btnClose', function() {
        $('#costsaving_calculationshow').modal('hide');
    });
    $(".costsaving-modal").on("click", function() {
        $("#costsaving-enquiry-modal").modal('show');
    });
    //End Modal Details
    //Appending Table
    let j = 0;
    let i = 0;
    $(document).on('click', 'button.btnAddNew', function() {
        i = j + 1;
        if (i < 10) {
            $(".CostCardAdd").find('.btnAddNew').addClass('d-none');
            $(".CostCardAdd").append(`<div class="card cost_card" style="margin-block: 10px;">
                            <span class="position_cost">
                                <button type="button" class="btn btn-outline-danger deletebtn" title="Discard"><i class="fa fa-times" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-outline-primary btnAddNew ms-2" title="Add"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </span>
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" name="cost_sqlid[]" class="form-control">
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Process Name<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="process_name[]" class="form-control custom_input_text" required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Document Name<span class="cost_formrequired">*</span></label>
                                        <input type="text"  name="document_name[]" class="form-control custom_input_text" required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Total no. of documents per year<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="total_documents_per_year[]" class="form-control custom_input_text" required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Data Capture Process<span class="cost_formrequired">*</span></label>
                                            <select name="document_captured_processing[]" class="form-select dcmt-cpture custom_input_text costsaving-text" required>
                                                <option value="">--Select--</option>
                                                <option value="Manual/ excel based processing without any software">Manual/ excel based processing without any software</option>
                                                <option value="Semi-automatic: Automatic for some and manual for others">Semi-automatic: Automatic for some and manual for others</option>
                                                <option value="Automatic processing without manual intevention">Automatic processing without manual intevention</option>
                                            </select>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">% of Documents Manually Captured<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="document_manually_capturing_percentage[]" class="form-control custom_input_text" readonly required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Avg. efforts in minutes per document for data capture<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="avg_minutes_per_document_data_capture[]" class="form-control custom_input_text" required>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <label class="costsaving-text">Post Data Capture Process<span class="cost_formrequired">*</span><br></label>
                                            <select name="after_capturing_data[]" class="form-select dcmt-manually-cpture custom_input_text costsaving-text" required>
                                                        <option value="">--Select--</option>
                                                        <option value="Manual/ excel based processing without any software">Manual/ excel based processing without any software</option>
                                                        <option value="Semi-automatic processing: Combination of automatic and manual">Semi-automatic: Automatic for some and manual for others</option>
                                                        <option value="Automatic processing without manual intevention">Automatic processing without manual intevention</option>
                                                </select>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label class="costsaving-text">% of Document manually processed after data capture<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="document_processed_after_capturing_percentage[]" class="form-control custom_input_text" readonly required>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                            <label class="costsaving-text">Avg. efforts in minutes per document for processing<span class="cost_formrequired">*</span></label>
                                            <input type="text" name="avg_minutes_per_document_processing[]" class="form-control custom_input_text" required>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label class="costsaving-text">Systems Accuracy of automatic reading and processing in %<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="accuracy_of_automatic_reading[]" class="form-control custom_input_text" required>
                                    </div>
                                </div>
                            </div>
                        </div>`);
            $(".CostCardAdd").find('.card:last-child .btnAddNew').removeClass('d-none');
            j++;
        } else {
            alert('Row cannot be greater than Ten');
        }
    });
    $(document).on('click', 'button.deletebtn', function() {
        $(this).closest('.cost_card').remove();
        j--;
        $(".CostCardAdd").find('.btnAddNew').addClass('d-none');
        $(".CostCardAdd").children('.cost_card:last-child').find('.btnAddNew').removeClass('d-none');
        return false;
    });
    //How is the data of the document captured for processing
    $(document).on('change', '.dcmt-cpture', function() {
        var selectedValue = $(this).val();
        var textboxValue = '';
        switch (selectedValue) {
            case "Manual/ excel based processing without any software":
                textboxValue = "100";
                $(this).closest('.col-md-4').next().find('.custom_input_text').prop('readonly', true).val(
                    textboxValue);
                break;
            case "Semi-automatic: Automatic for some and manual for others":
                textboxValue = "";
                $(this).closest('.col-md-4').next().find('.custom_input_text').prop('readonly', false).val(
                    textboxValue);
                break;
            case "Automatic processing without manual intevention":
                textboxValue = "0";
                $(this).closest('.col-md-4').next().find('.custom_input_text').prop('readonly', true).val(
                    textboxValue);
                break;
        }
    });
    //How is the data done after capturing the data
    $(document).on('change', '.dcmt-manually-cpture', function() {
        var selectedValue = $(this).val();
        var textboxValue = '';
        switch (selectedValue) {
            case "Manual/ excel based processing without any software":
                textboxValue = "100";
                $(this).closest('.col-md-3').next().find('.custom_input_text').prop('readonly', true).val(
                    textboxValue);
                break;
            case "Semi-automatic processing: Combination of automatic and manual":
                textboxValue = "";
                $(this).closest('.col-md-3').next().find('.custom_input_text').prop('readonly', false).val(
                    textboxValue);
                break;
            case "Automatic processing without manual intevention":
                textboxValue = "0";
                $(this).closest('.col-md-3').next().find('.custom_input_text').prop('readonly', true).val(
                    textboxValue);
                break;
        }
    });

    function numberWithCommas(number) {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
        }).format(number).replace('$', '').replace('.00', '');
    }
    //Insert Form
    $("#cost_saving_form").validate({
        rules: {
            organization: "required",
            email: {
                email: true,
                required: true
            },
            document_mistake_percent_per_year: {
                required: true,
                number: true
            },
            avg_cost_per_mistake: {
                required: true,
                number: true
            },
            'processs_name[]': {
                required: true,
            },
        },
        submitHandler: function(form) {
            if ($("#cost_saving_form").valid()) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('costsaving/insertcostsaving') ?>",
                    dataType: 'json',
                    data: $(form).serialize(),
                    success: function(data) {
                        if (data.status == false) {
                            swal("Error!", data.message, "error");
                        } else {
                            var htmldata = "";
                            htmldata += `<div class="modal-body" style="font-size: small;max-height: 555px; overflow-y: auto; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                    <table class="table table-bordered">
                                            <tr class="costcal_tr">
                                                <th rowspan="8" colspan="8" style="width: 472px;">Gross Cost Reduction (in USD)</th>
                                            </tr>
                                            <tr>
                                                <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_seventy.totalcost_reduction_per_seventy)}</b></td>
                                                <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_eighty.totalcost_reduction_per_eighty)}</b></td>
                                                <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_ninety.totalcost_reduction_per_ninety)}</b></td>
                                                <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_ninetyfive.totalcost_reduction_per_ninetyfive)}</b></td>
                                            </tr>
                                        </table>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="costcal_tr">
                                                    <th rowspan="2" colspan="2">Process Name</th>
                                                    <th rowspan="2" colspan="2">Document Name</th>
                                                    <th rowspan="2" colspan="2">Cost Reduction (in USD)</th>
                                                    <th colspan="8" class="text-center">Zero-touch pass-through rate</th>
                                                </tr>
                                                <tr class="costcal_tr">
                                                    <th colspan="2" class="text-center">70%</th>
                                                    <th colspan="2" class="text-center">80%</th>
                                                    <th colspan="2" class="text-center">90%</th>
                                                    <th colspan="2" class="text-center">95%</th>
                                                </tr>    
                                            </thead><tbody>`;
                            for (var i in data.cost) {
                                htmldata += `
                                        <tr>
                                            <td rowspan="4" colspan="2">${data.cost[i].process_name}</td>
                                            <td rowspan="4" colspan="2">${data.cost[i].document_name}</td>
                                            <td colspan="2">Labour cost due to zero touch pass through</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_seventy)}</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_eighty)}</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_ninety)}</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_ninetyfive)}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Labour cost due to data level efficiency</td>
                                            <td colspan="8" class="text-center">${numberWithCommas(data.cost[i].labour_cost_efficiency)}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Savings due to lesser mistakes</td>
                                            <td colspan="8" class="text-center">${numberWithCommas(data.cost[i].saving_lesser_mistake)}</td>
                                        </tr>
                                        <tr class="costcal_tr">
                                            <td colspan="2">Total Cost Reduction (in USD)</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_seventy)}</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_eighty)}</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_ninety)}</td>
                                            <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_ninetyfive)}</td>
                                        </tr>`;
                            }
                            htmldata += `</tbody></table></div><div class="modal-footer">
                                    <button type="button" class="btnClose" data-mdb-dismiss="modal" title="Close">Close</button>
                                    <button type="button" class="recalculate_button" onclick="editCostsaving(${data.cost_cal_id})" title="Recalculate">Recalculate Cost</button>
                                </div>`;
                            $("#costsaving_show").html(htmldata);
                            $('#costsaving_calculationshow').modal('show');
                            $("#cost_saving_form").trigger("reset");
                            $('#costsaving-enquiry-modal').modal('hide');
                        }
                    }
                });
            }
        }
    });
    //EndInsert Form

    //Edit data
    function editCostsaving(Id) {
        $.ajax({
            url: "<?= base_url('costsaving/fetchcostsaving') ?>",
            method: "POST",
            dataType: 'json',
            data: {
                ID: Id
            },
            success: function(response) {
                if (response.status == 'success') {
                    var htmldata = "";
                    htmldata += `<div class="sec-head modal_cost pt-3 pb-0" data-aos="fade-up" data-aos-duration="1000" >
                        <h4 class="cost_heading">Calculate Cost Saving </h4> 
                        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                        </div>
                    <form id="cost_savingupdate_form">
                        <input type="hidden" name="costid" class="form-control" value="${response.data.costcaldata.id}">
                        <div class="row" style="padding: 3px 20px 0px 20px;">
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label class="costsaving-text">
                                    Organization Name<span class="cost_formrequired">*</span>                                                           
                                </label>
                                <div class="inp-group">
                                    <input class="custom_input_text" type="text" name="organization" value="${response.data.costcaldata.organization}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label class="costsaving-text">
                                    Email ID<span class="cost_formrequired">*</span> 
                                </label>
                                <div class="inp-group">
                                    <input class="custom_input_text" type="text" name="email" value="${response.data.costcaldata.email}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label class="costsaving-text">
                                    Avg. Labour Cost per Hour (in USD)<span class="cost_formrequired">*</span> 
                                </label>
                                <div class="inp-group">
                                    <input class="custom_input_text" type="text" name="avg_processing_cost_per_hour" value="${+response.data.costcaldata.avg_processing_cost_per_hour}" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label class="costsaving-text">
                                    Document Mistakes per Year (in %)<span class="cost_formrequired">*</span> 
                                </label>
                                <div class="inp-group">
                                    <input class="custom_input_text" type="text" name="document_mistake_percent_per_year" value="${+response.data.costcaldata.document_mistake_percent_per_year}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label class="costsaving-text">
                                    Avg. Cost per Mistake (in USD)<span class="cost_formrequired">*</span> 
                                </label>
                                <div class="inp-group">
                                    <input class="custom_input_text" type="text" name="avg_cost_per_mistake" value="${+response.data.costcaldata.avg_cost_per_mistake}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label class="costsaving-text">
                            Mistakes Reduction After Automation (in %)<span class="cost_formrequired">*</span> 
                                </label>
                                <div class="inp-group">
                                    <input class="custom_input_text" type="text" name="mistakes_reduction" value="${+response.data.costcaldata.mistakes_reduction}" readonly/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="CostCardAdd">`;
                    var lastIdx = response.data.costdata.length - 1;
                    for (var a in response.data.costdata) {
                        var selectedValue = response.data.costdata[a].document_captured_processing;
                        var selectedAttr1 = '';
                        var selectedAttr2 = '';
                        var selectedAttr3 = '';
                        if (selectedValue === "Manual/ excel based processing without any software") {
                            selectedAttr1 = 'selected';
                        } else if (selectedValue ===
                            "Semi-automatic: Automatic for some and manual for others") {
                            selectedAttr2 = 'selected';
                        } else if (selectedValue === "Automatic processing without manual intevention") {
                            selectedAttr3 = 'selected';
                        }

                        var after_capturing_data = response.data.costdata[a].after_capturing_data;
                        var selectedafter_capturing_data1 = '';
                        var selectedafter_capturing_data2 = '';
                        var selectedafter_capturing_data3 = '';
                        if (after_capturing_data === "Manual/ excel based processing without any software") {
                            selectedafter_capturing_data1 = 'selected';
                        } else if (after_capturing_data ===
                            "Semi-automatic processing: Combination of automatic and manual") {
                            selectedafter_capturing_data2 = 'selected';
                        } else if (after_capturing_data === "Automatic processing without manual intevention") {
                            selectedafter_capturing_data3 = 'selected';
                        }
                        if (a == response.data.costdata.length - 1) {
                            htmldata += `<div class="card cost_card">
                        <span class="position_cost"><button type="button" class="btn btn-outline-primary btnAddNew" title="Add"><i class="fa fa-plus" aria-hidden="true"></i></button></span>
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" class="form-control" name="cost_sqlid[]" value="${response.data.costdata[a].id}" >
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Process Name<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="process_name[]" class="form-control custom_input_text" value="${response.data.costdata[a].process_name}" required >
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Document Name<span class="cost_formrequired">*</span></label>
                                        <input type="text"  name="document_name[]" class="form-control custom_input_text" value="${response.data.costdata[a].document_name}" required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Total no. of documents per year<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="total_documents_per_year[]" class="form-control custom_input_text" value="${+response.data.costdata[a].total_documents_per_year}" required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Data Capture Process<span class="cost_formrequired">*</span></label>
                                            <select name="document_captured_processing[]" class="form-select dcmt-cpture custom_input_text costsaving-text" required>
                                                <option value="">--Select--</option>
                                                <option value="Manual/ excel based processing without any software" ${selectedAttr1}>Manual/ excel based processing without any software</option>
                                                <option value="Semi-automatic: Automatic for some and manual for others" ${selectedAttr2}>Semi-automatic: Automatic for some and manual for others</option>
                                                <option value="Automatic processing without manual intevention" ${selectedAttr3}>Automatic processing without manual intevention</option>
                                            </select>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">% of Documents Manually Captured<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="document_manually_capturing_percentage[]" class="form-control custom_input_text cost_document"  value="${+response.data.costdata[a].document_manually_capturing_percentage}" readonly required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Avg. efforts in minutes per document for data capture<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="avg_minutes_per_document_data_capture[]" class="form-control custom_input_text" value="${+response.data.costdata[a].avg_minutes_per_document_data_capture}" required>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <label class="costsaving-text">Post Data Capture Process<span class="cost_formrequired">*</span><br></label>
                                            <select name="after_capturing_data[]" class="form-select dcmt-manually-cpture custom_input_text costsaving-text" required>
                                                        <option value="">--Select--</option>
                                                        <option value="Manual/ excel based processing without any software" ${selectedafter_capturing_data1}>Manual/ excel based processing without any software</option>
                                                        <option value="Semi-automatic processing: Combination of automatic and manual" ${selectedafter_capturing_data2}>Semi-automatic: Automatic for some and manual for others</option>
                                                        <option value="Automatic processing without manual intevention" ${selectedafter_capturing_data3}>Automatic processing without manual intevention</option>
                                                </select>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label class="costsaving-text">% of Document manually processed after data capture<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="document_processed_after_capturing_percentage[]" class="form-control custom_input_text" value="${+response.data.costdata[a].document_processed_after_capturing_percentage}" readonly required>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                            <label class="costsaving-text">Avg. efforts in minutes per document for processing<span class="cost_formrequired">*</span></label>
                                            <input type="text" name="avg_minutes_per_document_processing[]" class="form-control custom_input_text" value="${+response.data.costdata[a].avg_minutes_per_document_processing}" required>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label class="costsaving-text">Systems Accuracy of automatic reading and processing in %<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="accuracy_of_automatic_reading[]" class="form-control custom_input_text" value="${+response.data.costdata[a].accuracy_of_automatic_reading}" required>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        } else {
                            htmldata += `<div class="card cost_card"><button type="button" class="btn btn-outline-primary btnAddSecondary"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            <div class="card-body">
                                <div class="row">
                                <input type="hidden" class="form-control" name="cost_sqlid[]" value="${response.data.costdata[a].id}" >
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Process Name<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="process_name[]" class="form-control custom_input_text" value="${response.data.costdata[a].process_name}" required >
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Document Name<span class="cost_formrequired">*</span></label>
                                        <input type="text"  name="document_name[]" class="form-control custom_input_text" value="${response.data.costdata[a].document_name}" required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Total no. of documents per year<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="total_documents_per_year[]" class="form-control custom_input_text" value="${+response.data.costdata[a].total_documents_per_year}" required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Data Capture Process<span class="cost_formrequired">*</span></label>
                                            <select name="document_captured_processing[]" class="form-select dcmt-cpture custom_input_text costsaving-text" required>
                                                <option value="">--Select--</option>
                                                <option value="Manual/ excel based processing without any software" ${selectedAttr1}>Manual/ excel based processing without any software</option>
                                                <option value="Semi-automatic: Automatic for some and manual for others" ${selectedAttr2}>Semi-automatic: Automatic for some and manual for others</option>
                                                <option value="Automatic processing without manual intevention" ${selectedAttr3}>Automatic processing without manual intevention</option>
                                            </select>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">% of Documents Manually Captured<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="document_manually_capturing_percentage[]" class="form-control custom_input_text"  value="${+response.data.costdata[a].document_manually_capturing_percentage}" readonly required>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="costsaving-text">Avg. efforts in minutes per document for data capture<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="avg_minutes_per_document_data_capture[]" class="form-control custom_input_text" value="${+response.data.costdata[a].avg_minutes_per_document_data_capture}" required>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <label class="costsaving-text">Post Data Capture Process<span class="cost_formrequired">*</span><br></label>
                                            <select name="after_capturing_data[]" class="form-select dcmt-manually-cpture custom_input_text costsaving-text" required>
                                                        <option value="">--Select--</option>
                                                        <option value="Manual/ excel based processing without any software" ${selectedafter_capturing_data1}>Manual/ excel based processing without any software</option>
                                                        <option value="Semi-automatic processing: Combination of automatic and manual" ${selectedafter_capturing_data2}>Semi-automatic: Automatic for some and manual for others</option>
                                                        <option value="Automatic processing without manual intevention" ${selectedafter_capturing_data3}>Automatic processing without manual intevention</option>
                                                </select>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label class="costsaving-text">% of Document manually processed after data capture<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="document_processed_after_capturing_percentage[]" class="form-control custom_input_text" value="${+response.data.costdata[a].document_processed_after_capturing_percentage}" readonly required>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                            <label class="costsaving-text">Avg. efforts in minutes per document for processing<span class="cost_formrequired">*</span></label>
                                            <input type="text" name="avg_minutes_per_document_processing[]" class="form-control custom_input_text" value="${+response.data.costdata[a].avg_minutes_per_document_processing}" required>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label class="costsaving-text">Systems Accuracy of automatic reading and processing in %<span class="cost_formrequired">*</span></label>
                                        <input type="text" name="accuracy_of_automatic_reading[]" class="form-control custom_input_text" value="${+response.data.costdata[a].accuracy_of_automatic_reading}" required>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        }
                    }
                    htmldata += `</div>`;
                    htmldata += `<div class="col-12 btnCalculate">
                        <div class="btn-flex justify-content-end mt-2 me-2 py-1">
                            <button type="button" id="button" onclick="UpdateFormData(event)" title="Calculate">
                                <span>View Result</span>
                            </but   ton>
                        </div>
                </form>`;
                    $('#edit-Modal').html(htmldata);
                    $("#costsaving-edit-modal").modal('show');
                    $('#costsaving_calculationshow').modal('hide');
                } else {
                    swal("Error!", response.message, "error");
                }
            }
        });
    }
    //End Edit data

    //Update Form
    $(document).ready(function() {
        $("#cost_savingupdate_form").validate({
            rules: {
                organization: "required",
                email: {
                    email: true,
                    required: true
                },
                document_mistake_percent_per_year: {
                    required: true,
                    number: true
                },
                avg_cost_per_mistake: {
                    required: true,
                    number: true
                },
                'processs_name[]': {
                    required: true,
                    "minlength": 5,
                },
            },
        });
    });

    function UpdateFormData(e) {
        e.preventDefault();
        if ($("#cost_savingupdate_form").valid()) {
            var formData = $('#cost_savingupdate_form').serialize();
            var form = $(this);
            $.ajax({
                type: "POST",
                url: "<?= base_url('costsaving/updatecostsaving') ?>",
                dataType: 'json',
                data: formData,
                success: function(data) {
                    if (data.status == false) {
                        swal("Error!", data.message, "error");
                    } else {
                        var htmldata = "";
                        htmldata += `<div class="modal-body" style="font-size: small;max-height: 555px; overflow-y: auto; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; scrollbar-width: thin;">
                                    <table class="table table-bordered">
                                        <tr class="costcal_tr">
                                            <th rowspan="8" colspan="8" style="width: 472px;">Gross Cost Reduction (in USD)</th>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_seventy.totalcost_reduction_per_seventy)}</b></td>
                                            <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_eighty.totalcost_reduction_per_eighty)}</b></td>
                                            <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_ninety.totalcost_reduction_per_ninety)}</b></td>
                                            <td colspan="1" class="text-end"><b>${numberWithCommas(data.sum_ninetyfive.totalcost_reduction_per_ninetyfive)}</b></td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="costcal_tr">
                                                <th rowspan="2" colspan="2">Process Name</th>
                                                <th rowspan="2" colspan="2">Document Name</th>
                                                <th rowspan="2" colspan="2">Cost Reduction (in USD)</th>
                                                <th colspan="8" class="text-center">Zero-touch pass-through rate</th>
                                            </tr>
                                            <tr class="costcal_tr">
                                                <th colspan="2" class="text-center">70%</th>
                                                <th colspan="2" class="text-center">80%</th>
                                                <th colspan="2" class="text-center">90%</th>
                                                <th colspan="2" class="text-center">95%</th>
                                            </tr>    
                                        </thead><tbody>`;
                        for (var i in data.cost) {
                            htmldata += `
                                    <tr>
                                        <td rowspan="4" colspan="2">${data.cost[i].process_name}</td>
                                        <td rowspan="4" colspan="2">${data.cost[i].document_name}</td>
                                        <td colspan="2">Labour cost due to zero touch pass through</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_seventy)}</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_eighty)}</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_ninety)}</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].labour_cost_passthrough_per_ninetyfive)}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Labour cost due to data level efficiency</td>
                                        <td colspan="8" class="text-center">${numberWithCommas(data.cost[i].labour_cost_efficiency)}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Savings due to lesser mistakes</td>
                                        <td colspan="8" class="text-center">${numberWithCommas(data.cost[i].saving_lesser_mistake)}</td>
                                    </tr>
                                    <tr class="costcal_tr">
                                        <td colspan="2">Total Cost Reduction (in USD)</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_seventy)}</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_eighty)}</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_ninety)}</td>
                                        <td colspan="2" class="text-end">${numberWithCommas(data.cost[i].totalcost_reduction_per_ninetyfive)}</td>
                                    </tr>`;
                        }
                        htmldata += `</tbody></table></div><div class="modal-footer">
                                <button type="button" class="btnClose" data-mdb-dismiss="modal" title="Close">Close</button>
                                <button type="button" class="recalculate_button" onclick="editCostsaving(${data.cost_cal_id})" title="Recalculate">Recalculate Cost</button>
                                </div>`;
                        $("#costsaving_show").html(htmldata);
                        $('#costsaving_calculationshow').modal('show');
                        $("#cost_savingupdate_form").trigger("reset");
                        $('#costsaving-edit-modal').modal('hide');
                    }
                }
            });
        }
    }
    //End Update Form
</script>