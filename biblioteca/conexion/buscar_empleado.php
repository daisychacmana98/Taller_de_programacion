<?php 
	require_once ("conexion.php");
	$salida="";
	$default="
	<label for='validationCustom03'>Nombre del empleado</label>
	<input type='text' class='form-control' placeholder='Nombre' readonly >";
	if (isset($_POST['consulta'])) {
		$palabra=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT Nombre FROM personas,empleados WHERE personas.Id_persona=empleados.Id_persona AND empleados.Id_empleado=$palabra";
		$default="";
		$resultado=$conexion->query($query);
	if ($resultado->num_rows > 0) {
		$fila=$resultado->fetch_assoc();
		$salida.="
		<label for='validationCustom03'>Nombre del empleado</label>
		<input type='text' class='form-control' placeholder='' readonly value='".$fila['Nombre']."'>";
	}else{
		$salida.="
		<label for='validationCustom03'>Nombre del empleado</label>
		<br>
		<input type='text' class='form-control' placeholder='No se econtraron datos' readonly >";
	}
	}
	echo $salida;
	echo $default;
	$conexion->close();
?>