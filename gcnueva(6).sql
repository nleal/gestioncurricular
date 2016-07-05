-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-07-2016 a las 12:11:47
-- Versión del servidor: 5.5.44-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gcnueva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE IF NOT EXISTS `acta` (
  `id_acta` int(30) NOT NULL AUTO_INCREMENT,
  `reunion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_agenda` int(30) DEFAULT NULL,
  `lugar` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hora` datetime NOT NULL,
  `fecha` date NOT NULL,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_acta`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `acta`
--

INSERT INTO `acta` (`id_acta`, `reunion`, `id_agenda`, `lugar`, `hora`, `fecha`, `file`) VALUES
(15, 'N° 02-2012', 1, 'Salón de Reuniones del Consejo de la Facultad', '0000-00-00 00:00:00', '0000-00-00', ''),
(16, 'N° 01-2012', 1, 'Salón de Reuniones del Consejo de la Facultad', '0000-00-00 00:00:00', '0000-00-00', ''),
(17, 'N° 03-2012', 1, 'Salón de Reuniones del Consejo de la Facultad', '0000-00-00 00:00:00', '2014-04-04', ''),
(18, 'N° 04-2012', 1, 'Salón de Reuniones del Consejo de la Facultad', '0000-00-00 00:00:00', '2014-04-04', ''),
(39, '1', 1, 'brayan', '0000-00-00 00:00:00', '2014-04-04', 'transferencia.pdf_84.pdf'),
(40, '1', 1, 'brayan', '0000-00-00 00:00:00', '2014-04-04', 'transferencia.pdf_84.pdf'),
(41, '1', 1, 'brayan', '0000-00-00 00:00:00', '2014-04-04', 'formato_de_consignacion_de_recaudos.pdf_23.pdf'),
(42, 'N° 01-2012', 5, 'Salón de Reuniones del Consejo de la Facultad', '0000-00-00 00:00:00', '0000-00-00', 'ArticuloTDD.pdf_57.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(30) NOT NULL AUTO_INCREMENT,
  `lugar` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_cierre` datetime NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `temario` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(30) NOT NULL,
  `id_acta` int(30) DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `lugar`, `fecha`, `hora`, `fecha_creacion`, `fecha_cierre`, `status`, `temario`, `id_usuario`, `id_acta`, `file`) VALUES
(1, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2015-02-27', '10:00:00', '2015-02-21 10:00:00', '2015-02-27 16:00:00', 'S', 'Actualizar los Planes de Estudios FACYT', 1, 1, ''),
(2, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2015-02-27', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar pensum de computación', 1, 1, ''),
(3, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2015-03-11', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar los pensum de biologia', 1, 2, ''),
(4, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-02-27', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar pensum de fisica', 1, 3, ''),
(5, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-03-27', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar pensum de matemática', 1, 4, ''),
(6, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-04-27', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar pensum de química', 1, 5, ''),
(7, 'Salon de Reuniones del Consejo de la Facultad-Deca', '0000-00-00', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Entrega de oficios de cada departamento', 1, 6, ''),
(8, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-01-15', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Revision de pensum de biologia', 1, 7, ''),
(9, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-02-15', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Revision de pensum de biologia', 1, 8, ''),
(10, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-03-15', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Revision de pensum de computacion', 1, 9, ''),
(11, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2015-04-11', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Revision de pensum de fisica', 1, 10, ''),
(12, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2015-01-11', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Revision de pensum de matemati', 1, 11, ''),
(13, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2015-02-11', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Revision de pensum de quimica', 1, 12, ''),
(14, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-04-15', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar horarios de departamento de computacion', 1, 13, ''),
(15, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-01-08', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar horarios de departamento de biologia', 1, 14, ''),
(16, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2015-02-08', '10:00:00', '2015-02-21 10:00:00', '2015-02-27 16:00:00', 'S', 'Actualizar horarios de departamento de fisica', 1, 15, ''),
(17, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-02-08', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar horarios de departamento de matematica', 1, 16, ''),
(18, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-03-08', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Actualizar horarios de departamento de quimica', 1, 17, ''),
(19, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-01-10', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Modificacion de horarios de lab de biologia', 1, 18, ''),
(20, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-02-10', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Modificacion de horarios de lab de computacion', 1, 19, ''),
(21, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-03-10', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Modificacion de horarios de lab de fisica', 1, 20, ''),
(22, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-04-10', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Modificacion de horarios de lab de matematica', 1, 21, ''),
(23, 'Salon de Reuniones del Consejo de la Facultad-Deca', '2016-05-10', '10:00:00', '2015-02-21 10:00:00', '2015-04-07 16:00:00', 'S', 'Modificacion de horarios de lab de quimica', 1, 22, ''),
(35, 'manongo', '2016-02-08', '10:00:00', '2016-01-10 00:00:00', '2016-01-10 00:00:00', '1', '', 1, NULL, NULL),
(36, 'manongo', '2016-02-08', '10:00:00', '2016-01-10 00:00:00', '2016-01-10 00:00:00', '1', '', 1, NULL, NULL),
(37, 'manongo', '2016-02-10', '10:00:00', '2016-01-10 00:00:00', '2016-01-10 00:00:00', '1', '', 1, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`nombre`, `id_departamento`, `status`) VALUES
('Biología', 1, 'activo'),
('Computación', 2, 'activo'),
('Física', 3, 'activo'),
('Matemática', 4, 'activo'),
('Química', 5, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `nombre_mat` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_departamento` int(30) NOT NULL,
  `id_materia` int(30) NOT NULL AUTO_INCREMENT,
  `cod_materia` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=214 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`nombre_mat`, `descripcion`, `status`, `id_departamento`, `id_materia`, `cod_materia`) VALUES
('Elemento discreto 1', 'Elementos discretos', 's', 2, 1, 'CAO101'),
('Calculo 1', 'calculo', 's', 4, 2, 'TAO101'),
('Desarrollos de Habilidades Directivas', 'DHD', 's', 2, 3, 'TAO102'),
('Elemento discreto 2', 'Elementos discretos', 's', 2, 4, 'CAO201'),
('Fundamentos de Algoritmos', 'algoritmo', 's', 2, 5, 'TAO206'),
('Fundamentos de Programación', 'Programación', 's', 2, 6, 'TAO207'),
('Cálculo II', 'Cálculo', 's', 4, 7, 'TAO201'),
('Deporte', 'deporte', 's', 2, 8, 'TRO201'),
('Ingles Instrumental', 'Ingles', 's', 2, 9, 'TAO205'),
('Diseño Digital y Organización del Computador', 'Arquitectura del computador', 's', 2, 10, 'CAO301'),
('Algoritmos 1', 'Algoritmo', 's', 2, 11, 'CAO302'),
('Programación 1', 'Programación', 's', 2, 12, 'CAO303'),
('Calculo III', 'calculo', 's', 4, 13, 'TAO301'),
('Apreciación Cultural', 'Cultura', 's', 2, 14, 'TRO301'),
('Arquitectura del Computador', 'Arquitectura del computador', 's', 2, 15, 'CAO401'),
('Algoritmos 2', 'Algoritmos II', 's', 2, 16, 'CAO402'),
('Programación II', 'Programación', 's', 2, 17, 'CAO403'),
('Metodología de la Investigación', 'Metodología', 's', 2, 18, 'CAO404'),
('Calculo IV', 'Cálculo', 's', 4, 19, 'TAO401'),
('Cálculo Computacional', 'matematicas de la computacion', 's', 2, 20, 'CAO501'),
('Base de Datos', 'Base de Datos', 's', 2, 21, 'CAO502'),
('Sistemas Operativos', 'SO', 's', 2, 22, 'CAO503'),
('Probabilidad', 'calculo', 's', 4, 23, 'CAO601'),
('Ingenieria del Software', 'IS', 's', 2, 24, 'CAO602'),
('Redes de Computadora I', 'Redes', 's', 2, 25, 'CAO603'),
('Lenguajes de Programación', 'LP', 's', 2, 26, 'CAO604'),
('Estadistica Inferencial', 'calculo', 's', 4, 27, 'CAO701'),
('Sistemas de Información', 'SI', 's', 2, 28, 'CAO702'),
('Redes de Computadora II', 'Redes 2', 's', 2, 29, 'CAO703'),
('Ciencia Tecnología y Sociedad', 'CTS', 's', 2, 30, 'TRO601'),
('Electiva 1', '', 's', 2, 31, ''),
('Fundamentos de Optimización para la Computación', 'FOC', 's', 2, 32, 'CAO801'),
('Desarrollo de Aplicaciones Web', 'Web', 's', 2, 33, 'CAO802'),
('Electiva II', '', 's', 2, 34, ''),
('Electiva III', '', 's', 2, 35, ''),
('Servicio Comunitario', 'SC', 's', 2, 36, 'TRO701'),
('Proy. de Trab. Esp. de Grado', 'Anteproyecto', 's', 2, 37, 'CRO901'),
('Pasantias', 'pasantias', 's', 2, 38, 'TRO901'),
('Trabajo Especial de Grado', 'TEG', 's', 2, 39, 'CRO101'),
('Biología General', 'biología', 's', 1, 40, 'BAO101'),
('Calculo I', 'calculo', 's', 4, 41, 'TAO101'),
('Desarrollo de Habilidades Directivas', 'DHD', 's', 1, 42, 'TAO102'),
('Química 1', 'química', 's', 5, 43, 'TAO103'),
('Física 1', 'física', 's', 3, 44, 'TAO104'),
('Laboratorio Básico de Bioloogía', '', 's', 1, 45, 'BAO201'),
('Química Orgánica para Biólogos', '', 's', 1, 46, 'BAO202'),
('Laboratorio de Química', '', 's', 1, 47, 'BAO203'),
('Física para Biólogos', '', 's', 1, 48, 'BAO204'),
('Calculo II', 'calculo', 's', 4, 49, 'TAO201'),
('Deporte', '', 's', 1, 50, 'TRO201'),
('Sistemas y Algoritmos', '', 's', 2, 51, 'TAO204'),
('Biología de Microorganismos', '', 's', 1, 52, 'BAO301'),
('Bioquímica', '', 's', 1, 53, 'BAO302'),
('Biofisicoquímica', '', 's', 1, 54, 'BAO303'),
('Taller de Biomatemáticas', '', 's', 1, 55, 'BRO301'),
('Taller de Redacción Científica', '', 's', 1, 56, 'BRO302'),
('Biología Celular', '', 's', 1, 57, 'BAO401'),
('Genética', '', 's', 1, 58, 'BAO402'),
('Bioestadística I', '', 's', 1, 59, 'BAO403'),
('Ingles Instrumental', 'Ingles', 's', 1, 60, 'TAO205'),
('Apreciación Cultural', '', 's', 1, 61, 'TRO301'),
('Biología Vegetal', '', 's', 1, 62, 'BAO501'),
('Biología Animal', '', 's', 1, 63, 'BAO502'),
('Bioestadística II', '', 's', 1, 64, 'BAO503'),
('Ecología General I', '', 's', 1, 65, 'BAO504'),
('Taller de Man. de Datos y Herram. de Soft.', '', 's', 1, 66, 'BRO501'),
('Fisiología Vegetal', '', 's', 1, 67, 'BAO601'),
('Fisiología Animal', '', 's', 1, 68, 'BAO602'),
('Ecología General II', '', 's', 1, 69, 'BAO603'),
('Ciencia Tecnología y Sociedad', 'CTS', 's', 1, 70, 'TAO601'),
('Biotecnología', '', 's', 1, 71, 'BAO701'),
('Evolución', '', 's', 1, 72, 'BAO702'),
('Servicio Comunitario', 'SC', 's', 1, 73, 'TRO701'),
('Laboratorio de  Biotecnología', '', 's', 1, 74, 'BAO801'),
('Filosofía de la Ciencia', '', 's', 1, 75, 'BAO802'),
('Laboratorio Avanzado', '', 's', 1, 76, 'BAO803'),
('Electiva I', '', 's', 1, 77, ''),
('Electiva II', '', 's', 1, 78, ''),
('Electiva III', '', 's', 1, 79, ''),
('Pasantias', 'pasantias', 's', 1, 80, 'BRO902'),
('Proy. de Trab. Esp. de Grado', 'Anteproyecto', 's', 1, 81, 'BRO901'),
('Electiva IV', '', 's', 1, 82, ''),
('Trabajo Especial de Grado', 'TEG', 's', 1, 83, 'BRO101'),
('Calculo I', 'calculo', 's', 3, 84, 'TAO101'),
('Desarrollo de Habilidades Directivas', 'DHD', 's', 3, 85, 'TAO102'),
('Química I', 'química', 's', 3, 86, 'TAO103'),
('Física I', 'Física', 's', 3, 87, 'TAO104'),
('Cálculo II', 'Cálculo', 's', 3, 88, 'TAO201'),
('Física II', 'Física', 's', 3, 89, 'TAO203'),
('Sistemas y Algoritmos', 'algoritmo', 's', 3, 90, 'TAO204'),
('Ingles Instrumental', 'Ingles', 's', 3, 91, 'TAO205'),
('Deporte', 'deporte', 's', 3, 92, 'TRO201'),
('Mecánica', 'mecánica', 's', 3, 93, 'FAO301'),
('Física Computacional I', 'F. comp', 's', 3, 94, 'FAO302'),
('Laboratorío de Física I', 'Lab física', 's', 3, 95, 'FAO303'),
('Calculo III', 'Cálculo', 's', 3, 96, 'TAO301'),
('Apreciación Cultural', 'Cultura', 's', 3, 97, 'TRO301'),
('Electricidad y Magnetismo', 'electricidad y magnetismo', 's', 3, 98, 'FAO401'),
('Ondas y Ópticas', 'ondas y ópticas', 's', 3, 99, 'FAO402'),
('Laboratorío de Física II', 'Lab física', 's', 3, 100, 'FAO403'),
('Cálculo IV', 'Cálculo', 's', 3, 101, 'TAO401'),
('Física Cuántica I', 'Física cuántica', 's', 3, 102, 'FAO501'),
('Métodos Matemáticos de la Física I', 'Métodos matemáticos', 's', 3, 103, 'FAO502'),
('Laboratorío de Ondas y Óptica', 'Lab ondas y ópticas', 's', 3, 104, 'FAO503'),
('Electrónica', 'electrónica', 's', 3, 105, 'FAO504'),
('Física Cuántica II', 'Física cuántica', 's', 3, 106, 'FAO601'),
('Métodos Matemáticos de la Física II', 'Métodos matemáticos', 's', 3, 107, 'FAO602'),
('Termodinámica y Física Estadística', 'termodinámica', 's', 3, 108, 'FAO603'),
('Laboratorío de Electrónica', 'lab de electrónica', 's', 3, 109, 'FAO604'),
('Mecánica Clásica', 'mecánica clásica', 's', 3, 110, 'FAO701'),
('Física del Estado Sólido', 'Física del estado sólido', 's', 3, 111, 'FAO702'),
('Historia y Filosofía de la Cs.', 'hist y filosof de la Cs', 's', 3, 112, 'FAO703'),
('Física Computacional II', 'F. comp', 's', 3, 113, 'FAO704'),
('Ciencia, Tecnología y Sociedad', 'CTS', 's', 3, 114, 'TAO601'),
('Teoría Electromagnética', 'teória electromagnética', 's', 3, 115, 'FAO801'),
('Dinámica de Fluidos', 'dinámica de fluidos', 's', 3, 116, 'FAO802'),
('Laboratorío Avanzado de Física', 'Lab avanzado de física', 's', 3, 117, 'FAO803'),
('Electiva I', 'electiva', 's', 3, 118, 'FAE801'),
('Mecánica Cuántica', 'mecánica cuantica', 's', 3, 119, 'FAO901'),
('Seminario de Investigación', 'seminario', 's', 3, 120, 'FAO902'),
('Electiva II', 'electiva', 's', 3, 121, 'FAE901'),
('Servicio Comunitario', 'SC', 's', 3, 122, 'TRO701'),
('Proy. de Trab. Esp. de Grado', 'Anteproyecto', 's', 3, 123, 'FRO901'),
('Pasantias', 'pasantia', 's', 3, 124, 'TRO901'),
('Trabajo Especial de Grado', 'TEG', 's', 3, 125, 'FRO101'),
('Elementos de la Matemática', 'elementos de la matemática', 's', 4, 126, 'MAO101'),
('Calculo I', 'Cálculo', 's', 4, 127, 'TA0101'),
('Desarrollo de Habilidades Directivas', 'DHD', 's', 4, 128, 'TAO102'),
('Física I', 'Física', 's', 4, 129, 'TAO104'),
('Álgebra I', 'álgebra', 's', 4, 130, 'MAO201'),
('Geometría I', 'geometría', 's', 4, 131, 'MAO203'),
('Calculo II', 'Cálculo', 's', 4, 132, 'TAO201'),
('Física II', 'Física', 's', 3, 133, 'TAO203'),
('Deporte', 'deporte', 's', 4, 134, 'TRO201'),
('Ingles Instrumental', 'Ingles', 's', 4, 135, 'TAO205'),
('Álgebra II', 'álgebra', 's', 4, 136, 'MAO301'),
('Cálculo III', 'Cálculo', 's', 4, 137, 'TAO301'),
('Geometría II', 'geometría', 's', 4, 138, 'MAO303'),
('Apreciación Cultural', 'Cultura', 's', 4, 139, 'TRO301'),
('Ecuaciones Diferenciales', 'ecuaciones diferenciales', 's', 4, 140, 'MAO401'),
('Teoría de Probabilidades', 'teoría de probabilidades', 's', 4, 141, 'MAO402'),
('Fundamentos de Algoritmos', 'fundamentos de algoritmos', 's', 4, 142, 'TAO206'),
('Fundamentos de Programación', 'fundamentos de programación', 's', 4, 143, 'TAO207'),
('Análisis I', 'análisis', 's', 4, 144, 'MAO501'),
('Estadística I', 'estadística', 's', 4, 145, 'MAO502'),
('Investigación de operaciones I', 'investigación de operaciones', 's', 4, 146, 'MAO503'),
('Métodos Numéricos I', 'métodos numéricos', 's', 4, 147, 'MAO504'),
('Análisis II', 'análisis', 's', 4, 148, 'MAO601'),
('Estadística II', 'estadística', 's', 4, 149, 'MAO602'),
('Investigación de operaciones II', 'investigación de operaciones', 's', 4, 150, 'MAO603'),
('Métodos Numéricos II', 'métodos numéricos', 's', 4, 151, 'MAO604'),
('Topología', 'topología', 's', 4, 152, 'MAO701'),
('Estadística III', 'estadística', 's', 4, 153, 'MAO702'),
('Investigación de operaciones III', 'investigación de operaciones', 's', 4, 154, 'MAO703'),
('Métodos Numéricos III', 'métodos numéricos', 's', 4, 155, 'MAO704'),
('Ciencia, Tecnología y Sociedad', 'CTS', 's', 4, 156, 'TAO601'),
('Análisis III', 'análisis', 's', 4, 157, 'MAO801'),
('Geometría Diferencial', 'geometría diferencial', 's', 4, 158, 'MAO802'),
('Investigación de operaciones IV', 'investigación de operaciones', 's', 4, 159, 'MAO803'),
('Electiva I', 'electiva', 'S', 4, 160, ''),
('Electiva II', 'electiva', 'S', 4, 161, ''),
('Servicio Comunitario', 'SC', 's', 4, 162, 'TRO701'),
('Proy. de Trab. Esp. de Grado', 'Anteproyecto', 's', 4, 163, 'MRO901'),
('Pasantias', 'pasantia', 's', 4, 164, 'TRO901'),
('Trabajo Especial de Grado', 'TEG', 's', 4, 165, 'MRO101'),
('Calculo I', 'Cálculo', 's', 5, 166, 'TAO101'),
('Desarrollo de Habilidades Directivas', 'DHD', 's', 5, 167, 'TAO102'),
('Química I', 'química', 's', 5, 168, 'TAO103'),
('Física I', 'Física', 's', 5, 169, 'TAO104'),
('Calculo II', 'Cálculo', 's', 5, 170, 'TAO201'),
('Química II', 'química', 's', 5, 171, 'TAO202'),
('Física II', 'Física', 's', 5, 172, 'TAO203'),
('Estadística', 'estadística', 's', 5, 173, 'QAO201'),
('Deporte', 'deporte', 's', 5, 174, 'TRO201'),
('Sistemas y Algoritmos', 'sistemas y algoritmos', 's', 5, 175, 'TAO204'),
('Cálculo III', 'Cálculo', 's', 5, 176, 'TAO301'),
('Química Analítica', 'q analítica', 's', 5, 177, 'QAO301'),
('Ondas y Ópticas', 'ondas y ópticas', 's', 5, 178, 'QAO302'),
('Lab. de Química', 'lab de química', 's', 5, 179, 'QAO303'),
('Ingles Instrumental', 'Ingles', 's', 5, 180, 'TAO205'),
('Calculo IV', 'Cálculo', 's', 5, 181, 'TAO401'),
('Lab. de Química Analítica', 'lab de química analítica', 's', 5, 182, 'QAO401'),
('Laboratorío de Ondas y Óptica', 'Lab ondas y ópticas', 's', 5, 183, 'QAO402'),
('Química Inorgánica I', 'qu inorgánica', 's', 5, 184, 'QAO403'),
('Apreciación Cultural', 'Cultura', 's', 5, 185, 'TRO301'),
('Química Orgánica I', 'química orgánica', 's', 5, 186, 'QAO501'),
('Química Analítica Instrumental', 'química analítica instrumental', 's', 5, 187, 'QAO502'),
('Química Inorgánica II', 'química inorgánica', 's', 5, 188, 'QAO503'),
('Fisicoquímica I', 'fisicoqquímica', 's', 5, 189, 'QAO504'),
('Principios de Tecnología Química', 'Principios de Tecnología Química', 's', 5, 190, 'QAO505'),
('Química Orgánica II', 'química orgánica', 's', 5, 191, 'QAO601'),
('Lab. de Análisis Instrumental', 'lab de analisis instrumental', 's', 5, 192, 'QAO602'),
('Lab. de Química Orgánica I', 'lab de química orgánica', 's', 5, 193, 'QAO603'),
('Fisicoquímica II', 'fisicoquímica', 's', 5, 194, 'QAO604'),
('Tecnología Química I', 'tecnología química', 's', 5, 195, 'QAO605'),
('Ciencia, Tecnología y Sociedad', 'CTS', 's', 5, 196, 'TAO601'),
('Lab. de Química Inorgánica', 'lab de química inorgánica', 's', 5, 197, 'QAO701'),
('Lab. de Química Orgánica II', 'lab de química orgánica', 's', 5, 198, 'QAO702'),
('Tecnología Química II', 'tecnología química', 's', 5, 199, 'QAO703'),
('Fisicoquímica III', 'fisicoquímica', 's', 5, 200, 'QAO704'),
('Bioquímica', 'bioquímica', 's', 5, 201, 'QAO801'),
('Análisis y Diseño de Reactores', 'análisis y diseño de reactores', 's', 5, 202, 'QAO802'),
('Lab. de Tecnología Química', 'lab de tecnología química', 's', 5, 203, 'QAO803'),
('Lab. de Fisicoquímica', 'lab de fisicoquímica', 's', 5, 204, 'QAO804'),
('Electiva I', 'electiva', 'S', 5, 205, ''),
('Electiva II', 'electiva', 'S', 5, 206, ''),
('Lab. Bioquímica', 'lab bioquímica', 's', 5, 207, 'QAO901'),
('Química Industrial', 'química industrial', 's', 5, 208, 'QAO902'),
('Electiva III', 'electiva', 'S', 5, 209, ''),
('Proy. de Trab. Esp. de Grado', 'Anteproyecto', 's', 5, 210, 'QRO903'),
('Pasantias', 'pasantia', 's', 5, 211, 'TRO901'),
('Servicio Comunitario', 'SC', 's', 5, 212, 'TRO701'),
('Trabajo Especial de Grado', 'TEG', 's', 5, 213, 'QRO101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivo`
--

CREATE TABLE IF NOT EXISTS `objetivo` (
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_materia` int(10) NOT NULL,
  `id_obj` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_obj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `objetivo`
--

INSERT INTO `objetivo` (`descripcion`, `nombre`, `id_materia`, `id_obj`) VALUES
('Al finalizar el proceso de aprendizaje en la asignatura ingles instrumental, el estudiante desarrollará la capacidad de comprender textos científicos en inglés y aplicará diversas técnicas aprendidas a fin de interpretarlos y analizarlos para expresar su contenido en castellano, en forma oral y escrita,\r\nfacilitando así su actualización en su área de estudios.', 'poo', 9, 1),
('Al finalizar este modulo, el alumno fortalecerá sus habilidades de pensar en forma crítica y creativa, así como la percepción y observación\r\nde un problema desde diferentes perspectivas y puntos de vistas, considerando la aplicación de las operaciones básicas del pensamiento.', 'tablas', 14, 2),
('Desarrollar habilidades que propicien un aprendizaje más perdurable y de mayor aplicabilidad en la toma de decisiones y en la solución de\r\nproblemas relacionados con las situaciones a las que el estudiante se enfrenta en su interacción con el medio ambiente, asumiendo una actitud\r\ncritica consciente.', '', 14, 3),
('Promover en el alumno, planes de acción basados en el desarrollo de habilidades que les permita enfrentarse eficazmente las exigencias y retos de la vida\r\ndiaria, bajo un sentido de responsabilidad, dedicación y compromiso. Fundamentándose en el conocimiento y valoración de sí mismo como plataforma para\r\ngenerar cambios positivos y el desarrollo pleno de su personalidad, partiendo de la construcción de su Proyecto de Vida, como modelo de acción, que permita\r\nutilizar experiencias anteriores, pos', '', 3, 4),
('Conocer los sistemas de ecuaciones lineales, matrices, determinantes y los espacios vectoriales.', '', 7, 5),
('Al finalizar el curso el alumno distinguirá los problemas tecnológicos computacionales en los que sean aplicables los modelos probabilísticos y estadísticos del enfoque científico.', '', 13, 6),
('Efectuar operaciones con precisión y eficacia, aplicando las herramientas del Cálculo Diferencial e Integral en Varias Variables Reales.', '', 7, 7),
('Tener la capacidad de bosquejar las gráficas de las funciones elementales de varias variables reales y poder obtener información sobre la función a partir de su gráfica.', '', 7, 8),
('Conocer las transformaciones lineales y su representación matricial.', '', 7, 9),
('Dominar los conceptos y la terminología que forman parte del estudio de las ecuaciones diferenciales ordinarias.', '', 7, 10),
('Adquirir destrezas en el manejo de técnicas y resultados, para el estudio y resolución de ecuaciones diferenciales ordinarias.', '', 7, 11),
('Efectuar operaciones con precisión y eficacia que involucren la manipulación algebraica  del Cálculo Diferencial e Integral, a través de la práctica escrita y complementada con el uso del computador.', '', 2, 12),
('Efectuar operaciones con precisión y eficacia que involucren la manipulación gráfica y algebraica del Cálculo   Diferencial e integral, a través de la práctica escrita, complementada con el uso del computador.', '', 2, 13),
('Al finalizar el proceso de aprendizaje en la asignatura Ciencia, Tecnología y Sociedad, el estudiante estará en capacidad de analizar y reflexionar críticamente sobre la incidencia que las transformaciones científico-tecnológicas tienen sobre el medio social, político, económico e institucional ,así mismo al considerar el carácter social de las actividades científicas y tecnológicas y la compleja interrelación entre Ciencia, Tecnología y Sociedad comprender las implicaciones sociales y económica', 'Ciencia, poder y ética.', 30, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensum`
--

CREATE TABLE IF NOT EXISTS `pensum` (
  `id_pensum` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `semestre` int(10) NOT NULL,
  PRIMARY KEY (`id_pensum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `pensum`
--

INSERT INTO `pensum` (`id_pensum`, `id_departamento`, `id_materia`, `semestre`) VALUES
(1, 2, 1, 1),
(2, 2, 2, 1),
(3, 2, 3, 1),
(4, 2, 4, 2),
(5, 2, 5, 2),
(6, 2, 6, 2),
(7, 2, 7, 2),
(8, 2, 8, 2),
(9, 2, 9, 3),
(10, 2, 10, 3),
(11, 2, 11, 3),
(12, 2, 12, 3),
(13, 2, 13, 3),
(14, 2, 14, 3),
(15, 2, 15, 4),
(16, 2, 16, 4),
(17, 2, 17, 4),
(18, 2, 18, 4),
(19, 2, 19, 4),
(20, 2, 20, 5),
(21, 2, 21, 5),
(22, 2, 22, 5),
(23, 2, 23, 6),
(24, 2, 24, 6),
(25, 2, 25, 6),
(26, 2, 26, 6),
(27, 2, 27, 7),
(28, 2, 28, 7),
(29, 2, 29, 7),
(30, 2, 30, 7),
(31, 2, 31, 7),
(32, 2, 32, 8),
(33, 2, 33, 8),
(34, 2, 34, 8),
(35, 2, 35, 8),
(36, 2, 36, 8),
(37, 2, 37, 9),
(38, 2, 38, 9),
(39, 2, 39, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensumhistorico`
--

CREATE TABLE IF NOT EXISTS `pensumhistorico` (
  `id_pensum_hist` int(10) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `file` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_pensum_hist`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `pensumhistorico`
--

INSERT INTO `pensumhistorico` (`id_pensum_hist`, `id_departamento`, `status`, `fecha`, `file`) VALUES
(1, 2, 2, '0000-00-00', 'formato_de_consignacion_de_recaudos.pdf_91.pdf'),
(2, 3, 1, '0000-00-00', '12207-2008.pdf_51.pdf'),
(3, 2, 1, '0000-00-00', 'SuEstadoDeCuenta(1).pdf_18.pdf'),
(4, 2, 2, '0000-00-00', '02-09-947-2591-2-DR.pdf_86.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE IF NOT EXISTS `programa` (
  `id_programa` int(10) NOT NULL AUTO_INCREMENT,
  `status` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `file` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_materia` int(10) NOT NULL,
  PRIMARY KEY (`id_programa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `status`, `fecha`, `file`, `id_materia`) VALUES
(1, 1, '2016-06-01', 'transferencia.pdf_84.pdf', 56),
(2, 1, '2016-06-01', 'transferencia.pdf_84.pdf', 2),
(5, 1, '2016-06-19', 'ArticuloTDD.pdf_18.pdf', 5),
(6, 1, '2016-06-27', 'disenoAgilConTdd_ebook.pdf_65.pdf', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto`
--

CREATE TABLE IF NOT EXISTS `punto` (
  `id_punto` int(30) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(30) NOT NULL,
  `id_agenda` int(30) NOT NULL,
  `id_materia` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_punto`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `punto`
--

INSERT INTO `punto` (`id_punto`, `descripcion`, `status`, `id_usuario`, `id_agenda`, `id_materia`) VALUES
(1, 'Recordatorio de canales regulares para solicitar cambios curriculares', 'S', 1, 1, NULL),
(2, 'Entrega de tareas a los Coordinadores Curriculares para iniciar Rediseño Curricular por competencias en cada departamento.', 'S', 2, 1, NULL),
(3, 'Entrega del Informe de Gestión', 'S', 1, 1, NULL),
(4, 'Culminación de semestre.', 'S', 2, 1, NULL),
(5, 'Acuerdo para agragar 2 horas más a la asignatura algoritmo', 's', 1, 1, 1),
(6, 'Establecer acuerdo para la introducción del tema Analisis Asintotico en Algoritmo 1', 'S', 3, 1, 1),
(7, 'Reducción de " horas académicas a la practica de laboratorio de redes 1', 's', 1, 1, 5),
(8, 'Agregar una hora academica al laboratorio de Arquitectura del Computador', 's', 1, 1, 20),
(9, 'Asignar el tema tablas de hash a algoritmo 2', 's', 1, 1, 1),
(10, 'LLevar a 20 horas mensuales las actividades en deporte', 'S', 1, 1, 14),
(11, 'Agregar el tema programacion orientada a objetos a algoritmo', 'S', 1, 1, 1),
(12, 'Crear un tema nuevo llamado programacion lineal', 'S', 1, 1, 1),
(13, 'evaluacion de desempeño anual', 'S', 1, 1, NULL),
(14, 'agregar el tema diagramas E/R en base de datos', 'S', 3, 1, 25),
(15, 'Incluir digrafos en elementos discretos', 'S', 1, 1, 10),
(16, 'Agregar 2 horas academicas a calculo 2', 'S', 1, 1, 13),
(17, 'reduccion de 2 horas academicas a ingles instrumental', 'S', 1, 1, 15),
(18, 'ampliar las horas semanales a apreciacion cultural', 'S', 1, 1, 19),
(19, 'agregar base de datos relacionales a la asignatura BD', 'S', 1, 1, 25),
(20, 'introduccion del tema vectores a algoritmo 1', 'S', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_agenda`
--

CREATE TABLE IF NOT EXISTS `puntos_agenda` (
  `id_punto` int(3) NOT NULL AUTO_INCREMENT,
  `id_agenta` int(3) NOT NULL,
  `punto` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_punto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `puntos_agenda`
--

INSERT INTO `puntos_agenda` (`id_punto`, `id_agenta`, `punto`) VALUES
(4, 37, 'Revision de pensum de COMP'),
(5, 37, 'Revision de pensum de biologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion`
--

CREATE TABLE IF NOT EXISTS `resolucion` (
  `id_resolucion` int(11) NOT NULL AUTO_INCREMENT,
  `id_acta` int(11) NOT NULL,
  `id_punto` int(11) DEFAULT NULL,
  `resolucion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_resolucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `resolucion`
--

INSERT INTO `resolucion` (`id_resolucion`, `id_acta`, `id_punto`, `resolucion`, `id_materia`) VALUES
(1, 15, 1, 'La Prof. María Gabriela Sánchez, Directora de la Dirección de Docencia y Desarrollo Curricular,  recordó los mecanismos a seguir para solicitar cambios curriculares.  ', NULL),
(2, 15, 2, 'Se entregó copia del Formato de Elementos del Perfil Vigente, a fin de iniciar el rediseño curricular por competencias en cada departamento.', NULL),
(3, 15, 3, 'Se hizo entrega a cada uno de los coordinadores curriculares de los distintos departamentos de la facultad, copia del Informe de Gestión de la Prof. María Gabriela Sánchez, como Directora de la Dirección de Docencia y Desarrollo Curricular, a fin de que realicen las observaciones pertinentes.  Se acordó que harán llegar vía correo electrónico o en físico las observaciones al mismo.', NULL),
(4, 15, 4, 'Cada Coordinador informó en líneas generales cual era el estimado en semanas para la culminación del semestre en  sus respectivos departamentos.', NULL),
(5, 16, 5, 'si llego a la conclusion de que si', 1),
(6, 16, 6, 'Aprobado', 1),
(7, 16, 7, 'Aprobado', 5),
(8, 16, 8, 'Aprobado', 20),
(9, 17, 9, 'Aprobado', 4),
(10, 17, 10, 'Aprobado', 14),
(11, 17, 11, 'Aprobado', 1),
(12, 17, 12, 'Aprobado', 1),
(13, 18, 13, 'se evaluo el desempeño de cada docente', NULL),
(14, 18, 14, 'Aprobado', 25),
(15, 18, 15, 'Aprobado', 10),
(16, 18, 16, 'Aprobado', 13),
(17, 19, 17, 'Aprobado', 15),
(18, 19, 18, 'Aprobado', 19),
(19, 19, 19, 'Aprobado', 25),
(20, 19, 20, 'Aprobado', 1),
(21, 2, NULL, NULL, 234),
(22, 40, NULL, NULL, 50),
(23, 41, NULL, NULL, 71),
(24, 41, NULL, NULL, 72),
(25, 41, NULL, NULL, 10),
(26, 41, NULL, NULL, 14),
(27, 41, NULL, NULL, 84),
(28, 41, NULL, NULL, 89),
(29, 42, NULL, NULL, 42);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `nombre`) VALUES
(1, 'Vigente'),
(2, 'Historico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE IF NOT EXISTS `tema` (
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_tema` int(30) NOT NULL AUTO_INCREMENT,
  `id_materia` int(10) NOT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`descripcion`, `status`, `titulo`, `id_tema`, `id_materia`) VALUES
('Programacion orientada a objetos es POO', 's', 'POO', 1, 1),
('Programacion orientada a objetos es POO', 's', 'POO', 2, 1),
('backtrackig', 's', 'backtracking', 3, 1),
('tablas de hash', '1', 'tablas de hash', 4, 2),
('tablas de hash', 's', 'Tablas de hash', 5, 1),
('Herramientas para generar ideas', 's', '', 6, 3),
('Definicion de la inteligencia', 's', '', 7, 3),
('Definicion y perfiles de inteligencia', 's', '', 8, 3),
('El desarrollo de la inteligencia', 's', '', 9, 3),
('tipos de pensamientos', 's', '', 10, 3),
('Politicas cientificas y sociedad', 's', '', 11, 30),
('Ciencia y desarrollo: Modelos de desarrollo', 's', '', 12, 30),
('Ciencia y economia: La teoria economica en el desa', 's', '', 13, 30),
('Sociedad y accion comunitaria', 's', '', 14, 30),
('El proyecto y la gerencia de proyecto', 's', '', 15, 30),
('El diccionario', 's', '', 16, 9),
('La tecnica de la prediccion', 's', '', 17, 9),
('asdasdasdasda', 's', 'asdalksd', 18, 1);

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
('jabi', 'leal', '81dc9bdb52d04dc20036dbd8313ed055', 'direc', 3, 100, 'nleal', 'nata');

--
-- Restricciones para tablas volcadas
--

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
