-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 07:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `meeting_id` int(11) NOT NULL,
  `meeting_header` varchar(255) CHARACTER SET utf8 NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `backgroundColor` varchar(252) CHARACTER SET utf8 NOT NULL,
  `meeting_room` varchar(252) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `meeting_round` int(11) NOT NULL,
  `meeting_detail` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `meeting_location` varchar(252) CHARACTER SET utf8 NOT NULL,
  `meeting_type` varchar(252) CHARACTER SET utf8 NOT NULL,
  `meeting_amount` int(11) NOT NULL,
  `meeting_grouppepole` varchar(252) CHARACTER SET utf8 NOT NULL,
  `meeting_agency` varchar(252) CHARACTER SET utf8 NOT NULL,
  `employee_id` int(11) NOT NULL,
  `meeting_name` varchar(252) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`meeting_id`, `meeting_header`, `start_date`, `end_date`, `backgroundColor`, `meeting_room`, `user_id`, `meeting_round`, `meeting_detail`, `meeting_location`, `meeting_type`, `meeting_amount`, `meeting_grouppepole`, `meeting_agency`, `employee_id`, `meeting_name`) VALUES
(29, 'กินข้าว', '2021-12-15 12:00:00', '2021-12-15 13:00:00', '#001eff', 'ห้อง1', 1, 1, 'กินข้าวข้างนอก', 'ที่นี่', 'Calssroom', 10, 'กก1', 'กฟภ1', 640001, 'ประยุทธ์'),
(35, 'เล่นเกมส์', '2021-12-15 22:00:00', '2021-12-15 23:30:00', '#000000', 'ห้อง2', 1, 2, 'กินข้าวข้างนอก', 'ที่นี่', 'Confernce', 12, 'กก2', 'กฟภ1', 640001, 'ประยุทธ์'),
(39, 'กลับบ้าน', '2021-12-15 16:30:00', '2021-12-15 16:30:00', '#ffbb00', 'ห้อง3', 1, 3, 'กินข้าวข้างนอก', 'ที่นี่', 'Calssroom', 10, 'กก3', 'กฟภ1', 640004, 'ประยุทธ์'),
(44, 'กินข้าว', '2021-12-16 12:00:00', '2021-12-16 13:00:00', '#ff0000', 'ห้อง4', 1, 7, 'กินข้าวข้างนอก', 'ที่นี่', 'Video Confernce', 15, 'กก4', 'กฟภ3', 640005, 'ประยุทธ์'),
(45, 'กลับบ้าน', '2021-12-16 16:30:00', '2021-12-16 16:30:00', '#f9a4a4', 'ห้อง1', 1, 11, 'กินข้าวข้างนอก', 'ที่นี่', 'Calssroom', 20, 'กก5', 'กฟภ3', 640011, 'ประยุทธ์'),
(47, 'เริ่มทำงาน', '2021-12-17 08:30:00', '2021-12-17 16:30:00', '#3099a1', 'ห้อง2', 1, 21, 'กินข้าวข้างนอก', 'ที่นี่', 'WebX', 25, 'กก6', 'กฟภ3', 640012, 'ประยุทธ์'),
(48, 'กลับบ้าน', '2021-12-17 16:30:00', '2021-12-17 16:30:00', '#930b0b', 'ห้อง3', 1, 25, 'กินข้าวข้างนอก', 'ที่นี่', 'Calssroom', 30, 'กก7', 'กฟภ3', 640001, 'ประยุทธ์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `events_ibfk_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
