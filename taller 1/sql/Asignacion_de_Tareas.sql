-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-09-2014 a las 20:57:07
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Asignacion_de_Tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tareas`
--

CREATE TABLE IF NOT EXISTS `Tareas` (
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Creacion` date NOT NULL,
  `Finalizacion` date NOT NULL,
  `Prioridad` int(255) NOT NULL,
  `Correo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Tareas`
--

INSERT INTO `Tareas` (`Nombre`, `Creacion`, `Finalizacion`, `Prioridad`, `Correo`) VALUES
('Trabajo 1', '2014-09-02', '2014-09-03', 3, 'paulalo145@hotmail.com'),
('Trabajo 2', '2014-09-17', '2014-09-18', 4, 'paulalo145@hotmail.com'),
('Trabajo 3', '2014-09-26', '2014-09-27', 5, 'diana@hotmail.com'),
('Trabajo 4', '2014-09-23', '2014-09-24', 2, 'diana@hotmail.com'),
('Trabajo 5', '2014-09-02', '2014-09-03', 1, 'pau@hotmail.com'),
('Trabajo 6', '2014-09-29', '2014-09-30', 4, 'pau@hotmail.com'),
('Trabajo 7', '2014-10-01', '2014-10-08', 5, 'betamendoza@hotmail.com'),
('Trabajo 8', '2014-09-23', '2014-09-30', 3, 'betamendoza@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Correo` text COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES
('Paula', 'Lopez', 'paulalo145@hotmail.com', '1234'),
('Paula', 'Tobar', 'pau@hotmail.com', '5678'),
('Diana', 'Aristizabal', 'diana@hotmail.com', '9012'),
('Alejandro', 'Betancourt', 'alejo@hotmail.com', '3456'),
('Alejandro', 'Betancourt', 'alejo@hotmail.com', '3456'),
('Pedro', 'Mesa', 'pepe@hotmail.com', '12346');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
