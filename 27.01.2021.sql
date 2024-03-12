-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2021 a las 23:32:28
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
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `idDoctor` int(10) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `fecha nacimiento` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`idDoctor`, `Nombres`, `Apellidos`, `fecha nacimiento`, `direccion`, `telefono`, `ciudad`, `sexo`) VALUES
(1, 'Ricardo Julio', 'Iberico Granda', '2020-01-11', 'av 9 de noviembre', '93812121', 'Camana', '10'),
(2, 'Richy', 'Iberico Gonzales', '2020-01-11', 'av 9 de noviembre 155', '95842361', 'Camana', '10'),
(3, 'Maria Luisa', 'Lopez Obrador', '1932-11-15', 'calle quilca 321', '987654321', 'Camana', '20'),
(4, 'asd', 'asdasd', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `idFicha` int(10) NOT NULL,
  `idDoctor` int(10) NOT NULL,
  `idPaciente` int(10) NOT NULL,
  `Debe` int(10) NOT NULL,
  `Haber` int(10) NOT NULL,
  `Saldo` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `tratamiento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`idFicha`, `idDoctor`, `idPaciente`, `Debe`, `Haber`, `Saldo`, `fecha`, `tratamiento`) VALUES
(1, 1, 2, 0, 500, 0, '2021-01-27', 0),
(2, 1, 2, 0, 500, 0, '2021-01-27', 0),
(3, 2, 2, 0, 500, 0, '2020-01-12', 0),
(4, 2, 2, 0, 250, 0, '2021-01-15', 0),
(5, 1, 2, 0, 500, 0, '2021-01-15', 5),
(6, 1, 2, 0, 500, 0, '2021-01-15', 5),
(7, 2, 24, 0, 300, 0, '2021-01-11', 5),
(8, 2, 41, 0, 1500, 0, '2020-04-14', 5),
(9, 3, 2, 0, 500, 0, '2020-03-11', 19),
(10, 3, 2, 60, 500, -440, '2020-03-11', 0),
(11, 2, 2, 550, 550, 0, '2020-03-11', 3);

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
(2, 'Sofia Maria', '2000-05-19', '987654321', 'avenida lima 22', 'ninguna', 'instagran', 'Ugarte Gonzales', 'femenino', 'endodoncia'),
(7, 'Jose luis', '2000-05-01', '95123231', 'jiron pizarro 44 ', 'ninguna', 'facebook', 'Martinez Alcantara', '10', 'endodoncia'),
(24, 'Karen', '2000-05-01', '89213456', 'calle quilca 312', 'ninguna', 'conocidos', 'Garcia Marquez', '20', 'ortodoncia'),
(38, 'Marta', '2000-11-13', '878654321', 'calle pierola 33', 'polen', 'amigos de amigos', 'Gutierrez', '20', 'brackets'),
(39, 'Thiago Alejandro', '1991-11-12', '987654321', 'avenida camana 231', 'ninguna', 'publicidad', 'Perez Lopez', '10', 'limpieza'),
(40, 'Ricardo Alberto', '1991-11-15', '987654321', 'pasaje tasara 317', 'aspirina', 'conocidos', 'Perez Melgarejo', '10', 'profilaxis'),
(41, 'Teresa', '2000-02-12', '75321641', 'calle monte 432 3C', 'ninguna', 'facebook', 'Martinez', '20', 'sellado de muela'),
(42, 'Javier', '2000-12-13', '91111111', 'calle 28 de julio 231', 'ninguna', 'otros no especificado', 'Solis', '10', 'cotizacion'),
(43, 'Luis', '0000-00-00', '', '', '', '', 'Perez', '', ''),
(44, 'Luis', '0000-00-00', '', '', '', '', 'Perez', '', ''),
(45, 'Luis', '0000-00-00', '', '', '', '', 'Perez', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifario`
--

CREATE TABLE `tarifario` (
  `idTarifa` int(10) NOT NULL,
  `curacionSimple` int(10) NOT NULL DEFAULT '60',
  `curacionGrande` int(10) NOT NULL DEFAULT '80',
  `inicialOrtodoncia` int(10) NOT NULL DEFAULT '550',
  `continuacionOrtodoncia` int(10) NOT NULL DEFAULT '350',
  `mensualidadOrtodoncia` int(10) NOT NULL DEFAULT '150',
  `exodoncia` int(10) NOT NULL DEFAULT '50',
  `tercerMolar` int(10) NOT NULL DEFAULT '250',
  `protesisCromoCobalto` int(10) NOT NULL DEFAULT '1300',
  `protesisFlexibles` int(10) NOT NULL DEFAULT '1900',
  `mantenedor` int(10) NOT NULL DEFAULT '250',
  `endodoncia` int(10) NOT NULL DEFAULT '350',
  `coronadePorcelana` int(10) NOT NULL DEFAULT '500',
  `coronadeZirconio` int(10) NOT NULL DEFAULT '850',
  `placasMiorelajantes` int(10) NOT NULL DEFAULT '250',
  `fluor` int(10) NOT NULL DEFAULT '40',
  `sellantes` int(10) NOT NULL DEFAULT '40',
  `pulpectomia` int(10) NOT NULL DEFAULT '180',
  `blanqueamiento` int(10) NOT NULL DEFAULT '350',
  `placaExpansora` int(10) NOT NULL DEFAULT '250',
  `incrustacion` int(10) NOT NULL DEFAULT '350'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarifario`
--

INSERT INTO `tarifario` (`idTarifa`, `curacionSimple`, `curacionGrande`, `inicialOrtodoncia`, `continuacionOrtodoncia`, `mensualidadOrtodoncia`, `exodoncia`, `tercerMolar`, `protesisCromoCobalto`, `protesisFlexibles`, `mantenedor`, `endodoncia`, `coronadePorcelana`, `coronadeZirconio`, `placasMiorelajantes`, `fluor`, `sellantes`, `pulpectomia`, `blanqueamiento`, `placaExpansora`, `incrustacion`) VALUES
(1, 60, 80, 550, 350, 150, 50, 250, 1300, 1900, 250, 350, 500, 850, 250, 40, 40, 180, 350, 250, 350);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`idDoctor`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`idFicha`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Indices de la tabla `tarifario`
--
ALTER TABLE `tarifario`
  ADD PRIMARY KEY (`idTarifa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `idDoctor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `idFicha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tarifario`
--
ALTER TABLE `tarifario`
  MODIFY `idTarifa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
