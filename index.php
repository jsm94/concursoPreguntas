<!DOCTYPE html>
<html>
    <?php include_once('modulos/head.php') ?>
    <body>
        <?php
            if (file_exists('conf-bd.php')) {
                session_start();
                if (!isset($_SESSION['user'])) {
                    include_once('modulos/inicioSesion.php');   
                } else {
                    include_once('preguntas/pregunta1.php');
                }
            } else {
                include_once('modulos/formularioBD.php');
            }
        ?>
    </body>
</html>
