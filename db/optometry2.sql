-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 06:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optometry2`
--

-- --------------------------------------------------------

--
-- Table structure for table `chief_complaint`
--

CREATE TABLE `chief_complaint` (
  `cc_id` int(11) NOT NULL,
  `cc_text` varchar(255) NOT NULL,
  `cc_symptoms` varchar(255) NOT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chief_complaint`
--

INSERT INTO `chief_complaint` (`cc_id`, `cc_text`, `cc_symptoms`, `pi_id`) VALUES
(1, 'Test 1', 'near', 7),
(2, 'Test 1', 'near', 8),
(3, 'Test 1', 'near', 9),
(4, 'Test 1', 'near', 10),
(5, 'Test 1', 'near', 11),
(6, 'Test 1', 'near', 12);

-- --------------------------------------------------------

--
-- Table structure for table `fmhx`
--

CREATE TABLE `fmhx` (
  `FmHx_id` int(11) NOT NULL,
  `FmHx_text` varchar(255) NOT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `fmhx`
--

INSERT INTO `fmhx` (`FmHx_id`, `FmHx_text`, `pi_id`) VALUES
(1, 'FmHx Test 1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ha_hx`
--

CREATE TABLE `ha_hx` (
  `ha_id` int(11) NOT NULL,
  `ha_radio` varchar(255) NOT NULL,
  `ha_radio_detail` varchar(255) NOT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ha_hx`
--

INSERT INTO `ha_hx` (`ha_id`, `ha_radio`, `ha_radio_detail`, `pi_id`) VALUES
(1, 'on', 'HA Test1', 7),
(2, 'HA', 'HA Test1', 8),
(3, 'HA', 'HA Test1', 9),
(4, 'HA', 'HA Test1', 10),
(5, 'HA', 'HA Test1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `med_id` int(11) NOT NULL,
  `med_radio` varchar(255) NOT NULL,
  `med_radio_detail` varchar(255) NOT NULL,
  `med_KKK` varchar(255) NOT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`med_id`, `med_radio`, `med_radio_detail`, `med_KKK`, `pi_id`) VALUES
(1, 'on', 'พารา', 'KMA Test 1', 7),
(2, 'Med', 'พารา', 'KMA Test 1', 8),
(3, 'Med', 'พารา', 'KMA Test 1', 9),
(4, 'Med', 'พารา', 'KMA Test 1', 10),
(5, 'Med', 'พารา', 'KMA Test 1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ohe`
--

CREATE TABLE `ohe` (
  `ohe_id` int(11) NOT NULL,
  `ohe_work` varchar(255) NOT NULL,
  `ohe_hobby` varchar(255) NOT NULL,
  `ohe_checkbox1` varchar(255) DEFAULT NULL,
  `ohe_checkbox_detail1` varchar(255) DEFAULT NULL,
  `ohe_checkbox2` varchar(255) DEFAULT NULL,
  `ohe_checkbox_detail2` varchar(255) DEFAULT NULL,
  `ohe_checkbox3` varchar(255) DEFAULT NULL,
  `ohe_checkbox_detail3` varchar(255) DEFAULT NULL,
  `ohe_checkbox4` varchar(255) DEFAULT NULL,
  `ohe_checkbox_detail4` varchar(255) DEFAULT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ohe`
--

INSERT INTO `ohe` (`ohe_id`, `ohe_work`, `ohe_hobby`, `ohe_checkbox1`, `ohe_checkbox_detail1`, `ohe_checkbox2`, `ohe_checkbox_detail2`, `ohe_checkbox3`, `ohe_checkbox_detail3`, `ohe_checkbox4`, `ohe_checkbox_detail4`, `pi_id`) VALUES
(1, 'Student', 'Coding', 'Computer (Laptop / PC)', '4ชม./วัน', 'Tablet/Smartphone', '6ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 12);

-- --------------------------------------------------------

--
-- Table structure for table `patient_response`
--

CREATE TABLE `patient_response` (
  `pr_id` int(11) NOT NULL,
  `pr_radio` varchar(255) NOT NULL,
  `pr_other` varchar(255) NOT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `patient_response`
--

INSERT INTO `patient_response` (`pr_id`, `pr_radio`, `pr_other`, `pi_id`) VALUES
(1, '2x', 'Test 1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `pi_id` int(11) NOT NULL,
  `pi_firstname` varchar(255) NOT NULL,
  `pi_lastname` varchar(255) NOT NULL,
  `pi_birthdate` varchar(255) NOT NULL,
  `pi_gender` varchar(255) NOT NULL,
  `pi_address` varchar(255) NOT NULL,
  `pi_tel` varchar(255) NOT NULL,
  `pi_occupation` varchar(255) NOT NULL,
  `pi_created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`pi_id`, `pi_firstname`, `pi_lastname`, `pi_birthdate`, `pi_gender`, `pi_address`, `pi_tel`, `pi_occupation`, `pi_created_date`) VALUES
(7, 'ธนพงษ์', 'สองสีซ้าย', '2000-09-09', 'on', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 14:45:15'),
(8, 'ธนพงษ์', 'สองสีซ้าย', '2023-06-01', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 14:52:29'),
(9, 'ธนพงษ์', 'สองสีซ้าย', '2000-09-01', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 15:02:52'),
(10, 'ธนพงษ์', 'สองสีซ้าย', '2000-09-09', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 15:32:48'),
(11, 'ธนพงษ์', 'สองสีซ้าย', '2000-09-09', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 15:48:30'),
(12, 'ธนพงษ์', 'สองสีซ้าย', '2000-09-09', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 15:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `pmhx`
--

CREATE TABLE `pmhx` (
  `PMHx_id` int(11) NOT NULL,
  `PMHx_checked` varchar(255) NOT NULL,
  `PMHx_reason` varchar(255) NOT NULL,
  `PMHx_inspector` varchar(255) NOT NULL,
  `PMHx_site` varchar(255) NOT NULL,
  `PMHx_results` varchar(255) NOT NULL,
  `PMHx_pressure` varchar(255) NOT NULL,
  `PMHx_sugar` varchar(255) NOT NULL,
  `PMHx_disease` varchar(255) NOT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pmhx`
--

INSERT INTO `pmhx` (`PMHx_id`, `PMHx_checked`, `PMHx_reason`, `PMHx_inspector`, `PMHx_site`, `PMHx_results`, `PMHx_pressure`, `PMHx_sugar`, `PMHx_disease`, `pi_id`) VALUES
(1, '2023-05-28', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 7),
(2, '2023-05-29', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 8),
(3, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 9),
(4, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 10),
(5, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pohx`
--

CREATE TABLE `pohx` (
  `POHx_id` int(11) NOT NULL,
  `POHx_checked` varchar(255) NOT NULL,
  `POHx_reason` varchar(255) NOT NULL,
  `POHx_inspector` varchar(255) NOT NULL,
  `POHx_site` varchar(255) NOT NULL,
  `POHx_mydriatic` varchar(255) NOT NULL,
  `POHx_results` varchar(255) NOT NULL,
  `POHx_edited` varchar(255) NOT NULL,
  `POHx_radio` varchar(255) NOT NULL,
  `POHx_radio_detail` varchar(255) NOT NULL,
  `pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pohx`
--

INSERT INTO `pohx` (`POHx_id`, `POHx_checked`, `POHx_reason`, `POHx_inspector`, `POHx_site`, `POHx_mydriatic`, `POHx_results`, `POHx_edited`, `POHx_radio`, `POHx_radio_detail`, `pi_id`) VALUES
(1, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'on', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'on', 'CL11234', 7),
(2, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 8),
(3, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 9),
(4, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 10),
(5, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chief_complaint`
--
ALTER TABLE `chief_complaint`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `personal_information fk_cc` (`pi_id`);

--
-- Indexes for table `fmhx`
--
ALTER TABLE `fmhx`
  ADD PRIMARY KEY (`FmHx_id`),
  ADD KEY `personal_information fk_fmhx` (`pi_id`);

--
-- Indexes for table `ha_hx`
--
ALTER TABLE `ha_hx`
  ADD PRIMARY KEY (`ha_id`),
  ADD KEY `personal_information fk_hahx` (`pi_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`med_id`),
  ADD KEY `personal_information fk_med` (`pi_id`);

--
-- Indexes for table `ohe`
--
ALTER TABLE `ohe`
  ADD PRIMARY KEY (`ohe_id`),
  ADD KEY `personal_information fk_ohe` (`pi_id`);

--
-- Indexes for table `patient_response`
--
ALTER TABLE `patient_response`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `personal_information fk_pr` (`pi_id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`pi_id`);

--
-- Indexes for table `pmhx`
--
ALTER TABLE `pmhx`
  ADD PRIMARY KEY (`PMHx_id`),
  ADD KEY `personal_information fk_pmhx` (`pi_id`);

--
-- Indexes for table `pohx`
--
ALTER TABLE `pohx`
  ADD PRIMARY KEY (`POHx_id`),
  ADD KEY `personal_information fk_pohx` (`pi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chief_complaint`
--
ALTER TABLE `chief_complaint`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fmhx`
--
ALTER TABLE `fmhx`
  MODIFY `FmHx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ha_hx`
--
ALTER TABLE `ha_hx`
  MODIFY `ha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ohe`
--
ALTER TABLE `ohe`
  MODIFY `ohe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_response`
--
ALTER TABLE `patient_response`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pmhx`
--
ALTER TABLE `pmhx`
  MODIFY `PMHx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pohx`
--
ALTER TABLE `pohx`
  MODIFY `POHx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chief_complaint`
--
ALTER TABLE `chief_complaint`
  ADD CONSTRAINT `personal_information fk_cc` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);

--
-- Constraints for table `fmhx`
--
ALTER TABLE `fmhx`
  ADD CONSTRAINT `personal_information fk_fmhx` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);

--
-- Constraints for table `ha_hx`
--
ALTER TABLE `ha_hx`
  ADD CONSTRAINT `personal_information fk_hahx` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);

--
-- Constraints for table `medication`
--
ALTER TABLE `medication`
  ADD CONSTRAINT `personal_information fk_med` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);

--
-- Constraints for table `ohe`
--
ALTER TABLE `ohe`
  ADD CONSTRAINT `personal_information fk_ohe` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);

--
-- Constraints for table `patient_response`
--
ALTER TABLE `patient_response`
  ADD CONSTRAINT `personal_information fk_pr` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);

--
-- Constraints for table `pmhx`
--
ALTER TABLE `pmhx`
  ADD CONSTRAINT `personal_information fk_pmhx` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);

--
-- Constraints for table `pohx`
--
ALTER TABLE `pohx`
  ADD CONSTRAINT `personal_information fk_pohx` FOREIGN KEY (`pi_id`) REFERENCES `personal_information` (`pi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
