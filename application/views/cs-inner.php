<?php include 'includes/header.php'?>

<header class="inner-main-header style-2">
    <img src="assets/images/blog-inner-bg.jpg" alt="">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 col-md-12">
                <div class="banner-content">
                    <h2>We help Businesses #MoveForward with Cutting Edge SCM Solutions</h2>
                    <!--<ul class="bread-c">-->
                    <!--    <li>-->
                    <!--        <a href="">Home</a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="">How A Cozentus Can Help Your Business Optimise Its Tax Structure</a>-->
                    <!--    </li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div>
</header>

<section class="blog-content-sec sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="blog-content-area">
                    <p class="para">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                        <br><br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                        <br><br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book
                    </p>
                </div>
                <!--<div class="cs-hide-wrap">-->
                <!--    <a href="javascript:void(0)" class="main-btn center" data-bs-target="#cs-modal" data-bs-toggle="modal">-->
                <!--        <span>View Full Article</span>-->
                <!--    </a>-->
                <!--</div>-->
            </div>
            <div class="col-lg-4 offset-lg-1 col-12">
                <div class="sd-card">
                    <div class="auth">
                        <div class="img">
                            <img src="assets/images/author.jpg" alt="" />
                        </div>
                        <div class="det">
                            <h3>AUTHOR</h3>
                            <h4>Raghuram Mylavarapu</h4>
                            <p>
                                - Data-Driven Healthcare Leader
                            </p>
                        </div>
                    </div>
                    <h4>SUBJECT TAGS</h4>
                    <ul class="tags">
                        <li>
                            #healthcare
                        </li>
                        <li>
                            #lowcodenocode
                        </li>
                        <li>
                            #dataanalytics
                        </li>
                        <li>
                            #patientexperience
                        </li>
                        <li>
                            #digitalgold
                        </li>
                    </ul>
                    <h4>SHARE THIS BLOG</h4>
                    <ul class="soc-list">
                        <li>
                            <a href="">
                                <img src="assets/images/linkedin.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="assets/images/facebook.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="assets/images/twitter.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade cc-modal" id="cs-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?=base_url()?>assets/images/cross.svg" alt="">
                </button>
                <form action="" class="contact-form mt-40 form">
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
                                    Number of Employees
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
                                        </select>
                                        <img src="assets/images/select-drop.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="btn-flex mt-40">
                                <button class="main-btn">
                                    <span>Schedule a Meeting</span>
                                </button>
                                <button class="main-btn phone-btn with-icon tr-btn">
                                    <img src="assets/images/phone.svg" alt="">
                                    <span>Get a Call back</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/contact.php'?>

<?php include 'includes/footer.php'?>