<?php 
session_start();
 require_once '../auth.php';
 $shop = new Auth();

if(isset($_POST['productowner']) || isset($_POST['productscategory']) || isset($_POST['title']) || isset($_POST['subcategorydiv']) || isset($_POST['county']) || isset($_POST['subcounty']) || isset($_POST['specificlocation']) || isset($_POST['propertytype']) || isset($_POST['numberofguests']) || isset($_POST['duration']) || isset($_POST['facilities']) || isset($_POST['bedrooms']) || isset($_POST['bathrooms']) || isset($_POST['condition']) || isset($_POST['furnishing']) || isset($_POST['size']) || isset($_POST['rentdays']) || isset($_POST['price']) || isset($_POST['yes']) || isset($_POST['proddescription']) || isset($_POST['files'])){

    $owner = $_POST['productowner'];
    $propertytype = $_POST['subcategorydiv'];
    $category = $_POST['productscategory'];
    $county = $_POST['county'];
    $subcounty = $_POST['subcounty'];
    $specificlocation = $_POST['specificlocation'];
    $title = $_POST['title'];
    $type2 = $_POST['propertytype'];
    $numberofpeople = $_POST['numberofguests'];
    $duration = $_POST['duration'];
    $facilities = $_POST['facilities'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $status = $_POST['condition'];
    $furnishing = $_POST['furnishing'];
    $size = $_POST['size'];
    $rentdays = $_POST['rentdays'];
    $pricenegotiable = $_POST['yes'];
    $price = $_POST['price'];
    $description = $_POST['proddescription'];
    $negotiable = $_POST['yes'];
    $imageCount = count($_FILES['files']['name']);
    
        for ($i=0; $i <$imageCount ; $i++) { 
        $imageName = $_FILES['files']['name'][$i];
        $imageTempName = $_FILES['files']['tmp_name'][$i];
        $targetpath = "D:/xampp/htdocs/Class/vehicles/".$imageName;
        if (move_uploaded_file($imageTempName, $targetpath)) {
        $proupload = $shop->uploadproperty($owner,$category,$propertytype,$title,$county,$subcounty,$specificlocation,$type2,$numberofpeople,$duration,$facilities,$bedrooms,$bathrooms,$status,$furnishing,$size,$rentdays,$price,$pricenegotiable,$description,$imageName);

         if ($proupload === true) {
            echo "1";
            $shop->notification($owner,'admin','Product Uploaded');
         }
         else{
            echo "0";
         }
        }else{
            echo "Unknown path";
        }       
    } 


}

 


 ?>