<?php 
error_reporting(0); 
$nombre = $_POST['nombre']; 
$correo_electronico= $_POST['email']; 
$asunto = $_POST['asunto']; 
$mensaje=$_POST['mensaje'];  
$header = 'From: ' . $mail . ", de la poblacion ".$asunto."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = "tomas.ortega.aa@gmail.com"; 
$asunto = "cotizar"; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 