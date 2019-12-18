-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 06:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxbilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_admin_history`
--

CREATE TABLE `activity_admin_history` (
  `id` bigint(20) NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `activity_client_email`
--

CREATE TABLE `activity_client_email` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `recipients` text,
  `subject` varchar(255) DEFAULT NULL,
  `content_html` text,
  `content_text` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `activity_client_history`
--

CREATE TABLE `activity_client_history` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `activity_system`
--

CREATE TABLE `activity_system` (
  `id` bigint(20) NOT NULL,
  `priority` tinyint(4) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `message` text,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_system`
--

INSERT INTO `activity_system` (`id`, `priority`, `admin_id`, `client_id`, `message`, `ip`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, NULL, 'Added new  email template #1', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(2, 6, NULL, NULL, 'Added new  email template #2', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(3, 6, NULL, NULL, 'Added new  email template #3', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(4, 6, NULL, NULL, 'Added new  email template #4', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(5, 6, NULL, NULL, 'Added new  email template #5', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(6, 6, NULL, NULL, 'Added new  email template #6', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(7, 6, NULL, NULL, 'Added new  email template #7', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(8, 6, NULL, NULL, 'Added new  email template #8', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(9, 6, NULL, NULL, 'Added new  email template #9', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(10, 6, NULL, NULL, 'Added new  email template #10', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(11, 6, NULL, NULL, 'Added new  email template #11', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(12, 6, NULL, NULL, 'Added new  email template #12', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(13, 6, NULL, NULL, 'Added new  email template #13', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(14, 6, NULL, NULL, 'Added new  email template #14', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(15, 6, NULL, NULL, 'Added new  email template #15', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(16, 6, NULL, NULL, 'Added new  email template #16', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(17, 6, NULL, NULL, 'Added new  email template #17', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(18, 6, NULL, NULL, 'Added new  email template #18', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(19, 6, NULL, NULL, 'Added new  email template #19', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(20, 6, NULL, NULL, 'Added new  email template #20', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(21, 6, NULL, NULL, 'Added new  email template #21', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(22, 6, NULL, NULL, 'Added new  email template #22', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(23, 6, NULL, NULL, 'Added new  email template #23', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(24, 6, NULL, NULL, 'Added new  email template #24', '::1', '2019-12-17 18:26:32', '2019-12-17 18:26:32'),
(25, 6, NULL, NULL, 'Added new  email template #25', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(26, 6, NULL, NULL, 'Added new  email template #26', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(27, 6, NULL, NULL, 'Added new  email template #27', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(28, 6, NULL, NULL, 'Added new  email template #28', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(29, 6, NULL, NULL, 'Added new  email template #29', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(30, 6, NULL, NULL, 'Added new  email template #30', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(31, 6, NULL, NULL, 'Added new  email template #31', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(32, 6, NULL, NULL, 'Added new  email template #32', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(33, 6, NULL, NULL, 'Added new  email template #33', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(34, 6, NULL, NULL, 'Added new  email template #34', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(35, 6, NULL, NULL, 'Added new  email template #35', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(36, 6, NULL, NULL, 'Added new  email template #36', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(37, 6, NULL, NULL, 'Added new  email template #37', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(38, 6, NULL, NULL, 'Added new  email template #38', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(39, 6, NULL, NULL, 'Added new  email template #39', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(40, 6, NULL, NULL, 'Added new  email template #40', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(41, 6, NULL, NULL, 'Added new  email template #41', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(42, 6, NULL, NULL, 'Added new  email template #42', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(43, 6, NULL, NULL, 'Added new  email template #43', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(44, 6, NULL, NULL, 'Added new  email template #44', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(45, 6, NULL, NULL, 'Added new  email template #45', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(46, 6, NULL, NULL, 'Added new  email template #46', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(47, 6, NULL, NULL, 'Added new  email template #47', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(48, 6, NULL, NULL, 'Generated email templates for installed extensions', '::1', '2019-12-17 18:26:33', '2019-12-17 18:26:33'),
(49, 6, 1, NULL, 'Staff member 1 logged in', '::1', '2019-12-17 18:26:55', '2019-12-17 18:26:55'),
(50, 6, 1, NULL, 'Created new client #1', '::1', '2019-12-17 18:28:04', '2019-12-17 18:28:04'),
(51, 6, 1, NULL, 'Removed client #1', '::1', '2019-12-17 18:28:16', '2019-12-17 18:28:16'),
(52, 6, 1, NULL, 'Created new client #2', '::1', '2019-12-17 18:28:54', '2019-12-17 18:28:54'),
(53, 6, 1, NULL, 'Client #2 logged in', '::1', '2019-12-17 18:29:10', '2019-12-17 18:29:10'),
(54, 6, 1, NULL, 'Installed new payment gateway Paylane', '::1', '2019-12-17 18:34:02', '2019-12-17 18:34:02'),
(55, 6, 1, NULL, 'Updated payment gateway Paylane', '::1', '2019-12-17 18:34:28', '2019-12-17 18:34:28'),
(56, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:34:45', '2019-12-17 18:34:45'),
(57, 6, 1, NULL, 'Prepared new invoice \"1\"', '::1', '2019-12-17 18:34:52', '2019-12-17 18:34:52'),
(58, 6, 1, NULL, 'Approved invoice \"1\"', '::1', '2019-12-17 18:34:52', '2019-12-17 18:34:52'),
(59, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:34:52', '2019-12-17 18:34:52'),
(60, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:38:11', '2019-12-17 18:38:11'),
(61, 6, 1, NULL, 'Prepared new invoice \"2\"', '::1', '2019-12-17 18:38:14', '2019-12-17 18:38:14'),
(62, 6, 1, NULL, 'Approved invoice \"2\"', '::1', '2019-12-17 18:38:14', '2019-12-17 18:38:14'),
(63, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:38:14', '2019-12-17 18:38:14'),
(64, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:39:28', '2019-12-17 18:39:28'),
(65, 6, 1, NULL, 'Prepared new invoice \"3\"', '::1', '2019-12-17 18:39:29', '2019-12-17 18:39:29'),
(66, 6, 1, NULL, 'Approved invoice \"3\"', '::1', '2019-12-17 18:39:29', '2019-12-17 18:39:29'),
(67, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:39:29', '2019-12-17 18:39:29'),
(68, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:41:13', '2019-12-17 18:41:13'),
(69, 6, 1, NULL, 'Prepared new invoice \"4\"', '::1', '2019-12-17 18:41:15', '2019-12-17 18:41:15'),
(70, 6, 1, NULL, 'Approved invoice \"4\"', '::1', '2019-12-17 18:41:15', '2019-12-17 18:41:15'),
(71, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:41:15', '2019-12-17 18:41:15'),
(72, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:42:36', '2019-12-17 18:42:36'),
(73, 6, 1, NULL, 'Prepared new invoice \"5\"', '::1', '2019-12-17 18:42:38', '2019-12-17 18:42:38'),
(74, 6, 1, NULL, 'Approved invoice \"5\"', '::1', '2019-12-17 18:42:38', '2019-12-17 18:42:38'),
(75, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:42:38', '2019-12-17 18:42:38'),
(76, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:49:09', '2019-12-17 18:49:09'),
(77, 6, 1, NULL, 'Prepared new invoice \"6\"', '::1', '2019-12-17 18:49:11', '2019-12-17 18:49:11'),
(78, 6, 1, NULL, 'Approved invoice \"6\"', '::1', '2019-12-17 18:49:11', '2019-12-17 18:49:11'),
(79, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:49:11', '2019-12-17 18:49:11'),
(80, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:49:48', '2019-12-17 18:49:48'),
(81, 6, 1, NULL, 'Prepared new invoice \"7\"', '::1', '2019-12-17 18:49:54', '2019-12-17 18:49:54'),
(82, 6, 1, NULL, 'Approved invoice \"7\"', '::1', '2019-12-17 18:49:54', '2019-12-17 18:49:54'),
(83, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:49:54', '2019-12-17 18:49:54'),
(84, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:50:41', '2019-12-17 18:50:41'),
(85, 6, 1, NULL, 'Prepared new invoice \"8\"', '::1', '2019-12-17 18:50:42', '2019-12-17 18:50:42'),
(86, 6, 1, NULL, 'Approved invoice \"8\"', '::1', '2019-12-17 18:50:42', '2019-12-17 18:50:42'),
(87, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:50:42', '2019-12-17 18:50:42'),
(88, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:51:41', '2019-12-17 18:51:41'),
(89, 6, 1, NULL, 'Prepared new invoice \"9\"', '::1', '2019-12-17 18:51:44', '2019-12-17 18:51:44'),
(90, 6, 1, NULL, 'Approved invoice \"9\"', '::1', '2019-12-17 18:51:44', '2019-12-17 18:51:44'),
(91, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:51:44', '2019-12-17 18:51:44'),
(92, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:58:41', '2019-12-17 18:58:41'),
(93, 6, 1, NULL, 'Prepared new invoice \"10\"', '::1', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(94, 6, 1, NULL, 'Marked invoice \"10\" as paid', '::1', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(95, 6, 1, NULL, 'Approved invoice \"10\"', '::1', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(96, 6, 1, NULL, 'Activated order #10', '::1', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(97, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(98, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 18:59:24', '2019-12-17 18:59:24'),
(99, 6, 1, NULL, 'Logged out', '::1', '2019-12-17 18:59:51', '2019-12-17 18:59:51'),
(100, 6, 1, NULL, 'Created new client #3', '::1', '2019-12-17 19:00:46', '2019-12-17 19:00:46'),
(101, 6, 1, NULL, 'Client #3 logged in', '::1', '2019-12-17 19:01:00', '2019-12-17 19:01:00'),
(102, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:01:12', '2019-12-17 19:01:12'),
(103, 6, 1, NULL, 'Prepared new invoice \"11\"', '::1', '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(104, 6, 1, NULL, 'Approved invoice \"11\"', '::1', '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(105, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(106, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:03:48', '2019-12-17 19:03:48'),
(107, 6, 1, NULL, 'Prepared new invoice \"12\"', '::1', '2019-12-17 19:03:50', '2019-12-17 19:03:50'),
(108, 6, 1, NULL, 'Approved invoice \"12\"', '::1', '2019-12-17 19:03:50', '2019-12-17 19:03:50'),
(109, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:03:50', '2019-12-17 19:03:50'),
(110, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:07:54', '2019-12-17 19:07:54'),
(111, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:08:01', '2019-12-17 19:08:01'),
(112, 6, 1, NULL, 'Prepared new invoice \"13\"', '::1', '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(113, 6, 1, NULL, 'Approved invoice \"13\"', '::1', '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(114, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(115, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:15:36', '2019-12-17 19:15:36'),
(116, 6, 1, NULL, 'Prepared new invoice \"14\"', '::1', '2019-12-17 19:15:38', '2019-12-17 19:15:38'),
(117, 6, 1, NULL, 'Approved invoice \"14\"', '::1', '2019-12-17 19:15:38', '2019-12-17 19:15:38'),
(118, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:15:38', '2019-12-17 19:15:38'),
(119, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:35:35', '2019-12-17 19:35:35'),
(120, 6, 1, NULL, 'Prepared new invoice \"15\"', '::1', '2019-12-17 19:35:37', '2019-12-17 19:35:37'),
(121, 6, 1, NULL, 'Approved invoice \"15\"', '::1', '2019-12-17 19:35:37', '2019-12-17 19:35:37'),
(122, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:35:37', '2019-12-17 19:35:37'),
(123, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:41:39', '2019-12-17 19:41:39'),
(124, 6, 1, NULL, 'Prepared new invoice \"16\"', '::1', '2019-12-17 19:41:41', '2019-12-17 19:41:41'),
(125, 6, 1, NULL, 'Approved invoice \"16\"', '::1', '2019-12-17 19:41:41', '2019-12-17 19:41:41'),
(126, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:41:41', '2019-12-17 19:41:41'),
(127, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:42:43', '2019-12-17 19:42:43'),
(128, 6, 1, NULL, 'Prepared new invoice \"17\"', '::1', '2019-12-17 19:42:46', '2019-12-17 19:42:46'),
(129, 6, 1, NULL, 'Approved invoice \"17\"', '::1', '2019-12-17 19:42:46', '2019-12-17 19:42:46'),
(130, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:42:46', '2019-12-17 19:42:46'),
(131, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:47:12', '2019-12-17 19:47:12'),
(132, 6, 1, NULL, 'Prepared new invoice \"18\"', '::1', '2019-12-17 19:47:14', '2019-12-17 19:47:14'),
(133, 6, 1, NULL, 'Approved invoice \"18\"', '::1', '2019-12-17 19:47:14', '2019-12-17 19:47:14'),
(134, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:47:14', '2019-12-17 19:47:14'),
(135, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 19:57:46', '2019-12-17 19:57:46'),
(136, 6, 1, NULL, 'Prepared new invoice \"19\"', '::1', '2019-12-17 19:57:51', '2019-12-17 19:57:51'),
(137, 6, 1, NULL, 'Approved invoice \"19\"', '::1', '2019-12-17 19:57:51', '2019-12-17 19:57:51'),
(138, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 19:57:51', '2019-12-17 19:57:51'),
(139, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 20:08:54', '2019-12-17 20:08:54'),
(140, 6, 1, NULL, 'Prepared new invoice \"20\"', '::1', '2019-12-17 20:08:56', '2019-12-17 20:08:56'),
(141, 6, 1, NULL, 'Approved invoice \"20\"', '::1', '2019-12-17 20:08:56', '2019-12-17 20:08:56'),
(142, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 20:08:56', '2019-12-17 20:08:56'),
(143, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 20:16:14', '2019-12-17 20:16:14'),
(144, 6, 1, NULL, 'Prepared new invoice \"21\"', '::1', '2019-12-17 20:16:16', '2019-12-17 20:16:16'),
(145, 6, 1, NULL, 'Approved invoice \"21\"', '::1', '2019-12-17 20:16:16', '2019-12-17 20:16:16'),
(146, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 20:16:16', '2019-12-17 20:16:16'),
(147, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 20:16:43', '2019-12-17 20:16:43'),
(148, 6, 1, NULL, 'Prepared new invoice \"22\"', '::1', '2019-12-17 20:16:44', '2019-12-17 20:16:44'),
(149, 6, 1, NULL, 'Approved invoice \"22\"', '::1', '2019-12-17 20:16:44', '2019-12-17 20:16:44'),
(150, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 20:16:44', '2019-12-17 20:16:44'),
(151, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-17 20:17:41', '2019-12-17 20:17:41'),
(152, 6, 1, NULL, 'Prepared new invoice \"23\"', '::1', '2019-12-17 20:17:43', '2019-12-17 20:17:43'),
(153, 6, 1, NULL, 'Approved invoice \"23\"', '::1', '2019-12-17 20:17:43', '2019-12-17 20:17:43'),
(154, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-17 20:17:43', '2019-12-17 20:17:43'),
(155, 6, 1, NULL, 'Staff member 1 logged in', '::1', '2019-12-18 13:43:01', '2019-12-18 13:43:01'),
(156, 6, 1, NULL, 'Staff member 1 logged in', '::1', '2019-12-18 13:43:01', '2019-12-18 13:43:01'),
(157, 6, 1, NULL, 'Client #3 logged in', '::1', '2019-12-18 13:50:19', '2019-12-18 13:50:19'),
(158, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 14:03:21', '2019-12-18 14:03:21'),
(159, 6, 1, NULL, 'Prepared new invoice \"24\"', '::1', '2019-12-18 14:03:23', '2019-12-18 14:03:23'),
(160, 6, 1, NULL, 'Approved invoice \"24\"', '::1', '2019-12-18 14:03:23', '2019-12-18 14:03:23'),
(161, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 14:03:23', '2019-12-18 14:03:23'),
(162, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 14:04:36', '2019-12-18 14:04:36'),
(163, 6, 1, NULL, 'Prepared new invoice \"25\"', '::1', '2019-12-18 14:04:38', '2019-12-18 14:04:38'),
(164, 6, 1, NULL, 'Approved invoice \"25\"', '::1', '2019-12-18 14:04:38', '2019-12-18 14:04:38'),
(165, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 14:04:38', '2019-12-18 14:04:38'),
(166, 6, 1, NULL, 'Updated payment gateway Paylane', '::1', '2019-12-18 14:04:49', '2019-12-18 14:04:49'),
(167, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 14:05:04', '2019-12-18 14:05:04'),
(168, 6, 1, NULL, 'Prepared new invoice \"26\"', '::1', '2019-12-18 14:05:06', '2019-12-18 14:05:06'),
(169, 6, 1, NULL, 'Approved invoice \"26\"', '::1', '2019-12-18 14:05:06', '2019-12-18 14:05:06'),
(170, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 14:05:06', '2019-12-18 14:05:06'),
(171, 6, 1, NULL, 'Removed payment gateway 4', '::1', '2019-12-18 14:05:44', '2019-12-18 14:05:44'),
(172, 6, 1, NULL, 'Installed new payment gateway Paylane', '::1', '2019-12-18 14:05:53', '2019-12-18 14:05:53'),
(173, 6, 1, NULL, 'Updated payment gateway PayPalEmail', '::1', '2019-12-18 14:06:17', '2019-12-18 14:06:17'),
(174, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 14:06:33', '2019-12-18 14:06:33'),
(175, 6, 1, NULL, 'Prepared new invoice \"27\"', '::1', '2019-12-18 14:06:36', '2019-12-18 14:06:36'),
(176, 6, 1, NULL, 'Approved invoice \"27\"', '::1', '2019-12-18 14:06:36', '2019-12-18 14:06:36'),
(177, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 14:06:36', '2019-12-18 14:06:36'),
(178, 6, 1, NULL, 'Updated payment gateway PayPalEmail', '::1', '2019-12-18 14:07:53', '2019-12-18 14:07:53'),
(179, 6, 1, NULL, 'Updated payment gateway Paylane', '::1', '2019-12-18 14:08:09', '2019-12-18 14:08:09'),
(180, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 14:08:23', '2019-12-18 14:08:23'),
(181, 6, 1, NULL, 'Prepared new invoice \"28\"', '::1', '2019-12-18 14:08:25', '2019-12-18 14:08:25'),
(182, 6, 1, NULL, 'Approved invoice \"28\"', '::1', '2019-12-18 14:08:25', '2019-12-18 14:08:25'),
(183, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 14:08:25', '2019-12-18 14:08:25'),
(184, 6, 1, NULL, 'Updated payment gateway Paylane', '::1', '2019-12-18 14:35:05', '2019-12-18 14:35:05'),
(185, 6, 1, NULL, 'Updated payment gateway Paylane', '::1', '2019-12-18 14:35:14', '2019-12-18 14:35:14'),
(186, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 14:35:48', '2019-12-18 14:35:48'),
(187, 6, 1, NULL, 'Prepared new invoice \"29\"', '::1', '2019-12-18 14:35:50', '2019-12-18 14:35:50'),
(188, 6, 1, NULL, 'Approved invoice \"29\"', '::1', '2019-12-18 14:35:50', '2019-12-18 14:35:50'),
(189, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 14:35:50', '2019-12-18 14:35:50'),
(190, 6, 1, NULL, 'Updated payment gateway PayPalEmail', '::1', '2019-12-18 16:02:44', '2019-12-18 16:02:44'),
(191, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 16:02:58', '2019-12-18 16:02:58'),
(192, 6, 1, NULL, 'Prepared new invoice \"30\"', '::1', '2019-12-18 16:03:02', '2019-12-18 16:03:02'),
(193, 6, 1, NULL, 'Approved invoice \"30\"', '::1', '2019-12-18 16:03:02', '2019-12-18 16:03:02'),
(194, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 16:03:02', '2019-12-18 16:03:02'),
(195, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 16:35:26', '2019-12-18 16:35:26'),
(196, 6, 1, NULL, 'Prepared new invoice \"31\"', '::1', '2019-12-18 16:35:30', '2019-12-18 16:35:30'),
(197, 6, 1, NULL, 'Approved invoice \"31\"', '::1', '2019-12-18 16:35:30', '2019-12-18 16:35:30'),
(198, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 16:35:30', '2019-12-18 16:35:30'),
(199, 6, 1, NULL, 'Added \"Domains registration and transfer\" to shopping cart', '::1', '2019-12-18 16:38:02', '2019-12-18 16:38:02'),
(200, 6, 1, NULL, 'Prepared new invoice \"32\"', '::1', '2019-12-18 16:38:04', '2019-12-18 16:38:04'),
(201, 6, 1, NULL, 'Approved invoice \"32\"', '::1', '2019-12-18 16:38:04', '2019-12-18 16:38:04'),
(202, 6, 1, NULL, 'Checked out shopping cart', '::1', '2019-12-18 16:38:04', '2019-12-18 16:38:04'),
(203, 6, 1, NULL, 'Received transaction 1 from payment gateway ', '::1', '2019-12-18 16:58:49', '2019-12-18 16:58:49'),
(204, 6, 1, NULL, 'Received transaction 2 from payment gateway ', '::1', '2019-12-18 16:58:57', '2019-12-18 16:58:57'),
(205, 6, 1, NULL, 'Received transaction 3 from payment gateway ', '::1', '2019-12-18 16:59:41', '2019-12-18 16:59:41'),
(206, 6, 1, NULL, 'Received transaction 4 from payment gateway ', '::1', '2019-12-18 17:00:15', '2019-12-18 17:00:15'),
(207, 6, 1, NULL, 'Received transaction 5 from payment gateway ', '::1', '2019-12-18 17:02:08', '2019-12-18 17:02:08'),
(208, 6, 1, NULL, 'Received transaction 6 from payment gateway 5', '::1', '2019-12-18 17:03:40', '2019-12-18 17:03:40'),
(209, 6, 1, NULL, 'Received transaction 7 from payment gateway 5', '::1', '2019-12-18 17:05:28', '2019-12-18 17:05:28'),
(210, 6, 1, NULL, 'Received transaction 8 from payment gateway 5', '::1', '2019-12-18 17:05:33', '2019-12-18 17:05:33'),
(211, 6, 1, NULL, 'Received transaction 9 from payment gateway 5', '::1', '2019-12-18 17:05:57', '2019-12-18 17:05:57'),
(212, 6, 1, NULL, 'Received transaction 10 from payment gateway 5', '::1', '2019-12-18 17:07:47', '2019-12-18 17:07:47'),
(213, 6, 1, NULL, 'Received transaction 11 from payment gateway 5', '::1', '2019-12-18 17:09:23', '2019-12-18 17:09:23'),
(214, 6, 1, NULL, 'Received transaction 12 from payment gateway 5', '::1', '2019-12-18 17:10:09', '2019-12-18 17:10:09'),
(215, 6, 1, NULL, 'Received transaction 13 from payment gateway 5', '::1', '2019-12-18 17:12:42', '2019-12-18 17:12:42'),
(216, 6, 1, NULL, 'Received transaction 14 from payment gateway 5', '::1', '2019-12-18 17:18:50', '2019-12-18 17:18:50'),
(217, 6, 1, NULL, 'Received transaction 15 from payment gateway 5', '::1', '2019-12-18 17:20:50', '2019-12-18 17:20:50'),
(218, 6, 1, NULL, 'Updated transaction #15', '::1', '2019-12-18 17:20:50', '2019-12-18 17:20:50'),
(219, 6, 1, NULL, 'Received transaction 16 from payment gateway 5', '::1', '2019-12-18 17:21:56', '2019-12-18 17:21:56'),
(220, 6, 1, NULL, 'Updated transaction #16', '::1', '2019-12-18 17:21:56', '2019-12-18 17:21:56'),
(221, 6, 1, NULL, 'Received transaction 17 from payment gateway 5', '::1', '2019-12-18 17:22:45', '2019-12-18 17:22:45'),
(222, 6, 1, NULL, 'Updated transaction #17', '::1', '2019-12-18 17:22:45', '2019-12-18 17:22:45'),
(223, 6, 1, NULL, 'Received transaction 18 from payment gateway 5', '::1', '2019-12-18 17:27:27', '2019-12-18 17:27:27'),
(224, 6, 1, NULL, 'Updated transaction #18', '::1', '2019-12-18 17:27:27', '2019-12-18 17:27:27'),
(225, 6, 1, NULL, 'Received transaction 19 from payment gateway 5', '::1', '2019-12-18 17:30:09', '2019-12-18 17:30:09'),
(226, 6, 1, NULL, 'Updated transaction #19', '::1', '2019-12-18 17:30:09', '2019-12-18 17:30:09'),
(227, 6, 1, NULL, 'Received transaction 20 from payment gateway 5', '::1', '2019-12-18 17:37:50', '2019-12-18 17:37:50'),
(228, 6, 1, NULL, 'Updated transaction #20', '::1', '2019-12-18 17:37:50', '2019-12-18 17:37:50'),
(229, 6, 1, NULL, 'Updated transaction #20', '::1', '2019-12-18 17:37:50', '2019-12-18 17:37:50'),
(230, 6, 1, NULL, 'Updated transaction #20', '::1', '2019-12-18 17:37:50', '2019-12-18 17:37:50'),
(231, 6, 1, NULL, 'Updated transaction #20', '::1', '2019-12-18 17:37:50', '2019-12-18 17:37:50'),
(232, 6, 1, NULL, 'Updated transaction #20', '::1', '2019-12-18 17:37:50', '2019-12-18 17:37:50'),
(233, 6, 1, NULL, 'Received transaction 21 from payment gateway 5', '::1', '2019-12-18 17:39:55', '2019-12-18 17:39:55'),
(234, 6, 1, NULL, 'Updated transaction #21', '::1', '2019-12-18 17:39:55', '2019-12-18 17:39:55'),
(235, 6, 1, NULL, 'Updated transaction #21', '::1', '2019-12-18 17:39:55', '2019-12-18 17:39:55'),
(236, 6, 1, NULL, 'Updated transaction #21', '::1', '2019-12-18 17:39:55', '2019-12-18 17:39:55'),
(237, 6, 1, NULL, 'Updated transaction #21', '::1', '2019-12-18 17:39:55', '2019-12-18 17:39:55'),
(238, 6, 1, NULL, 'Updated transaction #21', '::1', '2019-12-18 17:39:55', '2019-12-18 17:39:55'),
(239, 6, 1, NULL, 'Received transaction 22 from payment gateway 5', '::1', '2019-12-18 17:41:17', '2019-12-18 17:41:17'),
(240, 6, 1, NULL, 'Updated transaction #22', '::1', '2019-12-18 17:41:17', '2019-12-18 17:41:17'),
(241, 6, 1, NULL, 'Updated transaction #22', '::1', '2019-12-18 17:41:17', '2019-12-18 17:41:17'),
(242, 6, 1, NULL, 'Updated transaction #22', '::1', '2019-12-18 17:41:17', '2019-12-18 17:41:17'),
(243, 6, 1, NULL, 'Updated transaction #22', '::1', '2019-12-18 17:41:18', '2019-12-18 17:41:18'),
(244, 6, 1, NULL, 'Received transaction 23 from payment gateway 5', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(245, 6, 1, NULL, 'Updated transaction #23', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(246, 6, 1, NULL, 'Updated transaction #23', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(247, 6, 1, NULL, 'Updated transaction #23', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(248, 6, 1, NULL, 'Updated transaction #23', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(249, 6, 1, NULL, 'Marked invoice \"32\" as paid', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(250, 6, 1, NULL, 'Cover invoice with client credits', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(251, 6, 1, NULL, 'Executed action to try cover unpaid invoices with client credits', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(252, 6, 1, NULL, 'Updated transaction #23', '::1', '2019-12-18 17:43:33', '2019-12-18 17:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `role` varchar(30) DEFAULT 'staff' COMMENT 'admin, staff',
  `admin_group_id` bigint(20) DEFAULT '1',
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `protected` tinyint(1) DEFAULT '0',
  `status` varchar(30) DEFAULT 'active' COMMENT 'active, inactive',
  `api_token` varchar(128) DEFAULT NULL,
  `permissions` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `admin_group_id`, `email`, `pass`, `salt`, `name`, `signature`, `protected`, `status`, `api_token`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'admin@domain.com', '$2y$10$T0omKCMub2YcAVNm2Icz2enNbFV1lKJRppHOQgggDkDA61GClzBeG', NULL, 'admin', NULL, 1, 'active', NULL, NULL, '2019-12-18 01:26:32', '2019-12-18 01:26:32'),
(2, 'cron', 1, 'Gbi2S7fX@BonFbA70.com', '$2y$10$UD72NuJE7z16Dv4wFfuvBulMp4976cvzjw91wb9fa4M4z5cjiMJi.', NULL, 'System Cron Job', '', 1, 'active', NULL, NULL, '2019-12-17 18:34:53', '2019-12-17 18:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `admin_group`
--

CREATE TABLE `admin_group` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_group`
--

INSERT INTO `admin_group` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrators', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(2, 'Support', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `api_request`
--

CREATE TABLE `api_request` (
  `id` bigint(20) NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `request` text,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `api_request`
--

INSERT INTO `api_request` (`id`, `ip`, `request`, `created_at`) VALUES
(1, '::1', '/boxbilling/index.php?_url=/api/guest/staff/login', '2019-12-18 01:26:55'),
(2, '::1', '/boxbilling/index.php?_url=/api/admin/client/create', '2019-12-18 01:28:04'),
(3, '::1', '/boxbilling/index.php?_url=/api/admin/client/delete&id=1', '2019-12-18 01:28:16'),
(4, '::1', '/boxbilling/index.php?_url=/api/admin/client/create', '2019-12-18 01:28:53'),
(5, '::1', '/boxbilling/index.php?_url=/api/guest/client/login', '2019-12-18 01:29:10'),
(6, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_install&code=Paylane', '2019-12-18 01:34:02'),
(7, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 01:34:28'),
(8, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:34:43'),
(9, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:34:44'),
(10, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:34:45'),
(11, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:34:52'),
(12, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:34:52'),
(13, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:37:58'),
(14, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:38:10'),
(15, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:38:10'),
(16, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:38:11'),
(17, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:38:13'),
(18, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:38:14'),
(19, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:39:26'),
(20, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:39:26'),
(21, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:39:27'),
(22, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:39:29'),
(23, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:39:29'),
(24, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:41:12'),
(25, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:41:12'),
(26, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:41:13'),
(27, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:41:15'),
(28, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:41:15'),
(29, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:42:34'),
(30, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:42:35'),
(31, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:42:36'),
(32, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:42:38'),
(33, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:42:38'),
(34, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:49:07'),
(35, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:49:07'),
(36, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:49:09'),
(37, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:49:11'),
(38, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:49:11'),
(39, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:49:47'),
(40, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:49:47'),
(41, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:49:48'),
(42, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:49:54'),
(43, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:49:54'),
(44, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:50:39'),
(45, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:50:39'),
(46, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:50:41'),
(47, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:50:42'),
(48, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:50:42'),
(49, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:51:40'),
(50, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:51:40'),
(51, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:51:41'),
(52, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:51:44'),
(53, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 01:51:44'),
(54, '::1', '/boxbilling/index.php?_url=/api/admin/client/balance_add_funds', '2019-12-18 01:56:00'),
(55, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:58:40'),
(56, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:58:40'),
(57, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:58:41'),
(58, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 01:58:47'),
(59, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 01:59:22'),
(60, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 01:59:22'),
(61, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 01:59:24'),
(62, '::1', '/boxbilling/index.php?_url=/api/admin/client/create', '2019-12-18 02:00:46'),
(63, '::1', '/boxbilling/index.php?_url=/api/guest/client/login', '2019-12-18 02:01:00'),
(64, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:01:10'),
(65, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:01:10'),
(66, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:01:12'),
(67, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:01:14'),
(68, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:01:14'),
(69, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:03:40'),
(70, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:03:40'),
(71, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:03:47'),
(72, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:03:50'),
(73, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:03:50'),
(74, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:04:37'),
(75, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:04:37'),
(76, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:07:54'),
(77, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:08:01'),
(78, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:08:01'),
(79, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:08:01'),
(80, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:08:03'),
(81, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:08:03'),
(82, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:15:34'),
(83, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:15:35'),
(84, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:15:36'),
(85, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:15:38'),
(86, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:15:38'),
(87, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:35:33'),
(88, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:35:33'),
(89, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:35:35'),
(90, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:35:37'),
(91, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:35:37'),
(92, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:41:37'),
(93, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:41:38'),
(94, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:41:39'),
(95, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:41:41'),
(96, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:41:42'),
(97, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:42:31'),
(98, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:42:41'),
(99, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:42:41'),
(100, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:42:43'),
(101, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:42:46'),
(102, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:42:46'),
(103, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:47:10'),
(104, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:47:10'),
(105, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:47:12'),
(106, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:47:14'),
(107, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:47:14'),
(108, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 02:57:44'),
(109, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 02:57:44'),
(110, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 02:57:46'),
(111, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 02:57:51'),
(112, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 02:57:51'),
(113, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 03:08:51'),
(114, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 03:08:51'),
(115, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 03:08:54'),
(116, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 03:08:56'),
(117, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 03:08:57'),
(118, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 03:16:12'),
(119, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 03:16:12'),
(120, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 03:16:14'),
(121, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 03:16:16'),
(122, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 03:16:16'),
(123, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 03:16:41'),
(124, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 03:16:41'),
(125, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 03:16:43'),
(126, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 03:16:44'),
(127, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 03:16:44'),
(128, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 03:17:31'),
(129, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 03:17:39'),
(130, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 03:17:39'),
(131, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 03:17:41'),
(132, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 03:17:43'),
(133, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 03:17:43'),
(134, '::1', '/boxbilling/index.php?_url=/api/guest/staff/login', '2019-12-18 20:43:00'),
(135, '::1', '/boxbilling/index.php?_url=/api/guest/staff/login', '2019-12-18 20:43:01'),
(136, '::1', '/boxbilling/index.php?_url=/api/guest/client/login', '2019-12-18 20:50:19'),
(137, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 21:03:19'),
(138, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 21:03:20'),
(139, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 21:03:21'),
(140, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:03:23'),
(141, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 21:03:24'),
(142, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:03:33'),
(143, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 21:04:32'),
(144, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 21:04:32'),
(145, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 21:04:36'),
(146, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:04:38'),
(147, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 21:04:38'),
(148, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 21:04:49'),
(149, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 21:05:01'),
(150, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 21:05:03'),
(151, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 21:05:03'),
(152, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 21:05:04'),
(153, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:05:06'),
(154, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 21:05:06'),
(155, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_delete&id=4', '2019-12-18 21:05:44'),
(156, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_install&code=Paylane', '2019-12-18 21:05:53'),
(157, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 21:06:17'),
(158, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 21:06:31'),
(159, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 21:06:32'),
(160, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 21:06:33'),
(161, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:06:36'),
(162, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 21:06:36'),
(163, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 21:07:53'),
(164, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 21:08:09'),
(165, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 21:08:22'),
(166, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 21:08:22'),
(167, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 21:08:23'),
(168, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:08:25'),
(169, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 21:08:25'),
(170, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 21:35:05'),
(171, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 21:35:14'),
(172, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:35:36'),
(173, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 21:35:46'),
(174, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 21:35:46'),
(175, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 21:35:48'),
(176, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 21:35:50'),
(177, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 21:35:50'),
(178, '::1', '/boxbilling/index.php?_url=/api/admin/invoice/gateway_update', '2019-12-18 23:02:44'),
(179, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 23:02:56'),
(180, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 23:02:56'),
(181, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 23:02:58'),
(182, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 23:03:02'),
(183, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 23:03:02'),
(184, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 23:35:23'),
(185, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 23:35:24'),
(186, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 23:35:26'),
(187, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 23:35:30'),
(188, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 23:35:30'),
(189, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/check', '2019-12-18 23:38:01'),
(190, '::1', '/boxbilling/index.php?_url=/api/guest/servicedomain/pricing', '2019-12-18 23:38:01'),
(191, '::1', '/boxbilling/index.php?_url=/api/guest/cart/add_item', '2019-12-18 23:38:02'),
(192, '::1', '/boxbilling/index.php?_url=/api/client/cart/checkout', '2019-12-18 23:38:04'),
(193, '::1', '/boxbilling/index.php?_url=/api/guest/invoice/payment', '2019-12-18 23:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `session_id` varchar(32) DEFAULT NULL,
  `currency_id` bigint(20) DEFAULT NULL,
  `promo_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `currency_id`, `promo_id`, `created_at`, `updated_at`) VALUES
(24, 'vu2kg8s3op5shh16rc3r93jrj6', 1, NULL, '2019-12-17 20:20:18', '2019-12-17 20:20:18'),
(34, 'vkr4jclri7lhb8enf2kvhu4oe4', 1, NULL, '2019-12-18 17:40:41', '2019-12-18 17:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id` bigint(20) NOT NULL,
  `cart_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `config` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) NOT NULL,
  `aid` varchar(255) DEFAULT NULL COMMENT 'Alternative id for foreign systems',
  `client_group_id` bigint(20) DEFAULT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'client' COMMENT 'client',
  `auth_type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'active' COMMENT 'active, suspended, canceled',
  `email_approved` tinyint(1) DEFAULT NULL,
  `tax_exempt` tinyint(1) DEFAULT '0',
  `type` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone_cc` varchar(10) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `company_vat` varchar(100) DEFAULT NULL,
  `company_number` varchar(255) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `document_type` varchar(100) DEFAULT NULL,
  `document_nr` varchar(20) DEFAULT NULL,
  `notes` text,
  `currency` varchar(10) DEFAULT NULL,
  `lang` varchar(10) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `api_token` varchar(128) DEFAULT NULL,
  `referred_by` varchar(255) DEFAULT NULL,
  `custom_1` text,
  `custom_2` text,
  `custom_3` text,
  `custom_4` text,
  `custom_5` text,
  `custom_6` text,
  `custom_7` text,
  `custom_8` text,
  `custom_9` text,
  `custom_10` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `aid`, `client_group_id`, `role`, `auth_type`, `email`, `pass`, `salt`, `status`, `email_approved`, `tax_exempt`, `type`, `first_name`, `last_name`, `gender`, `birthday`, `phone_cc`, `phone`, `company`, `company_vat`, `company_number`, `address_1`, `address_2`, `city`, `state`, `postcode`, `country`, `document_type`, `document_nr`, `notes`, `currency`, `lang`, `ip`, `api_token`, `referred_by`, `custom_1`, `custom_2`, `custom_3`, `custom_4`, `custom_5`, `custom_6`, `custom_7`, `custom_8`, `custom_9`, `custom_10`, `created_at`, `updated_at`) VALUES
(2, NULL, 0, 'client', NULL, 'client1@domain.com', '$2y$10$wkgjkSKLTydS2A8yCRvbd.a8o9D.lG.RCP5gp43Tm6w6vQuSnPc9C', NULL, 'active', NULL, 0, NULL, 'Client', '1', NULL, NULL, NULL, '', 'demo', NULL, NULL, 'demo', 'demo', 'demo', 'demo', '', 'ID', NULL, NULL, NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:28:54', '2019-12-17 18:28:54'),
(3, NULL, 0, 'client', NULL, 'client2@domain.com', '$2y$10$ddeFNSFwfEJkHrTm6mu2felf4OfHZcKAqq11U5KIU2kqboYUYq.bO', NULL, 'active', NULL, 0, NULL, 'Client', '2', NULL, NULL, NULL, '', 'demo', NULL, NULL, 'demo', 'demo', 'demo', 'demo', '5100', 'ID', NULL, NULL, NULL, 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:00:46', '2019-12-17 19:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `client_balance`
--

CREATE TABLE `client_balance` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `rel_id` varchar(20) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT '0.00',
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_balance`
--

INSERT INTO `client_balance` (`id`, `client_id`, `type`, `rel_id`, `amount`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'gift', NULL, '10000.00', 'test', '2019-12-17 18:56:00', '2019-12-17 18:56:00'),
(2, 2, 'invoice', '10', '-11.99', 'Domain test.com registration', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(3, 3, 'Paylane', '15666420', '11.99', 'Paylane transaction 15666420', '2019-12-18 17:43:33', '2019-12-18 17:43:33'),
(4, 3, 'invoice', '32', '-11.99', 'Domain wtf.com registration', '2019-12-18 17:43:33', '2019-12-18 17:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `client_group`
--

CREATE TABLE `client_group` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_group`
--

INSERT INTO `client_group` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Default', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_order`
--

CREATE TABLE `client_order` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `form_id` bigint(20) DEFAULT NULL,
  `promo_id` bigint(20) DEFAULT NULL,
  `promo_recurring` tinyint(1) DEFAULT NULL,
  `promo_used` bigint(20) DEFAULT NULL,
  `group_id` varchar(255) DEFAULT NULL,
  `group_master` tinyint(1) DEFAULT '0',
  `invoice_option` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `unpaid_invoice_id` bigint(20) DEFAULT NULL,
  `service_id` bigint(20) DEFAULT NULL,
  `service_type` varchar(100) DEFAULT NULL,
  `period` varchar(20) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT '1',
  `unit` varchar(100) DEFAULT NULL,
  `price` double(18,2) DEFAULT NULL,
  `discount` double(18,2) DEFAULT NULL COMMENT 'first invoice discount',
  `status` varchar(50) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL COMMENT 'suspend/cancel reason',
  `notes` text,
  `config` text,
  `referred_by` varchar(255) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `suspended_at` datetime DEFAULT NULL,
  `unsuspended_at` datetime DEFAULT NULL,
  `canceled_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_order`
--

INSERT INTO `client_order` (`id`, `client_id`, `product_id`, `form_id`, `promo_id`, `promo_recurring`, `promo_used`, `group_id`, `group_master`, `invoice_option`, `title`, `currency`, `unpaid_invoice_id`, `service_id`, `service_type`, `period`, `quantity`, `unit`, `price`, `discount`, `status`, `reason`, `notes`, `config`, `referred_by`, `expires_at`, `activated_at`, `suspended_at`, `unsuspended_at`, `canceled_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL, NULL, NULL, '1', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 1, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"1\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:34:52', '2019-12-17 18:34:52'),
(2, 2, 1, NULL, NULL, NULL, NULL, '2', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 2, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"2\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:38:14', '2019-12-17 18:38:14'),
(3, 2, 1, NULL, NULL, NULL, NULL, '3', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 3, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"3\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:39:29', '2019-12-17 18:39:29'),
(4, 2, 1, NULL, NULL, NULL, NULL, '4', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 4, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"4\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:41:15', '2019-12-17 18:41:15'),
(5, 2, 1, NULL, NULL, NULL, NULL, '5', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 5, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"5\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:42:38', '2019-12-17 18:42:38'),
(6, 2, 1, NULL, NULL, NULL, NULL, '6', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 6, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"6\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:49:11', '2019-12-17 18:49:11'),
(7, 2, 1, NULL, NULL, NULL, NULL, '7', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 7, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"7\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:49:54', '2019-12-17 18:49:54'),
(8, 2, 1, NULL, NULL, NULL, NULL, '8', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 8, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"8\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:50:42', '2019-12-17 18:50:42'),
(9, 2, 1, NULL, NULL, NULL, NULL, '9', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 9, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"9\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 18:51:44', '2019-12-17 18:51:44'),
(10, 2, 1, NULL, NULL, NULL, NULL, '10', 1, 'issue-invoice', 'Domain test.com registration', 'USD', NULL, 1, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'active', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"10\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, '2020-12-17 18:58:47', '2019-12-17 18:58:47', NULL, NULL, NULL, '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(11, 3, 1, NULL, NULL, NULL, NULL, '11', 1, 'issue-invoice', 'Domain eeee.com registration', 'USD', 11, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"eeee\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"11\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain eeee.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(12, 3, 1, NULL, NULL, NULL, NULL, '11', 0, 'issue-invoice', 'Domain test.com registration', 'USD', 11, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"12\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(13, 3, 1, NULL, NULL, NULL, NULL, '12', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 12, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"13\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:03:50', '2019-12-17 19:03:50'),
(14, 3, 1, NULL, NULL, NULL, NULL, '13', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 13, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"14\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(15, 3, 1, NULL, NULL, NULL, NULL, '13', 0, 'issue-invoice', 'Domain fa.com registration', 'USD', 13, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"fa\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"15\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain fa.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(16, 3, 1, NULL, NULL, NULL, NULL, '14', 1, 'issue-invoice', 'Domain tsss.com registration', 'USD', 14, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"tsss\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"16\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain tsss.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:15:38', '2019-12-17 19:15:38'),
(17, 3, 1, NULL, NULL, NULL, NULL, '15', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 15, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"17\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:35:37', '2019-12-17 19:35:37'),
(18, 3, 1, NULL, NULL, NULL, NULL, '16', 1, 'issue-invoice', 'Domain tttt.com registration', 'USD', 16, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"tttt\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"18\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain tttt.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:41:41', '2019-12-17 19:41:41'),
(19, 3, 1, NULL, NULL, NULL, NULL, '17', 1, 'issue-invoice', 'Domain ffff.com registration', 'USD', 17, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"ffff\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"19\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain ffff.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:42:46', '2019-12-17 19:42:46'),
(20, 3, 1, NULL, NULL, NULL, NULL, '18', 1, 'issue-invoice', 'Domain cac.com registration', 'USD', 18, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"cac\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"20\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain cac.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:47:14', '2019-12-17 19:47:14'),
(21, 3, 1, NULL, NULL, NULL, NULL, '19', 1, 'issue-invoice', 'Domain zzzz.com registration', 'USD', 19, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"zzzz\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"21\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain zzzz.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 19:57:51', '2019-12-17 19:57:51'),
(22, 3, 1, NULL, NULL, NULL, NULL, '20', 1, 'issue-invoice', 'Domain gaga.com registration', 'USD', 20, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"gaga\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"22\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain gaga.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 20:08:56', '2019-12-17 20:08:56'),
(23, 3, 1, NULL, NULL, NULL, NULL, '21', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 21, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"23\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 20:16:16', '2019-12-17 20:16:16'),
(24, 3, 1, NULL, NULL, NULL, NULL, '22', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 22, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"24\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 20:16:44', '2019-12-17 20:16:44'),
(25, 3, 1, NULL, NULL, NULL, NULL, '23', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 23, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"25\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-17 20:17:43', '2019-12-17 20:17:43'),
(26, 3, 1, NULL, NULL, NULL, NULL, '25', 1, 'issue-invoice', 'Domain test.com registration', 'USD', 24, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"test\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"26\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain test.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 14:03:23', '2019-12-18 14:03:23'),
(27, 3, 1, NULL, NULL, NULL, NULL, '26', 1, 'issue-invoice', 'Domain fafa.com registration', 'USD', 25, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"fafa\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"27\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain fafa.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 14:04:38', '2019-12-18 14:04:38'),
(28, 3, 1, NULL, NULL, NULL, NULL, '27', 1, 'issue-invoice', 'Domain fafaf.com registration', 'USD', 26, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"fafaf\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"28\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain fafaf.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 14:05:06', '2019-12-18 14:05:06'),
(29, 3, 1, NULL, NULL, NULL, NULL, '28', 1, 'issue-invoice', 'Domain caca.com registration', 'USD', 27, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"caca\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"29\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain caca.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 14:06:36', '2019-12-18 14:06:36'),
(30, 3, 1, NULL, NULL, NULL, NULL, '29', 1, 'issue-invoice', 'Domain fafa.com registration', 'USD', 28, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"fafa\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"30\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain fafa.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 14:08:25', '2019-12-18 14:08:25'),
(31, 3, 1, NULL, NULL, NULL, NULL, '30', 1, 'issue-invoice', 'Domain caca.com registration', 'USD', 29, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"caca\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"31\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain caca.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 14:35:50', '2019-12-18 14:35:50'),
(32, 3, 1, NULL, NULL, NULL, NULL, '31', 1, 'issue-invoice', 'Domain aaaa.com registration', 'USD', 30, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"aaaa\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"32\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain aaaa.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 16:03:02', '2019-12-18 16:03:02'),
(33, 3, 1, NULL, NULL, NULL, NULL, '32', 1, 'issue-invoice', 'Domain caca.com registration', 'USD', 31, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"caca\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"33\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain caca.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 16:35:30', '2019-12-18 16:35:30'),
(34, 3, 1, NULL, NULL, NULL, NULL, '33', 1, 'issue-invoice', 'Domain wtf.com registration', 'USD', NULL, NULL, 'domain', '1Y', 1, 'year', 11.99, 0.00, 'pending_setup', NULL, NULL, '{\"register_sld\":\"wtf\",\"register_tld\":\".com\",\"register_years\":\"1\",\"ns1\":\"\",\"ns2\":\"\",\"ns3\":\"\",\"ns4\":\"\",\"transfer_sld\":\"\",\"transfer_tld\":\".com\",\"transfer_code\":\"\",\"action\":\"register\",\"multiple\":\"1\",\"period\":\"1Y\",\"quantity\":1,\"id\":\"34\",\"product_id\":\"1\",\"form_id\":null,\"title\":\"Domain wtf.com registration\",\"type\":\"domain\",\"unit\":\"year\",\"price\":\"11.99\",\"setup_price\":0,\"discount\":0,\"discount_price\":0,\"discount_setup\":0,\"total\":11.99}', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 16:38:04', '2019-12-18 17:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `client_order_meta`
--

CREATE TABLE `client_order_meta` (
  `id` bigint(20) NOT NULL,
  `client_order_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `client_order_status`
--

CREATE TABLE `client_order_status` (
  `id` bigint(20) NOT NULL,
  `client_order_id` bigint(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `notes` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_order_status`
--

INSERT INTO `client_order_status` (`id`, `client_order_id`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 'pending_setup', 'Order created', '2019-12-17 18:34:52', '2019-12-17 18:34:52'),
(2, 2, 'pending_setup', 'Order created', '2019-12-17 18:38:14', '2019-12-17 18:38:14'),
(3, 3, 'pending_setup', 'Order created', '2019-12-17 18:39:29', '2019-12-17 18:39:29'),
(4, 4, 'pending_setup', 'Order created', '2019-12-17 18:41:15', '2019-12-17 18:41:15'),
(5, 5, 'pending_setup', 'Order created', '2019-12-17 18:42:38', '2019-12-17 18:42:38'),
(6, 6, 'pending_setup', 'Order created', '2019-12-17 18:49:11', '2019-12-17 18:49:11'),
(7, 7, 'pending_setup', 'Order created', '2019-12-17 18:49:54', '2019-12-17 18:49:54'),
(8, 8, 'pending_setup', 'Order created', '2019-12-17 18:50:42', '2019-12-17 18:50:42'),
(9, 9, 'pending_setup', 'Order created', '2019-12-17 18:51:44', '2019-12-17 18:51:44'),
(10, 10, 'pending_setup', 'Order created', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(11, 10, 'active', 'Order activated', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(12, 11, 'pending_setup', 'Order created', '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(13, 12, 'pending_setup', 'Order created', '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(14, 13, 'pending_setup', 'Order created', '2019-12-17 19:03:50', '2019-12-17 19:03:50'),
(15, 14, 'pending_setup', 'Order created', '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(16, 15, 'pending_setup', 'Order created', '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(17, 16, 'pending_setup', 'Order created', '2019-12-17 19:15:38', '2019-12-17 19:15:38'),
(18, 17, 'pending_setup', 'Order created', '2019-12-17 19:35:37', '2019-12-17 19:35:37'),
(19, 18, 'pending_setup', 'Order created', '2019-12-17 19:41:41', '2019-12-17 19:41:41'),
(20, 19, 'pending_setup', 'Order created', '2019-12-17 19:42:46', '2019-12-17 19:42:46'),
(21, 20, 'pending_setup', 'Order created', '2019-12-17 19:47:14', '2019-12-17 19:47:14'),
(22, 21, 'pending_setup', 'Order created', '2019-12-17 19:57:51', '2019-12-17 19:57:51'),
(23, 22, 'pending_setup', 'Order created', '2019-12-17 20:08:56', '2019-12-17 20:08:56'),
(24, 23, 'pending_setup', 'Order created', '2019-12-17 20:16:16', '2019-12-17 20:16:16'),
(25, 24, 'pending_setup', 'Order created', '2019-12-17 20:16:44', '2019-12-17 20:16:44'),
(26, 25, 'pending_setup', 'Order created', '2019-12-17 20:17:43', '2019-12-17 20:17:43'),
(27, 26, 'pending_setup', 'Order created', '2019-12-18 14:03:23', '2019-12-18 14:03:23'),
(28, 27, 'pending_setup', 'Order created', '2019-12-18 14:04:38', '2019-12-18 14:04:38'),
(29, 28, 'pending_setup', 'Order created', '2019-12-18 14:05:06', '2019-12-18 14:05:06'),
(30, 29, 'pending_setup', 'Order created', '2019-12-18 14:06:36', '2019-12-18 14:06:36'),
(31, 30, 'pending_setup', 'Order created', '2019-12-18 14:08:25', '2019-12-18 14:08:25'),
(32, 31, 'pending_setup', 'Order created', '2019-12-18 14:35:50', '2019-12-18 14:35:50'),
(33, 32, 'pending_setup', 'Order created', '2019-12-18 16:03:02', '2019-12-18 16:03:02'),
(34, 33, 'pending_setup', 'Order created', '2019-12-18 16:35:30', '2019-12-18 16:35:30'),
(35, 34, 'pending_setup', 'Order created', '2019-12-18 16:38:04', '2019-12-18 16:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `client_password_reset`
--

CREATE TABLE `client_password_reset` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` bigint(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT '0',
  `conversion_rate` decimal(13,6) DEFAULT '1.000000',
  `format` varchar(30) DEFAULT NULL,
  `price_format` varchar(50) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `is_default`, `conversion_rate`, `format`, `price_format`, `created_at`, `updated_at`) VALUES
(1, 'US Dollar', 'USD', 1, '1.000000', '${{price}}', '1', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` bigint(20) NOT NULL,
  `action_code` varchar(255) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL COMMENT 'general, domain, invoice, hosting, support, download, custom, license',
  `enabled` tinyint(1) DEFAULT '1',
  `subject` varchar(255) DEFAULT NULL,
  `content` text,
  `description` text,
  `vars` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `action_code`, `category`, `enabled`, `subject`, `content`, `description`, `vars`) VALUES
(1, 'mod_client_confirm', 'client', 1, '[{{ guest.system_company.name }}] Please confirm your email address ', '\n{% filter markdown %}\nHello {{ c.first_name }} {{ c.last_name }},\n\nPlease verify your email by clicking on the link below:\n\n{{email_confirmation_link}}\n\nTo login, visit {{\'login\'|link({\'email\' : c.email }) }}\nEdit your profile at {{\'client/me\'|link}}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(2, 'mod_client_password_reset_approve', 'client', 1, '[{{ guest.system_company.name }}] Password Changed', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nAs you requested, your password for our client area has now been reset. \nYour new login details are as follows:\n\nLogin at: {{\'login\'|link({\'email\' : c.email }) }}\nEmail: {{ c.email }}\nPassword: {{ password }}\n\nTo change your password to something more memorable, after logging in go to \nProfile &gt; Change Password.\n\nEdit your profile at {{ \'client/me\'|link }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(3, 'mod_client_password_reset_request', 'client', 1, '[{{ guest.system_company.name }}] Confirm Password Reset', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nRecently a request was submitted to reset your password for the client area.\nIf you did not request this, please ignore this email. It will expire and will not work in 2 hours time.\n\nTo reset your password, please visit the url below:    \n{{\'client/reset-password-confirm\'|link}}/{{ hash }}\n\n\nWhen you visit the link above, your password will be reset and a new \npassword will be emailed to you.\n\nTo login, visit {{\'login\'|link({\'email\' : c.email }) }}\nEdit your profile at {{\'client/me\'|link}}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(4, 'mod_client_signup', 'client', 1, '[{{ guest.system_company.name }}] Welcome {{ c.first_name }}', '\n{% filter markdown %}\nHello {{ c.first_name }} {{ c.last_name }},\n\nThank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below.\n\n\nEmail: {{c.email}}    \nPassword: {{password}}\n\n{% if require_email_confirmation %}\n\nApprove your email by clicking on the link below:\n\n{{email_confirmation_link}}\n\n{% endif %}\n\nTo login, visit {{\'login\'|link({\'email\' : c.email }) }}\nEdit your profile at {{\'client/me\'|link}}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(5, 'mod_email_test', 'email', 1, '[{{ guest.system_company.name }}] BoxBilling Email Test', '\n{% filter markdown %}\nHi {{ staff.name }},\n\nIf you are reading this email, BoxBilling is **configured properly** \nand is **able to send emails**.\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(6, 'mod_forum_new_post', 'forum', 1, '[{{ guest.system_company.name }}] New Forum Message', '\n{% filter markdown %}\nHello {{ c.first_name }} {{ c.last_name }},\n\nNew message was posted on Forum **{{ topic.forum.title }} > {{ topic.title }}**\n\n***\n\n{{ message.message }}\n\n***\n\nTo reply to this message or disable notifications, visit the link below:\n\n{{ \'forum\'|link }}/{{ topic.forum.slug }}/{{ topic.slug }}   \n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(7, 'mod_invoice_created', 'invoice', 1, '[{{ guest.system_company.name }}] Invoice Created', '\n{% filter markdown %}\nHello {{ c.first_name }} {{ c.last_name }},\n\nThis is to notify that proforma invoice {{ invoice.id }} was generated on {{ invoice.created_at|bb_date }}.\nAmount Due: {{ invoice.total | money(invoice.currency) }}\nDue Date: {{invoice.due_at|bb_date}}\n\nYou can view and pay the invoice at: {{\'invoice\'|link}}/{{invoice.hash}}\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(8, 'mod_invoice_due_after', 'invoice', 1, '[{{ guest.system_company.name }}] Invoice Due', '\n{% filter markdown %}\nHello {{ c.first_name }} {{ c.last_name }},\n\nThis is a payment reminder that your proforma invoice **{{ invoice.serie_nr }}** is already\ndue for {{ days_passed }} days.   \n\nAmount due: {{ invoice.total | money(invoice.currency) }}\nDue Date: {{ invoice.due_at|bb_date }}\n\nYou can view and pay the invoice at: {{\'invoice\'|link}}/{{invoice.hash}}\n\nYou may review your invoice history at any time by logging in to your client area.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nView and manage invoices: {{\'invoice\'|link}}  \n\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(9, 'mod_invoice_paid', 'invoice', 1, '[{{ guest.system_company.name }}] Payment Received', '\n{% filter markdown %}\nHello {{ c.first_name }} {{ c.last_name }},\n\nThis is a payment receipt for Invoice **{{ invoice.serie_nr }}** issued on\n{{invoice.created_at|date(\'Y-m-d\')}}\n\nTotal Paid: {{ invoice.total | money(invoice.currency) }}\n\nYou may review your invoice history at any time by logging in to your client area.\nNote: This email serves as an official receipt for this payment.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nView invoice: {{\'invoice\'|link}}/{{invoice.hash}}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(10, 'mod_invoice_payment_reminder', 'invoice', 1, '[{{ guest.system_company.name }}] Payment Reminder', '\n{% filter markdown %}\nHello {{ c.first_name }} {{ c.last_name }},\n\nThis is to remind that your proforma invoice **{{ invoice.serie_nr }}** is due\nin {{ invoice.due_at|daysleft }} days.   \n\nAmount due: {{ invoice.total | money(invoice.currency) }}\nDue Date: {{ invoice.due_at|bb_date }}\n\nYou can view and pay the invoice at: {{\'invoice\'|link}}/{{invoice.hash}}\n\nYou may review your invoice history at any time by logging in to your client area.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nView and manage invoices: {{\'invoice\'|link}}  \n\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(11, 'mod_servicecustom_activated', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Activated', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour **{{ order.title }}** is now active.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(12, 'mod_servicecustom_canceled', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Canceled', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* that was activated on *{{ order.activated_at|bb_date }}* is now canceled\n{% if order.reason %} Reason:     \n\n**{{ order.reason }}** {% endif %}   \n\nIf you have any questions regarding this message please login to the members area and submit a support ticket.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nSubmit support ticket: {{ \'support\'|link({\'ticket\' : 1}) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(13, 'mod_servicecustom_renewed', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour **{{ order.title }}** has been renewed.\n\n{% if order.expires_at %}\n\nNext renewal date: {{ order.expires_at|bb_date }}\n\n{% endif %}\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(14, 'mod_servicecustom_suspended', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* that was activated at *{{ order.activated_at|bb_date }}* is now suspended\n{% if order.reason %} Reason:     \n\n**{{ order.reason }}** {% endif %}   \n\nIf you have any questions regarding this message please login to the members area and submit a support ticket.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nSubmit support ticket: {{ \'support\'|link({\'ticket\' : 1}) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(15, 'mod_servicecustom_unsuspended', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated ', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* has been reactivated. \n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(16, 'mod_servicedomain_activated', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }}', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nThis message is to confirm that your **{{ order.title }}** has been successful. \n\nPlease keep in mind that your domain name will not be visible  on the internet \ninstantly. This process is called propagation and can take up to 48 hours. \nYour website and  email will not function until the domain has propagated.\n\n\n**Domain details:**\n\n\nDomain: {{ service.domain }}     \nRegistration date: {{order.created_at|bb_date}}\nRegistration period: {{service.period}} Year(s)   \n{% if order.expires_at %}Expires on: {{ order.expires_at|bb_date }} {% endif %}\n{% if order.period %}\nBilling period:\n\n{{ order.total | money(order.currency) }}\n{{ order.period | period_title }}\n\n{% endif %}       \n\n\n**Domain nameservers**\n\nNameserver 1: {{ service.ns1 }}   \nNameserver 2: {{ service.ns2 }}   \n{% if  service.server.ns3 %}Nameserver 3: {{ service.ns3 }}   {% endif %}\n{% if  service.server.ns4 %}Nameserver 4: {{ service.ns4 }}   {% endif %}\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(17, 'mod_servicedomain_renewed', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour **{{ order.title }}** has been renewed.\n\n{% if order.expires_at %}\n\nNext renewal date: {{ order.expires_at|bb_date }}\n\n{% endif %}\n\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(18, 'mod_servicedomain_suspended', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* that was activated on *{{ order.activated_at|bb_date }}* is now suspended.\n{% if order.reason %} Reason:     \n\n**{{ order.reason }}** {% endif %}   \n\nIf you have any questions regarding this message please login to the members area and submit a support ticket.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nSubmit support ticket: {{ \'support\'|link({\'ticket\' : 1}) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(19, 'mod_servicedomain_unsuspended', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* has been reactivated. \n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(20, 'mod_servicedownloadable_activated', 'servicedownloadable', 1, '[{{ guest.system_company.name }}] {{ order.title }} Ready to Download', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour **{{ order.title }}** is now active and ready for download.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nDownload URL: {{ \'servicedownloadable/get-file\'|link }}/{{ order.id }}     \n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(21, 'mod_servicehosting_activated', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Activated', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nThank you for ordering with us! Your hosting account has now been set up. This email contains all the information you will need in order to begin using your service.\n\nIf you have requested a domain name during the signup, please keep in mind that \nyour domain name will not be visible  on the internet instantly. \nThis process is called propagation and can take up to 48 hours. \nYour website and email will not function until your domain has propagated.\n\n**{{ order.title }}**\n\nActivated: {{ order.activated_at|bb_date }}\n{% if order.expires_at %}Expires: {{ order.expires_at|bb_date }} {% endif %}\n{% if order.period %}\nBilling period:\n\n{{ order.total | money(order.currency) }}\n{{ order.period | period_title }}\n\n{% endif %}       \n\n**New Account Information**\n\n\nHosting Package: {{ service.hosting_plan.name }}    \nDomain: {{ service.domain }}    \nIP Address: {{ service.server.ip }}\n\n\n**Control Panel Login Details**\n\nUsername: {{ service.username }}    \nPassword: {{ password }}     \nControl Panel URL: {{ service.server.cpanel_url }}\n\n\n**Server Information**\n\nServer Name: {{ service.server.name }}     \nServer IP: {{ service.server.ip }}\n\nIf you are using an existing domain with your new hosting account, you  will \nneed to update the domain settings to point it to the nameservers listed below.\n\nNameserver 1: {{ service.server.ns1 }}   \nNameserver 2: {{ service.server.ns2 }}   \n{% if  service.server.ns3 %}Nameserver 3: {{ service.server.ns3 }}   {% endif %}\n{% if  service.server.ns4 %}Nameserver 4: {{ service.server.ns4 }}   {% endif %}\n\n**Uploading Your Website**\n\n\nYou may use one of the addresses given below to manage your web site:\n\n\nTemporary FTP Hostname: {{ service.server.ip }}    \nFull FTP Hostname: {{ service.domain }}    \nFTP Username: {{ service.username }}    \nFTP Password: {{ password }}    \n\nYou must upload files to the **public_html** folder!\nThank you for choosing us.\n\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(22, 'mod_servicehosting_canceled', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Canceled', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* that was issued on *{{ order.activated_at|bb_date }}* is now canceled.\n{% if order.reason %} Reason:     \n\n**{{ order.reason }}** {% endif %}   \n\nIf you have any questions regarding this message please login to the members area and submit a support ticket.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nSubmit support ticket: {{ \'support\'|link({\'ticket\' : 1}) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(23, 'mod_servicehosting_renewed', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour **{{ order.title }}** has been renewed.\n\n{% if order.expires_at %}\n\nNext renewal date: {{ order.expires_at|bb_date }}\n\n{% endif %}\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(24, 'mod_servicehosting_suspended', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* that was issued on *{{ order.activated_at|bb_date }}* is now suspended.\n{% if order.reason %} Reason:     \n\n**{{ order.reason }}** {% endif %}   \n\nIf you have any questions regarding this message please login to the members area and submit a support ticket.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nSubmit support ticket: {{ \'support\'|link({\'ticket\' : 1}) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(25, 'mod_servicehosting_unsuspended', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* has been reactivated.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(26, 'mod_servicelicense_activated', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Activated', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour **{{ order.title }}** is now active.\n\nLicense key: **{{ service.license_key }}**\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(27, 'mod_servicelicense_canceled', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Canceled', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* that was issued on *{{ order.activated_at|bb_date }}* is now canceled.\n{% if order.reason %} due to reason:     \n\n**{{ order.reason }}** {% endif %}   \n\nIf you have any questions regarding this message please login to the members area and submit a support ticket.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nSubmit support ticket: {{ \'support\'|link({\'ticket\' : 1}) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(28, 'mod_servicelicense_renewed', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour **{{ order.title }}** has been renewed.\n\n{% if order.expires_at %}\n\nNext renewal date: {{ order.expires_at|bb_date }}\n\n{% endif %}\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(29, 'mod_servicelicense_suspended', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* that was issued on *{{ order.activated_at|bb_date }}* is now suspended.\n{% if order.reason %} due to reason:     \n\n**{{ order.reason }}** {% endif %}   \n\nIf you have any questions regarding this message please login to the members area and submit a support ticket.\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nSubmit support ticket: {{ \'support\'|link({\'ticket\' : 1}) }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(30, 'mod_servicelicense_unsuspended', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated', '\n{% filter markdown %}\n\nHello {{ c.first_name }} {{ c.last_name }},\n\nYour *{{ order.title }}* has been reactivated. \n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nManage order: {{ \'order/service/manage\'|link }}/{{ order.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(31, 'mod_staff_client_order', 'staff', 1, '[{{ guest.system_company.name }}] New Order Placed', '\n{% filter markdown %}\nHi {{ staff.name }},\n\nClient **{{ order.client.first_name }} {{ order.client.last_name }}** placed a new order for **{{ order.title }}** on {{ order.created_at|bb_date }}\n\nManage order {{\'order/manage\'|alink}}/{{order.id}}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(32, 'mod_staff_client_signup', 'staff', 1, '[{{ guest.system_company.name }}] New Client Signed Up', '\n{% filter markdown %}\nHi {{ staff.name }},\n\n *{{ c.first_name }} {{ c.last_name }}* has just signed up with {{ guest.system_company.name }}\n\nManage client at {{\'client/manage\'|alink}}/{{c.id}}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(33, 'mod_staff_pticket_close', 'staff', 1, '[{{ guest.system_company.name }}] {{ticket.subject}} [closed]', '\n{% filter markdown %}\n\nHi {{ staff.name }},\n\nPublic ticket {{ \'support/public-ticket/\'|alink }}/{{ticket.id}} was closed by client.\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(34, 'mod_staff_pticket_open', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n{% filter markdown %}\nHi {{ staff.name }},\n\nNew public ticket received. \n\nReply at {{\'support/public-ticket\'|alink }}/{{ ticket.id }}\n\nTrack conversation at:  {{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(35, 'mod_staff_pticket_reply', 'staff', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n{% filter markdown %}\n\nHi {{ staff.name }},\n\nNew reply posted on ticket {{ \'support/public-ticket/\'|alink }}/{{ticket.id}}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(36, 'mod_staff_ticket_close', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n{% filter markdown %}\nHi {{ staff.name }},\n\n **{{ ticket.client.first_name }} {{ ticket.client.last_name }}** closed support ticket #{{ ticket.id }}\n\nReview the ticket at {{\'support/ticket\'|alink }}/{{ ticket.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(37, 'mod_staff_ticket_open', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n{% filter markdown %}\nHi {{ staff.name }},\n\n **{{ ticket.client.first_name }} {{ ticket.client.last_name }}** opened a new support ticket #{{ ticket.id }}\n\n***\n\n{{ ticket.messages[0].content }}\n\n***\n\nTicket ID: #{{ticket.id}}   \nDepartment: {{ticket.helpdesk.name}}   \nStatus: {{ticket.status|title}}\n\nReply at {{\'support/ticket\'|alink }}/{{ ticket.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(38, 'mod_staff_ticket_reply', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n{% filter markdown %}\nHi {{ staff.name }},\n\n **{{ ticket.client.first_name }} {{ ticket.client.last_name }}** replied to support ticket #{{ ticket.id }}\n\nTicket ID: #{{ticket.id}}   \nDepartment: {{ticket.helpdesk.name}}   \nStatus: {{ticket.status|title}}\n\nReply at {{\'support/ticket\'|alink }}/{{ ticket.id }}\n\n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(39, 'mod_support_helpdesk_ticket_open', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n{% filter markdown %}\n\n{{ticket.messages[0].content}}\n\n***\n\nTicket ID: #{{ticket.id}}   \nDepartment: {{ticket.helpdesk.name}}   \nStatus: {{ticket.status|title}}   \n\nReply Ticket at: {{\'support/ticket\'|link}}/{{ ticket.id }}\n\n\nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n\n', NULL, NULL),
(40, 'mod_support_pticket_open', 'support', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n{% filter markdown %}\nHi {{ ticket.author_name }},\n\nThank You for Your request. We will reply in 24 hours.\nYou can track and respond to this conversation at {{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\n\nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(41, 'mod_support_pticket_staff_close', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}} [closed]', '\n{% filter markdown %}\n\nHi {{ ticket.author_name }},\n\nThis is a confirmation email to inform you that your ticket was closed.\n\nYou can track conversation at   \n\n{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\n      \nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(42, 'mod_support_pticket_staff_open', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n{% filter markdown %}\n\nHi {{ ticket.author_name }},\n\n{{ticket.messages[0].content}}\n\n***\n\nYou can track and respond to this conversation at:\n\n{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\n      \nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(43, 'mod_support_pticket_staff_reply', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n{% filter markdown %}\n\nHi {{ ticket.author_name }},\n\nNew reply was posted to request **{{ticket.subject}}**\n\nYou can track and respond to this conversation at:\n\n{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\n      \nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(44, 'mod_support_ticket_open', 'support', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n{% filter markdown %}\nHi {{ c.first_name }} {{ c.last_name }},\n\nThank you for contacting our support team. \nA support ticket has now been opened for your request. You will be notified when \na response is made by email. The details of your ticket are shown below.\n\nTicket ID: #{{ticket.id}}   \nDepartment: {{ticket.helpdesk.name}}   \nStatus: {{ticket.status|title}}\n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nReply Ticket at: {{\'support/ticket\'|link}}/{{ ticket.id }}\n\nPlease do not reply to this email directly.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(45, 'mod_support_ticket_staff_close', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n{% filter markdown %}\n\nHi {{ c.first_name }} {{ c.last_name }},\n\nThis a notification message to inform you that ticket **{{ticket.subject}}**\nis now closed.\n\n\nTicket ID: #{{ticket.id}}   \nDepartment: {{ticket.helpdesk.name}}   \nStatus: {{ticket.status|title}}   \n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nReply Ticket at: {{\'support/ticket\'|link}}/{{ ticket.id }}\n\nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL),
(46, 'mod_support_ticket_staff_open', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n{% filter markdown %}\n\nHi {{ c.first_name }} {{ c.last_name }},\n\n{{ticket.messages[0].content}}\n\n***\n\nTicket ID: #{{ticket.id}}   \nDepartment: {{ticket.helpdesk.name}}   \nStatus: {{ticket.status|title}}   \n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nReply Ticket at: {{\'support/ticket\'|link}}/{{ ticket.id }}\n\n\nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n\n', NULL, NULL),
(47, 'mod_support_ticket_staff_reply', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n{% filter markdown %}\n\nHi {{ c.first_name }} {{ c.last_name }},\n\nNew reply was posted to request **{{ticket.subject}}**\n\nTicket ID: #{{ticket.id}}   \nDepartment: {{ticket.helpdesk.name}}   \nStatus: {{ticket.status|title}}  \n\nLogin to members area: {{\'login\'|link({\'email\' : c.email }) }}\nReply Ticket at: {{\'support/ticket\'|link}}/{{ ticket.id }}\n\n\nPlease do not reply to this email directly. Use the link provided above.\n      \n{{ guest.system_company.signature }}\n\n{% endfilter %}\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `extension`
--

CREATE TABLE `extension` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `version` varchar(100) DEFAULT NULL,
  `manifest` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extension`
--

INSERT INTO `extension` (`id`, `type`, `name`, `status`, `version`, `manifest`) VALUES
(1, 'mod', 'forum', 'installed', '1.0.0', '{\"id\":\"forum\",\"type\":\"mod\",\"name\":\"Forum\",\"description\":\"Forum for BoxBilling\",\"homepage_url\":\"http:\\/\\/github.com\\/boxbilling\\/\",\"author\":\"BoxBilling\",\"author_url\":\"http:\\/\\/extensions.boxbilling.com\\/\",\"license\":\"http:\\/\\/www.boxbilling.com\\/license.txt\",\"version\":\"1.0.0\",\"icon_url\":null,\"download_url\":null,\"project_url\":\"https:\\/\\/extensions.boxbilling.com\\/\",\"minimum_boxbilling_version\":null,\"maximum_boxbilling_version\":null}\n'),
(2, 'mod', 'kb', 'installed', '1.0.0', '{\"id\":\"kb\",\"type\":\"mod\",\"name\":\"Knowledge base\",\"description\":\"Knowledge base module for BoxBilling\",\"homepage_url\":\"http:\\/\\/github.com\\/boxbilling\\/\",\"author\":\"BoxBilling\",\"author_url\":\"http:\\/\\/extensions.boxbilling.com\\/\",\"license\":\"http:\\/\\/www.boxbilling.com\\/license.txt\",\"version\":\"1.0.0\",\"icon_url\":null,\"download_url\":null,\"project_url\":\"https:\\/\\/extensions.boxbilling.com\\/\",\"minimum_boxbilling_version\":null,\"maximum_boxbilling_version\":null}\n'),
(3, 'mod', 'news', 'installed', '1.0.0', '{\"id\":\"news\",\"type\":\"mod\",\"name\":\"News\",\"description\":\"News module for BoxBilling\",\"homepage_url\":\"http:\\/\\/github.com\\/boxbilling\\/\",\"author\":\"BoxBilling\",\"author_url\":\"http:\\/\\/extensions.boxbilling.com\\/\",\"license\":\"http:\\/\\/www.boxbilling.com\\/license.txt\",\"version\":\"1.0.0\",\"icon_url\":null,\"download_url\":null,\"project_url\":\"https:\\/\\/extensions.boxbilling.com\\/\",\"minimum_boxbilling_version\":null,\"maximum_boxbilling_version\":null}\n'),
(4, 'mod', 'branding', 'installed', '1.0.0', '{\"id\":\"branding\",\"type\":\"mod\",\"name\":\"Branding\",\"description\":\"BoxBilling branding module. Can be deactivated by PRO license owners only.\",\"homepage_url\":\"http:\\/\\/github.com\\/boxbilling\\/\",\"author\":\"BoxBilling\",\"author_url\":\"http:\\/\\/extensions.boxbilling.com\\/\",\"license\":\"http:\\/\\/www.boxbilling.com\\/license.txt\",\"version\":\"1.0.0\",\"icon_url\":null,\"download_url\":null,\"project_url\":\"https:\\/\\/extensions.boxbilling.com\\/\",\"minimum_boxbilling_version\":null,\"maximum_boxbilling_version\":null}\n'),
(5, 'mod', 'redirect', 'installed', '1.0.0', '{\"id\":\"redirect\",\"type\":\"mod\",\"name\":\"Redirect\",\"description\":\"Manage redirects\",\"homepage_url\":\"https:\\/\\/github.com\\/boxbilling\\/\",\"author\":\"BoxBilling\",\"author_url\":\"http:\\/\\/www.boxbilling.com\",\"license\":\"GPL version 2 or later - http:\\/\\/www.gnu.org\\/licenses\\/old-licenses\\/gpl-2.0.html\",\"version\":\"1.0.0\",\"icon_url\":null,\"download_url\":null,\"project_url\":\"https:\\/\\/extensions.boxbilling.com\\/\",\"minimum_boxbilling_version\":null,\"maximum_boxbilling_version\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `extension_meta`
--

CREATE TABLE `extension_meta` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `rel_type` varchar(255) DEFAULT NULL,
  `rel_id` varchar(255) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extension_meta`
--

INSERT INTO `extension_meta` (`id`, `client_id`, `extension`, `rel_type`, `rel_id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mod_theme', 'preset', 'current', 'huraga', 'Test', '2019-12-18 01:26:42', '2019-12-18 01:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `style` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

CREATE TABLE `form_field` (
  `id` bigint(20) NOT NULL,
  `form_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `hide_label` tinyint(1) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `hidden` tinyint(1) DEFAULT NULL,
  `readonly` tinyint(1) DEFAULT NULL,
  `is_unique` tinyint(1) DEFAULT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `options` text,
  `show_initial` varchar(255) DEFAULT NULL,
  `show_middle` varchar(255) DEFAULT NULL,
  `show_prefix` varchar(255) DEFAULT NULL,
  `show_suffix` varchar(255) DEFAULT NULL,
  `text_size` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` bigint(20) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` text,
  `description` text,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `category`, `title`, `description`, `slug`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'General', 'Discussions Rules', 'Please read our forum rules before posting to our forums', 'forum-rules', 'active', 1, '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `forum_topic`
--

CREATE TABLE `forum_topic` (
  `id` bigint(20) NOT NULL,
  `forum_id` bigint(20) DEFAULT NULL,
  `title` text,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `sticky` tinyint(1) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topic_message`
--

CREATE TABLE `forum_topic_message` (
  `id` bigint(20) NOT NULL,
  `forum_topic_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `message` text,
  `ip` varchar(45) DEFAULT NULL,
  `points` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `nr` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL COMMENT 'To access via public link',
  `currency` varchar(25) DEFAULT NULL,
  `currency_rate` decimal(13,6) DEFAULT NULL,
  `credit` double(18,2) DEFAULT NULL,
  `base_income` double(18,2) DEFAULT NULL COMMENT 'Income in default currency',
  `base_refund` double(18,2) DEFAULT NULL COMMENT 'Refund in default currency',
  `refund` double(18,2) DEFAULT NULL,
  `notes` text,
  `text_1` text,
  `text_2` text,
  `status` varchar(50) DEFAULT 'unpaid' COMMENT 'paid, unpaid',
  `seller_company` varchar(255) DEFAULT NULL,
  `seller_company_vat` varchar(255) DEFAULT NULL,
  `seller_company_number` varchar(255) DEFAULT NULL,
  `seller_address` varchar(255) DEFAULT NULL,
  `seller_phone` varchar(255) DEFAULT NULL,
  `seller_email` varchar(255) DEFAULT NULL,
  `buyer_first_name` varchar(255) DEFAULT NULL,
  `buyer_last_name` varchar(255) DEFAULT NULL,
  `buyer_company` varchar(255) DEFAULT NULL,
  `buyer_company_vat` varchar(255) DEFAULT NULL,
  `buyer_company_number` varchar(255) DEFAULT NULL,
  `buyer_address` varchar(255) DEFAULT NULL,
  `buyer_city` varchar(255) DEFAULT NULL,
  `buyer_state` varchar(255) DEFAULT NULL,
  `buyer_country` varchar(255) DEFAULT NULL,
  `buyer_zip` varchar(255) DEFAULT NULL,
  `buyer_phone` varchar(255) DEFAULT NULL,
  `buyer_phone_cc` varchar(255) DEFAULT NULL,
  `buyer_email` varchar(255) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT '0',
  `taxname` varchar(255) DEFAULT NULL,
  `taxrate` varchar(35) DEFAULT NULL,
  `due_at` datetime DEFAULT NULL,
  `reminded_at` datetime DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `client_id`, `serie`, `nr`, `hash`, `currency`, `currency_rate`, `credit`, `base_income`, `base_refund`, `refund`, `notes`, `text_1`, `text_2`, `status`, `seller_company`, `seller_company_vat`, `seller_company_number`, `seller_address`, `seller_phone`, `seller_email`, `buyer_first_name`, `buyer_last_name`, `buyer_company`, `buyer_company_vat`, `buyer_company_number`, `buyer_address`, `buyer_city`, `buyer_state`, `buyer_country`, `buyer_zip`, `buyer_phone`, `buyer_phone_cc`, `buyer_email`, `gateway_id`, `approved`, `taxname`, `taxrate`, `due_at`, `reminded_at`, `paid_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'BOX', '1', '07c7de7f9a6952770653e79a4644ea24826fd9f0', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:34:52', NULL, NULL, '2019-12-17 18:34:52', '2019-12-17 18:34:52'),
(2, 2, 'BOX', '2', '58ef8edb39868e88622bcdb858cde940a71f1f31', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:38:14', NULL, NULL, '2019-12-17 18:38:14', '2019-12-17 18:38:14'),
(3, 2, 'BOX', '3', '4bfe769b88d4627443ef4a110bf7ea910a6bdfe1', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:39:29', NULL, NULL, '2019-12-17 18:39:29', '2019-12-17 18:39:29'),
(4, 2, 'BOX', '4', '120bb29b92df7a010b543814b4c5663918bbc779', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:41:15', NULL, NULL, '2019-12-17 18:41:15', '2019-12-17 18:41:15'),
(5, 2, 'BOX', '5', '88683209ddb51947d70c58f6f950dd2b745603da', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:42:38', NULL, NULL, '2019-12-17 18:42:38', '2019-12-17 18:42:38'),
(6, 2, 'BOX', '6', '7dfc2719d8da2a74496addcb76df685ba5d44520', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:49:11', NULL, NULL, '2019-12-17 18:49:11', '2019-12-17 18:49:11'),
(7, 2, 'BOX', '7', '2cf59d655c8c04e9f5225770b950a8ab2b3b2229', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:49:54', NULL, NULL, '2019-12-17 18:49:54', '2019-12-17 18:49:54'),
(8, 2, 'BOX', '8', '07c276e0852972cf5f35ff43736807a69e1ca076', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:50:42', NULL, NULL, '2019-12-17 18:50:42', '2019-12-17 18:50:42'),
(9, 2, 'BOX', '9', '750466b5e46d4b13e5633c889b104146d0b26bf9', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', 4, 1, '', '0', '2019-12-22 18:51:44', NULL, NULL, '2019-12-17 18:51:44', '2019-12-17 18:51:44'),
(10, 2, NULL, '11', 'cee88491e006435f16d30cd72f4d3bccba47f465', 'USD', '1.000000', NULL, 11.99, NULL, NULL, '2019-12-17 18:58:47: Charged clients balance with 11.99 USD for Domain test.com registration       \r\n', NULL, NULL, 'paid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '1', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '', ' ', NULL, 'client1@domain.com', NULL, 1, '', '0', '2019-12-22 18:58:47', NULL, '2019-12-17 18:58:47', '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(11, 3, 'BOX', '11', '8318390bede2c356cc63a7722f48289019b110fe', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:01:14', NULL, NULL, '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(12, 3, 'BOX', '12', 'f4badb41a6c91bd07e2be1021d54d4e2fb0a13d2', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:03:50', NULL, NULL, '2019-12-17 19:03:50', '2019-12-17 19:03:50'),
(13, 3, 'BOX', '13', 'a6001b1b58e6c76fdd3a357ce270b2631777b16b', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:08:03', NULL, NULL, '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(14, 3, 'BOX', '14', 'c53da40712a66f90145bbf8bf0b78a3a0e79fd2f', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:15:38', NULL, NULL, '2019-12-17 19:15:38', '2019-12-17 19:15:38'),
(15, 3, 'BOX', '15', 'fc0b8c6a441512bc0408c5cbbef16b81438cd8de', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:35:37', NULL, NULL, '2019-12-17 19:35:37', '2019-12-17 19:35:37'),
(16, 3, 'BOX', '16', '7b2d9f66bcb5bba89b133e92e234e8b86a14bc22', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:41:41', NULL, NULL, '2019-12-17 19:41:41', '2019-12-17 19:41:41'),
(17, 3, 'BOX', '17', 'ddc81be76da9e7b6e8663a8fbdf53b84985fc4da', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:42:46', NULL, NULL, '2019-12-17 19:42:46', '2019-12-17 19:42:46'),
(18, 3, 'BOX', '18', '445e5392889e261d7482b0874ed5e7868a717767', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:47:14', NULL, NULL, '2019-12-17 19:47:14', '2019-12-17 19:47:14'),
(19, 3, 'BOX', '19', 'e2b0cd7375b798e1be123585f85f54c83a8e5f23', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 19:57:51', NULL, NULL, '2019-12-17 19:57:51', '2019-12-17 19:57:51'),
(20, 3, 'BOX', '20', '3cbac87a0b93dbbf6bf3ce6b1a699ef2ccf67271', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 20:08:56', NULL, NULL, '2019-12-17 20:08:56', '2019-12-17 20:08:56'),
(21, 3, 'BOX', '21', 'a15a0cb616c62e8d97c3463ff6da1b9a7bb130db', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 20:16:16', NULL, NULL, '2019-12-17 20:16:16', '2019-12-17 20:16:16'),
(22, 3, 'BOX', '22', '612522116b2d7eb13645198004d524b61a9e682d', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 20:16:44', NULL, NULL, '2019-12-17 20:16:44', '2019-12-17 20:16:44'),
(23, 3, 'BOX', '23', '572d4c62b057699463460e37bdff080fbc0b9456', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-22 20:17:43', NULL, NULL, '2019-12-17 20:17:43', '2019-12-17 20:17:43'),
(24, 3, 'BOX', '24', 'd35d703746de7ac83e61f88024676a3cf66c92a8', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-23 14:03:23', NULL, NULL, '2019-12-18 14:03:23', '2019-12-18 14:03:23'),
(25, 3, 'BOX', '25', 'ede09bd9c0cb4385ddbda1684f9314b1ce7a2742', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-23 14:04:38', NULL, NULL, '2019-12-18 14:04:38', '2019-12-18 14:04:38'),
(26, 3, 'BOX', '26', '41b2887609079a924e05e86238f9b56b466287d4', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 4, 1, '', '0', '2019-12-23 14:05:06', NULL, NULL, '2019-12-18 14:05:06', '2019-12-18 14:05:06'),
(27, 3, 'BOX', '27', '4e97f259a52388122b9c82f8e1ed5600a3b390e9', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 2, 1, '', '0', '2019-12-23 14:06:36', NULL, NULL, '2019-12-18 14:06:36', '2019-12-18 14:06:36'),
(28, 3, 'BOX', '28', 'cecbc8be246cffb2a1d261890ef5fd914e190fcd', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 5, 1, '', '0', '2019-12-23 14:08:25', NULL, NULL, '2019-12-18 14:08:25', '2019-12-18 14:08:25'),
(29, 3, 'BOX', '29', 'b617f42206e297a705cf4e564b65cb01ab6113d2', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 5, 1, '', '0', '2019-12-23 14:35:50', NULL, NULL, '2019-12-18 14:35:50', '2019-12-18 14:35:50'),
(30, 3, 'BOX', '30', 'f79989e8e6cfcc122545d94be58cf433979d2d2f', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 2, 1, '', '0', '2019-12-23 16:03:02', NULL, NULL, '2019-12-18 16:03:02', '2019-12-18 16:03:02'),
(31, 3, 'BOX', '31', 'a16011a7dfbfa1aab8cdaa164f689627d67b8e80', 'USD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unpaid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 5, 1, '', '0', '2019-12-23 16:35:30', NULL, NULL, '2019-12-18 16:35:30', '2019-12-18 16:35:30'),
(32, 3, NULL, '12', '2d532a8de902a87d58527f3593c5ea33cad00e86', 'USD', '1.000000', NULL, 11.99, NULL, NULL, NULL, NULL, NULL, 'paid', 'Company Name', NULL, NULL, 'Demo address line 1 Demo address line 2 Demo address line 3', '+123 456 12345', 'company@email.com', 'Client', '2', 'demo', NULL, NULL, 'demo demo', 'demo', 'demo', 'ID', '5100', ' ', NULL, 'client2@domain.com', 5, 1, '', '0', '2019-12-23 16:38:04', NULL, '2019-12-18 17:43:33', '2019-12-18 16:38:04', '2019-12-18 17:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `rel_id` text,
  `task` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `period` varchar(10) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `price` double(18,2) DEFAULT NULL,
  `charged` tinyint(1) DEFAULT '0',
  `taxed` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice_item`
--

INSERT INTO `invoice_item` (`id`, `invoice_id`, `type`, `rel_id`, `task`, `status`, `title`, `period`, `quantity`, `unit`, `price`, `charged`, `taxed`, `created_at`, `updated_at`) VALUES
(1, 1, 'order', '1', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:34:52', '2019-12-17 18:34:52'),
(2, 2, 'order', '2', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:38:14', '2019-12-17 18:38:14'),
(3, 3, 'order', '3', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:39:29', '2019-12-17 18:39:29'),
(4, 4, 'order', '4', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:41:15', '2019-12-17 18:41:15'),
(5, 5, 'order', '5', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:42:38', '2019-12-17 18:42:38'),
(6, 6, 'order', '6', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:49:11', '2019-12-17 18:49:11'),
(7, 7, 'order', '7', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:49:54', '2019-12-17 18:49:54'),
(8, 8, 'order', '8', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:50:42', '2019-12-17 18:50:42'),
(9, 9, 'order', '9', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 18:51:44', '2019-12-17 18:51:44'),
(10, 10, 'order', '10', 'activate', 'pending_setup', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 1, 0, '2019-12-17 18:58:47', '2019-12-17 18:58:47'),
(11, 11, 'order', '11', 'activate', 'pending_payment', 'Domain eeee.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(12, 11, 'order', '12', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:01:14', '2019-12-17 19:01:14'),
(13, 12, 'order', '13', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:03:50', '2019-12-17 19:03:50'),
(14, 13, 'order', '14', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(15, 13, 'order', '15', 'activate', 'pending_payment', 'Domain fa.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:08:03', '2019-12-17 19:08:03'),
(16, 14, 'order', '16', 'activate', 'pending_payment', 'Domain tsss.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:15:38', '2019-12-17 19:15:38'),
(17, 15, 'order', '17', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:35:37', '2019-12-17 19:35:37'),
(18, 16, 'order', '18', 'activate', 'pending_payment', 'Domain tttt.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:41:41', '2019-12-17 19:41:41'),
(19, 17, 'order', '19', 'activate', 'pending_payment', 'Domain ffff.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:42:46', '2019-12-17 19:42:46'),
(20, 18, 'order', '20', 'activate', 'pending_payment', 'Domain cac.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:47:14', '2019-12-17 19:47:14'),
(21, 19, 'order', '21', 'activate', 'pending_payment', 'Domain zzzz.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 19:57:51', '2019-12-17 19:57:51'),
(22, 20, 'order', '22', 'activate', 'pending_payment', 'Domain gaga.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 20:08:56', '2019-12-17 20:08:56'),
(23, 21, 'order', '23', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 20:16:16', '2019-12-17 20:16:16'),
(24, 22, 'order', '24', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 20:16:44', '2019-12-17 20:16:44'),
(25, 23, 'order', '25', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-17 20:17:43', '2019-12-17 20:17:43'),
(26, 24, 'order', '26', 'activate', 'pending_payment', 'Domain test.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 14:03:23', '2019-12-18 14:03:23'),
(27, 25, 'order', '27', 'activate', 'pending_payment', 'Domain fafa.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 14:04:38', '2019-12-18 14:04:38'),
(28, 26, 'order', '28', 'activate', 'pending_payment', 'Domain fafaf.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 14:05:06', '2019-12-18 14:05:06'),
(29, 27, 'order', '29', 'activate', 'pending_payment', 'Domain caca.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 14:06:36', '2019-12-18 14:06:36'),
(30, 28, 'order', '30', 'activate', 'pending_payment', 'Domain fafa.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 14:08:25', '2019-12-18 14:08:25'),
(31, 29, 'order', '31', 'activate', 'pending_payment', 'Domain caca.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 14:35:50', '2019-12-18 14:35:50'),
(32, 30, 'order', '32', 'activate', 'pending_payment', 'Domain aaaa.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 16:03:02', '2019-12-18 16:03:02'),
(33, 31, 'order', '33', 'activate', 'pending_payment', 'Domain caca.com registration', '1Y', 1, 'year', 11.99, 0, 0, '2019-12-18 16:35:30', '2019-12-18 16:35:30'),
(34, 32, 'order', '34', 'activate', 'pending_setup', 'Domain wtf.com registration', '1Y', 1, 'year', 11.99, 1, 0, '2019-12-18 16:38:04', '2019-12-18 17:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `kb_article`
--

CREATE TABLE `kb_article` (
  `id` bigint(20) NOT NULL,
  `kb_article_category_id` bigint(20) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'active' COMMENT 'active, draft',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kb_article`
--

INSERT INTO `kb_article` (`id`, `kb_article_category_id`, `views`, `title`, `content`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 'How to contact support', 'Registered clients can contact our support team:\n------------------------------------------------------------\n\n* Login to clients area\n* Select **Support** menu item\n* Click **Submit new ticket**\n* Fill the form and press *Submit*\n\nGuests can contact our support team:\n------------------------------------------------------------\n\n* Use our contact form.\n* Fill the form and click *Submit*\n', 'how-to-contact-support', 'active', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(2, 2, 0, 'How to place new order', 'To place new order, follow these steps:\n------------------------------------------------------------\n\n* Select our services at *Order* page.\n* Depending on selected product, you might need to provide additional information to complete order request.\n* Click \"Continue\" and your product/service is now in shopping cart.\n* If you have promo code, you can apply it and get discount.\n* Click on \"Checkout\" button to proceed with checkout process\n    * If you are already logged in, uou will be automaticaly redirected to new invoice\n    * If you are registerd client, you can provide your login details\n    * If you have never purchased any service from us, fill up client sign up form, and continue checkout\n* Choose payment method to pay for invoice. List of all avalable payment methods will be listed below invoice details.\n* Choose payment method\n* You will be redirected to payment gateway page\n* After successfull payment, You will be redirected back to invoice page.\n* Depending on selected services your order will be reviewed and activated by our staff members.\n* After you receive confirmation email about order activation you are able to manage your services.\n', 'how-to-place-new-order', 'active', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(3, 2, 0, 'Example article', 'Example article heading\n------------------------------------------------------------\n\nCursus, parturient porta dis sit? Habitasse non, sociis porttitor, sagittis dapibus scelerisque? Pid, porttitor integer, montes. Hac, in? Arcu nunc integer nascetur dis nisi. In, sed a amet? Adipiscing odio mauris mauris, porta, integer, adipiscing habitasse, elementum phasellus, turpis in? Quis magna placerat eu, cursus urna mattis egestas, a ac massa turpis mus et odio pid in, urna dapibus ridiculus in turpis cursus ac a urna magna purus etiam ac nisi porttitor! Auctor est? In adipiscing, hac platea augue vut, hac est cum sagittis! Montes nascetur pulvinar tristique porta platea? Magnis vel etiam nisi augue auctor sit pulvinar! Aliquet rhoncus, elit porta? Magnis pulvinar eu turpis purus sociis a augue? Sit, nascetur! Mattis nisi, penatibus ac ac natoque auctor turpis.\n\nExample article heading\n------------------------------------------------------------\n\nUt diam cursus, elit pulvinar, habitasse purus? Enim. Urna? Velit arcu, rhoncus sociis sed, et, ultrices nascetur lacus vut purus tempor a. Vel? Sagittis integer scelerisque, dapibus lectus mid, magnis, augue duis velit etiam tortor! Eros, a et phasellus est ultricies integer elementum in, tempor sed parturient. Dictumst rhoncus, ut sed sagittis facilisis? In, proin? Urna augue in sociis enim dignissim! Velit magna tincidunt ac. Nunc, vel auctor porta enim integer. Phasellus amet eu. Tristique lundium arcu! In? Massa penatibus arcu, rhoncus augue ut pid pulvinar, porttitor, porta, et! A sit odio, proin natoque ultrices cras cras magna porttitor! Ultrices sed magna in! Porttitor nunc, tincidunt nec, amet integer aenean. Tincidunt, placerat nec dolor parturient et ac pulvinar a.\n', 'example-article-slug', 'active', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kb_article_category`
--

CREATE TABLE `kb_article_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kb_article_category`
--

INSERT INTO `kb_article_category` (`id`, `title`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Frequently asked questions', 'Section for common issues', 'faq', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(2, 'How to\'s', 'Section dedicated for tutorials', 'how-to', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mod_email_queue`
--

CREATE TABLE `mod_email_queue` (
  `id` int(11) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `to_name` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `tries` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mod_massmailer`
--

CREATE TABLE `mod_massmailer` (
  `id` bigint(20) NOT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text,
  `filter` text,
  `status` varchar(255) DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pay_gateway`
--

CREATE TABLE `pay_gateway` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `accepted_currencies` text,
  `enabled` tinyint(1) DEFAULT '1',
  `allow_single` tinyint(1) DEFAULT '1',
  `allow_recurrent` tinyint(1) DEFAULT '1',
  `test_mode` tinyint(1) DEFAULT '0',
  `config` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pay_gateway`
--

INSERT INTO `pay_gateway` (`id`, `name`, `gateway`, `accepted_currencies`, `enabled`, `allow_single`, `allow_recurrent`, `test_mode`, `config`) VALUES
(1, 'Custom', 'Custom', NULL, 1, 1, 1, 0, NULL),
(2, 'PayPal', 'PayPalEmail', '[\"USD\"]', 1, 1, 1, 0, '{\"email\":\"tech88oky@gmail.com\"}'),
(3, 'AlertPay', 'AlertPay', NULL, 0, 1, 1, 0, NULL),
(5, 'Paylane', 'Paylane', '[\"USD\"]', 1, 1, 1, 0, '{\"email\":\"tech88oky@gmail.com\"}');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'draft' COMMENT 'active, draft',
  `image` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `publish_at` datetime DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `admin_id`, `title`, `content`, `slug`, `status`, `image`, `section`, `publish_at`, `published_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'BoxBilling is the most affordable Billing Application Ever!', 'Just in case you weren\'t already aware, BoxBilling is the most affordable client management application ever!\n\nTo learn more about it You can always visit [www.boxbilling.com](http://www.boxbilling.com/)\n', 'boxbilling-is-affordable-billing-system', 'active', NULL, NULL, NULL, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(2, 1, 'Check out great features of BoxBilling', '* Supports automated billing, invoicing, product provisioning\n* Automatically create accounts as soon as the payment is received, suspend when account becomes overdue, terminate when a specified amount of time passes.\n* Boxbilling is perfectly created to sell shared and reseller hosting accounts, software licenses and downloadable products.\n* Integrated helpdesk, knowledgebase, news and announcements system.\n', 'great-features-of-boxbilling', 'active', NULL, NULL, NULL, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(3, 1, 'BoxBilling is customizable', '* You can create your own simple or advanced hooks on BoxBilling events. For example, send notification via sms when new client signs up.\n* Create custom theme for your client interface\n', 'boxbilling-is-customizable', 'active', NULL, NULL, NULL, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `product_category_id` bigint(20) DEFAULT NULL,
  `product_payment_id` bigint(20) DEFAULT NULL,
  `form_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text,
  `unit` varchar(50) DEFAULT 'product',
  `active` tinyint(1) DEFAULT '1',
  `status` varchar(50) DEFAULT 'enabled' COMMENT 'enabled, disabled',
  `hidden` tinyint(1) DEFAULT '0',
  `is_addon` tinyint(1) DEFAULT '0',
  `setup` varchar(50) DEFAULT 'after_payment',
  `addons` text,
  `icon_url` varchar(255) DEFAULT NULL,
  `allow_quantity_select` tinyint(1) DEFAULT '0',
  `stock_control` tinyint(1) DEFAULT '0',
  `quantity_in_stock` int(11) DEFAULT '0',
  `plugin` varchar(255) DEFAULT NULL,
  `plugin_config` text,
  `upgrades` text,
  `priority` bigint(20) DEFAULT NULL,
  `config` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_category_id`, `product_payment_id`, `form_id`, `title`, `slug`, `description`, `unit`, `active`, `status`, `hidden`, `is_addon`, `setup`, `addons`, `icon_url`, `allow_quantity_select`, `stock_control`, `quantity_in_stock`, `plugin`, `plugin_config`, `upgrades`, `priority`, `config`, `created_at`, `updated_at`, `type`) VALUES
(1, 1, NULL, NULL, 'Domains registration and transfer', 'domain-checker', NULL, 'product', 1, 'enabled', 0, 0, 'after_payment', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, 1, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00', 'domain');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `icon_url` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `title`, `description`, `icon_url`, `created_at`, `updated_at`) VALUES
(1, 'Default category', NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_payment`
--

CREATE TABLE `product_payment` (
  `id` bigint(20) NOT NULL,
  `type` varchar(30) DEFAULT NULL COMMENT 'free, once, recurrent',
  `once_price` decimal(18,2) DEFAULT '0.00',
  `once_setup_price` decimal(18,2) DEFAULT '0.00',
  `w_price` decimal(18,2) DEFAULT '0.00',
  `m_price` decimal(18,2) DEFAULT '0.00',
  `q_price` decimal(18,2) DEFAULT '0.00',
  `b_price` decimal(18,2) DEFAULT '0.00',
  `a_price` decimal(18,2) DEFAULT '0.00',
  `bia_price` decimal(18,2) DEFAULT '0.00',
  `tria_price` decimal(18,2) DEFAULT '0.00',
  `w_setup_price` decimal(18,2) DEFAULT '0.00',
  `m_setup_price` decimal(18,2) DEFAULT '0.00',
  `q_setup_price` decimal(18,2) DEFAULT '0.00',
  `b_setup_price` decimal(18,2) DEFAULT '0.00',
  `a_setup_price` decimal(18,2) DEFAULT '0.00',
  `bia_setup_price` decimal(18,2) DEFAULT '0.00',
  `tria_setup_price` decimal(18,2) DEFAULT '0.00',
  `w_enabled` tinyint(1) DEFAULT '1',
  `m_enabled` tinyint(1) DEFAULT '1',
  `q_enabled` tinyint(1) DEFAULT '1',
  `b_enabled` tinyint(1) DEFAULT '1',
  `a_enabled` tinyint(1) DEFAULT '1',
  `bia_enabled` tinyint(1) DEFAULT '1',
  `tria_enabled` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` bigint(20) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `description` text,
  `type` varchar(30) NOT NULL DEFAULT 'percentage' COMMENT 'absolute, percentage, trial',
  `value` decimal(18,2) DEFAULT NULL,
  `maxuses` int(11) DEFAULT '0',
  `used` int(11) DEFAULT '0',
  `freesetup` tinyint(1) DEFAULT '0',
  `once_per_client` tinyint(1) DEFAULT '0',
  `recurring` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `products` text,
  `periods` text,
  `client_groups` text,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `timeout` bigint(20) DEFAULT NULL,
  `iteration` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `queue_message`
--

CREATE TABLE `queue_message` (
  `id` bigint(20) NOT NULL,
  `queue_id` bigint(20) DEFAULT NULL,
  `handle` char(32) DEFAULT NULL,
  `handler` varchar(255) DEFAULT NULL,
  `body` longblob,
  `hash` char(32) DEFAULT NULL,
  `timeout` double(18,2) DEFAULT NULL,
  `log` text,
  `execute_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_boxbillinglicense`
--

CREATE TABLE `service_boxbillinglicense` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `oid` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_custom`
--

CREATE TABLE `service_custom` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `plugin` varchar(255) DEFAULT NULL,
  `plugin_config` text,
  `f1` text,
  `f2` text,
  `f3` text,
  `f4` text,
  `f5` text,
  `f6` text,
  `f7` text,
  `f8` text,
  `f9` text,
  `f10` text,
  `config` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_domain`
--

CREATE TABLE `service_domain` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `tld_registrar_id` bigint(20) DEFAULT NULL,
  `sld` varchar(255) DEFAULT NULL,
  `tld` varchar(100) DEFAULT NULL,
  `ns1` varchar(255) DEFAULT NULL,
  `ns2` varchar(255) DEFAULT NULL,
  `ns3` varchar(255) DEFAULT NULL,
  `ns4` varchar(255) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `privacy` int(11) DEFAULT NULL,
  `locked` tinyint(1) DEFAULT '1',
  `transfer_code` varchar(255) DEFAULT NULL,
  `action` varchar(30) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_company` varchar(255) DEFAULT NULL,
  `contact_first_name` varchar(255) DEFAULT NULL,
  `contact_last_name` varchar(255) DEFAULT NULL,
  `contact_address1` varchar(255) DEFAULT NULL,
  `contact_address2` varchar(255) DEFAULT NULL,
  `contact_city` varchar(255) DEFAULT NULL,
  `contact_state` varchar(255) DEFAULT NULL,
  `contact_postcode` varchar(255) DEFAULT NULL,
  `contact_country` varchar(255) DEFAULT NULL,
  `contact_phone_cc` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `details` text,
  `synced_at` datetime DEFAULT NULL,
  `registered_at` datetime DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_domain`
--

INSERT INTO `service_domain` (`id`, `client_id`, `tld_registrar_id`, `sld`, `tld`, `ns1`, `ns2`, `ns3`, `ns4`, `period`, `privacy`, `locked`, `transfer_code`, `action`, `contact_email`, `contact_company`, `contact_first_name`, `contact_last_name`, `contact_address1`, `contact_address2`, `contact_city`, `contact_state`, `contact_postcode`, `contact_country`, `contact_phone_cc`, `contact_phone`, `details`, `synced_at`, `registered_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'test', '.com', NULL, NULL, NULL, NULL, 1, 0, 1, '', NULL, 'client1@domain.com', 'demo', 'Client', '1', 'demo', 'demo', 'demo', 'demo', '', 'ID', NULL, '', 'O:16:\"Registrar_Domain\":16:{s:22:\"\0Registrar_Domain\0_tld\";s:4:\".com\";s:22:\"\0Registrar_Domain\0_sld\";s:4:\"test\";s:32:\"\0Registrar_Domain\0_registered_at\";i:1576609127;s:29:\"\0Registrar_Domain\0_expires_at\";i:1608231527;s:25:\"\0Registrar_Domain\0_period\";i:1;s:22:\"\0Registrar_Domain\0_epp\";s:0:\"\";s:26:\"\0Registrar_Domain\0_privacy\";N;s:25:\"\0Registrar_Domain\0_locked\";s:1:\"1\";s:22:\"\0Registrar_Domain\0_ns1\";N;s:22:\"\0Registrar_Domain\0_ns2\";N;s:22:\"\0Registrar_Domain\0_ns3\";N;s:22:\"\0Registrar_Domain\0_ns4\";N;s:36:\"\0Registrar_Domain\0_contact_registrar\";O:24:\"Registrar_Domain_Contact\":25:{s:28:\"\0Registrar_Domain_Contact\0id\";N;s:30:\"\0Registrar_Domain_Contact\0name\";N;s:35:\"\0Registrar_Domain_Contact\0firstname\";s:6:\"Client\";s:34:\"\0Registrar_Domain_Contact\0lastname\";s:1:\"1\";s:31:\"\0Registrar_Domain_Contact\0email\";s:18:\"client1@domain.com\";s:30:\"\0Registrar_Domain_Contact\0city\";s:4:\"demo\";s:29:\"\0Registrar_Domain_Contact\0zip\";s:0:\"\";s:33:\"\0Registrar_Domain_Contact\0country\";s:2:\"ID\";s:31:\"\0Registrar_Domain_Contact\0state\";s:4:\"demo\";s:29:\"\0Registrar_Domain_Contact\0tel\";s:0:\"\";s:32:\"\0Registrar_Domain_Contact\0tel_cc\";N;s:29:\"\0Registrar_Domain_Contact\0fax\";s:0:\"\";s:32:\"\0Registrar_Domain_Contact\0fax_cc\";N;s:33:\"\0Registrar_Domain_Contact\0company\";s:4:\"demo\";s:40:\"\0Registrar_Domain_Contact\0company_number\";s:0:\"\";s:35:\"\0Registrar_Domain_Contact\0address_1\";s:4:\"demo\";s:35:\"\0Registrar_Domain_Contact\0address_2\";s:4:\"demo\";s:35:\"\0Registrar_Domain_Contact\0address_3\";N;s:34:\"\0Registrar_Domain_Contact\0username\";s:18:\"client1@domain.com\";s:34:\"\0Registrar_Domain_Contact\0password\";s:10:\"59M43ma025\";s:39:\"\0Registrar_Domain_Contact\0document_type\";N;s:37:\"\0Registrar_Domain_Contact\0document_nr\";N;s:35:\"\0Registrar_Domain_Contact\0job_title\";N;s:34:\"\0Registrar_Domain_Contact\0birthday\";s:0:\"\";s:43:\"\0Registrar_Domain_Contact\0idn_language_code\";s:0:\"\";}s:32:\"\0Registrar_Domain\0_contact_admin\";r:14;s:31:\"\0Registrar_Domain\0_contact_tech\";r:14;s:34:\"\0Registrar_Domain\0_contact_billing\";r:14;}', NULL, '2019-12-17 18:58:47', '2020-12-17 18:58:47', '2019-12-17 18:58:47', '2019-12-17 18:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `service_downloadable`
--

CREATE TABLE `service_downloadable` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_hosting`
--

CREATE TABLE `service_hosting` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `service_hosting_server_id` bigint(20) DEFAULT NULL,
  `service_hosting_hp_id` bigint(20) DEFAULT NULL,
  `sld` varchar(255) DEFAULT NULL,
  `tld` varchar(255) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `reseller` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_hosting_hp`
--

CREATE TABLE `service_hosting_hp` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quota` varchar(50) DEFAULT NULL,
  `bandwidth` varchar(50) DEFAULT NULL,
  `max_ftp` varchar(50) DEFAULT NULL,
  `max_sql` varchar(50) DEFAULT NULL,
  `max_pop` varchar(50) DEFAULT NULL,
  `max_sub` varchar(50) DEFAULT NULL,
  `max_park` varchar(50) DEFAULT NULL,
  `max_addon` varchar(50) DEFAULT NULL,
  `config` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_hosting_server`
--

CREATE TABLE `service_hosting_server` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `hostname` varchar(100) DEFAULT NULL,
  `assigned_ips` text,
  `status_url` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `max_accounts` bigint(20) DEFAULT NULL,
  `ns1` varchar(100) DEFAULT NULL,
  `ns2` varchar(100) DEFAULT NULL,
  `ns3` varchar(100) DEFAULT NULL,
  `ns4` varchar(100) DEFAULT NULL,
  `manager` varchar(100) DEFAULT NULL,
  `username` text,
  `password` text,
  `accesshash` text,
  `port` varchar(20) DEFAULT NULL,
  `config` text,
  `secure` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_license`
--

CREATE TABLE `service_license` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `license_key` varchar(255) DEFAULT NULL,
  `validate_ip` tinyint(1) DEFAULT '1',
  `validate_host` tinyint(1) DEFAULT '1',
  `validate_path` tinyint(1) DEFAULT '0',
  `validate_version` tinyint(1) DEFAULT '0',
  `ips` text,
  `hosts` text,
  `paths` text,
  `versions` text,
  `config` text,
  `plugin` varchar(255) DEFAULT NULL,
  `checked_at` datetime DEFAULT NULL,
  `pinged_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_membership`
--

CREATE TABLE `service_membership` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `config` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_solusvm`
--

CREATE TABLE `service_solusvm` (
  `id` bigint(20) NOT NULL,
  `cluster_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `vserverid` varchar(255) DEFAULT NULL,
  `virtid` varchar(255) DEFAULT NULL,
  `nodeid` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `node` varchar(255) DEFAULT NULL,
  `nodegroup` varchar(255) DEFAULT NULL,
  `hostname` varchar(255) DEFAULT NULL,
  `rootpassword` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `ips` varchar(255) DEFAULT NULL,
  `hvmt` varchar(255) DEFAULT NULL,
  `custommemory` varchar(255) DEFAULT NULL,
  `customdiskspace` varchar(255) DEFAULT NULL,
  `custombandwidth` varchar(255) DEFAULT NULL,
  `customcpu` varchar(255) DEFAULT NULL,
  `customextraip` varchar(255) DEFAULT NULL,
  `issuelicense` varchar(255) DEFAULT NULL,
  `mainipaddress` varchar(255) DEFAULT NULL,
  `extraipaddress` varchar(255) DEFAULT NULL,
  `consoleuser` varchar(255) DEFAULT NULL,
  `consolepassword` varchar(255) DEFAULT NULL,
  `config` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `modified_at` int(11) DEFAULT NULL,
  `content` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `modified_at`, `content`) VALUES
('vkr4jclri7lhb8enf2kvhu4oe4', 1576691053, 'YWRtaW58YTo0OntzOjI6ImlkIjtzOjE6IjEiO3M6NToiZW1haWwiO3M6MTY6ImFkbWluQGRvbWFpbi5jb20iO3M6NDoibmFtZSI7czo1OiJhZG1pbiI7czo0OiJyb2xlIjtzOjU6ImFkbWluIjt9Y2xpZW50X2lkfHM6MToiMyI7');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) NOT NULL,
  `param` varchar(255) DEFAULT NULL,
  `value` text,
  `public` tinyint(1) DEFAULT '0',
  `category` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `param`, `value`, `public`, `category`, `hash`, `created_at`, `updated_at`) VALUES
(1, 'last_patch', '17', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(2, 'company_name', 'Company Name', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(3, 'company_email', 'company@email.com', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(4, 'company_signature', 'BoxBilling.com - Client Management, Invoice and Support Software', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(5, 'company_logo', 'https://sites.google.com/site/boxbilling/_/rsrc/1308483006796/home/logo_boxbilling.png', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(6, 'company_address_1', 'Demo address line 1', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(7, 'company_address_2', 'Demo address line 2', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(8, 'company_address_3', 'Demo address line 3', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(9, 'company_tel', '+123 456 12345', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(10, 'company_tos', 'Sit ridiculus nascetur porta purus tortor, augue natoque, pulvinar integer nisi mattis dignissim mus, elementum nascetur, augue etiam. Mus mus tortor? A mauris habitasse dictumst, scelerisque, dis nec pulvinar magnis velit, integer, nisi, aliquet, elit phasellus? Parturient odio purus tristique porttitor augue diam pulvinar magna ac lacus in. Augue tincidunt sociis ultrices parturient aliquet dapibus sit. Pulvinar mauris platea in amet penatibus augue ut non ridiculus, nunc lundium. Duis dapibus a mid proin pellentesque lundium vut mauris egestas dolor nec? Diam eu duis sociis. Dapibus porta! Proin, turpis nascetur et. Aenean tristique eu in elit dolor, montes sit nec, magna amet montes, hac diam ac, pellentesque duis sociis, est placerat? Montes ac, nunc aliquet ridiculus nisi? Dignissim. Et aliquet sed.\n\nAuctor mid, mauris placerat? Scelerisque amet a a facilisis porttitor aenean dolor, placerat dapibus, odio parturient scelerisque? In dis arcu nec mid ac in adipiscing ultricies, pulvinar purus dis. Nisi dis massa magnis, porta amet, scelerisque turpis etiam scelerisque porttitor ac dictumst, cras, enim? Placerat enim pulvinar turpis a cum! Aliquam? Urna ut facilisis diam diam lorem mattis ut, ac pid, sed pellentesque. Egestas nunc, lacus, tempor amet? Lacus, nunc dictumst, ac porttitor magna, nisi, montes scelerisque? Cum, rhoncus. Pid adipiscing porta dictumst porta amet dignissim purus, aliquet dolor non sagittis porta urna? Tortor egestas, ultricies elementum, placerat velit magnis lacus? Augue nunc? Ac et cras ut? Ac odio tortor lectus. Mattis adipiscing urna, scelerisque nec aenean adipiscing mid.\n', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(11, 'company_privacy_policy', 'Ac dapibus. Rhoncus integer sit aliquam a! Natoque? Lacus porttitor rhoncus, aliquam porttitor in risus turpis adipiscing! Integer, mus mattis sed enim ac velit proin est et ut, amet eros! Hac augue et vel ac sit duis facilisis purus tincidunt, porttitor eu a penatibus rhoncus platea et mauris rhoncus magnis rhoncus, montes? Et porttitor, urna, dolor, dapibus elementum porttitor aliquam.\n\nCras risus? Turpis, mus tincidunt vel dolor lectus pulvinar aliquam nascetur parturient nunc proin aenean tortor, augue aenean ac penatibus vut arcu. Augue, aenean dapibus in nec. In tempor turpis dictumst cursus, nec eros, elit non, ut integer magna. Augue placerat magnis facilisis platea ridiculus tincidunt et ut porttitor! Cursus odio, aliquet purus tristique vel tempor urna, vut enim.\n\nPorta habitasse scelerisque elementum adipiscing elit pulvinar? Cursus! Turpis! Massa ac elementum a, facilisis eu, sed ac porta massa sociis nascetur rhoncus sed, scelerisque habitasse aliquam? Velit adipiscing turpis, risus ut duis non integer rhoncus, placerat eu adipiscing, hac? Integer cursus porttitor rhoncus turpis lundium nisi, velit? Arcu tincidunt turpis, nunc integer turpis! Ridiculus enim natoque in, eros odio.\n\nScelerisque tempor dolor magnis natoque cras nascetur lorem, augue habitasse ac ut mid rhoncus? Montes tristique arcu, nisi integer? Augue? Adipiscing tempor parturient elementum nunc? Amet mid aliquam penatibus. Aliquam proin, parturient vel parturient dictumst? A porttitor rhoncus, a sit egestas massa tincidunt! Nunc purus. Hac ac! Enim placerat augue cursus augue sociis cum cras, pulvinar placerat nec platea.\n\nPenatibus et duis, urna. Massa cum porttitor elit porta, natoque etiam et turpis placerat lacus etiam scelerisque nunc, egestas, urna non tincidunt cursus odio urna tempor dictumst dignissim habitasse. Mus non et, nisi purus, pulvinar natoque in vel nascetur. Porttitor phasellus sed aenean eu quis? Nec vel, dignissim magna placerat turpis, ridiculus cum est auctor, sagittis, sit scelerisque duis.\n', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(12, 'company_note', 'Amet auctor, sed massa lacus phasellus turpis urna mauris dictumst, dapibus turpis? Sociis amet, mid aliquam, sagittis, risus, eros porta mid placerat eros in? Elementum porta ac pulvinar porttitor adipiscing, tristique porta pid dolor elementum? Eros, pulvinar amet auctor, urna enim amet magnis ultrices etiam? Dictumst ultrices velit eu tortor aliquet, rhoncus! Magnis porttitor. Vel parturient, ac, nascetur magnis tincidunt.\n\nQuis, pid. Lacus lorem scelerisque tortor phasellus, duis adipiscing nec mid mus purus placerat nunc porttitor placerat, risus odio pulvinar penatibus tincidunt, proin. Est tincidunt aliquam vel, ut scelerisque. Enim lorem magna tempor, auctor elit? Magnis lorem ut cursus, nunc nascetur! Est et odio nunc odio adipiscing amet nunc, ridiculus magnis egestas proin, montes nunc tristique tortor, ridiculus magna.\n', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(13, 'invoice_series', 'BOX', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(14, 'invoice_due_days', '5', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(15, 'invoice_auto_approval', '1', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(16, 'invoice_issue_days_before_expire', '14', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(17, 'theme', 'huraga', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(18, 'issue_invoice_days_before_expire', '7', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(19, 'invoice_refund_logic', 'credit_note', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(20, 'invoice_cn_series', 'CN-', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(21, 'invoice_cn_starting_number', '1', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(22, 'nameserver_1', NULL, 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(23, 'nameserver_2', NULL, 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(24, 'nameserver_3', NULL, 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(25, 'nameserver_4', NULL, 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(26, 'funds_min_amount', '10', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(27, 'funds_max_amount', '200', 0, NULL, NULL, '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(28, 'ce160052ef463231c88b604e59e997f7', 'o+JdADNRaKxNVingH2Qngll97/t/bysfWI8wdPAqeoMCZb9kaDn6QHo7XS9WZwmWse2vxD7rlaEBYvl91yqVjQ==', 0, NULL, NULL, '2019-12-17 18:26:54', '2019-12-17 18:26:54'),
(29, '490b594c962ab3ed3b1803864e1a072e', 'kB4bX45zhBFTBMHVj0MmzXgnUZozSyNTj+rCeKDrwf2yE3xeNVHW1KnYqvPjXigkuhXirSRozvqPiaiDxTbKlw==', 0, NULL, NULL, '2019-12-17 18:26:55', '2019-12-17 18:26:55'),
(30, 'invoice_starting_number', '13', 0, NULL, NULL, '2019-12-17 18:58:47', '2019-12-17 18:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `pay_gateway_id` bigint(20) DEFAULT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `rel_type` varchar(100) DEFAULT NULL,
  `rel_id` bigint(20) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `amount` double(18,2) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `support_helpdesk`
--

CREATE TABLE `support_helpdesk` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `close_after` smallint(6) DEFAULT '24',
  `can_reopen` tinyint(1) DEFAULT '0',
  `signature` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_helpdesk`
--

INSERT INTO `support_helpdesk` (`id`, `name`, `email`, `close_after`, `can_reopen`, `signature`, `created_at`, `updated_at`) VALUES
(1, 'General', 'info@yourdomain.com', 24, 0, 'It is always a pleasure to help.\nHave a Nice Day !', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_pr`
--

CREATE TABLE `support_pr` (
  `id` bigint(20) NOT NULL,
  `support_pr_category_id` bigint(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_pr`
--

INSERT INTO `support_pr` (`id`, `support_pr_category_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello #1', 'Hello,\n\n\n\nThank you for using our services.', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(2, 1, 'Hello #2', 'Greetings,\n\n\n\nThank you.', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(3, 2, 'It was fixed', '\nIt was fixed for your account. If you have any more questions or requests, please let us to know.', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(4, 2, 'It was done as requested', '\nIt\'s done as you have requested. Please let us to know if you have any further requests or questions.', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(5, 2, 'Your website works fine', '\nI have just checked your website and it works fine. Please check it from your end and let us to know if you still experience any problems.', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(6, 3, 'Do you get any errors?', '\nDo you get any errors and maybe you can copy/paste full error messages?', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(7, 3, 'Domain is not pointing to our server', '\nYour domain is not pointing to our server. Please set our nameservers for your domain and give 24 hours until changes will apply worldwide.', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(8, 3, 'What is your domain and username?', '\nWhat is your domain name and username?', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_pr_category`
--

CREATE TABLE `support_pr_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_pr_category`
--

INSERT INTO `support_pr_category` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Greetings', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(2, 'General', '2012-01-01 12:00:00', '2012-01-01 12:00:00'),
(3, 'Accounting', '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_p_ticket`
--

CREATE TABLE `support_p_ticket` (
  `id` bigint(20) NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `author_email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'open',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `support_p_ticket_message`
--

CREATE TABLE `support_p_ticket_message` (
  `id` bigint(20) NOT NULL,
  `support_p_ticket_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL COMMENT 'Filled when message author is admin',
  `content` text,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket`
--

CREATE TABLE `support_ticket` (
  `id` bigint(20) NOT NULL,
  `support_helpdesk_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `priority` int(11) DEFAULT '100',
  `subject` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'open' COMMENT 'open, closed, on_hold',
  `rel_type` varchar(100) DEFAULT NULL,
  `rel_id` bigint(20) DEFAULT NULL,
  `rel_task` varchar(100) DEFAULT NULL,
  `rel_new_value` text,
  `rel_status` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket_message`
--

CREATE TABLE `support_ticket_message` (
  `id` bigint(20) NOT NULL,
  `support_ticket_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `content` text,
  `attachment` varchar(255) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket_note`
--

CREATE TABLE `support_ticket_note` (
  `id` bigint(20) NOT NULL,
  `support_ticket_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` bigint(20) NOT NULL,
  `level` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `taxrate` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tld`
--

CREATE TABLE `tld` (
  `id` bigint(20) NOT NULL,
  `tld_registrar_id` bigint(20) DEFAULT NULL,
  `tld` varchar(15) DEFAULT NULL,
  `price_registration` decimal(18,2) DEFAULT '0.00',
  `price_renew` decimal(18,2) DEFAULT '0.00',
  `price_transfer` decimal(18,2) DEFAULT '0.00',
  `allow_register` tinyint(1) DEFAULT NULL,
  `allow_transfer` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `min_years` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tld`
--

INSERT INTO `tld` (`id`, `tld_registrar_id`, `tld`, `price_registration`, `price_renew`, `price_transfer`, `allow_register`, `allow_transfer`, `active`, `min_years`, `created_at`, `updated_at`) VALUES
(1, 1, '.com', '11.99', '11.99', '11.99', 1, 1, 1, 1, '2012-01-01 12:00:00', '2012-01-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tld_registrar`
--

CREATE TABLE `tld_registrar` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registrar` varchar(255) DEFAULT NULL,
  `test_mode` tinyint(4) DEFAULT '0',
  `config` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tld_registrar`
--

INSERT INTO `tld_registrar` (`id`, `name`, `registrar`, `test_mode`, `config`) VALUES
(1, 'Custom', 'Custom', 0, NULL),
(2, 'Reseller Club', 'Resellerclub', 0, NULL),
(3, 'Internet.bs', 'Internetbs', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `txn_status` varchar(255) DEFAULT NULL,
  `s_id` varchar(255) DEFAULT NULL,
  `s_period` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'received',
  `ip` varchar(45) DEFAULT NULL,
  `error` text,
  `error_code` int(11) DEFAULT NULL,
  `validate_ipn` tinyint(1) DEFAULT '1',
  `ipn` text,
  `output` text,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `invoice_id`, `gateway_id`, `txn_id`, `txn_status`, `s_id`, `s_period`, `amount`, `currency`, `type`, `status`, `ip`, `error`, `error_code`, `validate_ipn`, `ipn`, `output`, `note`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_redirect\":\"1\",\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60419\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_redirect=1&bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_redirect=1&bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688328.898,\"REQUEST_TIME\":1576688328}}', NULL, NULL, '2019-12-18 16:58:48', '2019-12-18 16:58:48'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_redirect\":\"1\",\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60418\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_redirect=1&bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_redirect=1&bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688337.588,\"REQUEST_TIME\":1576688337}}', NULL, NULL, '2019-12-18 16:58:57', '2019-12-18 16:58:57'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60471\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688380.98,\"REQUEST_TIME\":1576688380}}', NULL, NULL, '2019-12-18 16:59:41', '2019-12-18 16:59:41'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60505\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688415.787,\"REQUEST_TIME\":1576688415}}', NULL, NULL, '2019-12-18 17:00:15', '2019-12-18 17:00:15'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60599\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688528.645,\"REQUEST_TIME\":1576688528}}', NULL, NULL, '2019-12-18 17:02:08', '2019-12-18 17:02:08'),
(6, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60686\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688620.901,\"REQUEST_TIME\":1576688620}}', NULL, NULL, '2019-12-18 17:03:40', '2019-12-18 17:03:40'),
(7, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60793\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688728.383,\"REQUEST_TIME\":1576688728}}', NULL, NULL, '2019-12-18 17:05:28', '2019-12-18 17:05:28'),
(8, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60792\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688733.468,\"REQUEST_TIME\":1576688733}}', NULL, NULL, '2019-12-18 17:05:33', '2019-12-18 17:05:33'),
(9, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60799\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688757.792,\"REQUEST_TIME\":1576688757}}', NULL, NULL, '2019-12-18 17:05:57', '2019-12-18 17:05:57'),
(10, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"60930\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688867.388,\"REQUEST_TIME\":1576688867}}', NULL, NULL, '2019-12-18 17:07:47', '2019-12-18 17:07:47'),
(11, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"61008\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576688963.15,\"REQUEST_TIME\":1576688963}}', NULL, NULL, '2019-12-18 17:09:23', '2019-12-18 17:09:23'),
(12, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_gateway_id\":\"5\"},\"post\":[],\"http_raw_post_data\":\"\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"none\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"61048\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"GET\",\"QUERY_STRING\":\"bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_gateway_id=5\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576689008.964,\"REQUEST_TIME\":1576689008}}', NULL, NULL, '2019-12-18 17:10:09', '2019-12-18 17:10:09'),
(13, 32, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\",\"bb_invoice_hash\":\"2d532a8de902a87d58527f3593c5ea33cad00e86\",\"bb_redirect\":\"1\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"19.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"e3e4398e608b39ff5d3a5ffbdf4c99383f105ef4\",\"id_sale\":\"15666220\"},\"http_raw_post_data\":\"status=PERFORMED&amount=19.99&currency=USD&description=TR001&hash=e3e4398e608b39ff5d3a5ffbdf4c99383f105ef4&id_sale=15666220\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"61203\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32&bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_redirect=1\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32&bb_invoice_hash=2d532a8de902a87d58527f3593c5ea33cad00e86&bb_redirect=1\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576689162.852,\"REQUEST_TIME\":1576689162}}', NULL, NULL, '2019-12-18 17:12:42', '2019-12-18 17:12:42');
INSERT INTO `transaction` (`id`, `invoice_id`, `gateway_id`, `txn_id`, `txn_status`, `s_id`, `s_period`, `amount`, `currency`, `type`, `status`, `ip`, `error`, `error_code`, `validate_ipn`, `ipn`, `output`, `note`, `created_at`, `updated_at`) VALUES
(14, 32, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"25101234bb6162e88297a4504c49315cb797e8f9\",\"id_sale\":\"15666251\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=25101234bb6162e88297a4504c49315cb797e8f9&id_sale=15666251\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"61527\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576689530.663,\"REQUEST_TIME\":1576689530}}', NULL, NULL, '2019-12-18 17:18:50', '2019-12-18 17:18:50'),
(15, 32, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"25101234bb6162e88297a4504c49315cb797e8f9\",\"id_sale\":\"15666251\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=25101234bb6162e88297a4504c49315cb797e8f9&id_sale=15666251\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"61628\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576689650.474,\"REQUEST_TIME\":1576689650}}', NULL, NULL, '2019-12-18 17:20:50', '2019-12-18 17:20:50'),
(16, 32, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"5978880b4c2e3b1856feb093d7f00146d8e0dd05\",\"id_sale\":\"15666267\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=5978880b4c2e3b1856feb093d7f00146d8e0dd05&id_sale=15666267\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"61699\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576689716.197,\"REQUEST_TIME\":1576689716}}', NULL, NULL, '2019-12-18 17:21:56', '2019-12-18 17:21:56'),
(17, 32, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"5978880b4c2e3b1856feb093d7f00146d8e0dd05\",\"id_sale\":\"15666267\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=5978880b4c2e3b1856feb093d7f00146d8e0dd05&id_sale=15666267\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_SEC_FETCH_USER\":\"?1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"61747\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576689765.153,\"REQUEST_TIME\":1576689765}}', NULL, NULL, '2019-12-18 17:22:45', '2019-12-18 17:22:45'),
(18, 32, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"59e5c69b7483d2fbfacfe475524f4360e5f5e7d0\",\"id_sale\":\"15666303\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=59e5c69b7483d2fbfacfe475524f4360e5f5e7d0&id_sale=15666303\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"62001\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576690047.741,\"REQUEST_TIME\":1576690047}}', NULL, NULL, '2019-12-18 17:27:27', '2019-12-18 17:27:27'),
(19, 32, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"87085a726ff03e6942f18eae3471ac634d512bd3\",\"id_sale\":\"15666330\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=87085a726ff03e6942f18eae3471ac634d512bd3&id_sale=15666330\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"62151\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576690209.787,\"REQUEST_TIME\":1576690209}}', NULL, NULL, '2019-12-18 17:30:09', '2019-12-18 17:30:09'),
(20, 32, 5, '15666377', 'PERFORMED', NULL, NULL, '11.99', 'USD', NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"6eed3a9d727c810e0864f748c5563e6dcc678545\",\"id_sale\":\"15666377\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=6eed3a9d727c810e0864f748c5563e6dcc678545&id_sale=15666377\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"62545\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576690670.643,\"REQUEST_TIME\":1576690670}}', NULL, NULL, '2019-12-18 17:37:50', '2019-12-18 17:37:50'),
(21, 32, 5, '15666392', 'PERFORMED', NULL, NULL, '11.99', 'USD', NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"a572749b8c673dac4f20e314ff463731cda5892a\",\"id_sale\":\"15666392\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=a572749b8c673dac4f20e314ff463731cda5892a&id_sale=15666392\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"62669\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576690795.581,\"REQUEST_TIME\":1576690795}}', NULL, NULL, '2019-12-18 17:39:55', '2019-12-18 17:39:55'),
(22, 32, 5, '15666403', 'PERFORMED', NULL, NULL, '11.99', 'USD', NULL, 'received', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"3abf5138105035b37303450de69947a48473d8aa\",\"id_sale\":\"15666403\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=3abf5138105035b37303450de69947a48473d8aa&id_sale=15666403\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"62752\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576690877.877,\"REQUEST_TIME\":1576690877}}', NULL, NULL, '2019-12-18 17:41:17', '2019-12-18 17:41:17'),
(23, 32, 5, '15666420', 'PERFORMED', NULL, NULL, '11.99', 'USD', NULL, 'processed', '::1', NULL, NULL, 1, '{\"get\":{\"bb_gateway_id\":\"5\",\"bb_invoice_id\":\"32\"},\"post\":{\"status\":\"PERFORMED\",\"amount\":\"11.99\",\"currency\":\"USD\",\"description\":\"TR001\",\"hash\":\"3cfc6eb1759a120c22097aec8c81a6fd6b9a88be\",\"id_sale\":\"15666420\"},\"http_raw_post_data\":\"status=PERFORMED&amount=11.99&currency=USD&description=TR001&hash=3cfc6eb1759a120c22097aec8c81a6fd6b9a88be&id_sale=15666420\",\"server\":{\"MIBDIRS\":\"C:\\/xampp 5.6\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp 5.6\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"123\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_ORIGIN\":\"null\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.9\",\"HTTP_SEC_FETCH_SITE\":\"cross-site\",\"HTTP_SEC_FETCH_MODE\":\"navigate\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.9\",\"HTTP_COOKIE\":\"BOXSID=tab7u82n6oouqrre8dmbk14vf1; PHPSESSID=vkr4jclri7lhb8enf2kvhu4oe4\",\"PATH\":\"C:\\\\Program Files (x86)\\\\Common Files\\\\Oracle\\\\Java\\\\javapath;C:\\\\Windows\\\\system32;C:\\\\Windows;C:\\\\Windows\\\\System32\\\\Wbem;C:\\\\Windows\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Windows\\\\System32\\\\OpenSSH\\\\;C:\\\\Program Files\\\\Git\\\\cmd;C:\\\\xampp 7\\\\php;C:\\\\ProgramData\\\\ComposerSetup\\\\bin;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_211\\\\bin;C:\\\\Program Files (x86)\\\\Yarn\\\\bin\\\\;C:\\\\Users\\\\Oky\\\\Anaconda3;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\mingw-w64\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\usr\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Library\\\\bin;C:\\\\Users\\\\Oky\\\\Anaconda3\\\\Scripts;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Programs\\\\Microsoft VS Code\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\Composer\\\\vendor\\\\bin;C:\\\\Users\\\\Oky\\\\AppData\\\\Roaming\\\\npm;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Android\\\\Sdk\\\\platform-tools;C:\\\\Users\\\\Oky\\\\AppData\\\\Local\\\\Yarn\\\\bin;C:\\\\Program Files\\\\JetBrains\\\\PhpStorm 2018.3.3\\\\bin;\",\"SystemRoot\":\"C:\\\\Windows\",\"COMSPEC\":\"C:\\\\Windows\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\Windows\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36 Server at localhost Port 80<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.33 (Win32) OpenSSL\\/1.0.2o PHP\\/5.6.36\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"80\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp 5.6\\/htdocs\",\"SERVER_ADMIN\":\"localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp 5.6\\/htdocs\\/BoxBilling\\/bb-ipn.php\",\"REMOTE_PORT\":\"62880\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"bb_gateway_id=5&bb_invoice_id=32\",\"REQUEST_URI\":\"\\/boxbilling\\/bb-ipn.php?bb_gateway_id=5&bb_invoice_id=32\",\"SCRIPT_NAME\":\"\\/boxbilling\\/bb-ipn.php\",\"PHP_SELF\":\"\\/boxbilling\\/bb-ipn.php\",\"REQUEST_TIME_FLOAT\":1576691013.1,\"REQUEST_TIME\":1576691013}}', NULL, NULL, '2019-12-18 17:43:33', '2019-12-18 17:43:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_admin_history`
--
ALTER TABLE `activity_admin_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `activity_client_email`
--
ALTER TABLE `activity_client_email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `activity_client_history`
--
ALTER TABLE `activity_client_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `activity_system`
--
ALTER TABLE `activity_system`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_idx` (`admin_id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `admin_group_id_idx` (`admin_group_id`);

--
-- Indexes for table `admin_group`
--
ALTER TABLE `admin_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_request`
--
ALTER TABLE `api_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id_idx` (`session_id`),
  ADD KEY `currency_id_idx` (`currency_id`),
  ADD KEY `promo_id_idx` (`promo_id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id_idx` (`cart_id`),
  ADD KEY `product_id_idx` (`product_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `alternative_id_idx` (`aid`),
  ADD KEY `client_group_id_idx` (`client_group_id`);

--
-- Indexes for table `client_balance`
--
ALTER TABLE `client_balance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `client_group`
--
ALTER TABLE `client_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_order`
--
ALTER TABLE `client_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `product_id_idx` (`product_id`),
  ADD KEY `form_id_idx` (`form_id`),
  ADD KEY `promo_id_idx` (`promo_id`);

--
-- Indexes for table `client_order_meta`
--
ALTER TABLE `client_order_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_order_id_idx` (`client_order_id`);

--
-- Indexes for table `client_order_status`
--
ALTER TABLE `client_order_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_order_id_idx` (`client_order_id`);

--
-- Indexes for table `client_password_reset`
--
ALTER TABLE `client_password_reset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `action_code` (`action_code`);

--
-- Indexes for table `extension`
--
ALTER TABLE `extension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extension_meta`
--
ALTER TABLE `extension_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_id_idx` (`form_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `forum_id_idx` (`forum_id`);

--
-- Indexes for table `forum_topic_message`
--
ALTER TABLE `forum_topic_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_topic_id_idx` (`forum_topic_id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id_idx` (`invoice_id`);

--
-- Indexes for table `kb_article`
--
ALTER TABLE `kb_article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `kb_article_category_id_idx` (`kb_article_category_id`);

--
-- Indexes for table `kb_article_category`
--
ALTER TABLE `kb_article_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `mod_email_queue`
--
ALTER TABLE `mod_email_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_massmailer`
--
ALTER TABLE `mod_massmailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_gateway`
--
ALTER TABLE `pay_gateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `product_type_idx` (`type`),
  ADD KEY `product_category_id_idx` (`product_category_id`),
  ADD KEY `product_payment_id_idx` (`product_payment_id`),
  ADD KEY `form_id_idx` (`form_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_payment`
--
ALTER TABLE `product_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `start_index_idx` (`start_at`),
  ADD KEY `end_index_idx` (`end_at`),
  ADD KEY `active_index_idx` (`active`),
  ADD KEY `code_index_idx` (`code`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queue_message`
--
ALTER TABLE `queue_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `queue_id_idx` (`queue_id`);

--
-- Indexes for table `service_boxbillinglicense`
--
ALTER TABLE `service_boxbillinglicense`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `oid` (`oid`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_custom`
--
ALTER TABLE `service_custom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_domain`
--
ALTER TABLE `service_domain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `tld_registrar_id_idx` (`tld_registrar_id`);

--
-- Indexes for table `service_downloadable`
--
ALTER TABLE `service_downloadable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_hosting`
--
ALTER TABLE `service_hosting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `service_hosting_server_id_idx` (`service_hosting_server_id`),
  ADD KEY `service_hosting_hp_id_idx` (`service_hosting_hp_id`);

--
-- Indexes for table `service_hosting_hp`
--
ALTER TABLE `service_hosting_hp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_hosting_server`
--
ALTER TABLE `service_hosting_server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_license`
--
ALTER TABLE `service_license`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license_key` (`license_key`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_membership`
--
ALTER TABLE `service_membership`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_solusvm`
--
ALTER TABLE `service_solusvm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD UNIQUE KEY `unique_id` (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `param` (`param`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `pay_gateway_id_idx` (`pay_gateway_id`);

--
-- Indexes for table `support_helpdesk`
--
ALTER TABLE `support_helpdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_pr`
--
ALTER TABLE `support_pr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_pr_category_id_idx` (`support_pr_category_id`);

--
-- Indexes for table `support_pr_category`
--
ALTER TABLE `support_pr_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_p_ticket`
--
ALTER TABLE `support_p_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_p_ticket_message`
--
ALTER TABLE `support_p_ticket_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_p_ticket_id_idx` (`support_p_ticket_id`),
  ADD KEY `admin_id_idx` (`admin_id`);
ALTER TABLE `support_p_ticket_message` ADD FULLTEXT KEY `content_idx` (`content`);

--
-- Indexes for table `support_ticket`
--
ALTER TABLE `support_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_helpdesk_id_idx` (`support_helpdesk_id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `support_ticket_message`
--
ALTER TABLE `support_ticket_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_ticket_id_idx` (`support_ticket_id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `admin_id_idx` (`admin_id`);
ALTER TABLE `support_ticket_message` ADD FULLTEXT KEY `content_idx` (`content`);

--
-- Indexes for table `support_ticket_note`
--
ALTER TABLE `support_ticket_note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_ticket_id_idx` (`support_ticket_id`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tld`
--
ALTER TABLE `tld`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tld` (`tld`),
  ADD KEY `tld_registrar_id_idx` (`tld_registrar_id`);

--
-- Indexes for table `tld_registrar`
--
ALTER TABLE `tld_registrar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id_idx` (`invoice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_admin_history`
--
ALTER TABLE `activity_admin_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_client_email`
--
ALTER TABLE `activity_client_email`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_client_history`
--
ALTER TABLE `activity_client_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_system`
--
ALTER TABLE `activity_system`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_group`
--
ALTER TABLE `admin_group`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `api_request`
--
ALTER TABLE `api_request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_balance`
--
ALTER TABLE `client_balance`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_group`
--
ALTER TABLE `client_group`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_order`
--
ALTER TABLE `client_order`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `client_order_meta`
--
ALTER TABLE `client_order_meta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_order_status`
--
ALTER TABLE `client_order_status`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `client_password_reset`
--
ALTER TABLE `client_password_reset`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `extension`
--
ALTER TABLE `extension`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `extension_meta`
--
ALTER TABLE `extension_meta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum_topic`
--
ALTER TABLE `forum_topic`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_topic_message`
--
ALTER TABLE `forum_topic_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `invoice_item`
--
ALTER TABLE `invoice_item`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kb_article`
--
ALTER TABLE `kb_article`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kb_article_category`
--
ALTER TABLE `kb_article_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mod_email_queue`
--
ALTER TABLE `mod_email_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mod_massmailer`
--
ALTER TABLE `mod_massmailer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pay_gateway`
--
ALTER TABLE `pay_gateway`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_payment`
--
ALTER TABLE `product_payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queue_message`
--
ALTER TABLE `queue_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_boxbillinglicense`
--
ALTER TABLE `service_boxbillinglicense`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_custom`
--
ALTER TABLE `service_custom`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_domain`
--
ALTER TABLE `service_domain`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_downloadable`
--
ALTER TABLE `service_downloadable`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_hosting`
--
ALTER TABLE `service_hosting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_hosting_hp`
--
ALTER TABLE `service_hosting_hp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_hosting_server`
--
ALTER TABLE `service_hosting_server`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_license`
--
ALTER TABLE `service_license`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_membership`
--
ALTER TABLE `service_membership`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_solusvm`
--
ALTER TABLE `service_solusvm`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_helpdesk`
--
ALTER TABLE `support_helpdesk`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support_pr`
--
ALTER TABLE `support_pr`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `support_pr_category`
--
ALTER TABLE `support_pr_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support_p_ticket`
--
ALTER TABLE `support_p_ticket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_p_ticket_message`
--
ALTER TABLE `support_p_ticket_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket`
--
ALTER TABLE `support_ticket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket_message`
--
ALTER TABLE `support_ticket_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket_note`
--
ALTER TABLE `support_ticket_note`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tld`
--
ALTER TABLE `tld`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tld_registrar`
--
ALTER TABLE `tld_registrar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
