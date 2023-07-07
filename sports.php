<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FunOlympic 2023</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/home/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="home.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt="logo" height="500px" width="80"> -->
                <h1>Yokyo<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="broadcast.php">Broadcast</a></li>
                    <li><a href="news.php">News</a></li>
                    <li class="dropdown"><a href="#"><span>More</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="sports.php">SPORTS</a></li>
                            <li><a href="athlete.php">ATHLETES</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Account</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="register.php">REGISTER</a></li>
                            <li><a href="login.php">LOGIN</a></li>
                            <li><a href="logout.php">LOGOUt</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->

    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2><strong>SPORTS</strong></h2>
                <p>"The only way to prove that you're a good sport is to lose"</p>
            </div>

            <?php
          $dir=glob('assets/img/{*.jpg, *.png, *.jpeg}',GLOB_BRACE);
          foreach($dir as $value)
          {
          ?>
            <a href="<?php echo $value; ?>">
                <img id="myImg" src="<?php echo $value; ?>" alt="HNP" width="410px" height="300px" hspace="8px"
                    vspace="2px" class="thumbnail" style="border-radius: 10px;">

            </a>
            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
            </div>
            <?php 
          }
          ?>
            <br><br><br>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Badminton</li>
                        <li data-filter=".filter-product">Football</li>
                        <li data-filter=".filter-branding">Judo</li>
                        <li data-filter=".filter-books">Swimming</li>
                    </ul>
                    <!-- End Sports Filters -->
                </div>

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/1.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/1.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Badminton 1</a></h4>
                                <p>"Rackets ready, spirits high, let the fast-paced rallies of Olympic badminton
                                    leave you breathless and begging for more!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/4.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/4.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Football 1</a></h4>
                                <p>"Football is a game of passion, unity, and the relentless pursuit of victory. Let
                                    the Yokyo FunOlympic 2023 ignite the spirit of the beautiful game!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/7.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/7.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Judo 1</a></h4>
                                <p>"Judo is not just about winning medals; it's about the discipline, respect, and
                                    camaraderie forged on and off the mat."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/10.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/10.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Swimming 1</a></h4>
                                <p>"Swimming teaches us that the only limit is the one we set for ourselves. Break
                                    free and glide towards greatness."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/2.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/2.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Badminton 2</a></h4>
                                <p>"Step onto the court in Yokyo and let the shuttlecock be your wings as you dance
                                    with skill and finesse!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/5.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/5.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Football 2</a></h4>
                                <p>"The beauty of football lies in its simplicity, where a single moment can change
                                    the course of an entire match."r</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/8.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/8.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Judo 2</a></h4>
                                <p>"Judo is like a chess match on the tatami, where each move is strategic and every
                                    decision counts."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/11.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/11.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Swimming 2</a></h4>
                                <p>"Swimming is not just a sport; it's a way of life, where dedication and
                                    perseverance flow in every lane."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/3.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/3.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Badminton 3</a></h4>
                                <p>"Smash, spin, and shuttle your way to glory in the electrifying world of Olympic
                                    badminton!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/6.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/6.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Football 3</a></h4>
                                <p>"A football team is not just a collection of players; it's a symphony of
                                    coordinated effort, where each instrument plays a vital role."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/9.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/9.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Judo 3</a></h4>
                                <p>"The true essence of Judo lies in the journey of self-improvement, as you strive
                                    to be stronger, faster, and better than before."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/12.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/12.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Swimming 3</a></h4>
                                <p>"Swimming is the perfect blend of power and elegance, where the water becomes a
                                    playground and athletes become aquatic marvels."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                </div>
                <!-- End Sports Container -->

            </div>

        </div>
    </section>
    <!-- End Sports Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="home.php" class="logo d-flex align-items-center">
                        <span>Yokyo 2023</span>
                    </a>
                    <p>Stay connected with us for the latest updates and news about the Yokyo FunOlympic 2023. Join the
                        conversation using #YokyoFunOlympic2023.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="broadcast.php">Broadcast</a></li>
                        <li><a href="sports.php">Sports</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="athlete.php">Athletes</a></li>
                        <li><a href="sports.php">Sports</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br> City of Yokyo, 1 no 9 no 12<br> Japan <br><br>
                        <strong>Phone:</strong> +1-123-456-7890<br>
                        <strong>Email:</strong> info@yokyo-funolympic2023.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; 2023 Copyright <strong><span>FunOlympic Yokyo</span></strong>. All Rights Reserved
            </div>

            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

</body>

</html>