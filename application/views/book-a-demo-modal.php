<!-- Establish early connections -->
<link rel="preconnect" fetchpriority="high" href="https://meetings.hubspot.com" crossorigin>
<link rel="preconnect" fetchpriority="high" href="https://static.hsappstatic.net" crossorigin>

<div id="smooth-content">
    <!-- Start About 
        ============================================= -->
    <div class="about-style-two-area mt-180 mt-md-110 mt-xs-70" style="background-image: url(assets/img/shape/8.png);">

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-style-two-info default-padding-bottom fade-up-anim">
                        <h4>Company Overview</h4>
                        <p>At Cozentus, we're dedicated to helping businesses unlock the full
                            potential of their logistics and supply chain operations through the
                            power of advanced technology.</p>
                        <p>By leveraging AI, Machine Learning, and other advanced technologies,
                            we develop tailored solutions that not only streamline processes but
                            also deliver real results — improved efficiency, faster delivery,
                            and measurable ROI.</p>



                        <a class="btn btn-style-one btn-dark mt-10 wow fadeInUp" href="#" id="openMeetingModal">Schedule Your Meeting Now
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>


                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-style-two-thumb fade-up-anim">
                        <img src="https://www.cozentus.com/uploads/images/cozentus.gif" alt="cozentus_meetings" style="height:400px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
</div>


<!-- ============================================================ -->
<!-- MEETING MODAL -->
<!-- ============================================================ -->
<div id="meetingModal" style="
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
            <button id="closeMeetingModal" style="
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
            <div id="meeting-loader" style="
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
            <!-- <div class="meetings-iframe-container" id="hubspot-meeting"
                data-src="https://meetings.hubspot.com/david4662?embed=true" style="min-height: 600px; display:none;">
            </div> -->
            <div class="meetings-iframe-container" id="hubspot-meeting"
                data-src="https://meetings-na2.hubspot.com/gavin-webber?embed=true" style="min-height: 600px; display:none;">
            </div>

        </div>
    </div>
</div>

<!-- ============================================================ -->
<!-- STYLES -->
<!-- ============================================================ -->
<style>
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

    #meetingModal>div {
        animation: modalFadeIn 0.25s ease;
    }

    /* Close button hover */
    #closeMeetingModal:hover {
        background: rgba(255, 255, 255, 0.3) !important;
    }

    /* Mobile responsive */
    @media (max-width: 576px) {
        #meetingModal>div {
            width: 100% !important;
            max-width: 100% !important;
            max-height: 100vh !important;
            border-radius: 0 !important;
        }
    }

    /* ── Modal Body — no scroll ── */
    #meetingModal>div>div:last-child {
        overflow: hidden !important;
        padding: 0 !important;
        flex: 1;
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

            const script = document.createElement('script');
            script.src = 'https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js';
            script.async = true;
            script.id = 'hs-meeting-script';

            script.onload = function() {
                hubspotLoaded = true;
                // If modal already open before script finished — show embed
                if (document.getElementById('meetingModal').style.display === 'flex') {
                    showEmbed();
                }
            };

            document.body.appendChild(script);
        }

        // ── 2. Show embed, hide loader ──
        function showEmbed() {
            const loader = document.getElementById('meeting-loader');
            const meeting = document.getElementById('hubspot-meeting');

            if (loader) loader.style.display = 'none';
            if (meeting) meeting.style.display = 'block';
        }

        // ── 3. Open Modal ──
        function openModal() {
            const modal = document.getElementById('meetingModal');
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // prevent background scroll

            if (hubspotLoaded) {
                // Script already loaded — show immediately
                showEmbed();
            } else if (!scriptLoaded) {
                // Not started yet — load now
                preloadHubSpot();
            }
            // else: script is loading — onload will call showEmbed()
        }

        // ── 4. Close Modal ──
        function closeModal() {
            const modal = document.getElementById('meetingModal');
            modal.style.display = 'none';
            document.body.style.overflow = ''; // restore scroll
        }

        // ── 5. Start preloading after page is idle ──
        if (window.requestIdleCallback) {
            requestIdleCallback(preloadHubSpot, {
                timeout: 3000
            });
        } else {
            window.addEventListener('load', function() {
                setTimeout(preloadHubSpot, 1000);
            });
        }

        // ── 6. Event Listeners ──
        document.addEventListener('DOMContentLoaded', function() {

            // Open button
            document.getElementById('openMeetingModal')
                .addEventListener('click', openModal);

            // Close button
            document.getElementById('closeMeetingModal')
                .addEventListener('click', closeModal);

            // Click outside modal box to close
            document.getElementById('meetingModal')
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