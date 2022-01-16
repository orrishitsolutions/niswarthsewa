-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niswarthsewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ns_category`
--

CREATE TABLE `ns_category` (
  `id` bigint(20) NOT NULL,
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tabs_text` varchar(255) NOT NULL,
  `is_top_header` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 => No, 1 => Yes',
  `is_top_navigation` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 => No, 1 => Yes',
  `is_banner_part` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 => No, 1 => Yes',
  `category_image` varchar(255) NOT NULL,
  `top_header_image` varchar(255) NOT NULL,
  `top_navigation_image` varchar(255) NOT NULL,
  `banner_part_image` varchar(255) NOT NULL,
  `tabs_image` varchar(255) NOT NULL,
  `top_header_order` tinyint(4) NOT NULL DEFAULT 0,
  `top_navigation_order` tinyint(4) NOT NULL DEFAULT 0,
  `banner_part_order` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 => Disabled, 1 => Enabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_category`
--

INSERT INTO `ns_category` (`id`, `parent_id`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `slug`, `content`, `tabs_text`, `is_top_header`, `is_top_navigation`, `is_banner_part`, `category_image`, `top_header_image`, `top_navigation_image`, `banner_part_image`, `tabs_image`, `top_header_order`, `top_navigation_order`, `banner_part_order`, `created_at`, `status`) VALUES
(1, 0, 'Cloths', 'Cloths', 'Cloths', 'Cloths', 'cloths', '', '', 1, 1, 1, '', 'assets/frontend/upload/images/40img1.jpg', 'assets/frontend/upload/images/img51a.png', '', '', 1, 1, 0, '2021-12-16 14:16:27', 1),
(2, 0, 'Medicane', 'Medicane', 'Medicane', 'Medicane', 'medicane', '', '', 1, 1, 1, '', 'assets/frontend/upload/images/40img7.jpg', 'assets/frontend/upload/images/img41a.png', '', '', 2, 6, 0, '2021-12-16 14:16:27', 1),
(3, 0, 'Educational Materials', 'Educational Materials', 'Educational Materials', 'Educational Materials', 'educational-materials', '', '', 1, 1, 1, '', 'assets/frontend/upload/images/40img2.jpg', 'assets/frontend/upload/images/img21a.png', '', '', 3, 4, 0, '2021-12-16 14:28:33', 1),
(4, 0, 'Grocery Products', 'Grocery Products', 'Grocery Products', 'Grocery Products', 'grocery-products', '', '', 1, 1, 1, '', 'assets/frontend/upload/images/grocry.png', 'assets/frontend/upload/images/img31a.png', '', '', 4, 5, 0, '2021-12-16 14:30:08', 1),
(5, 0, 'Home Appliances', 'Home Appliances', 'Home Appliances', 'Home Appliances', 'home-appliances', '', '', 1, 1, 1, '', 'assets/frontend/upload/images/40img4.jpg', 'assets/frontend/upload/images/img11a.png', '', '', 5, 3, 0, '2021-12-16 14:33:03', 1),
(6, 0, 'Kids Products', 'Kids Products', 'Kids Products', 'Kids Products', 'kids-products', '', '', 1, 1, 1, '', 'assets/frontend/upload/images/toys.png', 'assets/frontend/upload/images/img61a.png', '', '', 6, 2, 0, '2021-12-16 14:33:03', 1),
(7, 1, 'Men Clothes', 'Men Clothes', 'Men Clothes', 'Men Clothes', 'men-clothes', '', '', 0, 1, 0, 'assets/frontend/upload/images/cloth1.png', '', '', '', '', 0, 0, 0, '2021-12-17 11:11:45', 1),
(8, 1, 'Women Clothes', 'Women Clothes', 'Women Clothes', 'Women Clothes', 'women-clothes', '', '', 0, 1, 0, 'assets/frontend/upload/images/cloth1a.png', '', '', '', '', 0, 0, 0, '2021-12-17 11:14:01', 1),
(9, 1, 'Kids Clothes', 'Kids Clothes', 'Kids Clothes', 'Kids Clothes', 'kids-clothes', '', '', 0, 1, 0, 'assets/frontend/upload/images/cloth1.png', '', '', '', '', 0, 0, 0, '2021-12-21 11:12:09', 1),
(10, 7, 'T-Shirt', 'T-Shirt', 'T-Shirt', 'T-Shirt', 't-shirt', '', '', 0, 1, 0, 'assets/frontend/upload/images/cloth1.png', '', '', '', '', 1, 0, 0, '2021-12-24 05:48:11', 1),
(11, 0, 'Medicine Donation', '', '', '', 'medicine-donation', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/medicine.png', '', 0, 0, 0, '2021-12-24 12:21:37', 1),
(12, 0, 'Books Donation', '', '', '', 'books-donation', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/blood-donation.png', '', 0, 0, 0, '2021-12-24 12:23:38', 1),
(13, 0, 'Home Products', '', '', '', 'home-products', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/home-products.png', '', 0, 0, 0, '2021-12-24 12:25:03', 1),
(14, 0, 'Cloth Donation', '', '', '', 'cloth-donation', '', '', 0, 0, 0, 'assets/frontend/upload/images/home-living.png', '', '', 'assets/frontend/upload/images/clothes-donation.png', '', 0, 0, 0, '2021-12-24 12:26:55', 1),
(15, 0, 'Education Materials', 'Education Materials', 'Education Materials', 'Education Materials', 'education-materials', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/educational-materials.png', '', 0, 0, 0, '2021-12-24 12:28:34', 1),
(16, 0, 'Contribute Material', '', '', '', 'contribute-material', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/contribution.png', '', 0, 0, 0, '2021-12-24 12:30:01', 1),
(17, 0, 'Food Donation', '', '', '', 'food-donation', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/food-donation.png', '', 0, 0, 0, '2021-12-24 12:31:40', 1),
(18, 0, 'Toy Donation', '', '', '', 'toy-donation', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/toy-donation.png', '', 0, 0, 0, '2021-12-24 12:33:21', 1),
(19, 0, 'Medical Equipment', '', '', '', 'medical-equipment', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/medical-equipment.png', '', 0, 0, 0, '2021-12-24 12:45:29', 1),
(20, 0, 'Blood Donation', '', '', '', 'blood-donation', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/blood-donation.png', '', 0, 0, 0, '2021-12-24 12:46:15', 1),
(21, 0, 'Livelihood', '', '', '', 'livelihood', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/livelihood.png', '', 0, 0, 0, '2021-12-24 12:47:04', 1),
(22, 0, 'Women Empowerment', '', '', '', 'women-empowerment', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/women-rights.png', '', 0, 0, 0, '2021-12-24 12:47:43', 1),
(23, 0, 'Free Education', '', '', '', 'free-education', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/freeeducation.png', '', 0, 0, 0, '2021-12-24 12:48:26', 1),
(24, 0, 'Human Organs Dotation', '', '', '', 'human-organs-dotation', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/human-organs.png', '', 0, 0, 0, '2021-12-24 12:49:02', 1),
(25, 0, 'Disaster Response', '', '', '', 'disaster-response', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/disaster.png', '', 0, 0, 0, '2021-12-24 12:49:37', 1),
(26, 0, 'Menstrual Health', '', '', '', 'menstrual-health', '', '', 0, 0, 0, '', '', '', 'assets/frontend/upload/images/menstrual.png', '', 0, 0, 0, '2021-12-24 12:50:10', 1),
(27, 0, 'Ayurveda', 'ayurveda', 'ayurveda', 'ayurveda', 'ayurveda', '', '', 0, 0, 0, 'assets/frontend/upload/images/ayurveda (1).png', '', '', '', '', 0, 0, 0, '2021-12-27 17:59:26', 1),
(28, 0, 'Mom & Baby', 'Mom & Baby', 'Mom & Baby', 'Mom & Baby', 'mom-baby', '', '', 0, 0, 0, 'assets/frontend/upload/images/mom-baby-meds.png', '', '', '', '', 0, 0, 0, '2021-12-27 18:00:21', 1),
(29, 0, 'Diabetes', '', '', '', 'diabetes', '', '', 0, 0, 0, 'assets/frontend/upload/images/diabetes.png', '', '', '', '', 0, 0, 0, '2021-12-27 18:02:42', 1),
(30, 0, 'Surgicals', '', '', '', 'surgicals', '', '', 0, 0, 0, 'assets/frontend/upload/images/surgicals.png', '', '', '', '', 0, 0, 0, '2021-12-27 18:03:16', 1),
(31, 0, 'Books', 'Books', 'Books', 'Books', 'books', '', 'Education is right for every child kindly donate for us', 0, 0, 0, '', '', '', '', 'assets/frontend/upload/images/produc1.png', 0, 0, 0, '2021-12-28 14:10:25', 1),
(32, 0, 'Notebooks', 'Notebooks', 'Notebooks', 'Notebooks', 'notebooks', '', 'Education is right for every child kindly donate for us', 0, 0, 0, '', '', '', '', 'assets/frontend/upload/images/notebookbanner.png', 0, 0, 0, '2021-12-28 14:11:03', 1),
(33, 0, 'Stationery Kit', 'Stationery Kit', 'Stationery Kit', 'Stationery Kit', 'stationery-kit', '', 'Education is right for every child kindly donate for us', 0, 0, 0, '', '', '', '', 'assets/frontend/upload/images/bannerstastinory1.png', 0, 0, 0, '2021-12-28 14:11:41', 1),
(34, 0, 'School Bag', 'School Bag', 'School Bag', 'School Bag', 'school-bag', '', 'Education is right for every child kindly donate for us', 0, 0, 0, '', '', '', '', 'assets/frontend/upload/images/bagbanners123.png', 0, 0, 0, '2021-12-28 14:12:09', 1),
(35, 31, 'Book1', '', '', '', 'book1', '', '', 0, 0, 0, 'assets/frontend/upload/images/boxpart1.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:49:01', 1),
(36, 31, 'Book2', '', '', '', 'book2', '', '', 0, 0, 0, 'assets/frontend/upload/images/book1.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:51:54', 1),
(37, 31, 'Book3', '', '', '', 'book3', '', '', 0, 0, 0, 'assets/frontend/upload/images/book3.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:52:50', 1),
(38, 31, 'Book4', '', '', '', 'book4', '', '', 0, 0, 0, 'assets/frontend/upload/images/book2.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:53:37', 1),
(39, 31, 'Book5', '', '', '', 'book5', '', '', 0, 0, 0, 'assets/frontend/upload/images/boxpart5.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:54:34', 1),
(40, 31, 'Book6', '', '', '', 'book6', '', '', 0, 0, 0, 'assets/frontend/upload/images/book3.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:55:38', 1),
(41, 32, 'Notebook1', '', '', '', 'notebook1', '', '', 0, 0, 0, 'assets/frontend/upload/images/notebook1.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:57:06', 1),
(42, 33, 'Stationary1', '', '', '', 'stationary1', '', '', 0, 0, 0, 'assets/frontend/upload/images/stationary1.png', '', '', '', '', 0, 0, 0, '2021-12-28 16:59:54', 1),
(43, 34, 'School Bag1', '', '', '', 'school-bag1', '', '', 0, 0, 0, 'assets/frontend/upload/images/bag1.png', '', '', '', '', 0, 0, 0, '2021-12-28 17:00:56', 1),
(44, 0, 'Packed Food', '', '', '', 'packed-food', '', '', 0, 0, 0, 'assets/frontend/upload/images/packfood.png', '', '', '', '', 0, 0, 0, '2021-12-29 11:27:14', 1),
(45, 0, 'Raw diet', '', '', '', 'raw-diet', '', '', 0, 0, 0, 'assets/frontend/upload/images/rows.png', '', '', '', '', 0, 0, 0, '2021-12-29 11:28:02', 1),
(46, 0, 'Fruits', '', '', '', 'fruits', '', '', 0, 0, 0, 'assets/frontend/upload/images/fruit.png', '', '', '', '', 0, 0, 0, '2021-12-29 11:33:08', 1),
(47, 0, 'Vegitables', '', '', '', 'vegitables', '', '', 0, 0, 0, 'assets/frontend/upload/images/vegitable.png', '', '', '', '', 0, 0, 0, '2021-12-29 11:34:52', 1),
(48, 0, 'Grocery', '', '', '', 'grocery', '', '', 0, 0, 0, 'assets/frontend/upload/images/grocrys.png', '', '', '', '', 0, 0, 0, '2021-12-29 11:35:44', 1),
(49, 0, 'Snacks', '', '', '', 'snacks', '', '', 0, 0, 0, 'assets/frontend/upload/images/snacks.png', '', '', '', '', 0, 0, 0, '2021-12-29 11:36:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ns_category_pages`
--

CREATE TABLE `ns_category_pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 => Enabled, 2 => Disabled',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_category_pages`
--

INSERT INTO `ns_category_pages` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Impect', 1, '2022-01-09 07:08:34'),
(2, 'Help in emergencies', 1, '2022-01-09 07:10:52'),
(3, 'Community services', 1, '2022-01-09 07:10:52'),
(4, 'Contribute Material', 1, '2022-01-09 07:10:52'),
(5, 'Get Involved', 1, '2022-01-09 07:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `ns_pages`
--

CREATE TABLE `ns_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `menu_icon_image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `side_image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_home` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'No => 0 , Yes => 1',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Enable => 1 , Disable => 0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_pages`
--

INSERT INTO `ns_pages` (`id`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `slug`, `menu_icon_image`, `banner_image`, `side_image`, `content`, `is_home`, `status`, `created_at`) VALUES
(1, 'Niswarth Sewa', 'Niswarth Sewa', 'Niswarth Sewa', 'Niswarth Sewa', '', '', '', '', '<section class=\"mensections\"><div class=\"container-fluid\"><div class=\"banner-bottom\"><section class=\"mensections\"><div class=\"container-fluid\"><div class=\"banner-bottom\">\r\n{{block block_id=\"carousel_slider\"}}\r\n</div></div></section></div></div></section>\r\n<section class=\"col-productsd35\"><div class=\"container-fluid \"><div class=\"row \"><div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 col-text-top-clothe \"><h4 class=\"headings45\">Donated Cloths</h4><p class=\"pros1pre \">Donate Clothes for Poor People. </p></div><div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 col-xs-9 \"><div class=\"our-clothe\"></div></div></div><div class=\"clothe-down \">\r\n{{block block_id=\"donated_cloths\"}}\r\n</div></div></section>\r\n<section class=\"col-productsd35\"><div class=\"container-fluid \"><div class=\"row \"><div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 col-text-top-clothe \"><h4 class=\"headings45\">Donated Medicine</h4><p class=\"pros1pre \">Donate Clothes for Needy People.</p></div><div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 col-xs-9 \"><div class=\"our-clothe\"></div></div></div><div class=\"clothe-down \">\r\n{{block block_id=\"donated_medicine\"}}\r\n</div></div></section>\r\n<section class=\"cordelelo23\"><div class=\"wrapper\"><div class=\"container-fluid\"><div class=\"row \" style=\"width:1000px;margin:auto;position:relative;\"><div class=\"col-lg-4 col-md-4 col-sm4 col-xs-4 text-trade text-center\"><h4 class=\"headings45\">Education Materials</h4></div><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \"><div class=\"our-trade\"></div></div></div>\r\n{{block block_id=\"home_tabs\"}}\r\n</div></div></section>\r\n<section class=\"background394\"><div class=\"wrapper-quot \"><div class=\"container-fluid \"><div class=\"row \"><div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 \"><img class=\"img-responsive \" src=\"{{store url=\"assets/frontend/img/backgroundpart12.png\"}}\"><div class=\"cat-head \"><h4 class=\"headings45\">Clothes Donate For Needy People</h4></div></div><div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 \"><img src=\"{{store url=\"assets/frontend/img/backgroundpart21.png\"}}\"><div class=\"cat-head \"><h4 class=\"headings45\" style=\" color: #FFF;\">Educatyional Material Donate For Needy Kids</h4></div></div><div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 \"><img src=\"{{store url=\"assets/frontend/img/backgroundpart31.png\"}}\"><div class=\"cat-head \"><h4 class=\"headings45\" style=\" color: #FFF;\">Home Appliances Donate For Needy People</h4></div></div></div></div></div></section>\r\n<section class=\"cordelelo\"><div class=\"wrapper\"><div class=\"container-fluid\"><div class=\"row\"><div class=\"col-lg-4 col-md-4 col-sm4 col-xs-4 text-trade\"><h4 class=\"headings45\">Food Products</h4><p class=\"pros1pre \">Donate food for Hungry People </p></div><div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8 \"><div class=\"our-trade\"></div></div></div><div class=\"row \"><div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4 \"><div class=\"product\"><img class=\"img-responsive \" src=\"{{store url=\"assets/frontend/img/backgrounds121.png\"}}\"><div class=\"common-view \"><h4 class=\"headings45\">Donate food for Hungry People</h4><button type=\"button \" class=\"btn clothe-btn \">view more</button></div></div></div>\r\n{{block block_id=\"food_products\"}}\r\n</div></div></div></section>\r\n<section class=\"bannsersmaolls\"><div class=\"wrapper-quot \"><div class=\"container-fluid \"><div class=\"row\"><div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 \"><div class=\"row \"><div class=\"col-lg-6 col-md-6 col-sm4 col-xs-4 text-trade\"><h4 class=\"headings45\">Weekly Deals</h4><p class=\"pros1pre \">A Wide range of selected Goods with fast</p></div><div class=\"col-lg-6 col-md-6 col-sm-8 col-xs-8 \"><div class=\"our-trade\"></div></div></div><div class=\"row\" style=\" margin: 0px;\"><div class=\"col-lg-5 col-md-5 col-sm-6 col-xs-12 \" style=\"background-image:url({{store url=\"assets/frontend/img/backgroundformtop.png\"}});height: 200px; background-size: cover;background-position: center center;background-repeat: no-repeat;\"><div class=\"col-img-left cll\"><img class=\"img-responsive img-rounded \" src=\"{{store url=\"assets/frontend/img/produ1.png\"}}\" alt=\"books.jpg \"><div class=\"common-view-weekly \"><p class=\"pros1pre \">A Wide range of selected Goods with fast</p><a href=\"{{store url=\"category/stationary1\"}}\"  class=\"btn clothe-btn \">view more</a></div></div></div><div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12 \" style=\"background:#fff;\">\r\n{{block block_id=\"deals_category_one\"}}\r\n</div></div></div><div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 \"><div class=\"row \"><div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-12 text-trade\"><h4 class=\"headings45\">Small Commodities Market Place</h4><p class=\"pros1pre \">A Wide range of selected Goods with fast</p></div><div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12 \"><div class=\"our-trade\"></div></div></div><div class=\"row\" style=\" margin: 0px;\"><div class=\"col-lg-5 col-md-5 col-sm-6 col-xs-12 \" style=\"background-image:url({{store url=\"assets/frontend/img/backgroundformtop2.png\"}});height: 200px; background-size: cover;background-position: center center;background-repeat: no-repeat;\"><div class=\"col-img-left cll\"><img class=\"img-responsive img-rounded \" src=\"{{store url=\"assets/frontend/img/produ2.png\"}}\" alt=\"books.jpg \"><div class=\"common-view-weekly \"><p class=\"pros1pre \">A Wide range of selected Goods with fast</p><a href=\"{{store url=\"category/cloths\"}}\"  class=\"btn clothe-btn \">view more</a></div></div></div><div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12 \" style=\"background:#fff;\">\r\n{{block block_id=\"deals_category_two\"}}\r\n</div></div></div></div></div></div></div></section><section class=\"formsbanners\"><div class=\"wrapper-quot \"><div class=\"container-fluid \"><div class=\"row \"><div class=\"col-lg-4 col-md-4 col-sm4 col-xs-4 text-trade\"><h4 class=\"headings45\">Request For Quotation</h4><p class=\"pros1pre \">Niswarth Sewa to donate your products. </p></div><div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8 \"><div class=\"our-trade\"></div></div></div><div class=\" row \"><div class=\"col-md-5\"><div class=\"col-quot-img-4 \" style=\"background-image:url({{store url=\"assets/frontend/img/backform.png\"}})\"><div class=\"col-text-quot \"><div class=\"row\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \"><h4 class=\"headings45\">Global Sourcing Marketplace</h4><p class=\"pros1pre \">Niswarth Sewa to donate your products.</p></div><div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 \">RFQs</div><div class=\"text-left col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6 \">Avg Quotation Duration</div><div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6-6 \">RFQs</div><div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-6-6 \">RFQs</div><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 \"><a href=\"# \"><button type=\"button \" class=\"btn learn-more \">Learn More</button></a></div></div></div></div></div><div class=\"col-md-7 \"><div class=\"col-quot-text-6 \" id=\"quotation\"><div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 col-globe \"><h4 class=\"headings45\">One Request, Multiple Quets</h4><p class=\"pros1pre \">Cutting Grinding Wheel 4 from received 5 quotation(S) </p></div>{{block block_id=\"enquiry_form\"}}</div></div></div></div></div></section>\r\n<section class=\"col-productsd\"><div class=\"container-fluid \"><div class=\"row \"><div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 col-text-top-clothe \"><h4 class=\"headings45\">Grocery Products</h4><p class=\"pros1pre \">Donate food for Hungry People </p></div><div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 col-xs-9 \"><div class=\"our-clothe\"></div></div></div>{{block block_id=\"grocery_products\"}}</div></section>\r\n<section class=\"wraper \">\r\n	<div class=\"container-fluid \">\r\n		<div class=\"row \">\r\n			<div class=\"col-lg-4 col-md-4 col-sm4 col-xs-4 text-trade\">\r\n				<h4 class=\"headings45\">Helping Services</h4>\r\n				<p class=\"pros1pre \">Niswarth Sewa to donate your services.</p>\r\n			</div>\r\n			<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8 \">\r\n				<div class=\"our-trade\"></div>\r\n			</div>\r\n		</div>\r\n		<div class=\"row r2 \">\r\n			<div class=\"col-lg-3 col-md-2 col-sm-3 col-xs-3 image-trade \">\r\n				<img class=\"img-responsive \" src=\"{{store url=\"assets/frontend/img/trade1.png\"}}\" alt=\"ngo.jpg \">\r\n				<div class=\"row\">\r\n					<div class=\"col-lg-8 col-md-8 col-sm-10 col-xs-10 cl\">\r\n						<h5>Trade Assurance</h5>\r\n						<p class=\"pr \"> Order Protection</p>\r\n					</div>\r\n					<div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"><img class=\"trade-img-icon img-responsive \" src=\"{{store url=\"assets/frontend/img/tradeicon1.png\"}}\" alt=\"tradeicon1\"></div>\r\n				</div>\r\n			</div>\r\n			<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 image-trade \">\r\n				<img class=\"img-responsive \" src=\"{{store url=\"assets/frontend/img/trade2.png\"}}\" alt=\"ngo.jpg \">\r\n				<div class=\"row\">\r\n					<div class=\"col-lg-8 col-md-8 col-sm-10 col-xs-10 cl\">\r\n						<h5>Payment</h5>\r\n						<p class=\"pr \">Payment Solutions</p>\r\n					</div>\r\n					<div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"><img class=\"trade-img-icon img-responsive \" src=\"{{store url=\"assets/frontend/img/tradeicon2.png\"}}\" alt=\"tradeicons2\"></div>\r\n				</div>\r\n			</div>\r\n			<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 image-trade \">\r\n				<img class=\"img-responsive \" src=\"{{store url=\"assets/frontend/img/trade3.png\"}}\" alt=\"ngo.jpg \">\r\n				<div class=\"row\">\r\n					<div class=\"col-lg-8 col-md-8 col-sm-10 col-xs-10 cl\">\r\n						<h5>Inspection</h5>\r\n						<p class=\"pr \">Inspection Solution</p>\r\n					</div>\r\n					<div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"><img class=\"trade-img-icon img-responsive \" src=\"{{store url=\"assets/frontend/img/tradeicon3.png\"}}\" alt=\"tradeicon3\"></div>\r\n				</div>\r\n			</div>\r\n			<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 image-trade \">\r\n				<img class=\"img-responsive \" src=\"{{store url=\"assets/frontend/img/trade4.png\"}}\" alt=\"ngo.jpg \">\r\n				<div class=\"row\">\r\n					<div class=\"col-lg-8 col-md-8 col-sm-10 col-xs-10 cl\">\r\n						<h5>Ocean and air shipping</h5>\r\n						<p class=\"pr \">Logistic Service</p>\r\n					</div>\r\n					<div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"><img class=\"trade-img-icon img-responsive \" src=\"{{store url=\"assets/frontend/img/tradeicon4.png\"}}\" alt=\"tradeicon4\"></div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</section>', 1, 1, '2021-12-24 11:27:02'),
(2, 'Education', 'Education', 'Education', 'Education', 'education', 'assets/frontend/upload/images/edu.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(3, 'Health', 'Health', 'Health', 'Health', 'health', 'assets/frontend/upload/images/healthcare.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(4, 'Livelihood', 'Livelihood', 'Livelihood', 'Livelihood', 'livelihood', 'assets/frontend/upload/images/red-envelope.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(5, 'Women Empowerment', 'Women Empowerment', 'Women Empowerment', 'Women Empowerment', 'women-empowerment', 'assets/frontend/upload/images/women-rights.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(6, 'Disaster Response', 'Disaster Response', 'Disaster Response', 'Disaster Response', 'disaster-response', 'assets/frontend/upload/images/natural-disaster.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(7, 'Empowering Grassroots', 'Empowering Grassroots', 'Empowering Grassroots', 'Empowering Grassroots', 'empowering-grassroots', 'assets/frontend/upload/images/employees.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(8, 'Menstrual Health', 'Menstrual Health', 'Menstrual Health', 'Menstrual Health', 'menstrual-health', 'assets/frontend/upload/images/menstrual-cycle.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(9, 'Access & Infrastructure', 'Access & Infrastructure', 'Access & Infrastructure', 'Access & Infrastructure', 'access-infrastructure', 'assets/frontend/upload/images/accessibility.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51'),
(10, 'Preparing for emergencies', 'Preparing for emergencies', 'Preparing for emergencies', 'Preparing for emergencies', 'preparing-for-emergencies', 'assets/frontend/upload/images/ideass.png', 'assets/frontend/upload/images/bannertop.jpg', 'assets/frontend/upload/images/ecommerce-web-development-services_post.jpg', 'Nishivarth, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.\r\n\r\nThe groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person\'s life, we believe in the lifecycle approach.\r\n\r\nEducation empowers an individual to earn their livelihood and also increases one\'s awareness on a range of issues. From healthcare, to appropriate social behavior, to understanding one\'s rights – Nishivarth seeks to educate, empower and cultivate better citizens.', 0, 1, '2022-01-05 11:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `ns_pages_category`
--

CREATE TABLE `ns_pages_category` (
  `id` int(11) NOT NULL,
  `pages_id` int(11) NOT NULL,
  `pages_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_pages_category`
--

INSERT INTO `ns_pages_category` (`id`, `pages_id`, `pages_category_id`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1),
(4, 5, 1),
(5, 6, 1),
(6, 7, 1),
(7, 8, 1),
(8, 9, 1),
(9, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ns_page_info`
--

CREATE TABLE `ns_page_info` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_page_info`
--

INSERT INTO `ns_page_info` (`id`, `page_id`, `title`, `content`, `status`, `created_at`) VALUES
(1, 2, 'Our Preferred eCommerce Platforms', 'Ngo is a full-service eCommerce agency, delivering customized B2B and B2C eCommerce solutions by leveraging multiple platforms.', 1, '2022-01-09 11:01:53'),
(2, 2, 'This made our souls happy…', 'Padla village of Banswara district, #Rajasthan, is an agricultural area where people’s main source of income is farming. Unfortunately, water scarcity and the challenges it brings led many of the locals work as laborers as well.', 1, '2022-01-09 11:03:38'),
(3, 2, 'Nishivarth’s menstruation work during disasters', 'Nishivarth’s menstruation work during disasters…importance of MY Pads in Rahat Kits #Menstruation has always been one of the most disregarded issues in India.', 1, '2022-01-09 11:04:14'),
(4, 2, 'A neighbor’s pride…', 'Akkolli, a remote village with little access to even bus services, is nestled in Wayanad district of Kerala, home to the tribal settlement of Churuli.', 1, '2022-01-09 11:04:51'),
(5, 2, 'Giving wings to hope with a poultry farm', 'Narayanjote village in Jalpaiguri recently witnessed how the collective efforts and resolve of families towards the building of a community poultry farm could bring about a bright ray of hope for a stable livelihood in spite of the trials posed by Covid.', 1, '2022-01-09 11:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `ns_product`
--

CREATE TABLE `ns_product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `content` varchar(5000) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 => Disabled, 1 => Enabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_product`
--

INSERT INTO `ns_product` (`id`, `title`, `meta_title`, `meta_keyword`, `meta_description`, `slug`, `sku`, `price`, `quantity`, `created_at`, `updated_at`, `content`, `status`) VALUES
(1, 'T-Shirts', 'T-Shirts', 'T-Shirts', 'T-Shirts', 't-shirts', 't-shirts', 0, 0, '2021-12-21 12:51:17', '2021-12-21 00:00:00', 'Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ns_product_attributes`
--

CREATE TABLE `ns_product_attributes` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Yes, 0=No',
  `ordering` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_product_attributes`
--

INSERT INTO `ns_product_attributes` (`id`, `name`, `slug`, `required`, `ordering`) VALUES
(1, 'Color', 'color', 1, 1),
(2, 'Size', 'size', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ns_product_attributes_sku`
--

CREATE TABLE `ns_product_attributes_sku` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_attributes_value_id` bigint(20) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `default_override_add` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>Default, 1=>override, 2=>Add'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_product_attributes_sku`
--

INSERT INTO `ns_product_attributes_sku` (`id`, `product_id`, `product_attributes_value_id`, `sku`, `price`, `quantity`, `default_override_add`) VALUES
(1, 1, 1, 'tshirt-red', 0, 100, 0),
(2, 1, 2, 'tshirt-green', 0, 100, 0),
(3, 1, 3, 'tshirt-blue', 0, 100, 0),
(4, 1, 4, 'tshirt-s', 0, 0, 0),
(5, 1, 5, 'tshirt-m', 0, 100, 0),
(6, 1, 6, 'tshirt-l', 0, 100, 0),
(7, 1, 7, 'tshirt-xl', 0, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ns_product_attributes_value`
--

CREATE TABLE `ns_product_attributes_value` (
  `id` bigint(20) NOT NULL,
  `product_attributes_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ordering` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_product_attributes_value`
--

INSERT INTO `ns_product_attributes_value` (`id`, `product_attributes_id`, `name`, `ordering`) VALUES
(1, 1, 'Red', 0),
(2, 1, 'Green', 0),
(3, 1, 'Blue', 0),
(4, 2, 'S', 1),
(5, 2, 'M', 2),
(6, 2, 'L', 3),
(7, 2, 'XL', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ns_product_category`
--

CREATE TABLE `ns_product_category` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_product_category`
--

INSERT INTO `ns_product_category` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 10),
(2, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `ns_product_image`
--

CREATE TABLE `ns_product_image` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_main_image` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_product_image`
--

INSERT INTO `ns_product_image` (`id`, `product_id`, `image`, `is_main_image`, `created_at`) VALUES
(1, 1, 'assets/frontend/upload/images/cloth1 (1).png', 1, '2021-12-21 13:44:00'),
(2, 1, 'assets/frontend/upload/images/cloth1.png', 0, '2021-12-21 13:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `ns_product_product_type`
--

CREATE TABLE `ns_product_product_type` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_type_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ns_product_type`
--

CREATE TABLE `ns_product_type` (
  `id` bigint(20) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_product_type`
--

INSERT INTO `ns_product_type` (`id`, `type_name`, `created_at`) VALUES
(1, 'Simple', '2021-12-16 14:08:52'),
(2, 'Virtual', '2021-12-16 14:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `ns_services`
--

CREATE TABLE `ns_services` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_services`
--

INSERT INTO `ns_services` (`id`, `page_id`, `title`, `content`, `status`, `created_at`) VALUES
(1, 2, 'Livelihood as the way forward', 'Highlights of our work from the ground. Our endeavors to support people return \'to normal\' life, through our Vaapsi initiative.Respond to needs emerging from the ground.', 1, '2022-01-09 11:07:02'),
(2, 2, 'Winter is going.', 'This year, winter is going to be much tougher – especially for millions flood-affected across India who are still recovering and many women who make do with just 1-2 Saree’s throughout the year.', 1, '2022-01-09 11:07:43'),
(3, 2, 'Why Contribute for floods.', 'Why Contribute for floods to Goonj this Daan Utsav? A message from Mr. Anshu Gupta, Founder Goonj Millions of people across India are facing the wrath of floods right now.', 1, '2022-01-09 11:08:21'),
(4, 2, 'Struggling to survive floods.', 'People in many states across India are struggling to survive massive floods. We are there reaching urgent relief materials and will continue to support and build community resilience long after the floodwaters have receded.', 1, '2022-01-09 11:08:53'),
(5, 2, 'Developing training centers.', 'The waste cloth generated from the cities is channelised to some villages where women are learning stitching on sewing machines at a GOONJ training center. Apart from employment and income.', 1, '2022-01-09 11:09:53'),
(6, 2, 'Restoring lives', 'Pass a beggar on the road and one often hears “kuch kaam kyu nahi karte?”(why don’t you do some work?) routinely hurled at them. Ever wondered where do these people come from – unlettered.', 1, '2022-01-09 11:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `ns_static_blocks`
--

CREATE TABLE `ns_static_blocks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `block_id` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Enable = 1 , Disable => 0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_static_blocks`
--

INSERT INTO `ns_static_blocks` (`id`, `title`, `block_id`, `content`, `status`, `created_at`) VALUES
(1, 'Banner Donate Products', 'banner_donate_products', '{{banner-11,12,13,14,15,16,17,18}}', 1, '2021-12-24 12:43:48'),
(2, 'Banner Donate Service', 'banner_donate_service', '{{banner-19,20,21,22,23,24,25,26}}', 1, '2021-12-24 12:53:24'),
(3, 'Carousel Slider', 'carousel_slider', '{{carousel-11,12,13,14,15,16,17,18}}', 1, '2021-12-26 07:51:28'),
(4, 'Donated Cloths', 'donated_cloths', '{{big-carousel-7,8,9,14}}', 1, '2021-12-26 08:33:53'),
(5, 'Donated Medicine', 'donated_medicine', '{{big-carousel-27,28,29,30}}', 1, '2021-12-27 18:05:52'),
(6, 'Home Tabs', 'home_tabs', '{{toggletabs-31,32,33,34}}', 1, '2021-12-28 14:32:24'),
(7, 'Food Products', 'food_products', '{{categories-bigbox-44,45,46,47,48,49}}', 1, '2021-12-29 11:41:24'),
(8, 'Deals Category 1', 'deals_category_one', '{{categories-deals-35,42}}', 1, '2021-12-30 13:52:39'),
(9, 'Deals Category 2', 'deals_category_two', '{{categories-deals-42,35}}', 1, '2021-12-30 13:53:18'),
(10, 'Enquiry Form', 'enquiry_form', '{{enquiry-form}}', 1, '2021-12-31 15:06:13'),
(11, 'Grocery Products', 'grocery_products', '{{categories-box-44,45,46,47,48,49}}', 1, '2022-01-03 13:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `ns_users`
--

CREATE TABLE `ns_users` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(50) NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '1=>Male, 2=>Female, 3=>Custom',
  `intro` varchar(5000) NOT NULL,
  `user_type` tinyint(4) NOT NULL COMMENT '1=>Organization, 2=>Doner, 3=>Needy',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 => Disabled, 1 => Enabled',
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_users`
--

INSERT INTO `ns_users` (`id`, `first_name`, `middle_name`, `last_name`, `mobile`, `email`, `password_hash`, `gender`, `intro`, `user_type`, `status`, `registered_at`, `last_login`) VALUES
(1, 'Karan', '', 'Kumar', '9876543210', 'karan@gmail.com', '6590f73ecdf351c38de00befd2ecf17b', 1, '', 2, 1, '2021-12-21 14:43:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ns_users_address`
--

CREATE TABLE `ns_users_address` (
  `id` bigint(20) NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ns_users_products`
--

CREATE TABLE `ns_users_products` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_users_products`
--

INSERT INTO `ns_users_products` (`id`, `users_id`, `product_id`, `created_at`) VALUES
(1, 1, 1, '2021-12-21 14:47:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ns_category`
--
ALTER TABLE `ns_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_category_pages`
--
ALTER TABLE `ns_category_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_pages`
--
ALTER TABLE `ns_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `ns_pages_category`
--
ALTER TABLE `ns_pages_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_page_info`
--
ALTER TABLE `ns_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_product`
--
ALTER TABLE `ns_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `ns_product_attributes`
--
ALTER TABLE `ns_product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `ns_product_attributes_sku`
--
ALTER TABLE `ns_product_attributes_sku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `ns_product_attributes_value`
--
ALTER TABLE `ns_product_attributes_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `ns_product_category`
--
ALTER TABLE `ns_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_product_image`
--
ALTER TABLE `ns_product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_product_product_type`
--
ALTER TABLE `ns_product_product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_product_type`
--
ALTER TABLE `ns_product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_services`
--
ALTER TABLE `ns_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_static_blocks`
--
ALTER TABLE `ns_static_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_users`
--
ALTER TABLE `ns_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_users_address`
--
ALTER TABLE `ns_users_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ns_users_products`
--
ALTER TABLE `ns_users_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ns_category`
--
ALTER TABLE `ns_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ns_category_pages`
--
ALTER TABLE `ns_category_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ns_pages`
--
ALTER TABLE `ns_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ns_pages_category`
--
ALTER TABLE `ns_pages_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ns_page_info`
--
ALTER TABLE `ns_page_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ns_product`
--
ALTER TABLE `ns_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ns_product_attributes`
--
ALTER TABLE `ns_product_attributes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ns_product_attributes_sku`
--
ALTER TABLE `ns_product_attributes_sku`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ns_product_attributes_value`
--
ALTER TABLE `ns_product_attributes_value`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ns_product_category`
--
ALTER TABLE `ns_product_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ns_product_image`
--
ALTER TABLE `ns_product_image`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ns_product_product_type`
--
ALTER TABLE `ns_product_product_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ns_product_type`
--
ALTER TABLE `ns_product_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ns_services`
--
ALTER TABLE `ns_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ns_static_blocks`
--
ALTER TABLE `ns_static_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ns_users`
--
ALTER TABLE `ns_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ns_users_address`
--
ALTER TABLE `ns_users_address`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ns_users_products`
--
ALTER TABLE `ns_users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
