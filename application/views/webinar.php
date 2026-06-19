<?php
if ($this->session->userdata('interest') != 'Webinar') { ?>
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
<div class="modal" tabindex="-1" id="fullPageModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Request On-demand Webinar</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form data-form="insertWebinarcontact" class="contact-form mt-40 webinar">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="fname" required>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder=" Work Email Address" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" name="privacy_policy">
                            <label class=" form-check-label" for="gridCheck">
                                I agree to the Cozentus Privacy Policy (<a href="<?= base_url('privacy-statement') ?>">Privacy Statement</a>)
                            </label>
                        </div>
                    </div>

                    <input type="hidden" name="service" value="Webinar" />
                    <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                    <input type="hidden" name="path" value="<?= $this->uri->uri_string() ?>">
                    <input type="hidden" name="type" value="<?= $type ?>">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="sbt-btn"><?= $type == 3 ? "Submit" : "Submit" ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="smooth-content" class="service">

    <?php
    if (!empty($image)) {
        $banner = base_url('uploads/images/' . $image);
    } else {
        $banner = base_url('assets/img/shape/banner-13.jpg');
    }
    ?>
    <div class="banner-style-three-area overflow-hidden bg-gray bg-cover" style="background: url(<?= $banner ?>);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 pr-60 pr-md-15 pr-xs-15">
                    <div class="banner-style-three-info">
                        <h2 class="wow fadeInUp"><?= $title ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-style-three-area default-padding bg-gray bg-cover" style="background: url(assets/img/shape/banner-16.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>
                        <?= html_entity_decode($content) ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="about-style-three-thumb">
                        <?= html_entity_decode($video) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>