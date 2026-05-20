<header class="inner-main-header style-2">
    <img src="<?= base_url('uploads/images/') . $image ?>" alt="<?= $alt_text ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12  mx-auto">
                <div class="banner-content text-center d-block blog-detail" data-aos="fade-up" data-aos-duration="1000">
                    <h1><?= $title ?></h1>
                    <!--<ul class="bread-c">-->
                    <!--    <li>-->
                    <!--        <a href="<?= base_url() ?>">Home</a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="javascript:void(0)"><?= $title ?></a>-->
                    <!--    </li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div>
</header>
<section class="blog-content-sec sec">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-7 col-12">

                <!-- ========================= -->
                <!-- TOP: Date + Share -->
                <!-- ========================= -->
                <div style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                    flex-wrap:wrap;
                    gap:15px;
                    margin-bottom:20px;
                ">

                    <!-- Date -->
                    <div style="font-size:14px; color:#666;">
                        Updated Date: <?= date('d F Y', strtotime($posted)) ?>
                    </div>

                    <!-- Share -->
                    <ul style="display:flex; gap:12px; padding-left:0; margin:0;">
                        <li style="list-style:none;">
                            <a href="javascript:void(0)" onclick="link_click()">
                                <img src="<?= base_url('assets/images/linkedin.svg') ?>">
                            </a>
                        </li>
                        <li style="list-style:none;">
                            <a href="javascript:void(0)" onclick="fbs_click()">
                                <img src="<?= base_url('assets/images/facebook.svg') ?>">
                            </a>
                        </li>
                        <li style="list-style:none;">
                            <a href="javascript:void(0)" onclick="twi_click()">
                                <img src="<?= base_url('assets/images/x.png') ?>">
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- ========================= -->
                <!-- Blog Content -->
                <!-- ========================= -->
                <div class="blog-content-area html-content html-editor">
                    <?= html_entity_decode($content) ?>
                </div>


                <!-- ========================= -->
                <!-- BOTTOM: Author Box -->
                <!-- ========================= -->
                <?php if (!empty($author)) { ?>
                <div style="
                    display:flex;
                    align-items:center;
                    gap:15px;
                    background:#f8f9fb;
                    padding:18px;
                    box-shadow:0 4px 12px rgba(0,0,0,0.06);
                    margin-top:30px;
                     max-width:320px;
                ">

                    <img src="<?= base_url('uploads/images/') . $aimage ?>" alt="<?= $aalt_text ?>" style="
                            width:70px;
                            height:70px;
                            border-radius:50%;
                            object-fit:cover;
                        ">

                    <div>
                        <div style="font-size:12px; color:#888;">AUTHOR</div>

                        <div style="font-size:18px; font-weight:600; color:#000;">
                            <?= $author ?>
                        </div>

                        <div style="font-size:14px; color:#666;">
                            - <?= $authortitle ?>
                        </div>
                    </div>

                </div>
                <?php } ?>
                <!-- ========================= -->



                <!-- ========================= -->
                <!-- BOTTOM: Recent Posts -->
                <!-- ========================= -->
                <?php if ($type == 1 && !empty($blogs)) { ?>

                <div style="margin-top:40px;">
                    <h3 style="margin-bottom:20px;">Recent Posts</h3>

                    <div class="row" style="row-gap:24px;">

                        <?php foreach ($blogs as $blog) { ?>
                        <div class="col-lg-4 col-md-6">

                            <div style="
                                background:#fff;
                                overflow:hidden;
                                box-shadow:0 6px 18px rgba(0,0,0,0.08);
                                height:100%;
                            ">

                                <a href="<?= base_url('blog/') . $blog['slug'] ?>">
                                    <img src="<?= base_url('uploads/images/') . $blog['image'] ?>"
                                        alt="<?= $blog['title'] ?>" style="width:100%; height:170px; object-fit:cover;">
                                </a>

                                <div style="padding:15px;">
                                    <h5 style="font-size:16px; font-weight:600; margin:0;">
                                        <a href="<?= base_url('blog/') . $blog['slug'] ?>"
                                            style="text-decoration:none; color:#000;">
                                            <?= $blog['title'] ?>
                                        </a>
                                    </h5>
                                </div>

                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>

                <?php } ?>

                <!-- ========================= -->
                <!-- ENHANCED CTA SECTION -->
                <!-- ========================= -->
                <div class="blog-cta-section">

                    <div class="cta-inner">

                        <div class="cta-text">
                            <h2>Transform Your Supply Chain Tech Today</h2>
                        </div>

                        <div class="cta-actions">
                            <a href="<?= base_url('book-free-consultation') ?>" class="cta-primary-btn">
                                Book a Strategy Call
                            </a>

                            <a href="<?= base_url('reports') ?>" class="cta-secondary-btn">
                                Explore Our Whitepapers
                            </a>
                        </div>

                    </div>

                </div>
                <!-- ========================= -->
                <!-- END CTA SECTION -->
                <!-- ========================= -->



            </div>
        </div>
    </div>
</section>