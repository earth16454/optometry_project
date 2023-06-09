<?php

require_once('process/config.php');

if (isset($_GET['pi_id'])) {
  $pi_id = $_GET['pi_id'];
  
  $stmt = $db->query("SELECT * FROM personal_information WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_pi = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM chief_complaint WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_cc = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM pohx WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_pohx = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM ha_hx WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_ha = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM pmhx WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_pmhx = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM medication WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_med = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM fmhx WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_fmhx = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM ohe WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_ohe = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM patient_response WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_pr = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM old_rx WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_old = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM preliminary_exam WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_pe = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM refraction WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_ref = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM binocular_vission WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_bv = $stmt->fetch();

  $stmt = $db->query("SELECT * FROM additional_test WHERE pi_id = $pi_id");
  $stmt->execute();
  $data_at = $stmt->fetch();

  // $stmt = $db->query("SELECT * FROM slit_lamp WHERE pi_id = $pi_id");
  // $stmt->execute();
  // $data_sl = $stmt->fetch();

  // $stmt = $db->query("SELECT * FROM prescription WHERE pi_id = $pi_id");
  // $stmt->execute();
  // $data_prescription = $stmt->fetch();


  $pi_firstname = $data_pi['pi_firstname'];
  $pi_lastname = $data_pi['pi_lastname'];
  $pi_birthdate = $data_pi['pi_birthdate'];
  $pi_gender = $data_pi['pi_gender'];
  $pi_tel = $data_pi['pi_tel'];
  $pi_occupation = $data_pi['pi_occupation'];
  $pi_address = $data_pi['pi_address'];

  $cc_text = $data_cc['cc_text'];
  $cc_symptoms = $data_cc['cc_symptoms'];

  // Table 3 : POHx
  $POHx_checked = $data_pohx['POHx_checked'];
  $POHx_reason = $data_pohx['POHx_reason'];
  $POHx_inspector = $data_pohx['POHx_inspector'];
  $POHx_site = $data_pohx['POHx_site'];
  $POHx_mydriatic = $data_pohx['POHx_mydriatic'];
  $POHx_results = $data_pohx['POHx_results'];
  $POHx_edited = $data_pohx['POHx_edited'];
  $POHx_radio = $data_pohx['POHx_radio'];
  $POHx_radio_detail = $data_pohx['POHx_radio_detail'];

  // Table 4 : HA_Hx
  $ha_radio = $data_ha['ha_radio'];
  $ha_radio_detail = $data_ha['ha_radio_detail'];

  // Table 5 : PMHx
  $PMHx_checked = $data_pmhx['PMHx_checked'];
  $PMHx_reason = $data_pmhx['PMHx_reason'];
  $PMHx_inspector = $data_pmhx['PMHx_inspector'];
  $PMHx_site = $data_pmhx['PMHx_site'];
  $PMHx_results = $data_pmhx['PMHx_results'];
  $PMHx_pressure = $data_pmhx['PMHx_pressure'];
  $PMHx_sugar = $data_pmhx['PMHx_sugar'];
  $PMHx_disease = $data_pmhx['PMHx_disease'];

  // Table 6 : medication
  $med_radio = $data_med['med_radio'];
  $med_radio_detail = $data_med['med_radio_detail'];
  $med_KKK = $data_med['med_KKK'];

  // Table 7 : FmHx
  $FmHx_text = $data_fmhx['FmHx_text'];

  // Table 8 : ohe
  $ohe_work = $data_ohe['ohe_work'];
  $ohe_hobby = $data_ohe['ohe_hobby'];
  $ohe_checkbox1 = $data_ohe['ohe_checkbox1'];
  $ohe_checkbox_detail1 = $data_ohe['ohe_checkbox_detail1'];
  $ohe_checkbox2 = $data_ohe['ohe_checkbox2'];
  $ohe_checkbox_detail2 = $data_ohe['ohe_checkbox_detail2'];
  $ohe_checkbox3 = $data_ohe['ohe_checkbox3'];
  $ohe_checkbox_detail3 = $data_ohe['ohe_checkbox_detail3'];
  $ohe_checkbox4 = $data_ohe['ohe_checkbox4'];
  $ohe_checkbox_detail4 = $data_ohe['ohe_checkbox_detail4'];


  // Table 9 : patient_response
  $pr_radio = $data_pr['pr_radio'];
  $pr_other = $data_pr['pr_other'];

  // // Page 2

  // Table 10 old_Rx
  $old_Rx = $data_old['old_Rx'];
  $old_Rx1_od = $data_old['old_Rx1_od'];
  $old_Rx1_os = $data_old['old_Rx1_os'];
  $old_Rx1_add = $data_old['old_Rx1_add'];
  $old_Rx1_pd = $data_old['old_Rx1_pd'];
  $old_Rx2_od = $data_old['old_Rx2_od'];
  $old_Rx2_os = $data_old['old_Rx2_os'];
  $old_Rx2_add = $data_old['old_Rx2_add'];
  $old_Rx2_pd = $data_old['old_Rx2_pd'];

  $old_VAsc_distance_od = $data_old['old_VAsc_distance_od'];
  $old_VAsc_distance_os = $data_old['old_VAsc_distance_os'];
  $old_VAsc_distance_ou = $data_old['old_VAsc_distance_ou'];
  $old_VAsc_near_od = $data_old['old_VAsc_near_od'];
  $old_VAsc_near_os = $data_old['old_VAsc_near_os'];
  $old_VAsc_near_ou = $data_old['old_VAsc_near_ou'];
  $old_VAsc_pinhole_od = $data_old['old_VAsc_pinhole_od'];
  $old_VAsc_pinhole_os = $data_old['old_VAsc_pinhole_os'];

  $old_VAcc_distance_od = $data_old['old_VAcc_distance_od'];
  $old_VAcc_distance_os = $data_old['old_VAcc_distance_os'];
  $old_VAcc_distance_ou = $data_old['old_VAcc_distance_ou'];
  $old_VAcc_near_od = $data_old['old_VAcc_near_od'];
  $old_VAcc_near_os = $data_old['old_VAcc_near_os'];
  $old_VAcc_near_ou = $data_old['old_VAcc_near_ou'];
  $old_VAcc_pinhole_od = $data_old['old_VAcc_pinhole_od'];
  $old_VAcc_pinhole_os = $data_old['old_VAcc_pinhole_os'];

  // Table 11 : preliminary_exam
  $pe_distance = $data_pe['pe_distance'];
  $pe_near = $data_pe['pe_near'];
  $pe_npa_od = $data_pe['pe_npa_od'];
  $pe_npa_os = $data_pe['pe_npa_os'];
  $pe_aa_od = $data_pe['pe_aa_od'];
  $pe_aa_os = $data_pe['pe_aa_os'];

  // ตรงนี้
  // $npc1 = $data_pe['npc1'];
  // $npc2 = $data_pe['npc2'];
  // $pe_npc = $npc1 . " / " . $npc2;

  $pe_motility = $data_pe['pe_motility'];
  $pe_con = $data_pe['pe_con'];
  $pe_cover_distance = $data_pe['pe_cover_distance'];
  $pe_cover_near = $data_pe['pe_cover_near'];
  $pe_cover_dots = $data_pe['pe_cover_dots'];
  $pe_so_near = $data_pe['pe_so_near'];
  $pe_so_type = $data_pe['pe_so_type'];
  $pe_color_od = $data_pe['pe_color_od'];
  $pe_color_os = $data_pe['pe_color_os'];
  $pe_color_type = $data_pe['pe_color_type'];
  $pe_grid = $data_pe['pe_grid'];
  $pe_grid_od = $data_pe['pe_grid_od'];
  $pe_grid_os = $data_pe['pe_grid_os'];
  $pe_grid_time = $data_pe['pe_grid_time'];

  // Table 12 : refraction
  // $ref_km_od = $data_ref['ref_km_od1'] . " / " . $_REQUEST['ref_km_od2'];
  // $ref_km_os = $data_ref['ref_km_os1'] . " / " . $_REQUEST['ref_km_os2'];

  $ref_sr_od = $data_ref['ref_sr_od'];
  $ref_sr_od_va = $data_ref['ref_sr_od_va'];
  $ref_sr_os = $data_ref['ref_sr_os'];
  $ref_sr_os_va = $data_ref['ref_sr_os_va'];
  $ref_sr_ou_va = $data_ref['ref_sr_ou_va'];

  $ref_dr_od = $data_ref['ref_dr_od'];
  $ref_dr_od_va = $data_ref['ref_dr_od_va'];
  $ref_dr_os = $data_ref['ref_dr_os'];
  $ref_dr_os_va = $data_ref['ref_dr_os_va'];
  $ref_dr_ou_va = $data_ref['ref_dr_ou_va'];

  $ref_ms_od = $data_ref['ref_ms_od'];
  $ref_ms_od_va = $data_ref['ref_ms_od_va'];
  $ref_ms_os = $data_ref['ref_ms_os'];
  $ref_ms_os_va = $data_ref['ref_ms_os_va'];
  $ref_ms_ou_va = $data_ref['ref_ms_ou_va'];

  $ref_bs_od = $data_ref['ref_bs_od'];
  $ref_bs_os = $data_ref['ref_bs_os'];
  $ref_bs_ou_va = $data_ref['ref_bs_ou_va'];


  // Table 13 : binocular_vission 

  $bv_distance_h = $data_bv['bv_distance_h'];
  // $bv_distance_bi = $data_bv['bv_distance_bi1'] . " / " . $_REQUEST['bv_distance_bi2'] . " / " . $_REQUEST['bv_distance_bi3'];
  // $bv_distance_bo = $data_bv['bv_distance_bo1'] . " / " . $_REQUEST['bv_distance_bo2'] . " / " . $_REQUEST['bv_distance_bo3'];
  $bv_distance_vertical = $data_bv['bv_distance_vertical'];
  // $bv_distance_supra = $data_bv['bv_distance_supra1'] . " / " . $_REQUEST['bv_distance_supra2'];
  // $bv_distance_infra = $data_bv['bv_distance_infra1'] . " / " . $_REQUEST['bv_distance_infra2'];

  $bv_near_radio = $data_bv['bv_near_radio'];
  $bv_near_h = $data_bv['bv_near_h'];
  // $bv_near_bi = $_REQUEST['bv_near_bi1'] . " / " . $_REQUEST['bv_near_bi2'] . " / " . $_REQUEST['bv_near_bi3'];
  // $bv_near_bo = $_REQUEST['bv_near_bo1'] . " / " . $_REQUEST['bv_near_bo2'] . " / " . $_REQUEST['bv_near_bo3'];

  $bv_near_vertical = $data_bv['bv_near_vertical'];

  // $bv_near_supra = $_REQUEST['bv_near_supra1'] . " / " . $_REQUEST['bv_near_supra2'];
  // $bv_near_infra = $_REQUEST['bv_near_infra1'] . " / " . $_REQUEST['bv_near_infra2'];

  $bv_cal_radio = $data_bv['bv_cal_radio'];
  $bv_cal_nra = $data_bv['bv_cal_nra'];
  $bv_cal_pra = $data_bv['bv_cal_pra'];
  $bv_cal_bcc = $data_bv['bv_cal_bcc'];
  $bv_cal_gradients = $data_bv['bv_cal_gradients'];
  $bv_cal_calculate_aca = $data_bv['bv_cal_calculate_aca'];
  $bv_cal_calculate = $data_bv['bv_cal_calculate'];

  $bv_af_od = $data_bv['bv_af_od'];
  $bv_af_os = $data_bv['bv_af_os'];
  $bv_af_ou = $data_bv['bv_af_ou'];
  $bv_af_method = $data_bv['bv_af_method'];
  $bv_vf_ou = $data_bv['bv_vf_ou'];
  $bv_vf_method = $data_bv['bv_vf_method'];
  $bv_maddox = $data_bv['bv_maddox'];
  $bv_assoiate = $data_bv['bv_assoiate'];
  $bv_prd = $data_bv['bv_prd'];
  $bv_ta = $data_bv['bv_ta'];
  // $bv_ta_rang = $data_bv['bv_ta_rang1'] . " to " . $_REQUEST['bv_ta_rang1'];

  // // Table 14 : additional_test
  $at_text = $data_at['at_text'];


  // // Table 15 : slit_lamp
  // $as_lid_od = $data_sl['as_lid_od'];
  // $as_lid_os = $data_sl['as_lid_os'];
  // $as_conjunctiva_od = $data_sl['as_conjunctiva_od'];
  // $as_conjunctiva_os = $data_sl['as_conjunctiva_os'];
  // $as_sclera_od = $data_sl['as_sclera_od'];
  // $as_sclera_os = $data_sl['as_sclera_os'];

  // $as_cornea_od = $data_sl['as_cornea_od'];
  // $as_cornea_os = $data_sl['as_cornea_os'];
  // $as_tear = $data_sl['as_tear'];
  // $as_tear_od = $data_sl['as_tear_od'];
  // $as_tear_os = $data_sl['as_tear_os'];
  // $as_iris_od = $data_sl['as_iris_od'];
  // $as_iris_os = $data_sl['as_iris_os'];
  // $as_lens_od = $data_sl['as_lens_od'];
  // $as_lens_os = $data_sl['as_lens_os'];
  // $as_anterior_od = $data_sl['as_anterior_od'];
  // $as_anterior_os = $data_sl['as_anterior_os'];
  // $as_p_size_l_od = $data_sl['as_p_size_l_od'];
  // $as_p_size_l_os = $data_sl['as_p_size_l_os'];
  // $as_p_size_d_od = $data_sl['as_p_size_d_od'];
  // $as_p_size_d_os = $data_sl['as_p_size_d_os'];
  // $as_p_direct_od = $data_sl['as_p_direct_od'];
  // $as_p_direct_os = $data_sl['as_p_direct_os'];
  // $as_p_consensual_od = $data_sl['as_p_consensual_od'];
  // $as_p_consensual_os = $data_sl['as_p_consensual_os'];
  // $as_p_accommodate_od = $data_sl['as_p_accommodate_od'];
  // $as_p_accommodate_os = $data_sl['as_p_accommodate_os'];
  // $as_p_marcus_od = $data_sl['as_p_marcus_od'];
  // $as_p_marcus_os = $data_sl['as_p_marcus_os'];
  // $as_img = $data_sl['as_img'];
  // $as_assessment = $data_sl['as_assessment'];

  // $ps_radio = $data_sl['ps_radio'];
  // $ps_media_od = $data_sl['ps_media_od'];
  // $ps_media_os = $data_sl['ps_media_os'];
  // $ps_vitreous_od = $data_sl['ps_vitreous_od'];
  // $ps_vitreous_os = $data_sl['ps_vitreous_os'];
  // $ps_cd_od = $data_sl['ps_cd_od'];
  // $ps_cd_os = $data_sl['ps_cd_os'];
  // $ps_disc_od = $data_sl['ps_disc_od'];
  // $ps_disc_os = $data_sl['ps_disc_os'];
  // $ps_avratio_od = $data_sl['ps_avratio_od'];
  // $ps_avratio_os = $data_sl['ps_avratio_os'];
  // $ps_avcrossing_od = $data_sl['ps_avcrossing_od'];
  // $ps_avcrossing_os = $data_sl['ps_avcrossing_os'];
  // $ps_macular_od = $data_sl['ps_macular_od'];
  // $ps_macular_os = $data_sl['ps_macular_os'];
  // $ps_fovea_od = $data_sl['ps_fovea_od'];
  // $ps_fovea_os = $data_sl['ps_fovea_os'];
  // $ps_bg_od = $data_sl['ps_bg_od'];
  // $ps_bg_os = $data_sl['ps_bg_os'];
  // $ps_periphery_od = $data_sl['ps_periphery_od'];
  // $ps_periphery_os = $data_sl['ps_periphery_os'];
  // $ps_img = $data_sl['ps_img'];
  // $ps_treatment = $data_sl['ps_treatment'];
  // $ps_next = $data_sl['ps_next'];
  // $ps_examinedby = $data_sl['ps_examinedby'];

  // // Table 16 : prescription
  // $pc_name = $data_prescription['pc_name'];
  // $pc_age = $data_prescription['pc_age'];
  // $pc_date = $data_prescription['pc_date'];
  // $pc_sphere_od = $data_prescription['pc_sphere_od'];
  // $pc_sphere_os = $data_prescription['pc_sphere_os'];
  // $pc_cylinder_od = $data_prescription['pc_cylinder_od'];
  // $pc_cylinder_os = $data_prescription['pc_cylinder_os'];
  // $pc_axis_od = $data_prescription['pc_axis_od'];
  // $pc_axis_os = $data_prescription['pc_axis_os'];
  // $pc_add_od = $data_prescription['pc_add_od'];
  // $pc_add_os = $data_prescription['pc_add_os'];
  // $pc_prism_od = $data_prescription['pc_prism_od'];
  // $pc_prism_os = $data_prescription['pc_prism_os'];
  // $pc_va_od = $data_prescription['pc_va_od'];
  // $pc_va_os = $data_prescription['pc_va_os'];
  // $pc_pd_od = $data_prescription['pc_pd_od'];
  // $pc_pd_os = $data_prescription['pc_pd_os'];
  // $pc_fitting_od = $data_prescription['pc_fitting_od'];
  // $pc_fitting_os = $data_prescription['pc_fitting_os'];
  // $pc_checkbox1 = $data_prescription['pc_checkbox1'];
  // $pc_checkbox2 = $data_prescription['pc_checkbox2'];
  // $pc_checkbox3 = $data_prescription['pc_checkbox3'];
  // $pc_checkbox4 = $data_prescription['pc_checkbox4'];
  // $pc_checkbox5 = $data_prescription['pc_checkbox5'];
  // $pc_checkbox6 = $data_prescription['pc_checkbox6'];
  // $pc_checkbox7 = $data_prescription['pc_checkbox7'];
  // $pc_checkbox_detail1 = $data_prescription['pc_checkbox_detail1'];
  // $pc_checkbox_detail2 = $data_prescription['pc_checkbox_detail2'];
  // $pc_checkbox_detail3 = $data_prescription['pc_checkbox_detail3'];
  // $pc_checkbox_detail4 = $data_prescription['pc_checkbox_detail4'];
  // $pc_checkbox_detail5 = $data_prescription['pc_checkbox_detail5'];
  // $pc_checkbox_detail6 = $data_prescription['pc_checkbox_detail6'];
  // $pc_checkbox_detail7 = $data_prescription['pc_checkbox_detail7'];
  // $pc_note = $data_prescription['pc_note'];

}
