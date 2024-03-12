-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2020 a las 00:21:15
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iberico`
--
DROP DATABASE IF EXISTS `iberico`;
CREATE DATABASE IF NOT EXISTS `iberico` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `iberico`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `idPaciente` int(10) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `fecha nacimiento` date NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `alergias` varchar(50) DEFAULT NULL,
  `comonosconocio` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `motivoconsulta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `Nombres`, `fecha nacimiento`, `telefono`, `direccion`, `alergias`, `comonosconocio`, `Apellidos`, `sexo`, `motivoconsulta`) VALUES
(2, 'Yadhyra Angelica', '2000-05-19', '955533715', 'Asociacion los chavez M-A L-23', 'no', 'Facebook', 'Pachao', 'femenino', 'curacion caries'),
(3, 'Yadhyra Angelica', '2000-05-19', '955533715', 'Asociacion los chavez M-A L-23', 'no', 'Facebook', 'Pachao', 'femenino', 'curacion caries'),
(4, 'Yadhyra Angelica', '2000-05-19', '955533715', 'Asociacion los chavez M-A L-23', 'no', 'Facebook', 'Pachao', 'femenino', 'curacion caries'),
(5, 'Yadhyra Angelica', '2000-05-19', '955533715', 'Asociacion los chavez M-A L-23', 'no', 'Facebook', 'Pachao', 'femenino', 'curacion caries'),
(6, 'Yadhyra Angelica', '2000-05-19', '955533715', 'Asociacion los chavez M-A L-23', 'no', 'Facebook', 'Pachao', 'femenino', 'curacion caries'),
(7, 'Juan', '2000-05-01', '12121212', 'calle quilca 445', 'SÃ­', '20', 'Lopez', '10', 'Caries'),
(8, 'Luisa', '2000-05-01', '123123132', 'jiron ocoÃ±a 544', 'Polen', '30', 'Barrena', '20', 'Caries'),
(9, 'Luisa', '2000-05-01', '123123132', 'jiron ocoÃ±a 544', 'Polen', '30', 'Barrena', '20', 'Caries');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
