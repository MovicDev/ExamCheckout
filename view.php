<?php

	
	include "connect_to_mysqli.php";
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
	body{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap;
		min-height: 100vh;
		background: #000000;
	}
	.nah{
		width: 700px;
		height: 700px;
		padding: 5px;
		margin-top: 10px;
	}
	.nah img{
		width: 100%;
		height: 100%;
	}
	
	</style>
<body>
	
	<?php

	
	include "connect_to_mysqli.php";
	
?>



	<?php

	$sql = "SELECT * FROM images ORDER BY id DESC";
	$res = mysqli_query($connection, $sql);
	if (mysqli_num_rows($res) > 0){
		
		while ($images = mysqli_fetch_assoc($res)){

		$kay="Uploads/".$images['image'];
			
			echo '<div class="nah">
	<img src="'.$kay.'">
	</div>';
		 }
	}
		
?>
		