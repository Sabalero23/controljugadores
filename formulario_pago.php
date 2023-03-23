<?php
		include_once('header.php');
	?>
<main>
	<h1>Cargar Pago</h1>
	<form method="post" action="procesar_pago.php" style="width: 50%;">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre" required><br><br>
			<label for="apellido">Apellido:</label>
	<input type="text" name="apellido" id="apellido" required><br><br>

	<label for="categoria">Categoría:</label>
	<input type="text" name="categoria" id="categoria" required><br><br>

	<label for="fecha_pago">Fecha de Pago:</label>
    <input type="date" name="fecha_pago" id="fecha_pago" required value="<?php echo date('Y-m-d'); ?>"><br><br>

		<label for="mes">Mes:</label>
	<input type="text" name="mes" id="mes" required><br><br>

	<label for="anio">Año:</label>
	<input type="text" name="anio" id="anio" required><br><br>

	<label for="monto">Monto:</label>
	<input type="text" name="monto" id="monto" required><br><br>

	<input type="submit" value="Cargar Pago">

	<input type="button" value="Imprimir" onclick="imprimir_cupon()">
	<input type="button" value="Enviar por Whatsapp" onclick="enviar_whatsapp()">
</form>

<script>
	function imprimir_cupon() {
		// Código para imprimir el cupón de pago
		// ...
	}

	function enviar_whatsapp() {
		// Código para enviar el cupón de pago por Whatsapp
		// ...
	}
</script>
</main>
<body>
	<footer>
	<?php
		include_once('footer.php');
	?>
	</footer>
</body>
</html>
