<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header('location:index.php');
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Admin | Dashboard</title>
	<style type="text/css">
	.admin-nav{
		width: 220px;
		min-height: 100vh;
		overflow: hidden;
		background-color: #343a40;
		transition: 0.3s all ease-in-out; 
	}
	.admin-link{
		background-color: #343a40;
	}
	.admin-link:hover, .nav-active{
		background-color:  #cc0000;
		text-decoration: none;
	}
	.animate{
		width: 0;
		transition: 0.3s all ease-in-out; 
	}	
	</style>
<script type="text/javascript" src="assets/js/jquery.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#open-nav").click(function(){
			$(".admin-nav").toggleClass('animate');
		});
	});
</script>
</head>
<body>
<div class="container-fluid">
 <div class="row">
 	<div class="admin-nav">
 		<h4 class="text-light text-center">Admin Panel</h4>
 		<div class="list-group list-group-flush">
 			<a href="admin-dashboard.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-dashboard.php')?"nav-active":""; ?>"><i class="fas fa-chart-pie"></i> &nbsp;&nbsp;Dashboard</a>
 			<a href="admin-shops.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-shops.php')?"nav-active":""; ?>"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;Shops</a>
 			<a href="admin-notifications.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-notifications.php')?"nav-active":""; ?>"><i class="fas fa-bell"></i>&nbsp;&nbsp;Notifications</a>
 			<a href="admin-feedback.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-feedback.php')?"nav-active":""; ?>"><i class="fas fa-comment"></i>&nbsp;&nbsp;Feedback</a>
 			<a href="admin-deletedshops.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-deletedshops.php')?"nav-active":""; ?>"><i class="fas fa-user-slash"></i>&nbsp;&nbsp;Deleted Shops</a>
 			<div class="dropdown">
 			<a href="" data-toggle="dropdown" class="dropdown-toggle list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-products.php')?"nav-active":""; ?>">New Products</a>
 			<div class="dropdown-menu">
 				<a href="admin_newelectronics.php" class="dropdown-item">Electronics</a>
        			<a href="admin_newvehicles.php" class="dropdown-item">Vehicles</a>
        			<a href="admin_newfashions.php" class="dropdown-item">Fashion & Beauty</a>
        			<a href="admin_newproperties.php" class="dropdown-item">Properties</a>
        			<a href="admin_newmachines.php" class="dropdown-item">Engineering Equipment & Machines</a>
        			<a href="admin_newbuilding.php" class="dropdown-item">Building Supplies</a>
        			<a href="admin_newhouseholds.php" class="dropdown-item">Household Supplies</a>
        			<a href="admin_newenergy.php" class="dropdown-item">Energy Supplies</a>
        			<a href="admin_newagriculture.php" class="dropdown-item">Agriculture</a>
        			<a href="admin_newservices.php" class="dropdown-item">Services</a>
        			<a href="admin_newjobs.php" class="dropdown-item">Jobs</a>
        			<a href="admin_newother.php" class="dropdown-item">Others</a>
 			</div>
 			</div>
 			<a href="admin-deletedproducts.php" class="list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-deletedproducts.php')?"nav-active":""; ?>"><i class="fas fa-user-slash"></i>&nbsp;&nbsp;Deleted Products</a>
 			<a href="" class="list-group-item text-light admin-link"><i class="fas fa-table"></i>&nbsp;&nbsp;Export Shops</a>
 			<a href="" class="list-group-item text-light admin-link"><i class="fas fa-table"></i>&nbsp;&nbsp;Export Products</a>
 			<a href="#" class="list-group-item text-light admin-link"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Profile</a>
 			<a href="#" class="list-group-item text-light admin-link"><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings</a>
 		
 	</div>
 </div>
 	<div class="col">
 		<div class="row">
 			<div class="col-lg-12 bg-primary pt-2 justify-content-between d-flex">
 				<a href="#" class="text-white" id="open-nav"><h3><i class="fas fa-bars"></i></h3></a>
 				<h4 class="text-light">Dashboard</h4>
 				<a href="assets/php/logout.php" class="text-light mt-1"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;LogOut</a>
 			</div>
 		</div>