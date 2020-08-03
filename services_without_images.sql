-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 05:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `product`, `brand`, `description`, `youtube`, `website`, `visibility`) VALUES
(1, 'PRANAVA RAMAN', 'bmspr1502@gmail.com', '9443501317', 'Thin and Light Laptop @₹39,990', 'Lenovo Ideapad S54', '15.6 inches\r\n8GB RAM\r\ni5 8th gen\r\n512 GB SSD\r\n2GB Dedicated Graphics 🤞', 'https://www.youtube.com/watch?v=d4nHHXMlmnI', 'https://www.lenovo.com/in/en/l', 1),
(2, 'ABC', 'abcd@gmail.com', '1234567890', 'Random thing', 'Random Brand', 'This is just a random thing that\\\'s being sold for a random price', 'https://www.youtube.com/watch?v=hY7m5jjJ9mM', 'https://cat-bounce.com/', 1),
(3, 'Watch maker', 'watchmaker@gmail.com', '2154681934', 'Fastrack solo track watch', 'Fastrack', 'This is new edition Waterproof watch with 64 feet water resistant and 90 years long lasting battery. it also comes with 1 year warranty for battery. It is rated as the most comfortable to wear watch in India. Grab it soon. ', 'https://www.youtube.com/watch?v=z3U0udLH974', 'http://ninjaflex.com/', 1),
(4, 'Yadhtrib Greeter', 'greetings@bday.com', '3216549870', 'Birthday Greeting Card', 'Brand: Green prints', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'https://www.youtube.com/watch?v=l3hoa-stJs4', 'http://burymewithmymoney.com/', 1);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
