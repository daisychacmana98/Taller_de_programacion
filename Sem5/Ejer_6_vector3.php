<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<link rel="stylesheet" href="Styles.css">
<body>
	<?php
	if (isset($_POST['vec'])) {
		$vector = $_POST['vec'];
		$n = count($vector);
		$suma = 0;
		echo "El vector tiene $n elementos <br>";
		for ($i = 0; $i < $n; $i++) {
			echo "$i = $vector[$i] <br>";
			$suma = $suma + $vector[$i];
		}
		echo "La suma es $suma <br>";

	} else {
		$n = 3;
		$vector = array(0, 0, 0);
	}
	?>
	<form action="Ejer_6_vector3.php" method="post">
	Numero de Elementos:
		<input type="text" name="n" size="5" value="<?php echo $n; ?>">
		<br>
		<?php
		for ($i = 0; $i < $n; $i++) {
			echo "Elemento $i: ";
			echo "<input type='text' name='vec[]' value='" . $vector[$i] . "' >";
			echo "<br>";
		}
		?>
		<input type="submit" name="submit" value="Calcular">
	</form>
</body>
</html>
