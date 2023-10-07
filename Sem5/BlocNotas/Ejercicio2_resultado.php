<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado</title>
	<link rel="stylesheet" href="../Styles.css">
</head>

<body>
	<?php
	$a = $_POST['a'];
	$b = $_POST['b'];
	
// Comprobamos si las variables son distintas
if ($a !== $b) {
    // Sumamos las variables
    $c = $a + $b;

    // Imprimimos el resultado
    echo "La suma de $a + $b es $c";
} else {
    // Las variables son iguales
    echo "Los números ingresados son iguales";
}
	?>
</body>
</html>