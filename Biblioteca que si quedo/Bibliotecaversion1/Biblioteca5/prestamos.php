<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir y Leer Archivos</title>
    <!-- Agrega enlaces a los archivos PDF.js -->
    <script src="pdf.js"></script>
    <link rel="stylesheet" href="pdf_viewer.css">
    <style>
        body {
            background: linear-gradient(to bottom, #2196F3, #1976D2);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }

        h1 {
            color: #25274D;
            font-size: 28px;
            margin-bottom: 20px;
        }

        input[type="file"] {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f3f4f7;
            border: 2px solid #d1d3e2;
        }

        input[type="submit"] {
            background-color: #25274D;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #131537;
        }

        .pdf-viewer {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        canvas {
            max-width: 100%;
            height: auto;
        }
		
		/* Estilos para el botón "Volver" */
        .return-button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Quita la decoración de enlace */
            display: inline-block; /* Hacer que el botón sea un elemento en línea */
         }

        .return-button:hover {
            background-color: #e64a19;
         }


        /* Estilos para el botón Leer PDF */
        .pdf-button {
            background-color: #25274D;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            text-decoration: none; /* Quita la decoración de enlace */
            display: inline-block; /* Hacer que el botón sea un elemento en línea */
        }

        .pdf-button:hover {
            background-color: #131537;
        }
		audio {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Subir y Leer Archivos</h1>
		<form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" accept=".pdf, .docx" required>
            <br>
            <input type="submit" name="subir" value="Subir Archivo">
            <br><br>
            <a href="principal_administrador.php" class="return-button">Volver</a>
        </form>
        
        <!-- Agrega un botón para leer el PDF -->
        <?php
        if (isset($_POST['subir'])) {
            $nombreArchivo = $_FILES['archivo']['name'];
            $tipoArchivo = $_FILES['archivo']['type'];
            $tamañoArchivo = $_FILES['archivo']['size'];
            $archivoTemporal = $_FILES['archivo']['tmp_name'];

            $ruta = "archivos/" . $nombreArchivo;

            if (move_uploaded_file($archivoTemporal, $ruta)) {
                echo "<a href='javascript:void(0);' class='pdf-button' onclick='leerPDF(\"$ruta\")'>Leer PDF</a>";
            } else {
                echo "<script>alert('Error al subir el archivo.');</script>";
            }
        }
        ?>
    </div>
    <!-- Código JavaScript para leer el PDF -->
    <script>
        function leerPDF(pdfURL) {
            // Abre el PDF en una nueva ventana o pestaña
            window.open(pdfURL, '_blank');
        }
    </script>
	<audio autoplay loop>
        <source src="audio/música3.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.
    </audio>
</body>
</html>