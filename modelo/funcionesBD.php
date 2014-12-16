<?php
function guardarBD($pregunta1, $pregunta2, $pregunta3, $tiempoTotal){
    try {
        $conn = new PDO("mysql:host=$server;dbname=$use_bd", $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        $sql = "INSERT INTO resultados (p1,p2,p3,tiempo)
            VALUES ('$pregunta1', '$pregunta2', '$pregunta3', '$tiempoTotal')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Completado con exito!";
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
