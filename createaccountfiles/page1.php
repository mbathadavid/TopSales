<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css2/w3.css">
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Create Account</title>
	<style type="text/css">
		input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 5px;
}

#message p {
  padding: 5px 5px;
  font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -10px;
  content: "√";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -10px;
  content: "∗";
}
form {
  padding: 30px;
}
#formcontainer {
  text-align: center;
  border: 2px solid green;
  margin-top: 5px;
  border-radius: 10px;
}
@media only screen and (max-width:  320px){
  .container {
    padding: 5px;
  }
  form {
    padding: 2px;
  }
  h3 {
    font-size: 15px;
  }
  h4 {
  font-size: 15px;
}
  }
	</style>


</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
	<h4 style="text-align:center;">Welcome! Fill your Details to Create an account</h4>
	<div id="formcontainer">
	<form method="POST" action="#" id="shopcreateform">
		<div>
			<img src="../images/logo.jpg">
		</div>
    <div id="regAlert"></div>
		<div class="form-group">
			<label>Enter your Full Name</label>
			<input type="text" name="name" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Enter your Businness Email.</label>
			<input type="email" name="email" class="form-control" required>
		</div>

      <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
    
		<div class="form-group">
			<label>Enter Account Password</label>
			<input type="password" name="password" id="rpassword" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		</div>
		<div id="passerror" class="w3-red w3-animate-zoom"></div>
		<div class="form-group">
			<label>Confirm The Password</label>
			<input type="password" name="password" id="cpassword" class="form-control">
		</div>

  

		<input type="submit" name="submitpage1" value="REGISTER ACCOUNT" class="btn btn-info" id="createshopbtn">
	</form>
  <a href="../shop-login.php">Already have an account.Sign Up</a>
</div>
</div>
</div>
</div>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->

<script type="text/javascript" src="../js2/jquery.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../fontawe/js/all.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		 $("#shopcreateform").on('submit',function(e){
      if($("#shopcreateform")[0].checkValidity()){
      e.preventDefault();
      $("#createshopbtn").val('Please Wait...');
      if ($("#rpassword").val() != $("#cpassword").val()) {
        $("#passerror").text('* Passwords did not match');
        $("#createshopbtn").val('REGISTER ACCOUNT');
      } else {
      $.ajax({
        type: 'POST',
        url: '../php/Accountfiles/registerpage1.php',
        data: new FormData(this),
       // dataType: 'json',
        contentType: false,
        processData: false,
        success: function(response){
        $("#regAlert").html('<div class=" alert alert-danger alert-dismissible w3-green w3-animate-zoom" style="font-size :15px;"><button type="button" class="close" data-dismiss="alert">&times</button><p class="text-center">'+response+'</p></div>');
        $("#shopcreateform")[0].reset();
        $("#createshopbtn").val("REGISTER ACCOUNT");   
        } 

      });
    }
    }
    });
	});
</script>
<script type="text/javascript">
	var myInput = document.getElementById("rpassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>
</html>