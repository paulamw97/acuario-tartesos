-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2021 a las 18:23:16
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acuariostartesos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peces`
--

CREATE TABLE `peces` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `tipo` int(11) NOT NULL,
  `scotck` int(11) NOT NULL,
  `precio` float(6,2) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peces`
--

INSERT INTO `peces` (`id`, `nombre`, `descripcion`, `tipo`, `scotck`, `precio`, `foto`) VALUES
(1, '3 colas', '\r\n', 2, 30, 3.90, '3 colas.jpg'),
(2, 'Gurami perla ', '', 1, 100, 3.90, 'gurami perla.jpg'),
(3, 'Ancistrus Oro', '', 1, 50, 5.70, 'Ancistrusoro.jpg'),
(4, 'Ancistrus', '', 1, 100, 3.70, 'Ancistrus-sp.jpg'),
(5, 'Aulonocaras', '', 1, 10, 12.90, 'aulonocara.jpg'),
(6, 'Betta cronwtile', '', 1, 2, 6.90, 'betta cronw tile.jpg'),
(7, 'Cometas', '', 2, 200, 1.90, 'cometa.jpg'),
(8, 'Molly Balón', '', 1, 30, 3.90, 'molly balon.jpg'),
(9, 'Pez Payaso', '', 3, 2, 20.00, 'payaso.jpg'),
(10, 'Pez Payaso Nevado', '', 3, 3, 160.00, 'payasonevado.jpg'),
(11, 'Pez cirujano', '', 3, 8, 20.00, 'cirujano.jpg'),
(12, 'Chupaalgas de Siam', '', 1, 60, 3.00, 'siam.jpg'),
(13, 'Kribensis', '', 1, 100, 4.50, 'kribensis.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(8, 'paulamwrg@gmail.com', '$2y$10$U6GyDZUX5oREDZW9qPjubeR1djyOXO7HawnpSedgKqS216sP.SraC'),
(9, 'carina@gmail.com', '$2y$10$f/yElwRdeegT3M9k0ctv8.f.YyPvg3ebDJYLTD0lVTzcn.lJ.LDqK'),
(10, 'lola', '$2y$10$9y5JlmRurYMsHQcrqz/gTuX8SQFkMIte3YHSiCU2Mdy6etrE3eKJ6'),
(11, 'hola@gmail.com', '$2y$10$2UZoRzTnFO5AjDClHzAJAO6vu74ZX.s94fsAmJCNxZvPWBZdvhfz.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peces`
--
ALTER TABLE `peces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peces`
--
ALTER TABLE `peces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
