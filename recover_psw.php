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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    .notification {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-left: 5px solid #008374;
        padding: 15px;
        display: flex;
        align-items: center;
    }

    .notification-icon {
        margin-right: 12px;
        font-size: 18px;
        margin-bottom: 20px;
        color: #808080;
    }

    .notification-text {
        font-size: 17px;
        color: #808080;
    }
    </style>
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
                            <strong>Reset Password</strong>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" name="recover_psw">
                                <div class="form-group row">
                                    <div class="notification">
                                        <i class="fas fa-info-circle notification-icon"></i>
                                        <span class="notification-text">
                                            A verification email will be sent to your mailbox.
                                            Please check it for a link to reset your password.
                                        </span>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-15">
                                    <label>E-mail</label>
                                    <input type="text" id="email_address" class="form-control" style= "margin-top: 5px;" placeholder="Enter email address"
                                        name="email" required autofocus>
                                </div>
                        </div>
                        <div>
                            <input type="submit" value="Send Request" name="recover"
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
    if(isset($_POST["recover"])){
        include 'config/connection.php';
        $email = $_POST["email"];

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
<script>
alert("<?php  echo "Sorry, no emails exists "?>");
</script>
<?php
        }else if($fetch["status"] == 0){
            ?>
<script>
alert("Sorry, your account must verify first, before you recover your password !");
window.location.replace("login.php");
</script>
<?php
        }else{
            // generate token by binaryhexa 
            $token = bin2hex(random_bytes(50));

            //session_start ();
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // karan account
            $mail->Username='karangurung@ismt.edu.np';
            $mail->Password='gurungkg39534';

            // send by karan email
            $mail->setFrom('karangurung@ismt.edu.np', 'Password Reset');
            // get email from input
            $mail->addAddress($_POST["email"]);
            //$mail->addReplyTo('karangurung@ismt.edu.np');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <p>Kindly click the below link to reset your password</p>
            http://localhost:4433/yokyo/reset_psw.php
            <br><br>
            <p>With regrads,</p>";

            if(!$mail->send()){
                ?>
<script>
alert("<?php echo " Invalid Email "?>");
</script>
<?php
            }else{
                ?>
<script>
window.location.replace("notification.html");
</script>
<?php
            }
        }
    }
?>