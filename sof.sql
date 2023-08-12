-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 07:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sof`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `hr_name` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `job_location` varchar(400) NOT NULL,
  `position_count` int(10) NOT NULL,
  `average_ctc` int(20) NOT NULL,
  `maximum_ctc` int(20) NOT NULL,
  `job_brief` varchar(500) NOT NULL,
  `selection_brief` varchar(500) NOT NULL,
  `categories` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `hr_name`, `phone`, `email`, `job_location`, `position_count`, `average_ctc`, `maximum_ctc`, `job_brief`, `selection_brief`, `categories`) VALUES
(1, 'TCS', 'Harmit', 2147483647, 'sidsinghcs@gmail.com', 'Thane', 2, 222, 2222, 'rhbhwrgEFG', 'gawasfwaf', 'Computer Science,');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `college` varchar(250) NOT NULL,
  `category` varchar(100) NOT NULL,
  `field` varchar(300) NOT NULL,
  `tenth_marks` float NOT NULL,
  `twelfth_marks` float NOT NULL,
  `degree_marks` float NOT NULL,
  `year_of_passing` int(11) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `phone`, `email`, `college`, `category`, `field`, `tenth_marks`, `twelfth_marks`, `degree_marks`, `year_of_passing`, `path`) VALUES
(6, 'Siddharth', 'Singh', 992094562, 'sidsinghcs@gmail.com', 'A.P. Shah Institute of Technology', 'HSC (12th passed)', 'HSC (12th passed)', 100, 100, 100, 2002, 'uploads/992094562.pdf'),
(1, 'Siddharth', 'Singh', 9372642011, 'sidsinghcs@gmail.com', 'A.P. Shah Institute of Technology', 'Engineering', 'Computer Science Engineering', 12, 12, 12, 12, ''),
(2, 'Harmit', 'Saini', 9967775891, 'bmovies52@gmail.com', 'A.P. Shah Institute of Technology', 'Engineering', 'Information Technology Engineering', 95, 70, 98, 2002, ''),
(3, 'Harmit', 'Saini', 99677758917, 'bmovies52@gmail.com', 'A.P. Shah Institute of Technology', 'Non-Engineering/Diploma', 'Diploma', 95, 70, 98, 2002, ''),
(4, 'Harmit', 'Saini', 9967775891799, 'bmovies52@gmail.com', 'A.P. Shah Institute of Technology', 'Engineering', 'Computer Science Engineering', 95, 70, 98, 2002, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
