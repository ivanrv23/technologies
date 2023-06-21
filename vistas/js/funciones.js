/*=============================================
    ENVIAR DATA DEL FORMULARION CONTACTO
=============================================*/
function enviarMensajeContacto() {
    var nombres = $('#nombreEnvioCorreo').val();
    var correo = $('#emailEnvioCorreo').val();
    var asunto = $('#asuntoEnvioCorreo').val();
    var mensaje = $('#mensajeEnvioCorreo').val();
    if (nombres != "" && correo != "" && asunto != "" && mensaje != "") {
        var datos = new FormData();
        datos.append("nombresSendEmail", nombres);
        datos.append("correoSendEmail", correo);
        datos.append("asuntoSendEmail", asunto);
        datos.append("mensajeSendEmail", mensaje);
    
        $.ajax({
            url: "ajax/ajax.contacto.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta) {
                if (respuesta.det != 'error') {
                    console.log('Hay datos detallada temporal!');
                } else {
                    console.log('Sin datos cotización detallada temporal!');
                }
                viewProcesarCotizacion();
                viewAnularCotizacion();
            },
            error: function(error) {
                console.log(error);
            }
        });
    } else {
        console.log('Id incorrecto!');
    }
}