-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2018 at 04:17 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hezaredigital_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_users`
--

CREATE TABLE `api_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `api_users`
--

INSERT INTO `api_users` (`id`, `phone`, `code`, `api_token`, `created_at`, `updated_at`) VALUES
(53, '09357358866', 'DHAP', 'CSm8PTLU0N21C5Lu1PQlzV5J2LpdGZJu10Ep0ALVIKDYJUK7Er', '2018-07-30 18:59:45', '2018-07-30 18:59:45'),
(54, '09122589632', 'PuWb', 'mH6DOybnK9JpwfswUkea3oh8KedtK0Lu5VKppaSzrhBuhHeC7N', '2018-07-31 13:39:01', '2018-07-31 13:39:01'),
(55, '09125501605', 'xctd', 'BUysMHoXssVZXlrXsulJbMkmhYvnvTUd3Vxph02I5cTDJ30Z2i', '2018-07-31 13:47:01', '2018-07-31 13:47:01'),
(56, '09129631503', 'h77u', 'JwhNggQRTug0InRQhosbWtJQBF0tYF9rMPEpCmGyzBvJNQrRGq', '2018-07-31 14:04:35', '2018-07-31 14:04:35'),
(57, '09362239361', '1rHo', 'YbQlpaHcAm3rZyKqQsmmadW6eBdKMnqWd2TpnHNT0iu3wecnmF', '2018-07-31 14:54:43', '2018-07-31 14:54:43'),
(58, '09362239363', 'nHZd', 'PiNUo77SIAeTeboPF5k0qBcoYosXmADjNoTxYUiQIrWz5dDaM7', '2018-08-01 10:58:02', '2018-08-01 10:58:02'),
(59, '09355011245', '4JoA', '4mKUgJtWgPcLKoNbPMqF3k3pPyENapPWpkmdDF95JxjyNeFpdB', '2018-08-04 11:21:30', '2018-08-04 11:21:30'),
(60, '09369286019', 'y9cX', 'HoeZ1WDMkBjgRCDPg687GEnKw2OZrA4HrvWgDSpnze2w2eh7gA', '2018-08-05 14:37:29', '2018-08-05 14:37:29'),
(61, '09345621348', 'jTB6', '0ptuNA9m798ZoQ7JKAzBZOIk4TPO5Zn4jSxjW5disCdZmfzp7f', '2018-08-08 17:18:56', '2018-08-08 17:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `status`, `cat_id`, `likes`, `app_id`, `priority`, `title`, `image`, `color`, `description`, `created_at`, `updated_at`) VALUES
(58, 1, NULL, NULL, NULL, 8, 'پیراهنv', '/uploads/articles/1531396560-20057861.jpg', 'rgb(255, 0, 255)', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..', '2018-07-03 15:16:08', '2018-10-23 09:22:39'),
(59, 1, NULL, NULL, NULL, 4, 'سویشرت مردانه', '/uploads/articles/1531396621-20083458.jpg', '#27ADCA', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', '2018-07-04 11:10:16', '2018-10-23 10:49:51'),
(63, 1, NULL, NULL, NULL, 10, 'گل زینتی', '/uploads/articles/1531396662-th.jpeg', '#27ADCA', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', '2018-07-12 15:57:42', '2018-10-23 08:00:23'),
(64, 1, NULL, NULL, NULL, 10, 'گل  زینتی دوم', '/uploads/articles/1531396694-NF4016-130116.jpg', '#27ADCA', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', '2018-07-12 15:58:14', '2018-10-23 07:49:03'),
(66, 1, NULL, NULL, NULL, 2, 'غذای دو', '/uploads/articles/1531397212-rffrfrfrf.jpeg', '#27ADCA', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', '2018-07-12 16:06:52', '2018-10-23 10:49:48'),
(67, 1, NULL, NULL, NULL, 3, 'غذای یک', '/uploads/articles/1539094735-1531397170-image.jpeg', '#27ADCA', NULL, '2018-10-09 10:48:55', '2018-10-23 10:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `article_id`, `category_id`, `created_at`, `updated_at`) VALUES
(92, 66, 9, NULL, NULL),
(93, 58, 10, NULL, NULL),
(94, 59, 10, NULL, NULL),
(95, 63, 11, NULL, NULL),
(96, 64, 11, NULL, NULL),
(97, 67, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(9, 'خوراک', '/uploads/categories/1531397132-frfrfr.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', '2018-07-12 16:05:32', '2018-07-12 16:13:08'),
(10, 'پوشاک', '/uploads/categories/1531646369-cl.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', '2018-07-15 13:19:29', '2018-07-15 13:19:29'),
(11, 'گیاهان', '/uploads/categories/1531646395-87dfb7dfd703c84.png', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.', '2018-07-15 13:19:55', '2018-07-15 13:19:55'),
(12, 'شکلات ها', '/uploads/categories/1532157251-11.jpg', 'لورم ایپسوم لورم ایپسوم لورم ایپسوم لورم ایپسوم', '2018-07-21 11:14:11', '2018-07-21 11:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `code`, `status`, `created_at`, `updated_at`, `user`) VALUES
(338, 'DHAP', 1, '2018-07-30 15:58:16', '2018-07-30 18:59:45', '09357358866'),
(340, 'h77u', 1, '2018-07-30 15:58:16', '2018-07-31 14:04:35', '09129631503'),
(342, 'xctd', 1, '2018-07-30 15:58:16', '2018-07-31 13:47:01', '09125501605'),
(346, 'y9cX', 1, '2018-07-30 15:58:16', '2018-08-05 14:37:29', '09369286019'),
(348, 'jTB6', 1, '2018-07-30 15:58:16', '2018-08-08 17:18:56', '09345621348'),
(349, '4JoA', 1, '2018-07-30 15:58:16', '2018-08-04 11:21:30', '09355011245'),
(350, '1rHo', 1, '2018-07-30 15:58:16', '2018-07-31 14:54:43', '09362239361'),
(351, 'nHZd', 1, '2018-07-30 15:58:16', '2018-08-01 10:58:02', '09362239363'),
(358, 'PuWb', 1, '2018-07-30 16:16:07', '2018-07-31 13:39:01', '09122589632'),
(359, 'NfGU', 0, '2018-09-17 05:10:49', '2018-09-17 05:10:49', NULL),
(360, 'fB4L', 0, '2018-09-17 05:10:49', '2018-09-17 05:10:49', NULL),
(361, 'KU7b', 0, '2018-09-17 05:10:49', '2018-09-17 05:10:49', NULL),
(362, 'g2No', 0, '2018-09-17 05:10:49', '2018-09-17 05:10:49', NULL),
(363, 'jD5e', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(364, 'DcBC', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(365, 'KHCm', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(366, 'aoAv', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(367, 'oA4g', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(368, 'H0F0', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(369, 'dzUF', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(370, 'MNEb', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(371, 'dNZ7', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(372, 's5IZ', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(373, 'akeh', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(374, 'PdB2', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(375, 'bXCi', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(376, 'bqtc', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(377, '13Nd', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(378, 'GNkw', 0, '2018-09-17 05:10:50', '2018-09-17 05:10:50', NULL),
(379, 'nVUa', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(380, 'bBOA', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(381, 'LG75', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(382, 'UzNa', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(383, 'Innh', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(384, 'Fz2p', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(385, 'MWug', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(386, 'CsBM', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(387, 'XcSn', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(388, 'dScD', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(389, 'KZPs', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(390, 'csnQ', 0, '2018-09-17 05:11:53', '2018-09-17 05:11:53', NULL),
(391, '2iiS', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(392, 'J3VC', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(393, 'E8RY', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(394, 'zqJJ', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(395, 'CZNJ', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(396, 'D4zZ', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(397, 'oF0e', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(398, 'YKLC', 0, '2018-09-17 05:11:54', '2018-09-17 05:11:54', NULL),
(399, 'dw1Z', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(400, '9XRD', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(401, 'klaN', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(402, 'cWrR', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(403, 'G1Zp', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(404, 'euZN', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(405, 'J1TS', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(406, '4Mzm', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(407, '79qE', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(408, '1Wf1', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(409, 'OlzN', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(410, 'WfoJ', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(411, 'w0tt', 0, '2018-09-17 05:21:40', '2018-09-17 05:21:40', NULL),
(412, '8eEf', 0, '2018-09-17 05:21:41', '2018-09-17 05:21:41', NULL),
(413, 'eDG8', 0, '2018-09-17 05:21:41', '2018-09-17 05:21:41', NULL),
(414, 'D8vs', 0, '2018-09-17 05:21:41', '2018-09-17 05:21:41', NULL),
(415, 'paQT', 0, '2018-09-17 05:21:41', '2018-09-17 05:21:41', NULL),
(416, 'MPUH', 0, '2018-09-17 05:21:41', '2018-09-17 05:21:41', NULL),
(417, 'PpnF', 0, '2018-09-17 05:21:41', '2018-09-17 05:21:41', NULL),
(418, 'niwY', 0, '2018-09-17 05:21:41', '2018-09-17 05:21:41', NULL),
(419, 'ayp7', 0, '2018-09-17 10:09:56', '2018-09-17 10:09:56', NULL),
(420, 'C6qB', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(421, 'Ky1z', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(422, 'hKfU', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(423, 'aSNZ', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(424, 'dB9l', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(425, '3AXR', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(426, 'BTK3', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(427, 'sL65', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(428, 'YzwJ', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(429, 'zBML', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(430, 'sB7P', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(431, 'hjo6', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(432, 'QA7i', 0, '2018-09-17 10:09:57', '2018-09-17 10:09:57', NULL),
(433, 'kUxB', 0, '2018-09-17 10:09:58', '2018-09-17 10:09:58', NULL),
(434, 'x21N', 0, '2018-09-17 10:09:58', '2018-09-17 10:09:58', NULL),
(435, 'rQW9', 0, '2018-09-17 10:09:58', '2018-09-17 10:09:58', NULL),
(436, 'wEtw', 0, '2018-09-17 10:09:58', '2018-09-17 10:09:58', NULL),
(437, 'UIV1', 0, '2018-09-17 10:09:58', '2018-09-17 10:09:58', NULL),
(438, 'xtY0', 0, '2018-09-17 10:09:58', '2018-09-17 10:09:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `link`, `parent_id`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'menu1', '#utyu', 0, 1, 1, '2018-10-18 05:27:11', '2018-10-23 07:51:59'),
(4, 'menu3', '##', 1, 3, 1, '2018-10-18 06:12:08', '2018-10-23 07:52:00'),
(5, 'menu9', 'سبی', 1, 2, 1, '2018-10-18 06:38:48', '2018-10-23 07:52:00'),
(6, 'menu4', 'ee', 0, 0, 1, '2018-10-18 08:51:30', '2018-10-23 07:51:59'),
(7, 'menu5', 'dd', 6, 5, 1, '2018-10-18 08:51:45', '2018-10-23 07:52:00'),
(8, 'menu6', 'asdasd', 6, 4, 1, '2018-10-18 10:37:46', '2018-10-23 07:52:00'),
(9, 'menu11', 'edded', 0, 7, 1, '2018-10-18 11:42:13', '2018-10-22 09:55:22'),
(10, 'صضقثض', 'ضقضثق', 0, 6, 1, '2018-10-18 12:24:33', '2018-10-23 07:49:48');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_12_071756_create_articles_table', 1),
(4, '2018_06_17_064329_create_categories_table', 1),
(5, '2018_06_18_092335_create_sliders_table', 1),
(6, '2018_06_20_085512_create_roles_and_permissions_table', 1),
(7, '2018_07_18_092259_create_settings_table', 2),
(8, '2018_07_30_074737_create_codes_table', 3),
(9, '2018_07_30_084946_create_api_users_table', 4),
(10, '2018_07_30_113130_add_user_columns_to_codes_table', 5),
(11, '2018_10_18_080245_create_menus_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('a@a.com', '$2y$10$eKsRZQn7PWEkyu85JLjrDuLZ5eyrlvUVMcTLFW.CeWUeoXmRI7T6y', '2018-06-24 03:20:43'),
('rezatabari73@gmail.com', '$2y$10$RmPemX9axsC68Xt25W/r5.Rnsi6yZRQVQUFm9lam8Qe.KYm9dMD/m', '2018-10-17 08:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'list_article', 'لیست پست ها', '2018-06-23 10:08:39', '2018-07-10 11:40:38'),
(2, 'edit_article', 'ویرایش پست ها', '2018-06-23 10:09:02', '2018-07-10 11:40:49'),
(3, 'delete_article', 'حذف پست ها', '2018-06-23 10:09:54', '2018-07-10 11:41:08'),
(4, 'add_article', 'افزودن پست', '2018-06-23 10:10:12', '2018-07-10 11:41:23'),
(5, 'list_cat', 'لیست دسته بندی ها', '2018-06-23 10:10:40', '2018-06-23 10:11:13'),
(6, 'add_cat', 'افزودن دسته بندی', '2018-06-23 10:11:00', '2018-06-23 10:11:00'),
(7, 'edit_cat', 'ویرایش دسته بندی ها', '2018-06-23 10:11:35', '2018-06-23 10:11:35'),
(8, 'delete_cat', 'حذف دسته بندی', '2018-06-23 10:11:50', '2018-06-23 10:11:50'),
(9, 'list_slider', 'لیست اسلایدرها', '2018-06-23 10:12:25', '2018-06-23 10:12:25'),
(10, 'add_slider', 'افزودن اسلایدر', '2018-06-23 10:12:41', '2018-06-23 10:12:41'),
(11, 'edit_slider', 'ویرایش اسلایدرها', '2018-06-23 10:12:55', '2018-06-23 10:12:55'),
(12, 'delete_slider', 'حذف اسلایدرها', '2018-06-23 10:13:09', '2018-06-23 10:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(5, 5, 1),
(6, 6, 1),
(7, 8, 1),
(8, 9, 1),
(9, 10, 1),
(10, 11, 1),
(11, 12, 1),
(12, 7, 1),
(27, 4, 1),
(28, 1, 1),
(31, 3, 1),
(33, 2, 1),
(35, 4, 2),
(36, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'مدیر ارشد', '2018-06-23 10:13:54', '2018-06-23 10:13:54'),
(2, 'author', 'نویسنده', '2018-06-26 08:06:42', '2018-06-26 08:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(8, 1, 9),
(13, 1, 10),
(14, 2, 11),
(21, 2, 16),
(39, 1, 17),
(41, 1, 1),
(42, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `about_us`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, '۹۹۸۷۶۷۸۴', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد..', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است', 'aba.alireza@gmail.com', NULL, '2018-09-16 09:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(16, 'اسلایدر۲', '/uploads/sliders/1539245503-ok 02-min.jpg', 1, '2018-10-11 04:41:43', '2018-10-23 07:52:10'),
(15, 'اسلایدر۱', '/uploads/sliders/1539245488-ok 01-min.jpg', 1, '2018-10-11 04:41:28', '2018-10-23 07:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'محمدرضا طبری', 'rezatabari73@gmail.com', '$2y$10$HBfV4zr3dSffkMQYlE2tV.BAmhN9GlTQeQJ/nhu9mPPtMMSqTFK6C', 'tcDJb6yE4j17z2shOs5PlgDsDm2HmeI1BfKqsZjrhXEvELsTw3Vzv9NeWZXy', '', '2018-06-23 10:08:16', '2018-10-16 10:18:02'),
(9, 'admin', 'a@b.com', '$2y$10$z98R4ThLAeOYf88Zw7dbxO7XWoWJ0zxKpGrOCXL6FusA5az838VsO', NULL, 'fgargqelgrghq@#$%^Flj;wegrjgqjg', '2018-06-24 06:16:08', '2018-06-25 10:08:05'),
(10, 'علیرضا عبادوز', 'aba.alireza@gmail.com', '$2y$10$GJEIJB5quf1n2wVw8DHRx.wvNQY5fWDBOZJIVogQH5.HpKnT0/KSC', 'JLiR92uZYFSbsiQwvjIlqOHBzxezbERLHA3lElhRnYhVaJzwy9sWmDBdSjem', '', '2018-07-01 12:12:50', '2018-07-19 17:13:39'),
(11, 'admin', 'f@f.com', '$2y$10$z98R4ThLAeOYf88Zw7dbxO7XWoWJ0zxKpGrOCXL6FusA5az838VsO', NULL, 'reggrergeg!@#$trehhe154845', '2018-06-24 06:16:08', '2018-06-25 10:08:05'),
(16, 'علی علوی', 'a@qq.com', '$2y$10$1mD1icAPz0mEjMBf2Nwu4uUijng0hdZeOkvWz71q/OsldbdI55Bsa', '0X4KDVmrLyBwJzyO6qKWktANy5DrsvEnCUbfe3iZxvnSYkRf4bu84F99uQPb', NULL, '2018-09-15 06:36:51', '2018-09-15 06:36:51'),
(17, 'علی صبوری', 'a@A.com', '$2y$10$l2NWhT8Mz5x6uJcen1cAyOPq/T5HMwDWeDWbm4r64jotOEePeMq3i', 'roFXeMi1bfINETotd9G7AQAs6A9wS1wjrSmtILaCHbCEkqdQMuxdwQSDbA2t', NULL, '2018-10-16 10:16:58', '2018-10-16 10:16:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_users`
--
ALTER TABLE `api_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `api_users_code_unique` (`code`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_article_id_foreign` (`article_id`),
  ADD KEY `article_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codes_code_unique` (`code`),
  ADD UNIQUE KEY `codes_user_unique` (`user`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `api_users`
--
ALTER TABLE `api_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=439;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
