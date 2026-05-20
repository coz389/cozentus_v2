<header class="inner-main-header style-2">
    <picture>
        <source media="(max-width: 600px)" srcset="<?= base_url('assets/images/reports-banner.jpg') ?>" />
        <img src="assets/images/reports-banner.jpg" alt="" />
    </picture>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="banner-content blog-detail">
                    <h1><?= $title ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="blog-sec sec">
    <div class="container">

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
            url: site_url + 'getreportsbytype',
            type: "post",
            data: {
                type: <?= $type ?>
            },
            dataType: "json",
            success: function(res) {
                var temp = ``;

                if (res.length) {
                    res.forEach(e => {
                        // Check if title is equal to "1"
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
                            <span>Read More</span>
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