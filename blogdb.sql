-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 12:54 AM
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
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'cars'),
(2, 'Book'),
(3, 'Technology'),
(59, 'Family'),
(61, 'Finance'),
(63, 'Fashion'),
(64, 'Educational'),
(65, 'food'),
(66, 'Politics');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_cat` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `luggage` int(6) NOT NULL,
  `doors` int(6) NOT NULL,
  `passengers` int(20) NOT NULL,
  `price` float NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `id_cat`, `title`, `content`, `luggage`, `doors`, `passengers`, `price`, `publish`, `image`) VALUES
(7, '2024-05-16 22:33:25', 1, 'Audi Q7 3.0 TFSI 272hp quattro', '   Audi Q7 3.0 TFSI 272hp Quattro is a 2009 SUV model with 8 speed automatic. With a power of 200 KW you can reach 0-100km h in just 7,9 seconds and a maximum speed of 222 km/h with an urban consumption of 14,7 l/100km. The engine has a capacity of 2995 cc with 6, V engine cylinders and 4 valves per cylinders. Also this model has a weight of with coil springs front suspension and a coil springs rear suspension.this model has a weight of with coil springs front suspension and a coil springs rear suspension.this model has a weight of with coil springs front suspension and a coil springs rear suspension.', 4, 5, 5, 99, 1, '6cf26d1c9176e731a3319312e371fabb.jpeg'),
(8, '2024-05-16 22:25:20', 65, 'Cooking', 'Quick and Easy: Simple recipes that can be made in a short time.\r\nHealthy Recipes: Nutritious and balanced meal ideas.\r\nVegetarian/Vegan: Plant-based recipes.\r\nCooking: Step-by-step guides for preparing various dishes.\r\nBaking: Recipes for cakes, bread, pastries, and other baked goods.\r\nQuick and Easy: Simple recipes that can be made in a short time.\r\nHealthy Recipes: Nutritious and balanced meal ideas.\r\nVegetarian/Vegan: Plant-based recipes.\r\nCooking: Step-by-step guides for preparing various dishes.\r\nBaking: Recipes for cakes, bread, pastries, and other baked goods.\r\nQuick and Easy: Simple recipes that can be made in a short time.', 1, 2, 2, 365, 1, 'c407e43a9106b3e118a3cece875377a5.jpeg'),
(10, '2024-05-16 22:24:13', 59, 'Travel Blogs', 'Travel Blogs: Featuring travel experiences, tips, itineraries, and destination guides, often with stunning photography.\r\nTravel Blogs: Featuring travel experiences, tips, itineraries, and destination guides, often with stunning photography.\r\n\r\nTravel Blogs: Featuring travel experiences, tips, itineraries, and destination guides, often with stunning photography.\r\n\r\nTravel Blogs: Featuring travel experiences, tips, itineraries, and destination guides, often with stunning photography.\r\nTravel Blogs: Featuring travel experiences, tips, itineraries, and destination guides, often with stunning photography.\r\nTravel Blogs: Featuring travel experiences, tips, itineraries, and destination guides, often with stunning photography.', 2, 2, 2, 332, 1, '14b0557d7142da2aa841873f9f32bd49.jpeg'),
(12, '2024-05-16 22:30:34', 3, 'Tech', 'Tech Blogs: Covering technology news, reviews of gadgets and software, and tutorials.Tech Blogs: Covering technology news, reviews of gadgets and software, and tutorials.\r\nTech Blogs: Covering technology news, reviews of gadgets and software, and tutorials.\r\nTech Blogs: Covering technology news, reviews of gadgets and software, and tutorials.\r\nTech Blogs: Covering technology news, reviews of gadgets and software, and tutorials.', 48, 88, 45, 7777, 1, '773849d4468f0e79401dc0c7f9c3d7c4.png'),
(15, '2024-05-16 22:32:08', 63, 'Fashion', ' Fashion Blogs: Focused on fashion trends, style tips, outfit \r\nFashion Blogs: Focused on fashion trends, style tips, outfit inspiration, and sometimes personal style journeys.\r\n\r\nFashion Blogs: Focused on fashion trends, style tips, outfit inspiration, and sometimes personal style journeys.\r\nFashion Blogs: Focused on fashion trends, style tips, outfit inspiration, and sometimes personal style journeys.\r\n\r\nFashion Blogs: Focused on fashion trends, style tips, outfit inspiration, and sometimes personal style journeys.', 1, 4, 5, 43, 1, '6d94e28e804374a4725576a2255b5239.jpeg'),
(16, '2024-05-16 22:34:24', 59, 'vgfbdhjks22', ' Audi S4 3.0 TFSI Quattro is a 2011 Sedan model with 6 speed automatic with double clutch. With a power of 245 KW you can reach 0-100km h in just 5,0 seconds and a maximum speed of 250 km/h with an urban consumption of 10,7 l/100km. The engine has a capacity of 2995 cc with 6, V engine cylinders and 4 valves per cylinders. Also this model has a weight of with coil springs front suspension and a coil springs rear suspension.', 0, 0, 0, 0, 1, '60423fa4466ae28aadbc51eea5835d31.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `regdate` timestamp NULL DEFAULT current_timestamp(),
  `fullname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regdate`, `fullname`, `name`, `email`, `password`, `active`, `image`) VALUES
(1, '2023-10-31 19:02:52', 'aalaa elsayed', 'alaaaa', 'mknddf@mdo.com', '$2y$10$SxdJAdxsi/nCVXI7edy04.xblt7T8zJKNdKTIeT9hbZxBMQgHQTWy', 1, ''),
(2, '2023-10-31 18:59:16', 'aalaa elsayed', 'alaa95', 'amira25@gmail.com', '$2y$10$xWhKRM7y1MEEmrKRkVYMH.aV0P4y94gSODrdqrz8RISlwFKNq9Vo2', 1, ''),
(3, '2023-10-24 09:21:53', 'alaaelsayed elsayed', 'aaaaa', 'asf@kkk.com', '$2y$10$sk5IyKa9eFF3UbfEvijhAucSpMxZbJRMlnmRGjKnJpRfEV3J1UW8q', 1, ''),
(4, '2023-10-31 19:01:05', 'fatma elsayed', 'fatma65', 'fatma@kkk.com', '$2y$10$84gssdkP7qtcSA6efUhrdeu82sNawCDkTGqNQJ5NxHqKjqCffWnSy', 1, ''),
(5, '2023-10-24 13:22:16', 'amira elsayed', 'amira2003', 'amiraelsayed@gmail.com', '$2y$10$R.BOSpeak5yVEA9BeMsHuOfHz9WSLhOaI7MwaHZAcT6PfLLwhWm1.', 1, ''),
(6, '2023-10-30 12:09:36', 'alaaelsayed', 'esraa96', 'esraa96@gmail.com', '$2y$10$jFXNp7me4q03QhQkTq61aOem9BndxkBHJ6dvu/m6x4y.Ct1UAo08K', 1, ''),
(7, '2023-11-02 20:16:32', 'alaaelsayed elsayed', 'alaaaa5', 'esraa9@gmail.com', '$2y$10$pl5Gm8Nbx.2csq3.tOroXOnx1l9Hgtrz5q38lhHj3Ko742TNxyQFW', 1, ''),
(8, '2024-05-16 14:56:38', 'dd', 'dd', 'dd@gmail.com', '$2y$10$6VpnCBefcDOIERAJWrr5FuowpGcBeFRyeZlwh9Zvz2duLKk9AVnAC', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
