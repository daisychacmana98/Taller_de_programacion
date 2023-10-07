<<<<<<< HEAD
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<link rel="stylesheet" href="../Styles.css">

<body>
	 <center>
	<h3>ídem al anterior, pero que muestre las fotos en 100x100 y que al pulsar abra la foto
entera. Compruebe que sólo muestra fotos con extensión .jpg, .png, bmp o .gif (haga una función
que lo compruebe usando las expresiones regulares como aparecen en el manual).</h3>
	
<?php
$directorio = "fotos";

function esExtensionValida($archivo) {
    $extensiones_permitidas = array("jpg", "jpeg", "png", "bmp", "gif");
    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
    return in_array(strtolower($extension), $extensiones_permitidas);
}

$archivos = scandir($directorio);

$imagenes = array_filter($archivos, function($archivo) {
    return esExtensionValida($archivo);
});

echo "<table border='1';
>";
echo "<tr>";

foreach ($imagenes as $imagen) {

    if (esExtensionValida($imagen)) {
        echo "<td><a href='$directorio/$imagen' target='_blank'><img src='$directorio/$imagen' alt='$imagen' width='100' height='100'></a></td>";
    }
}

echo "</tr>";
echo "</table>";
?>
 </center>
</body>
=======
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
	<link rel="stylesheet" href="../Styles.css">

<body>
	 <center>
	<h3>ídem al anterior, pero que muestre las fotos en 100x100 y que al pulsar abra la foto
entera. Compruebe que sólo muestra fotos con extensión .jpg, .png, bmp o .gif (haga una función
que lo compruebe usando las expresiones regulares como aparecen en el manual).</h3>
	
<?php
$directorio = "fotos";

function esExtensionValida($archivo) {
    $extensiones_permitidas = array("jpg", "jpeg", "png", "bmp", "gif");
    $extension = pathinfo($archivo, PATHINFO_EXTENSION);
    return in_array(strtolower($extension), $extensiones_permitidas);
}

$archivos = scandir($directorio);

$imagenes = array_filter($archivos, function($archivo) {
    return esExtensionValida($archivo);
});

echo "<table border='1';
>";
echo "<tr>";

foreach ($imagenes as $imagen) {

    if (esExtensionValida($imagen)) {
        echo "<td><a href='$directorio/$imagen' target='_blank'><img src='$directorio/$imagen' alt='$imagen' width='100' height='100'></a></td>";
    }
}

echo "</tr>";
echo "</table>";
?>
 </center>
</body>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
</html>