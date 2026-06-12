<div id="smooth-content" class="parent-sevice-domain-capability">
    <!-- Start Section 1 Banner -->
    <?php if (!empty($pserv['about_heading'])) { ?>
        <div class="banner-style-three-area overflow-hidden bg-gray bg-cover" style="background: url(<?= base_url('uploads/images/') . $pserv['inner_banner_image'] ?>);">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-7 pr-60 pr-md-15 pr-xs-15">
                        <div class="banner-style-three-info">
                            <h2 class="wow fadeInUp"><?= $pserv['inner_banner_heading'] ?></h2>
                            <h4 class="fade-up-anim"><?= $pserv['inner_banner_heading'] ?></h4>
                            <p class="fade-up-anim">
                                <?= $pserv['inner_banner_description'] ?>
                            </p>
                            <div class="button mt-30 fade-up-anim">
                                <a href="contact-us.html" class="btn btn-style-one light">Book a Demo <i class="fas fa-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="chat-bot-thumb text-center">
                            <div class="illustration">
                                <img class="wow fadeInUp" data-wow-delay="300ms" src="<?= base_url('assets/img/illustration/dashboard-2.jpg') ?>" alt="Image Not Found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 1 -->

    <!-- Start Section 2 -->
    <?php if (!empty($pserv['advantage_heading'])) { ?>
        <div class="about-style-three-area default-padding bg-gray bg-cover" style="background: url(assets/img/shape/banner-16.jpg);">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <h2 class="title split-text-right split-text-in-right"><?= html_entity_decode($pserv['advantage_heading']) ?></h2>
                        <p>
                            <?= html_entity_decode($pserv['advantage_short_description']) ?>
                        </p>
                        <!-- <a class="btn btn-style-one" href="#">Download Brochure <i class="fas fa-arrow-right"></i></a> -->
                    </div>

                    <div class="col-lg-6">
                        <div class="about-style-three-thumb">
                            <?php
                            if (!empty($pserv['advantage_video'])) {
                                // Extract YouTube video ID
                                $videoUrl = urldecode($pserv['advantage_video']);
                                $videoId = '';
                                if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\&\?\/]+)/', $videoUrl, $matches)) {
                                    $videoId = $matches[1];
                                }
                            ?>
                                <img src="https://img.youtube.com/vi/<?= $videoId ?>/hqdefault.jpg">
                                <a href=" <?= urldecode($pserv['advantage_video']) ?>" class="popup-youtube video-button-v1"><i class="fas fa-play"></i></a>
                            <?php } else { ?>
                                <div class="illustration">
                                    <img class="wow fadeInUp" data-wow-delay="300ms" src="<?= base_url('uploads/images/') . $pserv['advantage_image'] ?>" alt="<?= $pserv['advantage_alt_text'] ?>">
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <?php if ($pserv['tailored_json']) { ?>
        <div class="project-style-one-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['tailored_heading'] ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="service-style-one-items fade-up-anim">
                    <div class="row gutter-zero">
                        <!-- Single Item -->
                        <?php
                        $count = 0;
                        foreach ($tailored as $wc) {
                            $count++;
                        ?>
                            <div class="col-lg-4 col-md-6 service-style-one-single">
                                <div class="service-style-one-item">
                                    <h5><a href="<?= urldecode($wc['ctalink']) ?>"><?= html_entity_decode($wc['heading']) ?></a></h5>
                                    <p>
                                        <?= html_entity_decode($wc['description']) ?>
                                    </p>
                                    <?php if (!empty($wc['ctalink'])) { ?>
                                        <a style="font-size:12px;margin-top:15px;" href="<?= urldecode($wc['ctalink']) ?>" class="btn-regular">
                                            Read more <i class="fas fa-arrow-right"></i>
                                        </a>

                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <div class="process-style-two-area overflow-hidden bg-cover default-padding bg-dark text-light" style="background-image: url(assets/img/shape/banner-20.jpg);">
        <div class="container">
            <div class="site-heading">
                <div class="row align-center">
                    <div class="col-lg-12">
                        <h2 class="title split-text-right split-text-in-right"> <?= $pserv['transformation_heading'] ?></h2>
                        <p>
                            <?= $pserv['transformation_short_description'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="process-style-two-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>01</span>
                            <h4>Analysis</h4>
                            <p>
                                Analysing entire supply chain.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>02</span>
                            <h4>Process Mapping</h4>
                            <p>
                                Identifying & Mapping existing workflows
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-2 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>03</span>
                            <h4>Problem Area Analysis</h4>
                            <p>
                                Identifying & analysing problem areas
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>04</span>
                            <h4>Development & Testing</h4>
                            <p>
                                Developing and testing applications and APIs
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 process-two-single">
                        <div class="process-style-two-item">
                            <span>05</span>
                            <h4>Implementation & Testing</h4>
                            <p>
                                Deploy -> Test -> Report
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 4 -->

    <!-- Start Section 5 Tools & Technology-->
    <?php if (!empty($clients)) { ?>
        <div class="testimonial-style-four-area default-padding bg-gray bg-cover overflow-hidden" style="background: url(assets/img/shape/banner-16.jpg);">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right">Tools & Technology</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-style-four-left-carousel swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Start Team Item -->
                    <?php foreach ($clients as $ins) { ?>
                        <div class="swiper-slide">
                            <div class="testimonial-style-four-item">
                                <div class="thumb">
                                    <img src="<?= base_url('uploads/images/') . $ins['image'] ?>" alt="Image Not Found">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Team Item -->

                </div>
            </div>

        </div>
    <?php } ?>
    <!-- End Section 5 -->

    <!-- Start Section 6 Faq -->
    <?php if (!empty($pserv['heading_faq'])) { ?>
        <div class="faq-style-one-area accordion-secondary blurry-shape-right-bottom default-padding bg-gray"
            style="background-image: url(assets/img/shape/7.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-style-one-info">
                            <h2 class="title split-text-right split-text-in-right"><?= $pserv['heading_faq'] ?></h2>
                            <a href="<?= base_url('book-free-consultation') ?>" class="btn btn-style-one btn-dark mt-10 wow fadeInUp"
                                data-wow-delay="100ms">Book a Demo <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="accordion-style-one-items fade-up-anim">
                            <div class="accordion" id="faqAccordion1234">
                                <?php $faqArr = json_decode($pserv['card_json_faq'], true);
                                $count = 0;
                                foreach ($faqArr as $fq) {
                                    $count++;
                                ?>
                                    <div class="accordion-style-one-item">
                                        <h2 class="accordion-header" id="collapseOne1234<?= $count ?>">
                                            <button class="accordion-button <?= $count == 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne1234<?= $count ?>" aria-expanded="<?= $count == 1 ? true : false ?>"
                                                aria-controls="collapseOne1234<?= $count ?>">
                                                <?= $fq['heading'] ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne1234<?= $count ?>" class="accordion-collapse collapse <?= $count == 1 ? 'show' : '' ?>"
                                            aria-labelledby="collapseOne1234<?= $count ?>" data-bs-parent="#faqAccordion1234">
                                            <div class="accordion-body">
                                                <p>
                                                    <?= $fq['description'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 6 Faq -->

    <!-- Start Section 7 Blog -->
    <?php
    if (!empty($pserv)) {
        if (!empty($pserv['servtp'])) {
            $serviceid = "sub_" . $pserv['id'];
        } else {
            $serviceid = $pserv['id'];
        }

        $blogs = $this->home_model->getlatestcasesbyservice($serviceid, 1);
    } else {
        $blogs = $this->home_model->getlatestblogs(1, 4);
    }
    if (!empty($blogs)): ?>
        <div class="home-blog-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right">Related Blogs</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="blog-style-two-box">
                    <div class="row">
                        <!-- Single Item -->
                        <?php foreach ($blogs as $cs) { ?>
                            <div class="col-xl-3 col-lg-6">
                                <div class="blog-style-two fade-up-anim">
                                    <div class="thumb zoom-thumb">
                                        <a href="<?= base_url('blog/') . $cs['slug'] ?>"><img class="img-reveal"
                                                src="<?= base_url('uploads/images/') . $cs['image'] ?>" alt="<?= $cs['alt_text'] ?>"></a>
                                    </div>
                                    <div class="info">
                                        <div class="blog-one-meta">
                                            <ul>
                                                <li>
                                                    <?= date('F d, Y', strtotime($cs['posted'])) ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="blog-title">
                                            <a href="<?= base_url('blog/') . $cs['slug'] ?>"><?= $cs['title'] ?></a>
                                        </h5>
                                        <!-- <a href="<?= base_url('blog/') . $cs['slug'] ?>" class="btn-regular">
                                        Read more <img src="assets/img/icon/arrow-right-three.png"
                                            alt="Image Not Found">
                                    </a> -->
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- End Section 1 Blog  -->
</div>