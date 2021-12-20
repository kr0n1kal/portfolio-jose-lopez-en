<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$project = $_POST['project'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Proyecto: " . $_POST['project'] . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";

$para = 'jalopezd1118@gmail.com';
$asunto = 'Mensaje de mi portafolio';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>