<div class="home-page">
    <?php if (!empty($banners)) { ?>
        <header class="main-header-area">
            <div class="main-banner-swiper-container">
                <div class="swiper main-banner-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($banners as $br) { ?>
                            <div class="swiper-slide">
                                <?php if (!empty($br['video_id'])) { ?>
                                    <div class="main-banner custom-you" style="pointer-events: none">
                                        <?php echo $br['video_id'] ?>
                                    <?php } else { ?>
                                        <div class="main-banner">
                                            <img src="<?= base_url('uploads/images/') . $br['image'] ?>" alt="<?= $br['alt_text'] ?>">
                                        <?php } ?>
                                        <div class="container">
                                            <div class="banner-content">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                                        <div class="banner-content-area text-end d-flex flex-column">
                                                            <h1>
                                                                <?= html_entity_decode($br['title']) ?>
                                                            </h1>
                                                            <p class="para mt-3" style="max-width: 100%;">
                                                                <?= $br['short_description'] ?>
                                                            </p>
                                                            <?php if (!empty($br['cta_btn']) && !empty($br['cta_link'])) { ?>
                                                                <div class="btn-flex1 mt-3">
                                                                    <a href="<?= urldecode($br['cta_link']) ?>" target="blank" class="main-btn">
                                                                        <span><?= $br['cta_btn'] ?> </span>
                                                                    </a>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var lazyVideos = [].slice.call(document.querySelectorAll("iframe.youtube-player"));

                            if ("IntersectionObserver" in window) {
                                let lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
                                    entries.forEach(function(video) {
                                        if (video.isIntersecting) {
                                            let iframe = video.target;
                                            iframe.src = iframe.dataset.src;
                                            lazyVideoObserver.unobserve(iframe);
                                        }
                                    });
                                });

                                lazyVideos.forEach(function(iframe) {
                                    lazyVideoObserver.observe(iframe);
                                });
                            } else {
                                // Fallback for browsers without IntersectionObserver support
                                lazyVideos.forEach(function(iframe) {
                                    iframe.src = iframe.dataset.src;
                                });
                            }
                        });
                    </script>
                    <div class="banner-pagination">
                        <div class="container">
                            <div class="main-banner-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
        </header>
    <?php } ?>

    <div class="container">
        <div class="menu-link">
            <ul>
                <li><a href="#who-we-are"><?= html_entity_decode($page_data[0]['sub_menu_title1']) ?></a></li>
                <li><a href="#what-do-we-offer"> <?= html_entity_decode($page_data[0]['sub_menu_title2']) ?></a></li>
                <li><a href="#our-approach">Our Approach</a></li>
                <li><a href="#why-choose-us"><?= html_entity_decode($page_data[0]['sub_menu_title4']) ?></a></li>
                <li><a href="#whom-do-we-serve"><?= html_entity_decode($page_data[0]['sub_menu_title3']) ?></a></li>
                <li><a href="#our-achievements">Our Achievements</a></li>

            </ul>
        </div>
    </div>

    <div class="container" id="who-we-are">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="we-built">
                        <h2 style="color:#19405d;"> <?= $page_data[0]['title'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="hm-tool-sec tool-main-sec more-info" style="overflow: hidden;">
        <div class="row">
            <div class="col-lg-6 pb-4" style="">
                <h2><?= $page_data[0]['description'] ?></h2>
                <?php if (!empty($page_data[0]['content'])) { ?>
                    <?= html_entity_decode($page_data[0]['content']) ?>
                <?php } ?>
                <a href="<?= urldecode($page_data[0]['cta_link']) ?>"><?= $page_data[0]['cta_btn'] ?></a>
            </div>
            <div class="col-lg-6 pb-4">
                <img loading="lazy" class="w-100 height_auto" src="<?= base_url('uploads/images/') . $page_data[0]['image'] ?>"
                    alt="<?= $page_data[0]['alt_text'] ?>" style="padding-right: 80px;">

                <!-- <div class=" we-built">
                <p>We build <b>innovative custom solution</b> for your <b>logistic business</b></p>
            </div> -->
            </div>
        </div>
    </section>

    <?php /*if (!empty($servicehomecard)) { ?>
        <section class="solution-sec sec" id="what-do-we-offer" style="background: #19405d;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                            <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                                <h2><?= html_entity_decode($page_data[0]['offerin_heading']) ?></h2>
                                <p class="paragraph"><?= html_entity_decode($page_data[0]['offerin_content']) ?></p>
                            </div>
                        </div>
                        <div class="swiper solution-swiper11 mt-50" data-aos="fade-up" data-aos-duration="1000">
                            <div class="swiper-wrapper">
                                <?php foreach ($servicehomecard as $ser) { ?>
                                    <div class="swiper-slide">
                                        <a href="<?= base_url('services/') . $ser['slug'] ?>" class="vtr-card-wrapper">
                                            <img src="<?= base_url('uploads/images/') . $ser['image'] ?>" alt="<?= $ser['alt_text'] ?>">
                                            <div class="con">
                                                <h3><?= $ser['card_heading'] ?></h3>
                                                <p class="para white"> <?= $ser['card_description'] ?></p>
                                            </div>
                                            <div class="read-more">
                                                <span>Read More</span>
                                                <img src="<?= base_url('assets/images/blue-arrow.svg') ?>"
                                                    alt="arrow">
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }*/ ?>

    <style>
        /* ----- ICON BOX WITH GLASS EFFECT ----- */
        .glass-icon-box {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 12px;
            padding: 1rem 1rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.25s ease, box-shadow 0.3s ease, background 0.2s;
            text-align: left;
            cursor: default;
            height: 300px;
        }

        /* interactive hover: subtle lift + stronger glass glow */
        .glass-icon-box:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 25px 40px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.35);
        }

        /* Icon wrapper with gradient + soft glow */
        .icon-wrapper {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.05) 100%);
            border-radius: 28px;
            margin-bottom: .6rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1), inset 0 1px 1px rgba(255, 255, 255, 0.2);
            transition: all 0.2s;
        }

        .glass-icon-box:hover .icon-wrapper {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.1) 100%);
            transform: scale(1.02);
        }

        .icon-wrapper i {
            font-size: 2.8rem;
            color: white;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        /* title style */
        .icon-box-title {
            font-size: 1rem;
            line-height: 1.5;
            font-weight: 600;
            letter-spacing: -0.3px;
            background: linear-gradient(120deg, #fff, #e0eaff);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            margin-bottom: 0.85rem;
        }

        /* description text with semi-transparent white */
        .icon-box-desc {
            font-size: 0.95rem;
            line-height: 1.5;
            letter-spacing: 0.3px;
            color: rgba(245, 245, 255, 0.85);
            font-weight: 400;
            min-height: 95px;
        }

        /* subtle tag / stats line */
        .box-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            padding-top: 1rem;
            margin-top: 0.4rem;
            font-size: 0.8rem;
            font-weight: 500;
            color: rgba(230, 240, 255, 0.7);
        }

        .footer-left i {
            font-size: 0.7rem;
            margin-right: 5px;
        }

        .footer-right {
            background: rgba(255, 255, 255, 0.1);
            padding: 0.2rem 0.8rem;
            border-radius: 40px;
            font-size: 0.7rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
        }

        /* alternative variant for special glass effect (optional different border) */
        @media (max-width: 680px) {
            .glass-grid {
                gap: 1.5rem;
            }

            .glass-icon-box {
                padding: 1.6rem 1.2rem;
            }

            .icon-wrapper {
                width: 70px;
                height: 70px;
                border-radius: 24px;
            }

            .icon-wrapper i {
                font-size: 2.4rem;
            }
        }
    </style>
    <?php if (!empty($servicehomecard)) { ?>
        <section class="solution-sec sec" id="what-do-we-offer" style="min-height: 100vh;
            background: linear-gradient(358deg, rgba(0, 0, 0, 1) 0%, rgba(66, 174, 180, 1) 92%);
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                            <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                                <h2><?= html_entity_decode($page_data[0]['offerin_heading']) ?></h2>
                                <p class="paragraph"><?= html_entity_decode($page_data[0]['offerin_content']) ?></p>
                            </div>
                        </div>
                        <div class="swiper solution-swiper11 mt-50" data-aos="fade-up" data-aos-duration="1000">
                            <div class="swiper-wrapper">
                                <?php foreach ($servicehomecard as $ser) { ?>
                                    <div class="swiper-slide">
                                        <div class="glass-icon-box">
                                            <div class="icon-wrapper">
                                                <img src="<?= base_url('uploads/images/') . $ser['image'] ?>" alt="<?= $ser['alt_text'] ?>"
                                                    style="width: 100%;height: 100%;object-fit: cover;border-radius: 12px;position: relative; z-index: 1;">
                                            </div>
                                            <h3 class="icon-box-title"><?= $ser['card_heading'] ?></h3>
                                            <p class="icon-box-desc">
                                                <?= $ser['card_description'] ?>
                                            </p>
                                            <div class="d-flex flex-row flex-lg-row justify-content-between align-items-center">
                                                <span class="footer-left" style="color:#fff!important">Read More</span>
                                                <a href="<?= base_url('services/') . $ser['slug'] ?>">
                                                    <i class="fas fa-long-arrow-right" style="color:#fff!important"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


    <section class="solution-sec sec" style="background:#fafafa" id="our-approach">
        <div class=" container testimonial">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center innovation txt-dark" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= html_entity_decode($innovation[0]['title']) ?></h2>
                        <p class="paragraph"><?= html_entity_decode($innovation[0]['short_description']) ?></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <style>
                        .innovation-img {
                            height: 70vh;
                            object-fit: contain;
                        }

                        @media (max-width: 768px) {
                            .innovation-img {
                                height: auto;
                                object-fit: fill;
                            }
                        }
                    </style>
                    <img loading="lazy" class="w-100 img-hover innovation-img"
                        src="<?= base_url('uploads/images/') . $innovation[0]['image'] ?>" alt="<?= $innovation[0]['alt_text'] ?>">

                </div>
            </div>

    </section>


    <!-- New Section start -->
    <section style="padding: 30px 0;background: 19405D;background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(66, 174, 180, 1) 92%);" id="why-choose-us">
        <div class="container new-container-fluid">
            <div class="row g-0">
                <!-- ── LEFT SIDE — Tab List ── -->
                <div class="col-lg-6 col-12">
                    <div class="sec-head">
                        <h2 style="color:#ffffff;margin-bottom: 20px;" data-aos="fade-up" data-aos-duration="1000">
                            Why should you choose Cozentus
                        </h2>
                    </div>
                    <!-- Tab List -->
                    <div class="coz-tab-list">
                        <?php $count = 0;
                        foreach ($homewhycoz as $wc) { ?>
                            <div class="coz-tab-item <?= $count == 0 ? 'active' : '' ?>" data-tab="<?= $count ?>"
                                data-aos="fade-up" data-aos-duration="1000">
                                <?= html_entity_decode($wc['title']) ?>
                            </div>
                        <?php $count++;
                        } ?>
                    </div>
                </div>
                <!-- ── RIGHT SIDE — Content Panel ── -->
                <div class="col-lg-6 col-12" style="position:relative; min-height:400px;">
                    <!-- Tab Panel 0 -->
                    <?php $count = 0;
                    foreach ($homewhycoz as $wc) { ?>
                        <div class="coz-tab-panel <?= $count == 0 ? 'active' : '' ?>" data-panel="<?= $count ?>">

                            <div class="panel-content">
                                <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <?= html_entity_decode($wc['title']) ?>
                                </h3>
                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <?= html_entity_decode($wc['short_description']) ?>
                                </p>
                                <?php if (!empty($wc['ctalink'])) { ?>
                                    <a href="<?= urldecode($wc['ctalink']) ?>" class="panel-learn-more">
                                        <span>Read More</span>
                                        <span class="panel-arrow">&#8594;</span>
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="panel-image" data-aos="fade-left" data-aos-duration="1000">
                                <img src="<?= base_url('uploads/images/') . $wc['image'] ?>" alt="<?php echo $wc['alt_text'] ?>">
                            </div>
                        </div>
                    <?php $count++;
                    } ?>


                </div>
                <!-- end right side -->
            </div>
        </div>
    </section>
    <!-- New Section start -->
    <section class="solution-sec sec pb-0" id="whom-do-we-serve" style="">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 industries-section">
                    <div class="sec-head industries" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $industries[0]['title'] ?></h2>
                        <p class="text-dark text-start"><?= $industries[0]['short_description'] ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <img loading="lazy" width="640" height="540" class="w-100 height_auto" src="<?= base_url('uploads/images/') . $industries[0]['image'] ?>" alt="<?= $industries[0]['alt_text'] ?>">
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            var swiper = new Swiper(".why-choose", {
                loop: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 1,
                paginationClickable: true,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination',
                },
                autoplay: {
                    enabled: true,
                    delay: 5000,
                    pauseOnMouseEnter: false,
                    disableOnInteraction: true,
                },
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1920: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    },
                    1028: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                }
            });
        });
    </script>
    <!-- Counter Section start -->
    <section class="solution-sec our-significant" style=" background: #F9F8F6;" id="our-achievements">
        <div class=" container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5">

                    <!-- Heading -->
                    <div class="sec-head  ps-2"
                        data-aos="fade-down" data-aos-duration="1000">
                        <h2 style="text-align: center;"><?= $oursignis[0]['title'] ?></h2>
                        <p style="text-align: center;"><?= $oursignis[0]['short_description'] ?></p>
                    </div>

                    <!-- Counters Row -->
                    <div class="row mt-5" id="counters-section">

                        <!-- Counter 1 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-4">
                            <div class="counter-card"
                                data-aos="fade-up" data-aos-duration="1000">
                                <?php
                                // Extract number and suffix e.g "21+" → num=21, suffix="+"
                                $val1   = html_entity_decode($oursignis[0]['significant_1']); //21+ Clients Served Globally
                                // ── Extract all 3 parts in one regex ──
                                preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val1, $m);
                                $number1  = trim($m[1] ?? '0');    // "20"
                                $symbol1  = trim($m[2] ?? '');     // "+"
                                $label1   = trim($m[3] ?? '');     // "Clients servers sucessfully"
                                // Get label (text after <br> or second line)
                                $parts1 = preg_split('/<br\s*\/?>/i', $val1);
                                $label1 = isset($parts1[1]) ? strip_tags($parts1[1]) : 'Clients Served Globally';
                                ?>
                                <div class="counter-number">
                                    <span class="counter-value" data-target="<?= $number1 ?>">0</span>
                                    <span class="counter-suffix"><?= $symbol1 ?></span>
                                </div>
                                <div class="counter-label"><?= $label1 ?></div>
                            </div>
                        </div>

                        <!-- Counter 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                            <div class="counter-card"
                                data-aos="fade-up" data-aos-duration="1200">
                                <?php
                                $val2   = html_entity_decode($oursignis[0]['significant_2']);
                                // ── Extract all 3 parts in one regex ──
                                preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val2, $m);
                                $number2  = trim($m[1] ?? '0');
                                $symbol2  = trim($m[2] ?? '');
                                $label2   = trim($m[3] ?? '');
                                $parts2 = preg_split('/<br\s*\/?>/i', $val2);
                                $label2 = isset($parts2[1]) ? strip_tags($parts2[1]) : 'Projects Executed';
                                ?>
                                <div class="counter-number">
                                    <span class="counter-value" data-target="<?= $number2 ?>">0</span>
                                    <span class="counter-suffix"><?= $symbol2 ?></span>
                                </div>
                                <div class="counter-label"><?= $label2 ?></div>
                            </div>
                        </div>

                        <!-- Counter 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                            <div class="counter-card"
                                data-aos="fade-up" data-aos-duration="1400">
                                <?php
                                $val3   = html_entity_decode($oursignis[0]['significant_3']);
                                // ── Extract all 3 parts in one regex ──
                                preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val3, $m);
                                $number3  = trim($m[1] ?? '0');
                                $symbol3  = trim($m[2] ?? '');
                                $label3   = trim($m[3] ?? '');
                                $parts3 = preg_split('/<br\s*\/?>/i', $val3);
                                $label3 = isset($parts3[1]) ? strip_tags($parts3[1]) : 'Repeat Customers';
                                ?>
                                <div class="counter-number">
                                    <span class="counter-value" data-target="<?= $number3 ?>">0</span>
                                    <span class="counter-suffix"><?= $symbol3 ?></span>
                                </div>
                                <div class="counter-label"><?= $label3 ?></div>
                            </div>
                        </div>

                        <!-- Counter 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                            <div class="counter-card"
                                data-aos="fade-up" data-aos-duration="1600">
                                <?php
                                $val4   = html_entity_decode($oursignis[0]['significant_4']);
                                // ── Extract all 3 parts in one regex ──
                                preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val4, $m);
                                $number4  = trim($m[1] ?? '0');
                                $symbol4  = trim($m[2] ?? '');
                                $label4   = trim($m[3] ?? '');
                                $parts4 = preg_split('/<br\s*\/?>/i', $val4);
                                $label4 = isset($parts4[1]) ? strip_tags($parts4[1]) : 'Grew by In last 6 years';
                                ?>
                                <div class="counter-number">
                                    <span class="counter-value" data-target="<?= $number4 ?>">0</span>
                                    <span class="counter-suffix"><?= $symbol4 ?></span>
                                </div>
                                <div class="counter-label"><?= $label4 ?></div>
                            </div>
                        </div>

                        <!-- Counter 5 (optional) -->
                        <?php if (!empty(trim($oursignis[0]['significant_5']))) {
                            $val5   = html_entity_decode($oursignis[0]['significant_5']);
                            // ── Extract all 3 parts in one regex ──
                            preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val5, $m);
                            $number5  = trim($m[1] ?? '0');
                            $symbol5  = trim($m[2] ?? '');
                            $label5   = trim($m[3] ?? '');
                            $parts5 = preg_split('/<br\s*\/?>/i', $val5);
                            $label5 = isset($parts5[1]) ? strip_tags($parts5[1]) : '';
                        ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="counter-card"
                                    data-aos="fade-up" data-aos-duration="1800">
                                    <div class="counter-number">
                                        <span class="counter-value" data-target="<?= $number5 ?>">0</span>
                                        <span class="counter-suffix"><?= $symbol5 ?></span>
                                    </div>
                                    <div class="counter-label"><?= $label5 ?></div>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- Counter 6 (optional) -->
                        <?php if (!empty(trim($oursignis[0]['significant_6']))) {
                            $val6   = html_entity_decode($oursignis[0]['significant_6']);
                            // ── Extract all 3 parts in one regex ──
                            preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val6, $m);
                            $number6  = trim($m[1] ?? '0');
                            $symbol6  = trim($m[2] ?? '');
                            $label6   = trim($m[3] ?? '');
                            $parts6 = preg_split('/<br\s*\/?>/i', $val6);
                            $label6 = isset($parts6[1]) ? strip_tags($parts6[1]) : '';
                        ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="counter-card"
                                    data-aos="fade-up" data-aos-duration="2000">
                                    <div class="counter-number">
                                        <span class="counter-value" data-target="<?= $number6 ?>">0</span>
                                        <span class="counter-suffix"><?= $symbol6 ?></span>
                                    </div>
                                    <div class="counter-label"><?= $label6 ?></div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->
    <section class="solution-sec let-get" style="">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                <div class="sec-head center text-start">

                    <h2><?= $homecta[0]['title'] ?></h2>
                    <p><?= $homecta[0]['short_description'] ?></p>

                    <?php if (!empty($homecta[0]['cta_link']) && !empty($homecta[0]['cta_btn'])) { ?>
                        <a href="<?= urldecode($homecta[0]['cta_link']) ?>"><?= $homecta[0]['cta_btn'] ?></a>
                    <?php } ?>
                    <?php if (!empty($homecta[0]['cta_link2']) && !empty($homecta[0]['cta_btn2'])) { ?>
                        <a href="<?= urldecode($homecta[0]['cta_link2']) ?>"><?= $homecta[0]['cta_btn2'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 position-relative" style="padding: 10px 80px 10px 10px;">
                <img loading=" lazy" width="625" height="300" src="<?= base_url('uploads/images/') . $homecta[0]['image'] ?>"
                    class="w-100" alt="<?= $homecta[0]['alt_text'] ?>">
                <!-- <iframe src="https://www.youtube.com/embed/ZuIOtADuNrk?autoplay=1&amp;mute=1&amp;rel=0&amp;loop=1&amp;playlist=ZuIOtADuNrk&amp; controls=0&amp;modestbranding=1&amp;showinfo=0" loading="lazy" allowtransparency="true" allow="autoplay; encrypted-media" allowfullscreen="" data-lf-form-tracking-inspected-xbp1oaempnqaedvj="true" data-lf-yt-playback-inspected-xbp1oaempnqaedvj="true" data-lf-vimeo-playback-inspected-xbp1oaempnqaedvj="true" width="100%" height="260"></iframe> -->


            </div>
        </div>
    </section>



</div>



<?php //include_once 'common/blogs.php';
?>
<script>
    $(document).ready(function() {
        <?php if (!empty($banners_title)) {
        ?>var menu = <?php echo json_encode($banners_title); ?>;
        sliderDelay = 3500;
        var swiper = new Swiper(".main-banner-swiper", {
            pagination: {
                el: ".main-banner-swiper-pagination",
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + ' banner-pagi-wrap" style="--anim: progress ' +
                        sliderDelay / 1000 + 's linear forwards"><p>' + (menu[index]) + '</p></span>';
                },
            },
            autoplay: {
                delay: sliderDelay,
                disableOnInteraction: false
            }
        });
    <?php } ?>
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".testimonial .indicators li").click(function() {
            var i = $(this).index();
            var targetElement = $(".testimonial .tabs li");
            targetElement.eq(i).addClass('active');
            targetElement.not(targetElement[i]).removeClass('active');
        });
        $(".testimonial .tabs li").click(function() {
            var targetElement = $(".testimonial .tabs li");
            targetElement.addClass('active');
            targetElement.not($(this)).removeClass('active');
        });
    });
    $(document).ready(function() {
        $(".slider .swiper-pagination span").each(function(i) {
            $(this).text(i + 1).prepend("0");
        });
    });
</script>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            const offset = 100; // Adjust this value as needed
            const bodyRect = document.body.getBoundingClientRect().top;
            const elementRect = target.getBoundingClientRect().top;
            const elementPosition = elementRect - bodyRect;
            const offsetPosition = elementPosition - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        });
    });
</script>