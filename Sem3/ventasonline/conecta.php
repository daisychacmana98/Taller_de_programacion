<<<<<<< HEAD
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

    // Verificar que los campos no estén vacíos
    if (empty($log) || empty($pas) || empty($nom) || empty($ape) || empty($dir) || empty($tel) || empty($ema)) {
        echo "<script>alert('Por favor, completa todos los campos.');</script>";
        // Aquí puedes redirigir o realizar alguna acción adicional si lo necesitas
        exit();
    }

    // Conectamos con la base de datos
    require_once('config.php');

    // Consulta preparada para insertar en la tabla "cliente"
    $sql = "INSERT INTO CLIENTE(login, password, nombre, apellidos, direccion, telefono, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    // Vincular parámetros y ejecutar la consulta
    mysqli_stmt_bind_param($stmt, "sssssss", $log, $pas, $nom, $ape, $dir, $tel, $ema);
    $result = mysqli_stmt_execute($stmt);

    // Comprobar el resultado y mostrar un mensaje
    if ($result) {
        echo "<script>alert('Registro exitoso. Puedes iniciar sesión.');</script>";
    } else {
        echo "<script>alert('Error al guardar.');</script>";
    }

    // Cerrar el statement
    mysqli_stmt_close($stmt);
    // Cerrar la conexión
    mysqli_close($conn);
}
?>
=======
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

    // Verificar que los campos no estén vacíos
    if (empty($log) || empty($pas) || empty($nom) || empty($ape) || empty($dir) || empty($tel) || empty($ema)) {
        echo "<script>alert('Por favor, completa todos los campos.');</script>";
        // Aquí puedes redirigir o realizar alguna acción adicional si lo necesitas
        exit();
    }

    // Conectamos con la base de datos
    require_once('config.php');

    // Consulta preparada para insertar en la tabla "cliente"
    $sql = "INSERT INTO CLIENTE(login, password, nombre, apellidos, direccion, telefono, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    // Vincular parámetros y ejecutar la consulta
    mysqli_stmt_bind_param($stmt, "sssssss", $log, $pas, $nom, $ape, $dir, $tel, $ema);
    $result = mysqli_stmt_execute($stmt);

    // Comprobar el resultado y mostrar un mensaje
    if ($result) {
        echo "<script>alert('Registro exitoso. Puedes iniciar sesión.');</script>";
    } else {
        echo "<script>alert('Error al guardar.');</script>";
    }

    // Cerrar el statement
    mysqli_stmt_close($stmt);
    // Cerrar la conexión
    mysqli_close($conn);
}
?>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
