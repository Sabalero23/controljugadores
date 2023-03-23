<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['id'])) {
  // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
  header("location: iniciar_sesion.php");
} else {
  // Verificar la categoría del usuario para permitir o denegar el acceso a la página
  $categoria = $_SESSION['categoria'];
  if ($categoria != 'administrador' && $categoria != 'moderador') {
    // Mostrar un mensaje de error si el usuario no tiene permisos para acceder a la página
    $error = "No tiene permisos para acceder a esta página.";
  }
}
?>

<head>
	<title>Club Deportivo</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
			margin: 0;
			padding: 0;
		}
			header {
		background-color: #333;
		color: #fff;
		padding: 20px;
		text-align: center;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
	}
	
	nav ul {
		list-style: none;
		margin: 0;
		padding: 0;
		display: flex;
		justify-content: space-between;
	}
	
	nav li {
		margin: 0 10px;
	}
	
	nav a {
		color: #fff;
		text-decoration: none;
		font-size: 18px;
		font-weight: bold;
		padding: 10px;
		border-radius: 5px;
		transition: background-color 0.3s ease;
	}
	
	nav a:hover {
		background-color: #fff;
		color: #333;
	}
	
	main {
		margin: 20px;
	}
	
	h1 {
		font-size: 36px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	
	p {
		margin-bottom: 10px;
	}
	
	footer {
		background-color: #333;
		color: #fff;
		padding: 10px;
		text-align: center;
		box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
	}
	
	footer p {
		margin: 0;
		padding: 5px;
	}
	
	@media (max-width: 768px) {
		nav ul {
			flex-direction: column;
			align-items: center;
		}
		
		nav li {
			margin: 10px 0;
		}
	}
</style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="jugadores.php">Carga de Jugadores</a></li>
				<li><a href="formulario_carga_pago.php">Pagos</a></li>
				<li><a href="datos_jugador.php">Datos del Jugador</a></li>
				<li><a href="listado_segun_categoria.php">Listado por Categoría</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<h1>Bienvenido al Club Deportivo</h1>
	<p>Seleccione una sección del menú para continuar.</p>
</main>

<footer>
	<p>&copy; 2023 Club Deportivo | Todos los derechos reservados.</p>
	<p>Correo electrónico: info@clubdeportivo.com | Teléfono: 555-1234</p>
</footer>
</body>
</html>
