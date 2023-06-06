-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 06:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optometry`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_test`
--

CREATE TABLE `additional_test` (
  `at_id` int(11) NOT NULL,
  `at_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binocular_vission`
--

CREATE TABLE `binocular_vission` (
  `bv_id` int(11) NOT NULL,
  `bv_distance_h` varchar(255) NOT NULL,
  `bv_distance_bi` varchar(255) NOT NULL,
  `bv_distance_bo` varchar(255) NOT NULL,
  `bv_distance_vertical` varchar(255) NOT NULL,
  `bv_distance_supra` varchar(255) NOT NULL,
  `bv_distance_infra` varchar(255) NOT NULL,
  `bv_near_radio` varchar(255) NOT NULL,
  `bv_near_h` varchar(255) NOT NULL,
  `bv_near_bi` varchar(255) NOT NULL,
  `bv_near_bo` varchar(255) NOT NULL,
  `bv_near_vertical` varchar(255) NOT NULL,
  `bv_near_supra` varchar(255) NOT NULL,
  `bv_near_infra` varchar(255) NOT NULL,
  `bv_cal_radio` varchar(255) NOT NULL,
  `bv_cal_nra` varchar(255) NOT NULL,
  `bv_cal_pra` varchar(255) NOT NULL,
  `bv_cal_bcc` varchar(255) NOT NULL,
  `bv_cal_gradients` varchar(255) NOT NULL,
  `bv_cal_calculate_aca` varchar(255) NOT NULL,
  `bv_cal_calculate` varchar(255) NOT NULL,
  `bv_af_od` varchar(255) NOT NULL,
  `bv_af_os` varchar(255) NOT NULL,
  `bv_af_ou` varchar(255) NOT NULL,
  `bv_af_method` varchar(255) NOT NULL,
  `bv_vf_ou` varchar(255) NOT NULL,
  `bv_vf_method` varchar(255) NOT NULL,
  `bv_maddox` varchar(255) NOT NULL,
  `bv_assoiate` varchar(255) NOT NULL,
  `bv_prd` varchar(255) NOT NULL,
  `bv_ta` varchar(255) NOT NULL,
  `bv_ta_rang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chief_complaint`
--

CREATE TABLE `chief_complaint` (
  `cc_id` int(11) NOT NULL,
  `cc_text` varchar(255) NOT NULL,
  `cc_symptoms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fmhx`
--

CREATE TABLE `fmhx` (
  `FmHx_id` int(11) NOT NULL,
  `FmHx_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ha_hx`
--

CREATE TABLE `ha_hx` (
  `ha_id` int(11) NOT NULL,
  `ha_radio` varchar(255) NOT NULL,
  `ha_radio_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `med_id` int(11) NOT NULL,
  `med_radio` varchar(255) NOT NULL,
  `med_radio_detail` varchar(255) NOT NULL,
  `med_KKK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ohe`
--

CREATE TABLE `ohe` (
  `ohe_id` int(11) NOT NULL,
  `ohe_work` varchar(255) NOT NULL,
  `ohe_hobby` varchar(255) NOT NULL,
  `ohe_checkbox` varchar(255) NOT NULL,
  `ohe_checkbox_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `old_rx`
--

CREATE TABLE `old_rx` (
  `old_id` int(11) NOT NULL,
  `old_Rx` varchar(255) NOT NULL,
  `old_Rx1_od` varchar(255) NOT NULL,
  `old_Rx1_os` varchar(255) NOT NULL,
  `old_Rx1_add` varchar(255) NOT NULL,
  `old_Rx1_pd` varchar(255) NOT NULL,
  `old_Rx2_od` varchar(255) NOT NULL,
  `old_Rx2_os` varchar(255) NOT NULL,
  `old_Rx2_add` varchar(255) NOT NULL,
  `old_Rx2_pd` varchar(255) NOT NULL,
  `old_VAsc_distance_od` varchar(255) NOT NULL,
  `old_VAsc_distance_os` varchar(255) NOT NULL,
  `old_VAsc_distance_ou` varchar(255) NOT NULL,
  `old_VAsc_pinhole_od` varchar(255) NOT NULL,
  `old_VAsc_pinhole_os` varchar(255) NOT NULL,
  `old_VAsc_near_od` varchar(255) NOT NULL,
  `old_VAsc_near_os` varchar(255) NOT NULL,
  `old_VAsc_near_ou` varchar(255) NOT NULL,
  `old_Vacc_distance_od` varchar(255) NOT NULL,
  `old_Vacc_distance_os` varchar(255) NOT NULL,
  `old_Vacc_distance_ou` varchar(255) NOT NULL,
  `old_Vacc_pinhole_od` varchar(255) NOT NULL,
  `old_Vacc_pinhole_os` varchar(255) NOT NULL,
  `old_Vacc_near_od` varchar(255) NOT NULL,
  `old_Vacc_near_os` varchar(255) NOT NULL,
  `old_Vacc_near_ou` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_response`
--

CREATE TABLE `patient_response` (
  `pr_id` int(11) NOT NULL,
  `pr_radio` varchar(255) NOT NULL,
  `pr_other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`id`, `firstname`, `lastname`, `birthdate`, `gender`, `address`, `tel`, `occupation`, `created_date`) VALUES
(1, 'Thanaphong', 'Songsisai', '9 September 2000', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา จ.น่าน 55110', '0947131582', 'Student', '2023-05-09 22:51:13'),
(2, 'ธนพงษ์', 'สองสีซ้าย', '9 กันยายน, 2543', 'Please Select', '74 ม.3 ต.กลางเวียง อ.เวียงสา จ.น่าน 55110', '0947131582', 'Student', '2023-05-09 23:50:40'),
(3, 'Thanakon', 'Ruchikanchanarat', ' , ', 'male', '99/168, Ratchadaphisek Road, Huai Khwang, Bangkok 10310, Thailand', '0926481624', 'None', '2023-05-10 22:52:57'),
(4, 'Thanakon', 'Ruchikanchanarat', ' , ', 'male', '18 True Tower, Ratchadaphisek Road, Huai Khwang, Bangkok 10310, Thailand', '0964512682', 'None', '2023-05-10 22:54:31'),
(5, 'Thanakon', 'Ruchikanchanarat', '3 June, 2001', 'male', '18 True Tower, Ratchadaphisek Road, Huai Khwang, Bangkok 10310, Thailand', '0926481624', 'None', '2023-05-10 22:56:01'),
(6, 'Chanita', 'Songsisai', '10 March, 1996', 'female', '74 Moo.3, Klangwiang, Wiang Sa, Nan 55110, Thailand', '0875446772', 'Programmer', '2023-05-10 23:02:32');

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
  `PMHx_disease` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `POHx_radio_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preliminary_exam`
--

CREATE TABLE `preliminary_exam` (
  `pe_id` int(11) NOT NULL,
  `pe_distance` varchar(255) NOT NULL,
  `pe_near` varchar(255) NOT NULL,
  `pe_npa_od` varchar(255) NOT NULL,
  `pe_npa_os` varchar(255) NOT NULL,
  `pe_aa_od` varchar(255) NOT NULL,
  `pe_aa_os` varchar(255) NOT NULL,
  `pe_npc` varchar(255) NOT NULL,
  `pe_motility` varchar(255) NOT NULL,
  `pe_con` varchar(255) NOT NULL,
  `pe_cover_distance` varchar(255) NOT NULL,
  `pe_cover_near` varchar(255) NOT NULL,
  `pe_cover_dots` varchar(255) NOT NULL,
  `pe_so_near` varchar(255) NOT NULL,
  `pe_so_type` varchar(255) NOT NULL,
  `pe_color_od` varchar(255) NOT NULL,
  `pe_color_os` varchar(255) NOT NULL,
  `pe_color_type` varchar(255) NOT NULL,
  `pe_grid` varchar(255) NOT NULL,
  `pe_grid_od` varchar(255) NOT NULL,
  `pe_grid_os` varchar(255) NOT NULL,
  `pe_grid_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pc_id` int(11) NOT NULL,
  `pc_name` varchar(255) NOT NULL,
  `pc_age` varchar(255) NOT NULL,
  `pc_date` varchar(255) NOT NULL,
  `pc_sphere_od` varchar(255) NOT NULL,
  `pc_sphere_os` varchar(255) NOT NULL,
  `pc_cylinder_od` varchar(255) NOT NULL,
  `pc_cylinder_os` varchar(255) NOT NULL,
  `pc_axis_od` varchar(255) NOT NULL,
  `pc_axis_os` varchar(255) NOT NULL,
  `pc_add_od` varchar(255) NOT NULL,
  `pc_add_os` varchar(255) NOT NULL,
  `pc_prism_od` varchar(255) NOT NULL,
  `pc_prism_os` varchar(255) NOT NULL,
  `pc_va_od` varchar(255) NOT NULL,
  `pc_va_os` varchar(255) NOT NULL,
  `pc_pd_od` varchar(255) NOT NULL,
  `pc_pd_os` varchar(255) NOT NULL,
  `pc_fitting_od` varchar(255) NOT NULL,
  `pc_fitting_os` varchar(255) NOT NULL,
  `pc_checkbox` varchar(255) NOT NULL,
  `pc_checkbox_detail` varchar(255) NOT NULL,
  `pc_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refraction`
--

CREATE TABLE `refraction` (
  `ref_id` int(11) NOT NULL,
  `ref_km_od` varchar(255) NOT NULL,
  `ref_km_os` varchar(255) NOT NULL,
  `ref_sr_od` varchar(255) NOT NULL,
  `ref_sr_od_va` varchar(255) NOT NULL,
  `ref_sr_os` varchar(255) NOT NULL,
  `ref_sr_os_va` varchar(255) NOT NULL,
  `ref_sr_ou_va` varchar(255) NOT NULL,
  `ref_dr_od` varchar(255) NOT NULL,
  `ref_dr_od_va` varchar(255) NOT NULL,
  `ref_dr_os` varchar(255) NOT NULL,
  `ref_dr_os_va` varchar(255) NOT NULL,
  `ref_dr_ou_va` varchar(255) NOT NULL,
  `ref_ms_od` varchar(255) NOT NULL,
  `ref_ms_od_va` varchar(255) NOT NULL,
  `ref_ms_os` varchar(255) NOT NULL,
  `ref_ms_os_va` varchar(255) NOT NULL,
  `ref_ms_ou_va` varchar(255) NOT NULL,
  `ref_bs_od` varchar(255) NOT NULL,
  `ref_bs_os` varchar(255) NOT NULL,
  `ref_bs_ou_va` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slit_lamp`
--

CREATE TABLE `slit_lamp` (
  `as_id` int(11) NOT NULL,
  `as_lid_od` varchar(255) NOT NULL,
  `as_lid_os` varchar(255) NOT NULL,
  `as_conjunctiva_od` varchar(255) NOT NULL,
  `as_conjunctiva_os` varchar(255) NOT NULL,
  `as_sclera_od` varchar(255) NOT NULL,
  `as_sclera_os` varchar(255) NOT NULL,
  `as_cornea_od` varchar(255) NOT NULL,
  `as_cornea_os` varchar(255) NOT NULL,
  `as_tear` varchar(255) NOT NULL,
  `as_tear_od` varchar(255) NOT NULL,
  `as_tear_os` varchar(255) NOT NULL,
  `as_iris_od` varchar(255) NOT NULL,
  `as_iris_os` varchar(255) NOT NULL,
  `as_lens_od` varchar(255) NOT NULL,
  `as_lens_os` varchar(255) NOT NULL,
  `as_anterior_od` varchar(255) NOT NULL,
  `as_anterior_os` varchar(255) NOT NULL,
  `as_p_size_l_od` varchar(255) NOT NULL,
  `as_p_size_l_os` varchar(255) NOT NULL,
  `as_p_size_d_od` varchar(255) NOT NULL,
  `as_p_size_d_os` varchar(255) NOT NULL,
  `as_p_direct_od` varchar(255) NOT NULL,
  `as_p_direct_os` varchar(255) NOT NULL,
  `as_p_consensual_od` varchar(255) NOT NULL,
  `as_p_consensual_os` varchar(255) NOT NULL,
  `as_p_accommodate_od` varchar(255) NOT NULL,
  `as_p_accommodate_os` varchar(255) NOT NULL,
  `as_p_marcus_od` varchar(255) NOT NULL,
  `as_p_marcus_os` varchar(255) NOT NULL,
  `as_img` varchar(255) NOT NULL,
  `as_assessment` varchar(500) NOT NULL,
  `ps_radio` varchar(255) NOT NULL,
  `ps_media_od` varchar(255) NOT NULL,
  `ps_media_os` varchar(255) NOT NULL,
  `ps_vitreous_od` varchar(255) NOT NULL,
  `ps_vitreous_os` varchar(255) NOT NULL,
  `ps_cd_od` varchar(255) NOT NULL,
  `ps_cd_os` varchar(255) NOT NULL,
  `ps_disc_od` varchar(255) NOT NULL,
  `ps_disc_os` varchar(255) NOT NULL,
  `ps_avratio_od` varchar(255) NOT NULL,
  `ps_avratio_os` varchar(255) NOT NULL,
  `ps_avcrossing_od` varchar(255) NOT NULL,
  `ps_avcrossing_os` varchar(255) NOT NULL,
  `ps_macular_od` varchar(255) NOT NULL,
  `ps_macular_os` varchar(255) NOT NULL,
  `ps_fovea_od` varchar(255) NOT NULL,
  `ps_fovea_os` varchar(255) NOT NULL,
  `ps_bg_od` varchar(255) NOT NULL,
  `ps_bg_os` varchar(255) NOT NULL,
  `ps_periphery_od` varchar(255) NOT NULL,
  `ps_periphery_os` varchar(255) NOT NULL,
  `ps_img` varchar(255) NOT NULL,
  `ps_treatment` varchar(500) NOT NULL,
  `ps_next` varchar(255) NOT NULL,
  `ps_examinedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_test`
--
ALTER TABLE `additional_test`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `binocular_vission`
--
ALTER TABLE `binocular_vission`
  ADD PRIMARY KEY (`bv_id`);

--
-- Indexes for table `chief_complaint`
--
ALTER TABLE `chief_complaint`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `fmhx`
--
ALTER TABLE `fmhx`
  ADD PRIMARY KEY (`FmHx_id`);

--
-- Indexes for table `ha_hx`
--
ALTER TABLE `ha_hx`
  ADD PRIMARY KEY (`ha_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `ohe`
--
ALTER TABLE `ohe`
  ADD PRIMARY KEY (`ohe_id`);

--
-- Indexes for table `old_rx`
--
ALTER TABLE `old_rx`
  ADD PRIMARY KEY (`old_id`);

--
-- Indexes for table `patient_response`
--
ALTER TABLE `patient_response`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmhx`
--
ALTER TABLE `pmhx`
  ADD PRIMARY KEY (`PMHx_id`);

--
-- Indexes for table `pohx`
--
ALTER TABLE `pohx`
  ADD PRIMARY KEY (`POHx_id`);

--
-- Indexes for table `preliminary_exam`
--
ALTER TABLE `preliminary_exam`
  ADD PRIMARY KEY (`pe_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `refraction`
--
ALTER TABLE `refraction`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `slit_lamp`
--
ALTER TABLE `slit_lamp`
  ADD PRIMARY KEY (`as_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_test`
--
ALTER TABLE `additional_test`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binocular_vission`
--
ALTER TABLE `binocular_vission`
  MODIFY `bv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chief_complaint`
--
ALTER TABLE `chief_complaint`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fmhx`
--
ALTER TABLE `fmhx`
  MODIFY `FmHx_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ha_hx`
--
ALTER TABLE `ha_hx`
  MODIFY `ha_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ohe`
--
ALTER TABLE `ohe`
  MODIFY `ohe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `old_rx`
--
ALTER TABLE `old_rx`
  MODIFY `old_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_response`
--
ALTER TABLE `patient_response`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pmhx`
--
ALTER TABLE `pmhx`
  MODIFY `PMHx_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pohx`
--
ALTER TABLE `pohx`
  MODIFY `POHx_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preliminary_exam`
--
ALTER TABLE `preliminary_exam`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refraction`
--
ALTER TABLE `refraction`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slit_lamp`
--
ALTER TABLE `slit_lamp`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
