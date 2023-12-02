-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2023 a las 15:11:36
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tbm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento` varchar(10) NOT NULL,
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `fecha` date NOT NULL,
  `correo` text NOT NULL,
  `telefono` text NOT NULL,
  `contraseña` text NOT NULL,
  `fechar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento`, `nombres`, `apellidos`, `fecha`, `correo`, `telefono`, `contraseña`, `fechar`) VALUES
('', '', '', '0000-00-00', '', '', '$2y$10$v11lU6yr9VtTjRlDbjTq9eAXFMNCHOz6UVp.mbxa34fwlgb071bFO', '2023-12-02'),
('1033445566', 'Teresa', 'Andrade', '2023-12-19', 'teresa@gmail.com', '3135668897', '$2y$10$BXVvwd5OT/18JFUQ4DE24OOqiyqRhIMXHYSDLS9IHtQCJca8xrQ1i', '2023-12-02'),
('1078456095', 'Tonny Alexander', 'García Gonzalez', '2003-09-24', 'tonny@gmail.com', '3114002029', '$2y$10$Xw5LofsTbloPE9kmnBQCJecvTEHd/zd0ztWjeymkbvQ05FHq20ELy', '2023-12-02'),
('1122433567', 'Arinson', 'Hinestroza', '2023-12-29', 'arinson@gmail.com', '3221221221', '$2y$10$Ilgh8qhhfEjltv7/LtJPKe9bMZVS53kCVk2kfeHcOUutKI9idvd6a', '2023-12-02'),
('11998776', 'Walter', 'Valencia', '2023-12-27', 'walter@gmail.com', '3114002027', '$2y$10$KcG3WZh5hKvl6uvSZY1a3.vE0cZJBnoex/awNdWYG6ajyYuNipkae', '2023-12-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
