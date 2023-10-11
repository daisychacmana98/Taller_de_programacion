<!DOCTYPE html>
<html lang="en">
<head>
	<title>Golden Library</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/util.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/main.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/sweetalert.css">
	<script src="vendor/bootstrap/js/sweetalert.js" type="text/javascript"></script>
</head>
<body>
	<div class="row m-0 p-0">
			<div class="d-none d-sm-none d-md-block d-lg-block  col-md-7 col-lg-8 p-0">
				<img src="images/fondo.jpg" class="w-100 vh-100" alt="">
				<div class="carousel-caption d-none d-md-block">
			        <h5>Golden Library</h5>
			        <p class="text-white">Deja que un libro descubra quien eres</p>
			     </div>
			</div>
			<div class="bg-white col-sm-12 col-md-5 col-lg-4 p-0">
				<form class="login100-form validate-form p-5" method="POST" action="index.php">
					<span class="login100-form-title p-b-26">
						<b>Inicio de sesión</b>
					</span>
					<div class="d-flex justify-content-center">
						<img class="p-2 rounded-circle" height="75px" width="75px" src="images/logo.png" style="background: #4E0592;">
					</div>
					<br>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" required autofocus name="usuario" autocomplete="off">
						<small class="focus-input100" data-placeholder="Usuario"></small>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="icofont-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" required>
						<small class="focus-input100" data-placeholder="Password"></small>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="acceder">
								Acceder
							</button>
						</div>
					</div>
				</form>
			</div>
	</div>
	<?php 
		if (isset($_POST['acceder'])) {
			require_once("conexion/conexion.php");
			$usuario=$_POST['usuario'];
			$pass=$_POST['pass'];
			$query="SELECT * FROM usuarios WHERE Nombre_usuario='$usuario' AND Password='$pass' AND Activo=1";
			$resultado=$conexion->query($query);
			$fila=$resultado->fetch_assoc();
			session_start();
			$_SESSION['Id_usuario']=$fila['Id_usuario'];
			if ($resultado->num_rows>0) {
				header("location:inicio.php");
			}else{
				echo '<script>
                    swal({
                    title: "Operación Fallida",
                    text: "Datos incorrectos, intente nuevamnte!",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Aceptar",
                  },
                  function(){
                    window.location="index.php";
                  });
                    </script>';
				}
			}
	?>
		
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="vendor/jquery/main.js"></script>
</body>
</html>