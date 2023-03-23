<?php
		include_once('header.php');
	?>
<main>
	<h1>Iniciar Sesión</h1>
	<form method="post" action="login.php" style="width: 25%;">
	
    <label for="usuario">Nombre de usuario:</label>
    <input type="text" name="usuario" id="uuario"><br><br>
    
    <label for="password">Contraseña:</label>
	<input type="password" name="password" id="password"><br><br>
    
    <input type="submit" value="Iniciar sesión">
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
