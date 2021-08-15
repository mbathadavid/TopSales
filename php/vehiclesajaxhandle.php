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

 if (isset($_POST['action']) && $_POST['action'] == 'fetchcars') {
     echo "We are here to Send data";
 }

 ?>