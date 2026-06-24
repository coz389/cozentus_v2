<div id="smooth-content" class="parent-sevice-domain-capability">
    <style>
        /* ═══════════════════════════════════════════════════════════
        Section-2  "Your Journey with Cozentus"  (parent-services)
        Self-contained, namespaced under .cz-journey-* so it never
        touches the theme CSS. Adapted from the standalone design.
        ═══════════════════════════════════════════════════════════ */

        .cz-journey-section {
            background: #ffffff;
            overflow: hidden;
        }

        .cz-journey-wrapper {
            max-width: 1400px;
            margin: auto;
            position: relative;
        }

        .cz-journey-path {
            position: absolute;
            top: 90px;
            left: 120px;
            right: 120px;
            bottom: 90px;
            border: 18px solid #e2e1e1;
            border-radius: 120px;
            box-shadow:
                inset 0 4px 8px rgba(0, 0, 0, .08),
                0 5px 10px rgba(0, 0, 0, .08);
            z-index: 1;
        }

        .cz-journey-center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 3;
        }

        .cz-journey-center h1 {
            font-size: 55px;
            line-height: 0.95;
            color: #031945;
            font-weight: 800;
        }

        .cz-journey-center h2 {
            font-weight: 500;
            font-size: 55px;
            margin-bottom: 25px;
        }

        .cz-journey-center p {
            margin-top: 25px;
            font-size: 22px;
            color: #444;
        }

        .cz-journey-line {
            width: 70px;
            height: 8px;
            background: #0d6efd;
            margin: 20px auto 0;
            border-radius: 50px;
        }

        .cz-journey-steps {
            position: relative;
            z-index: 5;
            min-height: 850px;
            pointer-events: none;
            /* let clicks pass through to .cz-journey-center below */
        }

        .cz-journey-step {
            position: absolute;
            display: flex;
            align-items: center;
            pointer-events: auto;
            /* re-enable for the actual cards */
        }

        .cz-journey-card {
            width: 340px;
            background: white;
            border-radius: 25px;
            padding: 30px 25px 28px 70px;
            box-shadow:
                0 10px 20px rgba(0, 0, 0, .10),
                inset 0 2px 0 rgba(255, 255, 255, .7),
                9px 0 0 -2px var(--cz-accent),
                16px 10px 26px -8px var(--cz-accent);
            position: relative;
        }

        .cz-journey-card h3 {
            font-size: 17px;
            color: #11192d;
            margin-bottom: 14px;
        }

        .cz-journey-card p {
            color: #333;
            font-size: 15px;
            line-height: 1.5;
            margin: 0;
        }

        .cz-journey-icon {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            position: absolute;
            left: -65px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 46px;
            color: white;
            box-shadow:
                inset 0 4px 10px rgba(255, 255, 255, .25),
                0 10px 18px rgba(0, 0, 0, .18);
        }

        .cz-journey-number {
            position: absolute;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: 700;
            top: -14px;
            right: -14px;
            border: 4px solid #efefef;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .2);
        }

        /* directional chevron arrows along the path */
        .cz-journey-arrow {
            position: absolute;
            width: 18px;
            height: 18px;
            border-top: 7px solid currentColor;
            border-right: 7px solid currentColor;
            z-index: 6;
        }

        .cz-dir-right {
            right: -40px;
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
        }

        .cz-dir-down {
            bottom: -50px;
            left: 86%;
            transform: translateX(-50%) rotate(135deg);
        }

        .cz-dir-left {
            left: -98px;
            top: 53%;
            transform: translateY(-50%) rotate(225deg);
        }

        .cz-dir-up {
            top: -44px;
            left: 50%;
            transform: translateX(-50%) rotate(-45deg);
        }

        .cz-blue .cz-journey-arrow {
            color: #2f73ff;
            right: -36px;
        }

        .cz-teal .cz-journey-arrow {
            color: #18c2bd;
        }

        .cz-orange .cz-journey-arrow {
            color: #ff8718;
            bottom: -35px;
            left: 67%;
        }

        .cz-purple .cz-journey-arrow {
            color: #8b47ff;
            bottom: -35px;
            left: 67%;
        }

        .cz-green .cz-journey-arrow {
            color: #7bc11b;
        }

        .cz-yellow .cz-journey-arrow {
            color: #f5b400;
            top: -30px;
            left: 17%;
        }

        /* Accent colors */
        .cz-blue {
            --cz-accent: #2f73ff;
        }

        .cz-teal {
            --cz-accent: #18c2bd;
        }

        .cz-orange {
            --cz-accent: #ff8718;
        }

        .cz-purple {
            --cz-accent: #8b47ff;
        }

        .cz-green {
            --cz-accent: #7bc11b;
        }

        .cz-yellow {
            --cz-accent: #f5b400;
        }

        .cz-blue .cz-journey-icon,
        .cz-blue .cz-journey-number {
            background: #2f73ff;
        }

        .cz-teal .cz-journey-icon,
        .cz-teal .cz-journey-number {
            background: #18c2bd;
        }

        .cz-orange .cz-journey-icon,
        .cz-orange .cz-journey-number {
            background: #ff8718;
        }

        .cz-purple .cz-journey-icon,
        .cz-purple .cz-journey-number {
            background: #8b47ff;
        }

        .cz-green .cz-journey-icon,
        .cz-green .cz-journey-number {
            background: #7bc11b;
        }

        .cz-yellow .cz-journey-icon,
        .cz-yellow .cz-journey-number {
            background: #f5b400;
        }

        /* Positioning around the loop */
        .cz-s1 {
            top: 40px;
            left: 70px;
        }

        .cz-s2 {
            top: 40px;
            left: 545px;
        }

        .cz-s3 {
            top: 40px;
            right: 15px;
        }

        .cz-s4 {
            top: 380px;
            right: 15px;
        }

        .cz-s5 {
            bottom: 60px;
            right: 200px;
        }

        .cz-s6 {
            bottom: 60px;
            left: 320px;
        }

        .cz-s7 {
            top: 380px;
            left: 70px;
        }

        /* ── Responsive: collapse the circular loop into a vertical timeline ── */
        @media (max-width: 1200px) {
            .cz-journey-wrapper {
                max-width: 620px;
            }

            .cz-journey-path {
                display: none;
            }

            .cz-journey-center {
                position: static;
                transform: none;
                width: 100%;
                margin: 0 auto 55px;
            }

            .cz-journey-center h1 {
                font-size: clamp(32px, 7vw, 56px);
            }

            .cz-journey-center p {
                font-size: 18px;
            }

            .cz-journey-steps {
                position: relative;
                min-height: auto;
                padding-left: 58px;
            }

            .cz-journey-steps::before {
                content: "";
                position: absolute;
                left: 55px;
                top: 8px;
                bottom: 8px;
                width: 4px;
                background: #dcdcdc;
                border-radius: 4px;
                z-index: 0;
            }

            .cz-journey-step {
                position: static !important;
                top: auto;
                left: auto;
                right: auto;
                bottom: auto;
                display: block;
                margin: 0 0 45px;
            }

            .cz-journey-card {
                width: 95%;
                padding: 20px 20px 20px 65px;
            }

            .cz-journey-icon {
                width: 92px;
                height: 92px;
                font-size: 38px;
                left: -43px;
            }

            .cz-journey-number {
                width: 42px;
                height: 42px;
                font-size: 15px;
            }

            .cz-journey-arrow {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .cz-journey-center h1 {
                font-size: 30px;
            }

            .cz-journey-card h3 {
                font-size: 18px;
            }

            .cz-journey-card p {
                font-size: 14.5px;
            }

            .cz-journey-icon {
                width: 78px;
                height: 78px;
                font-size: 32px;
                left: -38px;
            }

            .cz-journey-number {
                width: 38px;
                height: 38px;
                font-size: 14px;
            }

            .cz-journey-steps {
                padding-left: 48px;
            }

            .cz-journey-steps::before {
                left: 46px;
            }

            .cz-journey-card {
                padding: 24px 18px 22px 58px;
            }
        }

        /* ── Section-2 Journey: tighten top padding & fit within one screen ──
        (override-only block — keeps everything above intact) */
        .cz-journey-section.default-padding {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        @media (min-width: 1201px) {

            /* shrink the loop so the whole section fits a single viewport */
            .cz-journey-steps {
                min-height: 660px;
            }

            .cz-journey-path {
                top: 70px;
                bottom: 70px;
                border-radius: 100px;
            }

            .cz-journey-center h1 {
                font-size: 55px;
            }

            .cz-journey-center p {
                margin-top: 16px;
                font-size: 19px;
            }

            /* compress the vertical gap between the top and bottom rows */
            .cz-s1 {
                top: 10px;
            }

            .cz-s2 {
                top: 8px;
            }

            .cz-s3 {
                top: 20px;
            }

            .cz-s4 {
                top: 240px;
            }

            .cz-s7 {
                top: 240px;
            }

            .cz-s5 {
                bottom: 12px;
            }

            .cz-s6 {
                bottom: 5px;
            }
        }
    </style>
    <!-- Start Section 1 Banner -->
    <?php if (!empty($pserv['about_heading'])) { ?>
        <div class="banner-style-three-area overflow-hidden bg-gray bg-cover" style="background: url(<?= base_url('uploads/images/') . $pserv['inner_banner_image'] ?>);">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-7 pr-60 pr-md-15 pr-xs-15">
                        <div class="banner-style-three-info">
                            <h2 class="wow fadeInUp"><?= $pserv['inner_banner_heading'] ?></h2>
                            <!-- <h4 class="fade-up-anim"><?= $pserv['inner_banner_heading'] ?></h4> -->
                            <p class="fade-up-anim">
                                <?= $pserv['inner_banner_description'] ?>
                            </p>
                            <div class="button mt-30 fade-up-anim">
                                <a href="contact-us.html" class="btn btn-style-one light">Book a Demo <i class="fas fa-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="chat-bot-thumb text-center">
                            <div class="illustration">
                                <img class="wow fadeInUp" data-wow-delay="300ms" src="<?= base_url('uploads/images/') . $pserv['card_image'] ?> " alt="<?= $pserv['card_alt_text'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 1 -->


    <!-- Section-2 Start Our Jounney
         ============================================= -->
    <?php if ($this->uri->segment(1) == "services") { ?>
        <div class="cz-journey-section default-padding">
            <div class="cz-journey-wrapper">

                <div class="cz-journey-path"></div>

                <div class="cz-journey-center">
                    <h2>Your Journey with Cozentus</h2>
                    <div class="cz-journey-line"></div>
                    <p>Simple steps. Powerful outcomes.</p>
                </div>

                <div class="cz-journey-steps">

                    <div class="cz-journey-step cz-s1 cz-blue">
                        <div class="cz-journey-card">
                            <div class="cz-journey-icon"><i class="fas fa-comments"></i>
                                <div class="cz-journey-number">01</div>
                            </div>
                            <h3>Discover &amp; Connect</h3>
                            <p>Get in touch with us and explore how we can help.</p>
                        </div>
                        <i class="cz-journey-arrow cz-dir-right"></i>
                    </div>

                    <div class="cz-journey-step cz-s2 cz-teal">
                        <div class="cz-journey-card">
                            <div class="cz-journey-icon"><i class="fas fa-search"></i>
                                <div class="cz-journey-number">02</div>
                            </div>
                            <h3>Understand Your Needs</h3>
                            <p>We understand your operations, challenges, and goals.</p>
                        </div>
                        <i class="cz-journey-arrow cz-dir-right"></i>
                    </div>

                    <div class="cz-journey-step cz-s3 cz-orange">
                        <div class="cz-journey-card">
                            <div class="cz-journey-icon"><i class="fas fa-drafting-compass"></i>
                                <div class="cz-journey-number">03</div>
                            </div>
                            <h3>Solution Blueprint</h3>
                            <p>A clear plan tailored to your business and requirements.</p>
                        </div>
                        <i class="cz-journey-arrow cz-dir-down"></i>
                    </div>

                    <div class="cz-journey-step cz-s4 cz-purple">
                        <div class="cz-journey-card">
                            <div class="cz-journey-icon"><i class="fas fa-cogs"></i>
                                <div class="cz-journey-number">04</div>
                            </div>
                            <h3>Build, Integrate &amp; Automate</h3>
                            <p>Custom development, AI solutions, seamless integrations, and intelligent automation.</p>
                        </div>
                        <i class="cz-journey-arrow cz-dir-down"></i>
                    </div>

                    <div class="cz-journey-step cz-s5 cz-blue">
                        <div class="cz-journey-card">
                            <div class="cz-journey-icon"><i class="fas fa-rocket"></i>
                                <div class="cz-journey-number">05</div>
                            </div>
                            <h3>Go Live &amp; Support</h3>
                            <p>Smooth launch with full support and quick team adoption.</p>
                        </div>
                        <i class="cz-journey-arrow cz-dir-left"></i>
                    </div>

                    <div class="cz-journey-step cz-s6 cz-green">
                        <div class="cz-journey-card">
                            <div class="cz-journey-icon"><i class="fas fa-chart-line"></i>
                                <div class="cz-journey-number">06</div>
                            </div>
                            <h3>Optimize &amp; Scale</h3>
                            <p>Continuous improvements to performance, efficiency, and growth.</p>
                        </div>
                        <i class="cz-journey-arrow cz-dir-left"></i>
                    </div>

                    <div class="cz-journey-step cz-s7 cz-yellow">
                        <div class="cz-journey-card">
                            <div class="cz-journey-icon"><i class="fas fa-handshake"></i>
                                <div class="cz-journey-number">07</div>
                            </div>
                            <h3>Long-Term Partnership</h3>
                            <p>Ongoing innovation, insights, and evolving technology to drive your success.</p>
                        </div>
                        <i class="cz-journey-arrow cz-dir-up"></i>
                    </div>

                </div>

            </div>
        </div>
    <?php } else if ($this->uri->segment(1) == "domain-capabilities") { ?>

    <?php } ?>
    <!-- End Our Jounney -->




    <!-- Start Section 2 -->
    <?php /* if (!empty($pserv['advantage_heading'])) { ?>
        <div class="about-style-three-area default-padding bg-gray bg-cover" style="background: url(<?= base_url('assets/img/shape/banner-16.jpg') ?>);">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <h2 class="title split-text-right split-text-in-right"><?= html_entity_decode($pserv['advantage_heading']) ?></h2>
                        <p>
                            <?= html_entity_decode($pserv['advantage_short_description']) ?>
                        </p>
                        <!-- <a class="btn btn-style-one" href="#">Download Brochure <i class="fas fa-arrow-right"></i></a> -->
                    </div>

                    <div class="col-lg-6">
                        <div class="about-style-three-thumb">
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
    <?php }*/ ?>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <?php if (!empty($pserv['tailored_json'])) { ?>
        <div class="project-style-one-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['tailored_heading'] ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="service-style-one-items fade-up-anim">
                    <div class="row gutter-zero">
                        <!-- Single Item -->
                        <?php
                        $count = 0;
                        foreach ($tailored as $wc) {
                            $count++;
                        ?>
                            <div class="col-lg-4 col-md-6 service-style-one-single">
                                <div class="service-style-one-item">
                                    <div class="icon">
                                        <img src="<?= base_url('uploads/images/') . $wc['image'] ?>" alt="<?= $ser['alt_text'] ?>">
                                    </div>
                                    <h5><a href="<?= urldecode($wc['ctalink']) ?>"><?= html_entity_decode($wc['heading']) ?></a></h5>
                                    <p>
                                        <?= html_entity_decode($wc['description']) ?>
                                    </p>
                                    <?php if (!empty($wc['ctalink'])) { ?>
                                        <a style="font-size:12px;margin-top:15px;" href="<?= urldecode($wc['ctalink']) ?>" class="btn-regular">
                                            Read more <i class="fas fa-arrow-right"></i>
                                        </a>

                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <div class="process-style-two-area overflow-hidden bg-cover default-padding bg-dark text-light" style="background-image: url(assets/img/shape/banner-20.jpg);">
        <div class="container">
            <div class="site-heading">
                <div class="row align-center">
                    <div class="col-lg-12">
                        <h2 class="title split-text-right split-text-in-right"> <?= $pserv['transformation_heading'] ?></h2>
                        <p>
                            <?= $pserv['transformation_short_description'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="process-style-two-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>01</span>
                            <h4>Fixed-Price Project</h4>
                            <p>
                                <strong>Best when:</strong> the scope is clear and cost certainty matters.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>02</span>
                            <h4>Dedicated Team</h4>
                            <p>
                                <strong>Best when:</strong> you want a team that owns your roadmap.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>03</span>
                            <h4>Staff Augmentation </h4>
                            <p>
                                <strong>Best when:</strong> you need specific skills, fast.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>04</span>
                            <h4>Build-Operate-Transfer</h4>
                            <p>
                                <strong>Best when:</strong> you want it built now, owned later.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>
            </div>
            <!-- Button -->
            <div class="row">
                <div class="col-lg-12 text-left mt-50">
                    <a class="btn btn-style-one light" href="contact-us.html">Let's Talk <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 4 -->

    <!-- Start Section 5 Our Technology Stack-->
    <?php if (!empty($clients)) {
        $half = (int) ceil(count($clients) / 2);
        $clients_first  = array_slice($clients, 0, $half);
        $clients_second = array_slice($clients, $half);

    ?>
        <div class="testimonial-style-four-area default-padding overflow-hidden">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right">Our Technology Stack</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-style-four-left-carousel swiper ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Start Team Item -->
                    <?php foreach ($clients_first as $ins) { ?>
                        <div class="swiper-slide">
                            <div class="testimonial-style-four-item">
                                <div class="thumb">
                                    <img src="<?= base_url('uploads/images/') . $ins['image'] ?>" alt="Image Not Found">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Team Item -->
                </div>
            </div>
            <div class="testimonial-style-four-left-carousel2 swiper pt-5">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Start Team Item -->
                    <?php foreach ($clients_second as $ins2) { ?>
                        <div class="swiper-slide">
                            <div class="testimonial-style-four-item">
                                <div class="thumb">
                                    <img src="<?= base_url('uploads/images/') . $ins2['image'] ?>" alt="Image Not Found">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Team Item -->
                </div>
            </div>




        </div>
    <?php } ?>
    <!-- End Section 5 -->

    <!-- Start Section 6 Faq -->
    <?php if (!empty($pserv['heading_faq'])) { ?>
        <div class="faq-style-one-area accordion-secondary blurry-shape-right-bottom default-padding bg-gray"
            style="background-image: url(assets/img/shape/7.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-style-one-info">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['heading_faq'] ?></h2>
                            <a href="<?= base_url('book-free-consultation') ?>" class="btn btn-style-one btn-dark mt-10 wow fadeInUp"
                                data-wow-delay="100ms">Book a Demo <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="accordion-style-one-items fade-up-anim">
                            <div class="accordion" id="faqAccordion1234">
                                <?php $faqArr = json_decode($pserv['card_json_faq'], true);
                                $count = 0;
                                foreach ($faqArr as $fq) {
                                    $count++;
                                ?>
                                    <div class="accordion-style-one-item">
                                        <h2 class="accordion-header" id="heading1234<?= $count ?>">
                                            <button class="accordion-button <?= $count == 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne1234<?= $count ?>" aria-expanded="<?= $count == 1 ? true : false ?>"
                                                aria-controls="collapseOne1234<?= $count ?>">
                                                <?= $fq['heading'] ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne1234<?= $count ?>" class="accordion-collapse collapse <?= $count == 1 ? 'show' : '' ?>"
                                            aria-labelledby="heading1234<?= $count ?>" data-bs-parent="#faqAccordion1234">
                                            <div class="accordion-body">
                                                <p>
                                                    <?= $fq['description'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 6 Faq -->

    <!-- Start Section 7 Blog -->
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
        <div class="home-blog-area default-padding-2">
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
                <div class="blog-style-two-box pt-3 pb-3">
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
    <!-- End Section 1 Blog  -->

    <!-- Call to Action
    ============================================= -->
    <!--<div class="home-blog-two-area default-padding-2">
        <div class="container">
            <div class="blog-style-two-box bg-dark" styles="background-image: url(<?= base_url('assets/img/shape/10.png') ?>); background-size: cover;">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-box text-center fade-up-anim">
                            <h2 class="cta-title mb-20">Ready to Transform Your Supply Chain?</h2>
                            <p class="cta-description mb-30">
                                Let's discuss how our AI-powered solutions can help you optimize operations and drive measurable results. Our team is ready to understand your unique challenges.
                            </p>
                            <div class="cta-buttons">
                                <a class="btn btn-style-one btn-border" href="contact-us.html">
                                    Book a Meeting <i class="fas fa-arrow-right"></i>
                                </a>
                                <a class="btn btn-style-one ml-20" href="contact-us.html">
                                    Send Message <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- End Call to Action -->
</div>