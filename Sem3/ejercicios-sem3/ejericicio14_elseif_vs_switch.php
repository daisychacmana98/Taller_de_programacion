
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo else if y switch</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejemplo else if y switch</h1>
    <br>

    <table>
        <tr>
            <th>Ejemplo con else if</th>
            <th>Ejemplo con switch</th>
        </tr>
        <tr>
            <td>
                <?php
                $i = "2";
                if ($i == 0) {
                    print "i igual a  0";
                } elseif ($i == 1) {
                    print "i igual a  1";
                } elseif ($i == 2) {
                    print "i igual a  2";
                }
                ?>
            </td>
            <td>
                <?php
                $i = "1";
                switch ($i) {
                    case 0:
                        print "i igual a  0";
                        break;
                    case 1:
                        print "i igual a  1";
                        break;
                    case 2:
                        print "i igual a  2";
                        break;
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>
