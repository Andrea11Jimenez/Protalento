-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 05:38:54
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
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `Id` int(5) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Correo` varchar(500) NOT NULL,
  `Comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`Id`, `Nombre`, `Correo`, `Comentario`) VALUES
(1, 'Prueba', 'ejemplo@hotmail.com', 'Esto es un comentario'),
(2, 'Prueba', 'ejemplo@hotmail.com', 'Esto es un comentario'),
(3, 'Prueba2', 'prueba@hotmail.com', 'Sigan así');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `Nombre_Producto` varchar(500) NOT NULL,
  `Desc_Producto` varchar(500) NOT NULL,
  `Precio_Producto` decimal(50,0) NOT NULL,
  `Imagen_Producto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `Nombre_Producto`, `Desc_Producto`, `Precio_Producto`, `Imagen_Producto`) VALUES
(1, 'PC Gamer 1', 'Cuenta con procesador Intel Core i5 de 10ma generación, memoria ram de 16GB y SSD de 128 GB', 3000000, 'img/producto1.png'),
(2, 'PC Gamer 2', 'Caracterizado por una tarjeta de video RTX 1080 con procesasor Intel Core i7 de 8va generación', 4000000, 'img/producto2.png'),
(3, 'Pc Gamer 3', 'Equipado con un procesador Ryzen 5 Serie 4000 con 16 gb de Memoria Ram y SSD de 250gb ', 4000000, 'img/producto4.png'),
(4, 'GEFORCE RTX 2080', 'EVGA', 2500000, 'img/producto5.png'),
(5, 'Msi Gaming Laptop', 'Procesador Ryzen 3 seria 5000', 5000000, 'img/producto6.png'),
(6, 'Xiaomi mi notebook air 12.5', 'Pantalla 12,5 pulgadas Full HD (1.920 x 1.080)\r\nProcesador Intel Core i5 de séptima generación 8250U\r\nRAM 4 GB\r\nAlmacenamiento	256 GB SSD\r\nDimensiones 292x202x12.9 mm\r\nPeso 1,07 kilogramos\r\nConexiones HDMI, 1 USB-A, entrada de audio de 3,5 milímetros y USB tipo C\r\nExtras Teclado retroiluminado / Versión 4G', 7000000, 'img/producto7.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'prueba', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
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
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
