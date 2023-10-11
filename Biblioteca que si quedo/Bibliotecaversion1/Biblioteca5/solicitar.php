<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Libro</title>
	<style>/* Estilos generales */
		body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #73ECDC, #9335BD );
    margin: 0;
    padding: 0;
    color: #333;
    background-attachment: fixed; /* Fija el fondo en su posición original */
    background-repeat: no-repeat; /* Evita la repetición del degradado */
}
header {
    background-color: #1976D2;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1, h2 {
    text-align: center;
    color: #333;
}

form {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #1976D2;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #155FA0;
}

footer {
    text-align: center;
    padding: 10px 0;
    background-color: #1976D2;
    color: #fff;
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
		
		}
		 audio {
            display: none;
        }
</style>
</head>
<body>
    <header>
        <h1>Solicitar Libro</h1>
    </header>
    <main>
        <form action="solicitar.php" method="post" enctype="multipart/form-data">
            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" required><br><br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="especialidad">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad" required><br><br>

            <label for="semestre">Semestre:</label>
            <input type="text" id="semestre" name="semestre" required><br><br>

            <label for="libro">Seleccionar Libro (PDF):</label>
            <input type="file" id="libro" name="libro" accept=".pdf" required><br><br>

            <input type="submit" name="submit" value="Solicitar Libro">
        </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Biblioteca Estudiantil. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (reemplaza con tus propios datos)
    $conexion = new mysqli('localhost', 'root', '12345678', 'libros10');

    if ($conexion->connect_error) {
        die('Error de conexión a la base de datos: ' . $conexion->connect_error);
    }

    // Obtén los datos del formulario
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $especialidad = $_POST['especialidad'];
    $semestre = $_POST['semestre'];
    $libroNombre = $_FILES['libro']['name'];
    $libroTmpName = $_FILES['libro']['tmp_name'];

    // Directorio donde se guardarán los archivos PDF
    $directorio = 'Archivos/';

    // Mover el archivo cargado al directorio de libros
    if (move_uploaded_file($libroTmpName, $directorio . $libroNombre)) {
        // Insertar la información en la base de datos
        $sql = "INSERT INTO solicitudes (codigo, nombre, especialidad, semestre, libro) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('sssss', $codigo, $nombre, $especialidad, $semestre, $libroNombre);

        if ($stmt->execute()) {
            // Solicitud enviada con éxito, muestra un enlace para ver los detalles
            echo '<p>Solicitud enviada con éxito.</p>';
            echo '<a href="solicitar.php?id=' . $stmt->insert_id . '">Ver Detalles de la Solicitud</a>';
        } else {
            echo '<p>Error al enviar la solicitud.</p>';
        }

        // Cerrar la conexión
        $stmt->close();
        $conexion->close();
    } else {
        echo '<p>Error al subir el archivo del libro.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Solicitud</title>
    <link rel="stylesheet" href="styles.css"> <!-- Agrega tu CSS personalizado aquí -->
</head>
<body>
    <header>
        <h1>Detalles de Solicitud</h1>
    </header>
    <main>
        <?php
        // Conexión a la base de datos (reemplaza con tus propios datos)
        $conexion = new mysqli('localhost', 'root', '12345678', 'libros10');

        if ($conexion->connect_error) {
            die('Error de conexión a la base de datos: ' . $conexion->connect_error);
        }

        // Obtén el ID de la solicitud desde la URL
        $idSolicitud = $_GET['id'];

        // Consulta para obtener los detalles de la solicitud
        $sql = "SELECT codigo, nombre, especialidad, semestre, libro FROM solicitudes WHERE id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('i', $idSolicitud);

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            $datos = $resultado->fetch_assoc();
        } else {
            die('Error al obtener los detalles de la solicitud: ' . $conexion->error);
        }

        // Cerrar la conexión
        $stmt->close();
        $conexion->close();
        ?>

        <h2>Información del Estudiante</h2>
        <p><strong>Código:</strong> <?php echo htmlspecialchars($datos['codigo']); ?></p>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($datos['nombre']); ?></p>
        <p><strong>Especialidad:</strong> <?php echo htmlspecialchars($datos['especialidad']); ?></p>
        <p><strong>Semestre:</strong> <?php echo htmlspecialchars($datos['semestre']); ?></p>
        
        <h2>Libro Solicitado</h2>
        <p><strong>Nombre del Libro:</strong> <?php echo htmlspecialchars($datos['libro']); ?></p>
        <p><strong>Archivo PDF:</strong> <a href="Archivos/<?php echo htmlspecialchars($datos['libro']); ?>" target="_blank">Ver PDF</a></p>
    </main>
	<!-- Agregar un botón para volver a la página anterior -->
    <a href="principal_estudiante.php" class="volver">Volver</a>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Biblioteca Estudiantil. Todos los derechos reservados.</p>
    </footer>
	<audio autoplay loop>
        <source src="audio/música14.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
    </audio>
</body>
</html>