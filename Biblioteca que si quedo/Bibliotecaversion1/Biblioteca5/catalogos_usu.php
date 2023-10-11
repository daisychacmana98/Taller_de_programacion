<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Catálogos de Libros</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
           background: linear-gradient(to bottom, #41D9C0, #AB41D9); /* Cambia los colores de gradiente según tus preferencias */
           margin: 0;
           padding: 0;
           font-family: Arial, sans-serif;
        }
		
		h1 {
            background: linear-gradient(to right, #ff5733, #6f04d9); /* Cambia los colores de gradiente según tus preferencias */
            -webkit-background-clip: text;
            color: transparent;
            font-size: 36px; /* Ajusta el tamaño de fuente según tus preferencias */
            text-align: center;
            padding: 20px 0;
         }


        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1100px;
            margin: auto;
            flex-wrap: wrap; /* Agrega flex-wrap para que los elementos se ajusten a las filas */
        }

        .box {
            width: calc(33.33% - 20px); /* Ajusta el ancho para mostrar tres imágenes en una fila */
            height: 400px;
            position: relative;
            overflow: hidden;
            margin: 10px;
            border: 3px solid #fff;
        }

        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .capa {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            transform: scale(0);
            transition: 0.3s ease;
        }

        .box:hover .capa {
            transform: scale(1);
        }

        @media only screen and (max-width: 900px) {
            .box {
                width: calc(50% - 20px); /* Ajusta el ancho para mostrar dos imágenes en una fila en pantallas pequeñas */
            }
        }
		
		.volver {
            display: block;
            margin: 20px auto;
            text-align: center;
            padding: 10px 20px;
            background: linear-gradient(to right, #00bcd4, #007b8e); /* Efecto degradado en el botón */
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
    </style>
</head>
<body>
	<h1>Catálogos de Libros de la Biblioteca</h1>
	<div class="container">
		<div class="box">
			<a href="#">
				<img src="https://pictures.abebooks.com/isbn/9788479534080-us.jpg">
				<div class="capa">
					<h2>EL MILLONARIO INSTANTÁNEO</h2>
				</div>
			</a>
		</div>

		<div class="box">
			<a href="#">
				<img src="https://images.cdn3.buscalibre.com/fit-in/360x360/10/5b/105b658b959ac2d3f1d49407fefc154e.jpg">
				<div class="capa">
					<h2>EL ARTE DE NEGOCIAR Y PERSUADIR 2 EDI.</h2>
				</div>
			</a>
		</div>

		<div class="box">
			<a href="#">
				<img src="https://images.cdn3.buscalibre.com/fit-in/360x360/e9/6f/e96f03c86d0fe23bb5ca549b2323d50a.jpg">
				<div class="capa">
					<h2>!VIVE TU SUEÑO!</h2>
				</div>
			</a>
		</div>
		
		<div class="box">
			<a href="#">
				<img src="https://pictures.abebooks.com/isbn/9788441413085-es.jpg">
				<div class="capa">
					<h2>ADICTOS A LA INFELICIDAD</h2>
				</div>
			</a>
		</div>
		
		<div class="box">
			<a href="#">
				<img src="https://pictures.abebooks.com/isbn/9781931059633-es.jpg">
				<div class="capa">
					<h2>LA VACA</h2>
				</div>
			</a>
		</div>
		
		<div class="box">
			<a href="#">
				<img src="https://covers.alibrate.com/b/5ac776ac52533605b378dfb9/f9024081-cac9-48d8-b0a9-7af932c3ae9d/share">
				<div class="capa">
					<h2>VIVIR, AMAR Y APRENDER</h2>
				</div>
			</a>
		</div>
	</div>
	    <a href="usuario_no_registrado.php" class="volver">Volver</a>
	<audio autoplay loop>
        <source src="audio/música17.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>