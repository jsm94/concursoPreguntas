<?php


function guardarBD($pregunta1, $pregunta2, $pregunta3, $tiempoTotal){
    include '../conf-bd.php';
    try {
        $conn = new PDO("mysql:host=$server;dbname=$use_bd", $userName, $pass);
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

function getRanking(){
    include 'conf-bd.php';
    //Leemos todos los resultados de la base de datos
    try {
        $conn = new PDO("mysql:host=$server;dbname=$use_bd", $userName, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT p1,p2,p3,tiempo FROM resultados ORDER BY tiempo LIMIT 5";

        $arrayRows = array();
        $counter = 0;
        foreach ($conn->query($sql) as $row){
            $arrayRows[$counter] = array($row['p1'],$row['p2'],$row['p3'],$row['tiempo']);
            $counter++;
        }
        return $arrayRows;

    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}
?>
