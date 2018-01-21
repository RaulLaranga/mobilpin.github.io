-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 01, 2018 at 09:03 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pin_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `model_tbl`
--

DROP TABLE IF EXISTS `model_tbl`;
CREATE TABLE IF NOT EXISTS `model_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oznaka_modela` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `slika_modela` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ram_memorija` int(2) NOT NULL,
  `memorija` int(2) NOT NULL,
  `kamera` int(2) NOT NULL,
  `memorija_kartica` tinyint(4) NOT NULL,
  `cena` decimal(8,2) NOT NULL,
  `datum_unosa` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `proizvodjac` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proizvodjac` (`proizvodjac`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_tbl`
--

INSERT INTO `model_tbl` (`id`, `oznaka_modela`, `slika_modela`, `ram_memorija`, `memorija`, `kamera`, `memorija_kartica`, `cena`, `datum_unosa`, `proizvodjac`) VALUES
(1, 'IPhone X', 'https://cdn.gsmarena.com/imgroot/news/17/09/apple-iphone-x-official/-x300/gsmarena_0112.jpg', 3, 256, 12, 0, '1149.00', '2017-12-27 19:21:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjac_tbl`
--

DROP TABLE IF EXISTS `proizvodjac_tbl`;
CREATE TABLE IF NOT EXISTS `proizvodjac_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv_proizvodjaca` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodjac_tbl`
--

INSERT INTO `proizvodjac_tbl` (`id`, `naziv_proizvodjaca`) VALUES
(1, 'APPLE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
