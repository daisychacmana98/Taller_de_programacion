

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ids = $_POST['ids'];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "libros10";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Eliminar estudiantes con los IDs dados
    $sql = "DELETE FROM estudiantes WHERE id IN ($ids)";

    if ($conn->query($sql) === TRUE) {
        echo "Estudiantes eliminados exitosamente.";
    } else {
        echo "Error al eliminar estudiantes: " . $conn->error;
    }

    $conn->close();
}
?>
