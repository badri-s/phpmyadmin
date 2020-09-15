

<?php 
	require_once("db.php");
	
		//$name=mysqli_real_escape_string($conn,$_GET["name"]);
	$sql="DELETE FROM `badri` WHERE 0";
	if ($conn->query($sql) === TRUE) {
		echo "delete ";
	}
	else{
		echo "error". $conn->error;
	}
	
?>