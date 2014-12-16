<?php
    include 'funcionesBD.php';

    session_start();

    $pregunta = $_POST["pregunta"];
    $respuesta = $_POST["respuesta"];
    $respuestaCorrecta = $_POST["respuestaCorrecta"];

    if ( $pregunta === "p1" ){
        $_SESSION["tiempo"] = time();
    }

    $acierto=0;

    if ( $respuesta === $respuestaCorrecta ){
        $acierto = 1;
    }

    $_SESSION[$pregunta] = $acierto;

    if ( $pregunta === "p3" ){
        guardarDB($_SESSION["p1"],$_SESSION["p2"],$_SESSION["p3"],time()-$_SESSION["tiempo"]);
    }

    // TODO: Comprimirlo para que sirva a cualquier pregunta
    header('Location: index.php');
?>
