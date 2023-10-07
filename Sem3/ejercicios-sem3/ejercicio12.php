
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo do while</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejemplo do while</h1>
    <br>

    <table>
        <tr>
            <th>Ejemplo 1</th>
            <th>Ejemplo 2 </th>
        </tr>
        <tr>
            <td>
            <?php
            // Imprimira indefinidamente números mayores a 0
            $i = 0;
            do {
                echo $i;
                $i++;
            } while ($i > 0);

            ?>

            </td>
            <td>
            <?php
            // Imprimir números menores a 10
            $i = 0; // Reiniciamos $i a 0
            do {
                echo $i;
                $i++;
            } while ($i < 10);
            ?>              
            </td>
        </tr>
    </table>
</body>

