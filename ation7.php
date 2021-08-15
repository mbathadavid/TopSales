<?php 
session_start();
require 'dbconfig.php';
if (isset($_POST['pid'])) {
	$pid = $_POST['pid'];
	$stmt = $db->prepare('SELECT * FROM products WHERE SN = ?');
	$stmt->bind_param('i',$pid);
	$stmt->execute();
	$result = $stmt->get_result();
	$r = $result->fetch_assoc();
    $productname = $r['productname'];
    $productSN = $r['SN'];
    $productowner = $r['productowner'];
    $productImage = $r['ProductImages'];
    $productStatus = $r['Status'];
    $productPrice = $r['Price'];
    $productbrand = $r['brand'];
    $uploaddate = $r['DateUploaded'];
    $proddescription = $r['proddescription'];
    $date = strtotime($uploaddate);
	$actualdate = date("l d-m-Y h:ia",$date);
	$stmt = $db->prepare('SELECT * FROM businesses WHERE ShopName = ?');
	$stmt->bind_param('s',$productowner);
	$stmt->execute();
	$result = $stmt->get_result();
	$r2 = $result->fetch_assoc();
	$businessprofile = $r2['Profile'];
  $businessphone = $r2['Phonenumber'];
  $businesssn = $r2['SN'];
  $businesscounty = $r2['County'];
  $businesstown = $r2['Town'];
  $businessprodcategory = $r2['productscategory'];
  $businessdate = $r2['DateCreated'];
   $datejoined = strtotime($businessdate);
  $actualdatejoined = date("l d-m-Y h:ia",$datejoined);
  $stmt = $db->prepare('SELECT Images FROM productimages WHERE SN = ?');
  $stmt->bind_param('i',$productSN);
  $stmt->execute();
  $result = $stmt->get_result();
 # $r3 = $result->fetch_array();
 while ($r3 = $result->fetch_assoc()) {
   $photo = $r3['Images'];
   echo $photo;
 }

    echo '<div style="text-align: center;">
        <h5>Product ID:'.$productSN.'</h5>
         <img src="products/'.$productImage.'" class="img-fluid">
         <div style="margin-top: 10px;">
         <h4><span style="background-color:  #00e600;color: #1a000d;border-radius: 20px;">'.$productname.'</span></h4>  
         </div>
         <h6 style="text-align: center;">View more Images of in the slider below:</h6>
         <div class="slider">
           <div class="slider-items" style="text-align: center;">
            <div class="item active">
             <img src="Uploads/'.$photo.'" class="img-fluid">
           </div>
           <div class="item">
             <img src="Profiles/'.$businessprofile.'" class="img-fluid">
           </div>
           <div class="item">
             <img src="products/" class="img-fluid">
           </div>
           <div class="item">
             <img src="products/5.jpg" class="img-fluid">
           </div>
           </div>
           <!---slider controls--->
           <div class="right-slide">></div>
           <div class="left-slide"><</div>
           
         </div>
       </div>
       <h4 style="color:  #00e600;text-align: center;font-weight:bolder;">'.$productPrice.'/=</h4>
       <div style="text-align: center;">
         <h4>Description:</h4>
         <h6>Status: <span style="color: #00e600;">'.$productStatus.'</span></h6>
         <h6>Brand: <span style="color: #00e600;">'.$productbrand.'</span></h6>
         <h6>Uploaded On: <span style="color: #00e600;">'.$actualdate.'</span></h6>
         <p style="font-size: 15px;color: #39ac73;width: 100%;overflow-x: auto;">'.$proddescription.'</p>
         <a href="#" class="btn btn-primary" onclick="say()">Add to Cart </a>
         <a href="#" class="btn btn-secondary">Add to Wishlist</a>
       </div>
              <div style="text-align: center;margin-top:10px;border-top:3px solid #00e600">
         <h5>About the Seller:</h5>
         <h6>Sold By:<span style="color: #00e600;font-size30px;"> '.$productowner.'</span></h6>
         <h6>Phonenumber:<span style="color: #00e600;font-size30px;"> +254'.$businessphone.'</span></h6>
         <h6>Located at:<span style="color: #00e600;font-size30px;"> '.$businesscounty.' County in '.$businesstown.' Town</span></h6>
         <h6>Dealers In:<span style="color: #00e600;font-size30px;"> '.$businessprodcategory.'</span></h6>
         <img src="Profiles/'.$businessprofile.'" class="img-fluid" style="max-width: 200px;border-radius: 50%;">
       <div class="jumbotron" style="margin-top:10px;">Delivery information:<br/>'.$proddescription.' </div>
       <div class="jumbotron" style="margin-top:10px;">Return Policy:<br/>'.$proddescription.' </div>
       <div class="w3-green" style="margin-top:10px;border-radius:20px;">Joined BuySell On: '.$actualdatejoined.'<br/> </div>
       <div style="text-align: center;border-bottom: 3px solid #00e600">
         <h6 style="text-align: center;">Contact '.$productowner.':</h6>
         <a class="btn btn-success" href="tel:+254'.$businessphone.'"><span><i class="fas fa-phone"></i></span>&nbsp;Call '.$productowner.'</a><br/>
         <a href="#"><i class="fa fa-whatsApp"></i></a><br/>
         <a href="#">Visit website</a>
       </div></div>';
}

 ?>