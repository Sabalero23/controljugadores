<?php
$servername = "localhost"; //Nombre del servidor
$username = "root"; //Nombre de usuario de la base de datos
$password = ""; //Contraseña de la base de datos
$dbname = "defdelacosta"; //Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión con la base de datos ha fallado: " . $conn->connect_error);
}
echo "Conexión exitosa con la base de datos";
$conn->close();
?>
