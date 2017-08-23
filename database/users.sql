-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 03:48 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineob`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(23) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `encrypted_password` varchar(80) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `email`, `encrypted_password`, `salt`, `created_at`) VALUES
(1, '5975d800019684.87968481', 'Kelvin Randu', 'kelvinrandu@gmail', 'uT5NcpAxgjyTc4Poo5AWq9UvrVEwMGUyZmQ4MGY1', '00e2fd80f5', '2017-07-24 14:20:32'),
(2, '5975da3a167125.74366246', 'silas', 'silas@gmail', 'kqRrOLMOl23LcSEXEkhbGsSfruk0YmJhMGY1ODJm', '4bba0f582f', '2017-07-24 14:30:02'),
(3, '5975da737c1751.60324197', 'Mubari', 'mubari@gmail.com', 'vbKY6iLAsjFvXu06dXzF4Fq8d0M4OWY2MGM4NzUx', '89f60c8751', '2017-07-24 14:30:59'),
(4, '5975e994976b78.21756695', 'Peter', 'peter@gmail.com', 'Qy/LCZjC0yeZZKj9YRcGuXRYQ4hlNTA4ODE4MjQ2', 'e508818246', '2017-07-24 15:35:32'),
(5, '5975f71e9ab3d9.00762425', 'Cathy', 'cathy@gmail.com', 'QbA2EKjVs76H8LZasJQcQEhu1nM1NmQ4MGU4N2Zh', '56d80e87fa', '2017-07-24 16:33:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
