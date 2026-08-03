<style>
    /* ═══════════════════════════════════════════════════════════
   podcast.html — episode listing driven by YouTube thumbnails
   (intro → featured episode → filterable grid → CTA)
   ═══════════════════════════════════════════════════════════ */

    /* Intro + subscribe */
    .cz-pod-intro {
        padding: 70px 0 50px;
    }

    .cz-pod-eyebrow {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        color: #2f73ff;
        margin-bottom: 14px;
    }

    .cz-pod-intro-title {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.2;
        color: #10192d;
        margin: 0 0 18px;
    }

    .cz-pod-intro-text {
        font-size: 17px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0;
    }

    .cz-pod-subscribe {
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 14px;
        padding: 28px 30px;
    }

    .cz-pod-subscribe h5 {
        font-size: 16px;
        font-weight: 700;
        color: #10192d;
        margin: 0 0 16px;
    }

    .cz-pod-subscribe ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-pod-subscribe li {
        margin-bottom: 10px;
    }

    .cz-pod-subscribe li:last-child {
        margin-bottom: 0;
    }

    .cz-pod-subscribe a {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 15px;
        font-weight: 600;
        color: #33415c;
        transition: color .25s ease;
    }

    .cz-pod-subscribe a:hover {
        color: #2f73ff;
    }

    .cz-pod-subscribe i {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #fff;
        border: 1px solid #e3e9f3;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        color: #2f73ff;
    }

    /* Shared YouTube thumbnail — 16:9 frame with play overlay */
    .cz-pod-thumb {
        position: relative;
        display: block;
        border-radius: 12px;
        overflow: hidden;
        background: #0b1f45;
    }

    .cz-pod-thumb img {
        width: 100%;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .cz-pod-thumb::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(8, 24, 56, 0) 45%, rgba(8, 24, 56, .55) 100%);
        transition: opacity .3s ease;
    }

    .cz-pod-thumb:hover img {
        transform: scale(1.05);
    }

    .cz-pod-play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 62px;
        height: 62px;
        border-radius: 50%;
        background: #fff;
        color: #ff0000;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        padding-left: 3px;
        box-shadow: 0 10px 30px rgba(8, 24, 56, .35);
        transition: all .3s ease;
    }

    .cz-pod-thumb:hover .cz-pod-play {
        background: #ff0000;
        color: #fff;
        transform: translate(-50%, -50%) scale(1.08);
    }

    .cz-pod-thumb-lg .cz-pod-play {
        width: 82px;
        height: 82px;
        font-size: 24px;
    }

    .cz-pod-duration {
        position: absolute;
        right: 12px;
        bottom: 12px;
        z-index: 2;
        background: rgba(8, 24, 56, .82);
        color: #fff;
        font-size: 12.5px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 5px;
    }

    /* Featured episode */
    .cz-pod-featured {
        padding-bottom: 30px;
    }

    .cz-pod-featured-box {
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 18px;
        padding: 32px;
    }

    .cz-pod-featured-body {
        padding-left: 20px;
    }

    .cz-pod-badge {
        display: inline-block;
        background: #2f73ff;
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .8px;
        text-transform: uppercase;
        padding: 5px 12px;
        border-radius: 20px;
        margin-bottom: 14px;
    }

    .cz-pod-ep {
        display: block;
        font-size: 14px;
        color: #8a97ad;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .cz-pod-featured-body h3 {
        font-size: 27px;
        font-weight: 800;
        line-height: 1.3;
        margin: 0 0 14px;
    }

    .cz-pod-featured-body h3 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-pod-featured-body h3 a:hover {
        color: #2f73ff;
    }

    .cz-pod-featured-body>p {
        font-size: 15.5px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0 0 22px;
    }

    .cz-pod-guest {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 26px;
    }

    .cz-pod-guest img {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
    }

    .cz-pod-guest strong {
        display: block;
        font-size: 15px;
        color: #10192d;
    }

    .cz-pod-guest span {
        font-size: 13.5px;
        color: #8a97ad;
    }

    /* Episode grid */
    .cz-pod-list-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 18px;
        margin-bottom: 38px;
    }

    .cz-pod-h2 {
        font-size: 34px;
        font-weight: 800;
        color: #10192d;
        margin: 0;
    }

    .cz-pod-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-pod-filter li {
        font-size: 14px;
        font-weight: 600;
        color: #4a5a75;
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 22px;
        padding: 8px 18px;
        cursor: pointer;
        transition: all .25s ease;
    }

    .cz-pod-filter li:hover {
        border-color: #2f73ff;
        color: #2f73ff;
    }

    .cz-pod-filter li.active {
        background: #2f73ff;
        border-color: #2f73ff;
        color: #fff;
    }

    /* wider gutters between episode cards — row pulls back so the
   grid still lines up with the container edges */
    .cz-pod-list .row {
        margin-left: -10px;
        margin-right: -10px;
        row-gap: 40px;
    }

    .cz-pod-col {
        padding-left: 10px;
        padding-right: 10px;
    }

    .cz-pod-card {
        background: #fff;
        border: 1px solid #e8edf5;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
        margin-bottom: 20px;
        transition: box-shadow .3s ease, transform .3s ease;
    }

    .cz-pod-card:hover {
        box-shadow: 0 18px 40px rgba(8, 24, 56, .1);
        transform: translateY(-4px);
    }

    .cz-pod-card .cz-pod-thumb {
        border-radius: 0;
    }

    .cz-pod-body {
        padding: 22px 24px 26px;
    }

    .cz-pod-tag {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .6px;
        text-transform: uppercase;
        color: #2f73ff;
        background: #eaf1ff;
        padding: 4px 11px;
        border-radius: 4px;
        margin-bottom: 12px;
    }

    .cz-pod-meta {
        display: block;
        font-size: 13.5px;
        color: #8a97ad;
        margin-bottom: 8px;
    }

    .cz-pod-body h4 {
        font-size: 19px;
        font-weight: 700;
        line-height: 1.42;
        margin: 0 0 12px;
    }

    .cz-pod-body h4 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-pod-body h4 a:hover {
        color: #2f73ff;
    }

    .cz-pod-body>p {
        font-size: 14.5px;
        line-height: 1.65;
        color: #6b7280;
        margin: 0 0 16px;
    }

    .cz-pod-link {
        font-size: 14px;
        font-weight: 700;
        color: #2f73ff;
    }

    .cz-pod-link i {
        margin-left: 6px;
        font-size: 12px;
        transition: transform .25s ease;
    }

    .cz-pod-link:hover i {
        transform: translateX(4px);
    }

    .cz-pod-more {
        text-align: center;
        margin-top: 22px;
    }

    /* responsive */
    @media (max-width: 991px) {
        .cz-pod-intro-title {
            font-size: 32px;
        }

        .cz-pod-subscribe {
            margin-top: 34px;
        }

        .cz-pod-featured-body {
            padding-left: 0;
            margin-top: 28px;
        }

        .cz-pod-h2 {
            font-size: 28px;
        }
    }

    @media (max-width: 575px) {
        .cz-pod-featured-box {
            padding: 18px;
        }

        .cz-pod-play {
            width: 52px;
            height: 52px;
            font-size: 16px;
        }

        .cz-pod-thumb-lg .cz-pod-play {
            width: 60px;
            height: 60px;
            font-size: 18px;
        }

        .cz-pod-list-head {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    .inner_content_li ul,
    .inner_content_li li {
        margin: 0;
        padding: 0;
        list-style: none !important;
    }

    .cz-pod-featured-body ul,
    .cz-pod-featured-body li {
        list-style: disc !important;
        margin: 0px 0px 0px 10px;
    }

    .btn i {
        font-weight: 400;
        transform: rotate(0deg) !important;
        margin-left: 10px;
    }
</style>
<div id="smooth-content">
    <!-- Intro + subscribe
        ============================================= -->
    <div class="cz-pod-intro">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7">
                    <span class="cz-pod-eyebrow"><?= $new_podcast_heading ?></span>
                    <h2 class="cz-pod-intro-title"><?= $title; ?> <?php $new_podcast_title ?></h2>
                    <p class="cz-pod-intro-text"><?= $new_podcast_desc ?></p>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="cz-pod-subscribe">
                        <h5>Listen &amp; subscribe</h5>
                        <ul class="inner_content_li">
                            <li class="inner_content_li"><a href="<?= urldecode($pserv['google_pod']) ?>" target="_blank"><i class="fab fa-youtube"></i> YouTube</a></li>
                            <li class="inner_content_li"><a href="<?= urldecode($pserv['spotify_pod']) ?>" target="_blank"><i class="fab fa-spotify"></i> Spotify</a></li>
                            <li class="inner_content_li"><a href="<?= urldecode($pserv['apple_pod']) ?>" target="_blank"><i class="fab fa-apple"></i> Apple Podcasts</a></li>
                            <li class="inner_content_li"><a href="<?= urldecode($pserv['sound_pod']) ?>" target="_blank"><i class="fab fa-soundcloud"></i> Sound Cloud</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Intro -->
    <!-- Featured episode
        ============================================= -->
    <div class="cz-pod-featured">
        <div class="container">
            <div class="cz-pod-featured-box">
                <div class="row">
                    <div class="col-lg-10 max-auto mb-4">
                        <?php $tags_array = explode(",", $tags);
                        if (count($tags_array) > 1) {
                            foreach ($tags_array as $tags) {
                        ?>
                                <span class="cz-pod-badge"><?= $tags ?></span>
                        <?php }
                        } ?>
                        <span class="cz-pod-ep"><?= $sub_title; ?> <?= date('F d, Y', strtotime($posted)) ?></span>
                        <!-- <h3><a href="<?= !empty($videoId) ? 'https://www.youtube.com/watch?v=' . $videoId : urldecode($pserv['video']) ?>" class="popup-youtube"><?php $title; ?></a></h3> -->
                    </div>
                </div>
                <div class="row align-center">
                    <div class="col-lg-6">
                        <?php
                        if (!empty($pserv['video'])) {
                            // Extract YouTube video ID
                            $videoUrl = urldecode($pserv['video']);
                            $videoId = '';
                            if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\&\?\/]+)/', $videoUrl, $matches)) {
                                $videoId = $matches[1];
                            }
                            $videoDuration = get_youtube_duration($videoId);
                        ?>

                            <!-- YouTube thumbnail: swap the ID in both the img src and the href -->
                            <a href="<?= !empty($videoId) ? 'https://www.youtube.com/watch?v=' . $videoId : $videoUrl ?>" class="popup-youtube cz-pod-thumb cz-pod-thumb-lg">
                                <img src="https://img.youtube.com/vi/<?= $videoId ?>/hqdefault.jpg"
                                    alt="Building an AI-ready supply chain data foundation">
                                <span class="cz-pod-play"><i class="fas fa-play"></i></span>
                                <span class="cz-pod-duration"><?= $videoDuration ?></span>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6 cz-pod-featured-body">
                        <div><?= html_entity_decode($content) ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 max-auto mt-2">
                        <div class="cz-pod-guest">
                            <!-- <img src="assets/img/team/1.jpg" alt="Guest"> -->
                            <div>
                                <strong><?= $speaker_name; ?></strong>
                                <span><?= $client_designation; ?></span>
                            </div>
                        </div>
                        <a href="<?= urldecode($pserv['google_pod']) ?>" target="__blank" class="btn btn-style-one">Watch All
                            Episode <i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured episode -->

    <!-- All episodes
        ============================================= -->

    <?php
    $latest_podcasts = $this->db->where('type', $pserv['type'])
        ->where('slug !=', $slug)
        ->join('images_master i', 'i.id = thumbnail', 'left')
        ->order_by('posted', 'DESC')
        ->limit(3)
        ->get('blogs')
        ->result_array();
    // print_r($latest_podcasts);
    ?>
    <div class="cz-pod-list default-padding-2">
        <div class="container">

            <div class="cz-pod-list-head">
                <h2 class="cz-pod-h2">Latest Podcasts</h2>
            </div>

            <div class="row fade-up-anim">
                <!-- 1 -->
                <?php foreach ($latest_podcasts  as $latest_podcast) { ?>
                    <div class="col-lg-4 col-md-6 cz-pod-col" data-category="ai-data">
                        <div class="cz-pod-card">
                            <?php
                            if (!empty($latest_podcast['video'])) {
                                // Extract YouTube video ID
                                $videoUrl = urldecode($latest_podcast['video']);
                                $videoId = '';
                                if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\&\?\/]+)/', $videoUrl, $matches)) {
                                    $videoId = $matches[1];
                                }
                                $videoDuration2 = get_youtube_duration($videoId);
                            ?>

                                <!-- YouTube thumbnail: swap the ID in both the img src and the href -->
                                <a href="<?= !empty($videoId) ? 'https://www.youtube.com/watch?v=' . $videoId : urldecode($latest_podcast['video']) ?>" class="popup-youtube cz-pod-thumb cz-pod-thumb-lg">
                                    <img src="https://img.youtube.com/vi/<?= $videoId ?>/hqdefault.jpg"
                                        alt="Building an AI-ready supply chain data foundation">
                                    <span class="cz-pod-play"><i class="fas fa-play"></i></span>
                                    <span class="cz-pod-duration"><?= $videoDuration2 ?></span>
                                </a>
                            <?php } ?>
                            <div class="cz-pod-body">
                                <?php $tags_array = explode(",", $latest_podcast['tags']);
                                if (count($tags_array) > 1) {
                                    foreach ($tags_array as $tags) {
                                ?>
                                        <span class="cz-pod-badge"><?= $tags ?></span>
                                <?php }
                                } ?>
                                <span class="cz-pod-meta"> <?= $latest_podcast['sub_title'] ?> <?= date('F d, Y', strtotime($latest_podcast['posted'])) ?></span>
                                <h4>
                                    <a href="<?= base_url('podcast/' . $latest_podcast['slug']) ?>">
                                        <?= $latest_podcast['title'] ?>
                                    </a>
                                </h4>
                                <p><?= implode(' ', array_slice(preg_split('/\s+/', trim(strip_tags(html_entity_decode($latest_podcast['content'])))), 0, 10)) . '...'; ?></p>
                                <a href="<?= !empty($videoId) ? 'https://www.youtube.com/watch?v=' . $videoId : urldecode($latest_podcast['video']) ?>" class="cz-pod-link popup-youtube">Watch
                                    now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- <div class="cz-pod-more">
                <a href="#" class="btn btn-style-one btn-border">Load more episodes <i class="fas fa-arrow-right"></i></a>
            </div> -->

        </div>
    </div>
    <!-- End All episodes -->

    <!-- Call to Action
        ============================================= -->
    <div class="home-blog-two-area default-padding-2">
        <div class="container">
            <div class="blog-style-two-box bg-dark">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-box text-center fade-up-anim">
                            <h2 class="cta-title mb-20">Never miss an episode</h2>
                            <p class="cta-description mb-30">
                                Subscribe on YouTube for new conversations every second Tuesday, or get in touch
                                if you would like to join us as a guest.
                            </p>
                            <div class="cta-buttons">
                                <a class="btn btn-style-one btn-border mb-2" href="https://www.youtube.com/@cozentus" target="_blank">
                                    Subscribe on YouTube <i class="fab fa-youtube"></i>
                                </a>
                                <a class="btn btn-style-one mb-2" href="<?= base_url('contact') ?>">
                                    Be a Guest <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action -->

</div>

<script>
    $('.cz-pod-filter li').on('click', function() {
        var filter = $(this).data('filter');
        $('.cz-pod-col').each(function() {
            var show = filter === 'all' || $(this).data('category') === filter;
            $(this).toggle(show);
        });
    });
</script>