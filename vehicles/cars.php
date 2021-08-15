<?php 
require_once '../php/dbconfig.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css2/w3.css">
<link rel="stylesheet" type="text/css" href="../fontawe/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <title>Cars</title>
  <style type="text/css">
  .filter1 {
    padding: 5px;
    background-color: green;
    display: none;
  }
    .containerforproducts {
      display: flex;
    }
   .filterpart {
    width: 18%;
    height: 200px;
    height: auto;
    background-color: green;
    padding: 5px;
    display: block;
   }
   .productspart {
    width: 72%;
    height: 200px;
    height: 200px;
    background-color: yellow;
    padding: 10px;
   } 
   .advertisement {
    width: 10%;
    height: 200px;
    height: 200px;
    background-color: red;
    padding: 10px;
   }
   @media only screen and (max-width: 1130px) {
    .filter1 {
      display: flex;
      overflow-x: auto;
    }
    .containerforproducts {
      display: block;
    }
    .filterpart {
      width: 100%;
      height: 30px;
      display: none;
    }
    .productspart {
      width: 100%;
    }
    .advertisement {
       height: 60px;
       width: 100%;
    }
   }
  </style>
</head>
<body>
 

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
        <a class="nav-link font-weight-bold" href="#" style="color: black;font-size: 20px;">Cart <span style="color: red;">0</span></a>
      </li>
    </ul>
  </div>
</nav>
<div id="individualproddiv">
<section>
     <div class="container">
       
     </div>
     </div>
   </section>
 
   <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
   <!---productsdiv--->
   <div id="productsdiv">
   <!---Electonics--->
  <section class="electronics">
    <div class="containerforproducts">
      <div class="filter1">
        <input type="search" name="search" id="textsearch2" placeholder="Type to search here">
        <select name="status" id="status2">
          <option value=""><i class="fas fa-filter"></i>&nbsp;Filter By Condition</option>
          <option value="brand new">Brand New</option>
          <option value="used abroad">Used Abroad</option>
          <option value="used in kenya">Used in Kenya</option>
        </select>
        <select name="transmission" id="transmission2">
          <option value="">Filter By Transmission</option>
          <option value="manual">Manual</option>
          <option value="automatic">Automatic</option>
        </select>
        <div style="padding: 5px;background-color: grey;">
        <h6>Filter By Price Range</h6>
        <div style="display:flex;background-color: white;">
        <input type="number" name="lowestprice" id="lowestprice2" placeholder="Lowest Price">
        <input type="number" name="highestprice" id="highestprice2" placeholder="Highest Price">
        </div>
        </div>
        <input type="text" name="make" id="make2" placeholder="Type the Make here to filter">
        <input type="text" name="model" id="model2" placeholder="Type the Model here to filter">
        <input type="text" name="yom" id="yom2" placeholder="Type the year here here to filter">
        <input type="text" name="color" id="color2" placeholder="Type the Color here to filter">
      </div>
            <div class="filterpart">
        <input type="search" name="search" id="textsearch" placeholder="Type here to search"><br>
        <i class="fas fa-filter"></i>Filter By:<br>
        <label>Make</label>
        <input type="text" name="make" id="make" placeholder="Type the Make here"><br>
        <label>Model</label>
        <input type="text" name="model" id="model" placeholder="Type the Model here"><br>
        <label>Year of Manufacture</label>
        <input type="text" name="yom" id="yom" placeholder="Type the here here"><br>
        <label>Color</label>
        <input type="text" name="color" id="color" placeholder="Type the Color here"><br>
        <label>Condition</label><br>
        <select name="status" id="status">
          <option value=""></option>
          <option value="brand new">Brand New</option>
          <option value="used abroad">Used Abroad</option>
          <option value="used in kenya">Used in Kenya</option>
        </select><br>
        <label>Transmission</label><br>
        <select name="transmission" id="transmission">
          <option value=""></option>
          <option value="manual">Manual</option>
          <option value="automatic">Automatic</option>
        </select><br>
        <div class="pricefilter">
        <label>Price Range</label>
        <div style="background-color: grey;">
        <h6>Lowest Price</h6>
        <input type="number" name="lowestprice" id="lowestprice"><br>
        <h6>Highest Price</h6>
        <input type="number" name="highestprice" id="highestprice"><br>
      </div>
      </div>
      </div>
             <div class="productspart">
     
            </div> 
        <div class="advertisement">
    sdfghjkdfghjkghj
  </div>
 
    </div>
  </div>
  
   </section>
   </div>
   <!---productsdiv end--->
     <!---shopsdiv--->
   <div id="shopsdiv" style="display: none;">
    <section>
       <div class="container">
         <div id="electronics" style="background-color: purple;"></div>
       </div>
     </section>
     <section>
       <div class="container">
         
     <div style="text-align: center;margin: 10px;">
       <a href="#" class="btn btn-secondary">See All Shops</a>
     </div>
   </div>
     </section>
   </div>
     <!---shopsdiv end--->
     </div>

<div id="image_sliders" class="carousel slide" data-ride="carousel">
  
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
</ul>

</div>


 
<script type="text/javascript" src="../js2/jquery.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../fontawe/js/all.min.js"></script>
<script type="text/javascript" src="../js2/jplist.js"></script>
<script type="text/javascript" src="../js/jquery.inview.js"></script>
<script type="text/javascript">
  jplist.init();
</script>
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
<script type="text/javascript">
  $(document).ready(function(){
     fetchelectronics();
    function fetchelectronics(){
      $.ajax({
        url: '../php/vehiclesajaxhandle.php',
        method: 'post',
        data: { action: 'fetchcars' },
        success:function(response){
          $(".productspart").html(response);
          console.log(response);
        }
      });
    }

//get laat id
$(window).scroll(function(){
  if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
    var last_id = $(".add:last").attr("id");
   // console.log(last_id);
    loadMore(last_id);
  }
});

//sort table ajax
   fetchsortform();
    function fetchsortform(){
      $.ajax({
        url: '../php/action.php',
        method: 'post',
        data: { action: 'fetchsortform' },
        success:function(response){
          $("#sortfor").html(response);
          //console.log(response);
        }
      });
    }

    //sort ajax
    $('.sort').change(function(e){
      e.preventDefault();
       sortselect = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: '../php/action.php',
        method: 'post',
        data: { sortselect : sortselect },
        success:function(response){
          $(".parent").html(response);
          console.log(response);
        }
      });
    
   });
    //view details ajax
    /*  $("body").on("click", ".viewitem", function(e){
      e.preventDefault();
      pid = $(this).attr('id');
      $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { pid:pid },
        success:function(response){
          
      }
     });
      }); */
 
  });
</script>
<script type="text/javascript">
  function sayHello(){
    document.getElementById("deepproduct").style.display = 'none';
    document.documentElement.scrollTop = 0;
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#loader').on('inview', function(event, isInView) {
      if (isInView) {
        var nextPage = parseInt($('#pageno').val())+1;
        $.ajax({
          type: 'POST',
          url: '../php/action.php',
          data: { nextPage: nextPage},
          success: function(data){
            if(data != ''){
              $('.parent').append(data);
              $('#pageno').val(nextPage);
              console.log(data);
            }else {
              $('#loader').hide();
            }
          }  
        }); 
      } 
    });
  });
</script>
</body>
</html>