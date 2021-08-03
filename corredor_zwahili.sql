-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2021 a las 00:20:36
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `corredor_zwahili`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_productos`
--

CREATE TABLE `cat_productos` (
  `ID_BD` int(11) NOT NULL,
  `idCodigo_Cat` varchar(50) NOT NULL,
  `Nombre_Categoría` varchar(50) NOT NULL,
  `AnchoRollo` float NOT NULL,
  `RindeRollo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_productos`
--

INSERT INTO `cat_productos` (`ID_BD`, `idCodigo_Cat`, `Nombre_Categoría`, `AnchoRollo`, `RindeRollo`) VALUES
(0, 'CD1', 'Conjuntos Deportivos', 1.6, 1.8),
(0, 'CD2', 'Conjuntos Deportivos', 1.9, 1.8),
(0, 'RD', 'Remería deportiva', 1.6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Teléfono` decimal(12,0) NOT NULL,
  `Contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Nombre`, `Apellidos`, `Email`, `Teléfono`, `Contraseña`) VALUES
('Angie Katherine', 'Venegas Cedeño', 'gikavenegas@gmail.com', '1128176756', 'cespedes987'),
('Daniel', 'Lopez', 'dani@gmail.com', '1187596862', 'dani98765'),
('Juan', 'Velez', 'alexsanchez@gmail.com', '11987654321', 'alex123sanchez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Prod` int(11) NOT NULL,
  `CodigoCat_id` varchar(50) NOT NULL,
  `Nombre_Producto` varchar(50) NOT NULL,
  `Precio_kiloRollo` int(7) NOT NULL,
  `Precio_final` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_Prod`, `CodigoCat_id`, `Nombre_Producto`, `Precio_kiloRollo`, `Precio_final`) VALUES
(11, 'CD1', 'Deportivo frisado', 920, 960),
(12, 'CD2', 'Deportivo microfibra frisado', 1000, 1040);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `DNI` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Teléfono` decimal(12,0) NOT NULL,
  `Dirección` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`DNI`, `Nombre`, `Apellido`, `Teléfono`, `Dirección`) VALUES
(85123568, 'Juan', 'Valdes', '11987654321', '9 de julio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_cat`
--

CREATE TABLE `prueba_cat` (
  `idCategoria` varchar(12) NOT NULL,
  `Nombre_Categoría` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prueba_cat`
--

INSERT INTO `prueba_cat` (`idCategoria`, `Nombre_Categoría`) VALUES
('123', 'Prueba'),
('AR', 'Prueba2'),
('CDa16r18', 'Conjuntos Deportivos'),
('prueba', 'jjjjjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_prod`
--

CREATE TABLE `prueba_prod` (
  `idProducto` int(11) NOT NULL,
  `NombreProducto` varchar(50) NOT NULL,
  `idCatprod` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_productos`
--
ALTER TABLE `cat_productos`
  ADD PRIMARY KEY (`idCodigo_Cat`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Teléfono`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Prod`),
  ADD KEY `CodigoCat_id` (`CodigoCat_id`) USING BTREE;

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `prueba_cat`
--
ALTER TABLE `prueba_cat`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `prueba_prod`
--
ALTER TABLE `prueba_prod`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `CatProd` (`idProducto`),
  ADD KEY `CatProduct` (`idCatprod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `prueba_prod`
--
ALTER TABLE `prueba_prod`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `Cat-NomProd` FOREIGN KEY (`CodigoCat_id`) REFERENCES `cat_productos` (`idCodigo_Cat`);

--
-- Filtros para la tabla `prueba_prod`
--
ALTER TABLE `prueba_prod`
  ADD CONSTRAINT `CatProduct` FOREIGN KEY (`idCatprod`) REFERENCES `prueba_cat` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
