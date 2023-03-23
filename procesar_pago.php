<?php
// Se establece la conexión con la base de datos
    require 'conne.php';
	
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$categoria = $_POST['categoria'];
$fecha_pago = $_POST['fecha_pago'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$monto = $_POST['monto'];

// Obtener el ID del jugador
$resultado = mysqli_query($conexion, "SELECT id FROM jugadores WHERE nombre='$nombre' AND apellido='$apellido' AND categoria='$categoria'");
$jugador = mysqli_fetch_assoc($resultado);
$id_jugador = $jugador['id'];

// Consultar si el pago ya ha sido cargado
$sql = "SELECT id FROM pagos WHERE id_jugador = $id_jugador AND mes = '$mes' AND anio = '$anio'";
$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) > 0) {
    // El pago ya ha sido cargado previamente, mostrar mensaje de error
    echo "<script>alert('El pago para el mes de $mes/$anio ya ha sido cargado para este jugador.'); window.location.href='formulario_pago.php?id_jugador=$id_jugador';</script>";
} else {
    // Insertar el pago en la base de datos
    mysqli_query($conexion, "INSERT INTO pagos (id_jugador, fecha_pago, mes, anio, monto) VALUES ($id_jugador, '$fecha_pago', '$mes', '$anio', $monto)");

    //Mostrar el mensaje en una ventana emergente
    if(mysqli_query($conexion, $sql)) {
        echo "<script>alert('El Pago ha sido guardado correctamente.'); window.location.href='listado_segun_categoria.php';</script>";
    } else {
        echo "<script>alert('Error al cargar el Pago: " . mysqli_error($conexion) . "');</script>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);

    // Redireccionar al listado de jugadores
    header("Location: listado_segun_categoria.php");
}
