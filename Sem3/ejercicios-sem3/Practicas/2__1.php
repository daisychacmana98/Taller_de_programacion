<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Docum</title>
<link rel="stylesheet" href="styles.css">

</head>

<body>
<div class="php">
	<?php 
	
	mt_srand();
	
for ($i=0;$i<20; $i++)
{
  
$a[$i]=rand()%100;
}
$ma=$a[0];
for ($i=1;$i<20;$i++)
{
if ($ma<$a[$i])
$ma=$a[$i];
}
echo "La lista de datos es: <br>"; for ($i=0;$i<20; $i++)
{
echo "Elemento a [$i]: $a[$i] <br>";
}
echo "	<br>";
echo "El mayor es: $ma";
?>
</div>
</body>
</html>