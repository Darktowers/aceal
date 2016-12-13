-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-12-2016 a las 01:52:30
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aceal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id_docente` int(15) NOT NULL AUTO_INCREMENT,
  `cedula` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nombre_docente` varchar(200) NOT NULL,
  `ape_docente` varchar(200) NOT NULL,
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `cedula`, `user`, `password`, `nombre_docente`, `ape_docente`) VALUES
(1, 1013650004, 'miguel', 'admin123', 'Miguel Antonio', 'Leal'),
(2, 80766708, 'luis', '12345', 'Luis Eduardo', 'Bermudez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(100) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `grado` varchar(3) NOT NULL,
  `id_sede` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `cedula`, `nombres`, `apellidos`, `telefono`, `correo`, `direccion`, `grado`, `id_sede`) VALUES
(1, '1013650004', 'jorge', 'leal', 3212417001, 'jorge@gmail.com', 'carrera 30 av 1ra mayo', '11', 1),
(2, '1013258441', 'eduardo', 'bermudez', 3208105325, 'bermudez@gmail.com', 'venecia', '10', 2),
(4, '1013664231', 'Brandon', 'Rivera', 7353127, 'brandonsan@hotmail.com', 'cra 94b # 42 g 51 sur', '11', 1),
(7, '80859334', 'eduardo', 'garzon', 2039900, 'eduardo@gmail.com', 'carrera 45 calle 123', '10', 10),
(8, '1023871326', 'brandon', 'rivera', 3671200, 'brandonsanalucard@hotmail.com', 'calle 38 b sur # 1 13', '11', 10),
(9, '80859152', 'luis', 'garcia', 2039900, 'bermudez@gmail.com', 'calle 38 b sur # 1 13', '11', 1),
(10, '5747757', 'nvvnvnvnbnb', 'nb nbvnvb', 0, 'vbmmbnmb', 'bnmnvmbnm', 'qvn', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Nota` float NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=30 ;

--
-- Volcar la base de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre_materia`, `Nota`, `descripcion`) VALUES
(1, 'fisica', 3.7, 'aceptable'),
(2, 'matematicas', 4.6, 'destacado'),
(4, 'sociales', 2.8, 'insuficiente'),
(8, 'sociales', 2.9, 'insuficiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_estudiante`
--

CREATE TABLE IF NOT EXISTS `notas_estudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(10) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `id_docente` int(10) NOT NULL,
  `Comentarios` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_estudiante` (`id_estudiante`),
  KEY `id_materia` (`id_materia`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `notas_estudiante`
--

INSERT INTO `notas_estudiante` (`id`, `id_estudiante`, `id_materia`, `id_docente`, `Comentarios`) VALUES
(1, 1, 1, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE IF NOT EXISTS `sedes` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nombre_sede` varchar(200) NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nombre_sede` (`nombre_sede`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `nombre_sede`, `telefono`, `direccion`) VALUES
(1, 'Kennedy', '1254477', 'Calle 1547'),
(2, 'Acacia', '1547888', 'Calle y 123'),
(3, 'Almenar', '2343434', 'calle x 345'),
(4, 'bosa_centro', '1232345', 'carrera 9 calle 3'),
(5, 'bosa_laureles', '3456778', 'carrera 87f calle 56'),
(6, 'edaurdo_santos', '4561213', 'carrera 56d calle 78b'),
(7, 'la_victoria', '3459080', 'calle 12e carrera 40a'),
(8, 'la_y', '3458050', 'carrera 10 calle 38sur'),
(9, 'policarpa', '1236789', 'calle 8sur carrera 10'),
(10, 'san_martin', '2562331', 'carrera 40 calle 1');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id`) REFERENCES `estudiantes` (`id`);

--
-- Filtros para la tabla `notas_estudiante`
--
ALTER TABLE `notas_estudiante`
  ADD CONSTRAINT `notas_estudiante_ibfk_3` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`),
  ADD CONSTRAINT `notas_estudiante_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`),
  ADD CONSTRAINT `notas_estudiante_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`);
