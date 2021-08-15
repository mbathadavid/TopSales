<?php 
require_once 'php/header.php';
 ?>
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-lg-8 mt-3">
       <div class="card border-success"  style="margin-bottom: 20px;">
         <div class="card-header lead text-center bg-success text-white">Send Message To Admin</div>
         <div class="card-body">
           <form action="#" method="post" class="px-4" id="feedback-form">
            <div id="feed_backAlert"></div>
             <div class="form-group">
               <input type="text" name="subject" placeholder="Write your Subject Here" class="form-control-lg form-control rounded-0" required>
             </div>
             
             <div class="form-group">
               <textarea name="message" class="form-control-lg form-control rounded-0" placeholder="Write Your Message Here" rows="8" required></textarea>
             </div>
               
               <div class="form-group">
                 <input type="submit" name="feedbackBtn" id="feedbackBtn" value="Send Message" class="btn btn-primary btn-block btn-lg rounded-0">
                </div>
             
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
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
<script type="text/javascript">
	 function topFunction() {
    $("html, body").animate(
      { scrollTop: "0" }, 1000);
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#feedbackBtn").click(function(e){
      e.preventDefault();
      $(this).val('Please Wait...');
      $.ajax({
        url: 'php/session.php',
        method: 'post',
        data: $("#feedback-form").serialize()+'&action=feedback',
        success:function(response){
          $("#feedback-form")[0].reset();
          $("#feedbackBtn").val('Send Message');
          $("#feed_backAlert").html('<div class="alert alert-danger alert-dismissible w3-green w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
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
  <script type="text/javascript" src="accountnavigation.js">
   
  </script>
</body>
</html>