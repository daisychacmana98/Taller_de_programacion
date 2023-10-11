<?php 
	require_once ("conexion.php");
	$salida="";
	$default="
	<label for='validationCustom03'>Nombre</label>
	<input type='text' class='form-control' placeholder='Nombre de la persona' readonly >";
	if (isset($_POST['consulta'])) {
		$palabra=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT Nombre FROM personas WHERE Id_persona=$palabra";
		$resultado=$conexion->query($query);
		$default="";
	if ($resultado->num_rows > 0) {
		$fila=$resultado->fetch_assoc();
		$salida.="
		<label for='validationCustom03'>Nombre</label>
		<input type='text' class='form-control' readonly value='".$fila['Nombre']."'>";
	}else{
		$salida.="
		<label for='validationCustom03'>Nombre</label>
		<br>
		<input type='text' class='form-control' placeholder='No se econtraron datos' readonly >";
	}
	}
	
	echo $salida;
	echo $default;
	$conexion->close();
?>