<?php
// Incluir archivo de conexión a la base de datos
include_once('conne.php');

// Obtener los datos enviados por el formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$dni = $_POST['dni'];
$categoria = $_POST['categoria'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$padre_nombre = $_POST['padre_nombre'];
$padre_telefono = $_POST['padre_telefono'];
$madre_nombre = $_POST['madre_nombre'];
$madre_telefono = $_POST['madre_telefono'];

// Validar los datos recibidos
if(empty($nombre) || empty($apellido) || empty($fecha_nacimiento) || empty($dni) || empty($categoria) || empty($direccion) || empty($telefono) || empty($padre_nombre) || empty($padre_telefono) || empty($madre_nombre) || empty($madre_telefono)) {
    echo "Por favor, complete todos los campos del formulario.";
    exit();
}

// Verificar si el jugador ya existe en la base de datos por su DNI
$sql_verif = "SELECT COUNT(*) AS count FROM jugadores WHERE dni='$dni'";
$result_verif = mysqli_query($conexion, $sql_verif);
$count = mysqli_fetch_assoc($result_verif)['count'];

// Si el jugador ya existe, mostrar un mensaje de error y salir del script
if($count > 0) {
    echo "<script>alert('El jugador ya existe en la base de datos.'); window.location.href='listado_segun_categoria.php';</script>";
    exit();
}

// Insertar los datos en la base de datos
$sql_insert = "INSERT INTO jugadores (nombre, apellido, fecha_nacimiento, dni, categoria, direccion, telefono, padre_nombre, padre_telefono, madre_nombre, madre_telefono) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$dni', '$categoria', '$direccion', '$telefono', '$padre_nombre', '$padre_telefono', '$madre_nombre', '$madre_telefono')";

//Mostrar el mensaje en una ventana emergente
if(mysqli_query($conexion, $sql_insert)) {
    echo "<script>alert('El jugador ha sido guardado correctamente.'); window.location.href='jugadores.php';</script>";
} else {
    echo "<script>alert('Error al guardar el jugador: " . mysqli_error($conexion) . "'); window.location.href='jugadores.php';</script>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>