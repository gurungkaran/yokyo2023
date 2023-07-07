<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FunOlympic 2023</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="assets/img/home/logo.png">

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
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="karangurung@ismt.edu.np">info@yokyo-funolympic2023.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1-123-456-7890</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter" style="color: #1DA1F2;"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook" style="color: #4169E1;"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram" style="color: #E4405F;"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin" style="color: #0000CD;"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt="logo" height="500px" width="80"> -->
                <h1>Yokyo<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
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


    <!-- ======= Home Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>FunOlympic 2023</span></h2>
                    <p style="color: #D3D3D3;">"Push beyond your limits and rewrite what is believed to be possible"</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="<?php echo isset($_SESSION['username']) ? '#about' : 'login.php'; ?>"
                            class="btn-get-started">Read more</a>
                        <a href="<?php echo isset($_SESSION['username']) ? 'https://www.youtube.com/watch?v=Zafhz4SRx1s' : 'login.php'; ?>"
                            class="glightbox btn-watch-video d-flex align-items-center">
                            <i class="bi bi-play-circle" style="color: #e60000;"></i><span>Live Video</span>
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/home/bg.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Broadcast</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Sports</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Yokyo city</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Athlete</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Home Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>ABOUT US</h2>
                    <p>FunOlympic 2023 is an exciting international event that brings together athletes, spectators, and
                        enthusiasts from around the world for a celebration of sports, competition, and fun. As the host
                        city, Yokyo is proud to showcase its
                        unique culture, hospitality, and passion for sports.</p>
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
                                <a href="<?php echo isset($_SESSION['username']) ? 'https://www.youtube.com/watch?v=poA3AT-s-9A' : 'login.php'; ?>"
                                    class="glightbox play-btn"></a>
                                <img src="assets/img/home/boxing.jpg" class="img-fluid rounded-4" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Games Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/a.webp" class="img-fluid"
                                style="width: 300%;" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/b.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/c.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/d.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/e.webp" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/f.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/g.jpg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/h.jpg" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Games Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="assets/img/home/1.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>SPORTS</strong> variety of sports games lists</p>
                        </div>
                        <!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>ATHLETES</strong> top ranking olympians 2023</p>
                        </div>
                        <!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>LIVE EVENTS</strong> watch latest live olympic videos </p>
                        </div>
                        <!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section>
        <!-- End Stats Counter Section -->

        <!-- ======= Explore the games Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="<?php echo isset($_SESSION['username']) ? 'https://www.youtube.com/watch?v=zBeyzFMGtwQ' : 'login.php'; ?>"
                    class="glightbox play-btn"></a>
                <!-- <h3>FunOlympic 2023</h3> -->
                <p> Let’s Move: An Olympic Invite to get the world moving!</p>
                <a class="cta-btn"
                    href="<?php echo isset($_SESSION['username']) ? 'https://www.youtube.com/watch?v=zBeyzFMGtwQ' : 'login.php'; ?>">Explore
                    the games</a>
            </div>
        </section>
        <!-- End Explore the games Section -->

        <!-- ======= Latest News Section ======= -->

        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>LATEST NEWS</h2>
                    <p>"Stay updated with Yokyo FunOlympic Games 2023!"</p>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <?php
            include 'config/connection.php';
            $query = "SELECT * FROM posts ORDER BY RAND() LIMIT 10";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['title'];
                $c = $row['content'];
                $d = $row['image'];
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">

                            <div class="image-container">
                                <img src="assets/img/news/<?php echo $d; ?>" alt="Your Image" height="230" width="350"
                                    style="padding: 15px;">
                            </div>
                            <strong><?php echo $b; ?></strong>
                            <p><?php echo substr($c, 0, 100); ?> ......</p>
                            <a href="news.php?id=<?php echo $a; ?>" class="readmore stretched-link">Read More<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php
            }
            ?>
                </div>
            </div>
        </section>


        <!-- End Our Latest News Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>TESTIMONIALS</h2>
                    <p>"What Our Clients Say!!"</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Sports Enthusiasts</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "The Yokyo FunOlympic 2023 website
                                        was a treasure trove of inspiration.
                                        The athlete profiles and their stories showcased their journeys, struggles, and
                                        triumphs. It made me appreciate the incredible dedication and perseverance of
                                        these athletes. The website truly captured the essence of the games and left me
                                        feeling inspired to pursue my own dreams."
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-2.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Volunteers</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "I want to express my gratitude to
                                        the organizers for making the Yokyo FunOlympic 2023 website accessible and
                                        inclusive.
                                        The website was designed with accessibility features, ensuring that people of
                                        all abilities could fully engage with the content. It's a testament to the
                                        commitment of creating an inclusive and empowering experience for everyone
                                        involved. Well done!"
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-3.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Sports Enthusiasts</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "I have to commend the organizers
                                        for their outstanding job with the Yokyo FunOlympic 2023 website.
                                        It was visually stunning and packed with engaging content. The live streaming
                                        feature allowed me to catch the action in real-time, even when I couldn't be
                                        physically present at the venue. It truly brought the spirit of the FunOlympics
                                        to life!"
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-4.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Matt Brandon</h3>
                                            <h4>Sports Supporter</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "I must say, the Yokyo FunOlympic
                                        2023 website exceeded my expectations. It was not just informative but also
                                        incredibly engaging.
                                        The interactive games, quizzes, and contests kept me entertained between events.
                                        It made me feel like an active participant, even though I was thousands of miles
                                        away. It was a fantastic way to immerse myself in the FunOlympic spirit!"
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/testimonials/testimonials-5.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Sports Enthusiast</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "As a sports enthusiast, I couldn't
                                        be happier with the Yokyo FunOlympic 2023 website.
                                        It was a one-stop destination for everything related to the event. From the
                                        schedule of competitions to the profiles of athletes, I had access to all the
                                        details I needed. The website truly enhanced my experience and made me feel
                                        connected to the games in a unique way."
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Sports Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>SPORTS</h2>
                    <p>"The only way to prove that you're a good sport is to lose"</p>
                </div>

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

        <!-- ======= Our Athelete Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>MEET THE ATHLETES</h2>
                    <p>"Top Ranking Olympians 2023"</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/olympians/1.jpg" class="img-fluid" alt="">
                            <h4><a href="athlete.php" title="More Details">Neeraj Chopra</a></h4>
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
                            <h4><a href="athlete.php" title="More Details">Usain Bolt</a></h4>
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
                            <h4><a href="athlete.php" title="More Details">Sunisa Lee</a></h4>
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
                            <h4><a href="athlete.php" title="More Details">Yuto Horigome</a></h4>
                            <span>Japanese skateboarder</span>
                            <div class="social">
                                <a href="https://twitter.com/yutohorigome?lang=en"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/yutohorigome8/about/"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/yutohorigome/?hl=en"><i
                                        class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Athelete Member -->

                </div>

            </div>
        </section>
        <!-- End Our Athelete Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>CONTACT US</h2>
                    <p>Thank you for your interest in the Yokyo FunOlympic 2023! We value your feedback, inquiries, and
                        suggestions. Please feel free to reach out to us using the following contact information:</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, City of Yokyo, Japan, 1 no 9 no 12</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@yokyo-funolympic2023.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1-123-456-7890</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.php" class="logo d-flex align-items-center">
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
                        <li><a href="index.php">Home</a></li>
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