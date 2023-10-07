<<<<<<< HEAD
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
		$vector = $_POST['vec']; $n = count($vector); $suma = 0;
echo " El vector tiene $n elementos <br>";
for($i=0; $i<$n; $i++)
{
	echo "$i = $vector[$i] <br>";
	$suma = $suma + $vector[$i]	;
}

echo " La suma es $suma <br>";
	}
?>		<br>
	<hr>
	 <form action="Ejer_6_vector.php" method="post">
	<?php
		$n=9;
		for($i=0; $i<$n; $i++){
			echo $i;
			echo "<input type='text' name='vec[]' size='10'>";
			echo "<br><br>";	}
	?>
<input type="submit" value="Enviar">
</body>
=======
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
		$vector = $_POST['vec']; $n = count($vector); $suma = 0;
echo " El vector tiene $n elementos <br>";
for($i=0; $i<$n; $i++)
{
	echo "$i = $vector[$i] <br>";
	$suma = $suma + $vector[$i]	;
}

echo " La suma es $suma <br>";
	}
?>		<br>
	<hr>
	 <form action="Ejer_6_vector.php" method="post">
	<?php
		$n=9;
		for($i=0; $i<$n; $i++){
			echo $i;
			echo "<input type='text' name='vec[]' size='10'>";
			echo "<br><br>";	}
	?>
<input type="submit" value="Enviar">
</body>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
</html>