-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2016 a las 20:01:23
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `colegio1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_c` int(9) NOT NULL,
  `nb` varchar(40) NOT NULL,
  `ap` varchar(50) NOT NULL,
  `fc_n` date NOT NULL,
  `eda` int(4) NOT NULL,
  `gene` varchar(20) NOT NULL,
  `lu_n` varchar(40) NOT NULL,
  `ent_f` varchar(40) NOT NULL,
  `esta_ci` varchar(20) NOT NULL,
  `ta` varchar(20) NOT NULL,
  `pso` int(4) NOT NULL,
  `impedi_f` varchar(50) NOT NULL,
  `dir_ha` varchar(100) NOT NULL,
  `muni` varchar(40) NOT NULL,
  `parro` varchar(50) NOT NULL,
  `tel_h` varchar(20) NOT NULL,
  `tel_m` varchar(20) NOT NULL,
  `corr` varchar(50) NOT NULL,
  `etni` varchar(40) NOT NULL,
  `alergi` varchar(80) NOT NULL,
  `plan` varchar(40) NOT NULL,
  `be` varchar(6) NOT NULL,
  `org` varchar(40) NOT NULL,
  PRIMARY KEY (`id_c`),
  KEY `id_c` (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_c`, `nb`, `ap`, `fc_n`, `eda`, `gene`, `lu_n`, `ent_f`, `esta_ci`, `ta`, `pso`, `impedi_f`, `dir_ha`, `muni`, `parro`, `tel_h`, `tel_m`, `corr`, `etni`, `alergi`, `plan`, `be`, `org`) VALUES
(2, '', '', '0000-00-00', 0, 'Hombre', 'Venezuela', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '0000-00-00', 0, 'Hombre', 'Venezuela', 'maracaibo', 'Hombre', 'M', 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '0000-00-00', 0, 'Hombre', 'AF', '', 'Soltero', 'S', 0, '', '', '', '', '', '', '', '', '', '', 'si', ''),
(33, '', '', '0000-00-00', 0, 'Hombre', 'AF', '', 'Soltero', 'S', 55, 'hh', '', '', '', '', '', '', '', '', '', '', ''),
(63, '', '', '0000-00-00', 0, 'Hombre', 'AF', '', 'Soltero', 'S', 0, '', '', '', '', '', '', '', '', '', '', 'si', ''),
(66, '', '', '0000-00-00', 0, 'Hombre', 'AF', '', 'Soltero', 'S', 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(78, '', '', '0000-00-00', 0, 'Hombre', 'AF', '', 'Soltero', 'S', 0, '', '', '', '', '', '', '', '', '', '', 'si', ''),
(777, '', '', '0000-00-00', 0, 'Hombre', 'AF', '', 'Soltero', 'S', 8, '', '', '', '', '', '', '', '', '', '', '', ''),
(2513747, 'felix reiner', 'marquez florido', '2016-03-11', 35, 'Hombre', 'Venezuela', 'Zulia', 'Soltero', 'M', 80, 'no', 'la lago', 'maracibo', 'olegario villalobos', '04168622194', '04168622194', 'carolina@hotmail.com', 'no', 'no', 'urbe', 'no', 'urbe'),
(15727738, 'felix reiner', 'marquez', '2016-03-11', 35, 'Hombre', 'Venezuela', 'zulia', 'Soltero', 'S', 35, 'no', 'la lago', 'maracaibo', 'olegario villalobos', '04168622194', '04168622194', 'felixrx25@hotmail.com', 'no aplica', 'no aplica', 'romulo gallegos', 'si', 'ince');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_de_evaluacion`
--

CREATE TABLE IF NOT EXISTS `informe_de_evaluacion` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `id_c` int(9) NOT NULL,
  `asignatura_1` varchar(40) NOT NULL,
  `asignatura_2` varchar(40) NOT NULL,
  `asignatura_3` varchar(40) NOT NULL,
  `asignatura_4` varchar(40) NOT NULL,
  `asignatura_5` varchar(40) NOT NULL,
  `asignatura_6` varchar(40) NOT NULL,
  `asignatura_7` varchar(40) NOT NULL,
  `asignatura_8` varchar(40) NOT NULL,
  `asignatura_9` varchar(40) NOT NULL,
  `asignatura_10` varchar(40) NOT NULL,
  `asignatura_11` varchar(40) NOT NULL,
  `asignatura_12` varchar(40) NOT NULL,
  `nota_1` int(6) NOT NULL,
  `nota_2` int(6) NOT NULL,
  `nota_3` int(6) NOT NULL,
  `nota_4` int(6) NOT NULL,
  `nota_5` int(6) NOT NULL,
  `nota_6` int(6) NOT NULL,
  `nota_7` int(6) NOT NULL,
  `nota_8` int(6) NOT NULL,
  `nota_9` int(6) NOT NULL,
  `nota_10` int(6) NOT NULL,
  `nota_11` int(6) NOT NULL,
  `nota_12` int(11) NOT NULL,
  `a_o` varchar(10) NOT NULL,
  `seccion` varchar(20) NOT NULL,
  `a_o_escolar` varchar(20) NOT NULL,
  `mencion` varchar(40) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `id_c` (`id_c`),
  UNIQUE KEY `id_c_2` (`id_c`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `informe_de_evaluacion`
--

INSERT INTO `informe_de_evaluacion` (`Id`, `id_c`, `asignatura_1`, `asignatura_2`, `asignatura_3`, `asignatura_4`, `asignatura_5`, `asignatura_6`, `asignatura_7`, `asignatura_8`, `asignatura_9`, `asignatura_10`, `asignatura_11`, `asignatura_12`, `nota_1`, `nota_2`, `nota_3`, `nota_4`, `nota_5`, `nota_6`, `nota_7`, `nota_8`, `nota_9`, `nota_10`, `nota_11`, `nota_12`, `a_o`, `seccion`, `a_o_escolar`, `mencion`) VALUES
(56, 15727738, 'Castellano y Literatura', 'Historia Cont. de Venezuela', 'Educacion Fisica', 'Matematica', 'Ingles', 'Mecanografia', 'Contabilidad', 'Nociones Grles Derecho', 'Informatica I', 'Practicas de Oficina', 'Teoria Gral. de Seguro', 'Instruccion Premilitar', 4, 4, 4, 20, 0, 0, 0, 0, 44, 4, 444, 0, ' 4 to', 'A', '2016-2017', 'Administracion Financiera'),
(39, 4705820, 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ' 4 to', 'A', '2016-2017', 'Administracion Financiera'),
(40, 15727723, 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, ' 4 to', 'A', '2016-2017', 'Administracion Financiera'),
(43, 14, 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 'Castellano y Literatura', 2, 2, 22, 2, 22, 2, 2, 2, 2, 2, 22, 2, ' 4 to', 'A', '2016-2017', 'Administracion Financiera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE IF NOT EXISTS `padres` (
  `cd_m` int(9) NOT NULL,
  `nb_m` varchar(40) NOT NULL,
  `tel_m_m` varchar(20) NOT NULL,
  `nb_p` varchar(50) NOT NULL,
  `cd_p` int(9) NOT NULL,
  `tel_m_p` varchar(20) NOT NULL,
  `id_c` int(9) NOT NULL,
  PRIMARY KEY (`id_c`),
  KEY `id_c` (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`cd_m`, `nb_m`, `tel_m_m`, `nb_p`, `cd_p`, `tel_m_p`, `id_c`) VALUES
(0, '', '', 'felix', 4, '', 2),
(15, 'felix', '14', 'felix', 15, '14', 6),
(0, '', '', '', 0, '', 23),
(0, '', '', '', 0, '', 33),
(0, '', '', '', 0, '', 63),
(0, '', '', '', 0, '', 66),
(0, '', '', '', 0, '', 78),
(0, '', '', '', 0, '', 777),
(0, '', '', '', 0, '', 2513747),
(15727738, 'lizbia del carmen', '0414-8622194', 'felix', 25139747, '0416-8622194', 15727738);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE IF NOT EXISTS `representante` (
  `cd_r` int(9) NOT NULL,
  `nb_r` varchar(40) NOT NULL,
  `ap_r` varchar(50) NOT NULL,
  `fec_r` date NOT NULL,
  `eda_r` int(6) NOT NULL,
  `ge_r` varchar(40) NOT NULL,
  `parent` varchar(50) NOT NULL,
  `cor_re` varchar(50) NOT NULL,
  `dir_ha_r` varchar(140) NOT NULL,
  `muni_r` varchar(50) NOT NULL,
  `parro_r` varchar(50) NOT NULL,
  `tel_h_r` varchar(20) NOT NULL,
  `tel_m_r` varchar(20) NOT NULL,
  `id_c` int(9) NOT NULL,
  PRIMARY KEY (`id_c`),
  KEY `id_c` (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`cd_r`, `nb_r`, `ap_r`, `fec_r`, `eda_r`, `ge_r`, `parent`, `cor_re`, `dir_ha_r`, `muni_r`, `parro_r`, `tel_h_r`, `tel_m_r`, `id_c`) VALUES
(2, '', '', '2016-03-03', 5, '', '', '', '', '', '', '', '', 2),
(3, 'h', 'h', '2016-03-10', 40, 'Hombre', 'madre', '', '', '', '', '', '', 6),
(0, '', '', '0000-00-00', 0, 'Hombre', '', '', '', '', '', '', '', 23),
(0, '', '', '0000-00-00', 0, 'Hombre', '', '', '', '', '', '', '', 33),
(20, 'ghj', '', '0000-00-00', 0, 'Hombre', '', '', '', '', '', '', '', 63),
(0, '', '', '0000-00-00', 0, 'Hombre', '', '', '', '', '', '', '', 66),
(12305747, 'carol', 'marquez', '2016-03-10', 80, 'Hombre', 'padre', 'felixrx25@hotmail.com', 'la lago', 'maracaibo', 'zulia', '0414-89996', '045566', 78),
(0, '', '', '0000-00-00', 0, 'Hombre', '', '', '', '', '', '', '', 777),
(0, '', '', '0000-00-00', 0, 'Hombre', '', '', '', '', '', '', '', 2513747),
(4705820, 'lizbia', 'marquez', '2016-03-25', 50, 'Hombre', 'madre', 'felixrx25@hotmail.com', 'la la lago', 'maracaibo', 'olegario villalobos', '0416-8622194', '0416-8622194', 15727738);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `alumnos` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `representante`
--
ALTER TABLE `representante`
  ADD CONSTRAINT `representante_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `alumnos` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
