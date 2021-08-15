<?php 
require_once 'php/header.php';
 ?>

 <section>
 	<div class="container">
    <h6 style="text-align: center;"><a href="" data-toggle="modal" data-target="#productuploadModal" style="text-decoration: none;display: flex;justify-content: center;align-items: center;"><span style="background-color: #ff0066;border-radius: 25px;padding: 10px;">Upload a Product</span></a></h6>
     <h6 style="text-align: center;"><a href="premium.html" style="text-decoration: none;display: flex;justify-content: center;align-items: center;"><span style="background-color: #33cc33;border-radius: 25px;padding: 10px;">Premium Services</span></a></h6>
    <div class="verifydiv"> 
    </div>
         
  </div>
 </section>
 		<section>
        <div class="container">
        <div id="delAlert"></div>
           <div id="updateAlert" class="statusMsg"></div>
 				<div style="margin: 20px;" class="products">
        <p>Please Wait...</p>
        </div>
        </div>

 		</section>
    <section>
      <div class="container">
        <!---products upload modal--->
        <div class="modal w3-animate-zoom" id="productuploadModal">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Products Upload form</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
               <div style="display: flex;justify-content: center;align-items: center;margin-bottom: 10px;">
         <form action="#" enctype="multipart/form-data" id="uploadprodform" method="POST">
                  <h6 style="text-align: center;">Make sure you fill all fields with asteric(*)</h6>
                  <input type="hidden" name="productowner" class="form-control" value="<?=$csn; ?>">
                
               <!-- <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
                <div class="form-group">
                    <label for="Shop Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Condition of the product(New,Used or refurbished)</label>
                    <select class="form-control" id="Statusselect" name="Statusselect" required>
       <option value="">Status</option>
       <option value="new">New</option>
       <option value="Used">Used</option>
       <option value="refurbished">Refurbished</option> 
     </select>
     </div> --->
      <div  class="form-group">
        
     <select class="form-control productscategory" id="productscategory" name="productscategory" required>
       <option value="">Categories*</option>
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

        <div class="form-group" id="electronictypediv">
      
          <select class="form-control subcategorydiv" id="subcategorydiv" name="subcategorydiv" required>

          </select> 
        </div>

      <div class="productfurherdetails" style="border: solid 3px green;padding: 5px;border-radius: 5px;margin :5px;">
       <h6>More fileds will be populated here...</h6>
     </div>


    <div class="form-group">
    
      <select class="form-control" id="Statusselect" name="Statusselect" required>
       <option value="">Condition*</option>
       <option value="new">New</option>
       <option value="Used">Used</option>
       <option value="refurbished">Refurbished</option> 
     </select>
     </div> 

     <div class="form-group">
        <input type="number" name="price" class="form-control" placeholder="Ksh. Price*" required>
      </div>

      <div class="form-group">
        <input type="checkbox" name="pricenegotiable"><span>  Negotiable</span>
      </div>

<div class="form-group">
  
</div>
  <!-- <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="Enter the brand of your product" required>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Price</label>
                  <input type="number" name="price" class="form-control" placeholder="Enter the Price eg Sh.25000/=" required>
                </div> --->
   <div class="form-group"> 
                  <textarea cols="10" class="form-control" name="proddescription" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" placeholder="Decription*" required></textarea>
                </div>
              <div class="form-group">
            <input type="file" id="files" name="files[]" class="form-control"  required hidden>
            <label style="text-align: center;color:  #00cc00;">Click the camera icon below to select a cover picture for your product</label>
            <label for="files" style="color: #e6005c;font-size: 50px;font-weight: bold;width: 100%;text-align: center;"><i class="fas fa-camera"></i></label>
            </div>
            <div id="dvPreview"></div>      
                  <input type="submit"  class="form-control btn-success btn-block" id="uploadproduct" value="Next" name="submit">
             
              <div id="uploadAlert" class="statusMsg"></div>
          </form>
           </div>
          </div>
           </div>
             </div>
           </div>
           <!---products upload modal end--->
             <!---products update modal--->
        <div class="modal fade" id="elproducteditModal">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Products Edit form</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <div id="updatedAlert"></div>
             </div>
             <div class="modal-body">
               <div style="display: flex;justify-content: center;align-items: center;margin-bottom: 10px;">
         <form action="php/session.php" enctype="multipart/form-data" id="editprodform" method="POST">
          <input type="hidden" name="id" id="id">
                  <input type="hidden" name="productowner" class="form-control" value="<?=$cshopname; ?>">
                
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="productname" class="form-control" id="prodname" required>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="category" class="form-control" id="category" required>
                </div>
                <div class="form-group">
                    <label for="Shop Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Condition of the product(New,Used or refurbished)</label>
                    <select class="form-control" name="Statusselect" required>
       <option id="status"></option>
       <option value="new">New</option>
       <option value="Used">Used</option>
       <option value="refurbished">Refurbished</option> 
     </select>
     </div>
      <div  class="form-group">
        <label for="categories" style="font-size: 20px;font-weight: bold;color: #ff0066;">Select the most Suitable category of your product</label>
     <select class="form-control updatecategory" id="updatecategory" name="updatecategory" required>
       <option value="">Category</option>
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
                  <input type="text" name="brand" class="form-control" id="brand" required>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 20px;font-weight: bold;color: #ff0066;">Product Price</label>
                  <input type="number" name="price" class="form-control" id="price" required>
                </div>
   <div class="form-group">
                  <label for="Email" style="font-size: 20px;font-weight: bold;color: #ff0066;">Briefly Decribe the Product </label>
                  <textarea cols="10" class="form-control" id="proddescription" name="proddescription" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" required></textarea>
                </div>
              <div class="form-group">
            <input type="file" id="updatefiles" name="files[]" class="form-control"  required hidden>
            <label for="updatefiles" style="color: white;background-color:  #ff00bf;padding: 10px;font-size: 20px;font-weight: bold;width: 100%;"><i class="fas fa-camera"></i>&nbsp; &nbsp;Click Me To Select Image</label>
            </div>
            <div id="updatedvPreview">
              
            </div>      
                  <input type="submit"  class="form-control btn-primary btn-block" id="updateproduct" value="Next" name="updateproduct">
          </form>
           </div>
          </div>
           </div>
             </div>
           </div>
             <!---products update modal end--->

             <!---products images modal start--->

             <div class="modal fade" id="images-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Product Images</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="deleteImageAlert"></div>
      <div class="modal-body">
        <div class="Images">
          
        </div>
      </div>
    </div>
  </div>
</div>
             <!---products images modal end--->


             <!---products details modal start--->
    <div class="modal fade" id="ShowproductDetails">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="getTitle">Test</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h4 id="modaltest"></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
             <!---products update modal end--->



         </div> 
      
 </section>

</div>
 <script type="text/javascript" src="js2/jquery.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="fontawe/js/all.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script type="text/javascript">
	 function topFunction() {
    $("html, body").animate(
      { scrollTop: "0" }, 1000);
  }
</script>
<script type="text/javascript">
  function showeditform() {
    document.getElementbyId("editprodform").style.display = 'block';
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#checkAll").click(function(){
      if($(this).is(":checked")) {
        $(".checkItem").prop('checked',true);
      } else{
        $(".checkItem").prop('checked',false);
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){

    fetchproducts();
    function fetchproducts(){
      $.ajax({
        url: 'php/session.php',
        method: 'post',
        data: { action: 'fetchproducts' },
        success:function(response){
          $(".products").html(response);
          $("table").DataTable({
            order: [0, 'desc']
          });
        }
      });
    }


    //product upload ajax
    $("#uploadprodform").on('submit',function(e){
      e.preventDefault();

      var subcategory = $('.productscategory').children("option:selected").val();

      switch(subcategory){
        case "electronics":
         $.ajax({
        type: 'POST',
        url: 'php/laptopsupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
        if (response = "success") {
          window.location = 'electronicimages.php';
          fetchproducts();
        }
        {
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
        }
        }
      });
         break;

         case "property":
              $.ajax({
        type: 'POST',
        url: 'php/propertyupload.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
       // if (response = "success") {
          //window.location = 'electronicimages.php';
          //fetchproducts();
        //}
        //{
          $("#uploadAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
         fetchproducts();
       // }
        }
      });
         break;
         default:
         console.log('No activity');
      }
    });


    //product type ajax
    $('.productscategory').change(function(e){
      e.preventDefault();
       category = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { category : category },
        success:function(response){
          $("#subcategorydiv").html(response);
          console.log(response);
        }
      });
    
   });

//electronic type ajax
 $('.subcategorydiv').change(function(e){
      e.preventDefault();
       electroniccategory = $(this).children("option:selected").val();
      $(this).css("background-color", "#D6D6FF");
       $.ajax({
        url: 'php/action.php',
        method: 'post',
        data: { electroniccategory : electroniccategory },
        success:function(response){
          $(".productfurherdetails").html(response);
          console.log(response);
        }
      });
    
   });

    $("body").on("click", ".editelectronicBtn", function(e){
      e.preventDefault();
      editel_id = $(this).attr('id');
      $.ajax({
        url:'php/session.php',
        type: 'POST',
        data: {editel_id:editel_id},
        success:function(response){
          data = JSON.parse(response);
          console.log(data);
          $("#id").val(data.PSN);
          $("#prodname").val(data.name);
          $("#status").text(data.status);
          $("#category").val(data.category);
          $("#brand").val(data.brand);
          $("#price").val(data.price);
          $("#proddescription").val(data.description);
          $("#files").val(data.image);
          $("#updatedvPreview").html('<img src="products/'+data.image+'" class="img-thumbnail img-fluid">');
        }
      });
    });

    $("body").on("click", ".vieweldetails", function(e){
      e.preventDefault();
      viewel_id = $(this).attr('id');
      $.ajax({
        url:'php/session.php',
        type: 'POST',
        data: {viewel_id:viewel_id},
        success:function(response){
          data = JSON.parse(response);
         console.log(data);
         //$("#modaltest").text(data.PSN);
      }
    });
    });

    $("body").on("click", ".delelectronicbtn", function(e){
      e.preventDefault();
      var tr = $(this).closest('tr');
      delel_id = $(this).attr('id');

      Swal.fire({
        title: 'Are you Sure?',
        type: '',
        text: '',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
      }).then((result) => {
        if (result.value) {
            $.ajax({
        url: 'php/session.php',
        type: 'POST',
        data:{delel_id:delel_id},
        success:function(response){
          Swal.fire(
            'Deleted',
            'Your Product has been deleted successfully',
            'success'
          )
          fetchproducts(); 
       }
      });
        }
      
      } 
      )
    });
    $("#editprodform").on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'php/session.php',
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function(response){   
        //window.location = 'Shophome.php';
          $("#updatedAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
        fetchproducts();
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

    //view images Ajax Request

      //View Images Ajax Request
     $("body").on("click", ".ViewIelectronicmagesIcon", function(e){
      e.preventDefault();
      viewelImages_id = $(this).attr('id');
      $.ajax({
        url: 'php/session.php',
        type: 'POST',
        data:{viewelImages_id:viewelImages_id},
        success:function(response){
          $(".Images").html(response)
        }
      });
    });
          //Delete Images Ajax Request
     $("body").on("click", ".deleteImage", function(e){
      e.preventDefault();
      var tr = $(this).closest('tr');
      deleteImages_id = $(this).attr('id');
      $.ajax({
        url: 'php/session.php',
        type: 'POST',
        data:{deleteImages_id:deleteImages_id},
        success:function(response){
          $(".deleteImageAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
          tr.css('display','none');
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
<script type="text/javascript">
 $(function() {
    $("#updatefiles").change(function () {
      if (typeof (FileReader) != "undefined") {
        var updatedvPreview = $("#updatedvPreview");
        updatedvPreview.html("");
       var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        $($(this)[0].files).each(function () {
          var file = $(this);
          if(regex.test(file[0].name.toLowerCase())) {
            var reader = new FileReader();
              reader.onload = function (e) {
                var img = $("<img />");
               img.attr("style", "height:auto;width:100%;padding:10px;");
                img.attr("src", e.target.result);
                updatedvPreview.append(img);
              }
              reader.readAsDataURL(file[0]);
          } else {
            alert(file[0].name +"is not a valid image file.");
           updatedvPreview.html(" ");
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
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    $('table').DataTable({
      paging: true,
      sorting: true
    });
  });
  </script>
  <script type="text/javascript" src="accountnavigation.js">
   
  </script>
</body>
</html>