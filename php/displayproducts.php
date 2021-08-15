<?php 
require_once 'auth.php';
 $cshop = new Auth();

$data = $cshop->electronics();
$sn = $data['productscategory'];

 ?>