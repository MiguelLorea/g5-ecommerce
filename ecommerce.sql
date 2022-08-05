-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2022 a las 00:12:10
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

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `clave`, `clave_producto`, `ruta`) VALUES
(5, '8f16494b7c66b6d015935b6f872eb329331f147f', 'e325bd68881a56ecc9fc2f72835c95f6491700b6', 'fotos/8f16494b7c66b6d015935b6f872eb329331f147f8851.jpg'),
(6, 'b5525c203d64ec90024977d972a88948193b28cd', 'e325bd68881a56ecc9fc2f72835c95f6491700b6', 'fotos/b5525c203d64ec90024977d972a88948193b28cd4341.jpg'),
(7, 'c32268cf9cfca2d8a71e65cb603a53a4f3226c18', '72adf4107d81d69cc5ab6bb111986bb158c96f49', 'fotos/c32268cf9cfca2d8a71e65cb603a53a4f3226c18121.jpg');

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
(36, '00a38ddf5d7ec4a82726a7a739ee8eafb9592aa8', 'Miguel', 56125484, 54084, 'MODA', '0584', '540', 'foto_producto/producto.png'),
(37, '241849eb27f562c55dd124cef151c8fde1e3d4bc', 'fg', 5445, 434, 'ELECTRONICA', '454', '544', 'foto_producto/producto.png'),
(38, '4c33914bc8dc15df4ec3faa5c8f46123fe4540ae', 'fdg', 5464, 5645, 'JOYERIA', '54645', '64', ''),
(39, 'e325bd68881a56ecc9fc2f72835c95f6491700b6', 'cvgdfg', 5464, 56456, 'ELECTRONICA', '546', '564', 'foto_producto/e325bd68881a56ecc9fc2f72835c95f6491700b6.jpg'),
(40, 'a04e77299976cd9ac51ef0e97475e73dfd08f2e6', 'cz5x214', 1405445, 5405458, 'MODA', '21425', '0212', 'foto_producto/a04e77299976cd9ac51ef0e97475e73dfd08f2e6.jpg'),
(41, '06c78844513bfcdc0d99d6fed936073b0de84d06', 'pepe', 202154128, 2147483647, 'MODA', 'maipu 14', 'nombre toienda', 'foto_producto/06c78844513bfcdc0d99d6fed936073b0de84d06.jpg'),
(42, '3c1e5f9b60ea89d8d22b329dcf672baef6d8ac7f', '240584', 1414122, 154145, 'MODA', '15145', '14514551', 'foto_producto/producto.png'),
(43, '19acb1a7044b7deef9d96657ea039b56a444429f', '240584', 1414122, 154145, 'MODA', '15145', '14514551', 'foto_producto/producto.png'),
(44, 'da96c7f172d6e4d261fb768eb9f6856d419c902c', '2540512', 40554104, 54054, 'MODA', '0545', '5045405', 'foto_producto/producto.png'),
(45, '9963e54151576493b03a4d31796c73a8f4afce58', 'kjdfghkj', 10, 120, 'MODA', 'cvdfvg', '', 'foto_producto/producto.png');

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
('Miguel', '1'),
('joel1', '1'),
('Pepe1', '1'),
('pepe2', '1'),
('aa', 'aa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `clave`, `producto`, `cantidad`, `precio`, `categoria`, `descripcion`, `foto`) VALUES
(1, '56a19763dcaf1b64210026d57d29f41dad019f23', 'vbghn', 54345, '345', 'JOYERIA', '4534', ''),
(2, '093123b1ae8542c6566c89777dd2f891ce669a60', '563', 5, '20', 'JOYERIA', 'ghfj', ''),
(3, '81b42a843e248ff5bf58480ac71e0215586e8bba', 'bvgnvgn', 5324, '5343', 'MODA', 'khm', 'foto_producto/producto.png'),
(4, '96a70c30b4541e6181917d656c0c142e64b1815a', 'bhhjj', 3232, '32323', 'MODA', 'jhikk', 'foto_producto/producto.png'),
(5, '52e7f3dc89da6bb4793536d204c3fb06036820e0', '0121', 54045, '50454', 'MODA', '545fdfghhj', 'foto_producto/producto.png'),
(6, '931d6889f41915249f9383aa9b7b569278cacc39', '0121', 54045, '50454', 'MODA', '545fdfghhj', 'foto_producto/producto.png'),
(7, '535b8a33bb9fcfd5af70a8911fbba1eb4d859a85', '0121', 54045, '50454', 'MODA', '545fdfghhj', 'foto_producto/producto.png'),
(8, '8bd31cdfd84528f91f0fa08316c03a21346e0029', 'martillo', 200, '120', 'ELECTRONICA', '25f4ds54d1', 'foto_producto/producto.png'),
(9, 'e68d4ef6b0ccbb1e2309f50727afe6cea169c5b4', 'producto', 254, '250', 'ELECTRONICA', '4545saas', 'foto_producto/producto.png'),
(10, 'afe619b0754c3c874f42a8258bd67437a6a789d8', 'perla', 558, '120', 'JOYERIA', 'dsfs', 'foto_producto/producto.png'),
(11, 'd1144ffc1d01174a0d3622de670d61f130bd4e32', 'Reloj', 54, '4504', 'RELOJES', 'dghgff&ntilde;', 'foto_producto/producto.png'),
(12, '5b8261cec375d752ee2af2673eab90cb604ba5f8', 'Remera Spun Variedad De Colores', 200, '3500', 'MODA', 'remera ', 'foto_producto/5b8261cec375d752ee2af2673eab90cb604ba5f8.jpg'),
(13, '855ad96068b645d4de40a9ec1b07e6c6cb2bcf0d', 'Remera de hombre VANS CLASSIC ', 200, '5990', 'MODA', 'Remera de hombre VANS CLASSIC ', 'foto_producto/855ad96068b645d4de40a9ec1b07e6c6cb2bcf0d.jpg'),
(14, '7298c5b27b5c67021487cabd1ea76ed668814769', 'Remera Vamos Argentina', 556, '4800', 'MODA', '\r\nirarte\r\nRemera Vamos Argentina', 'foto_producto/7298c5b27b5c67021487cabd1ea76ed668814769.jpg'),
(15, 'e8d12f69c409a9290c442e14ccd44b6f895db0d2', 'Xbox one', 1269, '50000', 'ELECTRONICA', 'Xbox one', 'foto_producto/e8d12f69c409a9290c442e14ccd44b6f895db0d2.jpg'),
(16, '3313cfb02eaa5952da8adf10131e919732f2b8fb', 'mando xbox', 212514, '21500', 'ELECTRONICA', 'mando xbox', 'foto_producto/3313cfb02eaa5952da8adf10131e919732f2b8fb.jpg'),
(17, '72adf4107d81d69cc5ab6bb111986bb158c96f49', 'mando economico', 2545, '4800', 'ELECTRONICA', 'mando xbox', 'foto_producto/72adf4107d81d69cc5ab6bb111986bb158c96f49.jpg'),
(18, 'd2ed4e02f0f4742d40e1de0ab771f15601e7b958', 'Anillos', 55, '70000', 'JOYERIA', 'Anillos', 'foto_producto/d2ed4e02f0f4742d40e1de0ab771f15601e7b958.jpg'),
(19, '494404ae2d2fd219e7e266a67fa34e3e8a48b0b8', 'Anillo 2', 545, '80000', 'JOYERIA', 'Anillo 2', 'foto_producto/494404ae2d2fd219e7e266a67fa34e3e8a48b0b8.jpg'),
(20, '905ab9811bede5cf6f3ce6b42495a8c42870f379', 'Pulsera ', 2541, '5950', 'JOYERIA', 'Pulsera ', 'foto_producto/905ab9811bede5cf6f3ce6b42495a8c42870f379.jpg'),
(21, 'c5e8f66926dfbc3cbc914b45133ef61772cca653', 'Smartwatches: en oferta al mejor precio', 254254, '25000', 'RELOJES', 'Smartwatches: en oferta al mejor precio', 'foto_producto/c5e8f66926dfbc3cbc914b45133ef61772cca653.jpg'),
(22, '9aed3be2bdd59d662c7e9d578b3445bddf7246a7', 'Reloj inteligente 2022 hombre mujer', 2545, '20000', 'RELOJES', 'Reloj inteligente 2022  hombre mujer', 'foto_producto/9aed3be2bdd59d662c7e9d578b3445bddf7246a7.jpg'),
(23, '7c1add04a0a98a287b8b658f607685ae092cdcd5', 'Relojes para hombre y mujer', 1996, '12000', 'RELOJES', 'Relojes para hombre y mujer', 'foto_producto/7c1add04a0a98a287b8b658f607685ae092cdcd5.jpg'),
(24, '032b72b0777f0b5690312c75ea18bff8e3ec2952', 'remera chica', 323, '699', 'MODA', 'remera chica', 'foto_producto/032b72b0777f0b5690312c75ea18bff8e3ec2952.jpg');

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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
