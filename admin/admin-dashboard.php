<?php 
require_once 'assets/php/admin-header.php';
require_once 'assets/php/admin-db.php';
$count = new Admin();
 ?>
<!---<!DOCTYPE html>
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
 			<a href="admin-products.php" class=" list-group-item text-light admin-link <?=(basename($_SERVER['PHP_SELF']) == 'admin-products.php')?"nav-active":""; ?>">Unapproved Products</a>
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
 		</div>---->



 <div class="col">
 	<div class="col-lg-12">
 		<div class="card-deck mt-3 text-light text-center font-weight-bold">
 			
		<div class="card bg-primary">
			<div class="card-header">Total Shops By Website</div>
			<div class="card-body">
				<h1 class="display-4">
					<?= $count->totalWebsiteShopCount(); ?>
				</h1>
			</div>
		</div>
		<div class="card bg-danger">
			<div class="card-header">Total Shops By Admin</div>
			<div class="card-body">
				<h1 class="display-4">
					<?= $count->totalAdminShopCount(); ?>
				</h1>
			</div>
		</div>
 		<div class="card bg-warning">
			<div class="card-header">Total Free Products</div>
			<div class="card-body">
				<h1 class="display-4">
				<?= $count->totalCount('adds'); ?>	
				</h1>
			</div>
		</div>
		<div class="card bg-success">
			<div class="card-header">Total Premium Products</div>
			<div class="card-body">
				<h1 class="display-4">
					<?= $count->totalCount('premium-products'); ?>
				</h1>
			</div>
		</div>
		<div class="card bg-info">
			<div class="card-header">Website Hits</div>
			<div class="card-body">
				<h1 class="display-4"><?php $data = $count->web_hits(); echo $data['hits']; ?></h1>
			</div>
		</div>

 		</div>
 	</div>
 </div>

 <div class="row">
 	<div class="col-lg-12">
 	<div class="card-deck mt-3 text-light text-center font-weight-bold">
 		
 		<div class="card bg-primary">
			<div class="card-header">Total Purchases</div>
			<div class="card-body">
				<h1 class="display-4">12</h1>
			</div>
		</div>
		<div class="card bg-danger">
			<div class="card-header">Total Feedbacks</div>
			<div class="card-body">
				<h1 class="display-4">
					<?= $count->totalCount('feedback'); ?>
				</h1>
			</div>
		</div>
 		<div class="card bg-warning">
			<div class="card-header">Total Notifications</div>
			<div class="card-body">
				<h1 class="display-4">
				<?= $count->totalCount('notifications'); ?>	
				</h1>
			</div>
		</div>

 	</div>	
 	</div>
 </div>

 <div class="row">
 	<div class="col-lg-12">
 		<div class="card-deck my-3">
 			
			<div class="card border-success">
				<div class="card-header bg-success text-center text-light lead">
					Shop By County Percentage
				</div>
				<div id="chat1" style="width: 99%;height: 400px;">	
				</div>
			</div>
			<div class="card border-info">
				<div class="card-header bg-info text-center text-light lead">
					Products By Category
				</div>
				<div id="chat2" style="width: 99%;height: 400px;">	
				</div>
			</div>

 		</div>
 	</div>
 </div>
 <!---footer area-->
 	</div>
 </div>	
</div>
</div>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
 	var data;
     var chart;

      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create our data table.
        data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Electronics',<?=$count->totalCount('laptops')  ?>],
          ['Vehicles', <?=$count->totalCount('vehicles') ?>],
          ['Properties', <?=$count->totalCount('properties') ?>],
          ['HouseHold', <?=$count->totalCount('household') ?>],
          ['Building Material', <?=$count->totalCount('Building') ?>],
          ['Energy', <?=$count->totalCount('energy') ?>],
          ['Fashion', <?=$count->totalCount('Fashions') ?>],
          ['Farm Supplies', <?=$count->totalCount('farmsupplies') ?>],
          ['Jobs', <?=$count->totalCount('Jobs') ?>],
          ['Services', <?=$count->totalCount('Services') ?>]
        ]);

        // Set chart options
        var options = {'title':'Products By Category',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        chart = new google.visualization.PieChart(document.getElementById('chat2'));
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, options);
      }

      function selectHandler() {
        var selectedItem = chart.getSelection()[0];
        var value = data.getValue(selectedItem.row, 0);
        alert('The user selected ' + value);
      }
 </script>
</body>
</html>