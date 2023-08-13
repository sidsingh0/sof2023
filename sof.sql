-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 10:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `allotments`
--

CREATE TABLE `allotments` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `hr_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
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
(3, 'Grune designs ', 'Yoshita', '2147483647', 'yoshita.chitnis@grunedesigns.com', 'Thane, Mumbai Pune ', 4, 600000, 900000, 'Electrical Technician, Draftsman, Fire Fighting, Plumbing, HVAC, Mechanical Engineering ', 'FACE TO FACE INTERVIEW, ', 'Electrical,Mechanical,'),
(4, 'TCS', 'Harmit', '9372642011', 'sidsinghcs@gmail.com', 'Thane', 2, 32, 32, '32', '32', 'Information Technology,');

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
  `twelfth_marks` float NOT NULL DEFAULT 0,
  `degree_marks` float NOT NULL DEFAULT 0,
  `year_of_passing` int(11) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `dob` date NOT NULL,
  `attended` int(11) NOT NULL DEFAULT 0,
  `top` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `phone`, `email`, `college`, `category`, `field`, `tenth_marks`, `twelfth_marks`, `degree_marks`, `year_of_passing`, `path`, `dob`, `attended`, `top`) VALUES
(11, 'Siddharth', 'Singh', 9372642010, 'sidsinghcs@gmail.com', 'A.P. Shah Institute of Technology', '12th HSC', '12th HSC', 99, 99, 10, 2, 'uploads/9372642010.pdf', '2000-09-07', 0, 0),
(9, 'Siddharth', 'Singh', 9372642011, 'sidsinghcs@gmail.com', 'A.P. Shah Institute of Technology', 'Engineering', 'Computer Science Engineering', 95, 95, 95, 2002, 'uploads/9372642011.pdf', '2023-08-19', 1, 0),
(10, 'Siddharth', 'Singh', 9372642014, 'sidsinghcs@gmail.com', 'A.P. Shah Institute of Technology', 'Engineering', 'Computer Science Engineering', 12, 12, 0, 12, 'uploads/9372642014.pdf', '2023-08-25', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'sofadmin@gmail.com', 'Jobfair@SOF2023_admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotments`
--
ALTER TABLE `allotments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allotments`
--
ALTER TABLE `allotments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
