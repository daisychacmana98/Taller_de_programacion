<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación de la Biblioteca</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #56D3D3, #A356D3);
            margin: 0;
            padding: 0;
            color: #333;
            text-align: center; /* Centrar el contenido en el eje horizontal */
        }

        header {
            background-color: #1976D2;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: left; /* Alinear el contenido del contenedor a la izquierda */
        }

        .direccion,
        .como-llegar {
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: left; /* Alinear el contenido de estos elementos a la izquierda */
            display: inline-block; /* Para que ocupen solo el ancho necesario y se centren horizontalmente */
        }

        /* Estilos del mapa */
        #map {
            height: 400px;
            width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
        }
		
		/* Estilo inicial para los section */
         section {
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            transition: background 1s; /* Transición suave del fondo */
         }

         /* Estilo cuando el mouse pasa sobre los section */
         section:hover {
            background: linear-gradient(135deg, #80D03E, #1976D2);
            color: #fff; /* Cambia el color de texto al blanco */
         }


        /* Estilos del pie de página */
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
            background: linear-gradient(to right, #E67619, #007b8e); /* Efecto degradado en el botón */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 1s; /* Transición de color al hacer hover */
        }

        .volver:hover {
            background: linear-gradient(to right, #D03E6A, #005f6b); /* Cambio de color al hacer hover */
        }
		audio {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Encabezado de la página -->
    <header>
        <h1>Ubicación de la Biblioteca</h1>
    </header>

    <img src="https://appassets.mvtdev.com/map/188/s/1102/122741004.jpg" alt="">

    <!-- Dirección y cómo llegar -->
    <section class="direccion">
        <h2>Dirección</h2>
        <p>Av. Vargas Machuca 320</p>
        <p>Lima 15801</p>
    </section>

    <section class="como-llegar">
        <h2>Cómo Llegar</h2>
        <p>Para llegar a la biblioteca, sigue las siguientes instrucciones:</p>
        <ol>
            <li>Desde la estación del tren María Auxiliadora, toma el autobús número 73 hasta la parada de la biblioteca.</li>
            <li>Desde la municipalidad S.J.M, dirígete al noroeste por Av. Belisario Suarez hacia Av Tomás Guzmán (15 min).</li>
            <li>Si utilizas tu propio automóvil, puedes utilizar las siguientes coordenadas GPS: [lat: -12.165235, lng: -76.975194].</li>
        </ol>
    </section>
	
    <!-- Agregar un botón para volver a la página anterior -->
    <a href="usuario_no_registrado.php" class="volver">Volver</a>
    <!-- Pie de página -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Biblioteca Estudiantil. Todos los derechos reservados.</p>
    </footer>
	<audio autoplay loop>
        <source src="audio/música20.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>