<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else
{
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
        <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">Upload Video</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="select" style="font-size: 18px;">Select Video:</label>
                <br><br>
                <input type="file" class="form-control-file" style="font-size: 18px; padding: 7px 1px;" name="video"
                    id="video" placeholder="Upload Video" aria-describedby="fileHelpId">
            </div>
            <button type="submit" class="btn btn-primary" name="submit"
                style="font-size: 20px; padding: 10px; width: 100px;">Upload</button>
            <button type="reset" class="btn btn-danger"
                style="font-size: 20px; padding: 10px; width: 100px;">Cancel</button>

        </form>
        <?php
            if(isset($_POST['submit']))
            {
                $video_name=$_FILES['video']['name'];
                $video_type=$_FILES['video']['type'];
                $video_tmp=$_FILES['video']['tmp_name'];
                move_uploaded_file("$video_tmp","../assets/video/$video_name");
                echo "File uploaded successfully!"."<br>";
                echo "$video_name";
            }
            ?>
        </div>
        </div>
        </div>
        <!-- dashboard end -->
</body>

</html>
<?php
}
?>