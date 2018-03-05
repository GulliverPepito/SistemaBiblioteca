-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2018 a las 19:25:04
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `ID_Areas` int(11) NOT NULL,
  `Area` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `ISBN` varchar(20) DEFAULT NULL,
  `Codigo_Barras` varchar(20) DEFAULT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID_Libro`, `ISBN`, `Codigo_Barras`, `Titulo`, `Autor`, `Titulo_Original`, `Anio_Edicion`, `Lugar_Edicion`, `Editorial`, `Paginas`, `Ubicacion_FK`, `Volumen`, `Num_Serie`, `Carrera_FK`, `URL`, `Tema_General_FK`, `Tema_Especifico`) VALUES
(1, '322324343', '1232342', 'Codigo de Da Vinci', 'Dan Brown', 'Code Da vinci', 2014, 'California', 'Planeta', 300, 1, 3, '123232', 1, 'http://web.com', 5, 'Literatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_detalle`
--

CREATE TABLE `libros_detalle` (
  `ID_Detalle` int(11) NOT NULL,
  `ISNB` varchar(50) NOT NULL,
  `Codigo_Barras` varchar(20) DEFAULT NULL,
  `Libros_FK` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID_Prestamo` int(11) NOT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `Prestatario_FK` int(11) DEFAULT NULL,
  `Libro_FK` int(11) DEFAULT NULL,
  `Vencido` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prestatario`
--

INSERT INTO `prestatario` (`ID_Prestatario`, `Nombres`, `ApellidoP`, `ApellidoM`, `Carrera_FK`, `Semestre`, `Tipo_FK`, `No_Control`, `Email`, `Telefono`, `Domicilio`, `Colonia`, `Municipio`, `Estado`, `CP`, `Fecha_Re`) VALUES
(1, 'Juan RamÃ³n', 'GarcÃ­a', 'Ãngel', 1, '8', 2, '141600003', 'jramongarciaangel@gmail.com', '3481167983', 'Pedro Velazquez #99', 'Caja Popular', 'Arandas', 'Jalisco ', '47180', '0000-00-00 00:00:00'),
(2, 'Pedro', 'Lopez', 'Lopez', 5, '4', 2, '1500005', 'pedro@hotmail.com', '3481265879', 'Av. Colon', 'Centro', 'Arandas', 'Jalisco', '47180', '0000-00-00 00:00:00'),
(3, 'sdfgh', 'sdfgh', 'sadfgh', 2, '1', 1, '45187596', 'sadfg@asdfg', '54156', 'sdfgh', 'Zxdvb', 'sdfgbh', 'sdfg', '4774', '2018-02-26 09:48:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema_general`
--

CREATE TABLE `tema_general` (
  `ID_Tema_Gral` int(11) NOT NULL,
  `Tema` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`ID_Adeudos`);

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
  ADD PRIMARY KEY (`ID_Libro`);

--
-- Indices de la tabla `libros_detalle`
--
ALTER TABLE `libros_detalle`
  ADD PRIMARY KEY (`ID_Detalle`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID_Prestamo`);

--
-- Indices de la tabla `prestatario`
--
ALTER TABLE `prestatario`
  ADD PRIMARY KEY (`ID_Prestatario`);

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
  ADD PRIMARY KEY (`ID_Ubicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `Usuario` (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adeudos`
--
ALTER TABLE `adeudos`
  MODIFY `ID_Adeudos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `ID_Areas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `ID_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `ID_Libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libros_detalle`
--
ALTER TABLE `libros_detalle`
  MODIFY `ID_Detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `ID_Prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestatario`
--
ALTER TABLE `prestatario`
  MODIFY `ID_Prestatario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tema_general`
--
ALTER TABLE `tema_general`
  MODIFY `ID_Tema_Gral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_prestatario`
--
ALTER TABLE `tipo_prestatario`
  MODIFY `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `ID_Ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
