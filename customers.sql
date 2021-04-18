-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 04:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `reciever` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `reciever`, `balance`, `datetime`) VALUES
(1, 'Trishna Sridhar', 'Saral Mehrotra', 3200, '2021-04-17 19:14:49'),
(2, 'Akanksha Tak', 'Shantanu Mitra', 5600, '2021-04-17 19:15:26'),
(3, 'Rishi Aurora', 'Ishita Basu', 1278, '2021-04-17 19:16:07'),
(4, 'Isha Goel', 'Saral Mehrotra', 9000, '2021-04-17 19:16:59'),
(5, 'Ishita Basu', 'Akanksha Tak', 3200, '2021-04-17 19:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Trishna Sridhar', 'trishnsridhar@gmail.com', 60000),
(2, 'Shantanu Mitra', 'shantanumitra@gmail.com', 48600),
(3, 'Akanksha Tak', 'akanksharak@gmail.com', 73600),
(4, 'Saral Mehrotra', 'saralmehrotra@gmail.com', 551000),
(5, 'Vishal Mital', 'vishalmital@gmail.com', 67500),
(6, 'Ishita Basu', 'ishitabasu@gmail.com', 318078),
(7, 'Vasu Sharma', 'vasusharma@gmail.com', 875000),
(8, 'Isha Goel', 'ishagoel@gmail.com', 25000),
(9, 'Rishi Aurora', 'rishiarora@gmail.com', 89722),
(10, 'Ankit Gupta', 'ankitgupta@gmail.com', 64000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
