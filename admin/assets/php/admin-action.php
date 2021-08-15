 <?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail\src\Exception.php';
require 'mail\src\PHPMailer.php';
require 'mail\src\SMTP.php';

$mail = new PHPMailer(TRUE);

require_once 'admin-db.php';
$admin = new Admin();

//handle Admin Login Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'adminLogin') {
	$username = $admin->test_input($_POST['username']);
	$password = $admin->test_input($_POST['password']);

	$hpass = sha1($password);

	$loggedAdmin = $admin->admin_login($username,$hpass);

	if ($loggedAdmin != null) {
		echo "successlogin";
		$_SESSION['username'] = $username;
	} else {
		echo $admin->showMessage('danger','Username not found');
	}
	
}
//Handle Fetch All Users Ajax Request
if (isset($_POST['action']) && $_POST['action'] == 'fetchshops') {
	$output = '';
	$data = $admin->web_shops(0);

	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center">
		<thead>
			<tr>
				<th>#</th>
				<th>Profile</th>
				<th>Shop Owner</th>
				<th>Shop Email</th>
				<th>Phonenumber</th>
				<th>County</th>
				<th>Town</th>
				<th>Shop Name</th>
				<th>Opening Time</th>
				<th>Closing Time</th>
				<th>Description</th>
				<th>Date Created</th>
				<th>Created By</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {
			$output .= '	
			<tr>
		<td>'.$row['SSN'].'</td>
		<td><img src="../Profiles/'.$row['Profile'].'" class="img-fluid  rounded-circle"></td>
		<td>'.$row['Owner'].'</td>
		<td>'.$row['OwnerEmail'].'</td>
		<td>'.$row['Phonenumber'].'</td>
		<td>'.$row['County'].'</td>
		<td>'.$row['Town'].'</td>
		<td>'.$row['ShopName'].'</td>
		<td>'.$row['Opening'].'</td>
		<td>'.$row['Closing'].'</td>
		<td>'.$row['Description'].'</td>
		<td>'.$row['DateCreated'].'</td>
		<td>'.$row['type'].'</td>
		<td>
			<a href="#" id="'.$row['SSN'].'" title="View Details" class="text-primary UserDetailsIcon" data-toggle="modal" data-target="#ShowShopDetails"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;


			<a href="#" id="'.$row['SSN'].'" title="Delete Shop" class="text-danger deleteUserIcon"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
		</td>
		</tr>';
		}
		$output .= '</tbody>
		</table>'; 
		echo $output; 
	}
	else{
		echo '<h3 class="text-center text-secondary">:(No any Shop Registered yet!)</h3>';
	}
}
//Handle feedbacks ajax
if (isset($_POST['action']) && $_POST['action'] == 'fetchfeedbacks') {
	$output = '';
	$feedback = $admin->fetchFeedbacks();

	if ($feedback) {
		$output .= '<table class="table table-striped table-bordered text-center">
		<thead>
			<tr>
				<th>FID</th>
				<th>Shop Number</th>
				<th>Shop Name</th>
				<th>Subject</th>
				<th>Message</th>
				<th>Send On</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($feedback as $row) {
			$output .= '	
			<tr>
		<td>'.$row['id'].'</td>
		<td>'.$row['sid'].'</td>
		<td>'.$row['ShopName'].'</td>
		<td>'.$row['subject'].'</td>
		<td>'.$row['feedback'].'</td>
		<td>'.$row['created_at'].'</td>
		<td>'.$row['OwnerEmail'].'</td>
		
		<td>
			<a href="#" fid="'.$row['id'].'" id="'.$row['sid'].'" title="Reply" class="text-primary replyFeedbackIcon" data-toggle="modal" data-target="#showReplyModal"><i class="fas fa-reply fa-lg"></i></a>&nbsp;&nbsp;
		</td>
		</tr>';
		}
		$output .= '</tbody>
		</table>'; 
		echo $output; 
	}
	else{
		echo '<h3 class="text-center text-secondary">:(No Message Send yet!)</h3>';
	}
}
 //Handle Reply Message ajax
  if (isset($_POST['message'])) {
     $fid = $_POST['sid'];
     $message = $admin->test_input($_POST['message']);
     $sid = $_POST['fid'];
     $admin->replyMessage($sid,$message);
     $admin->feedReplied($fid);
     
   }
   //Handle display Users In Detail Request
   if (isset($_POST['details_id'])) {
    	$id = $_POST['details_id'];
    	$data = $admin->fetchwebshopById($id);
    	echo json_encode($data);
    } 
    //Handle Delete A user Ajax Request
    if (isset($_POST['del_id'])) {
    	$id = $_POST['del_id'];
    	$delcheck = $admin->shopAction($id, 0);
    	if ($delcheck) {
    		echo "successful deletion";
    	}
    	else{
    		echo "Error while deleting";
    	}
    }
    //Handle fetch all deleted users request
    if (isset($_POST['action']) && $_POST['action'] == 'fetchdeletedshops') {
	$output = '';
	$data = $admin->web_shops(1);

	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center">
		<thead>
			<tr>
				<th>Profile</th>
				<th>Shop Owner</th>
				<th>Shop Email</th>
				<th>Phonenumber</th>
				<th>County</th>
				<th>Town</th>
				<th>Street</th>
				<th>Shop Name</th>
				<th>Product Category</th>
				<th>Opening Time</th>
				<th>Closing Time</th>
				<th>Description</th>
				<th>Date Created</th>
				
				<th>Action</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {
			$output .= '	
			<tr>
		<td><img src="../Profiles/'.$row['Profile'].'" class="img-fluid  rounded-circle"></td>
		<td>'.$row['Owner'].'</td>
		<td>'.$row['OwnerEmail'].'</td>
		<td>'.$row['Phonenumber'].'</td>
		<td>'.$row['County'].'</td>
		<td>'.$row['Town'].'</td>
		<td>'.$row['Street'].'</td>
		<td>'.$row['ShopName'].'</td>
		<td>'.$row['productscategory'].'</td>
		<td>'.$row['Opening'].'</td>
		<td>'.$row['Closing'].'</td>
		<td>'.$row['Description'].'</td>
		<td>'.$row['DateCreated'].'</td>
		<td>
			<a href="#" id="'.$row['SSN'].'" title="Restore Shop" class="text-white badge badge-dark p-2 restoreShopIcon" data-toggle="modal" data-target="#ShowShopDetails">Restore Shop</a>&nbsp;&nbsp;
		</tr>';
		}
		$output .= '</tbody>
		</table>'; 
		echo $output; 
	}
	else{
		echo '<h3 class="text-center text-secondary">:(No any Shop Deleted yet!)</h3>';
	}
}
//Handle Restore User Ajax Request
if (isset($_POST['restore_id'])) {
    	$id = $_POST['restore_id'];
    	$delcheck = $admin->shopAction($id, 1);
    	if ($delcheck) {
    		echo "successful Restoration";
    	}
    	else{
    		echo "Error while restoring";
    	}
    }
    //Handle Fetch Products Ajax Request
    if (isset($_POST['action']) && $_POST['action'] == 'fetchproducts') {
	$output = '';
	$data = $admin->fetchproducts();
    if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Image</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Status</th>
				<th>Description</th>
				<th>Date Uploaded</th>
				<th>Shop</th>
				<th>Type Of Shop</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {
			if ($row['approved'] != 0) { 
			$output .= '	
			<tr>
		<td>'.$row['NAME'].'</td>
		<td><img src="../products/'.$row['image'].'" class="img-fluid  rounded-circle"></td>
		<td>'.$row['category'].'</td>
		<td>'.$row['brand'].'</td>
		<td>'.$row['price'].'</td>
		<td>'.$row['status'].'</td>
		<td>'.$row['DESCRIPTION'].'</td>
		<td>'.$row['dateuploaded'].'</td>
		<td>'.$row['ShopName'].'</td>
		<td>'.$row['type'].'</td>
		<td>
			<a href="#" id="'.$row['PSN'].'" title="View Details" class="text-primary UsereditIcon" data-toggle="modal" data-target="#ShowShopDetails"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="'.$row['PSN'].'" title="View Images" class="text-secondary ViewImagesIcon" data-toggle="modal" data-target="#images-modal"><i class="fas fa-info-circle fa-lg"></i></a>
			<a href="#" id="'.$row['PSN'].'" title="Delete Shop" class="text-danger deleteproductIcon"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="'.$row['PSN'].'" title="Approve Product" class="text-info approveproduct">Approved</a>&nbsp;&nbsp;
		</td>
		</tr>';
		}
	 else {
			$output .= '	
			<tr>
		<td>'.$row['NAME'].'</td>
		<td><img src="../products/'.$row['image'].'" class="img-fluid  rounded-circle"></td>
		<td>'.$row['category'].'</td>
		<td>'.$row['brand'].'</td>
		<td>'.$row['price'].'</td>
		<td>'.$row['status'].'</td>
		<td>'.$row['DESCRIPTION'].'</td>
		<td>'.$row['dateuploaded'].'</td>
		<td>'.$row['ShopName'].'</td>
		<td>'.$row['type'].'</td>
		<td>
			<a href="#" id="'.$row['PSN'].'" title="View Details" class="text-primary UsereditIcon" data-toggle="modal" data-target="#ShowShopDetails"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="'.$row['PSN'].'" title="View Images" class="text-secondary ViewImagesIcon" data-toggle="modal" data-target="#images-modal"><i class="fas fa-info-circle fa-lg"></i></a>
			<a href="#" id="'.$row['PSN'].'" title="Delete Shop" class="text-danger deleteproductIcon"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
			<a href="#" id="'.$row['PSN'].'" title="Approve Product" class="text-success approveproduct">Approve</a>&nbsp;&nbsp;
		</td>
		</tr>';
	}
		}
		$output .= '</tbody>
		</table>'; 
		echo $output; 
	
		}
	else{
		echo '<h3 class="text-center text-secondary">:(No any Products Uploaded yet!)</h3>';
	}
}
//Handle Delete Product ajax
if (isset($_POST['delproduct_id'])) {
    	$id = $_POST['delproduct_id'];
    	$delcheck = $admin->deleteProduct($id, 0);
    	if ($delcheck) {
    		echo "successful deletion";
    	}
    	else{
    		echo "Error while deleting";
    	}
    }
    //View Images for products Ajax Details
    if (isset($_POST['viewImages_id']) && isset($_POST['category'])) {
    	$id = $_POST['viewImages_id'];
    	$category = $_POST['category'];

    	switch($category){
    		case "vehicles":
    		$output = '';
    	$data = $admin->getImages('vehicle_images',$id);
    	if ($data) {
    		$output .= '<ul style="display:flex;">
		';
		foreach ($data as $row) {
			$output .= '	
			<li style="list-style-type:none;margin:10px;">
		'.$row['id'].'
		<img src="../Uploads/'.$row['Images'].'" class="img-fluid">
		
		</li>';
		}
		$output .= '</ul>'; 
		echo $output; 
    	}
    	else{
    		echo "<h3>No More Images for This Product!!!</h3>";
    	}
    	break;
    	case "laptops":
    		$output = '';
    	$data = $admin->getImages('electronic_images',$id);
    	if ($data) {
    		$output .= '<ul style="display:flex;">
		';
		foreach ($data as $row) {
			$output .= '	
			<li style="list-style-type:none;margin:10px;">
		'.$row['id'].'
		<img src="../Uploads/'.$row['Images'].'" class="img-fluid">
		
		</li>';
		}
		$output .= '</ul>'; 
		echo $output; 
    	}
    	else{
    		echo "<h3>No More Images for This Product!!!</h3>";
    	}
    	break;
    	default:
    	echo "";
    	}

    }
    //Handle Fetch Deleted products Ajax Request
      if (isset($_POST['action']) && $_POST['action'] == 'ShowAllDeletedProducts') {
	$output = '';
	$data = $admin->fetchdeletedproducts();

	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center">
		<thead>
			<tr>
				<th>#</th>
				<th>Product Name</th>
				<th>Image</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Status</th>
				<th>Description</th>
				<th>Date Uploaded</th>
				<th>Shop</th>
				<th>Type Of Shop</th>
				
				<th>Action</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {
			$output .= '	
			<tr>
		<td>'.$row['SN'].'</td>
		<td>'.$row['productname'].'</td>
		<td><img src="../products/'.$row['ProductImages'].'" class="img-fluid  rounded-circle"></td>
		<td>'.$row['productscategory'].'</td>
		<td>'.$row['brand'].'</td>
		<td>'.$row['Price'].'</td>
		<td>'.$row['Status'].'</td>
		<td>'.$row['proddescription'].'</td>
		<td>'.$row['DateUploaded'].'</td>
		<td>'.$row['ShopName'].'</td>
		<td>'.$row['type'].'</td>
		<td>
			<a href="#" id="'.$row['SN'].'" title="Restore Shop" class="text-white badge badge-dark p-2 restoreproductIcon" data-toggle="modal" data-target="#ShowShopDetails">Restore Product</a>&nbsp;&nbsp;
		</tr>';
		}
		$output .= '</tbody>
		</table>'; 
		echo $output; 
	}
	else{
		echo '<h3 class="text-center text-secondary">:(No any product Deleted yet!)</h3>';
	}
}
//restore product ajax request
if (isset($_POST['restoreproduct_id'])) {
    	$id = $_POST['restoreproduct_id'];
    	$delcheck = $admin->deleteProduct($id, 1);
    	if ($delcheck) {
    		echo "successful Restoration";
    	}
    	else{
    		echo "Error while restoring";
    	}
    }
    //get electronic product details
     if (isset($_POST['pid']) && isset($_POST['category'])) {
     	$category = $_POST['category'];
    	$id = $_POST['pid'];
    	
    	$data = $admin->fetchoneproduct($category,$id);
    	echo json_encode($data);
    } 
    //approve product ajax request
     if (isset($_POST['approve_id'])) {
    	foreach ($_POST['approve_id'] as $id) {
    	$email = $admin->notifyuserofproductapproval($id);
    	$data = $admin->approveproduct('laptops',$id);
    	if ($data === true) {
    		echo "1";
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
        $mail->Body = 'Congratulations. Your product has been approved and published. Continue uploading products and enjoy our services.It is now visible to anyone who visists our website';
        //$mail->SMTPDebug = 4;
        $mail->send();
      }
      catch (Exception $e){
      }
    	} else {
    		echo "0";
    	}
    }
    }
    //approve vehicles ajax
    if (isset($_POST['approvevehicle_id'])) {
    	foreach ($_POST['approvevehicle_id'] as $id) {
    	$data = $admin->approveproduct('vehicles',$id);
    	if ($data === true) {
    		echo "1";
    	} else {
    		echo "0";
    	}
    }
	}
 ?>