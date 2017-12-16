-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-12-2017 a las 23:20:18
-- Versión del servidor: 10.1.25-MariaDB-1
-- Versión de PHP: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videoJuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Consulta`
--

CREATE TABLE `Consulta` (
  `Comentarios` varchar(45) DEFAULT NULL,
  `Votos` int(11) DEFAULT NULL,
  `Fecha` varchar(45) DEFAULT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Videojuego_idVideojuego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Desarrollo`
--

CREATE TABLE `Desarrollo` (
  `idDesarrollo` int(11) NOT NULL,
  `Nombre_desarrollo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Desarrollo`
--

INSERT INTO `Desarrollo` (`idDesarrollo`, `Nombre_desarrollo`) VALUES
(1, 'Activision‎'),
(2, 'Atari‎ ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Distribuidor`
--

CREATE TABLE `Distribuidor` (
  `idDistribuidor` int(11) NOT NULL,
  `Nombre_distribuidor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Distribuidor`
--

INSERT INTO `Distribuidor` (`idDistribuidor`, `Nombre_distribuidor`) VALUES
(1, 'NC Games'),
(2, 'PRODUCTOS JUMBO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nom_user` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Videojuego`
--

CREATE TABLE `Videojuego` (
  `idVideojuego` int(11) NOT NULL,
  `Consola` varchar(45) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Genero` varchar(45) DEFAULT NULL,
  `Clasificacion` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Distribuidor_idDistribuidor` int(11) NOT NULL,
  `Desarrollo_idDesarrollo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Videojuego`
--

INSERT INTO `Videojuego` (`idVideojuego`, `Consola`, `Nombre`, `Genero`, `Clasificacion`, `Descripcion`, `Distribuidor_idDistribuidor`, `Desarrollo_idDesarrollo`) VALUES
(1112, 'IIIIII', 'P', 'IIIIII', 'IIIII', 'IIIIIII', 2, 1),
(123654, 'Playstation', 'Call of Duty 4: Modern Warfare', 'Disparos en primera persona', 'PEGI 16', 'Es un juego de disparos en primera persona', 1, 1),
(123655, 'Atari', 'Pong', 'bate y bola', 'PEGI 10', 'Es un juego de disparos bate y bola', 2, 2),
(1213211, 'uuuu', 'uuuu', 'uuuu', 'uuuu', 'uuuu', 1, 1),
(15151589, 'mi consola', 'mi juego', 'accion', 'pegi10', 'este es un juegp', 1, 2),
(15934687, 'xbox', 'call of duty', 'accion', 'pegi18', 'xbox', 1, 1),
(1515151515, 'SEGUNDA', 'LA CONSOLA', 'ACCION,MAS ACCION', 'pegi18', 'ES UN JUEGO BUENO', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Consulta`
--
ALTER TABLE `Consulta`
  ADD KEY `fk_Consulta_Usuarios_idx` (`Usuarios_idUsuarios`),
  ADD KEY `fk_Consulta_Videojuego1_idx` (`Videojuego_idVideojuego`);

--
-- Indices de la tabla `Desarrollo`
--
ALTER TABLE `Desarrollo`
  ADD PRIMARY KEY (`idDesarrollo`);

--
-- Indices de la tabla `Distribuidor`
--
ALTER TABLE `Distribuidor`
  ADD PRIMARY KEY (`idDistribuidor`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- Indices de la tabla `Videojuego`
--
ALTER TABLE `Videojuego`
  ADD PRIMARY KEY (`idVideojuego`),
  ADD KEY `fk_Videojuego_Distribuidor1_idx` (`Distribuidor_idDistribuidor`),
  ADD KEY `fk_Videojuego_Desarrollo1_idx` (`Desarrollo_idDesarrollo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Desarrollo`
--
ALTER TABLE `Desarrollo`
  MODIFY `idDesarrollo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Distribuidor`
--
ALTER TABLE `Distribuidor`
  MODIFY `idDistribuidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Videojuego`
--
ALTER TABLE `Videojuego`
  MODIFY `idVideojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1515151524;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Consulta`
--
ALTER TABLE `Consulta`
  ADD CONSTRAINT `fk_Consulta_Usuarios` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `Usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Consulta_Videojuego1` FOREIGN KEY (`Videojuego_idVideojuego`) REFERENCES `Videojuego` (`idVideojuego`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Videojuego`
--
ALTER TABLE `Videojuego`
  ADD CONSTRAINT `fk_Videojuego_Desarrollo1` FOREIGN KEY (`Desarrollo_idDesarrollo`) REFERENCES `Desarrollo` (`idDesarrollo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Videojuego_Distribuidor1` FOREIGN KEY (`Distribuidor_idDistribuidor`) REFERENCES `Distribuidor` (`idDistribuidor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
