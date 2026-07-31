<style>
    /* ═══════════════════════════════════════════════════════════
   news-events.html — company News & Events
   (intro → featured event → event grid w/ per-event lightbox →
    photo gallery masonry → latest news → CTA)
   ═══════════════════════════════════════════════════════════ */

    /* Intro */
    .cz-ne-intro {
        padding: 70px 0 50px;
    }

    .cz-ne-eyebrow {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        color: #2f73ff;
        margin-bottom: 14px;
    }

    .cz-ne-intro-title {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.2;
        color: #10192d;
        margin: 0 0 18px;
    }

    .cz-ne-intro-text {
        font-size: 17px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0;
    }

    .cz-ne-h2 {
        font-size: 34px;
        font-weight: 800;
        color: #10192d;
        margin: 0;
    }

    /* Shared image thumb — cover + hover zoom + gradient + plus icon */
    .cz-ne-thumb {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        background: #0b1f45;
    }

    .cz-ne-thumb>.item:not(.cz-ne-hidden),
    .cz-ne-cover {
        display: block;
        position: relative;
    }

    .cz-ne-thumb img {
        width: 100%;
        aspect-ratio: 4 / 3;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .cz-ne-thumb-lg img {
        aspect-ratio: 16 / 10;
    }

    .cz-ne-thumb::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: linear-gradient(180deg, rgba(8, 24, 56, 0) 50%, rgba(8, 24, 56, .5) 100%);
    }

    .cz-ne-thumb:hover img {
        transform: scale(1.06);
    }

    /* hidden extra gallery links — collected by magnific, not shown */
    .cz-ne-hidden {
        display: none !important;
    }

    /* zoom plus badge that appears on hover */
    .cz-ne-zoom {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(.8);
        z-index: 3;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: #fff;
        color: #2f73ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        opacity: 0;
        box-shadow: 0 10px 30px rgba(8, 24, 56, .3);
        transition: all .3s ease;
    }

    .cz-ne-thumb:hover .cz-ne-zoom,
    .cz-ne-cell:hover .cz-ne-zoom {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    /* photo-count chip (bottom-right) */
    .cz-ne-count {
        position: absolute;
        right: 12px;
        bottom: 12px;
        z-index: 2;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(8, 24, 56, .82);
        color: #fff;
        font-size: 12.5px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 6px;
    }

    /* date chip (top-left) */
    .cz-ne-date {
        position: absolute;
        top: 12px;
        left: 12px;
        z-index: 2;
        background: #2f73ff;
        color: #fff;
        text-align: center;
        border-radius: 8px;
        padding: 7px 12px 6px;
        line-height: 1;
        box-shadow: 0 8px 20px rgba(47, 115, 255, .35);
    }

    .cz-ne-date strong {
        display: block;
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 3px;
    }

    .cz-ne-date {
        font-size: 11.5px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    /* Featured event */
    .cz-ne-featured {
        padding-bottom: 20px;
    }

    .cz-ne-featured-box {
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 18px;
        padding: 30px;
    }

    .cz-ne-featured-body {
        padding-left: 26px;
    }

    .cz-ne-badge {
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

    .cz-ne-meta {
        display: block;
        font-size: 13.5px;
        color: #8a97ad;
        font-weight: 500;
        margin-bottom: 12px;
    }

    .cz-ne-meta i {
        color: #2f73ff;
        margin-right: 4px;
    }

    .cz-ne-featured-body h3 {
        font-size: 27px;
        font-weight: 800;
        line-height: 1.3;
        margin: 0 0 14px;
    }

    .cz-ne-featured-body h3 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-ne-featured-body h3 a:hover {
        color: #2f73ff;
    }

    .cz-ne-featured-body>p {
        font-size: 15.5px;
        line-height: 1.7;
        color: #6b7280;
        margin: 0 0 22px;
    }

    /* Event grid */
    .cz-ne-list-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 18px;
        margin-bottom: 38px;
    }

    .cz-ne-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cz-ne-filter li {
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

    .cz-ne-filter li:hover {
        border-color: #2f73ff;
        color: #2f73ff;
    }

    .cz-ne-filter li.active {
        background: #2f73ff;
        border-color: #2f73ff;
        color: #fff;
    }

    .cz-ne-list .row {
        margin-left: -10px;
        margin-right: -10px;
        row-gap: 34px;
    }

    .cz-ne-col {
        padding-left: 10px;
        padding-right: 10px;
    }

    .cz-ne-card {
        background: #fff;
        border: 1px solid #e8edf5;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        transition: box-shadow .3s ease, transform .3s ease;
    }

    .cz-ne-card:hover {
        box-shadow: 0 18px 40px rgba(8, 24, 56, .1);
        transform: translateY(-4px);
    }

    .cz-ne-card .cz-ne-thumb {
        border-radius: 0;
    }

    .cz-ne-body {
        padding: 20px 22px 22px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .cz-ne-tag {
        display: inline-block;
        align-self: flex-start;
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

    .cz-ne-body h4 {
        font-size: 19px;
        font-weight: 700;
        line-height: 1.4;
        margin: 0 0 10px;
    }

    .cz-ne-body h4 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-ne-body h4 a:hover {
        color: #2f73ff;
    }

    .cz-ne-body>p {
        font-size: 14.5px;
        line-height: 1.65;
        color: #6b7280;
        margin: 0 0 16px;
    }

    .cz-ne-foot {
        margin-top: auto;
        padding-top: 14px;
        border-top: 1px solid #eef2f7;
    }

    .cz-ne-loc {
        font-size: 13px;
        color: #8a97ad;
        font-weight: 500;
    }

    .cz-ne-loc i {
        margin-right: 6px;
        color: #2f73ff;
    }

    /* Photo gallery — CSS columns masonry */
    .cz-ne-gallery-head {
        margin-bottom: 40px;
    }

    .cz-ne-gallery-head p {
        font-size: 16px;
        color: #6b7280;
        margin: 14px 0 0;
    }

    .cz-ne-masonry {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
    }

    .cz-ne-cell {
        position: relative;
        display: block;
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        background: #0b1f45;
    }

    .cz-ne-cell img {
        width: 100%;
        height: 100%;
        aspect-ratio: 4 / 3;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .cz-ne-cell::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: linear-gradient(180deg, rgba(8, 24, 56, 0) 55%, rgba(8, 24, 56, .45) 100%);
        opacity: 0;
        transition: opacity .3s ease;
    }

    .cz-ne-cell:hover::after {
        opacity: 1;
    }

    .cz-ne-cell:hover img {
        transform: scale(1.06);
    }

    /* Latest news cards */
    .cz-ne-news-card {
        background: #fff;
        border: 1px solid #e8edf5;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
        margin-bottom: 24px;
        transition: box-shadow .3s ease, transform .3s ease;
    }

    .cz-ne-news-card:hover {
        box-shadow: 0 18px 40px rgba(8, 24, 56, .1);
        transform: translateY(-4px);
    }

    .cz-ne-news-thumb {
        display: block;
        overflow: hidden;
    }

    .cz-ne-news-thumb img {
        width: 100%;
        aspect-ratio: 16 / 10;
        object-fit: cover;
        display: block;
        transition: transform .5s ease;
    }

    .cz-ne-news-card:hover .cz-ne-news-thumb img {
        transform: scale(1.05);
    }

    .cz-ne-news-body {
        padding: 22px 24px 24px;
    }

    .cz-ne-news-date {
        display: block;
        font-size: 13px;
        color: #8a97ad;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .cz-ne-news-date i {
        color: #2f73ff;
        margin-right: 5px;
    }

    .cz-ne-news-body h4 {
        font-size: 19px;
        font-weight: 700;
        line-height: 1.4;
        margin: 0 0 10px;
    }

    .cz-ne-news-body h4 a {
        color: #10192d;
        transition: color .25s ease;
    }

    .cz-ne-news-body h4 a:hover {
        color: #2f73ff;
    }

    .cz-ne-news-body>p {
        font-size: 14.5px;
        line-height: 1.65;
        color: #6b7280;
        margin: 0 0 14px;
    }

    .cz-ne-link {
        font-size: 14px;
        font-weight: 700;
        color: #2f73ff;
    }

    .cz-ne-link i {
        margin-left: 6px;
        font-size: 12px;
        transition: transform .25s ease;
    }

    .cz-ne-link:hover i {
        transform: translateX(4px);
    }

    /* Intro stat tiles */
    .cz-rep-stats {
        display: flex;
        gap: 18px;
    }

    .cz-rep-stat {
        flex: 1;
        background: #f4f7fc;
        border: 1px solid #e3e9f3;
        border-radius: 14px;
        padding: 24px 20px;
        text-align: center;
    }

    .cz-rep-stat h3 {
        font-size: 34px;
        font-weight: 800;
        color: #2f73ff;
        margin: 0 0 6px;
    }

    .cz-rep-stat span {
        font-size: 13.5px;
        line-height: 1.5;
        color: #6b7280;
    }



    .mfp-image-holder .mfp-content {
        max-width: 700%;
        width: 700px;
        height: 500px;
    }

    img.mfp-img {
        width: 100%;
        max-width: 100%;
        max-height: 100%;
        height: 100%;
        display: block;
        line-height: 0;
        box-sizing: border-box;
        padding: 40px 0 40px;
        margin: 0 auto;
    }


    /* responsive */
    @media (max-width: 1199px) {
        .cz-ne-masonry {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 991px) {
        .cz-ne-intro-title {
            font-size: 24px;
        }

        .cz-ne-featured-body {
            padding-left: 0;
            margin-top: 26px;
        }

        .cz-ne-h2 {
            font-size: 28px;
        }

        .cz-ne-masonry {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 575px) {
        .cz-ne-featured-box {
            padding: 18px;
        }

        .cz-ne-list-head {
            flex-direction: column;
            align-items: flex-start;
        }

        .cz-ne-masonry {
            grid-template-columns: 1fr;
        }
    }
</style>
<div id="smooth-content">

    <?php
    // if (!empty($pserv['new_podcast_heading'])) {
    if (!empty($pserv['new_podcast_extra'])) {
        $new_podcast_extra_arr = json_decode($pserv['new_podcast_extra']);
    }
    ?>
    <div class="cz-ne-intro">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-8">
                    <span class="cz-ne-eyebrow"><?= $pserv['new_podcast_heading'] ?></span>
                    <!-- <h2 class="cz-rep-intro-title"><?= $pserv['new_podcast_title'] ?></h2> -->
                    <h2 class="cz-ne-intro-title"><?= $title ?></h2>
                    <p class="cz-ne-intro-text"><?= $pserv['new_podcast_desc'] ?></p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="cz-rep-stats">
                        <?php if (count($new_podcast_extra_arr) > 0) {
                            foreach ($new_podcast_extra_arr as $new_podcast_extra) {
                        ?>
                                <div class="cz-rep-stat">
                                    <h3><?= $new_podcast_extra->heading ?></h3>
                                    <span><?= $new_podcast_extra->description ?></span>
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Intro -->

    <!-- Featured event
        ============================================= -->
    <?php
    if (!empty($image)) {
        $image = $image;
    } else {
        $image = $thumbnail;
    }
    $tags_array = explode(",", $pserv['tags']);
    $image_gallery_ids_array = json_decode($pserv['image_gallery_ids']);
    $image_galleries = $this->db->where_in('id', $image_gallery_ids_array)
        ->get('images_master')
        ->result_array();
    // echo count($tags_array) - 1;
    // print_r($image_galleries);
    ?>
    <div class="cz-ne-featured">
        <div class="container">
            <div class="cz-ne-featured-box">
                <div class="row align-center">
                    <div class="col-lg-7">
                        <div class="cz-ne-thumb cz-ne-thumb-lg magnific-mix-gallery" data-prev-text="Previous" data-next-text="Next">
                            <a href="<?= base_url('uploads/images/' . $image) ?>" class="item" data-title="<?= $title ?>">
                                <img src="<?= base_url('uploads/images/' . $image) ?>" alt="<?= $title ?>">
                                <span class="cz-ne-zoom"><i class="fas fa-plus"></i></span>
                            </a>
                            <!-- extra photos for this event's gallery -->
                            <?php
                            if (count($image_galleries) > 0) {
                                foreach ($image_galleries as $image_gallery) {
                            ?>
                                    <a href="<?= base_url('uploads/images/') . $image_gallery['image'] ?>" class="item cz-ne-hidden" data-title="<?= $image_gallery['alt_text'] ?>"></a>
                            <?php }
                            } ?>
                            <span class="cz-ne-count"><i class="far fa-images"></i> <?= count($image_gallery_ids_array) ?? 0 ?> Photos</span>
                        </div>
                    </div>
                    <div class="col-lg-5 cz-ne-featured-body">
                        <span class="cz-ne-badge"> <?= $tags_array[count($tags_array) - 1] ?></span>
                        <span class="cz-ne-meta"><i class="far fa-calendar"></i><?= date('F d, Y', strtotime($posted)) ?>
                            <i class="fas fa-map-marker-alt"></i><?= $tags_array[0] ?></span>
                        <h3><a href="#" class="cz-ne-gallery-trigger"><?= $pserv['new_podcast_title'] ?></a></h3>
                        <div><?= html_entity_decode($content) ?></div>
                        <a href="#image-gallery" class="btn btn-style-one cz-ne-gallery-trigger">
                            View Gallery <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured event -->

    <!-- Events grid
        ============================================= -->
    <?php
    $latest_events = $this->db->where('type', $pserv['type'])
        ->where('slug !=', $slug)
        ->join('images_master i', 'i.id = thumbnail', 'left')
        ->order_by('posted', 'DESC')
        ->limit(3)
        ->get('blogs')
        ->result_array();
    ?>
    <div class="cz-ne-list default-padding">
        <div class="container">

            <div class="cz-ne-list-head">
                <h2 class="cz-ne-h2">Latest Events</h2>
                <!-- <ul class="cz-ne-filter">
                    <li class="active" data-filter="all">All</li>
                    <li data-filter="conference">Conferences</li>
                    <li data-filter="webinar">Webinars</li>
                    <li data-filter="award">Awards</li>
                    <li data-filter="culture">Culture &amp; CSR</li>
                </ul> -->
            </div>

            <div class="row fade-up-anim">

                <!-- 1 -->
                <?php foreach ($latest_events  as $latest_event) {
                    $tags_arrays = explode(",", $latest_event['tags']);
                ?>
                    <div class="col-lg-4 col-md-6 cz-ne-col" data-category="conference">
                        <div class="cz-ne-card">
                            <div class="cz-ne-thumb magnific-mix-gallery123" data-prev-text="Previous" data-next-text="Next">
                                <a href="<?= base_url('event/' . $latest_event['slug']) ?>" class="item" data-title="Manifest Vegas — exhibition floor">
                                    <img src="<?= base_url('uploads/images/' .  $latest_event['image']) ?>" alt="<?= $latest_event['alt_text'] ?>">
                                </a>
                                <span class="cz-ne-date"><strong><?= date('d', strtotime($latest_event['posted'])) ?></strong> <?= date('M Y', strtotime($latest_event['posted'])) ?></span>
                            </div>
                            <div class="cz-ne-body">
                                <span class="cz-ne-tag"> <?= $tags_arrays[count($tags_arrays) - 1] ?></span>
                                <h4><a href="<?= base_url('event/' . $latest_event['slug']) ?>" class="cz-ne-gallery-trigger"><?= $latest_event['new_podcast_title'] ?></a></h4>
                                <p> <?= implode(' ', array_slice(preg_split('/\s+/', trim(strip_tags(html_entity_decode($latest_event['content'])))), 0, 10)) . '...'; ?></p>
                                <div class="cz-ne-foot">
                                    <span class="cz-ne-loc"><i class="fas fa-map-marker-alt"></i><?= $tags_arrays[0] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
    <!-- End Events grid -->

    <!-- Photo gallery (single lightbox gallery)
        ============================================= -->
    <div class="cz-ne-gallery default-padding bg-gray" id="image-gallery">
        <div class="container">
            <div class="cz-ne-gallery-head text-center">
                <h2 class="cz-ne-h2">Event Gallery</h2>
            </div>

            <div class="cz-ne-masonry magnific-mix-gallery" data-prev-text="Previous" data-next-text="Next">
                <?php
                if (count($image_galleries) > 0) {
                    foreach ($image_galleries as $image_gallery) {
                ?>
                        <a href="<?= base_url('uploads/images/') . $image_gallery['image'] ?>" class="cz-ne-cell item cz-ne-tall" data-title="<?= $image_gallery['alt_text'] ?>">
                            <img src="<?= base_url('uploads/images/') . $image_gallery['image'] ?>" alt="<?= $image_gallery['alt_text'] ?>">
                            <span class="cz-ne-zoom"><i class="fas fa-plus"></i></span>
                        </a>
                <?php }
                } ?>

            </div>
        </div>
    </div>
    <!-- End Photo gallery -->

    <!-- Call to Action
        ============================================= -->
    <div class="home-blog-two-area default-padding">
        <div class="container">
            <div class="blog-style-two-box bg-dark">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-box text-center fade-up-anim">
                            <h2 class="cta-title mb-20">Meet us at the next event</h2>
                            <p class="cta-description mb-30">
                                We're regularly at conferences, webinars and meetups around the world. Tell us
                                where you'll be and let's connect in person.
                            </p>
                            <div class="cta-buttons">
                                <a class="btn btn-style-one btn-border mb-2" href="<?= base_url('book-free-consultation') ?>">
                                    Book a Meeting <i class="fas fa-arrow-right"></i>
                                </a>
                                <a class="btn btn-style-one mb-2" href="<?= base_url('contact') ?>">
                                    Invite Us to Speak <i class="fas fa-arrow-right"></i>
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
    /*
    (function($) {
        // filter pills
        $('.cz-ne-filter li').on('click', function() {
            var filter = $(this).data('filter');
            $('.cz-ne-filter li').removeClass('active');
            $(this).addClass('active');
            $('.cz-ne-col').each(function() {
                var show = filter === 'all' || $(this).data('category') === filter;
                $(this).toggle(show);
            });
        });

        // title / button opens that event's photo gallery
        $('.cz-ne-gallery-trigger').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.cz-ne-featured-box, .cz-ne-card')
                .find('.cz-ne-thumb .item').first().trigger('click');
        });
    })(jQuery);
    */
</script>