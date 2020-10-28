-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-10-2020 a las 23:25:05
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15227712_examen`
--
CREATE DATABASE IF NOT EXISTS `id15227712_examen` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id15227712_examen`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualiza`
--

CREATE TABLE `actualiza` (
  `idZombie` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actualiza`
--

INSERT INTO `actualiza` (`idZombie`, `idEstado`, `created-at`) VALUES
(30000, 20000, '2020-10-28 20:35:37'),
(24921, 20000, '2020-10-28 22:15:19'),
(26859, 20004, '2020-10-28 22:15:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estado`
--

CREATE TABLE `Estado` (
  `idEstado` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Estado`
--

INSERT INTO `Estado` (`idEstado`, `Nombre`) VALUES
(20000, 'Infeccion'),
(20001, 'Desorientacion'),
(20002, 'Violencia'),
(20003, 'Desmayo'),
(20004, 'Transformacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Zombie`
--

CREATE TABLE `Zombie` (
  `idZombie` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Zombie`
--

INSERT INTO `Zombie` (`idZombie`, `Nombre`) VALUES
(20184, 'Fernando Vargas'),
(20658, 'Fernando Vargas'),
(21182, 'Fernando Vargas'),
(21364, 'Fernando Vargas'),
(21530, 'Juan Jose Diaz Andre'),
(21831, 'Fernando Vargas'),
(21933, 'Juan Jose Diaz Andre'),
(22488, 'Fernando Vargas'),
(22659, 'Fernando Vargas'),
(23110, 'Leonardo Vargas'),
(24921, 'Juan Jose Diaz Andre'),
(25028, 'Fernando Vargas'),
(25131, 'Juan Jose Diaz Andre'),
(25527, 'Juan Jose Diaz Andre'),
(25950, 'Juan Jose Diaz Andre'),
(26006, 'Fernando Vargas'),
(26429, 'Juan Jose Diaz Andre'),
(26503, 'Fernando Vargas'),
(26506, 'Juan Jose Diaz Andre'),
(26604, 'Juan Jose Diaz Andre'),
(26859, 'Fernando Vargas'),
(26990, 'Juan Jose Diaz Andre'),
(26999, 'Fernando Vargas'),
(28649, 'Fernando Vargas'),
(28721, 'Leonardo Vargas'),
(28948, 'Juan Jose Diaz Andre'),
(29345, 'Fernando Vargas'),
(29516, 'Fernando Vargas'),
(30000, 'Fernando Vargas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualiza`
--
ALTER TABLE `actualiza`
  ADD KEY `actualiza_index` (`idZombie`,`idEstado`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `Estado`
--
ALTER TABLE `Estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `Zombie`
--
ALTER TABLE `Zombie`
  ADD PRIMARY KEY (`idZombie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Estado`
--
ALTER TABLE `Estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20005;

--
-- AUTO_INCREMENT de la tabla `Zombie`
--
ALTER TABLE `Zombie`
  MODIFY `idZombie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30001;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualiza`
--
ALTER TABLE `actualiza`
  ADD CONSTRAINT `actualiza_ibfk_2` FOREIGN KEY (`idZombie`) REFERENCES `Zombie` (`idZombie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actualiza_ibfk_3` FOREIGN KEY (`idEstado`) REFERENCES `Estado` (`idEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
