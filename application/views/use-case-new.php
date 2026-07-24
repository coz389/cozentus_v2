<?php
if (!empty($image)) {
    $banner = base_url('uploads/images/' . $image);
} else {
    $banner = base_url('assets/img/shape/banner-13.jpg');
}
$banner2 = base_url('assets/img/shape/banner-9.jpg');
?>
<style>
    /* ═══════════════════════════════════════════════════════════
   client-story.html — Royal London Group case study
   (matches the RLG layout: strip → head → hero → glance →
    challenge → approach → outcomes → download)
   ═══════════════════════════════════════════════════════════ */

    /* Case Study strip */
    .cz-cs-strip {
        position: relative;
        background-color: #0a1f45;
        padding: 130px 0 34px;
    }

    .cz-cs-strip::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(8, 24, 56, .92) 0%, rgba(8, 24, 56, .55) 100%);
    }

    .cz-cs-strip .container {
        position: relative;
        z-index: 1;
    }

    .cz-cs-strip h4 {
        color: #fff;
        font-size: 30px;
        font-weight: 700;
        margin: 0;
    }

    /* Title / meta head */
    .cz-cs-head {
        padding: 40px 0 46px;
    }

    .cz-cs-head-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 20px;
    }

    .cz-cs-date {
        font-size: 14px;
        color: #8a97ad;
        font-weight: 500;
    }

    .cz-cs-share {
        display: flex;
        gap: 10px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-cs-share a {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        color: #4a5a75;
        background: #eef2f7;
        transition: all .25s ease;
    }

    .cz-cs-share a:hover {
        background: #2f73ff;
        color: #fff;
    }

    .cz-cs-title {
        font-size: 42px;
        font-weight: 800;
        line-height: 1.18;
        color: #10192d;
        margin: 0 0 16px;
    }

    .cz-cs-sub {
        font-size: 18px;
        line-height: 1.6;
        color: #6b7280;
        /* max-width: 920px; */
        margin: 0;
    }

    /* Hero image */
    .cz-cs-hero img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* At a glance (dark) */
    .cz-glance {
        background: #0b1f45 !important;
    }

    .cz-glance-title {
        color: #fff;
        font-size: 36px;
        font-weight: 800;
        margin-bottom: 36px;
    }

    .cz-glance-item {
        margin-bottom: 30px;
    }

    .cz-glance-item:last-child {
        margin-bottom: 0;
    }

    .cz-glance-item>span {
        display: block;
        font-size: 17px;
        font-weight: 700;
        color: #4a90ff;
        margin-bottom: 8px;
    }

    .cz-glance-item>p {
        font-size: 15.5px;
        line-height: 1.7;
        color: rgba(255, 255, 255, .82);
        margin: 0;
        max-width: 520px;
    }

    .cz-glance-highlights {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-glance-highlights li {
        font-size: 15.5px;
        line-height: 1.7;
        color: rgba(255, 255, 255, .82);
        margin-bottom: 16px;
        max-width: 520px;
        position: relative;
        padding-left: 26px;
    }

    .cz-glance-highlights li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 9px;
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: #4a90ff;
        box-shadow: 0 0 0 4px rgba(74, 144, 255, .2);
    }

    .cz-glance-highlights li:last-child {
        margin-bottom: 0;
    }

    /* Challenge / Approach / Outcomes sections */
    .cz-cs-photo img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
        box-shadow: 0 24px 50px -22px rgba(13, 35, 75, .28);
    }

    .cz-cs-text {
        padding: 0 24px;
    }

    .cz-cs-h2 {
        font-size: 40px;
        font-weight: 700;
        color: #10192d;
        margin-bottom: 22px;
    }

    .cz-cs-text p {
        font-size: 16.5px;
        line-height: 1.8;
        color: #56617a;
        margin: 0 0 18px;
    }

    .cz-cs-h5 {
        font-size: 18px;
        font-weight: 700;
        color: #10192d;
        margin: 26px 0 12px;
    }

    .cz-cs-lines {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-cs-lines li {
        font-size: 16px;
        line-height: 1.7;
        color: #56617a;
        margin-bottom: 14px;
        padding-left: 36px;
        position: relative;
    }

    .cz-cs-lines li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 3px;
        width: 23px;
        height: 23px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2f73ff, #6f4cff);
        box-shadow: 0 6px 14px -5px rgba(47, 115, 255, .55);
    }

    .cz-cs-lines li::after {
        content: "";
        position: absolute;
        left: 8.5px;
        top: 8px;
        width: 5px;
        height: 9px;
        border: solid #fff;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .cz-outcome-list {
        list-style: none;
        margin: 0 0 30px;
        padding: 0;
    }

    .cz-outcome-list li {
        font-size: 16.5px;
        line-height: 1.7;
        color: #56617a;
        margin-bottom: 18px;
        padding-left: 42px;
        position: relative;
    }

    .cz-outcome-list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 2px;
        width: 27px;
        height: 27px;
        border-radius: 50%;
        background: linear-gradient(135deg, #21b573, #34c759);
        box-shadow: 0 6px 14px -5px rgba(33, 181, 115, .55);
    }

    .cz-outcome-list li::after {
        content: "";
        position: absolute;
        left: 10px;
        top: 7px;
        width: 6px;
        height: 11px;
        border: solid #fff;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .cz-outcome-list strong {
        color: #10192d;
    }

    .cz-outcome-stat {
        display: inline-flex;
        align-items: baseline;
        gap: 12px;
        padding: 18px 26px;
        background: linear-gradient(135deg, rgba(47, 115, 255, .1), rgba(111, 76, 255, .08));
        border-left: 4px solid #2f73ff;
        border-radius: 0 12px 12px 0;
    }

    .cz-outcome-stat h3 {
        font-size: 34px;
        font-weight: 800;
        margin: 0;
        background: linear-gradient(135deg, #2f73ff, #6f4cff);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .cz-outcome-stat span {
        font-size: 15px;
        color: #56617a;
        font-weight: 600;
    }

    /* Download */
    .cz-cs-download {
        padding: 44px 0 90px;
    }

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

    .cz-case-quote cite {
        display: block;
        margin-top: 14px;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        color: #0c1b3a;
    }

    /* responsive */
    @media (max-width: 991px) {
        .cz-cs-title {
            font-size: 32px;
        }

        .cz-cs-h2 {
            font-size: 30px;
        }

        .cz-cs-text {
            padding: 30px 0 0;
        }

        .cz-glance-title {
            font-size: 30px;
        }
    }

    @media (max-width: 575px) {
        .cz-cs-strip {
            padding: 110px 0 26px;
        }

        .cz-cs-strip h4 {
            font-size: 24px;
        }

        .cz-cs-head-top {
            flex-direction: column;
            align-items: flex-start;
        }

        .cz-cs-title {
            font-size: 26px;
        }

        .cz-cs-sub {
            font-size: 16px;
        }
    }

    /* ═══════════════════════════════════════════════════════════
   client-story.html — Related Case Studies (4 columns)
   ═══════════════════════════════════════════════════════════ */
    .cz-related {
        background: #f6f8fc;
    }

    .cz-related-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 40px;
    }

    .cz-related-head .cz-cs-h2 {
        margin-bottom: 0;
    }

    .cz-related-card {
        background: #fff;
        border: 1px solid #eef0f4;
        border-radius: 16px;
        overflow: hidden;
        height: 100%;
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .cz-related-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 24px 44px -20px rgba(13, 35, 75, .28);
    }

    .cz-related-thumb {
        position: relative;
        overflow: hidden;
    }

    .cz-related-thumb img {
        width: 100%;
        height: 190px;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .cz-related-card:hover .cz-related-thumb img {
        transform: scale(1.06);
    }

    .cz-related-tag {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(12, 27, 58, .82);
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .3px;
        padding: 6px 13px;
        border-radius: 30px;
        backdrop-filter: blur(4px);
    }

    .cz-related-body {
        padding: 22px 22px 26px;
    }

    .cz-related-body h4 {
        font-size: 18px;
        font-weight: 700;
        line-height: 1.4;
        margin: 0 0 16px;
    }

    .cz-related-body h4 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-related-body h4 a:hover {
        color: #2f73ff;
    }

    .cz-related-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 700;
        color: #2f73ff;
    }

    .cz-related-link i {
        transition: transform .25s ease;
    }

    .cz-related-link:hover i {
        transform: translateX(4px);
    }

    @media (max-width: 991px) {
        .cz-related-card {
            margin-bottom: 24px;
        }
    }

    @media (max-width: 575px) {
        .cz-related-head {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    /* Business Outcomes: Download button under the 4.2 hours stat */
    .cz-outcome-download {
        margin-top: 28px;
    }

    /* client-story.html — shorter breadcrumb banner (top/bottom 100px) */
    .cz-breadcrumb-sm {
        padding-top: 100px !important;
        padding-bottom: 100px !important;
    }
</style>
<!-- <div class="breadcrumb-area text-center bg-cover text-dark bg-theme" style="background-image: url(<?= $banner ?>);">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1><?= $title ?></h1>
            </div>
        </div>
    </div>
</div> -->
<!-- End Breadcrumb -->



<div id="smooth-content">
    <!-- Title / meta -->
    <div class="cz-cs-head bg-gray bg-cover">
        <div class="container">
            <div class="cz-cs-head-top">
                <span class="cz-cs-date">Updated Date: <?= date('d F Y', strtotime($posted)) ?></span>
                <ul class="cz-cs-share">
                    <li><a href="javascript:void(0)" onclick="link_click()" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="javascript:void(0)" onclick="link_click()" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="javascript:void(0)" onclick="link_click()" aria-label="X">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14" height="14" fill="currentColor" style="vertical-align: middle;">
                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg>
                        </a></li>
                </ul>
            </div>
            <h1 class="cz-cs-title"><?= html_entity_decode($top_left_heading) ?></h1>
            <p class="cz-cs-sub"><?= html_entity_decode($short_description_left) ?></p>
        </div>
    </div>

    <!-- Hero image -->
    <?php if (!empty($section_5_image)) { ?>
        <div class="cz-cs-hero">
            <img src="<?= base_url('uploads/images/') . $section_5_image ?>" alt="<?= !empty($section_5_image) ? $section_5_image : 'Use Case Banner' ?>">
        </div>
    <?php } ?>

    <!-- At a glance -->
    <?php if (!empty($section_5_heading)) { ?>
        <div class="cz-glance default-padding bg-dark text-light">
            <div class="container">
                <h2 class="cz-glance-title"><?= $section_5_heading ?></h2>
                <div class="row">
                    <div class="col-lg-6 cz-glance-col">
                        <?php if (!empty($section_5_left))
                            foreach ($section_5_left as $sec5l) {
                        ?>
                            <div class="cz-glance-item">
                                <span><?= $sec5l['heading'] ?></span>
                                <p> <?= html_entity_decode($sec5l['description']) ?></p>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="col-lg-6 cz-glance-col">
                        <?php if (!empty($section_5_right))
                            foreach ($section_5_right as $sec5r) {
                        ?>
                            <div class="cz-glance-item">
                                <span><?= $sec5r['heading'] ?></span>
                                <div class="cz-glance-highlights"><?= html_entity_decode($sec5r['description']) ?></div>

                                <!-- <ul class="cz-glance-highlights">
                                    <li>Review time reduced by 4.2 hours per asset, accelerating delivery and freeing up
                                        time to focus on strategic initiatives.</li>
                                    <li>Scalable and cost-effective deployment, with plans to integrate into core content
                                        platforms.</li>
                                    <li>Human-in-the-loop governance ensured ethical and regulatory alignment throughout.</li>
                                </ul> -->
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- The Challenge -->
    <?php if (!empty($section_2_heading)) { ?>
        <div class="cz-cs-sec default-padding bg-gray">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="cz-cs-photo"><img src="<?= base_url('uploads/images/') . $section_2_image ?>" alt="Our Focus"></div>
                    </div>
                    <div class="col-lg-7 cz-cs-text">
                        <h2 class="cz-cs-h2"><?= $section_2_heading ?></h2>
                        <p><?= html_entity_decode($section_2_json) ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!-- Our Approach -->
    <?php if (!empty($section_3_heading)) { ?>
        <div class="cz-cs-sec default-padding">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-7 cz-cs-text order-lg-1 order-2">
                        <h2 class="cz-cs-h2"><?= $section_3_heading ?></h2>
                        <div class="cz-cs-lines"> <?= html_entity_decode($section_3_json) ?></div>

                    </div>
                    <div class="col-lg-5 order-lg-2 order-1">
                        <div class="cz-cs-photo"><img src="<?= base_url('uploads/images/') . $section_3_image ?>" alt="Our Approach"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Business Outcomes -->
    <?php if (!empty($section_4_heading)) { ?>
        <div class="cz-cs-sec default-padding bg-gray">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="cz-cs-photo"><img src="<?= base_url('uploads/images/') . $section_4_image ?>" alt="Business Outcomes"></div>
                    </div>
                    <div class="col-lg-7 cz-cs-text">
                        <h2 class="cz-cs-h2"><?= $section_4_heading ?></h2>
                        <div class="cz-cs-lines">
                            <?= html_entity_decode($section_4_json) ?>
                        </div>
                        <!-- <ul class="cz-outcome-list">
                            <li><strong>Review time reduced by 4.2 hours per asset,</strong> accelerating delivery and
                                freeing up time to focus on strategic initiatives.</li>
                            <li><strong>Scalable and cost-effective deployment,</strong> with plans to integrate into
                                core content platforms.</li>
                            <li><strong>Human-in-the-loop governance</strong> ensured ethical and regulatory alignment
                                throughout.</li>
                        </ul> -->
                        <!-- <div class="cz-outcome-stat">
                            <h3>4.2 hours</h3>
                            <span>reduced per asset review time</span>
                        </div> -->
                        <!-- <div class="cz-outcome-download">
                            <a href="#" class="btn btn-style-one" data-bs-toggle="modal"
                                data-bs-target="#contactModal">Download PDF <i class="fas fa-arrow-right"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if (!empty($client_review_heading)) { ?>
        <div class="cz-cs-sec default-padding-2" style="background-image: url(<?= $banner2 ?>);">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-12 cz-cs-text mx-auto">

                        <blockquote class="cz-case-quote">
                            <h4 style="font-style: normal;"><?= $client_review_heading ?></h4>
                            <i class="fas fa-quote-left"></i>
                            <?= html_entity_decode($client_review_desc) ?>
                            <i class="fas fa-quote-right"></i>
                            <br>
                            <cite><?= $client_designation ?></cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- End Business Outcomes -->

    <?php
    if (!empty($pserv)) {
        $blogs = $this->home_model->getlatestblogs(3, 4);
    } else {
        $blogs = $this->home_model->getlatestblogs(1, 4);
    }
    if (!empty($blogs)): ?>
        <div class="home-blog-area default-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right">Related Case Studies</h2>
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

    <!-- Call to Action
    ============================================= -->
    <div class="home-blog-two-area default-padding-2">
        <div class="container">
            <div class="blog-style-two-box bg-dark" styles="background-image: url(<?= base_url('assets/img/shape/10.png') ?>); background-size: cover;">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-box text-center fade-up-anim">
                            <h2 class="cta-title mb-20">Ready to Transform Your Supply Chain?</h2>
                            <p class="cta-description mb-30">
                                Let's discuss how our AI-powered solutions can help you optimize operations and drive measurable results. Our team is ready to understand your unique challenges.
                            </p>
                            <div class="cta-buttons d-flex  flex-column flex-md-row justify-content-center gap-4">
                                <a class="btn btn-style-one btn-border mb-2" href="<?= base_url('book-free-consultation') ?>">
                                    Book a Meeting <i class="fas fa-arrow-right"></i>
                                </a>
                                <a class="btn btn-style-one mb-2" href="<?= base_url('contact') ?>">
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
<!-- End Blog -->

<div class="modal fade"
    id="contactModal"
    tabindex="-1"
    aria-labelledby="contactModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h3 class="modal-title" id="contactModalLabel">
                    <?= $type == 3 ? "Download" : "Get <span>In Touch</span>" ?>
                </h3>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <!-- Body -->
            <div class="modal-body">
                <div class="row">
                    <!-- Left Side -->
                    <div class="col-lg-12">
                        <form data-form="insertcontact" id="contactForm" data-aos="fade-right" data-aos-duration="1000" class="contact-form-custom" <?= !empty($download) ? "data-download='" . base_url('uploads/pdf/') . $download . "' data-file-name='" . $download . "'" : '' ?>>
                            <div class="row">
                                <div class="col-lg-12  mb-3">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6  mb-3">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6  mb-3">
                                    <div class="form-group">
                                        <input class="form-control" id="organisation" name="organisation" placeholder="Organisation" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6  mb-3">
                                    <div class="form-group">
                                        <input class="form-control" id="employees" name="employees" placeholder="Designation" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12  mb-3">
                                    <div class="form-group">
                                        <select name="service" id="interested" class="form-control">
                                            <option value="">Select Service</option>
                                            <?php if (!empty($pservcont)) foreach ($pservcont as $ser) {
                                                echo "<option value='" . $ser['name'] . "'>" . $ser['name'] . "</option>";
                                            } ?>
                                        </select>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12  mb-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="privacy_policy" id="agree">
                                        <label for="agree">&nbsp;&nbsp;I agree to the
                                            Cozentus Privacy Policy (<a
                                                href="<?= base_url('privacy-statement') ?>">Privacy
                                                Statement</a>)</label>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Google ReCAPTCHA -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="<?= $recaptcha_site_key ?>"></div>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification mb-3" role="alert">
                                <div id="message" class="alert-msg text-danger"></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-style-one" type="submit" id="submitBtn" data-aos="fade-up" data-aos-duration="1200">
                                        <?= $type == 3 ? "Download PDF" : "Submit" ?> <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById("contactForm");
        const downloadUrl = form.dataset.download;

        // Helper to grab the error span relative to the form group
        const getErrorSpan = (element) => {
            if (!element) return null;
            const group = element.closest(".form-group");
            return group ? group.querySelector(".alert-error") : null;
        };

        form.addEventListener("submit", function(event) {
            event.preventDefault();
            event.stopImmediatePropagation();

            let isValid = true;

            // 1. Validate Name
            const nameInput = document.getElementById("name");
            const nameError = getErrorSpan(nameInput);
            if (nameError) {
                if (nameInput.value.trim().length < 3) {
                    nameError.textContent = "Name must be at least 3 characters.";
                    nameInput.classList.add("error");
                    nameInput.classList.remove("valid");
                    isValid = false;
                } else {
                    nameError.textContent = "";
                    nameInput.classList.remove("error");
                    nameInput.classList.add("valid");
                }
            }

            // 2. Validate Email
            const emailInput = document.getElementById("email");
            const emailError = getErrorSpan(emailInput);
            if (emailError) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const emailValue = emailInput.value.trim();
                if (!emailRegex.test(emailValue)) {
                    emailError.textContent = "Please enter a valid email address.";
                    emailInput.classList.add("error");
                    emailInput.classList.remove("valid");
                    isValid = false;
                } else {
                    // Pre-check for blocked domains to give instant corporate email feedback
                    const domain = emailValue.split("@")[1]?.toLowerCase();
                    const blockedDomains = ["gmail.com", "gmail.in", "gmail.net", "gmail.org", "gmail.info", "gmail.edu", "yahoo.com", "outlook.com", "aol.com", "icloud.com", "zoho.com", "protonmail.com", "mail.com", "gmx.com", "yandex.com"];
                    if (blockedDomains.includes(domain)) {
                        emailError.textContent = "Please enter a business or corporate email address.";
                        emailInput.classList.add("error");
                        emailInput.classList.remove("valid");
                        isValid = false;
                    } else {
                        emailError.textContent = "";
                        emailInput.classList.remove("error");
                        emailInput.classList.add("valid");
                    }
                }
            }
            /*
            // 3. Validate Phone (Optional, but digits only if entered)
            const phoneInput = document.getElementById("phone");
            const phoneError = getErrorSpan(phoneInput);
            if (phoneError) {
                const phoneValue = phoneInput.value.trim();
                if (phoneValue !== "" && !/^\d+$/.test(phoneValue)) {
                    phoneError.textContent = "Phone number must contain digits only.";
                    phoneInput.classList.add("error");
                    phoneInput.classList.remove("valid");
                    isValid = false;
                } else {
                    phoneError.textContent = "";
                    phoneInput.classList.remove("error");
                    if (phoneValue !== "") {
                        phoneInput.classList.add("valid");
                    }
                }
            }

            // 4. Validate Service Dropdown
            const serviceSelect = document.getElementById("interested");
            const serviceError = getErrorSpan(serviceSelect);
            if (serviceError) {
                if (serviceSelect.value === "") {
                    serviceError.textContent = "Please select a service.";
                    serviceSelect.classList.add("error");
                    serviceSelect.classList.remove("valid");
                    isValid = false;
                } else {
                    serviceError.textContent = "";
                    serviceSelect.classList.remove("error");
                    serviceSelect.classList.add("valid");
                }
            }
            */
            // 5. Validate Privacy Checkbox
            const agreeInput = document.getElementById("agree");
            const agreeError = getErrorSpan(agreeInput);
            if (agreeError) {
                if (!agreeInput.checked) {
                    agreeError.textContent = "You must agree to the privacy policy.";
                    isValid = false;
                } else {
                    agreeError.textContent = "";
                }
            }

            // 6. Validate Google ReCAPTCHA
            const recaptchaDiv = document.querySelector(".g-recaptcha");
            const recaptchaError = getErrorSpan(recaptchaDiv);
            if (recaptchaError) {
                if (typeof grecaptcha === "undefined" || grecaptcha.getResponse() === "") {
                    recaptchaError.textContent = "Please complete the CAPTCHA.";
                    isValid = false;
                } else {
                    recaptchaError.textContent = "";
                }
            }

            // 7. Perform Submission if everything is valid
            if (isValid) {
                const formData = new FormData(form);
                const submitBtn = document.getElementById("submitBtn");
                const messageDiv = document.getElementById("message");

                // Build absolute destination URL: base_url + data-form
                const contextUrl = typeof site_url !== "undefined" ? site_url : (typeof base_url !== "undefined" ? base_url : "/");
                const actionEndpoint = contextUrl + form.dataset.form;

                submitBtn.disabled = true;
                const originalBtnHtml = submitBtn.innerHTML;
                submitBtn.innerHTML = 'Sending... <i class="fas fa-spinner fa-spin"></i>';
                messageDiv.innerHTML = "";

                fetch(actionEndpoint, {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Network response was not ok");
                        }
                        return response.json();
                    })
                    .then(data => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHtml;

                        if (data.status) {
                            // Display styled success alert
                            messageDiv.innerHTML = data.msg || '<p class="alert alert-success">Form Submitted Successfully!</p>';
                            form.reset();
                            if (typeof grecaptcha !== "undefined") {
                                grecaptcha.reset();
                            }
                            // Remove validation classes
                            document.querySelectorAll(".form-control").forEach(el => el.classList.remove("valid", "error"));


                            setTimeout(() => {
                                if (downloadUrl) {
                                    const link = document.createElement("a");
                                    link.href = downloadUrl;
                                    link.download = form.dataset.fileName || "";
                                    document.body.appendChild(link);
                                    link.click();
                                    document.body.removeChild(link);

                                } else {
                                    window.location.href = contextUrl + "thankyou";
                                }

                            }, 1500);

                            // Redirect after short delay so user can read message
                            // setTimeout(() => {
                            //     window.location.href = contextUrl + "thankyou";
                            // }, 1500);
                        } else {
                            // Display server validation error
                            messageDiv.innerHTML = data.msg || '<p class="alert alert-warning">Please correct the inputs and try again.</p>';
                        }
                    })
                    .catch(error => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHtml;
                        messageDiv.innerHTML = '<p class="alert alert-danger">An error occurred during submission. Please try again.</p>';
                        console.error("Error submitting form:", error);
                    });
            }
        });
    });
</script>