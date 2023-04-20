<?php?
$destino: "fabianaramirezzz@gmail.com"
$nombre: $_POST ["nombre"];
$mail: $_POST ["mail"];
$telefono: $_POST ["telefono"];
$mensaje: $_POST ["mensaje"];
$contenido: "Nombre:". $nombre. "\nCorreo:" $coreo. "\nMail:". $mail. "\nMensaje:". $mensaje. "\nTelefono:". $telefono;
mail($destino, "Contacto", $contenido);
header("Location: gracias.html")
>