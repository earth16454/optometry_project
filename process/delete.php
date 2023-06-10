<?php

require_once('config.php');

if(isset($_GET['delete'])){

  $delete_id = $_GET['delete'];

  $delete_stmt = $db->query("DELETE FROM additional_test WHERE at_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM binocular_vission WHERE bv_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM chief_complaint WHERE cc_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM fmhx WHERE FmHx_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM ha_hx WHERE ha_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM medication WHERE med_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM ohe WHERE ohe_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM old_rx WHERE old_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM patient_response WHERE pr_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM pmhx WHERE PMHx_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM pohx WHERE POHx_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM preliminary_exam WHERE pe_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM prescription WHERE pc_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM refraction WHERE ref_id = $delete_id");
  $delete_stmt->execute();
  $delete_stmt = $db->query("DELETE FROM slit_lamp WHERE as_id = $delete_id");
  $delete_stmt->execute();

  $delete_stmt = $db->query("DELETE FROM personal_information WHERE pi_id = $delete_id");
  $delete_stmt->execute();
  
  if ($delete_stmt) {
    echo "<script>alert('Data has been deleted successfully');</script>";
    header("refresh:1; ../admin.php");
  }
}

?>