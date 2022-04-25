<?php
    

    $nombre = $_POST["nombre"];
    $mail = $_POST["mali"];
    $mensaje = $_POST["mensaje"];
    

$para = "pabloruizs2002@gmail.com";
$asunto = "este mail fue enviado desde la web";


mail($para, $asunto, utf8_decode($mensaje));



header("location:exito.html");
?>