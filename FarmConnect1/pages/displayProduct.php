<?php
session_start();

include '../database/databaseconnect.php';

$user_id = $_SESSION['user_id'];



$productName = $_POST["productName"];
$quantity = $_POST["quantity"];
$region = $_POST["region"];
$price = $_POST["price"];



//for image upload
$tmpName = $_FILES["productImage"]["tmp_name"];

$imageSever = "../productImages/";
$file = $imageSever.basename($_FILES['productImage']['name']);


move_uploaded_file($_FILES["productImage"]["tmp_name"], $file);



if (isset($_POST['submit'])) {

	if (empty($productName)||empty($quantity)||empty($region)||empty($price)||empty($file)) {

		echo "Please fill both inputs";
		
	}


	else{

	$query = "INSERT INTO `user_products` (`user_id`, `product_name`, `quantity_available`, `price_per_kilo`, `region_available`, `product_image`) VALUES ('$user_id', '$productName', '$quantity', '$price', '$region', '$file')";

	if (!$conn->query($query)) {
		echo "Error".$query."<br>".$conn->error;
	}

	else{
		header("Location: myfarm.php");
	}

	
	
}
	
}


 ?>