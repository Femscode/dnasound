-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 08, 2024 at 07:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bao`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `type`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fundamentals of house building', 'Before you edited proceed in laying that foundation, you will need to consider some few things.', 'House Building', '7UJEa84V4YHWDT3CK2lzwtLXeLKiEDMbA4AFnwnv.jpg', 1, '2024-04-08 16:30:12', '2024-04-08 16:45:51'),
(3, 'The professional architect', 'To be a professional architect', 'Architecture', 'Iy6IAhRqQhUiQO7LN1sJ6umWQpZ8LxUy05g8Q6in.jpg', 1, '2024-04-08 16:46:57', '2024-04-08 16:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `interest`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Fasanya Pelumi', 'fasanyafemi@gmail.com', '09058744473', 'I need a mobile app', 'App Development', 'I need it urgently', '2024-04-07 18:57:27', '2024-04-07 18:57:27'),
(2, 'Fasanya Pelumi', 'fasanyafemi@gmail.com', '09058744473', NULL, NULL, 'Hi, I want to make an enquiry', '2024-04-08 14:12:58', '2024-04-08 14:12:58');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_05_130036_create_projects_table', 1),
(6, '2023_03_28_111022_create_transactions_table', 2),
(7, '2023_05_06_153407_create_duplicate_transactions_table', 2),
(8, '2023_05_15_113611_add_google_id_to_users_table', 2),
(9, '2023_05_27_082424_create_sessions_table', 2),
(10, '2023_05_28_183316_create_my_sessions_table', 2),
(11, '2023_06_04_182413_create_coming_soons_table', 2),
(12, '2023_08_25_061456_create_themes_table', 2),
(13, '2023_09_15_202324_create_notifications_table', 2),
(14, '2024_02_13_082144_create_waybills_table', 2),
(15, '2024_02_15_080416_create_cancel_waybills_table', 2),
(16, '2024_02_20_215153_create_activities_table', 2),
(17, '2024_04_06_001814_create_projects_table', 3),
(18, '2024_04_06_002101_create_clients_table', 3),
(19, '2024_04_06_093054_create_project_additional_images_table', 4),
(20, '2024_04_06_093253_create_client_additional_images_table', 4),
(21, '2024_04_07_195007_create_contacts_table', 5),
(22, '2024_04_08_171454_create_blogs_table', 6);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `price` decimal(10,2) DEFAULT NULL,
  `bath` int(11) DEFAULT NULL,
  `bed` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `type`, `image`, `status`, `price`, `bath`, `bed`, `length`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Newly seven(7) bedroom flat.', 'Newly built with modern facilities.', 'House Building', 'okRUbHZvIONs21MwWrxfskrEMEAaM2iRvyapMY50.jpg', 1, 4000000.00, 10, 7, 5600, 'Magodo, Lagos', '2024-04-05 23:55:00', '2024-04-08 16:42:51'),
(4, 'E Library Project', 'Escolab E library system with a collection of more than 10,000 books', 'Mobile App & Website', '4tXV4mBxykzlcSFKUcS3NHCcOpWoPY8DzHHfHqOh.jpg', 1, NULL, NULL, NULL, NULL, NULL, '2024-04-06 17:13:46', '2024-04-07 15:24:47'),
(5, 'Real Estate Website', 'Development of a webapp for the rent and purchase of real estates.', 'Website development', '2CiFht88eBtgdftdrRsyJUnA761fe4jnXGEMKusA.jpg', 1, NULL, NULL, NULL, NULL, NULL, '2024-04-06 17:56:52', '2024-04-07 15:25:16'),
(6, '5 Bedroom flat at Ogun State.', 'Newly built five(5) bedroom flat at Abeokuta, Ogun state.', 'Ogun State', 'ZN9sQvHB6rsriQGkMGBGfQUevHZGhauJVpXTT3Be.jpg', 1, 800000.00, 7, 5, 4500, 'Abeokuta, Ogun State.', '2024-04-06 18:12:54', '2024-04-08 13:12:55'),
(7, 'New house at Magodo', 'Newly built with modern facilities', 'Lagos', 'XKYNog2gHm85tSzGGbJ3IXeawoZlutxAevp0l7eP.jpg', 1, 10000000.00, 20, 50, 5600, 'Magodo, Lagos', '2024-04-08 13:04:22', '2024-04-08 13:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `project_additional_images`
--

CREATE TABLE `project_additional_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_additional_images`
--

INSERT INTO `project_additional_images` (`id`, `project_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, 3, 'LqWkj4P51t1HK2sf9FvGiQwexSstNqBEoEgx5vIg.jpg', 1, '2024-04-06 17:41:01', '2024-04-06 17:41:01'),
(8, 3, 'pPKkqkI6WUaZlBEpoikwZ1hxfr1q0n5TsRPcIfj3.jpg', 1, '2024-04-06 17:41:01', '2024-04-06 17:41:01'),
(9, 3, 'o7OaUZTiEikO1dF2JhjvfCOCxnO5qUb6fh8ef3ub.jpg', 1, '2024-04-06 17:41:01', '2024-04-06 17:41:01'),
(10, 6, 'Se4TkVZs6rzYbAVE4PIsHiLLpydqkLVVZT2b8mJF.jpg', 1, '2024-04-06 18:14:08', '2024-04-06 18:14:08'),
(12, 6, '3hWbfyAM1GPD2YEN9abblx91qjWGBJzzxHzDMWmL.jpg', 1, '2024-04-06 18:14:08', '2024-04-06 18:14:08'),
(13, 6, 'f2PhEv9XefxXUxkbZdWfeJuirAEQYaza6S0zf9f1.jpg', 1, '2024-04-06 18:14:36', '2024-04-06 18:14:36'),
(14, 6, 'Fk77F4EfEV2tGZMzltDjjdvOdMsfOI7w3plScz4O.jpg', 1, '2024-04-06 18:14:36', '2024-04-06 18:14:36'),
(15, 5, '40navzxq6cvfLm7SWVvoRRY7PdzfNJZytvNXDBGg.jpg', 1, '2024-04-07 15:30:41', '2024-04-07 15:30:41'),
(16, 5, '60klWINvJVEhUOXo4bNa139e59AbnSSvN6lVYQIE.jpg', 1, '2024-04-07 15:30:41', '2024-04-07 15:30:41'),
(17, 5, 'l5di8ZEJLcbHnRJwKwsbVn2yHrwT4xfOnVAEQO5Y.jpg', 1, '2024-04-07 15:30:41', '2024-04-07 15:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `type`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'House Building', 'We help in building your house from the foundation to the end', 'Real estate', 'YHOe4Leg2XywAS2kKU7INEKKJIXFQxwsdUTMtebc.jpg', 1, '2024-04-06 00:12:27', '2024-04-08 13:32:03'),
(2, 'Agora', 'A social media platform', 'Mobile App Development', 'aSa4sNrov1qP0GEEkUAYnMwUTCxUwZ7OvvOpYvMF.jpg', 0, '2024-04-06 07:52:44', '2024-04-06 17:16:05'),
(4, 'Interior design', 'We help in modern interior desings', 'Interior design', 'WkFscJiJmzNRsd6TpIKETYyFI1rLfWrB2wO5AsS8.jpg', 1, '2024-04-06 17:14:50', '2024-04-08 13:27:37'),
(5, 'House Architecture', 'We help in various housing architecture', 'Real Estate', 'TS5CQeVbFLXJFno9smotKu0eWXRuRGK7LOQFZC89.jpg', 1, '2024-04-08 13:25:41', '2024-04-08 13:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uuid`, `type`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Fasanya Oluwapelumi', 'fcb450e7-6730-4b8f-b238-3fe1e2b50840', '0', 'fasanyafemi@gmail.com', NULL, '$2y$10$KuiikcqGZ6RWgc0RusSD4.jT.d1rfatD6adpCrukuDR2Sa7DzzFi.', '09058744472', NULL, '2024-04-05 12:17:22', '2024-04-05 12:17:22', NULL),
(2, 'Fasanya Pelumi', '00926eb3-faf4-4c9f-911c-80bfb04ed1d4', '0', 'fasanyafemi2@gmail.com', NULL, '$2y$10$BvX.OKqx.odSRqXXLwf9veuWMsjcjwwTlTHrjo46UwxGpIJjHwm8i', '09060068305', NULL, '2024-04-05 12:53:17', '2024-04-05 12:53:17', NULL),
(3, 'Admin', '4332aedc-96e4-4e13-b8e0-68e6a4c2db02', '0', 'admin@gmail.com', NULL, '$2y$10$BYFcYmyg9ZJ7nDb5mUX/2u/ESRk1sYeTRlhnoIHf/LpUEttEXiP3a', '09060068305', NULL, '2024-04-06 17:07:50', '2024-04-06 17:07:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_additional_images`
--
ALTER TABLE `project_additional_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_additional_images`
--
ALTER TABLE `project_additional_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
