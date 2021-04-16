<?php

<<<<<<< HEAD
$destino = "contactanos@soteloysotelo.com";
=======
$destino = "agenciasoteloysotelo2021@gmail.com";
>>>>>>> master

$asunto = $_POST["contact-asunto"];

$name = $_POST["contact-name"];

$tel = $_POST["contact-tel"];

$email = $_POST["contact-email"];

$message = $_POST["message"];

<<<<<<< HEAD
$array = array(
    "baburovp@bk.ru" => "baburovp@bk.ru",
	"stevensonbrian158@gmail.com" => "stevensonbrian158@gmail.com",
	"baburovp@bk.ru" => "baburovp@bk.ru",
	"no-replyka@gmail.com" => "no-replyka@gmail.com",
	"kandilt@bk.ru" => "kandilt@bk.ru",
	"shavondavzoc52@gmail.com" => "shavondavzoc52@gmail.com",
	"shavondavzoc52@gmail.com" => "shavondavzoc52@gmail.com",
	"grun.76@inbox.ru" => "grun.76@inbox.ru",
);

=======
>>>>>>> master
$conteido = "Nombre: " . $name ."\n" . "Telefono: " . $tel . "\n". "Correo: " . $email . "\n" . "Mensaje: " . $message ; 



if (empty($message) || empty($asunto) || empty($email)) {
  
<<<<<<< HEAD
}elseif ( $email == $array[$email] ) {
	
}
else{
=======
}else{
>>>>>>> master
  mail($destino, $asunto, $conteido);
  header("Location:https://www.soteloysotelo.com/index.html");
}

?>