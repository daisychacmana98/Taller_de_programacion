<?php 
	require_once ("conexion.php");
	$salida="";
	$default="
	<label for='validationCustom03'>Titulo del libro</label>
	<input type='text' class='form-control' placeholder='Titulo de libro' readonly >";
	if (isset($_POST['consulta'])) {
		$palabra=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT Titulo FROM libros WHERE Id_libro=$palabra";
		$resultado=$conexion->query($query);
		$default="";
	if ($resultado->num_rows > 0) {
		$fila=$resultado->fetch_assoc();
		$salida.="
		<label for='validationCustom03'>Titulo del libro</label>
		<input type='text' class='form-control' placeholder='Cien años de soledad' readonly value='".$fila['Titulo']."'>";
	}else{
		$salida.="
		<label for='validationCustom03'>Titulo del libro</label>
		<br>
		<input type='text' class='form-control' placeholder='No se econtraron datos' readonly >";
	}
	}
	
	echo $salida;
	echo $default;
	$conexion->close();
?>