-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2019 at 07:57 AM
-- Server version: 5.7.23
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_clearance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE IF NOT EXISTS `offices` (
  `office_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(300) NOT NULL,
  PRIMARY KEY (`office_id`),
  UNIQUE KEY `office_id` (`office_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`office_id`, `office_name`) VALUES
(1, 'EIABC Advisor'),
(2, 'Student Service'),
(3, 'Library'),
(4, 'Student business Affairs'),
(5, 'Under graduate director'),
(6, 'EIABC central tools center\r\n'),
(8, 'Registrar'),
(9, 'Graduate programs director');

-- --------------------------------------------------------

--
-- Table structure for table `request_approve`
--

DROP TABLE IF EXISTS `request_approve`;
CREATE TABLE IF NOT EXISTS `request_approve` (
  `Approve_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Request_ID` int(11) NOT NULL,
  `Student_ID` varchar(50) NOT NULL,
  `Approved_By` varchar(100) NOT NULL,
  `Approved_Office` varchar(100) NOT NULL,
  `Remark` varchar(300) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Status_Office` int(11) DEFAULT NULL,
  `Approved_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Approve_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_request`
--

DROP TABLE IF EXISTS `student_request`;
CREATE TABLE IF NOT EXISTS `student_request` (
  `Request_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Student_ID` varchar(50) DEFAULT NULL,
  `Reason` varchar(300) DEFAULT NULL,
  `Last_Class_Attend` date DEFAULT NULL,
  `Request_type` varchar(50) DEFAULT NULL,
  `Request_Status` varchar(50) DEFAULT NULL,
  `Remark` varchar(300) DEFAULT NULL,
  `Office` int(11) DEFAULT NULL,
  `Sent_Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Request_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_request`
--

INSERT INTO `student_request` (`Request_ID`, `Student_ID`, `Reason`, `Last_Class_Attend`, `Request_type`, `Request_Status`, `Remark`, `Office`, `Sent_Date`) VALUES
(44, '0060/04', 'bfghfgh', '2019-04-08', 'End of the year', 'Cancel', NULL, 3, '2019-05-06 08:02:44'),
(45, '0060/04', 'wrwrwr', '2019-05-01', 'Graduate', 'Inprocess', NULL, 3, '2019-05-06 08:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(200) DEFAULT NULL,
  `Institute` varchar(200) DEFAULT NULL,
  `Student_ID` varchar(50) DEFAULT NULL,
  `Program` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `Office` int(11) DEFAULT NULL,
  `privilege` varchar(50) NOT NULL,
  `Active_status` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Full_name`, `Institute`, `Student_ID`, `Program`, `username`, `password`, `Office`, `privilege`, `Active_status`, `Date`) VALUES
(2, 'louyt', 'sfsdfjhg', '2522', 'Regular', 'ashu', 'c5b4b89e78f2a2850f024e6a17b0a813\r\n', NULL, 'Student', 'Deactive', '2019-02-13 07:33:12'),
(3, 'bobdfg', NULL, NULL, NULL, 'hfgfh', 'c5b4b89e78f2a2850f024e6a17b0a813', 2, 'Office', 'Deactive', '2019-02-13 07:43:11'),
(4, 'abebe', NULL, NULL, NULL, 'abeba', 'c5b4b89e78f2a2850f024e6a17b0a813', 8, 'Office', 'Active', '2019-02-16 11:33:48'),
(5, 'debebe', 'AAU', '8231', 'Regular', 'tou', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 'Student', 'Active', '2019-02-16 12:43:46'),
(6, 'weere', NULL, NULL, NULL, 'sdf', '289dff07669d7a23de0ef88d2f7129e7', NULL, 'Admin', 'Active', '2019-02-22 08:40:07'),
(7, 'wew', NULL, NULL, NULL, 'Admin', '202cb962ac59075b964b07152d234b70', NULL, 'Admin', 'Active', '2019-02-22 09:10:36'),
(8, 'wow', NULL, NULL, NULL, 'aaa', '202cb962ac59075b964b07152d234b70', 3, 'Office', 'Active', '2019-02-22 11:08:46'),
(9, 'SSBB', NULL, NULL, NULL, 'SBA', 'd52fcd1f831abc4efe3a7f571ee39aa8', 4, 'Office', 'Deactive', '2019-02-23 09:05:51'),
(10, 'GD', NULL, NULL, NULL, 'GD', '202cb962ac59075b964b07152d234b70', 9, 'Office', 'Deactive', '2019-02-23 09:06:25'),
(11, 'TC', NULL, NULL, NULL, 'TC', '202cb962ac59075b964b07152d234b70', 9, 'Office', 'Deactive', '2019-02-23 09:06:49'),
(12, 'A', NULL, NULL, NULL, 'A', '202cb962ac59075b964b07152d234b70', 1, 'Office', 'Active', '2019-02-23 09:07:29'),
(13, 'dfgdfg', 'fdsfdsf', '123', 'Regular', 'Ashenafi', '202cb962ac59075b964b07152d234b70', NULL, 'Student', 'Deactive', '2019-02-25 09:28:19'),
(14, 'wrww', NULL, NULL, NULL, 'bffg', '2321994d85d661d792223f647000c65f', NULL, 'Admin', 'Active', '2019-03-07 08:47:17'),
(15, 'qeqwe', NULL, NULL, NULL, 'rafsdf', '202cb962ac59075b964b07152d234b70', NULL, 'Admin', 'Active', '2019-03-07 08:49:00'),
(16, 'wewe', NULL, NULL, NULL, 'qwewre', 'b333245384108fee15bce4a112b9b5a8', 4, 'Office', 'Active', '2019-03-07 09:09:40'),
(18, 'Heaven Debebe', 'EIABC', '0060/04', 'post graduate', 'Hev', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'Student', 'Active', '2019-03-13 04:02:47'),
(25, 'zX', 'qw', 'w2342', 'post graduate', 'w', '202cb962ac59075b964b07152d234b70', NULL, 'Student', 'Active', '2019-03-20 13:26:33'),
(19, 'Zelalem Asegidewu', NULL, NULL, NULL, 'Zelalem', '202cb962ac59075b964b07152d234b70', 3, 'Office', 'Active', '2019-03-11 08:46:11'),
(20, 'Seble Teferie', NULL, NULL, NULL, 'Seble', '202cb962ac59075b964b07152d234b70', 2, 'Office', 'Active', '2019-03-11 08:47:43'),
(21, 'Konjit Assefa', NULL, NULL, NULL, 'Konjit', '202cb962ac59075b964b07152d234b70', 4, 'Office', 'Active', '2019-03-11 08:48:44'),
(22, 'Debebe', NULL, NULL, NULL, 'Debebe', '202cb962ac59075b964b07152d234b70', 6, 'Office', 'Active', '2019-03-11 08:49:43'),
(23, 'Alem belay', NULL, NULL, NULL, 'Alem', '202cb962ac59075b964b07152d234b70', 5, 'Office', 'Active', '2019-03-11 08:51:03'),
(24, 'Heaven belete', NULL, NULL, NULL, 'Heaven', '202cb962ac59075b964b07152d234b70', 8, 'Office', 'Active', '2019-03-11 08:52:17'),
(35, 'jhkfg', 'ghjghj', '79507', 'post graduate', 'jhgjg', 'b499771fe60b90a999fef1157c63274b', NULL, 'Student', 'Active', '2019-04-10 12:40:02'),
(36, 'gfdg', NULL, NULL, NULL, 'tret', 'e7d707a26e7f7b6ff52c489c60e429b1', 2, 'Office', 'Active', '2019-04-12 13:02:27'),
(37, 'nbmnvc', NULL, NULL, NULL, 'tretgdg', '9f820adf84bf8a1c259f464ba89ea11f', NULL, 'Admin', 'Active', '2019-04-12 13:16:03'),
(38, 'avava', 'gfdgfdgdf', '34234', 'post graduate', 'bbbb', '6590c0b4d1ed595272f11ab5f143c35e', NULL, 'Student', 'Active', '2019-05-06 08:04:13'),
(39, 'cxxvx', 'gfdgf', '43554', 'Regular', 'aaaa', '7bc93d893a9428b5342f66ed0b86cc7d', NULL, 'Student', 'Active', '2019-05-06 08:16:31'),
(40, 'vcbvcb', 'wqeq', '54354', 'post graduate', 'qqweqwe', '355069779c3420831bd25514ad739ed6', NULL, 'Student', 'Active', '2019-05-06 08:17:11'),
(41, 'xcvcxv', 'ghjg', '53543', 'Regular', 'hfhgfgh', '3902291abe36930723fc5a5036e1750d', NULL, 'Student', 'Active', '2019-05-06 08:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE IF NOT EXISTS `userlog` (
  `Log_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) NOT NULL,
  `Operation` varchar(300) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Registered Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Log_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`Log_ID`, `Username`, `Operation`, `Description`, `Registered Date`) VALUES
(1, 'wow', 'Change password', 'The user change password', '2019-03-07 07:58:55'),
(2, 'qqq', 'Create Account', 'This user create admin account', '2019-03-07 08:47:17'),
(3, 'qqq', 'Create Account', 'This user create admin account', '2019-03-07 08:49:00'),
(4, 'qqq', 'Create Account', 'This user create Office account', '2019-03-07 09:09:40'),
(5, 'qqq', 'Create Account', 'This user create Student account', '2019-03-07 09:25:27'),
(6, 'Admin', 'Create Account', 'This user create Student account', '2019-03-13 04:02:47'),
(7, 'Admin', 'Create Account', 'This user create Office account', '2019-03-11 08:46:11'),
(8, 'Admin', 'Create Account', 'This user create Office account', '2019-03-11 08:47:43'),
(9, 'Admin', 'Create Account', 'This user create Office account', '2019-03-11 08:48:44'),
(10, 'Admin', 'Create Account', 'This user create Office account', '2019-03-11 08:49:43'),
(11, 'Admin', 'Create Account', 'This user create Office account', '2019-03-11 08:51:03'),
(12, 'Admin', 'Create Account', 'This user create Office account', '2019-03-11 08:52:17'),
(13, 'Menbere', 'Change password', 'The user change password', '2019-03-11 13:10:20'),
(14, 'Admin', 'Update Account', 'This user update user account', '2019-03-14 07:53:34'),
(15, 'Admin', 'Deactive Account', 'This user deactive user account', '2019-03-14 07:53:38'),
(16, 'Admin', 'Active Account', 'This user active user account', '2019-03-20 12:17:40'),
(17, 'Admin', 'Deactive Account', 'This user deactive user account', '2019-03-20 12:17:45'),
(18, 'Admin', 'Active Account', 'This user active user account', '2019-03-20 12:17:50'),
(19, 'Admin', 'Create Account', 'This user create Student account', '2019-03-20 13:26:33'),
(20, 'Admin', 'Deactive Account', 'This user deactive user account', '2019-03-28 13:07:06'),
(21, 'Admin', 'Active Account', 'This user active user account', '2019-03-28 13:07:14'),
(22, 'Admin', 'Deactive Account', 'This user deactive user account', '2019-03-28 13:22:47'),
(23, 'Admin', 'Active Account', 'This user active user account', '2019-03-28 13:25:55'),
(24, 'Admin', 'Active Account', 'This user active user account', '2019-03-28 13:26:13'),
(25, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 10:53:48'),
(26, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 10:56:07'),
(27, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:09:16'),
(28, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:10:49'),
(29, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:11:12'),
(30, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:13:09'),
(31, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:14:07'),
(32, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:20:26'),
(33, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:28:02'),
(34, 'Admin', 'Create Account', 'This user create Student account', '2019-04-10 12:40:02'),
(35, 'Admin', 'Create Account', 'This user create Office account', '2019-04-12 13:02:28'),
(36, 'Admin', 'Create Account', 'This user create admin account', '2019-04-12 13:16:03'),
(37, 'Admin', 'Create Account', 'This user create Student account', '2019-05-06 08:04:13'),
(38, 'Admin', 'Create Account', 'This user create Student account', '2019-05-06 08:16:31'),
(39, 'Admin', 'Create Account', 'This user create Student account', '2019-05-06 08:17:11'),
(40, 'Admin', 'Create Account', 'This user create Student account', '2019-05-06 08:17:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
