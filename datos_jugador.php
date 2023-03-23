<?php
		include_once('header.php');
	?>
<main>
<body>
	<title>Búsqueda de Jugador y Pagos</title>
	<h1>Búsqueda de Jugador y Pagos</h1>
	<form action="buscar.php" method="POST" style="width: 50%;">
		<label for="dni">DNI del Jugador:</label>
		<input type="text" id="dni" name="dni" required>
		<br><br>
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
