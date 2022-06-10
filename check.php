<?php
$email = $_POST["email"];
$message = $_POST["message"];
$error = "";

if(trim($email) == '')
    $error = $error . "Введіть email<br>";
if($message == '')
    $error = $error . "Введіть повідомлення<br>";
if(strlen($message) > 255)
    $error = $error . "Максиматьна довжина повідомлення 255 cисволів";

if($error != "")
{
    echo $error;
    exit();
}

$subject = "=?utf-8?B?".base64_encode("Тестове повідомлення")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail("266444833552m@gmail.com", $subject, $message, $headers);

header("Location: /about.php");
?>