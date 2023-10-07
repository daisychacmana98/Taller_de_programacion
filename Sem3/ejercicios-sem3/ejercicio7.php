<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Diferencias entre Variables y Constantes en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Diferencias entre Variables y Constantes en PHP</h1>
    <br> 
    
    <table>
        <tr>
            <th>Variable</th>
            <th>Constante</th>
        </tr>
        <tr>
            <td>
                <?php
                $mensaje = "Hola Mundo";
                echo $mensaje;
                ?>
            </td>
            <td>
                <?php
                define("CONSTANT", "Hola a todos.");
                echo CONSTANT; // salida "Hola a todos."
                echo Constant; // salida "Constant" (nota: sin resaltado, ya que no se trata de una constante)
                ?>
            </td>
        </tr>
    </table>
</body>

</html>
