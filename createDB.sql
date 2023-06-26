-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 03:00 PM
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
-- Database: `simregdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users table`
--

CREATE TABLE `userstbl` (
  `UserID` int(11) NOT NULL,
  `MobileNumber` bigint(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DateofBirth` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `AltNUmber` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `userstbl`
  ADD PRIMARY KEY (`UserID`);


-- AUTO_INCREMENT for UserID for userstbl

ALTER TABLE `userstbl`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
