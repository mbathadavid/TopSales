<?php
session_start(); 
require_once 'php/auth.php';
$loginshop = new Auth();

$msg = '';
if (isset($_POST['logtoshop'])) {
$shopemail = $loginshop->test_input($_POST['Shoploginame']);
$password = $loginshop->test_input($_POST['Shoploginpassword']);
#$email = $shop->test_input($_POST['Shoploginemail']);
$loggedInShop = $loginshop->login($shopemail);

if ($loggedInShop != null) {
  if (password_verify($password, $loggedInShop['Shoppassword'])) {
    if(!empty($_POST['rem'])){
      setcookie("Shoploginame", $shopemail, time()+(30*24*60*60), '/');
      setcookie("Shoploginpassword", $password, time()+(30*24*60*60), '/');
    }else {
      setcookie("Shoploginame","",1, '/');
      setcookie("Shoploginpassword","",1, '/');
    }
    $_SESSION['shop'] = $shopemail;
    header('location:Shophome.php');
  }else{
     $msg = '<div class=" alert alert-danger alert-dismissible w3-red w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">You have entered incorrect password</strong></div>';
  }
}
else{
  $msg = '<div class=" alert alert-danger alert-dismissible w3-red w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">Sorry,there is no account with this email registered in our database</strong></div>';
}
}

 ?>

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
  <div>
  <div class="container">
    <h3 style="text-align: center;" id="actionhead">Log In To Your Account</h3>
  </div>
  </div>
<!---top bar---->
 <!---top bar---->       

<!---create account end--->

<!---log in to shop--->
   <section id="loginshopsection">
     <div class="container" style="background-color: #f1f1f1;">
       <div style="display: flex;justify-content: center;align-items: center;padding: 10px;">
        <a href="JavaScript:void(0)" style="padding-right: 10px;display: flex;justify-content: center;align-items: center;text-decoration: none;font-size: 15px;background-color: #00ff00;padding: 5px;" id="login">Sign Up</a>
        <a href="JavaScript:void(0)" style="display: flex;justify-content: center;align-items: center;text-decoration: none;font-size: 15px;padding: 5px;" id="reset">Forgot Password?</a>
      </div>
      <div style="display: flex;justify-content: center;align-items: center;">

       <form action="#" method="post" id="logtoshopform">
       <div style="margin-bottom :10px;margin-top: 10px;">
      <img src="images/logo.jpg">
    </div>
       <div class="loginAlert" id="loginAlert"><?=$msg; ?></div>
         <div class="form-group">
           <label>Account Email</label>
           <input type="email" name="Shoploginame" placeholder="Enter your Email" class="form-control" required value="<?php if(isset($_COOKIE['Shoploginame'])) {echo $_COOKIE['Shoploginame'];} ?>">
         </div>
         
           <div class="form-group">
           <label>Account Password</label>
           <input type="password" name="Shoploginpassword" placeholder="Enter your shop password" class="form-control" required value="<?php if(isset($_COOKIE['Shoploginpassword'])) {echo $_COOKIE['Shoploginpassword'];} ?>">
         </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox float-left">
            <input type="checkbox" name="rem" class="custom-control-input" id="customCheck" <?php if(isset($_COOKIE['Shoploginame'])) { ?> checked <?php } ?>>
            <label for="customCheck" class="custom-control-label">Keep me Logged In</label>
          </div>
        </div>
         <div class="form-group">
           <input type="submit" name="logtoshop" class="form-control btn btn-info" id="logtoshop" value="LOG IN">
         </div>
       </form>
        <!---forgot pssword--->
             <form action="#" method="post" id="passreset" style="display: none;">
              <div style="margin-bottom :10px;margin-top: 10px;">
      <img src="images/logo.jpg">
    </div>
       <div id="forgotAlert"></div>
         <div class="form-group">
           <label>Enter your Email</label>
           <input type="email" name="forgotemail" placeholder="Enter your Email" class="form-control" required>
         </div>
         <div class="form-group">
           <input type="submit" name="resetpass" class="form-control btn btn-success" id="resetpass" value="Reset Password">
         </div>

       </form>
        <!---forgot password end--->

     </div>
  <a href="Create-shop.php" style="text-decoration: none;color:  purple;font-size: 15px;font-weight: bold;display: flex;justify-content: center;align-items: center;">Don't have an account?Create one</a>  

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
    $("#cat20").click(function(){
      $("#subcat20").show(1000);
      $("#subcat21").hide();
    });
     $("#cat21").click(function(){
      $("#subcat21").show(1000);
      $("#scat20").hide();
    });
     $("#login").click(function() {
      $("#passreset").slideUp(1000);
      $("#logtoshopform").slideDown(1000);
      $("#reset").css("background-color","");
      $("#login").css("background-color","#00ff00");
      $("#actionhead").text("Log In To Your Account");

     });
      $("#reset").click(function() {
      $("#logtoshopform").slideUp(1000);
      $("#passreset").slideDown(1000);
       $("#login").css("background-color","");
      $("#reset").css("background-color","#00ff00");
      $("#actionhead").text("Reset Your Password");
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
   $("#logtoshopk").click(function(e){
if ($("#logtoshopform")[0].checkValidity()) {
  e.preventDefault();
  $("#logtoshop").val("Please Wait.....");
  $.ajax({
    url: 'php/action.php',
    method: 'post',
    data: $("#logtoshopform").serialize()+'&action=login',
    success:function(response){
     // if (response = 'login') {
        //var res = response;
        //console.log(res);
        if (response = 'successlogin') {
           window.location = 'Shophome.php';
        }else{
         //$("#loginAlert").html(response);
       
      $("#loginAlert").html('<div class=" alert alert-danger alert-dismissible w3-red w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
      }
    }
     });
      }
    });
    });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#resetpass").click(function(e){
if ($("#passreset")[0].checkValidity()) {
  e.preventDefault();
  $("#resetpass").val("Please Wait.....");
  $.ajax({
    url: 'php/action.php',
    method: 'post',
    data: $("#passreset").serialize()+'&action=forgot',
    success:function(response){
     $("#resetpass").val('Reset Password');
     $("#passreset")[0].reset();
     $("#forgotAlert").html('<div class=" alert alert-danger alert-dismissible w3-red w3-animate-zoom"><button type="button" class="close" data-dismiss="alert">&times</button><strong class="text-center">'+response+'</strong></div>');
     console.log(response);
     }
      });
     }
    }); 
  });
</script>
</body>
</html>