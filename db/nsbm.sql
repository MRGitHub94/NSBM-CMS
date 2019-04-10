-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 06:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `complainid` int(8) NOT NULL,
  `status` int(1) NOT NULL,
  `categoryi` varchar(30) NOT NULL,
  `categoryii` varchar(30) NOT NULL,
  `quer` text NOT NULL,
  `answer` text NOT NULL,
  `studentid` varchar(25) NOT NULL,
  `employeeid` varchar(8) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`complainid`, `status`, `categoryi`, `categoryii`, `quer`, `answer`, `studentid`, `employeeid`, `date`) VALUES
(1, 0, '0', '0', 'aaaaa', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '', ''),
(2, 0, '0', '0', 'asasas', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '', ''),
(3, 0, 'Academic Complaint', 'SOC', 'sdsdsd', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '', ''),
(4, 0, 'Academic Complaint', 'SOC', 'sdsdsds', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '', ''),
(5, 0, 'Academic Complaint', 'SOC', 'sdsdsd', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0016', ''),
(6, 0, 'Administrative & Service Relat', 'Transport', 'sgdgdddhdh', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0010', ''),
(7, 0, 'Administrative & Service Relat', '', 'fdffdf', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0004', ''),
(8, 0, 'other', 'other', 'cvdvdvdv', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0003', ''),
(9, 0, 'Academic Complaint', 'SOC', 'ddfdsfs', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0002', ''),
(10, 0, 'other', 'other', 'cvdvdvdvasasa', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0004', ''),
(11, 0, 'Administrative & Service Relat', 'Sports Clubs & Societies', 'asassas', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0011', ''),
(12, 2, 'Academic Complaint', 'SOC', 'cvdvdvdvdvd', 'hello', 'BSC-UCD-CSC-16.2-029', '0001', '2018/05/26'),
(13, 1, 'Academic Complaint', 'SOC', 'dcdcdcdcdc', 'good', 'BSC-UCD-CSC-16.2-029', '0001', '2018/05/26'),
(14, 1, 'Academic Complaint', 'SOC', 'dcdcdcdcdcdcd', 'test', 'BSC-UCD-CSC-16.2-029', '0001', '2018/05/26'),
(15, 0, 'Academic Complaint', 'SOC', 'dcdcdcdcd', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0001', '2018/05/26'),
(16, 0, 'Academic Complaint', 'SOC', 'testing', 'Not answered yet!', 'BSC-UCD-CSC-16.2-029', '0015', '2018/05/30');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `name`, `password`) VALUES
('0001', 'vc', '12345'),
('0002', 'dvc', '12345'),
('0003', 'admin manager', '12345'),
('0004', 'dean soc', '12345'),
('0005', 'dean sob', '12345'),
('0006', 'dean soe', '12345'),
('0007', 'exam registar', '12345'),
('0008', 'librarian', '12345'),
('0009', 'head - student affairs', '12345'),
('0010', 'transport manager', '12345'),
('0011', 'marshal', '12345'),
('0012', 'head - soc', '12345'),
('0013', 'head - sob', '12345'),
('0014', 'head - soe', '12345'),
('0015', 'cd - soc -ugc', '12345'),
('0016', 'cd - soc - ucd', '12345'),
('0017', 'cd - soc - ply', '12345'),
('0018', 'cd - soc - vu', '12345'),
('0019', 'cd - sob - ugc', '12345'),
('0020', 'cd - sob - ucd', '12345'),
('0021', 'cd - sob - vu', '12345'),
('0022', 'cd - sob - ply', '12345'),
('0023', 'cd - soe - ugc', '12345'),
('0024', 'cd - soe - lmk', '12345'),
('0025', 'cd - sob - fou', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` varchar(20) NOT NULL,
  `name` varchar(75) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `faculty` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `phone`, `email`, `batch`, `pass`, `faculty`) VALUES
('BSC-UCD-CSC-16.2-029', 'Mayuka Wijerathna', '0710310498', 'mayuka@smartvalley.lk', 'Batch 08', 'devni95', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`complainid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `complainid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
