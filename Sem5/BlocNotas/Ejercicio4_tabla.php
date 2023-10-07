<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla de 10 por 10 con los números del 1 al 100</title>
<link rel="stylesheet" href="../Styles.css">

</head>

<body>
	<h1>Tabla de 10 por 10 con los números del 1 al 100</h1>
<center>
	<?php
define('TAM',10); 
echo "<table border=1>";
$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
 if ($n1 % 2 == 0) //Si la división de la variable $n1 entre dos da 0 creamos una fila gris
 echo "<tr>";
 else
 echo "<tr>"; //creamos fila blanca cuando no sea divisible entre 2
 for ($n2=1; $n2<=TAM; $n2++)
 {
 echo "<td >", $n, "</td>"; //creamos una celda y mostramos el número
 $n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle
 }
 echo "</tr>"; 
}
echo "</table>"; 
?>
	</center>	
</body>
</html>