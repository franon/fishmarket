-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 08:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 3, 'co-1', 1, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tcoin`
--

CREATE TABLE `tcoin` (
  `idcoin` varchar(50) DEFAULT NULL,
  `idcustomercoin` varchar(50) DEFAULT NULL,
  `namacustomercoin` varchar(50) DEFAULT NULL,
  `idcustomer` varchar(50) DEFAULT NULL,
  `idseller` varchar(50) DEFAULT NULL,
  `balance` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcoin`
--

INSERT INTO `tcoin` (`idcoin`, `idcustomercoin`, `namacustomercoin`, `idcustomer`, `idseller`, `balance`) VALUES
(NULL, '99', 'jrx', NULL, NULL, 101011),
(NULL, '95', 'testing', NULL, NULL, 1187092),
('(NULL)', '5', 'presentasi', NULL, NULL, 2760000);

-- --------------------------------------------------------

--
-- Table structure for table `tcoincashflow`
--

CREATE TABLE `tcoincashflow` (
  `idtransaksi` varchar(50) DEFAULT NULL,
  `namatransaksi` varchar(50) DEFAULT NULL,
  `statustransaksi` varchar(50) DEFAULT NULL,
  `tgltransaksi` date DEFAULT NULL,
  `namacustomercoin` varchar(50) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tcoinregister`
--

CREATE TABLE `tcoinregister` (
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `namacustomercoin` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tglregister` date DEFAULT NULL,
  `idcustomercoin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
