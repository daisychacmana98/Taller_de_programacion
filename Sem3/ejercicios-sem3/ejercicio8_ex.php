<?php
function double($i)
{
    return $i * 2;
}

$b = $a = 5; // Asignar el valor cinco a las variables $a y $b
echo "a: $a, b: $b<br>";

$c = $a++; // Postincremento, asignar el valor original de $a (5) a $c
echo "c: $c<br>";

$e = $d = ++$b; // Preincremento, asignar el valor incrementado de $b (6) a $d y a $e
echo "d: $d, e: $e<br>";

//en este punto $d como $e son iguales a 6

$f = double($d++); // Asignar el doble del valor de $d antes del incremento (2*6 = 12) a $f
echo "f: $f<br>";

$g = double(++$e); // Asignar el doble del valor de $e después del incremento (2*7 = 14) a $g
echo "g: $g<br>";

$h = $g += 10; // Primero, $g se incrementa en 10 y termina valiendo 24.
// Después, el valor de la asignación (24) se asigna a $h, y $h también acaba valiendo 24.
echo "h: $h<br>";

$i = 42; // Asignar un valor a $i
echo "i: $i<br>";
?>

