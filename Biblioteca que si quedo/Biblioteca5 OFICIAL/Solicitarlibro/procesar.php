<?php
include('../config.php');

$libroNombre = mysqli_real_escape_string($conn, $_FILES['libro']['name']);
$libroTmpName = $_FILES['libro']['tmp_name'];

$directorio = '../Archivos/';
$rutaArchivo = $directorio . rawurlencode($libroNombre);  // Codifica la URL correctamente

// Obtén los datos del formulario
$codigo = mysqli_real_escape_string($conn, $_POST['codigo']);
$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$especialidad = mysqli_real_escape_string($conn, $_POST['especialidad']);
$semestre = mysqli_real_escape_string($conn, $_POST['semestre']);

// Asigna los datos a la variable $datos
$datos = array(
    'codigo' => $codigo,
    'nombre' => $nombre,
    'especialidad' => $especialidad,
    'semestre' => $semestre,
    'libro' => $libroNombre
);

// Mueve el archivo cargado al directorio de libros
if (move_uploaded_file($libroTmpName, $directorio . $libroNombre)) {
    // Archivo PDF movido con éxito

    // Inserta la información en la base de datos
    $sql = "INSERT INTO solicitudes (codigo, nombre, especialidad, semestre, libro) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $codigo, $nombre, $especialidad, $semestre, $libroNombre);

    if ($stmt->execute()) {
        // Solicitud enviada con éxito
    } else {
        echo '<p>Error al enviar la solicitud: ' . $stmt->error . '</p>';
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
    <style>
.modal-content {

    width: 60%;

    </style>
    <title>Mensaje de Confirmación</title>
</head>
<body>
    <div class="modal-content">
        <h1>Solicitud de Libro Procesada</h1>
        <br>
        <h2>Datos de la Solicitud</h2>
        <table>
            <tr>
                <th>Código:</th>
                <td><?php echo htmlspecialchars($datos['codigo']); ?></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><?php echo htmlspecialchars($datos['nombre']); ?></td>
            </tr>
            <tr>
                <th>Especialidad:</th>
                <td><?php echo htmlspecialchars($datos['especialidad']); ?></td>
            </tr>
            <tr>
                <th>Semestre:</th>
                <td><?php echo htmlspecialchars($datos['semestre']); ?></td>
            </tr>
            <tr>
                <th>Libro Solicitado:</th>
                <td><?php echo htmlspecialchars($datos['libro']); ?></td>
            </tr>
            <tr>
                <th>Archivo PDF:</th>
            <td><a href="../Archivos/<?php echo htmlspecialchars($datos['libro']); ?>" target="_blank">Ver PDF</a></td>


            </tr>
        </table>
    </div>
</body>
</html>
