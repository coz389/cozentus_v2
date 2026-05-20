<header class="inner-main-header style-2">
    <!--  <picture>
        <source media="(max-width: 600px)" srcset="<?= base_url('uploads/images/') . $pserv['inner_banner_mimage'] ?>" alt="<?= $pserv['alt_inner_banner_mimage'] ?>">
        <img src="<?= base_url('uploads/images/') . $pserv['inner_banner_image'] ?>" alt="<?= $pserv['alt_inner_banner_image'] ?>" class="img-responsive" />
    </picture> -->
    <img src="<?= base_url('uploads/images/') . $pserv['inner_banner_image'] ?>"
        alt="<?= $pserv['alt_inner_banner_image'] ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="banner-content blog-detail">
                    <h2 data-aos="fade-up" data-aos-duration="1000"><?= $pserv['inner_banner_heading'] ?></h2>
                    <p data-aos="fade-up" data-aos-duration="1000" class="para">
                        <?= $pserv['inner_banner_description'] ?>
                    </p>
                    <?php if (!empty($pserv['ctalink']) && !empty($pserv['ctabtn'])) { ?>
                        <a data-aos="fade-up" data-aos-duration="1000" href="<?= urldecode($pserv['ctalink']) ?>"
                            target="blank" class="main-btn center">
                            <span><?= $pserv['ctabtn'] ?></span>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if (!empty($pserv['about_heading'])) { ?>
    <section class="srv-inner-pop-sec">
        <div class="container">
            <div class="srv-inner-pop">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="l-part" data-aos="fade-right" data-aos-duration="1000">
                            <div class="sec-head">
                                <h2>
                                    <?= $pserv['about_heading'] ?> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="r-part" data-aos="fade-left" data-aos-duration="1000">
                            <p class="para"><?= $pserv['about_short_description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="vid-sec sec">
    <div class="container">
        <?php if (!empty($pserv['advantage_heading'])) { ?>
            <div class="row align-items-center">
                <div class="col-lg-5 col-l2">
                    <div class="vid-con-area" data-aos="fade-right" data-aos-duration="1000">
                        <div class="sec-head">
                            <h2><?= $pserv['advantage_heading'] ?></h2>
                        </div>
                        <p class="para">
                            <?= $pserv['advantage_short_description'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12">
                    <div class="swiper prr-swiper" data-aos="fade-left" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php if (!empty($pserv['advantage_video'])) { ?>
                                    <div class="vid-wrapper">
                                        <button class="play-btn" data-url="<?= $pserv['advantage_video'] ?>">
                                            <img src="<?= base_url('assets/images/play-icon.svg') ?>" alt="">
                                        </button>
                                    </div>
                                    <?php } else {
                                    $mimages = explode(",", $pserv['advantage_image']);
                                    foreach ($mimages as $mimg) { ?>

                                        <div class="abt-img">
                                            <img src="<?= base_url('uploads/images/') . $mimg ?>" alt="">
                                        </div>
                                <?php }
                                } ?>
                            </div>

                        </div>
                    </div>
                    <div class="dt-nav-area">
                        <button class="prr-prev">
                            <img src="<?= base_url('assets/images/prev.svg') ?>" alt="">
                        </button>
                        <button class="prr-next">
                            <img src="<?= base_url('assets/images/next.svg') ?>" alt="">
                        </button>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php include_once 'common/casestudies.php'; ?>

    </div>
</section>

<!-- <section class="solution-sec sec" id="what-do-we-offer" style="background: #2264dc;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <h2><?= html_entity_decode($page_data[0]['offerin_heading']) ?></h2>
                    <p class="paragraph"><?= html_entity_decode($page_data[0]['offerin_content']) ?></p>
                       
                    </div>
                </div>
            </div>
            <div class="row">
            <?php //foreach ($servicehomecard as $ser) {
            //if($ser['is_home'] == 1){

            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                    <a href="<? //=base_url('services/').$ser['slug']
                                ?>">
                        <div class="transforming p-0 border position-relative overflow-hidden mt-0">
                        <img class="w-100 img-hover" src="<?= base_url('uploads/images/') . $ser['image'] ?>" alt="<?= $ser['alt_text'] ?>">
                            <h3><? //= $ser['card_heading'] 
                                ?></h3>
                            <div class="c-part">
                                <p><? //= $ser['card_description'] 
                                    ?></p>
                            </div>
                           
                        </div>
                    </a>
                </div>
                <?php //}
                //} 
                ?>

            
            </div>
        </div>
    </section> -->


<!-- <?php //if(!empty($innerservices)){ 
        ?>
  <section class="solution-sec sec pt-0" id="srvs">
      <div class="row justify-content-center">
          <div class="col-lg-5 col-12">
              <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                  <h2>Our <span>Offerings</span></h2>
              </div>
              <p class="para text-center" data-aos="fade-up" data-aos-duration="1000">
                  Delivering bespoke solutions to optimize operations and foster growth, we specialize in understanding customers challenges and seamlessly integrating with existing systems. Our services provide a glimpse of our commitment and capability to innovatively use technology, addressing any specific demand that customers logistic business may necessitate. </p>
          </div>
      </div>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-12">
                  <div class="swiper services-swiper mt-50" data-aos="fade-up" data-aos-duration="1000">
                      <div class="swiper-wrapper">
                          <?php foreach ($innerservices as $ins) { ?>
                      <div class="swiper-slide">
                              <a href="<?= base_url('solutions/') . $pserv['slug'] . '/' . $ins['slug'] ?>" class="vtr-card-wrapper style-2">
                                  <img src="<?= base_url('uploads/images/') . $ins['image'] ?>" alt="<?= $ins['alt_text'] ?>">
                                  <div class="con">
                                      <h3><?= $ins['card_heading'] ?></h3>
                                      <p class="para white">
                                        <?= $ins['card_description'] ?>
                                      </p>
                                  </div>
                              </a>
                          </div>
                          <?php } ?>
                      </div>
                  </div>
                  <div class="dt-nav-area">
                      <button class="dt-prev">
                          <img src="<?= base_url('assets/images/prev.svg') ?>" alt="">
                      </button>
                      <button class="dt-next">
                          <img src="<?= base_url('assets/images/next.svg') ?>" alt="">
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </section>
<?php //} 
?> -->

<?php if ($pserv['tailored_json']) { ?>
    <section class="solution-sec why-choose mb-5 mt-0 pt-5 pb-5" id="" style="background: #eeeeee;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $pserv['tailored_heading'] ?></h2>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <?php
                $count = 0;
                // echo'<pre>';
                // print_r($homewhycoz); die();
                foreach ($tailored as $wc) {
                    $count++;
                ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="why-choose-sec">
                            <?php if (!empty($wc['image'])) { ?>
                                <img src="<?= base_url('uploads/images/') . $wc['image'] ?>" alt="<?= $wc['alt_text'] ?>">
                            <?php } ?>
                            <h4><?= html_entity_decode($wc['heading']) ?></h4>
                            <p><?= html_entity_decode($wc['description']) ?></p>
                            <?php if (!empty($wc['ctalink'])) { ?>
                                <a href="<?= urldecode($wc['ctalink']) ?>" class="read-more">
                                    <span>Read More</span>
                                    <img src="assets/images/ar-bl-right.svg" alt="read more">
                                </a>
                            <?php } ?>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<section class="sec pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                        <?= $pserv['transformation_heading'] ?>
                    </h2>
                </div>
                <p class="para" data-aos="fade-up" data-aos-duration="1000">
                    <?= $pserv['transformation_short_description'] ?> </p>
            </div>
            <div class="col-lg-6 col-12 offset-lg-1">
                <div class="info-gr-img" data-aos="fade-up" data-aos-duration="1000">
                    <img src=" <?= base_url('uploads/images/') . $pserv['transformation_image'] ?>" class="full-img"
                        alt="<?= $pserv['alt_transformation_image'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (!empty($clients)) { ?>
    <section class="solution-sec sec pt-0">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-12">
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Tools & <span>Technology </span></h2>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="swiper tools-p-swiper mt-30" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <?php foreach ($clients as $ins) { ?>
                                <div class="swiper-slide">
                                    <div class="lg">
                                        <img src="<?= base_url('uploads/images/') . $ins['image'] ?>" class="img-full">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="dt-nav-area mt-20">
                        <button class="tp-prev">
                            <img src="<?= base_url('assets/images/prev.svg') ?>" alt="">
                        </button>
                        <button class="tp-next">
                            <img src="<?= base_url('assets/images/next.svg') ?>" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- 
<?php if (!empty($clients)) { ?>
  <section class="sec lg-sec pt-0">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-5" data-aos="fade-up" data-aos-duration="1000">
                  <div class="sec-head center">
                      <h2>Excellence in latest <span>technologies</span></h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <ul class="nav cc-tabs style-2 nav-tabs " id="myTab" role="tablist">
                     <?php foreach ($clients as $ct) { ?>
                  <li class="nav-item" role="presentation">
                            <button class="nav-link client-logo" data-id="<?= $ct['id'] ?>"  type="button" role="tab" aria-controls="home" aria-selected="true"><?= $ct['name'] ?></button>
                        </li>
                       <?php } ?>
                    </ul>
                    <div class="tab-content">
                        <div>
                             <div class="lg-gr client-l-content active" data-aos="fade-up" data-aos-duration="1000" >
                           
                             
                          </div>
                        </div>
                   
                        
                    </div>
                  
              </div>
          </div>
      </div>
  </section>
<?php } ?> -->
<?php include_once 'common/blogs.php'; ?>

<section class="faq-sec sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="sec-head center">
                    <h2>
                        <?= $pserv['heading_faq'] ?>
                    </h2>
                </div>
                <div class="accordion a-cc" data-aos="fade-up" data-aos-duration="1000" id="accordionExample">
                    <?php $faqArr = json_decode($pserv['card_json_faq'], true);
                    $count = 0;
                    foreach ($faqArr as $fq) {
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?= $count ?>" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <?= $fq['heading'] ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $count ?>" class="accordion-collapse collapse "
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?= $fq['description'] ?></div>
                            </div>
                        </div>
                    <?php $count++;
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="contact-us-sec sec style-2" id="con-sec">
    <img src="<?= base_url('assets/images/gr-spot.svg') ?>" alt="">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-12">
                <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                        Get <span>In Touch</span>
                    </h2>
                </div>
                <form data-form="home/insertcontact" data-aos="fade-right" data-aos-duration="1000"
                    class="contact-form mt-40 form">
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
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Work Email Address
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="email" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Contact Number
                                </label>
                                <div class="inp-group">
                                    <input type="text" id="phone" name="phone" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Organisation Name
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="organisation" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <label for="" class="label-text">
                                    Designation
                                </label>
                                <div class="inp-group">
                                    <input type="text" name="employees" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the
                                        Cozentus Privacy Policy (<a href="<?= base_url('privacy-statement') ?>">Privacy
                                            Statement</a>)</label>
                                    <input type="checkbox" name="privacy_policy" class="form-check-input"
                                        id="exampleCheck1">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="service" value="<?= $pserv['card_heading'] ?>">
                        <div class="col-12">
                            <div class="btn-flex mt-40">
                                <button class="main-btn" type="submit">
                                    <span>Schedule a Meeting</span>
                                </button>
                                <!--<button class="main-btn phone-btn with-icon tr-btn">-->
                                <!--    <img src="<?= base_url('assets/images/phone.svg') ?>" alt="">-->
                                <!--    <span>Get a Call back</span>-->
                                <!--</button>-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="con-l-part">
                    <div class="det">
                        <div class="sec-head">
                            <h2>
                                Meet a <span>transformation expert</span>
                            </h2>
                        </div>
                        <p class="para">
                            Get in touch with leading business transformational experts from Cozentus and Move Forward
                            your goals
                        </p>
                    </div>
                    <div class="con-img-style-2">
                        <img src="<?= base_url('assets/images/three-experts.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    <?php if (!empty($clients)) { ?>
        $(document).ready(function() {
            $(".client-logo").first().trigger("click");
        });
        $(".client-logo").click(function() {
            $(".client-logo").removeClass("active");
            var id = $(this).data("id");
            $(this).addClass("active");
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    id: id
                },
                url: site_url + 'home/getclientlogo',
                success: function(res) {
                    var temp = "";
                    res.forEach(e => {
                        temp += `<div class="lg">
                                  <img src="<?= base_url('uploads/images/') ?>${e.image}">
                              </div> 
                                 `;

                    })
                    $(".client-l-content").html(temp);
                }
            });
        });
    <?php } ?>
</script>