<?php
    $pregunta = $_POST["pregunta"];
    $respuesta = $_POST["respuesta"];
    $respuestaCorrecta = $_POST["respuestaCorrecta"];

    if ($pregunta === "p1"){
        if ($respuesta === $respuestaCorrecta){
            $_SESSION["p1"] = true;
        }else{
            $_SESSION["p1"] = false;
        }
    }
    else if ($pregunta === "p2"){
        if ($respuesta === $respuestaCorrecta){
            $_SESSION["p2"] = true;
        }else{
            $_SESSION["p2"] = false;
        }
    }
    else if ($pregunta === "p3"){
        if ($respuesta === $respuestaCorrecta){
            $_SESSION["p3"] = true;
        }else{
            $_SESSION["p3"] = false;
        }
    }

    header('Location: index.php');
?>
