<header class="inner-main-header style-2">

    <picture>
        <source media="(max-width: 600px)"
            srcset="https://www.cozentus.com/uploads/images/digital-transformation.webp" />
        <img src="https://www.cozentus.com/uploads/images/data-science.jpg" alt="" />
    </picture>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12  mx-auto">
                <div class="banner-content text-center d-block blog-detail" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Accelerating growth through technology and innovation</h1>
                    <p class="para">
                        We Understand the Pulse of Logistics Industry
                    </p>
                    <div class="row justify-content-center">
                        <a href="<?= base_url('career#lifeatcozentus') ?>" class="main-btn">
                            <span>Life at Cozentus</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="abt-sec sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="abt-con">
                    <div class="sec-head">
                        <h2>
                            The Cornerstone <span>of Our Success</span>
                        </h2>
                    </div>
                    <p class="para">
                        Leveraging technological advancement speedily and successfully to meet fluctuating supply chain
                        demands is what we do best. Cozentus is led by SCM veterans with a collective experience of 60+
                        years in supply chain logistics complemented by a dynamic team of IT veterans. The team’s
                        diligence, perseverance, capability, willingness and ability to push boundaries, and above all
                        teamwork are what make Cozentus the best-in-class supply chain services and solutions provider.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="abt-img">
                    <img src="<?= base_url() ?>assets/images/team-img.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-sec pt-0 sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center">
                    <!--<p class="sub">Our People</p>-->
                    <h2>
                        Meet our <span>Management team</span>
                    </h2>
                </div>
                <div class="team-grid">
                    <?php if (!empty($manageteam))
                        foreach ($manageteam as $tm) {
                    ?>
                        <div class="team-card">
                            <a class="team-p-img d-block" href="<?= base_url('team/') . $tm['slug'] ?>">

                                <div class="el">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <img src="<?= base_url('uploads/images/') . $tm['image'] ?>" alt="<?= $tm['alt_text'] ?>">
                            </a>


                            <div class="det">
                                <h3><?= $tm['name'] ?></h3>
                                <p><?= $tm['title'] ?></p></a>
                                <a href="<?= urldecode($tm['link']) ?>" class="lk">
                                    <img src="<?= base_url('assets/images/linkedin-icon.svg') ?>" alt="">
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <div class="col-12 mt-80">
                <div class="sec-head center">
                    <!--<p class="sub">Our People</p>-->
                    <h2>
                        Meet our <span>leadership team</span>
                    </h2>
                </div>
                <div class="team-grid">
                    <?php if (!empty($leaderteam))
                        foreach ($leaderteam as $tm) {
                    ?>
                        <div class="team-card">
                            <a class="team-p-img d-block" href="<?= base_url('team/') . $tm['slug'] ?>">

                                <div class="el">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <img src="<?= base_url('uploads/images/') . $tm['image'] ?>" alt="<?= $tm['alt_text'] ?>">
                            </a>


                            <div class="det">
                                <h3><?= $tm['name'] ?></h3>
                                <p><?= $tm['title'] ?></p></a>
                                <a href="<?= urldecode($tm['link']) ?>" class="lk">
                                    <img src="<?= base_url('assets/images/linkedin-icon.svg') ?>" alt="">
                                </a>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec cta-sec">
    <img src="assets/images/cc1.svg" class="c1" alt="">
    <img src="assets/images/cc2.svg" class="c2" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="cta-con">
                    <div class="sec-head center">
                        <h2>
                            Leverage your Talent <span>to Deliver Quality</span>
                        </h2>
                    </div>
                    <p class="para text-center mb-30">
                        Move to your next career destination the Cozentus way.
                    </p>
                    <a href="<?= base_url('career#jobs') ?>" class="main-btn center">
                        <span>Join Cozentus</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>