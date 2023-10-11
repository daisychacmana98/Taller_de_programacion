<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario de Biblioteca</title>
	<style>
         * {
           margin: 0;
           padding: 0;
           box-sizing: border-box;
         }

         body {
           font-family: Arial, sans-serif;
           background: linear-gradient(to bottom, #f4f4f4, #ddd);
           color: #333;
         }

         header {
           background: linear-gradient(to bottom, #1976D2, #1565C0);
           color: #fff;
           text-align: center;
           padding: 20px 0;
         }

         nav ul {
           list-style: none;
           display: flex;
           justify-content: center;
           background: linear-gradient(to bottom, #333, #222);
           padding: 10px 0;
         }

         nav li {
           margin: 0 10px;
         }

         nav a {
           text-decoration: none;
           color: #fff;
           font-weight: bold;
         }

         main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: linear-gradient(to bottom, #fff, #eee);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
         }

         h1, h2 {
            text-align: center;
         }

         table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

         th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

         footer {
            text-align: center;
            padding: 10px 0;
            background: linear-gradient(to bottom, #1976D2, #1565C0);
            color: #fff;
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
    <header>
        <h1>Horario de la Biblioteca Virtual</h1>
    </header>
    <nav>
        <ul>
            <li><a href="">Lunes</a></li>
            <li><a href="">Martes</a></li>
            <li><a href="">Miércoles</a></li>
            <li><a href="">Jueves</a></li>
            <li><a href="">Viernes</a></li>
        </ul>
    </nav>
   <main>
        <table>
            <tr>
                <th>Día</th>
                <th>Turno de la mañana</th>
                <th>Turno de la tarde</th>
            </tr>
            <tr>
                <td>Lunes</td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>9:00 AM - 10:30 AM</td>
                            <td>Acceso a Recursos en Línea</td>
                        </tr>
                        <tr>
                            <td>11:00 AM - 12:30 PM</td>
                            <td>Tutorías en Línea</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>2:00 PM - 3:00 PM</td>
                            <td>Lectura en Línea</td>
                        </tr>
                        <tr>
                            <td>3:30 PM - 5:00 PM</td>
                            <td>Tutorías en Línea</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>Martes</td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>9:00 AM - 10:30 AM</td>
                            <td>Investigación en Bases de Datos</td>
                        </tr>
                        <tr>
                            <td>11:00 AM - 12:30 PM</td>
                            <td>Sesión de Lectura Virtual</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>2:00 PM - 3:00 PM</td>
                            <td>Lectura en Línea</td>
                        </tr>
                        <tr>
                            <td>3:30 PM - 5:00 PM</td>
                            <td>Tutorías en Línea</td>
                        </tr>
                        <!-- Agregar más horarios y actividades según sea necesario -->
                    </table>
                </td>
            </tr>
            <tr>
                <td>Miércoles</td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>9:00 AM - 10:30 AM</td>
                            <td>Foro de Discusión en Línea</td>
                        </tr>
                        <tr>
                            <td>11:00 AM - 12:30 PM</td>
                            <td>Tutorías en Línea</td>
                        </tr>
                        <!-- Agregar más horarios y actividades según sea necesario -->
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>2:00 PM - 3:00 PM</td>
                            <td>Lectura en Línea</td>
                        </tr>
                        <tr>
                            <td>3:30 PM - 5:00 PM</td>
                            <td>Tutorías en Línea</td>
                        </tr>
                        <!-- Agregar más horarios y actividades según sea necesario -->
                    </table>
                </td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>9:00 AM - 10:30 AM</td>
                            <td>Acceso a Recursos en Línea</td>
                        </tr>
                        <tr>
                            <td>11:00 AM - 12:30 PM</td>
                            <td>Investigación en Bases de Datos</td>
                        </tr>
                        <!-- Agregar más horarios y actividades según sea necesario -->
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>2:00 PM - 3:00 PM</td>
                            <td>Lectura en Línea</td>
                        </tr>
                        <tr>
                            <td>3:30 PM - 5:00 PM</td>
                            <td>Tutorías en Línea</td>
                        </tr>
                        <!-- Agregar más horarios y actividades según sea necesario -->
                    </table>
                </td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>9:00 AM - 10:30 AM</td>
                            <td>Foro de Discusión en Línea</td>
                        </tr>
                        <tr>
                            <td>11:00 AM - 12:30 PM</td>
                            <td>Sesión de Lectura Virtual</td>
                        </tr>
                        <!-- Agregar más horarios y actividades según sea necesario -->
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <th>Hora</th>
                            <th>Actividad</th>
                        </tr>
                        <tr>
                            <td>2:00 PM - 3:00 PM</td>
                            <td>Lectura en Línea</td>
                        </tr>
                        <tr>
                            <td>3:30 PM - 5:00 PM</td>
                            <td>Tutorías en Línea</td>
                        </tr>
                        <!-- Agregar más horarios y actividades según sea necesario -->
                    </table>
                </td>
            </tr>
        </table>
    </main>
	<!-- Agregar un botón para volver a la página anterior -->
    <a href="usuario_no_registrado.php" class="volver">Volver</a>
    <footer>
        <p>&copy; 2023 Biblioteca Estudiantil. Todos los derechos reservados.</p>
    </footer>
	<audio autoplay loop>
        <source src="audio/música19.mp3" type="audio/mpeg">
        Tu navegador no soporta la reproducción de audio.</audio>
</body>
</html>