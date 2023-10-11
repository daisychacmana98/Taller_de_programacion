<?php
$servername = "localhost";
$username = "id21331379_root";
$password = "2McHjAupYTKsyPo#";
$dbname = "id21331379_libros10";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
