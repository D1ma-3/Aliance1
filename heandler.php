<?php
$user_name = htmlspecialchars($_POST["user-name"]);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = "5988672222:AAF5Vzsn0K2iidk1ymGNNMRQ-XTbUoFN6fk";
$chat_id = "-4035494752";

$formData = array(
  "Клиент" => $user_name,
  "Телефон" => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urldecode($value) . "<b>" . "%0A" ;
}

$sendTolegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}& text={$text}&parse_mode=html", "r");

if ($sendTolegram) {
  echo "Success";
} else {
  echo "Error";
}