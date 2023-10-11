<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Interfaz de Estudiante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregar FontAwesome -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #2196F3, #1976D2); /* Fondo degradado azul más claro */
            color: #333; /* Texto más oscuro */
        }

        #datetime {
            text-align: right;
            padding: 10px;
            font-size: 18px;
            background-color: rgba(255, 255, 255, 0.2); /* Fondo semitransparente para la fecha y hora */
            border-bottom: 1px solid #ccc; /* Línea separadora */
        }

        #wrapper {
            display: flex;
            background-color: #f0f0f0;
        }

        #menu {
            width: 250px;
            background: linear-gradient(to bottom, #6a1b9a, #00c853); /* Fondo degradado morado a verde */
            color: #fff;
            padding: 20px;
            height: 100vh;
            overflow-y: auto; /* Agregar barra de desplazamiento si el contenido es largo */
        }

        #content {
            flex-grow: 1;
            padding: 20px;
            overflow: hidden; /* Ocultar el desbordamiento de contenido */
        }

        #menu h2 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        #menu a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
            transition: background-color 0.3s;
            border-left: 4px solid transparent; /* Inicialmente, no muestra ninguna línea de borde izquierda */
        }

        #menu a:hover {
            background: linear-gradient(to right, #555, #00bcd4); /* Fondo degradado con colores personalizados en hover */
            border-left: 4px solid #00bcd4; /* Muestra línea de borde izquierda en hover */
        }

        .hidden {
            display: none;
        }

        h2 {
            color: #333;
        }

        /* Estilos para las imágenes */
        .image-container {
            display: flex; /* Muestra las imágenes en una fila */
            animation: moveImages 20s linear infinite; /* Ajusta la duración según tus necesidades */
            overflow: hidden; /* Ocultar el desbordamiento de las imágenes */
        }

        .moving-images {
            width: 500px; /* Tamaño de las imágenes */
            margin-right: 100px; /* Espacio entre las imágenes */
        }

        @keyframes moveImages {
            0% {
                transform: translateX(100%); /* Comienza fuera del área visible */
            }
            100% {
                transform: translateX(-100%); /* Termina fuera del área visible */
            }
        }

        /* Estilos para el footer */
        .footer {
            background: linear-gradient(to bottom, #3498db, #8e44ad); /* Fondo degradado azul a morado */
            color: #fff;
            padding: 20px;
        }

        .footer-columns {
            display: flex;
            justify-content: space-between;
        }

        .footer-column {
            flex-basis: 30%; /* Ajusta el ancho de las columnas según tus necesidades */
        }

        .gradient-text {
            background: linear-gradient(90deg, #FFDB58, #FFD700); /* Degradado de mostaza a mostaza intenso */
            color: transparent; /* Hace que el texto sea transparente */
            -webkit-background-clip: text; /* Permite que el fondo del degradado se muestre solo detrás del texto */
            background-clip: text;
			font-size: 17px; 
        }
		audio {
            display: none;
        }
    </style>  
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
            <h2><i class="fas fa-book"></i> Menú</h2>
			<a href="catalogos.php" onclick="showContent('catalogos')"><i class="fas fa-book"></i> Catálogos</a>
            <a href="horario.php" onclick="showContent('horario')"><i class="fas fa-clock"></i> Horario</a>
            <a href="cursos2.php" onclick="showContent('cursos')"><i class="fas fa-chalkboard-teacher"></i> Cursos</a>
            <a href="politicas.php" onclick="showContent('politicas')"><i class="fas fa-file-alt"></i> Políticas</a>
            <a href="solicitar.php" onclick="showContent('solicitar')"><i class="fas fa-book-reader"></i> Solicitar un libro</a>
            <a href="donacion.php" onclick="showContent('donacion')"><i class="fas fa-gift"></i> Donación</a>
            <a href="index.php" onclick="showContent('cerrar')"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a> 
        </div>
        <div id="content">
            <div id="catalogos" class="hidden">
                <h2>Catálogos</h2>
                <!-- Contenido de Catálogos -->
            </div>
            <div id="horario" class="hidden">
                <h2>Horario</h2>
                <!-- Contenido de Horario -->
            </div>
            <div id="cursos" class="hidden">
                <h2>Cursos</h2>
                <!-- Contenido de Cursos -->
            </div>
            <div id="politicas" class="hidden">
                <h2>Políticas</h2>
                <!-- Contenido de Políticas -->
            </div>
            <div id="solicitar" class="hidden">
                <h2>Solicitar un libro</h2>
                <!-- Contenido de Solicitar un libro-->
            </div>
            <div id="donacion" class="hidden">
                <h2>Donación</h2>
                <!-- Contenido de Donación -->
            </div>
            <div id="cerrar" class="hidden">
                <h2>Cerrar sesión</h2>
                <!-- Contenido de Cerrar sesión -->
            </div>
			
			<br>
            <h1 style="color: #1976D2; font-size: 3em;" align="center">BIBLIOTECA VIRTUAL ESTUDIANTIL</h1><br>
            <br>

            <!-- Contenedor de imágenes que se mueven constantemente -->
            <div class="image-container">
                <img class="moving-images" src="https://scontent.flim16-1.fna.fbcdn.net/v/t39.30808-6/348854306_1273763953309582_4545807474294206947_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=49d041&_nc_ohc=35-lF_ronfkAX-_9qhL&_nc_ht=scontent.flim16-1.fna&oh=00_AfDfyabMPI3fr4Ayo1SjsbIRCnb5_MXjfTPc7eEF1GSgXQ&oe=65165971" alt="Imagen 1">
                <img class="moving-images" src="https://scontent.flim16-1.fna.fbcdn.net/v/t39.30808-6/348630658_169318785827027_946873084395503678_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=49d041&_nc_ohc=AN1Pr22GodAAX-O7pLM&_nc_ht=scontent.flim16-1.fna&oh=00_AfAs70FufPaozbMZTk6xPRN9tJyP6KD4LI-fDpkUYN-cYg&oe=651694AC" alt="Imagen 2">
                <img class="moving-images" src="https://scontent.flim16-1.fna.fbcdn.net/v/t39.30808-6/349101420_616669050377628_4680997440640328587_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=49d041&_nc_ohc=52DJSj-ryDEAX8-qxA8&_nc_ht=scontent.flim16-1.fna&oh=00_AfB4T3e3QdIibgMWTXB_Qg0L51pzR0lqYk3x8no9IgxQuQ&oe=651621F3" alt="Imagen 3">
            </div>
			<br><br><br><br>
		  <footer class="footer mt-auto">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-column">
                    <h4>| Correos</h4>
                    <p><b><i class="far fa-envelope mt-2"></i>&nbsp; Biblioteca: </b> biblioteca@iestpgildaballivian.edu.pe</p>
                    <p><b><i class="far fa-envelope mt-2"></i>&nbsp; Atención al estudiante: </b> informes@iestpgildaballivian.edu.pe</p>
					<p><b><i class="far fa-envelope mt-2"></i>&nbsp; Soporte tecnico: </b> soporte@iestpgildaballivian.edu.pe</p>
                    <p><b><i class="far fa-envelope mt-2"></i>&nbsp; Bolsa de trabajo: </b> bolsadetrabajo@iestpgildaballivian.edu.pe</p>
					<p><b><i class="far fa-envelope mt-2"></i>&nbsp; Atención al postulante: </b> admision@iestpgildaballivian.edu.pe</p>
                </div>
                <div class="footer-column">
                    <h4>| Teléfonos</h4>
                    <p><i class="fas fa-phone"></i> <b>Mesa de partes:</b> 01-2762910</p>
                    <p><i class="fas fa-phone"></i> <b>Secretaría de Dirección:</b> 01-4661035</p>
                </div>
                <div class="footer-column">
                    <h4>| Redes Sociales</h4>
                    <a rel="noreferrer" href="https://www.facebook.com/IESTPGILDABALLIVIANOFICIAL" title="Facebook" target="_blank"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png" alt="Facebook" /></a>
                    <a title="Messenger" class="mr-1 ml-1" rel="noreferrer" href="https://www.messenger.com/t/IESTPGILDABALLIVIANOFICIAL" target="_blank"><img src="https://img.icons8.com/fluent/48/000000/facebook-messenger.png" alt="Messenger" /></a>
                    <a title="Correo" rel="noreferrer" href="mailto:informes@iestpgildaballivian.edu.pe" target="_blank"><img src="https://img.icons8.com/fluent/48/000000/gmail.png" alt="Correo" /></a>
                    <br><br>
                    <a class="text-light btn-lg" target="_blank" href="http://www.drelm.gob.pe/reclamaciones/?edfd028ad7e8fa3430b81e7efd47883e67842be3"><b><i class="fas fa-book-open"></i> &nbsp;Libro de Reclamaciones</b></a>
                </div>
            </div>
            <hr class="bg-light mt-4">
            <div class="row text-light mt-4">
                <div class="col-md-6 mb-2">
                    <p>Computación e Informática VI Semestre - 2023</p>
                </div>
                <div class="col-md-6 mb-2">
                    <p class="text-end"><span class="gradient-text">Diseñado y Desarrollado por Frank David Chancahuaña Acuña</span> &nbsp;<i class="fas fa-laptop-code"></i></p>
                </div>
            </div>
        </div>
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
    </script>
	<audio autoplay loop>
        <source src="audio/música9.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>