<?php 
session_start();
include 'conexion.php';
$usuario = $_POST['user'];
$password = $_POST['pass'];

echo $usuario;
echo "<br>";
echo $password;

// Almacenar datos en la sesión
$_SESSION["usuario"] = $usuario;
$_SESSION["password"] = $password;
?>
<a href="pagin1.php">pagina 1</a>

