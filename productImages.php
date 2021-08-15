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
    <h6 style="text-align: center;">Click the camera icon below to upload more images for your <span><?=$prodname; ?></span></h6>
 		<div style="display: flex;justify-content: center;align-items: center;">
 				 <form action="php/action4.php" enctype="multipart/form-data" id="uploadImagesform" method="POST">
           
              <input type="hidden" name="owner" value="<?=$prodsn; ?>" class="form-control">
            
          <div class="form-group">
            <input type="file" id="files" name="files[]" class="form-control" multiple hidden>
            <label for="files" style="color:  #00b300;font-size: 50px;font-weight: bold;text-align: center;width: 100%;"><i class="fas fa-camera"></i></label>
            </div>
          <div class="form-group">
            <input type="submit" name="Upload_Images" id="Upload_Images" value="Next" class="btn btn-block btn-primary">
          </div>                                       
          </form>
       
 		</div>
    <div id="dvPreview" style="width: 100%;height: auto;margin-bottom: 20px;display:flex;padding: 20px;overflow-x: auto;border:3px solid black"></div>
 	</div>
 </section>
 <section>
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
          }
          else{
            $("#imageupAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
          }
        }
      });
    });
  });
</script>
</body>
</html>