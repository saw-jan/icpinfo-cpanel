-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 06:33 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_icp`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `ID` int(10) NOT NULL,
  `Token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`ID`, `Token`) VALUES
(1, 'fIwNg0EnFKU:APA91bH6pfO9zBE9hOP86zW3glzZuIfJm-EXq7sHgCUJmMd067sR6639SEi6DCyWlowfvJ3AZhif7rgyBOInWw9MeagkG2IWoJ_0IJscECFMV7Talt-M-mQ45MwI-qyCrF9oIL1akPRt');

-- --------------------------------------------------------

--
-- Table structure for table `icp_lecturers`
--

CREATE TABLE `icp_lecturers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Module` varchar(20) DEFAULT NULL,
  `Profile` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icp_lecturers`
--

INSERT INTO `icp_lecturers` (`ID`, `Name`, `Email`, `Contact`, `Module`, `Profile`) VALUES
(10, 'Pratibha Gurung', 'pratibha@icp.edu.np', '9823564763', 'CC6001NP', ''),
(11, 'Badri Lamichhane', 'badri@icp.edu.np', '9825634125', 'CU605NP', ''),
(12, 'Abhinav Dahal', 'abhinav@icp.edu.np', '9826543567', 'FC6P01NP', ''),
(13, 'Sandeep Gurung', 'sandeep.grg@icp.edu.np', '9809764523', 'CC6004NP', 0x70702e706e67),
(15, 'Mekhraj Poudel', 'mekhjar@icp.edu.np', '9854362576', 'FC6W51NP', 0x70702e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `icp_notices`
--

CREATE TABLE `icp_notices` (
  `ID` int(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Body` text NOT NULL,
  `File` blob,
  `PDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icp_notices`
--

INSERT INTO `icp_notices` (`ID`, `Title`, `Body`, `File`, `PDate`) VALUES
(1, 'New Notice', 'This the message. I use it to arrange my logic tracks in new ways, and for live effects, as ableton is better optimized for arrangement and controller mapping than Logic. I use it more though to impress Ableton users. Wouldnt call my stuff dance or even hip hop bc they switch often and not meant for rappers, but it is beat driven.', '', '2018-04-27'),
(3, 'Testing File', 'This is second test of file input.', 0x6e6f7465732e747874, '2018-04-29'),
(4, 'Spring Carnival', 'Wouldnt call my stuff dance or even hip hop bc they switch often and not meant for rappers, but it is beat driven.', '', '2018-04-30'),
(5, 'Holiday, 12th May', 'While all of the other answers work, they all have one big problem: it is up to the browser to decide what to do if they encounter a Location header. Usually browser stop processing the request and redirect to the URI indicated with the Location header.', 0x416e64726f69642053686172656420507265666572656e6365732e706466, '2018-05-01'),
(6, 'Exam Routine for Year 3', 'Notice for Submission of RA upgrading form. Notice for Submission of RA upgrading form. more. Upgrading Information Details with Rule 54. Upgrading Information Details with Rule 54. more. Application form- Upgrading (Experience)', 0x7265766965772e747874, '2018-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `icp_posts`
--

CREATE TABLE `icp_posts` (
  `ID` int(10) NOT NULL,
  `Title` varchar(100) DEFAULT 'No Title',
  `Content` varchar(200) DEFAULT NULL,
  `PostBy` varchar(50) NOT NULL,
  `PDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icp_posts`
--

INSERT INTO `icp_posts` (`ID`, `Title`, `Content`, `PostBy`, `PDate`) VALUES
(1, 'First Post from me', 'This contains a lot of words you wish to post. Your thoughts and your questions can be posted here.', 'Sajan Gurung', '2018-04-29'),
(14, 'What is IT?', 'IT stands for Information Technology. It has wider area of study and opportunities.', 'Asmita Gurung', '2018-04-30'),
(15, 'How to request data from database server?', 'I want to know, how database is fetched from server and how it is displayed using android app.', 'Ishwor Rana', '2018-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `icp_staffs`
--

CREATE TABLE `icp_staffs` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Profile` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icp_staffs`
--

INSERT INTO `icp_staffs` (`ID`, `Name`, `Email`, `Contact`, `Profile`) VALUES
(4, 'Sunil Thapa', 'sunil.thapa@icp.edu.np', '9854362576', 0x70702e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `icp_students`
--

CREATE TABLE `icp_students` (
  `Student_ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT 'Male',
  `Faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icp_students`
--

INSERT INTO `icp_students` (`Student_ID`, `Name`, `Password`, `Email`, `Gender`, `Faculty`) VALUES
('17030801', 'Asmita Gurung', 'pass', 'asmita.grg@icp.edu.np', 'Female', 'BIT'),
('17030854', 'Sajan Gurung', 'password', 'sajan.grg@icp.edu.np', 'Male', 'BIT'),
('17030856', 'Ishwor Rana', 'password', 'ishwor.rana@icp.edu.np', 'Male', 'BIT'),
('17030862', 'Ashish Adhikari', 'password', 'ashish.adhk@icp.edu.np', 'Male', 'BIT');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `ID` int(10) NOT NULL,
  `Post` int(10) NOT NULL,
  `Student` varchar(50) NOT NULL,
  `PDate` date NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`ID`, `Post`, `Student`, `PDate`, `Comment`) VALUES
(0, 15, '17030854', '2018-05-14', 'use Volly library'),
(1, 1, '17030854', '2018-05-01', 'Great though....'),
(2, 1, '17030854', '2018-05-01', 'hahahaha');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `Post` int(10) NOT NULL,
  `Student` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`Post`, `Student`) VALUES
(1, '17030801'),
(1, '17030854'),
(14, '17030801'),
(14, '17030854'),
(14, '17030856'),
(14, '17030862'),
(15, '17030854');

-- --------------------------------------------------------

--
-- Table structure for table `rte_admins`
--

CREATE TABLE `rte_admins` (
  `admin_ID` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rte_admins`
--

INSERT INTO `rte_admins` (`admin_ID`, `Username`, `Password`, `Role`) VALUES
(1, 'admin', 'admin', 'Admin'),
(6, 'ashish', 'ashish', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Token` (`Token`);

--
-- Indexes for table `icp_lecturers`
--
ALTER TABLE `icp_lecturers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `icp_notices`
--
ALTER TABLE `icp_notices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `icp_posts`
--
ALTER TABLE `icp_posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `icp_staffs`
--
ALTER TABLE `icp_staffs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `icp_students`
--
ALTER TABLE `icp_students`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`Post`,`Student`),
  ADD KEY `Student` (`Student`);

--
-- Indexes for table `rte_admins`
--
ALTER TABLE `rte_admins`
  ADD PRIMARY KEY (`admin_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `icp_lecturers`
--
ALTER TABLE `icp_lecturers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `icp_notices`
--
ALTER TABLE `icp_notices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `icp_posts`
--
ALTER TABLE `icp_posts`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `icp_staffs`
--
ALTER TABLE `icp_staffs`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rte_admins`
--
ALTER TABLE `rte_admins`
  MODIFY `admin_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `post_like_ibfk_1` FOREIGN KEY (`Post`) REFERENCES `icp_posts` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_like_ibfk_2` FOREIGN KEY (`Student`) REFERENCES `icp_students` (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
