<?php
if (!empty($pserv)) {
    if (!empty($pserv['servtp'])) {
        $serviceid = "sub_" . $pserv['id'];
    } else {
        $serviceid = $pserv['id'];
    }
    $blogs = $this->home_model->getcasesbyservice($serviceid, 1);
} else {
    $blogs = $this->home_model->getblogs(1, 6);
}
if (!empty($blogs)): ?>
    <!-- <section class="insights-sec sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center white" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Insights For You</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="swiper insight-swiper mt-40 mb-40" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <?php

                            foreach ($blogs as $cs): ?>

                                <div class="swiper-slide">
                                    <a href="<?= base_url('blog/') . $cs['slug'] ?>" class="insight-card">
                                        <div class="in-img">
                                            <?= base_url('resources/') . $cs['slug'] ?>">123
                                            <img src="<?= base_url('uploads/images/') . $cs['image'] ?>" alt="<?= $cs['alt_text'] ?>">
                                        </div>
                                        <div class="in-con">
                                            <h3>
                                                <?= $cs['title'] ?> </h3>
                                            <button class="learn-more-btn">
                                                <span>Learn More</span>
                                                <img src="<?= base_url('assets/images/arrow-solid.svg') ?>" alt="">
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach;  ?>
                        </div>
                    </div>
                    <a href="<?= base_url('blogs') ?>" class="main-btn white center">
                        <span>Show More</span>
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <section class="insights-sec sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                            <h2 style="color:#fff">Insights For You</h2>
                        </div>
                    </div>
                    <div class="swiper solution-swiper11 mt-50" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <?php foreach ($blogs as $cs) { ?>
                                <div class="swiper-slide">
                                    <a href="<?= base_url('blog/') . $cs['slug'] ?>" class="bl-card">
                                        <div class="bl-img">
                                            <img src="<?= base_url('uploads/images/') . $cs['image'] ?>" alt="<?= $cs['alt_text'] ?>" style="border-radius: 12px;">
                                        </div>
                                        <div class="dt-date">
                                            <img src="<?= base_url('assets/images/cal-icon-blue.svg') ?>" alt="">
                                            <span>16-Dec-2024</span>
                                        </div>
                                        <h3 style="color:#fff">
                                            <?= $cs['title'] ?>
                                        </h3>

                                        <span href="javascript:void(0)" class="read-more">
                                            <span>Read More</span>
                                            <img src="http://localhost/cozentus-live/assets/images/ar-bl-right.svg" alt="">
                                        </span>
                                    </a>

                                    <!-- <div class="card new-card" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?= base_url('uploads/images/') . $cs['image'] ?>" class="card-img-top" alt="<?= $cs['alt_text'] ??  $cs['title'] ?>">
                                        <div class="card-body">
                                            <h3 class="card-title" style="color:#fff"><?= $cs['title'] ?></h3>
                                            <p class="card-text card-text-clamp"><?= $cs['description'] ?></p>
                                        </div>
                                        <a href="<?= base_url('blog/') . $cs['slug'] ?>" class="btn btn-primary" style="width: 120px; margin: 0px 20px 13px 15px;">
                                            Learn More
                                        </a>
                                    </div> -->

                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <a href="<?= base_url('blogs') ?>" class="main-btn white center">
                        <span>Show More</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>