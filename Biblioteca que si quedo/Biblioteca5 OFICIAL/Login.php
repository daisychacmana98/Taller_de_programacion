<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login de Biblioteca</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>

<body>
    <div class="left-section">
        <h1>Biblioteca Virtual</h1>
        <a href="index.php">
            <i class="fas fa-angle-left flecha"></i>
        </a>
    </div>
    <div class="right-section">
        <img class="img1" src="https://iestpgildaballivian.edu.pe/Public/img/Logo2.webp"
            alt="Logo">
        <br>    
        <section>
            <div class="formular__validation"></div>
            <div class="formular-wrapper"></div>
            <br>
            <form class="formular" onsubmit="return validateForm();">
                <div>
                    <label>
                        <input type="radio" name="user-type" value="estudiante" required>
                        Estudiante
                    </label>
                    <label>
                        <input type="radio" name="user-type" value="administrador">
                        Administrador
                    </label>
                </div>
                <br>    <br>
                <div class="formular__input-wrapper">
                    <label>Nombre de usuario:</label>
                    <input class="formular__input formular__input--name" type="text" name="usuario">
                </div>
                <br>
                <div class="formular__input-wrapper">
                    <label>Contraseña:</label>
                    <input class="formular__input formular__input--pw" type="password" name="contrasena">
                </div>
                <br>
                <input class="button" type="submit" value="Iniciar Sesión">
            </form> <br>
            <p class="error-message" id="error-message"></p>
        </section>
    </div>

    <script>
        function validateForm() {
            var usuario = document.querySelector('input[name="usuario"]').value;
            var contrasena = document.querySelector('input[name="contrasena"]').value;
            var userType = document.querySelector('input[name="user-type"]:checked');

            if (!userType) {
                document.getElementById("error-message").innerHTML = "Selecciona un tipo de usuario.";
                return false;
            }

            userType = userType.value;

            if (userType === "estudiante" && usuario === "estudiante" && contrasena === "estudiante_pass") {
                window.location.href = "principal_estudiante.php";
                return false;
            } else if (userType === "administrador" && usuario === "admin" && contrasena === "admin_pass") {
                window.location.href = "principal_administrador.php";
                return false;
            } else {
                document.getElementById("error-message").innerHTML = "  Credenciales incorrectas. Por favor, inténtalo de nuevo.";
                return false;
            }
        }
    </script>
</body>

</html>
