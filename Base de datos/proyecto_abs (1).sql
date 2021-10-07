-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2021 a las 20:53:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto abs`
--
CREATE DATABASE IF NOT EXISTS `proyecto abs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyecto abs`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(10) NOT NULL,
  `placas` varchar(7) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `fecha_alta` date NOT NULL DEFAULT current_timestamp(),
  `color` varchar(15) NOT NULL,
  `combustible` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `placas`, `marca`, `modelo`, `fecha_adquisicion`, `estatus`, `fecha_alta`, `color`, `combustible`) VALUES
(23, '12-24-2', 'CHEVROLET', 'AVEO', '2021-10-14', 'Disponible', '2021-10-05', '#000000', 'Gasolina'),
(24, '48AS52', 'CHEVROLET', 'CAMARO', '2021-10-14', 'Baja', '2021-10-05', '#000000', 'Gasolina'),
(25, '12AS12A', 'CHEVROLET', 'TIDA', '2021-10-22', 'Enviado', '2021-10-05', '#000000', 'Gasolina'),
(26, '12AS22A', 'CHEVROLET', 'AVEO', '2021-10-01', 'Asignado', '2021-10-05', '#000000', 'Disel'),
(27, 'AS45AS8', 'CHEVROLET', 'MALIBU', '2021-10-01', 'Asignado', '2021-10-05', '#000000', 'Gasolina'),
(28, '45AS89A', 'CHEVROLET', 'AVEO', '2021-10-07', 'Baja', '2021-10-05', '#000000', 'Gasolina'),
(29, '14AS85A', 'FORD', 'F-150', '2021-10-08', 'Disponible', '2021-10-07', '#bf0d0d', 'Gasolina'),
(34, '14AS45S', 'FORD', 'F150', '2021-09-30', 'Enviado', '2021-10-07', '#d5ecec', 'Gasolina'),
(35, 'AS45AS4', 'CHEVROLET', 'AVEO', '2021-10-01', 'Baja', '2021-10-07', '#d71414', 'Gasolina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
