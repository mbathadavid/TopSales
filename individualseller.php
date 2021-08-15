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
<body>
	<section>
		<div class="container">
	<form action="#" enctype="multipart/form-data" id="shopcreateform" method="POST">
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
                     <select class="form-control subcounty" id="subcounty" name="subcounty">
      
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
          </div>
          </section>
<script type="text/javascript" src="js2/jquery.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="fontawe/js/all.min.js"></script>
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
		 });
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
</body>
</html>