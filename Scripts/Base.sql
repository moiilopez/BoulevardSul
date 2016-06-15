CREATE DATABASE  IF NOT EXISTS `boulevardsul`;
USE `boulevardsul`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: boulevardsul
-- ------------------------------------------------------
-- Server version	5.6.17

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `contenido` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `tel` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  `texto` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Imagen` varchar(45) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Estado` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`),
  KEY `fk_tipo_producto_idx` (`Tipo`),
  CONSTRAINT `fk_tipo_producto` FOREIGN KEY (`Tipo`) REFERENCES `tipo_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `tipo_producto`
--

DROP TABLE IF EXISTS `tipo_producto`;

CREATE TABLE `tipo_producto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Categoria` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_tipo_produtos_idx` (`Categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) NOT NULL,
  `Contrasena` varchar(45) NOT NULL,
  `Imagen` varchar(100) NOT NULL DEFAULT 'UserDft.png',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Dump completed on 2016-06-15 13:41:13