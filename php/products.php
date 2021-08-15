<?php 
require_once 'auth.php';
$shopdata = new Auth();

$data = $shopdata->getproducts();
$sn = $data['SN'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>you are <?=$sn ?> </p>
</body>
</html>