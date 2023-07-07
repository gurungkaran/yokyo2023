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
<!-- dashboard start -->
<?php include 'admin_header.php'; ?>

<section class="dashboard">
    <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">User Comments</h1>
    <div1 class="col-md-12">
        <div1>
            <table style="font-size: 15px; border-collapse: collapse; width: 100%; border: 1px solid #000;">
                <thead style="background-color: #008374;; color: white;">
                    <tr>
                        <th>Comment ID</th>
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Rate</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <?php
                include '../config/connection.php';
                $query="select * from comment";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                {
                    $a=$row['id'];
                    $b=$row['user'];
                    $c=$row['date'];
                    $d=$row['comment'];
                    $e=$row['rate'];
                ?>
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a class="btn btn-primary"
                                href="comment-edit.php?id=<?php echo $a; ?>&user=<?php echo $b; ?>&date=<?php echo $c; ?>&comment=<?php echo $d; ?>&rate=<?php echo $e; ?>">Edit</a>
                        </td>
                        <td><a class="btn btn-danger" href="comment-delete.php?Del=<?php echo $a; ?>">Delete</a></td>

                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
            </div>
            <!-- dashboard end -->
            </body>

</html>
<?php
}
?>