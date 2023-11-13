-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-11-2023 a las 11:33:12
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `facturas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas_tabla`
--

DROP TABLE IF EXISTS `facturas_tabla`;
CREATE TABLE IF NOT EXISTS `facturas_tabla` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `NIF` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numero` int NOT NULL,
  `servicio` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar (50) NOT NULL,
  `fecha` date NOT NULL,
  `precio_sin_impuestos` float NOT NULL,
  `precio_IVA` float NOT NULL,
  `precio_IRPF` float NOT NULL,
  `precio_Total` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `facturas_tabla`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
