<?php

/**
 * Name: Simple PHP Login & Registration Script
 * Tutorial: https://tutorialsclass.com/code/simple-php-login-registration-script
 */

// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

// If form submitted, collect email and password from form
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'email', 'password' from users
        where email='$email' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: page-1.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>
<!--===<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>

    <a href="register.php">Register</a>

</body>

</html>===-->





<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>On line Truck Booking By si groups</title>

    <!--=== Bootstrap CSS ===-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="css/mytruckplu/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="css/mytruckplu/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="css/mytruckplu/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="css/mytruckplu/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> AGRA
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +918604219188
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-whatsapp"></i> +91-8604219188
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            
                            
                            <a href="#"><i class="fa fa-facebook"></i>www.facebook.com/sigroups</a>
                            <a hr
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                   <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                   
								   <li><a href="about.html">About</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="#">Cars</a>
                                    <ul>
                                        
                                        <li><a href="truck details-2.html">truck Details</a></li>
                                        <li><a href="truck-without-sidebar.html">Truck Without Sidebar</a></li>
                                        <li><a href="truck-details.html">truck Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        
                                        <li><a href="team.html">Our Team</a></li> 
										<li><a href="pakages.html">Tarif Details</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="help-desk.html">Help Desk</a></li>
										<li><a href="policy.html">policy</a></li>
										<li><a href="app.html">mobile App</a></li>
										
                                        <li><a href="contact_us.html">Contact Us</a></li>

                                       
                                    </ul>
                                </li>
                              <li><a href="contact_us.html">Contact Us</a></li>   <li><a href="index.php">Account</a>
                                    
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
                        <span class="title-line"><i class="fa fa-truck"></i></span>
                        <p>On Line Trucks  Booking.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Welcome Back!</h3>
							
														
								<form action="login.php" method="post" name="form1">
									<table width="25%">
										<tr>
											<td>Email</td>
											<td><input type="text" name="email"></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input type="password" name="password"></td>
										</tr>
										<tr>
											<td></td>
											<td><input type="submit" name="login" value="Login"></td>
										</tr>
									</table>
								</form>
							
																				
						
							
							 <!--==<form action="index.html">
								<div class="username">
									<input type="text" placeholder="Email or Username or mobile no">
								</div>
								<div class="password">
									<input type="password" placeholder="Password">
								</div>
								<div class="log-btn">
									<button type="submit"><i class="fa fa-sign-in"></i> Log In</button>
								</div>
							</form>==-->
                		</div>
                		
                		<div class="login-other">
                			<span class="or">or</span>
                			<a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Login With Facebook</a>
                			<a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Login With Google</a>
                		</div>
                		<div class="create-ac">
                			<p>Don't have an account? <a href="register.html">Sign Up</a></p>
                		</div>
                		<div class="login-menu">
                			<a href="about.html">About</a>
                			<span>|</span>
                			<a href="contact_us.html">Contact Us</a>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <p>Car by sigroups  is one of the best and cheapest car rental provider company in Agra, Mathura, Aligarh NCR ,Kanpur,Jaipur. We have 4 year great experience in Car rental in Agra, Mathura, Aligarh NCR ,Jaipur..</p>

                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Our Other Site</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                           Hello Agra
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          On line Truck Booking
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           Hello Agra
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            On line Truck Booking
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>Car by sigroups  is one of the best and cheapest car rental provider company in Agra, Mathura, Aligarh NCR ,Kanpur,Jaipur. We have 4 year great experience in Car rental in Agra, Mathura, Aligarh NCR ,Jaipur.</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Agra</li>
                                    <li><i class="fa fa-mobile"></i> +91-8604219188</li>
                                    <li><i class="fa fa-envelope"></i> info@sigroups.in</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to sigroups.in can't be removed. Template is licensed sigroups terms and condition -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  sigroups.in</a>
<!-- Link back to sigroups.in can't be removed. Template is licensed sigroups terms and condition --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="js/mytruckplu/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="js/mytruckplu/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="js/mytruckplu/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="js/mytruckplu/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="js/mytruckplu/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="js/mytruckplu/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="js/mytruckplu/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="js/mytruckplu/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="js/mytruckplu/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="js/main.js"></script>

</body>

</html>