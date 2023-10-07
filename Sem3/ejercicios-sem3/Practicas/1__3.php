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
if ($_POST["R"]==1) //Si la opción Sumar del formulario está seleccionada 
{ 
 echo "La suma es: "; 
 echo $_POST["A"]+$_POST["B"]; 
} 
if ($_POST["R"]==2) //Si la opción Restar del formulario está seleccionada 
{ 
 echo "La Resta es: "; 
 echo $_POST["A"]-$_POST["B"]; 
} 
if ($_POST["R"]==3) //Si la opción Multiplicar del formulario está seleccionada 
{ 
 echo "El producto es: "; 
 echo $_POST["A"]*$_POST["B"]; 
} 
if ($_POST["R"]==4) //Si la opción Dividir del formulario está seleccionada 
{ 
 echo "La división es: "; 
 echo $_POST["A"]/$_POST["B"]; 
} 
if ($_POST["R"]==0) //Si ninguna opción del formulario está seleccionada 
{ 
 echo "Debe seleccionar una opción"; 
	
	
} 
?>
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
if ($_POST["R"]==1) //Si la opción Sumar del formulario está seleccionada 
{ 
 echo "La suma es: "; 
 echo $_POST["A"]+$_POST["B"]; 
} 
if ($_POST["R"]==2) //Si la opción Restar del formulario está seleccionada 
{ 
 echo "La Resta es: "; 
 echo $_POST["A"]-$_POST["B"]; 
} 
if ($_POST["R"]==3) //Si la opción Multiplicar del formulario está seleccionada 
{ 
 echo "El producto es: "; 
 echo $_POST["A"]*$_POST["B"]; 
} 
if ($_POST["R"]==4) //Si la opción Dividir del formulario está seleccionada 
{ 
 echo "La división es: "; 
 echo $_POST["A"]/$_POST["B"]; 
} 
if ($_POST["R"]==0) //Si ninguna opción del formulario está seleccionada 
{ 
 echo "Debe seleccionar una opción"; 
	
	
} 
?>
</div>
</body>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
</html>