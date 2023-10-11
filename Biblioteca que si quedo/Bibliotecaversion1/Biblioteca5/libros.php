<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros de la Biblioteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregar FontAwesome -->
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background: linear-gradient(to right, #00bcd4, #007b8e); /* Efecto degradado en el título */
            color: #fff;
            font-size: 32px; /* Tamaño de fuente más grande */
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
            background: linear-gradient(to right, #00bcd4, #007b8e); /* Efecto degradado en el botón */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Transición de color al hacer hover */
        }

        .volver:hover {
            background: linear-gradient(to right, #007b8e, #005f6b); /* Cambio de color al hacer hover */
        }

        /* Estilos para botones de Editar y Eliminar */
        .btn-editar, .btn-eliminar, .btn-guardar, .btn-cancelar {
            padding: 5px 10px;
            margin-right: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-editar, .btn-eliminar {
            background: linear-gradient(to right, #4CAF50, #388E3C); /* Efecto degradado en los botones */
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        .btn-guardar, .btn-cancelar {
            background: linear-gradient(to right, #007b8e, #005f6b); /* Efecto degradado en los botones */
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        .btn-editar:hover {
            background: linear-gradient(to right, #45a049, #357D36); /* Cambio de color al hacer hover */
        }

        .btn-eliminar:hover {
            background: linear-gradient(to right, #e53935, #C62828); /* Cambio de color al hacer hover */
        }

        .btn-guardar:hover, .btn-cancelar:hover {
            background: linear-gradient(to right, #005f6b, #004C57); /* Cambio de color al hacer hover */
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
    <h1>Libros en la Biblioteca</h1>
    <table>
        <thead>
            <tr>
            <tr>     <th>Marcar <input type="checkbox" id="checkAll" onchange="checkAll(this)"></th>
                            <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conectar a la base de datos
            $conexion = new mysqli("localhost", "root", "12345678", "libros10");

            // Verificar la conexión
            if ($conexion->connect_error) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Función para limpiar y escapar datos
            function limpiar($dato) {
                return htmlspecialchars(stripslashes(trim($dato)), ENT_QUOTES, 'UTF-8');
            }

            // Consulta SQL para obtener los libros
            $sql = "SELECT * FROM libros";
            $result = $conexion->query($sql);

            if ($result->num_rows > 0) {
                while ($fila = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><span class='editable'>" . limpiar($fila["titulo"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["autor"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["editorial"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["estado"]) . "</span></td>";
                    echo "<td><span class='editable'>" . limpiar($fila["descripcion"]) . "</span></td>";
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

            // Cerrar la conexión
            $conexion->close();
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

            imagenExpandida.style.display = "flex"; // Muestra el contenedor de la imagen expandida
            imagenExpandidaSrc.src = src; // Establece la fuente de la imagen expandida
        }

        // Cierra la imagen expandida al hacer clic en ella
        document.getElementById("imagenExpandida").addEventListener("click", function () {
            this.style.display = "none"; // Oculta el contenedor de la imagen expandida
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
        <source src="audio/música4.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.
    </audio>
</body>
</html>