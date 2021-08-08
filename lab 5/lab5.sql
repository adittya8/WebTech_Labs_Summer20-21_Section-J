-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 06:41 PM
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
-- Database: `lab5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(25) NOT NULL,
  `a_uname` varchar(25) NOT NULL,
  `a_email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_uname`, `a_email`) VALUES
(1, 'Adittya Chakraborty', 'adittya08', 'myemail@gmail.com'),
(2, 'Arup Chakraborty', 'arup21', 'a.email@gmail.com'),
(3, 'Atanu Rudra', 'joy007', 'joy.email@gmail.com'),
(4, 'Tamzidul Alam', 'tamzid10', 'tam.email@gmail.com'),
(5, 'Akash Das', 'akash20', 'ak.email@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(25) NOT NULL,
  `v_uname` varchar(25) NOT NULL,
  `v_email` varchar(25) NOT NULL,
  `a_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`v_id`, `v_name`, `v_uname`, `v_email`, `a_id`) VALUES
(201, 'Rock Bee', 'rockbee', 'rockbee@gmail.com', 3),
(202, 'Metal Lee Lee', 'metal', 'metal@gmail.com', 1),
(203, 'Mighty Gui', 'forever youth', 'gai@gmail.com', 3),
(204, 'Kakashi Hatake', 'copy ninja', 'kakashi@gmail.com', 4),
(205, 'Sakumo Hatake', 'sakumo', 'fang@gmail.com', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `FK_av_id` (`a_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `FK_av_id` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
