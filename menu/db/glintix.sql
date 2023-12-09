-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 09:23 AM
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
-- Database: `glintix`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_data`
--

CREATE TABLE `ajax_data` (
  `id` int(100) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `awesomeness` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ajax_data`
--

INSERT INTO `ajax_data` (`id`, `fname`, `lname`, `email`, `awesomeness`) VALUES
(1, 'ani  ', 's', 'kunal@gmail.com', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'HRMS'),
(2, 'HRMS'),
(3, 'HRMS'),
(4, 'CORE HR'),
(8, 'hrms1');

-- --------------------------------------------------------

--
-- Table structure for table `demo_table`
--

CREATE TABLE `demo_table` (
  `id` int(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `no_of_emp` int(200) NOT NULL,
  `state` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `function` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo_table`
--

INSERT INTO `demo_table` (`id`, `fname`, `lname`, `email`, `number`, `no_of_emp`, `state`, `designation`, `function`) VALUES
(397, 'Anirudha', 'saha', 'kunal@gmail.com', 2147483647, 2, 'Gujarat', 'Owner', 'Owner/Founder'),
(398, 'ani  ', 's', 'akbar@gmail.com', 2147483647, 3, 'Himachal Pradesh', '3', 'HR'),
(399, 'Anirudha', 's', 'kunal@gmail.com', 2147483647, 1, 'Andaman and Nicobar Islands', '1', '2'),
(400, 'Anirudha', 'saha', 'kumar@gmail.com', 2147483647, 2, 'Arunachal Pradesh', '1', '1'),
(401, 'Anirudha', 'saha', 'akbar@gmail.com', 2147483647, 3, 'Assam', '1', '1'),
(402, 'tirtho', 'badhai', 'kumar@gmail.com', 2147483647, 1, 'Andaman and Nicobar Islands', '2', '2'),
(403, 'koushik', 'saha', 'kushal@gmail.com', 2147483647, 2, 'Arunachal Pradesh', '1', '2'),
(404, 'rishi', 's', 'kumar@gmail.com', 2147483647, 2, 'Bihar', '1', '3'),
(405, 'abhi', 's', 'kunal@gmail.com', 2147483647, 1, 'Goa', '2', 'HR'),
(406, 'Anirudha', 'saha', 'kumar@gmail.com', 2147483647, 1, 'Haryana', '2', 'HR'),
(407, 'e', 'w', 'kunal@gmail.com', 2147483647, 2, 'Himachal Pradesh', '3', 'HR Business Partner'),
(408, 'ani  ', 's', 'kumar@gmail.com', 2147483647, 3, 'Chandigarh', '1', '2'),
(409, 'dcec', 'cec', 'eecece', 2147483647, 1, 'Arunachal Pradesh', '1', '2'),
(410, 'cz', 'cs', 'sc2@d.c', 2147483647, 1, 'Bihar', '3', 'Administation'),
(411, 'Anirudha', 'dwdwd', 'akbar@gmail.com', 2147483647, 3, 'Goa', '2', '1'),
(412, 'Anirudha', 'dwdwd', 'akbar@gmail.com', 1111111111, 3, 'Goa', '2', '1'),
(413, 'Anirudha', 'dwdwd', 'akbar@gmail.com', 1111111111, 3, 'Goa', '2', '1'),
(414, 'ani  ', 'w', 'akbar@gmail.com', 2147483647, 3, 'Haryana', 'Manager', 'HR Compensation & Benefits'),
(415, 'ani  ', 'hiy', 'akbar@gmail.com', 2147483647, 3, 'Haryana', 'Manager', 'HR Compensation & Benefits'),
(416, 'Anirudha', 's', 'kushal@gmail.com', 2147483647, 3, 'Andhra Pradesh', '3', '3'),
(417, 'Anirudha', 'saha', 'ujjal@gmail.com', 2147483647, 3, 'Goa', '3', '3'),
(418, 'Anirudha', ' m', 'kushal@gmail.com', 2147483647, 1, 'Andaman and Nicobar Islands', '3', '2'),
(419, 'Anirudha', 'das', 'aniruddhasaha876@gmail.com', 2147483647, 3, 'Puducherry', '3', '1'),
(420, 'e', 'dwdwd', 'akbar@gmail.com', 2147483647, 2, 'Bihar', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `help_data`
--

CREATE TABLE `help_data` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help_data`
--

INSERT INTO `help_data` (`id`, `user_id`, `email`, `description`, `image`, `created_date`) VALUES
(57, 5, 'kushal@gmail.com', 'dcdsfsvwrgergergergergergervgerg', '9410-daylight-forest-glossy-443446.jpg', '2023-08-03 13:54:15'),
(58, 5, 'kushal@gmail.com', 'dcdsfsvwrgergergergergergervgerg', '1284-daylight-forest-glossy-443446.jpg', '2023-08-03 15:08:58'),
(59, 9, 'akbar@gmail.com', 'sdvsdfddfdvsdv', '2537-ANIRUDDHA_ADHAR.pdf', '2023-08-03 15:11:19'),
(60, 9, 'akbar@gmail.com', 'i have an issue', '3223-Screenshot (2).png', '2023-08-03 16:29:30'),
(61, 9, 'akbar@gmail.com', 'i have an issue', '7846-Screenshot (2).png', '2023-08-03 16:29:35'),
(69, 5, '', '', '', '2023-09-12 11:09:14'),
(70, 5, 'ujjal@gmail.com', 'i have an issue', 'pexels-taha-samet-arslan-13534714.jpg', '2023-09-14 15:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `notification_data`
--

CREATE TABLE `notification_data` (
  `id` int(100) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `user_id` int(200) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_data`
--

INSERT INTO `notification_data` (`id`, `description`, `status`, `user_id`, `created_date`) VALUES
(110, 'vs', 'new noti', 4, '2023-08-10 16:49:28'),
(111, 'ddd', 'd', 5, '2023-08-10 16:49:28'),
(112, 'scacasc', 'sca', 6, '2023-08-10 16:49:28'),
(113, 'csacaasc', 'cadscd', 7, '2023-08-10 16:49:28'),
(114, 'sacasasasasascasc', 'sacasasc', 8, '2023-08-10 16:49:28'),
(115, 'ascasasas ascac', 'active', 9, '2023-08-10 16:49:28'),
(116, ' acaas', 'cadscd', 10, '2023-08-10 16:49:28'),
(118, 'casas', ' adca', 11, '2023-08-10 16:49:28'),
(120, 'adfcfe', 'faew', 5, '2023-08-10 16:49:28'),
(121, 'hi koushik ,you have got a notification ', 'active', 12, '2023-08-10 16:49:28'),
(122, 'hello', 'active', 5, '2023-08-10 16:49:28'),
(123, 'hellooooooooo', 'active', 5, '2023-08-19 17:09:47'),
(136, ',m,m,j,,j', 'active', 12, '2023-08-21 15:46:41'),
(158, '', '', 4, '2023-08-23 14:51:23'),
(159, '', '', 4, '2023-08-23 14:54:27'),
(160, '', '', 4, '2023-08-23 14:55:37'),
(161, 'hasjhohasns', 'active', 12, '2023-08-23 14:57:08'),
(162, 'kemon acho', 'active', 5, '2023-08-25 12:09:02'),
(163, 'hello 6', 'active', 6, '2023-09-10 09:50:51'),
(164, 'hello arindom', 'active', 7, '2023-09-10 09:52:47'),
(165, 'apurva', 'active', 8, '2023-12-01 17:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivered_to` varchar(150) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `deliver_address` varchar(255) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `delivered_to`, `phone_no`, `deliver_address`, `pay_method`, `pay_status`, `order_status`, `order_date`) VALUES
(1, 2, 'Self', '9802234675', 'Matepani-12', 'Cash', 1, 1, '2022-04-10'),
(3, 2, 'Test  Firstuser', '980098322', 'matepani-12', 'Khalti', 0, 1, '2022-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`detail_id`, `order_id`, `variation_id`, `quantity`, `price`) VALUES
(1, 1, 1, 1, 500),
(3, 3, 3, 1, 890);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `dis_price` int(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`, `dis_price`, `category_id`, `uploaded_date`) VALUES
(2, 'Attendance Management System', 'Steer clear of manually updating time and                            maintaining excels with simplified Time and Attendance tool synced across modules like Core                            HR software and payroll management software.', './uploads/pexels-fauxels-3184339.jpg', 890, 0, 4, '2022-04-04'),
(5, 'Hr softwear', 'maintaining excels with simplified Time and Attendance tool synced across modules like Core                            HR software and payroll management software.', './uploads/pexels-fauxels-3184339.jpg', 1850, 0, 4, '2022-04-04'),
(38, 'agd', 'Floral Dresses for Women Basic dresses with Button at Swiss Collecttion.', './uploads/pexels-canva-studio-3153198.jpg', 1200, 1080, 2, '2023-09-07'),
(39, 'Floral Dress', 'Floral Dresses for Women Basic dresses with Button at Swiss Collecttion.', './uploads/pexels-pnw-production-8251149.jpg', 1500, 1200, 2, '2023-09-07'),
(40, 'ani', 'ere', './uploads/Screenshot 2023-09-28 165544.png', 123, 108, 2, '2023-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `product_size_variation`
--

CREATE TABLE `product_size_variation` (
  `variation_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size_variation`
--

INSERT INTO `product_size_variation` (`variation_id`, `product_id`, `size_id`, `quantity_in_stock`) VALUES
(1, 1, 4, 5),
(2, 2, 3, 9),
(3, 2, 2, 3),
(6, 3, 3, 6),
(7, 4, 2, 8),
(8, 5, 4, 8),
(9, 6, 2, 10),
(10, 7, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `account_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `username`, `phone_num`, `email`, `password`, `cpassword`, `usertype`, `account_created`, `last_login`) VALUES
(4, 'amit dash', '8768812220', 'dash@gmail.com', '55555555', '55555555', 'admin', '2023-08-04 05:44:52', '2023-09-11 10:39:48'),
(5, 'ram', '8536053969', 'ram@gmail.com', '77777777', '77777777', 'user', '2023-08-04 05:44:52', '2023-12-02 13:24:12'),
(6, 'adil shah', '7687980989', 'adil@gmail.com', '00000000', '00000000', 'admin', '2023-08-04 05:44:52', '2023-09-10 09:51:36'),
(7, 'arndam sarkar', '9067453223', 'arindam@gmail.com', '11112222', '11112222', 'user', '2023-08-04 05:44:52', '2023-09-10 09:52:21'),
(8, 'mridul mari', '7865454345', 'mridul@gmail.com', '11111122', '11111122', '', '2023-08-04 05:44:52', '2023-12-01 17:05:55'),
(9, 'Deniel', '5467876567', 'deniel@gmail.com', '33333444', '33333444', 'user', '2023-08-04 05:44:52', '2023-12-06 11:31:35'),
(10, 'gulam', '8768963626', 'gulam@gmail.com', '12345678', '12345678', 'user', '2023-08-04 05:44:52', '2023-11-16 11:32:39'),
(11, 'akash', '8000000000', 'akash@gmail.com', '12345678', '12345678', 'admin', '2023-08-04 05:44:52', NULL),
(12, 'koushik saha', '7365672656', 'koushik@gmail.com', '11111111', '11111111', 'user', '2023-08-04 05:44:52', '2023-11-16 11:31:52'),
(13, 'abhi', '8900000000', 'abhi@gmail.com', '99999999', '99999999', 'user', '2023-08-04 05:54:42', NULL),
(14, 'rounak', '8800000000', 'rounak@gmail.com', '11111111', '11111111', 'user', '2023-08-04 06:17:07', NULL),
(15, 'Aniruddha saha', '8373835881', 'ani@gmail.com', '12345678', '12345678', 'admin', '2023-11-03 06:41:31', '2023-12-01 17:03:14'),
(16, 'vivek', '1234567898', 'vvk@gmail.com', '12345678', '12345678', 'user', '2023-12-01 11:26:43', '2023-12-01 16:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `product_id`, `review_desc`) VALUES
(1, 2, 2, 'Comfortable and stylish. I loved it.'),
(2, 2, 5, 'Perfect dress for summer.');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `registered_at` date NOT NULL DEFAULT current_timestamp(),
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `contact_no`, `registered_at`, `isAdmin`, `user_address`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$j9OXXIYS0CG5AYuks62YMeDvuIpo2hZEN4CqfJfujt1yPMnoUq5C6', '9810283472', '2022-04-10', 1, 'newroad'),
(2, 'Test ', 'Firstuser', 'test@gmail.com', '$2y$10$DJOdhZy1InHTKQO6whfyJexVTZCDTlmIYGCXQiPTv7l82AdC9bWHO', '980098322', '2022-04-10', 0, 'matepani-12');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlistdata`
--

CREATE TABLE `wishlistdata` (
  `id` int(11) NOT NULL,
  `user_id` int(200) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `dis_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlistdata`
--

INSERT INTO `wishlistdata` (`id`, `user_id`, `product_id`, `product_name`, `product_desc`, `category_name`, `product_image`, `price`, `dis_price`) VALUES
(183, 5, 2, 'Attendance Management System', 'Steer clear of manually updating time and                            maintaining excels with simplif', 'CORE HR', './uploads/pexels-fauxels-3184339.jpg', 890, 0),
(184, 5, 39, 'Floral Dress', 'Floral Dresses for Women Basic dresses with Button at Swiss Collecttion.', 'HRMS', './uploads/pexels-pnw-production-8251149.jpg', 1500, 1200),
(187, 10, 38, 'agd', 'Floral Dresses for Women Basic dresses with Button at Swiss Collecttion.', 'HRMS', './uploads/pexels-canva-studio-3153198.jpg', 1200, 1080),
(188, 5, 5, 'Hr softwear', 'maintaining excels with simplified Time and Attendance tool synced across modules like Core         ', 'CORE HR', './uploads/pexels-fauxels-3184339.jpg', 1850, 0),
(189, 5, 40, 'ani', 'ere', 'HRMS', './uploads/Screenshot 2023-09-28 165544.png', 123, 108);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_data`
--
ALTER TABLE `ajax_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `uc_cart` (`user_id`,`variation_id`),
  ADD KEY `variation_id` (`variation_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `demo_table`
--
ALTER TABLE `demo_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_data`
--
ALTER TABLE `help_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `helpdata_fr` (`user_id`);

--
-- Indexes for table `notification_data`
--
ALTER TABLE `notification_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid_fr` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `variation_id` (`variation_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_frk` (`category_id`);

--
-- Indexes for table `product_size_variation`
--
ALTER TABLE `product_size_variation`
  ADD PRIMARY KEY (`variation_id`),
  ADD UNIQUE KEY `uc_ps` (`product_id`,`size_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`),
  ADD UNIQUE KEY `uc_wish` (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `wishlistdata`
--
ALTER TABLE `wishlistdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax_data`
--
ALTER TABLE `ajax_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `demo_table`
--
ALTER TABLE `demo_table`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `help_data`
--
ALTER TABLE `help_data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `notification_data`
--
ALTER TABLE `notification_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_size_variation`
--
ALTER TABLE `product_size_variation`
  MODIFY `variation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlistdata`
--
ALTER TABLE `wishlistdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`variation_id`) REFERENCES `product_size_variation` (`variation_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`variation_id`) REFERENCES `product_size_variation` (`variation_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_frk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
