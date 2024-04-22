-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 11:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `trackingID` varchar(30) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `complaintype` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`trackingID`, `details`, `status`, `email`, `department`, `complaintype`, `created_on`, `last_update`) VALUES
('20240422014503', 'I want to report some bullying ', 'Submitted', 'romce123@gmail.com', 'Faculty', 'Buillying', '2024-04-22 13:45:03', '2024-04-22 14:10:16'),
('20240422025245', 'Sloowwww', 'Pending', 'romce123@gmail.com', 'Accounting', 'Feedback', '2024-04-22 02:52:45', '2024-04-22 16:59:45'),
('20240422025410', 'Test', 'Cancelled', 'romce123@gmail.com', 'Registrar', 'Complain', '2024-04-22 02:54:10', '2024-04-22 14:17:24'),
('20240422025439', 'Great', 'Cancelled', 'romce123@gmail.com', 'Maintenance', 'Feedback', '2024-04-22 02:54:39', '2024-04-22 16:11:22'),
('20240422025529', 'Very Slow!', 'Submitted', 'romce123@gmail.com', 'Portal', 'Complain', '2024-04-22 02:55:29', '2024-04-22 15:05:25'),
('20240422032558', 'So hot    ', 'Submitted', 'romce123@gmail.com', 'Maintenance', 'Technical', '2024-04-22 03:25:58', '2024-04-22 14:42:59'),
('20240422032625', 'Help', 'Completed', 'romce123@gmail.com', 'Guidance', 'Buillying', '2024-04-22 03:26:25', '2024-04-22 17:01:34'),
('20240422033217', 'Help', 'Completed', 'romce123@gmail.com', 'Principal', 'Complain', '2024-04-22 03:32:17', '2024-04-22 17:02:30'),
('20240422033432', 'Other ', 'Pending', 'romce123@gmail.com', 'Others', 'Others', '2024-04-22 03:34:32', '2024-04-22 17:03:03'),
('20240422035046', 'Slow processing of documents. ', 'Pending', 'cc2@gmail.com', 'Registrar', 'Others', '2024-04-22 15:50:46', '2024-04-22 17:03:24'),
('20240422044234', 'I want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in building 2. \r\nI want to report the computers in the LAB 325 in buildi', 'Submitted', 'romce123@gmail.com', 'IT', 'Complain', '2024-04-22 04:42:34', '2024-04-22 04:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `department` enum('Senior High School','Junior High School','College') DEFAULT NULL,
  `school_id` varchar(10) DEFAULT NULL,
  `User_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `password`, `department`, `school_id`, `User_Type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', NULL, NULL, 'Admin'),
(17, 'Romce Angelo', 'Cañete', 'romcecanete11@gmail.com', '123', 'College', '2022-00198', 'Student'),
(19, 'Romce Angelo', 'Cañete', 'romce123@gmail.com', '123', '', '0123', 'Student'),
(20, 'Pogi', 'Ako', 'pogi123@gmail.com', '123', '', '0123', 'Student'),
(21, '1231332', '12313231', '31312321312', '32312321312', 'Senior High School', '131312', 'Student'),
(22, '123123', '1312312', '1231241412', '421312321', 'College', '3213123214', 'Student'),
(24, 'CC', 'CC', 'cc2@gmail.com', 'cc2', 'Senior High School', '111111', 'Student'),
(25, 'romce', 'caca', 'rome1@gmail.com', '123', 'College', '2023-00128', 'Handler'),
(26, 'james michael ', 'solamo', 'spajfohasof@gmail.com', '12345', 'College', '2022-01029', 'Student'),
(28, 'panot', 'gumban', 'panotgumban11@gmail.com', '123', 'College', '0123', 'Student'),
(60, '', '', '', '', '', '', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `update_id` int(11) NOT NULL,
  `trackingID` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `updates` varchar(1000) NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update_id`, `trackingID`, `status`, `updates`, `updated_by`, `last_update`) VALUES
(3, '20240422025410', 'Cancelled', 'Cancelled', 'romce123@gmail.com', '2024-04-22 14:17:24'),
(5, '20240422032558', 'Submitted', 'Details Updated', 'romce123@gmail.com', '2024-04-22 14:42:59'),
(6, '20240422025529', 'Submitted', 'Details Updated', 'romce123@gmail.com', '2024-04-22 15:05:25'),
(7, '20240422035046', 'Submitted', 'Details Updated', 'cc2@gmail.com', '2024-04-22 15:53:11'),
(9, '20240422025439', 'Cancelled', 'Duplicate ', 'rome1@gmail.com', '2024-04-22 16:11:22'),
(10, '20240422025245', 'Pending', 'Reviewing ', 'rome1@gmail.com', '2024-04-22 16:59:45'),
(11, '20240422032625', 'Completed', 'Issue resolved ', 'rome1@gmail.com', '2024-04-22 17:01:34'),
(12, '20240422033217', 'Pending', 'Case to be reviewed', 'rome1@gmail.com', '2024-04-22 17:02:06'),
(13, '20240422033217', 'Completed', 'Case closed', 'rome1@gmail.com', '2024-04-22 17:02:30'),
(14, '20240422033432', 'Pending', 'Require more details', 'rome1@gmail.com', '2024-04-22 17:03:03'),
(15, '20240422035046', 'Pending', 'Investigating ', 'rome1@gmail.com', '2024-04-22 17:03:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD UNIQUE KEY `trackingID` (`trackingID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`update_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
