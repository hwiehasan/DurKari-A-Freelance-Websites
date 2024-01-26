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

    <link rel="stylesheet" href="assets/css/listproject.css">
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
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"> لیست پروژه ها </h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
          <div>
            <form action="listprojectByCategory.php" method="POST">
              <div class="search-container">
                <input type="text" id="search-input" name="querytext" placeholder="جستجو...">
                <button type="submit" id="search-button" >جستجو</button>
              </div>
            </form>
          </div>
          
        </div>
        <div class="row">







      <?php
      if(isset($_POST['querytext']))
      {
        $queryText = $_POST['querytext'];
        $query = "SELECT * FROM project p, category c WHERE p.category = c.categoryID AND (
          p.projectID LIKE '%$queryText%' OR
          p.name LIKE '%$queryText%' OR
          p.description LIKE '%$queryText%' OR
          c.categoryName LIKE '%$queryText%'
        ) AND projectStatus = 0 order by projectID desc";


      }
      else if(isset($_GET['catID']))
      {
        $catID = $_GET['catID'];
        $query = "SELECT * FROM project p, category c WHERE p.category = c.categoryID and p.category = $catID and projectStatus = 0 order by projectID desc";
      }
      else
          $query = "SELECT * FROM project p, category c WHERE p.category = c.categoryID and projectStatus = 0 order by projectID desc";
      // برقراری اتصال به دیتابیس
      $conn = mysqli_connect("localhost","root", "", "myshop");
      mysqli_set_charset($conn , "utf8");
      if($conn){
        //join project table and category table for get category name
        

        $result = mysqli_query($conn , $query);
        
        while($row = mysqli_fetch_array($result)){
            
            $projectID = $row["projectID"];
            $id = $row["projectID"];
            $title = $row["name"];
            $category = $row["categoryName"];
            $description = $row["description"];
            $image = $row["image"];
            $price = $row["price"];
  
  
            // نمایش اطلاعات محصول در تگ HTML
            echo '
            <div class="col-lg-6 col-md-12 col-xs-12">
              <!--  Item Starts -->
              <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
                <div class="team-img">
                  <img class="img-fluid" src="'.$image.'" alt="">
                </div>
                <div class="contetn" style="height: 300px;">
                  <div class="info-text">
                    <h3><a href="/project.php?projectID='.$id.'">'.$title.'</a></h3>
                    <p>دسته بندی: '.$category.'</p>
                  </div>
                  <p>هزینه: '.$price.' تومان</p>
                  
                  <p style="max-height: 2em; overflow: hidden;">توضیحات: '.$description.'</p>
                  
                  <a href="/project.php?projectID='.$id.'" class="btn btn-common mt-3">اطلاعات بیشتر</a>
              
                </div>
              </div>
              <!--  Item Ends -->
            </div>
            ';
          }
        }


        
    

      $conn->close();
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
