-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2015 a las 06:41:49
-- Versión del servidor: 5.5.42-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `picheoen_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portada`
--

CREATE TABLE IF NOT EXISTS `portada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `ancla` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `extension` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `portada`
--

INSERT INTO `portada` (`id`, `seccion`, `titulo`, `contenido`, `ancla`, `foto`, `extension`) VALUES
(1, 'portada1', 'LIGA VENEZOLANA DE SOFT 2014', 'Resumen de la Liga Venezolana de Softbol 2014.', 'R05jmhjasesqh', 'R05jmhjasesqh', 'jpg'),
(2, 'portada2', 'SELECCIÓN NACIONAL ', 'La seleccion nacional conquisto tres campeonatos e...', 'U85psrrnuhhwn', 'U85psrrnuhhwn', 'jpg'),
(3, 'portada3', 'CAMPEONATO AAU 2015', 'Venezolanos a revalidar su titulo en Orlando.', 'F54nvrgxmhajr', 'F54nvrgxmhajr', 'jpg'),
(4, 'portada4', 'RAFAEL FLORES', 'Entrevista con el receptor Flores.', 'M1ffmeffwnec', 'M1ffmeffwnec', 'jpg'),
(5, 'articulo1', 'www.picheoenvenezuela.com', 'Bienvenidos a www.picheoenvenezuela.com', 'H13qqwejdxyed', 'H13qqwejdxyed', 'jpg'),
(6, 'articulo2', 'LIGA VENEZOLANA DE SOFT 2014', 'Resumen de la Liga Venezolana de Softbol 2014. ', 'M39fccubirhkj', 'M39fccubirhkj', 'jpg'),
(7, 'articulo3', 'SELECCIÓN NACIONAL ', 'La seleccion nacional conquisto tres campeonatos en el 2014.', 'Q27jnjisagvjo', 'Q27jnjisagvjo', 'jpg'),
(8, 'articulo4', 'CAMPEONATO AAU 2015', 'Venezolanos a revalidar su titulo en Orlando.', 'A55gjajgliamt', 'A55gjajgliamt', 'jpg'),
(9, 'articulo5', 'RAFAEL FLORES', 'Entrevista con el receptor Flores.', 'L52matooxkmec', 'L52matooxkmec', 'jpg'),
(10, 'articulo6', 'www.picheoenvenezuela.com', 'Bienvenidos a www.picheoenvenezuela.com', 'O75sruncmexte', 'O75sruncmexte', 'jpg'),
(11, 'Imagen1', 'LIGA VENEZOLANA 2014', 'contenido', 'Y38kbordmvocn', 'foto1.jpg', 'ext'),
(12, 'Imagen2', 'Contenido Articulo', 'contenido', 'Y26apiowsndsh', 'foto2.jpg', 'ext'),
(13, 'Imagen3', 'CAMPEONATO AAU 2015', 'contenido', 'M49kgjrffogff', 'foto3.jpg', 'ext'),
(14, 'Imagen4', 'Titulo imagen 4', 'contenido', 'C57xdyrpchqmt', 'foto4.jpg', 'ext'),
(15, 'Imagen5', 'Titulo imagen 5', 'contenido', 'O76fxmlqcyaml', 'foto5.jpg', 'ext');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
