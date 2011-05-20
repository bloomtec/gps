-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2011 at 03:49 p.m.
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `priceshoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `content` longtext,
  `slug` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `content`, `slug`, `created`, `updated`) VALUES
(1, 'Ayuda', '', NULL, 'ayuda', NULL, NULL),
(2, 'Acerca de', '', '<p>\r\n	acerca de</p>\r\n', 'acerca-de', '2011-04-28 12:28:25', '2011-04-28 12:34:23'),
(3, 'Nuestras Tiendas', '', NULL, 'nuestras_tiendas', '2011-04-28 12:28:49', '2011-04-28 12:28:49'),
(4, 'Tendencias', '', NULL, 'tendencias', '2011-04-28 12:29:10', '2011-04-28 12:29:10'),
(5, 'Franquicias', '', NULL, 'franquicias', '2011-04-28 12:29:37', '2011-04-28 12:29:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
