-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 07:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connect_social`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Users` ()  DETERMINISTIC COMMENT 'e' BEGIN
    TRUNCATE `users`;

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `country_code`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `email_code`, `phone_code`, `profile`, `email_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super_admin', 'superadmin@connectsocial.com', '+92', '3001231231', '2022-06-13 06:37:13', '$2y$10$D4qxG3pfH3FkDbbkyGKRi.qdGdi0DcwKlqnnLKB6jtdW.c2fGj/.G', 'male', 1, NULL, NULL, 'super-admin.jpg', NULL, NULL, '2022-06-13 06:37:13', '2022-06-13 06:37:13'),
(2, 'Jeff', 'Dyck', 'connectsocial', 'superambassador@connectsocial.com', '+1', '3459133777', '2022-06-16 08:43:27', '$2y$10$LCm8LOUFWokk5jf9FUX1l.zd.6epYzsu784Vc3xXBlko40vLE6OC.', 'male', 2, '912928', '636228', '1655404945super-admin.jpg', NULL, NULL, '2022-06-16 08:42:29', '2022-06-16 08:43:27'),
(3, 'Muhammad', 'Azeem', 'emazeem07', 'emazeem07@gmail.com', '+92', '3040647306', '2022-06-17 12:14:42', '$2y$10$ihHvXI.s1XIEhcVqH0GpDuuj2gSF04ZLveRHD4A7lLUt9S9Et0aY2', 'male', 3, '267658', '150340', '16554860501655392296bg-01.png', NULL, NULL, '2022-06-17 12:14:14', '2022-06-17 12:14:42');

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ambassador_details`
--

CREATE TABLE `ambassador_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `about` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NYC',
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'YC',
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'single',
  `joining` date NOT NULL DEFAULT '2020-01-28',
  `high_school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Lorem Ipsum',
  `workplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Lorem Ipsum',
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Lorem Ipsum',
  `cover_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ambassador_details`
--

INSERT INTO `ambassador_details` (`id`, `user_id`, `about`, `city`, `state`, `relationship`, `joining`, `high_school`, `workplace`, `hobbies`, `cover_photo`, `privacy`, `created_at`, `updated_at`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'NYC', '1656703476vid.jpg', 'a:10:{s:5:\"about\";s:7:\"friends\";s:4:\"city\";s:11:\"connections\";s:5:\"state\";s:6:\"tier-1\";s:12:\"relationship\";s:6:\"tier-2\";s:7:\"joining\";s:6:\"public\";s:11:\"high_school\";s:6:\"public\";s:9:\"workplace\";s:7:\"friends\";s:7:\"hobbies\";s:6:\"tier-1\";s:5:\"phone\";s:7:\"friends\";s:6:\"gender\";s:6:\"tier-1\";}', '2022-07-01 06:32:35', '2022-07-04 11:23:35'),
(2, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(3, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(4, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(5, 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(6, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(7, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(8, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(9, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(10, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(11, 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(12, 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(13, 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `message` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `from`, `to`, `message`, `file`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Message test', NULL, '2022-07-01 09:35:20', '2022-07-01 07:59:34', '2022-07-01 09:35:20'),
(2, 2, 3, 'testing live messages', NULL, '2022-07-01 09:35:20', '2022-07-01 08:00:02', '2022-07-01 09:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'Comment @ 001', '2022-07-01 11:38:12', '2022-07-01 11:38:12'),
(2, 2, 4, 'Comment @ 002', '2022-07-01 11:38:15', '2022-07-01 11:38:15'),
(3, 2, 4, 'Comment @ 003', '2022-07-01 11:38:18', '2022-07-01 11:38:18'),
(4, 2, 4, 'Comment @ 004', '2022-07-01 11:38:20', '2022-07-01 11:38:20'),
(5, 2, 4, 'Comment @ 005', '2022-07-01 11:38:23', '2022-07-01 11:38:23'),
(6, 2, 4, 'Testing post from Parent Tier (tier00@connectsocial.com) with privacy of tier-1', '2022-07-01 11:44:08', '2022-07-01 11:44:08'),
(7, 2, 4, 'Comment @ 006', '2022-07-01 11:54:44', '2022-07-01 11:54:44'),
(8, 2, 4, 'Comment @ 006', '2022-07-01 11:54:52', '2022-07-01 11:54:52'),
(9, 2, 4, 'Comment @ 007', '2022-07-01 11:56:55', '2022-07-01 11:56:55'),
(10, 2, 4, 'Comment @ 008', '2022-07-01 11:57:00', '2022-07-01 11:57:00'),
(11, 2, 4, 'Comment @ 007', '2022-07-01 12:00:24', '2022-07-01 12:00:24'),
(12, 2, 4, 'Comment @ 006', '2022-07-01 12:00:29', '2022-07-01 12:00:29'),
(13, 2, 4, 'Comment @ 001', '2022-07-01 12:00:53', '2022-07-01 12:00:53'),
(14, 2, 5, 'Comment @ 001', '2022-07-01 12:42:02', '2022-07-01 12:42:02'),
(15, 2, 5, 'Comment @ 002', '2022-07-01 12:42:20', '2022-07-01 12:42:20'),
(16, 2, 5, 'Comment @ 003', '2022-07-01 12:42:27', '2022-07-01 12:42:27'),
(17, 2, 4, 'Comment @ 001', '2022-07-01 12:48:07', '2022-07-01 12:48:07'),
(18, 2, 3, '0000', '2022-07-01 14:25:51', '2022-07-01 14:25:51'),
(19, 2, 3, '0000', '2022-07-01 14:25:54', '2022-07-01 14:25:54'),
(20, 2, 3, '0000', '2022-07-01 14:25:56', '2022-07-01 14:25:56'),
(21, 2, 3, '0000', '2022-07-01 14:25:56', '2022-07-01 14:25:56'),
(22, 2, 3, '0000', '2022-07-01 14:25:57', '2022-07-01 14:25:57'),
(23, 2, 3, '0000', '2022-07-01 14:25:57', '2022-07-01 14:25:57'),
(24, 2, 3, '0000', '2022-07-01 14:25:58', '2022-07-01 14:25:58'),
(25, 2, 3, '0000', '2022-07-01 14:25:59', '2022-07-01 14:25:59'),
(26, 2, 3, '0000', '2022-07-01 14:25:59', '2022-07-01 14:25:59'),
(27, 2, 3, '0000', '2022-07-01 14:26:00', '2022-07-01 14:26:00'),
(28, 2, 3, '0000', '2022-07-01 14:26:01', '2022-07-01 14:26:01'),
(29, 2, 3, '0000', '2022-07-01 14:26:01', '2022-07-01 14:26:01'),
(30, 2, 3, '0000', '2022-07-01 14:26:02', '2022-07-01 14:26:02'),
(31, 2, 3, '0000', '2022-07-01 14:26:02', '2022-07-01 14:26:02'),
(32, 2, 3, '0000', '2022-07-01 14:26:03', '2022-07-01 14:26:03'),
(33, 2, 3, 'hiii', '2022-07-01 14:26:12', '2022-07-01 14:26:12'),
(34, 2, 3, '0000', '2022-07-01 14:26:27', '2022-07-01 14:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE `connections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`id`, `from`, `to`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 12, '1', NULL, '2022-07-01 08:58:14', '2022-07-01 08:58:14'),
(2, 2, 14, '1', NULL, '2022-07-01 08:58:24', '2022-07-01 08:58:24'),
(3, 2, 13, '1', NULL, '2022-07-01 08:59:18', '2022-07-01 08:59:18');

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
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `from`, `to`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 9, '1', NULL, '2022-07-01 08:56:45', '2022-07-01 08:56:45'),
(2, 2, 10, '1', NULL, '2022-07-01 08:56:51', '2022-07-01 08:56:51'),
(3, 2, 11, '1', NULL, '2022-07-01 08:56:57', '2022-07-01 08:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`) VALUES
(4, 3, 2),
(6, 39, 2);

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
(5, '2022_06_15_124605_create_roles_table', 1),
(6, '2022_06_15_144850_create_permissions_table', 1),
(7, '2022_06_16_131529_create_referrals_table', 1),
(8, '2022_06_17_163404_create_ambassador_details_table', 1),
(9, '2022_06_17_183030_create_posts_table', 1),
(10, '2022_06_17_183327_create_post_assets_table', 1),
(11, '2022_06_20_182554_create_comments_table', 1),
(12, '2022_06_21_175153_create_likes_table', 1),
(13, '2022_06_23_140815_create_friends_table', 1),
(14, '2022_06_23_161104_create_connections_table', 1),
(15, '2022_06_24_133829_create_chats_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `details` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'friends',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `details`, `privacy`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Testing post from Parent Tier (tier00@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(2, 2, 'Testing post from Parent Tier (tier00@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(3, 2, 'Testing post from Parent Tier (tier00@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'),
(4, 2, 'UPDATES Testing post from Parent Tier (tier00@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-09 05:12:10', '2022-07-01 13:12:58'),
(5, 2, 'Testing post from Parent Tier (tier00@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(6, 3, 'Testing post from Tier1 A (tier01_a@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(7, 3, 'Testing post from Tier1 A (tier01_a@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(8, 3, 'Testing post from Tier1 A (tier01_a@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(9, 3, 'Testing post from Tier1 A (tier01_a@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'),
(10, 3, 'Testing post from Tier1 A (tier01_a@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(11, 4, 'Testing post from Tier1 B (tier01_b@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(12, 4, 'Testing post from Tier1 B (tier01_b@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(13, 4, 'Testing post from Tier1 B (tier01_b@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(14, 4, 'Testing post from Tier1 B (tier01_b@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(15, 4, 'Testing post from Tier1 B (tier01_b@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(16, 5, 'Testing post from Tier1 C (tier01_c@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'),
(17, 5, 'Testing post from Tier1 C (tier01_c@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(18, 5, 'Testing post from Tier1 C (tier01_c@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'),
(19, 5, 'Testing post from Tier1 C (tier01_c@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(20, 5, 'Testing post from Tier1 C (tier01_c@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'),
(21, 6, 'Testing post from Tier2 A (tier02_a@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(22, 6, 'Testing post from Tier2 A (tier02_a@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(23, 6, 'Testing post from Tier2 A (tier02_a@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(24, 6, 'Testing post from Tier2 A (tier02_a@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(25, 6, 'Testing post from Tier2 A (tier02_a@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(26, 7, 'Testing post from Tier2 B (tier02_b@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'),
(27, 7, 'Testing post from Tier2 B (tier02_b@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'),
(28, 7, 'Testing post from Tier2 B (tier02_b@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(29, 7, 'Testing post from Tier2 B (tier02_b@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(30, 7, 'Testing post from Tier2 B (tier02_b@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(31, 8, 'Testing post from Tier2 C (tier02_c@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(32, 8, 'Testing post from Tier2 C (tier02_c@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(33, 8, 'Testing post from Tier2 C (tier02_c@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(34, 8, 'Testing post from Tier2 C (tier02_c@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(35, 8, 'Testing post from Tier2 C (tier02_c@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(36, 9, 'Testing post from Friend A (friend_a@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(37, 9, 'Testing post from Friend A (friend_a@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(38, 9, 'Testing post from Friend A (friend_a@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(39, 9, 'Testing post from Friend A (friend_a@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'),
(40, 9, 'Testing post from Friend A (friend_a@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(41, 10, 'Testing post from Friend B (friend_b@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(42, 10, 'Testing post from Friend B (friend_b@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(43, 10, 'Testing post from Friend B (friend_b@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(44, 10, 'Testing post from Friend B (friend_b@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(45, 10, 'Testing post from Friend B (friend_b@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(46, 11, 'Testing post from Friend C (friend_c@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(47, 11, 'Testing post from Friend C (friend_c@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(48, 11, 'Testing post from Friend C (friend_c@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(49, 11, 'Testing post from Friend C (friend_c@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-06 05:12:10', '2022-07-01 05:12:10'),
(50, 11, 'Testing post from Friend C (friend_c@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10'),
(51, 12, 'Testing post from Connections A (connections_a@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(52, 12, 'Testing post from Connections A (connections_a@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(53, 12, 'Testing post from Connections A (connections_a@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'),
(54, 12, 'Testing post from Connections A (connections_a@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(55, 12, 'Testing post from Connections A (connections_a@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'),
(56, 13, 'Testing post from Connections B (connections_b@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-09 05:12:10', '2022-07-01 05:12:10'),
(57, 13, 'Testing post from Connections B (connections_b@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-07 05:12:10', '2022-07-01 05:12:10'),
(58, 13, 'Testing post from Connections B (connections_b@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-03 05:12:10', '2022-07-01 05:12:10'),
(59, 13, 'Testing post from Connections B (connections_b@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(60, 13, 'Testing post from Connections B (connections_b@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-08 05:12:10', '2022-07-01 05:12:10'),
(61, 14, 'Testing post from Connections C (connections_c@connectsocial.com) with privacy of friends', 'friends', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(62, 14, 'Testing post from Connections C (connections_c@connectsocial.com) with privacy of public', 'public', NULL, '2022-07-02 05:12:10', '2022-07-01 05:12:10'),
(63, 14, 'Testing post from Connections C (connections_c@connectsocial.com) with privacy of connections', 'connections', NULL, '2022-07-01 05:12:10', '2022-07-01 05:12:10'),
(64, 14, 'Testing post from Connections C (connections_c@connectsocial.com) with privacy of tier-1', 'tier-1', NULL, '2022-07-05 05:12:10', '2022-07-01 05:12:10'),
(65, 14, 'Testing post from Connections C (connections_c@connectsocial.com) with privacy of tier-2', 'tier-2', NULL, '2022-07-04 05:12:10', '2022-07-01 05:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `post_assets`
--

CREATE TABLE `post_assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referred_by` int(11) NOT NULL,
  `referred_to` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `referred_by`, `referred_to`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(2, 2, 4, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(3, 2, 5, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(4, 3, 6, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(5, 3, 7, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(6, 3, 8, '2022-07-01 06:36:38', '2022-07-01 06:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-06-14 12:46:58', '2022-06-14 12:46:58'),
(2, 'Merchant', 'merchant', '2022-06-14 20:48:31', '2022-06-14 20:48:31'),
(3, 'Ambassador', 'ambassador', '2022-06-14 20:48:42', '2022-06-14 20:48:42'),
(4, 'Admin', 'admin', '2022-06-14 20:48:53', '2022-06-14 20:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `country_code`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `email_code`, `phone_code`, `profile`, `email_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super_admin', 'superadmin@connectsocial.com', '+92', '3001231231', '2022-06-12 10:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 1, NULL, NULL, 'super-admin.jpg', NULL, NULL, '2022-06-12 10:37:13', '2022-06-12 10:37:13'),
(2, 'Parent', 'Tier', 'tier00', 'tier00@connectsocial.com', '+1', '3040647306', '2022-06-12 10:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '667966', '799931', '1656675151blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:32:35', '2022-07-01 01:33:09'),
(3, 'Tier1', 'A', 'tier01a', 'tier01_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(4, 'Tier1', 'B', 'tier01b', 'tier01_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(5, 'Tier1', 'C', 'tier01c', 'tier01_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(6, 'Tier2', 'A', 'tier02a', 'tier02_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(7, 'Tier2', 'B', 'tier02b', 'tier02_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(8, 'Tier2', 'C', 'tier02c', 'tier02_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(9, 'Friend', 'A', 'friend_a', 'friend_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(10, 'Friend', 'B', 'friend_b', 'friend_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(11, 'Friend', 'C', 'friend_c', 'friend_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(12, 'Connections', 'A', 'connections_a', 'connections_a@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(13, 'Connections', 'B', 'connections_b', 'connections_b@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(14, 'Connections', 'C', 'connections_c', 'connections_c@connectsocial.com', '+92', '3040647306', '2022-06-12 10:37:13', '$2y$10$4sa/IPO2sYe4EqukzhEemea1H1BaJD/IfQgeXcj7Vf1FCjh7kvclO', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 06:36:38', '2022-07-01 06:36:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambassador_details`
--
ALTER TABLE `ambassador_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_assets`
--
ALTER TABLE `post_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `ambassador_details`
--
ALTER TABLE `ambassador_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `connections`
--
ALTER TABLE `connections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `post_assets`
--
ALTER TABLE `post_assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
