<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado del Tipo de Motor - Cursos de Verano de Computación</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<div id="contenedor">
    <h1>Explicación del desarrollo</h1>

    <p>Supongamos que estamos trabajando en un sistema que implica diferentes tipos de motores, como el tipo de motor de una bomba para mover fluidos. Vamos a simular esta situación en código PHP.</p>

    <p>Primero, definimos una variable <code>$tipoMotor</code> y le asignamos un valor de 3. Los valores posibles para este tipo de motor son 1, 2, 3, 4.</p>

    <p>A través de un condicional <code>switch</code>, hacemos lo siguiente:</p>
    <ul>
        <li>
            Si el tipo de motor es 0, mostramos un mensaje indicando "No hay establecido un valor definido para el tipo de bomba."
        </li>
        <li>
            Si el tipo de motor es 1, mostramos un mensaje indicando "La bomba es una bomba de agua."
        </li>
        <li>
            Si el tipo de motor es 2, mostramos un mensaje indicando "La bomba es una bomba de gasolina."
        </li>
        <li>
            Si el tipo de motor es 3, mostramos un mensaje indicando "La bomba es una bomba de hormigón."
        </li>
        <li>
            Si el tipo de motor es 4, mostramos un mensaje indicando "La bomba es una bomba de pasta alimenticia."
        </li>
        <li>
            Si no se cumple ninguno de los valores anteriores, mostramos el mensaje "No existe un valor válido para tipo de bomba."
        </li>
    </ul>
</div>

<div id="resultado">
    <h1>Resultado obtenido por pantalla:</h1>

    <br>
    <hr>
    <br>

    <?php
    $tipoMotor = 2;

    switch ($tipoMotor) {
        case 0:
            echo "No hay establecido un valor definido para el tipo de bomba";
            break;
        case 1:
            echo "La bomba es una bomba de agua";
            break;
        case 2:
            echo "La bomba es una bomba de gasolina";
            break;
        case 3:
            echo "La bomba es una bomba de hormigón";
            break;
        case 4:
            echo "La bomba es una bomba de pasta alimenticia";
            break;
        default:
            echo "No existe un valor válido para tipo de bomba";
            break;
    }
    ?>
</div>
</body>
</html>
