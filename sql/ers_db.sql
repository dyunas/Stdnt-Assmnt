-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 05:09 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`row_id`, `user_id`, `pword`, `user_type`) VALUES
(1, '09-1319-51', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin'),
(2, '09-1319-61', '5f4dcc3b5aa765d61d8327deb882cf99', 'Cashier'),
(3, '09-1319-71', '5f4dcc3b5aa765d61d8327deb882cf99', 'Registrar');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin_info`
--

INSERT INTO `tbl_admin_info` (`row_id`, `user_id`, `fname`, `mname`, `lname`, `email`, `adrs`, `city`, `province`) VALUES
(1, '09-1319-51', 'Ray', 'Rosal', 'Centeno', 'ray.centeno@gmail.com', 'Address ni Sir. Ray Centeno', 'City of San Pedro', 'Laguna'),
(2, '09-1319-61', 'Alaiza ', 'Cascabel', 'Baider', 'alaizacascabelbaider@gmail.com', 'St. Joseph 1', 'San Pedro', 'Laguna'),
(3, '09-1319-71', 'Darwin', '', 'Biboso', 'darwin.biboso@gmail.com', 'City of Biñan, Laguna', 'City of Biñan', 'Laguna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `course_code` char(15) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`row_id`, `course_name`, `course_code`, `status`) VALUES
(1, 'Bachelors of Science in Information Technology', 'BSIT', 'Available'),
(2, 'Bachelors of Science in Office Administration', 'BSOA', 'Available'),
(3, 'Associate in Computer Technology', 'ACT', 'Available'),
(4, 'Bachelor of Science in Entrepreneurial ', 'BSEn', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fees`
--

CREATE TABLE IF NOT EXISTS `tbl_fees` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `fee_name` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_fees`
--

INSERT INTO `tbl_fees` (`row_id`, `fee_name`, `status`, `amount`) VALUES
(1, 'Tuition Fee', 'Enabled', 400),
(2, 'Computer Lab', 'Enabled', 1500),
(3, 'Science Lab', 'Enabled', 1500),
(4, 'PE Uniform', 'Enabled', 600),
(5, 'NSTP', 'Enabled', 700),
(6, 'ID', 'Enabled', 150),
(7, 'Thesis Defense', 'Enabled', 400),
(8, 'Team Building', 'Enabled', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pymnt_schm`
--

CREATE TABLE IF NOT EXISTS `tbl_pymnt_schm` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme_name` varchar(50) NOT NULL,
  `scheme_code` char(12) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_pymnt_schm`
--

INSERT INTO `tbl_pymnt_schm` (`row_id`, `scheme_name`, `scheme_code`, `status`) VALUES
(1, 'Cash Payment', 'CSHPYMNT', 'Enabled'),
(2, 'Monthly Payment', 'MNTHLY', 'Enabled'),
(3, 'Installment Payment', 'INSTLMNT', 'Enabled');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_asmnt_info`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_asmnt_info` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_course` char(20) NOT NULL,
  `stud_year` varchar(20) NOT NULL,
  `stud_sem` varchar(20) NOT NULL,
  `fee_name` varchar(50) NOT NULL,
  `fee_amount` float NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_stud_asmnt_info`
--

INSERT INTO `tbl_stud_asmnt_info` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `fee_name`, `fee_amount`) VALUES
(1, '17-0003-42', 'BSOA', '3', '2nd Sem.', 'Tuition Fee', 4000),
(2, '17-0003-42', 'BSOA', '3', '2nd Sem.', 'Thesis Defense', 400),
(3, '17-0003-42', 'BSOA', '3', '2nd Sem.', 'Team Building', 2500),
(4, '17-0003-42', 'ACT', '1', '2nd Sem.', 'Computer Lab', 1500),
(5, '17-0003-42', 'ACT', '1', '2nd Sem.', 'Science Lab', 1500),
(6, '17-0003-42', 'ACT', '1', '2nd Sem.', 'PE Uniform', 600),
(7, '17-0003-42', 'ACT', '1', '2nd Sem.', 'NSTP', 700),
(8, '17-0003-42', 'ACT', '1', '2nd Sem.', 'ID', 150),
(9, '17-0003-42', 'ACT', '1', '2nd Sem.', 'Team Building', 2500),
(10, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'Tuition Fee', 9600),
(11, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'Computer Lab', 1500),
(12, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'Science Lab', 1500),
(13, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'PE Uniform', 600),
(14, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'NSTP', 700),
(15, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'ID', 150),
(16, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'Thesis Defense', 400),
(17, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'Team Building', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_discount_info`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_discount_info` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_course` char(20) NOT NULL,
  `stud_year` int(11) NOT NULL,
  `stud_sem` char(20) NOT NULL,
  `discount_fee` double NOT NULL,
  `discount_prcnt` int(3) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_stud_discount_info`
--

INSERT INTO `tbl_stud_discount_info` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `discount_fee`, `discount_prcnt`) VALUES
(1, '17-0003-42', 'BSOA', 3, '2nd Sem.', 0, 0),
(2, '17-0004-12', 'BSEn', 1, '2nd Sem.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_gdn_info`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_gdn_info` (
  `stud_gdn_row` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_gdn_name` varchar(150) NOT NULL,
  `stud_gdn_cnum` bigint(13) NOT NULL,
  `stud_gdn_tnum` char(13) NOT NULL,
  `stud_gdn_addr_ln1` text NOT NULL,
  `stud_gdn_addr_ln2` varchar(50) NOT NULL,
  `stud_gdn_addr_ln3` varchar(50) NOT NULL,
  `stud_gdn_addr_ln4` int(6) NOT NULL,
  PRIMARY KEY (`stud_gdn_row`),
  UNIQUE KEY `stud_id` (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_stud_gdn_info`
--

INSERT INTO `tbl_stud_gdn_info` (`stud_gdn_row`, `stud_id`, `stud_gdn_name`, `stud_gdn_cnum`, `stud_gdn_tnum`, `stud_gdn_addr_ln1`, `stud_gdn_addr_ln2`, `stud_gdn_addr_ln3`, `stud_gdn_addr_ln4`) VALUES
(1, '17-0001-32', 'Quebral, Amelia Almodiel', 9229498026, 'N/A', 'Phase 3b Block 9 Lot 32, Olympic Drive, Pacita 1, Brgy. San Francisco', 'City of Biñan', 'Laguna', 4024),
(2, '17-0002-12', 'Dela Cruz, Juana', 9229498026, 'n/a', 'Phase 3b Block 9 Lot 32, Olympic Drive, Pacita 1, Brgy. San Francisco', 'City of Biñan', 'Laguna', 4024),
(3, '17-0003-42', 'Baider, Alexis Jr', 9123456789, '8282199', 'San Pedro', 'San Pedro', 'Laguna', 4023),
(4, '17-0004-12', 'Aldea, Rudy Vega', 9971245677, 'n/a', 'San Pedro', 'San Pedro', 'Laguna', 2324);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_info`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_info` (
  `stud_row` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(10) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `stud_status` char(50) NOT NULL,
  `stud_course` varchar(100) NOT NULL,
  `stud_year` char(10) NOT NULL,
  `stud_sem` varchar(20) NOT NULL,
  `stud_email` varchar(150) NOT NULL,
  `stud_bdate` char(11) NOT NULL,
  `stud_cnum` bigint(13) NOT NULL,
  `stud_tnum` char(13) NOT NULL,
  `stud_gender` char(6) NOT NULL,
  `stud_addr_ln1` text NOT NULL,
  `stud_addr_ln2` text NOT NULL,
  `stud_addr_ln3` varchar(50) NOT NULL,
  `stud_addr_ln4` int(11) NOT NULL,
  PRIMARY KEY (`stud_row`),
  UNIQUE KEY `stud_id` (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_stud_info`
--

INSERT INTO `tbl_stud_info` (`stud_row`, `stud_id`, `stud_name`, `stud_status`, `stud_course`, `stud_year`, `stud_sem`, `stud_email`, `stud_bdate`, `stud_cnum`, `stud_tnum`, `stud_gender`, `stud_addr_ln1`, `stud_addr_ln2`, `stud_addr_ln3`, `stud_addr_ln4`) VALUES
(1, '17-0001-32', 'Quebral, Jonathan Almodiel', 'floating', 'BSIT', '4', '2nd Sem.', 'jonathan.almodiel.quebral@gmail.com', '06/27/1992', 9155701176, 'N/A', 'Male', 'Phase 3b Block 9 Lot 32, Olympic Drive, Pacita 1, Brgy. San Francisco', 'City of Biñan', 'Laguna', 4024),
(2, '17-0002-12', 'Dela Cruz, Juan', 'floating', 'BSIT', '2', '2nd Sem.', 'juan.delacruz@gmail.com', '06/27/1992', 9155701176, 'n/a', 'Male', 'Phase 3b Block 9 Lot 32, Olympic Drive, Pacita 1, Brgy. San Francisco', 'City of Biñan', 'Laguna', 4024),
(3, '17-0003-42', 'Baider, Alaiza Cascabel', 'floating', 'ACT', '1', '2nd Sem.', 'alaizacascabelbaider@gmailcom', '11/29/1995', 9757481713, '8282199', 'Female', 'Saint Joseph 1, Brgy San Vicente', 'San Pedro', 'Laguna', 4023),
(4, '17-0004-12', 'Aldea, Joel Cabaya', 'Enrolled', 'BSEn', '1', '2nd Sem.', 'joelaldea17@gmail.com', '12/29/1994', 9056725120, 'n/a', 'Male', 'San Pedro', 'San Pedro', 'Laguna', 2324);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_pybles_csh`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_pybles_csh` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_year` char(20) NOT NULL,
  `stud_sem` char(20) NOT NULL,
  `stud_schm` char(20) NOT NULL,
  `rsrvtn_fee` float NOT NULL,
  `upon_fee` float NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_pybles_inst`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_pybles_inst` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_course` char(20) NOT NULL,
  `stud_year` char(20) NOT NULL,
  `stud_sem` char(20) NOT NULL,
  `stud_schm` char(20) NOT NULL,
  `rsrvtn_fee` float NOT NULL,
  `upon_fee` float NOT NULL,
  `prelim_fee` float NOT NULL,
  `midterm_fee` float NOT NULL,
  `finals_fee` float NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_stud_pybles_inst`
--

INSERT INTO `tbl_stud_pybles_inst` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `stud_schm`, `rsrvtn_fee`, `upon_fee`, `prelim_fee`, `midterm_fee`, `finals_fee`) VALUES
(1, '17-0003-42', 'BSOA', '3', '2nd Sem.', 'INSTLMNT', 0, 1500, 1800, 1800, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_pybles_mnth`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_pybles_mnth` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_course` char(20) NOT NULL,
  `stud_year` char(20) NOT NULL,
  `stud_sem` char(20) NOT NULL,
  `stud_schm` char(20) NOT NULL,
  `pymnt_for` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_stud_pybles_mnth`
--

INSERT INTO `tbl_stud_pybles_mnth` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `stud_schm`, `pymnt_for`, `amount`) VALUES
(1, '17-0003-42', 'ACT', '1', '2nd Sem.', 'MNTHLY', '1500', 1500),
(2, '17-0003-42', 'ACT', '1', '2nd Sem.', 'MNTHLY', 'November', 742.5),
(3, '17-0003-42', 'ACT', '1', '2nd Sem.', 'MNTHLY', 'December', 742.5),
(4, '17-0003-42', 'ACT', '1', '2nd Sem.', 'MNTHLY', 'January', 742.5),
(5, '17-0003-42', 'ACT', '1', '2nd Sem.', 'MNTHLY', 'February', 742.5),
(6, '17-0003-42', 'ACT', '1', '2nd Sem.', 'MNTHLY', 'Finals', 742.5),
(7, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', 'upon', 1500),
(8, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', 'November', 3090),
(9, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', 'December', 3090),
(10, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', 'January', 3090),
(11, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', 'February', 3090),
(12, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', 'Finals', 3090);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_pymnt_schm`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_pymnt_schm` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_course` varchar(50) NOT NULL,
  `stud_year` char(20) NOT NULL,
  `stud_sem` char(20) NOT NULL,
  `stud_pymnt_schm` char(20) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_stud_pymnt_schm`
--

INSERT INTO `tbl_stud_pymnt_schm` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `stud_pymnt_schm`) VALUES
(1, '17-0003-42', 'BSOA', '3', '2nd Sem.', 'INSTLMNT'),
(2, '17-0003-42', 'ACT', '1', '2nd Sem.', 'MNTHLY'),
(3, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_units`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_units` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(32) NOT NULL,
  `units` int(11) NOT NULL,
  `stud_course` char(20) NOT NULL,
  `stud_year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_stud_units`
--

INSERT INTO `tbl_stud_units` (`row_id`, `stud_id`, `units`, `stud_course`, `stud_year`, `semester`) VALUES
(1, '17-0003-42', 10, 'BSOA', '3', '2nd Sem.'),
(2, '17-0004-12', 24, 'BSEn', '1', '2nd Sem.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE IF NOT EXISTS `tbl_transactions` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_course` char(10) NOT NULL,
  `stud_year` char(10) NOT NULL,
  `stud_semester` char(10) NOT NULL,
  `pymnt_scheme` char(20) NOT NULL,
  `trans_date` date NOT NULL,
  `trans_name` varchar(20) NOT NULL,
  `trans_amount` float NOT NULL,
  `trans_receipt_no` char(24) NOT NULL,
  `cashier_id` char(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_semester`, `pymnt_scheme`, `trans_date`, `trans_name`, `trans_amount`, `trans_receipt_no`, `cashier_id`) VALUES
(1, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', '2017-03-11', 'upon', 500, '123456789', '09-1319-61'),
(2, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', '2017-03-11', 'upon', 1000, '123456789', '09-1319-61'),
(3, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', '2017-03-11', 'November', 500, '123456789', '09-1319-61'),
(4, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', '2017-03-11', 'November', 2590, '123456789', '09-1319-61'),
(5, '17-0004-12', 'BSEn', '1', '2nd Sem.', 'MNTHLY', '2017-03-11', 'December', 2000, '123456789', '09-1319-61');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
