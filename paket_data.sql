-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 03:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paket_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` INT(10) UNSIGNED NOT NULL,
  `migration` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_29_215902_create_produk_table', 1),
(4, '2020_12_29_220923_create_transaksi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `p_id` INT(10) UNSIGNED NOT NULL,
  `p_provider` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_kategori` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_isi` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_stok` INT(11) NOT NULL,
  `p_harga` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produk` (`p_id`, `p_provider`, `p_kategori`, `p_isi`, `p_stok`, `p_harga`, `created_at`, `updated_at`) VALUES
(1, 'telkomsel', 'paket data', '1 GB', 20, 10000, '2020-12-30 04:41:26', '2020-12-30 04:41:26'),
(2, 'telkomsel', 'paket data', '2 GB + 2 GB', 20, 20000, '2020-12-30 07:19:38', '2020-12-30 07:19:38'),
(3, 'telkomsel', 'paket data', '3 GB', 20, 30000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(4, 'telkomsel', 'paket data', '4 GB', 20, 40000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(5, 'telkomsel', 'paket data', '5 GB + 1 GB', 20, 50000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(6, 'telkomsel', 'paket data', '6 GB', 20, 60000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(7, 'telkomsel', 'paket data', '7 GB', 20, 70000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(8, 'telkomsel', 'paket data', '8 GB', 20, 80000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(9, 'telkomsel', 'paket data', '9 GB', 20, 90000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(10, 'telkomsel', 'paket data', '10 GB', 20, 100000, '2020-12-30 07:19:54', '2020-12-30 07:19:54'),
(11, 'telkomsel', 'pulsa', '5000', 20, 6500, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(12, 'telkomsel', 'pulsa', '10000', 20, 12000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(13, 'telkomsel', 'pulsa', '15000', 20, 17000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(14, 'telkomsel', 'pulsa', '20000', 20, 20000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(15, 'telkomsel', 'pulsa', '25000', 20, 26000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),

(16, 'xl', 'paket data', '2 GB', 7, 30000, '2020-12-30 04:41:57', '2020-12-30 04:41:57'),
(17, 'xl', 'paket data', '4 GB', 7, 45000, '2020-12-30 04:41:57', '2020-12-30 04:41:57'),
(18, 'xl', 'paket data', '6 GB', 7, 60000, '2020-12-30 04:41:57', '2020-12-30 04:41:57'),
(19, 'xl', 'paket data', '8 GB', 7, 75000, '2020-12-30 04:41:57', '2020-12-30 04:41:57'),
(20, 'xl', 'paket data', '10 GB', 7, 100000, '2020-12-30 04:41:57', '2020-12-30 04:41:57'),
(21, 'xl', 'pulsa', '10000', 20, 12000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(22, 'xl', 'pulsa', '15000', 20, 17000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(23, 'xl', 'pulsa', '20000', 20, 22000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(24, 'xl', 'pulsa', '25000', 20, 27000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(25, 'xl', 'pulsa', '30000', 20, 32000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),

(26, 'indosat', 'paket data', '8 GB + 2 GB', 20, 40000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(27, 'indosat', 'paket data', '10 GB + 2 GB', 20, 40000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(28, 'indosat', 'paket data', '15 GB + 2 GB', 20, 50000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(29, 'indosat', 'paket data', '18 GB + 2 GB', 20, 80000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(30, 'indosat', 'paket data', '20 GB + 4 GB', 20, 100000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),

(31, 'indosat', 'pulsa', '5000', 20, 6000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(32, 'indosat', 'pulsa', '10000', 20, 10000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(33, 'indosat', 'pulsa', '15000', 20, 15000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(34, 'indosat', 'pulsa', '20000', 20, 20000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(35, 'indosat', 'pulsa', '25000', 20, 25000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),

(36, 'tri', 'paket data', '2 GB', 20, 20000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(37, 'tri', 'paket data', '5 GB', 20, 50000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(38, 'tri', 'pulsa', '5000', 20, 6000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(39, 'tri', 'pulsa', '50000', 20, 57000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(40, 'tri', 'pulsa', '100000', 20, 100000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),

(41, 'smartfren', 'paket data', '5 GB', 20, 50000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(42, 'smartfren', 'paket data', '10 GB', 20, 80000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(43, 'smartfren', 'paket data', '20 GB', 20, 100000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(44, 'smartfren', 'pulsa', '100000', 20, 100000, '2020-12-30 04:41:42', '2020-12-30 04:41:42'),
(45, 'smartfren', 'pulsa', '200000', 20, 200000, '2020-12-30 04:41:42', '2020-12-30 04:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `t_id` INT(10) UNSIGNED NOT NULL,
  `id` INT(10) UNSIGNED NOT NULL,
  `p_id` INT(10) UNSIGNED NOT NULL,
  `no_hp` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_total` INT(11) NOT NULL,
  `t_status` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_file` VARCHAR(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` INT(10) UNSIGNED NOT NULL,
  `name` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` VARCHAR(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$LnkC74fSrIJDbeahidGt5Oo2JQNjVdHXfevlsa7ZSp0EqnyBj1wmK', 'admin', NULL, '2020-12-30 19:43:24', '2020-12-30 19:43:24'),
(2, 'zayn', 'zayn@gmail.com', '$2y$10$OkOfxqxeR.KxlbhWS9jGD.VxzyI/4.KzxXVsib7VYK.51nYSHOS4S', 'user', NULL, '2020-12-30 19:43:24', '2020-12-30 19:43:24');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `produk_p_id_unique` (`p_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `transaksi_t_id_unique` (`t_id`),
  ADD KEY `transaksi_id_foreign` (`id`),
  ADD KEY `transaksi_p_id_foreign` (`p_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `p_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `t_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `produk` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
