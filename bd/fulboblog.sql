-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2023 a las 20:43:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fulboblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `resumen` text NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `usuario_id`, `titulo`, `resumen`, `texto`, `imagen`, `fecha`) VALUES
(1, 1, 'Primera entrada', 'Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada ', 'Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada Primera entrada ', '1686961514-0.jpg', '2023-06-16 20:43:18'),
(2, 1, 'Segunda entrada', 'Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada ', 'Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada Segunda entrada ', '1686961496-0.jpg', '2023-06-16 20:44:43'),
(3, 1, 'Tercera entrada', 'TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada ', 'TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada TErcera entrada ', '1686961445-0.png', '2023-06-16 20:54:39'),
(4, 1, 'Cuarto post', 'Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post ', 'Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post Cuarto post ', '1686961417-0.jpg', '2023-06-16 20:56:54'),
(6, 1, 'Nico', 'Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico ', 'Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico Nico ', '1686967342-1.png', '2023-06-16 23:02:22'),
(7, 1, 'Nicolas Macias ', 'Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias ', 'Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias Nicolas Macias ', '1686967737-1.jpg', '2023-06-16 23:08:57'),
(8, 3, 'Nico Segunda cuenta', 'Nico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuenta', 'Nico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuentaNico Segunda cuenta', '1686967817-3.jpg', '2023-06-16 23:10:17'),
(13, 10, 'Nahuel Bustos Soy', 'Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos ', 'Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos Soy nahuel Bustos ', '1687026931-10.jpg', '2023-06-17 15:35:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `pass`) VALUES
(1, 'Nicolas Macias', 'nico@mail.com', 'qwer'),
(3, 'Nico', 'nico@nico.com', 'asdf'),
(4, 'Agustin', 'agus@agus.com', 'qwer'),
(6, 'Agustin', 'agus@mail.com', 'qwer'),
(7, 'Agustin', 'agustin@mail.com', 'qwer'),
(8, 'nico', 'nicolas@nico.com', 'qwer'),
(9, 'Lionel Messiaasd', 'messi@mail.com', 'qwer'),
(10, 'Nahuel Bustos', 'nb@nb.com', 'qwer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
