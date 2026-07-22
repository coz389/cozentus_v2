<?php
if (!empty($image)) {
    $banner = base_url('uploads/images/' . $image);
} else {
    $banner = base_url('assets/img/shape/banner-13.jpg');
}

?>

<div class="blog-area blog-grid default-padding">
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-style-two">
                    <h1 class="text-transform-up">Universal solutions <strong>That work for all!</strong></h1>
                </div>
            </div>

        </div>
    </div> -->

    <div class="container">
        <div class="blog-item-box">

            <div class="row">
                <div class="col-md-8 mx-auto pagi-area text-center mb-4">
                    <h2 class="wow fadeInUp  mb-4"><?= $title ?></h2>
                    <?php
                    if (($type != 6) &&  ($type != 7)) { ?>
                        <div class="filter-container">
                            <!-- <h3>
                                Filter By
                            </h3> -->
                            <div class="row">
                                <div class="col-lg-4 col-6 mb-3">
                                    <div class="form-group">
                                        <select id="services" class="form-control">
                                            <option value="">All</option>
                                            <?php if (!empty($services))
                                                foreach ($services as $sv) {
                                                    echo '<option value="' . $sv['serviceid'] . '">' . $sv['name'] . '</option>';
                                                } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mb-3">
                                    <div class="form-group">
                                        <select id="authors" class="form-control">
                                            <option value="">Author</option>
                                            <?php if (!empty($authors))
                                                foreach ($authors as $sv) {
                                                    echo '<option value="' . $sv['id'] . '">' . $sv['name'] . '</option>';
                                                } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="form-group">
                                        <input class="form-control" id="query" placeholder="Search here..." type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
            <div class="row" id="blogs-list">
            </div>
        </div>
        <!-- Pagination -->
        <!-- <div class="row">
            <div class="col-md-12 pagi-area text-center">
                <nav aria-label="navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div> -->
        <!-- End Pagination -->
    </div>
</div>
<!-- End Blog -->

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
                //console.log(res); // Log the response to the console
                var temp = ``;

                if (res.length) {
                    res.forEach(e => {

                        // Check if title is equal to "1"
                        let category = e.is_webinar == 1 ? "Webinar" : '';
                        let tags = e.tags ? e.tags.split(',') : [];

                        let btnText = (e.type == 7) ? "Listen Now" : "Read More";
                        temp += `<div class="col-xl-3 col-lg-4 col-md-6 mb-50">
                <div class="blog-style-two fade-up-anim">
                    <div class="thumb">
                        <a href="${site_url+'<?= $site ?>/'+e.slug}"><img src="${site_url+'uploads/images/'+e.image}" alt="${e.alt_text}"></a>
                    </div>
                    <div class="info">
                        <div class="blog-one-meta">
                            <ul>
                                <!-- ${tags.length ? tags.map(tag => `<li><a href="#">${tag}</a></li>`).join('') : ''}-->
                                
                                <li>
                                    ${e.date}
                                </li>
                            </ul>
                        </div>
                        <h5 class="blog-title">
                            <a href="${site_url+'<?= $site ?>/'+e.slug}">${e.title}</a>
                        </h5>
                        <!-- <a href="${site_url+'<?= $site ?>/'+e.slug}" class="btn-simple">
                            ${btnText} <i class="fas fa-long-arrow-right"></i>
                        </a>-->
                    </div>
                </div>
            </div>`
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