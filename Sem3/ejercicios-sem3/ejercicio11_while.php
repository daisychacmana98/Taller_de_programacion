

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo while</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejemplo while</h1>
    <br>

    <table>
        <tr>
            <th>Ejemplo 1</th>
            <th>Ejemplo 2 </th>
        </tr>
        <tr>
            <td>
                <?php
                // Ejemplo 1
                $i = 1;
                while ($i <= 10) {
                    echo $i++ . "<br>";
                }

                ?>
            </td>
            <td>
                <?php
                // Ejemplo 2
                $i = 1;
                while ($i <= 10):
                    echo $i . "<br>"; 
                    $i++;
                endwhile;
                ?>
            </td>
        </tr>
    </table>
</body>

</html>