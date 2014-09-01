-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-08-2014 a las 18:37:35
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Basesita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estudiantes`
--

CREATE TABLE IF NOT EXISTS `Estudiantes` (
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Codigo` text NOT NULL,
  `Correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Estudiantes`
--

INSERT INTO `Estudiantes` (`Nombre`, `Apellido`, `Codigo`, `Correo`) VALUES
('Paula Daniela', 'Lopez Serrano', '12112005', 'paulalo145@hotmail.com'),
('Natalia ', 'Ayala', '456757', 'nata123@hotmail.com'),
('Mario', 'Otalvaro', '13494', 'marito@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NotaEstudiante`
--

CREATE TABLE IF NOT EXISTS `NotaEstudiante` (
  `id` int(255) NOT NULL,
  `codigo` text NOT NULL,
  `valorNota` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `NotaEstudiante`
--

INSERT INTO `NotaEstudiante` (`id`, `codigo`, `valorNota`) VALUES
(1, '12112005', 5),
(1, '456757', 4),
(2, '13494', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Notas`
--

CREATE TABLE IF NOT EXISTS `Notas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `porcentaje` int(255) NOT NULL,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Notas`
--

INSERT INTO `Notas` (`id`, `porcentaje`, `nombre`) VALUES
(1, 20, 'Taller 1'),
(2, 25, 'Taller 2'),
(3, 25, 'Taller 3'),
(4, 30, 'Taller 4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
