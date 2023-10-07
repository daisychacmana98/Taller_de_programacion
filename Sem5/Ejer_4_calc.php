<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado</title>
	<link rel="stylesheet" href="Styles.css">
</head>

<body>
	<?php 
	$y = $_POST['a'];
	$z = $_POST['b'];
	$c = $y + $z;
	echo "La suma de $y + $z es " . $c;
	?>
</body>
</html>