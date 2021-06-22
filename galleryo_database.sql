-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 05:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galleryo_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `digital`
--

CREATE TABLE `digital` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `digital`
--

INSERT INTO `digital` (`id`, `title`, `copyright`, `path`, `uploader_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Cat Busy Box', 'CatStudio', 'https://galleryofthepeople.my.id/public/Image/1620268223sticker.png', 1, 'A cat in a box', '2021-05-05 19:30:23', '2021-06-21 07:31:37'),
(23, 'asddas', 'asdadas', 'https://galleryofthepeople.my.id/public/Image/1623921705sticker.png', 4, 'asdasdad', '2021-06-17 02:21:45', '2021-06-17 02:21:45'),
(24, 'Hanatan and Pokotan Kakumei Dualism', '米山舞', 'http://galleryofthepeople.my.id/public/Image/1623940437maxresdefault.jpg', 7, 'Hanatan and Pokota', '2021-06-17 07:33:57', '2021-06-17 07:33:57'),
(26, 'asdsda', 'sdadasd', 'http://galleryofthepeople.my.id/public/Image/162394129373338390_p0.png', 7, 'sdadsasd', '2021-06-17 07:48:14', '2021-06-17 07:48:14');

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
(4, '2021_05_02_105609_create_digital_table', 1),
(5, '2021_05_02_105638_create_paintings_table', 1),
(6, '2021_05_02_105700_create_sculptures_table', 1),
(7, '2021_05_05_134814_create_photography_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paintings`
--

CREATE TABLE `paintings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paintings`
--

INSERT INTO `paintings` (`id`, `title`, `copyright`, `path`, `uploader_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'asdadasdas', 'sadadsad', 'http://galleryofthepeople.my.id/public/Image/1623943729Ben10_da5sFtZFJk.jpg', 7, 'asdasdasd', '2021-06-17 08:28:49', '2021-06-17 08:28:49'),
(2, 'adsads', 'asdsad', 'http://galleryofthepeople.my.id/public/Image/162426908874741216_p0.jpg', 4, 'adsads', '2021-06-21 02:51:29', '2021-06-21 02:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('123313@gmail.com', '$2y$10$MLAVyYc171aPIrwK65OBDucZPsx80nHKSDd98qai/eUTSdG4xsfRq', '2021-05-06 01:23:16'),
('teste@mail.com', '$2y$10$g3sHicNt9c40ADm8APbmbeFeBGQR4qse7CMhKUvc3OR/gINx/JSOa', '2021-05-06 02:00:59'),
('jerry.hatulusan.tobing@gmail.com', '$2y$10$alCJedeO0oLkqjggiQV3G.XJEWfMTtigyll0lMY3B3/at.FTAcM0i', '2021-06-20 03:05:09'),
('stanllyhenrietta@gmail.com', '$2y$10$VQAbdO85AsGQ6CGVT/cdtOuRvj69P79hXBi4sbOciwOT11RXSeqAq', '2021-06-21 09:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id`, `title`, `copyright`, `path`, `uploader_id`, `description`, `created_at`, `updated_at`) VALUES
(4, 'yedr', 'sdadas', 'http://galleryofthepeople.my.id/public/Image/1623931997Early_Speaking.png', 4, 'sadadasd', '2021-06-17 05:13:17', '2021-06-17 05:13:17'),
(5, 'From Owen\'s phone', 'Me', 'http://galleryofthepeople.my.id/public/Image/1623932452Screenshot_20210306-163023_Photos.jpg', 1, 'A man doing a naruto run on a field in Canada', '2021-06-17 05:20:52', '2021-06-17 05:20:52'),
(6, 'BearHugs', 'Tesla', 'http://galleryofthepeople.my.id/public/Image/1623939918download.jpg', 5, 'Tesla, Nikola, Impeccably dressed', '2021-06-17 07:25:18', '2021-06-17 07:25:18'),
(7, 'Octopath Map', 'Somewhere from the Net', 'http://galleryofthepeople.my.id/public/Image/1623942278octopath_traveler_shrine_locations_subclass_advanced_jobs.jpg', 7, 'Bobba', '2021-06-17 08:04:38', '2021-06-17 08:04:38'),
(8, 'asdasdsadasd', 'asddsasd', 'http://galleryofthepeople.my.id/public/Image/1623944662Bluestacks_wEFMqx9a61.jpg', 7, 'kanoooon', '2021-06-17 08:44:22', '2021-06-17 08:44:22'),
(9, 'A girl', 'Unknown', 'http://galleryofthepeople.my.id/public/Image/1624276226AngelaBaby.jpg', 8, 'A girl smiling.', '2021-06-21 04:50:26', '2021-06-21 04:50:26'),
(10, 'White Animal', 'Unknown', 'http://galleryofthepeople.my.id/public/Image/1624278455funny.JPG', 9, 'A funny looking animal sitting on a chair.', '2021-06-21 05:27:35', '2021-06-21 05:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `sculptures`
--

CREATE TABLE `sculptures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sculptures`
--

INSERT INTO `sculptures` (`id`, `title`, `copyright`, `path`, `uploader_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bronze and Marble', 'Kevin Francis Gray', 'http://galleryofthepeople.my.id/public/Image/1623940134download(1).jpg', 5, 'How do you make marble look like wet fabric?', '2021-06-17 07:28:54', '2021-06-17 07:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'Cit Pia', 'teste@mail.com', NULL, '$2y$10$VqCl5BliLZ9puyIrK8k0Z.xC9nQBByzDW97NF0hYc1LjPqwkicqMK', 'ljW6hQOkbF56NrElqQp1tjGnpXV1ZB5YkWTVdQvagTv5OSb7zcXszcW2h4Ve', '2021-05-05 06:52:07', '2021-05-05 06:52:07'),
(2, 'test', 'test@amail.com', NULL, '$2y$10$AGZJSCrZi3C7ltFNC8vtWOQfFG8zLQnnhrRUL3xsu00.Q0j81fyJO', 'jAa5AsHqsmcMnDdN737P9PULrsatZeEkU4wPRFXGVDn5b1Gxx2MvO27H4DlR', '2021-05-05 23:49:37', '2021-05-05 23:49:37'),
(3, 'test1212', '123313@gmail.com', NULL, '$2y$10$ibzhVnjrhsznBI6y2w6bMeP.mnhpLAnA0IrMkjiZ59hiCDpYpr2pq', 'UqHx4b4vqw78GugpRI3vgRI1nWKkZUBEoLykGt0ZrX5vEcSSoLMmzutr8VoV', '2021-05-06 00:20:45', '2021-05-06 00:20:45'),
(4, 'Cit Pia', 'stanllyhenrietta@gmail.com', NULL, '$2y$10$e2J5rJQ5mH8I.E.NWjbLJeUDxYNLoiU/pjgr5isSUWGpPs6wmIWsy', 'aCrx3gyUJZ4pQnkEl2l3f8k8cFAfu71lQw5ar3fanHnBB00GRyRTv6cgHQ2U', '2021-05-06 02:06:27', '2021-05-06 02:42:52'),
(5, 'Blanc', 'jerry.hatulusan.tobing@gmail.com', NULL, '$2y$10$kBc1iiJdKfzihZRK2p91UeX4k7alzF/0HTXQQo1I8z7rGD.Rd4vgq', 'qd9KZqSx0tYup73uM14ep5ZodadC0mpecu6P7evg5VDKqCdMjOtCx8cj89Eq', '2021-06-17 07:18:00', '2021-06-17 07:18:00'),
(6, 'sadsad', 'asdadssad@fajsd.com', NULL, '$2y$10$Wg6HCtoIuKts9j796SOwP.IM1QZOXrKK4B/xJLMCu5TEZYTmAKVVi', NULL, '2021-06-17 07:22:06', '2021-06-17 07:22:06'),
(7, 'asdads', 'asdsdadasf@gmail.com', NULL, '$2y$10$DdL05ob4URLQKiGpDturB.dXipExIOHqDxmeAj.BgymLBdTf.GuoK', NULL, '2021-06-17 07:26:26', '2021-06-17 07:26:26'),
(8, 'george', 'lieowen169@gmail.com', NULL, '$2y$10$nGvRousAVPqOY478ujQ8i.zUlJPWme5FjHfjGbwxOPisTyjNefPLm', NULL, '2021-06-21 04:49:18', '2021-06-21 04:49:18'),
(9, 'Lie', 'lie@gmail.com', NULL, '$2y$10$7V572xI0k7EEu0TMJlzoc.Hvgo2vmeJU5nGvfLIsz0JERt2b/s7De', NULL, '2021-06-21 05:26:38', '2021-06-21 05:26:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `digital`
--
ALTER TABLE `digital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `digital_uploader_id_foreign` (`uploader_id`);

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
-- Indexes for table `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paintings_uploader_id_foreign` (`uploader_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photography_uploader_id_foreign` (`uploader_id`);

--
-- Indexes for table `sculptures`
--
ALTER TABLE `sculptures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sculptures_uploader_id_foreign` (`uploader_id`);

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
-- AUTO_INCREMENT for table `digital`
--
ALTER TABLE `digital`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paintings`
--
ALTER TABLE `paintings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sculptures`
--
ALTER TABLE `sculptures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `digital`
--
ALTER TABLE `digital`
  ADD CONSTRAINT `digital_uploader_id_foreign` FOREIGN KEY (`uploader_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `paintings`
--
ALTER TABLE `paintings`
  ADD CONSTRAINT `paintings_uploader_id_foreign` FOREIGN KEY (`uploader_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `photography`
--
ALTER TABLE `photography`
  ADD CONSTRAINT `photography_uploader_id_foreign` FOREIGN KEY (`uploader_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `sculptures`
--
ALTER TABLE `sculptures`
  ADD CONSTRAINT `sculptures_uploader_id_foreign` FOREIGN KEY (`uploader_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
