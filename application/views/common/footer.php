<?php if (!empty($pserv['main_cta_btn'])) { ?>
    <a href="<?= !empty($pserv['main_cta_pdf']) ? 'javascript:void(0)' : $pserv['main_cta_link'] ?>"
        class="main-btn sticky-btn <?= !empty($pserv['main_cta_pdf']) ? 'open-contact-modal' : '' ?>">
        <span><?= $pserv['main_cta_btn'] ?></span>
    </a>

    <div class="modal fade cc-modal" id="css-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="<?= base_url() ?>assets/images/cross.svg" alt="">
                    </button>
                    <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="<?= base_url() ?>assets/images/cross.svg" alt="">
                    </button> -->
                    <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                        <h2>
                            <?= !empty($pserv['main_cta_pdf']) ? "Download" : "Get <span>In Touch</span>" ?>
                        </h2>
                    </div>
                    <form data-form="insertcontact"
                        <?= !empty($pserv['main_cta_pdf']) ? "data-download='" . base_url('uploads/pdf/') . $pserv['main_cta_pdf'] . "' data-file-name='" . $pserv['main_cta_pdf'] . "'" : '' ?>
                        class="contact-form mt-40 form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        First Name
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="fname" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Last Name
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="lname" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Work Email Address
                                    </label>
                                    <div class="inp-group">
                                        <input type="email" name="email" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Contact Number
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="phone" id="phonem" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Organisation Name
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="organisation" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Designation
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="employees" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the
                                            Cozentus Privacy Policy (<a href="<?= base_url('privacy-statement') ?>">Privacy
                                                Statement</a>)</label>
                                        <input type="checkbox" name="privacy_policy" class="form-check-input"
                                            id="exampleCheck1">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="service" value="<?= $pserv['card_heading'] ?>">
                            <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                            <div class="col-12">
                                <div class="btn-flex mt-40">
                                    <button class="main-btn" type="submit">
                                        <span><?= !empty($pserv['main_cta_pdf']) ? "Download Pdf" : "Schedule a Meeting" ?></span>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

<footer class="main-footer">
    <img loading="lazy" src="<?= base_url('assets/images/coz-ft-bg.webp') ?>" alt="footer Background">
    <div class="container">
        <div class="ft-top">
            <a href="" class="ft-logo">
                <img width="220" height="24" class="height_auto" src="<?= base_url('assets/images/footer-logo.webp') ?>"
                    alt="footer Logo">
            </a>
        </div>
        <div class="ft-middle">
            <div class="row">
                <div class="col-lg-2 col-6">
                    <h3 class="ft-head">
                        Quick Links
                    </h3>
                    <ul class="ft-list">
                        <li>
                            <a href="<?= base_url('about') ?>">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('industries') ?>">
                                Industries
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('team') ?>">
                                Our Team
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('blogs') ?>">
                                Blogs
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('news-and-events') ?>">
                                News And Events
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('glossary-logistics-automation') ?>">
                                Glossary
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h3 class="ft-head">
                        Insights
                    </h3>
                    <ul class="ft-list">
                        <li>
                            <a href="<?= base_url('case-studies') ?>">
                                Case Studies
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('use-cases') ?>">
                                Use Case
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('career') ?>">
                                Career
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('contact') ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6">
                    <h3 class="ft-head">
                        Solutions
                    </h3>
                    <ul class="ft-list">
                        <li>
                            <a href="<?= base_url('domain-capabilities') ?>">
                                Domain Capabilities
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?= base_url('main-service/logistics-solutions-') ?>">
                                Logistics Solutions
                            </a>
                        </li>-->
                        <li>
                            <a href="<?= base_url('services') ?>">
                                Services
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-5 col-12">
                    <h3 class="ft-head">
                        Join our mailing list for monthly updates
                    </h3>
                    <div class="subs-wrap">
                        <form id="subs-form1">
                            <input type="email" name="email" placeholder="Enter your email address">
                            <button type="submit" id="sub-btn">
                                <img width="15" height="15" class="height_auto"
                                    src="<?= base_url('assets/images/arr.svg') ?>" alt="Arrow">
                            </button>
                        </form>
                        <div id="subs-msg1" class="subs-msg text-success mt-2"></div>
                        <div id="subs-msg2" class="subs-msg text-danger mt-2"></div>
                    </div>
                    <ul class="ft-soc-list">
                        <li>
                            <a href="https://www.linkedin.com/company/cozentus/" target="_blank">
                                <img src="<?= base_url('assets/images/linkedin.svg') ?>" width="20" height="20"
                                    class="height_auto" alt="Linkedin">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/CozentusTechnologies/" width="20" height="20"
                                arget="_blank">
                                <img src="<?= base_url('assets/images/facebook.svg') ?>" width="20" height="20"
                                    class="height_auto" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/cozentus/?hl=en" width="20" height="20" target="_blank">
                                <img src="<?= base_url('assets/images/insta.svg') ?>" width="20" height="20"
                                    class="height_auto" alt="Instagram">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@cozentus" target="_blank">
                                <img width="20" height="20" class="height_auto"
                                    src="<?= base_url('assets/images/youtube-dark.svg') ?>" alt="Youtube">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ft-bottom">
            <!-- <p>© 2023 | All Rights Reserved Cozentus Technologies Pvt Ltd | <a href="https://dimerse.com/" target="_blank">Code & Design Credits</a></p> -->
            <p>© <?php echo date("Y"); ?> | All Rights Reserved Cozentus Technologies Pvt Ltd.</p>
            <ul>
                <li>
                    <a href="<?= base_url('privacy-statement') ?>">
                        Privacy Statement
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('cookie-policy') ?>">
                        Cookie Policy
                    </a>
                </li>
                <li>
                    <a target="_blank"
                        href="<?= base_url('uploads/pdf/Cozentus-Technologies-Annual-Return-FY 22-23.pdf') ?>">
                        Annual Return FY22-23
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<?= !empty($head_foot['footer']) ? html_entity_decode($head_foot['footer']) : '' ?>
<?php
$commonpageheader = $this->home_model->get_header_footer('common');
if (!empty($commonpageheader['footer'])) {
    echo html_entity_decode($commonpageheader['footer']);
}
?>
<?php if (($this->session->userdata('marquee_txt')) != '') { ?>
    <div id="marquee" class="marquee-container">
        <div class="marquee">
            <div class="marquee-content">
                <a href="<?php echo $this->session->userdata('btn_link'); ?>" style="color: white; text-decoration: none;"
                    target="_blank">
                    <p><?php echo $this->session->userdata('marquee_txt'); ?> &nbsp;&nbsp;&nbsp;&nbsp;<button
                            class="marquee_button" style="color: black;">
                            <?php echo $this->session->userdata('btn_label'); ?></button>
                    </p>
                </a>
            </div>
        </div>
    </div>
<?php } ?>
<div id="cookieConsentModal" class="cookie-container d-none">
    <div class="left-panel copy-container">
        <p id="cookieText">We use cookies to enhance your experience on our website. By continuing to use this website,
            you consent to the use of cookies<a href="<?= base_url('privacy-statement') ?>">&nbsp;&nbsp;Privacy
                Policy</a></p>
    </div>
    <div class="right-panel btn-container">
        <button id="acceptCookiesBtn" class="accept-cookie">ACCEPT</button>
        <button id="rejectCookiesBtn" class="decline-cookie">DECLINE</button>
    </div>
</div>





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
            <div class="meetings-iframe-container" id="hubspot-meeting-header"
                data-src="https://meetings.hubspot.com/david4662?embed=true" style="min-height: 600px; display:none;">
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
            console.log('HubSpot script loading...');
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
                console.log('HubSpot script loaded');
                showEmbed();
            } else if (!scriptLoaded) {
                // Not started yet — load now
                log('Loading HubSpot script...');
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
            console.log('document loading, waiting for DOMContentLoaded');
            document.addEventListener('DOMContentLoaded', preloadHubSpot);
        } else {
            log('document already ready, loading HubSpot script');
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










<!-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script> -->

<!-- validate cdn -->


<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<!-- bootstrap -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- swiper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?= base_url('assets/js/lightbox.min.js') ?>"></script>
<?php if (base_url() != 'https://infisuite.in/dev/cozweb/') { ?>
    <script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/intlTelInput.js"></script>
    <script defer src="<?= base_url('assets/js/webinar-form.js') ?>"></script>

<?php } ?>
<script defer src="<?= base_url('assets/js/app.js?v=1.0') ?>"></script>
<script defer src="<?= base_url('assets/js/form.js') ?>"></script>
<!-- <script src="https://www.youtube.com/s/player/8c8d0e7a/www-embed-player.vflset/www-embed-player.js" async></script> -->
<script>
    AOS.init();
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
    var menu = ['Move Forward, Think Agile', 'Drive Digital Transformation', 'Achieve Supply Chain Mastery'];
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

    // upload 
    // $("#resume").change(function() {
    //     var file = this.files[0];
    //     $(this).parent().find('label span').text(file.name);
    //     $(this).parent().find('label .cross').fadeIn();
    //     $(this).parent().find('label .cross').css('display', 'flex');
    //     $(this).parent().find('label').addClass('active');
    // });
    // $('.resume-cross').click(function(e) {
    //     e.preventDefault();
    //     $(this).parent().parent().find('input').val('');
    //     $(this).parent().parent().find('span').text('Upload Resume');
    //     $(this).fadeOut();
    //     $(this).parent().parent().find('label').removeClass('active');
    // })

    $(document).ready(function() {
        $("#resume").change(function() {
            var file = this.files[0];
            if (file) {
                $(this).parent().find('.resume-cross').css('display', 'flex');
            } else {
                $(this).parent().find('.resume-cross').css('display', 'none');
            }
        });
        $('.resume-cross').click(function(e) {
            e.preventDefault();
            $(this).parent().parent().find('input').val('');
            $(this).parent().parent().find('span').text('Upload Resume');
            $(this).fadeOut();
            $(this).parent().parent().find('label').removeClass('active');
        });
    });

    // social share
    var pageLink = window.location.href;
    var pageTitle = String(document.title).replace(/\&/g, '%26');

    function fbs_click() {
        window.open(`http://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function tbs_click() {
        window.open(`https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function lbs_click() {
        window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${pageLink}`, 'sharer',
            'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function rbs_click() {
        window.open(`https://www.reddit.com/submit?url=${pageLink}`, 'sharer', 'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    function pbs_click() {
        window.open(
            `https://www.pinterest.com/pin/create/button/?&text=${pageTitle}&url=${pageLink}&description=${pageTitle}`,
            'sharer', 'toolbar=0,status=0,width=626,height=436');
        return false;
    }

    // mega menu
    function menuv() {
        $('.inner .cl li a').hover(function() {
            var id = $(this).attr('data-target');
            console.log("hh", id);
            // if(id){

            if ($(this).hasClass('fde')) {
                $('.inner .cl:not(:first-child) ul').css('display', 'none');
                $(this).parent().siblings().find('a').removeClass('active')
                $(this).addClass('active');
            } else {
                if ($(this).hasClass('fde2')) {
                    $(this).parent().siblings().find('a').removeClass('active')
                    $(this).addClass('active');
                    $('.inner .cl:not(:nth-child(2)):not(:first-child) ul').css('display', 'none');
                }
            }
            $(id).css('display', 'block');
            $('.cl:first-child').css('background', 'white')
            $('.cl:first-child').css('border-right', '1px solid rgba(0,0,0,0.15)')
            $(id).parent().css('background', 'white');
            $(id).parent().css('border-right', '1px solid rgba(0,0,0,0.15)');
            // }
        })
    }
    // header steps tool
    var toBeSent = [];
    var stepOne = ``;
    $(".opts-btn").click(function() {
        // $(this).parent().siblings().find('.opts-btn').removeClass('active');
        var le = $('.opts-btn.active').length;
        var t = false;
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            t = true;
        }
        if (le < 3 && !t) {
            // $(this).parent().siblings().find('.opts-btn-2').removeClass('active');
            $(this).addClass('active');
            t = false;
        }
    });
    $(".opts-btn-2").click(function() {
        var le = $('.opts-btn-2.active').length;
        var t = false;
        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            t = true;
        }
        if (le < 3 && !t) {
            // $(this).parent().siblings().find('.opts-btn-2').removeClass('active');
            $(this).addClass('active');
            t = false;
        }

    });
    var chk = 1;

    function checkBtns() {
        return $('.hm-tool-steps:not(.d-none) .opts button').hasClass('active');
    }
    var glVal = [];
    $('.step-next').click(function() {

        if (chk == 2) {
            if (checkBtns()) {
                console.log(glVal.join(','), "lastStep")
                lastStep(glVal.join(','));
            }
        } else {
            if (checkBtns()) {
                $('.hm-tool-steps:not(.d-none) .opts button.active').each(function() {
                    glVal.push($(this).data('val'))
                })
                $('.second-step').removeClass('d-none');
                $('.first-step').addClass('d-none');
                chk = chk + 1;
            }
        }
        $('.ques-remain span').html(chk);
    })

    function lastStep(vl) {
        // var step = $(this).parent().parent().data('step');
        // var vl = $("#tag-inp").val();
        // console.log(vl);


        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                val: vl
            },
            url: site_url + "home/servicesbytags",
            beforeSend: function() {
                $('.step-next').attr('disabled', true);
                $('.step-next').css('background', '#1d1d1d');
                $('.step-next').css('cursor', 'not-allowed');
            },
            success: function(res) {
                const arr = Object.keys(res).map(key => res[key]);
                var html = ``;
                arr.forEach(e => {
                    html += `<div class="swiper-slide">
                    <a href="${site_url+e.is_parent}" class="vtr-card-wrapper">
                    <img src="${site_url+'uploads/images/'+e.image}" alt="">
                    <div class="con">
                        <h3>${e.card_heading}</h3>
                        <p class="para white">
                            ${e.card_description}
                        </p>
                    </div>
                </a>
            </div>`;
                })
                //console.log(html);
                var temp = `
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center gap-5 flex-wrap">
                            <div class="sec-head center mb-0" data-aos="fade-up" data-aos-duration="1000">
                                <h2>Our <span>Offerings</span></h2>
                            </div>
                            <button class="main-btn secondary reset-steps" data-aos="fade-up" data-aos-duration="1000"><span>Reset</span></button>
                        </div>
                        <div class="swiper solution-swiper0 mt-50" data-aos="fade-up" data-aos-duration="1000">
                            <div class="swiper-wrapper">
                                ${html}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
                $('.tool-main-sec').html(temp);
                swiperCall();
                $('.reset-steps').click(function() {
                    location.reload();
                })
                AOS.init();
            }
        })
    }



    function swiperCall() {
        var swiper = new Swiper(".solution-swiper0", {
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 5000
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 85,
                },
            },
        });
    }

    var swiper = new Swiper(".services-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: ".dt-next",
            prevEl: ".dt-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".prr-swiper", {
        // pagination: {
        //     el: ".swiper-pagination",
        // },
        navigation: {
            nextEl: ".prr-next",
            prevEl: ".prr-prev",
        },
        autoplay: {
            delay: 5000
        },
        slidesPerView: 1,
        spaceBetween: 20,
    });
    var swiper = new Swiper(".gal-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".gal-next",
            prevEl: ".gal-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".tools-p-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: ".tp-next",
            prevEl: ".tp-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });
    var swiper = new Swiper(".vid-swiper", {
        // pagination: {
        //     el: ".swiper-pagination",
        // },
        navigation: {
            nextEl: ".vd-next",
            prevEl: ".vd-prev",
        },
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".solution-swiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerGroup: 4,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 85,
            },
        },
    });
    var swiper = new Swiper(".cs-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: ".dt-next",
            prevEl: ".dt-prev",
        },
        centeredSlides: true,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3.5,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3.5,
                spaceBetween: 30,
            },
        },
    });
    var swiper = new Swiper(".insight-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000
        },
        centeredSlides: false,
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".solution-swiper-2", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000
        },
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".css-swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000
        },
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper(".dash-slider", {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 5000
        },
        navigation: {
            nextEl: ".ds-next",
            prevEl: ".ds-prev",
        }
    });
    var swiper = new Swiper(".solution-swiper11", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerGroup: 4,
        breakpoints: {
            0: {
                slidesPerView: 1,
                slidesPerGroup: 1, // mobile — 1 at a time
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                slidesPerGroup: 2, // tablet — 2 at a time
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                slidesPerGroup: 3, // small desktop — 3 at a time
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4, // ← show 4 slides
                slidesPerGroup: 4, // ← scroll 4 at a time
                spaceBetween: 20,
            },
        },
    });

    var swiper = new Swiper("#crewSwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerGroup: 4,
        breakpoints: {
            0: {
                slidesPerView: 1,
                slidesPerGroup: 1, // mobile — 1 at a time
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                slidesPerGroup: 2, // tablet — 2 at a time
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                slidesPerGroup: 3, // small desktop — 3 at a time
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4, // ← show 4 slides
                slidesPerGroup: 4, // ← scroll 4 at a time
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper("#MissionSwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: "#MissionSwiper .array-next",
            prevEl: "#MissionSwiper .array-prev",
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerGroup: 1,
        breakpoints: {
            0: {
                slidesPerView: 1,
                slidesPerGroup: 1, // mobile — 1 at a time
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                slidesPerGroup: 2, // tablet — 2 at a time
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                slidesPerGroup: 1, // small desktop — 3 at a time
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 1, // ← show 4 slides
                slidesPerGroup: 1, // ← scroll 4 at a time
                spaceBetween: 20,
            },
        },
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 300) {
            $('.main-nav').addClass('is-sticky');
        } else {
            $('.main-nav').removeClass('is-sticky');
        }
    })
    $('.con-map-block').click(function() {
        $(this).find('p').fadeToggle();
        $(this).toggleClass('active');
    })

    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: site_url + "home/getservicemenu",
            dataType: "json",
            success: function(res) {
                // console.log(res.desk);
                $(".service-m-dropdown").html(res.desk);
                $(".service-m-dropdown-footer").html(res.ft);
                $(".mobile-menu").html(res.mob);

                menuv();
            }
        })
    });

    function stopOtherVideo() {
        var vid = $('video.test-vid');
        vid.each(function(e) {
            var currentVid = $(this);
            $(this).on('play', function() {
                vid.each(function(e) {
                    if ($(this).attr('src') != currentVid.attr('src')) {
                        $(this)[0].pause();
                    }
                });
            })
        })
    }

    $("#subs-form1").submit(function(e) {
        e.preventDefault();
        let form = $(this).serialize();
        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: form,
            url: site_url + 'subscribeformsubmit',
            beforeSend: function() {
                $("#sub-btn").addClass('loading');
            },
            complete: function() {
                $("#sub-btn").removeClass('loading');
            },
            success: function(res) {
                if (res.status) {
                    $("#subs-msg1").removeClass('text-danger').html(
                        "Thank you for subscribing to Cozentus.");
                    $("#subs-form1")[0].reset();
                } else {
                    $("#subs-msg2").removeClass('text-success').html(res.msg);
                }
                setTimeout(() => {
                    $("#subs-msg1").html('');
                    $("#subs-msg2").html('');
                }, 5000);
                //window.location.href = site_url + "/thankyou";
            }
        });
    })
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    //console.clear();

    window.addEventListener('load', function() {
        // Remove the hash from the URL
        history.replaceState("", document.title, window.location.pathname + window.location.search);
    });
    $(".open-contact-modal").on("click", function() {
        $("#css-modal").modal('show');
        formVal();
    });
    var input = document.querySelector("#phonem");
    //console.log("phone", input)

    var iti = window.intlTelInput(input, {
        //   initialCountry:"in",
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.0/build/js/utils.js",
    });

    window.iti = iti;
</script>
<script>
    $(document).ready(function() {
        const cookieConsentModal = $('#cookieConsentModal');
        const marquee = $('#marquee');
        const acceptCookiesBtn = $('#acceptCookiesBtn');
        const rejectCookiesBtn = $('#rejectCookiesBtn');

        function setCookieConsent(value, domain) {
            const expiration = new Date();
            // expiration.setTime(expiration.getTime() + (24 * 60 * 60 * 1000));
            // ✅ Expires in 365 days instead of 1 day
            expiration.setTime(expiration.getTime() + (365 * 24 * 60 * 60 * 1000));
            const cookieString =
                `cookieConsent=${value}; expires=${expiration.toUTCString()}; path=/; domain=${domain}`;
            document.cookie = cookieString;
        }
        acceptCookiesBtn.on('click', function() {
            setCookieConsent('accepted', 'cozentus.com');
            cookieConsentModal.addClass('d-none');
            marquee.css("bottom", "-20px");
        });
        rejectCookiesBtn.on('click', function() {
            setCookieConsent('rejected', 'cozentus.com');
            cookieConsentModal.addClass('d-none');
            marquee.css("bottom", "-20px");
        });
        const cookieConsent = getCookieValue('cookieConsent');
        if (!cookieConsent) {
            cookieConsentModal.removeClass('d-none');
        }
    });

    function getCookieValue(cookieName) {
        const cookies = document.cookie.split('; ');
        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].split('=');
            if (cookie[0] === cookieName) {
                return cookie[1];
            }
        }
        return null;
    }
</script>


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
<!-- New Section Tab start-->
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const tabItems = document.querySelectorAll('.coz-tab-item');
        const tabPanels = document.querySelectorAll('.coz-tab-panel');

        tabItems.forEach(function(tab) {
            tab.addEventListener('click', function() {
                const tabIndex = this.getAttribute('data-tab');

                // ── Remove active from all tabs ──
                tabItems.forEach(function(t) {
                    t.classList.remove('active');
                });

                // ── Hide all panels ──
                tabPanels.forEach(function(p) {
                    p.classList.remove('active');
                    p.style.display = 'none';
                });

                // ── Activate clicked tab ──
                this.classList.add('active');

                // ── Show matching panel ──
                const activePanel = document.querySelector(
                    '.coz-tab-panel[data-panel="' + tabIndex + '"]'
                );
                if (activePanel) {
                    activePanel.style.display = 'flex';
                    // Small delay for animation
                    setTimeout(function() {
                        activePanel.classList.add('active');
                    }, 10);
                }
            });
        });
    });
</script>
<!-- New Section Tab close -->
<!-- Counter Section start -->
<script>
    (function() {
        let counted = false;

        // ── Animate a single counter ──
        function animateCounter(el) {
            const target = parseInt(el.getAttribute('data-target')) || 0;
            const duration = 3000; // 2 seconds
            const steps = 60;
            const increment = target / steps;
            let current = 0;
            let step = 0;

            const timer = setInterval(function() {
                step++;
                current = Math.min(Math.round(increment * step), target);
                el.textContent = current;

                if (step >= steps) {
                    el.textContent = target; // ensure exact final value
                    clearInterval(timer);
                }
            }, duration / steps);
        }

        // ── Start all counters ──
        function startCounters() {
            if (counted) return;
            counted = true;

            const counters = document.querySelectorAll('.counter-value');
            counters.forEach(function(counter, index) {
                // Stagger each counter start
                setTimeout(function() {
                    animateCounter(counter);
                }, index * 150);
            });
        }

        // ── Trigger when section is visible ──
        const section = document.getElementById('counters-section');

        if (section && 'IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        startCounters();
                        observer.disconnect();
                    }
                });
            }, {
                threshold: 0.3
            });

            observer.observe(section);
        } else {
            // Fallback — start on page load
            window.addEventListener('load', startCounters);
        }
    })();

    (function() {
        let counted = false;

        function animateCounter(el) {
            const target = parseInt(el.getAttribute("data-target")) || 0;
            const duration = 2000; // 2 seconds
            const steps = 60;
            const increment = target / steps;
            let current = 0;
            let step = 0;
            const timer = setInterval(function() {
                step++;
                current = Math.min(Math.round(increment * step), target);
                el.textContent = current;
                if (step >= steps) {
                    el.textContent = target;
                    clearInterval(timer);
                }
            }, duration / steps);
        }

        function startCounters() {
            if (counted) return;
            counted = true;
            document.querySelectorAll(".stat-num").forEach(function(counter) {
                animateCounter(counter);
            });
        }
        const section = document.getElementById("counters-section1");
        if (section && "IntersectionObserver" in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        startCounters();
                        observer.disconnect();
                    }
                });
            }, {
                threshold: 0.3
            });
            observer.observe(section);
        } else {
            window.addEventListener("load", startCounters);
        }
    })();
</script>
<!-- Counter Section End -->


<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/69bbcdfdbb7f0b1c337b31e8/1jk2ppa86';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> -->
<!--End of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();

    Tawk_API.onLoad = function() {
        Tawk_API.setAttributes({
            'name': 'Talk to Expert'
        }, function(error) {});
    };

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
</body>

</html>