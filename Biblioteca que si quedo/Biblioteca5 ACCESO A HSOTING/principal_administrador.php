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

            <a href="#" onclick="showContent('libros')"><i class="fas fa-book-open"></i>Libros</a>
            <br>

            <a href="#" onclick="showContent('cursos')"><i class="fas fa-chalkboard-teacher"></i>Cursos</a>
            <br>
            <a href="#" onclick="showContent('usuarios')"><i class="fas fa-users"></i>Gestión de estudiantes</a>
            <br>
            <a href="#" onclick="showContent('visualizaciones')"><i class="fas fa-eye"></i>Visualizaciones</a> 

            <br><br><hr>    <br>
<a href="#" onclick="logoutAndRedirect()"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>

<div id="content">
           
            <h1>CONTROL BIBLIOTECARIO</h1>

            <div id="libros" class="hidden">
<iframe src="Gestion_libr/libros.php" width="100%" height="800px"></iframe>


            </div>
            <div id="cursos" class="hidden">
<iframe src="cursos.php" width="100%" height="800px"></iframe>
            </div>
            <div id="usuarios" class="hidden">
                <iframe src="Geestion_usu/index.php" width="100%" height="800px"></iframe>

            </div>
            <div id="visualizaciones" class="hidden">
                <iframe src="vistas.php" width="100%" height="800px"></iframe>
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
    showContent('libros');
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
