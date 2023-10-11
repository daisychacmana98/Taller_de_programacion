<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar Libro</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #00aaff, #ff00aa);
        color: #333;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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

    h1 {
        text-align: center;
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
            background: linear-gradient(to right, #70DC45, #007b8e); /* Efecto degradado en el botón */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Transición de color al hacer hover */
        }

        .volver:hover {
            background: linear-gradient(to right, #D63518, #005f6b); /* Cambio de color al hacer hover */
        }
	audio {
            display: none;
        }
</style>
<body>
    <header>
        <h1>Donación de Libros</h1>
    </header>
    <main>
        <?php
        // Verifica si se ha enviado un formulario de donación
        if (isset($_POST['submit'])) {
            // Conexión a la base de datos (reemplaza con tus propios datos)
            $conexion = new mysqli('localhost', 'root', '12345678', 'libros10');

            if ($conexion->connect_error) {
                die('Error de conexión a la base de datos: ' . $conexion->connect_error);
            }

            // Obtén los datos del formulario
            $nombreEstudiante = $_POST['nombre_estudiante'];
            $tituloLibro = $_POST['titulo_libro'];
            $autorLibro = $_POST['autor_libro'];
            $archivoNombre = $_FILES['archivo_pdf']['name'];
            $archivoTmpName = $_FILES['archivo_pdf']['tmp_name'];

            // Directorio donde se guardarán los archivos
            $directorio = 'Archivos/';

            // Mover el archivo cargado al directorio de uploads
            if (move_uploaded_file($archivoTmpName, $directorio . $archivoNombre)) {
                // Insertar la información en la base de datos
                $sql = "INSERT INTO donaciones (nombre_estudiante, titulo_libro, autor_libro, archivo_pdf) VALUES (?, ?, ?, ?)";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param('ssss', $nombreEstudiante, $tituloLibro, $autorLibro, $archivoNombre);

                if ($stmt->execute()) {
                    // Obtener el ID del último registro insertado
                    $idEstudiante = $stmt->insert_id;
                    echo '<p>Libro donado con éxito.</p>';
                    
                    // Mostrar los datos del estudiante
                    echo '<h2>Datos del Estudiante</h2>';
                    echo '<p><strong>Nombre del Estudiante:</strong> ' . htmlspecialchars($nombreEstudiante) . '</p>';
                    echo '<h2>Libro Donado</h2>';
                    echo '<p><strong>Título del Libro:</strong> ' . htmlspecialchars($tituloLibro) . '</p>';
                    echo '<p><strong>Autor del Libro:</strong> ' . htmlspecialchars($autorLibro) . '</p>';
                    echo '<p><strong>ID del Estudiante:</strong> ' . $idEstudiante . '</p>';
                } else {
                    echo '<p>Error al donar el libro.</p>';
                }

                // Cerrar la conexión
                $stmt->close();
                $conexion->close();
            } else {
                echo '<p>Error al subir el archivo.</p>';
            }
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nombre_estudiante">Nombre del Estudiante:</label>
            <input type="text" id="nombre_estudiante" name="nombre_estudiante" required><br><br>

            <label for="titulo_libro">Título del Libro:</label>
            <input type="text" id="titulo_libro" name="titulo_libro" required><br><br>

            <label for="autor_libro">Autor del Libro:</label>
            <input type="text" id="autor_libro" name="autor_libro" required><br><br>

            <label for="archivo_pdf">Seleccionar Libro (PDF):</label>
            <input type="file" id="archivo_pdf" name="archivo_pdf" accept=".pdf" required><br><br>

            <input type="submit" name="submit" value="Donar Libro">
        </form>
    </main>
	<!-- Agregar un botón para volver a la página anterior -->
    <a href="principal_estudiante.php" class="volver">Volver</a>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Biblioteca Estudiantil. Todos los derechos reservados.</p>
    </footer>
	<audio autoplay loop>
        <source src="audio/música15.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>