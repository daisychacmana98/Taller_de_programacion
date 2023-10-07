-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-09-2023 a las 05:44:49
-- Versión del servidor: 8.0.34-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CLIENTE`
--

CREATE TABLE `CLIENTE` (
  `login` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nombre` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `apellidos` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DETALLE`
--

CREATE TABLE `DETALLE` (
  `numero_detalle` int NOT NULL,
  `cantidad` int DEFAULT NULL,
  `codigo` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `numero_venta` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTO`
--

CREATE TABLE `PRODUCTO` (
  `codigo` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` float(11,0) DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `stock` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `PRODUCTO`
--

INSERT INTO `PRODUCTO` (`codigo`, `descripcion`, `precio`, `cantidad`, `stock`) VALUES
('HD0001', 'Disco Duro Maxtor 80GB', 57, 30, 30),
('HD0002', 'Disco Duro 160GB', 90, 20, 20),
('M00001', 'Monitor LG Flatrom', 90, 20, 20),
('M00002', 'Monitor LG LCD', 280, 20, 20),
('MS0001', 'Mouse PS2 Genius', 4, 50, 50),
('MS0002', 'Mouse Óptico Genius', 5, 50, 50),
('PR0001', 'Impresora HP3650', 55, 15, 15),
('PR0002', 'Impresora HP 3820', 80, 10, 10),
('TEC0001', 'Teclado BTC', 6, 20, 20),
('TEC0002', 'Teclado Multimedia PS2', 8, 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VENTA`
--

CREATE TABLE `VENTA` (
  `numero_venta` int NOT NULL,
  `fecha` datetime(6) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `login` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CLIENTE`
--
ALTER TABLE `CLIENTE`
  ADD PRIMARY KEY (`login`);

--
-- Indices de la tabla `DETALLE`
--
ALTER TABLE `DETALLE`
  ADD PRIMARY KEY (`numero_detalle`),
  ADD KEY `numero_venta` (`numero_venta`),
  ADD KEY `DETALLE_ibfk_1` (`codigo`);

--
-- Indices de la tabla `PRODUCTO`
--
ALTER TABLE `PRODUCTO`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `VENTA`
--
ALTER TABLE `VENTA`
  ADD PRIMARY KEY (`numero_venta`),
  ADD KEY `VENTA_ibfk_1` (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `DETALLE`
--
ALTER TABLE `DETALLE`
  MODIFY `numero_detalle` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `VENTA`
--
ALTER TABLE `VENTA`
  MODIFY `numero_venta` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `DETALLE`
--
ALTER TABLE `DETALLE`
  ADD CONSTRAINT `DETALLE_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `PRODUCTO` (`codigo`),
  ADD CONSTRAINT `DETALLE_ibfk_2` FOREIGN KEY (`numero_venta`) REFERENCES `VENTA` (`numero_venta`);

--
-- Filtros para la tabla `VENTA`
--
ALTER TABLE `VENTA`
  ADD CONSTRAINT `VENTA_ibfk_1` FOREIGN KEY (`login`) REFERENCES `CLIENTE` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
