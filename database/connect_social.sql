-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 07:09 PM
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

--
-- Truncate table before insert `ambassador_details`
--

TRUNCATE TABLE `ambassador_details`;
--
-- Dumping data for table `ambassador_details`
--

INSERT INTO `ambassador_details` (`id`, `user_id`, `about`, `city`, `state`, `relationship`, `joining`, `high_school`, `workplace`, `hobbies`, `cover_photo`, `privacy`, `network_privacy`, `created_at`, `updated_at`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'NYC', '1656703476vid.jpg', 'a:10:{s:5:\"about\";s:7:\"friends\";s:4:\"city\";s:6:\"tier-2\";s:5:\"state\";s:6:\"tier-1\";s:12:\"relationship\";s:6:\"tier-2\";s:7:\"joining\";s:6:\"public\";s:11:\"high_school\";s:6:\"public\";s:9:\"workplace\";s:7:\"friends\";s:7:\"hobbies\";s:6:\"tier-1\";s:5:\"phone\";s:7:\"friends\";s:6:\"gender\";s:6:\"tier-1\";}', 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:32:35', '2022-07-05 06:41:33'),
(2, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(3, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(4, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(5, 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(6, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(7, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(8, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(9, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(10, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(11, 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(12, 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38'),
(13, 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id libero sit orci sed vel rutrum aliquam. ', 'NYC', 'YC', 'single', '2020-01-28', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', NULL, NULL, 'a:2:{s:7:\"friends\";s:7:\"friends\";s:11:\"connections\";s:7:\"friends\";}', '2022-07-01 06:36:38', '2022-07-01 06:36:38');

--
-- Truncate table before insert `chats`
--

TRUNCATE TABLE `chats`;
--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `from`, `to`, `message`, `file`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Message test', NULL, '2022-07-05 08:13:12', '2022-07-01 07:59:34', '2022-07-05 08:13:12'),
(2, 2, 3, 'testing live messages', NULL, '2022-07-05 08:13:12', '2022-07-01 08:00:02', '2022-07-05 08:13:12'),
(3, 2, 3, '1', NULL, '2022-07-05 08:13:12', '2022-07-05 07:30:54', '2022-07-05 08:13:12'),
(4, 2, 3, '1', NULL, '2022-07-05 08:13:12', '2022-07-05 07:30:57', '2022-07-05 08:13:12'),
(5, 2, 3, '11', NULL, '2022-07-05 08:13:12', '2022-07-05 07:30:57', '2022-07-05 08:13:12'),
(6, 2, 3, '1', NULL, '2022-07-05 08:13:12', '2022-07-05 07:30:58', '2022-07-05 08:13:12'),
(7, 2, 3, '11', NULL, '2022-07-05 08:13:12', '2022-07-05 07:30:59', '2022-07-05 08:13:12'),
(8, 2, 3, '1', NULL, '2022-07-05 08:13:12', '2022-07-05 07:31:00', '2022-07-05 08:13:12'),
(9, 2, 3, '11', NULL, '2022-07-05 08:13:12', '2022-07-05 07:31:00', '2022-07-05 08:13:12'),
(10, 2, 3, '1', NULL, '2022-07-05 08:13:12', '2022-07-05 07:31:01', '2022-07-05 08:13:12'),
(11, 2, 3, '11', NULL, '2022-07-05 08:13:12', '2022-07-05 07:31:02', '2022-07-05 08:13:12'),
(12, 2, 3, '1', NULL, '2022-07-05 08:13:12', '2022-07-05 07:31:03', '2022-07-05 08:13:12'),
(13, 2, 3, '11', NULL, '2022-07-05 08:13:13', '2022-07-05 07:31:03', '2022-07-05 08:13:13'),
(14, 2, 3, '111', NULL, '2022-07-05 08:13:13', '2022-07-05 07:31:04', '2022-07-05 08:13:13'),
(15, 2, 9, 'dfdfg', NULL, NULL, '2022-07-05 07:35:10', '2022-07-05 07:35:10');

--
-- Truncate table before insert `comments`
--

TRUNCATE TABLE `comments`;
--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 9, 39, 'Comment @ 001', '2022-07-05 13:29:50', '2022-07-05 13:29:50');

--
-- Truncate table before insert `connections`
--

TRUNCATE TABLE `connections`;
--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`id`, `from`, `to`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 12, '1', NULL, '2022-07-01 08:58:14', '2022-07-01 08:58:14'),
(2, 2, 14, '1', NULL, '2022-07-01 08:58:24', '2022-07-01 08:58:24'),
(3, 2, 13, '1', NULL, '2022-07-01 08:59:18', '2022-07-01 08:59:18');

--
-- Truncate table before insert `failed_jobs`
--

TRUNCATE TABLE `failed_jobs`;
--
-- Truncate table before insert `friends`
--

TRUNCATE TABLE `friends`;
--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `from`, `to`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 9, '1', NULL, '2022-07-01 08:56:45', '2022-07-01 08:56:45'),
(2, 2, 10, '1', NULL, '2022-07-01 08:56:51', '2022-07-01 08:56:51'),
(3, 2, 11, '1', NULL, '2022-07-01 08:56:57', '2022-07-01 08:56:57');

--
-- Truncate table before insert `likes`
--

TRUNCATE TABLE `likes`;
--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`) VALUES
(5, 40, 2);

--
-- Truncate table before insert `migrations`
--

TRUNCATE TABLE `migrations`;
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
(15, '2022_06_24_133829_create_chats_table', 1),
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_06_15_124605_create_roles_table', 1),
(21, '2022_06_15_144850_create_permissions_table', 1),
(22, '2022_06_16_131529_create_referrals_table', 1),
(23, '2022_06_17_163404_create_ambassador_details_table', 1),
(24, '2022_06_17_183030_create_posts_table', 1),
(25, '2022_06_17_183327_create_post_assets_table', 1),
(26, '2022_06_20_182554_create_comments_table', 1),
(27, '2022_06_21_175153_create_likes_table', 1),
(28, '2022_06_23_140815_create_friends_table', 1),
(29, '2022_06_23_161104_create_connections_table', 1),
(30, '2022_06_24_133829_create_chats_table', 1);

--
-- Truncate table before insert `password_resets`
--

TRUNCATE TABLE `password_resets`;
--
-- Truncate table before insert `permissions`
--

TRUNCATE TABLE `permissions`;
--
-- Truncate table before insert `personal_access_tokens`
--

TRUNCATE TABLE `personal_access_tokens`;
--
-- Truncate table before insert `posts`
--

TRUNCATE TABLE `posts`;
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

--
-- Truncate table before insert `post_assets`
--

TRUNCATE TABLE `post_assets`;
--
-- Truncate table before insert `referrals`
--

TRUNCATE TABLE `referrals`;
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

--
-- Truncate table before insert `roles`
--

TRUNCATE TABLE `roles`;
--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', '2022-06-14 12:46:58', '2022-06-14 12:46:58'),
(2, 'Merchant', 'merchant', '2022-06-14 20:48:31', '2022-06-14 20:48:31'),
(3, 'Ambassador', 'ambassador', '2022-06-14 20:48:42', '2022-06-14 20:48:42'),
(4, 'Admin', 'admin', '2022-06-14 20:48:53', '2022-06-14 20:48:53'),
(5, 'Super Admin', 'super-admins', '2022-06-14 12:46:58', '2022-06-14 12:46:58'),
(6, 'Merchant', 'merchants', '2022-06-14 20:48:31', '2022-06-14 20:48:31'),
(7, 'Ambassador', 'ambassadors', '2022-06-14 20:48:42', '2022-06-14 20:48:42');

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `country_code`, `phone`, `email_verified_at`, `password`, `gender`, `role`, `email_code`, `phone_code`, `profile`, `email_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', 'super_admin', 'superadmin@connectsocial.com', '+92', '3001231231', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 1, NULL, NULL, 'super-admin.jpg', NULL, NULL, '2022-06-12 05:37:13', '2022-06-12 05:37:13'),
(2, 'Parent', 'Tier', 'tier00', 'tier00@connectsocial.com', '+1', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '667966', '799931', '1656675151blank-profile-picture-973460_640.png', NULL, NULL, '2022-06-30 20:32:35', '2022-06-30 20:33:09'),
(3, 'Tier1', 'A', 'tier01a', 'tier01_a@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(4, 'Tier1', 'B', 'tier01b', 'tier01_b@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(5, 'Tier1', 'C', 'tier01c', 'tier01_c@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(6, 'Tier2', 'A', 'tier02a', 'tier02_a@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(7, 'Tier2', 'B', 'tier02b', 'tier02_b@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(8, 'Tier2', 'C', 'tier02c', 'tier02_c@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(9, 'Friend', 'A', 'friend_a', 'friend_a@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(10, 'Friend', 'B', 'friend_b', 'friend_b@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(11, 'Friend', 'C', 'friend_c', 'friend_c@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(12, 'Connections', 'A', 'connections_a', 'connections_a@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(13, 'Connections', 'B', 'connections_b', 'connections_b@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38'),
(14, 'Connections', 'C', 'connections_c', 'connections_c@connectsocial.com', '+92', '3040647306', '2022-06-12 05:37:13', '$2y$10$v1bbz8LrbsLpvZPXNwBpkuqv3ZKZImxkCgGvq2cAUHzoga2wX8vNm', 'male', 3, '930531', '964523', '1656675394blank-profile-picture-973460_640.png', NULL, NULL, '2022-07-01 01:36:38', '2022-07-01 01:36:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
