<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Asignando una cadena
    $str = "Esto es una cadena";

    // Añadiendo más texto a la cadena
    $str .= " con algo más de texto";

    // Otra forma de añadir, incluye un carácter de nueva línea protegido.
    $str .= " Y un carácter de nueva línea al final.\n";

    // Esta cadena terminará siendo '<p>Número: 9</p>'
    $num = 9;
    $str .= "<p>Número: $num</p>";

    // Imprime la cadena en la página web.
    echo $str;
    ?>
</body>
</html>
