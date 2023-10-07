<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLISLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--InstanceBeginEditable name="doctitle"-->
<title>...Sistema Empresarial...</title>
<!--InstanceEndEditable-->
<!--InstanceBeginEditable name="head" -->
<!--InstanceEndEditable-->
<link href="estilogeneral.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="fondo">
<div id="encabezado"><a href="index.php">Inicio</a> - <a href="productos.php">Productos</a> - <a href="clientes.php">Clientes</a> - <a href="contactenos.php">Contactenos</a></div>

<div id="contenidoplantilla">
<div id="zonaizquierda"></div>
<div id="zonaderecha">
<div id="imagenpagina"><!-- InstanceBeginEditable name="imagenpagina"->imagenpagina<!-- InstanceEndEditable--></div> 
<div id="contenidopagina"><!-- InstanceBeginEditable name="contenidoprincipal" -->
<h1>Contáctenos</h1>
<div id="contenidopagina">

    <h2>Formulario de Contacto</h2>
    <form action="" METHOD="POST" ENCTYPE="text/plain"
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea><br>

        <input type="submit" value="Enviar Mensaje">
    </form>
</div>
</div>
</div>
<div id="plepagina">Av. Tomas Valle 3512 Los Olivos Lima - Perú.<br /> Telef: (511)-6365645 Correo: ventas@sistemaempresarial.com</div>
</div>
</body>
<!--InstanceEnd -->
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes enviar el correo electrónico con la información o guardarla en la base de datos

    // Por ejemplo, enviar un correo electrónico
    $to = "tu@email.com";  // Reemplaza con tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto";
    $message = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje: $mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
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
<!--InstanceEndEditable-->
<link href="estilogeneral.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="fondo">
<div id="encabezado"><a href="index.php">Inicio</a> - <a href="productos.php">Productos</a> - <a href="clientes.php">Clientes</a> - <a href="contactenos.php">Contactenos</a></div>

<div id="contenidoplantilla">
<div id="zonaizquierda"></div>
<div id="zonaderecha">
<div id="imagenpagina"><!-- InstanceBeginEditable name="imagenpagina"->imagenpagina<!-- InstanceEndEditable--></div> 
<div id="contenidopagina"><!-- InstanceBeginEditable name="contenidoprincipal" -->
<h1>Contáctenos</h1>
<div id="contenidopagina">

    <h2>Formulario de Contacto</h2>
    <form action="" METHOD="POST" ENCTYPE="text/plain"
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea><br>

        <input type="submit" value="Enviar Mensaje">
    </form>
</div>
</div>
</div>
<div id="plepagina">Av. Tomas Valle 3512 Los Olivos Lima - Perú.<br /> Telef: (511)-6365645 Correo: ventas@sistemaempresarial.com</div>
</div>
</body>
<!--InstanceEnd -->
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes enviar el correo electrónico con la información o guardarla en la base de datos

    // Por ejemplo, enviar un correo electrónico
    $to = "tu@email.com";  // Reemplaza con tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto";
    $message = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje: $mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
