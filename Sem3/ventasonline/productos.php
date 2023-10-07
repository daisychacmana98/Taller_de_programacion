<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registro de Clientes</title>
<link rel="stylesheet" href="formularios.css" type="text/css">
</head>
<body>
<?php
$fechaActual = date("Y-m-d"); // Obtiene la fecha actual
?>

<table class="fecha">  
    <tr>
        <th>Fecha:</th>
        <td><input type="date" name="fecha" value="<?php echo $fechaActual; ?>"></td>
    </tr>
</table>
<form action="conecta2.php" method="post">
    <h2>PRODUCTOS</h2>
        <br>

    <table align="center">

        <tr>
            <th>Usuario:</th>
            <td><input type="text" name="log" size="20"></td>
            <th>Nro de Venta:</th>
            <td><input type="text" name="nventa" size="20"></td>
        </tr>
        <tr>
            <th>Producto:</th>
            <td><input type="text" name="prod" size="20"></td>
            <th>Precio:</th>
            <td><input type="text" name="precio" size="20"></td>
        </tr>
        <tr>
            <th>Cantidad:</th>
            <td><input type="text" name="cant" size="20"></td>
            <th>Total:</th>
            <td><input type="text" name="tot" size="20"></td>
        </tr>
        <tr>
            <th colspan="4">
                <br>
                <input type="submit" value="COMPRAR" name="btn" class="btn_comprar">
            </th>
        </tr>
    </table>
</form>
</body>
</html>
