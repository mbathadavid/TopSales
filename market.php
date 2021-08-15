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
  <title>Products | All products</title>
  <style type="text/css">
    .slider{
      
      max-width: 100%;
      border:3px solid #e60073;
      position: relative;
    }
    .slider .slider-items .item img{
      max-width: 100%;
      display: block;
      animation: zoom 1s ease;
    }
    @keyframes zoom{
      0%{transform: scale(2);opacity: 0}
      100%{transform: scale(1);opacity: 1}
    }
    .slider .slider-items .item{
      display: none;
    }
    .slider .slider-items .item.active{
      display: block;
    }
    .slider .left-slide,.slider .right-slide{
      position: absolute;
      height: 30px;
      width: 30px;
      background-color: #00e600;
      border-radius: 50%;
      cursor: pointer;
      color: #ffffff;
      font-size: 20px;
      line-height: 30px;
      top: 50%;
      transition: all .5s ease;
    }
    .slider .left-slide{
      left: 5%;
    }
     .slider .right-slide{
      right: 5%;
    }
    .slider .left-slide:hover,.slider .right-slide:hover{
      box-shadow: 0px 0px 10px black;
      background-color:  #ff0066;
    }
  </style>
</head>
<body>
   <div style="background-color: #ff1a75;margin-bottom: 0;">
  <div class="container" style="background-color:">
    <h3 style="text-align: center;color: blue;"> Your top ranking Online market place</h3>
    <p style="text-align: center;color: green;font-weight: bold;">Buy and Sell through our peculiar Platform. <br>We are here for you. </p>
  </div>
  </div>

<!---top nav bar---->
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
        <a class="nav-link font-weight-bold " href="Account.php" style="color: black;font-size: 20px;">Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#" style="color: black;font-size: 20px;">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="market.php" style="color: black;font-size: 20px;">See Market</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="#" style="color: black;font-size: 20px;">Cart <span style="color: red;">0</span></a>
      </li>
    </ul>
  </div>
</nav>
<div id="individualproddiv">
<section>
     <div class="container">
       <div id="product_details"></div>
     </div>
     </div>
   </section>
   <div id="allproduts">
   <div style="display: flex;margin-bottom: 10px;">
    <a href="JavaScript:void(0)" style="width: 50%;background-color:  #ff4dd2;display: flex;justify-content: center;align-items: center;text-decoration: none;font-size: 20px;font-weight: bolder;" id="openproducts"><i class=""></i>Products</a>
    <a href="JavaScript:void(0)" style="width: 50%;background-color:   #e600e6;display: flex;justify-content: center;align-items: center;text-decoration: none;font-size: 20px;font-weight: bolder;" id="openshops">stores</a>
   </div>
   <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
   <!---productsdiv--->
   <div id="productsdiv">
   <!---Electonics--->
  <section>
    <h3 style="text-align: center;">Electronics</h3>
    <div class="container" style="display: flex;">
      <div class="parent">
            <?php  
              $stmt = $db->prepare('SELECT * FROM products WHERE productscategory = "electronics" ORDER BY DateUploaded DESC LIMIT 10');
              $stmt->execute();
              $result = $stmt->get_result();
              while ($row = $result->fetch_assoc()):
            ?>
            <div class="add">
              <div class="image">
                <img src="products/<?= $row['ProductImages'] ?>">
                <p><?=$row['Price'] ?>/=</p>
              </div>
              <div class="adddes">
      <h5><?=$row['productname'] ?></h5>
      <form action="" class="getdetails">
        <input type="hidden" class="pid" value="<?=$row['SN'] ?>">
        <a href="#" class="btn btn-block btn-info viewitem" target="_top">View Details</a>
          </form>
    </div>
    </div>
  <?php endwhile; ?>
    </div>
  </div>
  <div  style="text-align: center;margin: 10px;">
  <a href="productDetails.php" class="btn btn-success">View All</a>
  </div>
   </section>
   <!---end of electronics--->
   <section>
    <h3 style="text-align: center;">Vehicles</h3>
    <div class="container" style="display: flex;">
      <div class="parent">
            <?php  
              $stmt = $db->prepare('SELECT * FROM products WHERE productscategory = "vehicles" ORDER BY DateUploaded DESC LIMIT 10');
              $stmt->execute();
              $result = $stmt->get_result();
              while ($row = $result->fetch_assoc()):
            ?>
            <div class="add">
              <div class="image">
                <img src="products/<?= $row['ProductImages'] ?>">
                <p><?=$row['Price'] ?>/=</p>
              </div>
              <div class="adddes">
      <h5><?=$row['productname'] ?></h5>
      <form action="" class="getdetails">
        <input type="hidden" class="pid" value="<?=$row['SN'] ?>">
        <a href="#" class="btn btn-block btn-info viewitem" target="_top">View Details</a>
          </form>
          <form action="" class="getimages" style="margin-top: 10px;">
        <input type="hidden" class="pid" value="<?=$row['SN'] ?>">
        <a href="#" class="btn btn-block btn-primary viewimages" target="_top">View Images</a>
          </form>
    </div>
    </div>
  <?php endwhile; ?>
    </div>
  </div>
  <div  style="text-align: center;margin: 10px;">
  <a href="productDetails.php" class="btn btn-success">View All</a>
  </div>
   </section>
   </div>
   <!---productsdiv end--->
     <!---shopsdiv--->
   <div id="shopsdiv" style="display: none;">
     <section>
       <div class="container">
         <?php  
              $stmt = $db->prepare('SELECT * FROM businesses ORDER BY DateCreated DESC LIMIT 20');
              $stmt->execute();
              $result = $stmt->get_result();
              while ($row = $result->fetch_assoc()):
                $Owner = $row['ShopName'];
                $opens = strtotime($row['Opening']);
                $openingtime = date('h : ia',$opens);
                $close = strtotime($row['Closing']);
                $closingtime = date('h : ia',$close);
                 $joined = strtotime($row['DateCreated']);
                $actualjiondate = date('l d-m-Y h:ia',$joined);
                $descriptio = ucwords($row['Description']);
            ?>
         <div style="text-align: center;border: 3px solid green;margin: 20px;padding: 10px;">
           <div style="margin-top: 10px;">
            <div style="font-size: 20px;font-weight: bolder;"><?=$row['ShopName'] ?></div>
             <img src="Profiles/<?= $row['Profile'] ?>" class="img-fluid img-thumbnail" style="height: 200px;width: 200px;">
           </div>
           <div class="w3-light-blue" style="margin-top: 10px;margin-bottom: 10px;">
           <div>
             Located in <strong><?= $row['County'] ?></strong> county at <strong><?= $row['Town'] ?></strong> Town Near <strong><?= $row['Street'] ?></strong> Street
           </div>
           <div>
             Enterpreneuer : <strong><?=$row['Owner'] ?></strong>
           </div>
           <div>
             Dealers in : <strong><?=$row['productscategory'] ?></strong>
           </div>
           <div>
             Opens at <strong><?=$openingtime ?></strong> and Closes at <strong><?= $closingtime ?></strong>
           </div>
           <div>
             Joined Us on <strong><?=$actualjiondate ?></strong>
           </div>
            <div>
            Phonenumber <strong>+254<?=$row['Phonenumber'] ?></strong>
           </div>
           </div>
           <div class="w3-green" style="margin-bottom: 10px;">
             <strong><?=$descriptio ?></strong>
           </div>
           <div style="margin-bottom: 10px;">           
            <a href="tel:+254<?=$row['Phonenumber'] ?>" class="btn btn-primary"><i class="fas fa-phone"></i>Call Them</a><br>
            <a href="" class="btn btn-success" style="margin-top: 10px;"><i class="">WhatsApp Them</i></a><br>
            <a href="" class="btn btn-info" style="margin-top: 10px;"><i class="">View all their products</i></a>
         </div>
       </div>
     <?php endwhile; ?>
     <div style="text-align: center;margin: 10px;">
       <a href="#" class="btn btn-secondary">See All Shops</a>
     </div>
   </div>
     </section>
   </div>
     <!---shopsdiv end--->
     </div>
 <section class="howto">
    <h3 style="text-align: center">Tutorials</h3>
    <div class="container">
      <div class="tabs">
        <div class="tabitems">
     <div class="tabheading">
       <a href="JavaScript:void(0)" id="h1">Create Add</a>
       <a href="JavaScript:void(0)" id="h2">How to Shop</a>
       <a href="JavaScript:void(0)" id="h3">How we work</a>
       <a href="JavaScript:void(0)" id="h4">FAQ</a>
        </div>
        <div class="content">
       <div class="tabcontentforheaading">
         <div class="tabcontent" id="tab1">
           <p style="font-size: 15px;">Creating Add basically uploading images of products you wish to sell together with appropriate descriptions.
            The description should be concise and not too lengthy.Once you create the add it will be posted and interested buyers will follow you up.However,for one to be able to upload to create must have an <a href="">Terms and conditions </a> will apply.</p>
            <h5 style="text-align: center;">Types of adds</h5>
            <h6 style="text-align: center;">(1) Free Adds</h6>
            <p>Adds under this category are not charged any fee.Anybody can upload a add and get followers.This category of adds features products from some categories.It involves uploading purely images</p>
            <h6 style="text-align: center;">(1) Premium Adds</h6>
            <p>Adds under this category are charged a small fee.It features Adds under <strong>Properties</strong> and <strong>Vehicles</strong> Categories.Under this category one can upload videos demonstrating the use of a product.</p>
         </div>
       </div>
       <div class="tabcontentforheaading">
         <div class="tabcontent" id="tab2">
           <p>ttttttttttttttttttttttttttt</p>
         </div>
       </div>
       <div class="tabcontentforheaading">
         <div class="tabcontent"  id="tab3">
           <p>yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy</p>
         </div>
       </div>
       <div class="tabcontentforheaading">
         <div class="tabcontent"  id="tab4">
          <p>uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu</p> 
         </div>
       </div>
    </div>
     </div>
    </div>
  </div>
  </section>
<!----website features section---->
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
<script type="text/javascript">
  function topFunction() {
    $("html, body").animate(
      { scrollTop: "0" }, 1000);
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#h1").click(function(){
    $("#tab1").show(2000);
    $("#tab2").hide();
    $("#tab3").hide();
    $("#tab4").hide();    
  });
    $("#h2").click(function(){
    $("#tab1").hide();
    $("#tab2").show(2000);
    $("#tab3").hide();
    $("#tab4").hide();    
  });
    $("#h3").click(function(){
    $("#tab1").hide();
    $("#tab2").hide();
    $("#tab3").show(2000);
    $("#tab4").hide();    
  });
    $("#h4").click(function(){
    $("#tab1").hide();
    $("#tab2").hide();
    $("#tab3").hide();
    $("#tab4").show(2000);   
  });
    $(".viewitem").click(function(e){
      e.preventDefault();
      var $form = $(this).closest(".getdetails");
      var pid = $form.find(".pid").val();
      $.ajax({
        url: 'php/action6.php',
        method: 'post',
        data: {
          pid: pid
        }, 
        success: function(response){
          $("#product_details").html(response);
          window.scrollTo(0,0);
        }
      });
    });
    $("#openshops").click(function(){
      $("#shopsdiv").show(2000);
      $("#productsdiv").hide(2000);
    });
       $("#openproducts").click(function(){
      $("#productsdiv").show(2000);
      $("#shopsdiv").hide(2000);
    });          
  });
</script>
</body>
</html>