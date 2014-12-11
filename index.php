<!DOCTYPE html>
<html>

    <!-- Cabecera -->
    <?php include_once "vista/head.php"; ?>

    <?php
        if (file_exists("conf-bd")){
            // LOGIN + PAGINAS AQUI
        } else {
            include_once "createDB.php";
        }
    ?>

    <!-- Cabecera -->
    <?php include_once "vista/footer.php"; ?>
</html>
