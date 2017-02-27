-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-02-2015 a las 03:01:01
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `consultorio_db`
--
CREATE DATABASE IF NOT EXISTS `consultorio_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `consultorio_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompanante`
--

CREATE TABLE IF NOT EXISTS `acompanante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `estado` varchar(70) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `paciente_id` int(11) NOT NULL,
  `desicion` varchar(5) DEFAULT NULL,
  `evangelio` varchar(5) DEFAULT NULL,
  `sexo` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_acompanante_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_a_grupo`
--

CREATE TABLE IF NOT EXISTS `asistencia_a_grupo` (
  `grupo_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `asistio` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`grupo_id`,`paciente_id`),
  KEY `fk_acompanante_has_grupo_grupo1_idx` (`grupo_id`),
  KEY `fk_asistencia_a_grupo_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistencia_a_grupo`
--

INSERT INTO `asistencia_a_grupo` (`grupo_id`, `paciente_id`, `asistio`) VALUES
(1, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE IF NOT EXISTS `cita` (
  `fecha_inicio` timestamp NULL DEFAULT NULL,
  `fecha_fin` timestamp NULL DEFAULT NULL,
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `asistio` varchar(5) DEFAULT NULL,
  `sistema_ife` varchar(40) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `medico_cedula` varchar(45) NOT NULL,
  PRIMARY KEY (`numero`),
  KEY `fk_cita_sistema1_idx` (`sistema_ife`),
  KEY `fk_cita_paciente1_idx` (`paciente_id`),
  KEY `fk_cita_medico1_idx` (`medico_cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`fecha_inicio`, `fecha_fin`, `numero`, `asistio`, `sistema_ife`, `paciente_id`, `medico_cedula`) VALUES
('2015-02-09 14:00:00', '2015-02-09 15:00:00', 3, 'no', '206639038', 1, '123'),
('2015-02-09 15:01:00', '2015-02-09 16:00:00', 4, 'no', '206639038', 3, '123'),
('2015-02-09 16:01:00', '2015-02-09 16:59:00', 5, 'si', '206639038', 1, '123456'),
('2015-02-09 17:00:00', '2015-02-09 17:30:00', 6, 'no', '206639038', 1, '123'),
('2015-02-18 01:20:00', '2015-02-18 01:45:00', 7, 'no', '206639038', 3, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE IF NOT EXISTS `colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ife` varchar(50) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_colaborador_id` int(11) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_colaborador_tipo_colaborador1_idx` (`tipo_colaborador_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `colaborador`
--

INSERT INTO `colaborador` (`id`, `ife`, `nombre`, `apaterno`, `amaterno`, `telefono`, `domicilio`, `fecha_nacimiento`, `tipo_colaborador_id`, `estado`, `municipio`, `localidad`) VALUES
(1, 'Gr', 'JosÃ© Bryan', 'GarcÃ­a', 'M', '2147483647', 'Emilio Carranza 253', '1991-01-12', 2, 'Jalisco', 'AHUALULCO DE MERCADO', 'ahualulco'),
(2, 'gfdjk', 'EvelÃƒÂ­n', 'Capturista', '', '2147483647', 'Emilio Carranza 253', '1991-01-12', 2, 'Morelos', '', ''),
(3, 'GRMZER91020214H800', 'Ramón', '', '', '37855445', '', '0000-00-00', 2, 'Aguascalientes', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(145) DEFAULT NULL,
  `tel_casa` varchar(45) DEFAULT NULL,
  `tel_celular` varchar(45) DEFAULT NULL,
  `iglesia_cristiana_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contacto_iglesia_cristiana1_idx` (`iglesia_cristiana_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `tel_casa`, `tel_celular`, `iglesia_cristiana_id`) VALUES
(1, 'Sin contacto', 'n/a', 'n/a', 1),
(5, 'Marlon eiffel acentÃ³', '3333333', '33323233', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE IF NOT EXISTS `diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`id`, `nombre`) VALUES
(1, 'fractura expuesta/virginidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `difusion`
--

CREATE TABLE IF NOT EXISTS `difusion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `difusion`
--

INSERT INTO `difusion` (`id`, `nombre`) VALUES
(1, 'radio'),
(2, 'iglesia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `idequipo` varchar(50) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo_equipo_idtipo_equipo` varchar(10) NOT NULL,
  PRIMARY KEY (`idequipo`,`tipo_equipo_idtipo_equipo`),
  KEY `fk_equipo_tipo_equipo1_idx` (`tipo_equipo_idtipo_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `nombre`, `estatus`, `descripcion`, `tipo_equipo_idtipo_equipo`) VALUES
('Mul-1', 'Muleta 1', 'prestado', NULL, 'Mul'),
('Mul-2', 'Muleta 2', 'disponible', 'Muletas verdes', 'Mul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_prestamo`
--

CREATE TABLE IF NOT EXISTS `equipo_prestamo` (
  `equipo_idequipo` varchar(50) NOT NULL,
  `prestamo_id_prestamo` int(11) NOT NULL,
  PRIMARY KEY (`equipo_idequipo`,`prestamo_id_prestamo`),
  KEY `fk_equipo_has_prestamo_prestamo1_idx` (`prestamo_id_prestamo`),
  KEY `fk_equipo_has_prestamo_equipo1_idx` (`equipo_idequipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo_prestamo`
--

INSERT INTO `equipo_prestamo` (`equipo_idequipo`, `prestamo_id_prestamo`) VALUES
('Mul-1', 2),
('Mul-2', 3),
('Mul-2', 4),
('Mul-1', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE IF NOT EXISTS `especialidad` (
  `idespecialidad` varchar(45) NOT NULL,
  `nombre` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`idespecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idespecialidad`, `nombre`) VALUES
('Pedia', 'PediatrÃ­a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `horario` datetime DEFAULT NULL,
  `colaborador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupo_colaborador1_idx` (`colaborador_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `nombre`, `horario`, `colaborador_id`) VALUES
(1, 'Yoga para todos', '2015-02-22 15:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_medico`
--

CREATE TABLE IF NOT EXISTS `historial_medico` (
  `idhistorial` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `observaciones` longtext,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`idhistorial`),
  KEY `fk_historial_medico_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `historial_medico`
--

INSERT INTO `historial_medico` (`idhistorial`, `fecha`, `observaciones`, `paciente_id`) VALUES
(2, '2015-02-10 03:31:15', 'fdfhgfh', 1),
(3, '2015-02-17 02:35:48', 'lo que sea', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iglesia`
--

CREATE TABLE IF NOT EXISTS `iglesia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `iglesia`
--

INSERT INTO `iglesia` (`id`, `nombre`) VALUES
(1, 'cristiano'),
(2, 'Católica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iglesia_cristiana`
--

CREATE TABLE IF NOT EXISTS `iglesia_cristiana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `iglesia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iglesia_cristiana_iglesia1_idx` (`iglesia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `iglesia_cristiana`
--

INSERT INTO `iglesia_cristiana` (`id`, `nombre`, `iglesia_id`) VALUES
(1, 'Los cristianos cholos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `cedula` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`cedula`, `nombre`, `apaterno`, `amaterno`, `pais`, `estado`, `ciudad`, `colonia`, `calle`, `telefono`) VALUES
('123', 'Erick Jorge Roberto', 'GarcÃ­a', 'Medico2', 'MÃ©xico', 'Jalisco', 'Ameca', 'Centro', 'Abasolo', 2147483647),
('1234', 'Erick Jorge Roberto', 'Guerrero', 'Medico2', 'MÃ©xico', 'Jalisco', 'Ameca', 'Centro', 'Abasolo', 2147483647),
('12345', 'Erick Jorge Roberto', 'Prueba', 'Medico2', 'MÃ©xico', 'Jalisco', 'Ameca', 'Centro', 'Abasolo', 2147483647),
('123456', 'Erick Jorge Roberto', 'Prueba', 'Medico2', 'MÃ©xico', 'Jalisco', 'Ameca', 'Centro', 'Abasolo', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico_has_especialidad`
--

CREATE TABLE IF NOT EXISTS `medico_has_especialidad` (
  `medico_cedula` varchar(45) NOT NULL,
  `especialidad_idespecialidad` varchar(45) NOT NULL,
  PRIMARY KEY (`medico_cedula`,`especialidad_idespecialidad`),
  KEY `fk_medico_has_especialidad_especialidad1_idx` (`especialidad_idespecialidad`),
  KEY `fk_medico_has_especialidad_medico1_idx` (`medico_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medico_has_especialidad`
--

INSERT INTO `medico_has_especialidad` (`medico_cedula`, `especialidad_idespecialidad`) VALUES
('123', 'Pedia'),
('1234', 'Pedia'),
('12345', 'Pedia'),
('123456', 'Pedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medio_difusion_x_paciente`
--

CREATE TABLE IF NOT EXISTS `medio_difusion_x_paciente` (
  `paciente_id` int(11) NOT NULL,
  `difusion_id` int(11) NOT NULL,
  PRIMARY KEY (`paciente_id`,`difusion_id`),
  KEY `fk_paciente_has_difusion_difusion1_idx` (`difusion_id`),
  KEY `fk_paciente_has_difusion_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medio_difusion_x_paciente`
--

INSERT INTO `medio_difusion_x_paciente` (`paciente_id`, `difusion_id`) VALUES
(3, 1),
(4, 1),
(5, 1),
(7, 1),
(3, 2),
(4, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ife` varchar(40) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `desicion` varchar(5) DEFAULT NULL,
  `evangelio` varchar(5) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `iglesia_id` int(11) NOT NULL,
  `contacto_id` int(11) NOT NULL,
  `diagnostico_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_paciente_iglesia1_idx` (`iglesia_id`),
  KEY `fk_paciente_contacto1_idx` (`contacto_id`),
  KEY `fk_paciente_diagnostico1_idx` (`diagnostico_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `ife`, `nombre`, `apaterno`, `amaterno`, `fecha_nacimiento`, `telefono`, `pais`, `estado`, `municipio`, `localidad`, `calle`, `desicion`, `evangelio`, `sexo`, `iglesia_id`, `contacto_id`, `diagnostico_id`) VALUES
(1, 'GRMZER91020214H800', 'Erick Jorge Roberto', 'Guerrero', 'Muñoz', '1991-02-02', '3861008714', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'localidad', 'Emilio Carranza 253', 'no', 'no', '', 1, 0, 0),
(3, 'GRCSJS91754', 'JosÃ© Bryan', 'GarcÃ­a', 'Castro', '1991-01-28', '2147483647', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'localidad', 'Emilio Carranza 253', 'si', 'si', 'Hombre', 1, 0, 0),
(4, '', 'osiris', 'solis', 'guerrero', '1921-02-03', '333333333', 'MÃ©xico', 'Jalisco', 'ameca', 'localidad', 'algo #2', 'si', 'si', '', 2, 0, 0),
(5, NULL, 'AcentÃ³', 'GarcÃ­a', 'leÃ³n', '1991-02-02', '', 'MÃ©xico', 'Aguascalientes', 'atotonilco', 'atotonilcÃ³', 'DÃ­az de LeÃ³n #1228', 'si', 'si', '', 1, 1, 1),
(6, NULL, 'AcentÃ³', 'GarcÃ­a', 'leÃ³n', '1991-02-02', '', 'MÃ©xico', 'Aguascalientes', 'atotonilco', 'atotonilcÃ³', 'DÃ­az de LeÃ³n #1228', 'si', 'si', '', 1, 1, 1),
(7, NULL, 'JosÃ© Bryan', 'GarcÃ­a', 'Capturista', '1963-02-08', '37855445', 'MÃ©xico', 'Jalisco', 'atotonilco', 'atotonilcÃ³', 'DÃ­az de LeÃ³n #1228', 'si', 'si', 'Hombre', 1, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pastor`
--

CREATE TABLE IF NOT EXISTS `pastor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `domicilio` varchar(145) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `domicilio_iglesia` varchar(145) DEFAULT NULL,
  `telefono_iglesia` varchar(20) DEFAULT NULL,
  `iglesia_id` int(11) NOT NULL,
  `nombre_iglesia` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pastor_iglesia1_idx` (`iglesia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pastor`
--

INSERT INTO `pastor` (`id`, `nombre`, `apaterno`, `amaterno`, `telefono`, `estado`, `municipio`, `localidad`, `domicilio`, `fecha_nacimiento`, `domicilio_iglesia`, `telefono_iglesia`, `iglesia_id`, `nombre_iglesia`) VALUES
(1, 'José Bryan', 'García', 'Mñz', '2147483647', 'Coahuila', 'atotonilco', 'atotonilco', '', '1977-02-03', 'RayÃ³n 18', '382738392', 1, 'De todos los santos :v'),
(2, 'Erick Jorge Roberto', 'Guerrero', 'Medico2', '2147483647', 'Durango', 'AHUALULCO DE MERCADO', 'atotonilco', 'DÃ­az de LeÃ³n #1228', '1997-02-12', 'RayÃ³n 18', '382738392', 1, 'De todos los santos :v');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE IF NOT EXISTS `prestamo` (
  `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  `fecha_prestamo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_devolucion` timestamp NULL DEFAULT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id_prestamo`),
  KEY `fk_prestamo_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `estado`, `fecha_prestamo`, `fecha_devolucion`, `paciente_id`) VALUES
(2, 'finalizado', '2015-02-15 02:38:42', '2015-02-15 06:00:00', 1),
(3, 'finalizado', '2015-02-15 02:38:54', '2015-02-15 06:00:00', 1),
(4, 'finalizado', '2015-02-15 02:41:57', '2015-02-15 06:00:00', 3),
(5, 'activo', '2015-02-17 06:00:00', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE IF NOT EXISTS `sistema` (
  `ife` varchar(40) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apaterno` varchar(60) DEFAULT NULL,
  `amaterno` varchar(60) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `acceso` timestamp NULL DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ife`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistema`
--

INSERT INTO `sistema` (`ife`, `nombre`, `apaterno`, `amaterno`, `usuario`, `pass`, `acceso`, `tipo`, `estado`) VALUES
('123', 'Erick', 'Capturista', '1', 'capturista1', '9450476b384b32d8ad8b758e76c98a69', '0000-00-00 00:00:00', 'capturista', NULL),
('123456', 'Erick Jorge Roberto', 'Prueba', 'Medico2', 'medico1', '9450476b384b32d8ad8b758e76c98a69', NULL, 'medico', 'activo'),
('206639038', 'Erick Jorge', 'Guerrero', '', 'erick', '9450476b384b32d8ad8b758e76c98a69', '2015-02-05 03:06:49', 'administrador', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_colaborador`
--

CREATE TABLE IF NOT EXISTS `tipo_colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_colaborador`
--

INSERT INTO `tipo_colaborador` (`id`, `tipo`) VALUES
(1, ''),
(2, 'Coordinador servicios generales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE IF NOT EXISTS `tipo_equipo` (
  `idtipo_equipo` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_equipo`
--

INSERT INTO `tipo_equipo` (`idtipo_equipo`, `nombre`) VALUES
('Mul', 'Muletas');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acompanante`
--
ALTER TABLE `acompanante`
  ADD CONSTRAINT `fk_acompanante_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia_a_grupo`
--
ALTER TABLE `asistencia_a_grupo`
  ADD CONSTRAINT `fk_acompanante_has_grupo_grupo1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asistencia_a_grupo_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `fk_cita_medico1` FOREIGN KEY (`medico_cedula`) REFERENCES `medico` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cita_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cita_sistema1` FOREIGN KEY (`sistema_ife`) REFERENCES `sistema` (`ife`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD CONSTRAINT `fk_colaborador_tipo_colaborador1` FOREIGN KEY (`tipo_colaborador_id`) REFERENCES `tipo_colaborador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_contacto_iglesia_cristiana1` FOREIGN KEY (`iglesia_cristiana_id`) REFERENCES `iglesia_cristiana` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_equipo_tipo_equipo1` FOREIGN KEY (`tipo_equipo_idtipo_equipo`) REFERENCES `tipo_equipo` (`idtipo_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo_prestamo`
--
ALTER TABLE `equipo_prestamo`
  ADD CONSTRAINT `fk_equipo_has_prestamo_equipo1` FOREIGN KEY (`equipo_idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipo_has_prestamo_prestamo1` FOREIGN KEY (`prestamo_id_prestamo`) REFERENCES `prestamo` (`id_prestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_colaborador1` FOREIGN KEY (`colaborador_id`) REFERENCES `colaborador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD CONSTRAINT `fk_historial_medico_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `iglesia_cristiana`
--
ALTER TABLE `iglesia_cristiana`
  ADD CONSTRAINT `fk_iglesia_cristiana_iglesia1` FOREIGN KEY (`iglesia_id`) REFERENCES `iglesia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `medico_has_especialidad`
--
ALTER TABLE `medico_has_especialidad`
  ADD CONSTRAINT `fk_medico_has_especialidad_especialidad1` FOREIGN KEY (`especialidad_idespecialidad`) REFERENCES `especialidad` (`idespecialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medico_has_especialidad_medico1` FOREIGN KEY (`medico_cedula`) REFERENCES `medico` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `medio_difusion_x_paciente`
--
ALTER TABLE `medio_difusion_x_paciente`
  ADD CONSTRAINT `fk_paciente_has_difusion_difusion1` FOREIGN KEY (`difusion_id`) REFERENCES `difusion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_has_difusion_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_contacto1` FOREIGN KEY (`contacto_id`) REFERENCES `contacto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_iglesia1` FOREIGN KEY (`iglesia_id`) REFERENCES `iglesia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_diagnostico1` FOREIGN KEY (`diagnostico_id`) REFERENCES `diagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pastor`
--
ALTER TABLE `pastor`
  ADD CONSTRAINT `fk_pastor_iglesia1` FOREIGN KEY (`iglesia_id`) REFERENCES `iglesia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
