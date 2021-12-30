-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 10:23 AM
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
  `meeting_room` varchar(252) NOT NULL,
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

INSERT INTO `events` (`meeting_id`, `user_id`, `meeting_record`, `meeting_titlename`, `meeting_name`, `meeting_lastname`, `meeting_title`, `start_date`, `end_date`, `backgroundColor`, `meeting_room`, `meeting_round`, `meeting_detail`, `meeting_location`, `meeting_type1`, `meeting_amount`, `meeting_grouppepole`, `meeting_agency`, `meeting_phone`, `meeting_other_requirements`, `meeting_status`, `meeting_drink`) VALUES
(89, 614259055, '123456', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 'กลับบ้าน', '2021-12-23 16:30:00', '2021-12-23 16:30:00', '', 'ห้องประชุม1', 'รอบที่ 2', 'กลับบ้าน', 'การไฟฟ้าส่วนภูมิภาคอำเภอนครชัยศรี', 'Classroom,Webx,Video Conferance', 20, ' กฟก3', ' กฟก3', '0863616258', 'เครื่องคอมพิวเตอร์,เครื่องฉายและจอโปรเจ็คเตอร์,เครื่องเสียงพร้อมอุปกรณ์', 1, 'เครื่องดื่ม,อาหารว่าง');

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
(614259020, 'นาย', 'พงศธร', 'จันทร์หา', '614259020@webmail.npru.ac.th', '$2y$10$xbo65aiRCN7XKlrpUYVjLenPQAttYP7cw9w3.0el.UUqgwaGHDf/6', '2021-12-01 09:01:22', 0, '0', '1638845819_4017b9f03610ddef6aa6.jpg'),
(614259039, 'นาย', 'เอื้อคุน', 'จันทร์หา', '614259011@webmail.npru.ac.th', '$2y$10$g.DLhOTzyu2HHnkoVzoa8eBK9rT/RQeNG9/QJSfuz9NVmTjJ857/G', '2021-11-22 15:02:33', 0, '0', '1637677871_d778b03ae4684c34ae69.jpg'),
(614259044, 'นาย', 'ธนชาติ', 'ชาวนาฝ้าย', '614259044@webmail.npru.ac.th', '$2y$10$jx24z29hNFfmjInDLj8mdOgROu.wWQnTyDgPUATckytckusINkm/6', '2021-11-20 14:54:29', 0, '0', '1637420127_e3faefcec60652f6623d.jpg'),
(614259055, 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', '614259055@webmail.npru.ac.th', '$2y$10$we01eUAtYHnyK4ahDH5wdOL.ZCVShIj15EXfBEu6NmXiJKLekHnO2', '2021-11-20 14:51:18', 0, '0863616258', '1639383794_9f0331beff602282056c.jpg');

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
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
