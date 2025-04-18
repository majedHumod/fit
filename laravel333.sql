-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2025 at 12:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel333`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_mjd.h22017@gmail.com|127.0.0.1', 'i:2;', 1744576329),
('laravel_cache_mjd.h22017@gmail.com|127.0.0.1:timer', 'i:1744576329;', 1744576329);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `company_id`, `name`, `description`, `website`, `email`, `phone`, `whatsapp`, `city`, `country`, `district`, `address`, `images`, `created_at`, `updated_at`, `latitude`, `longitude`) VALUES
(6, NULL, 'نادي الرياضة الذهبي', 'نادي رياضي متكامل يقدم أحدث التجهيزات والخدمات الرياضية للرجال والنساء', 'https://golden-sports.com', 'info@golden-sports.com', '+966500000001', '+966500000001', 'الرياض', 'المملكة العربية السعودية', 'حي الملقا', 'شارع الأمير محمد بن سلمان', '[\"https:\\/\\/images.unsplash.com\\/photo-1534438327276-14e5300c3a48\",\"https:\\/\\/images.unsplash.com\\/photo-1571902943202-507ec2618e8f\"]', '2025-02-25 17:39:47', '2025-02-25 17:39:47', 24.77140000, 46.63830000),
(7, NULL, 'نادي النخبة الرياضي', 'نادي رياضي متخصص في التدريب الشخصي وبناء الأجسام', 'https://elite-fitness.com', 'info@elite-fitness.com', '+966500000002', '+966500000002', 'جدة', 'المملكة العربية السعودية', 'حي الروضة', 'شارع فلسطين', '[\"https:\\/\\/images.unsplash.com\\/photo-1534258936925-c58bed479fcb\",\"https:\\/\\/images.unsplash.com\\/photo-1581009146145-b5ef050c2e1e\"]', '2025-02-25 17:39:47', '2025-02-25 17:39:47', 21.54330000, 39.17280000),
(8, NULL, 'نادي الأطفال السعيد', 'نادي متخصص في الأنشطة الرياضية والترفيهية للأطفال', 'https://happy-kids.com', 'info@happy-kids.com', '+966500000003', '+966500000003', 'الدمام', 'المملكة العربية السعودية', 'حي الشاطئ', 'شارع الخليج', '[\"https:\\/\\/images.unsplash.com\\/photo-1547919307-1ecb10702e6f\",\"https:\\/\\/images.unsplash.com\\/photo-1596464716127-f2a82984de30\"]', '2025-02-25 17:39:47', '2025-02-25 17:39:47', 26.42070000, 50.08880000),
(9, NULL, 'نادي السيدات الراقي', 'نادي نسائي متكامل يوفر جميع الخدمات الرياضية والصحية للسيدات', 'https://ladies-club.com', 'info@ladies-club.com', '+966500000004', '+966500000004', 'الرياض', 'المملكة العربية السعودية', 'حي الياسمين', 'شارع الأميرة نورة', '[\"https:\\/\\/images.unsplash.com\\/photo-1518611012118-696072aa579a\",\"https:\\/\\/images.unsplash.com\\/photo-1574680096145-d05b474e2155\"]', '2025-02-25 17:39:47', '2025-02-25 17:39:47', 24.81740000, 46.62740000),
(10, NULL, 'نادي كبار السن النشط', 'نادي متخصص في الأنشطة الرياضية المناسبة لكبار السن', 'https://active-seniors.com', 'info@active-seniors.com', '+966500000005', '+966500000005', 'جدة', 'المملكة العربية السعودية', 'حي الحمراء', 'شارع الأندلس', '[\"https:\\/\\/images.unsplash.com\\/photo-1571019614242-c5c5dee9f50b\",\"https:\\/\\/images.unsplash.com\\/photo-1571019613454-1cb2f99b2d8b\"]', '2025-02-25 17:39:47', '2025-02-25 17:39:47', 21.54330000, 39.17280000),
(11, 1, 'نادي الرياضة الذهبي', 'نادي رياضي متكامل يقدم أحدث التجهيزات والخدمات الرياضية للرجال والنساء', 'https://golden-sports.com', 'info@golden-sports.com', '+966500000001', '+966500000001', 'الرياض', 'المملكة العربية السعودية', 'حي الملقا', 'شارع الأمير محمد بن سلمان', '[\"https:\\/\\/images.unsplash.com\\/photo-1534438327276-14e5300c3a48\",\"https:\\/\\/images.unsplash.com\\/photo-1571902943202-507ec2618e8f\"]', '2025-02-26 19:49:20', '2025-02-26 19:49:20', 24.77140000, 46.63830000),
(12, 2, 'نادي النخبة الرياضي', 'نادي رياضي متخصص في التدريب الشخصي وبناء الأجسام', 'https://elite-fitness.com', 'info@elite-fitness.com', '+966500000002', '+966500000002', 'جدة', 'المملكة العربية السعودية', 'حي الروضة', 'شارع فلسطين', '[\"https:\\/\\/images.unsplash.com\\/photo-1534258936925-c58bed479fcb\",\"https:\\/\\/images.unsplash.com\\/photo-1581009146145-b5ef050c2e1e\"]', '2025-02-26 19:49:20', '2025-02-26 19:49:20', 21.54330000, 39.17280000),
(13, 3, 'نادي الأطفال السعيد', 'نادي متخصص في الأنشطة الرياضية والترفيهية للأطفال', 'https://happy-kids.com', 'info@happy-kids.com', '+966500000003', '+966500000003', 'الدمام', 'المملكة العربية السعودية', 'حي الشاطئ', 'شارع الخليج', '[\"https:\\/\\/images.unsplash.com\\/photo-1547919307-1ecb10702e6f\",\"https:\\/\\/images.unsplash.com\\/photo-1596464716127-f2a82984de30\"]', '2025-02-26 19:49:20', '2025-02-26 19:49:20', 26.42070000, 50.08880000),
(14, 1, 'نادي السيدات الراقي', 'نادي نسائي متكامل يوفر جميع الخدمات الرياضية والصحية للسيدات', 'https://ladies-club.com', 'info@ladies-club.com', '+966500000004', '+966500000004', 'الرياض', 'المملكة العربية السعودية', 'حي الياسمين', 'شارع الأميرة نورة', '[\"https:\\/\\/images.unsplash.com\\/photo-1518611012118-696072aa579a\",\"https:\\/\\/images.unsplash.com\\/photo-1574680096145-d05b474e2155\"]', '2025-02-26 19:49:20', '2025-02-26 19:49:20', 24.81740000, 46.62740000),
(15, 2, 'نادي كبار السن النشط', 'نادي متخصص في الأنشطة الرياضية المناسبة لكبار السن', 'https://active-seniors.com', 'info@active-seniors.com', '+966500000005', '+966500000005', 'جدة', 'المملكة العربية السعودية', 'حي الحمراء', 'شارع الأندلس', '[\"https:\\/\\/images.unsplash.com\\/photo-1571019614242-c5c5dee9f50b\",\"https:\\/\\/images.unsplash.com\\/photo-1571019613454-1cb2f99b2d8b\"]', '2025-02-26 19:49:20', '2025-02-26 19:49:20', 21.54330000, 39.17280000),
(16, 1, 'نادي الرياضة الذهبي', 'نادي رياضي متكامل يقدم أحدث التجهيزات والخدمات الرياضية للرجال والنساء', 'https://golden-sports.com', 'info@golden-sports.com', '+966500000001', '+966500000001', 'الرياض', 'المملكة العربية السعودية', 'حي الملقا', 'شارع الأمير محمد بن سلمان', '[\"https:\\/\\/images.unsplash.com\\/photo-1534438327276-14e5300c3a48\",\"https:\\/\\/images.unsplash.com\\/photo-1571902943202-507ec2618e8f\"]', '2025-02-28 07:15:18', '2025-02-28 07:15:18', 24.77140000, 46.63830000),
(17, 2, 'نادي النخبة الرياضي', 'نادي رياضي متخصص في التدريب الشخصي وبناء الأجسام', 'https://elite-fitness.com', 'info@elite-fitness.com', '+966500000002', '+966500000002', 'جدة', 'المملكة العربية السعودية', 'حي الروضة', 'شارع فلسطين', '[\"https:\\/\\/images.unsplash.com\\/photo-1534258936925-c58bed479fcb\",\"https:\\/\\/images.unsplash.com\\/photo-1581009146145-b5ef050c2e1e\"]', '2025-02-28 07:15:19', '2025-02-28 07:15:19', 21.54330000, 39.17280000),
(18, 3, 'نادي الأطفال السعيد', 'نادي متخصص في الأنشطة الرياضية والترفيهية للأطفال', 'https://happy-kids.com', 'info@happy-kids.com', '+966500000003', '+966500000003', 'الدمام', 'المملكة العربية السعودية', 'حي الشاطئ', 'شارع الخليج', '[\"https:\\/\\/images.unsplash.com\\/photo-1547919307-1ecb10702e6f\",\"https:\\/\\/images.unsplash.com\\/photo-1596464716127-f2a82984de30\"]', '2025-02-28 07:15:19', '2025-02-28 07:15:19', 26.42070000, 50.08880000),
(19, 1, 'نادي السيدات الراقي', 'نادي نسائي متكامل يوفر جميع الخدمات الرياضية والصحية للسيدات', 'https://ladies-club.com', 'info@ladies-club.com', '+966500000004', '+966500000004', 'الرياض', 'المملكة العربية السعودية', 'حي الياسمين', 'شارع الأميرة نورة', '[\"https:\\/\\/images.unsplash.com\\/photo-1518611012118-696072aa579a\",\"https:\\/\\/images.unsplash.com\\/photo-1574680096145-d05b474e2155\"]', '2025-02-28 07:15:19', '2025-02-28 07:15:19', 24.81740000, 46.62740000),
(20, 2, 'نادي كبار السن النشط', 'نادي متخصص في الأنشطة الرياضية المناسبة لكبار السن', 'https://active-seniors.com', 'info@active-seniors.com', '+966500000005', '+966500000005', 'جدة', 'المملكة العربية السعودية', 'حي الحمراء', 'شارع الأندلس', '[\"https:\\/\\/images.unsplash.com\\/photo-1571019614242-c5c5dee9f50b\",\"https:\\/\\/images.unsplash.com\\/photo-1571019613454-1cb2f99b2d8b\"]', '2025-02-28 07:15:19', '2025-02-28 07:15:19', 21.54330000, 39.17280000);

-- --------------------------------------------------------

--
-- Table structure for table `club_subscription_types`
--

CREATE TABLE `club_subscription_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `subscription_type_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL COMMENT 'السعر الخاص بهذا النادي',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `club_subscription_types`
--

INSERT INTO `club_subscription_types` (`id`, `club_id`, `subscription_type_id`, `price`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 11, 3, 350.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(2, 11, 4, 900.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(3, 11, 7, 2800.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(4, 12, 1, 60.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(5, 12, 3, 400.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(6, 12, 8, 450.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(7, 13, 2, 25.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(8, 13, 1, 45.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(9, 13, 9, 550.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(10, 14, 3, 320.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(11, 14, 5, 1600.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(12, 14, 8, 420.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(13, 15, 1, 40.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(14, 15, 3, 250.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(15, 15, 4, 650.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(16, 16, 3, 350.00, 1, '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(17, 16, 4, 900.00, 1, '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(18, 16, 7, 2800.00, 1, '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(19, 17, 1, 60.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(20, 17, 3, 400.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(21, 17, 8, 450.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(22, 18, 2, 25.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(23, 18, 1, 45.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(24, 18, 9, 550.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(25, 19, 3, 320.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(26, 19, 5, 1600.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(27, 19, 8, 420.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(28, 20, 1, 40.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(29, 20, 3, 250.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(30, 20, 4, 650.00, 1, '2025-02-28 07:15:19', '2025-02-28 07:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `registration_number` varchar(255) NOT NULL COMMENT 'رقم الهوية الاعتبارية',
  `headquarters_city` varchar(255) NOT NULL,
  `headquarters_address` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `registration_number`, `headquarters_city`, `headquarters_address`, `email`, `phone`, `website`, `description`, `created_at`, `updated_at`) VALUES
(1, 'شركة الرياضة الذهبية', '1000000001', 'الرياض', 'حي العليا، شارع العروبة', 'info@golden-sports.com', '+966500000001', 'https://golden-sports.com', 'شركة متخصصة في إدارة الأندية الرياضية الفاخرة', '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(2, 'مجموعة النخبة الرياضية', '1000000002', 'جدة', 'حي الروضة، شارع فلسطين', 'info@elite-fitness.com', '+966500000002', 'https://elite-fitness.com', 'مجموعة متخصصة في إدارة أندية اللياقة البدنية وكمال الأجسام', '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(3, 'شركة أطفال المستقبل', '1000000003', 'الدمام', 'حي الشاطئ، شارع الخليج', 'info@future-kids.com', '+966500000003', 'https://future-kids.com', 'شركة متخصصة في إدارة الأندية والمراكز الترفيهية للأطفال', '2025-02-26 19:49:20', '2025-02-26 19:49:20');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_20_000001_create_clubs_table', 2),
(5, '2024_03_20_000002_create_services_table', 2),
(6, '2024_03_20_000003_create_target_groups_table', 2),
(7, '2024_03_21_000001_add_coordinates_to_clubs_table', 3),
(8, '2024_03_22_000001_create_companies_table', 4),
(9, '2024_03_22_000002_create_subscription_types_table', 4),
(10, '2024_03_22_000003_add_company_id_to_clubs_table', 4),
(11, '2024_03_22_000004_create_club_subscription_types_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `club_id`, `name`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(16, 6, 'كرة قدم', 'ملعب كرة قدم معشب صناعي', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(17, 6, 'سباحة', 'مسبح أولمبي مغطى ومكيف', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(18, 6, 'لياقة بدنية', 'صالة رياضية متكاملة', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(19, 7, 'تدريب شخصي', 'برامج تدريب مخصصة', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(20, 7, 'كمال أجسام', 'صالة مجهزة بأحدث المعدات', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(21, 7, 'تغذية', 'استشارات تغذية متخصصة', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(22, 8, 'جمباز', 'صالة جمباز مجهزة للأطفال', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(23, 8, 'سباحة', 'مسبح آمن للأطفال', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(24, 8, 'ألعاب حركية', 'منطقة ألعاب حركية متكاملة', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(25, 9, 'يوجا', 'صالة يوجا هادئة', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(26, 9, 'زومبا', 'صالة رقص وزومبا', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(27, 9, 'سبا', 'خدمات سبا متكاملة', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(28, 10, 'تمارين خفيفة', 'تمارين مناسبة لكبار السن', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(29, 10, 'علاج طبيعي', 'خدمات علاج طبيعي', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(30, 10, 'سباحة علاجية', 'مسبح مجهز للسباحة العلاجية', NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(31, 11, 'كرة قدم', 'ملعب كرة قدم معشب صناعي', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(32, 11, 'سباحة', 'مسبح أولمبي مغطى ومكيف', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(33, 11, 'لياقة بدنية', 'صالة رياضية متكاملة', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(34, 12, 'تدريب شخصي', 'برامج تدريب مخصصة', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(35, 12, 'كمال أجسام', 'صالة مجهزة بأحدث المعدات', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(36, 12, 'تغذية', 'استشارات تغذية متخصصة', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(37, 13, 'جمباز', 'صالة جمباز مجهزة للأطفال', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(38, 13, 'سباحة', 'مسبح آمن للأطفال', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(39, 13, 'ألعاب حركية', 'منطقة ألعاب حركية متكاملة', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(40, 14, 'يوجا', 'صالة يوجا هادئة', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(41, 14, 'زومبا', 'صالة رقص وزومبا', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(42, 14, 'سبا', 'خدمات سبا متكاملة', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(43, 15, 'تمارين خفيفة', 'تمارين مناسبة لكبار السن', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(44, 15, 'علاج طبيعي', 'خدمات علاج طبيعي', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(45, 15, 'سباحة علاجية', 'مسبح مجهز للسباحة العلاجية', NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(46, 16, 'كرة قدم', 'ملعب كرة قدم معشب صناعي', 'fas fa-futbol', '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(47, 16, 'سباحة', 'مسبح أولمبي مغطى ومكيف', 'fas fa-swimming-pool', '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(48, 16, 'لياقة بدنية', 'صالة رياضية متكاملة', 'fas fa-dumbbell', '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(49, 17, 'تدريب شخصي', 'برامج تدريب مخصصة', 'fas fa-user-friends', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(50, 17, 'كمال أجسام', 'صالة مجهزة بأحدث المعدات', 'fas fa-dumbbell', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(51, 17, 'تغذية', 'استشارات تغذية متخصصة', 'fas fa-apple-alt', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(52, 18, 'جمباز', 'صالة جمباز مجهزة للأطفال', 'fas fa-child', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(53, 18, 'سباحة', 'مسبح آمن للأطفال', 'fas fa-swimming-pool', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(54, 18, 'ألعاب حركية', 'منطقة ألعاب حركية متكاملة', 'fas fa-gamepad', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(55, 19, 'يوجا', 'صالة يوجا هادئة', 'fas fa-spa', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(56, 19, 'زومبا', 'صالة رقص وزومبا', 'fas fa-music', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(57, 19, 'سبا', 'خدمات سبا متكاملة', 'fas fa-hot-tub', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(58, 20, 'تمارين خفيفة', 'تمارين مناسبة لكبار السن', 'fas fa-walking', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(59, 20, 'علاج طبيعي', 'خدمات علاج طبيعي', 'fas fa-heartbeat', '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(60, 20, 'سباحة علاجية', 'مسبح مجهز للسباحة العلاجية', 'fas fa-swimming-pool', '2025-02-28 07:15:19', '2025-02-28 07:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('260AeRnKHQQys8XFXYSLpfB204a78mLkICNSVmvL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUFtUEhrUURCRHhmT3V4bEJDOTlkZ290RUd2MWdObFRzMnBiczBEayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1744970180),
('6aVgGX2d5HA8l4Rv0jJXMgIZVWBcOOUxW8rkMtFM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNkFNaUw0Q2Y0QWVPbW01SXBpR2xYWTdpc2dUbGtCQk01Znp5enhpWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741013524),
('8mexgk3kG2zhmYv6SHJq3Rq856a5GVHf7gXo4BKL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiT05uM1c2RVdWcUVIMElFekYxUUR5cmVwdUNmRjRLTDVQNmRRSnVEdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741404528),
('BPYUB6sd1hP8qQMNyOrviX7pPMe8x7pVhKiLJTr4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnZtV0xwRzRZMDRmOWZRT0lXWkRRbUNXSUswdjJhdW4xNUpGMDBwciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6MjIyMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1740948304),
('bURYrHSpHl3POa9NQm5njuQldYufMfG4u5m2OeqG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHhQWEg5WVRyaUtlUnI1SlBwWFJ4d0xicGdFbGxONmNlZ1ZEWXloeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745013550),
('cblAKoia3Fbg4pj5eHBw01mUlHS0uTUygd6JrnaT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEF0NjY5bmNGRm5GUlhramd3WE9STVRjOWdLaFp0b1V3MDJDZ2M1TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6MjIyMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741052865),
('dm5rR6EiGwurIcGf7ThPJesLctQHmS82pdRquLBU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSXo3Y2dnc0lPclE2Mnc2Z28xeHV0Wm15R2liWHc2ZDNFa1czVGVlWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741013232),
('H4qqFwD161DBU5BRy5IeguLAJGOZKxpMJ5F4R5A1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYm1VWmRjSDVOMDBTOXhPTmUwcUdRcEtiN3lFalJRakVkUEswWTJxYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTUxOiJodHRwOi8vMTI3LjAuMC4xOjIyMjIvY2x1YnM/Y2l0eT0mY29tcGFueV9pZD0mZGlzdHJpY3Q9Jm1heF9hZ2U9Jm1heF9wcmljZT0mbWluX2FnZT0mbWluX3ByaWNlPSZuYW1lPSZzZXJ2aWNlPSZzdWJzY3JpcHRpb25fdHlwZV9pZD0mdGFyZ2V0X2dyb3VwPXdvbWVuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1740930890),
('i31QCBogTjR1MVonDppmHNaOSVDgRLL6LwVE7Uq4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDJrZ3hEWlVDV1hJQnVrM2h0VVB3aVJUa3Q3SkNsZHNpdGZRYm5JTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTUxOiJodHRwOi8vMTI3LjAuMC4xOjIyMjIvY2x1YnM/Y2l0eT0mY29tcGFueV9pZD0mZGlzdHJpY3Q9Jm1heF9hZ2U9Jm1heF9wcmljZT0mbWluX2FnZT0mbWluX3ByaWNlPSZuYW1lPSZzZXJ2aWNlPSZzdWJzY3JpcHRpb25fdHlwZV9pZD0mdGFyZ2V0X2dyb3VwPXdvbWVuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1740918203),
('iX38TC5g5T83frMazGzMXyGfMrGeR69dgS5V8XXM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieTE3bnRDdzZteHVWN1MyRXZKQVl3RFpTOGkxRXBKTU5VWDYzQmNBQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741288245),
('lfWVyrrTEpMExGfdrrceSoMF1qGem7rwopg0lC5X', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNWJCaTRROGRsZTY1bDByaG9rb0pubWlyWTJHaU5XdFg0T2hFR2hnSiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741125112),
('Pr7zjDJxWUYtWeXKwdHRa5vGzMuJvhLPhBcuZK3O', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSDdJa1pLajBZemtZWXVjaDRkWFRLRjNMV1RxTlNDMDh2eDJWTmtLZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1744576587),
('ZcoQqrtVhqk32gKwKEdKYblBNPgfRHzf5qho3rKJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWXREc0FhbmVjN0JnOFlFWFUwTjRDQnpBRzhDZGFxclhVYWFydXczVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1741054000);

-- --------------------------------------------------------

--
-- Table structure for table `subscription_types`
--

CREATE TABLE `subscription_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `duration_type` enum('day','hour','month','year','sessions','unlimited') NOT NULL COMMENT 'نوع المدة',
  `duration_value` int(11) DEFAULT NULL COMMENT 'قيمة المدة (عدد الأيام/الساعات/الشهور/السنوات/الحصص)',
  `is_limited_sessions` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'هل هو محدود بعدد حصص',
  `sessions_count` int(11) DEFAULT NULL COMMENT 'عدد الحصص',
  `sessions_validity_days` int(11) DEFAULT NULL COMMENT 'صلاحية الحصص بالأيام',
  `price` decimal(10,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_types`
--

INSERT INTO `subscription_types` (`id`, `name`, `description`, `duration_type`, `duration_value`, `is_limited_sessions`, `sessions_count`, `sessions_validity_days`, `price`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'اشتراك يومي', 'دخول ليوم واحد فقط', 'day', 1, 0, NULL, NULL, 50.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(2, 'اشتراك ساعة', 'دخول لمدة ساعة واحدة فقط', 'hour', 1, 0, NULL, NULL, 30.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(3, 'اشتراك شهري', 'اشتراك لمدة شهر كامل', 'month', 1, 0, NULL, NULL, 300.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(4, 'اشتراك 3 شهور', 'اشتراك لمدة ثلاثة شهور', 'month', 3, 0, NULL, NULL, 800.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(5, 'اشتراك 6 شهور', 'اشتراك لمدة ستة شهور', 'month', 6, 0, NULL, NULL, 1500.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(6, 'اشتراك 9 شهور', 'اشتراك لمدة تسعة شهور', 'month', 9, 0, NULL, NULL, 2000.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(7, 'اشتراك سنوي', 'اشتراك لمدة سنة كاملة', 'year', 1, 0, NULL, NULL, 2500.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(8, '12 حصة خلال شهر', '12 حصة يجب استخدامها خلال شهر واحد', 'sessions', NULL, 1, 12, 30, 400.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(9, '12 حصة مفتوحة', '12 حصة بدون تاريخ انتهاء', 'sessions', NULL, 1, 12, NULL, 500.00, 1, '2025-02-26 19:49:20', '2025-02-26 19:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `target_groups`
--

CREATE TABLE `target_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('children','youth','men','women','seniors') NOT NULL,
  `min_age` int(11) DEFAULT NULL,
  `max_age` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `target_groups`
--

INSERT INTO `target_groups` (`id`, `club_id`, `type`, `min_age`, `max_age`, `created_at`, `updated_at`) VALUES
(9, 6, 'men', NULL, NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(10, 6, 'women', NULL, NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(11, 6, 'youth', 16, 25, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(12, 7, 'men', NULL, NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(13, 7, 'youth', 18, 30, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(14, 8, 'children', 4, 12, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(15, 9, 'women', NULL, NULL, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(16, 10, 'seniors', 60, 80, '2025-02-25 17:39:47', '2025-02-25 17:39:47'),
(17, 11, 'men', NULL, NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(18, 11, 'women', NULL, NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(19, 11, 'youth', 16, 25, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(20, 12, 'men', NULL, NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(21, 12, 'youth', 18, 30, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(22, 13, 'children', 4, 12, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(23, 14, 'women', NULL, NULL, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(24, 15, 'seniors', 60, 80, '2025-02-26 19:49:20', '2025-02-26 19:49:20'),
(25, 16, 'men', NULL, NULL, '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(26, 16, 'women', NULL, NULL, '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(27, 16, 'youth', 16, 25, '2025-02-28 07:15:18', '2025-02-28 07:15:18'),
(28, 17, 'men', NULL, NULL, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(29, 17, 'youth', 18, 30, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(30, 18, 'children', 4, 12, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(31, 19, 'women', NULL, NULL, '2025-02-28 07:15:19', '2025-02-28 07:15:19'),
(32, 20, 'seniors', 60, 80, '2025-02-28 07:15:19', '2025-02-28 07:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'majed h alhamudaaa', 'mjd.h2017@gmail.com', NULL, '$2y$12$ZMVVMAwpKmaGayX4GFkOOeMhL2CKpMA4KGsq8ciwri9vHNA6h18K2', NULL, '2025-02-25 15:56:39', '2025-03-01 10:50:40'),
(3, 'majed alhumuda', 'b@gmail.com', NULL, '$2y$12$EIiio4aiEnsTc4aLklUYb.Aj/GCXc6Fa0LI8iz9mVfLMFe7yJXTGe', NULL, '2025-04-13 17:31:46', '2025-04-13 17:31:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubs_company_id_foreign` (`company_id`);

--
-- Indexes for table `club_subscription_types`
--
ALTER TABLE `club_subscription_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `club_subscription_types_club_id_subscription_type_id_unique` (`club_id`,`subscription_type_id`),
  ADD KEY `club_subscription_types_subscription_type_id_foreign` (`subscription_type_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_registration_number_unique` (`registration_number`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_club_id_foreign` (`club_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscription_types`
--
ALTER TABLE `subscription_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_groups`
--
ALTER TABLE `target_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `target_groups_club_id_foreign` (`club_id`);

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
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `club_subscription_types`
--
ALTER TABLE `club_subscription_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `subscription_types`
--
ALTER TABLE `subscription_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `target_groups`
--
ALTER TABLE `target_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `club_subscription_types`
--
ALTER TABLE `club_subscription_types`
  ADD CONSTRAINT `club_subscription_types_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `club_subscription_types_subscription_type_id_foreign` FOREIGN KEY (`subscription_type_id`) REFERENCES `subscription_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `target_groups`
--
ALTER TABLE `target_groups`
  ADD CONSTRAINT `target_groups_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
