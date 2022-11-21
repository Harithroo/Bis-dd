-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 09:13 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisddcw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `ID` int(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Qualifications` varchar(100) NOT NULL,
  `Subjects_to_teach` varchar(100) NOT NULL,
  `Rate_per_hour` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`ID`, `Name`, `Email`, `Phone_number`, `Qualifications`, `Subjects_to_teach`, `Rate_per_hour`) VALUES
(1, 'Peter Brown', 'peter@onlineacademy.com', '000111', 'BSc Computer Science', 'Programming,\r\nDatabases', 40),
(2, 'John White', 'john@onlineacademy.com', '111222', 'MSc Biology', 'Physics,\r\nBiology', 70),
(3, 'David Red', 'david@onlineacademy.com', '222333', 'BA Art', 'Design', 50),
(4, 'Sue Black', 'sue@onlineacademy.com', '333444', 'Diploma Biology', 'Nutrition,\r\nFirst Aid', 35),
(5, 'Jane Red', 'jane@onlineacademy.com', '444555', 'PhD in Politics', 'History,\r\nSociology', 65),
(6, 'Abigail Blue', 'abigail@onlineacademy.com', '555666', 'BSc in Multimedia', 'Design,\r\nProgramming', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
