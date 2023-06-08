<?php

session_start();

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

  // $ha_radio = $_REQUEST['ha_radio'];
  // $ha_radio_detail = $_REQUEST['ha_radio_detail'];

  if (empty($pi_firstname)) {
    $_SESSION['error'] = 'Please enter First name';
    header("location: ../index.php");
  } else if (empty($pi_lastname)) {
    $_SESSION['error'] = 'Please enter Last name';
    header("location: ../index.php");
  } else if (empty($pi_birthdate)) {
    $_SESSION['error'] = 'Please enter Birthdate';
    header("location: ../index.php");
  } else if (empty($pi_gender)) {
    $_SESSION['error'] = 'Please enter Gender';
    header("location: ../index.php");
  } else if (empty($pi_tel)) {
    $_SESSION['error'] = 'Please enter Telephone number';
    header("location: ../index.php");
  } else if (empty($pi_occupation)) {
    $_SESSION['error'] = 'Please enter Occupation';
    header("location: ../index.php");
  } else if (empty($pi_address)) {
    $_SESSION['error'] = 'Please enter Address';
    header("location: ../index.php");
  } else if (empty($cc_text)) {
    $_SESSION['error'] = 'Please enter Chief Complaint';
    header("location: ../index.php");
  } else if (empty($cc_symptoms)) {
    $_SESSION['error'] = 'Please enter symptom blurry';
    header("location: ../index.php");
  } else if (empty($POHx_checked)) {
    $_SESSION['error'] = 'Please enter POHx checked';
    header("location: ../index.php");
  } else if (empty($POHx_reason)) {
    $_SESSION['error'] = 'Please enter POHx The reason for the examination';
    header("location: ../index.php");
  } else if (empty($POHx_inspector)) {
    $_SESSION['error'] = 'Please enter POHx inspector';
    header("location: ../index.php");
  } else if (empty($POHx_site)) {
    $_SESSION['error'] = 'Please enter ';
    header("location: ../index.php");
  } else if (empty($POHx_mydriatic)) {
    $_SESSION['error'] = 'Please enter ';
    header("location: ../index.php");
  } else if (empty($POHx_results)) {
    $_SESSION['error'] = 'Please enter ';
    header("location: ../index.php");
  } else if (empty($POHx_edited)) {
    $_SESSION['error'] = 'Please enter ';
    header("location: ../index.php");
  } else if (empty($POHx_radio)) {
    $_SESSION['error'] = 'Please enter ';
    header("location: ../index.php");
  } else if (empty($POHx_radio_detail)) {
    $_SESSION['error'] = 'Please enter ';
    header("location: ../index.php");
  }
  // else if(empty($ha_radio)){
  //   $errorMsg = "Error ha_radio";

  // } else if(empty($ha_radio_detail)){
  //   $errorMsg = "Error ha_radio_detail";

  // } 
  else {
    try {
      if (!isset($errorMsg)) {
        $insert_stmt1 = $db->prepare("INSERT INTO personal_information(pi_firstname, pi_lastname, pi_birthdate, pi_gender, pi_address, pi_tel, pi_occupation) VALUES(:pi_firstname, :pi_lastname, :pi_birthdate, :pi_gender, :pi_address, :pi_tel, :pi_occupation)");
        $insert_stmt1->bindParam(":pi_firstname", $pi_firstname);
        $insert_stmt1->bindParam(":pi_lastname", $pi_lastname);
        $insert_stmt1->bindParam(":pi_birthdate", $pi_birthdate);
        $insert_stmt1->bindParam(":pi_gender", $pi_gender);
        $insert_stmt1->bindParam(":pi_address", $pi_address);
        $insert_stmt1->bindParam(":pi_tel", $pi_tel);
        $insert_stmt1->bindParam(":pi_occupation", $pi_occupation);
        $result1 = $insert_stmt1->execute();

        $insert_stmt2 = $db->prepare("INSERT INTO chief_complaint(cc_text, cc_symptoms) VALUES(:cc_text, :cc_symptoms)");
        $insert_stmt2->bindParam(":cc_text", $cc_text);
        $insert_stmt2->bindParam(":cc_symptoms", $cc_symptoms);
        $result2 = $insert_stmt2->execute();

        $insert_stmt3 = $db->prepare("INSERT INTO pohx(POHx_checked, POHx_reason, POHx_inspector, POHx_site, POHx_mydriatic, POHx_results, POHx_edited, POHx_radio, POHx_radio_detail) VALUES(:POHx_checked, :POHx_reason, :POHx_inspector, :POHx_site, :POHx_mydriatic, :POHx_results, :POHx_edited, :POHx_radio, :POHx_radio_detail)");
        $insert_stmt3->bindParam(":POHx_checked", $POHx_checked);
        $insert_stmt3->bindParam(":POHx_reason", $POHx_reason);
        $insert_stmt3->bindParam(":POHx_inspector", $POHx_inspector);
        $insert_stmt3->bindParam(":POHx_site", $POHx_site);
        $insert_stmt3->bindParam(":POHx_mydriatic", $POHx_mydriatic);
        $insert_stmt3->bindParam(":POHx_results", $POHx_results);
        $insert_stmt3->bindParam(":POHx_edited", $POHx_edited);
        $insert_stmt3->bindParam(":POHx_radio", $POHx_radio);
        $insert_stmt3->bindParam(":POHx_radio_detail", $POHx_radio_detail);
        $result3 = $insert_stmt3->execute();

        if ($result1 && $result2 && $result3 && $result4) {
          $insertMsg = "Insert Successfully...";
          header('refresh:1; ../index.php');
        }
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
