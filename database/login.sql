-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 03:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `massage` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sno`, `name`, `email`, `massage`, `dt`) VALUES
(1, 'sou', 'sourav@gmail.com', 'bbn', '2021-01-07 00:23:10'),
(5, 'sourav upadhyay', 'sourabhanand600@gmail.com', 'get', '2021-01-07 00:26:38'),
(6, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'sdfsf', '2021-01-13 01:18:15'),
(9, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'asdsad', '2021-01-13 07:58:40'),
(11, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'rrrrrrrrrrrrrrrrrrrr', '2021-01-13 08:20:29'),
(12, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'oooooooooooooooo', '2021-01-13 08:22:00'),
(14, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'fdgg', '2021-01-13 08:22:36'),
(15, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'fdgdfh', '2021-01-13 08:22:41'),
(16, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'sdgsdf', '2021-01-13 08:29:13'),
(17, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', '3333333333333333', '2021-01-13 08:37:05'),
(19, 'sanjay', 'sanjay@gmail.com', 'break', '2021-01-13 09:48:53'),
(20, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', '', '2021-01-13 11:31:31'),
(21, 'Sourav Anand', 'Sourav.upadhyay@yahoo.com', 'rrrrfftggg', '2021-01-13 11:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID Bike` int(10) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Birdhday` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `RentSTART` date NOT NULL,
  `STARTTime` time NOT NULL,
  `RentEND` date NOT NULL,
  `ENDTime` time NOT NULL,
  `Coments` text NOT NULL,
  `DL` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID Bike`, `Name`, `Birdhday`, `Email`, `Phone`, `RentSTART`, `STARTTime`, `RentEND`, `ENDTime`, `Coments`, `DL`) VALUES
(1, 'Vladyslav', '1997-12-05', 'vladbidyuk@gmail.com', '+48739443095', '2016-11-30', '08:00:00', '2016-12-03', '20:00:00', 'Test case!!!', ''),
(2, 'Mikolay', '1996-03-14', 'egwefe@gmail.com', '352352353', '2016-11-09', '02:02:00', '2016-11-10', '14:03:00', 'blals fkf esfwfe', ''),
(3, 's', '1998-10-09', 'sourav@gmail.com', '8555555555', '2020-12-24', '08:21:49', '2020-12-25', '08:21:49', 'f', 'dl-12345678'),
(10, 'Sourav ', '2021-01-08', 'sourav.upadhyay@yahoo.com', '09431851971 ', '2021-01-04', '13:00:00', '2021-01-04', '17:00:00', 'hello', ''),
(11, 'abcd ', '2021-01-20', 'sourabhanand600@gmail.com', '09852400691 ', '2021-01-05', '17:00:00', '2021-01-06', '19:07:00', 'hfkjig', ''),
(12, 's ', '2021-01-07', 'sourav.upadhyay@yahoo.com', '09431851971 ', '2021-01-07', '12:36:00', '2021-01-07', '13:36:00', 'bbbbbbbbbbbbbbb', ''),
(13, 'sourav anand ', '2020-12-28', 'sourav.upadhyay@yahoo.com', '09431851971 ', '2021-01-13', '01:53:00', '2021-01-13', '04:53:00', 'dvd', ''),
(14, 'sourav anand ', '2021-01-01', 'sourav.upadhyay@yahoo.com', '9380538520 ', '2021-01-13', '02:33:00', '2021-01-13', '04:33:00', 'hello', ''),
(15, 'sourav anand ', '2021-01-01', 'sourav.upadhyay@yahoo.com', '9380538520 ', '2021-01-13', '02:33:00', '2021-01-13', '04:33:00', 'hello', ''),
(16, 'sourav anand ', '2021-01-01', 'sourav.upadhyay@yahoo.com', '9380538520 ', '2021-01-13', '02:33:00', '2021-01-13', '04:33:00', 'hello', ''),
(17, 'sourav anand ', '2021-01-01', 'sourav.upadhyay@yahoo.com', '9380538520 ', '2021-01-13', '02:33:00', '2021-01-13', '04:33:00', 'hello', ''),
(18, 'sanjay ', '2020-12-31', 'sanjay@gmail.com', '1323458789 ', '2021-01-13', '11:45:00', '2021-01-13', '03:45:00', 'hekoo', ''),
(19, 'Sourav Anand ', '2021-01-14', 'Sourav.upadhyay@yahoo.com', '09852400691 ', '2021-01-13', '12:30:00', '2021-01-13', '15:33:00', 'hello', ''),
(20, 'aalu ', '2020-12-27', 'aalu@gmail.com', '1234567890 ', '2021-01-16', '12:00:00', '2021-01-16', '17:00:00', 'try', 'DL-12345670'),
(22, 's ', '2021-01-17', 's@gmail.com', '00000000000 ', '2021-01-17', '19:35:00', '2021-01-17', '23:36:00', 'he', 'DL-12345670');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(NULL, 'admin', '$2y$10$BOdY54adYB/B.YB94GQDCO/p7cM.DP2P.zdznb.275k.ROC4hAe5i', '2020-12-27 23:33:40'),
(NULL, 'username', '$2y$10$Q1hhTVKbpqjAG1o/ieMIH.jmlmY1QZL4eks.Af/RE7uAVSXpz8mWi', '2020-12-27 23:40:12'),
(NULL, 'name', '$2y$10$NJdha6JfRKaWkv8ja1g/YeSouvlbNGdJLQ/8qXDbzSF/qO3ySmCQm', '2020-12-27 23:41:42'),
(NULL, 'gk', '$2y$10$SyP2wNxUdNpeVu.fCn2nSO1GJEakt2JMpy0dkVjCc683QurD.oYse', '2021-01-06 14:27:26'),
(NULL, 'sourav', '$2y$10$c21tXmtHLb1pajsp.AEkg.7uRwuA.jEHzCBKQIskYnGrAe.WrdQsK', '2021-01-06 14:50:35'),
(NULL, 'sanjay', '$2y$10$SfnkJGzuEthEdASM1gThIepQGPkv6Yi8YXJrNmEK985AY.HdoisxG', '2021-01-13 09:50:41'),
(NULL, 'anand', '$2y$10$Hw9rjmUvzv4pXuhhzsmbVeiCQZg7.KNsCv8YTL.2iAVc9lX8LHu0K', '2021-01-13 11:27:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID Bike`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID Bike` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
