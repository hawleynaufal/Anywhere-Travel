-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2018 at 03:45 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kursi` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`id`, `name`, `address`, `phone`, `gender`, `kursi`, `created_at`, `updated_at`) VALUES
(28, 'sadsa', 'sad', '09889231', 'Pria', 'B5', '2018-02-08 19:09:35', '2018-02-08 19:09:35'),
(29, 'sadsa', 'asdsaasd', '099872', 'Pria', 'C2', '2018-02-08 19:09:35', '2018-02-08 19:09:35'),
(30, 'hahah', 'sdasdsa', 'hisad', 'Pria', 'B1', '2018-02-08 19:30:54', '2018-02-08 19:30:54'),
(31, 'sad', 'sda', 'sdadsa', 'Pria', 'B7', '2018-02-08 19:30:54', '2018-02-08 19:30:54');

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
(154, '2014_10_12_000000_create_users_table', 1),
(155, '2014_10_12_100000_create_password_resets_table', 1),
(156, '2018_01_10_141059_create_categories_table', 1),
(157, '2018_01_10_141403_create_posts_table', 1),
(158, '2018_01_23_003028_create_costumers_table', 1),
(159, '2018_01_23_003412_create_transportations_table', 1),
(160, '2018_01_23_003903_create_rutes_table', 1),
(161, '2018_02_03_125940_create_reservations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `reservation_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seat_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depart_at` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `costumer_id` int(10) UNSIGNED NOT NULL,
  `rute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rutes`
--

CREATE TABLE `rutes` (
  `id` int(10) UNSIGNED NOT NULL,
  `depart_at` date NOT NULL,
  `rute_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rute_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transportation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rutes`
--

INSERT INTO `rutes` (`id`, `depart_at`, `rute_from`, `rute_to`, `price`, `transportation_id`, `created_at`, `updated_at`) VALUES
(1, '2018-02-11', 'Denpasar', 'Jakarta', '900000', 1, '2018-02-07 02:05:57', '2018-02-07 02:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `transportations`
--

CREATE TABLE `transportations` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transportations`
--

INSERT INTO `transportations` (`id`, `code`, `description`, `seat_qty`, `created_at`, `updated_at`) VALUES
(1, 'QZ / AWQ', 'Air Asia', 150, NULL, NULL),
(2, 'ID / BTK', 'Batik Air', 150, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$bjXFy1nq9O65TdRaoTbHbOx7uonS.N.5qTHWfuYv1dnF5HBXN4POy', '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_costumer_id_foreign` (`costumer_id`),
  ADD KEY `reservations_rute_id_foreign` (`rute_id`);

--
-- Indexes for table `rutes`
--
ALTER TABLE `rutes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rutes_transportation_id_foreign` (`transportation_id`);

--
-- Indexes for table `transportations`
--
ALTER TABLE `transportations`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rutes`
--
ALTER TABLE `rutes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transportations`
--
ALTER TABLE `transportations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_costumer_id_foreign` FOREIGN KEY (`costumer_id`) REFERENCES `costumers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_rute_id_foreign` FOREIGN KEY (`rute_id`) REFERENCES `rutes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rutes`
--
ALTER TABLE `rutes`
  ADD CONSTRAINT `rutes_transportation_id_foreign` FOREIGN KEY (`transportation_id`) REFERENCES `transportations` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
