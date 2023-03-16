-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2023 at 04:17 PM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `michaelw_NM-enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Name` varchar(255) NOT NULL,
  `Company_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Telephone` varchar(11) NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Name`, `Company_Name`, `Email`, `Telephone`, `Subject`, `Message`) VALUES
('mike', 'netmatters', 'mike.wood170697@gmail.com', '7398500669', 'Work', 'Hi, do you have any jobs available?'),
('', '', '', '', '', ''),
('michael wood', 'NM', 'mike.wood170697@gmail.com', '07398500669', 'Hey', 'hey there'),
('michael wood', 'NM', 'mike.wood170697@gmail.com', '07398500669', 'Hey', 'efkjderwijfbreijfgbreijgbretjbgkjfrbgkjfdbgfdkg'),
('michael wood', 'NM', 'mike.wood170697@gmail.com', '07398500669', 'Hey', 'efkjderwijfbreijfgbreijgbretjbgkjfrbgkjfdbgfdkg'),
('michael wood', 'NM', 'mike.wood170697@gmail.com', '07398500669', 'looking for work', 'Hey there, Im just emailing if you have any jobs availble?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
