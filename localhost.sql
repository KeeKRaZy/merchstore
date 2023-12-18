-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2023 at 11:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `text` varchar(500) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(50) DEFAULT NULL,
  `product` varchar(30) DEFAULT NULL,
  `rating` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `date`, `email`, `product`, `rating`) VALUES
(3, 'Thanks for this t-shirt', '2023-12-18 02:46:17', 'qweqwe@gmail.com', '2', 5),
(4, 'Best backpack in this world!', '2023-12-18 02:48:50', 'qweqwe@gmail.com', '5', 5),
(5, 'Best backpack in this world!', '2023-12-18 02:50:40', 'qweqwe@gmail.com', '5', 5),
(6, 'Pretty good, but backpack Roberrrt! was better', '2023-12-18 02:51:07', 'qweqwe@gmail.com', '7', 4),
(7, 'This shit is crazy!', '2023-12-18 13:22:26', 'qweqwe@gmail.com', '4', 5),
(8, 'This shit is crazy!', '2023-12-18 13:27:43', 'qweqwe@gmail.com', '4', 5),
(9, 'This shit is crazy!', '2023-12-18 13:27:44', 'qweqwe@gmail.com', '4', 5),
(10, 'Pretty good', '2023-12-18 13:27:58', 'qweqwe@gmail.com', '6', 4),
(11, 'faw', '2023-12-18 13:28:42', 'qweqwe@gmail.com', '6', 1),
(12, 'faw', '2023-12-18 13:31:32', 'qweqwe@gmail.com', '6', 1),
(13, 'I love it!', '2023-12-18 13:31:46', 'qweqwe@gmail.com', '2', 5),
(14, 'I love it!', '2023-12-18 13:33:25', 'qweqwe@gmail.com', '2', 4),
(15, 'Nice! Thank you very much', '2023-12-18 13:33:45', 'qweqwe@gmail.com', '6', 5),
(16, 'Pretty good', '2023-12-18 13:59:07', 'qweqwe@gmail.com', '2', 3),
(17, 'NICE NICE NICE', '2023-12-18 13:59:14', 'qweqwe@gmail.com', '2', 5),
(18, 'Very cool!@ best ', '2023-12-18 13:59:23', 'qweqwe@gmail.com', '2', 5),
(19, 'dawdiogjaiwuojd9ija98wjd9f8jwamdawdjadhawdadcv', '2023-12-18 13:59:31', 'qweqwe@gmail.com', '2', 5),
(20, 'ok', '2023-12-18 13:59:36', 'qweqwe@gmail.com', '2', 4),
(21, 'Best!', '2023-12-18 14:41:05', 'qweqwe@gmail.com', '2', 5),
(23, 'I like, but could be better', '2023-12-18 18:46:07', 'ferda@gmail.com', '2', 5),
(24, 'Super!', '2023-12-18 23:29:51', 'goolgap000@gmail.com', '1', 5),
(25, 'Super!', '2023-12-18 23:30:22', 'goolgap000@gmail.com', '4', 5),
(26, 'Super!', '2023-12-18 23:30:49', 'goolgap000@gmail.com', '1', 5),
(27, 'Super!', '2023-12-18 23:30:51', 'goolgap000@gmail.com', '1', 5),
(28, 'Unbel;ievable bro', '2023-12-18 23:32:31', 'goolgap000@gmail.com', '3', 5),
(29, 'Mega cool, i love it', '2023-12-18 23:33:01', 'dsadsa@gmail.com', '3', 4),
(30, '.', '2023-12-18 23:33:13', 'DWA@gmail.com', '3', 5),
(31, 'Good', '2023-12-18 23:37:06', 'DWA@gmail.com', '7', 5),
(32, 'top', '2023-12-18 23:37:06', 'ferda@gmail.com', '7', 5),
(33, 'soso', '2023-12-18 23:37:06', 'goolgap000@gmail.com', '7', 4),
(34, 'fine', '2023-12-18 23:37:06', 'dsadsa@gmail.com', '7', 4),
(35, 'bad', '2023-12-18 23:37:06', 'ferda@gmail.com', '7', 5),
(36, 'love', '2023-12-18 23:37:54', 'DWA@gmail.com', '8', 5),
(37, 'shit', '2023-12-18 23:37:54', 'ferda@gmail.com', '8', 2),
(38, 'i dk', '2023-12-18 23:37:54', 'goolgap000@gmail.com', '8', 4),
(39, 'awesome', '2023-12-18 23:37:54', 'dsadsa@gmail.com', '8', 4),
(40, 'yes', '2023-12-18 23:37:54', 'ferda@gmail.com', '8', 5),
(41, 'supa dupa', '2023-12-18 23:38:39', 'DWA@gmail.com', '8', 5),
(42, 'mega', '2023-12-18 23:38:39', 'ferda@gmail.com', '8', 5),
(43, 'star', '2023-12-18 23:38:39', 'goolgap000@gmail.com', '8', 4),
(44, 'hreat', '2023-12-18 23:39:05', 'dsadsa@gmail.com', '8', 5),
(45, 'sad', '2023-12-18 23:39:05', 'ferda@gmail.com', '8', 3),
(46, 'freak', '2023-12-18 23:39:42', 'dsadsa@gmail.com', '10', 5),
(47, 'not so good', '2023-12-18 23:39:42', 'ferda@gmail.com', '10', 3),
(48, 'base', '2023-12-18 23:40:20', 'dsadsa@gmail.com', '9', 5),
(49, 'nothig', '2023-12-18 23:40:20', 'ferda@gmail.com', '9', 3),
(50, 'ok', '2023-12-18 23:40:20', 'DWA@gmail.com', '9', 2),
(51, 'ok', '2023-12-18 23:40:38', 'dsadsa@gmail.com', '11', 4),
(52, 'ok', '2023-12-18 23:40:38', 'ferda@gmail.com', '11', 4),
(53, 'ok', '2023-12-18 23:40:38', 'DWA@gmail.com', '11', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `nr` int NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fullPrice` float DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `orderEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `orderName` varchar(50) DEFAULT NULL,
  `orderSurname` varchar(50) DEFAULT NULL,
  `orderAddress` varchar(50) DEFAULT NULL,
  `paymentMethod` varchar(20) DEFAULT NULL,
  `saturs` varchar(500) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`nr`, `status`, `fullPrice`, `date`, `orderEmail`, `orderName`, `orderSurname`, `orderAddress`, `paymentMethod`, `saturs`, `email`) VALUES
(129, 'Shipped', 169.95, '2023-12-17 19:24:12', 'qweqwe@gmail.com', 'Vasya', 'Erkin', 'Geramny, Gwazebr 34', 'On the spot', 'Embodiment of Greed,(M),1;Embodiment of Greed,(XL),1;Leap to Heaven,(M),1;Guardian Ape,(L),4;', 'qweqwe@gmail.com'),
(130, 'Pending', 169.94, '2023-12-17 19:25:32', 'segma@gmail.com', 'Belka', 'Bobrik', 'Fin, Remalo street', 'On the spot', 'Guardian Ape,(XL),2;Hesitation is Defeat,(L),3;The Gentle Blade,(S),1;', 'qweqwe@gmail.com'),
(131, 'Shipped', 50.01, '2023-12-17 19:28:50', 'palcevskis43@gmail.com', 'Nikita', 'Palcevskis', 'Ilukstes 43', 'On the spot', 'Prepare to die,,1;Guardian Ape,(M),1;Leap to Heaven,(M),1;', 'palcevskis43@gmail.com'),
(132, 'Pending', 209.96, '2023-12-17 21:36:46', 'qweqwe@gmail.com', 'Vasya', 'Erkin', 'Geramny, Gwazebr 34', 'On the spot', 'Prepare to die,,1;Embodiment of Greed,(M),1;Embodiment of Greed,(L),1;Roberrrrrrt!!,,1;Blood Enemy,(XL),1;Blood Enemy,(XS),1;', 'qweqwe@gmail.com'),
(133, 'Pending', 49.99, '2023-12-18 18:45:49', 'ferda@gmail.com', 'Miguel', 'Andreo', 'Raboungue street, 14', 'On the spot', 'Embodiment of Greed,(M),1;Embodiment of Greed,(XL),1;Prepare to die,,1;', 'ferda@gmail.com'),
(134, 'Pending', 29.99, '2023-12-18 21:39:51', 'palcevskis43@gmail.com', 'Nikita', 'Palcevskis', 'frequa 13, Latvia', 'On the spot', 'Guardian Ape,(M),1;', 'palcevskis43@gmail.com'),
(135, 'Pending', 299.96, '2023-12-18 21:42:49', 'palcevskis43@gmail.com', 'Nikita', 'Palcevskis', 'Fin, Remalo street', 'On the spot', 'The Gentle Blade,(M),1;Prepare to die,,1;Guardian Ape,(M),1;Roberrrrrrt!!,,1;Leap to Heaven,(M),1;Blood Enemy,(M),1;A Heart Attack,,1;Wolf... Thank... You...,(M),1;Hesitation is Defeat,(M),1;Shadow Of A Death,(M),1;', 'palcevskis43@gmail.com'),
(136, 'Pending', 709.8, '2023-12-18 23:04:30', 'palcevskis43@gmail.com', 'Nikita', 'Palcevskis', 'Rich man 43, Greece', 'On the spot', 'Guardian Ape,(M),1;Prepare to die,,1;Roberrrrrrt!!,,1;Blood Enemy,(M),18;Blood Enemy,(L),1;', 'palcevskis43@gmail.com'),
(137, 'Shipped', 39.99, '2023-12-19 00:15:58', 'werd@gmail.com', 'Bla Bla', 'Werd', 'Bengo 14', 'On the spot', 'Shadow Of A Death,(M),1;', 'werd@gmail.com'),
(138, 'Pending', 40, '2023-12-19 00:16:42', 'werd@gmail.com', 'Bla Bla', 'Werd', 'Niglon 54, Nigeria', 'On the spot', 'Prepare to die,,1;Guardian Ape,(M),1;', 'werd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `discription` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `type`, `price`, `material`, `discription`) VALUES
(1, 'The Gentle Blade', 'T-shirt', 19.99, 'Polyester', 'A minimalist black tee featuring an artistic silhouette of Sekiro mid-sword strike. Simple, bold, and perfect for any fan of clean design.<br><br>Image is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nComposition: 100% of one material.<br>\nDensity 190 G/m².'),
(2, 'Embodiment of Greed', 'T-shirt', 19.99, 'Viscose', 'Dive into the serene with a watercolor-inspired tee showcasing the Divine Heir overlooking a cherry blossom.<br><br>\n\nImage is machine embroidered<br>\nSet comes with a SekiroMerch box..<br>\nComposition: 100% of one material..<br>\nDensity 190 G/m².'),
(3, 'Prepare to die', 'Phone case', 10.01, 'Nylon', 'Protect your phone in style with a sleek case featuring the intricate design of Sekiro\'s katana, Kusabimaru. A perfect blend of elegance and functionality.'),
(4, 'Guardian Ape', 'Hoodie', 29.99, 'Futer', 'Keep warm in an Ashina Castle crest hoodie, showcasing the emblem of one of the game\'s iconic locations. Stylish, comfortable, and perfect for chilly adventures.Image is machine embroidered.\nSet comes with a SekiroMerch box.Density 190 G/m²'),
(5, 'Roberrrrrrt!!', 'Bag', 99.99, 'Nylon', 'Carry your essentials in a backpack adorned with intricate Shinobi scrolls. Durable, spacious, and designed for those always on the move.<br><br>\n\nImage is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nDensity 190 G/m².'),
(6, 'Leap to Heaven', 'Cap', 10.01, 'Cotton', 'Top off your look with a cap embroidered with the Sen coin symbol. Whether youre outdoors or just want to add a touch of Sekiro to your outfit, this cap is the perfect accessory.<br><br>\n\nImage is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nDensity 190 G/m².<br>'),
(7, 'Blood Enemy', 'T-shirt', 29.99, 'Cotton', 'Embrace the beauty of the sunset with a tee depicting Sekiro in a tranquil pose against a vibrant backdrop. A perfect blend of calm and intensity.<br><br>\n\nImage is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nComposition: 100% of one material.<br>\nDensity 190 G/m².'),
(8, 'A Heart Attack', 'Mask', 10.01, 'Cotton', 'Stay protected with a face mask inspired by the mysterious Mist Raven. Practical and stylish, this mask is perfect for everyday wear.<br><br>\n\nImage is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nComposition: 100% of one material.<br>\nDensity 190 G/m².'),
(9, 'Wolf... Thank... You...', 'T-shirt', 19.99, 'Viscose', 'Wear the power of the Dragons Blood kanji with a tee featuring bold and stylish typography. Make a statement wherever you go.<br>\n\nImage is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nComposition: 100% of one material.<br>\nDensity 190 G/m².'),
(10, 'Hesitation is Defeat', 'Hoodie', 29.99, 'Polyester', 'Channel the spirit of the Sculptors workshop with our hoodie. Stay cozy while paying homage to the art of creation.<br><br>\n\nImage is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nComposition: 100% of one material.<br>\nDensity 190 G/m².'),
(11, 'Shadow Of A Death', 'Hoodie', 39.99, 'Futer', 'Step into the moonlight with a hoodie capturing the essence of a stealthy shinobi. Subtle moonlit details make this hoodie a must-have for the night owls.<br><br>\n\nImage is machine embroidered.<br>\nSet comes with a SekiroMerch box.<br>\nComposition: 100% of one material.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `surname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adress` varchar(30) DEFAULT NULL,
  `role` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `surname`, `adress`, `role`) VALUES
(59, 'palcevskis43@gmail.com', '685e045f7dd68b5425772956a269e5d0', 'Nikita', 'Palcevskis', NULL, 'admin'),
(60, 'goolgap000@gmail.com', '685e045f7dd68b5425772956a269e5d0', 'Nikita', 'Palcevskis', NULL, 'user'),
(62, 'dsadsa@gmail.com', '685e045f7dd68b5425772956a269e5d0', 'dsa', 'dsa', NULL, 'admin'),
(64, 'DWA@GMAIL.COM', '8ce6b7bce1617d66c656903e1dc34c2b', 'NIKITA', 'DWA', 'Ilukstes 43', 'user'),
(65, 'qweqwe@gmail.com', '84598004075957c2d3052d1c32f44329', 'Vasya', 'Erkin', 'Geramny, Gwazebr 34', 'user'),
(66, 'ferda@gmail.com', '681094d8fb3fa9515b354e48326bea5d', 'Miguel', 'Andreo', NULL, 'user'),
(67, 'werd@gmail.com', '98a7925a4473561cb75affb817d7fdad', 'Bla Bla', 'Werd', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`nr`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `nr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
