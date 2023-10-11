<?php
include('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $nombreEstudiante = mysqli_real_escape_string($conn, $_POST['nombre_estudiante']);
    $tituloLibro = mysqli_real_escape_string($conn, $_POST['titulo_libro']);
    $autorLibro = mysqli_real_escape_string($conn, $_POST['autor_libro']);
    $archivoNombre = mysqli_real_escape_string($conn, $_FILES['archivo_pdf']['name']);
    $archivoTmpName = $_FILES['archivo_pdf']['tmp_name'];

    $directorio = '../Archivos/';
    $archivoDestino = $directorio . $archivoNombre;

    // Move the uploaded file to the directory
    if (move_uploaded_file($archivoTmpName, $archivoDestino)) {
        // File moved successfully

        // Prepare and execute the SQL statement to insert into the database
        $sql = "INSERT INTO donaciones (nombre_estudiante, titulo_libro, autor_libro, archivo_pdf) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $nombreEstudiante, $tituloLibro, $autorLibro, $archivoNombre);
    } // This was missing in your code

    if ($stmt->execute()) {
        // Solicitud enviada con éxito
    } else {
        echo '<p>Error al donar el libro: ' . $stmt->error . '</p>';
    }

    $stmt->close();
    $conn->close();
} else {
    echo '<p>Error al subir el archivo del libro.</p>';
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Confirmación</title>
<style>
    

    .modal-content {
    width: 50%;
</style>
</head>
<body>
    <div class="modal-content">
        <h1>Libro donado con éxito</h1>
        <br>
        <h2>Datos del Estudiante</h2>
        <table>
            <tr>
                <th>Nombre del Estudiante:</th>
                <td><?php echo htmlspecialchars($_POST['nombre_estudiante']); ?></td>
            </tr>
        </table>
<br>
        <h2>Libro Donado</h2>
        <br>
        <table>
            <tr>
                <th>Título del Libro:</th>
                <td><?php echo htmlspecialchars($_POST['titulo_libro']); ?></td>
            </tr>
            <tr>
                <th>Autor del Libro:</th>
                <td><?php echo htmlspecialchars($_POST['autor_libro']); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
