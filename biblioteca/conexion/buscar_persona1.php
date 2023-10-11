<?php 
	require_once ("conexion.php");
	$salida="";
	$query="SELECT * FROM personas";
	if (isset($_POST['consulta'])) {
		$palabra=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT * FROM personas WHERE Nombre LIKE '".$palabra."%'";
	}
	$resultado=$conexion->query($query);
	if ($resultado->num_rows > 0) {
		$salida.="
			<table class='table table-sm table-hover'>
		        <thead>
		            <tr class='bg-info text-white font-weight-bold'>
		                <th class='text-center'><small>ID</small></th>
		                <th class='text-center'><small>Nombre</small></th>
		                <th class='text-center'><small>Barrio</small></th>
		                <th class='text-center'><small>Calle</small></th>
		                <th class='text-center'><small>Número</small></th>
		                <th class='text-center'><small>Estado</small></th>
		                <th class='text-center'><small>Ciudad</small></th>
		                <th class='text-center'><small>Sexo</small></th>
		                <th class='text-center'><small>Fecha de nacimiento</small></th>
		                <th class='text-center'><small>Teléfono</small></th>
		                <th class='text-center'><small>Correo</small></th>
		            </tr>
		        </thead>
		        <tbody>";
		  while ($fila=$resultado->fetch_assoc()) {
		  	$salida.="
		        
		        <tr class='text-center'>
		        	<td><small>".$fila['Id_persona']."</small></td>
					<td><small>".$fila['Nombre']."</small></td>
					<td><small>".$fila['Barrio']."</small></td>
					<td><small>".$fila['Calle']."</small></td>
					<td><small>".$fila['Numero']."</small></td>
					<td><small>".$fila['Estado']."</small></td>
					<td><small>".$fila['Ciudad']."</small></td>
					<td><small>".$fila['Sexo']."</small></td>
					<td><small>".$fila['Fecha_nacimiento']."</small></td>
					<td><small>".$fila['Telefono']."</small></td>
					<td><small>".$fila['Correo']."</small></td>
		        </tr>";
		  }
		  $salida.="
		  		</tbody>
		  	</table>
		  ";
	}else{
		$salida.="No se econtraron datos :(";
	}
	echo $salida;
	$conexion->close();
?>