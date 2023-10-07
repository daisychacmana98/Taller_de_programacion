<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	echo "<h1>Galeria de imagenes con thumbnails</h1>";
	
	function valida_foto($fotos)
	{
		$rdo = 0;
		if (preg_match("/[Jj][Pp][Gg]$/", $fotos)) $rdo = 1;
		if (preg_match("/[Gg][Ii][Ff]$/", $fotos)) $rdo = 1;
		if (preg_match("/[Pp][Nn][Gg]$/", $fotos)) $rdo = 1;
		if (preg_match("/[Bb][Mm][Pp]$/", $fotos)) $rdo = 1;
		
		return $rdo;
	}
	
	echo "<table border=1>";
	$puntero = opendir('fotos');
	$i = 1;
	while (false !== ($foto = readdir($puntero)))
	{
		if ($foto != "fotos/foto.jpg" && $foto != ".." && valida_foto($foto))
		{
			if ($i == 1) echo "<tr>";
			echo "<td><a href='fotos/thumbs/MINI-$foto'>";
			echo "<img src='fotos/$foto' width=100 height=100></img>";
			echo "</a></td>";
			
			if ($i == 4)
			{
				echo "</tr>";
				$i = 0;
			}
			
			$i++;
		}
	}
	
	closedir($puntero);
	echo "</table>";
	?>
</body>
</html>
