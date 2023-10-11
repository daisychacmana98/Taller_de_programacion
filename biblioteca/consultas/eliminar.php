 <?php
    session_start();
    $id=$_SESSION['Id_usuario'];
    $usuario=$id;
    if ($id == null || $id='') {
        header("location:../index.php");
    }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/sweetalert.css">
    <script src="../vendor/bootstrap/js/sweetalert.min.js" type="text/javascript"></script>
</head>
<body>
        <?php 
              require_once ("../conexion/conexion.php");
              $id=$_REQUEST['id'];
              $query = "DELETE FROM consulta WHERE Id_consulta=$id ";
              $verificar=$conexion->query($query);
              if ($verificar) {
                echo '
                <script>
                swal({
                  title: "Operación exitosa",
                  text: "La consulta fue eliminada correctamente!",
                  type: "success",
                  confirmButtonClass: "btn-success",
                  confirmButtonText: "Aceptar",
                  closeOnConfirm: false
                },
                function(){
                 window.location="consultas.php";
                });
                </script>
                ';
              }
              else{
                echo '
                <script
                swal({
                  title: "Operación fallida",
                  text: "Ocurrio un error al eliminar la consulta!",
                  type: "error",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Regresar",
                  closeOnConfirm: false
                },
                function(){
                  window.history.go(-1);
                });>
                </script>
                ';
              }
            ?> 
<script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script> 
<script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
</body>
</html>