<header class="inner-main-header style-2">
    <img src="<?= base_url('assets/images/contact-banner.jpg') ?>" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12  mx-auto">
                <div class="banner-content text-center d-block blog-detail" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Take Your Supply Chain to the Next Level</h1>
                    <button class="main-btn" onclick="scrollBottom()">
                        <span>Talk to an expert</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    /* ─── CONTACT BAR ────────────────────────────── */
    .contact-bar-inner {
        max-width: 1420px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .cb-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.6rem 2rem;
        border: 1px solid rgb(12 89 219);
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 10px;
        background: rgb(255, 255, 255);
        z-index: 1;
    }

    .cb-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: linear-gradient(90deg, #2563eb, #3b82f6);
        transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: -1;
    }

    .cb-item:hover::before {
        width: 100%;
    }

    .cb-item::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, #2563eb, #3b82f6);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .cb-item:hover::after {
        transform: scaleX(1);
    }


    .cb-item .cb-icon,
    .cb-item div {
        position: relative;
        z-index: 2;
        transition: color 0.3s ease;
    }

    .cb-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .cb-item:hover .cb-icon {
        border-color: #e5e7eb;
        border-style: solid;
        transform: scale(1.12) rotate(-6deg);
        box-shadow: 0 6px 20px rgba(37, 99, 235, .4);
    }

    .cb-item:hover .cb-icon svg {
        color: #fff;
    }

    .cb-item:hover .cb-label {
        color: #e5e7eb;
    }

    .cb-item:hover .cb-value {
        color: #e5e7eb;
    }

    .cb-item:hover a {
        color: #e5e7eb;
    }

    .cb-icon {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(37, 99, 235, .15);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: background .3s, transform .3s, box-shadow .3s;
    }

    .cb-icon i {
        color: #2563eb;
        transition: color .3s;
    }

    .cb-label {
        font-size: 1.25rem;
        line-height: 1.75rem;
        color: rgb(4 20 36 / 1);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .08em;
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .cb-value {
        font-size: 1.25rem;
        line-height: 1.75rem;
        font-weight: 500;
        color: rgb(12 89 219 / 1);
        margin-top: .15rem;
        transition: color .3s;
        transition-duration: 500ms;
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .con-form-wrap .card img {
        height: 650px;
        object-fit: fill;
    }

    .con-form-wrap {
        padding: 5em 0px !important;
    }

    @media (max-width: 575px) {
        .contact-bar-inner {
            max-width: 1420px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .con-form-wrap .card img {
            height: 250px;
            width: 100%;
            object-fit: fill;
        }
    }
</style>

<!-- ─── CONTACT BAR ──────────────────────────────────── -->
<section class="con-map-sec sec">
    <div class="contact-bar animate-up delay-1">
        <div class="contact-bar-inner">
            <div class="cb-item">
                <div class="cb-icon">
                    <svg stroke="currentColor" fill="currentColor"
                        stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path>
                    </svg>
                </div>
                <div>
                    <div class="cb-label">Call Us Anytime</div>
                    <div class="cb-value">+91 977 712 6600 (India)</div>
                </div>
            </div>
            <div class="cb-item">
                <div class="cb-icon">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0-8 4.99L4 6h16zm0 12H4V8l8 5 8-5v10z"></path>
                    </svg>
                </div>
                <div>
                    <div class="cb-label">Send E-Mail</div>
                    <div class="cb-value"><a href="mailto:supplychain@cozentus.com" class="__cf_email__" data-cfemail="e38b868f8f8ca38f8c848a8e8c9586cd8a8d">supplychain@cozentus.com</a></div>
                </div>
            </div>
            <div class="cb-item">
                <div class="cb-icon">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                    </svg>
                </div>
                <div>
                    <div class="cb-label">Address</div>
                    <div class="cb-value">
                        SRB Tower, 5th and 6th Floor, Infocity, Bhubaneswar -751024, Odisha, India</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="con-main-sec" id="ct-bt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="con-form-wrap">
                    <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                        <h1>
                            Get in touch with a transformation expert
                        </h1>
                    </div>
                    <form data-form="insertcontact" data-aos="fade-right" data-aos-duration="1000"
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
                                        <input type="text" name="phone" id="phone" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Organisation Name
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="organisation" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
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
                                    <label for="" class="label-text">
                                        Services Interested In
                                    </label>
                                    <div class="inp-group">
                                        <div class="select-wrap">
                                            <select name="service" id="">
                                                <option value="">Select Service</option>
                                                <?php if (!empty($pservcont))
                                                    foreach ($pservcont as $ser) {
                                                        echo "<option value='" . $ser['name'] . "'>" . $ser['name'] . "</option>";
                                                    } ?>
                                            </select>
                                            <img src="<?= base_url('assets/images/select-drop.svg') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the
                                            Cozentus Privacy Policy (<a
                                                href="<?= base_url('privacy-statement') ?>">Privacy
                                                Statement</a>)</label>
                                        <input type="checkbox" name="privacy_policy" class="form-check-input"
                                            id="exampleCheck1">
                                    </div>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                            <div class="col-12">
                                <div class="btn-flex mt-40">
                                    <button class="main-btn" id="sbt-btn">
                                        <span>Schedule a Meeting</span>
                                    </button>
                                    <!--<button class="main-btn phone-btn with-icon tr-btn">-->
                                    <!--    <img src="<?= base_url('assets/images/phone.svg') ?>" alt="">-->
                                    <!--    <span>Get a Call back</span>-->
                                    <!--</button>-->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="con-form-wrap">
                    <div class="card">
                        <img src="<?= base_url('assets/images/Industries-Section-image.png') ?>" class="card-img-top" alt="..." data-aos="fade-left" data-aos-duration="1000">
                        <div class="card-body" data-aos="" style="background-color: rgb(12 89 219); color: rgb(255 255 255);">
                            <h3 class="card-title">Want to work with a <span>dynamic experienced</span> team of next-gen technocrats?</h3>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
</section>

<!-- Map Section start -->
<section class="con-map-sec sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                        Locate us on <span>the Globe</span>
                    </h2>
                </div>

                <!-- Map Container -->
                <div class="con-map mt-40">
                    <div id="map" style="width: 100%; height: 450px; /*border-radius: 20px;*/ overflow: hidden;"></div>
                </div>

                <!-- Address Cards -->
                <div class="row justify-content-center" style="margin-top: 10px; row-gap: 20px;">
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
</section>

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