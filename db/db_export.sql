-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 19.Jan 2023, 22:02
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `kkzenitat`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `meno` varchar(64) NOT NULL,
  `zamestnanie` varchar(32) NOT NULL,
  `casPridania` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `comments`
--

INSERT INTO `comments` (`ID`, `text`, `meno`, `zamestnanie`, `casPridania`) VALUES
(1, 'Veľa rokov pracujem ako podnikateľ a učím svojich klientov, aby investovali do kvality. Pre mňa je to jednoznačne spoločnosť ZenitCloud, ktorá okrem stabilných služieb, kvalitnej podpory, prepracovanému systému poskytuje aj ľudskú, pre mňa nenahraditeľnú, nadstavbu.', 'William Smith', 'Podnikateľ', '2022-12-03 23:00:06'),
(2, 'Už niekoľko rokov pracujem ako WEB Developer. Vaša stránka ma zaujala na prvý pohľad, preto je pre mňa spoločnosť ZenitCloud na prvom mieste.', 'Frankie Doyle', 'Web developer', '2022-12-03 23:02:30'),
(3, 'V tejto oblasti som bol nový, úžasná podpora spoločnosti ZenitCloud mi so všetkými problémami rýchlo pomohla, dokonca aj za mňa vyriešila, či vysvetlila ako Cloud funguje. ', 'Enrique Cortés', 'Stavbár', '2022-12-03 23:04:40');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `nazov` varchar(64) NOT NULL,
  `cena` decimal(7,2) NOT NULL,
  `popis` varchar(256) NOT NULL,
  `sluzby` text NOT NULL,
  `casPridania` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `offers`
--

INSERT INTO `offers` (`id`, `nazov`, `cena`, `popis`, `sluzby`, `casPridania`) VALUES
(0, 'žiadna', '0.00', '', '', '2022-12-03 21:01:39'),
(1, 'BASIC CLOUD', '15.50', 'Základná konfigurácia nášho Cloud Hostingu', '500 GB Dostupného Miesta;3 TB Prenesených Dát;Základný Ovládací Panel;24/7 Rýchla Podpora;100 Prémiových Tém;Možnosť Zrušiť alebo Vylepšiť', '2022-12-03 21:26:50'),
(2, 'Cloud VPS', '30.00', 'Profesionálna konfigurácia nášho Cloud Hostingu', '1 TB Miesta v Cloude;8 TB Prenesených Dát;Úplný Ovládací Panel;Podpora do 15-minút;Neobmedzené Rozšírenia;Možnosť Zrušiť alebo Vylepšiť', '2022-12-03 21:28:20'),
(3, 'ADVANCED CLOUD', '72.25', 'Expresná konfigurácia nášho Cloud Hostingu', '4 TB Miesta v Cloude;20 TB Prenesených Dát;Úplný Ovládací Panel;Podpora do 15-minút;Top Rozšírenia;Pokročilé Nastavenie', '2022-12-03 21:29:18');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `offerID` int(11) DEFAULT 0,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `casPridania` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `offerID`, `admin`, `casPridania`) VALUES
(3, 'user@zenit.sk', 'b4af804009cb036a4ccdc33431ef9ac9', 0, 0, '2022-12-03 16:09:04'),
(4, 'adm@zenit.sk', '21232f297a57a5a743894a0e4a801fc3', 0, 1, '2022-12-03 16:10:32');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pre tabuľku `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offerID` (`offerID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`offerID`) REFERENCES `offers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
