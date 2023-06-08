<?php

require_once('config.php');

if (isset($_REQUEST['submit'])) {
  $pi_firstname = $_REQUEST['pi_fname'];
  $pi_lastname = $_REQUEST['pi_lname'];
  $pi_birthdate = $_REQUEST['pi_birth'];
  $pi_gender = $_REQUEST['pi_gender'];
  $pi_tel = $_REQUEST['pi_tel'];
  $pi_occupation = $_REQUEST['pi_occupation'];
  $pi_address = $_REQUEST['pi_address'];

  $cc_text = $_REQUEST['cc_text'];
  $cc_symptoms = $_REQUEST['cc_symptoms'];

  $POHx_checked = $_REQUEST['POHx_checked'];
  $POHx_reason = $_REQUEST['POHx_reason'];
  $POHx_inspector = $_REQUEST['POHx_inspector'];
  $POHx_site = $_REQUEST['POHx_site'];
  $POHx_mydriatic = $_REQUEST['POHx_mydriatic'];
  $POHx_results = $_REQUEST['POHx_results'];
  $POHx_edited = $_REQUEST['POHx_edited'];
  $POHx_radio = $_REQUEST['POHx_radio'];
  $POHx_radio_detail = $_REQUEST['POHx_radio_detail'];

  $ha_radio = $_REQUEST['ha_radio'];
  $ha_radio_detail = $_REQUEST['ha_radio_detail'];

  $PMHx_checked = $_REQUEST['PMHx_checked'];
  $PMHx_reason = $_REQUEST['PMHx_reason'];
  $PMHx_inspector = $_REQUEST['PMHx_inspector'];
  $PMHx_site = $_REQUEST['PMHx_site'];
  $PMHx_results = $_REQUEST['PMHx_results'];
  $PMHx_pressure = $_REQUEST['PMHx_pressure'];
  $PMHx_sugar = $_REQUEST['PMHx_sugar'];
  $PMHx_disease = $_REQUEST['PMHx_disease'];

  $med_radio = $_REQUEST['med_radio'];
  $med_radio_detail = $_REQUEST['med_radio_detail'];
  $med_KKK = $_REQUEST['med_KKK'];

  $FmHx_text = $_REQUEST['FmHx_text'];

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

  $pr_radio = $_REQUEST['pr_radio'];
  $pr_other = $_REQUEST['pr_other'];


  try {

    $insert_stmt1 = $db->prepare("INSERT INTO personal_information(pi_firstname, pi_lastname, pi_birthdate, pi_gender, pi_address, pi_tel, pi_occupation) VALUES(:pi_firstname, :pi_lastname, :pi_birthdate, :pi_gender, :pi_address, :pi_tel, :pi_occupation)");
    $insert_stmt1->bindParam(":pi_firstname", $pi_firstname);
    $insert_stmt1->bindParam(":pi_lastname", $pi_lastname);
    $insert_stmt1->bindParam(":pi_birthdate", $pi_birthdate);
    $insert_stmt1->bindParam(":pi_gender", $pi_gender);
    $insert_stmt1->bindParam(":pi_address", $pi_address);
    $insert_stmt1->bindParam(":pi_tel", $pi_tel);
    $insert_stmt1->bindParam(":pi_occupation", $pi_occupation);
    $result1 = $insert_stmt1->execute();

    $pi_id = $db->lastInsertId();

    $insert_stmt2 = $db->prepare("INSERT INTO chief_complaint(cc_text, cc_symptoms, pi_id) VALUES(:cc_text, :cc_symptoms, :pi_id)");
    $insert_stmt2->bindParam(":cc_text", $cc_text);
    $insert_stmt2->bindParam(":cc_symptoms", $cc_symptoms);
    $insert_stmt2->bindParam(":pi_id", $pi_id);
    $result2 = $insert_stmt2->execute();

    $insert_stmt3 = $db->prepare("INSERT INTO pohx(POHx_checked, POHx_reason, POHx_inspector, POHx_site, POHx_mydriatic, POHx_results, POHx_edited, POHx_radio, POHx_radio_detail, pi_id) VALUES(:POHx_checked, :POHx_reason, :POHx_inspector, :POHx_site, :POHx_mydriatic, :POHx_results, :POHx_edited, :POHx_radio, :POHx_radio_detail, :pi_id)");
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

    $insert_stmt4 = $db->prepare("INSERT INTO ha_hx(ha_radio, ha_radio_detail, pi_id) VALUES(:ha_radio, :ha_radio_detail, :pi_id)");
    $insert_stmt4->bindParam(":ha_radio", $ha_radio);
    $insert_stmt4->bindParam(":ha_radio_detail", $ha_radio_detail);
    $insert_stmt4->bindParam(":pi_id", $pi_id);
    $result4 = $insert_stmt4->execute();

    $insert_stmt5 = $db->prepare("INSERT INTO pmhx(PMHx_checked, PMHx_reason, PMHx_inspector, PMHx_site, PMHx_results, PMHx_pressure, PMHx_sugar, PMHx_disease, pi_id) VALUES(:PMHx_checked, :PMHx_reason, :PMHx_inspector, :PMHx_site, :PMHx_results, :PMHx_pressure, :PMHx_sugar, :PMHx_disease, :pi_id)");
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

    $insert_stmt6 = $db->prepare("INSERT INTO medication(med_radio, med_radio_detail, med_KKK, pi_id) VALUES(:med_radio, :med_radio_detail, :med_KKK, :pi_id)");
    $insert_stmt6->bindParam(":med_radio", $med_radio);
    $insert_stmt6->bindParam(":med_radio_detail", $med_radio_detail);
    $insert_stmt6->bindParam(":med_KKK", $med_KKK);
    $insert_stmt6->bindParam(":pi_id", $pi_id);
    $result6 = $insert_stmt6->execute();

    $insert_stmt7 = $db->prepare("INSERT INTO fmhx(FmHx_text, pi_id) VALUES(:FmHx_text, :pi_id)");
    $insert_stmt7->bindParam(":FmHx_text", $FmHx_text);
    $insert_stmt7->bindParam(":pi_id", $pi_id);
    $result7 = $insert_stmt7->execute();

    $insert_stmt8 = $db->prepare("INSERT INTO ohe(ohe_work, ohe_hobby, ohe_checkbox1, ohe_checkbox_detail1, ohe_checkbox2, ohe_checkbox_detail2, ohe_checkbox3, ohe_checkbox_detail3, ohe_checkbox4, ohe_checkbox_detail4, pi_id) VALUES(:ohe_work, :ohe_hobby, :ohe_checkbox1, :ohe_checkbox_detail1, :ohe_checkbox2, :ohe_checkbox_detail2, :ohe_checkbox3, :ohe_checkbox_detail3, :ohe_checkbox4, :ohe_checkbox_detail4, :pi_id)");
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

    $insert_stmt9 = $db->prepare("INSERT INTO patient_response(pr_radio, pr_other, pi_id) VALUES(:pr_radio, :pr_other, :pi_id)");
    $insert_stmt9->bindParam(":pr_radio", $pr_radio);
    $insert_stmt9->bindParam(":pr_other", $pr_other);
    $insert_stmt9->bindParam(":pi_id", $pi_id);
    $result9 = $insert_stmt9->execute();

    if ($result1 && $result2 && $result3 && $result4 && $result5 && $result6 && $result7 && $result8 && $result9) {
      $insertMsg = "Insert Successfully...";
      header('refresh:1; ../index.php');
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
