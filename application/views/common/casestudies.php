<?php
if (!empty($pserv['servtp'])) {
    $serviceid = "sub_" . $pserv['id'];
} else {
    $serviceid = $pserv['id'];
}
$case = $this->home_model->getcasesbyservice($serviceid, 3);
if (!empty($case)) { ?>
    <section class="info-sec sec use-case" style="background: #eeeeee;">
        <div class=" container">
            <div class="col-12">
                <div class="sec-head center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Case Study</h2>
                </div>
            </div>
            <div class="css-swiper swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($case as $sv) { ?>
                        <div class="swiper-slide">
                            <a href="<?= base_url('case-study/') . $sv['slug'] ?>" class="cs-card style-2">
                                <div class="us-tag <?= $sv['ctype'] == 1 ? 'use-case' : 'cs' ?>">
                                    <?= $sv['ctype'] == 1 ? 'Use Case' : 'Case Study' ?>
                                </div>
                                <img src="<?= base_url('uploads/images/') . $sv['image'] ?>" alt=" <?= $sv['alt_text'] ?>">
                                <div class="det">
                                    <h3>
                                        <?= $sv['title'] ?>
                                    </h3>
                                    <div class="read-more-btn">
                                        <span>Read More</span>
                                        <img src="<?= base_url('assets/images/arrow.svg') ?>" alt="">
                                    </div>
                                </div>
                            </a>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>