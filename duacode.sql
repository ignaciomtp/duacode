-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2023 a las 19:11:49
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `duacode`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `deporte` varchar(60) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `ciudad`, `deporte`, `fecha_creacion`) VALUES
(1, 'Real Madrid', 'Madrid', 'Fútbol', '1902-03-02'),
(2, 'LA Lakers', 'Los Angeles', 'Baloncesto', '1960-05-01'),
(3, 'Boston Celtics', 'Boston', 'Baloncesto', '1946-09-16'),
(10, 'Chicago Bulls', 'Chicago', 'Baloncesto', '1973-03-16'),
(11, 'Arsenal F.C.', 'Londres', 'Fútbol', '1889-06-05'),
(14, 'Tottenham Hotspur', 'Londres', 'Fútbol', '2023-09-15'),
(15, 'F.C. Barcelona', 'Barcelona', 'Fútbol', '2023-09-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `numero` int(2) NOT NULL,
  `capitan` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `id_equipo`, `nombre`, `apellidos`, `numero`, `capitan`, `fecha_nacimiento`) VALUES
(1, 1, 'Cristiano', 'Ronaldo', 7, 0, '1985-02-05'),
(2, 2, 'Earvin', '\'Magic\' Johnson', 32, 0, '1959-08-14'),
(4, 3, 'Larry', 'Bird', 33, 1, '1950-06-06'),
(5, 2, 'Kareem', 'Abdull Jabbar', 33, 0, '1943-05-01'),
(6, 1, 'Raúl', 'González Blanco', 7, 1, '1975-04-05'),
(10, 1, 'Marcelo', 'Vieira', 3, 0, '2023-09-06'),
(11, 1, 'Ruud ', 'Van Nistelroy', 9, 0, '2023-09-06'),
(12, 10, 'Michael', 'Jordan', 23, 1, '2023-08-08'),
(14, 15, 'Ronaldinho', 'Gaucho', 10, 0, '2023-09-07'),
(15, 15, 'Lionel', 'Messi', 10, 1, '2023-09-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
