<?php 
require_once 'php/session.php';
#require_once 'php/products.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css2/w3.css">
<link rel="stylesheet" type="text/css" href="fontawe/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/fileup.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Shop Home</title>
</head>
<body>
    <div style="background-color: #ff1a75;">
  <div class="container">
    <h3 style="text-align: center;color: blue;"> Your top ranking Online market place</h3>
    <p style="text-align: center;color: green;font-weight: bold;">Buy and Sell through our peculiar Platform. <br>We are here for you. </p>
  </div>
  </div>
  <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark sticky-top">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="img-fluid" style="width: 100px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "Shophome.php")?"active":""; ?> font-weight-bold active" href="Shophome.php" style="color: black;font-size: 15px;"><i class="fas fa-home"></i>&nbsp;Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "productImages.php")?"active":""; ?> font-weight-bold " href="uploadproducts.php" style="color: black;font-size: 15px;"><i class="fas fa-cart-plus"></i>&nbsp;Upload Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "profile.php")?"active":""; ?> font-weight-bold" href="profile.php" style="color: black;font-size: 15px;"><i class="fas fa-user-circle"></i>&nbsp;Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "feeback.php")?"active":""; ?> font-weight-bold" href="feedback.php" style="color: black;font-size: 15px;"><i class="fas fa-comment-dots"></i>&nbsp;Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=(basename($_SERVER['PHP_SELF']) == "notifications.php")?"active":""; ?> font-weight-bold" href="notifications.php" style="color: black;font-size: 15px;"><i class="fas fa-bell"></i>&nbsp;Notifications</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link font-weight-bold dropdown-toggle" id="navbardrop" href="#" style="color: black;font-size: 15px;" data-toggle="dropdown"><i class="fas fa-user-cog"></i>&nbsp;Hello <?=$cowner; ?></a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;Setting</a>
          <a href="php/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a> 
        </div>
      </li>
    </ul>
  </div>
</nav>
 <section>
  <div class="container">
    <h5 style="text-align: center;">Good Morning <span style="color: red;font-size: 30px;"><?=$shopowner ?></span>, You are currently logged in to your shop named <span style="color: red;font-size: 30px;"><?=$shop; ?></span></h5>
    <hr>
    <hr>
    <h5 style="text-align: center;">Hi <span style="color: red;font-size: 30px;"><?=$shopowner ?></span>  Upload Images Using This Form:</h5>
    <h6 style="text-align: center;">Update images for your <span><?=$prodname; ?></span></h6>
 		<div style="display: flex;justify-content: center;align-items: center;">
 				 <form action="php/action4.php" enctype="multipart/form-data" id="uploadImagesform" method="POST">
           
              <input type="hidden" name="owner" value="<?=$prodsn; ?>" class="form-control">
            
          <div class="form-group">
            <input type="file" id="files" name="files[]" class="form-control" multiple hidden>
            <label for="files" style="color: white;background-color:  #ff00bf;padding: 10px;font-size: 20px;font-weight: bold;"><i class="fas fa-file"></i>&nbsp; &nbsp;Click Me To Select Images</label>
            </div>
          <div class="form-group">
            <input type="submit" name="Upload_Images" id="Upload_Images" value="Next" class="btn btn-block btn-primary">
          </div>                                       
          </form>
        
 		</div>
    <div id="imageupAlert">
      
    </div>
      <div id="dvPreview" style="width: 100%;height: auto;margin-bottom: 20px;border:3px solid black;display:flex;padding: 20px;overflow-x: auto;"></div>
      <div id="successfully"></div>
 	</div>
 </section>
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
<script type="text/javascript" src="js2/fileup.js"></script>
<script type="text/javascript">
	 function topFunction() {
    $("html, body").animate(
      { scrollTop: "0" }, 1000);
  }
</script>
<script type="text/javascript">
  $(function() {
    $("#files").change(function () {
      if (typeof (FileReader) != "undefined") {
        var dvPreview = $("#dvPreview");
        dvPreview.html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        $($(this)[0].files).each(function () {
          var file = $(this);
          if(regex.test(file[0].name.toLowerCase())) {
            var reader = new FileReader();
              reader.onload = function (e) {
                var img = $("<img />");
                img.attr("style", "height:auto;width:100%;padding:10px;");
                img.attr("src", e.target.result);
                dvPreview.append(img);
              }
              reader.readAsDataURL(file[0]);
          } else {
            alert(file[0].name +"is not a valid image file.");
            dvPreview.html(" ");
            return false;
          }
        }); 
      }else {
        alert("This browser does not support FileReader");
      }
    });
  });
</script>	
<script type="text/javascript">
  $(document).ready(function() {
    $("#uploadImagesform").on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'php/action5.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
          if (response = "success") {
           window.location = 'Shophome.php';
          }else{
            $("#imageupAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">Server Error</strong></div>');
          }
        }
      });
    });
  });
</script>
</body>
</html>