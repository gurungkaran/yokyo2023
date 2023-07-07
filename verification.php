<?php session_start() ?>

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

    </header>
    <br>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"
                            style="padding: 15px; background-color: #008374; color: white; font-size: 18px;">
                            <strong>Enter your OTP</strong>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="col-md-15">
                                    <label>OTP</label>
                                    <input type="text" id="otp" class="form-control" style="margin-top: 7px;"
                                        placeholder="Enter OTP" name="otp_code" required autofocus>
                                </div>
                        </div>
                        <div>
                            <input type="submit" value="Verify" name="verify"
                                style="background-color: #008374; color: white; margin-bottom: 15px; margin-left: 18px; padding: 6px 20px; border-radius: 5px;">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
</body>

</html>

<?php 
   include 'config/connection.php';
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
<script>
alert("Invalid OTP code");
</script>
<?php
        }else{
            mysqli_query($conn, "UPDATE users SET status = 1 WHERE email = '$email'");
            ?>
<script>
alert("Verfiy account done, you may sign in now");
window.location.replace("login.php");
</script>
<?php
        }

    }

?>