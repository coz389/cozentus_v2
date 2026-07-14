<style>
    .address-card {
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .address-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .address-card.active {
        transform: translateY(-5px);
    }

    .address-card.active .con-map-block {
        background: linear-gradient(135deg, #2563eb, #3b82f6);
        color: white;
        transition: all 0.3s ease;
    }

    .address-card.active .con-map-block h3,
    .address-card.active .con-map-block p {
        color: white;
    }

    .address-card.active .con-map-block span {
        background: white;
    }

    .con-map-block {
        padding: 15px;
        /*border-radius: 15px;*/
        background: white;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        min-height: 160px !important;
        border: 1px solid rgba(37, 99, 235, 0.1);
    }

    .con-map-block h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #041424;
        transition: color 0.3s ease;
    }

    .con-map-block p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 0;
        transition: color 0.3s ease;
    }

    .con-map-block span {
        display: inline-block;
        width: 50px;
        height: 3px;
        background: #2563eb;
        margin-top: 15px;
        border-radius: 2px;
        transition: background 0.3s ease;
    }

    /* Map container styles */
    #map {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        /*border-radius: 20px;*/
    }

    /* Custom marker popup styles */
    .custom-popup {
        font-family: 'Poppins', sans-serif;
    }

    .custom-popup h4 {
        color: #2563eb;
        margin-bottom: 8px;
        font-size: 16px;
    }

    .custom-popup p {
        color: #666;
        margin: 0;
        font-size: 12px;
        line-height: 1.4;
    }
</style>
<!-- Add these styles for better popup appearance -->
<style>
    .custom-popup h4 {
        color: #2563eb;
        margin: 0 0 5px 0;
        font-size: 14px;
        font-weight: 600;
    }

    .custom-popup p {
        margin: 0;
        font-size: 11px;
        line-height: 1.4;
        color: #666;
    }

    .leaflet-popup-content-wrapper {
        border-radius: 0px !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .leaflet-popup-tip {
        background: white;
    }

    /* Optional: Marker hover effect */
    .custom-marker div:hover {
        transform: scale(1.1);
        background-color: #f97316 !important;
        transition: all 0.3s ease;
    }
</style>
<div id="smooth-content">
    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="contact-style-one-items" style="background-image: url(assets/img/shape/map.png);">
                <div class="row align-center">
                    <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-50">

                        <div class="contact-style-one-info">
                            <h2 class="split-text title">Get in touch with a transformation expert</h2>
                            <ul>
                                <li class="wow fadeInUp">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Global Helpline</h4>
                                        <a href="tel:+919777126600">+91 977 712 6600 (India)</a>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Our Location</h4>
                                        <p>
                                            SRB Tower, 5th and 6th Floor, Infocity, Bhubaneswar -751024, Odisha, India
                                        </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="500ms">
                                    <div class="icon">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Official Email</h4>
                                        <a href="mailto:supplychain@cozentus.com">supplychain@cozentus.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                        <div class="contact-form-card" style="background-image: url(assets/img/shape/3.png);">
                            <h4 class="sub-title">Free Consultation</h4>
                            <p>
                                Want to work with a dynamic experienced team of next-gen technocrats?
                            </p>
                            <form data-form="insertcontact" id="contactForm" data-aos="fade-right" data-aos-duration="1000" class="contact-form-custom">
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
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification mb-3" role="alert">
                                    <div id="message" class="alert-msg text-danger"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-style-one" type="submit" id="submitBtn" data-aos="fade-up" data-aos-duration="1200">
                                            Get in Touch <i class="fas fa-arrow-right"></i>
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
    <!-- End Contact -->

    <!-- Start Map 
    ============================================= -->
    <!-- <div class="maps-area default-padding-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48388.929990966964!2d-74.00332!3d40.711233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1653598669477!5m2!1sen!2sus"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Map -->

    <!-- Map Section start -->
    <div class="maps-area default-padding-2 overflow-hidden bg-gray ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-style-one-info">
                        <h2 class="split-text title"> Locate us on <span>the Globe</span></h2>
                    </div>
                    <!-- Map Container -->
                    <div class="con-map mt-40">
                        <div id="map" style="width: 100%; height: 450px; /*border-radius: 20px;*/ overflow: hidden;"></div>
                    </div>

                    <!-- Address Cards -->
                    <div class="row justify-content-center" style="margin-top: 20px; row-gap: 20px;">
                        <div class="col-lg-4 col-12 address-card" data-lat="20.34194" data-lng="85.80601" data-zoom="17" data-address="Odisha">
                            <div class="con-map-block">
                                <h3>Odisha, India</h3>
                                <p>
                                    SRB Tower, 5th and 6th Floor, Infocity, Bhubaneswar -751024, Odisha, India
                                </p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 address-card" data-lat="17.45867" data-lng="78.37059" data-zoom="17" data-address="Hyderabad">
                            <div class="con-map-block">
                                <h3>Hyderabad, India</h3>
                                <p>
                                    Cozentus Technologies, Unit No 814, 8th Floor, Jayabheri Silicon Towers, DHLF VC,
                                    Silicon Tower, Hitech City Road, Kothaguda, Hyderabad, Telangana- 500 032
                                </p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 address-card" data-lat="51.58039" data-lng="-0.33742" data-zoom="17" data-address="Europe">
                            <div class="con-map-block">
                                <h3>Europe</h3>
                                <p>
                                    Ground Floor, Hygeia Building, 66-68 College Road, Harrow Middlesex, HA1 1BE, United Kingdom
                                </p>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    // Initialize the map
    let map;
    let markers = [];

    // Define locations with their details
    const locations = [{
            name: "Odisha, India",
            lat: 20.34194,
            lng: 85.80601,
            zoom: 17,
            address: "SRB Tower, 5th and 6th Floor, Infocity, Bhubaneswar -751024, Odisha, India",
            fullAddress: "Cozentus Technologies<br>SRB Tower, 5th and 6th Floor<br>Infocity, Bhubaneswar -751024<br>Odisha, India"
        },
        {
            name: "Hyderabad, India",
            lat: 17.45867,
            lng: 78.37059,
            zoom: 17,
            address: "Cozentus Technologies, Unit No 814, 8th Floor, Jayabheri Silicon Towers, DHLF VC, Silicon Tower, Hitech City Road, Kothaguda, Hyderabad, Telangana- 500 032",
            fullAddress: "Cozentus Technologies<br>Unit No 814, 8th Floor<br>Jayabheri Silicon Towers<br>Hitech City Road, Kothaguda<br>Hyderabad, Telangana- 500 032"
        },
        {
            name: "Europe (UK)",
            lat: 51.58039,
            lng: -0.33742,
            zoom: 17,
            address: "Ground Floor, Hygeia Building, 66-68 College Road, Harrow Middlesex, HA1 1BE, United Kingdom",
            fullAddress: "Cozentus Technologies<br>Ground Floor, Hygeia Building<br>66-68 College Road<br>Harrow, Middlesex, HA1 1BE<br>United Kingdom"
        }
    ];

    // Initialize map when page loads
    document.addEventListener('DOMContentLoaded', function() {
        // Create map centered on global view
        map = L.map('map').setView([20, 0], 2);

        // COLORFUL MAP LAYERS - Choose one or add all with control

        // Option 1: CartoDB Voyager (Best - Google Maps style)
        const voyager = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; CartoDB',
            subdomains: 'abcd',
            maxZoom: 19
        });

        // Option 2: OpenStreetMap Standard
        const osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors',
            maxZoom: 19
        });

        // Option 3: Satellite Imagery
        const satellite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: '&copy; Esri',
            maxZoom: 19
        });

        // Option 4: Stamen Terrain (Beautiful colors)
        const terrain = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}{r}.png', {
            attribution: 'Map tiles by Stamen Design',
            subdomains: 'abcd',
            maxZoom: 18
        });

        // Add default colorful layer
        voyager.addTo(map);

        // Optional: Add layer control to switch between map styles
        const baseMaps = {
            "🗺️ Google Style": voyager,
            "🌍 Standard": osm,
            "🛰️ Satellite": satellite,
            "⛰️ Terrain": terrain
        };
        L.control.layers(baseMaps).addTo(map);

        // Add markers for all locations
        locations.forEach((location, index) => {
            // Create custom marker icon with pulse animation
            const customIcon = L.divIcon({
                className: 'custom-marker',
                html: `<div style="background-color: #2563eb; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,0.3); border: 2px solid white; transition: transform 0.3s ease;">
                      <svg style="width: 16px; height: 16px; color: white;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                      </svg>
                    </div>`,
                iconSize: [30, 30],
                popupAnchor: [0, -15]
            });

            // Create marker
            const marker = L.marker([location.lat, location.lng], {
                    icon: customIcon
                })
                .addTo(map)
                .bindPopup(`
                <div class="custom-popup">
                    <h4>${location.name}</h4>
                    <p>${location.fullAddress}</p>
                </div>
            `);

            markers.push(marker);
        });

        // Add click handlers to address cards
        const addressCards = document.querySelectorAll('.address-card');
        let currentlyActiveCard = null;

        addressCards.forEach((card, index) => {
            card.addEventListener('click', function(e) {
                e.stopPropagation();

                // Remove all active states
                addressCards.forEach((c, i) => {
                    c.classList.remove('active');
                    const block = c.querySelector('.con-map-block');
                    if (block) block.classList.remove('active');
                    const cardP = c.querySelector('.con-map-block p');
                    if (cardP) cardP.style.display = 'none';
                });

                // Activate clicked card
                this.classList.add('active');
                const conMapBlock = this.querySelector('.con-map-block');
                if (conMapBlock) conMapBlock.classList.add('active');
                const currentCardP = this.querySelector('.con-map-block p');
                if (currentCardP) currentCardP.style.display = 'block';

                currentlyActiveCard = this;

                // Map actions
                const location = locations[index];
                map.flyTo([location.lat, location.lng], location.zoom, {
                    duration: 1.5,
                    easeLinearity: 0.25
                });

                setTimeout(() => {
                    markers[index].openPopup();
                }, 800);
            });
        });

        // Add global view button
        const addGlobalViewButton = () => {
            const controlContainer = document.createElement('div');
            controlContainer.className = 'leaflet-control leaflet-bar';
            controlContainer.style.cssText = `
                position: absolute;
                bottom: 20px;
                right: 20px;
                z-index: 1000;
                background: white;
                padding: 10px 15px;
                border-radius: 8px;
                cursor: pointer;
                box-shadow: 0 2px 10px rgba(0,0,0,0.2);
                font-family: 'Poppins', sans-serif;
                font-size: 14px;
                font-weight: 500;
                color: #2563eb;
                transition: all 0.3s ease;
            `;
            controlContainer.innerHTML = '🌍 Global View';
            controlContainer.onclick = () => {
                map.flyTo([20, 0], 2, {
                    duration: 1.5,
                    easeLinearity: 0.25
                });

                addressCards.forEach(c => {
                    c.classList.remove('active');
                    const cardP = c.querySelector('.con-map-block p');
                    if (cardP) cardP.style.display = 'none';
                });
                currentlyActiveCard = null;
            };
            controlContainer.onmouseover = () => {
                controlContainer.style.backgroundColor = '#2563eb';
                controlContainer.style.color = 'white';
            };
            controlContainer.onmouseout = () => {
                controlContainer.style.backgroundColor = 'white';
                controlContainer.style.color = '#2563eb';
            };
            document.querySelector('#map').appendChild(controlContainer);
        };

        addGlobalViewButton();

        // Add scale control
        L.control.scale({
            metric: true,
            imperial: true
        }).addTo(map);
    });

    // Handle responsive map resize
    window.addEventListener('resize', function() {
        if (map) {
            setTimeout(() => {
                map.invalidateSize();
            }, 100);
        }
    });
</script>

<!-- Map section end -->
<script>
    function scrollBottom() {

        $('html,body').animate({
            scrollTop: $('#ct-bt').offset().top - 100
        }, 0)
    }
    scrollBottom();
</script>

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

                            // Redirect after short delay so user can read message
                            setTimeout(() => {
                                window.location.href = contextUrl + "thankyou";
                            }, 1500);
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