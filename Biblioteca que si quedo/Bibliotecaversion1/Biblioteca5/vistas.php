<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "libros10";

// Nombre de la página actual
$page_name = $_SERVER['REQUEST_URI'];

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

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
    <style>
        /* Estilos generales para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Estilos para el encabezado */
        h1 {
            font-size: 50px; /* Tamaño de letra grande */
            color: #333; /* Color de texto oscuro */
            margin-top: 100px; /* Espacio superior */
        }

        /* Estilos para el párrafo */
        p {
            font-size: 40px; /* Tamaño de letra grande */
            color: #666; /* Color de texto más claro */
            margin: 20px 0; /* Márgenes superior e inferior */
        }
		
		.return-button {
            background-color: #2B488F;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Quita la decoración de enlace */
            display: inline-block; /* Hacer que el botón sea un elemento en línea */
         }

        .return-button:hover {
            background-color: #e64a19;
         }
		audio {
            display: none;
        }
    </style>
</head>
<body>
    <h1>¡Bienvenido(a)!</h1>
    <p>Esta página Biblioteca - Gilda Liliana Ballivian Rosado ha sido vista <?php echo $view_count; ?> veces.</p>
	<a href="principal_administrador.php" class="return-button">Volver</a>
</body>
	<audio autoplay loop>
        <source src="audio/música7.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.
    </audio>
</html>