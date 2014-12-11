<!DOCTYPE html>
<html>
    <?php include_once "head.php"; ?>

    <?php
        if (file_exists("conf-bd")){

            if(isset($_SESSION["user"])){
                if(isset($_SESSION["p1"],$_SESSION["p2"],$_SESSION["p3"])){
                    //PAGINA FINAL
                }
                else if(isset($_SESSION["p1"],$_SESSION["p2"])){
                    //PREGUNTA 3
                }
                else if(isset($_SESSION["p1"])){
                    //PREGUNTA 2
                }else {
                    //PREGUNTA 1
                }
            }else{
                include_once "registro.php";
            }
        }else{
            include_once "createDB.php";
        }
    ?>

    <?php include_once "footer.php"; ?>
</html>
