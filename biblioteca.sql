-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2018 a las 18:02:50
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adeudos`
--

CREATE TABLE `adeudos` (
  `ID_Adeudos` int(11) NOT NULL,
  `Prestamos_FK` int(11) DEFAULT NULL,
  `Cantidad` double DEFAULT NULL,
  `Pagado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `ID_Areas` int(11) NOT NULL,
  `Area` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`ID_Areas`, `Area`) VALUES
(1, 'Sistemas Computacionales'),
(2, 'Industrial'),
(3, 'Gestion Empresarial'),
(4, 'Matematicas'),
(5, 'Electromecanica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `ID_Carrera` int(11) NOT NULL,
  `Carrera` varchar(50) DEFAULT NULL,
  `Codigo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`ID_Carrera`, `Carrera`, `Codigo`) VALUES
(1, 'Ing. En Sistemas Computacionales', NULL),
(2, 'Ing. En Gestion Empresarial', NULL),
(3, 'Ing. Industrial', NULL),
(4, 'Ing. En Industrias Alimentarias', NULL),
(5, 'Ing. Electromecanica', NULL),
(6, 'Ing. Ambiental', NULL),
(7, 'N/A', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ID_Libro` int(11) NOT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Autor` varchar(100) DEFAULT NULL,
  `Titulo_Original` varchar(100) DEFAULT NULL,
  `Anio_Edicion` int(5) DEFAULT NULL,
  `Lugar_Edicion` varchar(100) DEFAULT NULL,
  `Editorial` varchar(70) DEFAULT NULL,
  `Paginas` int(5) DEFAULT NULL,
  `Ubicacion_FK` int(11) DEFAULT NULL,
  `Volumen` int(5) DEFAULT NULL,
  `Num_Serie` varchar(50) DEFAULT NULL,
  `Carrera_FK` int(11) DEFAULT NULL,
  `URL` varchar(150) DEFAULT NULL,
  `Tema_General_FK` int(11) DEFAULT NULL,
  `Tema_Especifico` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_detalle`
--

CREATE TABLE `libros_detalle` (
  `ID_Detalle` int(11) NOT NULL,
  `ISNB` varchar(50) NOT NULL,
  `Codigo_Barras` varchar(20) DEFAULT NULL,
  `Libros_FK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID_Prestamo` int(11) NOT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `Prestatario_FK` int(11) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos_detalle`
--

CREATE TABLE `prestamos_detalle` (
  `ID_Prestamo_Detalle` int(11) NOT NULL,
  `Libro_FK` int(11) NOT NULL,
  `Prestamo_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestatario`
--

CREATE TABLE `prestatario` (
  `ID_Prestatario` int(11) NOT NULL,
  `Nombres` varchar(60) DEFAULT NULL,
  `ApellidoP` varchar(30) DEFAULT NULL,
  `ApellidoM` varchar(30) DEFAULT NULL,
  `Carrera_FK` int(11) DEFAULT NULL,
  `Semestre` varchar(20) DEFAULT NULL,
  `Tipo_FK` int(11) DEFAULT NULL,
  `No_Control` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Domicilio` varchar(100) DEFAULT NULL,
  `Colonia` varchar(50) DEFAULT NULL,
  `Municipio` varchar(50) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `CP` varchar(10) DEFAULT NULL,
  `Fecha_Re` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema_general`
--

CREATE TABLE `tema_general` (
  `ID_Tema_Gral` int(11) NOT NULL,
  `Tema` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tema_general`
--

INSERT INTO `tema_general` (`ID_Tema_Gral`, `Tema`) VALUES
(1, 'Fisica'),
(2, 'Quimica'),
(3, 'Programacion'),
(4, 'Matematicas'),
(5, 'Literatura'),
(6, 'Ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_prestatario`
--

CREATE TABLE `tipo_prestatario` (
  `ID_Tipo` int(11) NOT NULL,
  `Tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_prestatario`
--

INSERT INTO `tipo_prestatario` (`ID_Tipo`, `Tipo`) VALUES
(1, 'Maestro'),
(2, 'Alumno'),
(3, 'Administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `ID_Ubicacion` int(11) NOT NULL,
  `Fila` varchar(5) DEFAULT NULL,
  `Area_FK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`ID_Ubicacion`, `Fila`, `Area_FK`) VALUES
(1, '1', 1),
(2, '2', 3),
(3, '3', 4),
(4, '4', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL,
  `Usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Contrasenia` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Usuario`, `Contrasenia`, `Tipo`) VALUES
(1, 'Juan', '123', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adeudos`
--
ALTER TABLE `adeudos`
  ADD PRIMARY KEY (`ID_Adeudos`),
  ADD KEY `Prestamos_FK` (`Prestamos_FK`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`ID_Areas`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`ID_Carrera`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID_Libro`),
  ADD KEY `Carrera_FK` (`Carrera_FK`),
  ADD KEY `Tema_General_FK` (`Tema_General_FK`),
  ADD KEY `Ubicacion_FK` (`Ubicacion_FK`);

--
-- Indices de la tabla `libros_detalle`
--
ALTER TABLE `libros_detalle`
  ADD PRIMARY KEY (`ID_Detalle`),
  ADD KEY `Libros_FK` (`Libros_FK`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID_Prestamo`),
  ADD KEY `Prestatario_FK` (`Prestatario_FK`);

--
-- Indices de la tabla `prestamos_detalle`
--
ALTER TABLE `prestamos_detalle`
  ADD PRIMARY KEY (`ID_Prestamo_Detalle`),
  ADD KEY `Libro_FK` (`Libro_FK`),
  ADD KEY `Prestamo_FK` (`Prestamo_FK`);

--
-- Indices de la tabla `prestatario`
--
ALTER TABLE `prestatario`
  ADD PRIMARY KEY (`ID_Prestatario`),
  ADD KEY `Carrera_FK` (`Carrera_FK`),
  ADD KEY `Tipo_FK` (`Tipo_FK`);

--
-- Indices de la tabla `tema_general`
--
ALTER TABLE `tema_general`
  ADD PRIMARY KEY (`ID_Tema_Gral`);

--
-- Indices de la tabla `tipo_prestatario`
--
ALTER TABLE `tipo_prestatario`
  ADD PRIMARY KEY (`ID_Tipo`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`ID_Ubicacion`),
  ADD KEY `Area_FK` (`Area_FK`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adeudos`
--
ALTER TABLE `adeudos`
  ADD CONSTRAINT `adeudos_ibfk_1` FOREIGN KEY (`Prestamos_FK`) REFERENCES `prestamos` (`ID_Prestamo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`Carrera_FK`) REFERENCES `carrera` (`ID_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`Tema_General_FK`) REFERENCES `tema_general` (`ID_Tema_Gral`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`Ubicacion_FK`) REFERENCES `ubicacion` (`ID_Ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros_detalle`
--
ALTER TABLE `libros_detalle`
  ADD CONSTRAINT `libros_detalle_ibfk_1` FOREIGN KEY (`Libros_FK`) REFERENCES `libros` (`ID_Libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`Prestatario_FK`) REFERENCES `prestatario` (`ID_Prestatario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamos_detalle`
--
ALTER TABLE `prestamos_detalle`
  ADD CONSTRAINT `prestamos_detalle_ibfk_1` FOREIGN KEY (`Libro_FK`) REFERENCES `libros` (`ID_Libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_detalle_ibfk_2` FOREIGN KEY (`Prestamo_FK`) REFERENCES `prestamos` (`ID_Prestamo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestatario`
--
ALTER TABLE `prestatario`
  ADD CONSTRAINT `prestatario_ibfk_1` FOREIGN KEY (`Carrera_FK`) REFERENCES `carrera` (`ID_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestatario_ibfk_2` FOREIGN KEY (`Tipo_FK`) REFERENCES `tipo_prestatario` (`ID_Tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`Area_FK`) REFERENCES `areas` (`ID_Areas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
