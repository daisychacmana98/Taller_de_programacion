<<<<<<< HEAD
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
if ($_POST["afp"]==1) //Si el checkbox de afp está seleccionada
$afp=0.11*$_POST["bas"];
if ($_POST["fon"]==1) //Si el checkbox de fonavi está seleccionada
$fon=0.08*$_POST["bas"];
if ($_POST["ess"]==1) //Si el checkbox de essalud está seleccionada
$ess=0.09*$_POST["bas"];
?>
	
El sueldo neto de
	
<?php
echo $_POST["nom"]." ". $_POST["ape"];
?>
 es 
<?php
echo ($_POST["bas"]-($afp+$fon+$ess)); 
?> soles
</div>
</body>
=======
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
if ($_POST["afp"]==1) //Si el checkbox de afp está seleccionada
$afp=0.11*$_POST["bas"];
if ($_POST["fon"]==1) //Si el checkbox de fonavi está seleccionada
$fon=0.08*$_POST["bas"];
if ($_POST["ess"]==1) //Si el checkbox de essalud está seleccionada
$ess=0.09*$_POST["bas"];
?>
	
El sueldo neto de
	
<?php
echo $_POST["nom"]." ". $_POST["ape"];
?>
 es 
<?php
echo ($_POST["bas"]-($afp+$fon+$ess)); 
?> soles
</div>
</body>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
</html>