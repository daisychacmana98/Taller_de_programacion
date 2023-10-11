<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Libro</title>
    <link rel="stylesheet" type="text/css" href="../estilosecundario.css">
</head>
<body>
    <header>
        <h1>Solicitar Libro</h1>
    </header>

    <main>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluye el archivo de configuración para obtener la conexión a la base de datos
    include('../config.php');

    // Obtén los datos del formulario
    $codigo = limpiar($_POST['codigo'], $conn);
    $nombre = limpiar($_POST['nombre'], $conn);
    $especialidad = limpiar($_POST['especialidad'], $conn);
    $semestre = limpiar($_POST['semestre'], $conn);
    $libroNombre = $_FILES['libro']['name'];
    $libroTmpName = $_FILES['libro']['tmp_name'];

    // Directorio donde se guardarán los archivos PDF
    $directorio = '../Archivos/';

    // Mover el archivo cargado al directorio de libros
    if (move_uploaded_file($libroTmpName, $directorio . $libroNombre)) {
        // Insertar la información en la base de datos
        $sql = "INSERT INTO solicitudes (codigo, nombre, especialidad, semestre, libro) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
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
        $conn->close();
    } else {
        echo '<p>Error al subir el archivo del libro.</p>';
    }
}
?>


        <form action="" method="post" enctype="multipart/form-data">
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

            <input type="submit" value="Solicitar Libro" onclick="enviarFormulario(event)">

        </form>

        <div id="myModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <div id="mensajeDonacion"><?php echo $mensaje; ?></div>
            </div>
        </div>

        <script>
            function enviarFormulario(event) {
                event.preventDefault();

                var form = document.forms[0];
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
