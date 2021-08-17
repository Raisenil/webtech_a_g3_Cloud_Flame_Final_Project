-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 02:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_flame`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(100) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `table_no` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `username`, `phone`, `table_no`, `day`, `time`) VALUES
(2, 'admin                                                ', '123456789', '06', 'THU', '5PM'),
(5, 'admin                                                ', '123456789', '04', 'FRI', '4PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(3, 'Pizza', 'Catagory_pic_524.jpg', 'Yes', 'Yes'),
(10, 'Soup', 'Catagory_pic_301.jpg', 'Yes', 'Yes'),
(11, 'Burger', 'Catagory_pic_733.jpg', 'Yes', 'Yes'),
(12, 'Pasta', 'Catagory_pic_137.jpg', 'Yes', 'Yes'),
(13, 'Starter', 'Catagory_pic_18.jpg', 'Yes', 'Yes'),
(14, 'Salad', 'Catagory_pic_627.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `catagory_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `catagory_id`, `featured`, `active`) VALUES
(2, 'BBQ Pizza', 'Chicken, BBQ sauce, mushroom, chef special sauce.', '369', 'Food_pic_731.jpg', 3, 'Yes', 'Yes'),
(3, 'Beef Burger', '150gm beef, melted cheese ', '170', 'Food_pic_304.jpg', 11, 'Yes', 'Yes'),
(5, 'BBQ Chicken Cheese Blast Burgerese Blast Burger', '160gm chicken, melted cheese ', '185', 'Food_pic_890.jpg', 11, 'Yes', 'Yes'),
(7, 'Beef Cheese Blast Burger', '150gm beef, melted cheese ', '190', 'Food_pic_563.jpg', 11, 'Yes', 'Yes'),
(8, 'Cashew Nut Salad', 'It is what it is', '239', 'Food_pic_193.jpg', 14, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(7, 'BBQ Pizza', '369', 3, '1107', '2021-08-15 12:35:43', 'Ordered', 'Raisenil', '01625628284', 'raisulislamniloy47@gmail.com', 'Dhaka'),
(9, 'Cashew Nut Salad', '239', 10, '2390', '2021-08-15 12:41:18', 'Ordered', 'Raisenil', '01625628284', 'raisulislamniloy47@gmail.com', 'Dhaka'),
(10, 'BBQ Pizza', '369', 1, '369', '2021-08-15 12:42:36', 'Delivered', 'admin                                                ', '123456789', 'admin@gmail.com', 'admin                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `type`, `name`, `location`, `phone`, `image_name`) VALUES
(1, 'admin                                                ', '12345678', 'admin@gmail.com', 'admin                                                ', 'admin                                                ', 'admin                                                ', '123456789', 'Profile_pic_471.jpg'),
(2, 'customer                                ', '12345678', 'customer@gmail.com', 'customer                                ', 'customer                                ', 'customer                                ', '123456789', 'Profile_pic_52.jpg'),
(3, 'manager                                ', '12345678', 'manager@gmail.com', 'manager                                ', 'manager                                ', 'manager                                ', '123456789', 'Profile_pic_366.jpg'),
(4, 'employee                                                ', '12345678', 'employee@gmail.com', 'employee                                                ', 'employee                                                ', 'employee                                                ', '123456789', 'Profile_pic_273.jpg'),
(13, 'Raisenil', 'R@isenil47', 'raisulislamniloy47@gmail.com', 'admin', 'Niloy', 'Dhaka', '01625628284', 'Profile_pic_545.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
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
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
