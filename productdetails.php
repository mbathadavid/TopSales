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
  <title>Home Page</title>
</head>
<body id="mainbody" onload="Showpage()">
  <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <div class="w3-modal w3-animate-zoom" id="submodal" style="margin-top: 250px;">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal" style="height: 40px;">
        <p style="text-align: center;color: red;"><b>Subscribe</b></p>
      </header>
      <div class="w3-container">
         <form>
           <div class="form-group">
             <label for="email">Enter your Email</label>
             <input type="email" name="subscribe-email" placeholder="email" class="form-control">
           </div>
           <div class="form-group">
             <label for="email">Enter your Phonenumber</label>
             <input type="number" name="subscribe-email" placeholder="email" class="form-control">
           </div>
           <button type="submit" class="btn btn-primary">Subscribe</button>
         </form>
        </div>
        <footer class="w3-container w3-teal">
          <a href="javascript:void(0)" class="w3-btn w3-red w3-closebtn" onclick="document.getElementById('submodal').style.display='none'" style="text-decoration: none;float: right;">Close</a>
        </footer>
    </div>
  </div>
  <div style="background-color: #ff1a75;">
  <div class="container">
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
        <div class="create-add">
        <a class="font-weight-bold btn btn-success" href="Create-shop.php" style="height: 50px;display: flex;justify-content: center;align-items: center;color: #00e6e6;font-size: 15px;"><span><i class="fas fa-cart-plus"></i>&nbsp;</span>Create a shop</a>
        </div>
         <section>
    <h3 style="text-align: center;">Electronics</h3>
    <div class="container">
      <div class="parent" id="product_details">
     
    </div>
    <div  style="text-align: center;">
  <a href="productDetails.php" class="btn btn-success">View All</a>
  </div>

   </section>
 <!--How to section--->
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
  var counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4){
      counter = 1;
    }
  }, 5000);
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
    $("#cat1").click(function(){
      $("#subcat1").show(1000);
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
    $("#cat2").click(function(){
      $("#subcat1").hide();
      $("#subcat2").show(1000);
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
        $("#cat3").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").show(1000);
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
            $("#cat4").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").show(1000);
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
                $("#cat5").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").show(1000);
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
                    $("#cat6").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").show(1000);
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
                        $("#cat7").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").show(1000);
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
                            $("#cat8").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").show(1000);
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
                                $("#cat9").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").show(1000);
      $("#subcat10").hide();
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
                                    $("#cat10").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").show(1000);
      $("#subcat11").hide();
      $("#subcat12").hide();
    });
                                        $("#cat11").click(function(){
      $("#subcat1").hide();
      $("#subcat2").hide();
      $("#subcat3").hide();
      $("#subcat4").hide();
      $("#subcat5").hide();
      $("#subcat6").hide();
      $("#subcat7").hide();
      $("#subcat8").hide();
      $("#subcat9").hide();
      $("#subcat10").hide();
      $("#subcat11").show(1000);
      $("#subcat12").hide();
    });
    $("#cat12").click(function(){
      $("#subcat1,#subcat2,#subcat3,#subcat4,#subcat5,#subcat6,#subcat7,#subcat8,#subcat9,#subcat10,#subcat11").hide();
      $("#subcat12").show(1000);
    });
    $("#cat20").click(function(){
      $("#subcat20").show(1000);
      $("#subcat21").hide();
    });
     $("#cat21").click(function(){
      $("#subcat21").show(1000);
      $("#scat20").hide();
    });
 }); 
</script>
<script type="text/javascript">
  const subscribe = document.getElementById("submodal");
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
  if ((document.bodyscrollTop >=2200) && (document.bodyscrollTop <=2700) ||( document.documentElement.scrollTop >= 2200) && ( document.documentElement.scrollTop <= 2700)) {
    subscribe.style.display = "block";
  }else{
    subscribe.style.display = "none";
  }
  }
</script>
<script type="text/javascript">
  function topFunction() {
    $("html, body").animate(
      { scrollTop: "0" }, 1000);
  }
</script>
<script type="text/javascript">
  
</script>
</body>
</html>