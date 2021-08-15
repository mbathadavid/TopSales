<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['subcategorydiv']) || isset($_POST['name']) || isset($_POST['type']) || isset($_POST['length']) || isset($_POST['width']) || isset($_POST['height']) || isset($_POST['material']) || isset($_POST['brand']) || isset($_POST['model']) || isset($_POST['status']) || isset($_POST['delivery']) || isset($_POST['Deliveryinformation']) || isset($_POST['price']) || isset($_POST['yes']) || isset($_POST['proddescription']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$householdtype = $_POST['subcategorydiv'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$length = $_POST['length'];
	$width = $_POST['width'];
	$height = $_POST['height'];
	$material = $_POST['material'];
	$model = $_POST['model'];
	$status = $_POST['status'];
	$delivery = $_POST['delivery'];
	$deliveryinformation = $_POST['Deliveryinformation'];
	$brand = $_POST['brand'];
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
		$proupload = $shop->uploadhousehold($owner,$category,$householdtype,$name,$type,$length,$width,$height,$material,$brand,$model,$status,$delivery,$deliveryinformation,$price,$negotiable,$description,$imageName);
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