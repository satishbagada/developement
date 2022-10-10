<?php
$mainurl="http://localhost/tops/crms/";
$baseurl="http://localhost/tops/crms/assets/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>online campuse requirement -</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $baseurl;?>img/favicon.png" rel="icon">
  <link href="<?php echo $baseurl;?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"> -->

  <!-- Vendor CSS Files -->
  <link href="<?php echo $baseurl;?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl;?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet">

</head>

<body>
<script src="<?php echo $baseurl;?>vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo $baseurl;?>vendor/aos/aos.js"></script>
  <script src="<?php echo $baseurl;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo $baseurl;?>vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo $baseurl;?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $baseurl;?>js/main.js"></script>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="<?php echo $mainurl;?>">CRMS@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1  9157881450</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/919157881450" target="_blank"><i class="bi bi-whatsapp"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo $mainurl;?>">CRMS<span>.</span></a></h1>
     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo $mainurl;?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $mainurl;?>about_us">About</a></li>

          <li><a class="nav-link scrollto" href="<?php echo $mainurl;?>services">Services</a></li>

          <li><a class="nav-link scrollto " href="<?php echo $mainurl;?>">Account</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $mainurl;?>team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php  echo $mainurl;?>login">Sign In!</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Sign In!</a></li>
                  <li><a href="<?php echo $mainurl;?>create_account">Create account</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  
                </ul>
              </li> -->

              <li><a href="<?php echo $mainurl?>create_account">SignUp !</a></li>
              <li><a href="#">University</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo $mainurl;?>contact_us">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  