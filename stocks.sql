-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 08:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assestt`
--

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `stockName` varchar(255) NOT NULL,
  `stockValue` int(255) NOT NULL,
  `stockQuanty` int(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `stockName`, `stockValue`, `stockQuanty`, `status`) VALUES
(1, 'qwer', 1, 123, 1),
(3, 'test', 123, 123, 1),
(4, '', 0, 0, 1),
(5, 'asdf', 123, 123, 1),
(6, 'bulalo', 500, 1, 1),
(7, 'bulalo', 5000, 1, 1),
(8, 'Pork Sisig', 150, 2, 1),
(9, 'bulalo', 200, 1, 1),
(10, 'bulalo', 333, 2, 1),
(11, 'bulalo', 3121, 1, 1),
(12, 'bulalo', 4234324, 2, 1),
(13, 'Pork Sisig', 255, 1, 1),
(14, 'Pork Sisig', 300, 110, 0),
(15, 'bulalo', 312341315, 55, 0),
(16, 'Bulalo', 200, 2, 1),
(17, 'bulalo', 500000, 1, 0),
(18, 'Chicken Adobo', 300, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
