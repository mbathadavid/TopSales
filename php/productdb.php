<?php 
session_start();
 require_once 'auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productname']) || isset($_POST['Statusselect']) || isset($_POST['productscategory']) || isset($_POST['brand']) || isset($_POST['price']) || isset($_POST['proddescription']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$name = $_POST['productname'];
	$status = $_POST['Statusselect'];
	$category = $_POST['productscategory'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$description = $_POST['proddescription'];
	$category = $_POST['productscategory'];
	$imageCount = count($_FILES['files']['name']);
	for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/products/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {
		$proupload = $shop->uploadproduct($owner,$name,$category,$brand,$price,$status,$description,$imageName);

		 if ($proupload === true) {
		 	echo "success";
		 	$shop->notification($owner,'admin','Product Uploaded');
		 }
		 else{
		 	echo "error";
		 }
    	}else{
			echo "Unknown path";
		}		
	}
}

 ?>