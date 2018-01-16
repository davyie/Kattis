-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 05 jan 2016 kl 14:41
-- Serverversion: 10.1.8-MariaDB
-- PHP-version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `invictus`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `kund`
--

CREATE TABLE `kund` (
  `kundid` int(20) NOT NULL,
  `fnamn` text NOT NULL,
  `enamn` text NOT NULL,
  `adress` varchar(50) NOT NULL,
  `telefonnummer` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `postnummer` varchar(128) NOT NULL,
  `postort` varchar(128) NOT NULL,
  `usertype` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `kund`
--

INSERT INTO `kund` (`kundid`, `fnamn`, `enamn`, `adress`, `telefonnummer`, `email`, `pass`, `postnummer`, `postort`, `usertype`) VALUES
(1, 'Drive', 'style', 'jsjsja 69', 768894066, 'Drivewithstyle@gmail.com', 'jesper', '13534', 'stockholm', '');

-- --------------------------------------------------------

--
-- Tabellstruktur `ordern`
--

CREATE TABLE `ordern` (
  `orderid` int(11) NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ordernr` varchar(128) NOT NULL,
  `kundid` int(11) NOT NULL,
  `summa` int(11) NOT NULL,
  `bestallt` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `produkt`
--

CREATE TABLE `produkt` (
  `Produktid` int(30) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `beskrivning` varchar(1024) NOT NULL,
  `Produktnummer` int(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `Produktbild` varchar(1024) NOT NULL,
  `Lagersaldo` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `width` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `produkt`
--

INSERT INTO `produkt` (`Produktid`, `namn`, `Type`, `beskrivning`, `Produktnummer`, `price`, `Produktbild`, `Lagersaldo`, `size`, `width`) VALUES
(1, 'Invictus Classic 1', 'Classic', 'Our first watch from the Classic Collection,\r\n recognized for its clean lines and minimalistic design,\r\nwas created with modern gentlemen in mind. \r\nStylish dial with a high quality band makes this\r\ntimepiece look effortlessly elegant and professional. \r\nDressed up or casual, this watch will make\r\nyou look unique.\r\nDesign, simplicity and quality put together into \r\nthe Invictus Original Watch. ', 1, '460€', '../images/classic1.jpg', 11, '40mm', '25mm'),
(2, 'Invictus Classic Black', 'Classic', 'Dressed up or dressed down, this beautiful watch will stand out in any crowd. \r\nThe ultra-thin (6mm)\r\nInvictus watch is suitable for every occasion. \r\nWhether you are attending a formal event, playing a\r\ngame of tennis or enjoying a sunny day at the \r\ncountry club – Invictus Classic Black makes for a\r\nbeautiful companion.', 2, '500€', '../images/classic2.jpg', 11, '40mm', '25mm'),
(3, 'Invictus Exclusive Black Rose Gold', 'Exclusive', 'The Black Rose Gold edition brings a range of fresh details, featuring ceramic dials and handapplied\r\nmarkers. The black rose gold version is one of our most versatile pieces. The polished\r\nrose gold markers look especially good against its creamy black dial. So, regardless of if it''s with a\r\ntuxedo or a t-shirt, its understated elegance makes it the perfect companion.', 3, '520€', '../images/exclusive1.jpg', 11, '45mm', '25mm'),
(4, 'Invictus Exclusive Royale ', 'Exclusive', 'The elegant Exclusive Royale has everything you need in order to look sleek and well-dressed.\r\nThis 38 mm watch from the Exclusive Collection has been enriched with deep blue hands, Roman\r\nnumerals and date display. The simplistic case merges seamlessly with the brown Invictus leather\r\nstrap, made from Italian leather, and completes the look of a timeless and sop', 4, '550€', '../images/exclusive2.jpg', 11, '45mm', '25mm'),
(5, 'Invictus Sport Original ', 'Sport', 'The white stainless steel version is our most sporty piece, featuring a crisp white dial and blue\r\nanodized dauphine hands. It’s the perfect summer watch and will look great paired with sneakers.\r\nDesign, simplicity and quality put together into the Invictus Sport Original.', 5, '400€', '../images/sport1.jpg', 3, '35mm', '20mm'),
(6, 'Invictus Sport Light', 'Sport', 'The Invictus Sport Light with a white rose gold dial and its blue anodized dauphine hands\r\nprovides an exciting contrast we’ve all grown to love. Its stylish looks and light weight makes it the\r\nperfect sport watch, but then again, it’ll look just as good on the beach.', 6, '400€', '../images/sport2.jpg', 4, '35mm', '20mm');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `kund`
--
ALTER TABLE `kund`
  ADD PRIMARY KEY (`kundid`);

--
-- Index för tabell `ordern`
--
ALTER TABLE `ordern`
  ADD PRIMARY KEY (`orderid`);

--
-- Index för tabell `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`Produktid`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `kund`
--
ALTER TABLE `kund`
  MODIFY `kundid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT för tabell `ordern`
--
ALTER TABLE `ordern`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `produkt`
--
ALTER TABLE `produkt`
  MODIFY `Produktid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
