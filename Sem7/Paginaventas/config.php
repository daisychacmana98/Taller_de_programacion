<?php
$servidor = "localhost";
$basededatos = "basempresa";
$usuario = "root";
$clave = "12345678";

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $clave, $basededatos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
