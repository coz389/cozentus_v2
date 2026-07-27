<style>
    /* ═══════════════════════════════════════════════════════════
   reports.html — Reports, eBooks & Guides listing
   (intro → featured report → filterable grid → gated form → CTA)
   inspired by cozentus.com report pages
   ═══════════════════════════════════════════════════════════ */

    /* Intro */
    .cz-rep-intro {
        padding: 70px 0 50px;
    }

    .cz-rep-eyebrow {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        color: #2f73ff;
        margin-bottom: 14px;
    }

    .cz-rep-intro-title {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.2;
        color: #10192d;
        margin: 0 0 18px;
    }

    .cz-rep-intro-text {
        font-size: 17px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0;
    }

    /* Intro stat tiles */
    .cz-rep-stats {
        display: flex;
        gap: 18px;
    }

    .cz-rep-stat {
        flex: 1;
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 14px;
        padding: 24px 20px;
        text-align: center;
    }

    .cz-rep-stat h3 {
        font-size: 34px;
        font-weight: 800;
        color: #2f73ff;
        margin: 0 0 6px;
    }

    .cz-rep-stat span {
        font-size: 13.5px;
        line-height: 1.5;
        color: #6b7280;
    }

    /* Shared report cover — portrait document look with type ribbon */
    .cz-rep-cover {
        position: relative;
        display: block;
        border-radius: 12px;
        overflow: hidden;
        background: #0b1f45;
    }

    .cz-rep-cover img {
        width: 100%;
        aspect-ratio: 3/ 4 !important;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .cz-rep-cover::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(8, 24, 56, 0) 55%, rgba(8, 24, 56, .5) 100%);
    }

    .cz-rep-cover:hover img {
        transform: scale(1.05);
    }

    .cz-rep-cover-1 img {
        width: 100%;
        /* aspect-ratio: 5/ 4 !important; */
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    /* .cz-rep-cover-lg img {
        aspect-ratio: 3 / 4;
    } */

    .cz-rep-type {
        position: absolute;
        top: 14px;
        left: 14px;
        z-index: 2;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(8, 24, 56, .85);
        color: #fff;
        font-size: 12.5px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 6px;
    }

    .cz-rep-type i {
        color: #4a90ff;
    }

    /* Featured report */
    .cz-rep-featured {
        padding-bottom: 30px;
    }

    .cz-rep-featured-box {
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 18px;
        padding: 36px;
    }

    .cz-rep-featured-body {
        padding-left: 26px;
    }

    .cz-rep-badge {
        display: inline-block;
        background: #2f73ff;
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .8px;
        text-transform: uppercase;
        padding: 5px 12px;
        border-radius: 20px;
        margin-bottom: 14px;
    }

    .cz-rep-meta {
        display: block;
        font-size: 13.5px;
        color: #8a97ad;
        font-weight: 500;
        margin-bottom: 12px;
    }

    .cz-rep-meta i {
        color: #2f73ff;
        margin-right: 5px;
    }

    .cz-rep-featured-body h3 {
        font-size: 27px;
        font-weight: 800;
        line-height: 1.3;
        margin: 0 0 14px;
    }

    .cz-rep-featured-body h3 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-rep-featured-body h3 a:hover {
        color: #2f73ff;
    }

    .cz-rep-featured-body>p {
        font-size: 15.5px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0 0 20px;
    }

    .cz-rep-inside-title {
        font-size: 15px;
        font-weight: 700;
        color: #10192d;
        margin: 0 0 12px;
    }

    .cz-rep-inside {
        list-style: none;
        margin: 0 0 26px;
        padding: 0;
    }

    .cz-rep-inside li {
        position: relative;
        padding-left: 26px;
        font-size: 14.5px;
        line-height: 1.5;
        color: #4a5a75;
        margin-bottom: 9px;
    }

    .cz-rep-inside li::before {
        content: "\f00c";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 1px;
        font-size: 12px;
        color: #2f73ff;
    }

    /* Grid */
    .cz-rep-list-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 18px;
        margin-bottom: 38px;
    }

    .cz-rep-h2 {
        font-size: 34px;
        font-weight: 800;
        color: #10192d;
        margin: 0;
    }

    .cz-rep-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-rep-filter li {
        font-size: 14px;
        font-weight: 600;
        color: #4a5a75;
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 22px;
        padding: 8px 18px;
        cursor: pointer;
        transition: all .25s ease;
    }

    .cz-rep-filter li:hover {
        border-color: #2f73ff;
        color: #2f73ff;
    }

    .cz-rep-filter li.active {
        background: #2f73ff;
        border-color: #2f73ff;
        color: #fff;
    }

    /* wider row gap, tighter column gap (matches podcast grid feel) */
    .cz-rep-list .row {
        margin-left: -10px;
        margin-right: -10px;
        row-gap: 40px;
    }

    .cz-rep-col {
        padding-left: 10px;
        padding-right: 10px;
    }

    .cz-rep-card {
        background: #fff;
        border: 1px solid #e8edf5;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        transition: box-shadow .3s ease, transform .3s ease;
    }

    /* .cz-rep-card:hover {
        box-shadow: 0 18px 40px rgba(8, 24, 56, .1);
        transform: translateY(-4px);
    } */

    /* .cz-rep-card .cz-rep-cover {
        border-radius: 0;
    } */

    .cz-rep-body {
        padding: 22px 24px 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .cz-rep-tag {
        display: inline-block;
        align-self: flex-start;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .6px;
        text-transform: uppercase;
        color: #2f73ff;
        background: #eaf1ff;
        padding: 4px 11px;
        border-radius: 4px;
        margin-bottom: 12px;
    }

    .cz-rep-body h4 {
        font-size: 19px;
        font-weight: 700;
        line-height: 1.42;
        margin: 0 0 10px;
    }

    .cz-rep-body h4 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-rep-body h4 a:hover {
        color: #2f73ff;
    }

    .cz-rep-body>p {
        font-size: 14.5px;
        line-height: 1.65;
        color: #6b7280;
        margin: 0 0 18px;
    }

    .cz-rep-foot {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: auto;
        padding-top: 14px;
        border-top: 1px solid #eef2f7;
    }

    .cz-rep-pages {
        font-size: 13px;
        color: #8a97ad;
        font-weight: 500;
    }

    .cz-rep-pages i {
        margin-right: 5px;
        color: #b3bdcc;
    }

    .cz-rep-link {
        font-size: 14px;
        font-weight: 700;
        color: #2f73ff;
    }

    .cz-rep-link i {
        margin-left: 6px;
        font-size: 12px;
        transition: transform .25s ease;
    }

    .cz-rep-link:hover i {
        transform: translateY(2px);
    }

    .cz-rep-more {
        text-align: center;
        margin-top: 22px;
    }

    /* Gated download form */
    .cz-rep-download-box {
        background: #fff;
        border: 1px solid #e8edf5;
        border-radius: 18px;
        padding: 46px;
        box-shadow: 0 20px 50px rgba(8, 24, 56, .06);
    }

    .cz-rep-download-info h2 {
        font-size: 30px;
        font-weight: 800;
        color: #10192d;
        margin: 0 0 14px;
    }

    .cz-rep-download-info>p {
        font-size: 15.5px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0 0 22px;
    }

    .cz-rep-download-points {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-rep-download-points li {
        font-size: 14.5px;
        color: #33415c;
        margin-bottom: 10px;
    }

    .cz-rep-download-points i {
        color: #2f73ff;
        margin-right: 10px;
    }

    /* Form fields */
    .cz-rep-field {
        margin-bottom: 18px;
    }

    .cz-rep-field label {
        display: block;
        font-size: 13.5px;
        font-weight: 600;
        color: #33415c;
        margin-bottom: 7px;
    }

    .cz-rep-field label span {
        color: #ff4d4f;
    }

    .cz-rep-field input {
        width: 100%;
        height: 50px;
        border: 1px solid #e3e9f3;
        border-radius: 10px;
        padding: 0 16px;
        font-size: 14.5px;
        color: #10192d;
        background: #f9fbfe;
        transition: border-color .25s ease, box-shadow .25s ease;
    }

    .cz-rep-field input:focus {
        outline: none;
        border-color: #2f73ff;
        box-shadow: 0 0 0 3px rgba(47, 115, 255, .12);
        background: #fff;
    }

    .cz-rep-check {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin: 4px 0 22px;
    }

    .cz-rep-check input {
        margin-top: 3px;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        accent-color: #2f73ff;
    }

    .cz-rep-check label {
        font-size: 13.5px;
        line-height: 1.5;
        color: #6b7280;
    }

    .cz-rep-check a {
        color: #2f73ff;
        font-weight: 600;
    }

    .cz-rep-form .btn {
        width: 100%;
        justify-content: center;
    }

    /* responsive */
    @media (max-width: 991px) {
        .cz-rep-intro-title {
            font-size: 32px;
        }

        .cz-rep-stats {
            margin-top: 34px;
        }

        .cz-rep-featured-body {
            padding-left: 0;
            margin-top: 28px;
        }

        .cz-rep-h2 {
            font-size: 28px;
        }

        .cz-rep-download-box {
            padding: 32px;
        }

        .cz-rep-form {
            margin-top: 30px;
        }
    }

    @media (max-width: 575px) {
        .cz-rep-featured-box {
            padding: 20px;
        }

        .cz-rep-stats {
            flex-direction: column;
        }

        .cz-rep-list-head {
            flex-direction: column;
            align-items: flex-start;
        }

        .cz-rep-download-box {
            padding: 24px;
        }
    }

    .inner_content_li ul,
    .inner_content_li li {
        margin: 0;
        padding: 0;
        list-style: none !important;
    }

    .cz-rep-featured-body ul,
    .cz-rep-featured-body li {
        list-style: disc !important;
    }

    .btn i {
        font-weight: 400;
        transform: rotate(-45deg) !important;
        margin-left: 10px;
    }
</style>
<div id="smooth-content">

    <!-- Intro
        ============================================= -->
    <?php
    if (!empty($pserv['new_podcast_heading'])) {
        if (!empty($pserv['new_podcast_extra'])) {
            $new_podcast_extra_arr = json_decode($pserv['new_podcast_extra']);
        }
    ?>
        <div class="cz-rep-intro">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-7">
                        <span class="cz-rep-eyebrow"><?= $pserv['new_podcast_heading'] ?></span>
                        <!-- <h2 class="cz-rep-intro-title"><?= $pserv['new_podcast_title'] ?></h2> -->
                        <h2 class="cz-rep-intro-title"><?= $title ?></h2>
                        <p class="cz-rep-intro-text"><?= $pserv['new_podcast_desc'] ?></p>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="cz-rep-stats">
                            <?php if (count($new_podcast_extra_arr) > 0) {
                                foreach ($new_podcast_extra_arr as $new_podcast_extra) {
                            ?>
                                    <div class="cz-rep-stat">
                                        <h3><?= $new_podcast_extra->heading ?></h3>
                                        <span><?= $new_podcast_extra->description ?></span>
                                    </div>
                            <?php }
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Intro -->
    <!-- Featured report
        ============================================= -->

    <?php
    if (!empty($image)) {
        $image = $image;
    } else {
        $image = $thumbnail;
    }
    $tags_array = explode(",", $pserv['tags']);
    ?>
    <div class="cz-rep-featured">
        <div class="container">
            <div class="cz-rep-featured-box">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="cz-rep-cover cz-rep-cover-lg">
                            <img src="<?= base_url('uploads/images/' . $image) ?>" alt="<?= $title ?>">
                            <?php if (count($tags_array) >= 1) {
                                foreach ($tags_array as $tags) {
                            ?>
                                    <span class="cz-rep-type"> <?= $tags ?></span>

                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="col-lg-7 cz-rep-featured-body">
                        <span class="cz-rep-meta"><i class="far fa-file-alt"></i> <?= get_pdf_pages($download) ?> pages &nbsp;•&nbsp; <?= get_pdf_pages($download) ?> min
                            read </span>
                        <h3><a href="#cz-rep-download"><?= $pserv['new_podcast_title'] ?></a></h3>
                        <!-- <h3><a href="#cz-rep-download"><?= $title ?></a></h3> -->
                        <div><?= html_entity_decode($content) ?></div>

                        <a href="#cz-rep-download" class="btn btn-style-one mt-4">Download PDF <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured report -->

    <!-- All resources
        ============================================= -->
    <?php
    $latest_reports = $this->db->where('type', $pserv['type'])
        ->where('slug !=', $slug)
        ->join('images_master i', 'i.id = thumbnail', 'left')
        ->order_by('posted', 'DESC')
        ->limit(3)
        ->get('blogs')
        ->result_array();
    ?>
    <div class="cz-rep-list default-padding">
        <div class="container">

            <div class="cz-rep-list-head">
                <h2 class="cz-rep-h2">Latest Resources</h2>
            </div>
            <div class="row fade-up-anim">
                <?php foreach ($latest_reports  as $latest_report) {
                    $tags_array = explode(",", $latest_report['tags']); ?>
                    <div class="col-lg-4 col-md-6 cz-rep-col">
                        <div class="cz-rep-card">
                            <a href="<?= base_url('report/' . $latest_report['slug']) ?>" class="cz-rep-cover-1">
                                <img src="<?= base_url('uploads/images/' .  $latest_report['image']) ?>" alt="Report cover">
                                <?php if (count($tags_array) > 0) {
                                    foreach ($tags_array as $tags) {
                                ?>
                                        <span class="cz-rep-type"> <?= $tags ?></span>
                                <?php }
                                } ?>
                            </a>
                            <div class="cz-rep-body">
                                <h4><a href="<?= base_url('report/' . $latest_report['slug']) ?>"><?= $latest_report['title'] ?></a></h4>
                                <p>
                                    <?= implode(' ', array_slice(preg_split('/\s+/', trim(strip_tags(html_entity_decode($latest_report['content'])))), 0, 10)) . '...'; ?>
                                </p>
                                <div class="cz-rep-foot">
                                    <span class="cz-rep-pages"><i class="far fa-file-alt"></i> <?= get_pdf_pages($latest_report['download']) ?> pages</span>
                                    <a href="<?= base_url('report/' . $latest_report['slug']) ?>" class="cz-rep-link">Download <i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- <div class="cz-rep-more">
                <a href="#" class="btn btn-style-one btn-border">Load more resources <i class="fas fa-arrow-right"></i></a>
            </div> -->
        </div>
    </div>
    <!-- End All resources -->

    <!-- Download form (gated)
        ============================================= -->
    <div class="cz-rep-download default-padding bg-gray" id="cz-rep-download">
        <div class="container">
            <div class="cz-rep-download-box">
                <div class="row align-center">
                    <div class="col-lg-6 cz-rep-download-info">
                        <span class="cz-rep-eyebrow">Free download</span>
                        <h2>Get the full report in your inbox</h2>
                        <p>Enter your details and we'll send the PDF straight over. No spam — just practical
                            research you can share with your team.</p>
                        <ul class="cz-rep-download-points">
                            <li><i class="fas fa-check"></i> Instant access to the complete PDF</li>
                            <li><i class="fas fa-check"></i> Free to share across your organisation</li>
                            <li><i class="fas fa-check"></i> Written by practitioners, not marketers</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <form class="cz-rep-form" action="#" id="contactForm" data-form="insertcontact" <?= !empty($download) ? "data-download='" . base_url('uploads/pdf/') . $download . "' data-file-name='" . $download . "'" : '' ?>>
                            <div class="cz-rep-field">
                                <div class="form-group">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="name" id="name" placeholder="Your full name">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="cz-rep-field">
                                <div class="form-group">
                                    <label>Work Email Address <span>*</span></label>
                                    <input type="email" name="email" id="email" placeholder="you@company.com">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="cz-rep-field">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="organisation" id="organisation" placeholder=" Company name">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="cz-rep-check">
                                <div class="form-group">
                                    <input type="checkbox" id="cz-rep-privacy" name="privacy_policy">
                                    <label for="cz-rep-privacy">I agree to the <a href="#">Privacy Policy</a> and to
                                        being contacted about this resource.</label>
                                    <span class="alert-error"></span>
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

                            <button type="submit" id="submitBtn" class="btn btn-style-one">Download PDF <i class="fas fa-download"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Download form -->

    <!-- Call to Action
        ============================================= -->
    <div class="home-blog-two-area default-padding">
        <div class="container">
            <div class="blog-style-two-box bg-dark">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-box text-center fade-up-anim">
                            <h2 class="cta-title mb-20">Want research tailored to your operation?</h2>
                            <p class="cta-description mb-30">
                                Our team can benchmark your supply chain technology and share findings specific to
                                your business. Let's talk about where the biggest gains are hiding.
                            </p>
                            <div class="cta-buttons">
                                <a class="btn btn-style-one btn-border mb-2" href="contact-us.html">
                                    Book a Meeting <i class="fas fa-arrow-right"></i>
                                </a>
                                <a class="btn btn-style-one mb-2" href="contact-us.html">
                                    Talk to an Expert <i class="fas fa-arrow-right"></i>
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
                    nameError.textContent = "Please Enter Name";
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
            // 1. Validate Name
            const organisationInput = document.getElementById("organisation");
            const organisationError = getErrorSpan(organisationInput);
            if (organisationError) {
                if (organisationInput.value.trim().length < 3) {
                    organisationError.textContent = "Please Enter Company Name";
                    organisationInput.classList.add("error");
                    organisationInput.classList.remove("valid");
                    isValid = false;
                } else {
                    organisationError.textContent = "";
                    organisationInput.classList.remove("error");
                    organisationInput.classList.add("valid");
                }
            }
            // 5. Validate Privacy Checkbox
            const agreeInput = document.getElementById("cz-rep-privacy");
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
            // const recaptchaDiv = document.querySelector(".g-recaptcha");
            // const recaptchaError = getErrorSpan(recaptchaDiv);
            // if (recaptchaError) {
            //     if (typeof grecaptcha === "undefined" || grecaptcha.getResponse() === "") {
            //         recaptchaError.textContent = "Please complete the CAPTCHA.";
            //         isValid = false;
            //     } else {
            //         recaptchaError.textContent = "";
            //     }
            // }

            // 7. Perform Submission if everything is valid
            console.log(isValid);
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