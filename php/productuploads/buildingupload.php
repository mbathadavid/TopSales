<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['subcategorydiv']) || isset($_POST['title']) || isset($_POST['materialtype']) || isset($_POST['measurementunit']) || isset($_POST['brand']) || isset($_POST['status']) || isset($_POST['delivery']) || isset($_POST['Deliveryinformation']) || isset($_POST['dilution']) || isset($_POST['price']) || isset($_POST['yes']) || isset($_POST['proddescription']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$buildingtype = $_POST['subcategorydiv'];
	$title = $_POST['title'];
	$materialtype = $_POST['materialtype'];
	$measurementunit = $_POST['measurementunit'];
	$brand = $_POST['brand'];
	$delivery = $_POST['delivery'];
	$deliveryinformation = $_POST['Deliveryinformation'];
	$status = $_POST['status'];
	$price = $_POST['price'];
	$category = $_POST['productscategory'];
	$description = $_POST['proddescription'];
	$negotiable = $_POST['yes'];
	$imageCount = count($_FILES['files']['name']);
	
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/vehicles/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {
		$proupload = $shop->uploadbuilding($owner,$category,$title,$materialtype,$measurementunit,$brand,$status,$delivery,$deliveryinformation,$price,$negotiable,$description,$imageName);
		 if ($proupload === true) {
		 	echo "1";
		 	$shop->notification($owner,'admin','Product Uploaded');
		 }
		 else{
		 	echo "0";
		 }
    	}else{
			echo "Unknown path";
		}		
	} 


}

 ?>