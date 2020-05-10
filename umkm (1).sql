-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 09:53 AM
-- Server version: 10.1.30-MariaDB
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
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `nama_lengkap` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_telp` int(100) NOT NULL,
  `nama_umkm` varchar(256) NOT NULL,
  `jenis_umkm` varchar(256) NOT NULL,
  `desc` varchar(256) NOT NULL,
  `provinsi` varchar(256) NOT NULL,
  `kota` varchar(256) NOT NULL,
  `kec` varchar(256) NOT NULL,
  `kel` varchar(256) NOT NULL,
  `detail` varchar(256) NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `KTP` varchar(255) DEFAULT NULL,
  `Selfie` varchar(255) DEFAULT NULL,
  `Lapak` varchar(255) DEFAULT NULL,
  `SIUP` varchar(255) DEFAULT NULL,
  `SITU` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'mut', 'mut@gmail.com', NULL, '$2y$10$oFchGm.zF8TXIGP1PXZ5huF7lNyN0ehpddlg9uSJ4.er.Ny3dpef.', NULL, '2020-04-18 12:15:09', '2020-04-18 12:15:09'),
(2, 'mute', 'mutyakarim@gmail.com', NULL, '$2y$10$WfEvniARQlqhkIF2aE./9ugUpCQExcMLmkCFvqgtpQnWo37GxLQza', NULL, '2020-04-22 04:39:44', '2020-04-22 04:39:44'),
(3, 'mut', 'mutia@gmail.com', NULL, '$2y$10$QeBpsweUXbLMeiYNDcnBH.aPen9gw5WjpQGzCIr02grEjrJ0sSRfi', NULL, '2020-04-22 06:12:51', '2020-04-22 06:12:51'),
(4, 'Felia', 'famsfelia@gmail.com', NULL, '$2y$10$abn1ZTWu0x35A1Ugx.5Ml.JtXg0vZ0d9gQvQMRR3zE3uAbBp2m/Ma', NULL, '2020-05-09 23:38:24', '2020-05-09 23:38:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
