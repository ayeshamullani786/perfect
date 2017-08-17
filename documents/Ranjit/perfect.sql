-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 10:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perfect`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customermaster`
--

CREATE TABLE IF NOT EXISTS `tbl_customermaster` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `companyId` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `companyId` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pantmeasurement`
--

CREATE TABLE IF NOT EXISTS `tbl_pantmeasurement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custId` int(11) DEFAULT NULL,
  `kambarMeasure` varchar(10) DEFAULT NULL,
  `tangadhMeasure` varchar(10) DEFAULT NULL,
  `pantsitMeasure` varchar(10) DEFAULT NULL,
  `heightMeasure` varchar(10) DEFAULT NULL,
  `bottomMeasure` varchar(10) DEFAULT NULL,
  `kneeMeasure` varchar(10) DEFAULT NULL,
  `thaiMeasure` varchar(10) DEFAULT NULL,
  `pantPatternDescription` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shirtmeasurement`
--

CREATE TABLE IF NOT EXISTS `tbl_shirtmeasurement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custId` int(11) DEFAULT NULL,
  `cheastMeasure` varchar(10) DEFAULT NULL,
  `stomatchMeasure` varchar(10) DEFAULT NULL,
  `shirtsitMeasure` varchar(10) DEFAULT NULL,
  `sholderMeasure` varchar(10) DEFAULT NULL,
  `handMeasure` varchar(10) DEFAULT NULL,
  `heightMeasure` varchar(10) DEFAULT NULL,
  `colarMeasure` varchar(10) DEFAULT NULL,
  `cupMeasure` varchar(10) DEFAULT NULL,
  `shirtPatternDescription` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `accessLevel` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `branchId` varchar(10) NOT NULL,
  `companyId` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
