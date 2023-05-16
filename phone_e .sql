-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 09:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_e`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`cat_id`, `cat_name`) VALUES
(2, 'iphone_14_pro_max'),
(3, 'apple_ipad'),
(4, 'playstation_5'),
(5, 'playstation_4'),
(6, 'xbox_one'),
(7, 'controller'),
(8, 'playstaion_attachment'),
(9, 'apple_head_phones'),
(10, 'speakers_headphones'),
(11, 'apple_watch'),
(12, 'iphone_13_pro_max'),
(13, 'iphone_13'),
(14, 'iphone_13_mini'),
(15, 'iphone_12_pro_max'),
(16, 'iphone_12'),
(17, 'iphone_12_mini'),
(18, 'apple_laps'),
(19, 'apple_cover'),
(20, 'apple_ipad'),
(21, 'power_bank'),
(22, 'mouse_and_keybord_gaming'),
(23, 'microphones'),
(24, 'sensoris_and_figrez'),
(25, 'rgb_lights'),
(26, 'random_speakers'),
(27, 'iphone_13_pro'),
(28, 'iphone_14_pro'),
(29, 'iphone_14_plus'),
(30, 'iphone_14'),
(31, 'Galaxy_s_23_ultra');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `price_after` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `img`, `name`, `description`, `price`, `cate_id`, `price_after`, `total_price`) VALUES
(8, '6463d5385af3b496.png', 'ايفون 14', 'SET FOREIGN_KEY_CHECKS=0;\r\nSET FOREIGN_KEY_CHECKS=0;\r\n', 1000, 2, 500, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `name_of_link` varchar(2555) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `name_of_link`, `link`) VALUES
(2, 'حسابنا على واتساب', 'https://wda.me'),
(3, 'حسابنا على تويتر', 'https://wa.me		'),
(5, 'حسابنا ع فيسبوك', 'werewr'),
(6, 'إيميل الموقع', 'wetwertwertwer'),
(7, 'الرقم الضريبي ', '1900000123');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_cart`
--

CREATE TABLE `tmp_cart` (
  `id` int(11) NOT NULL,
  `user_lim` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tmp_cart`
--

INSERT INTO `tmp_cart` (`id`, `user_lim`, `item_id`, `quantity`, `created_at`) VALUES
(12327, '7n4g3p94ldkgn19ahnjh9ogsec', 8, 3, '2023-05-16 19:10:53'),
(12328, 'bc6g7siaoc9numm3b4v35iufhl', 8, 3, '2023-05-16 19:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(3, 'izzo', 'izzedeenalfarra123@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `product_cate` (`cate_id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmp_cart`
--
ALTER TABLE `tmp_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tmp_cart`
--
ALTER TABLE `tmp_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12329;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_cate` FOREIGN KEY (`cate_id`) REFERENCES `cate` (`cat_id`);

--
-- Constraints for table `tmp_cart`
--
ALTER TABLE `tmp_cart`
  ADD CONSTRAINT `tmp_cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `products` (`Prod_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
