<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to bottom, #3399ff, #6633ff);
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h1 {
        font-size: 36px;
        color: #fff;
        margin-top: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .container {
        background: linear-gradient(to bottom, #ffffff, #f2f2f2);
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    label {
        font-size: 18px;
        color: #333;
    }

    input[type="text"], input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
    }

    input[type="submit"] {
        background: linear-gradient(to bottom, #2B488F, #1c306d);
        color: #fff;
        border: none;
        padding: 15px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    input[type="submit"]:hover {
        background: linear-gradient(to bottom, #e64a19, #d33414);
    }
</style>

</head>
<body>
    <h1>Registro de estudiantes</h1>
    <div class="container">
        <form method="post" action="registrar.php" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono"><br>

            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion"><br>

            <label for="foto">Subir Foto:</label>
            <input type="file" name="foto" accept="image/*"><br>

            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
	
	<?php
// Verificar si el formulario se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "libros10";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recopilar datos del formulario
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];

    // Procesar la imagen subida
    $foto = "";
    if ($_FILES["foto"]["error"] == 0) {
        $target_dir = "ruta/"; // Directorio donde se almacenarán las imágenes
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);

        // Mover la imagen al directorio de carga
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            $foto = $target_file;
        } else {
            echo "Error al subir la imagen.";
        }
    }

    // Preparar la consulta SQL para insertar datos
    $sql = "INSERT INTO registro (nombre, telefono, direccion, foto) VALUES ('$nombre', '$telefono', '$direccion', '$foto')";

    if ($conn->query($sql) === TRUE) {
        echo "Estudiante registrado con éxito.";
    } else {
        echo "Error al registrar al estudiante: " . $conn->error;
    }

    $conn->close();
}
?>

</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualización de Registros</title>
<style>
    /* Estilos para la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
        background: linear-gradient(to bottom, #f9f9f9, #e1e1e1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        background: linear-gradient(to bottom, #ffffff, #f7f7f7);
    }

    th {
        background: linear-gradient(to bottom, #f5f5f5, #e1e1e1);
        font-weight: bold;
    }

    /* Estilos para las imágenes */
    img {
        max-width: 80px;
        max-height: 80px;
        display: block;
        margin: 0 auto;
        border: 2px solid #fff;
        border-radius: 50%;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease-in-out;
    }

    img:hover {
        transform: scale(1.1);
    }
	
	 .volver {
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 10px 20px;
            background: linear-gradient(to right, #00bcd4, #007b8e); /* Efecto degradado en el botón */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Transición de color al hacer hover */
        }

        .volver:hover {
            background: linear-gradient(to right, #007b8e, #005f6b); /* Cambio de color al hacer hover */
        }
	audio {
            display: none;
        }
</style>
</head><br><br><br>
<body>
    <h1>Estudiantes registrados</h1>

    <?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "libros10";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para obtener los estudiantes registrados
    $sql = "SELECT id, nombre, telefono, direccion, foto FROM registro";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Nombre</th>';
        echo '<th>Teléfono</th>';
        echo '<th>Dirección</th>';
        echo '<th>Foto</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["nombre"] . '</td>';
            echo '<td>' . $row["telefono"] . '</td>';
            echo '<td>' . $row["direccion"] . '</td>';
            echo '<td><img src="' . $row["foto"] . '" alt="Foto"></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No se encontraron estudiantes registrados.';
    }

    $conn->close();
    ?>
	 <!-- Agregar un botón para volver a la página anterior -->
    <a href="principal_administrador.php" class="volver">Volver</a>
	<audio autoplay loop>
        <source src="audio/música8.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.
    </audio>
</body>
</html>