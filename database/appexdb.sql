-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 11:00 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appexdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogTitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloger` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogIntro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogDetails` blob,
  `blogImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogStatus` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogAddedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `commenter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commenterEmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentedAbout` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customerName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerPhone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerEmail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerLocation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertyId` int(11) NOT NULL,
  `customerAddedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customerName`, `customerPhone`, `customerEmail`, `customerLocation`, `property`, `propertyId`, `customerAddedAt`) VALUES
(1, 'Francois', '+250781139747', 'francoismugorozi@gmail.com', 'kigali', '', 0, '2019-10-25 22:58:59'),
(2, 'Francois', '+250781139747', 'francoismugorozi@gmail.com', 'kigali', '', 0, '2019-10-25 22:58:59'),
(3, 'Francois', '+250781139747', 'kamanaemmy2@gmail.com', 'kigali', '', 0, '2019-10-25 23:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `houseType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseSeller` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseSize` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseLocation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseNote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseCost` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `houseStatus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseRooms` int(10) NOT NULL,
  `houseParkings` int(10) NOT NULL,
  `houseOptions` text COLLATE utf8mb4_unicode_ci,
  `houseVisibility` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `houseAddedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `houseType`, `houseSeller`, `houseSize`, `houseLocation`, `houseImage`, `houseNote`, `houseCost`, `houseStatus`, `houseRooms`, `houseParkings`, `houseOptions`, `houseVisibility`, `houseAddedAt`) VALUES
(3, 'Residence', 'Muanana', '54sqm', 'Kigali', '../assets/img/houses/bg_2.jpg', 'Beautiful house to live in kigali', '$456', 'For Sale', 5, 2, '', 'Visible', '2019-11-06 09:51:15'),
(4, 'Residence', 'Muanana', '54sqm', 'Kigali', '../assets/img/houses/properties-2.jpg', 'Beautiful house to live in kigali', '$456', 'For Sale', 5, 2, '', 'Visible', '2019-11-06 09:51:28'),
(5, 'Residence', 'Muanana', '54sqm', 'Kigali', '../assets/img/houses/properties-6.jpg', 'Beautiful house to live in kigali', '$456', 'For Sale', 5, 2, '', 'Visible', '2019-11-06 09:51:44'),
(6, 'Residence', 'Muanana', '54sqm', 'Kigali', '../assets/img/houses/house2.jpg', '', '$456', 'For Sale', 5, 2, '', 'Visible', '2019-11-06 09:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` int(11) NOT NULL,
  `landType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landSeller` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landSize` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landLocation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landNote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landCost` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landStatus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landOptions` text COLLATE utf8mb4_unicode_ci,
  `landVisibility` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landAddedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `landType`, `landSeller`, `landSize`, `landLocation`, `landImage`, `landNote`, `landCost`, `landStatus`, `landOptions`, `landVisibility`, `landAddedAt`) VALUES
(6, 'Forest', 'Major Munana', '563sqm', 'Rwamagana', '../assets/img/lands/land2.jpg', 'Location for forestation', '$4568', 'For Sale', '', 'Visible', '2019-11-06 09:54:17'),
(8, 'Commecial', 'Munana', '5465', 'Kigali', '../assets/img/lands/land1.jpg', '', '465', 'For Sale', '\r\n\r\n', 'Visible', '2019-11-06 09:54:17'),
(9, 'Commecial', 'Munana', '5465', 'Kigali', '../assets/img/lands/land2.jpg', '', '465', 'For Sale', '', 'Visible', '2019-11-06 09:54:17'),
(10, 'Commecial', 'Munana', '5465', 'Kigali', '../assets/img/lands/land5.jpg', '', '465', 'For Sale', '', 'Visible', '2019-11-06 09:54:17'),
(11, 'Commecial', 'Munana', '5465', 'Kigali', '../assets/img/lands/land4.jpg', 'The land of cultuvation', '465', 'For Sale', '', 'Visible', '2019-11-06 09:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `locations` varchar(50) NOT NULL,
  `property` varchar(10) NOT NULL,
  `descriptions` text NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `names`, `email`, `phone`, `locations`, `property`, `descriptions`, `addedAt`) VALUES
(1, 'Francois', 'francois@gmail.com', '456465', 'Rwanda', 'house', 'the house', '2019-11-01 09:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `sellerName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellerPhone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellerEmail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sellerProperty` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellerpropertyId` int(11) NOT NULL,
  `sellerAddedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `sellerName`, `sellerPhone`, `sellerEmail`, `sellerProperty`, `sellerpropertyId`, `sellerAddedAt`) VALUES
(9, 'Dr Angelo', '546546545', 'butare@yahoo.com', 'house', 9, '2019-10-20 12:42:10'),
(10, 'Munana', '6451231', 'munana@gmail.com', 'land', 1, '2019-10-20 12:46:21'),
(11, 'Francois', '5132365', 'francois@gmail.com', 'land', 2, '2019-10-20 12:47:45'),
(12, 'Major Munana', '53132', 'munana@gmail.com', 'land', 3, '2019-10-20 12:49:16'),
(13, 'Major Munana', '53132', 'munana@gmail.com', 'land', 4, '2019-10-20 12:49:38'),
(15, 'Major Munana', '53132', 'munana@gmail.com', 'land', 6, '2019-10-20 12:53:37'),
(17, '8645312', 'ghjkdsf', 'dfsd@gmail.com', 'house', 10, '2019-10-20 13:03:02'),
(18, 'Mbkdsjhf', 'hjbkjbhkj', 'jhbkjbhkj@gmail.com', 'house', 1, '2019-10-22 08:22:08'),
(19, 'Munana', '546564', 'munana@gmail.com', 'house', 2, '2019-10-24 12:23:06'),
(20, 'Muanana', '54654', 'munana@gmail.com', 'house', 3, '2019-10-24 21:17:51'),
(21, 'Muanana', '54654', 'munana@gmail.com', 'house', 4, '2019-10-24 21:21:51'),
(22, 'Muanana', '54654', 'munana@gmail.com', 'house', 5, '2019-10-24 21:24:39'),
(23, 'Munana', '326454', 'munana@gmail.com', 'land', 8, '2019-10-24 21:33:18'),
(24, 'Munana', '326454', 'munana@gmail.com', 'land', 9, '2019-10-24 21:34:28'),
(25, 'Munana', '326454', 'munana@gmail.com', 'land', 10, '2019-10-24 21:34:49'),
(26, 'Muanana', '54654', 'munana@gmail.com', 'house', 6, '2019-11-06 09:41:13'),
(27, 'Munana', 'ghjkdsf', 'dfsd@gmail.com', 'land', 11, '2019-11-06 09:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `subscriberEmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscribedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `subscriberEmail`, `subscribedAt`) VALUES
(2, 'francoismugorozi@gmail.com', '2019-10-26 08:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userEmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPassword` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userCategory` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userImage` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `userEmail`, `userPassword`, `userCategory`, `userImage`) VALUES
(1, 'Munana', 'munana@gmail.com', '12345', 'user', NULL),
(2, 'Francois', 'francois@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
