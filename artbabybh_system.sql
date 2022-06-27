-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2022 at 02:43 PM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artbabybh_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `region_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_directions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `client_id`, `region_id`, `city`, `name`, `lat`, `long`, `phone`, `block`, `road`, `floor_no`, `apartment`, `type`, `additional_directions`, `created_at`, `updated_at`) VALUES
(1, 1, 'Alexandria', NULL, 'Mostafa Mohamed', '0', '0', '01208601044', 'Amirya', 'High way', '13', '22', '', '', '2022-01-25 10:47:54', '2022-01-25 10:47:54'),
(2, 2, 'توبلي', NULL, 'Emcan Test', '0', '0', '33405497', '150', '12', '147', '10', '', '', '2022-01-25 12:46:35', '2022-01-25 12:46:35'),
(3, 4, 'BARBAR', NULL, 'محمد علي', '0', '0', '37770589', '524', '2429', '1001', NULL, '', '', '2022-01-28 11:15:53', '2022-01-28 11:15:53'),
(4, 6, 'Nulla ex ducimus iu', NULL, 'Tarik Obrien', '0', '0', '01208601044', 'Laborum Sed repelle', 'Rerum blanditiis har', 'Laboris accusantium', 'Nemo labore officia', '', '', '2022-01-31 10:02:44', '2022-01-31 10:02:44'),
(5, 7, 'el dakhleya', NULL, 'Ahmed Elawady', '0', '0', '33405497', '23546', '42412', '454', NULL, '', '', '2022-01-31 10:17:21', '2022-01-31 10:17:21'),
(11, 10, 'Laboris est veniam', NULL, 'Paki Avery', '0', '0', '01208601044', 'Velit harum enim mag', 'Quae sit minima qui', 'Laudantium ipsam ve', 'Nesciunt impedit m', '', '', '2022-03-14 14:35:03', '2022-03-14 14:35:03'),
(9, 11, 'توبلي', NULL, 'Mohamed Ali', '0', '0', '37770589', '٧٠١', '١٨٠', '٢٩', NULL, '', '', '2022-03-13 16:32:16', '2022-03-13 16:32:16'),
(10, 14, 'Barbar', NULL, 'محمد حسن', '0', '0', '33050226', '524', '2429', '1', NULL, '', '', '2022-03-14 14:20:20', '2022-03-14 14:20:20'),
(12, 17, '40', NULL, 'Walaa Aloraibi', '0', '0', '66302727', '711', '1111', '505', '32', '', '', '2022-03-15 14:25:18', '2022-03-15 14:25:18'),
(13, 16, 'باربار', NULL, 'Amnah Ali', '0', '0', '36661087', '٥٢٤', '٢٤٢٩', '١٠٠١', NULL, '', '', '2022-03-15 22:20:03', '2022-03-15 22:20:03'),
(14, 18, 'مدينة حمد', NULL, 'Maryam Hasan', '0', '0', '33317387', '1210', '1015', '870', NULL, '', '', '2022-03-16 00:02:22', '2022-03-16 00:02:22'),
(15, 19, 'Hamad town', NULL, 'Um salman Hasan', '0', '0', '36461008', '510', '1205', '569', '569', '', '', '2022-03-16 02:25:44', '2022-03-16 02:25:44'),
(16, 21, 'العكر الغربي', NULL, 'Fatema Humaidan', '0', '0', '37217721', '624', '2428', '1181', '21', '', '', '2022-03-16 12:42:47', '2022-03-16 12:42:47'),
(17, 22, 'Sar', NULL, 'Hadeel Fadhul', '0', '0', '66355712', '527', '2728', '1768', '1768', '', '', '2022-03-17 22:26:56', '2022-03-17 22:26:56'),
(18, 23, 'الدراز', NULL, 'كلثم محمد', '0', '0', '33114997', '536', '3665', '2925', '3', '', '', '2022-03-23 11:33:11', '2022-03-23 11:33:11'),
(19, 25, 'عالي', NULL, 'أمل الأشقر', '0', '0', '33662865', '734', '3452', '1849', '1', '', '', '2022-03-25 21:30:32', '2022-03-25 21:30:32'),
(20, 26, 'aldaih', NULL, 'Sara Hazeem', '0', '0', '33118144', '412', '1215', '623', NULL, '', '', '2022-04-12 02:04:04', '2022-04-12 02:04:04'),
(21, 27, 'Um al hassam', NULL, 'Reem Kashif', '0', '0', '66386665', '337', '3725', '1st', '1172', '', '', '2022-04-12 19:31:27', '2022-04-12 19:31:27'),
(22, 28, 'إسكان السنابس الجديد', NULL, 'دعاء فريد', '0', '0', '33477158', '402', '254', '-', '976', '', '', '2022-04-13 05:15:58', '2022-04-13 05:15:58'),
(23, 29, 'مدينة سلمان', NULL, 'فاطمة احمد', '0', '0', '34352161', '581', '8133', '3057', NULL, '', '', '2022-04-19 06:19:25', '2022-04-19 06:19:25'),
(24, 30, 'الرفاع الغربي', NULL, 'Yaser Mohammed', '0', '0', '66302352', '908', '839', '1186', '12', '', '', '2022-04-24 20:47:15', '2022-04-24 20:47:15'),
(25, 31, 'karranah', NULL, 'khadija ahmed', '0', '0', '66763658', '460', '6044', '1642', NULL, '', '', '2022-04-25 19:17:05', '2022-04-25 19:17:05'),
(26, 32, 'Sadad', NULL, 'Dalal Shamlooh', '0', '0', '39245805', '1038', '3839', '1251', NULL, '', '', '2022-04-29 20:44:24', '2022-04-29 20:44:24'),
(27, 33, 'Salmabad', NULL, 'Hussain Mahmood', '0', '0', '38096000', '708', '841', '1963', '0', '', '', '2022-04-30 17:47:16', '2022-04-30 17:47:16'),
(28, 34, 'Salmabad', NULL, 'Mahmood Radhi', '0', '0', '34519590', '708', '841', '1963', NULL, '', '', '2022-04-30 18:27:49', '2022-04-30 18:27:49'),
(29, 36, 'Madenat hamad', NULL, 'Hawraa Moh’d', '0', '0', '37133183', '1205', '527', '1708', '0', '', '', '2022-05-01 06:57:15', '2022-05-01 06:57:15'),
(30, 37, 'سترة', NULL, 'زهرة مهدي', '0', '0', '33206536', '٦٠٤', '٤٠٧', '٤٦٩', NULL, '', '', '2022-05-02 17:30:59', '2022-05-02 17:30:59'),
(31, 38, 'إسكان عالي', NULL, 'ابراهيم عبدالله', '0', '0', '33361464', '734', '3458', '1995', NULL, '', '', '2022-05-06 13:26:39', '2022-05-06 13:26:39'),
(32, 39, 'Alramli', NULL, 'Jaffer Shamlloh', '0', '0', '37311313', '716', '1621', '2426', '-', '', '', '2022-05-06 18:28:49', '2022-05-06 18:28:49'),
(34, 43, 'مدينة حمد', NULL, 'هبه النعيمي', '0', '0', '33426669', '١٢٠٥', '٥١٢', '٦٣٢', '١١', '', '', '2022-05-24 12:26:07', '2022-05-24 12:26:07'),
(35, 44, 'Qui in et rerum ulla', NULL, 'Heidi Hanson', '0', '0', '01208601044', 'In ad laborum Fugit', 'Sunt et id est qui e', 'Quo sint possimus', 'Eos odio suscipit eo', '', '', '2022-05-29 08:54:21', '2022-05-29 08:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `phone`, `image`, `display`, `created_at`, `updated_at`, `email`, `password`, `name_en`, `remember_token`) VALUES
(1, 'Daquan Bowen', '01122334455', 'https://be.bacora-bh.com/uploads/agents/1/1623087474.png', 1, '2021-06-07 18:37:54', '2021-12-29 13:06:55', 'Test@Emcan.com', '$2y$10$exxaH51PXldltMqMOqUR9.ZWNU8ecu5thDoLzuOdOYeKFK7aFC3dW', 'Test', 'PESqBjMVUuZxvfwwPq2kBh8E7Jxt5Uhaxk7P0NSqSwHPnWlP9SGQHslKZ2qU'),
(2, 'عين دزاين', '39699120', 'http://be.bacora-bh.com/uploads/agents/2/1631539970.jpg', 1, '2021-06-12 18:02:56', '2021-09-13 14:32:50', 'aysha.3ain@bacora-bh.com', '$2y$10$enLaJrIrfx0GgyR.hWCtD.plaTP0cf.1kILoXr.Hd.eLT7Gvwz6.G', '3ain desighn', 'i9oQhyUvDAatWakRud8nlpAgJ8gqNb3RWEEkKqnvQViX3YLWU5eGcT4hrvCM'),
(3, 'البرقع الذهبي', '66366093', 'https://be.bacora-bh.com/uploads/agents/3/1623517435.jpg', 0, '2021-06-12 18:03:55', '2021-10-17 17:54:47', '', '', '', NULL),
(4, 'درزي دزاين', '36133292', 'https://be.bacora-bh.com/uploads/agents/4/1623517501.jpg', 0, '2021-06-12 18:05:01', '2021-10-17 02:17:20', 'darzi@bacora-bh.com', '$2y$10$7AtDE.4FGJxsv/1c7IjNue1.iYMk4RDvPk0.8CqF8BSPJcuVMHrMa', 'Darzi Design', NULL),
(5, 'فارفلا', '39444557', 'https://be.bacora-bh.com/uploads/agents/5/1623517534.jpg', 1, '2021-06-12 18:05:34', '2021-09-16 16:36:26', 'farfalla@bacora-bh.com', '$2y$10$44M6NzYA9/ZjzzKSyVSlseWHaR6E9BLOkXZ1/lTqJFF/l02t3Evpe', 'Farfalla', NULL),
(6, 'هاي ترند', '39777030', 'https://be.bacora-bh.com/uploads/agents/6/1623517587.jpg', 1, '2021-06-12 18:06:27', '2021-12-30 08:19:07', '', '', '', NULL),
(7, 'جلابيات المياسة', '39193133', 'https://be.bacora-bh.com/uploads/agents/7/1623517635.jpg', 0, '2021-06-12 18:07:15', '2021-09-13 18:07:51', '', '', '', NULL),
(8, 'كيو بي بوتيك', '33550999', 'https://be.bacora-bh.com/uploads/agents/8/1623517673.jpg', 1, '2021-06-12 18:07:53', '2021-06-12 18:07:53', '', '', '', NULL),
(9, 'لوكس دولاب', '37244889', 'https://be.bacora-bh.com/uploads/agents/9/1623517829.jpg', 0, '2021-06-12 18:10:29', '2021-10-17 02:17:09', 'luksdolap@bacora-bh.com', '$2y$10$BVlrI8F7x3Tla49uBor3cORdWR3Pgl0NNJgPnC6i3pk4oi9Pkpm3u', 'Luks Dolap', 'h0x792g9lmUFxOWjYhaUSWcpV19zZYizx4j88iL61DfnubcPqQlPgsTDvSBe'),
(10, 'كيدز فاشن', '33335496', 'https://be.bacora-bh.com/uploads/agents/10/1623517876.jpg', 0, '2021-06-12 18:11:16', '2021-09-13 18:07:59', '', '', '', NULL),
(11, 'ذا تراديشونال', '38832020', 'https://be.bacora-bh.com/uploads/agents/11/1623517914.jpg', 0, '2021-06-12 18:11:54', '2021-09-13 18:08:28', '', '', '', NULL),
(12, 'الذوق', '33107021', 'https://be.bacora-bh.com/uploads/agents/12/1623747904.jpg', 0, '2021-06-15 10:05:04', '2021-09-13 18:09:51', '', '', '', NULL),
(13, 'كرافت ات', '33310828', 'https://be.bacora-bh.com/uploads/agents/13/1623747968.jpg', 0, '2021-06-15 10:06:08', '2021-09-13 18:08:36', '', '', '', NULL),
(14, 'رشة عطر', '39430631', 'https://be.bacora-bh.com/uploads/agents/14/1623748047.jpg', 0, '2021-06-15 10:07:27', '2021-09-13 18:08:45', '', '', '', NULL),
(15, 'خنة لاين', '34550542', 'https://be.bacora-bh.com/uploads/agents/15/1623748097.jpg', 1, '2021-06-15 10:08:17', '2021-09-19 15:40:28', 'kheena.line@bacora-bh.com', '$2y$10$LKiJpCoqzzKYqu7ncWeMyeu3rxRYjJ8HCI7KMPJsqQWeyel33kgT6', 'Kheena Line', NULL),
(16, 'شيك مودا', '33326442', 'https://be.bacora-bh.com/uploads/agents/16/1623748144.jpg', 0, '2021-06-15 10:09:04', '2021-09-13 18:09:04', '', '', '', NULL),
(17, 'زيت آمنة', '33120205', 'https://be.bacora-bh.com/uploads/agents/17/1623748186.jpg', 0, '2021-06-15 10:09:46', '2021-09-13 18:09:12', '', '', '', NULL),
(18, 'باكورة', '33016959', 'https://be.bacora-bh.com/uploads/agents/18/1624287683.jpeg', 1, '2021-06-15 10:10:58', '2021-06-21 16:01:23', '', '', '', NULL),
(19, 'كيدز وورلد', '35069053', 'https://be.bacora-bh.com/uploads/agents/19/1623748397.jpg', 0, '2021-06-15 10:13:17', '2021-06-15 16:47:32', '', '', '', NULL),
(20, 'زينة كوتور', '38135832', 'https://be.bacora-bh.com/uploads/agents/20/1624287309.jpeg', 0, '2021-06-21 15:55:09', '2021-10-17 02:16:55', 'zina@bacora-bh.com', '$2y$10$zVUO8ZPHIk/dCQSl1sCymuBNhgzNiFqRvtnJu4//fymiAbxWObv/q', 'Zina couture', NULL),
(21, 'قلو لاين', '39797985', 'https://be.bacora-bh.com/uploads/agents/21/1624287356.jpeg', 0, '2021-06-21 15:55:56', '2021-10-17 02:16:51', 'glow.line@bacora-bh.com', '$2y$10$wyMu32G5FZmSPkXnsyqYLeukIca2L102qRtGGPaoWW4PvI.QesfJG', 'Glow line', NULL),
(22, 'Willa Finley', '01098059838', 'https://be.bacora-bh.com/uploads/agents/22/1624819597.png', 0, '2021-06-27 19:46:37', '2021-09-13 16:45:46', 'HeshamFawzy2772@gmail.com', '$2y$10$gWaysGIxRFnSbEl0ltdSyOkncHbiBUegc3R4wa1kKUIn3A/pvSbRm', 'Hanae Ferguson', 'Sjz4WLukE8otNCxPVGwckbIZTnVTzk1VRSpRW6JyEuW4JcUEw6LkG4XiQ0FF'),
(23, 'ع لاين', '36567400', 'http://be.bacora-bh.com/uploads/agents/23/1631539166.jpeg', 0, '2021-09-13 14:19:26', '2021-10-17 02:16:46', 'aysha@bacora-bh.com', '$2y$10$ITvxj4A24vG1QbtRtP0V0OM9ueRCT48/lsO5nKH9ngYQXDyu/tHum', 'A line', 'UiT6LEwTFhVn5ZV5mPSXWwQ8WJ55Cz2bEwuT5xG6KLuOs8xQLsua6HWSHlIK'),
(24, 'وكيل', '01200000000', 'http://artbabybh.com/uploads/agents/24/1639040564.png', 0, '2021-12-09 10:02:44', '2021-12-09 10:02:44', 'testagent@mail.com', '$2y$10$HlPMlYWp4o57be26YV/UAud0Bzt9Syavbp3YBPqa08GwmpmdRTc4G', 'test agent', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `image`, `display`, `created_at`, `updated_at`) VALUES
(23, 'فساتين', 'Dresses', 'https://artbabybh.com/uploads/categories/23/1646422103.jpg', 1, '2022-03-04 20:28:23', '2022-03-04 20:28:23'),
(24, 'بطانيات', 'Blankets', 'https://artbabybh.com/uploads/categories/24/1646422388.jpg', 0, '2022-03-04 20:33:08', '2022-03-04 20:33:08'),
(26, 'TEST', 'TEST', 'https://artbabybh.com/uploads/categories/26/1647512274.png', 0, '2022-03-17 11:17:54', '2022-03-17 11:22:55'),
(16, 'رومبرات أكمام طويلة', 'Long Sleeve Rompers', 'https://artbabybh.com/uploads/categories/16/1646421498.jpg', 1, '2022-03-04 20:18:18', '2022-03-04 20:24:38'),
(17, 'فوط استحمام', 'Bath Towels', 'https://artbabybh.com/uploads/categories/17/1646421569.jpg', 1, '2022-03-04 20:19:29', '2022-03-04 20:19:29'),
(18, 'أولاد', 'Boys', 'https://artbabybh.com/uploads/categories/18/1646421623.jpg', 1, '2022-03-04 20:20:23', '2022-03-04 20:20:23'),
(19, 'بنات', 'Girls', 'https://artbabybh.com/uploads/categories/19/1646421663.jpg', 1, '2022-03-04 20:21:03', '2022-03-04 20:21:03'),
(20, 'جاكيتات', 'Jackets', 'https://artbabybh.com/uploads/categories/20/1646421720.jpg', 1, '2022-03-04 20:22:00', '2022-03-04 20:22:00'),
(22, 'بيجامات', 'Pajamas', 'https://artbabybh.com/uploads/categories/22/1646422012.jpg', 1, '2022-03-04 20:26:52', '2022-03-04 20:26:52'),
(21, 'رومبرات أكمام قصيرة', 'ٍShort Sleeve Rompers', 'https://artbabybh.com/uploads/categories/21/1646421809.jpg', 1, '2022-03-04 20:23:29', '2022-03-04 20:23:29'),
(25, 'رومبرات مع قبعة رأس', 'Rompers with a Hood', 'https://artbabybh.com/uploads/categories/25/1646437645.jpg', 1, '2022-03-05 00:47:25', '2022-03-05 00:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://artbabybh.com/uploads/lily.png',
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `country` varchar(191) CHARACTER SET utf8 NOT NULL DEFAULT 'Bahrain (‫البحرين‬‎)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `phone`, `email`, `first_name`, `last_name`, `password`, `image`, `display`, `created_at`, `updated_at`, `country_id`, `country`) VALUES
(7, '33405497', 'info@emcan-group.com', 'moustapha', 'saber', '$2y$10$4VC9PxtQHgzr3hr.0GA6zObVnVZIz/UPeaOyn07maUjKDcfcMZWdW', 'https://artbabybh.com/uploads/lily.png', 1, '2022-01-31 10:15:06', '2022-01-31 10:15:06', 1, 'Bahrain (‫البحرين‬‎)'),
(6, '01200000000', 'emcan@gmail.com', 'Emcan', 'Emcan', '$2y$10$I0Ama5NGoF/gb9FUsUWh9eI0sziXbB7Wr.BTsnNfQ87/AmP6xd422', 'https://artbabybh.com/uploads/lily.png', 1, '2022-01-31 10:00:17', '2022-03-13 16:08:30', 1, 'Bahrain (‫البحرين‬‎)'),
(11, '37770589', 'hamod22@live.com', 'Mohamed', 'Ali', '$2y$10$/eqDrmTsYdJl5nSaieIIn.0752evEMdCYGqdKLKCrq8n/yhLzoKDS', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-13 16:12:23', '2022-03-14 15:22:05', 1, 'Bahrain (‫البحرين‬‎)'),
(12, '1098059838', 'HeshamFawzy2772@gmail.com', 'Hesham', 'Fawzy', '$2y$10$CM02TwmlyxcRs3sKDZJ/BOyHfuVko2X8ehJIAe0GW/S8YpKdf4B6G', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-13 17:13:58', '2022-03-13 17:13:58', 1, 'Bahrain (‫البحرين‬‎)'),
(13, '01203931792', 'youmna@gmail.com', 'youmna', 'mohamed', '$2y$10$E0WL7P8hK7A2eBEShKXWu.UnWz2PB60vxiJ8rxNHndgIQjYw1LXB.', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-14 11:25:35', '2022-03-14 11:25:35', 1, 'Bahrain (‫البحرين‬‎)'),
(14, '33050226', 'mohdali22222@gmail.com', 'محمد', 'حسن', '$2y$10$va15uJ7dFCkLABoVk1oBWuo8hfDNhJjazTFN4i0J.FyTmN6nYCgxC', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-14 13:29:38', '2022-03-14 13:29:38', 1, 'Bahrain (‫البحرين‬‎)'),
(15, '36677242', 'zahrajaffer10@gmail.com', 'Zahra', 'Ali', '$2y$10$ETMUbYODGU5xfcUmyDcfQ.35GogZRJN77ooOtpik.rKFb5n.1ASVK', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-14 14:33:34', '2022-03-14 14:33:34', 1, 'Bahrain (‫البحرين‬‎)'),
(16, '36661087', 'Amnahjaffer@gmail.com', 'Amnah', 'Ali', '$2y$10$xQXXSlbfBa7lHSyzyQxSZer3yPTahmaw6rS7PgQlx/BAv1.PXVS0O', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-14 22:49:32', '2022-03-14 22:55:24', 1, 'Bahrain (‫البحرين‬‎)'),
(17, '66302727', 'sketch_on@hotmail.com', 'Walaa', 'Aloraibi', '$2y$10$Ux24SbRZmLSUDPa/iRoO3uGr9YjASJgQGAIGAEPu2j6YvNvfYWETq', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-15 14:18:27', '2022-03-15 14:18:27', 1, 'United States'),
(18, '33317387', 'maryam95h@gmail.com', 'Maryam', 'Hasan', '$2y$10$4FbxQQgc.Uaxn0Ycp6kDXutwR.xzPimrheNrdvA0xrsfKl7vg066.', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-16 00:01:37', '2022-03-16 00:01:37', 1, 'Bahrain (‫البحرين‬‎)'),
(19, '36461008', 'noor_al3omor@hotmail.com', 'Um salman', 'Hasan', '$2y$10$0z.o02rFS8OajV60IANwFOFy9IOUMynFNK.eOUEyWhu7vSzPnn1ae', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-16 02:23:51', '2022-03-16 02:23:51', 1, 'Bahrain (‫البحرين‬‎)'),
(20, '38018681', 'rabab17_7_93@hotmail.com', 'Rabab', 'Radhi', '$2y$10$leUZosSiAVnKjtTggcyXvuuTGxCQqFXWyP08lQB3k9tJ8TYM3w/hm', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-16 05:31:34', '2022-03-16 05:31:34', 1, 'Bahrain (‫البحرين‬‎)'),
(21, '37217721', 'fatima.humaidan95@gmail.com', 'Fatema', 'Humaidan', '$2y$10$6vNFqxjmWOHtM.PUoY2BHug40m.M082KirbVrWHYetngl9AtXgm26', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-16 12:41:44', '2022-03-16 12:41:44', 1, 'United States'),
(22, '66355712', 'hadeelnazoo@gmail.com', 'Hadeel', 'Fadhul', '$2y$10$zNFmUCpWgiHcEVxwuivLN.KhHd/IQxNvnyEPK3fExMNsk4SIfMZTi', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-17 22:25:51', '2022-03-17 22:25:51', 1, 'Bahrain (‫البحرين‬‎)'),
(23, '33114997', 'kalthammohammad1970@gmail.com', 'كلثم', 'محمد', '$2y$10$1Mur0uAxMmr3JAG7LeflouwNuwU1Ohpby5s0t0QYeSK3JcuZHjO3.', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-23 11:32:13', '2022-03-23 11:32:13', 1, 'Bahrain (‫البحرين‬‎)'),
(24, '39229286', 'fardanhameeda@gmail.coml.com', 'محمد', 'زهير', '$2y$10$YE2q8cclrHV.dGTOuYlfjuy4iIjGWoBAPJEOrNk8EoNqLNecjFEva', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-24 17:46:18', '2022-03-24 17:46:18', 1, 'United States'),
(25, '33662865', 'amalachkar84@gmail.com', 'أمل', 'الأشقر', '$2y$10$RKv82yHogSPkDwOJjW2DtOOe0VQBqfc3OYkulVkt2r6REyBkhCSPG', 'https://artbabybh.com/uploads/lily.png', 1, '2022-03-25 21:29:07', '2022-03-25 21:29:07', 1, 'Bahrain (‫البحرين‬‎)'),
(26, '33118144', 'sarahazeem_arch@hotmail.com', 'Sara', 'Hazeem', '$2y$10$OM6ijC.qAF3JCoqeDTSfIuSX2QlfqacshBBtfFDJYXAYNGbDFv38y', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-12 01:56:33', '2022-04-12 01:56:33', 1, 'Bahrain (‫البحرين‬‎)'),
(27, '66386665', 'Reemkashif920@gmail.com', 'Reem', 'Kashif', '$2y$10$I7zZbebfmY/Bclv97xYsGuLNzWMMFGUMUUDEyLGIDynWX/8I4Sjlu', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-12 17:23:01', '2022-04-12 17:23:01', 1, 'Bahrain (‫البحرين‬‎)'),
(28, '33477158', '@bahrainduaa@gmail.com', 'دعاء', 'فريد', '$2y$10$fEH3QxNmdyoNGYNn4rEULe1plRH4VP0HIaF4WowocQFDut9n7f3q.', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-13 05:13:52', '2022-04-13 05:13:52', 1, 'Bahrain (‫البحرين‬‎)'),
(29, '34352161', 'omrayyan44@gmail.com', 'فاطمة', 'احمد', '$2y$10$KApz56IqHPhqVGWhohd6J.gHDHhQnbZ2651jC.p99kqi6lA3hwKce', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-19 06:18:27', '2022-04-19 11:25:37', 1, 'Bahrain (‫البحرين‬‎)'),
(30, '66302352', 'hawaraa677@gmail.com', 'Yaser', 'Mohammed', '$2y$10$Uu0LpaUNc1U8bu93R01LU.HATQHT32EoBbXHOqxcEI1pTBtZdL2OO', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-24 20:46:20', '2022-04-24 20:46:20', 1, 'Bahrain (‫البحرين‬‎)'),
(31, '66763658', 'ajaimia@gmail.com', 'khadija', 'ahmed', '$2y$10$SoFyOxeDuB/mpW1TN72OmO8NyA3bxDN67sKGmH4nXGcp3zifH6mX.', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-25 19:16:18', '2022-04-25 19:16:18', 1, 'Bahrain (‫البحرين‬‎)'),
(32, '39245805', 'dalal2004@gmail.com', 'Dalal', 'Shamlooh', '$2y$10$G40UcEQqX95FAT/m6gWyzuqQEQGwLf1Cp2.B00144umwQcLY3N0lu', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-29 20:43:20', '2022-04-29 20:43:20', 1, 'Bahrain (‫البحرين‬‎)'),
(33, '38096000', 'hussainmam@hotmail.com', 'Hussain', 'Mahmood', '$2y$10$5S/V/j49jBOorw3XWXFFQeraPAG5gQEQm7MKyRbDA7KzpsiNWdL0O', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-30 17:46:37', '2022-04-30 17:46:37', 1, 'Bahrain (‫البحرين‬‎)'),
(34, '34519590', 'mahmoodradhi274@gmail.com', 'Mahmood', 'Radhi', '$2y$10$gM9lQRKAv7EBtUto/dIsfeQ25C03ir4Yv4KQoHQjoTs0FwLpOhv26', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-30 18:26:21', '2022-04-30 18:26:21', 1, 'Bahrain (‫البحرين‬‎)'),
(35, '32305533', 'wajeehasaleh778@gmail.com', 'Wajeeha', 'saleh ali', '$2y$10$8p4JXXy7Q5PU4nAtyFK5d.vO8Iq.QzCY4DWdF/E.N/LBlf0qfSX.m', 'https://artbabybh.com/uploads/lily.png', 1, '2022-04-30 22:23:32', '2022-04-30 22:23:32', 1, 'Bahrain (‫البحرين‬‎)'),
(36, '37133183', 'hawraahmed115@gmail.com', 'Hawraa', 'Moh’d', '$2y$10$07/oJhn0efVVcs6BnUEL1.28OkRHphZB2jEgxjPf5Jd7oSlFMX7Vy', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-01 06:56:13', '2022-05-01 06:56:13', 1, 'Bahrain (‫البحرين‬‎)'),
(37, '33206536', 'zahrabuhmaid731@gmail.com', 'زهرة', 'مهدي', '$2y$10$wpyhXoX0oRSpKzSFffe1LuBPg.nYWKTzF51bDY3TfURyVdIJZxsR.', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-02 17:25:45', '2022-05-02 17:26:40', 1, 'Bahrain (‫البحرين‬‎)'),
(38, '33361464', 'ebrahim79a@gmail.com', 'ابراهيم', 'عبدالله', '$2y$10$5KRTaFlWq8TfkHaZxbwwvewUhgbNlCIEAgyZM9MQnYsTpG/iRT8p6', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-06 13:24:20', '2022-05-06 13:24:20', 1, 'Bahrain (‫البحرين‬‎)'),
(39, '37311313', 'ashamlloh10@gmail.com', 'Jaffer', 'Shamlloh', '$2y$10$0MxtHBuCr8n6h4jndxjzme/Ua0zEnpbgYknz37Mu9Y0kXGYRdgQce', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-06 18:28:13', '2022-05-06 18:28:13', 1, 'Bahrain (‫البحرين‬‎)'),
(40, '33800717', 'a0nassif62@gmail.com', 'فاطمه', 'عبدالله', '$2y$10$OfU7q39GhFoNZO6QxFyFCeOKa51zxTPcO7pecCVil5Qr14zzT4u5a', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-06 23:35:36', '2022-05-06 23:35:36', 1, 'Bahrain (‫البحرين‬‎)'),
(41, '37341114', 'abrarja410@gmail.com', 'Jaffer', 'Naser', '$2y$10$mQoImQaPozK2v66Vr7cDHuXm.sLhUB4CbAkuBppawekJvj63aH.ua', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-07 14:10:04', '2022-05-07 14:10:04', 1, 'Bahrain (‫البحرين‬‎)'),
(43, '33426669', 'no_revenge@yahoo.com', 'هبه', 'النعيمي', '$2y$10$U2A24KKosGl/79a.4th0Mugx7rmHbz7rBUd9fVgQDoAXKc6lnkGPu', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-24 12:25:05', '2022-05-24 12:25:05', 1, 'Bahrain (‫البحرين‬‎)'),
(44, '01208601044', 'mostafazarea69@gmail.l.com', 'mostafa', 'mohamed', '$2y$10$hT3Yj5hUxiYzE14Z5z6B.OnP3perJedVTwdkrVTpnLFHdFclu0P2y', 'https://artbabybh.com/uploads/lily.png', 1, '2022-05-29 08:54:09', '2022-05-29 08:54:09', 1, 'Bahrain (‫البحرين‬‎)');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name_ar`, `name_en`, `display`, `created_at`, `updated_at`) VALUES
(1, 'أحمر', 'Red', 0, '2021-06-07 10:22:08', '2022-03-04 20:36:33'),
(3, 'أصفر', 'Yellow', 0, '2021-06-07 10:22:08', '2022-03-04 20:36:39'),
(4, 'أخضر', 'Green', 0, '2021-06-07 10:22:08', '2022-03-04 20:36:41'),
(5, 'أزرق', 'Blue', 0, '2021-06-07 10:22:08', '2022-03-04 20:36:44'),
(6, 'نيلى', 'Indigo', 0, '2021-06-07 10:22:08', '2022-03-04 20:36:46'),
(7, 'بنفسجى', 'Violet', 0, '2021-06-07 10:22:08', '2022-03-04 20:36:52'),
(8, 'الزيتي', 'Dark green', 0, '2021-06-14 17:33:35', '2022-03-04 20:36:50'),
(9, 'أسود', 'Black', 0, '2021-06-14 17:33:57', '2022-03-04 20:36:56'),
(10, 'أبيض', 'White', 0, '2021-06-14 17:34:18', '2022-03-04 20:36:54'),
(11, 'سماوي', 'Light blue', 0, '2021-06-14 17:34:47', '2022-03-04 20:37:08'),
(12, 'وردي', 'Pink', 0, '2021-06-15 06:38:41', '2022-03-04 20:37:07'),
(13, 'ماروني', 'Maroon', 0, '2021-06-15 08:20:03', '2022-03-04 20:37:04'),
(14, 'بيج', 'Node', 0, '2021-06-15 09:27:35', '2022-03-04 20:37:02'),
(15, 'بني', 'Brown', 0, '2021-06-15 10:25:03', '2022-03-04 20:33:47'),
(16, 'مطابق للصورة', 'Matching The Picture', 1, '2022-03-04 20:36:27', '2022-03-04 20:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `color_products`
--

CREATE TABLE `color_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_products`
--

INSERT INTO `color_products` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(13, 3, 16, '2022-03-04 22:33:47', '2022-03-04 22:33:47'),
(14, 4, 16, '2022-03-04 22:44:34', '2022-03-04 22:44:34'),
(15, 5, 16, '2022-03-04 22:47:17', '2022-03-04 22:47:17'),
(16, 6, 16, '2022-03-04 22:52:48', '2022-03-04 22:52:48'),
(17, 7, 16, '2022-03-04 22:56:54', '2022-03-04 22:56:54'),
(18, 8, 16, '2022-03-04 23:05:18', '2022-03-04 23:05:18'),
(19, 9, 16, '2022-03-04 23:12:14', '2022-03-04 23:12:14'),
(20, 10, 16, '2022-03-04 23:18:33', '2022-03-04 23:18:33'),
(21, 11, 16, '2022-03-04 23:21:40', '2022-03-04 23:21:40'),
(22, 12, 16, '2022-03-04 23:23:30', '2022-03-04 23:23:30'),
(23, 13, 16, '2022-03-04 23:24:59', '2022-03-04 23:24:59'),
(24, 14, 16, '2022-03-04 23:35:18', '2022-03-04 23:35:18'),
(25, 15, 16, '2022-03-04 23:38:59', '2022-03-04 23:38:59'),
(26, 16, 16, '2022-03-04 23:42:32', '2022-03-04 23:42:32'),
(27, 17, 16, '2022-03-04 23:46:33', '2022-03-04 23:46:33'),
(28, 18, 16, '2022-03-04 23:48:10', '2022-03-04 23:48:10'),
(29, 19, 16, '2022-03-04 23:51:00', '2022-03-04 23:51:00'),
(30, 20, 16, '2022-03-05 00:54:46', '2022-03-05 00:54:46'),
(31, 21, 16, '2022-03-05 00:57:13', '2022-03-05 00:57:13'),
(32, 22, 16, '2022-03-05 01:02:48', '2022-03-05 01:02:48'),
(33, 23, 16, '2022-03-05 01:04:27', '2022-03-05 01:04:27'),
(34, 24, 16, '2022-03-05 01:11:24', '2022-03-05 01:11:24'),
(35, 25, 16, '2022-03-05 01:15:39', '2022-03-05 01:15:39'),
(36, 26, 16, '2022-03-05 22:42:38', '2022-03-05 22:42:38'),
(37, 27, 16, '2022-03-05 22:48:04', '2022-03-05 22:48:04'),
(38, 28, 16, '2022-03-05 22:55:38', '2022-03-05 22:55:38'),
(39, 29, 16, '2022-03-05 23:02:51', '2022-03-05 23:02:51'),
(40, 30, 16, '2022-03-05 23:05:53', '2022-03-05 23:05:53'),
(41, 31, 16, '2022-03-05 23:11:14', '2022-03-05 23:11:14'),
(42, 32, 16, '2022-03-05 23:15:15', '2022-03-05 23:15:15'),
(43, 33, 16, '2022-03-05 23:17:47', '2022-03-05 23:17:47'),
(44, 34, 16, '2022-03-05 23:22:28', '2022-03-05 23:22:28'),
(45, 35, 16, '2022-03-05 23:24:59', '2022-03-05 23:24:59'),
(46, 36, 16, '2022-03-05 23:28:58', '2022-03-05 23:28:58'),
(47, 37, 16, '2022-03-05 23:33:31', '2022-03-05 23:33:31'),
(48, 38, 16, '2022-03-05 23:36:53', '2022-03-05 23:36:53'),
(49, 39, 16, '2022-03-05 23:39:00', '2022-03-05 23:39:00'),
(50, 40, 16, '2022-03-05 23:42:35', '2022-03-05 23:42:35'),
(51, 41, 16, '2022-03-05 23:44:46', '2022-03-05 23:44:46'),
(52, 42, 16, '2022-03-05 23:50:29', '2022-03-05 23:50:29'),
(53, 43, 16, '2022-03-05 23:59:52', '2022-03-05 23:59:52'),
(54, 44, 16, '2022-03-06 00:02:00', '2022-03-06 00:02:00'),
(63, 46, 16, '2022-03-11 08:54:01', '2022-03-11 08:54:01'),
(64, 47, 16, '2022-03-11 08:58:44', '2022-03-11 08:58:44'),
(65, 48, 16, '2022-03-11 09:00:43', '2022-03-11 09:00:43'),
(66, 49, 16, '2022-03-11 09:05:58', '2022-03-11 09:05:58'),
(67, 50, 16, '2022-03-11 09:10:33', '2022-03-11 09:10:33'),
(68, 51, 16, '2022-03-11 09:13:29', '2022-03-11 09:13:29'),
(69, 52, 16, '2022-03-11 09:19:13', '2022-03-11 09:19:13'),
(70, 53, 16, '2022-03-11 09:21:23', '2022-03-11 09:21:23'),
(71, 54, 16, '2022-03-11 09:46:39', '2022-03-11 09:46:39'),
(72, 55, 16, '2022-03-11 09:50:38', '2022-03-11 09:50:38'),
(73, 56, 16, '2022-03-11 10:05:32', '2022-03-11 10:05:32'),
(74, 57, 16, '2022-03-11 10:07:00', '2022-03-11 10:07:00'),
(75, 58, 16, '2022-03-11 10:11:08', '2022-03-11 10:11:08'),
(76, 59, 16, '2022-03-11 10:12:38', '2022-03-11 10:12:38'),
(77, 60, 16, '2022-03-11 10:17:50', '2022-03-11 10:17:50'),
(78, 61, 16, '2022-03-11 10:19:20', '2022-03-11 10:19:20'),
(79, 62, 16, '2022-03-11 10:23:48', '2022-03-11 10:23:48'),
(80, 63, 16, '2022-03-11 10:27:17', '2022-03-11 10:27:17'),
(81, 64, 16, '2022-03-11 10:30:13', '2022-03-11 10:30:13'),
(82, 65, 16, '2022-03-11 10:36:13', '2022-03-11 10:36:13'),
(83, 66, 16, '2022-03-11 10:37:54', '2022-03-11 10:37:54'),
(84, 67, 16, '2022-03-11 10:46:03', '2022-03-11 10:46:03'),
(85, 68, 16, '2022-03-11 10:57:11', '2022-03-11 10:57:11'),
(86, 69, 16, '2022-03-11 10:58:27', '2022-03-11 10:58:27'),
(87, 70, 16, '2022-03-11 11:02:34', '2022-03-11 11:02:34'),
(88, 71, 16, '2022-03-11 11:06:49', '2022-03-11 11:06:49'),
(89, 72, 16, '2022-03-11 11:11:27', '2022-03-11 11:11:27'),
(90, 73, 16, '2022-03-11 11:15:31', '2022-03-11 11:15:31'),
(91, 74, 16, '2022-03-11 11:20:49', '2022-03-11 11:20:49'),
(92, 75, 16, '2022-03-11 11:24:36', '2022-03-11 11:24:36'),
(93, 76, 16, '2022-03-11 11:29:04', '2022-03-11 11:29:04'),
(94, 77, 16, '2022-03-11 11:31:25', '2022-03-11 11:31:25'),
(95, 78, 16, '2022-03-11 11:33:11', '2022-03-11 11:33:11'),
(96, 79, 16, '2022-03-11 11:34:53', '2022-03-11 11:34:53'),
(97, 80, 16, '2022-03-11 11:48:52', '2022-03-11 11:48:52'),
(98, 81, 16, '2022-03-11 11:52:07', '2022-03-11 11:52:07'),
(99, 82, 16, '2022-03-11 11:53:50', '2022-03-11 11:53:50'),
(100, 83, 16, '2022-03-11 11:56:08', '2022-03-11 11:56:08'),
(101, 84, 16, '2022-03-11 11:58:44', '2022-03-11 11:58:44'),
(102, 85, 16, '2022-03-11 12:02:49', '2022-03-11 12:02:49'),
(103, 86, 16, '2022-03-11 12:05:37', '2022-03-11 12:05:37'),
(104, 87, 16, '2022-03-11 12:07:56', '2022-03-11 12:07:56'),
(105, 88, 16, '2022-03-11 12:09:42', '2022-03-11 12:09:42'),
(106, 89, 16, '2022-03-11 12:13:32', '2022-03-11 12:13:32'),
(107, 90, 16, '2022-03-11 12:15:02', '2022-03-11 12:15:02'),
(108, 91, 16, '2022-03-11 12:16:36', '2022-03-11 12:16:36'),
(109, 92, 16, '2022-03-11 12:17:57', '2022-03-11 12:17:57'),
(110, 93, 16, '2022-03-11 12:22:07', '2022-03-11 12:22:07'),
(111, 94, 16, '2022-03-11 12:25:59', '2022-03-11 12:25:59'),
(112, 95, 16, '2022-03-11 12:27:48', '2022-03-11 12:27:48'),
(113, 96, 16, '2022-03-11 12:29:33', '2022-03-11 12:29:33'),
(114, 97, 16, '2022-03-11 12:31:57', '2022-03-11 12:31:57'),
(115, 98, 16, '2022-03-11 12:33:40', '2022-03-11 12:33:40'),
(116, 99, 16, '2022-03-11 12:35:42', '2022-03-11 12:35:42'),
(117, 100, 16, '2022-03-11 12:37:54', '2022-03-11 12:37:54'),
(118, 101, 16, '2022-03-11 12:39:58', '2022-03-11 12:39:58'),
(119, 102, 16, '2022-03-11 12:42:05', '2022-03-11 12:42:05'),
(120, 103, 16, '2022-03-11 12:45:07', '2022-03-11 12:45:07'),
(121, 104, 16, '2022-03-11 12:48:32', '2022-03-11 12:48:32'),
(122, 105, 16, '2022-03-11 12:50:16', '2022-03-11 12:50:16'),
(123, 106, 16, '2022-03-11 12:52:05', '2022-03-11 12:52:05'),
(124, 107, 16, '2022-03-11 12:54:03', '2022-03-11 12:54:03'),
(125, 108, 16, '2022-03-11 12:56:09', '2022-03-11 12:56:09'),
(126, 109, 16, '2022-03-11 12:57:56', '2022-03-11 12:57:56'),
(127, 110, 16, '2022-03-11 12:59:47', '2022-03-11 12:59:47'),
(128, 111, 16, '2022-03-11 13:02:08', '2022-03-11 13:02:08'),
(129, 112, 16, '2022-03-11 13:04:29', '2022-03-11 13:04:29'),
(130, 113, 16, '2022-03-11 13:06:05', '2022-03-11 13:06:05'),
(131, 114, 16, '2022-03-11 13:07:41', '2022-03-11 13:07:41'),
(132, 115, 16, '2022-03-11 13:10:03', '2022-03-11 13:10:03'),
(133, 116, 16, '2022-03-11 13:11:13', '2022-03-11 13:11:13'),
(134, 117, 16, '2022-03-11 13:12:30', '2022-03-11 13:12:30'),
(135, 118, 16, '2022-03-11 13:13:59', '2022-03-11 13:13:59'),
(136, 119, 16, '2022-03-11 13:16:16', '2022-03-11 13:16:16'),
(137, 120, 16, '2022-03-12 07:50:48', '2022-03-12 07:50:48'),
(138, 121, 16, '2022-03-12 07:52:22', '2022-03-12 07:52:22'),
(139, 122, 16, '2022-03-12 07:53:59', '2022-03-12 07:53:59'),
(140, 123, 16, '2022-03-12 07:56:51', '2022-03-12 07:56:51'),
(141, 124, 16, '2022-03-12 08:00:24', '2022-03-12 08:00:24'),
(142, 125, 16, '2022-03-12 08:02:29', '2022-03-12 08:02:29'),
(143, 126, 16, '2022-03-12 08:05:22', '2022-03-12 08:05:22'),
(144, 127, 16, '2022-03-12 08:09:47', '2022-03-12 08:09:47'),
(145, 128, 16, '2022-03-12 08:21:43', '2022-03-12 08:21:43'),
(146, 129, 16, '2022-03-12 08:24:25', '2022-03-12 08:24:25'),
(147, 130, 16, '2022-03-12 08:26:17', '2022-03-12 08:26:17'),
(148, 131, 16, '2022-03-12 08:28:23', '2022-03-12 08:28:23'),
(149, 132, 16, '2022-03-12 08:30:11', '2022-03-12 08:30:11'),
(150, 133, 16, '2022-03-12 08:31:54', '2022-03-12 08:31:54'),
(151, 134, 16, '2022-03-12 08:33:25', '2022-03-12 08:33:25'),
(152, 135, 16, '2022-03-12 08:35:03', '2022-03-12 08:35:03'),
(153, 136, 16, '2022-03-12 13:54:48', '2022-03-12 13:54:48'),
(154, 137, 16, '2022-03-12 14:01:21', '2022-03-12 14:01:21'),
(155, 138, 16, '2022-03-12 14:08:13', '2022-03-12 14:08:13'),
(156, 139, 16, '2022-03-12 14:10:17', '2022-03-12 14:10:17'),
(157, 140, 16, '2022-03-12 14:12:50', '2022-03-12 14:12:50'),
(158, 141, 16, '2022-03-12 14:14:34', '2022-03-12 14:14:34'),
(159, 142, 16, '2022-03-12 18:51:16', '2022-03-12 18:51:16'),
(160, 143, 16, '2022-03-12 18:52:40', '2022-03-12 18:52:40'),
(161, 144, 16, '2022-03-12 18:54:58', '2022-03-12 18:54:58'),
(162, 145, 16, '2022-03-12 18:58:25', '2022-03-12 18:58:25'),
(163, 146, 16, '2022-03-12 19:02:26', '2022-03-12 19:02:26'),
(164, 147, 16, '2022-03-12 19:08:39', '2022-03-12 19:08:39'),
(165, 148, 16, '2022-03-12 19:10:41', '2022-03-12 19:10:41'),
(166, 149, 16, '2022-03-12 19:15:36', '2022-03-12 19:15:36'),
(167, 150, 16, '2022-03-12 19:20:34', '2022-03-12 19:20:34'),
(168, 151, 16, '2022-03-12 19:22:29', '2022-03-12 19:22:29'),
(169, 152, 16, '2022-03-12 19:26:29', '2022-03-12 19:26:29'),
(170, 153, 16, '2022-03-12 19:30:10', '2022-03-12 19:30:10'),
(171, 154, 16, '2022-03-12 19:35:19', '2022-03-12 19:35:19'),
(172, 155, 16, '2022-03-12 19:37:04', '2022-03-12 19:37:04'),
(173, 156, 16, '2022-03-12 19:38:53', '2022-03-12 19:38:53'),
(174, 157, 16, '2022-03-12 19:46:46', '2022-03-12 19:46:46'),
(175, 158, 16, '2022-03-12 19:49:07', '2022-03-12 19:49:07'),
(176, 159, 16, '2022-03-12 19:51:38', '2022-03-12 19:51:38'),
(177, 160, 16, '2022-03-12 19:58:02', '2022-03-12 19:58:02'),
(178, 161, 16, '2022-03-12 20:14:42', '2022-03-12 20:14:42'),
(179, 162, 16, '2022-03-12 20:21:30', '2022-03-12 20:21:30'),
(180, 163, 16, '2022-03-12 20:24:41', '2022-03-12 20:24:41'),
(181, 164, 16, '2022-03-12 20:28:13', '2022-03-12 20:28:13'),
(182, 165, 16, '2022-03-12 20:30:45', '2022-03-12 20:30:45'),
(183, 166, 16, '2022-03-12 20:40:47', '2022-03-12 20:40:47'),
(184, 167, 16, '2022-03-12 20:43:21', '2022-03-12 20:43:21'),
(185, 168, 16, '2022-03-12 20:45:08', '2022-03-12 20:45:08'),
(186, 169, 16, '2022-03-12 20:49:07', '2022-03-12 20:49:07'),
(187, 170, 16, '2022-03-12 20:51:47', '2022-03-12 20:51:47'),
(188, 171, 16, '2022-03-12 20:55:04', '2022-03-12 20:55:04'),
(189, 172, 16, '2022-03-12 21:00:11', '2022-03-12 21:00:11'),
(190, 173, 16, '2022-03-12 21:02:43', '2022-03-12 21:02:43'),
(191, 174, 16, '2022-03-12 21:04:14', '2022-03-12 21:04:14'),
(192, 175, 16, '2022-03-12 21:08:20', '2022-03-12 21:08:20'),
(193, 176, 16, '2022-03-12 21:12:20', '2022-03-12 21:12:20'),
(194, 177, 16, '2022-03-12 21:15:53', '2022-03-12 21:15:53'),
(195, 178, 16, '2022-03-12 21:29:29', '2022-03-12 21:29:29'),
(196, 179, 16, '2022-03-12 21:33:03', '2022-03-12 21:33:03'),
(197, 180, 16, '2022-03-12 22:02:19', '2022-03-12 22:02:19'),
(198, 181, 16, '2022-03-12 22:06:41', '2022-03-12 22:06:41'),
(199, 182, 16, '2022-03-12 22:12:12', '2022-03-12 22:12:12'),
(200, 183, 16, '2022-03-12 22:13:30', '2022-03-12 22:13:30'),
(201, 184, 16, '2022-03-12 22:20:16', '2022-03-12 22:20:16'),
(202, 185, 16, '2022-03-12 22:26:15', '2022-03-12 22:26:15'),
(203, 186, 16, '2022-03-12 22:32:06', '2022-03-12 22:32:06'),
(204, 187, 16, '2022-03-12 22:34:56', '2022-03-12 22:34:56'),
(205, 188, 16, '2022-03-12 22:38:14', '2022-03-12 22:38:14'),
(206, 189, 16, '2022-03-12 22:42:19', '2022-03-12 22:42:19'),
(207, 190, 16, '2022-03-12 22:43:44', '2022-03-12 22:43:44'),
(208, 191, 16, '2022-03-12 22:48:34', '2022-03-12 22:48:34'),
(209, 192, 16, '2022-03-12 22:51:56', '2022-03-12 22:51:56'),
(210, 193, 16, '2022-03-12 22:53:47', '2022-03-12 22:53:47'),
(211, 194, 16, '2022-03-12 22:58:59', '2022-03-12 22:58:59'),
(212, 195, 16, '2022-03-12 23:03:58', '2022-03-12 23:03:58'),
(213, 196, 16, '2022-03-12 23:07:23', '2022-03-12 23:07:23'),
(214, 197, 16, '2022-03-12 23:09:23', '2022-03-12 23:09:23'),
(215, 198, 16, '2022-03-12 23:10:59', '2022-03-12 23:10:59'),
(216, 199, 16, '2022-03-12 23:12:48', '2022-03-12 23:12:48'),
(217, 200, 16, '2022-03-12 23:14:20', '2022-03-12 23:14:20'),
(218, 201, 16, '2022-03-12 23:16:13', '2022-03-12 23:16:13'),
(219, 202, 16, '2022-03-12 23:18:25', '2022-03-12 23:18:25'),
(220, 203, 16, '2022-03-12 23:20:13', '2022-03-12 23:20:13'),
(221, 204, 16, '2022-03-12 23:21:42', '2022-03-12 23:21:42'),
(222, 205, 16, '2022-03-12 23:29:32', '2022-03-12 23:29:32'),
(223, 206, 16, '2022-03-12 23:33:30', '2022-03-12 23:33:30'),
(224, 207, 16, '2022-03-12 23:36:13', '2022-03-12 23:36:13'),
(225, 208, 16, '2022-03-12 23:41:31', '2022-03-12 23:41:31'),
(226, 209, 16, '2022-03-12 23:50:28', '2022-03-12 23:50:28'),
(227, 210, 16, '2022-03-12 23:52:07', '2022-03-12 23:52:07'),
(228, 211, 16, '2022-03-12 23:56:12', '2022-03-12 23:56:12'),
(229, 212, 16, '2022-03-12 23:58:02', '2022-03-12 23:58:02'),
(230, 213, 16, '2022-03-13 00:00:03', '2022-03-13 00:00:03'),
(235, 218, 16, '2022-03-14 14:50:57', '2022-03-14 14:50:57'),
(236, 219, 3, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(237, 219, 4, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(238, 219, 5, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(239, 219, 6, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(240, 219, 9, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(241, 219, 10, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(242, 219, 13, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(243, 219, 14, '2022-03-17 11:18:32', '2022-03-17 11:18:32'),
(244, 219, 15, '2022-03-17 11:18:32', '2022-03-17 11:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'MichaelGex', '84984329753', 'istonlavernascha@gmail.com', 'Seo портал', 'https://zwebspace.ru \r\nSeO портал. Обучающие материалы по сео, полезные статьи, скрипты и мноое другое. \r\nВозможность получения бесплатных обратных ссылок и премиум расскрутки сайтов.', '2022-02-04 03:51:15', '2022-02-04 03:51:15'),
(2, 'Sdvilldum', '89229348243', 'revers@o5o5.ru', 'обработка от блох и клещей gorecoses.ru', '<a href=https://gorecoses.ru>служба по уничтожению тараканов gorecoses </a> \r\nTegs: служба сэс gorecoses  https://gorecoses.ru  \r\n \r\n<u>обработка квартиры от тараканов цена москва gorecoses.ru </u> \r\n<i>обработка комнаты от клопов gorecoses.ru </i> \r\n<b>обработка от блох gorecoses.ru </b>', '2022-02-10 23:49:51', '2022-02-10 23:49:51'),
(3, 'Heidi Kertzmann', '32634748756', '67f784c8950d@hubmails.us', 'Dr. Drake Jones Jr.', 'Distinctio sequi dicta voluptas. Recusandae aut qui incidunt dicta in voluptas.', '2022-02-17 15:04:01', '2022-02-17 15:04:01'),
(4, 'Sdvilldum', '83171882496', 'revers@o5o5.ru', 'морить тараканов dezstation.com', '<a href=https://dezstation.com/teplovizionnoe-obsledovanie-zdanij/>тепловизионное обследование зданий dezstation </a> \r\nTegs: уничтожение клещей dezstation  https://dezstation.com/unichtozhenie-kleshchej/  \r\n \r\n<u>как убрать осиное гнездо dezstation.com </u> \r\n<i>механическая дезинфекция dezstation.com </i> \r\n<b>многоножки в квартире dezstation.com </b>', '2022-02-20 23:06:09', '2022-02-20 23:06:09'),
(5, 'dfMigf', '88748856238', '65743623@m142.ru', 'Thanks', 'петли дверные купить <a href=https://door-hinges.ru/>https://door-hinges.ru/</a>', '2022-03-10 14:05:26', '2022-03-10 14:05:26'),
(6, 'wonfoge', '89445979221', 'wonfoge@abdiell.xyz', 'cialis daily use faq', 'https://oscialipop.com - buy cialis online Through these nerve endings the axon transmits signals usually to a number of cells. Levitra Gunstigster Preis <a href=https://oscialipop.com>cialis viagra combo pack</a> Fever usually responds to antipyretics. https://oscialipop.com - cialis for sale online', '2022-03-19 14:29:49', '2022-03-19 14:29:49'),
(7, 'Michaelicomb', '87971896557', 'chubenkodaniiaz+1550@mail.ru', 'Hello world', 'artbabybh.com uriefeodeighrkfldjiijofofjmvkdnsisdiehiusfiajfhweiuioidjsjsbfiadjasifaijdfifijsaaiwghifadja', '2022-03-27 02:48:45', '2022-03-27 02:48:45'),
(8, 'Sdvilldum', '86388484728', 'revers@o5o5.ru', 'очистка фильтров приточной вентиляции', '<a href=https://profi-ses.ru>дезинфекция вентиляции коронавирус </a> \r\nTegs: дезинфекция вентиляции купить отчет о проведении  https://profi-ses.ru/uslugi-po-ventilyacii/akt-ochistki-sistemy-ventilyacii/  \r\n \r\n<u>очистка системы вентиляции помещения </u> \r\n<i>очистка системы вытяжной вентиляции </i> \r\n<b>очистка фильтров вентиляции </b>', '2022-04-14 17:00:02', '2022-04-14 17:00:02'),
(9, 'Sdvilldum', '82226857986', 'revers@o5o5.ru', 'дезинфекция вентиляции и кондиционирования', '<a href=https://mosecoservice.ru/services/analiz/vody/>анализ воды цена в московской области </a> \r\nTegs: анализ воды центр гигиены и эпидемиологии  https://mosecoservice.ru/  \r\n \r\n<u>дезинфекция вби </u> \r\n<i>дезинфекция вентиляции </i> \r\n<b>дезинфекция вентиляции и кондиционеров </b>', '2022-04-16 13:06:28', '2022-04-16 13:06:28'),
(10, 'Sdvilldum', '84167115922', 'revers@o5o5.ru', 'укусы насекомых следы на теле', '<a href=https://master-dez.ru/stati/deratizatsiya-i-dezinsektsiya-chto-eto/>чем отличается дезинфекция от дезинсекции и дератизации </a> \r\nTegs: чем отличается дезинфекция от дератизации  https://master-dez.ru/stati/deratizatsiya-i-dezinsektsiya-chto-eto/  \r\n \r\n<u>укусы насекомых разновидности </u> \r\n<i>укусы насекомых реакция фото </i> \r\n<b>укусы насекомых россии </b>', '2022-04-17 07:11:27', '2022-04-17 07:11:27'),
(11, 'Sdvilldum', '83727233893', 'revers@o5o5.ru', 'лабораторное исследование молока заказать', '<a href=https://ses-sanepidemstanciya.ru/laboratornye-analizy/voda/>анализ состава воды в одинцово </a> \r\nTegs: анализ состава сточных вод  https://ses-sanepidemstanciya.ru/laboratornye-analizy/voda/  \r\n \r\n<u>лабораторное исследование крови ветеринария </u> \r\n<i>лабораторное исследование мкб </i> \r\n<b>лабораторное исследование молока </b>', '2022-04-18 01:32:47', '2022-04-18 01:32:47'),
(12, 'MichaelJeold', '84637486915', 'drtgergadfbg@store-site.site', 'Thank', 'электро эпиляция \r\n<a href=https://vk.com/epilyciy_shulepova>https://vk.com/epilyciy_shulepova</a>', '2022-04-18 04:00:24', '2022-04-18 04:00:24'),
(13, 'Henryrap', '89031511381', 'KSmith@compassresearch.com', 'Need money? Get it here easily?', 'The huge income without investments is available. \r\nhttps://profit-gold-strategy.life/?u=bdlkd0x&o=x7t8nng', '2022-04-18 10:35:05', '2022-04-18 10:35:05'),
(14, 'Henryrap', '89039862783', 'khadijagardner@yahoo.com', 'Attention! Here you can earn money online!', 'Have no money? It’s easy to earn them online here. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-21 18:09:03', '2022-04-21 18:09:03'),
(15, 'Henryrap', '89033806112', 'ekrmguler_gmail.com@gogdog.com', 'Using this Robot is the best way to make you rich.', 'Financial robot is your success formula is found. Learn more about it. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-22 14:19:28', '2022-04-22 14:19:28'),
(16, 'Henryrap', '89034738778', 'Smithkelsey31697@gmail.com', 'Try out the best financial robot in the Internet.', 'We know how to become rich and do you? \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-22 19:59:31', '2022-04-22 19:59:31'),
(17, 'Henryrap', '89031707048', 'rhedbru@hotmail.com', 'Attention! Here you can earn money online!', 'Trust your dollar to the Robot and see how it grows to $100. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-23 01:02:08', '2022-04-23 01:02:08'),
(18, 'Henryrap', '89034782158', 'aarona@mweltd.com', 'The huge income without investments is available.', 'Financial Robot is #1 investment tool ever. Launch it! https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-23 19:31:13', '2022-04-23 19:31:13'),
(19, 'Henryrap', '89031509966', 'sqinci@gmail.com', 'Launch the robot and let it bring you money.', 'Looking forward for income? Get it online. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-24 00:32:02', '2022-04-24 00:32:02'),
(20, 'Henryrap', '89033380033', 'e_faubert80@hotmail.com', 'كسب المال 24/7 دون أي جهود والمهارات.', 'معظم الناس ناجحة بالفعل استخدام الروبوت. هل? https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-24 20:56:11', '2022-04-24 20:56:11'),
(21, 'Henryrap', '89030828722', 'lkwozj@ympmwn.com', 'إطلاق الروبوت والسماح لها تجلب لك المال.', 'الاستقلال المالي هو ما يضمنه هذا الروبوت. https://breweriana.it/gotodate/promo', '2022-04-25 18:16:11', '2022-04-25 18:16:11'),
(22, 'Henryrap', '89034993518', 'voodoo4u15@excite.com', 'نحن نعرف كيف تصبح غنية وهل?', 'دخل إضافي متاح الآن لأي شخص في جميع أنحاء العالم. https://breweriana.it/gotodate/promo', '2022-04-26 09:23:51', '2022-04-26 09:23:51'),
(23, 'Henryrap', '89037700266', 'sara.saberi@gmail.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'هذا الروبوت يمكن أن تجلب لك المال 24/7. https://breweriana.it/gotodate/promo', '2022-04-26 14:26:04', '2022-04-26 14:26:04'),
(24, 'Henryrap', '89034685476', 'ibrahimliza@yahoo.com', 'أموالك تعمل حتى عندما تنام.', 'ابدأ عملك عبر الإنترنت باستخدام الروبوت المالي. https://breweriana.it/gotodate/promo', '2022-04-26 19:49:06', '2022-04-26 19:49:06'),
(25, 'Henryrap', '89035429432', 'Terri_Maki2002@yahoo.com', 'انتباه ! الروبوت المالي قد تجلب لك الملايين!', 'انتباه ! الروبوت المالي قد تجلب لك الملايين! https://breweriana.it/gotodate/promo', '2022-04-27 01:12:12', '2022-04-27 01:12:12'),
(26, 'Henryrap', '89033152380', 'joy@joymcallister.com', 'الدخل عبر الإنترنت هو مفتاح النجاح.', 'لا يزال ليس مليونيرا? إصلاحه الآن! https://2f-2f.de/gotodate/promo', '2022-04-27 22:24:33', '2022-04-27 22:24:33'),
(27, 'Henryrap', '89035308844', 'chester.foote@nf.aibn.com', 'تحتاج النقدية? إطلاق هذا الروبوت ونرى ما في وسعها.', 'إطلاق أفضل أداة استثمارية لبدء كسب المال اليوم. https://2f-2f.de/gotodate/promo', '2022-04-28 10:08:45', '2022-04-28 10:08:45'),
(28, 'Henryrap', '89033672948', 'k.a.zec.k.p.e.nix@gmail.com', 'شراء كل ما تريد كسب المال على الانترنت.', 'الروبوت المالي هو # 1 أداة الاستثمار من أي وقت مضى. أطلقها! https://2f-2f.de/gotodate/promo', '2022-04-28 20:14:33', '2022-04-28 20:14:33'),
(29, 'Henryrap', '89030132844', 'neffry61@aol.com', 'دخل إضافي للجميع.', 'استخدام هذا الروبوت هو أفضل طريقة لتجعلك غنيا. https://2f-2f.de/gotodate/promo', '2022-04-29 01:38:05', '2022-04-29 01:38:05'),
(30, 'Henryrap', '89034282055', 'jlgreene15@yahoo.com', 'كسب المال 24/7 دون أي جهود والمهارات.', 'جعل الآلاف من الدولارات. لا تدفع شيئا. https://2f-2f.de/gotodate/promo', '2022-04-30 03:54:05', '2022-04-30 03:54:05'),
(31, 'Henryrap', '89034306047', 'annahoisington@hotmail.com', 'دع الروبوت المالي يكون رفيقك في السوق المالية.', 'دخل إضافي متاح الآن لأي شخص في جميع أنحاء العالم. https://2f-2f.de/gotodate/promo', '2022-04-30 09:18:26', '2022-04-30 09:18:26'),
(32, 'Henryrap', '89034798525', 'princessguntalilib@yahoo.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'لا يزال ليس مليونيرا? سوف الروبوت المالي تجعلك له! https://2f-2f.de/gotodate/promo', '2022-04-30 20:11:23', '2022-04-30 20:11:23'),
(33, 'tog', '89645563346', 'kcitju5r@yahoo.com', 'I promised.', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y3n5gmk5', '2022-05-01 03:22:43', '2022-05-01 03:22:43'),
(34, 'Henryrap', '89035041478', 'ramirolomaximo@hotmail.com', 'دع أموالك تنمو في العاصمة مع هذا الروبوت.', 'جعل جهاز الكمبيوتر الخاص بك ليكون لك كسب الصك. https://2f-2f.de/gotodate/promo', '2022-05-01 19:36:17', '2022-05-01 19:36:17'),
(35, 'Henryrap', '89031759558', 'dashbkachrisbrown1youngluv@yahoo.com', 'جعل دولار مجرد الجلوس المنزل.', 'جعل الآلاف كل أسبوع العمل على الانترنت هنا. https://2f-2f.de/gotodate/promo', '2022-05-02 01:04:09', '2022-05-02 01:04:09'),
(36, 'Henryrap', '89038563534', 'sabina.fruhbauerova@hotmail.com', 'أموالك تعمل حتى عندما تنام.', 'هذا هو أفضل وقت لإطلاق الروبوت للحصول على المزيد من المال. https://2f-2f.de/gotodate/promo', '2022-05-02 17:25:49', '2022-05-02 17:25:49'),
(37, 'Henryrap', '89038961811', 'rjack13@aol.com', 'لا تتردد في شراء كل ما تريد مع دخل إضافي.', 'الأرباح عبر الإنترنت هي أسهل طريقة للاستقلال المالي. https://2f-2f.de/gotodate/promo', '2022-05-02 22:44:39', '2022-05-02 22:44:39'),
(38, 'Henryrap', '89037135354', 'xiwujaxe@gmail.com', 'الدخل الإضافي متاح للجميع باستخدام هذا الروبوت.', 'جعل الآلاف من الدولارات. سوف الروبوت المالي تساعدك على القيام بذلك! https://2f-2f.de/gotodate/promo', '2022-05-03 04:05:35', '2022-05-03 04:05:35'),
(39, 'Henryrap', '89036655604', 'tiyannahugh@yahoo.com', 'بنقرة واحدة فقط يمكن أن يكبر أموالك بسرعة حقا.', 'الروبوت المالي يضمن استقرار الجميع والدخل. https://2f-2f.de/gotodate/promo', '2022-05-03 09:36:16', '2022-05-03 09:36:16'),
(40, 'Henryrap', '89038702392', 'paula.ballet@gmail.com', 'جعل جهاز الكمبيوتر الخاص بك ليكون لك كسب الصك.', 'جعل الآلاف من الدولارات. لا تدفع شيئا. https://2f-2f.de/gotodate/promo', '2022-05-03 15:07:10', '2022-05-03 15:07:10'),
(41, 'Henryrap', '89039243712', 'jaime_abigail@yahoo.com', 'جعل الكمبيوتر المحمول أداة مالية مع هذا البرنامج.', 'جعل الآلاف كل أسبوع العمل على الانترنت هنا. https://2f-2f.de/gotodate/promo', '2022-05-03 20:18:52', '2022-05-03 20:18:52'),
(42, 'Henryrap', '89036104082', 'shawn.phua@hotmail.com', 'دع الروبوت يجلب لك المال أثناء الراحة.', 'تبحث عن أموال إضافية? جرب أفضل أداة مالية. https://2f-2f.de/gotodate/promo', '2022-05-04 01:15:31', '2022-05-04 01:15:31'),
(43, 'Henryrap', '89033894960', 'mfvelasquez@hotmail.com', 'الروبوت المالي عبر الإنترنت هو مفتاح النجاح.', 'بحاجة الى المال? احصل عليه هنا بسهولة? https://rap.187sued.de/gotodate/promo', '2022-05-04 11:24:15', '2022-05-04 11:24:15'),
(44, 'Henryrap', '89031214029', 'paige.frey13@gmail.com', 'دع الروبوت المالي يكون رفيقك في السوق المالية.', 'نجاح باهر! هذا الروبوت هو بداية رائعة لمهنة عبر الإنترنت. https://rap.187sued.de/gotodate/promo', '2022-05-04 16:30:22', '2022-05-04 16:30:22'),
(45, 'Henryrap', '89035023532', 'prbrowneyes72@yahoo.com', 'جرب الروبوت الآلي للحفاظ على كسب طوال اليوم.', 'ابدأ في جني آلاف الدولارات كل أسبوع. https://rap.187sued.de/gotodate/promo', '2022-05-04 21:29:28', '2022-05-04 21:29:28'),
(46, 'Henryrap', '89034935519', 'jan.hauer@sandisk.com', 'تم العثور على أسرع طريقة لجعل محفظتك سميكة.', 'لا يزال ليس مليونيرا? سوف الروبوت المالي تجعلك له! https://rap.187sued.de/gotodate/promo', '2022-05-05 10:12:36', '2022-05-05 10:12:36'),
(47, 'Henryrap', '89036496846', 'Cutiekatie647@yahoo.com', 'الروبوت المالي هو أفضل رفيق للأثرياء.', 'حتى الطفل يعرف كيف يكسب المال. هل? https://rap.187sued.de/gotodate/promo', '2022-05-05 20:13:57', '2022-05-05 20:13:57'),
(48, 'Henryrap', '89037749793', 'wigginsjimmy12@yahoo.com', 'تحقق من بوت التلقائي, الذي يعمل لديك 24/7.', 'الروبوت المالي عبر الإنترنت هو مفتاح النجاح. https://rap.187sued.de/gotodate/promo', '2022-05-06 01:39:20', '2022-05-06 01:39:20'),
(49, 'Henryrap', '89035166017', 'caralasmamstnspkr@gmail.com', 'الروبوت المالي الخاص بك هو # 1 خبير لكسب المال.', 'مشاهدة أموالك تنمو أثناء الاستثمار مع الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-06 06:36:49', '2022-05-06 06:36:49'),
(50, 'Henryrap', '89036664286', 'Johnsonjared707@yahoo.com', 'الدخل الضخم بدون استثمارات متاح.', 'جعل الكمبيوتر المحمول أداة مالية مع هذا البرنامج. https://rap.187sued.de/gotodate/promo', '2022-05-06 16:52:22', '2022-05-06 16:52:22'),
(51, 'Henryrap', '89035515195', 'fabianobiagio@gmail.com', 'الروبوت المالي هو وسيلة رائعة لإدارة وزيادة دخلك.', 'حتى الطفل يعرف كيف يكسب المال. هذا الروبوت هو ما تحتاجه! https://rap.187sued.de/gotodate/promo', '2022-05-06 22:12:22', '2022-05-06 22:12:22'),
(52, 'Henryrap', '89034375323', 'sarahija@gmail.com', 'تحقق من بوت التلقائي, الذي يعمل لديك 24/7.', 'الروبوت المالي يعمل بالنسبة لك حتى عند النوم. https://rap.187sued.de/gotodate/promo', '2022-05-07 02:52:02', '2022-05-07 02:52:02'),
(53, 'Henryrap', '89034108423', 'grlnxtdoorlv@aol.com', 'الدخل عبر الإنترنت هو مفتاح النجاح.', 'يمكن لجهاز الكمبيوتر الخاص بك أن يجلب لك دخلا إضافيا إذا كنت تستخدم هذا الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-07 13:13:20', '2022-05-07 13:13:20'),
(54, 'Henryrap', '89035274078', 'smitha0206@gmail.com', 'الدخل عبر الإنترنت هو مفتاح النجاح.', 'تم العثور على صيغة النجاح. معرفة المزيد حول هذا الموضوع. https://rap.187sued.de/gotodate/promo', '2022-05-08 00:00:14', '2022-05-08 00:00:14'),
(55, 'Henryrap', '89035300145', 'apwagen@cox.net', 'كسب المال في الشبكة أسهل الآن.', 'يمكن لأي شخص أن يكسب بقدر ما يريد مقاضاة هذا الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-08 04:58:44', '2022-05-08 04:58:44'),
(56, 'Henryrap', '89036115796', 'wdbbirlw@inboxsky.com', 'نحن نعرف كيف نجعل مستقبلنا غنيا وهل أنت?', 'بحاجة الى المال? احصل عليه هنا بسهولة! فقط اضغط على هذا لإطلاق الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-08 17:16:55', '2022-05-08 17:16:55'),
(57, 'Henryrap', '89034240367', 'joshdullat23@aol.com', 'نحن نعرف كيف نجعل مستقبلنا غنيا وهل أنت?', 'تحويل 1 دولار إلى 100 دولار على الفور. استخدام الروبوت المالي. https://rap.187sued.de/gotodate/promo', '2022-05-08 22:27:53', '2022-05-08 22:27:53'),
(58, 'Henryrap', '89032962959', 'jeannieko@hotmail.com', 'كسب المال 24/7 دون أي جهود والمهارات.', 'الروبوت المالي يحتفظ تجلب لك المال أثناء النوم. https://rap.187sued.de/gotodate/promo', '2022-05-09 03:53:55', '2022-05-09 03:53:55'),
(59, 'Henryrap', '89032115891', 'nukungking_25@hotmai.com', 'بحاجة الى المال? احصل عليه هنا بسهولة?', 'يمكن لأي شخص أن يكسب بقدر ما يريد مقاضاة هذا الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-09 09:24:31', '2022-05-09 09:24:31'),
(60, 'Henryrap', '89035251730', 'iditk@yahoo.com', 'الدخل عبر الإنترنت هو مفتاح النجاح.', 'أفضل طريقة لكل من يندفع من أجل الاستقلال المالي. https://rap.187sued.de/gotodate/promo', '2022-05-09 19:58:20', '2022-05-09 19:58:20'),
(61, 'Henryrap', '89035358751', 'pillath76@gmail.com', 'أموالك تعمل حتى عندما تنام.', 'الروبوت المالي هو ثروتك واستقلالك في المستقبل. https://rap.187sued.de/gotodate/promo', '2022-05-10 03:47:33', '2022-05-10 03:47:33'),
(62, 'Henryrap', '89039323767', 'mariporto22@hotmail.com', 'جعل دولار البقاء في المنزل وأطلقت هذا بوت.', 'بنقرة واحدة فقط يمكن أن يكبر أموالك بسرعة حقا. https://rap.187sued.de/gotodate/promo', '2022-05-10 09:13:42', '2022-05-10 09:13:42'),
(63, 'Henryrap', '89033874351', 'thomasgruss@yahoo.com', 'كسب المال في الشبكة أسهل الآن.', 'الروبوت المالي الخاص بك هو # 1 خبير لكسب المال. https://rap.187sued.de/gotodate/promo', '2022-05-10 14:14:34', '2022-05-10 14:14:34'),
(64, 'Henryrap', '89039020555', 'fv.greskovich@yahoo.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'تبحث عن وسيلة سهلة لكسب المال? تحقق من الروبوت المالي. https://rap.187sued.de/gotodate/promo', '2022-05-10 19:33:48', '2022-05-10 19:33:48'),
(65, 'Henryrap', '89032650307', 'sezbdmn@hotmails.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'جعل الآلاف كل أسبوع العمل على الانترنت هنا. https://rap.187sued.de/gotodate/promo', '2022-05-11 05:35:42', '2022-05-11 05:35:42'),
(66, 'Henryrap', '89032816343', 'leomar201995@gmail.com', 'نحن نعرف كيفية زيادة الاستقرار المالي الخاص بك.', 'الروبوت هو أفضل وسيلة لكل من يبحث عن الاستقلال المالي. https://rap.187sued.de/gotodate/promo', '2022-05-11 10:32:53', '2022-05-11 10:32:53'),
(67, 'Henryrap', '89038974114', 'ririn_ardian04@yahoo.com', 'الروبوت الآلي هو أفضل بداية للاستقلال المالي.', 'الاستقلال المالي هو ما يضمنه هذا الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-11 15:30:21', '2022-05-11 15:30:21'),
(68, 'Henryrap', '89039025029', 'diopyoussou@aol.com', 'إطلاق الروبوت المالي والقيام بعملك.', 'نحن نعرف كيف تصبح غنية وهل? https://rap.187sued.de/gotodate/promo', '2022-05-11 20:33:03', '2022-05-11 20:33:03'),
(69, 'Henryrap', '89032629514', 'kadedowning@yahoo.com', 'لا يزال ليس مليونيرا? إصلاحه الآن!', 'الروبوت الآلي هو أفضل بداية للاستقلال المالي. https://rap.187sued.de/gotodate/promo', '2022-05-12 01:30:52', '2022-05-12 01:30:52'),
(70, 'Douglasmuh', '86414125797', 'aminahvalcin@hotmail.com', '$35,000 IN ONE WEEK!', 'MORE THAN $1000 IN 10 MINUTES! https://1300usd-for-10-minutes.blogspot.gr/2022/05/how-to-earn-1300-in-10-minutes.html?yes1783138', '2022-05-12 06:21:29', '2022-05-12 06:21:29'),
(71, 'Douglasmuh', '88277342931', 'aminahvalcin@hotmail.com', '$35,000 IN ONE WEEK!', 'MORE THAN $1000 IN 10 MINUTES! https://1300usd-for-10-minutes.blogspot.gr/2022/05/how-to-earn-1300-in-10-minutes.html?yes1783138', '2022-05-12 06:21:29', '2022-05-12 06:21:29'),
(72, 'Douglasmuh', '88243541121', 'aminahvalcin@hotmail.com', '$35,000 IN ONE WEEK!', 'MORE THAN $1000 IN 10 MINUTES! https://1300usd-for-10-minutes.blogspot.gr/2022/05/how-to-earn-1300-in-10-minutes.html?yes1783138', '2022-05-12 06:21:29', '2022-05-12 06:21:29'),
(73, 'Douglasmuh', '81227863581', 'aminahvalcin@hotmail.com', '$35,000 IN ONE WEEK!', 'MORE THAN $1000 IN 10 MINUTES! https://1300usd-for-10-minutes.blogspot.gr/2022/05/how-to-earn-1300-in-10-minutes.html?yes1783138', '2022-05-12 06:21:30', '2022-05-12 06:21:30'),
(74, 'Douglasmuh', '87755598736', 'aminahvalcin@hotmail.com', '$35,000 IN ONE WEEK!', 'MORE THAN $1000 IN 10 MINUTES! https://1300usd-for-10-minutes.blogspot.gr/2022/05/how-to-earn-1300-in-10-minutes.html?yes1783138', '2022-05-12 06:21:30', '2022-05-12 06:21:30'),
(75, 'Henryrap', '89036311401', 'horsegirlz@hotmail.com', 'لقد وجدنا أسرع طريقة لتكون غنية. العثور عليه هنا.', 'بنقرة واحدة من الروبوت يمكن أن تجلب لك الآلاف من الدولارات. https://rap.187sued.de/gotodate/promo', '2022-05-12 06:28:11', '2022-05-12 06:28:11'),
(76, 'Henryrap', '89031753586', 'palaka26@hotmail.com', 'الروبوت المالي هو ثروتك واستقلالك في المستقبل.', 'توفير عائلتك مع المال في السن. إطلاق الروبوت! https://rap.187sued.de/gotodate/promo', '2022-05-12 16:25:26', '2022-05-12 16:25:26'),
(77, 'Henryrap', '89035493002', 'dewitteisenhowerl8@yahoo.com', 'يمكن للجميع كسب بقدر ما يريد الآن.', 'توفير عائلتك مع المال في السن. إطلاق الروبوت! https://rap.187sued.de/gotodate/promo', '2022-05-12 21:22:33', '2022-05-12 21:22:33'),
(78, 'Henryrap', '89036094748', 'cubeoner1392@yahoo.com', 'لا حاجة للعمل بعد الآن. مجرد إطلاق الروبوت.', 'يمكن لجهاز الكمبيوتر الخاص بك أن يجلب لك دخلا إضافيا إذا كنت تستخدم هذا الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-13 12:09:15', '2022-05-13 12:09:15'),
(79, 'Henryrap', '89034556029', 'jacobsllj@msn.com', 'أسرع طريقة لجعل لكم محفظة سميكة هنا.', 'لا تقلق إذا تم طردك. العمل عبر الإنترنت. https://rap.187sued.de/gotodate/promo', '2022-05-13 17:06:26', '2022-05-13 17:06:26'),
(80, 'Henryrap', '89037609220', 'DSzostek6168@comcast.net', 'جعل جهاز الكمبيوتر الخاص بك ليكون لك كسب الصك.', 'هذا الروبوت يمكن أن تجلب لك المال 24/7. https://rap.187sued.de/gotodate/promo', '2022-05-13 21:57:17', '2022-05-13 21:57:17'),
(81, 'Henryrap', '89034468732', 'barbntom@rogers.com', 'ابدأ في جني آلاف الدولارات كل أسبوع.', 'معظم الناس ناجحة بالفعل استخدام الروبوت. هل? https://rap.187sued.de/gotodate/promo', '2022-05-14 02:50:12', '2022-05-14 02:50:12'),
(82, 'Henryrap', '89033479139', 'bam1967@cox.net', 'تم العثور على أسرع طريقة لجعل محفظتك سميكة.', 'دخل إضافي للجميع. https://rap.187sued.de/gotodate/promo', '2022-05-14 07:46:10', '2022-05-14 07:46:10'),
(83, 'Henryrap', '89032794247', 'jkhsdvbs@yahoo.com', 'جرب أفضل روبوت مالي في الإنترنت.', 'ويضمن الآلاف من الدولارات إذا كنت تستخدم هذا الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-14 12:46:19', '2022-05-14 12:46:19'),
(84, 'Henryrap', '89032704632', 'y_jram@yahoo.com', 'الاستقلال المالي هو ما يحتاجه الجميع.', 'تحقق من بوت التلقائي, الذي يعمل لديك 24/7. https://rap.187sued.de/gotodate/promo', '2022-05-15 01:57:51', '2022-05-15 01:57:51'),
(85, 'Henryrap', '89038543144', 'kurtz.amanda@gmail.com', 'اجعل أموالك تعمل من أجلك طوال اليوم.', 'تم العثور على أسرع طريقة لجعل محفظتك سميكة. https://rap.187sued.de/gotodate/promo', '2022-05-15 07:38:51', '2022-05-15 07:38:51'),
(86, 'Henryrap', '89037926205', 'jfq7ht@gmail.com', 'انتباه ! هنا يمكنك كسب المال عبر الإنترنت!', 'لا حاجة للبقاء مستيقظا طوال الليل لكسب المال. إطلاق الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-15 12:42:51', '2022-05-15 12:42:51'),
(87, 'Henryrap', '89034823497', 'dewey.sharkey@tangischools.org', 'دخل إضافي متاح الآن لأي شخص في جميع أنحاء العالم.', 'تحقق من أحدث طريقة لتحقيق ربح رائع. https://rap.187sued.de/gotodate/promo', '2022-05-15 17:36:13', '2022-05-15 17:36:13'),
(88, 'Henryrap', '89035840858', 'yanypich@hotmail.com', 'إطلاق أفضل أداة استثمارية لبدء كسب المال اليوم.', 'كسب المال يمكن أن يكون من السهل للغاية إذا كنت تستخدم هذا الروبوت. https://rap.187sued.de/gotodate/promo', '2022-05-16 03:50:07', '2022-05-16 03:50:07'),
(89, 'Henryrap', '89030121781', 'emmabsilly@gmail.com', 'استخدام هذا الروبوت هو أفضل طريقة لتجعلك غنيا.', 'الدخل الضخم بدون استثمارات متاح. https://rap.187sued.de/gotodate/promo', '2022-05-16 09:21:43', '2022-05-16 09:21:43'),
(90, 'Henryrap', '89035139609', 'niinkiknadze@yahoo.com', 'نجاح باهر! هذا هو أسرع وسيلة للاستقلال المالي.', 'الروبوت هو الحل الأفضل لكل من يريد أن يكسب. https://rap.187sued.de/gotodate/promo', '2022-05-16 15:28:28', '2022-05-16 15:28:28'),
(91, 'Henryrap', '89032777365', 'soksanchhim@yahoo.com', 'جعل دولار البقاء في المنزل وأطلقت هذا بوت.', 'يمكن للجميع كسب بقدر ما يريد الآن. https://rap.187sued.de/gotodate/promo', '2022-05-16 19:23:22', '2022-05-16 19:23:22'),
(92, 'Henryrap', '89032405101', 'phamgiang2929@gmail.com', 'جرب أفضل روبوت مالي في الإنترنت.', 'لا داعي للقلق بشأن المستقبل إذا كنت تستخدم هذا الروبوت المالي. https://rap.187sued.de/gotodate/promo', '2022-05-17 01:44:09', '2022-05-17 01:44:09'),
(93, 'Sansilldum', '89165472841', 'reve.rs@o5o5.ru', 'душевые кабины river москва santehlider', '<a href=https://santehlider.com/catalog/dushevye_kabiny/>душевая кабина 90 90 высокий поддон сантехлидер </a> \r\nTegs: душевая кабина 120х80 с низким поддоном сантехлидер  https://santehlider.com/catalog/dushevye_kabiny/  \r\n \r\n<u>душевые кабины 80х80 с низким santehlider </u> \r\n<i>душевые кабины river 90 90 santehlider </i> \r\n<b>душевые кабины deto d santehlider </b>', '2022-05-17 04:44:14', '2022-05-17 04:44:14'),
(94, 'Henryrap', '89038517158', 'the_malina@hotmail.com', 'كسب أموال إضافية دون جهود.', 'اجعل نفسك غنيا في المستقبل باستخدام هذا الروبوت المالي. https://rap.187sued.de/gotodate/promo', '2022-05-17 06:26:57', '2022-05-17 06:26:57'),
(95, 'Henryrap', '89038106450', 'rap_my_lif3@windowslive.com', 'سوف بوت على الانترنت تجلب لك الثروة والارتياح.', 'اجعل أموالك تعمل من أجلك طوال اليوم. https://rap.187sued.de/gotodate/promo', '2022-05-17 11:28:33', '2022-05-17 11:28:33'),
(96, 'Henryrap', '89037718833', 'arianna99919@sbcglobal.net', 'يجب على كل من يحتاج إلى المال تجربة هذا الروبوت.', 'لا تتردد في شراء كل ما تريد مع دخل إضافي. https://rap.187sued.de/gotodate/link', '2022-05-18 00:27:45', '2022-05-18 00:27:45'),
(97, 'Henryrap', '89038758192', 'brightelectriccorpse@yahoo.com', 'جعل دولار مجرد الجلوس المنزل.', 'إطلاق الروبوت المالي والقيام بعملك. https://rap.187sued.de/gotodate/link', '2022-05-18 05:22:35', '2022-05-18 05:22:35'),
(98, 'Henryrap', '89036422436', 'can.i.borrow.your.sweatshirt@gmail.com', 'إطلاق أفضل أداة استثمارية لبدء كسب المال اليوم.', 'المال ، المال! كسب المزيد من المال مع الروبوت المالي! https://rap.187sued.de/gotodate/link', '2022-05-18 10:17:20', '2022-05-18 10:17:20'),
(99, 'Henryrap', '89039051869', 'richiecosta@hotmail.com', 'دع أموالك تنمو في العاصمة مع هذا الروبوت.', 'تم العثور على صيغة النجاح. معرفة المزيد حول هذا الموضوع. https://rap.187sued.de/gotodate/link', '2022-05-18 15:35:29', '2022-05-18 15:35:29'),
(100, 'Henryrap', '89034235166', 'yariccardi@yahoo.com', 'نتطلع للدخل? احصل عليه عبر الإنترنت.', 'ويضمن الآلاف من الدولارات إذا كنت تستخدم هذا الروبوت. https://rap.187sued.de/gotodate/link', '2022-05-19 01:36:07', '2022-05-19 01:36:07'),
(101, 'Henryrap', '89034961838', 'michiw84@yahoo.com', 'جعل الآلاف كل أسبوع العمل على الانترنت هنا.', 'نجاح باهر! هذا هو أسرع وسيلة للاستقلال المالي. https://rap.187sued.de/gotodate/link', '2022-05-19 06:35:08', '2022-05-19 06:35:08'),
(102, 'Henryrap', '89031005426', 'e.galanitsas@gmail.com', 'إطلاق الروبوت والسماح لها تجلب لك المال.', 'هذا هو أفضل وقت لإطلاق الروبوت للحصول على المزيد من المال. https://rap.bookeat.es/gotodate/promo', '2022-05-19 11:33:15', '2022-05-19 11:33:15'),
(103, 'Douglasmuh', '89428555999', 'meganmoosman@hotmail.com', 'QUICK INCOME OVER $541168 PER MONTH', 'YOUR POTENTIAL INCOME FROM ABOUT $545607S PER WEEK https://157usd-for-3-minutes.blogspot.com.ar/p/passive-income-up-to-5000-per-day.html?id40013', '2022-05-19 15:17:05', '2022-05-19 15:17:05'),
(104, 'Douglasmuh', '87924874763', 'meganmoosman@hotmail.com', 'QUICK INCOME OVER $541168 PER MONTH', 'YOUR POTENTIAL INCOME FROM ABOUT $545607S PER WEEK https://157usd-for-3-minutes.blogspot.com.ar/p/passive-income-up-to-5000-per-day.html?id40013', '2022-05-19 15:17:05', '2022-05-19 15:17:05'),
(105, 'Douglasmuh', '84978934833', 'meganmoosman@hotmail.com', 'QUICK INCOME OVER $541168 PER MONTH', 'YOUR POTENTIAL INCOME FROM ABOUT $545607S PER WEEK https://157usd-for-3-minutes.blogspot.com.ar/p/passive-income-up-to-5000-per-day.html?id40013', '2022-05-19 15:17:05', '2022-05-19 15:17:05'),
(106, 'Douglasmuh', '83299179858', 'meganmoosman@hotmail.com', 'QUICK INCOME OVER $541168 PER MONTH', 'YOUR POTENTIAL INCOME FROM ABOUT $545607S PER WEEK https://157usd-for-3-minutes.blogspot.com.ar/p/passive-income-up-to-5000-per-day.html?id40013', '2022-05-19 15:17:06', '2022-05-19 15:17:06'),
(107, 'Douglasmuh', '88523614328', 'meganmoosman@hotmail.com', 'QUICK INCOME OVER $541168 PER MONTH', 'YOUR POTENTIAL INCOME FROM ABOUT $545607S PER WEEK https://157usd-for-3-minutes.blogspot.com.ar/p/passive-income-up-to-5000-per-day.html?id40013', '2022-05-19 15:17:06', '2022-05-19 15:17:06'),
(108, 'Henryrap', '89030293889', 'a.fry20@yahoo.com', 'الاستقلال المالي هو ما يضمنه هذا الروبوت.', 'معظم الناس ناجحة بالفعل استخدام الروبوت. هل? https://rap.bookeat.es/gotodate/promo', '2022-05-19 16:31:24', '2022-05-19 16:31:24'),
(109, 'Henryrap', '89038913494', 'helenclausen@yahoo.com', 'تعرف على أسهل طريقة لكسب المال.', 'مشاهدة أموالك تنمو أثناء الاستثمار مع الروبوت. https://rap.bookeat.es/gotodate/promo', '2022-05-20 03:36:10', '2022-05-20 03:36:10'),
(110, 'Henryrap', '89037598413', 'marekaljevic@aol.com', 'تحقق من أحدث طريقة لتحقيق ربح رائع.', 'يمكن للجميع كسب بقدر ما يريد الآن. https://rap.bookeat.es/gotodate/promo', '2022-05-20 21:50:25', '2022-05-20 21:50:25'),
(111, 'Henryrap', '89033186509', 'ayam@aol.com', 'بحاجة الى المال? احصل عليه هنا بسهولة?', 'أموالك تعمل حتى عندما تنام. https://rap.bookeat.es/gotodate/promo', '2022-05-21 02:45:28', '2022-05-21 02:45:28'),
(112, 'Henryrap', '89030487642', 'shru1990@gmail.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'لا حاجة للبقاء مستيقظا طوال الليل لكسب المال. إطلاق الروبوت. https://rap.bookeat.es/gotodate/promo', '2022-05-21 15:15:46', '2022-05-21 15:15:46'),
(113, 'Henryrap', '89034362735', 'tammy_huang@yahoo.com', 'الدخل الضخم بدون استثمارات متاح الآن!', 'الدخل على الانترنت هو أسهل الطرق لجعل لكم الحلم. https://rap.bookeat.es/gotodate/promo', '2022-05-22 04:58:03', '2022-05-22 04:58:03'),
(114, 'Henryrap', '89034369847', 'holli.surdin@yahoo.com', 'كسب أموال إضافية دون جهود.', 'الروبوت المالي يحتفظ تجلب لك المال أثناء النوم. https://rap.bookeat.es/gotodate/promo', '2022-05-22 09:57:00', '2022-05-22 09:57:00'),
(115, 'Henryrap', '89039746376', 'lessite2@yahoo.com', 'لا حاجة للعمل بعد الآن. مجرد إطلاق الروبوت.', 'المال ، المال! كسب المزيد من المال مع الروبوت المالي! https://rap.bookeat.es/gotodate/promo', '2022-05-22 17:05:20', '2022-05-22 17:05:20'),
(116, 'Henryrap', '89035161306', 'icdumbppl@gmail.com', 'نجاح باهر! هذا هو أسرع وسيلة للاستقلال المالي.', 'لا حاجة للعمل بعد الآن في حين لديك الروبوت أطلقت! https://rap.bookeat.es/gotodate/promo', '2022-05-22 22:02:02', '2022-05-22 22:02:02'),
(117, 'Henryrap', '89030635968', 'jolene51@hotmail.com', 'ابدأ عملك عبر الإنترنت باستخدام الروبوت المالي.', 'ابدأ في جني آلاف الدولارات كل أسبوع. https://rap.bookeat.es/gotodate/promo', '2022-05-23 05:42:39', '2022-05-23 05:42:39'),
(118, 'Henryrap', '89037813726', 'cjt.dev@virgin.net', 'انتباه ! هنا يمكنك كسب المال عبر الإنترنت!', 'حتى الطفل يعرف كيف يكسب 100 دولار اليوم بمساعدة هذا الروبوت. https://rap.bookeat.es/gotodate/promotion', '2022-05-23 22:45:25', '2022-05-23 22:45:25'),
(119, 'Henryrap', '89033848378', 'dupontjoy@gmail.com', 'جعل الآلاف من الدولارات. لا تدفع شيئا.', 'كسب المال في الإنترنت باستخدام هذا بوت. إنه يعمل حقا! https://rap.bookeat.es/gotodate/promotion', '2022-05-23 23:02:48', '2022-05-23 23:02:48'),
(120, 'Henryrap', '89034186478', 'Nattymama1120@gmail.com', 'مشاهدة أموالك تنمو أثناء الاستثمار مع الروبوت.', 'إطلاق الروبوت المالي والقيام بعملك. https://rap.bookeat.es/gotodate/promotion', '2022-05-24 03:15:06', '2022-05-24 03:15:06'),
(121, 'Henryrap', '89031242885', 'pantomo6@hanmail.net', 'الروبوت المالي يعمل بالنسبة لك حتى عند النوم.', 'مشاهدة أموالك تنمو أثناء الاستثمار مع الروبوت. https://rap.bookeat.es/gotodate/promotion', '2022-05-24 08:19:37', '2022-05-24 08:19:37'),
(122, 'Henryrap', '89036678101', 'afixbeccaboox@yahoo.com', 'مشاهدة أموالك تنمو أثناء الاستثمار مع الروبوت.', 'تحقق من أحدث طريقة لتحقيق ربح رائع. https://rap.bookeat.es/gotodate/promotion', '2022-05-24 13:40:44', '2022-05-24 13:40:44'),
(123, 'Henryrap', '89039327668', 'scorpionstinger87@yahoo.com', 'انتباه ! الروبوت المالي قد تجلب لك الملايين!', 'الروبوت المالي هو أفضل رفيق للأثرياء. https://rap.bookeat.es/gotodate/promotion', '2022-05-24 18:02:10', '2022-05-24 18:02:10'),
(124, 'Henryrap', '89034653722', 'Yolandekiel@hotmail.com', 'دخل إضافي للجميع.', 'لا يزال ليس مليونيرا? إصلاحه الآن! https://rap.bookeat.es/gotodate/promotion', '2022-05-24 23:12:40', '2022-05-24 23:12:40'),
(125, 'Henryrap', '89038486955', 'gisele1@gmail.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'كسب 1000 دولار في اليوم أمر سهل إذا كنت تستخدم هذا الروبوت المالي. https://rap.bookeat.es/gotodate/promotion', '2022-05-25 00:32:47', '2022-05-25 00:32:47'),
(126, 'Henryrap', '89036116715', 'michala.burden@yahoo.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'جعل دولار مجرد الجلوس المنزل. https://rap.bookeat.es/gotodate/promotion', '2022-05-25 01:16:46', '2022-05-25 01:16:46'),
(127, 'Henryrap', '89034072103', 'gatinhalokaa@hotmail.com', 'لا حاجة للعمل بعد الآن في حين لديك الروبوت أطلقت!', 'بحاجة الى بعض المزيد من المال? سوف الروبوت كسب لهم بسرعة حقا. https://rap.bookeat.es/gotodate/promotion', '2022-05-25 05:27:38', '2022-05-25 05:27:38'),
(128, 'Henryrap', '89034659853', 'tom_jones33_4u@yahoo.com', 'الروبوت المالي هو ثروتك واستقلالك في المستقبل.', 'نحن نعرف كيف تصبح غنية وهل? https://rap.bookeat.es/gotodate/promotion', '2022-05-25 09:03:58', '2022-05-25 09:03:58'),
(129, 'Henryrap', '89038446629', 'vkmcom@aol.com', 'تم العثور على أسرع طريقة لجعل محفظتك سميكة.', 'تحويل 1 دولار إلى 100 دولار على الفور. استخدام الروبوت المالي. https://rap.bookeat.es/gotodate/promotion', '2022-05-25 09:49:30', '2022-05-25 09:49:30'),
(130, 'Henryrap', '89030651417', 'sittiphon_nung01@hotmail.com', 'أموالك تعمل حتى عندما تنام.', 'تحقق من بوت التلقائي, الذي يعمل لديك 24/7. https://rap.bookeat.es/gotodate/promotion', '2022-05-25 15:27:56', '2022-05-25 15:27:56'),
(131, 'Henryrap', '89038956071', 'Miro_pasillas@yahoo.com', 'تم العثور على أسرع طريقة لجعل محفظتك سميكة.', 'البدء في صنع الآلاف من الدولارات كل أسبوع فقط باستخدام هذا الروبوت. https://rap.bookeat.es/gotodate/promotion', '2022-05-25 19:47:06', '2022-05-25 19:47:06'),
(132, 'Henryrap', '89039725271', 'earlejones8@gmail.com', 'تبحث عن أموال إضافية? جرب أفضل أداة مالية.', 'الدخل الضخم بدون استثمارات متاح الآن! https://rap.bookeat.es/gotodate/promotion', '2022-05-25 20:26:05', '2022-05-25 20:26:05'),
(133, 'Henryrap', '89035346570', 'mgehan@cbsh.net', 'الروبوت المالي يعمل بالنسبة لك حتى عند النوم.', 'هذا الروبوت يمكن أن تجلب لك المال 24/7. https://rap.bookeat.es/gotodate/promotion', '2022-05-26 00:37:58', '2022-05-26 00:37:58'),
(134, 'Henryrap', '89032997391', 'fansaa@163.com', 'إطلاق الروبوت والسماح لها تجلب لك المال.', 'استثمار $1 اليوم لجعل tomorrow 1000 غدا. https://rap.bookeat.es/gotodate/promotion', '2022-05-26 01:23:47', '2022-05-26 01:23:47'),
(135, 'Henryrap', '89038528056', 'jdb416@gmail.com', 'نحن نعرف كيفية زيادة الاستقرار المالي الخاص بك.', 'حتى الطفل يعرف كيف يكسب المال. هذا الروبوت هو ما تحتاجه! https://rap.bookeat.es/gotodate/promotion', '2022-05-26 02:20:08', '2022-05-26 02:20:08'),
(136, 'Henryrap', '89038757157', 'raj_4_u56@yahoo.com', 'توفير عائلتك مع المال في السن. إطلاق الروبوت!', 'معظم الناس ناجحة بالفعل استخدام الروبوت. هل? https://rap.bookeat.es/gotodate/promotion', '2022-05-26 05:35:39', '2022-05-26 05:35:39'),
(137, 'Henryrap', '89037429063', 'acanady@cityofbakerla.com', 'أفضل طريقة لكل من يندفع من أجل الاستقلال المالي.', 'تحويل 1 دولار إلى 100 دولار على الفور. استخدام الروبوت المالي. https://rap.bookeat.es/gotodate/promotion', '2022-05-26 06:19:52', '2022-05-26 06:19:52'),
(138, 'Henryrap', '89033514213', 'ntgias@gmail.com', 'الدخل على الانترنت هو أسهل الطرق لجعل لكم الحلم.', 'دولار واحد لا شيء, ولكن يمكن أن تنمو لتصبح 1 100 هنا. https://rap.bookeat.es/gotodate/promotion', '2022-05-26 06:48:29', '2022-05-26 06:48:29'),
(139, 'Henryrap', '89034770079', 'ruixian122@163.com', 'الدخل عبر الإنترنت هو مفتاح النجاح.', 'دولار واحد لا شيء, ولكن يمكن أن تنمو لتصبح 1 100 هنا. https://rap.bookeat.es/gotodate/promotion', '2022-05-26 10:30:22', '2022-05-26 10:30:22'),
(140, 'Henryrap', '89030187712', 'church_of_christ_bokod@yahoo.com', 'جعل الآلاف كل أسبوع العمل على الانترنت هنا.', 'الروبوت المالي هو الأداة المالية الأكثر فعالية في الشبكة! https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-26 16:18:37', '2022-05-26 16:18:37'),
(141, 'Henryrap', '89039126122', 'fbykznnug@163.com', 'جعل دولار مجرد الجلوس المنزل.', 'انضم إلى مجتمع الأشخاص الناجحين الذين يكسبون المال هنا. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-26 20:16:38', '2022-05-26 20:16:38'),
(142, 'Henryrap', '89031064913', 'inuyasha_beth@yahoo.com', 'يمكن للجميع كسب بقدر ما يريد الآن.', 'بحاجة الى المال? كسب ذلك دون مغادرة منزلك. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-26 21:21:24', '2022-05-26 21:21:24'),
(143, 'Henryrap', '89038788946', 'bseballrocks20@yahoo.com', 'الدخل الضخم بدون استثمارات متاح الآن!', 'وهذا الروبوت تساعدك على جعل مئات من الدولارات كل يوم. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-27 01:13:46', '2022-05-27 01:13:46'),
(144, 'Henryrap', '89031703755', 'naseer_m@hotmail.com', 'لا يزال ليس مليونيرا? سوف الروبوت المالي تجعلك له!', 'كسب المال في الشبكة أسهل الآن. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-27 02:23:15', '2022-05-27 02:23:15'),
(145, 'Henryrap', '89037485808', 'heestripped@yahoo.com', 'الدخل على الانترنت هو أسهل الطرق لجعل لكم الحلم.', 'تبحث عن وسيلة سهلة لكسب المال? تحقق من الروبوت المالي. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-27 06:01:26', '2022-05-27 06:01:26'),
(146, 'Henryrap', '89038608351', 'tslewis91@yahoo.com', 'جعل دولار مجرد الجلوس المنزل.', 'أفضل طريقة لكل من يندفع من أجل الاستقلال المالي. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-27 07:18:26', '2022-05-27 07:18:26'),
(147, 'Henryrap', '89036794720', 'justmesam8@aol.com', 'سوف بوت على الانترنت تجلب لك الثروة والارتياح.', 'ابدأ في جني آلاف الدولارات كل أسبوع. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-27 07:23:16', '2022-05-27 07:23:16'),
(148, 'Henryrap', '89033463526', '09d53pfx2n5dm7@yeah.net', 'معظم الناس ناجحة بالفعل استخدام الروبوت. هل?', 'نحن نعرف كيف تصبح غنية وهل? https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-27 12:55:06', '2022-05-27 12:55:06'),
(149, 'Henryrap', '89034378865', 'morgan@allthat.com', 'جعل جهاز الكمبيوتر الخاص بك ليكون لك كسب الصك.', 'جعل جهاز الكمبيوتر الخاص بك ليكون لك كسب الصك. https://rap.battletech-newsletter.de/gotodate/promo', '2022-05-27 16:21:49', '2022-05-27 16:21:49'),
(150, 'Henryrap', '89036158728', 'pasqualerovetto@gmail.com', 'إطلاق الروبوت المالي والقيام بعملك.', 'تحقق من الأداة المالية الجديدة ، والتي يمكن أن تجعلك غنيا. https://rap.battletech-newsletter.de/rap', '2022-05-27 18:07:25', '2022-05-27 18:07:25'),
(151, 'Henryrap', '89031560254', '9449476832@gmail.com', 'أموالك تعمل حتى عندما تنام.', 'ليس لديهم المال? من السهل كسبها عبر الإنترنت هنا. https://rap.battletech-newsletter.de/rap', '2022-05-27 23:33:40', '2022-05-27 23:33:40'),
(152, 'Henryrap', '89036086664', 'debbiefalk1985@hotmail.com', 'لقد وجدنا أسرع طريقة لتكون غنية. العثور عليه هنا.', 'الدخل على الانترنت هو أسهل الطرق لجعل لكم الحلم. https://rap.battletech-newsletter.de/rap', '2022-05-27 23:48:34', '2022-05-27 23:48:34'),
(153, 'Henryrap', '89037665889', 'bostop1195@gmail.com', 'أموالك تعمل حتى عندما تنام.', 'الروبوت هو الحل الأفضل لكل من يريد أن يكسب. https://rap.battletech-newsletter.de/rap', '2022-05-28 02:12:28', '2022-05-28 02:12:28'),
(154, 'Henryrap', '89033528670', 'Kaitlynnpeters1222@yahoo.com', 'الروبوت المالي هو وسيلة رائعة لإدارة وزيادة دخلك.', 'الروبوت المالي الخاص بك هو # 1 خبير لكسب المال. https://rap.battletech-newsletter.de/rap', '2022-05-28 05:18:42', '2022-05-28 05:18:42'),
(155, 'Henryrap', '89039214152', 'onegrumpyperson06@yahoo.com', 'جرب الروبوت الآلي للحفاظ على كسب طوال اليوم.', 'الروبوت المالي هو تم العثور على صيغة نجاحك. معرفة المزيد حول هذا الموضوع. https://rap.battletech-newsletter.de/rap', '2022-05-28 07:04:59', '2022-05-28 07:04:59'),
(156, 'Henryrap', '89035173665', 'dadayu0@outlook.com', 'استثمار $1 اليوم لجعل tomorrow 1000 غدا.', 'الدخل الإضافي متاح للجميع باستخدام هذا الروبوت. https://rap.battletech-newsletter.de/rap', '2022-05-28 11:06:45', '2022-05-28 11:06:45'),
(157, 'Henryrap', '89038321104', 'graceeubank@gmail.com', 'لقد وجدنا أسرع طريقة لتكون غنية. العثور عليه هنا.', 'وهذا الروبوت تساعدك على جعل مئات من الدولارات كل يوم. https://rap.battletech-newsletter.de/rap', '2022-05-28 11:59:32', '2022-05-28 11:59:32'),
(158, 'Henryrap', '89039452510', 'tthomas9987@gmail.com', 'الدخل على الانترنت هو أسهل الطرق لجعل لكم الحلم.', 'حتى الطفل يعرف كيف يكسب المال. هذا الروبوت هو ما تحتاجه! https://rap.battletech-newsletter.de/rap', '2022-05-28 12:33:39', '2022-05-28 12:33:39'),
(159, 'Mosilldum', '86996683768', 'rev.e.r.s@o5o5.ru', 'каким средством избавиться от клопов', '<a href=https://mosecoservice.ru/>городская служба дезинсекции москва </a> \r\nTegs: городская служба дезинсекции мытищи  https://mosecoservice.ru/  \r\n \r\n<u>каким раствором травят клопов </u> \r\n<i>каким средством вывести клопов в квартире </i> \r\n<b>каким средством вывести клопов в квартире самостоятельно </b>', '2022-05-28 13:43:28', '2022-05-28 13:43:28'),
(160, 'Henryrap', '89034985647', 'preciosa_lindamalia@hotmail.com', 'أفضل طريقة لكل من يندفع من أجل الاستقلال المالي.', 'الروبوت المالي هو أفضل رفيق للأثرياء. https://rap.battletech-newsletter.de/rap', '2022-05-28 16:52:24', '2022-05-28 16:52:24'),
(161, 'Henryrap', '89035889679', 'evilleguyizfun@aol.com', 'انتباه ! هنا يمكنك كسب المال عبر الإنترنت!', 'ويضمن الآلاف من الدولارات إذا كنت تستخدم هذا الروبوت. https://rap.battletech-newsletter.de/rap', '2022-05-28 20:10:33', '2022-05-28 20:10:33'),
(162, 'Henryrap', '89037929866', 'themariebooking@gmail.com', 'الدخل عبر الإنترنت هو مفتاح النجاح.', 'لا تقلق إذا تم طردك. العمل عبر الإنترنت. https://rap.battletech-newsletter.de/rap', '2022-05-28 21:41:47', '2022-05-28 21:41:47'),
(163, 'Henryrap', '89039034827', 'corettacarothers@yahoo.com', 'جعل دولار البقاء في المنزل وأطلقت هذا بوت.', 'ليس لديهم المال? من السهل كسبها عبر الإنترنت هنا. https://rap.battletech-newsletter.de/rap', '2022-05-29 04:16:02', '2022-05-29 04:16:02'),
(164, 'Henryrap', '89030588723', 'makeupgirl545@gmail.com', 'نجاح باهر! هذا هو أسرع وسيلة للاستقلال المالي.', 'توفير عائلتك مع المال في السن. إطلاق الروبوت! https://rap.battletech-newsletter.de/rap', '2022-05-29 06:10:19', '2022-05-29 06:10:19'),
(165, 'Henryrap', '89035247195', 'JWALKER726@AOL.COM', 'الروبوت المالي هو وسيلة رائعة لإدارة وزيادة دخلك.', 'جرب الروبوت الآلي للحفاظ على كسب طوال اليوم. https://rap.battletech-newsletter.de/rap', '2022-05-29 11:18:37', '2022-05-29 11:18:37'),
(166, 'Henryrap', '89032525237', 'hottstuff_2000us@yahoo.com', 'كسب المال في الشبكة أسهل الآن.', 'أموالك تعمل حتى عندما تنام. https://rap.battletech-newsletter.de/rap', '2022-05-29 16:18:41', '2022-05-29 16:18:41'),
(167, 'Henryrap', '89036009200', 'tj.beam@yahoo.com', 'نجاح باهر! هذا هو أسرع وسيلة للاستقلال المالي.', 'تعرف على أسهل طريقة لكسب المال. https://rap.battletech-newsletter.de/rap', '2022-05-29 21:11:32', '2022-05-29 21:11:32'),
(168, 'Henryrap', '89038835155', 'jhon_9111@hotmail.com', 'اجعل أموالك تعمل من أجلك طوال اليوم.', 'نحن نعرف كيف نجعل مستقبلنا غنيا وهل أنت? https://rap.battletech-newsletter.de/rap', '2022-05-30 02:03:29', '2022-05-30 02:03:29'),
(169, 'Henryrap', '89031250828', 'msinitaj@yahoo.com', 'إطلاق بوت المالية الآن للبدء في كسب.', 'ليس لديهم المال? كسب على الانترنت. https://rap.battletech-newsletter.de/rap', '2022-05-30 03:31:48', '2022-05-30 03:31:48'),
(170, 'Henryrap', '89034684036', 'rees2301@virginmedia.com', 'يمكن أن تجلب لك الوظيفة عبر الإنترنت ربحا رائعا.', 'تم العثور على صيغة النجاح. معرفة المزيد حول هذا الموضوع. https://rap.battletech-newsletter.de/rap', '2022-05-30 07:29:41', '2022-05-30 07:29:41'),
(171, 'Henryrap', '89039143765', 'ruthg72@yahoo.com', 'الروبوت المالي هو أفضل رفيق للأثرياء.', 'لا حاجة للعمل بعد الآن في حين لديك الروبوت أطلقت! https://rap.battletech-newsletter.de/rap', '2022-05-30 11:13:58', '2022-05-30 11:13:58'),
(172, 'Henryrap', '89035863002', 'Toytoi28us@yahoo.com', 'اجعل أموالك تعمل من أجلك طوال اليوم.', 'استثمار $1 اليوم لجعل tomorrow 1000 غدا. https://rap.battletech-newsletter.de/rap', '2022-05-30 14:16:28', '2022-05-30 14:16:28'),
(173, 'Henryrap', '89036878113', 'julie_figueroa8@yahoo.com', 'استثمار $1 اليوم لجعل tomorrow 1000 غدا.', 'يمكن أن تجلب الاستثمارات الصغيرة أطنانا من الدولارات بسرعة. https://rap.battletech-newsletter.de/rap', '2022-05-30 14:36:32', '2022-05-30 14:36:32'),
(174, 'Henryrap', '89030532083', 'louisedenny.ox@gmail.com', 'كسب أموال إضافية دون جهود ومهارات.', 'إطلاق أفضل أداة استثمارية لبدء كسب المال اليوم. https://rap.battletech-newsletter.de/rap', '2022-05-30 16:08:48', '2022-05-30 16:08:48'),
(175, 'Henryrap', '89033368755', 'lonely_maikz28@yahoo.com', 'نتطلع للدخل? احصل عليه عبر الإنترنت.', 'دخل إضافي للجميع. https://rap.battletech-newsletter.de/rap', '2022-05-30 19:30:22', '2022-05-30 19:30:22'),
(176, 'Henryrap', '89032854439', 'nigalfriend87@hotmail.com', 'إطلاق بوت المالية الآن للبدء في كسب.', 'ليس لديهم مهارات مالية? السماح الروبوت كسب المال بالنسبة لك. https://rap.battletech-newsletter.de/rap', '2022-05-31 00:48:53', '2022-05-31 00:48:53'),
(177, 'Henryrap', '89038273793', 'ziska.kristina@yahoo.com', 'جعل دولار مجرد الجلوس المنزل.', 'يمكن أن تجلب الاستثمارات الصغيرة أطنانا من الدولارات بسرعة. https://rap.battletech-newsletter.de/rap', '2022-05-31 01:50:54', '2022-05-31 01:50:54'),
(178, 'Henryrap', '89038472605', 'kimburleyrios@yahoo.com', 'الاستقلال المالي هو ما يضمنه هذا الروبوت.', 'حتى الطفل يعرف كيف يكسب المال. هل? https://rap.battletech-newsletter.de/rap', '2022-05-31 05:37:53', '2022-05-31 05:37:53'),
(179, 'Henryrap', '89039798293', 'www.maria391521@yahoo.com', 'لا تقلق إذا تم طردك. العمل عبر الإنترنت.', 'بنقرة واحدة فقط يمكن أن يحولك الدولار إلى 1000 دولار. https://rap.battletech-newsletter.de/rap', '2022-05-31 06:49:07', '2022-05-31 06:49:07'),
(180, 'Henryrap', '89031722498', 'sunil_511@yahoo.com', 'كسب أموال إضافية دون جهود ومهارات.', 'جعل الكمبيوتر المحمول أداة مالية مع هذا البرنامج. https://rap.battletech-newsletter.de/rap', '2022-05-31 07:23:40', '2022-05-31 07:23:40'),
(181, 'Henryrap', '89032126594', 'tezzajo@yaoo.com', 'الروبوت المالي يعمل بالنسبة لك حتى عند النوم.', 'تعرف على أسهل طريقة لكسب المال. https://rap.battletech-newsletter.de/rap', '2022-05-31 10:39:56', '2022-05-31 10:39:56'),
(182, 'Henryrap', '89035368931', 'anyawri2795@yahoo.com', 'إطلاق الروبوت المالي والقيام بعملك.', 'لا يزال ليس مليونيرا? إصلاحه الآن! https://rap.battletech-newsletter.de/rap', '2022-05-31 13:00:48', '2022-05-31 13:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivery_cost` int(11) NOT NULL DEFAULT 1,
  `min_order` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name_ar`, `name_en`, `display`, `created_at`, `updated_at`, `delivery_cost`, `min_order`) VALUES
(1, 'Bahrain (‫البحرين‬‎)', 'Bahrain (‫البحرين‬‎)', 1, '2021-06-07 10:22:08', '2022-03-15 15:23:07', 1, 0),
(4, 'السعودية', 'ٍٍSaudi Arabia', 1, '2021-10-17 02:12:45', '2022-02-11 15:03:20', 6, 0),
(5, 'الكويت', 'Kuwait', 1, '2021-10-17 02:13:30', '2022-02-11 15:03:52', 6, 0),
(6, 'الإمارات العربية المتحدة', 'United Arab Emirates', 1, '2021-10-17 02:14:49', '2022-02-11 15:04:01', 6, 0),
(7, 'قطر', 'Qatar', 1, '2021-10-17 02:15:15', '2022-02-11 15:04:41', 12, 0),
(8, 'عمان', 'Oman', 1, '2021-10-17 02:15:40', '2022-02-11 15:04:21', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `percent_off` int(11) DEFAULT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `discount`, `percent_off`, `from`, `to`, `created_at`, `updated_at`) VALUES
(7, 'ABC', 'percent_off', NULL, 10, '2021-12-18', '2022-04-30', NULL, '2022-01-31 11:59:24'),
(14, '1234', 'discount', 1, NULL, '2022-01-01', '2022-02-03', NULL, NULL),
(15, '123', 'percent_off', NULL, 50, '2022-01-01', '2022-02-03', NULL, NULL),
(16, '123456', 'percent_off', NULL, 99, '2022-01-31', '2022-02-03', NULL, NULL),
(17, '9988', 'percent_off', NULL, 100, '2022-02-01', '2022-02-12', NULL, NULL),
(18, '999', 'percent_off', NULL, 100, '2022-02-01', '2022-02-18', NULL, NULL),
(19, 'test13', 'percent_off', NULL, 50, '2022-03-06', '2022-03-15', NULL, '2022-03-14 14:26:32'),
(20, 'walaa', 'percent_off', NULL, 25, '2022-03-13', '2022-03-18', NULL, NULL),
(21, 'OFF25', 'percent_off', NULL, 25, '2022-03-18', '2022-03-31', NULL, NULL),
(22, 'RAM20', 'percent_off', NULL, 20, '2022-04-01', '2022-05-01', NULL, NULL),
(23, 'RAM1', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL),
(24, 'RAM2', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL),
(25, 'RAM3', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL),
(26, 'RAM4', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL),
(28, 'RAM6', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL),
(31, 'RAM9', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL),
(33, 'RAM11', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL),
(35, 'RAM13', 'discount', 10, NULL, '2022-04-01', '2022-05-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(5,3) NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name_ar`, `name_en`, `value`, `display`, `created_at`, `updated_at`) VALUES
(1, 'BHD', 'BHD', 1.000, 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(2, 'SAR', 'SAR', 10.000, 1, '2021-06-08 13:07:13', '2021-12-30 09:06:07'),
(3, 'KWD', 'KWD', 0.820, 1, '2021-06-08 13:07:32', '2021-12-30 09:06:19'),
(4, 'AED', 'AED', 10.000, 1, '2021-06-08 13:07:47', '2021-12-30 09:06:29'),
(5, 'OMR', 'OMR', 1.020, 1, '2021-06-08 13:08:07', '2021-12-30 09:06:40'),
(6, 'USD', 'USD', 2.650, 1, '2021-06-08 13:08:23', '2021-12-30 09:06:51'),
(7, 'GBP', 'GBP', 2.300, 1, '2021-06-08 13:08:39', '2021-12-30 09:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_orders`
--

CREATE TABLE `delivery_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `orderId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question_ar`, `question_en`, `answer_ar`, `answer_en`, `image`, `display`, `created_at`, `updated_at`) VALUES
(6, 'كيف يمكنني دفع الطلب ؟', 'How can I pay the order?', 'بعد استكمال الطلب يمكنكم دفعه بواسطة ( بطاقة الصراف الآلي أو البطاقة الائتمانية )', 'After completing the order, it can be paid by (debit card or credit card)', NULL, 1, '2022-03-04 20:56:24', '2022-03-04 22:28:12'),
(5, 'كيف يتم توصيل الطلب ؟', 'How is the order delivered?', 'يتم توصيل الطلبات بواسطة شركة الشحن أرامكس', 'Orders are delivered by courier company Aramex', NULL, 1, '2022-03-04 20:53:49', '2022-03-04 20:53:49'),
(4, 'كم يستغرق توصيل الطلب ؟', 'How long does it take to deliver an order?', 'التوصيل داخل البحرين 2-3 أيام عمل -\r\nالتوصيل خارج البحرين لدول الخليج 5-7 أيام عمل', '- Delivery within Bahrain 2-3 working days\r\nDelivery outside Bahrain to Gulf countries 5-7 working days', NULL, 1, '2022-03-04 20:51:57', '2022-03-04 20:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `client_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 20, 171, '2022-03-16 05:32:08', '2022-03-16 05:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(362, '2014_10_12_000000_create_users_table', 1),
(363, '2019_08_19_000000_create_failed_jobs_table', 1),
(364, '2021_02_03_003015_create_agents_table', 1),
(365, '2021_02_03_075008_create_sliders_table', 1),
(366, '2021_02_03_075211_create_categories_table', 1),
(367, '2021_02_03_075449_create_products_table', 1),
(368, '2021_02_03_075809_create_testimonials_table', 1),
(369, '2021_02_03_080043_create_recipes_table', 1),
(370, '2021_02_03_080252_create_clients_table', 1),
(371, '2021_02_03_081757_create_reviews_table', 1),
(372, '2021_02_03_082146_create_regions_table', 1),
(373, '2021_02_03_082234_create_addresses_table', 1),
(374, '2021_02_03_082701_create_payment_methods_table', 1),
(375, '2021_02_03_082936_create_contacts_table', 1),
(376, '2021_02_03_083038_create_orders_table', 1),
(377, '2021_02_03_083327_create_order_products_table', 1),
(378, '2021_02_08_114044_create_product_images_table', 1),
(379, '2021_02_09_095308_create_currencies_table', 1),
(380, '2021_02_09_113413_create_settings_table', 1),
(381, '2021_02_17_134907_create_f_a_q_s_table', 1),
(382, '2021_02_21_165428_create_favorites_table', 1),
(383, '2021_02_24_145825_create_transactions_table', 1),
(384, '2021_03_30_162234_create_coupons_table', 1),
(385, '2021_04_04_102253_create_countries_table', 1),
(386, '2021_04_13_113840_add_column_client_table', 1),
(387, '2021_04_13_123932_create_weights_table', 1),
(388, '2021_05_31_123705_create_colors_table', 1),
(389, '2021_06_06_135056_edit_sliders_table', 1),
(390, '2021_06_06_141046_edit02_sliders_table', 1),
(391, '2021_06_06_201019_create_color_products_table', 1),
(392, '2021_06_06_201811_edit_products_table', 1),
(393, '2021_06_06_211208_edit_order_products_table', 1),
(394, '2021_06_06_225028_edit_countries_table', 1),
(395, '2021_06_07_111920_edit_payment_methods_table', 1),
(396, '2021_06_27_195034_edit_agents_table', 2),
(397, '2021_06_27_205033_edit02_agents_table', 3),
(398, '2021_06_27_215133_edit03_agents_table', 4),
(400, '2021_06_28_142248_create_sizes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `sub_total` decimal(9,3) NOT NULL,
  `discount` decimal(9,3) NOT NULL,
  `coupon` decimal(9,3) DEFAULT NULL,
  `vat` decimal(9,3) NOT NULL,
  `delivery_charge` decimal(9,3) NOT NULL,
  `net_total` decimal(9,3) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `client_id`, `address_id`, `payment_id`, `sub_total`, `discount`, `coupon`, `vat`, `delivery_charge`, `net_total`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 10, 3, 0.500, 0.000, 0.250, 0.000, 0.750, 1.000, 2, '2022-03-14 14:54:47', '2022-03-14 15:02:36'),
(2, 11, 9, 2, 0.500, 0.000, 0.125, 0.000, 0.750, 1.125, 2, '2022-03-14 15:01:04', '2022-03-14 15:02:34'),
(4, 16, 13, 2, 4.500, 0.000, 1.125, 0.000, 0.750, 4.125, 10, '2022-03-15 22:23:34', '2022-03-15 22:23:34'),
(5, 21, 16, 2, 22.500, 0.000, 5.625, 0.000, 0.750, 17.625, 2, '2022-03-16 12:43:47', '2022-03-20 23:52:37'),
(7, 22, 17, 2, 7.000, 0.000, 0.000, 0.000, 0.750, 7.750, 2, '2022-03-17 22:35:21', '2022-03-20 23:52:35'),
(11, 23, 18, 2, 24.000, 0.000, 6.000, 0.000, 0.750, 18.750, 2, '2022-03-23 11:34:23', '2022-04-01 11:41:56'),
(12, 25, 19, 2, 5.500, 0.000, 0.000, 0.000, 0.750, 6.250, 10, '2022-03-25 21:34:53', '2022-03-25 21:34:53'),
(13, 26, 20, 2, 4.000, 0.000, 0.000, 0.000, 0.750, 4.750, 10, '2022-04-12 02:05:10', '2022-04-12 02:05:10'),
(14, 26, 20, 3, 4.000, 0.000, 0.000, 0.000, 0.750, 4.750, 10, '2022-04-12 02:05:50', '2022-04-12 02:05:50'),
(15, 26, 20, 2, 4.000, 0.000, 0.000, 0.000, 0.750, 4.750, 10, '2022-04-12 02:06:32', '2022-04-12 02:06:32'),
(16, 27, 21, 2, 5.500, 0.000, 0.000, 0.000, 0.750, 6.250, 2, '2022-04-12 19:32:27', '2022-04-16 13:36:05'),
(17, 28, 22, 2, 12.500, 0.000, 0.000, 0.000, 0.750, 13.250, 2, '2022-04-13 05:21:42', '2022-04-16 13:36:03'),
(18, 28, 22, 2, 12.500, 0.000, 0.000, 0.000, 0.750, 13.250, 10, '2022-04-13 05:25:52', '2022-04-13 05:25:52'),
(19, 28, 22, 2, 12.500, 0.000, 0.000, 0.000, 0.750, 13.250, 10, '2022-04-13 05:30:21', '2022-04-13 05:30:21'),
(20, 28, 22, 2, 12.500, 0.000, 0.000, 0.000, 0.750, 13.250, 10, '2022-04-13 05:36:36', '2022-04-13 05:36:36'),
(21, 28, 22, 2, 12.500, 0.000, 0.000, 0.000, 0.750, 13.250, 10, '2022-04-13 05:37:01', '2022-04-13 05:37:01'),
(22, 28, 22, 2, 12.500, 0.000, 0.000, 0.000, 0.750, 13.250, 10, '2022-04-13 05:43:05', '2022-04-13 05:43:05'),
(23, 28, 22, 2, 12.500, 0.000, 0.000, 0.000, 0.750, 13.250, 10, '2022-04-13 10:28:17', '2022-04-13 10:28:17'),
(24, 29, 23, 2, 27.000, 0.000, 0.000, 0.000, 0.750, 27.750, 10, '2022-04-19 06:20:36', '2022-04-19 06:20:36'),
(25, 29, 23, 3, 27.000, 0.000, 0.000, 0.000, 0.750, 27.750, 10, '2022-04-19 06:25:33', '2022-04-19 06:25:33'),
(26, 29, 23, 2, 27.000, 0.000, 0.000, 0.000, 0.750, 27.750, 10, '2022-04-19 06:25:58', '2022-04-19 06:25:58'),
(27, 29, 23, 3, 27.000, 0.000, 0.000, 0.000, 0.750, 27.750, 10, '2022-04-19 06:27:51', '2022-04-19 06:27:51'),
(28, 29, 23, 2, 27.000, 0.000, 0.000, 0.000, 0.750, 27.750, 10, '2022-04-19 06:29:15', '2022-04-19 06:29:15'),
(75, 44, 35, 3, 6.500, 0.000, 0.000, 0.000, 0.750, 7.250, 10, '2022-05-29 08:55:31', '2022-05-29 08:55:31'),
(73, 43, 34, 2, 12.000, 0.000, 0.000, 0.000, 0.750, 12.750, 0, '2022-05-24 12:26:58', '2022-05-24 18:18:33'),
(32, 30, 24, 2, 28.500, 0.000, 0.000, 0.000, 0.750, 29.250, 10, '2022-04-26 09:37:09', '2022-04-26 09:37:09'),
(33, 30, 24, 2, 28.500, 0.000, 0.000, 0.000, 0.750, 29.250, 10, '2022-04-26 09:42:34', '2022-04-26 09:42:34'),
(34, 30, 24, 2, 28.500, 0.000, 0.000, 0.000, 0.750, 29.250, 10, '2022-04-26 09:44:33', '2022-04-26 09:44:33'),
(35, 30, 24, 3, 28.500, 0.000, 0.000, 0.000, 0.750, 29.250, 10, '2022-04-26 09:45:14', '2022-04-26 09:45:14'),
(36, 30, 24, 2, 28.500, 0.000, 0.000, 0.000, 0.750, 29.250, 2, '2022-04-26 09:50:54', '2022-04-30 02:55:48'),
(72, 7, 5, 3, 5.500, 0.000, 0.000, 0.000, 0.750, 6.250, 10, '2022-05-14 16:41:30', '2022-05-14 16:41:30'),
(71, 7, 5, 2, 6.000, 0.000, 0.000, 0.000, 0.750, 6.750, 10, '2022-05-14 16:40:25', '2022-05-14 16:40:25'),
(39, 32, 26, 2, 10.000, 0.000, 10.000, 0.000, 0.750, 0.750, 2, '2022-04-29 20:46:12', '2022-05-08 22:48:38'),
(40, 33, 27, 3, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-04-30 17:48:08', '2022-04-30 17:48:08'),
(41, 33, 27, 2, 9.000, 0.000, 0.000, 0.000, 0.750, 9.750, 10, '2022-04-30 17:54:40', '2022-04-30 17:54:40'),
(42, 33, 27, 3, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-04-30 18:08:58', '2022-04-30 18:08:58'),
(43, 34, 28, 2, 9.000, 0.000, 0.000, 0.000, 0.750, 9.750, 10, '2022-04-30 18:42:59', '2022-04-30 18:42:59'),
(44, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-04-30 18:52:41', '2022-04-30 18:52:41'),
(45, 36, 29, 2, 12.000, 0.000, 10.000, 0.000, 0.750, 2.750, 2, '2022-05-01 06:58:55', '2022-05-08 22:48:36'),
(46, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-01 11:07:19', '2022-05-01 11:07:19'),
(47, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-01 11:10:34', '2022-05-01 11:10:34'),
(48, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-01 11:10:47', '2022-05-01 11:10:47'),
(49, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-01 11:19:55', '2022-05-01 11:19:55'),
(50, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-01 11:20:00', '2022-05-01 11:20:00'),
(51, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-01 11:23:01', '2022-05-01 11:23:01'),
(52, 34, 28, 2, 9.000, 0.000, 0.000, 0.000, 0.750, 9.750, 10, '2022-05-01 11:30:50', '2022-05-01 11:30:50'),
(53, 31, 25, 2, 9.000, 0.000, 0.000, 0.000, 0.750, 9.750, 2, '2022-05-01 22:37:48', '2022-05-08 22:48:33'),
(54, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-02 12:11:34', '2022-05-02 12:11:34'),
(55, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-02 12:15:19', '2022-05-02 12:15:19'),
(56, 34, 28, 2, 8.000, 0.000, 0.000, 0.000, 0.750, 8.750, 10, '2022-05-02 12:18:29', '2022-05-02 12:18:29'),
(57, 34, 28, 2, 8.000, 0.000, 10.000, 0.000, 0.750, -1.250, 10, '2022-05-02 12:27:13', '2022-05-02 12:27:13'),
(58, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-02 12:32:05', '2022-05-02 12:32:05'),
(59, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-02 15:08:37', '2022-05-02 15:08:37'),
(60, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-02 15:12:24', '2022-05-02 15:12:24'),
(61, 34, 28, 2, 8.000, 0.000, 10.000, 0.000, 0.750, -1.250, 10, '2022-05-02 15:34:19', '2022-05-02 15:34:19'),
(62, 34, 28, 2, 8.000, 0.000, 10.000, 0.000, 0.750, -1.250, 10, '2022-05-02 15:36:06', '2022-05-02 15:36:06'),
(63, 37, 30, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-03 05:40:27', '2022-05-03 05:40:27'),
(64, 34, 28, 2, 9.000, 0.000, 10.000, 0.000, 0.750, -0.250, 10, '2022-05-03 20:01:11', '2022-05-03 20:01:11'),
(65, 42, 33, 3, 11.000, 0.000, 10.000, 0.000, 0.750, 1.750, 10, '2022-05-08 08:43:52', '2022-05-08 08:43:52'),
(66, 42, 33, 2, 11.000, 0.000, 10.000, 0.000, 0.750, 1.750, 10, '2022-05-08 08:54:49', '2022-05-08 08:54:49'),
(68, 42, 33, 3, 7.000, 0.000, 0.000, 0.000, 0.750, 7.750, 10, '2022-05-08 09:16:49', '2022-05-08 09:16:49'),
(69, 42, 33, 3, 7.000, 0.000, 0.000, 0.000, 0.750, 7.750, 10, '2022-05-08 09:29:36', '2022-05-08 09:29:36'),
(70, 42, 33, 3, 7.000, 0.000, 0.000, 0.000, 0.750, 7.750, 10, '2022-05-08 09:31:36', '2022-05-08 09:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `total` decimal(9,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `price`, `quantity`, `total`, `created_at`, `updated_at`, `color_id`, `size_id`) VALUES
(1, 1, 218, 0.500, 1, 0.500, '2022-03-14 14:54:47', '2022-03-14 14:54:47', 16, 26),
(2, 2, 218, 0.500, 1, 0.500, '2022-03-14 15:01:04', '2022-03-14 15:01:04', 16, 27),
(3, 3, 6, 4.000, 1, 4.000, '2022-03-14 15:21:49', '2022-03-14 15:21:49', 16, 23),
(4, 4, 74, 4.500, 1, 4.500, '2022-03-15 22:23:34', '2022-03-15 22:23:34', 16, 32),
(5, 5, 26, 4.500, 1, 4.500, '2022-03-16 12:43:47', '2022-03-16 12:43:47', 16, 23),
(6, 5, 160, 4.500, 1, 4.500, '2022-03-16 12:43:47', '2022-03-16 12:43:47', 16, 22),
(7, 5, 164, 4.500, 1, 4.500, '2022-03-16 12:43:47', '2022-03-16 12:43:47', 16, 22),
(8, 5, 164, 4.500, 1, 4.500, '2022-03-16 12:43:47', '2022-03-16 12:43:47', 16, 27),
(9, 5, 163, 4.500, 1, 4.500, '2022-03-16 12:43:47', '2022-03-16 12:43:47', 16, 24),
(10, 6, 219, 0.010, 1, 0.010, '2022-03-17 11:22:09', '2022-03-17 11:22:09', 5, 13),
(11, 7, 100, 3.500, 1, 3.500, '2022-03-17 22:35:21', '2022-03-17 22:35:21', 16, 13),
(12, 7, 114, 3.500, 1, 3.500, '2022-03-17 22:35:21', '2022-03-17 22:35:21', 16, 13),
(13, 8, 219, 0.010, 1, 0.010, '2022-03-19 08:37:49', '2022-03-19 08:37:49', 3, 13),
(14, 9, 219, 0.010, 1, 0.010, '2022-03-19 08:40:05', '2022-03-19 08:40:05', 3, 13),
(15, 10, 219, 0.010, 1, 0.010, '2022-03-19 09:20:52', '2022-03-19 09:20:52', 4, 13),
(16, 11, 95, 3.500, 1, 3.500, '2022-03-23 11:34:23', '2022-03-23 11:34:23', 16, 13),
(17, 11, 97, 3.500, 1, 3.500, '2022-03-23 11:34:23', '2022-03-23 11:34:23', 16, 13),
(18, 11, 98, 3.500, 1, 3.500, '2022-03-23 11:34:23', '2022-03-23 11:34:23', 16, 13),
(19, 11, 100, 3.500, 1, 3.500, '2022-03-23 11:34:23', '2022-03-23 11:34:23', 16, 13),
(20, 11, 117, 3.500, 1, 3.500, '2022-03-23 11:34:23', '2022-03-23 11:34:23', 16, 13),
(21, 11, 182, 6.500, 1, 6.500, '2022-03-23 11:34:23', '2022-03-23 11:34:23', 16, 13),
(22, 12, 87, 5.500, 1, 5.500, '2022-03-25 21:34:53', '2022-03-25 21:34:53', 16, 24),
(23, 13, 36, 4.000, 1, 4.000, '2022-04-12 02:05:10', '2022-04-12 02:05:10', 16, 31),
(24, 14, 36, 4.000, 1, 4.000, '2022-04-12 02:05:50', '2022-04-12 02:05:50', 16, 31),
(25, 15, 36, 4.000, 1, 4.000, '2022-04-12 02:06:32', '2022-04-12 02:06:32', 16, 31),
(26, 16, 186, 5.500, 1, 5.500, '2022-04-12 19:32:27', '2022-04-12 19:32:27', 16, 13),
(27, 17, 175, 6.000, 1, 6.000, '2022-04-13 05:21:42', '2022-04-13 05:21:42', 16, 13),
(28, 17, 191, 6.500, 1, 6.500, '2022-04-13 05:21:42', '2022-04-13 05:21:42', 16, 13),
(29, 18, 175, 6.000, 1, 6.000, '2022-04-13 05:25:52', '2022-04-13 05:25:52', 16, 13),
(30, 18, 191, 6.500, 1, 6.500, '2022-04-13 05:25:52', '2022-04-13 05:25:52', 16, 13),
(31, 19, 175, 6.000, 1, 6.000, '2022-04-13 05:30:21', '2022-04-13 05:30:21', 16, 13),
(32, 19, 191, 6.500, 1, 6.500, '2022-04-13 05:30:21', '2022-04-13 05:30:21', 16, 13),
(33, 20, 175, 6.000, 1, 6.000, '2022-04-13 05:36:36', '2022-04-13 05:36:36', 16, 13),
(34, 20, 191, 6.500, 1, 6.500, '2022-04-13 05:36:36', '2022-04-13 05:36:36', 16, 13),
(35, 21, 175, 6.000, 1, 6.000, '2022-04-13 05:37:01', '2022-04-13 05:37:01', 16, 13),
(36, 21, 191, 6.500, 1, 6.500, '2022-04-13 05:37:01', '2022-04-13 05:37:01', 16, 13),
(37, 22, 175, 6.000, 1, 6.000, '2022-04-13 05:43:05', '2022-04-13 05:43:05', 16, 13),
(38, 22, 191, 6.500, 1, 6.500, '2022-04-13 05:43:05', '2022-04-13 05:43:05', 16, 13),
(39, 23, 175, 6.000, 1, 6.000, '2022-04-13 10:28:17', '2022-04-13 10:28:17', 16, 13),
(40, 23, 191, 6.500, 1, 6.500, '2022-04-13 10:28:17', '2022-04-13 10:28:17', 16, 13),
(41, 24, 165, 4.500, 1, 4.500, '2022-04-19 06:20:36', '2022-04-19 06:20:36', 16, 21),
(42, 24, 165, 4.500, 1, 4.500, '2022-04-19 06:20:36', '2022-04-19 06:20:36', 16, 22),
(43, 24, 165, 4.500, 1, 4.500, '2022-04-19 06:20:36', '2022-04-19 06:20:36', 16, 23),
(44, 24, 165, 4.500, 1, 4.500, '2022-04-19 06:20:36', '2022-04-19 06:20:36', 16, 27),
(45, 24, 165, 4.500, 1, 4.500, '2022-04-19 06:20:36', '2022-04-19 06:20:36', 16, 28),
(46, 24, 165, 4.500, 1, 4.500, '2022-04-19 06:20:36', '2022-04-19 06:20:36', 16, 30),
(47, 25, 165, 4.500, 1, 4.500, '2022-04-19 06:25:33', '2022-04-19 06:25:33', 16, 21),
(48, 25, 165, 4.500, 1, 4.500, '2022-04-19 06:25:33', '2022-04-19 06:25:33', 16, 22),
(49, 25, 165, 4.500, 1, 4.500, '2022-04-19 06:25:33', '2022-04-19 06:25:33', 16, 23),
(50, 25, 165, 4.500, 1, 4.500, '2022-04-19 06:25:33', '2022-04-19 06:25:33', 16, 27),
(51, 25, 165, 4.500, 1, 4.500, '2022-04-19 06:25:33', '2022-04-19 06:25:33', 16, 28),
(52, 25, 165, 4.500, 1, 4.500, '2022-04-19 06:25:33', '2022-04-19 06:25:33', 16, 30),
(53, 26, 165, 4.500, 1, 4.500, '2022-04-19 06:25:58', '2022-04-19 06:25:58', 16, 21),
(54, 26, 165, 4.500, 1, 4.500, '2022-04-19 06:25:58', '2022-04-19 06:25:58', 16, 22),
(55, 26, 165, 4.500, 1, 4.500, '2022-04-19 06:25:58', '2022-04-19 06:25:58', 16, 23),
(56, 26, 165, 4.500, 1, 4.500, '2022-04-19 06:25:58', '2022-04-19 06:25:58', 16, 27),
(57, 26, 165, 4.500, 1, 4.500, '2022-04-19 06:25:58', '2022-04-19 06:25:58', 16, 28),
(58, 26, 165, 4.500, 1, 4.500, '2022-04-19 06:25:58', '2022-04-19 06:25:58', 16, 30),
(59, 27, 165, 4.500, 1, 4.500, '2022-04-19 06:27:51', '2022-04-19 06:27:51', 16, 21),
(60, 27, 165, 4.500, 1, 4.500, '2022-04-19 06:27:51', '2022-04-19 06:27:51', 16, 22),
(61, 27, 165, 4.500, 1, 4.500, '2022-04-19 06:27:51', '2022-04-19 06:27:51', 16, 23),
(62, 27, 165, 4.500, 1, 4.500, '2022-04-19 06:27:51', '2022-04-19 06:27:51', 16, 27),
(63, 27, 165, 4.500, 1, 4.500, '2022-04-19 06:27:51', '2022-04-19 06:27:51', 16, 28),
(64, 27, 165, 4.500, 1, 4.500, '2022-04-19 06:27:51', '2022-04-19 06:27:51', 16, 30),
(65, 28, 165, 4.500, 1, 4.500, '2022-04-19 06:29:15', '2022-04-19 06:29:15', 16, 21),
(66, 28, 165, 4.500, 1, 4.500, '2022-04-19 06:29:15', '2022-04-19 06:29:15', 16, 22),
(67, 28, 165, 4.500, 1, 4.500, '2022-04-19 06:29:15', '2022-04-19 06:29:15', 16, 23),
(68, 28, 165, 4.500, 1, 4.500, '2022-04-19 06:29:15', '2022-04-19 06:29:15', 16, 27),
(69, 28, 165, 4.500, 1, 4.500, '2022-04-19 06:29:15', '2022-04-19 06:29:15', 16, 28),
(70, 28, 165, 4.500, 1, 4.500, '2022-04-19 06:29:15', '2022-04-19 06:29:15', 16, 30),
(71, 29, 219, 0.010, 1, 0.010, '2022-04-20 10:31:57', '2022-04-20 10:31:57', 14, 13),
(72, 30, 219, 0.010, 1, 0.010, '2022-04-20 10:32:52', '2022-04-20 10:32:52', 14, 13),
(73, 31, 219, 0.010, 1, 0.010, '2022-04-20 10:35:48', '2022-04-20 10:35:48', 14, 13),
(74, 32, 178, 6.500, 1, 6.500, '2022-04-26 09:37:09', '2022-04-26 09:37:09', 16, 19),
(75, 32, 167, 4.000, 1, 4.000, '2022-04-26 09:37:09', '2022-04-26 09:37:09', 16, 19),
(76, 32, 76, 4.500, 1, 4.500, '2022-04-26 09:37:09', '2022-04-26 09:37:09', 16, 18),
(77, 32, 79, 4.500, 1, 4.500, '2022-04-26 09:37:09', '2022-04-26 09:37:09', 16, 17),
(78, 32, 4, 3.500, 1, 3.500, '2022-04-26 09:37:09', '2022-04-26 09:37:09', 16, 20),
(79, 32, 142, 5.500, 1, 5.500, '2022-04-26 09:37:09', '2022-04-26 09:37:09', 16, 18),
(80, 33, 178, 6.500, 1, 6.500, '2022-04-26 09:42:34', '2022-04-26 09:42:34', 16, 19),
(81, 33, 167, 4.000, 1, 4.000, '2022-04-26 09:42:34', '2022-04-26 09:42:34', 16, 19),
(82, 33, 76, 4.500, 1, 4.500, '2022-04-26 09:42:34', '2022-04-26 09:42:34', 16, 18),
(83, 33, 79, 4.500, 1, 4.500, '2022-04-26 09:42:34', '2022-04-26 09:42:34', 16, 17),
(84, 33, 4, 3.500, 1, 3.500, '2022-04-26 09:42:34', '2022-04-26 09:42:34', 16, 20),
(85, 33, 142, 5.500, 1, 5.500, '2022-04-26 09:42:34', '2022-04-26 09:42:34', 16, 18),
(86, 34, 178, 6.500, 1, 6.500, '2022-04-26 09:44:33', '2022-04-26 09:44:33', 16, 19),
(87, 34, 167, 4.000, 1, 4.000, '2022-04-26 09:44:33', '2022-04-26 09:44:33', 16, 19),
(88, 34, 76, 4.500, 1, 4.500, '2022-04-26 09:44:33', '2022-04-26 09:44:33', 16, 18),
(89, 34, 79, 4.500, 1, 4.500, '2022-04-26 09:44:33', '2022-04-26 09:44:33', 16, 17),
(90, 34, 4, 3.500, 1, 3.500, '2022-04-26 09:44:33', '2022-04-26 09:44:33', 16, 20),
(91, 34, 142, 5.500, 1, 5.500, '2022-04-26 09:44:33', '2022-04-26 09:44:33', 16, 18),
(92, 35, 178, 6.500, 1, 6.500, '2022-04-26 09:45:14', '2022-04-26 09:45:14', 16, 19),
(93, 35, 167, 4.000, 1, 4.000, '2022-04-26 09:45:14', '2022-04-26 09:45:14', 16, 19),
(94, 35, 76, 4.500, 1, 4.500, '2022-04-26 09:45:14', '2022-04-26 09:45:14', 16, 18),
(95, 35, 79, 4.500, 1, 4.500, '2022-04-26 09:45:14', '2022-04-26 09:45:14', 16, 17),
(96, 35, 4, 3.500, 1, 3.500, '2022-04-26 09:45:14', '2022-04-26 09:45:14', 16, 20),
(97, 35, 142, 5.500, 1, 5.500, '2022-04-26 09:45:14', '2022-04-26 09:45:14', 16, 18),
(98, 36, 178, 6.500, 1, 6.500, '2022-04-26 09:50:54', '2022-04-26 09:50:54', 16, 19),
(99, 36, 167, 4.000, 1, 4.000, '2022-04-26 09:50:54', '2022-04-26 09:50:54', 16, 19),
(100, 36, 76, 4.500, 1, 4.500, '2022-04-26 09:50:54', '2022-04-26 09:50:54', 16, 18),
(101, 36, 79, 4.500, 1, 4.500, '2022-04-26 09:50:54', '2022-04-26 09:50:54', 16, 17),
(102, 36, 4, 3.500, 1, 3.500, '2022-04-26 09:50:54', '2022-04-26 09:50:54', 16, 20),
(103, 36, 142, 5.500, 1, 5.500, '2022-04-26 09:50:54', '2022-04-26 09:50:54', 16, 18),
(104, 37, 219, 0.010, 2, 0.020, '2022-04-26 22:52:49', '2022-04-26 22:52:49', 5, 13),
(105, 38, 219, 0.010, 1, 0.010, '2022-04-26 22:55:20', '2022-04-26 22:55:20', 4, 14),
(106, 39, 14, 6.000, 1, 6.000, '2022-04-29 20:46:12', '2022-04-29 20:46:12', 16, 23),
(107, 39, 7, 4.000, 1, 4.000, '2022-04-29 20:46:12', '2022-04-29 20:46:12', 16, 23),
(108, 40, 131, 4.500, 1, 4.500, '2022-04-30 17:48:08', '2022-04-30 17:48:08', 16, 26),
(109, 40, 131, 4.500, 1, 4.500, '2022-04-30 17:48:08', '2022-04-30 17:48:08', 16, 23),
(110, 41, 134, 4.500, 1, 4.500, '2022-04-30 17:54:40', '2022-04-30 17:54:40', 16, 23),
(111, 41, 134, 4.500, 1, 4.500, '2022-04-30 17:54:40', '2022-04-30 17:54:40', 16, 26),
(112, 42, 157, 4.500, 1, 4.500, '2022-04-30 18:08:58', '2022-04-30 18:08:58', 16, 25),
(113, 42, 157, 4.500, 1, 4.500, '2022-04-30 18:08:58', '2022-04-30 18:08:58', 16, 24),
(114, 43, 160, 4.500, 1, 4.500, '2022-04-30 18:42:59', '2022-04-30 18:42:59', 16, 26),
(115, 43, 160, 4.500, 1, 4.500, '2022-04-30 18:42:59', '2022-04-30 18:42:59', 16, 24),
(116, 44, 163, 4.500, 1, 4.500, '2022-04-30 18:52:41', '2022-04-30 18:52:41', 16, 25),
(117, 44, 163, 4.500, 1, 4.500, '2022-04-30 18:52:41', '2022-04-30 18:52:41', 16, 23),
(118, 45, 61, 5.500, 1, 5.500, '2022-05-01 06:58:55', '2022-05-01 06:58:55', 16, 31),
(119, 45, 172, 6.500, 1, 6.500, '2022-05-01 06:58:55', '2022-05-01 06:58:55', 16, 19),
(120, 46, 131, 4.500, 1, 4.500, '2022-05-01 11:07:19', '2022-05-01 11:07:19', 16, 25),
(121, 46, 131, 4.500, 1, 4.500, '2022-05-01 11:07:19', '2022-05-01 11:07:19', 16, 26),
(122, 47, 161, 4.500, 1, 4.500, '2022-05-01 11:10:34', '2022-05-01 11:10:34', 16, 25),
(123, 47, 161, 4.500, 1, 4.500, '2022-05-01 11:10:34', '2022-05-01 11:10:34', 16, 23),
(124, 48, 161, 4.500, 1, 4.500, '2022-05-01 11:10:47', '2022-05-01 11:10:47', 16, 25),
(125, 48, 161, 4.500, 1, 4.500, '2022-05-01 11:10:47', '2022-05-01 11:10:47', 16, 23),
(126, 49, 160, 4.500, 1, 4.500, '2022-05-01 11:19:55', '2022-05-01 11:19:55', 16, 25),
(127, 49, 160, 4.500, 1, 4.500, '2022-05-01 11:19:55', '2022-05-01 11:19:55', 16, 23),
(128, 50, 160, 4.500, 1, 4.500, '2022-05-01 11:20:00', '2022-05-01 11:20:00', 16, 25),
(129, 50, 160, 4.500, 1, 4.500, '2022-05-01 11:20:00', '2022-05-01 11:20:00', 16, 23),
(130, 51, 157, 4.500, 1, 4.500, '2022-05-01 11:23:01', '2022-05-01 11:23:01', 16, 25),
(131, 51, 157, 4.500, 1, 4.500, '2022-05-01 11:23:01', '2022-05-01 11:23:01', 16, 23),
(132, 52, 27, 4.500, 1, 4.500, '2022-05-01 11:30:50', '2022-05-01 11:30:50', 16, 23),
(133, 52, 161, 4.500, 1, 4.500, '2022-05-01 11:30:50', '2022-05-01 11:30:50', 16, 26),
(134, 53, 132, 4.500, 1, 4.500, '2022-05-01 22:37:48', '2022-05-01 22:37:48', 16, 30),
(135, 53, 135, 4.500, 1, 4.500, '2022-05-01 22:37:48', '2022-05-01 22:37:48', 16, 30),
(136, 54, 165, 4.500, 1, 4.500, '2022-05-02 12:11:34', '2022-05-02 12:11:34', 16, 25),
(137, 54, 163, 4.500, 1, 4.500, '2022-05-02 12:11:34', '2022-05-02 12:11:34', 16, 25),
(138, 55, 134, 4.500, 1, 4.500, '2022-05-02 12:15:19', '2022-05-02 12:15:19', 16, 27),
(139, 55, 129, 4.500, 1, 4.500, '2022-05-02 12:15:19', '2022-05-02 12:15:19', 16, 26),
(140, 56, 17, 4.000, 1, 4.000, '2022-05-02 12:18:29', '2022-05-02 12:18:29', 16, 23),
(141, 56, 6, 4.000, 1, 4.000, '2022-05-02 12:18:29', '2022-05-02 12:18:29', 16, 23),
(142, 57, 3, 4.500, 1, 4.500, '2022-05-02 12:27:13', '2022-05-02 12:27:13', 16, 25),
(143, 57, 5, 3.500, 1, 3.500, '2022-05-02 12:27:13', '2022-05-02 12:27:13', 16, 23),
(144, 58, 165, 4.500, 1, 4.500, '2022-05-02 12:32:05', '2022-05-02 12:32:05', 16, 29),
(145, 58, 157, 4.500, 1, 4.500, '2022-05-02 12:32:05', '2022-05-02 12:32:05', 16, 28),
(146, 59, 160, 4.500, 1, 4.500, '2022-05-02 15:08:37', '2022-05-02 15:08:37', 16, 28),
(147, 59, 160, 4.500, 1, 4.500, '2022-05-02 15:08:37', '2022-05-02 15:08:37', 16, 26),
(148, 60, 157, 4.500, 1, 4.500, '2022-05-02 15:12:24', '2022-05-02 15:12:24', 16, 27),
(149, 60, 157, 4.500, 1, 4.500, '2022-05-02 15:12:24', '2022-05-02 15:12:24', 16, 29),
(150, 61, 11, 4.000, 1, 4.000, '2022-05-02 15:34:19', '2022-05-02 15:34:19', 16, 21),
(151, 61, 13, 4.000, 1, 4.000, '2022-05-02 15:34:19', '2022-05-02 15:34:19', 16, 22),
(152, 62, 28, 4.000, 1, 4.000, '2022-05-02 15:36:06', '2022-05-02 15:36:06', 16, 20),
(153, 62, 31, 4.000, 1, 4.000, '2022-05-02 15:36:06', '2022-05-02 15:36:06', 16, 19),
(154, 63, 157, 4.500, 1, 4.500, '2022-05-03 05:40:27', '2022-05-03 05:40:27', 16, 30),
(155, 63, 164, 4.500, 1, 4.500, '2022-05-03 05:40:27', '2022-05-03 05:40:27', 16, 26),
(156, 64, 129, 4.500, 1, 4.500, '2022-05-03 20:01:11', '2022-05-03 20:01:11', 16, 27),
(157, 64, 129, 4.500, 1, 4.500, '2022-05-03 20:01:11', '2022-05-03 20:01:11', 16, 28),
(158, 65, 25, 5.500, 1, 5.500, '2022-05-08 08:43:52', '2022-05-08 08:43:52', 16, 14),
(159, 65, 25, 5.500, 1, 5.500, '2022-05-08 08:43:52', '2022-05-08 08:43:52', 16, 18),
(160, 66, 25, 5.500, 1, 5.500, '2022-05-08 08:54:49', '2022-05-08 08:54:49', 16, 14),
(161, 66, 25, 5.500, 1, 5.500, '2022-05-08 08:54:49', '2022-05-08 08:54:49', 16, 18),
(167, 71, 16, 6.000, 1, 6.000, '2022-05-14 16:40:25', '2022-05-14 16:40:25', 16, 23),
(164, 68, 23, 7.000, 1, 7.000, '2022-05-08 09:16:49', '2022-05-08 09:16:49', 16, 17),
(168, 72, 9, 5.500, 1, 5.500, '2022-05-14 16:41:30', '2022-05-14 16:41:30', 16, 21),
(169, 73, 183, 6.500, 1, 6.500, '2022-05-24 12:26:58', '2022-05-24 12:26:58', 16, 13),
(170, 73, 81, 5.500, 1, 5.500, '2022-05-24 12:26:58', '2022-05-24 12:26:58', 16, 13);

-- --------------------------------------------------------

--
-- Table structure for table `our_followers`
--

CREATE TABLE `our_followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_followers`
--

INSERT INTO `our_followers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, '67f784c8950d@hubmails.us', '2022-02-17 15:04:00', '2022-02-17 15:04:00'),
(2, 'mariamsharif973@gmail.com', '2022-05-13 23:46:05', '2022-05-13 23:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `operation_order_id` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) NOT NULL,
  `result_indicator` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name_ar`, `name_en`, `display`, `created_at`, `updated_at`) VALUES
(1, 'الدفع عند الاستلام', 'CASH ON DELIVERY', 0, '2021-06-07 10:22:08', '2022-04-26 22:55:24'),
(2, 'بطاقة صراف الي', 'Debit Card', 1, '2021-06-07 10:22:08', '2022-01-31 10:17:52'),
(3, 'بطاقة ائتمانية', 'Credit Card', 1, '2021-06-07 10:22:08', '2022-01-31 10:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(8,3) DEFAULT NULL,
  `discount_from` date DEFAULT NULL,
  `discount_to` date DEFAULT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `deliverable` tinyint(4) NOT NULL DEFAULT 1,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `weight_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name_ar`, `name_en`, `desc_ar`, `desc_en`, `quantity`, `price`, `code`, `cost`, `discount`, `discount_from`, `discount_to`, `display`, `deliverable`, `featured`, `weight_id`, `created_at`, `updated_at`) VALUES
(3, 18, 'AB3 - بدلة أولاد مكونة من قطعتين', 'AB3 - Boys 2 piece suit', 'بدلة أولاد مكونة من قطعتين', 'Boys 2 piece suit', 0, 4.500, 'AB3', '4.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 22:33:47', '2022-05-02 12:27:13'),
(5, 22, 'AB4 - بيجامة بيكاتشو', 'AB4 - Pikachu Pajamas', 'بيجامة بيكاتشو', 'Pikachu Pajamas', 0, 3.500, 'AB4', '3.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 22:47:17', '2022-05-02 12:27:13'),
(4, 22, 'AB4 - بيجامة الزرافة', 'AB4 - Giraffe Pajamas', 'بيجامة الزرافة', 'Giraffe Pajamas', 0, 3.500, 'AB4', '3.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 22:44:34', '2022-04-26 19:53:00'),
(6, 22, 'AB6 - بيجامة القطن المناسبة للجنسين', 'AB6 - Unisex cotton pajamas', 'بيجامة القطن المناسبة للجنسين', 'Unisex cotton pajamas', 0, 4.000, 'AB6', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 22:52:48', '2022-05-02 12:18:29'),
(7, 22, 'AB6 - بيجامة القطن المناسبة للجنسين 1', '1 AB6 - Unisex cotton pajamas', 'بيجامة القطن المناسبة للجنسين', 'Unisex cotton pajamas', 0, 4.000, 'AB6', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 22:56:54', '2022-04-29 20:46:12'),
(8, 23, 'AB14 - فستان صيفي مع شريطة في الظهر', 'AB14 - Summer dress with a ribbon in the back', 'فستان صيفي مع شريطة في الظهر', 'Summer dress with a ribbon in the back', 1, 3.000, 'AB14', '3.000', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 23:05:18', '2022-03-14 14:14:29'),
(9, 18, 'AB17 - بدلة سمسم للأولاد', 'AB17 - SESAME suit for boys', 'بدلة سمسم للأولاد', 'SESAME suit for boys', 0, 5.500, 'AB17', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 23:12:14', '2022-05-14 16:41:30'),
(10, 22, 'AB20 - بيجامة القطن 1', 'AB20 - Cotton Pajamas 1', 'AB20 - بيجامة القطن 1', 'Cotton Pajamas 1', 2, 4.000, 'AB20', '4.000', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 23:18:33', '2022-03-04 23:18:33'),
(11, 22, 'AB20 - بيجامة القطن 2', 'AB20 - Cotton Pajamas 2', 'بيجامة القطن', 'Cotton Pajamas', 0, 4.000, 'AB20', '4.000', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 23:21:40', '2022-05-02 15:34:19'),
(12, 22, 'AB20 - بيجامة القطن 3', 'AB20 - Cotton Pajamas 3', 'بيجامة القطن', 'Cotton Pajamas', 1, 4.000, 'AB20', '4.000', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 23:23:30', '2022-03-04 23:23:30'),
(13, 22, 'AB20 - بيجامة القطن 4', 'AB20 - Cotton Pajamas 4', 'بيجامة القطن', 'Cotton Pajamas', 0, 4.000, 'AB20', '4.000', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-04 23:24:59', '2022-05-02 15:34:19'),
(14, 19, 'AB21 - بدلة زهرة الدانتيل', 'AB21- Lace Flower Suit', 'بدلة زهرة الدانتيل', 'Lace Flower Suit', 0, 6.000, 'AB21', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 23:35:18', '2022-04-29 20:46:12'),
(15, 21, 'AB22 - طقم رومبرات قصيرة مكون من 3 قطع', 'AB22 - 3-Piece Short Romper Set', 'طقم رومبرات قصيرة مكون من 3 قطع', '3-piece short romper set', 2, 7.000, 'AB22', '7.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 23:38:59', '2022-03-04 23:38:59'),
(16, 19, 'AB23 - بدلة عين اللؤلؤ الصيفية', 'AB23 - Pearl Eye Summer Suit', 'بدلة عين اللؤلؤ الصيفية', 'Pearl Eye Summer Suit', 0, 6.000, 'AB23', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 23:42:32', '2022-05-29 08:54:48'),
(17, 22, 'AB25 - بيجامة القطن 1', '1 AB25 - Cotton Pajamas', 'بيجامة القطن', 'Cotton Pajamas', 1, 4.000, 'AB25', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 23:46:33', '2022-05-02 12:18:29'),
(18, 22, 'AB25 - بيجامة القطن 2', 'AB25 - Cotton Pajamas 2', 'بيجامة القطن', 'Cotton Pajamas', 2, 4.000, 'AB25', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 23:48:10', '2022-03-04 23:48:10'),
(19, 22, 'AB25 - بيجامة القطن 3', 'AB25 - Cotton Pajamas 3', 'بيجامة القطن', 'Cotton Pajamas', 7, 4.000, 'AB25', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-04 23:51:00', '2022-03-04 23:51:00'),
(20, 25, 'AB51 - رومبر شتوي بتصميم الدب 1', '1 AB51 - Bear Design Winter Romper', 'رومبر شتوي بتصميم الدب', 'Bear Design Winter Romper', 0, 0.010, 'AB51', '0.01', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 00:54:46', '2022-03-13 15:56:29'),
(21, 25, 'AB51 - رومبر شتوي بتصميم الدب 2', '2 AB51 - Bear Design Winter Romper', 'رومبر شتوي بتصميم الدب', 'Bear Design Winter Romper', 2, 7.500, 'AB51', '7.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 00:57:13', '2022-03-05 00:57:13'),
(22, 20, 'AB51 - معطف بآذان الأرنب 1', '1 AB51 - Sweet Rabbit Ears Hooded Coat', 'معطف بآذان الأرنب', 'Sweet Rabbit Ears Hooded Coat', 2, 7.000, 'AB51', '7.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 01:02:48', '2022-03-05 01:02:48'),
(23, 20, 'AB51 - معطف بآذان الأرنب 2', '2 AB51 - Sweet Rabbit Ears Hooded Coat', 'معطف بآذان الأرنب', 'Sweet Rabbit Ears Hooded Coat', 0, 7.000, 'AB51', '7.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 01:04:27', '2022-05-08 09:31:47'),
(24, 16, 'AB58 - رومبر البنات مع حلقة للرأس', 'AB58 - Baby Girls Romper With Headband 1', 'رومبر البنات مع حلقة للرأس', 'Baby Girls Romper With Headband', 1, 5.500, 'AB58', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 01:11:24', '2022-03-05 01:11:24'),
(25, 16, 'AB58 - رومبر البنات مع حلقة للرأس 2', 'AB58 - Baby Girls Romper With Headband 2', 'رومبر البنات مع حلقة للرأس', 'Baby Girls Romper With Headband', -1, 5.500, 'AB58', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 01:15:39', '2022-05-08 09:09:17'),
(26, 22, 'AB59- بيجامة القطن المضية في الظلام 1', '1 AB59 - Glow in The Dark Cotton Pijama', 'يجامة القطن المضية في الظلام', 'Glow in The Dark Cotton Pijama', 1, 4.500, 'AB59', '4.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 22:42:38', '2022-03-16 12:43:47'),
(27, 22, 'AB59- بيجامة القطن المضية في الظلام 2', 'AB59 - Glow in The Dark Cotton Pijama 2', 'يجامة القطن المضية في الظلام', 'Glow in The Dark Cotton Pijama', 0, 4.500, 'AB59', '4.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 22:48:04', '2022-05-01 11:30:50'),
(28, 16, 'AB60 - رومبر', 'AB60 - Romper', 'رومبر', 'Romper', 0, 4.000, 'AB60', '4.000', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 22:55:38', '2022-05-02 15:36:06'),
(29, 25, 'AB62 - رومبار باتمان', 'AB62 - Batman Romper', 'رومبار باتمان', 'Batman Romper', 5, 6.500, 'AB62', '6.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 23:02:51', '2022-03-05 23:02:51'),
(30, 18, 'AB62 - بدلة باتمان', 'AB62 - Batman Set', 'بدلة باتمان', 'Batman Set', 3, 6.500, 'AB62', '6.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 23:05:53', '2022-03-05 23:05:53'),
(31, 16, 'AB64 - رومبر البطة', 'AB64 -Duck Romper', 'رومبر البطة', 'Duck Romper', 1, 4.000, 'AB64', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 23:11:14', '2022-05-02 15:36:06'),
(32, 23, 'AB65 - فستان الكرز', 'AB65 - Cherry Dress', 'فستان الكرز', 'Cherry Dress', 1, 3.000, 'AB65', '3.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 23:15:15', '2022-03-05 23:15:15'),
(33, 23, 'AB65 - فستان دوار الشمس', 'AB65 - Sunflower Dress', 'فستان دوار الشمس', 'Sunflower Dress', 1, 3.000, 'AB65', '3.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 23:17:47', '2022-03-05 23:17:47'),
(34, 20, 'AB67 - معطف الأذن الرائع 1', 'AB67 - Adorable Ear Coat 1', 'معطف الأذن الرائع', 'Adorable Ear Coat', 2, 7.500, 'AB67', '7.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 23:22:28', '2022-03-05 23:22:28'),
(35, 20, 'AB67 - معطف الأذن الرائع 2', 'AB67 - Adorable Ear Coat 2', 'معطف الأذن الرائع', 'Adorable Ear Coat', 1, 7.500, 'AB67', '7.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 23:24:59', '2022-03-05 23:24:59'),
(36, 16, 'AB68 - رومبر الأخ الأصغر', 'AB68 - Little Bro Romper', 'رومبر الأخ الأصغر', 'Little Bro Romper', -2, 4.000, 'AB68', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 23:28:58', '2022-04-12 02:06:32'),
(37, 21, 'AB69 - رومبر القمر والنجوم', 'AB69 - Moon & Stars Romper', 'رومبر القمر والنجوم', 'Moon & Stars Romper', 8, 3.500, 'AB69', '3.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 23:33:31', '2022-03-13 23:23:08'),
(38, 21, 'AB69 - رومبر الديناصورات 1', 'AB69 - Dinosaurs Romper 1', 'رومبر الديناصورات', 'Dinosaurs Romper', 3, 3.500, 'AB69', '3.500', NULL, NULL, NULL, 1, 1, 1, 3, '2022-03-05 23:36:53', '2022-03-05 23:36:53'),
(39, 21, 'AB69 - رومبر الديناصورات 2', 'AB69 - Dinosaurs Romper 2', 'رومبر الديناصورات', 'Dinosaurs Romper', 1, 3.500, 'AB69', '3.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 23:39:00', '2022-03-05 23:39:00'),
(40, 21, 'AB72 - رومبر الديناصورات', 'AB72 - Dinosaurs Romper', 'رومبر الديناصورات', 'Dinosaurs Romper', 1, 3.500, 'AB72', '3.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-05 23:42:35', '2022-04-30 03:21:15'),
(41, 21, 'AB72 - رومبر السيارة', 'AB72 - Car Romper', 'رومبر السيارة', 'Car Romper', 1, 3.500, 'AB72', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 23:44:46', '2022-04-30 03:20:30'),
(42, 16, 'AB74 - رومبر التفاحات', 'AB74 - Appls Romper', 'رومبر التفاحات', 'Appls Romper', 1, 4.000, 'AB74', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 23:50:29', '2022-03-05 23:50:29'),
(43, 18, 'AB76 - طقم الديناصور الطيف المكون من قطعتين I', 'AB76 - Two Piece Cute Dinosaur Sets I', 'طقم الديناصور الطيف المكون من قطعتين', 'Two Piece Cute Dinosaur Sets', 2, 5.500, 'AB76', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-05 23:59:52', '2022-03-05 23:59:52'),
(44, 18, 'AB76 - طقم الديناصور الطيف المكون من قطعتين II', 'AB76 - Two Piece Cute Dinosaur Sets II', 'طقم الديناصور الطيف المكون من قطعتين', 'Two Piece Cute Dinosaur Sets', 2, 5.500, 'AB76', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-06 00:02:00', '2022-03-06 00:02:00'),
(68, 19, 'AB102 - بدلة تصميم ذات طبقات صلبة مكشكشة للفتيات الصغيرات I', 'AB102 - Baby Girl Ruffled Solid Layered Design Suit I', 'بدلة تصميم ذات طبقات صلبة مكشكشة للفتيات الصغيرات I', 'Baby Girl Ruffled Solid Layered Design Suit I', 2, 5.500, 'AB102', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:57:11', '2022-03-11 10:57:11'),
(46, 19, 'AB79 - بدلة البنات المكونة من قطعتين', 'AB79 - 2 Piece Baby Girl Set', 'بدلة البنات المكونة من قطعتين', '2 Piece Baby Girl Set', 1, 7.000, 'AB79', '7.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 08:54:01', '2022-03-11 08:54:01'),
(47, 16, 'AB79 - رومبر القمر', 'AB79 - Baby Moon Romper', 'رومبر القمر', 'Baby Moon Romper', 1, 5.500, 'AB79', '5.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-11 08:58:44', '2022-03-11 08:58:44'),
(48, 16, 'AB79 - رومبر الغيمة', 'AB79 - Baby Cloud Romper', 'رومبر الغيمة', 'Baby Cloud Romper', 1, 5.500, 'AB79', '5.500', NULL, NULL, NULL, 1, 1, 0, 2, '2022-03-11 09:00:43', '2022-03-11 09:00:43'),
(49, 18, 'AB84 - بدلة الطفل المخططة مع رسومات الريش المكونة من قطعتين', 'AB84 - Two Pieces Baby Feathers Striped Set', 'بدلة الطفل المخططة مع رسومات الريش المكونة من قطعتين', 'Two Pieces Baby Feathers Striped Set', 2, 5.500, 'AB84', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 09:05:58', '2022-03-11 09:05:58'),
(50, 19, 'AB85 - طقم حديثي الولادة المكون من خمس قطع', 'AB85 - Five-piece newborn set', 'طقم حديثي الولادة المكون من خمس قطع', 'Five-piece newborn set', 2, 5.000, 'AB85', '5.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 09:10:33', '2022-03-11 09:10:33'),
(51, 16, 'AB90 - رومبر الدب', 'AB90 - Bears Romper', 'رومبر الدب', 'Bears Romper', 1, 3.000, 'AB90', '3.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 09:13:29', '2022-03-11 09:15:08'),
(52, 23, 'AB91 - فستان الطفلة I', 'AB91 - Baby Girl Dress I', 'فستان الطفلة I', 'Baby Girl Dress I', 1, 5.500, 'AB91', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 09:19:13', '2022-03-11 09:19:13'),
(53, 23, 'AB91 - فستان الطفلة II', 'AB91 - Baby Girl Dress II', 'فستان الطفلة II', 'Baby Girl Dress II', 3, 5.500, 'AB91', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 09:21:23', '2022-03-11 09:21:23'),
(54, 23, 'AB91 - فستان الطفلة III', 'AB91 - Baby Girl Dress III', 'فستان الطفلة III', 'Baby Girl Dress III', 1, 5.500, 'AB91', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 09:46:39', '2022-03-11 09:46:39'),
(55, 21, 'AB94 - رومبر الديناصورات', 'AB94 - Dinosaurs Romper', 'رومبر الديناصورات', 'Dinosaurs Romper', 1, 3.500, 'AB94', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 09:50:38', '2022-03-11 09:50:38'),
(56, 23, 'AB94 - فستان الطفلة الحلوة I', 'AB94 - Sweet Baby Girl Dress I', 'فستان الطفلة الحلوة I', 'Sweet Baby Girl Dress I', 4, 5.500, 'AB94', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:05:32', '2022-03-11 10:05:32'),
(57, 23, 'AB94 - فستان الطفلة الحلوة II', 'AB94 - Sweet Baby Girl Dress II', 'فستان الطفلة الحلوة II', 'Sweet Baby Girl Dress II', 2, 5.500, 'AB94', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:07:00', '2022-03-11 10:07:00'),
(58, 16, 'AB94 - رومبر طفلة باريس I', 'AB94 - Baby Girl Paris Romper I', 'رومبر طفلة باريس I', 'Baby Girl Paris Romper I', 4, 4.000, 'AB94', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:11:08', '2022-03-11 10:11:08'),
(59, 16, 'AB94 - رومبر طفلة باريس II', 'AB94 - Baby Girl Paris Romper II', 'رومبر طفلة باريس II', 'Baby Girl Paris Romper II', 1, 4.000, 'AB94', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:12:38', '2022-03-11 10:12:38'),
(60, 23, 'AB96 - فستان الطفلة الأحمر', 'AB96 - Baby Girl Red Dress', 'فستان الطفلة الأحمر', 'Baby Girl Red Dress', 5, 5.500, 'AB96', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:17:50', '2022-03-11 10:17:50'),
(61, 23, 'AB96 - فستان الطفلة الأخضر', 'AB96 - Baby Girl Green Dress', 'فستان الطفلة الأخضر', 'Baby Girl Green Dress', 2, 5.500, 'AB96', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:19:20', '2022-05-01 06:58:55'),
(62, 16, 'AB99 - رومبر بعبارة أنا متعب للغاية I', 'AB99 - I\'m So Tired Letter Print Romper I', 'رومبر بعبارة أنا متعب للغاية I', 'I\'m So Tired Letter Print Romper I', 2, 4.000, 'AB99', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:23:48', '2022-03-11 10:23:48'),
(63, 16, 'AB99 - رومبر بعبارة أنا متعب للغاية II', 'AB99 - I\'m So Tired Letter Print Romper II', 'رومبر بعبارة أنا متعب للغاية II', 'I\'m So Tired Letter Print Romper II', 1, 4.000, 'AB99', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:27:17', '2022-03-11 10:27:17'),
(64, 21, 'AB100 - رومبر الفيل', 'AB100 - Elephant Romper', 'رومبر الفيل', 'Elephant Romper', 2, 3.500, 'AB100', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:30:13', '2022-03-11 10:31:33'),
(65, 21, 'AB101 - رومبر أنا أحب أمي', 'AB101 - I Love Mummy Romper', 'رومبر أنا أحب أمي', 'I Love Mummy Romper', 1, 4.000, 'AB101', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:36:13', '2022-03-11 10:36:13'),
(66, 21, 'AB101 - رومبر أنا أحب أبي', 'AB101 - I Love Daddy Romper', 'رومبر أنا أحب أبي', 'I Love Daddy Romper', 3, 4.000, 'AB101', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:37:54', '2022-03-11 10:37:54'),
(67, 21, 'AB101 - رومبر الغيمة', 'AB101 - Cloud Romper', 'رومبر الغيمة', 'Cloud Romper', 1, 3.500, 'AB101', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:46:03', '2022-03-11 10:46:03'),
(69, 19, 'AB102 - بدلة تصميم ذات طبقات صلبة مكشكشة للفتيات الصغيرات II', 'AB102 - Baby Girl Ruffled Solid Layered Design Suit II', 'بدلة تصميم ذات طبقات صلبة مكشكشة للفتيات الصغيرات II', 'Baby Girl Ruffled Solid Layered Design Suit II', 2, 5.500, 'AB102', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 10:58:27', '2022-03-11 10:58:27'),
(70, 23, 'AB102 - فستان بفيونكة عباد الشمس', 'AB102 - Sunflowers Bow-knot Dress', 'فستان بفيونكة عباد الشمس', 'Sunflowers Bow-knot Dress', 2, 5.500, 'AB102', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:02:34', '2022-03-11 11:02:34'),
(71, 23, 'AB102 -  فستان زهري بتطريز لطيف', 'AB102 - Cute Embroidered Floral Dress', 'فستان زهري بتطريز لطيف', 'Cute Embroidered Floral Dress', 1, 5.500, 'AB102', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:06:49', '2022-03-11 11:06:49'),
(72, 23, 'AB104 - فستان مكشكش حلو', 'AB104 - Sweet Ruffled Dress', 'فستان مكشكش حلو', 'Sweet Ruffled Dress', 4, 5.500, 'AB104', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:11:27', '2022-03-11 11:11:27'),
(73, 23, 'AB105 - فستان زهري بتطريز لطيف', 'AB105 - Cute Embroidered Floral Dress', 'فستان زهري بتطريز لطيف', 'Cute Embroidered Floral Dress', 5, 6.500, 'AB105', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:15:31', '2022-03-11 11:15:31'),
(74, 17, 'AB106 -  منشفة استحمام للاطفال', 'AB106 - Baby Bath Towel', 'منشفة استحمام للاطفال', 'Baby Bath Towel', 0, 4.500, 'AB106', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:20:49', '2022-04-21 02:14:29'),
(75, 21, 'AB106 - رومبر البطة', 'AB106 - Duck Romper', 'رومبر البطة', 'Duck Romper', 4, 3.500, 'AB106', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:24:36', '2022-03-11 11:24:36'),
(76, 19, 'AB106 - جمبسوت بحزام مكشكش I', 'AB106 - Ruffled Strap Jumpsuit I', 'جمبسوت بحزام مكشكش I', 'Ruffled Strap Jumpsuit I', 3, 4.500, 'AB106', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:29:04', '2022-04-27 08:21:04'),
(77, 19, 'AB106 - جمبسوت بحزام مكشكش II', 'AB106 - Ruffled Strap Jumpsuit II', 'جمبسوت بحزام مكشكش II', 'Ruffled Strap Jumpsuit II', 5, 4.500, 'AB106', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:31:25', '2022-03-11 11:31:25'),
(78, 19, 'AB106 - جمبسوت بحزام مكشكش III', 'AB106 - Ruffled Strap Jumpsuit III', 'جمبسوت بحزام مكشكش III', 'Ruffled Strap Jumpsuit III', 2, 4.500, 'AB106', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:33:11', '2022-03-11 11:33:11'),
(79, 19, 'AB106 - جمبسوت بحزام مكشكش IIII', 'AB106 - Ruffled Strap Jumpsuit IIII', 'جمبسوت بحزام مكشكش IIII', 'Ruffled Strap Jumpsuit IIII', -4, 4.500, 'AB106', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:34:53', '2022-04-26 09:50:54'),
(80, 23, 'AB107 - فستان الطفلة مع ربطة رأس', 'AB107 -  Baby Girl Dress With Headband Set', 'فستان الطفلة مع ربطة رأس', 'Baby Girl Dress With Headband Set', 3, 5.500, 'AB107', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:48:52', '2022-03-11 11:48:52'),
(81, 23, 'AB108 - فستان الطفلة الحلو I', 'AB108 - Sweet Girl Dress I', 'فستان الطفلة الحلو I', 'Sweet Girl Dress I', 1, 5.500, 'AB108', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:52:07', '2022-05-24 12:26:58'),
(82, 23, 'AB108 - فستان الطفلة الحلو II', 'AB108 - Sweet Girl Dress II', 'فستان الطفلة الحلو II', 'Sweet Girl Dress II', 4, 5.500, 'AB108', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:53:50', '2022-03-11 11:53:50'),
(83, 23, 'AB108 - فستان الطفلة الحلو III', 'AB108 - Sweet Girl Dress III', 'فستان الطفلة الحلو III', 'Sweet Girl Dress III', 1, 5.500, 'AB108', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:56:08', '2022-03-11 11:56:08'),
(84, 19, 'AB108 - طقم رومبير بأكمام طويلة للفتيات الصغيرات مع ربطة للرأس', 'AB108 - Baby Girl Long-Sleeve Romper with Headband Set', 'طقم رومبير بأكمام طويلة للفتيات الصغيرات مع ربطة للرأس', 'Baby Girl Long-Sleeve Romper with Headband Set', 1, 5.500, 'AB108', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 11:58:44', '2022-03-11 11:58:44'),
(85, 23, 'AB109 - فستان الطفلة الوردي', 'AB109 - Baby Girl Pink Dress', 'فستان الطفلة الوردي', 'Baby Girl Pink Dress', 6, 3.000, 'AB109', '3.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:02:49', '2022-03-11 12:02:49'),
(86, 23, 'AB109 - فستان الطفلة التيفاني', 'AB109 - Baby Girl Tiffany Dress', 'فستان الطفلة التيفاني', 'Baby Girl Tiffany Dress', 1, 3.000, 'AB109', '3.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:05:37', '2022-03-11 12:05:37'),
(87, 23, 'AB109 -  فستان الفراشات', 'AB109 - Butterflies Dress', 'فستان الفراشات', 'Butterflies Dress', 0, 5.500, 'AB109', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:07:56', '2022-03-25 21:34:53'),
(88, 23, 'AB109 - فستان عباد الشمس', 'AB109 - Sunflower Dress', 'فستان عباد الشمس', 'Sunflower Dress', 1, 4.500, 'AB109', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:09:42', '2022-03-11 12:09:42'),
(89, 23, 'AB110 - فستان الطفلة I', 'AB110 - Girl Dress I', 'فستان الطفلة I', 'Girl Dress I', 1, 5.500, 'AB110', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:13:32', '2022-04-22 14:24:27'),
(90, 23, 'AB110 - فستان الطفلة II', 'AB110 - Girl Dress II', 'فستان الطفلة II', 'Girl Dress II', 1, 5.500, 'AB110', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:15:02', '2022-03-11 12:15:02'),
(91, 23, 'AB110 - فستان الطفلة III', 'AB110 - Girl Dress III', 'فستان الطفلة III', 'Girl Dress III', 4, 5.500, 'AB110', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:16:36', '2022-03-11 12:16:36'),
(92, 23, 'AB110 - فستان الطفلة IIII', 'AB110 - Girl Dress IIII', 'فستان الطفلة IIII', 'Girl Dress IIII', 3, 5.500, 'AB110', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:17:57', '2022-03-11 12:17:57'),
(93, 16, 'AB111 - رومبير الزرافة والفيل', 'AB111 - Giraffe & Elephant Romper', 'رومبير الزرافة والفيل', 'Giraffe & Elephant Romper', 2, 3.000, 'AB111', '3.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:22:07', '2022-03-11 12:22:07'),
(94, 21, 'AB112 - مجموعة رومبير الأطفال I', 'AB112 - Baby Romper Collection I', 'مجموعة رومبير الأطفال I', 'Baby Romper Collection I', 1, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:25:59', '2022-03-11 12:25:59'),
(95, 21, 'AB112 - مجموعة رومبير الأطفال II', 'AB112 - Baby Romper Collection II', 'مجموعة رومبير الأطفال II', 'Baby Romper Collection II', 8, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:27:48', '2022-03-23 11:34:23'),
(96, 21, 'AB112 - مجموعة رومبير الأطفال III', 'AB112 - Baby Romper Collection III', 'مجموعة رومبير الأطفال III', 'Baby Romper Collection III', 2, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:29:33', '2022-03-11 12:29:33'),
(97, 21, 'AB112 - مجموعة رومبير الأطفال IIII', 'AB112 - Baby Romper Collection IIII', 'مجموعة رومبير الأطفال IIII', 'Baby Romper Collection IIII', 12, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:31:57', '2022-03-23 11:34:23'),
(98, 21, 'AB112 - مجموعة رومبير الأطفال IIIII', 'AB112 - Baby Romper Collection IIIII', 'مجموعة رومبير الأطفال IIIII', 'Baby Romper Collection IIIII', 6, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:33:40', '2022-03-23 11:34:23'),
(99, 21, 'AB112 - مجموعة رومبير الأطفال IIIIII', 'AB112 - Baby Romper Collection IIIIII', 'مجموعة رومبير الأطفال IIIIII', 'Baby Romper Collection IIIIII', 7, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:35:42', '2022-04-30 03:29:55'),
(100, 21, 'AB112 - مجموعة رومبير الأطفال IIIIIII', 'AB112 - Baby Romper Collection IIIIIII', 'مجموعة رومبير الأطفال IIIIIII', 'Baby Romper Collection IIIIIII', 6, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:37:54', '2022-03-23 11:34:23'),
(101, 21, 'AB112 - مجموعة رومبير الأطفال IIIIIIII', 'AB112 - Baby Romper Collection IIIIIIII', 'مجموعة رومبير الأطفال IIIIIIII', 'Baby Romper Collection IIIIIIII', 7, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:39:58', '2022-03-11 12:39:58'),
(102, 21, 'AB112 - مجموعة رومبير الأطفال IIIIIIIII', 'AB112 - Baby Romper Collection IIIIIIIII', 'مجموعة رومبير الأطفال IIIIIIIII', 'Baby Romper Collection IIIIIIIII', 7, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:42:05', '2022-03-11 12:42:05'),
(103, 21, 'AB112 - مجموعة رومبير الأطفال IIIIIIIIII', 'AB112 - Baby Romper Collection IIIIIIIIII', 'مجموعة رومبير الأطفال IIIIIIIIII', 'Baby Romper Collection IIIIIIIIII', 14, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:45:07', '2022-03-11 12:45:07'),
(104, 21, 'AB112 - مجموعة رومبير الأطفال 11', 'AB112 - Baby Romper Collection 11', 'مجموعة رومبير الأطفال 11', 'Baby Romper Collection 11', 13, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:48:32', '2022-03-11 12:48:32'),
(105, 21, 'AB112 - مجموعة رومبير الأطفال 12', 'AB112 - Baby Romper Collection 12', 'مجموعة رومبير الأطفال 12', 'Baby Romper Collection 12', 10, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:50:16', '2022-03-11 12:50:16'),
(106, 21, 'AB112 - مجموعة رومبير الأطفال 13', 'AB112 - Baby Romper Collection 13', 'مجموعة رومبير الأطفال 13', 'Baby Romper Collection 13', 13, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:52:05', '2022-03-11 12:52:05'),
(107, 21, 'AB112 - مجموعة رومبير الأطفال 14', 'AB112 - Baby Romper Collection 14', 'مجموعة رومبير الأطفال 14', 'Baby Romper Collection 14', 13, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:54:03', '2022-03-11 12:54:03'),
(108, 21, 'AB112 - مجموعة رومبير الأطفال 15', 'AB112 - Baby Romper Collection 15', 'مجموعة رومبير الأطفال 15', 'Baby Romper Collection 15', 10, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:56:09', '2022-03-11 12:56:09'),
(109, 21, 'AB112 - مجموعة رومبير الأطفال 16', 'AB112 - Baby Romper Collection 16', 'مجموعة رومبير الأطفال 16', 'Baby Romper Collection 16', 12, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:57:56', '2022-03-11 12:57:56'),
(110, 21, 'AB112 - مجموعة رومبير الأطفال 17', 'AB112 - Baby Romper Collection 17', 'مجموعة رومبير الأطفال 17', 'Baby Romper Collection 17', 8, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 12:59:47', '2022-04-30 03:30:25'),
(111, 21, 'AB112 - مجموعة رومبير الأطفال 18', 'AB112 - Baby Romper Collection 18', 'مجموعة رومبير الأطفال 18', 'Baby Romper Collection 18', 13, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:02:08', '2022-03-11 13:02:08'),
(112, 21, 'AB112 - مجموعة رومبير الأطفال 19', 'AB112 - Baby Romper Collection 19', 'مجموعة رومبير الأطفال 19', 'Baby Romper Collection 19', 5, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:04:29', '2022-03-11 13:04:29'),
(113, 21, 'AB112 - مجموعة رومبير الأطفال 20', 'AB112 - Baby Romper Collection 20', 'مجموعة رومبير الأطفال 20', 'Baby Romper Collection 20', 2, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:06:05', '2022-03-11 13:06:05'),
(114, 21, 'AB112 - مجموعة رومبير الأطفال 21', 'AB112 - Baby Romper Collection 21', 'مجموعة رومبير الأطفال 21', 'Baby Romper Collection 21', 2, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:07:41', '2022-03-17 22:35:21'),
(115, 21, 'AB112 - مجموعة رومبير الأطفال 22', 'AB112 - Baby Romper Collection 22', 'مجموعة رومبير الأطفال 22', 'Baby Romper Collection 22', 2, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:10:03', '2022-03-11 13:10:03'),
(116, 21, 'AB112 - مجموعة رومبير الأطفال 23', 'AB112 - Baby Romper Collection 23', 'مجموعة رومبير الأطفال 23', 'Baby Romper Collection 23', 1, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:11:13', '2022-03-11 13:11:13'),
(117, 21, 'AB112 - مجموعة رومبير الأطفال 24', 'AB112 - Baby Romper Collection 24', 'مجموعة رومبير الأطفال 24', 'Baby Romper Collection 24', 2, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:12:30', '2022-03-23 11:34:23'),
(118, 21, 'AB112 - مجموعة رومبير الأطفال 25', 'AB112 - Baby Romper Collection 25', 'مجموعة رومبير الأطفال 25', 'Baby Romper Collection 25', 3, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:13:59', '2022-03-11 13:13:59'),
(119, 21, 'AB112 - مجموعة رومبير الأطفال 26', 'AB112 - Baby Romper Collection 26', 'مجموعة رومبير الأطفال 26', 'Baby Romper Collection 26', 3, 3.500, 'AB112', '3.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-11 13:16:16', '2022-03-11 13:16:16'),
(120, 18, 'AB113 - بدلة الأولاد المكونة من بولو تيشيرت وشورت I', 'AB113 - Toddler Boy Polo T-Shirt & Shorts Suit I', 'بدلة الأولاد المكونة من بولو تيشيرت وشورت I', 'Toddler Boy Polo T-Shirt & Shorts Suit I', 4, 6.500, 'AB113', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 07:50:48', '2022-03-12 07:50:48'),
(121, 18, 'AB113 - بدلة الأولاد المكونة من بولو تيشيرت وشورت II', 'AB113 - Toddler Boy Polo T-Shirt & Shorts Suit II', 'بدلة الأولاد المكونة من بولو تيشيرت وشورت II', 'Toddler Boy Polo T-Shirt & Shorts Suit II', 3, 6.500, 'AB113', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 07:52:22', '2022-03-12 07:52:22'),
(122, 18, 'AB113 - بدلة الأولاد المكونة من بولو تيشيرت وشورت III', 'AB113 - Toddler Boy Polo T-Shirt & Shorts Suit III', 'بدلة الأولاد المكونة من بولو تيشيرت وشورت III', 'Toddler Boy Polo T-Shirt & Shorts Suit III', 3, 6.500, 'AB113', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 07:53:59', '2022-03-12 07:53:59'),
(123, 23, 'AB114 -  فستان صيفي بنقشة الزهور', 'AB114 - Floral Pattern Summer Dress', 'فستان صيفي بنقشة الزهور', 'Floral Pattern Summer Dress', 0, 6.000, 'AB114', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 07:56:51', '2022-04-22 14:24:01'),
(124, 23, 'AB115 - فستان صيفي مع تشكيلة القلوب', 'AB115 - Heart Shaped Summer Dress', 'فستان صيفي مع تشكيلة القلوب', 'Heart Shaped Summer Dress', 3, 6.500, 'AB115', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:00:24', '2022-03-12 08:00:24'),
(125, 23, 'AB115 -  فستان صيفي مزين بالزهور بأكمام مكشكشة', 'AB115 - Ruffle Sleeves Ribbed Floral Summer Dress', 'فستان صيفي مزين بالزهور بأكمام مكشكشة', 'Ruffle Sleeves Ribbed Floral Summer Dress', 1, 6.500, 'AB115', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:02:29', '2022-03-12 08:02:29'),
(126, 23, 'AB116 - فستان جينز بلا أكمام', 'AB116 - Denim Sleeveless Dress', 'فستان جينز بلا أكمام', 'Denim Sleeveless Dress', 0, 6.000, 'AB116', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:05:22', '2022-04-22 14:22:10'),
(127, 19, 'AB117 -  جمبسوت صيفي بالورد بلا أكمام مع ربطة رأس', 'AB117 - Summer Rose Sleeveless Jumpsuit With Headband', 'جمبسوت صيفي بالورد بلا أكمام مع ربطة رأس', 'Summer Rose Sleeveless Jumpsuit With Headband', 2, 6.500, 'AB117', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:09:47', '2022-03-12 08:09:47'),
(128, 22, 'AB118 - بيجامة القطن المضيئة في الظلام I', 'AB118 - Glow In The Dark Cotton Pijama I', 'بيجامة القطن المضيئة في الظلام I', 'Glow In The Dark Cotton Pijama I', 1, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:21:43', '2022-03-12 08:21:43'),
(129, 22, 'AB118 - بيجامة القطن المضيئة في الظلام II', 'AB118 - Glow In The Dark Cotton Pijama II', 'بيجامة القطن المضيئة في الظلام II', 'Glow In The Dark Cotton Pijama II', 4, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:24:25', '2022-05-04 23:01:29'),
(130, 22, 'AB118 - بيجامة القطن المضيئة في الظلام III', 'AB118 - Glow In The Dark Cotton Pijama III', 'بيجامة القطن المضيئة في الظلام III', 'Glow In The Dark Cotton Pijama III', 8, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:26:17', '2022-05-08 22:49:47'),
(131, 22, 'AB118 - بيجامة القطن المضيئة في الظلام IIII', 'AB118 - Glow In The Dark Cotton Pijama IIII', 'بيجامة القطن المضيئة في الظلام IIII', 'Glow In The Dark Cotton Pijama IIII', 5, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:28:23', '2022-05-01 11:07:19'),
(132, 22, 'AB118 - بيجامة القطن المضيئة في الظلام IIIII', 'AB118 - Glow In The Dark Cotton Pijama IIIII', 'بيجامة القطن المضيئة في الظلام IIIII', 'Glow In The Dark Cotton Pijama IIIII', 2, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:30:11', '2022-05-01 22:37:48'),
(133, 22, 'AB118 - بيجامة القطن المضيئة في الظلام IIIIII', 'AB118 - Glow In The Dark Cotton Pijama IIIIII', 'بيجامة القطن المضيئة في الظلام IIIIII', 'Glow In The Dark Cotton Pijama IIIIII', 4, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:31:54', '2022-03-12 08:31:54'),
(134, 22, 'AB118 - بيجامة القطن المضيئة في الظلام IIIIIII', 'AB118 - Glow In The Dark Cotton Pijama IIIIIII', 'بيجامة القطن المضيئة في الظلام IIIIIII', 'Glow In The Dark Cotton Pijama IIIIIII', 0, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:33:25', '2022-05-02 12:15:19'),
(135, 22, 'AB118 - بيجامة القطن المضيئة في الظلام IIIIIIII', 'AB118 - Glow In The Dark Cotton Pijama IIIIIIII', 'بيجامة القطن المضيئة في الظلام IIIIIIII', 'Glow In The Dark Cotton Pijama IIIIIIII', 3, 4.500, 'AB118', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 08:35:03', '2022-05-01 22:37:48'),
(136, 19, 'AB119 - بودي سوت زهري للطفلة مع ربطة رأس', 'AB119 - Baby Girl Floral Cami Bodysuit & Headband', 'بودي سوت زهري للطفلة مع ربطة رأس', 'Baby Girl Floral Cami Bodysuit & Headband', 0, 6.500, 'AB119', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 13:54:48', '2022-05-01 03:00:01'),
(137, 23, 'AB120 - فستان بأكمام مكشكشة مع حقيبة كارتون', 'AB120 - Ruffled Sleeve Dress With Cartoon Polka Dot Bag', 'فستان بأكمام مكشكشة مع حقيبة كارتون', 'Ruffled Sleeve Dress With Cartoon Polka Dot Bag', 3, 6.000, 'AB120', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 14:01:21', '2022-03-12 14:01:21'),
(138, 23, 'AB120 - فستان البنت I', 'AB120 - Girl Dress I', 'فستان البنت', 'Girl Dress', 1, 6.500, 'AB120', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 14:08:13', '2022-03-12 14:08:13'),
(139, 23, 'AB120 - فستان البنت II', 'AB120 - Girl Dress II', 'فستان البنت II', 'Girl Dress II', 0, 6.500, 'AB120', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 14:10:17', '2022-04-22 14:21:33'),
(140, 23, 'AB120 - فستان البنت III', 'AB120 - Girl Dress III', 'فستان البنت III', 'Girl Dress III', 6, 6.500, 'AB120', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 14:12:50', '2022-03-12 14:12:50'),
(141, 23, 'AB120 - فستان البنت IIII', 'AB120 - Girl Dress IIII', 'فستان البنت IIII', 'Girl Dress IIII', 6, 6.500, 'AB120', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 14:14:34', '2022-03-12 14:14:34'),
(142, 19, 'AB121 - طقم ملابس أطفال بناتي مكون من  ثلاث قطع I', 'AB121 - Three Pieces Baby Girl Bodysuit Set I', 'طقم ملابس أطفال بناتي مكون من  ثلاث قطع I', 'Three Pieces Baby Girl Bodysuit Set I', -4, 5.500, 'AB121', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 18:51:16', '2022-04-26 09:50:54'),
(143, 19, 'AB121 - طقم ملابس أطفال بناتي مكون من  ثلاث قطع II', 'AB121 - Three Pieces Baby Girl Bodysuit Set II', 'طقم ملابس أطفال بناتي مكون من  ثلاث قطع II', 'Three Pieces Baby Girl Bodysuit Set II', 0, 6.500, 'AB121', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 18:52:40', '2022-05-01 03:01:18'),
(144, 19, 'AB121 - طقم ملابس أطفال بناتي مكون من  ثلاث قطع III', 'AB121 - Three Pieces Baby Girl Bodysuit Set III', 'طقم ملابس أطفال بناتي مكون من  ثلاث قطع III', 'Three Pieces Baby Girl Bodysuit Set III', 3, 6.500, 'AB121', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 18:54:58', '2022-03-12 18:54:58'),
(145, 19, 'AB121 - بوديسوت البنت مع ربطة رأس', 'AB121 - Baby Girl Bodysuit With Headband', 'بوديسوت البنت مع ربطة رأس', 'Baby Girl Bodysuit With Headband', 6, 6.500, 'AB121', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 18:58:25', '2022-03-12 18:58:25'),
(146, 19, 'AB122 - بدلة طفلة صيفية حلوة بالليمون بدون أكمام مع ربطة رأس', 'AB122 - Two Pieces Baby Girl Sweet Summer Lemon Sleeveless Jumpsuit', 'بدلة طفلة صيفية حلوة بالليمون بدون أكمام مع ربطة رأس', 'Two Pieces Baby Girl Sweet Summer Lemon Sleeveless Jumpsuit', 2, 6.500, 'AB122', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:02:26', '2022-03-12 19:02:26'),
(147, 19, 'AB122 - بدلة طفلة صيفية حلوة بالأناناس', 'AB122 - Baby Girl Sweet Summer Pineapple Jumpsuit Dress', 'بدلة طفلة صيفية حلوة بالأناناس', 'Baby Girl Sweet Summer Pineapple Jumpsuit Dress', 5, 6.000, 'AB122', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:08:39', '2022-03-12 19:08:39'),
(148, 19, 'AB122 - بدلة طفلة صيفية حلوة بالبطيخ', 'AB122 - Baby Girl Sweet Summer Watermelon Jumpsuit Dress', 'بدلة طفلة صيفية حلوة بالبطيخ', 'Baby Girl Sweet Summer Watermelon Jumpsuit Dress', 1, 6.000, 'AB122', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:10:41', '2022-03-12 19:10:41'),
(149, 19, 'AB122 - بدلة طفلة صيفية حلوة بالفراولة', 'AB122 - Baby Girl Sweet Summer Strawberry Jumpsuit Dress', 'بدلة طفلة صيفية حلوة بالفراولة', 'Baby Girl Sweet Summer Strawberry Jumpsuit Dress', 4, 6.000, 'AB122', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:15:36', '2022-05-01 03:00:29'),
(150, 18, 'AB123 - بدلة أطفال ولادية من قطعتين I', 'AB123 - Two Pieces Baby Boy Suit Set I', 'بدلة أطفال ولادية من قطعتين I', 'Two Pieces Baby Boy Suit Set I', 0, 6.500, 'AB123', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:20:34', '2022-04-22 14:20:39'),
(151, 18, 'AB123 - بدلة أطفال ولادية من قطعتين II', 'AB123 - Two Pieces Baby Boy Suit Set II', 'بدلة أطفال ولادية من قطعتين II', 'Two Pieces Baby Boy Suit Set II', 5, 6.500, 'AB123', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:22:29', '2022-03-12 19:22:29'),
(152, 19, 'AB123 - بدلة طفلة صيفية حلوة بالورد بدون أكمام مع ربطة رأس', 'AB123- Two Pieces Baby Girl Sweet Floral Sleeveless Jumpsuit', 'بدلة طفلة صيفية حلوة بالورد بدون أكمام مع ربطة رأس', 'Two Pieces Baby Girl Sweet Floral Sleeveless Jumpsuit', 2, 6.500, 'AB123', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:26:29', '2022-03-12 19:26:29'),
(153, 19, 'AB123 - بدلة طفلة صيفية بالبطيخ مع ربطة رأس', 'AB123 - Two Pieces Baby Girl Sweet Watermelon Jumpsuit', 'بدلة طفلة صيفية بالبطيخ مع ربطة رأس', 'Two Pieces Baby Girl Sweet Watermelon Jumpsuit', 13, 6.500, 'AB123', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:30:10', '2022-03-12 19:30:10'),
(154, 18, 'AB124 - بدلة أطفال ولادية تيشيرت بولو مع شورت I', 'AB124 - Two Pieces Toddler Boy Polo T-shirt & Shorts I', 'بدلة أطفال ولادية تيشيرت بولو مع شورت I', 'Two Pieces Toddler Boy Polo T-shirt & Shorts I', 6, 7.000, 'AB124', '7.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:35:19', '2022-04-21 02:11:53'),
(155, 18, 'AB124 - بدلة أطفال ولادية تيشيرت بولو مع شورت II', 'AB124 - Two Pieces Toddler Boy Polo T-shirt & Shorts II', 'بدلة أطفال ولادية تيشيرت بولو مع شورت II', 'Two Pieces Toddler Boy Polo T-shirt & Shorts II', 3, 7.000, 'AB124', '7.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:37:04', '2022-04-30 03:23:08'),
(156, 18, 'AB124 - بدلة أطفال ولادية تيشيرت بولو مع شورت III', 'AB124 - Two Pieces Toddler Boy Polo T-shirt & Shorts III', 'بدلة أطفال ولادية تيشيرت بولو مع شورت III', 'Two Pieces Toddler Boy Polo T-shirt & Shorts III', 8, 7.000, 'AB124', '7.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:38:53', '2022-03-12 19:38:53'),
(157, 22, 'AB125 - بيجامة القطن المضيئة في الظلام I', 'AB125 - Glow in The Dark Cotton Pijama I', 'بيجامة القطن المضيئة في الظلام I', 'Glow in The Dark Cotton Pijama I', 5, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:46:46', '2022-05-03 05:40:27'),
(158, 22, 'AB125 - بيجامة القطن المضيئة في الظلام II', 'AB125 - Glow in The Dark Cotton Pijama II', 'بيجامة القطن المضيئة في الظلام II', 'Glow in The Dark Cotton Pijama II', 18, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:49:07', '2022-03-13 23:21:48'),
(159, 22, 'AB125 - بيجامة القطن المضيئة في الظلام III', 'AB125 - Glow in The Dark Cotton Pijama III', 'بيجامة القطن المضيئة في الظلام III', 'Glow in The Dark Cotton Pijama III', 19, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:51:38', '2022-03-12 20:16:00'),
(160, 22, 'AB125 - بيجامة القطن المضيئة في الظلام IIII', 'AB125 - Glow in The Dark Cotton Pijama IIII', 'بيجامة القطن المضيئة  في الظلام IIII', 'Glow in The Dark Cotton Pijama IIII', 6, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 19:58:02', '2022-05-02 15:08:37'),
(161, 22, 'AB125 - بيجامة القطن المضيئة في الظلام IIIII', 'AB125 - Glow in The Dark Cotton Pijama IIIII', 'بيجامة القطن المضيئة في الظلام IIIII', 'Glow in The Dark Cotton Pijama IIIII', 8, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:14:42', '2022-05-01 11:30:50'),
(162, 22, 'AB125 - بيجامة القطن المضيئة في الظلام IIIIII', 'AB125 - Glow in The Dark Cotton Pijama IIIIII', 'بيجامة القطن المضيئة في الظلام IIIIII', 'Glow in The Dark Cotton Pijama IIIIII', 17, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:21:30', '2022-03-12 20:25:00'),
(163, 22, 'AB125 - بيجامة القطن المضيئة في الظلام IIIIIII', 'AB125 - Glow in The Dark Cotton Pijama IIIIIII', 'بيجامة القطن المضيئة في الظلام IIIIIII', 'Glow in The Dark Cotton Pijama IIIIIII', 8, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:24:41', '2022-05-02 12:11:34'),
(164, 22, 'AB125 - بيجامة القطن المضيئة في الظلام IIIIIIII', 'AB125 - Glow in The Dark Cotton Pijama IIIIIIII', 'بيجامة القطن المضيئة في الظلام IIIIIIII', 'Glow in The Dark Cotton Pijama IIIIIIII', 9, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:28:13', '2022-05-03 05:40:27'),
(165, 22, 'AB125 - بيجامة القطن المضيئة في الظلام IIIIIIIII', 'AB125 - Glow in The Dark Cotton Pijama IIIIIIIII', 'بيجامة القطن المضيئة في الظلام IIIIIIIII', 'Glow in The Dark Cotton Pijama IIIIIIIII', 0, 4.500, 'AB125', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:30:45', '2022-05-02 12:32:05'),
(166, 23, 'AB126 - فستان أصفر للفتيات الصغيرات', 'AB126 - Yellow Baby Girl Dress', 'فستان أصفر للفتيات الصغيرات', 'Yellow Baby Girl Dress', 5, 4.000, 'AB126', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:40:47', '2022-03-12 20:40:47'),
(167, 23, 'AB126 - فستان الأناناس للفتيات الصغيرات', 'AB126 - Pineapple Baby Girl Dress', 'فستان الأناناس للفتيات الصغيرات', 'Pineapple Baby Girl Dress', -2, 4.000, 'AB126', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:43:21', '2022-04-26 09:50:54'),
(168, 23, 'AB126 - فستان الزهر و الأناناس للفتيات الصغيرات', 'AB126 - Floral Pineapple Baby Girl Dress', 'فستان الزهر و الأناناس للفتيات الصغيرات', 'Floral Pineapple Baby Girl Dress', 4, 4.000, 'AB126', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:45:08', '2022-03-12 20:45:08'),
(169, 23, 'AB126  - فستان الطفلة I', 'AB126 - Baby Girl Dress I', 'فستان الطفلة I', 'Baby Girl Dress I', 3, 5.500, 'AB126', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:49:07', '2022-03-12 20:49:33'),
(170, 23, 'AB126  - فستان الطفلة II', 'AB126 - Baby Girl Dress II', 'فستان الطفلة II', 'Baby Girl Dress II', 5, 4.500, 'AB126', '4.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:51:47', '2022-03-12 20:51:47'),
(171, 19, 'AB126  - جمبسوت الطفلة', 'AB126 - Baby Girl Jumpsuit', 'جمبسوت الطفلة', 'Baby Girl Jumpsuit', 5, 5.500, 'AB126', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 20:55:04', '2022-03-12 20:55:04'),
(172, 25, 'AB126 - رومبر الأرنب مع الآذان I', 'AB126 - Rabbit With Ears Romper I', 'رومبر الأرنب مع الآذان I', 'Rabbit With Ears Romper I', 7, 6.500, 'AB126', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:00:11', '2022-05-01 06:58:55'),
(173, 25, 'AB126 - رومبر الأرنب مع الآذان II', 'AB126 - Rabbit With Ears Romper II', 'رومبر الأرنب مع الآذان II', 'Rabbit With Ears Romper II', 9, 6.500, 'AB126', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:02:43', '2022-03-12 21:02:43'),
(174, 25, 'AB126 - رومبر الأرنب مع الآذان III', 'AB126 - Rabbit With Ears Romper III', 'رومبر الأرنب مع الآذان III', 'Rabbit With Ears Romper III', 4, 6.500, 'AB126', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:04:14', '2022-03-12 21:04:14'),
(175, 19, 'AB126 - طقم البنات الزهري المكون من ثلاث قطع', 'AB126 - Three Pieces Floral Baby Girl Set', 'طقم البنات الزهري المكون من ثلاث قطع', 'Three Pieces Floral Baby Girl Set', 4, 6.000, 'AB126', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:08:20', '2022-04-20 09:29:31'),
(176, 19, 'AB126 - طقم بناتي مكون من ثلاث قطع', 'AB126 - Three Pieces Baby Girl Set', 'طقم بناتي مكون من ثلاث قطع', 'Three Pieces Baby Girl Set', 2, 5.500, 'AB126', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:12:20', '2022-03-12 21:12:20'),
(177, 16, 'AB126 - رومبر الفيل ولفلامينغو', 'AB126 - Elephant & Flamingo Romper', 'رومبر الفيل ولفلامينغو', 'Elephant & Flamingo Romper', 8, 4.000, 'AB126', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:15:53', '2022-03-12 21:15:53'),
(178, 19, 'AB127 - بدلة الطفلة المكونة من قطعتين', 'AB127 - Two Pieces Baby Girl Sets', 'بدلة الطفلة المكونة من قطعتين', 'Two Pieces Baby Girl Sets', 6, 6.500, 'AB127', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:29:29', '2022-04-26 19:54:43'),
(179, 19, 'AB127 - بدلة الطفلة المكونة من ثلاث قطع I', 'AB127 - Three Pieces Baby Girl Sets I', 'بدلة الطفلة المكونة من ثلاث قطع I', 'Three Pieces Baby Girl Sets I', 8, 6.500, 'AB127', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 21:33:03', '2022-03-12 21:33:03'),
(180, 19, 'AB127 - بدلة الطفلة المكونة من ثلاث قطع II', 'AB127 - Three Pieces Baby Girl Sets II', 'بدلة الطفلة المكونة من ثلاث قطع II', 'Three Pieces Baby Girl Sets II', 3, 6.500, 'AB127', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:02:19', '2022-03-12 22:02:19'),
(181, 19, 'AB127 - بدلة الطفلة الزهرية المكونة من ثلاث قطع I', 'AB127 - Three Pieces Baby Girl Floral Sets I', 'بدلة الطفلة الزهرية المكونة من ثلاث قطع I', 'Three Pieces Baby Girl Floral Sets I', 3, 6.500, 'AB127', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:06:41', '2022-03-12 22:06:41'),
(182, 19, 'AB127 - بدلة الطفلة الزهرية المكونة من ثلاث قطع II', 'AB127 - Three Pieces Baby Girl Floral Sets II', 'بدلة الطفلة الزهرية المكونة من ثلاث قطع II', 'Three Pieces Baby Girl Floral Sets II', 4, 6.500, 'AB127', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:12:12', '2022-03-23 11:34:23'),
(183, 19, 'AB127 - بدلة الطفلة الزهرية المكونة من ثلاث قطع III', 'AB127 - Three Pieces Baby Girl Floral Sets III', 'بدلة الطفلة الزهرية المكونة من ثلاث قطع III', 'Three Pieces Baby Girl Floral Sets III', 2, 6.500, 'AB127', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:13:30', '2022-05-24 12:26:58'),
(184, 19, 'AB128 - بدلة الطفلة الزهرية المكونة من ثلاث قطع I', 'AB128 - Three Pieces Baby Girl Floral Sets I', 'بدلة الطفلة الزهرية المكونة من ثلاث قطع I', 'Three Pieces Baby Girl Floral Sets I', 8, 6.500, 'AB128', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:20:16', '2022-05-01 03:00:50'),
(185, 19, 'AB128 - بدلة الطفلة الزهرية المكونة من ثلاث قطع II', 'AB128 - Three Pieces Baby Girl Floral Sets II', 'بدلة الطفلة الزهرية المكونة من ثلاث قطع II', 'Three Pieces Baby Girl Floral Sets II', 10, 6.500, 'AB128', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:26:15', '2022-03-12 22:26:15'),
(186, 16, 'AB128 - رومبير الطفل الجنتلمان I', 'AB128 - Baby Gentleman Romper I', 'رومبير الطفل الجنتلمان I', 'Baby Gentleman Romper I', 14, 5.500, 'AB128', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:32:06', '2022-04-30 03:28:27'),
(187, 16, 'AB128 - رومبير الطفل الجنتلمان II', 'AB128 - Baby Gentleman Romper II', 'رومبير الطفل الجنتلمان II', 'Baby Gentleman Romper II', 9, 5.500, 'AB128', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:34:56', '2022-04-30 03:25:27'),
(188, 16, 'AB128 - رومبير مجموعة الديناصور I', 'AB128 - Dinosaur Romper Collection I', 'رومبير مجموعة الديناصور I', 'Dinosaur Romper Collection I', 2, 4.000, 'AB128', '4.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:38:14', '2022-03-13 22:05:49'),
(189, 23, 'AB129 - فستان الطفلة الحلوة I', 'AB129 - Sweet Baby Girl Dress I', 'فستان الطفلة الحلوة I', 'Sweet Baby Girl Dress I', 3, 5.500, 'AB129', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:42:19', '2022-03-12 22:42:19'),
(190, 23, 'AB129 - فستان الطفلة الحلوة II', 'AB129 - Sweet Baby Girl Dress II', 'فستان الطفلة الحلوة II', 'Sweet Baby Girl Dress II', 6, 5.500, 'AB129', '5.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:43:44', '2022-03-12 22:43:44'),
(191, 23, 'AB130 - فستان الرومبير الأصفر المكون من قطعتين', 'AB130 - Two PCs Girl Yellow Romper Dress', 'فستان الرومبير الأصفر المكون من قطعتين', 'Two PCs Girl Yellow Romper Dress', -3, 6.500, 'AB130', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:48:34', '2022-04-20 08:55:35'),
(192, 23, 'AB130 - فستان الطفلة I', 'AB130 - Baby Girl Dress I', 'فستان الطفلة I', 'Baby Girl Dress I', 7, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:51:56', '2022-03-12 22:51:56'),
(193, 23, 'AB130 - فستان الطفلة II', 'AB130 - Baby Girl Dress II', 'فستان الطفلة II', 'Baby Girl Dress II', 9, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:53:47', '2022-03-12 22:53:47'),
(194, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع I', 'AB130 - Three Pieces Baby Sets I', 'طقم الأطفال المكون من ثلاث قطع I', 'Three Pieces Baby Sets I', 5, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 22:58:59', '2022-03-12 22:58:59'),
(195, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع II', 'AB130 - Three Pieces Baby Sets II', 'طقم الأطفال المكون من ثلاث قطع II', 'Three Pieces Baby Sets II', 5, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:03:58', '2022-03-12 23:03:58'),
(196, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع III', 'AB130 - Three Pieces Baby Sets III', 'طقم الأطفال المكون من ثلاث قطع III', 'Three Pieces Baby Sets III', 4, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:07:23', '2022-03-12 23:07:23'),
(197, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIII', 'AB130 - Three Pieces Baby Sets IIII', 'طقم الأطفال المكون من ثلاث قطع IIII', 'Three Pieces Baby Sets IIII', 4, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:09:23', '2022-03-12 23:09:23'),
(198, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIIII', 'AB130 - Three Pieces Baby Sets IIIII', 'طقم الأطفال المكون من ثلاث قطع IIIII', 'Three Pieces Baby Sets IIIII', 5, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:10:59', '2022-03-12 23:10:59'),
(199, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIIIII', 'AB130 - Three Pieces Baby Sets IIIIII', 'طقم الأطفال المكون من ثلاث قطع IIIIII', 'Three Pieces Baby Sets IIIIII', 4, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:12:48', '2022-03-12 23:12:48'),
(200, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIIIIII', 'AB130 - Three Pieces Baby Sets IIIIIII', 'طقم الأطفال المكون من ثلاث قطع IIIIIII', 'Three Pieces Baby Sets IIIIIII', 5, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:14:20', '2022-03-12 23:14:20'),
(201, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIIIIIII', 'AB130 - Three Pieces Baby Sets IIIIIIII', 'طقم الأطفال المكون من ثلاث قطع IIIIIIII', 'Three Pieces Baby Sets IIIIIIII', 5, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:16:13', '2022-03-12 23:16:13'),
(202, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIIIIIIII', 'AB130 - Three Pieces Baby Sets IIIIIIIII', 'طقم الأطفال المكون من ثلاث قطع IIIIIIIII', 'Three Pieces Baby Sets IIIIIIIII', 4, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:18:25', '2022-03-12 23:18:25');
INSERT INTO `products` (`id`, `category_id`, `name_ar`, `name_en`, `desc_ar`, `desc_en`, `quantity`, `price`, `code`, `cost`, `discount`, `discount_from`, `discount_to`, `display`, `deliverable`, `featured`, `weight_id`, `created_at`, `updated_at`) VALUES
(203, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIIIIIIIII', 'AB130 - Three Pieces Baby Sets IIIIIIIIII', 'طقم الأطفال المكون من ثلاث قطع IIIIIIIIII', 'Three Pieces Baby Sets IIIIIIIIII', 4, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:20:13', '2022-03-12 23:20:13'),
(204, 18, 'AB130 - طقم الأطفال المكون من ثلاث قطع IIIIIIIIIII', 'AB130 - Three Pieces Baby Sets IIIIIIIIIII', 'طقم الأطفال المكون من ثلاث قطع IIIIIIIIIII', 'Three Pieces Baby Sets IIIIIIIIIII', 1, 6.000, 'AB130', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:21:42', '2022-04-26 20:00:28'),
(205, 23, 'AB131 - فستان الجينز الزهري', 'AB131 - Sweet Baby Girl Floral Denim Dress', 'فستان الجينز الزهري', 'Sweet Baby Girl Floral Denim Dress', 9, 6.000, 'AB131', '6.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:29:32', '2022-03-12 23:29:32'),
(206, 23, 'AB131 - فستان الطفلة المكشكش مع ربطة الرأس', 'AB131 - Baby Girl Ruffle Dress With Headband', 'فستان الطفلة المكشكش مع ربطة الرأس', 'Baby Girl Ruffle Dress With Headband', 5, 6.500, 'AB131', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:33:30', '2022-03-12 23:33:30'),
(207, 19, 'AB131 - بدلة الطفلة المكونة من ثلاث قطع', 'AB131 - Three Pieces Baby Girl Dress Set', 'بدلة الطفلة المكونة من ثلاث قطع', 'Three Pieces Baby Girl Dress Set', 1, 6.500, 'AB131', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:36:13', '2022-03-12 23:36:13'),
(208, 19, 'AB131 - طقم التنورة الزهري بحاملات المكون من ثلاث قطع', 'AB131 - Three Pieces Baby Girl Floral Suspender Skirt Set', 'طقم التنورة الزهري بحاملات المكون من ثلاث قطع', 'Three Pieces Baby Girl Floral Suspender Skirt Set', 5, 6.500, 'AB131', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:41:31', '2022-03-12 23:41:31'),
(209, 19, 'AB131 - بدلة بناتية مكون من قطعتان بلوزة وتنورة I', 'AB131 - Two Pieces Baby Toddler Bowknot Flounced Knitted Top & Pleatd Skirts I', 'بدلة بناتية مكون من قطعتان بلوزة وتنورة I', 'Two Pieces Baby Toddler Bowknot Flounced Knitted Top & Pleatd Skirts I', 1, 8.000, 'AB131', '8.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:50:28', '2022-03-12 23:50:28'),
(210, 19, 'AB131 - بدلة بناتية مكون من قطعتان بلوزة وتنورة II', 'AB131 - Two Pieces Baby Toddler Bowknot Flounced Knitted Top & Pleatd Skirts II', 'بدلة بناتية مكون من قطعتان بلوزة وتنورة II', 'Two Pieces Baby Toddler Bowknot Flounced Knitted Top & Pleatd Skirts II', 2, 8.000, 'AB131', '8.000', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:52:07', '2022-03-12 23:52:07'),
(211, 25, 'AB131 - رومبر الأرنب مع الآذان I', 'AB131 - Rabbit With Ears Romper I', 'رومبر الأرنب مع الآذان I', 'Rabbit With Ears Romper I', 6, 6.500, 'AB131', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:56:12', '2022-03-12 23:56:12'),
(212, 25, 'AB131 - رومبر الأرنب مع الآذان II', 'AB131 - Rabbit With Ears Romper II', 'رومبر الأرنب مع الآذان II', 'Rabbit With Ears Romper II', 4, 6.500, 'AB131', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-12 23:58:02', '2022-03-12 23:58:02'),
(213, 25, 'AB131 - رومبر الأرنب مع الآذان III', 'AB131 - Rabbit With Ears Romper III', 'رومبر الأرنب مع الآذان III', 'Rabbit With Ears Romper III', 7, 6.500, 'AB131', '6.500', NULL, NULL, NULL, 1, 1, 1, 2, '2022-03-13 00:00:03', '2022-05-29 08:56:06'),
(219, 26, 'Test', 'Test', 'Quibusdam voluptatem', 'Voluptas culpa et et', 18, 0.010, 'Fuga Dolor anim dol', 'Consectetur impedit', NULL, NULL, NULL, 0, 1, 1, 18, '2022-03-17 11:18:32', '2022-04-27 08:21:32'),
(218, 17, '12345', '12345', '12345', '12345', 0, 0.500, '12345', '0.500', NULL, NULL, NULL, 0, 1, 1, 2, '2022-03-14 14:50:57', '2022-03-14 15:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://artbabybh.com/uploads/products/1/1643877052_5527.jpg', NULL, NULL),
(2, 1, 'https://artbabybh.com/uploads/products/1/1643877052_1490.jpg', NULL, NULL),
(3, 1, 'https://artbabybh.com/uploads/products/1/1643877052_9977.jpg', NULL, NULL),
(4, 2, 'https://artbabybh.com/uploads/products/2/1644584708_4351.JPG', NULL, NULL),
(5, 3, 'https://artbabybh.com/uploads/products/3/1646429627_2378.JPG', NULL, NULL),
(6, 4, 'https://artbabybh.com/uploads/products/4/1646430274_334.JPG', NULL, NULL),
(7, 5, 'https://artbabybh.com/uploads/products/5/1646430437_7212.JPG', NULL, NULL),
(8, 6, 'https://artbabybh.com/uploads/products/6/1646430768_1354.JPG', NULL, NULL),
(9, 7, 'https://artbabybh.com/uploads/products/7/1646431014_6407.JPG', NULL, NULL),
(10, 8, 'https://artbabybh.com/uploads/products/8/1646431518_1068.JPG', NULL, NULL),
(11, 8, 'https://artbabybh.com/uploads/products/8/1646431542_7803.JPG', NULL, NULL),
(12, 8, 'https://artbabybh.com/uploads/products/8/1646431580_5414.JPG', NULL, NULL),
(13, 9, 'https://artbabybh.com/uploads/products/9/1646431934_708.JPG', NULL, NULL),
(14, 9, 'https://artbabybh.com/uploads/products/9/1646431956_133.JPG', NULL, NULL),
(15, 10, 'https://artbabybh.com/uploads/products/10/1646432313_8105.JPG', NULL, NULL),
(16, 11, 'https://artbabybh.com/uploads/products/11/1646432500_7284.JPG', NULL, NULL),
(17, 12, 'https://artbabybh.com/uploads/products/12/1646432610_9577.JPG', NULL, NULL),
(18, 13, 'https://artbabybh.com/uploads/products/13/1646432699_1421.JPG', NULL, NULL),
(19, 14, 'https://artbabybh.com/uploads/products/14/1646433318_2313.JPG', NULL, NULL),
(20, 15, 'https://artbabybh.com/uploads/products/15/1646433539_9007.JPG', NULL, NULL),
(21, 16, 'https://artbabybh.com/uploads/products/16/1646433752_9492.JPG', NULL, NULL),
(22, 17, 'https://artbabybh.com/uploads/products/17/1646433993_6469.JPG', NULL, NULL),
(23, 18, 'https://artbabybh.com/uploads/products/18/1646434090_4059.JPG', NULL, NULL),
(24, 19, 'https://artbabybh.com/uploads/products/19/1646434260_4169.JPG', NULL, NULL),
(25, 20, 'https://artbabybh.com/uploads/products/20/1646438086_9611.JPG', NULL, NULL),
(26, 21, 'https://artbabybh.com/uploads/products/21/1646438233_1032.JPG', NULL, NULL),
(27, 22, 'https://artbabybh.com/uploads/products/22/1646438568_8644.JPG', NULL, NULL),
(28, 23, 'https://artbabybh.com/uploads/products/23/1646438667_2919.JPG', NULL, NULL),
(29, 24, 'https://artbabybh.com/uploads/products/24/1646439084_8793.jpg', NULL, NULL),
(30, 25, 'https://artbabybh.com/uploads/products/25/1646439339_932.jpg', NULL, NULL),
(31, 26, 'https://artbabybh.com/uploads/products/26/1646516558_1118.jpg', NULL, NULL),
(32, 27, 'https://artbabybh.com/uploads/products/27/1646516884_9571.jpg', NULL, NULL),
(33, 28, 'https://artbabybh.com/uploads/products/28/1646517338_9929.JPG', NULL, NULL),
(34, 29, 'https://artbabybh.com/uploads/products/29/1646517771_8268.JPG', NULL, NULL),
(35, 30, 'https://artbabybh.com/uploads/products/30/1646517953_5124.JPG', NULL, NULL),
(36, 31, 'https://artbabybh.com/uploads/products/31/1646518274_3357.jpg', NULL, NULL),
(37, 32, 'https://artbabybh.com/uploads/products/32/1646518515_3844.jpg', NULL, NULL),
(38, 33, 'https://artbabybh.com/uploads/products/33/1646518667_4671.JPG', NULL, NULL),
(39, 34, 'https://artbabybh.com/uploads/products/34/1646518948_1750.jpg', NULL, NULL),
(40, 35, 'https://artbabybh.com/uploads/products/35/1646519099_990.jpg', NULL, NULL),
(41, 36, 'https://artbabybh.com/uploads/products/36/1646519338_9523.jpg', NULL, NULL),
(42, 37, 'https://artbabybh.com/uploads/products/37/1646519611_3789.jpg', NULL, NULL),
(43, 38, 'https://artbabybh.com/uploads/products/38/1646519813_8937.jpg', NULL, NULL),
(44, 39, 'https://artbabybh.com/uploads/products/39/1646519940_3020.jpg', NULL, NULL),
(45, 40, 'https://artbabybh.com/uploads/products/40/1646520155_4699.jpg', NULL, NULL),
(46, 41, 'https://artbabybh.com/uploads/products/41/1646520286_5660.jpg', NULL, NULL),
(47, 42, 'https://artbabybh.com/uploads/products/42/1646520629_2427.JPG', NULL, NULL),
(48, 43, 'https://artbabybh.com/uploads/products/43/1646521192_2085.jpg', NULL, NULL),
(49, 44, 'https://artbabybh.com/uploads/products/44/1646521320_3864.jpg', NULL, NULL),
(50, 45, 'https://artbabybh.com/uploads/products/45/1646902806_9304.png', NULL, NULL),
(51, 46, 'https://artbabybh.com/uploads/products/46/1646985241_8245.jpg', NULL, NULL),
(52, 47, 'https://artbabybh.com/uploads/products/47/1646985524_1048.jpg', NULL, NULL),
(53, 48, 'https://artbabybh.com/uploads/products/48/1646985643_9953.jpg', NULL, NULL),
(54, 49, 'https://artbabybh.com/uploads/products/49/1646985958_2365.jpg', NULL, NULL),
(55, 50, 'https://artbabybh.com/uploads/products/50/1646986233_7065.JPG', NULL, NULL),
(56, 51, 'https://artbabybh.com/uploads/products/51/1646986409_9213.jpg', NULL, NULL),
(57, 52, 'https://artbabybh.com/uploads/products/52/1646986753_3018.jpg', NULL, NULL),
(58, 53, 'https://artbabybh.com/uploads/products/53/1646986883_4791.jpg', NULL, NULL),
(59, 54, 'https://artbabybh.com/uploads/products/54/1646988399_6843.jpg', NULL, NULL),
(60, 55, 'https://artbabybh.com/uploads/products/55/1646988638_620.jpg', NULL, NULL),
(61, 56, 'https://artbabybh.com/uploads/products/56/1646989532_7701.jpg', NULL, NULL),
(62, 57, 'https://artbabybh.com/uploads/products/57/1646989620_3864.jpg', NULL, NULL),
(63, 58, 'https://artbabybh.com/uploads/products/58/1646989868_5428.jpg', NULL, NULL),
(64, 59, 'https://artbabybh.com/uploads/products/59/1646989958_1246.jpg', NULL, NULL),
(65, 60, 'https://artbabybh.com/uploads/products/60/1646990270_8037.jpg', NULL, NULL),
(66, 61, 'https://artbabybh.com/uploads/products/61/1646990360_3264.jpg', NULL, NULL),
(67, 62, 'https://artbabybh.com/uploads/products/62/1646990628_5598.jpg', NULL, NULL),
(68, 63, 'https://artbabybh.com/uploads/products/63/1646990837_904.jpg', NULL, NULL),
(69, 64, 'https://artbabybh.com/uploads/products/64/1646991013_5645.jpg', NULL, NULL),
(70, 65, 'https://artbabybh.com/uploads/products/65/1646991373_2019.JPG', NULL, NULL),
(71, 66, 'https://artbabybh.com/uploads/products/66/1646991474_6798.JPG', NULL, NULL),
(72, 67, 'https://artbabybh.com/uploads/products/67/1646991963_6461.jpg', NULL, NULL),
(73, 68, 'https://artbabybh.com/uploads/products/68/1646992631_6818.jpg', NULL, NULL),
(74, 69, 'https://artbabybh.com/uploads/products/69/1646992707_6315.jpg', NULL, NULL),
(75, 70, 'https://artbabybh.com/uploads/products/70/1646992954_7849.jpg', NULL, NULL),
(76, 71, 'https://artbabybh.com/uploads/products/71/1646993209_7331.jpg', NULL, NULL),
(77, 72, 'https://artbabybh.com/uploads/products/72/1646993487_1110.jpg', NULL, NULL),
(78, 73, 'https://artbabybh.com/uploads/products/73/1646993731_1360.jpg', NULL, NULL),
(79, 74, 'https://artbabybh.com/uploads/products/74/1646994049_4432.jpg', NULL, NULL),
(80, 75, 'https://artbabybh.com/uploads/products/75/1646994276_6153.jpg', NULL, NULL),
(81, 76, 'https://artbabybh.com/uploads/products/76/1646994544_7007.jpg', NULL, NULL),
(82, 77, 'https://artbabybh.com/uploads/products/77/1646994685_1131.jpg', NULL, NULL),
(83, 78, 'https://artbabybh.com/uploads/products/78/1646994791_5028.jpg', NULL, NULL),
(84, 79, 'https://artbabybh.com/uploads/products/79/1646994893_7572.jpg', NULL, NULL),
(85, 80, 'https://artbabybh.com/uploads/products/80/1646995732_3331.jpg', NULL, NULL),
(86, 81, 'https://artbabybh.com/uploads/products/81/1646995927_1027.jpg', NULL, NULL),
(87, 82, 'https://artbabybh.com/uploads/products/82/1646996030_3624.jpg', NULL, NULL),
(88, 83, 'https://artbabybh.com/uploads/products/83/1646996168_6219.jpg', NULL, NULL),
(89, 84, 'https://artbabybh.com/uploads/products/84/1646996324_4633.jpg', NULL, NULL),
(90, 85, 'https://artbabybh.com/uploads/products/85/1646996569_7643.jpg', NULL, NULL),
(91, 86, 'https://artbabybh.com/uploads/products/86/1646996737_1903.jpg', NULL, NULL),
(92, 87, 'https://artbabybh.com/uploads/products/87/1646996876_396.jpg', NULL, NULL),
(93, 88, 'https://artbabybh.com/uploads/products/88/1646996982_918.jpg', NULL, NULL),
(94, 89, 'https://artbabybh.com/uploads/products/89/1646997212_4002.jpg', NULL, NULL),
(95, 90, 'https://artbabybh.com/uploads/products/90/1646997302_2931.jpg', NULL, NULL),
(96, 91, 'https://artbabybh.com/uploads/products/91/1646997396_4585.jpg', NULL, NULL),
(97, 92, 'https://artbabybh.com/uploads/products/92/1646997477_9499.jpg', NULL, NULL),
(98, 93, 'https://artbabybh.com/uploads/products/93/1646997727_9530.jpg', NULL, NULL),
(99, 94, 'https://artbabybh.com/uploads/products/94/1646997959_4908.JPG', NULL, NULL),
(100, 95, 'https://artbabybh.com/uploads/products/95/1646998068_1672.JPG', NULL, NULL),
(101, 96, 'https://artbabybh.com/uploads/products/96/1646998173_970.JPG', NULL, NULL),
(102, 97, 'https://artbabybh.com/uploads/products/97/1646998317_3904.JPG', NULL, NULL),
(103, 98, 'https://artbabybh.com/uploads/products/98/1646998420_1070.JPG', NULL, NULL),
(104, 99, 'https://artbabybh.com/uploads/products/99/1646998542_4636.JPG', NULL, NULL),
(105, 100, 'https://artbabybh.com/uploads/products/100/1646998674_2106.JPG', NULL, NULL),
(106, 101, 'https://artbabybh.com/uploads/products/101/1646998798_717.JPG', NULL, NULL),
(107, 102, 'https://artbabybh.com/uploads/products/102/1646998925_2900.JPG', NULL, NULL),
(108, 103, 'https://artbabybh.com/uploads/products/103/1646999107_8844.JPG', NULL, NULL),
(109, 104, 'https://artbabybh.com/uploads/products/104/1646999312_9259.JPG', NULL, NULL),
(110, 105, 'https://artbabybh.com/uploads/products/105/1646999416_1965.JPG', NULL, NULL),
(111, 106, 'https://artbabybh.com/uploads/products/106/1646999525_3170.JPG', NULL, NULL),
(112, 107, 'https://artbabybh.com/uploads/products/107/1646999643_8315.JPG', NULL, NULL),
(113, 108, 'https://artbabybh.com/uploads/products/108/1646999769_7419.JPG', NULL, NULL),
(114, 109, 'https://artbabybh.com/uploads/products/109/1646999876_2618.JPG', NULL, NULL),
(115, 110, 'https://artbabybh.com/uploads/products/110/1646999987_1225.JPG', NULL, NULL),
(116, 111, 'https://artbabybh.com/uploads/products/111/1647000128_9742.JPG', NULL, NULL),
(117, 112, 'https://artbabybh.com/uploads/products/112/1647000269_814.JPG', NULL, NULL),
(118, 113, 'https://artbabybh.com/uploads/products/113/1647000365_3810.JPG', NULL, NULL),
(119, 114, 'https://artbabybh.com/uploads/products/114/1647000461_2151.JPG', NULL, NULL),
(120, 115, 'https://artbabybh.com/uploads/products/115/1647000603_5849.JPG', NULL, NULL),
(121, 116, 'https://artbabybh.com/uploads/products/116/1647000673_5267.JPG', NULL, NULL),
(122, 117, 'https://artbabybh.com/uploads/products/117/1647000750_4064.JPG', NULL, NULL),
(123, 118, 'https://artbabybh.com/uploads/products/118/1647000839_6939.JPG', NULL, NULL),
(124, 119, 'https://artbabybh.com/uploads/products/119/1647000976_5691.JPG', NULL, NULL),
(125, 120, 'https://artbabybh.com/uploads/products/120/1647067848_8422.jpg', NULL, NULL),
(126, 121, 'https://artbabybh.com/uploads/products/121/1647067942_4770.jpg', NULL, NULL),
(127, 122, 'https://artbabybh.com/uploads/products/122/1647068039_106.jpg', NULL, NULL),
(128, 123, 'https://artbabybh.com/uploads/products/123/1647068211_9588.JPG', NULL, NULL),
(129, 124, 'https://artbabybh.com/uploads/products/124/1647068424_4183.JPG', NULL, NULL),
(130, 125, 'https://artbabybh.com/uploads/products/125/1647068549_5380.JPG', NULL, NULL),
(131, 126, 'https://artbabybh.com/uploads/products/126/1647068722_6564.jpg', NULL, NULL),
(132, 127, 'https://artbabybh.com/uploads/products/127/1647068987_4058.jpg', NULL, NULL),
(133, 128, 'https://artbabybh.com/uploads/products/128/1647069703_303.jpg', NULL, NULL),
(134, 129, 'https://artbabybh.com/uploads/products/129/1647069865_3114.jpg', NULL, NULL),
(135, 130, 'https://artbabybh.com/uploads/products/130/1647069977_9304.jpg', NULL, NULL),
(136, 131, 'https://artbabybh.com/uploads/products/131/1647070103_9252.jpg', NULL, NULL),
(137, 132, 'https://artbabybh.com/uploads/products/132/1647070211_504.jpg', NULL, NULL),
(138, 133, 'https://artbabybh.com/uploads/products/133/1647070314_4760.jpg', NULL, NULL),
(139, 134, 'https://artbabybh.com/uploads/products/134/1647070405_8695.jpg', NULL, NULL),
(140, 135, 'https://artbabybh.com/uploads/products/135/1647070503_9355.jpg', NULL, NULL),
(141, 136, 'https://artbabybh.com/uploads/products/136/1647089688_6509.JPG', NULL, NULL),
(142, 137, 'https://artbabybh.com/uploads/products/137/1647090081_5835.JPG', NULL, NULL),
(143, 138, 'https://artbabybh.com/uploads/products/138/1647090493_3960.JPG', NULL, NULL),
(144, 139, 'https://artbabybh.com/uploads/products/139/1647090617_4396.JPG', NULL, NULL),
(145, 140, 'https://artbabybh.com/uploads/products/140/1647090770_8676.jpg', NULL, NULL),
(146, 141, 'https://artbabybh.com/uploads/products/141/1647090874_7834.jpg', NULL, NULL),
(147, 142, 'https://artbabybh.com/uploads/products/142/1647107476_2947.jpg', NULL, NULL),
(148, 143, 'https://artbabybh.com/uploads/products/143/1647107560_9081.jpg', NULL, NULL),
(149, 144, 'https://artbabybh.com/uploads/products/144/1647107698_8957.jpg', NULL, NULL),
(150, 145, 'https://artbabybh.com/uploads/products/145/1647107905_9901.JPG', NULL, NULL),
(151, 146, 'https://artbabybh.com/uploads/products/146/1647108146_698.jpg', NULL, NULL),
(152, 147, 'https://artbabybh.com/uploads/products/147/1647108519_5584.jpg', NULL, NULL),
(153, 148, 'https://artbabybh.com/uploads/products/148/1647108641_1674.jpg', NULL, NULL),
(154, 149, 'https://artbabybh.com/uploads/products/149/1647108936_3044.jpg', NULL, NULL),
(155, 150, 'https://artbabybh.com/uploads/products/150/1647109234_8184.JPG', NULL, NULL),
(156, 151, 'https://artbabybh.com/uploads/products/151/1647109349_6914.JPG', NULL, NULL),
(157, 152, 'https://artbabybh.com/uploads/products/152/1647109589_2594.JPG', NULL, NULL),
(158, 153, 'https://artbabybh.com/uploads/products/153/1647109810_253.jpg', NULL, NULL),
(159, 154, 'https://artbabybh.com/uploads/products/154/1647110119_1629.JPG', NULL, NULL),
(160, 155, 'https://artbabybh.com/uploads/products/155/1647110224_7848.JPG', NULL, NULL),
(161, 156, 'https://artbabybh.com/uploads/products/156/1647110333_9417.JPG', NULL, NULL),
(162, 157, 'https://artbabybh.com/uploads/products/157/1647110806_8806.jpg', NULL, NULL),
(163, 158, 'https://artbabybh.com/uploads/products/158/1647110947_3471.jpg', NULL, NULL),
(164, 159, 'https://artbabybh.com/uploads/products/159/1647111098_4772.jpg', NULL, NULL),
(165, 160, 'https://artbabybh.com/uploads/products/160/1647111482_3243.jpg', NULL, NULL),
(166, 161, 'https://artbabybh.com/uploads/products/161/1647112482_2469.jpg', NULL, NULL),
(167, 162, 'https://artbabybh.com/uploads/products/162/1647112890_6824.jpg', NULL, NULL),
(168, 163, 'https://artbabybh.com/uploads/products/163/1647113081_4677.jpg', NULL, NULL),
(169, 164, 'https://artbabybh.com/uploads/products/164/1647113293_2263.jpg', NULL, NULL),
(170, 165, 'https://artbabybh.com/uploads/products/165/1647113445_420.jpg', NULL, NULL),
(171, 166, 'https://artbabybh.com/uploads/products/166/1647114047_5600.jpg', NULL, NULL),
(172, 167, 'https://artbabybh.com/uploads/products/167/1647114201_6781.jpg', NULL, NULL),
(173, 168, 'https://artbabybh.com/uploads/products/168/1647114308_5258.jpg', NULL, NULL),
(174, 169, 'https://artbabybh.com/uploads/products/169/1647114547_326.jpg', NULL, NULL),
(175, 170, 'https://artbabybh.com/uploads/products/170/1647114707_7293.jpg', NULL, NULL),
(176, 171, 'https://artbabybh.com/uploads/products/171/1647114904_5077.jpg', NULL, NULL),
(177, 172, 'https://artbabybh.com/uploads/products/172/1647115211_507.jpg', NULL, NULL),
(178, 173, 'https://artbabybh.com/uploads/products/173/1647115363_7231.jpg', NULL, NULL),
(179, 174, 'https://artbabybh.com/uploads/products/174/1647115454_3165.jpg', NULL, NULL),
(180, 175, 'https://artbabybh.com/uploads/products/175/1647115700_6520.jpg', NULL, NULL),
(181, 176, 'https://artbabybh.com/uploads/products/176/1647115940_9768.JPG', NULL, NULL),
(182, 177, 'https://artbabybh.com/uploads/products/177/1647116153_9362.jpg', NULL, NULL),
(183, 178, 'https://artbabybh.com/uploads/products/178/1647116969_645.jpg', NULL, NULL),
(184, 179, 'https://artbabybh.com/uploads/products/179/1647117183_5071.jpg', NULL, NULL),
(185, 180, 'https://artbabybh.com/uploads/products/180/1647118939_2664.jpg', NULL, NULL),
(186, 181, 'https://artbabybh.com/uploads/products/181/1647119201_9373.jpg', NULL, NULL),
(187, 182, 'https://artbabybh.com/uploads/products/182/1647119532_515.jpg', NULL, NULL),
(188, 183, 'https://artbabybh.com/uploads/products/183/1647119610_5769.jpg', NULL, NULL),
(189, 184, 'https://artbabybh.com/uploads/products/184/1647120016_2771.jpg', NULL, NULL),
(190, 185, 'https://artbabybh.com/uploads/products/185/1647120375_8510.jpg', NULL, NULL),
(191, 186, 'https://artbabybh.com/uploads/products/186/1647120726_9425.jpg', NULL, NULL),
(192, 187, 'https://artbabybh.com/uploads/products/187/1647120896_1081.jpg', NULL, NULL),
(193, 188, 'https://artbabybh.com/uploads/products/188/1647121094_1790.jpg', NULL, NULL),
(194, 189, 'https://artbabybh.com/uploads/products/189/1647121339_3405.jpg', NULL, NULL),
(195, 190, 'https://artbabybh.com/uploads/products/190/1647121424_7583.jpg', NULL, NULL),
(196, 191, 'https://artbabybh.com/uploads/products/191/1647121714_9346.jpg', NULL, NULL),
(197, 192, 'https://artbabybh.com/uploads/products/192/1647121916_4799.jpg', NULL, NULL),
(198, 193, 'https://artbabybh.com/uploads/products/193/1647122027_9173.jpg', NULL, NULL),
(199, 194, 'https://artbabybh.com/uploads/products/194/1647122339_4175.jpg', NULL, NULL),
(200, 195, 'https://artbabybh.com/uploads/products/195/1647122638_3388.jpg', NULL, NULL),
(201, 196, 'https://artbabybh.com/uploads/products/196/1647122843_3377.jpg', NULL, NULL),
(202, 197, 'https://artbabybh.com/uploads/products/197/1647122963_3878.jpg', NULL, NULL),
(203, 198, 'https://artbabybh.com/uploads/products/198/1647123059_1135.jpg', NULL, NULL),
(204, 199, 'https://artbabybh.com/uploads/products/199/1647123168_7640.jpg', NULL, NULL),
(205, 200, 'https://artbabybh.com/uploads/products/200/1647123260_3992.jpg', NULL, NULL),
(206, 201, 'https://artbabybh.com/uploads/products/201/1647123373_2975.jpg', NULL, NULL),
(207, 202, 'https://artbabybh.com/uploads/products/202/1647123505_7492.jpg', NULL, NULL),
(208, 203, 'https://artbabybh.com/uploads/products/203/1647123613_653.jpg', NULL, NULL),
(209, 204, 'https://artbabybh.com/uploads/products/204/1647123702_1233.jpg', NULL, NULL),
(210, 205, 'https://artbabybh.com/uploads/products/205/1647124172_697.jpg', NULL, NULL),
(211, 206, 'https://artbabybh.com/uploads/products/206/1647124410_3270.jpg', NULL, NULL),
(212, 207, 'https://artbabybh.com/uploads/products/207/1647124573_4076.jpg', NULL, NULL),
(213, 208, 'https://artbabybh.com/uploads/products/208/1647124891_4047.jpg', NULL, NULL),
(214, 209, 'https://artbabybh.com/uploads/products/209/1647125428_5631.jpg', NULL, NULL),
(215, 210, 'https://artbabybh.com/uploads/products/210/1647125527_7161.jpg', NULL, NULL),
(216, 211, 'https://artbabybh.com/uploads/products/211/1647125772_7057.JPG', NULL, NULL),
(217, 212, 'https://artbabybh.com/uploads/products/212/1647125882_6981.JPG', NULL, NULL),
(218, 213, 'https://artbabybh.com/uploads/products/213/1647126003_6049.JPG', NULL, NULL),
(219, 214, 'https://artbabybh.com/uploads/products/214/1647126356_905.JPG', NULL, NULL),
(220, 215, 'https://artbabybh.com/uploads/products/215/1647181365_4357.JPG', NULL, NULL),
(221, 216, 'https://artbabybh.com/uploads/products/216/1647185354_9133.JPG', NULL, NULL),
(222, 217, 'https://artbabybh.com/uploads/products/217/1647263800_1265.JPG', NULL, NULL),
(223, 218, 'https://artbabybh.com/uploads/products/218/1647265857_8792.JPG', NULL, NULL),
(224, 219, 'https://artbabybh.com/uploads/products/219/1647512312_3253.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name_ar`, `name_en`, `display`, `created_at`, `updated_at`) VALUES
(1, 'العكر', 'Al Eker', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(2, 'القدم', 'Al Qadam', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(3, 'القرية', 'Elqaraya', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(4, 'القضيبية', 'Qudaibiya', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(5, 'قلالي', 'Qalali', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(6, 'القلعة', 'Al Qalah', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(7, 'كرانة', 'Karranah', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(8, 'الحجر', 'Al Hajar', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(9, 'كرباباد', 'Karbabad', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(10, 'كرزكان', 'Karzakan', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(11, 'الماحوز', 'Mahooz', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(12, 'المالكية', 'Malkiah', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(13, 'مدينة حمد', 'Madinat Hamad', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(14, 'مدينة زايد', 'Zayed Town', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(15, 'مدينة عيسي', 'Isa Town', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(16, 'المحرق', 'Al Muharraq', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(17, 'مقابة', 'Maqabah', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(18, 'المقشع', 'Al Maqsha', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(19, 'المنامة', 'Manama', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(20, 'النبيه صالح', 'Nabih Saleh', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(21, 'النعيم', 'Alnaim', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(22, 'النويدرات', 'Nuwaidrat', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(23, 'الهملة', 'Al Hamala', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(24, 'البلاد القديم', 'Bilad Al Qadeem', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(25, 'الكورة', 'Kawarah', 1, '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(26, 'الحد', 'Hidd', 1, '2021-10-17 00:52:46', '2021-10-17 00:52:46'),
(27, 'عراد', 'Arad', 1, '2021-10-17 00:53:42', '2021-10-17 00:53:42'),
(28, 'الرفاع', 'Riffa', 1, '2021-10-17 02:00:48', '2021-10-17 02:00:48'),
(29, 'البسيتين', 'Busaiteen', 1, '2021-10-17 02:02:19', '2021-10-17 02:02:19'),
(30, 'البديع', 'Budaiya', 1, '2021-10-17 02:03:42', '2021-10-17 02:03:42'),
(31, 'سترة', 'Sitra', 1, '2021-10-17 02:04:33', '2021-10-17 02:04:33'),
(32, 'سار', 'Saar', 1, '2021-10-17 02:05:16', '2021-10-17 02:05:16'),
(33, 'الجنبية', 'Janabiyah', 1, '2021-10-17 02:06:28', '2021-10-17 02:06:28'),
(34, 'سند', 'Sanad', 1, '2021-10-17 02:07:15', '2021-10-17 02:07:15'),
(35, 'جد علي', 'Jid Ali', 1, '2021-10-17 02:07:51', '2021-10-17 02:07:51'),
(36, 'توبلي', 'Tubli', 1, '2021-10-17 02:08:36', '2021-10-17 02:08:36'),
(37, 'سماهيج', 'Samaheej', 1, '2021-10-17 02:09:21', '2021-10-17 02:09:21'),
(38, 'الزنج', 'Zinj', 1, '2021-10-17 02:10:05', '2021-10-17 02:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rate` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'accept_order', '1', 'public', '2021-06-07 10:22:08', '2022-03-13 00:04:33'),
(2, 'discount', '0', 'public', '2021-06-07 10:22:08', '2022-01-16 17:38:30'),
(3, 'VAT', '0', 'public', '2021-06-07 10:22:08', '2022-01-22 01:43:38'),
(40, 'delivery_cost_inside_online', '0.750', 'public', NULL, '2022-04-20 10:32:56'),
(5, 'min_order', '0', 'public', '2021-06-07 10:22:08', '2022-02-02 09:38:47'),
(6, 'about_ar', '<h3><strong>موقع متخصص في بيع ملابس الأطفال المختارة بعناية لتناسب أذواقكم وتلبي إحتاياجاتكم أهلا بكم في آرت بيبي&nbsp;</strong></h3>', 'about', '2021-06-07 10:22:08', '2022-03-04 22:26:46'),
(7, 'about_en', '<h3 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: #f8f9fa; border: none; padding: 2px 0px 2px 0.14em; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124;\" data-placeholder=\"الترجمة\"><strong><span class=\"Y2IQFc\" lang=\"en\">A site specializing in the sale of children\'s clothing carefully selected to suit your tastes and meet your needs Welcome to Art Baby</span></strong></h3>', 'about', '2021-06-07 10:22:08', '2022-03-04 21:04:27'),
(8, 'return_ar', '<h3 style=\"text-align: center;\">لايمكن تبديل واسترجاع القطع بعد أن يتم توصيلها&nbsp;</h3>\r\n<h3 style=\"text-align: center;\">&nbsp;</h3>\r\n<h3 style=\"text-align: center;\">يتم التعويض بالكامل في حال كانت تعاني أي قطعة من تلف أو تمزق</h3>\r\n<h3 style=\"text-align: center;\">&nbsp;</h3>\r\n<h3 style=\"text-align: center;\">المقاسات مصممة بعناية لتناسب عمر الطفل لذا عند الطلب يرجى اختيار مقاس عمر&nbsp; &nbsp; الطفل نفسه لتجنب أي مشكلة في القياسات ، وفي حال احتجتم للمساعدة لاتترددوا في&nbsp; طلبها من مستشارين البيع عن طريق المحادثة في الواتس آب حيث تتوفر لديهم جميع الارشادات</h3>', 'return', '2021-06-07 10:22:08', '2022-03-04 21:20:09'),
(9, 'return_en', '<h3 id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: #f8f9fa; border: none; padding: 2px 0px 2px 0.14em; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124; text-align: center;\" data-placeholder=\"الترجمة\"><span class=\"Y2IQFc\" lang=\"en\">Cloths cannot be exchanged or returned after they have been delivered</span></h3>\r\n<h3 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: #f8f9fa; border: none; padding: 2px 0px 2px 0.14em; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124; text-align: center;\" data-placeholder=\"الترجمة\">&nbsp;</h3>\r\n<h3 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: #f8f9fa; border: none; padding: 2px 0px 2px 0.14em; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124; text-align: center;\" data-placeholder=\"الترجمة\">&nbsp;</h3>\r\n<h3 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: #f8f9fa; border: none; padding: 2px 0px 2px 0.14em; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124; text-align: center;\" data-placeholder=\"الترجمة\"><span class=\"Y2IQFc\" lang=\"en\"> Full compensation is given if any piece is damaged or torn </span></h3>\r\n<h3 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: #f8f9fa; border: none; padding: 2px 0px 2px 0.14em; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124; text-align: center;\" data-placeholder=\"الترجمة\">&nbsp;</h3>\r\n<h3 class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 36px; background-color: #f8f9fa; border: none; padding: 2px 0px 2px 0.14em; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; font-family: inherit; overflow: hidden; width: 270px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124; text-align: center;\" data-placeholder=\"الترجمة\"><span class=\"Y2IQFc\" lang=\"en\">The sizes are carefully designed to fit the age of the child, so when ordering, please choose the size of the child&rsquo;s age itself to avoid any problem with the measurements, and in case you need help, do not hesitate to ask for it from the sales consultants via WhatsApp chat where they have all the instructions</span></h3>', 'return', '2021-06-07 10:22:08', '2022-03-04 21:22:08');
INSERT INTO `settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(10, 'terms_ar', '<p class=\"MsoNormal\" dir=\"RTL\" style=\"direction: rtl; unicode-bidi: embed; text-align: center;\"><span lang=\"AR-BH\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white; mso-bidi-language: AR-BH;\">لاستخدام موقع آرت بيبي </span></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"direction: rtl; unicode-bidi: embed; text-align: center;\"><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"direction: rtl; unicode-bidi: embed; text-align: center;\"><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تنطبق هذه الشروط والأحكام على استخدامك للموقع والتطبيق الإلكتروني</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> (</span><span dir=\"LTR\"><a href=\"http://www.artbabybh.com/\"><span style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; background: white;\">www.artbabybh.com</span></a></span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">).</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">باستخدام موقع </span><span lang=\"AR-BH\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white; mso-bidi-language: AR-BH;\">آرت بيبي</span><span dir=\"LTR\" lang=\"AR-BH\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">فأنت توافق على الالتزام بهذه الشروط والأحكام، وفي حال عدم موافقتك على الشروط والأحكام يتعين عليك عدم استخدام الموقع</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نحتفظ بحقنا بتغيير الشروط والأحكام من وقت لآخر وعليه يتعين عليك الاطلاع على هذه الشروط والأحكام بشكلٍ دوري، ولا يتوجب علينا الاتصال بك أو إعلامك بأي تغييرات تم إجراؤها على الشروط والأحكام، ويعتبر استمرار استخدامك للموقع</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">بمثابة موافقة على الشروط والأحكام المطبقة في وقت استخدامك للموقع والتطبيق كجزء من التزامنا بجعل موقعنا</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">مكانا ترغب في زيارته باستمرار فإننا نرحب بكافة تعليقاتك على أي من السياسات أو القواعد التي ندرجها أدناه</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تعريفات</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; \"</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أنت صيغة المخاطب\" تشير إلى مستخدم موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، وتراعى كافة التعبيرات المؤدية إلى ذلك</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; \"</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نحن صيغة المتحدث\" تعني ادارة موقع موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">وفريق العمل الخاص بها وتراعى كافة التعبيرات المؤدية إلى ذلك</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp;&nbsp; \"</span></span><span style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\"> <span lang=\"AR-SA\">موقع آرت بيبي</span></span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تشير إلى المعنى المحدد أعلاه</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; \"</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">معلومات المستخدم\" تعني التفاصيل الشخصية التي تقدمها لنا من خلال موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">&nbsp;</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; \"</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المستخدمون\" تعني مستخدمي موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">بعمومهم و/أو أفرادا حسبما يشير السياق</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; \"</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المحتوى\" تعني أي مراجعات، تعليقات، رسائل، بيانات، معلومات، نص، موسيقى، صوت، صورة، رسم، فيديو، رمز أو غيرها من المواد التي يتم بثها أو عرضها على موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">مباشرة أو من خلال موقع وتطبيق إلكتروني للغير</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; \"</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المعالجة الآلية\" تعني أي روبوت، عنكبوت، أدوات تحليل المحتوى المكتوب</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> (screen scraper)</span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، أدوات تجميع البيانات أو غيرها من أدوات أو روتين أو عملية آلية</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;</span><br /><br /></span><span dir=\"LTR\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">&nbsp;</span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">الشروط والأحكام</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تعني هذه الشروط والأحكام والتي قد تخضع للتعديل أو التغيير من وقت إلى آخر الاستخدام المشروع للدخول إلى موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يجب ألا يقل عمرك عن 18 عاما</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أن تكون ذا أهلية قانونية كاملة للتعاقد والتعامل والشراء</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يحتاج أي شخص أقل من 18 عاما يقوم باستخدام موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">إلى الحصول على موافقة والديه أو وصيه للقيام بذلك</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تقر وتتعهد بأنك تتمتع بالحق والقدرة القانونية على استخدام موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">حسب ما هو منصوص عليه في هذه الشروط والأحكام</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تقر بأن أي استخدام تقوم به لموقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">سيكون حسب ما هو منصوص عليه في الشروط التالية</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">:</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تلتزم بالقواعد المحددة التي تنطبق على أي ترويج تشارك فيه بأي شكل من خلال موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تلتزم بعدم القيام بأي شيء يكون من شأنه التأثير على تشغيل أو أمن موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أو يتسبب في انزعاج غير منطقي أو إساءة أو تعطيل لأي من المستخدمين الآخرين أو العاملين لدينا</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يجب ان لا تكون ممن سبق واستفاد من خدمات موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">وتم منعك أو حظرك من استخدام التطبيق أو الموقع</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يجب ان لا تكون منافسا لـ موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أو تقدم أي منتج مشابه لما يقدمه موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يتمثل المستخدم ومزود الخدمة لكافة القوانين واللوائح المعمول بها داخل الدولة التي تم تقديم الخدمة فيها</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يجب ان تقدم معلومات صحيحه ودقيقه لـ موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">كما يجب عليك الالتزام لأي اشعارات يقوم بها موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">فيما يخص الخدمات التي يقدمها&nbsp; لضمان عدم تعرقل أي عمليات تشغيليه يقوم بها</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يجب ان لا يكون استخدامك لخدمات موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">مسببا لأي إيذاء او مضايقه او ازعاج لأي شخص كان</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المحافظة على كامل المحتويات والارقام السرية للدخول لحسابك بشكل آمن</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يحق لموقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">إلغاء عملية البيع دون أن تبدي لك الأسباب</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أن عملية البيع لا تكون تامه إلا في حال أن وردك بريد إلكتروني باتمام الطلب</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">من أجل الوصول إلى موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، ستحتاج إلى الوصول إلى الإنترنت. تتحمل مسؤولية أي اتصال، أو خدمة أو رسوم مرتبطة بالوصول إلى الإنترنت وتوفير كافة المعدات اللازمة لتمكينك من الاتصال بالإنترنت (بما في ذلك الحاسوب والمودم وغيرها من الأجهزة الضرورية للوصول) نظرا لمحدودية قدرة كافة أجهزة الخادم (سيرفر) واستخدامها من قبل العديد من الأشخاص في الوقت نفسه، فإنك تلتزم بعدم استخدام موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">بأي شكل من الأشكال التي تؤدي إلى تخريب أو تتجاوز قدرة تحمل أجهزة الخادم (سيرفر) لدينا أو أي شبكة مرتبطة بأي من خوادمنا. كما يجب أن تمتنع عن استخدام موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">بأي شكل من الأشكال يؤدي، أو قد يؤدي منطقيا، بالتدخل في استخدام أي طرف آخر موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">على نحو يخالف، أو من المحتمل أن يخالف، أي قوانين مرعية ومطبقة، أو حقوق أو استحقاقات قانونية لأي طرف آخر وذلك طبقا لكافة القوانين المطبقة</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">توافق على الامتناع عن الأمور التالية (سواء قمت أنت بها شخصيا أو من خلال طرف ثالث</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">):</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">استخدام عملية آلية لمعالجة، مراقبة، نسخ، استخراج أي صفحات موجودة على موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، أو أي معلومات، أو محتوى أو بيانات يحتويها أو يتم الوصول إليها عن طريق موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، دون الحصول على موافقة خطية مسبقة من قبلنا</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">استخدام عملية آلية لتجميع أو دمج المعلومات، أو المحتوى أو البيانات التي يحتويها أو يمكن الوصول إليها عن طريق موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">مع المعلومات، أو المواد أو البيانات التي يتم الوصول إليها عن طريق، أو التي يكون مصدرها، طرف ثالث</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">استخدام أي عملية آلية للتدخل في أو محاولة التدخل في طريقة العمل السليمة لموقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">القيام بأي فعل يكون من شأنه فرض حمل كبير بشكل غير منطقي أو غير متناسب مع البنية التحتية المتاحة أو النطاق الترددي لموقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تطبيق هندسة عكسية، أو جمع عكسي، أو تفكيك، أو أي عمل آخر من شأنه اكتشاف رمز مصدري أو غيره من الصيغ الحسابية أو المعالجات فيما يخص برنامج الحاسوب المستخدم في البنية التحتية والعمليات المتعلقة بموقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نسخ، إعادة إنتاج، تغيير، تعديل، اشتقاق أعمال من، أو إقامة عرض عام، لأي جزء من محتوى موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">دون الموافقة الخطية المسبقة من قبلنا</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;</span><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المحتوى الذي ينتجه المستخدم</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">بتقديمك أي محتوى لموقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">فإنك تمنحنا ترخيصا غير حصريا، ومجانيا، ودائما، وقابلا للتحويل، وعالميا، غير قابلا للنقض، وقابل للترخيص الفرعي من أجل</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> :</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">استخدامه، وإعادة إنتاجه، وتعديله، وتحريره، وتكييفه، وترجمته، وتوزيعه، ونشره، ونسخه، وبثه وتوصيله بأي شكل من الأشكال، وفي أعمال مقتبسة منه لعرضه أو أدائه أمام جمهور في أي مكان في العالم ومن خلال أي وسيلة إعلامية، معروفة الآن أو يتم ابتداعها مستقبلا</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">استخدام الاسم الذي قمت بتقديمه بالترابط مع المحتوى. كما تمنحنا رخصة للملاحقة القانونية لأي شخص حقيقي أو اعتباري يخالف حقوقك أو حقوقنا في هذا المحتوى. وأنت تقر وتوافق على أن جميع المحتوى المقدم لموقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">من قِبلك هو غير سري وغير مملوك. كما تقر كافة الأشياء, وتنفيذ جميع الوثائق المطلوبة لتمكيننا والسماح لنا بالاستفادة المطلقة من الحقوق الممنوحة لنا حسب المتطلبات</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نحن غير ملزمون، ولا يلزمنا أي بند من بنود هذه الشروط والأحكام بأي شكل من الأشكال، باستخدام أي محتوى. إلى جانب ذلك، فإننا وفي حال استخدام المحتوى غير مطالبون بأداء أي التزامات مالية تجاهك نتيجة هذا الاستخدام</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span dir=\"LTR\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">&nbsp; </span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المواقع الإلكترونية للغير</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تقر وتوافق على أننا غير مسؤولين عن توافر أو محتوى أي موقع وتطبيق إلكتروني للغير والذي وصلت إليه عن طريق موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نحن لا نقر ولا يجوز بأي شكل كان أن نتحمل مسؤولية أي محتوى، أو إعلان، أو منتج، أو خدمة موجودة على أو متوفرة في مواقع إلكترونية للغير. ومع التقيد بالقوانين النافذة والتي لا يمكن استثنائها، فإننا لا نقدم ضمانات أو تعهدات أو التزامات مهما كانت (أ) فيما يخص نوعية، ودقة، وقابلية بيع، أو ملاءمة المادة للغرض منها، والمنتجات، والخدمات على أو متوافرة من خلال المواقع الإلكترونية للغير؛ أو (ب) أن المادة على أو المتوفرة من خلال المواقع الإلكترونية للغير لا تخالف حقوق الملكية الفكرية لأي شخص</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أي تعامل يتم بينك وبين أطراف ثالثة من معلنين أو تجار موجودين على أو من خلال موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، بما في ذلك الدفع مقابل، أو توصيل، المنتجات، والخدمات أو أي شروط وأحكام وضمانات، أو تعهدات مرتبطة بتلك التعاملات، فإنها تتم بينك وبين المعلن أو التاجر المعني. وعليه، فإننا لا نتحمل أية مسؤولية أو التزام نتيجة الخسارة أو الأضرار من أي نوع والتي حدثت نتيجة لمثل هذه التعاملات</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">الملكية الفكرية</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">إن حقوق النشر وكافة حقوق الملكية الفكرية الأخرى في كافة المواد والمحتوى الذي يتم توفيره كجزء من موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">هي ملك لنا أو مانحي الرخصة في كافة الأوقات</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يجوز لك استخدام هذه المادة أو المحتوى فقط على النحو المصرح به خطّيا من قبلنا أو من قبل مانحي الرخصة</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">لن تعمل على، ولن تقوم بمساعدة أو تسهيل عمل الغير على، نسخ المادة أو المحتوى، أو إعادة إنتاجه، بثه، توزيعه، تكييفه، استخدامه على نحو تجاري، أو إيجاد أعمال مبنية عليها</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">إذا علمت بوجود توزيع أو استغلال تجاري من أي نوع، فأنت توافق على إعلامنا بذلك مباشرة</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المسؤولية عن المعلومات التي يقدمها </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">مع التقيد بالمسؤوليات التي يقررها القانون والتي لا يمكن استثناؤها، فإننا وكل من مديرينا، أو موظفينا، أو وكلائنا، أو المتعاقدين معنا، لا نتحمل أي مسؤولية تجاهك نتيجة أي خسائر، أضرار، مسؤوليات، مطالبات، أو تكاليف (بما في ذلك دون تقييد ودون حصر التكاليف القانونية ورسوم الدفاع أو تكاليف التسوية) بأي شكل من الأشكال أو وجه من الوجوه، سواء على نحو مباشر، أو غير مباشر، أو كنتيجة ناشئة عن أو راجعة إلى الوصول إلى موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">من قبلك، أو محتوى، أو موقع وتطبيق إلكتروني للغير، أو خدمات الغير، بأي شكل نتجت، سواء في عقد، أو ضرر (بما في ذلك الإهمال)، أو قانون، أو غير ذلك</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نلتزم بالسعي الحثيث من أجل إحاطة موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">بكافة أشكال العناية المنطقية، باستثناء ما يلزم به القانون، فإننا لن نتحمل مسؤولية النوعية والدقة، وملاءمة غرض محدد في موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">ولا نقدم وعدا بأن المادة التي يحتويها موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، أو أي من الوظائف التي يحتويها موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أو أي من أجهزة الخادم لديه سوف يعمل دون انقطاع أو تأخير أو يكون دون أخطاء، وخاليا من الفيروسات أو الأخطاء البرمجية أو يعمل بتوافق مع أي برنامج آخر أو مادة أخرى</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">لا نتحمل مسؤولية تجاهك نتيجة أي خسائر أو أضرار قد تعاني منها أنت أو الغير نتيجة استخدام أو فيما يتصل بقيامك باستخدام موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">لا نتحمل مسؤولية تجاهك أو أي شخص آخر نتيجة أي خسارة ناجمة عن أمر لا سيطرة لنا عليه. وهذا يتضمن تعطل المعدات الإلكترونية أو الميكانيكية أو خطوط الاتصالات (بما في ذلك الهاتف، والكابل، والإنترنت)، أو الوصول غير المشروع، أو الرموز المخربة، أو السرقة، أو أخطاء التشغيل، أو الأحوال الجوية القاسية أو غير الاعتيادية (بما في ذلك الفيضانات، والزلازل، أو غيرها من أعمال القدر)، أو النار، أو الحرب، أو التمرد، أو الأعمال الإرهابية، أو الشغب، أو الخلافات العمالية، أو المشكلات العمالية الأخرى، أو الحوادث، أو الطوارئ، أو التأخير، أو الحجوزات الزائدة، أو الإلغاء.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">الخصوصية</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نهتم بخصوصيتك وأمنك بشكل كبير. ويتم جمع بعض البيانات لاستخدامها عن طريق موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">من أجل توفير خدمات عبر الإنترنت التي يتم توفيرها عن طريق موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">سوف يقوم موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">بتسجيل ومتابعة استخدامك لموقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">من خلال استخدام، على سبيل المثال لا الحصر، الملفات النصية القصيرة (كوكيز) وغيرها من أدوات وأجهزة المتابعة</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يخضع استخدام هذه البيانات لبنود سياسة الخصوصية التي نطبقها. تعتبر سياسية الخصوصية جزءا من هذه الشروط والأحكام ويجب أن تقرأها بالكامل. في حال عدم قبولك بالشروط في سياسة الخصوصية، فيتوجب عليك أن تمتنع عن استخدام موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نقر التزامنا بكافة تشريعات حماية الخصوصية المرعية وقت صدورها فيما يتعلق بأي معلومات شخصية تتعلق بك قمنا نحن بجمعها قد يطلب منك أن تدخل معلومات عن نفسك على صفحات مختلفة على موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">. </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">ونحن نلتزم بعدم استخدام هذه المعلومات التي زودتنا بها لأي غرض لم يتم إدراجه في سياسة الخصوصية، ولغير الغرض الذي يحدده كل موقع وتطبيق حيث يتم طلب مثل هذه المعلومات</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">..</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">السلامة</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نتعهد بالتزامنا المستمر من خلال سياستنا الخاصة بالسلامة بإتاحة استخدام موثوق لموقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">عند استخدام موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">وبخاصة، عند استخدام أي من المناطق التفاعلية المتوافرة على موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">، ويتوجب عليك دائما أخذ الاحتياطات التالية</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">:</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المحافظة على سرية هويتك. لا تعطي أي معلومات باستثناء تلك التي نطلبها تحديدا منك.</span></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"direction: rtl; unicode-bidi: embed; text-align: center;\"><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">التعويضات</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تقر وتوافق بتعويضنا نحن و/أو أي من الجهات المرتبطة بنا وموظفي، ومديري، والعاملين لدينا و/أو لدى الجهات المرتبطة بنا وبشكل فوري وعند الطلب، عن كافة المطالبات، والالتزامات، والخسائر، والتكاليف، بما في ذلك الرسوم القانونية الناشئة عن أي خرق أو مخالفة لهذه الشروط والأحكام من قبلك أنت أو غيرها من الأضرار الناشئة عن استخدامك لموقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">الإنهاء</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">نحتفظ بحقنا في الإنهاء الفوري لاستخدامك لموقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">في حال قيامك بخرق بنود هذه الشروط والأحكام أو في حال اعتقدنا بناء على أسباب منطقية أنك من الممكن أن تقوم بخرق بنود هذه الشروط والأحكام أو في حال قيامك بسلوك نرى أنه وبناء على تقديرنا المطلق غير مقبول</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">التواصل</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">في حال رغبت بإبداء أي تعليق موجه لنا حول موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أو في حال رغبت في توجيه أية أسئلة تتعلق بذلك رجاء تفضل بالاتصال بنا من خلال النموذج الموجود على موقع آرت بيبي</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.&nbsp;&nbsp;</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">الدفع والأسعار</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp;</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">يظهر كافة الأسعار في الموقع لكل منتج وتعتمد الأسعار لكل منتج قبل الطلب ويحتمل أن يختلف السعر بحسب المنطقة أو الدولة أو من طلب الخدمة كما أنه توجد اسعار ثابته لبعض المنتجات وهناك أسعار تعتمد على طبيعة الشحن، كما أنه يجوز لـ موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">تحديث الأسعار في أي وقت ويجب أن تكون على اطلاع دائم</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><br /></span><span lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">المسؤولية القانونية</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">لا يتحمل موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أي مسؤولية أضرار نتجت عن استخدام أو عدم القدرة على استخدام وسائل اتصال إلكترونية مع الموقع الإلكتروني</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;</span><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp;</span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">لا يتحمل في أي ظرف كان مسؤولية أي خطأ نتج عن مقدم الخدمة</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">أي ملاحظه على مزود الخدمة يجب تقديمها في تقييم خدمته لاتخاذ الاجراء اللازم بحقه من قبلنا كما ان موقع آرت بيبي</span><span dir=\"LTR\" lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\"> </span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">لا يتحمل أي سلوك أو إهمال أو جميع ما سبق من مزود الخدمة</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333;\"><br /><span style=\"background: white;\">&nbsp;&nbsp;&nbsp; </span></span><span lang=\"AR-SA\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-ascii-font-family: Tajawal; mso-hansi-font-family: Tajawal; mso-bidi-theme-font: minor-bidi; color: #333333; background: white;\">القانون المعمول به وحل النزاعات سيكون حسب النظام المتبع في مملكة البحرين</span><span dir=\"LTR\" style=\"font-size: 13.5pt; line-height: 115%; font-family: \'Tajawal\',serif; color: #333333; background: white;\">.</span></p>', 'terms', '2021-06-07 10:22:08', '2022-03-06 08:54:54');
INSERT INTO `settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(11, 'terms_en', '<p>-</p>', 'terms', '2021-06-07 10:22:08', '2022-03-04 22:09:59'),
(12, 'email', 'bh.artbaby@gmail.com', 'contact', '2021-06-07 10:22:08', '2022-01-21 23:49:05'),
(13, 'phone', '66622321', 'contact', '2021-06-07 10:22:08', '2022-01-16 17:41:02'),
(14, 'address_ar', 'المنامة - البحرين', 'contact', '2021-06-07 10:22:08', '2022-01-21 23:49:05'),
(15, 'address_en', 'MANAMA-BAHRAIN', 'contact', '2021-06-07 10:22:08', '2022-01-21 23:49:05'),
(16, 'facebook', 'https://www.facebook.com/artbabybh.artbabybh', 'contact', '2021-06-07 10:22:08', '2022-01-21 23:49:05'),
(17, 'twitter', 'http://twitter.com', 'contact', '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(18, 'instagram', 'https://instagram.com/artbaby_bh?utm_medium=copy_link', 'contact', '2021-06-07 10:22:08', '2022-01-21 23:49:05'),
(19, 'snapchat', 'http://snapchat.com', 'contact', '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(20, 'lat', '26.22170100683176', 'contact', '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(21, 'long', '50.58556788820532', 'contact', '2021-06-07 10:22:08', '2021-06-07 10:22:08'),
(22, 'whatsapp', '66622321', 'contact', '2021-06-26 18:45:33', '2022-01-28 11:32:43'),
(23, 'desc', 'موقع أرت بيبي', 'meta', NULL, '2022-01-16 17:43:59'),
(24, 'keywords', 'ملابس، تسوق،اطفال،مواليد', 'meta', NULL, '2022-03-11 10:51:45'),
(25, 'author', 'ارت بيبي', 'meta', NULL, '2022-01-16 17:44:10'),
(36, 'worktime_en', 'بإمكانكم الطلب إلكترونيا عبر الموقع في جميع الأوقات', 'contact', NULL, '2022-01-28 11:40:22'),
(27, 'about_title_ar', 'من نحن', 'about', NULL, '2022-01-20 13:11:51'),
(28, 'about_title_en', 'About us', 'about', NULL, '2022-01-20 13:11:51'),
(29, 'image', 'https://artbabybh.com/uploads/settings/1646424267.JPG', 'about', NULL, '2022-03-04 21:04:27'),
(30, 'terms_title_ar', 'الشروط والأحكام', 'terms', NULL, '2022-01-20 13:02:14'),
(31, 'terms_title_en', 'Terms and Conditions', 'terms', NULL, '2022-01-20 13:02:14'),
(32, 'image', 'https://artbabybh.com/uploads/settings/1646428199.png', 'terms', NULL, '2022-03-04 22:09:59'),
(33, 'return_title_ar', 'سياسة الإرجاع والاسترداد', 'return', NULL, '2022-01-20 13:04:11'),
(34, 'return_title_en', 'Return and refund policy', 'return', NULL, '2022-01-20 13:04:11'),
(35, 'image', 'https://artbabybh.com/uploads/settings/1646425209.png', 'return', NULL, '2022-03-04 21:20:09'),
(37, 'worktime_ar', 'بإمكانكم الطلب إلكترونيا عبر الموقع في جميع الأوقات', 'contact', NULL, '2022-01-28 11:41:04'),
(39, 'delivery_cost_outsize_cash', '6', 'public', NULL, '2022-03-19 08:42:11'),
(41, 'delivery_cost_outsize_online', '6', 'public', NULL, '2022-03-19 00:44:08'),
(42, 'delivery_cost_inside_cash', '0.750', 'public', NULL, '2022-03-19 09:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name_ar`, `name_en`, `display`, `created_at`, `updated_at`) VALUES
(13, '0-3 شهور', '0-3 MONTHS', 1, '2022-01-28 11:00:54', '2022-01-28 11:00:54'),
(14, '3-6 شهور', '3-6 MONTHS', 1, '2022-01-28 11:01:18', '2022-03-04 20:41:28'),
(17, '6-9 شهور', '6-9 MONTHS', 1, '2022-03-04 20:40:45', '2022-03-04 20:40:45'),
(18, '9-12 شهر', '9-12 MONTHS', 1, '2022-03-04 20:41:59', '2022-03-04 20:41:59'),
(19, '12-18 شهر', '12-18 MONTHS', 1, '2022-03-04 20:42:33', '2022-03-04 20:42:33'),
(20, '12-24 شهر', '12-24 MONTHS', 1, '2022-03-04 20:42:54', '2022-03-04 20:42:54'),
(21, '2-3 سنوات', '2-3 YEARS', 1, '2022-03-04 20:43:13', '2022-03-04 20:43:13'),
(22, '3-4 سنوات', '3-4 YEARS', 1, '2022-03-04 20:43:26', '2022-03-04 20:43:26'),
(23, '4-5 سنوات', '4-5 YEARS', 1, '2022-03-04 20:43:46', '2022-03-04 20:43:46'),
(24, '5-6 سنوات', '5-6 YEARS', 1, '2022-03-04 20:44:07', '2022-03-04 20:44:39'),
(25, '6-7 سنوات', '6-7 YEARS', 1, '2022-03-04 20:45:08', '2022-03-04 20:45:08'),
(26, '7-8 سنوات', '7-8 YEARS', 1, '2022-03-04 20:45:24', '2022-03-04 20:45:24'),
(27, '8-9 سنوات', '8-9 YEARS', 1, '2022-03-04 20:45:49', '2022-03-04 20:45:49'),
(28, '9-10 سنوات', '9-10 YEARS', 1, '2022-03-04 20:46:07', '2022-03-04 20:46:07'),
(29, '10-11 سنة', '10-11 YEARS', 1, '2022-03-04 20:46:40', '2022-03-04 20:46:40'),
(30, '11-12 سنة', '11-12 YEARS', 1, '2022-03-04 20:46:58', '2022-03-04 20:46:58'),
(31, '18-24 شهر', '18-24 MONTHS', 1, '2022-03-04 23:03:05', '2022-03-04 23:03:05'),
(32, '35.1x35.1 إنج', '35.1x35.1 Inch', 1, '2022-03-11 11:17:34', '2022-03-11 11:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `size_products`
--

CREATE TABLE `size_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size_products`
--

INSERT INTO `size_products` (`id`, `product_id`, `size_id`, `quantity`, `created_at`, `updated_at`) VALUES
(11, 3, 25, 0, NULL, '2022-05-02 12:27:13'),
(907, 219, 18, 9, '2022-04-27 08:21:32', '2022-04-27 08:21:32'),
(805, 4, 20, 0, NULL, NULL),
(906, 219, 17, 6, '2022-04-27 08:21:32', '2022-04-27 08:21:32'),
(789, 5, 23, 0, NULL, '2022-05-02 12:27:13'),
(756, 6, 23, 0, NULL, '2022-05-02 12:18:29'),
(751, 7, 23, 0, NULL, '2022-04-29 20:46:12'),
(737, 8, 31, 1, NULL, NULL),
(700, 9, 21, 0, NULL, '2022-05-14 16:41:30'),
(23, 10, 21, 1, '2022-03-04 23:18:33', '2022-03-04 23:18:33'),
(24, 10, 22, 1, '2022-03-04 23:18:33', '2022-03-04 23:18:33'),
(25, 11, 21, 0, '2022-03-04 23:21:40', '2022-05-02 15:34:19'),
(26, 12, 21, 1, '2022-03-04 23:23:30', '2022-03-04 23:23:30'),
(27, 13, 22, 0, '2022-03-04 23:24:59', '2022-05-02 15:34:19'),
(28, 14, 23, 0, '2022-03-04 23:35:18', '2022-04-29 20:46:12'),
(29, 15, 17, 1, '2022-03-04 23:38:59', '2022-03-04 23:38:59'),
(30, 15, 18, 1, '2022-03-04 23:38:59', '2022-03-04 23:38:59'),
(31, 16, 23, 0, '2022-03-04 23:42:32', '2022-05-14 16:40:25'),
(32, 16, 26, 1, '2022-03-04 23:42:32', '2022-05-29 08:55:01'),
(33, 17, 22, 1, '2022-03-04 23:46:33', '2022-03-04 23:46:33'),
(34, 17, 23, 0, '2022-03-04 23:46:33', '2022-05-02 12:18:29'),
(35, 18, 21, 1, '2022-03-04 23:48:10', '2022-03-04 23:48:10'),
(36, 18, 22, 1, '2022-03-04 23:48:10', '2022-03-04 23:48:10'),
(37, 19, 21, 1, '2022-03-04 23:51:00', '2022-03-04 23:51:00'),
(38, 19, 22, 1, '2022-03-04 23:51:00', '2022-03-04 23:51:00'),
(39, 19, 23, 2, '2022-03-04 23:51:00', '2022-03-04 23:51:00'),
(40, 19, 25, 2, '2022-03-04 23:51:00', '2022-03-04 23:51:00'),
(41, 19, 26, 1, '2022-03-04 23:51:00', '2022-03-04 23:51:00'),
(688, 20, 18, 0, NULL, '2022-03-13 15:56:29'),
(43, 21, 17, 2, '2022-03-05 00:57:13', '2022-03-05 00:57:13'),
(44, 22, 31, 2, '2022-03-05 01:02:48', '2022-03-05 01:02:48'),
(45, 23, 17, 1, '2022-03-05 01:04:27', '2022-05-08 09:31:47'),
(46, 24, 18, 1, '2022-03-05 01:11:24', '2022-03-05 01:11:24'),
(47, 25, 14, 1, '2022-03-05 01:15:39', '2022-05-08 09:09:17'),
(48, 25, 17, 1, '2022-03-05 01:15:39', '2022-03-05 01:15:39'),
(49, 25, 18, 1, '2022-03-05 01:15:39', '2022-05-08 09:09:17'),
(50, 26, 23, 0, '2022-03-05 22:42:38', '2022-03-16 12:43:47'),
(51, 26, 27, 1, '2022-03-05 22:42:38', '2022-03-05 22:42:38'),
(52, 27, 23, 0, '2022-03-05 22:48:04', '2022-05-01 11:30:50'),
(53, 28, 20, 0, '2022-03-05 22:55:38', '2022-05-02 15:36:06'),
(54, 29, 19, 3, '2022-03-05 23:02:51', '2022-03-05 23:02:51'),
(55, 29, 20, 2, '2022-03-05 23:02:51', '2022-03-05 23:02:51'),
(56, 30, 21, 1, '2022-03-05 23:05:53', '2022-03-05 23:05:53'),
(57, 30, 22, 2, '2022-03-05 23:05:53', '2022-03-05 23:05:53'),
(58, 31, 19, 1, '2022-03-05 23:11:14', '2022-05-02 15:36:06'),
(59, 32, 19, 1, '2022-03-05 23:15:15', '2022-03-05 23:15:15'),
(60, 33, 17, 1, '2022-03-05 23:17:47', '2022-03-05 23:17:47'),
(61, 34, 23, 1, '2022-03-05 23:22:28', '2022-03-05 23:22:28'),
(62, 34, 24, 1, '2022-03-05 23:22:28', '2022-03-05 23:22:28'),
(63, 35, 21, 1, '2022-03-05 23:24:59', '2022-03-05 23:24:59'),
(64, 36, 31, 0, '2022-03-05 23:28:58', '2022-04-12 02:06:32'),
(736, 37, 19, 2, NULL, NULL),
(66, 38, 17, 1, '2022-03-05 23:36:53', '2022-03-05 23:36:53'),
(67, 38, 18, 1, '2022-03-05 23:36:53', '2022-03-05 23:36:53'),
(68, 38, 19, 1, '2022-03-05 23:36:53', '2022-03-05 23:36:53'),
(69, 39, 18, 1, '2022-03-05 23:39:00', '2022-03-05 23:39:00'),
(912, 40, 31, 1, '2022-04-30 03:21:15', '2022-04-30 03:21:15'),
(911, 40, 21, 0, '2022-04-30 03:21:15', '2022-04-30 03:21:15'),
(910, 41, 21, 1, '2022-04-30 03:20:30', '2022-04-30 03:20:30'),
(73, 42, 20, 1, '2022-03-05 23:50:29', '2022-03-05 23:50:29'),
(74, 43, 22, 1, '2022-03-05 23:59:52', '2022-03-05 23:59:52'),
(75, 43, 23, 1, '2022-03-05 23:59:52', '2022-03-05 23:59:52'),
(76, 44, 22, 1, '2022-03-06 00:02:00', '2022-03-06 00:02:00'),
(77, 44, 23, 1, '2022-03-06 00:02:00', '2022-03-06 00:02:00'),
(90, 46, 21, 1, '2022-03-11 08:54:01', '2022-03-11 08:54:01'),
(91, 47, 18, 1, '2022-03-11 08:58:44', '2022-03-11 08:58:44'),
(92, 48, 19, 1, '2022-03-11 09:00:43', '2022-03-11 09:00:43'),
(93, 49, 18, 1, '2022-03-11 09:05:58', '2022-03-11 09:05:58'),
(94, 49, 19, 1, '2022-03-11 09:05:58', '2022-03-11 09:05:58'),
(95, 50, 13, 2, '2022-03-11 09:10:33', '2022-03-11 09:10:33'),
(97, 51, 17, 1, NULL, NULL),
(98, 52, 21, 1, '2022-03-11 09:19:13', '2022-03-11 09:19:13'),
(99, 53, 21, 2, '2022-03-11 09:21:23', '2022-03-11 09:21:23'),
(100, 53, 23, 1, '2022-03-11 09:21:23', '2022-03-11 09:21:23'),
(101, 54, 21, 1, '2022-03-11 09:46:39', '2022-03-11 09:46:39'),
(102, 55, 18, 1, '2022-03-11 09:50:38', '2022-03-11 09:50:38'),
(103, 56, 21, 3, '2022-03-11 10:05:32', '2022-03-11 10:05:32'),
(104, 56, 31, 1, '2022-03-11 10:05:32', '2022-03-11 10:05:32'),
(105, 57, 18, 1, '2022-03-11 10:07:00', '2022-03-11 10:07:00'),
(106, 57, 31, 1, '2022-03-11 10:07:00', '2022-03-11 10:07:00'),
(107, 58, 14, 2, '2022-03-11 10:11:08', '2022-03-11 10:11:08'),
(108, 58, 17, 1, '2022-03-11 10:11:08', '2022-03-11 10:11:08'),
(109, 58, 18, 1, '2022-03-11 10:11:08', '2022-03-11 10:11:08'),
(110, 59, 18, 1, '2022-03-11 10:12:38', '2022-03-11 10:12:38'),
(111, 60, 18, 2, '2022-03-11 10:17:50', '2022-03-11 10:17:50'),
(112, 60, 19, 1, '2022-03-11 10:17:50', '2022-03-11 10:17:50'),
(113, 60, 31, 2, '2022-03-11 10:17:50', '2022-03-11 10:17:50'),
(114, 61, 18, 1, '2022-03-11 10:19:20', '2022-03-11 10:19:20'),
(115, 61, 31, 1, '2022-03-11 10:19:20', '2022-05-01 06:58:55'),
(116, 62, 14, 2, '2022-03-11 10:23:48', '2022-03-11 10:23:48'),
(117, 63, 14, 1, '2022-03-11 10:27:17', '2022-03-11 10:27:17'),
(119, 64, 17, 2, NULL, NULL),
(120, 65, 19, 1, '2022-03-11 10:36:13', '2022-03-11 10:36:13'),
(121, 66, 17, 3, '2022-03-11 10:37:54', '2022-03-11 10:37:54'),
(122, 67, 17, 1, '2022-03-11 10:46:03', '2022-03-11 10:46:03'),
(735, 37, 18, 2, NULL, NULL),
(734, 37, 17, 4, NULL, NULL),
(126, 68, 14, 2, '2022-03-11 10:57:11', '2022-03-11 10:57:11'),
(127, 69, 14, 2, '2022-03-11 10:58:27', '2022-03-11 10:58:27'),
(128, 70, 17, 2, '2022-03-11 11:02:34', '2022-03-11 11:02:34'),
(129, 71, 31, 1, '2022-03-11 11:06:49', '2022-03-11 11:06:49'),
(130, 72, 21, 1, '2022-03-11 11:11:27', '2022-03-11 11:11:27'),
(131, 72, 22, 1, '2022-03-11 11:11:27', '2022-03-11 11:11:27'),
(132, 72, 23, 1, '2022-03-11 11:11:27', '2022-03-11 11:11:27'),
(133, 72, 24, 1, '2022-03-11 11:11:27', '2022-03-11 11:11:27'),
(134, 73, 22, 1, '2022-03-11 11:15:31', '2022-03-11 11:15:31'),
(135, 73, 23, 2, '2022-03-11 11:15:31', '2022-03-11 11:15:31'),
(136, 73, 24, 2, '2022-03-11 11:15:31', '2022-03-11 11:15:31'),
(798, 74, 32, 0, NULL, NULL),
(138, 75, 17, 1, '2022-03-11 11:24:36', '2022-03-11 11:24:36'),
(139, 75, 21, 3, '2022-03-11 11:24:36', '2022-03-11 11:24:36'),
(909, 76, 18, 1, '2022-04-30 03:11:09', '2022-04-30 03:11:09'),
(908, 76, 14, 2, '2022-04-30 03:11:09', '2022-04-30 03:11:09'),
(142, 77, 14, 2, '2022-03-11 11:31:25', '2022-03-11 11:31:25'),
(143, 77, 17, 1, '2022-03-11 11:31:25', '2022-03-11 11:31:25'),
(144, 77, 18, 2, '2022-03-11 11:31:25', '2022-03-11 11:31:25'),
(145, 78, 14, 1, '2022-03-11 11:33:11', '2022-03-11 11:33:11'),
(146, 78, 17, 1, '2022-03-11 11:33:11', '2022-03-11 11:33:11'),
(147, 79, 17, 0, '2022-03-11 11:34:53', '2022-04-26 09:50:54'),
(148, 80, 18, 1, '2022-03-11 11:48:52', '2022-03-11 11:48:52'),
(149, 80, 19, 2, '2022-03-11 11:48:52', '2022-03-11 11:48:52'),
(150, 81, 13, 0, '2022-03-11 11:52:07', '2022-05-24 12:26:58'),
(151, 81, 14, 1, '2022-03-11 11:52:07', '2022-03-11 11:52:07'),
(152, 82, 14, 2, '2022-03-11 11:53:50', '2022-03-11 11:53:50'),
(153, 82, 17, 2, '2022-03-11 11:53:50', '2022-03-11 11:53:50'),
(154, 83, 14, 1, '2022-03-11 11:56:08', '2022-03-11 11:56:08'),
(155, 84, 18, 1, '2022-03-11 11:58:44', '2022-03-11 11:58:44'),
(156, 85, 14, 2, '2022-03-11 12:02:49', '2022-03-11 12:02:49'),
(157, 85, 17, 2, '2022-03-11 12:02:49', '2022-03-11 12:02:49'),
(158, 85, 18, 2, '2022-03-11 12:02:49', '2022-03-11 12:02:49'),
(159, 86, 18, 1, '2022-03-11 12:05:37', '2022-03-11 12:05:37'),
(160, 87, 24, 0, '2022-03-11 12:07:56', '2022-03-25 21:34:53'),
(161, 88, 31, 1, '2022-03-11 12:09:42', '2022-03-11 12:09:42'),
(804, 89, 23, 0, NULL, NULL),
(803, 89, 22, 1, NULL, NULL),
(164, 90, 21, 1, '2022-03-11 12:15:02', '2022-03-11 12:15:02'),
(165, 91, 22, 2, '2022-03-11 12:16:36', '2022-03-11 12:16:36'),
(166, 91, 31, 2, '2022-03-11 12:16:36', '2022-03-11 12:16:36'),
(167, 92, 22, 1, '2022-03-11 12:17:57', '2022-03-11 12:17:57'),
(168, 92, 23, 2, '2022-03-11 12:17:57', '2022-03-11 12:17:57'),
(169, 93, 14, 2, '2022-03-11 12:22:07', '2022-03-11 12:22:07'),
(170, 94, 13, 1, '2022-03-11 12:25:59', '2022-03-11 12:25:59'),
(171, 95, 13, 2, '2022-03-11 12:27:48', '2022-03-23 11:34:23'),
(172, 95, 17, 4, '2022-03-11 12:27:48', '2022-03-11 12:27:48'),
(173, 95, 18, 1, '2022-03-11 12:27:48', '2022-03-11 12:27:48'),
(174, 95, 20, 1, '2022-03-11 12:27:48', '2022-03-11 12:27:48'),
(175, 96, 17, 1, '2022-03-11 12:29:33', '2022-03-11 12:29:33'),
(176, 96, 18, 1, '2022-03-11 12:29:33', '2022-03-11 12:29:33'),
(177, 97, 13, 3, '2022-03-11 12:31:57', '2022-03-23 11:34:23'),
(178, 97, 14, 1, '2022-03-11 12:31:57', '2022-03-11 12:31:57'),
(179, 97, 17, 4, '2022-03-11 12:31:57', '2022-03-11 12:31:57'),
(180, 97, 18, 1, '2022-03-11 12:31:57', '2022-03-11 12:31:57'),
(181, 97, 20, 3, '2022-03-11 12:31:57', '2022-03-11 12:31:57'),
(182, 98, 13, 2, '2022-03-11 12:33:40', '2022-03-23 11:34:23'),
(183, 98, 17, 1, '2022-03-11 12:33:40', '2022-03-11 12:33:40'),
(184, 98, 18, 3, '2022-03-11 12:33:40', '2022-03-11 12:33:40'),
(923, 99, 20, 1, '2022-04-30 03:29:55', '2022-04-30 03:29:55'),
(922, 99, 17, 4, '2022-04-30 03:29:55', '2022-04-30 03:29:55'),
(921, 99, 14, 1, '2022-04-30 03:29:55', '2022-04-30 03:29:55'),
(920, 99, 13, 1, '2022-04-30 03:29:55', '2022-04-30 03:29:55'),
(189, 100, 13, 2, '2022-03-11 12:37:54', '2022-03-23 11:34:23'),
(190, 100, 14, 2, '2022-03-11 12:37:54', '2022-03-11 12:37:54'),
(191, 100, 17, 1, '2022-03-11 12:37:54', '2022-03-11 12:37:54'),
(192, 100, 20, 1, '2022-03-11 12:37:54', '2022-03-11 12:37:54'),
(193, 101, 14, 2, '2022-03-11 12:39:58', '2022-03-11 12:39:58'),
(194, 101, 17, 2, '2022-03-11 12:39:58', '2022-03-11 12:39:58'),
(195, 101, 18, 1, '2022-03-11 12:39:58', '2022-03-11 12:39:58'),
(196, 101, 20, 2, '2022-03-11 12:39:58', '2022-03-11 12:39:58'),
(197, 102, 13, 1, '2022-03-11 12:42:05', '2022-03-11 12:42:05'),
(198, 102, 14, 1, '2022-03-11 12:42:05', '2022-03-11 12:42:05'),
(199, 102, 17, 3, '2022-03-11 12:42:05', '2022-03-11 12:42:05'),
(200, 102, 18, 1, '2022-03-11 12:42:05', '2022-03-11 12:42:05'),
(201, 102, 20, 1, '2022-03-11 12:42:05', '2022-03-11 12:42:05'),
(202, 103, 13, 4, '2022-03-11 12:45:07', '2022-03-11 12:45:07'),
(203, 103, 14, 4, '2022-03-11 12:45:07', '2022-03-11 12:45:07'),
(204, 103, 17, 3, '2022-03-11 12:45:07', '2022-03-11 12:45:07'),
(205, 103, 18, 1, '2022-03-11 12:45:07', '2022-03-11 12:45:07'),
(206, 103, 20, 2, '2022-03-11 12:45:07', '2022-03-11 12:45:07'),
(207, 104, 13, 4, '2022-03-11 12:48:32', '2022-03-11 12:48:32'),
(208, 104, 14, 3, '2022-03-11 12:48:32', '2022-03-11 12:48:32'),
(209, 104, 17, 2, '2022-03-11 12:48:32', '2022-03-11 12:48:32'),
(210, 104, 18, 2, '2022-03-11 12:48:32', '2022-03-11 12:48:32'),
(211, 104, 20, 2, '2022-03-11 12:48:32', '2022-03-11 12:48:32'),
(212, 105, 13, 3, '2022-03-11 12:50:16', '2022-03-11 12:50:16'),
(213, 105, 14, 4, '2022-03-11 12:50:16', '2022-03-11 12:50:16'),
(214, 105, 17, 2, '2022-03-11 12:50:16', '2022-03-11 12:50:16'),
(215, 105, 18, 1, '2022-03-11 12:50:16', '2022-03-11 12:50:16'),
(216, 106, 13, 3, '2022-03-11 12:52:05', '2022-03-11 12:52:05'),
(217, 106, 14, 4, '2022-03-11 12:52:05', '2022-03-11 12:52:05'),
(218, 106, 17, 2, '2022-03-11 12:52:05', '2022-03-11 12:52:05'),
(219, 106, 18, 2, '2022-03-11 12:52:05', '2022-03-11 12:52:05'),
(220, 106, 20, 2, '2022-03-11 12:52:05', '2022-03-11 12:52:05'),
(221, 107, 13, 3, '2022-03-11 12:54:03', '2022-03-11 12:54:03'),
(222, 107, 14, 4, '2022-03-11 12:54:03', '2022-03-11 12:54:03'),
(223, 107, 17, 2, '2022-03-11 12:54:03', '2022-03-11 12:54:03'),
(224, 107, 18, 2, '2022-03-11 12:54:03', '2022-03-11 12:54:03'),
(225, 107, 20, 2, '2022-03-11 12:54:03', '2022-03-11 12:54:03'),
(226, 108, 13, 4, '2022-03-11 12:56:09', '2022-03-11 12:56:09'),
(227, 108, 17, 3, '2022-03-11 12:56:09', '2022-03-11 12:56:09'),
(228, 108, 18, 2, '2022-03-11 12:56:09', '2022-03-11 12:56:09'),
(229, 108, 20, 1, '2022-03-11 12:56:09', '2022-03-11 12:56:09'),
(230, 109, 13, 3, '2022-03-11 12:57:56', '2022-03-11 12:57:56'),
(231, 109, 14, 3, '2022-03-11 12:57:56', '2022-03-11 12:57:56'),
(232, 109, 17, 3, '2022-03-11 12:57:56', '2022-03-11 12:57:56'),
(233, 109, 18, 1, '2022-03-11 12:57:56', '2022-03-11 12:57:56'),
(234, 109, 20, 2, '2022-03-11 12:57:56', '2022-03-11 12:57:56'),
(927, 110, 20, 2, '2022-04-30 03:30:25', '2022-04-30 03:30:25'),
(926, 110, 17, 3, '2022-04-30 03:30:25', '2022-04-30 03:30:25'),
(925, 110, 14, 2, '2022-04-30 03:30:25', '2022-04-30 03:30:25'),
(924, 110, 13, 1, '2022-04-30 03:30:25', '2022-04-30 03:30:25'),
(239, 111, 13, 3, '2022-03-11 13:02:08', '2022-03-11 13:02:08'),
(240, 111, 14, 4, '2022-03-11 13:02:08', '2022-03-11 13:02:08'),
(241, 111, 17, 3, '2022-03-11 13:02:08', '2022-03-11 13:02:08'),
(242, 111, 18, 2, '2022-03-11 13:02:08', '2022-03-11 13:02:08'),
(243, 111, 20, 1, '2022-03-11 13:02:08', '2022-03-11 13:02:08'),
(244, 112, 17, 3, '2022-03-11 13:04:29', '2022-03-11 13:04:29'),
(245, 112, 18, 1, '2022-03-11 13:04:29', '2022-03-11 13:04:29'),
(246, 112, 20, 1, '2022-03-11 13:04:29', '2022-03-11 13:04:29'),
(247, 113, 18, 1, '2022-03-11 13:06:05', '2022-03-11 13:06:05'),
(248, 113, 20, 1, '2022-03-11 13:06:05', '2022-03-11 13:06:05'),
(249, 114, 13, 0, '2022-03-11 13:07:41', '2022-03-17 22:35:21'),
(250, 114, 14, 1, '2022-03-11 13:07:41', '2022-03-11 13:07:41'),
(251, 114, 17, 1, '2022-03-11 13:07:41', '2022-03-11 13:07:41'),
(252, 115, 17, 2, '2022-03-11 13:10:03', '2022-03-11 13:10:03'),
(253, 116, 18, 1, '2022-03-11 13:11:13', '2022-03-11 13:11:13'),
(254, 117, 13, 0, '2022-03-11 13:12:30', '2022-03-23 11:34:23'),
(255, 117, 14, 1, '2022-03-11 13:12:30', '2022-03-11 13:12:30'),
(256, 117, 17, 1, '2022-03-11 13:12:30', '2022-03-11 13:12:30'),
(257, 118, 13, 1, '2022-03-11 13:13:59', '2022-03-11 13:13:59'),
(258, 118, 14, 1, '2022-03-11 13:13:59', '2022-03-11 13:13:59'),
(259, 118, 20, 1, '2022-03-11 13:13:59', '2022-03-11 13:13:59'),
(260, 119, 17, 3, '2022-03-11 13:16:16', '2022-03-11 13:16:16'),
(261, 120, 19, 1, '2022-03-12 07:50:48', '2022-03-12 07:50:48'),
(262, 120, 21, 1, '2022-03-12 07:50:48', '2022-03-12 07:50:48'),
(263, 120, 22, 1, '2022-03-12 07:50:48', '2022-03-12 07:50:48'),
(264, 120, 31, 1, '2022-03-12 07:50:48', '2022-03-12 07:50:48'),
(265, 121, 21, 1, '2022-03-12 07:52:22', '2022-03-12 07:52:22'),
(266, 121, 22, 1, '2022-03-12 07:52:22', '2022-03-12 07:52:22'),
(267, 121, 31, 1, '2022-03-12 07:52:22', '2022-03-12 07:52:22'),
(268, 122, 19, 1, '2022-03-12 07:53:59', '2022-03-12 07:53:59'),
(269, 122, 31, 2, '2022-03-12 07:53:59', '2022-03-12 07:53:59'),
(802, 123, 24, 0, NULL, NULL),
(271, 124, 23, 1, '2022-03-12 08:00:24', '2022-03-12 08:00:24'),
(272, 124, 24, 1, '2022-03-12 08:00:24', '2022-03-12 08:00:24'),
(273, 124, 31, 1, '2022-03-12 08:00:24', '2022-03-12 08:00:24'),
(274, 125, 23, 1, '2022-03-12 08:02:29', '2022-03-12 08:02:29'),
(801, 126, 24, 0, NULL, NULL),
(276, 127, 18, 2, '2022-03-12 08:09:47', '2022-03-12 08:09:47'),
(277, 128, 21, 1, '2022-03-12 08:21:43', '2022-03-12 08:21:43'),
(957, 129, 30, 1, '2022-05-04 23:01:29', '2022-05-04 23:01:29'),
(956, 129, 29, 1, '2022-05-04 23:01:29', '2022-05-04 23:01:29'),
(955, 129, 28, 0, '2022-05-04 23:01:29', '2022-05-04 23:01:29'),
(954, 129, 27, 0, '2022-05-04 23:01:29', '2022-05-04 23:01:29'),
(953, 129, 26, 1, '2022-05-04 23:01:29', '2022-05-04 23:01:29'),
(952, 129, 21, 1, '2022-05-04 23:01:29', '2022-05-04 23:01:29'),
(973, 130, 30, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(972, 130, 29, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(971, 130, 28, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(970, 130, 26, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(969, 130, 24, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(968, 130, 23, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(967, 130, 22, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(966, 130, 21, 1, '2022-05-08 22:49:47', '2022-05-08 22:49:47'),
(292, 131, 21, 2, '2022-03-12 08:28:23', '2022-03-12 08:28:23'),
(293, 131, 22, 1, '2022-03-12 08:28:23', '2022-03-12 08:28:23'),
(294, 131, 23, 0, '2022-03-12 08:28:23', '2022-04-30 17:48:08'),
(295, 131, 25, 0, '2022-03-12 08:28:23', '2022-05-01 11:07:19'),
(296, 131, 26, 0, '2022-03-12 08:28:23', '2022-05-01 11:07:19'),
(297, 131, 27, 1, '2022-03-12 08:28:23', '2022-03-12 08:28:23'),
(298, 131, 29, 1, '2022-03-12 08:28:23', '2022-03-12 08:28:23'),
(299, 132, 21, 1, '2022-03-12 08:30:11', '2022-03-12 08:30:11'),
(300, 132, 28, 1, '2022-03-12 08:30:11', '2022-03-12 08:30:11'),
(301, 132, 30, 0, '2022-03-12 08:30:11', '2022-05-01 22:37:48'),
(302, 133, 25, 1, '2022-03-12 08:31:54', '2022-03-12 08:31:54'),
(303, 133, 28, 1, '2022-03-12 08:31:54', '2022-03-12 08:31:54'),
(304, 133, 29, 1, '2022-03-12 08:31:54', '2022-03-12 08:31:54'),
(305, 133, 30, 1, '2022-03-12 08:31:54', '2022-03-12 08:31:54'),
(306, 134, 23, 0, '2022-03-12 08:33:25', '2022-04-30 17:54:40'),
(307, 134, 26, 0, '2022-03-12 08:33:25', '2022-04-30 17:54:40'),
(308, 134, 27, 0, '2022-03-12 08:33:25', '2022-05-02 12:15:19'),
(309, 135, 21, 1, '2022-03-12 08:35:03', '2022-03-12 08:35:03'),
(310, 135, 28, 1, '2022-03-12 08:35:03', '2022-03-12 08:35:03'),
(311, 135, 29, 1, '2022-03-12 08:35:03', '2022-03-12 08:35:03'),
(312, 135, 30, 0, '2022-03-12 08:35:03', '2022-05-01 22:37:48'),
(937, 136, 17, 0, '2022-05-01 03:00:01', '2022-05-01 03:00:01'),
(314, 137, 21, 2, '2022-03-12 14:01:21', '2022-03-12 14:01:21'),
(315, 137, 22, 1, '2022-03-12 14:01:21', '2022-03-12 14:01:21'),
(316, 138, 24, 1, '2022-03-12 14:08:13', '2022-03-12 14:08:13'),
(800, 139, 22, 0, NULL, NULL),
(318, 140, 19, 2, '2022-03-12 14:12:50', '2022-03-12 14:12:50'),
(319, 140, 21, 1, '2022-03-12 14:12:50', '2022-03-12 14:12:50'),
(320, 140, 22, 2, '2022-03-12 14:12:50', '2022-03-12 14:12:50'),
(321, 140, 31, 1, '2022-03-12 14:12:50', '2022-03-12 14:12:50'),
(322, 141, 19, 1, '2022-03-12 14:14:34', '2022-03-12 14:14:34'),
(323, 141, 21, 1, '2022-03-12 14:14:34', '2022-03-12 14:14:34'),
(324, 141, 22, 2, '2022-03-12 14:14:34', '2022-03-12 14:14:34'),
(325, 141, 31, 2, '2022-03-12 14:14:34', '2022-03-12 14:14:34'),
(326, 142, 18, 0, '2022-03-12 18:51:16', '2022-04-26 09:50:54'),
(945, 143, 18, 0, '2022-05-01 03:01:18', '2022-05-01 03:01:18'),
(328, 144, 17, 2, '2022-03-12 18:54:58', '2022-03-12 18:54:58'),
(329, 144, 18, 1, '2022-03-12 18:54:58', '2022-03-12 18:54:58'),
(330, 145, 14, 1, '2022-03-12 18:58:25', '2022-03-12 18:58:25'),
(331, 145, 17, 2, '2022-03-12 18:58:25', '2022-03-12 18:58:25'),
(332, 145, 18, 1, '2022-03-12 18:58:25', '2022-03-12 18:58:25'),
(333, 145, 19, 2, '2022-03-12 18:58:25', '2022-03-12 18:58:25'),
(334, 146, 17, 1, '2022-03-12 19:02:26', '2022-03-12 19:02:26'),
(335, 146, 18, 1, '2022-03-12 19:02:26', '2022-03-12 19:02:26'),
(336, 147, 14, 1, '2022-03-12 19:08:39', '2022-03-12 19:08:39'),
(337, 147, 17, 2, '2022-03-12 19:08:39', '2022-03-12 19:08:39'),
(338, 147, 18, 2, '2022-03-12 19:08:39', '2022-03-12 19:08:39'),
(339, 148, 31, 1, '2022-03-12 19:10:41', '2022-03-12 19:10:41'),
(941, 149, 31, 1, '2022-05-01 03:00:29', '2022-05-01 03:00:29'),
(940, 149, 19, 0, '2022-05-01 03:00:29', '2022-05-01 03:00:29'),
(939, 149, 17, 2, '2022-05-01 03:00:29', '2022-05-01 03:00:29'),
(938, 149, 14, 1, '2022-05-01 03:00:29', '2022-05-01 03:00:29'),
(799, 150, 19, 0, NULL, NULL),
(345, 151, 19, 1, '2022-03-12 19:22:29', '2022-03-12 19:22:29'),
(346, 151, 21, 1, '2022-03-12 19:22:29', '2022-03-12 19:22:29'),
(347, 151, 22, 1, '2022-03-12 19:22:29', '2022-03-12 19:22:29'),
(348, 151, 23, 2, '2022-03-12 19:22:29', '2022-03-12 19:22:29'),
(350, 152, 13, 1, '2022-03-12 19:26:29', '2022-03-12 19:26:29'),
(351, 152, 18, 1, '2022-03-12 19:26:29', '2022-03-12 19:26:29'),
(352, 153, 13, 4, '2022-03-12 19:30:10', '2022-03-12 19:30:10'),
(353, 153, 14, 4, '2022-03-12 19:30:10', '2022-03-12 19:30:10'),
(354, 153, 18, 3, '2022-03-12 19:30:10', '2022-03-12 19:30:10'),
(355, 153, 19, 2, '2022-03-12 19:30:10', '2022-03-12 19:30:10'),
(797, 154, 31, 1, NULL, NULL),
(796, 154, 22, 2, NULL, NULL),
(795, 154, 21, 2, NULL, NULL),
(794, 154, 19, 1, NULL, NULL),
(914, 155, 22, 2, '2022-04-30 03:23:08', '2022-04-30 03:23:08'),
(913, 155, 21, 1, '2022-04-30 03:23:08', '2022-04-30 03:23:08'),
(362, 156, 19, 4, '2022-03-12 19:38:53', '2022-03-12 19:38:53'),
(363, 156, 22, 2, '2022-03-12 19:38:53', '2022-03-12 19:38:53'),
(364, 156, 31, 2, '2022-03-12 19:38:53', '2022-03-12 19:38:53'),
(733, 157, 30, 0, NULL, '2022-05-03 05:40:27'),
(732, 157, 29, 1, NULL, '2022-05-02 15:12:24'),
(731, 157, 28, 0, NULL, '2022-05-02 12:32:05'),
(730, 157, 27, 0, NULL, '2022-05-02 15:12:24'),
(729, 157, 25, 0, NULL, '2022-05-01 11:23:01'),
(728, 157, 24, 0, NULL, '2022-04-30 18:08:58'),
(727, 157, 23, 1, NULL, '2022-05-01 11:23:01'),
(726, 157, 22, 1, NULL, NULL),
(725, 157, 21, 2, NULL, NULL),
(724, 158, 30, 2, NULL, NULL),
(723, 158, 29, 2, NULL, NULL),
(722, 158, 28, 2, NULL, NULL),
(721, 158, 27, 2, NULL, NULL),
(720, 158, 26, 1, NULL, NULL),
(719, 158, 25, 2, NULL, NULL),
(718, 158, 24, 2, NULL, NULL),
(717, 158, 23, 2, NULL, NULL),
(716, 158, 22, 1, NULL, NULL),
(715, 158, 21, 2, NULL, NULL),
(439, 159, 30, 2, NULL, NULL),
(438, 159, 29, 2, NULL, NULL),
(437, 159, 28, 2, NULL, NULL),
(436, 159, 27, 2, NULL, NULL),
(435, 159, 26, 2, NULL, NULL),
(434, 159, 25, 1, NULL, NULL),
(433, 159, 24, 2, NULL, NULL),
(432, 159, 23, 2, NULL, NULL),
(431, 159, 22, 2, NULL, NULL),
(430, 159, 21, 2, NULL, NULL),
(936, 160, 29, 2, '2022-05-01 02:59:35', '2022-05-01 02:59:35'),
(935, 160, 28, 0, '2022-05-01 02:59:35', '2022-05-02 15:08:37'),
(934, 160, 27, 1, '2022-05-01 02:59:35', '2022-05-01 02:59:35'),
(933, 160, 26, 0, '2022-05-01 02:59:35', '2022-05-02 15:08:37'),
(932, 160, 25, 0, '2022-05-01 02:59:35', '2022-05-01 11:20:00'),
(931, 160, 24, 0, '2022-05-01 02:59:35', '2022-05-01 02:59:35'),
(930, 160, 23, 0, '2022-05-01 02:59:35', '2022-05-01 11:20:00'),
(929, 160, 22, 1, '2022-05-01 02:59:35', '2022-05-01 02:59:35'),
(928, 160, 21, 2, '2022-05-01 02:59:35', '2022-05-01 02:59:35'),
(767, 161, 29, 1, NULL, NULL),
(766, 161, 28, 2, NULL, NULL),
(765, 161, 27, 1, NULL, NULL),
(764, 161, 26, 0, NULL, '2022-05-01 11:30:50'),
(763, 161, 25, 0, NULL, '2022-05-01 11:10:47'),
(762, 161, 23, 0, NULL, '2022-05-01 11:10:47'),
(761, 161, 22, 2, NULL, NULL),
(760, 161, 21, 2, NULL, NULL),
(477, 162, 30, 2, NULL, NULL),
(476, 162, 29, 2, NULL, NULL),
(475, 162, 28, 2, NULL, NULL),
(474, 162, 27, 2, NULL, NULL),
(473, 162, 26, 2, NULL, NULL),
(472, 162, 25, 2, NULL, NULL),
(471, 162, 24, 2, NULL, NULL),
(470, 162, 23, 1, NULL, NULL),
(469, 162, 22, 1, NULL, NULL),
(468, 162, 21, 1, NULL, NULL),
(460, 163, 21, 2, '2022-03-12 20:24:41', '2022-03-12 20:24:41'),
(461, 163, 22, 2, '2022-03-12 20:24:41', '2022-03-12 20:24:41'),
(462, 163, 23, 0, '2022-03-12 20:24:41', '2022-04-30 18:52:41'),
(463, 163, 24, 0, '2022-03-12 20:24:41', '2022-03-16 12:43:47'),
(464, 163, 25, 0, '2022-03-12 20:24:41', '2022-05-02 12:11:34'),
(465, 163, 27, 2, '2022-03-12 20:24:41', '2022-03-12 20:24:41'),
(466, 163, 28, 1, '2022-03-12 20:24:41', '2022-03-12 20:24:41'),
(467, 163, 29, 1, '2022-03-12 20:24:41', '2022-03-12 20:24:41'),
(478, 164, 22, 0, '2022-03-12 20:28:13', '2022-03-16 12:43:47'),
(479, 164, 23, 1, '2022-03-12 20:28:13', '2022-03-12 20:28:13'),
(480, 164, 24, 2, '2022-03-12 20:28:13', '2022-03-12 20:28:13'),
(481, 164, 26, 1, '2022-03-12 20:28:13', '2022-05-03 05:40:27'),
(482, 164, 27, 1, '2022-03-12 20:28:13', '2022-03-16 12:43:47'),
(483, 164, 28, 1, '2022-03-12 20:28:13', '2022-03-12 20:28:13'),
(484, 164, 29, 2, '2022-03-12 20:28:13', '2022-03-12 20:28:13'),
(485, 164, 30, 1, '2022-03-12 20:28:13', '2022-03-12 20:28:13'),
(769, 165, 29, 0, NULL, '2022-05-02 12:32:05'),
(768, 165, 25, 0, NULL, '2022-05-02 12:11:34'),
(494, 166, 14, 1, '2022-03-12 20:40:47', '2022-03-12 20:40:47'),
(495, 166, 17, 1, '2022-03-12 20:40:47', '2022-03-12 20:40:47'),
(496, 166, 18, 1, '2022-03-12 20:40:47', '2022-03-12 20:40:47'),
(497, 166, 19, 1, '2022-03-12 20:40:47', '2022-03-12 20:40:47'),
(498, 166, 31, 1, '2022-03-12 20:40:47', '2022-03-12 20:40:47'),
(499, 167, 14, 1, '2022-03-12 20:43:21', '2022-03-12 20:43:21'),
(500, 167, 18, 1, '2022-03-12 20:43:21', '2022-03-12 20:43:21'),
(501, 167, 19, 0, '2022-03-12 20:43:21', '2022-04-26 09:50:54'),
(502, 168, 14, 1, '2022-03-12 20:45:08', '2022-03-12 20:45:08'),
(503, 168, 18, 1, '2022-03-12 20:45:08', '2022-03-12 20:45:08'),
(504, 168, 19, 1, '2022-03-12 20:45:08', '2022-03-12 20:45:08'),
(505, 168, 31, 1, '2022-03-12 20:45:08', '2022-03-12 20:45:08'),
(511, 169, 31, 1, NULL, NULL),
(510, 169, 19, 1, NULL, NULL),
(509, 169, 18, 1, NULL, NULL),
(512, 170, 14, 1, '2022-03-12 20:51:47', '2022-03-12 20:51:47'),
(513, 170, 17, 1, '2022-03-12 20:51:47', '2022-03-12 20:51:47'),
(514, 170, 18, 1, '2022-03-12 20:51:47', '2022-03-12 20:51:47'),
(515, 170, 19, 1, '2022-03-12 20:51:47', '2022-03-12 20:51:47'),
(516, 170, 31, 1, '2022-03-12 20:51:47', '2022-03-12 20:51:47'),
(517, 171, 14, 1, '2022-03-12 20:55:04', '2022-03-12 20:55:04'),
(518, 171, 17, 1, '2022-03-12 20:55:04', '2022-03-12 20:55:04'),
(519, 171, 18, 1, '2022-03-12 20:55:04', '2022-03-12 20:55:04'),
(520, 171, 19, 1, '2022-03-12 20:55:04', '2022-03-12 20:55:04'),
(521, 171, 31, 1, '2022-03-12 20:55:04', '2022-03-12 20:55:04'),
(522, 172, 13, 2, '2022-03-12 21:00:11', '2022-03-12 21:00:11'),
(523, 172, 17, 1, '2022-03-12 21:00:11', '2022-03-12 21:00:11'),
(524, 172, 18, 2, '2022-03-12 21:00:11', '2022-03-12 21:00:11'),
(525, 172, 19, 2, '2022-03-12 21:00:11', '2022-05-01 06:58:55'),
(526, 173, 13, 1, '2022-03-12 21:02:43', '2022-03-12 21:02:43'),
(527, 173, 14, 1, '2022-03-12 21:02:43', '2022-03-12 21:02:43'),
(528, 173, 17, 3, '2022-03-12 21:02:43', '2022-03-12 21:02:43'),
(529, 173, 18, 2, '2022-03-12 21:02:43', '2022-03-12 21:02:43'),
(530, 173, 19, 2, '2022-03-12 21:02:43', '2022-03-12 21:02:43'),
(531, 174, 18, 3, '2022-03-12 21:04:14', '2022-03-12 21:04:14'),
(532, 174, 19, 1, '2022-03-12 21:04:14', '2022-03-12 21:04:14'),
(786, 175, 18, 2, NULL, NULL),
(785, 175, 14, 2, NULL, NULL),
(784, 175, 13, 0, NULL, NULL),
(536, 176, 17, 1, '2022-03-12 21:12:20', '2022-03-12 21:12:20'),
(537, 176, 18, 1, '2022-03-12 21:12:20', '2022-03-12 21:12:20'),
(538, 177, 14, 2, '2022-03-12 21:15:53', '2022-03-12 21:15:53'),
(539, 177, 18, 3, '2022-03-12 21:15:53', '2022-03-12 21:15:53'),
(540, 177, 19, 3, '2022-03-12 21:15:53', '2022-03-12 21:15:53'),
(825, 178, 31, 1, NULL, NULL),
(824, 178, 19, 1, NULL, NULL),
(823, 178, 17, 2, NULL, NULL),
(822, 178, 14, 2, NULL, NULL),
(545, 179, 13, 2, '2022-03-12 21:33:03', '2022-03-12 21:33:03'),
(546, 179, 14, 1, '2022-03-12 21:33:03', '2022-03-12 21:33:03'),
(547, 179, 17, 2, '2022-03-12 21:33:03', '2022-03-12 21:33:03'),
(548, 179, 18, 1, '2022-03-12 21:33:03', '2022-03-12 21:33:03'),
(549, 179, 19, 2, '2022-03-12 21:33:03', '2022-03-12 21:33:03'),
(550, 180, 13, 2, '2022-03-12 22:02:19', '2022-03-12 22:02:19'),
(551, 180, 17, 1, '2022-03-12 22:02:19', '2022-03-12 22:02:19'),
(552, 181, 13, 2, '2022-03-12 22:06:41', '2022-03-12 22:06:41'),
(553, 181, 18, 1, '2022-03-12 22:06:41', '2022-03-12 22:06:41'),
(554, 182, 13, 1, '2022-03-12 22:12:12', '2022-03-23 11:34:23'),
(555, 182, 14, 1, '2022-03-12 22:12:12', '2022-03-12 22:12:12'),
(556, 182, 18, 2, '2022-03-12 22:12:12', '2022-03-12 22:12:12'),
(557, 183, 13, 0, '2022-03-12 22:13:30', '2022-05-24 12:26:58'),
(558, 183, 18, 2, '2022-03-12 22:13:30', '2022-03-12 22:13:30'),
(944, 184, 18, 3, '2022-05-01 03:00:50', '2022-05-01 03:00:50'),
(943, 184, 17, 3, '2022-05-01 03:00:50', '2022-05-01 03:00:50'),
(942, 184, 13, 2, '2022-05-01 03:00:50', '2022-05-01 03:00:50'),
(562, 185, 13, 1, '2022-03-12 22:26:15', '2022-03-12 22:26:15'),
(563, 185, 14, 2, '2022-03-12 22:26:15', '2022-03-12 22:26:15'),
(564, 185, 17, 3, '2022-03-12 22:26:15', '2022-03-12 22:26:15'),
(565, 185, 18, 4, '2022-03-12 22:26:15', '2022-03-12 22:26:15'),
(919, 186, 17, 6, '2022-04-30 03:28:27', '2022-04-30 03:28:27'),
(918, 186, 14, 5, '2022-04-30 03:28:27', '2022-04-30 03:28:27'),
(917, 186, 13, 3, '2022-04-30 03:28:27', '2022-04-30 03:28:27'),
(916, 187, 14, 4, '2022-04-30 03:25:27', '2022-04-30 03:25:27'),
(915, 187, 13, 5, '2022-04-30 03:25:27', '2022-04-30 03:25:27'),
(714, 188, 18, 1, NULL, NULL),
(713, 188, 13, 1, NULL, NULL),
(573, 189, 31, 3, '2022-03-12 22:42:19', '2022-03-12 22:42:19'),
(574, 190, 18, 3, '2022-03-12 22:43:44', '2022-03-12 22:43:44'),
(575, 190, 19, 3, '2022-03-12 22:43:44', '2022-03-12 22:43:44'),
(777, 191, 19, 0, NULL, NULL),
(776, 191, 18, 1, NULL, NULL),
(775, 191, 17, 1, NULL, NULL),
(774, 191, 13, 1, NULL, NULL),
(580, 192, 17, 2, '2022-03-12 22:51:56', '2022-03-12 22:51:56'),
(581, 192, 18, 2, '2022-03-12 22:51:56', '2022-03-12 22:51:56'),
(582, 192, 19, 1, '2022-03-12 22:51:56', '2022-03-12 22:51:56'),
(583, 192, 31, 2, '2022-03-12 22:51:56', '2022-03-12 22:51:56'),
(584, 193, 14, 2, '2022-03-12 22:53:47', '2022-03-12 22:53:47'),
(585, 193, 17, 1, '2022-03-12 22:53:47', '2022-03-12 22:53:47'),
(586, 193, 18, 2, '2022-03-12 22:53:47', '2022-03-12 22:53:47'),
(587, 193, 19, 2, '2022-03-12 22:53:47', '2022-03-12 22:53:47'),
(588, 193, 31, 2, '2022-03-12 22:53:47', '2022-03-12 22:53:47'),
(589, 194, 13, 1, '2022-03-12 22:58:59', '2022-03-12 22:58:59'),
(590, 194, 14, 1, '2022-03-12 22:58:59', '2022-03-12 22:58:59'),
(591, 194, 17, 1, '2022-03-12 22:58:59', '2022-03-12 22:58:59'),
(592, 194, 18, 1, '2022-03-12 22:58:59', '2022-03-12 22:58:59'),
(593, 194, 19, 1, '2022-03-12 22:58:59', '2022-03-12 22:58:59'),
(594, 195, 13, 1, '2022-03-12 23:03:58', '2022-03-12 23:03:58'),
(595, 195, 14, 1, '2022-03-12 23:03:58', '2022-03-12 23:03:58'),
(596, 195, 17, 1, '2022-03-12 23:03:58', '2022-03-12 23:03:58'),
(597, 195, 18, 1, '2022-03-12 23:03:58', '2022-03-12 23:03:58'),
(598, 195, 19, 1, '2022-03-12 23:03:58', '2022-03-12 23:03:58'),
(599, 196, 13, 1, '2022-03-12 23:07:23', '2022-03-12 23:07:23'),
(600, 196, 14, 1, '2022-03-12 23:07:23', '2022-03-12 23:07:23'),
(601, 196, 17, 1, '2022-03-12 23:07:23', '2022-03-12 23:07:23'),
(602, 196, 19, 1, '2022-03-12 23:07:23', '2022-03-12 23:07:23'),
(603, 197, 14, 1, '2022-03-12 23:09:23', '2022-03-12 23:09:23'),
(604, 197, 17, 1, '2022-03-12 23:09:23', '2022-03-12 23:09:23'),
(605, 197, 18, 1, '2022-03-12 23:09:23', '2022-03-12 23:09:23'),
(606, 197, 19, 1, '2022-03-12 23:09:23', '2022-03-12 23:09:23'),
(607, 198, 13, 1, '2022-03-12 23:10:59', '2022-03-12 23:10:59'),
(608, 198, 14, 1, '2022-03-12 23:10:59', '2022-03-12 23:10:59'),
(609, 198, 17, 1, '2022-03-12 23:10:59', '2022-03-12 23:10:59'),
(610, 198, 18, 1, '2022-03-12 23:10:59', '2022-03-12 23:10:59'),
(611, 198, 19, 1, '2022-03-12 23:10:59', '2022-03-12 23:10:59'),
(612, 199, 13, 1, '2022-03-12 23:12:48', '2022-03-12 23:12:48'),
(613, 199, 17, 1, '2022-03-12 23:12:48', '2022-03-12 23:12:48'),
(614, 199, 18, 1, '2022-03-12 23:12:48', '2022-03-12 23:12:48'),
(615, 199, 19, 1, '2022-03-12 23:12:48', '2022-03-12 23:12:48'),
(616, 200, 13, 1, '2022-03-12 23:14:20', '2022-03-12 23:14:20'),
(617, 200, 14, 1, '2022-03-12 23:14:20', '2022-03-12 23:14:20'),
(618, 200, 17, 1, '2022-03-12 23:14:20', '2022-03-12 23:14:20'),
(619, 200, 18, 1, '2022-03-12 23:14:20', '2022-03-12 23:14:20'),
(620, 200, 19, 1, '2022-03-12 23:14:20', '2022-03-12 23:14:20'),
(621, 201, 13, 1, '2022-03-12 23:16:13', '2022-03-12 23:16:13'),
(622, 201, 14, 1, '2022-03-12 23:16:13', '2022-03-12 23:16:13'),
(623, 201, 17, 1, '2022-03-12 23:16:13', '2022-03-12 23:16:13'),
(624, 201, 18, 1, '2022-03-12 23:16:13', '2022-03-12 23:16:13'),
(625, 201, 19, 1, '2022-03-12 23:16:13', '2022-03-12 23:16:13'),
(626, 202, 13, 1, '2022-03-12 23:18:25', '2022-03-12 23:18:25'),
(627, 202, 17, 1, '2022-03-12 23:18:25', '2022-03-12 23:18:25'),
(628, 202, 18, 1, '2022-03-12 23:18:25', '2022-03-12 23:18:25'),
(629, 202, 19, 1, '2022-03-12 23:18:25', '2022-03-12 23:18:25'),
(630, 203, 13, 1, '2022-03-12 23:20:13', '2022-03-12 23:20:13'),
(631, 203, 17, 1, '2022-03-12 23:20:13', '2022-03-12 23:20:13'),
(632, 203, 18, 1, '2022-03-12 23:20:13', '2022-03-12 23:20:13'),
(633, 203, 19, 1, '2022-03-12 23:20:13', '2022-03-12 23:20:13'),
(831, 204, 19, 0, NULL, NULL),
(830, 204, 18, 1, NULL, NULL),
(636, 205, 14, 1, '2022-03-12 23:29:32', '2022-03-12 23:29:32'),
(637, 205, 18, 2, '2022-03-12 23:29:32', '2022-03-12 23:29:32'),
(638, 205, 19, 2, '2022-03-12 23:29:32', '2022-03-12 23:29:32'),
(639, 205, 21, 2, '2022-03-12 23:29:32', '2022-03-12 23:29:32'),
(640, 205, 31, 2, '2022-03-12 23:29:32', '2022-03-12 23:29:32'),
(641, 206, 14, 1, '2022-03-12 23:33:30', '2022-03-12 23:33:30'),
(642, 206, 18, 2, '2022-03-12 23:33:30', '2022-03-12 23:33:30'),
(643, 206, 19, 1, '2022-03-12 23:33:30', '2022-03-12 23:33:30'),
(644, 206, 21, 1, '2022-03-12 23:33:30', '2022-03-12 23:33:30'),
(645, 207, 14, 1, '2022-03-12 23:36:13', '2022-03-12 23:36:13'),
(646, 208, 13, 1, '2022-03-12 23:41:31', '2022-03-12 23:41:31'),
(647, 208, 14, 1, '2022-03-12 23:41:31', '2022-03-12 23:41:31'),
(648, 208, 17, 1, '2022-03-12 23:41:31', '2022-03-12 23:41:31'),
(649, 208, 18, 1, '2022-03-12 23:41:31', '2022-03-12 23:41:31'),
(650, 208, 19, 1, '2022-03-12 23:41:31', '2022-03-12 23:41:31'),
(651, 209, 31, 1, '2022-03-12 23:50:28', '2022-03-12 23:50:28'),
(652, 210, 22, 1, '2022-03-12 23:52:07', '2022-03-12 23:52:07'),
(653, 210, 31, 1, '2022-03-12 23:52:07', '2022-03-12 23:52:07'),
(654, 211, 13, 2, '2022-03-12 23:56:12', '2022-03-12 23:56:12'),
(655, 211, 14, 1, '2022-03-12 23:56:12', '2022-03-12 23:56:12'),
(656, 211, 17, 2, '2022-03-12 23:56:12', '2022-03-12 23:56:12'),
(657, 211, 20, 1, '2022-03-12 23:56:12', '2022-03-12 23:56:12'),
(658, 212, 13, 1, '2022-03-12 23:58:02', '2022-03-12 23:58:02'),
(659, 212, 14, 1, '2022-03-12 23:58:02', '2022-03-12 23:58:02'),
(660, 212, 17, 2, '2022-03-12 23:58:02', '2022-03-12 23:58:02'),
(754, 218, 26, 0, '2022-03-14 14:50:57', '2022-03-14 14:54:47'),
(750, 213, 20, 2, NULL, '2022-05-29 08:56:06'),
(749, 213, 18, 1, NULL, NULL),
(748, 213, 17, 2, NULL, NULL),
(747, 213, 14, 1, NULL, NULL),
(905, 219, 14, 3, '2022-04-27 08:21:32', '2022-04-27 08:21:32'),
(746, 213, 13, 1, NULL, NULL),
(755, 218, 27, 0, '2022-03-14 14:50:57', '2022-03-14 15:01:04'),
(904, 219, 13, 0, '2022-04-27 08:21:32', '2022-04-27 08:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `display`, `created_at`, `updated_at`, `title`, `product_id`, `type`) VALUES
(21, 'https://artbabybh.com/uploads/slider/1647067194.jpg', 1, '2022-03-12 07:39:54', '2022-03-12 07:39:54', 'قيمة التوصيل', NULL, '1'),
(22, 'https://artbabybh.com/uploads/slider/1647067231.jpg', 1, '2022-03-12 07:40:31', '2022-03-12 07:40:31', 'مدة التوصيل', NULL, '1'),
(23, 'https://artbabybh.com/uploads/slider/1647067254.jpg', 1, '2022-03-12 07:40:54', '2022-03-12 07:40:54', 'تسوق عبر موقعنا', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://artbabybh.com/uploads/lily.png',
  `display` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` decimal(9,3) NOT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `client_id`, `order_id`, `transaction_number`, `value`, `result`, `type`, `created_at`, `updated_at`) VALUES
(1, 8, 47, NULL, 0.750, 'success', '47', '2022-02-11 14:16:01', '2022-02-11 14:16:01'),
(2, 8, 50, NULL, 0.750, 'success', '50', '2022-02-11 14:26:45', '2022-02-11 14:26:45'),
(3, 7, 76, '', 0.010, 'not success', 'credit', '2022-02-16 16:15:46', '2022-02-16 16:15:46'),
(4, 7, 77, '1b9597b2efc14029', 0.010, 'success', 'credit', '2022-02-16 16:23:35', '2022-02-16 16:23:35'),
(5, 7, 84, '145202204786632363', 0.010, 'success', 'debit', '2022-02-16 16:52:45', '2022-02-16 16:52:45'),
(6, 8, 85, '145202204722567971', 0.750, 'success', 'debit', '2022-02-16 21:59:34', '2022-02-16 21:59:34'),
(7, 8, 87, '42e497688acf41d1', 0.750, 'success', 'credit', '2022-02-16 22:05:03', '2022-02-16 22:05:03'),
(8, 8, 2, '145202207213248532', 1.750, 'success', 'debit', '2022-03-13 00:09:02', '2022-03-13 00:09:02'),
(9, 8, 3, '145202207260143873', 1.250, 'success', 'debit', '2022-03-13 14:55:39', '2022-03-13 14:55:39'),
(10, 8, 5, '71820999abbd4e7b', 1.250, 'success', 'credit', '2022-03-13 15:09:06', '2022-03-13 15:09:06'),
(11, 8, 1, '145202207240874563', 1.000, 'success', 'debit', '2022-03-13 15:29:45', '2022-03-13 15:29:45'),
(12, 8, 1, '145202207240874563', 1.000, 'success', 'debit', '2022-03-13 15:30:37', '2022-03-13 15:30:37'),
(13, 8, 2, '145202207258958511', 1.000, 'success', 'debit', '2022-03-13 15:35:27', '2022-03-13 15:35:27'),
(14, 7, 6, '145202207258305019', 0.020, 'success', 'debit', '2022-03-13 15:56:58', '2022-03-13 15:56:58'),
(15, 11, 8, '145202207257159465', 0.800, 'success', 'debit', '2022-03-13 16:36:59', '2022-03-13 16:36:59'),
(16, 11, 10, 'cab28a18e44b4da1', 0.800, 'success', 'credit', '2022-03-13 16:43:19', '2022-03-13 16:43:19'),
(17, 14, 11, '145202207332036864', 1.125, 'success', 'debit', '2022-03-14 14:22:04', '2022-03-14 14:22:04'),
(18, 11, 12, '0498931eb0544eac', 1.000, 'success', 'credit', '2022-03-14 14:28:54', '2022-03-14 14:28:54'),
(19, 14, 1, '57324eab7d2a4b57', 1.000, 'success', 'credit', '2022-03-14 14:56:18', '2022-03-14 14:56:18'),
(20, 11, 2, '145202207333232279', 1.125, 'success', 'debit', '2022-03-14 15:01:35', '2022-03-14 15:01:35'),
(21, 21, 5, '145202207584485930', 17.625, 'success', 'debit', '2022-03-16 12:44:38', '2022-03-16 12:44:38'),
(22, 22, 7, '145202207726460913', 7.750, 'success', 'debit', '2022-03-17 22:35:54', '2022-03-17 22:35:54'),
(23, 10, 9, '145202207862196805', 6.010, 'success', 'debit', '2022-03-19 08:41:41', '2022-03-19 08:41:41'),
(24, 10, 10, '145202207839026692', 0.010, 'success', 'debit', '2022-03-19 09:21:32', '2022-03-19 09:21:32'),
(25, 23, 11, '145202208284167844', 18.750, 'success', 'debit', '2022-03-23 11:36:52', '2022-03-23 11:36:52'),
(26, 27, 16, '145202210255824995', 6.250, 'success', 'debit', '2022-04-12 19:33:29', '2022-04-12 19:33:29'),
(27, 28, 17, '145202210311851700', 13.250, 'success', 'debit', '2022-04-13 05:25:31', '2022-04-13 05:25:31'),
(28, 10, 30, '145202211023586962', 0.010, 'success', 'debit', '2022-04-20 10:33:44', '2022-04-20 10:33:44'),
(29, 30, 36, '145202211631527618', 29.250, 'success', 'debit', '2022-04-26 09:54:19', '2022-04-26 09:54:19'),
(30, 32, 39, '145202211930786449', 0.750, 'success', 'debit', '2022-04-29 20:47:47', '2022-04-29 20:47:47'),
(31, 36, 45, '145202212142367829', 2.750, 'success', 'debit', '2022-05-01 06:59:24', '2022-05-01 06:59:24'),
(32, 31, 53, '145202212220534698', 9.750, 'success', 'debit', '2022-05-01 22:38:43', '2022-05-01 22:38:43'),
(33, 42, 69, '0', 7.750, 'not success', '', '2022-05-08 09:30:59', '2022-05-08 09:30:59'),
(34, 42, 70, '0', 7.750, 'not success', '', '2022-05-08 09:31:47', '2022-05-08 09:31:47'),
(35, 43, 73, '145202214445809553', 12.750, 'success', 'debit', '2022-05-24 12:28:05', '2022-05-24 12:28:05'),
(36, 44, 75, '0', 7.250, 'not success', '', '2022-05-29 08:56:06', '2022-05-29 08:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://artbabybh.com/uploads/lily.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `mobile`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '', '$2y$10$sDQRxZnvUR6Jh8Nr0MoCVOlNo4L8xb0YGsTIzoDObDrkwpN9.wS7y', 'https://artbabybh.com/uploads/lily.png', '7caQhO2fhIZ0NKDv9zdorZg6h9RgmANg6vhz4X2Hn6KXj5ylqmkLJh5oBARf', '2021-06-07 10:22:08', '2021-06-07 10:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `weights`
--

CREATE TABLE `weights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight` decimal(9,2) NOT NULL,
  `price` decimal(9,3) NOT NULL,
  `rational` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weights`
--

INSERT INTO `weights` (`id`, `weight`, `price`, `rational`, `created_at`, `updated_at`) VALUES
(2, 0.50, 3.500, 0, '2021-07-28 11:36:14', '2021-07-28 11:36:14'),
(3, 1.00, 5.000, 0, '2021-07-28 11:36:21', '2021-07-28 11:36:21'),
(4, 1.50, 6.000, 0, '2021-07-28 11:36:29', '2021-07-28 11:36:29'),
(5, 2.00, 7.500, 0, '2021-07-28 11:36:37', '2021-07-28 11:36:37'),
(6, 2.50, 8.500, 0, '2021-07-28 11:36:45', '2021-07-28 11:36:45'),
(7, 3.00, 12.000, 0, '2021-07-28 11:36:50', '2021-07-28 11:36:50'),
(8, 3.50, 13.000, 0, '2021-07-28 11:36:58', '2021-07-28 11:36:58'),
(9, 4.00, 14.000, 0, '2021-07-28 11:37:04', '2021-07-28 11:37:04'),
(10, 4.50, 15.000, 0, '2021-07-28 11:37:10', '2021-07-28 11:37:10'),
(11, 5.00, 16.000, 0, '2021-07-28 11:37:15', '2021-07-28 11:37:15'),
(12, 5.50, 21.000, 0, '2021-07-28 11:37:23', '2021-07-28 11:37:23'),
(13, 6.00, 22.000, 0, '2021-07-28 11:37:27', '2021-07-28 11:37:27'),
(14, 6.50, 23.000, 0, '2021-07-28 11:37:34', '2021-07-28 11:37:34'),
(15, 7.00, 24.000, 0, '2021-07-28 11:37:39', '2021-07-28 11:37:39'),
(16, 7.50, 24.000, 0, '2021-07-28 11:37:46', '2021-07-28 11:37:46'),
(17, 8.00, 24.000, 0, '2021-07-28 11:37:52', '2021-07-28 11:37:52'),
(18, 8.50, 25.000, 0, '2021-07-28 11:37:59', '2021-07-28 11:37:59'),
(19, 9.00, 25.000, 0, '2021-07-28 11:38:05', '2021-07-28 11:38:05'),
(20, 9.50, 26.000, 0, '2021-07-28 11:38:11', '2021-07-28 11:38:11'),
(21, 10.00, 27.000, 0, '2021-07-28 11:38:15', '2021-07-28 11:38:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_client_id_foreign` (`client_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD KEY `clients_country_id_foreign` (`country_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_products`
--
ALTER TABLE `color_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_products_product_id_foreign` (`product_id`),
  ADD KEY `color_products_color_id_foreign` (`color_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_orders`
--
ALTER TABLE `delivery_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_orders_order_id_foreign` (`order_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_client_id_foreign` (`client_id`),
  ADD KEY `favorites_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_client_id_foreign` (`client_id`),
  ADD KEY `orders_address_id_foreign` (`address_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`),
  ADD KEY `order_products_color_id_foreign` (`color_id`),
  ADD KEY `order_products_size_id_foreign` (`size_id`);

--
-- Indexes for table `our_followers`
--
ALTER TABLE `our_followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_client_id_foreign` (`client_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size_products`
--
ALTER TABLE `size_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_products_product_id_foreign` (`product_id`),
  ADD KEY `size_products_size_id_foreign` (`size_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_product_id_foreign` (`product_id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_client_id_foreign` (`client_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `color_products`
--
ALTER TABLE `color_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `delivery_orders`
--
ALTER TABLE `delivery_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `our_followers`
--
ALTER TABLE `our_followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `size_products`
--
ALTER TABLE `size_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=974;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weights`
--
ALTER TABLE `weights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
