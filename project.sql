-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 06:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(4) NOT NULL,
  `Std` int(5) NOT NULL,
  `Roll_No` int(5) NOT NULL,
  `TestType` varchar(10) NOT NULL,
  `Hindi` int(3) NOT NULL,
  `Marathi` int(3) NOT NULL,
  `Maths` int(3) NOT NULL,
  `Science` int(3) NOT NULL,
  `Social_Studies` int(3) NOT NULL,
  `English` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `Std`, `Roll_No`, `TestType`, `Hindi`, `Marathi`, `Maths`, `Science`, `Social_Studies`, `English`) VALUES
(1, 1, 1, '1st Unit', 19, 17, 10, 18, 20, 14),
(2, 1, 1, '2nd Unit', 15, 13, 17, 16, 19, 13),
(3, 1, 1, '3rd Unit', 17, 20, 18, 12, 19, 17),
(4, 1, 1, '4th Unit', 17, 19, 17, 18, 20, 13),
(5, 1, 1, '1st Sem', 88, 91, 85, 82, 92, 80),
(6, 1, 1, '2nd Sem', 87, 90, 88, 75, 93, 78),
(7, 1, 2, '1st Unit', 16, 19, 17, 14, 17, 20),
(8, 1, 2, '2nd Unit', 13, 11, 9, 7, 14, 8),
(9, 1, 2, '3rd Unit', 18, 14, 12, 20, 19, 16),
(10, 1, 2, '4th Unit', 11, 15, 10, 13, 9, 17),
(11, 1, 2, '1st Sem', 80, 87, 93, 91, 89, 75),
(12, 1, 2, '2nd Sem', 72, 81, 67, 69, 85, 76),
(13, 1, 3, '1st Unit', 13, 14, 18, 12, 9, 10),
(14, 1, 3, '2nd Unit', 17, 15, 18, 14, 20, 12),
(15, 1, 3, '3rd Unit', 13, 15, 12, 10, 11, 15),
(16, 1, 3, '4th Unit', 15, 17, 19, 20, 17, 16),
(17, 1, 3, '1st Sem', 80, 76, 69, 74, 79, 73),
(18, 1, 3, '2nd Sem', 76, 78, 72, 69, 67, 75),
(19, 1, 4, '1st Unit', 7, 8, 5, 3, 10, 6),
(20, 1, 4, '2nd Unit', 3, 5, 7, 4, 9, 8),
(21, 1, 4, '3rd Unit', 10, 11, 15, 14, 11, 17),
(22, 1, 4, '4th Unit', 11, 17, 15, 16, 14, 12),
(23, 1, 4, '1st Sem', 35, 46, 32, 50, 29, 31),
(24, 1, 4, '2nd Sem', 79, 84, 91, 99, 84, 85),
(25, 1, 5, '1st Unit', 14, 12, 16, 14, 15, 17),
(26, 1, 5, '2nd Unit', 18, 20, 19, 15, 14, 19),
(27, 1, 5, '3rd Unit', 8, 7, 5, 7, 4, 9),
(28, 1, 5, '4th Unit', 5, 9, 7, 10, 4, 6),
(29, 1, 5, '1st Sem', 65, 79, 49, 53, 68, 59),
(30, 1, 5, '2nd Sem', 32, 39, 28, 36, 25, 37),
(31, 2, 1, '1st Unit', 14, 17, 18, 10, 8, 18),
(32, 2, 1, '2nd Unit', 13, 15, 17, 12, 10, 18),
(33, 2, 1, '3rd Unit', 12, 17, 14, 6, 18, 20),
(34, 2, 1, '4th Unit', 15, 20, 16, 14, 10, 9),
(35, 2, 1, '1st Sem', 78, 80, 84, 90, 66, 81),
(36, 2, 1, '2nd Sem', 81, 90, 99, 79, 60, 81),
(37, 3, 1, '1st Unit', 19, 16, 15, 14, 13, 12),
(38, 3, 1, '2nd Unit', 11, 17, 19, 16, 15, 14),
(39, 3, 1, '3rd Unit', 10, 11, 17, 9, 13, 15),
(40, 3, 1, '4th Unit', 11, 19, 15, 13, 18, 9),
(41, 3, 1, '1st Sem', 70, 79, 81, 69, 88, 90),
(42, 3, 1, '2nd Sem', 90, 82, 85, 90, 91, 95),
(43, 4, 1, '1st Unit', 16, 14, 17, 10, 9, 14),
(44, 4, 1, '2nd Unit', 16, 14, 17, 19, 20, 18),
(45, 4, 1, '3rd Unit', 13, 17, 19, 13, 11, 20),
(46, 4, 1, '4th Unit', 20, 11, 10, 8, 4, 5),
(47, 4, 1, '1st Sem', 66, 90, 62, 70, 72, 90),
(48, 4, 1, '2nd Sem', 32, 40, 39, 29, 41, 38),
(49, 5, 1, '1st Unit', 17, 14, 19, 20, 11, 9),
(50, 5, 1, '2nd Unit', 18, 16, 17, 19, 20, 15),
(51, 5, 1, '3rd Unit', 11, 10, 8, 7, 6, 19),
(52, 5, 1, '4th Unit', 11, 19, 20, 11, 19, 20),
(53, 5, 1, '1st Sem', 89, 71, 70, 85, 81, 88),
(54, 5, 1, '2nd Sem', 88, 90, 91, 93, 88, 87),
(55, 6, 1, '1st Unit', 19, 15, 11, 16, 11, 9),
(56, 6, 1, '2nd Unit', 18, 13, 17, 19, 11, 18),
(57, 6, 1, '3rd Unit', 19, 15, 11, 19, 10, 9),
(58, 6, 1, '4th Unit', 11, 10, 10, 16, 9, 10),
(59, 6, 1, '1st Sem', 65, 87, 86, 90, 81, 60),
(60, 6, 1, '2nd Sem', 90, 79, 50, 69, 70, 66),
(61, 7, 1, '1st Unit', 14, 18, 12, 10, 16, 14),
(62, 7, 1, '2nd Unit', 19, 16, 14, 18, 19, 20),
(63, 7, 1, '3rd Unit', 14, 13, 18, 17, 16, 10),
(64, 7, 1, '4th Unit', 8, 5, 6, 7, 4, 9),
(65, 7, 1, '1st Sem', 90, 84, 79, 84, 81, 75),
(66, 7, 1, '2nd Sem', 60, 71, 70, 67, 68, 75),
(67, 8, 1, '1st Unit', 11, 17, 14, 16, 12, 10),
(68, 8, 1, '2nd Unit', 18, 20, 17, 16, 18, 16),
(69, 8, 1, '3rd Unit', 9, 10, 7, 7, 4, 5),
(70, 8, 1, '4th Unit', 12, 15, 17, 20, 10, 9),
(71, 8, 1, '1st Sem', 70, 79, 69, 71, 81, 74),
(72, 8, 1, '2nd Sem', 99, 97, 90, 88, 84, 91),
(73, 9, 1, '1st Unit', 18, 17, 16, 19, 20, 16),
(74, 9, 1, '2nd Unit', 18, 19, 16, 20, 17, 19),
(75, 9, 1, '3rd Unit', 18, 14, 10, 15, 13, 12),
(76, 9, 1, '4th Unit', 9, 5, 7, 9, 4, 2),
(77, 9, 1, '1st Sem', 79, 50, 89, 59, 67, 71),
(78, 9, 1, '2nd Sem', 38, 32, 40, 46, 31, 29),
(79, 10, 1, '1st Unit', 18, 15, 13, 12, 11, 14),
(80, 10, 1, '2nd Unit', 8, 5, 4, 5, 10, 9),
(81, 10, 1, '3rd Unit', 16, 14, 10, 13, 15, 11),
(82, 10, 1, '4th Unit', 16, 14, 18, 19, 15, 17),
(83, 10, 1, '1st Sem', 70, 81, 80, 69, 64, 70),
(84, 10, 1, '2nd Sem', 90, 88, 84, 80, 91, 84),
(85, 2, 2, '1st Unit', 12, 10, 14, 13, 16, 18),
(86, 2, 2, '2nd Unit', 18, 19, 18, 17, 18, 20),
(87, 2, 2, '3rd Unit', 8, 7, 9, 5, 7, 9),
(88, 2, 2, '4th Unit', 17, 15, 16, 13, 12, 14),
(89, 2, 2, '1st Sem', 80, 75, 79, 74, 73, 70),
(90, 2, 2, '2nd Sem', 90, 88, 81, 85, 91, 85),
(91, 3, 2, '1st Unit', 11, 12, 16, 14, 17, 13),
(92, 3, 2, '2nd Unit', 19, 18, 19, 20, 17, 18),
(93, 3, 2, '3rd Unit', 11, 16, 18, 16, 15, 10),
(94, 3, 2, '4th Unit', 18, 19, 14, 17, 15, 11),
(95, 3, 2, '1st Sem', 80, 84, 91, 85, 87, 94),
(96, 3, 2, '2nd Sem', 80, 89, 91, 99, 75, 79),
(97, 4, 2, '1st Unit', 11, 16, 15, 10, 14, 19),
(98, 4, 2, '2nd Unit', 18, 20, 17, 16, 19, 20),
(99, 4, 2, '3rd Unit', 10, 16, 14, 13, 19, 12),
(100, 4, 2, '4th Unit', 10, 8, 5, 4, 6, 7),
(101, 4, 2, '1st Sem', 70, 79, 85, 69, 68, 73),
(102, 4, 2, '2nd Sem', 90, 71, 50, 99, 68, 75),
(103, 5, 2, '1st Unit', 10, 8, 7, 5, 7, 4),
(104, 5, 2, '2nd Unit', 19, 20, 17, 15, 19, 18),
(105, 5, 2, '3rd Unit', 10, 11, 14, 17, 16, 10),
(106, 5, 2, '4th Unit', 16, 15, 17, 16, 17, 20),
(107, 5, 2, '1st Sem', 70, 79, 69, 84, 68, 75),
(108, 5, 2, '2nd Sem', 37, 40, 39, 29, 47, 40),
(109, 6, 2, '1st Unit', 19, 17, 18, 16, 18, 17),
(110, 6, 2, '2nd Unit', 18, 20, 17, 18, 16, 17),
(111, 6, 2, '3rd Unit', 10, 17, 18, 10, 16, 20),
(112, 6, 2, '4th Unit', 11, 17, 10, 16, 14, 12),
(113, 6, 2, '1st Sem', 70, 79, 85, 69, 92, 59),
(114, 6, 2, '2nd Sem', 90, 97, 91, 88, 85, 94),
(115, 7, 2, '1st Unit', 19, 17, 18, 20, 16, 17),
(116, 7, 2, '2nd Unit', 16, 13, 14, 12, 16, 11),
(117, 7, 2, '3rd Unit', 15, 16, 14, 17, 13, 16),
(118, 7, 2, '4th Unit', 11, 11, 13, 14, 15, 13),
(119, 7, 2, '1st Sem', 70, 76, 85, 74, 68, 59),
(120, 7, 2, '2nd Sem', 87, 90, 91, 69, 70, 85),
(121, 8, 2, '1st Unit', 10, 12, 15, 13, 18, 11),
(122, 8, 2, '2nd Unit', 18, 11, 10, 17, 14, 12),
(123, 8, 2, '3rd Unit', 10, 11, 14, 17, 13, 15),
(124, 8, 2, '4th Unit', 11, 15, 17, 19, 20, 11),
(125, 8, 2, '1st Sem', 88, 83, 75, 60, 71, 68),
(126, 8, 2, '2nd Sem', 32, 39, 40, 31, 29, 35),
(127, 9, 2, '1st Unit', 20, 17, 19, 19, 18, 20),
(128, 9, 2, '2nd Unit', 14, 15, 20, 14, 18, 11),
(129, 9, 2, '3rd Unit', 13, 16, 18, 15, 19, 20),
(130, 9, 2, '4th Unit', 10, 11, 15, 13, 16, 12),
(131, 9, 2, '1st Sem', 81, 75, 70, 68, 62, 69),
(132, 9, 2, '2nd Sem', 89, 91, 88, 83, 95, 81),
(133, 10, 2, '1st Unit', 16, 17, 18, 12, 20, 17),
(134, 10, 2, '2nd Unit', 9, 7, 9, 5, 6, 7),
(135, 10, 2, '3rd Unit', 11, 13, 18, 20, 20, 16),
(136, 10, 2, '4th Unit', 11, 10, 14, 17, 18, 19),
(137, 10, 2, '1st Sem', 71, 68, 66, 59, 63, 55),
(138, 10, 2, '2nd Sem', 87, 81, 88, 86, 80, 75);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone_No` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mail_Id` varchar(50) NOT NULL,
  `Std` int(2) NOT NULL,
  `Roll_No` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Phone_No`, `Gender`, `Mail_Id`, `Std`, `Roll_No`) VALUES
(1, 'Rohit Sharma', '9364328743', 'Male', 'rohits1@gmail.com', 1, 1),
(2, 'Yuzi Chahal', '9244734637', 'Male', 'yuzichahal1@gmail.com', 1, 2),
(3, 'Shreya Saraf', '9326124763', 'Female', 'ssaraf9@gmail.com', 1, 3),
(4, 'Virat Kohli', '9364328746', 'Male', 'viratk@gmail.com', 1, 4),
(5, 'Prajwal Patil', '9231283462', 'Male', 'prajwalpatil12@gmail.com', 1, 5),
(6, 'Hitesh Rawal', '9914783474', 'Male', 'hrawal8@gmail.com', 2, 1),
(7, 'Gauri Shinde', '8146834663', 'Female', 'gauris373@gmail.com', 3, 1),
(8, 'Surabhi Agarwal', '9378132477', 'Female', 'surabhiag2@gmail.com', 4, 1),
(9, 'Pooja Shetty', '8456344545', 'Female', 'pshetty23@gmail.com', 5, 1),
(10, 'Suvarna Malhotra', '9237123841', 'Female', 'suvarnamah87@yahoo.com', 6, 1),
(11, 'Nandini Jadhav', '9372372372', 'Female', 'nandini@gmail.com', 7, 1),
(12, 'Mahesh Damle', '8236123612', 'Male', 'maheshdam89@gmail.com', 8, 1),
(13, 'Rupesh Shinde', '8123126353', 'Male', 'rshinde19@gmail.com', 9, 1),
(14, 'Arun Chaudhary', '8263127361', 'Male', 'arunchau90@gmail.com', 10, 1),
(15, 'Rakshita Jain', '9237123845', 'Female', 'ra123@gmail.com', 2, 2),
(16, 'Shubham Gokhale', '8213612352', 'Male', 'shubhamgokhale1@gmail.com', 3, 2),
(17, 'Joel Acharekar', '9237373672', 'Male', 'joelacharekar@gmail.com', 4, 2),
(18, 'Sahil Tambe', '8362352365', 'Male', 'sahilt56@gmail.com', 5, 2),
(19, 'Mukund Mishra', '8236123721', 'Male', 'mmishra123@gmail.com', 6, 2),
(20, 'Priyanka Shetty', '9236123571', 'Female', 'priyankas78@gmail.com', 7, 2),
(21, 'Disha Patkar', '8324234233', 'Female', 'dishap778@gmail.com', 8, 2),
(22, 'Nisha Tanwar', '8236123736', 'Female', 'nishatanwar@gmail.com', 9, 2),
(23, 'Tania Mhatre', '9324454254', 'Female', 'taniam@gmail.com', 10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
