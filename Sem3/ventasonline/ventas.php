<?php
session_start();

// Conectamos con la base de datos
require_once('config.php');

// Obtener información de los productos desde la base de datos
$sql = "SELECT * FROM producto ORDER BY descripcion";
$result = mysqli_query($conn, $sql);

// Verificar si la consulta fue exitosa
if (!$result) {
    die("Error al obtener productos: " . mysqli_error($conn));
}

$productos = array();

// Almacenar los productos en un array
while ($row = mysqli_fetch_assoc($result)) {
    $productos[] = $row;
}

// Cerrar la conexión
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de ventas</title>
    <link rel="stylesheet" href="formularios.css">
</head>
<script type="text/javascript">
    function enviar() {
        var seleccionado = document.getElementsByName("pro")[0].value;
        var productos = <?php echo json_encode($productos); ?>;
        console.log('Productos:', productos);  // Debugging line

        // Find the selected product and update the fields
        for (var i = 0; i < productos.length; i++) {
            if (productos[i].descripcion === seleccionado) {
                document.getElementsByName("pre")[0].value = productos[i].codigo;
                document.getElementsByName("stk")[0].value = productos[i].stock;
                break;
            }
        }
    }
</script>

<body>
        <marquee bgcolor="#ffa4ff">BIENVENIDO ESTIMADO CLIENTE</marquee>
<br>
    <table align="center">
        <form action="ventas.php" method="post" name="f">
            <tr>
                <th>Producto</th>
                <th>Código</th>
                <th>Stock</th>
                <th>Cantidad a Comprar</th>
                <th rowspan="2"><input type="submit" name="sub" class="btn"value="Agregar"></th>
            </tr>
            <tr>
                <td>
                    <select name="pro" onchange="enviar()" class="my-select">
                        <option value="0">Selecciona el producto a comprar...</option>
                        <?php
                        foreach ($productos as $producto) {
                            $selected = (isset($_POST['pro']) && $_POST['pro'] === $producto['descripcion']) ? 'selected' : '';
                            echo "<option value='" . $producto['descripcion'] . "' $selected>" . $producto['descripcion'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><input type="text" name="pre" size="10" value="" disabled></td>
                <td><input type="text" name="stk" size="10" value="" disabled></td>
                <td><input type="text" name="can" size="10"></td>
            </tr>
        </form>
    </table>
</body>
</html>
