<?php session_start() ;
include 'config/connection.php';
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
        </div>
    </header>
    <br>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="padding: 15px; background-color: #008374; color: white; font-size: 18px;">
                            <strong>Change Password</strong>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" name="login">
                                <div class="form-group row">
                                    <p style="font-size: 16px; color: #808080;">Please create a new password that you
                                        don't use on any other sites.</p>
                                    <div class="col-md-12">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">New
                                            Password:</label>
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Enter new password" name="password" required autofocus>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                        <label for="confirm_password"
                                            class="col-md-4 col-form-label text-md-right">Confirm Password:</label>
                                        <input type="password" id="confirm_password" class="form-control"
                                            placeholder="Confirm new password" name="confirm_password" required
                                            autofocus>
                                        <i id="password_match_icon" class="bi bi-check-circle-fill"
                                            style="display: none; color: green; margin-top: 10px;">Password match
                                            correctly.</i>
                                        <i id="password_error" class="bi bi-exclamation-circle-fill"
                                            style="display: none; color: red; margin-top: 10px;">Password donot
                                            match.</i>
                                    </div>

                                    <script>
                                    const passwordInput = document.getElementById("password");
                                    const confirmInput = document.getElementById("confirm_password");
                                    const passwordMatchIcon = document.getElementById("password_match_icon");
                                    const passwordError = document.getElementById("password_error");

                                    confirmInput.addEventListener("input", () => {
                                        if (confirmInput.value !== passwordInput.value) {
                                            passwordMatchIcon.style.display = "none";
                                            passwordError.style.display = "block";
                                        } else {
                                            passwordMatchIcon.style.display = "block";
                                            passwordError.style.display = "none";
                                        }
                                    });
                                    </script>

                                </div>
                                <input type="submit" value="Change" name="reset"
                                    style="background-color: #008374; color: white; padding: 6px 20px; margin-top: 20px; border-radius: 5px;">
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
    if(isset($_POST["reset"])){
        include 'config/connection.php';
        $psw = $_POST["password"];

        $token = $_SESSION['token'];
        $email = $_SESSION['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if($email){
            $new_pass = $hash;
            mysqli_query($conn, "UPDATE users SET password='$new_pass' WHERE email='$email'");
            ?>
<script>
alert("<?php echo "Your password has been succesfully reset"?>");
</script>
<?php
        }else{
            ?>
<script>
alert("<?php echo "Please try again"?>");
</script>
<?php
        }
    }

?>