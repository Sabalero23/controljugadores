<?php
		include_once('header.php');
	?>
<main>
<body>
    <title>Búsqueda de Jugadores por Categoría</title>
	<h1>Consulta Jugadores por Categoría</h1>
	<form action="buscar_categoria.php" method="POST" style="width: 50%;">
		<label for="categoria">Categoría:</label>
		<input type="text" name="categoria" id="categoria">
		<input type="submit" value="Buscar">
	</form>

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
