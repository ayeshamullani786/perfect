-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 01:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect`
--

-- --------------------------------------------------------

--
-- Table structure for table `customermaster`
--

CREATE TABLE `customermaster` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `birthDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdBy` int(11) NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `branchId` varchar(10) NOT NULL,
  `companyId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `birthDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdBy` int(11) NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `branchId` varchar(10) NOT NULL,
  `companyId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `pantmeasurement`
--

CREATE TABLE `pantmeasurement` (
  `id` int(11) NOT NULL,
  `custId` int(11) DEFAULT NULL,
  `kambarMeasure` varchar(10) DEFAULT NULL,
  `tangadhMeasure` varchar(10) DEFAULT NULL,
  `pantsitMeasure` varchar(10) DEFAULT NULL,
  `heightMeasure` varchar(10) DEFAULT NULL,
  `bottomMeasure` varchar(10) DEFAULT NULL,
  `kneeMeasure` varchar(10) DEFAULT NULL,
  `thaiMeasure` varchar(10) DEFAULT NULL,
  `pantPatternDescription` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `shirtmeasurement`
--

CREATE TABLE `shirtmeasurement` (
  `id` int(11) NOT NULL,
  `custId` int(11) DEFAULT NULL,
  `cheastMeasure` varchar(10) DEFAULT NULL,
  `stomatchMeasure` varchar(10) DEFAULT NULL,
  `shirtsitMeasure` varchar(10) DEFAULT NULL,
  `sholderMeasure` varchar(10) DEFAULT NULL,
  `handMeasure` varchar(10) DEFAULT NULL,
  `heightMeasure` varchar(10) DEFAULT NULL,
  `colarMeasure` varchar(10) DEFAULT NULL,
  `cupMeasure` varchar(10) DEFAULT NULL,
  `shirtPatternDescription` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `accessLevel` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `branchId` varchar(10) NOT NULL,
  `companyId` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_username`, `firstname`, `lastname`, `user_password`, `eMail`, `mobileNo`, `accessLevel`, `createdDate`, `modifiedDate`, `branchId`, `companyId`, `address`) VALUES
(1, 'admin1', 'Alam', 'Mujawar', 'admin1', '', '9011374237', 1, '2017-07-24 00:00:00', '0000-00-00 00:00:00', 'bId_1', 'cmpId_1', 'Laxmi Road, Kolhapur'),
(2, 'admin2', 'xyz', 'abc', 'admin2', '', '9970652770', 2, '2017-07-24 00:00:00', '0000-00-00 00:00:00', 'bId_2', 'cmpId_2', 'Shivnari Apartment, Tarabai Park, Kolahpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customermaster`
--
ALTER TABLE `customermaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pantmeasurement`
--
ALTER TABLE `pantmeasurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirtmeasurement`
--
ALTER TABLE `shirtmeasurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customermaster`
--
ALTER TABLE `customermaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pantmeasurement`
--
ALTER TABLE `pantmeasurement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shirtmeasurement`
--
ALTER TABLE `shirtmeasurement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
