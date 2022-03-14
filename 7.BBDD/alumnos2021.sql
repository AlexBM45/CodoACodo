-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2022 a las 02:13:05
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni` int(10) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `dni`, `telefono`, `correo`, `password`) VALUES
(1, 'Carlos', 'Fuentes', 11111111, '7845123698', 'carlos@example.com', '12345'),
(2, 'Samuel', 'Benitez', 12345678, '1234567890', 'samuel@example.com', '12345'),
(3, 'Joaquín', 'Barros', 326985, '1569874', 'joaquin@example', '1234'),
(4, 'Marcos', 'Juarez', 328985, '454645', 'marcos@example', '12df'),
(5, 'Josue', 'Hernandez', 328985, '454645', 'josue@example', ''),
(6, 'Maria', 'Gonzalez', 3289345, '4435235', 'maria@example', '1452df'),
(7, 'Fernando', 'García', 3289345, '4435235', 'max@example', ''),
(8, 'Maximiliano', 'Flores', 12345678, '1235647952', 'max@example.com', '1gh452'),
(10, 'Maximino', 'Guzman', 12345678, '1235647952', 'max@example.com', ''),
(11, 'Emilio', 'Guzman', 12345678, '1235647952', 'emilio@example.com', '1gh452'),
(12, 'Maximiliano', 'Flores', 12345678, '1235647952', 'max@example.com', '1gh452'),
(13, 'Jose', 'Jimenez', 208044, '551234656', 'jose@example.com', '4v3tg45'),
(14, 'Frida', 'Martinez', 208044, '551234656', 'lilithaglament@comunidad.', ''),
(15, 'Brenda', 'Martinez', 208044, '551234656', 'lilithaglament@comunidad.', 'sdcfgbrth'),
(16, 'Maria', 'Martinez', 123445634, '8754976284', 'maria@example.com', 'gb456'),
(17, 'Carlos', 'Guzman', 45645740, '45457456745', 'carlos@example.com', 'gb456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
