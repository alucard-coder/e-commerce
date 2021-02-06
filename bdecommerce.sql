-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2020 a las 04:05:16
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `password` smallint(8) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
   PRIMARY KEY(`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pay_mode`
--

CREATE TABLE `pay_mode` (
  `id_pay` int(11) AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
   PRIMARY KEY(`id_pay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `password` smallint(8) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
   PRIMARY KEY(`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `dpartamento_envio` varchar(40) DEFAULT NULL,
  `distrito_envio` varchar(40) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `id_cliente` int(11) not null,
  `id_pay` int(11) not null,
   PRIMARY KEY(`id_pedido`),
   FOREIGN KEY(`id_cliente`) REFERENCES `cliente`(`id_cliente`),
   FOREIGN KEY(`id_pay`) REFERENCES `pay_mode`(`id_pay`)  	
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) AUTO_INCREMENT,
  `nombre_cat` varchar(40) NOT NULL,
   PRIMARY KEY(`id_categoria`) 	
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) AUTO_INCREMENT,
  `nombre_pro` varchar(40) NOT NULL,
  `marca` varchar(40) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `id_categoria` int(11) not null,
   PRIMARY KEY(`id_producto`),
   FOREIGN KEY(`id_categoria`) REFERENCES `categoria`(`id_categoria`) 	
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle` int(11) AUTO_INCREMENT,
  `nombre_pro` varchar(40) NOT NULL,
  `precio_pro` decimal(10,0) DEFAULT NULL,
  `fecha_entrega` datetime NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `id_producto` int(11) not null,
  `id_pedido` int(11) not null,
   PRIMARY KEY(`id_detalle`),
   FOREIGN KEY(`id_producto`) REFERENCES `producto`(`id_producto`),
   FOREIGN KEY(`id_pedido`) REFERENCES `pedido`(`id_pedido`) 	
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
