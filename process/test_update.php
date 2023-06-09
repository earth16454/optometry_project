<?php

require_once('config.php');

if (isset($_REQUEST['submit'])) {

  // Page 1

  // Table 1 : personal_information
  $pi_id = $_REQUEST['pi_id'];
  $pi_firstname = $_REQUEST['pi_fname'];
  $pi_lastname = $_REQUEST['pi_lname'];
  $pi_birthdate = $_REQUEST['pi_birth'];
  $pi_gender = $_REQUEST['pi_gender'];
  $pi_tel = $_REQUEST['pi_tel'];
  $pi_occupation = $_REQUEST['pi_occupation'];
  $pi_address = $_REQUEST['pi_address'];

  // echo $pi_id;
  // echo $pi_firstname;
  // echo $pi_lastname;
  // echo $pi_birthdate;
  // echo $pi_gender;
  // echo $pi_tel;
  // echo $pi_occupation;
  // echo $pi_address;
  // // Table 2 : chief_complaint
  // $cc_text = $_REQUEST['cc_text'];
  // $cc_symptoms = $_REQUEST['cc_symptoms'];

  // // Table 3 : POHx
  // $POHx_checked = $_REQUEST['POHx_checked'];
  // $POHx_reason = $_REQUEST['POHx_reason'];
  // $POHx_inspector = $_REQUEST['POHx_inspector'];
  // $POHx_site = $_REQUEST['POHx_site'];
  // $POHx_mydriatic = $_REQUEST['POHx_mydriatic'];
  // $POHx_results = $_REQUEST['POHx_results'];
  // $POHx_edited = $_REQUEST['POHx_edited'];
  // $POHx_radio = $_REQUEST['POHx_radio'];
  // $POHx_radio_detail = $_REQUEST['POHx_radio_detail'];

  // // Table 4 : HA_Hx
  // $ha_radio = $_REQUEST['ha_radio'];
  // $ha_radio_detail = $_REQUEST['ha_radio_detail'];

  // // Table 5 : PMHx
  // $PMHx_checked = $_REQUEST['PMHx_checked'];
  // $PMHx_reason = $_REQUEST['PMHx_reason'];
  // $PMHx_inspector = $_REQUEST['PMHx_inspector'];
  // $PMHx_site = $_REQUEST['PMHx_site'];
  // $PMHx_results = $_REQUEST['PMHx_results'];
  // $PMHx_pressure = $_REQUEST['PMHx_pressure'];
  // $PMHx_sugar = $_REQUEST['PMHx_sugar'];
  // $PMHx_disease = $_REQUEST['PMHx_disease'];

  // // Table 6 : medication
  // $med_radio = $_REQUEST['med_radio'];
  // $med_radio_detail = $_REQUEST['med_radio_detail'];
  // $med_KKK = $_REQUEST['med_KKK'];

  // // Table 7 : FmHx
  // $FmHx_text = $_REQUEST['FmHx_text'];

  // // Table 8 : ohe
  // $ohe_work = $_REQUEST['ohe_work'];
  // $ohe_hobby = $_REQUEST['ohe_hobby'];
  // $ohe_checkbox1 = Null;
  // $ohe_checkbox_detail1 = Null;
  // $ohe_checkbox2 = Null;
  // $ohe_checkbox_detail2 = Null;
  // $ohe_checkbox3 = Null;
  // $ohe_checkbox_detail3 = Null;
  // $ohe_checkbox4 = Null;
  // $ohe_checkbox_detail4 = Null;
  // if (isset($_REQUEST['ohe_checkbox1'])) {
  //   $ohe_checkbox1 = $_REQUEST['ohe_checkbox1'];
  //   $ohe_checkbox_detail1 = $_REQUEST['ohe_checkbox_detail1'];
  // }
  // if (isset($_REQUEST['ohe_checkbox2'])) {
  //   $ohe_checkbox2 = $_REQUEST['ohe_checkbox2'];
  //   $ohe_checkbox_detail2 = $_REQUEST['ohe_checkbox_detail2'];
  // }
  // if (isset($_REQUEST['ohe_checkbox3'])) {
  //   $ohe_checkbox3 = $_REQUEST['ohe_checkbox3'];
  //   $ohe_checkbox_detail3 = $_REQUEST['ohe_checkbox_detail3'];
  // }
  // if (isset($_REQUEST['ohe_checkbox4'])) {
  //   $ohe_checkbox4 = $_REQUEST['ohe_checkbox4'];
  //   $ohe_checkbox_detail4 = $_REQUEST['ohe_checkbox_detail4'];
  // }

  // // Table 9 : patient_response
  // $pr_radio = $_REQUEST['pr_radio'];
  // $pr_other = $_REQUEST['pr_other'];


  // // Page 2

  // // Table 10 old_Rx
  // $old_Rx = $_REQUEST['old_Rx'];
  // $old_Rx1_od = $_REQUEST['old_Rx1_od'];
  // $old_Rx1_os = $_REQUEST['old_Rx1_os'];
  // $old_Rx1_add = $_REQUEST['old_Rx1_add'];
  // $old_Rx1_pd = $_REQUEST['old_Rx1_pd'];
  // $old_Rx2_od = $_REQUEST['old_Rx2_od'];
  // $old_Rx2_os = $_REQUEST['old_Rx2_os'];
  // $old_Rx2_add = $_REQUEST['old_Rx2_add'];
  // $old_Rx2_pd = $_REQUEST['old_Rx2_pd'];

  // $old_VAsc_distance_od = $_REQUEST['vasc_distance_od'];
  // $old_VAsc_distance_os = $_REQUEST['vasc_distance_os'];
  // $old_VAsc_distance_ou = $_REQUEST['vasc_distance_ou'];
  // $old_VAsc_near_od = $_REQUEST['vasc_near_od'];
  // $old_VAsc_near_os = $_REQUEST['vasc_near_os'];
  // $old_VAsc_near_ou = $_REQUEST['vasc_near_ou'];
  // $old_VAsc_pinhole_od = $_REQUEST['vasc_pinhole_od'];
  // $old_VAsc_pinhole_os = $_REQUEST['vasc_pinhole_os'];

  // $old_VAcc_distance_od = $_REQUEST['vacc_distance_od'];
  // $old_VAcc_distance_os = $_REQUEST['vacc_distance_os'];
  // $old_VAcc_distance_ou = $_REQUEST['vacc_distance_ou'];
  // $old_VAcc_near_od = $_REQUEST['vacc_near_od'];
  // $old_VAcc_near_os = $_REQUEST['vacc_near_os'];
  // $old_VAcc_near_ou = $_REQUEST['vacc_near_ou'];
  // $old_VAcc_pinhole_od = $_REQUEST['vacc_pinhole_od'];
  // $old_VAcc_pinhole_os = $_REQUEST['vacc_pinhole_os'];

  // // Table 11 : preliminary_exam
  // $pe_distance = $_REQUEST['pd_distance'];
  // $pe_near = $_REQUEST['pd_near'];
  // $pe_npa_od = $_REQUEST['npa_od'];
  // $pe_npa_os = $_REQUEST['npa_os'];
  // $pe_aa_od = $_REQUEST['aa_od'];
  // $pe_aa_os = $_REQUEST['aa_os'];

  // $npc1 = $_REQUEST['npc1'];
  // $npc2 = $_REQUEST['npc2'];
  // $pe_npc = $npc1 . " / " . $npc2;
  // $pe_motility = $_REQUEST['motility'];
  // $pe_con = $_REQUEST['confrontation'];
  // $pe_cover_distance = $_REQUEST['pe_cover_distance'];
  // $pe_cover_near = $_REQUEST['pe_cover_near'];
  // $pe_cover_dots = $_REQUEST['pe_cover_dots'];
  // $pe_so_near = $_REQUEST['pe_so_near'];
  // $pe_so_type = $_REQUEST['pe_so_type'];
  // $pe_color_od = $_REQUEST['pe_color_od'];
  // $pe_color_os = $_REQUEST['pe_color_os'];
  // $pe_color_type = $_REQUEST['pe_color_type'];
  // $pe_grid = $_REQUEST['pe_grid'];
  // $pe_grid_od = $_REQUEST['pe_grid_od'];
  // $pe_grid_os = $_REQUEST['pe_grid_os'];
  // $pe_grid_time = $_REQUEST['pe_grid_time'];

  // // Table 12 : refraction
  // $ref_km_od = $_REQUEST['ref_km_od1'] . " / " . $_REQUEST['ref_km_od2'];
  // $ref_km_os = $_REQUEST['ref_km_os1'] . " / " . $_REQUEST['ref_km_os2'];
  // $ref_sr_od = $_REQUEST['ref_sr_od'];
  // $ref_sr_od_va = $_REQUEST['ref_sr_od_va'];
  // $ref_sr_os = $_REQUEST['ref_sr_os'];
  // $ref_sr_os_va = $_REQUEST['ref_sr_os_va'];
  // $ref_sr_ou_va = $_REQUEST['ref_sr_ou_va'];

  // $ref_dr_od = $_REQUEST['ref_dr_od'];
  // $ref_dr_od_va = $_REQUEST['ref_dr_od_va'];
  // $ref_dr_os = $_REQUEST['ref_dr_os'];
  // $ref_dr_os_va = $_REQUEST['ref_dr_os_va'];
  // $ref_dr_ou_va = $_REQUEST['ref_dr_ou_va'];

  // $ref_ms_od = $_REQUEST['ref_ms_od'];
  // $ref_ms_od_va = $_REQUEST['ref_ms_od_va'];
  // $ref_ms_os = $_REQUEST['ref_ms_os'];
  // $ref_ms_os_va = $_REQUEST['ref_ms_os_va'];
  // $ref_ms_ou_va = $_REQUEST['ref_ms_ou_va'];

  // $ref_bs_od = $_REQUEST['ref_bs_od'];
  // $ref_bs_os = $_REQUEST['ref_bs_os'];
  // $ref_bs_ou_va = $_REQUEST['ref_bs_ou_va'];

  // // Table 13 : binocular_vission 

  // $bv_distance_h = $_REQUEST['bv_distance_h'];
  // $bv_distance_bi = $_REQUEST['bv_distance_bi1'] . " / " . $_REQUEST['bv_distance_bi2'] . " / " . $_REQUEST['bv_distance_bi3'];
  // $bv_distance_bo = $_REQUEST['bv_distance_bo1'] . " / " . $_REQUEST['bv_distance_bo2'] . " / " . $_REQUEST['bv_distance_bo3'];
  // $bv_distance_vertical = $_REQUEST['bv_distance_vertical'];
  // $bv_distance_supra = $_REQUEST['bv_distance_supra1'] . " / " . $_REQUEST['bv_distance_supra2'];
  // $bv_distance_infra = $_REQUEST['bv_distance_infra1'] . " / " . $_REQUEST['bv_distance_infra2'];

  // $bv_near_radio = $_REQUEST['bv_near_radio'];
  // $bv_near_h = $_REQUEST['bv_near_h'];
  // $bv_near_bi = $_REQUEST['bv_near_bi1'] . " / " . $_REQUEST['bv_near_bi2'] . " / " . $_REQUEST['bv_near_bi3'];
  // $bv_near_bo = $_REQUEST['bv_near_bo1'] . " / " . $_REQUEST['bv_near_bo2'] . " / " . $_REQUEST['bv_near_bo3'];
  // $bv_near_vertical = $_REQUEST['bv_near_vertical'];
  // $bv_near_supra = $_REQUEST['bv_near_supra1'] . " / " . $_REQUEST['bv_near_supra2'];
  // $bv_near_infra = $_REQUEST['bv_near_infra1'] . " / " . $_REQUEST['bv_near_infra2'];

  // $bv_cal_radio = $_REQUEST['bv_cal_radio'];
  // $bv_cal_nra = $_REQUEST['bv_cal_nra'];
  // $bv_cal_pra = $_REQUEST['bv_cal_pra'];
  // $bv_cal_bcc = $_REQUEST['bv_cal_bcc'];
  // $bv_cal_gradients = $_REQUEST['bv_cal_gradients'];
  // $bv_cal_calculate_aca = $_REQUEST['bv_cal_calculate_aca'];
  // $bv_cal_calculate = $_REQUEST['bv_cal_calculate'];

  // $bv_af_od = $_REQUEST['bv_af_od'];
  // $bv_af_os = $_REQUEST['bv_af_os'];
  // $bv_af_ou = $_REQUEST['bv_af_ou'];
  // $bv_af_method = $_REQUEST['bv_af_method'];
  // $bv_vf_ou = $_REQUEST['bv_vf_ou'];
  // $bv_vf_method = $_REQUEST['bv_vf_method'];
  // $bv_maddox = $_REQUEST['bv_maddox'];
  // $bv_assoiate = $_REQUEST['bv_assoiate'];
  // $bv_prd = $_REQUEST['bv_prd'];
  // $bv_ta = $_REQUEST['bv_ta'];
  // $bv_ta_rang = $_REQUEST['bv_ta_rang1'] . " to " . $_REQUEST['bv_ta_rang1'];

  // // Table 14 : additional_test
  // $at_text = $_REQUEST['at_text'];

  // // Table 15 : slit_lamp
  // $as_lid_od = $_REQUEST['as_lid_od'];
  // $as_lid_os = $_REQUEST['as_lid_os'];
  // $as_conjunctiva_od = $_REQUEST['as_conjunctiva_od'];
  // $as_conjunctiva_os = $_REQUEST['as_conjunctiva_os'];
  // $as_sclera_od = $_REQUEST['as_sclera_od'];
  // $as_sclera_os = $_REQUEST['as_sclera_os'];

  // $as_cornea_od = $_REQUEST['as_cornea_od'];
  // $as_cornea_os = $_REQUEST['as_cornea_os'];
  // $as_tear = $_REQUEST['as_tear'];
  // $as_tear_od = $_REQUEST['as_tear_od'];
  // $as_tear_os = $_REQUEST['as_tear_os'];
  // $as_iris_od = $_REQUEST['as_iris_od'];
  // $as_iris_os = $_REQUEST['as_iris_os'];
  // $as_lens_od = $_REQUEST['as_lens_od'];
  // $as_lens_os = $_REQUEST['as_lens_os'];
  // $as_anterior_od = $_REQUEST['as_anterior_od'];
  // $as_anterior_os = $_REQUEST['as_anterior_os'];
  // $as_p_size_l_od = $_REQUEST['as_p_size_l_od'];
  // $as_p_size_l_os = $_REQUEST['as_p_size_l_os'];
  // $as_p_size_d_od = $_REQUEST['as_p_size_d_od'];
  // $as_p_size_d_os = $_REQUEST['as_p_size_d_os'];
  // $as_p_direct_od = $_REQUEST['as_p_direct_od'];
  // $as_p_direct_os = $_REQUEST['as_p_direct_os'];
  // $as_p_consensual_od = $_REQUEST['as_p_consensual_od'];
  // $as_p_consensual_os = $_REQUEST['as_p_consensual_os'];
  // $as_p_accommodate_od = $_REQUEST['as_p_accommodate_od'];
  // $as_p_accommodate_os = $_REQUEST['as_p_accommodate_os'];
  // $as_p_marcus_od = $_REQUEST['as_p_marcus_od'];
  // $as_p_marcus_os = $_REQUEST['as_p_marcus_os'];
  // $as_img = $_FILES['as_img'];
  // $as_assessment = $_REQUEST['as_assessment'];

  // $ps_radio = $_REQUEST['ps_radio'];
  // $ps_media_od = $_REQUEST['ps_media_od'];
  // $ps_media_os = $_REQUEST['ps_media_os'];
  // $ps_vitreous_od = $_REQUEST['ps_vitreous_od'];
  // $ps_vitreous_os = $_REQUEST['ps_vitreous_os'];
  // $ps_cd_od = $_REQUEST['ps_cd_od'];
  // $ps_cd_os = $_REQUEST['ps_cd_os'];
  // $ps_disc_od = $_REQUEST['ps_disc_od'];
  // $ps_disc_os = $_REQUEST['ps_disc_os'];
  // $ps_avratio_od = $_REQUEST['ps_avratio_od'];
  // $ps_avratio_os = $_REQUEST['ps_avratio_os'];
  // $ps_avcrossing_od = $_REQUEST['ps_avcrossing_od'];
  // $ps_avcrossing_os = $_REQUEST['ps_avcrossing_os'];
  // $ps_macular_od = $_REQUEST['ps_macular_od'];
  // $ps_macular_os = $_REQUEST['ps_macular_os'];
  // $ps_fovea_od = $_REQUEST['ps_fovea_od'];
  // $ps_fovea_os = $_REQUEST['ps_fovea_os'];
  // $ps_bg_od = $_REQUEST['ps_bg_od'];
  // $ps_bg_os = $_REQUEST['ps_bg_os'];
  // $ps_periphery_od = $_REQUEST['ps_periphery_od'];
  // $ps_periphery_os = $_REQUEST['ps_periphery_os'];
  // $ps_img = $_FILES['ps_img'];
  // $ps_treatment = $_REQUEST['ps_treatment'];
  // $ps_next = $_REQUEST['ps_next'];
  // $ps_examinedby = $_REQUEST['ps_examinedby'];

  // // Table 16 : prescription
  // $pc_name = $_REQUEST['pc_name'];
  // $pc_age = $_REQUEST['pc_age'];
  // $pc_date = $_REQUEST['pc_date'];
  // $pc_sphere_od = $_REQUEST['pc_sphere_od'];
  // $pc_sphere_os = $_REQUEST['pc_sphere_os'];
  // $pc_cylinder_od = $_REQUEST['pc_cylinder_od'];
  // $pc_cylinder_os = $_REQUEST['pc_cylinder_os'];
  // $pc_axis_od = $_REQUEST['pc_axis_od'];
  // $pc_axis_os = $_REQUEST['pc_axis_os'];
  // $pc_add_od = $_REQUEST['pc_add_od'];
  // $pc_add_os = $_REQUEST['pc_add_os'];
  // $pc_prism_od = $_REQUEST['pc_prism_od'];
  // $pc_prism_os = $_REQUEST['pc_prism_os'];
  // $pc_va_od = $_REQUEST['pc_va_od'];
  // $pc_va_os = $_REQUEST['pc_va_os'];
  // $pc_pd_od = $_REQUEST['pc_pd_od'];
  // $pc_pd_os = $_REQUEST['pc_pd_os'];
  // $pc_fitting_od = $_REQUEST['pc_fitting_od'];
  // $pc_fitting_os = $_REQUEST['pc_fitting_os'];
  // $pc_checkbox1 = Null;
  // $pc_checkbox2 = Null;
  // $pc_checkbox3 = Null;
  // $pc_checkbox4 = Null;
  // $pc_checkbox5 = Null;
  // $pc_checkbox6 = Null;
  // $pc_checkbox7 = Null;
  // $pc_checkbox_detail1 = Null;
  // $pc_checkbox_detail2 = Null;
  // $pc_checkbox_detail3 = Null;
  // $pc_checkbox_detail4 = Null;
  // $pc_checkbox_detail5 = Null;
  // $pc_checkbox_detail6 = Null;
  // $pc_checkbox_detail7 = Null;
  // if (isset($_REQUEST['pc_checkbox1'])) {
  //   $pc_checkbox1 = $_REQUEST['pc_checkbox1'];
  //   $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail1'];
  // }
  // if (isset($_REQUEST['pc_checkbox2'])) {
  //   $pc_checkbox1 = $_REQUEST['pc_checkbox2'];
  //   $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail2'];
  // }
  // if (isset($_REQUEST['pc_checkbox3'])) {
  //   $pc_checkbox1 = $_REQUEST['pc_checkbox3'];
  //   $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail3'];
  // }
  // if (isset($_REQUEST['pc_checkbox4'])) {
  //   $pc_checkbox1 = $_REQUEST['pc_checkbox4'];
  //   $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail4'];
  // }
  // if (isset($_REQUEST['pc_checkbox5'])) {
  //   $pc_checkbox1 = $_REQUEST['pc_checkbox5'];
  //   $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail5'];
  // }
  // if (isset($_REQUEST['pc_checkbox6'])) {
  //   $pc_checkbox1 = $_REQUEST['pc_checkbox6'];
  //   $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail6'];
  // }
  // if (isset($_REQUEST['pc_checkbox7'])) {
  //   $pc_checkbox1 = $_REQUEST['pc_checkbox7'];
  //   $pc_checkbox_detail1 = $_REQUEST['pc_checkbox_detail7'];
  // }
  // $pc_note = $_REQUEST['pc_note'];


  try {
    $sql1 = "UPDATE personal_information SET
      pi_firstname = :pi_firstname, pi_lastname = :pi_lastname, pi_birthdate = :pi_birthdate, 
      pi_gender = :pi_gender, pi_address = :pi_address, pi_tel = :pi_tel, pi_occupation = :pi_occupation
      WHERE pi_id = :pi_id";
    $insert_stmt1 = $db->prepare($sql1);
    $insert_stmt1->bindParam(":pi_id", $pi_id);
    $insert_stmt1->bindParam(":pi_firstname", $pi_firstname);
    $insert_stmt1->bindParam(":pi_lastname", $pi_lastname);
    $insert_stmt1->bindParam(":pi_birthdate", $pi_birthdate);
    $insert_stmt1->bindParam(":pi_gender", $pi_gender);
    $insert_stmt1->bindParam(":pi_address", $pi_address);
    $insert_stmt1->bindParam(":pi_tel", $pi_tel);
    $insert_stmt1->bindParam(":pi_occupation", $pi_occupation);
    $result1 = $insert_stmt1->execute();

    // $pi_id = $db->lastInsertId();


    // $sql2 = "INSERT INTO chief_complaint(cc_text, cc_symptoms, pi_id) VALUES(:cc_text, :cc_symptoms, :pi_id)";
    // $insert_stmt2 = $db->prepare($sql2);
    // $insert_stmt2->bindParam(":cc_text", $cc_text);
    // $insert_stmt2->bindParam(":cc_symptoms", $cc_symptoms);
    // $insert_stmt2->bindParam(":pi_id", $pi_id);
    // $result2 = $insert_stmt2->execute();




    $result = $result1;

    if ($result1) {
      echo "<script>alert('บันทึกข้อมูลสำเร็จ!');</script>";
      header("refresh:1; ../edit.php?pi_id=$pi_id");
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
