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
$afp1=$_POST["afp"];
$fon1=$_POST["fon"];
$ess1=$_POST["ess"];
$bas1=$_POST["bas"]; if ($afp1==1)
$d1=0.11*$bas1; if ($fon1==1)
$d2=0.08*$bas1; if ($ess1==1)
$d3=0.09*$bas1;
$des=$d1+$d2+$d3;
$net=$bas1-$des;
?>
<table>
<tr>
<td>Código</td><td> <?php echo $_POST["cod"];?> </td>
</tr>
<tr>
<td>Nombres</td><td> <?php echo $_POST["nom"];?> </td>
</tr>
<tr>
<td>Básico</td><td> <?php echo $_POST["bas"];?> </td>
</tr>
<tr>
<td>Neto</td><td> <?php echo $net;?> </td>
</tr>
</table>
<div>
<a href="2_4.php">Volver </a><br>
</div>
</div>
</body>
</html>