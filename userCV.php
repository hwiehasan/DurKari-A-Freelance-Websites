<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>دورکاری</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">

    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <?php include '/header.html'; ?>  
      <!-- Navbar End -->
  </header>




      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title"> رزومه کاربر</h2>

                <?php
                //session_start();
                $link = mysqli_connect("localhost","root","","myshop");
                mysqli_set_charset($link, "utf8mb4");
                if(!$link)
	                exit("<p>اتصال به پایگاه داده با خطا مواجه شد !</p>");
	
                $userID = $_GET['userID']; 	
                $query = "SELECT id , name , username , email , phone , cv , profileimage FROM `user` where id = $userID";
                // اجرای کوئری در پایگاه داده - ذخیره ی نتیجه در یک متغیر
                $result = mysqli_query($link , $query); 
                $userInfo = mysqli_fetch_array($result);
                mysqli_close($link);
                ?>



                
            

                <p>
                <label for="username">نام کاربری :</label>
                <p><?php print($userInfo['username']); ?></p>
                </p>

                <p>
                نام و نام خانوادگی :                
                <p><?php print($userInfo['name']); ?></p>
                </p>

                <p>
                ایمیل:
                <p><?php print($userInfo['email']); ?></p>
                </p>

                <p>
                موبایل:
                <p><?php print($userInfo['phone']); ?></p>
                </p>

                <p>
                رزومه:<br/>
                <p>
                <?php print($userInfo['cv']); ?>
                </p >
                </p>
                
            
            
            
            
            </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="<?php print($userInfo['profileimage']); ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

      


    

    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <?php include '/footer.html'; ?>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>

   

  </body>
</html>
