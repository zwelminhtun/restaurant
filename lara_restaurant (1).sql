-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 10:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Simple Poached Egg and Avocado Toast', 'Avocado toast is all the rage, but adding a poached egg takes it to a new level and completes the trifecta of nutrition: protein, fats, and carbs. Parmesan cheese and fresh herbs sprinkled on top make it look and taste fancy.', '/image/scrambledegg.jpg', '2020-02-27 08:56:58', '2020-02-27 08:56:58'),
(9, 'Cheddar-Garlic Grits with Fried Eggs', 'A Southern classic, cheesy grits don’t have to be a complete fat and calorie bomb. Cook them in water rather than milk and omit the butter. But keep the cheddar: The 2 tablespoons per serving here keeps the dish gooey and rich and provides almost 10 percent of your daily calcium.\r\n\r\nThen add eggs for staying power, chopped chives for their slightly oniony flavor, and garlic, which makes everything taste better.', '/image/eggsalad1.jpg', '2020-02-27 08:57:47', '2020-02-27 08:57:47'),
(10, 'Hot Quinoa Cereal', 'Fabulous as it is, quinoa takes some time to cook. While some people have said it can be nuked, that takes more than 10 minutes in most microwaves. But quinoa flakes, which are similar to oats but are a complete protein, can be ready in a flash.\r\n\r\nCook them in your preferred milk with dried berries, and then top away with nuts, nut butter, seeds, and fresh fruit.', '/image/egg5.jpg', '2020-02-27 08:59:01', '2020-02-27 08:59:01'),
(11, 'Mediterranean Panzanella', 'Rather than top a salad with bagged croutons, whip up this Tuscan version with toasted pita bread.\r\n\r\nThere’s the usual good-alone-but-better-together suspects expected in something called “Mediterranean”: tomatoes, cucumbers, feta, and olives. The olives are key since the fats in them help your body absorb the nutrients in the veggies.', '/image/salad1.jpeg', '2020-02-27 08:59:50', '2020-02-27 08:59:50'),
(12, 'Crunchy Asian Ramen Noodle Salad', 'This colorful, crunchy salad is just what the doctor ordered when leafy-greens-based varieties are boring you.\r\n\r\nCrunchy coleslaw mix and dried ramen noodles (swap in crunchy rice noodles for a less-processed option) are tossed with avocado for healthy fat, edamame for protein, and mango for vision-protecting beta-carotene.', '/image/broccoli1.jlpg.jpg', '2020-02-27 09:01:05', '2020-02-27 09:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Juice', '2020-02-27 03:04:34', '2020-02-27 03:04:34'),
(2, 'Salad', '2020-02-27 06:05:44', '2020-02-27 06:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memberid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `category_id`, `image`, `price`, `created_at`, `updated_at`) VALUES
(4, 'Orange Juice', '1', '/image/orange3.jpg', 2000, '2020-02-27 06:55:54', '2020-02-27 07:03:27'),
(7, 'Apple Juice', '1', '/image/apple4.jpg', 2000, '2020-02-27 08:45:28', '2020-02-27 08:45:28'),
(8, 'Banana Juice', '1', '/image/banana.jpg', 1600, '2020-02-27 08:45:57', '2020-02-27 08:45:57'),
(9, 'Mango Juice', '1', '/image/mango5.jpg', 2000, '2020-02-27 08:46:29', '2020-02-27 08:46:29'),
(10, 'Strawberry Juice', '1', '/image/strawberry3.jpg', 3000, '2020-02-27 08:47:10', '2020-02-27 08:47:10'),
(11, 'Water melon Juice', '1', '/image/watermelon.jpg', 2000, '2020-02-27 08:47:59', '2020-02-27 08:47:59'),
(12, 'Tomato Juice', '1', '/image/tomato4.jpg', 1300, '2020-02-27 08:48:35', '2020-02-27 08:48:35'),
(13, 'Avocado Juice', '1', '/image/avocado.jpg', 3000, '2020-02-27 08:50:07', '2020-02-27 08:50:07'),
(14, 'Lemon Juice', '1', '/image/lemon2.jpg', 1600, '2020-02-27 08:50:28', '2020-02-27 08:50:28'),
(15, 'Grape Juice', '1', '/image/grape4.jpg', 3000, '2020-02-27 08:51:58', '2020-02-27 08:51:58'),
(16, 'Coconut Juice', '1', '/image/coconut1.jpg', 2000, '2020-02-27 08:52:37', '2020-02-27 08:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_09_193150_create_categories_table', 1),
(4, '2020_02_09_193408_create_menus_table', 1),
(5, '2020_02_10_034943_create_customers_table', 1),
(6, '2020_02_10_205459_create_feedback_table', 1),
(7, '2020_02_26_053306_create_blogs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hlaing Phoo Wai', 'admin@gmail.com', NULL, '$2y$10$8fa78t41eEOm8QDQxD7wMu1j3ptAaZgtMVKeP0py9kobCxeZ74xDC', NULL, '2020-02-26 13:37:25', '2020-02-27 09:34:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
