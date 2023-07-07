<?php 
session_start();
include '../config/connection.php';
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunOlympic 2023</title>

     <!-- Favicons -->
    <link href="../assets/img/home/logo.png" rel="icon">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../assets/css/admin_style.css">

</head>

    <?php include 'admin_header.php'; ?>

    <section class="dashboard">

        <h1 class="heading">dashboard</h1>

        <div class="box-container">

            <div class="box">
                <?php
                 include '../config/connection.php';
                 $query = "SELECT * FROM users";
                 $result = mysqli_query($conn, $query);
                 if ($result) {
                     $rowcount = mysqli_num_rows($result);
                     echo "<h1><span style='font-size: 20px; color: #808080;'>TOTAL USERS:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                 }
             ?>
                <p>register users details</p>
                <a href="view-users.php" class="btn">Manage Users</a>
            </div>

            <div class="box">
            <?php 
                include '../config/connection.php';
                $query="select * from comment";
                $result=mysqli_query($conn,$query);
                if($result)
                {
                    $rowcount=mysqli_num_rows($result);
                    echo "<h1><span style='font-size: 20px; color: #808080;'>TOTAL COMMENTS:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                }
                ?>
                <p>view user comments</p>
                <a href="view-comment.php" class="btn">Manage comments</a>
            </div>

            <div class="box">
            <?php 
                include '../config/connection.php';
                $query="select * from posts";
                $result=mysqli_query($conn,$query);
                if($result)
                {
                    $rowcount=mysqli_num_rows($result);
                    echo "<h1><span style='font-size: 20px; color: #808080;'>TOTAL POSTS:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                }
                ?>
                <p>view contents</p>
                <a href="view-post.php" class="btn">Manage News</a>
            </div>

            <div class="box">
            <img src="../assets/images/trophy.png" width="40">
                <p>update posts</p>
                <a href="add-post.php" class="btn">Add New Posts</a>
            </div>

            <div class="box">
            <img src="../assets/images/upload.png" width="40">
                <p>games list</p>
                <a href="upload-photo.php" class="btn">Upload Games</a>
            </div>

            <div class="box">
            <img src="../assets/images/v.png" width="40">
                <p>live broadcast</p>
                <a href="upload-video.php" class="btn">Upload Videos</a>
            </div>

        </div>

    </section>


    <?php include 'footer.php'; ?>
</html>
<?php
}
?>