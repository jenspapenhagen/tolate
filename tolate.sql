-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql310.byethost.com
-- Erstellungszeit: 04. Apr 2018 um 07:48
-- Server Version: 5.6.35-81.0
-- PHP-Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `b10_19587397_tolate`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tolate`
--

DROP TABLE IF EXISTS `tolate`;
CREATE TABLE IF NOT EXISTS `tolate` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(60) NOT NULL,
  `delaytime` int(11) NOT NULL,
  `ursache` varchar(150) NOT NULL DEFAULT '',
  `entschuldigt` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tolate`
--

INSERT INTO `tolate` (`id`, `date`, `name`, `delaytime`, `ursache`, `entschuldigt`) VALUES
(1, '2017-02-15', 'Jens', 15, 'testeintrag äöüÄÖÜ', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
