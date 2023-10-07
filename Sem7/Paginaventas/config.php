<<<<<<< HEAD
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
=======
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
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
