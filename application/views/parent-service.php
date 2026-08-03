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
    <style>
        /* ============================================================
                    AI-Powered Intelligence loop  —  namespaced .cz-ai-*
                    Self-contained (HTML + CSS in one file).
                    Scales with container-query units so it fits one screen.
                    ============================================================ */
        .cz-ai-section {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .cz-ai-wrap {
            /* cap width so height never exceeds the viewport => single screen */
            width: min(1400px, 100%, calc(94vh * 1500 / 860));
            aspect-ratio: 1500 / 860;
            margin: auto;
            position: relative;
            container-type: inline-size;
            margin-bottom: 115px;
            margin-top: 60px;
        }

        /* the winding road sits behind everything */
        .cz-ai-road {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: visible;
        }

        /* center title block */
        .cz-ai-center {
            position: absolute;
            left: 50%;
            top: 62%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 2;
        }

        .cz-ai-center h2 {
            font-size: 41px;
            line-height: 40px;
            color: #0c1b3a;
            font-weight: 600;
        }

        .cz-ai-center p {
            margin-top: 23px;
            font-size: 18px;
            color: #2b3b58;
            font-weight: 500;
        }

        .cz-ai-dots {
            display: flex;
            justify-content: center;
            align-items: center;
            /* gap: .6rem; */
            margin-top: 20px;
        }

        .cz-ai-dots span {
            width: 13px;
            height: 13px;
            border-radius: 50%;
            display: block;
        }

        .cz-ai-dots i {
            width: 20px;
            height: 3px;
            background: #d9dee7;
            display: block;
        }

        /* ── one step = pedestal (anchored on the road) + floating text ── */
        .cz-ai-step {
            position: absolute;
            width: 120px;
            height: 120px;
            transform: translate(-50%, -50%);
            z-index: 4;
        }

        /* glossy circular pedestal */
        .cz-ai-pedestal {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 62px;
            background:
                radial-gradient(circle at 50% 30%, #ffffff 0 45%, var(--cz-ai-ring) 46% 100%);
            box-shadow:
                0 17px 28px -8px var(--cz-ai-ring),
                inset 0 -10px 17px rgba(0, 0, 0, .12),
                inset 0 8px 14px rgba(255, 255, 255, .75);
            position: relative;
        }

        .cz-ai-pedestal::after {
            content: "";
            position: absolute;
            inset: 14px;
            border-radius: 50%;
            background: #ffffff;
            box-shadow: inset 0 4px 10px rgba(0, 0, 0, .08);
        }

        .cz-ai-pedestal span {
            position: relative;
            z-index: 1;
            line-height: 1;
            filter: drop-shadow(0 6px 8px rgba(0, 0, 0, .2));
        }

        /* floating text label */
        .cz-ai-info {
            position: absolute;
            width: 238px;
        }

        .cz-ai-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 43px;
            height: 38px;
            border-radius: 11px;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            box-shadow: 0 6px 11px rgba(0, 0, 0, .18);
            margin-bottom: 10px;
        }

        .cz-ai-info h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .cz-ai-info p {
            font-size: 16px;
            line-height: 1.42;
            color: #3a4456;
        }

        /* ── label placement variants (specifically for each item) ── */

        /* 01: Quote & Contract */
        .czd-s1 .cz-ai-info {
            right: 124%;
            top: 2%;
            transform: translateY(-50%);
            text-align: left;
            width: 210px;
        }

        .czd-s1 .cz-ai-num {
            margin-left: auto;
        }

        /* 02: Plan & Schedule */
        .czd-s2 .cz-ai-info {
            bottom: 99%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .czd-s2 .cz-ai-num {
            margin-left: auto;
            margin-right: auto;
        }

        /* 03: Move & Transport */
        .czd-s3 .cz-ai-info {
            left: 124%;
            top: 2%;
            transform: translateY(-50%);
            text-align: left;
            width: 210px;
        }

        /* 04: Track & Visibility */
        .czd-s4 .cz-ai-info {
            left: 118%;
            top: 50%;
            transform: translateY(-50%);
            text-align: left;
            width: 210px;
        }

        /* 05: Store & Fulfil */
        .czd-s5 .cz-ai-info {
            top: 30%;
            left: 230%;
            transform: translateX(-50%);
            text-align: left;
        }

        .czd-s5 .cz-ai-num {
            margin-left: auto;
            margin-right: auto;
        }

        /* 06: Bill & Audit */
        .czd-s6 .cz-ai-info {
            top: 38%;
            left: -51%;
            transform: translateX(-50%);
            text-align: left;
        }

        .czd-s6 .cz-ai-num {
            margin-left: auto;
            margin-right: auto;
        }

        /* 07: Report & Improve */
        .czd-s7 .cz-ai-info {
            right: 110%;
            top: 42%;
            transform: translateY(-50%);
            text-align: left;
            width: 210px;
        }

        .czd-s7 .cz-ai-num {
            margin-left: auto;
        }

        /* ── per-colour accents ── */
        .cz-blue {
            --cz-ai-ring: #2f73ff;
        }

        .cz-green {
            --cz-ai-ring: #2faa3f;
        }

        .cz-purple {
            --cz-ai-ring: #8b47ff;
        }

        .cz-orange {
            --cz-ai-ring: #ff7a18;
        }

        .cz-teal {
            --cz-ai-ring: #12b3a6;
        }

        .cz-amber {
            --cz-ai-ring: #f5a700;
        }

        .cz-blue .cz-ai-num,
        .cz-blue .cz-ai-info h3 {
            background: #2f73ff;
        }

        .cz-green .cz-ai-num,
        .cz-green .cz-ai-info h3 {
            background: #2faa3f;
        }

        .cz-purple .cz-ai-num,
        .cz-purple .cz-ai-info h3 {
            background: #8b47ff;
        }

        .cz-orange .cz-ai-num,
        .cz-orange .cz-ai-info h3 {
            background: #ff7a18;
        }

        .cz-teal .cz-ai-num,
        .cz-teal .cz-ai-info h3 {
            background: #12b3a6;
        }

        .cz-amber .cz-ai-num,
        .cz-amber .cz-ai-info h3 {
            background: #f5a700;
        }

        /* h3 should be coloured TEXT, not a coloured block — undo the background */
        .cz-ai-info h3 {
            background: none !important;
        }

        .cz-blue .cz-ai-info h3 {
            color: #2f73ff;
        }

        .cz-green .cz-ai-info h3 {
            color: #2faa3f;
        }

        .cz-purple .cz-ai-info h3 {
            color: #8b47ff;
        }

        .cz-orange .cz-ai-info h3 {
            color: #ff7a18;
        }

        .cz-teal .cz-ai-info h3 {
            color: #12b3a6;
        }

        .cz-amber .cz-ai-info h3 {
            color: #f5a700;
        }

        /* ── pedestal positions on the road (match the SVG nodes) ── */
        .czd-s1 {
            left: 30%;
            top: 33%;
        }

        /* Quote & Contract   */
        .czd-s2 {
            left: 50%;
            top: 38%;
        }

        /* Plan & Schedule    */
        .czd-s3 {
            left: 70%;
            top: 33%;
        }

        /* Move & Transport   */
        .czd-s4 {
            left: 76%;
            top: 60%;
        }

        /* Track & Visibility */
        .czd-s5 {
            left: 64%;
            top: 86%;
        }

        /* Store & Fulfil     */
        .czd-s6 {
            left: 38%;
            top: 88%;
        }

        /* Bill & Audit       */
        .czd-s7 {
            left: 24%;
            top: 62%;
        }

        /* Report & Improve   */

        /* ============================================================
           Responsive — collapse the loop into a vertical timeline
           ============================================================ */
        @media (max-width: 1100px) {
            body {
                display: block;
                min-height: auto;
                /* padding: 34px 16px; */
            }

            .cz-ai-wrap {
                width: 100%;
                max-width: 640px;
                aspect-ratio: auto;
                container-type: normal;
            }

            .cz-ai-road {
                display: none;
            }

            .cz-ai-center {
                position: static;
                transform: none;
                width: 100%;
                margin: 0 auto 46px;
            }

            .cz-ai-center h2 {
                font-size: clamp(28px, 7vw, 46px);
            }

            .cz-ai-center p {
                font-size: clamp(17px, 4.5vw, 26px);
            }

            .cz-ai-dots {
                gap: 9px;
                margin-top: 22px;
            }

            .cz-ai-dots span {
                width: 12px;
                height: 12px;
            }

            .cz-ai-dots i {
                width: 24px;
                height: 3px;
            }

            .cz-ai-step {
                position: static !important;
                transform: none !important;
                width: 100%;
                height: auto;
                display: flex;
                align-items: center;
                gap: 24px;
                margin: 0 0 34px;
            }

            .cz-ai-pedestal {
                flex: 0 0 112px;
                width: 112px;
                height: 112px;
                font-size: 46px;
                box-shadow:
                    0 14px 22px -8px var(--cz-ai-ring),
                    inset 0 -8px 14px rgba(0, 0, 0, .12),
                    inset 0 6px 11px rgba(255, 255, 255, .75);
            }

            .cz-ai-pedestal::after {
                inset: 11px;
            }

            .cz-ai-info {
                position: static !important;
                transform: none !important;
                width: auto !important;
                text-align: left !important;
            }

            .cz-ai-num {
                width: 46px;
                height: 38px;
                font-size: 16px;
                border-radius: 11px;
                margin: 0 0 8px 0 !important;
            }

            .cz-ai-info h3 {
                font-size: 22px;
                margin-bottom: 8px;
            }

            .cz-ai-info p {
                font-size: 16px;
            }
        }

        /* Portrait and Landscape (1024x1366) */
        @media only screen and (min-device-width: 1024px) and (max-device-width: 1366px) and (-webkit-min-device-pixel-ratio: 2) {
            .cz-journey-center h2 {
                font-weight: 500;
                font-size: 38px;
                margin-bottom: 25px;
            }

            .accordion-style-one-item button.accordion-button:not(.collapsed) {
                background: var(--dark-secondary);
                color: var(--white);
                padding: 15px 30px;
                border-radius: 0;
                border: none;
            }

            .accordion-style-one-item button.accordion-button {
                box-shadow: none;
                padding: 25px 30px;
                font-size: 15px;
                border: 1px solid #d7d7ff;
                background: transparent;
                border-radius: 10px;
                padding-right: 85px;
                line-height: 1.4;
            }

            p {
                font-size: 12px;
                font-weight: 400;
            }

            .cz-journey-center h2 {
                font-weight: 500;
                font-size: 28px;
                margin-bottom: 25px;
            }
        }

        /* Portrait and Landscape (834x1194) */
        @media only screen and (min-device-width: 834px) and (max-device-width: 1194px) and (-webkit-min-device-pixel-ratio: 2) {
            .cz-journey-center h2 {
                font-weight: 500;
                font-size: 38px;
                margin-bottom: 25px;
            }

            .accordion-style-one-item button.accordion-button:not(.collapsed) {
                background: var(--dark-secondary);
                color: var(--white);
                padding: 15px 30px;
                border-radius: 0;
                border: none;
            }

            .accordion-style-one-item button.accordion-button {
                box-shadow: none;
                padding: 25px 30px;
                font-size: 15px;
                border: 1px solid #d7d7ff;
                background: transparent;
                border-radius: 10px;
                padding-right: 85px;
                line-height: 1.4;
            }

            p {
                font-size: 12px;
                font-weight: 400;
            }
        }


        @media (max-width: 480px) {
            .cz-ai-step {
                gap: 16px;
                margin-bottom: 26px;
            }

            .cz-ai-pedestal {
                flex: 0 0 84px;
                width: 84px;
                height: 84px;
                font-size: 36px;
            }

            .cz-ai-pedestal::after {
                inset: 8px;
            }

            .cz-ai-num {
                width: 40px;
                height: 33px;
                font-size: 14px;
            }

            .cz-ai-info h3 {
                font-size: 18px;
            }

            .cz-ai-info p {
                font-size: 14px;
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
        <!-- Start AI-Powered Intelligence Loop
    ============================================= -->
        <section class="cz-ai-section">

            <div class="cz-ai-wrap">

                <!-- winding road -->
                <svg class="cz-ai-road" viewBox="0 0 1500 860" fill="none" preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <filter id="czRoadShadow" x="-10%" y="-10%" width="120%" height="120%">
                            <feDropShadow dx="0" dy="10" stdDeviation="12" flood-color="#000" flood-opacity="0.08" />
                        </filter>
                    </defs>

                    <!-- road centreline path (shared by all strokes) -->
                    <g filter="url(#czRoadShadow)">
                        <path id="czRoadPath"
                            d="M 450 284
                           C 560 225, 650 282, 750 326
                           C 850 282, 940 225, 1050 284
                           C 1150 320, 1190 425, 1140 516
                           C 1098 618, 1075 702, 960 738
                           C 815 780, 705 775, 570 757
                           C 458 742, 360 650, 360 532
                           C 360 430, 360 338, 450 284 Z"
                            stroke="#eceef2" stroke-width="52" stroke-linejoin="round" stroke-linecap="round" />
                        <use href="#czRoadPath" stroke="#ffffff" stroke-width="50" stroke-linejoin="round" stroke-linecap="round" />
                        <use href="#czRoadPath" stroke="#cdd5e1" stroke-width="2.5" stroke-dasharray="3 17"
                            stroke-linecap="round" />
                    </g>

                    <!-- directional chevrons along the road -->
                    <g fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round">
                        <g transform="translate(600 266) rotate(20)" stroke="#2f73ff">
                            <path d="M-15 -12 L-3 0 L-15 12" />
                            <path d="M2-12 L14 0 L2 12" />
                        </g>
                        <g transform="translate(905 260) rotate(-28)" stroke="#8b47ff">
                            <path d="M-15 -12 L-3 0 L-15 12" />
                            <path d="M2-12 L14 0 L2 12" />
                        </g>
                        <g transform="translate(1158 390) rotate(74)" stroke="#ff7a18">
                            <path d="M-15 -12 L-3 0 L-15 12" />
                            <path d="M2-12 L14 0 L2 12" />
                        </g>
                        <g transform="translate(1068 658) rotate(142)" stroke="#12b3a6">
                            <path d="M-15 -12 L-3 0 L-15 12" />
                            <path d="M2-12 L14 0 L2 12" />
                        </g>
                        <g transform="translate(760 768) rotate(182)" stroke="#f5a700">
                            <path d="M-15 -12 L-3 0 L-15 12" />
                            <path d="M2-12 L14 0 L2 12" />
                        </g>
                        <g transform="translate(415 672) rotate(228)" stroke="#2f73ff">
                            <path d="M-15 -12 L-3 0 L-15 12" />
                            <path d="M2-12 L14 0 L2 12" />
                        </g>
                        <g transform="translate(370 390) rotate(292)" stroke="#2f73ff">
                            <path d="M-15 -12 L-3 0 L-15 12" />
                            <path d="M2-12 L14 0 L2 12" />
                        </g>
                    </g>
                </svg>

                <!-- center title -->
                <div class="cz-ai-center">
                    <h2>AI-Powered Intelligence</h2>
                    <p>For Every Supply Chain Operation</p>
                    <div class="cz-ai-dots">
                        <span style="background:#2f73ff"></span><i></i>
                        <span style="background:#2faa3f"></span><i></i>
                        <span style="background:#8b47ff"></span><i></i>
                        <span style="background:#ff7a18"></span><i></i>
                        <span style="background:#f5a700"></span>
                    </div>
                </div>

                <!-- 01 -->
                <div class="cz-ai-step czd-s1 cz-blue cz-left">
                    <div class="cz-ai-pedestal"><span>📝</span></div>
                    <div class="cz-ai-info">
                        <span class="cz-ai-num">01</span>
                        <h3>Quote &amp; Contract</h3>
                        <p>AI-driven pricing, dynamic contracts, and seamless onboarding</p>
                    </div>
                </div>

                <!-- 02 -->
                <div class="cz-ai-step czd-s2 cz-green cz-up">
                    <div class="cz-ai-pedestal"><span>🗓️</span></div>
                    <div class="cz-ai-info">
                        <span class="cz-ai-num">02</span>
                        <h3>Plan &amp; Schedule</h3>
                        <p>Smart planning, predictive carrier selection, and demand forecasting</p>
                    </div>
                </div>

                <!-- 03 -->
                <div class="cz-ai-step czd-s3 cz-purple cz-right">
                    <div class="cz-ai-pedestal"><span>🚚</span></div>
                    <div class="cz-ai-info">
                        <span class="cz-ai-num">03</span>
                        <h3>Move &amp; Transport</h3>
                        <p>Connected TMS, real-time orchestration, and automated dispatch</p>
                    </div>
                </div>

                <!-- 04 -->
                <div class="cz-ai-step czd-s4 cz-orange cz-right">
                    <div class="cz-ai-pedestal"><span>📍</span></div>
                    <div class="cz-ai-info">
                        <span class="cz-ai-num">04</span>
                        <h3>Track &amp; Visibility</h3>
                        <p>Live tracking, AI ETAs, and proactive issue detection</p>
                    </div>
                </div>

                <!-- 05 -->
                <div class="cz-ai-step czd-s5 cz-teal cz-down">
                    <div class="cz-ai-pedestal"><span>🏬</span></div>
                    <div class="cz-ai-info">
                        <span class="cz-ai-num">05</span>
                        <h3>Store &amp; Fulfil</h3>
                        <p>Intelligent routing, automated fulfilment, and real-time inventory sync</p>
                    </div>
                </div>

                <!-- 06 -->
                <div class="cz-ai-step czd-s6 cz-amber cz-down">
                    <div class="cz-ai-pedestal"><span>🧾</span></div>
                    <div class="cz-ai-info">
                        <span class="cz-ai-num">06</span>
                        <h3>Bill &amp; Audit</h3>
                        <p>Automated invoicing, freight audit, and accurate billing workflows</p>
                    </div>
                </div>

                <!-- 07 -->
                <div class="cz-ai-step czd-s7 cz-blue cz-left">
                    <div class="cz-ai-pedestal"><span>📈</span></div>
                    <div class="cz-ai-info">
                        <span class="cz-ai-num">07</span>
                        <h3>Report &amp; Improve</h3>
                        <p>Real-time insights, anomaly detection, and continuous optimization</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End AI-Powered Intelligence Loop -->
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
        if ($this->uri->segment(1) == "services") {
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
    <?php }
    } ?>
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

        // $blogs = $this->home_model->getlatestcasesbyservice($serviceid, 1);
        $blogs = $this->home_model->getlatestblogs(1, 4);
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