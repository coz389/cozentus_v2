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
                <div class="col-lg-12">
                    <p>
                        <?= html_entity_decode($content) ?>
                    </p>

                </div>
            </div>
        </div>
    </div>

</div>