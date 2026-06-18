<div id="smooth-content" class="service">

    <?php
    if (!empty($pserv['inner_banner_image'])) {
        $banner = base_url('uploads/images/' . $pserv['inner_banner_image']);
    } else {
        $banner = base_url('assets/img/shape/banner-13.jpg');
    }

    ?>
    <!-- Start Section 1 -->
    <?php if (!empty($pserv['advantage_heading'])) { ?>
        <div class="banner-style-three-area overflow-hidden bg-gray bg-cover" style="background: url(<?= $banner ?>);">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-7 pr-60 pr-md-15 pr-xs-15">
                        <div class="banner-style-three-info">
                            <h2 class="wow fadeInUp"><?= $pserv['inner_banner_heading'] ?></h2>
                            <h4 class="fade-up-anim"><?= $pserv['advantage_heading'] ?></h4>
                            <p class="fade-up-anim">
                                <?= $pserv['advantage_short_description'] ?>
                            </p>
                            <div class="button mt-30 fade-up-anim">
                                <a href="<?= urldecode($pserv['ctalink']) ?>" class="btn btn-style-one light"><?= $pserv['ctabtn'] ?> <i class="fas fa-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="chat-bot-thumb text-center">
                            <?php
                            if (!empty($pserv['advantage_video'])) {
                                // Extract YouTube video ID
                                $videoUrl = urldecode($pserv['advantage_video']);
                                $videoId = '';
                                if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\&\?\/]+)/', $videoUrl, $matches)) {
                                    $videoId = $matches[1];
                                }
                            ?>
                                <img src="https://img.youtube.com/vi/<?= $videoId ?>/hqdefault.jpg">
                                <a href=" <?= urldecode($pserv['advantage_video']) ?>" class="popup-youtube video-button-v1"><i class="fas fa-play"></i></a>
                            <?php } else { ?>
                                <div class="illustration">
                                    <img class="wow fadeInUp" data-wow-delay="300ms" src="<?= base_url('uploads/images/') . $pserv['advantage_image'] ?>" alt="<?= $pserv['advantage_alt_text'] ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 1 -->


    <!-- Start Section 2 -->
    <?php if (!empty($pserv['about_heading'])) { ?>
        <div class="about-style-three-area default-padding bg-gray bg-cover" style="background: url(<?= base_url('assets/img/shape/banner-16.jpg') ?>);">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <h2 class="title split-text-right split-text-in-right"><?= $pserv['about_heading'] ?></h2>
                        <p>
                            <?= $pserv['about_short_description_left'] ?>
                        </p>
                        <p>
                            <?= $pserv['about_short_description_right'] ?>
                        </p>
                        <a class="btn btn-style-one" href="about-us.html">Know more <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-style-three-thumb">
                            <img class="fade-up-anim" src="<?= base_url('uploads/images/') . $pserv['about_image'] ?>" alt="<?= $pserv['about_alt_text'] ?>">
                            <img class="fade-up-anim" src="<?= base_url('assets/img/illustration/1.gif') ?>" alt="Image Not Found">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <?php if ($homewhycoz) { ?>
        <div class="choose-us-style-one-area default-padding-top bg-dark text-light blurry-shape-right-bottom overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="choose-us-thumb">
                            <img class="leftRightScroll1" src="<?= base_url('uploads/images/' . $pserv['industriesimage']) ?>" alt="Image Not Found" style=" object-fit: contain !important;">
                        </div>
                    </div>
                    <div class=" col-lg-6 offset-lg-1">
                        <div class="choose-us-one-info default-padding-bottom">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['why_heading'] ?></h2>
                            <ul class="list-style-three mt-15 fade-up-anim">
                                <?php
                                $count = 0;
                                foreach ($homewhycoz as $wc) {
                                    $count++;
                                ?>
                                    <li>
                                        <h4><?= html_entity_decode($wc['title']) ?></h4>
                                        <p>
                                            <?= html_entity_decode($wc['short_description']) ?>
                                        </p>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <?php if (!empty($pserv['toolbenefits_json'])) { ?>
        <div class="services-style-seven-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading2 text-center">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['toolbenefits_heading'] ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="services-style-seven-items">
                            <div class="accordion" id="faqAccordion">
                                <?php $count = 0;
                                foreach ($pserv['toolbenefits_json'] as $buis) { ?>
                                    <div class="services-style-seven-item">
                                        <h2 class="accordion-header" id="heading-<?= $count ?>">
                                            <button class="accordion-button <?= ($count == 0) ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $count ?>" aria-expanded="<?= ($count == 0) ? 'true' : 'false' ?>" aria-controls="collapse<?= $count ?>">
                                                <i class="fad fa-robot"></i> <?= html_entity_decode($buis['heading']) ?>
                                            </button>
                                        </h2>
                                        <div id="collapse<?= $count ?>" class="accordion-collapse collapse <?= ($count == 0) ? 'show' : '' ?>" aria-labelledby="heading-<?= $count ?>" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <div class="info">
                                                    <p>
                                                        <?= html_entity_decode($buis['description']) ?>
                                                    </p>

                                                </div>
                                                <div class="thumb">
                                                    <img src="<?= base_url('uploads/images/') . $buis['image'] ?>" alt="<?php echo $buis['alt_text'] ?>">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php $count++;
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 4 -->

    <!-- Start Section 5 -->
    <?php if (!empty($pserv['believe_json'] && !empty($pserv['believe_heading']))) { ?>
        <div class="brand-style-two-area default-padding bg-theme text-light bg-cover" style="background-image: url(<?= base_url('assets/img/shape/banner-15.jpg'); ?>);">
            <div class="container">
                <div class="row p-3">
                    <?php
                    $believeArr = json_decode($pserv['believe_json'], true);
                    if (!empty($believeArr)) {
                        foreach ($believeArr as $belp) {
                    ?>
                            <div class="col-lg-3 col-md-6 funfact-style-one-item">
                                <?php
                                $val1   = html_entity_decode($belp['key']); //21+
                                preg_match('/^(\d+)\s*([^\d]*)$/', trim($val1), $m);
                                $number1  = trim($m[1] ?? '0');    // "20"
                                $symbol1  = trim($m[2] ?? '');     // "+"
                                $label1 = $belp['value'];
                                ?>

                                <div class="cz-counter-item">
                                    <?php if (empty($m)) { ?>
                                        <div class="cz-counter-number">
                                            <span class="js-counter"><?= html_entity_decode($belp['key']) ?> </span>
                                        </div>
                                    <?php } else { ?>
                                        <div class="cz-counter-number">
                                            <span class="js-counter"><?= $number1 ?> <?= $symbol1 ?></span>
                                        </div>
                                        <h5 class="mt-3"><?= html_entity_decode($label1) ?></h5>
                                    <?php } ?>
                                    <div class="cz-counter-divider"></div>
                                </div>
                            </div>
                    <?php  }
                    } ?>

                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 5 -->

    <!-- Start Section 6 -->
    <?php /*if (!empty($pserv['mbanners'])) { ?>
        <div class="feature-style-one-area default-padding bg-gray blurry-shape-right-bottom" style="background-image: url(<?= base_url('assets/img/shape/3.png'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="site-heading">

                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['mbanners'][0]['heading']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="fade-up-anim">
                    <div class="row">
                        <div class="col-xl-4 pr-50 pr-md-15 pr-xs-15">
                            <div class="feature-style-one-left-info">
                                <div class="content">
                                    <p>
                                        <?= $pserv['mbanners'][0]['description']; ?>
                                    </p>
                                </div>
                                <div class="fun-fact-card-one mt-10">
                                    <div class="js-counter">218K</div>
                                    <h5>AI-Powered Solutions</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="feature-style-one-items fade-up-anim">
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item active">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/img/icon/9.png') ?>" alt="Image Not Found">
                                        </div>
                                        <h4>Personalized Solutions</h4>
                                        <p>
                                            Continuously updating recommendations
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/img/icon/10.png') ?>" alt="Image Not Found">
                                        </div>
                                        <h4>Interactive Workshops</h4>
                                        <p>
                                            Continuously updating recommendations
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/img/icon/11.png') ?> " alt="Image Not Found">
                                        </div>
                                        <h4>Next-Gen Development</h4>
                                        <p>
                                            Continuously updating recommendations
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }*/ ?>



    <?php
    if (!empty($pserv['section11_title'])) {
    ?>
        <div class="feature-style-one-area default-padding bg-gray blurry-shape-right-bottom" style="background-image: url(<?= base_url('assets/img/shape/3.png') ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="site-heading">
                            <h2 class="title split-text-right split-text-in-right">
                                <?= html_entity_decode($pserv['section11_title']) ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="fade-up-anim">
                    <div class="row">
                        <div class="col-xl-4 pr-50 pr-md-15 pr-xs-15">
                            <div class="feature-style-one-left-info">
                                <div class="content">
                                    <p>
                                        <?= html_entity_decode($pserv['section11_description']) ?>
                                    </p>
                                </div>
                                <div class="button mt-10 ">
                                    <a href="<?= $pserv['section11_ctalink'] ?>" class="btn btn-style-one btn-dark"><?= $pserv['section11_ctabtn'] ?> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="feature-style-one-items fade-up-anim">
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item active">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('uploads/images/' . $pserv['section11_one_img']) ?>" alt="Image Not Found">
                                        </div>
                                        <h4> <?= html_entity_decode($pserv['section11_one_title']) ?></h4>
                                        <p>
                                            <?= html_entity_decode($pserv['section11_one_desc']) ?>
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('uploads/images/' . $pserv['section11_two_img']) ?>" alt="Image Not Found">
                                        </div>
                                        <h4><?= html_entity_decode($pserv['section11_two_title']) ?></h4>
                                        <p>
                                            <?= html_entity_decode($pserv['section11_two_desc']) ?>
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('uploads/images/' . $pserv['section11_three_img']) ?>" alt="Image Not Found">
                                        </div>
                                        <h4><?= html_entity_decode($pserv['section11_three_title']) ?></h4>
                                        <p>
                                            <?= html_entity_decode($pserv['section11_three_desc']) ?>
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- End Section 6 -->

    <!-- Start Section 7 -->
    <?php if (!empty($pserv['cardsecop'])) { ?>
        <div class="services-style-three-area overflow-hidden default-padding-top blurry-shape-left-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['cardsecop_heading'] ?></h2>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="site-heading text-center">
                            <div class="services-style-three-carousel default-padding-bottom fade-up-anim swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Single item -->
                                    <?php foreach ($pserv['cardsecop'] as $ins) { ?>
                                        <div class="swiper-slide">
                                            <div class="service-style-three-item">
                                                <div class="top">
                                                    <div class="icon">
                                                        <img src="<?= base_url('assets/img/icon/20.png') ?>" alt="<?= $ins['alt_text'] ?? $ins['heading'] ?>">
                                                    </div>
                                                    <h4><a href="#"><?= $ins['heading'] ?></a></h4>
                                                    <p>
                                                        <?= $ins['description'] ?>
                                                    </p>
                                                </div>
                                                <!-- <ul>
                                                    <li><a href="#">Dashboard</a></li>
                                                    <li><a href="#">Web Apps</a></li>
                                                    <li><a href="#">Products</a></li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!-- Single item -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 7 -->

    <!-- Start Section 8 -->
    <?php if (!empty($pserv['heading_faq'])) { ?>
        <div class="faq-style-one-area accordion-secondary blurry-shape-right-bottom default-padding bg-gray"
            style="background-image: url(<?= base_url('assets/img/shape/7.png'); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-style-one-info">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['heading_faq'] ?>
                            </h2>
                            <a href="faq.html" class="btn btn-style-one btn-dark mt-10 wow fadeInUp"
                                data-wow-delay="100ms">All Questions <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="accordion-style-one-items fade-up-anim">
                            <div class="accordion" id="faqAccordion">
                                <?php $faqArr = json_decode($pserv['card_json_faq'], true);
                                $count = 0;
                                $first_three_faqs = array_slice($faqArr, 0, 4);

                                foreach ($first_three_faqs as $fq) {
                                ?>
                                    <div class="accordion-style-one-item">
                                        <h2 class="accordion-header" id="heading<?= $count ?>">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse<?= $count ?>" aria-expanded="true"
                                                aria-controls="collapse<?= $count ?>">
                                                <?= $fq['heading'] ?>
                                            </button>
                                        </h2>
                                        <div id="collapse<?= $count ?>" class="accordion-collapse collapse <?= $count == 0  ? 'show' : '' ?>"
                                            aria-labelledby="heading<?= $count ?>" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                    <?= $fq['description'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php $count++;
                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 8 -->

    <!-- Start Section 9 -->

    <?php
    if (!empty($pserv)) {
        if (!empty($pserv['servtp'])) {
            $serviceid = "sub_" . $pserv['id'];
        } else {
            $serviceid = $pserv['id'];
        }

        $blogs = $this->home_model->getlatestcasesbyservice($serviceid, 1);
    } else {
        $blogs = $this->home_model->getlatestblogs(1, 4);
    }
    if (!empty($blogs)): ?>
        <div class="home-blog-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right">Related Blogs</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="blog-style-two-box2">
                    <div class="row">
                        <!-- Single Item -->
                        <?php foreach ($blogs as $cs) { ?>
                            <div class="col-xl-3 col-lg-6">
                                <div class="blog-style-two fade-up-anim">
                                    <div class="thumb zoom-thumb">
                                        <a href="<?= base_url('blog/') . $cs['slug'] ?>"><img class="img-reveal"
                                                src="<?= base_url('uploads/images/') . $cs['image'] ?>" alt="<?= $cs['alt_text'] ?>"></a>
                                    </div>
                                    <div class="info">
                                        <div class="blog-one-meta">
                                            <ul>
                                                <li>
                                                    <?= date('F d, Y', strtotime($cs['posted'])) ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="blog-title">
                                            <a href="<?= base_url('blog/') . $cs['slug'] ?>"><?= $cs['title'] ?></a>
                                        </h5>
                                        <!-- <a href="<?= base_url('blog/') . $cs['slug'] ?>" class="btn-regular">
                                        Read more <img src="assets/img/icon/arrow-right-three.png"
                                            alt="Image Not Found">
                                    </a> -->
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- End Section 9  -->
</div>