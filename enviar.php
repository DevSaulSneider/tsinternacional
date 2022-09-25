<?php

$destinatario = "Gustavo.sanchezv591@gmail.com";

//Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$header = "Portafolio Diusikke";
$carta = $mensaje . "\nAtentamente: " . $nombre  . "\nCorreo: " . $correo;

//Enviando Mensaje
mail($destinatario, $header, $carta);
echo "<script> setTimeout(\"location.href='recibido.html'\",1000)</script>";

?> 