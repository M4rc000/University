-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 07:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `bdate` date NOT NULL,
  `birth_place` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `religion` varchar(128) NOT NULL,
  `blood_type` varchar(128) NOT NULL,
  `citizenship` varchar(128) NOT NULL,
  `role_id` int(255) NOT NULL,
  `is_active` int(255) NOT NULL,
  `date_created` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `bdate`, `birth_place`, `gender`, `religion`, `blood_type`, `citizenship`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Marco Antonio Senni Koten', 'marco@gmail.com', 'Screenshot_2022-12-13-20-33-12-443.jpg', '$2y$10$HiCvq7Bmrc/IztGRk51LjOt4wUjPm9ZK2E2gbh50qBExprJTMKb6u', '2003-11-03', 'Bogor', 'Male', 'Katholik', 'AB', 'Indonesia', 1, 1, 0),
(2, 'Antonio Born', 'born@gmail.com', '466220ac-cc82-455f-8297-d78feb4ae3bd.jpg', '$2y$10$IR8vIrPgttPAqoPhVJhEae71nZ9X3CkBeZwUfHIySJ8HszNtLwaaO', '2003-11-03', 'Bogor', 'Male', 'Katholik', 'AB', 'Indonesia', 3, 1, 0),
(3, 'Rendy Panca Indra', 'rendy@gmail.com', 'default.jpg', '$2y$10$kCEIw6/dWX.AthmD/dWC6eWcLywHQEQc53aVM0GiGPB/5Y0Ws6me.', '2022-12-01', 'Depok', 'Male', 'Muslim', 'O', 'Indonesia', 2, 1, 0),
(4, 'Marco Antonio', 'antonio@gmail.com', 'Screenshot_2022-12-13-20-33-12-443.jpg', '$2y$10$8xFMYZmv0rqXg.6Z3nHEOu2ajai8/lGVDjd0oJ8oczBzngKw6hMNS', '2003-11-03', 'Bogor', 'Male', 'Catholic', 'AB', 'Indonesia', 2, 1, 1671285151),
(5, 'Bossman', 'bossman@gmail.com', 'default.jpg', '$2y$10$L6dYu8VktEjMDbNoAVyPEuoV4Hx10Fgn51Edih7x1fvPecTlQszqq', '2022-12-18', 'Depok', 'Male', 'Muslim', 'AB', 'Indonesia', 2, 1, 1671355669);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(8, 1, 2),
(11, 2, 4),
(12, 3, 2),
(13, 3, 5),
(18, 1, 3),
(19, 1, 4),
(20, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_attendance`
--

CREATE TABLE `user_attendance` (
  `id` int(255) NOT NULL,
  `week` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `action` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_attendance`
--

INSERT INTO `user_attendance` (`id`, `week`, `course`, `date`, `action`) VALUES
(1, '1', 'Database System', '2023-01-01', 10),
(2, '2', 'Database System', '2023-01-08', 0),
(3, '3', 'Database System', '2023-01-15', 1),
(4, '4', 'Database System', '2023-01-22', 1),
(5, '5', 'Database System', '2023-01-29', 1),
(6, '6', 'Database System', '2023-02-05', 1),
(7, '7', 'Database System', '2023-02-12', 1),
(8, '8', 'Database System', '2023-02-19', 1),
(9, '9', 'Database System', '2023-02-26', 1),
(10, '10', 'Database System', '2023-03-05', 1),
(11, '1', 'Object Oriented Programming', '0000-00-00', 1),
(12, '2', 'Object Oriented Programming', '0000-00-00', 1),
(13, '3', 'Object Oriented Programming', '0000-00-00', 1),
(14, '4', 'Object Oriented Programming', '0000-00-00', 1),
(15, '5', 'Object Oriented Programming', '0000-00-00', 1),
(16, '6', 'Object Oriented Programming', '0000-00-00', 1),
(17, '7', 'Object Oriented Programming', '0000-00-00', 1),
(18, '8', 'Object Oriented Programming', '0000-00-00', 1),
(19, '9', 'Object Oriented Programming', '0000-00-00', 1),
(20, '10', 'Object Oriented Programming', '0000-00-00', 1),
(21, '1', 'Computer Career and Programming', '0000-00-00', 1),
(22, '2', 'Computer Career and Programming', '0000-00-00', 1),
(23, '3', 'Computer Career and Programming', '0000-00-00', 1),
(24, '4', 'Computer Career and Programming', '0000-00-00', 1),
(25, '5', 'Computer Career and Programming', '0000-00-00', 1),
(26, '6', 'Computer Career and Programming', '0000-00-00', 1),
(27, '7', 'Computer Career and Programming', '0000-00-00', 1),
(28, '8', 'Computer Career and Programming', '0000-00-00', 1),
(29, '9', 'Computer Career and Programming', '0000-00-00', 1),
(30, '10', 'Computer Career and Programming', '0000-00-00', 1),
(31, '1', 'Computer Network', '0000-00-00', 1),
(32, '2', 'Computer Network', '0000-00-00', 1),
(33, '3', 'Computer Network', '0000-00-00', 1),
(34, '4', 'Computer Network', '0000-00-00', 1),
(35, '5', 'Computer Network', '0000-00-00', 1),
(36, '6', 'Computer Network', '0000-00-00', 1),
(37, '7', 'Computer Network', '0000-00-00', 1),
(38, '8', 'Computer Network', '0000-00-00', 1),
(39, '9', 'Computer Network', '0000-00-00', 1),
(40, '10', 'Computer Network', '0000-00-00', 1),
(41, '1', 'Server Side Internet Programming', '0000-00-00', 1),
(42, '2', 'Server Side Internet Programming', '0000-00-00', 1),
(43, '3', 'Server Side Internet Programming', '0000-00-00', 1),
(44, '4', 'Server Side Internet Programming', '0000-00-00', 1),
(45, '5', 'Server Side Internet Programming', '0000-00-00', 1),
(46, '6', 'Server Side Internet Programming', '0000-00-00', 1),
(47, '7', 'Server Side Internet Programming', '0000-00-00', 1),
(48, '8', 'Server Side Internet Programming', '0000-00-00', 1),
(49, '9', 'Server Side Internet Programming', '0000-00-00', 1),
(50, '10', 'Server Side Internet Programming', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE `user_courses` (
  `id` int(11) NOT NULL,
  `week` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `material` varchar(128) NOT NULL,
  `assignment` varchar(128) NOT NULL,
  `submit_assignment` varchar(255) NOT NULL,
  `announcement` varchar(255) NOT NULL,
  `action` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `week`, `course`, `material`, `assignment`, `submit_assignment`, `announcement`, `action`) VALUES
(1, '1', 'Database System', 'Boom !', 'Screenshot_2022-12-13-20-33-12-44.jpg', 'Lorem', 'Lorem ipsum', 1),
(2, '2', 'Database System', 'Boom !', '123', '', 'Lorem ipsum dolor', 1),
(3, '3', 'Database System', '', '', 'Membaca', 'Lorem ipsum sit dolor amet ', 1),
(4, '4', 'Database System', '', '', '', 'Lorem ipsum sit dolor amet ', 1),
(5, '5', 'Database System', '', '', '', 'Lorem ipsum sit dolor amet ', 1),
(6, '6', 'Database System', '', '', '', 'Lorem ipsum sit dolor amet ', 1),
(7, '7', 'Database System', '', '', '', '', 1),
(8, '8', 'Database System', '', '', '', '', 1),
(9, '9', 'Database System', '', '', '', '', 1),
(10, '10', 'Database System', '', '', '', '', 1),
(11, '1', 'Object Oriented Programming', '', '', '', '', 1),
(12, '2', 'Object Oriented Programming', '', '', '', '', 1),
(13, '3', 'Object Oriented Programming', '', '', '', '', 1),
(14, '4', 'Object Oriented Programming', '', '', '', '', 1),
(15, '5', 'Object Oriented Programming', '', '', '', '', 1),
(16, '6', 'Object Oriented Programming', '', '', '', '', 1),
(17, '7', 'Object Oriented Programming', '', '', '', '', 1),
(18, '8', 'Object Oriented Programming', '', '', '', '', 1),
(19, '9', 'Object Oriented Programming', '', '', '', '', 1),
(20, '10', 'Object Oriented Programming', '', '', '', '', 1),
(21, '1', 'Computer Career and Programming', '', '', '', '', 1),
(22, '2', 'Computer Career and Programming', '', '', '', '', 1),
(23, '3', 'Computer Career and Programming', '', '', '', '', 1),
(24, '4', 'Computer Career and Programming', '', '', '', '', 1),
(25, '5', 'Computer Career and Programming', '', '', '', '', 1),
(26, '6', 'Computer Career and Programming', '', '', '', '', 1),
(27, '7', 'Computer Career and Programming', '', '', '', '', 1),
(28, '8', 'Computer Career and Programming', '', '', '', '', 1),
(29, '9', 'Computer Career and Programming', '', '', '', '', 1),
(30, '10', 'Computer Career and Programming', '', '', '', '', 1),
(31, '1', 'Computer Network', '', '', '', '', 1),
(32, '2', 'Computer Network', '', '', '', '', 1),
(33, '3', 'Computer Network', '', '', '', '', 1),
(34, '4', 'Computer Network', '', '', '', '', 1),
(35, '5', 'Computer Network', '', '', '', '', 1),
(36, '6', 'Computer Network', '', '', '', '', 1),
(37, '7', 'Computer Network', '', '', '', '', 1),
(38, '8', 'Computer Network', '', '', '', '', 1),
(39, '9', 'Computer Network', '', '', '', '', 1),
(40, '10', 'Computer Network', '', '', '', '', 1),
(41, '1', 'Server Side Internet Programming', '', '', '', 'Lorem', 1),
(42, '2', 'Server Side Internet Programming', '', '', '', '', 1),
(43, '3', 'Server Side Internet Programming', '', '', '', '', 1),
(44, '4', 'Server Side Internet Programming', '', '', '', '', 1),
(45, '5', 'Server Side Internet Programming', '', '', '', '', 1),
(46, '6', 'Server Side Internet Programming', '', '', '', '', 1),
(47, '7', 'Server Side Internet Programming', '', '', '', '', 1),
(48, '8', 'Server Side Internet Programming', '', '', '', '', 1),
(49, '9', 'Server Side Internet Programming', '', '', '', '', 1),
(50, '10', 'Server Side Internet Programming', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Academic'),
(5, 'Lectures');

-- --------------------------------------------------------

--
-- Table structure for table `user_point_01`
--

CREATE TABLE `user_point_01` (
  `id` int(255) NOT NULL,
  `week` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `score` int(255) NOT NULL,
  `action` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_point_01`
--

INSERT INTO `user_point_01` (`id`, `week`, `course`, `date`, `score`, `action`) VALUES
(1, '1', 'Database System', '2023-01-01', 10, 1),
(2, '2', 'Database System', '2023-01-08', 0, 0),
(3, '3', 'Database System', '2023-01-15', 0, 0),
(4, '4', 'Database System', '2023-01-22', 0, 0),
(5, '5', 'Database System', '2023-01-29', 0, 0),
(6, '6', 'Database System', '2023-02-05', 0, 0),
(7, '7', 'Database System', '2023-02-12', 0, 0),
(8, '8', 'Database System', '2023-02-19', 0, 0),
(9, '9', 'Database System', '2023-02-26', 0, 0),
(10, '10', 'Database System', '2023-03-05', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_point_02`
--

CREATE TABLE `user_point_02` (
  `id` int(255) NOT NULL,
  `week` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `score` int(255) NOT NULL,
  `action` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_point_02`
--

INSERT INTO `user_point_02` (`id`, `week`, `course`, `date`, `score`, `action`) VALUES
(1, '1', 'Object Oriented Programming', '2023-01-01', 10, 1),
(2, '2', 'Object Oriented Programming', '2023-01-08', 0, 0),
(3, '3', 'Object Oriented Programming', '2023-01-15', 0, 0),
(4, '4', 'Object Oriented Programming', '2023-01-22', 0, 0),
(5, '5', 'Object Oriented Programming', '2023-01-29', 0, 0),
(6, '6', 'Object Oriented Programming', '2023-02-05', 0, 0),
(7, '7', 'Object Oriented Programming', '2023-02-12', 0, 0),
(8, '8', 'Object Oriented Programming', '2023-02-19', 0, 0),
(9, '9', 'Object Oriented Programming', '2023-02-26', 0, 0),
(10, '10', 'Object Oriented Programming', '2023-03-05', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_point_03`
--

CREATE TABLE `user_point_03` (
  `id` int(255) NOT NULL,
  `week` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `score` int(255) NOT NULL,
  `action` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_point_03`
--

INSERT INTO `user_point_03` (`id`, `week`, `course`, `date`, `score`, `action`) VALUES
(1, '1', 'Computer Career and Programming', '2023-01-01', 10, 1),
(2, '2', 'Computer Career and Programming', '2023-01-08', 0, 0),
(3, '3', 'Computer Career and Programming', '2023-01-15', 0, 0),
(4, '4', 'Computer Career and Programming', '2023-01-22', 0, 0),
(5, '5', 'Computer Career and Programming', '2023-01-29', 0, 0),
(6, '6', 'Computer Career and Programming', '2023-02-05', 0, 0),
(7, '7', 'Computer Career and Programming', '2023-02-12', 0, 0),
(8, '8', 'Computer Career and Programming', '2023-02-19', 0, 0),
(9, '9', 'Computer Career and Programming', '2023-02-26', 0, 0),
(10, '10', 'Computer Career and Programming', '2023-03-05', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_point_04`
--

CREATE TABLE `user_point_04` (
  `id` int(255) NOT NULL,
  `week` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `score` int(255) NOT NULL,
  `action` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_point_04`
--

INSERT INTO `user_point_04` (`id`, `week`, `course`, `date`, `score`, `action`) VALUES
(1, '1', 'Computer Network', '2023-01-01', 10, 1),
(2, '2', 'Computer Network', '2023-01-08', 0, 0),
(3, '3', 'Computer Network', '2023-01-15', 0, 0),
(4, '4', 'Computer Network', '2023-01-22', 0, 0),
(5, '5', 'Computer Network', '2023-01-29', 0, 0),
(6, '6', 'Computer Network', '2023-02-05', 0, 0),
(7, '7', 'Computer Network', '2023-02-12', 0, 0),
(8, '8', 'Computer Network', '2023-02-19', 0, 0),
(9, '9', 'Computer Network', '2023-02-26', 0, 0),
(10, '10', 'Computer Network', '2023-03-05', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_point_05`
--

CREATE TABLE `user_point_05` (
  `id` int(255) NOT NULL,
  `week` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `score` int(255) NOT NULL,
  `action` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_point_05`
--

INSERT INTO `user_point_05` (`id`, `week`, `course`, `date`, `score`, `action`) VALUES
(1, '1', 'Server Side Internet Programming', '2023-01-01', 10, 1),
(2, '2', 'Server Side Internet Programming', '2023-01-08', 0, 0),
(3, '3', 'Server Side Internet Programming', '2023-01-15', 0, 0),
(4, '4', 'Server Side Internet Programming', '2023-01-22', 0, 0),
(5, '5', 'Server Side Internet Programming', '2023-01-29', 0, 0),
(6, '6', 'Server Side Internet Programming', '2023-02-05', 0, 0),
(7, '7', 'Server Side Internet Programming', '2023-02-12', 0, 0),
(8, '8', 'Server Side Internet Programming', '2023-02-19', 0, 0),
(9, '9', 'Server Side Internet Programming', '2023-02-26', 0, 0),
(10, '10', 'Server Side Internet Programming', '2023-03-05', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Student'),
(3, 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 4, 'Announcement', 'academic/announcement', 'fas fa-fw fa-scroll', 1),
(10, 4, 'Courses', 'academic/courses', 'fas fa-fw fa-book', 1),
(11, 4, 'Attendance', 'academic/attendance', 'fas fa-fw fa-pen', 1),
(12, 5, 'Announcement', 'lectures/announcement', 'fas fa-fw fa-list', 1),
(13, 5, 'Courses', 'lectures/courses', 'fas fa-fw fa-book', 1),
(16, 4, 'Grade Point Average', 'academic/gpa', 'fas fa-fw fa-chart-bar', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_attendance`
--
ALTER TABLE `user_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_point_01`
--
ALTER TABLE `user_point_01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_point_02`
--
ALTER TABLE `user_point_02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_point_03`
--
ALTER TABLE `user_point_03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_point_04`
--
ALTER TABLE `user_point_04`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_point_05`
--
ALTER TABLE `user_point_05`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_attendance`
--
ALTER TABLE `user_attendance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_courses`
--
ALTER TABLE `user_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_point_01`
--
ALTER TABLE `user_point_01`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_point_02`
--
ALTER TABLE `user_point_02`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_point_03`
--
ALTER TABLE `user_point_03`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_point_04`
--
ALTER TABLE `user_point_04`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_point_05`
--
ALTER TABLE `user_point_05`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
