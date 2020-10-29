<?php 
include("path.php"); 
include(ROOT_PATH . "/app/database/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!---Font Awesome-->
  <script src="https://kit.fontawesome.com/e21174bd33.js" crossorigin="anonymous"></script>
<!---Google Fonts--->
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
<!---CSS--->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Blog</title>
</head>

<body>

<!--- HEADER ---> 
  <?php include(ROOT_PATH . "/app/includes/header.inc.php"); ?>
<!--- // HEADER --->

<!--- MESSAGES --->
  <?php include(ROOT_PATH . "/app/includes/messages.inc.php"); ?>
<!--- // MESSAGES --->


<!---PAGE WRAPPER--->
  <div class="page-wrapper">

      <!---POST SLIDER-->
      <div class="post-slider">
        <h1 class="slider-title">Trending Posts</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>

          <div class="post-wrapper">

            <div class="post">
              <img src='assets/images/1.png' alt="" class="slider-image">
              <div class="post-info">
                <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
                <i class="far fa-user">Marina Bg</i>
                &nbsp;
                <i class="far fa-calendar">8 Martie 2019</i>
              </div>
            </div>

            <div class="post">
              <img src='assets/images/2.png' alt="" class="slider-image">
              <div class="post-info">
                <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
                <i class="far fa-user">Marina Bg</i>
                &nbsp;
                <i class="far fa-calendar">8 Martie 2019</i>
              </div>
            </div>

            <div class="post">
              <img src='assets/images/3.png' alt="" class="slider-image">
              <div class="post-info">
                <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
                <i class="far fa-user">Marina Bg</i>
                &nbsp;
                <i class="far fa-calendar">8 Martie 2019</i>
              </div>
            </div>

            <div class="post">
              <img src='assets/images/4.png' alt="" class="slider-image">
              <div class="post-info">
                <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
                <i class="far fa-user">Marina Bg</i>
                &nbsp;
                <i class="far fa-calendar">8 Martie 2019</i>
              </div>
            </div>

            <div class="post">
              <img src='assets/images/5.png' alt="" class="slider-image">
              <div class="post-info">
                <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
                <i class="far fa-user">Marina Bg</i>
                &nbsp;
                <i class="far fa-calendar">8 Martie 2019</i>
              </div>
            </div>

          </div>

      </div>

      <!--- // POST SLIDER-->

      <!---CONTENT SECTION-->
      <div class="content clearfix">

      <!---MAIN CONTENT--->
        <div class="main-content">
          <h1 class="recent-post-title">Recent Posts</h1>

          <div class="post clearfix">
            <img src="assets/images/1.png" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="single.php">Love will always win no mather what</a></h2>
              <i class="far fa-user">Marina Bg</i>
              &nbsp;
              <i class="far fa-calendar">11 Martie 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="single.php" class="btn read-more">Read More</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/images/2.png" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="single.php">Love will always win no mather what</a></h2>
              <i class="far fa-user">Marina Bg</i>
              &nbsp;
              <i class="far fa-calendar">11 Martie 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="single.php" class="btn read-more">Read More</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/images/3.png" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="single.php">Love will always win no mather what</a></h2>
              <i class="far fa-user">Marina Bg</i>
              &nbsp;
              <i class="far fa-calendar">11 Martie 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="single.php" class="btn read-more">Read More</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/images/4.png" alt="" class="post-image">
            <div class="post-preview">
              <h2><a href="single.php">Love will always win no mather what</a></h2>
              <i class="far fa-user">Marina Bg</i>
              &nbsp;
              <i class="far fa-calendar">11 Martie 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="single.php" class="btn read-more">Read More</a>
            </div>
          </div>

        </div>
      <!--- // MAIN CONTENT--->

      <!---SIDEBAR--->

        <div class="sidebar">
          <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.html" method="POST">
              <input type="text" name="search-term" class="text-input" placeholder="Search...">
            </form>
          </div>

          <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Quotes</a></li>
              <li><a href="#">Fiction</a></li>
              <li><a href="#">Motivation</a></li>
              <li><a href="#">Inspiraton</a></li>
              <li><a href="#">Life Lessons</a></li>
            </ul>

          </div>
      <!--- // SIDEBAR--->
      <!---// CONTENT SECTION-->
        </div>
      </div>
  </div>
<!--- // PAGE WRAPPER--->  

<!--- FOOTER--->
  <?php include(ROOT_PATH . "/app/includes/footer.inc.php"); ?>
<!--- // FOOTER--->

  <!-----JQUERY------>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!---SLICK CAROUSEL--->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-----CUSTOM SCRIPT ------>
  <script src="assets/js/scripts.js"></script>
</body>
</html>