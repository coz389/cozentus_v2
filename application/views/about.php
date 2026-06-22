<div id="smooth-content">
    <style>
        .banner-style-three-info h2 strong,
        .cz-our-story h2 {
            font-size: 55px !important;
        }

        .cz-story-card:hover {
            transform: translateY(0px) !important;
            box-shadow: rgba(14, 48, 92, 0.12) 0px 25px 75px;
        }

        .team-style-two-item .thumb {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            height: 400px;
        }

        .team-style-two-item .thumb img {
            height: 100%;
            object-fit: contain;
        }

        /** Teams Slider CSS */
        /* ── Thumb container must be relative ── */
        .team-style-two-item .thumb {
            position: relative;
            overflow: hidden;
        }

        .team-style-two-item .thumb img {
            width: 100%;
            display: block;
            transition: transform 0.4s ease;
        }

        /* ── Text overlay ── */
        .team-style-two-item .thumb .text-overlay {
            position: absolute;
            bottom: -100%;
            /* hidden below by default */
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.82) 0%,
                    rgba(0, 0, 0, 0.45) 60%,
                    transparent 100%);
            display: flex;
            align-items: flex-end;
            padding: 15px 38px 15px 20px;
            transition: bottom 0.4s ease;
            z-index: 2;
        }

        .team-style-two-item .thumb .text-overlay p {
            color: #ffffff;
            font-size: 13.5px;
            line-height: 1.6;
            margin: 0;
            display: -webkit-box;
            -webkit-line-clamp: 12;
            /* max 4 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* ── Slide up on hover ── */
        .team-style-two-item:hover .thumb .text-overlay {
            bottom: 0;
        }

        /* ── Subtle zoom on image ── */
        .team-style-two-item:hover .thumb img {
            transform: scale(1.05);
        }

        /* ── Keep social overlay above text overlay ── */
        .team-style-two-item .thumb .social-overlay {
            z-index: 3;
        }

        /** Teams Slider CSS */

        @media (min-width: 1600px) {
            .banner-style-three-area {
                height: 75vh !important;
                padding-top: 50px;
            }
        }

        @media (min-width: 1024px) {
            .banner-style-three-area {
                height: 75vh;
                padding-top: 50px;
            }
        }
    </style>
    <!-- Start Banner Area 
    ============================================= -->
    <div class="banner-style-three-area overflow-hidden bg-gray bg-cover" style="background: url(<?= base_url('assets/img/about/BG.png') ?>);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 pr-60 pr-md-15 pr-xs-15">
                    <div class="banner-style-three-info">
                        <h2 class="wow fadeInUp" style="color: #ffffff;">We build supply chains that <strong>actually work</strong></h2>
                        <p class="fade-up-anim" style="color: #ffffff;">
                            Not a platform. Not a reseller. A team of logistics practitioners and engineers who build custom, AI-powered software - software you own, built around the way you operate.
                        </p>
                        <div class="button mt-30 fade-up-anim">
                            <a href="<?= base_url('book-free-consultation') ?>" class="btn btn-style-one light">Book a Demo <i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="chat-bot-thumb text-center">

                        <div class="illustration">
                            <img class="wow fadeInUp" data-wow-delay="300ms" src="<?= base_url('assets/img/about/about-banner.png') ?>" alt="Image Not Found">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End banner -->
    <!-- ═══════════════════════════════════════════
            Section 2: Our Story
    ═══════════════════════════════════════════ -->
    <div class="cz-our-story default-padding" id="our-story">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="cz-section-heading">
                        <h2 class="cz-main-title text-dark">Where Logistics Knowledge Meets Engineering</h2>
                        <p class="cz-desc-wide">With more than two decades spent building custom technology for supply chain logistics, the founders of Cozentus bring a depth of domain expertise few in the industry can match. Backed by a seasoned leadership team and a workforce of experienced technical and functional specialists, we partner with major logistics and supply chain organizations as an extension of their own teams, building and optimizing the systems that run their operations. Through our in-house innovation hub and adaptable engagement models, we deliver with the speed, quality and precision that complex logistics demands.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="cz-story-card cz-fade-in cz-fade-in-delay-1 text-center">
                        <div class="cz-story-icon-box">
                            <div class="cz-story-icon-inner">
                                <img src="<?= base_url('assets/img/about/pride.png') ?>" alt="Image Not Found">
                            </div>
                        </div>
                        <h4>Pride</h4>
                        <p>We hold ourselves to a standard higher than the brief. Every build reflects us.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="cz-story-card cz-fade-in cz-fade-in-delay-2 text-center">
                        <div class="cz-story-icon-box">
                            <div class="cz-story-icon-inner">
                                <img src="<?= base_url('assets/img/about/commintment.png') ?>" alt="Image Not Found">
                            </div>
                        </div>
                        <h4>Commitment</h4>
                        <p>We don't walk away when it gets hard. We push until it works.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="cz-story-card cz-fade-in cz-fade-in-delay-3 text-center">
                        <div class="cz-story-icon-box">
                            <div class="cz-story-icon-inner">
                                <img src="<?= base_url('assets/img/about/quality.png') ?>" alt="Image Not Found">
                            </div>
                        </div>
                        <h4>Quality</h4>
                        <p>Delivered fast doesn't mean delivered loose. We don't trade one for the other.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="cz-story-card cz-fade-in text-center">
                        <div class="cz-story-icon-box">
                            <div class="cz-story-icon-inner">
                                <img src="<?= base_url('assets/img/about/transparency.png') ?>" alt="Image Not Found">
                            </div>
                        </div>
                        <h4>Transparency</h4>
                        <p>You know where things stand. Always. No surprises, no spin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Story -->

    <!-- Start Projects 
    ============================================= -->
    <div class="project-style-two-area default-padding">

        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <!-- <div class="heading-style-two">
                        <h1 class="text-transform-up " style="font-size: 100px;">Values That <strong>Power Our Work</strong></h1>
                    </div> -->
                    <div class="project-style-two-items">
                        <!-- Single Item -->
                        <div class="project-style-two-item">
                            <img src="<?= base_url('assets/img/about/Mission-1.jpg') ?>" alt="Mission">
                            <div class="info bg-dark text-light" style="background-image: url(<?= base_url('assets/img/shape/10.png') ?>);">
                                <div class="top">

                                    <h2 style="font-size: 60px;">Mission</h2>
                                    <p class="split-text-right split-text-in-right" style="perspective: 400px; font-size: 22px;">To be the most trusted AI-powered technology partner for the global logistics industry.</p>

                                </div>
                                <div class="bottom">
                                    <ul class="project-tags mb-30">
                                        <li>Trusted Partner</li>
                                        <li>AI Logistics</li>
                                        <li>Reliability</li>
                                        <li>Global Supply Chain</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="project-style-two-item">
                            <img src="<?= base_url('assets/img/about/Vission-1.jpg') ?>" alt="Vission">
                            <div class="info bg-dark text-light" style="background-image: url(<?= base_url('assets/img/shape/10.png') ?>);">
                                <div class="top">

                                    <h2 style="font-size: 60px;">Vision</h2>
                                    <p class="split-text-right split-text-in-right" style="perspective: 400px; font-size: 22px;">We combine logistics expertise, intelligent technology, and AI to deliver tailored solutions that create measurable impact for our clients.</p>
                                </div>
                                <div class="bottom">
                                    <ul class="project-tags mb-30">
                                        <li>Logistics Innovation</li>
                                        <li>Intelligent Automation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="project-style-two-item">
                            <img src="<?= base_url('assets/img/about/Value-1.jpg') ?>" alt="Values">
                            <div class="info bg-dark text-light" style="background-image: url(<?= base_url('assets/img/shape/10.png') ?>);">
                                <div class="top">
                                    <h2 style="font-size: 60px;">Values</h2>
                                    <p class="split-text-right split-text-in-right" style="perspective: 400px; font-size: 22px;">Pride, Commitment, Quality, Transparency</p>
                                </div>
                                <div class="bottom">
                                    <ul class="project-tags mb-30">
                                        <li>Engineering Quality</li>
                                        <li>Accountability</li>
                                        <li>Craftsmanship</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project -->


    <!-- Start Services 
    ============================================= -->
    <div class="services-style-two-area default-padding bg-gray blurry-shape-right-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">

                        <h2 class="title split-text-right split-text-in-right">What Sets Cozentus Apart</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="services-style-two-colum-large text-light fade-up-anim" style="background-image: url(<?= base_url('assets/img/shape/banner-8.jpg') ?>);">
                        <h3 class="text-end"><a href="services-details.html">Powered by Expertise.<br> Driven by Innovation.</a></h3>

                        <ul class="service-list mt-70 mt-xs-30">
                            <li>
                                <div class="icon">
                                    <img src="<?= base_url('assets/img/about/supply-chain.png') ?>" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4><a href="services-details.html">Supply Chain Domain Excellence</a></h4>
                                    <p>
                                        Helping logistics businesses solve complex operational challenges.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="<?= base_url('assets/img/about/trade.png') ?>" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4><a href="services-details.html">Global Delivery Excellence</a></h4>
                                    <p>
                                        Delivering consistent quality through teams across the UK, US, and India.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="services-style-two-items fade-up-anim">
                        <!-- Single Item -->
                        <div class="services-style-two-item">
                            <div class="top-info">
                                <img src="<?= base_url('assets/img/about/artificial-intelligence.png') ?>" alt="Image Not Found">
                                <h4><a href="services-details.html">AI & Technology <br> Innovation</a></h4>
                                <ul class="list-style-one">
                                    <li>AI-Powered Automation</li>
                                    <li>Cloud & AI Technologies</li>
                                    <li>Future-Ready Solutions</li>
                                </ul>
                            </div>
                            <a href="services.html" class="btn-simple">Explore More <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="services-style-two-item fade-up-anim">
                            <div class="top-info">
                                <img src="<?= base_url('assets/img/about/excellence.png') ?>" alt="Image Not Found">
                                <h4><a href="services-details.html">Built Around <br>Customer Success</a></h4>
                                <ul class="list-style-one">
                                    <li>Client-Centric Approach</li>
                                    <li>Scalable & Adaptive Solutions</li>
                                    <li>Delivering Measurable Business Value</li>
                                </ul>
                            </div>

                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Language Support 
    ============================================= -->
    <div class="language-support-area blurry-shape default-padding bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div>
                        <img class="fade-up-anim" src="<?= base_url('assets/img/about/map-wb.png') ?>" alt="cozentus location" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">

                    </div>
                    <!-- <div class="language-support-country-flag text-center">
                        <img src="assets/img/shape/14.png" alt="Image Not Found">
                        <img src="assets/img/icon/flag-can.png" alt="Image Not Found">
                        <img src="assets/img/icon/flag-china.png" alt="Image Not Found">
                        <img src="assets/img/icon/flag-dub.png" alt="Image Not Found">
                        <img src="assets/img/icon/flat-am.png" alt="Image Not Found">
                        <img src="assets/img/icon/flag-uks.png" alt="Image Not Found">
                        <div class="round-move"></div>
                        <div class="round-move-two"></div>
                        <div class="fun-fact">
                            <div class="js-counter">16+</div>
                            <h4>Countries</h4>
                        </div> 
                    </div> -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="language-support-info">
                        <h2 class="title split-text-right split-text-in-right">Where we operate</h2>
                        <p>
                            Teams across the US, UK and India give our clients local partnership and round-the-clock delivery. Wherever you are, you have people in your time zone and a global team building behind them.
                        <ul class="list-style-two">
                            <li>Local partnership, wherever you are</li>
                            <li>Round-the-clock delivery across time zones</li>
                            <li>One global team, fully accountable</li>
                        </ul>
                        <a class="btn btn-style-one btn-border mt-35" href="<?= base_url('book-free-consultation') ?>">Book a Meeting <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Language Support -->


    <!-- Workplace 
    ============================================= -->
    <div class="testimonial-style-two-area default-padding-top pb-80 pb-xs-70 bg-gray blurry-shape-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title split-text-right split-text-in-right">Our workplace, our strength</h2>
                    </div>
                    <div class="content">
                        <p>
                            We foster a people-first culture where employees feel valued, respected, and empowered. By prioritizing well-being, inclusion, and growth, we create an environment that inspires success beyond the workplace.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-provider-thumbs transform-up-animation">
                        <div class="testimonial-provider-item transform-animation-item">
                            <img src="<?= base_url('assets/img/about/about-1.png') ?>" alt="Image Not Found">
                        </div>
                        <div class="testimonial-provider-item transform-animation-item">
                            <img src="<?= base_url('assets/img/about/about-2.png') ?>" alt="Image Not Found">
                        </div>
                        <div class="testimonial-provider-item transform-animation-item">
                            <img src="<?= base_url('assets/img/about/about-3.png') ?>" alt="Image Not Found">
                            <img src="<?= base_url('assets/img/about/about-4.png') ?>" alt="Image Not Found">
                        </div>
                        <div class="testimonial-provider-item transform-animation-item">
                            <img src="<?= base_url('assets/img/about/about-7.jpg') ?>" alt="Image Not Found">
                            <img src="<?= base_url('assets/img/about/about-8.jpg') ?>" alt="Image Not Found">
                        </div>
                        <div class="testimonial-provider-item transform-animation-item">
                            <img src="<?= base_url('assets/img/about/about-9.jpg') ?>" alt="Image Not Found">
                        </div>
                        <div class="testimonial-provider-item transform-animation-item">
                            <img src="<?= base_url('assets/img/about/about-6.png') ?>" alt="Image Not Found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Workplace -->

    <!-- Start Team 
    ============================================= -->

    <?php if (!empty($ourteams)) { ?>
        <div class="team-style-two-area default-padding bottom-less  bg-gray blurry-shape-left-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">

                            <h2 class="title split-text-right split-text-in-right">The People Behind Cozentus</h2>
                            <p>
                                A leadership team with decades of expertise across supply chain logistics and the technology behind it.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="team-style-two-items">

                    <div class="row align-center">
                        <div class="team-carousel swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($ourteams as $team) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="col-lg-12 col-md-6 mb-30">
                                            <div class="team-style-two-item fade-up-anim">
                                                <div class="thumb">
                                                    <img src="<?= base_url('uploads/images/') . $team['image'] ?>" alt="Image Not Found">
                                                    <div class="text-overlay">
                                                        <p>
                                                            <?= html_entity_decode($team['short_description']) ?>
                                                        </p>
                                                    </div>
                                                    <div class="social-overlay">
                                                        <ul>
                                                            <li>
                                                                <a href="<?= urldecode($team['twitter_link']) ?? '#' ?>" target="__blank">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?= urldecode($team['link']) ?? '#' ?>" target="__blank"><i class="fab fa-linkedin-in"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?= urldecode($team['insta_link']) ?? '#' ?>" target="__blank"><i class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?= urldecode($team['facebook_link']) ?? '#' ?>" target="__blank"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="icon">
                                                            <i class="fas fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <h4><a href="<?= base_url('team/') . $team['slug'] ?>"><?= $team['name'] ?></a></h4>
                                                    <span><?= $team['title'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <br>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Team -->
    <!-- Call to Action
    ============================================= -->
    <div class="home-blog-two-area default-padding">
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
    </div>

    <!-- End Call to Action -->
</div>