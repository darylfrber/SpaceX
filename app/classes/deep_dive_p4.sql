-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 26 mei 2023 om 07:34
-- Serverversie: 8.0.32
-- PHP-versie: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deep_dive_p4`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faciliteit`
--

CREATE TABLE `faciliteit` (
  `id` mediumint NOT NULL,
  `naam` varchar(50) NOT NULL,
  `raket_id` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `faciliteit`
--

INSERT INTO `faciliteit` (`id`, `naam`, `raket_id`) VALUES
(1, 'Amsterdam', 0),
(2, 'New York', 0),
(3, 'Parijs', 0),
(4, 'Rome', 0),
(5, 'London', 0),
(6, 'Lissabon', 0),
(7, 'Madrid', 0),
(8, 'Bagdad', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `onderhoud`
--

CREATE TABLE `onderhoud` (
  `tijdsduur` int DEFAULT NULL,
  `onderhoud` enum('on','off') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'off'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `onderhoud`
--

INSERT INTO `onderhoud` (`tijdsduur`, `onderhoud`) VALUES
(30, 'on');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `raket`
--

CREATE TABLE `raket` (
  `id` int NOT NULL,
  `verbruik` int DEFAULT NULL,
  `max_passagiers` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `raket`
--

INSERT INTO `raket` (`id`, `verbruik`, `max_passagiers`) VALUES
(1, 0, 120),
(2, 20, 120),
(3, 20, 500),
(4, 30, 90);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vluchten`
--

CREATE TABLE `vluchten` (
  `id` mediumint NOT NULL,
  `passagiers` int NOT NULL DEFAULT '0',
  `vertrek_datum` datetime NOT NULL,
  `aankomst_datum` datetime NOT NULL,
  `raket_id` smallint UNSIGNED NOT NULL DEFAULT '0',
  `vlucht_type` enum('repair','passenger') NOT NULL DEFAULT 'passenger',
  `vertrek_faciliteit` varchar(100) NOT NULL,
  `aankomst_faciliteit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vluchten`
--

INSERT INTO `vluchten` (`id`, `passagiers`, `vertrek_datum`, `aankomst_datum`, `raket_id`, `vlucht_type`, `vertrek_faciliteit`, `aankomst_faciliteit`) VALUES
(1, 120, '2023-05-23 15:30:00', '0000-00-00 00:00:00', 1, 'passenger', '2', '2'),
(2, 120, '2023-05-09 09:17:18', '2023-05-24 07:17:18', 1, 'passenger', '0', '0'),
(3, 10, '2023-05-09 09:18:05', '2023-05-24 07:18:04', 1, 'repair', '1', '2'),
(4, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '1', '2'),
(5, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '2', '1'),
(6, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '1', '1'),
(7, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '2', '1'),
(8, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '2', '1'),
(9, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '2', '1'),
(10, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '2', '1'),
(11, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '1', '2'),
(12, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', 'Yo', 'yo'),
(13, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '1', '2'),
(14, 0, '2023-05-13 12:22:00', '2023-05-06 12:22:00', 1, 'passenger', '2', '1'),
(15, 0, '2023-06-10 12:44:00', '2023-06-03 12:45:00', 1, 'repair', '2', '1\r\n'),
(16, 0, '2023-05-06 12:57:00', '2023-05-11 12:57:00', 1, 'passenger', '2442', '42424'),
(17, 120, '2023-05-12 12:57:00', '2023-05-27 12:57:00', 1, 'passenger', '1441', '4141441'),
(18, 120, '2023-05-24 14:46:00', '2023-05-24 19:46:00', 1, 'passenger', '1', '2'),
(19, 0, '2023-05-19 09:38:00', '2023-05-20 09:38:00', 12, 'passenger', '1', '2'),
(20, 0, '2023-05-19 09:38:00', '2023-05-20 09:38:00', 12, 'passenger', '1', '2'),
(21, 0, '2023-05-28 11:03:00', '2023-06-11 11:03:00', 1, 'passenger', '1', '2'),
(22, 33, '2023-05-25 11:06:00', '2023-05-16 11:06:00', 1, 'passenger', '1', '2'),
(23, 38, '2023-05-25 11:16:00', '2023-05-25 11:16:00', 1, 'passenger', '1', '1'),
(24, 28, '2023-05-25 11:22:00', '2023-05-25 11:22:00', 1, 'passenger', '1', '2'),
(25, 0, '2023-05-25 18:29:00', '2023-06-08 13:29:00', 1, 'passenger', '1', '2');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `faciliteit`
--
ALTER TABLE `faciliteit`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `raket`
--
ALTER TABLE `raket`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vluchten`
--
ALTER TABLE `vluchten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_vluchten_raket` (`raket_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `raket`
--
ALTER TABLE `raket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `vluchten`
--
ALTER TABLE `vluchten`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
