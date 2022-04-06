-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 10:04 AM
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
-- Database: `onlinefitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `fees_monthly` int(11) NOT NULL,
  `fees_yearly` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `fees_monthly`, `fees_yearly`) VALUES
(1, 'Gym', 300, 2500),
(3, 'Zumba', 300, 2600),
(4, 'Yoga', 200, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `enquiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `email`, `contact`, `name`, `enquiry`) VALUES
(1, 'testenquiry@gmail.com', 1234565432, 'Test 1', 'Enquiry 1'),
(2, 'arnold@ofc.com', 1234565432, 'Arnold', 'Query regarding Order Placed 2 days Ago');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enroll_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`enroll_id`, `user_id`, `course_id`, `start_date`, `end_date`) VALUES
(1, 9, 4, '2021-11-19', '2021-12-19'),
(2, 13, 3, '2021-11-19', '2022-11-19'),
(3, 10, 1, '2021-11-19', '2021-12-19'),
(5, 18, 1, '2021-11-19', '2022-11-19'),
(6, 9, 3, '2021-11-19', '2021-12-19'),
(7, 13, 4, '2021-11-19', '2021-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 59, 1, 1),
(2, 59, 2, 2),
(3, 60, 1, 1),
(4, 60, 2, 2),
(5, 61, 1, 1),
(6, 61, 2, 2),
(7, 62, 1, 1),
(8, 62, 2, 2),
(9, 63, 2, 1),
(10, 63, 5, 1),
(11, 64, 1, 1),
(12, 64, 2, 1),
(13, 64, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `delivery_date`) VALUES
(59, 13, '2021-10-19', '2021-10-22'),
(60, 13, '2021-10-19', '2021-10-22'),
(61, 13, '2021-10-19', '2021-10-22'),
(62, 13, '2021-10-19', '2021-10-22'),
(63, 9, '2021-11-19', '2021-11-22'),
(64, 18, '2021-11-19', '2021-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `discription` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `title`, `quantity`, `price`, `discription`, `image`) VALUES
(1, 'Skipping Rope', 2, 199, 'Excellent Warm-up Technique for Cricket, Football, Tennis, Swimming, Squash', 'https://i0.wp.com/post.healthline.com/wp-content/uploads/2021/06/974123-9-of-the-Best-Jump-Ropes-in-2021-XYLsports-Jump-Rope.png?w=315&h=840'),
(2, 'Adjustable Dumbbells', 30, 1999, 'Adjustable Dumbbells are Better for Home Use. Humanized Design- Nonslip handle can enhance the friction for comfortable grip.', 'https://media-cldnry.s-nbcnews.com/image/upload/newscms/2021_05/3447390/bowflex-selecttech-552-dumbbell-set-601af8b36a0cb.png'),
(3, 'Yoga Mat', 50, 499, 'Premium Yoga Mats for Men Large, Eco Friendly Non Slip Yoga Mat for Men 6 feet, Non Slip Surface and Optimal Cushioning', 'https://sc04.alicdn.com/kf/H9abbc7d008194dbba80a8c61cccc1b81R.jpg'),
(4, 'Bar & Weights', 15, 2499, 'Kore PVC 10-30 Kg Home Gym Set with One 3 Ft Curl and One Pair Dumbbell Rods with Gym Accessories', 'https://cdn-bcpoc.nitrocdn.com/TKqfpmIjZIVcmnkUTvWEFXVhMTTVDydg/assets/static/optimized/rev-1fd0f0d/wp-content/uploads/2021/01/GYM-BarBell.H03.2k-336x220.png'),
(5, 'Shaker', 24, 349, 'Boldfit Gym Shaker Pro Cyclone Shaker 500ml with Extra Compartment, 100% Leakproof Guarantee, Ideal for Protein & Preworkout', 'https://i.pinimg.com/originals/bb/68/81/bb6881298efae41fbcfa8ecd81662ae9.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `contact_no` bigint(10) UNSIGNED NOT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `blood_grp` varchar(3) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `is_admin`, `name`, `password`, `address`, `email`, `contact_no`, `height`, `weight`, `blood_grp`, `dob`) VALUES
(9, 1, 'dhyan', '$2y$10$ZoYS6svfezaO1CfSb9N0suGExYkLh7cIjZq5EO6gze8KYyiH2Tc5m', 'santacruz', 'dhyan@ofc.com', 1234123412, 182, 75, 'A+', '2021-10-21'),
(10, 1, 'pushpit', '$2y$10$7Lt/vngfSZdA25u3dkzt8O4q8X1tI7kpsS9JgSZmUghkuqbzhDIlu', 'SVP', 'pushpit@ofc.com', 7865898761, 168, 66, 'A+', '2021-10-21'),
(13, 0, 'Pratham', '$2y$10$DKWog1PLuAWX.SWNOYSZweblKx.Xa2qdGYjiFFDHxxciUjd7lRlQC', 'Bhayander West', 'prathamjajodia1@gmail.com', 8080822925, 170, 52, 'B+', '2001-12-01'),
(16, 0, 'Sumedha', '$2y$10$wYko2QWWX.xXpeQwuBrUmOk1ZSmDO/HU7HCIbWOgO6wxube1FHvxO', 'Mumbai', 'sumedhamahendra@gmail.com', 9999999998, 170, 50, 'A+', '2001-04-03'),
(18, 0, 'Arnold', '$2y$10$FVmFeb2JksgmVnMo1G9HZOcdMqKP/3c86oF5qHTWR4ycDHVW1Rqna', '104, SWZ Apt., This Street, Vile Parle', 'arnold@ofc.com', 9876765897, 188, 107, 'O+', '1947-07-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `item_ibfk_1` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact_no` (`contact_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
