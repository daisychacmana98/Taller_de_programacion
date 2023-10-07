<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>...Sistema Empresarial...</title>
	<link rel="stylesheet" href="estilogeneral.css">
</head>

<body>
	<div id="fondo">
	<div id="encabezado"><a href="index.php">Inicio</a>-<a href="clientes.php">Clientes</a>-<a href="productos.php">Productos</a>-<a href="contactenos.php">Contactenos</a></div>
		<div id="contenidoplantilla"></div>
		<div id="zonaizquierda"></div>
		<div id="zonaderecha">
		<div id="imagenpagina">ImagenPagina</div>
			<div id="contenidopagina">
			<h1>Clientes</h1>
<div id="contenidopagina">
    <h1>Clientes</h1>

    <h2>Registrar Nuevo Cliente</h2>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br>

        <input type="submit" value="Registrar Cliente">
    </form>

    <h2>Listado de Clientes</h2>
    <ul>
        <?php
        // Mostrar clientes (código que ya tenías)
        ?>
    </ul>
</div>


			</div>
		</div>
		<div id="piepagina">Av.Tomas Valle 3512 Los Olivos Lima-Peru<br/>
		Tele:(511)-6365645 Correo:ventas@sistemaempresarial.com</div>
	</div>
</body>
</html>

<?php
include("config.php");  // Incluye el archivo con la configuración de la conexión

// Obtén los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

// Query para insertar un nuevo cliente
$sql = "INSERT INTO Clientes (Nombre, Apellido, Direccion, Telefono) VALUES ('$nombre', '$apellido', '$direccion', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente registrado con éxito.";
} else {
    echo "Error al registrar al cliente: " . $conn->error;
}

$conn->close();
?>
