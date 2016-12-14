-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 03:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aceal`
--

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
`id_docente` int(15) NOT NULL,
  `cedula` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nombre_docente` varchar(200) NOT NULL,
  `ape_docente` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id_docente`, `cedula`, `user`, `password`, `nombre_docente`, `ape_docente`) VALUES
(1, 1013650004, 'miguel', 'admin123', 'Miguel Antonio', 'Leal'),
(2, 80766708, 'luis', '12345', 'Luis Eduardo', 'Bermudez');

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
`id` int(11) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `grado` varchar(3) NOT NULL,
  `id_sede` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `estudiantes`
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
-- Table structure for table `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
`id` int(11) NOT NULL,
  `nombre_materia` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id`, `nombre_materia`, `descripcion`) VALUES
(1, 'Fisica', ''),
(2, 'Matematicas', ''),
(3, 'Sociales', ''),
(4, 'Etica', ''),
(5, 'Español', ''),
(6, 'Quimica', ''),
(7, 'Ingles', ''),
(8, 'Filosofia', '');

-- --------------------------------------------------------

--
-- Table structure for table `notas_estudiante`
--

CREATE TABLE IF NOT EXISTS `notas_estudiante` (
`id` int(11) NOT NULL,
  `id_estudiante` int(10) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `id_docente` int(10) NOT NULL,
  `nota` int(5) NOT NULL,
  `semestre` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `Comentarios` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `notas_estudiante`
--

INSERT INTO `notas_estudiante` (`id`, `id_estudiante`, `id_materia`, `id_docente`, `nota`, `semestre`, `Comentarios`) VALUES
(2, 1, 2, 1, 5, '1', 'Exelente'),
(3, 1, 3, 2, 4, '2', ''),
(4, 1, 8, 1, 5, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `sedes`
--

CREATE TABLE IF NOT EXISTS `sedes` (
`id` int(12) NOT NULL,
  `nombre_sede` varchar(200) NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sedes`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `docentes`
--
ALTER TABLE `docentes`
 ADD PRIMARY KEY (`id_docente`);

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notas_estudiante`
--
ALTER TABLE `notas_estudiante`
 ADD PRIMARY KEY (`id`), ADD KEY `id_estudiante` (`id_estudiante`), ADD KEY `id_materia` (`id_materia`), ADD KEY `id_docente` (`id_docente`);

--
-- Indexes for table `sedes`
--
ALTER TABLE `sedes`
 ADD PRIMARY KEY (`id`), ADD KEY `nombre_sede` (`nombre_sede`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `docentes`
--
ALTER TABLE `docentes`
MODIFY `id_docente` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notas_estudiante`
--
ALTER TABLE `notas_estudiante`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sedes`
--
ALTER TABLE `sedes`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `notas_estudiante`
--
ALTER TABLE `notas_estudiante`
ADD CONSTRAINT `notas_estudiante_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`),
ADD CONSTRAINT `notas_estudiante_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`),
ADD CONSTRAINT `notas_estudiante_ibfk_3` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
