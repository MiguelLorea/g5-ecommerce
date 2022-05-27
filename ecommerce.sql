-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2022 a las 00:03:48
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(10) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `clave_producto` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(10) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `nombredeusuario` varchar(100) NOT NULL,
  `cuil` int(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `direccion` text NOT NULL,
  `nombretienda` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `clave`, `nombredeusuario`, `cuil`, `telefono`, `categoria`, `direccion`, `nombretienda`, `foto`) VALUES
(2, 'a5d89d0f6564291d43d6536250c5ab04b42ed25a', 'dfgdf', 2150, 15, 'MODA', 'dfgd', 'foto_producto/producto.png', ''),
(3, '3da0da5d613c257b629421a728b0e562b0d65150', '', 2150, 15, 'MODA', 'dfgd', 'foto_producto/producto.png', ''),
(4, '5207cbd72881cf2f9422b00f08012747f50cf3fb', '21510', 51405, 4504, 'MODA', '650', 'foto_producto/producto.png', ''),
(5, '6604305d8b388fd9a7c020e28c1d1215979b39a5', '121405', 5454, 5405, 'ELECTRONICA', '056', 'foto_producto/producto.png', ''),
(6, '8bc47d1d083cb1dddb4450a8a0597693a3553ac2', 'telefono', 0, 1, 'MODA', '18', 'foto_producto/producto.png', ''),
(7, 'efe98c1e641915144fe4a4ae3d10ea68e6889fcc', 'fgd', 2105, 2105, 'ELECTRONICA', 'fdg', 'foto_producto/producto.png', ''),
(8, 'e2f6cb388c31625a0460618a9e3bb3071040cedf', '1', 210515, 111, 'JOYERIA', '15', 'foto_producto/producto.png', ''),
(9, '19994f99c07f8b891d3ce192ef9eb7b7d2ef6ba3', '1', 210515, 111, 'JOYERIA', '15', 'foto_producto/producto.png', ''),
(10, '9c292eef69d6db5b9cafd95a6093f964cc1c5f7e', 'miki', 20451254, 2147483647, 'JOYERIA', '2515', 'foto_producto/producto.png', ''),
(11, '7cc3e6cd88401ceaa783d5d1da9b406aa23e69bc', 'miki', 2055828, 2147483647, 'JOYERIA', '30541', 'foto_producto/producto.png', ''),
(12, 'd39c56f9cc58e0b7820e879af9952fbb8b048543', 'miki', 205895, 3492528, 'ELECTRONICA', 'maip 1', 'nombre', 'foto_producto/producto.png'),
(13, 'c59e5511c277a73742d25f14814999d0696148da', 'miki', 205895, 3492528, 'ELECTRONICA', 'maip 1', 'nombre', 'foto_producto/producto.png'),
(14, '01550031385d93ea5fb03529a9ecb0deb94c1be1', 'miki', 2015528, 35695656, 'MODA', '32566', 'd1cf5sd15', 'foto_producto/producto.png'),
(15, '925e62bf743633a6124469e4af617ab5870bbc6a', 'Micky', 205825589, 2147483647, 'ELECTRONICA', 'maipu 399', 'nombre tienda', 'foto_producto/925e62bf743633a6124469e4af617ab5870bbc6a.png'),
(16, '2eaa6b0f37c0901c602d7d65d8c86a8272c0c79a', 'Micky', 205825589, 2147483647, 'ELECTRONICA', 'maipu 399', 'nombre tienda', 'foto_producto/2eaa6b0f37c0901c602d7d65d8c86a8272c0c79a.png'),
(17, 'c01705ecab07c603ff1a0f96446bc346589222a0', 'Micky', 2147483647, 35136289, 'ELECTRONICA', 'maipu 136', 'nombre tienda', 'foto_producto/c01705ecab07c603ff1a0f96446bc346589222a0.jpg'),
(19, '0e0fd62c7000a07e31c3f0542ca982c46c46fe1e', '21', 141, 5405, 'ELECTRONICA', '21051', '5045', 'foto_producto/0e0fd62c7000a07e31c3f0542ca982c46c46fe1e.jpg'),
(20, '4f1fcdcc4761e2252354d778df907a98f7387c47', '21', 141, 5405, 'ELECTRONICA', '21051', '5045', 'foto_producto/4f1fcdcc4761e2252354d778df907a98f7387c47.jpg'),
(21, '25c7c33d87fb4a39f1856c802147c28d400bf104', '21', 141, 5405, 'ELECTRONICA', '21051', '5045', 'foto_producto/25c7c33d87fb4a39f1856c802147c28d400bf104.jpg'),
(22, 'a8ae210b85a3bf7c5db1cc2094c79ffe5d201ea8', 'Micky', 2147483647, 1254554, 'ELECTRONICA', 'mapui89', 'nombre t', 'foto_producto/a8ae210b85a3bf7c5db1cc2094c79ffe5d201ea8.png'),
(23, '9b73f55eca7e2c239f852d0d2d6d65c9c02dffe2', 'pablo', 2147483647, 54125454, 'MODA', 'sfddgdf', 'mnombre', 'foto_producto/9b73f55eca7e2c239f852d0d2d6d65c9c02dffe2.jpg'),
(24, '5c07542459c6b074ab0f47d8382f7e4bfc950446', 'dfghf', 54365, 56456, 'ELECTRONICA', '456456', '645645', 'foto_producto/producto.png'),
(25, '52a18e63e27f9345558de214e3d620ffb8ce4cd1', 'dfghf', 54365, 56456, 'ELECTRONICA', '456456', '645645', 'foto_producto/producto.png'),
(26, 'de4c5938be30abc6806755bc834a602ef9a9214b', 'dfghf', 54365, 56456, 'ELECTRONICA', '456456', '645645', 'foto_producto/producto.png'),
(27, '50f9fa2b3d503a12509e8e5ffb80a8e5113f425b', 'dfghf', 54365, 56456, 'ELECTRONICA', '456456', '645645', 'foto_producto/producto.png'),
(28, '3ad3089069e92b08d9e4e82f0437b28263cd8688', 'dfghf', 54365, 56456, 'ELECTRONICA', '456456', '645645', 'foto_producto/producto.png'),
(29, 'a09dcc93dc34a5de21fe0a670bda905831386e9f', 'dfghf', 54365, 56456, 'ELECTRONICA', '456456', '645645', 'foto_producto/producto.png'),
(30, 'd244315f2cf6dcbee036c5d2739444a5c8b7f31b', 'fhggf', 532534, 5345, 'MODA', '543', '354', 'foto_producto/producto.png'),
(31, '816f3133aeb4beb976ed4dcd02cfe49c9feca274', '121', 12312312, 312312, 'MODA', '123123', '1231231', 'foto_producto/producto.png'),
(32, 'ec48372aa6ea9d5791217c5167927ddac8d91493', 'sdad', 1515, 54054, 'MODA', '405', '54054', 'foto_producto/producto.png'),
(33, '986891fe16035d1a99be3685a51abbf765fb2513', 'joel', 455640, 4102548, 'ELECTRONICA', 'av ssaas', 'dnjknas', 'foto_producto/producto.png'),
(34, 'c7149d2711e51a014483469b8269e265a11050fe', 'drfgtdf', 543645, 564564, 'MODA', '54645', '64564', 'foto_producto/producto.png'),
(35, '868f3a6905c915061c0013cf32f33303df275ab3', '245', 545, 545, 'MODA', '2541', 'yhg', 'foto_producto/producto.png'),
(36, '00a38ddf5d7ec4a82726a7a739ee8eafb9592aa8', 'Miguel', 56125484, 54084, 'MODA', '0584', '540', 'foto_producto/producto.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`) VALUES
('miki', '123456'),
('m18', '123456'),
('miki', '123456'),
('app.tannf@gmail.com', 'mikimiki'),
('app.tannf@gmail.com', 'mikimiki'),
('app.tannf@gmail.com', 'mikimiki'),
('app.tannf@gmail.com', 'mikimiki'),
('app.tannf@gmail.com', 'mikimiki'),
('mikik', 'miki'),
('mikik', 'miki'),
('1', '1'),
('2', '2'),
('Micky', '1111'),
('joel', 'jaja'),
('Miguel', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
