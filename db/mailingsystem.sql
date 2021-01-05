-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 16, 2020 at 02:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mailingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateCreated` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `firstName`, `lastName`, `email`, `password`, `dateCreated`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblassignedmailcourier`
--

DROP TABLE IF EXISTS `tblassignedmailcourier`;
CREATE TABLE IF NOT EXISTS `tblassignedmailcourier` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `courierId` varchar(10) NOT NULL,
  `mailId` varchar(10) NOT NULL,
  `dateAssigned` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblassignedmailcourier`
--

INSERT INTO `tblassignedmailcourier` (`Id`, `courierId`, `mailId`, `dateAssigned`) VALUES
(6, '1', '4', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `tblcouriers`
--

DROP TABLE IF EXISTS `tblcouriers`;
CREATE TABLE IF NOT EXISTS `tblcouriers` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `isAvailable` varchar(10) NOT NULL,
  `dateCreated` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcouriers`
--

INSERT INTO `tblcouriers` (`Id`, `firstName`, `lastName`, `emailAddress`, `phoneNo`, `homeAddress`, `isAvailable`, `dateCreated`) VALUES
(1, 'Samuel', 'Adeyemi', 'SamuelAdeyemi@gmail.com', '09089890099', '23, Banana streets', '0', '2020-10-06'),
(2, 'Courier1', 'Courier1', 'Courier1@yahoo.com', '09898008800', '21, Ajanlekoko avenue', '0', '2020-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomerpostaladdress`
--

DROP TABLE IF EXISTS `tblcustomerpostaladdress`;
CREATE TABLE IF NOT EXISTS `tblcustomerpostaladdress` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `customerId` int(10) NOT NULL,
  `postalAddress` text NOT NULL,
  `dateCreated` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomerpostaladdress`
--

INSERT INTO `tblcustomerpostaladdress` (`Id`, `customerId`, `postalAddress`, `dateCreated`) VALUES
(1, 1, '<p>Mr, John Smith</p><p>132, My Street,</p><p>Brighton BG234YZ</p><p>England<br></p>', '2020-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomerrecipients`
--

DROP TABLE IF EXISTS `tblcustomerrecipients`;
CREATE TABLE IF NOT EXISTS `tblcustomerrecipients` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `customerId` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `postalAddress` text NOT NULL,
  `dateCreated` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomerrecipients`
--

INSERT INTO `tblcustomerrecipients` (`Id`, `customerId`, `firstName`, `lastName`, `phoneNo`, `emailAddress`, `postalAddress`, `dateCreated`) VALUES
(1, 1, 'Samuel', 'Olayiwola', '09087989000', 'SamuelOlayiwola@yahoo.com', '<p>Samuel Olayiwola<br></p><p>132, My Street,</p><p>Brighton BG234YZ</p>England', '2020-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

DROP TABLE IF EXISTS `tblcustomers`;
CREATE TABLE IF NOT EXISTS `tblcustomers` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `otherName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `dateCreated` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`Id`, `firstName`, `lastName`, `otherName`, `email`, `password`, `phoneNo`, `homeAddress`, `dateCreated`) VALUES
(1, 'Sodiq', 'Ahmed', 'Ola', 'Ahmedsodiq7@gmail.com', '12345', '', '', ''),
(2, 'Sadiq', 'Ahmed', 'Kay', 'Ahmedsodiq77@gmail.com', '12345', '', '', '2020-09-28'),
(3, 'Jayeiola', 'Kuti', 'Olaoluwa', 'JaiyeKuti111@gmail.com', '12345', '09087776678', '21, Bakare Adanla street', '2020-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `tblitemtype`
--

DROP TABLE IF EXISTS `tblitemtype`;
CREATE TABLE IF NOT EXISTS `tblitemtype` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `itemTypeName` varchar(255) NOT NULL,
  `dateCreated` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitemtype`
--

INSERT INTO `tblitemtype` (`Id`, `itemTypeName`, `dateCreated`) VALUES
(1, 'Fragile', ''),
(2, 'Non-Fragile', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblmailpackagecategory`
--

DROP TABLE IF EXISTS `tblmailpackagecategory`;
CREATE TABLE IF NOT EXISTS `tblmailpackagecategory` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `packageId` int(10) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` varchar(255) NOT NULL,
  `estimatedDeliveryPeriod` text NOT NULL,
  `categoryPrice` varchar(20) NOT NULL,
  `dateAdded` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmailpackagecategory`
--

INSERT INTO `tblmailpackagecategory` (`Id`, `packageId`, `categoryName`, `categoryDescription`, `estimatedDeliveryPeriod`, `categoryPrice`, `dateAdded`) VALUES
(1, 1, 'single piece envelopes', 'an affordable mail service for standard-sized, single-piece envelopes weighing up to 3.5 oz and large envelopes and small packages weighing up to 13 oz with delivery in 3 business days or less. ', 'Mail in 1â€“3 Business Days', '50', '2020-10-03'),
(2, 3, 'Books (at least 8 pages)', 'Books (at least 8 pages)', '2â€“8 Business Days', '1000', '2020-10-05'),
(3, 3, '16-millimeter or narrower width films', '16-millimeter or narrower width films', '2â€“8 Business Days', '2000', '2020-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `tblmailpackages`
--

DROP TABLE IF EXISTS `tblmailpackages`;
CREATE TABLE IF NOT EXISTS `tblmailpackages` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `packageName` varchar(255) NOT NULL,
  `packageDescription` varchar(255) NOT NULL,
  `dateAdded` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmailpackages`
--

INSERT INTO `tblmailpackages` (`Id`, `packageName`, `packageDescription`, `dateAdded`) VALUES
(1, 'First Class Maill', 'This is a first class type of mail', '2020-10-02'),
(3, 'Media Mail', 'Media Mail is a cost-effective way to send media and educational materials. This service has restrictions on the type of media that can be sent', '2020-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `tblmails`
--

DROP TABLE IF EXISTS `tblmails`;
CREATE TABLE IF NOT EXISTS `tblmails` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `customerId` varchar(10) NOT NULL,
  `mailPackageId` varchar(10) NOT NULL,
  `mailPackageCategoryId` varchar(10) NOT NULL,
  `packageSizeId` varchar(10) NOT NULL,
  `packageWeightId` varchar(10) NOT NULL,
  `postageStampId` varchar(10) NOT NULL,
  `valueOfItem` varchar(255) NOT NULL,
  `typeOfItemId` varchar(10) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `dateToBeMailed` varchar(30) NOT NULL,
  `timeToBeMailed` varchar(30) NOT NULL,
  `destinationCountry` varchar(255) NOT NULL,
  `destinationRegion` varchar(255) NOT NULL,
  `destinationZipCode` varchar(255) NOT NULL,
  `recipientsId` varchar(10) NOT NULL,
  `totalPostagePrice` varchar(20) NOT NULL,
  `isApproved` varchar(10) NOT NULL,
  `isVerified` varchar(10) NOT NULL,
  `isPickedUp` varchar(10) NOT NULL,
  `deliveryStatus` varchar(10) NOT NULL,
  `dateAdded` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmails`
--

INSERT INTO `tblmails` (`Id`, `customerId`, `mailPackageId`, `mailPackageCategoryId`, `packageSizeId`, `packageWeightId`, `postageStampId`, `valueOfItem`, `typeOfItemId`, `quantity`, `dateToBeMailed`, `timeToBeMailed`, `destinationCountry`, `destinationRegion`, `destinationZipCode`, `recipientsId`, `totalPostagePrice`, `isApproved`, `isVerified`, `isPickedUp`, `deliveryStatus`, `dateAdded`) VALUES
(4, '1', '1', '1', '1', '1', '1', '12000', '1', '1', '2020-10-29', '01:43', 'Afghanistan', 'Herat', '234', '1', '320', '1', '1', '1', '1', '2020-10-06'),
(3, '1', '1', '1', '1', '1', '1', '12000', '1', '1', '2020-10-29', '01:43', 'Afghanistan', 'Herat', '234', '1', '320', '0', '0', '0', '0', '2020-10-06'),
(5, '1', '3', '2', '1', '1', '2', '800000', '1', '2', '2020-11-03', '11:30', 'Nigeria', 'Lagos', '234', '1', '2940', '0', '0', '0', '0', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `tblpackagesize`
--

DROP TABLE IF EXISTS `tblpackagesize`;
CREATE TABLE IF NOT EXISTS `tblpackagesize` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `sizeFrom` varchar(20) NOT NULL,
  `sizeTo` varchar(20) NOT NULL,
  `sizePrice` varchar(20) NOT NULL,
  `dateAdded` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpackagesize`
--

INSERT INTO `tblpackagesize` (`Id`, `sizeFrom`, `sizeTo`, `sizePrice`, `dateAdded`) VALUES
(1, '5', '10', '50', '2020-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `tblpackageweight`
--

DROP TABLE IF EXISTS `tblpackageweight`;
CREATE TABLE IF NOT EXISTS `tblpackageweight` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `weightFrom` varchar(20) NOT NULL,
  `weightTo` varchar(20) NOT NULL,
  `weightPrice` varchar(20) NOT NULL,
  `dateAdded` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpackageweight`
--

INSERT INTO `tblpackageweight` (`Id`, `weightFrom`, `weightTo`, `weightPrice`, `dateAdded`) VALUES
(1, '1', '5', '20', '2020-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `tblpostagestamps`
--

DROP TABLE IF EXISTS `tblpostagestamps`;
CREATE TABLE IF NOT EXISTS `tblpostagestamps` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `stampName` varchar(255) NOT NULL,
  `stampDescription` varchar(255) NOT NULL,
  `stampPrice` varchar(20) NOT NULL,
  `dateAdded` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpostagestamps`
--

INSERT INTO `tblpostagestamps` (`Id`, `stampName`, `stampDescription`, `stampPrice`, `dateAdded`) VALUES
(1, 'Stamp1', 'Stamp1', '200', '2020-10-06'),
(2, 'Stamp2', 'Stamp2', '400', '2020-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbltracking`
--

DROP TABLE IF EXISTS `tbltracking`;
CREATE TABLE IF NOT EXISTS `tbltracking` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `customerId` varchar(10) NOT NULL,
  `mailId` varchar(10) NOT NULL,
  `trackingId` varchar(10) NOT NULL,
  `dateCreated` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
