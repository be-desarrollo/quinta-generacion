<?php

// ----------- LLAMAR CAMPOS -----------

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$asuntocliente = $_POST ['asunto'];
$mensaje = $_POST['mensaje'];


// ----------- DATOS PARA EL CORREO -----------

$destinatario = "contacto@quintageneracion.mx";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Asunto: $asuntocliente  \n";
$carta .= "E-mail: $email \n";
$carta .= "Mensaje: $mensaje";

// ----------- ENVIO DE MENSAJE -----------

mail($destinatario, $asunto, $carta);
header('Location:mensajeEnvio.html'); // NUEVA HOJA DE MENSAJE ENVIADO

 ?>
