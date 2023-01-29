-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2023 at 03:07 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

DROP TABLE IF EXISTS `tbl_dokter`;
CREATE TABLE IF NOT EXISTS `tbl_dokter` (
  `no_dokter` smallint(6) NOT NULL AUTO_INCREMENT,
  `nm_dokter` varchar(50) NOT NULL,
  `no_poli` smallint(6) NOT NULL,
  PRIMARY KEY (`no_dokter`),
  KEY `no_poli` (`no_poli`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`no_dokter`, `nm_dokter`, `no_poli`) VALUES
(1, 'dokter kandungan 1', 1),
(2, 'dokter kandungan 2', 1),
(3, 'dokter kandungan 3', 1),
(4, 'dokter umum 1', 2),
(5, 'dokter umum 2', 2),
(6, 'dokter umum 3', 2),
(7, 'dokter gigi 1', 3),
(8, 'dokter gigi 2', 3),
(9, 'dokter gigi 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poliklinik`
--

DROP TABLE IF EXISTS `tbl_poliklinik`;
CREATE TABLE IF NOT EXISTS `tbl_poliklinik` (
  `no_poli` smallint(6) NOT NULL AUTO_INCREMENT,
  `nm_poli` varchar(50) NOT NULL,
  PRIMARY KEY (`no_poli`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_poliklinik`
--

INSERT INTO `tbl_poliklinik` (`no_poli`, `nm_poli`) VALUES
(1, 'poli kandungan'),
(2, 'poli umum'),
(3, 'poli gigi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
