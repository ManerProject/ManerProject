-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2017, 14:46
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
(19, 'Niewiem');

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
(31, 'twojstary', 'jamanewr', 'nwm@wp.pl', 'uczen', 'I'),
(32, 'hejmordo', 'nwm', 'm@wp.pl', 'uczen', 'I'),
(33, 'sassa', 'adada', 'm@wp.pl', 'uczen', 'III'),
(34, 'sassadsdds', 'dssdds', 'm@wp.pl', 'uczen', 'II'),
(35, 'ghfhgfgfjhjt', 'fdsffdfd', 'hj@wp.pl', 'uczen', 'III'),
(36, 'ffdfdfddaffd', 'fdsgfdsgfds', 'm@wp.pl', 'uczen', 'I'),
(37, 'dsdsds', 'dsddsds', 'm@wp.pl', 'uczen', 'II'),
(38, 'jaja', 'jaja', 'ja@wp.pl', 'uczen', 'I');

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
(52, '30', '19'),
(53, '30', '4');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obeconsc`
--

CREATE TABLE `obeconsc` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `obecnosc` int(11) NOT NULL,
  `uczen` int(11) NOT NULL,
  `numer_lekcji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `obeconsc`
--

INSERT INTO `obeconsc` (`id`, `data`, `obecnosc`, `uczen`, `numer_lekcji`) VALUES
(1, '2017-12-02', 2, 31, 5),
(2, '2017-12-02', 1, 32, 5),
(3, '2017-12-02', 1, 36, 5),
(4, '2017-12-02', 3, 38, 5),
(5, '2017-12-02', 2, 31, 5),
(6, '2017-12-02', 1, 32, 5),
(7, '2017-12-02', 1, 36, 5),
(8, '2017-12-02', 3, 38, 5),
(9, '2017-12-29', 1, 31, 4),
(10, '2017-12-29', 1, 32, 4),
(11, '2017-12-29', 1, 36, 4),
(12, '2017-12-29', 1, 38, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id` int(11) NOT NULL,
  `oceny` int(11) NOT NULL,
  `lekcja` text NOT NULL,
  `nick` text NOT NULL,
  `zaco` text NOT NULL,
  `kl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id`, `oceny`, `lekcja`, `nick`, `zaco`, `kl`) VALUES
(69, 1, 'Matma', 'maner', 'nwm', '25'),
(70, 4, 'polski', 'maner', 'sa', '25'),
(71, 1, 'Matma', 'maner', 's', '25'),
(72, 6, 'Filozofia', 'maner', 'a ta', '25'),
(73, 4, 'polski', 'maner', 'saas', '25'),
(74, 4, 'Filozofia', 'twojstary', 'sa', '31'),
(75, 3, 'W-f', 'twojstary', 'saas', '31'),
(76, 3, 'W-f', 'twojstary', 'saas', '31'),
(77, 6, 'Nazwa', 'maner', 'gowno', '25'),
(78, 1, 'W-f', 'maner', '', '25'),
(79, 1, 'W-f', 'maner', '', '25'),
(80, 1, 'W-f', 'maner', '', '25'),
(81, 1, 'W-f', 'maner', '', '25'),
(82, 1, 'W-f', 'twojstary', '', 'I'),
(83, 1, 'W-f', 'hejmordo', '', 'I'),
(84, 1, 'W-f', 'ffdfdfddaffd', '', 'I'),
(88, 1, 'W-f', 'twojstary', '', 'I'),
(89, 1, 'W-f', 'hejmordo', '', 'I'),
(90, 1, 'W-f', 'ffdfdfddaffd', '', 'I'),
(91, 1, 'W-f', 'twojstary', '', 'I'),
(92, 1, 'W-f', 'ffdfdfddaffd', '', 'I'),
(93, 3, 'W-f', 'ffdfdfddaffd', '', 'I'),
(94, 1, 'W-f', 'twojstary', '', 'I'),
(95, 1, 'W-f', 'hejmordo', '', 'I'),
(96, 1, 'W-f', 'ffdfdfddaffd', '', 'I'),
(97, 1, 'W-f', 'twojstary', '', 'I'),
(98, 1, 'W-f', 'hejmordo', '', 'I'),
(99, 1, 'W-f', 'ffdfdfddaffd', '', 'I'),
(100, 2, 'W-f', 'twojstary', 'morda', 'I'),
(101, 2, 'W-f', 'hejmordo', 'morda', 'I'),
(102, 2, 'W-f', 'ffdfdfddaffd', 'morda', 'I'),
(103, 6, 'W-f', 'twojstary', 'super', 'I'),
(104, 6, 'W-f', 'hejmordo', 'super', 'I'),
(105, 6, 'W-f', 'ffdfdfddaffd', 'super', 'I'),
(106, 1, 'W-f', 'twojstary', '', 'I'),
(107, 1, 'W-f', 'hejmordo', '', 'I'),
(108, 1, 'W-f', 'ffdfdfddaffd', '', 'I'),
(109, 1, 'W-f', 'twojstary', 's2', 'I'),
(110, 1, 'W-f', 'hejmordo', 's2', 'I'),
(111, 1, 'W-f', 'ffdfdfddaffd', 's2', 'I'),
(112, 3, 'W-f', 'twojstary', '', 'I'),
(113, 1, 'Nazwa', 'sassa', '', 'III'),
(114, 1, 'Nazwa', 'ghfhgfgfjhjt', '', 'III'),
(115, 1, 'Niewiem', 'sassa', '', 'III'),
(116, 1, 'Niewiem', 'ghfhgfgfjhjt', '', 'III'),
(117, 1, 'Filozofia', 'sassa', '', 'III'),
(118, 1, 'Filozofia', 'ghfhgfgfjhjt', '', 'III'),
(119, 2, 'Nazwa', 'sassa', '', 'III'),
(120, 3, 'Filozofia', 'hejmordo', '', 'I'),
(121, 3, 'Filozofia', 'twojstary', '', 'I'),
(122, 3, 'Nazwa', 'sassadsdds', '', 'II'),
(123, 3, 'Nazwa', 'sassadsdds', '', 'II'),
(124, 3, 'Filozofia', 'ghfhgfgfjhjt', '', 'III'),
(125, 5, 'Filozofia', 'ghfhgfgfjhjt', '', 'III'),
(126, 3, 'Nazwa', 'ffdfdfddaffd', '', 'I'),
(127, 3, 'Nazwa', 'twojstary', '', 'I'),
(128, 2, 'Nazwa', 'ffdfdfddaffd', '', 'I'),
(130, 3, 'Nazwa', 'twojstary', '', 'I'),
(131, 4, 'Nazwa', 'hejmordo', '', 'I'),
(132, 1, 'W-f', 'jaja', '', 'I'),
(133, 1, 'W-f', 'jaja', '', 'I'),
(134, 3, 'Nazwa', 'jaja', '', 'I'),
(135, 3, 'Filozofia', 'jaja', '', 'I'),
(136, 6, 'Filozofia', 'jaja', '', 'I'),
(137, 4, 'Filozofia', 'jaja', '', 'I'),
(138, 4, 'Niewiem', 'jaja', '', 'I'),
(139, 3, 'Niewiem', 'jaja', '', 'I'),
(140, 4, 'W-f', 'jaja', '', 'I'),
(141, 6, 'Niewiem', 'jaja', 'papis', 'I'),
(142, 6, 'W-f', 'twojstary', 'jajco', 'I'),
(143, 4, 'W-f', 'hejmordo', 'jajco', 'I');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ocenys2`
--

CREATE TABLE `ocenys2` (
  `id` int(11) NOT NULL,
  `oceny` int(11) NOT NULL,
  `lekcja` text NOT NULL,
  `nick` text NOT NULL,
  `zaco` text NOT NULL,
  `kl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ocenys2`
--

INSERT INTO `ocenys2` (`id`, `oceny`, `lekcja`, `nick`, `zaco`, `kl`) VALUES
(1, 1, 'W-f', 'twojstary', 's2a', 'I'),
(2, 1, 'W-f', 'hejmordo', 's2a', 'I'),
(3, 1, 'W-f', 'ffdfdfddaffd', 's2a', 'I'),
(4, 2, 'W-f', 'twojstary', 'dawid to pala', 'I'),
(5, 2, 'W-f', 'hejmordo', 'dawid to pala', 'I'),
(6, 3, 'W-f', 'ffdfdfddaffd', 'dawid to pala', 'I'),
(7, 3, 'W-f', 'twojstary', '', 'I'),
(8, 1, 'Nazwa', 'twojstary', '', 'I');

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
(1, 31, 30, 'hejka', 'palenie papierosow');

--
-- Indeksy dla zrzutów tabel
--

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
-- Indexes for table `uwagi`
--
ALTER TABLE `uwagi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `lekcje`
--
ALTER TABLE `lekcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `loginy`
--
ALTER TABLE `loginy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT dla tabeli `nau`
--
ALTER TABLE `nau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT dla tabeli `obeconsc`
--
ALTER TABLE `obeconsc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT dla tabeli `ocenys2`
--
ALTER TABLE `ocenys2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `uwagi`
--
ALTER TABLE `uwagi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
