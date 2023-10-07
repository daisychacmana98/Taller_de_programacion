<?php
$foo = "0";         // $foo es una cadena (ASCII 48)
$foo++;             // Incrementa $foo, ahora es la cadena "1" (ASCII 49)
$foo += 1;          // Incrementa $foo nuevamente, ahora es un entero (2)
$foo = $foo + 1.3;  // Suma 1.3 a $foo, ahora es un número decimal (3.3)

// Intenta sumar una cadena que empieza con números, PHP convierte la cadena en un número
$foo = 5 + "10 Cerditos Pequeñitos"; // $foo es entero (15)

// Otro ejemplo de conversión de cadena a número
$foo = 5 + "10 Cerditos"; // $foo es entero (15)

echo "$foo";
?>
