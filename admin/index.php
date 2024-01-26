<?php
//برسی لاگین شدن کاربر
session_start();
if(!isset($_SESSION['USER_NAME'])){
    //exit("please login to Access Admin!");
    exit(header("Location: ../login.html"));
}

?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>پنل کاربری</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
    <!-- Main Style -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Icon -->
    <link rel="stylesheet" href="../assets/fonts/line-icons.css">

    
    
    
    
    
    <link rel="stylesheet" href="admin.css">



  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <?php include '../header.html'; ?>  
      <!-- Navbar End -->

  </header>


      



      <section class="section-first">
            <div class="row m-0 bg-gray"  >
                <div class="col-12 col-md-3 container-left text-center p-0 ">
                    <ul class="navigation p-0">
                        <li class="li-item">
                            <a href="../admin/?page=newProject"
                                class="li-link">
                                ثبت پروژه جدید
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=listProject"
                            class="li-link">
                                لیست پروژه های ثبت شده شما
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=doneProject"
                            class="li-link">
                                 پروژه های خاتمه یافته
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=inprogressProject"
                            class="li-link">
                                 پروژه های در حال انجام
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=awaitingOfferProject"
                            class="li-link">
                                 پروژه های در انتظار 
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=listOffer"
                            class="li-link">
                                 لیست پیشنهادات برای شما
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=yourOfferResult"
                            class="li-link">
                                 نتایج درخواست های شما به دیگران
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=accountSetting" 
                            class="li-link">
                                تنظیمات حساب کاربری   
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=category" 
                            class="li-link">
                                دسته بندی   
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=comments" 
                            class="li-link">
                                نظرات   
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=contactusComments" 
                            class="li-link">
                                پیغام های ارتباط با ما   
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=sliderSetting" 
                            class="li-link">
                                تنظیمات اسلایدر سایت  
                            </a>
                        </li>
                        <li class="li-item">
                            <a href="../admin/?page=usersManagement" 
                            class="li-link">
                                مدیریت اعضا 
                            </a>
                        </li>
                        
                        <li class="li-item">
                            <a href="../logout.php" 
                            class="li-link">
                                خروج
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-9 container-right bg-primary-subtle p-0">
                    <?php
                        if(isset($_GET['page']))
                            $page = $_GET['page'];
                        else $page = "";
                            switch($page){
                                case "newProject" : include("newProject.php");break;
                                case "listProject" : include("listProject.php");break;
                                case "doneProject" : include("doneProject.php");break;
                                case "inprogressProject" : include("inprogressProject.php");break;
                                case "awaitingOfferProject" : include("awaitingOfferProject.php");break;
                                case "listOffer" : include("listOffer.php");break;
                                case "yourOfferResult" : include("yourOfferResult.php");break;
                                case "category" : include("category.php");break;
                                case "comments" : include("comments.php");break;
                                case "contactusComments" : include("contactusComments.php");break;
                                case "editKala" : include("editKala.php");break;
                                case "accountSetting" : include("accountSetting.php");break;
                                case "sliderSetting" : include("sliderSetting.php");break;
                                case "usersManagement" : include("usersManagement.php");break;
                                default : print(" به بخش مدیریت سایت خوش آمدید.از بخش منو ها یک گزینه را انتخاب کنید.  ");
                            }
                    ?>
                </div>
            </div>
        </section>

























      


    

    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <?php include '../footer.html'; ?>
     
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
    <script src="../assets/js/jquery-min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/jquery.nav.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/form-validator.min.js"></script>
    <script src="../assets/js/contact-form-script.min.js"></script>

   

  </body>
</html>
