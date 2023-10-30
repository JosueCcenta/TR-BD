<?php
include_once('../modelo/conexion.php');
require_once('../modelo/LoginModelo.php');

$conexion = new Conexion();
$usuario = new Usuario();
$conn = $conexion->conectar();

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];

// Validar y sanear los datos de entrada
$FirstName = mysqli_real_escape_string($conn, $FirstName);
$LastName = mysqli_real_escape_string($conn, $LastName);

if ($usuario->iniciarSesion($FirstName, $LastName)) {
    header('Location: ../vista/index.php');
    exit();
} else {
    // Redirigir con un mensaje de error
    header('Location: ../vista/loginVista.php?error=1');
    exit();
}
?>
