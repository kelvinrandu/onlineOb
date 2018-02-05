-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 01:41 PM
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
-- Database: `onlineob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `station_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `code`, `station_name`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CBD', 'central police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '0', NULL, '2018-01-07 06:10:11', '2018-01-07 06:10:11'),
(2, 'CBD2', 'central police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '1', NULL, '2018-01-07 06:10:56', '2018-01-07 06:10:56'),
(3, 'LNG', 'langata police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '0', NULL, '2018-01-07 06:12:02', '2018-01-07 06:12:02'),
(4, 'LNG2', 'langata police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '1', NULL, '2018-01-07 06:13:04', '2018-01-07 06:13:04'),
(5, 'KMKJ', 'kamkunji police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '0', NULL, '2018-01-07 06:14:06', '2018-01-07 06:14:06'),
(6, 'KMKJ2', 'kamkunji police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '1', NULL, '2018-01-07 06:14:35', '2018-01-07 06:14:35'),
(7, 'STR', 'starehe police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '0', NULL, '2018-01-07 06:15:43', '2018-01-07 06:15:43'),
(8, 'STR2', 'starehe police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '1', NULL, '2018-01-07 06:16:08', '2018-01-07 06:16:08'),
(9, 'DGRT', 'dagoretti police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '0', NULL, '2018-01-07 06:17:34', '2018-01-07 06:17:34'),
(10, 'DGRT2', 'dagoretti police station', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', '1', NULL, '2018-01-07 06:18:02', '2018-01-07 06:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `case_contacts`
--

CREATE TABLE `case_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `court_case_id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_contacts`
--

INSERT INTO `case_contacts` (`id`, `court_case_id`, `contact_id`, `created_at`, `updated_at`) VALUES
(1, 18, 1, NULL, NULL),
(2, 19, 1, NULL, NULL),
(3, 20, 1, NULL, NULL),
(4, 21, 4, NULL, NULL),
(5, 22, 4, NULL, NULL),
(6, 23, 4, NULL, NULL),
(7, 24, 4, NULL, NULL),
(8, 25, 4, NULL, NULL),
(9, 26, 4, NULL, NULL),
(10, 27, 4, NULL, NULL),
(11, 28, 4, NULL, NULL),
(12, 29, 4, NULL, NULL),
(13, 30, 4, NULL, NULL),
(14, 31, 4, NULL, NULL),
(15, 32, 4, NULL, NULL),
(16, 33, 4, NULL, NULL),
(17, 34, 4, NULL, NULL),
(18, 35, 4, NULL, NULL),
(19, 36, 4, NULL, NULL),
(20, 37, 4, NULL, NULL),
(21, 38, 4, NULL, NULL),
(22, 39, 1, NULL, NULL),
(23, 40, 1, NULL, NULL),
(24, 41, 1, NULL, NULL),
(25, 42, 1, NULL, NULL),
(26, 43, 1, NULL, NULL),
(27, 44, 1, NULL, NULL),
(28, 45, 1, NULL, NULL),
(29, 46, 3, NULL, NULL),
(30, 47, 1, NULL, NULL),
(31, 48, 1, NULL, NULL),
(32, 49, 1, NULL, NULL),
(33, 50, 1, NULL, NULL),
(34, 51, 1, NULL, NULL),
(35, 52, 1, NULL, NULL),
(36, 53, 1, NULL, NULL),
(37, 54, 1, NULL, NULL),
(38, 55, 1, NULL, NULL),
(39, 56, 1, NULL, NULL),
(40, 57, 1, NULL, NULL),
(41, 58, 1, NULL, NULL),
(42, 59, 1, NULL, NULL),
(43, 60, 1, NULL, NULL),
(44, 61, 1, NULL, NULL),
(45, 62, 1, NULL, NULL),
(46, 63, 1, NULL, NULL),
(47, 64, 1, NULL, NULL),
(48, 65, 1, NULL, NULL),
(49, 66, 1, NULL, NULL),
(50, 67, 1, NULL, NULL),
(51, 68, 1, NULL, NULL),
(52, 69, 1, NULL, NULL),
(53, 70, 1, NULL, NULL),
(54, 71, 1, NULL, NULL),
(55, 72, 1, NULL, NULL),
(56, 73, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `Fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Fname`, `lname`, `phone`, `email`, `rank`, `admin_id`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Mile', '0711651196', 'milesjohn@gmail.com', 'liutenant', 2, 5, '2018-01-07 07:01:10', '2018-01-07 07:01:10'),
(2, 'Mary', 'Mwadzunga', '0711585088', 'mwadzunga203@gmail.com', 'corporal', 2, 1, '2018-01-07 07:03:21', '2018-01-07 07:03:21'),
(3, 'Andrew', 'Makori', '0711652283', 'makori@gmail.com', 'lieutenant', 2, 6, '2018-01-21 06:09:05', '2018-01-21 06:09:05'),
(4, 'James', 'Mwangi', '0711651196', 'mwangi@gmail.com', 'liutenant', 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `court_cases`
--

CREATE TABLE `court_cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `statement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_crimes_id` int(10) UNSIGNED NOT NULL,
  `statement_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `court_cases`
--

INSERT INTO `court_cases` (`id`, `statement`, `report_crimes_id`, `statement_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'fjfjfjfjffjf', 1, 1, 2, '2018-01-07 07:27:14', '2018-01-07 07:27:14'),
(11, 'mnmn,,', 1, 1, 2, '2018-01-07 08:04:49', '2018-01-07 08:04:49'),
(12, 'gratsi', 1, 1, 2, '2018-01-07 08:05:07', '2018-01-07 08:05:07'),
(13, 'gratsivv', 1, 1, 2, '2018-01-07 08:12:59', '2018-01-07 08:12:59'),
(14, 'gratsivv vmh', 1, 1, 2, '2018-01-07 08:13:39', '2018-01-07 08:13:39'),
(15, 'ncncc', 1, 1, 2, '2018-01-07 08:28:50', '2018-01-07 08:28:50'),
(16, 'ncncc', 1, 1, 2, '2018-01-07 08:29:51', '2018-01-07 08:29:51'),
(17, 'jb jhbjhbjh', 1, 1, 2, '2018-01-07 08:33:01', '2018-01-07 08:33:01'),
(18, 'cncncncnccn', 1, 1, 2, '2018-01-07 08:34:08', '2018-01-07 08:34:08'),
(19, 'cncncncnccn', 1, 1, 2, '2018-01-07 08:37:47', '2018-01-07 08:37:47'),
(20, 'nfnf,,ff,ff', 1, 1, 2, '2018-01-07 08:57:10', '2018-01-07 08:57:10'),
(21, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:36:32', '2018-02-04 07:36:32'),
(22, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:45:18', '2018-02-04 07:45:18'),
(23, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:48:04', '2018-02-04 07:48:04'),
(24, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:48:54', '2018-02-04 07:48:54'),
(25, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:52:09', '2018-02-04 07:52:09'),
(26, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:54:18', '2018-02-04 07:54:18'),
(27, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:55:39', '2018-02-04 07:55:39'),
(28, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:57:16', '2018-02-04 07:57:16'),
(29, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:57:36', '2018-02-04 07:57:36'),
(30, 'fnhnfhf', 16, 2, 4, '2018-02-04 07:58:18', '2018-02-04 07:58:18'),
(31, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:00:36', '2018-02-04 08:00:36'),
(32, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:02:07', '2018-02-04 08:02:07'),
(33, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:02:40', '2018-02-04 08:02:40'),
(34, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:08:24', '2018-02-04 08:08:24'),
(35, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:10:08', '2018-02-04 08:10:08'),
(36, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:10:52', '2018-02-04 08:10:52'),
(37, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:13:59', '2018-02-04 08:13:59'),
(38, 'fnhnfhf', 16, 2, 4, '2018-02-04 08:14:55', '2018-02-04 08:14:55'),
(39, 'hfgjhrghr', 17, 3, 2, '2018-02-04 08:39:40', '2018-02-04 08:39:40'),
(40, 'hfgjhrghr', 17, 3, 2, '2018-02-04 08:40:38', '2018-02-04 08:40:38'),
(41, 'dgdhdjdj', 2, 4, 2, '2018-02-04 08:45:34', '2018-02-04 08:45:34'),
(42, 'bb  jkh', 4, 5, 2, '2018-02-04 16:02:00', '2018-02-04 16:02:00'),
(43, 'bb  jkh', 4, 5, 2, '2018-02-04 16:05:52', '2018-02-04 16:05:52'),
(44, 'hvgvgvgvj', 5, 6, 2, '2018-02-04 16:18:44', '2018-02-04 16:18:44'),
(45, 'bhbhbh', 8, 7, 2, '2018-02-04 16:27:33', '2018-02-04 16:27:33'),
(46, 'fvrgvfgrjgth', 9, 8, 2, '2018-02-04 16:31:53', '2018-02-04 16:31:53'),
(47, 'gvgvgjvjgv', 10, 9, 2, '2018-02-05 03:58:24', '2018-02-05 03:58:24'),
(48, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:05:13', '2018-02-05 04:05:13'),
(49, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:08:44', '2018-02-05 04:08:44'),
(50, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:11:50', '2018-02-05 04:11:50'),
(51, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:12:19', '2018-02-05 04:12:19'),
(52, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:21:53', '2018-02-05 04:21:53'),
(53, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:22:25', '2018-02-05 04:22:25'),
(54, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:23:45', '2018-02-05 04:23:45'),
(55, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:24:05', '2018-02-05 04:24:05'),
(56, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:25:17', '2018-02-05 04:25:17'),
(57, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:29:21', '2018-02-05 04:29:21'),
(58, 'gfvgvgrgjvf', 18, 11, 2, '2018-02-05 04:29:41', '2018-02-05 04:29:41'),
(59, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:41:03', '2018-02-05 05:41:03'),
(60, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:41:37', '2018-02-05 05:41:37'),
(61, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:43:57', '2018-02-05 05:43:57'),
(62, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:44:18', '2018-02-05 05:44:18'),
(63, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:45:49', '2018-02-05 05:45:49'),
(64, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:49:05', '2018-02-05 05:49:05'),
(65, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:50:01', '2018-02-05 05:50:01'),
(66, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:50:15', '2018-02-05 05:50:15'),
(67, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:53:14', '2018-02-05 05:53:14'),
(68, 'hbedhbedhbhd', 12, 10, 2, '2018-02-05 05:53:41', '2018-02-05 05:53:41'),
(69, 'hgfghfbhbhbv', 6, 12, 2, '2018-02-05 06:00:12', '2018-02-05 06:00:12'),
(70, 'hgfghfbhbhbv', 6, 12, 2, '2018-02-05 06:01:21', '2018-02-05 06:01:21'),
(71, 'hgfghfbhbhbv', 6, 12, 2, '2018-02-05 06:01:46', '2018-02-05 06:01:46'),
(72, 'hgfghfbhbhbv', 6, 12, 2, '2018-02-05 06:02:10', '2018-02-05 06:02:10'),
(73, 'vfgrgfhrbhbghkb', 13, 13, 2, '2018-02-05 06:04:26', '2018-02-05 06:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `identifications`
--

CREATE TABLE `identifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_names` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` int(10) UNSIGNED NOT NULL,
  `serial_number` int(10) UNSIGNED NOT NULL,
  `date_of_birth` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identifications`
--

INSERT INTO `identifications` (`id`, `first_name`, `sur_name`, `other_names`, `Gender`, `id_number`, `serial_number`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'kelvin', 'randu', 'nzai', 'male', 31626923, 46585855, '2018-01-14 21:00:00', '2018-01-12 21:00:00', NULL),
(2, 'Edwin', 'Nyaluogo', 'Ochieng', 'male', 30761524, 56786956, '2018-01-16 21:00:00', NULL, NULL);

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
(3, '2017_05_26_072651_create_admins_table', 1),
(4, '2017_09_13_162127_create_type_table', 1),
(5, '2017_09_13_162443_create_detectives_contact_table', 1),
(6, '2017_09_13_163015_create_report_case_table', 1),
(7, '2017_09_13_163655_create_statements_by_police_table', 1),
(8, '2017_09_13_163948_create_assigned_case_table', 1),
(9, '2017_12_10_130330_create_case_contacts_table', 1),
(10, '2018_01_07_072648_create_user_identification_table', 1),
(11, '2018_01_15_074632_create_station_contacts_table', 2),
(12, '2018_02_04_055544_add_location_to_report_crime', 3);

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
-- Table structure for table `report_crimes`
--

CREATE TABLE `report_crimes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNo` int(11) NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crime_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_crimes`
--

INSERT INTO `report_crimes` (`id`, `user_id`, `admin_id`, `date`, `phonenumber`, `idNo`, `type_id`, `status`, `crime_description`, `created_at`, `updated_at`, `location`) VALUES
(1, 1, 1, '2018-01-10', '0711651196', 31626923, 2, '2', 'hbthbghetgbtghkbetbkte', '2018-01-07 06:25:44', '2018-01-07 07:27:15', ''),
(2, 1, 1, '2018-01-11', '0711651196', 31324455, 2, '2', 'gghhghghj', '2018-01-13 16:56:34', '2018-02-04 08:45:34', ''),
(3, 1, 7, '2018-01-18', '784949347', 31626923, 7, '0', 'dbfvfvf', '2018-01-13 17:18:33', '2018-01-13 17:18:33', ''),
(4, 1, 1, '2018-01-24', '0711651196', 31626923, 5, '2', 'hfbrhbfhrbhbfhrbrjklhrb', '2018-01-17 07:51:58', '2018-02-04 16:02:00', ''),
(5, 1, 1, '2018-01-24', '0711651196', 31626923, 5, '2', 'hfbrhbfhrbhbfhrbrjklhrb', '2018-01-17 07:52:51', '2018-02-04 16:18:44', ''),
(6, 1, 1, '2018-01-24', '0711651196', 31626923, 5, '2', 'hfbrhbfhrbhbfhrbrjklhrb', '2018-01-17 07:54:39', '2018-02-05 06:00:12', ''),
(7, 1, 7, '2018-01-24', '0711651196', 31626923, 7, '0', 'hmfbhrfbkrhbfkbrkfbrj', '2018-01-17 08:02:51', '2018-01-17 08:02:51', ''),
(8, 1, 1, '2018-01-18', '0711651196', 31626923, 6, '2', 'fhbfhrdbjhr', '2018-01-17 08:18:22', '2018-02-04 16:27:33', ''),
(9, 1, 1, '2018-01-24', '0711651196', 31626923, 6, '2', 'djfvnjdnjt', '2018-01-17 08:22:52', '2018-02-04 16:31:53', ''),
(10, 1, 1, '2018-01-24', '0711651196', 31626923, 6, '2', 'djfvnjdnjt', '2018-01-17 08:32:07', '2018-02-05 03:58:24', ''),
(11, 2, 5, '2018-01-18', '7594784048', 30761524, 6, '0', 'hbdhjbjdb', '2018-01-17 08:42:59', '2018-01-17 08:42:59', ''),
(12, 1, 1, '1996-01-17', '0711651196', 31626923, 3, '2', 'jhdfvhjkfbjk', '2018-01-17 08:49:20', '2018-02-05 05:41:03', ''),
(13, 1, 1, '2018-01-26', '0711651196', 31626923, 2, '2', 'hfherfjkrhfk', '2018-01-17 09:11:26', '2018-02-05 06:04:26', ''),
(14, 1, 7, '2018-01-16', '0711651196', 31626923, 6, '0', 'hfgvjkfyhgvlrgyvlriu', '2018-01-21 14:52:46', '2018-01-21 14:52:46', ''),
(15, 1, 7, '2018-02-04', '0711651196', 31626923, 1, '0', 'gfbvsjgbbbbbrjh', '2018-02-04 02:29:55', '2018-02-04 02:29:55', ''),
(16, 1, 3, '2018-02-06', '0711651196', 31626923, 1, '2', 'ytfsbgghfjsfjs', '2018-02-04 07:24:19', '2018-02-04 07:36:32', 'langata'),
(17, 1, 1, '2018-02-04', '0711651196', 31626923, 1, '2', 'hgsrhguotrhgtjgij', '2018-02-04 08:36:56', '2018-02-04 08:39:41', 'cbd'),
(18, 1, 1, '2018-02-06', '0711651196', 31626923, 1, '2', 'fhsbhkfbkr', '2018-02-04 14:28:51', '2018-02-05 04:05:13', 'cbd');

-- --------------------------------------------------------

--
-- Table structure for table `statements`
--

CREATE TABLE `statements` (
  `id` int(10) UNSIGNED NOT NULL,
  `crime_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `ob_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `police_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statements`
--

INSERT INTO `statements` (`id`, `crime_id`, `admin_id`, `ob_number`, `status`, `police_number`, `statement`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'hfhfh5995HHCH', 1, 'OBFUYI$5688', 'kdufghotuhgooooodjfjgjg', '2018-01-07 06:49:10', '2018-01-07 08:57:10'),
(2, 16, 4, '747383930', 1, '09848844', 'fhryftryffgrfgyrfy', '2018-02-04 07:30:09', '2018-02-04 07:36:32'),
(3, 17, 2, '8975695', 1, '08739879568', 'sgnvfgjfvrb', '2018-02-04 08:38:27', '2018-02-04 08:39:40'),
(4, 2, 2, '363838388', 1, '984894949', 'fvutfbrujfmukednt', '2018-02-04 08:44:28', '2018-02-04 08:45:34'),
(5, 4, 2, '5y5uu5u55', 1, '585585557', 'nrnrnrnrnr', '2018-02-04 16:01:11', '2018-02-04 16:02:00'),
(6, 5, 2, '849484948', 1, '8440402', 'rfbbrfbfrbj', '2018-02-04 16:15:52', '2018-02-04 16:18:44'),
(7, 8, 2, '49494949', 1, '45959945940', 'fjjbfhrbhffhbr', '2018-02-04 16:16:22', '2018-02-04 16:27:33'),
(8, 9, 2, '57595995', 1, '557969955', 'fjbf bg g bghtbg', '2018-02-04 16:30:35', '2018-02-04 16:31:53'),
(9, 10, 2, '75i487504875', 1, '0875785749784', 'dfvbhvgjhrvgjhre', '2018-02-05 03:57:05', '2018-02-05 03:58:24'),
(10, 12, 2, '57673938', 1, '885787693587', 'gfvrgvfgjrvvfrv', '2018-02-05 04:03:55', '2018-02-05 05:41:03'),
(11, 18, 2, '085787873874578', 1, '85787657868', 'jdhbghjbghbjt', '2018-02-05 04:04:27', '2018-02-05 04:05:13'),
(12, 6, 2, '6458264924', 1, '75698', 'jrfrbvjrb', '2018-02-05 05:59:17', '2018-02-05 06:00:12'),
(13, 13, 2, '63468446', 1, '16237383', 'vwfwfwgrfvgvr', '2018-02-05 06:03:43', '2018-02-05 06:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `station_contacts`
--

CREATE TABLE `station_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OCS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OCPD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rape', '2018-01-07 06:20:15', '2018-01-07 06:20:15'),
(2, 'Extortion', '2018-01-07 06:20:43', '2018-01-07 06:20:43'),
(3, 'Murder', '2018-01-07 06:21:03', '2018-01-07 06:21:03'),
(4, 'Robbery with violence', '2018-01-07 06:21:27', '2018-01-07 06:21:27'),
(5, 'Fraud', '2018-01-07 06:21:50', '2018-01-07 06:21:50'),
(6, 'Child abuse', '2018-01-07 06:22:25', '2018-01-07 06:22:25'),
(7, 'Attempted murder', '2018-01-07 06:23:01', '2018-01-07 06:23:01'),
(8, 'Breaking of road safety rules', '2018-01-07 06:23:59', '2018-01-07 06:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `gender`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kelvin', 'Randu', 1, 'public/defaults/avatars/male.png', 'randukelvin@gmail.com', '$2y$10$v7GeV7CsDtJnl1RAbXclBuH4988PMgYCFgpX.DMrFpkx3pV16CF.u', 'qG9IApQcFxOC7hSAq5hrCscDnq4xjiPhZl2Dtzj2Os57fNlfeGRc7ZnTATFZ', '2018-01-07 05:31:55', '2018-01-07 05:31:55'),
(2, 'EDwin', 'Nyaluogo', 1, 'public/defaults/avatars/male.png', 'edwinnyaluogo@gmail.com', '$2y$10$IDSZ3KaVPAUIJxeX9cXqr.TCg/5cHlV07l5dXMekhhL2R5gGcCq3O', 'Ni0J2Kee5NLikoc25lBknUe6R3Pxooa5U4CRp7CkAcWVU5lucRE0Q5d8BJCx', '2018-01-17 08:40:43', '2018-01-17 08:40:43'),
(3, 'Selina', 'Ochukut', 0, 'public/defaults/avatars/female.png', 'selinao@uonbi.ac.ke', '$2y$10$VPts5QLXNVvn.GMmQ7UdUOFVx.zvBAIt6yuIT6L2I8vVIHtQcTsnW', NULL, '2018-01-29 05:01:28', '2018-01-29 05:01:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_code_unique` (`code`);

--
-- Indexes for table `case_contacts`
--
ALTER TABLE `case_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_contacts_court_case_id_foreign` (`court_case_id`),
  ADD KEY `case_contacts_contact_id_foreign` (`contact_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_admin_id_foreign` (`admin_id`),
  ADD KEY `contacts_type_id_foreign` (`type_id`);

--
-- Indexes for table `court_cases`
--
ALTER TABLE `court_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `court_cases_report_crimes_id_foreign` (`report_crimes_id`),
  ADD KEY `court_cases_statement_id_foreign` (`statement_id`),
  ADD KEY `court_cases_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `identifications`
--
ALTER TABLE `identifications`
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
-- Indexes for table `report_crimes`
--
ALTER TABLE `report_crimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_crimes_user_id_foreign` (`user_id`),
  ADD KEY `report_crimes_admin_id_foreign` (`admin_id`),
  ADD KEY `report_crimes_type_id_foreign` (`type_id`);

--
-- Indexes for table `statements`
--
ALTER TABLE `statements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statements_crime_id_foreign` (`crime_id`),
  ADD KEY `statements_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `station_contacts`
--
ALTER TABLE `station_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `station_contacts_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `case_contacts`
--
ALTER TABLE `case_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `court_cases`
--
ALTER TABLE `court_cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `identifications`
--
ALTER TABLE `identifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `report_crimes`
--
ALTER TABLE `report_crimes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `statements`
--
ALTER TABLE `statements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `station_contacts`
--
ALTER TABLE `station_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_contacts`
--
ALTER TABLE `case_contacts`
  ADD CONSTRAINT `case_contacts_contact_id_foreign` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`),
  ADD CONSTRAINT `case_contacts_court_case_id_foreign` FOREIGN KEY (`court_case_id`) REFERENCES `court_cases` (`id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `contacts_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Constraints for table `court_cases`
--
ALTER TABLE `court_cases`
  ADD CONSTRAINT `court_cases_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `court_cases_report_crimes_id_foreign` FOREIGN KEY (`report_crimes_id`) REFERENCES `report_crimes` (`id`),
  ADD CONSTRAINT `court_cases_statement_id_foreign` FOREIGN KEY (`statement_id`) REFERENCES `statements` (`id`);

--
-- Constraints for table `report_crimes`
--
ALTER TABLE `report_crimes`
  ADD CONSTRAINT `report_crimes_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `report_crimes_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`),
  ADD CONSTRAINT `report_crimes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `statements`
--
ALTER TABLE `statements`
  ADD CONSTRAINT `statements_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `statements_crime_id_foreign` FOREIGN KEY (`crime_id`) REFERENCES `report_crimes` (`id`);

--
-- Constraints for table `station_contacts`
--
ALTER TABLE `station_contacts`
  ADD CONSTRAINT `station_contacts_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
