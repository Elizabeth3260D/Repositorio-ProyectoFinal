-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2021 a las 02:22:09
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `segundabasededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papeleria`
--

CREATE TABLE `papeleria` (
  `Id_producto` int(11) NOT NULL,
  `Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `Codigo_de_Barra` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `papeleria`
--

INSERT INTO `papeleria` (`Id_producto`, `Producto`, `Precio`, `Codigo_de_Barra`, `Descripcion`, `Fecha`) VALUES
(2, 'Bolígrafo negro', '$12.00', 'USDF4BV93', 'Tinta: Negra   Marca: Bic', '2021-06-09'),
(3, 'Marcadores Crayola', ' $35', 'HB87GT6C', 'Contenido: 10pz', '2021-06-10'),
(4, 'Borrador', '$10.00', 'HJW38GD32', 'Color: Rosa  Marca: Pelikan', '2021-06-12'),
(5, 'Cuaderno', '$28.00', '74F3WIUF9', '100 Hojas de Raya', '2021-06-13'),
(6, 'Cuaderno', ' $23', '7395F4FR9F', '100 Hojas de Cuadricula', '2021-06-13'),
(7, 'Engrapadora ', '$40.00', 'H74NED30', 'Mini Clásica   Color:Negra    Marca: Swingline', '2021-06-14'),
(8, 'Marca textos Mildiner', '$90.00', '93DBF3029', '15pz Marca:  Zebra Pen', '2021-06-14'),
(9, 'Juego de Bolígrafos de Colores', '$75.00', 'K83BS04W', '7pz    Marca: Zebra Sarasa', '2021-06-14'),
(10, 'Mini Libreta Portatil', '$68.00', 'JC7DDD2FNX', 'Pasta Ecológica de Corcho de 80 Hojas de Raya.', '2021-06-14'),
(11, 'Pegamento Liquido', '$38.00', 'KSN83E120', 'Marca: Elmer\'s  de 16oz', '2021-06-14'),
(12, 'Organizador de Escritorio', '$99.00', 'NCE9FEDE8F', 'Marca:  Aupsen    Color: Oro', '2021-06-14'),
(13, 'Ejemplo', '$00.00', 'IWUC94', 'CWOEXCWKECW', '2021-06-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_provedores`
--

CREATE TABLE `registro_provedores` (
  `Id_provedor` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Primer_apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Segundo_apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_cel` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_solicitud` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro_provedores`
--

INSERT INTO `registro_provedores` (`Id_provedor`, `Nombre`, `Primer_apellido`, `Segundo_apellido`, `Direccion`, `Telefono_cel`, `Correo`, `Fecha_solicitud`) VALUES
(1, 'Brayan', 'Dominguez', 'Guillen', 'Priv. Grerrero Negro #974', '6565732274', 'brayan@gmail.com', '2021-06-12'),
(5, 'Eduardo', 'Dominguez', 'Olvera', 'Agua prieta #405', '6561237799', 'eduardo@gmail.com', '2021-06-13'),
(6, 'Provedor', 'Ejemplo', 'Ejemplo2', 'Ejemplo #000', '6561234567', 'provedor@gmil.com', '2021-06-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_usuarios`
--

CREATE TABLE `tipos_de_usuarios` (
  `Id_tipousuario` int(2) NOT NULL,
  `Rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipos_de_usuarios`
--

INSERT INTO `tipos_de_usuarios` (`Id_tipousuario`, `Rol`) VALUES
(1, 'Administrador '),
(2, 'Cliente'),
(3, 'Provedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_registrados`
--

CREATE TABLE `usuarios_registrados` (
  `Id_usuario` int(2) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_registro` date NOT NULL,
  `Id_tipousuario` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios_registrados`
--

INSERT INTO `usuarios_registrados` (`Id_usuario`, `Nombre`, `Apellido`, `Email`, `Contraseña`, `Fecha_registro`, `Id_tipousuario`) VALUES
(2, 'Maria', 'Duran', 'maria@gmail.com', '$2y$10$AwahXRn325wDlaynNmPQveXGaDGw8t8QLbfAhSnhXTDzzXH6dc16W', '2021-06-07', 2),
(3, 'Elizabeth', 'Dominguez', 'eli@gmail.com', '$2y$10$Heog/lEzhZ2seDH87H3iWehzQClj/DG0Ya98eA0shW5tHiPhTWYZG', '2021-06-07', 1),
(7, 'Yandel', 'Marin', 'yandel@gmail.com', '$2y$10$4sQrL3aO0rXm3Lx.1WY3i.TX12CNn00d9o8s85jckqifeQdbh62hi', '2021-06-12', 3),
(8, 'Alejandra', 'Delgado', 'alejandra@gmail.com', '$2y$10$HjZsRynyOfw5A/OocMItEeem6Q6.1610t.tl56ft7fRGf4PI20LDW', '2021-06-13', 2),
(9, 'Eduardo', 'Dominguez', 'eduardo@gmail.com', '$2y$10$yimNS3QFgMqg8OO8a5.FT.9Vg.aDjiy26NK2/mTrXLcfI2DKjb5tG', '2021-06-13', 3),
(10, 'Ejemplo', 'Ejemplo', 'ejemplo@gmail.com', '$2y$10$O3Eu8go/Ke.1NcGBMiNsKeIkT/wUpj.J0hd3JKVGW9Y.Yedicn1Xy', '2021-06-14', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `papeleria`
--
ALTER TABLE `papeleria`
  ADD PRIMARY KEY (`Id_producto`);

--
-- Indices de la tabla `registro_provedores`
--
ALTER TABLE `registro_provedores`
  ADD PRIMARY KEY (`Id_provedor`);

--
-- Indices de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  ADD PRIMARY KEY (`Id_tipousuario`);

--
-- Indices de la tabla `usuarios_registrados`
--
ALTER TABLE `usuarios_registrados`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `fk_tipousuario_usuarios` (`Id_tipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `papeleria`
--
ALTER TABLE `papeleria`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `registro_provedores`
--
ALTER TABLE `registro_provedores`
  MODIFY `Id_provedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  MODIFY `Id_tipousuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_registrados`
--
ALTER TABLE `usuarios_registrados`
  MODIFY `Id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_registrados`
--
ALTER TABLE `usuarios_registrados`
  ADD CONSTRAINT `fk_tipousuario_usuarios` FOREIGN KEY (`Id_tipousuario`) REFERENCES `tipos_de_usuarios` (`Id_tipousuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
