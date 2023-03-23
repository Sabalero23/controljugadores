<?php
		include_once('header.php');
	?>
<main>
<body>
<?php
// Incluir archivo de conexión a la base de datos
include_once('conne.php');

// Obtención del DNI del jugador a buscar
$dni = $_POST["dni"];

// Consulta a la base de datos
$sql = "SELECT jugadores.*, pagos.*
        FROM jugadores
        LEFT JOIN pagos
        ON jugadores.id = pagos.id_jugador
        WHERE jugadores.dni = '$dni'";
$resultado = mysqli_query($conexion, $sql);

// Creación de la tabla de resultados
if (mysqli_num_rows($resultado) > 0) {
    echo "<h1>Resultados de la búsqueda</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Fecha de Nacimiento</th><th>DNI</th><th>Categoría</th><th>Dirección</th><th>Teléfono</th><th>Padre Nombre</th><th>Padre Teléfono</th><th>Madre Nombre</th><th>Madre Teléfono</th><th>Mes</th><th>Año</th><th>Monto</th></tr>";
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>".$fila["id"]."</td><td>".$fila["nombre"]."</td><td>".$fila["apellido"]."</td><td>".$fila["fecha_nacimiento"]."</td><td>".$fila["dni"]."</td><td>".$fila["categoria"]."</td><td>".$fila["direccion"]."</td><td>".$fila["telefono"]."</td><td>".$fila["padre_nombre"]."</td><td>".$fila["padre_telefono"]."</td><td>".$fila["madre_nombre"]."</td><td>".$fila["madre_telefono"]."</td><td>".$fila["mes"]."</td><td>".$fila["anio"]."</td><td>".$fila["monto"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h1>No se encontraron resultados</h1>";
}

// Cierre de la conexión
mysqli_close($conexion);
?>
</body>
</main>
<body>
	<footer>
	<?php
		include_once('footer.php');
	?>
	</footer>
</body>
</html>