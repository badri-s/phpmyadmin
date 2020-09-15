<?php 
	$server="localhost";
	$id="root";
	$productName="";
	$description="";
	$createdAt="";
	$db="badri";

	$conn= new mysqli($server,$id,$productName,$description,$createdt,$db);
	if ($conn->connect_error) {
		die("connection failed");

	}
?>