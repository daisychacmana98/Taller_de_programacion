<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Interfaz de Estudiante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregar FontAwesome -->
    <link rel="stylesheet" type="text/css" href="stylepricnipal.css"> 
</head>
<body>
    <div id="datetime">
        <!-- JavaScript para mostrar la fecha y hora actual -->
        <script>
            function updateDateTime() {
                var now = new Date();
                var dateTimeString = now.toLocaleString();
                document.getElementById("datetime").textContent = dateTimeString;
            }

            // Actualizar la fecha y hora cada segundo
            setInterval(updateDateTime, 1000);
            
            // Mostrar la fecha y hora actual al cargar la página
            updateDateTime();
        </script>
    </div>
    
    <div id="wrapper">
        <div id="menu">
            <br>
            <h2><i class="fas fa-book"></i> Menú</h2>
                        <br>

            <a href="#" onclick="showContent('catalogos')"><i class="fas fa-book"></i> Catálogos</a>
            <br>
            <a href="#" onclick="showContent('horario')"><i class="fas fa-clock"></i> Horario</a>
            <br>
            <a href="#" onclick="showContent('cursos')"><i class="fas fa-chalkboard-teacher"></i> Cursos</a>
            <br>
            <a href="#" onclick="showContent('politicas')"><i class="fas fa-file-alt"></i> Políticas</a>
            <br>
            <a href="#" onclick="showContent('solicitar')"><i class="fas fa-book-reader"></i> Solicitar un libro</a>
            <br>

            <a href="#" onclick="showContent('donacion')"><i class="fas fa-gift"></i> Donación</a>
            <br><br><hr>    <br>
<a href="#" onclick="logoutAndRedirect()"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>

<div id="content">
           
                    <h1>BIBLIOTECA VIRTUAL ESTUDIANTIL</h1>

            <div id="catalogos" class="hidden">
<iframe src="catalogos.php" width="100%" height="800px"></iframe>


            </div>
            <div id="horario" class="hidden">
<iframe src="horario.php" width="100%" height="800px"></iframe>
            </div>
            <div id="cursos" class="hidden">
<iframe src="cursos.php" width="100%" height="800px"></iframe>
            </div>
            <div id="politicas" class="hidden">
                <iframe src="politicas.php" width="100%" height="800px"></iframe>

            </div>
            <div id="solicitar" class="hidden">
                <iframe src="Solicitarlibro/solicitar.php" width="100%" height="800px"></iframe>
            </div>
            <div id="donacion" class="hidden">
                <iframe src="Donacion/donacion.php" width="100%" height="800px"></iframe>
            </div>

            <br>

            <footer>
                <p>Diseñado y Desarrollado por los alumnos de Computación e Informática VI Semestre - 2023 <i class="fas fa-laptop-code"></i></p>
            </footer>
        </div>
    </div>

    <script>
        function showContent(id) {
            var elements = document.getElementsByClassName('hidden');
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = 'none';
            }
            document.getElementById(id).style.display = 'block';
        }

        // Mostrar la sección de catálogos al cargar la página
window.onload = function() {
    showContent('catalogos');
};
        function logoutAndRedirect() {
    // Aquí puedes realizar las acciones de cerrar sesión que necesites
    // Por ejemplo, limpiar cookies o eliminar la sesión en el servidor

    // Redirigir a la página de inicio de sesión
    window.location.href = "login.php";
}

    </script>

</body>
</html>
