<?php
		include_once('header.php');
	?>
<main>
		<h1>Cargar Nuevo Jugador</h1><br><br>
<form action="procesar_jugador.php" method="post" enctype="multipart/form-data" style="width: 50%;">
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required><br>

  <label for="apellido">Apellido:</label>
  <input type="text" id="apellido" name="apellido" required><br>

  <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
  <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>

  <label for="dni">DNI:</label>
  <input type="text" id="dni" name="dni" required><br>

  <label for="categoria">Categoría:</label>
  <input type="text" id="categoria" name="categoria" required><br>

  <label for="direccion">Dirección:</label>
  <input type="text" id="direccion" name="direccion" required><br>

  <label for="telefono">Teléfono:</label>
  <input type="text" id="telefono" name="telefono" required><br>

  <label for="padre_nombre">Nombre del Padre:</label>
  <input type="text" id="padre_nombre" name="padre_nombre" required><br>

  <label for="padre_telefono">Teléfono del Padre:</label>
  <input type="text" id="padre_telefono" name="padre_telefono" required><br>

  <label for="madre_nombre">Nombre de la Madre:</label>
  <input type="text" id="madre_nombre" name="madre_nombre" required><br>

  <label for="madre_telefono">Teléfono de la Madre:</label>
  <input type="text" id="madre_telefono" name="madre_telefono" required><br>

  <input type="submit" value="Guardar Jugador">
</form>
</main>
<body>
	<footer>
	<?php
		include_once('footer.php');
	?>
	</footer>
</body>
</html>