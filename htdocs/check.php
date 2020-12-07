<?php
 $email = $_POST['email'];
 $message = $_POST['message'];

 $error = '';
 if(trim($email) == '')
 $error = 'Введите вашу почту';
 else if(trim($message) == '')
 $error = 'Введите ваше сообщение';

 if($error != '')
 {
  echo $error;
  exit;
 }

 $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
 $headers = "From: $email\r\nReply-to: $email\r\nContent-type:text/html.chatset=utf-8\r\n";
 mail('pashokmangall@gmail.com', $subject, $message, $headers);
header('Location: /mail.php');
 ?>
