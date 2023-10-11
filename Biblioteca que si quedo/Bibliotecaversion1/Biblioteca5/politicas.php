<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas de la Biblioteca</title>
	<style>
         * {
           margin: 0;
           padding: 0;
           box-sizing: border-box;
          }

         body {
           font-family: Arial, sans-serif;
           background-color: #f4f4f4;
           color: #333;
          }

         header {
           background-color: #1976D2;
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

         section {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
         }

         ul {
            list-style: disc;
            margin-left: 20px;
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
            background: linear-gradient(to right, #A740AF, #0F893D); /* Efecto degradado en el botón */
            color: #FFF ;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.8s; /* Transición de color al hacer hover */
        }

        .volver:hover {
            background: linear-gradient(to right, #D47B44, #D44486); /* Cambio de color al hacer hover */
        }
		 audio {
            display: none;
        }
</style>
</style>
</head>
<body>
    <header>
        <h1>Políticas de la Biblioteca virtual</h1>
    </header>
    <main>
        <section>
            <h2>Acceso y Registro</h2>
            <p>El acceso a los recursos de la biblioteca virtual está disponible para todos los miembros registrados de la comunidad académica.</p>
            <p>Los usuarios deben registrarse utilizando su identificación institucional para acceder a los recursos electrónicos y servicios.</p>
        </section>
        <section>
            <h2>Uso Aceptable</h2>
            <p>Los usuarios deben cumplir con las leyes de derechos de autor y respetar los términos de uso de los recursos electrónicos.</p>
			<p>Está prohibido el uso de la biblioteca virtual con fines ilegales o no éticos, como la descarga para malos usos o distribución ilegal de contenido protegido por derechos de autor.</p>
        </section>
        <section>
            <h2>Privacidad y Seguridad</h2>
            <p>La biblioteca protegerá la privacidad de los usuarios y no compartirá información personal sin el consentimiento del usuario, de acuerdo con las regulaciones de privacidad aplicables.</p>
            <ul>
                <li>Disponibilidad de Recursos.</li>
                <li>Responsabilidad del Usuario.</li>
                <li>Actualizaciones y Notificaciones.</li>
            </ul>
        </section>
        <section>
            <h2>Cumplimiento de las Políticas</h2>
            <p>El incumplimiento de estas políticas puede resultar en la suspensión o cancelación del acceso a los recursos electrónicos y servicios de la biblioteca.</p>
			<p>Los usuarios pueden apelar cualquier decisión relacionada con el acceso a la biblioteca virtual siguiendo el proceso de apelación establecido por la biblioteca.</p>
        </section>
    </main>
	<!-- Agrega un botón para volver a la página anterior -->
    <a href="principal_estudiante.php" class="volver">Volver</a>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Biblioteca Estudiantil. Todos los derechos reservados.</p>
    </footer>
	<script>
    // Obtener todas las secciones en la página
    const sections = document.querySelectorAll('section');

    // Agregar un evento de mouseover a cada sección para resaltarla al pasar el mouse sobre ella
    sections.forEach((section) => {
        section.addEventListener('mouseover', () => {
            section.style.backgroundColor = '#57B5A5'; // Cambiar el color de fondo al pasar el mouse
            section.style.transition = 'background-color 1s ease'; // Agregar una transición suave
        });

        section.addEventListener('mouseout', () => {
            section.style.backgroundColor = 'transparent'; // Restaurar el color de fondo original al quitar el mouse
        });
    });
</script>
	<audio autoplay loop>
        <source src="audio/música13.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
    </audio>
</body>
</html>