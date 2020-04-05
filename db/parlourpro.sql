-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 09:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parlourpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `facilities` varchar(50) NOT NULL,
  `ordernum` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `entrytime` varchar(50) NOT NULL,
  `entrydate` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `action` text NOT NULL,
  `cardholder` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`email`, `address`, `facilities`, `ordernum`, `amount`, `entrytime`, `entrydate`, `category`, `action`, `cardholder`, `time`) VALUES
('neha@neha.com', 'pasla', 'manicure,pedicure,', 1493, 140, '14:41', '0009-08-06', 'indoor', 'cancelled', 'neha', '2020-04-05 07:54:11'),
('neha@neha.com', 'pasla', 'spa,haircut,', 7205, 240, '15:07', '0667-04-05', 'indoor', 'confirmed', 'neha', '2020-04-05 07:54:30'),
('neha@neha.com', 'pasla', 'facial,spa,nails,', 9749, 240, '17:39', '2020-03-18', 'indoor', 'cancelled', 'neha', '2020-04-04 21:21:34'),
('neha@neha.com', 'jammu', 'spa,', 9387, 90, '15:55', '2020-03-11', 'indoor', 'confirmed', 'niharika', '2020-03-27 17:47:27'),
('neha@neha.com', 'delhi', 'haircut,', 3909, 150, '15:46', '0005-03-04', 'outdoor', 'wait for the response', 'som', '2020-03-27 10:13:39'),
('muski@muski.com', 'pasla', 'manicure,cleansing,', 5249, 160, '20:59', '0006-06-04', 'indoor', 'cancelled', 'muskan', '2020-03-27 17:52:10'),
('muski@muski.com', 'pasla', 'nails,', 7356, 100, '15:05', '0006-03-05', 'outdoor', 'confirmed', 'muskan sharma', '2020-03-27 17:53:44'),
('neha@neha.com', 'pasla', 'manicure,spa,', 5835, 140, '13:06', '0012-03-08', 'indoor', 'cancelled', 'cfvgbhjn', '2020-04-05 07:54:54'),
('neha@neha.com', 'pasla', 'manicure,spa,', 8909, 140, '13:06', '0012-03-08', 'indoor', 'confirmed', 'cfvgbhjn', '2020-04-05 07:55:06'),
('neha@neha.com', 'pasla', 'manicure,spa,', 5216, 140, '13:06', '0012-03-08', 'indoor', 'wait for the response', 'cfvgbhjn', '2020-03-30 18:48:37'),
('neha@neha.com', 'pasla', 'manicure,spa,', 1911, 140, '13:06', '0012-03-08', 'indoor', 'confirmed', 'cfvgbhjn', '2020-04-04 21:21:56'),
('neha@neha.com', 'jammu', 'facial,spa,nails,', 2931, 240, '14:05', '0056-06-05', 'outdoor', 'wait for the response', 'awesrdtfgyuhj', '2020-03-30 18:50:48'),
('ns1324y@gmail.com', 'pasla', 'facial,spa,', 6589, 140, '14:06', '0089-02-05', 'indoor', 'confirmed', 'dxcfvghbjkn', '2020-04-05 07:55:21'),
('ns1324y@gmail.com', 'pasla', 'facial,spa,', 8300, 140, '14:06', '0089-02-05', 'indoor', 'wait for the response', 'dxcfvghbjkn', '2020-04-04 21:58:15'),
('ns1324y@gmail.com', 'pasla', 'facial,spa,', 5990, 140, '14:06', '0089-02-05', 'indoor', 'wait for the response', 'dxcfvghbjkn', '2020-04-04 21:59:58'),
('ns1324y@gmail.com', 'pune', 'hair', 3440, 250, '16:07', '0007-05-06', 'outdoor', 'wait for the response', 'fdgvhbjnmk', '2020-04-05 07:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistid` int(10) NOT NULL,
  `artistname` text NOT NULL,
  `artistaddress` varchar(50) NOT NULL,
  `artistnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistid`, `artistname`, `artistaddress`, `artistnumber`) VALUES
(1, 'kanik', 'kanpur', 1234567890),
(2, 'kanika', 'kanpur', 1234567898),
(4, 'arvik', 'pune', 1323545643);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_02_140812_students', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(20) NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tel` int(10) NOT NULL,
  `image` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `first`, `last`, `email`, `address`, `password`, `tel`, `image`, `time`) VALUES
(3, 'Niharika', 'sharma', 'neha@neha.com', 'pasla', 'Neha@1', 1234567890, '', '2020-03-30 18:55:13'),
(4, 'muskan', 'sharma', 'muski@muski.com', 'pasla', 'Muski@1', 1234567890, '', '2020-03-27 15:27:20'),
(8, 'som', 'rajput', 'som@som.com', 'jammu', 'Som@1', 1234567890, '', '2020-03-27 16:02:12'),
(9, 'pratham', 'sharma', 'pratham@gmail.com', 'pasla', 'Pratham@1', 1234567890, 'snake_layout.JPG', '2020-03-27 19:58:59'),
(12, 'ms', 'bjwbhs', 'bns@bd.cm', 'snfkn', 'Neha@1', 1234567890, 'snake_layout.JPG', '2020-03-27 20:52:19'),
(13, 'ms', 'bjwbhs', 'bns@gbrbd.cm', 'snfkn', 'Neha@1', 1234567890, 'snake_layout.JPG', '2020-03-27 20:55:04'),
(14, 'ms', 'bjwbhs', 'bns@gbrhbbd.cm', 'snfkn', 'Neha@1', 1234567890, 'snake_layout.JPG', '2020-03-27 21:02:08'),
(15, 'niharika', 'sharma', 'ns1324y@gmail.com', '[asla', 'Niharika@1', 1234567890, 'handsome.jpg', '2020-04-04 21:56:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artistid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
