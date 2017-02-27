-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2017 a las 08:33:49
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplo_paginacion`
--

CREATE TABLE `ejemplo_paginacion` (
  `id` int(5) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejemplo_paginacion`
--

INSERT INTO `ejemplo_paginacion` (`id`, `Nombre`, `Apellido`) VALUES
(1, 'juan ', 'perez'),
(2, 'andre', 'boza'),
(3, 'juanito ', 'lopez'),
(4, 'casandro', 'casas'),
(5, 'pepito', 'mitomano'),
(6, 'elver', 'carito'),
(7, 'corpse', 'tontolin'),
(8, 'flex', 'fresita'),
(9, 'robert', 'pollito'),
(10, 'becker', 'pandita'),
(11, 'tomas', 'silocio'),
(12, 'ezequiel', 'demetrio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejemplo_paginacion`
--
ALTER TABLE `ejemplo_paginacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejemplo_paginacion`
--
ALTER TABLE `ejemplo_paginacion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
