<?php
if ($this->session->userdata('interest') != 'Webinar') { ?>
    <script>
        $(document).ready(function() {
            $('#fullPageModal').modal('show');
        });
    </script>
<?php } else { ?>
    <script>
        $('#fullPageModal').modal('hide');
    </script>
<?php } ?>
<style>
    /* ═══════════════════════════════════════════════════════════
   podcast.html — episode listing driven by YouTube thumbnails
   (intro → featured episode → filterable grid → CTA)
   ═══════════════════════════════════════════════════════════ */

    /* Intro + subscribe */
    .cz-pod-intro {
        padding: 70px 0 50px;
    }

    .cz-pod-eyebrow {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        color: #2f73ff;
        margin-bottom: 14px;
    }

    .cz-pod-intro-title {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.2;
        color: #10192d;
        margin: 0 0 18px;
    }

    .cz-pod-intro-text {
        font-size: 17px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0;
    }

    .cz-pod-subscribe {
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 14px;
        padding: 28px 30px;
    }

    .cz-pod-subscribe h5 {
        font-size: 16px;
        font-weight: 700;
        color: #10192d;
        margin: 0 0 16px;
    }

    .cz-pod-subscribe ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-pod-subscribe li {
        margin-bottom: 10px;
    }

    .cz-pod-subscribe li:last-child {
        margin-bottom: 0;
    }

    .cz-pod-subscribe a {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 15px;
        font-weight: 600;
        color: #33415c;
        transition: color .25s ease;
    }

    .cz-pod-subscribe a:hover {
        color: #2f73ff;
    }

    .cz-pod-subscribe i {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #fff;
        border: 1px solid #e3e9f3;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        color: #2f73ff;
    }

    /* Shared YouTube thumbnail — 16:9 frame with play overlay */
    .cz-pod-thumb {
        position: relative;
        display: block;
        border-radius: 12px;
        overflow: hidden;
        background: #0b1f45;
    }

    .cz-pod-thumb img {
        width: 100%;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .cz-pod-thumb::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(8, 24, 56, 0) 45%, rgba(8, 24, 56, .55) 100%);
        transition: opacity .3s ease;
    }

    .cz-pod-thumb:hover img {
        transform: scale(1.05);
    }

    .cz-pod-play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 62px;
        height: 62px;
        border-radius: 50%;
        background: #fff;
        color: #ff0000;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        padding-left: 3px;
        box-shadow: 0 10px 30px rgba(8, 24, 56, .35);
        transition: all .3s ease;
    }

    .cz-pod-thumb:hover .cz-pod-play {
        background: #ff0000;
        color: #fff;
        transform: translate(-50%, -50%) scale(1.08);
    }

    .cz-pod-thumb-lg .cz-pod-play {
        width: 82px;
        height: 82px;
        font-size: 24px;
    }

    .cz-pod-duration {
        position: absolute;
        right: 12px;
        bottom: 12px;
        z-index: 2;
        background: rgba(8, 24, 56, .82);
        color: #fff;
        font-size: 12.5px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 5px;
    }

    /* Featured episode */
    .cz-pod-featured {
        padding-bottom: 30px;
    }

    .cz-pod-featured-box {
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 18px;
        padding: 32px;
    }

    .cz-pod-featured-body {
        padding-left: 20px;
    }

    .cz-pod-badge {
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

    .cz-pod-ep {
        display: block;
        font-size: 14px;
        color: #8a97ad;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .cz-pod-featured-body h3 {
        font-size: 27px;
        font-weight: 800;
        line-height: 1.3;
        margin: 0 0 14px;
    }

    .cz-pod-featured-body h3 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-pod-featured-body h3 a:hover {
        color: #2f73ff;
    }

    .cz-pod-featured-body>p {
        font-size: 15.5px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0 0 22px;
    }

    .cz-pod-guest {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 26px;
    }

    .cz-pod-guest img {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
    }

    .cz-pod-guest strong {
        display: block;
        font-size: 15px;
        color: #10192d;
    }

    .cz-pod-guest span {
        font-size: 13.5px;
        color: #8a97ad;
    }

    /* Episode grid */
    .cz-pod-list-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 18px;
        margin-bottom: 38px;
    }

    .cz-pod-h2 {
        font-size: 34px;
        font-weight: 800;
        color: #10192d;
        margin: 0;
    }

    .cz-pod-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-pod-filter li {
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

    .cz-pod-filter li:hover {
        border-color: #2f73ff;
        color: #2f73ff;
    }

    .cz-pod-filter li.active {
        background: #2f73ff;
        border-color: #2f73ff;
        color: #fff;
    }

    /* wider gutters between episode cards — row pulls back so the
   grid still lines up with the container edges */
    .cz-pod-list .row {
        margin-left: -10px;
        margin-right: -10px;
        row-gap: 40px;
    }

    .cz-pod-col {
        padding-left: 10px;
        padding-right: 10px;
    }

    .cz-pod-card {
        background: #fff;
        border: 1px solid #e8edf5;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
        margin-bottom: 20px;
        transition: box-shadow .3s ease, transform .3s ease;
    }

    .cz-pod-card:hover {
        box-shadow: 0 18px 40px rgba(8, 24, 56, .1);
        transform: translateY(-4px);
    }

    .cz-pod-card .cz-pod-thumb {
        border-radius: 0;
    }

    .cz-pod-body {
        padding: 22px 24px 26px;
    }

    .cz-pod-tag {
        display: inline-block;
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

    .cz-pod-meta {
        display: block;
        font-size: 13.5px;
        color: #8a97ad;
        margin-bottom: 8px;
    }

    .cz-pod-body h4 {
        font-size: 19px;
        font-weight: 700;
        line-height: 1.42;
        margin: 0 0 12px;
    }

    .cz-pod-body h4 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-pod-body h4 a:hover {
        color: #2f73ff;
    }

    .cz-pod-body>p {
        font-size: 14.5px;
        line-height: 1.65;
        color: #6b7280;
        margin: 0 0 16px;
    }

    .cz-pod-link {
        font-size: 14px;
        font-weight: 700;
        color: #2f73ff;
    }

    .cz-pod-link i {
        margin-left: 6px;
        font-size: 12px;
        transition: transform .25s ease;
    }

    .cz-pod-link:hover i {
        transform: translateX(4px);
    }

    .cz-pod-more {
        text-align: center;
        margin-top: 22px;
    }

    /* responsive */
    @media (max-width: 991px) {
        .cz-pod-intro-title {
            font-size: 32px;
        }

        .cz-pod-subscribe {
            margin-top: 34px;
        }

        .cz-pod-featured-body {
            padding-left: 0;
            margin-top: 28px;
        }

        .cz-pod-h2 {
            font-size: 28px;
        }
    }

    @media (max-width: 575px) {
        .cz-pod-featured-box {
            padding: 18px;
        }

        .cz-pod-play {
            width: 52px;
            height: 52px;
            font-size: 16px;
        }

        .cz-pod-thumb-lg .cz-pod-play {
            width: 60px;
            height: 60px;
            font-size: 18px;
        }

        .cz-pod-list-head {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    .inner_content_li ul,
    .inner_content_li li {
        margin: 0;
        padding: 0;
        list-style: none !important;
    }

    .cz-pod-featured-body ul,
    .cz-pod-featured-body li {
        list-style: disc !important;
    }
</style>
<!-- Modal -->
<div class="modal" tabindex="-1" id="fullPageModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Request On-demand Webinar</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form data-form="insertWebinarcontact" id="contactForm" class="contact-form mt-40 webinar">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                <span class="alert-error"></span>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-group">
                            <input type="checkbox" name="privacy_policy" id="agree">
                            <label for="agree">&nbsp;&nbsp;I agree to the
                                Cozentus Privacy Policy (<a
                                    href="<?= base_url('privacy-statement') ?>">Privacy
                                    Statement</a>)</label>
                            <br>
                            <span class="alert-error"></span>
                        </div>
                    </div>

                    <input type="hidden" name="service" value="Webinar" />
                    <!-- <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div> -->
                    <input type="hidden" name="path" value="<?= $this->uri->uri_string() ?>">
                    <input type="hidden" name="type" value="<?= $type ?>">
                    <!-- Alert Message -->
                    <div class="col-lg-12 alert-notification mb-3" role="alert">
                        <div id="message" class="alert-msg text-danger"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit" id="submitBtn"><?= $type == 3 ? "Submit" : "Submit" ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="smooth-content" class="service">
    <div class="cz-pod-featured default-padding-2">
        <div class="container">
            <div class="cz-pod-featured-box">
                <div class="row">
                    <div class="col-lg-12 max-auto">
                        <h3><?= $title; ?></h3>
                    </div>
                </div>

                <div class="row align-center">
                    <div class="col-lg-6">
                        <?php
                        if (!empty($video)) {
                            // Extract YouTube video ID
                            $videoUrl = urldecode($video);
                            $videoId = '';
                            if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\&\?\/]+)/', $videoUrl, $matches)) {
                                $videoId = $matches[1];
                            }
                            $videoDuration = get_youtube_duration($videoId);
                        ?>

                            <!-- YouTube thumbnail: swap the ID in both the img src and the href -->
                            <a href="<?= !empty($videoId) ? 'https://www.youtube.com/watch?v=' . $videoId : $videoUrl ?>" class="popup-youtube cz-pod-thumb cz-pod-thumb-lg">
                                <img src="https://img.youtube.com/vi/<?= $videoId ?>/hqdefault.jpg"
                                    alt="Building an AI-ready supply chain data foundation">
                                <span class="cz-pod-play"><i class="fas fa-play"></i></span>
                                <span class="cz-pod-duration"><?= $videoDuration ?></span>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6 cz-pod-featured-body">
                        <!-- <h3><?= $title; ?></h3> -->
                        <div><?= html_entity_decode($content) ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All episodes
        ============================================= -->

    <?php
    $latest_podcasts = array();
    if (!empty($pserv['type']) && !empty($pserv['slug'])) {
        $latest_podcasts = $this->db->where('type', $pserv['type'])
            ->where('slug !=', $pserv['slug'])
            ->order_by('posted', 'DESC')
            ->limit(3)
            ->get('blogs')
            ->result_array();
    }
    ?>
    <?php if (count($latest_podcasts) > 0) { ?>
        <div class="cz-pod-list default-padding-2">
            <div class="container">

                <div class="cz-pod-list-head">
                    <h2 class="cz-pod-h2">Latest Webinar</h2>
                </div>

                <div class="row fade-up-anim">
                    <?php foreach ($latest_podcasts as $latest_podcast) {
                        // `video` may hold a plain URL or a full <iframe> embed - only a clean ID is usable.
                        $videoId = get_youtube_id(isset($latest_podcast['video']) ? $latest_podcast['video'] : '');
                        $watchUrl = $videoId ? 'https://www.youtube.com/watch?v=' . $videoId : '';
                        $videoDuration2 = $videoId ? get_youtube_duration($videoId) : '';

                        $postedTs = !empty($latest_podcast['created_at']) ? strtotime($latest_podcast['created_at']) : false;
                        $excerptWords = preg_split('/\s+/', trim(strip_tags(html_entity_decode(isset($latest_podcast['content']) ? $latest_podcast['content'] : ''))), -1, PREG_SPLIT_NO_EMPTY);
                        $excerpt = !empty($excerptWords) ? implode(' ', array_slice($excerptWords, 0, 10)) . '...' : '';
                    ?>
                        <div class="col-lg-4 col-md-6 cz-pod-col" data-category="ai-data">
                            <div class="cz-pod-card">
                                <?php if ($videoId) { ?>
                                    <!-- YouTube thumbnail: swap the ID in both the img src and the href -->
                                    <a href="<?= html_escape($watchUrl) ?>"
                                        class="popup-youtube cz-pod-thumb cz-pod-thumb-lg">
                                        <img src="https://img.youtube.com/vi/<?= html_escape($videoId) ?>/hqdefault.jpg"
                                            alt="<?= html_escape(isset($latest_podcast['title']) ? $latest_podcast['title'] : 'Webinar') ?>">
                                        <span class="cz-pod-play"><i class="fas fa-play"></i></span>
                                        <?php if ($videoDuration2) { ?>
                                            <span class="cz-pod-duration"><?= html_escape($videoDuration2) ?></span>
                                        <?php } ?>
                                    </a>
                                <?php } ?>
                                <div class="cz-pod-body">
                                    <?php if ($postedTs) { ?>
                                        <span class="cz-pod-meta"><?= date('F d, Y', $postedTs) ?></span>
                                    <?php } ?>
                                    <h4>
                                        <a href="<?= base_url('podcast/' . (isset($latest_podcast['slug']) ? $latest_podcast['slug'] : '')) ?>">
                                            <?= html_escape(isset($latest_podcast['title']) ? $latest_podcast['title'] : '') ?>
                                        </a>
                                    </h4>
                                    <?php if ($excerpt) { ?>
                                        <p><?= html_escape($excerpt) ?></p>
                                    <?php } ?>
                                    <?php if ($videoId) { ?>
                                        <a href="<?= html_escape($watchUrl) ?>" class="cz-pod-link popup-youtube">Watch
                                            now <i class="fas fa-arrow-right"></i></a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('podcast/' . (isset($latest_podcast['slug']) ? $latest_podcast['slug'] : '')) ?>" class="cz-pod-link">Read
                                            more <i class="fas fa-arrow-right"></i></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- <div class="cz-pod-more">
                    <a href="#" class="btn btn-style-one btn-border">Load more episodes <i class="fas fa-arrow-right"></i></a>
                </div> -->

            </div>
        </div>
    <?php } ?>
    <!-- End All episodes -->

    <!-- Call to Action
        ============================================= -->
    <div class="home-blog-two-area default-padding-2">
        <div class="container">
            <div class="blog-style-two-box bg-dark">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-box text-center fade-up-anim">
                            <h2 class="cta-title mb-20">Never miss an episode</h2>
                            <p class="cta-description mb-30">
                                Subscribe on YouTube for new conversations every second Tuesday, or get in touch
                                if you would like to join us as a guest.
                            </p>
                            <div class="cta-buttons">
                                <a class="btn btn-style-one btn-border mb-2" href="https://www.youtube.com/@cozentus" target="_blank">
                                    Subscribe on YouTube <i class="fab fa-youtube"></i>
                                </a>
                                <a class="btn btn-style-one mb-2" href="<?= base_url('contact') ?>">
                                    Be a Guest <i class="fas fa-arrow-right"></i>
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
                            // if (typeof grecaptcha !== "undefined") {
                            //     grecaptcha.reset();
                            // }
                            // Remove validation classes
                            document.querySelectorAll(".form-control").forEach(el => el.classList.remove("valid", "error"));


                            // Reload the page after a short delay so user can read the message
                            setTimeout(() => {
                                window.location.reload();
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