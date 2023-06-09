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

  
  $pi_firstname = $data_pi['pi_firstname'];
  $pi_lastname = $data_pi['pi_lastname'];
  $pi_birthdate = $data_pi['pi_birthdate'];
  $pi_gender = $data_pi['pi_gender'];
  $pi_tel = $data_pi['pi_tel'];
  $pi_occupation = $data_pi['pi_occupation'];
  $pi_address = $data_pi['pi_address'];

}


?>