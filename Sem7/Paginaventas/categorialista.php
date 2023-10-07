<<<<<<< HEAD
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	
	$servidor="localhost";
	$basededatos="baseempresa";
	$usuario="root";
	$clave="12345678";
	
	$cn=mysql_connect($servidor,$usuario,$clave) or trigger_error(mysql_error,E_USER_ERROR);
	mysql_select_db($basededatos,$cn);
	
	$consulta="select*from categorias";
	$rscategorias=mysql_query($consulta,$cn)or die(mysql_error());
	$fila_rscategorias=mysql_fetch_assoc($rscategorias);
	?>
<body>

Codigo: <?php echo $fila_rscategorias['IdCategoria'] ?> <br/> 
	Categorias: <?php echo $fila_rscategorias ['NombreCategoria'] ?> <br/> 
	Descripci&oacute;n: <?php echo $fila_rscategorias ['Descripcion'] ?> <br/> 
<p>

<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th> C&oacute;digo</th>
<th> Categor&iacute;a </th> 
<th> Descripci&oacute;n </th>
</tr>

<?php do{?>
<tr>
<td><?php echo $fila_rscategorias['IdCategoria'] ?> <br/> </td> 
	<td> <?php echo $fila_rscategorias['NombreCategoria'] ?> <br/> </td> 
	<td><?php echo $fila_rscategorias['Descripcion'] ?> <br/></td> 
	</tr>
<?php } while ($fila_rscategorias =mysql_fetch_assoc($rscategorias));?>

</table>
<p>
<?php $totalFilas_rscategorias=mysql_num_rows($rscategorias)?> Número total de filas = <?php echo $totalFilas_rscategorias?>


<?php mysql_free_result(Srscategorias)?>

</body> </html>
=======
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	
	$servidor="localhost";
	$basededatos="baseempresa";
	$usuario="root";
	$clave="12345678";
	
	$cn=mysql_connect($servidor,$usuario,$clave) or trigger_error(mysql_error,E_USER_ERROR);
	mysql_select_db($basededatos,$cn);
	
	$consulta="select*from categorias";
	$rscategorias=mysql_query($consulta,$cn)or die(mysql_error());
	$fila_rscategorias=mysql_fetch_assoc($rscategorias);
	?>
<body>

Codigo: <?php echo $fila_rscategorias['IdCategoria'] ?> <br/> 
	Categorias: <?php echo $fila_rscategorias ['NombreCategoria'] ?> <br/> 
	Descripci&oacute;n: <?php echo $fila_rscategorias ['Descripcion'] ?> <br/> 
<p>

<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th> C&oacute;digo</th>
<th> Categor&iacute;a </th> 
<th> Descripci&oacute;n </th>
</tr>

<?php do{?>
<tr>
<td><?php echo $fila_rscategorias['IdCategoria'] ?> <br/> </td> 
	<td> <?php echo $fila_rscategorias['NombreCategoria'] ?> <br/> </td> 
	<td><?php echo $fila_rscategorias['Descripcion'] ?> <br/></td> 
	</tr>
<?php } while ($fila_rscategorias =mysql_fetch_assoc($rscategorias));?>

</table>
<p>
<?php $totalFilas_rscategorias=mysql_num_rows($rscategorias)?> Número total de filas = <?php echo $totalFilas_rscategorias?>


<?php mysql_free_result(Srscategorias)?>

</body> </html>
>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
