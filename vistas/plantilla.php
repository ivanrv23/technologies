<!DOCTYPE html>
<html>

<head>
    <!-- Links -->
    <meta charset="utf-8">
    <title>Geotekh Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="vistas/img/logo.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="vistas/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vistas/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="vistas/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="vistas/css/style.css" rel="stylesheet">
</head>
<!--=====================================
        CUERPO DEL DOCUMENTO
    ======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
    <?php
    echo '<div class="wrapper">';

    /*=============================================
                CABECERA
    =============================================*/
    include "modulos/header.php";

    /*=============================================
                CONTENIDO
    =============================================*/
    if (isset($_GET["ruta"])) {
        if (
            $_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "desarrollo-software" ||
            $_GET["ruta"] == "aplicativo-movil" ||
            $_GET["ruta"] == "nosotros" ||
            $_GET["ruta"] == "contacto" ||
            $_GET["ruta"] == "maintekh" ||
            $_GET["ruta"] == "logtekh" ||
            $_GET["ruta"] == "geomekh" ||
            $_GET["ruta"] == "mineral-test" ||
            $_GET["ruta"] == "mantenimiento" ||
            $_GET["ruta"] == "otros-proyectos"

        ) {

            include "modulos/" . $_GET["ruta"] . ".php";
        } else {

            include "modulos/404.php";
        }
    } else {
        include "modulos/inicio.php";
    }

    /*=============================================
                FOOTER
        =============================================*/
    include "modulos/footer.php";

    echo '</div>';
    ?>
    <!-- Scripts -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vistas/lib/wow/wow.min.js"></script>
    <script src="vistas/lib/easing/easing.min.js"></script>
    <script src="vistas/lib/waypoints/waypoints.min.js"></script>
    <script src="vistas/lib/counterup/counterup.min.js"></script>
    <script src="vistas/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="vistas/js/main.js"></script>
    <script src="vistas/js/funciones.js"></script>
</body>

</html>