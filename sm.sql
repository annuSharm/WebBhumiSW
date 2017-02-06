-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 07:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `RegistrationNo` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` int(13) NOT NULL,
  `College` text NOT NULL,
  `Qualification` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `PreferredTime` time(6) NOT NULL,
  `JoiningDate` int(13) NOT NULL,
  `Refrence` text NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`RegistrationNo`, `Name`, `Course`, `Email`, `ContactNo`, `College`, `Qualification`, `Semester`, `Address`, `PreferredTime`, `JoiningDate`, `Refrence`, `Feedback`) VALUES
(49, 'niru', 'java', 's@s.com', 2147483647, 'HR', 'B.E', 'completed', 'Geeta Bhawan', '11:00:00.000000', 12, 'Herself', 'WEb Bhumi'),
(50, 'nirupama', 'java', 's@s.com', 2147483647, 'HR', 'B.E', 'completed', 'Geeta Bhawan', '11:00:00.000000', 12, 'Herself', 'WEb Bhumi'),
(51, 'nirupama', 'C&C++', 'niru@webbhumi.com', 29817453, 'owner', 'B.E in IT', 'job', 'Geeta Bhawan Sq.', '10:00:00.000000', 12, 'Her Dream', 'WEb Bhumi must be best'),
(52, 'Aruna', 'C&C++', 'aruna@webbhumi.com', 986874287, 'doveloper', 'MCA', '3rd', 'coral palace', '09:00:00.000000', 7, 'Abhishek', 'This is the best ');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `RegistrationNo` int(5) NOT NULL,
  `Name` text NOT NULL,
  `ContactNo` int(20) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `BatchTime` text,
  `College` varchar(100) DEFAULT NULL,
  `Qualification` text,
  `Email` text,
  `Date` varchar(10) NOT NULL,
  `CallDate` varchar(10) NOT NULL,
  `Address` text,
  `Fee` varchar(20) DEFAULT NULL,
  `Refrence` text NOT NULL,
  `PaidFee` varchar(20) DEFAULT NULL,
  `NID` varchar(10) NOT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Feedback` text NOT NULL,
  `UserName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`RegistrationNo`, `Name`, `ContactNo`, `Course`, `BatchTime`, `College`, `Qualification`, `Email`, `Date`, `CallDate`, `Address`, `Fee`, `Refrence`, `PaidFee`, `NID`, `Status`, `Feedback`, `UserName`) VALUES
(2, 'aruna', 1234567890, 'HTML', '12:00', 'MRSC', 'MCA', 'arunasharma2723@gmailcom', '', '2017-12-25', 'mayank blue water park toad', NULL, 'DXA', NULL, '', NULL, 'web bhumi', ''),
(3, 'niru', 1234567891, 'HTML', '12:30', 'pta nhi', 'BE', 'niru@gmail.com', '', '2016-04-23', 'web bhumi', NULL, 'her self', NULL, '', NULL, 'I am the best', ''),
(4, 'mayank', 1234567892, 'angulerJS', '12:30', 'IET', 'M.tech', 'mayank@webbhumi.com', '', '2016-04-19', 'pta nhi', NULL, 'prasanna sir', NULL, '', NULL, 'I am always available', ''),
(6, 'jayvika', 1234567893, ' vhrfnv', '12:30', 'dds', 'MCA', 'bsjxfxv@gmail.com', '04-02-17', '2016-11-28', 'f6cufscsv', NULL, 'her self', NULL, '', NULL, 'web bhumi', ''),
(7, 'jayvika', 1234567893, ' vhrfnv', '12:30', 'dds', 'MCA', 'bsjxfxv@gmail.com', '04-02-17', '2016-11-28', 'f6cufscsv', NULL, 'her self', NULL, '', NULL, 'web bhumi', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `UserName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `UserName`) VALUES
('arunasharma2723@gmail.com', 'aru', 'aruna'),
('mayankmandloi009@gmail.com', '*19', 'Mayank'),
('nirupamatandi14@gmail.com', 'niru', 'nirupama');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `RegistrationNo` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ContactNo` int(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Fees` int(10) NOT NULL,
  `Installment1` int(10) NOT NULL,
  `submissionDate1` date NOT NULL,
  `Installment2` int(11) NOT NULL,
  `submissionDate2` date NOT NULL,
  `College` text,
  `Qualification` text NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Refrence` text,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`RegistrationNo`, `Name`, `ContactNo`, `Email`, `Address`, `Course`, `Fees`, `Installment1`, `submissionDate1`, `Installment2`, `submissionDate2`, `College`, `Qualification`, `Semester`, `Refrence`, `Feedback`) VALUES
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'ghf', 24, 'aruna@webbhumi.com', 'vhgdhnh', 'nvgtc h', 61, 55, '0000-00-00', 59, '0000-00-00', NULL, '', '', NULL, ''),
(0, 'sd', 0, 'jtyfhn@gmail.com', 'buyfdcjn', 'jgfdyrtgfvbc', 0, 0, '0000-00-00', 0, '0000-00-00', 'vytrfhc', 'vghjfcn', 'vtfcjm', 'tfhhm', 'ytghjhu'),
(0, 'ojisahcsak', 24333, 'bsjxfxv@gmail.com', 'f6cufscsv', 'hjtjwysg', 0, 0, '0000-00-00', 0, '0000-00-00', 'guegfcjchv n', 'ky7cjg', 'jkysjgcbmk', 'DXA', 'bjysatxfjgmnx,k'),
(0, 'ojisahcsak', 24333, 'bsjxfxv@gmail.com', 'f6cufscsv', 'hjtjwysg', 0, 0, '0000-00-00', 0, '0000-00-00', 'guegfcjchv n', 'ky7cjg', 'jkysjgcbmk', 'DXA', 'bjysatxfjgmnx,k'),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', 'hyrfn', 'mcstu6yjgv', '', ''),
(0, 'niru', 0, 's@s.com', 'vhgdhnh', 'afhhhha', 978, 131, '0000-00-00', 24, '0000-00-00', 'cgrytfcxt4', 'hyrfn', 'vhyrhfvjut', 'fhbfd', 'fgdfbfcvnghn'),
(0, 'niru', 111111, 's@s.com', 'vhgdhnh', 'afhhhha', 978, 131, '0000-00-00', 24, '0000-00-00', 'cgrytfcxt4', 'hyrfn', 'vhyrhfvjut', 'fhbfd', 'fgdfbfcvnghn'),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', ''),
(0, '', 0, '', '', '', 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sulekha`
--

CREATE TABLE `sulekha` (
  `Name` text NOT NULL,
  `ContactNo` text NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Reference` varchar(20) NOT NULL,
  `Feedback` text NOT NULL,
  `username` text NOT NULL,
  `Date` text NOT NULL,
  `CallDate` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`RegistrationNo`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`RegistrationNo`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `RegistrationNo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
