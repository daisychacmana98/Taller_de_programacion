<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
		<link rel="stylesheet" href="../Styles.css">

</head>

<body>
	<h3>Ejercicio 7: hacer un programa que muestre en una tabla de 4 columnas todas las imágenes de el
directorio "fotos". Para ello consulte el manual (en concreto la referencia de funciones de
directorios). Suponga que en el directorio sólo existen fotos. </h3>

	<center>
<?php
$directorio = "fotos";

$archivos = scandir($directorio);

$imagenes = array_filter($archivos, function($archivo) {
    $extensiones_permitidas = array("jpg", "jpeg", "png", "gif");
    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
    return in_array(strtolower($extension), $extensiones_permitidas);
});

echo "<table border='1'>";
echo "<tr>";

$contador = 0;
foreach ($imagenes as $imagen) {
    echo "<td><img src='$directorio/$imagen' alt='$imagen'></td>";
    $contador++;

    if ($contador % 4 == 0) {
        echo "</tr><tr>"; // Iniciar una nueva fila después de 4 columnas
    }
}

echo "</tr>";
echo "</table>";
?>
		 </center>
</body>
</html>