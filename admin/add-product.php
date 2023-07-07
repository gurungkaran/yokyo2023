<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else
{
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Main Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <!-- navbar start -->
   <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:darkblue;">
       <a class="navbar-brand" href="main.php">Dashboard</a>
       <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
           aria-expanded="false" aria-label="Toggle navigation"></button>
       <div class="collapse navbar-collapse" id="collapsibleNavId">
           <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               
               
           </ul>
           <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="text-transform:uppercase"><?php echo $_SESSION['username']; ?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
           </ul>
           
           
       </div>
   </nav>
   <!-- navbar end -->
    <!-- dashboard start -->
    <div class="container-fluid" style="padding:20px">
    <div class="row">
        <div class="col-md-4" style="background-color:lightblue;">
            <h2 class="display-4 text-center">Dashboard</h2>
            <a href="add-post.php" class="btn btn-danger btn-block btn-lg">Add New Post</a>
            <a href="add-product.php" class="btn btn-danger btn-block btn-lg">Add New Item</a>
            <a href="view-post.php" class="btn btn-danger btn-block btn-lg">View All Post</a>
            <a href="view-booking.php" class="btn btn-danger btn-block btn-lg">View Bookings</a>
            <a href="view-consumer.php" class="btn btn-danger btn-block btn-lg">View Consumers</a>
            <a href="view-comment.php" class="btn btn-danger btn-block btn-lg">View Comments</a>
            <a href="upload-photo.php" class="btn btn-danger btn-block btn-lg">Update Gallery</a>
            <a href="upload-video.php" class="btn btn-danger btn-block btn-lg">Upload Video</a>
        </div>
        <div class="col-md-8">
            <h2 class="display-4">Add Item Product</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Write title here" aria-describedby="helpId" required>
                </div>
                <div class="form-group">
                  <label for="content">Price:</label>
                  <input type="text" name="content" id="title" class="form-control" placeholder="Write title here" aria-describedby="helpId" required>
                </div>
                <div class="form-group">
                  <label for="select">Select Image:</label>
                  <input type="file" class="form-control-file" name="image" id="image" placeholder="Upload Image" aria-describedby="fileHelpId" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg" name="submit">Add Product</button>
                <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
            </form>
            <?php
            if(isset($_POST['submit']))
            {
                include '../config/connection.php';
                $title=$_POST['title'];
                $content=$_POST['content'];
                $image_name=$_FILES['image']['name'];
                $image_type=$_FILES['image']['type'];
                $image_tmp=$_FILES['image']['tmp_name'];
                $query="insert into orders(title,content,image)values('$title','$content','$image_name')";
                $run=mysqli_query($conn,$query);
                move_uploaded_file("$image_tmp","../assets/product/$image_name");
                if($run)
                {
                    echo "<script>window.alert('Product Added Successfully!')</script>";
                }
                else
                {
                    echo "<script>window.alert('Error Found!')</script>";
                }
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
