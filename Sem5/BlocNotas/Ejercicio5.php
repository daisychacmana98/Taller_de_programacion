<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TABLA</title>
		<link rel="stylesheet" href="../Styles.css">

</head>

<body>
	<center>
	<?php
define('TAM',10); 
echo "<table>";
$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
 if ($n1 % 2 == 0) 
 echo "<tr bgcolor=#999999>";
 else
 echo "<tr bgcolor= #ffffff>"; 
 for ($n2=1; $n2<=TAM; $n2++)
 {
 echo "<td>", $n, "</td>"; 
 $n=$n+1; 
 }
 echo "</tr>"; 
}
echo "</table>"; 
?>
		</center>
</body>
</html>