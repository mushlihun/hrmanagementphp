-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 06:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrmisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `approval_id` bigint(20) NOT NULL,
  `leave_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `leave_type` varchar(20) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`approval_id`, `leave_id`, `staff_id`, `surname`, `first_name`, `last_name`, `department`, `leave_type`, `purpose`, `status`) VALUES
(1, 12, 6, 'tate', 'andrew', 'cobra', '', 'Sick leave', 'Test', 'Declined'),
(2, 12, 6, 'tate', 'andrew', 'cobra', 'Administration', 'Sick leave', 'Test', 'Declined'),
(3, 12, 6, 'tate', 'andrew', 'cobra', 'Administration', 'Sick leave', 'Test', 'Accepted'),
(4, 12, 6, 'tate', 'andrew', 'cobra', 'Administration', 'Sick leave', 'Test', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `leave_type` varchar(20) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_id`, `staff_id`, `surname`, `first_name`, `last_name`, `department`, `leave_type`, `purpose`, `status`) VALUES
(12, 6, 'tate', 'andrew', 'cobra', 'Administration', 'Sick leave', 'Test', NULL),
(13, 7, 'johnstone', 'jomo', 'kenyatta', 'Administration', 'Religious holidays', 'Ramadhan Comming soon, thanks', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `basic_salary` bigint(20) NOT NULL,
  `house_allowance` bigint(20) GENERATED ALWAYS AS (0.2 * `basic_salary`) STORED,
  `transport_allowance` bigint(20) GENERATED ALWAYS AS (0.85 * `house_allowance`) STORED,
  `medical_allowance` bigint(20) GENERATED ALWAYS AS (1.25 * `transport_allowance`) STORED,
  `gross_pay` bigint(20) GENERATED ALWAYS AS (`basic_salary` + `house_allowance` + `transport_allowance` + `medical_allowance`) STORED,
  `payee` bigint(20) GENERATED ALWAYS AS (0.05 * `gross_pay`) STORED,
  `nssf` bigint(20) DEFAULT 1000,
  `nhif` bigint(20) DEFAULT 1800,
  `net_pay` bigint(20) GENERATED ALWAYS AS (`gross_pay` - `payee` - `nssf` - `nhif`) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `staff_id`, `surname`, `first_name`, `last_name`, `department`, `payment_date`, `basic_salary`, `nssf`, `nhif`) VALUES
(7, 6, '', 'cobra', '', 'Administration', '2022-07-30 11:52:57', 20000, 1000, 1800),
(8, 7, '', 'kenyatta', '', 'Administration', '2022-07-31 19:28:07', 12000, 1000, 1800),
(9, 6, '', 'cobra', '', 'Administration', '2022-07-31 19:36:12', 20000, 1000, 1800),
(10, 7, '', 'kenyatta', '', 'Administration', '2022-08-01 04:46:01', 12000, 1000, 1800),
(11, 7, 'johnstone', 'jomo', 'kenyatta', 'Administration', '2022-08-01 04:50:08', 12000, 1000, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` bigint(20) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `basic_salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `surname`, `first_name`, `last_name`, `job_title`, `department`, `join_date`, `basic_salary`) VALUES
(6, 'tate', 'andrew', 'cobra', 'admin', 'Administration', '2022-07-24 16:16:03', 20000),
(7, 'johnstone', 'jomo', 'kenyatta', 'kk', 'Administration', '2022-07-29 05:30:27', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `surname`, `first_name`, `last_name`, `department`, `username`, `password`) VALUES
(6, 'tate', 'andrew', 'cobra', 'Administration', 'admin', 'admin'),
(7, 'kipkorir', 'Mark', 'Lee', 'Systems Administrator', 'mark', '1234'),
(8, 'nganga', 'andrew', 'Caleb', 'Accounts', 'accounts', '1234'),
(9, 'hans', 'victor', 'Mwangi', 'Receptionist', 'reception', '1234'),
(10, 'Wamae', 'Vivian', 'Cherop', 'Management', 'markmanage', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`approval_id`),
  ADD UNIQUE KEY `approval_id` (`approval_id`),
  ADD KEY `leaveA` (`leave_id`),
  ADD KEY `staffApp` (`staff_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `leaves_ibfk_1` (`staff_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approval_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `staff_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `leaveA` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staffApp` FOREIGN KEY (`staff_id`) REFERENCES `staff_details` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff_details` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff_details` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
