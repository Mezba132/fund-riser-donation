-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 11:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(7, 'Nokibul Amin Mezba', 'cz.mezba@gmail.com', 'how could i beleive you?is it trusted?is it non-profit?is it govt organization?'),
(9, 'mirpur', 'tahmidur_rafi@yahoo.com', 'qweasdasd'),
(11, 'gbgfngfn', 'ggggg', 'ggggggggg'),
(12, 'My clint', 'noemail@h.com', 'hi im poor');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `amount` int(100) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zcode` int(50) DEFAULT NULL,
  `cnumber` int(50) DEFAULT NULL,
  `pin` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`amount`, `fname`, `lname`, `country`, `city`, `zcode`, `cnumber`, `pin`) VALUES
(200, 'Mezba', 'nokibul', 'bangladesh', 'khulna', 899, 147852, 1234),
(500, 'Fname', 'Lname', 'usa', 'NY', 456, 123654, 123),
(1000, 'Fname', 'Lname', 'usa', 'NY', 456, 123654, 123),
(300, 'Fname', 'Lname', 'usa', 'NY', 456, 123654, 123);

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `trust` varchar(100) DEFAULT NULL,
  `rec_name` varchar(100) DEFAULT NULL,
  `rec_email` varchar(100) DEFAULT NULL,
  `per_info` varchar(100) DEFAULT NULL,
  `goal` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`id`, `user_name`, `type`, `title`, `description`, `file`, `trust`, `rec_name`, `rec_email`, `per_info`, `goal`) VALUES
(2, 'user', 'Street Children', 'justin', 'no money', 'uploads/Justin_Bieber_in_2015.jpg', 'neighbour', 'baba', 'baba@gmail.com', 'no info', 300),
(3, 'dip', 'Educational Fee', 'Need help for Microsoft.', 'William Henry \"Bill\" Gates  is an American business magnate, investor, author, and philanthropist. In 1975, Gates and Paul Allen co-founded Microsoft', 'uploads/billGates_236x236.jpg', 'teacher', 'mezba', 'mezba@gmail.com', 'bill', 300),
(4, 'mezba', 'Creative Idea', 'Help Apple', 'Steven Paul \"Steve\" Jobs  was an American entrepreneur, businessman, inventor, and industrial designer', 'uploads/SteveJobs.jpg', 'teacher', 'baba', 'baba@gmail.com', 'orange', 146399),
(5, 'user', 'Foreign Studies', 'Help facebook', 'need money friends..', 'uploads/mark-zuckerberg.jpg', 'Best friend', 'mezba', 'mezba@gmail.com', 'like,comment,share', 300),
(6, 'mezba01', 'Foreign Studies', 'Help facebook', 'rem Ipsum is simply dummy text of the printing and typesetting industrLoremIpsum has', 'uploads/mark-zuckerberg.jpg', 'Me', 'mezba', 'mezba@gmail.com', '123qwe', 500),
(14, 'mezba01', 'Women Worker', 'need education', 'help needed', 'uploads/0e20b2ee50dc72f647a41878c3b829bd.jpg', 'Co-Worker', 'selina gomez', 'baba@gmail.com', 'love money', 50000),
(16, 'mezba01', 'Street Children', 'weed dealer', 'love weed', 'uploads/ed424d8d14d87d0b9cf326e87611c144.jpg', 'Me', 'baba', 'mezba@gmail.com', 'moneyyyyyyyyyyyy', 1000),
(17, 'sp1', 'Women Worker', 'help jamila khan', 'My name is jamila.', 'uploads/2824286961_f7dac82a27.jpg', 'Me', 'mezba', 'mezba@gmail.com', 'Nothing to say', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `full_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm_password` varchar(100) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `role` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`full_name`, `user_name`, `email`, `password`, `confirm_password`, `phone`, `gender`, `file`, `role`) VALUES
('admin', 'admin', NULL, 'admin', NULL, NULL, NULL, NULL, 1),
('', 'dip', NULL, 'dip', NULL, 0, NULL, NULL, 0),
('Jewel', 'Jewel j', 'jewel@gmail.com', 'JEwel1234', 'JEwel1234', 0, 'female', 'photos/Tom_Cruise_avp_2014_4.jpg', NULL),
('', 'mezba', NULL, 'mezba', NULL, 0, NULL, 'photos/bill.jpeg', 0),
('Mezba', 'mezba01', 'mezba@gmail.com', '1245', '1245', 0, NULL, 'photos/6d0a47ece9e784f33b2513b611585ddd.jpg', 0),
('Software project', 'sp1', 'sp1@gmail.com', 'Sp1234567', 'Sp1234567', NULL, NULL, NULL, NULL),
('legend-3', 'user', NULL, 'user', NULL, 112, 'female', 'photos/billGates_236x236.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fundraiser`
--
ALTER TABLE `fundraiser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
