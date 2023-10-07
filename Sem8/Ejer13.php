<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 13</title>
</head>

<body>
<?php
	$v[1]=90;
	$v[30]=7;
	$v['e']=99;
	$v['hola']=43;
	
	foreach ($v as $indice => $valor){
		echo "El elemento de indice $indice vale $valor <br>";
	}
?>
</body>
</html>