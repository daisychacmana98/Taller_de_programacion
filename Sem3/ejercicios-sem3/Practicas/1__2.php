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
echo "La suma de A y B es : "; //Mostramos un mensaje 
echo $_POST["A"] + $_POST["B"]; //Sumamos y e imprimimos el resultado 
?> 
<div>
</body>
</html>