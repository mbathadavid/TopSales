
<?php 
error_reporting(0);
require_once 'php/auth.php';
$user = new Auth();
$msg = '';
if(isset($_GET['verification_code']) && isset($_GET['email'])){
  $verifycode = $_GET['verification_code'];
  $email = $_GET['email'];
  $verifyemail = $user->verifyemail($email,$verifycode);
  if ($verifyemail === true) {
      $msg = 'You have successfully verified your account <a href="shop-login.php">LOG IN</a>';
  } else {
    $msg = 'Sorry! There was an error verifying your email.Please try again Later. You can as well Login<a href="shop-login.php">LOG IN</a>';
  }

}
else {
  $msg = 'Sorry! There was an error verifying your Email.Please try again later'; 
} 

 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css2/w3.css">
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Verify Email</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
	<h6 class="text-center text-bold text-success"><?=$msg; ?></h6>
</div>
</div>
</div>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->

<script type="text/javascript" src="js2/jquery.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/fontawe/js/all.min.js"></script>
</body>
</html>