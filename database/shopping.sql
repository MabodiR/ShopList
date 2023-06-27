-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2023 at 12:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `Laptops`
--

CREATE TABLE `Laptops` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `processor` varchar(255) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `storage` varchar(255) DEFAULT NULL,
  `screen_size` decimal(4,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Laptops`
--

INSERT INTO `Laptops` (`id`, `brand`, `model`, `price`, `processor`, `ram`, `storage`, `screen_size`, `image`) VALUES
(1, 'Dell', 'XPS 15', '1599.99', 'Intel Core i7', 16, '512GB SSD', '15.60', ''),
(2, 'Apple', 'MacBook Pro', '2199.99', 'Apple M1', 16, '1TB SSD', '13.30', ''),
(3, 'HP', 'Pavilion 15', '899.99', 'AMD Ryzen 7', 8, '256GB SSD', '15.60', ''),
(4, 'Lenovo', 'ThinkPad X1 Carbon', '1799.99', 'Intel Core i5', 16, '512GB SSD', '14.00', ''),
(5, 'Asus', 'ROG Zephyrus G14', '1399.99', 'AMD Ryzen 9', 16, '1TB SSD', '14.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `SoldItems`
--

CREATE TABLE `SoldItems` (
  `id` int(11) NOT NULL,
  `laptop_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SoldItems`
--

INSERT INTO `SoldItems` (`id`, `laptop_id`, `user_id`, `price`, `purchase_date`) VALUES
(1, 1, 1, '1599.99', '2023-06-01'),
(2, 2, 2, '2199.99', '2023-06-15'),
(3, 3, 3, '899.99', '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `email`, `password`) VALUES
(1, 'johnsmith', 'john@example.com', 'password123'),
(2, 'janebrown', 'jane@example.com', 'securepass'),
(3, 'mikeross', 'mike@example.com', 'strongpassword');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Laptops`
--
ALTER TABLE `Laptops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SoldItems`
--
ALTER TABLE `SoldItems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laptop_id` (`laptop_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `SoldItems`
--
ALTER TABLE `SoldItems`
  ADD CONSTRAINT `solditems_ibfk_1` FOREIGN KEY (`laptop_id`) REFERENCES `Laptops` (`id`),
  ADD CONSTRAINT `solditems_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
