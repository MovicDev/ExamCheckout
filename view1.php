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

	}
	.nah{
		width: 200px;
		height: 200px;
		padding: 5px;
	}
	.nah img{
		width: 100%;
		height: 100%;
	}
		a{
		text-decoration: none;
		color: black; 
	}
	</style>
<body>
	
	<?php

	
	include "connect_to_mysqli.php";
	
?>

<a href ="fileform.php">&#8592;</a>
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
		