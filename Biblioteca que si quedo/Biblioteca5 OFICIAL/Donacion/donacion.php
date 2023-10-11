<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar Libro</title>
    <link rel="stylesheet" type="text/css" href="../estilosecundario.css">
</head>
<body>
    <header>
        <h1>Donación de Libros</h1>
    </header>

    <main>
<?php
include('../config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreEstudiante = mysqli_real_escape_string($conn, $_POST['nombre_estudiante']);
    $tituloLibro = mysqli_real_escape_string($conn, $_POST['titulo_libro']);
    $autorLibro = mysqli_real_escape_string($conn, $_POST['autor_libro']);
    $archivoNombre = mysqli_real_escape_string($conn, $_FILES['archivo_pdf']['name']);
    $archivoTmpName = $_FILES['archivo_pdf']['tmp_name'];

    $directorio = '../Archivos/';

    // Move the uploaded file to the directory
    if (move_uploaded_file($archivoTmpName, $directorio . $archivoNombre)) {
        // File moved successfully

        // Insert information into the database
        $sql = "INSERT INTO donaciones (nombre_estudiante, titulo_libro, autor_libro, archivo_pdf) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $nombreEstudiante, $tituloLibro, $autorLibro, $archivoNombre);

        if ($stmt->execute()) {
            // Solicitud enviada con éxito, muestra un enlace para ver los detalles
            echo '<p>Solicitud enviada con éxito.</p>';
            echo '<a href="donacion.php?id=' . $stmt->insert_id . '">Ver Detalles de la Solicitud</a>';
        } else {
            echo '<p>Error al enviar la solicitud.</p>';
        }

        // Cerrar la conexión
        $stmt->close();
        $conn->close();  // Aquí se utiliza $conn para cerrar la conexión
    } else {
        echo '<p>Error al subir el archivo del libro.</p>';
    }
}
?>




        <form id="donarForm"action="" method="post" enctype="multipart/form-data">
    <label for="nombre_estudiante">Nombre del Estudiante:</label>
            <input type="text" id="nombre_estudiante" name="nombre_estudiante" required><br><br>

            <label for="titulo_libro">Título del Libro:</label>
            <input type="text" id="titulo_libro" name="titulo_libro" required><br><br>

            <label for="autor_libro">Autor del Libro:</label>
            <input type="text" id="autor_libro" name="autor_libro" required><br><br>

            <label for="archivo_pdf">Seleccionar Libro (PDF):</label>
            <input type="file" id="archivo_pdf" name="archivo_pdf" accept=".pdf" required><br><br>

<input type="submit" value="Donar Libro" onclick="enviarFormulario(event)">
        </form>
        </form>

         <div id="myModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div id="mensajeDonacion"></div>
            </div>
        </div>

        <script>
       function enviarFormulario(event) {
    event.preventDefault();

    var form = document.getElementById('donarForm');
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'procesar.php', true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('mensajeDonacion').innerHTML = xhr.responseText;
            document.getElementById('myModal').style.display = 'block';
        }
    };

    xhr.send(formData);
}

            function closeModal() {
                document.getElementById('myModal').style.display = 'none';
            }
        </script>

    </main>
</body>
</html>
