<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro de Cliente</title>
    <link rel="stylesheet" href="formularios.css" type="text/css">
</head>
<body>
    <h2>Compra exitosa</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validación y obtención de datos del formulario
        $log = $_POST["log"];
        $nventa = $_POST["nventa"];
        $prod = $_POST["prod"];
        $precio = $_POST["precio"];
        $cant = $_POST["cant"];
        $tot = $_POST["tot"];
        $fec = $_POST["fecha"];

// Conectamos con la base de datos
require_once('config.php');  die("Error de conexión: " . mysqli_connect_error());
        }

        // Consulta preparada para insertar en la tabla "cliente"
        $sql = "INSERT INTO VENTA (numero_venta, fecha, total, login) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($cnx, $sql);

        if (!$stmt) {
            die("Error en la consulta: " . mysqli_error($cnx));
        }

        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "ssss", $nventa, $fec, $tot, $log);
        $result = mysqli_stmt_execute($stmt);

        // Comprobar el resultado y mostrar un mensaje
        if ($result) {
            echo "<p class='message'>Compra realizada</p>";
        } else {
            echo "<p class='message'>Error al guardar: " . mysqli_stmt_error($stmt) . "</p>";
        }

        // Cerrar la conexión y el statement
        mysqli_stmt_close($stmt);
        mysqli_close($cnx);
    }
    ?>
		
</body>
</html>