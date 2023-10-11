<?php
include('config.php');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Función para escapar y limpiar datos
function limpiarDato($dato) {
    return htmlspecialchars(strip_tags($dato));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["editar"])) {
        $idEditar = limpiarDato($_POST["editar"]);
        // Marcar la fila como editando en la base de datos si es necesario
        $sqlEditar = "UPDATE cursos SET Editando = 1 WHERE ID = $idEditar";
        if ($conexion->query($sqlEditar) === TRUE) {
            // La fila se está editando
        } else {
            echo "Error al editar la fila: " . $conexion->error;
        }
    } elseif (isset($_POST["guardar"])) {
        $idGuardar = limpiarDato($_POST["guardar"]);
        $nombre = limpiarDato($_POST["nombre"]);
        $estado = limpiarDato($_POST["estado"]);
        // Actualizar la fila en la base de datos
        $sqlGuardar = "UPDATE cursos SET Nombre = '$nombre', Estado = '$estado', Editando = 0 WHERE ID = $idGuardar";
        if ($conexion->query($sqlGuardar) === TRUE) {
            // La fila se ha guardado con éxito
        } else {
            echo "Error al guardar la fila: " . $conexion->error;
        }
    }
}

// Consulta SQL para obtener los cursos (agregar paginación)
$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$porPagina = 5; // Número de cursos por página
$inicio = ($paginaActual - 1) * $porPagina;

$sql = "SELECT * FROM cursos LIMIT $inicio, $porPagina";
$result = $conexion->query($sql);

// Calcular el número total de páginas
$totalFilas = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM cursos"));
$totalPaginas = ceil($totalFilas / $porPagina);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #D1F269 ;
            margin: 0;
            padding: 0;
			color: #333; /* Añadí un color de texto para mayor legibilidad */
        }

        h1 {
            text-align: center;
            padding: 20px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: #fff;
            margin: 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            text-align: left;
            padding: 10px;
        }

        th {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Estilo para los botones de editar y guardar */
        .editar, .guardar {
            padding: 5px 10px;
            background: linear-gradient(45deg, #00bcd4, #007b8e);
            color: #fff;
            border: none;
            cursor: pointer;
			border-radius: 3px;
        }

        .editar:hover, .guardar:hover {
            background: linear-gradient(45deg, #007b8e, #005f6b);
        }

        /* Estilo para los campos de entrada en modo de edición */
        .editarInput {
			 width: 100%;
             padding: 5px;
             border: 1px solid #ddd;
             border-radius: 3px;     
        }

        /* Estilo para las imágenes */
        .miniatura {
            max-width: 100px;
            max-height: 100px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .miniatura:hover {
            transform: scale(1.1);
        }

        /* Estilo para la imagen expandida */
        #imagenExpandida {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        #imagenExpandida img {
            max-width: 80%;
            max-height: 80%;
        }

        /* Estilo para la paginación */
        .paginacion {
            text-align: center;
            margin-top: 20px;
        }

        .paginacion a {
            color: #00bcd4;
            text-decoration: none;
            padding: 5px 10px;
            margin: 0 5px;
            border: 1px solid #00bcd4;
            border-radius: 3px;
        }

        .paginacion a:hover {
            background-color: #00bcd4;
            color: #fff;
        }

        /* Estilo para el botón de Regresar */
        #regresarBtn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto;
        }

        #regresarBtn:hover {
            background-color: #0056b3;
        }
	   
        audio {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Cursos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Foto</th> <!-- Agregamos la columna de la foto -->
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($fila = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["ID"] . "</td>";
                    if ($fila["Editando"] == 1) {
                        echo "<td><input type='text' class='editarInput' name='nombre' value='" . $fila["Nombre"] . "'></td>";
                        echo "<td><input type='text' class='editarInput' name='estado' value='" . $fila["Estado"] . "'></td>";
                        echo "<td><img src='" . $fila["Foto"] . "' class='miniatura' onclick='expandirImagen(\"" . $fila["Foto"] . "\")'></td>";
                    } else {
                        echo "<td>" . $fila["Nombre"] . "</td>";
                        echo "<td>" . $fila["Estado"] . "</td>";
                        echo "<td><img src='" . $fila["Foto"] . "' class='miniatura' onclick='expandirImagen(\"" . $fila["Foto"] . "\")'></td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No se encontraron cursos.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Contenedor para la imagen expandida -->
    <div id="imagenExpandida">
        <img src="" id="imagenExpandidaSrc">
    </div>

    <!-- Paginación -->
    <div class="paginacion">
        <?php
        for ($i = 1; $i <= $totalPaginas; $i++) {
            echo "<a href='cursos.php?pagina=$i'>$i</a>";
        }
        ?>
    </div><br>

    <!-- Botón de Regresar -->
    <button id="regresarBtn">Regresar</button>

    <script>
        // JavaScript para redirigir a principal_administrador.php al hacer clic en el botón "Regresar"
        document.getElementById("regresarBtn").addEventListener("click", function () {
            window.location.href = "principal_estudiante.php";
        });

        // JavaScript para la funcionalidad de editar y guardar aquí
        function expandirImagen(src) {
            var imagenExpandida = document.getElementById("imagenExpandida");
            var imagenExpandidaSrc = document.getElementById("imagenExpandidaSrc");

            imagenExpandida.style.display = "flex";
            imagenExpandidaSrc.src = src;
        }

        document.getElementById("imagenExpandida").addEventListener("click", function () {
            this.style.display = "none";
        });
    </script>
	<audio autoplay loop>
        <source src="audio/música12.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
    </audio>
</body>
</html>