-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 04:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myincome`
--

-- --------------------------------------------------------

--
-- Table structure for table `days_of_the_months`
--

CREATE TABLE `days_of_the_months` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `days_no` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days_of_the_months`
--

INSERT INTO `days_of_the_months` (`id`, `days_no`, `created_at`, `updated_at`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 29, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `days_of_the_months`
--
ALTER TABLE `days_of_the_months`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `days_of_the_months`
--
ALTER TABLE `days_of_the_months`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
