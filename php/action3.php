<?php 
$uploadDir = 'D:/xammpstore/htdocs/Class/uploads/';
$allowTypes = array('pdf','doc','docx','jpg','png','jpeg');
$valid = 1;
if ($_POST['submit']) {
	$owner = $_POST['productowner'];
	$productname = $_POST['productname'];
	$status = $_POST['Statusselect'];
	$category = $_POST['productscategory'];
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$description = $_POST['proddescription'];
	$fileArr = $_FILES["files"];

	if($valid == 1){
		$uploadStatus = 1;
		$filesNames = array_filter($fileArr['name']);

		$uploadedFile = '';
		if (!empty($filesNames)) {
			foreach ($fileArr['name'] as $key => $val) {
				$fileName = basename($fileArr['name'][$key]);
				$targetFilePath = $uploadDir.$fileName;

				$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
				if(in_array($fileType, $allowTypes)) {
					if(move_uploaded_file($fileArr['tmp_name'][$key], $targetFilePath)){
						$uploadedFile .= $fileName.',';
					}else{
						$uploadStatus = 0;
						echo "There was an error in file upload";
					}
				}else{
					$uploadStatus = 0;
					echo "Only allowed types";;
				}
			}
		}
	if ($uploadStatus == 1) {
			$conn = new mysqli('localhost','root','','ecommerce');
if ($conn->connect_error) {
	die("Could not connect to the database" .$conn->connect_error);
}
	$uploadedFileStr = trim($uploadedFile, ',');
	$query = "INSERT INTO businessproducts(Uploaded_By,productname,productscategory,brand,Price,Status,proddescription,ProductImages) VALUES (?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("sssssss",$owner,$productname,$Status,$category,$brand,$price,$description,$uploadedFileStr);
	$stmt->execute();
			if($query){
				echo "Successfully inserted to the database";
			}else{
				echo "Mysql error";
			}
	}

}
}
 ?>