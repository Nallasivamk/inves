-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2023 at 12:40 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investment`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int NOT NULL,
  `name` varchar(120) NOT NULL,
  `code` varchar(30) NOT NULL,
  `symbol` varchar(60) NOT NULL,
  `exchange_rate` double(10,2) NOT NULL,
  `status` enum('','Active','Inactive') NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `code`, `symbol`, `exchange_rate`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AMERA', 'USD', '$', 2.00, 'Active', 2, 2, '2022-11-10 00:06:27', '2022-11-10 00:09:30', NULL),
(2, 'India', 'INR', '$', 80.00, 'Active', 2, 0, '2022-12-12 03:30:34', '2022-12-12 03:30:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `default_currency_details`
--

CREATE TABLE `default_currency_details` (
  `id` int NOT NULL,
  `default_currency` int NOT NULL,
  `currency_format` int NOT NULL,
  `currency_no_format` int NOT NULL,
  `currency_decimal_limit` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta_details`
--

CREATE TABLE `meta_details` (
  `id` int NOT NULL,
  `keyword` longtext NOT NULL,
  `description` longtext NOT NULL,
  `created_by` bigint NOT NULL,
  `updated_by` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_details`
--

INSERT INTO `meta_details` (`id`, `keyword`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', '', 0, 0, '2022-11-01 13:51:07', '2022-11-01 13:51:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int NOT NULL,
  `module_name` varchar(220) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Manage Admin', 'Active', '2020-04-24 06:13:19', '0000-00-00 00:00:00', NULL),
(2, 'Dashboard', 'Active', '2020-04-24 06:16:29', '0000-00-00 00:00:00', NULL),
(3, 'Manage Site', 'Active', '2022-11-02 03:10:25', '0000-00-00 00:00:00', NULL),
(4, 'Manage Page', 'Active', '2022-11-02 03:10:38', '0000-00-00 00:00:00', NULL),
(5, 'Manage Meta Setting', 'Active', '2022-11-02 03:11:07', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int NOT NULL,
  `permission` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `permission`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '{\"module\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"Add\\\":\\\"Add\\\",\\\"Update\\\":\\\"Update\\\",\\\"Delete\\\":\\\"Delete\\\"},\\\"Role\\\":{\\\"View\\\":\\\"View\\\",\\\"Update\\\":\\\"Update\\\"}}}\",\"url\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"Add\\\":\\\"Add\\\",\\\"Update\\\":\\\"Update\\\",\\\"Delete\\\":\\\"Delete\\\"},\\\"Role\\\":{\\\"View\\\":\\\"View\\\",\\\"Update\\\":\\\"Update\\\"}}}\"}', '2022-10-20 12:42:36', '2020-04-28 04:23:37', NULL),
(2, '{\"module\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"Add\\\":\\\"Add\\\",\\\"Update\\\":\\\"Update\\\",\\\"Delete\\\":\\\"Delete\\\"},\\\"Role\\\":{\\\"View\\\":\\\"View\\\",\\\"Update\\\":\\\"Update\\\"}}}\",\"url\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"Add\\\":\\\"Add\\\",\\\"Update\\\":\\\"Update\\\",\\\"Delete\\\":\\\"Delete\\\"},\\\"Role\\\":{\\\"View\\\":\\\"View\\\",\\\"Update\\\":\\\"Update\\\"}}}\"}', '2020-04-28 04:25:35', '2020-04-28 04:25:35', NULL),
(3, '{\"module\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"View\\\":\\\"View\\\"},\\\"Role\\\":{\\\"Delete\\\":\\\"Delete\\\"}},\\\"Dashboard\\\":{\\\"Analytics\\\":{\\\"Analytics\\\":\\\"Analytics\\\"}}}\",\"url\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"View\\\":\\\"View\\\"},\\\"Role\\\":{\\\"Delete\\\":\\\"Delete\\\"}},\\\"Dashboard\\\":{\\\"Analytics\\\":{\\\"Analytics\\\":\\\"Analytics\\\"}}}\"}', '2020-04-29 10:39:11', '2020-04-29 05:09:11', NULL),
(4, '{\"module\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"View\\\":\\\"View\\\",\\\"Add\\\":\\\"Add\\\",\\\"Update\\\":\\\"Update\\\",\\\"Delete\\\":\\\"Delete\\\"},\\\"Role\\\":{\\\"View\\\":\\\"View\\\",\\\"Update\\\":\\\"Update\\\",\\\"Add\\\":\\\"Add\\\",\\\"Delete\\\":\\\"Delete\\\"}}}\",\"url\":\"{\\\"Manage_Admin\\\":{\\\"Admin_user\\\":{\\\"View\\\":\\\"View\\\",\\\"Add\\\":\\\"Add\\\",\\\"Update\\\":\\\"Update\\\",\\\"Delete\\\":\\\"Delete\\\"},\\\"Role\\\":{\\\"View\\\":\\\"View\\\",\\\"Update\\\":\\\"Update\\\",\\\"Add\\\":\\\"Add\\\",\\\"Delete\\\":\\\"Delete\\\"}}}\"}', '2022-11-01 04:07:18', '2022-11-01 04:07:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `platform_apps` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `warehouse_county` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `create_time` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_number` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `platform_sku` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `item_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pic_code` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `seller_sku` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `variation` varchar(120) DEFAULT NULL,
  `invoice_number` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tax_code` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch_number` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pay_method` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paid_price` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `unit_price` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `seller_discount_total` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_fee` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payable_total` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `commission_amount` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `wallet_credit` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `repayment` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `delivered_date` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_addr` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_addr2` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_addr3` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_addr4` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_addr5` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_phone` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_phone2` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_city` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_post_code` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_country` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_provider` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipment_type_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_provider_type` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tracking_code` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_provider_fm` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `refund_amount` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_by` bigint NOT NULL,
  `updated_by` bigint NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `platform_apps`, `warehouse_county`, `create_time`, `order_number`, `platform_sku`, `item_name`, `pic_code`, `seller_sku`, `variation`, `invoice_number`, `tax_code`, `branch_number`, `pay_method`, `paid_price`, `unit_price`, `seller_discount_total`, `shipping_fee`, `payable_total`, `commission_amount`, `wallet_credit`, `repayment`, `delivered_date`, `billing_name`, `billing_addr`, `billing_addr2`, `billing_addr3`, `billing_addr4`, `billing_addr5`, `billing_phone`, `billing_phone2`, `billing_city`, `billing_post_code`, `billing_country`, `shipping_provider`, `shipment_type_name`, `shipping_provider_type`, `tracking_code`, `shipping_provider_fm`, `status`, `refund_amount`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'LAZADA ', 'Malaysia ', '04 Oct 2022 20:32', '349349576669999', '1027968376_MY-3951838661', 'Banjara’s Soft and Young PREMIUM ROSE WATER 60ML /120ml', '', 'BANJARAS ROSE WATER-120ML', 'Volume (ml):120', 'LAALEE349349576669999', '', 'KUL001', 'COD', '9.90', '9.90', '0', '1.63', '', '', '', '', '10 Oct 2022 18:41', 'Jomon Joy', '( centennial insight) sitiwan lumut perak malaysia 32000', '', 'Perak', 'Sitiawan', '32000', '600166135993', '', 'Sitiawan', '32000', 'Malaysia', 'NinjaVanMY', 'dropshipping', 'STANDARD', 'NLMYA23907964', 'Drop-off: LEX MY', 'delivered', '', 0, 0, '2023-03-25 12:23:52', '2023-03-25 12:23:52', NULL),
(2, 'SHOPEE ', 'Singapore ', '04 Oct 2022 20:32', '349349576669999', '1027968376_MY-3951838661', 'Banjara’s Soft and Young PREMIUM ROSE WATER 60ML /120ml', '', 'BANJARAS ROSE WATER-120ML', 'Volume (ml):120', 'LAALEE349349576669999', '', 'SIN001', 'COD', '9.90', '9.90', '0', '1.63', '', '', '', '', '10 Oct 2022 18:41', 'Jomon Joy', '( centennial insight) sitiwan lumut perak malaysia 32000', '', 'Perak', 'Sitiawan', '32000', '600166135993', '', 'Sitiawan', '32000', 'Malaysia', 'NinjaVanMY', 'dropshipping', 'STANDARD', 'NLMYA23907964', 'Drop-off: LEX MY', 'delivered', '', 0, 0, '2023-03-25 12:23:52', '2023-03-25 12:23:52', NULL),
(3, 'AMAZON ', 'India ', '04 Oct 2022 20:32', '349349576669999', '1027968376_MY-3951838661', 'Banjara’s Soft and Young PREMIUM ROSE WATER 60ML /120ml', '', 'BANJARAS ROSE WATER-120ML', 'Volume (ml):120', 'LAALEE349349576669999', '', 'IND001', 'COD', '9.90', '9.90', '0', '1.64', '', '', '', '', '10 Oct 2022 18:41', 'Jomon Joy', '( centennial insight) sitiwan lumut perak malaysia 32000', '', 'Perak', 'Sitiawan', '32000', '600166135993', '', 'Sitiawan', '32000', 'Malaysia', 'NinjaVanMY', 'dropshipping', 'STANDARD', 'NLMYA23907964', 'Drop-off: LEX MY', 'delivered', '', 0, 0, '2023-03-25 12:23:52', '2023-03-25 12:23:52', NULL),
(4, 'LAZADA ', 'Malaysia ', '04 Oct 2022 20:32', '349349576669998', '1027968376_MY-3951838661', 'Banjara’s Soft and Young PREMIUM ROSE WATER 60ML /120ml', '', 'BANJARAS ROSE WATER-120ML', 'Volume (ml):120', 'LAALEE349349576669999', '', 'KUL001', 'COD', '9.90', '9.90', '0', '1.63', '', '', '', '', '10 Oct 2022 18:41', 'Jomon Joy', '( centennial insight) sitiwan lumut perak malaysia 32000', '', 'Perak', 'Sitiawan', '32000', '600166135993', '', 'Sitiawan', '32000', 'Malaysia', 'NinjaVanMY', 'dropshipping', 'STANDARD', 'NLMYA23907964', 'Drop-off: LEX MY', 'delivered', '', 0, 0, '2023-03-25 12:45:21', '2023-03-25 12:45:21', NULL),
(5, 'SHOPEE ', 'Singapore ', '04 Oct 2022 20:32', '349349576669998', '1027968376_MY-3951838661', 'Banjara’s Soft and Young PREMIUM ROSE WATER 60ML /120ml', '', 'BANJARAS ROSE WATER-120ML', 'Volume (ml):120', 'LAALEE349349576669999', '', 'SIN001', 'COD', '9.90', '9.90', '0', '1.63', '', '', '', '', '10 Oct 2022 18:41', 'Jomon Joy', '( centennial insight) sitiwan lumut perak malaysia 32000', '', 'Perak', 'Sitiawan', '32000', '600166135993', '', 'Sitiawan', '32000', 'Malaysia', 'NinjaVanMY', 'dropshipping', 'STANDARD', 'NLMYA23907964', 'Drop-off: LEX MY', 'delivered', '', 0, 0, '2023-03-25 12:45:21', '2023-03-25 12:45:21', NULL),
(6, 'AMAZON ', 'India ', '04 Oct 2022 20:32', '349349576669997', '1027968376_MY-3951838661', 'Banjara’s Soft and Young PREMIUM ROSE WATER 60ML /120ml', '', 'BANJARAS ROSE WATER-120ML', 'Volume (ml):120', 'LAALEE349349576669999', '', 'IND001', 'COD', '9.90', '9.90', '0', '1.64', '', '', '', '', '10 Oct 2022 18:41', 'Jomon Joy', '( centennial insight) sitiwan lumut perak malaysia 32000', '', 'Perak', 'Sitiawan', '32000', '600166135993', '', 'Sitiawan', '32000', 'Malaysia', 'NinjaVanMY', 'dropshipping', 'STANDARD', 'NLMYA23907964', 'Drop-off: LEX MY', 'delivered', '', 0, 0, '2023-03-25 12:45:21', '2023-03-25 12:45:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `role` varchar(255) NOT NULL,
  `role_desc` varchar(320) NOT NULL,
  `permission_id` bigint NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_by` bigint NOT NULL,
  `updated_by` bigint NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `role_desc`, `permission_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'demo', 'sample role', 4, 'Active', 2, 0, '2022-11-01 04:07:18', '2022-11-01 04:07:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int NOT NULL,
  `site_name` varchar(120) NOT NULL,
  `google_code` longtext NOT NULL,
  `logo` varchar(120) NOT NULL,
  `favicon` varchar(120) NOT NULL,
  `default_language` varchar(60) NOT NULL,
  `maintenance_mode` enum('Yes','No') NOT NULL,
  `address` varchar(120) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipcode` int NOT NULL,
  `email` varchar(120) NOT NULL,
  `contact_no` varchar(120) NOT NULL,
  `created_by` bigint NOT NULL,
  `updated_by` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `site_name`, `google_code`, `logo`, `favicon`, `default_language`, `maintenance_mode`, `address`, `state`, `city`, `zipcode`, `email`, `contact_no`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Invesment App', 'test', 'icon-2.png', 'icon-2.png', '', 'No', '5171 W Campbell Ave', 'Tamilnadu', 'chennai', 601203, 'investment@gmail.com', '9094218014', 0, 2, '2022-11-01 13:52:31', '2022-12-12 09:50:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int NOT NULL,
  `facebook_link` varchar(240) NOT NULL,
  `twitter_link` varchar(240) NOT NULL,
  `linkedin_link` varchar(240) NOT NULL,
  `pintrest_link` varchar(240) NOT NULL,
  `play_store` varchar(240) NOT NULL,
  `app_store` varchar(240) NOT NULL,
  `created_by` bigint NOT NULL,
  `updated_by` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook_link`, `twitter_link`, `linkedin_link`, `pintrest_link`, `play_store`, `app_store`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', '', '', '', '', '', 0, 0, '2022-11-01 13:48:48', '2022-11-01 13:48:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `static_page`
--

CREATE TABLE `static_page` (
  `id` int NOT NULL,
  `language` varchar(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `url_name` varchar(120) NOT NULL,
  `content` longtext NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `quick_link` enum('Yes','No') NOT NULL,
  `created_by` bigint NOT NULL,
  `updated_by` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `static_page`
--

INSERT INTO `static_page` (`id`, `language`, `name`, `url_name`, `content`, `status`, `quick_link`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'About Us', 'about_us', 'About Us', 'Active', 'Yes', 2, 2, '2022-11-01 13:18:45', '2022-12-17 09:49:54', NULL),
(2, '', 'Affiliate', 'affiliate', 'Affiliate', 'Active', 'Yes', 2, 0, '2022-12-17 09:50:21', '2022-12-17 09:50:21', NULL),
(3, '', 'Career', 'career', 'Career', 'Active', 'Yes', 2, 0, '2022-12-17 09:50:54', '2022-12-17 09:50:54', NULL),
(4, '', 'Cookie Policy', 'cookie_policy', 'Cookie Policy', 'Active', 'Yes', 2, 0, '2022-12-17 09:51:52', '2022-12-17 09:51:52', NULL),
(6, '', 'Returns & Exchanges', 'returns_&_exchanges', 'Returns & Exchanges', 'Active', 'Yes', 2, 0, '2022-12-17 09:52:15', '2022-12-17 09:52:15', NULL),
(8, '', 'Terms and Conditions', 'terms_and_conditions', 'Terms and Conditions', 'Active', 'Yes', 2, 0, '2022-12-17 10:23:02', '2022-12-17 10:23:02', NULL),
(9, '', 'Privacy Policy', 'privacy_policy', 'Privacy Policy', 'Active', 'Yes', 2, 0, '2022-12-17 10:23:14', '2022-12-17 10:23:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submodules`
--

CREATE TABLE `submodules` (
  `id` int NOT NULL,
  `module_id` bigint NOT NULL,
  `submodule_name` varchar(220) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submodules`
--

INSERT INTO `submodules` (`id`, `module_id`, `submodule_name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin user - View', 'Active', '2020-04-24 06:21:02', '0000-00-00 00:00:00', NULL),
(2, 1, 'Admin user - Add / Update', 'Active', '2020-04-24 06:21:27', '0000-00-00 00:00:00', NULL),
(3, 1, 'Admin user - Delete', 'Active', '2020-04-24 06:21:51', '0000-00-00 00:00:00', NULL),
(4, 1, 'Role - View', 'Active', '2020-04-24 07:34:52', '0000-00-00 00:00:00', NULL),
(5, 1, 'Role - Add / Update', 'Active', '2020-04-24 07:34:58', '0000-00-00 00:00:00', NULL),
(6, 1, 'Role - Delete', 'Active', '2020-04-24 07:35:03', '0000-00-00 00:00:00', NULL),
(7, 2, 'Analytics - View', 'Active', '2020-04-29 10:47:56', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_type` enum('Admin','Subadmin','User','Customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_type` enum('Admin','Web','Android','Ios') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `name`, `email`, `phone`, `email_verified_at`, `password`, `role_id`, `remember_token`, `role_type`, `status`, `country`, `latitude`, `longitude`, `register_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'demo test', 'test', 'demo test test', 'demo@gmail.com', '', NULL, '', 11, NULL, 'Subadmin', 'Active', '', '', '', 'Admin', '2022-11-01 04:07:44', '2022-11-10 00:43:07', NULL),
(2, 'super', 'admin', 'super admin', 'admin@trivizion.com', '', NULL, '$2y$10$HS5Jp.RCAEW7i7Vnoce6cOAz8GzWmMuqbKBPpee.VVcJNqTxqaeFe', 0, NULL, 'Admin', 'Active', '', '', '', 'Web', '2020-03-27 21:17:14', '2020-03-27 21:17:14', NULL),
(4, 'test', '2', 'test 2', 'selva@gmail.com', '', NULL, '$2y$10$pK5FcYuCg.uWBgPdnOMSF.1J/ZzY0OBv3n8OzrMAANyNU6sZrRKSK', 0, NULL, 'Subadmin', 'Active', '', '', '', 'Admin', '2020-04-28 11:28:19', '2020-04-29 03:39:44', '2022-11-01 06:37:04'),
(6, 'Sample', 'Customer', 'Sample Customer', 'sample@gmail.com', '9094218014', NULL, '$2y$10$IDvyBdutzYWYSEHKFA7.xeiTU.aEHJGskW/h85SvIayT/1DgCvjzG', 0, NULL, 'Customer', 'Active', '', '', '', 'Admin', '2022-11-10 00:45:04', '2022-11-10 00:45:04', NULL),
(7, 'selva', 'kumar', 'selva kumar', 'test@gmai.com', '9094218014', NULL, '$2y$10$aRSkVc.e0SfwCK3qAEIoQeAq1a4CH.HdyWrVP2cpJ453pIAKzvu4G', 0, NULL, 'Customer', 'Active', '', '', '', 'Web', '2023-03-30 03:26:37', '2023-03-30 03:26:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `default_currency_details`
--
ALTER TABLE `default_currency_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_details`
--
ALTER TABLE `meta_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_page`
--
ALTER TABLE `static_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submodules`
--
ALTER TABLE `submodules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `default_currency_details`
--
ALTER TABLE `default_currency_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_details`
--
ALTER TABLE `meta_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `static_page`
--
ALTER TABLE `static_page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `submodules`
--
ALTER TABLE `submodules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
