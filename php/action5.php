<?php 
$conn = mysqli_connect("localhost:3308","root","","ecommerce");
if(!$conn){
	echo "Connection failed";
}
if(isset($_POST['owner']) || $_POST['category'] || isset($_POST['files'])){
	$owner = $_POST['owner'];
	$category = $_POST['category'];
	$imageCount = count($_FILES['files']['name']);
	

			switch ($category) {
				case 'electronics':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO electronic_images(pid,Images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
					break;

				case 'vehicle':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO vehicle_images(VSN,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;
		case 'property':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO property_images(VSN,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;
		case 'machinery':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO machine_images(pid,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;
		case 'fashion':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO fashion_images(pid,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;
		case 'building':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO building_images(pid,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;
			case 'Household':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO household_images(pid,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;
		case 'energy':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO energy_images(pid,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;
		case 'farm':
		for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xampp/htdocs/Class/Uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {	
			$sql = "INSERT INTO agriculture_images(pid,images) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "success";
			}else{
				echo "sqlError".$conn->error;
			}
			}else{
			echo "UknownPath";
		}
		}
		break;			
							
				
				default:
					# code...
					break;
			

		
	}
}else{
	echo "no data";
}

 ?>