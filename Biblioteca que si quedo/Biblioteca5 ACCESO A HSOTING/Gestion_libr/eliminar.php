<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ids = $_POST['ids'];

        include('../config.php');


    // Eliminar libros con los IDs dados
    $sql = "DELETE FROM libros WHERE id IN ($ids)";

    if ($conn->query($sql) === TRUE) {
        echo "Libros eliminados exitosamente.";
    } else {
        echo "Error al eliminar libros: " . $conn->error;
    }

    $conn->close();
}
?>
