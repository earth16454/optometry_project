<?php 

if(isset($_REQUEST['submit'])){
  $check1 = $_REQUEST['select'];

  $msg = $check1;
  echo "<script>alert('Hello! I am an alert box!');</script>";
  header("refresh:1; test2.php");
}

?>