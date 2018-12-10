-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 10. 12 2018 kl. 10:22:00
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planteprotein_b4`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `blog`
--

CREATE TABLE `blog` (
  `bId` int(11) NOT NULL,
  `bName` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `bDesc` text COLLATE utf8_danish_ci NOT NULL,
  `bReadTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `blogparts`
--

CREATE TABLE `blogparts` (
  `bpId` int(11) NOT NULL,
  `bpBId` int(11) NOT NULL,
  `bpTitle` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `bpText` text COLLATE utf8_danish_ci NOT NULL,
  `bpImg` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `bpImgAlt` varchar(255) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `images`
--

CREATE TABLE `images` (
  `iId` int(11) NOT NULL,
  `iPId` int(11) NOT NULL,
  `iLink` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `iAlt` varchar(255) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `newsletter`
--

CREATE TABLE `newsletter` (
  `nId` int(11) NOT NULL,
  `nEmail` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `nFirst` varchar(100) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
  `pId` int(11) NOT NULL,
  `pName` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `pDesc` text COLLATE utf8_danish_ci NOT NULL,
  `pContent` text COLLATE utf8_danish_ci NOT NULL,
  `pGluten` varchar(3) COLLATE utf8_danish_ci NOT NULL,
  `pSoy` varchar(3) COLLATE utf8_danish_ci NOT NULL,
  `pLactose` varchar(3) COLLATE utf8_danish_ci NOT NULL,
  `pOrganic` varchar(3) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `taste`
--

CREATE TABLE `taste` (
  `tId` int(11) NOT NULL,
  `tPId` int(11) NOT NULL,
  `tName` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `uFirst` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `uLast` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `uAddress` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `uZip` int(4) NOT NULL,
  `uCity` varchar(80) COLLATE utf8_danish_ci NOT NULL,
  `uEmail` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `uPhone` int(8) NOT NULL,
  `uBirthday` date DEFAULT NULL,
  `uPw` varchar(255) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `userreview`
--

CREATE TABLE `userreview` (
  `urId` int(11) NOT NULL,
  `urPId` int(11) NOT NULL,
  `urRating` int(11) NOT NULL,
  `urText` text COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `weight`
--

CREATE TABLE `weight` (
  `wId` int(11) NOT NULL,
  `wPId` int(11) NOT NULL,
  `wAmount` varchar(150) COLLATE utf8_danish_ci NOT NULL,
  `wPrice` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bId`);

--
-- Indeks for tabel `blogparts`
--
ALTER TABLE `blogparts`
  ADD PRIMARY KEY (`bpId`);

--
-- Indeks for tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`iId`);

--
-- Indeks for tabel `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`nId`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`);

--
-- Indeks for tabel `taste`
--
ALTER TABLE `taste`
  ADD PRIMARY KEY (`tId`);

--
-- Indeks for tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`);

--
-- Indeks for tabel `userreview`
--
ALTER TABLE `userreview`
  ADD PRIMARY KEY (`urId`);

--
-- Indeks for tabel `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`wId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `blogparts`
--
ALTER TABLE `blogparts`
  MODIFY `bpId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `images`
--
ALTER TABLE `images`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `taste`
--
ALTER TABLE `taste`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `userreview`
--
ALTER TABLE `userreview`
  MODIFY `urId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `weight`
--
ALTER TABLE `weight`
  MODIFY `wId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
