-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql100.byetcluster.com
-- Generation Time: Dec 08, 2017 at 07:14 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21175585_CoolGuyShirtCo`
--

-- --------------------------------------------------------

--
-- Table structure for table `CardInfo`
--

CREATE TABLE IF NOT EXISTS `CardInfo` (
  `CardNumber` int(16) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleInitial` varchar(1) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `SecurityNumber` int(3) NOT NULL,
  `ExpirationMonth` int(2) NOT NULL,
  `ExpirationYear` int(2) NOT NULL,
  `BillingAddressStreet` varchar(40) NOT NULL,
  `BillingAddressZipCode` int(5) NOT NULL,
  `BillingAddressState` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `OrderID` int(5) NOT NULL AUTO_INCREMENT,
  `ProductID` int(3) NOT NULL,
  `Price` int(5) NOT NULL,
  `Size` mediumblob NOT NULL,
  `Description` tinytext,
  `DateOrdered` datetime(6) NOT NULL,
  `NumberOfProductsSold` int(2) DEFAULT '1',
  `Username` char(20) DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `Name` varchar(20) NOT NULL,
  `ProductID` int(3) NOT NULL,
  `Price` int(5) NOT NULL,
  `Size` mediumblob NOT NULL,
  `Description` tinytext,
  `Picture` mediumblob,
  `DateOrdered` datetime(6) NOT NULL,
  `NumberOfProducts` int(2) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `Username` char(20) NOT NULL,
  `Address` char(40) NOT NULL,
  `State` tinytext NOT NULL,
  `Password` char(20) NOT NULL,
  `EmailAddress` tinytext NOT NULL,
  `Phone` int(10) NOT NULL,
  `ZipCode` int(5) NOT NULL,
  PRIMARY KEY (`Username`),
  FULLTEXT KEY `Username` (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Username`, `Address`, `State`, `Password`, `EmailAddress`, `Phone`, `ZipCode`) VALUES
('test', 'test', 'MO', 'test', 'test@test', 1111111111, 11111);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
