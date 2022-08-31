-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2022 at 09:03 AM
-- Server version: 8.0.29
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lestime`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessoires`
--

DROP TABLE IF EXISTS `accessoires`;
CREATE TABLE IF NOT EXISTS `accessoires` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_magasin` int NOT NULL,
  `nameProd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` int NOT NULL,
  `prix_old` double NOT NULL,
  `prix_new` double NOT NULL,
  `Qte_stock` int NOT NULL,
  `Qte_vt` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessoires`
--

INSERT INTO `accessoires` (`id`, `id_magasin`, `nameProd`, `description`, `sex`, `mark_prod`, `prix_ht`, `promo`, `prix_old`, `prix_new`, `Qte_stock`, `Qte_vt`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Casquat', 'accessoire des Femme et Homme armani fel wa3r', 'Femme et Homme', 'Armani', '750', 1, 1500, 1225, 22, 3, 'DB/ogIFgPuvKB6Hjam1pReraZzQ63lgGd8pxL1BZAoS.jpg', '2022-08-30 10:36:00', '2022-08-30 11:25:15'),
(2, 1, 'Watch prim', 'accessoire des Femme et Homme', 'Femme et Homme', 'dokhokho', '1200', 1, 2300, 2100, 49, 1, 'DB/P5AQGBgdzOQC6P0kMnqvwR7AUB09nsVJGRxlIf7D.jpg', '2022-08-30 13:38:32', '2022-08-30 13:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbrachat` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `telephone`, `email`, `address`, `wilaya`, `nbrachat`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Mezzouar', '0698585799', 'ahmed@lestime.com', '33 rue center ville', 'Béchar', 2, '2022-08-28 20:40:07', NULL),
(2, 'Benzellat Halima', '0698585713', 'halima@gmail.com', 'center ville', 'Adrar', 1, '2022-08-30 07:51:55', NULL),
(3, 'Ahmed razzougi', '0542112233', 'amed@lestime.com', '33 rue center villle', 'Adrar', 1, '2022-08-30 08:15:16', NULL),
(4, 'Samira BEnz', '0798585731', 'samira@gmail.com', 'center ville', 'Adrar', 1, '2022-08-30 11:41:08', NULL),
(5, 'Noual zoughbi', '0498585731', 'NOUAL@GMAIL.COM', 'CENTER VILLE 33', 'Oum El Bouaghi', 1, '2022-08-30 14:57:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_magasin` int NOT NULL,
  `ClientName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Clientstate` double NOT NULL,
  `ClientTelephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientHomeAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ClientCommune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EtatCommand` int NOT NULL,
  `Typelaivr` int NOT NULL,
  `netapayer` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `id_magasin`, `ClientName`, `ClientEmail`, `Clientstate`, `ClientTelephone`, `ClientHomeAddress`, `ClientCommune`, `EtatCommand`, `Typelaivr`, `netapayer`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ahmed Mezzouar', 'ahmed@lestime.com', 8, '0698585799', '33 rue center ville', 'Adrar', 5, 1, 21000, '2022-08-29 20:40:06', '2022-08-28 20:40:06'),
(2, 1, 'Benzellat Djamel', 'djamel@gmail.com', 8, '0698585799', '33 rue center ville', 'ben amar', 5, 1, 3600, '2022-08-30 06:33:34', '2022-08-30 06:33:34'),
(3, 1, 'Benzellat Halima', 'halima@gmail.com', 1, '0698585713', 'center ville', 'dabdaba', 5, 1, 3900, '2022-08-30 07:51:55', '2022-08-30 07:51:55'),
(4, 1, 'Ahmed razzougi', 'amed@lestime.com', 1, '0542112233', '33 rue center villle', 'dabdaba', 5, 0, 8200, '2022-08-30 08:15:16', '2022-08-30 08:15:16'),
(5, 1, 'Samira BEnz', 'samira@gmail.com', 1, '0798585731', 'center ville', 'dabdaba', 5, 1, 2425, '2022-08-30 11:41:08', '2022-08-30 11:41:08'),
(6, 1, 'Noual zoughbi', 'NOUAL@GMAIL.COM', 4, '0498585731', 'CENTER VILLE 33', 'BADABODO', 5, 1, 8425, '2022-08-30 14:57:59', '2022-08-30 14:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lign_commandes`
--

DROP TABLE IF EXISTS `lign_commandes`;
CREATE TABLE IF NOT EXISTS `lign_commandes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cmd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vol_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qte_ht` int NOT NULL,
  `Total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lign_commandes`
--

INSERT INTO `lign_commandes` (`id`, `id_cmd`, `id_prod`, `vol_prod`, `qte_ht`, `Total`) VALUES
(1, '1', '1', '50', 9, 19800),
(2, '2', '1', '35', 2, 2400),
(3, '3', '1', '35', 1, 1200),
(4, '3', '1', '35', 1, 1500),
(5, '4', '1', '35', 2, 2400),
(6, '4', '1', '0', 2, 3000),
(7, '5', '1', '0', 1, 1225),
(8, '6', '1', '0', 1, 1225),
(9, '6', '1', '999', 1, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `lign_packs`
--

DROP TABLE IF EXISTS `lign_packs`;
CREATE TABLE IF NOT EXISTS `lign_packs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_pack` int NOT NULL,
  `id_prod` int NOT NULL,
  `type` int NOT NULL,
  `size` int NOT NULL,
  `Qte` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lign_packs`
--

INSERT INTO `lign_packs` (`id`, `id_pack`, `id_prod`, `type`, `size`, `Qte`) VALUES
(1, 1, 2, 1, 35, 2),
(2, 1, 1, 2, 0, 1),
(3, 1, 2, 2, 0, 1),
(5, 2, 1, 2, 999, 1);

-- --------------------------------------------------------

--
-- Table structure for table `magasins`
--

DROP TABLE IF EXISTS `magasins`;
CREATE TABLE IF NOT EXISTS `magasins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `lib_magasin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magasins`
--

INSERT INTO `magasins` (`id`, `lib_magasin`) VALUES
(1, 'Alger plage'),
(2, 'boussaada'),
(3, 'msila'),
(4, 'djelfa'),
(5, 'Daliy ibrahim');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2022_08_19_081222_create_produits_table', 1),
(17, '2022_08_21_170845_create_commandes_table', 1),
(18, '2022_08_21_170958_create_lign_commandes_table', 1),
(19, '2022_08_22_190201_create_volums_table', 1),
(20, '2022_08_24_195743_create_clients_table', 1),
(21, '2022_08_26_085238_create_tarfiv_laivs_table', 1),
(22, '2022_08_27_204801_create_magasins_table', 1),
(29, '2022_08_30_082509_create_accessoires_table', 2),
(37, '2022_08_30_134917_create_lign_packs_table', 4),
(39, '2022_08_30_134837_create_packs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `packs`
--

DROP TABLE IF EXISTS `packs`;
CREATE TABLE IF NOT EXISTS `packs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_magasin` int NOT NULL,
  `name_pack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_vt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packs`
--

INSERT INTO `packs` (`id`, `id_magasin`, `name_pack`, `prix_vt`, `prix_ht`, `description`, `image`) VALUES
(1, 1, 'pack del-rajel', '6000', '4025', 'pack contient dolorol 35ml et casquet et watchbilo', 'DB/pack.jpg'),
(2, 1, 'pack del-nessa', '18000', '0', 'fih ensprit 100ml et cascquet', 'DB/pack.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nameProd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_magasin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Volum35` int NOT NULL,
  `Volum50` int NOT NULL,
  `Volum100` int NOT NULL,
  `Sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageFileName1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Qte_stock_35` int NOT NULL,
  `Qte_vt_35` int NOT NULL,
  `prix_ht_35` double NOT NULL,
  `promo_35` double NOT NULL,
  `prix_old_35` double NOT NULL,
  `prix_new_35` double NOT NULL,
  `Qte_stock_50` int NOT NULL,
  `Qte_vt_50` int NOT NULL,
  `prix_ht_50` double NOT NULL,
  `promo_50` double NOT NULL,
  `prix_old_50` double NOT NULL,
  `prix_new_50` double NOT NULL,
  `Qte_stock_100` int NOT NULL,
  `Qte_vt_100` int NOT NULL,
  `prix_ht_100` double NOT NULL,
  `promo_100` double NOT NULL,
  `prix_old_100` double NOT NULL,
  `prix_new_100` double NOT NULL,
  `Descirption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nameProd`, `mark_prod`, `id_magasin`, `Volum35`, `Volum50`, `Volum100`, `Sex`, `ImageFileName1`, `Qte_stock_35`, `Qte_vt_35`, `prix_ht_35`, `promo_35`, `prix_old_35`, `prix_new_35`, `Qte_stock_50`, `Qte_vt_50`, `prix_ht_50`, `promo_50`, `prix_old_50`, `prix_new_50`, `Qte_stock_100`, `Qte_vt_100`, `prix_ht_100`, `promo_100`, `prix_old_100`, `prix_new_100`, `Descirption`, `created_at`, `updated_at`) VALUES
(1, 'Ensprit', 'Armani', '1', 1, 1, 1, 'homme & femme', 'DB/kZQXKLmyX86iNtN1lq7wfE1Pt2ilsiLDJIt5aa39.jpg', 4, 6, 750, 0, 1200, 1200, 1, 9, 1000, 0, 2200, 2200, 10, 0, 1500, 0, 2900, 2900, 'produit homme & femme l\'hiver ', '2022-08-28 20:36:23', '2022-08-28 20:36:23'),
(2, 'Dolorol', 'dolodlodlo', '1', 1, 0, 0, 'homme & femme', 'DB/CK4E1EFGy5UEQsgl2R6WvUScv79QcujYAhmpm5Z6.jpg', 48, 2, 500, 0, 700, 700, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'produit homme & femme Le printemps ', '2022-08-30 13:40:06', '2022-08-30 13:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `tarfiv_laivs`
--

DROP TABLE IF EXISTS `tarfiv_laivs`;
CREATE TABLE IF NOT EXISTS `tarfiv_laivs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `prix_desk` double NOT NULL,
  `prix_domicille` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tarfiv_laivs`
--

INSERT INTO `tarfiv_laivs` (`id`, `prix_desk`, `prix_domicille`) VALUES
(1, 1200, 2800),
(2, 1200, 2800),
(3, 1200, 2800),
(4, 1200, 2800),
(5, 1200, 2800),
(6, 1200, 2800),
(7, 1200, 2800),
(8, 1200, 2800),
(9, 1200, 2800),
(10, 1200, 2800),
(11, 1200, 2800),
(12, 1200, 2800),
(13, 1200, 2800),
(14, 1200, 2800),
(15, 1200, 2800),
(16, 1200, 2800),
(17, 1200, 2800),
(18, 1200, 2800),
(19, 1200, 2800),
(20, 1200, 2800),
(21, 1200, 2800),
(22, 1200, 2800),
(23, 1200, 2800),
(24, 1200, 2800),
(25, 1200, 2800),
(26, 1200, 2800),
(27, 1200, 2800),
(28, 1200, 2800),
(29, 1200, 2800),
(30, 1200, 2800),
(31, 1200, 2800),
(32, 1200, 2800),
(33, 1200, 2800),
(34, 1200, 2800),
(35, 1200, 2800),
(36, 1200, 2800),
(37, 1200, 2800),
(38, 1200, 2800),
(39, 1200, 2800),
(40, 1200, 2800),
(41, 1200, 2800),
(42, 1200, 2800),
(43, 1200, 2800),
(44, 1200, 2800),
(45, 1200, 2800),
(46, 1200, 2800),
(47, 1200, 2800),
(48, 1200, 2800),
(49, 1200, 2800),
(50, 1200, 2800),
(51, 1200, 2800),
(52, 1200, 2800),
(53, 1200, 2800),
(54, 1200, 2800),
(55, 1200, 2800),
(56, 1200, 2800),
(57, 1200, 2800),
(58, 1200, 2800);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_magasin` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_magasin`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ahmed mezzouar', 'ahmed@lestime.com', NULL, '$2y$10$Nu.0FEyYcje3ljl0sVuErewprcW5GOOnihuvadvGKc7BSRCtkEx8q', NULL, '2022-08-24 17:05:18', '2022-08-24 17:05:18'),
(2, 1, 'Benzellat Djamel', 'djamel@lestime.com', NULL, '$2y$10$Nu.0FEyYcje3ljl0sVuErewprcW5GOOnihuvadvGKc7BSRCtkEx8q', NULL, '2022-08-24 17:05:18', '2022-08-24 17:05:18'),
(3, 3, 'Benzellat Halima', 'halima@lestime.com', NULL, '$2y$10$Nu.0FEyYcje3ljl0sVuErewprcW5GOOnihuvadvGKc7BSRCtkEx8q', NULL, '2022-08-24 17:05:18', '2022-08-24 17:05:18'),
(4, 4, 'Mezzouar omar', 'omar@lestime.com', NULL, '$2y$10$Nu.0FEyYcje3ljl0sVuErewprcW5GOOnihuvadvGKc7BSRCtkEx8q', NULL, '2022-08-24 17:05:18', '2022-08-24 17:05:18'),
(5, 5, 'Bentifor khireddine', 'khireddine@lestime.com', NULL, '$2y$10$Nu.0FEyYcje3ljl0sVuErewprcW5GOOnihuvadvGKc7BSRCtkEx8q', NULL, '2022-08-24 17:05:18', '2022-08-24 17:05:18'),
(6, 6, 'Bentifor khaled', 'khaled@lestime.com', NULL, '$2y$10$Nu.0FEyYcje3ljl0sVuErewprcW5GOOnihuvadvGKc7BSRCtkEx8q', NULL, '2022-08-24 17:05:18', '2022-08-24 17:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `volums`
--

DROP TABLE IF EXISTS `volums`;
CREATE TABLE IF NOT EXISTS `volums` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_produit` int NOT NULL,
  `volum` int NOT NULL,
  `Qte_stock` int NOT NULL,
  `Qte_vt` int NOT NULL,
  `prix_ht` double NOT NULL,
  `promo` double NOT NULL,
  `prix_old` double NOT NULL,
  `prix_new` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
