<?php session_start(); ?>
<?php
    include('config/connection.php');

    if(isset($_POST["register"])){
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        $dob = $_POST["dob"];
        $occupation = $_POST["occupation"];
        $country = $_POST["country"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        $check_query = mysqli_query($conn, "SELECT * FROM users where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
<script>
alert("User with email already exist!");
</script>
<?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($conn, "INSERT INTO users (fullname, username, email, phone_number, dob, occupation, country, gender, password, role, status) VALUES
                ('$fullname','$username', '$email','$phone_number', '$dob', '$occupation', '$country', '$gender', '$password_hash', '$role', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='karangurung@ismt.edu.np';
                    $mail->Password='gurungkg39534';
    
                    $mail->setFrom('karangurung@ismt.edu.np', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>";
    
                            if(!$mail->send()){
                                ?>
<script>
alert("<?php echo "Register Failed, Invalid Email "?>");
</script>
<?php
                            }else{
                                ?>
<script>
alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
window.location.replace('verification.php');
</script>
<?php
                            }
                }
            }
        }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
    function validatePassword() {
        var password = document.getElementById("password").value;
        var uppercaseRegex = /^(?=.*[A-Z])/;
        var lowercaseRegex = /^(?=.*[a-z])/;
        var numberRegex = /^(?=.*\d)/;
        var specialCharRegex = /^(?=.*[!@#$%^&*()])/;
        var lengthRegex = /^(?=.{8,})/;

        var errors = [];

        if (!uppercaseRegex.test(password)) {
            errors.push(
                '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one uppercase letter.</span>'
            );
        }

        if (!lowercaseRegex.test(password)) {
            errors.push(
                '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one lowercase letter.</span>'
            );
        }

        if (!numberRegex.test(password)) {
            errors.push(
                '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one number.</span>'
            );
        }

        if (!specialCharRegex.test(password)) {
            errors.push(
                '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must contain at least one special character (!@#$%^&*()).</span>'
            );
        }

        if (!lengthRegex.test(password)) {
            errors.push(
                '<span class="error-message"><i class="fas fa-exclamation-circle error-icon"></i> Password must be at least 8 characters long.</span>'
            );
        }

        var errorText = errors.join("<br>");
        document.getElementById("error-message").innerHTML = errorText;
    }
    </script>



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

    <!-- Register form start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    body {
        background-color: #DCDCDC;
    }

    .container-login100 {
        background-color: #fff;
        padding: 10px;
        border-radius: 20px;
    }

    .form-group {
        margin-bottom: 12px;
    }

    .input-container {
        position: relative;
    }

    .input-container i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -25px;
    }

    .error-message {
        color: #DC143C;
    }

    .error-icon {
        color: #DC143C;
        margin-right: 5px;
    }

    .social-icons {
        text-align: justify;
        margin-top: 12px;
    }

    .social-icon {
        display: inline-block;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        font-size: 20px;
        line-height: 35px;
        margin: 0 5px;
        transition: background-color 0.3s ease;
    }

    .social-icon.facebook {
        background-color: #3b5998;
        text-align: center;
        color: white;
    }

    .social-icon.twitter {
        background-color: #1da1f2;
        text-align: center;
        color: white;
    }

    .social-icon.google {
        background-color: #ea4335;
        text-align: center;
        color: white;
    }
    </style>



    <div class="limiter">
        <div class="container-login100" style="background-color: #DCDCDC;">
            <div
                style="width: 50%; margin: 0 auto; margin-top: 20px; background-color: #fff; padding: 60px 80px; border-radius: 7px;">
                <h3 style="margin-top: -10px; text-align: center; color: #008374; font-family: Arial, sans-serif;">
                    <strong>Welcome to FunOlympic 2023</strong>
                </h3>
                <p style="text-align: center; color: #808080;">Let's create an account for you!!</p><br>
                <form action="#" method="POST" name="register">
                    <div class="form-group" style="color: #808080;">
                        <label for="fullname"><strong>Full Name:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-user"></i>
                            <input type="text" id="fullname" placeholder="Enter your fullname" name="fullname" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>

                    <div class="form-group" style="color: #808080;">
                        <label for="username"><strong>Username:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-user"></i>
                            <input type="text" id="username" placeholder="Enter your username" name="username" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="email_address"><strong>Email:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email_address" placeholder="E-mail (example@gmail.com)" name="email"
                                required style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="phone_number"><strong>Phone Number:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-phone"></i>
                            <input type="text" id="phone_number" placeholder="Enter Phone Number" name="phone_number"
                                required style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="dob"><strong>Date of Birth (DOB):</strong></label>
                        <div class="input-container">
                            <i class="fas fa-calendar-alt"></i>
                            <input type="date" id="dob" name="dob" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="occupation"><strong>Occupation:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-briefcase"></i>
                            <input type="text" id="occupation" placeholder="Enter Occupation" name="occupation" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="country"><strong>Country:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-globe"></i>
                            <select id="country" name="country" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                <option value="" selected disabled>Select your Country</option>
                                <option value="Nepal">Nepal</option>
                                <option value="United States">United States (USA)</option>
                                <option value="United Kingdom">United Kingdom (UK)</option>
                                <option value="India">India</option>
                                <option value="China">China</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="gender"><strong>Gender:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-venus-mars"></i>
                            <select id="gender" name="gender" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                <option value="" selected disabled>Select your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="password"><strong>Password:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" placeholder="Password" name="password" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px;"
                                onkeyup="validatePassword()">
                        </div>
                        <div id="error-message" style="margin-top:5px;"></div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="usertype"><strong>User Type:</strong></label>
                        <div class="input-container">
                            <i class="fas fa-user-cog"></i>
                            <select id="usertype" name="role" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                <option value="" selected disabled>Select</option>
                                <option value="administrator">Administrator</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group submit-btn" class="social-icons">
                        <input type="submit" value="REGISTER" name="register"
                            style="background-color: #008374; color: white; padding: 10px 20px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">
                        <span style="margin: 0 10px;">Or</span>
                        <a href="https://www.facebook.com/home.php" class="social-icon facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/i/flow/login" class="social-icon twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-318657203%3A1687110829899402&continue=https%3A%2F%2Fmyaccount.google.com%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dgo-to-account-button&ifkv=Af_xneFDlV9ueGO5rZsG3qxeFwlpq7fSu5-bXZ0_Bc7o7vtqBhGBhZ42smZseGSEbbnU6MdCvzi_Yg&service=accountsettings&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="social-icon google"><i class="fab fa-google"></i></a>
                    </div>

                    <div class="already-have-account" style="position: absolute; bottom: 40;">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>

</body>

</html>