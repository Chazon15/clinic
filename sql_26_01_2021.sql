-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2021 a las 00:40:48
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
(2, 'Sofia Maria', '2000-05-19', '987654321', 'calle los jazmines 44 AC', 'ninguna', 'instagran', 'Ugarte Gonzales', 'femenino', 'endodoncia'),
(7, 'Jose luis', '2000-05-01', '95123231', 'jiron ocoÃ±a 44 ', 'ninguna', 'facebook', 'Martinez Alcantara', '10', 'endodoncia'),
(24, 'Karen', '2000-05-01', '89213456', 'calle quilca 312', 'ninguna', 'conocidos', 'Garcia Marquez', '20', 'ortodoncia'),
(38, 'Marta', '2000-11-13', '878654321', 'calle pierola 33', 'polen', 'amigos de amigos', 'Gutierrez', '20', 'brackets'),
(39, 'Thiago Alejandro', '1991-11-12', '987654321', 'avenida camana 231', 'ninguna', 'publicidad', 'Perez Lopez', '10', 'limpieza'),
(40, 'Ricardo Alberto', '1991-11-15', '987654321', 'pasaje tasara 317', 'aspirina', 'conocidos', 'Perez Melgarejo', '10', 'profilaxis'),
(41, 'Teresa', '2000-02-12', '75321641', 'calle monte 432 3C', 'ninguna', 'facebook', 'Martinez', '20', 'sellado de muela'),
(42, 'Javier', '2000-12-13', '91111111', 'calle 28 de julio 231', 'ninguna', 'otros no especificado', 'Solis', '10', 'cotizacion');

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
  MODIFY `idPaciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
