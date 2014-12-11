<?php
require_once("../conf-global.php");

$server = $_POST['dominio'];
$user = $_POST['user'];
$pass = $_POST['pass'];

// Creamos la conexión
$conn = new mysqli($server, $user, $pass);

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
$conn = new mysqli($server, $user, $pass, $bd);

if ($conn->connect_error) {
    echo "<br><br>";
    echo "<h2>Algo no ha ido bien... Vuelve a comprobar los datos</h2><br>";
    die("Conexión fallida: " . $conn->connect_error);
}

$crearTabla = "CREATE TABLE Usuarios (id int PRIMARY KEY AUTO_INCREMENT, user varchar(6), pass varchar(6), contestadas int, correctas int, falladas int, tiempo varchar(30));";

if ($conn->query($crearTabla) === TRUE) {
    $fichero = fopen("../conf-bd.php", "w") or die("No se puede crear el fichero");
    $contenido = "
    <?php
    \$server = '$server';
    \$user = '$user';
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
