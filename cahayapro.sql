-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 12:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cahayapro`
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
(1, 'Mengedepankan inovasi dan pengembangan produk, jasa dan fasilitas umum', '2021-09-04 23:21:28', '2021-09-10 02:53:56');

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
(1, 'Auful', 'cek', 'gambar/5yzFKzDEbl0fRgB53gPgaMvNiC6X1BVxgU1MZRqn.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus rhoncus velit, vitae dignissim dolor lacinia sit amet. Aliquam dolor libero, eleifend non tellus ac, aliquam efficitur libero. Suspendisse non ultrices erat. Proin a mauris in ante accumsan laoreet eget eu felis. Cras tincidunt molestie quam, quis pretium lectus. Pellentesque eget lacus sit amet lacus sodales mattis quis at sapien. In tempor tristique scelerisque. Morbi sodales elit lorem. Vivamus nisi ligula, tristique eu nunc quis, commodo lacinia nunc. Aenean eget tortor ullamcorper, dictum dui vel, dictum massa. Suspendisse potenti. Morbi varius malesuada sapien, faucibus interdum nisi pretium ac. Nullam leo purus, aliquam non ultricies eget, ullamcorper nec erat. Cras nisi mauris, mattis eu massa quis, maximus ultricies ligula.\r\n\r\nMauris a sem porta, laoreet ipsum vitae, egestas massa. Quisque tempus mollis nunc eget eleifend. In hac habitasse platea dictumst. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus fermentum sagittis nulla, vel fermentum arcu. Mauris ac ultrices massa. Phasellus vitae neque turpis. Vestibulum tincidunt accumsan tristique. Etiam pretium tincidunt quam, ac porta orci viverra vel. Aenean molestie, enim at pellentesque dapibus, urna urna rhoncus ligula, vitae venenatis velit diam ut est. Vestibulum luctus fermentum convallis. Nunc vehicula augue sit amet dolor tristique, eu pulvinar metus sollicitudin.\r\n\r\nInteger auctor ornare dui, quis lacinia ex fermentum vel. Sed condimentum molestie odio nec finibus. Praesent vehicula varius dictum. Nulla id tortor massa. Donec pretium elementum eros ut maximus. Aenean vitae nisl dolor. Fusce consectetur, risus sit amet placerat faucibus, neque dui ornare tellus, a tincidunt tellus ex at felis. Donec sodales arcu quam, eu rutrum leo auctor nec. Proin ut purus sit amet lacus ultricies pulvinar vel cursus leo. Pellentesque eget tortor id orci eleifend sollicitudin. Pellentesque venenatis sollicitudin augue id luctus. Suspendisse elementum fringilla ante in lacinia. Sed vehicula nec mauris ut pharetra.\r\n\r\nPhasellus vitae ex sit amet nibh molestie ullamcorper vel et ante. Pellentesque pharetra euismod mi a aliquet. In quis velit massa. Aenean gravida ligula ipsum, et elementum massa porttitor vitae. Curabitur at ligula eu erat interdum vehicula. Aliquam in feugiat libero. Nulla lobortis eros non nulla cursus, non lacinia dolor maximus. Curabitur sit amet massa enim. Sed elementum metus nibh, vel faucibus risus facilisis in. Duis vestibulum maximus scelerisque. Vivamus cursus sapien sit amet ipsum maximus, id consectetur tortor blandit. Vestibulum malesuada enim sit amet eros consequat interdum.\r\n\r\nIn molestie, metus vel lobortis lacinia, lacus purus tincidunt sem, at commodo lorem est eget magna. Vivamus neque elit, luctus sed felis in, rutrum iaculis lorem. Vestibulum sollicitudin nisi id velit egestas, non elementum elit blandit. Proin commodo ex odio. Aliquam ornare nisi felis. In bibendum felis erat, sit amet luctus elit viverra commodo. Nunc in ex nisi. Morbi pharetra convallis enim, sit amet egestas urna malesuada a. Fusce iaculis augue purus, quis volutpat magna dignissim hendrerit.\r\n\r\nPhasellus lacinia, justo eget ornare gravida, nulla arcu congue neque, at fermentum tellus lorem tristique est. Etiam gravida placerat vulputate. Curabitur sed felis quis sapien faucibus tincidunt non faucibus libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur nec neque lorem. Maecenas in ante vel erat dapibus interdum. Pellentesque efficitur, justo at auctor tempus, magna mauris pellentesque tellus, at hendrerit erat magna quis eros.\r\n\r\nNullam pellentesque mauris ex, vel viverra sapien feugiat a. Nullam nec dignissim est. Praesent vestibulum tempor nulla. Suspendisse sed leo a diam vehicula tincidunt. Donec lacus odio, volutpat sed fermentum a, vehicula nec enim. Donec eu erat hendrerit dui laoreet placerat. Nulla facilisi. Morbi nec leo nisi.\r\n\r\nVestibulum non felis tellus. Vivamus efficitur tincidunt dolor, hendrerit interdum orci venenatis eu. Duis finibus, nibh nec tempor dictum, libero ipsum elementum est, non ultrices massa nulla id leo. Donec facilisis ante eget felis pharetra efficitur. Aliquam erat volutpat. Vestibulum iaculis imperdiet velit volutpat varius. Quisque dapibus elit nec accumsan ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam porttitor ipsum vel elit vestibulum, non molestie urna efficitur.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus vestibulum imperdiet neque. Maecenas dui nibh, rutrum eu massa et, egestas mattis eros. Mauris id ultricies purus. Ut eleifend accumsan nunc vel malesuada. Mauris luctus ante in gravida aliquam. Quisque sollicitudin, nisi a dignissim ultricies, nisl neque blandit orci, in sagittis odio nunc eget dolor. Etiam in sodales orci. Aliquam bibendum magna diam, vitae facilisis ex vehicula at. Proin eu lorem malesuada, interdum nisi vitae, commodo lectus. Sed malesuada, orci eu elementum tincidunt, justo mi elementum odio, sed viverra nisl quam quis mi. Quisque quis ante urna.\r\n\r\nVivamus et orci nec odio sollicitudin elementum. Aenean nisi nibh, elementum in consectetur ac, laoreet tempor arcu. Nullam posuere urna sollicitudin ligula vestibulum, id facilisis felis tristique. Donec id risus sed sem elementum interdum. Nunc eget condimentum ligula. In non lacus ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras tempus urna in auctor vestibulum. Nunc euismod est tellus, sit amet molestie quam dictum in.', '2021-09-08 02:35:05', '2021-09-08 02:35:05'),
(2, 'Auful', 'cek', 'gambar/CboXffjFdlHoqKxCym22U3T2nxRfkAkefkT5t84S.jpg', 'perkenalan dan pembahasan mengenai LayoutView dan design UI android', '2021-09-08 20:16:27', '2021-09-08 20:16:27'),
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
(2, 'Lestari', 'gambar/GlclCHdWK0zhWPu6mlAg3CGJ3SdsHhDSOKHHvkqF.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-09-03 22:49:55', '2021-09-06 02:32:20'),
(16, 'Cahaya Pro', 'gambar/GLinMnOOkUFxEYglJyPBNub2FftlOJbd3QFgfa9q.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-09-06 02:31:04', '2021-09-06 02:31:04');

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
(1, 'auful', 'auful01@gmail.com', NULL, '$2y$10$INO9.x1Ty7vi6l6DnpEj9uqBB8v8EM4MqF8TcjZ6kSGAgBudIinKa', NULL, '2021-09-09 23:24:34', '2021-09-09 23:24:34');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
