-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-12-2018 a las 03:26:39
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id8249078_gestion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_gestion`
--

CREATE TABLE `client_gestion` (
  `id` int(3) NOT NULL,
  `cod_factura` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `client_gestion`
--

INSERT INTO `client_gestion` (`id`, `cod_factura`, `cedula`, `nombre`) VALUES
(14, '87', '323', 'sdfsdfsf'),
(15, '1238', '6998', 'Juan David'),
(16, '809', '1300', 'Juan David ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_gestion`
--

CREATE TABLE `user_gestion` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_gestion`
--

INSERT INTO `user_gestion` (`id`, `username`, `nombre`, `password`) VALUES
(9, 'juan', 'Juan David', '202cb962ac59075b964b07152d234b70'),
(10, 'juan2', 'Juan Valencia', 'f86505db241750965d9038da6d62e02d'),
(11, 'nicolas1996231', 'nicolas', '202cb962ac59075b964b07152d234b70'),
(12, 'Neffer', 'Neffer', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'JJuan00', 'Juan Valencia', 'f86505db241750965d9038da6d62e02d'),
(14, 'Pirobohpta', 'Juandavidmelochupa', 'cfac171d90d87c538ec7bc4733025a6e'),
(15, 'Juandavidmelochupa', 'Juandavidmelochupa', '2932fbde04ef6cf3b2a17180fdf1e068');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client_gestion`
--
ALTER TABLE `client_gestion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_gestion`
--
ALTER TABLE `user_gestion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client_gestion`
--
ALTER TABLE `client_gestion`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `user_gestion`
--
ALTER TABLE `user_gestion`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
