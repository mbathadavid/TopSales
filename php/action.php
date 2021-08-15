<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail\src\Exception.php';
require 'mail\src\PHPMailer.php';
require 'mail\src\SMTP.php';

$mail = new PHPMailer(TRUE);

 require_once 'auth.php';
 $shop = new Auth(); 


//subcounty select
 if (isset($_POST['county'])) {
        $county = $_POST['county'];
       switch ($county) {
         case 'Machakos':
         $subcounties = array('kangundo' => 'Kangundo','kathiani' => 'Kathiani', 'machakos town' => 'Machakos Town','masinga' => 'Masinga', 'matungulu' => 'Matungulu','mavoko' => 'Mavoko', 'Mwala' => 'Mwala', 'yatta' => 'Yatta');
          foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;
         
           case 'Baringo':
           $subcounties = array('Baringo Central' => 'Baringo Central', 'Baringo North' => 'Baringo North', 'Baringo South' => 'Baringo South', 'Eldama Ravine' => 'Eldama Ravine', 'Mogotio' => 'Mogotio', 'Tiaty' => 'Tiaty');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;


           case 'Bomet':
           $subcounties = array('Bomet Central' => 'Bomet Central', 'Bomet East' => 'Bomet East', 'Chepalungu' => 'Chepalungu', 'Konoin' => 'Konoin', 'Sotik' => 'Sotik');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break; 

          case 'Bungoma':
           $subcounties = array('Bumula' => 'Bumula', 'Kabuchai' => 'Kabuchai', 'Kanduyi' => 'Kanduyi', 'Kimilili' => 'Kimilili', 'Mt Elgon' => 'Mt Elgon', 'Sirisia' => 'Sirisia', 'Tongaren' => 'Tongaren', 'Webuye East' => 'Webuye East', 'Webuye West' => 'Webuye West');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break; 

         case 'Busia':
           $subcounties = array('Budalangi' => 'Budalangi', 'Butula' => 'Butula', 'Funyula' => 'Funyula', 'Matayos' => 'Matayos', 'Nambale' => 'Nambale', 'Teso North' => 'Teso North', 'Teso South' => 'Teso South');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;  

           case 'Elgeyo Marakwet':
           $subcounties = array('Keiyo North' => 'Keiyo North', 'Keiyo South' => 'Keiyo South', 'Marakwet East' => 'Marakwet East', 'Marakwet West' => 'Marakwet West');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break; 

           case 'Embu':
           $subcounties = array('Manyatta' => 'Manyatta', 'Mbeere North' => 'Mbeere North', 'Mbeere South' => 'Mbeere South', 'Runyenjes' => 'Runyenjes');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

           case 'Garissa':
           $subcounties = array('Balambala' => 'Balambala', 'Dadaab' => 'Dadaab', 'Dujis' => 'Dujis', 'Fafi' => 'Fafi', 'jara' => 'jara', 'Lagdera' => 'Lagdera');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;


           case 'Homa Bay':
           $subcounties = array('Homa Bay' => 'Homa Bay', 'Kabondo Kasipu' => 'Kabondo Kasipu', 'Karachuonyo' => 'Karachuonyo', 'Kasipul' => 'Kasipul', 'Mbita' => 'Mbita', 'Ndhiwa' => 'Ndhiwa', 'Rangwe' => 'Rangwe', 'Suba' => 'Suba');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

           case 'Isiolo':
           $subcounties = array('Garbatulla' => 'Garbatulla', 'Isiolo' => 'Isiolo', 'Merti' => 'Merti');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

           case 'Kajiando':
           $subcounties = array('Kajiado Central' => 'Kajiado Central', 'Kajiado East' => 'Kajiado East', 'Kajiado North' => 'Kajiado North', 'Kajiado South' => 'Kajiado South', 'Kajiado West' => 'Kajiado West');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

            case 'Kakamega':
           $subcounties = array('Butere' => 'Butere', 'Ikolomani' => 'Ikolomani', 'Khwisero' => 'Khwisero', 'Likuyani' => 'Likuyani', 'Lugar' => 'Lugar', 'Lurambi' => 'Lurambi', 'Malava' => 'Malava', 'Matungu' => 'Matungu', 'Mumias East' => 'Mumias East', 'Mumias West' => 'Mumias West', 'Navakholo' => 'Navakholo', 'Shinyalu' => 'Shinyalu');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

           case 'Kericho':
           $subcounties = array('Buret' => 'Buret', 'Kericho East' => 'Kericho East', 'Kericho West' => 'Kericho West', 'Kipkelion East' => 'Kipkelion East', 'Kipkelion West' => 'Kipkelion West', 'Sigowet' => 'Sigowet');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

            case 'Kiambu':
           $subcounties = array('Gatundu North' => 'Gatundu North', 'Gatundu South' => 'Gatundu South', 'Githunguri' => 'Githunguri', 'Juja' => 'Juja', 'Kabete' => 'Kabete', 'Kiambaa' => 'Kiambaa', 'Kiambu' => 'Kiambu', 'Kikuyu' => 'Kikuyu', 'Lari' => 'Lari', 'Limuru' => 'Limuru', 'Ruiru' => 'Ruiru', 'Thika Town' => 'Thika Town');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

           case 'Kilifi':
           $subcounties = array('Ganze' => 'Ganze', 'Kaloleni' => 'Kaloleni', 'Kilifi' => 'Kilifi', 'Magarini' => 'Magarini', 'Malindi' => 'Malindi', 'Rabai' => 'Rabai');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

           case 'Kirinyaga':
           $subcounties = array('Gichugu'  => 'Gichugu', 'Kirinyaga Central' => 'Kirinyaga Central', 'Mwea' => 'Mwea', 'Ndia' => 'Ndia');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

           case 'Kisii':
           $subcounties = array('Bobasi' => 'Bobasi', 'Bomachoge Borabu' => 'Bomachoge Borabu', 'Bomachoge Chache' => 'Bomachoge Chache', 'Bonchari' => 'Bonchari', 'Kitutu Chache North' => 'Kitutu Chache North', 'Kitutu Chache South' => 'Kitutu Chache South', 'Nyaribari Chache' => 'Nyaribari Chache', 'Nyaribari Masaba' => 'Nyaribari Masaba', 'South Mugirango' => 'South Mugirango');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;
           
            case 'Kisumu':
           $subcounties = array('Kisumu Central' => 'Kisumu Central', 'Kisumu East' => 'Kisumu East', 'Kisumu West' => 'Kisumu West', 'Muhoroni' => 'Muhoroni', 'Nyakach' => 'Nyakach', 'Nyando' => 'Nyando', 'Seme' => 'Seme');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;
           
           case 'Kitui':
           $subcounties = array('Kitui Central' => 'Kitui Central', 'Kitui East' => 'Kitui East', 'Kitui Rural' => 'Kitui Rural', 'Kitui South' => 'Kitui South', 'Kitui West' => 'Kitui West', 'Mwingi East' => 'Mwingi East', 'Mwingi North' => 'Mwingi North', 'Mwingi West' => 'Mwingi West');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;
        
           case 'Mombasa':
           $subcounties = array('Changamwe' => 'Changamwe', 'Jomvu' => 'Jomvu', 'Kisauni' => 'Kisauni', 'Likoni' => 'Likoni', 'Mvita' => 'Mvita', 'Nyali' => 'Nyali');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;


           case 'Muranga':
           $subcounties = array('Gatanga' => 'Gatanga', 'Kahuro' => 'Kahuro', 'Kandara' => 'Kandara', 'Kangema' => 'Kangema', 'Kigumo' => 'Kigumo', 'Kiharu' => 'Kiharu', 'Mathioya' => 'Mathioya', 'Muranga South' => 'Muranga South');
            foreach ($subcounties as $key => $choice) {
            echo '<option value="'.$key.'">'.$choice.'</option>';
          }
           break;

         default:
           echo '';
           break;
       }

       } 
       //subscribe ajax
       if (isset($_POST['semail'])) {
        $subscribeemail = $_POST['semail'];
        echo $subscribeemail;
       }

       //function to resize image
       function resize_image($file,$max_resolution){
        if (file_exists($file)) {
          $original_image = imagecreatefromjpeg($file);
          //resolution
          $original_width = imagesx($original_image);
          $original_height = imagesy($original_image);
          //try width first
          $ratio = $max_resolution / $original_width;
          $new_width = $max_resolution;
          $new_height = $original_height / $ratio;
          //if that didn't work
          if ($new_height > $max_resolution) {
          $ratio = $max_resolution / $original_height;
          $new_height = $max_resolution;
          $new_width = $original_width / $ratio;

          if ($original_image) {
            $new_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
            imagejpeg($new_image,$file,90);
          }
          }
        }
       }
 //shop register//
    if(isset($_POST['Owner']) || isset($_POST['OwnerEmail']) || isset($_POST['Phonenumber']) || isset($_POST['shopownerpassword']) || isset($_POST['County']) ||isset($_POST['subcounty']) || isset($_POST['Town']) || isset($_POST['Street']) || isset($_POST['Shopname']) || isset($_POST['productscategory']) || isset($_POST['Opening']) || isset($_POST['Closing']) || isset($_POST['Description']) || isset($_POST['files'])){
	$username = $_POST['Owner'];
	$email = $_POST['OwnerEmail'];
	$phone = $_POST['Phonenumber'];
	$password = $_POST['shopownerpassword'];
	$county = $_POST['County'];
  $subcounty = $_POST['subcounty'];
	$town = $_POST['Town'];
	$street = $_POST['Street'];
	$shopname = $_POST['Shopname'];
	$category = $_POST['productscategory'];
	$closing = $_POST['Closing'];
	$open = $_POST['Opening'];
  $loginusername = $_POST['loginusername'];
	$description = $_POST['Description'];
	$hashpass = password_hash($password, PASSWORD_DEFAULT);
	$imageCount = count($_FILES['files']['name']);
	for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
    $targetdir = "D:/xampp/htdocs/Class/Profile/";
		$targetpath = $targetdir.$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {
		$checkshop = $shop->shop_exist($email);
		if ($checkshop != null) {
 		echo "Sorry,this Email has already registered another account.";
 	 }
   else{
	    $checkregistration = $shop->createshop($username,$email,$phone,$hashpass,$county,$subcounty,$town,$street,$shopname,$category,$open,$closing,$description,$imageName);
    	if ($checkregistration === true) {
    	$_SESSION['shop'] = $shopname;
    	echo "You have successfully registered a shop.Use your email and password combination to log in to your shop.But before going any further,I recommend that you click the link below to verify your email.";
    	$shop->shopcreatenotification('admin','New Shop Created');	
    	 }
      else {
    	echo "Something went wrong.Please try again later";	
    	} 	
   } 
   }  
	else{
			echo "Something went wrong.Please try again later";
	}

}
}
//shop login//
if (isset($_POST['action']) && $_POST['action'] == 'login') {
$shopemail = $shop->test_input($_POST['Shoploginame']);
$password = $shop->test_input($_POST['Shoploginpassword']);
#$email = $shop->test_input($_POST['Shoploginemail']);
$loggedInShop = $shop->login($shopemail);

if ($loggedInShop != null) {
	if (password_verify($password, $loggedInShop['Shoppassword'])) {
		echo "successlogin";
		$_SESSION['shop'] = $shopemail;
	}else{
		 echo "You have entered incorrect password";
     //$shop->showMessage('danger','You have entered incorrect password');
	}
}
else{
  //$shop->showMessage('danger','orry,there is no such shop registered in our database');
	echo "Sorry,there is no such shop registered in our database";
}
}
//sort form ajax request
if (isset($_POST['action']) && $_POST['action'] == 'fetchsortfor') {
$electronics = $shop->fetchelectronics();
if ($electronics != null) {
    echo '';
  }else {
    echo '';
  }  

}

//product type ajax handle
if (isset($_POST['category'])) {
  $category = ucfirst($_POST['category']);
  switch ($category) {
    case 'Laptops':
      $subcategories = array('' => 'Select electronic type*','Laptops' => 'Laptop', 'Desktops'=>'Desktop Computer', 'Televisions' => 'Television', 'Phones' => 'Mobile Phones','Tablets'=>'Tablets','Printers'=>'Printers','Audio'=>'Audio and Video Equipments','Gaming' => 'Gaming Accessories', 'Camera' => 'Camera', 'Projector' => 'Projector', 'ComputerAccessories' => 'Computer Accessories', 'PhoneAccessories' => 'Phone Accessories', 'other' => 'Other Electronic');
      foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;
    
        case 'Properties':
      $subcategories = array('' => 'Select the type of Property*','HousesforSale' => 'Houses & Apartments for Sale','Houseforrent' => 'Houses & Apartments for Rent','landforsale' => 'Land & Plots For Sale','landforrent' => 'Land & Plots For Rent','commercialforsale' => 'Commercial Property For Sale','commercialforrent' => 'Commercial Property for Rent','bedsitters' => 'BedSitters & Rooms For Sale','eventcenters' => 'Event centers, Venues and Workstations');
      foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;

      case 'Machines':
       $subcategories = array('' => 'Select the type machine*','construction' => 'Construction Machines','Industrial' => 'Industrial Plants, Machinery & Equipments','Mining' => 'Mining machines','Waterdrilling' => 'Water Drilling Machines', 'othermachines' => 'Other Machines');
      foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;

      case 'Othercategories':
       echo '<p>Go on and Fill the remaining Part. Your Category will be availed soon</p>';
      break;

      case 'Vehicles':
      $subcategories = array('' => 'Select the type vehicle*','cars' => 'Cars','trucks' => 'Trucks & Trailers','buses' => 'Vans,Buses & Microbuses','motorcycles' => 'MotorCycles & TukTuks', 'carparts' => 'Car Parts & Accessories');
      foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;
      case 'Fashions':
      $subcategories = array('' => 'Select here','bags' =>'Bags','shoes' => 'Shoes','clothing' => 'Clothing','jewellery' => 'Jewellery','watches' => 'Watches','cosmestics' => 'Cosmestics','otherfashion'=>'Other');
       foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;
      case 'Building':
       $subcategories = array('' => 'Select here','Buildingmaterial'=>'Building Materials','Fencing'=>'Fencing Materials','Plumbing'=>'Plumbing Materials','Paints'=>'Paints and Colours','Roofing'=>'Roofing Materials','otherbuliding'=>'Other');
       foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;
      case 'Household':
       $subcategories = array('' => 'Select here', 'Furnitures'=>'Furnitures','Beddings'=>'Beddings','Fridges'=>'Fridges','Utensils'=>'Utensils','otherhousehold'=>'More');
       foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;
       case 'Energy':
       $subcategories = array('' => 'Select here', 'Batteries'=>'Batteries','Solarpanels'=>'Solar Panels','Gas'=>'Gas','Generators'=>'Generators','Jikos'=>'Jikos','otherenergy'=>'Other');
       foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;
       case 'Agriculture':
       $subcategories = array('' => 'Select here', 'Farmmachinery'=>'Farm Machinery','FarmTools'=>'Farm Tools','Poultry'=>'Poultry Equipments','PoultryFeeds'=>'Poultry Feeds','AnimalFeeds'=>'Animal Feeds','seeds'=>'Seeds $ Seedlings','Agrochemicals'=>'Agrochemicals','Fertilizers'=>'Fertilizers','Younganimals'=>'Animals','Farmproduce'=>'Farm Produce','otherfarm'=>'Other');
       foreach ($subcategories as $key => $choice) {
        echo '<option value="'.$key.'">'.$choice.'</option>';
      }
      break;
    default:
      echo "";
      break;
  }
}

//product further details ajax handlle
if (isset($_POST['electroniccategory'])) {
 $electronictype = $_POST['electroniccategory'];
 //Electronics ajax Handle Start //
switch ($electronictype) {
  case 'Laptops':
    echo '<div class="form-group">
          <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>                 
                  <input type="text" name="productname" class="form-control" placeholder="What are you selling*" required>
                </div>
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
            <div class="form-group">
            <input list="brand" name="brand" id="browser" class="form-control">
            <datalist id="brand">
              <option value="Hp">
              <option value="Lenovo">
              <option value="Asus">
              <option value="Chuwi">
              <option value="Dell">
            </datalist>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>  
                  <input type="text" name="model" class="form-control" id="model" placeholder = "Model*">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">RAM</label>
                  <select class="form-control" name="ram" required>
                  <option value="">RAM*</option>
                  <option value="1GB">1GB</option>
                  <option value="1.5GB">1.5GB</option>
                  <option value="2GB">2GB</option>
                  <option value="3GB">3GB</option>
                  <option value="4GB">4GB</option>
                  <option value="6GB">6GB</option>
                  <option value="8GB">8GB</option>
                  <option value="12GB">12GB</option>
                  <option value="16GB">16GB</option>
                  <option value="24GB">24GB</option>
                  <option value="32GB">32GB</option>
                  </select>

                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Capacity</label>
                  <select class="form-control" name="hdd" required>
                    <option value="">Storage Capacity*</option>
                    <option value="16GB">16GB</option>
                    <option value="32GB">32GB</option>
                    <option value="40GB">40GB</option>
                    <option value="60GB">60GB</option>
                    <option value="128GB">128GB</option>
                    <option value="140GB">140GB</option>
                    <option value="160GB">160GB</option>
                    <option value="250GB">250GB</option>
                    <option value="256GB">256GB</option>
                    <option value="320GB">320GB</option>
                    <option value="350GB">350GB</option>
                    <option value="500GB">500GB</option>
                    <option value="512GB">512GB</option>
                    <option value="640GB">640GB</option>
                    <option value="700GB">700GB</option>
                    <option value="750GB">750GB</option>
                    <option value="1TB">1TB</option>
                  </select>
                </div>
                 
                    
                  <input type="hidden" name="battery" class="form-control" value="" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
               
                
                    
                  <input type="hidden" name="fcamera" class="form-control" value="" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
                
                 
                  <input type="hidden" name="rcamera" class="form-control" value="" id="model" placeholder = "Enter the rear Camera eg.12 MP">
                

                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  
                  
                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
                
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
                
               
                  
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min" required>
                

                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Screen Size (inches)</label>
                  <input type="text" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 14.6">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Operating System</label> 
                <select class="form-control" name="os" required>
                <option value="">Operating System*</option>
                <option value="DOS">DOS</option>
                <option value="Free DOS">Free DOS</option>
                <option value="Linux">Linux</option>
                <option value="Ubuntu">Ubuntu</option>
                <option value="Mac OS">Mac OS</option>
                <option value="Windows 10">Windows 10</option>
                <option value="Windows 8.1">Windows 8.1</option>
                <option value="Windows 8">Windows 8</option>
                <option value="Windows 7">Windows 7</option>
                <option value="Windows XP">Windows XP</option>
                <option value="Windows Vista">Windows Vista</option>
                <option value="No OS">No OS</option>
                </select>

                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Processor</label>  
                  <select class="form-control" name="processor">
                  <option value="">Processor*</option>
                  <option value="Intel">Intel</option>
                  <option value="Intel Core i3">Intel Core i3</option>
                  <option value="Intel Core i5">Intel Core i5</option>
                  <option value="Intel Core i7">Intel Core i7</option>
                  <option value="Intel Core i9">Intel Core i9</option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  </select>

                </div>

                <div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
    break;
  
  case 'Desktops':
  echo '<div class="form-group">
          <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>                 
                  <input type="text" name="productname" class="form-control" placeholder="What are you selling*" required>
                </div>
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
            <div class="form-group">
            <input list="brand" name="brand" id="browser" class="form-control">
            <datalist id="brand">
              <option value="Hp">
              <option value="Lenovo">
              <option value="Asus">
              <option value="Chuwi">
              <option value="Dell">
            </datalist>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>  
                  <input type="text" name="model" class="form-control" id="model" placeholder = "Model*">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">RAM</label>
                  <select class="form-control" name="ram" required>
                  <option value="">RAM*</option>
                  <option value="1GB">1GB</option>
                  <option value="1.5GB">1.5GB</option>
                  <option value="2GB">2GB</option>
                  <option value="3GB">3GB</option>
                  <option value="4GB">4GB</option>
                  <option value="6GB">6GB</option>
                  <option value="8GB">8GB</option>
                  <option value="12GB">12GB</option>
                  <option value="16GB">16GB</option>
                  <option value="24GB">24GB</option>
                  <option value="32GB">32GB</option>
                  </select>

                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Capacity</label>
                  <select class="form-control" name="hdd" required>
                    <option value="">Storage Capacity*</option>
                    <option value="16GB">16GB</option>
                    <option value="32GB">32GB</option>
                    <option value="40GB">40GB</option>
                    <option value="60GB">60GB</option>
                    <option value="128GB">128GB</option>
                    <option value="140GB">140GB</option>
                    <option value="160GB">160GB</option>
                    <option value="250GB">250GB</option>
                    <option value="256GB">256GB</option>
                    <option value="320GB">320GB</option>
                    <option value="350GB">350GB</option>
                    <option value="500GB">500GB</option>
                    <option value="512GB">512GB</option>
                    <option value="640GB">640GB</option>
                    <option value="700GB">700GB</option>
                    <option value="750GB">750GB</option>
                    <option value="1TB">1TB</option>
                  </select>
                </div>
                 
                    
                  <input type="hidden" name="battery" class="form-control" value="" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
               
                
                    
                  <input type="hidden" name="fcamera" class="form-control" value="" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
                
                 
                  <input type="hidden" name="rcamera" class="form-control" value="" id="model" placeholder = "Enter the rear Camera eg.12 MP">
                

                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  
                  
                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
                
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
                
               
                  
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min" required>
                

                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Screen Size (inches)</label>
                  <input type="text" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 14.6">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Operating System</label> 
                <select class="form-control" name="os" required>
                <option value="">Operating System*</option>
                <option value="DOS">DOS</option>
                <option value="Free DOS">Free DOS</option>
                <option value="Linux">Linux</option>
                <option value="Ubuntu">Ubuntu</option>
                <option value="Mac OS">Mac OS</option>
                <option value="Windows 10">Windows 10</option>
                <option value="Windows 8.1">Windows 8.1</option>
                <option value="Windows 8">Windows 8</option>
                <option value="Windows 7">Windows 7</option>
                <option value="Windows XP">Windows XP</option>
                <option value="Windows Vista">Windows Vista</option>
                <option value="No OS">No OS</option>
                </select>

                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Processor</label>  
                  <select class="form-control" name="processor">
                  <option value="">Processor*</option>
                  <option value="Intel">Intel</option>
                  <option value="Intel Core i3">Intel Core i3</option>
                  <option value="Intel Core i5">Intel Core i5</option>
                  <option value="Intel Core i7">Intel Core i7</option>
                  <option value="Intel Core i9">Intel Core i9</option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  <option value></option>
                  </select>

                </div>

                <div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                break;

    case 'Phones':
    echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Mobile Phone Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Mobile Phone brand eg. Tecno,Iphone">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Mobile Phone Model</label>
                  <input type="text" name="model" class="form-control" id="model" placeholder = "Mobile Phone model eg. Tecno Camon 6">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Screen size in inches</label>
                  <input type="number" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 6">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Mobile Phone RAM in GB</label>
                  <input type="number" name="ram" class="form-control" id="model" placeholder = "Enter RAM eg 2 GB">
                </div>
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage in GB</label>
                  <input type="number" name="hdd" class="form-control" id="model" placeholder = "Enter the Phone Storage eg 32 GB">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Battery in mAh</label>
                  <input type="number" name="battery" class="form-control" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Front Camera in MP</label>
                  <input type="number" name="fcamera" class="form-control" id="model" placeholder = "Enter the front Camera eg.12 MP">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Rear Camera in MP</label>
                  <input type="number" name="rcamera" class="form-control" id="model" placeholder = "Enter the rear Camera eg.12 MP">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Operating System</label>
                  <input type="text" name="os" class="form-control" id="model" placeholder = "Enter the operating system size eg. Android">
                </div>
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min">

                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD"><div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                break;

      case 'Televisions':
      echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Product Name</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">TV Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Enter TV brand eg. Samsung,Vitron">
                </div>
                
                    
                  <input type="hidden" name="model" class="form-control" value="" id="model" placeholder = "Laptop model eg. Hp 640">
                
                
                    
                  <input type="hidden" name="ram" class="form-control" value="" id="model" placeholder = "Enter RAM eg 4">
               
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                   
                  <input type="hidden" name="hdd" class="form-control" value="" id="model" placeholder = "Enter Hard Drive Capacity eg 500">
                
                 
                    
                  <input type="hidden" name="battery" class="form-control" value="" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
               
                
                    
                  <input type="hidden" name="fcamera" class="form-control" value="" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
                
                 
                  <input type="hidden" name="rcamera" class="form-control" value="" id="model" placeholder = "Enter the rear Camera eg.12 MP">
                
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">TV Screen size in inches</label>
                  <input type="number" name="screensize" class="form-control" id="model" placeholder = "Enter the TV screen size eg. 14.6">
                </div>
                
                    
                  <input type="hidden" name="os" class="form-control" value="" id="model" placeholder = "Enter the operating system size eg. windows 10">
                
                
                    
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">
               
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">TV Display type</label>
                  <input type="text" name="displaytype" class="form-control" id="model" placeholder = "Enter the TV display type eg.4KUHD">
                </div>

                <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min">

                <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD"><div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                break;

                case 'Tablets':
                echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Tablet Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Tablet brand eg. Tecno,Iphone">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Tablet Model</label>
                  <input type="text" name="model" class="form-control" id="model" placeholder = "Tablet model eg. Tecno Camon 6">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Screen size in inches</label>
                  <input type="number" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 6">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Tablet RAM in GB</label>
                  <input type="number" name="ram" class="form-control" id="model" placeholder = "Enter RAM eg 2 GB">
                </div>
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage in GB</label>
                  <input type="number" name="hdd" class="form-control" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Battery in mAh</label>
                  <input type="number" name="battery" class="form-control" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Front Camera in MP</label>
                  <input type="number" name="fcamera" class="form-control" id="model" placeholder = "Enter the front Camera eg.12 MP">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Rear Camera in MP</label>
                  <input type="number" name="rcamera" class="form-control" id="model" placeholder = "Enter the rear Camera eg.12 MP">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Operating System</label>
                  <input type="text" name="os" class="form-control" id="model" placeholder = "Enter the operating system size eg. Android">
                </div>
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min">

                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD"><div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                  break;

                  case 'Camera':
                  echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Camera Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Tablet brand eg. Canon">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Camera Model</label>
                  <input type="text" name="model" class="form-control" id="model" placeholder = "Enter Camera model">
                </div>
                
                <input type="hidden" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD"><div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                  break;

                  case 'Projector':
                  echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Projector Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Projector brand eg. Sony">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Projector Model</label>
                  <input type="text" name="model" class="form-control" id="model" placeholder = "Enter Projector model">
                </div>
                
                <input type="hidden" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min">
                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD"><div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                  break;

                  case 'Gaming':
                   echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Gaming Accessory Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Gaming Accessory brand eg. Sony">
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Gaming Accessory Model</label>
                  <input type="text" name="model" class="form-control" id="model" placeholder = "Enter Gaming Accessory model">
                </div>
                
                <input type="hidden" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">


                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD"><div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                  break;

                  case 'Printers':
                  echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter the Printer  Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Printer brand eg. Kyocera">
                </div>
              
                    
                  <input type="hidden" name="model" class="form-control" id="model" placeholder = "Enter Gaming Accessory model">
               
                
                <input type="hidden" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum Paper Size</label>
                  <input type="text" name="mxps" class="form-control" placeholder="Enter the maximum paper size of your printer eg. A3" required>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Color</label>
                  <input type="text" name="outputcolor" class="form-control" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
                </div>
                <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Printing Speed</label>
                  <input type="text" name="printingspeed" class="form-control" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min" required>
                </div>
                <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD"><div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                  break;

                  case 'Audio':
                  echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
            <div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter the Printer  Brand</label>
                  <input type="text" name="brand" class="form-control" id="model" placeholder = "Printer brand eg. Kyocera">
                </div>
              
                    
                  <input type="hidden" name="model" class="form-control" id="model" placeholder = "Enter Gaming Accessory model">
               
                
                <input type="hidden" name="screensize" class="form-control" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  
                   
                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min"> 
                <div class="form-group">
                <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">Select the category of Audio Equipment</label>
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="earphones">Earphones and HeadPhones</option>
                <option value="speakers">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                break;

                case 'ComputerAccessories':
                echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
           
                 
                  <input type="hidden" name="brand" class="form-control" value="" id="model" placeholder = "Printer brand eg. Kyocera">
                </div>
              
                    
                  <input type="hidden" name="model" class="form-control" value="" id="model" placeholder = "Enter Gaming Accessory model">
               
                
                <input type="hidden" name="screensize" class="form-control" value="" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" value="" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" value="" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" value="" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" value="" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" value="" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" value="" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  
                   
                  <input type="hidden" name="mxps" class="form-control" value="" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min" 
                >

                <div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                break;

                case 'PhoneAccessories':
                echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
           
                 
                  <input type="hidden" name="brand" class="form-control" value="" id="model" placeholder = "Printer brand eg. Kyocera">
                </div>
              
                    
                  <input type="hidden" name="model" class="form-control" value="" id="model" placeholder = "Enter Gaming Accessory model">
               
                
                <input type="hidden" name="screensize" class="form-control" value="" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" value="" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" value="" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" value="" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" value="" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" value="" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" value="" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  
                   
                  <input type="hidden" name="mxps" class="form-control" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min" 
                >

                <div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                break;

                case 'other':
                echo '<div class="form-group">
                    <label for="Product Name" style="font-size: 15px;font-weight: bold;color: #ff0066;">What are you selling?</label>
                  <input type="text" name="productname" class="form-control" placeholder="Enter the name of your product" required>
                </div>
           
                 
                  <input type="hidden" name="brand" class="form-control" value="" id="model" placeholder = "Printer brand eg. Kyocera">
                </div>
              
                    
                  <input type="hidden" name="model" class="form-control" value="" id="model" placeholder = "Enter Gaming Accessory model">
               
                
                <input type="hidden" name="screensize" class="form-control" value ="" id="model" placeholder = "Enter the screen size eg. 6">    
               
                
                   
                  <input type="hidden" name="ram" class="form-control" value="" id="model" placeholder = "Enter RAM eg 2 GB">
                
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Storage Type</label>
                  <select class="form-control" name="storagetype">
                   <option value="">Select</option>
                   <option value="Hard Disk">Hard Disk</option>
                   <option value="Solid State Drive">Solid State Drive</option>
                   <option value="Hybrid">Hybrid</option> 
                  </select>
                </div>
                    
                  <input type="hidden" name="hdd" class="form-control" value="" id="model" placeholder = "Enter the Tablet Storage eg 32 GB">
               
              
                  <input type="hidden" name="battery" class="form-control" value="" id="model" placeholder = "Enter the battery Capacity eg 5000mAh">
                
            
                  <input type="hidden" name="fcamera" class="form-control" value="" id="model" placeholder = "Enter the front Camera eg.12 MP">
               
               
                    
                  <input type="hidden" name="rcamera" class="form-control" value="" id="model" placeholder = "Enter the rear Camera eg.12 MP">
             
               
                  <input type="hidden" name="os" class="form-control" value="" id="model" placeholder = "Enter the operating system size eg. Android">
                
                
                   
                  <input type="hidden" name="processor" class="form-control" value="" id="model" placeholder = "Enter the processor size eg. core i3, core i5">

                   
                  <input type="hidden" name="displaytype" class="form-control" value="" id="model" placeholder = "Enter the TV display type eg.4KUHD">

                  
                   
                  <input type="hidden" name="mxps" class="form-control" placeholder="Enter the maximum paper size of your printer eg. A3" required>
               
                  <input type="hidden" name="outputcolor" class="form-control" value="" placeholder="Enter the output color of your printer eg. Monochrome(Black Only)" required>
              
                  <input type="hidden" name="printingspeed" class="form-control" value="" placeholder="Enter the Printing Speed eg. 20 - 25 Copies per Min" 
                >

                <div class="form-group" style="display:none;">
                <select class="form-control" id="typeofaudio" name="typeofaudio">
                <option value="">Earphones and HeadPhones</option>
                <option value="">Speakers & Home Theatres</option>
                </select>
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select class="form-control" name="Statusselect">
                 <option value="">Select</option>
                 <option value="Brand New">Brand New</option>
                 <option value="Used">Used</option>
                 <option value="Refurbished">Refurbished</option>
               </select> 
              </div>';
                break;

                //Electronics ajax Handle End //

                //Properties ajax Handle Start //
                case 'commercialforrent':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Warehouse">
              <option value="Shop">
              <option value="Office Space">
              <option value="Church Space">
              <otion value="Factory">
              <option value="Filing Station">
              <option value="Garage">
              <option value="Hotel">
              <option value="Restaurant">
              <option value="Meeting room">
              <option value="Showroom">
              <option value="School">
              <option value="Supermarket">
              <option value="Pharmacy">
            </datalist> 
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div>
                  <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
              </select>    
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;
                case 'commercialforsale':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Warehouse">
              <option value="Shop">
              <option value="Office Space">
              <option value="Church Space">
              <otion value="Factory">
              <option value="Filing Station">
              <option value="Garage">
              <option value="Hotel">
              <option value="Restaurant">
              <option value="Meeting room">
              <option value="Showroom">
              <option value="School">
              <option value="Supermarket">
              <option value="Pharmacy">
            </datalist> 
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div>
                  <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
              </select>    
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;

                 case 'landforsale':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Commercial Property">
              <option value="FarmLand">
              <option value="Industrial Land">
              <option value="Patoral Land">
              <otion value="Mixed-use Land">
              <option value="Quary">
              <option value="Residential Land">
            </datalist>
             <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
              </select>    
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;

                case 'landforrent':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Commercial Property">
              <option value="FarmLand">
              <option value="Industrial Land">
              <option value="Patoral Land">
              <otion value="Mixed-use Land">
              <option value="Quary">
              <option value="Residential Land">
            </datalist>
             <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
              </select>    
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;

                case 'HousesforSale':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Apartment">
              <option value="Bungalow">
              <option value="Chalet">
              <option value="Condo">
              <otion value="Duplex">
              <option value="House">
              <option value="Maisonnete">
              <option value="Mansion">
              <option value="Villa">
              <option value="Townhouse">
              <option value="Room & Parlour">
              <option value="Studio Apartement">
            </datalist> 
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
                <option value="Renovated">Renovated</option>
              </select>    
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;

                case 'Housesforrent':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Apartment">
              <option value="Bungalow">
              <option value="Chalet">
              <option value="Condo">
              <otion value="Duplex">
              <option value="House">
              <option value="Maisonnete">
              <option value="Mansion">
              <option value="Villa">
              <option value="Townhouse">
              <option value="Room & Parlour">
              <option value="Studio Apartement">
            </datalist> 
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
                <option value="Renovated">Renovated</option>
              </select>    
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;

                 case 'Houseforrent':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Apartment">
              <option value="Bungalow">
              <option value="Chalet">
              <option value="Condo">
              <otion value="Duplex">
              <option value="House">
              <option value="Maisonnete">
              <option value="Mansion">
              <option value="Villa">
              <option value="Townhouse">
              <option value="Room & Parlour">
              <option value="Studio Apartement">
            </datalist> 
                </div>
                  <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
                <option value="Renovated">Renovated</option>
              </select>    
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;

                 case 'eventcenters':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Club">
              <option value="Graduation Pavillion">
              <option value="Conference Center">
              <option value="Theater">
              <otion value="Workstation">
              <option value="Training Hall">
              <option value="Restaurant">
              <option value="Wedding Ground">
              <option value="Gallery">
            </datalist> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
                <option value="Renovated">Renovated</option>
              </select>    
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;

                case 'bedsitters':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                <input type="text" name="title" required class="form-control" maxlength="60"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Location</label>
                <h3 style="font-size: 13px;font-weight: bold;color: green;">County</h3>
                <input type="text" name="county" required class="form-control mb-3" placeholder="eg Machakos County">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Sub-County</h3>
                <input type="text" name="subcounty" required class="form-control mb-3" placeholder="">
                <h3 style="font-size: 13px;font-weight: bold;color: green;">Specific Location</h3>
                <input type="text" name="specificlocation" required class="form-control mb-3" placeholder="eg Kikumini"> 
                </div>
                <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                   <input list="propertytype" name="propertytype" id="browser" class="form-control">
            <datalist id="propertytype">
              <option value="Club">
              <option value="Graduation Pavillion">
              <option value="Conference Center">
              <option value="Theater">
              <otion value="Workstation">
              <option value="Training Hall">
              <option value="Restaurant">
              <option value="Wedding Ground">
              <option value="Gallery">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of people at a go</label>
                <input type="number" name="numberofguests" class="form-control">  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Duration</label>
                 <select name="duration" class="form-control">
                   <option value=""></option>
                   <option value="Hourly">Hourly</option>
                   <option value="Daily">Daily</option>
                   <option value="Weekly">Weekly</option>
                   <option value="Monthly">Monthly</option>
                 </select> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Facilities (Separate by a comma)</label>
                   <textarea class="form-control" name="facilities" placeholder="List all the facilities eg. Electricity, Water Supply"></textarea> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedrooms</label>
                 <input type="number" name="bedrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bathrooms</label>
                 <input type="number" name="bathrooms" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
              <select class="form-control" name="condition">
                <option value="">Select</option>
                <option value="Newly Built">Newly Built</option>
                <option value="Fairly Used">Fairly Used</option>
                <option value="Old">Old</option>
                <option value="Renovated">Renovated</option>
              </select>    
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furnishing</label>
              <select class="form-control" name="furnishing">
                <option value="">Select</option>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
              </select>    
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size (square metres)</label>
                 <input type="text" name="size" placeholder="eg 2000" class="form-control"> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Minimum Rent Days</label>
                 <input type="number" name="rentdays" placeholder="eg 30(days)" class="form-control"> 
                </div>';
                break;
                //Properties ajax Handle End //

                //Vehicles ajax Handle End //
                case 'cars':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MAKE</label>
            <input list="brand" name="make" id="browser" class="form-control">
            <datalist id="brand">
              <option value="Audi">
              <option value="BMW">
              <option value="Toyota">
              <option value="Lexus">
              <option value="Vanguard">
              <option value="Isuzu">
              <option value="Mercedez Benz">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MODEL</label>
            <input list="brand" name="brand" id="browser" class="form-control">
            <datalist id="brand">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Year of Manufacrure</label>
              <input type="number" name="yomanufacure" class="form-control" placeholder="eg 2013">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Horse Power</label>
              <input type="text" name="horsepower" class="form-control" placeholder="eg 177 hp">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of Seats</label>
              <input type="number" name="seats" class="form-control" placeholder="eg 7">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">FUEL</label>
            <input list="fuel" name="fuel" id="browser" class="form-control">
            <datalist id="fuel">
              <option value="Diesel">
              <option value="Petrol">
              <option value="Electric Car">
              <option value="Hybrid">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
               <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist>
                </div>
                  <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">DRIVETRAIN</label>
               <input list="drivetrain" name="drivetrain" id="browser" class="form-control">
            <datalist id="drivetrain">
              <option value="All Wheel">
              <option value="Rear">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">TRANSMISSION</label>
               <input list="transmission" name="transmission" id="browser" class="form-control">
            <datalist id="transmission">
              <option value="Automatic">
              <option value="Manual">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MILEAGE</label>
               <input type="number" name="mileage" class="form-control" placeholder="eg 23000km">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="brand new">Brand new</option>
                 <option value="used abroad">Used Abraod</option>
                 <option value="used kenya">Used in Kenya</option>
               </select>
                </div>';
                break;
                 case 'trucks':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MAKE</label>
            <input list="brand" name="make" id="browser" class="form-control">
            <datalist id="brand" style="background-color: green;">
              <option value="Isuzu">
              <option value="Fuso">
              <option value="Scannia">
              <option value="Mistubishi">
              <option value="TATA">
              <option value="Mercedez Benz">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MODEL</label>
            <input list="brand" name="brand" id="browser" class="form-control" placeholder="Eg. Isuzu FVZ">
            <datalist id="brand">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Year of Manufacrure</label>
              <input type="number" name="yomanufacure" class="form-control" placeholder="eg 2013">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Horse Power</label>
              <input type="text" name="horsepower" class="form-control" placeholder="eg 177 hp">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">FUEL</label>
            <input list="fuel" name="fuel" id="browser" class="form-control">
            <datalist id="fuel">
              <option value="Diesel">
              <option value="Petrol">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of Wheels</label>
            <input list="numberofwheels" name="wheels" id="browser" class="form-control">
            <datalist id="numberofwheels" style="background-color: green;">
              <option value="4">
              <option value="6">
              <option value="10">
              <option value="12">
              <option value="24">
              <option value="Above 24">
            </datalist>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Differential locking?</label>
                  <select name="difflock" class="form-control">
                    <option value="yes">Yes</option>
                    <option value="No">NO</option>
                  </select>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
               <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">TRANSMISSION</label>
               <input list="transmission" name="transmission" id="browser" class="form-control">
            <datalist id="transmission">
              <option value="Automatic">
              <option value="Manual">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MILEAGE</label>
               <input type="number" name="mileage" class="form-control" placeholder="eg 23000km">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="brand new">Brand new</option>
                 <option value="used abroad">Used Abroad</option>
                 <option value="used kenya">Used in Kenya</option>
               </select>
                </div>';
                break;
                case 'buses':
                echo '<div class="form-group">
                  <div class="form-group">
                    <label style="font-size: 15px;font-weight: bold;color: #ff0066;">TYPE</label>
                    <select name="type2" class="form-control">
                      <option value="">Select</option>
                      <option value="van">Van</option>
                      <option value="microbus">Microbus</option>
                      <option value="bus">Bus</option>
                    </select>
                  </div>
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MAKE</label>
            <input list="brand" name="make" id="browser" class="form-control">
            <datalist id="brand" style="background-color: green;">
              <option value="Isuzu">
              <option value="Fuso">
              <option value="Scannia">
              <option value="Mistubishi">
              <option value="Nissan">
              <option value="Toyota">
              <option value="Mercedez Benz">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MODEL</label>
            <input list="brand" name="brand" id="browser" class="form-control" placeholder="">
            <datalist id="brand">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Year of Manufacrure</label>
              <input type="number" name="yomanufacure" class="form-control" placeholder="eg 2013">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Horse Power</label>
              <input type="text" name="horsepower" class="form-control" placeholder="eg 177 hp">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of Seats</label>
              <input type="number" name="seats" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">FUEL</label>
            <input list="fuel" name="fuel" id="browser" class="form-control">
            <datalist id="fuel">
              <option value="Diesel">
              <option value="Petrol">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of Wheels</label>
            <input list="numberofwheels" name="wheels" id="browser" class="form-control">
            <datalist id="numberofwheels" style="background-color: green;">
              <option value="4">
              <option value="6">
              <option value="10">
            </datalist>
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Differential locking?</label>
                  <select name="difflock" class="form-control">
                    <option value="">Select</option>
                    <option value="yes">Yes</option>
                    <option value="No">NO</option>
                  </select>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
               <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">TRANSMISSION</label>
               <input list="transmission" name="transmission" id="browser" class="form-control">
            <datalist id="transmission">
              <option value="Automatic">
              <option value="Manual">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MILEAGE</label>
               <input type="number" name="mileage" class="form-control" placeholder="eg 23000km">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="brand new">Brand new</option>
                 <option value="used abroad">Used Abroad</option>
                 <option value="used kenya">Used in Kenya</option>
               </select>
                </div>';
                break;
                case 'motorcycles':
                echo '<div>
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MAKE</label>
            <input list="brand" name="make" id="browser" class="form-control">
            <datalist id="brand" style="background-color: green;">
              <option value="Skygo">
              <option value="Dayun">
              <option value="Galaxy">
              <option value="Tiger">
              <option value="Suzuki">
              <option value="TVS">
              <option value="YAMAHA">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Year of Manufacrure</label>
              <input type="number" name="yomanufacure" class="form-control" placeholder="eg 2013">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">FUEL</label>
            <input list="fuel" name="fuel" id="browser" class="form-control">
            <datalist id="fuel">
              <option value="Diesel">
              <option value="Petrol">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
               <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist>
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">MILEAGE</label>
               <input type="number" name="mileage" class="form-control" placeholder="eg 23000km">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="brand new">Brand new</option>
                 <option value="used abroad">Used Abroad</option>
                 <option value="used kenya">Used in Kenya</option>
               </select>
                </div>';
                break;
                case 'carparts':
                echo '<div>
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Car Parts/Accessory</label>
            <input list="part" name="part" id="browser" class="form-control">
            <datalist id="part" style="background-color: green;">
              <option value="Wheels">
              <option value="Car Jack">
              <option value="Clutch">
              <option value="Head Lamp">
              <option value="Engine">
              <option value="Dashboard">
              <option value="Chairs">
              <option value="Speedometers">
            </datalist>
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Country of Origin</label>
                  <input type="countryoforigin" name="corigin" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="brand new">Brand new</option>
                 <option value="used abroad">Used Abroad</option>
                 <option value="used kenya">Used in Kenya</option>
               </select>
                </div>';
                break;

                case 'clothing':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Clothe</label>
                    <input list="clothe" name="type" id="browser" class="form-control">
            <datalist id="clothe" style="background-color: green;">
              <option value="Shirt">
              <option value="Skirt">
              <option value="T-shirt">
              <option value="Jacket">
              <option value="Trouser">
              <option value="Short">
              <option value="Stocking">
              <option value="Pullover">
              <option value="Caps">
              <option value="Dress">
              <option value="Waist Belt">
              <option value="Tie">
              <option value="Vest">
              <option value="Swimming Costume">
              <option value="Wedding Wear">
              <option value="Graduation Gowns">
              <option value="Coats">
              <option value="Suits">
              <option value="Underwears">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Associated Gender</label><br>
                 <input type="radio" name="gender" value="Male" class=""> Male
                 <input type="radio" name="gender" value="Female" class=""> Female
                 <input type="radio" name="gender" value="Both Gender" class=""> Unisex 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
                <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist> 
                </div>
                <div class="form-group">
            <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size(optional)</label>
                  <input type="number" name="size" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="New">New</option>
                 <option value="Used">Used</option>
               </select>
                </div>';
                break;
          case 'shoes':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Shoe</label>
                    <input list="clothe" name="type" id="browser" class="form-control">
            <datalist id="clothe" style="background-color: green;">
              <option value="Sneakers">
              <option value="Gumboots">
              <option value="Slippers">
              <option value="Clogs">
              <option value="Clocs">
              <option value="Earth shoes">
              <option value="Flip Flops">
              <option value="Huaraches">
              <option value="Galoshes">
              <option value="Jika tabbi">
              <option value="Mocasins">
              <option value="Riding boots">
              <option value="Russian boots">
              <option value="Sandals">
              <option value="Uggs">
              <option value="Oxfords">
              <option value="Saddle Shoes">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg Timberland"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Associated Gender</label><br>
                 <input type="radio" name="gender" value="Male" class=""> Male
                 <input type="radio" name="gender" value="Female" class=""> Female
                 <input type="radio" name="gender" value="Both Gender" class=""> Unisex 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
                <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist> 
                </div>
                <div class="form-group">
            <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size(optional)</label>
                  <input type="number" name="size" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="New">New</option>
                 <option value="Used">Used</option>
               </select>
                </div>';
                break;
                case 'bags':
                echo '
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Bag</label>
                    <input list="clothe" name="type" id="browser" class="form-control">
            <datalist id="clothe" style="background-color: green;">
              <option value="Hand Bags">
              <option value="Backpacks">
              <option value="Vanity Case">
              <option value="Briefcase">
              <option value="Doctor Bag">
              <option value="Duffel Bag">
              <option value="Laptop Bag">
              <option value="Side Packs">
              <option value="Mini bag">
              <option value="Wristless">
              <option value="Hobo Bag">
              <option value="Tote">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg Timberland"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Associated Gender</label><br>
                 <input type="radio" name="gender" value="Male" class=""> Male
                 <input type="radio" name="gender" value="Female" class=""> Female
                 <input type="radio" name="gender" value="Both Gender" class=""> Unisex 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
                <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
            <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size(optional)</label>
                  <input type="number" name="size" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="New">New</option>
                 <option value="Used">Used</option>
               </select>
                </div>';
                break;
            case 'jewellery':
                echo '
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Jewellery</label>
            <input list="jewellerytype" name="type" id="browser" class="form-control">
            <datalist id="jewellerytype">
              <option value="Necklaces">
              <option value="printingspeed">
              <option value="Chains">
              <option value="Earings">
              <option value="Bangles">
              <option value="Hathpool">
              <option value="Bracelet">
              <option value="Body Piercings">
              <option value="Chockers">
              <option value="Armslet">
              <option value="Cuff Links">
              <option value="Rosary">
              <option value="Toe Rings">
              <option value="Anklets">
              <option value="Crowns">
              <option value="Hairpins">
              <option value="Hairings">
              <option value="Hatpins">  
              <option value="Spectacles">
            </datalist>
                </div>
            <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Associated Gender</label><br>
                 <input type="radio" name="gender" value="Male" class=""> Male
                 <input type="radio" name="gender" value="Female" class=""> Female
                 <input type="radio" name="gender" value="Both Gender" class=""> Unisex 
                </div>    
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
                <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
            <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size(optional)</label>
                  <input type="number" name="size" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="New">New</option>
                 <option value="Used">Used</option>
               </select>
                </div>';
                break;
            case 'watches':
                echo '<div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Shoe</label>
                    <input list="clothe" name="type" id="browser" class="form-control">
            <datalist id="clothe" style="background-color: green;">
              <option value="Sneakers">
              <option value="Gumboots">
              <option value="Slippers">
              <option value="Clogs">
              <option value="Clocs">
              <option value="Earth shoes">
              <option value="Flip Flops">
              <option value="Huaraches">
              <option value="Galoshes">
              <option value="Jika tabbi">
              <option value="Mocasins">
              <option value="Riding boots">
              <option value="Russian boots">
              <option value="Sandals">
              <option value="Uggs">
              <option value="Oxfords">
              <option value="Saddle Shoes">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter the Brand</label>
            <input list="watchbrand" name="brand" id="browser" class="form-control">
            <datalist id="watchbrand">
              <option value="Apple">
              <option value="Samsung">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Associated Gender</label><br>
                 <input type="radio" name="gender" value="Male" class=""> Male
                 <input type="radio" name="gender" value="Female" class=""> Female
                 <input type="radio" name="gender" value="Both Gender" class=""> Unisex 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
               <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
            <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size(optional)</label>
                  <input type="number" name="size" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="New">New</option>
                 <option value="Used">Used</option>
               </select>
                </div>';
                break;
                case 'cosmestics':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of cosmestic</label>
                    <input list="clothe" name="type" id="browser" class="form-control">
            <datalist id="clothe" style="background-color: green;">
              <option value="Sneakers">
              <option value="Gumboots">
              <option value="Slippers">
              <option value="Clogs">
              <option value="Clocs">
              <option value="Earth shoes">
              <option value="Flip Flops">
              <option value="Huaraches">
              <option value="Galoshes">
              <option value="Jika tabbi">
              <option value="Mocasins">
              <option value="Riding boots">
              <option value="Russian boots">
              <option value="Sandals">
              <option value="Uggs">
              <option value="Oxfords">
              <option value="Saddle Shoes">
            </datalist>
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter the Brand</label>
            <input list="watchbrand" name="brand" id="browser" class="form-control">
            <datalist id="watchbrand">
              <option value="Apple">
              <option value="Samsung">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Associated Gender</label><br>
                 <input type="radio" name="gender" value="Male" class=""> Male
                 <input type="radio" name="gender" value="Female" class=""> Female
                 <input type="radio" name="gender" value="Both Gender" class=""> Unisex 
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
               <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
            <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size(optional)</label>
                  <input type="number" name="size" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="New">New</option>
                 <option value="Used">Used</option>
               </select>
                </div>';
                break;
                case 'otherfashion':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                    <input list="clothe" name="type" id="browser" class="form-control" required>
            <datalist id="clothe" style="background-color: green;">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter the Brand</label>
            <input list="watchbrand" name="brand" id="browser" class="form-control">
            <datalist id="watchbrand">
              <option value="Apple">
              <option value="Samsung">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Associated Gender</label><br>
                 <input type="radio" name="gender" value="Male" class=""> Male
                 <input type="radio" name="gender" value="Female" class=""> Female
                 <input type="radio" name="gender" value="Both Gender" class=""> Unisex 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Colour</label>
               <input list="color" name="color" id="browser" class="form-control">
            <datalist id="color">
              <option value="Black">
              <option value="White">
              <option value="Grey">
              <option value="Blue">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
            <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Size(optional)</label>
                  <input type="number" name="size" class="form-control">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
               <select name="condition" class="form-control">
                 <option value="">Select Condition</option>
                 <option value="New">New</option>
                 <option value="Used">Used</option>
               </select>
                </div>';
                break;
                

            case 'Buildingmaterial':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Clean River Sand" class="form-control">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select or type the product</label>
            <input list="buildingmaterialtype" name="materialtype" id="browser" class="form-control">
            <datalist id="buildingmaterialtype">
              <option value="Cement">
              <option value="Sand">
              <option value="Ballast">
              <option value="Quary Stones">
              <option value="hardcores">
              <option value="Bricks">
              <option value="Murram">
              <option value="Concrete Bricks">
              <option value="Machine Cut Stones">
              <option value="Steel Metals">
              <option value="Terazzo">
              <option value="Fine ballast">
            </datalist>
                </div>
               <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Units of measurement</label>
                 <input list="measurementunit" name="measurementunit" id="browser" class="form-control" placeholder="eg Bags,pieces,tonnes,kilos,inches">
            <datalist id="measurementunit">
              <option value="Bags">
              <option value="Pieces">
              <option value="Tonnes">
              <option value="Kilos">
              <option value="Inches">
            </datalist>
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Duracoat">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Liquid Used for Dilution</label>
              <input list="dilution" name="dilution" id="browser" class="form-control" placeholder="">
            <datalist id="dilution">
              <option value="Turpentine">
              <option value="Kerosene">
              <option value="Water">
            </datalist>
               </div>';
                break;
              case 'Fencing':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Fencing Polls" class="form-control">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select or type the fencing product</label>
            <input list="fencingmaterialtype" name="materialtype" id="browser" class="form-control">
            <datalist id="fencingmaterialtype">
              <option value="Concrete Fencing Polls">
              <option value="Plastic Fencing Polls">
              <option value="Wooden Fencing polls">
              <option value="Wire Mesh">
              <option value="Chain Links">
              <option value="Electric Fencing">
              <option value="Barbed wire">
            </datalist>
                </div>
                <div class="form-group">
                  <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Units of measurement</label>
                 <input list="measurementunit" name="measurementunit" id="browser" class="form-control" placeholder="eg Bags,pieces,tonnes,kilos,inches">
            <datalist id="measurementunit">
              <option value="Feets">
              <option value="Inches">
              <option value="Pieces">
              <option value="Kilos">
            </datalist>
               </div>
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Dumuzaz">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Liquid Used for Dilution</label>
              <input list="dilution" name="dilution" id="browser" class="form-control" placeholder="">
            <datalist id="dilution">
              <option value="Turpentine">
              <option value="Kerosene">
              <option value="Water">
            </datalist>
               </div>';
                break;
              case 'Roofing':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Dumuzaz iron sheets" class="form-control">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select or type the product</label>
            <input list="roofingmaterialtype" name="materialtype" id="browser" class="form-control">
            <datalist id="roofingmaterialtype">
              <option value="Ironsheets">
              <option value="Tiles">
              <option value="Ceilings">
              <option value="Timber">
              <option value="Roofing Metals">
              <option value="Nails">
              <option value="Gutters">
              <option value="Facial Boards">
            </datalist>
                </div>
               <div class="form-group">
                  <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Units of measurement</label>
                 <input list="measurementunit" name="measurementunit" id="browser" class="form-control" placeholder="eg Bags,pieces,tonnes,kilos,inches">
            <datalist id="measurementunit">
              <option value="Feets">
              <option value="Inches">
              <option value="Pieces">
              <option value="Kilos">
            </datalist>
               </div>
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Dumuzaz">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Liquid Used for Dilution</label>
              <input list="dilution" name="dilution" id="browser" class="form-control" placeholder="">
            <datalist id="dilution">
              <option value="Turpentine">
              <option value="Kerosene">
              <option value="Water">
            </datalist>
               </div>';
                break;
              case 'Plumbing':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Water Pipes" class="form-control">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select or type the product</label>
            <input list="plumbingmaterialtype" name="materialtype" id="browser" class="form-control">
            <datalist id="plumbingmaterialtype">
              <option value="Metallic water pipes">
              <option value="Plastic Water Pipes">
              <option value="Horse Pipes">
              <option value="Tanks">
              <option value="Taps">
              <option value="Water measuring meters">
              <option value="">
              <option value="Facial Boards">
            </datalist>
                </div>
                  <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Units of measurement</label>
                 <input list="measurementunit" name="measurementunit" id="browser" class="form-control" placeholder="eg Bags,pieces,tonnes,kilos,inches">
            <datalist id="measurementunit">
              <option value="Feets">
              <option value="Inches">
              <option value="Pieces">
              <option value="Kilos">
            </datalist>
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Dumuzaz">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Liquid Used for Dilution</label>
              <input list="dilution" name="dilution" id="browser" class="form-control" placeholder="">
            <datalist id="dilution">
              <option value="Turpentine">
              <option value="Kerosene">
              <option value="Water">
            </datalist>
               </div>';
                break;
                case 'Paints':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Basco Paints" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select or type the product</label>
            <input list="plumbingmaterialtype" name="materialtype" id="browser" class="form-control">
            <datalist id="plumbingmaterialtype">
              <option value="Metallic water pipes">
              <option value="Plastic Water Pipes">
              <option value="Horse Pipes">
              <option value="Tanks">
              <option value="Taps">
              <option value="Water measuring meters">
              <option value="">
              <option value="Facial Boards">
            </datalist>
                </div>
                  <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Units of measurement</label>
                 <input list="measurementunit" name="measurementunit" id="browser" class="form-control" placeholder="eg Bags,pieces,tonnes,kilos,inches">
            <datalist id="measurementunit">
              <option value="Feets">
              <option value="Inches">
              <option value="Pieces">
              <option value="Kilos">
            </datalist>
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Duracoat">
               </div>
               <div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Liquid Used for Dilution</label>
              <input list="dilution" name="dilution" id="browser" class="form-control" placeholder="">
            <datalist id="dilution">
              <option value="Turpentine">
              <option value="Kerosene">
              <option value="Water">
            </datalist>
               </div>';
                break;
                case 'otherbuliding':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Water Pipes" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Select or type the product</label>
            <input list="othermaterialtype" name="materialtype" id="browser" class="form-control">
            <datalist id="othermaterialtype">
            </datalist>
                </div>
                  <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Units of measurement (if any)</label>
                 <input list="measurementunit" name="measurementunit" id="browser" class="form-control" placeholder="eg Bags,pieces,tonnes,kilos,inches">
            <datalist id="measurementunit">
              <option value="Feets">
              <option value="Inches">
              <option value="Pieces">
              <option value="Kilos">
            </datalist>
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand (if any)</label>
                 <input type="text" name="brand" class="form-control" placeholder="">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>
              <div style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Liquid Used for Dilution</label>
              <input list="dilution" name="dilution" id="browser" class="form-control" placeholder="">
            <datalist id="dilution">
              <option value="Turpentine">
              <option value="Kerosene">
              <option value="Water">
            </datalist>
               </div>';
                break;





                case 'Farmmachinery':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Tractor" class="form-control">
                </div>
                 <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">The Machine</label>
              <input list="farmmachine" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="farmmachine">
              <option value="Tractors">
              <option value="Ploughs">
              <option value="Combine Harvesters">
                <option value="Mowers">
                <option value="Chuffcutters">
                <option value="Tractor Accessories">
                <option value="Harrows">
                <option value="Fertilizer Spreaders">
                <option value="Seeders">
                <option value="Balers">
                <option value="Animal Feed making machines">
            </datalist>
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used Abroad">Used Abroad</option>
                  <option value="Used in Kenya">Used in Kenya</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                case 'FarmTools':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Slasher for sale" class="form-control">
                </div>
                 <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">The Tool</label>
              <input list="farmtool" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="farmtool">
              <option value="Jembes">
              <option value="Wheelbarrows">
              <option value="Forked Jembe">
                <option value="Spade">
                <option value="Pruning Knife">
                <option value="Spade">
                <option value="Rake">
                <option value="Garden Fork">
                <option value="Sprinklers">
                <option value="Slashers">
                <option value="Knapsack Sprayers">
            </datalist>
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                case 'Poultry':
                echo '
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Incubator" class="form-control">
                </div>
                 <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">The Equipment</label>
              <input list="poultryequipment" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="poultryequipment">
              <option value="Water Equipment">
              <option value="Feeder Equipment">
              <option value="Heaters & Brooders">
                <option value="Egg Incubators">
                <option value="Chick box">
                <option value="Fly Tray">
                <option value="Poultry Plucker Rubber Finger">
                <option value="Egg tray">
                <option value="Laying nest">
                <option value="Egg Scale">
                <option value="Egg washer">
                <option value="Cages and coops">
                <option value="Dressing Machine">
                <option value="Egg water">
            </datalist>
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used">Used</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                case 'PoultryFeeds':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Chick Mash" class="form-control">
                </div>
                 <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of feed</label>
              <select name="type" class="form-control">
                <option value="">Select</option>
                <option value="Layers feeds">Layers Feeds</option>
                <option value="Broilers feeds">Broilers Feeds</option>
                <option value="Chicks feeds">Chick feeds</option>
              </select>
              <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                case 'AnimalFeeds':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Dairy Meals" class="form-control">
                </div>
                <div style="display:none;">
              <select name="type" class="form-control">
                <option value="">Select</option>
                <option value="Layers feeds">Layers Feeds</option>
                <option value="Broilers feeds">Broilers Feeds</option>
                <option value="Chicks feeds">Chick feeds</option>
              </select>
              </div>
              <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                case 'Agrochemicals':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Ticks control spray" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Category of Agrochemical</label>
            <input list="agrochemicalcategory" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="agrochemicalcategory">
              <option value="Herbicide">
              <option value="Pesticide">
              <option value="Insectcides">
               <option value="Fungicides">
               <option value="Algaecides">
               <option value="Rodenticides">
               <option value="Molluscicides">
               <option value="Nematicides"> 
            </datalist>
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="text" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                case 'Fertilizers':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Phosphoric fertilizer for sale" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Category of Agrochemical</label>
            <input list="agrochemicalcategory" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="agrochemicalcategory">
              <option value="Herbicide">
              <option value="Pesticide">
              <option value="Dewormers">
            </datalist>
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of the Fertilizer</label>
              <input type="text" name="name" placeholder="" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

              case 'seeds':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Onion Seeds" class="form-control">
                </div>
                  <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Category of Agrochemical</label>
            <input list="agrochemicalcategory" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="agrochemicalcategory">
              <option value="Herbicide">
              <option value="Pesticide">
              <option value="Dewormers">
            </datalist>
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of the Seeds</label>
              <input type="text" name="name" placeholder="eg.Duma 43" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
              <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
               <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Delivery Information</label>
                <textarea class="form-control" placeholder="Kindly describe about the process of delivery and Pricing for delivery"></textarea>
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                 case 'Younganimals':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Heifer" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Category of the Animal</label>
                 <input list="categoryoftheanimal" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="categoryoftheanimal">
              <option value="Bulls">
              <option value="Calves">
              <option value="Heifers">
                <option value="Chicks">
                <option value="Chicken">
                <option value="Ducks">
                <option value="Pegions">
                <option value="Kitten">
                <option value="Dogs">
                <option value="Goats">
                <option value="Pigs">
                <option value="Camel">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
                <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                 case 'Farmproduce':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="eg Ripe Tomatoes" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Category of the farm produce</label>
                 <input list="categoryofthefarmproduce" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="categoryofthefarmproduce">
              <option value="Vegetables">
              <option value="Maize">
              <option value="Kales">
                <option value="Tomatoes">
                <option value="Flowers">
                <option value="Beans">
                <option value="Carrots">
                <option value="Kitten">
                <option value="Dogs">
                <option value="Goats">
                <option value="Pigs">
                <option value="Camel">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
                <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;

                case 'otherfarm':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name of your Product</label>
            <input type="text" name="title" placeholder="" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Category of the farm produce</label>
                 <input list="categoryofthefarmproduce" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="categoryofthefarmproduce">
              <option value="Vegetables">
              <option value="Maize">
              <option value="Kales">
                <option value="Tomatoes">
                <option value="Flowers">
                <option value="Beans">
                <option value="Carrots">
                <option value="Kitten">
                <option value="Dogs">
                <option value="Goats">
                <option value="Pigs">
                <option value="Camel">
            </datalist> 
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control" placeholder="eg. Massey Furgussion">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model(Where applicable)</label>
                 <input type="text" name="model" class="form-control" placeholder="">
               </div>
               <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="condition">
                  <option value="">Select</option>
                  <option value="Brand New">Brand New</option>
                  <option value="Used in Kenya">Used</option>
                </select>
               </div>
               <div class="form-group" style="display: none;">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Actual Name</label>
            <input type="text" name="name" placeholder="eg Tixfix" class="form-control">
                </div>
                  <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What is used to control?</label>
              <input type="use" name="purpose" class="form-control" placeholder="eg For spraying ticks and fleas">    
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">What are they used to propangate?</label>
               <input type="text" name="propangation" class="form-control" placeholder="eg Maize"> 
              </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Manufacturer(company)</label>
               <input type="text" name="manufacturer" class="form-control"> 
              </div>
              <div class="form-group" style="display: none;">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Breed</label>
              <input type="text" name="breed" class="form-control">    
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Enter the name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';


                break;
                case 'Batteries':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="eg Lithium Battery">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                  <input type="text" name="model" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Type</label>
                 <select class="form-control" name="fueltype">
                  <option value="">Select</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Gasoline">Gasoline</option>
                  <option value="Propane">Propane</option> 
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Portability</label>
                 <select class="form-control" name="portability">
                   <option value="">Select</option>
                   <option value="Portable">Portable</option>
                   <option value="Permanent">Permanent</option>
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Capacity (Litres)</label>
                 <input type="number" name="fueltankcapacity" class="form-control" placeholder="eg 2000">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Consumption (Litres/hr)</label>
                 <input type="number" name="fuelconsumption" class="form-control" placeholder="eg 40L/hr">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Prime Power (kW)</label>
                 <input type="number" name="primepower" class="form-control">
                </div>
                <div class="form-group" style="display:none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Standby Power (kW)</label>
                 <input type="number" name="standbypower" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Voltage (Volts)</label>
                 <input type="number" name="outputvoltage" class="form-control" placeholder="eg 400 Volts">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Frequency (Hz)</label>
                 <input type="number" name="outputfrequency" class="form-control" placeholder="eg 50 Hz">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Jiko</label>
                 <select class="form-control" name="jikotype">
                   <option value="">Select</option>
                   <option value="Jikokoa">Jikokoa</option>
                   <option value="Envirofit Jiko">Envirofit Jiko</option>
                   <option value="Ordinary Energy Saving Jiko">Ordinary Energy Saving Jiko</option>
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight (Kgs)</label>
                 <input type="text" name="gasweight" class="form-control" placeholder="eg 6.2 Kgs"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <input list="materialused" name="materialused" id="browser" class="form-control" placeholder="">
            <datalist id="materialused">
              <option value="Lead">
              <option value="Lithium ion">
              <option value="Nickel Cadmium">
            </datalist>   
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Voltage</label>
                  <input type="number" name="Voltage" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight(kg)</label>
                  <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Capacity(Mah)</label>
                  <input type="number" name="capacity" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum powerpoint voltage</label>
                  <input type="text" name="maximumpwv" class="form-control" placeholder="eg 28.8">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum power current</label>
                  <input type="text" name="maximumpwc" class="form-control" placeholder="eg 7.33 A">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'Solarpanels':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <input list="materialused" name="materialused" id="browser" class="form-control" placeholder="">
            <datalist id="materialused">
              <option value="Lead">
              <option value="Lithium ion">
              <option value="Nickel Cadmium">
            </datalist>   
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                  <input type="text" name="model" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Type</label>
                 <select class="form-control" name="fueltype">
                  <option value="">Select</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Gasoline">Gasoline</option>
                  <option value="Propane">Propane</option> 
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Portability</label>
                 <select class="form-control" name="portability">
                   <option value="">Select</option>
                   <option value="Portable">Portable</option>
                   <option value="Permanent">Permanent</option>
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Capacity (Litres)</label>
                 <input type="number" name="fueltankcapacity" class="form-control" placeholder="eg 2000">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Consumption (Litres/hr)</label>
                 <input type="number" name="fuelconsumption" class="form-control" placeholder="eg 40L/hr">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Prime Power (kW)</label>
                 <input type="number" name="primepower" class="form-control">
                </div>
                <div class="form-group" style="display:none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Standby Power (kW)</label>
                 <input type="number" name="standbypower" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Voltage (Volts)</label>
                 <input type="number" name="outputvoltage" class="form-control" placeholder="eg 400 Volts">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Frequency (Hz)</label>
                 <input type="number" name="outputfrequency" class="form-control" placeholder="eg 50 Hz">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Jiko</label>
                 <select class="form-control" name="jikotype">
                   <option value="">Select</option>
                   <option value="Jikokoa">Jikokoa</option>
                   <option value="Envirofit Jiko">Envirofit Jiko</option>
                   <option value="Ordinary Energy Saving Jiko">Ordinary Energy Saving Jiko</option>
                 </select> 
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight (Kgs)</label>
                 <input type="text" name="gasweight" class="form-control" placeholder="eg 6.2 Kgs"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Number of cells</label>
                <input type="number" name="numberofcells" class="form-control">   
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Open circuit Voltage</label>
                  <input type="text" name="Voltage" class="form-control" placeholder="eg 31.2">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight(kg)</label>
                  <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Capacity(Mah)</label>
                  <input type="number" name="capacity" class="form-control">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum powerpoint voltage</label>
                  <input type="text" name="maximumpwv" class="form-control" placeholder="eg 28.8">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum power current</label>
                  <input type="text" name="maximumpwc" class="form-control" placeholder="eg 7.33 A">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'Gas':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="eg Gas cylinder for sale">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="eg K-gas">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <input list="materialused" name="materialused" id="browser" class="form-control" placeholder="">
            <datalist id="materialused">
              <option value="Lead">
              <option value="Lithium ion">
              <option value="Nickel Cadmium">
            </datalist>   
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Voltage</label>
                  <input type="number" name="Voltage" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight(kg)</label>
                  <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Capacity(Mah)</label>
                  <input type="number" name="capacity" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum powerpoint voltage</label>
                  <input type="text" name="maximumpwv" class="form-control" placeholder="eg 28.8">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum power current</label>
                  <input type="text" name="maximumpwc" class="form-control" placeholder="eg 7.33 A">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                  <input type="text" name="model" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Type</label>
                 <select class="form-control" name="fueltype">
                  <option value="">Select</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Gasoline">Gasoline</option>
                  <option value="Propane">Propane</option> 
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Portability</label>
                 <select class="form-control" name="portability">
                   <option value="">Select</option>
                   <option value="Portable">Portable</option>
                   <option value="Permanent">Permanent</option>
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Capacity (Litres)</label>
                 <input type="number" name="fueltankcapacity" class="form-control" placeholder="eg 2000">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Consumption (Litres/hr)</label>
                 <input type="number" name="fuelconsumption" class="form-control" placeholder="eg 40L/hr">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Prime Power (kW)</label>
                 <input type="number" name="primepower" class="form-control">
                </div>
                <div class="form-group" style="display:none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Standby Power (kW)</label>
                 <input type="number" name="standbypower" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Voltage (Volts)</label>
                 <input type="number" name="outputvoltage" class="form-control" placeholder="eg 400 Volts">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Frequency (Hz)</label>
                 <input type="number" name="outputfrequency" class="form-control" placeholder="eg 50 Hz">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Jiko</label>
                 <select class="form-control" name="jikotype">
                   <option value="">Select</option>
                   <option value="Jikokoa">Jikokoa</option>
                   <option value="Envirofit Jiko">Envirofit Jiko</option>
                   <option value="Ordinary Energy Saving Jiko">Ordinary Energy Saving Jiko</option>
                 </select> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight (Kgs)</label>
                 <input type="text" name="gasweight" class="form-control" placeholder="eg 6.2 Kgs"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                 case 'Generators':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="eg Power generator for farm">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="eg Himoinsa">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <input list="materialused" name="materialused" id="browser" class="form-control" placeholder="">
            <datalist id="materialused">
              <option value="Lead">
              <option value="Lithium ion">
              <option value="Nickel Cadmium">
            </datalist>   
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Voltage</label>
                  <input type="number" name="Voltage" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight(kg)</label>
                  <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Capacity(Mah)</label>
                  <input type="number" name="capacity" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum powerpoint voltage</label>
                  <input type="text" name="maximumpwv" class="form-control" placeholder="eg 28.8">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum power current</label>
                  <input type="text" name="maximumpwc" class="form-control" placeholder="eg 7.33 A">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                  <input type="text" name="model" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight (Kgs)</label>
                 <input type="text" name="gasweight" class="form-control" placeholder="eg 6.2 Kgs"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Type</label>
                 <select class="form-control" name="fueltype">
                  <option value="">Select</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Gasoline">Gasoline</option>
                  <option value="Propane">Propane</option> 
                 </select> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Portability</label>
                 <select class="form-control" name="portability">
                   <option value="">Select</option>
                   <option value="Portable">Portable</option>
                   <option value="Permanent">Permanent</option>
                 </select> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Capacity (Litres)</label>
                 <input type="number" name="fueltankcapacity" class="form-control" placeholder="eg 2000">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Consumption (Litres/hr)</label>
                 <input type="number" name="fuelconsumption" class="form-control" placeholder="eg 40L/hr">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Prime Power (kW)</label>
                 <input type="number" name="primepower" class="form-control">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Standby Power (kW)</label>
                 <input type="number" name="standbypower" class="form-control">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Voltage (Volts)</label>
                 <input type="number" name="outputvoltage" class="form-control" placeholder="eg 400 Volts">
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Frequency (Hz)</label>
                 <input type="number" name="outputfrequency" class="form-control" placeholder="eg 50 Hz">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Jiko</label>
                 <select class="form-control" name="jikotype">
                   <option value="">Select</option>
                   <option value="Jikokoa">Jikokoa</option>
                   <option value="Envirofit Jiko">Envirofit Jiko</option>
                   <option value="Ordinary Energy Saving Jiko">Ordinary Energy Saving Jiko</option>
                 </select> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'Jikos':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="eg Charcoal Jiko for sale">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                  <input type="text" name="brand" class="form-control" placeholder="eg Himoinsa">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <input list="materialused" name="materialused" id="browser" class="form-control" placeholder="">
            <datalist id="materialused">
              <option value="Lead">
              <option value="Lithium ion">
              <option value="Nickel Cadmium">
            </datalist>   
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Voltage</label>
                  <input type="number" name="Voltage" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight(kg)</label>
                  <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Capacity(Mah)</label>
                  <input type="number" name="capacity" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum powerpoint voltage</label>
                  <input type="text" name="maximumpwv" class="form-control" placeholder="eg 28.8">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum power current</label>
                  <input type="text" name="maximumpwc" class="form-control" placeholder="eg 7.33 A">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                  <input type="text" name="model" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Type</label>
                 <select class="form-control" name="fueltype">
                  <option value="">Select</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Gasoline">Gasoline</option>
                  <option value="Propane">Propane</option> 
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Portability</label>
                 <select class="form-control" name="portability">
                   <option value="">Select</option>
                   <option value="Portable">Portable</option>
                   <option value="Permanent">Permanent</option>
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Capacity (Litres)</label>
                 <input type="number" name="fueltankcapacity" class="form-control" placeholder="eg 2000">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Consumption (Litres/hr)</label>
                 <input type="number" name="fuelconsumption" class="form-control" placeholder="eg 40L/hr">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Prime Power (kW)</label>
                 <input type="number" name="primepower" class="form-control">
                </div>
                <div class="form-group" style="display:none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Standby Power (kW)</label>
                 <input type="number" name="standbypower" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Voltage (Volts)</label>
                 <input type="number" name="outputvoltage" class="form-control" placeholder="eg 400 Volts">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Frequency (Hz)</label>
                 <input type="number" name="outputfrequency" class="form-control" placeholder="eg 50 Hz">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight (Kgs)</label>
                 <input type="text" name="gasweight" class="form-control" placeholder="eg 6.2 Kgs"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Jiko</label>
                 <select class="form-control" name="jikotype">
                   <option value="">Select</option>
                   <option value="Jikokoa">Jikokoa</option>
                   <option value="Envirofit Jiko">Envirofit Jiko</option>
                   <option value="Ordinary Energy Saving Jiko">Ordinary Energy Saving Jiko</option>
                 </select> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'otherenergy':
                echo '<div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="eg Lithium Battery">
                </div>
                 <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand (if applicable)</label>
                  <input type="text" name="brand" class="form-control" placeholder="">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <input list="materialused" name="materialused" id="browser" class="form-control" placeholder="">
            <datalist id="materialused">
              <option value="Lead">
              <option value="Lithium ion">
              <option value="Nickel Cadmium">
            </datalist>   
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Voltage</label>
                  <input type="number" name="Voltage" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight(kg)</label>
                  <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Capacity(Mah)</label>
                  <input type="number" name="capacity" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum powerpoint voltage</label>
                  <input type="text" name="maximumpwv" class="form-control" placeholder="eg 28.8">
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Maximum power current</label>
                  <input type="text" name="maximumpwc" class="form-control" placeholder="eg 7.33 A">
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model (if applicable)</label>
                  <input type="text" name="model" class="form-control">
                </div>
                 <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Type</label>
                 <select class="form-control" name="fueltype">
                  <option value="">Select</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Gasoline">Gasoline</option>
                  <option value="Propane">Propane</option> 
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Portability</label>
                 <select class="form-control" name="portability">
                   <option value="">Select</option>
                   <option value="Portable">Portable</option>
                   <option value="Permanent">Permanent</option>
                 </select> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Capacity (Litres)</label>
                 <input type="number" name="fueltankcapacity" class="form-control" placeholder="eg 2000">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Fuel Tank Consumption (Litres/hr)</label>
                 <input type="number" name="fuelconsumption" class="form-control" placeholder="eg 40L/hr">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Prime Power (kW)</label>
                 <input type="number" name="primepower" class="form-control">
                </div>
                <div class="form-group" style="display:none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Standby Power (kW)</label>
                 <input type="number" name="standbypower" class="form-control">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Voltage (Volts)</label>
                 <input type="number" name="outputvoltage" class="form-control" placeholder="eg 400 Volts">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Output Frequency (Hz)</label>
                 <input type="number" name="outputfrequency" class="form-control" placeholder="eg 50 Hz">
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Weight (Kgs)</label>
                 <input type="text" name="gasweight" class="form-control" placeholder="eg 6.2 Kgs"> 
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type of Jiko</label>
                 <select class="form-control" name="jikotype">
                   <option value="">Select</option>
                   <option value="Jikokoa">Jikokoa</option>
                   <option value="Envirofit Jiko">Envirofit Jiko</option>
                   <option value="Ordinary Energy Saving Jiko">Ordinary Energy Saving Jiko</option>
                 </select> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name</label>
                 <input type="text" name="name" class="form-control"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;


                case 'Furnitures':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="name" class="form-control"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furniture Type</label>
                   <input list="furnituretype" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="furnituretype">
              <option value="Sofas">
              <option value="Tables">
              <option value="Chairs">
                <option value="Beds">
                <option value="Desks">
                <option value="Dining Chairs">
                <option value="Dining Tables">
                <option value="Garden Fork">
                <option value="Cupboards">
                <option value="Stools">
                <option value="Ottomans">
                <option value="Benches">
                <option value="Bookcases">
            </datalist>  
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Dimensions (Where Applicable)</label>
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Length</h4>
                 <input type="number" name="length" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Width</h4>
                 <input type="number" name="width" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Height</h4> 
                 <input type="number" name="height" class="form-control mb-2">  
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <select name="material" class="form-control">
                  <option value="">Select</option>
                  <option value="Wood">Wood</option>
                  <option value="Metal">Metal</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Glass">Glass</option>
                </select>  
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
               <input type="text" name="brand" class="form-control">  
               </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
               <input type="text" name="model" class="form-control">  
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'Beddings':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="name" class="form-control"> 
                </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Bedding Type</label>
                   <input list="beddingtype" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="beddingtype">
              <option value="Bed Sheets">
              <option value="Blanket">
              <option value="Duvet">
                <option value="Duvet cover">
                <option value="Mattress">
                <option value="Cormfoter">
                <option value="Pillow">
                <option value="Pillow Case">
                <option value="Quils">
            </datalist>  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Dimensions (Where Applicable)</label>
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Length</h4>
                 <input type="number" name="length" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Width</h4>
                 <input type="number" name="width" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Height</h4> 
                 <input type="number" name="height" class="form-control mb-2">  
                </div>
                <div class="form-group" style="display:none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <select name="material" class="form-control">
                  <option value="">Select</option>
                  <option value="Wood">Wood</option>
                  <option value="Metal">Metal</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Glass">Glass</option>
                </select>  
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
               <input type="text" name="brand" class="form-control">  
               </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
               <input type="text" name="model" class="form-control">  
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'Fridges':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="name" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Furniture Type</label>
                   <input list="furnituretype" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="furnituretype">
              <option value="Sofas">
              <option value="Tables">
              <option value="Chairs">
                <option value="Beds">
                <option value="Desks">
                <option value="Dining Chairs">
                <option value="Dining Tables">
                <option value="Garden Fork">
                <option value="Cupboards">
                <option value="Stools">
                <option value="Ottomans">
                <option value="Benches">
                <option value="Bookcases">
            </datalist>  
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Dimensions (Where Applicable)</label>
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Length</h4>
                 <input type="number" name="length" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Width</h4>
                 <input type="number" name="width" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Height</h4> 
                 <input type="number" name="height" class="form-control mb-2">  
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <select name="material" class="form-control">
                  <option value="">Select</option>
                  <option value="Wood">Wood</option>
                  <option value="Metal">Metal</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Glass">Glass</option>
                </select>  
                </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
               <input type="text" name="brand" class="form-control">  
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
               <input type="text" name="model" class="form-control">  
               </div>
                <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'Utensils':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="name" class="form-control"> 
                </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                <input list="utensiltype" name="type" id="browser" class="form-control" placeholder="">
            <datalist id="utensiltype">
              <option value="Spoons">
              <option value="Cups">
              <option value="Thermo flasks">
                <option value="Mugs">
                <option value="Jugs">
                <option value="Knifes">
                <option value="Forks">
                <option value="Sufurias">
                <option value="Pots">
            </datalist> 
               </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Dimensions (Where Applicable)</label>
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Length</h4>
                 <input type="number" name="length" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Width</h4>
                 <input type="number" name="width" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Height</h4> 
                 <input type="number" name="height" class="form-control mb-2">  
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <select name="material" class="form-control">
                  <option value="">Select</option>
                  <option value="Wood">Wood</option>
                  <option value="Metal">Metal</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Glass">Glass</option>
                </select>  
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
               <input type="text" name="brand" class="form-control">  
               </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
               <input type="text" name="model" class="form-control">  
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;
                case 'otherhousehold':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="name" class="form-control"> 
                </div>
                <div class="form-group" style="display: none;">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Dimensions (Where Applicable)</label>
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Length</h4>
                 <input type="number" name="length" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Width</h4>
                 <input type="number" name="width" class="form-control mb-2">
                 <h4 style="font-size: 13px;font-weight: bold;color: green;">Height</h4> 
                 <input type="number" name="height" class="form-control mb-2">  
                </div>
                <div class="form-group" style="display: none;">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Material</label>
                <select name="material" class="form-control">
                  <option value="">Select</option>
                  <option value="Wood">Wood</option>
                  <option value="Metal">Metal</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Glass">Glass</option>
                </select>  
                </div>
                <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
               <input type="text" name="brand" class="form-control">  
               </div>
               <div class="form-group" style="display: none;">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
               <input type="text" name="model" class="form-control">  
               </div>
               <div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                <select class="form-control" name="status">
                  <option value="">Select</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                </select> 
               </div>
               <div class="form-group">
               <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Do you offer Delivery?</label><br>
               <input type="radio" name="delivery" value="Yes"> Yes
               <input type="radio" name="delivery" value="NO"> No 
              </div>
              <div class="form-group">
              <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Kindly brief us about delivery (i.e Which part of kenya do you deliver and the price of Delivery)</label>
              <textarea class="form-control" name="Deliveryinformation" placeholder="Explain about Delivery"></textarea>  
              </div>';
                break;


                case 'construction':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="title" class="form-control"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                  <input list="typeofmachine" name="typeofmachine" id="browser" class="form-control" placeholder="eg Bulldozer">
            <datalist id="typeofmachine">
              <option value="Concrete Mixers">
              <option value="Boom lift">
              <option value="Scissor Lift">
              <option value="Brick Making Machines">
              <option value="vibrators">
              <option value="Bulldozers">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                 <input type="text" name="model" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Is it for sale or hire?</label>
                 <select name="saleHire" class="form-control">
                   <option value="">Select</option>
                   <option value="Sale">Sale</option>
                   <option value="Hire">Hire</option>
                 </select> 
                </div>
                 <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                 <select name="condition" class="form-control">
                   <option value="">Select</option>
                   <option value="Brand New">Brand New</option>
                   <option value="Used">Used</option>
                 </select> 
                </div>
                ';
                break;
                case 'Industrial':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="title" class="form-control"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                  <input list="typeofmachine" name="typeofmachine" id="browser" class="form-control" placeholder="eg Wheat Millers">
            <datalist id="typeofmachine">
              <option value="Water Purification Plants">
              <option value="Air Compressors">
              <option value="Rice Milling Machines">
              <option value="Brick Making Machines">
              <option value="Flour Milling Machines">
              <option value="Bag Making Machines">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                 <input type="text" name="model" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Is it for sale or hire?</label>
                 <select name="saleHire" class="form-control">
                   <option value="">Select</option>
                   <option value="Sale">Sale</option>
                   <option value="Hire">Hire</option>
                 </select> 
                </div>
                 <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                 <select name="condition" class="form-control">
                   <option value="">Select</option>
                   <option value="Brand New">Brand New</option>
                   <option value="Used">Used</option>
                 </select> 
                </div>
                ';
                break;
                case 'mining':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="title" class="form-control"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                  <input list="typeofmachine" name="typeofmachine" id="browser" class="form-control" placeholder="eg Wheat Millers">
            <datalist id="typeofmachine">
              <option value="Caterpilars">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                 <input type="text" name="model" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Is it for sale or hire?</label>
                 <select name="saleHire" class="form-control">
                   <option value="">Select</option>
                   <option value="Sale">Sale</option>
                   <option value="Hire">Hire</option>
                 </select> 
                </div>
                 <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                 <select name="condition" class="form-control">
                   <option value="">Select</option>
                   <option value="Brand New">Brand New</option>
                   <option value="Used">Used</option>
                 </select> 
                </div>
                ';
                break;
                case 'Waterdrilling':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="title" class="form-control"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                  <input list="typeofmachine" name="typeofmachine" id="browser" class="form-control" placeholder="eg Wheat Millers">
            <datalist id="typeofmachine">
              <option value="Caterpilars">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                 <input type="text" name="model" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Is it for sale or hire?</label>
                 <select name="saleHire" class="form-control">
                   <option value="">Select</option>
                   <option value="Sale">Sale</option>
                   <option value="Hire">Hire</option>
                 </select> 
                </div>
                 <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                 <select name="condition" class="form-control">
                   <option value="">Select</option>
                   <option value="Brand New">Brand New</option>
                   <option value="Used">Used</option>
                 </select> 
                </div>
                ';
                break;
                case 'Mining':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="title" class="form-control"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                  <input list="typeofmachine" name="typeofmachine" id="browser" class="form-control" placeholder="eg Wheat Millers">
            <datalist id="typeofmachine">
              <option value="Caterpilars">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                 <input type="text" name="model" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Is it for sale or hire?</label>
                 <select name="saleHire" class="form-control">
                   <option value="">Select</option>
                   <option value="Sale">Sale</option>
                   <option value="Hire">Hire</option>
                 </select> 
                </div>
                 <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                 <select name="condition" class="form-control">
                   <option value="">Select</option>
                   <option value="Brand New">Brand New</option>
                   <option value="Used">Used</option>
                 </select> 
                </div>
                ';
                break;
                case 'othermachines':
                echo '<div class="form-group">
                <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Title</label>
                 <input type="text" name="title" class="form-control"> 
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Name</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Type</label>
                  <input list="typeofmachine" name="typeofmachine" id="browser" class="form-control" placeholder="eg Wheat Millers">
            <datalist id="typeofmachine">
              <option value="Caterpilars">
            </datalist>
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Brand</label>
                 <input type="text" name="brand" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Model</label>
                 <input type="text" name="model" class="form-control"> 
                </div>
                <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Is it for sale or hire?</label>
                 <select name="saleHire" class="form-control">
                   <option value="">Select</option>
                   <option value="Sale">Sale</option>
                   <option value="Hire">Hire</option>
                 </select> 
                </div>
                 <div class="form-group">
                 <label style="font-size: 15px;font-weight: bold;color: #ff0066;">Condition</label>
                 <select name="condition" class="form-control">
                   <option value="">Select</option>
                   <option value="Brand New">Brand New</option>
                   <option value="Used">Used</option>
                 </select> 
                </div>
                ';
                break;
                //Vehicles ajax Handle End //

  default:
    echo "";
    break;
}
}






//handle all electronics
if (isset($_POST['action']) && $_POST['action'] == 'fetchelectronics') {
  $output = '';
  $electronics = $shop->fetchallelectronics();
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];
    $type = ucfirst($row['type']);
    switch ($type) {
      case ($type === 'Phones'):

      if ($condition === 'Used') {
        if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <img src="images/verified-circle-sign-green-tick-260nw-1893209335 (2).jpg" style="float:left;width:50px;height: 50px;" class="img-fluid">
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
 <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
  <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
  <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }  

        break;
      case ($type === 'Laptops'):
      if ($condition === 'Used') {
        if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
  <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
      break;
         case ($type === 'Desktops'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
 <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;
      case ($type === 'Televisions'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;
      case ($type === 'Printers'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;
            case ($type === 'Audio'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
  <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;
                  case ($type === 'Gaming'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
 <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;
                        case ($type === 'Camera'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
 <p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
      break;
            case ($type === 'Projector'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
     <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'"style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;    
      case ($type === 'ComputerAccessories'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
     <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'"style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;    
            case ($type === 'PhoneAccessories'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
     <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'"style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;
      case ($type === 'other'):
            if ($condition === 'Used') {
                 if ($verified !=0) {
                         echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
        } else {
          
                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
     <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'"style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
        }
        
      } else if($condition === 'Refurbished'){
        if ($verified != 0) {
                                echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
        } else {
                           echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
        }
        
      }else if($condition === 'New'){
          if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
<p style=""><i class="fa fa-map-marker" style="color: black;"></i>&nbsp;<span style="color: red;">'.$row['County'].'</span></p>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }
      }
         
      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//handle fetch phones ajax request 
if (isset($_POST['action']) && $_POST['action'] == 'fetchphones') {
	$output = '';
	$electronics = $shop->fetchelectronics('Phones');
	if ($electronics) {
		foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="mobile_phone.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;

      default:
        # code...
        break;
        }
  }  
	}else{
		echo '<h3 style="text-align:center;color:green;">There are no Mobile Phones currently</h3>';
	} 

} 

//handle fetch laptops ajax request 
if (isset($_POST['action']) && $_POST['action'] == 'fetchlaptops') {
  $output = '';
  $electronics = $shop->fetchelectronics('Laptops');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="laptop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

} 
  
//fetchdesktops ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchdesktops') {
  $output = '';
  $electronics = $shop->fetchelectronics('Desktops');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="desktop.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch tvs ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchtvs') {
  $output = '';
  $electronics = $shop->fetchelectronics('Televisions');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tv.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//Fetch tablets ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchtablets') {
  $output = '';
  $electronics = $shop->fetchelectronics('Tablets');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tablet.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="tablet.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['NAME'].'</h6>
        <a href="tablet.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tablet.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tablet.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="tablet.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//Fetch Printers ajax Handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchprinters') {
  $output = '';
  $electronics = $shop->fetchelectronics('Printers');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="printer.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch audio and home theatres
if (isset($_POST['action']) && $_POST['action'] == 'fetchhometheatres') {
  $output = '';
  $electronics = $shop->fetchelectronics('Audio');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="hometheater.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch gaming accessories ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchgamings') {
  $output = '';
  $electronics = $shop->fetchelectronics('Gaming');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="gaming.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch cameras ajax request
if (isset($_POST['action']) && $_POST['action'] == 'fetchcameras') {
  $output = '';
  $electronics = $shop->fetchelectronics('Camera');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="camera.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch projectors ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchprojectors') {
  $output = '';
  $electronics = $shop->fetchelectronics('Projector');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="projector.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch Computer Accessories ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchcompassec') {
  $output = '';
  $electronics = $shop->fetchelectronics('ComputerAccessories');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="compaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch phone Accessories ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchphoneassec') {
  $output = '';
  $electronics = $shop->fetchelectronics('PhoneAccessories');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="phoneaccsse.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}
//fetch more electronics ajax handle
if (isset($_POST['action']) && $_POST['action'] == 'fetchmoreelectronics') {
  $output = '';
  $electronics = $shop->fetchelectronics('other');
  if ($electronics) {
    foreach ($electronics as $row) {
    $condition = ucfirst($row['status']);
    $verified = $row['verified'];

    switch ($condition) {
      case ($condition === 'Used'):

      if($verified !=0){

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified </h6>
      </div>
      
      </div>
    ';
      }else {

                 echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0080;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ff0080;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    ';
      }

      
        break;
      case ($condition === 'Refurbished'):

      if($verified !=0){
                          echo '
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    '; 
  } else{
                    echo '
  <div class="add" id="'.$row['SN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="more.php?sn='.$row['SN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#ffff00;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
    
      </div>
    '; 
  }
   
      break;
         case ($condition === 'New'):

         if($verified !=0){
                      echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      <div style="margin-bottom: 5px;">
      <img src="Profiles/'.$row['Profile'].'" style="width:30px;height:30px;float:right;" class="img-fluid">
      <h6 style="color:#009999;float:left;">&nbsp;Verified</h6>
      </div>
      
      </div>
    ';
         }else {
                            echo '
  
  <div class="add" id="'.$row['PSN'].'">     
      <h6 class="name">'.$row['name'].'</h6>
        <a href="more.php?sn='.$row['PSN'].'" class="viewitem" target="_self" ><img src="products/'.$row['image'].'" style="width:100%;height:auto;"></a>
    <p style="color:red;font-weight:bold;">Ksh. '.$row['price'].'/=</p>
    <h6 style="color:#ff0066;"><a href="">'.$row['ShopName'].'</a></h6>
      <h6 style="background-color:#00e600;display:flex;justify-content:center;align-items:center;border-radius:15px;">'.$row['status'].'</h6>
      
      </div>
    '; 
         }

      break;

      default:
        # code...
        break;
        }
  }  
  }else{
    echo '<h3 style="text-align:center;color:green;">There are no Electronics currently</h3>';
  } 

}


//fetch featured adds ajax handle

if (isset($_POST['action']) && $_POST['action'] == 'fetchfeaturedadds') {
	$output = '';
	$feturedadds = $shop->fetchfeaturedadds();
	if ($feturedadds) {
		foreach ($feturedadds as $row) {
	echo '<div class="add">
  <div class ="name">        
      <h6>'.$row['productname'].'</h6>
        <a href="single.php?id='.$row['SN'].'" class="viewitem" target="_top" id="'.$row['SN'].'"><img src="products/'.$row['ProductImages'].'"  class="img-fluid"></a
   
    <p style="color:#008000;font-weight:bolder;">'.$row['Price'].'/=</p>
  </div></div>';
}
	}else{
		echo '';
	} 

}
//paswsword reset ajax
if (isset($_POST['action']) && $_POST['action'] == 'forgot') {
  $email = $shop->test_input($_POST['forgotemail']);
  //$phone = $shop->test_input($_POST['tel']);

  $shopfound_found = $shop->shop_exist($email);

  if ($shopfound_found != null) {
     $token = uniqid();
     $token = str_shuffle($token);
     $shop->reset_password($token,$email);
      try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = "buysell914@gmail.com";
        $mail->Password = "Buysell1998";
        //$mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom("buysell914@gmail.com");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Reset Password';
        $mail->Body = '<h3>Click the link below to reset your password.<br><a href="http://172.16.121.185:80/Class/reset-pass.php?email='.$email.'&token='.$token.'">Click to reset password</a><br>Regards<br>Admin BuySell.</h3>';
        //$mail->SMTPDebug = 4;
        $mail->send();
        echo 'We have send you a email reset link,click to reset your password.';
      }
      catch (Exception $e){
        echo 'Sorry,Something went wrong.Please try again Later.'.$e->errorMessage();
      }
      
  }
  else{
    echo 'Sorry,there is no account with such an email registered in our database';
  }
}
//pagination ajax handle
if (isset($_POST['last_id'])) {
        $lastitem = $_POST['last_id'];
        //echo $lastitem;
 // $electronics = $shop->fetchelectronics();
        $nextpage = $shop->paginate($lastitem);
        if ($nextpage) {
    foreach ($nextpage as $row) {
  echo '
  <div class="add" id="'.$row['SN'].'">     
      <h6 class="name">'.$row['productname'].'</h6>
        <a href="single.php?sn='.$row['SN'].'" class="viewitem" target="_self" ><img src="products/'.$row['ProductImages'].'" style="width:100%;height:auto;"></a>
    <p style="color:#008000;font-weight:bolder;">'.$row['Price'].'/=</p></div>

    ';
}
  }else{
    echo '<h1>No more items</h1>';
  }
       }  
 //sort ajax handle
       if (isset($_POST['sortselect'])) {
        $sortdata = $_POST['sortselect'];
        if ($sortdata == 'dateasc') {
          $electronics = $shop->fetchelectronicsasc();
          foreach ($electronics as $row) {
            echo '
  <div class="add">     
      <h6 class="name">'.$row['productname'].'</h6>
        <a href="single.php?id='.$row['SN'].'" class="viewitem" target="_self" id="'.$row['SN'].'"><img src="products/'.$row['ProductImages'].'" style="width:100%;height:auto;"></a>
    <p style="color:#008000;font-weight:bolder;">'.$row['Price'].'/=</p></div>

    ';
          }
        }else if($sortdata == 'priceasc')
        {
          $electronics = $shop->electronicspriceasc();
          foreach ($electronics as $row) {
                    echo '
  <div class="add">     
      <h6 class="name">'.$row['productname'].'</h6>
        <a href="single.php?id='.$row['SN'].'" class="viewitem" target="_self" id="'.$row['SN'].'"><img src="products/'.$row['ProductImages'].'" style="width:100%;height:auto;"></a>
    <p style="color:#008000;font-weight:bolder;">'.$row['Price'].'/=</p></div>

    ';
          }
        }else if ($sortdata == 'pricedesc') 
        {
             $electronics = $shop->electronicspridesc();
          foreach ($electronics as $row) {
                    echo '
  <div class="add">     
      <h6 class="name">'.$row['productname'].'</h6>
        <a href="single.php?id='.$row['SN'].'" class="viewitem" target="_self" id="'.$row['SN'].'"><img src="products/'.$row['ProductImages'].'" style="width:100%;height:auto;"></a>
    <p style="color:#008000;font-weight:bolder;">'.$row['Price'].'/=</p></div>

    ';
        }
        
       } else{
         $electronics = $shop->fetchelectronics();
          foreach ($electronics as $row) {
  echo '
  <div class="add">     
      <h6 class="name">'.$row['productname'].'</h6>
        <a href="single.php?id='.$row['SN'].'" class="viewitem" target="_self" id="'.$row['SN'].'"><img src="products/'.$row['ProductImages'].'" style="width:100%;height:auto;"></a>
    <p style="color:#008000;font-weight:bolder;">'.$row['Price'].'/=</p></div>

    ';
}
       }
       } 
 ?>