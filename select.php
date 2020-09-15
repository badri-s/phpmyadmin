<?php 
	require_once("db.php");
	$sql="SELECT `id`, `product_name`, `description`, `created_at` FROM `badri` WHERE 1";
	$result=$conn->query($sql);
	while ($row=$result->fetch_assoc()) { 
		echo $row["name"];
	}


?>