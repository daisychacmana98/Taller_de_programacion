<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    $a = 5;
    $b = 10;
    $suma = ($a + $b);
    $resta = ($b - $a);
    $multiplicacion = ($a * $b);
    $division = ($b / $a);
    $residuo = ($b % $a);
    ?> 

    <h1>Operaciones Matemáticas</h1>
    <p>Suma: <?php echo $suma; ?></p>
    <p>Resta: <?php echo $resta; ?></p>
    <p>Multiplicación: <?php echo $multiplicacion; ?></p>
    <p>División: <?php echo $division; ?></p>
    <p>Residuo: <?php echo $residuo; ?></p>
</body>
</html>
