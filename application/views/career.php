<header class="inner-main-header style-2">
    <img src="<?= base_url('assets/images/career-banner-img.webp') ?>" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="banner-content text-center d-block blog-detail" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Sculpting Talent</h1>
                    <p class="para">
                        Be a part of innovation. Join Cozentus
                    </p>
                    <a href="#jobs" class="main-btn">
                        <span>Join Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Xopa Microsite Embed Section -->
<section class="career-embed" style="margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000" id="jobs">

                    <h3 style="text-align: center; margin-bottom: 30px;">Join Our Team</h3>

                    <!-- Embedded Microsite -->
                    <div id="xr-frame-wrap" data-xpid="cozentus-careers" data-xsn="cozentus-careers" data-xlng="en"
                        data-xcls="x-no-lang">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="abt-sec sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="abt-con">
                    <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                        <h2>
                            Surge Ahead <span>with Cozentus</span>
                        </h2>
                    </div>
                    <p class="para" data-aos="fade-up" data-aos-duration="1000">
                        Cozentus is the destination for aspiring talents who crave cutting-edge challenges. If you're
                        thrilled by next-gen technology, Cozentus offers you the unparalleled opportunity to immerse
                        yourself in its realm. With a culture rooted in open-mindedness, innovation, and continuous
                        learning, Cozentus magnetizes top talent.
                        <br><br>
                        If that is who you are, explore opportunities below.
                        <br><br>
                        Can’t find an opportunity? Send your CV to
                    </p>
                    <a href="mailto:career@cozentus.com" class="main-wrap" data-aos="fade-up" data-aos-duration="1000">
                        <img src="<?= base_url('assets/images/mail-icon.svg') ?>" alt="">
                        <span>career@cozentus.com.</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="abt-img">
                    <img src="<?= base_url('assets/images/abt-img.jpg') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-vl-sec light-bg sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center mb-60" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                        Attributes <span>We Value</span>
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="vl-grid" data-aos="fade-up" data-aos-duration="1000">
                    <div class="vl-wrap">
                        <img src="assets/images/aspiration.svg" alt="">
                        <div class="det">
                            <h3>Success-driven</h3>
                            <p class="para">
                                We prize goal-centric individuals who are focused on achieving professional growth and
                                success
                            </p>
                        </div>
                    </div>
                    <div class="vl-wrap">
                        <img src="assets/images/commitment.svg" alt="">
                        <div class="det">
                            <h3>Committed</h3>
                            <p class="para">
                                If you are committed to surmounting every obstacle we’re looking for you
                            </p>
                        </div>
                    </div>
                    <div class="vl-wrap">
                        <img src="assets/images/strategy.svg" alt="">
                        <div class="det">
                            <h3>Troubleshooter</h3>
                            <p class="para">
                                At Cozentus you plan and design in a stress-free ambience
                            </p>
                        </div>
                    </div>
                    <div class="vl-wrap">
                        <img src="assets/images/communication.svg" alt="">
                        <div class="det">
                            <h3>Transparent</h3>
                            <p class="para">
                                At Cozentus we believe in complete transparency and free flow of information
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="sec jobs-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center"  data-aos="fade-up" data-aos-duration="1000">
                    
                    <!--<p class="para">-->
<!--Here’s your opportunity-->
<!--</p>-->
</div>
<!--<div class="filter-bar job-search">                       
                        <div class="flt-search">
                            <img src="<?= base_url('assets/images/search.svg') ?>" alt="">
                            <input type="text" id="query" placeholder="Job Search ..." />
                        </div>
                    </div> -->

<!--<div class="job-grid mt-60" id="jobs-list">
                  
                 
                </div>-->

</div>
</div>
</div>
</section>

<?php if (!empty($gallery)) { ?>
    <section class="sec jobs-sec pt-0" id="lifeatcozentus" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                        <h2>
                            Life At <span>Cozentus</span>
                        </h2>
                    </div>
                    <div class="swiper gal-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($gallery as $jb) { ?>
                                <div class="swiper-slide">
                                    <div class="gal-item">
                                        <img src="<?= base_url('uploads/images/') . $jb['image'] ?>"
                                            alt="<?= $jb['alt_text'] ?>" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="dt-nav-area">
                        <button class="gal-prev">
                            <img src="<?= base_url() ?>assets/images/prev.svg" alt="">
                        </button>
                        <button class="gal-next">
                            <img src="<?= base_url() ?>assets/images/next.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php if (!empty($videos)) { ?>
    <section class="sec jobs-sec pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000" id="j-btn">
                        <h2>
                            Our Workspace, <span>Your Future</span>
                        </h2>
                        <!--<p class="para">-->
                        <!--Explore Cozentus-->
                        <!--</p>-->
                    </div>
                    <div class="vid-swiper-container">

                        <div class="swiper vid-swiper">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($videos as $jb) { ?>
                                    <div class="swiper-slide">
                                        <div class="vid-wrapper youtube-video-place" data-url="<?= urldecode($jb['video']) ?>">
                                            <!--<button class="play-btn" >-->
                                            <!--    <img src="<? //=base_url('assets/images/play-icon.svg')
                                                                ?>" alt="">-->
                                            <!--</button>-->
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="dt-nav-area">
                            <button class="vd-prev">
                                <img src="<?= base_url() ?>assets/images/prev.svg" alt="">
                            </button>
                            <button class="vd-next">
                                <img src="<?= base_url() ?>assets/images/next.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="sec cta-sec">
    <img src="<?= base_url('assets/images/cc1.svg') ?>" class="c1" alt="">
    <img src="<?= base_url('assets/images/cc2.svg') ?>" class="c2" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="cta-con">
                    <div class="sec-head center">
                        <h2>
                            Looking for <span>Something Else?</span>
                        </h2>
                    </div>
                    <p class="para text-center mb-30">
                        Write or talk to us.
                    </p>
                    <a href="<?= base_url('contact') ?>" class="main-btn center">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade cc-modal" id="csr-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="assets/images/cross.svg" alt="">
                </button>
                <form class="contact-form mt-40 form" data-form="insertcareer">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    First Name
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="fname" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Last Name
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="lname" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Email Address
                                </label>
                                <div class="inp-group">
                                    <input type="email" name="email" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Contact Number
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="phone" id="phone" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Resume
                                </label>
                                <div class="inp-group">
                                    <div class="res-input">
                                        <input type="file" id="resume" name="resume" />
                                        <label for="resume">
                                            <span>Upload Resume</span>
                                            <div class="cross resume-cross">
                                                X
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="position" id="position">
                        <div class="col-12">
                            <div class="btn-flex mt-40">
                                <button type="submit" class="main-btn">
                                    <span>Apply Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(".know-more-btn").click(function() {
        var post = $(this).data('id');
        console.log(post);
        $("#position").val(post);
        $("#csr-modal").modal("show");
    });
</script>
<script>
    $(document).ready(function() {
        getjobs();
    });


    $("#query").on('input', function() {
        getjobs();
    });

    function getjobs() {
        // var service = $("#services").val();
        // var author = $("#authors").val();
        var query = $("#query").val();
        $.ajax({
            url: site_url + 'getbjoblist',
            type: "post",
            data: {
                query: query
            },
            dataType: "json",
            success: function(res) {
                var temp = ``;

                if (res.length) {
                    res.forEach(e => {
                        temp += `
                       
                        <div class="job-card" data-aos="fade-up" data-aos-duration="1000"><h2>
                            ${e.title}
                        </h2>
                        <p class="para">
                            ${e.description}
                        </p>
                        <ul class="ct-li">
                        <li class="ct-li-item">
                            ${e.tags}

                         </li>
                         </ul>
                         <div class="job-card-btns">
                            <a href="${site_url+'career-inner/'+e.slug}" class="main-btn">
                                <span>Know More</span>
                            </a>
                        </div></div>`
                    })
                    $("#jobs-list").html(res);
                } else {
                    temp += `<h3>Not Found</h3>`;
                }
                $("#jobs-list").html(temp);
            }
        });
    }
</script>