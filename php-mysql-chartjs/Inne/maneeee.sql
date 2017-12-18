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
(18, 'Nazwa');

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
(25, 'maner', 'jamanewr', 'sasa@wp.pl', 'uczen', 'II'),
(30, 'monika', 'kuba10', 'bogusiam74@wp.pl', 'teacher', NULL),
(31, 'twojstary', 'jamanewr', 'nwm@wp.pl', 'uczen', 'I');

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
(51, '30', '18');

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
(77, 6, 'Nazwa', 'maner', 'gowno', '25');

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
-- Indexes for table `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `lekcje`
--
ALTER TABLE `lekcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT dla tabeli `loginy`
--
ALTER TABLE `loginy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT dla tabeli `nau`
--
ALTER TABLE `nau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
