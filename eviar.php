<?php

  $destino= "contactanos@soteloysotelo.com";

  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  $asunto = $_POST["asunto"];

  $message = $_POST["message"];

  $contenido = "Nombre: " . $nombre . "\n Email: " . $email . "\n Phone: " . $phone . "\n Message: " . $message ;


  mail($destino, $asunto, $contenido);
  
  header("Location:https://www.soteloysotelo.com/index.html");


?>