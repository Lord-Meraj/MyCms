-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2022 at 02:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `IconClass` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `SortOrder` int(100) NOT NULL,
  `Link` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Title`, `IconClass`, `SortOrder`, `Link`) VALUES
(32, 'MenuEdit', 'fa-list', 7, '/MyCms/admin/menulist'),
(28, 'Search', 'fa-Search', 2, '#'),
(31, 'Home', 'fa-Home', 1, '/MyCms'),
(33, 'Login', 'fa-user', 10, '/MyCms/login'),
(34, 'logout', 'fa-user-times', 9, '/MyCms/logout');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RoleID` int(2) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Phone` (`Phone`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `RoleID`, `Phone`, `Pass`, `Fname`, `Lname`, `Email`) VALUES
(1, 1, 9123456789, '123456', 'معراج', 'پرهیزکاری', 'Meraj@gmail.com'),
(2, 2, 9123456788, '123456', 'محمد', 'محمدی', 'mmd@gmail.com'),
(3, 2, 9123456787, '123456', 'محسن', 'شاهی', 'Mohseni@gmail.com'),
(4, 2, 9123456786, '123456', 'علی', 'حسینی', 'ali@gmail.com'),
(5, 2, 9123456785, '123456', 'حسین', 'کشاورز', 'hossein@gmail.com'),
(6, 2, 9123456784, '123456', 'مجید', 'محمدی', 'majid@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
