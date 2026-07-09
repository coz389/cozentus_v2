<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area text-center bg-cover text-dark bg-theme" style="background-image: url(<?= base_url('assets/img/shape/banner-16.jpg') ?>);">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1><?= $title ?></h1>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<div class="blog-area single full-blog full-blog">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content wow fadeInUp col-lg-8 mx-auto col-md-12">

                    <div class="item">
                        <div class="blog-item-box">

                            <!-- <div class="thumb">
                        <a href="#"><img src="<?= base_url('assets/img/blog/v1.jpg') ?>" alt="Thumb"></a>
                    </div> -->

                            <div class="info">
                                <div class="meta  d-flex justify-content-between align-items-left flex-column flex-md-row">
                                    <ul class="d-flex mb-2 mb-md-0">
                                        <li>
                                            <a href="#"><i class="fas fa-calendar-alt"></i> <?= date('F d, Y', strtotime($posted)) ?></a>
                                        </li>
                                        <?php /*if (!empty($author)) { ?>
                                            <li>
                                                <a href="#">
                                                    <img src="<?= base_url('uploads/images/') . $aimage ?>" alt="<?= $aalt_text ?>" style="
                                                width:25px;
                                                height:25px;
                                                border-radius:50%;
                                                object-fit:cover;
                                            ">
                                                    <?= $author ?>
                                                </a>
                                            </li>
                                        <?php }*/ ?>
                                    </ul>
                                    <div class="social">
                                        <ul class="d-flex mb-0">
                                            <li>
                                                <a class="linkedin" href="#" target="_blank" onclick="link_click()"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a class="facebook" href="#" target="_blank" onclick="fbs_click()"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank" onclick="twi_click()">
                                                    <img src="<?= base_url('assets/img/icon/icons8-x-30.png') ?>" alt="Image Not Found" height="20">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <h1><?= $title ?></h1> -->
                                <div>
                                    <?= html_entity_decode($content) ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Post Author -->
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
                            <img src="<?= base_url('uploads/images/') . $aimage ?>" alt="<?= $author ?>" style="
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
                    <?php }  ?>
                    <!-- Post Author -->

                    <?php if ($type == 1 && !empty($blogs)) { ?>
                        <div class="blog-item-box mt-5">
                            <div class="row">
                                <div class="section-title text-left">
                                    <h2 class="cz-main-title text-dark">Recent Posts</h2>
                                </div>
                                <?php foreach ($blogs as $blog) { ?>
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                                        <div class="blog-style-two fade-up-anim">
                                            <div class="thumb">
                                                <a href="<?= base_url('blog/') . $blog['slug'] ?>">
                                                    <img class="myimg" src="<?= base_url('uploads/images/') . $blog['image'] ?>" alt="<?= $blog['title'] ?>">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="blog-one-meta">
                                                    <ul>
                                                        <li>
                                                            <?= date('F d, Y', strtotime($blog['posted'])) ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 class="blog-title my-custom-blog-heading">
                                                    <a href="<?= base_url('blog/') . $blog['slug'] ?>"> <?= $blog['title'] ?></a>
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    <?php } ?>

                    <div class="newsletter-style-three text-center bg-dark mt-5 mb-5 p-5" style="background-image: url(<?= base_url('assets/img/shape/10.png') ?>);">
                        <h4 class="text-light">Transform Your Supply Chain Tech Today</h4>
                        <p>Book a Strategy Call Explore Our Whitepapers</p>

                        <div class="cta-buttons d-flex  flex-column flex-md-row justify-content-center gap-4">
                            <a href="<?= base_url('book-free-consultation') ?>" class="btn btn-style-one mb-3">
                                Book a Strategy Call <i class="fa fa-arrow-right"></i>
                            </a>
                            <a href="<?= base_url('reports') ?>" class="btn btn-style-one mb-3">
                                Explore Our Whitepapers <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>


                    </div>

                    <!-- Start Post Pagination -->

                    <!-- End Post Pagination -->
                </div>


            </div>
        </div>
    </div>
</div>
<!-- End Blog -->