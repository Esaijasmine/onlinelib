-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 06:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `admlogin`
--

CREATE TABLE `admlogin` (
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admlogin`
--

INSERT INTO `admlogin` (`username`, `password`) VALUES
('riyajas', 5556);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(5) NOT NULL,
  `bookname` varchar(30) NOT NULL,
  `edition` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `availability` varchar(20) NOT NULL DEFAULT 'available',
  `username` varchar(30) DEFAULT NULL,
  `studentid` int(11) DEFAULT NULL,
  `issuedate` date DEFAULT NULL,
  `duedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `bookname`, `edition`, `author`, `availability`, `username`, `studentid`, `issuedate`, `duedate`) VALUES
(1, 'c', 'third ', 'balagurusamy', 'available', NULL, NULL, NULL, NULL),
(2, 'A passage to India', 'none', 'E.M.Foster', 'notavailable', 'goms', 21657, '2023-10-25', '2023-10-28'),
(3, 'A Suitable boy', 'none', 'Vikram seth', 'available', NULL, NULL, NULL, NULL),
(4, 'programming with java', 'third edition', 'E.Balagurusamy', 'available', NULL, NULL, NULL, NULL),
(5, 'Computer network', 'fourth edition', 'Andrews taneboum', 'available', NULL, NULL, NULL, NULL),
(6, 'war&peace', 'none', 'leotolstoy', 'available', NULL, NULL, NULL, NULL),
(7, 'HTML', 'none', 'xavier', 'notavailable', 'priya', 21655, '2023-10-21', '2023-10-25'),
(8, 'harry potter', 'none', 'j.k rowling', 'available', NULL, NULL, NULL, NULL),
(9, 'web technology', 'eighth', 'uttam k roy', 'available', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `eid` int(10) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`eid`, `uname`, `email`, `password`) VALUES
(1, 'goms', 'goms@gmail.com', '21657'),
(2, 'sri', 'sri@gmail.com', '2012'),
(3, 'sakthi', 'sakthi@gmail.com', '1971'),
(4, 'mom', 'mom@gmail.com', '1977'),
(5, 'priya', 'priya@gmail.com', '21655'),
(6, 'moni', 'moni@gmail.com', '2002'),
(7, 'selvam', 'selvam@gmail.com', '1988'),
(8, 'jas', 'jas03@gmail.com', '7301');

-- --------------------------------------------------------

--
-- Table structure for table `stureg`
--

CREATE TABLE `stureg` (
  `regno` int(10) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Emailid` varchar(40) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stureg`
--

INSERT INTO `stureg` (`regno`, `Username`, `Emailid`, `Course`, `Gender`) VALUES
(56, 'kani', 'kani30@gmail.com', 'B.A English', 'Female'),
(216, 'yash', 'yash5@gmail.com', 'Mca', 'Male'),
(369, 'nazriya', 'nazriya16@gmail.com', 'Mca', 'Female'),
(1000, 'ananth', 'ananth@gmail.com', 'Bsc cs', 'Male'),
(1970, 'sakthi', 'sakthi@gmail.com', 'Mca', 'Male'),
(1977, 'mom', 'mom@gmail.com', 'Bio Tech', 'Female'),
(2002, 'moni', 'moni@gmail.com', 'Bsc cs', 'Female'),
(2012, 'sri', 'sri@gmail.com', 'Bsc cs', 'Female'),
(9000, 'fayas', 'fayas', 'Bio Tech', 'Male'),
(21567, 'jass', 'jassnand@gmail.com', 'Bca', 'Female'),
(21651, 'srii', 'srii@gmail.com', 'Bio Tech', 'Female'),
(21653, 'bala', 'bala@gmail.com', 'Bca', 'Female'),
(21654, 'dharsh', 'dharsh@gmail.com', 'Bsc cs', 'Female'),
(21655, 'priya', 'priya@gmail.com', 'Bca', 'Female'),
(21657, 'goms', 'goms@gmail.com', 'Bca', 'Female'),
(21658, 'saro', 'saro@gmail.com', 'Bca', 'Female'),
(23456, 'riya', 'priya@gmail.com', 'Bca', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `stureg`
--
ALTER TABLE `stureg`
  ADD PRIMARY KEY (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
