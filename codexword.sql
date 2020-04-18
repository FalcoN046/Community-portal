-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 07:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codexword`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(18, 'Screenshot (97).png', '2019-08-15 09:40:27', '1'),
(19, 'Screenshot (97).png', '2019-08-15 09:43:44', '1'),
(20, 'Screenshot (97).png', '2019-08-15 09:44:12', '1'),
(21, 'Screenshot (97).png', '2019-08-15 09:44:23', '1'),
(22, 'Screenshot (97).png', '2019-08-15 09:47:06', '1'),
(23, 'Screenshot (99).png', '2019-08-15 09:54:06', '1'),
(24, 'Screenshot (99).png', '2019-08-15 09:54:35', '1'),
(25, 'Screenshot (100).png', '2019-08-15 09:54:44', '1'),
(26, 'Screenshot (100).png', '2019-08-15 09:55:13', '1'),
(27, 'Screenshot (100).png', '2019-08-15 09:55:24', '1'),
(28, 'Screenshot (100).png', '2019-08-15 10:19:06', '1'),
(29, 'Screenshot (99).png', '2019-08-15 10:19:18', '1'),
(30, 'Screenshot (99).png', '2019-08-15 10:19:59', '1'),
(31, 'Screenshot (97).png', '2019-08-15 10:21:53', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
