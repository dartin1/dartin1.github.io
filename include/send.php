<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

$to = "dartin1@mail.ru";
$subject = "От посетителя сайта";
$text =  "Написал(а): $name\n телефон: $phone\n";

$header.= "Content-type: text/html; charset=utf-8\r\n";
$headers.= "From: email@mail.ru<email@mail.ru>";
$header .= "MIME-Version: 1.0\r\n";
$sending = mail($to, $subject, $text, $headers);

if($sending) echo "Письмо отправлено!";
?>