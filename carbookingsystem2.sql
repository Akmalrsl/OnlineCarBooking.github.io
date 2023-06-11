-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:37 AM
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
-- Database: `carbookingsystem2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `b_id` int(15) NOT NULL,
  `b_customer` varchar(100) NOT NULL,
  `b_vehicle` varchar(200) NOT NULL,
  `b_pickupdate` varchar(10) NOT NULL,
  `b_returndate` varchar(10) NOT NULL,
  `b_totalprice` longtext NOT NULL,
  `b_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`b_id`, `b_customer`, `b_vehicle`, `b_pickupdate`, `b_returndate`, `b_totalprice`, `b_status`) VALUES
(89, '0123456789', 'MRW 765', '2023-06-22', '2023-06-27', '900000', 3),
(90, '0123456789', 'TFP 516', '2023-06-16', '2023-06-29', '3198000', 2),
(91, '010101', 'JFH 189', '2023-06-08', '2023-06-17', '1404000', 2),
(92, '0123456789', 'TBP 485', '2023-06-14', '2023-06-28', '3220000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `s_id` int(5) NOT NULL,
  `s_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`s_id`, `s_desc`) VALUES
(1, 'Received'),
(2, 'Approved'),
(3, 'Rejected'),
(4, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `u_id` varchar(15) NOT NULL,
  `u_pwd` varchar(255) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `u_phone` varchar(15) NOT NULL,
  `u_lno` varchar(20) NOT NULL,
  `u_type` varchar(2) NOT NULL,
  `u_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_pwd`, `u_name`, `u_address`, `u_phone`, `u_lno`, `u_type`, `u_email`) VALUES
('000000', '$2y$10$2aRNIZOKvAKZ.KlFRWRa0.WfHmb7GmZgoEg5d0zV6n4OF7o2C0RJG', 'akmal', 'bla bla bla', '011111111', '1111', '1', 'akmal@gmail.com'),
('010101', '$2y$10$sS77jXvB4uBLbwnwtrH1AOsPXcPDCFaOjQcUf4AYHY5clOBHJ5/kS', 'Michael', 'Seoul,Korea', '01010101', '01234', '2', 'mike@gmail.com'),
('0123456789', '$2y$10$eJ2vcWvt0sRHdl9yHWYtn.1tHnJ7sL2ATgY3VIO4LATnFDj3EgEiS', 'Muhammad Akmal', 'No. 22A, Jalan Panglima Awang, 35/103a\r\nAlam Impian, Seksyen 35', '0192661470', '0111', '2', 'akmalrosli545@gmail.com'),
('11111', '$2y$10$pW6/baXgbbHt2hRx2hg/k.gKoDSxLRBGkui20C83Fbcd3yRtjXJVy', 'mal', 'blablabla', '0000000000', '111111111', '2', 'aaaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usertype`
--

CREATE TABLE `tb_usertype` (
  `ut_id` varchar(15) NOT NULL,
  `ut_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_usertype`
--

INSERT INTO `tb_usertype` (`ut_id`, `ut_desc`) VALUES
('1', 'Admin'),
('2', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vehicle`
--

CREATE TABLE `tb_vehicle` (
  `v_reg` varchar(50) NOT NULL,
  `v_type` varchar(50) NOT NULL,
  `v_model` varchar(50) NOT NULL,
  `v_year` varchar(5) NOT NULL,
  `v_price` float NOT NULL,
  `v_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_vehicle`
--

INSERT INTO `tb_vehicle` (`v_reg`, `v_type`, `v_model`, `v_year`, `v_price`, `v_image`) VALUES
('FGK 1255', 'SEDAN', 'Range Rover', '2017', 130000, 0x72616e6765726f7665722e6a7067),
('JFH 189', 'SEDAN', 'Mercedes', '2020', 156000, 0x6d657263656465732e77656270),
('KDH 2236', 'SPORT CAR', 'Ford Mustang', '2014', 160000, 0x6d757374616e672e77656270),
('MRW 765', 'COUPE', 'BMW', '2018', 180000, 0x626d772e6a7067),
('TBP 485', 'COUPE', 'Tesla', '2021', 230000, 0x7465736c612e77656270),
('TFP 516', 'COUPE', 'Audi', '2013', 246000, 0x617564692e77656270);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_customer` (`b_customer`),
  ADD KEY `b_vehicle` (`b_vehicle`),
  ADD KEY `b_status` (`b_status`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_type` (`u_type`);

--
-- Indexes for table `tb_usertype`
--
ALTER TABLE `tb_usertype`
  ADD PRIMARY KEY (`ut_id`);

--
-- Indexes for table `tb_vehicle`
--
ALTER TABLE `tb_vehicle`
  ADD PRIMARY KEY (`v_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `b_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`b_customer`) REFERENCES `tb_user` (`u_id`),
  ADD CONSTRAINT `tb_booking_ibfk_2` FOREIGN KEY (`b_vehicle`) REFERENCES `tb_vehicle` (`v_reg`),
  ADD CONSTRAINT `tb_booking_ibfk_3` FOREIGN KEY (`b_status`) REFERENCES `tb_status` (`s_id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`u_type`) REFERENCES `tb_usertype` (`ut_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
