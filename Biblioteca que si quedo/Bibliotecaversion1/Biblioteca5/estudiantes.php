<?php
// Conectar a la base de datos "estudiantes"
$conexion = new mysqli("localhost", "root", "12345678", "libros10");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Función para limpiar y escapar datos
function limpiar($dato) {
    return htmlspecialchars(stripslashes(trim($dato)), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Agrega aquí tu lógica de manejo de formularios si es necesario
}

// Consulta SQL para obtener los estudiantes
$sql = "SELECT * FROM estudiantes";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes de la Biblioteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregar FontAwesome -->
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #4CAF50, #00bcd4); /* Fondo degradado */
         }

         h1 {
            text-align: center;
            padding: 20px;
            background: linear-gradient(to right, #aa00ff, #330099); /* Morado degradado para el título */
            color: #fff;
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
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Estilo para las imágenes en miniatura */
        .miniatura {
            max-width: 100px;
            max-height: 100px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .miniatura:hover {
            transform: scale(1.1); /* Zoom al hacer hover */
        }

        /* Estilo para la imagen expandida */
        #imagenExpandida {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro semitransparente */
            justify-content: center;
            align-items: center;
        }

        #imagenExpandida img {
            max-width: 80%;
            max-height: 80%;
        }

        /* Estilos adicionales */
        .destacado {
            color: #00bcd4; /* Color para palabras destacadas */
            font-weight: bold;
        }

        .volver {
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 10px 20px;
            background-color: #00bcd4; /* Color de fondo del botón */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .volver:hover {
            background-color: #007b8e; /* Cambio de color al hacer hover */
        }

        /* Estilos para botones de Editar y Eliminar */
        .btn-editar, .btn-eliminar, .btn-guardar, .btn-cancelar {
            padding: 5px 10px;
            margin-right: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-editar, .btn-eliminar {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        .btn-guardar, .btn-cancelar {
            background-color: #007b8e;
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        .btn-editar:hover {
            background-color: #45a049;
        }

        .btn-eliminar:hover {
            background-color: #e53935;
        }

        .btn-guardar:hover, .btn-cancelar:hover {
            background-color: #005f6b;
        }

        /* Estilos para los campos de edición */
        .editable {
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 3px;
            width: 100%;
        }
		audio {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Estudiantes de la Biblioteca</h1>


    </script>
<!-- El modal -->
<?php include('modal.php'); ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($fila = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><span class='editable'>" . limpiar($fila["id"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["codigo"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["nombre"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["telefono"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["direccion"]) . "</span></td>";
                    echo "<td><img src='" . limpiar($fila["foto"]) . "' class='miniatura' onclick='expandirImagen(\"" . limpiar($fila["foto"]) . "\")'></td>";
                    echo "<td>";
                    echo "<button class='btn-editar' onclick='editarFila(this)'><i class='fas fa-edit'></i> Editar</button>";
                    echo "<button class='btn-eliminar' onclick='eliminarFila(this)'><i class='fas fa-trash-alt'></i> Eliminar</button>";
                    echo "<button class='btn-guardar' style='display: none;' onclick='guardarCambios(this)'><i class='fas fa-save'></i> Guardar</button>";
                    echo "<button class='btn-cancelar' style='display: none;' onclick='cancelarEdicion(this)'><i class='fas fa-times'></i> Cancelar</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No se encontraron libros.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Contenedor para la imagen expandida -->
    <div id="imagenExpandida">
        <img src="" id="imagenExpandidaSrc">
    </div>

    <!-- Agregar un botón para volver a la página anterior -->
    <a href="principal_administrador.php" class="volver">Volver</a>

    <!-- Script para expandir la imagen al hacer clic -->
    <script>
        function expandirImagen(src) {
            var imagenExpandida = document.getElementById("imagenExpandida");
            var imagenExpandidaSrc = document.getElementById("imagenExpandidaSrc");

            imagenExpandida.style.display = "flex"; // Mostrar el contenedor de la imagen expandida
            imagenExpandidaSrc.src = src; // Establecer la fuente de la imagen expandida
        }

        // Cerrar la imagen expandida al hacer clic en ella
        document.getElementById("imagenExpandida").addEventListener("click", function () {
            this.style.display = "none"; // Ocultar el contenedor de la imagen expandida
        });

        // Función para editar una fila
        function editarFila(button) {
            var fila = button.parentNode.parentNode;
            var campos = fila.getElementsByClassName('editable');

            for (var i = 0; i < campos.length; i++) {
                var input = document.createElement('input');
                input.type = 'text';
                input.value = campos[i].textContent;
                campos[i].textContent = '';
                campos[i].appendChild(input);
            }

            var btnEditar = fila.querySelector('.btn-editar');
            var btnEliminar = fila.querySelector('.btn-eliminar');
            var btnGuardar = fila.querySelector('.btn-guardar');
            var btnCancelar = fila.querySelector('.btn-cancelar');

            btnEditar.style.display = 'none';
            btnEliminar.style.display = 'none';
            btnGuardar.style.display = 'inline-block';
            btnCancelar.style.display = 'inline-block';
        }

        // Función para cancelar la edición de una fila
        function cancelarEdicion(button) {
            var fila = button.parentNode.parentNode;
            var campos = fila.getElementsByClassName('editable');

            for (var i = 0; i < campos.length; i++) {
                campos[i].textContent = campos[i].querySelector('input').value;
            }

            var btnEditar = fila.querySelector('.btn-editar');
            var btnEliminar = fila.querySelector('.btn-eliminar');
            var btnGuardar = fila.querySelector('.btn-guardar');
            var btnCancelar = fila.querySelector('.btn-cancelar');

            btnEditar.style.display = 'inline-block';
            btnEliminar.style.display = 'inline-block';
            btnGuardar.style.display = 'none';
            btnCancelar.style.display = 'none';
        }

        // Función para guardar los cambios en una fila
        function guardarCambios(button) {
            var fila = button.parentNode.parentNode;
            var campos = fila.getElementsByClassName('editable');
            var datos = {};

            for (var i = 0; i < campos.length; i++) {
                var input = campos[i].querySelector('input');
                campos[i].textContent = input.value;
                datos['campo' + i] = input.value;
            }

            var btnEditar = fila.querySelector('.btn-editar');
            var btnEliminar = fila.querySelector('.btn-eliminar');
            var btnGuardar = fila.querySelector('.btn-guardar');
            var btnCancelar = fila.querySelector('.btn-cancelar');

            btnEditar.style.display = 'inline-block';
            btnEliminar.style.display = 'inline-block';
            btnGuardar.style.display = 'none';
            btnCancelar.style.display = 'none';
        }

        // Función para eliminar una fila
        function eliminarFila(button) {
            var fila = button.parentNode.parentNode;
            fila.parentNode.removeChild(fila);
        }
    </script>
	<audio autoplay loop>
        <source src="audio/música6.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.
    </audio>
</body>
</html>