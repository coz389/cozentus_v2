<div id="smooth-content">
    <!-- Start Section 1-->
    <div class="banner-style-two-area bg-theme shadow theme text-light bg-cover" style="background: url(<?= base_url('assets/img/shape/banner-9.jpg') ?>);">
        <div class="container">
            <div class="row align-center">
                <div class="col-xl-9 col-lg-8">
                    <div class="banner-two-content">
                        <h2 class="split-text-right split-text-in-right"><?= $pserv['inner_banner_heading'] ?></h2>
                        <div class="info1">
                            <h3><?= $pserv['advantage_heading'] ?></h3>
                            <p class="fade-up-anim">
                                <?= $pserv['advantage_short_description'] ?>
                            </p>
                            <div class="button mt-30 fade-up-anim">
                                <a href="<?= urldecode($pserv['ctalink']) ?>" class="btn btn-style-one light"><?= $pserv['ctabtn'] ?> <i class="fas fa-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="banner-two-right-info">
                        <?php if (!empty($pserv['advantage_video'])) { ?>
                            <a href=" <?= urldecode($pserv['advantage_video']) ?>" class="popup-youtube video-button"><i class="fas fa-play"></i></a>
                        <?php } else { ?>
                            <div class="thumb fade-up-anim">
                                <img src="<?= base_url('uploads/images/') . $pserv['advantage_image'] ?>" alt="<?= $pserv['advantage_alt_text'] ?>">
                            </div>
                        <?php } ?>

                        <div class="top-info fade-up-anim" data-wow-delay="100ms">
                            <h5>500+ Projects</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <img class="leftRightScroll" src="<?= base_url('assets/img/illustration/12.png') ?>" alt="Image Not Found">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
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
    <div class="brand-style-two-area default-padding bg-theme text-light bg-cover" style="background-image: url(assets/img/shape/banner-15.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="cz-counter-item">
                        <div class="cz-counter-number">
                            <span class="js-counter">500</span><span class="cz-counter-suffix">+</span>
                        </div>
                        <h5>Projects Delivered</h5>
                        <div class="cz-counter-divider"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cz-counter-item">
                        <div class="cz-counter-number">
                            <span class="js-counter">150</span><span class="cz-counter-suffix">+</span>
                        </div>
                        <h5>Global Clients</h5>
                        <div class="cz-counter-divider"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cz-counter-item">
                        <div class="cz-counter-number">
                            <span class="js-counter">350</span><span class="cz-counter-suffix">+</span>
                        </div>
                        <h5>Team Members</h5>
                        <div class="cz-counter-divider"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cz-counter-item">
                        <div class="cz-counter-number">
                            <span class="js-counter">15</span><span class="cz-counter-suffix">+</span>
                        </div>
                        <h5>Years Experience</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 5 -->

    <!-- Start Section 6 -->
    <div class="feature-style-one-area default-padding bg-gray blurry-shape-right-bottom" style="background-image: url(assets/img/shape/3.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="site-heading">

                        <h2 class="title split-text-right split-text-in-right">Smart Technologies We Leverage</h2>
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
                                    Our development team embraces a fast and agile technology-agnostic approach, focusing on selecting the best-in-class tools and frameworks. to deliver future-proof solutions.
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
                                        <img src="assets/img/icon/9.png" alt="Image Not Found">
                                    </div>
                                    <h4>Personalized Solutions</h4>
                                    <p>
                                        Continuously updating recommendations
                                    </p>
                                </div>
                                <img src="assets/img/shape/9.png" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="feature-style-one hover-active-item">
                                <div class="content">
                                    <div class="icon">
                                        <img src="assets/img/icon/10.png" alt="Image Not Found">
                                    </div>
                                    <h4>Interactive Workshops</h4>
                                    <p>
                                        Continuously updating recommendations
                                    </p>
                                </div>
                                <img src="assets/img/shape/9.png" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="feature-style-one hover-active-item">
                                <div class="content">
                                    <div class="icon">
                                        <img src="assets/img/icon/11.png" alt="Image Not Found">
                                    </div>
                                    <h4>Next-Gen Development</h4>
                                    <p>
                                        Continuously updating recommendations
                                    </p>
                                </div>
                                <img src="assets/img/shape/9.png" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 6 -->

    <!-- Start Section 7 -->
    <div class="services-style-three-area overflow-hidden default-padding-top blurry-shape-left-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">

                        <h2 class="title split-text-right split-text-in-right">Logistics Solutions We Offer</h2>
                    </div>
                </div>


                <div class="col-xl-12">
                    <div class="site-heading text-center">


                        <div class="services-style-three-carousel default-padding-bottom fade-up-anim swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="service-style-three-item">
                                        <div class="top">
                                            <div class="icon">
                                                <img src="assets/img/icon/18.png" alt="Image Not Found">
                                            </div>
                                            <h4><a href="services-details.html">Web Applications Development</a></h4>
                                            <p>
                                                Easy to use and comprehend web applications that are not just scalable but also backed by robust and secure backend system.
                                            </p>
                                        </div>
                                        <ul>
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="#">Web Apps</a></li>
                                            <li><a href="#">Products</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="service-style-three-item">
                                        <div class="top">
                                            <div class="icon">
                                                <img src="assets/img/icon/19.png" alt="Image Not Found">
                                            </div>
                                            <h4><a href="services-details.html">Custom AI Solution</a></h4>
                                            <p>
                                                Our custom AI solutions help automate workflows, improve operational efficiency, and deliver smarter business decisions.
                                            </p>
                                        </div>
                                        <ul>
                                            <li><a href="#">Virtual</a></li>
                                            <li><a href="#">Analysis</a></li>
                                            <li><a href="#">Claude</a></li>
                                            <li><a href="#">Voice</a></li>
                                            <li><a href="#">Replika</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="service-style-three-item">
                                        <div class="top">
                                            <div class="icon">
                                                <img src="assets/img/icon/20.png" alt="Image Not Found">
                                            </div>
                                            <h4><a href="services-details.html">API Development And Integration</a></h4>
                                            <p>
                                                Our robust APIs facilitate smooth data exchange between applications, data sources, and stakeholders.
                                            </p>
                                        </div>
                                        <ul>
                                            <li><a href="#">Chat</a></li>
                                            <li><a href="#">Models</a></li>
                                            <li><a href="#">Natural</a></li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Content</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="service-style-three-item">
                                        <div class="top">
                                            <div class="icon">
                                                <img src="assets/img/icon/20.png" alt="Image Not Found">
                                            </div>
                                            <h4><a href="services-details.html">Cloud Migration Of Applications</a></h4>
                                            <p>
                                                Move your applications and infrastructure to the cloud with minimal downtime and enhanced security. We choose the perfect platform for your needs.
                                            </p>
                                        </div>
                                        <ul>
                                            <li><a href="#">Chat</a></li>
                                            <li><a href="#">Models</a></li>
                                            <li><a href="#">Natural</a></li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Content</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single item -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Section 7 -->

    <!-- Start Section 8 -->
    <div class="faq-style-one-area accordion-secondary blurry-shape-right-bottom default-padding bg-gray"
        style="background-image: url(assets/img/shape/7.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="faq-style-one-info">
                        <h2 class="title split-text-right split-text-in-right">Frequently Asked Questions
                        </h2>
                        <a href="faq.html" class="btn btn-style-one btn-dark mt-10 wow fadeInUp"
                            data-wow-delay="100ms">All Questions <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="accordion-style-one-items fade-up-anim">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-style-one-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        How does Cozentus improve logistics operations?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Cozentus leverages AI, ML, and automation to streamline logistics operations, improve real-time visibility, optimize workflows, and reduce operational costs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-style-one-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Is Cozentus suitable for global logistics operations?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, Cozentus solutions are built to support scalable global logistics operations with real-time visibility, automation, seamless system integration, and efficient supply chain management across multiple regions and partners.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-style-one-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Do you offer support and maintenance services?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, we provide continuous support, maintenance, system monitoring, and regular enhancements to ensure smooth and reliable operations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-style-one-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                        aria-expanded="false" aria-controls="collapsefour">
                                        How can I get started with Cozentus?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="headingfour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            You can contact our team through the website to schedule a consultation and discuss your logistics requirements, or email us at supplychain@cozentus.com.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 8 -->

    <!-- Start Section 9 -->
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
            <div class="blog-style-two-box">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="blog-style-two fade-up-anim">
                            <div class="thumb zoom-thumb">
                                <a href="blog-single-with-sidebar.html"><img class="img-reveal"
                                        src="assets/img/blog/1.webp" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="blog-one-meta">
                                    <ul>
                                        <li>
                                            <a href="#">Technolgoy</a>
                                        </li>
                                        <li>
                                            06 December, 2025
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single-with-sidebar.html">Discovery incommode earnestly commanded
                                        if.</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-regular">
                                    Read more <img src="assets/img/icon/arrow-right-three.png"
                                        alt="Image Not Found">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="blog-style-two fade-up-anim">
                            <div class="thumb zoom-thumb">
                                <a href="blog-single-with-sidebar.html"><img class="img-reveal"
                                        src="assets/img/blog/2.webp" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="blog-one-meta">
                                    <ul>
                                        <li>
                                            <a href="#">Artificial</a>
                                        </li>
                                        <li>
                                            14 August, 2025
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single-with-sidebar.html">Expression acceptance imprudence
                                        particular.</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-regular">
                                    Read more <img src="assets/img/icon/arrow-right-three.png"
                                        alt="Image Not Found">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="blog-style-two fade-up-anim">
                            <div class="thumb zoom-thumb">
                                <a href="blog-single-with-sidebar.html"><img class="img-reveal"
                                        src="assets/img/blog/3.webp" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="blog-one-meta">
                                    <ul>
                                        <li>
                                            <a href="#">Integration</a>
                                        </li>
                                        <li>
                                            12 July, 2025
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single-with-sidebar.html">Considered imprudence of technical
                                        friendship.</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-regular">
                                    Read more <img src="assets/img/icon/arrow-right-three.png"
                                        alt="Image Not Found">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 9  -->
</div>