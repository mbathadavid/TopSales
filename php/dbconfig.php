<?php 
$dbhost = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ecommerce";

$db = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

if ($db->connect_error) {
	die("Connection failed:".$db->connect_error);
}

 ?>