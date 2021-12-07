-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2021, 17:17
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `animal`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gatunek`
--

CREATE TABLE `gatunek` (
  `gatunek_id` int(11) NOT NULL,
  `gatunek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `gatunek`
--

INSERT INTO `gatunek` (`gatunek_id`, `gatunek`) VALUES
(1, 'felis'),
(2, 'canis');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zwierze`
--

CREATE TABLE `zwierze` (
  `id` int(11) NOT NULL,
  `gatunek_id` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL,
  `data_dodania` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zwierze`
--

INSERT INTO `zwierze` (`id`, `gatunek_id`, `nazwa`, `data_dodania`) VALUES
(1, 1, 'Kot Domowy', '2021-12-07 16:15:45'),
(2, 1, 'Żbik', '2021-12-07 16:15:51'),
(3, 1, 'Ryś', '2021-12-07 16:15:57'),
(4, 2, 'Pies', '2021-12-07 16:16:02'),
(5, 2, 'Wilk Szary', '2021-12-07 16:16:49'),
(6, 2, 'Kojot', '2021-12-07 16:16:55');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gatunek`
--
ALTER TABLE `gatunek`
  ADD PRIMARY KEY (`gatunek_id`);

--
-- Indeksy dla tabeli `zwierze`
--
ALTER TABLE `zwierze`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gatunek_id` (`gatunek_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `gatunek`
--
ALTER TABLE `gatunek`
  MODIFY `gatunek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `zwierze`
--
ALTER TABLE `zwierze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zwierze`
--
ALTER TABLE `zwierze`
  ADD CONSTRAINT `zwierze_ibfk_1` FOREIGN KEY (`gatunek_id`) REFERENCES `gatunek` (`gatunek_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
