<?php 
require_once '../php/session.php';
#require_once 'php/products.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css2/w3.css">
<link rel="stylesheet" type="text/css" href="../fontawe/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../css/fileup.css">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <title>Upload more Images</title>
</head>
<body>
    <div style="background-color: #ff1a75;">
  <div class="container">
    <h3 style="text-align: center;color: blue;"> Your top ranking Online market place</h3>
    <p style="text-align: center;color: green;font-weight: bold;">Buy and Sell through our peculiar Platform. <br>We are here for you. </p>
  </div>
  </div>

 <section>
  <div class="container">
    <h6 style="text-align: center;">Click the camera icon below to upload more images for your <span style="color:  #ff0066;font-weight: bold;font-size: 20px;"><?=$agriculturename; ?></span></h6>
    <h5 style="text-align: center;"><a href="javascript:void(0);" id="nomoreimages">I have no more images,lets skip this step.</a></h5>
 		<div style="display: flex;justify-content: center;align-items: center;">
 				 <form action="php/action4.php" enctype="multipart/form-data" id="uploadImagesform" method="POST">
           <div id="imageupAlert"></div>
              <input type="hidden" name="owner" value="<?=$agriculturepsn; ?>" class="form-control">

              <input type="hidden" name="category" value="<?=$agriculturecategory; ?>">

          <div class="form-group">
            <input type="file" id="files" name="files[]" class="form-control" multiple hidden>
            <label for="files" style="color:  #00b300;font-size: 50px;font-weight: bold;text-align: center;width: 100%;"><i class="fas fa-camera"></i></label>
            </div>

            <div id="dvPreview" style="width: 100%;height: auto;margin-bottom: 20px;display:flex;padding: 20px;overflow-x: auto;border:3px solid black"></div>

          <div class="form-group">
            <input type="submit" name="Upload_Images" id="Upload_Images" value="Finish  Product Upload" class="btn btn-block btn-primary">
          </div>                                       
          </form>
       
 		</div>
    <div id="dvPreview" style="width: 100%;height: auto;margin-bottom: 20px;display:flex;padding: 20px;overflow-x: auto;border:3px solid black;display: none;"></div>
 	</div>
 </section>
 <section>
<div style="text-align: center;color: red;font-weight: bold;">Copyright &copy 2020.Buyit.com</div>
<hr>
</section>
 <script type="text/javascript" src="../js2/jquery.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../fontawe/js/all.min.js"></script>
<script type="text/javascript" src="../js2/fileup.js"></script>
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
        url: '../php/action5.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
          if (response = "success") {
           //window.location = '../Shophome.php';
           $("#uploadImagesform")[0].reset();
           $("#imageupAlert").html('<div class=" alert alert-success alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">Congratulation!!!You have successfully published your product in this website. Admin will approve it for upload.Once approved it wiil be visible to anyone who visits ths website. This will take less than six hours.<br><a href="../Shophome.php" cLass="btn btn-info">Click here to go Back to the Dashboard</a></strong></div>');
          }
          else{
            $("#imageupAlert").html('<div class=" alert alert-danger alert-dismissible w3-red w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">>Congratulation!!!You have successfully published your product in this website. Admin will approve it for upload.This will take less than six hours.<br><a href="Shophome.php" cLass="btn btn-info">Click to go Back to the Dashboard</strong></div>');
          }
        }
      });
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#nomoreimages").click(function(e){
      e.preventDefault();
      window.location = '../Shophome.php';
    });
  });
</script>
</body>
</html>