<?php 
require_once 'php/header.php';
 ?>
 <section>
 	<div class="container">
 		<h5 style="text-align: center;">Good Morning <span style="color: red;font-size: 30px;"><?=$shopowner ?></span>, You are currently logged in to your shop named <span style="color: red;font-size: 30px;"><?=$shop; ?></span></h5>
 		<hr>
 		<hr>
 		<h5 style="text-align: center;">Upload products using the form below:</h5>
 		<div style="display: flex;justify-content: center;align-items: center;margin-bottom: 10px;">
 				 <form action="#" enctype="multipart/form-data" id="uploadprodform" method="POST">
            <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Owner</label>
                  <input type="text" name="productowner" class="form-control" value="<?=$csn; ?>">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product">
                </div>
                <div class="form-group">
                    <label for="Shop Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Condition of the product(New,Used or refurbished)</label>
                    <select class="form-control" id="Statusselect" name="Statusselect">
       <option value="">Status</option>
       <option value="new">New</option>
       <option value="Used">Used</option>
       <option value="refurbished">Refurbished</option> 
     </select>
		 </div>
		  <div  class="form-group">
        <label for="categories" style="font-size: 20px;font-weight: bold;color: #ff0066;">Select the most Suitable category of your product</label>
     <select class="form-control" id="sel2" name="productscategory">
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
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="Enter the brand of your product">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Price</label>
                  <input type="number" name="price" class="form-control" placeholder="Enter the Price eg Sh.25000/=">
                </div>
   <div class="form-group">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">Briefly Decribe the Product </label>
                  <textarea cols="10" class="form-control" name="proddescription" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;"></textarea>
                </div>
              <div class="form-group">
            <input type="file" id="files" name="files[]" class="form-control" multiple>
            <label for="files" style="color: white;background-color:  #ff00bf;padding: 10px;font-size: 20px;font-weight: bold;"><i class="fas fa-file"></i>&nbsp; &nbsp;Click Me To Select Images</label>
            </div>-->      
                  <input type="submit"  class="form-control btn-success btn-block" id="uploadproduct" value="Next" name="submit">
                </div>
              </div>
              <div id="uploadAlert" class="statusMsg"></div>
          </form>
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
<script type="text/javascript" src="js2/fileup.min.js"></script>
<script type="text/javascript">
	 function topFunction() {
    $("html, body").animate(
      { scrollTop: "0" }, 1000);
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#uploadprodform").on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'php/action.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
           
           $("#uploadAlert").html(response);
         
          
        }
      });
    });
  });
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
</body>
</html>