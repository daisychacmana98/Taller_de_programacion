

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ids = $_POST['ids'];

    // Conexión a la base de datos
        include('../config.php');


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
