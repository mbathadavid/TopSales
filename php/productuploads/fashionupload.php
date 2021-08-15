<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['subcategorydiv']) || isset($_POST['type']) || isset($_POST['brand']) || isset($_POST['gender']) || isset($_POST['color']) || isset($_POST['size']) || isset($_POST['condition']) || isset($_POST['price']) || isset($_POST['yes']) || isset($_POST['proddescription']) || isset($_POST['files'])){
	$owner = $_POST['productowner'];
	$fashiontype = $_POST['subcategorydiv'];
	$type2 = $_POST['type'];
	$brand = $_POST['brand'];
	$gender = $_POST['gender'];
	$colour = $_POST['color'];
	$size = $_POST['size'];
	$status = $_POST['condition'];
	$price = $_POST['price'];
	$category = $_POST['productscategory'];
	$brand = $_POST['brand'];
	$description = $_POST['proddescription'];
	$negotiable = $_POST['yes'];
	$imageCount = count($_FILES['files']['name']);
	
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/vehicles/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {
		$proupload = $shop->uploadfashion($owner,$category,$fashiontype,$type2,$brand,$gender,$colour,$size,$status,$price,$negotiable,$description,$imageName);
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