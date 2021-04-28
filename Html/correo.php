<?php
$para      = 'ricardolhm0067@gmail.com';
$titulo    = 'Pruebaaaaa';
$mensaje   = 'Hola esta es una prueba';
$cabeceras = 'From: leomed7u7@gmail.com' . "\r\n" .
    'Reply-To: leomed7u7@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>