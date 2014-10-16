-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-10-2014 a las 20:25:18
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `oowl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Carrito`
--

CREATE TABLE IF NOT EXISTS `Carrito` (
  `Nombre` text NOT NULL,
  `Imagen` text NOT NULL,
  `NombreImg` text NOT NULL,
  `Precio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Carrito`
--

INSERT INTO `Carrito` (`Nombre`, `Imagen`, `NombreImg`, `Precio`) VALUES
('pau123@hotmail.com', 'diamante.png', 'Diamante', '$115.000'),
('pau123@hotmail.com', 'diamante.png', 'Diamante', '$115.000'),
('pau123@hotmail.com', 'violeta.png', 'Violeta', '$95.000'),
('pau123@hotmail.com', 'rosa.png', 'Rosa', '$125.000'),
('pau123@hotmail.com', 'doradas.png', 'Doradas', '$125.000'),
('pau123@hotmail.com', 'leo.png', 'Leopardo', '$95.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Compra`
--

CREATE TABLE IF NOT EXISTS `Compra` (
  `Nombre` text NOT NULL,
  `Imagen` text NOT NULL,
  `NombreImg` text NOT NULL,
  `Precio` text NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Compra`
--

INSERT INTO `Compra` (`Nombre`, `Imagen`, `NombreImg`, `Precio`, `Fecha`) VALUES
('pau123@hotmail.com', 'rosa.png', 'Rosa', '$125.000', '0000-00-00'),
('pau123@hotmail.com', 'doradas.png', 'Doradas', '$125.000', '0000-00-00'),
('pau123@hotmail.com', 'doradas.png', 'Doradas', '$125.000', '0000-00-00'),
('pau123@hotmail.com', 'doradas.png', 'Doradas', '$125.000', '0000-00-00'),
('pau123@hotmail.com', 'doradas.png', 'Doradas', '$125.000', '0000-00-00'),
('pau123@hotmail.com', 'rosa.png', 'Rosa', '$125.000', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE IF NOT EXISTS `Producto` (
  `Imagen` text NOT NULL,
  `NombreImg` text NOT NULL,
  `Precio` text NOT NULL,
  `Contador` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`Imagen`, `NombreImg`, `Precio`, `Contador`) VALUES
('negro.png', 'Negro-Rosa', '$95.000', 0),
('doradas.png', 'Doradas', '$125.000', 4),
('leo.png', 'Leopardo', '$95.000', 0),
('diamante.png', 'Diamante', '$115.000', 0),
('violeta.png', 'Violeta', '$95.000', 0),
('rosa.png', 'Rosa', '$125.000', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registro`
--

CREATE TABLE IF NOT EXISTS `Registro` (
  `Nombre` text NOT NULL,
  `Correo` text NOT NULL,
  `Contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Registro`
--

INSERT INTO `Registro` (`Nombre`, `Correo`, `Contrasena`) VALUES
('Paula LÃ³pez', 'paulalo145@hotmail.com', '1234'),
('Andrea', 'pau123@hotmail.com', '5678'),
('Andres', 'andy123@hotmail.com', '12344'),
('', '', ''),
('', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
