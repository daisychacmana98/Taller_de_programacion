<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
				<link rel="stylesheet" href="Styles.css">

</head>

<body>
	<?php
	if (isset ($_POST['vec']))
	{
		$vector = $_POST['vec']; 
		$n = count($vector); 
		$suma = 0;		
		echo " El vector tiene $n elementos <br>";
		for($i=0; $i<$n; $i++)
{
	echo "$i = $vector[$i] <br>";
	$suma = $suma + $vector[$i]	;
}

echo " La suma es $suma <br>";
	}



?>		<br>
	

	 <form action="Ejer_6_vector2.php" method="get">
		 Numero de elementos :
	<input type="text" name="n" size="5">
	<input type="submit" value="Aceptar">
	</form>
	<br>
	<hr>
	<form action="Ejer_6_vector2.php" method="post">
	
<?php
if ( isset ($_GET['n'] ) )
	
$n = $_GET ['n'];
else
$n=3;
for ( $i=1; $i<=$n; $i++)
{
echo $i;
echo "<input type='text' name='vec[]' size= '10'>";
echo "<br>";

}
?>
<input type="submit"value="Enviar">
</form>
	
</body>
</html>