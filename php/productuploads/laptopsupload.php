<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['subcategorydiv']) || isset($_POST['productname']) || isset($_POST['brand']) || isset($_POST['model']) || isset($_POST['ram']) || isset($_POST['storagetype']) || isset($_POST['hdd']) || isset($_POST['screensize']) || isset($_POST['os']) || isset($_POST['processor']) || isset($_POST['displaytype']) || isset($_POST['mxps']) || isset($_POST['outputcolor']) || isset($_POST['printingspeed']) || isset($_POST['typeofaudio']) || isset($_POST['delivery']) || isset($_POST['Deliveryinformation']) || isset($_POST['Statusselect']) || isset($_POST['price']) || isset($_POST['proddescription']) || isset($_POST['battery']) || isset($_POST['fcamera']) || isset($_POST['rcamera']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$subcategorydiv = $_POST['subcategorydiv'];
	$name = $_POST['productname'];
	//$status = $_POST['Statusselect'];
	$category = $_POST['productscategory'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$description = $_POST['proddescription'];
	$category = $_POST['productscategory'];
	$model = $_POST['model'];
	$ram = $_POST['ram'];
	$storagetype = $_POST['storagetype'];
	$hdd = $_POST['hdd'];
	$ssize = $_POST['screensize'];
	$os = $_POST['os'];
	$processor = $_POST['processor'];
	$displaytype = $_POST['displaytype'];
	$status = $_POST['Statusselect'];
	$battery = $_POST['battery'];
	$fcamera = $_POST['fcamera'];
	$rcamera = $_POST['rcamera'];
	$mxps = $_POST['mxps'];
	$outputcolor = $_POST['outputcolor'];
	$printingspeed = $_POST['printingspeed'];
	$typeofaudio = $_POST['typeofaudio'];
	$delivery = $_POST['delivery'];
	$deliveryinformation = $_POST['Deliveryinformation'];
	$imageCount = count($_FILES['files']['name']);
	
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/products/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {
		$proupload = $shop->uploadlaptop($owner,$category,$subcategorydiv,$brand,$name,$model,$ram,$storagetype,$hdd,$battery,$fcamera,$rcamera,$ssize,$os,$processor,$displaytype,$mxps,$outputcolor,$printingspeed,$typeofaudio,$delivery,$deliveryinformation,$status,$price,$description,$imageName);

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