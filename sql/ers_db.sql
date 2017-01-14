-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2017 at 01:16 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ers_db`
--
CREATE DATABASE IF NOT EXISTS `ers_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ers_db`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` char(11) NOT NULL,
  `pword` char(32) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`row_id`, `user_id`, `pword`, `user_type`) VALUES
(1, '09-1319-51', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_info`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_info` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` char(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adrs` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(100) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin_info`
--

INSERT INTO `tbl_admin_info` (`row_id`, `user_id`, `fname`, `mname`, `lname`, `email`, `adrs`, `city`, `province`) VALUES
(1, '09-1319-51', 'Ray', 'Rosal', 'Centeno', 'ray.centeno@gmail.com', 'Address ni Sir. Ray Centeno', 'City of San Pedro', 'Laguna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pymnt_schm`
--

CREATE TABLE IF NOT EXISTS `tbl_pymnt_schm` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme_name` varchar(50) NOT NULL,
  `scheme_code` char(12) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schlyear`
--

CREATE TABLE IF NOT EXISTS `tbl_schlyear` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_yr` char(10) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_schlyear`
--

INSERT INTO `tbl_schlyear` (`row_id`, `school_yr`) VALUES
(1, '2016-2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE IF NOT EXISTS `tbl_semester` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(20) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`row_id`, `semester`) VALUES
(1, '2nd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
