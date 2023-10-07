<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link rel="stylesheet" href="styles.css">

</head>
<table with="75%" border="4" align="center">
    <tr align="center">
        <td>El resultado de la función es:</td>
    </tr>
    <?php
    $cad1 = $_POST["txt1"];
    $cad2 = $_POST["txt2"];
    $cad3 = $_POST["txt3"];
    $op = $_POST["submit"];
    switch ($op) {
        case "Procesar strlen()":
            $n = strlen($cad1);
            break;
        case "Procesar splited()":
            $n = splited($cad1, $cad2);
            break;
        case "Procesar sprintf()":
            $n = sprintf($cad1, $cad2);
            break;

        case "Procesar substr()":
            $n = substr($cad1, $cad2, $cad3);
            break;
        case "Procesar chop()":
            $n = chop($cad1);
            break;
        case "Procesar strpos()":
            $n = strpos($cad1, $cad2);
            break;
        case "Procesar str_replace()":
            $n = str_replace($cad1, $cad2, $cad3);
            break;
    }
    ?>
    <tr align="center">
        <td>
            <?php
            if ($op == "Procesar splited()") {
                for ($i = 0; $n[$i]; $i++)
                    echo "$n[$i] <br>";
            } else
                echo $n;
            ?>

    </tr>
    </td>
</table>
</body>

</html>