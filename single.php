<?php 
require_once 'php/dbconfig.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css2/w3.css">
<link rel="stylesheet" type="text/css" href="fontawe/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
<section>
	<div class="container">
		<?php 
	$pid = $_GET['sn'];
	$stmt = $db->prepare('SELECT * FROM adds WHERE SN = ?');
	$stmt->bind_param('i',$pid);
	$stmt->execute();
	$result = $stmt->get_result();
	$r = $result->fetch_assoc();
    $productname = $r['productname'];
    $productSN = $r['SN'];
    $productowner = ucfirst($r['productowner']);
    $productImage = $r['ProductImages'];
    $productStatus = ucfirst($r['Status']);
    $productPrice = $r['Price'];
    $productbrand = ucfirst($r['brand']);
    $uploaddate = $r['DateUploaded'];
    $proddescription = ucwords($r['proddescription']);
    $actualdescription = wordwrap($proddescription,50);
    $date = strtotime($uploaddate);
    $views = $r['views'];
	$actualdate = date("l d-m-Y h:ia",$date);
	$stmt = $db->prepare('SELECT * FROM businesses WHERE SN = ?');
	$stmt->bind_param('i',$productowner);
	$stmt->execute();
	$result = $stmt->get_result();
	$r2 = $result->fetch_assoc();
	$businessprofile = $r2['Profile'];
  $businessowner = $r2['Owner'];
  $businessphone = $r2['Phonenumber'];
  $businessesname = ucfirst($r2['ShopName']);
  $businesssn = $r2['SN'];
  $businesscounty = $r2['County'];
  $businesstown = $r2['Town'];
  $businessprodcategory = $r2['productscategory'];
  $businessdate = $r2['DateCreated'];
   $datejoined = strtotime($businessdate);
  $actualdatejoined = date("l d-m-Y h:ia",$datejoined);
  $stmt = $db->prepare('SELECT Images FROM add_images WHERE pid = ?');
	$stmt->bind_param('i',$pid);
	$stmt->execute();
	$r3 = $stmt->get_result();
		 ?>
	<div style="text-align: center;border-top:3px solid #00e600;" id="deepproduct">
        <h4>Product Details</h4>
        <div style="margin-top: 10px;">
         <h4><span style="color: #e60000;border-radius: 40px;font-weight:bold"; border="5px solid black;"><?=$productname?></span></h4>  
         </div>
        <h5>Product Code:  <?=$productSN?></h5>
         <img src="products/<?=$productImage?>" class="img-fluid">
         <div style="margin-top:10px;width: 100%;height: auto;">
         	<?php if ($r3 != null): ?>
         		<div id="productslider" class="carousel slide" data-ride="carousel" style="width: 100%;height: auto;">
					

					<ul class="carousel-indicators">
						<?php 
						$i = 0;
						foreach ($r3 as $row) {
							$actives = '';
							if ($i == 0) {
								$actives = 'active';
							}
						
						 ?>
						 <li data-target="#productslider" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
						 <?php $i++; }?>
					</ul>


					<div class="carousel-inner">
						<?php 
						$i = 0;
						foreach ($r3 as $row) {
							$actives = '';
							if ($i == 0) {
								$actives = 'active';
							}
						 ?>
						<div class="carousel-item <?= $actives; ?>">
							<img src="Uploads/<?= $row['Images'] ?>" class="img-fluid">
						</div>
						<?php $i++; } ?>
					</div>

					<a class="carousel-control-prev" href="#productslider" data-slide="prev">
						<span class="carousel-control-prev-icon" style="background-color: #006600;"></span>
					</a>


					<a class="carousel-control-next" href="#productslider" data-slide="next">
						<span class="carousel-control-next-icon" style="background-color: #006600;"></span>
					</a>

				</div>
         	<?php else: ?>
         	
         	<h3 style="text-align: center;color: #004d00;">There are no more images for tyhe product.</h3>
         <?php endif; ?>
        </div>
         <div style="overflow-x:auto;border-left:4px solid green;border-right:4px solid green;margin:10px;"><?=$actualdescription?></div>
         <div style="text-align:center;">
         <table class="table table-responsive">
         <tr>
         <th>Brand</th>
         <th>Condition</th>
         <th>Price</th>
         <th>Date Uploaded</th>
         </tr>
         <tr>
         <td><?=$productbrand?></td>
         <td><?=$productStatus?></td>
         <td>Ksh. <?=$productPrice?></td>
         <td><?=$actualdate?></td>
         </tr>
         </table>
        <div>
          <h3 style="text-align: center;color: #006600;"><i class="fas fa-eye"></i>&nbsp;<?=$views; ?>&nbsp;views</h3>
        </div>

         <div style="margin:10px;border-top:dotted 3px green;border-bottom:dotted 3px green;">
         <h6 style="color:green;font-weight:bold;margin-top:10px;">Seller Profile</h6>
         <img src="Profiles/<?=$businessprofile?>" class="img-fluid img-thumbnail" style="margin-top:10px;border-radius:50%;max-width:200px;max-height:200px;">
         <h6>Shop Name : <span style="color:green;font-weight:bold;"><?=$businessesname?></span><h6>
         <h6>Name of Owner : <span style="color:green;font-weight:bold;"><?=ucwords($r2['Owner'])?></span><h6>
         <h6><span>Location : <span style="color:green;font-weight:bold;"><?=ucwords($r2['County'])?></span> County,<span style="color:green;font-weight:bold;"><?=ucwords($r2['Town'])?><span> Town<h6>
         <div style="margin:10px;">
         <h5>Contact Seller:</h5>
         <a href="tel:+254<?=$businessphone?>"><i class="fa fa-phone"></i>&nbsp; Make A Call</a></br>
         <a href="https://wa.me/+254<?=$businessphone?>?text=Hello%20<?=$businessowner?>, I saw your <?=$productname?> which you posted in Thesupershop.Let us talk about it." class="btn btn-success" style="border-radius:25px;margin-top:10px;"> WhatsApp Them</a></br>
         </div>
         </div>
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
<script type="text/javascript" src="js2/jquery.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="fontawe/js/all.min.js"></script>
<script type="text/javascript" src="js2/jplist.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
</body>
</html>