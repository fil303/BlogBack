-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2021 at 05:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggear`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Android', 'android', NULL, NULL),
(2, 'Computer', 'computer', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_07_13_170019_create_roles_table', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2021_07_13_170340_create_role_users_table', 3),
(10, '2021_07_16_060916_add_new_fields_to_users_table', 4),
(11, '2021_07_16_072113_add_new_fields_to_users_table', 5),
(12, '2021_07_17_125946_create_posts_table', 6),
(13, '2021_07_18_173043_create_categories_table', 7);

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
('xyxos@mailinator.com', '$2y$10$rSvJUjqz94ethYdnvMpW.ukc1aesJdnUAwDLsC.dez559lw6lXoyO', '2021-07-14 23:21:13'),
('webfil3033@gmail.com', '$2y$10$4Uxq9zwclFy/U.D5aKYv6emeh9g1IybPNJ8wnE8H6/2L20a4VRdcq', '2021-07-15 10:29:28'),
('webfil303@gmail.com', '$2y$10$LUdcldzlY10pz7At2jxi6OJmAp9OowvTyNjO1jVo80nCrPjffbbFy', '2021-07-15 10:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `subcategory_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `click` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_click` date DEFAULT NULL,
  `last_view` date DEFAULT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cus_cat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `img`, `content`, `category_id`, `subcategory_id`, `click`, `view`, `last_click`, `last_view`, `status`, `created_at`, `updated_at`, `cus_cat`) VALUES
(1, 'this is frst post', NULL, '<p>dafiuog uigh asduigh oaguha idfioguah giapuh <br><br>dafiuog uigh asduigh oaguha idfioguah giapuh<img style=\"width: 50%; float: right;\" src=\"http://localhost/Blog/Back/public/post/2021-07-18_11:52:0630702269.jpg\" class=\"note-float-right\"><br><br>dafiuog uigh asduigh oaguha idfioguah giapuh uihuisdfgh u ih uh adfiu fdguhad fghiudfhg dfpughpiuadghuh apfdutgpiadu pad9ughpadifu gapgauids vhapguypausidhvag sfgyuisdh gapugthpai gadpugiudfgvh gp9a8ygpiodgh sp98fdgh dfg8gpio pg<br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-18 06:09:34', '2021-07-18 06:09:34', NULL),
(2, 'again', NULL, '<p>asdfgas asdg asd as <img style=\"width: 50%; float: right;\" src=\"http://localhost/Blog/Back/public/post/2021-07-18_18:52:5454101196.jpg\" class=\"note-float-right\"><br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-18 12:53:11', '2021-07-18 12:53:11', 'islamic'),
(3, 'hrsdf', NULL, '<p>asdgsfh dfh sfth sh sh sd h<img style=\"width: 802px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-18_18:54:1330092553.jpg\"><br></p>', 1, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-18 12:54:18', '2021-07-18 12:54:18', NULL),
(4, 'hrsdf dfhndf dghsder sdrhgse aerh serhserh aergh rsthsrt erh se srt serh rtj srtj dr', NULL, '<p>asdgsfh dfh sfth sh sh sd h<img style=\"width: 802px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-18_18:54:1330092553.jpg\"><br></p>', 1, NULL, NULL, NULL, NULL, NULL, 3, '2021-07-18 12:56:17', '2021-07-18 12:56:17', NULL),
(5, 'hrsdf', NULL, '<p>asdgsfh dfh sfth sh sh sd h<img style=\"width: 802px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-18_18:54:1330092553.jpg\"><br></p>', 1, NULL, NULL, NULL, NULL, NULL, 3, '2021-07-18 12:58:18', '2021-07-18 12:58:18', NULL),
(6, 'dfgdsf', NULL, '<p>dsfgsdfg sdfg sdf dfs gsfdg dfs gsdfg <br></p>', 2, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-18 13:37:46', '2021-07-18 13:37:46', NULL),
(7, 'dfgdsf', NULL, '<p>dsfgsdfg sdfg sdf dfs gsfdg dfs gsdfg <img style=\"width: 729px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-18_19:38:2126291296.jpg\"><br></p>', 2, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-18 13:38:28', '2021-07-18 13:38:28', NULL),
(8, 'thos ha ha ha ah', NULL, '<p>test<br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 2, '2021-07-19 12:13:32', '2021-07-19 12:13:32', NULL),
(9, 'dfgsdfg', NULL, '<p>dsfgfsd<br></p>', 1, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-19 12:18:25', '2021-07-19 12:18:25', NULL),
(10, 'fghfgh', NULL, '<p>fdghfg<br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 2, '2021-07-19 12:18:47', '2021-07-19 12:18:47', NULL),
(11, 'fghfgh', NULL, '<p>dfgfghfghfgh<br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-19 12:20:08', '2021-07-19 12:20:08', NULL),
(12, 'dfgdrgfd', NULL, '<p>dfgdfgdfg<img style=\"width: 894px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-20_18:48:478964405.jpg\"><br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-20 12:48:51', '2021-07-20 12:48:51', NULL),
(13, 'dfgdrgfd', NULL, '<p>dfgdfgdfg<img style=\"width: 894px;\" src=\"http://localhost/Blog/Back/public/temp/2021-07-20_18:48:478964405.jpg\"><br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-20 12:49:51', '2021-07-20 12:49:51', NULL),
(14, 'dfgdrgfd', NULL, '<p>dfgdfgdfg<img style=\"width: 894px;\" src=\"http://localhost/Blog/Back/public/temp/2021-07-20_18:48:478964405.jpg\"><br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-20 12:52:31', '2021-07-20 12:52:31', NULL),
(15, 'fdxhxfg', 'http://localhost/Blog/Back/public/post/2021-07-20_18:53:4720053549.jpg', '<p><img style=\"width: 894px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-20_18:53:4720053549.jpg\"><br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-20 12:53:53', '2021-07-20 12:53:53', NULL),
(16, 'fghfgh', 'http://localhost/Blog/Back/public/post/2021-07-20_19:07:0862013577.jpg', '<p><img style=\"width: 729px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-20_19:07:0862013577.jpg\"><img style=\"width: 450px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-20_19:07:0839895456.jpg\"><img style=\"width: 894px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-20_19:07:084661007.jpg\"><img style=\"width: 894px;\" src=\"http://localhost/Blog/Back/public/post/2021-07-20_19:07:0884086085.jpg\"><br></p>', 1, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-20 13:07:16', '2021-07-20 13:07:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 6, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `birth` date NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gear` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '1st',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `middlename`, `lastname`, `email`, `phone`, `age`, `gender`, `city`, `state`, `zip`, `country`, `birth`, `occupation`, `education`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`, `img`, `gear`, `icon`) VALUES
(1, 'Lev Weber', 'Lev', 'Odysseus Navarro', 'Weber', 'tipyradev@mailinator.com', '25', '73', 1, 'Vero accusamus proid', 'Quasi ducimus tempo', 65690, 0, '2021-07-10', 'Est ut dolore quas q', 'Praesentium necessit', NULL, '$2y$10$AWSYES0D4RDFZocrzpAg8O/qB2qMAig0ANZXPb0ijpYrt3Hy4Lobu', NULL, 1, '2021-07-14 07:57:51', '2021-07-14 07:57:51', NULL, '1st', NULL),
(2, 'Amethyst Reeves', 'Amethyst', 'Warren Valdez', 'Reeves', 'xyxos@mailinator.com', '87', '39', 1, 'Quis quia aut deleni', 'Id quia sequi autem', 77618, 0, '1982-10-03', 'Optio esse possimu', 'Enim et dolorem quis', NULL, '$2y$10$MiWdz17jXA1NRWHLiixhDOxE7kxca.Fr6aXV8mAV783DnXkxUnSDm', NULL, 1, '2021-07-14 08:37:46', '2021-07-14 08:37:46', NULL, '1st', NULL),
(3, 'Israfil Hossain', 'Israfil', NULL, 'Hossain', 'webfil303@gmail.com', '01403221969', '21', 0, 'Khuln', 'Shiromoni', 9025, 0, '2021-07-07', 'Web Developer', 'HSC', '2021-07-16 05:08:09', '$2y$10$XBD4ryANxBsgmQ6r/x6ZiuceK1k4LDlYR5BudH8Qb2qEZU6I8BRye', 'yGBk7TSu50QkyvF1UdoYUGpCnyOxZKxA5JzG8KpBR1ritLxnoGzH6miJnvea', 1, '2021-07-14 09:33:17', '2021-07-16 05:08:09', '/profile/1626426759.jpg', '1st', '/profile/icon/1626426759.jpg'),
(4, 'SK Mamun', 'SK', NULL, 'Mamun', 'webfil3033@gmail.com', '065468465', '21', 1, 'khulna', 'Shiromoni', 9024, 0, '2021-07-20', 'Emandar', 'SSC', '2021-07-16 05:16:30', '$2y$10$J2UkfslKOT6BjLqd/iSknewHy/egNgnReNncE8jLY5sn4jLpRELNS', 'ZlZKej2k1B3YDo551fvMpgyKBVJATMiBPp8iEZ3RtYP0RC4GIzg8WBrkOL9f', 1, '2021-07-14 11:42:06', '2021-07-16 05:18:14', '/profile/1626431987.jpg', '1st', '/profile/icon/1626431987.jpg'),
(5, 'Sojib Nikkamma', 'Sojib', NULL, 'Nikkamma', 'webfil33033@gmail.com', '016546654', '20', 1, 'khulna', 'Shiromoni', 9024, 0, '2021-07-07', NULL, NULL, NULL, '$2y$10$jkASbupV5/hsrlShgJBb0uCSynpvHU4AD4W.1FdB3bu1Gjxsg4Ptu', NULL, 1, '2021-07-14 11:46:16', '2021-07-14 11:46:16', NULL, '1st', NULL),
(6, 'Marsden Burke', 'Marsden', 'Drew Rosario', 'Burke', 'hyrix@mailinator.com', '543-3515', '59', 0, 'Nesciunt quaerat fa', 'Sit iure pariatur', 15210, 0, '2000-08-04', NULL, NULL, NULL, '$2y$10$NakAzFdK7XXfbTTX0T2LYuKWpJbkw3Ppq3FzpRP0BPcXGCZTMc8YO', NULL, 1, '2021-07-14 11:48:08', '2021-07-14 11:48:08', NULL, '1st', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
