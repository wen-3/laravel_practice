-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.4.8-MariaDB - mariadb.org binary distribution
-- 伺服器操作系統:                      Win64
-- HeidiSQL 版本:                  10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 傾印 project1217 的資料庫結構
CREATE DATABASE IF NOT EXISTS `project1217` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `project1217`;

-- 傾印  表格 project1217.failed_jobs 結構
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project1217.failed_jobs 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- 傾印  表格 project1217.migrations 結構
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project1217.migrations 的資料：~6 rows (約數)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_05_014128_create_products_table', 1),
	(5, '2019_12_05_014328_create_news_table', 1),
	(6, '2019_12_17_024846_create_product_type_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- 傾印  表格 project1217.news 結構
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project1217.news 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- 傾印  表格 project1217.password_resets 結構
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project1217.password_resets 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- 傾印  表格 project1217.products 結構
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project1217.products 的資料：~8 rows (約數)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `type_id`, `title`, `description`, `img`, `sort`, `created_at`, `updated_at`) VALUES
	(5, 1, 'ihpone6', '<p>Test</p>', '/upload/product/1576560135.jpg', 1, '2019-12-17 05:22:15', '2019-12-17 05:41:11'),
	(6, 1, 'ihpone7', '<p>Test</p>', '/upload/product/1576560135.jpg', 1, '2019-12-17 05:22:15', '2019-12-17 05:36:11'),
	(7, 1, 'ihpone8', '<p>Test</p>', '/upload/product/1576560135.jpg', 1, '2019-12-17 05:22:15', '2019-12-17 05:36:11'),
	(8, 1, 'ihpone9', '<p>Test</p>', '/upload/product/1576560135.jpg', 1, '2019-12-17 05:22:15', '2019-12-17 05:36:11'),
	(9, 1, 'ihpone10', '<p>Test</p>', '/upload/product/1576560135.jpg', 5, '2019-12-17 05:22:15', '2019-12-17 05:36:11'),
	(10, 2, 'MAC13', '<p>Test</p>', '/upload/product/1576560135.jpg', 1, '2019-12-17 05:22:15', '2019-12-17 05:36:11'),
	(11, 2, 'MAC15', '<p>Test</p>', '/upload/product/1576560135.jpg', 1, '2019-12-17 05:22:15', '2019-12-17 05:36:11'),
	(12, 2, 'MAC_Pro', '<p>Test</p>', '/upload/product/1576560135.jpg', 1, '2019-12-17 05:22:15', '2019-12-17 05:36:11');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- 傾印  表格 project1217.product_type 結構
CREATE TABLE IF NOT EXISTS `product_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project1217.product_type 的資料：~2 rows (約數)
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
INSERT INTO `product_type` (`id`, `type_name`, `sort`, `created_at`, `updated_at`) VALUES
	(1, 'iphone', 0, NULL, '2019-12-17 05:14:32'),
	(2, 'mac', 2, NULL, NULL);
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;

-- 傾印  表格 project1217.users 結構
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  project1217.users 的資料：~1 rows (約數)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Admin@gmail.com', NULL, '$2y$10$6x/V17p2R5Izg6HedtjJ7ezkV1ebVXMBVz5fybwNgmGiy1S0V/zQG', NULL, '2019-12-17 01:28:33', '2019-12-17 01:28:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
