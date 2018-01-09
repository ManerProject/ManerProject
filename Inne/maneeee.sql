-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Sty 2018, 14:04
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `maneeee`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `id` int(11) NOT NULL,
  `klasa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`id`, `klasa`) VALUES
(9, 'II'),
(10, 'III');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekcje`
--

CREATE TABLE `lekcje` (
  `id` int(11) NOT NULL,
  `lekcja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `lekcje`
--

INSERT INTO `lekcje` (`id`, `lekcja`) VALUES
(0, 'nic'),
(1, 'Polski'),
(2, 'Matma'),
(3, 'W-f'),
(4, 'Filozofia'),
(18, 'Nazwa'),
(19, 'hejakj'),
(20, '3b'),
(21, 'polaczek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `loginy`
--

CREATE TABLE `loginy` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `haslo` text NOT NULL,
  `email` text NOT NULL,
  `typ` text NOT NULL,
  `Klasa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `loginy`
--

INSERT INTO `loginy` (`id`, `login`, `haslo`, `email`, `typ`, `Klasa`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', NULL),
(25, 'maner', 'jamanewr', 'sasa@wp.pl', 'teacher', NULL),
(30, 'monika', 'kuba10', 'bogusiam74@wp.pl', 'teacher', NULL),
(31, 'twojstary', 'jamanewr', 'nwm@wp.pl', 'teacher', NULL),
(32, 'uczenkl1', 'jamanewr', 'uczenkl1@wp.pl', 'uczen', '9'),
(33, 'uczenkl12', '', 'uczenkl1@wp.pl', 'uczen', '9'),
(34, 'uczenkl2', 'jamanewr', 'uczenkl1@wp.pl', 'uczen', '9'),
(35, 'uczenkl2id2', 'jamanewr', 'uczenkl1@wp.pl', 'uczen', '10'),
(36, 'uczenkl3', 'jamanewr', 'uczenkl1@wp.pl', 'uczen', '10'),
(37, 'uczenkl3id1', 'jamanewr', 'bogusiam74@wp.pl', 'uczen', '10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nau`
--

CREATE TABLE `nau` (
  `id` int(11) NOT NULL,
  `nau` text,
  `przedmiot1` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `nau`
--

INSERT INTO `nau` (`id`, `nau`, `przedmiot1`) VALUES
(50, '30', '3'),
(51, '30', '18'),
(52, '25', '19'),
(53, '30', '1'),
(54, '30', '19'),
(55, '25', '3'),
(56, '30', '21');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obeconsc`
--

CREATE TABLE `obeconsc` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `obecnosc` int(11) NOT NULL,
  `numer_lekcji` text NOT NULL,
  `uczen` int(11) NOT NULL,
  `klasa` int(11) NOT NULL,
  `dzienTygodnia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `obeconsc`
--

INSERT INTO `obeconsc` (`id`, `data`, `obecnosc`, `numer_lekcji`, `uczen`, `klasa`, `dzienTygodnia`) VALUES
(313, '2018-01-03', 1, '1', 32, 9, '18'),
(314, '2018-01-03', 1, '1', 33, 9, '18'),
(315, '2018-01-03', 1, '1', 34, 9, '18'),
(316, '2018-01-03', 1, '2', 32, 9, '18'),
(317, '2018-01-03', 1, '2', 33, 9, '18'),
(318, '2018-01-03', 1, '2', 34, 9, '18'),
(319, '2018-01-03', 1, '3', 32, 9, '18'),
(320, '2018-01-03', 1, '3', 33, 9, '18'),
(321, '2018-01-03', 1, '3', 34, 9, '18'),
(322, '2018-01-03', 1, '4', 32, 9, '18'),
(323, '2018-01-03', 1, '4', 33, 9, '18'),
(324, '2018-01-03', 1, '4', 34, 9, '18'),
(325, '2018-01-03', 1, '5', 32, 9, '18'),
(326, '2018-01-03', 1, '5', 33, 9, '18'),
(327, '2018-01-03', 1, '5', 34, 9, '18'),
(328, '2018-01-03', 1, '6', 32, 9, '18'),
(329, '2018-01-03', 1, '6', 33, 9, '18'),
(330, '2018-01-03', 1, '6', 34, 9, '18'),
(331, '2018-01-03', 1, '7', 32, 9, '18'),
(332, '2018-01-03', 1, '7', 33, 9, '18'),
(333, '2018-01-03', 1, '7', 34, 9, '18'),
(334, '2018-01-03', 1, '8', 32, 9, '18'),
(335, '2018-01-03', 1, '8', 33, 9, '18'),
(336, '2018-01-03', 1, '8', 34, 9, '18'),
(337, '2018-01-03', 1, '9', 32, 9, '18'),
(338, '2018-01-03', 1, '9', 33, 9, '18'),
(339, '2018-01-03', 1, '9', 34, 9, '18'),
(340, '2018-01-03', 1, '1', 35, 10, '23'),
(341, '2018-01-03', 1, '1', 36, 10, '23'),
(342, '2018-01-03', 1, '1', 37, 10, '23'),
(343, '2018-01-03', 1, '2', 35, 10, '23'),
(344, '2018-01-03', 1, '2', 36, 10, '23'),
(345, '2018-01-03', 1, '2', 37, 10, '23'),
(346, '2018-01-03', 1, '3', 35, 10, '23'),
(347, '2018-01-03', 1, '3', 36, 10, '23'),
(348, '2018-01-03', 1, '3', 37, 10, '23'),
(349, '2018-01-03', 2, '4', 35, 10, '23'),
(350, '2018-01-03', 2, '4', 36, 10, '23'),
(351, '2018-01-03', 1, '4', 37, 10, '23'),
(352, '2018-01-03', 2, '5', 35, 10, '23'),
(353, '2018-01-03', 2, '5', 36, 10, '23'),
(354, '2018-01-03', 1, '5', 37, 10, '23'),
(355, '2018-01-03', 2, '6', 35, 10, '23'),
(356, '2018-01-03', 1, '6', 36, 10, '23'),
(357, '2018-01-03', 3, '6', 37, 10, '23'),
(358, '2018-01-03', 3, '7', 35, 10, '23'),
(359, '2018-01-03', 2, '7', 36, 10, '23'),
(360, '2018-01-03', 1, '7', 37, 10, '23'),
(361, '2018-01-03', 1, '8', 35, 10, '23'),
(362, '2018-01-03', 3, '8', 36, 10, '23'),
(363, '2018-01-03', 3, '8', 37, 10, '23'),
(364, '2018-01-06', 1, '1', 35, 10, '23'),
(365, '2018-01-06', 1, '1', 36, 10, '23'),
(366, '2018-01-06', 1, '1', 37, 10, '23'),
(367, '2018-01-06', 1, '2', 35, 10, '23'),
(368, '2018-01-06', 1, '2', 36, 10, '23'),
(369, '2018-01-06', 1, '2', 37, 10, '23'),
(370, '2018-01-06', 1, '3', 35, 10, '23'),
(371, '2018-01-06', 1, '3', 36, 10, '23'),
(372, '2018-01-06', 1, '3', 37, 10, '23'),
(373, '2018-01-06', 1, '4', 35, 10, '23'),
(374, '2018-01-06', 1, '4', 36, 10, '23'),
(375, '2018-01-06', 1, '4', 37, 10, '23'),
(376, '2018-01-06', 1, '5', 35, 10, '23'),
(377, '2018-01-06', 1, '5', 36, 10, '23'),
(378, '2018-01-06', 1, '5', 37, 10, '23'),
(379, '2018-01-06', 1, '6', 35, 10, '23'),
(380, '2018-01-06', 1, '6', 36, 10, '23'),
(381, '2018-01-06', 1, '6', 37, 10, '23'),
(382, '2018-01-06', 1, '7', 35, 10, '23'),
(383, '2018-01-06', 1, '7', 36, 10, '23'),
(384, '2018-01-06', 1, '7', 37, 10, '23'),
(385, '2018-01-06', 1, '8', 35, 10, '23'),
(386, '2018-01-06', 1, '8', 36, 10, '23'),
(387, '2018-01-06', 1, '8', 37, 10, '23'),
(388, '2018-01-06', 1, '9', 35, 10, '23'),
(389, '2018-01-06', 1, '9', 36, 10, '23'),
(390, '2018-01-06', 1, '9', 37, 10, '23'),
(391, '2018-01-07', 1, '1', 35, 10, '23'),
(392, '2018-01-07', 1, '1', 36, 10, '23'),
(393, '2018-01-07', 1, '1', 37, 10, '23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id` int(11) NOT NULL,
  `oceny` int(11) NOT NULL,
  `idlekcja` text NOT NULL,
  `idlogin` text NOT NULL,
  `zaco` text NOT NULL,
  `idklasa` text NOT NULL,
  `Data` date NOT NULL,
  `idnauczyciel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id`, `oceny`, `idlekcja`, `idlogin`, `zaco`, `idklasa`, `Data`, `idnauczyciel`) VALUES
(204, 5, '3', '35', '', '10', '2018-01-06', '30'),
(205, 6, '3', '36', '', '10', '2018-01-06', '30'),
(206, 5, '3', '37', '', '10', '2018-01-06', '30'),
(207, 1, '3', '36', '', '10', '2018-01-06', '30'),
(208, 2, '3', '35', '', '10', '2018-01-06', '30'),
(209, 3, '3', '37', '', '10', '2018-01-06', '30'),
(210, 2, '3', '36', '', '10', '2018-01-06', '30'),
(211, 1, '3', '37', '', '10', '2018-01-06', '30'),
(212, 1, '3', '35', '', '10', '2018-01-06', '30'),
(213, 2, '3', '36', '', '10', '2018-01-06', '30'),
(214, 3, '3', '37', '', '10', '2018-01-06', '30'),
(215, 2, '21', '36', '', '10', '2018-01-07', '30'),
(216, 3, '21', '36', '', '10', '2018-01-07', '30');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ocenys2`
--

CREATE TABLE `ocenys2` (
  `id` int(11) NOT NULL,
  `oceny` int(11) NOT NULL,
  `idlekcja` int(11) NOT NULL,
  `idlogin` int(11) NOT NULL,
  `zaco` text NOT NULL,
  `idklasa` int(11) NOT NULL,
  `Data` date NOT NULL,
  `idnauczyciel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ocenys2`
--

INSERT INTO `ocenys2` (`id`, `oceny`, `idlekcja`, `idlogin`, `zaco`, `idklasa`, `Data`, `idnauczyciel`) VALUES
(12, 1, 3, 35, '', 10, '2018-01-06', 30),
(13, 2, 3, 36, '', 10, '2018-01-06', 30),
(14, 3, 3, 37, '', 10, '2018-01-06', 30),
(15, 1, 3, 35, '', 10, '2018-01-06', 30),
(16, 2, 3, 36, '', 10, '2018-01-06', 30),
(17, 3, 3, 37, '', 10, '2018-01-06', 30),
(18, 5, 3, 35, 'semestr2', 10, '2018-01-06', 30),
(19, 6, 3, 36, 'semestr2', 10, '2018-01-06', 30),
(20, 5, 3, 37, 'semestr2', 10, '2018-01-06', 30);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `planlekcji`
--

CREATE TABLE `planlekcji` (
  `id` int(11) NOT NULL,
  `klasa` int(11) NOT NULL,
  `lekcja1` text NOT NULL,
  `lekcja2` text NOT NULL,
  `lekcja3` text NOT NULL,
  `lekcja4` text NOT NULL,
  `lekcja5` text NOT NULL,
  `lekcja6` text NOT NULL,
  `lekcja7` text NOT NULL,
  `lekcja8` text NOT NULL,
  `lekcja9` text NOT NULL,
  `dzien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `planlekcji`
--

INSERT INTO `planlekcji` (`id`, `klasa`, `lekcja1`, `lekcja2`, `lekcja3`, `lekcja4`, `lekcja5`, `lekcja6`, `lekcja7`, `lekcja8`, `lekcja9`, `dzien`) VALUES
(16, 9, 'Matma', 'Polski', 'Nazwa', 'Filozofia', 'Matma', 'nic', 'nic', 'nic', 'nic', 1),
(17, 9, 'Filozofia', 'Filozofia', 'Filozofia', 'Filozofia', 'Filozofia', 'nic', 'nic', 'nic', 'nic', 2),
(18, 9, 'W-f', 'W-f', 'W-f', 'W-f', 'nic', 'nic', 'nic', 'nic', 'nic', 3),
(19, 9, 'Nazwa', 'Matma', 'Polski', 'W-f', 'Matma', 'nic', 'nic', 'nic', 'nic', 4),
(20, 9, 'Filozofia', 'W-f', 'W-f', 'W-f', 'Filozofia', 'nic', 'nic', 'nic', 'nic', 5),
(21, 10, 'Filozofia', 'W-f', 'Nazwa', 'Matma', 'Matma', 'Matma', 'Nazwa', 'polaczek', 'Nazwa', 1),
(22, 10, 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 2),
(23, 10, 'Matma', 'W-f', 'hejakj', 'nic', 'Matma', 'nic', 'W-f', 'Filozofia', 'Nazwa', 3),
(24, 10, 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 4),
(25, 10, 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uwagi`
--

CREATE TABLE `uwagi` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_nau` int(11) NOT NULL,
  `tytul` text NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uwagi`
--

INSERT INTO `uwagi` (`id`, `id_login`, `id_nau`, `tytul`, `tresc`) VALUES
(3, 33, 30, 'assa', 'assa'),
(4, 31, 30, 'sa', 'saas'),
(5, 33, 30, 'hejka', 'stulejka'),
(6, 33, 30, 'pong', 'foty'),
(7, 35, 30, 'palenie', 'jest w gronie palaczy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

CREATE TABLE `wiadomosci` (
  `ID` int(11) NOT NULL,
  `ID_nauczyciela` int(11) NOT NULL,
  `Autor` text NOT NULL,
  `nazwa` text NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wiadomosci`
--

INSERT INTO `wiadomosci` (`ID`, `ID_nauczyciela`, `Autor`, `nazwa`, `tresc`) VALUES
(1, 25, 'uczenkl12', 'tes', 'tseteset'),
(2, 30, 'uczenkl12', 'rfgr', 'trtegdgf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wywiadowka`
--

CREATE TABLE `wywiadowka` (
  `ID` int(11) NOT NULL,
  `klasa` text NOT NULL,
  `tytul` text NOT NULL,
  `data` date NOT NULL,
  `sala` int(11) NOT NULL,
  `aktywna` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wywiadowka`
--

INSERT INTO `wywiadowka` (`ID`, `klasa`, `tytul`, `data`, `sala`, `aktywna`) VALUES
(1, '', 'test', '2018-01-12', 15, 0),
(2, '', 'cvx', '2017-12-29', 3, 0),
(3, '', 'gds', '2017-12-27', 0, 0),
(4, '', 'gds', '2017-12-27', 0, 0),
(5, '9', 'fgfgn', '2018-01-18', 3, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lekcje`
--
ALTER TABLE `lekcje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginy`
--
ALTER TABLE `loginy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nau`
--
ALTER TABLE `nau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obeconsc`
--
ALTER TABLE `obeconsc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocenys2`
--
ALTER TABLE `ocenys2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planlekcji`
--
ALTER TABLE `planlekcji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uwagi`
--
ALTER TABLE `uwagi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wiadomosci`
--
ALTER TABLE `wiadomosci`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wywiadowka`
--
ALTER TABLE `wywiadowka`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasy`
--
ALTER TABLE `klasy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `lekcje`
--
ALTER TABLE `lekcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `loginy`
--
ALTER TABLE `loginy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT dla tabeli `nau`
--
ALTER TABLE `nau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT dla tabeli `obeconsc`
--
ALTER TABLE `obeconsc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT dla tabeli `ocenys2`
--
ALTER TABLE `ocenys2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `planlekcji`
--
ALTER TABLE `planlekcji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `uwagi`
--
ALTER TABLE `uwagi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `wiadomosci`
--
ALTER TABLE `wiadomosci`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wywiadowka`
--
ALTER TABLE `wywiadowka`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
