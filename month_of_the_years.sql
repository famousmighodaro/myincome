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
-- Table structure for table `month_of_the_years`
--

CREATE TABLE `month_of_the_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_days` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `month_of_the_years`
--

INSERT INTO `month_of_the_years` (`id`, `name`, `no_of_days`, `created_at`, `updated_at`) VALUES
(1, 'Jenuary', 31, NULL, NULL),
(2, 'February', 28, NULL, NULL),
(3, 'March', 31, NULL, NULL),
(4, 'April', 30, NULL, NULL),
(5, 'May', 31, NULL, NULL),
(6, 'June', 30, NULL, NULL),
(7, 'July', 31, NULL, NULL),
(8, 'August', 31, NULL, NULL),
(9, 'September', 30, NULL, NULL),
(10, 'October', 31, NULL, NULL),
(11, 'November', 30, NULL, NULL),
(12, 'December', 31, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `month_of_the_years`
--
ALTER TABLE `month_of_the_years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `month_of_the_years`
--
ALTER TABLE `month_of_the_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
