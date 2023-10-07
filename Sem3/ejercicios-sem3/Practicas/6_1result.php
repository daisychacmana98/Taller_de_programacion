<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styles.css">

</head>
<?php
$op=$_POST["funcion"];
$M=$_POST["L"];
$A=( " ".$M);
include("6_1libreria.php");
switch($op)
{
 case 1:
 $r=mayor($A);
 $msg="EL MAYOR ES";
 break;
 case 2:
 $r=menor($A); 

 $msg="EL MENOR ES";
 break;
 case 3:
 $r=mayor2($A);
 $msg="EL 2º MAYOR ES";
 break;
 case 4:
 $r=menor2($A);
 $msg="EL 2º MENOR ES";
 break;
}
?>
<H2><div align="center">RESPUESTA</div></H2><BR>
<table align="center" border="4" width="25%">
<tr align="center">
 <td bgcolor="#000000">
 <font color="#FFFFFF"><marquee behavior="alternate"> <?php echo $msg;
?> </marquee></font>
 </td>
</tr>
<tr align="center">
<td> <?php echo $r; ?> </td>
</tr>
</table>
</H2> 

</body>
</html>