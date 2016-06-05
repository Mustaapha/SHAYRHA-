-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 يونيو 2016 الساعة 07:30
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shirha`
--

-- --------------------------------------------------------

--
-- بنية الجدول `main_settings`
--

CREATE TABLE IF NOT EXISTS `main_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `setting_name` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- إرجاع أو استيراد بيانات الجدول `main_settings`
--

INSERT INTO `main_settings` (`id`, `created_at`, `updated_at`, `setting_name`, `value`, `slug`, `type`) VALUES
(1, NULL, NULL, 'site_name', 'Shayrha', 'اسم الموقع', 1),
(2, '2016-05-14 17:31:56', '2016-05-16 20:10:21', 'site_desc', 'Shayrha', 'وصف الموقع', 1),
(3, '2016-05-16 15:43:17', '2016-05-16 15:43:17', 'site_title', '-SHAYRHA', 'عنوان الموقع ', 1),
(4, '2016-05-16 15:43:17', '2016-05-16 15:43:17', 'facebook', 'facebook', 'لنك الفيسبوك', 1),
(5, '2016-05-16 15:44:15', '2016-05-16 15:44:15', 'twitter', 'twitter', 'لنك التويتر', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_21_155522_create_owners_table', 1),
('2016_04_21_160501_things_owner_relationship', 1),
('2016_04_22_233506_create_offers_table', 1),
('2016_05_14_032153_main_settine_table', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `thing_id` int(11) NOT NULL,
  `offer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `msg_to_owner` text COLLATE utf8_unicode_ci NOT NULL,
  `needer_id` int(11) NOT NULL,
  `needer_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `owner_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `offer_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- إرجاع أو استيراد بيانات الجدول `requests`
--

INSERT INTO `requests` (`id`, `created_at`, `updated_at`, `thing_id`, `offer`, `msg_to_owner`, `needer_id`, `needer_name`, `owner_name`, `offer_pic`, `owner_id`, `type`) VALUES
(1, '2016-05-10 00:35:08', '2016-05-10 00:35:08', 41, 'PHP from a to z', 'السلام عليكم عاوز الكتاب ده وسوف ارده اليك بعد 20 يوم وده رقمى 01445541', 6, 'admin tefa', 'Goahar', 'U0p6GA_3.PNG', 11, 0),
(3, '2016-05-11 12:04:04', '2016-05-11 12:04:04', 40, 'lab top', 'عاوز الحاجة دى وهرجعهالك بعد شهر من الان وده ررقمى 0145631', 12, 'Amr ', 'Goahar', 'qj8X84_3.PNG', 11, 0),
(4, '2016-05-13 22:25:03', '2016-05-13 22:25:03', 42, 'Nesma ', 'انا رجل طيب القلب احترم الحيوانات احتاج هذه القطه ', 13, 'Hossam ', 'Amr', 'E6Z7fS_12670901_809068292571408_2374539778045786559_n.jpg', 12, 0),
(5, '2016-05-13 22:26:20', '2016-05-13 22:26:20', 43, 'Cat 2', 'عاوز القطة دى يا يوزر يا عرص ', 6, 'admin tefa', 'Hossam', '5xLINr_12670901_809068292571408_2374539778045786559_n.jpg', 13, 0),
(6, '2016-05-21 04:07:31', '2016-05-21 04:07:31', 40, 'lab top', 'محتاج الحاجة دى واى كلام بقى ', 6, 'admin tefa', 'Goahar', 'qj8X84_3.PNG', 11, 0),
(7, '2016-05-21 04:10:59', '2016-05-21 04:10:59', 40, 'lab top', 'ىىؤىؤى', 6, 'admin tefa', 'Goahar', 'qj8X84_3.PNG', 11, 1),
(8, '2016-05-24 23:23:30', '2016-05-24 23:23:30', 1, 'رواية الخيميائى 2', 'عاوز الرواية دى يا صاحبى وهرجعهالك بعد شهر انا ساكن جنب البوسطة ', 15, 'Abdel hamid ', 'Ebrahim Eraky', 'tNqAiw_13293211_10209759325206434_67258235_n.jpg', 16, 0),
(9, '2016-05-24 23:25:52', '2016-05-24 23:25:52', 1, 'رواية الخيميائى 2', 'lموافق يا صحابى وده رقمى 015555544', 15, 'Abdel hamid ', 'Ebrahim Eraky', 'tNqAiw_13293211_10209759325206434_67258235_n.jpg', 16, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `things`
--

CREATE TABLE IF NOT EXISTS `things` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `thing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thing_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `owner_pic` text COLLATE utf8_unicode_ci NOT NULL,
  `thing_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `way_of_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `things`
--

INSERT INTO `things` (`id`, `created_at`, `updated_at`, `thing`, `thing_pic`, `owner_id`, `owner_name`, `owner_pic`, `thing_desc`, `way_of_order`) VALUES
(1, '2016-05-24 23:15:18', '2016-05-25 06:17:40', 'رواية الخيميائى 2', 'tNqAiw_13293211_10209759325206434_67258235_n.jpg', '16', 'Ebrahim Eraky', '8qX61g_11148604_663191560451558_7241493906562356231_n.jpg', 'رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى رواية الخيميائى ', '');

-- --------------------------------------------------------

--
-- بنية الجدول `things_owner_relationship`
--

CREATE TABLE IF NOT EXISTS `things_owner_relationship` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thing_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin` tinyint(4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `admin`, `name`, `address`, `user_name`, `user_pic`, `location`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 1, 'admin tefa', 'Beni suef', 'tofa', 'tlsN9H_11148604_663191560451558_7241493906562356231_n.jpg', 'bns', 'sasa_16_1_1994@yahoo.com', '$2y$10$GLYO1/FJxQXyIdrpcOXkWu1jjVVRsZ8JZUaKKDuLtaLrc/lQGrZ4q', '3RqevvLbQLJ5kaFA8O2IPn6UKPezEV1t6FOcRwC0dsWYM2yKuuO4hXIXBdVw', '2016-05-01 08:52:23', '2016-05-25 05:58:08'),
(7, 0, 'Mustafa Muhamed Ahmed ', 'salah salem -beni suef', 'Sasa', 'logo5.jpg', 'bns', 'mostafa5050550@gmail.com', '$2y$10$o.8bwQFyruzFHOdVL84WCOJUk9A2UHxvVPdmgwfiZtoNwn1VJFqOC', '9nPewuByAPG4YVYYTzT21O33vwMMy2icoVhLbTdQa1tTTBF75voiYJt7tB3B', '2016-05-05 05:26:54', '2016-05-08 10:06:03'),
(8, 0, 'mego', 'salah salem -beni suef', 'Megz', 'logo.png', 'bns', 'magdy@gmail.com', '$2y$10$Gs8uCnEZjETMGbuy98ZiS..3Iq173g0Tpo3V5fOC8aDxycOxEC1yu', 'qDE4cuMPXWNGqaTZ4TCCLEWQdboKJ5HMu4AXCAsGTnrgW5DpshKLfaxRFbOL', '2016-05-07 06:05:27', '2016-05-07 06:07:53'),
(9, 0, 'Dr Ahmed', 'cairo', 'Dr Ahmed', 'logo.jpg', 'bns', 'ahmed29329@gmail.com', '$2y$10$T7d1jdMu51hjyiQ6EkcmvuHihaPpXugDLnQfVc5fyWO84u2X2DbcC', 'd6tuaZRtWkZfZReh81X1rblEptDdiLs0LZ4KQV4kZqc6nyKvpsWLdAnknHr9', '2016-05-08 10:07:14', '2016-05-08 10:10:22'),
(10, 0, 'Body', 'salah salem -beni suef', 'Brown', 'DOZfgw_11148604_663191560451558_7241493906562356231_n.jpg', 'bns', 'brown@yahoo.com', '$2y$10$0kp7LdGVmaTXSlJIW6EnUuoqc0GfKeDB2899bdHMZ8qLkuYTCYlfW', 'hsCyMtY8VBDYml4LU13nDA73QG916VColskOvIUB72EAC93iUkRTGGDZHJ1j', '2016-05-10 07:20:10', '2016-05-10 07:23:32'),
(11, 0, 'Goahar', 'Helwan', 'gohary', 'ipoqKg_12670901_809068292571408_2374539778045786559_n.jpg', 'bns', 'Gohar@yahoo.com', '$2y$10$bk7AEEWO6e6qaq.xMdru3uoeR0uuYiz1v8dpUkXEqcm7iD3nFoN0m', '2phXiu2wgLyCdnIvwgiUKyypEiCY41MvULv7oiXC2lB5AC1s3r2N21Ih1dE5', '2016-05-10 07:26:43', '2016-05-11 19:06:04'),
(12, 0, 'Amr ', 'makaa', 'Amro', 'LP7bGy_3.PNG', 'bns', 'amr@yahoo.com', '$2y$10$b0e5WJoDQuyy6fzPkaq3Ne6wlIVL7pQI19bGRZL6hupvr/QP2pM4u', 'mYnmdY2FgZJjBxrlfuje2rLDCyku2b46cM45YlUFrIVdOd13dcQ2VIqgNnvQ', '2016-05-11 18:55:52', '2016-05-11 19:14:57'),
(13, 0, 'Hossam ', 'bns', 'Zikas', '345WIZ_11148604_663191560451558_7241493906562356231_n.jpg', 'bns', 'hosa@gamil.com', '$2y$10$ubaV8vKzzhDMDxbq9P1lUekqlpIQRooPXsSdMOQZnU0adWsB07guC', 'ekWeQb6Qv2V072Hv0uW39VYviTFgE9jAHboSufFjKvY9MTo2joskMkk2uQXR', '2016-05-14 05:19:22', '2016-05-14 05:32:18'),
(14, 0, 'Anas Ayman', 'شارع عامر عفيفى بجوار كلية صيدلة ', 'Nosa', 'kuPenO_11148604_663191560451558_7241493906562356231_n.jpg', 'bns', 'anas@gmail.com', '$2y$10$nXVb0W7iUZEL8ZA2F03hcu.arxu61ITnrZ/nWMJTMZ/jdecnyGZ/.', 'TEbiSao2yhb66gl9zUrFVEX9X3IQinhhJpXOG06P9Op3biQDGpmW82o10D3m', '2016-05-21 22:48:54', '2016-05-21 23:24:31'),
(15, 0, 'Abdel hamid ', 'salah salem -beni suef', 'Mido', 'logo.png', 'tanta', 'mido@yahoo.com', '$2y$10$xzhq33.EXhq3yZwTQkrA9emYsVc0/Aie8l8sPyHUMfS2Pul9z01Um', '1otmpVPjeovmS2jfC9KjBKBH9CnEXP55EgoOI6sRANAI9V2lAl1oXC7KGZzP', '2016-05-25 06:04:30', '2016-05-25 06:24:23'),
(16, 0, 'Ebrahim Eraky', 'tanta', 'Hema', '8qX61g_11148604_663191560451558_7241493906562356231_n.jpg', 'tanta', 'hima@yahoo.com', '$2y$10$FDp15nidscM2CMueEbNfsOuCe7aUTS.0hCAri9evmU7TdLBAEezDW', 'IH1WDerwbfOf30yxW41HJqfQkCgg0fmktyeNVJYpXmY7H6g2mNEdb45oXjep', '2016-05-25 06:09:03', '2016-05-25 06:18:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
