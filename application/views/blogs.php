<header class="inner-main-header style-2">
    <?php if ($type == 6) { ?>
    <picture>
        <source media="(max-width: 600px)" srcset="<?= base_url('assets/images/webinar-lading') ?>" />
        <img src="assets/images/webinar-lading" alt="Header banner" />
    </picture>

    <?php } else {  ?>
    <picture>
        <source media="(max-width: 600px)" srcset="<?= base_url('assets/images/tass-banner.jpg') ?>" />
        <img src="assets/images/blog-banner.jpg" alt="Header banner" />
    </picture>
    <?php }  ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 mx-auto">
                <div class="banner-content text-center d-block blog-detail" data-aos="fade-up" data-aos-duration="1000">
                    <h1><?= $title ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="blog-sec sec">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            if (($type != 6) &&  ($type != 7)) { ?>
            <div class="col-lg-6 col-12">
                <div class="filter-container">
                    <h3>
                        Filter By
                    </h3>
                    <div class="filter-bar">
                        <?php if ($type != 2) { ?>
                        <div class="c-select-wrap">
                            <select id="services">
                                <option value="">All</option>
                                <?php if (!empty($services))
                                            foreach ($services as $sv) {
                                                echo '<option value="' . $sv['serviceid'] . '">' . $sv['name'] . '</option>';
                                            } ?>
                            </select>
                            <img src="<?= base_url('assets/images/drop.svg') ?>" alt="">
                        </div>
                        <?php } ?>

                        <?php if ($type != 4) { ?>
                        <div class="c-select-wrap <?= $type == 2 ? 'd-none' : '' ?>">
                            <select name="" id="authors">
                                <option value="">Author</option>
                                <?php if (!empty($authors))
                                            foreach ($authors as $sv) {
                                                echo '<option value="' . $sv['id'] . '">' . $sv['name'] . '</option>';
                                            } ?>
                            </select>
                            <img src="<?= base_url('assets/images/drop.svg') ?>" alt="">
                        </div>
                        <?php } ?>
                        <div class="flt-search">
                            <img src="<?= base_url('assets/images/search.svg') ?>" alt="">
                            <input type="text" id="query" placeholder="Search here..." />
                        </div>
                    </div>
                </div>
            </div>
            <?php }  ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bl-grid" id="blogs-list">

                    <!-- <a href="javascript:void(0)" class="bl-card">
                        <div class="bl-img">
                            <img src="assets/images/bl-img.jpg" alt="">
                        </div>
                        <h3>
                            How A Cozentus Can Help Your Business Optimise Its Tax Structure
                        </h3>
                        <span href="javascript:void(0)" class="read-more">
                            <span>Read More</span>
                            <img src="assets/images/ar-bl-right.svg" alt="">
                        </span>
                    </a> -->

                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    getblogs();
});

$("#services, #authors").change(function() {
    getblogs();
})

$("#query").on('input', function() {
    getblogs();
});

function getblogs() {
    var service = $("#services").val();
    var author = $("#authors").val();
    var query = $("#query").val();
    $.ajax({
        url: site_url + 'getblogsbytype',
        type: "post",
        data: {
            service: service,
            author: author,
            query: query,
            type: <?= $type ?>
        },
        dataType: "json",
        success: function(res) {
            console.log(res); // Log the response to the console
            var temp = ``;

            if (res.length) {
                res.forEach(e => {
                    // Check if title is equal to "1"
                    let webinarText = e.is_webinar == 1 ? "Webinar" : " ";
                    let btnText = (e.type == 7) ? "Listen Now" : "Read More";
                    temp += `<a href="${site_url+'<?= $site ?>/'+e.slug}" class="bl-card">
                            <div class="bl-img">
                                <img src="${site_url+'uploads/images/'+e.image}" alt="${e.alt_text}">
                            </div>
                            <div class="dt-date">
                                <img src="${site_url+'assets/images/cal-icon-blue.svg'}" alt="">
                                <span>${e.date}</span>
                            </div>
                            <h3>
                                ${e.title}
                            </h3>
                        
                            <span href="javascript:void(0)" class="read-more">
                                <span>${btnText}</span>
                                <img src="${site_url+'assets/images/ar-bl-right.svg'}" alt="">
                            </span>
                        </a>`
                })
                $("#blogs-list").html(res);
            } else {
                temp += `<h3>Not Found</h3>`;
            }
            $("#blogs-list").html(temp);
        }
    });
}
</script>