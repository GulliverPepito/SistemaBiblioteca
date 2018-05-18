-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2018 a las 20:08:38
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

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
CREATE DATABASE biblioteca;
USE biblioteca;


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

--
-- Volcado de datos para la tabla `adeudos`
--

INSERT INTO `adeudos` (`ID_Adeudos`, `Prestamos_FK`, `Cantidad`, `Pagado`) VALUES
(1, 19, 5, 1);

--
-- Disparadores `adeudos`
--
DELIMITER $$
CREATE TRIGGER `insertar_adeudos` BEFORE INSERT ON `adeudos` FOR EACH ROW BEGIN
UPDATE prestamos SET status=2 WHERE ID_Prestamo=New.Prestamos_FK;
END
$$
DELIMITER ;

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
(7, 'NA', NULL);

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

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID_Libro`, `Titulo`, `Autor`, `Titulo_Original`, `Anio_Edicion`, `Lugar_Edicion`, `Editorial`, `Paginas`, `Ubicacion_FK`, `Volumen`, `Num_Serie`, `Carrera_FK`, `URL`, `Tema_General_FK`, `Tema_Especifico`) VALUES
(1, 'Caballo de Troya', 'J. J. BenÃ­tez', 'Caballo de Troya', 1987, 'EspaÃ±a', 'Panama', 511, 1, 0, 'N/A', 7, 'http://www.alv.com', 5, 'Ciencia Ficcion'),
(2, 'Bases de Datos', 'MarquÃ©s, Mercedes', 'Bases de Datos', 2011, 'EspaÃ±a', 'Sapiente', 247, 3, 0, '0', 1, '', 3, 'Bases de Datos '),
(3, 'El Codigo de Da Vinci', 'Dan Brown', 'Da Vinci Code', 2014, 'Capilla', 'Planeta', 300, 1, 1, '232324234', 7, 'http://web.com', 5, 'Literatura'),
(4, 'Codigo de Da Vinci', 'Dan Brown', 'Da Vinci Code', 2013, 'Capilla', 'Planeta', 300, 2, 1, '23243243', 7, 'http://web.com', 5, 'Literatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_detalle`
--

CREATE TABLE `libros_detalle` (
  `ID_Detalle` int(11) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Codigo_Barras` varchar(20) DEFAULT NULL,
  `Libros_FK` int(11) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros_detalle`
--

INSERT INTO `libros_detalle` (`ID_Detalle`, `ISBN`, `Codigo_Barras`, `Libros_FK`, `Status`) VALUES
(8, 'asdasd445', 'sadasdas', 2, 1),
(9, '232324d', '343434', 2, 1),
(13, '3434', '43434', 2, 0),
(15, '3434jjjj', '43434jjj', 2, 0),
(16, 'dsdasdww', 'sdasdad', 2, 0),
(17, 'dsdasd3333', 'sdasda3333', 2, 0),
(18, '3434231121', '1231232323', 2, 0),
(19, 'frtewrewr66', 'rwrwrwrwr', 2, 0),
(20, 'ggggg67', 'gggggasdasda', 2, 0),
(21, 'fffff335', 'fffff', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID_Prestamo` int(11) NOT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `Prestatario_FK` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`ID_Prestamo`, `Fecha_Inicio`, `Fecha_Fin`, `Prestatario_FK`, `status`) VALUES
(19, '2018-04-18', '2018-04-23', 1, 2),
(20, '2018-04-24', '2018-05-19', 1, 0),
(21, '2018-04-24', '2018-05-19', 4, 1),
(22, '2018-04-24', '2018-05-19', 4, 1),
(23, '2018-05-03', '2018-05-28', 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos_detalle`
--

CREATE TABLE `prestamos_detalle` (
  `ID_Prestamo_Detalle` int(11) NOT NULL,
  `Libro_FK` int(11) NOT NULL,
  `Prestamo_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamos_detalle`
--

INSERT INTO `prestamos_detalle` (`ID_Prestamo_Detalle`, `Libro_FK`, `Prestamo_FK`) VALUES
(1, 9, 20),
(3, 9, 19),
(4, 9, 21),
(5, 8, 23);

--
-- Disparadores `prestamos_detalle`
--
DELIMITER $$
CREATE TRIGGER `eliminar_prestamo` BEFORE DELETE ON `prestamos_detalle` FOR EACH ROW BEGIN
UPDATE libros_detalle SET Status=0 WHERE ID_Detalle=OLD.Libro_FK;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_prestamo` BEFORE INSERT ON `prestamos_detalle` FOR EACH ROW BEGIN
UPDATE libros_detalle SET Status=1 WHERE ID_Detalle=New.Libro_FK;
END
$$
DELIMITER ;

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

--
-- Volcado de datos para la tabla `prestatario`
--

INSERT INTO `prestatario` (`ID_Prestatario`, `Nombres`, `ApellidoP`, `ApellidoM`, `Carrera_FK`, `Semestre`, `Tipo_FK`, `No_Control`, `Email`, `Telefono`, `Domicilio`, `Colonia`, `Municipio`, `Estado`, `CP`, `Fecha_Re`) VALUES
(1, 'Juan', 'Garcia ', 'Angel ', 1, '8', 4, '141600003', 'jramongarciaangel@gmail.com', '348154555', 'dsfghdsfgh', 'sdfg', 'sdfg', 'sdfg', '47180', '2018-03-31 14:35:34'),
(2, 'fcgvsds', 'dfg', 'sdfg', 2, '8', 2, '141600000', 'sfad@sds', '4155185', 'saddf', 'sdf', 'sdf', 'sad', '47180', '2018-03-31 15:45:01'),
(3, 'Marcelo ', 'RamÃ­rez ', 'Aceves', 1, 'na', 3, '0', 'marcelo.ramirez@tecarandas.edu.mx', '3333', 'aldama 126', 'centro', 'arandas', 'jalisco', '47180', '2018-04-18 09:38:10'),
(4, 'Jonathan', 'Gonzalez', 'Franco', 1, '8', 2, '141600009', 'jonipeque@hotmail.com', '3787078774', 'rayon#218', 'centro', 'capilla de guadalupe jal', 'Jalisco', '47700', '2018-04-24 21:40:56'),
(5, 'Rodolfo', 'Lara', 'Espinoza', 1, '8', 2, '141600004', 'rodspektre@gmail.com', '3481231828', 'Luis Y guillermo', 'rosario', 'arandas', 'jalisco', '47180', '2018-04-30 18:25:54'),
(7, 'Joaqui', 'G', 'g', 2, '8', 2, '123456789', 'example@gmail.com', '7845945123', 'ugfhir', 'rosario', 'arandas', 'jalisco', '47180', '2018-04-30 19:06:40');

--
-- Disparadores `prestatario`
--
DELIMITER $$
CREATE TRIGGER `crear_login` AFTER INSERT ON `prestatario` FOR EACH ROW BEGIN
INSERT INTO usuarios VALUES(NULL, NEW.No_Control,NEW.No_Control,NEW.Tipo_FK);
END
$$
DELIMITER ;

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
(3, 'Administrativo'),
(4, 'Admin');

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
(1, '141600003', '123', '1'),
(7, '123456789', '123456789', '2');

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
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD UNIQUE KEY `Codigo_Barras` (`Codigo_Barras`),
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adeudos`
--
ALTER TABLE `adeudos`
  MODIFY `ID_Adeudos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `ID_Libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libros_detalle`
--
ALTER TABLE `libros_detalle`
  MODIFY `ID_Detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `ID_Prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `prestamos_detalle`
--
ALTER TABLE `prestamos_detalle`
  MODIFY `ID_Prestamo_Detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestatario`
--
ALTER TABLE `prestatario`
  MODIFY `ID_Prestatario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tema_general`
--
ALTER TABLE `tema_general`
  MODIFY `ID_Tema_Gral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_prestatario`
--
ALTER TABLE `tipo_prestatario`
  MODIFY `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `ID_Ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `libros_ibfk_4` FOREIGN KEY (`Carrera_FK`) REFERENCES `carrera` (`ID_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_5` FOREIGN KEY (`Tema_General_FK`) REFERENCES `tema_general` (`ID_Tema_Gral`),
  ADD CONSTRAINT `libros_ibfk_6` FOREIGN KEY (`Ubicacion_FK`) REFERENCES `ubicacion` (`ID_Ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros_detalle`
--
ALTER TABLE `libros_detalle`
  ADD CONSTRAINT `libros_detalle_ibfk_1` FOREIGN KEY (`Libros_FK`) REFERENCES `libros` (`ID_Libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`Prestatario_FK`) REFERENCES `prestatario` (`ID_Prestatario`);

--
-- Filtros para la tabla `prestamos_detalle`
--
ALTER TABLE `prestamos_detalle`
  ADD CONSTRAINT `prestamos_detalle_ibfk_1` FOREIGN KEY (`Libro_FK`) REFERENCES `libros_detalle` (`ID_Detalle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_detalle_ibfk_2` FOREIGN KEY (`Prestamo_FK`) REFERENCES `prestamos` (`ID_Prestamo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestatario`
--
ALTER TABLE `prestatario`
  ADD CONSTRAINT `prestatario_ibfk_3` FOREIGN KEY (`Carrera_FK`) REFERENCES `carrera` (`ID_Carrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestatario_ibfk_4` FOREIGN KEY (`Tipo_FK`) REFERENCES `tipo_prestatario` (`ID_Tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`Area_FK`) REFERENCES `areas` (`ID_Areas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
