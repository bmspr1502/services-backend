-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 07:35 PM
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
('It ain\'t abt\' us', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of ()()()\n\'\'\'\'\'\'\'\'\'\n\'\'\'\'\nsdfa', 'The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t \"\"\"\", \"\"\"\":::;\nsdfadsfa;sjdjf', '5f2d6e3957ee85.92300049.jpg');

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
(1, 'PRANAVA RAMAN B M S', 'bmspr1502@gmail.com', '9443501317', '5f2d6af2601b24.00820563.jpg', 'Thin and Light Laptop @₹39,990', 'Lenovo Ideapad S540', '15.6 inches\r\n8GB RAM\r\ni5 8th gen\r\n512 GB NVMe SSD<br><i>ksdka</i>\r\n2GB Dedicated Graphics', 'https://www.youtube.com/watch?v=d4nHHXMlmnI', 'https://www.lenovo.com/in/en/laptops/ideapad/s-series/Lenovo-IdeaPad-S540-14IWL/p/88IPS501190', 1),
(2, 'ABC', 'abcd@gmail.com', '1234567890', '5f293a750d6a02.23907921.jpg', 'Random thing', 'Random Brand', 'This is just a random thing that\\\'s being sold for a random price<br>\r\nLalalala', 'https://www.youtube.com/watch?v=hY7m5jjJ9mM', 'https://cat-bounce.com/', 1),
(6, 'mark', 'bla@gmail.com', '9445644788', '5f2c5ad6b5a0b5.28685738.jpg', 'dhjsfbajshdbfa', 'edrfyghubjnkm', 'xxrcftgvhbjn', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(7, 'mark', 'b@gmail.com', '9445644788', '', 'soap', 'pears', 'blah', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(8, 'Sree', 'a@gmail.com', '9445644788', '5f285a31769bc5.31944296.jpg', 'soap', 'pears', 'aaaaaaaaaaaaaaaaaa', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(13, 'Sree', 'c@gmail.com', '9445644788', '5f282444f1f3d7.23824462.png', 'dhjsfbajshdbfa', 'random', 'rtyu', 'https://www.youtube.com/watch?v=yX6hXlRP_1c', 'https://www.w3schools.com/php/func_mysqli_connect_errno.asp', 1),
(17, 'Pranav', '', '9443501317', '5f285b64421819.84494186.jpg', 'CEG', 'College of Engineering, Guindy', 'The oldest technical institution outside, Europe.', 'https://www.youtube.com/watch?v=ZdVW60fsguQ', 'http://ceg.annauniv.edu/', 1),
(21, 'G Hamsa Rani S', 'hamsasathyaram@gmail.com', '9442359937', '5f2ab54dbf7c41.26816446.jpg', 'Acer Aspire 5', 'Acer', 'Thin and Light laptop ', 'https://www.youtube.com/watch?v=l3hoa-stJs4', 'https://www.youtube.com', 1),
(24, 'Pranav', 'bsdhfb@lajshbdfga.com', '342341234', '5f2d6bb763c265.40432805.jpg', 'Birthday Greeting Card', 'fasdf', 'asdfawdfqwefafdfsd', 'https://www.youtube.com/watch?v=l3hoa-stJs4', 'https://cat-bounce.com/', 1),
(25, 'afqwer', 'bsdf234j@gjab.com', '1234123432', '5f2d6efd890b74.23382862.jpg', 'asdfadsf', 'asdfasd', 'tywertwretwert', 'https://www.youtube.com/watch?v=l3hoa-stJs4', 'https://www.youtube.com', 1);

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
('SERVICEs', 'We Advertise and markeedafsdfa your produdfsct..', 'This is a website where you can advertise!\r\nThanks for visiting:)😁hello world hi there\r\n<br><i>lalalala</i>\r\nsdfa<br>\r\nasdfasdf\r\n<marquee>Just beat it</marquee>\r\n\'\'asdf\';asd\';lfja;sdf\'l;asdf\';alks\'\"\"\"\"\'\'\'\"\r\n<b>ghsd</b>');

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
('5f2d34b0087475.54240732.svg', 'Digital Marketing\'s ', 'We market your products. And we provide all the resources too. <br> <marquee>Lalala</marquee>', 5),
('5f2d34c37540f9.12917834.svg', 'Socialmedia marketing', 'We advertise your products in social media.ha ha, \'\'\'\'\"\"\'\'\'\"', 6),
('5f2d34d56f0026.47969333.svg', 'Newspaper marketing', 'We  advertise your products in local newspapers..', 9),
('5f2d59ec1c1d42.88936416.svg', 'Weird Marketing', 'Blah Blah Blah', 11),
('5f2d6e563ae188.07999391.svg', 'dfasd', 'asdfasdf', 12);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `servicepage`
--
ALTER TABLE `servicepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
