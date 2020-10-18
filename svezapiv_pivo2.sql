-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2020 at 03:45 PM
-- Server version: 10.3.23-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svezapiv_pivo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikl`
--

CREATE TABLE `artikl` (
  `id` int(11) NOT NULL,
  `sifra` varchar(250) NOT NULL,
  `kategorija` varchar(250) NOT NULL,
  `potkategorija` varchar(250) NOT NULL,
  `naziv` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opis` longtext CHARACTER SET utf8 NOT NULL,
  `kolicina` int(10) NOT NULL,
  `tezina` varchar(250) NOT NULL,
  `cijena` varchar(250) NOT NULL,
  `akcija` varchar(250) NOT NULL,
  `akcija_postotak` varchar(250) NOT NULL,
  `fotka` varchar(250) NOT NULL,
  `galerija` varchar(250) NOT NULL,
  `status` int(1) NOT NULL,
  `pozicija` varchar(250) NOT NULL,
  `naziv_seo` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikl`
--

INSERT INTO `artikl` (`id`, `sifra`, `kategorija`, `potkategorija`, `naziv`, `opis`, `kolicina`, `tezina`, `cijena`, `akcija`, `akcija_postotak`, `fotka`, `galerija`, `status`, `pozicija`, `naziv_seo`) VALUES
(1, '634', '2', '', 'Hmelj Azacca (2018)', '', 100, '100g', '52,00', '42,20', '', 'http://www.svezapivo.hr/data/source/proizvodi/hmelj/azacca.jpg', '', 0, '1.normalna', 'hmelj-azacca-(2018)');

-- --------------------------------------------------------

--
-- Table structure for table `artikli_kategorija`
--

CREATE TABLE `artikli_kategorija` (
  `id` int(11) NOT NULL,
  `naziv` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `opis` longtext NOT NULL,
  `fotografija` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `menu` int(60) NOT NULL,
  `kat_prefix` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikli_kategorija`
--

INSERT INTO `artikli_kategorija` (`id`, `naziv`, `opis`, `fotografija`, `menu`, `kat_prefix`) VALUES
(1, 'Slad', '', 'http://localhost/pivo/data/source/kategorije/slad.jpg', 1, 'slad'),
(2, 'Hmelj', '', 'http://localhost/pivo/data/source/kategorije/hmelj.jpg', 1, 'hmelj'),
(3, 'Kvasac', '', 'http://localhost/pivo/data/source/kategorije/kvasac.jpg', 1, 'kvasac'),
(4, 'Oprema', '', 'http://localhost/pivo/data/source/kategorije/oprema.jpg', 1, 'oprema'),
(5, 'Dodaci', '', 'http://localhost/pivo/data/source/kategorije/dodaci.jpg', 1, 'dodaci'),
(6, 'Pivski kompleti', '', 'http://localhost/pivo/data/source/kategorije/kit.jpg', 1, 'pivski-kompleti');

-- --------------------------------------------------------

--
-- Table structure for table `artikli_narudzbe`
--

CREATE TABLE `artikli_narudzbe` (
  `id` int(11) NOT NULL,
  `sifra` varchar(250) NOT NULL,
  `naziv` varchar(250) NOT NULL,
  `cijena_artikla` varchar(250) NOT NULL,
  `kolicina` int(60) NOT NULL,
  `ukupna_cijena` varchar(250) NOT NULL,
  `narudzba_id` varchar(250) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikli_potkategorija`
--

CREATE TABLE `artikli_potkategorija` (
  `id` int(11) NOT NULL,
  `kategorija_id` int(11) NOT NULL,
  `kategorija_naziv` varchar(250) NOT NULL,
  `opis` longtext NOT NULL,
  `naziv` varchar(250) DEFAULT NULL,
  `menu` int(60) NOT NULL,
  `potkat_prefix` varchar(250) NOT NULL,
  `fotografija` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikli_potkategorija`
--

INSERT INTO `artikli_potkategorija` (`id`, `kategorija_id`, `kategorija_naziv`, `opis`, `naziv`, `menu`, `potkat_prefix`, `fotografija`) VALUES
(1, 1, '', '', 'Bazni', 0, 'bazni', ''),
(2, 2, '', '', 'GorÄina/aroma', 0, 'gorcina/aroma', '');

-- --------------------------------------------------------

--
-- Table structure for table `dan`
--

CREATE TABLE `dan` (
  `dan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dan`
--

INSERT INTO `dan` (`dan`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31);

-- --------------------------------------------------------

--
-- Table structure for table `godina`
--

CREATE TABLE `godina` (
  `id` int(11) NOT NULL,
  `godina` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `godina`
--

INSERT INTO `godina` (`id`, `godina`) VALUES
(1, 2010),
(2, 2011),
(3, 2012),
(4, 2013),
(5, 2014),
(6, 2015),
(7, 2016),
(8, 9999),
(9, 2017),
(10, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `minuta`
--

CREATE TABLE `minuta` (
  `id` int(11) NOT NULL,
  `minuta` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minuta`
--

INSERT INTO `minuta` (`id`, `minuta`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60);

-- --------------------------------------------------------

--
-- Table structure for table `mjesec`
--

CREATE TABLE `mjesec` (
  `mjesec` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mjesec`
--

INSERT INTO `mjesec` (`mjesec`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12);

-- --------------------------------------------------------

--
-- Table structure for table `najcitanije`
--

CREATE TABLE `najcitanije` (
  `id` int(11) NOT NULL,
  `vijest_id` int(11) NOT NULL,
  `datum` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `narudzbe`
--

CREATE TABLE `narudzbe` (
  `id` int(11) NOT NULL,
  `ime` varchar(250) NOT NULL,
  `prezime` varchar(250) NOT NULL,
  `adresa` longtext NOT NULL,
  `mjesto` varchar(250) NOT NULL,
  `p_broj` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefon` varchar(250) NOT NULL,
  `poruka` longtext NOT NULL,
  `narudzba_id` varchar(250) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `cijena` varchar(250) NOT NULL,
  `datum` datetime NOT NULL,
  `aktivacija` int(1) NOT NULL,
  `nacin_dostave` varchar(250) NOT NULL,
  `tisak_sifra` varchar(250) NOT NULL,
  `mljevenje` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oznake`
--

CREATE TABLE `oznake` (
  `id` int(11) NOT NULL,
  `naziv` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oznake`
--

INSERT INTO `oznake` (`id`, `naziv`) VALUES
(2, 'FOTO'),
(3, 'VIDEO');

-- --------------------------------------------------------

--
-- Table structure for table `potkategorije`
--

CREATE TABLE `potkategorije` (
  `subcategoryID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `category_title` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `redosljed` int(60) DEFAULT NULL,
  `sort_order` int(6) NOT NULL,
  `broj_vijesti` int(1) NOT NULL,
  `header_image_extension` varchar(5) DEFAULT NULL,
  `section_image_extension` varchar(5) DEFAULT NULL,
  `category_name` varchar(250) DEFAULT NULL,
  `potkat_fotka` varchar(250) NOT NULL,
  `category_description` mediumtext DEFAULT NULL,
  `kat_prefix` varchar(250) NOT NULL,
  `potkat_prefix` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pozicija`
--

CREATE TABLE `pozicija` (
  `id` int(11) NOT NULL,
  `pozicija` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pozicija`
--

INSERT INTO `pozicija` (`id`, `pozicija`) VALUES
(3, '1.normalna');

-- --------------------------------------------------------

--
-- Table structure for table `sat`
--

CREATE TABLE `sat` (
  `id` int(11) NOT NULL,
  `sat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sat`
--

INSERT INTO `sat` (`id`, `sat`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24);

-- --------------------------------------------------------

--
-- Table structure for table `sekunda`
--

CREATE TABLE `sekunda` (
  `id` int(11) NOT NULL,
  `sekunda` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekunda`
--

INSERT INTO `sekunda` (`id`, `sekunda`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60);

-- --------------------------------------------------------

--
-- Table structure for table `statistika`
--

CREATE TABLE `statistika` (
  `id` int(11) NOT NULL,
  `ip` varchar(250) NOT NULL DEFAULT '',
  `datum` varchar(250) NOT NULL DEFAULT '',
  `vrijeme` varchar(250) NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblnewsarticles`
--

CREATE TABLE `tblnewsarticles` (
  `articleID` int(11) NOT NULL,
  `subcategoryID` int(11) NOT NULL,
  `potkategorija` int(60) NOT NULL,
  `kat_prefix` varchar(250) NOT NULL,
  `potkat_prefix` varchar(250) CHARACTER SET utf8 NOT NULL,
  `article_title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `article_prefix` varchar(150) CHARACTER SET utf8 NOT NULL,
  `article_description` longtext CHARACTER SET utf8 NOT NULL,
  `image_description` text CHARACTER SET utf8 NOT NULL,
  `article_extra` varchar(250) CHARACTER SET utf8 NOT NULL,
  `article_author` varchar(250) CHARACTER SET utf8 NOT NULL,
  `article_type` int(1) NOT NULL,
  `article_date` datetime NOT NULL,
  `datum` date NOT NULL,
  `status` smallint(1) NOT NULL,
  `image_extension` varchar(10) CHARACTER SET utf8 NOT NULL,
  `article_html` longtext CHARACTER SET utf8 NOT NULL,
  `lang` char(2) CHARACTER SET utf8 NOT NULL,
  `userIP` int(60) NOT NULL,
  `expiration_date` datetime NOT NULL,
  `korisnik` longtext CHARACTER SET utf8 NOT NULL,
  `allow_comment` int(1) NOT NULL,
  `galerija_thumb` varchar(250) CHARACTER SET utf8 NOT NULL,
  `galerija_id` int(11) NOT NULL,
  `viewed_count` int(11) NOT NULL,
  `authorID` int(11) NOT NULL,
  `meta_tagovi` longtext CHARACTER SET utf8 NOT NULL,
  `anketa` int(6) NOT NULL,
  `najave` varchar(2) CHARACTER SET utf8 NOT NULL,
  `oznake` varchar(250) CHARACTER SET utf8 NOT NULL,
  `pogled_dan` int(60) NOT NULL,
  `pogled_tjedan` int(60) NOT NULL,
  `pogled_mjesec` int(60) NOT NULL,
  `br_komentara` int(60) NOT NULL,
  `video` varchar(250) NOT NULL,
  `pozicija_pocetak` datetime NOT NULL,
  `pozicija_kraj` datetime NOT NULL,
  `pogled_mobile` int(11) NOT NULL,
  `komentari` varchar(250) NOT NULL,
  `fotka_nova` varchar(250) NOT NULL,
  `galerija_nova` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblnewscategories`
--

CREATE TABLE `tblnewscategories` (
  `categoryID` int(11) NOT NULL,
  `subcategoryID` int(11) NOT NULL,
  `category_title` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `stil_tekst` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `stil` varchar(250) DEFAULT '_top',
  `sort_order` varchar(250) NOT NULL,
  `jomla_id` int(1) NOT NULL,
  `header_image_extension` varchar(5) DEFAULT NULL,
  `section_image_extension` varchar(5) DEFAULT NULL,
  `lang` varchar(250) NOT NULL,
  `category_fotka` varchar(250) DEFAULT NULL,
  `category_description` mediumtext DEFAULT NULL,
  `menu` int(60) NOT NULL,
  `kat_prefix` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userID` int(11) NOT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_joindate` date NOT NULL,
  `brkomentara` int(20) NOT NULL DEFAULT 0,
  `avatar` varchar(250) NOT NULL,
  `random` varchar(250) NOT NULL,
  `status` int(60) NOT NULL,
  `pseudonim` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userID`, `user_name`, `user_password`, `user_email`, `user_joindate`, `brkomentara`, `avatar`, `random`, `status`, `pseudonim`) VALUES
(18, 'svezapivo', '30e8ca13f9fb4004d5f2b70bf2fdfe1c', 'svezapivo', '0000-00-00', 0, '', '', 4, 'svezapivo');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(11) NOT NULL,
  `status` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `status`) VALUES
(1, 'Običan'),
(2, 'Moderator'),
(3, 'Administrator'),
(4, 'Autor');

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(60) NOT NULL,
  `medij` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `opis` text NOT NULL,
  `lonk` varchar(250) NOT NULL,
  `slika` varchar(250) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikl`
--
ALTER TABLE `artikl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikli_kategorija`
--
ALTER TABLE `artikli_kategorija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikli_narudzbe`
--
ALTER TABLE `artikli_narudzbe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikli_potkategorija`
--
ALTER TABLE `artikli_potkategorija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dan`
--
ALTER TABLE `dan`
  ADD PRIMARY KEY (`dan`);

--
-- Indexes for table `godina`
--
ALTER TABLE `godina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minuta`
--
ALTER TABLE `minuta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mjesec`
--
ALTER TABLE `mjesec`
  ADD PRIMARY KEY (`mjesec`);

--
-- Indexes for table `najcitanije`
--
ALTER TABLE `najcitanije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narudzbe`
--
ALTER TABLE `narudzbe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oznake`
--
ALTER TABLE `oznake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potkategorije`
--
ALTER TABLE `potkategorije`
  ADD PRIMARY KEY (`subcategoryID`);

--
-- Indexes for table `pozicija`
--
ALTER TABLE `pozicija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sat`
--
ALTER TABLE `sat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekunda`
--
ALTER TABLE `sekunda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistika`
--
ALTER TABLE `statistika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnewsarticles`
--
ALTER TABLE `tblnewsarticles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `tblnewscategories`
--
ALTER TABLE `tblnewscategories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lonk` (`lonk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikl`
--
ALTER TABLE `artikl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikli_kategorija`
--
ALTER TABLE `artikli_kategorija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artikli_narudzbe`
--
ALTER TABLE `artikli_narudzbe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikli_potkategorija`
--
ALTER TABLE `artikli_potkategorija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dan`
--
ALTER TABLE `dan`
  MODIFY `dan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `godina`
--
ALTER TABLE `godina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `minuta`
--
ALTER TABLE `minuta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `mjesec`
--
ALTER TABLE `mjesec`
  MODIFY `mjesec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `najcitanije`
--
ALTER TABLE `najcitanije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `narudzbe`
--
ALTER TABLE `narudzbe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oznake`
--
ALTER TABLE `oznake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `potkategorije`
--
ALTER TABLE `potkategorije`
  MODIFY `subcategoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pozicija`
--
ALTER TABLE `pozicija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sat`
--
ALTER TABLE `sat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sekunda`
--
ALTER TABLE `sekunda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `statistika`
--
ALTER TABLE `statistika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnewsarticles`
--
ALTER TABLE `tblnewsarticles`
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnewscategories`
--
ALTER TABLE `tblnewscategories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
