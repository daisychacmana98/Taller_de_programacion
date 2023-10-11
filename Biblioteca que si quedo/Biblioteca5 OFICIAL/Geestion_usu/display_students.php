
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
$sql = "SELECT id, codigo, nombre, telefono, direccion, foto FROM estudiantes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td><input type="checkbox" class="checkbox" data-id="' . $row["id"] . '"></td>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["codigo"] . '</td>';
        echo '<td>' . $row["nombre"] . '</td>';
        echo '<td>' . $row["telefono"] . '</td>';
        echo '<td>' . $row["direccion"] . '</td>';
        echo '<td><img src="' . $row["foto"] . '" alt="Foto" width="80"></td>';
        echo '<td>';


        echo "<button class='btn-editar' onclick='editarFila(this)'><i class='fas fa-edit'></i></button>";
                    echo "<button class='btn-eliminar' onclick='eliminarFila(this)'><i class='fas fa-trash-alt'></i> Eliminar</button>";

        echo "<button class='btn-guardar' style='display: none;' onclick='guardarCambios(this)'><i class='fas fa-save'></i> Guardar</button>";
        echo "<button class='btn-cancelar' style='display: none;' onclick='cancelarEdicion(this)'><i class='fas fa-times'></i> Cancelar</button>";
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="8">No se encontraron estudiantes registrados.</td></tr>';
}

$conn->close();
?>
