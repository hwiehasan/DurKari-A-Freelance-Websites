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
    <link rel="stylesheet" href="assets/css/slider.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <?php include '/header.html'; ?>  
      <!-- Navbar End -->
      </header>
























<div class=" section-padding">
        <div >
          <div class="row">
            <div class="col-lg-24 col-md-12 col-sm-12 col-xs-12">
              <div class="contents ">
                    
                <!-- Slideshow container -->
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                
                <?php
                  $conn = mysqli_connect("localhost","root", "", "myshop");
                  mysqli_set_charset($conn , "utf8");
                  if($conn){
                      //join project table and category table for get category name
                      $query = "SELECT * FROM  slider ";
                      $result = mysqli_query($conn , $query);
                      
                      for ($i = 1; $i <= 3; $i++) {
                        if ($row = mysqli_fetch_array($result)) {


                            $sliderPic = $row['pic'];
                            $sliderDescription = $row['description'];
                            
                            print('
                            <div class="mySlides fade">
                            <div class="numbertext"> '.$i.' / 3</div>
                            <a href="https://github.com/hwiehasan"> <img src="'.$sliderPic.'" style="width:100%"> </a>
                            <div class="text">'.$sliderDescription.'</div>
                            </div>
                            
                            ');
                            
                        }
                      } 
                       
                    }
                ?>
              
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10095;</a>
                <a class="next" onclick="plusSlides(1)">&#10094;</a>
                </div>


                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>

              </div>
            </div>
            
          </div>
        </div>
      </div>














      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title">سایت دورکاری<br> برونسپاری پروژه و استخدام فریلنسر</h2>
                <p>بهترین فریلنسرها را برای انجام هر کاری به صورت آنلاین استخدام کنید. به انجام رساندن یک کار هرگز به این سادگی نبوده، متخصصین پیشنهادهای خود را ارسال می‌کنند تا کار را به بهترین گزینه بسپارید. 
                  حاصل کار را بررسی و در صورت رضایت ، پرداخت به فریلنسر را انجام دهید.</p>
                <div class="header-button">
                  <a href="/admin/?page=newProject" class="btn btn-common">ثبت پروژه جدید</i></a>
                  <a href="listprojectByCategory.php" class="btn btn-border video-popup">لیست پروژه ها</i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="assets/img/intro-mobile.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

   
    <!-- Header Area wrapper End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">خدمات ما</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">ثبت پروژه رایگان</a></h3>
                <p>بدون هیچ هزینه‌ای و از هر مکانی پروژه خود را سفارش دهید. </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-stats-up"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">۲% پاداش برونسپاری پروژه</a></h3>
                <p>با برونسپاری پروژه‌ها ۲% مبلغ پروژه را از دورکاری هدیه میگیرید. </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">دسترسی سریع به نیرو‌ی کار</a></h3>
                <p>امکان بررسی و مقایسه پیشنهادها و استخدام حرفه‌ای ترین فریلنسرها </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">حسن انجام کار</a></h3>
                <p>با استفاده از پرداخت امن دورکاری با خیال راحت پروژه‌ خود را برونسپاری کنید. </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
              <div class="icon">
                <i class="lni-mobile"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">پرداخت نهایی پس از رضایت شما</a></h3>
                <p>هزینه پروژه پیش از تایید نهایی نزد سیستم پرداخت امن دورکاری به امانت می‌ماند. </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">پشتیبانی سریع</a></h3>
                <p>پاسخگویی سریع مشکلات از طریق تلفن و چت آنلاین امکان پذیر است. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- About Section start -->
    <div id="stats" class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  <h2 class="section-title">آمار و ارقام دورکاری</h2>
                </div>









      <?php
      // برقراری اتصال به دیتابیس
      $conn = mysqli_connect("localhost","root", "", "myshop");
      mysqli_set_charset($conn , "utf8");
      if($conn){
        //join project table and category table for get category name
        $queryStats = "SELECT * FROM stats";

        $resultStats = mysqli_query($conn , $queryStats);
        
        
            $rowStats = mysqli_fetch_array($resultStats);
            $totalProject = $rowStats["totalProject"];
            $doneProject = $rowStats["doneProject"];
            $score = $rowStats["score"];
            $satisfiedCustomer = $rowStats["satisfiedCustomer"];
  
  
            // نمایش اطلاعات محصول در تگ HTML
            echo '
            <div class="content">
                  <div class="stats">
                    <div class="stat-item">
                      <h3> '.$totalProject.' پروژه</h3>
                      <p>تمامی پروژه ها تاکنون</p>
                    </div>
                    <div class="stat-item">
                      <h3>'.$doneProject.'</h3>
                      <p>پروژه‌های پایان یافته</p>
                    </div>
                    <div class="stat-item">
                      <h3>'.$score.'</h3>
                      <p>امتیاز از کارفرما</p>
                    </div>
                    <div class="stat-item">
                      <h3>'.$satisfiedCustomer.'%</h3>
                      <p>مشتریان خوشحال</p>
                    </div>
                  </div>
                  <a href="/aboutus.php" class="btn btn-common mt-3">کسب اطلاعات بیشتر درباره ما</a>
                </div>
            ';
          


        
    }

      $conn->close();
      ?>





                





              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <img class="img-fluid" src="assets/img/about/img-1.png" alt="" >
          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">دسته بندی خدمات</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">


            <div class="content-left">

    
              <?php 
                // دریافت لیست دسته های اصلی از دیتبایس
                $conn = mysqli_connect("localhost","root", "", "myshop");
                mysqli_set_charset($conn , "utf8");
                if($conn)
                {
                    $query = "select * from category order by categoryID asc";
                    $result = mysqli_query($conn, $query);
                    for ($i = 1; $i <= 3; $i++) {
                      if ($row = mysqli_fetch_array($result)) {
                        $categoryID = $row['categoryID'];
                        $categoryName = $row['categoryName'];
                        $categoryDescription = $row['categoryDescription'];
                        print('
                        
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                        <span class="icon">
                          <i class="lni-layers"></i>
                        </span>
                        <div class="text">
                          <h4><a href="listprojectByCategory.php?catID='.$categoryID.'"> '.$categoryName.' </a> </h4>
                          <p>  '.$categoryDescription.' </p>
                        </div>
                        </div>
                        
                        ');

                      }
                    }                
                }
              
              ?>

            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
              <img src="assets/img/feature/intro-mobile.png" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="content-right">

              <?php 
                // دریافت لیست دسته های اصلی از دیتبایس
                $conn = mysqli_connect("localhost","root", "", "myshop");
                mysqli_set_charset($conn , "utf8");
                if($conn)
                {
                    $query = "select * from category order by categoryID desc";
                    $result = mysqli_query($conn, $query);
                    for ($i = 4; $i <= 6; $i++) {
                      if ($row = mysqli_fetch_array($result)) {
                        $categoryID = $row['categoryID'];
                        $categoryName = $row['categoryName'];
                        $categoryDescription = $row['categoryDescription'];
                        print('
                        
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                        <span class="icon">
                          <i class="lni-layers"></i>
                        </span>
                        <div class="text">
                          <h4><a href="listprojectByCategory.php?catID='.$categoryID.'"> '.$categoryName.' </a> </h4>
                          <p>  '.$categoryDescription.' </p>
                        </div>
                        </div>
                        
                        ');

                      }
                    }                
                }
              
              ?>

              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->







    <!-- product Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">لیست پروژه ها</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">







      <?php

      
      // برقراری اتصال به دیتابیس
      $conn = mysqli_connect("localhost","root", "", "myshop");
      mysqli_set_charset($conn , "utf8");
      if($conn){
        //join project table and category table for get category name
        $query = "SELECT * FROM project p, category c WHERE p.category = c.categoryID and projectStatus = 0 order by projectID desc";

        $result = mysqli_query($conn , $query);
        
        for ($i = 1; $i <= 10; $i++) {
          if ($row = mysqli_fetch_array($result)) {
          
        
          
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
                <div class="contetn">
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


        
    }

      $conn->close();
      ?>















          
        </div>
      </div>
    </section>
    <!-- product Section End -->














    <!-- Contact Section Start -->
    <section id="contact" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">ارتباط با ما</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="contact-block">
              <form id="contactForm" action="contactus.php" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="نام شما" required data-error="نام خود را وارد کنید">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="ایمیل" id="email" class="form-control" name="email" required data-error="لطفا ایمیل خود را وارد کنید">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="موضوع" id="msg_subject" class="form-control" name="subject" required data-error="موضوع پیام را وارد کنید">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" id="message" placeholder="متن پیام شما" name="message" rows="7" data-error="لطفا توضیحات را وارد کنید" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-left">
                      <button class="btn btn-common" id="form-submit" type="submit">ارسال پیام</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d858.4219569579661!2d54.318253428052216!3d27.646110034781803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e56bbdb7501cdb3%3A0x542e648c13432329!2sLarestan%20Higher%20Education%20Complex%20-%20Building%202!5e0!3m2!1sen!2s!4v1703701317307!5m2!1sen!2s" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->




























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


    <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 1000); // تغییر تصویر هر ۲ ثانیه
}

function plusSlides(n) {
  showSlidesByIndex(slideIndex + n);
  
}

function currentSlide(n) {
  showSlidesByIndex(n);
}

function showSlidesByIndex(n) {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  } else {
    slideIndex = n;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
  </script>

   

  </body>
</html>
