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
      <?php include '/header.html'; ?>  
    </header>




      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title"> درباره ما </h2>
                <p>ما در دورکاری به عنوان یک سرویس برونسپاری پروژه و استخدام فریلنسر فعالیت می‌کنیم. هدف ما ایجاد ارتباط بین کارفرماها و فریلنسرهای حرفه‌ای است تا کارها به بهترین شکل انجام شود.</p>
                <p>در دورکاری، شما میتوانید بهترین فریلنسرها را برای انجام هر کاری به صورت آنلاین استخدام کنید. برخی از خدماتی که ما ارائه می‌دهیم عبارتند از:</p>
                <p>برونسپاری پروژه</p>
                <p>استخدام فریلنسر</p>
                <p>خدمات متنوع</p>
                <p>ما به ارائه خدمات با کیفیت و حسن انجام کار تمرکز داریم. همچنین، پرداخت نهایی به فریلنسر پس از رضایت شما انجام میشود و از سیستم پرداخت امن دورکاری استفاده می‌کنیم.</p>
                <p>در صورت داشتن هرگونه سوال یا نیاز به راهنمایی بیشتر، میتوانید با ما تماس بگیرید. اطلاعات تماس ما در پایین صفحه قابل مشاهده است.</p>
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

   

  </body>
</html>
