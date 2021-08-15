<?php
session_start();
 require_once 'auth.php';
 $shop = new Auth(); 

   if(isset($_POST['sn']) || isset($_POST['oldimage']) || isset($_POST['Owner']) || isset($_POST['OwnerEmail']) || isset($_POST['Phonenumber']) || isset($_POST['County']) || isset($_POST['subcounty']) || isset($_POST['Town']) || isset($_POST['acounttype']) || isset($_POST['businessname']) || isset($_POST['productscategory']) || isset($_POST['Opening']) || isset($_POST['Closing']) || isset($_POST['Description']) || isset($_POST['files'])){
  $sn = $_POST['sn'];
  $oldimage = $_POST['oldimage'];
  $username = $_POST['Owner'];
  $email = $_POST['OwnerEmail'];
  $phone = $_POST['Phonenumber'];
  $county = $_POST['County'];
  $subcounty = $_POST['subcounty'];
  $town = $_POST['Town'];
  $category = $_POST['productscategory'];
  $shopname = $_POST['businessname']; 
  $closing = $_POST['Closing'];
  $open = $_POST['Opening'];
  $description = $_POST['Description'];
  $accountype = $_POST['acounttype'];
  //$newfile = $_POST['files'];
 // $imageCount = count($_FILES['files']['name']);
  $newfile = $_FILES['files']['name'];
   if ($newfile != null) {
    $imageName = $_FILES['files']['name'];
    $imageTempName = $_FILES['files']['tmp_name'];
    $newimage = "D:/xampp/htdocs/Class/Profiles/".$imageName;
    $imagetounlink = "D:/xampp/htdocs/Class/Profiles/".$oldimage; 
    move_uploaded_file($imageTempName, $newimage);

    if($oldimage != null){
      unlink($imagetounlink);
    }

   }else{
    $imageName = $oldimage;
   }
      $checkupdate = $shop->updateshop($username,$email,$phone,$county,$subcounty,$town,$shopname,$category,$open,$closing,$description,$imageName,$accountype,$sn);
      if ($checkupdate === true) {
      echo "1";
      $shop->notification($sn,'admin','Profile  updated');   
      } else {
      echo "0"; 
      }  
} 

 ?>