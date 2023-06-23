<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

class ControladorContacto {
	/*=============================================
		ENVIAR CORREO DESDE CONTACTO
	=============================================*/
	static public function ctrEnviarCorreoContacto($nombre, $correo, $asunto, $mensaje)
	{
		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);
		try {
			//Server settings
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'technologies.geotekhperu.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'technologies@geotekhperu.com';                     //SMTP username
			$mail->Password   = ')RcP%KvLt6Wa';                               //SMTP password es del correo
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
			$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			//Datos del formulario de contacto
			$de = $nombre; //nombre del cliente
			$para = "Geotekh Technologies"; //nombre del destinatario
			$mail->setFrom($correo, $de);//correo del cliente
			$mail->addAddress("technologies@geotekhperu.com", $para);//correo del destinatario
			$mail->addCC($correo);
			//Content
			$mail->isHTML(true); //Set email format to HTML
			$mail->Subject = utf8_decode($asunto); //asunto
			$mail->Body    = utf8_decode('<b>'.$mensaje.'</b>');
			$mail->AltBody = utf8_decode($mensaje);

			if ($mail->send()) { //comprobar si se envio el mail
				return "ok";
			} else {
				return "error";
			}
		} catch (Exception $e) {
			echo '<script> 
				console.log("Error al enviar correo: "'.$e.');
			</script>';
			return "error";
		}
	}
}
