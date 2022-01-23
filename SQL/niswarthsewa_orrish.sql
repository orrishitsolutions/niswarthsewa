-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niswarthsewa_orrish`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_status` tinyint(1) NOT NULL DEFAULT 0,
  `c_image` varchar(200) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_status`, `c_image`, `c_date`) VALUES
(14, 'Fresh Meat', 1, '69fa2134e434de3ebec2dd8368a30f71.jpg', '2021-01-23 11:26:30'),
(15, 'Vegetables', 1, 'a7314e233c7d24f7c500baf4a26745f1.jpg', '2021-01-23 11:26:30'),
(16, 'Fruit & Nut Gifts', 1, 'ec8dfa05353b4c4794f484af70cfa0b8.jpg', '2021-01-23 11:28:08'),
(17, 'Fresh Berries', 1, '274f1d47f3a36b6bdd094539276fe0e8.jpg', '2021-01-23 11:28:08'),
(19, 'Ocean Foods', 1, '4c56d54c1d392498747140e39b62a169.jpg', '2021-01-23 11:28:47'),
(27, 'Dried Fruit', 1, '6739d4c8fcd1408885dccc507ee159df.jpg', '2021-01-24 06:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `newslater`
--

CREATE TABLE `newslater` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscribe` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `sub_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` bigint(20) NOT NULL,
  `off_price` bigint(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `sub_id`, `status`, `name`, `price`, `off_price`, `image`, `date`) VALUES
(14, 27, 0, 1, 'Raisin nuts', 40, 12, 'd5b1b0e70c03e19337bac46b93c1efc5.jpg', '2021-01-24 06:10:55'),
(15, 15, 0, 1, 'Vegetables package', 40, 20, 'af54058f0aa7a1207ed0156396a07a55.jpg', '2021-01-24 06:11:49'),
(16, 27, 0, 1, 'Mixed fruits', 40, 12, '6b9ad3b05c2757c3c7479b86c319c136.jpg', '2021-01-24 06:12:27'),
(17, 17, 0, 1, 'Raisin nuts ', 200, 20, 'ec479b51aac204bdb86618504dab8cb4.jpg', '2021-01-24 06:14:25'),
(18, 27, 0, 1, 'Raisin boil nuts', 300, 18, 'b16863952e957dd5c49c5ebfbddba8c4.jpg', '2021-01-24 06:14:51'),
(19, 27, 0, 1, 'Raisin heat nuts', 180, 20, 'deafffcb66f69c309e87d9995193931b.jpg', '2021-01-24 06:15:41'),
(20, 16, 0, 0, 'Crab Pool Security', 200, 11, '75daf71e23bb6931568301fdef7dec1d.jpg', '2021-01-26 11:57:11'),
(21, 27, 0, 0, 'Crab Pool Security', 1000, 80, 'fcedb8a4d5731e210a95263449004f85.jpg', '2021-01-26 11:57:51'),
(22, 16, 0, 0, 'Crab Pool Security', 129, 12, '588106df9067c2e6711630ea396c3b98.jpg', '2021-01-26 11:58:22'),
(23, 14, 0, 0, 'Crab Pool Security', 2000, 18, '41eed824cf376cb9386ab0e36a4b648e.jpg', '2021-01-26 11:58:56'),
(24, 16, 0, 0, 'Crab Pool Security', 120, 22, 'ea83c6298723a56df59d918385e580e6.jpg', '2021-01-26 11:59:27'),
(25, 19, 0, 0, 'Crab Pool Security', 189, 13, '95579d19f643025c99524ac7b87812bd.jpg', '2021-01-26 12:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `nickname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permision` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permision`)),
  `desc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nickname`, `name`, `permision`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, 'Administrator users can perform any action.', NULL, NULL),
(2, 'user', 'User', NULL, 'Read, Write can perform any action.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_activity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  `data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `last_activity`, `timestamp`, `data`) VALUES
('07pq3s4ibgbls668j974kbc8htsr055p', NULL, '::1', NULL, '', 1639043272, '__ci_last_regenerate|i:1639043272;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('0fch2kqtpu26n6kb80deq9hedo4loajm', NULL, '::1', NULL, '', 1639140534, '__ci_last_regenerate|i:1639140534;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";email|s:13:\"ngo@gmail.com\";'),
('0qvinj3rrbk07gfjqo8jaqr5eodtoa53', NULL, '::1', NULL, '', 1639141925, '__ci_last_regenerate|i:1639141748;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";email|s:13:\"ngo@gmail.com\";'),
('106pdnneo33r3fj1b31g02veql3dld57', NULL, '::1', NULL, '', 1639042947, '__ci_last_regenerate|i:1639042947;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('10pt2jb8lmpvpcn9b9ph48kuur07ingb', NULL, '::1', NULL, '', 1639402103, '__ci_last_regenerate|i:1639402017;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('14av6o61o8qhu53kmhs93dht01n5crqi', NULL, '::1', NULL, '', 1639041530, '__ci_last_regenerate|i:1639041530;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('1kngq4aeg7mh9pl4p7qugn58o4c0htk2', NULL, '::1', NULL, '', 1639136280, '__ci_last_regenerate|i:1639136280;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('2ab2s4l7q181qptsjc3se410e6knhha2', NULL, '::1', NULL, '', 1639135437, '__ci_last_regenerate|i:1639135437;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('2k685l52ohkvc85cb5jfepn3lofsa0su', NULL, '::1', NULL, '', 1639132187, '__ci_last_regenerate|i:1639132187;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('31mvlhdkt9lnfr653n1q0v4fh5ftks32', NULL, '::1', NULL, '', 1639034723, '__ci_last_regenerate|i:1639034723;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('389sc4buj4ibqkg1ln6un529568g5jtd', NULL, '::1', NULL, '', 1639130381, '__ci_last_regenerate|i:1639130381;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('3er0igi0hkpg7o55vtgpjua4inr6teq3', NULL, '::1', NULL, '', 1639038273, '__ci_last_regenerate|i:1639038273;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('3ohlg2an7gd37k565ktmsthr6kq7tsab', NULL, '::1', NULL, '', 1639031323, '__ci_last_regenerate|i:1639031323;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('3refk89ht6am5l73ultttnpoos3ipmqi', NULL, '::1', NULL, '', 1639048321, '__ci_last_regenerate|i:1639048321;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('467b0u1gru9qg00siq3ub0atv1ug9m0b', NULL, '::1', NULL, '', 1639049611, '__ci_last_regenerate|i:1639049609;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('4vv7pp6oeatej6i4lp6umt0c9i5932ni', NULL, '::1', NULL, '', 1639131814, '__ci_last_regenerate|i:1639131814;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";status|s:36:\"Hurray! has been added successfully!\";__ci_vars|a:1:{s:6:\"status\";s:3:\"old\";}'),
('51fhee1bs492t6qocaq651vlpueq1d4f', NULL, '::1', NULL, '', 1639138224, '__ci_last_regenerate|i:1639138224;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";email|s:13:\"ngo@gmail.com\";'),
('5ic2slmkrf42qmh5d1ggq1dnut4lmqqs', NULL, '::1', NULL, '', 1639047453, '__ci_last_regenerate|i:1639047453;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('6dn6oda6ervkat308o8i5j79855v5b23', NULL, '::1', NULL, '', 1639127833, '__ci_last_regenerate|i:1639127833;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('6du7k2ioueql3r0ctdqika1chkq2c34p', NULL, '::1', NULL, '', 1639034325, '__ci_last_regenerate|i:1639034325;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('6i96ln6gp8krttik673j4e06f5d6lsqn', NULL, '::1', NULL, '', 1639128188, '__ci_last_regenerate|i:1639128188;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('6igpo6kc946bemrb49u3nac4c2r6blbe', NULL, '::1', NULL, '', 1639044305, '__ci_last_regenerate|i:1639044305;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('7i6fjeltsjc95vmojh5ie6lmk4429e0o', NULL, '::1', NULL, '', 1639120350, '__ci_last_regenerate|i:1639120350;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('7qig6qtm8j3bmrhu509afvjek01fgmlq', NULL, '::1', NULL, '', 1639047987, '__ci_last_regenerate|i:1639047987;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('82lbo5quk66evluijhuen4sma2ngdcs8', NULL, '::1', NULL, '', 1639043811, '__ci_last_regenerate|i:1639043811;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('890kbv62anrjpde0fh1tl49hc5vps1sv', NULL, '::1', NULL, '', 1639032308, '__ci_last_regenerate|i:1639032308;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('8bg0toj5b29pdnp9s2v60683s78ss7et', NULL, '::1', NULL, '', 1639037951, '__ci_last_regenerate|i:1639037951;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('8iu8v1keorkvs45qo77epto2dsbvcmgb', NULL, '::1', NULL, '', 1639045288, '__ci_last_regenerate|i:1639045288;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('8oqjae5q4kabnncban23fids2ntberf0', NULL, '::1', NULL, '', 1639123249, '__ci_last_regenerate|i:1639123249;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('9h7abl56fgmjaq71o02qqr1iojfbm0g0', NULL, '::1', NULL, '', 1639032922, '__ci_last_regenerate|i:1639032922;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('aidmhdenut30d70c17i4oaoea4orcb9s', NULL, '::1', NULL, '', 1639119016, '__ci_last_regenerate|i:1639119016;'),
('ajttbrrbg5pkj4igmfjvsmh6oclbr07g', NULL, '::1', NULL, '', 1639035155, '__ci_last_regenerate|i:1639035155;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('as65rie67jimqc1uloalbhkpnfmd4lvb', NULL, '::1', NULL, '', 1639040941, '__ci_last_regenerate|i:1639040940;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('b61l8gpnq4c9vem2rbge4o8lvltkj57d', NULL, '::1', NULL, '', 1639135104, '__ci_last_regenerate|i:1639135104;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('b6nhd70ovh4lid1q172bg6teefrqofg8', NULL, '::1', NULL, '', 1639042518, '__ci_last_regenerate|i:1639042518;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('balth5anpcpu5epdl7e8ulj9766l73u0', NULL, '::1', NULL, '', 1639029108, '__ci_last_regenerate|i:1639029108;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('bbp4d3pvstb4oeb848m59supg596ui14', NULL, '::1', NULL, '', 1639124879, '__ci_last_regenerate|i:1639124879;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('bmq84873o95bsnch06960f7c0p02mhjn', NULL, '::1', NULL, '', 1639137296, '__ci_last_regenerate|i:1639137296;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('brr0q5bsg5pnrdu0jq19nfmff7oafksk', NULL, '::1', NULL, '', 1639134771, '__ci_last_regenerate|i:1639134771;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('cf9a5v95rt3san6coe7c9elt84kjnchf', NULL, '::1', NULL, '', 1639049282, '__ci_last_regenerate|i:1639049282;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('cv8qqdb030e5lm2q01phfbh1hlm181nq', NULL, '::1', NULL, '', 1639131506, '__ci_last_regenerate|i:1639131506;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('ducbh3hj96t8780o7k4h9duet68ienc1', NULL, '::1', NULL, '', 1639029410, '__ci_last_regenerate|i:1639029410;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('eljmv8c39o9ltqj5o5idtfhksqrh0v74', NULL, '::1', NULL, '', 1639137888, '__ci_last_regenerate|i:1639137888;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('f1p3k01stfhdsvdso9gle1lp223lv4db', NULL, '::1', NULL, '', 1639027925, '__ci_last_regenerate|i:1639027925;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('fff8d9bfb1m04gejfm3rirlg3njuf1a4', NULL, '::1', NULL, '', 1639033377, '__ci_last_regenerate|i:1639033377;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('fsiorecgq0vjp5puqd32us5fln8nlmlc', NULL, '::1', NULL, '', 1639128508, '__ci_last_regenerate|i:1639128508;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('gprfbtkmt4jm62d2r7kj3tf0pd2q8k1g', NULL, '::1', NULL, '', 1639035564, '__ci_last_regenerate|i:1639035564;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('i2nlqpqr9mjvttqpb0r8kmktoso3mpm5', NULL, '::1', NULL, '', 1639129732, '__ci_last_regenerate|i:1639129732;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('i8mur7qeilc06outkfu92e1n8sieqk06', NULL, '::1', NULL, '', 1639138898, '__ci_last_regenerate|i:1639138898;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";email|s:13:\"ngo@gmail.com\";'),
('iblgfipo6s4ha3g5m1r2ku3d9afc2o3a', NULL, '::1', NULL, '', 1639126535, '__ci_last_regenerate|i:1639126535;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('ifhrg3sjq5teo72h5l14kku9enm9er1t', NULL, '::1', NULL, '', 1639026901, '__ci_last_regenerate|i:1639026901;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('jnesshirecn459rhqf8qdmh7r8egvacj', NULL, '::1', NULL, '', 1639042217, '__ci_last_regenerate|i:1639042217;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('k41v1jn2f66k1r9qij5se9aog6qe4k59', NULL, '::1', NULL, '', 1639027277, '__ci_last_regenerate|i:1639027277;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('mk75jb1fu8426u3dt3f2vb9ol0eb1gva', NULL, '::1', NULL, '', 1639031643, '__ci_last_regenerate|i:1639031643;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('n3i6cfv7pfhacrl5ktsscke02rbr4slb', NULL, '::1', NULL, '', 1639028472, '__ci_last_regenerate|i:1639028472;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('n7hgja5qg55hhim9fk0tpje67s4f56rj', NULL, '::1', NULL, '', 1639028775, '__ci_last_regenerate|i:1639028775;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('netc9apksqf8amqdhqfshkp45jn8oj8s', NULL, '::1', NULL, '', 1639123805, '__ci_last_regenerate|i:1639123805;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('nr689te7f4i0rpml45vuipmha5lbh0ud', NULL, '::1', NULL, '', 1639049609, '__ci_last_regenerate|i:1639049609;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('nseokse1fdth9l7nck5aoei685ub889n', NULL, '::1', NULL, '', 1639125263, '__ci_last_regenerate|i:1639125263;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('o192j84v7pqgmoj8qhu80mgbrno4o08u', NULL, '::1', NULL, '', 1639122765, '__ci_last_regenerate|i:1639122765;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('o1u5o5vpeo4r2qj1cslm7igo67pk4stb', NULL, '::1', NULL, '', 1639119325, '__ci_last_regenerate|i:1639119325;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('o57lsvh8mmg3b018imk867ohhd3b0omg', NULL, '::1', NULL, '', 1639141748, '__ci_last_regenerate|i:1639141748;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";email|s:13:\"ngo@gmail.com\";'),
('od0prk0qup99pc38fs625fisb59gkkag', NULL, '::1', NULL, '', 1639119784, '__ci_last_regenerate|i:1639119784;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('oeeefr6khi41kss3k85p97j891oh67ep', NULL, '::1', NULL, '', 1639127106, '__ci_last_regenerate|i:1639127106;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('on52dkvl1672m14po1j5c0gtj44f1j5n', NULL, '::1', NULL, '', 1639031952, '__ci_last_regenerate|i:1639031952;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('onhhl6itn0bn4fkua0jodn36b5s6atlr', NULL, '::1', NULL, '', 1639120724, '__ci_last_regenerate|i:1639120724;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('piskoo9uqom4ffshu441q5bjhdltbp9d', NULL, '::1', NULL, '', 1639032613, '__ci_last_regenerate|i:1639032613;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('pk69icpv0302a930t821l3ot4mhlcdrq', NULL, '::1', NULL, '', 1639036385, '__ci_last_regenerate|i:1639036385;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('qe60jg763nraflvs93ngtq209k19plbv', NULL, '::1', NULL, '', 1639130705, '__ci_last_regenerate|i:1639130705;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";status|s:10:\"Save Brand\";__ci_vars|a:1:{s:6:\"status\";s:3:\"old\";}'),
('r8m231as47ii52oima0m5dmi3h1clrsl', NULL, '::1', NULL, '', 1639036691, '__ci_last_regenerate|i:1639036691;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('rg23n9g01m7a5b2bbu47set0ad33lnbd', NULL, '::1', NULL, '', 1639036078, '__ci_last_regenerate|i:1639036078;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('s3d49e6at3qr3rnc3urmb75usq77l5q1', NULL, '::1', NULL, '', 1639127441, '__ci_last_regenerate|i:1639127441;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('snqm2hq3rl6n7a8hlkhpillfagrk4oue', NULL, '::1', NULL, '', 1639136624, '__ci_last_regenerate|i:1639136624;isLogged|b:1;id|s:1:\"2\";name|s:14:\"Ngo Nishivarth\";email|s:13:\"ngo@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('str1oq72j9dpi66cc3fpc4jvpgbiismu', NULL, '::1', NULL, '', 1639048681, '__ci_last_regenerate|i:1639048681;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('tv5pamcfolcp85lhgea3g5r1s7s9n5p5', NULL, '::1', NULL, '', 1639027594, '__ci_last_regenerate|i:1639027594;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('vo38as3eg8e5vefl17eik6ten0q3ie5j', NULL, '::1', NULL, '', 1639036994, '__ci_last_regenerate|i:1639036994;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";'),
('vqlvgtn7d1ttffhqpqmsp4kimven9eal', NULL, '::1', NULL, '', 1639033914, '__ci_last_regenerate|i:1639033914;isLogged|b:1;id|s:1:\"2\";name|s:11:\"Abhay singh\";email|s:18:\"as271070@gmail.com\";phone|s:10:\"8750908036\";profile|s:36:\"10a04d63674f81bccb90f7922d8e6ff2.png\";email_verified_at|s:19:\"2021-01-02 15:27:36\";password|s:60:\"$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G\";remember_token|N;role_id|s:1:\"1\";created_at|s:19:\"2021-01-02 15:12:08\";updated_at|s:19:\"2021-01-02 15:27:36\";');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `panelId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keys` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A V',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) NOT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title1` varchar(300) NOT NULL,
  `title2` varchar(300) NOT NULL,
  `title3` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `description1` text DEFAULT NULL,
  `description2` text NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `type`, `title1`, `title2`, `title3`, `status`, `description1`, `description2`, `file`, `created_at`, `updated_at`) VALUES
(5, 'experience', '150', '50', '2500', 1, '<h3>Our Forte</h3>\r\n<ul>\r\n<li>No Accidental Cars</li>\r\n<li>No Odometer Tampered</li>\r\n<li>No Hidden Cost</li>\r\n<li>No Processing Fee</li>\r\n</ul>\r\n<h3>&nbsp;</h3>\r\n<h3>Our Vision &amp; Mission</h3>\r\n<p>Our Mission is to simply be the best in every area of our business. We will accomplish this by providing the most exceptional customer experience, being the best place to work, and strongly supporting our community, all while working together as</p>\r\n<p>&nbsp;</p>\r\n<h3>Our Core Values</h3>\r\n<p>Our core values are the pillars that support our Mission statement. They form the rock solid foundation that guides our individual and collective actions. These core values are intertwined so that each supports the other.</p>', '', 'c0bda118ed6b5fa05553ed690de468c6.jpeg', '2021-12-07 14:45:21', '2021-12-07 05:37:33'),
(6, 'directors', 'Director\'s name', '', '', 1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat asperiores deserunt cumque,consequuntur rem cupiditate,ab, impedit corporis porro repudiandae quae itaque veniam! Eos aliquid voluptate unde debitis molestias.</p>', '', 'd154d0927d349f8ae2bbd50ceae97c77.jpeg', '2021-12-07 18:50:24', '2021-12-07 06:47:58'),
(7, 'directors', 'Director\'s name', '', '', 1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat asperiores deserunt cumque,consequuntur rem cupiditate,ab, impedit corporis porro repudiandae quae itaque veniam! Eos aliquid voluptate unde debitis molestias.</p>', '', '679cd5d92a7192c153edce5326690a8a.jpeg', '2021-12-07 18:50:20', '2021-12-07 06:49:12'),
(8, 'directors', 'Director\'s name', '', '', 1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat asperiores deserunt cumque,consequuntur rem cupiditate,ab, impedit corporis porro repudiandae quae itaque veniam! Eos aliquid voluptate unde debitis molestias.</p>', '', '21e4e1e0598b77187b22ce5795383fa6.jpeg', '2021-12-07 18:50:18', '2021-12-07 06:49:28'),
(9, 'directors', 'Director\'s name', '', '', 1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat asperiores deserunt cumque,consequuntur rem cupiditate,ab, impedit corporis porro repudiandae quae itaque veniam! Eos aliquid voluptate unde debitis molestias.</p>', '', '19828c9ef27ec8a5bd6999eb280def85.jpeg', '2021-12-07 18:50:14', '2021-12-07 06:49:43'),
(17, 'team', ' Mr. Jatin Chaudhary', 'Director', '', 1, NULL, '', '9614ab37d7fcf01940403b717a1aa0d3.png', '2021-12-10 10:25:40', '2021-12-07 07:59:00'),
(19, 'testimonials', 'Buyer4st name here', 'Buyer', '', 1, '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat blanditiis, omnis modi dicta</p>\r\n<p>cum odio asperiores totam suscipit eius accusantium sed! Officia esse corrupti beatae qui. Nobis</p>\r\n<p>fugit excepturi praesentium.</p>', '', '57631c0e1f895655b2279bbed3e40313.jpeg', '2021-12-07 12:43:51', '2021-12-07 08:36:20'),
(29, 'testimonials', 'Buyer1st name here', 'Buyer', '', 1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat blanditiis, omnis modi dicta\r\ncum odio asperiores totam suscipit eius accusantium sed! Officia esse corrupti beatae qui. Nobis\r\nfugit excepturi praesentium.', '', '2c10872cbf07b869ad38949c6356d50a.jpeg', '2021-12-07 17:13:04', '2021-12-07 17:08:01'),
(30, 'testimonials', 'Buyer2st name here', 'Buyer', '', 1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat blanditiis, omnis modi dicta\r\ncum odio asperiores totam suscipit eius accusantium sed! Officia esse corrupti beatae qui. Nobis\r\nfugit excepturi praesentium.', '', 'b0e756d7a4d77386f89988cc586896ef.jpeg', '2021-12-07 17:13:08', '2021-12-07 17:08:45'),
(31, 'testimonials', 'Buyer4st name here', 'Buyer', '', 1, '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat blanditiis, omnis modi dicta cum odio asperiores totam suscipit eius accusantium sed! Officia esse corrupti beatae qui. Nobis fugit excepturi praesentium.</p>', '', '921bccedd38333462550d8c976932769.jpeg', '2021-12-07 12:44:33', '2021-12-07 17:09:34'),
(33, 'deal', 'India', '', '', 1, NULL, '', '940749e8e631f6741d8e829f22340cbc.png', '2021-12-10 10:23:02', '2021-12-10 10:23:02'),
(34, 'deal', 'India ', '', '', 1, NULL, '', 'f1b85aaf6910d812fd67b2abd56fafb8.png', '2021-12-10 10:23:21', '2021-12-10 10:23:21'),
(35, 'deal', 'India', '', '', 1, NULL, '', '159e5d981ca776fa6166097cb3598c25.png', '2021-12-10 10:23:34', '2021-12-10 10:23:34'),
(36, 'deal', 'India', '', '', 1, NULL, '', 'be3987fb41b36c35185f464257c7ec5f.png', '2021-12-10 10:23:45', '2021-12-10 10:23:45'),
(37, 'deal', 'India', '', '', 1, NULL, '', 'aa56f04b45907ac2d80ffc9a70c2571c.png', '2021-12-10 10:24:05', '2021-12-10 10:24:05'),
(38, 'deal', 'India', '', '', 1, NULL, '', 'df0ccffa16a9bf3dcc862b5c97099729.png', '2021-12-10 10:24:24', '2021-12-10 10:24:12'),
(39, 'team', '  Mr. Anuj Desmukh', 'Director', '', 1, NULL, '', 'edbdb840944d604644d2338c7de12718.png', '2021-12-10 10:32:38', '2021-12-10 10:31:21'),
(40, 'team', 'Mr. Rakesh Singh', 'Manager', '', 1, NULL, '', '227e7471ac35db6db8023bae7d8f16da.png', '2021-12-10 10:32:37', '2021-12-10 10:32:07'),
(41, 'team', 'Mrs. Meena Singh', 'Manager', '', 1, NULL, '', '3749b73701befc8161b27e05e9b65b7e.png', '2021-12-10 10:33:45', '2021-12-10 10:33:45'),
(42, 'team', ' Mrs. Rekha Singh', 'Manager', '', 1, NULL, '', 'f58f651c79fa79f4520c90c55c0dbeef.png', '2021-12-10 11:13:30', '2021-12-10 11:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_style`
--

CREATE TABLE `tbl_car_style` (
  `id` int(11) NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `meta_title` varchar(300) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(300) NOT NULL,
  `file1` varchar(300) NOT NULL,
  `file2` varchar(300) NOT NULL,
  `sco_Keyword` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_car_style`
--

INSERT INTO `tbl_car_style` (`id`, `s_name`, `status`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `file1`, `file2`, `sco_Keyword`, `created_at`, `updated_at`) VALUES
(12, 'Medicine Donation', 1, '', '', '', '', 'a60613f4ce05778f24f0c1d8ad1378ae.png', 'a60613f4ce05778f24f0c1d8ad1378ae.png', '', '2021-12-10 10:01:20', '2021-12-10 10:01:20'),
(13, 'Cloth Donation', 1, '', '', '', '', 'ed56fd654454819d376edcf8d9dcbb5e.png', 'ed56fd654454819d376edcf8d9dcbb5e.png', '', '2021-12-10 10:04:41', '2021-12-10 10:04:41'),
(14, 'Books Donation', 1, '', '', '', '', '2ce72fe4fc5d71d547d22f870d5a6a41.png', '2ce72fe4fc5d71d547d22f870d5a6a41.png', '', '2021-12-10 10:05:06', '2021-12-10 10:05:06'),
(15, 'Home Products ', 1, '', '', '', '', '42573a8a8c2f8c7a953a56127a419ee3.png', '42573a8a8c2f8c7a953a56127a419ee3.png', '', '2021-12-10 10:05:28', '2021-12-10 10:05:28'),
(16, 'Education Materials', 1, '', '', '', '', '21457fce588294819853f8b7d918553c.png', '21457fce588294819853f8b7d918553c.png', '', '2021-12-10 10:05:52', '2021-12-10 10:05:52'),
(17, 'Contribute Material ', 1, '', '', '', '', 'af80b2534428a0213c61d582cffe9562.png', 'af80b2534428a0213c61d582cffe9562.png', '', '2021-12-10 10:06:14', '2021-12-10 10:06:14'),
(18, 'Food Donation', 1, '', '', '', '', '3f198a70f8ed5c8e6d6e703813a03a78.png', '3f198a70f8ed5c8e6d6e703813a03a78.png', '', '2021-12-10 10:06:41', '2021-12-10 10:06:41'),
(19, 'Toy Donation ', 1, '', '', '', '', '7c1c982091bdbec5513223cb94856bc0.png', '7c1c982091bdbec5513223cb94856bc0.png', '', '2021-12-10 10:07:00', '2021-12-10 10:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `meta_title` varchar(300) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `sco_Keyword` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `c_name`, `status`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `file`, `sco_Keyword`, `created_at`, `updated_at`) VALUES
(26, 'Medical Equipment ', 1, '', '', '', '', '0311e04f921b08e29593ae5c4267c1e6.png', '', '2021-12-10 03:59:52', '2021-12-10 08:29:52'),
(27, 'Blood Donation ', 1, '', '', '', '', 'ee6a6d175251ed19a8a3eea63f774f03.png', '', '2021-12-10 04:01:45', '2021-12-10 04:37:33'),
(28, 'Livelihood ', 1, '', '', '', '', 'af3e68d83c69fb474e4a96e69957dbb7.png', '', '2021-12-10 04:37:55', '2021-12-10 09:07:55'),
(29, 'Women Empowerment ', 1, '', '', '', '', '7d6f1ca71f3e88741bb905825369508f.png', '', '2021-12-10 04:38:19', '2021-12-10 09:08:19'),
(30, 'Free Education ', 1, '', '', '', '', '3112a2ca2e193749a52ff1fbf4bb588f.png', '', '2021-12-10 04:38:47', '2021-12-10 09:08:47'),
(31, 'Human Organs Dotation ', 1, '', '', '', '', '48c20f1e84b99c54a635cfb242e46a5e.png', '', '2021-12-10 04:39:17', '2021-12-10 09:09:17'),
(32, 'Disaster Response', 1, '', '', '', '', 'cc603e100c8f77d8c6bf5965ba18247f.png', '', '2021-12-10 04:39:45', '2021-12-10 09:09:45'),
(33, 'Menstrual Health ', 1, '', '', '', '', '8f65ee4a2c59192f369522c1a37d1985.png', '', '2021-12-10 04:40:42', '2021-12-10 09:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquery`
--

CREATE TABLE `tbl_enquery` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `url` varchar(300) NOT NULL,
  `send_mail` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `request_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enquery`
--

INSERT INTO `tbl_enquery` (`id`, `name`, `subject`, `email`, `phone`, `url`, `send_mail`, `msg`, `request_time`) VALUES
(6, 'hgfgh', 'Request A Call', 'abhayorrish@gmail.com', '2323232323', 'http://localhost/luxurycarsemporio/car-detail/175', '', 'dsfdscfs', '2021-12-09 11:08:21'),
(7, 'testing', 'Request A Call', 'suryaprasadtripathy8@gmail.com', '9898989898', 'http://localhost/luxurycarsemporio/car-detail/175', '', 'fgghjf', '2021-12-09 11:08:39'),
(8, 'testing', 'Request A Call', 'vikas@orrish.com', '9999999999', 'http://localhost/luxurycarsemporio/car-detail/175', '', 'bfchvgbc', '2021-12-09 11:09:04'),
(9, 'testing', 'Request A Call', 'suryaprasadtripathy8@gmail.com', '2323232323', 'http://localhost/luxurycarsemporio/car-detail/175', '', 'hii', '2021-12-09 11:12:35'),
(10, '', '', '', '', '', '', '', '2021-12-09 11:12:45'),
(11, 'testing', 'Request A Call', 'vikas@orrish.com', '9898989898', 'http://localhost/luxurycarsemporio/car-detail/175', '', 'fdgdg', '2021-12-09 11:16:47'),
(12, 'testing', 'Request A Call', 'suryaprasadtripathy8@gmail.com', '9898989898', 'http://localhost/luxurycarsemporio/car-detail/175', '', 'hgjnghj', '2021-12-09 11:18:14'),
(13, 'testing', 'Request A Call', 'vikas@orrish.com', '3433443333', 'http://localhost/luxurycarsemporio/car-detail/174', '', 'dszfds', '2021-12-09 11:28:50'),
(14, 'testing', 'Request A Call', 'suryaprasadtripathy8@gmail.com', '3433443333', 'http://localhost/luxurycarsemporio/car-detail/174', '', 'xcvxcv', '2021-12-09 11:30:18'),
(15, 'testing', 'Request A Call', 'suryaprasadtripathy8@gmail.com', '9999999999', 'http://localhost/luxurycarsemporio/car-detail/174', '', 'dfsdf', '2021-12-09 11:31:18'),
(16, 'testing', 'Request A Call', 'abhayorrish@gmail.com', '3433443333', 'http://localhost/luxurycarsemporio/car-detail/174', '', 'dsfsd', '2021-12-09 11:33:07'),
(17, '', '', '', '', '', '', '', '2021-12-09 11:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `style_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `sell_status` tinyint(4) NOT NULL DEFAULT 1,
  `price` float NOT NULL,
  `model` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `view` varchar(50) NOT NULL,
  `driven` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `seller` varchar(200) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `p_file` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `meta_title` varchar(300) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(300) NOT NULL,
  `sco_Keyword` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `style_id`, `cat_id`, `name`, `status`, `sell_status`, `price`, `model`, `location`, `view`, `driven`, `fuel`, `seller`, `transmission`, `owner`, `p_file`, `description`, `features`, `meta_title`, `meta_description`, `meta_keywords`, `sco_Keyword`, `created_at`, `updated_at`) VALUES
(167, 9, 16, 'MUSTANG GT V8', 1, 1, 178000, '2000', 'RAJOURI GARDEN', '1787', '5000', 'Diesel', 'Individual', 'Automatic', 'First', '81d7df636f43ab21f1cb752c16bfe7c4.jpeg', '', '', '', '', '', '', '2021-12-09 07:12:36', '0000-00-00 00:00:00'),
(174, 9, 16, 'MERCEDES BENZ GL350D 4 MATIC', 1, 1, 50080, '2019', 'RAJOURI GARDEN', '5004', '79000', 'Diesel', 'Individual', 'Automatic', 'First', '72c6d10d5e5fbfd47703bd88a4cb0a61.jpeg', '', '', '', '', '', '', '2021-12-09 07:12:40', '0000-00-00 00:00:00'),
(175, 9, 16, 'Mercedes Benz GLA 200d Sports', 1, 1, 50000, '2015', ' DELHI RAJOURI GARDEN', '1278', '2000', 'Diesel', 'Individual', 'Automatic', 'Second', '4388e585a92c4ea455fda52a5ca84821.jpeg', '', 'werwer 1', 'Meta Tag Title', 'Meta Tag Description', 'Meta Tag Keywords', 'Default', '2021-12-09 07:12:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_images`
--

CREATE TABLE `tbl_product_images` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `prensent_id` int(11) DEFAULT NULL,
  `file` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_images`
--

INSERT INTO `tbl_product_images` (`id`, `name`, `type`, `prensent_id`, `file`, `created_at`) VALUES
(51, 'Mercedes Benz GLA 200d Sports 1', 'exterior', 175, 'dc5974eb8b56d506b70bad2e5503644d.jpeg', '2021-12-09 05:56:50'),
(53, 'Mercedes Benz GLA 200d Sports 2', 'exterior', 175, '7668fe1f572e35cf476e19349a9c0e65.jpeg', '2021-12-09 05:56:38'),
(54, 'Mercedes Benz GLA 200d Sports 3', 'exterior', 175, '1baaa974559afcedb6c80afac56bb7d7.jpeg', '2021-12-09 05:56:24'),
(55, 'Mercedes Benz GLA 200d Sports 4', 'exterior', 175, 'bbf961a1fc3b13a4d0fd09917e08684f.jpeg', '2021-12-09 05:55:53'),
(56, 'Mercedes Interior 1', 'interior', 175, 'e54de192381040fde3cf08cb7998260b.jpg', '2021-12-08 19:55:44'),
(57, 'Mercedes Interior 2', 'interior', 175, '054b0ac0f932d00e805c65bcf1ab82b8.jpg', '2021-12-08 19:56:06'),
(58, 'Mercedes Interior 3', 'interior', 175, 'a4ed25d2df2ef7e1b13b104fb98049f0.jpg', '2021-12-08 19:56:47'),
(59, 'MUSTANG GT V8', 'exterior', 167, 'dc6879b0283c91e4481876812a806de5.jpg', '2021-12-08 19:59:26'),
(60, 'MUSTANG GT V8 3', 'exterior', 167, 'de44987c235c170756abf07efb1acc1c.jpg', '2021-12-08 20:00:37'),
(61, 'testing', 'interior', 174, 'ee19b2d176da95ff03e0275efc34bb64.jpg', '2021-12-09 05:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `profile`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 'Ngo Nishivarth', 'ngo@gmail.com', '8750908036', '10a04d63674f81bccb90f7922d8e6ff2.png', '2021-01-02 09:57:36', '$2y$10$nuqfYKkpelFnR82iFd8A2e9oQ1VOTIU3Cj0/RMEfcgKIzn8BSi43G', NULL, 1, '2021-01-02 09:42:08', '2021-01-02 09:57:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslater`
--
ALTER TABLE `newslater`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newslater_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`(768));

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_car_style`
--
ALTER TABLE `tbl_car_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquery`
--
ALTER TABLE `tbl_enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `newslater`
--
ALTER TABLE `newslater`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_car_style`
--
ALTER TABLE `tbl_car_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_enquery`
--
ALTER TABLE `tbl_enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tbl_product_images`
--
ALTER TABLE `tbl_product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
