<?php 
	require_once("db.php");
	if (isset($_GET["name"])) {
		$name=mysqli_real_escape_string($conn,$_GET["name"]);
		$sql="INSERT INTO `badri`(`id`, `product_name`, `description`, `created_at`) VALUES ([value-1],[value-2],[value-3],[value-4])";
		if ($conn->query($sql) === TRUE) {
			echo "success";
		}
		else{
			echo "error". $conn->error;
		}
	}
?>