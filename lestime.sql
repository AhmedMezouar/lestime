-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2022 at 09:28 PM
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
-- Table structure for table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_magasin` int NOT NULL,
  `ClientName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `qte_ht` int NOT NULL,
  `Total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(77, '2014_10_12_000000_create_users_table', 1),
(78, '2014_10_12_100000_create_password_resets_table', 1),
(79, '2019_08_19_000000_create_failed_jobs_table', 1),
(80, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(81, '2022_08_19_081222_create_produits_table', 1),
(82, '2022_08_21_170845_create_commandes_table', 1),
(83, '2022_08_21_170958_create_lign_commandes_table', 1),
(84, '2022_08_22_190201_create_volums_table', 1);

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
  `Mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_magasin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Volum35` int NOT NULL,
  `Volum50` int NOT NULL,
  `Volum100` int NOT NULL,
  `Caractiristique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageFileName1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageFileName2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageFileName3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageFileName4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageFileName5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nameProd`, `Mark`, `id_magasin`, `Volum35`, `Volum50`, `Volum100`, `Caractiristique`, `ImageFileName1`, `ImageFileName2`, `ImageFileName3`, `ImageFileName4`, `ImageFileName5`, `Qte_stock_35`, `Qte_vt_35`, `prix_ht_35`, `promo_35`, `prix_old_35`, `prix_new_35`, `Qte_stock_50`, `Qte_vt_50`, `prix_ht_50`, `promo_50`, `prix_old_50`, `prix_new_50`, `Qte_stock_100`, `Qte_vt_100`, `prix_ht_100`, `promo_100`, `prix_old_100`, `prix_new_100`, `Descirption`, `created_at`, `updated_at`) VALUES
(1, 'Esprit Ruffle Shirt', 'Armani', '1', 1, 1, 1, 'Esprit Ruffle Shirt Esprit Fashion Ruffle Shirt hiver Esprit Ruffle Shirt reareeareafdsqfdsf', 'product-01.jpg', 'product-detail-01.jpg', 'product-detail-02.jpg', 'product-detail-03.jpg', '', 30, 0, 700, 1, 1500, 1200, 40, 0, 1200, 1, 2200, 1800, 10, 0, 2200, 1, 3500, 2700, 'Esprit Ruffle Shirt Esprit Fashion hiver Ruffle Shirt Esprit Ruffle Shirt reareeareafdsqfdsf', '2022-08-22 19:19:08', '2022-08-22 19:19:08'),
(2, 'Hola hola', 'Gucci', '1', 1, 0, 0, 'Hola reareeareafdsqfdsf Denim', 'product-10.jpg', 'item-cart-02.jpg', 'product-14.jpg', 'product-10.jpg', '', 50, 0, 900, 1, 1900, 1350, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Hoal été hola hola Denim reareeareafdsqfdsf', NULL, NULL),
(3, 'Paula pola', 'Gucci', '12', 1, 1, 0, 'Hola reareeareafdsqfdsf Denim', 'product-10.jpg', 'product-10.jpg', 'product-10.jpg', 'product-10.jpg', '', 40, 0, 800, 0, 1200, 1200, 35, 5, 1200, 0, 1600, 1600, 0, 0, 0, 0, 0, 0, 'Hoal hola hola hiver reareeareafdsqfdsf Denim', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
