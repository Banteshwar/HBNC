<?php  $version = '?v=1.0.3'; ?>
<!doctype html>
<html class="no-js" lang="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php
            if (isset($page_title)) {
                echo $page_title . ' :: ';
            }
            ?>Home Based Care of New Born and Young Child</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.ico'); ?>">
        <!-- Main Menu CSS -->

        <link href="<?= base_url('assets/css/meanmenu.min.css').$version; ?>" rel="stylesheet">
        <!-- Normalize CSS -->
        <link href="<?= base_url('assets/css/normalize.css').$version; ?>" rel="stylesheet">
        <!-- Main CSS -->
        <link href="<?= base_url('assets/css/main.css').$version; ?>" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css').$version; ?>" rel="stylesheet">
        <!-- Font-awesome CSS-->
        <link href="<?= base_url('assets/css/font-awesome.min.css').$version; ?>" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="<?= base_url('assets/css/animate.min.css').$version ?>" rel="stylesheet">
        <!-- Font-flat CSS-->
        <link href="<?= base_url('assets/fonts/flaticon.css').$version; ?>" rel="stylesheet">
        <!-- Owl Caousel CSS -->
        <link href="<?= base_url('assets/css/OwlCarousel/owl.carousel.min.css').$version; ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/OwlCarousel/owl.theme.default.min.css').$version; ?>" rel="stylesheet">

        <!-- nivo slider CSS -->
        <link href="<?= base_url('assets/css/slider/nivo-slider.css').$version; ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/slider/preview.css').$version; ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= base_url('assets/css/style.css').$version; ?>" rel="stylesheet">
        <!-- gallery CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/css/gallery.css').$version; ?>">


        <script src="<?= base_url('assets/js/maps/jquery-3.2.1.min.js').$version; ?>" type="text/javascript"></script>
		<link href="<?= base_url('assets/js/jsmaps/jsmaps.css').$version; ?>" rel="stylesheet" type="text/css" />
		<script src="<?= base_url('assets/js/jsmaps/jsmaps-libs.js').$version; ?>" type="text/javascript"></script>
		<script src="<?= base_url('assets/js/jsmaps/jsmaps-panzoom.js').$version; ?>"></script>
		<script src="<?= base_url('assets/js/jsmaps/jsmaps.min.js').$version; ?>" type="text/javascript"></script>
		<script src="<?= base_url('assets/js/maps/india.js').$version; ?>" type="text/javascript"></script>

		
        <base href="<?php echo base_url(); ?>">
    </head>

    <body>

        <div class="wraper">

            <header>
                <div class="header-top-section"></div>
                <div class="header1-area header-two">
                    <div class="header-top-area header-top-20" id="sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="logo-area">
                                        <a href=https://mohfw.gov.in/">
                                            <img src="<?= base_url('assets/img/ministry_logo.png'); ?>" alt="logo" class="img-responsive" width="80%">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <h3>Home Based Care of New Born and Young Child</h3>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="logo_img_top">
                                        <a href="https://www.nhp.gov.in/" target="_">
                                            <img src="<?= base_url('assets/img/logo_nhp_back-b.png'); ?>" alt="logo" class="img-responsive logo1">
                                        </a>
                                        <a href="https://nhm.gov.in/" target="_">
                                            <img src="<?= base_url('assets/img/nhm.png'); ?>" alt="logo" class="img-responsive logo3">
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header1-area header-two">
                    <div class="header-top-area header-top-color" id="sticker">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="<?= base_url(''); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                                <li><a href="">ABOUT US <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('AboutUs/aboutHBNC'); ?>">HBNC program</a></li>
                                                        <li><a href="<?= base_url('AboutUs/aboutHBYC'); ?>">HBYC program</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javaScript:void();">Documents <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('Documents/DocHBNC'); ?>">HBNC program</a></li>
                                                        <li><a href="<?= base_url('Documents/DocHBYC'); ?>">HBYC program</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javaScript:void();">IEC <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('IEC/iecVideo'); ?>">Video Spots</a></li>
                                                        <li><a href="<?= base_url('IEC/iecDocumentary'); ?>">Documentary  Film</a></li>
                                                        <li><a href="<?= base_url('IEC/iecPrint'); ?>">Print Material</a></li>
                                                    </ul>  
                                                </li>
                                                <li><a href="javaScript:void();">Training <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('Traning/traningModule'); ?>">Training Modules</a></li>
                                                        <li><a href="<?= base_url('traning/traningASHA'); ?>">Training of State Teams (ASHA, AWW,ANM, MO)</a></li>
                                                        <li><a href="<?= base_url(''); ?>">Training Schedules, if any</a></li>
                                                    </ul>
                                                </li>
<!--                                                <li><a href="<?= base_url('Events'); ?>">Events</a></li>-->
                                                <li><a href="<?= base_url('gallery'); ?>">Gallery </a></li>





                                                <li><a href="<?= base_url('report'); ?>">Report </a>

                                                    <!--  <ul class="menu-dropdown">
                                                            <li><a href="<?= base_url('report/coverage'); ?>">Coverage</a></li>
                                                            <li><a href="<?= base_url('report/saturation'); ?>">Saturation</a></li>
                                                            <li><a href="<?= base_url('report/SocialMedia'); ?>">Social Media</a></li>
                                                        </ul>-->
                                                </li>
                                                <li><a href="<?= base_url('ContactUs'); ?>">Contact Us</a></li>
                                                <li class="login_li pull-right" >
                                                    <?php if (!isset($_SESSION['ADMIN']['admin_id'])) { ?>
                                                        <a class="fontResizer_minus login_class" onclick="location.href = '<?php echo base_url('login'); ?>'";>Login 
                                                            <img src="<?= base_url('assets/img/login_icon.png'); ?>" alt="">
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="fontResizer_minus login_class" 
                                                           href="<?php echo base_url('admin/welcome'); ?>" >My Account 
                                                            <img src="<?= base_url('assets/img/login_icon.png'); ?>" alt="">
                                                        </a>
                                                    <?php } ?>
                                                </li>
                                                <!--                                                <li class=" pull-right"><a class="fontResizer_minus login_class_socal" href="#">
                                                
                                                                                                        <img src="<?= base_url('assets/img/facebook.png'); ?>" alt="" >
                                                                                                    </a></li>
                                                                                                <li class=" pull-right"><a class="fontResizer_minus login_class_socal" href="#">
                                                
                                                                                                        <img src="<?= base_url('assets/img/tweet.png'); ?>" alt="" >
                                                                                                    </a></li>-->
                                            </ul>

                                        </nav>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                           <li><a href="<?= base_url(''); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                                <li><a href="">ABOUT US <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('AboutUs/aboutHBNC'); ?>">HBNC program</a></li>
                                                        <li><a href="<?= base_url('AboutUs/aboutHBYC'); ?>">HBYC program</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javaScript:void();">Documents <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('Documents/DocHBNC'); ?>">HBNC program</a></li>
                                                        <li><a href="<?= base_url('Documents/DocHBYC'); ?>">HBYC program</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javaScript:void();">IEC <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('IEC/iecVideo'); ?>">Video Spots</a></li>
                                                        <li><a href="<?= base_url('IEC/iecDocumentary'); ?>">Documentary  Film</a></li>
                                                        <li><a href="<?= base_url('IEC/iecPrint'); ?>">Print Material</a></li>
                                                    </ul>  
                                                </li>
                                                <li><a href="javaScript:void();">Training <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                    <ul class="menu-dropdown">
                                                        <li><a href="<?= base_url('Traning/traningModule'); ?>">Training Modules</a></li>
                                                        <li><a href="<?= base_url('traning/traningASHA'); ?>">Training of State Teams (ASHA, AWW,ANM, MO)</a></li>
                                                        <li><a href="<?= base_url(''); ?>">Training Schedules, if any</a></li>
                                                    </ul>
                                                </li>
<!--                                                <li><a href="<?= base_url('Events'); ?>">Events</a></li>-->
                                                <li><a href="<?= base_url('gallery'); ?>">Gallery </a></li>





                                                <li><a href="<?= base_url('report'); ?>">Report </a>

                                                    <!--  <ul class="menu-dropdown">
                                                            <li><a href="<?= base_url('report/coverage'); ?>">Coverage</a></li>
                                                            <li><a href="<?= base_url('report/saturation'); ?>">Saturation</a></li>
                                                            <li><a href="<?= base_url('report/SocialMedia'); ?>">Social Media</a></li>
                                                        </ul>-->
                                                </li>
                                                <li><a href="<?= base_url('ContactUs'); ?>">Contact Us</a></li>
                                                <li class="login_li pull-right" >
                                                    <?php if (!isset($_SESSION['ADMIN']['admin_id'])) { ?>
                                                        <a class="fontResizer_minus login_class" onclick="location.href = '<?php echo base_url('login'); ?>'";>Login 
                                                            <img src="<?= base_url('assets/img/login_icon.png'); ?>" alt="">
                                                        </a>
                                                    <?php } else { ?>
                                                        <a class="fontResizer_minus login_class" 
                                                           href="<?php echo base_url('admin/welcome'); ?>" >My Account 
                                                            <img src="<?= base_url('assets/img/login_icon.png'); ?>" alt="">
                                                        </a>
                                                    <?php } ?>
                                                </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area end -->
            </header>