-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-09-2023 a las 21:41:00
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libros10`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Estado` varchar(100) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `Editando` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID`, `Nombre`, `Estado`, `Foto`, `Editando`) VALUES
(1, 'Taller de Administración Web', 'Activo', 'ruta/imagen31.jpg', 0),
(2, 'Animación de Gráficos', 'Activo', 'ruta/imagen32.jpg', 0),
(3, 'Herramientas Multimedia', 'Activo', 'ruta/imagen33.jpg', 0),
(4, 'Diseño Gráfico', 'Activo', 'ruta/imagen34.jpg', 0),
(5, 'Producción Audiovisual', 'Activo', 'ruta/imagen35.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `id` int(11) NOT NULL,
  `nombre_estudiante` varchar(255) NOT NULL,
  `titulo_libro` varchar(255) NOT NULL,
  `autor_libro` varchar(255) NOT NULL,
  `archivo_pdf` varchar(255) NOT NULL,
  `fecha_donacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `codigo`, `nombre`, `telefono`, `direccion`, `foto`) VALUES
(1, '001', 'Apolinario Sánchez, Teresa Reyna', '912 968 415', 'Cl. Javier Rojas # 77834 Piso 3', 'ruta/imagen63.jpg'),
(2, '002', 'Chancahuaña Acuña, Frank David', '959 280 864', 'Av. Damián Esquivel # 8 Dpto. 553', 'ruta/imagen62.jpg'),
(3, '003', 'Chacmana Andrade, Daisy Nieves', '927 409 050', 'Cl. Jacobo Navarro # 4456', 'ruta/imagen63.jpg'),
(4, '004', 'Javier Muñoz, Madeleine Janeth', '960 368 836', 'Cl. Gael Gaytán # 1345 Hab. 440', 'ruta/imagen61.jpg'),
(5, '005', 'García De La Cruz, Yurico Yazuri', '925 090 507', 'Camiño Otero, 4, 0º D', 'ruta/imagen63.jpg'),
(6, '006', 'Gil Ailas, Noelia Jasmin', '902 625 626', '789 Camino Terciario', 'ruta/imagen64.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `editorial` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `editorial`, `foto`, `estado`, `descripcion`) VALUES
(1, 'El millonario instantáneo', 'Mark Fisher', 'Empresa activa', 'ruta/imagen1.jpg', 'Disponible', 'Libro para reflexionar'),
(2, 'El arte de negociar y persuadir 2 edi.', 'Allan Pease', 'Amat', 'ruta/imagen2.jpg', 'Prestado', 'Ámbito empresarial'),
(3, '!Vive tu sueño!', 'John C. Maxwell', 'Nelson', 'ruta/imagen3.jpg', 'Disponible', 'Puedes lograr tus metas'),
(4, 'Adictos a la infelicidad', 'Martha Heineman Pieper y William J. Piper', 'Edaf', 'ruta/imagen4.jpg', 'Prestado', 'Aborda el tema de la infelicidad '),
(5, '!La Vaca!', 'Camilo Cruz, Ph. D', 'Taller del éxito', 'ruta/imagen5.jpg', 'Disponible', 'Libro de motivación'),
(6, 'Vivir, amar y aprender', 'Leo Buscaglia', 'Emecé', 'ruta/imagen6.jpg', 'Disponible', 'La vida es bella'),
(7, 'El arte de la felicidad', 'Howard C. Cutler', 'Carvigraf', 'ruta/imagen7.jpg', 'Disponible', 'Libro inspirador'),
(8, 'Actitud de vencedor', 'John C. Maxwell', 'Caribe', 'ruta/imagen8.jpg', 'Disponible', 'Dar lo mejor de uno mismo'),
(9, 'Vida sin condiciones', 'Deepak Chopra', 'Silver Lady', 'ruta/imagen9.jpg', 'Disponible', 'Debes lograr tus metas'),
(10, 'Desarrolle el líder que está en usted', 'John C. Maxwell', 'Caribe', 'ruta/imagen10.jpg', 'Disponible', 'Liderazgo y superación'),
(11, 'Chocolate caliente para el alma', 'Jack Canfield', 'Atlantida Editorial S.A.', 'ruta/imagen11.jpg', 'Disponible', 'Adrenalina pura'),
(12, '¡Vivir!', 'Louise L. Hay', 'Amat', 'ruta/imagen12.jpg', 'Disponible', 'Como si fuera la última vez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `page_views`
--

CREATE TABLE `page_views` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `view_count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `page_views`
--

INSERT INTO `page_views` (`id`, `page_name`, `view_count`) VALUES
(1, '/Daisy/Biblioteca5/vistas.php', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `telefono`, `direccion`, `foto`) VALUES
(1, 'Daisy', '+51927409050', 'A.A. H.H Rafael Chacon Mz T2 Lt2 Nueva Esperanza', 'ruta/logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `semestre` varchar(10) NOT NULL,
  `libro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `page_views`
--
ALTER TABLE `page_views`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `page_views`
--
ALTER TABLE `page_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
