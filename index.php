<?php

$destino = "agenciasoteloysotelo2021@gmail.com";

$asunto = $_POST["contact-asunto"];

$name = $_POST["contact-name"];

$tel = $_POST["contact-tel"];

$email = $_POST["contact-email"];

$message = $_POST["message"];

$conteido = "Nombre: " . $name ."\n" . "Telefono: " . $tel . "\n". "Correo: " . $email . "\n" . "Mensaje: " . $message ; 



if (empty($message) || empty($asunto) || empty($email)) {
  
}else{
  mail($destino, $asunto, $conteido);
  header("Location:https://www.soteloysotelo.com/index.html");
}

?>