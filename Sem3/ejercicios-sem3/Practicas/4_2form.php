<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
    <link rel="stylesheet" href="styles.css">

</head>
<?php
 $op= $_POST["cadenas"];
 if ($op==1)
 {
 ?>
<div align="center">
    <H2>strlen(cadena)</H2>
    <form action="4_2result.php" method="POST" target="mainFrame">
        <H3><em>Ingrese una cadena</em></H3>
        <input type="text" name="txt1" width="700"><br>
        <input type="submit" name="submit" value="Procesar strlen()">
    </form>
</div>
<?php
 }
 if ($op==2)
 {
 ?>
<div align="center">
    <H2>splited(separador,cadena)</H2>
    <table with="30%" border="5">
        <form action="results.php" method="POST" target="mainFrame">
            <tr align="center">
                <td>separador</td>
                <td>cadena</td>
            </tr>
            <tr align="center">
                <td><input type="text" name="txt1" width="100"></td>
                <td><input type="text" name="txt2" width="400"></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="submit" value="Procesar split()"></td>
            </tr>
        </form>
    </table>
</div>
<?php
 }
 if ($op==3)
 {
 ?>
<div align="center">
    <H2>sprintf(cadena,var1,var2,...)</H2>
    <table with="30%" border="5">
        <form action="results.php" method="POST" target="mainFrame">
            <tr align="center">
                <td>cadena</td>
                <td>var1</td>
            </tr>
            <tr align="center">
                <td><input type="text" name="txt1" width="400" value="8x5 = %d"></td>
                <td><input type="text" name="txt2" width="100" value='8*5'></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="submit" value="Procesar sprintf()"></td>
            </tr>
        </form>
    </table>
</div>
<?php
 }
 if ($op==4) 
 
 ?>
<div align="center">
    <H2>substr(cadena,inicio,longitud)</H2>
    <table with="30%" border="5">
        <form action="results.php" method="POST" target="mainFrame">
            <tr align="center">
                <td>cadena</td>
                <td>inicio</td>
                <td>longitud</td>
            </tr>
            <tr align="center">
                <td><input type="text" name="txt1" width="400"></td>
                <td><input type="text" name="txt2" width="100"></td>
                <td><input type="text" name="txt3" width="100"></td>
            </tr>
            <tr align="center">
                <td colspan="3"><input type="submit" name="submit" value="Procesar substr()"></td>
            </tr>
        </form>
    </table>
</div>
<?php
 
 if ($op==5)
 {
 ?>
<div align="center">
    <H2>chop(cadena)</H2>
    <form action="results.php" method="POST" target="mainFrame">
        <H3><em>Ingrese una cadena</em></H3>
        <textarea name="txt1" rows="5" cols="70"></textarea><br>
        <input type="submit" name="submit" value="Procesar chop()">
    </form>
</div>
<?php
 }
 if ($op==6)
 {
 ?>
<div align="center">
    <H2>strpos(cadena1,cadena2)</H2>
    <table with="30%" border="5">
        <form action="results.php" method="POST" target="mainFrame">
            <tr align="center">
                <td>cadena1</td>
                <td>cadena2</td>
            </tr>
            <tr align="center">
                <td><input type="text" name="txt1" width="300"></td>
                <td><input type="text" name="txt2" width="300"></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="submit" value="Procesar strpos()"></td>
            </tr>
        </form>
    </table>
</div>
<?php
 }
 if ($op==7)
 {
 ?>
<div align="center">
    <H2>str_replace(cadena1,cadena2,texto)</H2>
    <table with="30%" border="5">
        <form action="results.php" method="POST" target="mainFrame">
            <tr align="center">
                <td>cadena1</td>
                <td>cadena2</td>
                <td>texto</td>
            </tr>
            <tr align="center">
                <td><input type="text" name="txt1" width="200"></td>
                <td><input type="text" name="txt2" width="200"></td>
                <td><input type="text" name="txt3" width="300"></td>
            </tr>
            <tr align="center">
                <td colspan="3"><input type="submit" name="submit" value="Procesar str_replace()"></td>
            </tr>
        </form>
    </table>
</div>
<?php
 }
 ?>

</body>
</html>