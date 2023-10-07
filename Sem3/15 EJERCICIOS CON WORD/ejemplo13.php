<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    $cadena = "hola";
    $otracadena = "hola-mundo";
    $longitud = strlen($cadena); 
    $partes = explode("-", $otracadena); 
    $chop = chop($cadena."\n"); 
    $reemplaza = str_replace("-", " ", $otracadena); 
    ?> 

    <p>Longitud de la cadena: <?php echo $longitud; ?></p>
    <p>Partes de la cadena: <?php print_r($partes); ?></p>
    <p>Resultado de chop: <?php echo $chop; ?></p>
    <p>Reemplazo de '-' por ' ': <?php echo $reemplaza; ?></p>
</body>
</html>
