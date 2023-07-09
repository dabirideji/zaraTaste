-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 01:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaraprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `zaratb`
--

CREATE TABLE `zaratb` (
  `USER_ID` int(11) NOT NULL,
  `FULLNAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `REG_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zaratb`
--

INSERT INTO `zaratb` (`USER_ID`, `FULLNAME`, `USERNAME`, `EMAIL`, `PHONE`, `PASSWORD`, `REG_DATE`) VALUES
(1, 'Amber Pharoh', 'amba122', 'amber@gmail.com', '0903746578', '111', '2023-07-09 22:50:43'),
(2, 'Drake Paul', 'paulo123', 'paul@gmail.com', '0705635624', '4141', '2023-07-09 22:53:20'),
(3, 'Tobi Becca', 'bexky', 'becca@gmail.com', '09145636756', '5515', '2023-07-09 22:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zaratb`
--
ALTER TABLE `zaratb`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zaratb`
--
ALTER TABLE `zaratb`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
