<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacto - Cursos de Verano de Computación</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<div id="cabecera">Cursos de verano de Computación</div>
<div id="menu">
  <a href="index.php">Inicio</a>
  <a href="servicios.php">Servicios</a>
  <a href="instalaciones.php">Instalaciones</a>
  <a href="ubicaciones.php">Ubicaciones</a>
  <a href="contacto.php">Contacto</a>
</div>
<div id="contenedor">
  <h1>Contacto</h1>
  <p>¿Tienes preguntas o comentarios? No dudes en contactarnos para obtener más información sobre nuestros cursos de verano de computación.</p>
  <h2>Información de Contacto</h2>
  <ul>
    <li><strong>Teléfono:</strong> 123-456-789</li>
    <li><strong>Correo electrónico:</strong> info@cursoscomputacion.com</li>
    <li><strong>Dirección:</strong> Av. Arequipa #1010 Lima</li>
  </ul>
<br>
  <h1>Formulario de Contacto</h1>
  <form action="#" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>
    <input type="submit" value="Enviar">
  </form>
</div>
</body>
</html>
