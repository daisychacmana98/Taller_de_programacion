
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styles.css">

</head>
<?php
 $nf=$_POST["F"];
 $nc=$_POST["C"];
 $op=trim($_POST["submit"]);
 //Creando la matriz M
 for ($i=0;$i<$nf;$i++)
 {
 for ($j=0;$j<$nc;$j++)
 {
 $name="A".$i.$j;
 $M[$i][$j]=$_POST[$name];
 }
 }
 switch($op)
 {
 //Calculando la media de cada fila
 case "Calcular Media Filas":
 for ($i=0;$i<$nf;$i++)
 {
 $s=0;
 for ($j=0;$j<$nc;$j++)
 {
 $s+=$M[$i][$j];
 }
 $v[$i]=$s/$nc;
 }
 break;

 //Calculando la media de cada columna
 case "Calcular Media Columnas":
 for ($i=0;$i<$nc;$i++)
 {
 $s=0;
 for ($j=0;$j<$nf;$j++)
 {
 $s+=$M[$j][$i];
 }
 $v[$i]=$s/$nf;
 }
 break;
 //Calculando el mayor de cada fila
 case "Calcular Mayor Filas":
 for ($i=0;$i<$nf;$i++)
 {
 $ma=$M[$i][0];
 for ($j=1;$j<$nc;$j++)
 {
 if ($ma<$M[$i][$j])
 $ma=$M[$i][$j];
 }
 $v[$i]=$ma;
 } 
 
 break;
 //Calculando el mayor de cada columna
 case "Calcular Mayor Columnas":
 for ($i=0;$i<$nc;$i++)
 {
 $ma=$M[0][$i];
 for ($j=1;$j<$nf;$j++)
 {
 if ($ma<$M[$j][$i])
 $ma=$M[$j][$i];
 }
 $v[$i]=$ma;
 }
 break;
 }
 //Imprimiendo los resultados para filas
 ?>
 <div align="center"><h3>LOS RESULTADOS SON:</h3>
 <table align=center border="3">
 <tr align="center" bgcolor="#CCCCCC">
 <td colspan="<?php echo $nc;?>">Elementos</td>
<?php
 if ($op=="Calcular Media Filas" || $op=="Calcular Mayor Filas")
 {
 ?>
 <td> <?php echo substr($op,9,5); ?> </td>
 </tr>
 <?php
 for ($i=0;$i<$nf;$i++)
 {
 ?>
 <tr align="center">
 <?php
 for ($j=0;$j<=$nc;$j++)
 {
 if ($j!=$nc)
 {
 ?>
 <td><?php echo $M[$i][$j];?></td>
 <?php
 }
 else
 {
 ?>
 <td bgcolor="#CCCCCC"><?php echo $v[$i];?></td>
 <?php
 }
 }
 ?>
 </tr>
 <?php
 }
 }
?> 

<?php
 if ($op=="Calcular Media Columnas" || $op=="Calcular Mayor Columnas")
 {
 for ($i=0;$i<=$nf;$i++)
 {
 ?>
 <tr align="center">
 <?php
 for ($j=0;$j<$nc;$j++)
 {
 if ($i!=$nf)
 {
 ?>
 <td><?php echo $M[$i][$j]; ?></td>
 <?php
 }
 else
 {
 ?>
 <td bgcolor="#CCCCCC"><?php echo $v[$j]; ?></td>
 <?php
 }
 }
 ?>
 </tr>
 <?php
 }
 }
?>
</table> 
</body>
</html>