-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 09:26 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `role`) VALUES
(4, 'Khorshed Alam', 'alam5857', '2b7bcdc43166708b5335b16fd5924251', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `all_accounts`
--

CREATE TABLE `all_accounts` (
  `acc_id` int(11) NOT NULL,
  `acc_no` bigint(20) NOT NULL,
  `acc_type` varchar(20) NOT NULL,
  `balance` double NOT NULL,
  `brance_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `init_balance` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_accounts`
--

INSERT INTO `all_accounts` (`acc_id`, `acc_no`, `acc_type`, `balance`, `brance_id`, `first_name`, `last_name`, `init_balance`, `photo`) VALUES
(7, 19252389111, 'Savinngs', 2000, 'COM-012', 'Khorshed', 'Alam', 2000, '../images/customer/971490_262669210542343_552142907_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `applicants_info`
--

CREATE TABLE `applicants_info` (
  `applicant_id` int(11) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `nid` bigint(20) NOT NULL,
  `mailing_address` varchar(300) NOT NULL,
  `permanent_address` varchar(300) NOT NULL,
  `merital_status` enum('Married','Unmarried') NOT NULL,
  `religion` enum('Muslim','Hindu','Budist','Catholic','Other') NOT NULL,
  `divition` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicants_qualification`
--

CREATE TABLE `applicants_qualification` (
  `application_id` int(11) NOT NULL,
  `post_graduate` varchar(400) NOT NULL,
  `graduate` varchar(400) NOT NULL,
  `higher_secondary` varchar(400) NOT NULL,
  `secondary` varchar(400) NOT NULL,
  `experties` tinytext NOT NULL,
  `working_exp` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `car_loan_policies`
--

CREATE TABLE `car_loan_policies` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `duration` int(11) NOT NULL,
  `num_inst` int(11) NOT NULL,
  `inst_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `divition_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `divition`
--

CREATE TABLE `divition` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divition`
--

INSERT INTO `divition` (`id`, `name`) VALUES
(1, 'Dhaka'),
(2, 'Chittagong'),
(3, 'Rajsahi'),
(4, 'Barishal'),
(5, 'Khulna'),
(6, 'Sylet'),
(7, 'Rangpur'),
(8, 'Mymensing');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_policies`
--

CREATE TABLE `home_loan_policies` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `rate` double NOT NULL,
  `duration` int(11) NOT NULL,
  `num_inst` int(11) NOT NULL,
  `inst_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loan_account`
--

CREATE TABLE `loan_account` (
  `id` int(11) NOT NULL,
  `loan_acc_no` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `mothers_name` varchar(50) NOT NULL,
  `loan_policy` varchar(50) NOT NULL,
  `loan_amount` bigint(20) NOT NULL,
  `duration` int(11) NOT NULL,
  `issu_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nid` bigint(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ref_acc` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loan_policies`
--

CREATE TABLE `loan_policies` (
  `id` int(11) NOT NULL,
  `policy_name` varchar(100) NOT NULL,
  `int_rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loan_policies`
--

INSERT INTO `loan_policies` (`id`, `policy_name`, `int_rate`) VALUES
(1, 'Home Loan', 8.5),
(2, 'Car Loan', 9),
(3, 'Vehicle Loan', 15);

-- --------------------------------------------------------

--
-- Table structure for table `nomini_info`
--

CREATE TABLE `nomini_info` (
  `acc_no` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `relation` enum('Father','Mother','Sister','Brother','Wife','Houseband','Other') NOT NULL,
  `gender` varchar(6) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nomini_info`
--

INSERT INTO `nomini_info` (`acc_no`, `name`, `nid`, `relation`, `gender`, `photo`, `phone`) VALUES
(19252389111, 'Badiul Alam', '54548979823652025', 'Brother', 'Male', '../images/nomini/150734.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `related_info`
--

CREATE TABLE `related_info` (
  `acc_no` bigint(20) NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `mothers_name` varchar(100) NOT NULL,
  `nid` bigint(20) NOT NULL,
  `pre_address` varchar(200) NOT NULL,
  `per_address` varchar(200) NOT NULL,
  `post_code` int(11) NOT NULL,
  `religion_id` int(11) NOT NULL,
  `div_id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `merital_status` enum('married','unmarried') NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `related_info`
--

INSERT INTO `related_info` (`acc_no`, `fathers_name`, `mothers_name`, `nid`, `pre_address`, `per_address`, `post_code`, `religion_id`, `div_id`, `dist_id`, `gender`, `merital_status`, `date_of_birth`, `phone`) VALUES
(19252389111, 'Nurul Amin', 'Minara Begum', 45412156446787545, 'sgdfhdghgh', 'ghghdghdgh', 3550, 1, 2, 0, 'male', 'unmarried', '1989-11-13', 1840001638);

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `religion_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `religion_name`) VALUES
(1, 'Islam'),
(2, 'Hindu'),
(3, 'Budist'),
(4, 'Catholic'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `transections`
--

CREATE TABLE `transections` (
  `trans_id` int(11) NOT NULL,
  `trans_type` enum('Deposit','Withdrawal','Transfer','Charge','Bill payment') NOT NULL,
  `acc_no` bigint(20) NOT NULL,
  `transfered_to` int(11) NOT NULL,
  `remark` varchar(6) NOT NULL,
  `cheque_no` int(11) NOT NULL,
  `bearer` varchar(50) NOT NULL,
  `debit` bigint(20) NOT NULL,
  `credit` bigint(20) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `trans_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `intbalans` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_accounts`
--
ALTER TABLE `all_accounts`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `acc_no` (`acc_no`),
  ADD UNIQUE KEY `acc_no_2` (`acc_no`);

--
-- Indexes for table `applicants_info`
--
ALTER TABLE `applicants_info`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `applicants_qualification`
--
ALTER TABLE `applicants_qualification`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `car_loan_policies`
--
ALTER TABLE `car_loan_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divition`
--
ALTER TABLE `divition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_policies`
--
ALTER TABLE `home_loan_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `loan_account`
--
ALTER TABLE `loan_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_policies`
--
ALTER TABLE `loan_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomini_info`
--
ALTER TABLE `nomini_info`
  ADD UNIQUE KEY `acc_no` (`acc_no`);

--
-- Indexes for table `related_info`
--
ALTER TABLE `related_info`
  ADD UNIQUE KEY `acc_no` (`acc_no`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transections`
--
ALTER TABLE `transections`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `all_accounts`
--
ALTER TABLE `all_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `applicants_info`
--
ALTER TABLE `applicants_info`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applicants_qualification`
--
ALTER TABLE `applicants_qualification`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_loan_policies`
--
ALTER TABLE `car_loan_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `divition`
--
ALTER TABLE `divition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `home_loan_policies`
--
ALTER TABLE `home_loan_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loan_account`
--
ALTER TABLE `loan_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loan_policies`
--
ALTER TABLE `loan_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transections`
--
ALTER TABLE `transections`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
