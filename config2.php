<?php 
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "ecommerce";

$conn =mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed:".mysqli_connect_error());
if (mysqli_connect_errno()) {
	echo("Connection  failed:".mysqli_connect_error());
	exit();
	}


 ?>