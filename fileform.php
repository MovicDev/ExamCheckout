<!DOCTYPE html>
<html lang="en">
	<?php 
ini_set('display_errors','0');
session_start();
session_start();
include "connect_to_mysqli.php";

?>


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
<style>
	
		.nah{
			background-color: #979797;
			width: 400px;
			height: 200px;
			margin-top: 150px;
			border-radius: 30px 0px 30px 0px;
		}
		.mot{
			top:50%;
			left:50%;
			position: absolute;
			transform: translate(-50%,-50%);
		}
		.upload-box{
			font-size: 16px;
			background-color: white;
			border-radius: 50px;
			box-shadow: 5px 5px 10px black;
			width: 350px;
			height: 50px;
			outline: none;
			position:relative;
			bottom: 30px;
		}
		::-webkit-file-upload-button{
			color: white;
			background:#E11C1F;
			border: none;
			border-radius: 50px;
			box-shadow: 1px 0 1px #6b4559;
			outline: none;
		cursor: pointer;
			height: 50px;
		}
		::-webkit-file-upload-button:hover{
			background:#A70F12;
		}
	</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">ExamLord</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="data/index.php" class="getstarted">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
	
	
<body><center>
	<?php if(isset($_GET['error'])); ?>
	<p><?php echo $_GET['error'] ?></p>

		<div class="container">
	<div class="row nah">
			
		<div class="col-lg-12">
			
			<div class="col-lg-12"><h3><font color="red">Upload Files/Images Here</font></h3></div>
			<div class="col-lg-12"></div>
			<div class="col-lg-12"><div class="mot"><form action="file.php" method="post" enctype="multipart/form-data">
				
				<input type="file" id="file" name="photo" class="upload-box">
			
				<div class="col-lg-12"><button class="btn btn-danger" type="submit" name="upload"  style="margin-top: 10px;">Login</button></div>
				
				</form></div></div>
			
				
			
		</div>	
			</div>
</div>
		
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

<script>
$(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
 
