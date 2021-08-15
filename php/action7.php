<?php
session_start();
 require_once 'auth.php';
 $shop = new Auth(); 

 //shop register//
 

//shop login//
if (isset($_POST['action']) && $_POST['action'] == 'login') {
$shopname = $shop->test_input($_POST['Shoploginame']);
#$password = $shop->test_input($_POST['Shoploginpassword']);
$email = $shop->test_input($_POST['Shoploginemail']);
$loggedInShop = $shop->login($shopname);

if ($loggedInShop != null) {
	//if (password_verify($password, $loggedInShop['Shoppassword'])) {
		//echo "login";
		//$_SESSION['shop'] = $shopname;
	//}else{
		// echo "passincorrect";
	//}
	if($email === $loggedInShop['OwnerEmail']){
		echo "login";
		$_SESSION['shop'] = $shopname;
	}else{
	echo "passincorrect";	
	}
}
else{
	echo "nouser";
}
}
//product upload handle


 ?>