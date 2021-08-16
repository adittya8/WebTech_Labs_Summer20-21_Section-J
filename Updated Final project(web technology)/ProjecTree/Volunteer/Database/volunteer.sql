-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 12:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab6`
--

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `ID` varchar(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `BIRTH` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `GENDER` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`ID`, `NAME`, `EMAIL`, `BIRTH`, `USERNAME`, `PASSWORD`, `GENDER`) VALUES
('206', 'Adittya Chakraborty', 'arup20@gmail.com', '1999-01-21', 'HellKing', 'A12derf@', 'Other'),
('207', 'Adittya Chakraborty', 'arup2140@gmail.com', '08/03/1998', 'hell', 'Aaaaaaa82@', 'male'),
('207', 'Adittya Chakraborty', 'arup2140@gmail.com', '08/03/1998', 'hell', 'Aaaaaaa82@', 'male'),
('208', 'Adittya Chakraborty', 'arup2140@gmail.com', '', 'hellkingg', '', 'Male'),
('183', 'Adittya Chakraborty', 'arup2140@gmail.com', '', 'heavenking', '', 'Male'),
('210', 'Adittya Chakraborty', 'arup2140@gmail.com', '1998-03-08', 'heavenkin', 'Arupcb08@', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
