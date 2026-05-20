<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* ── CSS Variables ── */
        :root {
            --pre-spinner: #2264dc;
            /* spinner border color */
            --pre-theme: #000942;
            /* text + loading label */
            --pre-header: #2264dc;
            /* animated letter color */
            --pre-bg: #ffffff;
            /* panel wipe background */
        }

        /* ── Preloader Wrapper ── */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999999;
            cursor: default;
        }

        /* ── Animation Center Block ── */
        .preloader .animation-preloader {
            position: relative;
            z-index: 1000;
            text-align: center;
        }

        /* ── Spinner ── */
        .preloader .animation-preloader .spinner {
            width: 9em;
            height: 9em;
            border-radius: 50%;
            border: 3px solid rgba(0, 0, 0, 0.1);
            border-top-color: var(--pre-spinner);
            margin: 0 auto 3.5em auto;
            animation: spinner 1s infinite linear;
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* ── Text COZENTUS ── */
        .preloader .animation-preloader .txt-loading {
            font-size: 5em;
            font-weight: bold;
            font-family: sans-serif;
            text-align: center;
            user-select: none;
            line-height: 1;
        }

        /* ── Each Letter ── */
        .preloader .animation-preloader .txt-loading .letters-loading {
            color: var(--pre-theme);
            position: relative;
            display: inline-block;
        }

        /* ── Letter flip animation ── */
        .preloader .animation-preloader .txt-loading .letters-loading::before {
            content: attr(data-text-preloader);
            position: absolute;
            top: -3px;
            left: 0;
            color: var(--pre-theme);
            opacity: 0;
            transform: rotateY(-90deg);
            animation: letters-loading 4s infinite;
        }

        /* ── Stagger each letter ── */
        .letters-loading:nth-child(1)::before {
            animation-delay: 0.0s;
        }

        .letters-loading:nth-child(2)::before {
            animation-delay: 0.2s;
        }

        .letters-loading:nth-child(3)::before {
            animation-delay: 0.4s;
        }

        .letters-loading:nth-child(4)::before {
            animation-delay: 0.6s;
        }

        .letters-loading:nth-child(5)::before {
            animation-delay: 0.8s;
        }

        .letters-loading:nth-child(6)::before {
            animation-delay: 1.0s;
        }

        .letters-loading:nth-child(7)::before {
            animation-delay: 1.2s;
        }

        .letters-loading:nth-child(8)::before {
            animation-delay: 1.4s;
        }

        /* ── Letter Keyframe ── */
        @keyframes letters-loading {
            0% {
                opacity: 0;
                transform: rotateY(-90deg);
            }

            33% {
                opacity: 1;
                transform: rotateY(0deg);
            }

            66% {
                opacity: 1;
                transform: rotateY(0deg);
            }

            100% {
                opacity: 0;
                transform: rotateY(90deg);
            }
        }

        /* ── Loading Label ── */
        .preloader p {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 8px;
            color: var(--pre-theme);
            margin-top: 16px;
        }

        /* ── Background Panel Wipe ── */
        .preloader .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
            font-size: 0;
        }

        .preloader .loader .row {
            height: 100%;
            margin: 0;
        }

        .preloader .loader .loader-section {
            padding: 0;
        }

        .preloader .loader .loader-section .bg {
            background-color: var(--pre-bg);
            height: 100%;
            width: 100%;
            transition: width 800ms cubic-bezier(0.77, 0, 0.175, 1);
        }

        /* ── Loaded State — fade out animation ── */
        .preloader.loaded .animation-preloader {
            opacity: 0;
            transition: opacity 0.3s ease-out;
        }

        .preloader.loaded .loader-section .bg {
            width: 0 !important;
            transition: width 0.7s 0.3s cubic-bezier(0.1, 0.1, 0.1, 1);
            /* ✅ fixed typo */
        }

        /* ── Mobile ── */
        @media (max-width: 767px) {
            .preloader .animation-preloader .spinner {
                width: 6em;
                height: 6em;
                margin: 0 auto 1.5em auto;
            }

            .preloader .animation-preloader .txt-loading {
                font-size: 2.5em;
            }

            .preloader p {
                font-size: 11px;
                letter-spacing: 5px;
            }
        }
    </style>
    <script>
        /* ── Optimized hide logic ──────────────────────────────────────
        1. DOMContentLoaded  → fires as soon as HTML is parsed
            (does NOT wait for images/scripts/fonts → 2–5× faster)
        2. 2500 ms safety cap → preloader exits even if a 3rd-party
            resource hangs (GTM, HubSpot, Clarity, etc.)
        3. One-shot guard  → can't fire twice
        ──────────────────────────────────────────────────────────────── */
        (function() {
            var fired = false;

            function hidePreloader() {
                if (fired) return;
                fired = true;

                var el = document.getElementById('preloader');
                if (!el) return;

                el.classList.add('loaded');

                /* Remove from DOM after transition ends (450 ms) */
                setTimeout(function() {
                    el.style.display = 'none';
                }, 500);
            }

            /* ✅ PRIMARY: fires right after HTML parse — much faster */
            document.addEventListener('DOMContentLoaded', hidePreloader);

            /* ✅ SAFETY CAP: force-hide after 2.5 s no matter what */
            setTimeout(hidePreloader, 2500);

        })();
    </script>
    <script>
        /*
        (function() {
            function hidePreloader() {
                var preloader = document.getElementById('preloader');
                if (!preloader) return;

                // ── Same as jQuery version: add class then fadeOut after 600ms ──
                preloader.classList.add('loaded');

                setTimeout(function() {
                    // preloader.style.transition = 'opacity 0.1s ease';
                    // preloader.style.opacity = '0';
                    preloader.style.display = 'none';
                    // setTimeout(function() {
                    //     preloader.style.display = 'none';
                    // }, 400); // ← wait for fade to finish then hide

                }, 500); // ← matches jQuery .delay(600)
            }

            // ── Use jQuery if available, else vanilla JS ──
            if (typeof jQuery !== 'undefined') {
                $(window).on('load', hidePreloader);
            } else {
                window.addEventListener('load', hidePreloader);
            }

        })();*/
    </script>
    <!--  <title>Cozentus</title> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Preconnect — every page -->
    <link rel="preconnect" href="https://static.hsappstatic.net" crossorigin>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css" />
    <!-- custom css -->
    <!-- Prefetch script — browser caches across pages -->
    <link rel="prefetch" href="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js" as="script">

    <!-- aos cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/lightbox.min.css') ?>">
    <?php if (base_url() != 'https://infisuite.in/dev/cozweb/') { ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/css/intlTelInput.css">
    <?php } ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/res.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css') ?>">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <!-- Xopa Script -->
    <script type="module" src="https://xcdn.blob.core.windows.net/xfe/pjs/pie-embed.js"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- <script defer src="https://code.jquery.com/jquery-3.6.1.js"></script> -->
    <?= !empty($head_foot['header']) ? html_entity_decode($head_foot['header']) : '' ?>

    <?= !empty($pserv['page_header']) ? html_entity_decode($pserv['page_header']) : '' ?>

    <?php

    // Determine the protocol (http or https)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Get the host name (e.g., www.example.com)
    $host = $_SERVER['HTTP_HOST'];

    // Get the request URI (e.g., /path/to/page)
    $requestUri = $_SERVER['REQUEST_URI'];

    // Combine to get the full URL
    $currentUrl = $protocol . $host . $requestUri;
    echo '<link rel="canonical" href="' . $currentUrl . '" />';
    echo '<br />';

    $commonpageheader = $this->home_model->get_header_footer('common');
    if (!empty($commonpageheader['header'])) {
        echo html_entity_decode($commonpageheader['header']);
    }
    ?>

    <script>
        var site_url = "<?= base_url() ?>";
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WBLVSRP');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "nggklxydm5");
    </script>



    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Cozentus",
            "url": "https://www.cozentus.com",
            "logo": "https://www.cozentus.com/assets/images/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+919777126600",
                "contactType": "Customer Service",
                "areaServed": "Global",
                "availableLanguage": ["English"]
            },
            "sameAs": [
                "https://www.linkedin.com/company/cozentus",
                "https://twitter.com/cozentus",
                "https://www.facebook.com/CozentusTechnologies/"
            ]
        }
    </script>
    <meta name="msvalidate.01" content="8AA3A7CA90031D1461EF7F53ACF355B0" />

</head>

<body style="background: white !important;">
    <!-- ============================================================ -->
    <!-- PRELOADER — Place at very TOP of <body>                      -->
    <!-- ============================================================ -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="C" class="letters-loading">C</span>
                <span data-text-preloader="O" class="letters-loading">O</span>
                <span data-text-preloader="Z" class="letters-loading">Z</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="N" class="letters-loading">N</span>
                <span data-text-preloader="T" class="letters-loading">T</span>
                <span data-text-preloader="U" class="letters-loading">U</span>
                <span data-text-preloader="S" class="letters-loading">S</span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader End -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBLVSRP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <!--<script src="//code.tidio.co/1s54lcfmr4vy1zcwrlqqhaygbxv5asss.js"defer></script>-->
    <!--<a href="<?= base_url('contact') ?>" class="gt-fix main-btn block-btn">
        <span>Get In Touch</span>
    </a>-->
    <nav class="main-nav">
        <div class="">
            <div class="inner-nav">
                <div class="l-part">
                    <button class="menu-btn">
                        <img width="30" height="18" class="height_auto"
                            src="<?= base_url('assets/images/menu.svg') ?>" alt="Menu">
                    </button>
                    <a href="<?= base_url() ?>" class="logo">
                        <img width="250" height="28" src="<?= base_url('assets/images/logo.webp') ?>"
                            class="light-logo height_auto" alt="Logo">
                        <img width="650" height="75" src="<?= base_url('assets/images/logo-black.webp') ?>"
                            class="dark-logo height_auto" alt="Logo Black">
                    </a>
                </div>
                <div class="m-part">
                    <!-- Menu -->
                    <nav class="navbar navbar-expand-lg navbar-dark p-0 position-static mob_view">
                        <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center lh-lg" id="main_nav">
                            <ul class="navbar-nav p-3 p-md-0">
                                <li class="nav-item ktm-mega-menu"> <a class="nav-link active"
                                        href="<?= base_url('') ?>">Home</a></li>
                                <li class="nav-item ktm-mega-menu"> <a class="nav-link"
                                        href="<?= base_url('about') ?>">About</a></li>
                                <!-- <li class="nav-item dropdown ktm-mega-menu">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style="pointer-events: none;">Company</a>
                                    <div class="dropdown-menu mega-menu sub_menu">
                                        <div class="menu-white">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('about') ?>">
                                                        <span>Our story</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </a>
                                                    <a href="<?= base_url('team') ?>">
                                                        <span>Our Core Team</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('mission') ?>">
                                                        <span>Our Approach</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </a>
                                                    <a href="<?= base_url('career') ?>">
                                                        <span>Our people</span>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-6 text-center">
                                                    <img src="<?= base_url('assets/images/Cozentus-Logo-Small.png') ?>" class="w-100" style="width:25% !important;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100" style="height:50px; background: #eeeeee; margin: 20px 0 -8px 0;"></div>
                                    </div>
                                </li> -->
                                <li class="nav-item dropdown ktm-mega-menu">
                                    <a class="nav-link dropdown-toggle"
                                        href="<?= base_url('industries') ?>">Industries</a>
                                    <div class="dropdown-menu mega-menu sub_menu">
                                        <div class="menu-white">
                                            <div class="row">
                                                <div class="col-lg-3">

                                                    <a href="<?= base_url('/industries/logistics') ?>">
                                                        <span>Logistics</span>
                                                        <p>Transform operations with cutting-edge IT solutions for
                                                            faster and cost-effective operations.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('/industries/retail') ?>">
                                                        <span>Retail</span>
                                                        <p>Unlock efficiency and agility in retail supply chains
                                                            through innovative IT solutions.
                                                        </p>
                                                    </a>

                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('/industries/manufacturing') ?>">
                                                        <span>Manufacturing</span>
                                                        <p>Future-Proofing Manufacturing Efficiency Through Advanced
                                                            IT Solutions
                                                        </p>
                                                    </a>

                                                </div>


                                                <div class="col-lg-3">
                                                    <img width="400" height="200" style="border-radius:5px;"
                                                        src="<?= base_url('assets/images/menu-industries.webp') ?>"
                                                        class="height" alt="Industries Menu">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100"
                                            style="height:50px; background: #eeeeee; margin: 20px 0 -8px 0;"></div>
                                    </div>
                                </li>

                                <!-- <li class="nav-item ktm-mega-menu"> <a class="nav-link" href="<? //=base_url('industries')
                                                                                                    ?>">Industries</a> </li> -->
                                <li class="nav-item dropdown ktm-mega-menu">
                                    <a class="nav-link dropdown-toggle"
                                        href="<?= base_url('services') ?>">Services</a>
                                    <div class="dropdown-menu mega-menu sub_menu">
                                        <div class="menu-white" style="padding: 0 40px 0 0;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img width="350" height="260"
                                                        src="<?= base_url('assets/images/Coz-Menu-Services_1.webp') ?>"
                                                        class="w-100 mt-3 height_auto"
                                                        style="width:100% !important;border-radius:5px;"
                                                        alt="Services Menu">
                                                </div>
                                                <div class="col-lg-3">
                                                    <a
                                                        href="<?= base_url('services/custom-software-development') ?>">
                                                        <span>Custom Software Development</span>
                                                        <p>Bespoke applications tailored to your unique supply chain
                                                            business needs.</p>
                                                    </a>
                                                    <a href="<?= base_url('services/data-engineering') ?>">
                                                        <span>Data Engineering</span>
                                                        <p>Build robust systems for collecting, storing, and
                                                            analysing large volumes of data.
                                                        </p>
                                                    </a>
                                                    <a href="<?= base_url('services/bi-and-visualisation') ?>">
                                                        <span>BI and Visualisation</span>
                                                        <p> Transform data into actionable insights through
                                                            interactive and customisable dashboards and reports.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a
                                                        href="<?= base_url('services/data-science-advance-analytics-al-ml') ?>">
                                                        <span>Data Science, Advance Analytics, AI ML</span>
                                                        <p>Leverage data science, advanced analytics, and machine
                                                            learning to drive data-driven decision-making.
                                                        </p>
                                                    </a>
                                                    <a href="<?= base_url('services/enterprise-integrations') ?>">
                                                        <span>ENTERPRISE INTEGRATIONS</span>
                                                        <p>Business-to-Business integrations through seamless
                                                            communication and partner connectivity.</p>
                                                    </a>
                                                    <a href="<?= base_url('services/cloud-and-devOps') ?>">
                                                        <span>Cloud and DevOps</span>
                                                        <p>Cloud infrastructure and DevOps for scalable, efficient,
                                                            and resilient supply chain operations.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('services/managed-services') ?>"
                                                        style="border: none;">
                                                        <span>Managed Services</span>
                                                        <p>IT support and maintenance ensuring smooth operations
                                                            while you focus on business growth.
                                                        </p>
                                                    </a>
                                                    <a href="<?= base_url('services/hyperautomation') ?>"
                                                        style="border:none;">
                                                        <span>Hyperautomation</span>
                                                        <p>Orchestrating multiple cutting-edge solutions for
                                                            intelligent supply chain and logistic automations.
                                                        </p>
                                                    </a>
                                                    <a href="<?= base_url('services/vida-peppol-integrations') ?>"
                                                        style="border:none;">
                                                        <span>ViDA Peppol Integrations</span>
                                                        <p>Simplify global trade with secure document
                                                            exchange, digitally.</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100"
                                            style="height:50px; background: #eeeeee; margin:0px 0 -8px 0;"></div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown ktm-mega-menu">
                                    <a class="nav-link dropdown-toggle"
                                        href="<?= base_url('domain-capabilities') ?>">Domain capabilities</a>
                                    <div class="dropdown-menu mega-menu sub_menu">
                                        <div class="menu-white">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <a
                                                        href="<?= base_url('domain-capabilities/intelligent-document-processing') ?>">
                                                        <span>Intelligent Document Processing</span>
                                                        <p>Automatically extract, read and compare data from supply
                                                            chain and logistic documents, obtained in any format or
                                                            from any source.</p>
                                                    </a>
                                                    <a
                                                        href="<?= base_url('domain-capabilities/shipment-visibility') ?>">
                                                        <span>Shipment Visibility</span>
                                                        <p>Take control of your shipments with precise real-time
                                                            insights into your their status and location.</p>
                                                    </a>
                                                    <a
                                                        href="<?= base_url('domain-capabilities/risk-monitoring') ?>">
                                                        <span>Risk Monitoring</span>
                                                        <p>Proactively identify the impact of potential disruptions
                                                            on shipments and assets in real time.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a
                                                        href="<?= base_url('domain-capabilities/drayage-and-yard-management') ?>">
                                                        <span>Drayage and Yard Management</span>
                                                        <p>Optimize in-terminal operations for efficient gate-in and
                                                            gate-out movement.</p>
                                                    </a>
                                                    <a
                                                        href="<?= base_url('domain-capabilities/carrier-selection-and-booking') ?>">
                                                        <span>Carrier selection and booking</span>
                                                        <p>Find the best rates and routes for your shipments, all in
                                                            one dashboard.</p>
                                                    </a>
                                                    <a
                                                        href="<?= base_url('domain-capabilities/predict-eta-solutions') ?>">
                                                        <span>Predict ETA</span>
                                                        <p>Gain accurate estimated arrival times for better
                                                            planning.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('domain-capabilities/freight-audit') ?>">
                                                        <span>Freight Audit</span>
                                                        <p>Untangle complex billing: Auto verify invoices and
                                                            identify cost-saving opportunities.</p>
                                                    </a>
                                                    <a
                                                        href="<?= base_url('domain-capabilities/quotation-management') ?>">
                                                        <span>Quotation Management</span>
                                                        <p>Easily request, compare, and manage quotes from carriers.
                                                        </p>
                                                    </a>
                                                    <a
                                                        href="<?= base_url('domain-capabilities/contract-management-service') ?>">
                                                        <span>Contract Management</span>
                                                        <p>Simplify contract creation, negotiation, and tracking.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('domain-capabilities/bill-of-lading-process') ?>"
                                                        style="border:none;">
                                                        <span>Bill of Lading</span>
                                                        <p>Optimize the approval/rejection process and tracking for
                                                            a high volume of Bill of Lading (BOL) documents.</p>
                                                    </a>
                                                    <div
                                                        class="<?= base_url('domain-capabilities/risk-monitoring') ?>">
                                                        <img width="350" height="215"
                                                            src="<?= base_url('assets/images/Coz-Menu-Services.webp') ?>"
                                                            alt="Domain Capabilities" class="height_auto"
                                                            style="width:100% !important; border-radius:5px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100" style="background: #eeeeee; margin: 0px 0 -8px 0;">
                                            <ul class="case">
                                                <li><a href="<?= base_url('case-studies') ?>">Case Studies</a></li>
                                                <li><a href="<?= base_url('use-cases') ?>">Use Cases</a></li>
                                                <li><a href="<?= base_url('career') ?>">Career</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown ktm-mega-menu">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        style="pointer-events: none;">Resources</a>
                                    <div class="dropdown-menu mega-menu sub_menu">
                                        <div class="menu-white">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('blogs') ?>">
                                                        <span>Blogs</span>
                                                        <p>Insights to empower your business with next-level
                                                            technology.</p>
                                                    </a>
                                                    <!---  <a href="#"> -->
                                                    <a href="<?= base_url('podcast') ?>">
                                                        <span>Podcast</span>
                                                        <p>Insights and expertise driving the future of innovation.
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('case-studies') ?>">
                                                        <span>Success Stories</span>
                                                        <p>See how businesses like yours are winning with Cozentus.
                                                        </p>
                                                    </a>
                                                    <a href="<?= base_url('use-cases') ?>">
                                                        <span>Use Cases</span>
                                                        <p>Explore how Cozentus solutions tackle real-world industry
                                                            challenges.</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3">
                                                    <a href="<?= base_url('reports') ?>">
                                                        <span>Reports, ebooks and Guides</span>
                                                        <p>Strategic insights and industry trends for empowering
                                                            your business with advanced technology.</p>
                                                    </a>
                                                    <a href="<?= base_url('webinars') ?>">
                                                        <span>Webinars</span>
                                                        <p>Access expert insights and stay ahead with our on-demand
                                                            webinars.</p>
                                                    </a>
                                                </div>

                                                <div class="col-lg-3">
                                                    <img width="400" height="200" style="border-radius:5px;"
                                                        src="<?= base_url('assets/images/resources-menu.webp') ?>"
                                                        alt="Resources Menu" class="height_auto" style="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-100"
                                            style="height:50px; background: #eeeeee; margin: 20px 0 -8px 0;"></div>
                                    </div>
                                </li>
                                <!-- <li class="nav-item"> <a class="nav-link" href="<?= base_url('career') ?>">Join our team</a> </li> -->

                            </ul>

                        </div>

                    </nav>

                    <nav class="navbar navbar-expand-lg navbar-dark p-0 position-static ">
                        <ul class="ot-list">
                            <li>
                                <!-- <a href="<?= base_url('book-free-consultation') ?>" class="main-btn"
                                        style="padding: 5px 10px;">
                                        <span style="color:#fff;">Book a Meeting</span>
                                    </a> -->
                                <a href="#" class=" main-btn" style="padding: 5px 10px;" id="openMeetingModalHeader"
                                    data-aos="fade-up" data-aos-duration="1000">
                                    <span style="color:#fff;">Book a Meeting</span>
                                </a>

                            </li>
                        </ul>
                    </nav>
                    <ul class="ot-list">
                        <li>
                            <a href="<?= base_url('contact') ?>" class="main-btn border-btn text-dark mob_view"
                                style="padding: 5px 10px;">
                                <span>Get In Touch</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    <div class="mobile-nav">
        <div class="menu-head">
            <a href="" class="logo">
                <img width="180" height="20" src="<?= base_url('assets/images/logo.webp') ?>" class="height_auto"
                    alt="mobile logo">
            </a>
            <button class="menu-close">
                <img width="15" height="15" src="<?= base_url('assets/images/close.svg') ?>" class="height_auto"
                    alt="Mobile logo">
            </button>
        </div>
        <ul class="nav-list">
            <li class="has-drop-down">
                <a href="<?= base_url() ?>">
                    Home
                </a>
            </li>
            <li>
                <a href="<?= base_url('about') ?>">
                    About
                </a>
            </li>
            <li class="has-mega-menu mobile-menu">

            </li>
            <!-- <li>
                <a href="<?= base_url('industries') ?>">
                    Industries
                </a>
            </li> -->

            <li class="has-mega-menu">
                <a href="<?= base_url('industries') ?>" data-bs-toggle="collapse" data-bs-target="#industries-menu">
                    Industries
                </a>
                <ul id="industries-menu" class="collapse">
                    <li>
                        <a href="<?= base_url('/industries/logistics') ?>">Logistics
                            <p>Transform operations with cutting-edge IT solutions for faster and
                                cost-effective operations.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('industries/retail') ?>">Retail
                            <p>Unlock efficiency and agility in retail supply chains through innovative IT
                                solutions.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('/industries/manufacturing') ?>">Manufacturing
                            <p> IT solutions for optimized production, inventory, and logistics management.
                            </p>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="has-mega-menu">
                <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#offerings-menu">
                    Services
                </a>
                <ul id="offerings-menu" class="collapse">
                    <li>
                        <a href="<?= base_url('services/custom-software-development') ?>">Custom Software
                            Development
                            <p>Bespoke applications tailored to your unique logistics business needs.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/data-engineering') ?>">Data Engineering
                            <p>Build robust systems for collecting, storing, and analysing large volumes of data.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/bi-and-visualisation') ?>">Bi & Visualisation
                            <p>Transforming logistics data into actionable insights through interactive dashboards
                                and reports.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/data-science-advance-analytics-al-ml') ?>">Data Science
                            Advance Analytics, AI ML
                            <p>Leveraging data science, advanced analytics, and machine learning to drive
                                data-driven decision-making.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/enterprise-integrations') ?>">Enterprise Integrations
                            <p>Integrating logistics through seamless communication and partner connectivity.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/cloud-and-devOps') ?>">Cloud and Devops
                            <p>Cloud infrastructure and DevOps for scalable, efficient, and resilient logistic
                                operations.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/managed-services') ?>">Managed Services
                            <p>IT support and maintenance ensuring smooth operations while you focus on business
                                growth.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/hyperautomation') ?>">Hyperautomation
                            <p>Orchestrating multiple cutting-edge solutions for intelligent logistic processes</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services/vida-peppol-integrations') ?>">Vida Peppol Integrations
                            <p>Simplify global trade with secure document exchange, digitally.</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-mega-menu">
                <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#business-menu">
                    Domain capabilities
                </a>
                <ul id="business-menu" class="collapse">
                    <li>
                        <a href="<?= base_url('domain-capabilities/intelligent-document-processing') ?>">Document
                            Extraction
                            <p>Automate document extraction, reading and comparison of any logistic document in ant
                                format or from any source.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/shipment-visibility') ?>">Shipment Visibility
                            <p>Take control of your shipments with precise real-time insights into your their status
                                and location.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/risk-monitoring') ?>">Risk Monitoring
                            <p>Proactively identify the impact of potential disruptions on shipments and assets in
                                real time.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/drayage-and-yard-management') ?>">Drayage and
                            yard man
                            <p>Optimize in-terminal operations for efficient gate-in and gate-out movement.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/carrier-selection-and-booking') ?>">Carrier
                            selection and booking
                            <p>Find the best rates and routes for your shipments, all in one dashboard.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/predict-eta-solutions') ?>">Predict ETA
                            <p>Gain accurate estimated arrival times for better planning.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/freight-audit') ?>">Freight Audit
                            <p>Untangle complex billing: Auto verify invoices and identify cost-saving
                                opportunities.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/quotation-management') ?>">Quotation Management
                            <p>Easily request, compare, and manage quotes from carriers.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/contract-management-service') ?>">Contract
                            Management
                            <p>Simplify contract creation, negotiation, and tracking.</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('domain-capabilities/bill-of-lading-process') ?>">Bill of Lading
                            <p>Optimize the approval/rejection process and tracking for a high volume of Bill of
                                Lading (BOL) documents.
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-mega-menu">
                <a href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#res">
                    Resources
                </a>
                <ul id="res" class="collapse">
                    <li>
                        <a href="<?= base_url('blogs') ?>">Blogs</a>
                    </li>
                    <li>
                        <!---  <a href="#">Podcast</a> -->
                        <a href="<?= base_url('podcast') ?>">Podcast</a>

                    </li>
                    <li>
                        <a href="<?= base_url('case-studies') ?>">Success Stories</a>
                    </li>
                    <li>
                        <a href="<?= base_url('use-cases') ?>">Use Cases</a>
                    </li>
                    <li>
                        <a href="<?= base_url('reports') ?>">
                            Reports</a>
                    </li>
                    <li>
                        <a href="<?= base_url('webinars') ?>">
                            Webinars</a>
                    </li>
                </ul>
            </li>

            <!-- <li>
                <a href="<?= base_url('career') ?>">
                    Join Our Team
                </a>
            </li> -->
            <ul class="ot-list">
                <li>
                    <a href="<?= base_url('contact') ?>" class="main-btn"
                        style="display: inline-block; padding: 5px 10px; border: 1px solid white; color: black; text-decoration: none; background-color: transparent; border-radius: 1px; margin-left:20px; margin-top:10px;">
                        <span>Get In Touch</span>
                    </a>
                    <!-- <a href="#"class=" main-btn" id="openMeetingModalHeader"
                            style="display: inline-block; padding: 5px 10px; border: 1px solid white; color: black; text-decoration: none; background-color: transparent; border-radius: 1px; margin-left:20px; margin-top:10px;">
                            <span>Book a Meeting</span>
                        </a> -->

                </li>
            </ul>
            <!--             
                        <li>
                            <a href="<?= base_url('contact') ?>" class="main-btn border-btn dark">
                                <span>Book a Meetings</span>
                            </a>
                        </li>
                    -->
        </ul>
    </div>