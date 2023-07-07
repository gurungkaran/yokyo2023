<!-- header section starts -->
<header class="header">
    <section class="flex">
    <a href="main.php" class="logo">Yokyo.</a>
        <form action="search_page.php" method="post" class="search-form">
            <input type="text" name="search" placeholder="search here..." required maxlength="100">
            <button type="submit" class="fas fa-search" name="search_btn"></button>
        </form>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun" onclick="toggleTheme()"></div>
        </div>
    </section>
</header>

<script>
  function toggleTheme() {
    var body = document.getElementsByTagName('body')[0];
    body.classList.toggle('dark-theme');
  }
</script>

<style>
body {
    transition: background-color 0.4s ease;
  }
  .dark-theme {
    background-color: #009d8b;
    color: #008374;
  }
</style>

<!-- header section ends -->

<!-- side bar section starts  -->
<div class="side-bar">

    <div class="close-side-bar">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
        <img src="../assets/images/logo.jpg">
        <a href="main.php" class="btn" style= "text-transform: uppercase; font-weight: bold;"><?php echo $_SESSION['username']; ?></a>
    </div>

    <nav class="navbar">
        <a href="main.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="view-users.php"><i class="fas fa-user"></i><span>Users</span></a>
        <a href="view-post.php"><i class="fas fa-graduation-cap"></i><span>News</span></a>
        <a href="view-comment.php"><i class="fas fa-comment"></i><span>Comments</span></a>
        <a href="../index.php" onclick="return confirm('logout from this website?');"><i
                class="fas fa-right-from-bracket"></i><span>logout</span></a>
    </nav>

</div>

<!-- side bar section ends -->