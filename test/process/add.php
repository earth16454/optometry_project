<?php

  require_once('config.php');

  if(isset($_REQUEST['submit'])){
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

    if(empty($pi_fname)){
      $errorMsg = "Error pi_fname";
      header("location: ../index.php");
    } else if(empty($pi_lname)){
      $errorMsg = "Error pi_lname";
      header("location: ../index.php");
    } else if(empty($pi_birth)){
      $errorMsg = "Error pi_birth";
      header("location: ../index.php");
    } else if(empty($pi_gender)){
      $errorMsg = "Error pi_gender";
      header("location: ../index.php");
    } else if(empty($pi_tel)){
      $errorMsg = "Error pi_tel";
      header("location: ../index.php");
    } else if(empty($pi_occupation)){
      $errorMsg = "Error pi_occupation";
      header("location: ../index.php");
    } else if(empty($pi_address)){
      $errorMsg = "Error pi_address";
      header("location: ../index.php");
    } else if(empty($cc_text)){
      $errorMsg = "Error cc_text";
      header("location: ../index.php");
    } else if(empty($cc_symptoms)){
      $errorMsg = "Error cc_symptoms";
      header("location: ../index.php");
    } else if(empty($POHx_checked)){
      $errorMsg = "Error POHx_checked";
      header("location: ../index.php");
    } else if(empty($POHx_reason)){
      $errorMsg = "Error POHx_reason";
      header("location: ../index.php");
    } else if(empty($pi_lname)){
      $errorMsg = "Error pi_lname";
      header("location: ../index.php");
    } else if(empty($POHx_inspector)){
      $errorMsg = "Error POHx_inspector";
      header("location: ../index.php");
    } else if(empty($POHx_site)){
      $errorMsg = "Error POHx_site";
      header("location: ../index.php");
    } else if(empty($POHx_mydriatic)){
      $errorMsg = "Error POHx_mydriatic";
      header("location: ../index.php");
    } else if(empty($POHx_results)){
      $errorMsg = "Error POHx_results";
      header("location: ../index.php");
    } else if(empty($POHx_edited)){
      $errorMsg = "Error POHx_edited";
      header("location: ../index.php");
    } else if(empty($POHx_radio)){
      $errorMsg = "Error POHx_radio";
      header("location: ../index.php");
    } else if(empty($POHx_radio_detail)){
      $errorMsg = "Error POHx_radio_detail";
      header("location: ../index.php");
    } else if(empty($ha_radio)){
      $errorMsg = "Error ha_radio";
      header("location: ../index.php");
    } else if(empty($ha_radio_detail)){
      $errorMsg = "Error ha_radio_detail";
      header("location: ../index.php");
    } else {
      try {
        if(!isset($errorMsg)){
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

          $mixedID = $db->lastInsertId();

          $insert_stmt4 = $db->prepare("INSERT INTO mixed_data(pi_id, cc_id, POHx_id) VALUES(:pi_id, :cc_id, :POHx_id)");
          $insert_stmt4->bindParam(":pi_id", $mixedID);
          $insert_stmt4->bindParam(":cc_id", $mixedID);
          $insert_stmt4->bindParam(":POHx_id", $mixedID);
          $result4 = $insert_stmt4->execute();

          if($result1 && $result2 && $result3 && $result4){
            $insertMsg = "Insert Successfully...";
            header('refresh:1; ../index.php');
          }
        }

      } catch(PDOException $e) {
        echo $e->getMessage();
      }
    }

  }

?>