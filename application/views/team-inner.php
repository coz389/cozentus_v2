<div id="smooth-content" class="service">

    <?php
    if (!empty($image)) {
        $banner = base_url('uploads/images/' . $image);
    } else {
        $banner = base_url('assets/img/shape/banner-16.jpg');
    }
    ?>
    <div class="breadcrumb-area text-center bg-cover" style="background: url(<?= $banner ?>);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 pr-60 pr-md-15 pr-xs-15">
                    <div class="banner-style-three-info">
                        <h2 class="wow fadeInUp"><?= $team['name'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-single-area default-padding">
        <div class="container">
            <div class="team-single-items">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <div class="thumb fade-up-anim">
                            <img src="<?= base_url('uploads/images/') . $team['image'] ?>" alt="<?= $team['alt_text'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-7 right-info pl-60 pl-md-15 pl-xs-15">
                        <div class="about">
                            <h2 class="title"><?= $team['name'] ?></h2>
                            <span><?= $team['title'] ?></span>
                            <p>
                                <?= html_entity_decode($team['details']) ?>
                            </p>

                            <!-- <ul>
                                <li>
                                    <strong>Email:</strong>
                                    <a href="mailto:support@digital.com">support@digital.com</a>
                                </li>
                                <li>
                                    <strong>Phone:</strong>
                                    <a href="tel:123-456-7890">+44-20-7328-4499</a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="social">
                            <!-- <a class="btn btn-style-one" href="contact-us.html">Contact Me <i class="fas fa-arrow-right"></i></a> -->
                            <div class="share-link">
                                <i class="fas fa-share-alt"></i>
                                <ul>
                                    <li class="twitter">
                                        <a href="<?= urldecode($team['twitter_link']) ?? '#' ?>" target="__blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="facebook">
                                        <a href="<?= urldecode($team['link']) ?? '#' ?>" target="__blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="<?= urldecode($team['insta_link']) ?? '#' ?>" target="__blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="facebook">
                                        <a href="<?= urldecode($team['facebook_link']) ?? '#' ?>" target="__blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>