-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 15-03-2018 a las 02:28:28
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `Visita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Dato`
--

CREATE TABLE `Dato` (
  `Id_visita` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Genero` varchar(20) DEFAULT NULL,
  `Mensaje` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Dato`
--

INSERT INTO `Dato` (`Id_visita`, `Nombre`, `Genero`, `Mensaje`) VALUES
(1, 'Kevin', 'Masculino', 'Visite este sitio'),
(2, 'Eduardo', 'Masculino', 'Visiste este sitio'),
(3, 'Cinthia', 'Femenino', 'Visite este sitio'),
(4, 'Manuel', 'Masculino', 'Visite este sitio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Dato`
--
ALTER TABLE `Dato`
  ADD PRIMARY KEY (`Id_visita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Dato`
--
ALTER TABLE `Dato`
  MODIFY `Id_visita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;