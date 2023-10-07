<!doctype html>
<html>
<head>
<meta content="text/html; charset=ISO-8859-1" htt-equiv="content-type">
<title>Ejercicio 10</title>
</head>
<body>
<?php
echo "<h1>Galeria de imagenes con thumbnails</h1>";
function valida_foto($fotos)
{
		$rdo = 4;
		if (preg_match("/[Jj][Pp][Gg]$/", $fotos)) $rdo = 1;
		if (preg_match("/[Gg][Ii][Ff]$/", $fotos)) $rdo = 1;
		if (preg_match("/[Pp][Nn][Gg]$/", $fotos)) $rdo = 1;
		if (preg_match("/[Bb][Mm][Pp]$/", $fotos)) $rdo = 1;
		
		return $rdo;}
	
	
function crea_thumbs($foto)
{
if (!is_dir('fotos/thumbs')) mkdir ('fotos/thumbs', 0777); if (!is_file('fotos/thumbs/MINI-$foto'))
system ("convert -sample 40x40 /fotos/$foto /fotos/thumbs/MINI-$foto");
}
	
echo "<table border=1>";
$puntero = opendir('fotos');
$i=1;
while (false !== ($foto = readdir($puntero)))
{
if ($foto!="fotos/foto.jpg" && $foto!=".." && 
	valida_foto($foto))
{
	
crea_thumbs($foto);
	
if ($i==1) echo "<tr>";
echo "<td><a href='fotos/thumbs/MINI-$foto'>"; 
	echo "<img src='fotos/$foto' width=100 height=100></img>";
	echo "</a></td>";
	if ($i==4)
{
	echo "</tr>"; 
 $i=0;
	}
	$i++;

}
}
closedir($puntero); 
	echo "</table>";
	?>
</body>
</html>