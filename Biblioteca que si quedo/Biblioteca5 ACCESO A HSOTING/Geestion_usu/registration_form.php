<!DOCTYPE html>
<html lang="es">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
    <title>Registrar Estudiante</title>
    <!-- Agrega tus estilos aquí si es necesario -->
    <style>
        .modal-content {
    padding: 10px;
    border-radius: 5px;
    margin: 0 auto;
    margin-top: -50px;    
    width: 40%;
height: 600px;}

form {
        width: 500px;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.0);
        padding: 0;
}

    </style>
</head>
<body>
<div id="modal">

<form method="post" action="" enctype="multipart/form-data">
  <h2>Registrar Estudiante</h2>

    <label for="codigo">Código:</label>
    <input type="text" name="codigo" required><br>

    <label for="nombre">Nombre y Apellidos:</label>
    <input type="text" name="nombre" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono"><br>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion"><br>

    <label for="foto">Subir Foto:</label>
    <input type="file" name="foto" accept="image/*"><br>
 <input type="submit" value="Registrar">
<br>
</form>

</div>
<script src="functions.js"></script>
<script>
    // Obtén el formulario
    var form = document.querySelector('form');

    // Agrega un evento de escucha al formulario para mostrar el mensaje de confirmación
    form.addEventListener('submit', function () {
        alert('¡Estudiante registrado con éxito!');
    });
</script>
</body>
</html>
<?php
include('../config.php');
$response = array();  // Inicializa un arreglo para la respuesta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $target_dir = "../ruta/";  // Cambia esto a tu directorio deseado
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    // Verificar si se subió un archivo y manejarlo adecuadamente
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === UPLOAD_ERR_OK) {
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO estudiantes (codigo, nombre, telefono, direccion, foto) VALUES ('$codigo', '$nombre', '$telefono', '$direccion', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            $response['success'] = true;
            $response['message'] = 'Estudiante registrado con éxito.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al registrar al estudiante: ' . $conn->error;
        }
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al subir la foto.';
    }
}

// Respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cierra la conexión a la base de datos
$conn->close();
?>
