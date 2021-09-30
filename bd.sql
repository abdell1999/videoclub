-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2021 a las 17:39:43
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actuan`
--

CREATE TABLE `actuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelicula` int(10) UNSIGNED DEFAULT NULL,
  `id_persona` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `anyo` varchar(45) NOT NULL,
  `cartel` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `genero`, `pais`, `anyo`, `cartel`) VALUES
(10, 'SuperMM', 'Oscuro', 'Pensilvania', '2015', 'http://localhost/dwes/videoclub/img/carteles/93258superman.jfif'),
(11, 'Rando7489', 'Random', 'Random', '1969', 'http://localhost/dwes/videoclub/img/carteles/11883batman.jpg'),
(12, 'BUENASTARDES', 'Superhéroes', 'Andorra', '1999', 'http://localhost/dwes/videoclub/img/carteles/94494WhatsApp Image 2021-09-28 at 09.15.56.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `fotografia` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido1`, `apellido2`, `fotografia`) VALUES
(10, 'Cristian', 'Rosca', '', 'http://localhost/dwes/videoclub/img/fotografias/81672batman.jpg'),
(11, 'PACO', 'paco', '', 'http://localhost/dwes/videoclub/img/fotografias/52590WhatsApp Image 2021-09-28 at 09.15.56.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actuan`
--
ALTER TABLE `actuan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pelicula` (`id_pelicula`),
  ADD UNIQUE KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actuan`
--
ALTER TABLE `actuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actuan`
--
ALTER TABLE `actuan`
  ADD CONSTRAINT `actuan_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`),
  ADD CONSTRAINT `actuan_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
