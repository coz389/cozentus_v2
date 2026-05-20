<!-- Establish early connections -->
<link rel="preconnect" fetchpriority="high" href="https://meetings.hubspot.com" crossorigin>
<link rel="preconnect" fetchpriority="high" href="https://static.hsappstatic.net" crossorigin>

<!-- Preload the script itself so it's ready when needed -->
<!-- <link rel="preload" href="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js" as="script"> -->


<section class="abt-sec sec" style="background-color:#f5f5f5;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-12">
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 style="color:#0a2670;">Book A Meeting</h2>
                </div>
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <h5>Talk to our expert for your supply chain logistics tech needs.</h5>
                </div>
                <div class="abt-img" data-aos="fade-left" data-aos-duration="1000">
                    <div style="padding: 10px; border-radius: 2px;">

                        <!-- Start of Meetings Embed Script -->
                        <div class="meetings-iframe-container"
                            data-src="https://meetings.hubspot.com/david4662?embed=true" id="hubspot-meeting"
                            style="min-height: 600px;">
                        </div>

                        <!-- <script type="text/javascript"
                            src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script> -->
                        <!-- <script async src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js">
                        </script> -->
                        <!-- <link rel="preload" href="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"
                            as="script"> -->
                        <!-- End of Meetings Embed Script -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    (function() {
        function loadHubSpotMeeting() {
            const script = document.createElement('script');
            script.src = 'https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js';
            script.priority = 'high';
            script.async = true;
            script.defer = true;
            document.body.appendChild(script);
        }

        const target = document.getElementById('hubspot-meeting');
        if (!target) return;

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        loadHubSpotMeeting();
                        observer.disconnect(); // Load once, stop observing
                    }
                });
            }, {
                rootMargin: '200px'
            }); // Start loading 200px before visible

            observer.observe(target);
        } else {
            // Fallback for older browsers
            window.addEventListener('load', loadHubSpotMeeting);
        }
    })();
</script>
<script>
    /*
(function() {
    // Load script when page is idle or after critical content
    function loadHubSpotMeeting() {
        if (document.getElementById('hubspot-meeting')) {
            const script = document.createElement('script');
            script.src = 'https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js';
            script.async = true;
            document.body.appendChild(script);
        }
    }

    // Load after page load
    if (window.requestIdleCallback) {
        requestIdleCallback(loadHubSpotMeeting, {
            timeout: 2000
        });
    } else {
        window.addEventListener('load', function() {
            setTimeout(loadHubSpotMeeting, 500);
        });
    }
})();*/
</script>


<section class="abt-sec sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="blog-content-area html-content html-editor" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="mb-3">Company Overview:</h2>
                    <p>At Cozentus, we're dedicated to helping businesses unlock the full potential of their logistics
                        and supply chain operations through the power of advanced technology. With a leadership team
                        grounded in years of hands-on experience, we've built a reputation for partnering with top
                        logistics companies to solve their most complex challenges. </p>
                    <p>By leveraging AI, Machine Learning, and other advanced technologies, we develop tailored
                        solutions that not only streamline processes but also deliver real results improved efficiency,
                        faster delivery, and measurable ROI. Our approach is collaborative and personalized, ensuring
                        that our technology seamlessly integrates with your unique needs. Let's work together to build a
                        smarter, more agile future for your business. </p>
                </div>
                <a href="https://meetings.hubspot.com/david4662" rel="noopener" class="main-btn mb-5" data-aos="fade-up"
                    data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000">
                    <span>Schedule Your Meeting Now</span>
                </a>
            </div>
            <div class="col-lg-6 col-12">

                <div class="abt-img" data-aos="fade-left" data-aos-duration="1000">
                    <img src="https://www.cozentus.com/uploads/images/cozentus.gif" alt="cozentus_meetings">
                </div>

            </div>
        </div>
    </div>
</section>