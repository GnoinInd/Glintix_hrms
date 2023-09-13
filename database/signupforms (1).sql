-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 11:20 AM
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
-- Database: `signupforms`
--

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
(69, 5, '', '', '', '2023-09-12 11:09:14');

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
(164, 'hello arindom', 'active', 7, '2023-09-10 09:52:47');

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
(5, 'ram', '8536053969', 'ram@gmail.com', '77777777', '77777777', 'user', '2023-08-04 05:44:52', '2023-09-13 10:56:42'),
(6, 'adil shah', '7687980989', 'adil@gmail.com', '00000000', '00000000', 'admin', '2023-08-04 05:44:52', '2023-09-10 09:51:36'),
(7, 'arndam sarkar', '9067453223', 'arindam@gmail.com', '11112222', '11112222', 'user', '2023-08-04 05:44:52', '2023-09-10 09:52:21'),
(8, 'mridul mari', '7865454345', 'mridul@gmail.com', '11111122', '11111122', '', '2023-08-04 05:44:52', NULL),
(9, 'Deniel', '5467876567', 'deniel@gmail.com', '33333444', '33333444', 'user', '2023-08-04 05:44:52', '2023-08-10 15:44:51'),
(10, 'gulam', '8768963626', 'gulam@gmail.com', '12345678', '12345678', 'user', '2023-08-04 05:44:52', NULL),
(11, 'akash', '8000000000', 'akash@gmail.com', '12345678', '12345678', 'admin', '2023-08-04 05:44:52', NULL),
(12, 'koushik saha', '7365672656', 'koushik@gmail.com', '11111111', '11111111', 'user', '2023-08-04 05:44:52', '2023-08-04 16:22:22'),
(13, 'abhi', '8900000000', 'abhi@gmail.com', '99999999', '99999999', 'user', '2023-08-04 05:54:42', NULL),
(14, 'rounak', '8800000000', 'rounak@gmail.com', '11111111', '11111111', 'user', '2023-08-04 06:17:07', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help_data`
--
ALTER TABLE `help_data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `notification_data`
--
ALTER TABLE `notification_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `help_data`
--
ALTER TABLE `help_data`
  ADD CONSTRAINT `helpdata_fr` FOREIGN KEY (`user_id`) REFERENCES `notification_data` (`user_id`);

--
-- Constraints for table `notification_data`
--
ALTER TABLE `notification_data`
  ADD CONSTRAINT `userid_fr` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
