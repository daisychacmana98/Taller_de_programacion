<?php
include('config.php');

// Nombre de la página actual
$page_name = $_SERVER['REQUEST_URI'];

// Verificar si la página ya existe en la base de datos
$sql = "SELECT * FROM page_views WHERE page_name = '$page_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // La página ya existe en la base de datos, actualiza el recuento
    $row = $result->fetch_assoc();
    $view_count = $row['view_count'] + 1;
    $sql = "UPDATE page_views SET view_count = $view_count WHERE page_name = '$page_name'";
    $conn->query($sql);
} else {
    // La página no existe en la base de datos, crea un nuevo registro
    $sql = "INSERT INTO page_views (page_name, view_count) VALUES ('$page_name', 1)";
    $conn->query($sql);
    $view_count = 1;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizaciones</title>
     <link rel="stylesheet" type="text/css" href="estilosecundario.css">
</head>
<body>
<h2>¡Bienvenido(a)!</h2>
<p>Esta página Biblioteca - Gilda Liliana Ballivian Rosado ha sido vista <?php echo $view_count; ?> veces.</p>
</body>
</html>

