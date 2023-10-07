<<<<<<< HEAD
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora2</title>
		<link rel="stylesheet" href="Styles.css">

</head>

<body>

	<?php 
if (isset($_POST['a']) && isset($_POST['b'])) {
	$y = $_POST['a'];
	$z = $_POST['b'];
	$c = $y + $z;
	echo "La suma de $y + $z es " . $c;
 }
	?>
	<form name="calc" action="Ejer_4_cal2 -ofi.php" method="POST">
A: <input type="text" name="a" size="10">
B: <input type="text" name="b" size="10">
<input type="submit" value="Enviar">
	</form>

</body>
</html>
=======
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora2</title>
		<link rel="stylesheet" href="Styles.css">

</head>

<body>

	<?php 
if (isset($_POST['a']) && isset($_POST['b'])) {
	$y = $_POST['a'];
	$z = $_POST['b'];
	$c = $y + $z;
	echo "La suma de $y + $z es " . $c;
 }
	?>
	<form name="calc" action="Ejer_4_cal2 -ofi.php" method="POST">
A: <input type="text" name="a" size="10">
B: <input type="text" name="b" size="10">
<input type="submit" value="Enviar">
	</form>

</body>
</html>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
