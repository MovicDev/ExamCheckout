<?php

if(isset($_POST['upload']) && isset($_FILES['photo'])) {
	include "connect_to_mysqli.php";
	echo "<pre>";
	print_r($_FILES['photo']); 
	echo "</pre>";
	
	$img_name = $_FILES['photo']['name'];
	$img_size = $_FILES['photo']['size'];
	$tmp_name = $_FILES['photo']['tmp_name'];
	$error = $_FILES['photo']['error'];
	
	if($error === 0 ){
		if ($img_size > 125000){
			$em = "sorry, your file is too large!";
		header("location:index.php?error");
		}else{
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex );
			$allowed_exs = array("jpg", "jpeg", "png");
			if(in_array($img_ex_lc, $allowed_exs)){
				$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
			    $img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name,$img_upload_path);
				
			$sql = "INSERT INTO images (image) VALUES ('$new_img_name')";
				mysqli_query($connection, $sql);
				header("location: view1.php");
			}else{
				$em = "you can't upload files of this type!";
		          header("location:index.php?error");
			}
		}
		
	}else
		{
	$em = "unknown error occurred!";
		header("location:index.php?error");
}

	
	
}else
{
	header("location:index.php");
	
}
?>
