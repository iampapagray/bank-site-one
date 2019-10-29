<?php 

    if(isset($_GET['tag'])){
        $prod = $_GET['tag'];
        $pieces = explode('-',$prod);
        $product = ucfirst($pieces[0]).' '.ucfirst($pieces[1]) ;
    }else{
        $product = "Our Agencies";
    }

?>
<!doctype html>
<html class="no-js" lang="en">
    <base href="http://localhost/uppermanya/" />
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
		<div class="breadcrumb-area bg-overlay-dark bg-5">	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-left">
                            <?php
                                if($product == "Our Agencies"){
                                    echo '<h2 class="animated" style="animation: 1500ms ease-in-out 0s normal none 1 running bounceInLeft;">'.$product.'</h2>';
                                }else{
                                    echo '<h2 class="animated" style="animation: 1500ms ease-in-out 0s normal none 1 running bounceInLeft;">'.$product.' BRANCH</h2>';
                                }
                            ?>
							<div class="breadcrumb-bar">
								<ul class="breadcrumb animated" style="animation: 2000ms ease-in-out 0s normal none 1 running bounceInLeft;">
                                    <li><a href="">HOME</a></li>
									<li><a href="our-agencies/">OUR AGENCIES</a></li>
                                    <?php
                                        if($product != "Our Agencies"){
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

        <!-- Projects Area Start -->
        <?php
            $work = ['Mon','Tue','Wed','Thur','Fri'];
            $day = date('D');
            $time = gmdate("H");
            $time1 = gmdate("H:i");
            if($time > 8 && $time < 16 && in_array($day, $work)){
                $status = "Open";
            }else{
                $status = "Closed";
            }
            

            if($product == "Asesewa "){
                echo '<div class="project-details-area pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-details-item">
                                        <div class="project-details-left">
                                            <img src="assets/img/project/asesewa.jpg" height="486px" width="791px" alt="">
                                        </div>  
                                        <div class="project-details-right">
                                            <div class="project-right-text">
                                                <h2>Branch Information</h2>
                                                <span class="block"><span>Manager : </span>Mr. Bruce Lee</span>
                                                <span class="block"><span>Location : </span>P.O. Box 3, Asesewa</span>
                                                <span class="block"><span>Date : </span>10th January, 2017</span>
                                                <span class="block"><span>Contact : </span>0342-093180</span>
                                                <span class="block"><span>Status : </span>'.$status.'</span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-details-content">
                                        <h2>Branch Information</h2>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat. Duis aute irure dolor in reprehenderit  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Koforidua "){
                echo '<div class="project-details-area pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-details-item">
                                        <div class="project-details-left">
                                            <img src="assets/img/blog/l-1.jpg" height="486px" width="791px" alt="">
                                        </div>  
                                        <div class="project-details-right">
                                            <div class="project-right-text">
                                                <h2>Branch Information</h2>
                                                <span class="block"><span>Manager : </span>Mr. Bruce Lee</span>
                                                <span class="block"><span>Location : </span>P.O Box KF2103, Koforidua</span>
                                                <span class="block"><span>Date : </span>10th January, 2017</span>
                                                <span class="block"><span>Contact : </span>0342-022805</span>
                                                <span class="block"><span>Status : </span>'.$status.'</span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-details-content">
                                        <h2>Branch Information</h2>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat. Duis aute irure dolor in reprehenderit  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Somanya "){
                echo '<div class="project-details-area pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-details-item">
                                        <div class="project-details-left">
                                            <img src="assets/img/project/somanya.jpg" height="486px" width="791px" alt="">
                                        </div>  
                                        <div class="project-details-right">
                                            <div class="project-right-text">
                                                <h2>Branch Information</h2>
                                                <span class="block"><span>Manager : </span>Mr. Bruce Lee</span>
                                                <span class="block"><span>Location : </span> P.O Box SA 494, Somanya</span>
                                                <span class="block"><span>Date : </span>10th January, 2017</span>
                                                <span class="block"><span>Contact : </span>0303-910149</span>
                                                <span class="block"><span>Status : </span>'.$status.'</span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-details-content">
                                        <h2>Branch Information</h2>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat. Duis aute irure dolor in reprehenderit  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Asokore ") {
                echo '<div class="project-details-area pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-details-item">
                                        <div class="project-details-left">
                                            <img src="assets/img/project/asokore.jpg" height="486px" width="791px" alt="">
                                        </div>  
                                        <div class="project-details-right">
                                            <div class="project-right-text">
                                                <h2>Branch Information</h2>
                                                <span class="block"><span>Manager : </span>Mr. Bruce Lee</span>
                                                <span class="block"><span>Location : </span> P.O Box KF2103, Koforidua</span>
                                                <span class="block"><span>Inauguration Date : </span>19th November, 2017</span>
                                                <span class="block"><span>Contact : </span>0342-026034/5</span>
                                                <span class="block"><span>Status : </span>'.$status.'</span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-details-content">
                                        <h2>Branch Information</h2>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat. Duis aute irure dolor in reprehenderit  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Suhum ") {
                echo '<div class="project-details-area pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-details-item">
                                        <div class="project-details-left">
                                            <img src="assets/img/project/suhum.jpg" height="486px" width="791px" alt="">
                                        </div>  
                                        <div class="project-details-right">
                                            <div class="project-right-text">
                                                <h2>Branch Information</h2>
                                                <span class="block"><span>Manager : </span>Mr. Bruce Lee</span>
                                                <span class="block"><span>Location : </span> P.O Box SU 370, Suhum</span>
                                                <span class="block"><span>Inauguration Date : </span>-- November, 2017</span>
                                                <span class="block"><span>Contact : </span>0544-325220</span>
                                                <span class="block"><span>Status : </span>'.$status.'</span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-details-content">
                                        <h2>Branch Information</h2>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat. Duis aute irure dolor in reprehenderit  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Klo Agogo") {
                echo '<div class="project-details-area pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-details-item">
                                        <div class="project-details-left">
                                            <img src="assets/img/project/agogo1.jpg" height="486px" width="791px" alt="">
                                        </div>  
                                        <div class="project-details-right">
                                            <div class="project-right-text">
                                                <h2>Branch Information</h2>
                                                <span class="block"><span>Manager : </span>Mr. Bruce Lee</span>
                                                <span class="block"><span>Location : </span>P.O Box KF2103, Koforidua</span>
                                                <span class="block"><span>Inauguration Date : </span>-- November, 2017</span>
                                                <span class="block"><span>Contact : </span>0544-325223</span>
                                                <span class="block"><span>Status : </span>'.$status.'</span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-details-content">
                                        <h2>Branch Information</h2>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat. Duis aute irure dolor in reprehenderit  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>Financo amet, consectetur adipiscing elit, sed do eiusmod tempornt ut labore et dolore magna aliqua. Ut enim ad minim iam, quis norud exercitation ullamco laboris isi ut aliquip exea commo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }elseif ($product == "Asamankese ") {
                echo '<div class="project-details-area pt-120">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="project-details-item">
                                        <div class="project-details-left">
                                            <img src="assets/img/project/asamankese1.jpg" height="486px" width="791px" alt="">
                                        </div>  
                                        <div class="project-details-right">
                                            <div class="project-right-text">
                                                <h2>Branch Information</h2>
                                                <span class="block"><span>Manager : </span>Mr. Bruce Lee</span>
                                                <span class="block"><span>Location : </span>P.O Box KF2103, Koforidua</span>
                                                <span class="block"><span>Inauguration Date : </span>-- November, 2017</span>
                                                <span class="block"><span>Contact : </span>0544-325223</span>
                                                <span class="block"><span>Status : </span>'.$status.'</span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="project-details-content">
                                        <h2>Branch Information</h2>
                                        <p>The Upper Manya Kro Rural Bank has opened its  7th Agency at Asamankese, a suburb in the Lower West Akim Municipality of the Eastern Region aimed at providing “first class services” to Small and Medium Enterprises (SMEs). The unveiling of the bank which coincided with the inauguration of an ultra-modern building brings to bear the first of its branches in the western part of the region, Delivering his welcome address on the occasion of the formal opening of the Agency, the Chairman of the Board of the Directors, Mr James Kwame Otieku said the decision by the board to put up a building was to add quality service at the doorsteps of the banking consumers. According to him, they were determined to break all barriers and make the bank a preferred choice for the people, emphasizing the fact that, “We have challenges but we are strong on our feet.” The Board Chairman further reiterated that, although the agency is stronger in the eastern part of the region, they have resolved to conquer the western part of the region, hence the opening of the Asamankese branch. Mr. Otieku, was optimistic, Upper Manya Rural Bank would live up to competition.  Adding that, “We are not scared of any competition. We delivered what our customers need. We are strong in micro finance industry and we help our women and I can assure you that, by the time we celebrate our one year anniversary here, the people will cherish us,” he assured.</p>
                                        <p>Managing risk <br>
                                        The President of the Association of Rural Banks, Earsten Chapter said, banking involves mobilizing deposits with reward and granting such funds with interest to support economic activities to a large extent and other needs and also facilitating the payment system.

                                        “The major players in the banking system are depositors and borrowers and it makes it imperative to skillfully promote and manage them in order to minimize any associated risk.

                                        “There exist risks of depositors losing their deposits occasioned by misapplication of funds, asset-liability mismatches, acquisition of huge fixed assets with deposited funds, weak internal control that gives way to inordinate waste and unimaginable fraud, granting of loans recklessly that makes it difficult for the bank to retrieve fully as well as non-compliance with regulatory norms and statutory stipulations.

                                        The association he said, “would continue to collaborate with stakeholders in fashioning out policies and designing programmes aimed at propelling the rural banking industry to attain an accelerated growth and development.”<br><br>

                                        Consistency<br>

                                        In a speech read by Mr. Maxwell Donkor, Head, Banking Operations Department on behalf of Mr. Alex Awuah, the Acting Managing Director of the ARB Apex Bank Limited, commended the management of Upper Manya Rural Bank for achieving consistency in its operations. He said, “Your bank showed consistency by performing satisfactorily in the second quarter of the 2016 and the third quarter of 2016 according to the quarterly report of the Efficiency Monitoring Unit of the Apex Bank.

                                        “We strongly believe that you will strive to increase your deposit base, grant quality loans, offer quality customer service and support socially responsible programmes in the community and also enjoying patronage from the people in the catchment area.”

                                        He said the banking landscape is changing with respect to regulation, technology, competition, governance and customers expectations and upper Manya Kro Rural Bank is expected to promptly respond to these changes through new and improved services and product innovations.<br><br>

                                        Salary over draft<br>

                                        Mr. Andrews Akyampong the Chief Operating Officer of the bank said, the bank has juicy packages for customers including ‘Salary-over-Draft’ for its customers.

                                        According to him, they have arrived to serve the customers and that they have recruited quality staff who will offer nothing but excellent service to its clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>';
            }

        ?>
        
        <!-- Projects Area End --> 
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