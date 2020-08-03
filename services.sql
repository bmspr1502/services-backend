-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 04:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `services`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `product` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `image`, `product`, `brand`, `description`, `youtube`, `website`, `visibility`) VALUES
(1, 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '9443501317', '', 'Thin and Light Laptop @₹39,990', 'Lenovo Ideapad S540', '15.6 inches\r\n8GB RAM\r\ni5 8th gen\r\n512 GB SSD\r\n2GB Dedicated Graphics', 'https://www.youtube.com/watch?v=d4nHHXMlmnI', 'https://www.lenovo.com/in/en/l', 1),
(2, 'ABC', 'abcd@gmail.com', '1234567890', '', 'Random thing', 'Random Brand', 'This is just a random thing that\\\'s being sold for a random price', 'https://www.youtube.com/watch?v=hY7m5jjJ9mM', 'https://cat-bounce.com/', 1),
(5, 'mark', '2019103585@annauniv.edu.in', '9445644788', '', 'blah', 'blah', 'blahhhhhhhhhhhh', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0),
(6, 'mark', 'bla@gmail.com', '9445644788', '', 'dhjsfbajshdbfa', 'edrfyghubjnkm', 'xxrcftgvhbjn', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0),
(7, 'mark', 'b@gmail.com', '9445644788', '', 'soap', 'pears', 'blah', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0),
(8, 'Sree', 'a@gmail.com', '9445644788', '', 'soap', 'pears', 'aaaaaaaaaaaaaaaaaa', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0),
(10, 'mark', 'eeeee@gmail.com', '9445644788', '', 'soap', 'pears', 'mmmmmmmmmmmmmmm', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0),
(11, '', '', '', '5f2821a7c20936.95757035.jpg', '', '', '', '', '', 0),
(12, 'Sree', 'ab@gmail.com', '9445644788', '', 'soap', 'pears', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0),
(13, 'Sree', 'c@gmail.com', '9445644788', '5f282444f1f3d7.23824462.png', 'dhjsfbajshdbfa', 'random', 'rtyu', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
