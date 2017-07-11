-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2017 a las 03:31:31
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basepan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_gen`
--

CREATE TABLE `inv_gen` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cant` varchar(10) NOT NULL,
  `Cant_ocu` varchar(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inv_gen`
--

INSERT INTO `inv_gen` (`id`, `nombre`, `cant`, `Cant_ocu`, `fecha`) VALUES
(1, 'ing1', '120', '117.5', '2017-02-22'),
(2, 'ing2', '50', '48.4', '2017-02-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pan_insumos`
--

CREATE TABLE `pan_insumos` (
  `id` int(11) NOT NULL,
  `pan` varchar(30) NOT NULL,
  `ing1` text NOT NULL,
  `ing2` text NOT NULL,
  `ing3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Panaderia';

--
-- Volcado de datos para la tabla `pan_insumos`
--

INSERT INTO `pan_insumos` (`id`, `pan`, `ing1`, `ing2`, `ing3`) VALUES
(1, 'concha', '.500', '1', '.200'),
(2, 'Dona', '2', '.600', '.900'),
(3, 'laurel', '.300', '.200', '.100'),
(4, 'elote', '.30', '.5', '.50'),
(5, 'oreja', '.300', '.100', '.600');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inv_gen`
--
ALTER TABLE `inv_gen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pan_insumos`
--
ALTER TABLE `pan_insumos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inv_gen`
--
ALTER TABLE `inv_gen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pan_insumos`
--
ALTER TABLE `pan_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
