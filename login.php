<?php
session_start();
    include('config/connection.php');

    if (isset($_POST["login"])) {
        $username = mysqli_real_escape_string($conn, trim($_POST['username']));
        $password = trim($_POST['password']);
    
        if (empty($username) && empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 150px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter both username and password.</p>';
        } elseif (empty($username)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your username.</p>';
        } elseif (empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your password.</p>';
        } else {
            // Process login non-empty username and password
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND role = 'administrator'");
            $count = mysqli_num_rows($sql);
    
            if ($count > 0) {
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if ($fetch["status"] == 0) {
                    $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 100px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please verify your email account before logging in.</p>';
                } elseif (password_verify($password, $hashpassword)) {
                    $_SESSION['username'] = $username;
                    header("Location: admin/main.php");
                    exit();
                } else {
                    $login_error = '<p style="text-align: center; margin-right: 110px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Invalid username or password, please try again.</p>';
                }
            } else {
                $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND role = 'user'");
                $count1 = mysqli_num_rows($sql1);
    
                if ($count1 > 0) {
                    $fetch1 = mysqli_fetch_assoc($sql1);
                    $hashpassword1 = $fetch1["password"];
    
                    if ($fetch1["status"] == 0) {
                        $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 100px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please verify your email account before logging in.</p>';
                    } elseif (password_verify($password, $hashpassword1)) {
                        $_SESSION['username'] = $username;
                        echo '<script> alert("Login Succuccessfully");
                        window.location.href = "home.php";
                        </script>';
                        exit();
                    } else {
                        $login_error = '<p style="text-align: center; margin-right: 110px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Invalid username or password, please try again.</p>';
                    }
                } else {
                    $login_error = '<p style="text-align: center; margin-right: 253px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Username does not exist.</p>';
                }
            }
        }
     }  

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <!-- End Header -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>FunOlympic 2023</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main2.css">

        <script src="assets/css/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="assets/css/vendor/animsition/js/animsition.min.js"></script>
        <script src="assets/css/vendor/bootstrap/js/popper.js"></script>
        <script src="assets/css/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/css/vendor/select2/select2.min.js"></script>
        <script src="assets/css/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/css/vendor/daterangepicker/daterangepicker.js"></script>
        <script src="assets/css/vendor/countdowntime/countdowntime.js"></script>
    </head>

    <body>
        <div class="limiter">
            <div class="container-login100" style="background-color: #DCDCDC;">
                <div class="wrap-login100" style="padding: 20px; border-radius: 10px; margin-top: -110px">
                    <form action="#" method="POST" name="login">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title p-b-30" style="color: #008374;">
                                Login
                            </span>

                            <div class="wrap-input100 validate-input m-b-20" data-validate="Username is required">
                                <span class="label-input100">Username:</span>
                                <input class="input100" id="username" type="text" name="username"
                                    placeholder="Type your username">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <span class="label-input100">Password:</span>
                                <input class="input100" id="password" type="password" name="password"
                                    placeholder="Type your password">
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                            </div>

                            <?php if (isset($login_error)) echo $login_error; ?>

                            <div class="text-right p-t-10 p-b-25">
                                <a href="recover_psw.php">
                                    Forgot password?
                                </a>
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn" name="login" style="background-color: #008374;">
                                        <strong>Login</strong>
                                    </button>
                                </div>
                            </div>

                            <div class="txt1 text-center" style="padding: 18px;">
                                <span>
                                    Or
                                </span>
                            </div>

                            <div class="flex-c-m">
                                <a href="https://www.facebook.com/home.php" class="login100-social-item bg1">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="https://twitter.com/i/flow/login" class="login100-social-item bg2">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-318657203%3A1687110829899402&continue=https%3A%2F%2Fmyaccount.google.com%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dgo-to-account-button&ifkv=Af_xneFDlV9ueGO5rZsG3qxeFwlpq7fSu5-bXZ0_Bc7o7vtqBhGBhZ42smZseGSEbbnU6MdCvzi_Yg&service=accountsettings&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                    class="login100-social-item bg3">
                                    <i class="fa fa-google"></i>
                                </a>
                            </div>

                            <div class="flex-col-c p-t-15">
                                <span class="txt1">
                                    Not a Member?
                                    <a href="register.php" class="txt2">
                                        REGISTER
                                    </a>

                                </span>
                            </div>
                        </form>
                </div>
            </div>
        </div>

    </body>

    </html>