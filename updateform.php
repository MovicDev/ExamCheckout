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
<style type="text/css">

	.edit{
		margin-top: 200px;
		border: 2px solid red;
		height: 350px;
		width: 400px;
		border-radius: 20px;
	}

</style>
<!-- End Header -->
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
             <?php echo $success;?>
                    </div>
 <center>
	<?php
	 include 'connect_to_mysqli.php';
	 $sel_query="select * from mat ";
	 $result = mysqli_query($connection,$sel_query);
	 while($row = mysqli_fetch_array($result)){
		 
		 $password = $row['password'];
		 
		 
		 
		 }
	 ?>
	
	 
	 <div class="edit">
		 <font style="font-size: 36px"><b>LOGIN UPDATE</b></font>
	 <form method="post"  action="">
		 	<?php
	include "updatepass.php";
	?>
      
<div class="form-group"  >
 <input type="text" Placeholder="Enter Old Password*"  id="user_city" name="old" value="<?php echo $password; ?>"  style="width: 250px; height: 40px;" required/>
 </div>
			<br><br>		
<div class="form-group"  >
 <input type="password" Placeholder="Enter New Password*" id="user_city" name="new"  style="width: 250px; height: 40px;"  required/>
 </div>	
 <br><br>
 <div class="form-group"  >
 <input type="password" Placeholder="New Password Again*" id="user_city" name="renew"  style="width: 250px; height: 40px;"  required/>
 </div>												
		<br>				
<button class="btn btn-danger" type="submit" name="submit"  style="margin-bottom: 20px;">Update password</button></div>
                           </form>		
	</div>
							  </center>
							  
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
