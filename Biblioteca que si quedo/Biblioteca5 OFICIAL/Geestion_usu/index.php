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
    <link rel="stylesheet" type="text/css" href="../estilosecundario.css">
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
         }

         h1 {
            text-align: center;
            padding: 20px;
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
            color: #fff;
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

       
        /* Estilos para botones de Editar y Eliminar */
        .btn-editar, .btn-eliminar, .btn-guardar, .btn-cancelar {
            padding: 5px 10px;
            margin-right: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-editar, .btn-eliminar {
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        .btn-guardar, .btn-cancelar {
            color: #fff;
            border: none;
            border-radius: 3px;
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

<h1>Gestión de Estudiantes</h1>
<!-- Agregar estos elementos en tu HTML donde quieras que aparezcan -->
<input type="text" id="busquedaInput" placeholder="Buscar por nombre">
<script>
function buscarEstudiantes() {
    var input = document.getElementById('busquedaInput');
    var filtro = input.value.toLowerCase();

    if (filtro === '') {
        restablecerTabla();
        return;
    }
    var tabla = document.querySelector('table');
    var filas = tabla.getElementsByTagName('tr');

    for (var i = 1; i < filas.length; i++) {
        var nombre = filas[i].getElementsByTagName('td')[2];  // Modificado el índice a 3 para obtener el nombre
        if (nombre) {
            var contenido = nombre.textContent || nombre.innerText;
            if (contenido.toLowerCase().indexOf(filtro) > -1) {
                filas[i].style.display = ''; // Mostrar la fila si coincide con la búsqueda
            } else {
                filas[i].style.display = 'none'; // Ocultar la fila si no coincide con la búsqueda
            }
        }
    }
}


    // Agregar un evento para detectar cuando se borra el contenido del campo de búsqueda
    var busquedaInput = document.getElementById('busquedaInput');
    busquedaInput.addEventListener('input', function () {
        if (busquedaInput.value === '') {
            restablecerTabla(); // Si se borra el contenido, restablecer la tabla
        } else {
            buscarEstudiantes(); // Realizar búsqueda en tiempo real
        }
    });
function restablecerTabla() {
    var tabla = document.querySelector('table');
    var filas = tabla.getElementsByTagName('tr');

    for (var i = 1; i < filas.length; i++) {
        filas[i].style.display = ''; // Mostrar todas las filas
    }
}

</script>
<button onclick="registrarEstudiante()">Registrar Estudiante</button>
<button onclick="exportarCSV()">Exportar a CSV</button>

<script>
    function exportarCSV() {
        // Obtener la tabla de libros
        var tabla = document.querySelector('table');

        // Crear un objeto Blob para guardar los datos en un archivo CSV
        var blob = new Blob([tablaToCSV(tabla)], { type: 'text/csv;charset=utf-8;' });

        // Crear un enlace para descargar el archivo CSV
        var link = document.createElement("a");
        if (link.download !== undefined) { // Verificar compatibilidad
            var url = URL.createObjectURL(blob);
            link.setAttribute("href", url);
            link.setAttribute("download", "estudiantes.csv");
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    }

    function tablaToCSV(table) {
        var rows = table.querySelectorAll('tr');
        var csv = [];
        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll('td,th');
            for (var j = 0; j < cols.length; j++)
                row.push(cols[j].innerText);
            csv.push(row.join(','));
        }
        return csv.join('\n');
    }
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



    <?php include('confirmation_modal.php'); ?>

    <script src="functions.js"></script>
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
    var fila = button.parentElement.parentElement;
    var id = fila.querySelector('.editable').textContent;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Eliminar la fila de la tabla
                fila.remove();
            } else {
                alert("Error al eliminar fila.");
                console.error(xhr.responseText);
            }
        }
    };

    xhr.open("POST", "eliminar.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("ids=" + id);
}



    </script>
</body>
</html>