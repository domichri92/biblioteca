-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2024 a las 23:13:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `g-bibliotecaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-iniciar_sesion`
--

CREATE TABLE `tbl-iniciar_sesion` (
  `cc` char(15) NOT NULL,
  `contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-registrarse`
--

CREATE TABLE `tbl-registrarse` (
  `gmail` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `id_cc` char(15) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `teléfono` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl-registrarse`
--

INSERT INTO `tbl-registrarse` (`gmail`, `contraseña`, `id_cc`, `nombres`, `apellidos`, `teléfono`) VALUES
('vasacaergege@gmail.com', 'migallo009', '26377112', 'Yuji', 'Itadori', '009900'),
('jojo@gmail.com', '1234', '32216746233', 'Joseph', 'Joestar', '9876543');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-registrar_devolucion`
--

CREATE TABLE `tbl-registrar_devolucion` (
  `isbn` varchar(45) NOT NULL,
  `cc` char(15) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-registrar_material`
--

CREATE TABLE `tbl-registrar_material` (
  `isbn` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `coleccion` varchar(45) NOT NULL,
  `editorial` varchar(45) NOT NULL,
  `año_publicacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-registrar_prestamo`
--

CREATE TABLE `tbl-registrar_prestamo` (
  `isbn` varchar(45) NOT NULL,
  `cc` char(15) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-registrar_usuario`
--

CREATE TABLE `tbl-registrar_usuario` (
  `id_cc` char(15) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` char(10) NOT NULL,
  `cc_admin` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl-iniciar_sesion`
--
ALTER TABLE `tbl-iniciar_sesion`
  ADD KEY `contraseña` (`contraseña`),
  ADD KEY `cc` (`cc`);

--
-- Indices de la tabla `tbl-registrarse`
--
ALTER TABLE `tbl-registrarse`
  ADD PRIMARY KEY (`id_cc`),
  ADD KEY `contraseña` (`contraseña`);

--
-- Indices de la tabla `tbl-registrar_devolucion`
--
ALTER TABLE `tbl-registrar_devolucion`
  ADD KEY `isbn` (`isbn`,`cc`),
  ADD KEY `cc` (`cc`);

--
-- Indices de la tabla `tbl-registrar_material`
--
ALTER TABLE `tbl-registrar_material`
  ADD PRIMARY KEY (`isbn`);

--
-- Indices de la tabla `tbl-registrar_prestamo`
--
ALTER TABLE `tbl-registrar_prestamo`
  ADD KEY `isbn` (`isbn`,`cc`),
  ADD KEY `cc` (`cc`);

--
-- Indices de la tabla `tbl-registrar_usuario`
--
ALTER TABLE `tbl-registrar_usuario`
  ADD PRIMARY KEY (`id_cc`),
  ADD KEY `cc_admin` (`cc_admin`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl-iniciar_sesion`
--
ALTER TABLE `tbl-iniciar_sesion`
  ADD CONSTRAINT `tbl-iniciar_sesion_ibfk_1` FOREIGN KEY (`contraseña`) REFERENCES `tbl-registrarse` (`contraseña`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl-iniciar_sesion_ibfk_2` FOREIGN KEY (`cc`) REFERENCES `tbl-registrarse` (`id_cc`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl-registrar_devolucion`
--
ALTER TABLE `tbl-registrar_devolucion`
  ADD CONSTRAINT `tbl-registrar_devolucion_ibfk_1` FOREIGN KEY (`cc`) REFERENCES `tbl-registrar_usuario` (`id_cc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl-registrar_devolucion_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `tbl-registrar_material` (`isbn`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl-registrar_prestamo`
--
ALTER TABLE `tbl-registrar_prestamo`
  ADD CONSTRAINT `tbl-registrar_prestamo_ibfk_1` FOREIGN KEY (`cc`) REFERENCES `tbl-registrar_usuario` (`id_cc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl-registrar_prestamo_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `tbl-registrar_material` (`isbn`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl-registrar_usuario`
--
ALTER TABLE `tbl-registrar_usuario`
  ADD CONSTRAINT `tbl-registrar_usuario_ibfk_1` FOREIGN KEY (`cc_admin`) REFERENCES `tbl-registrarse` (`id_cc`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
