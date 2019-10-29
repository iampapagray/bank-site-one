<!doctype html>
<base href="http://localhost/uppermanya/" />
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Upper Manya Kro Rural Bank || Financial Reports</title>
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
        <link rel="stylesheet" href="assets/css/tbd.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="assets/css/cal.min.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Header Area Start -->
        <?php include('public/header.php'); ?>
        <!-- Header Area End -->
        <!-- Breadcrumb Area Start-->
        <div class="breadcrumb-area bg-overlay-dark bg-7">  
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text text-left">
                            <h2 class="animated" style="animation: 1500ms ease-in-out 0s normal none 1 running bounceInLeft;">Financial Reports</h2>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb animated" style="animation: 2000ms ease-in-out 0s normal none 1 running bounceInLeft;">
                                    <li><a href="">HOME</a></li>
                                    <!-- <li><a href="our-agencies/">OUR AGENCIES</a></li> -->
                                    <li>Financial Reports</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

        <div class="blog-section pt-120 pb-115 sidebar right-side">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <table class="rwd-table">
                                <tr>
                                    <th>File Name</th>
                                    <th>Size</th>
                                    <th>Download</th>
                                </tr>
                                <tr>
                                    <td data-th="File Name">Annual Report 2010</td>
                                    <td data-th="Size">157kb</td>
                                    <td data-th="Download">
                                        <?php
                                            echo '<a href="download.php?file='.urlencode('try.pdf').'" style="color:#006cb5; padding-left:1.5em;"><i class="fa fa-download"></i></a>';
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-th="File Name">Annual Report 2011</td>
                                    <td data-th="Size">120kb</td>
                                    <td data-th="Download">
                                        <?php
                                            echo '<a href="download.php?file='.urlencode('try.pdf').'" style="color:#006cb5; padding-left:1.5em;"><i class="fa fa-download"></i></a>';
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-th="File Name">Annual Report 2012</td>
                                    <td data-th="Size">201kb</td>
                                    <td data-th="Download">
                                        <?php
                                            echo '<a href="download.php?file='.urlencode('try.pdf').'" style="color:#006cb5; padding-left:1.5em;"><i class="fa fa-download"></i></a>';
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-4 fix">
                        <div id="my-calendar" class="pb-20"></div>
                        
                        <div class="single-sidebar-widget fix">
                            <div class="sidebar-contact-info">
                                <h4>Need Any Help?</h4>
                                <p>Financo consectetur adipiscing elitsed do eiud tempor incididnt in the nto</p>
                                <a href="contact.html" class="default-button">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     

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
        <script src="assets/js/main.js"></script>
        <script src="assets/js/cal.min.js"></script>
        <script type="application/javascript">
            $(document).ready(function () {
                $("#my-calendar").zabuto_calendar({
                    show_previous: false,
                    show_next: false,
                    today:true
                });
            });
        </script>

    </body>
</html>