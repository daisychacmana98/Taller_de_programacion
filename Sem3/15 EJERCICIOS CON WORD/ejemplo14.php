<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    $archivo = file("archivo.txt");
    $lineas = count($archivo);
    for ($i = 0; $i < $lineas; $i++) {
        echo $archivo[$i];
    }
    ?> 
</body>
</html>

=======
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    $archivo = file("archivo.txt");
    $lineas = count($archivo);
    for ($i = 0; $i < $lineas; $i++) {
        echo $archivo[$i];
    }
    ?> 
</body>
</html>

>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87
