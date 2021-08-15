<?php
session_start();
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "ecommerce";

$conn =mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	
	exit('Failed to connect:'.mysqli_connect_error());
	}
	if (!isset($_POST['Owner'], $_POST['OwnerEmail'], $_POST['Phonenumber'], $_POST['shopownerpassword'], $_POST['County'], $_POST['Town'], $_POST['Street'], $_POST['Shopname'], $_POST['productscategory'], $_POST['Opening'], $_POST['Closing'], $_POST['Description'] )){
		exit("please fill the form");
	}
	if ($stmt = $conn->prepare('INSERT INTO businesses (Owner,OwnerEmail,Phonenumber,Shoppassword,County,Town,Street,ShopName,productscategory,Opening,Closing,Description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)')) {
		$password = password_hash($_POST['shopownerpassword'], PASSWORD_DEFAULT);
		$stmt->bind_param('ssssssssssss', $_POST['Owner'], $_POST['OwnerEmail'], $_POST['Phonenumber'], $_POST['shopownerpassword'], $_POST['County'], $_POST['Town'], $_POST['Street'], $_POST['Shopname'], $_POST['productscategory'], $_POST['Opening'], $_POST['Closing'], $_POST['Description']);
		$stmt->execute();
		echo "registered";
	}else{
		echo "error";
	}

 ?>