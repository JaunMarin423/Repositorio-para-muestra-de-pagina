<?php

$destino = "agenciasoteloysotelo2021@gmail.com";

$asunto = $_POST["asunto"];

$name = $_POST["name"];

$tel = $_POST["tel"];

$email = $_POST["email"];

$message = $_POST["message"];

$conteido = "Nombre: " . $name ."\nTelefono: " . $tel . "\nCorreo: " . $email . "\nMensaje: " . $message ; 

mail($destino, $asunto, $conteido);

header("Location:https://www.soteloysotelo.com/index.html");

?>