<?php 
session_start();
 require_once '..\..\php\auth.php';
 $shop = new Auth();

//Physical Business Details register//
 if(isset($_POST['sn']) || isset($_POST['Owner']) || isset($_POST['OwnerEmail']) || isset($_POST['Phonenumber']) || isset($_POST['County']) || isset($_POST['subcounty']) || isset($_POST['Town']) || isset($_POST['acounttype']) || isset($_POST['files']) || isset($_POST['businessname']) || isset($_POST['productcategory']) || isset($_POST['Opening']) || isset($_POST['Closing']) || isset($_POST['Description'])){
          $sn = $_POST['sn']; 
          $owner = $_POST['Owner'];
          $email = $_POST['OwnerEmail'];
          $phone = $_POST['Phonenumber'];
          $county = $_POST['County'];
          $subcounty = $_POST['subcounty'];
          $town = $_POST['Town'];
          $account = $_POST['acounttype'];
          //$file = $_FILES['files']['name'];
            $businessname = $_POST['businessname'];
           $category = $_POST['productcategory'];
           $opening = $_POST['Opening'];
           $closing = $_POST['Closing'];
           $description = $_POST['Description'];
           $profile = $_FILES['files']['name'];
            $imageTempName = $_FILES['files']['tmp_name'];
            $newimage = "D:/xampp/htdocs/Class/Profiles/".$profile;

            move_uploaded_file($imageTempName, $newimage); 
              //$enterbsdetails = $shop->businessdetails($phone,$county,$subcounty,$town,$businessname,$opening,$closing,$description,$profile,$sn);
           $enterbsdetails = $shop->updateshop($owner,$email,$phone,$county,$subcounty,$town,$businessname,$category,$opening,$closing,$description,$profile,$account,$sn);
           if ($enterbsdetails = true) {
             echo "1";
           } else {
             echo"0";
           } 
            
           
           
          } 



?>