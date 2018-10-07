-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2018 at 02:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `c_u_id` int(11) NOT NULL,
  `c_p_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_image` varchar(500) NOT NULL,
  `c_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktbl`
--

CREATE TABLE `feedbacktbl` (
  `f_id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktbl`
--

INSERT INTO `feedbacktbl` (`f_id`, `fullname`, `feedback`) VALUES
(21, 'Admin', 'Nice Gadgest');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `p_id`, `fullname`, `address`, `pincode`, `city`, `state`, `mobile`) VALUES
(20, 10, 'in', 'nn', 343446, 'dgd', 'dgee', '+919967059584');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_image` varchar(500) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_image`, `p_price`, `p_type`) VALUES
(1, 'Raspberry pi 3', 'images/1.png', 6939, 'Shoes'),
(2, 'Node MCU Board ', 'images/2.png', 5939, 'Shoes'),
(3, 'Arduino UNO 2018', 'images/3.png', 3695, 'Shoes'),
(4, 'Sandisk SD Card 8GB', 'images/4.png', 999, 'Shoes'),
(5, 'Raspberry pi Case', 'images/5.png', 3123, 'Shoes'),
(10, 'Amps Checker ', 'images/10.png', 1325, 'Tshirt'),
(11, 'Digital Multi-Meter', 'images/11.png', 979, 'Tshirt'),
(12, 'Hot Air Gun', 'images/12.png', 1659, 'Tshirt'),
(13, 'Tool Kit', 'images/13.png', 2078, 'Tshirt'),
(6, 'Camera Module', 'images/6.png', 6269, 'Shoes'),
(7, 'Matrix LED Lights', 'images/7.png', 629, 'Shoes'),
(8, 'Infrared Sensor', 'images/8.png', 1899, 'Shoes'),
(9, 'RF ID Chips', 'images/9.png', 346, 'Shoes'),
(14, 'Soldering Iron', 'images/14.png', 656, 'Tshirt'),
(15, 'Lapmate 3 In 1 Modular Crimping Tool', 'images/15.png', 549, 'Tshirt'),
(22, 'Altair 8800 (1975)', 'images/22.png', 2395, 'Watches'),
(23, 'Apple iPod Classic (2001)', 'images/23.png', 2995, 'Watches'),
(24, 'Nintendo NES', 'images/24.png', 799, 'Watches'),
(25, 'Sony Walkman (1979)', 'images/25.png', 9495, 'Watches'),
(26, 'Floppy Disk 3.5\"', 'images/26.png', 1890, 'Watches'),
(27, 'Apple Macintosh (1984)', 'images/27.png', 1999, 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mobile`, `email`) VALUES
(26, 'admin', 'admin1234', '+919988776655', 'admin@root.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
