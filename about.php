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
                    <li><a href="#about">About</a></li>
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

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2><strong>ABOUT</strong></h2>
                <h3>FUNOLYMPIC 2023</h3>
                <section id="call-to-action1" class="call-to-action1">
                    <div class="container1 text-center" data-aos="zoom-out">
                        <a href="https://www.youtube.com/watch?v=_cZnUZnAu_M" class="glightbox play-btn"></a>
                        <img src="assets/img/home/view.jpg" alt="FunOlympic 2023 Video" width="100%" ;>
                        </a>
                    </div>
                </section>
                <p style="font-size: 18px; font-weight: bold; text-align: justify;">
                    The City of Yokyo won the bid to host the next FunOlympic Games in 2023. During the build-up to the
                    planned games in 2023, the city had invested hugely in IT infrastructure and systems to make sure
                    that the games would have been well organized, staffed, attended, and accessible to everyone.
                </p>
                <br>
                <p style="font-size: 18px; font-weight: bold; text-align: justify;">
                    The city's commitment to hosting the FunOlympic Games goes beyond just providing world-class
                    sporting venues. Yokyo has also focused on developing a robust IT infrastructure to support various
                    aspects of the event. From ticketing systems and event management software to communication networks
                    and digital platforms, Yokyo has made significant investments to ensure a seamless and immersive
                    experience for athletes, spectators, and participants.
                    By leveraging state-of-the-art technology, Yokyo aims to create a connected environment that
                    enhances the overall experience of the FunOlympic Games. The IT infrastructure enables efficient
                    event planning and management, streamlined ticketing processes, real-time updates and notifications,
                    and enhanced accessibility for individuals with disabilities.

                    Additionally, Yokyo has prioritized the development of user-friendly mobile applications and
                    websites to provide attendees with instant access to event schedules, results, and interactive maps.
                    Through these digital platforms, visitors can easily navigate the city, explore local attractions,
                    and engage with the FunOlympic community.
                </p>
                <br>
                <p style="font-size: 18px; font-weight: bold; text-align: justify;">
                    Furthermore, the city has implemented advanced security measures to ensure the safety and privacy of
                    all participants. Robust cybersecurity protocols, surveillance systems, and emergency response
                    mechanisms have been put in place to address any potential threats and maintain a secure environment
                    throughout the event.
                    Yokyo takes pride in its unique culture, hospitality, and passion for sports. As the host city of
                    FunOlympic 2023, it strives to showcase these qualities to the world, providing a memorable
                    experience for athletes and spectators alike. The combination of top-notch IT infrastructure,
                    dedicated staff, and the city's vibrant atmosphere will contribute to the success of the FunOlympic
                    Games and leave a lasting impression on all who attend.
                </p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <h3>Paralympic Games</h3>
                    <img src="assets/img/home/pg.webp" class="img-fluid rounded-4 mb-4" alt="">
                    <p>The Paralympic Games provide a platform for Para athletes with a diverse range of impairments
                        to showcase their outstanding abilities to millions of spectators and billions of TV
                        viewers.</p>
                    <p>Para athletes competing in the Paralympic Games display an unparalleled level of athletic
                        prowess. They push the boundaries of what is perceived as possible and redefine the
                        standards of excellence in their respective sports. These
                        incredible athletes train tirelessly, mastering their disciplines and setting new benchmarks
                        for achievement. Their performances are a testament to the human spirit and an inspiration
                        to all.</p>
                </div>
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            We believe in the power of sports to inspire and unite people, transcending boundaries
                            and fostering friendship among nations.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> It provides an exciting backdrop for
                                FunOlympic 2023, offering a unique blend of traditional charm and modern
                                infrastructure.</li>
                            <li><i class="bi bi-check-circle-fill"></i> These venues provide top-notch amenities and
                                cutting-edge technology to ensure optimal conditions for athletes and spectators.
                            </li>
                            <li><i class="bi bi-check-circle-fill"></i> The event will implement eco-friendly
                                practices, promote renewable energy, and contribute to a more sustainable future.
                            </li>
                        </ul>
                        <p>
                            Shakur Stevenson (USA) vs. Erdenebat Tsendbaatar (MGL) Yokyo 2023 FunOlympics
                            Quarterfinals (56kg)
                        </p>

                        <div class="position-relative mt-4">
                            <img src="assets/img/home/boxing.jpg" class="img-fluid rounded-4" alt="">
                            <a href="https://www.youtube.com/watch?v=poA3AT-s-9A" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->

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
                        <li><a href="boadcast.php">Broadcast</a></li>
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