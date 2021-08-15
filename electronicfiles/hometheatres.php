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
  <title>Home Theatres</title>
  <style type="text/css">
      
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
   <div id="allproduts">
   <div style="display: flex;margin-bottom: 10px;">
    <a href="JavaScript:void(0)" style="width: 50%;background-color:  #ff4dd2;display: flex;justify-content: center;align-items: center;text-decoration: none;font-size: 20px;font-weight: bolder;" id="openproducts"><i class=""></i>Products</a>
    <a href="phonedealers.php" style="width: 50%;background-color:   #e600e6;display: flex;justify-content: center;align-items: center;text-decoration: none;font-size: 20px;font-weight: bolder;" id="openshops">Home Theatres Dealers</a>
   </div>
   <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
   <!---productsdiv--->
   <div id="productsdiv">
   <!---Electonics--->
  <section class="electronics">
    <h3 style="text-align: center;">Audio and Home Theatres</h3>
    <div class="container">
      
      <div class="parent">
     
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


 
<script type="text/javascript" src="js2/jquery.1.min.js"></script>
<!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

Popper JS 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

Latest compiled JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --->
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="fontawe/js/all.min.js"></script>
<script type="text/javascript" src="js2/jplist.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
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
        url: 'php/action.php',
        method: 'post',
        data: { action: 'fetchhometheatres' },
        success:function(response){
          $(".parent").html(response);
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
        url: 'php/action.php',
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
        url: 'php/action.php',
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
          url: 'php/action.php',
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