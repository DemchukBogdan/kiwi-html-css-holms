<?php

/* https://api.telegram.org/bot1743391620:AAFqCUp_xkbxzgTHwe2UgftuIew389Vfs2s/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "1743391620:AAFqCUp_xkbxzgTHwe2UgftuIew389Vfs2s";
$chat_id = "-1001520630708";


$arr = array(
  'Імя : ' => $name,
  'Телефон: ' => $phone,
  'Повідомлення: '=> $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};



$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
;

?>