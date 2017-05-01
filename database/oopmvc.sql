-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 01:37 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_category`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(7, 'LG'),
(8, 'OPPO');

-- --------------------------------------------------------

--
-- Table structure for table `pagination`
--

CREATE TABLE IF NOT EXISTS `pagination` (
  `students` int(11) NOT NULL,
  `products` int(11) NOT NULL,
  `categories` int(11) NOT NULL,
  `users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pagination`
--

INSERT INTO `pagination` (`students`, `products`, `categories`, `users`) VALUES
(5, 2, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `details` text,
  `introduce` text,
  `photo` varchar(255) DEFAULT NULL,
  `id_category` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `introduce`, `photo`, `id_category`) VALUES
(18, 'iphone 5 ahi', 'Chi tiet cau hinh o day', 'Gioi thieu san pham o day', '148920491186731.png', 1),
(19, 'iphone 6', 'Chi tiet cau hinh o day', 'Gioi thieu san pham o day', '148954232492512.png', 1),
(20, 'iphone 7', 'Chi tiet cau hinh o day', 'Gioi thieu san pham o day', '148954233294092.jpg', 1),
(21, 'Samsung Galaxy S5', 'Chi tiet cau hinh o day', 'Gioi thieu san pham o day', '148954268659866.jpg', 2),
(22, 'Samsung Galaxy S6', 'Chi tiet cau hinh o day', 'Gioi thieu san pham o day', '148954269923741.png', 2),
(23, 'LG V10', 'Details', 'Introduce', '148920506846746.png', 7),
(25, 'Galaxy S7', 'chi tiet', 'gioi thieu', '148954270951039.png', 2),
(36, 'OPPO R1 cccc', 'OPPO R1', 'OPPO R1', '148954274074973.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `classname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `address`, `phone`, `photo`, `classname`) VALUES
(14, 'Modi Bixa 1', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '148948397745065.jpg', '04T2'),
(15, 'Modi bixa 2', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '142057577628814.jpg', '04T1'),
(16, 'Modi bixa 3', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '142057579643359.jpg', '04T2'),
(17, 'Modi Bixa 4', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '142057582214441.jpg', '04T2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(8, 'admin', '5f837320f1596df90dd53472e2bb276e', 'admin', 'admin'),
(9, 'admin2', '5f837320f1596df90dd53472e2bb276e', 'admin2', 'admin2'),
(13, 'admin4', '5f837320f1596df90dd53472e2bb276e', 'admin4', 'admin4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
