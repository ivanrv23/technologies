var url = window.location.pathname;
var partes = url.split("/");
var pagina = partes[2];
const elementosEnlaces = document.querySelectorAll("#navbarCollapse a");
elementosEnlaces.forEach((enlace) => {
    const href = enlace.pathname;
    if (window.location.pathname == href) {
        var elemento = document.getElementById(pagina);
        elemento.classList.add("active");
    }
    if (window.location.pathname == "/technologies/") {
        var elemento = document.getElementById("inicio");
        elemento.classList.add("active");
    }
});

/*=============================================
    ENVIAR DATA DEL FORMULARIO CONTACTO
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
            success: function (respuesta) {
                if (respuesta.cod != 'error') {
                    alert("Su mensaje se envió correctamente!");
					window.location.replace("contacto");
                } else {
                    alert("No se pudo enviar el mensaje!");
					window.location.replace("contacto");
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    } else {
        console.log('No hay datos para enviar correo!');
    }
}

/*=============================================
    ENVIAR DATA DEL FORMULARIO COTIZACIÓN
=============================================*/
function enviarMensajeCotizacion() {
    var nombres = $('#nombreCotiza').val();
    var correo = $('#correoCotiza').val();
    var asunto = $('#asuntoCotiza').val();
    var mensaje = $('#mensajeCotiza').val();
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
            success: function (respuesta) {
                if (respuesta.cod != 'error') {
                    alert("Su mensaje se envió correctamente!");
					window.location.replace("contacto");
                } else {
                    alert("No se pudo enviar el mensaje!");
					window.location.replace("contacto");
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    } else {
        console.log('No hay datos para enviar correo!');
    }
}