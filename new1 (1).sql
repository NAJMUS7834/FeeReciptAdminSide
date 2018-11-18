-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2018 at 11:09 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new1`
--

-- --------------------------------------------------------

--
-- Table structure for table `emsdb`
--

CREATE TABLE IF NOT EXISTS `emsdb` (
  `sid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `fusn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emsdb`
--

INSERT INTO `emsdb` (`sid`, `name`, `branch`, `sem`, `sec`, `fusn`) VALUES
('1', 'pavan sir', 'CSE', '1st', 'A', '4vv16cs060-4vv16cs070'),
('2', 'sachin sir', 'CSE', '1st', 'A', '4vv16cs070-4vv16cs080'),
('3', 'ROHITH', 'CSE', '1st', 'A', '4vv16cs081-4vv16cs90'),
('4', 'viswash', 'CSE', '2nd', 'B', '4vv15cs060-4vv15cs070'),
('1', 'PAVAN SIR', 'CSE', '1st', 'A', '4vv15cs060-4vv15cs070'),
('1', 'sachin sir', 'CSE', '1st', 'A', '4vv15cs060-4vv15cs070'),
('9', 'rahul', 'CSE', '1st', 'A', '4vv15cs060-4vv15cs070'),
('13', 'ROHITH', 'CSE', '1st', 'A', '4vv15cs060-4vv15cs070'),
('', '', '', '', '', ''),
('12', 'PAVAN SIR', 'CSE', '1st', 'A', '4vv15cs080-4vv15cs090');

-- --------------------------------------------------------

--
-- Table structure for table `studentdb`
--

CREATE TABLE IF NOT EXISTS `studentdb` (
  `usn` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `sub1` varchar(100) NOT NULL,
  `sub1c` varchar(20) NOT NULL,
  `sub2` varchar(100) NOT NULL,
  `sub2c` varchar(20) NOT NULL,
  `sub3` varchar(100) NOT NULL,
  `sub3c` varchar(20) NOT NULL,
  `sub4` varchar(100) NOT NULL,
  `sub4c` varchar(20) NOT NULL,
  `sub5` varchar(100) NOT NULL,
  `sub5c` varchar(20) NOT NULL,
  `sub6` varchar(100) NOT NULL,
  `sub6c` varchar(20) NOT NULL,
  `sub7` varchar(100) NOT NULL,
  `sub7c` varchar(20) NOT NULL,
  `sub8` varchar(100) NOT NULL,
  `sub8c` varchar(20) NOT NULL,
  `sub9` varchar(120) NOT NULL,
  `sub10` varchar(120) NOT NULL,
  `sub11` varchar(120) NOT NULL,
  `sub12` varchar(120) NOT NULL,
  `sub13` varchar(120) NOT NULL,
  `sub14` varchar(120) NOT NULL,
  `sub15` varchar(120) NOT NULL,
  `sub16` varchar(120) NOT NULL,
  `sub17` varchar(100) NOT NULL,
  `sub17c` varchar(20) NOT NULL,
  `sem1` varchar(10) NOT NULL,
  `sub18` varchar(100) NOT NULL,
  `sub18c` varchar(20) NOT NULL,
  `sem2` varchar(10) NOT NULL,
  `sub19` varchar(100) NOT NULL,
  `sub19c` varchar(20) NOT NULL,
  `sem3` varchar(10) NOT NULL,
  `sub20` varchar(100) NOT NULL,
  `sub20c` varchar(20) NOT NULL,
  `sem4` varchar(10) NOT NULL,
  `sub21` varchar(100) NOT NULL,
  `sub21c` varchar(20) NOT NULL,
  `sem5` varchar(10) NOT NULL,
  `sub22` varchar(100) NOT NULL,
  `sub22c` varchar(20) NOT NULL,
  `sem6` varchar(10) NOT NULL,
  `sub23` varchar(100) NOT NULL,
  `sub23c` varchar(20) NOT NULL,
  `sem7` varchar(10) NOT NULL,
  `sub24` varchar(100) NOT NULL,
  `sub24c` varchar(20) NOT NULL,
  `sem8` varchar(10) NOT NULL,
  `recived` varchar(10) NOT NULL,
  `uploaded` varchar(10) NOT NULL,
  UNIQUE KEY `usn` (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdb`
--

INSERT INTO `studentdb` (`usn`, `sem`, `branch`, `fname`, `sec`, `sid`, `sub1`, `sub1c`, `sub2`, `sub2c`, `sub3`, `sub3c`, `sub4`, `sub4c`, `sub5`, `sub5c`, `sub6`, `sub6c`, `sub7`, `sub7c`, `sub8`, `sub8c`, `sub9`, `sub10`, `sub11`, `sub12`, `sub13`, `sub14`, `sub15`, `sub16`, `sub17`, `sub17c`, `sem1`, `sub18`, `sub18c`, `sem2`, `sub19`, `sub19c`, `sem3`, `sub20`, `sub20c`, `sem4`, `sub21`, `sub21c`, `sem5`, `sub22`, `sub22c`, `sem6`, `sub23`, `sub23c`, `sem7`, `sub24`, `sub24c`, `sem8`, `recived`, `uploaded`) VALUES
('', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('1', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('12', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('456', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'on', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('4561', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'on', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('45611', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'on', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('4VV16cso69', '1st', 'CSE', 'PAVAN SIR', 'A', '1', 'asdfgh', 'fgnh', 'fgb', 'fbgnh', '', '', '', '', '', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No'),
('4VV16cso70', '1st', 'CSE', 'PAVAN SIR', 'A', '1', 'asdfgh', 'fgnh', 'fgb', 'fbgnh', '', '', '', '', '', '', '', '', '', '', '', '', ' ', ' ', ' ', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'No'),
('5', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('565', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('63', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('64', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('65', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('90', '2nd', 'CSE', 'PAVAN SIR', 'A', '1', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes'),
('w', '2nd', 'CSE', 'sachin sir', 'A', '2', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl 51020', 'dfcvgbhjk 6532', 'fghjkm 8522', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `subdb`
--

CREATE TABLE IF NOT EXISTS `subdb` (
  `sem` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sub1` varchar(100) NOT NULL,
  `sub1c` varchar(30) NOT NULL,
  `sub2` varchar(100) NOT NULL,
  `sub2c` varchar(30) NOT NULL,
  `sub3` varchar(100) NOT NULL,
  `sub3c` varchar(30) NOT NULL,
  `sub4` varchar(100) NOT NULL,
  `sub4c` varchar(30) NOT NULL,
  `sub5` varchar(100) NOT NULL,
  `sub5c` varchar(30) NOT NULL,
  `sub6` varchar(100) NOT NULL,
  `sub6c` varchar(30) NOT NULL,
  `sub7` varchar(100) NOT NULL,
  `sub7c` varchar(30) NOT NULL,
  `sub8` varchar(100) NOT NULL,
  `sub8c` varchar(30) NOT NULL,
  `sub9` varchar(100) NOT NULL,
  `sub9c` varchar(30) NOT NULL,
  `sub10` varchar(100) NOT NULL,
  `sub10c` varchar(30) NOT NULL,
  `sub11` varchar(100) NOT NULL,
  `sub11c` varchar(30) NOT NULL,
  `sub12` varchar(100) NOT NULL,
  `sub12c` varchar(30) NOT NULL,
  `sub13` varchar(100) NOT NULL,
  `sub13c` varchar(30) NOT NULL,
  `sub14` varchar(100) NOT NULL,
  `sub14c` varchar(30) NOT NULL,
  `sub15` varchar(100) NOT NULL,
  `sub15c` varchar(30) NOT NULL,
  `sub16` varchar(100) NOT NULL,
  `sub16c` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdb`
--

INSERT INTO `subdb` (`sem`, `branch`, `sub1`, `sub1c`, `sub2`, `sub2c`, `sub3`, `sub3c`, `sub4`, `sub4c`, `sub5`, `sub5c`, `sub6`, `sub6c`, `sub7`, `sub7c`, `sub8`, `sub8c`, `sub9`, `sub9c`, `sub10`, `sub10c`, `sub11`, `sub11c`, `sub12`, `sub12c`, `sub13`, `sub13c`, `sub14`, `sub14c`, `sub15`, `sub15c`, `sub16`, `sub16c`) VALUES
('1st', 'CSE', 'asdfgh', 'fgnh', 'fgb', 'fbgnh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2nd', 'CSE', 'xyz', '852', 'fghj', '6212', 'dfghjk', '6221', 'dfgbhnm', '8521', 'cccccd', '', '', '', '', '', '', '', 'fghjkl', '51020', 'dfcvgbhjk', '6532', 'fghjkm', '8522', '', '', '', '', '', '', '', '', '', ''),
('1st', 'CSE', 'fdghjkl', '', 'tryuii', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
