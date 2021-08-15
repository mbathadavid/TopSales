<?php 
require_once 'php/session.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css2/w3.css">
<link rel="stylesheet" type="text/css" href="fontawe/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/fileup.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Shop Home</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Dashboard</a>
    <a href="#">Expired Products</a>
    <a href="#">Products expiring soon</a>
    <a href="#">About</a>
    <a href="#">About</a>
    <a href="#">About</a>
</div>
<span onclick="openNav()">open</span>

<div id="main">
    <div style="background-color: #ff1a75;">
  <div class="container">
    <h3 style="text-align: center;color: blue;"> Your top ranking Online market place</h3>
    <p style="text-align: center;color: green;font-weight: bold;">Buy and Sell through our peculiar Platform. <br>We are here for you. </p>
  </div>
  </div>
	<button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="img-fluid" style="width: 100px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "Shophome.php")?"active":""; ?> font-weight-bold active" href="index.php" style="color: black;font-size: 15px;">Website Homepage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "Shophome.php")?"active":""; ?> font-weight-bold active" href="Shophome.php" style="color: black;font-size: 15px;"><i class="fas fa-home"></i>&nbsp;Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "profile.php")?"active":""; ?> font-weight-bold" href="profile.php" style="color: black;font-size: 15px;"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "feeback.php")?"active":""; ?> font-weight-bold" href="feedback.php" style="color: black;font-size: 15px;"><i class="fas fa-comment-dots"></i>&nbsp;Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "notifications.php")?"active":""; ?> font-weight-bold" href="notifications.php" style="color: black;font-size: 15px;"><i class="fas fa-bell"></i>&nbsp;Notifications&nbsp; <span id="checkNotification"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link font-weight-bold dropdown-toggle" id="navbardrop" href="#" style="color: black;font-size: 15px;" data-toggle="dropdown"><i class="fas fa-user-cog"></i>&nbsp;Hello <?=$cowner; ?></a>
        <div class="dropdown-menu">
        	<a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;Setting</a>
        	<a href="php/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>	
        </div>
      </li>
    </ul>
  </div>
</nav>
