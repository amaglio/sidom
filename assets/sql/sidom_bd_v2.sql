-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-03-2018 a las 17:56:46
-- Versión del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sidom`
--
CREATE DATABASE IF NOT EXISTS `sidom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sidom`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_motivo`
--

CREATE TABLE `contacto_motivo` (
  `id_contacto_motivo` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto_motivo`
--

INSERT INTO `contacto_motivo` (`id_contacto_motivo`, `descripcion`) VALUES
(1, 'Educación'),
(2, 'Investigación'),
(3, 'Proyectos'),
(4, 'Información para la gestión'),
(5, 'Legal'),
(6, 'Consulta general');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `id_educacion` int(11) NOT NULL,
  `id_educacion_modalidad` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `cursada` varchar(5000) NOT NULL,
  `certificacion` varchar(2000) NOT NULL,
  `contenidos_centrales` text NOT NULL,
  `docentes` varchar(1000) NOT NULL,
  `archivo_programa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`id_educacion`, `id_educacion_modalidad`, `nombre`, `imagen`, `cursada`, `certificacion`, `contenidos_centrales`, `docentes`, `archivo_programa`) VALUES
(1, 3, 'Educacion 1', NULL, 'Martes de 21 a 25', 'Coneau', '<p>\r\n	Blablab labl askjdha lsnalsdbaosdb asdnalsd</p>\r\n', 'Docente 1, docente 2', '11eb3-presupuesto_aaep.doc.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion_modalidad`
--

CREATE TABLE `educacion_modalidad` (
  `id_educacion_modalidad` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `educacion_modalidad`
--

INSERT INTO `educacion_modalidad` (`id_educacion_modalidad`, `descripcion`) VALUES
(1, 'Presencial'),
(2, 'In company'),
(3, 'A distancia'),
(4, 'Material bibliográfico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion`
--

CREATE TABLE `investigacion` (
  `id_investigacion` int(11) NOT NULL,
  `id_investigacion_tipo` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `sito_publico` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `abstract` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion_autor`
--

CREATE TABLE `investigacion_autor` (
  `id_investigacion_autor` int(11) NOT NULL,
  `id_investigacion` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion_tipo`
--

CREATE TABLE `investigacion_tipo` (
  `id_investigacion_tipo` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigacion_tipo`
--

INSERT INTO `investigacion_tipo` (`id_investigacion_tipo`, `descripcion`) VALUES
(1, 'Articulo'),
(2, 'Ponencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `id_novedad` int(11) NOT NULL,
  `id_novedad_tipo` int(11) NOT NULL,
  `titulo` varchar(2000) NOT NULL,
  `descripcion` varchar(4000) NOT NULL,
  `detalle` varchar(1000) NOT NULL,
  `mudltimedia_embebed` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `contacto_motivo`
--
ALTER TABLE `contacto_motivo`
  ADD PRIMARY KEY (`id_contacto_motivo`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id_educacion`),
  ADD KEY `fk_tipo_educacion` (`id_educacion_modalidad`);

--
-- Indices de la tabla `educacion_modalidad`
--
ALTER TABLE `educacion_modalidad`
  ADD PRIMARY KEY (`id_educacion_modalidad`);

--
-- Indices de la tabla `investigacion`
--
ALTER TABLE `investigacion`
  ADD PRIMARY KEY (`id_investigacion`),
  ADD KEY `FK_tipo_investigacion` (`id_investigacion_tipo`);

--
-- Indices de la tabla `investigacion_autor`
--
ALTER TABLE `investigacion_autor`
  ADD PRIMARY KEY (`id_investigacion_autor`),
  ADD KEY `fk_investigacion_autor` (`id_investigacion`);

--
-- Indices de la tabla `investigacion_tipo`
--
ALTER TABLE `investigacion_tipo`
  ADD PRIMARY KEY (`id_investigacion_tipo`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`id_novedad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contacto_motivo`
--
ALTER TABLE `contacto_motivo`
  MODIFY `id_contacto_motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `id_educacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `educacion_modalidad`
--
ALTER TABLE `educacion_modalidad`
  MODIFY `id_educacion_modalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `investigacion`
--
ALTER TABLE `investigacion`
  MODIFY `id_investigacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `investigacion_autor`
--
ALTER TABLE `investigacion_autor`
  MODIFY `id_investigacion_autor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `investigacion_tipo`
--
ALTER TABLE `investigacion_tipo`
  MODIFY `id_investigacion_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id_novedad` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD CONSTRAINT `fk_tipo_educacion` FOREIGN KEY (`id_educacion_modalidad`) REFERENCES `educacion_modalidad` (`id_educacion_modalidad`);

--
-- Filtros para la tabla `investigacion`
--
ALTER TABLE `investigacion`
  ADD CONSTRAINT `FK_tipo_investigacion` FOREIGN KEY (`id_investigacion_tipo`) REFERENCES `investigacion_tipo` (`id_investigacion_tipo`);

--
-- Filtros para la tabla `investigacion_autor`
--
ALTER TABLE `investigacion_autor`
  ADD CONSTRAINT `fk_investigacion_autor` FOREIGN KEY (`id_investigacion`) REFERENCES `investigacion` (`id_investigacion`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
