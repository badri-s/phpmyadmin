<?php 
require_once("db.php");
if (isset($_POST['id'],$_POST["product_name"],$_POST['id'],$_POST["password"])) {
	$id=mysqli_real_escape_string($conn,$_POST["id"]);
	$product_name=mysqli_real_escape_string($conn,$_POST["product_name"]);
	$sql="SELECT `id`, `product_name`, `description`, `created_at` FROM `badri` WHERE 1";
	$result=$conn->query($sql);
	if ($result->num_rows>0) {
		echo "yeahy";
	}
}


?>