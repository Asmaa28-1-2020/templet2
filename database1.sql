-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 05:04 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `acounts`
--

CREATE TABLE `acounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acounts`
--

INSERT INTO `acounts` (`id`, `fname`, `lname`, `email`, `password`, `telephone`, `gender`, `created_at`, `updated_at`) VALUES
(16, 'asmaa', 'omar', 'asmaa495@gmail.com', 12345, 109876543, 'female', '2021-07-25 21:55:50', '2021-07-25 23:55:27'),
(17, 'eman', 'kamal', 'eman@45bhg.com', 87965, 123457643, 'female', '2021-07-25 21:58:02', '2021-07-25 22:53:24'),
(18, 'ahmed', 'nagah', 'ahmed123@fdg.com', 98012, 102376532, 'male', '2021-07-25 21:58:39', '2021-07-25 21:58:39'),
(19, 'abdalla', 'nagah', 'abdalla123@fdg.com', 25677, 102376532, 'male', '2021-07-25 22:05:58', '2021-07-25 22:10:42'),
(20, 'mareim', 'ahmed', 'mariem123@fdg.com', 76897, 102376532, 'female', '2021-07-25 22:06:42', '2021-07-25 22:10:57'),
(21, 'hoda', 'mohamed', 'hoda123@fdg.com', 67512, 102376532, 'female', '2021-07-25 22:07:24', '2021-07-25 22:11:07'),
(22, 'mram', 'mahamod', 'mram123@fdg.com', 56743, 102376576, 'female', '2021-07-25 22:08:10', '2021-07-25 22:11:51'),
(23, 'omar', 'ahmed', 'omar123@fdg.com', 76854, 107676576, 'male', '2021-07-25 22:08:52', '2021-07-25 22:11:36'),
(24, 'mohaned', 'magdey', 'mohaned23@fdg.com', 65789, 107677654, 'male', '2021-07-25 22:09:49', '2021-07-25 22:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_05_23_181929_create_acounts_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acounts`
--
ALTER TABLE `acounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acounts`
--
ALTER TABLE `acounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
