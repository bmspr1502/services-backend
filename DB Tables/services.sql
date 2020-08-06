-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 08:12 PM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `title` varchar(100) NOT NULL,
  `leftcontent` text NOT NULL,
  `rightcontent` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`title`, `leftcontent`, `rightcontent`, `image`) VALUES
('About Us', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of ()()()', 'The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen\"\"\":\"\"\":\"\":', 'images/blog_3.jpg');

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
(1, 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '9443501317', '5f2861648f66a1.91227100.png', 'Thin and Light Laptop @₹39,990', 'Lenovo Ideapad S540', '15.6 inches\r\n8GB RAM\r\ni5 8th gen\r\n512 GB SSD\r\n2GB Dedicated Graphics', 'https://www.youtube.com/watch?v=d4nHHXMlmnI', 'https://www.lenovo.com/in/en/laptops/ideapad/s-series/Lenovo-IdeaPad-S540-14IWL/p/88IPS501190', 1),
(2, 'ABC', 'abcd@gmail.com', '1234567890', '5f293a750d6a02.23907921.jpg', 'Random thing', 'Random Brand', 'This is just a random thing that\\\'s being sold for a random price', 'https://www.youtube.com/watch?v=hY7m5jjJ9mM', 'https://cat-bounce.com/', 1),
(6, 'mark', 'bla@gmail.com', '9445644788', '', 'dhjsfbajshdbfa', 'edrfyghubjnkm', 'xxrcftgvhbjn', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(7, 'mark', 'b@gmail.com', '9445644788', '', 'soap', 'pears', 'blah', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(8, 'Sree', 'a@gmail.com', '9445644788', '5f285a31769bc5.31944296.jpg', 'soap', 'pears', 'aaaaaaaaaaaaaaaaaa', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(13, 'Sree', 'c@gmail.com', '9445644788', '5f282444f1f3d7.23824462.png', 'dhjsfbajshdbfa', 'random', 'rtyu', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(17, 'Pranav', '', '9443501317', '5f285b64421819.84494186.jpg', 'CEG', 'College of Engineering, Guindy', 'The oldest technical institution outside, Europe.', 'https://www.youtube.com/watch?v=ZdVW60fsguQ', 'http://ceg.annauniv.edu/', 1),
(21, 'G Hamsa Rani S', 'hamsasathyaram@gmail.com', '9442359937', '5f2ab54dbf7c41.26816446.jpg', 'Acer Aspire 5', 'Acer', 'Thin and Light laptop ', 'https://www.youtube.com/watch?v=l3hoa-stJs4', 'https://www.youtube.com', 1),
(23, 'aiouiuidshfadf', 'bsdfj@gjab.com', '+919443501', '5f2c4240b8f950.94434641.jpg', 'Fastrack solo track watch', 'Fastrack', 'efasdfasdfadsfasdf', 'https://www.youtube.com/watch?v=z3U0udLH974', 'https://www.lenovo.com/in/en/laptops/ideapad/s-series/Lenovo-IdeaPad-S540-14IWL/p/88IPS501190', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `title` varchar(100) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`title`, `heading`, `content`) VALUES
('SERVICE', 'We Advertise and market your product..', 'This is a website where you can advertise!\r\nThanks for visiting:):)\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `servicepage`
--

CREATE TABLE `servicepage` (
  `logo` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicepage`
--

INSERT INTO `servicepage` (`logo`, `title`, `description`, `id`) VALUES
('006-food.svg', 'Digital Marketing', 'We market your products. And we provide all the resources too.', 5),
('002-travel-1.svg', 'Socialmedia marketing', 'We advertise your products in social media.ha ha', 6),
('004-travel-3.svg', 'Newspaper marketing', 'We  advertise your products in local newspapers..', 9);

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
-- Indexes for table `servicepage`
--
ALTER TABLE `servicepage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `servicepage`
--
ALTER TABLE `servicepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
