-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2017 a las 15:21:56
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
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `pass` text NOT NULL,
  `permiso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id`, `usuario`, `password`, `pass`, `permiso`) VALUES
(1, 'admin', 'admin', 'admin', 'administrador'),
(2, 'venta1', 'venta', 'venta', 'venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adorno`
--

CREATE TABLE `adorno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `gramos` text NOT NULL,
  `Harina` varchar(100) NOT NULL,
  `azucar` text NOT NULL,
  `manteca` text NOT NULL,
  `saborizante` text NOT NULL,
  `extra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adorno`
--

INSERT INTO `adorno` (`id`, `nombre`, `gramos`, `Harina`, `azucar`, `manteca`, `saborizante`, `extra`) VALUES
(1, 'adorno1', 'migajon20g', '10', '5', '5', '.1', '.8'),
(2, 'adorno2', '40', '20', '10', '10', '.2', '.20'),
(3, 'adorno3', '37', '.30', '.10', '.20', '.10', '.20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decoracion`
--

CREATE TABLE `decoracion` (
  `id` int(11) NOT NULL,
  `producto` text NOT NULL,
  `cantidad` text NOT NULL,
  `costo` text NOT NULL,
  `kgcosto` text NOT NULL,
  `gcosto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `decoracion`
--

INSERT INTO `decoracion` (`id`, `producto`, `cantidad`, `costo`, `kgcosto`, `gcosto`) VALUES
(1, 'chocolate ', '1', '35.00', '35', '0.035'),
(2, 'cocoa', '5', '150', '30', '0.03'),
(3, 'nuez', '1', '60.00', '60', '0.06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_gen`
--

CREATE TABLE `inv_gen` (
  `id` int(11) NOT NULL,
  `producto` varchar(20) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cant` varchar(10) NOT NULL,
  `merma` varchar(50) NOT NULL,
  `costog` varchar(10) NOT NULL,
  `costok` varchar(10) NOT NULL,
  `costogr` varchar(10) NOT NULL,
  `Cant_ocu` varchar(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inv_gen`
--

INSERT INTO `inv_gen` (`id`, `producto`, `marca`, `cant`, `merma`, `costog`, `costok`, `costogr`, `Cant_ocu`, `fecha`) VALUES
(1, 'harina', 'alta', '44', '', '365', '8.29545454', '0.00829545', '', '0000-00-00'),
(2, 'azucar', 'alta', '50', '', '760', '15.2', '0.0152', '', '0000-00-00'),
(3, 'manteca', '---', '24', '', '540', '22.5', '0.0225', '', '0000-00-00'),
(4, 'huevo', '---', '20', '', '450', '22.5', '0.0225', '', '0000-00-00'),
(5, 'canela', '', '1', '', '120', '120', '0.12', '', '0000-00-00'),
(6, 'esenciamantequilla', '', '4', '', '100', '25', '0.025', '', '0000-00-00'),
(7, 'colhuevo', '', '1', '', '50', '50', '0.05', '', '0000-00-00'),
(8, 'agua', '', '20', '', '20', '1', '0.001', '', '0000-00-00'),
(9, 'sal', '', '50', '', '200', '4', '0.004', '', '0000-00-00'),
(11, 'levadura', '', '12', '', '450', '37.5', '0.0375', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `masa_migajon`
--

CREATE TABLE `masa_migajon` (
  `id` int(11) NOT NULL,
  `nom_insumo` varchar(100) NOT NULL,
  `cantidad` text NOT NULL,
  `Harina` text NOT NULL,
  `azucar` text NOT NULL,
  `manteca` text NOT NULL,
  `huevo` text NOT NULL,
  `can_molida` text NOT NULL,
  `ecencia_mlla` text NOT NULL,
  `col_huevo` text NOT NULL,
  `agua` text NOT NULL,
  `sal` text NOT NULL,
  `levadura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `masa_migajon`
--

INSERT INTO `masa_migajon` (`id`, `nom_insumo`, `cantidad`, `Harina`, `azucar`, `manteca`, `huevo`, `can_molida`, `ecencia_mlla`, `col_huevo`, `agua`, `sal`, `levadura`) VALUES
(3, 'migajon20g', '20 ', '10', '2.5', '1.8', '2.5', '0.1', '0.1', '0.1', '3', '0.05', '0.4'),
(4, 'migajon40g', '40', '20', '5', '3.6', '5', '0.2', '0.2', '0.2', '6', '0.1', '0.8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nvo_pan`
--

CREATE TABLE `nvo_pan` (
  `id_pan` int(11) NOT NULL,
  `nombre` varchar(110) NOT NULL,
  `nom_insumo` varchar(100) NOT NULL,
  `precio` text NOT NULL,
  `Harina` text NOT NULL,
  `azucar` text NOT NULL,
  `manteca` text NOT NULL,
  `huevo` text NOT NULL,
  `can_molida` text NOT NULL,
  `ecencia_mlla` text NOT NULL,
  `col_huevo` text NOT NULL,
  `agua` text NOT NULL,
  `sal` text NOT NULL,
  `levadura` text NOT NULL,
  `adorno` text NOT NULL,
  `aharina` text NOT NULL,
  `aazucar` text NOT NULL,
  `amanteca` text NOT NULL,
  `asabor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nvo_pan`
--

INSERT INTO `nvo_pan` (`id_pan`, `nombre`, `nom_insumo`, `precio`, `Harina`, `azucar`, `manteca`, `huevo`, `can_molida`, `ecencia_mlla`, `col_huevo`, `agua`, `sal`, `levadura`, `adorno`, `aharina`, `aazucar`, `amanteca`, `asabor`) VALUES
(1, 'concha', 'migajon20g', '2.00', '10', '2.5', '1.8', '2.5', '0.1', '0.1', '0.1', '3', '0.05', '0.4', 'adorno1', '10', '5', '5', '.1'),
(2, 'dona', 'migajon20g', '2', '10', '2.5', '1.8', '2.5', '0.1', '0.1', '0.1', '3', '0.05', '0.4', 'adorno1', '10', '5', '5', '.1');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ID` int(11) NOT NULL,
  `id_pan` int(11) NOT NULL,
  `nombre` varchar(110) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nom_insumo` varchar(100) NOT NULL,
  `Harina` text NOT NULL,
  `azucar` text NOT NULL,
  `manteca` text NOT NULL,
  `huevo` text NOT NULL,
  `can_molida` text NOT NULL,
  `ecencia_mlla` text NOT NULL,
  `col_huevo` text NOT NULL,
  `agua` text NOT NULL,
  `sal` text NOT NULL,
  `levadura` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`ID`, `id_pan`, `nombre`, `cantidad`, `nom_insumo`, `Harina`, `azucar`, `manteca`, `huevo`, `can_molida`, `ecencia_mlla`, `col_huevo`, `agua`, `sal`, `levadura`, `total`) VALUES
(1, 1, 'concha', 200, 'migajon20g', '2000', '500', '360', '500', '20', '20', '20', '600', '10', '80', '51.1209'),
(2, 1, 'concha', 20, 'migajon20g', '200', '50', '36', '50', '2', '2', '2', '60', '1', '8', '5.11209'),
(3, 1, 'concha', 100, 'migajon20g', '1000', '250', '180', '250', '10', '10', '10', '300', '5', '40', '25.56045');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_u` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pass2` varchar(20) NOT NULL,
  `permiso` text NOT NULL,
  `estado` varchar(25) NOT NULL,
  `fecha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_u`, `nombre`, `password`, `pass2`, `permiso`, `estado`, `fecha`) VALUES
(1, 'fabricio', '8cb2237d0679ca88db64', '8cb2237d0679ca88db64', 'Administrador', 'Activo', '21-05-2017'),
(2, 'a', '6216f8a75fd5bb3d5f22', '6216f8a75fd5bb3d5f22', 'Administrador', 'Activo', '21-05-2017'),
(3, 'real', '40bd001563085fc35165', '40bd001563085fc35165', 'Administrador', 'Activo', '21-05-2017'),
(4, 'sal', '12345', '12345', 'administrador', 'activo', ''),
(5, 'uno', '81b6f50734d17c2cfc16', '81b6f50734d17c2cfc16', 'Administrador', 'Activo', '23-05-2017');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `adorno`
--
ALTER TABLE `adorno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `decoracion`
--
ALTER TABLE `decoracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_gen`
--
ALTER TABLE `inv_gen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `masa_migajon`
--
ALTER TABLE `masa_migajon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nvo_pan`
--
ALTER TABLE `nvo_pan`
  ADD PRIMARY KEY (`id_pan`),
  ADD KEY `idm` (`nom_insumo`);

--
-- Indices de la tabla `pan_insumos`
--
ALTER TABLE `pan_insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idm` (`nom_insumo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `adorno`
--
ALTER TABLE `adorno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `decoracion`
--
ALTER TABLE `decoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `inv_gen`
--
ALTER TABLE `inv_gen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `masa_migajon`
--
ALTER TABLE `masa_migajon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `nvo_pan`
--
ALTER TABLE `nvo_pan`
  MODIFY `id_pan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pan_insumos`
--
ALTER TABLE `pan_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
