<?php
  session_start();
  require_once('conexion.php'); // Archivo que contiene la conexión a la base de datos
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['categoria'] = $row['categoria'];
    
    header("Location: inicio.php"); // Página a la que se redirige después del inicio de sesión exitoso
  } else {
    header("Location: index.php?mensaje=error"); // Página de inicio de sesión con mensaje de error
  }
?>
