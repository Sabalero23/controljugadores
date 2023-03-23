<?php
// Incluir archivo de conexión a la base de datos
include_once('conne.php');

// Obtener los datos enviados por el formulario
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Validar los datos recibidos
if(empty($usuario) || empty($password)) {
    echo "<script>alert('Por favor, complete todos los campos del formulario.'); window.location.href='iniciar_sesion.php';</script>";
    exit();
}

// Verificar las credenciales del usuario en la base de datos
$sql_verif = "SELECT COUNT(*) AS count FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$result_verif = mysqli_query($conexion, $sql_verif);
$count = mysqli_fetch_assoc($result_verif)['count'];

// Si las credenciales son incorrectas, mostrar un mensaje de error y salir del script
if($count == 0) {
    echo "<script>alert('El nombre de usuario o la contraseña son incorrectos.'); window.location.href='iniciar_sesion.php';</script>";
    exit();
}

// Si las credenciales son correctas, continuar con el proceso de carga de datos en el formulario
// ...
?>
