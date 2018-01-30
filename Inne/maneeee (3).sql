-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Sty 2018, 20:46
-- Wersja serwera: 10.1.29-MariaDB
-- Wersja PHP: 7.2.0

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
(393, '2018-01-07', 1, '1', 37, 10, '23'),
(394, '2018-01-09', 11, '1', 32, 9, '17'),
(395, '2018-01-09', 2, '1', 33, 9, '17'),
(396, '2018-01-09', 2, '1', 34, 9, '17'),
(397, '2018-01-09', 11, '2', 32, 9, '17'),
(398, '2018-01-09', 11, '2', 33, 9, '17'),
(399, '2018-01-09', 2, '2', 34, 9, '17'),
(400, '2018-01-09', 2, '3', 32, 9, '17'),
(401, '2018-01-09', 11, '3', 33, 9, '17'),
(402, '2018-01-09', 2, '3', 34, 9, '17'),
(403, '2018-01-09', 3, '4', 32, 9, '17'),
(404, '2018-01-09', 1, '4', 33, 9, '17'),
(405, '2018-01-09', 1, '4', 34, 9, '17'),
(406, '2015-01-12', 11, '1', 33, 9, '20'),
(407, '2018-01-09', 1, '1', 35, 10, '22'),
(408, '2018-01-09', 1, '1', 36, 10, '22'),
(409, '2018-01-09', 1, '1', 37, 10, '22'),
(410, '2018-01-09', 1, '2', 35, 10, '22'),
(411, '2018-01-09', 1, '2', 36, 10, '22'),
(412, '2018-01-09', 1, '2', 37, 10, '22'),
(413, '2018-01-09', 1, '3', 35, 10, '22'),
(414, '2018-01-09', 1, '3', 36, 10, '22'),
(415, '2018-01-09', 1, '3', 37, 10, '22'),
(416, '2018-01-09', 1, '4', 35, 10, '22'),
(417, '2018-01-09', 1, '4', 36, 10, '22'),
(418, '2018-01-09', 1, '4', 37, 10, '22'),
(419, '2018-01-09', 1, '5', 35, 10, '22'),
(420, '2018-01-09', 1, '5', 36, 10, '22'),
(421, '2018-01-09', 1, '5', 37, 10, '22'),
(422, '2018-01-09', 1, '6', 35, 10, '22'),
(423, '2018-01-09', 1, '6', 36, 10, '22'),
(424, '2018-01-09', 1, '6', 37, 10, '22'),
(425, '2018-01-09', 1, '7', 35, 10, '22'),
(426, '2018-01-09', 1, '7', 36, 10, '22'),
(427, '2018-01-09', 1, '7', 37, 10, '22'),
(428, '2018-01-09', 1, '8', 35, 10, '22'),
(429, '2018-01-09', 1, '8', 36, 10, '22'),
(430, '2018-01-09', 1, '8', 37, 10, '22'),
(431, '2018-01-09', 1, '9', 35, 10, '22'),
(432, '2018-01-09', 1, '9', 36, 10, '22'),
(433, '2018-01-09', 1, '9', 37, 10, '22'),
(656, '2018-01-09', 1, '', 35, 10, '22'),
(657, '2018-01-09', 1, '', 36, 10, '22'),
(658, '2018-01-09', 1, '', 37, 10, '22'),
(659, '2018-01-09', 1, '5', 32, 9, '17'),
(660, '2018-01-09', 1, '5', 33, 9, '17'),
(661, '2018-01-09', 1, '5', 34, 9, '17'),
(662, '2018-01-14', 1, '1', 35, 10, ''),
(663, '2018-01-14', 1, '1', 36, 10, ''),
(664, '2018-01-14', 1, '1', 37, 10, ''),
(665, '2018-01-14', 1, '2', 35, 10, ''),
(666, '2018-01-14', 1, '2', 36, 10, ''),
(667, '2018-01-14', 1, '2', 37, 10, ''),
(668, '2018-01-14', 1, '3', 35, 10, ''),
(669, '2018-01-14', 1, '3', 36, 10, ''),
(670, '2018-01-14', 1, '3', 37, 10, ''),
(671, '2018-01-14', 2, '4', 35, 10, ''),
(672, '2018-01-14', 1, '4', 36, 10, ''),
(673, '2018-01-14', 1, '4', 37, 10, ''),
(674, '2018-01-14', 1, '5', 35, 10, ''),
(675, '2018-01-14', 1, '5', 36, 10, ''),
(676, '2018-01-14', 1, '5', 37, 10, ''),
(677, '2018-01-14', 1, '6', 35, 10, ''),
(678, '2018-01-14', 1, '6', 36, 10, ''),
(679, '2018-01-14', 1, '6', 37, 10, ''),
(680, '2018-01-14', 1, '7', 35, 10, ''),
(681, '2018-01-14', 1, '7', 36, 10, ''),
(682, '2018-01-14', 1, '7', 37, 10, ''),
(683, '2018-01-14', 1, '8', 35, 10, '16'),
(684, '2018-01-14', 1, '8', 36, 10, '16'),
(685, '2018-01-14', 1, '8', 37, 10, '16'),
(686, '2018-01-14', 1, '9', 35, 10, '16'),
(687, '2018-01-14', 1, '9', 36, 10, '16'),
(688, '2018-01-14', 1, '9', 37, 10, '16'),
(689, '2018-01-16', 1, '1', 35, 10, '22'),
(690, '2018-01-16', 1, '1', 36, 10, '22'),
(691, '2018-01-16', 1, '1', 37, 10, '22'),
(692, '2018-01-16', 1, '2', 35, 10, '22'),
(693, '2018-01-16', 1, '2', 36, 10, '22'),
(694, '2018-01-16', 1, '2', 37, 10, '22'),
(695, '2018-01-16', 2, '3', 35, 10, '22'),
(696, '2018-01-16', 2, '3', 36, 10, '22'),
(697, '2018-01-16', 2, '3', 37, 10, '22'),
(698, '2018-01-19', 1, '1', 35, 10, '25'),
(699, '2018-01-19', 1, '1', 36, 10, '25'),
(700, '2018-01-19', 1, '1', 37, 10, '25'),
(701, '2018-01-19', 1, '2', 35, 10, '25'),
(702, '2018-01-19', 1, '2', 36, 10, '25'),
(703, '2018-01-19', 1, '2', 37, 10, '25'),
(704, '2018-01-19', 1, '3', 35, 10, '25'),
(705, '2018-01-19', 1, '3', 36, 10, '25'),
(706, '2018-01-19', 1, '3', 37, 10, '25'),
(707, '2018-01-19', 1, '4', 35, 10, '25'),
(708, '2018-01-19', 1, '4', 36, 10, '25'),
(709, '2018-01-19', 1, '4', 37, 10, '25'),
(710, '2018-01-22', 1, '1', 35, 10, '21'),
(711, '2018-01-22', 1, '1', 36, 10, '21'),
(712, '2018-01-22', 1, '1', 37, 10, '21'),
(713, '2018-01-22', 1, '2', 35, 10, '21'),
(714, '2018-01-22', 1, '2', 36, 10, '21'),
(715, '2018-01-22', 1, '2', 37, 10, '21'),
(716, '2018-01-22', 1, '3', 35, 10, '21'),
(717, '2018-01-22', 1, '3', 36, 10, '21'),
(718, '2018-01-22', 1, '3', 37, 10, '21'),
(719, '2018-01-22', 1, '1', 32, 9, '16'),
(720, '2018-01-22', 1, '1', 33, 9, '16'),
(721, '2018-01-22', 1, '1', 34, 9, '16'),
(722, '2018-01-22', 1, '2', 32, 9, '16'),
(723, '2018-01-22', 1, '2', 33, 9, '16'),
(724, '2018-01-22', 1, '2', 34, 9, '16'),
(725, '2018-01-22', 1, '3', 32, 9, '16'),
(726, '2018-01-22', 1, '3', 33, 9, '16'),
(727, '2018-01-22', 1, '3', 34, 9, '16'),
(728, '2018-01-22', 1, '4', 32, 9, '16'),
(729, '2018-01-22', 1, '4', 33, 9, '16'),
(730, '2018-01-22', 1, '4', 34, 9, '16'),
(731, '2018-01-22', 1, '5', 32, 9, '16'),
(732, '2018-01-22', 1, '5', 33, 9, '16'),
(733, '2018-01-22', 1, '5', 34, 9, '16'),
(734, '2018-01-22', 1, '6', 32, 9, '16'),
(735, '2018-01-22', 1, '6', 33, 9, '16'),
(736, '2018-01-22', 1, '6', 34, 9, '16'),
(737, '2018-01-22', 1, '7', 32, 9, '16'),
(738, '2018-01-22', 1, '7', 33, 9, '16'),
(739, '2018-01-22', 1, '7', 34, 9, '16'),
(740, '2018-01-22', 2, '4', 35, 10, '21'),
(741, '2018-01-22', 2, '4', 36, 10, '21'),
(742, '2018-01-22', 2, '4', 37, 10, '21'),
(743, '2018-01-22', 1, '8', 32, 9, '16'),
(744, '2018-01-22', 11, '8', 33, 9, '16'),
(745, '2018-01-22', 1, '8', 34, 9, '16');

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
(216, 3, '21', '36', '', '10', '2018-01-07', '30'),
(217, 1, '3', '32', '', '9', '2018-01-09', '30'),
(218, 2, '3', '33', '', '9', '2018-01-09', '30'),
(219, 3, '3', '33', 'a', '9', '2018-01-09', '30'),
(220, 4, '3', '33', '', '9', '2018-01-09', '30'),
(227, 6, '3', '35', '', '10', '2018-01-13', '30'),
(228, 6, '3', '36', '', '10', '2018-01-13', '30'),
(229, 6, '3', '37', '', '10', '2018-01-13', '30'),
(230, 6, '3', '35', '', '10', '2018-01-13', '30'),
(231, 6, '3', '36', '', '10', '2018-01-13', '30'),
(232, 6, '3', '37', '', '10', '2018-01-13', '30'),
(233, 3, '3', '35', '', '10', '2018-01-13', '30'),
(234, 2, '3', '37', '', '10', '2018-01-13', '30'),
(235, 1, '3', '36', '', '10', '2018-01-13', '30'),
(236, 2, '3', '35', '', '10', '2018-01-13', '30'),
(237, 3, '3', '36', '', '10', '2018-01-13', '30'),
(238, 3, '3', '37', '', '10', '2018-01-13', '30'),
(239, 1, '3', '35', '', '10', '2018-01-13', '30'),
(240, 3, '3', '36', '', '10', '2018-01-13', '30'),
(241, 6, '3', '36', '', '10', '2018-01-13', '30'),
(242, 6, '3', '36', '', '10', '2018-01-13', '30'),
(243, 5, '3', '35', '', '10', '2018-01-13', '30'),
(244, 6, '3', '37', '', '10', '2018-01-13', '30'),
(245, 2, '3', '37', '', '10', '2018-01-13', '30'),
(246, 3, '3', '36', '', '10', '2018-01-13', '30'),
(247, 2, '3', '35', '', '10', '2018-01-13', '30'),
(248, 1, '3', '36', '', '10', '2018-01-13', '30'),
(249, 3, '3', '37', '', '10', '2018-01-13', '30'),
(250, 3, '3', '35', '', '10', '2018-01-13', '30'),
(251, 4, '3', '36', '', '10', '2018-01-13', '30'),
(252, 3, '3', '37', '', '10', '2018-01-13', '30'),
(253, 4, '3', '35', '', '10', '2018-01-13', '30'),
(254, 5, '3', '36', '', '10', '2018-01-13', '30'),
(255, 6, '3', '37', '', '10', '2018-01-13', '30'),
(256, 5, '3', '35', '', '10', '2018-01-13', '30'),
(257, 1, '3', '36', '', '10', '2018-01-13', '30'),
(258, 2, '3', '37', '', '10', '2018-01-13', '30'),
(259, 1, '3', '35', '', '10', '2018-01-13', '30'),
(260, 3, '3', '36', '', '10', '2018-01-13', '30'),
(261, 3, '3', '35', '', '10', '2018-01-13', '30'),
(262, 1, '3', '36', '', '10', '2018-01-13', '30'),
(263, 2, '3', '37', '', '10', '2018-01-13', '30'),
(264, 4, '3', '35', '', '10', '2018-01-13', '30'),
(265, 2, '3', '36', '', '10', '2018-01-13', '30'),
(266, 1, '3', '37', '', '10', '2018-01-13', '30'),
(267, 5, '3', '35', '', '10', '2018-01-13', '30'),
(268, 4, '3', '36', '', '10', '2018-01-13', '30'),
(269, 3, '3', '37', '', '10', '2018-01-13', '30'),
(270, 2, '3', '35', '', '10', '2018-01-13', '30'),
(271, 1, '3', '36', '', '10', '2018-01-13', '30'),
(272, 5, '3', '37', '', '10', '2018-01-13', '30'),
(273, 5, '3', '33', '', '9', '2018-01-13', '30'),
(274, 5, '3', '33', '', '9', '2018-01-13', '30'),
(275, 6, '3', '33', '', '9', '2018-01-13', '30'),
(276, 6, '3', '37', '', '10', '2018-01-13', '30'),
(277, 6, '3', '37', '', '10', '2018-01-13', '30'),
(278, 6, '3', '37', '', '10', '2018-01-13', '30'),
(279, 5, '21', '33', '', '9', '2018-01-14', '30'),
(280, 5, '21', '33', '', '9', '2018-01-14', '30'),
(281, 6, '21', '33', '', '9', '2018-01-14', '30'),
(282, 6, '21', '33', '', '9', '2018-01-14', '30'),
(283, 1, '3', '33', '', '9', '2018-01-14', '30'),
(284, 4, '1', '35', '', '10', '2018-01-14', '30'),
(285, 4, '1', '36', '', '10', '2018-01-14', '30'),
(286, 4, '1', '37', '', '10', '2018-01-14', '30'),
(287, 4, '1', '35', '', '10', '2018-01-14', '30'),
(288, 4, '1', '36', '', '10', '2018-01-14', '30'),
(289, 4, '1', '37', '', '10', '2018-01-14', '30'),
(290, 2, '3', '35', '', '10', '2018-01-14', '30'),
(291, 3, '3', '36', '', '10', '2018-01-14', '30'),
(292, 2, '21', '32', '', '9', '2018-01-14', '30'),
(293, 2, '21', '34', '', '9', '2018-01-14', '30'),
(294, 3, '21', '32', '', '9', '2018-01-14', '30'),
(295, 1, '21', '34', '', '9', '2018-01-14', '30'),
(296, 4, '21', '32', '', '9', '2018-01-14', '30'),
(297, 3, '21', '34', '', '9', '2018-01-14', '30'),
(298, 2, '3', '32', '', '9', '2018-01-14', '30'),
(299, 5, '3', '34', '', '9', '2018-01-14', '30'),
(300, 6, '3', '34', '', '9', '2018-01-14', '30'),
(301, 6, '3', '34', '', '9', '2018-01-14', '30'),
(302, 3, '3', '34', '', '9', '2018-01-14', '30'),
(303, 2, '3', '34', '', '9', '2018-01-14', '30'),
(304, 4, '3', '34', '', '9', '2018-01-14', '30'),
(305, 4, '3', '32', '', '9', '2018-01-14', '30'),
(306, 4, '3', '32', '', '9', '2018-01-14', '30'),
(307, 3, '3', '34', '', '9', '2018-01-14', '30'),
(308, 3, '3', '32', '', '9', '2018-01-14', '30'),
(309, 3, '3', '34', '', '9', '2018-01-14', '30'),
(310, 3, '3', '33', '', '9', '2018-01-14', '30'),
(311, 3, '3', '32', '', '9', '2018-01-14', '30'),
(312, 3, '3', '34', '', '9', '2018-01-14', '30'),
(313, 3, '3', '34', '', '9', '2018-01-14', '30'),
(314, 2, '19', '33', '', '9', '2018-01-14', '30'),
(315, 2, '19', '33', '', '9', '2018-01-14', '30'),
(316, 4, '19', '33', '', '9', '2018-01-14', '30'),
(317, 4, '19', '33', '', '9', '2018-01-14', '30'),
(318, 2, '21', '36', '', '10', '2018-01-19', '30'),
(319, 1, '3', '33', '', '9', '2018-01-22', '30'),
(320, 2, '3', '33', '', '9', '2018-01-22', '30'),
(321, 2, '3', '33', '', '9', '2018-01-23', '30'),
(322, 3, '3', '33', '', '9', '2018-01-23', '30'),
(323, 4, '3', '33', '', '9', '2018-01-23', '30'),
(324, 5, '3', '33', '', '9', '2018-01-23', '30'),
(325, 6, '3', '33', '', '9', '2018-01-23', '30'),
(326, 2, '3', '33', '', '9', '2018-01-23', '30'),
(327, 3, '3', '33', '', '9', '2018-01-23', '30'),
(328, 2, '3', '33', '', '9', '2018-01-23', '30'),
(329, 1, '3', '33', '', '9', '2018-01-23', '30'),
(330, 1, '3', '33', '', '9', '2018-01-23', '30'),
(331, 1, '3', '32', '', '9', '2018-01-23', '30'),
(332, 2, '3', '32', '', '9', '2018-01-23', '30'),
(333, 3, '3', '32', '', '9', '2018-01-23', '30'),
(334, 4, '3', '32', '', '9', '2018-01-23', '30'),
(335, 5, '3', '32', '', '9', '2018-01-23', '30'),
(336, 6, '3', '32', '', '9', '2018-01-23', '30'),
(337, 5, '3', '32', '', '9', '2018-01-23', '30'),
(338, 6, '3', '32', '', '9', '2018-01-23', '30'),
(339, 1, '1', '32', '', '9', '2018-01-24', '30'),
(340, 2, '1', '33', '', '9', '2018-01-24', '30'),
(341, 3, '1', '34', '', '9', '2018-01-24', '30');

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
(20, 5, 3, 37, 'semestr2', 10, '2018-01-06', 30),
(21, 4, 3, 35, '', 10, '2018-01-13', 30),
(22, 3, 3, 36, '', 10, '2018-01-13', 30),
(23, 1, 3, 37, '', 10, '2018-01-13', 30),
(24, 5, 3, 35, '', 10, '2018-01-13', 30),
(25, 3, 3, 36, '', 10, '2018-01-13', 30),
(26, 2, 3, 37, '', 10, '2018-01-13', 30),
(27, 1, 3, 35, '', 10, '2018-01-13', 30),
(28, 2, 3, 36, '', 10, '2018-01-13', 30),
(29, 3, 3, 37, '', 10, '2018-01-13', 30),
(30, 4, 3, 35, '', 10, '2018-01-13', 30),
(31, 2, 3, 36, '', 10, '2018-01-13', 30),
(32, 1, 3, 37, '', 10, '2018-01-13', 30),
(33, 1, 3, 35, '', 10, '2018-01-13', 30),
(34, 2, 3, 36, '', 10, '2018-01-13', 30),
(35, 3, 3, 37, '', 10, '2018-01-13', 30),
(36, 2, 3, 35, '', 10, '2018-01-13', 30),
(37, 3, 3, 36, '', 10, '2018-01-13', 30),
(38, 4, 3, 37, '', 10, '2018-01-13', 30),
(39, 3, 3, 35, '', 10, '2018-01-13', 30),
(40, 4, 3, 36, '', 10, '2018-01-13', 30),
(41, 5, 3, 37, '', 10, '2018-01-13', 30),
(42, 6, 3, 35, '', 10, '2018-01-13', 30),
(43, 6, 3, 36, '', 10, '2018-01-13', 30),
(44, 6, 3, 37, '', 10, '2018-01-13', 30),
(45, 1, 3, 35, '', 10, '2018-01-13', 30),
(46, 2, 3, 36, '', 10, '2018-01-13', 30),
(47, 3, 3, 37, '', 10, '2018-01-13', 30),
(48, 3, 3, 35, '', 10, '2018-01-13', 30),
(49, 2, 3, 36, '', 10, '2018-01-13', 30),
(50, 1, 3, 37, '', 10, '2018-01-13', 30),
(51, 3, 3, 35, '', 10, '2018-01-13', 30),
(52, 4, 3, 36, '', 10, '2018-01-13', 30),
(53, 1, 3, 37, '', 10, '2018-01-13', 30),
(54, 2, 3, 35, '', 10, '2018-01-13', 30),
(55, 3, 3, 36, '', 10, '2018-01-13', 30),
(56, 4, 3, 37, '', 10, '2018-01-13', 30);

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
(13, 10, 3, 30, 'Wf dla ludu', 'tttttttttttwwwwwwwwwwwwwwwwwwwwwwwwwwwaaaaaaaaaaaaaaattttttttwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwttttt'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=746;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT dla tabeli `ocenys2`
--
ALTER TABLE `ocenys2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT dla tabeli `ocenysemestralne`
--
ALTER TABLE `ocenysemestralne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `planlekcji`
--
ALTER TABLE `planlekcji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `podreczniki`
--
ALTER TABLE `podreczniki`
  MODIFY `idPodrcznikow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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