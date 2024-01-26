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

    <?php session_start(); ?>

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <?php include '/header.html'; ?>  
      <!-- Navbar End -->
    </header>



      






       <!-- product Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"> پروژه </h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">







      <?php

      $projectID = $_GET['projectID'];
      // برقراری اتصال به دیتابیس
      $conn = mysqli_connect("localhost","root", "", "myshop");
      mysqli_set_charset($conn , "utf8");
      if($conn){
        //join project table and category table for get category name
        $query = "SELECT * FROM project p, category c WHERE p.category = c.categoryID and projectID = $projectID";

        $result = mysqli_query($conn , $query);
        
        if(!isset($_SESSION['USER_NAME'])){
            $row = mysqli_fetch_array($result);

            $id = $row["projectID"];
            $title = $row["name"];
            $category = $row["categoryName"];
            $description = $row["description"];
            $image = $row["image"];
            $date = $row["submitDate"];
            $price = $row["price"];
  
  
            // نمایش اطلاعات محصول در تگ HTML
            echo '
            <div class="col-lg-12 col-md-12 col-xs-12">
              <!--  Item Starts -->
              <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
                <div class="team-img">
                  <img class="img-fluid" src="'.$image.'" alt="">
                </div>
                <div class="contetn" style="height: 500px;">
                  <div class="info-text">
                    <h3><a href="#">'.$title.'</a></h3>
                    <p>دسته بندی: '.$category.'</p>
                  </div>
                  <p>هزینه: '.$price.' تومان</p>
                  <p>تاریخ ثبت: '.$date.'</p>
                  
                  <p>توضیحات: '.$description.'</p>
                  
                    <a href="/login.html" class="btn btn-common mt-3">ورود به حساب کاربری جهت درخواست</a>
              
                </div>
              </div>
              <!--  Item Ends -->
            </div>
            ';
          

        }

        else{

            //اگر کاربر لاگین شده بود

            //چک کنم ببینم قبلا درخواست داده یا نه
            $freelancerID = $_SESSION['USER_ID'];
            $queryCheck = "SELECT * FROM request WHERE freelancerID = $freelancerID and projectID = $projectID";
            $resultCheck = mysqli_query($conn , $queryCheck);
            if(mysqli_fetch_array($resultCheck))
            {
              //کاربر قبلا درخواست ثبت کرده بوده
            $row = mysqli_fetch_array($result);
            $id = $row["projectID"];
            $title = $row["name"];
            $category = $row["categoryName"];
            $description = $row["description"];
            $image = $row["image"];
            $price = $row["price"];
  
  
            // نمایش اطلاعات محصول در تگ HTML
            echo '
            <div class="col-lg-12 col-md-12 col-xs-12">
              <!--  Item Starts -->
              <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
                <div class="team-img">
                  <img class="img-fluid" src="'.$image.'" alt="">
                </div>
                <div class="contetn" style="height: 500px;">
                  <div class="info-text">
                    <h3><a href="#">'.$title.'</a></h3>
                    <p>دسته بندی: '.$category.'</p>
                  </div>
                  <p>هزینه: '.$price.' تومان</p>
                  
                  <p>توضیحات: '.$description.'</p>
                  <div class="buttons-wrapper">
                  <a href="/remove-request-for-project.php?projectID='.$projectID.'" class="btn btn-common mt-3">حذف درخواسته ارسال شده</a>
                </div>
              </div>
              <!--  Item Ends -->
            </div>
            ';




              




            }
            else{
              //کاربر تابحال درخواستی ثبت نکرده
            $row = mysqli_fetch_array($result);
            $id = $row["projectID"];
            $title = $row["name"];
            $category = $row["categoryName"];
            $description = $row["description"];
            $image = $row["image"];
            $price = $row["price"];
  
  
            // نمایش اطلاعات محصول در تگ HTML
            echo '
            <div class="col-lg-12 col-md-12 col-xs-12">
              <!--  Item Starts -->
              <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
                <div class="team-img">
                  <img class="img-fluid" src="'.$image.'" alt="">
                </div>
                <div class="contetn" style="height: 500px;">
                  <div class="info-text">
                    <h3><a href="#">'.$title.'</a></h3>
                    <p>دسته بندی: '.$category.'</p>
                  </div>
                  <p>هزینه: '.$price.' تومان</p>
                  
                  <p>توضیحات: '.$description.'</p>
                  <div class="buttons-wrapper">
                  <a href="/submit-request-for-project.php?projectID='.$projectID.'" class="btn btn-common mt-3">ارسال درخواست</a>
                </div>
              </div>
              <!--  Item Ends -->
            </div>
            ';
              






            }





            
        

        }

        
    }

      $conn->close();
      ?>

      <!-- قسمت امکان ارسال نظر -->
    <div class="comment-section">
    <!-- نمایش نظرات موجود -->
    <h4>نظرات</h4>
    <?php
    
    $conn = mysqli_connect("localhost","root", "", "myshop");
    mysqli_set_charset($conn , "utf8");
    if($conn)
    {
      $query = "SELECT * FROM comment where commentProjectID = $projectID and allow = 1";
      $result = mysqli_query($conn , $query);
      
      // نمایش نظرات موجود
        while( $row = mysqli_fetch_array($result) ) {
          echo '
          <div class="single-comment" style="text-align:right;">
            <h5>'.$row['commentSenderName'].':</h5>
            <p>'.$row['commentText'].'</p>
          </div>
          ';
        }

    }

    if(!isset($_SESSION['USER_NAME']))
    {
      print('<a href="/login.html" class="btn btn-common mt-3">برای ثبت نظر ابتدا وارد حساب کاربری خود شوید.</a>');
    }
    else{
      print('
      <!-- فرم ارسال نظر -->
      <form action="submit-newComment.php" method="POST">
        <input type="hidden" name="projectID" value='.$projectID.'>
        <textarea name="commentText" placeholder="نظر خود را وارد کنید" required cols="170" rows="10"></textarea>
        <button type="submit" class="btn btn-common mt-3">ارسال نظر</button>
      </form>
      </div>
    <!-- پایان قسمت امکان ارسال نظر -->
      ');
    }


    
    ?>

    















          
        </div>
      </div>
    </section>
    <!-- product Section End -->















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
