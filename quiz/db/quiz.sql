-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 11:16 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `departmentstandings`
--

CREATE TABLE `departmentstandings` (
  `DepartmentName` text NOT NULL,
  `Score` int(11) NOT NULL,
  `Entries` int(11) NOT NULL DEFAULT '0',
  `Tally` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmentstandings`
--

INSERT INTO `departmentstandings` (`DepartmentName`, `Score`, `Entries`, `Tally`) VALUES
('IT', 10, 1, 10),
('Comps', 0, 0, 0),
('Mech', 0, 0, 0),
('Chem', 0, 0, 0),
('EXTC', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questiontbl`
--

CREATE TABLE `questiontbl` (
  `QuestionId` int(5) NOT NULL,
  `Question` text NOT NULL,
  `OptionA` text NOT NULL,
  `OptionB` text NOT NULL,
  `OptionC` text NOT NULL,
  `OptionD` text NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questiontbl`
--

INSERT INTO `questiontbl` (`QuestionId`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `Answer`) VALUES
(101, 'This is Question 1', 'This is Option A', 'This is the Answer', 'This is Option C', 'This is Option D', 'This is the Answer'),
(102, 'This is Question 2', 'This is the Answer', 'This is Option B', 'This is Option C', 'This is Option D', 'This is the Answer'),
(103, 'This is Question 3', 'This is the Answer', 'This is Option B', 'This is Option C', 'This is Option D', 'This is the Answer'),
(104, 'This is Question 4', 'This is the Answer', 'This is Option B', 'This is Option C', 'This is Option D', 'This is the Answer'),
(105, 'This is Question 5', 'This is Option A', 'This is the Answer', 'This is Option C', 'This is Option D', 'This is the Answer'),
(106, 'This is Question 6', 'This is Option A', 'This is Option B', 'This is Option C', 'This is the Answer', 'This is the Answer'),
(107, 'This is Question 7', 'This is Option A', 'This is Option B', 'This is Option C', 'This is the Answer', 'This is the Answer'),
(108, 'This is Question 8', 'This is Option A', 'This is Option B', 'This is the Answer', 'This is Option D', 'This is the Answer'),
(109, 'This is Question 9', 'This is the Answer', 'This is Option B', 'This is Option C', 'This is Option D', 'This is the Answer'),
(110, 'This is Question 10', 'This is the Answer', 'This is Option B', 'This is Option C', 'This is Option D', 'This is the Answer'),
(111, 'This is Question 11', 'This is Option A', 'This is the Answer', 'This is Option C', 'This is Option D', 'This is the Answer'),
(112, 'This is Question 12', 'This is Option A', 'This is Option B', 'This is Option C', 'This is the Answer', 'This is the Answer'),
(113, 'This is Question 13', 'This is the Answer', 'This is Option B', 'This is Option C', 'This is Option D', 'This is the Answer'),
(114, 'This is Question 14', 'This is Option A', 'This is Option B', 'This is the Answer', 'This is Option D', 'This is the Answer'),
(115, 'This is Question 15', 'This is Option A', 'This is the Answer', 'This is Option B', 'This is Option D', 'This is the Answer'),
(116, 'This is Question 16', 'This is Option A', 'This is Option B', 'This is Option C', 'This is the Answer', 'This is the Answer'),
(117, 'This is Question 17', 'This is the Answer', 'This is Option B', 'This is Option C', 'This is Option D', 'This is the Answer'),
(118, 'This is Question 18', 'This is Option A', 'This is the Answer', 'This is Option C', 'This is Option D', 'This is the Answer'),
(119, 'This is Question 19', 'This is Option A', 'This is Option B', 'This is the Answer', 'This is Option D', 'This is the Answer'),
(120, 'This is Question 20', 'This in Option A', 'This is Option B', 'This is Option C', 'This is the Answer', 'This is the Answer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SapId` text NOT NULL,
  `Password` text NOT NULL,
  `Name` text NOT NULL,
  `Department` text NOT NULL,
  `Year` text NOT NULL,
  `LoginKey` text NOT NULL,
  `QuestionsList` text NOT NULL,
  `RegistrationTime` time NOT NULL,
  `Flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SapId`, `Password`, `Name`, `Department`, `Year`, `LoginKey`, `QuestionsList`, `RegistrationTime`, `Flag`) VALUES
('60003168002', 'Password', 'Sneh Gajiwala', 'IT', 'SE', 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImE0MzY0YjVmYjliODYxYzNhYTRkYTg5NWExMjk5NzZjMjgyZGJmYzIifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiaWF0IjoxNDg1NDI1NjgwLCJleHAiOjE0ODU0MjkyODAsImF0X2hhc2giOiJlSlQzaHNjVzRCdlIxNk1EekFwOEhRIiwiYXVkIjoiOTQ4MzU1NjM3NjU3LTA2OGVibnUzcDNmMzg1dXVmZTVmZTJoaDAycWQybjJ1LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTE3MDYwMzc4MTM5MDAyNjE1MzUyIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF6cCI6Ijk0ODM1NTYzNzY1Ny0wNjhlYm51M3AzZjM4NXV1ZmU1ZmUyaGgwMnFkMm4ydS5hcHBzLmdvb2dsZXVzZXJjb250ZW50LmNvbSIsImVtYWlsIjoic25laC50b29sc0BnbWFpbC5jb20iLCJuYW1lIjoiU25laCBHYWppd2FsYSIsInBpY3R1cmUiOiJodHRwczovL2xoMy5nb29nbGV1c2VyY29udGVudC5jb20vLXFKVERqMG1aTHJZL0FBQUFBQUFBQUFJL0FBQUFBQUFBQUFBL0FEUGxoZktwTEh6QjUzcVBzZl9Ib0RIcmZ0U0ROZThwaGcvczk2LWMvcGhvdG8uanBnIiwiZ2l2ZW5fbmFtZSI6IlNuZWgiLCJmYW1pbHlfbmFtZSI6Ikdhaml3YWxhIiwibG9jYWxlIjoiZW4ifQ.T40jqlcY0Q8OcpPMG7NHw5oBQ0wBw4jazXYDWnFPzKTTFr6u7AuimTsmIke2uAvC1M9YH7m-M5qhElmJP6-GgL2ii0WePvTZfINkpaVEZGeyeNqjG27vgvgY-bOwiKRysAIydaxHJfsXNRWiDClC4zr_TQI6Gn2njMxd5d7IPDnCvqghjrf-6kJamayIP0pihqU6Qc_5fqTcJ90gC8mMLF_TqWD-tyiRTYueozR7X5VCIiQIXySp8mBG2DOHYZlinQbXn5Ht4tNqX88rLGpjbH651ZB40IqiJ0plSzDRnjoHEi7pgS5zWfVFncnVAb6L6YSwYxFOb1Tk44c905K4qw', '120,114,119,102,110,117,109,105,104,108', '11:14:27', -999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questiontbl`
--
ALTER TABLE `questiontbl`
  ADD PRIMARY KEY (`QuestionId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SapId`(15));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questiontbl`
--
ALTER TABLE `questiontbl`
  MODIFY `QuestionId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
