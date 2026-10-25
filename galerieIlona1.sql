-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2009 at 01:51 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `galerie`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `technika` varchar(32) collate utf8_czech_ci default NULL,
  `size` varchar(32) collate utf8_czech_ci NOT NULL default ' cm',
  `title` varchar(500) collate utf8_czech_ci default NULL,
  `cena` int(11) default NULL,
  `cesta` varchar(300) collate utf8_czech_ci default NULL,
  `id` int(11) NOT NULL default '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`technika`, `size`, `title`, `cena`, `cesta`, `id`) VALUES
('Olejomalba', '20x35 cm', 'galaxie5', 8000, 'galaxie5.jpg', 1),
('Poèítaèová garfika', '40x50 cm', 'IM000054.JPG', 5000, 'IM000054.JPG', 2),
('Olejový pastel', '20x35 cm', 'lodky', 4000, 'lodky.jpg', 3),
('kiril.jpg', ' cm', 'Kiril', 2700, 'kiril.jpg', 4),
('lodka.jpg', ' cm', 'Lodka', 2130, 'lodka.jpg', 5),
('Jina', ' cm', 'kupkoviste', 3500, 'kupkoviste.jpg', 6),
('ina', ' cm', 'Klimt', 9000, 'klimt_ilona.jpg', 7),
('Jina', ' cm', 'js', 3750, 'JS1.jpg', 8),
('Jina', ' cm', 'Dudy1', 6000, 'DUDY1.jpg', 9),
('Jina', ' cm', 'lodruda1', 3500, 'lodruda1.jpg', 10),
(' .', '_', 'Term', 0, 'Term.jpg', 11);
