<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['subcategorydiv']) || isset($_POST['title']) || isset($_POST['materialused']) || isset($_POST['Voltage']) || isset($_POST['weight']) || isset($_POST['capacity']) || isset($_POST['maximumpwv']) || isset($_POST['maximumpwc']) || isset($_POST['gasweight']) || isset($_POST['fueltype']) || isset($_POST['portability']) || isset($_POST['fueltankcapacity']) || isset($_POST['fuelconsumption']) || isset($_POST['primepower']) || isset($_POST['standbypower']) || isset($_POST['outputvoltage']) || isset($_POST['outputfrequency']) || isset($_POST['jikotype']) || isset($_POST['brand']) || isset($_POST['model']) || isset($_POST['status']) || isset($_POST['delivery']) || isset($_POST['Deliveryinformation']) || isset($_POST['price']) || isset($_POST['yes']) || isset($_POST['proddescription']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$type = $_POST['subcategorydiv'];
	$title = $_POST['title'];
	$materialused = $_POST['materialused'];
	$voltage = $_POST['Voltage'];
	$weight = $_POST['weight'];
	$capacity = $_POST['capacity'];
	$maximumpwv = $_POST['maximumpwv'];
	$maximumpwc = $_POST['maximumpwc'];
	$gasweight = $_POST['gasweight'];
	$fueltype = $_POST['fueltype'];
	$portability = $_POST['portability'];
	$fueltankcapacity = $_POST['fueltankcapacity'];
	$fuelconsumption = $_POST['fuelconsumption'];
	$primepower = $_POST['primepower'];
	$standbypower = $_POST['standbypower'];
	$outputvoltage = $_POST['outputvoltage'];
	$outputfrequency = $_POST['outputfrequency'];
	$jikotype = $_POST['jikotype'];
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
		$proupload = $shop->uploadenergy($owner,$category,$type,$title,$brand,$model,$materialused,$voltage,$weight,$capacity,$maximumpwv,$maximumpwc,$gasweight,$fueltype,$portability,$fueltankcapacity,$fuelconsumption,$primepower,$standbypower,$outputvoltage,$outputfrequency,$jikotype,$delivery,$deliveryinformation,$status,$price,$negotiable,$description,$imageName);
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