<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['subcategorydiv']) || isset($_POST['type2']) || isset($_POST['make']) || isset($_POST['brand']) || isset($_POST['yomanufacure']) || isset($_POST['horsepower']) || isset($_POST['seats']) || isset($_POST['fuel']) || isset($_POST['wheels']) || isset($_POST['difflock']) || isset($_POST['color']) || isset($_POST['drivetrain']) || isset($_POST['transmission']) || isset($_POST['mileage']) || isset($_POST['part']) || isset($_POST['corigin']) || isset($_POST['condition']) || isset($_POST['price']) || isset($_POST['yes']) || isset($_POST['proddescription']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$subcategorydiv = $_POST['subcategorydiv'];
	$type2 = $_POST['type2'];
	$make = $_POST['make'];
	$transmission = $_POST['transmission'];
	$yearofmanufacture = $_POST['yomanufacure'];
	$horsepower = $_POST['horsepower'];
	$fuel = $_POST['fuel'];
	$numberofwheels = $_POST['wheels'];
	$difflock = $_POST['difflock'];
	$color = $_POST['color'];
	$driveterrain = $_POST['drivetrain'];
	$mileage = $_POST['mileage'];
	$accessory = $_POST['part'];
	$corigin = $_POST['corigin'];
	$status = $_POST['condition'];
	$price = $_POST['price'];
	$category = $_POST['productscategory'];
	$brand = $_POST['brand'];
	$description = $_POST['proddescription'];
	$seats = $_POST['seats'];
	$negotiable = $_POST['yes'];
	$imageCount = count($_FILES['files']['name']);
	
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/vehicles/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {
		$proupload = $shop->uploadvehicle($owner,$category,$subcategorydiv,$type2,$make,$brand,$yearofmanufacture,$horsepower,$seats,$fuel,$numberofwheels,$difflock,$color,$driveterrain,$transmission,$mileage,$accessory,$corigin,$status,$price,$negotiable,$description,$imageName);

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