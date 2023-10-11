<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login de Biblioteca</title>
    <style>
        body {
            background: linear-gradient(to bottom, #25274D, #131537);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #login-box {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }

        h1 {
            color: #25274D;
            font-size: 28px;
            margin-bottom: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f3f4f7;
            border: 2px solid #d1d3e2;
        }

        input[type="submit"] {
            background-color: #25274D;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #131537;
        }

        .error-message {
            color: #f00;
            margin-top: 15px;
        }
		audio {
            display: none;
        }
    </style>
</head>
<body>
    <div id="login-box">
        <h1>Login</h1>
        <img src="https://iestpgildaballivian.edu.pe/Public/img/Logo2.webp" alt="Logo de la biblioteca"><br><br>
        <form action="" method="POST" onsubmit="return validateForm()">
            <select id="user-type">
                <option value="estudiante">Estudiante</option>
                <option value="administrador">Administrador</option>
                <!-- Nueva opción para usuario no registrado -->
                <option value="no-registrado">Usuario no registrado</option>
            </select>
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <br>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <br>
            <br>
            <input type="submit" value="Iniciar sesión">
        </form>
        <p class="error-message" id="error-message"></p>
    </div>

    <script>
        function validateForm() {
            var usuario = document.forms[0]["usuario"].value;
            var contrasena = document.forms[0]["contrasena"].value;
            var userType = document.getElementById("user-type").value; // Obtener el tipo de usuario

            // Verificar las credenciales según el tipo de usuario
            if (userType === "estudiante" && usuario === "estudiante" && contrasena === "estudiante_pass") {
                // Redirigir a principal_estudiante.php para estudiantes
                window.location.href = "principal_estudiante.php";
                return false; // Evitar que el formulario se envíe
            } else if (userType === "administrador" && usuario === "admin" && contrasena === "admin_pass") {
                // Redirigir a principal.php para administradores
                window.location.href = "principal_administrador.php";
                return false; // Evitar que el formulario se envíe
            } else if (userType === "no-registrado" && usuario === "usuario" && contrasena === "no_registrado") {
                // Redirigir a principal.php para administradores
                window.location.href = "usuario_no_registrado.php";
                // Realizar alguna acción específica para usuarios no registrados
                alert("Bienvenido como usuario no registrado.");
                return false; // Evitar que el formulario se envíe
            } else {
                document.getElementById("error-message").innerHTML = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
                return false; // Evitar que el formulario se envíe
            }
        }
    </script>
    <audio autoplay loop>
        <source src="audio/música1.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
    </audio>
</body>
</html>