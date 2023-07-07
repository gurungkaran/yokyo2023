<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit(); // Added exit() to stop executing the rest of the code
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicons -->
    <link href="../assets/img/home/logo.png" rel="icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunOlympic 2023</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../assets/css/admin_style.css">

</head>

<body>
    <?php include 'admin_header.php'; ?>

    <section class="dashboard">
        <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">Upload Games</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="select" style="font-size: 18px;">Select Image:</label>
                <br><br>
                <input type="file" class="form-control-file" style="font-size: 18px; padding: 7px 1px;" name="image"
                    id="image" placeholder="Upload Image" aria-describedby="fileHelpId">
            </div>
            <button type="submit" class="btn btn-primary" name="submit"
                style="font-size: 20px; padding: 10px; width: 100px;">Upload</button>
            <button type="reset" class="btn btn-danger"
                style="font-size: 20px; padding: 10px; width: 100px;">Cancel</button>

        </form>
        <?php
                    if (isset($_POST['submit'])) {
                        $image_name = $_FILES['image']['name'];
                        $image_type = $_FILES['image']['type'];
                        $image_tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($image_tmp, "../assets/img/$image_name");
                        echo "File uploaded successfully!" . "<br>";
                        echo "<img src='../assets/img/$image_name' width='300px'>";
                    }
                    ?>
        </div>
        </div>
    </section>
</body>

</html>