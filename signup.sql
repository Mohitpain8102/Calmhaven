-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2024 at 08:22 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signupdetails`
--

DROP TABLE IF EXISTS `signupdetails`;
CREATE TABLE IF NOT EXISTS `signupdetails` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupdetails`
--

INSERT INTO `signupdetails` (`sno`, `name`, `email`, `phone`, `address`, `password`) VALUES
(15, 'radha', 'radha@gmail.com', 8126068222, '', '12345'),
(14, 'name', 'abc@gmail.com', 8126068730, '', '12345'),
(16, 'shyam', 'admin@gmail.com', 1234567899, 'address', '12345'),
(17, 'ramu', 'ramu@gmail.com', 1122335678, '', '12345'),
(18, 'Dr vaibhav', 'vaibhav.mbbs@gmail.com', 7845267875, 'shimla', '12345'),
(19, 'shyamlal', 'shyamu@gmail.com', 9854568875, 'sector 42', '12345'),
(20, 'Ramesh', 'ramesh@gmail.com', 8126068734, 'sector 48, karol bagh, New Delhi 114015', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
