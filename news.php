<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FunOylmpic 2023</title>
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
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Yokyo 2023<span>.</span></h1>
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
                            <li><a href="logout.php">LOGOUT</a></li>
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

    <!-- ======= News Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2><strong>LATEST NEWS</strong></h2>
                <p>"Stay connected with us for the latest updates and news about the Yokyo FunOlympic 2023.
                    Join the conversation using #YokyoFunOlympic2023."</p>
            </div>
            <div class="row gy-4 posts-list">

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/news/bd.webp" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Badminton</p>

                        <h2 class="title">
                            <a href="blog-details.php">Know all the basic badminton rules and regulations, how to
                                play the game, court lines, how to score points and more!</a>
                        </h2>

                        <div class="d-flex align-items-center">

                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 1, 2023</time>
                            </p>
                        </div>


                    </article>
                </div><!-- End News list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/news/f.webp" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Football</p>

                        <h2 class="title">
                            <a href="blog-details.html">Cristiano Ronaldo is the first male football player to play
                                200 international matches.</a>
                        </h2>

                        <div class="d-flex align-items-center">

                            <p class="post-date">
                                <time datetime="2022-01-01">July 5, 2023</time>
                            </p>
                        </div>


                    </article>
                </div><!-- End News list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/news/s.webp" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Swimming</p>

                        <h2 class="title">
                            <a href="blog-details.html">Simpson aspires to reach the pinnacle of global swimming by
                                representing Australia at the Olympic Games Yokyo 2024.</a>
                        </h2>

                        <div class="d-flex align-items-center">

                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 20, 2023</time>
                            </p>
                        </div>


                    </article>
                </div><!-- End News list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/news/b.webp" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Boxing</p>

                        <h2 class="title">
                            <a href="blog-details.html">Top fighters from across Europe have their sights set on
                                Yokyo 2024, with the European Games in Poland</a>
                        </h2>

                        <div class="d-flex align-items-center">

                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 30, 2023</time>
                            </p>

                        </div>

                    </article>
                </div><!-- End News list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/news/j.webp" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Judo</p>

                        <h2 class="title">
                            <a href="blog-details.html">Simpson aspires to reach the pinnacle of global swimming by
                                representing Australia at the Olympic Games Paris 2024.</a>
                        </h2>

                        <div class="d-flex align-items-center">

                            <p class="post-date">
                                <time datetime="2022-01-01">Jan 30, 2023</time>
                            </p>
                        </div>


                    </article>
                </div><!-- End News list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/news/g.webp" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Artistic Gymnastics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Carlos Yulo and Oksana Chusovitina are amongst the names to
                                watch from 15-18 June in Singapore.</a>
                        </h2>

                        <div class="d-flex align-items-center">

                            <p class="post-date">
                                <time datetime="2022-01-01">May 14, 2023</time>
                            </p>
                        </div>


                    </article>
                </div><!-- End News list item -->

            </div><!-- End News posts list -->

            <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div><!-- End News pagination -->

        </div>
    </section><!-- End News Section -->

    </main><!-- End #main -->


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