<?php 
if (isset($_POST['send'])) {
	
$username = " Davie1998";
$key = "KwJ1xDWPPsdztzeOBp0QBCWCciUuaGzopiU6IMOcTzOPfena9O";
$senderId =  3690;
$to = "+254748269865";
$finalmessage = $_POST['message'];
$msgtype = 5;
$dlr = 0;

$url = "https://www.sms.movesms.co.ke/API/";
  $postData = array(
                    'action' => 'compose',
                    'username' => $username,
                    'api_key' => $key,
                    'sender' => $senderId,
                    'to' => $to,
                    'message' => $finalmessage,
                    'msgtype' => $msgtype,
                    'dlr' => $dlr,
                );


                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $postData

                ));

                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

                $output = curl_exec($ch);

                if (curl_errno($ch)) {
                    //echo 'error:' . curl_error($ch);
                    $output = curl_error($ch);
                } 
                //else {
                	//echo "Message send successfully";
               // }

                curl_close($ch);


}
?>


