<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida a  PHP</title>
	<link rel="stylesheet" href="styles.css">
	
</head>
<body>
<?php
$a = ($b = 4) + 5; // Asigna 4 a $b, luego suma 5 a $b y asigna el resultado a $a. $a es igual a 9, $b vale 4.
echo "a: $a, b: $b<br>";

$a = 3;
$a += 5; // Incrementa $a en 5, lo que equivale a $a = $a + 5. $a ahora es igual a 8.
echo "a: $a<br>";

$b = "Hola ";
$b .= "Ahí!"; // Concatena "Ahí!" a la cadena existente en $b. $b ahora es igual a "Hola Ahí!".
echo "b: $b<br>";
?>

</body>
</html>

