<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Libro</title>
    <!-- Agrega tus estilos aquí si es necesario -->

    <style>
        /* Estilos para la lista desplegable */
select {
    width: 85%; /* Ancho del 100% para llenar el contenedor */
    padding: 8px; /* Espacio alrededor del texto */
    border: 1px solid #ccc; /* Borde */
    border-radius: 5px; /* Bordes redondeados */
    margin: 5px;
}

/* Estilos para las opciones en la lista desplegable */
select option {
    padding: 10px; /* Espacio alrededor del texto en las opciones */
}

        .modal-content {
    background-color: #ffffff;
    padding: 10px;
    border-radius: 5px;
    margin: 0 auto;
    margin-top: -50px;    
    width: 40%;
        height: 700px;
}

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
        <h2>Registrar Libro</h2>

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor"><br>

        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial"><br>

        <label for="estado">Estado:</label>
<select name="estado">
   <option value="Disponible">Disponible</option> 
   <option value="No disponible">No disponible</option> 
   <option value="Prestado">Prestado</option>
</select>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion"><br>

        <label for="foto">Subir Foto:</label>
        <input type="file" name="foto" accept="image/*"><br>

        <input type="submit" value="Registrar">
        <br> <br>
    </form>

</div>
<script src="functions.js"></script>
<script>
    // Obtén el formulario
    var form = document.querySelector('form');

    // Agrega un evento de escucha al formulario para mostrar el mensaje de confirmación
    form.addEventListener('submit', function () {
        alert('Libro registrado con éxito!');
    });
</script>
</body>
</html>

<?php

        include('../config.php');


$response = array();  // Inicializa un arreglo para la respuesta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editorial = $_POST["editorial"];
    $estado = $_POST["estado"];
    $descripcion = $_POST["descripcion"];

    // Handle file upload
    $target_dir = "../ruta/";  // Cambia esto a tu directorio deseado
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Inserta un nuevo libro en la base de datos
        $sql = "INSERT INTO libros (titulo, autor, editorial, estado, descripcion, foto) 
                VALUES ('$titulo', '$autor', '$editorial', '$estado', '$descripcion', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            $response['success'] = true;
            $response['message'] = 'Libro registrado con éxito.';
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al registrar el libro: ' . $conn->error;
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