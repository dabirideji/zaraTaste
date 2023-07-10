-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 04:22 AM
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
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered`
--

CREATE TABLE `tbl_registered` (
  `id` int(32) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(35) DEFAULT NULL,
  `userName` varchar(35) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pword` longtext DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registered`
--

INSERT INTO `tbl_registered` (`id`, `firstName`, `lastName`, `userName`, `email`, `pword`, `Date`) VALUES
(1, 'Faisal', 'Ali', 'User@123', 'Mail@mailer.com', '$2y$10$TE60XBo4evptHzzzDWzhDuiwQdS7n4TC/9SoG5JTO72JBG2YCWkvW', '0000-00-00 00:00:00'),
(2, 'Faisal', 'Ali', 'User@1', 'Mail@mailer.com', '$2y$10$UWVFa9Vp8sqJ/vqdzy1R6e7up15IemTw5nSQ7KhWFacvnovpryM0e', '2023-07-09 01:04:32'),
(3, 'Faisal', 'Ali', 'User@1100', 'Mail@mailer.com', '$2y$10$Vhp2tdnUe5rXYOmV4M6zuuVQl3Gey2E3ID6vvbkNBAmN/rID2fjSm', '2023-07-09 01:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_registered`
--
ALTER TABLE `tbl_registered`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_registered`
--
ALTER TABLE `tbl_registered`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
