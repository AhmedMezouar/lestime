-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2022 at 08:34 PM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
