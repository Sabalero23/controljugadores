<?php
	include_once('header.php');
?>

<main>
	<?php
		// Incluir archivo de conexión a la base de datos
		include_once('conne.php');
		
		// Consulta a la base de datos
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$categoria = $_POST['categoria'];
			$query = "SELECT * FROM jugadores WHERE categoria = '$categoria'";
			$result = mysqli_query($conexion, $query);

			// Creación de la tabla de resultados
			if (mysqli_num_rows($result) > 0) {
				echo "<h1>Resultados de la búsqueda</h1>";
				echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Fecha de Nacimiento</th><th>DNI</th><th>Categoría</th><th>Dirección</th><th>Teléfono</th><th>Padre Nombre</th><th>Padre Teléfono</th><th>Madre Nombre</th><th>Madre Teléfono</th></tr>";
while($fila = mysqli_fetch_assoc($result)) {
	echo "<tr><td style='text-align: center;'>".$fila["id"]."</td><td style='text-align: center;'>".$fila["nombre"]."</td><td style='text-align: center;'>".$fila["apellido"]."</td><td style='text-align: center;'>".$fila["fecha_nacimiento"]."</td><td style='text-align: center;'>".$fila["dni"]."</td><td style='text-align: center;'>".$fila["categoria"]."</td><td style='text-align: center;'>".$fila["direccion"]."</td><td style='text-align: center;'>".$fila["telefono"]."</td><td style='text-align: center;'>".$fila["padre_nombre"]."</td><td style='text-align: center;'>".$fila["padre_telefono"]."</td><td style='text-align: center;'>".$fila["madre_nombre"]."</td><td style='text-align: center;'>".$fila["madre_telefono"]."</td></tr>";
}
echo "</table>";
			} else {
				echo "<h1>No se encontraron resultados</h1>";
			}

			// Cierre de la conexión
			mysqli_close($conexion);
		}
	?>
</main>

<footer>
	<?php
		include_once('footer.php');
	?>
</footer>

</html>
