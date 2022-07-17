-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-07-2022 a las 21:55:41
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resguardos`
--

DROP TABLE IF EXISTS `resguardos`;
CREATE TABLE IF NOT EXISTS `resguardos` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `n_anfitrion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resguardos`
--

INSERT INTO `resguardos` (`id_usuario`, `departamento`, `nombres`, `puesto`, `n_anfitrion`) VALUES
(2, 'Talento y cultura', 'omasr', 'gerente', '198917'),
(3, 'Talento y cultura', 'omasr', 'gerente', '198917'),
(4, 'Talento y cultura', 'omasr', 'gerente', '198917');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) CHARACTER SET latin2 COLLATE latin2_bin NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `pass`, `rol`) VALUES
(1, 'Omar', 'Catzin', 'admin@royalton.com', '123', '1'),
(3, 'Lester', 'Uicab', 'user@royalton.com', '123', '2'),
(2, 'Gerardo', 'Camara', 'admin2@royalton.com', '123', '1'),
(5, 'David', 'Fragoso', 'user2@royalton.com', '123', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
