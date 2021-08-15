<?php 
session_start();
unset($_SESSION['shop']);
header('location:../shop-login.php');

 ?>