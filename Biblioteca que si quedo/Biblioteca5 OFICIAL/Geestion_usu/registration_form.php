 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Estudiante</title>
    <!-- Agrega tus estilos aquí si es necesario -->
    <style>
        .modal-content {
    background-color: #ffffff;
    padding: 10px;
    border-radius: 5px;
    margin: 0 auto;
    margin-top: -50px;    
    width: 35%;
    height: 500px;
}

form {
    text-align: center;
    width: 500px;
    border-radius: 8px;
    font-size: 20px;
    margin: 0 auto;+
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
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
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "libros10";

// Establece la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$response = array();  // Inicializa un arreglo para la respuesta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];

    // Handle file upload
    $target_dir = "../ruta/";  // Cambia esto a tu directorio deseado
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Inserta el nuevo estudiante en la base de datos
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
