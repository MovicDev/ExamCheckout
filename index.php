<!DOCTYPE html>
<html lang="en">
	<?php 
ini_set('display_errors','0');
session_start();
session_start();
include "connect_to_mysqli.php";

?>
	<style>
		.cont{
			border: 1px solid #D1D1D1;
		}
	</style>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ExamLord - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.8.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">ExamLord</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>

   
          <li><a href="admin.php" class="getstarted">Admin Panel</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets/img/slide/slide-1.webp" class="d-block w-100" style="min-height: 100vh;" alt="...">
      <div class="carousel-caption">
        <h1 style="color: red; text-shadow:  1px 1px  white;">WAEC</h1>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img/slide/images - 2022-01-25T112525.110.jpeg" style="min-height: 100vh;" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h1 style="color: red; text-shadow:  1px 1px  white;">JUPEB</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/slide/download.jfif" class="d-block w-100" style="min-height: 100vh;" alt="...">
      <div class="carousel-caption ">
        <h1 style="color: red; text-shadow:  1px 1px  white;">NECO</h1>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
		
		 <div class="container cont">

        <div class="row">
          <div class="col-lg-12">
			</div>
              <div class="row exam">
                <div class="col-lg-12">
			<center><div class="bam"><h1>EXAMRUNS CONTACTS<br><font style="color: #5fcf80"><i class="bx bxl-whatsapp"></i></font><font style="color: red">09036015080</font></i>   || <font style="color: #5fcf80"><i class="bx bxl-shopify"></i></font><br>+2349036015080</h1></div>
				  </div></center>
			
		  </div>
		</div>
		
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
			</div>
              <div class="row">
              <center> <div class="col-lg-12"><h3><?php $date = date('Y-m-d l:H:i:s:a');
			echo "$date";
			
				  ?></div></center> </h3><br>
		<center><form action="login.php" method="post">
			<div class="form-group">
				<input type="text" name="id"class="form-control" id="id" placeholder="Enter your Pin Here" style="width: 300px;" required><button class="btn btn-light" type="submit" name="submit" style="margin-bottom: 20px;">Get Answers</button></center></form>

			</div></div>
				</div>
			</div>
        <div class="row">
          <div class="col-md-12">
			</div>
              <div class="row lord">
                <div class="col-lg-12">
		<center><div class="man"><font style="color: red"><h1><b>EXAMRUNS ANSWERS PAGE</b></h1></font><br><font style="color: #5fcf80"><b><h1>RESGISTER HERE TO GET KEY TO YOUR ANSWERS PAGE</h1></b></font></div><button class="btn btn-light" type="submit"  style="margin-bottom: 20px;"><a href="reg.php">Register</a></button></div>
	</center>	
				  </div>
			
		  </div>
		  </div>
				  </div>


    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>