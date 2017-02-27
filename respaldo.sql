-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: custsql-ipg06.eigbox.net
-- Tiempo de generación: 24-03-2016 a las 15:47:59
-- Versión del servidor: 5.5.44
-- Versión de PHP: 4.4.9
-- 
-- Base de datos: `lucas14`
-- 
CREATE DATABASE `lucas14` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lucas14`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `acompanante`
-- 

CREATE TABLE `acompanante` (
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
  `desicion` varchar(45) DEFAULT NULL,
  `evangelio` varchar(5) DEFAULT NULL,
  `sexo` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_acompanante_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

-- 
-- Volcar la base de datos para la tabla `acompanante`
-- 

INSERT INTO `acompanante` VALUES (1, 'Alma Delia', 'Campa', 'Lizaola', '3757582618', 'Jalisco', 'Ameca', 'Allende 23', 'Ameca', 1, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (2, 'Jose Manuel', 'Chavarin', 'Gomez', '375-116-3753', 'Jalisco', 'Ameca', 'JuÃ¡rez 2', 'Buenos Aires', 15, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (3, 'Imelda', 'Chavarin', 'Gomez', '375-102-8075', 'Jalisco', 'Ameca', 'Morelos 10A', 'Buenos Aires', 15, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (4, 'Gladis Adriana', 'Orozco ', 'Gomez', '7586328', 'Jalisco', 'Ameca', 'Reforma 33 ', 'San Antonio Matute', 13, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (5, 'Ageda ', 'Ruiz', 'Guerra', '375-106-5945', 'Jalisco', 'Ameca', 'Domingo Fausto 51', 'Villahermosa', 12, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (8, 'Rodolfo', 'Zepeda', 'RodrÃ­guez', '3751064711', 'Jalisco', 'Ameca', 'Hacienda de Barcenas 84, Colonia el Porvenir', 'Ameca', 2, 'si', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (9, 'Erindira ', 'AlcalÃ¡', 'Rodriguez', '375-760-3498', 'Jalisco', 'Ameca', 'Azequias 59 ', 'Centro', 1, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (10, 'Alma Delia', 'Campa', 'Lizaola', '375-760-3498', 'Jalisco', 'Ameca', 'Vallarta 51', 'Centro', 1, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (11, 'Josefina', 'Navarro', 'Figueroa', '758-72-89', 'Jalisco', 'Ameca', 'Ricardo Flores Magon 1', 'La coronilla', 16, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (12, 'Juan JosÃ©', 'Navarro', 'Figueroa', '758-72-89', 'Sonora', 'San Luis Rio Colorado', 'Torreon B 22', 'Federal', 16, 'si', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (13, 'Elena Guadalupe', 'Ayala ', 'Aguilar', '375-118-3550', 'Jalisco', 'Ameca', 'ContinuaciÃ³n al portezuelo 11', 'La Isla', 17, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (14, 'M. de los Angeles', 'Allala', 'Aguilar', '375-103-2509', 'Jalisco', 'Ameca', 'Continuacion portezuelo 11', 'La Isla', 17, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (17, 'Rosario', 'Vera', 'Soto', '7580829', 'Jalisco', 'Ameca', 'Republica 148', 'San JosÃ©', 5, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (18, 'Teresa JesÃºs', 'Flores ', 'Uribe', '375-11-40-40-3', 'Jalisco', 'Ameca', 'Manuel Avila Camacho 17 ', 'Rancho La Coronilla', 20, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (19, 'Alejandra ', 'Carrillo', 'Topete', '758-04-88', 'Jalisco', 'Ameca', 'Jesus Anaya Topete 15 ', 'Santuario', 18, 'no', 'no', 'Mujer');
INSERT INTO `acompanante` VALUES (20, 'Magdaleno', 'Medina', 'Castro', '75-8-72-42', 'Jalisco', 'Ameca', 'Francisco Villa 3', 'El sabino', 4, 'si', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (21, 'Maria de JesÃºs ', 'Medina ', 'Solano', '375-11-22-949', 'Jalisco', 'Ameca', 'Marco Antonio Perez 12 ', 'El sabino', 4, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (22, 'Soledad ', 'Olvera', 'Valencia', '860-80', 'Jalisco', 'Ameca', 'Fresno 1-C', 'Centro', 19, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (23, 'Cruz Elena', 'Rosas ', 'Castorena', '375-105-5600', 'Jalisco', 'Ameca', 'Calle Cedros 7', 'Hacienda El cabezal', 21, 'no', 'no', '');
INSERT INTO `acompanante` VALUES (24, 'Jose Juventino', 'Garcia', 'Becerra', '375-105-5600', 'Jalisco', 'Ameca', 'Cedros 7', 'Hacienda El cabezal', 21, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (25, 'Angelica', 'Nolasco ', 'Malina', '375-102-8277', 'Jalisco', 'Ameca', 'Hacienda del cuis 32', 'Col. providencia', 23, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (28, 'Xochitl Paola ', 'Moya', ' Rodriguez ', '375-107-5100', 'Jalisco', 'Ameca', 'Juan JosÃ© Moya Rea 15 ', 'Rancho Don Martin', 22, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (29, 'Pedro ', 'Parras', 'Sandoval', '375 10 24 62 4 ', 'Jalisco', 'Ameca', 'Calle Salud 112', 'Las victorias', 7, 'si', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (30, 'Luz Veronica', 'Aguayo', 'Mesa', '375 8 3970', 'Jalisco', 'Ameca', 'Valvaneda 56 ', 'Los Angeles', 73, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (31, 'Susana Karina   ', 'Vazquez', 'Espinoza', '386 75 242 83', 'Jalisco', 'Ahualulco', 'Morelos 55', 'San Ignacio ', 27, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (32, 'Laura ', 'GonzÃ¡lez ', 'Montes', '3861047302', 'Jalisco', 'Ahualulco', 'Guadalupe Victoria #190', 'Ahualulco', 37, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (33, 'Priscila Areacely ', 'Arias', 'Arce', '75 20085', 'Jalisco', 'Ahualulco', 'Emilio Carranza 54', 'Centro', 57, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (34, 'MarÃ­a de JesÃºs', 'Esparza ', 'Serrano', '7521139', 'Jalisco', 'Ahualulco de Mercado, Tala', 'Ocampo #174', 'Ahualulco', 30, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (35, 'Teresa', 'Perez', 'Rosales', '0443311544934', 'Jalisco', 'Ahualulco', 'Cristobal Colon 34', 'Centro', 28, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (36, 'Cristina', 'Hernandez', 'Resendiz', '3861047298', 'Jalisco', 'Ahualulco', 'Amado Nervo 105', 'Amado Nervo', 32, 'Ya era', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (37, 'Estefana ', 'Flores ', 'LÃ³pez', 'S/N', 'Jalisco', 'Ahualulco de Mercado, Tala', 'Santa MarÃ­a #54', 'Ahualulco', 33, 'si', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (38, 'Lourdes', 'Gutierrez', 'Medina', '3861058189', 'Jalisco', 'Ahualulco', 'Juan Gil Preciado 20-5', 'La Cienega', 38, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (39, 'Ana Lilia', 'Corona', 'Flores', '386 103 3701', 'Jalisco', 'Ahualulco', 'Santa Maria 54', 'Jardines de Ahualulco', 33, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (40, 'Anahi Alejandra', 'Rubio', 'Tapia', '386 103 0171', 'Jalisco', 'Ahualulco', 'Eucalipto 49-C', 'Las villas', 26, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (41, 'Maria de los Angeles ', 'Alza', 'Rodriguez', '386 109 36 95 ', 'Jalisco', 'Ahualulco', 'Violeta 7', 'La Floresta', 61, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (42, 'Leonel', 'Galeana', 'Salas', '752-2635', 'Jalisco', 'AHUALULCO DE MERCADO', 'Loma bonita 68', 'AHUALULCO DE MERCADO', 56, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (45, 'Graciela', 'Corona', 'Ortiz', '386 106 83 84', 'Jalisco', 'Ahualulco', 'Morelos 186', 'Centro', 31, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (46, 'Maria Guadalupe', 'Rosales', 'Escater', '386 105 5431', 'Jalisco', 'Ahualulco', 'Calle Higuera 45 ', 'Mezquites', 36, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (47, 'Eliza ', 'Diaz', 'Rosales', '7524184', 'Jalisco', 'Ahualulco de Mercado', 'Juarez 1', 'El Carmen', 36, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (48, 'Saul', 'Rodriguez', 'Ibarra', '7524184', 'Jalisco', 'Ahualulco de Mercado', 'Juarez 1', 'El Carmen', 36, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (49, 'Silvia Rocio', 'Hernadez', 'Macias', '3861035021', 'Jalisco', 'Ahualulco de Mercado', 'Gardenia 9', 'La Floresta', 47, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (50, 'Silvia Rocio', 'Hernadez', 'Macias', '3861035021', 'Jalisco', 'Ahualulco de Mercado', 'Gardenia 9', 'La Floresta', 47, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (51, 'Alberto Jorge', 'Sanchez ', 'Ulloa', '75 243 82', 'Jalisco', 'Ahualulco', 'Emilio Portes Gil 53', 'San Ignacio ', 51, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (52, 'Alida Karina', 'Ortiz ', 'Zepeda', '375 106 76 96 ', 'Jalisco', 'Ameca', 'Hacienda de Guadalupe 57 ', 'El porvenir ', 2, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (53, 'Frania Manuela', 'Bernal ', 'Gallegos', '3867524687', 'Jalisco', 'Ahualulco de Mercado, Tala', 'Emiliano Zapata #4', 'Ahualulco', 50, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (54, 'Teresa ', 'Fregoso', 'Perez', '3861060204', 'Jalisco', 'Ahualulco de Mercado, Tala', 'Cedro #1', 'Ahualulco', 49, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (55, 'Sergio', 'Bernal', 'Rodriguez', '3312115157', 'Jalisco', 'Ahualulco de Mercado', '16 de Septiembre 474', 'Ahualulco de Mercado', 46, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (56, 'Delia', 'Rivera', 'Albillo', '', 'Jalisco', 'Ahualulco de Mercado', 'Nicolas Bravo 323', 'Ahualulco de Mercado', 77, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (57, 'Nancy SarahÃ­', 'GuzmÃ¡n', 'Rivera', '3331146534', 'Jalisco', 'Ahualulco de Mercado, Tala', 'Nicolas Brtavo #323 ', 'Ahualulco', 77, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (58, 'Susana Lizbeth', 'Guzman', 'Rivera', '33317017641', 'Jalisco', 'Ahualulco de Mercado', 'Nicolas Bravo 323', 'Ahualulco de Mercado', 77, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (59, 'MarÃ­a ', 'Flores', 'Martinez', '3867521008', 'Jalisco', 'Ahualulco de Mercado', 'Madre Selva 1', 'Ahualulco de Mercado', 40, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (60, 'Beatriz ', 'Madrid', 'Velador', '205 24', 'Jalisco', 'Ahualulco', 'Josefa Ortiz de Dominguez 116 ', 'Las colonias', 44, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (61, 'Ofelia ', 'LÃ³pez', 'Madrigal', '386 75 208 89 ', 'Jalisco', 'Ahualulco', 'Ocampo 72', 'Centro', 44, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (62, 'Ana Lilia', 'Rubio', 'Tapia', '7581202', 'Jalisco', 'Ameca', 'Abasolo 108', 'Ameca', 78, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (63, 'Catalina', 'Roque', 'Aguiar', '7584792', 'Jalisco', 'Ameca', 'JardÃ­n #56 Col. Loz Mezquites', 'Ameca', 70, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (64, 'MarÃ­a Guadalupe', 'Roque', 'Bravo', '7581264', 'Jalisco', 'Ameca', 'Hospital 5', 'Ameca', 70, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (65, 'Reynaldo', '-bueno', 'Rodriguez', '3310115781', 'Jalisco', 'Ahualulco de Mercado', 'Madre Selva 1', 'Ahualulco de Mercado', 40, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (66, 'Griselda ', 'Santos ', 'Fores', '3867521008', 'Jalisco', 'Ahualulco de Mercado, Tala', 'Madre Selva #1', 'Ahualulco', 40, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (67, 'Angel', 'Martinez', 'Lopez', '3717603764', 'Jalisco', 'Ahualulco de Mercado', 'Diaz Ordaz 44', 'Ahualulco de Mercado', 46, 'no', 'si', 'Hombr');
INSERT INTO `acompanante` VALUES (68, 'Maria Erlinda', 'Gonzalez', 'Gonzalez', '----------', 'Jalisco', 'Ahualulco', 'Emiliano Zapata 12', 'Rancho de Teuchiteco ', 54, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (69, 'Veronica', 'Victor ', 'Guerrero', '75 813 53', 'Jalisco', 'Ameca', 'Guadalupe Victoria 13', 'Obrera', 79, 'no', 'si', 'Mujer');
INSERT INTO `acompanante` VALUES (70, 'LucÃ­a ', 'Guerrero', 'Zepeda', '7580353', 'Jalisco', 'Ameca', 'Guadalupe Victoria #13', 'Ameca, Col. Obrera', 79, 'no', 'si', 'Mujer');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `asistencia_a_grupo`
-- 

CREATE TABLE `asistencia_a_grupo` (
  `grupo_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `asistio` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`grupo_id`,`paciente_id`),
  KEY `fk_acompanante_has_grupo_grupo1_idx` (`grupo_id`),
  KEY `fk_asistencia_a_grupo_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `asistencia_a_grupo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `asistencia_acomp_grupo`
-- 

CREATE TABLE `asistencia_acomp_grupo` (
  `acompanante_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `asistio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`acompanante_id`,`grupo_id`),
  KEY `fk_acompanante_has_grupo_grupo2_idx` (`grupo_id`),
  KEY `fk_acompanante_has_grupo_acompanante1_idx` (`acompanante_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `asistencia_acomp_grupo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cita`
-- 

CREATE TABLE `cita` (
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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

-- 
-- Volcar la base de datos para la tabla `cita`
-- 

INSERT INTO `cita` VALUES ('2015-04-11 09:00:00', '2015-04-11 09:59:00', 4, 'si', '206639038', 3, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 10:00:00', '2015-04-10 10:59:00', 5, 'si', '206639038', 8, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 12:00:00', '2015-04-10 12:59:00', 6, 'si', '0058029096798', 1, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-10 10:00:00', '2015-04-10 10:59:00', 7, 'si', '0058029096798', 10, 'E');
INSERT INTO `cita` VALUES ('2015-04-10 10:00:00', '2015-04-10 10:59:00', 8, 'si', 'capturistaGoCoCa', 9, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 15:00:00', '2015-04-10 15:59:00', 9, 'si', '0058029096798', 23, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 15:00:00', '2015-04-10 15:59:00', 10, 'no', '0058029096798', 25, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 09:00:00', '2015-04-11 09:59:00', 11, 'si', '0058029096798', 26, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 12:00:00', '2015-04-10 12:59:00', 12, 'si', '0058029096798', 15, 'E');
INSERT INTO `cita` VALUES ('2015-04-10 12:00:00', '2015-04-10 12:59:00', 13, 'si', '0058029096798', 16, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-10 14:00:00', '2015-04-10 14:59:00', 14, 'si', '0058029096798', 19, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-10 14:00:00', '2015-04-10 14:59:00', 15, 'si', '0058029096798', 21, 'E');
INSERT INTO `cita` VALUES ('2015-04-10 14:00:00', '2015-04-10 14:59:00', 16, 'si', '0058029096798', 4, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 10:00:00', '2015-04-11 10:59:00', 17, 'si', '0058029096798', 33, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-10 15:00:00', '2015-04-10 15:59:00', 18, 'si', '0058029096798', 7, 'E');
INSERT INTO `cita` VALUES ('2015-04-10 14:00:00', '2015-04-10 14:59:00', 19, 'si', 'capturistaGoCoCa', 18, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 12:00:00', '2015-04-10 12:59:00', 20, 'si', '0058029096798', 17, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-10 11:00:00', '2015-04-10 11:59:00', 21, 'si', 'capturistaGoCoCa', 11, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 14:00:00', '2015-04-10 14:59:00', 22, 'si', '0058029096798', 20, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-10 15:00:00', '2015-04-10 15:59:00', 23, 'no', '0058029096798', 24, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 15:00:00', '2015-04-10 15:59:00', 24, 'si', '0058029096798', 22, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-10 11:00:00', '2015-04-10 11:59:00', 25, 'si', 'capturistaGoCoCa', 12, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 11:00:00', '2015-04-10 11:59:00', 26, 'si', 'capturistaGoCoCa', 2, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 09:00:00', '2015-04-11 09:59:00', 27, 'si', '0058029096798', 27, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 09:00:00', '2015-04-11 09:59:00', 28, 'si', '0058029096798', 28, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 09:00:00', '2015-04-11 09:59:00', 29, 'no', '0058029096798', 29, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-10 11:00:00', '2015-04-10 11:59:00', 30, 'si', '0058029096798', 13, 'E');
INSERT INTO `cita` VALUES ('2015-04-10 11:00:00', '2015-04-10 11:59:00', 32, 'si', 'capturistaGoCoCa', 14, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 10:00:00', '2015-04-11 10:59:00', 33, 'si', '0058029096798', 30, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 10:00:00', '2015-04-11 10:59:00', 34, 'si', '0058029096798', 31, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 10:00:00', '2015-04-11 10:59:00', 35, 'si', '0058029096798', 32, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 10:00:00', '2015-04-11 10:59:00', 36, 'no', '0058029096798', 34, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 11:00:00', '2015-04-11 11:59:00', 37, 'si', '0058029096798', 35, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 11:00:00', '2015-04-11 11:59:00', 38, 'si', '0058029096798', 36, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 11:00:00', '2015-04-11 11:59:00', 39, 'si', '0058029096798', 37, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 11:00:00', '2015-04-11 11:59:00', 40, 'si', '0058029096798', 38, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 11:00:00', '2015-04-11 11:59:00', 41, 'si', '0058029096798', 39, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 12:00:00', '2015-04-11 12:59:00', 42, 'si', '0058029096798', 40, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 12:00:00', '2015-04-11 12:59:00', 43, 'no', '0058029096798', 42, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 12:00:00', '2015-04-11 12:59:00', 44, 'no', '0058029096798', 41, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 12:00:00', '2015-04-11 12:59:00', 45, 'si', '0058029096798', 43, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 12:00:00', '2015-04-11 12:59:00', 46, 'si', '0058029096798', 44, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-10 12:00:00', '2015-04-10 12:59:00', 47, 'si', '0058029096798', 5, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-10 10:00:00', '2015-04-10 10:59:00', 48, 'si', 'administradorDeSaEs', 6, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-10 18:00:00', '2015-04-10 18:59:00', 49, 'si', 'administradorCoTaVi', 74, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 08:00:00', '2015-04-11 08:59:00', 50, 'si', '0058029096798', 73, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 14:00:00', '2015-04-11 14:59:00', 51, 'si', '0058029096798', 60, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 17:00:00', '2015-04-11 17:59:00', 52, 'si', 'administradorDeSaEs', 70, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 14:00:00', '2015-04-11 14:59:00', 53, 'si', 'administradorDeSaEs', 61, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 14:00:00', '2015-04-11 14:59:00', 54, 'si', '0058029096798', 56, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 14:00:00', '2015-04-11 14:59:00', 55, 'si', '0058029096798', 47, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 17:20:00', '2015-04-11 18:19:00', 56, 'si', 'administradorCoTaVi', 77, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 14:00:00', '2015-04-11 14:59:00', 57, 'si', '0058029096798', 49, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 17:00:00', '2015-04-11 17:59:00', 58, 'si', 'administradorDeSaEs', 51, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 17:00:00', '2015-04-11 17:59:00', 59, 'si', '0058029096798', 50, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 17:00:00', '2015-04-11 17:59:00', 60, 'no', 'administradorDeSaEs', 52, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 15:00:00', '2015-04-11 15:20:00', 61, 'si', 'administradorCoTaVi', 45, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 18:00:00', '2015-04-11 18:20:00', 62, 'no', '0058029096798', 59, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 18:00:00', '2015-04-11 18:41:00', 63, 'si', 'administradorDeSaEs', 53, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 16:00:00', '2015-04-11 16:20:00', 64, 'no', '0058029096798', 58, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 16:00:00', '2015-04-11 16:20:00', 65, 'no', '0058029096798', 57, 'E3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 15:00:00', '2015-04-11 15:59:00', 67, 'si', 'administradorDeSaEs', 54, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 11:01:00', '2015-04-11 11:21:00', 68, 'si', 'administradorCoTaVi', 46, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 15:00:00', '2015-04-11 15:59:00', 69, 'si', 'administradorDeSaEs', 55, 'E37575816554');
INSERT INTO `cita` VALUES ('2015-04-11 19:00:00', '2015-04-11 19:22:00', 71, 'si', '0058029096798', 78, 'E');
INSERT INTO `cita` VALUES ('2015-04-11 12:30:00', '2015-04-11 12:50:00', 72, 'si', 'administradorCoTaVi', 54, 'E37575816555');
INSERT INTO `cita` VALUES ('2015-04-11 13:00:00', '2015-04-11 13:20:00', 73, 'no', 'administradorCoTaVi', 48, 'KE3757581655');
INSERT INTO `cita` VALUES ('2015-04-11 19:00:00', '2015-04-11 19:20:00', 74, 'si', 'administradorCoTaVi', 79, 'KE3757581655');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `colaborador`
-- 

CREATE TABLE `colaborador` (
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

-- 
-- Volcar la base de datos para la tabla `colaborador`
-- 

INSERT INTO `colaborador` VALUES (1, NULL, 'NoemÃ­', 'GarcÃ­a', 'CalderÃ³n', '3757581655', 'Vallarta 44, colonia centro', '1982-07-25', 26, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (2, NULL, 'Mario Ascencio', 'GarcÃ­a', 'Buenrostro', '3757581655', 'Vallarta 44 A, Colonia Centro, 46600', '1958-05-29', 6, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (3, NULL, 'Mario Joel', 'GarcÃ­a', 'CalderÃ³n', '3334892567', 'Paseo Haciendas Oriente 155, Colonia Francisc', '1985-06-08', 5, 'Jalisco', 'Zapopan', 'Zapopan');
INSERT INTO `colaborador` VALUES (4, NULL, 'Carlos Federico', 'Mendoza', 'PÃ©rez', '3757580956', 'Madero 16', '1959-03-02', 25, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (5, NULL, 'Pedro Daniel', 'Mendoza', 'Flores', '3757580956', 'Madero 16, Colonia Centro 46600', '1984-08-10', 32, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (6, NULL, 'Carlos Eduardo', 'GonzÃ¡lez', 'Contreras', '3751186006', 'JesÃºs Monroy 5 A', '1991-10-15', 7, 'Jalisco', 'Ameca', 'El Arco');
INSERT INTO `colaborador` VALUES (7, NULL, 'Pedro', 'Arreola', 'LÃ³pez', '758-3113', 'Bilbao 165', '1994-07-31', 34, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (8, NULL, 'Juan Alberto', 'HernÃ¡ndez', 'Salazar', '3757587714', 'Obreros 159, Colonia La Cienega', '1997-06-18', 30, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (9, NULL, 'Ana ', 'Bernal', 'LÃ³pez', '375-760-4076', 'Corona 60, Colonia Centro', '1959-07-26', 14, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (10, NULL, 'MarÃ­a de JesÃºs', 'CortÃ©s', 'GarcÃ­a', '758-5254', 'Hda. Teuchitlan 51, Colonia el Porvenir', '1963-09-27', 27, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (11, NULL, 'JosÃ© Angel', 'Cuarenta', 'Corona', '758-5254', 'Hda. Teuchitlan 51, Colonia el Porvenir', '1957-10-02', 30, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (12, NULL, 'JosÃ© Alberto', 'Cuarenta', 'CortÃ©s', '375-760-2040', 'Hacienda de Barcenas 84, Colonia el Porvenir', '1982-03-29', 29, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (13, NULL, 'Micaela Elizabeth', 'Meza', 'Berumen', '375-760-2040', 'Hda. Barcenas 84 ', '1986-09-17', 28, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (14, NULL, 'Juan Carlos', 'Gaeta', 'PeÃ±a', '3751022403', 'Francisco 25, Colonia la Esperanza', '1977-12-08', 7, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (15, NULL, 'Elsa Michell', 'Topete', 'Hunter', '3757563267', '12 de Octubre 85, Colonia Santa Cecilia', '1984-02-01', 32, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (16, NULL, 'Yoana Sarai', 'Topete', 'Hunter', '3751051523', '12 de Octubre 85, Colonia Santa Cecilia', '1987-07-21', 32, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (17, NULL, 'Lynn', 'Stadter', 'EUA', '3757581655', 'EUA', '1935-01-01', 20, 'EUA', 'EUA', 'EUA');
INSERT INTO `colaborador` VALUES (18, NULL, 'Silvia', 'Hicks', 'EUA', '3757581655', 'EUA', '1970-01-01', 38, 'EUA', 'EUA', 'EUA');
INSERT INTO `colaborador` VALUES (19, NULL, 'Eva Maria ', 'Zepeda', 'Jauregi', '753-129-1556', 'HÃ©roes 6', '1962-09-03', 39, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (20, NULL, 'David ', 'GarcÃ­a', 'CalderÃ³n', '3310481032', 'Caoba 203, Fracc. Los Mezquites, ', '1985-04-30', 1, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (21, NULL, 'Marva Esther Marina', 'Antoine', '.', '3757558657', 'Caoba 203, Fracc. Los Mezquites, ', '1985-01-09', 33, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (22, NULL, 'Juana Leticia', 'RodrÃ­guez', 'Solano', '375-75-8-51-12', '2a. de Escobedo 8', '1986-06-24', 14, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (23, NULL, 'Viridiana', 'Colin', 'Tamayo', '(33)15-24-09-65', 'Valle de San Alejo Norte 1316', '1989-11-22', 7, 'Jalisco', 'Tlajomulco de ZuÃ±iga', 'Real del Valle');
INSERT INTO `colaborador` VALUES (24, NULL, 'Esther', 'De La Cruz', 'Santiago', '3751210319', 'Hda. Labor de Solis #4', '1995-11-30', 7, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (25, NULL, '.', '.', '.', '.', '.', '0000-00-00', 14, 'Jalisco', '.', '.');
INSERT INTO `colaborador` VALUES (26, NULL, 'Jose luis ', 'Gomez ', 'Gomez', '758-4635', '5 de frebrero 84', '1948-11-20', 36, 'Jalisco', 'Ameca', 'santa cecilia');
INSERT INTO `colaborador` VALUES (29, NULL, 'Josefina', 'Navarro ', 'Reynoso', '7584635', '5 de Febrero Â·84', '1959-08-01', 14, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (30, NULL, 'Rafael', 'Hernandez', 'Hurtado', '877 14', 'Calle obreros 159', '1968-05-06', 34, 'Jalisco', 'Ameca', 'La Cienega');
INSERT INTO `colaborador` VALUES (31, NULL, 'Rodrigo', 'Rosete', 'Navarro', '877 14', 'Cardenal JosÃ© Salazar #24', '1997-06-18', 35, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (32, NULL, 'Stephanie Aleli', 'Martines ', 'Roque', '331664845', 'Jardin 56', '1992-01-06', 33, 'Jalisco', 'Ameca', 'Los mesquitez');
INSERT INTO `colaborador` VALUES (35, NULL, 'Josue Roberto', 'Gaeta', 'Ponce', '375 102 24 03', 'Francisco Villa 25', '1999-11-23', 30, 'Jalisco', 'Ameca', 'La Esperanza');
INSERT INTO `colaborador` VALUES (36, NULL, 'Daniel ', 'Hernandez', 'Vargas', '449 109 45 04', 'Avenida Santa Monica 201-1', '1988-11-11', 14, 'Aguascalientes', 'Aguscalientes', 'Providencia');
INSERT INTO `colaborador` VALUES (37, NULL, 'Karla Sarhi', 'Curiel ', 'Cruz', '7584773', 'san isidro 101', '1992-07-18', 33, 'Jalisco', 'Ameca', 'San Isidro');
INSERT INTO `colaborador` VALUES (40, NULL, 'Oscar ', 'Garcia', 'Membrillo', '(33) 36 32 13 84', 'Sierra de Quila 1740', '1968-01-05', 14, 'Jalisco', 'Zapopan', 'Las Aguilas');
INSERT INTO `colaborador` VALUES (41, NULL, 'Miguel', 'Diaz', 'Villalobos', '375-113-2954', 'azucareros 3', '1969-11-02', 36, 'Jalisco', 'Ameca', 'la Reina');
INSERT INTO `colaborador` VALUES (44, NULL, 'Manuela ', 'Aguilar ', 'Valdez', '(33) 36 32 13 84', 'Sierra de Quila 1740', '1965-04-09', 14, 'Jalisco', 'Zapopan', 'Las Aguilas');
INSERT INTO `colaborador` VALUES (45, NULL, 'Jael ', 'Garcia ', 'Aguilar', '(33) 36 32 13 84', 'Sierra de Quila 1740', '1995-11-30', 20, 'Jalisco', 'Zapopan', 'Las Aguilas');
INSERT INTO `colaborador` VALUES (46, NULL, 'Priscila ', 'Garcia', 'Aguilar', '(33) 36 32 13 84', 'Sierra de Quila 1740', '1998-05-20', 20, 'Jalisco', 'Zapopan', 'Las Aguilas');
INSERT INTO `colaborador` VALUES (47, NULL, 'Caleb', 'Garcia ', 'Aguilar', '(33) 36 32 13 84', 'Sierra de Quila 1740', '2002-01-01', 34, 'Jalisco', 'Zapopan', 'Las Aguilas');
INSERT INTO `colaborador` VALUES (48, NULL, 'Pedro Gerardo', 'Pacheco', 'Berrueco', '375 107 32 67', 'Hospital 121', '1992-11-23', 34, 'Jalisco', 'Ameca', 'La Cienega');
INSERT INTO `colaborador` VALUES (49, NULL, 'Raul', 'Moreno', 'Valenzuela', '4492049242', 'Avenida Aguacaliente #805', '1988-07-19', 32, 'Aguascalientes', 'Aguscalientes', 'Aguascalientes');
INSERT INTO `colaborador` VALUES (50, NULL, 'Ilse Pamela', 'Hernandez', 'Bargas', '449-113-3311', 'Avenida santamonica 201-I', '1992-08-27', 20, 'Aguascalientes', 'Aguascalientes', 'fraccionamiento providencia');
INSERT INTO `colaborador` VALUES (53, NULL, 'Norma', 'Salazar', 'LÃ³pez', '7587714', 'Obrero 159 ', '1974-08-04', 30, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (54, NULL, 'Sivia ', 'Colima', 'Ramos', '755-3178', 'Clemente roldan 135', '1972-01-23', 27, 'Jalisco', 'Ameca', 'NiÃ±os herues');
INSERT INTO `colaborador` VALUES (57, NULL, 'Claudia', 'Zepeda', 'Tapia', '7583461', 'Antonio de Leiva #131', '1978-11-18', 11, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (58, NULL, 'Maria Margarita', 'Calderon', 'Godinez', '375 75 8 16 55', 'Vallarta 44, Colonia Centro', '1954-10-17', 6, 'Jalisco', 'Ameca', 'Centro');
INSERT INTO `colaborador` VALUES (59, NULL, 'Maria Esther ', 'Calderon', 'Godinez', '3317437246', 'Pendiente', '1955-11-13', 4, 'Jalisco', 'Tonala', 'Pendiente');
INSERT INTO `colaborador` VALUES (60, NULL, 'Javier Arturo', 'Curiel ', 'Caro', '7584773', 'San Isidro #101', '1959-12-15', 14, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (61, NULL, 'Imelda', 'Cuevas', 'Corona', '013847380294', 'Donato Guerra #46', '1967-09-24', 30, 'Jalisco', 'Tala', 'Tala');
INSERT INTO `colaborador` VALUES (62, NULL, 'Gabriel Alejandro', 'Acero', 'Vargas', '3332706055', 'Avenida San Antonio 201 INT:57', '1988-04-03', 32, 'Aguascalientes', 'Aguscalientes', 'Santa Monica');
INSERT INTO `colaborador` VALUES (63, NULL, 'Erick Jorge Roberto', 'Guerrero', 'MuÃ±oz', '3861008714', 'Ernesto Lumbreras Bautista #2', '1991-02-02', 7, 'Jalisco', 'Ahualulco', 'Ahualulco');
INSERT INTO `colaborador` VALUES (64, NULL, 'Lorena ', 'Rodriguez', 'MuÃ±oz', '0443312523384', 'Avenida Beethoven 5072 La estancia', '1983-07-22', 20, 'Jalisco', 'Guadalajara', 'La estancia');
INSERT INTO `colaborador` VALUES (65, NULL, 'Genessis', 'Hernandez', 'Salazar', '3757587714', 'Obreros 159 ', '1993-04-07', 20, 'Jalisco', 'Ameca', 'Ameca');
INSERT INTO `colaborador` VALUES (66, NULL, 'Jim', 'Christian', '.', '9999999999', 'EUA', '1943-01-09', 40, 'EUA', 'EUA', 'EUA');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `contacto`
-- 

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(145) DEFAULT NULL,
  `tel_casa` varchar(45) DEFAULT NULL,
  `tel_celular` varchar(45) DEFAULT NULL,
  `iglesia_cristiana_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contacto_iglesia_cristiana1_idx` (`iglesia_cristiana_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

-- 
-- Volcar la base de datos para la tabla `contacto`
-- 

INSERT INTO `contacto` VALUES (1, 'Sin contacto', 'n/a', 'n/a', 1);
INSERT INTO `contacto` VALUES (2, 'ALMA DELIA CAMPA LIZAOLA', '3757582618', '013757553291', 1);
INSERT INTO `contacto` VALUES (3, 'Rodolfo Candelario Zepeda Rodriguez', '', '0443751064711', 3);
INSERT INTO `contacto` VALUES (4, 'ANGELICA ALBANIA RODRIGUEZ MEDINA', '', '3751037781', 1);
INSERT INTO `contacto` VALUES (5, 'JosÃ© Manuel Medina Solano', '3757587242', '3757568649', 10);
INSERT INTO `contacto` VALUES (6, 'Mario Ascencio Garcia Buenrostro', '3757581655', '', 1);
INSERT INTO `contacto` VALUES (7, 'NoemÃ­ GarcÃ­a CalderÃ³n ', '375-758-1655', '3334986163', 1);
INSERT INTO `contacto` VALUES (8, 'Imelda Cuevas Corona', '384-738-0294', '33331981969', 12);
INSERT INTO `contacto` VALUES (9, 'Ernesto Orozco GonzÃ¡lez ', '375-758-1655', 'No tiene', 1);
INSERT INTO `contacto` VALUES (10, 'Silva LÃ³pez Romero ', 'No tiene', '375-101-6123', 2);
INSERT INTO `contacto` VALUES (11, 'Imelda Chavarin GÃ³mez', '', '375-102-8775', 6);
INSERT INTO `contacto` VALUES (12, 'Santos Navarro Figueroa', '375-758-7289', '', 10);
INSERT INTO `contacto` VALUES (13, 'Elena Guadalupe Ayala Aguilar', '', '375-118-3550', 4);
INSERT INTO `contacto` VALUES (14, 'Soledad Olvera Valencia', 'No tiene', '', 1);
INSERT INTO `contacto` VALUES (15, 'Teresa de JesÃºs Flores Uribe', '', '375-114-0403', 10);
INSERT INTO `contacto` VALUES (16, 'MarÃ­a Refugio Rico Fuentes', '3313224284', '', 4);
INSERT INTO `contacto` VALUES (17, 'Alma Delia Mora GÃ³mez', '', '3751083440', 6);
INSERT INTO `contacto` VALUES (18, 'Irma Bravo Ramos', '', '375-751-1812', 1);
INSERT INTO `contacto` VALUES (20, 'ANGELICA ALBANIA RODRIGUEZ MEDINA', '', '3751037781', 1);
INSERT INTO `contacto` VALUES (21, 'Lucia Ramos Mariscal', '375-758-0036', '', 8);
INSERT INTO `contacto` VALUES (22, 'AngÃ©lica Albania RodrÃ­guez Medina', '', '375-103-77-81', 1);
INSERT INTO `contacto` VALUES (23, 'Rosa Bernal RodrÃ­guez', '331-928-0897', '', 1);
INSERT INTO `contacto` VALUES (24, 'AarÃ³n DÃ­az', '3336089969', '3331287579', 1);
INSERT INTO `contacto` VALUES (25, 'Mario Ascencio Garcia Buenrostro', '3757581655', '', 1);
INSERT INTO `contacto` VALUES (26, 'Juana Leticia Rodriguez Solano', '', '', 1);
INSERT INTO `contacto` VALUES (27, 'JAVIER ARTURO CURIEL CARO', '758-47-73', '375-111-6881', 7);
INSERT INTO `contacto` VALUES (29, 'MARIA DEL CONSUELO AYON GARIBAY', '386-75-70-608', '386-103-84-82', 13);
INSERT INTO `contacto` VALUES (30, 'JUAN CARLOS GIL AGUILAR', '3867570088', '3861042668', 1);
INSERT INTO `contacto` VALUES (32, 'J. JESUS LIBERATO RAMIREZ ZARATE', '', '375-105-4571', 1);
INSERT INTO `contacto` VALUES (33, 'SAGRARIO HERNANDEZ CARRILLO', '386-75-201-75', '', 15);
INSERT INTO `contacto` VALUES (34, 'RUTH NOEMI HERNANDEZ MEZA', '386-75-403-94', '', 16);
INSERT INTO `contacto` VALUES (35, 'PAOLA VANESSA GONZALEZ ROSAS', '374-74-263', '', 17);
INSERT INTO `contacto` VALUES (36, 'MICAELA MEZA BERUMEN', '013751039955', '375-125-43', 1);
INSERT INTO `contacto` VALUES (37, 'ESTHER DE LA CRUZ SANTIAGO', '013751039955', '3751210319', 1);
INSERT INTO `contacto` VALUES (38, 'MARIA DE LOURDES GONZALEZ BERNAL', '375-75-815-71', '013751039955', 1);
INSERT INTO `contacto` VALUES (39, 'SERGIO REYNOSO NUÃ‘EZ', '7525838', '', 18);
INSERT INTO `contacto` VALUES (40, 'CARMEN CELINA SERRANO VALLEJO', '7384324', '', 19);
INSERT INTO `contacto` VALUES (41, 'DIF HOSTOTIPAQUILLO', '.', '', 20);
INSERT INTO `contacto` VALUES (42, 'VIDALIA TORRES', '374-745-1213', '', 21);
INSERT INTO `contacto` VALUES (43, 'ROSA IMELDA CUEVAS CORONA', '3847380294', '3331981969', 12);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `diagnostico`
-- 

CREATE TABLE `diagnostico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

-- 
-- Volcar la base de datos para la tabla `diagnostico`
-- 

INSERT INTO `diagnostico` VALUES (1, 'DiagnÃ³stico temporal');
INSERT INTO `diagnostico` VALUES (2, 'AmputaciÃ³n Miembro Pelvico');
INSERT INTO `diagnostico` VALUES (3, 'Artritis Reumatoide/Enf. Parkinson ');
INSERT INTO `diagnostico` VALUES (4, 'Fractura de Cadera');
INSERT INTO `diagnostico` VALUES (5, 'LesiÃ³n Medular- Paraplejia');
INSERT INTO `diagnostico` VALUES (6, 'Tumor Cerebral');
INSERT INTO `diagnostico` VALUES (7, 'Artritis Reumatoide Degenerativa');
INSERT INTO `diagnostico` VALUES (8, 'Secuelas Poliomelitis');
INSERT INTO `diagnostico` VALUES (9, 'AmputaciÃ³n Miembro Inferior');
INSERT INTO `diagnostico` VALUES (10, 'ParÃ¡lisis Cerebral Infantil');
INSERT INTO `diagnostico` VALUES (11, 'Fractura Tobillo(s)');
INSERT INTO `diagnostico` VALUES (12, 'AmputaciÃ³n de un Miembro Inferior y un Superior');
INSERT INTO `diagnostico` VALUES (13, 'Insuficiencia Renal CrÃ³nica con HemodiÃ¡lisis');
INSERT INTO `diagnostico` VALUES (14, 'Aplastamiento de Vertebras');
INSERT INTO `diagnostico` VALUES (15, 'Secuelas de Evento Vascular Cerebral');
INSERT INTO `diagnostico` VALUES (16, 'Enfermedad de Parkinson/DM/HAS');
INSERT INTO `diagnostico` VALUES (17, 'Ceguera/CÃ¡ncer de PrÃ³stata');
INSERT INTO `diagnostico` VALUES (18, 'Dificultad para la marcha');
INSERT INTO `diagnostico` VALUES (19, 'PrÃ³tesis de Cadera/Artritis Reumatoide');
INSERT INTO `diagnostico` VALUES (20, 'Osteoartrosis');
INSERT INTO `diagnostico` VALUES (21, 'Enfermedad Pulmonar Obstructiva CrÃ³nica/D.M/H.A.S.');
INSERT INTO `diagnostico` VALUES (22, 'Senilidad');
INSERT INTO `diagnostico` VALUES (23, 'Secuelas de Traumatismo CrÃ¡neo-EncefÃ¡lico');
INSERT INTO `diagnostico` VALUES (24, 'Retraso en Desarrollo Psicomotor ');
INSERT INTO `diagnostico` VALUES (25, 'Mielomeningocele');
INSERT INTO `diagnostico` VALUES (26, 'Secuelas de Fractura');
INSERT INTO `diagnostico` VALUES (27, 'Enfermedad de Parkinson');
INSERT INTO `diagnostico` VALUES (28, 'Discapacidad Mental');
INSERT INTO `diagnostico` VALUES (29, 'Reposo prolongado');
INSERT INTO `diagnostico` VALUES (30, 'Hemipleljia');
INSERT INTO `diagnostico` VALUES (31, 'Gonartrosis severa');
INSERT INTO `diagnostico` VALUES (32, 'Ceguera');
INSERT INTO `diagnostico` VALUES (33, 'OperaciÃ³n de Rodilla');
INSERT INTO `diagnostico` VALUES (34, 'Edad Avanzada');
INSERT INTO `diagnostico` VALUES (35, 'Hipertenso');
INSERT INTO `diagnostico` VALUES (36, 'Secuelas ParÃ¡lisis Cerebral Infantil');
INSERT INTO `diagnostico` VALUES (37, 'Distrofia muscular ');
INSERT INTO `diagnostico` VALUES (38, 'Esguince Tobillo');
INSERT INTO `diagnostico` VALUES (39, 'Fractura de Tibia y PeronÃ©');
INSERT INTO `diagnostico` VALUES (40, 'Rotura de tendones-cuadrises-roctula-meÃ±iscos');
INSERT INTO `diagnostico` VALUES (41, 'Esclerosis MÃºltiple Lateral');
INSERT INTO `diagnostico` VALUES (42, 'ParÃ¡lisis Miembros Inferiores');
INSERT INTO `diagnostico` VALUES (43, 'Traumatismo Craneoensefalico');
INSERT INTO `diagnostico` VALUES (44, 'LesiÃ³n de Cadera y Rodillas Desgastadas');
INSERT INTO `diagnostico` VALUES (45, 'Fractura de Columna Cervical');
INSERT INTO `diagnostico` VALUES (46, 'Polio y CirugÃ­a de la Rodilla');
INSERT INTO `diagnostico` VALUES (47, 'Ulceras Varicosas en Pierna');
INSERT INTO `diagnostico` VALUES (48, 'Hiperuricemia');
INSERT INTO `diagnostico` VALUES (49, 'SÃ­ndrome GuillÃ¡n Barre');
INSERT INTO `diagnostico` VALUES (50, 'Derrame Cerebral');
INSERT INTO `diagnostico` VALUES (51, 'Hernia de Disco');
INSERT INTO `diagnostico` VALUES (52, 'Cuadraplegia ');
INSERT INTO `diagnostico` VALUES (53, 'Hidrocefalia / Ceguera');
INSERT INTO `diagnostico` VALUES (54, 'Desgaste de Cartilago');
INSERT INTO `diagnostico` VALUES (55, 'ESPINA BIFIDA');
INSERT INTO `diagnostico` VALUES (56, 'Placa en Cadera y Herpes');
INSERT INTO `diagnostico` VALUES (57, 'Embolia');
INSERT INTO `diagnostico` VALUES (58, 'Osteoporosis');
INSERT INTO `diagnostico` VALUES (59, 'Trombosis');
INSERT INTO `diagnostico` VALUES (60, 'Arritmia Cardiaca');
INSERT INTO `diagnostico` VALUES (61, 'Poliomelitis');
INSERT INTO `diagnostico` VALUES (62, 'DaÃ±o en Columna Vertebral');
INSERT INTO `diagnostico` VALUES (63, 'Lupus');
INSERT INTO `diagnostico` VALUES (64, 'Hidrocefalia  ');
INSERT INTO `diagnostico` VALUES (65, 'Astillado Hueso de Cadera');
INSERT INTO `diagnostico` VALUES (66, 'Nervio Ciatico');
INSERT INTO `diagnostico` VALUES (67, 'Meringitis');
INSERT INTO `diagnostico` VALUES (68, 'LesiÃ³n en Columna');
INSERT INTO `diagnostico` VALUES (69, 'CompresiÃ³n de Canal Medular');
INSERT INTO `diagnostico` VALUES (70, 'SÃ­ndrome de Down');
INSERT INTO `diagnostico` VALUES (71, 'Insuficiencia Cardiaca');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `difusion`
-- 

CREATE TABLE `difusion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `difusion`
-- 

INSERT INTO `difusion` VALUES (1, 'radio');
INSERT INTO `difusion` VALUES (2, 'iglesia');
INSERT INTO `difusion` VALUES (3, 'Una persona');
INSERT INTO `difusion` VALUES (4, 'Presidencia Ahualulco');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `equipo`
-- 

CREATE TABLE `equipo` (
  `idequipo` varchar(50) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `anio` varchar(5) NOT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `alto` varchar(45) DEFAULT NULL,
  `ancho` varchar(45) DEFAULT NULL,
  `profundo` varchar(45) DEFAULT NULL,
  `tipo_equipo_idtipo_equipo` varchar(10) NOT NULL,
  PRIMARY KEY (`idequipo`,`tipo_equipo_idtipo_equipo`),
  KEY `fk_equipo_tipo_equipo1_idx` (`tipo_equipo_idtipo_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `equipo`
-- 

INSERT INTO `equipo` VALUES ('Andador1', 'Andador-1', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador10', 'Andador-10', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador11', 'Andador-11', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador12', 'Andador-12', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador13', 'Andador-13', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador14', 'Andador-14', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador15', 'Andador-15', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador16', 'Andador-16', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador17', 'Andador-17', '2015', 'disponible', '.', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador18', 'Andador-18', '2015', 'prestado', '.', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador19', 'Andador-19', '2015', 'prestado', ',', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador2', 'Andador-2', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador20', 'Andador-20', '2015', 'prestado', '.', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador21', 'Andador-21', '2015', 'disponible', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador22', 'Andador-22', '2014', 'disponible', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador3', 'Andador-3', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador4', 'Andador-4', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador5', 'Andador-5', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador6', 'Andador-6', '2015', 'prestado', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador7', 'Andador-7', '2015', 'disponible', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador8', 'Andador-8', '2015', 'disponible', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('Andador9', 'Andador-9', '2015', 'disponible', '', '', '', '', 'Andador');
INSERT INTO `equipo` VALUES ('BastÃ³n1', 'BastÃ³n-1', '2015', 'prestado', '', '', '', '', 'BastÃ³n');
INSERT INTO `equipo` VALUES ('Bibblia1', 'Bibblia-1', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia10', 'Bibblia-10', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia11', 'Bibblia-11', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia12', 'Bibblia-12', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia13', 'Bibblia-13', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia14', 'Bibblia-14', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia15', 'Bibblia-15', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia16', 'Bibblia-16', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia17', 'Bibblia-17', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia18', 'Bibblia-18', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia19', 'Bibblia-19', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia2', 'Bibblia-2', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia20', 'Bibblia-20', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia21', 'Bibblia-21', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia22', 'Bibblia-22', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia23', 'Bibblia-23', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia24', 'Bibblia-24', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia25', 'Bibblia-25', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia26', 'Bibblia-26', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia27', 'Bibblia-27', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia28', 'Bibblia-28', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia29', 'Bibblia-29', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia3', 'Bibblia-3', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia30', 'Bibblia-30', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia31', 'Bibblia-31', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia32', 'Bibblia-32', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia33', 'Bibblia-33', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia34', 'Bibblia-34', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia35', 'Bibblia-35', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia36', 'Bibblia-36', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia37', 'Bibblia-37', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia38', 'Bibblia-38', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia39', 'Bibblia-39', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia4', 'Bibblia-4', '2015', 'prestado', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia40', 'Bibblia-40', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia41', 'Bibblia-41', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia42', 'Bibblia-42', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia43', 'Bibblia-43', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia44', 'Bibblia-44', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia45', 'Bibblia-45', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia46', 'Bibblia-46', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia47', 'Bibblia-47', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia48', 'Bibblia-48', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia5', 'Bibblia-5', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia6', 'Bibblia-6', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia7', 'Bibblia-7', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia8', 'Bibblia-8', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('Bibblia9', 'Bibblia-9', '2015', 'disponible', '', '', '', '', 'Bibblia');
INSERT INTO `equipo` VALUES ('LibJoni1', 'LibJoni-1', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni10', 'LibJoni-10', '2015', '', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni11', 'LibJoni-11', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni12', 'LibJoni-12', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni13', 'LibJoni-13', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni14', 'LibJoni-14', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni15', 'LibJoni-15', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni16', 'LibJoni-16', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni17', 'LibJoni-17', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni18', 'LibJoni-18', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni19', 'LibJoni-19', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni2', 'LibJoni-2', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni20', 'LibJoni-20', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni21', 'LibJoni-21', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni22', 'LibJoni-22', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni23', 'LibJoni-23', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni24', 'LibJoni-24', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni25', 'LibJoni-25', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni26', 'LibJoni-26', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni27', 'LibJoni-27', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni28', 'LibJoni-28', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni29', 'LibJoni-29', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni3', 'LibJoni-3', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni30', 'LibJoni-30', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni31', 'LibJoni-31', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni32', 'LibJoni-32', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni33', 'LibJoni-33', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni34', 'LibJoni-34', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni35', 'LibJoni-35', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni36', 'LibJoni-36', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni37', 'LibJoni-37', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni38', 'LibJoni-38', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni39', 'LibJoni-39', '2015', 'prestado', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni4', 'LibJoni-4', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni40', 'LibJoni-40', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni41', 'LibJoni-41', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni42', 'LibJoni-42', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni43', 'LibJoni-43', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni44', 'LibJoni-44', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni45', 'LibJoni-45', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni46', 'LibJoni-46', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni47', 'LibJoni-47', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni48', 'LibJoni-48', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni49', 'LibJoni-49', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni5', 'LibJoni-5', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni50', 'LibJoni-50', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni51', 'LibJoni-51', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni52', 'LibJoni-52', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni53', 'LibJoni-53', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni54', 'LibJoni-54', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni55', 'LibJoni-55', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni56', 'LibJoni-56', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni57', 'LibJoni-57', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni58', 'LibJoni-58', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni59', 'LibJoni-59', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni6', 'LibJoni-6', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni60', 'LibJoni-60', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni61', 'LibJoni-61', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni62', 'LibJoni-62', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni63', 'LibJoni-63', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni64', 'LibJoni-64', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni65', 'LibJoni-65', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni66', 'LibJoni-66', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni67', 'LibJoni-67', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni68', 'LibJoni-68', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni69', 'LibJoni-69', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni7', 'LibJoni-7', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni70', 'LibJoni-70', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni71', 'LibJoni-71', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni72', 'LibJoni-72', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni73', 'LibJoni-73', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni74', 'LibJoni-74', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni75', 'LibJoni-75', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni76', 'LibJoni-76', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni77', 'LibJoni-77', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni8', 'LibJoni-8', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('LibJoni9', 'LibJoni-9', '2015', 'disponible', '', '', '', '', 'LibJoni');
INSERT INTO `equipo` VALUES ('Mul1', 'Mul-1', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul10', 'Mul-10', '2015', 'prestado', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul11', 'Mul-11', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul12', 'Mul-12', '2015', 'prestado', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul13', 'Mul-13', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul14', 'Mul-14', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul15', 'Mul-15', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul16', 'Mul-16', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul17', 'Mul-17', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul18', 'Mul-18', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul19', 'Mul-19', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul2', 'Mul-2', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul20', 'Mul-20', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul21', 'Mul-21', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul22', 'Mul-22', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul23', 'Mul-23', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul24', 'Mul-24', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul25', 'Mul-25', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul26', 'Mul-26', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul27', 'Mul-27', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul28', 'Mul-28', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul29', 'Mul-29', '2014', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul3', 'Mul-3', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul30', 'Mul-30', '2014', 'prestado', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul31', 'Mul-31', '2014', 'prestado', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul4', 'Mul-4', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul5', 'Mul-5', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul6', 'Mul-6', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul7', 'Mul-7', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul8', 'Mul-8', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Mul9', 'Mul-9', '2015', 'disponible', '', '', '', '', 'Mul');
INSERT INTO `equipo` VALUES ('Silndar1', 'Silndar-1', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar10', 'Silndar-10', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar11', 'Silndar-11', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar12', 'Silndar-12', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar13', 'Silndar-13', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar14', 'Silndar-14', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar15', 'Silndar-15', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar16', 'Silndar-16', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar17', 'Silndar-17', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar18', 'Silndar-18', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar19', 'Silndar-19', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar2', 'Silndar-2', '2014', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar20', 'Silndar-20', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar21', 'Silndar-21', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar22', 'Silndar-22', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar23', 'Silndar-23', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar24', 'Silndar-24', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar25', 'Silndar-25', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar26', 'Silndar-26', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar27', 'Silndar-27', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar28', 'Silndar-28', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar29', 'Silndar-29', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar3', 'Silndar-3', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar30', 'Silndar-30', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar31', 'Silndar-31', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar32', 'Silndar-32', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar33', 'Silndar-33', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar34', 'Silndar-34', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar35', 'Silndar-35', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar36', 'Silndar-36', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar37', 'Silndar-37', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar38', 'Silndar-38', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar39', 'Silndar-39', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar4', 'Silndar-4', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar40', 'Silndar-40', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar41', 'Silndar-41', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar42', 'Silndar-42', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar43', 'Silndar-43', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar44', 'Silndar-44', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar45', 'Silndar-45', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar46', 'Silndar-46', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar47', 'Silndar-47', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar48', 'Silndar-48', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar49', 'Silndar-49', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar5', 'Silndar-5', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar50', 'Silndar-50', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar51', 'Silndar-51', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar52', 'Silndar-52', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar53', 'Silndar-53', '2015', 'prestado', 'ES DONADA', '47', '42', '47', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar6', 'Silndar-6', '2015', 'disponible', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar7', 'Silndar-7', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar8', 'Silndar-8', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silndar9', 'Silndar-9', '2015', 'prestado', '', '', '', '', 'Silndar');
INSERT INTO `equipo` VALUES ('Silrica1', 'Silrica-1', '2015', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica10', 'Silrica-10', '2015', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica11', 'Silrica-11', '2015', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica12', 'Silrica-12', '2014', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica13', 'Silrica-13', '2015', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica2', 'Silrica-2', '2014', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica3', 'Silrica-3', '2015', 'prestado', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica4', 'Silrica-4', '2015', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica5', 'Silrica-5', '2015', 'prestado', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica6', 'Silrica-6', '2015', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica7', 'Silrica-7', '2015', 'disponible', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica8', 'Silrica-8', '2015', 'prestado', '', '', '', '', 'Silrica');
INSERT INTO `equipo` VALUES ('Silrica9', 'Silrica-9', '2015', 'disponible', '', '', '', '', 'Silrica');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `equipo_prestamo`
-- 

CREATE TABLE `equipo_prestamo` (
  `equipo_idequipo` varchar(50) NOT NULL,
  `prestamo_id_prestamo` int(11) NOT NULL,
  PRIMARY KEY (`equipo_idequipo`,`prestamo_id_prestamo`),
  KEY `fk_equipo_has_prestamo_prestamo1_idx` (`prestamo_id_prestamo`),
  KEY `fk_equipo_has_prestamo_equipo1_idx` (`equipo_idequipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `equipo_prestamo`
-- 

INSERT INTO `equipo_prestamo` VALUES ('LibJoni14', 1);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni1', 2);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni11', 3);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia1', 4);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia10', 7);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia11', 8);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni12', 9);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia12', 10);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia13', 11);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni13', 12);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni12', 13);
INSERT INTO `equipo_prestamo` VALUES ('Silndar14', 13);
INSERT INTO `equipo_prestamo` VALUES ('Silndar1', 15);
INSERT INTO `equipo_prestamo` VALUES ('Silrica1', 16);
INSERT INTO `equipo_prestamo` VALUES ('Silndar18', 17);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia14', 18);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni15', 18);
INSERT INTO `equipo_prestamo` VALUES ('Silndar3', 18);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni16', 19);
INSERT INTO `equipo_prestamo` VALUES ('Silrica5', 19);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni17', 20);
INSERT INTO `equipo_prestamo` VALUES ('Silndar33', 20);
INSERT INTO `equipo_prestamo` VALUES ('Silndar32', 21);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni18', 22);
INSERT INTO `equipo_prestamo` VALUES ('Silndar8', 22);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni2', 23);
INSERT INTO `equipo_prestamo` VALUES ('Silndar22', 23);
INSERT INTO `equipo_prestamo` VALUES ('Silndar23', 24);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni19', 25);
INSERT INTO `equipo_prestamo` VALUES ('Silndar34', 25);
INSERT INTO `equipo_prestamo` VALUES ('Silndar10', 26);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni3', 27);
INSERT INTO `equipo_prestamo` VALUES ('Silrica3', 27);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia2', 31);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni20', 31);
INSERT INTO `equipo_prestamo` VALUES ('Silndar5', 31);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia15', 34);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni21', 35);
INSERT INTO `equipo_prestamo` VALUES ('Silndar16', 35);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni21', 36);
INSERT INTO `equipo_prestamo` VALUES ('Silndar24', 36);
INSERT INTO `equipo_prestamo` VALUES ('Silndar4', 37);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia16', 38);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni19', 41);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia17', 42);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni22', 42);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni23', 43);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni24', 44);
INSERT INTO `equipo_prestamo` VALUES ('Silndar11', 44);
INSERT INTO `equipo_prestamo` VALUES ('Andador12', 47);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia18', 48);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni25', 48);
INSERT INTO `equipo_prestamo` VALUES ('Silndar21', 48);
INSERT INTO `equipo_prestamo` VALUES ('Silndar37', 49);
INSERT INTO `equipo_prestamo` VALUES ('Silndar12', 50);
INSERT INTO `equipo_prestamo` VALUES ('Silndar36', 51);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia19', 52);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni36', 52);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia20', 53);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni26', 53);
INSERT INTO `equipo_prestamo` VALUES ('Silrica8', 54);
INSERT INTO `equipo_prestamo` VALUES ('Silndar9', 55);
INSERT INTO `equipo_prestamo` VALUES ('Andador2', 56);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni27', 56);
INSERT INTO `equipo_prestamo` VALUES ('Silndar26', 56);
INSERT INTO `equipo_prestamo` VALUES ('Andador19', 57);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia21', 57);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni28', 57);
INSERT INTO `equipo_prestamo` VALUES ('Andador6', 58);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia22', 58);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni29', 58);
INSERT INTO `equipo_prestamo` VALUES ('Andador1', 59);
INSERT INTO `equipo_prestamo` VALUES ('Andador20', 60);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia23', 60);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni30', 60);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia24', 61);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni31', 61);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia25', 62);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia14', 63);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni34', 63);
INSERT INTO `equipo_prestamo` VALUES ('Mul31', 63);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia26', 65);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni15', 65);
INSERT INTO `equipo_prestamo` VALUES ('Mul12', 65);
INSERT INTO `equipo_prestamo` VALUES ('Andador14', 66);
INSERT INTO `equipo_prestamo` VALUES ('Andador5', 67);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia26', 67);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni32', 67);
INSERT INTO `equipo_prestamo` VALUES ('BastÃ³n1', 68);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni33', 68);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia27', 69);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni35', 69);
INSERT INTO `equipo_prestamo` VALUES ('Silndar27', 69);
INSERT INTO `equipo_prestamo` VALUES ('Silndar13', 73);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia28', 76);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni37', 76);
INSERT INTO `equipo_prestamo` VALUES ('Silndar45', 76);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia29', 79);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni38', 79);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia3', 82);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni39', 82);
INSERT INTO `equipo_prestamo` VALUES ('Silndar31', 82);
INSERT INTO `equipo_prestamo` VALUES ('Silndar49', 83);
INSERT INTO `equipo_prestamo` VALUES ('Silndar43', 84);
INSERT INTO `equipo_prestamo` VALUES ('Silndar2', 85);
INSERT INTO `equipo_prestamo` VALUES ('Silndar41', 86);
INSERT INTO `equipo_prestamo` VALUES ('Silndar51', 87);
INSERT INTO `equipo_prestamo` VALUES ('Silndar29', 88);
INSERT INTO `equipo_prestamo` VALUES ('Silndar17', 89);
INSERT INTO `equipo_prestamo` VALUES ('Silndar52', 90);
INSERT INTO `equipo_prestamo` VALUES ('Andador3', 91);
INSERT INTO `equipo_prestamo` VALUES ('Andador10', 92);
INSERT INTO `equipo_prestamo` VALUES ('Andador15', 93);
INSERT INTO `equipo_prestamo` VALUES ('Andador16', 94);
INSERT INTO `equipo_prestamo` VALUES ('Andador11', 95);
INSERT INTO `equipo_prestamo` VALUES ('Andador18', 96);
INSERT INTO `equipo_prestamo` VALUES ('Silndar53', 98);
INSERT INTO `equipo_prestamo` VALUES ('Andador13', 99);
INSERT INTO `equipo_prestamo` VALUES ('BastÃ³n1', 100);
INSERT INTO `equipo_prestamo` VALUES ('Silndar47', 101);
INSERT INTO `equipo_prestamo` VALUES ('Silndar7', 102);
INSERT INTO `equipo_prestamo` VALUES ('Mul17', 104);
INSERT INTO `equipo_prestamo` VALUES ('Andador4', 105);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia4', 106);
INSERT INTO `equipo_prestamo` VALUES ('Mul17', 108);
INSERT INTO `equipo_prestamo` VALUES ('Silndar38', 109);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia30', 110);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia31', 111);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia32', 112);
INSERT INTO `equipo_prestamo` VALUES ('Mul30', 113);
INSERT INTO `equipo_prestamo` VALUES ('Mul10', 114);
INSERT INTO `equipo_prestamo` VALUES ('Bibblia5', 117);
INSERT INTO `equipo_prestamo` VALUES ('LibJoni51', 117);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `especialidad`
-- 

CREATE TABLE `especialidad` (
  `idespecialidad` varchar(45) NOT NULL,
  `nombre` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`idespecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `especialidad`
-- 

INSERT INTO `especialidad` VALUES ('Entre', 'AdaptaciÃ³n de sillas de ruedas, andador, muletas');
INSERT INTO `especialidad` VALUES ('MEDIC', 'Medicina de RehabilitaciÃ³n');
INSERT INTO `especialidad` VALUES ('terap', 'Terapia del lenguaje');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `grupo`
-- 

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `horario` datetime DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `colaborador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupo_colaborador1_idx` (`colaborador_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `grupo`
-- 

INSERT INTO `grupo` VALUES (1, 'Actividades Enfocadas', '2015-04-10 15:00:00', 'Club de Leones en Ameca', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `grupo_asist_persona`
-- 

CREATE TABLE `grupo_asist_persona` (
  `grupo_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `asistio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`grupo_id`,`persona_id`),
  KEY `fk_grupo_has_persona_persona1_idx` (`persona_id`),
  KEY `fk_grupo_has_persona_grupo1_idx` (`grupo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `grupo_asist_persona`
-- 

INSERT INTO `grupo_asist_persona` VALUES (1, 1, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 2, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 3, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 4, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 6, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 7, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 8, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 9, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 10, 'si');
INSERT INTO `grupo_asist_persona` VALUES (1, 11, 'si');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `historial_medico`
-- 

CREATE TABLE `historial_medico` (
  `idhistorial` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `observaciones` longtext,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`idhistorial`),
  KEY `fk_historial_medico_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 AUTO_INCREMENT=96 ;

-- 
-- Volcar la base de datos para la tabla `historial_medico`
-- 

INSERT INTO `historial_medico` VALUES (1, '2015-04-10 09:46:45', 'bien.', 10);
INSERT INTO `historial_medico` VALUES (2, '2015-04-10 09:55:34', 'Bien.', 8);
INSERT INTO `historial_medico` VALUES (3, '2015-04-10 09:57:36', 'Bien.', 9);
INSERT INTO `historial_medico` VALUES (4, '2015-04-10 10:35:08', 'Bien.', 2);
INSERT INTO `historial_medico` VALUES (5, '2015-04-10 10:51:45', 'Bien.', 12);
INSERT INTO `historial_medico` VALUES (6, '2015-04-10 10:57:53', 'Bien.', 14);
INSERT INTO `historial_medico` VALUES (7, '2015-04-10 10:59:44', 'Bien.', 7);
INSERT INTO `historial_medico` VALUES (8, '2015-04-10 11:43:14', 'Bien.', 15);
INSERT INTO `historial_medico` VALUES (9, '2015-04-10 12:09:55', 'Bien.', 1);
INSERT INTO `historial_medico` VALUES (10, '2015-04-10 12:13:22', 'Bien.', 16);
INSERT INTO `historial_medico` VALUES (11, '2015-04-10 12:20:23', 'bien.', 17);
INSERT INTO `historial_medico` VALUES (12, '2015-04-10 12:21:37', 'Bien.', 5);
INSERT INTO `historial_medico` VALUES (13, '2015-04-10 13:02:34', 'Bien.', 20);
INSERT INTO `historial_medico` VALUES (14, '2015-04-10 13:18:04', 'Piernera', 11);
INSERT INTO `historial_medico` VALUES (15, '2015-04-10 13:20:02', 'Piernera', 2);
INSERT INTO `historial_medico` VALUES (16, '2015-04-10 13:26:48', 'Bien.', 6);
INSERT INTO `historial_medico` VALUES (17, '2015-04-10 13:37:36', 'Descansa Pies(Pirnera)', 13);
INSERT INTO `historial_medico` VALUES (18, '2015-04-10 14:00:13', 'bien.', 18);
INSERT INTO `historial_medico` VALUES (19, '2015-04-10 14:30:17', 'Descansa Pies()', 15);
INSERT INTO `historial_medico` VALUES (20, '2015-04-10 14:31:55', 'Bien.', 4);
INSERT INTO `historial_medico` VALUES (21, '2015-04-10 14:40:09', 'Bien.', 19);
INSERT INTO `historial_medico` VALUES (22, '2015-04-10 14:47:41', 'Bien.', 21);
INSERT INTO `historial_medico` VALUES (23, '2015-04-10 15:12:53', 'Bien.', 23);
INSERT INTO `historial_medico` VALUES (24, '2015-04-10 15:21:02', 'Descasa Pies', 16);
INSERT INTO `historial_medico` VALUES (25, '2015-04-10 15:37:16', 'Bien.', 22);
INSERT INTO `historial_medico` VALUES (26, '2015-04-10 15:57:04', 'Descansa pies', 20);
INSERT INTO `historial_medico` VALUES (27, '2015-04-10 15:59:22', 'Descansa pies', 12);
INSERT INTO `historial_medico` VALUES (28, '2015-04-10 16:46:58', 'Bien.', 7);
INSERT INTO `historial_medico` VALUES (29, '2015-04-10 17:07:25', 'descansa pies', 21);
INSERT INTO `historial_medico` VALUES (30, '2015-04-10 17:13:43', 'Descanso Pies', 21);
INSERT INTO `historial_medico` VALUES (31, '2015-04-10 18:20:05', 'Bien.', 74);
INSERT INTO `historial_medico` VALUES (32, '2015-04-10 18:24:37', 'descansa pies', 7);
INSERT INTO `historial_medico` VALUES (33, '2015-04-10 19:09:17', 'Descansa pies', 8);
INSERT INTO `historial_medico` VALUES (34, '2015-04-10 19:09:32', 'Descansa pies ', 8);
INSERT INTO `historial_medico` VALUES (35, '2015-04-10 19:11:19', 'Descansa pies', 10);
INSERT INTO `historial_medico` VALUES (36, '2015-04-11 09:17:19', 'Bien.', 73);
INSERT INTO `historial_medico` VALUES (37, '2015-04-11 09:23:58', 'descansa pies.', 10);
INSERT INTO `historial_medico` VALUES (38, '2015-04-11 09:25:50', 'Bien.', 37);
INSERT INTO `historial_medico` VALUES (39, '2015-04-11 09:31:19', 'Bien.', 60);
INSERT INTO `historial_medico` VALUES (40, '2015-04-11 09:39:33', 'No se pudo transladar.', 28);
INSERT INTO `historial_medico` VALUES (41, '2015-04-11 09:41:06', 'No pudo trasladarce', 33);
INSERT INTO `historial_medico` VALUES (42, '2015-04-11 09:41:32', 'No se pudo transladar.', 32);
INSERT INTO `historial_medico` VALUES (43, '2015-04-11 09:43:19', 'Bien.', 38);
INSERT INTO `historial_medico` VALUES (44, '2015-04-11 09:46:17', 'No se pudo transladar.', 27);
INSERT INTO `historial_medico` VALUES (45, '2015-04-11 09:48:55', 'Bien.', 26);
INSERT INTO `historial_medico` VALUES (46, '2015-04-11 10:05:02', 'Bien.', 61);
INSERT INTO `historial_medico` VALUES (47, '2015-04-11 10:09:08', 'No se pudo tranasladar', 56);
INSERT INTO `historial_medico` VALUES (48, '2015-04-11 10:11:53', 'Bien.', 31);
INSERT INTO `historial_medico` VALUES (49, '2015-04-11 10:20:22', 'Bien.', 30);
INSERT INTO `historial_medico` VALUES (50, '2015-04-11 10:21:22', 'Bien.', 30);
INSERT INTO `historial_medico` VALUES (51, '2015-04-11 10:21:22', 'Bien.', 30);
INSERT INTO `historial_medico` VALUES (52, '2015-04-11 10:31:27', 'Bien.', 36);
INSERT INTO `historial_medico` VALUES (53, '2015-04-11 10:41:26', 'No se transladar', 47);
INSERT INTO `historial_medico` VALUES (54, '2015-04-11 10:47:01', 'Bien', 49);
INSERT INTO `historial_medico` VALUES (55, '2015-04-11 10:52:21', 'La hora de la cita era a las 02:00, pero el sistema no permitiÃ³ la hora de la cita.', 51);
INSERT INTO `historial_medico` VALUES (56, '2015-04-11 10:55:15', '14.00 El sistema no dejo registrarlo en su hora de cita', 50);
INSERT INTO `historial_medico` VALUES (57, '2015-04-11 11:00:11', 'La hora de la cita es de: 14:00 a 15:00, pero el sistema no permite capturar en ese horario.', 45);
INSERT INTO `historial_medico` VALUES (58, '2015-04-11 11:01:02', '14:00 no se pudo registrar a la hora asignada', 59);
INSERT INTO `historial_medico` VALUES (59, '2015-04-11 11:01:55', 'La cita era de 02:00 a 03:00, pero el sistema no permitiÃ³ la hora.', 53);
INSERT INTO `historial_medico` VALUES (60, '2015-04-11 11:04:51', '14:00 No se pudo registrar en la hora asignada', 58);
INSERT INTO `historial_medico` VALUES (61, '2015-04-11 11:07:13', '14:00 No se pudo registrar a la hora asignada', 55);
INSERT INTO `historial_medico` VALUES (62, '2015-04-11 11:10:36', 'El horario correcto de la cita es de: 14:00 a 15:00 , pero el sistema no permite agendar citas en ese horario.', 46);
INSERT INTO `historial_medico` VALUES (63, '2015-04-11 11:50:41', 'Casos Especiales', 77);
INSERT INTO `historial_medico` VALUES (64, '2015-04-11 11:54:21', 'Bien.', 40);
INSERT INTO `historial_medico` VALUES (65, '2015-04-11 12:17:33', 'Bien.', 44);
INSERT INTO `historial_medico` VALUES (66, '2015-04-11 12:18:11', 'Bien', 78);
INSERT INTO `historial_medico` VALUES (67, '2015-04-11 12:36:52', 'Bien. (Caso Especial) ', 70);
INSERT INTO `historial_medico` VALUES (68, '2015-04-11 12:57:58', 'Horario Correcto: SÃ¡bado 11 Abril 14:00 a 15:00 (El sistema no permite la captura del horario) ', 48);
INSERT INTO `historial_medico` VALUES (69, '2015-04-11 13:07:11', 'Caso Especial: Baston\r\nHora llegada: 13:00 pm\r\n', 79);
INSERT INTO `historial_medico` VALUES (70, '2015-04-11 20:57:45', 'Bien', 39);
INSERT INTO `historial_medico` VALUES (71, '2015-04-11 21:03:07', 'Bien', 3);
INSERT INTO `historial_medico` VALUES (72, '2015-04-11 21:03:21', 'No se encotro', 52);
INSERT INTO `historial_medico` VALUES (73, '2015-04-11 21:04:28', 'bien.', 54);
INSERT INTO `historial_medico` VALUES (74, '2015-04-11 21:04:36', 'Bien', 35);
INSERT INTO `historial_medico` VALUES (75, '2015-04-11 21:05:53', 'bien.', 56);
INSERT INTO `historial_medico` VALUES (76, '2015-04-11 21:06:23', 'Bien', 43);
INSERT INTO `historial_medico` VALUES (77, '2015-04-11 21:06:45', 'bien.', 47);
INSERT INTO `historial_medico` VALUES (78, '2015-04-11 21:07:22', 'bien.', 53);
INSERT INTO `historial_medico` VALUES (79, '2015-04-11 21:08:06', 'Bien', 33);
INSERT INTO `historial_medico` VALUES (80, '2015-04-11 21:08:11', 'bien.', 45);
INSERT INTO `historial_medico` VALUES (81, '2015-04-11 21:08:45', 'bien.\r\n', 28);
INSERT INTO `historial_medico` VALUES (82, '2015-04-11 21:08:54', 'Bien', 32);
INSERT INTO `historial_medico` VALUES (83, '2015-04-11 21:09:15', 'bien.', 27);
INSERT INTO `historial_medico` VALUES (84, '2015-04-11 21:09:45', 'Bien', 27);
INSERT INTO `historial_medico` VALUES (85, '2015-04-11 22:02:26', 'bien.', 41);
INSERT INTO `historial_medico` VALUES (86, '2015-04-11 22:03:04', 'no vino', 41);
INSERT INTO `historial_medico` VALUES (87, '2015-04-11 22:05:15', 'bien.', 54);
INSERT INTO `historial_medico` VALUES (88, '2015-04-11 22:06:26', 'no asistio', 29);
INSERT INTO `historial_medico` VALUES (89, '2015-04-11 22:14:36', 'si vino', 10);
INSERT INTO `historial_medico` VALUES (90, '2015-04-11 22:24:03', 'Esta hospitalizado', 24);
INSERT INTO `historial_medico` VALUES (91, '2015-04-11 22:37:02', 'Se actualiza por nota previa', 46);
INSERT INTO `historial_medico` VALUES (92, '2015-04-11 22:46:06', 'si asistiÃ³', 54);
INSERT INTO `historial_medico` VALUES (93, '2015-04-11 22:47:02', 'Si asistio', 55);
INSERT INTO `historial_medico` VALUES (94, '2015-04-11 22:48:14', 'Si asistio', 55);
INSERT INTO `historial_medico` VALUES (95, '2015-04-11 22:49:17', 'Si asistio', 56);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `iglesia`
-- 

CREATE TABLE `iglesia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `iglesia`
-- 

INSERT INTO `iglesia` VALUES (1, 'Cristiana');
INSERT INTO `iglesia` VALUES (2, 'CatÃ³lica');
INSERT INTO `iglesia` VALUES (3, 'DIF San MartÃ­n Higalgo');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `iglesia_cristiana`
-- 

CREATE TABLE `iglesia_cristiana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `domicilio` varchar(145) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `localidad` varchar(255) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `seguimiento` varchar(45) DEFAULT NULL,
  `iglesia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iglesia_cristiana_iglesia1_idx` (`iglesia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- 
-- Volcar la base de datos para la tabla `iglesia_cristiana`
-- 

INSERT INTO `iglesia_cristiana` VALUES (1, 'Iglesia Cristiana Divino Redentor', 'Vallarta 44, Colonia Centro', 'Ameca', 'Ameca', 'Jalisco', '3757581655', 'si', 1);
INSERT INTO `iglesia_cristiana` VALUES (2, 'Iglesia Cristiana Emanuel', 'Azucareros 6, Colonia la Reina', 'Ameca', 'Ameca', 'Jalisco', '3751019880', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (3, 'Iglesia Cristiana Maranatha', 'Privada Manzano 7, Fracc. Los Mezquites', 'Ameca', 'Ameca', 'Jalisco', '3757588278', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (4, 'Iglesia Cristiana Casa de OraciÃ³n', 'Madero 11', 'Ameca', 'El CabezÃ³n', 'Jalisco', '3333503889', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (5, 'MisiÃ³n Cristiana JesÃºs El Pan de Vida', 'Americas 13 ', 'Ameca', 'Cerrito del Cuis', 'Jalisco', '3751000107', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (6, 'MisiÃ³n Cristiana Alfa y Omega', 'Independencia 1-A', 'Ameca', 'Buenos Aires', 'Jalisco', '3751009211', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (7, 'MisiÃ³n Cristiana JesÃºs El Buen Pastor', 'Independencia 52', 'Ameca', 'Huerta de San Javier', 'Jalisco', '3751116881', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (8, 'Iglesia Bautista Fundamental Emanuel', 'Nicolas Bravo 53-A', 'Ameca', 'Ameca', 'Jalisco', '3751021791', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (9, 'Iglesia Cristiana Fuente de Agua Viva', '21 de Marzo 21, Colonia Santa Cecilia', 'Ameca', 'Ameca', 'Jalisco', '3757583602', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (10, 'Lirio de los Valles', 'Josefa Ortiz de Dominguez 12', 'Ameca', 'La Coronilla', 'Jalisco', '3757587252', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (11, 'Primera Iglesia Bautista de Ameca', '5 de Mayo 58, Colonia Centro', 'Ameca', 'Ameca', 'Jalisco', '3757583508', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (12, 'Gracia Soberana Guadalajara', 'San Luis Gonzaga 5114', 'Zapopan', 'Zapopan', 'Jalisco', 'No tiene', NULL, 1);
INSERT INTO `iglesia_cristiana` VALUES (13, 'Iglesia Peniel de la Alianza Cristiana Misionera A.R.', 'Boulevard Hidalgo # 48', 'San Marcos', 'San Marcos', 'Jalisco', '386-75-701-57', 'si', 1);
INSERT INTO `iglesia_cristiana` VALUES (14, 'DIF San MartÃ­n Hidalgo', 'CENTRO', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', 'Jalisco', '375-105-4571', 'no', 1);
INSERT INTO `iglesia_cristiana` VALUES (15, 'DIF Ahualulco', 'CENTRO', 'AHUALULCO', 'AHUALULCO', 'Jalisco', '386-75-201-75', 'no', 1);
INSERT INTO `iglesia_cristiana` VALUES (16, 'DIF San Juanito de Escobedo', 'CENTRO', 'SAN JUANITO DE ESCOBEDO', 'SAN JUANITO DE ESCOBEDO', 'Jalisco', '386-75-403-94', 'no', 1);
INSERT INTO `iglesia_cristiana` VALUES (17, 'DIF Tequila', 'CENTRO', 'TEQUILA', 'TEQUILA', 'Jalisco', '374-74-200-63', 'no', 1);
INSERT INTO `iglesia_cristiana` VALUES (18, 'Iglesia Cristiana Getsemani', 'CENTRO', 'AHUALULCO', 'AHUALULCO', 'Jalisco', '7525038', 'si', 1);
INSERT INTO `iglesia_cristiana` VALUES (19, 'DIF Tala', 'Simon Bolivar # 122', 'Tala', 'Tala', 'Jalisco', '7384324', 'no', 1);
INSERT INTO `iglesia_cristiana` VALUES (20, 'DIF Hostotipaquillo', 'Centro', 'Hostotipaquillo', 'Hostotipaquillo', 'Jalisco', '.', 'no', 1);
INSERT INTO `iglesia_cristiana` VALUES (21, 'DIF AmatitÃ¡n', 'CENTRO', 'AmatitÃ¡n', 'AmatitÃ¡n', 'Jalisco', '374-745-1213', 'no', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `medico`
-- 

CREATE TABLE `medico` (
  `cedula` varchar(45) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `medico`
-- 

INSERT INTO `medico` VALUES ('E', 'EstaciÃ³n 1', '', '', 'MÃ©xico', 'Jalisco', '', '', '', '3757581655-1');
INSERT INTO `medico` VALUES ('E3757581655', 'EstaciÃ³n 2 ', '', '', 'MÃ©xico', 'Jalisco', '', '', '', '3757581655-2');
INSERT INTO `medico` VALUES ('E3757581655-6', 'EstaciÃ³n 6', '', '', 'MÃ©xico', '', '', '', '', '3757581655-6');
INSERT INTO `medico` VALUES ('E3757581655-7', 'EstaciÃ³n 7', '', '', 'MÃ©xico', '', '', '', '', '3757581655-7');
INSERT INTO `medico` VALUES ('E37575816554', 'EstaciÃ³n 3', '', '', 'MÃ©xico', 'Jalisco', '', '', '', '3757581655-3');
INSERT INTO `medico` VALUES ('E37575816555', 'EstaciÃ³n 4', '', '', 'MÃ©xico', 'Jalisco', '', '', '', '3757581655-4');
INSERT INTO `medico` VALUES ('KE3757581655', 'EstaciÃ³n 5', '', '', 'MÃ©xico', 'Jalisco', '', '', '', '3757581655-5');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `medico_has_especialidad`
-- 

CREATE TABLE `medico_has_especialidad` (
  `medico_cedula` varchar(45) NOT NULL,
  `especialidad_idespecialidad` varchar(45) NOT NULL,
  PRIMARY KEY (`medico_cedula`,`especialidad_idespecialidad`),
  KEY `fk_medico_has_especialidad_especialidad1_idx` (`especialidad_idespecialidad`),
  KEY `fk_medico_has_especialidad_medico1_idx` (`medico_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `medico_has_especialidad`
-- 

INSERT INTO `medico_has_especialidad` VALUES ('E', 'Entre');
INSERT INTO `medico_has_especialidad` VALUES ('E3757581655', 'Entre');
INSERT INTO `medico_has_especialidad` VALUES ('E3757581655-6', 'Entre');
INSERT INTO `medico_has_especialidad` VALUES ('E3757581655-7', 'Entre');
INSERT INTO `medico_has_especialidad` VALUES ('E37575816554', 'Entre');
INSERT INTO `medico_has_especialidad` VALUES ('E37575816555', 'Entre');
INSERT INTO `medico_has_especialidad` VALUES ('KE3757581655', 'Entre');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `medio_difusion_x_paciente`
-- 

CREATE TABLE `medio_difusion_x_paciente` (
  `paciente_id` int(11) NOT NULL,
  `difusion_id` int(11) NOT NULL,
  PRIMARY KEY (`paciente_id`,`difusion_id`),
  KEY `fk_paciente_has_difusion_difusion1_idx` (`difusion_id`),
  KEY `fk_paciente_has_difusion_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `medio_difusion_x_paciente`
-- 

INSERT INTO `medio_difusion_x_paciente` VALUES (1, 1);
INSERT INTO `medio_difusion_x_paciente` VALUES (2, 1);
INSERT INTO `medio_difusion_x_paciente` VALUES (12, 2);
INSERT INTO `medio_difusion_x_paciente` VALUES (86, 2);
INSERT INTO `medio_difusion_x_paciente` VALUES (102, 2);
INSERT INTO `medio_difusion_x_paciente` VALUES (6, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (7, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (8, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (9, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (10, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (11, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (13, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (14, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (15, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (16, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (17, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (18, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (19, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (20, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (21, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (22, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (23, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (24, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (25, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (29, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (30, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (31, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (59, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (70, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (72, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (73, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (74, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (75, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (77, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (79, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (80, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (81, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (82, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (83, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (84, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (85, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (87, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (88, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (127, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (215, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (216, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (217, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (218, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (219, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (220, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (222, 3);
INSERT INTO `medio_difusion_x_paciente` VALUES (5, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (26, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (27, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (28, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (32, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (33, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (34, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (35, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (36, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (37, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (38, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (39, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (40, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (42, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (43, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (44, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (46, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (47, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (48, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (49, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (50, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (51, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (52, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (53, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (54, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (55, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (56, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (57, 4);
INSERT INTO `medio_difusion_x_paciente` VALUES (58, 4);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `paciente`
-- 

CREATE TABLE `paciente` (
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
  `desicion` varchar(45) DEFAULT NULL,
  `evangelio` varchar(5) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `iglesia_cid` varchar(6) DEFAULT NULL,
  `iglesia_id` int(11) NOT NULL,
  `contacto_id` int(11) NOT NULL,
  `diagnostico_id` int(11) DEFAULT '1',
  `fecha_registro` datetime DEFAULT NULL,
  `espalda` varchar(30) DEFAULT NULL,
  `cadera_rodilla` varchar(30) DEFAULT NULL,
  `rodilla_talon` varchar(30) DEFAULT NULL,
  `cintura` varchar(30) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `solicitud` varchar(45) DEFAULT NULL,
  `causa_solicitud` varchar(255) DEFAULT NULL,
  `visita_casa` varchar(45) DEFAULT NULL,
  `requiere` varchar(45) DEFAULT NULL,
  `codo_piso` varchar(45) DEFAULT NULL,
  `axila_piso` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_paciente_iglesia1_idx` (`iglesia_id`),
  KEY `fk_paciente_contacto1_idx` (`contacto_id`),
  KEY `fk_paciente_diagnostico1_idx` (`diagnostico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8 AUTO_INCREMENT=223 ;

-- 
-- Volcar la base de datos para la tabla `paciente`
-- 

INSERT INTO `paciente` VALUES (1, NULL, 'Norma Etelvina', 'Campa', 'Lizaola', '1943-11-15', '3757582618', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Allende 23', 'no', 'si', 'Mujer', '1', 1, 2, 3, '2015-02-18 13:00:00', '67', '64', '42', '51', '152', '80', 'Aprobada', '', 'no', 'silla', '', '');
INSERT INTO `paciente` VALUES (2, NULL, 'Martin', 'Ortiz', 'Marin', '1963-05-31', '0443751070483', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Balbaneda 83 Colonia Los Angeles', 'no', 'si', 'Hombre', '3', 1, 3, 2, '2015-03-07 00:00:00', '62', '54', '54', '46', '167', '63.200', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (3, NULL, 'JUANITA', 'XXX', 'NUÃ‘EZ', '1939-06-24', '3751037781', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'DIAZ ORDAZ 101', 'no', 'si', 'Mujer', NULL, 1, 4, 4, '2015-03-31 21:00:53', '53', '40', '47', '47.5', '136', '42', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (4, NULL, 'Angela', 'Solano', 'Ramos', '1938-10-05', '3757587242', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Francisco Villa #3 Col. El Sabino', 'no', 'si', 'Mujer', NULL, 1, 5, 1, '2015-04-01 11:00:45', '60', '64', '50', '78', '160', '85', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (5, NULL, 'Juan JosÃ©', 'Aquino', 'Rodriguez', '1946-05-23', '3757580829', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'RepÃºblica #148, Colonia San JosÃ©', 'no', 'si', 'Hombre', NULL, 1, 6, 1, '2015-03-30 10:00:37', '79', '48', '44', '43', '158', '57', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (6, NULL, 'Melisa Elizabeth', 'Esparza', 'Vazquez', '2011-05-02', '3751165496', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Corona #121, Colonia Centro', 'no', 'si', 'Mujer', NULL, 2, 6, 1, '2015-04-01 18:00:10', '39', '22', '27', '17', '107', '11', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (7, NULL, 'JesÃºs Manuel', 'Parra', 'Gonzalez', '1984-03-13', '3751024803', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Salud #112, Col. Las Victorias', 'no', 'si', 'Hombre', NULL, 2, 6, 23, '2015-04-02 08:00:59', '75', '54', '55', '43', '164', '48', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (8, NULL, 'Regina Anahi ', 'Colima', 'PÃ©rez', '2011-05-16', '375-111-4924', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Avenida Patria Poniente 1421', 'no', 'si', 'Mujer', NULL, 2, 7, 24, '2015-04-04 14:00:27', '38', '28', '25', '21', '93', '11.5', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (9, NULL, 'Jafeth Salvador', 'Colima ', 'PÃ©rez', '2003-11-24', '375-112-4924', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Avenida Patria Poniente 1421', 'no', 'si', 'Hombre', NULL, 2, 7, 24, '2015-04-04 14:00:30', '51', '38', '35', '30', '135', '22.5', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (10, NULL, 'Dulce MarÃ­a', 'Medina', 'Murillo', '2011-08-15', '384-109-0526', 'MÃ©xico', 'Jalisco', 'Tala', 'Cuisillos', 'Miguel Hidalgo 30', 'no', 'si', 'Mujer', NULL, 2, 8, 25, '2015-04-04 14:00:48', '38', '28', '25', '23', '106', '20', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (11, NULL, 'MarÃ­a Genoveva', 'Guerrero ', 'LuquÃ­n', '1949-07-08', '375-104-4648', 'MÃ©xico', 'Jalisco', 'Ameca', 'El CabezÃ³n', 'Allende 10', 'si', 'si', 'Mujer', NULL, 2, 9, 9, '2015-04-04 14:00:37', '79', '58', '59', '47', '152', '81', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (12, NULL, 'Diego', 'Mariscal', 'Ruiz', '1990-07-22', '375-106-5945', 'MÃ©xico', 'Jalisco', 'Ameca', 'Villahermosa', 'Domingo Fausto 51', 'Ya era', 'si', 'Hombre', NULL, 1, 6, 5, '2015-04-04 14:00:31', '65', '62', '55', '40', '177', '70', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (13, NULL, 'Olegario', 'Orozco', 'RamÃ­rez', '1957-04-07', '375-758-6328', 'MÃ©xico', 'Jalisco', 'Ameca', 'San Antonio Matute', 'Reforma 33', 'no', 'si', 'Hombre', NULL, 2, 7, 9, '2015-04-04 14:00:43', '80', '58', '57', '38', '172', '64', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (14, NULL, 'Arnulfo', 'Santos', 'LÃ³pez', '1977-01-05', '375-106-8618', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Rocha Garibay 63', 'no', 'si', 'Hombre', NULL, 2, 10, 26, '2015-04-04 15:00:07', '27', '60', '50', '50', '162', '60', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (15, NULL, 'J. Rosario ', 'ChavarÃ­n', 'Cortez', '1939-04-03', '375-116-3753', 'MÃ©xico', 'Jalisco', 'Ameca', 'Buenos Aires', 'JuÃ¡rez 2', 'no', 'si', 'Hombre', NULL, 2, 11, 28, '2015-04-04 16:01:42', '65', '52', '43', '46', '170', '72', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (16, NULL, 'Ampelia', 'Figueroa', 'R', '1936-02-11', '375-758-7289', 'MÃ©xico', 'Jalisco', 'Ameca', 'La Coronilla', 'Ricardo Flores MagÃ³n 1', 'no', 'si', 'Mujer', NULL, 1, 12, 14, '2015-04-04 16:00:36', '64', '52', '45', '48', '162', '78', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (17, NULL, 'Benjamin ', 'Ayala', 'Lozano', '1940-06-12', '375-103-2509', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca, colonia la Isla', 'Camino al Portezuelo 11', 'no', 'si', 'Hombre', NULL, 2, 13, 29, '2015-04-04 16:00:06', '71', '59', '50', '51', '172', '74', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (18, NULL, 'JosÃ© Manuel ', 'Carrillo ', 'Topete', '1984-08-24', '375-758-0488', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'JosÃ© Amaya Topete', 'no', 'si', 'Hombre', NULL, 2, 7, 10, '2015-04-04 16:12:19', '58', '60', '52', '32', '162', '60', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (19, NULL, 'Soledad ', 'Valencia ', 'Uribe', '1933-03-01', '375-758-6880', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Fresno Sur 1-C', 'no', 'si', 'Mujer', NULL, 2, 14, 4, '2015-04-04 16:15:22', '66', '36', '48', '103', '165', '85', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (20, NULL, 'Ma. EncarnaciÃ³n', 'Uribe ', 'Topete', '1921-05-25', '375-758-7216', 'MÃ©xico', 'Jalisco', 'Ameca', 'La Coronilla', 'Josefa Ortiz de Dominguez 6', 'no', 'si', 'Mujer', NULL, 2, 15, 7, '2015-04-04 16:19:57', '64', '48', '49', '50', '155', '64', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (21, NULL, 'JosÃ© de JesÃºs ', 'Rosas', 'CasiÃ¡n', '1940-12-24', '3751055600', 'MÃ©xico', 'Jalisco', 'Ameca', 'El CabezÃ³n', 'Cedro 7', 'no', 'si', 'Hombre', NULL, 2, 16, 30, '2015-04-04 16:32:34', '64', '40', '40', '45', '156', '60', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (22, NULL, 'Alfonso', 'Rodriguez', 'Aguayo', '1945-04-23', '375-119-8466', 'MÃ©xico', 'Jalisco', 'Ameca', 'Don Martin', 'Juan de la Barrera 50', 'si', 'si', 'Hombre', NULL, 2, 17, 7, '2015-04-04 16:43:55', '55', '50', '50', '46', '160', '62.5', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (23, NULL, 'MarÃ­a Celia', 'Molina', 'Rodriguez', '1948-12-26', '375-102-8277', 'MÃ©xico', 'Jalisco', 'Ameca', 'Providencia', 'Hacienda del cuis 32', 'no', 'si', 'Mujer', NULL, 2, 6, 29, '2015-04-04 16:49:07', '55', '40', '48', '42', '155', '58', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (24, NULL, 'MarÃ­a de JesÃºs', 'Aguilar', 'Uribe', '1940-05-16', '375-758-3729', 'MÃ©xico', 'Jalisco', 'Ameca', 'Centro', 'Colon 6', '', '', 'Mujer', NULL, 2, 7, 14, '2015-04-04 16:58:09', '64', '47', '47', '49', '170', '100', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (25, NULL, 'Francisco ', 'Tadeo', 'Santos', '1967-08-27', '375-758-0934', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', '20 de Noviembre ', '', '', 'Hombre', NULL, 2, 18, 26, '2015-04-04 17:00:49', '70', '53', '55', '55', '', '', 'En espera', 'esta hospitalizado', 'no', 'silla', '', '');
INSERT INTO `paciente` VALUES (26, NULL, 'Daniel Aaron ', 'Del Roble', 'Rubio', '2010-08-18', '386-103-0171', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Eucalipto 49-C', '', 'si', 'Hombre', NULL, 2, 4, 10, '2015-04-04 17:00:46', '39', '29', '26', '24', '93', '12.5', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (27, NULL, 'Ricardo ', 'JÃ­menez', 'Aldaz', '1935-03-06', '386-752-4282', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Morelos 55, colonia San Ignacio', 'no', 'si', 'Hombre', NULL, 2, 4, 7, '2015-04-04 17:00:46', '70', '57', '47', '121', '178', '120', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (28, NULL, 'Maria del Rosario', 'Rosales ', 'Alvarado', '1955-01-01', '331-154-4934', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', ' Colon 34', '', '', 'Hombre', NULL, 2, 4, 8, '2015-04-04 17:00:13', '58', '55', '40', '55', '135', '60', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (29, NULL, 'Pedro Lucas', 'Godina', 'Espinoza', '1958-10-18', '375-752-0341', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'Centro', 'Emilio Carranza 106', '', '', 'Hombre', NULL, 2, 4, 2, '2015-04-04 18:20:10', '85', '55', '50', '45', '178', '110', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (30, NULL, 'Carmen', 'Serrano', 'GarcÃ­a', '1926-05-06', '386-752-1139', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'El Copal', 'Ocampo 174', 'no', 'si', 'Mujer', NULL, 2, 4, 16, '2015-04-04 18:25:15', '74', '46', '47', '46', '145', '52', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (31, NULL, 'MarÃ­a Magdalena', 'Ortiz', 'Preciado', '1940-07-22', '386-752-0191', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'Centro', 'Juarez 1', 'si', 'si', 'Mujer', NULL, 2, 4, 15, '2015-04-04 18:29:49', '55', '44', '46', '46', '149', '60', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (32, NULL, 'Pablo', 'Hernandez', 'Pulquero', '1932-01-25', 'No tiene', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'Centro', 'Amado Nervo 125', 'no', 'si', 'Hombre', NULL, 2, 4, 1, '2015-04-04 18:40:41', '72', '52', '52', '52', '165', '80', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (33, NULL, 'Victorino ', 'Corona', 'AndalÃ³n', '1942-04-09', 'No tiene', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Santa MarÃ­a 54, colonia Francisco JardÃ­nes', 'no', 'si', 'Hombre', NULL, 2, 4, 32, '2015-04-04 18:00:23', '83', '53', '53', '43', '165', '72', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (34, NULL, 'JesÃºs ', 'Tamayo', 'Rubio', '1919-01-17', '386-752-1705', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Privada Soledad No 3, colonia Ejidal', '', '', 'Hombre', NULL, 1, 4, 22, '2015-04-04 18:00:49', '70', '48', '51', '41', '156', '48', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (35, NULL, 'RaÃºl ', 'NuÃ±o', 'Venegas', '1937-05-23', '386-752-1417', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'San Juan 3 ', 'no', 'si', 'Hombre', NULL, 2, 4, 22, '2015-04-04 18:00:16', '56', '50', '54', '47', '165', '65', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (36, NULL, 'Sixto', 'DÃ­az ', 'RÃ­os', '1923-03-28', '386-105-5431', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Higuera 45, col. Lomas de los Mezquites', '', 'si', 'Hombre', NULL, 2, 4, 17, '2015-04-04 18:00:55', '81', '58', '54', '55', '175', '75', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (37, NULL, 'Teresa', 'Montes', 'Riva', '1935-10-13', '386-104-7302', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Guadalupe Victoria 192', 'si', 'si', 'Mujer', NULL, 2, 4, 22, '2015-04-04 19:00:12', '60', '53', '53', '48', '160', '62', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (38, NULL, 'MarÃ­a ', 'SÃ¡nchez', 'RamÃ­rez', '1941-10-02', 'No tiene', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Gil Preciado 20', 'no', 'si', 'Mujer', NULL, 2, 4, 31, '2015-04-04 19:02:47', '52', '42', '42', '132', '149', '82', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (39, NULL, 'Teresa', 'Jimenez', 'Chavarin', '1931-10-03', '386-106-6096', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'LÃ³pez Mateos 38', 'no', 'si', 'Mujer', NULL, 2, 4, 31, '2015-04-04 19:00:55', '62', '45', '43', '54', '149', '65', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (40, NULL, 'Gregorio', 'Flores', 'PÃ©rez', '1926-01-25', '386-752-1008', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Madre Selva 1', 'si', 'si', 'Mujer', NULL, 2, 4, 22, '2015-04-04 19:00:23', '64', '70', '51', '42', '160', '70', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (41, NULL, 'Julian ', 'Flores', 'Cid', '1932-01-29', '386-752-1379', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'LÃ³pez Cotilla 130', 'no', 'no', 'Mujer', NULL, 2, 4, 31, '2015-04-04 19:00:23', '87', '49', '49', '49', '150', '61', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (42, NULL, 'Ana Maria', 'Aguayo ', 'Tapia', '1944-04-21', '386-752-1762', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Gil Preciado 44', '', '', 'Mujer', NULL, 2, 4, 29, '2015-04-04 19:00:43', '65', '54', '49', '144', '160', '70', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (43, NULL, 'MarÃ­a Abundia', 'Virgen', 'MartÃ­nez', '1929-06-20', '333-195-5782', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Extramuros 11', 'no', 'si', 'Mujer', NULL, 2, 4, 22, '2015-04-04 19:00:36', '76', '62', '56', '58', '178', '78', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (44, NULL, 'Beatriz', 'Madrid', 'Velador', '1923-05-10', '386-752-0524', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Josefa Ortiz de Dominguez 116', 'si', 'si', 'Mujer', NULL, 2, 4, 31, '2015-04-04 19:00:29', '65', '47', '53', '45', '156', '55', 'Aprobada', '', 'no', 'silla', '', '');
INSERT INTO `paciente` VALUES (45, NULL, 'Francisco ', 'Flores', 'Huerta', '1929-10-03', '386-100-6096', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Lopez Mateo 38', '', '', 'Hombre', NULL, 2, 4, 22, '2015-04-05 11:00:29', '0', '0', '0', '95', '160', '65', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (46, NULL, 'Teodora', 'Flores', 'Bobadilla', '1937-11-09', '368-103-0776', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Lopez Cotilla 130 Copal Panteon', '', '', 'Mujer', NULL, 2, 4, 31, '2015-04-05 11:00:03', '0', '0', '0', '98', '148', '57', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (47, NULL, 'Rodolfo', 'ChavarÃ­n ', 'Sanchez', '1938-08-03', '386-105-0767', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Lopez Mateo 128 ', 'si', 'si', 'Hombre', NULL, 2, 4, 31, '2015-04-05 11:00:44', '0', '0', '0', '100', '155', '68', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (48, NULL, 'Josefina', 'Castillo', 'GÃ³mez ', '1930-03-21', 'No tiene', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Manuel AcuÃ±a 14 Nogale', '', '', 'Mujer', NULL, 2, 4, 31, '2015-04-05 11:00:14', '0', '0', '0', '93', '145', '75', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (49, NULL, 'Guillermo', 'Medina', 'Dominguez', '1943-06-24', 'No tiene', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'LÃ³pez Mateos 108 las colonias', '', 'si', 'Hombre', NULL, 2, 4, 1, '2015-04-05 11:00:36', '0', '0', '0', '106', '156', '90', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (50, NULL, 'Guadalupe', 'Hernandez', 'RamÃ­rez', '1950-10-25', '386-752-0936', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Margarita Bajardo 6 Libertad', 'si', 'si', 'Mujer', NULL, 2, 4, 1, '2015-04-05 11:00:48', '0', '0', '0', '105', '145', '62', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (51, NULL, 'Raul', 'SÃ¡nchez', 'Rocha', '1943-07-28', '386-752-4382', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Emilio Portes Gil 33 El Verde San ignacio  ', '', 'si', 'Hombre', NULL, 2, 4, 1, '2015-04-05 11:00:21', '0', '0', '0', '100', '156', '72', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (52, NULL, 'Elvira ', 'Sanchez', 'Gomez', '1919-04-05', 'No tiene', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Ocampo 57 Copal Panteon', '', '', 'Mujer', NULL, 2, 4, 22, '2015-04-05 12:00:28', '0', '0', '0', '0', '160', '64', 'Aprobada', '', 'si', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (53, NULL, 'Esperanza', 'Leon', 'Navarro', '1946-09-08', '386-752-0951', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Vicente Guerrero 8 ', '', '', 'Mujer', NULL, 2, 4, 1, '2015-04-05 12:00:21', '0', '0', '0', '99', '150', '73', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (54, NULL, 'Miguel ', 'NuÃ±ez', 'Alvarado', '1940-09-29', '386-596-0402', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Emiliano Zapata 12 Teuchiteco', 'si', 'si', 'Hombre', NULL, 2, 4, 1, '2015-04-05 12:00:05', '0', '0', '0', '98', '150', '60', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (55, NULL, 'Jesus', 'Minuto', 'Vazquez', '1927-12-10', 'No tiene', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'DIAZ ORDAZ 101', '', '', 'Hombre', NULL, 2, 4, 31, '2015-04-05 12:00:22', '0', '0', '0', '100', '170', '80', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (56, NULL, 'Olivia', 'Hernandez', 'RamÃ­rez', '1950-06-09', '386-752-2635', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Loma Bonita 68', '', '', 'Mujer', NULL, 2, 4, 1, '2015-04-05 12:00:28', '0', '0', '0', '93', '163', '80', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (57, NULL, 'Maria Esther', 'Arce', 'Ulloa', '1945-09-30', '386-752-0085', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Emilio Carranza 59', '', '', 'Mujer', NULL, 2, 4, 1, '2015-04-05 12:00:41', '0', '0', '0', '110', '163', '97', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (58, NULL, 'Cecilia', 'German', 'Carrillo', '1955-05-07', '333-149-2151', 'MÃ©xico', 'Jalisco', 'AHUALULCO DE MERCADO', 'AHUALULCO DE MERCADO', 'Morelos 25-1', '', '', 'Mujer', NULL, 2, 4, 1, '2015-04-05 12:00:24', '0', '0', '0', '89', '139', '77.5', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (59, NULL, 'Regina', 'Ramos', 'Mariscal', '1937-05-25', '375-758-0890', 'MÃ©xico', 'Jalisco', 'Ameca', 'AMECA', 'Limon 12 Los Mesquitez', '', '', 'Mujer', NULL, 2, 21, 4, '2015-04-05 12:00:15', '0', '0', '0', '0', '0', '0', 'Aprobada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (60, NULL, 'Gregoria', 'GarcÃ­a', 'Hernandez', '1957-04-19', '386-752-2529', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'DÃ­az OrdÃ¡z 88', 'no', 'si', 'Mujer', NULL, 2, 22, 33, '2015-04-09 20:29:37', '', '', '', '', '150', '72', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (61, NULL, 'Victoriano ', 'Ibarra', 'Trigueros', '1965-10-05', '386-109-3695', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'Violetas 7', 'si', 'si', 'Hombre', NULL, 2, 22, 9, '2015-03-18 20:37:32', '', '', '', '', '169', '73', 'Aprobada', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (62, NULL, 'Juana Francisca', 'LopÃ©z', 'GarcÃ­a', '1927-08-21', '375-758-05-03', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Cuauhtemoc 55', '', '', 'Mujer', NULL, 2, 6, 7, '2015-02-20 20:42:33', '55', '43', '44', '64', '150', '75', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (63, NULL, 'Graciela', 'Bernal', 'OrtÃ­z', '1959-01-22', '375-758-7522', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Cerro del Ãguila 50', '', '', 'Mujer', NULL, 2, 23, 7, '2015-03-22 20:52:06', '69', '59', '45', '77', '155', '69', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (64, NULL, 'MarÃ­a del Carmen', 'Ventura', 'Martinez', '1941-09-16', '752-2066', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'LopÃ©z Mateo 44', '', '', 'Mujer', NULL, 2, 22, 31, '2015-03-17 20:57:56', '55', '50', '45', '160', '162', '105', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (65, NULL, 'Manuela', 'Gutierrez', 'XXX', '1937-08-10', '386-108-0345', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'Morelos 130', '', '', 'Mujer', NULL, 2, 22, 9, '2015-03-23 21:06:31', '75', '58', '55', '54', '150', '98', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (66, NULL, 'Gerarda', 'Martinez', 'Montes', '1917-10-03', '386-752-1327|', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'RamirÃ©z Lazo 122', '', '', 'Mujer', NULL, 2, 22, 34, '2015-03-13 21:09:40', '61', '49', '51', '46', '140', '45', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (67, NULL, 'Carmen', 'Mejia', 'Moreno', '1926-05-01', '752-0319', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', '16 de Septiembre 427', '', '', 'Mujer', NULL, 2, 22, 34, '2015-03-17 21:14:03', '67', '54', '51', '48', '163', '81', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (68, NULL, 'Pedro', 'PerÃ©z', 'Mena', '1936-12-04', '752-0293', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'AlvÃ¡ro Obregon 156', '', '', 'Hombre', NULL, 2, 22, 35, '2015-03-13 21:17:30', '72', '51', '45', '53', '170', '73', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (69, NULL, 'Eusebia', 'RodrÃ­guez ', 'GuzmÃ¡n', '1936-03-05', '386-752-0402', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'JuarÃ©z 222', '', '', 'Mujer', NULL, 2, 22, 34, '2015-03-17 21:21:32', '58', '55', '50', '42', '150', '55', 'Rechazada', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (70, NULL, 'Juan JosÃ©', 'Roque', 'Bravo', '1980-09-14', '375-758-1264', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Hospital 5', 'si', 'si', 'Hombre', NULL, 2, 6, 36, '2015-04-09 21:57:09', '', '', '', '', '', '', 'En espera', '', 'no', '', '', '');
INSERT INTO `paciente` VALUES (71, NULL, 'MarÃ­a del Refugio Erika', 'Gomez', 'Gonzalez', '1979-05-06', '384-101-2352', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'Javier Mina 112', '', '', 'Mujer', NULL, 2, 6, 8, '2015-04-07 22:06:09', '60', '56', '48', '44', '150', '85', 'En espera', '', 'no', NULL, NULL, NULL);
INSERT INTO `paciente` VALUES (72, NULL, 'Javier LÃ³pez Razo', 'LÃ³pez', 'Razo', '1980-07-10', '3336089969', 'MÃ©xico', 'Jalisco', 'Guadalajara', 'Guadalajara', 'Carlos Arevalo #', '', '', 'Hombre', NULL, 1, 24, 1, '2015-04-10 14:00:19', '', '', '', '', '', '', 'En espera', NULL, 'no', 'silla', '', '');
INSERT INTO `paciente` VALUES (73, NULL, 'Hector Yair', 'AviÃ±a', 'Aguayo ', '2002-10-09', '375 75 8 3970', 'MÃ©xico', 'Jalisco', 'Ameca', 'Los Angeles', 'Balbaneda 56', '', 'si', 'Hombre', NULL, 2, 6, 37, '2015-04-10 17:50:21', '55', '54', '44', '55', '160', '50', 'Aprobada', 'adecuada', 'no', 'silla', '', '');
INSERT INTO `paciente` VALUES (74, NULL, 'Daniel Alexander', 'Romero', 'Gonzalez', '2006-07-25', '373 73 8 9222', 'MÃ©xico', 'Jalisco', 'Tala', 'La mora', 'Beethoven 4', '', '', 'Hombre', NULL, 1, 6, 10, '2015-04-10 18:03:20', '', '', '', '', '', '21', 'En espera', '', 'no', 'andador', '28.5', '');
INSERT INTO `paciente` VALUES (75, NULL, 'Maria Leonides ', 'Medina ', 'Ruiz', '1920-11-20', '375 106 35 06', 'MÃ©xico', 'Jalisco', 'Ameca', 'La estancita', 'La estancita', '', '', 'Mujer', NULL, 2, 6, 7, '2015-04-10 18:33:48', '', '', '', '', '150', '60', 'En espera', NULL, NULL, 'andador', '1', '43.3');
INSERT INTO `paciente` VALUES (76, NULL, 'Juan JosÃ©', 'Roque ', 'Bravo', '1980-09-14', '3757581264', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca, Col. Centro', 'Hospital #5 ', '', 'si', 'Hombre', NULL, 2, 6, 10, '2015-04-09 09:51:45', '67', '34', '39', '37', '', '', 'En espera', NULL, NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (77, NULL, 'Adan ', 'GuzmÃ¡n ', 'Flores ', '1970-10-28', '386 104 90 33', 'MÃ©xico', 'Jalisco', 'Ahualulco', 'Ahualulco', 'Nicolas Bravo 323', 'si', 'si', 'Hombre', NULL, 2, 4, 1, '2015-03-13 10:00:09', '68', '47', '58', '50', '164', '84', 'En espera', '', 'no', 'silla', '', '');
INSERT INTO `paciente` VALUES (78, NULL, 'Maria Dolores', 'Tapia', 'Flores', '1943-05-07', '7581202', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Abasolo 108', 'no', 'si', 'Mujer', NULL, 2, 6, 35, '2015-04-11 12:14:43', '67', '61', '47', '62', '158', '106', 'Aprobada', '', 'no', 'andador', '', '');
INSERT INTO `paciente` VALUES (79, NULL, 'Miguel', 'Victor', 'Vazquez', '1925-09-29', '75 813 53', 'MÃ©xico', 'Jalisco', 'Ameca', 'Obrera', 'Guadalupe Victoria 13', '', 'si', 'Hombre', NULL, 2, 6, 22, '2015-04-11 13:00:20', '', '', '', '', '160', '55', 'En espera', NULL, 'no', '', '', '');
INSERT INTO `paciente` VALUES (80, NULL, 'Maria ', 'Garcia', 'Casiano', '1921-10-21', 'No tiene ', 'MÃ©xico', 'Jalisco', 'Ameca', 'Centro', 'Jaime Nuno 19 ', '', 'si', 'Mujer', NULL, 2, 6, 22, '2015-04-11 14:00:38', '35', '44.5', '49', '35', '', '', 'En espera', NULL, NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (81, NULL, 'RubÃ©n', 'Martinez', 'JimÃ©nez', '1936-12-11', '386999999999', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'Lopez Mateos 114', 'no', 'si', 'Hombre', NULL, 2, 6, 31, '2015-04-16 19:00:38', '', '', '', '', '', '', 'En espera', NULL, NULL, 'andador', '42.4', '');
INSERT INTO `paciente` VALUES (82, NULL, 'Juan', 'NuÃ±o', 'Palomares', '1927-01-01', '3867599999', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'DÃ­az Ordaz 105', 'no', 'no', 'Hombre', NULL, 2, 6, 31, '2015-04-23 19:00:18', '', '', '', '', '162', '75', 'En espera', NULL, NULL, 'andador', '40', '');
INSERT INTO `paciente` VALUES (83, NULL, 'Quintin', 'Mendoza', 'CÃ¡rdenas', '1946-01-01', '3757599999', 'MÃ©xico', 'MichoacÃ¡n', 'Morelia', 'Morelia', 'sin datos contactado en Central Camionera de ', 'no', 'si', 'Hombre', NULL, 2, 6, 31, '2015-05-01 09:30:02', '', '', '', '', '152', '85', 'En espera', NULL, NULL, 'andador', '', '');
INSERT INTO `paciente` VALUES (84, NULL, 'Pedro Daniel', 'Mendoza', 'Flores', '1984-08-10', '3757580956', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Madero 16, Colonia Centro 46600', 'Ya era', 'si', 'Hombre', NULL, 1, 6, 38, '2015-04-14 20:34:11', '', '', '', '', '170', '82', 'En espera', '', NULL, 'muletas', '', '48');
INSERT INTO `paciente` VALUES (85, NULL, 'Blanca Elizabeth', 'Ahumada', 'Zepeda', '1985-04-25', '3757583991', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Sauz 4', 'no', 'no', 'Mujer', NULL, 2, 6, 38, '2015-06-08 18:00:26', '', '', '', '', '', '', 'En espera', NULL, NULL, 'muletas', '', '52.5');
INSERT INTO `paciente` VALUES (86, NULL, 'Catalina', 'LÃ³pez', 'Franco', '1968-05-09', '3310449001', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', '2a Franco 2-A, colonia la Loma', 'no', 'si', 'Mujer', NULL, 2, 6, 11, '2015-05-24 13:00:19', '70', '55', '52', '36', '157', '58', 'En espera', NULL, NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (87, NULL, 'Luis Felipe', 'Curiel', 'PÃ©rez', '1995-04-22', '3861084030', 'MÃ©xico', 'Jalisco', 'Ahualulco de Mercado', 'Ahualulco de Mercado', 'Andador 5, Colonia VÃ­as de la EstaciÃ³n', 'no', 'si', 'Hombre', NULL, 2, 6, 39, '2015-05-28 18:00:44', '', '', '', '', '', '', 'En espera', '', NULL, 'muletas', '', '51');
INSERT INTO `paciente` VALUES (88, NULL, 'Miguel de JesÃºs', 'X', 'Malacara', '1984-04-19', '3751199395', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Corregidora 106-11', 'no', 'no', 'Hombre', NULL, 2, 6, 39, '2015-07-21 19:00:41', '', '', '', '', '156', '55', 'En espera', NULL, NULL, 'muletas', '', '47');
INSERT INTO `paciente` VALUES (89, NULL, 'Jose Agustin ', 'Martinez ', 'Rodriguez', '2005-05-28', '3751077270', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Constitucion 50', '', '', 'Hombre', NULL, 2, 26, 40, '2016-02-18 17:08:46', '64', '65', '58', '48', '1.78', '79.5', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (90, NULL, 'Juan Pablo de JesÃºs', 'Martinez ', 'de LeÃ³n', '1995-09-07', '3757559429', 'MÃ©xico', 'Jalisco', 'Ameca', 'Ameca', 'Esmeralda 7', '', '', 'Hombre', NULL, 2, 6, 10, '2016-02-16 08:00:39', '44', '47.5', '39', '84', '', '45', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (91, NULL, 'MARIA DEL CARMEN', 'FREGOSO', 'LANDEROS', '1947-01-21', '375-75-827-99', 'MÃ©xico', 'Jalisco', 'AMECA', 'JALISCO', 'HACIENDA SAN FRANCISCO # 38', '', '', 'Mujer', NULL, 2, 6, 41, '2016-02-25 20:10:32', '67', '61', '58', '63', '150', '79', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (92, NULL, 'JOSE DE JESUS', 'PULIDO ', 'GONZALEZ', '1995-10-13', '375-108-73-54', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'JAVIER MINA # 13', '', '', 'Hombre', NULL, 2, 6, 42, '2016-02-29 20:25:56', '', '', '', '', '', '', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (93, NULL, 'JULIO CESAR', 'VIORATO', 'GARCIA', '1992-08-30', '375-106-26-22', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'LIBRADO CORONA # 51', '', '', 'Hombre', NULL, 2, 27, 43, '2016-02-27 20:34:54', '66', '52', '52', '46', '178', '65', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (94, NULL, 'ESTHER', 'HERRERA ', 'DOMINGUEZ', '1955-08-12', '386-75-702-51', 'MÃ©xico', 'Jalisco', 'SAN MARCO', 'SAN MARCOS', 'MERCADO # 11', '', '', 'Mujer', NULL, 2, 29, 13, '2016-02-22 20:57:16', '66', '52', '73', '38', '155', '60', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (95, NULL, 'VICENTE', 'VARGAS', 'HERNANDEZ', '1949-09-23', '75-704-38', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'HIDALGO # 32', '', '', 'Hombre', NULL, 2, 29, 9, '2016-02-22 21:03:47', '65', '55', '61', '45', '170', '64', 'Rechazada', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (96, NULL, 'AURORA', 'AMEZQUITA', 'SANCHEZ', '1928-05-25', '386-109-33-31', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'ITURBIDE # 29', '', '', 'Mujer', NULL, 2, 29, 4, '2016-02-22 21:10:06', '', '', '', '', '142', '47', 'En espera', '', NULL, 'andador', '34', '');
INSERT INTO `paciente` VALUES (97, NULL, 'SELEDONIO', 'RODRIGUEZ', 'MONJO', '1920-03-03', '75-705-60', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'ABASOLO # 25-A', '', '', 'Hombre', NULL, 2, 29, 44, '2016-02-22 21:14:37', '63', '55', '61', '43', '162', '88', 'Aprobada', '', NULL, 'andador', '', '');
INSERT INTO `paciente` VALUES (98, NULL, 'REFUGIO ', 'GOMEZ', 'GUTIERREZ', '1931-07-04', '386-75-70-561', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'ITURBIDE # 42', '', '', 'Mujer', NULL, 2, 29, 4, '2016-02-22 21:19:24', '60', '51', '43', '38', '142', '56', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (99, NULL, 'MARIA DOLORES', 'JUAREZ ', 'NERVAIS', '1928-03-30', '386-75-705-32', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'NOGAL # 31', '', '', 'Mujer', NULL, 2, 29, 20, '2016-02-22 21:21:55', '60', '60', '50', '50', '150', '65', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (100, NULL, 'CARMEN', 'GARIBAY', 'GALLARDO', '1941-11-11', '386-75-702-82', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'ITURBIDE # 44', '', '', 'Mujer', NULL, 2, 29, 7, '2016-02-22 21:25:37', '61', '59', '52', '54', '145', '70', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (101, NULL, 'CARLOS', 'SANCHEZ', '.', '1936-06-17', '386-109-33-31', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'ITURBIDE # 66', '', '', 'Hombre', NULL, 2, 29, 44, '2016-02-22 21:29:05', '', '', '', '', '168', '58', 'Aprobada', '', NULL, 'andador', '41', '');
INSERT INTO `paciente` VALUES (102, NULL, 'MARIA GUADALUPE', 'ALVAREZ', 'GOMEZ', '2003-07-13', '3867570088', 'MÃ©xico', 'Jalisco', 'SAN MARCOS', 'SAN MARCOS', 'DIONISIO CURIEL # 14', '', '', 'Mujer', NULL, 2, 30, 25, '2016-02-08 19:00:43', '45', '45', '52', '34', '142', '35', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (103, NULL, 'VICTOR DANIEL ', 'MENDOZA', 'PEREZ', '1990-12-31', '375-758-8362', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'NICOLAS BRAVO $ 51', '', '', 'Hombre', NULL, 2, 6, 45, '2016-03-03 19:38:32', '65', '56', '55', '48', '190', '95', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (104, NULL, 'SIMON ', 'MEDINA ', 'PULIDO', '1946-07-01', '375-100-9252', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'EMILIANO ZAPATA # 04', '', '', 'Hombre', NULL, 2, 27, 46, '2016-02-18 19:43:11', '67', '56', '57', '42', '166', '87', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (105, NULL, 'SAMUEL ', 'MAYORAL ', 'EVANGELISTA', '1959-04-19', '375-105-4571', 'MÃ©xico', 'Jalisco', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', 'LIBERTAD # 7', '', '', 'Hombre', NULL, 2, 32, 27, '2016-03-03 19:51:50', '', '', '', '', '', '', 'Aprobada', '', NULL, 'andador', '40', '');
INSERT INTO `paciente` VALUES (106, NULL, 'MARIA TRINIDAD', 'LOPEZ', 'DIAZ', '1927-06-14', '375-105-4571', 'MÃ©xico', 'Jalisco', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', 'MORELOS # 82', '', '', 'Mujer', NULL, 2, 32, 47, '2016-03-03 20:03:03', '', '', '', '', '158', '65', 'Aprobada', '', NULL, 'andador', '36', '');
INSERT INTO `paciente` VALUES (107, NULL, 'MANUEL', 'PALAFOX', 'RAMIREZ', '1971-06-10', '384-73-38-199', 'MÃ©xico', 'Jalisco', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', 'JESUS LANDEROS # 6', '', '', 'Hombre', NULL, 2, 32, 48, '2016-03-03 20:08:09', '66', '54', '52', '46', '156', '66', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (108, NULL, 'LOURDES DEL ROSARIO', 'MOYA', 'MORENO', '1999-01-24', '385-75-508-53', 'MÃ©xico', 'Jalisco', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', 'LEANDRO VALLE # 14', '', '', 'Mujer', NULL, 2, 32, 10, '2016-03-03 20:12:00', '50', '40', '37', '32', '154', '23.50', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (109, NULL, 'EDY ALBERTO', 'MEDINA', 'AMADOR', '1978-04-05', '385-75-587-35', 'MÃ©xico', 'Jalisco', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', 'RAMON CORONA # 18', '', '', 'Hombre', NULL, 2, 32, 49, '2016-03-04 20:14:25', '60', '50', '40', '65', '165', '89', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (110, NULL, 'J. SANTOS ', 'BAÃ‘UELOS ', 'NUÃ‘EZ', '1963-07-24', '3311682556', 'MÃ©xico', 'Jalisco', 'AMECA', 'AHUALULCO', 'SANTA MARIA #52-1', '', '', 'Hombre', NULL, 2, 33, 50, '2016-03-04 20:14:25', '66', '55', '51', '46', '170', '60', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (111, NULL, 'TEODORA', 'REYES', 'BRAMASCO', '1949-03-17', '327-11-022-83', 'MÃ©xico', 'Jalisco', 'AHUALULCO', 'AHUALULCO', 'LEONA VICARIO # 1-1', '', '', 'Mujer', NULL, 2, 33, 31, '2016-03-04 20:24:43', '60', '54', '50', '55', '148', '70', 'Rechazada', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (112, NULL, 'ALFREDO', 'MARTINEZ', 'ORNELAS', '1963-12-20', '386-100-2693', 'MÃ©xico', 'Jalisco', 'AHUALULCO', 'AHUALULCO', 'AMADO NERVO # 111', '', '', 'Hombre', NULL, 2, 33, 9, '2016-03-04 20:26:49', '80', '59', '57', '55', '172', '75', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (113, NULL, 'ESTHER', 'LOPEZ', 'TAPIA', '1946-02-25', '33-81-06-15-01', 'MÃ©xico', 'Jalisco', 'AHUALULCO', 'AHUALULCO', 'DIAZ ORDAZ # 96', '', '', 'Mujer', NULL, 2, 33, 13, '2016-03-04 20:28:57', '71', '61', '55', '64', '156', '63', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (114, NULL, 'LUCILA', 'ACOSTA ', 'CRUZ', '1962-09-18', '386-103-56-13', 'MÃ©xico', 'Jalisco', 'AHUALULCO', 'AHUALULCO', 'MORELOS # 115', '', '', 'Mujer', NULL, 2, 33, 51, '2016-03-04 20:31:07', '74', '57', '55', '68', '158', '111', 'Rechazada', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (115, NULL, 'EFRAIN ', 'ORNELAS ', 'PIMIENTA', '1955-03-03', '386-75-405-06', 'MÃ©xico', 'Jalisco', 'SAN JUANITO DE ESCOBEDO', 'SAN JUANITO DE ESCOBEDO', 'MADERO # 86', '', '', 'Hombre', NULL, 2, 34, 9, '2016-03-03 20:35:42', '71', '59', '54', '103', '168', '76', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (116, NULL, 'JAIME DANIEL', 'HERNANDEZ', 'HERNANDEZ', '1987-05-25', '33-12-66-32-27', 'MÃ©xico', 'Jalisco', 'SAN JUANITO DE ESCOBEDO', 'SAN JUANITO DE ESCOBEDO', 'MATAMOROS # 18', '', '', 'Hombre', NULL, 2, 34, 52, '2016-03-03 20:37:52', '67', '56', '56', '44', '187', '90', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (117, NULL, 'ANGEL GABRIEL', 'RUELAS ', 'GONZALEZ', '2010-04-20', '75-403-13', 'MÃ©xico', 'Jalisco', 'SAN JUANITO DE ESCOBEDO', 'SAN JUANITO DE ESCOBEDO', '16 DE SEPTIEMBRE # 91', '', '', 'Hombre', NULL, 2, 34, 53, '2016-03-03 20:42:02', '45', '38', '35', '70', '112', '26', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (118, NULL, 'JUANA ', 'LOPEZ ', 'AYON', '1945-10-14', '75-219-74', 'MÃ©xico', 'Jalisco', 'SAN JUANITO DE ESCOBEDO', 'SAN JUANITO DE ESCOBEDO', 'DIAZ ORDAZ # 49', '', '', 'Mujer', NULL, 2, 34, 54, '2016-03-03 20:44:58', '', '', '', '', '', '', 'Aprobada', '', NULL, 'andador', '38', '');
INSERT INTO `paciente` VALUES (119, NULL, 'SOFIA', 'ALVAREZ', 'TOVAR', '1962-09-18', '33-11-902-724', 'MÃ©xico', 'Jalisco', 'TEQUILA', 'TEQUILA', 'NICOLAS BRAVO # 240', '', '', 'Mujer', NULL, 2, 35, 9, '2016-03-03 20:48:55', '62', '57', '49', '42', '', '', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (120, NULL, 'ELIAS', 'DE LA TORRE', 'LOPEZ', '1928-07-20', '374-74-231-50', 'MÃ©xico', 'Jalisco', 'TEQUILA', 'TEQUILA', 'MAIZ # 53', '', '', 'Hombre', NULL, 2, 35, 34, '2016-03-03 20:51:15', '57', '57', '51', '45', '171', '69', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (121, NULL, 'FERNANDO', 'RODRIGUEZ', 'PULIDO', '1961-05-31', '33-12-06-76-26', 'MÃ©xico', 'Jalisco', 'TEQUILA', 'TEQUILA', 'PRIVADA RAMON CORONA # 2', '', '', 'Hombre', NULL, 2, 35, 42, '2016-03-03 20:53:06', '70', '61', '55', '51', '167', '97', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (122, NULL, 'SANDRA ESMERALDA', 'CASTRO', 'PRECIADO', '1990-09-17', '33-16-21-49-98', 'MÃ©xico', 'Jalisco', 'TEQUILA', 'TEQUILA', 'JUAN JIMENEZ # 49', '', '', 'Mujer', NULL, 2, 35, 42, '2016-03-03 20:55:09', '58', '60', '52', '47', '172', '70', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (123, NULL, 'ROSAURA', 'GARCIA', 'SAUCEDO', '1963-12-30', '374-74-263', 'MÃ©xico', 'Jalisco', 'TEQUILA', 'TEQUILA', 'PRIVADA RAMON CORONA # 14', '', '', 'Mujer', NULL, 2, 35, 42, '2016-03-03 20:57:26', '56', '56', '48', '37', '156', '65', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (124, NULL, 'YAZMIN LIZETH', 'NAJAR', 'TORRES', '1993-03-30', '374-100-31-94', 'MÃ©xico', 'Jalisco', 'TEQUILA', 'TEQUILA', 'GARDENIA # 69', '', '', 'Mujer', NULL, 2, 35, 10, '2016-03-03 20:59:31', '56', '34', '50', '45', '150', '55', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (125, NULL, 'MARIA DE JESUS', 'FLORES ', 'MARTINEZ', '1932-01-13', '375-125-25-43', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'BRILLANTE # 53', '', '', 'Mujer', NULL, 2, 36, 20, '2016-02-26 21:08:10', '65', '60', '47', '34', '151', '50', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (126, NULL, 'ANTONIA ', 'RUELAS', 'JIMENEZ', '1959-01-17', '375-102-56-95', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'VALLE DE GUADALUPE # 3', '', '', 'Mujer', NULL, 2, 36, 9, '2016-03-02 21:11:20', '53', '55', '43', '40', '152', '67', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (127, NULL, 'JESUS SANTIAGO', 'DIAZ', 'ORTIZ', '2003-08-21', '3751069098', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'HACIENDA EL CABEZON 114 B', '', '', 'Hombre', NULL, 2, 37, 55, '2016-03-02 01:26:07', '', '', '', '', '', '', 'En espera', '', NULL, 'muletas', '', '42.5');
INSERT INTO `paciente` VALUES (128, NULL, 'IGNACIO', 'MERIN ', 'CARDENAS', '1923-07-23', '331-271-2764', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'HOSPITAL # 55', '', '', 'Hombre', NULL, 2, 36, 20, '2016-03-08 19:27:46', '55', '46', '46', '35', '158', '51', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (129, NULL, 'ANTONIA', 'TAPIA', 'N', '1931-06-15', '758-18-77', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'PASTOR # 4', '', '', 'Mujer', NULL, 2, 38, 56, '2016-03-09 19:34:30', '62', '53', '56', '48', '147', '77', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (130, NULL, 'ESTELA', 'VALDEZ ', 'DONATO', '1948-06-11', '386-105-40-66', 'MÃ©xico', 'Jalisco', 'SAN JUANITO DE ESCOBEDO', 'SAN JUANITO DE ESCOBEDO', 'LAURELES # 9', '', '', 'Mujer', NULL, 2, 39, 57, '2016-03-10 19:48:23', '57', '52', '49', '45', '150', '67', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (131, NULL, 'BENITO', 'HERRERA', 'TORRES', '1977-03-21', '3311-036-124', 'MÃ©xico', 'Jalisco', 'AHUALULCO', 'AHUALULCO', 'PRIVADA SOLEDAD # 9', '', '', 'Hombre', NULL, 2, 39, 9, '2016-03-10 19:52:08', '61', '60', '56', '52', '175', '73', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (132, NULL, 'ESTELA ', 'RODRIGUEZ', 'N', '1950-12-10', '384-73-81-763', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'CUAUHTEMOC # 31', '', '', 'Mujer', NULL, 2, 40, 58, '2016-03-05 19:58:35', '60', '45', '40', '60', '160', '78', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (133, NULL, 'JOSE MARTIN ', 'GOMEZ', 'GOMEZ', '1965-08-12', '384-104-08-45', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'JOSEFA ORTIZ # 13', '', '', 'Hombre', NULL, 2, 40, 9, '2016-03-05 20:03:43', '55', '50', '40', '50', '165', '60', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (134, NULL, 'MARIA ', 'VAZQUEZ', 'VILLA', '1937-08-22', '384-73-82-270', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', '20 DE NOVIEMBRE # 76', '', '', 'Mujer', NULL, 2, 40, 59, '2016-03-05 20:06:37', '45', '48', '40', '45', '160', '56', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (135, NULL, 'MAXIMINA', 'SANTANA', 'LARA', '1928-05-13', '384-11-52-993', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'BELISARIO DOMINGUEZ # 13', '', '', 'Mujer', NULL, 2, 40, 60, '2016-03-05 20:12:09', '40', '40', '35', '40', '143', '40', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (136, NULL, 'EFRAIN', 'FAUSTO', 'ROMANO', '1941-08-02', '384-100-34-71', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'MEXICO # 21', '', '', 'Hombre', NULL, 2, 40, 31, '2016-03-05 20:15:20', '55', '50', '48', '52', '165', '70', 'En espera', NULL, NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (137, NULL, 'ROBERTO ', 'VELAZQUEZ', 'ALDAZ', '1940-07-07', '384-738-0962', 'MÃ©xico', 'Jalisco', 'TALA', 'OBRERA', '16 DE SEPTIEMBRE # 62', '', '', 'Hombre', NULL, 2, 40, 9, '2016-03-05 20:12:49', '65', '60', ' ', '70', '145', '85', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (138, NULL, 'MARIA DEL REFUGIO', 'CASAS', 'TRUJILLO', '1959-04-24', '384-72-82-054', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'INDEPENDENCIA # 22', '', '', 'Mujer', NULL, 2, 40, 13, '2016-03-05 20:17:47', '55', '50', '46', '55', '167', '78', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (139, NULL, 'MARTHA LOURDES', 'SIGALA', 'RIVERA', '1961-02-26', '331-638-1043', 'MÃ©xico', 'Jalisco', 'TALA', 'EL REFUGIO', 'MEXICO # 127', '', '', 'Mujer', NULL, 2, 40, 13, '2016-03-05 20:21:38', '40', '50', '40', '50', '155', '54', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (140, NULL, 'PERFECTO', 'HERRERA', 'TORRES', '1952-06-27', '384-109-3584', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'FRANCISCO VILLA # 48', '', '', 'Hombre', NULL, 2, 40, 9, '2016-03-05 20:29:05', '55', '48', '43', '50', '163', '65', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (141, NULL, 'MARIA ESTELA', 'GONZALEZ ', 'SILVA', '1939-02-26', '384-107-5655', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', 'MANUEL I GOMEZ # 22, BARRIO ALTO', '', '', 'Mujer', NULL, 2, 40, 57, '2016-03-05 20:30:22', '70', '40', '40', '63', '155', '60', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (142, NULL, 'JOSEFINA', 'PADILLA', 'RODRIGUEZ', '1936-06-30', '3311-2689-28', 'MÃ©xico', 'Jalisco', 'Tala', 'Tala', 'CIRCUITO DE LOS LAURELES # 101', '', '', 'Mujer', NULL, 2, 40, 20, '2016-03-05 20:30:48', '70', '40', '40', '60', '152', '70', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (143, NULL, 'MARIA GUADALUPE', 'LARA', 'AMEZCUA', '1930-03-28', '', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', 'PINOS # 24 COLONIA JARAMILLO', '', '', 'Mujer', NULL, 2, 40, 31, '2016-03-05 00:00:00', '46', '38', '39', '51', '145', '52', 'Aprobada', 'CAMINA Y NO ES NECESARIA LA SILLA DE RUEDAS', NULL, 'andador', '', '');
INSERT INTO `paciente` VALUES (144, NULL, 'MICAELA', 'OLVERA ', 'DE LEON', '1923-11-08', '375-100-9255', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ALTEÃ‘A # 8', '', '', 'Mujer', NULL, 2, 4, 44, '2016-03-08 20:38:03', '53', '52', '49', '50', '145', '72', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (145, NULL, 'YOSELINE', 'MORA', 'GOMEZ', '1997-02-05', '33-19-61-56-06', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ANTONIO OLVERA # 26', '', '', 'Mujer', NULL, 2, 4, 10, '2016-03-08 20:39:56', '54', '49', '41', '28', '141', '30', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (146, NULL, 'LEONCIO ', 'MEDINA', 'RUIZ', '1951-08-22', '375-103-7781', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'J. GUADALUPE VAZQUEZ # 129, COLONIA CENTRO', '', '', 'Hombre', NULL, 2, 4, 61, '2016-03-04 20:39:53', '', '', '', '', '', '', 'Rechazada', '', NULL, 'andador', '46', '');
INSERT INTO `paciente` VALUES (147, NULL, 'ARCELIA', 'PACHECO', 'VALENZUELA', '1966-02-20', '375-105-4783', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'MADERO # 18-B', '', '', 'Mujer', NULL, 2, 4, 41, '2016-03-08 20:41:39', '72', '54', '46', '50', '152', '75', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (148, NULL, 'DIEGO', 'MARISCAL', 'RUIZ', '1990-07-22', '375-106-5945', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'DOMINGO FAUSTO # 51', '', '', 'Hombre', NULL, 2, 4, 62, '2016-03-07 20:44:53', '67', '60', '59', '41', '167', '75', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (149, NULL, 'ROSALIO', 'FLORES', 'GRANADOS', '1929-04-20', '375-101-2338', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'GALEANA # 14', '', '', 'Hombre', NULL, 2, 4, 34, '2016-03-07 20:49:17', '63', '54.5', '48', '47', '160', '61', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (150, NULL, 'ANTONIO ', 'SANDOVAL', 'LOPEZ', '1941-02-22', '375-758-2823', 'MÃ©xico', 'Jalisco', 'AMECA', 'CENTRO', 'TOLUQUILLA # 57', '', '', 'Hombre', NULL, 2, 4, 34, '2016-03-04 20:48:55', '61', '59', '49', '48', '160', '75', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (151, NULL, 'MARIA ISABEL', 'RIVAS', 'MEDINA', '1932-11-20', '375-105-0681', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'EMILIANO ZAPATA # 23', '', '', 'Mujer', NULL, 2, 4, 34, '2016-03-05 20:52:27', '59', '61', '49', '44', '142', '45', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (152, NULL, 'JOSE MANUEL', 'RAMOS', 'MARISCAL', '1968-10-02', '375-102-2990', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ALLENDE # 16', '', '', 'Hombre', NULL, 2, 4, 9, '2016-03-06 20:54:00', '69', '56', '50', '62', '190', '102', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (153, NULL, 'CAMERINA ', 'RUIZ', 'GARCIA', '1930-08-22', '375-118-2092', 'MÃ©xico', 'Jalisco', 'AMECA', 'CENTRO', 'J. GUADALUPE VAZQUEZ # 129', '', '', 'Mujer', NULL, 2, 4, 58, '2016-03-07 20:54:26', '49', '40', '42', '32', '130', '38', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (154, NULL, 'MARIA DEL ROSARIO', 'GOMEZ', 'C.', '1945-08-12', '375-119-5763', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'HIDALGO # 31', '', '', 'Mujer', NULL, 2, 4, 9, '2016-03-06 20:55:40', '61', '60', '51', '62', '139', '45', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (155, NULL, 'FIDENCIO', 'RODRIGUEZ', 'RODRIGUEZ', '1936-11-26', '375-7440-270', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'LOPEZ MATEOS # 6', '', '', 'Hombre', NULL, 2, 4, 9, '2016-03-04 20:57:11', '77', '57', '57', '40', '173', '83', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (156, NULL, 'JESICA', 'CRUZ ', 'LIRA', '2003-04-16', '734-110-3838', 'MÃ©xico', 'Jalisco', 'AMECA', 'LA ESPERANZA', 'AV. PATRIA # 1500', '', '', 'Mujer', NULL, 2, 4, 24, '2016-03-08 20:59:04', '45', '38', '37', '27', '121', '27', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (157, NULL, 'PONCIANO', 'CAMARENA', 'COLIMA', '1930-04-20', '3751115824', 'MÃ©xico', 'Jalisco', 'AMECA', 'HUERTA DE SAN JAVIER ', 'LAZARO CARDENAS 14, ', '', '', 'Hombre', NULL, 2, 4, 34, '2016-03-09 00:00:00', '', '', '', '', '156', '65', 'Aprobada', '', NULL, '', '36.8', '');
INSERT INTO `paciente` VALUES (158, NULL, 'ESTELA', 'PEREZ', 'MENA', '1948-01-05', '375-103-7781', 'MÃ©xico', 'Jalisco', 'AMECA', 'HUERTA DE SAN JAVIER ', 'ANASTACIO RODRIGUEZ # 27', '', '', 'Mujer', NULL, 2, 4, 34, '2016-03-09 21:02:56', '', '', '', '', '', '', 'En espera', '', NULL, 'andador', '39', '');
INSERT INTO `paciente` VALUES (159, NULL, 'RAMON ', 'GARCIA', 'RUIZ', '1959-06-15', '375-111-6635', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'INDEPENDENCIA # 99', '', '', 'Hombre', NULL, 2, 4, 9, '2016-03-10 21:06:55', '57', '49', '46', '42', '150', '50', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (160, NULL, 'ERNESTO', 'PEÃ‘A', 'SOLORZANO', '1961-02-25', '375-104-28-00', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ABASOLO # 98-B', '', '', 'Hombre', NULL, 2, 4, 8, '2016-03-07 21:08:33', '72', '58', '56', '55', '168', '63', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (161, NULL, 'LOURDES JANNETH', 'PAREDES ', 'CRUZ', '1991-09-23', '375-100-1617', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', '15 DE SEPTIEMBRE 22, COLONIA SANTA CECILIA', '', '', 'Mujer', NULL, 2, 4, 13, '2016-03-05 21:08:47', '', '', '', '', '154', '51', 'Aprobada', '', NULL, 'andador', '40', '');
INSERT INTO `paciente` VALUES (162, NULL, 'GABRIEL', 'GONZALEZ', 'JIMENEZ', '1947-02-18', '044-375-104-6440', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'J. JESUS MONROY # 05', '', '', 'Hombre', NULL, 2, 4, 62, '2016-03-07 19:54:33', '', '', '', '', '165', '63', 'Aprobada', '', NULL, 'andador', '46.8', '');
INSERT INTO `paciente` VALUES (163, NULL, 'RAFAEL', 'ORTIZ', 'CURIEL', '1919-12-24', '375-125-9987', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'HIDALGO # 13', '', '', 'Hombre', NULL, 2, 4, 34, '2016-03-07 19:58:06', '', '', '', '', '152', '60', 'Aprobada', '', NULL, 'andador', '40', '');
INSERT INTO `paciente` VALUES (164, NULL, 'MARIA CONCEPCION', 'MEDINA', 'GARCIA', '1940-05-25', '375-108-7393', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'JESUS MONROY # 3-A', '', '', 'Mujer', NULL, 2, 6, 20, '2016-03-08 20:00:01', '66', '53', '50', '50', '149', '91.5', 'En espera', '', NULL, 'silla', '37.6', '43');
INSERT INTO `paciente` VALUES (165, NULL, 'EVA', 'LLAMAS', 'SANDOVAL', '1928-07-15', '375-103-9275', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'PEDRO GUILLEN # 14', '', '', 'Mujer', NULL, 2, 4, 34, '2016-03-07 20:06:54', '52', '50', '47', '40', '155', '68', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (166, NULL, 'SALVADOR ', 'MARISCAL', 'CHAVARIN', '1928-11-16', '33-35-55-29-57', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', '16 DE SEPTIEMBRE # 14', '', '', 'Hombre', NULL, 2, 4, 34, '2016-03-07 20:09:04', '61', '50', '48', '52', '145', '56', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (167, NULL, 'MARIA DEL REFUGIO', 'MOYA', 'MARISCAL', '1932-06-05', '375-106-3356', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'CUAUHTEMOC # 4', '', '', 'Mujer', NULL, 2, 4, 34, '2016-03-07 20:11:18', '53', '47', '43', '38', '152', '58', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (168, NULL, 'SANTIAGO', 'SILVA', 'DEL ALTO', '1942-04-11', '375-100-0992', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ALDAMA # 1-A', '', '', 'Hombre', NULL, 2, 4, 57, '2016-03-10 20:13:24', '50', '53', '45', '45', '150', '50', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (169, NULL, 'FELICITAS ', 'PEREZ', 'JIMENEZ', '1946-01-14', '375-101-9177', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'JUAREZ # 18', '', '', 'Mujer', NULL, 2, 4, 7, '2016-03-07 20:15:06', '61', '47', '40', '66', '152', '77', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (170, NULL, 'MARIA DEL ROSARIO', 'PEREZ', 'JIMENEZ', '1934-11-28', '375-106-1595', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'INDEPENDENCIA # 10', '', '', 'Mujer', NULL, 2, 4, 7, '2016-03-07 20:17:02', '61', '51', '45', '60', '150', '72', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (171, NULL, 'Marlene', 'Gaona', 'Salmeron', '1989-04-13', '1111111111', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Tequesquite', 'independencia 56', '', '', 'Mujer', NULL, 1, 41, 63, '2016-03-01 00:00:00', '110', '44', '45', '41', '159', '60', 'Aprobada', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (172, NULL, 'ANTONIA', 'GALINDO', 'CASTAÃ‘EDA', '1953-07-12', '386-105-6601', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'EL CAPULIN S/N', '', '', 'Mujer', NULL, 2, 41, 62, '2016-03-01 20:33:22', '43', '63', '54', '40', '150', '63', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (173, NULL, 'FELIPE DE JESUS', 'RODRIGUEZ', 'CESEÃ‘A', '1951-05-02', '386-105-4497', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'JAVIER MINA # 112', '', '', 'Hombre', NULL, 2, 41, 34, '2016-03-01 20:35:48', '45', '54', '56', '47', '180', '77', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (174, NULL, 'ROCIO GUADALUPE', 'CASTAÃ‘EDA', 'CENICEROS', '1991-10-14', '386-104-1466', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'DEGOLLADO # 22-A', '', '', 'Mujer', NULL, 2, 41, 25, '2016-03-01 20:38:04', '44', '52', '40', '55', '133', '74', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (175, NULL, 'MARIA CONCEPCION', 'RAMIREZ', 'RUBIO', '1956-12-08', '386-105-4497', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'JAVIER MINA # 112', '', '', 'Mujer', NULL, 2, 41, 54, '2016-03-01 20:40:08', '46', '56', '43', '60', '165', '93', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (176, NULL, 'KAREN GUADALUPE', 'VEGA ', 'MURILLO', '2002-06-12', '386-104-9602', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'DEGOLLADO # 3-B', '', '', 'Mujer', NULL, 2, 41, 64, '2016-03-01 20:42:08', '31', '34', '32', '34', '100', '14', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (177, NULL, 'ANA', 'AMEZQUITA', 'ZAMBRANO', '1976-03-01', '386-108-7665', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'JUAREZ # 47', '', '', 'Mujer', NULL, 2, 41, 62, '2016-03-01 20:45:15', '', '', '', '', '140', '78', 'Aprobada', '', NULL, 'andador', '38', '');
INSERT INTO `paciente` VALUES (178, NULL, 'EPIFANIA', 'ROBLES', 'PANUCO', '1933-01-12', '33-21-89-44-32', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'CORREGIDORA # 2', '', '', 'Mujer', NULL, 2, 41, 65, '2016-03-01 20:47:23', '', '', '', '', '160', '60', 'Aprobada', '', NULL, 'andador', '38', '');
INSERT INTO `paciente` VALUES (179, NULL, 'JOSE ', 'AMEZQUITA', 'MOTA', '1930-03-05', '386-108-7665', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'JUAREZ # 47', '', '', 'Hombre', NULL, 2, 41, 62, '2016-03-01 20:51:14', '', '', '', '', '168', '68', 'Aprobada', '', NULL, 'andador', '40', '');
INSERT INTO `paciente` VALUES (180, NULL, 'ARISTEO', 'MIRAMONTES', 'CURIEL', '1946-09-03', '744-54-42', 'MÃ©xico', 'Jalisco', 'Hostotipaquillo', 'Hostotipaquillo', 'OCAMPO # 1', '', '', 'Hombre', NULL, 2, 41, 54, '2016-03-01 20:53:01', '', '', '', '', '176', '93', 'En espera', '', NULL, 'muletas', '', '53');
INSERT INTO `paciente` VALUES (181, NULL, 'JESUS', 'OROZCO', 'RODRIGUEZ', '1928-08-13', '733-3456', 'MÃ©xico', 'Jalisco', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', '16 DE SEPTIEMBRE # 30', '', '', 'Hombre', NULL, 2, 32, 66, '2016-03-14 20:57:37', '65', '54', '52', '36', '159', '87', 'Rechazada', 'Camina aÃºn ayudado por andador y en ocasiones muletas, no requiere silla de ruedas', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (182, NULL, 'RAFAEL', 'ROBLES', 'BECERRA', '1949-12-17', '375-119-5963', 'MÃ©xico', 'Jalisco', 'SAN MARTIN HIGALGO', 'SAN MARTIN HIDALGO', 'VIZCAINO # 82', '', '', 'Hombre', NULL, 2, 32, 50, '2016-03-14 21:00:38', '65', '56', '43', '38', '180', '65', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (183, NULL, 'FRANCISCA', 'RIVERA', 'RODRIGUEZ', '1942-10-10', '374-745-1213', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'ALGIBER # 28', '', '', 'Mujer', NULL, 2, 4, 4, '2016-02-29 20:34:27', '48', '45', '48', '101', '156', '78', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (184, NULL, 'DAVID', 'RAMOS', 'SALDIVAR', '1973-06-08', '374-745-1213', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'SAN DAVID GALVAN # 75', '', '', 'Hombre', NULL, 2, 42, 23, '2016-02-29 20:37:08', '83', '59', '59', '58', '165', '82', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (185, NULL, 'DAVID', 'CONTRERAS ', 'TORRES', '1959-05-18', '374-745-1213', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'LERDO DE TEJADA # 5', '', '', 'Hombre', NULL, 2, 42, 8, '2016-02-29 20:40:13', '59', '56', '52', '60', '160', '110', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (186, NULL, 'OSVALDO', 'BERUMEN', 'TORRES', '1977-03-23', '374-745-1213', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'LA PAZ # 16', '', '', 'Hombre', NULL, 2, 42, 67, '2016-02-29 20:42:58', '40', '50', '60', '46', '160', '55', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (187, NULL, 'TORIBIA', 'DIAZ', 'MARQUEZ', '1947-03-23', '374-745-1213', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'ABASOLO # 98', '', '', 'Mujer', NULL, 2, 42, 4, '2016-02-26 20:47:48', '70', '60', '52', '42', '168', '72', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (188, NULL, 'ALBERTO', 'RIVERA', 'RODRIGUEZ', '1949-11-05', '374-745-1213', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'AGUA FRIA EMILIO RIVERA # 43', '', '', 'Hombre', NULL, 2, 42, 4, '2016-02-29 20:49:39', '54', '59', '51', '95', '167', '80', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (189, NULL, 'BAUDELIA', 'ALVARADO', 'LAZCARRO', '1931-06-21', '374-745-1213', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'ALTAMIRA # 14-A', '', '', 'Mujer', NULL, 2, 42, 4, '2016-02-29 20:51:39', '55', '60', '57', '80', '165', '69', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (190, NULL, 'SOFIA ', 'CALDERON ', 'ROSALES', '1945-09-30', '374-745-0328', 'MÃ©xico', 'Jalisco', 'AMATITAN', 'AMATITAN', 'CAPILLA # 19', '', '', 'Mujer', NULL, 2, 42, 68, '2016-02-29 20:54:06', '65', '58', '52', '68', '164', '78', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (191, NULL, 'NOEMI GUADALUPE', 'CAMACHO ', 'LIZAOLA', '2010-06-09', '758-0796', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ROCHA GARIBAY # 30', '', '', 'Mujer', NULL, 2, 37, 10, '2016-03-18 20:56:47', '40', '34', '32', '22', '100', '20', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (192, NULL, 'HORTENCIA', 'GUERRERO ', 'BERNAL', '1942-10-19', '758-6349', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ZARAGOZA # 14', '', '', 'Mujer', NULL, 2, 4, 4, '2016-03-16 20:58:36', '66', '56', '59', '45', '160', '78', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (193, NULL, 'J. GUADALUPE', 'CARDENAS', 'ROSAS', '1931-11-13', '758-8109', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'FRANCISCO QUIRARTE RAMOS # 44', '', '', 'Hombre', NULL, 2, 4, 57, '2016-03-10 21:00:23', '58', '51', '42', '45', '167', '64', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (194, NULL, 'JUANA', 'AHUMADA', 'VALLEJO', '1930-11-03', '375-744-6029', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'HIDALGO # 59', '', '', 'Mujer', NULL, 2, 4, 34, '2016-03-16 21:02:05', '50', '38', '50', '40', '150', '60', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (195, NULL, 'VICTOR ', 'LOPEZ ', 'QUINTERO', '1953-10-27', '375-108-2086', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'R. LA PONDEROZA KM-116 CARR. A GUADALAJARA', '', '', 'Hombre', NULL, 2, 4, 69, '2016-03-14 21:03:48', '72', '70', '67', '51', '188', '108', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (196, NULL, 'ANGELA', 'SOLANO', 'RAMOS', '1938-10-05', '375-758-7242', 'MÃ©xico', 'Jalisco', 'AMECA', 'EL SABINO', 'FRANCISCO VILLA # 3', '', '', 'Mujer', NULL, 2, 4, 35, '2016-03-16 21:07:28', '50', '39', '51', '41', '160', '70', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (197, NULL, 'FLORENCIO', 'PEREZ ', 'URIBE', '1934-07-20', '375-758-7285', 'MÃ©xico', 'Jalisco', 'AMECA', 'LA CORONILLA', 'EMILIANO ZAPATA # 26-A', '', '', 'Hombre', NULL, 2, 4, 7, '2016-03-14 21:12:00', '', '', '', '', '140', '45', 'Aprobada', '', NULL, 'andador', '33.2', '');
INSERT INTO `paciente` VALUES (198, NULL, 'JOSE GUADALUPE', 'PEREZ', 'URIBE', '1925-12-12', '3751037781', 'MÃ©xico', 'Jalisco', 'AMECA', 'LA CORONILLA', 'JOSEFA ORTIZ DE DOMINGUEZ # 20', '', '', 'Hombre', NULL, 2, 4, 34, '2016-03-14 21:14:40', '', '', '', '', '160', '68', 'Aprobada', '', NULL, 'andador', '40', '');
INSERT INTO `paciente` VALUES (199, NULL, 'REGINO', 'COLIMA', 'RAMOS', '1961-06-04', '3757587255', 'MÃ©xico', 'Jalisco', 'AMECA', 'LA CORONILLA', 'EMILIANO ZAPATA 27, ', '', '', 'Hombre', NULL, 2, 4, 0, '2016-03-14 00:00:00', '', '', '', '', '169', '78', 'Aprobada', '', NULL, 'andador', '42.8', '');
INSERT INTO `paciente` VALUES (200, NULL, 'AMPELIA', 'RUELAS ', 'FREGOSO', '1928-02-11', '375-744-6154', 'MÃ©xico', 'Jalisco', 'AMECA', 'TEXCALAME', 'RAMON CORONA # 24-A', '', '', 'Mujer', NULL, 2, 4, 54, '2016-03-14 21:19:31', '', '', '', '', '', '', 'Aprobada', '', NULL, 'andador', '38', '');
INSERT INTO `paciente` VALUES (201, NULL, 'MARIA DEL CARMEN', 'COLIMA', 'TAPIA', '1941-07-18', '3751037781', 'MÃ©xico', 'Jalisco', 'AMECA', 'LA HUERTA DE SAN JAVIER', '5 DE MAYO # 6', '', '', 'Mujer', NULL, 2, 4, 34, '2016-03-10 21:21:52', '', '', '', '', '158', '60', 'Aprobada', '', NULL, 'andador', '39', '');
INSERT INTO `paciente` VALUES (202, NULL, 'CARLOS', 'PEREZ', 'MENA', '1939-03-15', '3751037781', 'MÃ©xico', 'Jalisco', 'AMECA', 'LA HUERTA DE SAN JAVIER', '5 DE MAYO # 6', '', '', 'Hombre', NULL, 2, 4, 34, '2016-03-14 21:27:16', '', '', '', '', '165', '78', 'Aprobada', '', NULL, 'andador', '42', '');
INSERT INTO `paciente` VALUES (203, NULL, 'CARMELO', 'AVILA', 'QUINTERO', '1961-07-16', '3751046037', 'MÃ©xico', 'Jalisco', 'AMECA', 'TEXCALAME', 'ALVARO OBREGON # 5', '', '', 'Hombre', NULL, 2, 4, 3, '2016-03-15 00:00:00', '', '', '', '', '168', '79', 'Aprobada', '', NULL, 'andador', '40', '');
INSERT INTO `paciente` VALUES (204, NULL, 'SILVINO', 'VALLEJO', 'RICO', '1926-05-03', '375-758-7277', 'MÃ©xico', 'Jalisco', 'AMECA', 'LA CORONILLA', 'RICARDO FLORES MAGON # 1-A', '', '', 'Hombre', NULL, 2, 4, 7, '2016-03-16 21:32:04', '65', '41', '50', '45', '155', '69', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (205, NULL, 'MARIA DEL REFUGIO', 'FREGOSO', 'AHUMADA', '1976-02-18', '375-7446-057', 'MÃ©xico', 'Jalisco', 'AMECA', 'TEXCALAME', 'ALDAMA # 7', '', '', 'Mujer', NULL, 2, 4, 70, '2016-03-14 21:33:44', '63', '52', '47', '49', '140', '60', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (206, NULL, 'MARIA ', 'GARCIA', 'CASTRO', '1930-07-19', '375-758-7231', 'MÃ©xico', 'Jalisco', 'AMECA', 'EL SABINO', 'ZARAGOZA # 23', '', '', 'Mujer', NULL, 2, 4, 7, '2016-03-11 21:37:03', '40', '38', '50', '33', '158', '62', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (207, NULL, 'JUAN ', 'DIAZ', 'NAVARRO', '1943-10-20', '375-100-9630', 'MÃ©xico', 'Jalisco', 'AMECA', 'EL SABINO', 'ANTONIO VIZCAINO # 57-A', '', '', 'Hombre', NULL, 2, 4, 27, '2016-03-11 21:38:32', '48', '41', '55', '40', '170', '70', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (208, NULL, 'JUANA', 'TOPETE ', 'DE SANTIAGO', '1938-09-01', '375-1079-154', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'PROLONGACION ALLENDE # 493 INT. 9', '', '', 'Mujer', NULL, 2, 4, 35, '2016-03-13 21:40:02', '60', '47', '46', '42', '148', '55', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (209, NULL, 'MANUEL', 'AGUILAR', '.', '1923-10-25', '375-758-8213', 'MÃ©xico', 'Jalisco', 'AMECA', 'ALTA VISTA DE RAMOS', 'JIMENEZ DELGADO # 48', '', '', 'Hombre', NULL, 2, 4, 37, '2016-03-10 21:42:19', '68', '40', '49', '43', '162', '65', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (210, NULL, 'JOSE MANUEL', 'TORRES', 'QUINTERO', '2004-11-24', '375-125-9818', 'MÃ©xico', 'Jalisco', 'AMECA', 'ALTA VISTA DE RAMOS', 'MURRIETA # 7', '', '', 'Hombre', NULL, 2, 4, 10, '2016-03-07 21:44:21', '59', '51', '49', '49', '140', '45', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (211, NULL, 'NAZARIO', 'RAMOS', 'DUEÃ‘AS', '1915-11-15', '375-758-8213', 'MÃ©xico', 'Jalisco', 'AMECA', 'ALTA VISTA DE RAMOS', 'EMILIANO ZAPATA # 10', '', '', 'Hombre', NULL, 2, 4, 71, '2016-03-09 21:46:00', '57', '40', '48', '40', '151', '55', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (212, NULL, 'EFRAIN', 'DOMINGUEZ', 'TOPETE', '1990-10-02', '375-758-8168', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'RAMON CORONA # 39', '', '', 'Hombre', NULL, 2, 4, 10, '2016-03-13 21:48:40', '71', '40', '50', '33', '166', '58', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (213, NULL, 'CARLOS ALBERTO', 'VALLES', 'GALVEZ', '1972-10-05', '375-758-2685', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'ACUEDUCTO # 8', '', '', 'Hombre', NULL, 2, 4, 10, '2016-03-08 21:50:41', '65', '60', '50', '55', '175', '78', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (214, NULL, 'SILVIA', 'CARDENAS', 'REA', '1958-10-29', '758-8109', 'MÃ©xico', 'Jalisco', 'AMECA', 'ALTA VISTA DE RAMOS', 'FRANCISCO QUIRARTE RAMOS # 44', '', '', 'Mujer', NULL, 2, 4, 37, '2016-03-11 21:52:25', '50', '40', '51', '41', '160', '60', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (215, NULL, 'MIGUEL', 'GARCIA', 'TAPIA', '1969-01-01', '3751009738', 'MÃ©xico', 'Jalisco', 'AMECA', 'HUERTA DE SAN JAVIER ', 'LAZARO CARDENAS 17', '', '', 'Hombre', NULL, 2, 4, 26, '2016-03-08 12:52:50', '', '', '', '', '', '', 'En espera', '', NULL, 'muletas', '', '51.6');
INSERT INTO `paciente` VALUES (216, NULL, 'JONATHAN ADAIR', 'MEDINA', 'SILVA', '2007-03-18', '3841050320', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', 'PINO 18', '', '', 'Hombre', NULL, 2, 8, 37, '2016-03-20 18:12:03', '51', '41', '38', '38', '155', '76', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (217, NULL, 'ANGEL GABRIEL', 'ORTEGA', 'NUÃ‘EZ', '2005-12-19', '3847380454', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', 'CONSTITUCIÃ“N 44', '', '', 'Hombre', NULL, 2, 8, 10, '2016-02-23 18:16:57', '44.5', '39', '30.5', '27', '123', '38', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (218, NULL, 'HANNIA NICOLE ', 'JIMENEZ', 'CARRILLO', '2014-07-20', '3841095750', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', '12 DE OCTUBRE 4', '', '', 'Mujer', NULL, 2, 8, 70, '2016-03-11 18:21:50', '28', '20', '20', '21', '', '', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (219, NULL, 'ABEL ', 'APOLINAR', 'CASTILLO', '1989-05-04', '3317119056', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', 'COLON 30', '', '', 'Hombre', NULL, 2, 8, 4, '2016-03-08 18:25:01', '69', '59', '51', '54', '170', '80', 'En espera', '', NULL, 'silla', '43', '');
INSERT INTO `paciente` VALUES (220, NULL, 'MARIA GUADALUPE', 'SILVA', 'ACOSTA', '1950-05-07', '3841050320', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', 'PINO 18', '', '', 'Mujer', NULL, 2, 8, 15, '2016-03-08 18:30:08', '56', '56', '51', '49', '165', '78', 'En espera', '', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (221, NULL, 'ERNESTO', 'OROZCO', 'GONZALEZ', '1957-11-17', '', 'MÃ©xico', 'Jalisco', 'AMECA', 'AMECA', 'CORREGIDORA 106 INTERIOR 6', 'Ya era', 'Ya er', 'Hombre', NULL, 1, 6, 41, '2016-03-16 00:00:00', '50', '57', '52', '32', '1.58', '45.700', 'Aprobada', 'SILLA EN ESTADO PARA REPARACIÃ“N O CAMBIO', NULL, 'silla', '', '');
INSERT INTO `paciente` VALUES (222, NULL, 'JUANA', 'ORTIZ', 'ESPERICUETO', '1916-06-01', '3331981969', 'MÃ©xico', 'Jalisco', 'TALA', 'TALA', 'EBANO 20, LA HIGUERITA', '', '', 'Mujer', NULL, 2, 43, 4, '2016-03-22 13:49:37', '', '', '', '', '134', '45', 'Aprobada', '', NULL, 'andador', '34', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pastor`
-- 

CREATE TABLE `pastor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apaterno` varchar(45) DEFAULT NULL,
  `amaterno` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `domicilio` varchar(145) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `iglesia_cristiana_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pastor_iglesia_cristiana1_idx` (`iglesia_cristiana_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `pastor`
-- 

INSERT INTO `pastor` VALUES (1, 'Mario Ascencio', 'GarcÃ­a', 'Buenrostro', '3757607177', 'marioascenciogarciabuenrostro@gmail.com', 'Jalisco', 'Ameca', 'Ameca', 'Vallarta 44- A, Colonia Centro. ', '1958-05-29', 1);
INSERT INTO `pastor` VALUES (2, 'Raymundo ', 'Molina', 'Arreola', '3751019880', 'iglesiaemanuelabm@gmail.com', 'Jalisco', 'Ameca', 'Ameca', 'Granja 2, Colonia la Cienega, ', '1949-03-15', 2);
INSERT INTO `pastor` VALUES (3, 'Joel', 'Solorzano', 'GarcÃ­a', '3751015759', 'maranathaabm@gmail.com', 'Jalisco', 'Ameca', 'Ameca', 'Privada Manzano 7, Fracc. Los Mezquites', '1975-12-28', 3);
INSERT INTO `pastor` VALUES (4, 'Candelario', 'Jimenez', 'Salazar', '3333503889', 'casadeoracionabm@gmail.com', 'Jalisco', 'Ameca', 'El CabezÃ³n', '5 de Mayo 266 interior B', '1959-03-06', 4);
INSERT INTO `pastor` VALUES (5, 'Pablo', 'Fausto', 'Flores', '3338749480', 'jesuspandevidaabm@gmail.com', 'Jalisco', 'Ameca', 'Cerrito del Cuis', 'Americas 13 ', '1956-06-15', 7);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `persona`
-- 

CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `localidad` varchar(255) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `acompanante` varchar(255) DEFAULT NULL,
  `problema_fisico` varchar(255) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Volcar la base de datos para la tabla `persona`
-- 

INSERT INTO `persona` VALUES (1, 'Angela Larissa Maldonado Cervantes', 'Luis Donaldo colosio #10', 'Cuisillos', 'Tala', 'Jalisco', '3847381749', 'Robertina Cervantes', 'Sindrome Dawn', '2011-02-21');
INSERT INTO `persona` VALUES (2, 'MarÃ­a del Rosario Martinez Cortes', '15 de Septiembre #28 ', 'Ameca, colonia sta. Cecilia', 'Ameca', 'Jalisco', '3751058781', 'MarÃ­a de la Luz Martinez Cortes', 'Retraso Mental', '2001-05-10');
INSERT INTO `persona` VALUES (3, 'Iris Elizabeth Jimenez Hernandez', '15 de Septiembre #28 ', 'Ameca', 'Ameca', 'Jalisco', '3751058781', 'MarÃ­a de la Luz Martinez Cortes', 'Viene de acompaÃ±ante', '2005-09-18');
INSERT INTO `persona` VALUES (4, 'Naomi Guadalupe Camacho Lizaola', '8 de Julio 3', 'Santa Cecilia', 'Ameca', 'Jalisco', '75 8 0796', 'Brenda Lizaola Lopez', 'Paralisis  Cerebral Infantil.', '2010-06-09');
INSERT INTO `persona` VALUES (5, 'Naomi Guadalupe Camacho Lizaola', '8 de Julio 3', 'Santa Cecilia', 'Ameca', 'Jalisco', '75 8 0796', 'Brenda Lizaola Lopez', 'Paralisis  Cerebral Infantil.', '2010-06-09');
INSERT INTO `persona` VALUES (6, 'JosÃ© de Jesus Camacho Lizaola', '8 de Julio 3', 'Santa Cecilia', 'Ameca', 'Jalisco', '75 8 0796', 'Brenda Lizaola Lopez', 'Ninguno', '2004-12-19');
INSERT INTO `persona` VALUES (7, 'JosÃ© Miguel Curiel Solano', 'Calle Jalisco #79 colonia MÃ©xico', 'Ameca', 'Ameca', 'Jalisco', 'S/N', 'Yolanda Solano DÃ¡valos', 'Paralisis Cerebral', '1986-03-20');
INSERT INTO `persona` VALUES (8, 'Daniel Alexander Romero Gonzalez', 'Beethoven 4 ', 'Cuisillos', 'Tala', 'Jalisco', '------------', 'Adriana Gonzalez Torres', 'Paralisis  Cerebral Infantil.', '2006-07-25');
INSERT INTO `persona` VALUES (9, 'Ana Patricia Rodriguez Rosas', 'Plutarco Elias Calles 11', 'La loma', 'San Martin', '', '375 760 6881', 'Maria de Jesus Rojas Castorena', 'Ninguno', '2012-09-21');
INSERT INTO `persona` VALUES (10, 'Sara Santos Lopez', 'Haciendo de Guadalupe 56', 'Porvenir', 'Ameca', 'Jalisco', '75 5 31 27', 'Gloria Lopez Balcazar', 'Retraso mental ', '1993-09-20');
INSERT INTO `persona` VALUES (11, 'Reina Azucena Ortega Gonzalez', 'Hospital 96 B', 'Centro', 'Ameca', 'Jalisco', '75 8 16 91', 'Elizabeth Gonzalez Gonzalez ', 'Atasia, Hiperactiva ', '2007-02-22');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `prestamo`
-- 

CREATE TABLE `prestamo` (
  `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  `fecha_prestamo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_devolucion` timestamp NULL DEFAULT NULL,
  `paciente_id` int(11) NOT NULL,
  PRIMARY KEY (`id_prestamo`),
  KEY `fk_prestamo_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8 AUTO_INCREMENT=119 ;

-- 
-- Volcar la base de datos para la tabla `prestamo`
-- 

INSERT INTO `prestamo` VALUES (1, 'activo', '2015-04-10 00:00:00', NULL, 14);
INSERT INTO `prestamo` VALUES (2, 'activo', '2015-04-10 00:00:00', NULL, 6);
INSERT INTO `prestamo` VALUES (3, 'activo', '2015-04-10 00:00:00', NULL, 8);
INSERT INTO `prestamo` VALUES (4, 'activo', '2015-04-10 00:00:00', NULL, 10);
INSERT INTO `prestamo` VALUES (7, 'activo', '2015-04-10 00:00:00', NULL, 13);
INSERT INTO `prestamo` VALUES (8, 'activo', '2015-04-10 00:00:00', NULL, 13);
INSERT INTO `prestamo` VALUES (9, 'activo', '2015-04-10 00:00:00', NULL, 15);
INSERT INTO `prestamo` VALUES (10, 'activo', '2015-04-10 00:00:00', NULL, 1);
INSERT INTO `prestamo` VALUES (11, 'activo', '2015-04-10 00:00:00', NULL, 1);
INSERT INTO `prestamo` VALUES (12, 'activo', '2015-04-10 00:00:00', NULL, 1);
INSERT INTO `prestamo` VALUES (13, 'activo', '2015-04-10 00:00:00', NULL, 2);
INSERT INTO `prestamo` VALUES (15, 'activo', '2015-04-10 00:00:00', NULL, 11);
INSERT INTO `prestamo` VALUES (16, 'activo', '2016-02-20 19:29:52', '2016-02-20 00:00:00', 6);
INSERT INTO `prestamo` VALUES (17, 'activo', '2015-04-10 00:00:00', NULL, 13);
INSERT INTO `prestamo` VALUES (18, 'activo', '2015-04-11 14:21:12', '2015-04-11 00:00:00', 1);
INSERT INTO `prestamo` VALUES (19, 'activo', '2015-04-10 00:00:00', NULL, 8);
INSERT INTO `prestamo` VALUES (20, 'activo', '2015-04-10 00:00:00', NULL, 15);
INSERT INTO `prestamo` VALUES (21, 'activo', '2015-04-10 00:00:00', NULL, 5);
INSERT INTO `prestamo` VALUES (22, 'activo', '2015-04-10 00:00:00', NULL, 17);
INSERT INTO `prestamo` VALUES (23, 'activo', '2015-04-10 00:00:00', NULL, 14);
INSERT INTO `prestamo` VALUES (24, 'activo', '2015-04-10 00:00:00', NULL, 16);
INSERT INTO `prestamo` VALUES (25, 'activo', '2015-04-10 19:07:56', '2015-04-10 00:00:00', 20);
INSERT INTO `prestamo` VALUES (26, 'activo', '2015-04-10 00:00:00', NULL, 12);
INSERT INTO `prestamo` VALUES (27, 'activo', '2015-04-10 00:00:00', NULL, 9);
INSERT INTO `prestamo` VALUES (28, 'activo', '2015-04-10 00:00:00', NULL, 21);
INSERT INTO `prestamo` VALUES (31, 'activo', '2015-04-10 00:00:00', NULL, 21);
INSERT INTO `prestamo` VALUES (34, 'activo', '2015-04-10 00:00:00', NULL, 21);
INSERT INTO `prestamo` VALUES (35, 'activo', '2015-04-10 00:00:00', NULL, 18);
INSERT INTO `prestamo` VALUES (36, 'activo', '2015-05-17 17:22:39', '2015-05-17 00:00:00', 19);
INSERT INTO `prestamo` VALUES (37, 'activo', '2015-04-10 00:00:00', NULL, 4);
INSERT INTO `prestamo` VALUES (38, 'activo', '2015-04-10 00:00:00', NULL, 20);
INSERT INTO `prestamo` VALUES (41, 'activo', '2015-04-10 00:00:00', NULL, 17);
INSERT INTO `prestamo` VALUES (42, 'activo', '2015-04-10 00:00:00', NULL, 17);
INSERT INTO `prestamo` VALUES (43, 'activo', '2015-04-10 00:00:00', NULL, 17);
INSERT INTO `prestamo` VALUES (44, 'activo', '2015-04-10 00:00:00', NULL, 7);
INSERT INTO `prestamo` VALUES (47, 'activo', '2015-04-10 00:00:00', NULL, 74);
INSERT INTO `prestamo` VALUES (48, 'activo', '2015-04-10 19:10:51', NULL, 22);
INSERT INTO `prestamo` VALUES (49, 'activo', '2015-04-11 10:14:52', NULL, 37);
INSERT INTO `prestamo` VALUES (50, 'activo', '2015-04-11 10:15:09', NULL, 30);
INSERT INTO `prestamo` VALUES (51, 'activo', '2015-04-11 11:03:19', NULL, 73);
INSERT INTO `prestamo` VALUES (52, 'activo', '2015-04-11 11:11:13', NULL, 30);
INSERT INTO `prestamo` VALUES (53, 'activo', '2015-04-11 11:34:12', NULL, 73);
INSERT INTO `prestamo` VALUES (54, 'activo', '2015-04-11 11:35:17', NULL, 26);
INSERT INTO `prestamo` VALUES (55, 'activo', '2015-04-11 11:40:43', NULL, 31);
INSERT INTO `prestamo` VALUES (56, 'activo', '2015-04-11 12:01:56', NULL, 36);
INSERT INTO `prestamo` VALUES (57, 'activo', '2015-04-11 12:16:01', NULL, 51);
INSERT INTO `prestamo` VALUES (58, 'activo', '2015-04-11 12:19:26', NULL, 50);
INSERT INTO `prestamo` VALUES (59, 'activo', '2015-04-11 12:19:32', NULL, 49);
INSERT INTO `prestamo` VALUES (60, 'activo', '2015-04-11 12:20:13', NULL, 57);
INSERT INTO `prestamo` VALUES (61, 'activo', '2015-04-11 12:48:24', NULL, 78);
INSERT INTO `prestamo` VALUES (62, 'activo', '2015-04-11 12:48:42', NULL, 78);
INSERT INTO `prestamo` VALUES (63, 'activo', '2015-04-11 13:29:12', NULL, 60);
INSERT INTO `prestamo` VALUES (64, 'activo', '2015-04-11 13:29:38', NULL, 61);
INSERT INTO `prestamo` VALUES (65, 'activo', '2015-04-11 13:32:38', NULL, 61);
INSERT INTO `prestamo` VALUES (66, 'activo', '2015-04-11 13:50:20', NULL, 78);
INSERT INTO `prestamo` VALUES (67, 'activo', '2015-04-11 13:51:25', NULL, 44);
INSERT INTO `prestamo` VALUES (68, 'finalizado', '2015-05-01 19:07:23', '2015-05-01 00:00:00', 79);
INSERT INTO `prestamo` VALUES (69, 'activo', '2015-04-11 14:28:33', NULL, 70);
INSERT INTO `prestamo` VALUES (70, 'activo', '2015-04-11 14:32:00', NULL, 44);
INSERT INTO `prestamo` VALUES (73, 'activo', '2015-04-11 14:32:20', NULL, 44);
INSERT INTO `prestamo` VALUES (76, 'activo', '2015-04-11 14:41:43', NULL, 40);
INSERT INTO `prestamo` VALUES (79, 'activo', '2015-04-11 14:42:33', NULL, 38);
INSERT INTO `prestamo` VALUES (82, 'activo', '2015-04-11 15:21:20', NULL, 77);
INSERT INTO `prestamo` VALUES (83, 'activo', '2015-04-11 19:54:17', NULL, 39);
INSERT INTO `prestamo` VALUES (84, 'activo', '2015-04-11 19:54:51', NULL, 3);
INSERT INTO `prestamo` VALUES (85, 'activo', '2015-04-11 20:50:29', NULL, 35);
INSERT INTO `prestamo` VALUES (86, 'activo', '2015-04-11 20:51:02', NULL, 43);
INSERT INTO `prestamo` VALUES (87, 'activo', '2015-04-11 20:51:34', NULL, 33);
INSERT INTO `prestamo` VALUES (88, 'activo', '2015-04-11 20:52:10', NULL, 32);
INSERT INTO `prestamo` VALUES (89, 'activo', '2015-04-11 20:52:43', NULL, 27);
INSERT INTO `prestamo` VALUES (90, 'activo', '2015-04-11 20:53:10', NULL, 28);
INSERT INTO `prestamo` VALUES (91, 'activo', '2015-04-11 20:53:50', NULL, 45);
INSERT INTO `prestamo` VALUES (92, 'activo', '2015-04-11 20:54:20', NULL, 55);
INSERT INTO `prestamo` VALUES (93, 'activo', '2015-04-11 20:54:56', NULL, 53);
INSERT INTO `prestamo` VALUES (94, 'activo', '2015-04-11 20:55:32', NULL, 47);
INSERT INTO `prestamo` VALUES (95, 'activo', '2015-04-11 20:56:08', NULL, 56);
INSERT INTO `prestamo` VALUES (96, 'activo', '2015-04-11 20:56:35', NULL, 54);
INSERT INTO `prestamo` VALUES (97, 'activo', '2015-04-30 16:31:34', NULL, 63);
INSERT INTO `prestamo` VALUES (98, 'activo', '2015-04-30 16:32:10', NULL, 63);
INSERT INTO `prestamo` VALUES (99, 'activo', '2015-04-30 16:46:05', NULL, 81);
INSERT INTO `prestamo` VALUES (100, 'activo', '2015-05-01 18:18:13', NULL, 83);
INSERT INTO `prestamo` VALUES (101, 'activo', '2015-05-01 18:23:44', NULL, 29);
INSERT INTO `prestamo` VALUES (102, 'activo', '2015-05-01 18:24:35', NULL, 41);
INSERT INTO `prestamo` VALUES (104, 'finalizado', '2015-05-01 22:30:53', '2015-05-01 00:00:00', 84);
INSERT INTO `prestamo` VALUES (105, 'activo', '2015-05-01 21:43:01', NULL, 82);
INSERT INTO `prestamo` VALUES (106, 'activo', '2015-05-14 18:00:00', NULL, 44);
INSERT INTO `prestamo` VALUES (107, 'finalizado', '2015-07-30 13:35:31', '2015-07-30 00:00:00', 85);
INSERT INTO `prestamo` VALUES (108, 'finalizado', '2015-07-30 13:35:51', '2015-07-30 00:00:00', 85);
INSERT INTO `prestamo` VALUES (109, 'finalizado', '2015-06-09 19:29:58', '2015-06-09 00:00:00', 86);
INSERT INTO `prestamo` VALUES (110, 'activo', '2015-05-21 19:00:00', NULL, 29);
INSERT INTO `prestamo` VALUES (111, 'activo', '2015-05-21 17:22:00', NULL, 42);
INSERT INTO `prestamo` VALUES (112, 'activo', '2015-05-21 18:00:00', NULL, 42);
INSERT INTO `prestamo` VALUES (113, 'activo', '2015-05-28 18:10:00', NULL, 87);
INSERT INTO `prestamo` VALUES (114, 'activo', '2015-07-21 19:00:00', NULL, 88);
INSERT INTO `prestamo` VALUES (115, 'activo', '0000-00-00 00:00:00', NULL, 89);
INSERT INTO `prestamo` VALUES (116, 'activo', '0000-00-00 00:00:00', NULL, 89);
INSERT INTO `prestamo` VALUES (117, 'activo', '2016-02-20 19:26:17', '2016-02-20 00:00:00', 89);
INSERT INTO `prestamo` VALUES (118, 'activo', '0000-00-00 00:00:00', NULL, 89);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `sistema`
-- 

CREATE TABLE `sistema` (
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
-- Volcar la base de datos para la tabla `sistema`
-- 

INSERT INTO `sistema` VALUES ('0058029096798', 'Mario Ascencio', 'GarcÃ­a', 'Buenrostro', 'mario', 'cdf7f5d052ddcf5f7cf7ede258f3793f', '2016-03-24 13:15:49', 'administrador', 'activo');
INSERT INTO `sistema` VALUES ('206639038', 'Erick Jorge', 'Guerrero', '', 'erick', '9450476b384b32d8ad8b758e76c98a69', '2016-03-23 23:16:08', 'administrador', 'activo');
INSERT INTO `sistema` VALUES ('administradorCoTaVi', 'Viridiana', 'Colin', 'Tamayo', 'viridiana', '9450476b384b32d8ad8b758e76c98a69', '2016-02-20 16:31:43', 'administrador', 'activo');
INSERT INTO `sistema` VALUES ('administradorDeSaEs', 'Esther', 'De La Cruz ', 'Santiago', 'Esther', '9450476b384b32d8ad8b758e76c98a69', '2015-04-11 12:14:32', 'administrador', 'activo');
INSERT INTO `sistema` VALUES ('administradorGaCaMa', 'Mario Joel ', 'GarcÃ­a', 'CalderÃ³n', 'Joel', '9450476b384b32d8ad8b758e76c98a69', '2016-02-20 19:21:53', 'administrador', 'activo');
INSERT INTO `sistema` VALUES ('administradorGaPeJu', 'Juan Carlos', 'Gaeta', 'PeÃ±a', 'Juan Carlos', 'a2513fc4a8e47597a39436325241f4b6', '2016-03-18 20:10:53', 'administrador', 'activo');
INSERT INTO `sistema` VALUES ('capturistaGoCoCa', 'Carlos Eduardo', 'GonzÃ¡lez', 'Contreras', 'Carlos', 'a2513fc4a8e47597a39436325241f4b6', '2016-03-22 19:40:05', 'administrador', 'activo');
INSERT INTO `sistema` VALUES ('E', 'Invitado', '', '', 'tres', '9450476b384b32d8ad8b758e76c98a69', '2016-03-22 19:36:58', 'capturista', 'activo');
INSERT INTO `sistema` VALUES ('E3757581655', 'EstaciÃ³n 2', '', '', 'dos', '9450476b384b32d8ad8b758e76c98a69', NULL, 'capturista', 'activo');
INSERT INTO `sistema` VALUES ('E3757581655-6', 'ESTACION 6', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2016-03-24 01:04:11', 'medico', 'activo');
INSERT INTO `sistema` VALUES ('E3757581655-7', 'EstaciÃ³n 7', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 'medico', 'activo');
INSERT INTO `sistema` VALUES ('E37575816554', 'EstaciÃ³n 4', '', '', 'cuatro', '2b556258d4e0a9fe879765d2b76dd039', NULL, 'capturista', 'activo');
INSERT INTO `sistema` VALUES ('E37575816555', 'EstaciÃ³n 5', '', '', 'cinco', '64e38e70efb84f926568d0522a105c33', NULL, 'capturista', 'activo');
INSERT INTO `sistema` VALUES ('KE3757581655', 'ESTACION 1', 'KAY', '', 'KAY', '48ed5d2db39237d7ae5e829b17581629', NULL, 'capturista', 'activo');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_colaborador`
-- 

CREATE TABLE `tipo_colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

-- 
-- Volcar la base de datos para la tabla `tipo_colaborador`
-- 

INSERT INTO `tipo_colaborador` VALUES (1, 'Coordinador de RealizaciÃ³n');
INSERT INTO `tipo_colaborador` VALUES (4, 'Coordinador de Soporte');
INSERT INTO `tipo_colaborador` VALUES (5, 'Responsable de EstadÃ­stica');
INSERT INTO `tipo_colaborador` VALUES (6, 'Coordinador de AtenciÃ³n');
INSERT INTO `tipo_colaborador` VALUES (7, 'EstadÃ­stica');
INSERT INTO `tipo_colaborador` VALUES (9, 'Responsable de Ingreso y Control');
INSERT INTO `tipo_colaborador` VALUES (11, 'Ingreso y Control');
INSERT INTO `tipo_colaborador` VALUES (13, 'Responsable de Evangelismo');
INSERT INTO `tipo_colaborador` VALUES (14, 'Evangelismo');
INSERT INTO `tipo_colaborador` VALUES (20, 'Evangelismo niÃ±os');
INSERT INTO `tipo_colaborador` VALUES (21, 'Responsable de Actividades Enfocadas');
INSERT INTO `tipo_colaborador` VALUES (22, 'Actividades Enfocadas');
INSERT INTO `tipo_colaborador` VALUES (25, 'Responsable de Finanzas');
INSERT INTO `tipo_colaborador` VALUES (26, 'Coordinadora General');
INSERT INTO `tipo_colaborador` VALUES (27, 'Responsable de AlimentaciÃ³n');
INSERT INTO `tipo_colaborador` VALUES (28, 'Alimentos');
INSERT INTO `tipo_colaborador` VALUES (29, 'Responsable de Servicio');
INSERT INTO `tipo_colaborador` VALUES (30, 'Servicio');
INSERT INTO `tipo_colaborador` VALUES (31, 'Responsable de OraciÃ³n');
INSERT INTO `tipo_colaborador` VALUES (32, 'Traductor');
INSERT INTO `tipo_colaborador` VALUES (33, 'Historias');
INSERT INTO `tipo_colaborador` VALUES (34, 'MecÃ¡nico(a) Sillas');
INSERT INTO `tipo_colaborador` VALUES (35, 'Costura');
INSERT INTO `tipo_colaborador` VALUES (36, 'Transporte');
INSERT INTO `tipo_colaborador` VALUES (37, 'FotografÃ­a y Video');
INSERT INTO `tipo_colaborador` VALUES (38, 'Responsable de Costura');
INSERT INTO `tipo_colaborador` VALUES (39, 'Disipulado');
INSERT INTO `tipo_colaborador` VALUES (40, 'Coordinador EUA');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_equipo`
-- 

CREATE TABLE `tipo_equipo` (
  `idtipo_equipo` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `tipo_equipo`
-- 

INSERT INTO `tipo_equipo` VALUES ('Andador', 'Andador');
INSERT INTO `tipo_equipo` VALUES ('BastÃ³n', 'BastÃ³n');
INSERT INTO `tipo_equipo` VALUES ('Bibblia', 'Biblia');
INSERT INTO `tipo_equipo` VALUES ('LibJoni', 'Libro de Joni');
INSERT INTO `tipo_equipo` VALUES ('Mul', 'Muletas');
INSERT INTO `tipo_equipo` VALUES ('SileÃ±o', 'Silla niÃ±o pequeÃ±o');
INSERT INTO `tipo_equipo` VALUES ('Silndar', 'Silla de ruedas estÃ¡ndar');
INSERT INTO `tipo_equipo` VALUES ('Silrica', 'Silla de ruedas pediÃ¡trica');

-- 
-- Filtros para las tablas descargadas (dump)
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
-- Filtros para la tabla `asistencia_acomp_grupo`
-- 
ALTER TABLE `asistencia_acomp_grupo`
  ADD CONSTRAINT `fk_acompanante_has_grupo_acompanante1` FOREIGN KEY (`acompanante_id`) REFERENCES `acompanante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acompanante_has_grupo_grupo2` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_equipo_has_prestamo_equipo1` FOREIGN KEY (`equipo_idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_equipo_has_prestamo_prestamo1` FOREIGN KEY (`prestamo_id_prestamo`) REFERENCES `prestamo` (`id_prestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- Filtros para la tabla `grupo`
-- 
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_colaborador1` FOREIGN KEY (`colaborador_id`) REFERENCES `colaborador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- Filtros para la tabla `grupo_asist_persona`
-- 
ALTER TABLE `grupo_asist_persona`
  ADD CONSTRAINT `fk_grupo_has_persona_grupo1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_has_persona_persona1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Filtros para la tabla `pastor`
-- 
ALTER TABLE `pastor`
  ADD CONSTRAINT `fk_pastor_iglesia_cristiana1` FOREIGN KEY (`iglesia_cristiana_id`) REFERENCES `iglesia_cristiana` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- Filtros para la tabla `prestamo`
-- 
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_paciente1` FOREIGN KEY (`paciente_id`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
