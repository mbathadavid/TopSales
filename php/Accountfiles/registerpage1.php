<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '..\mail\src\Exception.php';
require '..\mail\src\PHPMailer.php';
require '..\mail\src\SMTP.php';

$mail = new PHPMailer();

 require_once '..\..\php\auth.php';
 $shop = new Auth();

//shop register//
    if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['password'])){
	$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashpass = password_hash($password, PASSWORD_DEFAULT);
	$verifycode = rand(1999,9999);
		$checkshop = $shop->shop_exist($email);
		if ($checkshop != null) {
 		echo "Sorry,this Email has already registered another account.";
 	 }
   else{
	    $checkregistration = $shop->createaccountpage1($username,$email,$hashpass,$verifycode);
    	if ($checkregistration === true) {
    	//$_SESSION['shop'] = $shopname;
    	echo "You have successfully registered a account.Use your email and password combination to log in to your account.Also check your email to activate your Account <br> <a class='btn btn-danger' href='../shop-login.php'>Login Here</a>";
    	$shop->shopcreatenotification('admin','New Shop Created');
			try{
		$mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = "buysell914@gmail.com";
        $mail->Password = "Buysell1998";
        //$mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom(Database::USERNAME);
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Verify Account';
        $mail->Body = '<div style="background_color :#e6e6e6;"><p>Thank you for taking your time to register an account with us.<br>Experience the best marketing with us.Now it is time to verify your account.<br>Please click the link below to verify.</p><br><a href="http://172.16.121.185:80/Class/verifyaccount.php?verification_code='.$verifycode.'&email='.$email.'" style="align-items :center;justify-content :center;border :2px solid #00e600;color:#b30000;border-radius :25px;padding 10px;">Verify Account</a><br>Regards<br>Admin BuySell</div>';
        //$mail->SMTPDebug = 4;
        $mail->send();
       // echo 'success';
      }
       catch (Exception $e){
       // echo 'error';
      }

    	 }
      	
   } 
}

//


?>