-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 01:30 PM
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
-- Database: `niswarthsewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ns_blog`
--

CREATE TABLE `ns_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags_data` varchar(300) NOT NULL,
  `comment` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `description` longtext NOT NULL,
  `publish_date` date NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `file` varchar(200) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ns_blog`
--

INSERT INTO `ns_blog` (`id`, `title`, `tags_data`, `comment`, `status`, `description`, `publish_date`, `meta_title`, `meta_description`, `meta_keywords`, `file`, `short_description`, `created_at`, `updated_at`) VALUES
(2, 'Now, mothers won’t lose their lives while on their way to give birth ', 'Clothes | Books | Statianery | Appliances | ', 9, 0, '<p><strong>#Menstruation has always been one of the most disregarded issues in India. The #taboo and stigma attached to it makes it all the more frustrating to address the complexities of problems menstruators face in India.</strong></p>\r\n<p>Like in the case of villages where there are a very few, extremely small, and badly constructed private spaces. Either there isn’t a roof or it’s a mud structure with no sewage pipes, or barely a structure at all. Thus, even changing pads in these conditions is a challenge on its own. Moreover, in most cases the water from the bathroom ends up running across the road, which becomes an embarrassment for the users, leading them to not bathe for those four days of menstruation. It doesn’t end there. There is no relief even at home…the houses are usually very small with at least 4-5 people present at all times, so how do the women change pads there? On top of that, the availability of pads in itself is a luxury most of the time. Usually, the women end up looking for dirty clothes to use, which does a lot of damage to the body. Cervical cancer, Hepatitis-B, and other diseases related to reproductive and urinary systems, to name a few, are risks these women and girls face all the time. The circumstances are dire, and cause both physical and mental harm. In disaster-prone environments, women and adolescent girls face numerous more obstacles. Many have reverted to using ash and hay covered in rags during their periods due to lack of access to even clean cloth, let alone pads. Goonj, under its #Rahat initiative, reaches the much required relief to them by channelizing Family Kits including clothes, food, and basic amenities. To address the plight of the menstruators, with these kits, MY Pads (cloth sanitary pads made in-house) are also channelized. Through our ‘Not Just a Piece of Cloth’ #NJPC initiative’s ‘Chuppi Todo Baithak’ (awareness sessions), our teams also tell them how to make cloth pads at home and make them aware of the importance of menstrual health and hygiene.</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<p>During the #Covid phase itself, more than 1.55 million</p>\r\n<p>MY Pads and 12.30 million kg of ration and other essentials have been channelized to people across India. However the need remains huge. We are there. Need you too.</p>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<blockquote>\r\n<p>\"MY Pads and 12.30 million kg of ration and other essentials have been channelized to people across India. However the need remains huge. We are there. Need you too.</p>\r\n</blockquote>\r\n</div>\r\n</div>', '2022-01-27', 'Clothes | Books | Statianery | Appliances | ', 'Clothes | Books | Statianery | Appliances | ', 'Clothes | Books | Statianery | Appliances | ', '30aa1be833eb5145c487f68f278c26ca.jpg', 'Karamba, a remote village in the Hazaribagh district of Jharkhand, houses just 19 families. To reach the village, one has to cross 3 km of dense forest and a rivulet.', '2022-01-20 10:43:46', '2022-01-20 07:44:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ns_blog`
--
ALTER TABLE `ns_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ns_blog`
--
ALTER TABLE `ns_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
