-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 05:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`cap`) VALUES
(5);

-- --------------------------------------------------------

--
-- Table structure for table `driveins`
--

CREATE TABLE `driveins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `num` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'in',
  `charge` int(11) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driveins`
--

INSERT INTO `driveins` (`id`, `reg_num`, `category`, `num`, `name`, `created_at`, `updated_at`, `status`, `charge`, `payment_mode`) VALUES
(1, 'B Aa 1212', '4-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-15 11:14:37', '2024-05-15 11:17:25', 'out', 60, 'admin- Kirtan'),
(3, 'B Aa 1219', '2-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-15 11:49:21', '2024-05-16 03:44:10', 'out', 390, 'admin- Kirtan'),
(4, 'B Aa 1210', '4-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-16 03:35:40', '2024-05-16 03:36:29', 'out', 55, 'Debit/Credit Card'),
(5, 'B Aa 1210', '4-wheeler', 9808759923, 'Kirtan Shrestha', '2024-04-17 07:33:06', '2024-04-17 07:33:10', 'out', 60, 'cash'),
(6, 'B Aa 1210', '4-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-17 07:35:18', '2024-05-17 07:35:28', 'out', 60, 'admin- Kirtan'),
(7, 'B Aa 1210', '4-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-17 07:35:38', '2024-05-17 07:35:56', 'out', 60, 'Debit/Credit Card'),
(8, 'B Aa 1211', '2-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-17 07:35:44', '2024-05-17 07:44:15', 'out', 25, 'cash'),
(9, 'B Aa 1211', 'other', 9808759923, 'Kirtan Shrestha', '2024-04-17 07:48:43', '2024-04-17 07:48:47', 'out', 20, 'Debit/Credit Card'),
(10, 'B Aa 1211', '2-wheeler', 9808759923, 'Kirtan Shrestha', '2024-04-17 07:49:37', '2024-04-17 07:53:11', 'out', 25, 'Digital Wallet'),
(11, 'B Aa 1210', 'other', 9808759923, 'Kirtan Shrestha', '2024-05-17 07:49:45', '2024-05-17 07:57:45', 'out', 20, 'Digital Wallet'),
(12, 'B Aa 1219', '4-wheeler', 9808759923, 'Kirtan Shrestha', '2024-04-17 07:49:52', '2024-04-17 07:59:28', 'out', 60, 'Debit/Credit Card'),
(14, 'B Aa 1210', '2-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-17 08:04:00', '2024-05-17 08:11:10', 'out', 25, 'admin- ram'),
(15, 'B Aa 1215', 'other', 9808759923, 'Kirtan Shrestha', '2024-05-17 08:12:04', '2024-05-18 07:59:48', 'out', 460, 'admin- Kirtan'),
(16, 'B Aa 1215', '4-wheeler', 9808759923, 'Kirtan Shrestha', '2024-05-18 08:00:08', '2024-05-18 08:00:30', 'out', 4000, 'Debit/Credit Card'),
(19, 'B Aa 1216', '4-wheeler', 9841234567, 'Kirtan', '2024-05-18 08:44:34', '2024-05-18 08:48:49', 'out', 60, 'admin- Kirtan'),
(20, 'B Aa 1216', '2-wheeler', 9841234567, 'Kirtan', '2024-05-18 08:49:05', '2024-05-26 01:53:28', 'out', 4625, 'admin- Kirtan'),
(21, 'B Aa 1211', 'other', 9841234567, 'Kirtan', '2024-05-18 08:49:27', '2024-05-26 01:55:05', 'out', 5550, 'Cash'),
(22, 'B Aa 1217', '2-wheeler', 9841234567, 'Kirtan', '2024-05-26 01:52:22', '2024-05-26 01:56:54', 'out', 25, 'admin- Kirtan'),
(23, 'B Aa 1212', '4-wheeler', 9841234567, 'Kirtan', '2024-06-04 11:14:04', '2024-06-04 18:10:42', 'out', 360, 'cash'),
(24, 'B Aa 1212', '4-wheeler', 9841234567, 'Kirtan', '2024-06-05 05:18:39', '2024-06-05 05:18:45', 'out', 60, 'Cash'),
(28, 'B Aa 1244', 'other', 9841234567, 'Kirtan', '2024-06-06 16:53:03', '2024-06-06 16:56:05', 'out', 30, 'admin- Kirtan'),
(29, 'B Aa 1244', '4-wheeler', 9841234567, 'Kirtan', '2024-06-06 16:58:19', '2024-06-06 16:58:26', 'out', 60, 'admin- Kirtan'),
(30, 'B Aa 1244', '4-wheeler', 9841234567, 'Kirtan', '2024-06-06 14:59:04', '2024-06-06 17:05:28', 'out', 120, 'admin- Kirtan'),
(31, 'B Aa 1222', '4-wheeler', 9841234234, 'Samwek', '2024-06-06 15:59:15', '2024-06-06 17:04:45', 'out', 60, 'admin- Kirtan'),
(33, 'B gb 4464', 'other', 9841234234, 'Ram', '2024-06-06 16:59:36', '2024-06-06 17:04:29', 'out', 30, 'admin- Kirtan'),
(35, 'B OP 6969', '2-wheeler', 9841114234, 'John', '2024-06-06 17:04:53', '2024-06-06 17:05:27', 'out', 25, 'admin- Kirtan'),
(36, 'B OP 6964', 'other', 9841114234, 'John', '2024-06-06 17:04:58', '2024-06-07 17:08:20', 'out', 720, 'admin- Kirtan'),
(37, 'B OP 6961', '2-wheeler', 9841114234, 'John', '2024-06-06 17:05:03', '2024-06-06 17:05:29', 'out', 25, 'admin- Kirtan'),
(38, 'B OP 6960', 'other', 9841114234, 'John', '2024-06-06 17:05:09', '2024-06-06 17:05:30', 'out', 30, 'admin- Kirtan'),
(39, 'B OP 6954', '2-wheeler', 9841114234, 'John', '2024-06-06 17:05:16', '2024-06-06 17:05:30', 'out', 25, 'admin- Kirtan'),
(40, 'B OP 6956', '2-wheeler', 9841114234, 'John', '2024-06-06 17:05:23', '2024-06-06 17:05:31', 'out', 25, 'admin- Kirtan'),
(41, 'A BC 6666', '2-wheeler', 9841696969, 'Omi ', '2024-06-07 17:06:49', '2024-06-07 17:07:13', 'out', 25, 'Cash'),
(44, 'A BC 6664', '4-wheeler', 9841696969, 'Omi ', '2024-06-09 16:53:31', '2024-06-09 16:53:39', 'out', 60, 'Digital Wallet'),
(45, 'b aa 1233', '4-wheeler', 9841121212, 'Ram Sharma', '2024-06-09 17:43:00', '2024-06-09 17:43:34', 'out', 60, 'Cash'),
(46, 'b aa 1233', '4-wheeler', 9841121212, 'Ram Sharma', '2024-06-09 17:45:22', '2024-06-09 17:45:25', 'out', 60, 'cash'),
(47, 'b aa 1233', '4-wheeler', 9841121212, 'AAAAA', '2024-06-09 17:46:28', '2024-06-09 17:46:31', 'out', 60, 'cash'),
(48, 'b aa 1233', '4-wheeler', 9841121212, 'AAAAA', '2024-06-09 17:47:44', '2024-06-09 17:51:01', 'out', 60, 'Digital Wallet'),
(49, 'b aa 1231', '4-wheeler', 9841121212, 'AAAAA', '2024-06-09 17:47:52', '2024-06-10 01:32:15', 'out', 420, 'admin- Kirtan'),
(50, 'b aa 1236', '4-wheeler', 9841121212, 'AAAAA', '2024-06-09 17:52:17', '2024-06-09 17:52:17', 'in', NULL, NULL),
(51, 'B AS 3092', '2-wheeler', 9841121212, 'Aryan Sharma', '2024-06-10 01:30:53', '2024-10-28 13:02:31', 'out', 101130, 'admin- Kirtan');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insides`
--

CREATE TABLE `insides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `num` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insides`
--

INSERT INTO `insides` (`id`, `reg_num`, `category`, `num`, `name`, `created_at`, `updated_at`) VALUES
(50, 'b aa 1236', '4-wheeler', 9841121212, 'AAAAA', '2024-06-09 17:52:17', '2024-06-09 17:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_25_100042_create_driveins_table', 1),
(7, '2024_03_29_140629_create_insides_table', 1),
(8, '2024_05_14_161056_create_rates_table', 1),
(9, '2024_05_18_134730_create_capacity_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `rate`, `category`) VALUES
(1, 30, '2-wheeler'),
(2, 25, 'other'),
(3, 60, '4-wheeler');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kirtan', 'admin@next.com', NULL, '$2y$12$KuZqG3TNXgNpbhyEdamwveekOs1cJJjaw8WdJWr7HtegXCcXq9/xC', '1ELr75bOLpmccn8t7BJd132bDnocPbS1P9mw3sQQXKl576ZEzQ5tMEOapMWL', '2024-05-15 11:15:09', '2024-05-15 11:15:09'),
(4, 'John Doe', 'admin2@next.com', NULL, '$2y$12$3ZKM53ezTjAPqgaMIek0lePVFFasFIReifT6ciIw0Z2zLAqQx2I9O', NULL, '2024-06-09 17:41:41', '2024-06-09 17:41:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driveins`
--
ALTER TABLE `driveins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `insides`
--
ALTER TABLE `insides`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driveins`
--
ALTER TABLE `driveins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insides`
--
ALTER TABLE `insides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
