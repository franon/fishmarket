-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 08:14 AM
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
-- Database: `dbselermemberships`
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
(1, 0, 'fm-5', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tfishkiosproductidentity`
--

CREATE TABLE `tfishkiosproductidentity` (
  `idfishkios` int(11) NOT NULL,
  `kiosname` varbinary(50) NOT NULL DEFAULT '',
  `kiosownername` varchar(50) NOT NULL DEFAULT '',
  `owneridcitizion` varchar(50) NOT NULL DEFAULT '',
  `kiosfulladdress` varchar(50) NOT NULL DEFAULT '',
  `kiosphonenumber` varchar(50) NOT NULL DEFAULT '',
  `kiossertificationnumber` varchar(50) NOT NULL DEFAULT '',
  `kiosownership2` varchar(50) NOT NULL DEFAULT '',
  `kiosidcitizion2` varchar(50) NOT NULL DEFAULT '',
  `idfishowner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tfishkiosproductidentity`
--

INSERT INTO `tfishkiosproductidentity` (`idfishkios`, `kiosname`, `kiosownername`, `owneridcitizion`, `kiosfulladdress`, `kiosphonenumber`, `kiossertificationnumber`, `kiosownership2`, `kiosidcitizion2`, `idfishowner`) VALUES
(1, 0x4b696f7320506172616c6c617574, 'Qiwsiw', 'dummyjkt', 'Blok A 42', '02179798181', 'KS/21/79X123', 'QiwsiwJr', 'dummyjkt', 5),
(2, 0x4b696f73204e6174756e6120536177617269, 'Paysitwung', 'dummytng', 'Blok C 30', '02189897171', 'KS/23/127F999', 'PaysitwungJr', 'dummytng', 4),
(3, 0x4b696f732050727573696173, 'Chandra', 'dummyjog', 'Blok Z 32', '02112123131', 'KS/35/714C145', 'Bimo', 'dummyjog', 12),
(4, 0x4b696f73205a6162, 'Zabar', 'dummyBali', 'Blok Z 31', '021123123123', 'KS/23/7FH1234', 'Rews', 'Dummy Papua', 17),
(5, 0x4b696f73204b4b4b, 'Rezky', '31709080812', 'Blok R 15', '085151512121', 'KS/54/1828JF51', 'Pro', '31780801212', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tfishmembersecuritycode`
--

CREATE TABLE `tfishmembersecuritycode` (
  `idfishkios` int(11) NOT NULL DEFAULT 0,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '0',
  `protectquestion1` varchar(255) NOT NULL,
  `answerquestion1` varchar(255) NOT NULL,
  `protectquestion2` varchar(255) NOT NULL,
  `answerquestion2` varchar(255) NOT NULL,
  `tnote` varchar(50) NOT NULL,
  `tflag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tfishmembersecuritycode`
--

INSERT INTO `tfishmembersecuritycode` (`idfishkios`, `username`, `password`, `protectquestion1`, `answerquestion1`, `protectquestion2`, `answerquestion2`, `tnote`, `tflag`) VALUES
(1, '', '0', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tfishmembershiplogin`
--

CREATE TABLE `tfishmembershiplogin` (
  `idfishkios` int(11) NOT NULL DEFAULT 0,
  `dateoflogin` datetime NOT NULL,
  `kiostryusername` varchar(10) NOT NULL DEFAULT '',
  `typeloginsuccess` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tfishpriceofproductitems`
--

CREATE TABLE `tfishpriceofproductitems` (
  `idfishkios` int(11) NOT NULL DEFAULT 0,
  `fishkodeofproductsale` varchar(50) NOT NULL,
  `fishgenericproductname` varchar(50) NOT NULL DEFAULT '',
  `fishregularprice` int(20) NOT NULL,
  `fishquantity` float NOT NULL DEFAULT 0,
  `fishopendateofproductPrice` date NOT NULL,
  `fishflagofproduct` int(11) NOT NULL,
  `fishnoteofproduct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tfishpriceofproductitems`
--

INSERT INTO `tfishpriceofproductitems` (`idfishkios`, `fishkodeofproductsale`, `fishgenericproductname`, `fishregularprice`, `fishquantity`, `fishopendateofproductPrice`, `fishflagofproduct`, `fishnoteofproduct`) VALUES
(2, 'Qa-124', 'Tongkol', 22000, 1, '2019-12-04', 0, 'ini ikan tongkol'),
(1, 'Ro-010', 'Lele', 23000, 1, '2019-10-26', 0, 'ini ikan lele'),
(1, 'Ro-011', 'Betok', 10000, 1, '2019-10-27', 0, 'ini ikan betok'),
(5, 'si-029', 'Ikan Lili', 12000, 5, '2019-12-05', 0, 'ini ikan lili bukan lele'),
(3, 'te-105', 'Blue Marlin', 205000, 5, '2019-12-05', 0, 'Ikan Blue Marlin'),
(3, 'te-213', 'jrx', 111, 1, '2019-11-18', 0, '1'),
(3, 'te-239', 'Sardines', 80000, 3, '2019-12-05', 0, ''),
(3, 'te-425', 'Ikan coba', 1000, 1, '2019-11-18', 0, 'coba ikan'),
(3, 'te-631', 'Ikan Fish 2', 99999997, 78, '2019-11-18', 0, 'Phewwwwww'),
(3, 'te-834', 'Salmon', 350000, 10, '2019-12-05', 0, ''),
(2, 'zx', 'Ikan Hiu', 90000, 5, '2019-11-25', 0, 'ini ikan ');

-- --------------------------------------------------------

--
-- Table structure for table `tfishsaleofproductitems`
--

CREATE TABLE `tfishsaleofproductitems` (
  `idtransaksi` varchar(50) NOT NULL DEFAULT 'NULL',
  `idfishkios` int(11) NOT NULL DEFAULT 0,
  `fishkodeofproductsale` varchar(50) NOT NULL DEFAULT '',
  `fishgenericproductname` varchar(50) NOT NULL DEFAULT '',
  `fishregularprice` int(20) NOT NULL,
  `fishquantity` int(20) NOT NULL,
  `fishsubtotal` int(50) NOT NULL,
  `idcustomer` int(11) NOT NULL DEFAULT 0,
  `flagCancel` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tfishsaleofproductitems`
--

INSERT INTO `tfishsaleofproductitems` (`idtransaksi`, `idfishkios`, `fishkodeofproductsale`, `fishgenericproductname`, `fishregularprice`, `fishquantity`, `fishsubtotal`, `idcustomer`, `flagCancel`) VALUES
('NULL', 1, 'Qa-333', 'Ikan Lele', 23000, 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tfishsaleofproductmaster`
--

CREATE TABLE `tfishsaleofproductmaster` (
  `idfishkios` varchar(5) NOT NULL,
  `dateofTransaction` date NOT NULL,
  `idcustomer` varchar(5) NOT NULL,
  `TotalPrice` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tfishselerregister`
--

CREATE TABLE `tfishselerregister` (
  `idfishowner` int(11) NOT NULL,
  `fishownerdateJoin` datetime DEFAULT NULL,
  `fishowneremail` varchar(50) NOT NULL DEFAULT '',
  `fishownerfullname` varchar(50) NOT NULL DEFAULT '',
  `fishownerusername` varchar(10) NOT NULL DEFAULT '',
  `fishownerpassword` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tfishselerregister`
--

INSERT INTO `tfishselerregister` (`idfishowner`, `fishownerdateJoin`, `fishowneremail`, `fishownerfullname`, `fishownerusername`, `fishownerpassword`) VALUES
(4, '2019-10-26 14:22:39', 'mella@gmail.com', 'Mella', 'selmella', 'd455686c3e9d427446a2adc7b62f3a26'),
(5, '2019-10-26 09:33:28', 'rusmania@gmail.com', 'rusmania', 'rusmania', 'rusmania'),
(12, '2019-10-26 11:28:35', 'testing@gmail.com', 'Testing Lengkap', 'testing', 'ae2b1fca515949e5d54fb22b8ed95575'),
(15, '2019-11-16 08:35:18', 'aa@gmail.com', 'fullnameas', 'a', '0cc175b9c0f1b6a831c399e269772661'),
(17, '2019-11-25 10:06:38', 'zxc@gmail.com', 'Name of ZXC', 'zxc', '5fa72358f0b4fb4f2c5d7de8c9a41846'),
(18, '2019-12-05 10:48:58', 'sib@gmail.com', 'mr b', 'sib', 'a444633d8cf456eeca3138c78f4ae12e');

-- --------------------------------------------------------

--
-- Table structure for table `ttransactions`
--

CREATE TABLE `ttransactions` (
  `idtransaksi` varchar(50) DEFAULT NULL,
  `idcustomer` varchar(50) DEFAULT NULL,
  `idfishowner` varchar(50) DEFAULT NULL,
  `namacustomer` varchar(50) DEFAULT NULL,
  `namaproduct` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL,
  `totalharga` int(11) DEFAULT NULL,
  `shippingname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttransactions`
--

INSERT INTO `ttransactions` (`idtransaksi`, `idcustomer`, `idfishowner`, `namacustomer`, `namaproduct`, `quantity`, `harga`, `subtotal`, `shipping`, `totalharga`, `shippingname`) VALUES
('trx-333', '15', NULL, 'jrx', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-333', '15', NULL, 'jrx', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-333', '15', NULL, 'jrx', '', 1, 0, 134000, 15000, 149000, NULL),
('trx-333', '15', NULL, 'jrx', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
(NULL, '15', NULL, 'jrx', 'Ikan Fish 2', 1, 99999997, 99999997, 15000, 100014997, NULL),
(NULL, '15', NULL, 'jrx', 'Ikan Fish 2', 1, 99999997, 99999997, 15000, 100014997, NULL),
('trx-333', '15', NULL, 'jrx', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-333', '15', NULL, 'jrx', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-333', '15', NULL, 'jrx', '', 1, 0, 134000, 15000, 149000, NULL),
('trx-333', '15', NULL, 'jrx', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
(NULL, '15', NULL, 'jrx', 'Ikan Fish 2', 1, 99999997, 99999997, 15000, 100014997, NULL),
(NULL, '15', NULL, 'jrx', 'Ikan Fish 2', 1, 99999997, 99999997, 15000, 100014997, NULL),
('555', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-061', '16', '12', 'testing', '', 1, 0, 111, 15000, 15111, NULL),
('trx-061', '16', '12', 'testing', 'jrx', 1, 111, 111, 15000, 15111, NULL),
('trx-310', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-310', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-593', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-074', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-074', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-376', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-163', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-054', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-078', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-038', '17', '4', 'presentasi', 'Tongkol', 1, 22000, 22000, 15000, 37000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-061', '16', '12', 'testing', '', 1, 0, 111, 15000, 15111, NULL),
('trx-061', '16', '12', 'testing', 'jrx', 1, 111, 111, 15000, 15111, NULL),
('trx-058', '16', '12', 'testing', 'Salmon', 1, 350000, 350000, 15000, 365000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-061', '16', '12', 'testing', '', 1, 0, 111, 15000, 15111, NULL),
('trx-061', '16', '12', 'testing', 'jrx', 1, 111, 111, 15000, 15111, NULL),
('trx-058', '16', '12', 'testing', 'Salmon', 1, 350000, 350000, 15000, 365000, NULL),
('trx-419', '16', '18', 'testing', 'Ikan Lili', 1, 12000, 12000, 15000, 27000, NULL),
('trx-845', '16', '5', 'testing', 'Lele', 1, 23000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Tongkol', 1, 21000, 134000, 15000, 149000, NULL),
('trx-319', '16', '4', 'testing', 'Ikan Hiu', 1, 90000, 134000, 15000, 149000, NULL),
('trx-061', '16', '12', 'testing', '', 1, 0, 111, 15000, 15111, NULL),
('trx-061', '16', '12', 'testing', 'jrx', 1, 111, 111, 15000, 15111, NULL),
('trx-058', '16', '12', 'testing', 'Salmon', 1, 350000, 350000, 15000, 365000, NULL),
('trx-419', '16', '18', 'testing', 'Ikan Lili', 1, 12000, 12000, 15000, 27000, NULL),
('trx-275', '16', '18', 'testing', 'Ikan Lili', 1, 12000, 12000, 15000, 27000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tfishkiosproductidentity`
--
ALTER TABLE `tfishkiosproductidentity`
  ADD PRIMARY KEY (`idfishkios`),
  ADD KEY `FK_tfishkiosproductidentity_tfishselerregister` (`idfishowner`);

--
-- Indexes for table `tfishmembersecuritycode`
--
ALTER TABLE `tfishmembersecuritycode`
  ADD KEY `FK_tfishmembersecuritycode_tfishkiosproductidentity` (`idfishkios`);

--
-- Indexes for table `tfishpriceofproductitems`
--
ALTER TABLE `tfishpriceofproductitems`
  ADD PRIMARY KEY (`fishkodeofproductsale`),
  ADD KEY `FK_tfishpriceofproductitems_tfishkiosproductidentity` (`idfishkios`),
  ADD KEY `fishgenericproductname` (`fishgenericproductname`),
  ADD KEY `fishregularprice` (`fishregularprice`);

--
-- Indexes for table `tfishsaleofproductitems`
--
ALTER TABLE `tfishsaleofproductitems`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `FK_tfishsaleofproductitems_tfishkiosproductidentity` (`idfishkios`),
  ADD KEY `FK_tfishsaleofproductitems_tfishpriceofproductitems` (`fishkodeofproductsale`),
  ADD KEY `FK_tfishsaleofproductitems_tfishpriceofproductitems_2` (`fishgenericproductname`),
  ADD KEY `FK_tfishsaleofproductitems_tfishpriceofproductitems_3` (`fishregularprice`),
  ADD KEY `FK5` (`idcustomer`);

--
-- Indexes for table `tfishselerregister`
--
ALTER TABLE `tfishselerregister`
  ADD PRIMARY KEY (`idfishowner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tfishkiosproductidentity`
--
ALTER TABLE `tfishkiosproductidentity`
  MODIFY `idfishkios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tfishselerregister`
--
ALTER TABLE `tfishselerregister`
  MODIFY `idfishowner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tfishkiosproductidentity`
--
ALTER TABLE `tfishkiosproductidentity`
  ADD CONSTRAINT `FK_tfishkiosproductidentity_tfishselerregister` FOREIGN KEY (`idfishowner`) REFERENCES `tfishselerregister` (`idfishowner`);

--
-- Constraints for table `tfishmembersecuritycode`
--
ALTER TABLE `tfishmembersecuritycode`
  ADD CONSTRAINT `FK_tfishmembersecuritycode_tfishkiosproductidentity` FOREIGN KEY (`idfishkios`) REFERENCES `tfishkiosproductidentity` (`idfishkios`);

--
-- Constraints for table `tfishsaleofproductitems`
--
ALTER TABLE `tfishsaleofproductitems`
  ADD CONSTRAINT `FK_tfishsaleofproductitems_tfishkiosproductidentity` FOREIGN KEY (`idfishkios`) REFERENCES `tfishkiosproductidentity` (`idfishkios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
