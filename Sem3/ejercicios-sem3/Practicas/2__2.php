<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styles.css">

</head>

<body>
<div class="php">
<?php
//Obteniendo el array de números
$L=$_POST["A"]." "; //Pasamos a una variable php todo el contenido del control A
$n=strlen($L); //Determinamos la longitud de la cadena
$c=0;
$d=0; for($i=0;$i<$n;$i++)
{
if ($L[$i]==' ')
{
for ($j=$c;$j<$i;$j++)
$a[$d].=$L[$j];
$c=$i+1;
$d++;
}
}
echo "La lista de datos es: <br>";
//El bucle va hasta d-1 porque se ha añadido un espacio en blanco al final 
	for ($i=0;$i<$d;$i++)
{
echo "Elemento a [$i]: $a[$i] <br>";
}
echo "	<br>";
//Calculando el mayor
$ma=$a[0];
for ($i=1;$i<$d;$i++)
{
if ($ma<$a[$i])
$ma=$a[$i];
}
echo "El mayor es: $ma";
?>

</div>
</body>
</html>
