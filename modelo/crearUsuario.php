<?php
require_once("../conf-global.php");
require_once("../conf-bd.php");

$usuario = $_POST['user'];
$contra = $_POST['pass'];

// Creamos la conexión
$conn = new mysqli($server, $user, $pass, $use_bd);

// Comprobamos la conexión
if ($conn->connect_error) {
    echo "<br><br>";
    echo "<h2>Algo no ha ido bien... Vuelve a comprobar los datos</h2><br>";
    die("Conexión fallida: " . $conn->connect_error);
}

// Realizamos la consulta de si existe el usuario
$sql = "SELECT user FROM Usuarios WHERE user='" . $_POST['user'] . "';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>El usuario ya existe</h2>";
    echo "Redirigiendo a inicio...";
    header( "refresh:5;url=http://$domain" );
} else {
    // Creamos la base de datos
    $sql = "INSERT INTO Usuarios (user, pass)
    VALUES ('$usuario', '$contra')";

    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['contestadas'] = 0;
        $_SESSION['correctas'] = 0;
        $_SESSION['falladas'] = 0;
        $_SESSION['tiempo'] = time();
        header( "Location: http://$domain" );

    } else {
        echo "Error al crear la base de datos: " . $conn->error;
    }
}

$conn->close();
?>
