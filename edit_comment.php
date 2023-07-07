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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <style>
        .checked {
            color: orange;
        }
    </style>  

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
    <br><br><br><br>
    <!-- End Header -->

    <!-- User start -->
    <div class="jumbotron jumbotron-fluid">
        <nav>
            <ul class="navbar-nav text-center" style="float:right">
                <li class="nav-item active">
                    <a class="nav-link" href="profile.php"
                        style="text-transform:uppercase; display:block; background-color:#00796b; padding:20px; border-radius:40px; font-size:15px; font-weight:bold; color:#fff;">
                        <?php echo $_SESSION['username']; ?> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"
                        style="text-transform:uppercase; display:block; color:black; font-weight:bold;">Log Out</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- User end -->

    <!-- welcome start -->

    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2><strong>BROADCAST LIVE VIDEOS</strong></h2>
            <p></p>
        </div>
        </ul>
    </div>
    <!-- welcome end -->

    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-left: 250px;">

                <?php
        $dir = glob('assets/video/{*.mp4}', GLOB_BRACE);
        foreach ($dir as $value) {
        ?>
                <h2>Watch Live<span style="color: #FF0000; font-size: 5em;">.</span></h2>
                <div class="livebox" style="background-color: #fff;">
                    <a href="<?php echo $value; ?>">
                        <video src="<?php echo $value; ?>" alt="HNP" width="70%" ; hspace="5px" vspace="5px"
                            controls>
                            <source src="<?php echo $value; ?>" type="video/mp4">
                            <source src="<?php echo $value; ?>" type="video/ogg">
                        </video>
                    </a>
                </div>
                <?php
        }
        ?>
            </div>
            <div class="col-md-3">
                <?php
            ?>

            </div>
        </div>
    </div>
    <!-- content end -->
   

    <!-- comment start  -->
    <div class="container" style="margin: 30px 0px; margin-left: 300px;">
        <h2 class= "display-6">Write a comment:</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="content"></label>
                <textarea class="form-control" name="comment" id="content" rows="5" placeholder="Comment"  style="width: 60%;"
                    required></textarea>
            </div>
            <div class="form-group" style="margin: 30px 0px;">
                <label for="Rating">Rating:</label>
                <input type="text" class="form-control" name="rate" id="" aria-describedby="helpId"
                    placeholder="1 to 5" style="width: 60%;">
            </div>
            <button type="submit" name="submit" style= "border-radius: 5px; padding: 7px; color: #fff; background-color: #008374;">Comment</button>
            <button type="reset" style= "border-radius: 5px; padding: 7px; color: #fff; background-color: #008374;">Cancel</button>
        </form>
        <?php
  if(isset($_POST['submit']))
  {
    include 'config/connection.php';
    $user = $_SESSION['username'];
    $date = date('Y/m/d');
    $com = $_POST['comment'];
    $rate = $_POST['rate'];
    $query = "INSERT INTO comment(user, date, comment, rate) VALUES ('$user', '$date', '$com', '$rate')";
    $run = mysqli_query($conn, $query);
    
    if($run) {
        echo "<script>window.open('broadcast.php','_self')</script>";
    } else {
        echo "<script>window.alert('Error Found!')</script>";
    }
  }
?>

<div class="container" style= "margin: 30px 0px;">
        <h2 class="display-6">Comments:</h2>
    </div>

    <!-- comment to start display -->
    <?php
            include 'config/connection.php';
            $query = "SELECT * FROM comment ORDER BY rand() LIMIT 5";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run)) {
                $comment_id = $row['id'];
                $username = $row['user'];
                $date = $row['date'];
                $comment = $row['comment'];
                $rate = $row['rate'];
            ?>

<div class="container">
    <div class="row" style="margin: 40px 0px;">
        <div class="col-sm-8">
        <form action="update-comment.php" method="get" enctype="multipart/form-data">
            <div class="username" style= "text-transform:uppercase; font-size: 16px; font-weight: bold; color: #008374;">
                <?php echo $a; ?>
               
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $e) {
                        echo '<span class="fa fa-star checked"></span>';
                    } else {
                        echo '<span class="fa fa-star"></span>';
                    }
                }
                ?>
            </div>
            <div class="date" style= "font-size: 12px; color: #808080;">
                <?php echo $c; ?>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="comment" style= "font-size: 15px;">
                <?php echo $d; ?>
            </div>
        </div>
        <button type="submit" name="submit">Update</button>
    </div>
</div>
<?php 
}
?>
</div>
</section>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="home.php" class="logo d-flex align-items-center">
                        <span>Yokyo 2023</span>
                    </a>
                    <p>Stay connected with us for the latest updates and news about the Yokyo FunOlympic 2023.
                        Join the
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