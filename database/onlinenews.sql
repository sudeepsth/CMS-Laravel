-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 06:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinenews`
--

-- --------------------------------------------------------

--
-- Table structure for table `delete_post`
--

CREATE TABLE `delete_post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delete_post`
--

INSERT INTO `delete_post` (`id`, `user_id`, `post_id`) VALUES
(15, 2, 42),
(16, 2, 43),
(17, 2, 44),
(18, 2, 45);

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
(1, '2017_12_20_144017_create_rel_post_newscategory_table', 0),
(2, '2017_12_20_144017_create_tbl_admin_users_table', 0),
(3, '2017_12_20_144017_create_tbl_events_table', 0),
(4, '2017_12_20_144017_create_tbl_newscategory_table', 0),
(5, '2017_12_20_144017_create_tbl_posts_table', 0),
(6, '2017_12_24_155453_create_post_users_table', 0),
(7, '2017_12_24_155453_create_rel_post_newscategory_table', 0),
(8, '2017_12_24_155453_create_tbl_admin_users_table', 0),
(9, '2017_12_24_155453_create_tbl_events_table', 0),
(10, '2017_12_24_155453_create_tbl_newscategory_table', 0),
(11, '2017_12_24_155453_create_tbl_posts_table', 0),
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2015_07_22_123254_alter_users_table', 2),
(21, '2017_12_27_025047_create_notifications_table', 1),
(22, '2015_07_22_115516_create_ticketit_tables', 3),
(23, '2015_09_29_123456_add_completed_at_column_to_ticketit_table', 3),
(24, '2015_10_08_123457_create_settings_table', 3),
(25, '2016_01_15_002617_add_htmlcontent_to_ticketit_and_comments', 3),
(26, '2016_01_15_040207_enlarge_settings_columns', 3),
(27, '2016_01_15_120557_add_indexes', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('fd48b890-c217-406a-9506-29fb3af6d499', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:07:49', '2018-02-27 21:12:27'),
('1fee15ed-634e-40d3-b3bd-dbbbb0a1f1c5', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:07:55', '2017-12-30 10:07:50', '2017-12-30 10:07:55'),
('9ec17025-f7b8-4511-86a2-0f22c8448f44', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:07:51', '2018-09-25 19:54:34'),
('6cb7868f-b9ea-4747-b3cb-046e5fabbbc6', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep added the post aaaa\"}', '2018-02-27 21:12:27', '2017-12-30 10:31:53', '2018-02-27 21:12:27'),
('9ccd94e5-1499-48a1-9754-5f49152737c4', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep added the post aaaa\"}', '2017-12-30 10:31:59', '2017-12-30 10:31:54', '2017-12-30 10:31:59'),
('328f9bf3-1de1-4edc-b10b-e8bd21733d34', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep added the post aaaa\"}', '2018-09-25 19:54:34', '2017-12-30 10:31:54', '2018-09-25 19:54:34'),
('021a99ba-b5cf-4916-9b92-add79e2f9ac9', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:32:03', '2018-02-27 21:12:27'),
('e159874b-4e85-4e3e-8651-e46e60c0a57e', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:32:28', '2017-12-30 10:32:03', '2017-12-30 10:32:28'),
('f098624b-ee87-415d-b902-f6d4b20d1dbe', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:32:04', '2018-09-25 19:54:34'),
('2b9402e4-720b-48ab-9fcc-086932da1d3f', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:32:23', '2018-02-27 21:12:27'),
('3f0b9b52-82ec-49fa-aece-2b8dbc2668ed', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:32:28', '2017-12-30 10:32:23', '2017-12-30 10:32:28'),
('f285b17a-6f25-49f4-be76-667c4c1b1b85', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:32:24', '2018-09-25 19:54:34'),
('12cf8350-9f31-470b-b26e-d1a04c212827', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep added the post aaaaa\"}', '2018-02-27 21:12:27', '2017-12-30 10:33:41', '2018-02-27 21:12:27'),
('ba926d2d-f921-4f23-9578-9f802e8221c1', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep added the post aaaaa\"}', '2017-12-30 10:34:21', '2017-12-30 10:33:42', '2017-12-30 10:34:21'),
('43c0b549-c5fe-44a5-8459-b775b32dfeb9', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep added the post aaaaa\"}', '2018-09-25 19:54:34', '2017-12-30 10:33:42', '2018-09-25 19:54:34'),
('9de6d06a-4e3a-4d14-ba51-3a60c1e04e4a', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep added the post aaaaaaa\"}', '2018-02-27 21:12:27', '2017-12-30 10:33:52', '2018-02-27 21:12:27'),
('e187e8b8-8c89-4705-960a-17886239fb16', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep added the post aaaaaaa\"}', '2017-12-30 10:34:21', '2017-12-30 10:33:52', '2017-12-30 10:34:21'),
('e97170eb-164b-45fb-8c0c-21fc166de1da', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep added the post aaaaaaa\"}', '2018-09-25 19:54:34', '2017-12-30 10:33:53', '2018-09-25 19:54:34'),
('d408a671-ff36-4a69-9f80-c01eb70e4ccd', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep added the post aaaasasa\"}', '2018-02-27 21:12:27', '2017-12-30 10:34:04', '2018-02-27 21:12:27'),
('d91083f0-1be9-424c-ba70-0f857fbefd28', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep added the post aaaasasa\"}', '2017-12-30 10:34:21', '2017-12-30 10:34:04', '2017-12-30 10:34:21'),
('76719c44-22cd-46a1-b9e6-f32e8789fa50', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep added the post aaaasasa\"}', '2018-09-25 19:54:34', '2017-12-30 10:34:05', '2018-09-25 19:54:34'),
('78021010-a48a-4de0-837b-7be1ac05e94a', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:34:09', '2018-02-27 21:12:27'),
('1da668f5-7cf0-4f8d-ab02-0cec78d350b1', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:34:21', '2017-12-30 10:34:10', '2017-12-30 10:34:21'),
('c3c722f3-a201-4b79-86c1-0de0fb2a445f', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:34:10', '2018-09-25 19:54:34'),
('af5c3d63-2bc0-4962-82a6-dca2ece2d59f', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:34:14', '2018-02-27 21:12:27'),
('3c2bed0d-9938-4c0a-b5b4-8b1127435f3a', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:34:21', '2017-12-30 10:34:14', '2017-12-30 10:34:21'),
('00a4cb35-4745-4421-917c-acc3561848dc', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:34:15', '2018-09-25 19:54:34'),
('cc16629f-bfcb-49ad-b938-906f2e07125b', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:34:18', '2018-02-27 21:12:27'),
('fe8502ce-eb22-4ee0-aac7-cd99679cbbbf', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:34:21', '2017-12-30 10:34:18', '2017-12-30 10:34:21'),
('a8a86401-d16d-4250-95ea-e33e4765c8e0', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:34:19', '2018-09-25 19:54:34'),
('7da3b08e-ef22-4a4c-b4c8-ccc618dd0db0', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:34:53', '2018-02-27 21:12:27'),
('cb50913c-d07d-45f2-951a-54b446afd59d', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:35:08', '2017-12-30 10:34:54', '2017-12-30 10:35:08'),
('c3ec7d29-cddc-4f38-9b51-13d2a61c2cad', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:34:54', '2018-09-25 19:54:34'),
('bb26d5e3-cf72-40f8-bde1-feb4aabdd1fd', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:34:57', '2018-02-27 21:12:27'),
('8129cb1e-b4ff-40d8-b700-7a5cfaa087c3', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:35:08', '2017-12-30 10:34:58', '2017-12-30 10:35:08'),
('0655b612-0b1d-490d-bc4c-2c90d79e5208', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:34:58', '2018-09-25 19:54:34'),
('7d3a68de-9313-4699-95b9-c782cbe8ff46', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:35:02', '2018-02-27 21:12:27'),
('2fdffef5-1253-4bbb-822e-fc451ef3775a', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:35:08', '2017-12-30 10:35:02', '2017-12-30 10:35:08'),
('e9e73e45-e3b4-4d0b-9140-51a68a537379', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:35:02', '2018-09-25 19:54:34'),
('a0bcef55-b78d-4f2e-9c21-a9d7a7c17c49', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2017-12-30 10:35:06', '2018-02-27 21:12:27'),
('1c7d0581-211c-491f-a2be-0893d06aed95', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2017-12-30 10:35:08', '2017-12-30 10:35:06', '2017-12-30 10:35:08'),
('69cf6a29-5c8a-4cb7-94d4-bc38a1585d24', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2017-12-30 10:35:07', '2018-09-25 19:54:34'),
('630a1aa7-09fc-4f4a-8e37-339ab52129ca', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep added the post ABC\"}', '2018-02-27 21:12:27', '2018-01-15 00:38:43', '2018-02-27 21:12:27'),
('2c3f0525-9ee6-4e36-88c2-6efbc92e5654', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep added the post ABC\"}', '2018-01-15 00:38:57', '2018-01-15 00:38:44', '2018-01-15 00:38:57'),
('78260e64-c7c7-47af-be4c-3dea4ec1d777', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep added the post ABC\"}', '2018-09-25 19:54:34', '2018-01-15 00:38:44', '2018-09-25 19:54:34'),
('342a2561-8638-4a23-87a1-6489b2bc2658', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-02-27 21:12:27', '2018-01-15 00:38:51', '2018-02-27 21:12:27'),
('432d7134-93ef-4975-89c0-c07c2c306994', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-01-15 00:38:57', '2018-01-15 00:38:52', '2018-01-15 00:38:57'),
('3f1d4899-552b-4b24-a749-3d1c842c41ae', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep deleted the post \"}', '2018-09-25 19:54:34', '2018-01-15 00:38:52', '2018-09-25 19:54:34'),
('92e0d995-9c83-49b4-a661-023bd893c2f9', 'App\\Notifications\\AdminNotification', 1, 'App\\User', '{\"data\":\"sudeep shrestha added the post How diet can affect mental health: the likely link...\"}', '2018-09-06 22:15:50', '2018-02-27 21:40:07', '2018-09-06 22:15:50'),
('9e23f2c1-aca0-406e-ac8c-e1ef3e1aedb8', 'App\\Notifications\\AdminNotification', 2, 'App\\User', '{\"data\":\"sudeep shrestha added the post How diet can affect mental health: the likely link...\"}', NULL, '2018-02-27 21:40:08', '2018-02-27 21:40:08'),
('f8c55969-368c-4e83-a171-8913f923979e', 'App\\Notifications\\AdminNotification', 15, 'App\\User', '{\"data\":\"sudeep shrestha added the post How diet can affect mental health: the likely link...\"}', '2018-09-25 19:54:34', '2018-02-27 21:40:08', '2018-09-25 19:54:34');

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
-- Table structure for table `post_users`
--

CREATE TABLE `post_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_users`
--

INSERT INTO `post_users` (`id`, `user_id`, `post_id`) VALUES
(5, 2, 8),
(6, 2, 5),
(7, 2, 2),
(8, 2, 3),
(9, 2, 4),
(16, 2, 6),
(20, 2, 21),
(55, 2, 42),
(56, 2, 43),
(57, 2, 44),
(58, 2, 45),
(59, 2, 46),
(60, 1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `education` varchar(256) DEFAULT NULL,
  `about` text,
  `user_id` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `image`, `education`, `about`, `user_id`, `post`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'about about', 1, 1, '2018-02-28 03:25:07', '2018-02-27 21:40:07'),
(2, '1514394589-sudeep.jpg', 'Engineering', 'abababababa', 2, 11, '2018-01-15 06:23:43', '2018-01-15 00:38:43'),
(8, NULL, 'edu', NULL, 15, 2, '2017-12-30 03:08:04', '2017-12-29 21:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `rel_post_newscategory`
--

CREATE TABLE `rel_post_newscategory` (
  `id` int(10) NOT NULL,
  `admin_category_id` int(10) DEFAULT '0',
  `admin_news_id` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rel_post_newscategory`
--

INSERT INTO `rel_post_newscategory` (`id`, `admin_category_id`, `admin_news_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(6, 3, 5),
(7, 1, 5),
(8, 1, 6),
(9, 1, 7),
(13, 2, 8),
(14, 5, 9),
(15, 3, 47);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'content writer\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 2, 1),
(2, 1, 1),
(13, 16, 1),
(14, 17, 1),
(15, 18, 1),
(16, 19, 2),
(17, 15, 1),
(18, 20, 1),
(19, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE `tbl_admin_users` (
  `id` int(10) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobileno` varchar(20) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `password`, `name`, `email`, `mobileno`, `status`, `created_at`, `updated_at`) VALUES
(3, 'admin123', '$2y$10$WuwCd2Nri6ETX3LPWLVxLOKqSQ.0.hQz4sxMTlC5fjK6EwJ9taySu', 'Random', 'test@gmail.com', '9841980800', '1', '2017-09-22 02:30:02', '2017-12-22 10:28:39'),
(4, 'sudeepsth', '$2y$10$wGhmfRK6zM/00yG4bWDl8.hQnw8m/dzcBCW.rng6lADRTqY.vNTyS', 'Sudeep Shrestha', 'sudeepsth@outlook.com', '9840064816', '1', '2017-12-05 06:48:23', '2017-12-05 06:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(10) NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `description` text,
  `ordering` int(2) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `posted_by` int(10) DEFAULT NULL,
  `published_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `slug`, `description`, `ordering`, `source`, `status`, `posted_by`, `published_date`, `created_at`, `updated_at`) VALUES
(5, 'Second event', 'second-event', '<p>New Events List</p>', 1, 'Nepal Stock', '1', 1, '2017-10-23 01:30:53', '2017-10-23 01:31:18', '2017-11-03 01:12:24'),
(8, 'Our Event', 'our-event', '<p>ashdkahsdkajhs</p>', 2, 'Sharesansar', '1', 1, '2017-10-23 01:32:02', '2017-10-23 01:33:18', '2017-11-03 01:12:13'),
(11, 'new event', 'new-event', '<p>latest event</p>', 2, 'Sharesansar', '1', 1, '2017-10-23 02:57:46', '2017-10-23 02:57:57', '2017-11-03 01:12:02'),
(12, 'ashdksahdjh', 'ashdksahdjh', '<p>hasjdhajsdhkj jshkjahd</p>', 3, 'Nepal Stock', '1', 1, '2017-10-23 02:58:06', '2017-10-23 02:58:15', '2017-11-03 01:11:49'),
(13, 'ahsdasdjhj ashdajs', 'ahsdasdjhj-ashdajs', '<p>jhjhb hfsd hfsdhf dsdjhf</p>', 1, 'Nepal Stock', '1', 1, '2017-10-23 22:43:13', '2017-10-23 22:43:26', '2017-11-03 01:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newscategory`
--

CREATE TABLE `tbl_newscategory` (
  `id` int(10) NOT NULL,
  `category_name` varchar(500) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `posted_by` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_newscategory`
--

INSERT INTO `tbl_newscategory` (`id`, `category_name`, `slug`, `status`, `posted_by`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'technology', '1', 4, '2017-12-05 20:46:41', '2017-12-05 20:46:41'),
(2, 'Politics', 'politics', '1', 4, '2017-12-05 20:46:49', '2017-12-05 20:46:49'),
(3, 'Health', 'health', '1', 4, '2017-12-05 20:47:01', '2017-12-05 20:47:01'),
(4, 'Fashion', 'fashion', '1', 4, '2017-12-05 20:47:07', '2017-12-05 20:47:07'),
(5, 'Education', 'education', '1', 4, '2017-12-16 04:15:13', '2017-12-16 04:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(10) NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `description` text,
  `detail` varchar(250) DEFAULT NULL,
  `ordering` int(2) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `posted_by` int(10) DEFAULT NULL,
  `post_like` int(11) DEFAULT NULL,
  `feature_news` enum('0','1') DEFAULT '0',
  `hot_news` enum('0','1') DEFAULT '0',
  `published_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `title`, `slug`, `description`, `detail`, `ordering`, `image`, `status`, `posted_by`, `post_like`, `feature_news`, `hot_news`, `published_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Google updates Gmail app for iPhone X display', 'google-updates-gmail-app-for-iphone-x-display', '<p><img alt=\"\" src=\"http://media.idownloadblog.com/wp-content/uploads/2016/11/Gmail-5.0.3-for-iOS-teaser-001.png\" style=\"height:611px; width:784px\" /></p>\r\n\r\n<p>Another major app has been updated to support the big beautiful display on the iPhone X. Google has updated the&nbsp;<a href=\"https://geo.itunes.apple.com/us/app/gmail-email-by-google/id422689480?at=11l4L8&amp;ct=AO\">official Gmail app</a>&nbsp;(as well as the&nbsp;<a href=\"https://geo.itunes.apple.com/us/app/google-opinion-rewards/id1227019728?at=11l4L8&amp;ct=AO\">Google Opinion Rewards app</a>) to support the larger screen.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Like any app that hasn&rsquo;t been updated, the previous version was letter-boxed with black bars on the top and bottom.</p>\r\n\r\n<p>Another major change in the update is the ability to add non-Google email accounts to the app.</p>\r\n\r\n<blockquote>\r\n<h4>What&rsquo;s New in Version 5.0.171119</h4>\r\n\r\n<p>&bull; You can now add non-Google email accounts to the Gmail app via IMAP.</p>\r\n</blockquote>\r\n\r\n<p>Gmail is available for<a href=\"https://geo.itunes.apple.com/us/app/gmail-email-by-google/id422689480?at=11l4L8&amp;ct=AO\">&nbsp;free on the App Store</a>&nbsp;for those who have yet to download it.</p>', 'Another major app has been updated to support the big beautiful display on the iPhone X. Google has updated the official Gmail app (as well as the Google Opinion Rewards app) to support the larger screen.', 2, '1512560594-Gmail.png', '1', 2, 7, NULL, NULL, '2017-12-06', '2017-12-05 21:17:52', '2017-12-21 10:13:44', NULL),
(4, 'KGI: Apple to integrate faster circuit boards across its product lineup come 2018', 'kgi-apple-to-integrate-faster-circuit-boards-across-its-product-lineup-come-2018', '<p><img alt=\"\" src=\"http://media.idownloadblog.com/wp-content/uploads/2017/11/iPhone-X-iFixit-teardown-004.jpg\" style=\"height:385px; width:500px\" /></p>\r\n\r\n<p>KGI Securities analyst Ming-Chi Kuo has predicted that Apple will roll out the all-new flexible circuit board design which debuted in iPhone X across its product lineup come 2018.</p>\r\n\r\n<p>In a note to investors&nbsp;<a href=\"http://appleinsider.com/articles/17/12/02/apple-to-adopt-speedy-lcp-circuit-board-tech-across-major-product-lines-in-2018\">seen</a>&nbsp;by AppleInsider, Kuo writes that Apple is working with partner suppliers to integrate flexible printed circuit board design based on the liquid crystal polymer material across future iPad, Mac and Apple Watch models.</p>\r\n\r\n<p>The analyst added that Apple is now working with manufacturer Career on circuit board designs for MacBook that will save space and improve internal data speeds, potentially enabling easy transition to the future USB 3.2 and Thunderbolt specifications.</p>\r\n\r\n<p>The supplier is believed to be working on brand new LTE antenna designs for Apple Watch that integrate liquid crystal polymer as a base material versus the polyamide material used for the existing Apple Watch antenna design.</p>\r\n\r\n<p>Some of the advantages of liquid crystal polymer&nbsp;<a href=\"https://www.eeweb.com/profile/eeweb/articles/new-liquid-crystal-polymer-enables-high-speed-circuit-fabrication\">include</a>&nbsp;superior frequency attenuation, thermal performance and moisture resistance.</p>\r\n\r\n<p>iPhone X features a flexible printed circuit board with what iFixit&nbsp;<a href=\"http://www.idownloadblog.com/2017/11/03/ifixit-iphone-x-teardown/\">described</a>&nbsp;as having &ldquo;an unprecedented degree of miniaturization.&rdquo; The iPhone X logic board is folded in half, with the layers soldered together.</p>\r\n\r\n<p>This design results in a smaller board with about 70 percent of the footprint of the logic board in the iPhone 8 Plus model. Separated and spread out, it&rsquo;s 55 percent bigger than the the logic board in iPhone 8 Plus.</p>\r\n\r\n<p>In fact, it sports even more densely packed components than the tiny system-in-package in Apple Watch. The Apple Watch attaches over 30 individual components onto a single board that is then overmolded with a silica or aluminum composite resin (this is similar to the conventional integrated circuit packaging, but for an entire board).</p>\r\n\r\n<p><em>Image: iPhone X logic board&nbsp;<a href=\"https://www.ifixit.com/Teardown/iPhone+X+Teardown/98975\">courtesy of iFixit</a></em></p>', 'KGI Securities analyst Ming-Chi Kuo has predicted that Apple will roll out the all-new flexible circuit board design which debuted in iPhone X across its product lineup come 2018.', 1, '1512560718-iPhone-X-iFixit-teardown-004.jpg', '1', 2, 1, '1', NULL, '2017-12-06', '2017-12-05 21:18:34', '2017-12-08 10:07:39', NULL),
(5, 'Why You Won’t Live Forever: The Human Body Already Peaked, Scientists Warn', 'why-you-wont-live-forever-the-human-body-already-peaked-scientists-warn', '<p>Humans won&rsquo;t get any better than they are right now, scientists say. In fact, we can expect to become less healthy and live shorter lives in the future.</p>\r\n\r\n<p>Although people have made great biological strides in recent centuries, including increasing lifespans, there has been a great slowdown of those improvements, a group of experts wrote in an article for the journal&nbsp;<a href=\"https://www.frontiersin.org/articles/10.3389/fphys.2017.00812/full\" rel=\"nofollow\" target=\"_blank\">Frontiers in Physiology</a>. They say that&rsquo;s because our species has reached its peak and will only trend downward from here. And climate change may help drive that dive.</p>\r\n\r\n<p>The team analyzed genetic and environmental factors to investigate the biological limits of humans, in the realm of longevity, height and physical abilities like performance in sports. In terms of lifespan, for example, medical and technological advancements have pushed the average life expectancy close to 100 and the maximum a couple of decades beyond that. But how much further could we reasonably go?</p>\r\n\r\n<p>&ldquo;The human body, as in any living species, is a finite organism, with structural &hellip; and functional boundaries at every level of organization,&rdquo; the article says.</p>\r\n\r\n<p>Even though scientific progress continues, the authors wrote, we do not see any more large shifts in our lifespans, heights or sports achievements; there are no significant changes in the maximum life expectancy or in sports records.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"city-people\" src=\"http://s1.ibtimes.com/sites/www.ibtimes.com/files/styles/embed/public/2017/12/06/city-people.jpg\" style=\"height:540px; width:810px\" title=\"\" />Civilization may have reached its peak &mdash; humans might not get any healthier or longer-lived than they are right now.Photo: CC0 Creative Commons</p>\r\n\r\n<p>&ldquo;This suggests that modern societies have allowed our species to reach its limits,&rdquo; according to the article. &ldquo;We are the first generation to become aware of these limitations.&rdquo;</p>\r\n\r\n<p>There may be, however, more people reaching the current biological limits as time goes on.</p>\r\n\r\n<p>The scientists say our focus should be on avoiding backsliding to become shorter and shorter-lived. But that could be a challenge since they predict that man-made environmental problems like climate change will work against us.</p>\r\n\r\n<p>&ldquo;This will be one of the biggest challenges of this century as the added pressure from anthropogenic activities will be responsible for damaging effects on human health and the environment,&rdquo; researcher Jean-Fran&ccedil;ois Toussaint, from France&rsquo;s Paris Descartes University, said in a&nbsp;<a href=\"https://www.eurekalert.org/pub_releases/2017-12/f-thr120617.php\" rel=\"nofollow\" target=\"_blank\">report</a>&nbsp;from journal Frontiers. &ldquo;The current declines in human capacities we can see today are a sign that environmental changes, including climate, are already contributing to the increasing constraints we now have to consider. &hellip; Now that we know the limits of the human species, this can act as a clear goal for nations to ensure that human capacities reach their highest possible values for most of the population.&rdquo;</p>', 'Humans won’t get any better than they are right now, scientists say. In fact, we can expect to become less healthy and live shorter lives in the future.', 1, '1512617426-city-people.jpg', '1', 2, 7, '1', NULL, '2017-12-07', '2017-12-06 21:45:26', '2017-12-08 10:07:28', NULL),
(6, 'Apple Leak Reveals Massive New iPhone', 'apple-leak-reveals-massive-new-iphone', '<p>Nikkei has done it again. Following its&nbsp;<a href=\"https://www.forbes.com/sites/gordonkelly/2017/12/03/apple-leak-new-iphone-upgrade-specs-price-battery-life-iphone-9-iphone-x-plus/\" target=\"_self\">big Apple revelations</a>&nbsp;earlier this week, the world&rsquo;s largest financial newspaper has followed up with something even bigger&hellip; literally.&nbsp;</p>\r\n\r\n<p>In a new&nbsp;<a href=\"https://asia.nikkei.com/Business/AC/Apple-planning-LCD-iPhone-with-metal-case-for-2018-source?page=1\" rel=\"nofollow\" target=\"_blank\">report</a>&nbsp;Nikkei says next year&nbsp;<a href=\"https://www.forbes.com/companies/apple/\" rel=\"nofollow\" target=\"_self\">Apple</a>&nbsp;<a href=\"https://www.forbes.com/companies/apple/\">AAPL -0.34%</a>&nbsp;will release its biggest iPhone yet with a monster 6.1-inch display and it is likely to be Apple&rsquo;s cheapest iPhone as well.</p>\r\n\r\n<p><a href=\"https://blogs-images.forbes.com/gordonkelly/files/2017/12/Screenshot-2017-12-07-at-03.51.40.png\"><img alt=\"\" src=\"https://blogs-images.forbes.com/gordonkelly/files/2017/12/Screenshot-2017-12-07-at-03.51.40.jpg?width=960\" style=\"height:256px; width:400px\" /></a></p>\r\n\r\n<p>Apple iPhone 2018 concepts</p>\r\n\r\n<p>Citing &ldquo;a source privy to the company&#39;s product designs&rdquo; Nikkei states the 6.1-inch iPhone will cut costs by using an LCD display rather than the more expensive OLED introduced with the&nbsp;<a href=\"http://www.forbes.com/sites/gordonkelly/2017/10/01/iphone-x-vs-iphone-8-plus-whats-the-difference/\" target=\"_self\">wallet burning</a>&nbsp;iPhone X. It will also revert to an aluminium chassis which means no wireless charging, but also add benefit by dodging Apple&rsquo;s&nbsp;<a href=\"https://www.forbes.com/sites/gordonkelly/2017/11/02/apples-new-iphones-cost-repair-cracked-glass-specs-availability-stock/\" target=\"_self\">truly horrific glass back repair charges</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Interestingly Nikkei also believes this new iPhone will be put together by a new manufacturer. Casetek, which is a subsidiary of iPhone assembler Pegatron, has &ldquo;a good chance&rdquo; to win the contract with a second Nikkei source saying the company has been testing casings for a new LCD iPhone model for some time. Casetek has made iPads in the past, but this would be its first iPhone.</p>\r\n\r\n<p>Such an arrangement would see Apple reduce its dependence on both Hon Hai Precision Industry (aka Foxconn) and Samsung, which has had Apple over a barrel by being the only company able to supply OLED displays in large enough quantities to meet iPhone X demand.</p>\r\n\r\n<p><a href=\"https://blogs-images.forbes.com/gordonkelly/files/2017/12/Screenshot-2017-12-07-at-03.50.57.png\"><img alt=\"\" src=\"https://blogs-images.forbes.com/gordonkelly/files/2017/12/Screenshot-2017-12-07-at-03.50.57.jpg?width=960\" style=\"height:400px; width:600px\" /></a></p>\r\n\r\n<p>iPhone 2018 concepts</p>\r\n\r\n<p>While Nikkei repeatedly mentions the cost saving measures in this 6.1-inch iPhone, it doesn&rsquo;t go so far as to name a price. But with ever larger displays becoming standard, I suspect there&rsquo;s every chance this new model could be the &lsquo;iPhone SE2&rsquo;. Though Apple may choose a new moniker given its shake up this year given iPhone SE2 doesn&rsquo;t exactly trip off the tongue.</p>\r\n\r\n<p>And the size increases don&rsquo;t stop there because Nikkei finishes with a final teaser claiming Apple will indeed add a so-called &lsquo;iPhone X Plus&rsquo; to its line-up in 2018. It says the final size has yet to be agreed, but it will be either 6.2 or 6.3-inches.</p>\r\n\r\n<p>All of which sounds great apart from the fact Apple has been arguably the only remaining champion of premium smaller smartphones. Which might just open the door for Samsung and its plans for a power packed&nbsp;<a href=\"https://www.forbes.com/sites/gordonkelly/2017/11/16/samsung-new-galaxy-smartphone-galaxy-a5-galaxy-s9-galaxy-x/\" target=\"_self\">5-inch Galaxy S9 Mini</a>...</p>', 'In a new report Nikkei says next year Apple AAPL -0.34% will release its biggest iPhone yet with a monster 6.1-inch display and it is likely to be Apple’s cheapest iPhone as well.', 1, '1512648920-Screenshot-2017-12-07-at-03.51.40.png', '1', 2, 1, '1', '1', '2017-12-07', '2017-12-07 06:30:20', '2017-12-08 10:07:19', NULL),
(7, 'Apple’s Joswiak defends the iPhone X notch', 'apples-joswiak-defends-the-iphone-x-notch', '<p><img alt=\"\" src=\"http://media.idownloadblog.com/wp-content/uploads/2017/09/iPhone-X-notch-sensors-image-001.jpg\" style=\"height:446px; width:700px\" /></p>\r\n\r\n<p>Apple&rsquo;s Vice President of Product Marketing, Greg Joswiak,&nbsp;<a href=\"https://www.tomsguide.com/us/innovation-awards-2017,review-4938.html#p15\">said</a>&nbsp;in a recent interview with Tom&rsquo;s Guide how proud Apple is of the notch on iPhone X.</p>\r\n\r\n<p>While there&rsquo;s been much debate on the notch (I personally don&rsquo;t mind it), Apple sees it as one of three huge steps forward for mobile phones. In Tom&rsquo;s Guide list of most innovative technology of 2017, they highlight&nbsp;the Super Retina Display, Face ID and the A11 Bionic chip as the reasons iPhone X stands out.</p>\r\n\r\n<p>&ldquo;With all of those components, this is one of the most densely packed technology areas I think we&rsquo;ve ever done,&rdquo; Joswiak&nbsp;told the publication. &ldquo;It&rsquo;s one of the most sophisticated pieces of technology we&rsquo;ve ever done in such an incredibly small space.&rdquo;</p>\r\n\r\n<p>The executive went on to highlight the difference between Apple&rsquo;s facial recognition technology and others, pointing out the company&rsquo;s signature strategy of not necessarily being first to market with an idea, but how to do it right.</p>\r\n\r\n<blockquote>\r\n<p>Forget all those stories you heard about us trying to map fingerprints into the back. We had a line of sight on how to do real facial recognition, in a way never done before. It would be really hard to do, but we just didn&rsquo;t want to do it the way others had, which could literally be spoofed with a picture.</p>\r\n</blockquote>\r\n\r\n<p>If you have a moment or two, you can check out the rest of the list of innovative products and read the rest of Greg Joswiak&rsquo;s comments&nbsp;<a href=\"https://www.tomsguide.com/us/innovation-awards-2017,review-4938.html#p15\">over on Tom&rsquo;s Guide</a>.</p>\r\n\r\n<p>Do you agree that the notch is more of an impressive feature than a detraction? This is coming from the VP of marketing, for goodness sake! Let us know your take below.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>', 'Apple’s Vice President of Product Marketing, Greg Joswiak, said in a recent interview with Tom’s Guide how proud Apple is of the notch on iPhone X.', 1, '1512733328-iPhone-X-notch-sensors-image-001.jpg', '1', 2, 12, NULL, '1', '2017-12-08', '2017-12-08 05:57:08', '2017-12-25 05:33:18', NULL),
(8, 'HomeKit vulnerability allows unauthorized access to accessories, a fix is already in place', 'homekit-vulnerability-allows-unauthorized-access-to-accessories-a-fix-is-already-in-place', '<p><img alt=\"\" src=\"http://media.idownloadblog.com/wp-content/uploads/2017/09/iDevices-HomeKit-Home-app.jpg\" style=\"height:500px; width:1000px\" /></p>\r\n\r\n<p>A new vulnerability has been found in Apple&rsquo;s HomeKit platform, allowing a hacker the ability to control your lights, thermostats, garage door, or even your lock. Fortunately, a temporary fix has already been implemented by Apple.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>9to5mac first<a href=\"https://9to5mac.com/2017/12/07/homekit-vulnerability/\">&nbsp;reported</a>&nbsp;the exploit that was demonstrated to them, though was apparently quite difficult to reproduce.</p>\r\n\r\n<p>When executed, it would allow unauthorized access to any HomeKit accessory, though smart locks are a particularly scary targets.</p>\r\n\r\n<p>&nbsp;</p>', 'A new vulnerability has been found in Apple’s HomeKit platform, allowing a hacker the ability to control your lights, thermostats, garage door, or even your lock.', 1, '1512734591-iDevices-HomeKit-Home-app.jpg', '1', 2, 11, NULL, '1', '2017-12-08', '2017-12-08 06:18:11', '2017-12-20 21:24:14', NULL),
(22, 'Latest update', 'latest-update', '<p>Latest Update</p>', NULL, NULL, '', '1', 2, 0, NULL, NULL, '2017-12-25', '2017-12-24 21:36:53', '2017-12-24 21:36:53', NULL),
(42, 'aaaa', 'aaaa', '<p>qqqqq</p>', NULL, NULL, '', '1', 2, 0, NULL, NULL, '2017-12-30', '2017-12-30 10:31:53', '2017-12-30 10:34:53', '2017-12-30 10:34:53'),
(43, 'aaaaa', 'aaaaa', '<p>aaaaa</p>', NULL, NULL, '', '1', 2, 0, NULL, NULL, '2017-12-30', '2017-12-30 10:33:41', '2017-12-30 10:34:57', '2017-12-30 10:34:57'),
(44, 'aaaaaaa', 'aaaaaaa', '<p>aaaaaa</p>', NULL, NULL, '', '1', 2, 0, NULL, NULL, '2017-12-30', '2017-12-30 10:33:52', '2017-12-30 10:35:02', '2017-12-30 10:35:02'),
(45, 'aaaasasa', 'aaaasasa', '<p>asasas</p>', NULL, NULL, '', '1', 2, 0, NULL, NULL, '2017-12-30', '2017-12-30 10:34:04', '2017-12-30 10:35:06', '2017-12-30 10:35:06'),
(46, 'ABC', 'abc', '<p>abc</p>', NULL, NULL, '', '1', 2, 0, NULL, NULL, '2018-01-15', '2018-01-15 00:38:43', '2018-01-15 00:39:10', NULL),
(47, 'How diet can affect mental health: the likely link between food and the brain', 'how-diet-can-affect-mental-health-the-likely-link-between-food-and-the-brain', '<p>What people choose to eat doesn&rsquo;t just affect their waistlines, but maybe also the way they think and feel, according to a growing body of research.</p>\r\n\r\n<p>Some Americans may believe that eating &quot;comfort foods&quot; leads to happiness.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://abcnews.go.com/GMA/Wellness/popular-diet-reduce-hypertension-risk-depression-study/story?id=53362048\" target=\"_blank\">Popular diet doesn&#39;t only reduce hypertension, but risk of depression as well, per study</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://abcnews.go.com/Health/keto-whole30-diets-rank-best-diets-2018-list/story?id=51953127\" target=\"_blank\">Keto, Whole30 diets rank last on one best diets of 2018 list</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>But often choosing to eat processed foods like ice cream, macaroni and cheese or chips may eventually be linked to poor&nbsp;<a href=\"http://abcnews.go.com/topics/lifestyle/health/mental-health.htm\" id=\"ramplink_mental health_\" target=\"_blank\">mental health</a>, research suggests.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"PHOTO: A selection of unhealthy processed food snacks are displayed in an undated stock photo.\" src=\"https://s.abcnews.com/images/Health/unhealthy-snacks-gty-jc-180227_4x3_992.jpg\" style=\"height:480px; width:640px\" />STOCK PHOTO/Getty Images</p>\r\n\r\n<p>A selection of unhealthy processed food snacks are displayed in an undated stock photo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In some studies, healthy eating -- fruits, vegetables, healthy fats and whole grains -- was in fact linked to lower risk of&nbsp;<a href=\"http://abcnews.go.com/topics/lifestyle/health/depression.htm\" id=\"ramplink_depression_\" target=\"_blank\">depression</a>&nbsp;and even suicide.</p>\r\n\r\n<p>&quot;Although the determinants of mental health are complex, the emerging and compelling evidence for nutrition as a crucial factor in the high prevalence and incidence of mental disorders,&quot; researchers wrote in a review of the connection between food and mental health&nbsp;<a href=\"http://www.thelancet.com/journals/lanpsy/article/PIIS2215-0366(14)00051-0/fulltext\" target=\"_blank\">published in the medical journal Lancet</a>, &quot;suggests that&nbsp;<a href=\"http://abcnews.go.com/topics/lifestyle/health/diet-and-weight-loss.htm\" id=\"ramplink_diet_\" target=\"_blank\">diet</a>&nbsp;is as important to psychiatry as it is to cardiology, endocrinology, and gastroenterology.&quot;</p>\r\n\r\n<p>In one recent&nbsp;<a href=\"http://abcnews.go.com/GMA/Wellness/popular-diet-reduce-hypertension-risk-depression-study/story?id=53362048\" target=\"_blank\">study</a>, the Dietary Approaches to Stop&nbsp;<a href=\"http://abcnews.go.com/topics/lifestyle/health/high-blood-pressure.htm\" id=\"ramplink_Hypertension_\" target=\"_blank\">Hypertension</a>&nbsp;(DASH) diet -- low in foods with saturated fat and sugar -- was found to reduce the risk of depression later in life.</p>\r\n\r\n<p>The risk of becoming depressed over time was 11 percent lower among adults who followed DASH, a diet rich in vegetables, fruit, whole grains, and fat-free or low-fat dairy products, the study found.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"PHOTO: Various fruits and vegetables are pictured in an undated stock photo.\" src=\"https://s.abcnews.com/images/Health/96583201_3_4x3_992.jpg\" style=\"height:480px; width:640px\" />STOCK PHOTO/Getty Images</p>\r\n\r\n<p>Various fruits and vegetables are pictured in an undated stock photo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In the same study, which was done by questionnaire regarding food choices and depression symptoms, people who reported following a Western diet -- high in saturated fats and red meats, low in fruits and vegetables -- were more likely to develop depression.</p>\r\n\r\n<p><strong>What is the connection between diet and brain health?</strong></p>\r\n\r\n<p>Most people experience occasional, &ldquo;situational&rdquo; depression, or what doctors call an adjustment disorder, for example when a person loses a job or experiences a difficult breakup.</p>\r\n\r\n<p>Depression is a persistent loss of enjoyment in things you used to love, a slide into lethargy and despair, sleep problems and disinterest.</p>\r\n\r\n<p>Since what people eat -&ndash; the nutrients available to the body -&ndash; affects various bodily functions, it seems logical that diet would affect chemistry and mood as well.</p>\r\n\r\n<p>Diet decisions that improve the rest of the body may improve the brain&rsquo;s outlook on the world.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"PHOTO: Various grains, lentils and whole grain breads and pasta products are displayed in an undated stock photo.\" src=\"https://s.abcnews.com/images/Health/dash-diet-02-gty-jc-180226_4x3_992.jpg\" style=\"height:480px; width:640px\" />STOCK PHOTO/Getty Images</p>\r\n\r\n<p>Various grains, lentils and whole grain breads and pasta products are displayed in an undated stock photo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;When people are feeling better by dieting and losing weight or resolving symptoms that they&rsquo;re having, that could have an impact on mood,&quot; said Dr. Sherry Pagoto, a licensed clinical psychologist and University of Connecticut professor. &quot;When people do engage in healthy lifestyle changes, we do see improvements in depression.&quot;</p>\r\n\r\n<p>Nutrition also influences the immune system, which has been shown to influence the risk of depression, as well.</p>\r\n\r\n<p>It could also come down to inflammation, research shows.</p>\r\n\r\n<p>A study published in January gave more support to the theory that increased inflammation in the body could play a role in depression. The study,&nbsp;<a href=\"http://www.psychiatrist.com/JCP/article/Pages/2016/v77n12/v77n1221.aspx\" target=\"_blank\">published in The Journal of Clinical Psychiatry</a>, found that people who had depression had 46 percent higher levels in their blood samples of of C-reactive protein (CRP), a marker of inflammatory disease.</p>\r\n\r\n<p>Diets like DASH and the Mediterranean Diet -- another brain-healthy diet with a focus on foods like olive oil, fish and vegetables -- are both rich in anti-inflammatory foods.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"PHOTO: A selection of food sources of Omega-3 and unsaturated fats including various nuts, olive oil, salmon and avocado are pictured in an undated stock photo.\" src=\"https://s.abcnews.com/images/Health/avocado-salmon-olive-oil-rf-gty-jc-180227_4x3_992.jpg\" style=\"height:480px; width:640px\" />STOCK PHOTO/Getty Images</p>\r\n\r\n<p>A selection of food sources of Omega-3 and unsaturated fats including various nuts, olive oil, salmon and avocado are pictured in an undated stock photo.<a href=\"http://abcnews.go.com/GMA/Wellness/diet-affect-mental-health-link-food-brain/story?id=53387207#\">more&nbsp;+</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Foods like white bread, margarine, red meat, processed meat and fried foods can cause inflammation in the body and should be eaten minimally or avoided,&nbsp;<a href=\"https://www.health.harvard.edu/staying-healthy/foods-that-fight-inflammation\" target=\"_blank\">according to Harvard Medical School</a>.</p>\r\n\r\n<p>Tomatoes, olive oil, green leafy vegetables, nuts, fish like salmon and sardines and fruits like oranges and strawberries are all foods that fight inflammation, according to Harvard&#39;s list.</p>\r\n\r\n<p><em>ABC News&#39; Ann Reynolds and Jay-Sheree Allen, MD, a resident in the ABC News Medical Unit, contributed to this report.</em></p>', 'What people choose to eat doesn’t just affect their waistlines, but maybe also the way they think and feel, according to a growing body of research.', NULL, '1519788307-avocado-salmon-olive-oil-rf-gty-jc-180227_4x3_992.jpg', '1', 1, 1, '1', '1', '2018-02-28', '2018-02-27 21:40:07', '2018-02-27 21:40:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ticketit_admin` tinyint(1) NOT NULL DEFAULT '0',
  `ticketit_agent` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `ticketit_admin`, `ticketit_agent`) VALUES
(1, 'sudeep shrestha', 'diablo.utopia@gmail.com', '$2y$10$THl3ZdaUs1e7bAZ7/Q2uFODBwTFsJ/q.lHN.VFkHguaucia1OEBlS', 'CjhyworhDiW4VpMUp5nSGrodMTaMcAt9aIDJSXWHTJAtt7QVNLlckJkXeVGa', '2017-12-24 10:15:55', '2018-09-25 19:47:06', 1, 0),
(2, 'sudeep', 'di@gmail.com', '$2y$10$w3GgiQiLksD3ZYxGMywA3u6QSVnGFAWkKaqDMx3cP62ugbeoHKS.a', 'CBZeFID2sOOxJYUojdU5yA4UYJI7nVgQGYuYLYdRlaDkCmxgfII2DLtznNrI', '2017-12-24 10:24:48', '2017-12-26 11:35:55', 0, 0),
(15, 'test12', 'test123@gmail.com', '$2y$10$THl3ZdaUs1e7bAZ7/Q2uFODBwTFsJ/q.lHN.VFkHguaucia1OEBlS', 'KKmkBNjtGjnUKj8jrz0TWPEPe03B36zpVIYyTJZiidlvg4cLd8yP153uWgof', '2017-12-26 11:26:39', '2018-09-25 20:06:45', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delete_post`
--
ALTER TABLE `delete_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_users`
--
ALTER TABLE `post_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel_post_newscategory`
--
ALTER TABLE `rel_post_newscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newscategory`
--
ALTER TABLE `tbl_newscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
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
-- AUTO_INCREMENT for table `delete_post`
--
ALTER TABLE `delete_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `post_users`
--
ALTER TABLE `post_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rel_post_newscategory`
--
ALTER TABLE `rel_post_newscategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_admin_users`
--
ALTER TABLE `tbl_admin_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_newscategory`
--
ALTER TABLE `tbl_newscategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
