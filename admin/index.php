<?php 
session_start();
if (isset($_SESSION['username'])) {
	header('location:admin-dashboard.php');
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/w3.css">
	<link rel="stylesheet" type="text/css" href="fontawe/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<title>LogIn| Admin</title>
</head>
<body>
<div class="container">
	<div class="row h-100 align-items-center justify-content-center" style="display: flex;align-items: center;">
		<div class="col-lg-5">
			<div class="card border-danger shadow-lg">
			<div class="card-header bg-success">
				<h3>Admin login</h3>
			</div>
			<div class="card-body">
				<form action="#" method="POST" id="admin-login-form" class="px-3">
					<div id="adminloginalert"></div>
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Enter the Admin username" required autofocus>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Enter the Admin Password" required>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-block btn-danger" value="LogIn" id="admin-login" required>
					</div>
				</form>
			</div>	
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="assets/js/jquery.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#admin-login").click(function(e){
			if($("#admin-login-form")[0].checkValidity()){
				e.preventDefault();
				$(this).val('Please wait...');
				$.ajax({
					url: 'assets/php/admin-action.php',
					method: 'post',
					data: $("#admin-login-form").serialize()+'&action=adminLogin',
					success:function(response){
						if (response === 'successlogin') {
							window.location = 'admin-dashboard.php';
						}else{
							$("#adminloginalert").html(response);
							$("#admin-login").val('LogIn');
						}
					}
				});		
			}
		});
	});
</script>
</body>
</html>