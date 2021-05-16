-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 05:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`, `mobile_no`, `email`) VALUES
(1, 'admin', 'admin', 8095463662, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` enum('NEW','APPROVED','DELIVERED','CANCELED') NOT NULL DEFAULT 'NEW',
  `bill_summary` longtext NOT NULL CHECK (json_valid(`bill_summary`)),
  `bill_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `address`, `mobile_no`, `password`, `email`) VALUES
(1, 'Ravi', 'Basistha Chariali', 8095873663, 'secret1', 'ravi@gmail.com'),
(2, 'zyandeep', 'Beltola', 8095873663, 'secret1', 'zyan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` enum('VEG','NON_VEG','BEVERAGE','') NOT NULL,
  `price` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `descr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `category`, `price`, `image_path`, `descr`) VALUES
(1, 'Veg-Chowmein', 'VEG', 75, 'storage/items/veg', 'Tasty veg chowmin with schezwan sauce'),
(2, 'Veg-Kebab', 'VEG', 100, 'storage/items/veg', 'Yummy Vegetarian Kababs'),
(3, 'Veg-Paneer-Tikka', 'VEG', 120, 'storage/items/veg', 'Yummy Paneer tikka roasted in barbeque'),
(4, 'Veg-Roll', 'VEG', 80, 'storage/items/veg', 'Veg Roll with healthy veggies and mayonese'),
(5, 'Chicken-Biryani', 'NON_VEG', 150, 'storage/items/nonveg', 'The king of non veg Spicy chicken Biriyani'),
(6, 'Chicken-Momos', 'NON_VEG', 120, 'storage/items/nonveg', 'Soft and juicy momos stuffed with chicken'),
(7, 'Chicken-Roll', 'NON_VEG', 100, 'storage/items/nonveg', 'Roll stuffed with chicken and covered with egg'),
(8, 'Chicken-Wings', 'NON_VEG', 100, 'storage/items/nonveg', 'Chicken with wings, just joking'),
(9, 'Coca-Cola', 'BEVERAGE', 50, 'storage/items/beverage', 'Chilled Coca-Cola'),
(11, 'Thums Up', 'BEVERAGE', 45, 'storage/items/beverage', 'Chilled daring Thums Up'),
(12, 'Mineral Water', 'BEVERAGE', 20, 'storage/items/beverage', 'Chilled water');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`,`email`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `customer_fk_bill` (`customer_id`),
  ADD KEY `order_fk_bill` (`order_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`,`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `i_name` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_fk_order` (`customer_id`),
  ADD KEY `item_fk_order` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `customer_fk_bill` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_fk_bill` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer_fk_order` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_fk_order` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
