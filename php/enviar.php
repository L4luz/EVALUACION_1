<?php
$nombre = $_POST['Nombre'];
$edad = $_POST['edad'];
$e-mail = $_POST['e-mail'];
$sugerencia = $_POST['sugerencia']

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su edad es: " . $edad . "";
$mensaje .= "correo: " . $e-mail['e-mail'] . " \r\n";
$mensaje .= "sugerencia " . $_POST['sugerencia'];

$para = 'al.candiap@duocuc.cl';
$asunto = 'datos';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>