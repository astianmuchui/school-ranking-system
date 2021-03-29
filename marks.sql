-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 03:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marks`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `math` int(255) NOT NULL,
  `english` int(255) NOT NULL,
  `swahili` int(255) NOT NULL,
  `chemistry` int(255) NOT NULL,
  `biology` int(255) NOT NULL,
  `physics` int(255) NOT NULL,
  `history` int(255) NOT NULL,
  `geographein` int(255) NOT NULL,
  `relegion` int(255) NOT NULL,
  `technical` int(255) NOT NULL,
  `mean` varchar(255) NOT NULL,
  `Grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_name`, `math`, `english`, `swahili`, `chemistry`, `biology`, `physics`, `history`, `geographein`, `relegion`, `technical`, `mean`, `Grade`) VALUES
(13, 'john doe', 70, 56, 68, 78, 70, 56, 65, 0, 0, 65, '66.2', 'B-'),
(14, 'jane doe', 80, 74, 66, 77, 64, 82, 80, 0, 0, 80, '75', 'B+'),
(15, 'Sebastian muchui', 58, 62, 74, 76, 84, 86, 88, 0, 0, 92, '77.5', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
