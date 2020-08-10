-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 06:45 AM
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
-- Database: `services_new`
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
('About Us', 'Welcome to Pro-ads, one source for advertising all things [product, ie: shoes, bags, dog treats]. We\'re dedicated to giving you the very best of advertisements, with a focus on three characteristics, dependability, customer service and uniqueness.', 'We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don\'t hesitate to contact us.', '5f30cf66148930.30641967.jpg');

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
(1, 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '9443501317', '5f30cf7f354097.62029831.png', 'Thin and Light Laptop ', 'Lenovo Ideapad S540', '15.6 inches\r\n8GB RAM\r\ni5 8th gen\r\n512 GB NVMe SSD<br>\r\n2GB NVIDIA MX250', 'https://www.youtube.com/watch?v=d4nHHXMlmnI', 'https://www.lenovo.com/in/en/laptops/ideapad/s-series/Lenovo-IdeaPad-S540-14IWL/p/88IPS501190', 1),
(6, 'Mark', 'bla@gmail.com', '9445644788', '5f30cf9314a569.82204292.jpg', 'chair', 'Wow furnitures', 'Enjoy sitting  on this light weight, portable and amazing chair.', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(21, 'G Hamsa Rani S', 'hamsasathyaram@gmail.com', '9442359937', '5f2ab54dbf7c41.26816446.jpg', 'Acer Aspire 5', 'Acer', 'Thin and Light laptop ', 'https://www.youtube.com/watch?v=l3hoa-stJs4', 'https://www.youtube.com', 1),
(24, 'Pranav', 'bsdhfb@lajshbdfga.com', '342341234', '5f2d6bb763c265.40432805.jpg', 'Birthday Greeting Card', 'Cardz', 'Gift and make their day special!', 'https://www.youtube.com/watch?v=l3hoa-stJs4', 'https://cat-bounce.com/', 1),
(27, 'Sreeratcha', 'absdae@gmail.com', '9445644788', '5f2ec7e11f2298.98045713.jpg', 'Glass wares', 'Glassy', 'Decorate your kitchen with our utensils', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(28, 'hemashirisha', 'hemashirisha123@gmail.com', '8825857601', '5f2ecc19c810c3.97474910.jpg', 'Code atrocities', 'Blahhhh stuff', 'Haa haa haa', 'https://youtu.be/l-GsfyVCBu0', 'http://hideous-cave.000webhostapp.com/contact.php', 0),
(29, 'Sree', 'contactab01@gmail.com', '9445644788', '5f2ed2127a2687.64414864.jpg', 'Watch', 'Time-setter', 'Try this super cool watch!!', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 0),
(32, 'Pranav', 'bmspr010502@gmail.com', '9994863760', '5f2eda129ed5f5.59376723.jpg', 'Veg Biryani', 'CEG Hostel Mess', 'Right Taste, Smell, Colour lalala\r\nServed with kurma or cauliflower fry', 'https://www.youtube.com/watch?v=hY7m5jjJ9mM', 'http://ceg.annauniv.edu/', 0),
(33, 'hemashirisha', 'nrishitha25@gmail.com', '8825857601', '5f2eda212bdae4.83895367.jpg', 'Blahhh', 'Blahhhh', 'Blahhhh', 'https://youtu.be/l-GsfyVCBu0', 'http://hideous-cave.000webhostapp.com/contact.php', 0),
(34, 'Ajs ', 'sharanajs2001@gmail.com', '9745668902', '5f2ee02982c270.95904121.jpeg', 'Computer table', 'IKEA', 'Convertible computer table', 'https://m.youtube.com', 'https://www.ikea.com', 0),
(36, 'BMSPR', '2019103555@annauniv.edu.in', '9443501317', '5f2ef9a2bbc422.56803725.jpg', 'CEG, AU', 'College of Engineering, Guindy', 'The Oldest Technical Institution outside Europe', 'https://www.youtube.com/watch?v=etFgZxnOkto', 'http://ceg.annauniv.edu/', 1),
(38, 'ashok', 'vp5016866@gmail.com', '9876543210', '5f2fe640655803.36000619.jpg', 'chair', 'po', 'asdfg', 'https://www.hideous-cave@gf.com', 'https://www.hideous-cave@gf.com', 0);

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
('SERVICES', 'We Advertise and market your products.', 'This is a website where you can advertise!\r\n');

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
('5f2d34b0087475.54240732.svg', 'Digital Marketing', 'We market your products. And we provide all the resources too. <br> ', 5),
('5f2d34c37540f9.12917834.svg', 'Socialmedia marketing', 'We advertise your products in social media.', 6),
('5f30cf50580374.37228519.svg', 'Newspaper Marketing', 'We advertise your ads on newspaper.', 14);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `servicepage`
--
ALTER TABLE `servicepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
