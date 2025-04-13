-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2025 a las 19:40:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine_isil`
--
CREATE DATABASE IF NOT EXISTS `cine_isil` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cine_isil`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `director` varchar(255) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `premios` int(11) DEFAULT 0,
  `fechaCreacion` date DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `titulo`, `director`, `anio`, `genero`, `premios`, `fechaCreacion`, `duracion`) VALUES
(1, 'Inception', 'Christopher Nolan', 2010, 'Ciencia Ficción', 4, '2010-07-16', 148),
(2, 'Titanic', 'James Cameron', 1997, 'Romance', 11, '1997-12-19', 195),
(3, 'Pulp Fiction', 'Quentin Tarantino', 1994, 'Crimen', 1, '1994-10-14', 154),
(4, 'The Matrix', 'Lana Wachowski', 1999, 'Acción', 4, '1999-03-31', 136);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
