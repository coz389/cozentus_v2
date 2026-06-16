<style>
    #sliding-text {
        display: inline-block;
        color: #0056b3;
        min-width: 400px;
        background-image: url(assets/img/shape/banner-2.jpg);
        background-size: cover;
        background-position: center;
        padding: 0 10px;
    }

    .char {
        display: inline-block;
        transition: all 0.15s ease;
        /* background-image: url(assets/img/shape/banner-2.jpg);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: cover;
        background-position: center; */
    }

    /* Remove animation (right to left) */
    .char.hide {
        opacity: 0;
        transform: translateX(-10px);
    }

    /* Add animation (left to right) */
    .char.show {
        opacity: 0;
        transform: translateX(20px);
        animation: reveal 0.3s forwards;
    }

    @keyframes reveal {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
<div id="smooth-content">
    <!-- Start Section 1 -->
    <?php if (!empty($banners)) { ?>
        <div class="homepage-carousel2 swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php foreach ($banners as $key => $br) {
                    $class = "banner-content";
                    if ($key == 0) {
                        $class = "banner-content-left";
                        $btn_class = "float:left";
                    } else if ($key == 1) {
                        $class = "banner-content";
                        $btn_class = "text-center";
                    } else {
                        $class = "banner-content-right";
                        $btn_class = "float:right";
                    }
                ?>
                    <div class="swiper-slide">
                        <div class="banner-box">
                            <?php if (!empty($br['video_id'])) { ?>
                                <?php echo $br['video_id'] ?>
                            <?php } else { ?>
                                <img src="<?= base_url('uploads/images/') . $br['image'] ?>" alt="<?= $br['alt_text'] ?>">
                            <?php } ?>
                            <div class="<?= $class ?>">
                                <h1> <?= html_entity_decode($br['title']) ?> </h1>
                                <p> <?= html_entity_decode($br['short_description']) ?></p>

                                <?php if (!empty($br['cta_btn']) && !empty($br['cta_link'])) { ?>
                                    <div class="button mt-30 d-block <?= $btn_class  ?>">
                                        <a href="<?= urldecode($br['cta_link']) ?>" class="btn btn-style-one light " style="<?= $btn_class  ?>"><?= html_entity_decode($br['cta_btn']) ?> <i class=" fas fa-arrow-right"></i></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="swiper-pagination"></div>
            <!-- <div class="project-swiper-nav">
                <div class="homepage-carousel2-prev"><i class="fas fa-angle-left"></i></div>
                <div class="homepage-carousel2-next"><i class="fas fa-angle-right"></i></div>
            </div> -->
        </div>
    <?php } ?>

    <!--
    <div class="container mt-4">
        <div class="row g-2">

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="#who-we-are"
                    class="btn btn-primary w-100 h-100 d-flex align-items-center 
                      justify-content-center text-center py-2 lh-sm"
                    style="font-size: 0.82rem;">
                    <?= html_entity_decode($page_data[0]['sub_menu_title1']) ?>
                </a>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="#what-do-we-offer"
                    class="btn btn-primary w-100 h-100 d-flex align-items-center 
                      justify-content-center text-center py-2 lh-sm"
                    style="font-size: 0.82rem;">
                    <?= html_entity_decode($page_data[0]['sub_menu_title2']) ?>
                </a>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="#our-approach"
                    class="btn btn-primary w-100 h-100 d-flex align-items-center 
                      justify-content-center text-center py-2 lh-sm"
                    style="font-size: 0.82rem;">
                    Our Approach
                </a>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="#why-choose-us"
                    class="btn btn-primary w-100 h-100 d-flex align-items-center 
                      justify-content-center text-center py-2 lh-sm"
                    style="font-size: 0.82rem;">
                    <?= html_entity_decode($page_data[0]['sub_menu_title4']) ?>
                </a>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="#whom-do-we-serve"
                    class="btn btn-primary w-100 h-100 d-flex align-items-center 
                      justify-content-center text-center py-2 lh-sm"
                    style="font-size: 0.82rem;">
                    <?= html_entity_decode($page_data[0]['sub_menu_title3']) ?>
                </a>
            </div>

            <div class="col-6 col-sm-4 col-lg-2">
                <a href="#our-achievements"
                    class="btn btn-primary w-100 h-100 d-flex align-items-center 
                      justify-content-center text-center py-2 lh-sm"
                    style="font-size: 0.82rem;">
                    Our Features
                </a>
            </div>

        </div>
    </div>
                                -->
    <!-- End Section 1 -->

    <!-- Start Section 2 -->
    <div class="about-style-one-area default-padding-top" id="who-we-are">
        <div class=" container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="about-style-one-info bg-gray fade-up-anim1" style="background-image: url(assets/img/shape/3.png);">
                        <h2 class="title "> <?= $page_data[0]['title'] ?></h2>
                        <?php if (!empty($page_data[0]['content'])) { ?>
                            <p>
                                <?= html_entity_decode($page_data[0]['content']) ?>
                            </p>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="card-style-one-item fade-up-anim bg-gradient text-light">
                        <!-- <img src="assets/img/illustration/4.png" alt="Image Not Found"> -->
                        <div class="info">
                            <h3><?= $page_data[0]['description'] ?></h3>
                            <p>
                                We solve the operational problems off-the-shelf tools can't, and the result is yours to keep.
                            </p>
                            <div class="text-end mt-20">
                                <a href="<?= urldecode($page_data[0]['cta_link']) ?>" class="btn btn-style-one border-light"><?= $page_data[0]['cta_btn'] ?><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Section 2 -->

    <!-- Start Section 3 -->
    <?php if (!empty($servicehomecard)) { ?>
        <div class="services-style-one-area default-padding" id="what-do-we-offer">
            <div class=" container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2 class="title split-text-right split-text-in-right"><?= html_entity_decode($page_data[0]['offerin_heading']) ?></h2>
                            <!-- <p><?= html_entity_decode($page_data[0]['offerin_content']) ?></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="service-style-one-items fade-up-anim">
                    <div class="row gutter-zero">
                        <!-- Single Item -->
                        <?php foreach ($servicehomecard as $ser) { ?>
                            <div class="col-lg-4 col-md-6 service-style-one-single">
                                <div class="service-style-one-item">
                                    <div class="icon">
                                        <img src="<?= base_url('uploads/images/') . $ser['image'] ?>" alt="<?= $ser['alt_text'] ?>">
                                    </div>
                                    <h4><a href="<?= base_url('services/') . $ser['slug'] ?>"><?= $ser['card_heading'] ?></a></h4>
                                    <p>
                                        <?= $ser['card_description'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 community-card text-light" style="background-image: url(assets/img/shape/1.jpg);">
                            <h4>Bring us the problem. We'll build the answer</h4>
                            <p>
                                Solutions tailored to your business needs
                            </p>
                            <div class="info">
                                <div class="button mt-15">
                                    <a href="<?= base_url('services') ?>" class="btn btn-style-one light">Explore all services <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 3 -->

    <!-- Start Section 4 -->
    <div class="process-style-one-area default-padding-top bg-theme text-light bg-cover" id="our-approach"
        style=" background-image: url(assets/img/shape/banner-6.jpg);">
        <!-- <div class="shape">
            <img src="assets/img/illustration/Mascot.png" alt="Image Not Found">
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="site-heading">
                        <!-- <h4 class="sub-title">How it works</h4> -->
                        <h2 class="title split-text-right split-text-in-right"><?= $oursignis[0]['whytitle'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="process-style-one-items">
                        <!-- Single Item -->
                        <?php $count = 1;
                        foreach (array_slice($homewhycoz, 0, 3)  as $wc) { ?>
                            <div class="process-style-one-item fade-up-anim">
                                <h2>0<?= $count ?></h2>
                                <h4><?= html_entity_decode($wc['title']) ?></h4>
                                <p>
                                    <?= html_entity_decode($wc['short_description']) ?>
                                </p>
                            </div>
                        <?php $count++;
                        } ?>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 4 -->
    <!-- Start Section 6 -->
    <div class="team-style-one-area default-padding" id="why-choose-us">
        <div class=" container">
            <div class="row">`
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title split-text-right split-text-in-right"><?= $oursignis[0]['title']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Fun Fact 
        ============================================= -->
        <div class="funfact-style-one-area2">
            <div class="container">
                <div class="funfact-style-one-items transform-up-animation bg-cover text-light" style="background-image: url(assets/img/shape/banner-10.jpg);">
                    <div class="row">
                        <!-- Single item -->
                        <?php
                        // Extract number and suffix e.g "21+" → num=21, suffix="+"
                        $val1   = html_entity_decode($oursignis[0]['significant_1']); //21+ Clients Served Globally
                        // ── Extract all 3 parts in one regex ──
                        preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val1, $m);
                        $number1  = trim($m[1] ?? '0');    // "20"
                        $symbol1  = trim($m[2] ?? '');     // "+"
                        $label1   = trim($m[3] ?? '');     // "Clients servers sucessfully"
                        // Get label (text after <br> or second line)
                        $parts1 = preg_split('/<br\s*\/?>/i', $val1);
                        $label1 = isset($label1) ? strip_tags($label1) : 'Clients Served Globally';
                        ?>

                        <div class="col-lg-4 col-md-6 funfact-style-one-item">
                            <div class="fun-fact">
                                <div class="top">
                                    <div class="js-counter"><?= $number1 ?> <?= $symbol1 ?></div>
                                </div>
                                <div class="info">
                                    <h4><?= $label1 ?></h4>
                                    <p>
                                        <?= html_entity_decode($oursignis[0]['significant_1_desc']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single item -->

                        <!-- Single item -->
                        <?php
                        $val2   = html_entity_decode($oursignis[0]['significant_2']);
                        // ── Extract all 3 parts in one regex ──
                        preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val2, $m);
                        $number2  = trim($m[1] ?? '0');
                        $symbol2  = trim($m[2] ?? '');
                        $label2   = trim($m[3] ?? '');
                        $parts2 = preg_split('/<br\s*\/?>/i', $val2);
                        $label2 = isset($label2) ? strip_tags($label2) : 'Clients Served Globally';
                        ?>

                        <div class="col-lg-4 col-md-6 funfact-style-one-item">
                            <div class="fun-fact">
                                <div class="top">
                                    <div class="js-counter"><?= $number2 ?> <?= $symbol2 ?></div>
                                </div>
                                <div class="info">
                                    <h4><?= $label2 ?></h4>
                                    <p>
                                        <?= html_entity_decode($oursignis[0]['significant_2_desc']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single item -->

                        <!-- Single item -->
                        <?php
                        $val3   = html_entity_decode($oursignis[0]['significant_3']);
                        // ── Extract all 3 parts in one regex ──
                        preg_match('/<b>(\d+)([^<]*)<\/b>\s*(.*)/i', $val3, $m);
                        $number3  = trim($m[1] ?? '0');
                        $symbol3  = trim($m[2] ?? '');
                        $label3   = trim($m[3] ?? '');
                        $parts3 = preg_split('/<br\s*\/?>/i', $val3);
                        $label3 = isset($label3) ? strip_tags($label3) : 'Clients Served Globally';
                        ?>
                        <div class="col-lg-4 col-md-6 funfact-style-one-item">
                            <div class="fun-fact">
                                <div class="top">
                                    <div class="js-counter"><?= $number3 ?> <?= $symbol3 ?></div>
                                </div>
                                <div class="info">
                                    <h4><?= $label3 ?></h4>
                                    <p>
                                        <?= html_entity_decode($oursignis[0]['significant_3_desc']) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Fun Fact -->
    </div>
    <!-- End Section 6 -->
    <!-- Start Section 5 -->
    <div class="project-style-one-area default-padding bg-gray" id="whom-do-we-serve">
        <div class=" container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="fixed-content">
                        <div class="site-heading">
                            <h2 class="title split-text-right split-text-in-right"><?= $industries[0]['title'] ?></h2>
                            <p>
                                <?= $industries[0]['short_description'] ?>
                            </p>
                        </div>
                        <div class="project-fun-fact">
                            <div class="js-counter">2,100+</div>
                            <h4>Successfully Delivered Projects Across Industries</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 pl-50 pl-md-15 pl-xs-15">
                    <div class="project-style-one-items">
                        <!-- Single Item -->
                        <?php foreach ($homesliders as $slider) { ?>
                            <div class="project-style-one-item">
                                <div class="thumb">
                                    <img src="<?= base_url('uploads/images/' . $slider['image']) ?>" alt="">

                                </div>
                                <div class="info">
                                    <div class="top">
                                        <h3><a href="<?= base_url($slider['cta_link']) ?>"><?= html_entity_decode($slider['title']) ?></a></h3>
                                        <p>
                                            <?= html_entity_decode($slider['short_description']) ?>
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <a href="<?= base_url($slider['cta_link']) ?>" class="btn-simple">
                                            <?= html_entity_decode($slider['cta_btn']) ?>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section 5 -->

    <!-- Start Section 7 -->
    <?php if (!empty($homesection7)) { ?>
        <div class="feature-style-one-area default-padding bg-gray blurry-shape-half-right-bottom" id="our-achievements" style=" background-image: url(assets/img/shape/banner-19.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="site-heading">
                            <h2 class="title split-text-right split-text-in-right"> <?= html_entity_decode($homesection7[0]['title']) ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="fade-up-anim">
                    <div class="row">
                        <div class="col-xl-4 pr-50 pr-md-15 pr-xs-15">
                            <div class="feature-style-one-left-info">
                                <div class="content">
                                    <p>
                                        <?= html_entity_decode($homesection7[0]['description']) ?>
                                    </p>

                                    <a href="<?= urldecode($homesection7[0]['ctalink']) ?>" class="btn btn-style-one btn-dark mt-10 wow fadeInUp" data-wow-delay="100ms">
                                        <?= html_entity_decode($homesection7[0]['ctabtn']) ?> <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="feature-style-one-items fade-up-anim">
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item active">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('uploads/images/' . $homesection7[0]['section_one_img']) ?>" alt="Image Not Found">
                                        </div>
                                        <h4><?= html_entity_decode($homesection7[0]['section_one_title']) ?></h4>
                                        <p>
                                            <?= html_entity_decode($homesection7[0]['section_one_desc']) ?>
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('uploads/images/' . $homesection7[0]['section_two_img']) ?>" alt="Image Not Found">
                                        </div>
                                        <h4><?= html_entity_decode($homesection7[0]['section_two_title']) ?></h4>
                                        <p>
                                            <?= html_entity_decode($homesection7[0]['section_two_desc']) ?>
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="feature-style-one hover-active-item">
                                    <div class="content">
                                        <div class="icon">
                                            <img src="<?= base_url('uploads/images/' . $homesection7[0]['section_three_img']) ?>" alt="Image Not Found">
                                        </div>
                                        <h4><?= html_entity_decode($homesection7[0]['section_three_title']) ?></h4>
                                        <p>
                                            <?= html_entity_decode($homesection7[0]['section_three_desc']) ?>
                                        </p>
                                    </div>
                                    <img src="<?= base_url('assets/img/shape/9.png') ?>" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- End Section 7 -->

    <!-- Start Section 8 -->
    <?php /*if (!empty($homesection8)) { ?>
        <div class="faq-style-one-area accordion-secondary blurry-shape-right-bottom default-padding bg-gray" style="background-image: url(assets/img/shape/7.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-style-one-info">
                            <h4 class="sub-title">Question & Answer</h4>
                            <h2 class="title split-text-right split-text-in-right"><?= html_entity_decode($homesection8[0]['title']) ?></h2>
                            <a href="<?= urldecode($homesection8[0]['ctalink']) ?>" class="btn btn-style-one btn-dark mt-10 wow fadeInUp" data-wow-delay="100ms">
                                <?= html_entity_decode($homesection8[0]['ctabtn']) ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="accordion-style-one-items fade-up-anim">
                            <div class="accordion" id="faqAccordion">
                                <?php $faqs = json_decode($homesection8[0]['question_ans'], true);
                                $count = 0;
                                foreach ($faqs as $key => $value) {
                                    $count++;
                                    if (empty($value['question'])) continue;
                                ?>
                                    <div class="accordion-style-one-item">
                                        <h2 class="accordion-header" id="heading<?= $count ?>homeFAQ">
                                            <button class="accordion-button <?= $count == 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $count ?>homeFAQ" aria-expanded="<?= $count == 1 ? true : false ?>" aria-controls="collapse<?= $count ?>homeFAQ">
                                                <?= $value['question'] ?>
                                            </button>
                                        </h2>
                                        <div id="collapse<?= $count ?>homeFAQ" class="accordion-collapse collapse <?= $count == 1 ? 'show' : '' ?>" aria-labelledby="heading<?= $count ?>homeFAQ" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                    <?= $value['answer'] ?>
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
    <?php } */ ?>
    <!-- End Section 8 -->

    <!-- Start Section 9 -->
    <div class="home-blog-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2 class="title split-text-right split-text-in-right">Latest Blog</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-style-two-box2">
                <div class="row">
                    <!-- Single Item -->
                    <?php foreach ($blogs as $key => $blog) { ?>
                        <div class="col-xl-3 col-lg-6">
                            <div class="blog-style-two fade-up-anim">
                                <div class="thumb zoom-thumb">
                                    <a href="<?= base_url('blog/') . $blog['slug'] ?>">
                                        <img class="img-reveal" src="<?= base_url('uploads/images/') . $blog['image'] ?>" alt="<?= $blog['title'] ?>">
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
                                    <h5 class="blog-title">
                                        <a href="<?= base_url('blog/') . $blog['slug'] ?>"><?= $blog['title'] ?></a>
                                    </h5>
                                    <!-- <a href="<?= base_url('blog/') . $blog['slug'] ?>" class="btn-regular">
                                        Read more <img src="assets/img/icon/arrow-right-three.png" alt="Image Not Found">
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
    <!-- End Section 9  -->

</div>