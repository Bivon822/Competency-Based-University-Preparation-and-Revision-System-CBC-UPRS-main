-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 04:25 PM
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
-- Database: `jsuars`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `cert_no` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `universityOption1` varchar(255) NOT NULL,
  `universityOption2` varchar(255) NOT NULL,
  `universityOption3` varchar(255) NOT NULL,
  `courseOption1` varchar(255) NOT NULL,
  `courseOption2` varchar(255) NOT NULL,
  `courseOption3` varchar(255) NOT NULL,
  `Alocation` varchar(100) NOT NULL,
  `Revised` int(20) NOT NULL,
  `Application_date` date NOT NULL,
  `Revision_Date` date NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Pending Approval'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `cert_no`, `id_no`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `universityOption1`, `universityOption2`, `universityOption3`, `courseOption1`, `courseOption2`, `courseOption3`, `Alocation`, `Revised`, `Application_date`, `Revision_Date`, `Status`) VALUES
(8, 39064705, 44444, 'Kevin', 'Ochieng', 'Otieno', 'kevinochiengotieno2001@gmail.c', 701411650, 'Rongo University', 'Kaimosi University', 'MMUSTuniversity', 'Bsc. Science', 'Bsc. Science', 'Bsc. Education Science', 'Not allocated', 0, '0000-00-00', '2024-03-03', 'Pending Approval'),
(11, 41454245, 444440, 'Kevin', 'Ochieng', 'Otieno', 'kevinochiengotieno2001@gmail.c', 701411650, 'kafu', 'mmust', 'mmust', 'course1_kafu', 'course2_kafu', 'course3_mmust', '', 0, '0000-00-00', '0000-00-00', 'Pending Approval'),
(12, 414542455, 55555555, 'Kevin', 'Ochieng', 'Otieno', 'kevinochiengotieno2001@gmail.c', 701411650, 'Rongo University', 'Rongo University', 'Kaimosi University', 'Bsc. Education Arts', 'Bsc. Information Technology', 'Bsc. Education Arts', '', 0, '0000-00-00', '0000-00-00', 'Pending Approval'),
(13, 111111111, 4444411, 'Kevin', 'kkkk', 'Otieno', 'kevinochiengotieno2001@gmail.c', 701411650, 'Rongo University', 'Pwanu University', 'Kaimosi University', 'Bsc. Education Science', 'Bsc. Science', 'Bsc. Criminology', '', 0, '0000-00-00', '0000-00-00', 'Pending Approval'),
(14, 444444, 55555, 'john', 'ggdhd', 'hhjjfd', 'kevinochiengotieno2001@gmail.c', 701411650, 'Kaimosi University', 'Kaimosi University', 'Kaimosi University', 'Bsc. Education Arts', 'Bsc. Education Arts', 'Bsc. Information Technology', '', 0, '2024-03-02', '0000-00-00', 'Pending Approval');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Code` varchar(32) NOT NULL,
  `Course_name` varchar(32) NOT NULL,
  `University_Code` int(4) NOT NULL,
  `Trend` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Code`, `Course_name`, `University_Code`, `Trend`) VALUES
('40045', 'Bsc. Information Technology', 3004, '50'),
('40046', 'Bsc. Science', 3002, '51'),
('40048', 'Bsc. Education Arts', 3005, 'Kaimosi University'),
('40049', 'Bsc. Education Science', 3002, '50'),
('40057', 'Bsc. Criminology', 3005, '48'),
('44444444', 'Bsc, Comerce', 4543, '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Sno` int(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `PassKey` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Sno`, `Username`, `PassKey`) VALUES
(1, 'Admin', '1234'),
(2, 'Kevin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Student_Name` varchar(20) NOT NULL,
  `Id_Number` int(25) NOT NULL,
  `Cert_Number` int(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Student_Name`, `Id_Number`, `Cert_Number`, `Password`) VALUES
('Thomas Maren', 4454754, 555515, ''),
('Thomas Maren', 2147483647, 1214140, ''),
('Bivon Mose', 1245145, 12235412, '3900'),
('Bivon Mose', 111111111, 111111111, ''),
('Thomas Maren', 14714471, 744454774, ''),
('Kevin Otieno', 39064705, 2147483647, '41731205');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `University_code` int(5) NOT NULL,
  `University_Name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`University_code`, `University_Name`) VALUES
(3001, 'Rongo University'),
(3002, 'Kaimosi University'),
(3004, 'MMUSTuniversity'),
(3005, 'Pwanu University'),
(44441, 'sssssssssssss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cert_no` (`cert_no`),
  ADD UNIQUE KEY `id_no` (`id_no`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Code`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`Cert_Number`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`University_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `Sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
