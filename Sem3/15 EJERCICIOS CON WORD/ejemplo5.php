<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    global $numero;

    $numero = 1; 
    function multiplicar(){
        global $numero; 
        $multiplicacion = ($numero * 50); // Perform the multiplication
        echo "El resultado de la multiplicación es: " . $multiplicacion;
    }

    multiplicar(); // Call the function to see the result
    ?> 
</body>
</html>
