-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 10:20 AM
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
  `user_id` int(11) NOT NULL,
  `meeting_record` varchar(252) NOT NULL,
  `meeting_titlename` varchar(20) NOT NULL,
  `meeting_name` varchar(252) NOT NULL,
  `meeting_lastname` varchar(252) NOT NULL,
  `meeting_title` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `backgroundColor` varchar(252) NOT NULL,
  `room_id` int(11) NOT NULL,
  `meeting_round` varchar(252) NOT NULL,
  `meeting_detail` varchar(1000) NOT NULL,
  `meeting_location` varchar(252) NOT NULL,
  `meeting_type1` varchar(252) NOT NULL,
  `meeting_amount` int(11) NOT NULL,
  `meeting_grouppepole` varchar(252) NOT NULL,
  `meeting_agency` varchar(252) NOT NULL,
  `meeting_phone` varchar(10) NOT NULL,
  `meeting_other_requirements` varchar(252) NOT NULL,
  `meeting_status` int(11) NOT NULL,
  `meeting_drink` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`meeting_id`, `user_id`, `meeting_record`, `meeting_titlename`, `meeting_name`, `meeting_lastname`, `meeting_title`, `start_date`, `end_date`, `backgroundColor`, `room_id`, `meeting_round`, `meeting_detail`, `meeting_location`, `meeting_type1`, `meeting_amount`, `meeting_grouppepole`, `meeting_agency`, `meeting_phone`, `meeting_other_requirements`, `meeting_status`, `meeting_drink`) VALUES
(89, 614259055, '123456', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 'กลับบ้าน', '2021-12-23 16:30:00', '2021-12-23 16:30:00', '#32CD32', 1, 'รอบที่ 2', 'กลับบ้าน', 'การไฟฟ้าส่วนภูมิภาคอำเภอนครชัยศรี', 'Classroom,Webx,Video Conferance', 20, ' กฟก3', ' กฟก3', '0863616258', 'เครื่องคอมพิวเตอร์,เครื่องฉายและจอโปรเจ็คเตอร์,เครื่องเสียงพร้อมอุปกรณ์', 1, 'เครื่องดื่ม,อาหารว่าง'),
(92, 614259039, '111', 'นาย', 'เอื้อคุน', 'จันทร์หา', 'เล่นเกม', '2021-12-24 14:16:00', '2021-12-24 14:17:00', '#FF0000', 2, 'รอบที่ 2', 'เล่นเกม', 'การไฟฟ้าส่วนภูมิภาคอำเภอนครชัยศรี', 'Webx', 12, ' กฟก3', ' กฟก3', '0', 'เครื่องคอมพิวเตอร์', 2, 'อาหารว่าง'),
(94, 614259055, '11251', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 'เล่นเกม1111', '2021-11-01 15:09:00', '2021-11-01 15:09:00', '#FFA500', 1, 'รอบที่ 2', 'เล่นเกม', 'การไฟฟ้าส่วนภูมิภาคอำเภอนครชัยศรี', 'Webx', 10, ' กฟก3', ' กฟก3', '0863616258', 'เครื่องคอมพิวเตอร์,เครื่องฉายและจอโปรเจ็คเตอร์', 0, 'อาหารว่าง'),
(96, 614259055, '111', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 'เล่นเกม', '2021-12-27 10:15:00', '2021-12-27 10:15:00', '#8B008B', 1, 'รอบที่ 2', 'เล่นเกม', '', 'Webx', 12, ' กฟก3', ' กฟก3', '0863616258', 'เครื่องฉายและจอโปรเจ็คเตอร์', 0, 'เครื่องดื่ม'),
(104, 614259055, '111544', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 'เล่นเกม1111', '2021-12-27 16:14:00', '2021-12-27 16:14:00', '#8B008B', 2, 'รอบที่ 2', 'เล่นเกม', 'การไฟฟ้าส่วนภูมิภาคอำเภอนครชัยศรี', 'Classroom,Webx', 12, ' กฟก3', ' กฟก3', '0863616258', 'เครื่องคอมพิวเตอร์,เครื่องฉายและจอโปรเจ็คเตอร์,เครื่องเสียงพร้อมอุปกรณ์', 0, 'เครื่องดื่ม,อาหารว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`) VALUES
(1, 'ห้องประชุม1'),
(2, 'ห้องประชุม2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_title` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `user_name` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_lastname` varchar(252) CHARACTER SET utf8mb4 NOT NULL,
  `user_email` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_password` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_status` int(11) NOT NULL COMMENT '0=user , 1=admin',
  `user_phone` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `user_img` varchar(1080) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_title`, `user_name`, `user_lastname`, `user_email`, `user_password`, `user_created_at`, `user_status`, `user_phone`, `user_img`) VALUES
(614259020, 'นาย', 'พงศธร', 'จันทร์หา', '614259020@webmail.npru.ac.th', '$2y$10$we01eUAtYHnyK4ahDH5wdOL.ZCVShIj15EXfBEu6NmXiJKLekHnO2', '2021-12-01 09:01:22', 0, '0', '1638845819_4017b9f03610ddef6aa6.jpg'),
(614259039, 'นาย', 'เอื้อคุน', 'จันทร์หา', '614259011@webmail.npru.ac.th', '$2y$10$we01eUAtYHnyK4ahDH5wdOL.ZCVShIj15EXfBEu6NmXiJKLekHnO2', '2021-11-22 15:02:33', 0, '0', '1637677871_d778b03ae4684c34ae69.jpg'),
(614259044, 'นาย', 'ธนชาติ', 'ชาวนาฝ้าย', '614259044@webmail.npru.ac.th', '$2y$10$we01eUAtYHnyK4ahDH5wdOL.ZCVShIj15EXfBEu6NmXiJKLekHnO2', '2021-11-20 14:54:29', 0, '0', '1637420127_e3faefcec60652f6623d.jpg'),
(614259055, 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', '614259055@webmail.npru.ac.th', '$2y$10$we01eUAtYHnyK4ahDH5wdOL.ZCVShIj15EXfBEu6NmXiJKLekHnO2', '2021-11-20 14:51:18', 0, '0863616258', '1639383794_9f0331beff602282056c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `events_ibfk_1` (`user_id`),
  ADD KEY `events_ibfk_2` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;