-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 04:08 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainerfreelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountpayment`
--

CREATE TABLE `accountpayment` (
  `accountLis` int(4) NOT NULL,
  `accountNumber` int(20) NOT NULL,
  `accountName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accountType` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brance` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appeal`
--

CREATE TABLE `appeal` (
  `appealID` int(4) NOT NULL,
  `appealType` int(40) DEFAULT NULL,
  `appealDetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appealStatus` tinyint(1) DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appeal`
--

INSERT INTO `appeal` (`appealID`, `appealType`, `appealDetail`, `appealStatus`, `userID`) VALUES
(1, 0, 'eueu', 0, 10),
(2, 0, '??????????????????', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coaching`
--

CREATE TABLE `coaching` (
  `coachingID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `courseID` int(4) NOT NULL,
  `prID` int(4) NOT NULL,
  `erID` int(4) NOT NULL,
  `paymentID` int(4) NOT NULL,
  `coachingDatetime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(4) NOT NULL,
  `commentType` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commentDatetime` date DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `commentType`, `comment`, `commentDatetime`, `userID`) VALUES
(1, 'eiei', '\0\0ei\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?', '0000-00-00', 2),
(2, '?????????', '\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(4) NOT NULL,
  `courseName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coeseDattime` date DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `activity`, `coeseDattime`, `userID`) VALUES
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
  `erID` int(4) NOT NULL,
  `prID` int(4) DEFAULT NULL,
  `effect` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weihth` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hige` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `erDatetime` date DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkvedeo`
--

CREATE TABLE `linkvedeo` (
  `linkvedeoID` int(4) NOT NULL,
  `videoName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `videoDetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `nutritionID` int(4) NOT NULL,
  `ntName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ntDetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ntQuote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`nutritionID`, `ntName`, `ntDetail`, `ntQuote`, `userID`) VALUES
(1, 'tes', 'tessssssss', 'tes/http:', 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(4) NOT NULL,
  `amount` double DEFAULT NULL,
  `paymentStatus` tinyint(4) DEFAULT NULL,
  `paymentDare` date DEFAULT NULL,
  `accountLis` int(4) DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photoID` int(4) NOT NULL,
  `photoName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localtionDetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photoQuote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posture`
--

CREATE TABLE `posture` (
  `postureID` int(4) NOT NULL,
  `postureName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postureDetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postureQuote` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posture`
--

INSERT INTO `posture` (`postureID`, `postureName`, `postureDetail`, `postureQuote`) VALUES
(1, 'eiei', 'eieiei', 'eieiei'),
(2, 'Squat', '??????????????????????????????????????????????', ''),
(3, '???????', '???????51??', 'google');

-- --------------------------------------------------------

--
-- Table structure for table `practicerecord`
--

CREATE TABLE `practicerecord` (
  `prID` int(4) NOT NULL,
  `prName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prDetail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prDattime` date DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `practicerecord`
--

INSERT INTO `practicerecord` (`prID`, `prName`, `prDetail`, `prDattime`, `userID`) VALUES
(1, 'tes', 'tesesesesaqqttt', '2010-01-10', 10);

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `rmID` int(4) NOT NULL,
  `postureID` int(4) DEFAULT NULL,
  `photoID` int(4) DEFAULT NULL,
  `linkvedeoID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabletraining`
--

CREATE TABLE `tabletraining` (
  `ttID` int(4) NOT NULL,
  `courseID` int(4) DEFAULT NULL,
  `erDatetime` int(4) DEFAULT NULL,
  `userID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(4) NOT NULL,
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCard` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hige` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FBID` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LineID` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userType` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `password`, `idCard`, `address`, `birthday`, `email`, `phoneNumber`, `weight`, `hige`, `FBID`, `LineID`, `userType`) VALUES
(2, 'admin', '1234', NULL, NULL, NULL, 'kietzaza@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ADMIN'),
(3, 'tesuser', '1234', NULL, NULL, NULL, 'tangk1995@gmail.com', NULL, NULL, NULL, NULL, NULL, 'USER'),
(4, 'kietzaza', '1234', NULL, NULL, NULL, 'tangk1995@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ADMIN'),
(5, 'Trainer', '1234', NULL, NULL, NULL, 'asdasd@asd.com', NULL, NULL, NULL, NULL, NULL, 'TRAINER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountpayment`
--
ALTER TABLE `accountpayment`
  ADD PRIMARY KEY (`accountLis`);

--
-- Indexes for table `appeal`
--
ALTER TABLE `appeal`
  ADD PRIMARY KEY (`appealID`);

--
-- Indexes for table `coaching`
--
ALTER TABLE `coaching`
  ADD PRIMARY KEY (`coachingID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `effectrecord`
--
ALTER TABLE `effectrecord`
  ADD PRIMARY KEY (`erID`);

--
-- Indexes for table `linkvedeo`
--
ALTER TABLE `linkvedeo`
  ADD PRIMARY KEY (`linkvedeoID`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`nutritionID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photoID`);

--
-- Indexes for table `posture`
--
ALTER TABLE `posture`
  ADD PRIMARY KEY (`postureID`);

--
-- Indexes for table `practicerecord`
--
ALTER TABLE `practicerecord`
  ADD PRIMARY KEY (`prID`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`rmID`);

--
-- Indexes for table `tabletraining`
--
ALTER TABLE `tabletraining`
  ADD PRIMARY KEY (`ttID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountpayment`
--
ALTER TABLE `accountpayment`
  MODIFY `accountLis` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appeal`
--
ALTER TABLE `appeal`
  MODIFY `appealID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coaching`
--
ALTER TABLE `coaching`
  MODIFY `coachingID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `effectrecord`
--
ALTER TABLE `effectrecord`
  MODIFY `erID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `linkvedeo`
--
ALTER TABLE `linkvedeo`
  MODIFY `linkvedeoID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `nutritionID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photoID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posture`
--
ALTER TABLE `posture`
  MODIFY `postureID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `practicerecord`
--
ALTER TABLE `practicerecord`
  MODIFY `prID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `rmID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabletraining`
--
ALTER TABLE `tabletraining`
  MODIFY `ttID` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
