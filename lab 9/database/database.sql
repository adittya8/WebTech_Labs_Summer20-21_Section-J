-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 02:30 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `website` varchar(150) NOT NULL,
  `comment` text NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `website`, `comment`, `gender`) VALUES
(3, 'Adittya Chakraborty', 'arup2140@gmail.com', 'https://www.webslesson.info/', 'fsfsffsf', 'Male'),
(4, 'Adittya Chakraborty', 'arup2140@gmail.com', 'https://web.facebook.com/', 'sasss', 'Male'),
(5, 'Adittya Chakraborty', 'arup2140@gmail.com', 'https://web.facebook.com/', 'gjgjgjg', 'Male'),
(6, 'Adittya Chakraborty', 'arup2140@gmail.com', 'https://github.com/', 'This is an interesting idea.', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(25) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('206', 'Adittya Chakraborty', 'arup2140@gmail.com', '08/03/1998', 'HellKing', 'A12derf@', 'male'),
('207', 'Adittya Chakraborty', 'arup2140@gmail.com', '08/03/1998', 'hell', 'Aaaaaaa82@', 'male'),
('207', 'Adittya Chakraborty', 'arup2140@gmail.com', '08/03/1998', 'hell', 'Aaaaaaa82@', 'male'),
('208', 'Adittya Chakraborty', 'arup2140@gmail.com', '', 'hellkingg', '', 'Male'),
('183', 'Adittya Chakraborty', 'arup2140@gmail.com', '', 'heavenking', '', 'Male'),
('210', 'Adittya Chakraborty', 'arup2140@gmail.com', '1998-03-08', 'heavenkin', 'Arupcb08@', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
