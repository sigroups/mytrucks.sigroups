<?php
session_start();

// This page can be accessed only after login
// Redirect user to login page, if user email is not available in session
if (!isset($_SESSION["email"])) {
    header("location: login.php");
}
?>

<html>

<body>

    <div style="text-align:right">
        <a href="logout.php">Logout</a>
    </div>

    This is a sample content on page-1. This page content is only available for login users.
    <br>
    <a href="page-2.php">Go to page-2</a>

</body>

</html>

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
    <!--=== Animate CSS ===-->
    <link href="css/mytruckplu/animate.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="css/mytruckplu/vegas.min.css" rel="stylesheet">
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
                        <a href="index3.html" class="logo">
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
                                <li><a href="404.html">Log out</a></li>
                                                                
                               
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

    <!--== Slider Area Start ==-->
    <section id="home-slider-area">
        <div class="home-slider-item slider-bg-1 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>BOOK A CAR TODAY!</h1>
                            <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-2 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>SAVE YOUR MONEY</h1>
                            <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-3 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>ENJOY YOUR JOURNEY</h1>
                            <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Slider Area End ==-->

    <!--== Book A Car Area Start ==-->
    <div id="book-a-car">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booka-car-content">
                        <form action="index.html">
                            <div class="pick-location bookinput-item">
                                <select class="custom-select">
                                  <option selected>Pick Location</option>
                                  <option value="1">Dhaka</option>
                                  <option value="2">Comilla</option>
                                  <option value="3">Barishal</option>
                                  <option value="3">Rangpur</option>
                                </select>
                            </div>

                            <div class="pick-date bookinput-item">
                                <input id="startDate2" placeholder="Pick Date" />
                            </div>

                            <div class="retern-date bookinput-item">
                                <input id="endDate2" placeholder="Return Date" />
                            </div>

                            <div class="car-choose bookinput-item">
                                <select class="custom-select">
                                  <option selected>Choose Car</option>
                                  <option value="1">BMW</option>
                                  <option value="2">Audi</option>
                                  <option value="3">Lexus</option>
                                </select>
                            </div>

                            <div class="bookcar-btn bookinput-item">
                                <button type="submit">Book Car</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Book A Car Area End ==-->

    <!--== What We Do Area Start ==-->
    <section id="what-do-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>WHAT WE DO</h2>
                        <span class="title-line"><i class="fa fa-truck"></i></span>
                        <p>On Line Trucks  Booking.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-1">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->

                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-2">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->

                <!-- Single We Do Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-we-do we-do-bg-3">
                        <div class="we-do-content">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3>CAR INSPECTION</h3>
                                    <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single We Do End -->
            </div>
        </div>
    </section>
    <!--== What We Do Area End ==-->


    

  
    <!--== Our Cars Area Start ==-->
    <section id="our-cars" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our cars</h2>
                        <span class="title-line"><i class="fa fa-truck"></i></span>
                        <p>On Line Trucks  Booking.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content">
                        <div class="row">
                            <!-- OurCars Tab Menu start -->
                            <div class="col-lg-3">
                                <div class="ourcar-tab-menu">
                                    <ul class="nav nav-tabs" id="ourcartabmenu" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ourcar_item_1" data-toggle="tab" href="#ourcar_1" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_2" data-toggle="tab" href="#ourcar_2" role="tab" aria-selected="true">Audi A1 S-LINE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_3" data-toggle="tab" href="#ourcar_3" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_4" data-toggle="tab" href="#ourcar_4" role="tab" aria-selected="true">Audi A1 S-LINE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_5" data-toggle="tab" href="#ourcar_5" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- OurCars Tab Menu End -->

                            <!-- OurCars Tab Content start -->
                            <div class="col-lg-9">
                                <div class="tab-content" id="ourcartabcontent">
                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade show active" id="ourcar_1" role="tabpanel" aria-labelledby="ourcar_item_1">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_2" role="tabpanel" aria-labelledby="ourcar_item_2">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_3" role="tabpanel" aria-labelledby="ourcar_item_3">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_4" role="tabpanel" aria-labelledby="ourcar_item_4">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_5" role="tabpanel" aria-labelledby="ourcar_item_5">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->
                                </div>
                            </div>
                            <!-- OurCars Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Our Cars Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Only quality for clients</h2>
                        <span class="title-line"><i class="fa fa-truck"></i></span>
                        <p>On Line Trucks  Booking.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>BUSINESS</h3>
                        <h2>$ 55.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>WEDDINGS CELEBRATIONS</li>
                            <li>FULL INSURANCE INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL INCLUSIVE MINI BAR</li>
                            <li>CHAUFFER INCLUDED IN PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>Trial</h3>
                        <h2>Free</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>OTHER CELEBRATIONS</li>
                            <li>FULL INSURANCE</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>MINI BAR</li>
                            <li>INCLUDED IN PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>$ 35.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table --> <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>$ 35.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->
				 <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>$ 35.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->
				 <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>$ 35.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->
            </div>
            <!-- Pricing Table Conatent End -->
        </div>
    </section>
    <!--== Pricing Area End ==-->

    <!--== Why Coose Us Start ==-->
    <section id="why-choose-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Why Coose Us</h2>
                        <span class="title-line"><i class="fa fa-truck"></i></span>
                        <p>On line Truck Booking elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <!-- Why Choose Tab Menu -->
                        <div class="col-lg-4">
                            <ul class="nav nav-tabs" id="choosetabmenu" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="car-ins" data-toggle="tab" href="#car-insp" role="tab" aria-selected="true">CAR INSPECTION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="car-repair" data-toggle="tab" href="#car-repairw" role="tab" aria-selected="false">CAR REPAIR WORKS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="car-glass" data-toggle="tab" href="#car-glassing" role="tab" aria-selected="false">CAR GLASSING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-selected="false">DELIVERY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="vehiclemodels-tab" data-toggle="tab" href="#vehiclemodels" role="tab" aria-selected="false">Vehicle Models</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ourrental-tab" data-toggle="tab" href="#ourrental" role="tab" aria-selected="false">Our Rental</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Why Choose Tab Menu -->

                        <!-- Why Choose Tab Content -->
                        <div class="col-lg-8">
                            <div class="tab-content" id="choosetabcontent">
                                <div class="tab-pane fade show active" id="car-insp" role="tabpanel" aria-labelledby="car-ins">
                                    <div class="wchoose-content">
                                        <h4>CAR INSPECTION</h4>
                                        <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataesal vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Quia, odio, ipsam deleniti delectus assumenda cum.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Deleniti eius fuga perferendis, dolorum atquesequi soluta.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>On line Truck Booking</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Beataesal vitae dicta sunt explicabo. Nemo enim ipsam </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="car-repairw" role="tabpanel" aria-labelledby="car-repair">
                                    <div class="wchoose-content">
                                        <h4>CAR REPAIR WORKS</h4>
                                        <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataesal vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Quia, odio, ipsam deleniti delectus assumenda cum.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Deleniti eius fuga perferendis, dolorum atquesequi soluta.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>On line Truck Booking</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Beataesal vitae dicta sunt explicabo. Nemo enim ipsam </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="car-glassing" role="tabpanel" aria-labelledby="car-glass">
                                    <div class="wchoose-content">
                                        <h4>CAR GLASSING</h4>
                                        <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataesal vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Quia, odio, ipsam deleniti delectus assumenda cum.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Deleniti eius fuga perferendis, dolorum atquesequi soluta.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>On line Truck Booking</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Beataesal vitae dicta sunt explicabo. Nemo enim ipsam </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                                    <div class="wchoose-content">
                                        <h4>DELIVERY</h4>
                                        <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataesal vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Quia, odio, ipsam deleniti delectus assumenda cum.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Deleniti eius fuga perferendis, dolorum atquesequi soluta.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>On line Truck Booking</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Beataesal vitae dicta sunt explicabo. Nemo enim ipsam </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="vehiclemodels" role="tabpanel" aria-labelledby="vehiclemodels-tab">
                                    <div class="wchoose-content">
                                        <h4>Vehicle Models</h4>
                                        <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataesal vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Quia, odio, ipsam deleniti delectus assumenda cum.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Deleniti eius fuga perferendis, dolorum atquesequi soluta.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>On line Truck Booking</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Beataesal vitae dicta sunt explicabo. Nemo enim ipsam </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="ourrental" role="tabpanel" aria-labelledby="ourrental-tab">
                                    <div class="wchoose-content">
                                        <h4>Our Rental</h4>
                                        <p>Erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beataesal vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Quia, odio, ipsam deleniti delectus assumenda cum.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Deleniti eius fuga perferendis, dolorum atquesequi soluta.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>On line Truck Booking</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Beataesal vitae dicta sunt explicabo. Nemo enim ipsam </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Why Coose Us End ==-->

    <!--== Mobile App Area Start ==-->
    <div id="mobileapp-video-bg"></div>
    <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2>SAVE 30% WITH THE APP</h2>
                        <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                        <div class="app-btns">
                            <a href="#"><i class="fa fa-android"></i> Android Store</a>
                            <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Mobile App Area End ==-->

    <!--== Articles Area Start ==-->
    <section id="tips-article-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Tips and articles</h2>
                        <span class="title-line"><i class="fa fa-truck"></i></span>
                        <p>On Line Trucks  Booking.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Articles Content Wrap Start -->
            <div class="row">
                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">Wliquam sit amet urna eullam</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">25 <span class="month">jan</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">fringilla oremedad ipsum dolor sit</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">14<span class="month">feb</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-3.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="article-details.html">Tempored incididunt ut labore</a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date">17 <span class="month">feb</span></div>

                                            <p>Wlam aiber vestibulum fringilla oremedad ipsum dolor sit amet consectetur adipisicing elit sed doned eiusmod tempored incididunt ut labore et dolore magna aliquaa enimd ad minim veniad.</p>

                                            <a href="article-details.html" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->
            </div>
            <!-- Articles Content Wrap End -->
        </div>
    </section>
    <!--== Articles Area End ==-->

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