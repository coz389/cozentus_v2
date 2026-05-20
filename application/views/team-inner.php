<style>
    .team-inner-img {
        position: sticky;
        /* top: 174px; */
        width: 100%;
        padding-top: 109%;
        margin-top: 0px !important;
        background: var(--blue3);
    }

    .crew-socials {
        right: 0;
        bottom: 60px;
        display: flex;
        gap: 10px;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    /* ICON STYLE */
    .crew-socials a {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        color: #111;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        font-size: 18px;
        transform: scale(0.8);
        transition: all 0.3s ease;
    }

    /* HOVER EFFECT */
    .crew-socials a:hover {
        background: #2264dc;
        cursor: pointer;
    }
</style>
<header class="inner-main-header style-2" style="padding-top:80px;">
    <img src="<?= base_url('assets/images/team-inner-bg.jpg') ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6 col-md-12">
                <div class="banner-content text-white blog-detail">
                    <h2><?= $team['name'] ?></h2>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="team-inner-con-sec sec" style="padding-top:60px;">
    <div class="container">
        <div class="row align-items-start">
            <!-- Image -->
            <div class="col-lg-4 col-12">
                <div class="team-inner-img mb-4">
                    <img src="<?= base_url('uploads/images/') . $team['image'] ?>" alt="<?= $team['alt_text'] ?>"
                        class="img-fluid rounded shadow">
                </div>
            </div>
            <!-- Content -->
            <div class="col-lg-6 offset-lg-1 col-12">
                <div class="team-inner-con">
                    <!-- <div class="banner-content blog-detail">
                        <h2><?= $team['name'] ?></h2>
                    </div> -->
                    <!-- Details -->
                    <div class="details">
                        <?= html_entity_decode($team['details']) ?>
                    </div>
                    <!-- Designation -->
                    <p class="designation mt-4 mb-2">
                    <h3><?= $team['name'] ?></h3>
                    <strong><?= $team['title'] ?></strong>
                    </p>
                    <!-- LinkedIn -->
                    <div class="crew-socials">
                        <a href="<?= urldecode($team['twitter_link']) ?? '#' ?>" target="_blank"> <i class="fab fa-x"></i></a>
                        <a href="<?= urldecode($team['facebook_link']) ?? '#' ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= urldecode($team['insta_link']) ?? '#' ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="<?= urldecode($team['link']) ?? '#' ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <!-- <a href="<?= urldecode($team['link']) ?>" target="_blank" class="linkedin-ic d-inline-block mt-2">
                        <img src="<?= base_url('assets/images/linkedin-w-icon.svg') ?>" alt="LinkedIn"
                            style="width:28px; height:auto;">
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</section>