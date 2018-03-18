-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-02-2018 a las 21:53:11
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
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `id_educacion` int(11) NOT NULL,
  `id_tipo_educacion` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cursada` varchar(5000) NOT NULL,
  `certificacion` varchar(2000) NOT NULL,
  `contenidos_centrales` text NOT NULL,
  `docentes` varchar(1000) NOT NULL,
  `archivo_programa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`id_educacion`, `id_tipo_educacion`, `nombre`, `cursada`, `certificacion`, `contenidos_centrales`, `docentes`, `archivo_programa`) VALUES
(1, 2, 'Educacion 1', 'Martes de 21 a 25', 'Coneau', '<p>\r\n	Blablab labl askjdha lsnalsdbaosdb asdnalsd</p>\r\n', 'Docente 1, docente 2', '11eb3-presupuesto_aaep.doc.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion`
--

CREATE TABLE `investigacion` (
  `id_investigacion` int(11) NOT NULL,
  `id_tipo_investigacion` int(11) NOT NULL,
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
-- Estructura de tabla para la tabla `tipo_educacion`
--

CREATE TABLE `tipo_educacion` (
  `id_tipo_educacion` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_educacion`
--

INSERT INTO `tipo_educacion` (`id_tipo_educacion`, `descripcion`) VALUES
(1, 'Programas presenciales'),
(2, 'Programas in company'),
(3, 'Programas online');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_investigacion`
--

CREATE TABLE `tipo_investigacion` (
  `id_tipo_investigacion` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_investigacion`
--

INSERT INTO `tipo_investigacion` (`id_tipo_investigacion`, `descripcion`) VALUES
(1, 'Articulo'),
(2, 'Ponencia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id_educacion`),
  ADD KEY `fk_tipo_educacion` (`id_tipo_educacion`);

--
-- Indices de la tabla `investigacion`
--
ALTER TABLE `investigacion`
  ADD PRIMARY KEY (`id_investigacion`),
  ADD KEY `FK_tipo_investigacion` (`id_tipo_investigacion`);

--
-- Indices de la tabla `investigacion_autor`
--
ALTER TABLE `investigacion_autor`
  ADD PRIMARY KEY (`id_investigacion_autor`),
  ADD KEY `fk_investigacion_autor` (`id_investigacion`);

--
-- Indices de la tabla `tipo_educacion`
--
ALTER TABLE `tipo_educacion`
  ADD PRIMARY KEY (`id_tipo_educacion`);

--
-- Indices de la tabla `tipo_investigacion`
--
ALTER TABLE `tipo_investigacion`
  ADD PRIMARY KEY (`id_tipo_investigacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `id_educacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT de la tabla `tipo_educacion`
--
ALTER TABLE `tipo_educacion`
  MODIFY `id_tipo_educacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_investigacion`
--
ALTER TABLE `tipo_investigacion`
  MODIFY `id_tipo_investigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD CONSTRAINT `fk_tipo_educacion` FOREIGN KEY (`id_tipo_educacion`) REFERENCES `tipo_educacion` (`id_tipo_educacion`);

--
-- Filtros para la tabla `investigacion`
--
ALTER TABLE `investigacion`
  ADD CONSTRAINT `FK_tipo_investigacion` FOREIGN KEY (`id_tipo_investigacion`) REFERENCES `tipo_investigacion` (`id_tipo_investigacion`);

--
-- Filtros para la tabla `investigacion_autor`
--
ALTER TABLE `investigacion_autor`
  ADD CONSTRAINT `fk_investigacion_autor` FOREIGN KEY (`id_investigacion`) REFERENCES `investigacion` (`id_investigacion`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
