    <style>
        /* ═══════════════════════════════════════════════════════════
   child-services.html  —  Section 2 "What It Does" +
   Section 3 "What It Solves"  (namespaced, theme-safe)
   ═══════════════════════════════════════════════════════════ */

        /* ── Section 2: enterprise split layout ── */
        .cz-does-top {
            margin-bottom: 20px;
        }

        /* small uppercase eyebrow label */
        .cz-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: #2f73ff;
            margin-bottom: 18px;
        }

        .cz-eyebrow::before {
            content: "";
            width: 30px;
            height: 2px;
            background: #2f73ff;
            display: inline-block;
        }

        .cz-does-intro {
            padding-right: 40px;
        }

        .cz-does-intro .title {
            margin-bottom: 20px;
        }

        .cz-does-intro>p {
            font-size: 16px;
            line-height: 1.7;
            color: #5a6478;
            margin-bottom: 26px;
        }

        .cz-does-points {
            list-style: none;
            margin: 0 0 32px;
            padding: 0;
        }

        .cz-does-points li {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 15.5px;
            font-weight: 600;
            color: #0c1b3a;
            margin-bottom: 14px;
        }

        .cz-does-points li i {
            color: #2f73ff;
            font-size: 16px;
            width: 22px;
            text-align: center;
        }

        /* capability list (right column) — clean rows, not cards */
        .cz-cap-list {
            display: flex;
            flex-direction: column;
        }

        .cz-cap {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 22px 0;
            border-bottom: 1px solid #eaedf2;
            transition: padding-left .25s ease;
        }

        .cz-cap:first-child {
            padding-top: 0;
        }

        .cz-cap:last-child {
            border-bottom: 0;
        }

        .cz-cap:hover {
            padding-left: 6px;
        }

        .cz-cap-ic {
            flex: 0 0 56px;
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            color: #2f73ff;
            background: linear-gradient(135deg, rgba(47, 115, 255, .12), rgba(47, 115, 255, .03));
            transition: background .25s ease, color .25s ease;
        }

        .cz-cap:hover .cz-cap-ic {
            color: #fff;
            background: linear-gradient(135deg, #2f73ff, #6f4cff);
        }

        .cz-cap-info h4 {
            font-size: 18px;
            font-weight: 700;
            color: #0c1b3a;
            margin-bottom: 6px;
        }

        .cz-cap-info p {
            font-size: 14.5px;
            line-height: 1.55;
            color: #5a6478;
            margin: 0;
        }

        /* ── Section 2: horizontal process flow ── */
        .cz-flow-wrap {
            margin-top: 30px;
            text-align: center;
        }

        .cz-flow-label {
            display: inline-block;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: #8a97ad;
            margin-bottom: 18px;
        }

        .cz-flow {
            margin-top: 28px;
            padding: 36px 24px;
            background: #fff;
            border: 1px solid #eef0f4;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px 6px;
        }

        .cz-flow-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-width: 130px;
        }

        .cz-flow-ic {
            width: 84px;
            height: 84px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #2f73ff;
            background: #f3f7ff;
            border: 2px solid #dce8ff;
            margin-bottom: 14px;
        }

        .cz-flow-ic.cz-flow-accent {
            color: #fff;
            background: linear-gradient(135deg, #2f73ff, #6f4cff);
            border-color: transparent;
            box-shadow: 0 12px 22px -8px rgba(47, 115, 255, .6);
        }

        .cz-flow-step h5 {
            font-size: 16px;
            font-weight: 700;
            color: #0c1b3a;
            margin: 0;
        }

        .cz-flow-arrow {
            font-size: 22px;
            color: #b9c4d6;
            margin: 0 6px 26px;
        }

        /* ── Section 3: challenges vs outcomes ── */
        .cz-solve-card {
            border-radius: 18px;
            padding: 40px 36px;
            height: 100%;
            margin-bottom: 30px;
            border: 1px solid #eef0f4;
            background: #fff;
        }

        .cz-solve-challenge {
            background: linear-gradient(180deg, #fff6f5 0%, #ffffff 60%);
            border-color: #ffe1dc;
        }

        .cz-solve-outcome {
            background: linear-gradient(180deg, #f1fbf5 0%, #ffffff 60%);
            border-color: #d6f1df;
        }

        .cz-solve-head {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 26px;
        }

        .cz-solve-badge {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #fff;
            flex: 0 0 56px;
        }

        .cz-solve-challenge .cz-solve-badge {
            background: linear-gradient(135deg, #ff6a5e, #ff8a3d);
        }

        .cz-solve-outcome .cz-solve-badge {
            background: linear-gradient(135deg, #21b573, #34c759);
        }

        .cz-solve-head h3 {
            font-size: 24px;
            font-weight: 700;
            color: #0c1b3a;
            margin: 0;
        }

        .cz-solve-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cz-solve-list li {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 16.5px;
            color: #2b3b58;
            padding: 13px 0;
            border-bottom: 1px solid rgba(12, 27, 58, .07);
        }

        .cz-solve-list li:last-child {
            border-bottom: 0;
        }

        .cz-solve-list li i {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #fff;
            flex: 0 0 26px;
        }

        .cz-solve-challenge .cz-solve-list li i {
            background: #ff6a5e;
        }

        .cz-solve-outcome .cz-solve-list li i {
            background: #21b573;
        }

        /* ── responsive ── */
        @media (max-width: 991px) {
            .cz-flow-step {
                min-width: 110px;
            }

            .cz-flow-ic {
                width: 72px;
                height: 72px;
                font-size: 28px;
            }

            .cz-does-intro {
                padding-right: 0;
                margin-bottom: 40px;
            }
        }

        @media (max-width: 575px) {
            .cz-flow {
                flex-direction: column;
            }

            .cz-flow-arrow {
                transform: rotate(90deg);
                margin: 4px 0;
            }

            .cz-flow-step {
                min-width: 0;
            }

            .cz-solve-card {
                padding: 30px 24px;
            }
        }

        /* ═══════════════════════════════════════════════════════════
   child-services.html  —  Section 4 "Case Study"
   ═══════════════════════════════════════════════════════════ */
        .cz-eyebrow-center {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        .cz-eyebrow-center::after {
            content: "";
            width: 30px;
            height: 2px;
            background: #2f73ff;
            display: inline-block;
        }

        .cz-case-card {
            margin-top: 10px;
        }

        /* media side */
        .cz-case-media {
            position: relative;
            height: 100%;
            min-height: 420px;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 30px 60px -30px rgba(13, 35, 75, .25);
        }

        .cz-case-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .cz-case-tag {
            position: absolute;
            top: 24px;
            left: 24px;
            background: rgba(12, 27, 58, .82);
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .3px;
            padding: 9px 16px;
            border-radius: 30px;
            backdrop-filter: blur(4px);
        }

        /* story side */
        .cz-case-body {
            padding: 48px 50px;
        }

        .cz-case-client {
            display: flex;
            align-items: center;
            gap: 16px;
            padding-bottom: 24px;
            margin-bottom: 26px;
            border-bottom: 1px solid #eef0f4;
        }

        .cz-case-logo {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            flex: 0 0 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #fff;
            background: linear-gradient(135deg, #2f73ff, #6f4cff);
        }

        .cz-case-client-info h4 {
            font-size: 20px;
            font-weight: 700;
            color: #0c1b3a;
            margin: 0 0 3px;
        }

        .cz-case-client-info span {
            font-size: 14px;
            color: #8a97ad;
        }

        .cz-case-block {
            margin-bottom: 22px;
        }

        .cz-case-block h5 {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: .4px;
            text-transform: uppercase;
            color: #0c1b3a;
            margin-bottom: 9px;
        }

        .cz-case-block h5 i {
            color: #2f73ff;
            font-size: 15px;
        }

        .cz-case-block p {
            font-size: 15.5px;
            line-height: 1.65;
            color: #5a6478;
            margin: 0;
        }

        /* result stats */
        .cz-case-stats {
            display: flex;
            gap: 14px;
            margin: 28px 0;
            padding: 24px 0;
            border-top: 1px solid #eef0f4;
            border-bottom: 1px solid #eef0f4;
        }

        .cz-case-stat {
            flex: 1;
            text-align: center;
        }

        .cz-case-stat+.cz-case-stat {
            border-left: 1px solid #eef0f4;
        }

        .cz-case-stat h3 {
            font-size: 34px;
            font-weight: 800;
            line-height: 1;
            margin: 0 0 6px;
            background: linear-gradient(135deg, #2f73ff, #6f4cff);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .cz-case-stat span {
            font-size: 13.5px;
            color: #5a6478;
            font-weight: 600;
        }

        /* client quote */
        .cz-case-quote {
            position: relative;
            background: #f6f8fc;
            border-left: 4px solid #2f73ff;
            border-radius: 0 14px 14px 0;
            padding: 24px 26px 24px 30px;
            margin: 0 0 30px;
            font-size: 16.5px;
            line-height: 1.6;
            font-style: italic;
            color: #2b3b58;
        }

        .cz-case-quote>i {
            color: #c7d6f5;
            font-size: 22px;
            margin-right: 8px;
        }

        .cz-case-quote cite {
            display: block;
            margin-top: 14px;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            color: #0c1b3a;
        }

        /* ── responsive ── */
        @media (max-width: 991px) {
            .cz-case-media {
                min-height: 320px;
            }

            .cz-case-body {
                padding: 40px 34px;
            }
        }

        @media (max-width: 575px) {
            .cz-case-body {
                padding: 32px 24px;
            }

            .cz-case-stats {
                flex-direction: column;
                gap: 18px;
            }

            .cz-case-stat+.cz-case-stat {
                border-left: 0;
                border-top: 1px solid #eef0f4;
                padding-top: 18px;
            }
        }
    </style>

    <div id="smooth-content">

        <!-- Start Breadcrumb
    ============================================= -->
        <div class="breadcrumb-area text-center bg-cover text-light bg-theme" style="background-image: url(assets/img/shape/banner-14.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Custom Logistics Platforms</h1>
                        <!-- <ul class="breadcrumb">
                            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                            <li>Services</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start About  Services
        ============================================= -->
        <div class="about-style-three-area default-padding-2 bg-gray bg-cover" style="background: url(assets/img/shape/banner-16.jpg);">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6" style="height: 430px;">
                        <h2 class="title split-text-right split-text-in-right">Customized Solutions Services Overview</h2>
                        <p>
                            Cozentus crafts custom applications that integrate seamlessly, scale effortlessly, and adapt to your ever-changing needs. Our team's expertise across various industries ensures your software exceeds the limitations of off-the-shelf options. This guarantees a perfect fit for your workflow, efficient scaling as you grow, and adaptability to your evolving business landscape.
                        </p>
                        <a class="btn btn-style-one" href="#">Book a Meeting <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="col-lg-6" style="height: 430px;">
                        <div class="about-style-three-thumb">
                            <img class="fade-up-anim" src="<?= base_url('assets/img/idp-1.png') ?>" alt="Image Not Found">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Section 2 - What It Does
        ============================================= -->
        <div class="cz-does-area default-padding">
            <div class="container">
                <div class="row align-center cz-does-top">
                    <!-- Left: narrative -->
                    <div class="col-lg-6 cz-does-intro">
                        <span class="cz-eyebrow">What It Does</span>
                        <h2 class="title split-text-right split-text-in-right">Intelligent automation at enterprise scale</h2>
                        <p>
                            We unify document capture, AI validation, and system integration into one secure
                            platform — so your teams move faster, with fewer errors and complete operational visibility
                            across every region and business unit.
                        </p>
                        <ul class="cz-does-points">
                            <li><i class="fas fa-shield-alt"></i> Enterprise security &amp; compliance by design</li>
                            <li><i class="fas fa-layer-group"></i> Modular, API-first architecture</li>
                            <li><i class="fas fa-headset"></i> 24x7 managed support &amp; SLAs</li>
                        </ul>
                        <a href="contact-us.html" class="btn btn-style-one">Talk to an Expert <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Right: capability list -->
                    <div class="col-lg-6 cz-cap-wrap">
                        <div class="cz-cap-list">
                            <div class="cz-cap">
                                <span class="cz-cap-ic"><i class="fas fa-route"></i></span>
                                <div class="cz-cap-info">
                                    <h4>Smart Route &amp; Load Planning</h4>
                                    <p>Optimizes routes, loads, and carrier selection to cut transit time and freight cost.</p>
                                </div>
                            </div>
                            <div class="cz-cap">
                                <span class="cz-cap-ic"><i class="fas fa-map-marked-alt"></i></span>
                                <div class="cz-cap-info">
                                    <h4>Real-Time Shipment Visibility</h4>
                                    <p>Live tracking, ETAs, and proactive alerts across every leg of the supply chain.</p>
                                </div>
                            </div>
                            <div class="cz-cap">
                                <span class="cz-cap-ic"><i class="fas fa-network-wired"></i></span>
                                <div class="cz-cap-info">
                                    <h4>Seamless System Integration</h4>
                                    <p>Connects TMS, WMS, ERP, and carrier APIs into one unified logistics platform.</p>
                                </div>
                            </div>
                            <div class="cz-cap">
                                <span class="cz-cap-ic"><i class="fas fa-cogs"></i></span>
                                <div class="cz-cap-info">
                                    <h4>Automated Freight Workflows</h4>
                                    <p>Streamlines booking, documentation, and billing with rule-based automation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Section 2 -->

        <!-- Section 3 - What It Solves
        ============================================= -->
        <div class="cz-solve-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right">What It Solves</h2>
                            <p>From everyday operational pain points to measurable business outcomes.</p>
                        </div>
                    </div>
                </div>

                <div class="row cz-solve-row fade-up-anim">
                    <!-- Left: Common Challenges -->
                    <div class="col-lg-6">
                        <div class="cz-solve-card cz-solve-challenge">
                            <div class="cz-solve-head">
                                <span class="cz-solve-badge"><i class="fas fa-exclamation-triangle"></i></span>
                                <h3>Common Challenges</h3>
                            </div>
                            <ul class="cz-solve-list">
                                <li><i class="fas fa-times"></i> Manual processes</li>
                                <li><i class="fas fa-times"></i> Slow turnaround</li>
                                <li><i class="fas fa-times"></i> High operational costs</li>
                                <li><i class="fas fa-times"></i> Data errors</li>
                                <li><i class="fas fa-times"></i> Lack of visibility</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Right: Business Outcomes -->
                    <div class="col-lg-6">
                        <div class="cz-solve-card cz-solve-outcome">
                            <div class="cz-solve-head">
                                <span class="cz-solve-badge"><i class="fas fa-bolt"></i></span>
                                <h3>Business Outcomes</h3>
                            </div>
                            <ul class="cz-solve-list">
                                <li><i class="fas fa-check"></i> Faster processing</li>
                                <li><i class="fas fa-check"></i> Reduced costs</li>
                                <li><i class="fas fa-check"></i> Improved accuracy</li>
                                <li><i class="fas fa-check"></i> Better visibility</li>
                                <li><i class="fas fa-check"></i> Increased productivity</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Section 3 -->

        <!-- Section 4 - Case Study
        ============================================= -->
        <div class="cz-case-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <span class="cz-eyebrow cz-eyebrow-center">Case Study</span>
                            <h2 class="title split-text-right split-text-in-right">Real results for real businesses</h2>
                            <p>How we transformed a global forwarder's document bottleneck into a competitive advantage.</p>
                        </div>
                    </div>
                </div>

                <div class="cz-case-card fade-up-anim">
                    <div class="row g-0 align-center">
                        <!-- Visual -->
                        <div class="col-lg-5">
                            <div class="cz-case-media">
                                <img src="assets/img/case-study.png" alt="Case study">
                                <span class="cz-case-tag">Logistics &amp; Supply Chain</span>
                            </div>
                        </div>
                        <!-- Story -->
                        <div class="col-lg-7">
                            <div class="cz-case-body">
                                <div class="cz-case-client">
                                    <span class="cz-case-logo"><i class="fas fa-globe"></i></span>
                                    <div class="cz-case-client-info">
                                        <h4>Global Freight Forwarder</h4>
                                        <span>Operations across 14 countries</span>
                                    </div>
                                </div>

                                <div class="cz-case-block">
                                    <h5><i class="fas fa-exclamation-circle"></i> The Challenge</h5>
                                    <p>Documents were processed manually across regional offices, creating slow
                                        turnaround, frequent data errors, and zero real-time visibility — directly
                                        impacting customer SLAs and operating margins.</p>
                                </div>

                                <div class="cz-case-block">
                                    <h5><i class="fas fa-lightbulb"></i> Our Solution</h5>
                                    <p>We deployed an AI-powered document automation platform that captures, validates,
                                        and integrates data straight into their ERP — replacing manual handoffs with a
                                        single, secure, fully auditable workflow.</p>
                                </div>

                                <div class="cz-case-stats">
                                    <div class="cz-case-stat">
                                        <h3>60%</h3>
                                        <span>Faster processing</span>
                                    </div>
                                    <div class="cz-case-stat">
                                        <h3>42%</h3>
                                        <span>Lower operating cost</span>
                                    </div>
                                    <div class="cz-case-stat">
                                        <h3>99.4%</h3>
                                        <span>Data accuracy</span>
                                    </div>
                                </div>

                                <blockquote class="cz-case-quote">
                                    <i class="fas fa-quote-left"></i>
                                    Cozentus turned our biggest operational bottleneck into a measurable advantage.
                                    What used to take days now takes minutes — and we trust the data.
                                    <cite>VP of Operations, Global Freight Forwarder</cite>
                                </blockquote>

                                <a href="contact-us.html" class="btn btn-style-one">Read Full Case Study <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Section 4 -->

        <!-- Section-4 Process
        ============================================= -->
        <div class="process-style-two-area overflow-hidden bg-cover default-padding bg-dark text-light" style="background-image: url(assets/img/shape/banner-20.jpg);">
            <div class="container">
                <div class="site-heading">
                    <div class="row align-center">
                        <div class="col-lg-12">
                            <h2 class="title split-text-right split-text-in-right">Ways to work with us</h2>
                            <p>
                                Every engagement is different. Pick the model that fits how you want to build or we'll help you choose.
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

        <!-- Start Services 
        ============================================= -->
        <div class="services-style-six-area bg-cover default-padding bg-gray blurry-shape-left-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="service-tab-content-box">
                            <div class="service-tab-content-box">
                                <div class="service-tab-contents">
                                    <img src="<?= base_url('assets/img/data-engineering.jpg') ?>" alt="Image Not Found">
                                </div>
                                <div class="service-tab-contents active">
                                    <img src="<?= base_url('assets/img/Bi.png') ?>" alt="Image Not Found">
                                </div>
                                <div class="service-tab-contents">
                                    <img src="<?= base_url('assets/img/Enterprise.png') ?>" alt="Image Not Found">
                                </div>
                                <div class="service-tab-contents">
                                    <img src="<?= base_url('assets/img/data-engineering.jpg') ?>" alt="Image Not Found">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 pl-70 pl-md-15 pl-xs-15">
                        <h2 class="title split-text-right split-text-in-right">Other Related Services</h2>
                        <ul class="service-tab-content-list text-scroll-animation">
                            <li>
                                <div class="service-tab-item">
                                    <h4><a class="text" href="service-details.html"><strong>01</strong>Data Engineering Solutions</a></h4>
                                </div>
                            </li>
                            <li class="active">
                                <div class="service-tab-item">
                                    <h4><a class="text" href="service-details.html"><strong>02</strong> BI and Visualisation</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="service-tab-item">
                                    <h4><a class="text" href="https://cozentusstage.uksouth.cloudapp.azure.com/coz_v2/services/agentic-automation"><strong>03</strong> Agentic Automation</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="service-tab-item">
                                    <h4><a class="text" href="service-details.html"><strong>04</strong>Enterprise Integration & ETL</a></h4>
                                </div>
                            </li>
                        </ul>
                        <br>
                        <a href="contact-us.html" class="btn btn-style-one">View All Services <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services -->

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
                                    <a class="btn btn-style-one btn-border mb-2" href="contact-us.html">
                                        Book a Meeting <i class="fas fa-arrow-right"></i>
                                    </a>
                                    <a class="btn btn-style-one mb-2" href="contact-us.html">
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