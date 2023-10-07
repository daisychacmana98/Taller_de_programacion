<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro de Cliente</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <h1>Registro de Cliente</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validación y obtención de datos del formulario
        $log = $_POST["log"];
        $pas = $_POST["pas"];
        $nom = $_POST["nom"];
        $ape = $_POST["ape"];
        $dir = $_POST["dir"];
        $tel = $_POST["tel"];
        $ema = $_POST["ema"];

        // Realizar la conexión a la base de datos
        $cnx = mysqli_connect("localhost", "root", "12345678", "ventas");

        if (!$cnx) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        // Consulta preparada para insertar en la tabla "cliente"
        $sql = "INSERT INTO CLIENTE(login, password, nombre, apellidos, direccion, telefono, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($cnx, $sql);

        if (!$stmt) {
            die("Error en la consulta: " . mysqli_error($cnx));
        }

        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "sssssss", $log, $pas, $nom, $ape, $dir, $tel, $ema);
        $result = mysqli_stmt_execute($stmt);

        // Comprobar el resultado y mostrar un mensaje
        if ($result) {
            echo "<p class='message'>Registro guardado en la base de datos. Puedes iniciar sesión</p>";
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