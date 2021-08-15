<?php 
$conn = mysqli_connect("localhost","root","","ecommerce");
if(!$conn){
	echo "Connection failed";
}
if(isset($_POST['Upload_Images'])){
	$owner = $_POST['owner'];
	$imageCount = count($_FILES['files']['name']);
	for ($i=0; $i <$imageCount ; $i++) { 
		$imageName = $_FILES['files']['name'][$i];
		$imageTempName = $_FILES['files']['tmp_name'][$i];
		$targetpath = "D:/xammpstore/htdocs/Class/uploads/".$imageName;
		if (move_uploaded_file($imageTempName, $targetpath)) {
			$sql = "INSERT INTO poductimages(SN,Image) VALUES ('$owner','$imageName')";
			$result = mysqli_query($conn,$sql);
		}
	}
	
}


 ?>