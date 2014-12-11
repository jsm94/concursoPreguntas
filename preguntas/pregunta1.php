<?php
include_once('../modulos/head.php');
session_start();
echo "pregunta 1";
echo $_SESSION['user'];
?>
<form action="<?php $domain ?>/modulos/cerrarSesion.php">
    <button type="submit">Cerrar sesión</button>
</form>
