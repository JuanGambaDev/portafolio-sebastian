<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$header = 'From: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "que opinas de nuestra pagina" . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$for = `sebastiangamba.music@gmail.com`;
$subject = `asunto del mensaje`;

if(mail($for, $subject, utf8_decode($message), $header)){
    echo "Mensaje enviado correctamente.";
}else{
    echo "uyuyuy";
}

?>
