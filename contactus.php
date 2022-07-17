<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("form").submit(function(event){
      event.preventDefault();
      var name = $("#name").val();
      var email = $("#email").val();
      var subject = $("#subject").val();
      var message = $("#message").val();
      var submit = $("#submit").val();
      $(".form-message").load("forms/contact.php", {

        name:name,
        email:email,
        subject:subject,
        message:message,
        submit:submit
      });

  });
});

</script>

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-end">

    <h1 class="logo me-auto me-lg-0"><a href="index.php">GST<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="whoweare.php">Who We Are</a></li>
              <li><a href="whatweoffer.php">What We Offer</a></li>
              <li><a href="team.php">Meet The Team</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="energy.php">Breakthrough Energy</a></li>
              <li><a href="crypto.php">Crypto Asset Management & Insurance</a></li>
              <li><a href="stocks.php">Financial Stocks</a></li>
            </ul>
          </li>
           <li><a class="nav-link scrollto" href="howwetrade.php">How We Trade & Make Profits</a></li>
          <li><a class="nav-link scrollto" href="contactus.php">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="faq.php">FAQ</a></li>
          <li><a href="dashboard/login.php" class="nav-link scrollto">Log in<i class="bi bi-box-arrow-in-right"></i></a></li>
          <li> <a href="dashboard/register.php" class="nav-link scrollto">Get Started<i class="bi bi-door-open"></i></a></li>
        
        
        </ul>




        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
          <div class="row" style="justify-content:space-evenly;">
              <div class="col-lg-4">
                  <img src="assets/img/logo.jpg" class="img-fluid" style="margin-top:30px;">
                </div>
                <div class="col-lg-8">
                <div class="section-title">
        </div>

        <div class="row mt-5" align="center">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Rdpt Robert Schuman 9, 1040 Bruxelles, Belgium</p>
              </div>
              <br>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <a class="cta-btn" href="mailto:customerservice@globalseedtrust.org"><button class="btn btn-primary">Email</button></a>
              </div>
              <br>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <a class="cta-btn" href="tel:32460221494"><button class="btn btn-primary">Call</button></a>
              </div>
              <br>
              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp:</h4>
                <a class="cta-btn" href="https://api.whatsapp.com/send?phone=32460221494"><button class="btn btn-primary">Whatsapp Us</button></a>
              </div>
              <br>
              <div class="phone">
                <i class="bi bi-telegram"></i>
                <h4>Telegram:</h4>
                <a class="cta-btn" href="https://t.me/+HZ-ryqMBe0E0MDVh" ><button class="btn btn-primary">Telegram Us</button></a>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
              <h3 align="center" style="color:green;">Subscribe To Our Newsletter</h3>
              <hr>

            <form action="forms/contact.php" method="post" id="form" name="form" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              <div class="text-center">
                  <br><button type="submit" class="btn btn-success" id="submit" name="submit">Subscribe</button></div>
              <h4 class="form-message"></h4>
            </form>

          </div>

        </div>

                </div>



            </div>
        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>GST<span>.</span></h3>
              <p>
                Rdpt Robert Schuman 9 <br>
                1040,Bruxelles, Belgium.<br><br>
                <strong>Phone:</strong> +32460221494<br>
                <strong>Email:</strong>
                <br>customerservice@globalseedtrust.org<br>
                 <br>
                 <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp:  +32 460221494</h4>
               
              </div>
               <div class="phone">
                <i class="bi bi-telegram"></i>
                <h4>Telegram:</h4>
                 <a class="cta-btn" href="https://t.me/+HZ-ryqMBe0E0MDVh" ><button class="btn btn-primary">Telegram Us</button></a>
              </div>
              
              </p>
              
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="whoweare.php">Who We Are</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="whatweoffer.php">What We Offer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="faq.php">Frequently Asked Questions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactus.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="energy.php">Breakthrough Energy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="crypto.php">Crypto Asset Management & Insurance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="stocks.php">Financial Stocks</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>GST 2022</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>