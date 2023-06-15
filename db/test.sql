INSERT INTO `personal_information` (`pi_id`, `pi_firstname`, `pi_lastname`, `pi_birthdate`, `pi_gender`, `pi_address`, `pi_tel`, `pi_occupation`, `pi_created`) VALUES
(6, 'Thomas', 'Edison', '1847-02-11', 'male', 'Ohio, USA', '0947275902', 'นักธุรกิจ', '2023-06-08 14:45:15'),
(7, 'Tom', 'Bonton', '1999-09-09', 'male', '123 หมู่ 4 ต.หนองลี อ.หนองขวาง จ.หนองนา 20330', '0992749172', 'Police', '2023-06-08 14:46:15'),
(8, 'ธนพงษ์2', 'สองสีซ้าย2', '2023-06-01', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 14:52:29'),
(9, 'ธนพงษ์3', 'สองสีซ้าย3', '2000-09-01', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 15:02:52'),
(10, 'ธนพงษ์4', 'สองสีซ้าย4', '2000-09-09', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 15:32:48'),
(11, 'ธนพงษ์5', 'สองสีซ้าย5', '2000-09-09', 'male', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0947131582', 'Student', '2023-06-08 15:48:30'),
(12, 'ชนิตา', 'สองสีซ้าย', '2000-09-09', 'female', '74 ม.3 ต.กลางเวียง อ.เวียงสา', '0875446772', 'Programmer', '2023-06-08 15:49:10');

INSERT INTO `chief_complaint` (`cc_id`, `cc_text`, `cc_symptoms`, `pi_id`) VALUES
(6, 'chief_complaint Test 1', 'near', 6),
(7, 'chief_complaint Test 1', 'near', 7),
(8, 'chief_complaint Test 1', 'near', 8),
(9, 'chief_complaint Test 1', 'near', 9),
(10, 'chief_complaint Test 1', 'near', 10),
(11, 'chief_complaint Test 1', 'near', 11),
(12, 'chief_complaint Test 1', 'near', 12);


INSERT INTO `fmhx` (`FmHx_id`, `FmHx_text`, `pi_id`) VALUES
(6, 'FmHx Test 6', 6),
(7, 'FmHx Test 7', 7),
(8, 'FmHx Test 8', 8),
(9, 'FmHx Test 9', 9),
(10, 'FmHx Test 10', 10),
(11, 'FmHx Test 11', 11),
(12, 'FmHx Test 12', 12);

INSERT INTO `ha_hx` (`ha_id`, `ha_radio`, `ha_radio_detail`, `pi_id`) VALUES
(6, 'Flash', 'Flash Test6', 6),
(7, 'HA', 'HA Test7', 7),
(8, 'HA', 'HA Test8', 8),
(9, 'HA', 'HA Test9', 9),
(10, 'HA', 'HA Test10', 10),
(11, 'HA', 'HA Test11', 11),
(12, 'HA', 'HA Test12', 12);

INSERT INTO `medication` (`med_id`, `med_radio`, `med_radio_detail`, `med_KKK`, `pi_id`) VALUES
(6, 'OTC', 'OTC 1', 'KMA Test 6', 6),
(7, 'Med', 'พารา', 'KMA Test 7', 7),
(8, 'Med', 'พารา', 'KMA Test 8', 8),
(9, 'Med', 'พารา', 'KMA Test 9', 9),
(10, 'Med', 'พารา', 'KMA Test 10', 10),
(11, 'Med', 'พารา', 'KMA Test 11', 11),
(12, 'Med', 'พารา', 'KMA Test 12', 12);

INSERT INTO `ohe` (`ohe_id`, `ohe_work`, `ohe_hobby`, `ohe_checkbox1`, `ohe_checkbox_detail1`, `ohe_checkbox2`, `ohe_checkbox_detail2`, `ohe_checkbox3`, `ohe_checkbox_detail3`, `ohe_checkbox4`, `ohe_checkbox_detail4`, `pi_id`) VALUES
(6, 'นักธุรกิจ', 'อ่านหนังสือ', 'Computer (Laptop / PC)', '3ชม./วัน', 'Tablet/Smartphone', '4ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 6),
(7, 'Police', 'ออกกำลังกาย', 'Computer (Laptop / PC)', '1ชม./วัน', 'Tablet/Smartphone', '3ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 7),
(8, 'Student', 'Coding', 'Computer (Laptop / PC)', '4ชม./วัน', 'Tablet/Smartphone', '6ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 8),
(9, 'Student', 'Coding', 'Computer (Laptop / PC)', '4ชม./วัน', 'Tablet/Smartphone', '6ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 9),
(10, 'Student', 'Coding', 'Computer (Laptop / PC)', '4ชม./วัน', 'Tablet/Smartphone', '6ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 10),
(11, 'Student', 'Coding', 'Computer (Laptop / PC)', '4ชม./วัน', 'Tablet/Smartphone', '6ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 11),
(12, 'Programmer', 'Coding', 'Computer (Laptop / PC)', '4ชม./วัน', 'Tablet/Smartphone', '6ชม./วัน', 'Smoking', '-', 'Alcohol', '3ครั้ง/เดือน', 12);


INSERT INTO `patient_response` (`pr_id`, `pr_radio`, `pr_other`, `pi_id`) VALUES
(6, '2x', 'Test 6', 6),
(7, '1x', 'Test 7', 7),
(8, '2x', 'Test 8', 8),
(9, '1x', 'Test 9', 9),
(10, '2x', 'Test 10', 10),
(11, '3x', 'Test 11', 11),
(12, '4x', 'Test 12', 12);

INSERT INTO `pmhx` (`PMHx_id`, `PMHx_checked`, `PMHx_reason`, `PMHx_inspector`, `PMHx_site`, `PMHx_results`, `PMHx_pressure`, `PMHx_sugar`, `PMHx_disease`, `pi_id`) VALUES
(6, '2023-05-28', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 6),
(7, '2023-05-29', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 7),
(8, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 8),
(9, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 9),
(10, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 10),
(11, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 11),
(12, '2023-06-01', 'ตรวจสุขภาพประจำปี', 'ดร.พวงเพ็ญ อยู่เจริญ', 'รพ.มหาวิทยาลัยนเรศวร', 'ปกติ', '160', '80', 'ไม่มี', 12);

INSERT INTO `pohx` (`POHx_id`, `POHx_checked`, `POHx_reason`, `POHx_inspector`, `POHx_site`, `POHx_mydriatic`, `POHx_results`, `POHx_edited`, `POHx_radio`, `POHx_radio_detail`, `pi_id`) VALUES
(6, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 6),
(7, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 7),
(8, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 8),
(9, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 9),
(10, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 10),
(11, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 11),
(12, '2023-06-01', 'มองเห็นไม่ค่อยชัด', 'ดร.ธนพงษ์ สองสีซ้าย', 'มหาวิทยาลัยนเรศวร', 'yes', 'สายตาสั้น', 'ใส่คอนแทคเลนส์', 'Contact lens', 'CL11234', 12);

INSERT INTO `additional_test` (`at_id`, `at_text`, `pi_id`) VALUES
(6, 'Additional Test 6', 6),
(7, 'Additional Test 7', 7),
(8, 'Additional Test 8', 8),
(9, 'Additional Test 9', 9),
(10, 'Additional Test 10', 10),
(11, 'Additional Test 11', 11),
(12, 'Additional Test 12', 12);

INSERT INTO `binocular_vission` (`bv_id`, `bv_distance_h`, `bv_distance_bi`, `bv_distance_bo`, `bv_distance_vertical`, `bv_distance_supra`, `bv_distance_infra`, `bv_near_radio`, `bv_near_h`, `bv_near_bi`, `bv_near_bo`, `bv_near_vertical`, `bv_near_supra`, `bv_near_infra`, `bv_cal_radio`, `bv_cal_nra`, `bv_cal_pra`, `bv_cal_bcc`, `bv_cal_gradients`, `bv_cal_calculate_aca`, `bv_cal_calculate`, `bv_af_od`, `bv_af_os`, `bv_af_ou`, `bv_af_method`, `bv_vf_ou`, `bv_vf_method`, `bv_maddox`, `bv_assoiate`, `bv_prd`, `bv_ta`, `bv_ta_rang`, `pi_id`) VALUES
(6, 'k', 'k / k / k', 'k / s / k', 'k', 's / k', 'k / k', 'BVA', 'k', 'k / k / k', 'k / k / k', 'k', 'k / k', 'k / k', 'BCC', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k to k', 6),
(7, 'k', 'k / k / k', 'k / s / k', 'k', 's / k', 'k / k', 'BVA', 'k', 'k / k / k', 'k / k / k', 'k', 'k / k', 'k / k', 'BCC', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k to k', 7),
(8, 'k', 'k / k / k', 'k / s / k', 'k', 's / k', 'k / k', 'BVA', 'k', 'k / k / k', 'k / k / k', 'k', 'k / k', 'k / k', 'BCC', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k to k', 8),
(9, 'k', 'k / k / k', 'k / s / k', 'k', 's / k', 'k / k', 'BVA', 'k', 'k / k / k', 'k / k / k', 'k', 'k / k', 'k / k', 'BCC', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k to k', 9),
(10, 'k', 'k / k / k', 'k / s / k', 'k', 's / k', 'k / k', 'BVA', 'k', 'k / k / k', 'k / k / k', 'k', 'k / k', 'k / k', 'BCC', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k to k', 10),
(11, 'k', 'k / k / k', 'k / s / k', 'k', 's / k', 'k / k', 'BVA', 'k', 'k / k / k', 'k / k / k', 'k', 'k / k', 'k / k', 'BCC', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k to k', 11),
(12, 'k', 'k / k / k', 'k / s / k', 'k', 's / k', 'k / k', 'BVA', 'k', 'k / k / k', 'k / k / k', 'k', 'k / k', 'k / k', 'BCC', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k to k', 12);

INSERT INTO `old_rx` (`old_id`, `old_Rx`, `old_Rx1_od`, `old_Rx1_os`, `old_Rx1_add`, `old_Rx1_pd`, `old_Rx2_od`, `old_Rx2_os`, `old_Rx2_add`, `old_Rx2_pd`, `old_VAsc_distance_od`, `old_VAsc_distance_os`, `old_VAsc_distance_ou`, `old_VAsc_pinhole_od`, `old_VAsc_pinhole_os`, `old_VAsc_near_od`, `old_VAsc_near_os`, `old_VAsc_near_ou`, `old_VAcc_distance_od`, `old_VAcc_distance_os`, `old_VAcc_distance_ou`, `old_VAcc_pinhole_od`, `old_VAcc_pinhole_os`, `old_VAcc_near_od`, `old_VAcc_near_os`, `old_VAcc_near_ou`, `pi_id`) VALUES
(6, 'แว่นมองใกล้', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 6),
(7, 'แว่นมองใกล้', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 7),
(8, 'แว่นมองใกล้', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 8),
(9, 'แว่นมองใกล้', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 9),
(10, 'แว่นมองใกล้', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 10),
(11, 'แว่นมองใกล้', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 11),
(12, 'แว่นมองใกล้', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 12);

INSERT INTO `preliminary_exam` (`pe_id`, `pe_distance`, `pe_near`, `pe_npa_od`, `pe_npa_os`, `pe_aa_od`, `pe_aa_os`, `pe_npc`, `pe_motility`, `pe_con`, `pe_cover_distance`, `pe_cover_near`, `pe_cover_dots`, `pe_so_near`, `pe_so_type`, `pe_color_od`, `pe_color_os`, `pe_color_type`, `pe_grid`, `pe_grid_od`, `pe_grid_os`, `pe_grid_time`, `pi_id`) VALUES
(6, 'k', 'k', 'k', 'k', 'k', 'k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 6),
(7, 'k', 'k', 'k', 'k', 'k', 'k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 7),
(8, 'k', 'k', 'k', 'k', 'k', 'k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 8),
(9, 'k', 'k', 'k', 'k', 'k', 'k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 9),
(10, 'k', 'k', 'k', 'k', 'k', 'k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 10),
(11, 'k', 'k', 'k', 'k', 'k', 'k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 11),
(12, 'k', 'k', 'k', 'k', 'k', 'k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 12);

INSERT INTO `prescription` (`pc_id`, `pc_name`, `pc_age`, `pc_date`, `pc_sphere_od`, `pc_sphere_os`, `pc_cylinder_od`, `pc_cylinder_os`, `pc_axis_od`, `pc_axis_os`, `pc_add_od`, `pc_add_os`, `pc_prism_od`, `pc_prism_os`, `pc_va_od`, `pc_va_os`, `pc_pd_od`, `pc_pd_os`, `pc_fitting_od`, `pc_fitting_os`, `pc_checkbox1`, `pc_checkbox_detail1`, `pc_checkbox2`, `pc_checkbox_detail2`, `pc_checkbox3`, `pc_checkbox_detail3`, `pc_checkbox4`, `pc_checkbox_detail4`, `pc_checkbox5`, `pc_checkbox_detail5`, `pc_checkbox6`, `pc_checkbox_detail6`, `pc_checkbox7`, `pc_checkbox_detail7`, `pc_note`, `pi_id`) VALUES
(6, 'h', 'h', '2023-06-10', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Distance', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Progressive', '13', NULL, NULL, NULL, NULL, 'h', 6),
(7, 'h', 'h', '2023-06-10', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Distance', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Progressive', '13', NULL, NULL, NULL, NULL, 'h', 7),
(8, 'h', 'h', '2023-06-10', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Distance', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Progressive', '13', NULL, NULL, NULL, NULL, 'h', 8),
(9, 'h', 'h', '2023-06-10', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Distance', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Progressive', '13', NULL, NULL, NULL, NULL, 'h', 9),
(10, 'h', 'h', '2023-06-10', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Distance', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Progressive', '13', NULL, NULL, NULL, NULL, 'h', 10),
(11, 'h', 'h', '2023-06-10', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Distance', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Progressive', '13', NULL, NULL, NULL, NULL, 'h', 11),
(12, 'h', 'h', '2023-06-10', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'Distance', '10', NULL, NULL, NULL, NULL, NULL, NULL, 'Progressive', '13', NULL, NULL, NULL, NULL, 'h', 12);

INSERT INTO `refraction` (`ref_id`, `ref_km_od`, `ref_km_os`, `ref_sr_od`, `ref_sr_od_va`, `ref_sr_os`, `ref_sr_os_va`, `ref_sr_ou_va`, `ref_dr_od`, `ref_dr_od_va`, `ref_dr_os`, `ref_dr_os_va`, `ref_dr_ou_va`, `ref_ms_od`, `ref_ms_od_va`, `ref_ms_os`, `ref_ms_os_va`, `ref_ms_ou_va`, `ref_bs_od`, `ref_bs_os`, `ref_bs_ou_va`, `pi_id`) VALUES
(6, 'k / k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 's', 'k', 'k', 'k', 'k', 'k', 'k', 6),
(7, 'k / k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 's', 'k', 'k', 'k', 'k', 'k', 'k', 7),
(8, 'k / k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 's', 'k', 'k', 'k', 'k', 'k', 'k', 8),
(9, 'k / k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 's', 'k', 'k', 'k', 'k', 'k', 'k', 9),
(10, 'k / k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 's', 'k', 'k', 'k', 'k', 'k', 'k', 10),
(11, 'k / k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 's', 'k', 'k', 'k', 'k', 'k', 'k', 11),
(12, 'k / k', 'k / k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 's', 'k', 'k', 'k', 'k', 'k', 'k', 12);

INSERT INTO `slit_lamp` (`as_id`, `as_lid_od`, `as_lid_os`, `as_conjunctiva_od`, `as_conjunctiva_os`, `as_sclera_od`, `as_sclera_os`, `as_cornea_od`, `as_cornea_os`, `as_tear`, `as_tear_od`, `as_tear_os`, `as_iris_od`, `as_iris_os`, `as_lens_od`, `as_lens_os`, `as_anterior_od`, `as_anterior_os`, `as_p_size_l_od`, `as_p_size_l_os`, `as_p_size_d_od`, `as_p_size_d_os`, `as_p_direct_od`, `as_p_direct_os`, `as_p_consensual_od`, `as_p_consensual_os`, `as_p_accommodate_od`, `as_p_accommodate_os`, `as_p_marcus_od`, `as_p_marcus_os`, `as_img`, `as_assessment`, `ps_radio`, `ps_media_od`, `ps_media_os`, `ps_vitreous_od`, `ps_vitreous_os`, `ps_cd_od`, `ps_cd_os`, `ps_disc_od`, `ps_disc_os`, `ps_avratio_od`, `ps_avratio_os`, `ps_avcrossing_od`, `ps_avcrossing_os`, `ps_macular_od`, `ps_macular_os`, `ps_fovea_od`, `ps_fovea_os`, `ps_bg_od`, `ps_bg_os`, `ps_periphery_od`, `ps_periphery_os`, `ps_img`, `ps_treatment`, `ps_next`, `ps_examinedby`, `pi_id`) VALUES
(6, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1895083794.jpg', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '304817965.jpg', 'h', 'h', 'h', 6),
(7, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1895083794.jpg', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '304817965.jpg', 'h', 'h', 'h', 7),
(8, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1895083794.jpg', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '304817965.jpg', 'h', 'h', 'h', 8),
(9, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1895083794.jpg', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '304817965.jpg', 'h', 'h', 'h', 9),
(10, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1895083794.jpg', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '304817965.jpg', 'h', 'h', 'h', 10),
(11, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1895083794.jpg', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '304817965.jpg', 'h', 'h', 'h', 11),
(12, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '1895083794.jpg', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '304817965.jpg', 'h', 'h', 'h', 12);
