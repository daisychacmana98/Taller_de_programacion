<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link rel="stylesheet" href="styles.css">

</head>
<div align="center">
    <table align="center" width="25%" border="4">
        <tr align="center" bgcolor="#000033">
            <td colspan="2">
                <H3>
                    <font color="#FFFFCC">
                        <marquee behavior="scroll" bgcolor="#000033" direction="left">OPERACIONES
                            CON MATRICES</marquee>
                    </font>
                </H3>
            </td>
        </tr>
        <form action="5_1table.php" method="post" target="rightFrame">
            <tr align="center">
                <td colspan="2">Seleccione una operación:
                    <select name="funciones">
                        <option value="1">Media de las Filas
                        <option value="2">Media de las Columnas
                        <option value="3">Mayor de cada Fila
                        <option value="4">Mayor de cada Columna
                    </select>
                </td>
            </tr>
            <tr align="center">
                <td bgcolor="#CCCCCC">Nº Filas</td>
                <td bgcolor="#CCCCCC">Nº Columnas</td>
            </tr>
            <tr align="center">
                <td><input type="text" name="F"></td>
                <td><input type="text" name="C"></td>
            </tr>
            <tr align="center">
                <td colspan="2" bgcolor="#CCCCCC"><input type="submit" name="submit" value="Crear Matriz"></td>
            </tr>
        </form>
    </table>
</div>
</body>

</html>