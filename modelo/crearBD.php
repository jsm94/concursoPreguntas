<?php
require_once("../conf-global.php");

$server = $_POST['dominio'];
$userName = $_POST['user'];
$pass = $_POST['pass'];

// Creamos la conexión
$conn = new mysqli($server, $userName, $pass);

// Comprobamos la conexión
if ($conn->connect_error) {
    echo "<br><br>";
    echo "<h2>Algo no ha ido bien... Vuelve a comprobar los datos</h2><br>";
    die("Conexión fallida: " . $conn->connect_error);
}

// Creamos la base de datos
$crearBD = "CREATE DATABASE " . $bd . "; ";

if ($conn->query($crearBD) === TRUE) {
    echo "Base de datos creada";

} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

// Crear conexión con la base de datos creada
$conn = new mysqli($server, $userName, $pass, $bd);

if ($conn->connect_error) {
    echo "<br><br>";
    echo "<h2>Algo no ha ido bien... Vuelve a comprobar los datos</h2><br>";
    die("Conexión fallida: " . $conn->connect_error);
}

// TODO: Cambiar estructura para las preguntas. En vez de boolean poner valores (correcta,incorrecta,noContestada)
$crearTabla = "CREATE TABLE resultados (p1 TINYINT(1), p2 TINYINT(1), p3 TINYINT(1), tiempo INT);";

if ($conn->query($crearTabla) === TRUE) {
    $fichero = fopen("../conf-bd.php", "w") or die("No se puede crear el fichero");
    $contenido = "
    <?php
    \$server = '$server';
    \$userName = '$userName';
    \$pass = '$pass';
    \$use_bd = '$bd';
    ?>
    ";
    fwrite($fichero, $contenido);
} else {
    echo "Error creating database: " . $conn->error;
}
header('Location: http://' . $domain);
$conn->close();
?>
