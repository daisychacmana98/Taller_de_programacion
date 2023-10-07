<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styles.css">

</head>

<body>
	<?php
$L=$_POST["A"]." ";
$n=strlen($L);
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
//Calculando el mayor y el menor
$ma=$a[0];
 

$me=$a[0];
$s=0;
for ($i=1;$i<$d;$i++)
{
$s+=$a[$i];
if ($ma<$a[$i])
$ma=$a[$i]; if ($me>$a[$i])
$me=$a[$i];
}
$m=$s/($d-1);
?>
<div>
<h1>LOS RESULTADOS OBTENIDOS SON:</h1>
</div>
<table>
<tr >
<td><strong>Item</strong></td>
<td><strong>Resultado</strong></td>
</tr>
<tr >
<td>Mayor</td>
<td><?php echo $ma; ?></td>
</tr>
<tr >
<td>Menor</td>
<td><?php echo $me; ?></td>
</tr>
<tr >
<td>Media</td>
<td><?php echo $m; ?></td>
</tr>
</table>
</body>
</html>