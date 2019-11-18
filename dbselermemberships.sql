-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 08:48 AM
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
(3, 0x4b696f732050727573696173, 'Chandra', 'dummyjog', 'Blok Z 32', '02112123131', 'KS/35/714C145', 'Bimo', 'dummyjog', 12);

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
(2, 'Qa-124', 'Tongkol', 21000, 1, '2019-10-26', 0, 'ini ikan tongkol'),
(1, 'Ro-010', 'Lele', 23000, 1, '2019-10-26', 0, 'ini ikan lele'),
(1, 'Ro-011', 'Betok', 10000, 1, '2019-10-27', 0, 'ini ikan betok'),
(3, 'Te-111', 'Ikan Murah', 90000, 1, '2019-10-27', 0, 'Ikan Murah'),
(3, 'Te-555', 'Ikan Mahal', 30000, 1, '2019-10-27', 0, 'Ikan mahal');

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
(4, '2019-10-26 14:22:39', 'mella@gmail.com', 'Mella', 'selmella', 'mella'),
(5, '2019-10-26 09:33:28', 'rusmania@gmail.com', 'rusmania', 'rusmania', 'rusmania'),
(12, '2019-10-26 11:28:35', 'testing@gmail.com', 'Testing Lengkap', 'testing', 'ae2b1fca515949e5d54fb22b8ed95575');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tfishkiosproductidentity`
--
ALTER TABLE `tfishkiosproductidentity`
  MODIFY `idfishkios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tfishselerregister`
--
ALTER TABLE `tfishselerregister`
  MODIFY `idfishowner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- Constraints for table `tfishpriceofproductitems`
--
ALTER TABLE `tfishpriceofproductitems`
  ADD CONSTRAINT `FK_tfishpriceofproductitems_tfishkiosproductidentity` FOREIGN KEY (`idfishkios`) REFERENCES `tfishkiosproductidentity` (`idfishkios`);

--
-- Constraints for table `tfishsaleofproductitems`
--
ALTER TABLE `tfishsaleofproductitems`
  ADD CONSTRAINT `FK_tfishsaleofproductitems_tfishkiosproductidentity` FOREIGN KEY (`idfishkios`) REFERENCES `tfishkiosproductidentity` (`idfishkios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
