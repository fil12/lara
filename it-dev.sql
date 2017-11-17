-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.16 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных it
CREATE DATABASE IF NOT EXISTS `it` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `it`;

-- Дамп структуры для таблица it.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы it.migrations: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2014_10_12_000000_create_users_table', 1),
	(14, '2014_10_12_100000_create_password_resets_table', 1),
	(15, '2017_10_12_062548_create_table_page', 1),
	(16, '2017_10_12_062612_create_table_portfolios', 1),
	(17, '2017_10_12_062652_create_table_prices', 1),
	(18, '2017_10_12_062745_create_table_peoples', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица it.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_publ` tinyint(2) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы it.pages: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `name`, `alias`, `text`, `img`, `is_publ`, `created_at`, `updated_at`) VALUES
	(1, 'Главная', 'section1', 'NULL', 'null', 1, '2017-10-12 15:49:52', '2017-10-12 15:49:52'),
	(2, 'Портфолио', 'section2', '<p>Наши выполненные работы <a href="#" onclick="return false">Behance</a>.</p>\r\n', '', 1, '2017-10-12 11:40:39', '2017-11-13 12:23:56'),
	(3, 'Цены', 'section3', '', '', 1, '2017-10-12 11:40:39', '2017-10-12 11:40:39'),
	(4, 'О нас', 'section4', 'We are regarded as an industry expert in stunning website solutions, focused on delivering unsurpassed designs.', '', 1, '2017-10-12 11:40:39', '2017-10-12 11:40:39'),
	(5, 'контакты', 'section5', 'et in touch via contact form or email us directly. We will get back to you as soon as possible.', '', 1, '2017-10-12 11:40:39', '2017-10-12 11:40:39'),
	(6, 'Блог', 'blog', '', '', 0, '2017-10-12 11:40:39', '2017-10-12 11:40:39');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Дамп структуры для таблица it.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы it.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица it.peoples
CREATE TABLE IF NOT EXISTS `peoples` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'noimage.jpg',
  `skills` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_publ` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы it.peoples: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `peoples` DISABLE KEYS */;
INSERT INTO `peoples` (`id`, `name`, `lastname`, `position`, `img`, `skills`, `alias`, `is_publ`, `created_at`, `updated_at`) VALUES
	(1, 'Alex', 'Filimonov', 'PHP developer', 'fil.jpg', 'PHP, JS, JQuery, AJAX, JSON, CSS3, CSS, HTML5, HTML.', 'Filimonov', 1, NULL, NULL),
	(2, 'Viki', 'Saharuk', 'Web-Designer', 'saharuk.jpg', 'JS, JQUERY, CSS3, CSS, HTML5, HTML, PhotoShop, CorelDraw, Illustrator ', 'saharuk', 1, NULL, NULL),
	(3, 'Виктор', 'Вильский', 'Php developer', 'about11.jpg', 'Php, laravel, Yii2, JS,JQUERY,AJAX, JSON, CSS3, CSS, HTML5, HTML', 'vilskiy', 0, '2017-11-10 11:47:46', '2017-11-10 11:47:46');
/*!40000 ALTER TABLE `peoples` ENABLE KEYS */;

-- Дамп структуры для таблица it.portfolios
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_publ` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы it.portfolios: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` (`id`, `name`, `text`, `img`, `filter`, `alias`, `is_publ`, `created_at`, `updated_at`) VALUES
	(1, 'Fertilizer formula', 'Сайт по продаже органических удобрений. ', 'ff.png', 'category-1', 'landing page', '1', NULL, NULL),
	(2, 'ApexStroy', 'Сайт строительной компании "АпексСтрой". ', 'apex.png', 'category-2', 'Сайт Визитка', '1', NULL, NULL),
	(3, 'Ukrhim', 'Интернет магазин  химической продукции.', 'ukrhim.png', 'category-4', 'Интернет-магазин', '1', NULL, NULL),
	(4, 'Sketch Book', 'Webdesign', 'project06.jpg', 'category-1', 'landing page', '0', NULL, NULL),
	(5, 'Video Example', 'Webdesign', 'project01.jpg', 'category-1', 'landing page', '0', NULL, NULL),
	(6, 'Copan Magazine', 'Webdesign', 'project04.jpg', 'category-3', 'Корпоративный сайт', '0', NULL, NULL),
	(7, 'Love Mockup', 'Illustration', 'project09.jpg', 'category-2', 'Сайт Визитка', '0', NULL, NULL),
	(8, 'Slideshow', 'Illustration', 'project05.jpg', 'category-2', 'Сайт Визитка', '0', NULL, NULL),
	(9, 'Lightbox', 'Webdesign', 'project02.jpg', 'category-1', 'landing page', '0', NULL, NULL);
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;

-- Дамп структуры для таблица it.prices
CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы it.prices: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` (`id`, `name`, `price`, `text`, `alias`, `created_at`, `updated_at`) VALUES
	(1, 'Light', '100', '<p style="text-align:center">adgshj</p>\r\n\r\n<p style="text-align:center">asdgfh</p>\r\n\r\n<p style="text-align:center">ADS</p>\r\n\r\n<p style="text-align:center">DASFGH</p>\r\n', 'light', NULL, '2017-11-10 18:23:25'),
	(2, 'Standart', '300', '<p style="text-align:center">sdfgh</p>\r\n\r\n<p style="text-align:center">sadfgh</p>\r\n\r\n<p style="text-align:center">asdfg</p>\r\n\r\n<p style="text-align:center">adsfg</p>\r\n', 'standart', NULL, '2017-11-10 18:24:41'),
	(3, 'Premium', '500', '<p style="text-align:center">sadghf</p>\r\n\r\n<p style="text-align:center">sdfgh</p>\r\n\r\n<p style="text-align:center">sadfg</p>\r\n\r\n<p style="text-align:center">sadfgh</p>\r\n', 'hard', NULL, '2017-11-10 18:25:07');
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;

-- Дамп структуры для таблица it.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rool` varchar(1) COLLATE utf8_unicode_ci DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы it.users: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `rool`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@it-dev.com.ua', '$2y$10$POSZZ/FFAWGYhkrLtBQabun27z5bP5CPrneyJcrdKtwD3.vr3lCQm', 'JVypLzR55fHSqgcRPx5sOT5jg2KQRvPHITQoEAboICNLsoW2tsI8gLgNq2Ja', '1', '2017-11-07 08:15:21', '2017-11-13 13:12:14'),
	(6, 'fil', 'filimonov12@gmail.com', '$2y$10$lbP.4LJwltapiWlsUSqpUu.Qs76lYH1BjNVx8viGm9CTDvmoFdBnu', 'Zb1KkbTvsWF8MBYtBNT4aNbIShhCXePwYjJA25ribkCeixyVQk43j9pKOeuK', '3', '2017-11-13 12:04:17', '2017-11-15 10:32:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
