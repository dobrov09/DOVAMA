-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 19. pro 2016, 10:53
-- Verze serveru: 10.1.19-MariaDB
-- Verze PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `dovama`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `knihy`
--

CREATE TABLE `knihy` (
  `id` int(11) NOT NULL,
  `nazev` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `pocet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `knihy`
--

INSERT INTO `knihy` (`id`, `nazev`, `autor`, `pocet`) VALUES
(1, 'Babička', 'Božena Němcová', 12),
(2, 'Než jsem tě poznala', 'Jojo Moyes', 2),
(3, 'Dívka ve vlaku', 'Paula Hawkins', 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `pobocky`
--

CREATE TABLE `pobocky` (
  `id` int(11) NOT NULL,
  `jmeno_pobocky` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `adresa` text COLLATE utf8_czech_ci NOT NULL,
  `vedouci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `pobocky`
--

INSERT INTO `pobocky` (`id`, `jmeno_pobocky`, `adresa`, `vedouci`) VALUES
(9, 'U dvou hvězd', 'Jihlavská 24/1, Brno', 6),
(11, 'pobočka 2', 'dfsdasda', 2),
(12, 'Pobočka 3', 'Mars', 2);

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
--

CREATE TABLE `uzivatele` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `heslo` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatele`
--

INSERT INTO `uzivatele` (`id`, `login`, `heslo`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 4),
(2, 'zamestnanec', '9e67073fecbe2b041d2d4c557184a854', 2),
(3, 'zakaznik', '85d59187e77365b2b77f309fdc57c8fc', 1),
(4, 'test2', 'ad0234829205b9033196ba818f7a872b', 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `zamestnanci`
--

CREATE TABLE `zamestnanci` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `pobocka` int(11) NOT NULL,
  `pozice` varchar(100) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `zamestnanci`
--

INSERT INTO `zamestnanci` (`id`, `jmeno`, `pobocka`, `pozice`) VALUES
(1, 'Administrátor Velký', 9, 'správce'),
(2, 'Ředitel Zeměkoule', 11, 'vedoucí'),
(3, 'Michal Nový', 11, 'správce'),
(6, 'Ivo Starý', 9, 'vedoucí');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `knihy`
--
ALTER TABLE `knihy`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `pobocky`
--
ALTER TABLE `pobocky`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `zamestnanci`
--
ALTER TABLE `zamestnanci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `knihy`
--
ALTER TABLE `knihy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pro tabulku `pobocky`
--
ALTER TABLE `pobocky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pro tabulku `zamestnanci`
--
ALTER TABLE `zamestnanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
