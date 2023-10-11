<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Interfaz de Biblioteca</title>
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
            display: flex; /* Mostrar las imágenes en una fila */
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
            background: linear-gradient(to bottom, #BF8AE0, #64B2D2); 
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
            background: linear-gradient(90deg, #FF00FF, #800080); /* Degradado de morado claro a morado */
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
            <a href="catalogos_usu.php" onclick="showContent('catalogos_usu')"><i class="fas fa-handshake"></i> Catálogos de Libros</a>
            <a href="preguntas.php" onclick="showContent('preguntas')"><i class="fas fa-book-open"></i> Preguntas frecuentes</a>
            <a href="horario_usu.php" onclick="showContent('horario_usu')"><i class="fas fa-flask"></i> Horarios</a>
            <a href="ubicacion.php" onclick="showContent('ubicacion')"><i class="fas fa-user-graduate"></i> Ubicación</a>
            <a href="index.php" onclick="showContent('cerrar')"><i class="fas fa-chart-bar"></i> Cerrar sesión</a>
        </div>
        <div id="content">
            <div id="catalogos_usu" class="hidden">
                <h2>Catálogos de Libros</h2>
                <!-- Contenido de Catálogos de Libros -->
            </div>
            <div id="preguntas" class="hidden">
                <h2>Preguntas frecuentes</h2>
                <!-- Contenido de Preguntas frecuentes -->
            </div>
            <div id="horario_usu" class="hidden">
                <h2>Horarios</h2>
                <!-- Contenido de Horarios -->
            </div>
            <div id="ubicacion" class="hidden">
                <h2>Ubicación</h2>
                <!-- Contenido de Ubicación -->
            </div>
            <div id="cerrar" class="hidden">
                <h2>Cerrar sesión</h2>
                <!-- Contenido de Cerrar sesión -->
            </div><br>
            <h1 style="color: #1976D2; font-size: 3em;" align="center">ACCESO PÚBLICO</h1><br>
            <br>

            <!-- Contenedor de imágenes que se mueven constantemente -->
            <div class="image-container">
                <img class="moving-images" src="https://scontent.flim16-2.fna.fbcdn.net/v/t39.30808-6/310260346_493194249487377_1944068011206828290_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5614bc&_nc_ohc=MXIuKV8VnRcAX-qQrpV&_nc_ht=scontent.flim16-2.fna&oh=00_AfB7u6fm5LjcWSxfnvKfJcdAMsxzjZzog27REu2zbHguTg&oe=6516F692" alt="Imagen 1">
                <img class="moving-images" src="https://scontent.flim16-3.fna.fbcdn.net/v/t39.30808-6/310403281_492276162912519_1768973102492513415_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5614bc&_nc_ohc=qtwuEBPNl80AX9JB9OX&_nc_ht=scontent.flim16-3.fna&oh=00_AfDa9hSPSztvDZXSJXPgjUMhIuP3HkmLByl9W6cGRnqpXg&oe=65165C2B" alt="Imagen 2">
                <img class="moving-images" src="https://scontent.flim16-2.fna.fbcdn.net/v/t39.30808-6/310824739_492276059579196_7889212180933959791_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5614bc&_nc_ohc=EVJCEnqORRwAX_xLuyz&_nc_ht=scontent.flim16-2.fna&oh=00_AfDCYOTZEacNJlGI23uNR6IN4G12y9m2JAbkA0R27HsXug&oe=6517FE9E" alt="Imagen 3">
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
                    <!-- Agregar más correos si es necesario -->
                </div>
                <div class="footer-column">
                    <h4>| Teléfonos</h4>
                    <p><i class="fas fa-phone"></i> <b>Mesa de partes:</b> 01-2762910</p>
                    <p><i class="fas fa-phone"></i> <b>Secretaría de Dirección:</b> 01-4661035</p>
                    <!-- Agregar más números de teléfono si es necesario -->
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
        <source src="audio/música16.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>