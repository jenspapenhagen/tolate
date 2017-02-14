-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Feb 2017 um 22:24
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `tolate`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tolate`
--

CREATE TABLE `tolate` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(60) NOT NULL,
  `delaytime` int(11) NOT NULL,
  `ursache` varchar(150) NOT NULL DEFAULT '',
  `entschuldigt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tolate`
--

INSERT INTO `tolate` (`id`, `date`, `name`, `delaytime`, `ursache`, `entschuldigt`) VALUES
(1, '2017-02-14', 'Herman', 15, 'die bahn', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tolate`
--
ALTER TABLE `tolate`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
