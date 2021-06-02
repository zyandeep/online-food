-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 03:25 PM
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
  `customer_id` int(11) NOT NULL,
  `status` enum('NEW','APPROVED','DELIVERED','CANCELED') NOT NULL DEFAULT 'NEW',
  `bill_summary` longtext NOT NULL CHECK (json_valid(`bill_summary`)),
  `bill_amount` int(11) NOT NULL DEFAULT 0,
  `bill_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `customer_id`, `status`, `bill_summary`, `bill_amount`, `bill_date`) VALUES
(1, 1, 'NEW', '[{\"item_name\":\"Chicken biryani\",\"item_description\":\"The king of biriyanis, Chicken Biriyani\",\"item_quantity\":\"1\",\"item_price\":\"150\",\"item_total\":150},{\"item_name\":\"Mineral water\",\"item_description\":\"Chilled Mineral Water\",\"item_quantity\":\"3\",\"item_price\":\"20\",\"item_total\":60}]', 0, '2021-05-30'),
(2, 1, 'NEW', '[{\"item_name\":\"Veg Kebab\",\"item_description\":\"Vegetable Kebab with extra spice\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_total\":100},{\"item_name\":\"Veg Chowmin\",\"item_description\":\"Tasty Chowmin with healthy veggies\",\"item_quantity\":\"2\",\"item_price\":\"75\",\"item_total\":150}]', 0, '2021-05-30'),
(4, 1, 'NEW', '[{\"item_name\":\"Chicken biryani\",\"item_description\":\"The king of biriyanis, Chicken Biriyani\",\"item_quantity\":\"2\",\"item_price\":\"150\",\"item_total\":300}]', 0, '2021-05-30'),
(14, 1, 'NEW', '[{\"item_name\":\"chicken roll\",\"item_description\":\"Roll stuffed with chicken and mayonise\",\"item_quantity\":\"1\",\"item_price\":\"100\",\"item_total\":100},{\"item_name\":\"Chicken biryani\",\"item_description\":\"The king of biriyanis, Chicken Biriyani\",\"item_quantity\":\"2\",\"item_price\":\"150\",\"item_total\":300},{\"item_name\":\"Chicken momos\",\"item_description\":\"Juicy and soft momos stuffed with chicken\",\"item_quantity\":\"4\",\"item_price\":\"120\",\"item_total\":480}]', 0, '2021-05-31'),
(16, 1, 'NEW', '[{\"item_name\":\"Veg Kebab\",\"item_description\":\"Vegetable Kebab with extra spice\",\"item_quantity\":\"3\",\"item_price\":\"100\",\"item_total\":300},{\"item_name\":\"Veg Chowmin\",\"item_description\":\"Tasty Chowmin with healthy veggies\",\"item_quantity\":\"1\",\"item_price\":\"75\",\"item_total\":75},{\"item_name\":\"Veg Paneer tikka\",\"item_description\":\"Paneer Tikka grilled in barbeque \",\"item_quantity\":\"2\",\"item_price\":\"120\",\"item_total\":240}]', 615, '2021-06-01');

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
(1, 'Ravi Tejas', 'Dispurs', 8765432149, 'asdf', 'ravis@gmail.com'),
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
  `rate` int(5) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `category`, `price`, `image_path`, `rate`, `description`) VALUES
(1, 'Veg Chowmin', 'VEG', 75, 'storage/items/veg', 4, 'Tasty Chowmin with healthy veggies'),
(2, 'Veg Kebab', 'VEG', 100, 'storage/items/veg', 3, 'Vegetable Kebab with extra spice'),
(3, 'Veg Paneer tikka', 'VEG', 120, 'storage/items/veg', 3, 'Paneer Tikka grilled in barbeque '),
(4, 'Veg roll', 'VEG', 80, 'storage/items/veg', 5, 'Roll stuffed with healthy and yummy vegetables'),
(5, 'Chicken biryani', 'NON_VEG', 150, 'storage/items/nonveg', 2, 'The king of biriyanis, Chicken Biriyani'),
(6, 'Chicken momos', 'NON_VEG', 120, 'storage/items/nonveg', 3, 'Juicy and soft momos stuffed with chicken'),
(7, 'chicken roll', 'NON_VEG', 100, 'storage/items/nonveg', 3, 'Roll stuffed with chicken and mayonise'),
(8, 'chicken wings', 'NON_VEG', 100, 'storage/items/nonveg', 2, 'Chicken with wings, just joking'),
(9, 'coke', 'BEVERAGE', 50, 'storage/items/beverage', 3, 'Chilled Coca Cola'),
(10, 'chicken dum biryani', 'NON_VEG', 165, 'storage/items/nonveg', 4, 'Chicken Dum Biriyani, Fully Loaded'),
(11, 'thumsup', 'BEVERAGE', 45, 'storage/items/beverage', 5, 'Chilled Thums Up'),
(12, 'Mineral water', 'BEVERAGE', 20, 'storage/items/beverage', 3, 'Chilled Mineral Water'),
(13, 'chicken tikka roll', 'NON_VEG', 50, 'storage/items/nonveg', 4, 'Chicken Tikka Roll with fully loaded Chicken');

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
  ADD KEY `customer_fk_bill` (`customer_id`);

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
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `customer_fk_bill` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
