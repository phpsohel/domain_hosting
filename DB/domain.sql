-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2023 at 09:03 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domain`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `company`, `email_1`, `email_2`, `phone_1`, `phone_2`, `website`, `address`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Acquaint Limited', 'Acquaint Limited', 'acquaintlimited@gmail.com', 'acquaintlimited@gmail.com', '0171234567', '0171234567', 'acquaint.limited', 'Palton', '1', '2022-11-28 05:30:22', '2022-11-29 01:00:54'),
(5, 'Attrading CN', 'Attrading CN', 'attr@gmail.com', 'attr@gmail.com', '01788454956', '01788454956', 'attradingcn.com', 'Palton', '1', '2022-11-28 05:31:37', '2022-11-28 05:31:37'),
(6, 'Azoozle', 'Azoozle', 'Azoozle@gmail.com', 'azoozle@gmail.com', '0189845656', '0189845656', 'azoozle.com', 'Palton', '1', '2022-11-28 05:32:29', '2022-11-28 05:33:34'),
(7, 'Mr. Amanul Q Chowdhury', 'Custom Bond', 'cbcewa218@gmail.com', NULL, '01711906065', '01819224061', 'cbcewa.org', '342/1, Segunbagicha Dhaka.', '1', '2022-11-28 05:33:20', '2023-01-17 00:33:07'),
(8, 'Celebrations', 'Celebrations', 'celebrations@gmail.com', 'celebrations@gmail.com', '0198455654', '0198455654', 'celebrations.com.bd', 'Palton', '1', '2022-11-28 05:34:18', '2022-11-28 05:34:18'),
(9, 'Chandradwip', 'Chandradwip', 'ahandradwip@gmail.com', 'ahandradwip@gmail.com', '01832493445', '01832493445', 'chandradwip.com', 'Palton', '1', '2022-11-28 05:35:03', '2022-11-28 05:35:03'),
(10, 'Dcube', 'Dcube', 'dcube@gmail.com', 'dcube@gmail.com', '010349055', '010349055', 'dcube.com.bd', 'Palton', '1', '2022-11-28 05:35:44', '2022-11-28 05:35:44'),
(11, 'Dhakawelfareinternational', 'Dhakawelfareinternational', 'dhaka@gmail.com', 'dhaka@gmail.com', '018834355', '018834355', 'dhakawelfareinternational.com', 'Palton', '1', '2022-11-28 05:36:47', '2022-11-28 05:36:47'),
(12, 'Dorozay', 'Dorozay', 'dorozay@gmail.com', 'dorozay@gmail.com', '0175499563', '0175499563', 'dorozay.com', 'Palton', '1', '2022-11-28 05:37:42', '2022-11-28 05:37:42'),
(13, 'Friends98forever', 'Friends98forever', 'friends98forever@gmail.com', 'friends98forever@gmail.com', '01695843546', '01695843546', 'friends98forever.com', 'Palton', '1', '2022-11-28 05:38:20', '2022-11-28 05:38:20'),
(14, 'Intakepapercup', 'Intakepapercup', 'intakepapercup@gmail.com', 'intakepapercup@gmail.com', '01934943845', '01934943845', 'intakepapercup.com', 'Palton', '1', '2022-11-28 05:38:58', '2022-11-28 05:38:58'),
(15, 'Keyatravelsbd', 'keyatravelsbd', 'keyatravelsbd@gmail.com', 'keyatravelsbd@gmail.com', '013040545496', '013040545496', 'keyatravelsbd.com', 'Dhaka', '1', '2022-11-28 05:39:48', '2022-11-28 05:39:48'),
(16, 'Mohonatechno', 'Mohonatechno', 'mohonatechno@gmail.com', 'mohonatechno@gmail.com', '01934938935884', '01934938935884', 'mohonatechno.com', 'Dhaka', '1', '2022-11-28 05:40:36', '2022-11-28 05:40:36'),
(17, 'mshlimited.com', 'mshlimited.com', 'mshlimited@gmail.com', 'mshlimited@gmail.com', '01543895945', '01543895945', 'mshlimited.com', 'Palton', '1', '2022-11-28 05:45:21', '2022-11-28 05:45:21'),
(18, 'Alauddin Abid', 'Noor Enterprise', 'alauddinnabid@outlook.com', 'mustakim_nasif@yahoo.com', '8801715302365', '8801715044091', 'noor-aaa.com', '22/1, Purana Mugoltoly Road, Malitola, Dhaka-1100', '1', '2022-11-28 05:46:28', '2023-01-17 01:43:55'),
(19, 'PCG Fashion BD', 'PCG Fashion BD', 'pcgfashionbd@gmail.com', 'pcgfashionbd@gmail.com', '0145876575568', '0145876575568', 'pcgfashionbd.com', 'Palton', '1', '2022-11-28 05:47:26', '2022-11-28 05:47:26'),
(20, 'Psusbangla', 'Psusbangla', 'psusbangla@gmail.com', 'psusbangla@gmail.com', '0193848856956', '0193848856956', 'psusbangla.org', 'Dhaka', '1', '2022-11-28 05:48:29', '2022-11-28 05:48:29'),
(21, 'quenchcafebd', 'quenchcafebd', 'quenchcafebd@gmail.com', 'quenchcafebd@gmail.com', '018954689695', '018954689695', 'quenchcafebd.com', 'Dhaka', '1', '2022-11-28 05:49:10', '2022-11-28 05:49:10'),
(22, 'rasintbd', 'rasintbd', 'rasintbd@gmail.com', 'rasintbd@gmail.com', '018935458845', '018935458845', 'rasintbd.com', 'Dhaka', '0', '2022-11-28 05:50:09', '2022-11-28 05:50:09'),
(23, 'rsm-bd', 'rsm-bd', 'rsm-bd@gmail.com', 'rsm-bd@gmail.com', '01894595668', '01894595668', 'rsm-bd.com', 'Dhaka', '1', '2022-11-28 05:50:50', '2022-11-28 05:50:50'),
(24, 'seashellinteriors', 'seashellinteriors', 'seashellinteriors@gmail.com', 'seashellinteriors@gmail.com', '01954395845', '01954395845', 'seashellinteriors.com', 'seashellinteriors.com', '1', '2022-11-28 05:51:20', '2022-11-28 05:51:20'),
(25, 'sntravelsbd', 'sntravelsbd', 'sntravelsbd@gmail.com', 'sntravelsbd@gmail.com', '01943549856', '01943549856', 'sntravelsbd.com', 'Dhaka', '1', '2022-11-28 05:51:59', '2022-11-28 05:51:59'),
(26, 'taslbd', 'taslbd', 'taslbd@gmail.com', 'taslbd@gmail.com', '01249393495', '01249393495', 'taslbd.com', 'Dhaka', '1', '2022-11-28 05:52:45', '2022-11-28 05:52:45'),
(27, 'travelinfinityr', 'travelinfinityr', 'travelinfinityr@gmail.com', 'travelinfinityr@gmail.com', '0189784357', '0189784357', 'travelinfinityr.com', 'Dhaka', '1', '2022-11-28 05:53:31', '2022-11-28 05:53:31'),
(29, 'Md. Tariqul Islam', 'Valencia Furnishing ltd.', 'uzzal@valenciafurnishingltd.com', NULL, '01959926465', NULL, 'valenciafurnishingltd.com', 'Gulshan, Dhaka 1000', '1', '2022-11-29 01:03:35', '2023-01-17 00:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `domain_hostings`
--

CREATE TABLE `domain_hostings` (
  `id` int NOT NULL,
  `cust_id` int DEFAULT NULL,
  `domain_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `domain_author_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `domain_yearly_price` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `domain_start_date` date DEFAULT NULL,
  `domain_expiry_date` date DEFAULT NULL,
  `hosting_space` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `hosting_author_name` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `hosting_start_date` date DEFAULT NULL,
  `hosting_expiry_date` date DEFAULT NULL,
  `hosting_yearly_price` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `domain_hostings`
--

INSERT INTO `domain_hostings` (`id`, `cust_id`, `domain_name`, `domain_author_name`, `domain_yearly_price`, `domain_start_date`, `domain_expiry_date`, `hosting_space`, `hosting_author_name`, `hosting_start_date`, `hosting_expiry_date`, `hosting_yearly_price`, `created_at`, `updated_at`) VALUES
(6, 5, 'attradingcn.com', 'Namecheap', '5000', '2021-12-20', '2022-10-20', '1 GB', 'Namecheap', '2022-12-20', '2022-10-20', '5000', '2022-11-29 00:22:08', '2022-11-29 00:22:08'),
(7, 6, 'azoozle.com', 'Namecheap', '3000', '2021-10-31', '2022-12-31', '1 GB', 'Namecheap', '2021-10-31', '2022-12-31', '3000', '2022-11-29 00:23:51', '2022-11-29 00:23:51'),
(8, 7, 'cbcewa.org', 'Namecheap', '2500', '2022-01-30', '2023-01-30', '2 GB', 'Namecheap', '2022-01-30', '2023-01-30', '3000', '2022-11-29 00:25:41', '2023-01-17 00:29:30'),
(9, 8, 'celebrations.com.bd', 'Namecheap', '5000', '2022-09-27', '2023-08-01', '10 GB', 'Namecheap', '2022-09-27', '2023-08-01', '4000', '2022-11-29 00:28:17', '2022-11-29 00:28:17'),
(10, 9, 'chandradwip.com', 'Namecheap', '3000', '2021-12-19', '2022-12-19', '1 GB', 'Namecheap', '2021-12-19', '2022-12-19', '3000', '2022-11-29 00:29:40', '2022-11-29 00:29:40'),
(11, 10, 'dcube.com.bd', 'Namecheap', '4000', '2022-10-11', '2023-10-11', '2 GB', 'Namecheap', '2022-10-11', '2023-10-11', '4000', '2022-11-29 00:31:55', '2022-11-29 00:31:55'),
(12, 11, 'dhakawelfareinternational.com', 'Namecheap', '5000', '2022-11-24', '2023-08-04', '1 GB', 'Namecheap', '2022-11-24', '2023-08-04', '5000', '2022-11-29 00:33:38', '2022-11-29 00:33:38'),
(13, 12, 'dorozay.com', 'Namecheap', '3000', '2021-03-10', '2023-03-10', '2 GB', 'Namecheap', '2021-03-10', '2023-03-10', '3000', '2022-11-29 00:34:59', '2022-11-29 00:34:59'),
(14, 13, 'friends98forever.com', 'Namecheap', '3000', '2021-09-19', '2023-08-04', '2 GB', 'Namecheap', '2021-09-19', '2023-08-04', '3000', '2022-11-29 00:36:30', '2022-11-29 00:36:30'),
(15, 14, 'intakepapercup.com', 'Namecheap', '5000', '2022-04-04', '2023-04-04', '1 GB', 'Namecheap', '2022-04-04', '2023-04-04', '5000', '2022-11-29 00:37:37', '2022-11-29 00:37:37'),
(16, 15, 'keyatravelsbd.com', 'Namecheap', '4000', '2022-03-17', '2023-03-17', '3 GB', 'Namecheap', '2022-03-17', '2023-03-17', '4000', '2022-11-29 00:39:24', '2022-11-29 00:39:24'),
(17, 16, 'mohonatechno.com', 'Namecheap', '5000', '2022-06-21', '2023-06-21', '1 GB', 'Namecheap', '2022-06-21', '2023-06-21', '3000', '2022-11-29 00:40:51', '2022-11-29 00:40:51'),
(18, 17, 'mshlimited.com', 'Namecheap', '2000', '2022-05-17', '2023-05-17', '1 GB', 'Namecheap', '2022-05-17', '2023-05-17', '2000', '2022-11-29 00:42:13', '2022-11-29 00:42:13'),
(19, 18, 'noor-aaa.com', 'Namecheap', '2500', '2022-01-30', '2023-01-30', '3 GB', 'Namecheap', '2022-01-30', '2023-01-30', '3500', '2022-11-29 00:43:33', '2023-01-17 01:45:33'),
(20, 19, 'pcgfashionbd.com', 'Namecheap', '2000', '2022-06-29', '2023-06-29', '1 GB', 'Namecheap', '2022-06-29', '2023-06-29', '2000', '2022-11-29 00:44:47', '2022-11-29 00:44:47'),
(21, 20, 'psusbangla.org', 'Namecheap', '4000', '2022-08-10', '2023-08-10', '2 GB', 'Namecheap', '2022-08-10', '2023-08-10', '4000', '2022-11-29 00:46:18', '2022-11-29 00:46:18'),
(22, 21, 'quenchcafebd.com', 'Namecheap', '3000', '2022-04-04', '2023-04-02', '1 GB', 'Namecheap', '2022-04-04', '2023-04-02', '3000', '2022-11-29 00:47:28', '2022-11-29 00:47:28'),
(23, 22, 'rasintbd.com', 'Namecheap', '6000', '2022-01-30', '2023-01-30', '3 GB', 'Namecheap', '2022-01-30', '2023-01-30', '6000', '2022-11-29 00:48:33', '2022-11-29 00:48:33'),
(24, 23, 'rsm-bd.com', 'Namecheap', '10000', '2022-07-18', '2023-07-18', '20 GB', 'Namecheap', NULL, '2023-07-18', '10000', '2022-11-29 00:50:09', '2022-11-29 00:50:09'),
(25, 24, 'seashellinteriors.com', 'Namecheap', '6000', '2021-03-02', '2023-03-02', '2 GB', 'Namecheap', '2021-03-02', '2023-03-02', '6000', '2022-11-29 00:51:35', '2022-11-29 00:51:35'),
(26, 25, 'sntravelsbd.com', 'Namecheap', '7000', '2022-08-18', '2023-08-18', '5 GB', 'Namecheap', '2022-08-18', '2023-08-18', '7000', '2022-11-29 00:52:55', '2022-11-29 00:52:55'),
(27, 26, 'taslbd.com', 'Namecheap', '2000', '2022-11-24', '2025-11-22', '1 GB', 'Namecheap', '2022-11-24', '2025-11-22', '2000', '2022-11-29 00:54:23', '2022-11-29 00:54:23'),
(28, 27, 'travelinfinityr.com', 'Namecheap', '2000', '2021-11-21', '2022-11-21', '1 GB', 'Namecheap', '2021-11-21', '2022-11-21', '2000', '2022-11-29 00:55:26', '2022-11-29 00:55:26'),
(31, 29, 'valenciafurnishingltd.com', 'Namecheap', '2500', '2022-02-13', '2023-02-13', '5 GB', 'Namecheap', '2022-02-13', '2023-02-13', '5000', '2022-11-29 01:27:48', '2023-01-17 00:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `expire__lists`
--

CREATE TABLE `expire__lists` (
  `id` int NOT NULL,
  `domain_hosting_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_27_042237_create_customers_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$eTbyTGdACq39D5yGn6BYyOrxcIkJE1spqPqqEDELdjvjjOu1FY9sO', 'h45nkF175MBDW6JHOeoHdejaRXi0ej3a8CHjtK2oG4oYv7nnhOCEOQSTwdnV', '2022-10-27 00:14:55', '2022-10-27 00:14:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email_1`);

--
-- Indexes for table `domain_hostings`
--
ALTER TABLE `domain_hostings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`cust_id`);

--
-- Indexes for table `expire__lists`
--
ALTER TABLE `expire__lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `domain_hostings`
--
ALTER TABLE `domain_hostings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `expire__lists`
--
ALTER TABLE `expire__lists`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
