<?php 
require_once 'php/config.php';
require_once 'php/auth.php';
$db = new Database();
$sub = new Auth();
$sql = "UPDATE visitors SET hits = hits+1 WHERE id = 0";
$stmt = $db->conn->prepare($sql);
$stmt->execute();

$msg = '';
if (isset($_POST['subscribe'])) {
  $subscribeemail = $_POST['semail'];
  $subscribe = $sub->subscribe($subscribeemail);
  if ($subscribe === true) {
    $msg = '<div class=" alert alert-success alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button>Thank you for subscribing.You will receive notifications and newsletters in your '.$subscribeemail.' email.</div>';
  } else {
  $msg = '<div class=" alert alert-danger alert-dismissible w3-red w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">Something went wrong</strong></div>';
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css2/w3.css">
<link rel="stylesheet" type="text/css" href="fontawe/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="customna.css">
	<title>Home Page</title>
 <style type="text/css">
 #loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('https://lkp.dispendik.surabaya.go.id/assets/loading.gif') 50% 50% no-repeat rgb(249,249,249);
 } 
 </style>
</head>

<body id="mainbody">
  <div id="loader"></div>
<!--Custom navbar &#11167; &#11166; --->
<header class="background-info">
  <div class="bars"><i class="fas fa-bars"></i></div>
  <div class="logo">
    <h3>SOKOKUU</h3>
  </div>
  <ul id="navbar" style="margin-top: 10px;">
    <li><a href="#">HOME</a></li>
    <li><a href="#">ABOUT</a></li>
    <li class="drop-one">
      <a href="#" id="productsopener">PRODUCTS <span style="font-weight: bold;color: purple;"><i class="fas fa-angle-down"></i></span></a>
      <div class="menu-one" id="menu1">

        <ul>
          <li><h6>ELECTRONICS</h6></li>
          <li><a href="electronicfiles/electronics1.php">All</a></li>
          <li><a href="electronicfiles/.php">Laptops</a></li>
          <li><a href="electronicfiles/.php">Desktops</a></li>
          <li><a href="electronicfiles/.php">TVs</a></li>
          <li><a href="electronicfiles/.php">Phones</a></li>
          <li><a href="electronicfiles/.php">Tablets</a></li>
          <li><a href="electronicfiles/.php">Audio and video equipments</a></li>
          <li><a href="electronicfiles/.php">Printers</a></li>
          <li><a href="electronicfiles/.php">Cameras</a></li>
          <li><a href="electronicfiles/.php">Projectors</a></li>
          <li><a href="electronicfiles/.php">Computer Accessories</a></li>
          <li><a href="electronicfiles/.php">Phone Accessories</a></li>
          <li><a href="electronicfiles/.php">Others</a></li>
        </ul>
          <ul>
          <li><h6>VEHICLES</h6></li>
          <li><a href="vehicles/allvehicles.php">All</a></li>
          <li><a href="vehicles/cars.php">Cars</a></li>
          <li><a href="vehicles/trucks.php">Trucks & Trailers</a></li>
          <li><a href="vehicles/buses.php">Vans,Buses & MiniBuses</a></li>
          <li><a href="vehicles/motorcycles.php">MotorCycles & Tuktuks </a></li>
          <li><a href="vehicles/carparts.php">Car parts & Accessories</a></li>
        </ul>
          <ul>
          <li><h6>PROPERTY SALES & RENTALS</h6></li>
          <li><a href="properties/allproperties.php">All</a></li>
          <li><a href="properties/housesforsale.php">Houses & Apartments for Sale</a></li>
          <li><a href="properties/housesforrent.php">Houses & Apartments for Rent</a></li>
          <li><a href="properties/landsforsale.php">Land & Plots for Sale</a></li>
          <li><a href="properties/landsforrent.php">Land & plots for Rent</a></li>
          <li><a href="properties/commercialsforsale.php">Commercial Property for Sale</a></li>
          <li><a href="properties/commercialsforrent.php">Commercial Property for Rent</a></li>
          <li><a href="properties/bedsitters.php">Bedsitters & Rooms for Sale</a></li>
          <li><a href="properties/eventcentres.php">Event Centres,Venues & workstations</a></li>
        </ul>
          <ul>
          <li><h6>HOUSEHOLD</h6></li>
          <li><a href="households/allhouseholds.php">All</a></li>
          <li><a href="households/furnitures.php">Furnitures</a></li>
          <li><a href="households/beddings.php">Beddings</a></li>
          <li><a href="households/fridges.php">Fridges</a></li>
          <li><a href="households/utensils.php">Utensils</a></li>
          <li><a href="households/otherhouseholds.php">More</a></li>
        </ul>
        <ul>
          <li><h6>BUILDING & CONSTRUCTION</h6></li>
          <li><a href="buildings/allbuildings.php">All</a></li>
          <li><a href="buildings/buildingmaterials.php">Building Materials</a></li>
          <li><a href="buildings/fencingmaterials.php">Fencing Materials</a></li>
          <li><a href="buildings/roofings.php">Roofing Materials</a></li>
          <li><a href="buildings/plumbingmaterials.php">Plumbing Materials</a></li>
          <li><a href="buildings/paints.php">Paints</a></li>
          <li><a href="buildings/otherbuildings.php">More</a></li>
        </ul>
          <ul>
          <li><h6>ENERGY</h6></li>
          <li><a href="energy/allenergysupplies.php">All</a></li>
          <li><a href="energy/batteries.php">Batteries</a></li>
          <li><a href="energy/solars.php">Solar Panels</a></li>
          <li><a href="energy/gases.php">Gas</a></li>
          <li><a href="energy/jikos.php">Jikos</a></li>
          <li><a href="energy/generators.php">Generators</a></li>
          <li><a href="energy/otherenergysupplies.php">More</a></li>
        </ul>
          <ul>
          <li><h6>FASHIONS & Beauty</h6></li>
          <li><a href="fashions/allfashions.php">All</a></li>
          <li><a href="fashions/bags.php">Bags</a></li>
          <li><a href="fashions/shoes.php">Shoes</a></li>
          <li><a href="fashions/clothings.php">Clothing</a></li>
          <li><a href="fashions/jewelleries.php">Jewelleries & Garments</a></li>
          <li><a href="fashions/costimestics.php">Costimestics</a></li>
          <li><a href="fashions/watches.php">Watches</a></li>
          <li><a href="fashions/otherfashion.php">More</a></li>
        </ul>
        <!---   <ul>
          <li><h6>HEALTH & HYGIENE</h6></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul> --->
          <ul>
          <li><h6>Industrial & Engineering Machinery & Equipments</h6></li>
          <li><a href="machines/allmachines.php">All</a></li>
          <li><a href="machines/constructionmachines.php">Construction Machines</a></li>
          <li><a href="machines/industrialplants.php">Industrial Plants & Machinery</a></li>
          <li><a href="machines/miningmachines.php">Mining Machinery</a></li>
          <li><a href="machines/waterdrillers.php">Water Drilling Machines</a></li>
          <li><a href="machines/othermachines.php">More</a></li>
        </ul>
          <ul>
          <li><h6>AGRICULTURE AND FARM SUPPLIES</h6></li>
          <li><a href="agriculture/allagriculture.php">All</a></li>
          <li><a href="agriculture/farmmachineries.php">Farm Machinery</a></li>
          <li><a href="agriculture/farmtools.php">Farm tools</a></li>
          <li><a href="agriculture/poultryequipments.php">Poultry Equipments</a></li>
          <li><a href="agriculture/poultryfeeds.php">Poultry Feeds</a></li>
          <li><a href="agriculture/seeds.php">Seeds & Seedlings</a></li>
          <li><a href="agriculture/agrochemicals.php">Agrochemicals</a></li>
          <li><a href="agriculture/fertilizers.php">Fertilizers</a></li>
          <li><a href="agriculture/farmproduces.php">Farm Produce</a></li>
          <li><a href="agriculture/animals.php">Animals</a></li>
          <li><a href="agriculture/otheragricultures.php">More</a></li>
        </ul>
         <ul>
          <li><h6>SOFTWARES & PROGRAMS</h6></li>
          <li><a href="#">All</a></li>
          <li><a href="#">POS</a></li>
          <li><a href="#">Ecommerce Sites</a></li>
          <li><a href="#">Websites</a></li>
          <li><a href="#">Android Apps</a></li>
        </ul>
        <!---  <ul>
          <li><h6>JOBS</h6></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
         <ul>
          <li><h6>SERVICES</h6></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul> --->
      </div>
    </li>
    <li><a href="#"><i class="fas fa-phone"></i>&nbsp;CONTACTS</a></li>
    <li class="drop-two">
      <a href="#">OUR SERVICES <span><i class="fas fa-angle-down"></i></span></a>
      <ul class="menu-two">
        <li><a href="#">Classified Marketing</a></li>
        <li><a href="#">Digital Marketing</a></li>
        <li><a href="#">Business Softwares</a></li>
        <li><a href="#">Bulk SMS</a></li>
        <li><a href="#">Bulk Email</a></li>
      </ul>
    </li>
    <li><a href="shop-login.php">SIGN IN</a></li>
    <li><a href="premiumservices.html">&nbsp;Premium Services</a></li>
  </ul>
</header>
  <div class="searchcontainer" style="margin-top: 0;">
  <h5>Connecting Buyers and Sellers</h5>
  <form class="searchform">
    <input type="text" name="productsearch" placeholder="Type here to search" class="searchfield"><span class="searchicon"><a href=""><i class="fas fa-search"></i></a></span>
  </form>
</div>
  <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

  <button id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<!---top nav bar
<nav class="navbar navbar-expand-md bg-info navbar-dark sticky-top">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="img-fluid" style="width: 100px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="index.php" style="color: black;font-size: px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="shop-login.php" style="color: black;font-size: px;">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="Create-shop.php" style="color: black;font-size: px;">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>---->

<!--Custom navbar--->
        <div class="create-add">
        <a class="btn" href="Create-shop.php"><span><i class="fas fa-cart-plus"></i>&nbsp;</span>Join to sell</a>
        </div>

<!--<section class="search">
  <div class="container">
    <div class="image" style="background-image: url(images/1.jpg);height: 350px;width: 100%;">
      
    </div>
    <form>
   <div  class="form-group">
     <input type="text" name="searchadd" class="form-control" placeholder="Search here">
   </div>
   <div  class="form-group">
     <input type="text" name="searchadd" class="form-control" placeholder="Location">
   </div>
  <div  class="form-group">
     <select class="form-control" id="sel1" name="categories">
       <option value="">Categories</option>
       <option value="electronics">Electronics</option>
       <option value="vehicles">Vehicles</option>
       <option value="fashion">Fashion & Beauty</option>
       <option value="leisure">Leisure,Sports & travel</option>
       <option value="property">Property Sales & Rentals</option>
       <option value="building">Building Supplies</option>
       <option value="Services">Services</option>
       <option value="Jobs">Jobs</option>
       <option value="commercial">Commercial Supplies</option>
       <option value="">Home, Garden & kids</option>
     </select>
   </div>
     <div  class="form-group">
     <input type="submit" name="searchadd" class="form-control btn btn-success" value="Search">
   </div>
 </form>
 </div>
  </section>--->
<!---slider section
<section class="sliderpartners">
  <h3 style="text-align: center; ">Our Partners</h3>
  <div class="container">
    <div style="display: flex;justify-content: center;">
    <div class="slider">
    <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <div class="slide first">
        <img src="images/3.jpg" class="img-fluid">
        <p>Safaricom</p>
      </div>
      <div class="slide">
        <img src="images/4.jpg" class="img-fluid">
      </div>
       <div class="slide">
        <img src="images/2.jpg" class="img-fluid">
      </div>
       <div class="slide">
        <img src="images/5.jpg" class="img-fluid">
      </div>
      <!---automatic slide
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
    </div>
    </div>
  </div>
  </div>
</section>--->
<!---featured categories--->
<section>
  <div class="container-fluid">

    </div>
  </div>
</section>
<section class="featuredadds" style="margin-top:20px;">
  <div class="parentcontainer">
    <h3 style="text-align: center;">Top Ads</h3>
      <div class="parent">
      </div>
    </div>
</section>

<!--Categories--->
<section>
  <div class="container">
    <div class="cat">
 
    </div>
  </div>
</section>

<section style="background-color: #00ffff;padding: 20px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="background-color: white;">
        <h6 style="text-align: center;">Subscribe to our newsletter to get notified of new products & deals</h6>
        <form action="#" method="POST">
          <div id="subscribealert"><?=$msg; ?></div>
          <div class="form-group">
            <input type="email" name="semail" class="form-control" required>
          </div>
        <div class="form-group">
          <input type="submit" name="subscribe" value="Subscribe" class="btn btn-success">
        </div>

        </form>
      </div>
    </div>
  </div>
</section>
<!--Categories--->
 <!--How to section--->
  <section class="howto">
    <h3 style="text-align: center;">Tutorials</h3>
    <div class="container">
      <div class="tabs">
        <div class="tabitems">
     <div class="tabheading">
       <a href="JavaScript:void(0)" id="h1" style="background-color: #008000;">Create Ads</a>
       <a href="JavaScript:void(0)" id="h2">How to Shop</a>
       <a href="JavaScript:void(0)" id="h3">How we work</a>
       <a href="JavaScript:void(0)" id="h4">FAQ</a>
        </div>
        <div class="content">
       <div class="tabcontentforheaading">
         <div class="tabcontent" id="tab1">
           <p style="font-size: 15px;">Creating Ad basically involves uploading images of products you wish to sell together with appropriate descriptions.
            The description should be concise and not too lengthy.Once you create the add it will be posted and interested buyers will follow you up.However,for one to be able to upload a product in our website they must <a href="Create-shop.php"> Create an account.</a>.</p>
            We offer both free and premium services.You will be able to learn more about premium services once you create an account.
         </div>
       </div>
       <div class="tabcontentforheaading">
         <div class="tabcontent" id="tab2">
           <p>Prospective sellers upload products in our website.Once you visit these website you will be able to see them.Once you click on a product you will be directed to another with the product details.On that page you be presented with three options to contact the seller i.e Phone Call,WhatsApp and email.After contacting the seller you can keep the conversation going even after you will leave the website.</p>
         </div>
       </div>
       <div class="tabcontentforheaading">
         <div class="tabcontent"  id="tab3">
           <p> We provide a platform for advertising your products.With the advent of digital marketing and social media platforms,we are able to do marketing at a premium price.We market the products through platforms such Facebook,Instagram,WhatsApp and many more.We also do Email marketing and offer bulk sms services. </p>
         </div>
       </div>
       <div class="tabcontentforheaading">
         <div class="tabcontent"  id="tab4">
          <p><b></b> </p>
          <b></b> 
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
          <p><a href="footer/privacy.html" style="color: #000000;">Privacy policy</a></p>
          <p><a href="footer/terms.html" style="color: #000000;">Terms of use</a></p>
          <p><a href="footer/safety.html" style="color: #000000;">Safety Policy</a></p>
          <p><a href="footer/location.html" style="color: #000000;">Location</a></p>
      </div>
        <div class="footeritem">
        <p><b>Company</b></p>
          <p><a href="" style="color: #000000;">About us</a></p>
          <p><a href="" style="color: #000000;">Contact Us</a></p>
          <p><a href="" style="color: #000000;">Affiliate</a></p>
          <p><a href="" style="color: #000000;">Site Map</a></p>
      </div>
        <div class="footeritem">
        <p><b>Follow Us</b></p>
          <p><a href="" style="color: #000000;"><i class="fas fa-facebook"></i>Facebook</a></p>
          <p><a href="" style="color: #000000;">Instagram</a></p>
          <p><a href="" style="color: #000000;">Twitter</a></p>
          <p><a href="" style="color: #000000;">Pinterest</a></p>
          <p><a href="" style="color: #000000;">Youtube</a></p>
      </div>
        <div class="footeritem">
        <p><b>Download</b></p>
          
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
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  "body").style.visibility = "hidden";
                document.querySelector(
                  "#loader").style.visibility = "visible";
            } else {
                document.querySelector(
                  "#loader").style.display = "none";
                document.querySelector(
                  "body").style.visibility = "visible";
            }
        };
    </script>
<script type="text/javascript">
 $(document).ready(function(){
    $("#h1").click(function(){
    $("#tab1").show(1000);
    $("#tab2").hide();
    $("#tab3").hide();
    $("#tab4").hide();
    $("#h1").css("background-color","#008000");
    $("#h2").css("background-color","");
    $("#h3").css("background-color",""); 
    $("#h4").css("background-color","");     
  });
    $("#h2").click(function(){
    $("#tab1").hide();
    $("#tab2").show(1000);
    $("#tab3").hide();
    $("#tab4").hide();
    $("#h1").css("background-color","");
    $("#h2").css("background-color","#008000");
    $("#h3").css("background-color",""); 
    $("#h4").css("background-color","");    
  });
    $("#h3").click(function(){
    $("#tab1").hide();
    $("#tab2").hide();
    $("#tab3").show(1000);
    $("#tab4").hide();
    $("#h1").css("background-color","");
    $("#h2").css("background-color","");
    $("#h3").css("background-color","#008000"); 
    $("#h4").css("background-color","");    
  });
    $("#h4").click(function(){
    $("#tab1").hide();
    $("#tab2").hide();
    $("#tab3").hide();
    $("#tab4").show(1000);
    $("#h1").css("background-color","");
    $("#h2").css("background-color","");
    $("#h3").css("background-color",""); 
    $("#h4").css("background-color","#008000");   
  });
     fetchfeaturedadds();
    function fetchfeaturedadds(){
      $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { action: 'fetchfeaturedadds' },
        success:function(response){
          $(".parent").html(response);
          
        }
      });
    }
 }); 
</script>

<script type="text/javascript">
    const productsopener = document.querySelector('#productsopener');
    const menu1 = document.querySelector('#menu1');
    productsopener.addEventListener('mouseout', ()=>{
      menu1.style.display = "none";
    })

  /*  const productsopener = document.querySelector('#productsopener');
    const menu1 = document.querySelector('#menu1');
    productsopener.addEventListener('click', ()=>{
      menu1.style.display = "block";
    })
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
  const bars = document.querySelector('.bars');
  const navbar = document.querySelector('#navbar');
  bars.addEventListener('click', ()=>{
    navbar.classList.toggle('active');
    bars.classList.toggle('rotate');
  })
</script>
<script type="text/javascript">
</script>
</body>
</html>