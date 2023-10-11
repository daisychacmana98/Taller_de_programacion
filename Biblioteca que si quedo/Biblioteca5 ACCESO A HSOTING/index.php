<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca de Instituto Superior Tecnológico Publico Gilda Liliana Ballivián Rosado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Agregar FontAwesome -->
    <link rel="stylesheet" type="text/css" href="styleindex.css"> 
        <link rel="shortcut icon" href="imagenes/logo.webp">

</head>
<body>
    <!-- Cabecera -->
    <header>
        <div class="header-container">
            <img class="logo" src="https://iestpgildaballivian.edu.pe/Public/img/Logo2.webp" alt="Logo">
            <nav id="menu">
                <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
                <a href="#catalogo" onclick="showContent('catalogos')"><i class="fas fa-handshake"></i> Catálogos de Libros</a>
                <a href="#preguntas" onclick="showContent('preguntas')"><i class="icon fa-question fa-fw"></i> Preguntas frecuentes</a>

                <a href="#ubicaciones" onclick="showContent('ubicacion')"><i class="fas fa-user-graduate"></i> Ubicación</a>
                <a class="login-button" style="    color: #ffffff;
" href="login.php" onclick="showContent('cerrar')">Iniciar sesión</a>
            </nav>
        </div>
    </header>
<main>

            <h1>BIBLIOTECA</h1><br>
            <br>

            <!-- Contenedor de imágenes que se mueven constantemente -->
            <div id="slidepadre">
<div id="slider">
<figure>
            <img class="slider-image" src="imagenes/imagen1.png" alt="Imagen 1">
            <img class="slider-image" src="imagenes/imagen2.png" alt="Imagen 2">
            <img class="slider-image" src="imagenes/imagen3.png" alt="Imagen 3">
            <img class="slider-image" src="imagenes/imagen3.png" alt="Imagen 4">
            <img class="slider-image" src="imagenes/imagen3.png" alt="Imagen 5">
        </figure>
        </div>
</div>
<br>
        <div id="catalogo"> 

        <h1>Catálogo de libros</h1>
        <br>
    <section class="carruselcata">

        <img src="https://pictures.abebooks.com/isbn/9788479534080-us.jpg" alt="">
        <img src="https://images.cdn3.buscalibre.com/fit-in/360x360/10/5b/105b658b959ac2d3f1d49407fefc154e.jpg" alt="">
        <img src="https://http2.mlstatic.com/D_NQ_NP_618376-MLM33080224072_122019-O.webp" alt="">
        <img src="https://pictures.abebooks.com/isbn/9788441413085-es.jpg" alt="">
        <img src="https://pictures.abebooks.com/isbn/9781931059633-es.jpg" alt="">
        <img src="https://covers.alibrate.com/b/5ac776ac52533605b378dfb9/f9024081-cac9-48d8-b0a9-7af932c3ae9d/share" alt="">
        <!-- Agregamos más imágenes aquí -->
    </section>


    <br>
</div>

 <br> <br>
                <a id="button" style=" 
" href="horario_usu.php">Ver Horario</a>

<br>
<br>
<div id="preguntas"></div>
<h1>Preguntas frecuentes</h1>

<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
  </svg>
</div>

<details>
  <summary>
    ¿Qué tipos de recursos están disponibles en la biblioteca virtual?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>La biblioteca virtual ofrece una amplia gama de recursos, incluyendo libros electrónicos, revistas académicas, documentos técnicos, etc. Nuestro objetivo es proporcionar acceso a una variedad de contenidos que abarca la especialidad de Computación e Informática.</p>
</details>

<details>
  <summary>
    ¿Es gratuito el acceso a los recursos de la biblioteca virtual para usuarios no registrados?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>Sí, el acceso a la biblioteca virtual es completamente gratuito para todos los usuarios, registrados y no registrados. Creemos en la importancia de brindar acceso abierto a la información y el conocimiento.</p>
</details>

<details>
  <summary>
    ¿Puedo leer los libros en línea o descargarlos para leerlos más tarde?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>En la mayoría de los casos, puedes elegir entre leer los libros en línea o descargarlos para leerlos sin conexión. Para la mayoría de los libros, encontrarás opciones para leer en línea directamente desde el navegador o descargar el archivo PDF para su lectura posterior.</p>
</details>

<details>
  <summary>
    ¿Qué medidas de seguridad y privacidad se aplican a mi información personal como usuario no registrado?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>Valoramos tu privacidad y seguridad. Como usuario no registrado, no solicitamos ni almacenamos información personal real. No es necesario proporcionar información confidencial para acceder a nuestros recursos. Tu privacidad está protegida.</p>
</details>

<details>
  <summary>
    ¿Cuánto tiempo puedo acceder a los recursos de la biblioteca virtual como usuario no registrado?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>No hay límite de tiempo para el acceso a nuestros recursos como usuario no registrado. Puedes visitarnos y explorar los contenidos en cualquier momento que desees, sin restricciones.</p>
</details>

<div id="ubicaciones"> 
<div class="bg-dark styled-section">
    <div class="container-2">
        <h1 >Cómo Llegar</h1>
        <iframe title="Google Maps" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.4725604096334!2d-76.97438210307625!3d-12.165648759760506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b851de5dffc1%3A0xa7c420906cc5e7f8!2sIESTP%20Gilda%20Liliana%20Ballivian%20Rosado!5e0!3m2!1ses-419!2spe!4v1589597121230!5m2!1ses-419!2spe" width="100%" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         <p class="section-text"><i class="fas fa-home"></i> &nbsp;Ubícanos : Av. Vargas Machuca N° 315 (Frente al Banco de Credito) Urb. "San Juan" Distrito de San Juan de Miraflores.</p>
       
        <p style="color:#000000">Para llegar a la biblioteca, sigue las siguientes instrucciones:</p>
        <ol class="section-text">
            <section class="directions-section">
  <div class="direction-box">
    <div class="direction-item">
      <h3>Desde la estación del tren María Auxiliadora</h3>
      <p>Toma el autobús número 73 hasta la parada de la biblioteca.</p>
    </div>
  </div>

  <div class="direction-box">
    <div class="direction-item">
      <h3>Desde la municipalidad S.J.M</h3>
      <p>Dirígete al noroeste por Av. Belisario Suarez hacia Av Tomás Guzmán (15 min).</p>
    </div>
  </div>

  <div class="direction-box">
    <div class="direction-item">
      <h3>Si utilizas tu propio automóvil</h3>
      <p>Puedes utilizar las siguientes coordenadas GPS: [lat: -12.165235, lng: -76.975194].</p>
    </div>
  </div>
</section>
        </ol>
    </div>
</div>
</div>
    </main>
    <footer class="footer">
        <div class="footer-container">
            <div>
                <h4>Correos</h4>
                <p><b><i class="far fa-envelope"></i>&nbsp; Biblioteca:</b> biblioteca@iestpgildaballivian.edu.pe</p>
                <p><b><i class="far fa-envelope"></i>&nbsp; Atención al estudiante:</b> informes@iestpgildaballivian.edu.pe</p>
            </div>
            <div>
                <h4>Teléfonos</h4>
                <p><i class="fas fa-phone"></i> <b>Mesa de partes:</b> 01-2762910</p>
                <p><i class="fas fa-phone"></i> <b>Secretaría de Dirección:</b> 01-4661035</p>
            </div>
            <div style="text-align: center;">
                <h4>Redes Sociales</h4>
                <a href="https://www.facebook.com/IESTPGILDABALLIVIANOFICIAL" target="_blank" rel="noreferrer"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png" alt="Facebook" /></a>
                <a href="https://www.messenger.com/t/IESTPGILDABALLIVIANOFICIAL" target="_blank" rel="noreferrer"><img src="https://img.icons8.com/fluent/48/000000/facebook-messenger.png" alt="Messenger" /></a>
                <a href="mailto:informes@iestpgildaballivian.edu.pe" target="_blank" rel="noreferrer"><img src="https://img.icons8.com/fluent/48/000000/gmail.png" alt="Correo" /></a>
                <br /><br />
                <a target="_blank" href="http://www.drelm.gob.pe/reclamaciones/?edfd028ad7e8fa3430b81e7efd47883e67842be3"><b><i class="fas fa-book-open"></i>&nbsp;Libro de Reclamaciones</b></a>
            </div>
            </div>
        <hr/>

        <div class="footer-container">
                <p>Diseñado y Desarrollado por los alumnos de Computación e Informática VI Semestre - 2023&nbsp;<i class="fas fa-laptop-code"></i></p>
        </div>

    </footer>
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