<?php 
session_start();
require 'dbconfig.php';
if (isset($_POST['action']) && $_POST['action'] == 'fetchelectronics') {
$stmt = $db->prepare('SELECT * FROM adds WHERE productscategory = "electronics" ORDER BY DateUploaded DESC LIMIT 10');
$stmt->execute();
$result = $stmt->get_result();
//$row = $result->fetch_assoc();
//if ($row != null) {
  while ($row = $result->fetch_assoc()){
  echo '<div class="add">
              <div class="adddes">
      <h6>'.$row['productname'].'</h6>
      <form action="" class="getdetails">
        <a href="#" class="viewitem" target="_top"><img src="products/'.$row['ProductImages'].'" id="'.$row['SN'].'" style="width: 100%;height: 100%;"></a>
          </form>
    </div>
    <p>'.$row['Price'].'/=</p>
    </div>
';
}

//}else{
  //echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
//}
}
if (isset($_POST['pid'])) {
	$pid = $_POST['pid'];
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
    echo '<div style="text-align: center;border-top:3px solid #00e600;" id="deepproduct">
        <h4>Product Details</h4>
        <div style="margin-top: 10px;">
         <h4><span style="color: #e60000;border-radius: 40px;font-weight="bold"; border="5px solid black;">'.$productname.'</span></h4>  
         </div>
        <h5>Product Code:  '.$productSN.'</h5>
         <img src="products/'.$productImage.'" class="img-fluid">
         <div style="margin-top:10px;">
        </div>
         <div style="overflow-x:auto;border-left:4px solid green;border-right:4px solid green;margin:10px;">'.$actualdescription.'</div>
         <div style="text-align:center;">
         <table class="table table-responsive">
         <tr>
         <th>Brand</th>
         <th>Condition</th>
         <th>Price</th>
         <th>Date Uploaded</th>
         </tr>
         <tr>
         <td>'.$productbrand.'</td>
         <td>'.$productStatus.'</td>
         <td>Ksh. '.$productPrice.'</td>
         <td>'.$actualdate.'</td>
         </tr>
         </table>
         <div style="margin:10px;border-top:dotted 3px green;border-bottom:dotted 3px green;">
         <h6 style="color:green;font-weight:bold;margin-top:10px;">Seller Profile</h6>
         <img src="Profiles/'.$businessprofile.'" class="img-fluid img-thumbnail" style="margin-top:10px;border-radius:50%;max-width:200px;max-height:200px;">
         <h6>Shop Name : <span style="color:green;font-weight:bold;">'.$businessesname.'</span><h6>
         <h6>Name of Owner : <span style="color:green;font-weight:bold;">'.ucwords($r2['Owner']).'</span><h6>
         <h6>Location : <span style="color:green;font-weight:bold;">'.ucwords($r2['County']).'</span> County,<span style="color:green;font-weight:bold;">'.ucwords($r2['Town']).'<span> Town<h6>
         <div style="margin:10px;">
         <h5>Contact Seller:</h5>
         <a href="tel:+254'.$businessphone.'"><i class="fa fa-phone"></i>&nbsp; Make A Call</a></br>
         <a href="https://wa.me/'.$businessphone.'?text=Hello%20'.$businessowner.', I saw your '.$productname.' which you posted in Thesupershop.Let us talk about it." class="btn btn-success" style="border-radius:25px;margin-top:10px;"> WhatsApp Them</a></br>
         </div>
         </div>
         </div>
        ';
}
if (isset($_POST['pid'])) {
  echo '<h5 style="text-align:center;">View the Gallery Below of <b>'.$productname.'</b></h5>';
}
if (isset($_POST['pid'])) {
  $stmt = $db->prepare('SELECT * FROM add_images WHERE pid = ?');
  $stmt->bind_param('i',$productSN);
  $stmt->execute();
  $result = $stmt->get_result();
  $r3 = $result->fetch_assoc();
    $image = $r3['Images'];
    if ($image != null) { 
      while ($r3 = $result->fetch_assoc()) {
      echo '<div style=""><div style="display:inline-block;margin:10px;"><img src="Uploads/'.$image.'" class="img-fluid"></div>
    </div>';
    } 
  }else{
     echo '<h6 style="color: #e60000;">There are no more Images for '.$productname.'</h6>';
    }
}
if (isset($_POST['pid'])) {
  echo '<a href="Javascript:void(0)" id="closeprod" onclick="sayHello()" class="btn btn-danger" style="margin:10px;display:inline-flex;">Close</a></br>';
}
 ?>