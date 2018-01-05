-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 03-01-2018 a las 20:13:01
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `biblioteca`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `adeudos`
-- 

CREATE TABLE `adeudos` (
  `ID_Adeudos` int(11) NOT NULL auto_increment,
  `Prestamos_FK` int(11) default NULL,
  `Cantidad` double default NULL,
  `Pagado` tinyint(1) default NULL,
  PRIMARY KEY  (`ID_Adeudos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `adeudos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `areas`
-- 

CREATE TABLE `areas` (
  `ID_Areas` int(11) NOT NULL auto_increment,
  `Area` varchar(30) default NULL,
  PRIMARY KEY  (`ID_Areas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `areas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `carrera`
-- 

CREATE TABLE `carrera` (
  `ID_Carrera` int(11) NOT NULL auto_increment,
  `Carrera` varchar(50) default NULL,
  `Codigo` varchar(30) default NULL,
  PRIMARY KEY  (`ID_Carrera`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `carrera`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `libros`
-- 

CREATE TABLE `libros` (
  `ID_Libro` int(11) NOT NULL auto_increment,
  `ISBN` varchar(20) default NULL,
  `Codigo_Barras` varchar(20) default NULL,
  `Titulo` varchar(100) default NULL,
  `Autor` varchar(100) default NULL,
  `Titulo_Original` varchar(100) default NULL,
  `Anio_Edicion` int(5) default NULL,
  `Lugar_Edicion` varchar(100) default NULL,
  `Editorial` varchar(70) default NULL,
  `Paginas` int(5) default NULL,
  `Ubicacion_FK` int(11) default NULL,
  `Volumen` int(5) default NULL,
  `Num_Serie` varchar(50) default NULL,
  `Carrera_FK` int(11) default NULL,
  `URL` varchar(150) default NULL,
  `Tema_General_FK` int(11) default NULL,
  `Tema_Especifico` varchar(100) default NULL,
  PRIMARY KEY  (`ID_Libro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `libros`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `libros_detalle`
-- 

CREATE TABLE `libros_detalle` (
  `ID_Detalle` int(11) NOT NULL auto_increment,
  `Codigo_Barras` varchar(20) default NULL,
  `Libros_FK` int(11) default NULL,
  PRIMARY KEY  (`ID_Detalle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `libros_detalle`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `prestamos`
-- 

CREATE TABLE `prestamos` (
  `ID_Prestamo` int(11) NOT NULL auto_increment,
  `Fecha_Inicio` date default NULL,
  `Fecha_Fin` date default NULL,
  `Prestatario_FK` int(11) default NULL,
  `Libro_FK` int(11) default NULL,
  `Vencido` tinyint(1) default NULL,
  PRIMARY KEY  (`ID_Prestamo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `prestamos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `prestatario`
-- 

CREATE TABLE `prestatario` (
  `ID_Prestatario` int(11) NOT NULL auto_increment,
  `Nombres` varchar(60) default NULL,
  `ApellidoP` varchar(30) default NULL,
  `ApellidoM` varchar(30) default NULL,
  `Carrera_FK` int(11) default NULL,
  `Semestre` int(5) default NULL,
  `Tipo_FK` int(11) default NULL,
  `No_Control` varchar(15) default NULL,
  `Email` varchar(50) default NULL,
  `Telefono` varchar(15) default NULL,
  `Domicilio` varchar(100) default NULL,
  `Colonia` varchar(50) default NULL,
  `Municipio` varchar(50) default NULL,
  `Estado` varchar(50) default NULL,
  `CP` varchar(10) default NULL,
  PRIMARY KEY  (`ID_Prestatario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `prestatario`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tema_general`
-- 

CREATE TABLE `tema_general` (
  `ID_Tema_Gral` int(11) NOT NULL auto_increment,
  `Tema` varchar(100) default NULL,
  PRIMARY KEY  (`ID_Tema_Gral`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tema_general`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_prestatario`
-- 

CREATE TABLE `tipo_prestatario` (
  `ID_Tipo` int(11) NOT NULL auto_increment,
  `Tipo` varchar(30) default NULL,
  PRIMARY KEY  (`ID_Tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tipo_prestatario`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ubicacion`
-- 

CREATE TABLE `ubicacion` (
  `ID_Ubicacion` int(11) NOT NULL auto_increment,
  `Fila` varchar(5) default NULL,
  `Area_FK` int(11) default NULL,
  PRIMARY KEY  (`ID_Ubicacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `ubicacion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL auto_increment,
  `Usuario` varchar(50) default NULL,
  `Contrasenia` varchar(20) default NULL,
  `Tipo` varchar(30) default NULL,
  PRIMARY KEY  (`ID_Usuario`),
  UNIQUE KEY `Usuario` (`Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

