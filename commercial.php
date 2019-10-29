<?php 

    if(isset($_GET['tag'])){
        $prod = $_GET['tag'];
        $pieces = explode('-',$prod);
        $product = ucfirst($pieces[0]).' '.ucfirst($pieces[1]);
    }else{
        $product = "Commercial Banking";
    }

?>
<base href="http://localhost/uppermanya/" />
<!doctype html>
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
        <link rel="stylesheet" href="assets/css/shortcode/shortcodes.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
		<!-- Header Area Start -->
		<?php include('public/header.php'); ?>
		<!-- Header Area End -->
		<!-- Breadcrumb Area Start-->
        <?php
            if($product == 'Savings Account'){
                echo '<div class="breadcrumb-area bg-overlay-dark bg-13">';
            }elseif ($product == "Current Account") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-14">';
            }elseif ($product == "Fixed Deposit") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-15">';
            }elseif ($product == "Microfinance CSWE") {
                echo '<div class="breadcrumb-area bg-overlay-dark bg-18">';
            }else{
                echo '<div class="breadcrumb-area bg-overlay-dark bg-19">';
            }
        ?> 
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-left">
                            <?php
                                if($product == "Commercial Banking"){
                                    echo '<h2 class="animated" style="animation: 1500ms ease-in-out 0s normal none 1 running bounceInLeft;">'.$product.'</h2>';
                                }else{
                                    echo '<h2 class="animated" style="animation: 1500ms ease-in-out 0s normal none 1 running bounceInLeft;">'.$product.'</h2>';
                                }
                            ?>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb animated" style="animation: 2000ms ease-in-out 0s normal none 1 running bounceInLeft;">
                                    <li><a href="">HOME</a></li>
                                    <li>Commercial Banking</li>
                                    <?php
                                        if($product != "Commercial Banking"){
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

        <div class="blog-section pt-120 pb-115 sidebar right-side">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            <!-- display content based on tag -->
                            <?php
                                if($product == 'Savings Account'){
                                    echo 'savings description';
                                }elseif ($product == "Current Account") {
                                    echo 'current account description';
                                }elseif ($product == "Fixed Deposit") {
                                    echo 'fixed deposit description';
                                }elseif ($product == "Microfinance CSWE") {
                                    echo 'Microfinance CSWE description';
                                }else{
                                    echo 'list';
                                }
                            ?>  
                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-4 fix">
                        <div class="single-sidebar-widget fix">
                            <div class="sidebar-widget-title">
                                <h5>Discover More</h5>
                            </div>  
                            <ul class="categories">
                                <li><a href="commercial-banking/savings-account/">Savings Account</a></li>
                                <li><a href="commercial-banking/current-account/">Current Account</a></li>
                                <li><a href="commercial-banking/fixed-deposit-account/">Fixed Deposit Account</a></li>
                                <li><a href="commercial-banking/microfinance-cswe/">CSWE (Microfinance)</a></li>
                                <li><a href="personal-banking/">Personal Banking</a></li>
                                <li><a href="loan-services/">Loan Services</a></li>
                                <li><a href="mobile-ebanking/">Mobile & E-banking</a></li>
                            </ul>
                        </div>
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
        <script src="assets/js/canvasjs.min.js"></script>	
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>