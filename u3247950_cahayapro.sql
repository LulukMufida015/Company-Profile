-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2021 at 03:10 PM
-- Server version: 10.3.30-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u3247950_cahayapro`
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_01_111533_add_table_news', 1),
(6, '2021_09_01_120634_add_table_product', 1),
(7, '2021_09_01_124813_profile', 2),
(8, '2021_09_04_053947_update_product_table', 3),
(9, '2021_09_04_090943_add_vimi_table', 4),
(10, '2021_09_04_093232_update_vimi_table', 5),
(11, '2021_09_04_094003_add_target_table', 6),
(15, '2021_09_14_040721_add_table_testimonial', 7);

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `misi`, `created_at`, `updated_at`) VALUES
(1, 'Mewujudkan perusahaan yang mengedepankan inovasi, pengembangan sumber daya manusia, dan kualitas jasa, produk dan layanan.', '2021-09-04 23:21:28', '2021-09-18 01:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idnews` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idnews`, `nama`, `judul`, `gambar`, `berita`, `created_at`, `updated_at`) VALUES
(1, 'Fanda', 'Publikasi dan Kerjasama Toko', 'gambar/5yzFKzDEbl0fRgB53gPgaMvNiC6X1BVxgU1MZRqn.jpg', 'Dalam pengembangan branding produk yang dijual, kami bekerjasama dengan beberapa toko retail untuk memasang beberapa media publikasi.', '2021-09-08 02:35:05', '2021-09-18 01:18:19'),
(2, 'Fanda', 'Sales', 'gambar/CboXffjFdlHoqKxCym22U3T2nxRfkAkefkT5t84S.jpg', 'Pengenalan produk baru Cahaya Pro 12 Reguler', '2021-09-08 20:16:27', '2021-09-18 01:19:06'),
(3, 'Auful', 'cek', 'gambar/gKXrAtbUTTLYUjMhQTR6oseqsM3Zrpxkh4TYxAcM.jpg', 'perkenalan dan pembahasan mengenai LayoutView dan design UI android', '2021-09-08 20:17:29', '2021-09-08 20:17:29'),
(4, 'Auful', 'asda', 'gambar/WJ0ovO5TgXLUQsc5vjhfT6vGme430fzEwQSoXUyw.jpg', '<span style=\"font-weight: bold; font-style: italic;\">Bismillahirrohmanirrohim</span><div><span style=\"font-style: italic;\">Alhamdulillahi</span></div>', '2021-09-08 20:44:21', '2021-09-09 03:39:37');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama_produk`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(16, 'Cahaya Pro 20 Exclusive', 'gambar/GLinMnOOkUFxEYglJyPBNub2FftlOJbd3QFgfa9q.png', 'Merupakan tipe Bold dengan perpaduan cengkeh dan tembakau yang pas. Memiliki rasa gurih dengan aroma harum yang khas.', '2021-09-06 02:31:04', '2021-09-22 03:07:52'),
(17, 'Lestari (SKT12)', 'gambar/GlclCHdWK0zhWPu6mlAg3CGJ3SdsHhDSOKHHvkqF.png', 'Merupakan jenis rokok kretek tangan yang memiliki rasa manis dan harum akibat perpaduan tembakau dan cengkeh yang pas. Isi 12 batang.', '2021-09-03 15:49:55', '2021-09-22 03:10:07'),
(19, 'Cahaya Pro 20 Black', 'gambar/tykfmBopnDQrbkCvCj2hABMv9VQiPztWv6tjEXYC.jpg', 'Jenis rokok Bold, isi 20 batang. Dengan karakteristik strong dan kekinian.', '2021-09-22 03:11:29', '2021-09-22 03:11:29'),
(20, 'Cahaya Pro 12 Reguler', 'gambar/ytvxYyZayJ70fxECFNCDcBf4tMTkSsrZgVWcNt9K.jpg', 'Merupakan jenis rokok reguler, isi 12 batang. Karakteristik rokok ini terbilang ringan, manis, kekinian akibat perpaduan tembakau dan cengkeh yang pas.', '2021-09-22 03:14:19', '2021-09-22 03:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pernyataan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'karyawan', '2021-09-04 22:22:13', '2021-09-04 22:22:13'),
(3, 'Masyarakat dan Komunitas', '2021-09-06 20:56:23', '2021-09-06 20:56:23'),
(4, 'Bismillah', '2021-09-14 00:56:50', '2021-09-14 00:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `kategori`, `testi`, `created_at`, `updated_at`) VALUES
(2, 'Auful', 'CEO MRXTech', 'Websitenya sangat bagus sekali, fiturnya sangat bagus', '2021-09-13 22:54:36', '2021-09-13 22:54:36');

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
(1, 'auful', 'auful01@gmail.com', NULL, '$2y$10$INO9.x1Ty7vi6l6DnpEj9uqBB8v8EM4MqF8TcjZ6kSGAgBudIinKa', NULL, '2021-09-09 23:24:34', '2021-09-09 23:24:34'),
(2, 'admin', 'cahaya.pro213@gmail.com', NULL, '$2y$10$8TRUWC.pn8snM4arOplpr.jsXh2R7vonRFtgQ2yHjMcWEChd0Uwle', '8u3V4E17AHcvsrZVB88HKsVZbIrHsQvLzIjU2jDNtomRauFu9REC01ylIz7y', '2021-09-14 17:12:21', '2021-09-14 17:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `vimi`
--

CREATE TABLE `vimi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idtarget` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vimi`
--

INSERT INTO `vimi` (`id`, `visi`, `created_at`, `updated_at`, `idtarget`) VALUES
(1, 'Melahirkan sumber daya manusia yang memiliki kompetensi, karakter, dan dedikasi tinggi bagi perusahaan dengan menciptakan lingkungan kerja kondusif dan fasilitas pengembangan profesionalitas.', '2021-09-04 23:38:44', '2021-09-13 22:53:41', 1),
(2, 'Mendukung aktivitas sosial ekonomi masyarakat sehingga tercipta kualitas hidup yang meningkat melalui pembukaan lapangan kerja dan kerelasian proses penjualan. umum', '2021-09-06 20:59:16', '2021-09-10 03:10:09', 3);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idnews`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vimi`
--
ALTER TABLE `vimi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtarget` (`idtarget`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idnews` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vimi`
--
ALTER TABLE `vimi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vimi`
--
ALTER TABLE `vimi`
  ADD CONSTRAINT `targetfk` FOREIGN KEY (`idtarget`) REFERENCES `target` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
