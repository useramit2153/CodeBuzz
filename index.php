<!doctype php>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CodeBuzz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- swiper.min.css -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="assets/css/metisMenu.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- header-area start -->
    <header class="header-area header-area2">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                        <ul class="contact-info d-flex">
                            <li>
                                <span><i class="fa fa-phone"></i> +02 0120 2651 021</span>
                                <span><i class="fa fa-fax"></i> +00 425 356 4518</span>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope"></i> info@youremail.com</span>
                                <span><i class="fa fa-paper-plane-o"></i> www.yourwebsite.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-sm-4 col-12 d-none d-md-block">
                        <ul class="social-icon d-flex justify-content-end">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-7">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-9 d-none d-lg-block">
                        <ul class="mainmenu d-flex justify-content-end">
                            <li class="active"><a href="javascript:void(0);">Home</a>
                            </li>
                            <li><a href="about.php">about us</a></li>
                            <li><a href="practice.php">practice</a></li>
                            <li><a href="placement.php">placement</a>
                            </li>
                            <li><a href="blog.php">blog</a></li>
                            <li><a href="contact.php">contact</a></li>
                        </ul>
                    </div>
                    <div class="d-block d-lg-none col-4 pull-right col-sm-2">
                        <ul class="menu">
                            <li class="first"></li>
                            <li class="second"></li>
                            <li class="third"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
            <div class="responsive-menu-area d-block d-sm-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="metismenu">
                                <li class="sidemenu-items"><a href="javascript:void(0)">Home</a></li>
                                <li class="sidemenu-items"><a href="about.php">about us</a></li>
                                <li class="sidemenu-items"><a href="practice.php">practice</a></li>
                                <li class="sidemenu-items"><a href="placement.php">placement</a></li>
                                <li class="sidemenu-items"><a href="blog.php">blog</a></li>
                                <li class="sidemenu-items"><a href="contact.php">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive-menu area start -->
        </div>
        
    </header>
    <!-- header-area end -->

    <!-- slider-area start -->
    <div class="slider-area slider-area2">
        <div class="slider-active owl-carousel">
            <div class="slider-items">
                <img src="assets/images/slider/1.jpg" alt="" class="slider">
                <div class="slider-content flex-style text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2><span>We Are </span> Everyone’s Coinbuzz Agency</h2>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form randomised words which don't look even slightly believable.</p>
                                <ul>
                                    <?php
                                        session_start();
                                        if($_SESSION['id'] == 1){
                                    ?>
                                            <li><a href="login.php">LOGOUT</a></li>
                                    <?php
                                        }
                                        else{
                                    ?>
                                            <li><a href="login.php">LOGIN</a></li>
                                    <?php
                                        }
                                    ?>
                                    <li><a href="registration.php">REGISTER</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-items">
                <img src="assets/images/slider/1.jpg" alt="" class="slider">
                <div class="slider-content flex-style">
                    <div class="container">
                        <div class="row">
                            <div class="text-center col-12">
                                <h2><span>We Are </span> Everyone’s Coinbuzz Agency</h2>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form randomised words which don't look even slightly believable.</p>
                                <ul>
                                    <li><a href="#">LOGIN</a></li>
                                    <li><a href="#">REGISTER</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area end -->

    <!-- featured-area start -->
    <div class="featured-area featured-area2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-wrapper">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="featured-wrap">
                                    <div class="featured-img">
                                        <img src="assets/images/featured/1.jpg" alt="">
                                    </div>
                                    <h2><a href="#">Practice</a></h2>
                                    <p>There are many variations of passages of Lorem the Ipsum available, but the majority have suffered that alteration in some form.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="featured-wrap">
                                    <div class="featured-img">
                                        <img src="assets/images/featured/2.jpg" alt="">
                                    </div>
                                    <h2><a href="#">Placement</a></h2>
                                    <p>There are many variations of passages of Lorem the Ipsum available, but the majority have suffered that alteration in some form.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="featured-wrap mb-0">
                                    <div class="featured-img">
                                        <img src="assets/images/featured/3.jpg" alt="">
                                    </div>
                                    <h2><a href="#">Blog</a></h2>
                                    <p>There are many variations of passages of Lorem the Ipsum available, but the majority have suffered that alteration in some form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- featured-area end -->

    <!-- about-area end -->

    <!-- about-area start -->
    <div class="about-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <br/>
                        <h2>About Bitcoin</h2>
                        <img src="assets/images/line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="about-img">
                        <img src="assets/images/about/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-content">
                        <h3>Minimum purchase is 50 Coins tokens. Get a bonus from 5% to 25% on every token purchase</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="about-items">
                                <img src="assets/images/about/icon/1.png" alt="">
                                <span class="counter">1454</span>
                                <p>Support Countrie</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="about-items">
                                <img src="assets/images/about/icon/2.png" alt="">
                                <span class="counter">759</span>
                                <p>Bank Support</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="about-items mb-0">
                                <img src="assets/images/about/icon/3.png" alt="">
                                <span class="counter">1250</span>
                                <p>BitCoin ATMs</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="about-items mb-0">
                                <img src="assets/images/about/icon/4.png" alt="">
                                <span class="counter">2391</span>
                                <p>Producers Ready</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->
    <!-- service-area start -->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>What We Offer</h2>
                        <img src="assets/images/line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-wrap">
                        <h3>What We Offer</h3>
                        <p>There are many variations of passages of an Lorem Ipsum available but the about majority have suffered alteration in man some form a by injected humour or that randomised the a words which</p>
                        <p>There are many variations of passages of an Lorem Ipsum available but the about majority have suffered.</p>
                        <a href="#">Free Consultation</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-items">
                        <span class="flaticon-bitcoin-9"></span>
                        <h3>Safe And Secure</h3>
                        <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                    </div>
                    <div class="service-items">
                        <span class="flaticon-profits"></span>
                        <h3>Instant Exchange</h3>
                        <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="service-items">
                                <span class="flaticon-exchange-1"></span>
                                <h3>Secure Wallet</h3>
                                <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="service-items">
                                <span class="flaticon-bitcoin-7"></span>
                                <h3>Experts Support</h3>
                                <p>There are many variations of Lorem Ipsum available but the about  some majority have form randomised words which believable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-area end -->

    <!-- team-area start -->
    <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Our Experts Team</h2>
                        <img src="assets/images/line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="assets/images/team/1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Conner Wilkinson</h4>
                            <p>UX / Web Designer</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="assets/images/team/2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Carolina Velez</h4>
                            <p>Web Developer</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="assets/images/team/3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Michael Arinze</h4>
                            <p>Marketing Developer</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="assets/images/team/4.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Ashleigh Nelin</h4>
                            <p>Apps Developer</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-area end -->

    <!-- nvestments-area start -->
    <div class="nvestments-area position-relative nvestments-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="nvestments-img">
                        <img src="assets/images/bg/2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="contact-wrap  flex-style">
                        <h2>Request A Call Back</h2>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Phone">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <input type="text" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea cols="30" rows="10" placeholder="Massage"></textarea>
                                </div>
                                <div class="col-12">
                                    <button>Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nvestments-area end -->

    <!-- blog-area start -->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Latest Our News</h2>
                        <img src="assets/images/line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4  col-sm-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="assets/images/blog/1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-details.php">Digital Marketo Moved To Their New Office</a></h3>
                            <ul>
                                <li><a href="#">Jhon Simith</a></li>
                                <li><a href="#">2 May, 2017</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                            <p>There are many variations of passages of Lorem is Ipsum available, but the majority have some suffered or alteration in  form, by injected randomised words which.</p>
                            <a href="blog-details.php" class="readmore">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="assets/images/blog/2.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-details.php">Welcome To Our New Head Of Production</a></h3>
                            <ul>
                                <li><a href="#">Jhon Simith</a></li>
                                <li><a href="#">2 May, 2017</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                            <p>There are many variations of passages of Lorem is Ipsum available, but the majority have some suffered or alteration in  form, by injected randomised words which.</p>
                            <a href="blog-details.php" class="readmore">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="assets/images/blog/1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-details.php">Digital Marketo Launched Their Website</a></h3>
                            <ul>
                                <li><a href="#">Jhon Simith</a></li>
                                <li><a href="#">2 May, 2017</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                            <p>There are many variations of passages of Lorem is Ipsum available, but the majority have some suffered or alteration in  form, by injected randomised words which.</p>
                            <a href="blog-details.php" class="readmore">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->

    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-sm-6 col-12">
                        <div class="footer-widget footer-logo">
                            <img src="assets/images/logo2.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the dum majority have suffered alteration in the some form by injected.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button>subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-menu">
                            <h3>Our Services</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Crypto Investments</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Customer Insights</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Analytics</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Exchange</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Bitcoin Exchange</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Business Consulting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-twitter">
                            <h3>Twitter Feeds</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i> https://twitter.com /envatO/ status/944202192013144064 https://twitter.com/envato/status/ 944202192013144064</a> </li>
                                <li class="mb-0"><a href="#"><i class="fa fa-twitter"></i> https://twitter.com /envatO/ status/944202192013144064 https://twitter.com/envato/status/ 944202192013144064</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer-widget footer-contact">
                            <h3>Contact Information</h3>
                            <ul class="footer-contact-info">
                                <li><span>Location: </span> W Jackson Blvd, Chicago United States</li>
                                <li><span>Email: </span> exampleemail.com</li>
                                <li><span>Phone: </span> (123) 45678910</li>
                            </ul>
                            <h5>We are Social</h5>
                            <ul class="social-icon d-flex">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js "></script>
    <!-- popper.min.js -->
    <script src="assets/js/vendor/popper.min.js "></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js "></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="assets/js/owl.carousel.min.js "></script>
    <!-- swiper.min.js -->
    <script src="assets/js/swiper.min.js "></script>
    <!-- mailchimp.js -->
    <script src="assets/js/mailchimp.js"></script>
    <!-- plugins js -->
    <script src="assets/js/jquery.canvasjs.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="assets/js/metisMenu.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js "></script>
        <script>
            // chart
    window.onload = function () {
    var limit = 10000;    //increase number of dataPoints by increasing the limit
    var y = 100;    
    var data = [];
    var dataSeries = { type: "line" };
    var dataPoints = [];
    for (var i = 0; i < limit; i += 1) {
        y += Math.round(Math.random() * 10 - 5);
        dataPoints.push({
            x: i,
            y: y
        });
    }
    dataSeries.dataPoints = dataPoints;
    data.push(dataSeries);

    //Better to construct options first and then pass it as a parameter
    var options = {
        zoomEnabled: true,
        animationEnabled: true,
        axisY: {
            includeZero: false
        },
        data: data  // random data
    };

        $("#chartContainer").CanvasJSChart(options);
    }
    </script>
    <!-- main js -->
    <script src="assets/js/scripts.js "></script>
</body>

</html>