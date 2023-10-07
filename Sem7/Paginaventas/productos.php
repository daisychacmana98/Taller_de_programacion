<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLISLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--InstanceBeginEditable name="doctitle"-->
<title>...Sistema Empresarial...</title>

<!--InstanceEndEditable-->
<!--InstanceBeginEditable name="head" -->
<!--InstanceEndEditable -->

<link href="estilogeneral.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="fondo">
<div id="encabezado"><a href="index.php">Inicio</a> - <a href="productos.php">Productos</a> - <a href="clientes.php">Clientes</a> - <a href="contactenos.php">Contactenos</a></div>
<div id="contenidoplantilla">
<div id="zonaizquierda"></div>
<div id="zonaderecha">
<div id="imagenpagina"><!-- InstanceBeginEditable name="imagenpagina"-->imagenpagina<!-- InstanceEndEditable--></div> <div id="contenidopagina"><!-- InstanceBeginEditable name="contenidoprincipal"--> 
<div id="contenidopagina">
    <h1>Productos</h1>

    <h2>Registrar Nuevo Producto</h2>
    <form action="" method="post">
        <label for="nombre_producto">Nombre del Producto:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required><br>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br>

        <input type="submit" value="Registrar Producto">
    </form>

    <h2>Listado de Productos</h2>
    <ul>
        <?php
        // Mostrar productos (código que ya tenías)
        ?>
    </ul>
</div>

<!--InstanceEndEditable-->
	</div>
</div>
</div>
<div id="piepagina">Av. Tomas Valle 3512 Los Olivos Lima - Perú.<br /> Telef: (511)-6365645 Correo: ventas@sistemaempresarial.com</div>
</div>
</body>

<!--InstanceEnd --></html>


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
    echo "Producto registrado con éxito.";
} else {
    echo "Error al registrar producto: " . $conn->error;
}

$conn->close();
?>

=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLISLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--InstanceBeginEditable name="doctitle"-->
<title>...Sistema Empresarial...</title>

<!--InstanceEndEditable-->
<!--InstanceBeginEditable name="head" -->
<!--InstanceEndEditable -->

<link href="estilogeneral.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="fondo">
<div id="encabezado"><a href="index.php">Inicio</a> - <a href="productos.php">Productos</a> - <a href="clientes.php">Clientes</a> - <a href="contactenos.php">Contactenos</a></div>
<div id="contenidoplantilla">
<div id="zonaizquierda"></div>
<div id="zonaderecha">
<div id="imagenpagina"><!-- InstanceBeginEditable name="imagenpagina"-->imagenpagina<!-- InstanceEndEditable--></div> <div id="contenidopagina"><!-- InstanceBeginEditable name="contenidoprincipal"--> 
<div id="contenidopagina">
    <h1>Productos</h1>

    <h2>Registrar Nuevo Producto</h2>
    <form action="" method="post">
        <label for="nombre_producto">Nombre del Producto:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required><br>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br>

        <input type="submit" value="Registrar Producto">
    </form>

    <h2>Listado de Productos</h2>
    <ul>
        <?php
        // Mostrar productos (código que ya tenías)
        ?>
    </ul>
</div>

<!--InstanceEndEditable-->
	</div>
</div>
</div>
<div id="piepagina">Av. Tomas Valle 3512 Los Olivos Lima - Perú.<br /> Telef: (511)-6365645 Correo: ventas@sistemaempresarial.com</div>
</div>
</body>

<!--InstanceEnd --></html>


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
    echo "Producto registrado con éxito.";
} else {
    echo "Error al registrar producto: " . $conn->error;
}

$conn->close();
?>

>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
