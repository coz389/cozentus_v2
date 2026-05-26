<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cozentus</title>
    <!-- plugins:css -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/cropped-favicon-180x180.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/ckeditor/ckeditor.js">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/summernote/dist/summernote-bs4.css">
    <!-- endinject -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        var site_url = "<?= base_url() ?>";
    </script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="javascript:void(0)"><img src="<?= base_url('assets/images/logo-black.png') ?>" style="height:20px;" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item nav-search d-md-flex">
                        <div class="nav-link">
                            <a href="javascript:void(0)" class="clear-cache">Clear Cache</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a href="javascript:void(0)" class="dropdown-item" id="password-setting">
                                <i class="fas fa-cog text-primary"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">
                                <i class="fas fa-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <!--  <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fas fa-ellipsis-h"></i>
            </a>
          </li> -->
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-name">
                                <p class="name">
                                    Welcome Admin
                                </p>
                                <!--  <p class="designation">
                  Super Admin
                </p> -->
                            </div>
                        </div>
                    </li>
                    <!--  <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin') ?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> -->
                    <?php
                    //$sessionData =  $this->session->userdata('AdminLogin');
                    $sessionData =  $this->session->userdata('USER_DATA');
                    $menu_permissions = json_decode($sessionData['menu_permission']);
                    if (is_array($menu_permissions)) {
                        //echo "Welcome ".$sessionData['username'];

                        $menu_datas = $this->admin_model->get_login_user_menu_data($menu_permissions);
                        foreach ($menu_datas as $menu_data) {
                            $menu_name = $menu_data['menu_name'];
                            $menu_icon = $menu_data['icon'];
                            $menu_url = base_url($menu_data['menu_link']);
                            echo '<li class="nav-item">
								<a class="nav-link" href="' . $menu_url . '">
									<i class="fa fa-puzzle-piece menu-icon"></i>
									<span class="menu-title">' . $menu_name . '</span>
								</a>
							</li>';
                        }
                    } else {

                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/blogslist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Post</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/homewhyconlist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage All Why Cozentus</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/testimonialslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Testimonials</span>
            </a>
          </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/imageslist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Media</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/authorlist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Authors</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-gallery" aria-expanded="false" aria-controls="page-layouts">
                                <i class="fab fa-trello menu-icon"></i>
                                <span class="menu-title">Manage Gallery</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="manage-gallery">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/gallerylist') ?>">Manage Images</a></li>
                                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('admin/videolist') ?>">Manage Videos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-home" aria-expanded="false" aria-controls="page-layouts">
                                <i class="fab fa-trello menu-icon"></i>
                                <span class="menu-title">Manage Home</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="manage-home">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/homebannerlist') ?>">Manage Header Banner</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/edithome/1') ?>">Banner Bottom content</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/innovation/1') ?>">Manage Innovation</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/industries/1') ?>">Manage Industries</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/homesliderlist') ?>">Manage Slider</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/oursignificant/1') ?>">Slider Bottom content</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/homewhyconlist') ?>">Manage Why Cozentus</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/admin/edithcta/1') ?>">Footer CTA</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/homesection7/1') ?>">Section 7</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/homesection8/1') ?>">Section 8</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/gallerylist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Gallery</span>
            </a>
          </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/jobslist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Jobs</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/counterslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Counters</span>
            </a>
          </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/teammemberslist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Team</span>
                            </a>
                        </li>
                        <!--  <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/industrylist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Industries</span>
            </a>
          </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/jobenquirylist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Jobs Enquiry</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/contactslist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Contact Enquiry</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-parent-service" aria-expanded="false" aria-controls="page-layouts">
                                <i class="fab fa-trello menu-icon"></i>
                                <span class="menu-title">Manage Parent Services</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="manage-parent-service">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/addparentservice') ?>">Add Service</a></li>
                                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('admin/parentservicelist') ?>">List Services</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-product" aria-expanded="false" aria-controls="page-layouts">
                                <i class="fab fa-trello menu-icon"></i>
                                <span class="menu-title">Manage Services</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="manage-product">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/addservice') ?>">Add Service</a></li>
                                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('admin/servicelist') ?>">List Services</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-category" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Manage Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manage-category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/categorylist/3') ?>">Client Logo Category</a></li>
               
              </ul>
            </div>
          </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/clientlist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Client</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/subscriberlist') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Subscribers List</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/web_setting') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Website</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/header_footer_data') ?>">
                                <i class="fa fa-puzzle-piece menu-icon"></i>
                                <span class="menu-title">Manage Script</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>