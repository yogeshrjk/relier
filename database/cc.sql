-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 04:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_sign_in`
--

CREATE TABLE `admin_sign_in` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_sign_in`
--

INSERT INTO `admin_sign_in` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Admin', 'yogesh@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sub_1` int(200) NOT NULL,
  `sub_2` int(200) NOT NULL,
  `sub_3` int(200) NOT NULL,
  `sub_4` int(200) NOT NULL,
  `sub_5` int(200) NOT NULL,
  `sub_6` int(200) NOT NULL,
  `lab_1` int(200) NOT NULL,
  `lab_2` int(200) NOT NULL,
  `lab_3` int(200) NOT NULL,
  `lab_4` int(200) NOT NULL,
  `boa` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `percent` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `email`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `lab_1`, `lab_2`, `lab_3`, `lab_4`, `boa`, `total`, `percent`) VALUES
(1, 'nishu@gmail.com', 12, 34, 12, 34, 12, 10, 3, 6, 5, 4, 56, 200, 57),
(2, 'teshu@gmail.com', 23, 45, 45, 34, 35, 45, 5, 3, 2, 3, 56, 123, 45),
(3, 'yogesh@gmail.com', 23, 43, 23, 12, 34, 0, 3, 4, 2, 0, 45, 134, 56),
(4, 'manoj@gmail.com', 34, 45, 57, 45, 67, 0, 4, 6, 7, 0, 67, 167, 87);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `event_banner` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `event_banner`, `comment`) VALUES
(33, 'agresita', 'agresita-1.jpg', 'Agresita, a new initiative and visionary techfest, celebrating its second edition in SSIPMT Raipur, an uprising fest of central India. '),
(34, 'video making', 'video-1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_test`
--

CREATE TABLE `class_test` (
  `id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int(8) NOT NULL,
  `sub_1` varchar(200) NOT NULL,
  `sub_2` varchar(200) NOT NULL,
  `sub_3` varchar(200) NOT NULL,
  `sub_4` varchar(200) NOT NULL,
  `sub_5` varchar(200) NOT NULL,
  `sub_6` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_test`
--

INSERT INTO `class_test` (`id`, `branch`, `semester`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`) VALUES
(6, 'it', 7, 'Data Mining & Warehousing', '\r\nManagement Information System & IT', '\r\nArtificial Intelligence & Expert Systems', '\r\nCryptography & Network Security', '\r\nAdvanced computer architecture', '');

-- --------------------------------------------------------

--
-- Table structure for table `ct1_marks`
--

CREATE TABLE `ct1_marks` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sub_1` int(40) NOT NULL,
  `sub_2` int(40) NOT NULL,
  `sub_3` int(40) NOT NULL,
  `sub_4` int(40) NOT NULL,
  `sub_5` int(40) NOT NULL,
  `sub_6` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct1_marks`
--

INSERT INTO `ct1_marks` (`id`, `email`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`) VALUES
(75, 'teshu@gmail.com', 23, 32, 12, 31, 28, 21),
(76, 'nishu@gmail.com', 32, 12, 32, 12, 12, 23),
(77, 'teshu@gmail.com', 23, 32, 12, 31, 28, 21),
(78, 'nishu@gmail.com', 32, 12, 32, 12, 12, 23);

-- --------------------------------------------------------

--
-- Table structure for table `ct2_marks`
--

CREATE TABLE `ct2_marks` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sub_1` int(40) NOT NULL,
  `sub_2` int(40) NOT NULL,
  `sub_3` int(40) NOT NULL,
  `sub_4` int(40) NOT NULL,
  `sub_5` int(40) NOT NULL,
  `sub_6` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct2_marks`
--

INSERT INTO `ct2_marks` (`id`, `email`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`) VALUES
(1, 'yogesh@gmail.com', 34, 24, 34, 12, 21, 0),
(2, 'manoj@gmail.com', 23, 22, 23, 24, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int(8) NOT NULL,
  `profile_pic` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`id`, `email`, `pass`, `user_name`, `branch`, `semester`, `profile_pic`) VALUES
(0, 'teshu@gmail.com', '12345', 'teshu gaurav singh', 'it', 4, 'Spider-Man.jpg'),
(1, 'yogesh@gmail.com', '12345', 'yogesh rajak', 'it', 7, 'iron-man.jpg'),
(2, 'manoj@gmail.com', '12345', 'manoj karkey', 'it', 7, 'deadpool.jpg'),
(3, 'nishu@gmail.com', '1234', 'nishant kumar tripathi', 'civil', 4, 'profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int(8) NOT NULL,
  `sub_1` varchar(50) NOT NULL,
  `sub_2` varchar(50) NOT NULL,
  `sub_3` varchar(50) NOT NULL,
  `sub_4` varchar(50) NOT NULL,
  `sub_5` varchar(50) NOT NULL,
  `sub_6` varchar(50) NOT NULL,
  `lab_1` varchar(50) NOT NULL,
  `lab_2` varchar(50) NOT NULL,
  `lab_3` varchar(50) NOT NULL,
  `lab_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `branch`, `semester`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `lab_1`, `lab_2`, `lab_3`, `lab_4`) VALUES
(1, 'it', 7, 'dmw', 'mis', 'ai', 'cns', 'aca', '', 'ai lab', 'ns+android', 'minor project', ''),
(2, 'it', 4, 'cm', 'tscn', 'dsa', 'aec', 'c++', 'coa', 'tscn', 'c++', 'aec', 'ds'),
(3, 'civil', 4, 'sa1', 'fm2', 's2', 'ced', 'bc', 'te1', 'fm2', 'sfw2', 'cew', 'te1');

-- --------------------------------------------------------

--
-- Table structure for table `total_attendence`
--

CREATE TABLE `total_attendence` (
  `id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int(8) NOT NULL,
  `sub_1` int(200) NOT NULL,
  `sub_2` int(200) NOT NULL,
  `sub_3` int(200) NOT NULL,
  `sub_4` int(200) NOT NULL,
  `sub_5` int(200) NOT NULL,
  `sub_6` int(200) NOT NULL,
  `lab_1` int(200) NOT NULL,
  `lab_2` int(200) NOT NULL,
  `lab_3` int(200) NOT NULL,
  `lab_4` int(200) NOT NULL,
  `boa` int(200) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_attendence`
--

INSERT INTO `total_attendence` (`id`, `branch`, `semester`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `lab_1`, `lab_2`, `lab_3`, `lab_4`, `boa`, `total`) VALUES
(1, 'it', 7, 34, 34, 23, 40, 22, 0, 8, 8, 7, 0, 70, 145),
(2, 'civil', 4, 23, 22, 34, 31, 30, 29, 7, 6, 8, 7, 40, 145),
(3, 'it', 4, 34, 23, 35, 32, 23, 43, 5, 6, 7, 8, 70, 145);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_sign_in`
--
ALTER TABLE `admin_sign_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_test`
--
ALTER TABLE `class_test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ct1_marks`
--
ALTER TABLE `ct1_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct2_marks`
--
ALTER TABLE `ct2_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_attendence`
--
ALTER TABLE `total_attendence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_sign_in`
--
ALTER TABLE `admin_sign_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `class_test`
--
ALTER TABLE `class_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ct1_marks`
--
ALTER TABLE `ct1_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `ct2_marks`
--
ALTER TABLE `ct2_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `total_attendence`
--
ALTER TABLE `total_attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
