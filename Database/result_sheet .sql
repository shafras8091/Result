-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2024 at 07:50 PM
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
-- Database: `result_sheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `al_result`
--

DROP TABLE IF EXISTS `al_result`;
CREATE TABLE IF NOT EXISTS `al_result` (
  `index_no` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `district_rank` int NOT NULL,
  `island_rank` int NOT NULL,
  `z_score` float NOT NULL,
  `poltical` varchar(1) NOT NULL,
  `geography` varchar(1) NOT NULL,
  `ict` varchar(1) NOT NULL,
  `genaral_english` varchar(1) NOT NULL,
  `genaral_knowladge` int NOT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `al_result`
--

INSERT INTO `al_result` (`index_no`, `name`, `nic`, `district_rank`, `island_rank`, `z_score`, `poltical`, `geography`, `ict`, `genaral_english`, `genaral_knowladge`) VALUES
(2001, 'Satthar Mohamed Safras', '200078567896', 6, 50, 1.9, 'A', 'A', 'A', 'A', 70),
(2002, 'Mohamed Fowsar Mohamed Aadhil', '200045789644', 10, 50, 1.8, 'A', 'A', 'A', 'A', 65),
(2003, 'Akmal Mohamed Ashfaq', '200174896323', 25, 64, 1.45, 'B', 'C', 'A', 'A', 59);

-- --------------------------------------------------------

--
-- Table structure for table `ol_result`
--

DROP TABLE IF EXISTS `ol_result`;
CREATE TABLE IF NOT EXISTS `ol_result` (
  `index_no` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic_no` varchar(20) NOT NULL,
  `religion` varchar(1) NOT NULL,
  `language` varchar(1) NOT NULL,
  `english` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `maths` varchar(1) NOT NULL,
  `history` varchar(1) NOT NULL,
  `science` varchar(1) NOT NULL,
  `b1` varchar(1) NOT NULL,
  `b2` varchar(1) NOT NULL,
  `b3` varchar(1) NOT NULL,
  PRIMARY KEY (`index_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ol_result`
--

INSERT INTO `ol_result` (`index_no`, `name`, `nic_no`, `religion`, `language`, `english`, `maths`, `history`, `science`, `b1`, `b2`, `b3`) VALUES
(1001, 'Mohamed Buhary Mohamed Nawfar', '203075923657', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
(1002, 'Mohamed Faizer Mohamed Aflal', '203034268903', 'A', 'B', 'C', 'A', 'C', 'B', 'B', 'C', 'W'),
(1003, 'Mohamed Munas Mohamed Imran', '203134418956', 'A', 'A', 'C', 'A', 'C', 'B', 'B', 'B', 'C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
