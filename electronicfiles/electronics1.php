<?php 
require_once '../php/dbconfig.php';
  $stmt = $db->prepare('SELECT * FROM laptops WHERE approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalrows = mysqli_num_rows($r3);

  $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Phones" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalphones = mysqli_num_rows($r3);

  $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "laptops" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totallaptops = mysqli_num_rows($r3);

  $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Desktops" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totaldesktops = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Tablets" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totaltablets = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Televisions" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totaltvs = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Printers" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalprinters = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Audio" AND approved !=0');
  ///$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalaudio = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Gaming" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalgaming = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Camera" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalcamers = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "Projector" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalprojectorss = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "ComputerAccessories" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalcompasc = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "PhoneAccessories" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalphoneascs = mysqli_num_rows($r3);

   $stmt = $db->prepare('SELECT * FROM laptops WHERE type = "other" AND approved !=0');
  //$stmt->bind_param();
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalmore = mysqli_num_rows($r3);
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css2/w3.css">
	<link rel="stylesheet" type="text/css" href="../fontawe/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  	<link rel="stylesheet" type="text/css" href="../style.css">
  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Electronics</title>
	<style type="text/css">
		h5,h6{
			color: black;
		}
		h6 a{
			color: black;
			text-decoration: none;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-md bg-info navbar-dark sticky-top">
  <a class="navbar-brand" href="#"><img src="../images/logo.jpg" class="img-fluid" style="width: 100px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="index.php" style="color: black;;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="shop-login.php" style="color: black;">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#" style="color: black;">Cart <span style="color: red;">0</span></a>
      </li>
    </ul>
  </div>
</nav>
<section style="margin-bottom: 10px;">
	<div class="container">
	<h6 style="text-align: center;">Get anything in the field of Electronics from our trusted dealers</h6>
	<div class="electonicsintro">
		<img src="../images/mobile-phone-1917737__480.webp" class="img-fluid">
		
	</div>	
	</div>
</section>
<section>
	<div class="container">
    <div style="border-radius: ;margin-top: -40px;text-align: center;z-index: 99;position: sticky;box-shadow: 5px 5px 5px 5px #a6a6a6;margin-bottom: 50px;">
		<h5 style="text-align: center;color: #e60000;"><a href="allelectronics.php" style="color: #ff0000;">All Electronics&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalrows ?>)</a></h5>
		<h6 style="text-align: center;"><a href="mobile_phones.php" style="color: #00ff00;">Mobile Phones&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalphones ?>)</a></h6>
		<h6 style="text-align: center;"><a href="laptops.php" style="color: #00ff00;">Laptops&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totallaptops ?>)</a></h6>
		<h6 style="text-align: center;"><a href="desktops.php" style="color: #00ff00;">Desktops&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totaldesktops ?>)</a></h6>
		<h6 style="text-align: center;"><a href="tvs.php" style="color: #00ff00;">TVs&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totaltvs ?>)</a></h6>
		<h6 style="text-align: center;"><a href="tablets.php" style="color: #00ff00;">Tablets&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totaltablets ?>)</a></h6>
		<h6 style="text-align: center;"><a href="printers.php" style="color: #00ff00;">Printers&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalprinters ?>)</a></h6>
		<h6 style="text-align: center;"><a href="hometheatres.php" style="color: #00ff00;">Audio and Home Theatres&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalaudio ?>)</a></h6>
		<h6 style="text-align: center;"><a href="gamings.php" style="color: #00ff00;">Gaming Accessories&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalgaming ?>)</a></h6>
		<h6 style="text-align: center;"><a href="cameras.php" style="color: #00ff00;">Cameras&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalcamers ?>)</a></h6>
		<h6 style="text-align: center;"><a href="projectors.php" style="color: #00ff00;">Projectors&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalprojectorss ?>)</a></h6>
		<h6 style="text-align: center;"><a href="computeraccessories.php" style="color: #00ff00;">Computer Accessories&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalcompasc ?>)</a></h6>
		<h6 style="text-align: center;"><a href="phoneaccessories.php" style="color: #00ff00;">Phone Accessories&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalphoneascs ?>)</a></h6>
		<h6 style="text-align: center;"><a href="moreelectronics.php" style="color: #00ff00;">More&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;(<?=$totalmore ?>)</a></h6>
		</div>
	</div>
</section>

<section class="footer" style="background-color: #00b3b3;">
  <div class="container">
    <div class="footercontent">
      <div class="footeritem">
        <p><b>Useful Links</b></p>
          <p>Privacy policy</p>
          <p>Terms of use</p>
          <p>Categories</p>
          <p>Location</p>
      </div>
        <div class="footeritem">
        <p><b>Company</b></p>
          <p>About us</p>
          <p>Contact Us</p>
          <p>Career</p>
          <p>Affiliate</p>
      </div>
        <div class="footeritem">
        <p><b>Follow Us</b></p>
          <p><a href=""><i class="fa fa-youtube"></i>Facebook</a></p>
          <p><a href="">Instagram</a></p>
          <p><a href="">Twitter</a></p>
          <p><a href="">Pinterest</a></p>
          <p><a href="">Youtube</a></p>
      </div>
        <div class="footeritem">
        <p><b>Download</b></p>
          <p>About us</p>
          <p>Contact Us</p>
          <p>Career</p>
          <p>Affiliate</p>
      </div>
</div>
</div>
<hr>
<div style="text-align: center;color: red;font-weight: bold;">Copyright &copy 2020.Buyit.com</div>
<hr>
</section>
	<script type="text/javascript" src="../js2/jquery.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="../fontawe/js/all.min.js"></script>

</body>
</html>