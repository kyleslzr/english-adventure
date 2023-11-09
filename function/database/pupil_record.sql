-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2023 at 04:53 PM
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
-- Database: `english_adventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `pupil_record`
--

CREATE TABLE `pupil_record` (
  `record_ID` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `surname` varchar(255) NOT NULL,
  `lesson_1_act_1` int(255) DEFAULT 0,
  `lesson_1_act_2` int(255) DEFAULT 0,
  `lesson_2_act_1` int(255) DEFAULT 0,
  `lesson_2_act_2` int(255) DEFAULT 0,
  `lesson_3_act_1` int(255) DEFAULT 0,
  `lesson_3_act_2` int(255) DEFAULT 0,
  `lesson_4_act_1` int(255) DEFAULT 0,
  `lesson_4_act_2` int(255) DEFAULT 0,
  `lesson_5_act_1` int(255) DEFAULT 0,
  `lesson_5_act_2` int(255) DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pupil_record`
--

INSERT INTO `pupil_record` (`record_ID`, `firstname`, `middlename`, `surname`, `lesson_1_act_1`, `lesson_1_act_2`, `lesson_2_act_1`, `lesson_2_act_2`, `lesson_3_act_1`, `lesson_3_act_2`, `lesson_4_act_1`, `lesson_4_act_2`, `lesson_5_act_1`, `lesson_5_act_2`, `date_added`, `date_updated`) VALUES
(8, 'Janrie', 'A.', 'Veneracion', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-11-09 14:11:47', '0000-00-00 00:00:00'),
(9, 'Kim Justine', 'P.', 'Salazar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-11-09 14:12:31', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pupil_record`
--
ALTER TABLE `pupil_record`
  ADD PRIMARY KEY (`record_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pupil_record`
--
ALTER TABLE `pupil_record`
  MODIFY `record_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
