-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2021 at 11:54 AM
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
-- Database: `internal_mark`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `com_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `reg_no` smallint(6) DEFAULT NULL,
  `complaint` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`com_id`, `date`, `reg_no`, `complaint`) VALUES
(23, '2021-12-17', 400, 'ok alla');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `reg_nom` varchar(250) NOT NULL,
  `semesterm` varchar(200) NOT NULL,
  `s1internal1` varchar(250) NOT NULL,
  `s1cinternal1` varchar(250) NOT NULL,
  `s1semiassi` varchar(150) DEFAULT NULL,
  `s2internal1` varchar(250) NOT NULL,
  `s2cinternal1` varchar(250) NOT NULL,
  `s2semiassi` varchar(150) DEFAULT NULL,
  `s3internal1` varchar(250) NOT NULL,
  `s3cinternal1` varchar(250) NOT NULL,
  `s3semiassi` varchar(150) DEFAULT NULL,
  `attendance` varchar(150) NOT NULL,
  PRIMARY KEY (`reg_nom`,`semesterm`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`reg_nom`, `semesterm`, `s1internal1`, `s1cinternal1`, `s1semiassi`, `s2internal1`, `s2cinternal1`, `s2semiassi`, `s3internal1`, `s3cinternal1`, `s3semiassi`, `attendance`) VALUES
('400', '1', '56', '60', '4', '50', '46', '4', '68', '75', '5', '5'),
('400', '2', '54', '50', '3', '46', '66', '3', '65', '60', '4', '5'),
('400', '3', '60', '55', '4', '53', '46', '3', '56', '45', '3', '4'),
('400', '4', '45', '50', '3', '60', '65', '4', '55', '50', '3', '4'),
('400', '5', '50', '56', '3', '50', '60', '4', '65', '68', '4', '3'),
('400', '6', '78', '79', '5', '78', '75', '5', '55', '60', '4', '5'),
('600', '1', '55', '64', '4', '62', '58', '4', '78', '75', '5', '4'),
('600', '2', '65', '66', '4', '72', '75', '5', '70', '76', '5', '4'),
('600', '3', '55', '53', '3', '55', '46', '3', '50', '66', '4', '5'),
('600', '4', '60', '45', '3', '45', '55', '3', '55', '60', '4', '3'),
('600', '5', '78', '74', '5', '68', '70', '4', '75', '76', '5', '5'),
('600', '6', '80', '78', '5', '71', '70', '4', '78', '70', '5', '4'),
('700', '1', '59', '60', '3', '66', '61', '3', '65', '60', '4', '5'),
('700', '2', '55', '53', '4', '71', '68', '4', '78', '65', '4', '4'),
('700', '3', '60', '61', '4', '70', '71', '4', '70', '76', '5', '5'),
('700', '4', '61', '60', '4', '64', '60', '4', '75', '71', '4', '4'),
('700', '5', '60', '65', '5', '65', '70', '5', '70', '71', '5', '3'),
('700', '6', '78', '70', '4', '70', '75', '5', '75', '80', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `reg_no` varchar(300) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `department` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `mail_id` varchar(200) NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `name`, `mname`, `lname`, `department`, `phone_number`, `mail_id`) VALUES
('400', 'Sebin', 'Thomas', 'Jose', 'BCA', '9563247851', 'sebin@gmail.com'),
('600', 'Noyal', '', 'Thomas', 'BSC Chemistry', '9876543210', 'noyal@gmail.com'),
('700', 'Alen', '', 'Jose', 'BSC Physics', '8756459816', 'alen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studlogin`
--

DROP TABLE IF EXISTS `studlogin`;
CREATE TABLE IF NOT EXISTS `studlogin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studlogin`
--

INSERT INTO `studlogin` (`username`, `password`) VALUES
('600', '600'),
('400', '400'),
('700', '700');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `reg_nos` varchar(200) NOT NULL,
  `semesters` varchar(200) NOT NULL,
  `subject1` varchar(500) NOT NULL,
  `subject2` varchar(500) NOT NULL,
  `subject3` varchar(500) NOT NULL,
  PRIMARY KEY (`reg_nos`,`semesters`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`reg_nos`, `semesters`, `subject1`, `subject2`, `subject3`) VALUES
('400', '1', 'CFDP', 'C', 'Maths'),
('400', '2', 'CPP', 'COA', 'DBMS'),
('400', '3', 'MP', 'DS', 'OS'),
('400', '4', 'DA', 'Linux', 'SASE'),
('400', '5', 'Java', 'CN', 'IT'),
('400', '6', 'Seminar', 'Project', 'Data Mining'),
('600', '1', 'Maths', 'English', 'Malayalam'),
('600', '2', 'Maths', 'English', 'Malayalam'),
('600', '3', 'Chemistry', 'Physics', 'Maths'),
('600', '4', 'Analitical', 'Organic', 'Statistics'),
('600', '5', 'Lab1', 'Seminar', 'OC'),
('600', '6', 'Project', 'Seminar', 'Lab1'),
('700', '1', 'Maths', 'Chemistry', 'English'),
('700', '2', 'Statistics', 'Maths', 'Lab1'),
('700', '3', 'Physics', 'Lab1', 'Lab2'),
('700', '4', 'Law', 'Physics', 'Lab1'),
('700', '5', 'Lab1', 'Lab2', 'OC'),
('700', '6', 'Project', 'Lab2', 'Seminar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
