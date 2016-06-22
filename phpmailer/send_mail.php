<?php


require 'class.phpmailer.php';
require 'class.subphpmailer.php'; //Para php 5.6
require 'class.smtp.php';

$mail = new subPHPMailer;



$message = '<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>hola</title>
			  <link rel="stylesheet" href="">
			</head>
			<body>
				<br>Nombre: '.$_POST['nombre'].'
				<br>Email: '.$_POST['email'].'
				<br>Telefono: '.$_POST['telefono'].'
				<br>Curso o taller: '.$_POST['curso_taller'].'
				<br>Comentarios: '.$_POST['comentarios'].'
			</body>
			</html>';

//$mail->SMTPDebug = 2;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->Host = 'secure.emailsrvr.com';  // Specify main and backup SMTP servers
//$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "sender@publicidadenlinea.com";
$mail->Password = "360UvVcK";                          // SMTP password
//$mail->Username = 'developer2585@gmail.com';                 // SMTP username
//$mail->Password = 'alwbyzihrcqwnhkz';  

$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to


//$mail->isHTML(true);
$mail->From         = 'not_reply@puntocoaching.com';
$mail->FromName     = 'Info';
//$mail->setFrom('info@puntocoaching.com.mx');
//$mail->addAddress('contacto@puntocoaching.com.mx');
$mail->addAddress('ivan.hernandez@publicidadenlinea.com');
$mail->addAddress('van.m285@gmail.com');
  

$mail->isHTML(true); 
$mail->Subject = "CONTACTO PUNTO COACHING";
$mail->Body = $message;
//$mail->AltBody = $message;



if(!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado correctamente';
}

