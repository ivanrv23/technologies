<?php
    require_once "../controladores/contacto.controlador.php";

	class AjaxContacto {
		/*=============================================
			CAMBIAR ESTADO USUARIO ADMINS Y PLANNERS
		=============================================*/
		public $nombreEnvioCorreo;
		public $emailEnvioCorreo;
        public $asuntoEnvioCorreo;
		public $mensajeEnvioCorreo;
		public function ajaxEnviarMensajeCorreoContacto() {

			$nombre = $this -> nombreEnvioCorreo;
			$correo = $this -> emailEnvioCorreo;
            $asunto = $this -> asuntoEnvioCorreo;
			$mensaje = $this -> mensajeEnvioCorreo;
			$respuesta = ControladorContacto::ctrEnviarCorreoContacto($nombre, $correo, $asunto, $mensaje);
			$arrayData = array('cod' => $respuesta);

            echo json_encode($arrayData);
		}
	}

	/*=============================================
		RECIBIR DATOS ENVIAR CORREO COONTACTO
	=============================================*/
	if (isset($_POST["nombresSendEmail"])) {
		$correoContacto = new AjaxContacto();
		$correoContacto -> nombreEnvioCorreo = $_POST["nombresSendEmail"];
		$correoContacto -> emailEnvioCorreo = $_POST["correoSendEmail"];
        $correoContacto -> asuntoEnvioCorreo = $_POST["asuntoSendEmail"];
		$correoContacto -> mensajeEnvioCorreo = $_POST["mensajeSendEmail"];
		$correoContacto -> ajaxEnviarMensajeCorreoContacto();
	}
