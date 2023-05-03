-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 05:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sister_v0.1`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasiltanam`
--

CREATE TABLE `hasiltanam` (
  `id` int(11) NOT NULL,
  `id_tanam` int(11) NOT NULL,
  `jml_bibittanam` int(11) NOT NULL,
  `jml_bibitsemai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasiltanam`
--

INSERT INTO `hasiltanam` (`id`, `id_tanam`, `jml_bibittanam`, `jml_bibitsemai`, `created_at`, `updated_at`) VALUES
(1, 6, 5, 10, '2021-07-04 20:58:50', '2021-07-04 20:58:50'),
(2, 2, 100, 300, '2021-07-04 21:17:29', '2021-07-05 11:57:45'),
(4, 10, 10, 10, '2021-07-06 00:53:22', '2021-07-06 00:53:22'),
(5, 15, 112, 110, '2021-08-25 00:42:07', '2021-08-25 00:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `hasiltebang`
--

CREATE TABLE `hasiltebang` (
  `id` int(11) NOT NULL,
  `id_tebang` int(11) NOT NULL,
  `jumlah_tebang` int(11) NOT NULL,
  `volume_tebang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasiltebang`
--

INSERT INTO `hasiltebang` (`id`, `id_tebang`, `jumlah_tebang`, `volume_tebang`, `created_at`, `updated_at`) VALUES
(3, 4, 12, '1000', '2021-07-05 23:50:06', '2021-07-05 23:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `hutan`
--

CREATE TABLE `hutan` (
  `id_tanam` int(10) NOT NULL,
  `luas_lahan` varchar(255) NOT NULL,
  `jenis_tanaman` varchar(255) NOT NULL,
  `tgl_perencanaan` date NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(73, '2014_10_12_000000_create_users_table', 1),
(74, '2014_10_12_100000_create_password_resets_table', 1),
(75, '2019_08_19_000000_create_failed_jobs_table', 1),
(76, '2021_04_21_061804_create_departemens_table', 1),
(77, '2021_04_21_061916_create_pegawais_table', 1),
(78, '2021_04_21_061950_create_proyeks_table', 1),
(79, '2021_04_21_062033_create_pekerja_proyeks_table', 1),
(80, '2021_07_04_143727_create_tebangs_table', 2);

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
-- Table structure for table `tanam`
--

CREATE TABLE `tanam` (
  `id_tanam` int(11) NOT NULL,
  `penanggung` varchar(100) NOT NULL,
  `jns_tanaman` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `tgl_perencanaan` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanam`
--

INSERT INTO `tanam` (`id_tanam`, `penanggung`, `jns_tanaman`, `luas`, `tgl_pelaksanaan`, `tgl_perencanaan`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Shinta Prisma Maharani', 'Kayu Bakar', 200, '2021-07-02', '2021-07-03', 'YA', '2021-07-05 12:00:14', '2021-07-06 01:24:45'),
(7, 'Sari', 'Cendana', 95, '2021-07-04', '2021-07-04', 'TIDAK', '2021-07-05 12:35:25', '2021-07-05 12:35:25'),
(10, 'Kiki', 'Kayu Bakar', 250, '2021-07-06', '2021-07-06', 'YA', '2021-07-06 00:52:18', '2021-07-06 00:52:37'),
(15, 'Edo', 'pinus', 1000, '2021-08-25', '2021-08-25', 'YA', '2021-08-25 00:41:44', '2021-08-25 00:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `tebang`
--

CREATE TABLE `tebang` (
  `id_tebang` bigint(20) UNSIGNED NOT NULL,
  `penanggung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_tanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` int(11) NOT NULL,
  `tanggal_perencanaan` date NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tebang`
--

INSERT INTO `tebang` (`id_tebang`, `penanggung`, `jenis_tanaman`, `luas`, `tanggal_perencanaan`, `tanggal_pelaksanaan`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Shinta', 'Kayu', 2000, '2021-07-04', '2021-07-04', 'TIDAK', '2021-07-04 22:43:37', '2021-07-05 23:51:20'),
(3, 'Rizquna', 'Kayu', 2000, '2021-07-03', '2021-07-04', 'YA', '2021-07-05 12:07:53', '2021-07-05 12:07:53'),
(5, 'Sari', 'Kayu bakar', 2000, '2021-07-06', '2021-07-06', 'YA', '2021-07-05 23:51:03', '2021-07-05 23:51:03');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasiltanam`
--
ALTER TABLE `hasiltanam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasiltebang`
--
ALTER TABLE `hasiltebang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hutan`
--
ALTER TABLE `hutan`
  ADD PRIMARY KEY (`id_tanam`);

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
-- Indexes for table `tanam`
--
ALTER TABLE `tanam`
  ADD PRIMARY KEY (`id_tanam`);

--
-- Indexes for table `tebang`
--
ALTER TABLE `tebang`
  ADD PRIMARY KEY (`id_tebang`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasiltanam`
--
ALTER TABLE `hasiltanam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hasiltebang`
--
ALTER TABLE `hasiltebang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hutan`
--
ALTER TABLE `hutan`
  MODIFY `id_tanam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tanam`
--
ALTER TABLE `tanam`
  MODIFY `id_tanam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tebang`
--
ALTER TABLE `tebang`
  MODIFY `id_tebang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
