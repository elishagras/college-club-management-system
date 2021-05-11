-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 27, 2021 at 03:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_head` varchar(50) NOT NULL,
  `club_name` varchar(50) NOT NULL,
  `member_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_head`, `club_name`, `member_count`) VALUES
('Deon Smith', 'ai/mlclub', 0),
('Anuj Kotarkar', 'csiclub', 0),
('Dany Poly', 'musicclub', 0),
('Sia Reid', 'roboticsclub', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `Roll_No` int(10) NOT NULL,
  `Club_name` varchar(50) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Year` int(2) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `Phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Roll_No` int(10) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Roll_No`, `Full_name`, `password`, `confirm_password`) VALUES
(1019126, 'Elisha Gras', 'elisha', 'elisha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_name`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`Roll_No`,`Club_name`),
  ADD KEY `C_FK` (`Club_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Roll_No`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registered`
--
ALTER TABLE `registered`
  ADD CONSTRAINT `C_FK` FOREIGN KEY (`Club_name`) REFERENCES `club` (`club_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `R_FK` FOREIGN KEY (`Roll_No`) REFERENCES `users` (`Roll_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
