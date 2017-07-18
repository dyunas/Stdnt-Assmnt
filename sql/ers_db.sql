-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 07:36 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`row_id`, `user_id`, `pword`, `user_type`) VALUES
(1, '2017-0001', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin'),
(2, '2017-0002', '5f4dcc3b5aa765d61d8327deb882cf99', 'Cashier'),
(3, '2017-0003', '5f4dcc3b5aa765d61d8327deb882cf99', 'Registrar'),
(4, '2017-0004', '5f4dcc3b5aa765d61d8327deb882cf99', 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_info`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_info` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` char(11) NOT NULL,
  `emp_photo` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adrs` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(100) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_admin_info`
--

INSERT INTO `tbl_admin_info` (`row_id`, `user_id`, `emp_photo`, `fname`, `mname`, `lname`, `email`, `adrs`, `city`, `province`) VALUES
(1, '2017-0001', '', 'Ray', 'Rosal', 'Centeno', 'ray.centeno@gmail.com', 'Address ni Sir. Ray Centeno', 'City of San Pedro', 'Laguna'),
(2, '2017-0002', '', 'Alaiza ', 'Cascabel', 'Baider', 'alaizacascabelbaider@gmail.com', 'St. Joseph 1', 'San Pedro', 'Laguna'),
(3, '2017-0003', '', 'Darwin', '', 'Biboso', 'darwin.biboso@gmail.com', 'City of Biñan, Laguna', 'City of Biñan', 'Laguna'),
(4, '2017-0004', '66f041e16a60928b05a7e228a89c3799.jpg', 'Christian Dave', 'Aguas', 'Fernandez', 'christiandavefernandez14@yahoo.com', 'Phase 1 Block 1 Lot 20, Adelina 3, Brgy. Sto Tomas', 'City of Biñan', 'Laguna');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`row_id`, `course_name`, `course_code`, `status`) VALUES
(1, 'Bachelors of Science in Information Technology', 'BSIT', 'Available'),
(2, 'Bachelors of Science in Office Administration', 'BSOA', 'Available'),
(3, 'Associate in Computer Technology', 'ACT', 'Available'),
(4, 'Bachelor of Science in Entrepreneurial ', 'BSEn', 'Available'),
(5, 'Bachelors of Science in Computer Engineering', 'BSCoE', 'Available'),
(6, 'jhkjhgkjkhbkjh jhgjguj hgj', 'jhgvhgggg', 'Available');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
(8, 'Team Building', 'Enabled', 2500),
(9, 'ID Validation', 'Enabled', 50),
(10, 'Testing Fee', 'Enabled', 200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_payments`
--

CREATE TABLE IF NOT EXISTS `tbl_other_payments` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_date` date NOT NULL,
  `stud_id` char(11) NOT NULL,
  `stud_course` varchar(20) NOT NULL,
  `stud_year` int(11) NOT NULL,
  `stud_sem` varchar(20) NOT NULL,
  `fee_name` varchar(100) NOT NULL,
  `amount_pd` double NOT NULL,
  `receipt_no` int(11) NOT NULL,
  `cashier_id` char(11) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(1, '2017-2018');

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
(1, '1st');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_stud_asmnt_info`
--

INSERT INTO `tbl_stud_asmnt_info` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `fee_name`, `fee_amount`) VALUES
(1, '17-0001-22', 'ACT', '2', '2nd Sem.', 'Tuition Fee', 3600),
(2, '17-0001-22', 'ACT', '2', '2nd Sem.', 'Computer Lab', 1500),
(3, '17-0001-22', 'ACT', '2', '2nd Sem.', 'Thesis Defense', 400),
(4, '17-0001-22', 'ACT', '2', '2nd Sem.', 'Team Building', 2500),
(5, '17-0001-22', 'ACT', '2', '2nd Sem.', 'ID Validation', 50),
(6, '17-0001-22', 'ACT', '2', '2nd Sem.', 'Testing Fee', 200),
(7, '17-0001-22', 'ACT', '2', '2nd Sem.', 'Science Lab', 1500),
(8, '17-0001-22', 'ACT', '2', '2nd Sem.', 'ID', 150),
(9, '17-0001-22', 'ACT', '2', '2nd Sem.', 'PE Uniform', 600),
(10, '17-0001-22', 'ACT', '2', '2nd Sem.', 'NSTP', 700);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_stud_discount_info`
--

INSERT INTO `tbl_stud_discount_info` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `discount_fee`, `discount_prcnt`) VALUES
(1, '17-0001-22', 'ACT', 2, '2nd Sem.', 224, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_documents`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_documents` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_nso` varchar(5) NOT NULL,
  `stud_frm137` varchar(5) NOT NULL,
  `stud_moral` varchar(5) NOT NULL,
  `stud_tor` varchar(5) NOT NULL,
  `stud_cert_hon_dism` varchar(5) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_stud_documents`
--

INSERT INTO `tbl_stud_documents` (`row_id`, `stud_id`, `stud_nso`, `stud_frm137`, `stud_moral`, `stud_tor`, `stud_cert_hon_dism`) VALUES
(1, '17-0001-22', 'ok', 'ok', 'ok', '', ''),
(2, '17-0002-42', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_stud_gdn_info`
--

INSERT INTO `tbl_stud_gdn_info` (`stud_gdn_row`, `stud_id`, `stud_gdn_name`, `stud_gdn_cnum`, `stud_gdn_tnum`, `stud_gdn_addr_ln1`, `stud_gdn_addr_ln2`, `stud_gdn_addr_ln3`, `stud_gdn_addr_ln4`) VALUES
(1, '17-0001-22', 'Quebral, Amelia Almodiel', 9229498026, 'N/A', 'Phase 3b Block 9 Lot 32, Olympic Drive, Pacita 1, Brgy. San Francisco', 'City of Biñan', 'Laguna', 4024),
(2, '17-0002-42', 'Andrino, Jonabelle', 0, 'N/A', 'N/A', 'City of Biñan', 'Laguna', 4023);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_info`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_info` (
  `stud_row` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(10) NOT NULL,
  `stud_avatar` varchar(50) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_stud_info`
--

INSERT INTO `tbl_stud_info` (`stud_row`, `stud_id`, `stud_avatar`, `stud_name`, `stud_status`, `stud_course`, `stud_year`, `stud_sem`, `stud_email`, `stud_bdate`, `stud_cnum`, `stud_tnum`, `stud_gender`, `stud_addr_ln1`, `stud_addr_ln2`, `stud_addr_ln3`, `stud_addr_ln4`) VALUES
(1, '17-0001-22', '', 'Quebral, Jonathan Almodiel', 'Enrolled', 'ACT', '2', '2nd Sem.', 'jonathan.almodiel.quebral@gmail.com', '06/27/1992', 9566031598, 'N/A', 'Male', 'Phase 3b Block 9 Lot 32, Olympic Drive, Pacita 1, Brgy. San Francisco', 'City of Biñan', 'Laguna', 4024),
(2, '17-0002-42', '35f4a8d465e6e1edc05f3d8ab658c551.jpg', 'Andrino, Jonabelle', 'floating', 'BSIT', '4', '2nd Sem.', 'jonabelle.andrino@gmail.com', '06/27/1992', 0, 'N/A', 'Male', 'N/A', 'City of Biñan', 'Laguna', 4023);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_pybles_csh`
--

CREATE TABLE IF NOT EXISTS `tbl_stud_pybles_csh` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` char(11) NOT NULL,
  `stud_course` char(20) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_stud_pybles_inst`
--

INSERT INTO `tbl_stud_pybles_inst` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `stud_schm`, `rsrvtn_fee`, `upon_fee`, `prelim_fee`, `midterm_fee`, `finals_fee`) VALUES
(1, '17-0001-22', 'ACT', '2', '2nd Sem.', 'INSTLMNT', 0, 1500, 2095, 2095, 2095),
(2, '17-0001-22', 'ACT', '2', '2nd Sem.', 'INSTLMNT', 0, 1500, 2043.33, 2043.33, 2043.33);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_stud_pybles_mnth`
--

INSERT INTO `tbl_stud_pybles_mnth` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `stud_schm`, `pymnt_for`, `amount`) VALUES
(1, '17-0001-22', 'ACT', '2', '2nd Sem.', 'MNTHLY', 'upon', 1500),
(2, '17-0001-22', 'ACT', '2', '2nd Sem.', 'MNTHLY', 'June', 1895.2),
(3, '17-0001-22', 'ACT', '2', '2nd Sem.', 'MNTHLY', 'July', 1895.2),
(4, '17-0001-22', 'ACT', '2', '2nd Sem.', 'MNTHLY', 'August', 1895.2),
(5, '17-0001-22', 'ACT', '2', '2nd Sem.', 'MNTHLY', 'September', 1895.2),
(6, '17-0001-22', 'ACT', '2', '2nd Sem.', 'MNTHLY', 'Finals', 1895.2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_stud_pymnt_schm`
--

INSERT INTO `tbl_stud_pymnt_schm` (`row_id`, `stud_id`, `stud_course`, `stud_year`, `stud_sem`, `stud_pymnt_schm`) VALUES
(1, '17-0001-22', 'ACT', '2', '2nd Sem.', 'MNTHLY');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_stud_units`
--

INSERT INTO `tbl_stud_units` (`row_id`, `stud_id`, `units`, `stud_course`, `stud_year`, `semester`) VALUES
(1, '17-0001-22', 9, 'ACT', '2', '2nd Sem.');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
