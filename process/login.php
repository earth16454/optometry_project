<?php

session_start();
require_once('config.php');

if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];


  if (empty($email)) {
    $_SESSION['error'] = 'กรุณากรอกอีเมล';
    header("location: ../signin.php");
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
    header("location: ../signin.php");
  } else if (empty($password)) {
    $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
    header("location: ../signin.php");
  } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
    header("location: ../signin.php");
  } else {
    try {

      $check_data = $db->prepare("SELECT * FROM admins WHERE admin_email = :email");
      $check_data->bindParam(":email", $email);
      $check_data->execute();
      $row = $check_data->fetch(PDO::FETCH_ASSOC);

      if ($check_data->rowCount() > 0) {

        if ($email == $row['admin_email']) {
          if ($password == $row['admin_password']) {
            $_SESSION['admin_login'] = $row['admin_id'];
            header("location: ../admin.php");
          } else {
            $_SESSION['error'] = 'รหัสผ่านผิด';
            header("location: ../signin.php");
          }
        } else {
          $_SESSION['error'] = 'อีเมลผิด';
          header("location: ../signin.php");
        }
      } else {
        $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
        header("location: ../signin.php");
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
