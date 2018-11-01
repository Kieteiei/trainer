

-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 06:55 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainer_freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountpayment`
--

CREATE TABLE `trainings` (
  `training_id` int(4) NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_at` date DEFAULT NULL,
  `stop_at` date DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `accountpayment` (
  `account_id` int(4) NOT NULL,
  `account_number` int(20) NOT NULL,
  `account_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brance` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appeal`
--

CREATE TABLE `appeal` (
  `appeal_id` int(4) NOT NULL,
  `appeal_type` int(40) DEFAULT NULL,
  `appeal_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appeal_status` tinyint(1) DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appeal`
--

INSERT INTO `appeal` (`appeal_id`, `appeal_type`, `appeal_detail`, `appeal_status`, `user_id`) VALUES
(1, 0, 'eueu', 0, 10),
(2, 0, '??????????????????', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coaching`
--

CREATE TABLE `coaching` (
  `coaching_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL,
  `practicerecord_id` int(4) NOT NULL,
  `effectrecord_id` int(4) NOT NULL,
  `payment_id` int(4) NOT NULL,
  `coaching_datetime` date DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(4) NOT NULL,
  `comment_type` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment_datetime` date DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_type`, `comment`, `comment_datetime`, `user_id`) VALUES
(1, 'eiei', '\0\0ei\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?', '0000-00-00', 2),
(2, '?????????', '\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(4) NOT NULL,
  `course_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_datetime` date DEFAULT NULL,
  `img_path` varchar(100) NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `activity`, `course_datetime`, `user_id`) VALUES
(11, 'ลดน้ำหนัก', 'วิ่ง3-4กิโลเมตร/วัน', '2560-01-01', 4),
(12, 'กายบริหาร', 'วิ่ง1กม. ดึงข้อ30ครั้ง ซิตอัป50ครั้ง กระโดดตบ40ครั้ง', '0000-00-00', 4),
(13, 'ควบคุมน้ำหนัก', 'วิ่ง2กม/วัน กระโดดตบ40ครั้ง/วัน ซิตอัป50ครั้ง/วัน(วอมร่ายกายก่อนทำ)', '2550-02-01', 3),
(14, 'เพิ่มกล้ามเนื้อแขน', 'ยกน้ำหนักท่าปรกติ 4เซ็ต เซ็ตละ12ครั้ง', '2550-02-01', 3),
(18, 'lowfat', 'diaed', '2557-12-01', 4),
(19, 'ทดสอบการลดน้ำหนัก', 'วิ่งออกกำลังกาย 3-4ชั่วโมง/วัน', '2550-01-01', 4);

-- --------------------------------------------------------

--
-- Table structure for table `effectrecord`
--

CREATE TABLE `effectrecord` (
  `effectrecord_id` int(4) NOT NULL,
  `practicerecord_id` int(4) DEFAULT NULL,
  `effect` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `height` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `effectrecord_datetime` date DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkvideo`
--

CREATE TABLE `linkvideo` (
  `linkvideo_id` int(4) NOT NULL,
  `video_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `video_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `nutrition_id` int(4) NOT NULL,
  `nutrition_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nutrition_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nutrition_quote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`nutrition_id`, `nutrition_name`, `nutrition_detail`, `nutrition_quote`, `user_id`) VALUES
(1, 'tes', 'tessssssss', 'tes/http:', 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(4) NOT NULL,
  `amount` double DEFAULT NULL,
  `payment_status` tinyint(4) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `account_id` int(4) DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(4) NOT NULL,
  `photo_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_quote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posture`
--

CREATE TABLE `posture` (
  `posture_id` int(4) NOT NULL,
  `posture_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posture_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posture_quote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posture`
--

INSERT INTO `posture` (`posture_id`, `posture_name`, `posture_detail`, `posture_quote`) VALUES
(1, 'eiei', 'eieiei', 'eieiei'),
(2, 'Squat', '??????????????????????????????????????????????', ''),
(3, '???????', '???????51??', 'google');

-- --------------------------------------------------------

--
-- Table structure for table `practicerecord`
--

CREATE TABLE `practicerecord` (
  `practicerecord_id` int(4) NOT NULL,
  `practicerecord_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `practicerecord_detail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `practicerecord_datetime` date DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `practicerecord`
--

INSERT INTO `practicerecord` (`practicerecord_id`, `practicerecord_name`, `practicerecord_detail`, `practicerecord_datetime`, `user_id`) VALUES
(1, 'tes', 'tesesesesaqqttt', '2010-01-10', 10);

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `recommend_id` int(4) NOT NULL,
  `posture_id` int(4) DEFAULT NULL,
  `photo_id` int(4) DEFAULT NULL,
  `linkvideo_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabletraining`
--

CREATE TABLE `tabletraining` (
  `tabletraining_id` int(4) NOT NULL,
  `course_id` int(4) DEFAULT NULL,
  `effectrecord_datetime` int(4) DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_card` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `height` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `line_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,

  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `id_card`, `address`, `birthday`, `email`, `phone_number`, `weight`, `height`, `facebook_id`, `line_id`, `user_type`) VALUES
(2, 'admin', '1234', NULL, NULL, NULL, 'kietzaza@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ADMIN'),
(3, 'user', '1234', NULL, NULL, NULL, 'tangk1995@gmail.com', NULL, NULL, NULL, NULL, NULL, 'USER'),
(4, 'kietzaza', '1234', NULL, NULL, NULL, 'tangk1995@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ADMIN'),
(5, 'trainer', '1234', NULL, NULL, NULL, 'asdasd@asd.com', NULL, NULL, NULL, NULL, NULL, 'TRAINER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountpayment`
--
ALTER TABLE `accountpayment`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `appeal`
--
ALTER TABLE `appeal`
  ADD PRIMARY KEY (`appeal_id`);

--
-- Indexes for table `coaching`
--
ALTER TABLE `coaching`
  ADD PRIMARY KEY (`coaching_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `effectrecord`
--
ALTER TABLE `effectrecord`
  ADD PRIMARY KEY (`effectrecord_id`);

--
-- Indexes for table `linkvideo`
--
ALTER TABLE `linkvideo`
  ADD PRIMARY KEY (`linkvideo_id`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`nutrition_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `posture`
--
ALTER TABLE `posture`
  ADD PRIMARY KEY (`posture_id`);

--
-- Indexes for table `practicerecord`
--
ALTER TABLE `practicerecord`
  ADD PRIMARY KEY (`practicerecord_id`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`recommend_id`);

--
-- Indexes for table `tabletraining`
--
ALTER TABLE `tabletraining`
  ADD PRIMARY KEY (`tabletraining_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountpayment`
--
ALTER TABLE `accountpayment`
  MODIFY `account_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appeal`
--
ALTER TABLE `appeal`
  MODIFY `appeal_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coaching`
--
ALTER TABLE `coaching`
  MODIFY `coaching_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `effectrecord`
--
ALTER TABLE `effectrecord`
  MODIFY `effectrecord_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linkvideo`
--
ALTER TABLE `linkvideo`
  MODIFY `linkvideo_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `nutrition_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posture`
--
ALTER TABLE `posture`
  MODIFY `posture_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `practicerecord`
--
ALTER TABLE `practicerecord`
  MODIFY `practicerecord_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `recommend_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabletraining`
--
ALTER TABLE `tabletraining`
  MODIFY `tabletraining_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
