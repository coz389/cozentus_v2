<?php if (!empty($this->session->userdata('status'))) {

?>
    <script>
        $(document).ready(function() {
            $('#fullPageModal').modal('show');
        });
    </script>
<?php } else { ?>

    <script>
        $('#fullPageModal').modal('hide');
    </script>
<?php } ?>

<!-- Modal -->
<div class="modal fade" id="fullPageModal" tabindex="-1" role="dialog" aria-labelledby="fullPageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="sec-head mb-0 w-100 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Request <span>Webinar</span></h2>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-10 col-12 mx-auto">
                            <form data-form="insertWebinarcontact" class="contact-form mt-40 form">
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
                                                Organisation Name
                                            </label>
                                            <div class="inp-group">
                                                <input type="text" name="organisation" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree
                                                    to the Cozentus Privacy Policy (<a
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
                                                <span><?= $type == 3 ? "Submit" : "Submit" ?></span>
                                            </button>
                                            <!--  <button class="main-btn phone-btn with-icon tr-btn">
                                                <img src="assets/images/phone.svg" alt="">
                                                <span>Get a Call back</span>
                                            </button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="col-lg-6">
                            <img class="w-100 mt-4" src="https://www.cozentus.com/uploads/images/ds.webp" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
        </div>
    </div>
</div>



<header class="inner-main-header style-2">
    <img src="<?= base_url('uploads/images/') . $image ?>" alt="<?= $alt_text ?>">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 col-md-12">
                <div class="banner-content">
                    <h2><?= $title ?></h2>
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
        <div class="row">
            <div class="<?= $type == 2 ? "col-lg-12" : "col-lg-7" ?> col-12 ">
                <?php if ($type == 2) { ?>
                    <!-- <div class="date-wrap">
                    <div class="dt">
                        <img src="<?= base_url('assets/images/cal-icon.svg') ?>" alt="">
                        <span><?= date('d-M-Y', strtotime($posted)) ?></span>
                    </div>
                    <span>to</span>
                    <div class="dt">
                        <img src="<?= base_url('assets/images/cal-icon.svg') ?>" alt="">
                        <span><?= date('d-M-Y', strtotime($end_date)) ?></span>
                    </div>
                </div> -->
                <?php } ?>
                <div class="blog-content-area html-content">
                    <?= html_entity_decode($content) ?>
                </div>
                <!--    <?php if ($type == 3) { ?>
                    <div class="cs-hide-wrap">
                        <a href="javascript:void(0)" class="main-btn center">
                            <span>Download</span>
                        </a>
                    </div>
                <?php } ?> -->
            </div>
            <?php if ($type == 3) { ?>
                <div class="col-lg-4 offset-lg-1 col-12">
                    <div class="sd-card">
                        <h4>SHARE THIS LINK</h4>
                        <ul class="soc-list">
                            <li>
                                <a href="javascript:void(0)" onclick="link_click()">
                                    <img src="<?= base_url('assets/images/linkedin.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="fbs_click()">
                                    <img src="<?= base_url('assets/images/facebook.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="twi_click()">
                                    <img src="<?= base_url('assets/images/twitter.svg') ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
            <?php if ($type == 1) { ?>
                <div class="col-lg-4 offset-lg-1 col-12">
                    <div class="sd-card">
                        <div class="auth">
                            <div class="img">
                                <img src="<?= base_url('uploads/images/') . $aimage ?>" alt="<?= $aalt_text ?>">
                            </div>
                            <div class="det">
                                <h3>AUTHOR</h3>
                                <h4><?= $author ?></h4>
                                <p>
                                    - <?= $authortitle ?>
                                </p>
                            </div>
                        </div>
                        <h4>SUBJECT TAGS</h4>
                        <ul class="tags">
                            <?php $tags = explode(",", $tags);
                            if (!empty($tags))
                                foreach ($tags as $tg) {
                                    echo "<li>$tg</li>";
                                } ?>
                        </ul>
                        <h4>SHARE THIS BLOG</h4>
                        <ul class="soc-list">
                            <li>
                                <a href="javascript:void(0)" onclick="link_click()">
                                    <img src="<?= base_url('assets/images/linkedin.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="fbs_click()">
                                    <img src="<?= base_url('assets/images/facebook.svg') ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="twi_click()">
                                    <img src="<?= base_url('assets/images/twitter.svg') ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="contact-us-sec sec light-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="sec-head">
                    <h2>
                        <?= $type == 3 ? "Download" : "Get <span>In Touch</span>" ?>
                    </h2>
                </div>
                <form data-form="insertcontact"
                    <?= !empty($download) ? "data-download='" . base_url('uploads/pdf/') . $download . "' data-file-name='" . $download . "'" : '' ?>
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
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Organisation Name
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="organisation" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
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
                                <div class="form-check">
                                    <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the
                                        Cozentus Privacy Policy (<a href="<?= base_url('privacy-statement') ?>">Privacy
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
                                    <span><?= $type == 3 ? "Download Pdf" : "Submit" ?></span>
                                </button>
                                <!--  <button class="main-btn phone-btn with-icon tr-btn">
                                        <img src="assets/images/phone.svg" alt="">
                                        <span>Get a Call back</span>
                                    </button> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="con-img">
                    <img src="<?= base_url() ?>assets/images/globe.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>