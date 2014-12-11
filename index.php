<!DOCTYPE html>
<html>
    <?php session_start() ?>
    <?php include_once "vista/head.php"; ?>

    <?php
    if(file_exists("conf-bd.php")){
        if(isset($_SESSION["user"])){
            if(isset($_SESSION["p1"],$_SESSION["p2"],$_SESSION["p3"])){
                //PAGINA FINAL
            }
            else if(isset($_SESSION["p1"],$_SESSION["p2"])){
                $_SESSION["p3"] = false;
                //PREGUNTA 3
            }
            else if(isset($_SESSION["p1"])){
                $_SESSION["p2"] = false;
                //PREGUNTA 2
            } else {
                $_SESSION["p1"] = false;
                //PREGUNTA 1
            }
        } else {
            include_once "registro.php";
        }
    } else {
        include_once "vista/formularioBD.php";
    }
    ?>

    <?php include_once "vista/footer.php"; ?>
</html>
