<?php 
	require_once("db.php");
	
		//$name=mysqli_real_escape_string($conn,$_GET["name"]);
	$sql="UPDATE `badri` SET `id`=[value-1],`product_name`=[value-2],`description`=[value-3],`created_at`=[value-4] WHERE 1";
	if ($conn->query($sql) === TRUE) {
		echo "updated ";
	}
	else{
		echo "error". $conn->error;
	}
	
?>