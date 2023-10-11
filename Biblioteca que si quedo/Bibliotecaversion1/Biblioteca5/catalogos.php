<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros de la Biblioteca</title>
    <style>
		 body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #AB6BC7, #4CC370);
            margin: 0;
            padding: 0;
            color: #333;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
		
		h1 {
            padding: 20px 0;
            text-align: center;
			color: aqua;
        }
		
        section {
            display: flex;
            width: 1000px;
            height: 830px;
        }

        section img {
            width: 0px;
            flex-grow: 1;
            object-fit: cover;
            opacity: .8;
            transition: .5s ease;
        }

        section img:hover {
            cursor: crosshair;
            width: 300px;
            opacity: 1;
            filter: contrast(120%);
            transition: width 0.5s ease, filter 0.5s ease;
        }

        /* Agregamos estilos para la visualización de la imagen expandida */
        .expanded-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .expanded-image img {
            max-width: 80%;
            max-height: 80%;
        }
		
		 .volver {
            display: block;
            margin: 20px 0; /* Eliminamos el margen izquierdo y derecho */
            text-align: center;
            padding: 10px 20px;
            background: linear-gradient(to right, #BA4CC3, #007b8e); /* Efecto degradado en el botón */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Transición de color al hacer hover */
			width: 100%; /* Abarcar toda la página horizontalmente */
        }

        .volver:hover {
            background: linear-gradient(to right, #007b8e, #D9415A ); /* Cambio de color al hacer hover */
        }
		audio {
            display: none;
        }
		
    </style>
</head>
<body>
    <h1>Libros de la Biblioteca</h1>
    <section>
        <img src="https://pictures.abebooks.com/isbn/9788479534080-us.jpg" alt="">
		<img src="https://images.cdn3.buscalibre.com/fit-in/360x360/10/5b/105b658b959ac2d3f1d49407fefc154e.jpg" alt="">
		<img src="https://http2.mlstatic.com/D_NQ_NP_618376-MLM33080224072_122019-O.webp" alt="">
		<img src="https://pictures.abebooks.com/isbn/9788441413085-es.jpg" alt="">
		<img src="https://pictures.abebooks.com/isbn/9781931059633-es.jpg" alt="">
		<img src="https://covers.alibrate.com/b/5ac776ac52533605b378dfb9/f9024081-cac9-48d8-b0a9-7af932c3ae9d/share" alt="">
        <!-- Agregamos más imágenes aquí -->
    </section>

    <!-- Este div se usa para mostrar la imagen expandida -->
    <div class="expanded-image" style="display: none;">
        <img src="" alt="Imagen expandida">
    </div>
	<!-- Agregar un botón para volver a la página anterior -->
    <a href="principal_estudiante.php" class="volver">Volver</a>
    <script>
        // JavaScript para hacer que las imágenes se expandan al hacer clic
        const images = document.querySelectorAll('section img');
        const expandedImage = document.querySelector('.expanded-image img');

        images.forEach((image, index) => {
            image.addEventListener('click', () => {
                expandedImage.src = image.src;
                expandedImage.alt = `Imagen ${index + 1}`;
                document.querySelector('.expanded-image').style.display = 'flex';
            });
        });
        // Cerrar la imagen expandida al hacer clic en ella
        expandedImage.addEventListener('click', () => {
            document.querySelector('.expanded-image').style.display = 'none';
        });
    </script>
	<audio autoplay loop>
        <source src="audio/música10.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>