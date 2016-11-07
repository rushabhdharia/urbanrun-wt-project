-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 02:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register1`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `jobId` bigint(20) NOT NULL AUTO_INCREMENT,
  `empId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `job_details` varchar(50) NOT NULL,
  `job_time` time NOT NULL,
  `job_date` date NOT NULL,
  `date_to` int(11) NOT NULL,
  `time_to` int(11) NOT NULL,
  PRIMARY KEY (`jobId`),
  KEY `empId` (`empId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE IF NOT EXISTS `tbl_emp` (
  `empId` int(11) NOT NULL AUTO_INCREMENT,
  `empEmail` varchar(60) NOT NULL,
  `empPassword` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `skills` varchar(250) NOT NULL,
  `costph` int(11) NOT NULL,
  `ratings` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`empId`),
  UNIQUE KEY `empEmail` (`empEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(60) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;


--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`empId`) REFERENCES `tbl_emp` (`empId`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
