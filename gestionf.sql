

-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-02-2016 a las 21:09:47
-- Versión del servidor: 5.1.62
-- Versión de PHP: 5.3.6-13ubuntu3.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestione`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE IF NOT EXISTS `acta` (
  `id_acta` int(30) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_agenda` int(30) NOT NULL,
  `id_punto` int(30) NOT NULL,
  `nombre_mat` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hora` datetime NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_acta`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_materia`
--

CREATE TABLE IF NOT EXISTS `acta_materia` (
  `id_acta` int(10) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `observacion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_acta`,`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(30) NOT NULL AUTO_INCREMENT,
  `lugar` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` datetime NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_cierre` datetime NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `temario` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `n_resolucion` int(30) NOT NULL,
  `id_usuario` int(30) NOT NULL,
  `id_acta` int(30) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, NULL),
('coordinador', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 1, '', NULL, 'N;'),
('coordinador', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_departamento` int(50) NOT NULL AUTO_INCREMENT,
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`id_departamento`),
  KEY `status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`nombre`, `id_departamento`, `status`) VALUES
('computacion', 1, 'activo'),
('matematica', 2, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `nombre_mat` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_comienzo` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_departamento` int(30) NOT NULL,
  `id_materia` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`nombre_mat`, `descripcion`, `fecha_comienzo`, `fecha_fin`, `status`, `id_departamento`, `id_materia`) VALUES
('algoritmo', 'aaaaa', '0000-00-00', '0000-00-00', 'a', 1, 1),
('Elementos discrtos', 'Elementos discrtos', '2016-02-25', '2016-03-03', '1', 1, 2),
('Calculo 1', 'calculo', '2016-03-02', '2016-02-25', '1', 2, 3),
('Algoritmos 2', 'Algoritmos 2  poo', '2016-02-11', '2016-02-19', '1', 1, 4),
('Redes', 'Redes de la computacion', '2016-02-25', '2016-02-26', '1', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivo`
--

CREATE TABLE IF NOT EXISTS `objetivo` (
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_materia` int(10) NOT NULL,
  `id_obj` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_obj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `objetivo`
--

INSERT INTO `objetivo` (`descripcion`, `nombre`, `id_materia`, `id_obj`) VALUES
('la programacion es buena ', 'poo', 1, 1),
('la programacion es buena ', 'poo', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto`
--

CREATE TABLE IF NOT EXISTS `punto` (
  `id_punto` int(30) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_acta` int(30) NOT NULL,
  `nombre_mat` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `resolucion` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(30) NOT NULL,
  `id_agenda` int(30) NOT NULL,
  PRIMARY KEY (`id_punto`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id_tipo` int(30) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `nombre`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'activo'),
(4, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE IF NOT EXISTS `tema` (
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_comienzo` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_tema` int(30) NOT NULL AUTO_INCREMENT,
  `id_materia` int(10) NOT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`descripcion`, `fecha_comienzo`, `fecha_fin`, `status`, `titulo`, `id_tema`, `id_materia`) VALUES
('Programacion orientada a objetos es POO', '2016-02-03', '2016-02-04', 's', 'POO', 1, 1),
('Programacion orientada a objetos es POO', '2016-02-03', '2016-02-04', 's', 'POO', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

CREATE TABLE IF NOT EXISTS `tiene` (
  `id_tipo` int(30) NOT NULL,
  `id_usuario` int(30) NOT NULL,
  PRIMARY KEY (`id_tipo`,`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(30) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(30) NOT NULL,
  `usuario` char(55) CHARACTER SET utf8 NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `password`, `cargo`, `id_usuario`, `id_departamento`, `usuario`, `email`) VALUES
('Jose', 'Ramirez', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 1, 100, 'jose.ramirez', 'tapiojse02@gmail.com'),
('Elluz', 'Uzcategui', '81dc9bdb52d04dc20036dbd8313ed055', 'coordinador', 2, 100, 'elluz.uzcategui', 'elluz.uzcategui@gmail.com'),
('jabi', 'leal', '123456', 'direc', 3, 100, 'nleal', 'nata');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `acta_ibfk_1` FOREIGN KEY (`id_acta`) REFERENCES `agenda` (`id_agenda`) ON DELETE CASCADE;

--
-- Filtros para la tabla `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
