<?php

require_once('config.php');

if (isset($_REQUEST['submit'])) {

  // Page 1

  // Table 1 : personal_information
  $pi_firstname = $_REQUEST['pi_fname'];
  $pi_lastname = $_REQUEST['pi_lname'];
  $pi_birthdate = $_REQUEST['pi_birth'];
  $pi_gender = $_REQUEST['pi_gender'];
  $pi_tel = $_REQUEST['pi_tel'];
  $pi_occupation = $_REQUEST['pi_occupation'];
  $pi_address = $_REQUEST['pi_address'];

  // Table 2 : chief_complaint
  $cc_text = $_REQUEST['cc_text'];
  $cc_symptoms = $_REQUEST['cc_symptoms'];

  // Table 3 : POHx
  $POHx_checked = $_REQUEST['POHx_checked'];
  $POHx_reason = $_REQUEST['POHx_reason'];
  $POHx_inspector = $_REQUEST['POHx_inspector'];
  $POHx_site = $_REQUEST['POHx_site'];
  $POHx_mydriatic = $_REQUEST['POHx_mydriatic'];
  $POHx_results = $_REQUEST['POHx_results'];
  $POHx_edited = $_REQUEST['POHx_edited'];
  $POHx_radio = $_REQUEST['POHx_radio'];
  $POHx_radio_detail = $_REQUEST['POHx_radio_detail'];

  // Table 4 : HA_Hx
  $ha_radio = $_REQUEST['ha_radio'];
  $ha_radio_detail = $_REQUEST['ha_radio_detail'];

  // Table 5 : PMHx
  $PMHx_checked = $_REQUEST['PMHx_checked'];
  $PMHx_reason = $_REQUEST['PMHx_reason'];
  $PMHx_inspector = $_REQUEST['PMHx_inspector'];
  $PMHx_site = $_REQUEST['PMHx_site'];
  $PMHx_results = $_REQUEST['PMHx_results'];
  $PMHx_pressure = $_REQUEST['PMHx_pressure'];
  $PMHx_sugar = $_REQUEST['PMHx_sugar'];
  $PMHx_disease = $_REQUEST['PMHx_disease'];

  // Table 6 : medication
  $med_radio = $_REQUEST['med_radio'];
  $med_radio_detail = $_REQUEST['med_radio_detail'];
  $med_KKK = $_REQUEST['med_KKK'];

  // Table 7 : FmHx
  $FmHx_text = $_REQUEST['FmHx_text'];

  // Table 8 : ohe
  $ohe_work = $_REQUEST['ohe_work'];
  $ohe_hobby = $_REQUEST['ohe_hobby'];
  $ohe_checkbox1 = Null;
  $ohe_checkbox_detail1 = Null;
  $ohe_checkbox2 = Null;
  $ohe_checkbox_detail2 = Null;
  $ohe_checkbox3 = Null;
  $ohe_checkbox_detail3 = Null;
  $ohe_checkbox4 = Null;
  $ohe_checkbox_detail4 = Null;
  if (isset($_REQUEST['ohe_checkbox1'])) {
    $ohe_checkbox1 = $_REQUEST['ohe_checkbox1'];
    $ohe_checkbox_detail1 = $_REQUEST['ohe_checkbox_detail1'];
  }
  if (isset($_REQUEST['ohe_checkbox2'])) {
    $ohe_checkbox2 = $_REQUEST['ohe_checkbox2'];
    $ohe_checkbox_detail2 = $_REQUEST['ohe_checkbox_detail2'];
  }
  if (isset($_REQUEST['ohe_checkbox3'])) {
    $ohe_checkbox3 = $_REQUEST['ohe_checkbox3'];
    $ohe_checkbox_detail3 = $_REQUEST['ohe_checkbox_detail3'];
  }
  if (isset($_REQUEST['ohe_checkbox4'])) {
    $ohe_checkbox4 = $_REQUEST['ohe_checkbox4'];
    $ohe_checkbox_detail4 = $_REQUEST['ohe_checkbox_detail4'];
  }

  // Table 9 : patient_response
  $pr_radio = $_REQUEST['pr_radio'];
  $pr_other = $_REQUEST['pr_other'];


  // Page 2

  // Table 10 old_Rx
  $old_Rx = $_REQUEST['old_Rx'];
  $old_Rx1_od = $_REQUEST['old_Rx1_od'];
  $old_Rx1_os = $_REQUEST['old_Rx1_os'];
  $old_Rx1_add = $_REQUEST['old_Rx1_add'];
  $old_Rx1_pd = $_REQUEST['old_Rx1_pd'];
  $old_Rx2_od = $_REQUEST['old_Rx2_od'];
  $old_Rx2_os = $_REQUEST['old_Rx2_os'];
  $old_Rx2_add = $_REQUEST['old_Rx2_add'];
  $old_Rx2_pd = $_REQUEST['old_Rx2_pd'];

  $old_VAsc_distance_od = $_REQUEST['vasc_distance_od'];
  $old_VAsc_distance_os = $_REQUEST['vasc_distance_os'];
  $old_VAsc_distance_ou = $_REQUEST['vasc_distance_ou'];
  $old_VAsc_near_od = $_REQUEST['vasc_near_od'];
  $old_VAsc_near_os = $_REQUEST['vasc_near_os'];
  $old_VAsc_near_ou = $_REQUEST['vasc_near_ou'];
  $old_VAsc_pinhole_od = $_REQUEST['vasc_pinhole_od'];
  $old_VAsc_pinhole_os = $_REQUEST['vasc_pinhole_os'];

  $old_VAcc_distance_od = $_REQUEST['vacc_distance_od'];
  $old_VAcc_distance_os = $_REQUEST['vacc_distance_os'];
  $old_VAcc_distance_ou = $_REQUEST['vacc_distance_ou'];
  $old_VAcc_near_od = $_REQUEST['vacc_near_od'];
  $old_VAcc_near_os = $_REQUEST['vacc_near_os'];
  $old_VAcc_near_ou = $_REQUEST['vacc_near_ou'];
  $old_VAcc_pinhole_od = $_REQUEST['vacc_pinhole_od'];
  $old_VAcc_pinhole_os = $_REQUEST['vacc_pinhole_os'];

  // Table 11 : preliminary_exam
  $pe_distance = $_REQUEST['pd_distance'];
  $pe_near = $_REQUEST['pd_near'];
  $pe_npa_od = $_REQUEST['npa_od'];
  $pe_npa_os = $_REQUEST['npa_os'];
  $pe_aa_od = $_REQUEST['aa_od'];
  $pe_aa_os = $_REQUEST['aa_os'];

  $npc1 = $_REQUEST['npc1'];
  $npc2 = $_REQUEST['npc2'];
  $pe_npc = $npc1 . " / " . $npc2;
  $pe_motility = $_REQUEST['motility'];
  $pe_con = $_REQUEST['confrontation'];
  $pe_cover_distance = $_REQUEST['pe_cover_distance'];
  $pe_cover_near = $_REQUEST['pe_cover_near'];
  $pe_cover_dots = $_REQUEST['pe_cover_dots'];
  $pe_so_near = $_REQUEST['pe_so_near'];
  $pe_so_type = $_REQUEST['pe_so_type'];
  $pe_color_od = $_REQUEST['pe_color_od'];
  $pe_color_os = $_REQUEST['pe_color_os'];
  $pe_color_type = $_REQUEST['pe_color_type'];
  $pe_grid = $_REQUEST['pe_grid'];
  $pe_grid_od = $_REQUEST['pe_grid_od'];
  $pe_grid_os = $_REQUEST['pe_grid_os'];
  $pe_grid_time = $_REQUEST['pe_grid_time'];

  // Table 12 : refraction
  $ref_km_od = $_REQUEST['ref_km_od1'] . " / " . $_REQUEST['ref_km_od2'];
  $ref_km_os = $_REQUEST['ref_km_os1'] . " / " . $_REQUEST['ref_km_os2'];
  $ref_sr_od = $_REQUEST['ref_sr_od'];
  $ref_sr_od_va = $_REQUEST['ref_sr_od_va'];
  $ref_sr_os = $_REQUEST['ref_sr_os'];
  $ref_sr_os_va = $_REQUEST['ref_sr_os_va'];
  $ref_sr_ou_va = $_REQUEST['ref_sr_ou_va'];

  $ref_dr_od = $_REQUEST['ref_dr_od'];
  $ref_dr_od_va = $_REQUEST['ref_dr_od_va'];
  $ref_dr_os = $_REQUEST['ref_dr_os'];
  $ref_dr_os_va = $_REQUEST['ref_dr_os_va'];
  $ref_dr_ou_va = $_REQUEST['ref_dr_ou_va'];

  $ref_ms_od = $_REQUEST['ref_ms_od'];
  $ref_ms_od_va = $_REQUEST['ref_ms_od_va'];
  $ref_ms_os = $_REQUEST['ref_ms_os'];
  $ref_ms_os_va = $_REQUEST['ref_ms_os_va'];
  $ref_ms_ou_va = $_REQUEST['ref_ms_ou_va'];

  $ref_bs_od = $_REQUEST['ref_bs_od'];
  $ref_bs_os = $_REQUEST['ref_bs_os'];
  $ref_bs_ou_va = $_REQUEST['ref_bs_ou_va'];

  // Table 13 : binocular_vission 

  $bv_distance_h = $_REQUEST['bv_distance_h'];
  $bv_distance_bi = $_REQUEST['bv_distance_bi1'] . " / " . $_REQUEST['bv_distance_bi2'] . " / " . $_REQUEST['bv_distance_bi3'];
  $bv_distance_bo = $_REQUEST['bv_distance_bo1'] . " / " . $_REQUEST['bv_distance_bo2'] . " / " . $_REQUEST['bv_distance_bo3'];
  $bv_distance_vertical = $_REQUEST['bv_distance_vertical'];
  $bv_distance_supra = $_REQUEST['bv_distance_supra1'] . " / " . $_REQUEST['bv_distance_supra2'];
  $bv_distance_infra = $_REQUEST['bv_distance_infra1'] . " / " . $_REQUEST['bv_distance_infra2'];

  $bv_near_radio = $_REQUEST['bv_near_radio'];
  $bv_near_h = $_REQUEST['bv_near_h'];
  $bv_near_bi = $_REQUEST['bv_near_bi1'] . " / " . $_REQUEST['bv_near_bi2'] . " / " . $_REQUEST['bv_near_bi3'];
  $bv_near_bo = $_REQUEST['bv_near_bo1'] . " / " . $_REQUEST['bv_near_bo2'] . " / " . $_REQUEST['bv_near_bo3'];
  $bv_near_vertical = $_REQUEST['bv_near_vertical'];
  $bv_near_supra = $_REQUEST['bv_near_supra1'] . " / " . $_REQUEST['bv_near_supra2'];
  $bv_near_infra = $_REQUEST['bv_near_infra1'] . " / " . $_REQUEST['bv_near_infra2'];

  $bv_cal_radio = $_REQUEST['bv_cal_radio'];
  $bv_cal_nra = $_REQUEST['bv_cal_nra'];
  $bv_cal_pra = $_REQUEST['bv_cal_pra'];
  $bv_cal_bcc = $_REQUEST['bv_cal_bcc'];
  $bv_cal_gradients = $_REQUEST['bv_cal_gradients'];
  $bv_cal_calculate_aca = $_REQUEST['bv_cal_calculate_aca'];
  $bv_cal_calculate = $_REQUEST['bv_cal_calculate'];

  $bv_af_od = $_REQUEST['bv_af_od'];
  $bv_af_os = $_REQUEST['bv_af_os'];
  $bv_af_ou = $_REQUEST['bv_af_ou'];
  $bv_af_method = $_REQUEST['bv_af_method'];
  $bv_vf_ou = $_REQUEST['bv_vf_ou'];
  $bv_vf_method = $_REQUEST['bv_vf_method'];
  $bv_maddox = $_REQUEST['bv_maddox'];
  $bv_assoiate = $_REQUEST['bv_assoiate'];
  $bv_prd = $_REQUEST['bv_prd'];
  $bv_ta = $_REQUEST['bv_ta'];
  $bv_ta_rang = $_REQUEST['bv_ta_rang1'] . " to " . $_REQUEST['bv_ta_rang1'];

  // Table 14 : additional_test
  $at_text = $_REQUEST['at_text'];

  // Table 15 : slit_lamp
  $as_lid_od = $_REQUEST['as_lid_od'];
  $as_lid_os = $_REQUEST['as_lid_os'];
  $as_conjunctiva_od = $_REQUEST['as_conjunctiva_od'];
  $as_conjunctiva_os = $_REQUEST['as_conjunctiva_os'];
  $as_sclera_od = $_REQUEST['as_sclera_od'];
  $as_sclera_os = $_REQUEST['as_sclera_os'];

  $as_cornea_od = $_REQUEST['as_cornea_od'];
  $as_cornea_os = $_REQUEST['as_cornea_os'];
  $as_tear = $_REQUEST['as_tear'];
  $as_tear_od = $_REQUEST['as_tear_od'];
  $as_tear_os = $_REQUEST['as_tear_os'];
  $as_iris_od = $_REQUEST['as_iris_od'];
  $as_iris_os = $_REQUEST['as_iris_os'];
  $as_lens_od = $_REQUEST['as_lens_od'];
  $as_lens_os = $_REQUEST['as_lens_os'];
  $as_anterior_od = $_REQUEST['as_anterior_od'];
  $as_anterior_os = $_REQUEST['as_anterior_os'];
  $as_p_size_l_od = $_REQUEST['as_p_size_l_od'];
  $as_p_size_l_os = $_REQUEST['as_p_size_l_os'];
  $as_p_size_d_od = $_REQUEST['as_p_size_d_od'];
  $as_p_size_d_os = $_REQUEST['as_p_size_d_os'];
  $as_p_direct_od = $_REQUEST['as_p_direct_od'];
  $as_p_direct_os = $_REQUEST['as_p_direct_os'];
  $as_p_consensual_od = $_REQUEST['as_p_consensual_od'];
  $as_p_consensual_os = $_REQUEST['as_p_consensual_os'];
  $as_p_accommodate_od = $_REQUEST['as_p_accommodate_od'];
  $as_p_accommodate_os = $_REQUEST['as_p_accommodate_os'];
  $as_p_marcus_od = $_REQUEST['as_p_marcus_od'];
  $as_p_marcus_os = $_REQUEST['as_p_marcus_os'];
  $as_img = $_FILES['as_img'];
  $as_assessment = $_REQUEST['as_assessment'];

  $ps_radio = $_REQUEST['ps_radio'];
  $ps_media_od = $_REQUEST['ps_media_od'];
  $ps_media_os = $_REQUEST['ps_media_os'];
  $ps_vitreous_od = $_REQUEST['ps_vitreous_od'];
  $ps_vitreous_os = $_REQUEST['ps_vitreous_os'];
  $ps_cd_od = $_REQUEST['ps_cd_od'];
  $ps_cd_os = $_REQUEST['ps_cd_os'];
  $ps_disc_od = $_REQUEST['ps_disc_od'];
  $ps_disc_os = $_REQUEST['ps_disc_os'];
  $ps_avratio_od = $_REQUEST['ps_avratio_od'];
  $ps_avratio_os = $_REQUEST['ps_avratio_os'];
  $ps_avcrossing_od = $_REQUEST['ps_avcrossing_od'];
  $ps_avcrossing_os = $_REQUEST['ps_avcrossing_os'];
  $ps_macular_od = $_REQUEST['ps_macular_od'];
  $ps_macular_os = $_REQUEST['ps_macular_os'];
  $ps_fovea_od = $_REQUEST['ps_fovea_od'];
  $ps_fovea_os = $_REQUEST['ps_fovea_os'];
  $ps_bg_od = $_REQUEST['ps_bg_od'];
  $ps_bg_os = $_REQUEST['ps_bg_os'];
  $ps_periphery_od = $_REQUEST['ps_periphery_od'];
  $ps_periphery_os = $_REQUEST['ps_periphery_os'];
  $ps_img = $_FILES['ps_img'];
  $ps_treatment = $_REQUEST['ps_treatment'];
  $ps_next = $_REQUEST['ps_next'];
  $ps_examinedby = $_REQUEST['ps_examinedby'];

  // Table 16 : prescription
  $pc_name = $_REQUEST['pc_name'];
  $pc_age = $_REQUEST['pc_age'];
  $pc_date = $_REQUEST['pc_date'];
  $pc_sphere_od = $_REQUEST['pc_sphere_od'];
  $pc_sphere_os = $_REQUEST['pc_sphere_os'];
  $pc_cylinder_od = $_REQUEST['pc_cylinder_od'];
  $pc_cylinder_os = $_REQUEST['pc_cylinder_os'];
  $pc_axis_od = $_REQUEST['pc_axis_od'];
  $pc_axis_os = $_REQUEST['pc_axis_os'];
  $pc_add_od = $_REQUEST['pc_add_od'];
  $pc_add_os = $_REQUEST['pc_add_os'];
  $pc_prism_od = $_REQUEST['pc_prism_od'];
  $pc_prism_os = $_REQUEST['pc_prism_os'];
  $pc_va_od = $_REQUEST['pc_va_od'];
  $pc_va_os = $_REQUEST['pc_va_os'];
  $pc_pd_od = $_REQUEST['pc_pd_od'];
  $pc_pd_os = $_REQUEST['pc_pd_os'];
  $pc_fitting_od = $_REQUEST['pc_fitting_od'];
  $pc_fitting_os = $_REQUEST['pc_fitting_os'];
  $pc_checkbox1 = Null;
  $pc_checkbox2 = Null;
  $pc_checkbox3 = Null;
  $pc_checkbox4 = Null;
  $pc_checkbox5 = Null;
  $pc_checkbox6 = Null;
  $pc_checkbox7 = Null;
  $pc_checkbox_detail1 = Null;
  $pc_checkbox_detail2 = Null;
  $pc_checkbox_detail3 = Null;
  $pc_checkbox_detail4 = Null;
  $pc_checkbox_detail5 = Null;
  $pc_checkbox_detail6 = Null;
  $pc_checkbox_detail7 = Null;
  if (isset($_REQUEST['pc_checkbox1'])) {
    $pc_checkbox1 = $_REQUEST['pc_checkbox1'];
    $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail1'];
  }
  if (isset($_REQUEST['pc_checkbox2'])) {
    $pc_checkbox1 = $_REQUEST['pc_checkbox2'];
    $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail2'];
  }
  if (isset($_REQUEST['pc_checkbox3'])) {
    $pc_checkbox1 = $_REQUEST['pc_checkbox3'];
    $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail3'];
  }
  if (isset($_REQUEST['pc_checkbox4'])) {
    $pc_checkbox1 = $_REQUEST['pc_checkbox4'];
    $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail4'];
  }
  if (isset($_REQUEST['pc_checkbox5'])) {
    $pc_checkbox1 = $_REQUEST['pc_checkbox5'];
    $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail5'];
  }
  if (isset($_REQUEST['pc_checkbox6'])) {
    $pc_checkbox1 = $_REQUEST['pc_checkbox6'];
    $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail6'];
  }
  if (isset($_REQUEST['pc_checkbox7'])) {
    $pc_checkbox1 = $_REQUEST['pc_checkbox7'];
    $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail7'];
  }
  $pc_note = $_REQUEST['pc_note'];


  try {
    $sql1 = "INSERT INTO personal_information(
      pi_firstname, pi_lastname, pi_birthdate, pi_gender, pi_address, pi_tel, pi_occupation) 
      VALUES(
        :pi_firstname, :pi_lastname, :pi_birthdate, :pi_gender, :pi_address, :pi_tel, :pi_occupation
      )
    ";
    $insert_stmt1 = $db->prepare($sql1);
    $insert_stmt1->bindParam(":pi_firstname", $pi_firstname);
    $insert_stmt1->bindParam(":pi_lastname", $pi_lastname);
    $insert_stmt1->bindParam(":pi_birthdate", $pi_birthdate);
    $insert_stmt1->bindParam(":pi_gender", $pi_gender);
    $insert_stmt1->bindParam(":pi_address", $pi_address);
    $insert_stmt1->bindParam(":pi_tel", $pi_tel);
    $insert_stmt1->bindParam(":pi_occupation", $pi_occupation);
    $result1 = $insert_stmt1->execute();

    $pi_id = $db->lastInsertId();


    $sql2 = "INSERT INTO chief_complaint(cc_text, cc_symptoms, pi_id) VALUES(:cc_text, :cc_symptoms, :pi_id)";
    $insert_stmt2 = $db->prepare($sql2);
    $insert_stmt2->bindParam(":cc_text", $cc_text);
    $insert_stmt2->bindParam(":cc_symptoms", $cc_symptoms);
    $insert_stmt2->bindParam(":pi_id", $pi_id);
    $result2 = $insert_stmt2->execute();


    $sql3 = "INSERT INTO pohx(
      POHx_checked, POHx_reason, POHx_inspector, POHx_site, POHx_mydriatic, 
      POHx_results, POHx_edited, POHx_radio, POHx_radio_detail, pi_id) 
      VALUES(
        :POHx_checked, :POHx_reason, :POHx_inspector, :POHx_site, :POHx_mydriatic, 
        :POHx_results, :POHx_edited, :POHx_radio, :POHx_radio_detail, :pi_id
      )
    ";
    $insert_stmt3 = $db->prepare($sql3);
    $insert_stmt3->bindParam(":POHx_checked", $POHx_checked);
    $insert_stmt3->bindParam(":POHx_reason", $POHx_reason);
    $insert_stmt3->bindParam(":POHx_inspector", $POHx_inspector);
    $insert_stmt3->bindParam(":POHx_site", $POHx_site);
    $insert_stmt3->bindParam(":POHx_mydriatic", $POHx_mydriatic);
    $insert_stmt3->bindParam(":POHx_results", $POHx_results);
    $insert_stmt3->bindParam(":POHx_edited", $POHx_edited);
    $insert_stmt3->bindParam(":POHx_radio", $POHx_radio);
    $insert_stmt3->bindParam(":POHx_radio_detail", $POHx_radio_detail);
    $insert_stmt3->bindParam(":pi_id", $pi_id);
    $result3 = $insert_stmt3->execute();


    $sql4 = "INSERT INTO ha_hx(ha_radio, ha_radio_detail, pi_id) VALUES(:ha_radio, :ha_radio_detail, :pi_id)";
    $insert_stmt4 = $db->prepare($sql4);
    $insert_stmt4->bindParam(":ha_radio", $ha_radio);
    $insert_stmt4->bindParam(":ha_radio_detail", $ha_radio_detail);
    $insert_stmt4->bindParam(":pi_id", $pi_id);
    $result4 = $insert_stmt4->execute();


    $sql5 = "INSERT INTO pmhx(
      PMHx_checked, PMHx_reason, PMHx_inspector, PMHx_site, 
      PMHx_results, PMHx_pressure, PMHx_sugar, PMHx_disease, pi_id
      ) 
      VALUES(
        :PMHx_checked, :PMHx_reason, :PMHx_inspector, :PMHx_site, 
        :PMHx_results, :PMHx_pressure, :PMHx_sugar, :PMHx_disease, :pi_id
      )
    ";
    $insert_stmt5 = $db->prepare($sql5);
    $insert_stmt5->bindParam(":PMHx_checked", $PMHx_checked);
    $insert_stmt5->bindParam(":PMHx_reason", $PMHx_reason);
    $insert_stmt5->bindParam(":PMHx_inspector", $PMHx_inspector);
    $insert_stmt5->bindParam(":PMHx_site", $PMHx_site);
    $insert_stmt5->bindParam(":PMHx_results", $PMHx_results);
    $insert_stmt5->bindParam(":PMHx_pressure", $PMHx_pressure);
    $insert_stmt5->bindParam(":PMHx_sugar", $PMHx_sugar);
    $insert_stmt5->bindParam(":PMHx_disease", $PMHx_disease);
    $insert_stmt5->bindParam(":pi_id", $pi_id);
    $result5 = $insert_stmt5->execute();


    $sql6 = "INSERT INTO medication(
      med_radio, med_radio_detail, med_KKK, pi_id) 
      VALUES(
      :med_radio, :med_radio_detail, :med_KKK, :pi_id)
    ";
    $insert_stmt6 = $db->prepare($sql6);
    $insert_stmt6->bindParam(":med_radio", $med_radio);
    $insert_stmt6->bindParam(":med_radio_detail", $med_radio_detail);
    $insert_stmt6->bindParam(":med_KKK", $med_KKK);
    $insert_stmt6->bindParam(":pi_id", $pi_id);
    $result6 = $insert_stmt6->execute();


    $sql7 = "INSERT INTO fmhx(FmHx_text, pi_id) VALUES(:FmHx_text, :pi_id)";
    $insert_stmt7 = $db->prepare($sql7);
    $insert_stmt7->bindParam(":FmHx_text", $FmHx_text);
    $insert_stmt7->bindParam(":pi_id", $pi_id);
    $result7 = $insert_stmt7->execute();


    $sql8 = "INSERT INTO ohe(
      ohe_work, ohe_hobby, ohe_checkbox1, ohe_checkbox_detail1, 
      ohe_checkbox2, ohe_checkbox_detail2, ohe_checkbox3, ohe_checkbox_detail3, 
      ohe_checkbox4, ohe_checkbox_detail4, pi_id
    ) 
    VALUES(
      :ohe_work, :ohe_hobby, :ohe_checkbox1, :ohe_checkbox_detail1, 
      :ohe_checkbox2, :ohe_checkbox_detail2, :ohe_checkbox3, :ohe_checkbox_detail3, 
      :ohe_checkbox4, :ohe_checkbox_detail4, :pi_id
      )
    ";
    $insert_stmt8 = $db->prepare($sql8);
    $insert_stmt8->bindParam(":ohe_work", $ohe_work);
    $insert_stmt8->bindParam(":ohe_hobby", $ohe_hobby);
    $insert_stmt8->bindParam(":ohe_checkbox1", $ohe_checkbox1);
    $insert_stmt8->bindParam(":ohe_checkbox_detail1", $ohe_checkbox_detail1);
    $insert_stmt8->bindParam(":ohe_checkbox2", $ohe_checkbox2);
    $insert_stmt8->bindParam(":ohe_checkbox_detail2", $ohe_checkbox_detail2);
    $insert_stmt8->bindParam(":ohe_checkbox3", $ohe_checkbox3);
    $insert_stmt8->bindParam(":ohe_checkbox_detail3", $ohe_checkbox_detail3);
    $insert_stmt8->bindParam(":ohe_checkbox4", $ohe_checkbox4);
    $insert_stmt8->bindParam(":ohe_checkbox_detail4", $ohe_checkbox_detail4);
    $insert_stmt8->bindParam(":pi_id", $pi_id);
    $result8 = $insert_stmt8->execute();


    $sql9 = "INSERT INTO patient_response(pr_radio, pr_other, pi_id) VALUES(:pr_radio, :pr_other, :pi_id)";
    $insert_stmt9 = $db->prepare($sql9);
    $insert_stmt9->bindParam(":pr_radio", $pr_radio);
    $insert_stmt9->bindParam(":pr_other", $pr_other);
    $insert_stmt9->bindParam(":pi_id", $pi_id);
    $result9 = $insert_stmt9->execute();

    $sql10 = "INSERT INTO old_Rx(
      old_Rx, old_Rx1_od, old_Rx1_os, old_Rx1_add, old_Rx1_pd, old_Rx2_od, 
      old_Rx2_os, old_Rx2_add, old_Rx2_pd, old_VAsc_distance_od, old_VAsc_distance_os, 
      old_VAsc_distance_ou, old_VAsc_pinhole_od, old_VAsc_pinhole_os, old_VAsc_near_od, 
      old_VAsc_near_os, old_VAsc_near_ou, old_VAcc_distance_od, old_VAcc_distance_os, 
      old_VAcc_distance_ou, old_VAcc_pinhole_od, old_VAcc_pinhole_os, old_VAcc_near_od, 
      old_VAcc_near_os, old_VAcc_near_ou, pi_id
      ) 
      VALUES(
      :old_Rx, :old_Rx1_od, :old_Rx1_os, :old_Rx1_add, :old_Rx1_pd, :old_Rx2_od, 
      :old_Rx2_os, :old_Rx2_add, :old_Rx2_pd, :old_VAsc_distance_od, :old_VAsc_distance_os, 
      :old_VAsc_distance_ou, :old_VAsc_pinhole_od, :old_VAsc_pinhole_os, :old_VAsc_near_od, 
      :old_VAsc_near_os, :old_VAsc_near_ou, :old_VAcc_distance_od, :old_VAcc_distance_os, 
      :old_VAcc_distance_ou, :old_VAcc_pinhole_od, :old_VAcc_pinhole_os, :old_VAcc_near_od, 
      :old_VAcc_near_os, :old_VAcc_near_ou, :pi_id
      )
    ";
    $insert_stmt10 = $db->prepare($sql10);
    $insert_stmt10->bindParam(":old_Rx", $old_Rx);
    $insert_stmt10->bindParam(":old_Rx1_od", $old_Rx1_od);
    $insert_stmt10->bindParam(":old_Rx1_os", $old_Rx1_os);
    $insert_stmt10->bindParam(":old_Rx1_add", $old_Rx1_add);
    $insert_stmt10->bindParam(":old_Rx1_pd", $old_Rx1_pd);
    $insert_stmt10->bindParam(":old_Rx2_od", $old_Rx2_od);
    $insert_stmt10->bindParam(":old_Rx2_os", $old_Rx2_os);
    $insert_stmt10->bindParam(":old_Rx2_add", $old_Rx2_add);
    $insert_stmt10->bindParam(":old_Rx2_pd", $old_Rx2_pd);
    $insert_stmt10->bindParam(":old_VAsc_distance_od", $old_VAsc_distance_od);
    $insert_stmt10->bindParam(":old_VAsc_distance_os", $old_VAsc_distance_os);
    $insert_stmt10->bindParam(":old_VAsc_distance_ou", $old_VAsc_distance_ou);
    $insert_stmt10->bindParam(":old_VAsc_pinhole_od", $old_VAsc_pinhole_od);
    $insert_stmt10->bindParam(":old_VAsc_pinhole_os", $old_VAsc_pinhole_os);
    $insert_stmt10->bindParam(":old_VAsc_near_od", $old_VAsc_near_od);
    $insert_stmt10->bindParam(":old_VAsc_near_os", $old_VAsc_near_os);
    $insert_stmt10->bindParam(":old_VAsc_near_ou", $old_VAsc_near_ou);
    $insert_stmt10->bindParam(":old_VAcc_distance_od", $old_VAcc_distance_od);
    $insert_stmt10->bindParam(":old_VAcc_distance_os", $old_VAcc_distance_os);
    $insert_stmt10->bindParam(":old_VAcc_distance_ou", $old_VAcc_distance_ou);
    $insert_stmt10->bindParam(":old_VAcc_pinhole_od", $old_VAcc_pinhole_od);
    $insert_stmt10->bindParam(":old_VAcc_pinhole_os", $old_VAcc_pinhole_os);
    $insert_stmt10->bindParam(":old_VAcc_near_od", $old_VAcc_near_od);
    $insert_stmt10->bindParam(":old_VAcc_near_os", $old_VAcc_near_os);
    $insert_stmt10->bindParam(":old_VAcc_near_ou", $old_VAcc_near_ou);
    $insert_stmt10->bindParam(":pi_id", $pi_id);
    $result10 = $insert_stmt10->execute();


    $sql11 = "INSERT INTO preliminary_exam(
      pe_distance, pe_near, pe_npa_od, pe_npa_os, pe_aa_od, pe_aa_os, pe_npc, 
      pe_motility, pe_con, pe_cover_distance, pe_cover_near, pe_cover_dots, 
      pe_so_near, pe_so_type, pe_color_od, pe_color_os, pe_color_type, pe_grid, 
      pe_grid_od, pe_grid_os, pe_grid_time, pi_id
      ) 
      VALUES(
      :pe_distance, :pe_near, :pe_npa_od, :pe_npa_os, :pe_aa_od, :pe_aa_os, :pe_npc, 
      :pe_motility, :pe_con, :pe_cover_distance, :pe_cover_near, :pe_cover_dots, 
      :pe_so_near, :pe_so_type, :pe_color_od, :pe_color_os, :pe_color_type, 
      :pe_grid, :pe_grid_od, :pe_grid_os, :pe_grid_time, :pi_id
      )
    ";
    $insert_stmt11 = $db->prepare($sql11);
    $insert_stmt11->bindParam(":pe_distance", $pe_distance);
    $insert_stmt11->bindParam(":pe_near", $pe_near);
    $insert_stmt11->bindParam(":pe_npa_od", $pe_npa_od);
    $insert_stmt11->bindParam(":pe_npa_os", $pe_npa_os);
    $insert_stmt11->bindParam(":pe_aa_od", $pe_aa_od);
    $insert_stmt11->bindParam(":pe_aa_os", $pe_aa_os);
    $insert_stmt11->bindParam(":pe_npc", $pe_npc);
    $insert_stmt11->bindParam(":pe_motility", $pe_motility);
    $insert_stmt11->bindParam(":pe_con", $pe_con);
    $insert_stmt11->bindParam(":pe_cover_distance", $pe_cover_distance);
    $insert_stmt11->bindParam(":pe_cover_near", $pe_cover_near);
    $insert_stmt11->bindParam(":pe_cover_dots", $pe_cover_dots);
    $insert_stmt11->bindParam(":pe_so_near", $pe_so_near);
    $insert_stmt11->bindParam(":pe_so_type", $pe_so_type);
    $insert_stmt11->bindParam(":pe_color_od", $pe_color_od);
    $insert_stmt11->bindParam(":pe_color_os", $pe_color_os);
    $insert_stmt11->bindParam(":pe_color_type", $pe_color_type);
    $insert_stmt11->bindParam(":pe_grid", $pe_grid);
    $insert_stmt11->bindParam(":pe_grid_od", $pe_grid_od);
    $insert_stmt11->bindParam(":pe_grid_os", $pe_grid_os);
    $insert_stmt11->bindParam(":pe_grid_time", $pe_grid_time);
    $insert_stmt11->bindParam(":pi_id", $pi_id);
    $result11 = $insert_stmt11->execute();


    $sql12 = "INSERT INTO refraction(
      ref_km_od, ref_km_os, ref_sr_od, ref_sr_od_va, ref_sr_os, ref_sr_os_va, ref_sr_ou_va, 
      ref_dr_od, ref_dr_od_va, ref_dr_os, ref_dr_os_va, ref_dr_ou_va, ref_ms_od, ref_ms_od_va, 
      ref_ms_os, ref_ms_os_va, ref_ms_ou_va, ref_bs_od, ref_bs_os, ref_bs_ou_va, pi_id
    ) 
    VALUES(
      :ref_km_od, :ref_km_os, :ref_sr_od, :ref_sr_od_va, :ref_sr_os, :ref_sr_os_va, :ref_sr_ou_va, 
      :ref_dr_od, :ref_dr_od_va, :ref_dr_os, :ref_dr_os_va, :ref_dr_ou_va, :ref_ms_od, :ref_ms_od_va, 
      :ref_ms_os, :ref_ms_os_va, :ref_ms_ou_va, :ref_bs_od, :ref_bs_os, :ref_bs_ou_va, :pi_id
    )";
    $insert_stmt12 = $db->prepare($sql12);
    $insert_stmt12->bindParam(":ref_km_od", $ref_km_od);
    $insert_stmt12->bindParam(":ref_km_os", $ref_km_os);
    $insert_stmt12->bindParam(":ref_sr_od", $ref_sr_od);
    $insert_stmt12->bindParam(":ref_sr_od_va", $ref_sr_od_va);
    $insert_stmt12->bindParam(":ref_sr_os", $ref_sr_os);
    $insert_stmt12->bindParam(":ref_sr_os_va", $ref_sr_os_va);
    $insert_stmt12->bindParam(":ref_sr_ou_va", $ref_sr_ou_va);
    $insert_stmt12->bindParam(":ref_dr_od", $ref_dr_od);
    $insert_stmt12->bindParam(":ref_dr_od_va", $ref_dr_od_va);
    $insert_stmt12->bindParam(":ref_dr_os", $ref_dr_os);
    $insert_stmt12->bindParam(":ref_dr_os_va", $ref_dr_os_va);
    $insert_stmt12->bindParam(":ref_dr_ou_va", $ref_dr_ou_va);
    $insert_stmt12->bindParam(":ref_ms_od", $ref_ms_od);
    $insert_stmt12->bindParam(":ref_ms_od_va", $ref_ms_od_va);
    $insert_stmt12->bindParam(":ref_ms_os", $ref_ms_os);
    $insert_stmt12->bindParam(":ref_ms_os_va", $ref_ms_os_va);
    $insert_stmt12->bindParam(":ref_ms_ou_va", $ref_ms_ou_va);
    $insert_stmt12->bindParam(":ref_bs_od", $ref_bs_od);
    $insert_stmt12->bindParam(":ref_bs_os", $ref_bs_os);
    $insert_stmt12->bindParam(":ref_bs_ou_va", $ref_bs_ou_va);
    $insert_stmt12->bindParam(":pi_id", $pi_id);
    $result12 = $insert_stmt12->execute();


    $sql13 = "INSERT INTO binocular_vission(
      bv_distance_h, bv_distance_bi, bv_distance_bo, bv_distance_vertical, bv_distance_supra, bv_distance_infra,
      bv_near_radio, bv_near_h, bv_near_bi, bv_near_bo, bv_near_vertical, bv_near_supra, bv_near_infra,
      bv_cal_radio, bv_cal_nra, bv_cal_pra, bv_cal_bcc, bv_cal_gradients, bv_cal_calculate_aca, bv_cal_calculate,
      bv_af_od, bv_af_os, bv_af_ou, bv_af_method, bv_vf_ou, bv_vf_method, bv_maddox, bv_assoiate, bv_prd,
      bv_ta, bv_ta_rang, pi_id
    ) 
    VALUES(
      :bv_distance_h, :bv_distance_bi, :bv_distance_bo, :bv_distance_vertical, :bv_distance_supra, :bv_distance_infra,
      :bv_near_radio, :bv_near_h, :bv_near_bi, :bv_near_bo, :bv_near_vertical, :bv_near_supra, :bv_near_infra,
      :bv_cal_radio, :bv_cal_nra, :bv_cal_pra, :bv_cal_bcc, :bv_cal_gradients, :bv_cal_calculate_aca, :bv_cal_calculate,
      :bv_af_od, :bv_af_os, :bv_af_ou, :bv_af_method, :bv_vf_ou, :bv_vf_method, :bv_maddox, :bv_assoiate, :bv_prd,
      :bv_ta, :bv_ta_rang, :pi_id
    )";
    $insert_stmt13 = $db->prepare($sql13);
    $insert_stmt13->bindParam(":bv_distance_h", $bv_distance_h);
    $insert_stmt13->bindParam(":bv_distance_bi", $bv_distance_bi);
    $insert_stmt13->bindParam(":bv_distance_bo", $bv_distance_bo);
    $insert_stmt13->bindParam(":bv_distance_vertical", $bv_distance_vertical);
    $insert_stmt13->bindParam(":bv_distance_supra", $bv_distance_supra);
    $insert_stmt13->bindParam(":bv_distance_infra", $bv_distance_infra);
    $insert_stmt13->bindParam(":bv_near_radio", $bv_near_radio);
    $insert_stmt13->bindParam(":bv_near_h", $bv_near_h);
    $insert_stmt13->bindParam(":bv_near_bi", $bv_near_bi);
    $insert_stmt13->bindParam(":bv_near_bo", $bv_near_bo);
    $insert_stmt13->bindParam(":bv_near_vertical", $bv_near_vertical);
    $insert_stmt13->bindParam(":bv_near_supra", $bv_near_supra);
    $insert_stmt13->bindParam(":bv_near_infra", $bv_near_infra);
    $insert_stmt13->bindParam(":bv_cal_radio", $bv_cal_radio);
    $insert_stmt13->bindParam(":bv_cal_nra", $bv_cal_nra);
    $insert_stmt13->bindParam(":bv_cal_pra", $bv_cal_pra);
    $insert_stmt13->bindParam(":bv_cal_bcc", $bv_cal_bcc);
    $insert_stmt13->bindParam(":bv_cal_gradients", $bv_cal_gradients);
    $insert_stmt13->bindParam(":bv_cal_calculate_aca", $bv_cal_calculate_aca);
    $insert_stmt13->bindParam(":bv_cal_calculate", $bv_cal_calculate);
    $insert_stmt13->bindParam(":bv_af_od", $bv_af_od);
    $insert_stmt13->bindParam(":bv_af_os", $bv_af_os);
    $insert_stmt13->bindParam(":bv_af_ou", $bv_af_ou);
    $insert_stmt13->bindParam(":bv_af_method", $bv_af_method);
    $insert_stmt13->bindParam(":bv_vf_ou", $bv_vf_ou);
    $insert_stmt13->bindParam(":bv_vf_method", $bv_vf_method);
    $insert_stmt13->bindParam(":bv_maddox", $bv_maddox);
    $insert_stmt13->bindParam(":bv_assoiate", $bv_assoiate);
    $insert_stmt13->bindParam(":bv_prd", $bv_prd);
    $insert_stmt13->bindParam(":bv_ta", $bv_ta);
    $insert_stmt13->bindParam(":bv_ta_rang", $bv_ta_rang);
    $insert_stmt13->bindParam(":pi_id", $pi_id);
    $result13 = $insert_stmt13->execute();


    $sql14 = "INSERT INTO additional_test(at_text, pi_id) VALUES(:at_text, :pi_id)";
    $insert_stmt14 = $db->prepare($sql14);
    $insert_stmt14->bindParam(":at_text", $at_text);
    $insert_stmt14->bindParam(":pi_id", $pi_id);
    $result14 = $insert_stmt14->execute();


    $sql15 = "INSERT INTO slit_lamp(
      as_lid_od, as_lid_os, as_conjunctiva_od, as_conjunctiva_os, as_sclera_od, as_sclera_os,
      as_cornea_od, as_cornea_os, as_tear, as_tear_od, as_tear_os, as_iris_od, as_iris_os,
      as_lens_od, as_lens_os, as_anterior_od, as_anterior_os, as_p_size_l_od, as_p_size_l_os,
      as_p_size_d_od, as_p_size_d_os, as_p_direct_od, as_p_direct_os, as_p_consensual_od,
      as_p_consensual_os, as_p_accommodate_od, as_p_accommodate_os, as_p_marcus_od, as_p_marcus_os,
      as_img, as_assessment, ps_radio, ps_media_od, ps_media_os, ps_vitreous_od, ps_vitreous_os,
      ps_cd_od, ps_cd_os, ps_disc_od, ps_disc_os, ps_avratio_od, ps_avratio_os, ps_avcrossing_od,
      ps_avcrossing_os, ps_macular_od, ps_macular_os, ps_fovea_od, ps_fovea_os, ps_bg_od, ps_bg_os,
      ps_periphery_od, ps_periphery_os, ps_img, ps_treatment, ps_next, ps_examinedby, pi_id
    ) VALUES(
      :as_lid_od, :as_lid_os, :as_conjunctiva_od, :as_conjunctiva_os, :as_sclera_od, :as_sclera_os,
      :as_cornea_od, :as_cornea_os, :as_tear, :as_tear_od, :as_tear_os, :as_iris_od, :as_iris_os,
      :as_lens_od, :as_lens_os, :as_anterior_od, :as_anterior_os, :as_p_size_l_od, :as_p_size_l_os,
      :as_p_size_d_od, :as_p_size_d_os, :as_p_direct_od, :as_p_direct_os, :as_p_consensual_od,
      :as_p_consensual_os, :as_p_accommodate_od, :as_p_accommodate_os, :as_p_marcus_od, :as_p_marcus_os,
      :as_img, :as_assessment, :ps_radio, :ps_media_od, :ps_media_os, :ps_vitreous_od, :ps_vitreous_os,
      :ps_cd_od, :ps_cd_os, :ps_disc_od, :ps_disc_os, :ps_avratio_od, :ps_avratio_os, :ps_avcrossing_od,
      :ps_avcrossing_os, :ps_macular_od, :ps_macular_os, :ps_fovea_od, :ps_fovea_os, :ps_bg_od, :ps_bg_os,
      :ps_periphery_od, :ps_periphery_os, :ps_img, :ps_treatment, :ps_next, :ps_examinedby, :pi_id
    )";

    $allow = array('jpg', 'jpeg', 'png');
    $extension1 = explode('.', $as_img['name']);
    $extension2 = explode('.', $ps_img['name']);
    $fileActExt1 = strtolower(end($extension1));
    $fileActExt2 = strtolower(end($extension2));
    $fileNew1 = rand() . "." . $fileActExt1;  // rand function create the rand number 
    $fileNew2 = rand() . "." . $fileActExt2;  // rand function create the rand number 
    $filePath1 = '../uploads/' . $fileNew1;
    $filePath2 = '../uploads/' . $fileNew2;

    $resultImg = in_array($fileActExt1, $allow) && in_array($fileActExt2, $allow);
    $checkResultImg = ($as_img['size'] > 0 && $as_img['error'] == 0) && ($ps_img['size'] > 0 && $ps_img['error'] == 0);
    $result_move_uploaded_file = (move_uploaded_file($as_img['tmp_name'], $filePath1)) && (move_uploaded_file($ps_img['tmp_name'], $filePath2));

    $insert_stmt15 = $db->prepare($sql15);

    // Anterior Segment 
    $insert_stmt15->bindParam(":as_lid_od", $as_lid_od);
    $insert_stmt15->bindParam(":as_lid_os", $as_lid_os);
    $insert_stmt15->bindParam(":as_conjunctiva_od", $as_conjunctiva_od);
    $insert_stmt15->bindParam(":as_conjunctiva_os", $as_conjunctiva_os);
    $insert_stmt15->bindParam(":as_sclera_od", $as_sclera_od);
    $insert_stmt15->bindParam(":as_sclera_os", $as_sclera_os);
    $insert_stmt15->bindParam(":as_cornea_od", $as_cornea_od);
    $insert_stmt15->bindParam(":as_cornea_os", $as_cornea_os);
    $insert_stmt15->bindParam(":as_tear", $as_tear);
    $insert_stmt15->bindParam(":as_tear_od", $as_tear_od);
    $insert_stmt15->bindParam(":as_tear_os", $as_tear_os);
    $insert_stmt15->bindParam(":as_iris_od", $as_iris_od);
    $insert_stmt15->bindParam(":as_iris_os", $as_iris_os);
    $insert_stmt15->bindParam(":as_lens_od", $as_lens_od);
    $insert_stmt15->bindParam(":as_lens_os", $as_lens_os);
    $insert_stmt15->bindParam(":as_anterior_od", $as_anterior_od);
    $insert_stmt15->bindParam(":as_anterior_os", $as_anterior_os);
    $insert_stmt15->bindParam(":as_p_size_l_od", $as_p_size_l_od);
    $insert_stmt15->bindParam(":as_p_size_l_os", $as_p_size_l_os);
    $insert_stmt15->bindParam(":as_p_size_d_od", $as_p_size_d_od);
    $insert_stmt15->bindParam(":as_p_size_d_os", $as_p_size_d_os);
    $insert_stmt15->bindParam(":as_p_direct_od", $as_p_direct_od);
    $insert_stmt15->bindParam(":as_p_direct_os", $as_p_direct_os);
    $insert_stmt15->bindParam(":as_p_consensual_od", $as_p_consensual_od);
    $insert_stmt15->bindParam(":as_p_consensual_os", $as_p_consensual_os);
    $insert_stmt15->bindParam(":as_p_accommodate_od", $as_p_accommodate_od);
    $insert_stmt15->bindParam(":as_p_accommodate_os", $as_p_accommodate_os);
    $insert_stmt15->bindParam(":as_p_marcus_od", $as_p_marcus_od);
    $insert_stmt15->bindParam(":as_p_marcus_os", $as_p_marcus_os);

    if ($resultImg) {
      if ($checkResultImg) {
        if ($result_move_uploaded_file) {
          // AS Image
          $insert_stmt15->bindParam(":as_img", $fileNew1);
          // PS Image
          $insert_stmt15->bindParam(":ps_img", $fileNew2);
        }
      }
    }

    $insert_stmt15->bindParam(":as_assessment", $as_assessment);

    // Posterior Segment
    $insert_stmt15->bindParam(":ps_radio", $ps_radio);
    $insert_stmt15->bindParam(":ps_media_od", $ps_media_od);
    $insert_stmt15->bindParam(":ps_media_os", $ps_media_os);
    $insert_stmt15->bindParam(":ps_vitreous_od", $ps_vitreous_od);
    $insert_stmt15->bindParam(":ps_vitreous_os", $ps_vitreous_os);
    $insert_stmt15->bindParam(":ps_cd_od", $ps_cd_od);
    $insert_stmt15->bindParam(":ps_cd_os", $ps_cd_os);
    $insert_stmt15->bindParam(":ps_disc_od", $ps_disc_od);
    $insert_stmt15->bindParam(":ps_disc_os", $ps_disc_os);
    $insert_stmt15->bindParam(":ps_avratio_od", $ps_avratio_od);
    $insert_stmt15->bindParam(":ps_avratio_os", $ps_avratio_os);
    $insert_stmt15->bindParam(":ps_avcrossing_od", $ps_avcrossing_od);
    $insert_stmt15->bindParam(":ps_avcrossing_os", $ps_avcrossing_os);
    $insert_stmt15->bindParam(":ps_macular_od", $ps_macular_od);
    $insert_stmt15->bindParam(":ps_macular_os", $ps_macular_os);
    $insert_stmt15->bindParam(":ps_fovea_od", $ps_fovea_od);
    $insert_stmt15->bindParam(":ps_fovea_os", $ps_fovea_os);
    $insert_stmt15->bindParam(":ps_bg_od", $ps_bg_od);
    $insert_stmt15->bindParam(":ps_bg_os", $ps_bg_os);
    $insert_stmt15->bindParam(":ps_periphery_od", $ps_periphery_od);
    $insert_stmt15->bindParam(":ps_periphery_os", $ps_periphery_os);
    $insert_stmt15->bindParam(":ps_treatment", $ps_treatment);
    $insert_stmt15->bindParam(":ps_next", $ps_next);
    $insert_stmt15->bindParam(":ps_examinedby", $ps_examinedby);
    $insert_stmt15->bindParam(":pi_id", $pi_id);
    $result15 = $insert_stmt15->execute();


    $sql16 = "INSERT INTO prescription(
      pc_name, pc_age, pc_date, pc_sphere_od, pc_sphere_os, pc_cylinder_od, pc_cylinder_os,
      pc_axis_od, pc_axis_os, pc_add_od, pc_add_os, pc_prism_od, pc_prism_os, pc_va_od, pc_va_os,
      pc_pd_od, pc_pd_os, pc_fitting_od, pc_fitting_os, 
      pc_checkbox1, pc_checkbox_detail1, pc_checkbox2, pc_checkbox_detail2, 
      pc_checkbox3, pc_checkbox_detail3, pc_checkbox4, pc_checkbox_detail4, 
      pc_checkbox5, pc_checkbox_detail5, pc_checkbox6, pc_checkbox_detail6,
      pc_checkbox7, pc_checkbox_detail7, pc_note, pi_id
    ) VALUES(
      :pc_name, :pc_age, :pc_date, :pc_sphere_od, :pc_sphere_os, :pc_cylinder_od, :pc_cylinder_os,
      :pc_axis_od, :pc_axis_os, :pc_add_od, :pc_add_os, :pc_prism_od, :pc_prism_os, :pc_va_od, :pc_va_os,
      :pc_pd_od, :pc_pd_os, :pc_fitting_od, :pc_fitting_os,
      :pc_checkbox1, :pc_checkbox_detail1, :pc_checkbox2, :pc_checkbox_detail2, 
      :pc_checkbox3, :pc_checkbox_detail3, :pc_checkbox4, :pc_checkbox_detail4, 
      :pc_checkbox5, :pc_checkbox_detail5, :pc_checkbox6, :pc_checkbox_detail6,
      :pc_checkbox7, :pc_checkbox_detail7, :pc_note, :pi_id
    )";
    $insert_stmt16 = $db->prepare($sql16);
    $insert_stmt16->bindParam(":pc_name", $pc_name);
    $insert_stmt16->bindParam(":pc_age", $pc_age);
    $insert_stmt16->bindParam(":pc_date", $pc_date);
    $insert_stmt16->bindParam(":pc_sphere_od", $pc_sphere_od);
    $insert_stmt16->bindParam(":pc_sphere_os", $pc_sphere_os);
    $insert_stmt16->bindParam(":pc_cylinder_od", $pc_cylinder_od);
    $insert_stmt16->bindParam(":pc_cylinder_os", $pc_cylinder_os);
    $insert_stmt16->bindParam(":pc_axis_od", $pc_axis_od);
    $insert_stmt16->bindParam(":pc_axis_os", $pc_axis_os);
    $insert_stmt16->bindParam(":pc_add_od", $pc_add_od);
    $insert_stmt16->bindParam(":pc_add_os", $pc_add_os);
    $insert_stmt16->bindParam(":pc_prism_od", $pc_prism_od);
    $insert_stmt16->bindParam(":pc_prism_os", $pc_prism_os);
    $insert_stmt16->bindParam(":pc_va_od", $pc_va_od);
    $insert_stmt16->bindParam(":pc_va_os", $pc_va_os);
    $insert_stmt16->bindParam(":pc_pd_od", $pc_pd_od);
    $insert_stmt16->bindParam(":pc_pd_os", $pc_pd_os);
    $insert_stmt16->bindParam(":pc_fitting_od", $pc_fitting_od);
    $insert_stmt16->bindParam(":pc_fitting_os", $pc_fitting_os);
    $insert_stmt16->bindParam(":pc_checkbox1", $pc_checkbox1);
    $insert_stmt16->bindParam(":pc_checkbox_detail1", $pc_checkbox_detail1);
    $insert_stmt16->bindParam(":pc_checkbox2", $pc_checkbox2);
    $insert_stmt16->bindParam(":pc_checkbox_detail2", $pc_checkbox_detail2);
    $insert_stmt16->bindParam(":pc_checkbox3", $pc_checkbox3);
    $insert_stmt16->bindParam(":pc_checkbox_detail3", $pc_checkbox_detail3);
    $insert_stmt16->bindParam(":pc_checkbox4", $pc_checkbox4);
    $insert_stmt16->bindParam(":pc_checkbox_detail4", $pc_checkbox_detail4);
    $insert_stmt16->bindParam(":pc_checkbox5", $pc_checkbox5);
    $insert_stmt16->bindParam(":pc_checkbox_detail5", $pc_checkbox_detail5);
    $insert_stmt16->bindParam(":pc_checkbox6", $pc_checkbox6);
    $insert_stmt16->bindParam(":pc_checkbox_detail6", $pc_checkbox_detail6);
    $insert_stmt16->bindParam(":pc_checkbox7", $pc_checkbox7);
    $insert_stmt16->bindParam(":pc_checkbox_detail7", $pc_checkbox_detail7);
    $insert_stmt16->bindParam(":pc_note", $pc_note);
    $insert_stmt16->bindParam(":pi_id", $pi_id);
    $result16 = $insert_stmt16->execute();

    $result = $result1 && $result2 && $result3 && $result4 && $result5 && $result6 && $result7 && $result8 && $result9 && $result10 && $result11 && $result12 && $result13 && $result14 && $result15 && $result16;

    if ($result) {
      echo "<script>alert('บันทึกข้อมูลสำเร็จ!');</script>";
      header('refresh:1; ../index.php');
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
