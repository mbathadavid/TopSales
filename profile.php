<?php 
require_once 'php/header.php';
 ?>
 <section>
  <div class="container">

      <?php if(!$account): ?>
      
       <div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom" style="font-size :px;"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center"><p style="font-size :15px;">Your Profile needs to be updated.Please update it.</p></strong></div>
      <?php else: ?>
      
      <?php endif; ?>
    </div>

       <div id="updateAlert" style="margin-bottom: 20px;"></div>
    <div style="width:100%;text-align: center;">
         <?php if(!$cprofile): ?>
      <img class="img-fluid img-thumbnail" src="Profiles/images.jpeg" style="height: 150px;width: 150px;border-radius: 10px;">
      <?php else: ?>
        <img class="img-fluid img-thumbnail" src="Profiles/<?=$cprofile; ?>" style="height: 150px;width: 150px;border-radius: 10px;">
      <?php endif; ?>
    </div>
    
    <h5 style="text-align: center;"><span  id="greeting" style="color: green;font-size: 15px;"></span> <span style="color: red;font-size: 20px;"><?=$shopowner ?></span></h5>
    <div style="display: flex;justify-content: center;align-items: center;overflow-x: auto;text-align: center;">
      <table class="shophometable table-responsive">
        <tr>
          <th>Shop</th>
          <th>Details</th>
        </tr>
        <tr>
          <td>Shop Owner</td>
          <td><?=$shopowner; ?></td>
        </tr>
        <tr>
          <td>Account Type</td>
          <td><?=ucfirst($accounttype); ?></td>
        </tr>
        <tr>
          <td>Shop Name</td>
          <td><?=$shop; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?=$cemail; ?></td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td><?=$cphone; ?></td>
        </tr>
        <tr>
          <td>County located</td>
          <td><?=$ccounty; ?></td>
        </tr>
         <tr>
          <td>Sub_County located</td>
          <td><?=$csubcounty; ?></td>
        </tr>
        <tr>
          <td>Town Located</td>
          <td><?=$town; ?></td>
        </tr>
        <tr>
          <td>Opening Hours</td>
          <td><?=$copen; ?></td>
        </tr>
        </tr>
        <tr>
          <td>Closing Hours</td>
          <td><?=$cclose; ?></td>
        </tr>
        </tr>
        <tr>
          <td>Date Registered</td>
          <td><?=$actualdate; ?></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><?=$cdescription; ?></td>
        </tr>
      </table>
    </div>
       <?php if (!$account) { ?>
    <a href="JavaScript:void(0)" class="btn btn-success" data-toggle="modal" data-target="#profileuploadmodal" style="text-align: center;margin: 10px;"> Click To Update Profile</a>
                  <?php } else { ?>  
      <a href="JavaScript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#profileuploadmodal" style="text-align: center;margin: 10px;"> Click To Update Profile</a>             
                
                 <?php } ?>
    </div>
  </section>
    <hr>
    <hr>
     <div class="modal w3-animate-zoom" id="profileuploadmodal">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Account Details Upload form</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
               <div style="display: flex;justify-content: center;align-items: center;margin-bottom: 10px;">
                    <form action="#" enctype="multipart/form-data" id="shopupdateform" method="POST">
            <div class="row">
              <div class="col-md-4">
                <h6 style="font-size: 15px;font-weight: bold;color: #e6005c;border-bottom: 3px solid #00804d;">Account owner Details</h6>
                <input type="hidden" name="sn" value="<?=$csn; ?>">
                <input type="hidden" name="oldimage" value="<?=$cprofile ?>">
                <div class="form-group">
                  <label for="Phone" style="font-size: 15px;font-weight: bold;color: #ff0066;">Full Name</label>
                  <input type="text" name="Owner" class="form-control" value="<?=$cowner; ?>" required>
                </div>
                 <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Email</label>
                  <input type="email" name="OwnerEmail" class="form-control" value="<?=$cemail; ?>"  readonly>
                </div>
                <div class="form-group">
                  <label for="Phone" style="font-size: 15px;font-weight: bold;color: #ff0066;">Phone Number(WhatsApp Number,will be used to link you with clients)</label>
                  <input type="phone" name="Phonenumber" class="form-control" value="<?=$cphone; ?>" required>
                </div>
                <div class="form-group">
                  <div id="PassErr" class="text-danger font-weight-bold"></div>
                </div>
              </div>
               <div class="col-md-4">
                <h6 style="font-size: 15px;font-weight: bold;color: #e6005c;border-bottom: 3px solid #00804d;">Location Details (Your current residence)</h6>
                <div class="form-group">
                  <label for="County" style="font-size: 15px;font-weight: bold;color: #ff0066;">County</label>
                    
                  <?php 
                  $counties = array($ccounty => $ccounty, 'Baringo' => 'Baringo','Bomet' => 'Bomet', 'Bungoma' => 'Bungoma', 'Busia' => 'Busia', 'Elgeyo Marakwet' => 'Elgeyo Marakwet', 'Embu' => 'Embu', 'Garissa' => 'Garissa', 'Homa Bay' => 'Homa Bay', 'Isiolo' => 'Isiolo', 'Kajiando' => 'Kajiando', 'Kakamega' => 'Kakamega', 'Kericho' => 'Kericho', 'Kiambu' => 'Kiambu', 'Kilifi' => 'Kilifi', 'Kirinyaga' => 'Kirinyaga', 'Kisii' => 'Kisii', 'Kisumu' => 'Kisumu', 'Kitui' =>'Kitui', 'Kwale' => 'Kwale', 'Laikipia' => 'Laikipia', 'Lamu' => 'Lamu', 'Machakos' => 'Machakos', 'Makueni' => 'Makueni', 'Mandera' => 'Mandera', 'Marsabit' => 'Marsabit', 'Meru' => 'Meru', 'Migori' => 'Migori', 'Mombasa' => 'Mombasa', 'Muranga' => 'Muranga', 'Nairobi' => 'Nairobi', 'Nakuru' => 'Nakuru', 'Nandi' => 'Nandi', 'Narok' => 'Narok', 'Nyamira' => 'Nyamira', 'Nyandarua' => 'Nyandarua', 'Nyeri' => 'Nyeri', 'Samburu' => 'Samburu', 'Siaya' => 'Siaya', 'Taita Taveta' => 'Taita Taveta', 'Tana River' => 'Tana River', 'Tharaka Nithi' => 'Tharaka Nithi', 'Trans Nzoia' => 'Trans Nzoia', 'Turkana' => 'Turkana', 'Uasin Gishu' => 'Uasin Gishu', 'Vihiga' => 'Vihiga', 'Wajir' => 'Wajir', 'West Pokot' => 'West Pokot');
              echo '<select class="form-control countysel" id="sel1" name="County" required>';
              foreach ($counties as $key => $choice) {
                echo '<option value="'.$key.'">'.$choice.'</option>';
              }
              echo '</select>';
                   ?>
                 </div>

                 <div class="form-group">
                  <label for="County" style="font-size: 15px;font-weight: bold;color: #ff0066;">Subcounty</label>
                     <select class="form-control subcounty" id="subcounty" name="subcounty" required>
                        <option value="<?=$csubcounty; ?>"><?=$csubcounty; ?></option>
                    </select>
                </div>

            <div class="form-group">
                    <label for="Shop Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Town</label>
                  <input type="text" name="Town" class="form-control" value="<?=$town; ?>" required>
                </div>
              </div>
               <div class="col-md-4">
                <h6 style="font-size: 15px;font-weight: bold;color: #e6005c;border-bottom: 3px solid #00804d;">Business Details</h6>
                  <div  class="form-group">
                    <label for="categories" style="font-size: 15px;font-weight: bold;color: #ff0066;">Account type</label>
     <select class="form-control" id="selectshop" name="acounttype" required>
      <option value="<?=$account ?>"><?=$account ?></option>
       <option value="individual">Individual</option>
       <option value="webshop">WEB SHOP</option>
     </select>
   </div>
                <?php if(!$cprofile): ?>
                   <div class="form-group file">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Profile picture (Optional)</label><br>
                  <input type="file" name="files" id="actualfile" hidden>
                  <label for="actualfile" class="filebtn"><span><i class="fas fa-camera"></i></span>&nbsp; Select Image</label>
                <div class="image-preview" id="image-preview">
                <img src="Profiles/images.jpeg" class="img-fluid">                
                </div>
                </div>
              <?php else: ?>
                  <div class="form-group file">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Profile picture (Optional) </label><br>
                  <input type="file" name="files" id="actualfile" hidden>
                  <label for="actualfile" class="filebtn"><span><i class="fas fa-camera"></i></span>&nbsp; Select Image</label>
                <div class="image-preview" id="image-preview">
                <img src="Profiles/<?=$cprofile; ?>" class="img-fluid">                
                </div>
                </div>
                <?php endif; ?>
                           
                           <?php if ($account === "individual") {  ?> 
                                    <div class="form-group" id="firstsubmit">  
                  <input type="submit"  class="form-control btn-success btn-block" id="createshopbtn" value="Update Account" name="updates">
                </div> 
                                       
                  <?php } else { ?>

                  <?php } ?>
              </div>
   
            </div>
             <div id="shoptype">
            <?php if ($account === "webshop") { ?>
             
              <div style="border: 2px solid #ff0066;padding: 10px;"><div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter your Businessname</label>
                  <input type="text" name="businessname" class="form-control" value="<?=$cshopname; ?>" required>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select The category of Products that you Deal With</label>
                  <select class="form-control" name="productcategory">
                    <option value="<?=$prodcategory; ?>"><?=$prodcategory; ?></option>
                     <option value="electronics">Electronics</option>
                     <option value="vehicles">Vehicles</option>
                     <option value="fashion">Fashion & Beauty</option>
                     <option value="leisure">Leisure,Sports & travel</option>
                     <option value="property">Property Sales & Rentals</option>
                     <option value="building">Building Supplies</option>
                     <option value="Household">Household Supplies</option>
                     <option value="Services">Services</option>
                     <option value="Jobs">Jobs</option>
                     <option value="energy">Energy</option>
                     <option value="farm">Farm Supplies</option>
                     <option value="other">Other</option>
                  </select>
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Opening Hours</label>
                  <input type="time" name="Opening" class="form-control" value="<?=$copen; ?>">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Closing Hours</label>
                  <input type="time" name="Closing" class="form-control" value="<?=$cclose; ?>">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Please give some Details of your Business </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" value="<?=$cdescription ?>" required><?=$cdescription; ?></textarea>
                </div>
                </div>                 
                <div class="form-group" style="margin-top :10px;">
                  <input type="submit" name="submit" id="updatebtn" value="Finish Update" class="btn btn-success btn-block">
                </div>
            <?php } else { ?> 

             <?php } ?> 
              
            </div>
          </form>

           </div>
          </div>
           </div>
             </div>
           </div>
  </div>
 </section>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <a href="#" class="btn btn-info btn-block" data-toggle="modal" data-target="#emailupdatemodal"><i class="fas fa-envelope fa-lg"></i>&nbsp;&nbsp;Update Your Email</a>
    </div>
    <div class="col-lg-6">
      <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#passwordresetmodal"><i class="fas fa-key fa-lg"></i>&nbsp;&nbsp;Change Password</a>
    </div>
  </div>

<div class="modal w3-animate-zoom" id="emailupdatemodal">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
              <div style="align-items: center;justify-content: center;">
               <h6 class="text-info text-center">Update Your Account Email</h6>
               </div>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
              <div style="justify-content: center;align-items: center;margin-bottom: 10px;">
                <div id="updateemailAlert"></div>
                <form action="#" method="POST" id="changeemailform">
                <input type="hidden" name="id" value="<?=$csn; ?>">
                <div class="form-group">
                  <label>Enter Your New Email</label>
                  <input type="email" name="newemail" class="form-control" placeholder="Enter your new Email" required>
                </div>
                 <div class="form-group">
                  <input type="submit" name="newemail" class="form-control btn btn-info" value="CHANGE EMAIL">
                </div>
                </form>
              </div>
             </div>
           </div>
          </div>
          </div>

         <div class="modal w3-animate-zoom" id="passwordresetmodal">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
              <div style="align-items: center;justify-content: center;">
               <h6 class="text-info text-center">Update Your Password</h6>
               </div>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
              <div style="justify-content: center;align-items: center;margin-bottom: 10px;">
                <div id="updatepasswordalert"></div>
                <form action="#" method="POST" id="changepasswordform">
                <input type="hidden" name="id" value="<?=$csn; ?>">
                <div class="form-group">
                  <label>Enter the current Email</label>
                  <input type="password" name="currentpassword" class="form-control" placeholder="Enter the current password" required>
                </div>
                 <div class="form-group">
                  <input type="submit" name="newemail" class="form-control btn btn-info" value="CHANGE PASSWORD">
                </div>
                </form>
              </div>
             </div>
           </div>
          </div>
          </div> 

 <section class="footer" style="background-color: #00b3b3;">
  <div class="">
<hr>
<div style="text-align: center;color: red;font-weight: bold;">Copyright &copy 2020.Buyit.com</div>
<hr>
</section>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
        }
      });
    });
    $('#selectshop').change(function(e){
      e.preventDefault();
       shopupdate = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/session.php',
        method: 'post',
        data: { shopupdate : shopupdate },
        success:function(response){
          $("#shoptype").html(response);
          $("#firstsubmit").css("display","none");
    }
  });
  });
  });
</script>

<script type="text/javascript">
 $(document).ready(function(){
    $("#shopupdateform").on('submit',function(e){
      e.preventDefault();
        Swal.fire({
        title: 'Are you Sure to upadate your profile?Your account details will change.',
        type: '',
        text: '',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update!',
      }).then((result) => {
        if (result.value) {
          $("#updatebtn").val("Please wait...");
      $.ajax({
        type: 'POST',
        url: 'php/action8.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
        if (response != 0) {
          Swal.fire(
            'Updated',
            'Account Updated Successfully',
            'success'
          )
          window.location = "profile.php";
        } else {
            Swal.fire(
            'Failed',
            'Account Update Failure!Please try again Later',
            'error'
          )

        //window.location = "profile.php";  
        } 
      }
      });
      }
    }
    )
    }); 

    $("#changeemailform").on('submit',function(e){
      e.preventDefault();
     
      $.ajax({
        type: 'POST',
        url: 'php/session.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
          if (response = "success") {
            window.location = "shop-login.php";
          }
         else {
        $("#updateemailAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         }    
        } 
      });
      });
    $("#changepasswordform").on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'php/session.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
          //if (response = "success") {
           // window.location = "shop-login.php";
          //}
         //else {
        $("#updatepasswordalert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         //}    
        } 
      });
    });
 checknotification();
    function checknotification(){
      $.ajax({
        url: 'php/session.php',
        method: 'post',
        data: { action: 'checknotification'},
        success:function(response){
          $("#checkNotification").html(response);
        }
      });
    } 
}); 
</script>
<script type="text/javascript">
  var d = new Date();
  var g = d.getHours();
  if (g < 12) {
    document.getElementById("greeting").innerHTML = "Good morning";
  }else if(g >= 12 && g <= 13 ){
    document.getElementById("greeting").innerHTML = "Good afternoon";
  }
 else{
  document.getElementById("greeting").innerHTML = "Good evening";
 } 
</script>
  <script type="text/javascript" src="accountnavigation.js">
   
  </script>
</body>
</html>