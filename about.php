<?php 

    if(isset($_GET['tag'])){
        $prod = $_GET['tag'];
        $pieces = explode('-',$prod);
        $product = ucfirst($pieces[0]).' '.ucfirst($pieces[1]).' '.ucfirst($pieces[2]) ;
    }else{
        $product = "Who Are We";
    }

?>
<!doctype html>
<base href="http://localhost/uppermanya/" />
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Upper Manya Kro Rural Bank || <?=$product ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet"> 
        
        <!-- All css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome-animation.min.css">
        <link rel="stylesheet" href="assets/css/shortcode/shortcodes.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/bod.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <style type="text/css">
            .circle-img img{
                height:8.5em;
                width: 8.5em;
                border-radius:50% !important;
            }
        </style>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Header Area Start -->
        <?php include('public/header.php'); ?>
        <!-- Header Area End -->
        <!-- Breadcrumb Area Start-->
        <?php
            if($product == 'Corporate Information '){
                echo '<div class="breadcrumb-area bg-overlay-dark bg-1">';
            }elseif ($product == "Vision Mission Values") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-3">';
            }elseif ($product == "Why Choose Us") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-4">';
            }elseif ($product == "Executive Management ") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-9">';
            }elseif ($product == "Board Of Directors") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-10">';
            }elseif ($product == "Corporate Social Responsibility") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-11">';
            }else{
                echo '<div class="breadcrumb-area bg-overlay-dark bg-12">';
            }
        ?>  
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text text-left">
                            <?php
                                if($product == "Who Are We"){
                                    echo '<h2 class="animated" style="animation: 1500ms ease-in-out 0s normal none 1 running bounceInLeft;">'.$product.'</h2>';
                                }else{
                                    echo '<h2 class="animated" style="animation: 1500ms ease-in-out 0s normal none 1 running bounceInLeft;">'.$product.'</h2>';
                                }
                            ?>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb animated" style="animation: 2000ms ease-in-out 0s normal none 1 running bounceInLeft;">
                                    <li><a href="">HOME</a></li>
                                    <!-- <li><a href="our-agencies/">OUR AGENCIES</a></li> -->
                                    <?php
                                        if($product != "Who Are We"){
                                            echo '<li>'.$product.'</li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        
        <?php
            // echo $product;
            if($product == 'Corporate Information '){
                echo '<div class="about-three-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-text">
                                        <h3>We are <span>Upper Manya Kro Rural Bank</span></h3>
                                        <h2>The Bank Of Excellence. </h2>
                                        <p>Upper Manya Kro Rural Bank Limited was incorporated as a limited liability company under the Company’s Code of 1963(Act 179) on October 28, 1982. It was granted license to operate as a financial institution effective March 3, 1984 in accordance with the Banking Act of 1970.</p>
                                        <p>The Head Office of the Bank is located at Asesewa in the Upper Manya Krobo District in the Eastern Region.</p>
                                    </div>
                                    <div class="about-text-container">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="single-content">
                                                    <h4 class="single-title">Excellent Service</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                </div>
                                                <div class="single-content">
                                                    <h4 class="single-title">Caring</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="single-content">
                                                    <h4 class="single-title">Teamwork</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                </div>
                                                <div class="single-content">
                                                    <h4 class="single-title">Flexibility</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 hidden-sm hidden-xs">
                                    <div class="">
                                        <!--<img src="assets/img/banner/4.jpg" alt="">-->
                                        <div class="blog-two-area pb-60">         
                                            <div class="row">
                                                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                                    <div class="section-title text-center mb-55">
                                                        <h2>Our Awards</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="blog-wrapper" style="">
                                                    <div class="col-xs-12">
                                                        <div class="single-blog">
                                                            <div class="blog-image" >
                                                                <a href="#!"><img src="assets/img/awards/205-min.png" alt="" height="450px"></a>
                                                                <span>Ghana Club 100, 2005</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="single-blog">
                                                            <div class="blog-image" >
                                                                <a href="#!"><img src="assets/img/awards/209-min.png" alt="" height="450px"></a>
                                                                <span>Ghana Club 100, 2009</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="single-blog">
                                                            <div class="blog-image" >
                                                                <a href="#!"><img src="assets/img/awards/2010-min.png" alt="" height="450px"></a>
                                                                <span>Ghana Club 100, 2010</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="single-blog">
                                                            <div class="blog-image" >
                                                                <a href="#!"><img src="assets/img/awards/2012-min.png" alt="" height="450px"></a>
                                                                <span>Ghana Club 100, 2012</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Vision Mission Values") {
                echo '<div class="service-main-area-2 pt-50 pb-50 bg-rotate-2">
                        <div class="service-banner">
                            <div class="container">
                                <div class="service-banner-left">
                                    <img src="assets/img/banner/3.png" alt="">
                                </div>
                                <div class="service-banner-right">
                                    <div class="about-banner-text">
                                        <div class="about-tab-menu">
                                            <ul role="tablist" class="nav nav-tabs">
                                                <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="vission" href="#vision">Our Vision</a></li>
                                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="mission" href="#mission">Our Mission</a></li>
                                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="values" href="#values">Our Corporate Values</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="tab-content">
                                            <div id="vision" class="tab-pane active" role="tabpanel">
                                                <i class="fa fa-yelp faa-tada animated"></i><p class="text-justify">To be the leading rural bank in the country with Microfinance as its focus</p>
                                            </div>
                                            <div id="mission" class="tab-pane " role="tabpanel">
                                                <ul>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>To position ourselves as a first choice rural bank that mobilizes rural savings for rural investments and improve standard of living of the productive poor through Microfinance</p></li>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>Attract and retain highly qualified and well motivated staff committed to providing sound and competitve banking services to our valued customers</p></li>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>Ensuring the security and maximization of shareholders value</p></li>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>Supporting the community development activities in our catchment area</p></li>

                                                </ul>
                                            </div>
                                            <div id="values" class="tab-pane" role="tabpanel">
                                                <ul>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>Excellence in Service</p></li>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>Caring</p></li>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>Teamwork</p></li>
                                                    <li><i class="fa fa-yelp faa-tada animated"></i> <p>Flexibilty</p></li>
                                                </ul>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Why Choose Us") {
                echo '<div class="features-area bg-light fix">
                        <div class="feature-left-column">
                            <img src="assets/img/banner/2.jpg" alt="">
                        </div>
                        <div class="feature-right-column">
                            <div class="col-10">
                                <div class="feature-text">
                                    <h3><span>Why You</span></h3>
                                    <h2>Choose Upper Manya Bank</h2>
                                    <p>Financo amet, ut perspiciatis unde omnis iste natus error sit voluptatem accusantium ipsum dolor sit amet, etur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                </div>
                            </div>
                            <div class="custom-row">
                                <div class="col-5">
                                    <div class="single-item">
                                        <span class="service-image">
                                            <img src="assets/img/icons/rocket.png" alt="">
                                        </span>
                                        <div class="service-text">
                                            <h4>Fast Loan Approval</h4>
                                            <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="single-item">
                                        <span class="service-image">
                                            <img src="assets/img/icons/team.png" alt="">
                                        </span>
                                        <div class="service-text">
                                            <h4>Dedicated Team</h4>
                                            <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="single-item">
                                        <span class="service-image">
                                            <img src="assets/img/icons/hand.png" alt="">
                                        </span>
                                        <div class="service-text">
                                            <h4>Excellence Service Delivery</h4>
                                            <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="single-item">
                                        <span class="service-image">
                                            <img src="assets/img/icons/refi.png" alt="">
                                        </span>
                                        <div class="service-text">
                                            <h4>Good Customer Service</h4>
                                            <p>Financo consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- Advertise Area Start -->
                        <div class="advertise-area bg-2 overlay-blue">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                                        <div class="advertise-text text-white text-center">
                                            <h2>We Provide Best Financial Support for your Business</h2>
                                            <!-- <p>We have over 25  years of experience in Finance and Banking; We can make your business more successful; Trust us because we care about you</p> -->
                                            <p>Get a Fast and Easy Loan within the shortest possible time to finance your urgent needs. Simply borrow the cash you need and leave your investment to grow.</p>
                                            <a href="loan-services/" class="default-button btn-white">Find Out How</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <!-- Advertise Area End -->';
            }elseif ($product == "Executive Management ") {
                echo '<div class="team-area fix pt-60 pb-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                    <div class="section-title text-center mb-95">
                                        <h2>Our Team</h2>
                                        <p>At Upper Manya Bank, we have a strong team that works effortlessly towards providing you with excellent banking service and finally reaching your financial freedom </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-team-member">
                                        <div class="member-image">
                                            <a href="#" class="block">
                                                <img src="assets/img/team/CEO.jpg"  alt="">
                                            </a>
                                        </div>
                                        <div class="member-text">
                                            <h3><a href="#">Daniel R. Agyemang</a></h3>
                                            <span>Chef Executive Officer</span>
                                            <p><strong>Date of Appointment:</strong> Jan, 2010<br>
                                            <strong>Qualification:</strong> B.Sc. Adm, MBA, H/R</p>
                                            
                                            <div class="link-effect">
                                                <ul>
                                                    <li>
                                                        <a href="tel:0246467211" class="block p-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="tel:0246467211" class="block s-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:nanadanrans@yahoo.com" class="block p-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="mailto:nanadanrans@yahoo.com" class="block s-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="block p-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#!" class="block s-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block p-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#" class="block s-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-team-member">
                                        <div class="member-image">
                                            <a href="#" class="block">
                                                <img src="assets/img/team/COO.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="member-text">
                                            <h3><a href="#">Andrew Akyampong</a></h3>
                                            <span>Chief Operating Officer</span>
                                            <p><strong>Date of Appointment:</strong> Oct, 2010<br>
                                            <strong>Qualification:</strong> B.Com, B.Ed.</p>
                                            <div class="link-effect">
                                                <ul>
                                                    <li>
                                                        <a href="tel:0247838853" class="block p-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="tel:0247838853" class="block s-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:andypong1@yahoo.com" class="block p-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="mailto:andypong1@yahoo.com" class="block s-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="block p-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#!" class="block s-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block p-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#" class="block s-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-team-member">
                                        <div class="member-image">
                                            <a href="#" class="block">
                                                <img src="assets/img/team/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="member-text">
                                            <h3><a href="#">Adjei Ameyaw</a></h3>
                                            <span>Financial Controller</span>
                                            <p><strong>Date of Appointment:</strong> Oct, 2007<br>
                                            <strong>Qualification:</strong> MBA Fin., CA Gh.</p>
                                            <div class="link-effect">
                                                <ul>
                                                    <li>
                                                        <a href="tel:0204702364" class="block p-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="tel:0204702364" class="block s-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:ameyaw74@gmail.com" class="block p-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="mailto:ameyaw74@gmail.com" class="block s-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="block p-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#!" class="block s-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block p-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#" class="block s-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-team-member">
                                        <div class="member-image">
                                            <a href="#" class="block">
                                                <img src="assets/img/team/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="member-text">
                                            <h3><a href="#">William Kofi Opoku</a></h3>
                                            <span>Head of Corporate Support Services</span>
                                            <p><strong>Date of Appointment:</strong> May, 2003<br>
                                            <strong>Highest Qualification:</strong> CA Gh. Inter</p>
                                            <div class="link-effect">
                                                <ul>
                                                    <li>
                                                        <a href="tel:0243237390" class="block p-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="tel:0243237390" class="block s-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:williepoku@gmail.com" class="block p-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="mailto:williepoku@gmail.com" class="block s-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="block p-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#!" class="block s-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block p-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#" class="block s-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-20">
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-team-member">
                                        <div class="member-image">
                                            <a href="#" class="block">
                                                <img src="assets/img/team/2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="member-text">
                                            <h3><a href="#">Agnes Appiah-Mensah</a></h3>
                                            <span>Head of Audit & Assurance</span>
                                            <p><strong>Date of Appointment:</strong> Jan,2005<br>
                                            <strong>Highest Qualification:</strong> B.Com, CA Gh. L3</p>
                                            <div class="link-effect">
                                                <ul>
                                                    <li>
                                                        <a href="tel:0244975567" class="block p-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="tel:0244975567" class="block s-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:aggiemens2004@yahoo.com" class="block p-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="mailto:aggiemens2004@yahoo.com" class="block s-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="block p-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#!" class="block s-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block p-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#" class="block s-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-team-member">
                                        <div class="member-image">
                                            <a href="#" class="block">
                                                <img src="assets/img/team/3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="member-text">
                                            <h3><a href="#">Daniel Kumi Dei</a></h3>
                                            <span>Head Of Credits</span>
                                            <p><strong>Date of Appointment:</strong> Mar, 2011<br>
                                            <strong>Highest Qualification:</strong> MBA, B/Finance</p>
                                            <div class="link-effect">
                                                <ul>
                                                    <li>
                                                        <a href="tel:0244593297" class="block p-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="tel:0244593297" class="block s-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:kumideidaniel75@gmail.com" class="block p-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="mailto:kumideidaniel75@gmail.com" class="block s-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="block p-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#!" class="block s-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block p-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#" class="block s-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-team-member">
                                        <div class="member-image">
                                            <a href="#" class="block">
                                                <img src="assets/img/team/4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="member-text">
                                            <h3><a href="#">George Ofosu</a></h3>
                                            <span>Head of Operations</span>
                                            <p><strong>Date of Appointment:</strong> Jun, 2006<br>
                                            <strong>Highest Qualification:</strong> ACIB Inter</p>
                                            <div class="link-effect">
                                                <ul>
                                                    <li>
                                                        <a href="tel:0275565688" class="block p-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="tel:0275565688" class="block s-img">
                                                            <i class="ion-ios-telephone-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="mailto:gofosu@yahoo.com" class="block p-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="mailto:gofosu@yahoo.com" class="block s-img">
                                                            <i class="ion-ios-email-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="block p-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#!" class="block s-img">
                                                            <i class="ion-social-facebook-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block p-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                        <a href="#" class="block s-img">
                                                            <i class="ion-social-twitter-outline" style="font-size:21px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Board Of Directors") {
                echo '<div class="fix pt-80 pb-150">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="wraps pt-20">
                                              <div class="task">
                                                <div class="abstract" style="height: 10.7em;">
                                                    <div class="col-md-6 col-xs-6 circle-img">
                                                        <img src="assets/img/team/chair.png" alt="Board Chairman">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 text-center">
                                                        <h3>Board Chairman</h3>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                  <div class="details__inner">
                                                        <p class="text-justify">Mr. James K. Otieku joined the Board of Directors of Upper Manya Kro Rural Bank Limited (UMKRB) in February 2003 in an Interim Management Committee capacity at the instance of Bank of Ghana and was confirmed in October 2004 when he became the Board Chairman. He holds an MBA and Bsc. Admin., Accounting Major degrees from the University of Ghana. He is seasoned Financial</p>
                                                        <p class="text-justify">Management and Tax Consultant and a Senior Lecturer at the University of Ghana Business School (UGBS) where he is the immediate past Head of the Department of Accounting. He serves on several other boards in Ghana, including World Vision-Ghana, Akro Senior High Technical School, Southern Ghana Bible College of Assemblies of God, Ghana and ARB Apex Bank where he is currently the Board Chairman.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="wraps pt-20" >
                                              <div class="task">
                                                <div class="abstract" style="height: 10.7em;">
                                                    <div class="col-md-6 col-xs-6 circle-img">
                                                        <img src="assets/img/team/vice1.png" alt="Vice Chairman">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 text-center">
                                                        <h3>Vice Chairman</h3>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                  <div class="details__inner">
                                                        <p class="text-justify">Mr. Simeon Tawiah joined the Board of Directors of Upper Manya Kro Rural Bank Limited (UMKRB) in February 2003. He holds a CA Gh and MBA in Finance from the University of Ghana. He is currently the Deputy Managing Director of uniSecurities Ghana Limited.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="wraps pt-20" >
                                              <div class="task">
                                                <div class="abstract" style="height: 10.7em;">
                                                    <div class="col-md-6 col-xs-6 circle-img">
                                                        <img src="assets/img/team/seke1.png" alt="Board Secretary">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 text-center">
                                                        <h3>Board Secretary</h3>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="details__inner">
                                                        <p class="text-justify">Mr. Benjamin Sackey joined the Board of Directors of Upper Manya Kro Rural Bank Limited (UMKRB) in February 2003. He holds LLB and Bachelor of Law from the University of Ghana. He is a Private Legal Practitioner and works with Akuffo Addo’s Chambers.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="wraps pt-20" >
                                              <div class="task">
                                                <div class="abstract" style="height: 10.7em;">
                                                    <div class="col-md-6 col-xs-6 circle-img">
                                                       <img src="assets/img/team/mavis1.png" alt="Board Member">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 text-center">
                                                        <h3>Board Member</h3>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="details__inner">
                                                        <p class="text-justify">Madam Mavis Margaret Teye joined the Board of Directors of Upper Manya Kro Rural Bank Limited (UMKRB) in November 2005. She holds B.Ed from University of Winneba, Cape Coast. She is currently a Senior Teacher at Asesewa Senior High in the Eastern Region.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="wraps pt-20" >
                                              <div class="task">
                                                <div class="abstract" style="height: 10.7em;">
                                                    <div class="col-md-6 col-xs-6 circle-img">
                                                        <img src="assets/img/team/batcha1.png" alt="Board Member">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 text-center">
                                                        <h3>Board Member</h3>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="details__inner">
                                                        <p class="text-justify ">Mr. Edmund Batcha joined the Board of Directors of Upper Manya Kro Rural Bank Limited (UMKRB) in March 2013. He holds MBA in Finance from the University of Ghana. He is currently the Head of Medium Scale Enterprise at Standchart Bank Limited, Accra.</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="wraps pt-20" >
                                              <div class="task">
                                                <div class="abstract" style="height: 10.7em;">
                                                    <div class="col-md-6 col-xs-6 circle-img">
                                                        <img src="assets/img/team/divine1.png" alt="Board Member">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 text-center">
                                                        <h3>Board Member</h3>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="details__inner">
                                                        <p class="text-justify">Rev. Divine Nartey joined the Board of Directors of Upper Manya Kro Rural Bank Limited (UMKRB) in October 2004. He holds MA, Guid. & Counseling and the Pastor at Assemblies of God Church, Asesewa Branch. He is currently also the President of Association of Rural Banks, Eastern Chapter</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="wraps pt-20" >
                                              <div class="task">
                                                <div class="abstract" style="height: 10.7em;">
                                                    <div class="col-md-6 col-xs-6 circle-img">
                                                        <img src="assets/img/team/kwapong1.png" alt="Board Member">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 text-center">
                                                        <h3>Board Member</h3>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="details__inner">
                                                        <p class="text-justify">Mr. Patrick Kwapong joined the Board of Directors of Upper Manya Kro Rural Bank Limited (UMKRB) in February 2003. He holds a CA Gh and MBA in Finance from the University of Ghana. He is a seasoned Banker and also the Deputy  Managing Director of  National Investment Bank, Ghana (NIB).</p>     
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            }elseif ($product == "Corporate Social Responsibility") {
                echo 'csr';
            }else{
                echo 'list';
            }

        ?>

        <!-- Start of Footer area -->
        <?php include('public/smfoot.php'); ?>
        <!-- End of Footer area -->
        
        <!-- All js here -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/counterup.js"></script>      
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/jquery.arctext.js"></script>
        <!-- <script src="assets/js/canvas-active.js"></script>   -->
        <script src="assets/js/main.js"></script>

        <script type="text/javascript">
            // $('#bod1').arctext({radius: 100, dir: -1});
            // $('#bod2').arctext({radius: 100, dir: -1});
            // $('#bod3').arctext({radius: 100, dir: -1});
            // $('#bod4').arctext({radius: 100, dir: -1});
            // $('#bod5').arctext({radius: 100, dir: -1});
            // $('#bod6').arctext({radius: 100, dir: -1});
            // $('#bod7').arctext({radius: 100, dir: -1});
        </script>
    </body>
</html>