<html>
<head>
    <meta charset="utf-8">
    <title>Registro de Alumno</title>
    <link rel="stylesheet" href="styles.css" type="text/css">

</head>
<body>
    <div class="container">
		    <h1>Registro de Alumno</h1>

		
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validación y obtención de datos del formulario

			$nombre = $_POST["nombre"];
			$txtcorreo = $_POST["txtcorreo"];
			$txttelefono = $_POST["txttelefono"];
			$txtcontrasena = $_POST["txtcontrasena"];
			$txtfecha = $_POST["txtfecha"];

        // Realizar la conexión a la base de datos
        $cnx = mysqli_connect("localhost", "root", "12345678", "register");

        if (!$cnx) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        // Consulta preparada para insertar en la tabla "cliente"
        $sql = "INSERT INTO registeri(name, email, phone, password, fecha) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($cnx, $sql);

        if (!$stmt) {
            die("Error en la consulta: " . mysqli_error($cnx));
        }

        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "sssss", $nombre, $txtcorreo, $txttelefono, $txtcontrasena, $txtfecha);
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
			<a href="index.php">Volver</a>
		</div>
	<br>

		
</body>
</html>