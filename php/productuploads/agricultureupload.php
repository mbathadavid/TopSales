<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['subcategorydiv']) || isset($_POST['title']) || isset($_POST['type']) || isset($_POST['brand']) || isset($_POST['model']) || isset($_POST['condition']) || isset($_POST['manufacturer']) || isset($_POST['name']) || isset($_POST['propangation']) || isset($_POST['purpose']) || isset($_POST['breed']) || isset($_POST['delivery']) || isset($_POST['Deliveryinformation']) || isset($_POST['dilution']) || isset($_POST['price']) || isset($_POST['yes']) || isset($_POST['proddescription']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$type = $_POST['subcategorydiv'];
	$title = $_POST['title'];
	$type2 = $_POST['type'];
	$model = $_POST['model'];
	$manufacturer = $_POST['manufacturer'];
	$name = $_POST['name'];
	$purpose = $_POST['purpose'];
	$breed = $_POST['breed'];
	$propangation = $_POST['propangation'];
	$brand = $_POST['brand'];
	$delivery = $_POST['delivery'];
	$deliveryinformation = $_POST['Deliveryinformation'];
	$status = $_POST['condition'];
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
		$proupload = $shop->uploadagriculture($owner,$category,$type,$title,$type2,$brand,$model,$status,$manufacturer,$name,$purpose,$breed,$propangation,$delivery,$deliveryinformation,$price,$negotiable,$description,$imageName);
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