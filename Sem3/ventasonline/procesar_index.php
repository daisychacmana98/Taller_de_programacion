<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $log = $_POST["log"];
    $pas = $_POST["pass"]; 

    // Conectamos con la base de datos
    require_once('config.php');
    
    // Establecemos la conexión usando la variable $conn
    $result = $conn->query("SELECT * FROM CLIENTE WHERE login='$log' AND password='$pas'");

    // Comprobar el resultado y mostrar un mensaje en caso de error
    if (!$result || $result->num_rows === 0) {
        echo "<script>alert('Usuario o contraseña incorrectos. Por favor, inténtelo de nuevo.');</script>";
        echo "<script>window.location.href = 'default.htm';</script>";

        exit();
    }

    // Si el usuario está autenticado, almacenar en la sesión
    $_SESSION['log'] = $log;

    // Iniciamos sesión para el cliente
    session_start();

    // Registramos la variable 'log'
    $_SESSION['log'] = $log;  // Reemplaza 'valor_del_log' con el valor correspondiente

    // Registramos la variable 'registrado'
    $_SESSION['registrado'] = 'SI';

    // Redirigimos al cliente a la página de ventas
    header("Location: ventas.php");
    exit();
}
?>
