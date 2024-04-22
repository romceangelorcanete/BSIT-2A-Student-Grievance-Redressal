-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 12:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `department` enum('Senior High School','Junior High School','College') DEFAULT NULL,
  `school_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `password`, `department`, `school_id`) VALUES
(17, 'Romce Angelo', 'Cañete', 'romcecanete11@gmail.com', '123', 'College', '2022-00198'),
(19, 'Romce Angelo', 'Cañete', 'romce123@gmail.com', '123', '', '0123'),
(20, 'Pogi', 'Ako', 'pogi123@gmail.com', '123', '', '0123'),
(21, '1231332', '12313231', '31312321312', '32312321312', 'Senior High School', '131312'),
(22, '123123', '1312312', '1231241412', '421312321', 'College', '3213123214'),
(24, 'CC', 'CC', 'cc2@gmail.com', 'cc2', 'Senior High School', '111111'),
(25, 'romce', 'caca', 'rome1@gmail.com', '123', 'College', '2023-00128'),
(26, 'james michael ', 'solamo', 'spajfohasof@gmail.com', '12345', 'College', '2022-01029'),
(27, 'canete', 'romce', 'romce123@gmail.com', '123', 'College', '123'),
(28, 'panot', 'gumban', 'panotgumban11@gmail.com', '123', 'College', '0123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
