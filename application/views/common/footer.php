<!-- Book a demo modal start -->
<!-- ============================================================ -->
<!-- MEETING MODAL -->
<!-- ============================================================ -->
<div id="meetingModalHeader" style="
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 99999;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(4px);
            align-items: center;
            justify-content: center;
        ">
    <!-- Modal Box -->
    <div style="
                background: #fff;
                width: 90%;
                max-width: 860px;
                max-height: 90vh;
                border-radius: 12px;
                overflow: hidden;
                position: relative;
                box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                display: flex;
                flex-direction: column;
            ">
        <!-- Modal Header -->
        <div style="
                    background: #0a2670;
                    padding: 16px 24px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    flex-shrink: 0;
                ">
            <div>
                <h4 style="color:#fff; margin:0; font-size:18px;">Book A Meeting</h4>
                <p style="color:rgba(255,255,255,0.7); margin:0; font-size:13px;">
                    Talk to our expert for your supply chain logistics tech needs.
                </p>
            </div>
            <!-- Close Button -->
            <button id="closeMeetingModalHeader" style="
                        background: rgba(255,255,255,0.15);
                        border: none;
                        color: #fff;
                        width: 36px; height: 36px;
                        border-radius: 50%;
                        font-size: 20px;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        line-height: 1;
                        transition: background 0.2s;
                    ">&times;</button>
        </div>

        <!-- Modal Body — HubSpot loads here -->
        <div style="overflow-y: auto; flex: 1; padding: 10px;">

            <!-- Loading Spinner (shown while HubSpot loads) -->
            <div id="meeting-loader-header" style="
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 400px;
                gap: 16px;
            ">
                <!-- Spinner -->
                <div style="
                    width: 48px; height: 48px;
                    border: 4px solid #f0f0f0;
                    border-top: 4px solid #0a2670;
                    border-radius: 50%;
                    animation: spin 0.8s linear infinite;
                "></div>
                <p style="color:#666; font-size:14px; margin:0;">
                    Loading calendar, please wait...
                </p>
            </div>

            <!-- HubSpot Embed Container -->
            <!-- <div class="meetings-iframe-container" id="hubspot-meeting-header"
                data-src="https://meetings.hubspot.com/david4662?embed=true" style="min-height: 600px; display:none;">
            </div> -->
            <div class="meetings-iframe-container" id="hubspot-meeting-header"
                data-src="https://meetings-na2.hubspot.com/gavin-webber?embed=true" style="min-height: 600px; display:none;">
            </div>

        </div>
    </div>
</div>


<div class="modal fade cc-modal" id="css-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-3">
            <div class="modal-body">
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?= base_url() ?>assets/images/cross.svg" alt="">
                </button>
                <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                        <?= !empty($pserv['main_cta_pdf']) ? "Download" : "Get <span>In Touch</span>" ?>
                    </h2>
                </div>
                <form data-form="insertcontact"
                    <?= !empty($pserv['main_cta_pdf']) ? "data-download='" . base_url('uploads/pdf/') . $pserv['main_cta_pdf'] . "' data-file-name='" . $pserv['main_cta_pdf'] . "'" : '' ?>
                    class="contact-form-custom">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="organisation" name="organisation" placeholder="Organisation" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" id="employees" name="employees" placeholder="Designation" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
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
                    <input type="hidden" name="service" value="<?= $pserv['card_heading'] ?>">
                    <!-- Alert Message -->
                    <div class="col-lg-12 alert-notification mb-3" role="alert">
                        <div id="message" class="alert-msg text-danger"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-style-one" type="submit" id="submitBtn" data-aos="fade-up" data-aos-duration="1200">
                                <?= !empty($pserv['main_cta_pdf']) ? "Download Pdf" : "Schedule a Meeting" ?><i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


<!-- ============================================================ -->
<!-- STYLES -->
<!-- ============================================================ -->
<style>
    /* ── Base modal ── */
    #meetingModalHeader {
        display: none;
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        z-index: 999999 !important;
        /* higher than navbar */
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(4px);
        align-items: center;
        justify-content: center;
    }

    /* ── Modal box desktop ── */
    #meetingModalHeader>div {
        animation: modalFadeIn 0.25s ease;
        width: 90%;
        max-width: 860px;
    }

    /* Spinner animation */
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Modal fade in */
    @keyframes modalFadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    #meetingModalHeader>div {
        animation: modalFadeIn 0.25s ease;
    }

    /* Close button hover */
    #closeMeetingModalHeader:hover {
        background: rgba(255, 255, 255, 0.3) !important;
    }

    /* Mobile responsive */
    @media (max-width: 576px) {
        #meetingModalHeader>div {
            width: 100% !important;
            max-width: 100% !important;
            max-height: 100vh !important;
            border-radius: 0 !important;
        }
    }
</style>

<!-- ============================================================ -->
<!-- JAVASCRIPT -->
<!-- ============================================================ -->
<script>
    (function() {
        let hubspotLoaded = false;
        let scriptLoaded = false;

        // ── 1. Preload HubSpot script silently in background on page load ──
        function preloadHubSpot() {
            if (scriptLoaded) return;
            scriptLoaded = true;
            // console.log('HubSpot script loading...');
            const script = document.createElement('script');
            script.src = 'https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js';
            script.async = true;
            script.id = 'hs-meeting-script';

            script.onload = function() {
                hubspotLoaded = true;
                // If modal already open before script finished — show embed
                if (document.getElementById('openMeetingModalHeader').style.display === 'flex') {
                    showEmbed();
                }
            };

            document.body.appendChild(script);
        }

        // ── 2. Show embed, hide loader ──
        function showEmbed() {
            const loader = document.getElementById('meeting-loader-header');
            const meeting = document.getElementById('hubspot-meeting-header');

            if (loader) loader.style.display = 'none';
            if (meeting) meeting.style.display = 'block';
        }

        // ── 3. Open Modal ──
        function openModal() {
            const modal = document.getElementById('meetingModalHeader');
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // prevent background scroll

            if (hubspotLoaded) {
                // Script already loaded — show immediately
                // console.log('HubSpot script loaded');
                showEmbed();
            } else if (!scriptLoaded) {
                // Not started yet — load now
                // log('Loading HubSpot script...');
                preloadHubSpot();
            }
            // else: script is loading — onload will call showEmbed()
        }

        // ── 4. Close Modal ──
        function closeModal() {
            const modal = document.getElementById('meetingModalHeader');
            modal.style.display = 'none';
            document.body.style.overflow = ''; // restore scroll
        }
        // ── 5. ✅ Load immediately when DOM is ready ──
        if (document.readyState === 'loading') {
            // console.log('document loading, waiting for DOMContentLoaded');
            document.addEventListener('DOMContentLoaded', preloadHubSpot);
        } else {
            // log('document already ready, loading HubSpot script');
            preloadHubSpot(); // already ready — run immediately
        }


        // ── 6. Event Listeners ──
        document.addEventListener('DOMContentLoaded', function() {

            // Open button
            document.getElementById('openMeetingModalHeader')
                .addEventListener('click', openModal);

            // Close button
            document.getElementById('closeMeetingModalHeader')
                .addEventListener('click', closeModal);

            // Click outside modal box to close
            document.getElementById('meetingModalHeader')
                .addEventListener('click', function(e) {
                    if (e.target === this) closeModal();
                });

            // ESC key to close
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') closeModal();
            });
        });

    })();
</script>
<!-- Book a demo modal end -->


<!-- Start Footer 
    ============================================= -->
<footer class="footer-style-one box-layout bg-dark text-light">

    <div class="footer-shape">
        <img src="<?= base_url('assets/img/shape/globe.png') ?>" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="f-item contact">
                        <h4 class="widget-title"> Contact</h4>
                        <p>
                            SRB Tower, 5th and 6th Floor, Infocity, Bhubaneswar -751024, Odisha, India
                        </p>
                        <ul class="contact">
                            <li>
                                <p>Phone Number</p>
                                <h4><a href="tel:+91 977 712 6600">+91 977 712 6600 (India)</a></h4>
                            </li>
                            <li>
                                <p>Email</p>
                                <h4><a href="mailto:supplychain@cozentus.com">supplychain@cozentus.com</a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7">
                    <div class="footer-style-one-items">
                        <!-- Single Item -->
                        <div class="f-item link">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <li>
                                    <a href="<?= base_url('about') ?>">About</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('industries') ?>">Industries</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('team') ?>">Our Team</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('blogs') ?>">Blogs</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('news-and-events') ?>">News And Events</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('glossary-logistics-automation') ?>">Glossary</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="f-item link">
                            <h4 class="widget-title">Insights</h4>
                            <ul>
                                <li>
                                    <a href="<?= base_url('case-studies') ?>">Case Studies</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('use-cases') ?>">Use Case</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('career') ?>">Career</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('contact') ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="f-item link">
                            <h4 class="widget-title">Solutions</h4>
                            <ul>
                                <li>
                                    <a href="<?= base_url('domain-capabilities') ?>">Domain Capabilities</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('services') ?>">Services</a>
                                </li>

                            </ul>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer Bottom -->
    <div class="footer-bottom-one">
        <div class="container">
            <div class="content">
                <div class="row align-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="logo">
                            <a href="#"><img src="<?= base_url('assets/img/logo-light.png') ?>" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="footer-item-social text-end">
                            <li>
                                <a href="https://www.facebook.com/CozentusTechnologies/" target="_blank">
                                    <i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/cozentus/" target="_blank">
                                    <i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/cozentus/?hl=en" target="_blank">
                                    <i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@cozentus" target="_blank">
                                    <i class="fab fa-youtube"></i></a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->

    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>© <a href="#"><?= date('Y') ?></a> All Rights Reserved Cozentus Technologies Pvt Ltd.</p>
                </div>
                <div class="col-lg-6 text-end">
                    <ul>
                        <li>
                            <a href="<?= base_url('privacy-statement') ?>"> Privacy Statement</a>
                        </li>
                        <li>
                            <a href="<?= base_url('cookie-policy') ?>">Cookie Policy</a>
                        </li>
                        <li>
                            <a target="_blank" href="<?= base_url('uploads/pdf/Cozentus-Technologies-Annual-Return-FY 22-23.pdf') ?>">Annual Return FY22-23</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <button id="backToTop" aria-label="Back to Top">
        ↑
    </button>

    <!-- End Footer Bottom -->

</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/js/progress-bar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/js/count-to.js') ?>"></script>
<script src="<?= base_url('assets/js/YTPlayer.min.js') ?>"></script>
<script src="<?= base_url('assets/js/validnavs.js') ?>"></script>
<script src="<?= base_url('assets/js/gsap.js') ?>"></script>
<script src="<?= base_url('assets/js/lenis.min.js') ?>"></script>
<script src="<?= base_url('assets/js/ScrollTrigger.min.js') ?>"></script>
<script src="<?= base_url('assets/js/SplitText.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<!-- Custom Extra JS--->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/intlTelInput.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- <script defer src="<?= base_url('assets/custom/app.js?v=1.0') ?>"></script>
 <script defer src="<?= base_url('assets/custom/form.js?v=1.0') ?>"></script> -->





<script>
    const backToTopBtn = document.getElementById("backToTop");

    /* Show button after scrolling */
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add("show");
        } else {
            backToTopBtn.classList.remove("show");
        }

    });

    /* Smooth scroll to top */
    backToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    });

    $(".open-contact-modal").on("click", function() {
        $("#css-modal").modal('show');
        formVal();
    });
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/69bbcba76b81021c34520b0b/1jk2p722m';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script>
    //Home page banner text sliding

    const wordsArray = [
        "AI-Powered",
        "Data-Driven",
        "Future-Ready",
    ];

    const slidingText = document.getElementById("sliding-text");

    let currentIndex = 0;

    // Initial render
    function renderWord(word) {
        slidingText.innerHTML = "";

        word.split("").forEach((char, index) => {
            const span = document.createElement("span");
            span.classList.add("char");
            span.textContent = char === " " ? "\u00A0" : char;
            slidingText.appendChild(span);
        });
    }

    renderWord(wordsArray[currentIndex]);

    async function animateTextChange() {

        const chars = slidingText.querySelectorAll(".char");

        // STEP 1: Remove current text
        // Right → Left
        for (let i = chars.length - 1; i >= 0; i--) {
            chars[i].classList.add("hide");
            await sleep(40);
        }

        await sleep(200);

        // STEP 2: New word
        currentIndex = (currentIndex + 1) % wordsArray.length;
        const newWord = wordsArray[currentIndex];

        slidingText.innerHTML = "";

        // STEP 3: Add new text
        // Left → Right
        newWord.split("").forEach((char, index) => {
            const span = document.createElement("span");

            span.classList.add("char", "show");
            span.style.animationDelay = `${index * 0.05}s`;

            span.textContent = char === " " ? "\u00A0" : char;

            slidingText.appendChild(span);
        });
    }

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    setInterval(animateTextChange, 3500);


    // social share
    var pageLink = window.location.href;
    var pageTitle = String(document.title).replace(/\&/g, '%26');

    function fbs_click() {
        window.open(`http://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function twi_click() {
        window.open(`https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function wht_click() {
        window.open(`https://wa.me/918928493972?text=Hi`);
        return false;
    }

    function link_click() {
        window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${pageLink}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function rbs_click() {
        window.open(`https://www.reddit.com/submit?url=${pageLink}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');
        return false;
    }
</script>

</body>

</html>