-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 09:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yokyo2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user`, `date`, `comment`, `rate`) VALUES
(19, 'purnagg', '2023/06/14', 'great', 5),
(25, 'karan', '2023/06/22', 'sad', 2),
(26, 'karishma', '2023/06/25', 'Wow!!!!', 4),
(28, 'purna', '2023/07/05', 'Lets go nepal. You can do !!', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`) VALUES
(11, '2023 NBA Draft: Victor Wembanyama selected No. 1 by San Antonio Spurs', 'The San Antonio Spurs selected Victor Wembanyama with the No. 1 pick in the', 'pc5fsi1q1fhvfbdny7g3.webp'),
(12, 'Meet Italian ‘Spider Man’ Mattia Furlani: Born to jump', 'Imagine starting a new athletics discipline and being able to aim for a wor', 'rc0vatqyywhrrhwo6wj8.webp'),
(13, 'Abe Hifumi, Uta among four named early for Paris 2024 as Japan judo get head start', 'Olympic champion sibilings Abe Hifumi and Uta have won early qualification ', 'zajiuobzfpbaf7srujdh.webp'),
(14, 'European Games 2023: Viktor Axelsen and Carolina Marin cruise into semi-finals in Poland', 'Reigning European badminton champions Viktor Axelsen and Carolina Marin sec', 'kp0fxwgbp5hjzakhn9hq.webp'),
(15, 'Olympic all-around champions Simone Biles, Sunisa Lee will begin comebacks at 2023 U.S. Classic', 'The last two Olympic all-around gymnastics champions Sunisa Lee and Simone', 'ixx0jslab6uvbnno2odk.webp'),
(16, 'Aleah Finnegan on Paris 2024: “We’re just seeing where this journey goes.”', 'Two years removed from missing out on a chance to advance to the 2021 U.S.', 'zrthckphi8cey1k1wczh.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `phone_number`, `dob`, `occupation`, `country`, `gender`, `password`, `role`, `status`) VALUES
(7, 'Sajeet Gurung', 'sajeet', 'sajeet@gmail.com', '42353554', '1988-12-31', 'student', 'Nepal', 'Male', '$2y$10$9sCGv5M8j/0fmZSm1cNqw.bA1DACx37Pa8KdDO1vs0ZpCKOsHIUvy', 'user', '1'),
(8, 'Karishma Grg', 'karishma', 'gurungkg1000@gmail.com', '034245326', '2001-12-31', 'student', 'United Kingdom', 'Female', '$2y$10$ecJDzvnzX21TbxbPuIzhSeDxVt9VRdJGxYBMJI3AqAUMp1D3Zv5xu', 'user', '1'),
(10, 'Purna Gurung', 'purna', 'purna0732@gmail.com', '9824288552', '2000-08-07', 'student', 'Nepal', 'Male', '$2y$10$.3vYYRQ/NmbVB7i1VUd6.u5AaAVLNNl12Z/F6/q4rHSblmuBWuj5W', 'user', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
