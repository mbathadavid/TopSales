<?php 
require_once 'php/auth.php';
require_once 'php/dbconfig.php';
$sn = $_GET['sn'];
$product = new Auth();
$productdetails = $product->fetchoneelectronics('PhoneAccessories',$sn);
foreach ($productdetails as $row) {
  $name = ucwords($row['name']);
  $status = ucfirst($row['status']);
  $brand = ucfirst($row['brand']);
  $model = ucfirst($row['model']);
  $ram = $row['ram'];
  $storage = $row['hdd'];
  $battery = $row['battery'];
  $fcamera = $row['fcamera'];
  $rcamera = $row['rcamera'];
  $ssize = $row['ssize'];
  $os = ucfirst($row['os']);
  $price = $row['price'];
  $description = ucwords($row['description']);
  $uploaded = $row['dateuploaded'];
  $pimage = $row['image'];
  $maxpapersize = $row['maxmumpsize'];
  $outputcolor = $row['outputcolor'];
  $pspeed = $row['pspeed'];
  $typeofaudio = ucfirst($row['audiotype']);
  $businessprofile = $row['Profile'];
  $businessowner = $row['Owner'];
  $businessphone = $row['Phonenumber'];
  $businesswebsite = $row['website'];
  $businessesname = ucfirst($row['ShopName']);
  $businesssn = $row['PSN'];
  $businesscounty = $row['County'];
  $businesstown = $row['Town'];
  $businessprodcategory = $row['productscategory'];
  $businessdate = $row['DateCreated'];
  $businessverified = $row['verified'];
   $datejoined = strtotime($businessdate);
  $actualdatejoined = date("l d-m-Y h:ia",$datejoined);
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css2/w3.css">
<link rel="stylesheet" type="text/css" href="fontawe/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Electronics | Phone Accessories | <?=ucwords($row['name']) ?></title>
</head>
<body>

<nav class="navbar navbar-expand-md bg-info navbar-dark sticky-top">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="img-fluid" style="width: 100px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="index.php" style="color: black;font-size: 20px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="shop-login.php" style="color: black;font-size: 20px;">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#" style="color: black;font-size: 20px;">Cart <span style="color: red;">0</span></a>
      </li>
    </ul>
  </div>
</nav>

<section style="margin-bottom: 10px;">
  <div class="container">
    <div>
      <p style="text-align: center;">Electronics/Phone Accessories/<span style="font-weight: bold;color:#ff0080;"><?=ucwords($row['name']) ?></span></p>
    </div>
    <div style="text-align: center;">
      <img src="Uploads/<?=$pimage?>" class="img-fluid">
    </div> 

<?php 
  $pid = $_GET['sn'];
  $stmt = $db->prepare('SELECT Images FROM electronic_images WHERE pid = ?');
  $stmt->bind_param('i',$pid);
  $stmt->execute();
  $r3 = $stmt->get_result();
  $totalrows = mysqli_num_rows($r3);

     ?>
     
        <div style="text-align: center;" id="deepproduct">
        
          <h3 style="text-align: center;margin: 10px;"><span style="background-color: #00cc00;padding: 3px;border-radius: 10px;color: #e6005c;">Ksh. <?=$price; ?>/=</span></h3>

          <?php if ($totalrows > 0 ): ?>
         <div style="margin-top:10px;width: 100%;height: auto;">
          <h6 style="text-align: center;color: #004d00;">The slider below contains more images of the product</h6>
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
      </div>
        
          
        <?php else: ?>
               
            <?php endif; ?>

            <div style="margin-top: 10px;">
              
            <div class="jumbotron">
              <h3 style="text-align: center;color: #ff0066;"><span style="border-bottom: solid 2px #ff0066;">Product Details</h3>

              <h6>Product                 : <span style="font-weight: bold;color: #00cc66;"><?=$name; ?></span></h6>             
              <h6>Condition               : <span style="font-weight: bold;color: #00cc66;"><?=$status; ?></span></h6>
              <h6>Uploaded                : <span style="font-weight: bold;color: #00cc66;"><?=$uploaded; ?></span></h6>
              <div style="margin-top: 10px;background-color:  white;border-bottom: 10px;">
                <h3 style="text-align: center;color: #ff0066;"><span style="border-bottom: solid 2px #ff0066;">Description</span></h3>
                <?=$description; ?>
              </div>

            </div>

             <div style="margin: 10px;background-color: #ffff00;border-radius: 10px;padding: 5px;">
        <h5><i class="fas fa-danger"></i>Caution To The Buyer</h5>
        <p><span style="font-weight: bold;">Beware of Conmen!</span> We value your safety and we are committed to keep you safe from scams.</p>
        <ul style="list-style-type: square;">
          <li>Never be convinced to make advanced payment even for delivery</li>
          <li>Pay only after collecting the item.</li>
          <li>Properly INSPECT the item BEFORE collecting it.</li>
          <li>Meet at a safe place.</li>
          <li>REPORT ANY MALICIOUS ADD BY CLICKING "Report Abuse" BUTTON BELOW.</li>
        </ul>
        <button class="btn btn-danger">Report Abuse</button>
      </div>

            </div>

        </div>
        </div>
  
</section>

<section>
  <div class="container">
    <div style="text-align: center;">
      
      <div style="background-color: #e6e6e6;">
        <h3 style="text-align: center;">About Seller</h3>
        <?php if (!$businessprofile): ?>
           <img src="Profiles/images.jpeg" style="height: 150px;width: 150px;border-radius: 50%;" class="img-fluid img-thumbnail">
          <?php else: ?>
            <img src="Profiles/<?=$businessprofile; ?>" class="img-fluid img-thumbnail" style="height: 150px;width: 150px;">
          <?php endif; ?>

          <div>
            <h6>Owner : <?=$businessowner; ?></h6>
          </div>

          <?php if ($businessprofile): ?>
           <div>
            <h6>Business Name : <?=$businessesname; ?></h6>
          </div>
          <?php else: ?>
           
          <?php endif; ?>


          <?php if ($businessverified !=0): ?>
          <div>
            <h6>Verified Seller</h6>
          </div>
          <?php else: ?>
           
          <?php endif; ?> 



      </div>

      <div style="border: solid 2px green;border-radius: 10px;margin-bottom: 5px;padding: 10px;">
        <h3 style="text-align: center;"><span style="border-bottom: 3px solid  #e6005c;">Contact Seller</span></h3>
        <h4>Contact via: </h4>
        <h6>1.Phone Call</h6>
        <a href="tel:+254<?=$businessphone?>" class="btn btn-primary"><i class="fa fa-phone"></i>&nbsp; Make A Call</a>
        <h6>2.WhatsApp</h6>
        <a href="https://wa.me/+254<?=$businessphone?>?text=Hello%20<?=$businessowner?>, I saw your <?=$name?> which you posted in Thesupershop.Let us talk about it." class="btn btn-success"><i class="fa fa-whatsapp"></i>&nbsp; WhatsApp Seller</a>
        <h6>3.Email</h6>
        <div style="text-align: center;border:solid 2px #ff0066;padding: 5px;border-radius: 15px;">
        <form>
          <div class="form-group">
            <label>Enter your full name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Enter your Email Address</label>
            <input type="email" name="name" class="form-control">
          </div>
           <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control"></textarea>
          </div>
            <div class="form-group">
         <input type="submit" value="Send Message" class="btn btn-success">
          </div>
        </form>
      </div>
      </div>

      

    </div>
  </div>
</section>
 
 <?php if ($businessverified !=0): ?> 
<section>
  <div class="container">
  <h6 style="text-align: center;">More Products From This Seller</h6>
  </div>
</section>
<?php else: ?>
           
<?php endif; ?>

  <section>
    <div class="container">
      <h6 style="text-align: center;">Similar Products</h6>
      <div class="container">
        <div class="parent">
          
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