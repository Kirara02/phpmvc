-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 09:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `waifu`
--

CREATE TABLE `waifu` (
  `id` int(11) NOT NULL,
  `anime` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waifu`
--

INSERT INTO `waifu` (`id`, `anime`, `nama`, `umur`, `status`) VALUES
(1, 'GJ-Buu!!', 'Kirara Bernstein', '17', 'waifu'),
(2, 'Date a Live', 'Kurumi Tokisaki', '18', 'waifu'),
(3, 'Saekano', 'Katou Megumi', '18', 'waifu'),
(4, 'tenshura', 'chloe', '21', 'waifu'),
(5, 'king of fighter', 'mai shiranui', '19', 'not waifu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `waifu`
--
ALTER TABLE `waifu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `waifu`
--
ALTER TABLE `waifu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
