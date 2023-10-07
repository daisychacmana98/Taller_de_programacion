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
	
$y = $_POST['a'];
$z = $_POST['b'];

if (isset ($_POST['btsuma'])){
$c = $y + $z; 
	echo "La suma de $y + $z es " . $c;
}

if (isset ($_POST['btresta'])){
$c = $y - $z; 
	echo "La resta de $y - $z es " . $c;
}

		if (isset ($_POST['btmult'])){
$c = $y * $z; 
			echo "La multiplicacion de $y * $z es " . $c;
}


		if (isset ($_POST['btdiv'])){
			if ($z !=0) $c = $y / $z;
			else $c = 0;
			echo "La division de $y / $z es " . $c;
		}

?>


	<form name="calc" action="Ejer_5_cal2_main.php" method="POST">
		
A: <input type="text" name="a" size="10" value="<?php echo $y; ?>">
B: <input type="text" name="b" size="10" value="<?php echo $z; ?>">
<br>
		
<input type="submit" value="Suma" name = "btsuma">
<input type="submit" value="Resta" name = "btresta">
<input type="submit" value="Mult" name = "btmult">
<input type="submit" value="Division" name = "btdiv">
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
	
$y = $_POST['a'];
$z = $_POST['b'];

if (isset ($_POST['btsuma'])){
$c = $y + $z; 
	echo "La suma de $y + $z es " . $c;
}

if (isset ($_POST['btresta'])){
$c = $y - $z; 
	echo "La resta de $y - $z es " . $c;
}

		if (isset ($_POST['btmult'])){
$c = $y * $z; 
			echo "La multiplicacion de $y * $z es " . $c;
}


		if (isset ($_POST['btdiv'])){
			if ($z !=0) $c = $y / $z;
			else $c = 0;
			echo "La division de $y / $z es " . $c;
		}

?>


	<form name="calc" action="Ejer_5_cal2_main.php" method="POST">
		
A: <input type="text" name="a" size="10" value="<?php echo $y; ?>">
B: <input type="text" name="b" size="10" value="<?php echo $z; ?>">
<br>
		
<input type="submit" value="Suma" name = "btsuma">
<input type="submit" value="Resta" name = "btresta">
<input type="submit" value="Mult" name = "btmult">
<input type="submit" value="Division" name = "btdiv">
</form>

</body>
</html>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
