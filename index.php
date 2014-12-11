<!DOCTYPE html>
<html>
    <?php include_once "head.php"; ?>

    <?php
        if (file_exists("conf-bd")){
            // LOGIN + PAGINAS AQUI
        }else{
            include_once "createDB.php";
        }
    ?>

    <?php include_once "footer.php"; ?>
</html>
