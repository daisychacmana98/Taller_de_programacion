<?php 
	require_once ("conexion.php");
	$salida="";
	$query="SELECT * FROM libros";
	if (isset($_POST['consulta'])) {
		$texto=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT * FROM libros WHERE Titulo LIKE '".$texto."%'";
	}
	$resultado=$conexion->query($query);
	if ($resultado->num_rows > 0) {
		$salida.="
			<table class='table table-sm table-hover'>
		        <thead>
		            <tr class='bg-info text-white font-weight-bold'>
		                <th class='text-center'><small>ID</small></th>
		                <th class='text-center'><small>Titulo</small></th>
		                <th class='text-center'><small>Copias</small></th>
		                <th class='text-center'><small>Editorial</small></th>
		                <th class='text-center'><small>Fecha de edicion</small></th>
		                <th class='text-center'><small>Categoría</small></th>
		                <th class='text-center'><small>Estante</small></th>
		            </tr>
		        </thead>
		        <tbody>";
		  while ($fila=$resultado->fetch_assoc()) {
		  	$salida.="
		        
		        <tr class='text-center'>
		        	<td><small>".$fila['Id_libro']."</small></td>
					<td><small>".$fila['Titulo']."</small></td>
					<td><small>".$fila['Copias']."</small></td>
					<td><small>".$fila['Editorial']."</small></td>
					<td><small>".$fila['Fecha_edicion']."</small></td>
					<td><small>".$fila['Categoria']."</small></td>
					<td><small>".$fila['Estante']."</small></td>
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