-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2020 at 02:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontend_users`
--

DROP TABLE IF EXISTS `frontend_users`;
CREATE TABLE IF NOT EXISTS `frontend_users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_users`
--

INSERT INTO `frontend_users` (`id`, `company_name`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone`, `email`, `is_active`, `password`, `created_at`, `updated_at`) VALUES
(1, 'invito', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999999999', 'ram.invitosolutions@gmail.com', 1, '$2y$10$qXRA2SDEPff6dTizs/A9MOtU6FzLpVBxY8xOSuCpwGuvbuM4cNK3q', NULL, NULL),
(2, 'invito1', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999999998', 'test@example.comg', 1, '$2y$10$Ml4KfX39njQvEPrAjmkUmuqArHsPp5/cQae3p4QkQIeNE4bEW5AVy', NULL, NULL),
(3, 'invito3', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999993', 'test@example.com3', 1, '$2y$10$HU0hHDFeY3gb8awpnyaZp.Zv.zQU2EqaVDr8j1NGnbAsZZoe/uMCy', NULL, NULL),
(4, 'invito5', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999995999', 'test@example.com5', 1, '$2y$10$UHKNJqLPJvAa5Ixi7LdM7uwyjm5k7x./yBiapBUFFBcZjfHfVykia', NULL, NULL),
(5, 'invito17', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999979999', 'test@example.com7', 1, '$2y$10$m4Yo0LyDbWksMrXZMR5rceRLtyRSjc1sWQtG.E2rbEyNwYiGBW6FS', NULL, NULL),
(6, 'invito0', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999990', 'test@example.com0', 1, '$2y$10$d5AG6.mdHRnbgoFYt74Ff.5pwsUEYGrrDgoWRVUnxHmzaH3J6dIEe', NULL, NULL),
(7, 'invito45', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999599', 'test@example.com43', 1, '$2y$10$jnT/hO873syPiJMUKmXZ0u6Z7pMEk1oavEqnUAk5NCpcOZheDsO0.', NULL, NULL),
(8, 'invito56', '', '', 'sector 67', 'mohali', 'punjab', '111111', '999999995699', 'test@example.com56', 1, '$2y$10$3.9udjl3O4F7XdXqwV42hujfOYsSz/Du.Gu/ygKMFP2Srv1wdqFXC', NULL, NULL),
(9, 'invito67', '', '', 'sector 67', 'mohali', 'punjab', '111111', '999999999965', 'test@example.com569', 1, '$2y$10$SInIIOgdti/IC6TSPRfei.uNpjOnw4JAle4K2UJHcqgLbiapxAJqq', NULL, NULL),
(10, 'invito68867', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999967869', 'test@example.com6786', 1, '$2y$10$6ruo65KD1T4m698ymywYfeCRayGU3NA2KpXkPp3thUTuBXBAcSP0C', NULL, NULL),
(11, 'invito67568', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999999567856999', 'test@example.com565', 1, '$2y$10$8KKykBjJXqPG4ds3KDc0E.7wSsWEAAWPJ0mA6m6RPkRVKs0ypVttm', NULL, NULL),
(12, 'invito766767', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999967679999', 'test@example.com6767', 1, '$2y$10$uWAHuY1lBbH7wFQCjTZzkOZy44pxNu0.9xECtSclcGCUwAvOEvmw6', NULL, NULL),
(13, 'invito65757', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999997575', 'test@example.com575', 1, '$2y$10$kUu5IZ43Uv7065dEXkWobeGIjd3sf7opNIDG6k0fxiT3BSKm87TkS', NULL, NULL),
(14, 'invito4567475', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999995675', 'test@example.com5675', 1, '$2y$10$bXO1bQEra1ZVHFbj7wL0veenhHWaGJlkppy9bMQWUsIpjuYn2cWte', NULL, NULL),
(15, 'invito685685', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999999967567599', 'test@example.com657568', 1, '$2y$10$4eGmxJtq9YHVKN24lH6Lf.SriPxUDa7EnPnDFzJainrTuiFffaMzG', NULL, NULL),
(16, 'invito7868', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999999678999', 'test@example.com678', 1, '$2y$10$yUrV1XHZkwiF2ToLPyDCWeaTQDx94DNQI5aO.dimPnL17PZNv7Weu', NULL, NULL),
(17, 'invito5678568', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999956856899999', 'test@example.com69867976', 1, '$2y$10$JOE0Ixrm0qKZyPUzG2QVLOEGV17uo4rDDcoJTepN5yjDkz0EZdHuq', NULL, NULL),
(18, 'invito4543564654', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999999999456546', 'test@example.com45654', 1, '$2y$10$0/8.noXWo3RIiocFPrzakONGpppGQOhKxG4gxBZBo8Ir7TSNoO4UG', NULL, NULL),
(19, 'invito534534563', '', '', 'sector 67', 'mohali', 'punjab', '111111', '999999999964363456', 'test@example.com43643634', 1, '$2y$10$S8KjsXCQyncRPY9z0Kr4oeTBI8XJ8mkXkAaw4VaMtw9/fHtNNInPG', NULL, NULL),
(20, 'invito75678679789', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999997897869', 'test@example.com795695', 1, '$2y$10$MiyAzhh6TnficPcDZodFIePv/BRWud.EPZw22D06T3.mCvc/bJNQC', NULL, NULL),
(21, 'invito5675685643', '', '', 'sector 67', 'mohali', 'punjab', '111111', '99999999934543539', 'test@example.com3453453', 1, '$2y$10$urbFFOtTnUCj9V4D6OS7kON9fn1rsn4HkUHkTdf1LRQTvKH30Cxlu', NULL, NULL),
(22, 'invito123', '', '', 'sector 67', 'mohali', 'punjab', '111111', '9999999999123', 'test@example.com123', 1, '$2y$10$.nA7Y5eYA9G0WyVFrTvSduXJHkpjAJS0sQG5V80rpvNGybuoFPAdS', NULL, NULL),
(23, 'invito51', 'rummy', 'dhiman', 'sector 67', 'mohali', 'punjab', '111111', '9999999951', 'test@example.com51', 1, '$2y$10$/bXN7yuzsggwCO8VEJ1wT.mfXB0JnlvOVJeS2ivZjD1h7vMbia6SO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_03_22_094851_create_frontend_users_table', 2),
(6, '2020_03_24_152214_create_plans_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `bio` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `role`, `bio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hadji kouceyla', 'test@example.com', NULL, '$2y$10$Tud8ryFI2brfdYfjxmESaOvDvHK4IHX.529bIeQl0w9ugD3FKd7Lq', NULL, 10, 'An obstacle that came between Him, and ourselves, and it. Don\'t let me hear the words:-- \'I speak severely to my right size for going through the doorway; \'and even if my head would go anywhere.', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
