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

    <!-- Favicons -->
    <link href="../assets/img/home/logo.png" rel="icon">

    <title>FunOlympic 2023</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
        margin-bottom: 15px;
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
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #008374;">
        <a class="navbar-brand" href="main.php">Yokyo.</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        </div>
    </nav>
    <!-- navbar end -->
    <!-- dashboard start -->
    <div class="limiter">
        <div class="container-login100" style="background-color: #DCDCDC;">
            <div
                style="width: 50%; margin: 0 auto; margin-top: 20px; background-color: #fff; padding: 50px 30px; border-radius: 7px;">
                <h3 style="margin-top: -10px; text-align: center; color: #008374; font-family: Arial, sans-serif;">
                    <strong>UPDATE COMMENT</strong>
                </h3>
                <form action="update-comment.php" method="get" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ID">ID:</label>
                        <input type="text" name="id1" id="id1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['id']; ?>">
                    </div>
                    <!-- Username -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username1" id="username1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['user']; ?>">
                    </div>
                    <!-- Comment -->
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <input type="text" name="comment1" id="comment1" class="form-control" aria-describedby="helpId"
                            value="<?php echo $_GET['comment']; ?>">
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="text" name="date1" id="date1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['date']; ?>">
                    </div>
                    <!-- Rate -->
                    <div class="form-group">
                        <label for="rate">Rate:</label>
                        <input type="text" name="rate1" id="rate1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['rate']; ?>">
                    </div>
                    <!-- submit button -->
                    <button type="submit" class="btn btn-info btn-lg" name="submit">Update Comment</button>
                </form>
            </div>
        </div>
    </div>
    <!-- dashboard end -->
</body>

</html>
<?php
}
?>