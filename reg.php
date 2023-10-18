<!DOCTYPE html>
<html lang="en">
	<?php 
ini_set('display_errors','0');
session_start();
?>
	<?php
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
<body onLoad="folow()">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">ExamLord</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>

   
          <li><a href="index.html" class="getstarted">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

	<?php echo" $err4=" ?>
			 <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

  
<div class="container" style="padding:100px;">
      <div class="row">
		  
        <div class="col" style="border:5px solid  #000000;">
	
          <form action="reg.php" method="POST">
          <div class="form-group">
			  <center><h2><font style="color: red" ><b> REGISTER</b></font></h2></center>
            <label><b>Full Name</b></label><br>
            <input type="text" name="name"  placeholder="Enter Your Full Name" class="form-control" required/><br>

            <label><b>YOUR EMAIL</b></label><br>
			  
            <input type="email" name="email" placeholder="Enter Your valid Email" class="form-control" required/><br>
			  <div class="row">
			  <div class="col-sm-6">
			  <label><b>YOUR CONTACT</b></label><br>
			  
            <input type="text" name="tele" placeholder="Enter Your digit" class="form-control" required/></div>
			  <div class="col-sm-6">
				  <div class="form-group">
			  <label><b>DEPERTMENT</b></label><br>
			<select id=course name="course" class="form-control custom-select">
				<option>commercial</option>
			  <option>science</option>
			  <option>art</option>
			  
			  </select>
				  </div>
			  </div>
				  <div class="row">
				  <div class="col-sm-12">
					  <input name="agree" type="checkbox" value="yes">&nbsp;&nbsp;&nbsp; <strong><font color="red">You have to agree our Terms and Conditions.</font> </strong>
              </label><br>

					  </div></div>
			<hr>
				 <center> <button class="btn btn-dark" type="submit" name="submit"  style="margin-bottom: 20px;">Register</button></center>
			  
			  
			  
				
			  </div>	  </div>	  
		
			 
</div>
			
	 <div class="col"  style="border:5px solid  #000000;">
		 <center><h2><font style="color: red" ><b> PAYMENT CENTER</b></font></h2></center>
		<input type="radio" id="yes" name="gender" onClick="bank('')" value="">&nbsp;&nbsp;<strong>BANK</strong><br>
	<input type="radio" id="no" name="gender" onClick="payment('')" value="">&nbsp;&nbsp;<strong>PAYSTARK</strong>
	
	
	<div id="bank"><b>ACCOUNT NAME : RASAQ IBRAHIM K.</b><br>
		 <b>ACCOUNT NUMBER :0127800027</b><br>
		 <b>BANK : UNION BANK OF NIGERIA PLC.</b><BR><font style="color: red" ><b><center>OR</center> </b></font>
		  <b>ACCOUNT NAME : RASAQ IBRAHIM K.</b><br>
		 <b>ACCOUNT NUMBER :2144467381</b><br>
		 <b>BANK : UNITED BANK OF AFRICA</b><br><br><br><br>
		 <font style="color: red" ><b><p>NOTE: Your login key will be send to your email/contant after will confirm your payment</p> </b></font>
</div>
		
		
			</div>
			
			  
</form>
	  <div class="btn">
<a href=""><input type="submit" id="payment" value="continue" style="width: 150px; height: 50px; background-color:transparent; font-size: 24px; color: red; border: 2px solid #5fcf80; border-radius: 20px; margin-top: 30px; margin-left:  600px;"></a></div>	
	
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
		
	function folow({
		document.getElementById('bank').style.display="none";
		document.getElementById('payment').style.display="none";
	}
	
	function payment(){
		document.getElementById('bank').style.display="none";
		document.getElementById('payment').style.display="block";
	}
		function bank(){
		document.getElementById('payment').style.display="none";
		document.getElementById('bank').style.display="block";
	}
	
	
	</script>
		  <?php 
$accpt_err = $er = $err1 = ""; $err1_ = $chk = $err2 = $err_msg = $err3 = $err3_ = $err4 = $err5 = $err6 = $err7 = $err8 = $err9 = $err10 = $err11 = $err12 = $err13 = $err4= $msg ="";
$accpt_err=""; $success = ""; $success1 = "";
if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$tele=$_POST['tele'];
$course=$_POST['course'];



//$u_agree=$_POST['u_agree'];


include "connect_to_mysqli.php";



//$dateline=time();
		

   $mail_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   $string_exp = "/^[A-Za-z .'-]+$/";
   
   
   
  if((!isset($_POST['agree'])) || $_POST['agree'] != 'yes')
 {
$accpt_err = '<font color="red">You have not agreed/accepted our rules</font>';

 }else if (
 (!$name) || (!preg_match($string_exp,$name)) || (!$email) || (!preg_match($email_exp,$email)) || (!$tele) || (strlen($tele) < 10) || (!$course))
	
	           {  $er = '<font color="red">check every empty or invalid fields</font>'; 
		
		       }
		else{					 
		$extract_user = mysqli_query($connection,"SELECT * FROM ject WHERE email='$email' || tele='$tele'");
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			$chk = '<font color="red">User Id already exists,Please try again </font>';
		                 }
		
		else 
				    
					{
					$id = "EX".$randomString = substr(md5(microtime()), 0, 7);	
					
					   $submit = mysqli_query($connection,"insert into ject ( id, name, email, tele, course) values ('$id', '$name', '$email', '$tele', '$course')") or die ('Could not connect: ' .mysqli_error($connection));

if($course == 'commercial'){
	

 		echo "<script>alert('Your information have been taken succefully');window.location.assign('index.php')</script>";

	}
else if ($course == 'art'){
	
echo "<script>alert('Your information have been taken succefully');window.location.assign('index.php')</script>";

	
}
			else if ($course == 'science'){
	
echo "<script>alert('Your information have been taken succefully');window.location.assign('index.php')</script>";

	
}
			else {
	
	
echo "<script>alert('Invalid format');window.location.assign('reg.php')</script>";

}
	 
	 
	 
		}
		}
}
					   ?>