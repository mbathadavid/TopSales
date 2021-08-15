<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css2/w3.css">
<link rel="stylesheet" type="text/css" href="fontawe/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Account Page</title>
</head>

<body id="mainbody" onload="Showpage()">
  <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <div style="background-color: #ff1a75;">
  <div class="container">
    <h5 style="text-align: center;color: blue;"> Create Account Through This Page</h5>
    <p style="text-align: center;color: green;font-weight: bold;">Become Seller by  creating an account. </p>
  </div>
  </div>
<!---top bar---->
<div class="w3-container" style="display: flex;">
  <div style="width: 100%;display: flex;justify-content: center;align-items: center;" class="">
  <h4><a href="shop-login.php" style="text-decoration: none;color:  green;font-size: px;font-weight: bold;">Already have a Account?Log In</a></h4>
  </div>
</div>

<section>
  <div class="container">
    <h5 style="text-align: center;">We have four account types for sellers:</h5>
    <div class="sellertypes">
          <div style="width: 150px;height: 150px;border: 3px solid black;display: flex;justify-content: center;align-items: center;margin: 10px;background-color:  #f2f2f2;border-radius: 10px;" class="seller">
          <a href="JavaScript:void(0)" class="btn btn-danger">Individual Seller</a>
        </div>
          <div style="width: 150px;height: 150px;border: 3px solid black;display: flex;justify-content: center;align-items: center;margin: 10px;background-color:  #f2f2f2;border-radius: 10px;" class="seller">
          <a href="JavaScript:void(0)" class="btn btn-danger">Web Shop</a>
        </div>
        <div style="width: 150px;height: 150px;border: 3px solid black;display: flex;justify-content: center;align-items: center;margin: 10px;background-color:  #f2f2f2;border-radius: 10px;" class="seller">
          <a href="JavaScript:void(0)" class="btn btn-danger">Service Provider</a>
        </div>
        <div style="width: 150px;height: 150px;border: 3px solid black;display: flex;justify-content: center;align-items: center;margin: 10px;background-color:  #f2f2f2;border-radius: 10px;" class="seller">
          <a href="JavaScript:void(0)" class="btn btn-danger">Jobs Lister</a>
        </div>
    </div>

    <div>
      <h6 style="text-align: center;color: white;"><span style="background-color: #008000;padding: 5px;border-radius: 25px;">Individual Seller</span></h6>
      <p style="text-align: center;background-color: #e6e600;padding: 10px;border-radius: 10px;">Here the seller is just a normal seller.All you have to do is create an account and start listing your products.This is convinient for people who don't have physical stores/shops.This account requires less details.This account involves sell of tangible goods such as Electronics,Vehicles,agricultural machines,Furnitures etc...<br><a href="individualseller.php" class="btn btn-info">Register</a></p>
    </div>

    <div>
      <h6 style="text-align: center;color: white;"><span style="background-color: #008000;padding: 5px;border-radius: 25px;">Web Shop</span></h6>
      <p style="text-align: center;background-color: #e6e600;padding: 10px;border-radius: 10px;">In this case the seller has a physical store/shop where they operate there business.Here you register an account with details such as physical location of your shop,opening and closing time and you will have a business page in our platform where customers can view all your profile and all products you have uploaded.This account involves sell of tangible goods such as Electronics,Vehicles,agricultural machines,Furnitures etc...<br><a href="webshop.php" class="btn btn-info">Register</a></p>
    </div>

    <div>
      <h6 style="text-align: center;color: white;"><span style="background-color: #008000;padding: 5px;border-radius: 25px;">Service Provider</span></h6>
      <p style="text-align: center;background-color: #e6e600;padding: 10px;border-radius: 10px;">This type of account is for service providers.Services may include: Car hire services,Artificial insemination services,House rent services,Buying dead laptops,Web Design Services,Vehicle Repair Services etc.Any Service Should be listed here.<br><a href="serviceprovider.php" class="btn btn-info">Register</a></p>
    </div>

    <div>
      <h6 style="text-align: center;color: white;"><span style="background-color: #008000;padding: 5px;border-radius: 25px;">Jobs Lister</span></h6>
      <p style="text-align: center;background-color: #e6e600;padding: 10px;border-radius: 10px;">This is for people who want to advertise job vacancies and opportunities.<br><a href="joblister.php" class="btn btn-info">Register</a></p>
    </div>
  </div>
</section>
 <!---top bar---->       
<!---create account--->
 <section class="createaccount-section" id="createshopsection">
      <div class="container">
        <div class="text-align-center">
          <a name="create-account"></a>
          <!----Shop create form---->
          <form action="#" enctype="multipart/form-data" id="shopcreateform" method="POST" style="display: none;">
            <div class="row">
              <div class="col-md-3 shopcol">
                <h6 style="font-size: 20px;font-weight: bolder;color: #e6005c;border-bottom: 3px solid #00804d;text-align: center;">1.Shop owner Details</h6>
                <div class="form-group">
                  <label for="Phone" style="font-size: 20px;font-weight: bold;color: #ff0066;">Full Name</label>
                  <input type="text" name="Owner" class="form-control" placeholder="Enter your full name" required>
                </div>
                 <div class="form-group">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">Email Address</label>
                  <input type="email" name="OwnerEmail" class="form-control" placeholder="Enter your Email" required>
                </div>
                <div class="form-group">
                  <label for="Phone" style="font-size: 20px;font-weight: bold;color: #ff0066;">Phone Number</label>
                  <input type="phone" name="Phonenumber" class="form-control" placeholder="Enter your Phone Number" required>
                </div>
               
              </div>
               <div class="col-md-3 shopcol">
                <h6 style="font-size: 20px;font-weight: bolder;color: #e6005c;border-bottom: 3px solid #00804d; text-align: center;">2.Location Details</h6>
                <div class="form-group">
                  <label for="County" style="font-size: 20px;font-weight: bold;color: #ff0066;">County</label>
                  <?php 
              $counties = array('' => 'Select a county', 'Baringo' => 'Baringo','Bomet' => 'Bomet', 'Bungoma' => 'Bungoma', 'Busia' => 'Busia', 'Elgeyo Marakwet' => 'Elgeyo Marakwet', 'Embu' => 'Embu', 'Garissa' => 'Garissa', 'Homa Bay' => 'Homa Bay', 'Isiolo' => 'Isiolo', 'Kajiando' => 'Kajiando', 'Kakamega' => 'Kakamega', 'Kericho' => 'Kericho', 'Kiambu' => 'Kiambu', 'Kilifi' => 'Kilifi', 'Kirinyaga' => 'Kirinyaga', 'Kisii' => 'Kisii', 'Kisumu' => 'Kisumu', 'Kitui' =>'Kitui', 'Kwale' => 'Kwale', 'Laikipia' => 'Laikipia', 'Lamu' => 'Lamu', 'Machakos' => 'Machakos', 'Makueni' => 'Makueni', 'Mandera' => 'Mandera', 'Marsabit' => 'Marsabit', 'Meru' => 'Meru', 'Migori' => 'Migori', 'Mombasa' => 'Mombasa', 'Muranga' => 'Muranga', 'Nairobi' => 'Nairobi', 'Nakuru' => 'Nakuru', 'Nandi' => 'Nandi', 'Narok' => 'Narok', 'Nyamira' => 'Nyamira', 'Nyandarua' => 'Nyandarua', 'Nyeri' => 'Nyeri', 'Samburu' => 'Samburu', 'Siaya' => 'Siaya', 'Taita Taveta' => 'Taita Taveta', 'Tana River' => 'Tana River', 'Tharaka Nithi' => 'Tharaka Nithi', 'Trans Nzoia' => 'Trans Nzoia', 'Turkana' => 'Turkana', 'Uasin Gishu' => 'Uasin Gishu', 'Vihiga' => 'Vihiga', 'Wajir' => 'Wajir', 'West Pokot' => 'West Pokot');
              echo '<select class="form-control countysel" id="sel1" name="County" required>';
              foreach ($counties as $key => $choice) {
                echo '<option value="'.$key.'">'.$choice.'</option>';
              }
              echo '</select>';
                  ?>                         
                </div>

                 <div class="form-group">
                  <label for="County" style="font-size: 20px;font-weight: bold;color: #ff0066;">Subcounty</label>
                     <select class="form-control subcounty" id="subcounty" name="subcounty" required>
      
                    </select>
                </div>

            <div class="form-group">
                    <label for="Shop Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Town</label>
                  <input type="text" name="Town" class="form-control" placeholder="Enter the name of your town" required>
                </div>

<div class="form-group">
                    <label for="Street" style="font-size: 20px;font-weight: bold;color: #ff0066;">Street</label>
                  <input type="text" name="Street" class="form-control" placeholder="Enter the name of your nearest street" required>
                </div>

              </div>
              <div class="col-md-3 shopcol">
              <h6 style="font-size: 20px;font-weight: bolder;color: #e6005c;border-bottom: 3px solid #00804d;text-align: center;">3.Login Details</h6>
              <div class="form-group">
              <label for="password" style="font-size: 20px;font-weight: bold;color: #ff0066;">Username(To be Used for Login)</label>
              <input type="text" id="loginusername" name="loginusername" class="form-control" placeholder="Enter Username for Log In" required>
              </div>
               <div class="form-group">
                  <label for="password" style="font-size: 20px;font-weight: bold;color: #ff0066;">Password</label>
                  <input type="Password" id="Shoppassword" name="shopownerpassword" class="form-control" placeholder="Enter your shop Password" required>
                </div>
                <div class="form-group">
                  <label for="Phone" style="font-size: 20px;font-weight: bold;color: #ff0066;">Confirm Password</label>
                  <input type="Password" id="confirmshoppassword" name="confirmpassword" class="form-control" placeholder="Re-type your password to confirm" required>
                </div>
                <div class="form-group">
                  <div id="PassErr" class="text-danger font-weight-bold"></div>
                </div>
              </div>
               <div class="col-md-3 shopcol">
                <h6 style="font-size: 20px;font-weight: bolder;color: #e6005c;border-bottom: 3px solid #00804d;text-align: center;">4.Business Details</h6>
                <div class="form-group">
                    <label for="Shop Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Shop Name</label>
                  <input type="text" name="Shopname" class="form-control" placeholder="Enter your Shop name" required>
                </div>
                  <div  class="form-group">
                    <label for="categories" style="font-size: 20px;font-weight: bold;color: #ff0066;">What category of products do you deal with?</label>
     <select class="form-control" id="sel2" name="productscategory" required>
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
       <option value="">Different categories</option>
     </select>
   </div>
                
                     <div class="form-group">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">Opening Hours</label>
                  <input type="time" name="Opening" class="form-control" required>
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">Closing Hours</label>
                  <input type="time" name="Closing" class="form-control" required>
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">More Details about your shop </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" placeholder="Briefly Describe your Shop, e.g,My Business with sell of electronics"></textarea>
                </div>
                  <div class="form-group file">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">Profile picture </label><br>
                  <input type="file" name="files[]" id="actualfile" hidden>
                  <label for="actualfile" class="filebtn"><span><i class="fas fa-camera"></i></span>&nbsp;Select Profile Picture</label>
                <div class="image-preview" id="image-preview">                
                </div>
                </div>                                        
                  <div class="form-group">
                    
                  <input type="submit"  class="form-control btn-success btn-block" id="createshopbtn" value="LAUNCH WEB SHOP" name="submit">
                </div>
              </div>
              

   
            </div>
            <div id="regAlert" style="margin-bottom: 20px;"></div>
          </form>
          <!----Shop create form end---->

          <!----Individual Seller---->
          <!----Individual seller form end---->

        </div>
      </div>
    </section>
    <hr>
    <hr>
<!---create account end--->

<!---log in to shop--->
   <section id="loginshopsection">
     <div class="container">
     
  <a href="shop-login.php" style="text-decoration: none;color:  purple;font-size: 15px;font-weight: bold;display: flex;justify-content: center;align-items: center;">You have Created an Account?Log In</a>
  <a href="createaccountfiles/page1.php" class="btn btn-info" style="display: flex;justify-content: center;align-items: center;">Create Account</a>
  </div>  
   </section>     
<!---log in to shop end--->

<hr>
    <hr>
 
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
    $("#shopcreatebtn").click(function() {
      $("#shopcreaterow").css("background-color","green");
      $("#individualsellerrow").css("background-color","");
      $("#shopcreateform").show();
    });
     $("#individualsellerbtn").click(function() {
      $("#individualsellerrow").css("background-color","green");
      $("#shopcreaterow").css("background-color","");
    });
     $("#login").click(function() {
      $("#passreset").slideUp(3000);
      $("#logtoshopform").slideDown(4000);
     });
      $("#reset").click(function() {
      $("#logtoshopform").slideUp(3000);
      $("#passreset").slideDown(4000);
     });
     $(document).on("change", "#actualfile", function() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("actualfile").files[0]);
      oFReader.onload = function (oFREvent){
      $("#image-preview").html('<img src= " ' +oFREvent.target.result+' " class="img-fluid">');
}     
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
  $(document).ready(function(){
    $("#shopcreateform").on('submit',function(e){
      if($("#shopcreateform")[0].checkValidity()){
      e.preventDefault();
      $("#createshopbtn").val('Please Wait...');
      if ($("#Shoppassword").val() != $("#confirmshoppassword").val()) {
        $("#PassErr").text('* Passwords did not match');
        $("#createshopbtn").val('LAUNCH WEB SHOP');
      } else {
      $.ajax({
        type: 'POST',
        url: 'php/action.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
        $("#regAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');   
        } 

      });
    }
    }
    });

   $("#individualsellerform").on('submit',function(e){
      if($("#shopcreateform")[0].checkValidity()){
      e.preventDefault();
      $("#createshopbtn").val('Please Wait...');
      if ($("#Shoppassword").val() != $("#confirmshoppassword").val()) {
        $("#PassErr").text('* Passwords did not match');
        $("#createsindiidualhopbtn").val('Create Account');
      } else {
      $.ajax({
        type: 'POST',
        url: 'php/action.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
        $("#individualregAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');   
        } 

      });
    }
    }
    });  
});
</script>
<script type="text/javascript">
 $(document).ready(function(){ 

$('.countysel').change(function(e){
      e.preventDefault();
       county = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { county : county },
        success:function(response){
          $(".subcounty").html(response);
          console.log(response);
        }
      });
    
   });


   $("#logtoshop").click(function(e){
if ($("#logtoshopform")[0].checkValidity()) {
  e.preventDefault();
  $("#logtoshop").val("Please Wait.....");
  $.ajax({
    url: 'php/action.php',
    method: 'post',
    data: $("#logtoshopform").serialize()+'&action=login',
    success: function(response){
        $("#logtoshop").val("Log In To Shop");
      if (response = "login") {
        window.location = "Shophome.php";
      }
      else if(response != "passincorrect"){
        $("#loginAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">Incorrect login Details.Please enter your shop name and email Correctly. </strong></div>');
      }
      else if(response != "nouser"){
        $("#loginAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">There is no such a shop in the database </strong></div>'); 
      }
      }
      });
     }
    });
    });
</script>
</body>
</html>