<section class="ebook-sec sec light-bg">
    <div class="container">
        <div class="row align-items-start">

            <!-- Left Content -->
            <div class="col-lg-6 col-12">
                <div class="sec-head mb-4">
                    <h2 class="ebook-title"><?= $title ?></h2>
                </div>

                <div class="ebook-desc mb-4">
                    <?= html_entity_decode($content) ?>
                </div>


                <div>
                    <div class="sec-head">
                        <h4 style="font-size:22px; font-weight:600; color:#014293;  text-align:left;">
                            <?php
                            if (empty($download)) {
                                $download = 'AI-powered-intelligent-document-processing8.pdf';
                            }
                            $type = 3;
                            ?>
                            <?= $type == 3 ? "Download" : "Get <span>In Touch</span>" ?>
                        </h4>
                    </div>
                    <form data-form="insertcontact"
                        <?= !empty($download) ? "data-download='" . base_url('uploads/pdf/') . $download . "' data-file-name='" . $download . "'" : '' ?>
                        class="contact-form mt-40 form">
                        <div class="row">
                            <!-- <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        First Name *
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="fname" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Last Name *
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="lname" />
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Name *
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="fname" />
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="" class="label-text">
                                        Work Email Address *
                                    </label>
                                    <div class="inp-group">
                                        <input type="email" name="email" />
                                        <input type="hidden" name="service" value="Report" />

                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="" class="label-text">
                                        Organisation Name *
                                    </label>
                                    <div class="inp-group">
                                        <input type="text" name="organisation"/>
                                    </div>
                                </div> -->
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
                            <input type="hidden" name="path" value="<?= $this->uri->uri_string() ?>">
                            <input type="hidden" name="type" value="<?= $type ?>">
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
            </div>

            <!-- Right Image (Dynamic Upload from CMS) -->
            <div class="col-lg-6 col-12 text-center mt-2">
                <div class="ebook-img">
                    <img src="<?= base_url('uploads/images/') . $image ?>" alt="<?= $alt_text ?>"
                        class="img-fluid shadow-lg rounded" />
                </div>
            </div>

        </div>
    </div>
</section>