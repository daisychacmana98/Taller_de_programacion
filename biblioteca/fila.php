<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <?php 
                                        require_once("conexion/conexion.php");
                                        date_default_timezone_set('America/Mexico_City');//obtiene la fecha actual
                                        $fecha=date("y-m-d");
                                        $buscar_pend="SELECT COUNT(Id_prestamo) AS numero FROM prestamos WHERE Fecha_devolucion<$fecha WHERE Estatus='Pendiente'";
                                        $confirmar=$conexion->query($buscar_pend);
                                        $rows=$confirmar->fetch_assoc();
                                        $devolucion=$rows['numero'];
                                        echo $devolucion;
                                        ?>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/fila.js" type="text/javascript"></script>
</body>
</html>