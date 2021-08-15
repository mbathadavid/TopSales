<?php 
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail\src\Exception.php';
require 'mail\src\PHPMailer.php';
require 'mail\src\SMTP.php';

$mail = new PHPMailer(TRUE);

require_once 'auth.php';
 $cshop = new Auth();
 if (!isset($_SESSION['shop'])){
 	header('location:index.php');
 	die;
 } 
$cshopname = $_SESSION['shop'];

$data = $cshop->currentshop($cshopname);
$cowner = $data['Owner'];
$cemail = $data['OwnerEmail'];
$cphone = $data['Phonenumber'];
$cpass = $data['Shoppassword'];
$ccounty = $data['County'];
$csn = $data['SSN'];
$ctown = $data['Town'];
$cshopname = $data['ShopName'];
$prodcategory = $data['category'];
$accounttype = $data['accounttype'];
$copen = $data['Opening'];
$cclose = $data['Closing'];
$cdescription = $data['Description'];
$cprofile = $data['Profile'];
$cdatecreated = $data['DateCreated'];
$cactive = $data['Active'];
$cprofile = $data['Profile'];
$cverified = $data['verified'];
$csubcounty = $data['Sub_County'];
$cverifycode = $data['verification_code'];
$account = $data['accounttype'];
$shopowner= ucwords($cowner);
$sowner = strtok($shopowner, " ");
$shop = ucfirst($cshopname);
$town = ucfirst($ctown);
//$date = date("l d-m-Y h:ia",$cdatecreated);
$date = strtotime($cdatecreated);
$actualdate = date("l d-m-Y h:ia",$date);

$data2 = $cshop->getelectronicproducts($csn);
$prodname = $data2['NAME'];
$electroniccategory = $data2['category'];
$prodsn = $data2['PSN'];
$data3 = $cshop->getelectronicproductbyshop($csn);
$data4 = $cshop->totalshopproducts($csn);


$vehicle = $cshop->getvehicleproducts($csn);
$latestvsn = $vehicle['PSN'];
$vehiclename = $vehicle['category'];
$vehiclename = $vehicle['model'];


$property = $cshop->getpropertiess($csn);
$propertyname = $property['Title'];
$latestpsn = $property['PSN'];
$propertycategory = $property['Category'];


$machine = $cshop->getmachines($csn);
$machinename = $machine['title'];
$machinepsn = $machine['PSN'];
$machinecategory = $machine['category'];

$fashions = $cshop->getfashions($csn);
$fashiontype2 = $fashions['type2'];
$fashionpsn = $fashions['PSN'];
$fashioncategory = $fashions['category'];


$buildings = $cshop->getbuildings($csn);
$buildingtitle = $buildings['title'];
$buildingpsn = $buildings['PSN'];
$buildingcategory = $buildings['category'];


$households = $cshop->gethouseholds($csn);
$householdname = $households['name'];
$householdpsn = $households['PSN'];
$householdcategory = $households['category'];

$energy = $cshop->getlastenergyproduct($csn);
$energyname = $energy['title'];
$energypsn = $energy['PSN'];
$energycategory = $energy['category'];

$agriculture = $cshop->getlastagricultureproduct($csn);
$agriculturename = $agriculture['title'];
$agriculturepsn = $agriculture['PSN'];
$agriculturecategory = $agriculture['category'];


if (isset($_POST['action']) && $_POST['action'] == 'fetchproducts') {
$output = '';
if ($data3) {
	$output .= '<table class="table table-bordered table-hover table-responsive" style="overflow-x: auto;">
    <thead>
      <tr>
        <th>Title</th>
        <th>Image</th>
        <th>Action</th>
        <th>Type</th>
      </tr>
    </thead>
    <tbody>';
    foreach ($data3 as $row) {
    	$output .= '<tr class="text-center">
					  <td>'.$row['NAME'].'</td>
					  <td><img class="img-fluid" src="products/'.$row['image'].'"></td>
					  	<td>
					  	          <a href="Javascript:void(0)" id="'.$row['PSN'].'" title="view details" class="text-success vieweldetails" data-toggle="modal" data-target="#ShowproductDetails">Details</a>
                        <a href="Javascript:void(0)" id="'.$row['PSN'].'" title="update details" class="text-primary editelectronicBtn" data-toggle="modal" data-target="#elproducteditModal">Edit</a>
                        <a href="Javascript:void(0)" onclick="alert("Do you want to delete this record?")" id="'.$row['PSN'].'" title="delete details" class="text-danger delelectronicbtn">Delete</a>
                         <a href="#" id="'.$row['PSN'].'" title="View Images" class="text-secondary ViewIelectronicmagesIcon" data-toggle="modal" data-target="#images-modal">Images</a>
                         <a href="#" id="'.$row['PSN'].'" title="Promote to Premium" class="text-warning ViewIelectronicmagesIcon" data-toggle="modal" data-target="#images-modal">Promote</a>
					  </td><td>'.$row['TYPE'].'</td></tr>
					  ';
    }
    $output .='</tbody></table>';
    echo $output;
}else{
  echo'<h3 style="text-align:center;color: #00cc00;">You have no approved products yet!</h3>';
}
}
  if (isset($_POST['editel_id'])) {
       $id = $_POST['editel_id'];
       $row = $cshop->getproductbyId($id);
       echo json_encode($row);
   }

   if (isset($_POST['delel_id'])) {
        $id = $_POST['delel_id'];
       $delete = $cshop->delete('laptops',$id);
       if ($delete === true) {
           echo "You have successfully deleted the product";
           $cshop->notification($csn,'admin','product deleted');
       } else {
           echo "Something went wrong while deleting";
       }
       } 
// view electronic details ajax handle
       if (isset($_POST['viewel_id'])) {
       $id = $_POST['viewel_id'];
       $electronicsdetails = $cshop->viewindividualproduct('laptops',$id,$csn);
        echo json_encode($electronicsdetails);
   }

if(isset($_POST['productowner']) || isset($_POST['productname']) || isset($_POST['Statusselect']) || isset($_POST['productscategory']) || isset($_POST['brand']) || isset($_POST['price']) || isset($_POST['proddescription']) || isset($_POST['files'])){ 
  $sn = $_POST['id'];
  $owner = $_POST['productowner'];
  $name = $_POST['productname'];
  $status = $_POST['Statusselect'];
  $category = $_POST['category'];
  $brand = $_POST['brand'];
  $price = $_POST['price'];
  $description = $_POST['proddescription'];
  $category = $_POST['category'];
  $imageCount = count($_FILES['files']['name']);
  for ($i=0; $i <$imageCount ; $i++) { 
    $imageName = $_FILES['files']['name'][$i];
    $imageTempName = $_FILES['files']['tmp_name'][$i];
    $targetpath = "D:/xampp/htdocs/Class/products/".$imageName;
     move_uploaded_file($imageTempName, $targetpath); 
    $proupdate = $cshop->updateproduct($sn,$owner,$name,$category,$brand,$price,$status,$description,$imageName);
     if ($proupdate === true) {
      echo "You have successfully updated your product";
       $cshop->notification($csn,'admin','Product updated');
     }
     else{
      echo "Something went wrong.Please try again later";
     }
    }   
  }
   

 
  if (isset($_POST['updateshop'])) {
  $sn = $_POST['sn'];
  $oldimage = $_POST['oldimage'];
  $username = $_POST['Owner'];
  $email = $_POST['OwnerEmail'];
  $phone = $_POST['Phonenumber'];
  $county = $_POST['County'];
  $subcounty = $_POST['subcounty'];
  $town = $_POST['Town'];
  $shopname = $_POST['businessname'];
  $closing = $_POST['Closing'];
  $open = $_POST['Opening'];
  $description = $_POST['Description'];
  $accountype = $_POST['acounttype'];
  //$newfile = $_POST['files'];
  //$imageCount = count($_FILES['files']['name']);
  $newfile = $_FILES['files']['name'];
   if ($newfile != null) {
    $imageName = $_FILES['files']['name'];
    $imageTempName = $_FILES['files']['tmp_name'];
    $newimage = "D:/xampp/htdocs/Class/Profiles/".$imageName;
    move_uploaded_file($imageTempName, $newimage);

    if($oldimage != null){
      unlink($oldimage);
    }

   }else{
    $imageName = $oldimage;
   }
      $checkupdate = $cshop->updateshop($username,$email,$phone,$county,$subcounty,$sn,$town,$accountype,$shopname,$open,$closing,$description,$imageName);
      if ($checkupdate) {
      echo "You have successfully updated your shop";
      $cshop->notification($sn,'admin','Profile  updated');   
      } else {
      echo "Something went wrong.Please try again later"; 
      }


} 
//  Handle send feedback request
if (isset($_POST['action']) && $_POST['action'] =='feedback') {
  $subject = $cshop->test_input($_POST['subject']);
  $message = $cshop->test_input($_POST['message']);
  $feedback_send = $cshop->send_message($csn,$subject,$message);
  if ($feedback_send) {
    echo "Message Send successfully Admin Will reply to you Soon";
    $cshop->notification($csn,'admin','New Message');
  } else{
    echo "Sorry,Something Went Wrong,Try Again Later";
  }
}
 // handle fetch notification ajax
  if (isset($_POST['action']) && $_POST['action'] == 'fetchNotifications') {
    $notification = $cshop->fetchnitifications($csn);
    $output='';
    if ($notification) {
      foreach ($notification as $row) {
        $output .=' <div class="alert alert-success w3-green" role="alert" style="height:300px;">
         <button type="button" id="'.$row['id'].'" class="close" data-dismiss="alert" aria-label="close">
           <span aria-hidden="true">Delete</span>
         </button>
         <h5 class="alert-heading">New Message</h5>
         <p class="mb-0 lead" style="width:100%;height:200px;">'.$row['message'].'</p>
         <hr class="my-2">
         <p class="mb-2 float-left">Reply Message from Admin</p>

         <p class="mb-2 float-right">'.$cshop->timeInAgo($row['created_at']).'</p>

         <div class="clear-fix"></div>
         <div style="text-align:center;"><a href="feedback.php"><i class="fas fa-reply fa-lg"></i>&nbsp;Reply</a></div>
       </div>';
      }
      echo $output;
    }
    else{
      echo '<h3 class="text-center text-primary mt-5">No any notification</h3>';
    }
  }
  //check notification
  if (isset($_POST['action']) && $_POST['action'] == 'checknotification') {
    if ($cshop->fetchnitifications($csn)) {
      echo '<i class="fas fa-circle fa-sm text-danger"></i>';
    }else{
      echo '';
    }
  } 
  //remove notifications
  if (isset($_POST['notification_id'])) {

    $id = $_POST['notification_id'];
    $cshop->removeNotifications($id);
  }

   //View Images for products Ajax Details
    if (isset($_POST['viewelImages_id'])) {
      $id = $_POST['viewelImages_id'];
      $output = '';
      $data = $cshop->getImages('electronic_images',$id);
      if ($data) {
        $output .= '<table class="table table-striped table-bordered text-center">
    <thead>
      <tr>
        <th>Product Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>';
    foreach ($data as $row) {
      $output .= '  
      <tr>
    <td><img src="Uploads/'.$row['Images'].'" class="img-fluid"></td>
    <td>
      <a href="#" id="'.$row['id'].'" title="Delete Image" class="text-primary deleteImage btn btn-danger">Delete</a>
    </td>
    </tr>';
    }
    $output .= '</tbody>
    </table>'; 
    echo $output; 
      }
      else{
        echo "<h3>No More Images for This Product!!!</h3>";
      }
    }

    //Delete Images Ajax response
     if (isset($_POST['deleteImages_id'])) {
        $id = $_POST['deleteImages_id'];
       $delete = $cshop->deleteImage($id);
       if ($delete === true) {
           echo "You have successfully deleted An Image";
           $cshop->notification($csn,'admin','Image deleted');
       } else {
           echo "Something went wrong while deleting";
       }
       }
       //verification Ajax
       if (isset($_POST['action']) && $_POST['action'] =='verify') {
        $lower = 0001;
        $upper = 9999;
        $verify_code = mt_rand($lower, $upper);
        $cshop->verify_shop($verify_code,$csn);
           try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = Database::USERNAME;
        $mail->Password = Database::PASSWORD;
        //$mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom(Database::USERNAME);
        $mail->addAddress($cemail);
        $mail->isHTML(true);
        $mail->Subject = 'Verify account';
        $mail->Body = '<h3>Your email verification code is <span style="background-color:green;font-size:30px;">'.$verify_code.'</span></h3>';
        $mail->SMTPDebug = 4;
        $mail->send();
        echo 'success';
      }
       catch (Exception $e){
        echo 'error';
      }
    
  }

   //verify
  if(isset($_POST['verifycode'])){ 
  $verifycode = $_POST['verifycode'];
  if ($verifycode != $cverifycode) {
    echo 'mismatch';
  }
  else{
    $cshop->update_verification($csn);
    echo 'verified';
  }
  }
  //update shop ajax
  if (isset($_POST['shopupdate'])) {
    $accountype = $_POST['shopupdate'];
    switch ($accountype) {
     case 'webshop':
            echo '<div style="border: 2px solid #ff0066;padding: 10px;"><div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter your Businessname</label>
                  <input type="text" name="businessname" class="form-control" value="'.$cshopname.'" required>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select The category of Products that you Deal With</label>
                  <select class="form-control" name="productcategory">
                    <option value="'.$prodcategory.'">'.$prodcategory.'</option>
                     <option value="electronics">Electronics</option>
                     <option value="vehicles">Vehicles</option>
                     <option value="fashion">Fashion & Beauty</option>
                     <option value="leisure">Leisure,Sports & travel</option>
                     <option value="property">Property Sales & Rentals</option>
                     <option value="building">Building Supplies</option>
                     <option value="Household">Household Supplies</option>
                     <option value="Services">Services</option>
                     <option value="Jobs">Jobs</option>
                     <option value="energy">Energy</option>
                     <option value="farm">Farm Supplies</option>
                     <option value="other">Other</option>
                  </select>
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Opening Hours</label>
                  <input type="time" name="Opening" class="form-control" value="'.$copen.'">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Closing Hours</label>
                  <input type="time" name="Closing" class="form-control" value="'.$cclose.'">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Please give some Details of your Business </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" placeholder="Briefly Describe your Business Shop Details" value="'.$cdescription.'" required>'.$cdescription.'</textarea>
                </div></div><div class="form-group" style="margin-top :10px;">
                  <input type="submit" name="submit" value="Finish Update" class="btn btn-success btn-block">
                </div>';
             break;
             
             case 'individual':
            echo '<div class="form-group"> 
                  <input type="submit"  class="form-control btn-success btn-block" id="createshopbtn" value="Finish Update" name="updates">
                </div>';
             break;

             case 'serviceprovider':
            echo '
                    <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter your Businessname</label>
                  <input type="text" name="businessname" class="form-control" val="'.$shop.'" placeholder="Your Business Name e.g. JIRA ELECTRONICS">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Please give some Details of your Business </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" val="'.$cdescription.'"></textarea>
                </div>';
             break;

                  case 'joblister':
            echo '
                    <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter your Businessname</label>
                  <input type="text" name="businessname" class="form-control" val="'.$shop.'" required placeholder="Your Business Name e.g. JIRA ELECTRONICS">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Please give some Details of your Business </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" val="'.$cdescription.'"></textarea>
                </div>';
             break;  
           default:
             // code...
             break;  
    }
  }
//select shop
   if (isset($_POST['shop'])) {
         $accountype = $_POST['shop'];
         switch ($accountype) {
           case 'webshop':
            echo '<div style="border: 2px solid #ff0066;padding: 10px;"><div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter your Businessname</label>
                  <input type="text" name="businessname" class="form-control" placeholder="Enter your Business name" required>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select The category of Products that you Deal With</label>
                  <select class="form-control" name="productcategory">
                    <option value="">Select Business Category</option>
                     <option value="electronics">Electronics</option>
                     <option value="vehicles">Vehicles</option>
                     <option value="fashion">Fashion & Beauty</option>
                     <option value="leisure">Leisure,Sports & travel</option>
                     <option value="property">Property Sales & Rentals</option>
                     <option value="building">Building Supplies</option>
                     <option value="Household">Household Supplies</option>
                     <option value="Services">Services</option>
                     <option value="Jobs">Jobs</option>
                     <option value="energy">Energy</option>
                     <option value="farm">Farm Supplies</option>
                     <option value="other">Other</option>
                  </select>
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Opening Hours</label>
                  <input type="time" name="Opening" class="form-control">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Closing Hours</label>
                  <input type="time" name="Closing" class="form-control">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Please give some Details of your Business </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" placeholder="Briefly Describe your Business Shop Details" required></textarea>
                </div></div>                  <div class="form-group" style="margin-top :10px;">
                  <input type="submit" name="submit" value="Finish Update" class="btn btn-success btn-block">
                </div>';
             break;
           
           case 'individual':
            echo '<div class="form-group"> 
                  <input type="submit"  class="form-control btn-success btn-block" id="createshopbtn" value="Finish Update" name="updates">
                </div>';
             break;

             case 'serviceprovider':
            echo '
                    <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter your Businessname</label>
                  <input type="text" name="businessname" class="form-control" val="'.$shop.'" placeholder="Your Business Name e.g. JIRA ELECTRONICS">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Please give some Details of your Business </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" val="'.$cdescription.'"></textarea>
                </div>';
             break;

                  case 'joblister':
            echo '
                    <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter your Businessname</label>
                  <input type="text" name="businessname" class="form-control" val="'.$shop.'" required placeholder="Your Business Name e.g. JIRA ELECTRONICS">
                </div>
                     <div class="form-group">
                  <label for="Email" style="font-size: 15px;font-weight: bold;color: #ff0066;">Please give some Details of your Business </label>
                  <textarea cols="10" class="form-control" name="Description" style="width: 100%;height: 200px;background-color: #f8f8f8;resize: none;font-size: 16px;border:2px solid #ccc;color: #e60099;" val="'.$cdescription.'"></textarea>
                </div>';
             break;  
           default:
             // code...
             break;
         }
       }
       //Physical Business ajax Handle
       //Update Email ajax Handle
       if (isset($_POST['id']) || isset($_POST['newemail'])) {
         $sn = $_POST['id'];
         $newemail = $_POST['newemail'];
         $emailupdate = $cshop->changeaccountemail($sn,$newemail);
         if ($emailupdate === true) {
           echo "success";
         } else {
          echo "error";
         } 
       }
       //Update Password ajax handle
         if (isset($_POST['id']) || isset($_POST['currentpassword'])) {
         $sn = $_POST['id'];
         $currentpassword = $_POST['currentpassword'];
         $dbpassword =$cshop->checkpassword($sn);
         if (!password_verify($currentpassword, $dbpassword)) {
           echo "wrongpassword";
         } else {
          echo "you got it";
         } 
       }
 ?>

