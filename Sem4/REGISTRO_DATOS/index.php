<html>
<head>
<meta charset="utf-8">
<title>Registro de Alumno</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"

</head>
<body>
    <form name="registrar" action="registrar.php" method="post" enctype="multipart/form-data">
		<h1>Registro de Alumno</h1> 

      <label> <i class="fas fa-user"></i> Nombre y Apellidos:</label><br>
        <input type="text" placeholder="Solo letras. Màximo 20 letras" name="nombre"><br>
        
        <label> <i class="fas fa-envelope"></i> Correo Electrónico:</label><br>
        <input type="text" placeholder="Validar Email" name="txtcorreo"><br>
        
        <label><i class="fas fa-phone"></i> Telefono:</label><br>
        <input type="text" placeholder="Solo números. Máximo 9" name="txttelefono"><br>
        
        <label><i class="fas fa-lock"></i> Contraseña:</label><br>
        <input type="password" placeholder="Letras y números de 6 a 12" name="txtcontrasena"><br>
        
        <label> <i class="fas fa-calendar-alt"></i> Fecha de nacimiento:</label><br>
        <input type="date" name="txtfecha">
		
 		<input type="checkbox" id="invalidCheck" required>Acepta los términos y condiciones
	
        <input type="submit" value="Guardar" class="btn" name="btnguardar">

    </form>
</body>
</html>

