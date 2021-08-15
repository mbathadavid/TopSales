<?php 
$uploadDir = 'D:/xammpstore/htdocs/Class/uploads/';
$allowTypes = array('pdf','doc','docx','jpg','png','jpeg');
$response = array(
'status' =>0,
'message' => 'Form submission failed, please try again');

$errMsg = '';
$valid = 1;
if(isset($_POST['productowner']) || isset($_POST['productname']) || isset($_POST['Statusselect']) || isset($_POST['productscategory']) || isset($_POST['brand']) || isset($_POST['price']) || isset($_POST['proddescription']) || isset($_POST['files'])){
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
						$response['message'] = 'There was an error uploading your file';
					}
				}else{
					$uploadStatus = 0;
					$response['message'] = 'Sorry,only allowed types are to uploaded.';
				}
			}
		}
		if ($uploadStatus == 1) {
			include_once 'dbconfig.php';
			$uploadedFileStr = trim($uploadedFile, ',');
			$insert = $db->query("INSERT INTO businessproducts (Uploaded_By,productname,productscategory,brand,Price,Status,proddescription,DateUploaded,ProductImages) VALUES ('".$owner."','".$productname."','".$status."','".$category."','".$brand."','".$price."','".$description."','".$uploadedFileStr."')");
			if($insert){
				$response['status'] = 1;
				$response['message'] = 'Form data submitted successfully';
			}
		}
	
	}
}
echo json_encode($response);
 ?>