<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styles.css">

</head>

<body>
	<table >
<tr>
<td><strong>Posición</strong></td>
<td><strong>Valor</strong></td>
</tr>

<div class="php">
<?php
for ($i=1;$i<=20;$i++)
{
 
 
	mt_srand();
$a[$i]=rand()%100;
}
$ma=$a[1];
for ($i=1;$i<=20;$i++)
{
if ($ma<$a[$i])
$ma=$a[$i];
}
for ($i=1;$i<=20;$i++)
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $a[$i];?></td>
</tr>
<?php } ?>


<tr>
<th><p>El Mayor es</p></th>
<td><p><?php echo $ma;?></p></td>
</tr>
</table>
</div>
</body>
</html>