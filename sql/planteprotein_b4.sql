-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 09:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bId` int(11) NOT NULL,
  `bName` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `bDesc` text COLLATE utf8_danish_ci NOT NULL,
  `bReadTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogparts`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `iId` int(11) NOT NULL,
  `iPId` int(11) NOT NULL,
  `iLink` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `iAlt` varchar(255) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`iId`, `iPId`, `iLink`, `iAlt`) VALUES
(1, 1, 'images/productImages/scitec-nutrition-pure-form-vegan-protein.jpg', 'Scitec Nutrition pure form vegansk proteinpulver'),
(2, 1, 'images/productImages/scitec-nutrition-pure-form-vegan-protein(1).jpg', 'Scitec Nutrition pure form vegansk proteinpulver'),
(3, 1, 'images/productImages/scitec-nutrition-pure-form-vegan-protein(2).jpg', 'Scitec Nutrition pure form vegansk proteinpulver'),
(9, 2, 'images/productImages/the-protein-works.png', 'The Protein Works - Vegan Protein, vegansk proteinpulver'),
(10, 2, 'images/productImages/the-protein-works2.png', 'The Protein Works - Vegan Protein, vegansk proteinpulver'),
(11, 2, 'images/productImages/the-protein-works3.png', 'The Protein Works - Vegan Protein, vegansk proteinpulver'),
(12, 2, 'images/productImages/the-protein-works4.png', 'The Protein Works - Vegan Protein, vegansk proteinpulver'),
(13, 3, 'images/productImages/multipower-100-vegan-proteinpulver.jpg', 'Multipower 100% Vegan Protein, vegansk proteinpulver'),
(14, 3, 'images/productImages/multipower-100-vegan-proteinpulver(1).jpg', 'Multipower 100% Vegan Protein, vegansk proteinpulver'),
(15, 4, 'images/productImages/gymqueen-queen-vegan-protein-500-g.jpg', 'GymQueen Queen Vegan Protein, vegansk proteinpulver'),
(16, 4, 'images/productImages/gymqueen-queen-vegan-protein-500-g(1).jpg', 'GymQueen Queen Vegan Protein, vegansk proteinpulver'),
(17, 5, 'images/productImages/scitec-nutrition-100-plant-protein.jpg', 'Scitec Nutrition 100% Plant Protein, vegansk proteinpulver'),
(18, 5, 'images/productImages/scitec-nutrition-100-plant-protein(1).jpg', 'Scitec Nutrition 100% Plant Protein, vegansk proteinpulver'),
(19, 6, 'images/productImages/rawfusion-plantebaseret-proteinpulver.jpg', 'Rawfusion vegansk proteinpulver'),
(20, 6, 'images/productImages/rawfusion-plantebaseret-proteinpulver(1).jpg', 'Rawfusion vegansk proteinpulver'),
(21, 6, 'images/productImages/rawfusion-plantebaseret-proteinpulver(2).jpg', 'Rawfusion vegansk proteinpulver'),
(22, 6, 'images/productImages/rawfusion-plantebaseret-proteinpulver(3).jpg', 'Rawfusion vegansk proteinpulver'),
(23, 7, 'images/productImages/plantforce-synergy-protein.jpg', 'Plantforce Synergy Protein, vegansk proteinpulver'),
(24, 7, 'images/productImages/plantforce-synergy-protein(1).jpg', 'Plantforce Synergy Protein, vegansk proteinpulver'),
(25, 7, 'images/productImages/plantforce-synergy-protein(2).jpg', 'Plantforce Synergy Protein, vegansk proteinpulver'),
(26, 7, 'images/productImages/plantforce-synergy-protein(3).jpg', 'Plantforce Synergy Protein, vegansk proteinpulver'),
(27, 8, 'images/productImages/vegan-protein-extreme.jpg', 'Vegan Protein Extreme, vegansk proteinpulver'),
(28, 9, 'images/productImages/rawfusion-complete-vegansk-proteinpulver-med-superfoods(2).jpg', 'Rawfusion Complete - vegansk proteinpulver med superfoods'),
(29, 9, 'images/productImages/rawfusion-complete-vegansk-proteinpulver-med-superfoods.png', 'Rawfusion Complete - vegansk proteinpulver med superfoods'),
(30, 9, 'images/productImages/rawfusion-complete-vegansk-proteinpulver-med-superfoods(1).png', 'Rawfusion Complete - vegansk proteinpulver med superfoods'),
(31, 9, 'images/productImages/rawfusion-complete-vegansk-proteinpulver-med-superfoods(3).png', 'Rawfusion Complete - vegansk proteinpulver med superfoods'),
(32, 9, 'images/productImages/rawfusion-complete-vegansk-proteinpulver-med-superfoods(4).png', 'Rawfusion Complete - vegansk proteinpulver med superfoods'),
(33, 10, 'images/productImages/hej-natural-protein-vegan.jpg', 'HEJ Natural Vegansk Proteinpulver'),
(34, 10, 'images/productImages/hej-natural-protein-vegan(1).jpg', 'HEJ Natural Vegansk Proteinpulver'),
(35, 11, 'images/productImages/sunwarrior-okologisk-risprotein.jpg', 'SunWarrior Classic Risprotein, økologisk vegansk proteinpulver'),
(36, 11, 'images/productImages/sunwarrior-okologisk-risprotein(1).jpg', 'SunWarrior Classic Risprotein, økologisk vegansk proteinpulver'),
(37, 11, 'images/productImages/sunwarrior-okologisk-risprotein(2).jpg', 'SunWarrior Classic Risprotein, økologisk vegansk proteinpulver'),
(38, 11, 'images/productImages/sunwarrior-okologisk-risprotein(3).jpg', 'SunWarrior Classic Risprotein, økologisk vegansk proteinpulver'),
(39, 11, 'images/productImages/sunwarrior-okologisk-risprotein(4).jpg', 'SunWarrior Classic Risprotein, økologisk vegansk proteinpulver'),
(40, 12, 'images/productImages/sunwarrior-classic-plus-vegansk-proteinpulver.jpg', 'SunWarrior Classic Plus - Vegansk proteinpulver'),
(41, 12, 'images/productImages/sunwarrior-classic-plus-vegansk-proteinpulver(1).jpg', 'SunWarrior Classic Plus - Vegansk proteinpulver'),
(42, 12, 'images/productImages/sunwarrior-classic-plus-vegansk-proteinpulver(2).jpg', 'SunWarrior Classic Plus - Vegansk proteinpulver'),
(43, 13, 'images/productImages/vega-one-alt-i-en-shake-vegansk-proteinpulver.png', 'Vega One alt i en vegansk proteinshake'),
(44, 13, 'images/productImages/vega-one-alt-i-en-shake-vegansk-proteinpulver(1).png', 'Vega One alt i en vegansk proteinshake'),
(45, 13, 'images/productImages/vega-one-alt-i-en-shake-vegansk-proteinpulver(2).png', 'Vega One alt i en vegansk proteinshake'),
(46, 13, 'images/productImages/vega-one-alt-i-en-shake-vegansk-proteinpulver(3).png', 'Vega One alt i en vegansk proteinshake'),
(47, 14, 'images/productImages/vega-protein-greens-proteinpulver(1).png', 'Vega Protein & Greens, vegansk proteinpulver'),
(48, 14, 'images/productImages/vega-protein-greens-proteinpulver(2).png', 'Vega Protein & Greens, vegansk proteinpulver'),
(49, 14, 'images/productImages/vega-protein-greens-proteinpulver(3).png', 'Vega Protein & Greens, vegansk proteinpulver'),
(50, 14, 'images/productImages/vega-protein-greens-proteinpulver(4).png', 'Vega Protein & Greens, vegansk proteinpulver'),
(51, 14, 'images/productImages/vega-protein-greens-proteinpulver(5).png', 'Vega Protein & Greens, vegansk proteinpulver'),
(52, 15, 'images/productImages/vega-essentials-shake.png', 'Vega Essentials Shake - vegansk proteinpulver'),
(53, 15, 'images/productImages/vega-essentials-shake(1).png', 'Vega Essentials Shake - vegansk proteinpulver'),
(54, 16, 'images/productImages/all-stars-all-natural-oatcake-energibar.png', 'All Stars - All Natural Oatcake Havrebar, proteinbar'),
(55, 16, 'images/productImages/all-stars-all-natural-oatcake-energibar(1).jpg', 'All Stars - All Natural Oatcake Havrebar, proteinbar'),
(56, 16, 'images/productImages/all-stars-all-natural-oatcake-energibar(2).jpg', 'All Stars - All Natural Oatcake Havrebar, proteinbar'),
(57, 16, 'images/productImages/all-stars-all-natural-oatcake-energibar(3).jpg', 'All Stars - All Natural Oatcake Havrebar, proteinbar'),
(58, 17, 'images/productImages/rawfusion-bar.png', 'Rawfusion vegansk proteinbar 70g'),
(59, 17, 'images/productImages/rawfusion-bar(1).jpg', 'Rawfusion vegansk proteinbar 70g'),
(60, 17, 'images/productImages/rawfusion-bar(2).jpg', 'Rawfusion vegansk proteinbar 70g');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `nId` int(11) NOT NULL,
  `nEmail` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `nFirst` varchar(100) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` int(11) NOT NULL,
  `pName` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `pBrand` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `pDesc` text COLLATE utf8_danish_ci NOT NULL,
  `pContent` text COLLATE utf8_danish_ci NOT NULL,
  `pGluten` varchar(3) COLLATE utf8_danish_ci NOT NULL,
  `pSoy` varchar(3) COLLATE utf8_danish_ci NOT NULL,
  `pLactose` varchar(3) COLLATE utf8_danish_ci NOT NULL,
  `pOrganic` varchar(3) COLLATE utf8_danish_ci NOT NULL,
  `pType` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `pName`, `pBrand`, `pDesc`, `pContent`, `pGluten`, `pSoy`, `pLactose`, `pOrganic`, `pType`) VALUES
(1, 'Pure Form Vegan Protein', 'Scitec Nutrition', 'Premium udgaven af Scitec\'s populære \"100% Plant Protein\"\r\n<br><br>\r\n- Højkvalitets-proteinpulver med øko ingredienser\r\n<br>\r\n- Uden syntetiske sødestoffer\r\n<br>\r\n- Kompromisløs kvalitet og smag', 'images/productImages/prscScitecContent.png', 'Yes', 'No', 'Yes', 'No', 'proteinpulver'),
(2, 'Vegan Protein', 'The Protein Works', 'Vegansk proteinpulver fra The Protein Works.\r\n<br><br>\r\n- Lav pris\r\n<br>\r\n- Rå kvalitet.\r\n', 'images/productImages/the-protein-worksContent.png', 'Yes', 'No', 'Yes', 'No', 'proteinpulver'),
(3, '100% Vegan Protein', 'Multipower', 'Multipower  Protein er et 100 procent plantebaseret proteinpulver, lavet af ris, ærter og soja, til dagligt proteinindtag der understøtter muskelvækst. ', 'images/productImages/100-vegan-protein-multipower.png', 'Yes', 'No', 'No', 'No', 'proteinpulver'),
(4, 'Queen Vegan Protein', 'GymQueen', 'Endelig er det her! Det ny-lancerede Queen Vegan Proteinpulver! Et yderst velsmagende proteinpulver, der med sine to højkvalitets proteinkilder, med en daglig dosis på 30 g, giver dig 23,8 g protein og kun 110 kcal.', 'images/productImages/GymQueenContent.png', 'Yes', 'Yes', 'Yes', 'No', 'proteinpulver'),
(5, '100% Plant Protein', 'Scitec Nutrition', 'Måske det mest velsmagende og samtidig et af de billigste veganske proteinpulver på markedet\r\n<br>\r\nSuper lækkert og opløses fuldstændigt uden at gryne.\r\n<br><br>\r\n- Pisane® C9 ærteproteinisolat\r\n<br>\r\n- 21 gram protein af høj kvalitet pr. Portion!\r\n<br>\r\n- Vegansk!\r\n<br>\r\n- GMO-fri!\r\n<br>\r\n- Lactose og glutenfri!', 'images/productImages/100-plant-protein-scitec-content.png', 'Yes', 'No', 'Yes', 'No', 'proteinpulver'),
(6, 'Vegansk Proteinpulver', 'Rawfusion', 'RAWFUSIONs eksklusive blanding af ærteprotein isolat, spirede brune ris og artiskok proteinkoncentrat har skabt en patentanmeldt formel, der er ideel til veganere og laktoseintolerante.\r\n<br><br>\r\nKun sødet naturligt.', 'images/productImages/rawfusion-veganskprotein-content.png', 'Yes', 'Yes', 'Yes', 'No', 'proteinpulver'),
(7, 'Synergy Protein', 'Plantforce', 'Kompromisløs kvalitet fra plantforce!!\r\n\r\n<br><br>\r\n- Optimal blanding af ris-, ærte- og hampeprotein\r\n<br>\r\n- God og 100% naturlig smag efter EU’s strenge krav\r\n<br>\r\n- God konsistens - ikke grynet.\r\n<br>\r\n- Balanceret aminosyreprofil\r\n<br>\r\n- Rig på BCAA\r\n<br>\r\n- Fri for mælk, soja og gluten\r\n<br>\r\n- RAW/rawfood-kvalitet', 'images/productImages/content-synergy-plantforce.png', 'Yes', 'Yes', 'Yes', 'Yes', 'proteinpulver'),
(8, 'Vegan Protein Extreme', 'The Protein Works', '- Extreme - vegansk proteinpulver med ekstra næring<br>\r\n- Med essentielle vitaminer og aminosyrer<br>\r\n- Plantebaseret, mælkefrit og laktosefrit proteinpulver<br>\r\n- 24 Gram protein pr scoop.<br>\r\n- Med over 20 mineraler og vitaminer<br>\r\n- Gode smagsvarianter<br>\r\n- og til en SUPER LAV PRIS!', 'images/productImages/vegan-protein-extreme-content.png', 'No', 'No', 'Yes', 'No', 'proteinpulver'),
(9, 'vegansk proteinpulver med superfoods', 'Rawfusion', '21 gram protein pr. portion\r\nForstærket med 12 Økologiske Superfoods\r\nIndeholder Økologiske wholefood Vitaminer\r\nForbedret med probiotika og Fibre\r\nHøjt indhold af Omega-3 essentielle fedtsyrer\r\nFri af Mælk, Soja & Animalsk Protein', 'images/productImages/rawfusion-superfoods-content.png', 'Yes', 'No', 'No', 'Yes', 'proteinpulver'),
(10, 'Natural Vegansk Proteinpulver', 'HEJ', 'Et højkvalitets proteinpulver, en kombination af ris- og ærteprotein.', 'images/productImages/hej-content.png', 'Yes', 'Yes', 'Yes', 'No', 'proteinpulver'),
(11, 'Classic Risprotein', 'SunWarrior', 'SunWarrior Classic vegansk proteinpulver er skabt af spirede brune riskorn og indeholder hele 85% protein. Sunwarrior protein indeholder alle de essentielle aminosyrer din krop har brug for, i perfekt afbalanceret profil til enhver livsstil. Designet til at give atleter og bodybuildere de bedste betingelser for restitution og fremskridt i træningen og kendt for sine populære velsmagende varianter.', 'images/productImages/sunwarrior-classic-content.png', 'Yes', 'Yes', 'Yes', 'Yes', 'proteinpulver'),
(12, 'Classic Plus', 'SunWarrior', 'Du vil elske smagen af dette veganske proteinpulver, men måden det får dig til at føle dig på er, hvorfor vi kalder det Plus. Rå, plantebaserede og kraftfulde Classic Plus bygger på den milde natur af brune fuldkorns ris, med styrken af ​​ærter, chia, quinoa og amarantprotein. ', 'images/productImages/sunwarrior-classic-plus-content.png', 'Yes', 'Yes', 'Yes', 'No', 'proteinpulver'),
(13, 'One', 'Vega', 'Vega One alt-i-en vegansk proteinshake, med forbedret smag og tekstur.\r\nSpækket med naturlige, plantebaserede, økologiske ingredienser.\r\n<br><br>\r\nVega One Alt-i-en shake udnytter det gode fra planter, til at give dig det energiboost du behøver. \r\n<br><br>\r\nGlutenfri, vegansk, uden tilsat sukker, kunstige farver, smagsstoffer eller konserveringsmidler', 'images/productImages/vega-one-content.png', 'Yes', 'Yes', 'Yes', 'Yes', 'proteinpulver'),
(14, 'Protein & Greens', 'Vega', 'Tilføj let mere plantebaseret ernæring til din dag med Vega® Protein & Greens. \r\nVega Protein & Greens er fremstillet med ægte plantebaserede fødevareingredienser og er mere end blot en proteinshake.\r\n<br><br>\r\n20 gram plantebaseret protein<br>\r\nGrøntsager<br>\r\n110-120 kalorier<br>\r\n0-1 gram sukker', 'images/productImages/vega-greens-content.png', 'Yes', 'No', 'No', 'No', 'proteinpulver'),
(15, 'Essentials Shake', 'Vega', 'Vega® Essentials er lavet med ægte plantebaserede ingredienser og sikrer dig en fornuftig start på dagen, ved nemt og hurtigt at tilføje de næringsmæssige byggesten, som du har brug for.\r\n<br><br>\r\nDu får 20 gram protein pr. servering. \r\nDesuden får du en stor dosis af 12 forskellige vitaminer og mineraler, en stor mængde kostfibre, samt 1 gram Omega-3. ', 'images/productImages/vega-essentials-content.png', 'Yes', 'No', 'No', 'No', 'proteinpulver'),
(16, 'All Natural Oatcake ', 'All Stars', 'Velsmagende energibar, perfekt som mellemmåltid eller efter træning.\r\n<br><br>\r\nSælges stykvis!', 'images/productImages/oatcake-content.png', 'Yes', 'No', 'No', 'No', 'proteinbar'),
(17, 'vegansk proteinbar', 'Rawfusion', 'Fantastisk vegansk proteinbar fra SAN\r\nFås i to lækre smagsvarianter - Almond Berry og Chocolate Coconut.\r\n<br><br>\r\nSælges kun stykvis', 'images/productImages/rawfusion-proteinbar-content.png', 'No', 'No', 'No', 'No', 'proteinbar');

-- --------------------------------------------------------

--
-- Table structure for table `taste`
--

CREATE TABLE `taste` (
  `tId` int(11) NOT NULL,
  `tPId` int(11) NOT NULL,
  `tName` varchar(50) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `taste`
--

INSERT INTO `taste` (`tId`, `tPId`, `tName`) VALUES
(1, 1, 'Chocolate'),
(2, 1, 'Hazelnut Toffee'),
(3, 2, 'Chocolate Silk'),
(4, 2, 'Vanilla Creme'),
(5, 2, 'Strawberries \'n\' Cream'),
(6, 2, 'Choc Mint Brownie'),
(7, 2, 'Cookies n Cream'),
(8, 2, 'Choc Peanut Cookie'),
(9, 3, 'French Vanilla'),
(10, 3, 'Rich Chocolate'),
(11, 4, 'Mango Maracuja'),
(12, 5, 'Chocolate Praline'),
(13, 6, 'Banana Nut'),
(14, 6, 'Natural Chocolate'),
(15, 6, 'Vanilla Bean'),
(16, 6, 'Peanut Chocolate Fudge'),
(17, 6, 'Chocolate Strawberry'),
(18, 6, 'Natural & Unflavoured'),
(19, 7, 'Berry'),
(20, 7, 'Vanilla'),
(21, 7, 'Chocolate'),
(22, 8, 'Chocolate Silk'),
(23, 8, 'Vanilla Creme'),
(24, 8, 'Salted Caramel Bandit'),
(25, 9, 'Vanilla'),
(26, 9, 'Chocolate'),
(27, 10, 'Vanilla'),
(28, 10, 'Chocolate'),
(29, 11, 'Naturel'),
(30, 11, 'Chocolate'),
(31, 11, 'Vanilla'),
(32, 12, 'Vanilla'),
(33, 12, 'Chocolate'),
(34, 12, 'Natural'),
(35, 13, 'Mocha'),
(36, 13, 'Chocolate'),
(37, 13, 'French Vanilla'),
(38, 13, 'Vanilla Chai'),
(39, 13, 'Mixed Berry'),
(40, 14, 'Berry'),
(41, 14, 'Vanilla'),
(42, 14, 'Chocolate'),
(43, 14, 'Coconut Almond'),
(44, 15, 'Vanilla'),
(45, 15, 'Chocolate'),
(46, 16, 'Chocolate'),
(47, 16, 'Cranberry Cashew'),
(48, 16, 'Coconut'),
(49, 17, 'Almond Berry'),
(50, 17, 'Chocolate Coconut');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Table structure for table `userreview`
--

CREATE TABLE `userreview` (
  `urId` int(11) NOT NULL,
  `urPId` int(11) NOT NULL,
  `urRating` int(11) NOT NULL,
  `urText` text COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `wId` int(11) NOT NULL,
  `wPId` int(11) NOT NULL,
  `wAmount` varchar(150) COLLATE utf8_danish_ci NOT NULL,
  `wPrice` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`wId`, `wPId`, `wAmount`, `wPrice`) VALUES
(1, 1, '450 Gram', '190.00'),
(2, 2, '500 Gram', '105.00'),
(3, 2, '1000 Gram', '180.00'),
(4, 2, '2000 Gram', '310.00'),
(5, 3, '450 Gram', '159.00'),
(6, 4, '500 Gram', '175.00'),
(7, 5, '900 Gram', '199.00'),
(8, 6, '450 Gram', '219.00'),
(9, 6, '983 Gram', '344.00'),
(10, 6, '1830 Gram', '534.00'),
(11, 7, '400 Gram', '210.00'),
(12, 7, '400 Gram', '350.00'),
(13, 8, '500 Gram', '125.00'),
(14, 8, '1000 Gram', '205.00'),
(15, 9, '450 Gram', '229.00'),
(16, 9, '983 Gram', '386.50'),
(17, 10, '450 Gram', '219.00'),
(18, 11, '500 Gram', '275.00'),
(19, 11, '750 Gram', '275.00'),
(20, 11, '1000 Gram', '275.00'),
(21, 12, '750 Gram', '285.00'),
(22, 13, '414 Gram', '349.00'),
(23, 13, '827 Gram', '574.00'),
(24, 14, '518 Gram', '375.00'),
(25, 14, '760 Gram', '475.00'),
(26, 15, '613 Gram', '399.00'),
(27, 16, '80 Gram', '16.00'),
(28, 17, '70 Gram', '22.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `blogparts`
--
ALTER TABLE `blogparts`
  ADD PRIMARY KEY (`bpId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`nId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `taste`
--
ALTER TABLE `taste`
  ADD PRIMARY KEY (`tId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`);

--
-- Indexes for table `userreview`
--
ALTER TABLE `userreview`
  ADD PRIMARY KEY (`urId`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`wId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogparts`
--
ALTER TABLE `blogparts`
  MODIFY `bpId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `taste`
--
ALTER TABLE `taste`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userreview`
--
ALTER TABLE `userreview`
  MODIFY `urId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weight`
--
ALTER TABLE `weight`
  MODIFY `wId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
