<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
<?php include 'includes/title.php';?>
    <!-- Favicon -->
    <link rel="icon" href="images/NIPOST.jpg">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.php">NIPOST</a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                            <a class="dropdown-item" href="index.html">Home</a>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                            <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                                            <a class="dropdown-item" href="blog.html">Blog</a>
                                            <a class="dropdown-item" href="contact.html">Contact</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </li> -->
                                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li> -->
                                    <!-- <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li> -->
                                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                </ul>
                                <!-- Search Form Area Start -->
                                <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
                                        <button type="submit" class="d-none"><img src="img/core-img/search-icon.png" alt="Search"></button>
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div class="search-button">
                                    <a href="#" id="search-btn"><img src="img/core-img/search-icon.png" alt="Search"></a>
                                </div>
                                <!-- Login/Register btn -->
                                <div class="login-register-btn">
                                    <a href="customerLogin.php">Login</a>
                                    <a href="register.php">/ Register</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome_area clearfix" id="home" style="background-image: url(img/bg-img/welcome-bg.png)">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slides -->
            <div class="single-hero-slide d-flex align-items-end justify-content-center" style="margin-top:-150px;">
                <div class="hero-slide-content text-center">
                    <h2>COMPUTERIZED MAILING SYSTEM</h2>
                    <h4>IKEJA POST OFFICE</h4>
                    <img class="slide-img" src="images/post1.jpg" alt="">
                </div>
            </div>
             <!-- Single Hero Slides -->
            <div class="single-hero-slide d-flex align-items-end justify-content-center" style="margin-top:-150px;">
                <div class="hero-slide-content text-center">
                    <h2>COMPUTERIZED MAILING SYSTEM</h2>
                    <h4>IKEJA POST OFFICE</h4>
                    <img class="slide-img" src="images/post2.jpg" alt="">
                </div>
            </div>
             <!-- Single Hero Slides -->
            <div class="single-hero-slide d-flex align-items-end justify-content-center" style="margin-top:-150px;">
                <div class="hero-slide-content text-center">
                    <h2>COMPUTERIZED MAILING SYSTEM</h2>
                    <h4>IKEJA POST OFFICE</h4>
                    <img class="slide-img" src="images/post3.jpg" alt="">
                </div>
            </div>
            <!-- Single Hero Slides
            <div class="single-hero-slide d-flex align-items-end justify-content-center">
                <div class="hero-slide-content text-center">
                    <h2>A Clean and Modern Template</h2>
                    <h4>Get your freebie template now!</h4>
                    <img class="slide-img" src="img/bg-img/device.png" alt="">
                </div>
            </div> -->
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
   

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area clearfix">
        <!-- Top Fotter Area -->
        <div class="top-footer-area section_padding_100_0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <a href="#" class="mb-50 d-block">NIPOST</a>
                            <p>
                            Computerized Mailing System project is a web based application for post office which helps post office management and their customers. It handles all types of transaction details of the post office and this project will reduce the clerical work as most of the work done by computer and customers can directly view all transaction details without visiting post office.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Fast links</h5>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="customerLogin.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                 <li><a href="adminLogin.php">Administrator</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Blog</h5>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>23 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Why we love stock photos</h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>22 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Designin on grid. A few rules. </h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>20 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>2017 World Design Congress</h6>
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Project Students</h5>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/map.png" alt="">
                                </div>
                                <p>TOBI HCSF/12/12222</p>
                            </div>
                              <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/map.png" alt="">
                                </div>
                                <p>TOBI HCSF/12/12222</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fotter Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="footer-bottom-content h-100 d-md-flex justify-content-between align-items-center">
                            <div class="copyright-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Computerized Mailing System
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                            </div>
                            <!-- <div class="footer-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>