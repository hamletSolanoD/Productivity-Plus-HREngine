-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 05:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workday_id` bigint(20) UNSIGNED NOT NULL,
  `workday_uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `date` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `minutes` int(11) DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `place_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude_end` double DEFAULT NULL,
  `longitude_end` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `workday_id`, `workday_uuid`, `uuid`, `type`, `status`, `start`, `date`, `end`, `minutes`, `timezone`, `description`, `place`, `latitude`, `longitude`, `place_end`, `latitude_end`, `longitude_end`, `created_at`, `updated_at`) VALUES
(1, 21, 'd79d1853-5a9c-3a21-a96a-f4da8fac14bb', 'bbeb3e7e-c0bb-31c3-8a18-3b3124700f7c', 'W', 'O', '2023-03-08 00:00:00', '2023-03-08 00:00:00', NULL, NULL, 'America/Denver', 'Eos culpa modi autem beatae quisquam odio tempora.', '744 Johnston Brooks\nMartineborough, NH 61964', 71.175646, -36.896352, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(2, 22, 'f8162403-2024-3029-8bf6-7be019bd57b2', '35d0a82a-f5eb-3494-b5da-7019b96e3aeb', 'B', 'C', '2023-03-12 05:07:22', '2023-03-12 00:00:00', '2023-03-12 07:07:22', 120, 'America/Denver', 'Sunt autem quod error in autem.', '212 Bailey Club Apt. 574\nKshlerinborough, AR 36010', -11.062639, 59.794184, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(3, 23, 'd3a30cbd-8d73-38ac-a8e1-d4d54dc50ffd', '64defa01-6d60-3e08-8865-090ac5ed7cf6', 'B', 'O', '2023-03-06 00:00:00', '2023-03-06 00:00:00', NULL, NULL, 'America/Denver', 'Voluptatem amet non ut qui.', '954 Eliezer Center Apt. 188\nKipmouth, IA 46913', -66.264086, 105.000992, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(4, 24, '55f17819-22cf-378e-9b18-d67ab9907dc4', 'ff829cf1-d978-3410-b72b-02359146242a', 'B', 'C', '2023-03-10 04:01:08', '2023-03-10 00:00:00', '2023-03-10 07:01:08', 180, 'America/Denver', 'Ab maxime aut quasi dolor ut.', '823 Benny Ports\nFeilburgh, AR 78104', 2.934007, -76.365058, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(5, 25, '269eb18b-ab3a-3df2-80ea-9162ef77d9db', 'a37de84d-44bb-3e94-9b54-4cc7f6e97081', 'W', 'C', '2023-03-12 00:00:00', '2023-03-12 00:00:00', '2023-03-12 03:00:00', 180, 'America/Denver', 'Et provident ut sint similique.', '984 Keeling Prairie\nStanborough, MS 29272-9428', -43.780149, -24.724052, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(6, 26, '32cb3bcf-aea1-355a-bd4d-4588583a3e44', '8866f5f3-c31a-304d-97f7-6833dbc65f1d', 'B', 'O', '2023-03-07 00:00:00', '2023-03-07 00:00:00', NULL, NULL, 'America/Denver', 'Ut et dolores iure voluptatem molestiae.', '67849 Alex Freeway Apt. 700\nNorth Clevemouth, NV 03033-1256', -5.470618, 7.129597, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(7, 27, '648399d5-4aa7-3cef-add5-8b120094d756', 'cabd37e6-c7f1-3edd-b612-e432a5e9d9f4', 'W', 'C', '2023-03-09 02:51:07', '2023-03-09 00:00:00', '2023-03-09 04:51:07', 120, 'America/Denver', 'Et consectetur cupiditate recusandae impedit suscipit consectetur.', '47993 McKenzie Vista\nSchusterhaven, NY 04649-1271', 10.373169, -119.395714, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(8, 28, '5ef401c6-06c7-3391-bd94-5674ac53b9db', '3bb740e7-af1d-3922-8df1-7bfafc96baf4', 'W', 'O', '2023-03-11 02:38:36', '2023-03-11 00:00:00', NULL, NULL, 'America/Denver', 'Debitis autem est ipsam nemo ut repellat.', '1825 Runte Plaza\nNew Blake, MN 18109-5275', -45.963311, 21.410824, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(9, 29, '68bd33a1-e794-3c87-9dee-c09b6445fc6a', 'ace6c711-43c9-3a89-95d9-29c5a570b619', 'W', 'C', '2023-03-12 08:09:03', '2023-03-12 00:00:00', '2023-03-12 09:09:03', 60, 'America/Denver', 'Laboriosam architecto eligendi expedita minus perspiciatis at.', '7724 Lennie Drive Suite 348\nProsaccoburgh, NC 93913-8024', -13.67964, 60.670319, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(10, 30, '0631ec71-d39a-3109-aeca-40695f2dee15', '1ad65ab7-3a58-3ee1-9baf-5a94c4ec6a55', 'B', 'O', '2023-03-12 00:00:00', '2023-03-12 00:00:00', NULL, NULL, 'America/Denver', 'Temporibus saepe illo sequi dicta quibusdam reprehenderit.', '507 Turner Mews\nDelilahhaven, WI 41315-1617', 19.467918, 5.498991, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(11, 31, '775a4405-a0e4-3dd6-bf2f-7718fd066e70', '07a8f1f4-67e4-3507-94c4-1e1b653f7490', 'B', 'O', '2023-03-11 00:00:00', '2023-03-11 00:00:00', NULL, NULL, 'America/Denver', 'Alias qui tenetur maiores mollitia unde corporis.', '71532 Ashton Forges\nKarinestad, TX 49961', -74.486123, 62.174801, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(12, 32, '1de500ec-4fdf-368d-bf69-d34db410de42', 'e06f2500-62f4-3d7c-a397-7e6ff8e3c8cc', 'B', 'C', '2023-03-06 02:28:59', '2023-03-06 00:00:00', '2023-03-06 05:28:59', 180, 'America/Denver', 'Maxime quos deserunt assumenda iure officia.', '75629 Felicity Place Suite 430\nWest Stuart, IA 70214-5628', 51.315487, 39.983649, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(13, 33, '69368728-7cf2-3e6a-8a7c-6c83a9ac94bb', '61208e56-03c5-36a5-9603-763d9111fad7', 'W', 'O', '2023-03-13 00:00:00', '2023-03-13 00:00:00', NULL, NULL, 'America/Denver', 'Necessitatibus officiis officiis quis.', '2157 Neha Street\nWest Hermina, AL 59616', 79.55633, -169.197763, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(14, 34, 'c10725e9-39d9-3c67-96bf-f65e1efc7f3f', 'fbaaaa9b-ce87-3c03-8d84-ddc374fafba6', 'W', 'C', '2023-03-06 05:48:20', '2023-03-06 00:00:00', '2023-03-06 06:48:20', 60, 'America/Denver', 'Et impedit quia illum vitae ducimus.', '737 Quitzon River\nWest Felipe, TX 67516-5089', -33.428961, -29.470123, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(15, 35, '845cd351-f724-3a1b-b3ef-bdf6d78cba15', 'f28b1a24-9527-3013-a2d0-1ce0b2a96800', 'B', 'C', '2023-03-11 02:37:49', '2023-03-11 00:00:00', '2023-03-11 04:37:49', 120, 'America/Denver', 'Nisi aut iusto ullam voluptatum qui ipsa animi.', '34003 Collier Junctions Apt. 983\nPort Maymie, IL 19190', 40.886444, 110.047534, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(16, 36, '7f4253af-eead-37e6-9091-8f8ba1a9ddc2', '7f8e6b19-ac75-31e1-a0a1-9d9bb179087e', 'W', 'O', '2023-03-10 03:22:40', '2023-03-10 00:00:00', NULL, NULL, 'America/Denver', 'Quis qui laboriosam accusantium tenetur.', '6806 McGlynn Plain\nNew Leatha, IL 98901', -78.137191, 60.10474, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(17, 37, '0bfccfe9-0c8f-35f2-b462-b89c0848536a', '9c772d6c-4231-3d64-89bd-d579ae0b56ec', 'B', 'O', '2023-03-12 07:53:00', '2023-03-12 00:00:00', NULL, NULL, 'America/Denver', 'Non qui dolore sint corporis aut.', '59617 Herman Motorway Suite 951\nHaleyhaven, VT 43423', 25.797431, 100.132773, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(18, 38, '7d178c4a-61f6-3e41-811e-9380e45a8964', 'f27eceb2-e37e-31c6-9906-a93d157bb3a5', 'W', 'O', '2023-03-09 00:00:00', '2023-03-09 00:00:00', NULL, NULL, 'America/Denver', 'Quae veniam aliquam dolorem autem debitis ipsam.', '5629 O\'Kon Ways Apt. 120\nLake Sandramouth, MN 76755', -74.286713, -15.220069, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(19, 39, 'b3bbdb29-9304-3b73-b0c4-d65fdc4a5cf6', '9f81b05a-31f9-3ad3-827c-00ce8115813f', 'B', 'O', '2023-03-09 00:00:00', '2023-03-09 00:00:00', NULL, NULL, 'America/Denver', 'Delectus nostrum nesciunt odio corporis placeat.', '549 Corkery Island Apt. 331\nKunzehaven, GA 40509', -60.631303, -34.685281, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(20, 40, '234e0e6a-d3e2-3a80-b0d5-7107c961549c', 'ff006472-1065-3c02-b4b0-c0a3bd98b72d', 'B', 'O', '2023-03-08 08:39:52', '2023-03-08 00:00:00', NULL, NULL, 'America/Denver', 'Possimus dolores facilis placeat vitae necessitatibus.', '4270 Jerad Cape Suite 481\nGleasonberg, MA 94073-7354', 79.539984, 30.717466, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(21, 2, '519651f9-eae9-390e-bffe-5a6551badd9f', '5a217fd2-0c57-4e4c-a802-c8bf10581bf8', 'B', 'O', '2023-03-13 19:41:44', '2023-03-13 00:00:00', NULL, NULL, 'America/Denver', 'Pause to go to the store', '3079 Gorczany Loaf Apt. 301 Cormierside, WY 41845', 33.484421, 127.429321, NULL, NULL, NULL, '2023-03-14 01:41:44', '2023-03-14 01:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `activity_files`
--

CREATE TABLE `activity_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `activity_uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_files`
--

INSERT INTO `activity_files` (`id`, `activity_id`, `activity_uuid`, `uuid`, `extension`, `created_at`, `updated_at`) VALUES
(1, 11, '07a8f1f4-67e4-3507-94c4-1e1b653f7490', 'ede4d759-858c-3890-9498-9c3ba89192b6', 'x3d', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(2, 12, 'e06f2500-62f4-3d7c-a397-7e6ff8e3c8cc', '93462e91-0c89-38c9-9fac-2944f79159f1', 'cpio', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(3, 13, '61208e56-03c5-36a5-9603-763d9111fad7', 'b60b510b-ca5d-3c86-8f25-1270e854afe5', 'css', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(4, 14, 'fbaaaa9b-ce87-3c03-8d84-ddc374fafba6', 'dd780246-3c39-3ee0-9493-ac2a2507f1a1', 'mus', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(5, 15, 'f28b1a24-9527-3013-a2d0-1ce0b2a96800', '33e53a2c-5e0d-3a69-82b6-8448649d7d1f', 'tar', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(6, 16, '7f8e6b19-ac75-31e1-a0a1-9d9bb179087e', '62f83b16-f586-3f39-9014-4dd65fbc8fb8', 'mime', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(7, 17, '9c772d6c-4231-3d64-89bd-d579ae0b56ec', 'd5446f32-bc62-3984-9549-e590dc82982d', 'odf', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(8, 18, 'f27eceb2-e37e-31c6-9906-a93d157bb3a5', 'ee8f8b55-7dc4-30db-9074-70cb43c90f00', 'xspf', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(9, 19, '9f81b05a-31f9-3ad3-827c-00ce8115813f', '9bc205d3-1f88-3f04-bf57-2d388ed504c1', 'msf', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(10, 20, 'ff006472-1065-3c02-b4b0-c0a3bd98b72d', 'eebe05ff-5382-3e20-98cc-3e0596729744', 'ott', '2023-03-14 01:29:49', '2023-03-14 01:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paternalsurname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maternalsurname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employerregistry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tradename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legalrepresentative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employerregistry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tradename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legalrepresentative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeecontract_id` int(11) DEFAULT NULL,
  `employeecontract_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employeeaddress_id` int(11) DEFAULT NULL,
  `employeeaddress_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employeebeneficiary_id` int(11) DEFAULT NULL,
  `employeebeneficiary_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employeesalary_id` int(11) DEFAULT NULL,
  `employeesalary_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employer_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paternalsurname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maternalsurname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date NOT NULL,
  `birthstate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matrimonialregime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maritalstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonacot` tinyint(1) NOT NULL DEFAULT 0,
  `fonacot_total` decimal(8,2) DEFAULT NULL,
  `fonacot_discount` decimal(8,2) DEFAULT NULL,
  `infonavit` tinyint(1) NOT NULL DEFAULT 0,
  `infonavit_creditnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infonavit_discount` decimal(8,2) DEFAULT NULL,
  `infonavit_factor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeecontract_id`, `employeecontract_uuid`, `employeeaddress_id`, `employeeaddress_uuid`, `employeebeneficiary_id`, `employeebeneficiary_uuid`, `employeesalary_id`, `employeesalary_uuid`, `employer_id`, `employer_uuid`, `uuid`, `firstname`, `paternalsurname`, `maternalsurname`, `gender`, `phone`, `email`, `birthdate`, `birthstate`, `matrimonialregime`, `maritalstatus`, `rfc`, `curp`, `nss`, `fonacot`, `fonacot_total`, `fonacot_discount`, `infonavit`, `infonavit_creditnumber`, `infonavit_discount`, `infonavit_factor`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, '317fc48d-c495-3f64-94ed-b1e85be979ac', 'd6e4c50b-32f9-3773-b01c-753dab3a18ed', 'Murphy', 'Lubowitz', 'Block', 'M', '+1 (754) 360-4436', 'laverna.dare@hotmail.com', '1991-12-23', 'Idaho', 'CS', 'M', NULL, 'CURP114cui', NULL, 1, '75894.00', '5421.00', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, '4cd09e85-063c-3eef-9c5e-d607f0b2e439', '4896c4b8-874a-3674-ae5f-39fad9a2b50f', 'Reanna', 'Ortiz', 'Johnston', 'F', '559.495.2920', 'joshua.torp@jacobs.com', '2019-07-24', 'Iowa', NULL, 'S', NULL, 'CURP494vxp', NULL, 0, NULL, NULL, 1, 'INF810ucv', '886.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 'df893ef0-341f-3c7b-b66f-de7e5501d3af', '9ddb26ef-12be-3949-9e90-2aa80f34efdf', 'Ronny', 'Ortiz', 'Witting', 'M', '701.800.0085', 'justina15@schuster.com', '1993-02-24', 'Louisiana', 'CS', 'M', 'RFC566mum', 'CURP990qvv', NULL, 0, NULL, NULL, 1, 'INF857bvy', '27.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, 'e59dd73b-6f48-379d-8d38-f4e0629d01ef', '11c00082-82b0-3a19-b8e6-f792e401db83', 'Luella', 'Torphy', 'Friesen', 'F', '(430) 858-1732', 'kurt83@gmail.com', '2011-03-22', 'New Mexico', 'SP', 'M', NULL, NULL, NULL, 1, '50525.00', '1684.17', 1, 'INF452yju', '953.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, '4ebc251a-f38a-3785-831f-18ac89aca19e', '91025495-9b70-3603-be23-2113f57bde2c', 'Rogers', 'Ferry', 'Flatley', 'M', '630-279-6149', 'hagenes.vern@hotmail.com', '2001-01-21', 'West Virginia', NULL, 'S', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '9175873c-c8bc-347b-b4f3-75302eec2f2e', '0e2a04be-eabf-35ef-8bd2-5ae15612efb3', 'Molly', 'Waters', 'Wehner', 'F', '1-424-665-8505', 'jacobi.prudence@yahoo.com', '2010-07-23', 'Illinois', NULL, 'S', NULL, 'CURP428nvp', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 'b43f1337-0f0a-337b-8a77-626d45646d8a', '8f2263a5-1c3d-39ba-960f-4230dbc0eda6', 'Alexander', 'Weber', 'Ryan', 'M', '1-425-463-7954', 'rwalker@hotmail.com', '1971-12-25', 'Massachusetts', NULL, 'S', 'RFC614gvz', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, '450bf1c3-7f71-37fb-af46-e2d2e48de2b8', '5675a8fc-c642-389c-8601-bb3563048f5f', 'Miracle', 'Kshlerin', 'Gulgowski', 'F', '+16899584832', 'ylehner@hotmail.com', '1985-02-13', 'Virginia', NULL, 'S', 'RFC500xvx', NULL, NULL, 1, '58117.00', '1614.36', 1, 'INF950pgn', '1031.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, '67c523dc-a161-3277-a999-c0d00466ff10', 'a8e550b4-ee7b-3ad5-95bf-6b457bccf3a3', 'Adrian', 'Bernier', 'Schuppe', 'M', '+1 (442) 584-6965', 'scottie.dooley@walter.com', '1996-01-02', 'Minnesota', 'CS', 'M', NULL, NULL, 'NSS608xnl', 1, '75349.00', '1345.52', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, '7fda7796-08b4-3ad8-9416-33c507bb670a', '41609a08-649e-3a90-a9ba-34fd237690f3', 'Elsa', 'Bartell', 'Effertz', 'F', '+16506547769', 'keven18@hodkiewicz.com', '2008-06-17', 'Texas', 'SP', 'M', NULL, NULL, NULL, 1, '28958.00', '603.29', 1, 'INF819anj', '1224.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, '4e1524e0-bb7e-30d2-8097-416ce3cbe7e0', '28ea3826-8838-371a-8fdd-bbbd8abe048d', 'Michael', 'Walter', 'Hane', 'M', '571-436-3888', 'wleffler@yahoo.com', '1993-07-02', 'North Carolina', NULL, 'S', 'RFC504nhm', NULL, 'NSS528asq', 1, '39847.00', '9961.75', 1, 'INF376bqu', '898.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '9583fb64-a07a-3d72-8a02-d2507524d383', '5bf86096-251c-3a5c-8806-d4eb3fd7cde2', 'Fermin', 'Howell', 'Ankunding', 'M', '+1-931-993-4906', 'kuphal.sheridan@hotmail.com', '2016-11-14', 'Virginia', 'CS', 'M', NULL, 'CURP907wwp', NULL, 1, '36253.00', '5179.00', 1, 'INF722exe', '264.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '31ac4549-0085-35d0-9cb7-8abe1c2e6a7b', '62adecc8-ab29-367d-a947-7c6d5dc68472', 'Dalton', 'Abbott', 'Auer', 'M', '+17545281751', 'lmcdermott@hotmail.com', '2002-07-11', 'Kentucky', NULL, 'S', 'RFC864igr', NULL, NULL, 0, NULL, NULL, 1, 'INF441dsz', '544.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '4a301587-0852-341b-9fe0-f310d342ede1', 'f365c7db-6ec1-38ff-8d9e-aec539925574', 'Christ', 'Collins', 'Barton', 'M', '206.994.0054', 'oconnell.elta@hilpert.com', '1976-02-11', 'Montana', NULL, 'S', 'RFC988rcv', 'CURP515exz', 'NSS986wzy', 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 'd3676bcb-6b88-3012-83d0-9cc8c6490ad8', 'fd2f704e-cca2-337a-b843-002154f22fe6', 'Ivah', 'Sanford', 'Osinski', 'F', '747-517-2675', 'nels.dooley@yahoo.com', '2002-08-04', 'Alabama', 'CS', 'M', 'RFC997ixc', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 'b4ca644c-2470-3309-bffb-c8331ebda0bf', '0ebb1a63-3b85-3720-8318-8e328ea1c8d8', 'Deshaun', 'Beer', 'Rippin', 'M', '+17602072608', 'mallie.kuhlman@wilderman.com', '2010-10-01', 'New Hampshire', 'SP', 'M', NULL, NULL, NULL, 1, '87372.00', '7942.91', 1, 'INF625wjx', '571.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32, '4c79da35-6df2-39c3-9ed3-e93f6deb11f6', '32e4f883-820b-36b1-ab4d-8e1f713e310f', 'Santina', 'Emmerich', 'Waters', 'F', '+1-747-314-4302', 'filomena.kassulke@hotmail.com', '1980-10-22', 'Connecticut', NULL, 'S', NULL, 'CURP011dij', NULL, 0, NULL, NULL, 1, 'INF481fgv', '1511.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, 'ee4248e7-2d8d-3d1a-8c4c-850a01b889c9', '7961de6a-d9fd-318f-a3ec-609af6344c20', 'Arlo', 'Ullrich', 'Strosin', 'M', '929.476.9397', 'heller.alysha@klein.org', '2020-05-01', 'Oklahoma', NULL, 'S', NULL, 'CURP020gwm', NULL, 0, NULL, NULL, 1, 'INF985lnh', '874.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 36, 'f8480e6a-6f85-37a7-bf9a-9ebb3637d8da', '7626fce2-a569-3347-a9ae-9f0acff5713d', 'Breanne', 'Kertzmann', 'Bruen', 'F', '380-525-7674', 'zgrady@yahoo.com', '2014-01-02', 'Hawaii', NULL, 'S', 'RFC332rum', NULL, 'NSS504ayj', 1, '4688.00', '85.24', 1, 'INF587lcj', '1149.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, 'a5e17c2b-e932-3dfa-a9d7-7678850c5111', 'e0e49bed-3ce2-38d8-9bd0-b405c4e5ef31', 'Patrick', 'Bayer', 'Gaylord', 'M', '1-360-932-8742', 'vladimir.lehner@smitham.info', '1976-12-08', 'Idaho', NULL, 'S', 'RFC205kdr', 'CURP130kdy', NULL, 0, NULL, NULL, 1, 'INF822qis', '1478.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '5212ef2c-9143-379c-8508-595ec60afa42', '486e0433-f12e-3960-89cf-f8cbd45da2ce', 'Keanu', 'Gorczany', 'Parker', 'M', '909.537.4057', 'fbraun@pfeffer.org', '2014-11-03', 'Louisiana', 'CS', 'M', 'RFC360zsp', 'CURP320ymm', NULL, 1, '33789.00', '614.35', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, 'f7d09172-0cc7-3597-b625-34c94fe089ce', '52bf2863-41fe-3c75-b09f-7632dacab4d9', 'Kari', 'Schultz', 'Nader', 'F', '+1 (805) 456-7917', 'okon.scotty@thompson.com', '2011-12-17', 'Wisconsin', 'CS', 'M', NULL, NULL, NULL, 1, '17111.00', '2444.43', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 44, '4824b19c-0815-3803-b2db-df86fbb554c0', '135a9a1d-d531-3748-bf89-b14eaa2427dd', 'Kaya', 'Gutmann', 'Hilpert', 'F', '+1.820.239.6760', 'noble.schumm@yahoo.com', '1970-12-09', 'Mississippi', 'CS', 'M', NULL, NULL, NULL, 1, '24767.00', '24767.00', 1, 'INF575zsq', '479.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 46, 'c73bcfb7-c4f5-3b26-9b36-df31831dbed7', 'c752f5f1-837a-3431-8283-0e7bded70233', 'Ashton', 'Davis', 'Runte', 'M', '+1-256-353-3894', 'jabari39@schultz.biz', '2022-10-15', 'Mississippi', 'SP', 'M', NULL, 'CURP286krk', 'NSS773vsd', 1, '32619.00', '906.08', 1, 'INF810qzl', '393.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 48, 'bf133d25-4ef0-3efd-b7ff-0d7090bd2870', 'ef4da480-6eac-3649-8e12-397af0036f98', 'Abbey', 'Nader', 'Bergstrom', 'F', '364-709-0828', 'freeda06@morar.com', '2011-12-20', 'Hawaii', 'CS', 'M', NULL, 'CURP801ksj', NULL, 1, '21746.00', '836.38', 1, 'INF356qvn', '499.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, '94111e6d-52bb-3bd1-b9f4-c270479516ac', '2934a35d-54c9-3e7d-b886-d23e68e9cf5d', 'Marquise', 'Armstrong', 'Hand', 'F', '(202) 878-3482', 'tboyer@nikolaus.com', '1985-01-29', 'North Carolina', NULL, 'S', 'RFC675pnc', NULL, 'NSS151oql', 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 52, '0efcf268-415b-345d-a10d-ebb3e4ae7942', '755e5bc2-97f0-38a1-ad02-8acf944b2080', 'Adriana', 'Lynch', 'Wolf', 'F', '1-575-389-6908', 'eva52@yahoo.com', '2007-07-06', 'Georgia', 'CS', 'M', 'RFC036trf', NULL, NULL, 0, NULL, NULL, 1, 'INF020ryf', '1257.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 54, '7a24fb97-6f91-391b-8871-7480496bda8e', '5d39a8f9-9c6d-34aa-b579-60773883ac17', 'Burdette', 'Kulas', 'Hickle', 'F', '1-801-797-4700', 'beatty.deven@hotmail.com', '2005-11-17', 'Massachusetts', 'SP', 'M', NULL, 'CURP164pkw', 'NSS181jth', 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 56, '6ef658d7-7e37-3300-81f9-a6b386766895', '87e59e0c-72d9-3a88-b79b-e657593c1c7d', 'Marietta', 'Cole', 'Little', 'F', '+15163485002', 'carmine.williamson@gibson.com', '2014-10-31', 'Massachusetts', NULL, 'S', NULL, NULL, NULL, 1, '55318.00', '6146.44', 1, 'INF468ghx', '254.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 58, '64499c97-5c0a-3409-86bb-fdcc3f1bbea2', '53111607-e52c-3666-993a-d219859afaf8', 'Dylan', 'Durgan', 'Huel', 'M', '347-355-9309', 'cmcclure@gmail.com', '2021-01-05', 'Montana', 'SP', 'M', NULL, 'CURP360zqx', 'NSS635yjf', 1, '27968.00', '570.78', 1, 'INF523obt', '617.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, '259153ff-6e0d-37e2-a656-0f96a9a488ba', '5addb1ca-42ae-3ea7-b592-65336441629d', 'Bruce', 'Cummerata', 'Rau', 'M', '1-786-848-7296', 'lavern83@gmail.com', '1998-11-05', 'Alabama', 'CS', 'M', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 62, '14d7b86e-c348-3c0f-99aa-2e28f06d254e', '287466e7-4e8c-3667-9102-3ed6ddb19f6f', 'Ayla', 'Ziemann', 'Donnelly', 'F', '1-609-543-0403', 'goldner.ferne@jakubowski.com', '1984-05-11', 'Alabama', 'SP', 'M', 'RFC166mrs', 'CURP470dbw', NULL, 1, '29134.00', '1165.36', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 63, '0fd9f121-acde-34bb-9d3c-13f3a00d504f', '41d1e585-c8da-3e23-b456-f2a94a559fee', 'Susie', 'Bergstrom', 'Hyatt', 'F', '585-549-7246', 'radams@torphy.com', '2004-02-10', 'Illinois', NULL, 'S', NULL, 'CURP770fsm', 'NSS452xmc', 1, '28244.00', '614.00', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 64, '24058ac4-dfdb-3d76-9643-f7441ec829a3', 'd271c802-fb8a-3914-8ced-e4a04c03e4ca', 'Mylene', 'Gislason', 'Stanton', 'F', '(863) 604-7244', 'wpredovic@hermiston.com', '1978-02-12', 'Delaware', NULL, 'S', NULL, 'CURP061ohq', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65, '81cf4186-ba05-3578-94f5-bd99c4debd70', 'a6894e0f-c9e4-3a47-beb3-72c4622572b5', 'Iliana', 'Jacobi', 'Schmeler', 'F', '1-503-833-9907', 'alphonso.bogan@yahoo.com', '1978-12-16', 'Indiana', 'CS', 'M', NULL, NULL, 'NSS436mbg', 1, '33891.00', '627.61', 1, 'INF042bxq', '557.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 66, 'b809f58d-0f02-3f31-a828-896d1b6d2c6e', '135d87eb-05d9-33f4-aae1-375f051162bb', 'Gia', 'Schmidt', 'Senger', 'F', '1-531-396-4854', 'tristin37@gmail.com', '1986-02-06', 'Kentucky', 'CS', 'M', NULL, NULL, NULL, 1, '15574.00', '556.21', 1, 'INF224ryp', '626.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 67, 'b855ae76-c513-31c4-8b79-9bcc523f6ad8', '593adef3-bacc-3e5b-b606-47aad77cbf64', 'Einar', 'Bayer', 'Reichel', 'M', '217-734-7915', 'shields.alia@daugherty.com', '2007-09-20', 'Utah', NULL, 'S', 'RFC310qzl', 'CURP975mvj', 'NSS917rso', 1, '2997.00', '85.63', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 68, 'a12b2baf-dcb5-3744-bb93-c45cb26082e0', '7282a782-83f5-3603-9e85-b873f0e76609', 'Vita', 'Reichel', 'Barrows', 'F', '+1 (640) 525-2830', 'cormier.madonna@gmail.com', '1982-05-12', 'Oregon', NULL, 'S', NULL, 'CURP271uzg', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 69, 'ba4e2b94-542e-396a-b4bf-248b424c25f5', 'c9f44266-ea3b-3ee9-a673-9a32d8acb098', 'Janice', 'Beatty', 'Bosco', 'F', '1-813-818-6475', 'waelchi.gardner@hotmail.com', '2022-05-19', 'New Jersey', NULL, 'S', NULL, 'CURP691cry', 'NSS936jci', 1, '27395.00', '3913.57', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 70, '79ddc565-4d99-3597-9998-b3aad4d4b888', 'ecf8a31b-da4f-3582-93ea-4dd899bfdaee', 'Ilene', 'Mante', 'Hartmann', 'F', '+1.425.301.8677', 'llewellyn.flatley@dooley.info', '1989-05-05', 'District of Columbia', NULL, 'S', NULL, NULL, 'NSS687cqi', 1, '19736.00', '939.81', 1, 'INF323bez', '1101.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 71, '44903ef9-829d-3557-af0f-b1b60b479102', 'c4dacadd-3b2b-38c4-a92a-7a17632e8015', 'Bethel', 'Osinski', 'McGlynn', 'F', '+1-820-899-7711', 'regan.ryan@lindgren.info', '2008-03-07', 'Tennessee', 'CS', 'M', 'RFC848evc', 'CURP743xan', NULL, 1, '6634.00', '189.54', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 72, '8f52ab61-6709-3a68-b293-1b3b0c797fa6', '2d838226-93da-3dea-b8e8-406e7292296b', 'Jesus', 'Mertz', 'Stoltenberg', 'M', '+14016858797', 'heller.rico@hotmail.com', '1992-02-05', 'Colorado', NULL, 'S', NULL, NULL, 'NSS129lte', 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, '5fdbedd3-3cb9-3ee6-ae94-20f75d628259', '09f32bf1-4d3e-3eb7-b6dc-69c31490cc0d', 'Donny', 'Sawayn', 'Flatley', 'M', '231-938-1111', 'adele.lubowitz@yahoo.com', '1982-02-28', 'Florida', NULL, 'S', 'RFC952sja', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 76, '536c1dab-c0c3-3598-a6eb-8968f22513ef', 'c342ba83-b181-3d34-8273-d9f123bda2d8', 'Berneice', 'Kris', 'Bechtelar', 'F', '+1-351-870-8576', 'davis.allie@hotmail.com', '2015-02-23', 'Texas', NULL, 'S', 'RFC057zqi', 'CURP233btj', 'NSS113kyg', 1, '77346.00', '4297.00', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78, 'd5fc81d8-f0dd-3941-b703-706caa3f2d5c', '80904b12-bd89-3030-ac8e-3e0549ba781c', 'Nova', 'Marks', 'Sauer', 'F', '(667) 249-4899', 'cbaumbach@gibson.org', '1997-02-17', 'Pennsylvania', NULL, 'S', NULL, NULL, NULL, 1, '63648.00', '2893.09', 1, 'INF239hum', '1324.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 'cfe48039-e181-3ec6-87ab-a5950b8a9e13', '4a497c09-6389-3de0-96c5-dbee0b95ad67', 'Manley', 'Klein', 'Lehner', 'M', '+1-234-441-2424', 'julien.moen@hyatt.com', '2019-04-21', 'Mississippi', 'CS', 'M', NULL, 'CURP606ioy', 'NSS447oyl', 1, '30505.00', '622.55', 1, 'INF275kjm', '1441.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 82, '208a8615-5a9c-35ac-a37c-5b5597d85056', 'eb0c4560-345f-3f6d-a8be-5b62f52cd2b5', 'Gerry', 'O\'Conner', 'Smith', 'F', '316.568.7322', 'kkoss@yahoo.com', '2004-01-21', 'Florida', NULL, 'S', NULL, 'CURP931cjh', 'NSS833bge', 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 84, '2ee2b196-d988-3898-bd54-31d857e8b048', '3453c764-b60e-33b4-a7ab-7bd5b4739171', 'Estevan', 'Shields', 'Gerhold', 'M', '+1 (765) 598-7983', 'ckovacek@nitzsche.com', '1982-05-15', 'Arkansas', NULL, 'S', 'RFC426emz', NULL, 'NSS507swn', 0, NULL, NULL, 1, 'INF258hdr', '1568.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86, 'cc60a689-ae3f-36d5-9a3d-e6c8499f5eda', 'e16cb448-8359-3753-8929-118ae5073998', 'Amanda', 'Willms', 'Wiza', 'F', '(919) 762-1025', 'walter76@gmail.com', '2016-12-31', 'Colorado', 'CS', 'M', 'RFC096ynn', NULL, NULL, 1, '28919.00', '590.18', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 88, '81db0542-3f3e-3d58-a41e-38d5e6b1ec05', '70b2a620-1185-3ac9-ae87-6a68f9667914', 'Griffin', 'Pacocha', 'Rowe', 'M', '(517) 462-1684', 'cpaucek@toy.com', '1977-08-29', 'Georgia', NULL, 'S', NULL, NULL, NULL, 1, '63806.00', '4253.73', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 90, '9c865ed8-4c3c-39d5-aabb-ed52563d680b', 'e58a4719-d630-3ff3-9dab-6f564d6036cd', 'Landen', 'Sanford', 'Witting', 'M', '(503) 203-1025', 'gabriella15@borer.info', '2000-02-28', 'Nevada', NULL, 'S', NULL, NULL, 'NSS608qxi', 1, '61344.00', '3228.63', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 92, '5d6c7ffd-0af8-3c2e-9cd7-1baef406ab48', '3aaf87e0-abc5-38ce-8335-195aadd4b7c8', 'Constantin', 'Hansen', 'Rosenbaum', 'M', '+1.726.419.2277', 'vdickens@yahoo.com', '2007-08-01', 'South Dakota', NULL, 'S', 'RFC377fgu', NULL, 'NSS608iqg', 1, '77020.00', '5501.43', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 94, 'baa360e1-85b0-3747-9100-59bbc125d442', 'a15c290e-0777-3de8-8076-b29820709052', 'Keagan', 'Lynch', 'Haley', 'M', '1-614-291-5328', 'gweber@blanda.com', '2004-11-05', 'Minnesota', 'SP', 'M', NULL, NULL, NULL, 0, NULL, NULL, 1, 'INF179mel', '342.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 96, '98fd8f53-9fc1-382d-ac2d-261e6eb6a8fb', '1d52adeb-f3ea-3ef6-8f2d-61dd3d14686d', 'Mike', 'Pacocha', 'Turcotte', 'M', '+15755232517', 'mcglynn.damon@hotmail.com', '2021-08-29', 'Washington', NULL, 'S', 'RFC036fer', 'CURP381xdl', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 98, 'f3931551-28d6-359e-a751-9f4e3192f9c8', '3bd6e127-1daa-316b-8332-3fc518133989', 'Ole', 'Okuneva', 'Mraz', 'M', '+17153593456', 'mackenzie.corkery@schiller.biz', '1991-06-13', 'Alaska', 'CS', 'M', 'RFC217gwa', 'CURP719rqj', NULL, 1, '97497.00', '97497.00', 1, 'INF568sbm', '689.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, '950628ee-c7c3-3840-992a-70347519063b', 'c07acb85-5c78-3faf-b7f0-9ef523a30615', 'Korbin', 'Prosacco', 'Jacobson', 'M', '716-893-4122', 'djast@koepp.org', '1986-10-20', 'Illinois', NULL, 'S', NULL, 'CURP686nxw', 'NSS061igu', 0, NULL, NULL, 1, 'INF633otl', '980.00', 'MXN', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 102, '95f19dfe-00f6-3755-8762-8781d18e3a4e', 'e35361d1-e72b-3493-99ed-cc362f8bcf45', 'Garfield', 'Koss', 'Stamm', 'M', '786-587-5288', 'nola94@bode.com', '2012-03-11', 'North Carolina', 'CS', 'M', NULL, 'CURP898vhw', 'NSS241clt', 1, '18313.00', '425.88', 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 104, '32a6f439-03f6-3a56-ac20-6e9a2921cbe0', '2092a4da-ef69-315a-b362-c8bfe0f10f8e', 'Darrick', 'Medhurst', 'Rolfson', 'M', '(580) 915-6750', 'hbahringer@rice.com', '2011-10-08', 'Maryland', NULL, 'S', 'RFC222bae', NULL, NULL, 1, '99865.00', '14266.43', 1, 'INF477hsr', '591.00', 'UDIS', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 106, 'af1f0d70-febd-3193-86dc-487f87b5e3fe', '53b55999-0454-31fe-b4be-17715615fedb', 'Allan', 'Stracke', 'Hills', 'M', '+1-479-728-7614', 'dreichel@yahoo.com', '1993-03-30', 'Delaware', 'SP', 'M', NULL, 'CURP664ydc', NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 108, 'b4495903-e73a-37ee-ae85-f87a7783cfc7', 'c40f6df7-1d08-305e-b009-4dacfbe7c866', 'Esteban', 'Padberg', 'McClure', 'M', '(903) 878-4366', 'jessyca51@gmail.com', '1973-08-19', 'North Carolina', NULL, 'S', 'RFC745ium', NULL, 'NSS319slu', 0, NULL, NULL, 1, 'INF598okh', '192.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 110, '76176624-4437-3cb6-94fa-a3283c6e1d76', '78750f00-4210-3e85-85fd-3838682127e0', 'Emilie', 'Kshlerin', 'Hermiston', 'F', '+1-838-296-1994', 'halie.boyer@boyer.com', '2007-09-28', 'Kansas', NULL, 'S', 'RFC876sli', NULL, 'NSS269epy', 1, '98977.00', '3192.81', 1, 'INF796shz', '18.00', 'VSM', '2023-03-14 01:29:49', '2023-03-14 01:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `employee_files`
--

CREATE TABLE `employee_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_files`
--

INSERT INTO `employee_files` (`id`, `employee_id`, `employee_uuid`, `uuid`, `file`, `checked`, `created_at`, `updated_at`) VALUES
(1, 32, '287466e7-4e8c-3667-9102-3ed6ddb19f6f', '096a9d31-7fe7-3468-b67c-251298d25421', 'birthcertificate', 1, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(2, 33, '41d1e585-c8da-3e23-b456-f2a94a559fee', 'a02425d3-5ca1-3b45-bdde-be171feebf18', 'administrativerecord', 0, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(3, 34, 'd271c802-fb8a-3914-8ced-e4a04c03e4ca', '03b1676a-4044-391c-8fb8-92bcd2488cb5', 'infonavit', 1, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(4, 35, 'a6894e0f-c9e4-3a47-beb3-72c4622572b5', '144bff74-c19a-3432-b30f-2eb4df3c4867', 'birthcertificate', 0, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(5, 36, '135d87eb-05d9-33f4-aae1-375f051162bb', '52dd7cce-d5ae-320e-ae83-493c4ee14b52', 'infonavitprequalification', 1, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(6, 37, '593adef3-bacc-3e5b-b606-47aad77cbf64', 'dbb61c50-e765-3256-9764-6abd4b2f556c', 'infonavit', 1, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(7, 38, '7282a782-83f5-3603-9e85-b873f0e76609', 'd38c3b13-2fa3-3499-be55-84e5141d8d8d', 'infonavitprequalification', 1, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(8, 39, 'c9f44266-ea3b-3ee9-a673-9a32d8acb098', 'fdbd8ade-124f-35bb-937a-42702c55cc2d', 'birthcertificate', 1, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(9, 40, 'ecf8a31b-da4f-3582-93ea-4dd899bfdaee', '6b14f1bb-a47c-34dd-b497-94186352429c', 'proofofaddress', 0, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(10, 41, 'c4dacadd-3b2b-38c4-a92a-7a17632e8015', '5eea6384-82c8-314c-a711-d6876e20439f', 'infonavit', 0, '2023-03-14 01:29:49', '2023-03-14 01:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL,
  `outsource` tinyint(1) NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persontype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paternalsurname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maternalsurname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employerregistry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tradename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `legalrepresentative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outsourceat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `active`, `outsource`, `uuid`, `persontype`, `rfc`, `firstname`, `paternalsurname`, `maternalsurname`, `gender`, `birthdate`, `employerregistry`, `businessname`, `tradename`, `legalrepresentative`, `phone`, `email`, `outsourceat`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'fc87ede9-2da6-3292-aa93-6684966c3a51', 'M', 'RFC195blf', NULL, NULL, NULL, NULL, '1983-01-16', 'A83823pcl', 'Grady Inc', 'Jast Ltd', 'Prof. Colby Harber', '1-517-734-7114', 'juliet.jacobson@yahoo.com', 'Walter-Swaniawski', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(2, 1, 1, '501c891a-7bc4-336b-ae28-5618ead1de92', 'F', 'RFC939hod', 'Mohamed', 'Yundt', 'Rath', 'M', '1996-01-04', 'A83080uoa', 'Nicolas-Leannon', 'Bernhard, Schaefer and Renner', NULL, '657-565-0960', 'jaylin.thompson@oberbrunner.com', 'Littel Group', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(3, 0, 1, '22a62c31-4d6d-3797-aa3b-524d52cd1db2', 'M', 'RFC556tbg', NULL, NULL, NULL, NULL, '1979-03-13', 'A83620lup', 'Lemke, Runolfsson and Buckridge', 'Reinger Ltd', 'Ms. Estell Batz II', '617-517-7132', 'goodwin.solon@gmail.com', 'Pfannerstill, Reynolds and Bosco', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(4, 1, 0, '310cd2d0-f055-31c3-8ec9-e53ee4e52284', 'M', 'RFC512alu', NULL, NULL, NULL, NULL, '1977-12-25', 'A83275npo', 'Schuppe, Kemmer and Yundt', 'Gottlieb, Abshire and Upton', 'Efren Weimann', '+1.574.648.5314', 'preynolds@vandervort.biz', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(5, 1, 1, 'e8dadc4f-882e-3ba4-852e-e7a59ced980f', 'M', 'RFC787xvj', NULL, NULL, NULL, NULL, '2022-04-15', 'A83608clp', 'Howe PLC', 'DuBuque-Botsford', 'Dr. Kennedy Cronin V', '1-559-884-2471', 'runolfsson.sonya@yahoo.com', 'Dach Group', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(6, 1, 0, '2868e826-ebb4-368f-968c-dca98cd188ea', 'F', 'RFC626wgr', 'Christian', 'Jaskolski', 'Cassin', 'M', '1975-07-26', 'A83957qmg', 'Denesik and Sons', 'Ruecker-Kautzer', NULL, '563.894.6982', 'ohara.christy@farrell.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(7, 1, 0, '7f04ece6-9c8e-300f-b7b5-67666bb9f393', 'F', 'RFC516uln', 'Esta', 'Stracke', 'Schinner', 'F', '1986-04-14', 'A83006wze', 'Schuster-Brown', 'Conn-Roob', NULL, '+1-979-752-0438', 'seamus.kerluke@fisher.org', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(8, 0, 0, '7340c401-522f-37fd-8bbb-37d05265b800', 'M', 'RFC517qpm', NULL, NULL, NULL, NULL, '1970-03-08', 'A83397ncv', 'Blick, Beatty and Bosco', 'Paucek PLC', 'Ms. Alysa Collier DVM', '+12239037607', 'trudie.hyatt@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(9, 1, 1, 'b0e9dd72-12e1-329d-b0e2-e96c50a95699', 'F', 'RFC646jqw', 'Aileen', 'Brown', 'Miller', 'F', '2018-11-11', 'A83480yst', 'DuBuque-Gorczany', 'Block Ltd', NULL, '+1-480-795-4693', 'pouros.joannie@fadel.com', 'Will and Sons', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(10, 1, 0, 'ac349a7e-ddbc-3bac-a3ce-49218f53ed70', 'F', 'RFC608ghp', 'Alexis', 'Schultz', 'Powlowski', 'M', '2004-01-21', 'A83840yno', 'Durgan-Rohan', 'Lubowitz Ltd', NULL, '801.466.8460', 'orland.torp@reynolds.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(11, 1, 1, '317fc48d-c495-3f64-94ed-b1e85be979ac', 'M', 'RFC401dbf', NULL, NULL, NULL, NULL, '1991-12-07', 'A83981zvr', 'Howell Inc', 'Jacobi LLC', 'Pablo Smitham', '415.774.9715', 'lyric.hudson@stiedemann.com', 'Hill and Sons', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(12, 1, 0, '4cd09e85-063c-3eef-9c5e-d607f0b2e439', 'M', 'RFC216evd', NULL, NULL, NULL, NULL, '1972-11-29', 'A83135vib', 'Jacobi, Gislason and Hoppe', 'Wiegand-Huel', 'Mrs. Retha Harvey', '808-527-1723', 'bmacejkovic@walter.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(13, 1, 0, 'df893ef0-341f-3c7b-b66f-de7e5501d3af', 'F', 'RFC129bdw', 'Taylor', 'Gorczany', 'Mante', 'M', '1984-08-23', 'A83740csm', 'Gulgowski, Effertz and Rath', 'Howe, Abbott and Lemke', NULL, '517-374-5069', 'luciano43@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(14, 0, 0, 'e59dd73b-6f48-379d-8d38-f4e0629d01ef', 'M', 'RFC793grw', NULL, NULL, NULL, NULL, '1979-09-25', 'A83402til', 'Bauch, Kuhlman and Ondricka', 'Schamberger, Altenwerth and Conroy', 'Alfredo Kirlin MD', '+1 (850) 442-0855', 'makenzie50@grant.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(15, 0, 0, '4ebc251a-f38a-3785-831f-18ac89aca19e', 'F', 'RFC202yql', 'Ralph', 'Jacobi', 'Torp', 'M', '2020-11-08', 'A83628bdl', 'Stanton-Nienow', 'Schumm-Koss', NULL, '1-754-861-6395', 'phyllis.wisoky@johnson.net', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(16, 0, 0, '9175873c-c8bc-347b-b4f3-75302eec2f2e', 'F', 'RFC037pqc', 'Amos', 'Bailey', 'Hegmann', 'M', '2018-06-22', 'A83204gju', 'Abshire-Runte', 'Harris PLC', NULL, '(270) 678-4420', 'ekilback@yahoo.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(17, 1, 1, 'b43f1337-0f0a-337b-8a77-626d45646d8a', 'F', 'RFC303oey', 'Valerie', 'Fay', 'Feil', 'F', '2014-05-22', 'A83207jgf', 'Koelpin-Gleichner', 'Harris, Crooks and Upton', NULL, '(304) 541-2412', 'bradly.bednar@wisoky.com', 'Roob, Smitham and Lind', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(18, 1, 1, '450bf1c3-7f71-37fb-af46-e2d2e48de2b8', 'M', 'RFC697tdv', NULL, NULL, NULL, NULL, '1972-01-18', 'A83669fno', 'Pollich LLC', 'Dibbert, Brown and Bednar', 'Laron Schneider', '813.512.4775', 'dbeer@hotmail.com', 'Swaniawski-Thiel', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(19, 0, 0, '67c523dc-a161-3277-a999-c0d00466ff10', 'M', 'RFC512rfw', NULL, NULL, NULL, NULL, '1975-03-31', 'A83785aqz', 'Hauck-Grant', 'Yundt, Glover and Hagenes', 'Rozella Goodwin', '+12032667717', 'rachael.nader@schmeler.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(20, 1, 0, '7fda7796-08b4-3ad8-9416-33c507bb670a', 'F', 'RFC022bdn', 'Yasmine', 'Effertz', 'Paucek', 'F', '2001-08-27', 'A83672rnj', 'Monahan, Bosco and Conn', 'Huels Inc', NULL, '240.275.5874', 'shany08@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(21, 0, 1, '4e1524e0-bb7e-30d2-8097-416ce3cbe7e0', 'M', 'RFC009qvt', NULL, NULL, NULL, NULL, '1998-02-12', 'A83548sbz', 'Hyatt PLC', 'Lubowitz, Sanford and Heller', 'Chelsea Harber', '774.768.8237', 'aliza.wyman@nader.com', 'Schumm, Sanford and McGlynn', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(22, 0, 1, '9583fb64-a07a-3d72-8a02-d2507524d383', 'M', 'RFC058kqu', NULL, NULL, NULL, NULL, '1976-03-26', 'A83600dwd', 'Stracke Inc', 'Powlowski-Frami', 'Humberto Heller MD', '+1-606-913-0091', 'janie54@sipes.com', 'Larson-Monahan', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(23, 0, 0, 'b7abc339-5a09-3fe5-a421-4a9e436806b9', 'F', 'RFC715jos', 'Margret', 'Stokes', 'Luettgen', 'F', '1999-08-17', 'A83255phc', 'VonRueden-Heidenreich', 'Bins and Sons', NULL, '+1 (737) 631-0080', 'kuphal.coy@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(24, 0, 1, '31ac4549-0085-35d0-9cb7-8abe1c2e6a7b', 'M', 'RFC709pbk', NULL, NULL, NULL, NULL, '2008-02-11', 'A83835zho', 'Wiza LLC', 'Hamill, Lesch and Schaefer', 'Marcus Romaguera DVM', '380-813-8532', 'earl.crooks@kemmer.com', 'Hamill Ltd', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(25, 1, 0, '4f6b0ed9-8d0a-35e6-bb93-a6d1c7429b34', 'M', 'RFC062xdw', NULL, NULL, NULL, NULL, '2013-09-04', 'A83161ueg', 'Herman-Mueller', 'Crist, O\'Hara and Stracke', 'Ms. Rosalee O\'Connell', '609-319-1849', 'gracie26@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(26, 0, 1, '4a301587-0852-341b-9fe0-f310d342ede1', 'M', 'RFC629ppu', NULL, NULL, NULL, NULL, '1985-12-22', 'A83993lzi', 'McCullough, Metz and Jacobson', 'Okuneva-Dibbert', 'Addie Cummings', '820-993-1671', 'bsipes@williamson.com', 'Klein Group', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(27, 0, 0, '800a5b76-1d43-3e42-a990-0546cd4ea705', 'M', 'RFC060hkx', NULL, NULL, NULL, NULL, '1987-09-17', 'A83642zhm', 'Bins-Gleason', 'Waelchi Group', 'Darius Weissnat', '+1-817-247-8281', 'adella.johns@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(28, 0, 1, 'd3676bcb-6b88-3012-83d0-9cc8c6490ad8', 'M', 'RFC457tpe', NULL, NULL, NULL, NULL, '2015-05-18', 'A83695iln', 'Hudson Inc', 'Mertz-Armstrong', 'Brant Gutkowski', '406.550.8692', 'bernhard.katheryn@gmail.com', 'Kovacek, Zboncak and Stracke', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(29, 0, 0, '377b7ecd-0866-332b-a0e5-1bfd808a75cc', 'M', 'RFC509oel', NULL, NULL, NULL, NULL, '2014-06-16', 'A83744spy', 'Stehr-Bahringer', 'Runolfsson-Fahey', 'Prof. Adelbert Ankunding Sr.', '1-607-256-4917', 'willie.lindgren@graham.biz', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(30, 0, 1, 'b4ca644c-2470-3309-bffb-c8331ebda0bf', 'F', 'RFC311wsu', 'Theresia', 'Cruickshank', 'Gibson', 'F', '2004-09-12', 'A83125byo', 'Stokes Ltd', 'Greenfelder, Osinski and Keebler', NULL, '434-396-7900', 'ivory97@gmail.com', 'Terry Ltd', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(31, 0, 1, '89f6ac0c-d974-31e9-9b97-ff37f4465cb7', 'F', 'RFC876aoz', 'Margarett', 'Schinner', 'Cole', 'F', '1990-11-28', 'A83510bht', 'Prosacco-Sipes', 'Balistreri, Glover and Stokes', NULL, '(740) 484-4105', 'okeefe.dennis@yahoo.com', 'Ondricka, Mertz and Ryan', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(32, 1, 1, '4c79da35-6df2-39c3-9ed3-e93f6deb11f6', 'F', 'RFC183unv', 'Catherine', 'Gleichner', 'Walter', 'F', '1971-11-22', 'A83860pan', 'Heller-Harber', 'Osinski-Breitenberg', NULL, '804-360-9529', 'aveum@brakus.biz', 'Johnson and Sons', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(33, 0, 0, 'b4a77648-1be5-3cc6-bc52-b4d659501093', 'F', 'RFC260vpv', 'Giles', 'Sporer', 'Goyette', 'M', '1980-05-29', 'A83776mhj', 'Kunde-Eichmann', 'Gleichner LLC', NULL, '1-380-414-9730', 'cpredovic@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(34, 1, 0, 'ee4248e7-2d8d-3d1a-8c4c-850a01b889c9', 'F', 'RFC411ila', 'Jamir', 'Sanford', 'Osinski', 'M', '2008-09-21', 'A83760xgi', 'Lueilwitz Ltd', 'Bernhard-O\'Reilly', NULL, '+1-814-569-9181', 'ecorkery@yahoo.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(35, 1, 1, '62e53acf-8fc2-3cc8-88ac-e6a491e2f6e9', 'M', 'RFC451cyj', NULL, NULL, NULL, NULL, '2014-05-11', 'A83648wtf', 'Smith, Ryan and Turcotte', 'McLaughlin-Robel', 'Mr. Federico Powlowski', '+1-442-656-3546', 'barton.rogahn@abbott.org', 'Casper, Leffler and Smitham', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(36, 1, 0, 'f8480e6a-6f85-37a7-bf9a-9ebb3637d8da', 'F', 'RFC365htm', 'Stone', 'Pollich', 'Smitham', 'M', '2004-04-17', 'A83782ros', 'Feest-Berge', 'Rath, Hermiston and Collier', NULL, '1-518-657-8846', 'ydeckow@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(37, 1, 0, 'd9ed2cb5-ecac-356e-8f8b-c4c9fe8ae847', 'M', 'RFC281wju', NULL, NULL, NULL, NULL, '2021-05-13', 'A83785qtq', 'Kovacek, Bayer and Wuckert', 'Watsica, Bruen and Larson', 'Orion Boehm', '480.758.7362', 'mjast@champlin.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(38, 0, 1, 'a5e17c2b-e932-3dfa-a9d7-7678850c5111', 'F', 'RFC808pfk', 'Kattie', 'Conn', 'Nolan', 'F', '2010-09-24', 'A83672gem', 'Luettgen-Rutherford', 'Johns PLC', NULL, '+1 (248) 951-5916', 'qmorissette@yahoo.com', 'Schmitt, Nolan and Murazik', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(39, 1, 0, '96ef8dfc-0348-36ea-8a01-beb2567d71de', 'F', 'RFC645hva', 'Electa', 'Hand', 'Paucek', 'F', '1976-08-11', 'A83565qir', 'Mosciski-Collins', 'Gislason Group', NULL, '+1-940-537-2714', 'mohamed24@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(40, 0, 1, '5212ef2c-9143-379c-8508-595ec60afa42', 'F', 'RFC714wfi', 'Kasandra', 'Harvey', 'Lowe', 'F', '1995-05-22', 'A83746rjb', 'Murazik PLC', 'Upton, Shields and Lockman', NULL, '+1.231.791.3676', 'tiara11@tromp.net', 'Tromp-Durgan', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(41, 0, 1, '2532a03e-8813-3839-92b2-d9def4b6d2f9', 'F', 'RFC163hno', 'Freeman', 'Schiller', 'Kautzer', 'M', '1987-03-25', 'A83587egu', 'McCullough, Berge and Hayes', 'Hudson-Rice', NULL, '+1 (386) 643-6461', 'lavada05@gmail.com', 'White, Hermann and Von', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(42, 0, 0, 'f7d09172-0cc7-3597-b625-34c94fe089ce', 'M', 'RFC068hcz', NULL, NULL, NULL, NULL, '2021-09-22', 'A83962wpa', 'Witting Inc', 'Green, Keebler and Sawayn', 'Maxine Mante', '949-238-9880', 'francesca.moen@gislason.biz', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(43, 0, 1, 'd9eb9819-2d23-329c-8831-91a71e28f0b9', 'M', 'RFC480gms', NULL, NULL, NULL, NULL, '2019-12-29', 'A83034uki', 'Runolfsson Ltd', 'King-Nienow', 'Unique Weimann V', '321-638-1670', 'denesik.bartholome@hotmail.com', 'Leuschke-Abshire', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(44, 1, 1, '4824b19c-0815-3803-b2db-df86fbb554c0', 'M', 'RFC327plt', NULL, NULL, NULL, NULL, '1981-08-29', 'A83915hvi', 'Dare, Kunze and Lowe', 'Kunze Ltd', 'Mr. Nathen Lowe PhD', '321.674.3654', 'howell.judy@bayer.com', 'Batz-Koss', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(45, 0, 1, '80f4bb48-2484-3af3-beb4-464cf6336ba6', 'F', 'RFC491yva', 'Crawford', 'Wuckert', 'Weissnat', 'M', '2015-02-15', 'A83309dgj', 'Macejkovic-Mosciski', 'Hartmann-Monahan', NULL, '(412) 724-2684', 'melissa.erdman@hirthe.org', 'Upton Group', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(46, 0, 0, 'c73bcfb7-c4f5-3b26-9b36-df31831dbed7', 'F', 'RFC998sex', 'Levi', 'Herman', 'Powlowski', 'M', '1991-03-26', 'A83645fqs', 'Gutmann, Tremblay and Altenwerth', 'Price-Turcotte', NULL, '+14154542072', 'dubuque.axel@fisher.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(47, 0, 1, 'be2dda16-748a-3070-bafc-1a3b5309ee34', 'M', 'RFC566saw', NULL, NULL, NULL, NULL, '1989-12-08', 'A83915vfv', 'Paucek Group', 'Cummings-Yost', 'Nicole Considine', '678.249.5647', 'qluettgen@schultz.com', 'Rath-Ratke', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(48, 1, 1, 'bf133d25-4ef0-3efd-b7ff-0d7090bd2870', 'M', 'RFC999sbn', NULL, NULL, NULL, NULL, '2008-03-03', 'A83578lcg', 'Krajcik-Larkin', 'Kshlerin PLC', 'Angus Murray PhD', '+1-361-802-9386', 'gillian.pacocha@funk.com', 'Block, McLaughlin and Hills', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(49, 0, 1, '12a62e19-52ad-321c-9c9d-280a84752b6e', 'F', 'RFC959xqe', 'Simeon', 'Gulgowski', 'Mohr', 'M', '1998-06-09', 'A83647pxw', 'Kirlin, Gleason and Krajcik', 'Bechtelar Inc', NULL, '1-925-465-9489', 'bailey.grayson@braun.net', 'Douglas LLC', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(50, 0, 1, '94111e6d-52bb-3bd1-b9f4-c270479516ac', 'F', 'RFC870byc', 'Autumn', 'Wiza', 'Franecki', 'F', '2020-10-17', 'A83647hin', 'Reynolds-Haag', 'Walker, Wintheiser and Kohler', NULL, '+1-209-876-9946', 'selmer20@gmail.com', 'Kling, Fadel and Grady', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(51, 0, 1, '3ea931cf-c34b-3c48-b09c-b6ec93b4369b', 'F', 'RFC115fre', 'Lillian', 'Keeling', 'Franecki', 'F', '1981-02-24', 'A83335xhj', 'Stamm, Will and Wilkinson', 'Turcotte-Friesen', NULL, '689.783.3024', 'frederic.torphy@mcglynn.org', 'Bernier Group', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(52, 0, 1, '0efcf268-415b-345d-a10d-ebb3e4ae7942', 'F', 'RFC749wav', 'Savanah', 'McLaughlin', 'Dietrich', 'F', '1998-08-28', 'A83374sno', 'Koepp and Sons', 'Effertz-Orn', NULL, '+14066503405', 'jenkins.lowell@wintheiser.com', 'Treutel-Green', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(53, 0, 0, 'f9097095-a7aa-3f78-af4f-d6684b751499', 'M', 'RFC499xwh', NULL, NULL, NULL, NULL, '1988-07-22', 'A83457pwc', 'Powlowski Ltd', 'Beatty, Pagac and Batz', 'Stephania Schumm', '(541) 739-5217', 'gibson.walter@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(54, 0, 1, '7a24fb97-6f91-391b-8871-7480496bda8e', 'F', 'RFC581edi', 'Kip', 'Wehner', 'Sawayn', 'M', '1972-06-24', 'A83179gel', 'Mraz LLC', 'Steuber, Braun and Legros', NULL, '1-773-310-2783', 'ruthe.okeefe@kassulke.com', 'Hauck, Heaney and Fay', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(55, 0, 1, 'ae3c2243-3d79-3b27-a00c-8e0f34d39a67', 'F', 'RFC360qxi', 'Reyna', 'Bernhard', 'Herzog', 'F', '1985-04-23', 'A83528qml', 'Marvin, Jacobson and Koepp', 'McKenzie, Wilkinson and D\'Amore', NULL, '+14234667963', 'caleb88@hotmail.com', 'Haag and Sons', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(56, 0, 0, '6ef658d7-7e37-3300-81f9-a6b386766895', 'F', 'RFC453mdn', 'Alphonso', 'Grady', 'Batz', 'M', '1991-11-10', 'A83164riy', 'Huel-Upton', 'Leuschke-Turner', NULL, '+1.986.258.7115', 'dina78@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(57, 1, 1, '2d08567d-e05c-371e-909c-112da25d5863', 'F', 'RFC273sue', 'Raymond', 'Prohaska', 'Schmitt', 'M', '2007-04-11', 'A83502cxt', 'Sawayn, Bogan and Larson', 'Dach-Klocko', NULL, '+1-878-895-9250', 'rachel.waters@hotmail.com', 'Cummerata-Rempel', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(58, 1, 1, '64499c97-5c0a-3409-86bb-fdcc3f1bbea2', 'F', 'RFC640dzc', 'Lina', 'Christiansen', 'Brakus', 'F', '1978-10-01', 'A83870uft', 'Larson PLC', 'Bins-Hane', NULL, '+1.463.767.9779', 'powlowski.maryam@gmail.com', 'Lockman Group', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(59, 1, 0, 'e47ef3e5-61f3-35b3-8405-24f879787b34', 'F', 'RFC887aup', 'Eileen', 'Hudson', 'Bosco', 'F', '1985-11-11', 'A83779zkj', 'Bashirian PLC', 'Botsford, Carter and Carter', NULL, '+1-913-324-5936', 'liam16@hand.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(60, 1, 1, '259153ff-6e0d-37e2-a656-0f96a9a488ba', 'F', 'RFC781weq', 'Arno', 'Bruen', 'Moen', 'M', '1970-05-05', 'A83103wga', 'Fay-Stoltenberg', 'Johnston, Rau and Rowe', NULL, '937.255.3689', 'dubuque.russ@gmail.com', 'Jones-Wyman', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(61, 1, 1, 'bf277d88-d2f7-3226-903e-c00fad987ed5', 'F', 'RFC913jfo', 'Chaya', 'Bogisich', 'Runte', 'F', '1984-11-17', 'A83485wuy', 'Greenholt Inc', 'Rippin-Monahan', NULL, '1-475-470-2606', 'werner.wiegand@hotmail.com', 'Gerhold, Koss and Jones', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(62, 0, 0, '14d7b86e-c348-3c0f-99aa-2e28f06d254e', 'M', 'RFC631ayd', NULL, NULL, NULL, NULL, '1978-12-14', 'A83113hvj', 'Walsh, Dare and Glover', 'Sipes-Ferry', 'Mrs. Kiara Gerlach', '520.715.9723', 'adah33@stracke.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(63, 0, 1, '0fd9f121-acde-34bb-9d3c-13f3a00d504f', 'F', 'RFC402dgn', 'Rae', 'Bosco', 'Carter', 'F', '2021-11-30', 'A83726bcg', 'Bins-Goodwin', 'Jacobi-Ward', NULL, '320.603.4347', 'amelie51@gmail.com', 'Wuckert, Barrows and Dickinson', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(64, 1, 0, '24058ac4-dfdb-3d76-9643-f7441ec829a3', 'F', 'RFC582ocb', 'Lowell', 'Bahringer', 'Heathcote', 'M', '1999-04-25', 'A83211zpn', 'Mayert-Kunde', 'Anderson, Zemlak and Roob', NULL, '+13074213240', 'kirsten.schultz@yahoo.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(65, 0, 0, '81cf4186-ba05-3578-94f5-bd99c4debd70', 'F', 'RFC115lbf', 'Garfield', 'Glover', 'Von', 'M', '1993-05-22', 'A83952fwh', 'Kunze, Pfeffer and Parisian', 'Boyle-Hammes', NULL, '(949) 945-6496', 'june.vandervort@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(66, 0, 0, 'b809f58d-0f02-3f31-a828-896d1b6d2c6e', 'F', 'RFC160yks', 'Constance', 'Williamson', 'Kiehn', 'F', '1989-07-06', 'A83314tee', 'Waelchi PLC', 'Johns, Kulas and Ratke', NULL, '(854) 860-2098', 'rbashirian@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(67, 0, 0, 'b855ae76-c513-31c4-8b79-9bcc523f6ad8', 'F', 'RFC746qpl', 'Madie', 'Pacocha', 'Tromp', 'F', '2010-05-06', 'A83092mor', 'Volkman Inc', 'Klein, Fadel and Rutherford', NULL, '(386) 360-4970', 'pmann@romaguera.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(68, 1, 0, 'a12b2baf-dcb5-3744-bb93-c45cb26082e0', 'M', 'RFC786ars', NULL, NULL, NULL, NULL, '1996-03-09', 'A83861xfe', 'Greenholt and Sons', 'Hickle-Hoppe', 'Prof. Lenna Walsh', '+1-740-903-0507', 'jrowe@yahoo.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(69, 0, 0, 'ba4e2b94-542e-396a-b4bf-248b424c25f5', 'F', 'RFC129qiy', 'Jaquan', 'Ankunding', 'Russel', 'M', '1999-11-26', 'A83802fzf', 'Leuschke-Nicolas', 'Abbott-Mayer', NULL, '+18707123622', 'shanny.huels@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(70, 1, 0, '79ddc565-4d99-3597-9998-b3aad4d4b888', 'M', 'RFC711cav', NULL, NULL, NULL, NULL, '1976-01-25', 'A83006erz', 'Eichmann PLC', 'Lang, Kuhlman and Paucek', 'Mr. Julian Hauck', '386.382.5940', 'otto13@stokes.org', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(71, 0, 1, '44903ef9-829d-3557-af0f-b1b60b479102', 'F', 'RFC435wzu', 'Olaf', 'Tremblay', 'Howell', 'M', '2000-12-18', 'A83072wgt', 'Lesch-Leffler', 'DuBuque-Brakus', NULL, '980.510.0315', 'sanderson@stamm.net', 'Nikolaus PLC', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(72, 1, 1, '8f52ab61-6709-3a68-b293-1b3b0c797fa6', 'F', 'RFC032ecm', 'Giovani', 'Brown', 'Smith', 'M', '2012-01-08', 'A83819oiz', 'Weimann, Grant and Durgan', 'Towne and Sons', NULL, '551-840-7787', 'delilah.bahringer@spencer.com', 'Reynolds, Schmeler and Yundt', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(73, 0, 0, '2a1032a7-1188-3890-a5f2-7c1b4980b9cb', 'M', 'RFC400tsk', NULL, NULL, NULL, NULL, '1987-09-20', 'A83372yhq', 'Thompson, Brown and Block', 'Hills LLC', 'Kelsi O\'Hara', '716.908.6801', 'joseph.torphy@greenholt.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(74, 0, 0, '5fdbedd3-3cb9-3ee6-ae94-20f75d628259', 'F', 'RFC139rjg', 'Maeve', 'Wolff', 'Wilderman', 'F', '2010-09-08', 'A83914duo', 'White, Hoppe and Nikolaus', 'Ledner Ltd', NULL, '(678) 940-7254', 'rhianna99@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(75, 0, 0, '6145cb61-acdd-3b20-833f-60374e585e9a', 'M', 'RFC425fen', NULL, NULL, NULL, NULL, '1994-12-28', 'A83946bon', 'Greenfelder, Kiehn and Collier', 'Kuhic-Gutmann', 'Laisha Jaskolski', '+1-325-998-1092', 'fleta.jacobs@considine.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(76, 1, 0, '536c1dab-c0c3-3598-a6eb-8968f22513ef', 'F', 'RFC846zql', 'Nat', 'Hickle', 'Parker', 'M', '1971-07-04', 'A83141rjq', 'Ondricka-Dicki', 'Corkery-Halvorson', NULL, '737.631.7706', 'jena60@hill.net', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(77, 1, 0, '8ffc4d3f-70db-3a75-95b6-308c16b52e03', 'F', 'RFC750rxb', 'Alfredo', 'Padberg', 'Hickle', 'M', '1982-12-29', 'A83271mtb', 'Hirthe Inc', 'Ruecker, Hirthe and Conroy', NULL, '734.699.5145', 'briana.lesch@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(78, 1, 1, 'd5fc81d8-f0dd-3941-b703-706caa3f2d5c', 'M', 'RFC614bvk', NULL, NULL, NULL, NULL, '1973-06-05', 'A83665wbd', 'Kuphal, Hartmann and Ernser', 'Fay-Shanahan', 'Sebastian Abshire IV', '+1 (479) 724-2367', 'bconnelly@yahoo.com', 'Padberg Group', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(79, 0, 1, '0719256e-148a-37a1-a21c-c91563d1ddde', 'M', 'RFC155rdo', NULL, NULL, NULL, NULL, '2020-09-22', 'A83719jqc', 'Torphy-Goodwin', 'Bins, Hyatt and Braun', 'Michale Wintheiser III', '616.815.9769', 'reanna37@davis.com', 'Ratke, Altenwerth and Homenick', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(80, 1, 1, 'cfe48039-e181-3ec6-87ab-a5950b8a9e13', 'M', 'RFC780jnz', NULL, NULL, NULL, NULL, '1990-09-02', 'A83757pmd', 'Balistreri PLC', 'Considine PLC', 'Elsie Purdy', '308-852-2704', 'arlo.emard@feeney.com', 'Torp-Koss', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(81, 1, 1, 'a678eb84-e6f4-30d6-8457-baa93e9fc6b9', 'M', 'RFC381ipd', NULL, NULL, NULL, NULL, '1971-08-31', 'A83983igw', 'Heaney-Lind', 'Johnson, Herzog and Steuber', 'Malika Quitzon', '+12729372881', 'guadalupe07@tromp.net', 'Stiedemann, Rolfson and Rohan', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(82, 0, 1, '208a8615-5a9c-35ac-a37c-5b5597d85056', 'M', 'RFC016yiz', NULL, NULL, NULL, NULL, '1989-09-20', 'A83186eoc', 'Lebsack, Mills and Collins', 'Hamill-Brakus', 'Brisa Nitzsche', '+12349626927', 'mklein@harris.net', 'Sawayn, Hilpert and Bradtke', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(83, 0, 0, '87ed2fc1-6fd9-3559-839a-d1788530f897', 'F', 'RFC927wuc', 'Rahul', 'Schneider', 'Paucek', 'M', '1988-07-18', 'A83033jzy', 'Braun Group', 'Kuhlman, D\'Amore and O\'Reilly', NULL, '+1-346-412-5380', 'marisa.hammes@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(84, 1, 0, '2ee2b196-d988-3898-bd54-31d857e8b048', 'F', 'RFC239xta', 'Carli', 'Brekke', 'Mayert', 'F', '1972-05-20', 'A83865eut', 'Volkman, DuBuque and Kertzmann', 'Kiehn and Sons', NULL, '+1-385-786-3316', 'rath.claudie@yahoo.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(85, 1, 0, '198485ad-29f4-3dbb-a082-020ab2bfc9bf', 'M', 'RFC935afj', NULL, NULL, NULL, NULL, '1995-12-11', 'A83749oic', 'Borer, Jacobs and Schuster', 'Skiles-Thiel', 'Ms. Gracie Schaefer I', '+1 (505) 335-6115', 'erwin.medhurst@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(86, 0, 0, 'cc60a689-ae3f-36d5-9a3d-e6c8499f5eda', 'M', 'RFC807xyz', NULL, NULL, NULL, NULL, '2000-12-23', 'A83213gdc', 'Bosco PLC', 'Hill, Hermiston and Daugherty', 'Mrs. Bernita Johns', '1-717-329-2965', 'burdette.farrell@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(87, 1, 0, 'afc86f56-0d76-37b2-b9cb-8bb3c3199258', 'M', 'RFC508mfj', NULL, NULL, NULL, NULL, '1985-11-22', 'A83582pof', 'Swift and Sons', 'Stoltenberg-Lakin', 'Dr. Monroe Osinski DDS', '(858) 845-7332', 'raina.batz@ohara.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(88, 1, 0, '81db0542-3f3e-3d58-a41e-38d5e6b1ec05', 'F', 'RFC696eiw', 'Evan', 'Bradtke', 'Rowe', 'M', '2017-08-01', 'A83917akh', 'Glover, Weissnat and Crona', 'Kunde, Champlin and Erdman', NULL, '1-930-303-6121', 'ricky19@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(89, 1, 0, '1b2fa8f0-3f83-3016-a4cf-5342b92ceb70', 'M', 'RFC193mpm', NULL, NULL, NULL, NULL, '1974-08-15', 'A83157gzy', 'Nitzsche-Christiansen', 'Kessler-Dibbert', 'Salvador Lowe', '360.775.0256', 'marilyne.schultz@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(90, 0, 0, '9c865ed8-4c3c-39d5-aabb-ed52563d680b', 'F', 'RFC207nqo', 'Marcellus', 'Nader', 'Miller', 'M', '1996-07-18', 'A83444nqk', 'Franecki Group', 'Blick-Casper', NULL, '1-323-566-2168', 'clarabelle74@leuschke.org', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(91, 0, 0, '8985d954-dda1-3f5e-88c3-a43f87eb8a36', 'F', 'RFC248oqu', 'Linwood', 'Koss', 'Olson', 'M', '2013-02-28', 'A83862jlm', 'Shanahan, Larson and Hill', 'Barrows, Abernathy and Bruen', NULL, '(757) 848-6705', 'deckow.aaliyah@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(92, 1, 0, '5d6c7ffd-0af8-3c2e-9cd7-1baef406ab48', 'F', 'RFC903zpn', 'Meghan', 'Collier', 'D\'Amore', 'F', '2019-02-27', 'A83240umn', 'Braun LLC', 'Collier Ltd', NULL, '424-889-6179', 'ublick@berge.org', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(93, 0, 1, '2a673827-6046-3bbc-abc3-f262cb010523', 'M', 'RFC527wwj', NULL, NULL, NULL, NULL, '1988-11-22', 'A83088xqx', 'Conroy, Ruecker and Christiansen', 'Hickle LLC', 'Mylene Ferry DDS', '+1-272-566-8361', 'stamm.maryam@bergstrom.com', 'Dooley and Sons', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(94, 1, 1, 'baa360e1-85b0-3747-9100-59bbc125d442', 'F', 'RFC176tvk', 'Oscar', 'Ritchie', 'Powlowski', 'M', '2002-07-31', 'A83998oig', 'Auer-Herzog', 'Jones-Langworth', NULL, '952.867.5478', 'kozey.lexi@gerhold.com', 'Carroll, Kihn and Pfannerstill', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(95, 1, 1, '8d75ba53-2d63-387a-b5a9-fa567120b9b8', 'F', 'RFC622fds', 'Stella', 'Bednar', 'Veum', 'F', '2017-06-27', 'A83974msy', 'Fadel, Windler and Olson', 'Wolf-Kshlerin', NULL, '971-218-7403', 'israel.jacobs@yundt.com', 'Schmitt-Pollich', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(96, 0, 1, '98fd8f53-9fc1-382d-ac2d-261e6eb6a8fb', 'M', 'RFC870vbq', NULL, NULL, NULL, NULL, '2005-11-30', 'A83681nlx', 'Robel Group', 'Carter, Ondricka and Bartell', 'Nadia Gleason', '(650) 456-9070', 'madaline85@schiller.org', 'Thiel-Lang', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(97, 0, 0, '05b2f549-2e81-3a04-92ea-1e9aecc97ab4', 'M', 'RFC101rds', NULL, NULL, NULL, NULL, '2005-02-16', 'A83945buv', 'Goodwin, Bergnaum and Ernser', 'Schuppe Inc', 'Mrs. Catherine Roberts Jr.', '586-497-1966', 'taryn89@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(98, 0, 0, 'f3931551-28d6-359e-a751-9f4e3192f9c8', 'M', 'RFC985mhy', NULL, NULL, NULL, NULL, '2008-04-21', 'A83618ezc', 'Kunde and Sons', 'Bayer Ltd', 'Prof. Tyrell Terry MD', '+18012732301', 'vincent.moen@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(99, 1, 0, '30e24f00-80a5-3346-a3fd-78bb62c00aa9', 'F', 'RFC864cmx', 'Elsie', 'Tromp', 'Nitzsche', 'F', '1994-11-25', 'A83661vhl', 'Keeling PLC', 'Zboncak Ltd', NULL, '+17609756588', 'block.ron@yahoo.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(100, 0, 0, '950628ee-c7c3-3840-992a-70347519063b', 'M', 'RFC547amc', NULL, NULL, NULL, NULL, '1987-08-01', 'A83226vvm', 'Shields-Heidenreich', 'Little PLC', 'Bulah Daugherty MD', '347-364-8740', 'schultz.quinton@mills.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(101, 1, 0, '3b5fda0d-2eda-3486-ab7e-145c39d2e241', 'F', 'RFC367caf', 'Cameron', 'Bechtelar', 'Hegmann', 'M', '1981-02-25', 'A83852xxn', 'Hermann, Macejkovic and Fisher', 'Kutch-Wyman', NULL, '+1 (626) 918-0825', 'kim.macejkovic@feil.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(102, 0, 1, '95f19dfe-00f6-3755-8762-8781d18e3a4e', 'F', 'RFC160dxb', 'Lilyan', 'Wiegand', 'Fahey', 'F', '2008-11-03', 'A83684qhr', 'Towne, Batz and Macejkovic', 'Stamm-Herzog', NULL, '+1-504-562-1362', 'goldner.reinhold@gmail.com', 'Wiegand, Bechtelar and Jones', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(103, 0, 1, 'f3841eba-dcce-3fca-aacb-fdb3d427028d', 'M', 'RFC715ohv', NULL, NULL, NULL, NULL, '1981-01-06', 'A83974rml', 'Legros Ltd', 'Robel, Donnelly and Corkery', 'Shanna Marks', '+13255509192', 'marge.champlin@yahoo.com', 'Daniel and Sons', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(104, 1, 0, '32a6f439-03f6-3a56-ac20-6e9a2921cbe0', 'M', 'RFC738wsq', NULL, NULL, NULL, NULL, '2013-02-28', 'A83211czh', 'Ferry-Deckow', 'Thompson Inc', 'Ms. Daphne Turner', '1-346-306-5459', 'itzel74@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(105, 0, 1, 'cf43bea0-d6ed-3aee-8293-23b301b18c66', 'F', 'RFC190zzm', 'Gracie', 'Fay', 'Walsh', 'F', '2013-12-22', 'A83815lql', 'Runte, Spinka and Reinger', 'Schroeder-Glover', NULL, '1-626-855-7823', 'oberbrunner.clifford@larson.com', 'Upton Ltd', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(106, 1, 1, 'af1f0d70-febd-3193-86dc-487f87b5e3fe', 'M', 'RFC146bam', NULL, NULL, NULL, NULL, '2019-03-12', 'A83906xww', 'Pouros and Sons', 'Dickinson Ltd', 'Viviane Kiehn', '+1-820-982-6992', 'leda.lockman@hotmail.com', 'Sanford and Sons', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(107, 1, 1, 'a9a13768-d21e-383f-b6cf-1823740ebad5', 'F', 'RFC080mkn', 'Prudence', 'Christiansen', 'Cummings', 'F', '2017-01-17', 'A83722pgv', 'Metz PLC', 'Hill-Parker', NULL, '+13809350656', 'elvis.bednar@hotmail.com', 'McKenzie, Glover and Sipes', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(108, 1, 1, 'b4495903-e73a-37ee-ae85-f87a7783cfc7', 'M', 'RFC761mey', NULL, NULL, NULL, NULL, '2001-02-02', 'A83392kiq', 'Schneider LLC', 'Flatley, Ruecker and Koch', 'Moriah Barrows', '+1 (430) 506-9841', 'gennaro70@gmail.com', 'Zulauf-Bahringer', '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(109, 1, 0, '348183e6-ee79-3daf-97fe-e530391a3a21', 'M', 'RFC114wrf', NULL, NULL, NULL, NULL, '2010-01-02', 'A83318had', 'Cruickshank PLC', 'Anderson Inc', 'Sydnie Quitzon', '+1.228.402.1962', 'kyla91@yahoo.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(110, 0, 0, '76176624-4437-3cb6-94fa-a3283c6e1d76', 'F', 'RFC312php', 'Sylvester', 'Simonis', 'Pollich', 'M', '1978-12-03', 'A83192lkr', 'Collins, Gutmann and Quitzon', 'Streich PLC', NULL, '+1.479.533.1778', 'dulce19@gmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(111, 0, 0, '220f42b5-a016-303b-b6bd-35f357e056da', 'F', 'RFC880vsn', 'Randall', 'Emmerich', 'Purdy', 'M', '1986-04-02', 'A83035udu', 'Baumbach, Pfeffer and Larkin', 'Beer and Sons', NULL, '(385) 308-5572', 'wwiegand@hotmail.com', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49');

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billed_date` datetime NOT NULL,
  `paid_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_01_19_204716_create_customers_table', 1),
(5, '2023_01_19_205303_create_invoices_table', 1),
(6, '2023_02_18_182227_create_clients_table', 1),
(7, '2023_02_18_184524_create_companies_table', 1),
(8, '2023_02_18_192008_create_employers_table', 1),
(9, '2023_02_18_192108_create_employees_table', 1),
(10, '2023_02_18_192208_create_users_table', 1),
(11, '2023_02_23_200341_create_workdays_table', 1),
(12, '2023_02_25_175944_create_employee_files_table', 1),
(13, '2023_02_28_183853_create_workcontracts_table', 1),
(14, '2023_03_03_200638_create_activities_table', 1),
(15, '2023_03_03_202103_create_activity_files_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `active`, `type`, `employee_id`, `employee_uuid`, `name`, `uuid`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'e', 11, '28ea3826-8838-371a-8fdd-bbbd8abe048d', 'Admin', '6525e10a-02c4-38d5-ae72-b3d7d2757d72', 'admin@gmail.com', NULL, '$2y$10$EndP6my12R9pvYBKHqqy4eR4r/bWXBEDXk66J4pQcN5nC59RT00WS', NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `workcontracts`
--

CREATE TABLE `workcontracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workdays`
--

CREATE TABLE `workdays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employer_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_uuid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `minutes` int(11) DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude_out` double DEFAULT NULL,
  `longitude_out` double DEFAULT NULL,
  `place_out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workdays`
--

INSERT INTO `workdays` (`id`, `employer_id`, `employer_uuid`, `employee_id`, `employee_uuid`, `uuid`, `status`, `date`, `start`, `end`, `minutes`, `timezone`, `latitude`, `longitude`, `place`, `latitude_out`, `longitude_out`, `place_out`, `created_at`, `updated_at`) VALUES
(1, 23, 'b7abc339-5a09-3fe5-a421-4a9e436806b9', 12, '5bf86096-251c-3a5c-8806-d4eb3fd7cde2', '66ae3913-c066-38d8-91d6-ec9b3aac87d6', 'C', '2023-03-08', '2023-03-08 00:00:00', '2023-03-08 09:44:11', 480, 'America/Denver', 45.811915, -59.191582, '543 Marvin Flat Apt. 304\nGradyton, IL 70983', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(2, 25, '4f6b0ed9-8d0a-35e6-bb93-a6d1c7429b34', 13, '62adecc8-ab29-367d-a947-7c6d5dc68472', '519651f9-eae9-390e-bffe-5a6551badd9f', 'O', '2023-03-10', '2023-03-10 00:00:00', NULL, NULL, 'America/Denver', -37.409896, -6.288931, '43707 Corkery Radial Apt. 467\nBradtketown, MN 07843', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(3, 27, '800a5b76-1d43-3e42-a990-0546cd4ea705', 14, 'f365c7db-6ec1-38ff-8d9e-aec539925574', '2ff1101e-66a3-3b3d-855e-cc878874bf45', 'C', '2023-03-08', '2023-03-08 00:00:00', '2023-03-08 10:07:42', 540, 'America/Denver', 39.999446, 114.409514, '585 Metz Turnpike\nMossiefort, MT 73753-4840', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(4, 29, '377b7ecd-0866-332b-a0e5-1bfd808a75cc', 15, 'fd2f704e-cca2-337a-b843-002154f22fe6', 'f496d65e-b41d-39b3-b823-8fc22299c2d2', 'O', '2023-03-08', '2023-03-08 00:00:00', NULL, NULL, 'America/Denver', 44.44299, 47.613124, '812 Daren Port\nWest Hilbert, CA 19566-7405', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(5, 31, '89f6ac0c-d974-31e9-9b97-ff37f4465cb7', 16, '0ebb1a63-3b85-3720-8318-8e328ea1c8d8', '2d488551-5ed5-3841-8fe0-9d38721480cb', 'O', '2023-03-12', '2023-03-12 00:00:00', NULL, NULL, 'America/Denver', -0.350853, 114.667039, '397 Anya Ramp\nSouth Neomabury, MA 30736', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(6, 33, 'b4a77648-1be5-3cc6-bc52-b4d659501093', 17, '32e4f883-820b-36b1-ab4d-8e1f713e310f', 'b7b281df-ca31-3b40-a0a5-02950efb9a4f', 'O', '2023-03-09', '2023-03-09 00:00:00', NULL, NULL, 'America/Denver', 83.787602, -15.399518, '15438 Jeff Lights\nEast Pearl, TX 48082', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(7, 35, '62e53acf-8fc2-3cc8-88ac-e6a491e2f6e9', 18, '7961de6a-d9fd-318f-a3ec-609af6344c20', '6729c1d9-fd43-3c0c-b4ee-11bf3fb8d9c3', 'O', '2023-03-10', '2023-03-10 00:00:00', NULL, NULL, 'America/Denver', -77.328044, 171.952775, '825 Monahan Brook Suite 282\nWest Alfredview, CO 31303-6530', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(8, 37, 'd9ed2cb5-ecac-356e-8f8b-c4c9fe8ae847', 19, '7626fce2-a569-3347-a9ae-9f0acff5713d', 'aad565ee-9b08-350c-bc76-e81d23b09d6a', 'C', '2023-03-12', '2023-03-12 00:00:00', '2023-03-12 23:19:41', 660, 'America/Denver', -25.497461, 67.228439, '8265 O\'Reilly Courts Suite 648\nPort Kurtisburgh, LA 62994-6330', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(9, 39, '96ef8dfc-0348-36ea-8a01-beb2567d71de', 20, 'e0e49bed-3ce2-38d8-9bd0-b405c4e5ef31', '234ace44-d8ca-3d27-bca5-14396519259c', 'C', '2023-03-09', '2023-03-10 00:00:00', '2023-03-10 04:15:24', 660, 'America/Denver', 33.629257, -146.114958, '5362 Kiera Haven Suite 746\nNew Emiliano, SD 63115-6367', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(10, 41, '2532a03e-8813-3839-92b2-d9def4b6d2f9', 21, '486e0433-f12e-3960-89cf-f8cbd45da2ce', '08ee0cd1-4b6a-3091-97b8-72c2d212a78d', 'C', '2023-03-08', '2023-03-09 00:00:00', '2023-03-09 07:19:15', 720, 'America/Denver', -66.543797, -20.064018, '70261 Reid Cape Apt. 403\nSchulistville, NC 08615', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(11, 43, 'd9eb9819-2d23-329c-8831-91a71e28f0b9', 22, '52bf2863-41fe-3c75-b09f-7632dacab4d9', '66a4e2e0-f93e-3937-a8da-c8409f8023b0', 'O', '2023-03-07', '2023-03-07 00:00:00', NULL, NULL, 'America/Denver', 84.452347, 44.413258, '2526 Kiley Crescent Apt. 931\nEast Ardithfort, OK 11824', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(12, 45, '80f4bb48-2484-3af3-beb4-464cf6336ba6', 23, '135a9a1d-d531-3748-bf89-b14eaa2427dd', '860acb2d-9bd3-3194-9642-3dc2af4363d5', 'O', '2023-03-06', '2023-03-06 00:00:00', NULL, NULL, 'America/Denver', 1.541825, -45.934452, '21761 Neva Parkways Apt. 137\nBlockhaven, OH 81331', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(13, 47, 'be2dda16-748a-3070-bafc-1a3b5309ee34', 24, 'c752f5f1-837a-3431-8283-0e7bded70233', '27e51f93-8a98-3d87-964f-f38eb7a99903', 'C', '2023-03-07', '2023-03-07 00:00:00', '2023-03-07 15:50:12', 540, 'America/Denver', 73.212295, 165.003534, '11518 Friesen Passage\nHarveyshire, VA 73410', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(14, 49, '12a62e19-52ad-321c-9c9d-280a84752b6e', 25, 'ef4da480-6eac-3649-8e12-397af0036f98', 'c370681f-6cb4-3d33-a6c7-9a091cccd030', 'C', '2023-03-09', '2023-03-10 00:00:00', '2023-03-10 00:43:38', 600, 'America/Denver', -37.065144, -149.978526, '72705 Clovis Forest\nO\'Harashire, MS 77395', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(15, 51, '3ea931cf-c34b-3c48-b09c-b6ec93b4369b', 26, '2934a35d-54c9-3e7d-b886-d23e68e9cf5d', 'f7ee591a-e74e-3c83-8306-409e493a3843', 'C', '2023-03-08', '2023-03-08 00:00:00', '2023-03-08 19:44:29', 660, 'America/Denver', 66.828323, -12.36274, '70443 Malvina Trace Apt. 372\nNew Giovannaview, LA 52074', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(16, 53, 'f9097095-a7aa-3f78-af4f-d6684b751499', 27, '755e5bc2-97f0-38a1-ad02-8acf944b2080', '37909828-c290-3a77-8eeb-0f99bd679072', 'O', '2023-03-10', '2023-03-10 00:00:00', NULL, NULL, 'America/Denver', 32.112761, -81.617191, '72055 Alfonzo Greens Suite 206\nWest Keyshawn, MA 26844-9557', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(17, 55, 'ae3c2243-3d79-3b27-a00c-8e0f34d39a67', 28, '5d39a8f9-9c6d-34aa-b579-60773883ac17', '8f4cb1d1-0df8-3b2b-a181-eca67d12fbf6', 'O', '2023-03-07', '2023-03-07 00:00:00', NULL, NULL, 'America/Denver', -18.566514, -81.428438, '30243 Justyn View\nEast Hilarioport, ID 20161', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(18, 57, '2d08567d-e05c-371e-909c-112da25d5863', 29, '87e59e0c-72d9-3a88-b79b-e657593c1c7d', '1d8be0b9-fe20-3797-bedc-ac5f28319850', 'O', '2023-03-11', '2023-03-11 00:00:00', NULL, NULL, 'America/Denver', 43.217888, -123.645282, '7457 Herman Throughway Suite 185\nRodriguezmouth, TN 22238', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(19, 59, 'e47ef3e5-61f3-35b3-8405-24f879787b34', 30, '53111607-e52c-3666-993a-d219859afaf8', '53d6c56c-4e89-3a03-83ac-5a5c136f082e', 'C', '2023-03-06', '2023-03-06 00:00:00', '2023-03-06 13:33:47', 480, 'America/Denver', -72.00094, -51.003412, '4011 Mills Course Suite 153\nLake Ana, KS 70974-1652', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(20, 61, 'bf277d88-d2f7-3226-903e-c00fad987ed5', 31, '5addb1ca-42ae-3ea7-b592-65336441629d', 'ea9521d1-07f3-34bd-abe0-c87e7f41b7ac', 'O', '2023-03-11', '2023-03-11 00:00:00', NULL, NULL, 'America/Denver', -88.530568, 17.576116, '9303 Daniel Fort Apt. 849\nPaucekville, PA 94230', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(21, 73, '2a1032a7-1188-3890-a5f2-7c1b4980b9cb', 42, '2d838226-93da-3dea-b8e8-406e7292296b', 'd79d1853-5a9c-3a21-a96a-f4da8fac14bb', 'C', '2023-03-08', '2023-03-08 00:00:00', '2023-03-08 15:38:00', 660, 'America/Denver', 39.19951, -98.936895, '594 Franecki Circles Apt. 733\nLinneaview, ND 12662-8206', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(22, 75, '6145cb61-acdd-3b20-833f-60374e585e9a', 43, '09f32bf1-4d3e-3eb7-b6dc-69c31490cc0d', 'f8162403-2024-3029-8bf6-7be019bd57b2', 'O', '2023-03-12', '2023-03-12 00:00:00', NULL, NULL, 'America/Denver', -53.446828, 48.191554, '603 Hauck Dale\nVirginialand, IA 35587', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(23, 77, '8ffc4d3f-70db-3a75-95b6-308c16b52e03', 44, 'c342ba83-b181-3d34-8273-d9f123bda2d8', 'd3a30cbd-8d73-38ac-a8e1-d4d54dc50ffd', 'C', '2023-03-06', '2023-03-06 00:00:00', '2023-03-06 13:52:11', 480, 'America/Denver', 6.902614, 55.097522, '55001 Marcel Lane Apt. 107\nPort Kailynburgh, MA 05994', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(24, 79, '0719256e-148a-37a1-a21c-c91563d1ddde', 45, '80904b12-bd89-3030-ac8e-3e0549ba781c', '55f17819-22cf-378e-9b18-d67ab9907dc4', 'O', '2023-03-10', '2023-03-10 00:00:00', NULL, NULL, 'America/Denver', 52.805439, 137.191973, '9268 Goldner Skyway Apt. 302\nRodborough, MD 51808', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(25, 81, 'a678eb84-e6f4-30d6-8457-baa93e9fc6b9', 46, '4a497c09-6389-3de0-96c5-dbee0b95ad67', '269eb18b-ab3a-3df2-80ea-9162ef77d9db', 'C', '2023-03-12', '2023-03-12 00:00:00', '2023-03-12 22:48:59', 480, 'America/Denver', -53.139219, -38.405431, '89538 Glenna Motorway Suite 388\nNorth Ivoryview, CA 75330', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(26, 83, '87ed2fc1-6fd9-3559-839a-d1788530f897', 47, 'eb0c4560-345f-3f6d-a8be-5b62f52cd2b5', '32cb3bcf-aea1-355a-bd4d-4588583a3e44', 'C', '2023-03-07', '2023-03-07 00:00:00', '2023-03-07 13:02:52', 660, 'America/Denver', 53.513588, 150.685437, '7742 Heidenreich Overpass Apt. 727\nHermanbury, NE 70879', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(27, 85, '198485ad-29f4-3dbb-a082-020ab2bfc9bf', 48, '3453c764-b60e-33b4-a7ab-7bd5b4739171', '648399d5-4aa7-3cef-add5-8b120094d756', 'O', '2023-03-09', '2023-03-09 00:00:00', NULL, NULL, 'America/Denver', -66.922221, -62.79292, '9577 Zboncak View Apt. 307\nBoydchester, MT 78832', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(28, 87, 'afc86f56-0d76-37b2-b9cb-8bb3c3199258', 49, 'e16cb448-8359-3753-8929-118ae5073998', '5ef401c6-06c7-3391-bd94-5674ac53b9db', 'O', '2023-03-11', '2023-03-11 00:00:00', NULL, NULL, 'America/Denver', -24.526024, -178.891744, '2019 Lavern Run\nMooremouth, CO 09155-3817', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(29, 89, '1b2fa8f0-3f83-3016-a4cf-5342b92ceb70', 50, '70b2a620-1185-3ac9-ae87-6a68f9667914', '68bd33a1-e794-3c87-9dee-c09b6445fc6a', 'O', '2023-03-12', '2023-03-12 00:00:00', NULL, NULL, 'America/Denver', 30.55216, -55.367879, '421 Cale Mall Suite 438\nJermainechester, CO 51488-0612', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(30, 91, '8985d954-dda1-3f5e-88c3-a43f87eb8a36', 51, 'e58a4719-d630-3ff3-9dab-6f564d6036cd', '0631ec71-d39a-3109-aeca-40695f2dee15', 'C', '2023-03-11', '2023-03-12 00:00:00', '2023-03-12 05:02:12', 540, 'America/Denver', 25.65459, -72.929675, '911 Casimir Light Apt. 244\nWest Gaston, NC 56286', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(31, 93, '2a673827-6046-3bbc-abc3-f262cb010523', 52, '3aaf87e0-abc5-38ce-8335-195aadd4b7c8', '775a4405-a0e4-3dd6-bf2f-7718fd066e70', 'C', '2023-03-11', '2023-03-11 00:00:00', '2023-03-11 16:19:12', 720, 'America/Denver', -22.636687, -3.277657, '98097 Jenkins Lake\nCharityside, KY 17049-9185', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(32, 95, '8d75ba53-2d63-387a-b5a9-fa567120b9b8', 53, 'a15c290e-0777-3de8-8076-b29820709052', '1de500ec-4fdf-368d-bf69-d34db410de42', 'O', '2023-03-06', '2023-03-06 00:00:00', NULL, NULL, 'America/Denver', -31.167952, 2.132849, '106 Camden Squares\nNew Laishaside, NY 98274', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(33, 97, '05b2f549-2e81-3a04-92ea-1e9aecc97ab4', 54, '1d52adeb-f3ea-3ef6-8f2d-61dd3d14686d', '69368728-7cf2-3e6a-8a7c-6c83a9ac94bb', 'C', '2023-03-12', '2023-03-13 00:00:00', '2023-03-13 02:12:07', 480, 'America/Denver', 60.323686, -11.208896, '344 Beatty Dale Suite 259\nTimmyfort, TX 86037-7485', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(34, 99, '30e24f00-80a5-3346-a3fd-78bb62c00aa9', 55, '3bd6e127-1daa-316b-8332-3fc518133989', 'c10725e9-39d9-3c67-96bf-f65e1efc7f3f', 'O', '2023-03-06', '2023-03-06 00:00:00', NULL, NULL, 'America/Denver', 18.836652, 173.520699, '79312 Orn Parks Suite 095\nWest Victoria, UT 56491', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(35, 101, '3b5fda0d-2eda-3486-ab7e-145c39d2e241', 56, 'c07acb85-5c78-3faf-b7f0-9ef523a30615', '845cd351-f724-3a1b-b3ef-bdf6d78cba15', 'O', '2023-03-11', '2023-03-11 00:00:00', NULL, NULL, 'America/Denver', -54.322126, 113.061268, '8513 Kobe Motorway Suite 321\nWest Mathewstad, ID 67137-3658', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(36, 103, 'f3841eba-dcce-3fca-aacb-fdb3d427028d', 57, 'e35361d1-e72b-3493-99ed-cc362f8bcf45', '7f4253af-eead-37e6-9091-8f8ba1a9ddc2', 'O', '2023-03-10', '2023-03-10 00:00:00', NULL, NULL, 'America/Denver', -49.210371, -140.368168, '958 Bayer Mission Suite 667\nEbertville, TN 95662', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(37, 105, 'cf43bea0-d6ed-3aee-8293-23b301b18c66', 58, '2092a4da-ef69-315a-b362-c8bfe0f10f8e', '0bfccfe9-0c8f-35f2-b462-b89c0848536a', 'O', '2023-03-12', '2023-03-12 00:00:00', NULL, NULL, 'America/Denver', -79.844583, 177.024382, '87096 Ramona Mountains Suite 848\nSouth Daren, NM 83299', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(38, 107, 'a9a13768-d21e-383f-b6cf-1823740ebad5', 59, '53b55999-0454-31fe-b4be-17715615fedb', '7d178c4a-61f6-3e41-811e-9380e45a8964', 'C', '2023-03-09', '2023-03-09 00:00:00', '2023-03-09 16:47:06', 540, 'America/Denver', -13.37969, 75.038604, '23671 Amparo Fall\nRosalynville, WV 43639', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(39, 109, '348183e6-ee79-3daf-97fe-e530391a3a21', 60, 'c40f6df7-1d08-305e-b009-4dacfbe7c866', 'b3bbdb29-9304-3b73-b0c4-d65fdc4a5cf6', 'C', '2023-03-09', '2023-03-09 00:00:00', '2023-03-09 19:22:42', 660, 'America/Denver', 64.150105, 36.736085, '4634 Andre Lights Apt. 765\nO\'Connerborough, WA 51001-7682', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49'),
(40, 111, '220f42b5-a016-303b-b6bd-35f357e056da', 61, '78750f00-4210-3e85-85fd-3838682127e0', '234e0e6a-d3e2-3a80-b0d5-7107c961549c', 'O', '2023-03-08', '2023-03-08 00:00:00', NULL, NULL, 'America/Denver', 23.797028, -20.711267, '6014 Andreanne Mission\nBabyfurt, OR 37128-4003', NULL, NULL, NULL, '2023-03-14 01:29:49', '2023-03-14 01:29:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activities_uuid_unique` (`uuid`),
  ADD KEY `activities_workday_id_foreign` (`workday_id`),
  ADD KEY `activities_workday_uuid_foreign` (`workday_uuid`);

--
-- Indexes for table `activity_files`
--
ALTER TABLE `activity_files`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activity_files_uuid_unique` (`uuid`),
  ADD KEY `activity_files_activity_id_foreign` (`activity_id`),
  ADD KEY `activity_files_activity_uuid_foreign` (`activity_uuid`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_uuid_unique` (`uuid`),
  ADD KEY `employees_employer_id_foreign` (`employer_id`),
  ADD KEY `employees_employer_uuid_foreign` (`employer_uuid`);

--
-- Indexes for table `employee_files`
--
ALTER TABLE `employee_files`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_files_uuid_unique` (`uuid`),
  ADD KEY `employee_files_employee_id_foreign` (`employee_id`),
  ADD KEY `employee_files_employee_uuid_foreign` (`employee_uuid`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employers_uuid_unique` (`uuid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_uuid_unique` (`uuid`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_employee_id_foreign` (`employee_id`),
  ADD KEY `users_employee_uuid_foreign` (`employee_uuid`);

--
-- Indexes for table `workcontracts`
--
ALTER TABLE `workcontracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workdays`
--
ALTER TABLE `workdays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `workdays_uuid_unique` (`uuid`),
  ADD KEY `workdays_employer_id_foreign` (`employer_id`),
  ADD KEY `workdays_employer_uuid_foreign` (`employer_uuid`),
  ADD KEY `workdays_employee_id_foreign` (`employee_id`),
  ADD KEY `workdays_employee_uuid_foreign` (`employee_uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `activity_files`
--
ALTER TABLE `activity_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `employee_files`
--
ALTER TABLE `employee_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workcontracts`
--
ALTER TABLE `workcontracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workdays`
--
ALTER TABLE `workdays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_workday_id_foreign` FOREIGN KEY (`workday_id`) REFERENCES `workdays` (`id`),
  ADD CONSTRAINT `activities_workday_uuid_foreign` FOREIGN KEY (`workday_uuid`) REFERENCES `workdays` (`uuid`);

--
-- Constraints for table `activity_files`
--
ALTER TABLE `activity_files`
  ADD CONSTRAINT `activity_files_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activity_files_activity_uuid_foreign` FOREIGN KEY (`activity_uuid`) REFERENCES `activities` (`uuid`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`),
  ADD CONSTRAINT `employees_employer_uuid_foreign` FOREIGN KEY (`employer_uuid`) REFERENCES `employers` (`uuid`);

--
-- Constraints for table `employee_files`
--
ALTER TABLE `employee_files`
  ADD CONSTRAINT `employee_files_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `employee_files_employee_uuid_foreign` FOREIGN KEY (`employee_uuid`) REFERENCES `employees` (`uuid`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `users_employee_uuid_foreign` FOREIGN KEY (`employee_uuid`) REFERENCES `employees` (`uuid`);

--
-- Constraints for table `workdays`
--
ALTER TABLE `workdays`
  ADD CONSTRAINT `workdays_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `workdays_employee_uuid_foreign` FOREIGN KEY (`employee_uuid`) REFERENCES `employees` (`uuid`),
  ADD CONSTRAINT `workdays_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`),
  ADD CONSTRAINT `workdays_employer_uuid_foreign` FOREIGN KEY (`employer_uuid`) REFERENCES `employers` (`uuid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
