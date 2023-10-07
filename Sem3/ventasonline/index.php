<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sistema de ventas</title>
  <link rel="stylesheet" href="portada.css">
</head>
<body>
  <h1>SISTEMA DE VENTAS ONLINE</h1>
  <center>
    <table class="tabla2">
      <tr>
        <td class="columna1">
          <form name="comprar" action="procesar_index.php" method="post" target="main">
            Usuario:<br> <input type="text" name="log"><br> 
            Contraseña:<br> <input type="password" name="pass"><br> 
            <br>
            <input type="submit" value="IR A COMPRAR" class="btn">
          </form> 
          <br>
          Si no está registrado<br>
          <a href="cliente.php" target="main">Regístrese aquí</a>
        </td> 
        <td class="columna2">
          <iframe src="default.htm" name="main" width="100%" height="100%"></iframe>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
