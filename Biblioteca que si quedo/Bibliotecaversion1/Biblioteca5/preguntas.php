<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes - Biblioteca</title>
	<style>
        body {
          font-family: Arial, sans-serif;
          background: linear-gradient(135deg, #57D0B3, #C654EB);
          margin: 0;
          padding: 0;
          color: #333;
        }

        header {
           background-color: #2487B8;
           color: #fff;
           text-align: center;
           padding: 20px 0;
        }

        main {
           max-width: 800px;
           margin: 20px auto;
           padding: 20px;
           background-color: #fff;
           border-radius: 5px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
         }

         h1, h2 {
           text-align: center;
           color: #333;
        }

        .faq .question {
           margin-bottom: 20px;
           padding: 20px;
           border: 1px solid #ccc;
           border-radius: 5px;
           background-color: #f9f9f9;
        }

        .faq h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .faq p {
            font-size: 18px;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #1976D2;
            color: #fff;
       }
		.volver {
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 10px 20px;
            background: linear-gradient(to right, #D35674, #007b8e); /* Efecto degradado en el botón */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Transición de color al hacer hover */
        }

        .volver:hover {
            background: linear-gradient(to right, #007b8e, #005f6b); /* Cambio de color al hacer hover */
        }
		
		audio {
            display: none;
        }
		.faq .question {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            cursor: pointer; /* Cambia el cursor al hacer clic en una pregunta */
            transition: background-color 1s; /* Efecto de transición al hacer clic */
        }

        .faq .question:hover {
            background-color: #48D9B6; /* Cambio de color al pasar el ratón sobre una pregunta */
        }

        .faq .question.active .question-title {
            font-weight: bold; /* Cambia el estilo del título cuando la respuesta está abierta */
        }

        .faq .question.active .question-answer {
             max-height: 500px; /* Altura máxima para mostrar la respuesta */
             opacity: 1; /* Mostrar la respuesta */
             transition: max-height 0.5s, opacity 0.5s; /* Efecto de transición suave */
        }

        .faq .question .question-answer {
             max-height: 0; /* Ocultar la respuesta por defecto */
             opacity: 0; /* Ocultar la respuesta por defecto */
             overflow: hidden; /* Evitar el desbordamiento del contenido */
             transition: max-height 0.5s, opacity 0.5s; /* Efecto de transición suave */
        }
</style>
</head>
<body>
    <header>
        <h1>Preguntas Frecuentes</h1>
    </header>
    <main>
        <div class="faq">
            <div class="question">
                <h2>¿Qué recursos puedo encontrar en la biblioteca virtual?</h2>
                <p>En nuestra biblioteca virtual, ofrecemos una amplia gama de recursos, incluyendo libros electrónicos, revistas académicas, documentos técnicos y más. Nuestro objetivo es proporcionar acceso a una variedad de contenidos que abarca la especialidad de Computación e Informática</p>
            </div>
            <div class="question">
                <h2>¿Es gratuito el acceso a los recursos de la biblioteca virtual para usuarios no registrados?</h2>
                <p>Sí, el acceso a la biblioteca virtual es completamente gratuito para todos los usuarios, registrados y no registrados. Creemos en la importancia de brindar acceso abierto a la información y el conocimiento.</p>
            </div>
            <div class="question">
                <h2>¿Puedo leer los libros en línea o descargarlos para leerlos más tarde?</h2>
                <p>En la mayoría de los casos, puedes elegir entre leer los libros en línea o descargarlos para leerlos sin conexión. Para la mayoría de los libros, encontrarás opciones para leer en línea directamente desde el navegador o descargar el archivo PDF para su lectura posterior.</p>
            </div>
            <div class="question">
                <h2>¿Qué medidas de seguridad y privacidad se aplican a mi información personal como usuario no registrado?</h2>
                <p>Valoramos tu privacidad y seguridad. Como usuario no registrado, no solicitamos ni almacenamos información personal real. No es necesario proporcionar información confidencial para acceder a nuestros recursos. Tu privacidad está protegida.</p>
            </div>
            <div class="question">
                <h2>¿Cuánto tiempo puedo acceder a los recursos de la biblioteca virtual como usuario no registrado?</h2>
                <p>No hay límite de tiempo para el acceso a nuestros recursos como usuario no registrado. Puedes visitarnos y explorar los contenidos en cualquier momento que desees, sin restricciones.</p>
            </div>
        </div>
    </main>
	<!-- Agregar un botón para volver a la página anterior -->
    <a href="usuario_no_registrado.php" class="volver">Volver</a>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Biblioteca Frank. Todos los derechos reservados.</p>
    </footer>
	<audio autoplay loop>
        <source src="audio/música18.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>