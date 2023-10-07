<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="styles.css">

</head>
<?php
///////////////////////////////////////////////////////
//LIBRERÍA DE FUNCIONES PARA CALCULAR EL MAYOR, MENOR
//2º MAYOR Y 2º MENOR SIN ORDENAMIENTO PARA UNA LISTA
//DE N ELEMENTOS
///////////////////////////////////////////////////////
function mayor($lista) //Función para calcular el mayor
{
$ma=$lista[0];
for ($i=1;$lista[$i];$i++)
 if ($ma<$lista[$i])
 $ma=$lista[$i];
return $ma;
}
function menor($lista) //Función para calcular el menor
{
$me=$lista[0];
for ($i=1;$lista[$i];$i++)
 if ($me>$lista[$i])
 $me=$lista[$i];
return $me;
} 

function mayor2($lista) //Función para calcular el 2º mayor
{
$pos=0;
$ma=$lista[0];
for ($i=1;$lista[$i];$i++)
 if ($ma<$lista[$i])
 {
 $ma=$lista[$i];
 $pos=$i;
 }
if ($pos==0)
 $ma2=$lista[1];
else
 $ma2=$lista[0];

for ($i=0;$lista[$i];$i++)
 if ($i<>$pos)
 if ($ma2<$lista[$i])
 {
 $ma2=$lista[$i];
 }
return $ma2;
}
function menor2($lista) //Función para calcular el 2º menor
{
$pos=0;
$me=$lista[0];
for ($i=1;$lista[$i];$i++)
 if ($me>$lista[$i])
 {
 $me=$lista[$i];
 $pos=$i;
 }
if ($pos==0)
 $me2=$lista[1];
else
 $me2=$lista[0];

for ($i=0;$lista[$i];$i++)
 if ($i<>$pos)
 if ($me2>$lista[$i])
 {
 $me2=$lista[$i];
 }
return $me2;
}
?> 
</body>
</html>