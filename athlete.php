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

    <!-- ======= Our Athelete Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2><strong>MEET THE ATHLETES</strong></h2>
                <p>"Top Ranking Olympians 2023"</p>
            </div>

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/olympians/1.jpg" class="img-fluid" alt="">
                        <h4>Niraj Chopra</h4>
                        <span>Indian track and field athlete</span>
                        <div class="social">
                            <a href="https://twitter.com/Neeraj_chopra1"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/neerajchopra01/"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/neeraj____chopra/?hl=en"><i
                                    class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Athelete Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/olympians/2.webp" class="img-fluid" alt="">
                        <h4>Usain Bolt</h4>
                        <span>Jamaican runner</span>
                        <div class="social">
                            <a href="https://twitter.com/usainbolt"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/usainbolt/"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/usainbolt/?hl=en"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Athelete Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/olympians/3.jpg" class="img-fluid" alt="">
                        <h4>Sunisa Lee</h4>
                        <span>American gymnast</span>
                        <div class="social">
                            <a href="https://twitter.com/sunisalee_?lang=en"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/SunisaLee/"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/sunisalee/?hl=en"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Athelete Member -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/olympians/4.jpg" class="img-fluid" alt="">
                        <h4>Yuto Horigome</h4>
                        <span>Japanese skateboarder</span>
                        <div class="social">
                            <a href="https://twitter.com/yutohorigome?lang=en"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/yutohorigome8/about/"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/yutohorigome/?hl=en"><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Athelete Member -->

            </div>

        </div>
    </section>
    <!-- End Our Athelete Section -->


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