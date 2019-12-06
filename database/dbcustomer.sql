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
-- Database: `dbcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idcart` varchar(50) NOT NULL DEFAULT 'NULL',
  `idfishowner` varchar(50) DEFAULT NULL,
  `idcustomer` int(11) DEFAULT NULL,
  `namaproduct` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idcart`, `idfishowner`, `idcustomer`, `namaproduct`, `quantity`, `harga`, `subtotal`) VALUES
('crt-839', '18', 15, 'Ikan Lili', 1, 12000, NULL),
('crt-839', '18', 15, 'Ikan Lili', 1, 12000, NULL),
('crt-839', '18', 15, 'Ikan Lili', 1, 12000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tcustomer`
--

CREATE TABLE `tcustomer` (
  `idcustomer` int(11) NOT NULL,
  `namacustomer` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `tglregister` datetime DEFAULT NULL,
  `idcustomercoin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcustomer`
--

INSERT INTO `tcustomer` (`idcustomer`, `namacustomer`, `email`, `password`, `username`, `tglregister`, `idcustomercoin`) VALUES
(11, 'cust-Syifa', 'syifa@gmail.com', 'syifa', 'usrsyifa', '2019-10-25 10:10:10', NULL),
(12, 'cust-Fran', 'fran@gmail.com', 'fran', 'usrfran', '2019-10-25 21:26:24', NULL),
(15, 'jrx', 'jrx@gmail.com', '3cbb145354438ded10f0e10d0acc4e27', 'jrx', '2019-11-23 21:11:22', '99'),
(16, 'testing', 'testing@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', 'testing', '2019-11-23 21:11:52', '95'),
(17, 'presentasi', 'presentasi@gmail.com', 'a2116aa763c1ef3f989ac8185025b3c5', 'presentasi', '2019-12-05 12:12:07', '5');

-- --------------------------------------------------------

--
-- Table structure for table `thistory`
--

CREATE TABLE `thistory` (
  `idcustomer` int(11) DEFAULT NULL,
  `cust_nama` varchar(50) DEFAULT NULL,
  `cust_username` varchar(10) DEFAULT NULL,
  `tglLogin` datetime DEFAULT NULL,
  `idcustomercoin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thistory`
--

INSERT INTO `thistory` (`idcustomer`, `cust_nama`, `cust_username`, `tglLogin`, `idcustomercoin`) VALUES
(12, 'cust-Fran', 'usrfran', '2019-11-23 20:11:09', NULL),
(11, 'cust-Syifa', 'usrsyifa', '2019-11-23 20:11:24', NULL),
(12, 'cust-Fran', 'usrfran', '2019-11-23 21:11:16', NULL),
(15, 'jrx', 'jrx', '2019-11-23 21:11:17', NULL),
(16, 'testing', 'testing', '2019-11-23 21:11:56', NULL),
(16, 'testing', 'testing', '2019-11-23 23:11:17', NULL),
(16, 'testing', 'testing', '2019-11-24 06:11:10', NULL),
(16, 'testing', 'testing', '2019-11-24 07:11:08', NULL),
(16, 'testing', 'testing', '2019-11-24 07:11:35', NULL),
(16, 'testing', 'testing', '2019-11-24 11:11:28', NULL),
(15, 'jrx', 'jrx', '2019-12-03 09:12:50', NULL),
(15, 'jrx', 'jrx', '2019-12-03 09:12:38', NULL),
(16, 'testing', 'testing', '2019-12-03 09:12:12', NULL),
(15, 'jrx', 'jrx', '2019-12-03 09:12:08', NULL),
(16, 'testing', 'testing', '2019-12-03 10:12:39', NULL),
(15, 'jrx', 'jrx', '2019-12-03 10:12:32', NULL),
(15, 'jrx', 'jrx', '2019-12-03 15:12:02', NULL),
(15, 'jrx', 'jrx', '2019-12-04 08:12:20', NULL),
(15, 'jrx', 'jrx', '2019-12-04 11:12:40', NULL),
(15, 'jrx', 'jrx', '2019-12-04 11:12:22', NULL),
(15, 'jrx', 'jrx', '2019-12-04 11:12:12', NULL),
(16, 'testing', 'testing', '2019-12-04 11:12:42', NULL),
(15, 'jrx', 'jrx', '2019-12-04 12:12:14', NULL),
(15, 'jrx', 'jrx', '2019-12-04 12:12:53', NULL),
(15, 'jrx', 'jrx', '2019-12-04 12:12:30', NULL),
(15, 'jrx', 'jrx', '2019-12-04 12:12:00', NULL),
(15, 'jrx', 'jrx', '2019-12-04 12:12:43', NULL),
(15, 'jrx', 'jrx', '2019-12-04 12:12:57', NULL),
(16, 'testing', 'testing', '2019-12-04 13:12:37', NULL),
(16, 'testing', 'testing', '2019-12-05 07:12:45', NULL),
(16, 'testing', 'testing', '2019-12-05 08:12:31', '95'),
(16, 'testing', 'testing', '2019-12-05 09:12:59', '95'),
(16, 'testing', 'testing', '2019-12-05 09:12:28', '95'),
(16, 'testing', 'testing', '2019-12-05 09:12:49', '95'),
(16, 'testing', 'testing', '2019-12-05 10:12:18', '95'),
(16, 'testing', 'testing', '2019-12-05 10:12:34', '95'),
(15, 'jrx', 'jrx', '2019-12-05 10:12:18', NULL),
(17, 'presentasi', 'presentasi', '2019-12-05 12:12:14', NULL),
(16, 'testing', 'testing', '2019-12-05 12:12:04', NULL),
(16, 'testing', 'testing', '2019-12-05 12:12:10', '95'),
(16, 'testing', 'testing', '2019-12-05 12:12:03', '95'),
(17, 'presentasi', 'presentasi', '2019-12-05 12:12:02', '5'),
(17, 'presentasi', 'presentasi', '2019-12-05 13:12:39', '5'),
(16, 'testing', 'testing', '2019-12-05 16:12:32', '95'),
(16, 'testing', 'testing', '2019-12-05 16:12:03', '95'),
(16, 'testing', 'testing', '2019-12-05 16:12:52', '95'),
(15, 'jrx', 'jrx', '2019-12-05 17:12:35', NULL),
(15, 'jrx', 'jrx', '2019-12-05 17:12:42', '99'),
(16, 'testing', 'testing', '2019-12-06 10:12:39', '95'),
(17, 'presentasi', 'presentasi', '2019-12-06 10:12:03', '5'),
(15, 'jrx', 'jrx', '2019-12-06 10:12:59', '99');

-- --------------------------------------------------------

--
-- Table structure for table `ttransaksi`
--

CREATE TABLE `ttransaksi` (
  `idtransaksi` varchar(50) DEFAULT NULL,
  `idcart` varchar(50) NOT NULL,
  `idfishowner` varchar(50) NOT NULL,
  `idcustomer` varchar(50) NOT NULL DEFAULT '0',
  `namacustomer` varchar(50) NOT NULL,
  `namaproduct` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `harga` int(11) NOT NULL DEFAULT 0,
  `subtotal` int(11) NOT NULL DEFAULT 0,
  `shipping` int(11) NOT NULL DEFAULT 0,
  `totalharga` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttransaksi`
--

INSERT INTO `ttransaksi` (`idtransaksi`, `idcart`, `idfishowner`, `idcustomer`, `namacustomer`, `namaproduct`, `quantity`, `harga`, `subtotal`, `shipping`, `totalharga`) VALUES
('trx-333', 'crt-751', '', '15', 'jrx', 'Tongkol', 1, 21000, 134000, 15000, 149000),
('trx-333', 'crt-751', '', '15', 'jrx', 'Lele', 1, 23000, 134000, 15000, 149000),
('trx-333', 'crt-751', '', '15', 'jrx', '', 1, 0, 134000, 15000, 149000),
('trx-333', 'crt-751', '', '15', 'jrx', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000),
(NULL, 'crt-059', '', '15', 'jrx', 'Ikan Fish 2', 1, 99999997, 99999997, 15000, 100014997),
(NULL, 'crt-059', '', '15', 'jrx', 'Ikan Fish 2', 1, 99999997, 99999997, 15000, 100014997),
('trx-845', 'crt-845', '5', '16', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000),
('trx-319', 'crt-319', '4', '16', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000),
('trx-319', 'crt-319', '4', '16', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000),
('trx-061', 'crt-061', '12', '16', 'testing', '', 1, 0, 111, 15000, 15111),
('trx-061', 'crt-061', '12', '16', 'testing', 'jrx', 1, 111, 111, 15000, 15111),
('trx-163', 'crt-163', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-163', 'crt-163', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-163', 'crt-163', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-054', 'crt-054', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-054', 'crt-054', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-054', 'crt-054', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-054', 'crt-054', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-054', 'crt-054', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-078', 'crt-078', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-038', 'crt-038', '4', '17', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000),
('trx-058', 'crt-058', '12', '16', 'testing', 'Salmon', 1, 350000, 350000, 15000, 365000),
('trx-419', 'crt-419', '18', '16', 'testing', 'Ikan Lili', 1, 12000, 12000, 15000, 27000),
('trx-275', 'crt-275', '18', '16', 'testing', 'Ikan Lili', 1, 12000, 12000, 15000, 27000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcustomer`
--
ALTER TABLE `tcustomer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tcustomer`
--
ALTER TABLE `tcustomer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
