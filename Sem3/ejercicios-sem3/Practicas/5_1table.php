<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styles.css">

</head>
<div align="center"><h3>INGRESE LOS ELEMENTOS DE LA MATRIZ DE ORDEN</H3></div>
<table align=center border="2">
<form action="5_1result.php" method="post" target="mainFrame">
<tr align="center" bgcolor="#CCCCCC">
<td colspan="<?php echo $_POST["C"];?>">
<input type="text" name="F" size="3" value="<?php echo $_POST["F"];?>"
align="center">
<input type="text" name="C" size="3"value="<?php echo $_POST["C"];?>"
align="center">
</td>
<?php
 $op=$_POST["funciones"];
 $nf=$_POST["F"];
 $nc=$_POST["C"];
 for($i=0;$i<$nf;$i++)
 {
 ?>
 <tr align="center">
 <?php
 for($j=0;$j<$nc;$j++)
 {
 ?>
 <td>
 <input name="A<?php echo $i; echo $j;?>" type="text" size="5"
align="center">
 </td>
 <?php
 }
 ?>
 </tr>
 <?php
 }
?>
<tr align="center">
<td colspan=" <?php echo $nc; ?>" >
<input type="submit" name="submit" value=" <?php
 switch($op)
 {
 case 1:
 echo "Calcular Media Filas"; break;
 case 2:
 echo "Calcular Media Columnas"; break;
 case 3:
 echo "Calcular Mayor Filas"; break;
 case 4:
 echo "Calcular Mayor Columnas"; break;
 }
?>
"></td>
</form>
</table>
</body>
</html>