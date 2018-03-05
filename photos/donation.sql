-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 02:31 PM
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
(11, 'gbgfngfn', 'ggggg', 'ggggggggg');

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
  `goal` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`id`, `user_name`, `type`, `title`, `description`, `file`, `trust`, `rec_name`, `rec_email`, `per_info`, `goal`) VALUES
(2, 'user', 'Street Children', 'justin', 'no money', 'uploads/Justin_Bieber_in_2015.jpg', 'neighbour', 'baba', 'baba@gmail.com', 'no info', '500'),
(3, 'dip', 'Educational Fee', 'Need help for Microsoft.', 'William Henry \"Bill\" Gates  is an American business magnate, investor, author, and philanthropist. In 1975, Gates and Paul Allen co-founded Microsoft', 'uploads/billGates_236x236.jpg', 'teacher', 'mezba', 'mezba@gmail.com', 'bill', '300'),
(4, 'mezba', 'Creative Idea', 'Help Apple', 'Steven Paul \"Steve\" Jobs  was an American entrepreneur, businessman, inventor, and industrial designer', 'uploads/SteveJobs.jpg', 'teacher', 'baba', 'baba@gmail.com', 'orange', '147899'),
(5, 'user', 'Foreign Studies', 'Help facebook', 'need money friends..', 'uploads/mark-zuckerberg.jpg', 'Best friend', 'mezba', 'mezba@gmail.com', 'like,comment,share', '600');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `full_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm_password` varchar(100) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`full_name`, `user_name`, `email`, `password`, `confirm_password`, `phone`, `gender`, `file`) VALUES
('sharif', 'user', NULL, 'user', NULL, 1236544, NULL, NULL),
(NULL, 'mezba', NULL, 'mezba', NULL, NULL, NULL, NULL),
(NULL, 'dip', NULL, 'dip', NULL, NULL, NULL, NULL);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fundraiser`
--
ALTER TABLE `fundraiser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
