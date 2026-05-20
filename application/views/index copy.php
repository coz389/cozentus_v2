<div class="home-page">
    <?php if (!empty($banners)) { ?>
        <header class="main-header-area">
            <div class="main-banner-swiper-container">
                <div class="swiper main-banner-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($banners as $br) { ?>
                            <div class="swiper-slide"> 
                                                             
                            <?php if(!empty($br['video_id'])) { ?>  
                                    <div class="main-banner custom-you" style="pointer-events: none">

                                    
                                        
                                <!-- <iframe class="responsive-iframe" src="https://www.youtube.com/embed/KNv9sqJv4oQ"></iframe> -->
                                    <!-- <iframe src="https://www.youtube.com/embed/KNv9sqJv4oQ?autoplay=1&mute=1&rel=0&loop=1&playlist=KNv9sqJv4oQ&controls=0&modestbranding=1&showinfo=0"  allowtransparency="true"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                                        <?php echo $br['video_id'] ?>

  
                                    <?php } else {?>
                                    <div class="main-banner">
                                    <img src="<?=base_url('uploads/images/').$br['image']?>" alt="<?= $br['alt_text'] ?>">
                                    <?php } ?>
                                    <div class="container">
                                        <div class="banner-content">
                                            <div class="row align-items-center">
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                                    <div class="banner-content-area text-end">
                                                        <h1>
                                                            <?= html_entity_decode($br['title']) ?>
                                                        </h1>
                                                        <p class="para">
                                                            <?= $br['short_description'] ?>
                                                        </p>
                                                        <?php if (!empty($br['cta_btn']) && !empty($br['cta_link'])) { ?>
                                                            <div class="btn-flex">
                                                                <a href="<?= urldecode($br['cta_link']) ?>" target="blank" class="main-btn">
                                                                    <span><?= $br['cta_btn'] ?> </span>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 offset-1">
                                                    <!-- <p class="banner_para">This is paragraph</p> -->
                                                </div>
                                                <!-- <div class="menu-link">
                                                    <ul>
                                                        <li><a href="">Who We Are</a></li>
                                                        <li><a href="">What Do We Offer</a></li>
                                                        <li><a href="">Whom Do We Serve</a></li>
                                                        <li><a href="">Why Choose Us</a></li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <script>
  document.addEventListener("DOMContentLoaded", function() {
    var lazyVideos = [].slice.call(document.querySelectorAll("iframe.youtube-player"));
    
    if ("IntersectionObserver" in window) {
      let lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(video) {
          if (video.isIntersecting) {
            let iframe = video.target;
            iframe.src = iframe.dataset.src;
            lazyVideoObserver.unobserve(iframe);
          }
        });
      });
      
      lazyVideos.forEach(function(iframe) {
        lazyVideoObserver.observe(iframe);
      });
    } else {
      // Fallback for browsers without IntersectionObserver support
      lazyVideos.forEach(function(iframe) {
        iframe.src = iframe.dataset.src;
      });
    }
  });
</script>
                <div class="banner-pagination">
                    <div class="container">
                        <div class="main-banner-swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </header>
    <?php } ?>


    <div class="container">
        <div class="menu-link">
            <ul>
                <li><a href="#who-we-are"><?= html_entity_decode($page_data[0]['sub_menu_title1']) ?></a></li>
                <li><a href="#what-do-we-offer"> <?= html_entity_decode($page_data[0]['sub_menu_title2']) ?></a></li>
                <li><a href="#whom-do-we-serve"><?= html_entity_decode($page_data[0]['sub_menu_title3']) ?></a></li>
                <li><a href="#why-choose-us"><?= html_entity_decode($page_data[0]['sub_menu_title4']) ?></a></li>
            </ul>
        </div>
    </div>
    <?php //foreach ($home_page_content as $page_data) { ?>                                                    
    <div class="container" id="who-we-are">
        <div class="row">
            <div class="col-12">
                <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="we-built">
                        <p> <?= $page_data[0]['title'] ?></p>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <section class="hm-tool-sec tool-main-sec more-info" style="overflow: hidden;">
        <div class="row">
            <div class="col-lg-5 pb-4" style="">
                <h2><?= $page_data[0]['description'] ?></h2>
                <p><?= html_entity_decode($page_data[0]['content']) ?></p>
                <a href="<?= urldecode($page_data[0]['cta_link']) ?>"><?= $page_data[0]['cta_btn'] ?></a>
            </div>
            <div class="col-lg-7 position-relative">
                <img loading="lazy" width="876" height="514" class="w-100 height_auto" src="<?=base_url('uploads/images/').$page_data[0]['image']?>" alt="<?= $page_data[0]['alt_text'] ?>">

                <!-- <div class="we-built">
                    <p>We build <b>innovative custom solution</b> for your <b>logistic business</b></p>
                </div> -->
            </div>
        </div>
    </section>
<?php //} ?>
    <!-- <section class="hm-tool-sec tool-main-sec sec">
        <div class="ovr-grid">
            <div class="ovr-grid-item" data-aos="fade-right" data-aos-duration="1000">
                <div class="ov-content-wrapper">
                    <div class="sec-head">
                        <h2>Embracing digital transformation <span>for Logistics innovation</span></h2>
                        <p class="para">
                            Answer two questions and put our thinking to work on your challenges.
                        </p>
                    </div>
                    <div class="hm-tool-container">
                        <p class="ques-remain">Question <span>1</span> of 2</p>
                        <div class="hm-tool-steps first-step">
                            <h2 class="ques">
                                1. Which of the following do you consider to be the most significant for your business?
                            </h2>
                            <div class="opt-wrapper">
                                <ul class="opts" data-step="1">
                                <?php if(!empty($tags)){
                                             foreach($tags as $in)
                                                {
                                                    if(!empty($in))
                                                    $ind = explode(',', $in);
                                                foreach($ind as $indus)
                                                {
                                                    if(!empty($indus))
                                                    $input[]=$indus;
                                                }
                                               
                                                }
                                                $input = array_map(function($str) {
                                                    return preg_replace('/[^A-Za-z0-9 ]/', '', trim(($str)));
                                                }, $input);
                                                
                                                // Remove duplicates
                                                $newInArr = array_unique($input);
                                            }?>
                                   <?php foreach($newInArr as $narr){?>
                                    <li>
                                        <button class="opts-btn" data-val="<?=$narr?>"><?=$narr?></button>
                                    </li><?php }?>
                                </ul>
                                <input type="hidden" id="tag-inp">
                            </div>
                        </div>
                        <div class="hm-tool-steps second-step d-none">
                            <h2 class="ques">
                                2. Which of the following disruptions have had the most significant impact on your logistics operations?
                            </h2>
                            <div class="opt-wrapper">
                                <ul class="opts stwo-btn" data-step="2">
                                    <li>
                                        <button class="opts-btn-2">Fluctuations in customer demand</button>
                                    </li>
                                    <li>
                                        <button class="opts-btn-2">Supplier delays</button>
                                    </li>
                                    <li>
                                        <button class="opts-btn-2">Transportation disruptions</button>
                                    </li>
                                    <li>
                                        <button class="opts-btn-2">Customer dissatisfaction</button>
                                    </li>
                                    <li>
                                        <button class="opts-btn-2">Long lead times</button>
                                    </li>
                                    <li>
                                        <button class="opts-btn-2">No or limited visibiity</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="main-btn mt-10 step-next" data-step="1">
                            <span>Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="ovr-grid-item" data-aos="fade-left" data-aos-duration="1000">
                <div class="ovr-img">
                    <img src="assets/images/hm-img-1-min.jpeg" alt="">
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="hm-tool-sec sec pt-0">
        <div class="ovr-grid -odd">
            <div class="ovr-grid-item" data-aos="fade-right" data-aos-duration="1000">
                <div class="ovr-img"> 
                    <img src="assets/images/hm-img-2-min.jpeg" alt="">
                </div>
            </div>
            <div class="ovr-grid-item" data-aos="fade-left" data-aos-duration="1000">
                <div class="ov-content-wrapper">
                    <div class="sec-head">
                        <h2>Transforming <span>Logistics Worldwide</span></h2>
                        <p class="para mb-30">
                            Cozentus' executive/leadership team brings over 25 years of domain expertise, making us a trusted partner for Fortune 500 companies seeking innovative supply chain, logistics and digital transformations. Our best-in-class supply chain and logistics domain-driven technology services have established our reputation in the industry.
                        </p>
                        <a href="<?=base_url('about')?>" class="main-btn ">
                            <span>Know More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <?php // if (!empty($servicehomecard)) { ?>
        <!-- <section class="solution-sec sec" style="background: #19405d;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                            <h2>Transforming <span>Logistic</span> with <br /> <span>tailored tech-solution</span></h2>
                            <p class="paragraph">Our customized-tech solutions help your logistic companies to success with focused plans, innovation and seamless integration for sustainable expansion.</p>
                        </div>
                        <div class="swiper solution-swiper mt-50" data-aos="fade-up" data-aos-duration="1000">
                            <div class="swiper-wrapper">
                                <?php foreach ($servicehomecard as $ser) { ?>
                                    <div class="swiper-slide">
                                        <a href="<?=base_url('solutions/').$ser['slug']?>" class="vtr-card-wrapper">
                                            <img src="<?= base_url('uploads/images/') . $ser['image'] ?>" alt="<?= $ser['alt_text'] ?>">
                                            <div class="con">
                                                <h3><?= $ser['card_heading'] ?></h3>
                                                <p class="para white">
                                                    <?= $ser['card_description'] ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <?php // } ?>


    <section class="solution-sec sec" id="what-do-we-offer" style="background: #2264dc;">
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
            <?php foreach ($servicehomecard as $ser) {
                if($ser['is_home'] == 1){
                
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-3">
                    <a href="<?=base_url('services/').$ser['slug']?>">
                        <div class="transforming p-0 border position-relative overflow-hidden mt-0">
                            <img width="400" height="230" class="w-100 img-hover height_auto" src="<?= base_url('uploads/images/') . $ser['image'] ?>" alt="<?= $ser['alt_text'] ?>">
                            <h3><?= $ser['card_heading'] ?></h3>
                            <div class="c-part">
                                <p><?= $ser['card_description'] ?></p>
                            </div>
                            <!-- <div class="c-part c-part-2">
                                <a href="">View More...</a>
                            </div> -->
                        </div>
                    </a>
                </div>
                <?php }
            } ?>

            
            </div>
        </div>
    </section>


    <section class="solution-sec sec"  style="">
        <div class="container testimonial">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center innovation txt-dark" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= html_entity_decode($innovation[0]['title']) ?></h2>
                        <p class="paragraph"><?= html_entity_decode($innovation[0]['short_description']) ?></p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <!-- <div class="col-lg-7 d-none d-lg-block wow fadeInLeft">
                    <ol class="carousel-indicators tabs">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <figure>
                                <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png" class="img-fluid" alt="">
                            </figure>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-1 arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                <div class="col-lg-4 d-flex justify-content-center align-items-center wow fadeInRight">
                    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="quote-wrapper">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div> -->
                
                <!-- <div class="col-lg-6 we-automate">
                    <p>We automate every step of your logistic chain with our fine blend of custom offerings built using new-age technologies.</p>
                </div> -->
            </div>
            <div class="col-lg-12">
            <img loading="lazy" width="1320" height="475" class="w-100 img-hover height_auto" src="<?=base_url('uploads/images/').$innovation[0]['image']?>" alt="<?= $innovation[0]['alt_text'] ?>">

            </div>
        </div>
        
    </section>


    <section class="solution-sec sec pb-0" id="whom-do-we-serve" style="">
        <div class="container">
            <div class="row align-items-center position-relative">
            <!-- <img src="<? //=base_url('uploads/images/').$industries[0]['image']?>" alt="<?//= $industries[0]['alt_text'] ?>"> -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 industries-section">
                    <div class="sec-head industries" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?= $industries[0]['title'] ?></h2>
                        <p class="text-dark text-start"><?= $industries[0]['short_description'] ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <img loading="lazy" width="640" height="540" class="w-100 height_auto" src="<?=base_url('uploads/images/').$industries[0]['image']?>" alt="<?= $industries[0]['alt_text'] ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="solution-sec sec pt-0 pb-0">
        <!-- <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php 
                $count = 0;
                foreach ($homesliders as $sl) { 
                $count ++; ?>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $count ?>" class="<?php if($count == 1) { echo 'active'; } ?>"></button>
                    <?php } ?>
            </div>
            <div class="carousel-inner">
                <?php 
                $count = 0;
                foreach ($homesliders as $sl) { 
                $count ++;
                 
                    ?>
                    <div class="carousel-item position-relative <?php if($count == 1) { echo 'active'; } ?>">
                    <img src="<?=base_url('uploads/images/').$sl['image']?>" class="w-100" alt="$sl['alt_text']">
                        <div class="banner-text">
                            <p><?= $sl['short_description'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
          
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div> -->


        <div class="row">
            <div class="swiper why-choose">
                <div class="swiper-wrapper">
                <?php 
                $count = 0;
                // echo '<pre>';
                // print_r($homesliders); 
                // die();
                foreach ($homesliders as $sl) { 
                $count ++; ?>
                    <div class="swiper-slide position-relative">
                        <?php 
                        if(!empty($sl['mob_image'])) {
                            $mob_image = $sl['mob_image'];
                        }else{
                            $mob_image = $sl['image']; 
                        }
                        
                        ?>
                        <!-- <img class="w-100" src="<?// =base_url('uploads/images/').$sl['image']?>" class="w-100" alt="$sl['alt_text']"> -->
                        <picture>
                            <source width="1560" height="300" media="(min-width:650px)" srcset="<?=base_url('uploads/images/').$sl['image']?>">
                            <img loading="lazy" class="w-100" alt="<?=$sl['alt_text'] ?>" src="<?=base_url('uploads/images/').$mob_image?>" width="768" height="400">
                        </picture>
                        <div class="banner-text">
                        <?= $sl['short_description'] ?>
                        </div>
                    </div>
                <?php } ?>
                  
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

    </section>
    <script type="text/javascript">
        $(document).ready(function() {
        var swiper = new Swiper(".why-choose", {
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 0,
            pagination: {
              el: '.swiper-pagination',
            },
            autoplay: {
                enabled: true,
                delay: 5000,
                pauseOnMouseEnter: false,
                disableOnInteraction: true,
            },
            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1920: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                1028: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });
     });

    </script>



    <section class="solution-sec why-choose mb-5 mt-0 pt-5 pb-5" id="why-choose-us" style="background: #eeeeee;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-head center" data-aos="fade-up" data-aos-duration="1000">
                        <h2>  <?= $oursignis[0]['whytitle'] ?></h2>
                    </div>
                </div>
            </div>
           
            <div class="row mt-5">
            <?php 
            $count = 0;
            foreach ($homewhycoz as $wc) { 
            $count ++;
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="why-choose-sec">
                    <?php if(!empty($wc['image'])) { ?>
                        <img loading="lazy" width="80" height="80" class="height_auto" src="<?=base_url('uploads/images/').$wc['image']?>" alt="<?php echo $wc['alt_text'] ?>">
                        <?php } ?>                        
                        <h3><?= html_entity_decode($wc['title']) ?></h3>
                        <p><?= html_entity_decode($wc['short_description']) ?></p>
                        <?php if(!empty($wc['ctalink']) ){ ?>
                        <a href="<?= urldecode($wc['ctalink']) ?>" class="read-more">
                            <span>Read More</span>
                            <img loading="lazy" src="assets/images/ar-bl-right.svg" alt="read more">
                        </a>
                       <?php } ?>
                    </div>
                </div>
                <?php } ?>            
        </div>
    </section>

    


    <!-- <section class="solution-sec achievement-sec" style="background: #9fb1bd;">
        <div class="container">
            <div class="row">
                <div class="swiper achievements">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <div class="sec-hgt">
                                <p>XX+ clients served globally</p>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div class="sec-hgt">
                                <p>100% repeat customers</p>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div class="sec-hgt">
                                <p> XX% faster time to market</p>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div class="sec-hgt">
                                <p>XX resolution time</p>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div class="sec-hgt">
                                <p>USD XX Mn saved annually by our clients</p>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div class="sec-hgt">
                                <p>24x7 timezone coverage</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>   
        </div>
    </section> -->

    <script type="text/javascript">
        $(document).ready(function() {
        var swiper = new Swiper(".achievements", {
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 3,
            paginationClickable: true,
            spaceBetween: 5,
            pagination: {
              el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1520: {
                    slidesPerView: 4,
                    spaceBetween: 5
                },
                1028: {
                    slidesPerView: 3,
                    spaceBetween: 5
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 5
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 5
                }
            }
        });
     });

    </script>


    <section class="solution-sec mb-5 our-significant" style="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <!-- <img src="<?//=base_url('uploads/images/').$oursignis[0]['image']?>" class="w-100" alt="<?//= $oursignis[0]['alt_text'] ?>"> -->
                    <div class="why-coz-img-grid">
                        <div class="why-coz-img aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                           <!--  <video src="https://www.cozentus.com/assets/images/vid_in.mp4" loop="" autoplay="" muted=""></video> -->
                            <img loading="lazy" width="525" height="580" class="" src="<?=base_url('uploads/images/').$oursignis[0]['image']?>" class="w-100" alt="<?= $oursignis[0]['alt_text'] ?>"> 

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 offset-1">
                    <div class="sec-head text-start" data-aos="fade-down" data-aos-duration="1000">
                        <h2><?= $oursignis[0]['title'] ?></h2>
                        <p><?= $oursignis[0]['short_description'] ?></p>
                    </div>
                    <div class="row mt-5">
                    <?//= $oursignis[0]['short_description'] ?>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="why-choose-sec">
                                <h3><?= html_entity_decode($oursignis[0]['significant_1']) ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="why-choose-sec why-choose-sec-3">
                                <h3><?= html_entity_decode($oursignis[0]['significant_2']) ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="why-choose-sec why-choose-sec-2">
                                <h3><?= html_entity_decode($oursignis[0]['significant_3']) ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="why-choose-sec why-choose-sec-3">
                                <h3><?= html_entity_decode($oursignis[0]['significant_4']) ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="why-choose-sec" style="margin-bottom: 0;">
                                <h3><?= html_entity_decode($oursignis[0]['significant_5']) ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="why-choose-sec why-choose-sec-2 why-choose-sec-4" style="margin-bottom: 0;">
                                <h3><?= html_entity_decode($oursignis[0]['significant_6']) ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="solution-sec let-get" style="">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="sec-head center text-start">
                
                    <h2><?= $homecta[0]['title'] ?></h2>
                    <p><?= $homecta[0]['short_description'] ?></p>
                    <?= urldecode($br['cta_link']) ?>
                    <?php if (!empty($homecta[0]['cta_link']) && !empty($homecta[0]['cta_btn'] )) { ?>
                    <a href="<?= urldecode($homecta[0]['cta_link'] ) ?>"><?= $homecta[0]['cta_btn'] ?></a>
                    <?php } ?>
                    <?php if (!empty($homecta[0]['cta_link2']) && !empty($homecta[0]['cta_btn2'] )) { ?>
                    <a href="<?= urldecode($homecta[0]['cta_link2'] ) ?>"><?= $homecta[0]['cta_btn2'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <img loading="lazy" width="525" height="600" src="<?=base_url('uploads/images/').$homecta[0]['image']?>" class="w-100 height_auto" alt="<?= $homecta[0]['alt_text'] ?>">
            </div>
        </div>
    </section>



    <!-- <section class="sec case-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="sec-head center">
                        <h2 data-aos="fade-up" data-aos-duration="1000">
                            Success <span>Stories</span>
                        </h2>
                        <p class="para" data-aos="fade-up" data-aos-duration="1000">
                            Future-proof your logistics operations with Cozentus, embracing innovation and agility to adapt and thrive in a dynamic market landscape.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="arc-cs-area">
            <img src="assets/images/arc.svg" class="arc1" alt="">
            <img src="assets/images/arc2.svg" class="arc2" alt="">
            <div class="cs-swiper swiper" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper-wrapper">
                  <?php if(!empty($casestudies)): foreach($casestudies as $cs):?>
                    <div class="swiper-slide">
                        <div class="cs-card">
                            <img src="<?=base_url('uploads/images/').$cs['image']?>" alt="<?=$cs['alt_text']?>">
                            <div class="det">
                                <h3>
                                    <?= $cs['title']?>
                                </h3>
                                <a href="<?=base_url('case-study/').$cs['slug']?>" class="read-more-btn">
                                    <span>Read More</span>
                                    <img src="<?=base_url('assets/images/arrow.svg')?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
                </div>
            </div>
            <div class="dt-nav-area arc-sw-nav">
                <button class="dt-prev">
                    <img src="assets/images/prev.svg" alt="">
                </button>
                <button class="dt-next">
                    <img src="assets/images/next.svg" alt="">
                </button>
            </div>
        </div>
    </section> -->

</div>



    <?php //include_once 'common/blogs.php';?>

    <!-- <section class="contact-us-sec sec">
        <img src="assets/images/gr-spot.svg" alt="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="sec-head" data-aos="fade-up" data-aos-duration="1000">
                        <h2>
                            Get in <span>touch</span>
                        </h2>
                    </div>
                    <form data-form="home/insertcontact" class="contact-form mt-40 form" data-aos="fade-left" data-aos-duration="1000">
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
                                        <input type="email" name="email" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
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
                                    <label for="" class="label-text">
                                        Services Interested In
                                    </label>
                                    <div class="inp-group">
                                        <div class="select-wrap">
                                            <select name="service" id="">
                                                <option value="">Select Service</option>
                                                
                                                <?php if(!empty($pservcont))
                                                    foreach($pservcont as $ser)
                                                    {
                                                        echo "<option value='".$ser['name']."'>".$ser['name']."</option>";
                                                    }?>
                                            </select>
                                            <img src="assets/images/select-drop.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;I agree to the Cozentus Privacy Policy (<a href="<?=base_url('privacy-statement')?>">Privacy Statement</a>)</label>
                                        <input type="checkbox" name="privacy_policy" class="form-check-input" id="exampleCheck1">
                                    </div>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_site_key; ?>"></div>
                            <div class="col-12">
                                <div class="btn-flex mt-40">
                                    <button class="main-btn" id="sbt-btn">
                                        <span>Schedule a Meeting</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 offset-lg-1 col-12">
                    <div class="con-img">
                        <img src="assets/images/globe.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <script>
        $(document).ready(function() {
            <?php if (!empty($banners_title)) {
            ?>var menu = <?php echo json_encode($banners_title); ?>;
            sliderDelay = 3500;
            var swiper = new Swiper(".main-banner-swiper", {
                pagination: {
                    el: ".main-banner-swiper-pagination",
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + ' banner-pagi-wrap" style="--anim: progress ' +
                            sliderDelay / 1000 + 's linear forwards"><p>' + (menu[index]) + '</p></span>';
                    },
                },
                autoplay: {
                    delay: sliderDelay,
                    disableOnInteraction: false
                }
            });
        <?php } ?>
        })
    </script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $(".testimonial .indicators li").click(function(){
        var i = $(this).index();
        var targetElement = $(".testimonial .tabs li");
        targetElement.eq(i).addClass('active');
        targetElement.not(targetElement[i]).removeClass('active');
            });
            $(".testimonial .tabs li").click(function(){
                var targetElement = $(".testimonial .tabs li");
                targetElement.addClass('active');
                targetElement.not($(this)).removeClass('active');
            });
        });
    $(document).ready(function(){
        $(".slider .swiper-pagination span").each(function(i){
            $(this).text(i+1).prepend("0");
        });
    });
</script>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
 
            const target = document.querySelector(this.getAttribute('href'));
            const offset = 100; // Adjust this value as needed
            const bodyRect = document.body.getBoundingClientRect().top;
            const elementRect = target.getBoundingClientRect().top;
            const elementPosition = elementRect - bodyRect;
            const offsetPosition = elementPosition - offset;
 
            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        });
    });
</script>