-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Sty 2018, 13:04
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
(630, '2018-01-29', 1, '1', 35, 10, '21'),
(631, '2018-01-29', 2, '1', 36, 10, '21'),
(632, '2018-01-29', 3, '1', 37, 10, '21'),
(633, '2018-01-29', 1, '2', 35, 10, '21'),
(634, '2018-01-29', 1, '2', 36, 10, '21'),
(635, '2018-01-29', 1, '2', 37, 10, '21');

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
-- Struktura tabeli dla tabeli `ocenysemestralne`
--

CREATE TABLE `ocenysemestralne` (
  `id` int(11) NOT NULL,
  `idklasy` int(11) NOT NULL,
  `idlekcja` int(11) NOT NULL,
  `Semestr` int(11) NOT NULL,
  `Ocena` int(11) NOT NULL,
  `iducznia` int(11) NOT NULL,
  `Data` date NOT NULL,
  `idnauczyciela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ocenysemestralne`
--

INSERT INTO `ocenysemestralne` (`id`, `idklasy`, `idlekcja`, `Semestr`, `Ocena`, `iducznia`, `Data`, `idnauczyciela`) VALUES
(11, 10, 3, 1, 3, 37, '0000-00-00', 30),
(12, 10, 3, 1, 1, 35, '0000-00-00', 30),
(13, 10, 3, 1, 2, 36, '0000-00-00', 30),
(14, 9, 3, 1, 1, 32, '2018-01-24', 30),
(15, 9, 3, 1, 2, 33, '2018-01-24', 30),
(16, 9, 3, 1, 3, 34, '2018-01-24', 30),
(17, 9, 1, 1, 2, 33, '2018-01-24', 30),
(18, 9, 1, 1, 3, 32, '2018-01-24', 30),
(19, 9, 1, 1, 2, 34, '2018-01-24', 30);

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
(16, 9, 'Matma', 'Filozofia', 'nic', 'W-f', 'nic', 'nic', 'nic', 'nic', 'nic', 1),
(17, 9, 'hejakj', 'Polski', 'Filozofia', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 2),
(18, 9, 'nic', 'hejakj', 'Filozofia', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 3),
(19, 9, 'nic', 'Filozofia', 'Filozofia', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 4),
(20, 9, 'Filozofia', 'W-f', '3b', 'Filozofia', 'W-f', 'nic', 'Polski', 'Matma', 'nic', 5),
(21, 10, 'Filozofia', 'W-f', 'Nazwa', 'Matma', 'Matma', 'Matma', 'Nazwa', 'polaczek', 'Nazwa', 1),
(22, 10, 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 2),
(23, 10, 'Matma', 'W-f', 'hejakj', 'nic', 'Matma', 'nic', 'W-f', 'Filozofia', 'Nazwa', 3),
(24, 10, 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 4),
(25, 10, 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 'nic', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `podreczniki`
--

CREATE TABLE `podreczniki` (
  `idPodrcznikow` int(11) NOT NULL,
  `idklasy` int(11) NOT NULL,
  `idlekcja` int(11) NOT NULL,
  `idnauczyciel` int(11) NOT NULL,
  `NazwaPodrecznika` text NOT NULL,
  `NazwaCzwiczen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `podreczniki`
--

INSERT INTO `podreczniki` (`idPodrcznikow`, `idklasy`, `idlekcja`, `idnauczyciel`, `NazwaPodrecznika`, `NazwaCzwiczen`) VALUES
(1, 10, 21, 30, 'Dobra Jd', 'Jechac Disa Zwisa'),
(12, 9, 3, 30, 'no', 'czesc'),
(13, 10, 3, 30, 'manewr', 'halko'),
(14, 9, 21, 30, 'Bob Marek', 'ha nwm');

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zastepstwa`
--

CREATE TABLE `zastepstwa` (
  `ID` int(11) NOT NULL,
  `dzien` int(11) NOT NULL,
  `lekcja` text NOT NULL,
  `numer_sali` int(11) NOT NULL,
  `id_klasy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zastepstwa`
--

INSERT INTO `zastepstwa` (`ID`, `dzien`, `lekcja`, `numer_sali`, `id_klasy`) VALUES
(2, 6, 'matma', 15, 10),
(3, 5, 'matma', 10, 10);

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
-- Indexes for table `ocenysemestralne`
--
ALTER TABLE `ocenysemestralne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planlekcji`
--
ALTER TABLE `planlekcji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podreczniki`
--
ALTER TABLE `podreczniki`
  ADD PRIMARY KEY (`idPodrcznikow`);

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
-- Indexes for table `zastepstwa`
--
ALTER TABLE `zastepstwa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_klasy` (`id_klasy`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=636;

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

--
-- AUTO_INCREMENT dla tabeli `zastepstwa`
--
ALTER TABLE `zastepstwa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zastepstwa`
--
ALTER TABLE `zastepstwa`
  ADD CONSTRAINT `zastepstwa_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
