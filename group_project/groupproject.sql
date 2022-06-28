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


-- 傾印 group_project 的資料庫結構
CREATE DATABASE IF NOT EXISTS `group_project` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `group_project`;

-- 傾印  表格 group_project.failed_jobs 結構
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.failed_jobs 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- 傾印  表格 group_project.form 結構
CREATE TABLE IF NOT EXISTS `form` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.form 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
/*!40000 ALTER TABLE `form` ENABLE KEYS */;

-- 傾印  表格 group_project.migrations 結構
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.migrations 的資料：~9 rows (約數)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2020_01_19_123153_create_news_table', 1),
	(4, '2020_01_20_000000_create_failed_jobs_table', 1),
	(5, '2020_01_20_032206_create_product_type_table', 1),
	(6, '2020_01_20_033931_create_order_table', 1),
	(8, '2020_01_20_053317_create_products_table', 1),
	(9, '2020_01_20_064930_create_order_items_table', 1),
	(10, '2020_01_21_135406_create_form_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- 傾印  表格 group_project.news 結構
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.news 的資料：~5 rows (約數)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `img`, `description`, `sort`, `created_at`, `updated_at`) VALUES
	(1, '12/22 (日) Mini 市集聖誕場來', '/upload/news/1579498735bf8229696f7a3bb4700cfddef19fa23f.png', '聖誕節要到了，我們特別作了聖誕造型的司康來應景 歡迎大家來綠光計畫Mini市集逛逛，祝大家都有一...', '1', '2020-01-20 05:38:55', '2020-01-20 05:42:45'),
	(2, '10/06 (六) [草悟廣場漾set市集', '/upload/news/157949876258a2fc6ed39fd083f55d4182bf88826d.png', '我們在草悟廣唱 漾set市集 和大家見面喔，英司康從隱身mini巷弄走向廣場了 因為很多客人告訴...', '2', '2020-01-20 05:39:22', '2020-01-20 05:42:53'),
	(3, '新品即將推出了', '/upload/news/15794987934c5bde74a8f110656874902f07378009.png', '阿薩姆奶茶 - 全新口味即將上市..', '3', '2020-01-20 05:39:53', '2020-01-20 05:43:02'),
	(4, '[綠光計劃]', '/upload/news/15794988115f93f983524def3dca464469d2cf9f3e.png', '回顧2018年，全世界所發生的事，與我們每個人內心所經歷的歡喜與哀愁，不論順境與逆境，其實都淬鍊豐富了...', '4', '2020-01-20 05:40:11', '2020-01-20 05:43:18'),
	(5, '[太可愛了，捨不得送]', '/upload/news/15794988293644a684f98ea8fe223c713b77189a77.png', '又用小朋友請假時間，畫了一個袋子^^要送人的委託主說:"太可愛了，捨不得送...可以量產嗎?"...', '5', '2020-01-20 05:40:29', '2020-01-20 05:43:50');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- 傾印  表格 group_project.order 結構
CREATE TABLE IF NOT EXISTS `order` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_to_send` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new_order',
  `total_price` int(11) NOT NULL,
  `remark` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.order 的資料：~4 rows (約數)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`id`, `order_no`, `receive_name`, `receive_phone`, `receive_address`, `receive_email`, `receipt`, `time_to_send`, `status`, `total_price`, `remark`, `created_at`, `updated_at`) VALUES
	(16, 'qwe2020012116', 'bngfngh', '1564', 'hnghnmghj', 'abc@gmail.com', '二聯式發票', '下午', 'new_order', 1740, 'hnghmh', '2020-01-21 07:17:45', '2020-01-21 07:17:45'),
	(18, 'qwe2020012118', 'hbgnhg', '15156', 'fbfbgf', '456456c@gmail.com', '二聯式發票', '下午', 'payment_done', 1760, 'hnghngh', '2020-01-21 07:19:49', '2020-01-21 07:20:55'),
	(19, 'qwe2020012119', 'ghgn', '156456', 'hnhngf', 'sfg@gmail.com', '三聯式發票', '皆可', 'payment_done', 3580, NULL, '2020-01-21 07:49:49', '2020-01-21 07:50:39'),
	(20, 'qwe2020012120', 'ghjnghmgh', '156156', 'jhmhjm', 'hnhc@gmail.com', '三聯式發票', '下午', 'payment_done', 2790, NULL, '2020-01-21 09:28:04', '2020-01-21 09:29:10');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- 傾印  表格 group_project.order_items 結構
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.order_items 的資料：~18 rows (約數)
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
	(6, 16, 1, 1, 220, '2020-01-21 07:17:45', '2020-01-21 07:17:45'),
	(7, 16, 3, 3, 220, '2020-01-21 07:17:45', '2020-01-21 07:17:45'),
	(8, 16, 5, 2, 100, '2020-01-21 07:17:45', '2020-01-21 07:17:45'),
	(9, 16, 12, 3, 220, '2020-01-21 07:17:45', '2020-01-21 07:17:45'),
	(10, 18, 1, 3, 220, '2020-01-21 07:19:49', '2020-01-21 07:19:49'),
	(11, 18, 11, 5, 220, '2020-01-21 07:19:49', '2020-01-21 07:19:49'),
	(12, 19, 3, 2, 220, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(13, 19, 5, 3, 100, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(14, 19, 12, 2, 150, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(15, 19, 13, 2, 150, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(16, 19, 15, 5, 150, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(17, 19, 16, 3, 150, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(18, 19, 17, 4, 150, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(19, 19, 18, 2, 220, '2020-01-21 07:49:49', '2020-01-21 07:49:49'),
	(20, 20, 1, 1, 220, '2020-01-21 09:28:04', '2020-01-21 09:28:04'),
	(21, 20, 5, 2, 100, '2020-01-21 09:28:04', '2020-01-21 09:28:04'),
	(22, 20, 11, 6, 220, '2020-01-21 09:28:04', '2020-01-21 09:28:04'),
	(23, 20, 16, 7, 150, '2020-01-21 09:28:04', '2020-01-21 09:28:04');
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- 傾印  表格 group_project.password_resets 結構
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.password_resets 的資料：~0 rows (約數)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- 傾印  表格 group_project.products 結構
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `price` mediumint(9) NOT NULL DEFAULT 0,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.products 的資料：~12 rows (約數)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `description`, `img`, `sort`, `price`, `type_id`, `created_at`, `updated_at`) VALUES
	(1, '原味經典', '司康_原味經典', '/upload/product/15795880508d5e957f297893487bd98fa830fa6413.png', 1, 220, '1', '2020-01-20 06:17:32', '2020-01-21 06:27:30'),
	(3, '葡萄乾口味', '司康_葡萄乾口味', '/upload/product/157958804176dc611d6ebaafc66cc0879c71b5db5c.png', 3, 220, '1', '2020-01-20 07:33:31', '2020-01-21 06:27:21'),
	(4, '經典果醬', '果醬_經典果醬', '/upload/product/1579525363006f52e9102a8d3be2fe5614f42ba989.png', 1, 100, '2', '2020-01-20 07:33:55', '2020-01-20 13:05:39'),
	(5, '黑櫻桃果醬', '果醬_黑櫻桃果醬', '/upload/product/1579525398069059b7ef840f0c74a814ec9237b6ec.png', 2, 100, '2', '2020-01-20 07:34:18', '2020-01-21 06:28:01'),
	(11, '蔓越莓口味', '司康_蔓越莓口味', '/upload/product/157959717242a0e188f5033bc65bf8d78622277c4e.png', 2, 220, '1', '2020-01-20 13:06:23', '2020-01-21 08:59:32'),
	(12, '經典伯爵紅茶', '茶類_經典伯爵紅茶', '/upload/product/15795256175ef059938ba799aaa845e1c2e8a762bd.png', 1, 150, '3', '2020-01-20 13:06:57', '2020-01-21 07:29:46'),
	(13, '皇家混合紅茶', '茶類_皇家混合紅茶', '/upload/product/1579591752a4a042cf4fd6bfb47701cbc8a1653ada.png', 2, 150, '3', '2020-01-21 07:29:12', '2020-01-21 07:29:54'),
	(14, '檸檬紅茶', '茶類_檸檬紅茶', '/upload/product/1579591979fa7cdfad1a5aaf8370ebeda47a1ff1c3.png', 3, 150, '3', '2020-01-21 07:32:59', '2020-01-21 07:32:59'),
	(15, '蔓越莓紅茶', '茶類_蔓越莓紅茶', '/upload/product/15795920225f93f983524def3dca464469d2cf9f3e.png', 4, 150, '3', '2020-01-21 07:33:42', '2020-01-21 07:33:42'),
	(16, '早餐混合紅茶', '茶類_早餐混合紅茶', '/upload/product/157959212206409663226af2f3114485aa4e0a23b4.png', 1, 150, '3', '2020-01-21 07:35:22', '2020-01-21 07:35:22'),
	(17, '青蘋果果醬', '果醬_青蘋果果醬', '/upload/product/157959220376dc611d6ebaafc66cc0879c71b5db5c.png', 3, 150, '2', '2020-01-21 07:36:43', '2020-01-21 07:37:05'),
	(18, '紅鞠口味', '司康_紅鞠口味', '/upload/product/1579592282ec8956637a99787bd197eacd77acce5e.png', 4, 220, '1', '2020-01-21 07:38:02', '2020-01-21 07:38:02');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- 傾印  表格 group_project.product_type 結構
CREATE TABLE IF NOT EXISTS `product_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在傾印表格  group_project.product_type 的資料：~3 rows (約數)
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
INSERT INTO `product_type` (`id`, `type_name`, `created_at`, `updated_at`, `sort`) VALUES
	(1, '司康', '2020-01-20 05:51:58', '2020-01-20 05:51:58', NULL),
	(2, '果醬', '2020-01-20 05:52:39', '2020-01-20 05:52:39', NULL),
	(3, '茶類', '2020-01-20 05:52:48', '2020-01-20 05:52:48', NULL);
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;

-- 傾印  表格 group_project.users 結構
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

-- 正在傾印表格  group_project.users 的資料：~1 rows (約數)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'groupproject', 'groupproject@gmail.com', NULL, '$2y$10$ppCQVyB1hujP8mMoH4rOiuCSdVf0DFOdgQlhJnF3COFxuz53QX1DG', NULL, '2020-01-20 05:34:04', '2020-01-20 05:34:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
