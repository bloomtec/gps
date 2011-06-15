-- phpMyAdmin SQL Dump
-- version 3.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-06-2011 a las 16:33:28
-- Versión del servidor: 5.5.13
-- Versión de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `slug` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `content`, `slug`, `created`, `updated`) VALUES
(1, 'Noticias', '', '<p>\r\n    Contenido noticias</p>\r\n', 'noticias', '2011-05-19 11:58:06', '2011-05-20 15:40:23'),
(2, 'Ventajas', '', '<h1>\r\n    <span style="font-size:16px;"><strong>1. KnowHow</strong></span></h1>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">Global PharmaSolutionsintegra un Capital humano directivo&nbsp; y operativo con alto nivel de KnowHowfarmac&eacute;utico trasnacional, innovaci&oacute;n tecnol&oacute;gica y t&eacute;cnica y experiencia&nbsp; en proyectos farmac&eacute;uticos de gran impacto en Latinoam&eacute;rica.</span></p>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">Todos los integrantes del equipo de Global PharmaSolutionsposeen una gran formaci&oacute;n y experiencia enfocada en la calidad de los procesos y en el servicio al cliente.</span></p>\r\n<p>\r\n    &nbsp;</p>\r\n<h1>\r\n    <span style="font-size:16px;"><strong>2. Infraestructura</strong></span></h1>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">El proyecto Global PharmaSolutionsplantea unidades independientes para manufactura de productos farmac&eacute;uticos dotadas de todos los requerimientos exigidos por la OMS en su informe 37 y por la FDA .con equipos de producci&oacute;n de &uacute;ltima tecnolog&iacute;a, de alta eficiencia y dotados de todos los controles que aseguran productos de alta calidad en tiempos requeridos.</span></p>\r\n<div>\r\n    &nbsp;</div>\r\n<h1>\r\n    <span style="font-size:16px;"><strong>3. Est&aacute;ndares de Calidad</strong></span></h1>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">Global PharmaSolutionscuenta con un Staffque garantiza la estructura de Gesti&oacute;n&nbsp; de Calidad&nbsp; (QualityManagement System) acorde a Buenas Pr&aacute;cticas de Manufactura (GMP&acute;s) seg&uacute;n&nbsp; Informe 37 y a las &uacute;ltimas tendencias de la Organizaci&oacute;n Mundial de la Salud&nbsp; (OMS) y FDA &ndash; ICH Q10.</span></p>\r\n<p>\r\n    &nbsp;</p>\r\n<h1>\r\n    <span style="font-size:16px;"><strong>4. Ubicaci&oacute;n Geogr&aacute;fica</strong></span></h1>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">Colombia cuenta con una ubicaci&oacute;n geogr&aacute;fica estrat&eacute;gica y Global PharmaSolutionsaprovecha al m&aacute;ximo esta ventaja estableci&eacute;ndose en ZONA FRANCA, lo que brinda excepciones arancelarias que se traducen en beneficio para nuestros clientes representados en reducci&oacute;n de costos de operaci&oacute;n,&nbsp; precios al mercado y eficiencia en la gesti&oacute;n log&iacute;stica.</span></p>\r\n<p style="text-align: justify;">\r\n    &nbsp;</p>\r\n<p>\r\n    &nbsp;</p>\r\n<p>\r\n    &nbsp;</p>\r\n', 'ventajas', '2011-04-28 12:28:25', '2011-05-24 13:02:27'),
(3, 'Portafolio', '', '<h1>\r\n    <strong><span style="font-size:16px;">1. Maquila Farmac&eacute;utica de Productos Especiales</span></strong></h1>\r\n<p>\r\n    El proyecto Global PharmaSolutionsest&aacute; dise&ntilde;ado para suministrar los servicios de fabricaci&oacute;n, envase y acondicionamiento de productos farmac&eacute;uticos especiales en plantas independientes para las siguientes formas farmac&eacute;uticas:</p>\r\n<p>\r\n    &nbsp;</p>\r\n<p style="margin-left: 0.59in;">\r\n    &bull;Polvos para suspensi&oacute;n</p>\r\n<p style="margin-left: 0.59in;">\r\n    &bull;C&aacute;psulas de gelatina dura</p>\r\n<p style="margin-left: 0.59in;">\r\n    &bull;Tabletas sin recubrimiento</p>\r\n<p style="margin-left: 0.59in;">\r\n    &bull;Tabletas recubiertas</p>\r\n<p style="margin-left:.59in;">\r\n    &nbsp;</p>\r\n<p style="margin-left:.59in;">\r\n    Tales como :</p>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Hormonales</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Oncol&oacute;gicos</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Antirretrovirales</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Betalact&aacute;micos(Penicil&iacute;nicosy Cefalospor&iacute;nicosen plantas independientes acorde a regulaciones de la FDA y requerimientos del mercado farmac&eacute;utico para Latinoam&eacute;rica)</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Dise&ntilde;o de facilidades para productos con &Aacute;cido Clavul&aacute;nico</div>\r\n<div style="margin-left: 0.59in;">\r\n    &nbsp;</div>\r\n<p style="text-align: justify;">\r\n    Global PharmaSolutionssuministra todo el soporte t&eacute;cnico, documental y regulatorio requerido para los procesos de transferencia y aseguramiento de calidad seg&uacute;n QMS de nuestros clientes.</p>\r\n<p style="text-align: justify;">\r\n    &nbsp;</p>\r\n<p style="margin-left: 0.59in; text-align: justify;">\r\n    &nbsp;</p>\r\n<h1>\r\n    <strong><span style="font-size:16px;">2.SupplyChainIntegral en la Cadena de Valor</span></strong></h1>\r\n<p>\r\n    El proyecto Global PharmaSolutionssuministra el servicio de log&iacute;stica integral para toda la cadena de valor.</p>\r\n<p style="margin-left: 0.59in;">\r\n    &nbsp;</p>\r\n<p style="margin-left: 0.59in; text-align: justify;">\r\n    Este servicio comprende el suministro de:</p>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Materia Prima</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Materiales de envase y empaque</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Control de calidad</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Manufactura</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Transporte y entrega de producto terminado en la ciudad y pa&iacute;s requerido por&nbsp; el cliente.</div>\r\n<div style="margin-left: 0.59in; text-align: justify;">\r\n    &bull;Consulta online (CRM).</div>\r\n<div style="margin-left: 0.59in;">\r\n    &nbsp;</div>\r\n<div style="margin-left: 0.59in;">\r\n    &nbsp;</div>\r\n<h1>\r\n    <span style="font-size:16px;"><strong>3. Dise&ntilde;o y construcci&oacute;n de plantas farmac&eacute;uticas</strong></span></h1>\r\n<p style="text-align: justify;">\r\n    El equipo de profesionales de Global PharmaSolutionsposee el conocimiento y la experiencia que le permite asesorar eficientemente a nuestros clientes en las etapas de dise&ntilde;o, construcci&oacute;n y certificaci&oacute;n de nuevas plantas farmac&eacute;uticas o del redise&ntilde;o de plantas en funcionamiento.</p>\r\n<p style="text-align: justify;">\r\n    &nbsp;</p>\r\n<p>\r\n    &nbsp;</p>\r\n<h1>\r\n    <span style="font-size:16px;"><strong>4. Asesor&iacute;a Farmac&eacute;utica Especializada</strong></span></h1>\r\n<p style="text-align: justify;">\r\n    El equipo de profesionales de Global PharmaSolutionsposee el conocimiento y la experiencia para asesorar y acompa&ntilde;ar a nuestros clientes en todas las&nbsp; etapas de transferencia tecnol&oacute;gica, formulaci&oacute;n y registro de productos farmac&eacute;uticos nuevos o ya existentes en el mercado.</p>\r\n', 'portafolio', '2011-04-28 12:28:49', '2011-05-24 12:59:42'),
(4, 'Conozcanos', '', '<h1>\r\n    <strong><span style="font-size:16px;">1. Quienes somos</span></strong></h1>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">Global PharmaSolutionses un Proyecto de compa&ntilde;&iacute;a maquiladora de medicamentos&nbsp; especiales para uso humano,&nbsp; con SupplyChainIntegral&nbsp; y&nbsp; estructura de Gesti&oacute;n de Calidad (QualityManagement System), y de dise&ntilde;o y construcci&oacute;n de Plantas Farmac&eacute;uticas acorde a GMP&rsquo;sseg&uacute;n Informe 37 de la Organizaci&oacute;n Mundial de la Salud y requerimientos de la FDA.</span></p>\r\n<p>\r\n    &nbsp;</p>\r\n<h1>\r\n    <span style="font-size:16px;"><strong>2. Nuestra Misi&oacute;n</strong></span></h1>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">Convertirnos en el mas importante aliado estrat&eacute;gico para las necesidades de manufactura de productos especiales, dise&ntilde;o, producci&oacute;n y distribuci&oacute;n de las compa&ntilde;&iacute;as farmac&eacute;uticas clase mundial.</span></p>\r\n<p>\r\n    &nbsp;</p>\r\n<h1>\r\n    <strong><span style="font-size:16px;">3. Localizaci&oacute;n</span></strong></h1>\r\n<p style="text-align: justify;">\r\n    <span style="font-size:14px;">El proyecto Global PharmaSolutionsest&aacute; planeado para establecerse en Zona Franca &ndash; Colombia.</span></p>\r\n<p style="text-align: justify;">\r\n    &nbsp;</p>\r\n<p style="text-align: justify;">\r\n    &nbsp;</p>\r\n', 'conozcanos', '2011-04-28 12:29:10', '2011-05-24 13:03:53'),
(5, 'Contactanos', '', '', 'contacto', '2011-04-28 12:29:37', '2011-05-24 13:14:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user.role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
