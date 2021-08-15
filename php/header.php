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
  <style>
/* Style The Dropdown Button */
.opendropbtn1 {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    
}
.opendropbtn2 {
    background-color: #ff3333;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    
}
.opendropbtn3 {
    background-color: #3333ff;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    
}
.closedropbtn1 {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    display: none; 
}
.closedropbtn2 {
    background-color: #ff3333;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    display: none; 
}
.closedropbtn3 {
    background-color: #3333ff;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    display: none; 
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content1 {
    display: none;
    background-color: #f2f2f2;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content2 {
    display: none;
    background-color: #ff9999;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content3 {
    display: none;
    background-color: #b3b3ff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content1 a {
  color: black;
}
.dropdown-content2 a {
  color: black;
}
.dropdown-content3 a {
  color: black;
}

</style>
</head>
<body>

	<button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

<nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top">
  <?php if (!$cprofile) { ?>
    <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="img-fluid" style="width: 100px;height:50px;"></a>
  <?php } else { ?>
  <a class="navbar-brand" href="#"><img src="Profiles/<?=$cprofile ?>" class="img-fluid" style="width: 100px;height:50px;"></a>
<?php } ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "Shophome.php")?"active":""; ?> font-weight-bold active" href="index.php" style="color: black;font-size: 15px;">Website Homepage</a>
      </li>
    <?php if (!$account) { ?>    

      <?php } else { ?>
               <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "profile.php")?"active":""; ?> font-weight-bold" href="profile.php" style="color: black;font-size: 15px;"><i class="fas fa-user-fog"></i>&nbsp;Profile</a>
      </li>
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "feeback.php")?"active":""; ?> font-weight-bold" href="feedback.php" style="color: black;font-size: 15px;"><i class="fas fa-comment-dots"></i>&nbsp;Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "notifications.php")?"active":""; ?> font-weight-bold" href="notifications.php" style="color: black;font-size: 15px;"><i class="fas fa-bell"></i>&nbsp;Notifications&nbsp; <span id="checkNotification"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link font-weight-bold dropdown-toggle" id="navbardrop" href="#" style="color: black;font-size: 15px;" data-toggle="dropdown"><i class="fas fa-user-cog"></i>&nbsp;Hello <?=$sowner; ?></a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;Setting</a>
          <a href="php/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a> 
        </div>
      </li>
    </ul>
  </div>
</nav>


<div id="mySidenav" class="sidenav">
  <h5 style="text-align: center;">NAVIGATION</h5>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="Shophome.php">Dashboard</a>

     <?php if (!$account) {  ?>

      <?php } else {  ?>
        <a href="profile.php">Profile</a>
        <?php } ?>
    <a href="feedback.php">Feedback</a>
    <a href="notifications.php">Notifications</a>
    <a href="php/logout.php">Log Out</a>
    <a href="index.php">Website Home</a>
    <?php if(!$cshopname): ?>
      <?php else: ?>
    <a href="">Promote Shop</a>
  <?php endif; ?>
    <h5 style="text-align: center;">PRODUCTS</h5>
    <?php if (!$account) {  ?>

      <?php } else {  ?>
      <div class="approvedproductsdiv">
  <a class="opendropbtn1">Approved Products <i class="fas fa-angle-down"></i></a>
  <a class="closedropbtn1" style="display: none;">Approved Products <i class="fas fa-angle-up"></i></a>
  <div class="dropdown-content1">
    <a href="activeproducts.php">Electronics</a>
    <a href="#">Vehicles</a>
    <a href="#">Fashion & Beauty</a>
    <a href="#">Engineering Equipments</a>
    <a href="#">Property Sales & Rentals</a>
    <a href="#">Building Supplies</a>
    <a href="#">Household Supplies</a>
    <a href="#">Energy Supplies</a>
    <a href="#">Agriculture & Farm Supplies</a>
    <a href="#">Jobs</a>
    <a href="#">Services</a>
    <a href="#">Others</a>
  </div> 
 </div>
 <div class="unapprovedproductsdiv">
  <a class="opendropbtn2">UnApproved Products <i class="fas fa-angle-down"></i></a>
  <a class="closedropbtn2" style="display: none;">UnApproved Products <i class="fas fa-angle-up"></i></a>
  <div class="dropdown-content2">
    <a href="#">Electronics</a>
    <a href="#">Vehicles</a>
    <a href="#">Fashion & Beauty</a>
    <a href="#">Engineering Equipments</a>
    <a href="#">Property Sales & Rentals</a>
    <a href="#">Building Supplies</a>
    <a href="#">Household Supplies</a>
    <a href="#">Energy Supplies</a>
    <a href="#">Agriculture & Farm Supplies</a>
    <a href="#">Jobs</a>
    <a href="#">Services</a>
    <a href="#">Others</a>
  </div> 
 </div>
 <div class="pendinguploadsproductsdiv">
  <a class="opendropbtn3">Pending Uploads <i class="fas fa-angle-down"></i></a>
  <a class="closedropbtn3" style="display: none;">Pending Uploads <i class="fas fa-angle-up"></i></a>
  <div class="dropdown-content3">
    <a href="#">Vehicles</a>
    <a href="#">Engineering Equipments, Industrial plants & Machines</a>
    <a href="#">Property Sales & Rentals</a>
    <a href="#">Jobs</a>
  </div> 
 </div>       
    <a href="#">Deals</a>
    <a href="#">Expiring Soon</a>
    <?php } ?>

</div>
<span onclick="openNav()" id="openbtn"><i class="fas fa-bars"></i>&nbsp;Menu</span>

<div id="main">