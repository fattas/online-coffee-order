-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 12:14 AM
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
-- Database: `coffee-blend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminname`, `email`, `password`, `created_at`) VALUES
(3, 'admin2', 'admin2@gmail.com', '$2y$10$B2aTNRf3nes.8/Dc0sP96.okTpm2S5S8Zn1EX7xI6SXR3HIPcOjcC', '2024-05-28 11:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Pending',
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `first_name`, `last_name`, `date`, `time`, `phone`, `message`, `status`, `user_id`, `created_at`) VALUES
(1, 'Andrew', 'Laikkonenn', '2024-05-29', '1:00am', '0318212831', 'sds dasd asdsad', 'Pending', 8, '2024-05-25 03:48:52'),
(2, 'Fattah', 'fdfdfd', '2024-05-30', '12:30am', '0318212831', 'jjjjjjj', 'Pending', 8, '2024-05-25 03:54:22'),
(3, 'sdasdad', 'Laikkonenn', '2024-05-29', '12:30am', '0318212831', 'sdsd', 'Pending', 8, '2024-05-25 04:10:39'),
(4, 'sdasdad', 'Satrio', '2024-05-27', '12:30am', '676755', 'dd', 'Pending', 8, '2024-05-25 05:25:36'),
(5, 'Andrew', 'Laikkonenn', '5/31/2024', '12:00am', '0318212831', 'sa', 'Done', 9, '2024-05-28 13:17:46'),
(6, 'Fattah', 'Akbar', '6/4/2024', '1:00am', '0318212831', 'hi', 'Done', 10, '2024-05-30 22:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `zip_code` int(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(200) NOT NULL,
  `total_price` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `state`, `street_address`, `town`, `zip_code`, `phone`, `user_id`, `status`, `total_price`, `created_at`) VALUES
(1, 'sdsd', 'sdsdsd', 'Indonesia', 'sdsdsd', 'sdsdsd', 34343, '0318212831', 9, 'Delivered', 38007, '2024-05-28 02:54:58'),
(2, 'sdsd', 'sdsdsd', 'Indonesia', 'sdsdsd', 'sdsdsd', 34343, '0318212831', 9, 'Delivered', 38007, '2024-05-28 02:55:33'),
(3, 'Andrew', 'Satrio', 'Indonesia', 'sda', 'sdsdsd', 34343, '0318212831', 9, 'Pending', 53000, '2024-05-28 06:40:42'),
(4, 'Andrew', 'Laikkonenn', 'Indonesia', 'sdsdsd', 'sdsdsd', 34343, '2343434', 9, 'Pending', 53000, '2024-05-28 07:46:34'),
(5, 'Fattah', 'Akbar', 'Indonesia', 'PUP Bekasi', 'Bekasi', 17610, '0318212831', 10, 'Delivered', 38000, '2024-05-30 22:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `created_at`, `type`) VALUES
(1, 'Capuccino Coffee', 'menu-1.jpg', 'Nikmati Kelezatan Khas Capuccino dalam Setiap Tumpukan Aroma Kopi Segera.', 15000, '2024-05-28 05:46:56', 'drink'),
(2, 'Ice Coffee', 'menu-3.jpg', 'Nikmati Keberanian Es Kopi yang Segar, Dengan Sentuhan Manis dan Kenikmatan Tiada Tara.', 8000, '2024-05-28 05:47:49', 'drink'),
(3, 'Hot Cake Honey', 'dessert-1.jpg', 'Kesegaran Hot Cake yang Dibalut dengan Madu, Menghadirkan Rasa Manis yang Menggoda di Setiap Gigitan.', 30000, '2024-05-28 05:48:20', 'dessert'),
(4, 'Pancake', 'dessert-4.jpg', 'Pancake Lezat, Paduan Manis dan Lembut yang Tak Tertandingi, Cocok untuk Menemani Setiap Kesempatan.', 30000, '2024-05-28 05:48:20', 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `username`, `created_at`) VALUES
(1, 'Rasa yang nikmat dinikmati dipagi hari selalu mencerahkan hari-hariku. Dengan Kebiasaan kurir yang begitu cepat dengan senang hati aku menantikanmu untuk datang.', 'user@gmail.com', '2024-05-28 03:06:45'),
(2, 'Muaantaabb', 'user@gmail.com', '2024-05-28 03:07:05'),
(3, 'tempatnya nyaman dan asik karena dihibur sama band kebanggaan RT', 'user@gmail.com', '2024-05-28 13:20:10'),
(4, 'Pengiriman Cepat!', 'fattah', '2024-05-30 22:10:04'),
(5, 'Tempatnya Bagus!', 'fattah', '2024-05-30 22:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(9, 'user@gmail.com', 'user@gmail.com', '$2y$10$84zGo4cSIwAlJKB5F6zw1uEVuMIFxuqrkZYKHakJUe5aFtokGuV1G', '2024-05-19 06:13:23'),
(10, 'fattah', 'fattah@gmail.com', '$2y$10$rIOUxpigxbhADKgCfPpFyeePyxUWQzHM1xQf4qRFKtb9.dLh9K7Wa', '2024-05-30 22:04:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
