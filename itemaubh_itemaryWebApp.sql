-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2022 at 06:49 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itemaubh_itemaryWebApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_admin`
--

CREATE TABLE `item_admin` (
  `id` int(11) NOT NULL,
  `name` text,
  `email` text,
  `phone` text,
  `image` text NOT NULL,
  `status` enum('A','D') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_admin`
--

INSERT INTO `item_admin` (`id`, `name`, `email`, `phone`, `image`, `status`, `created_at`, `password`) VALUES
(1, 'krishna', 'admin@gmail.com', '1234', '', '', '2022-07-09 15:24:13', '123');

-- --------------------------------------------------------

--
-- Table structure for table `item_banner`
--

CREATE TABLE `item_banner` (
  `id` int(11) NOT NULL,
  `name` text,
  `image` text,
  `created_at` datetime DEFAULT NULL,
  `status` enum('A','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_banner`
--

INSERT INTO `item_banner` (`id`, `name`, `image`, `created_at`, `status`) VALUES
(1, 'home banner', '14e07af8657ee805b1b391bba070cb5d.png', NULL, 'A'),
(2, 'home banner', 'd84047293da03bb274c6bd6b4b7b94af.png', NULL, 'A'),
(3, 'home banner', '325fb1129c5674e1ae64cb722fbb21ee.png', NULL, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `item_contact`
--

CREATE TABLE `item_contact` (
  `id` int(11) NOT NULL,
  `name` text,
  `email` text,
  `subject` text,
  `message` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` enum('A','D') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_contact`
--

INSERT INTO `item_contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `status`) VALUES
(3, 'krishna bhardwaj', 'eemail.krishna@gmail.com', 'ddskdjsk', 'jdksjdksj', '2022-07-30 13:07:06', 'A'),
(4, 'krishna bhardwaj', 'eemail.krishna@gmail.com', 'this is for testing purpose', 'krishna', '2022-07-30 13:08:11', 'A'),
(23, 'krishna bhardwaj', 'eemail.krishna@gmail.com', 'ddskdjsk', 'ddfd', '2022-07-30 16:03:24', 'A'),
(27, 'krishna', 'eemail.krishna@gmail.com', 'kkkk', 'hjkkjhjhkhihhiuiuiuiu', '2022-08-01 10:11:15', 'A'),
(28, 'krishna bhardwaj', 'admin@gmail.com', 'ddskdjsk', 'dfskjfjkfskj', '2022-08-01 10:37:48', 'A'),
(29, 'krishna bhardwaj', 'eemail.krishna@gmail.com', 'fdfjdk', 'dkdjkvdj', '2022-08-02 10:10:32', 'A'),
(30, 'krishna bhardwaj', 'eemail.krishna@gmail.com', 'fdfjdk', 'dkdjkvdj', '2022-08-02 10:11:06', 'A'),
(31, 'krishna bhardwaj', 'eemail.krishna@gmail.com', 'fdfjdk', 'dkdjkvdj', '2022-08-02 10:11:09', 'A'),
(32, 'krishna bhardwaj', 'eemail.krishna@gmail.com', '7t8uio', 'vgfgf', '2022-08-02 10:12:14', 'A'),
(33, 'krsh', 'eemail.krishna@gmail.com', 'fdfjdk', 'fd', '2022-09-17 15:20:37', 'A'),
(34, 'Eric Jones', 'ericjonesmyemail@gmail.com', 'how to turn eyeballs into phone calls', 'Hi, Eric here with a quick thought about your website itemary.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://boostleadgeneration.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://boostleadgeneration.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://boostleadgeneration.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://boostleadgeneration.com/unsubscribe.aspx?d=itemary.com\r\n', '2022-09-21 23:45:57', 'A'),
(35, 'www', 'wwww@gmail.com', 'wwwww', 'www', '2022-09-23 12:57:50', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `item_customer`
--

CREATE TABLE `item_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text,
  `address_type` tinytext,
  `pincode` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('A','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_customer`
--

INSERT INTO `item_customer` (`id`, `name`, `email`, `mobile`, `address`, `address_type`, `pincode`, `created_at`, `status`) VALUES
(1, 'krishna', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 276403, '2022-08-01 15:19:41', ''),
(2, 'Arun chauhan', 'admin@gmail.com', 'fdklfjdk', 'annupar', 'Office', 201301, '2022-08-03 17:03:44', 'A'),
(3, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-03 17:05:18', 'A'),
(4, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-03 17:06:32', 'A'),
(5, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-03 17:07:25', 'A'),
(6, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-03 17:09:45', 'A'),
(7, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-03 17:10:06', 'A'),
(8, '', '', '', '', 'Home', 0, '2022-08-03 17:11:19', 'A'),
(9, '', '', '', '', 'Home', 0, '2022-08-03 17:11:44', 'A'),
(11, 'kkk', 'ffffkk', 'kkk', 'jj', 'Home', 0, '2022-08-03 17:37:13', 'A'),
(12, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-04 10:45:40', 'A'),
(13, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-04 10:46:40', 'A'),
(14, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-08-04 10:49:53', 'A'),
(15, '', '', '', '', 'Home', 0, '2022-08-04 11:32:59', 'A'),
(16, '', '', '', '', 'Home', 0, '2022-08-04 11:33:31', 'A'),
(17, '', '', '', '', 'Home', 0, '2022-08-04 11:34:27', 'A'),
(18, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 07:18:34', 'A'),
(19, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 07:19:20', 'A'),
(20, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:53:43', 'A'),
(21, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:54:20', 'A'),
(22, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:54:45', 'A'),
(23, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:55:14', 'A'),
(24, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:55:29', 'A'),
(25, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:57:22', 'A'),
(26, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:57:48', 'A'),
(27, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 12:59:36', 'A'),
(28, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 01:00:06', 'A'),
(29, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 01:00:39', 'A'),
(30, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 01:04:01', 'A'),
(31, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 01:18:00', 'A'),
(32, 'krishna  sssss', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 201301, '2022-09-20 01:24:15', 'A'),
(33, 'krishna kk', 'admin@gmail.com', '9140934715', 'village annupar kerma ', 'Office', 276405, '2022-09-20 02:25:08', 'A'),
(34, 'Saksham Mishra', 'shakshammishra1997@gmail.com', '09992774351', 'Flat No. 669 2nd Floor', 'Home', 276402, '2022-09-20 05:56:53', 'A'),
(35, 'Salona Bhowmick', 'salona07@gmail.com', '+919910660017', '302 Tower Tulip , DIVINE MEADOWS APARTMENTS', 'Home', 201304, '2022-09-23 05:25:45', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `item_orders`
--

CREATE TABLE `item_orders` (
  `id` bigint(20) NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `product_qty` bigint(100) NOT NULL,
  `total` int(100) NOT NULL,
  `details` text NOT NULL,
  `product_unit` text NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `order_id` text NOT NULL,
  `img` text,
  `payment_mode` text NOT NULL,
  `delivery_time` text NOT NULL,
  `status` enum('A','D') NOT NULL,
  `rep_status` enum('A','D') NOT NULL,
  `replace_reason` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_orders`
--

INSERT INTO `item_orders` (`id`, `product_id`, `qty`, `product_qty`, `total`, `details`, `product_unit`, `customer_id`, `order_id`, `img`, `payment_mode`, `delivery_time`, `status`, `rep_status`, `replace_reason`, `created_at`, `updated_at`) VALUES
(64, 30, 0, 3, 900, '', 'kg', 4, 'item729512', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', '17 Sep 4:00 PM ', 'A', 'A', '', '2022-09-17 14:35:41', '2022-09-17 09:05:41'),
(65, 32, 0, 5, 900, '', 'kg', 4, 'item729512', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', '17 Sep 4:00 PM ', 'A', 'A', '', '2022-09-17 14:35:41', '2022-09-17 09:05:41'),
(66, 30, 0, 13, -354, '', 'g', 4, 'item664520', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:39:31', '2022-09-17 11:09:31'),
(67, 32, 0, -8, -354, '', 'kg', 4, 'item664520', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:39:31', '2022-09-17 11:09:31'),
(68, 31, 0, 2, -354, '', 'kg', 4, 'item664520', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:39:31', '2022-09-17 11:09:31'),
(69, 38, 0, 2, -354, '', 'kg', 4, 'item664520', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:39:31', '2022-09-17 11:09:31'),
(70, 30, 0, 13, 586, '', 'g', 4, 'item274195', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:54:43', '2022-09-17 11:24:43'),
(71, 32, 0, 10, 586, '', 'kg', 4, 'item274195', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:54:43', '2022-09-17 11:24:43'),
(72, 31, 0, -2, 586, '', 'kg', 4, 'item274195', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:54:43', '2022-09-17 11:24:43'),
(73, 38, 0, 2, 586, '', 'kg', 4, 'item274195', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:54:43', '2022-09-17 11:24:43'),
(74, 30, 0, 13, 586, '', 'g', 4, 'item626874', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:02', '2022-09-17 11:25:02'),
(75, 32, 0, 10, 586, '', 'kg', 4, 'item626874', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:02', '2022-09-17 11:25:02'),
(76, 31, 0, -2, 586, '', 'kg', 4, 'item626874', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:02', '2022-09-17 11:25:02'),
(77, 38, 0, 2, 586, '', 'kg', 4, 'item626874', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:02', '2022-09-17 11:25:02'),
(78, 30, 0, 13, 586, '', 'g', 4, 'item919121', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:58', '2022-09-17 11:25:58'),
(79, 32, 0, 10, 586, '', 'kg', 4, 'item919121', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:58', '2022-09-17 11:25:58'),
(80, 31, 0, -2, 586, '', 'kg', 4, 'item919121', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:58', '2022-09-17 11:25:58'),
(81, 38, 0, 2, 586, '', 'kg', 4, 'item919121', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:55:58', '2022-09-17 11:25:58'),
(82, 30, 0, 13, 586, '', 'g', 4, 'item961580', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:11', '2022-09-17 11:26:11'),
(83, 32, 0, 10, 586, '', 'kg', 4, 'item961580', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:11', '2022-09-17 11:26:11'),
(84, 31, 0, -2, 586, '', 'kg', 4, 'item961580', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:11', '2022-09-17 11:26:11'),
(85, 38, 0, 2, 586, '', 'kg', 4, 'item961580', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:11', '2022-09-17 11:26:11'),
(86, 30, 0, 13, 586, '', 'g', 4, 'item144604', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:27', '2022-09-17 11:26:27'),
(87, 32, 0, 10, 586, '', 'kg', 4, 'item144604', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:27', '2022-09-17 11:26:27'),
(88, 31, 0, -2, 586, '', 'kg', 4, 'item144604', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:27', '2022-09-17 11:26:27'),
(89, 38, 0, 2, 586, '', 'kg', 4, 'item144604', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:56:27', '2022-09-17 11:26:27'),
(90, 30, 0, 13, 586, '', 'g', 4, 'item554372', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:57:39', '2022-09-17 11:27:39'),
(91, 32, 0, 10, 586, '', 'kg', 4, 'item554372', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:57:39', '2022-09-17 11:27:39'),
(92, 31, 0, -2, 586, '', 'kg', 4, 'item554372', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:57:39', '2022-09-17 11:27:39'),
(93, 38, 0, 2, 586, '', 'kg', 4, 'item554372', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 16:57:39', '2022-09-17 11:27:39'),
(94, 30, 0, 13, 586, '', 'g', 4, 'item266868', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 17:00:26', '2022-09-17 11:30:26'),
(95, 32, 0, 10, 586, '', 'kg', 4, 'item266868', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 17:00:26', '2022-09-17 11:30:26'),
(96, 31, 0, -2, 586, '', 'kg', 4, 'item266868', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 17:00:26', '2022-09-17 11:30:26'),
(97, 38, 0, 2, 586, '', 'kg', 4, 'item266868', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', ' ', 'A', 'A', '', '2022-09-17 17:00:26', '2022-09-17 11:30:26'),
(98, 30, 0, 1, 730, '', 'g', 4, 'item425486', '418509c5b973a3dfb7b30b1cba5f798e.png', 'cash', '18 Sep 10:00 AM ', 'A', 'A', '', '2022-09-17 18:21:54', '2022-09-17 12:51:54'),
(99, 32, 0, 2, 730, '', 'kg', 4, 'item425486', '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'cash', '18 Sep 10:00 AM ', 'A', 'A', '', '2022-09-17 18:21:54', '2022-09-17 12:51:54'),
(100, 31, 0, 3, 730, '', 'kg', 4, 'item425486', '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'cash', '18 Sep 10:00 AM ', 'A', 'A', '', '2022-09-17 18:21:54', '2022-09-17 12:51:54'),
(101, 38, 0, 4, 730, '', 'kg', 4, 'item425486', '2bc6d81a3d4290d60ea26bc64b01c87b.png', 'cash', '18 Sep 10:00 AM ', 'A', 'A', '', '2022-09-17 18:21:54', '2022-09-17 12:51:54'),
(102, 27, 0, 3, 765, '', 'Packet', 4, 'item184035', '1fe09a13029d50de794bdb9c7551c9bb.png', 'cash', '18 Sep 10:30 AM ', 'A', 'A', '', '2022-09-17 18:25:15', '2022-09-17 12:55:15'),
(103, 28, 0, 2, 765, '', 'Packet', 4, 'item184035', '280e3c360f31672ea2ca1dee477c2492.png', 'cash', '18 Sep 10:30 AM ', 'A', 'A', '', '2022-09-17 18:25:15', '2022-09-17 12:55:15'),
(104, 34, 0, 3, 765, '', 'kg', 4, 'item184035', 'f201e025d332abb5fc9ca80ce114f6d1.png', 'cash', '18 Sep 10:30 AM ', 'A', 'A', '', '2022-09-17 18:25:15', '2022-09-17 12:55:15'),
(105, 35, 0, 4, 1280, '', 'kg', 4, 'item994200', 'fbaf5bcb4c4f002510a9352fe4ddb53f.png', 'cash', '21 Sep 10:00 AM ', 'A', 'A', '', '2022-09-20 18:04:45', '2022-09-20 12:34:45'),
(106, 50, 0, 3, 1170, '', 'kg', 34, 'item442523', '3aab5e1aaeedbbb1d276cd2df49982ae.png', 'cash', ' ', 'D', 'A', 'Vegitable is rotten<br> Other : ', '2022-09-20 18:14:30', '2022-09-20 18:16:45'),
(107, 44, 0, 9, 1170, '', 'kg', 34, 'item442523', '70ced693c04ce97557bae1b0a94ec1e3.png', 'cash', ' ', 'A', 'A', '', '2022-09-20 18:14:30', '2022-09-20 12:44:30'),
(108, 48, 0, 1, 220, '', 'kg', 34, 'itemitem442523', '34718f2ff5d068b353db5d6a3ab4d802.png', 'cash', '21 Sep 1:00 PM ', 'A', 'D', '', '2022-09-20 18:18:13', '2022-09-20 12:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `item_pincode`
--

CREATE TABLE `item_pincode` (
  `id` bigint(20) NOT NULL,
  `area_name` text,
  `pincode` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('A','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_pincode`
--

INSERT INTO `item_pincode` (`id`, `area_name`, `pincode`, `created_at`, `status`) VALUES
(1, 'Mohammdabad gohna mau', '276403', '2022-08-19 13:23:20', 'A'),
(2, 'Moti nagar', '276406', '2022-08-20 11:56:00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `item_product`
--

CREATE TABLE `item_product` (
  `id` int(11) NOT NULL,
  `name` text,
  `price` text,
  `qty` text,
  `details` text,
  `unit_id` int(11) DEFAULT NULL,
  `p_category` int(20) DEFAULT NULL,
  `image` text,
  `status` enum('A','D') DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_product`
--

INSERT INTO `item_product` (`id`, `name`, `price`, `qty`, `details`, `unit_id`, `p_category`, `image`, `status`, `created_at`) VALUES
(27, 'Britannia Toastea Premium Bake Rusk ', '45', '1', '', 7, 4, '1fe09a13029d50de794bdb9c7551c9bb.png', 'A', '2022-09-08 03:12:00'),
(28, 'Britannia Brown Bread', '45', '400', '', 1, 4, '280e3c360f31672ea2ca1dee477c2492.png', 'A', '2022-09-08 03:13:00'),
(30, 'Adrak', '150', '', '', 2, 2, '418509c5b973a3dfb7b30b1cba5f798e.png', 'A', '2022-09-17 01:20:00'),
(31, 'Amla', '170', '', '', 2, 2, '38bdfb37d2b60b9e9f8b1a6d9c934ae0.png', 'A', '2022-09-17 01:26:00'),
(32, 'Arbi', '90', '', '', 2, 2, '24ecdc63d119eb266588a8a1aa3e6ed4.png', 'A', '2022-09-17 01:27:00'),
(33, 'Baby Corn', '60', '', '', 7, 2, '6de5d30c90cefc8b5580d67082703ce8.png', 'A', '2022-09-17 01:27:00'),
(34, 'Apple kinnaur', '180', '', '', 2, 3, 'f201e025d332abb5fc9ca80ce114f6d1.png', 'A', '2022-09-17 01:29:00'),
(35, 'Apple Green', '320', '', '', 2, 3, 'fbaf5bcb4c4f002510a9352fe4ddb53f.png', 'A', '2022-09-17 01:29:00'),
(36, 'Karipatta', '10', '50', '', 1, 2, '309ad6e12442d99c04aa3bb2746476e0.png', 'A', '2022-09-17 03:14:00'),
(39, 'Baingan Lamba', '60', '', '', 2, 2, 'a0729e0280f737f16685dbd18cc6b9e7.png', 'A', '2022-09-20 05:18:00'),
(40, 'Beans', '150', '', '', 2, 2, '643da88d1deb9c5c14694ee92fbb9b3d.png', 'A', '2022-09-20 05:19:00'),
(41, 'Chukundar', '70', '', '', 2, 2, '42a3bc2b3adeda8a00481639f1b09a5f.png', 'A', '2022-09-20 05:20:00'),
(42, 'Baingan Bharta', '60', '', '', 2, 2, '70d973a5126af24f481ce99385e910ef.png', 'A', '2022-09-20 05:22:00'),
(43, 'Broccoli', '400', '', '', 2, 2, 'ba1741758fd014a0fb0fec2c079ec484.png', 'A', '2022-09-20 05:23:00'),
(44, 'Patta Gobhi', '70', '', '', 2, 2, '70ced693c04ce97557bae1b0a94ec1e3.png', 'A', '2022-09-20 05:25:00'),
(45, 'Shimla Mirch', '110', '', '', 2, 2, '6ea74cec3600d50cf9b869c39251b31a.png', 'A', '2022-09-20 05:25:00'),
(46, 'Carrots', '80', '', '', 2, 2, 'b392e64bfde4134948303d383080c47c.png', 'A', '2022-09-20 05:26:00'),
(47, 'Gobhi', '110', '', '', 2, 2, '9bca8488ffa5693137e5e0450499a6fe.png', 'A', '2022-09-20 05:27:00'),
(48, 'Dhania', '220', '', '', 2, 2, '34718f2ff5d068b353db5d6a3ab4d802.png', 'A', '2022-09-20 05:27:00'),
(49, 'Kheera Desi', '65', '', '', 2, 2, 'a5d2d32b2caf09c7405ca7b6650c926a.png', 'A', '2022-09-20 05:37:00'),
(50, 'Drum Stick', '180', '', '', 2, 2, '3aab5e1aaeedbbb1d276cd2df49982ae.png', 'A', '2022-09-20 05:37:00'),
(51, 'Mirchi  Moti Hari', '110', '', '', 2, 2, '3e900801015858f23846123e86fe8ee1.png', 'A', '2022-09-20 05:38:00'),
(52, 'Bananas', '70', '', '', 5, 3, '4f8ed6965f117134cc048272bbf4477c.png', 'A', '2022-09-20 05:43:00'),
(53, 'Cherry', '300', '', '', 7, 3, 'a65b7accd667a86af3c3f872a7dfc840.png', 'A', '2022-09-20 05:43:00'),
(54, 'Lehsun Desi', '180', '', '', 2, 2, 'ca9d4d7ce57cc71b76d4e1ae69dd69d4.png', 'A', '2022-09-22 04:53:00'),
(55, 'Ghiya', '60', '', '', 2, 2, 'f008293079401a69be03bffca93589ed.png', 'A', '2022-09-22 04:54:00'),
(56, 'Ghiya Gol', '60', '', '', 2, 2, '515757dc156fdddd479fa9967a60c148.png', 'A', '2022-09-22 04:54:00'),
(57, 'Mirchi Hari', '130', '', '', 2, 2, '20c14c4860f22e58eb40b8bff8945cec.png', 'A', '2022-09-22 04:56:00'),
(58, 'Gwar Fali', '110', '', '', 2, 2, 'acca24c8ff04c31288672c86c7cb9958.png', 'A', '2022-09-22 04:57:00'),
(59, 'Kacha Kela', '60', '', '', 2, 2, 'aa4975f0822bcd80c699f54520b1f4c1.png', 'A', '2022-09-22 04:59:00'),
(60, 'Kacha Mango', '170', '', '', 2, 2, '553ad70408ea76c67f5d35280239a295.png', 'A', '2022-09-22 05:00:00'),
(61, 'kacha Papita', '70', '', '', 2, 2, 'cabc53b95668642856fb06c6d6b53cc0.png', 'A', '2022-09-22 05:00:00'),
(62, 'Kachi Haldi', '130', '', '', 2, 2, 'ac787287d26b25867c0050b0fec94909.png', 'A', '2022-09-22 05:01:00'),
(63, 'Karela', '70', '', '', 2, 2, '771e8d2f93e3f50d15f0dda10b400a4b.png', 'A', '2022-09-22 05:01:00'),
(64, 'Kathal', '50', '', '', 7, 2, '3c696ddc32ee6f88423e5f796a44e219.png', 'A', '2022-09-22 05:02:00'),
(65, 'Kundru', '65', '', '', 2, 2, 'a1e23095a5b860aa11f86586d8126efa.png', 'A', '2022-09-22 05:02:00'),
(66, 'Bhindi', '60', '', '', 2, 2, '07fb7a12d6f7aceb3369c0ee5149c8df.png', 'A', '2022-09-22 05:03:00'),
(67, 'Nimbu', '150', '', '', 2, 2, '940e7ddadf9983dd2df2da67babd60a2.png', 'A', '2022-09-22 05:04:00'),
(68, 'Lettuce', '350', '', '', 2, 2, 'b86f1e1d9353bda99eb272335ac4b5f6.png', 'A', '2022-09-22 05:04:00'),
(69, 'Mushroom', '60', '', '', 7, 2, '4351c0d9c3f41b799688b9668213b26d.png', 'A', '2022-09-22 05:05:00'),
(70, 'Pyaaz', '35', '', '', 2, 2, '0c2206669afd9c1996c48ae23226d603.png', 'A', '2022-09-22 05:06:00'),
(71, 'Carrot Orange', '90', '', '', 2, 2, '53aa47532d37193289ebc11d992cdc58.png', 'A', '2022-09-22 05:08:00'),
(72, 'Parval Desi', '90', '', '', 2, 2, 'e79d2e7ece81f3c37f332776ada69b64.png', 'A', '2022-09-22 05:08:00'),
(73, 'Mattar', '220', '', '', 2, 2, 'f40554e0f64ceb2b9c2a0ab66c2ef575.png', 'A', '2022-09-22 05:09:00'),
(74, 'Pudina', '120', '', '', 2, 2, '23bde9336e9d978a45d9189aa588d873.png', 'A', '2022-09-22 05:10:00'),
(75, 'Tinda', '120', '', '', 2, 2, '2e9e2c6ab43680a5dd00addb189ef2db.png', 'A', '2022-09-22 05:10:00'),
(76, 'Red Capsicum', '420', '', '', 2, 2, '22a59a71f91414f44e5e1acc541a8de1.png', 'A', '2022-09-22 05:11:00'),
(77, 'Kheera Seedles', '100', '', '', 2, 2, 'c9698328b0a6bcf9fea04ca67a4fc5f1.png', 'A', '2022-09-22 05:12:00'),
(78, 'Palak', '70', '', '', 2, 2, 'f4756cb168934b66a51de64668cf5bac.png', 'A', '2022-09-22 05:12:00'),
(79, 'Sprouts', '30', '', '', 7, 2, '30502e0d663c99a0f2676ba095f65a10.png', 'A', '2022-09-22 05:13:00'),
(80, 'Sweet Corn', '35', '', '', 7, 2, 'd2c6270fba98be095e20755c7b931919.png', 'A', '2022-09-22 05:13:00'),
(81, 'Shakarkandi', '90', '', '', 2, 2, 'd507804ded4db6aff69eed0dbc24c1e6.png', 'A', '2022-09-22 05:15:00'),
(82, 'Tomato Desi', '45', '', '', 2, 2, 'ee6e28565d91755895f5e60cf31d295b.png', 'A', '2022-09-22 05:15:00'),
(83, 'Tori', '60', '', '', 2, 2, '2e9bce6afdde3f2d7358dab82d2634b0.png', 'A', '2022-09-22 05:16:00'),
(84, 'Yellow Capsicum', '420', '', '', 2, 2, '4d8b5393f3a44a95c269a2404291c3dc.png', 'A', '2022-09-22 05:16:00'),
(85, 'Zucchini', '220', '', '', 2, 2, 'eb1fce054c12dac0d209a9b3e22677b5.png', 'A', '2022-09-22 05:17:00'),
(86, 'Jammun', '200', '', '', 2, 3, 'daf491fbd0d184a07b6b544659753834.png', 'A', '2022-09-22 05:18:00'),
(87, 'Khajoor', '180', '', '', 7, 3, '53348a2d140e3ad258416c0b9ef94925.png', 'A', '2022-09-22 05:19:00'),
(88, 'Kiwi', '40', '', '', 9, 3, '71936cbbdb8994f02c79ae45cec29dde.png', 'A', '2022-09-22 05:20:00'),
(89, 'Malta', '280', '', '', 2, 3, '9ad8af086fd3135c8a9c336a8d1b1314.png', 'A', '2022-09-22 05:21:00'),
(90, 'Mausami', '120', '', '', 2, 3, 'd0637b28371d718b767369a18aebc6b9.png', 'A', '2022-09-22 05:21:00'),
(91, 'Addoo', '210', '', '', 2, 3, '3fe0f18cda63e61c8f0bfe45fed6d2c4.png', 'A', '2022-09-22 05:23:00'),
(92, 'Anaar', '200', '', '', 2, 2, 'b191114d97df568d538667b1f6ca52c4.png', 'A', '2022-09-22 05:24:00'),
(93, 'Amul Cheese Slice', '248', '400', '', 1, 4, 'f7af7546361ecd6a3a9196c924c8e546.png', 'A', '2022-09-22 05:28:00'),
(94, 'Amul Cheese Slice', '130', '200', '', 1, 4, 'cb707b715dac06a9ab944f34ba84e882.png', 'A', '2022-09-22 05:48:00'),
(95, 'Amul Fresh Paneer', '80', '200', '', 1, 4, '4ee16595dbfe7f5fe10a9aeb2b80b626.png', 'A', '2022-09-22 05:51:00'),
(96, 'Amul Lassi', '20', '250', '', 10, 4, 'b8a070cc0f32f90ac3c6b260e915dc51.png', 'A', '2022-09-22 06:01:00'),
(97, 'Amul Milk Gold Tetra Pack', '72', '1', '', 11, 4, '52a354e56d669fb406448904e29f32c9.png', 'A', '2022-09-22 06:06:00'),
(98, 'Amul Taza Tonned Tetra Pack', '68', '1', '', 11, 4, '472157634ab5cd8ffc3b9bce3c8f4645.png', 'A', '2022-09-22 06:09:00'),
(99, 'Amul Taza Tonned Milk Pouch', '49', '1', '', 11, 4, '7f2b0a35003494fe0b88227e413753f1.png', 'A', '2022-09-22 06:09:00'),
(100, 'Amul Taza Tonned Milk Pouch', '25', '500', '', 10, 4, 'e9a676a4ce1b230914da3ad82845c8b5.png', 'A', '2022-09-22 06:10:00'),
(101, 'Amul Taza Tonned Milk Pouch', '96', '2', '', 11, 4, 'bb71949021e41d9a46e4c2521d32c065.png', 'A', '2022-09-22 06:11:00'),
(102, 'Amul Butter', '52', '100', '', 1, 4, 'e62818bfe9f919e21c38fbc0241733ce.png', 'A', '2022-09-22 06:12:00'),
(103, 'Amul Butter', '255', '500', '', 1, 4, 'f8addbcd8ca1cf978be24b172797b835.png', 'A', '2022-09-22 06:12:00'),
(104, 'Amul Cheese Cubes', '122', '200', '', 1, 4, '07bf7e5c501d487379aee99f2ed78821.png', 'A', '2022-09-22 06:13:00'),
(105, 'Amul Diamond Milk Pouch', '32', '500', '', 10, 4, 'e051dd056be043768d14dcfd1f57ce2a.png', 'A', '2022-09-22 06:14:00'),
(106, 'Amul Gold Full Cream Milk Pouch', '61', '1', '', 11, 4, '11d74ce73855b7f6709afc883fbaf231.png', 'A', '2022-09-22 06:15:00'),
(107, 'Amul Masti Dahi Pouch', '65', '1', '', 2, 4, 'b5b8817de3c30b8c7490bbefff6f832a.png', 'A', '2022-09-22 06:16:00'),
(108, 'Amul Masti Dahi Pouch', '30', '400', '', 1, 4, '728da7672381856f1c9c0801be7bac5c.png', 'A', '2022-09-22 06:23:00'),
(109, 'Amul Plain Butter Milk Chach Pouch', '15', '500', '', 10, 4, '9fb92e12357f1e0a9a8536294de294b1.png', 'A', '2022-09-23 10:02:00'),
(110, 'Amul Spiced Butter Milk', '12', '200', '', 10, 4, '4732f234f4b426413445e5f7d78c1d3d.png', 'A', '2022-09-23 10:03:00'),
(111, 'Britannia Cheese Slices', '90', '100', '', 1, 4, '11d621552e001d8a116a9f0495354852.png', 'A', '2022-09-23 10:06:00'),
(112, 'Britannia Cheese Slices', '400', '480', '', 1, 4, 'd2955680693991b93f22850e056bbba5.png', 'A', '2022-09-23 10:06:00'),
(113, 'Britannia Cheese Slices', '165', '200', '', 1, 2, '329fb8bcf691ff88b1ab6853ff3e2f56.png', 'A', '2022-09-23 10:07:00'),
(114, 'Amul Cow Milk', '26', '500', '', 10, 4, '3a93ed18fa0ed8d48f226ef1b92061ae.png', 'A', '2022-09-23 10:08:00'),
(115, 'White Eggs', '200', '30', '', 9, 4, '7bcc1b660bc1c3b702ce9ab88ec8e9cf.png', 'A', '2022-09-23 10:09:00'),
(116, 'White Eggs', '7', '1', '', 9, 4, 'f47aa253efef2104fa9f7f3e7af5dd91.png', 'A', '2022-09-23 10:09:00'),
(117, 'White Eggs', '42', '6', '', 9, 4, '79430ba218de210f8e57ea960f3a1391.png', 'A', '2022-09-23 10:10:00'),
(118, 'English Oven 100% Whole Wheat Bread', '50', '400', '', 1, 4, '5f175773fea859fede816e624a75d4d0.png', 'A', '2022-09-23 10:11:00'),
(119, 'English Oven Atta Bread', '45', '400', '', 1, 4, '864176169d50a98703c7febe824f7c1d.png', 'A', '2022-09-23 10:11:00'),
(120, 'English Oven Brown Bread', '45', '400', '', 1, 4, '02ba31dedf376d6ba53825af09724d2b.png', 'A', '2022-09-23 10:12:00'),
(121, 'English Oven Jumbo Premium White Bread', '50', '700', '', 1, 4, '6c7af44a7d37625e27cf87e669caa4c5.png', 'A', '2022-09-23 10:14:00'),
(122, 'English Oven Milk Bread', '40', '400', '', 1, 4, '4b26b446c961da616989cf4eb1b96b54.png', 'A', '2022-09-23 10:16:00'),
(123, 'English Oven Premium White Bread', '25', '350', '', 1, 4, '7a5dfb054588b087d3b251962b53e337.png', 'A', '2022-09-23 10:18:00'),
(124, 'English Oven Sandwich Bread', '35', '400', '', 1, 4, '943ffa3b767c9f6e52d42a5721252d76.png', 'A', '2022-09-23 10:19:00'),
(125, 'Harvest Gold White Bread', '25', '350', '', 1, 4, 'a2a0f46259535e782561b8a3488ffb0f.png', 'A', '2022-09-23 10:20:00'),
(126, 'Mother Dairy Cow Milk Pouch', '26', '500', '', 10, 4, 'ff6276cdcb83705c908176a88ede3e04.png', 'A', '2022-09-23 10:21:00'),
(127, 'Mother Dairy Tonned Milk Pouch', '26', '500', '', 10, 4, '339421d407251ea26870c88fafd4aef0.png', 'A', '2022-09-23 10:22:00'),
(128, 'Mother Dairy Malai Paneer', '90', '200', '', 1, 4, 'd578addf465a598bff1eba15e33f390c.png', 'A', '2022-09-23 10:23:00'),
(129, ' Mother Dairy Fresh Paneer', '85', '200', '', 1, 4, '766a36c6220eeeb3a0f35ebbc2eda89f.png', 'A', '2022-09-23 10:25:00'),
(130, 'Mother Dairy Full Cream Milk Pouch', '30', '500', '', 10, 4, 'ed05d346520bdbda18cd7183db59f27c.png', 'A', '2022-09-23 10:26:00'),
(131, 'Perfect Brown Bread', '40', '400', '', 1, 4, '0875a119b46bcdbce93ce7061517a7a2.png', 'A', '2022-09-23 10:28:00'),
(132, 'Perfect Sandwich Bread', '35', '400', '', 1, 4, 'aca4c38937eb1c1ecb003b51a8fae299.png', 'A', '2022-09-23 10:29:00'),
(133, 'Perfect White Bread', '40', '400', '', 1, 4, '4d95ae9c616c7c7049d7d0f362cedc3d.png', 'A', '2022-09-23 10:30:00'),
(134, 'Perfect Milk Bread', '35', '11', '', 1, 4, '1c3600da256193c815902c0451e58833.png', 'D', '2022-09-23 10:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `item_product_category`
--

CREATE TABLE `item_product_category` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `status` enum('A','D') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_product_category`
--

INSERT INTO `item_product_category` (`id`, `name`, `status`, `created_at`) VALUES
(2, 'Vegetables', 'A', '2022-09-02 04:13:00'),
(3, 'Fruits', 'A', '2022-09-02 04:14:00'),
(4, 'Breakfast Essentials', 'A', '2022-09-02 04:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `item_testimonial`
--

CREATE TABLE `item_testimonial` (
  `id` int(11) NOT NULL,
  `name` text,
  `designation` text,
  `details` text,
  `image` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('A','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_testimonial`
--

INSERT INTO `item_testimonial` (`id`, `name`, `designation`, `details`, `image`, `created_at`, `status`) VALUES
(1, 'krishna bhardwaj', 'web developer', 'this is demo data for testing  data', '91ed60030e6a75cfbff26172e4a99b84.png', '2022-08-18 14:45:10', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `item_units_category`
--

CREATE TABLE `item_units_category` (
  `id` int(11) NOT NULL,
  `name` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` enum('A','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_units_category`
--

INSERT INTO `item_units_category` (`id`, `name`, `created_at`, `status`) VALUES
(1, 'g', '2022-07-29 10:55:00', 'A'),
(2, 'kg', '2022-07-29 11:09:00', 'A'),
(5, 'dozen', '2022-09-02 05:42:00', 'A'),
(6, '2 Litre', '2022-09-06 11:19:00', 'A'),
(7, 'Packet', '2022-09-06 11:19:00', 'A'),
(8, '50 g', '2022-09-17 03:25:00', 'A'),
(9, 'pc', '2022-09-22 05:19:00', 'A'),
(10, 'ml', '2022-09-22 05:52:00', 'A'),
(11, 'litre', '2022-09-22 06:05:00', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_admin`
--
ALTER TABLE `item_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_banner`
--
ALTER TABLE `item_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_contact`
--
ALTER TABLE `item_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_customer`
--
ALTER TABLE `item_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_orders`
--
ALTER TABLE `item_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_pincode`
--
ALTER TABLE `item_pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_product`
--
ALTER TABLE `item_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_product_category`
--
ALTER TABLE `item_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_testimonial`
--
ALTER TABLE `item_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_units_category`
--
ALTER TABLE `item_units_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_admin`
--
ALTER TABLE `item_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_banner`
--
ALTER TABLE `item_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_contact`
--
ALTER TABLE `item_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `item_customer`
--
ALTER TABLE `item_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `item_orders`
--
ALTER TABLE `item_orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `item_pincode`
--
ALTER TABLE `item_pincode`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_product`
--
ALTER TABLE `item_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `item_product_category`
--
ALTER TABLE `item_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_testimonial`
--
ALTER TABLE `item_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_units_category`
--
ALTER TABLE `item_units_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
