
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo for</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejemplo for</h1>
    <br>

    <table>
        <tr>
            <th>Ejemplo 1 for con codicion</th>
            <th>Ejemplo 2 for con break </th>
        </tr>
        <tr>
            <td>
            <?php
            // Ejemplo 1: Usar un bucle for con condición de salida explícita
            for ($i = 1; $i <= 10; $i++) {
                echo $i . "<br>";
            }
            ?>
            </td>
            <td>
            <?php
            // Ejemplo 2: Usar un bucle for con break para salir
            for ($i = 1;; $i++) {
                if ($i > 10) {
                    break;
                }
                echo $i . "<br>";
            }
            ?>
            </td>
        </tr>
    </table>
</body>

