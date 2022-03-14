-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2022 a las 22:10:07
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
-- Base de datos: `reto2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `dni`, `telefono`, `correo`, `password`) VALUES
(1, 'Joaquín', 'Flores', '54849645', '7845123698', 'joaquin@example.com', '12345'),
(2, 'Maximiliano', 'Flores', '12345678', '1234567890', 'max@example.com', '12345'),
(3, 'Frida', 'Montalvo', '4563213', '124556788', 'frida@example.com', 'tgrv35ds2'),
(5, 'Alejandra', 'Benitez', '0208044', '5611787693', 'alejandra@example.com', 'v4v5trfgfg'),
(7, 'Josue', 'Jimenez', '436576', '34655647', 'josue@example.com', 'v4v5trfwececrf'),
(8, 'Susana', 'Castañeda', '3t684234', '2145456566', 'susana@example.com', 'vg56nu6'),
(9, 'Alicia', 'Toledo', '17574279', '6479063146', 'alicia@example.com', 'y5bu7mi66nu5'),
(10, 'Leon', 'Rodriguez', '34657678', '4345665767', 'leon@example.com', '45by56nu'),
(11, 'Lía', 'Fernandez', '43578654', '2136556824', 'lia@example.com', '45bye7un'),
(12, 'Isabel', 'Gomez', '3t684234', '34655647', 'isabel@example.com', 'w45gn7ue55ui');

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
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
